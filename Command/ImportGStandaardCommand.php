<?php

namespace PharmaIntelligence\GstandaardBundle\Command;

use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Console\Input\InputArgument;

class ImportGStandaardCommand extends ContainerAwareCommand
{
	protected $output = null;

	protected $importType = self::IMPORT_FULL;

	protected $recordMap = array();

	const IMPORT_FULL = 1;
	const IMPORT_MUTATIES = 2;

	const MUTATIE_GEEN = 0;
	const MUTATIE_VERWIJDER = 1;
	const MUTATIE_WIJZIGEN = 2;
	const MUTATIE_NIEUW = 3;

	const GSTANDAARD_URL = 'https://www.z-index.nl/@@download-file?filename=';
	const ALLE_BESTANDEN = 'all';
	protected $bestand = self::ALLE_BESTANDEN;
    
	protected function configure()
	{
		$this
			->setName('pharma-intelligence:g-standaard:import')
			->setDescription('Importeerd G-Standaard')
            ->addOption(
                'metAddOnHistorie',
                null,
                InputOption::VALUE_NONE,
                'bestand met add-on historie ook meenemen'
            )
			->addOption(
			    'alleenMutaties',
			    null,
			    InputOption::VALUE_NONE,
			    'Wanneer alleen records met een mutatiecode > 0 moeten worden verwerkt')
		    ->addOption(
		        'skipHistorie',
		        null,
		        InputOption::VALUE_NONE,
		        'Geen historie wegschrijven')
            ->addOption(
                'skipNotification',
                null,
                InputOption::VALUE_NONE,
                'Geen event dispatchen')
            ->addArgument('bestand', InputArgument::OPTIONAL, 'bestand om te importeren', self::ALLE_BESTANDEN)
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
	    $this->bestand = $input->getArgument('bestand');
	    if($this->bestand !== self::ALLE_BESTANDEN) {
	        $output->writeln('Alleen bestand '.$this->bestand);
	    }
		$this->downloadGStandaard($input, $output);
		$this->extractGStandaard($input, $output);
		if(!$input->getOption('skipHistorie')) {
		  $this->updateAddOnHistorie($input, $output);
		} else {
		    $output->writeln('skipHistorie');
		}
		$this->importGstandaard($input, $output);
		$this->updateCacheTables($input, $output);
		$this->updateSlugs($input, $output);

        if($input->getOption('metAddOnHistorie')) {
            $this->importHistorischAddOnBestand($output);
        }

        if(!$input->getOption('skipNotification')) {
            /**
             * Notify subscibers
             */
            $event = new Event();
            $eventDispatcher = $this->getContainer()->get('event_dispatcher');
            $eventDispatcher->dispatch('pharmaintelligence.gstandaard.import.complete', $event);
        }
	}
	
	public function updateAddOnHistorie(InputInterface $input, OutputInterface $output) {
	    $output->writeln(date('[H:i:s]').' Add-ons wegschrijven in historie-bestand');
	    $datumAddOn = date('Y-m-01');
	    $statement = \Propel::getConnection()->prepare("
	        REPLACE INTO gs_supplementaire_producten_historie
	        SELECT ?, zindex_nummer, nza_maximum_tarief_inc_btw_laag, thesaurus_nummer_soort_supplementair_product, soort_supplementair_product
	        FROM gs_supplementaire_producten_met_nza_maximumtarief
	    ");
	    $statement->execute(array($datumAddOn));
	    $output->writeln(date('[H:i:s]').' Add-ons wegschrijven afgerond');
	}

	protected function downloadGStandaard(InputInterface $input, OutputInterface $output) {
		$output->writeln(date('[H:i:s]').' Start downloaden G-Standaard');
		$downloadDirectory = $this->getContainer()->get('kernel')->locateResource('@PharmaIntelligenceGstandaardBundle/Resources/g-standaard/');
		$downloadLocation = $downloadDirectory.'GSTNDDB.ZIP';

		$user = $this->getContainer()->getParameter('pi.gstandaard.user');
        $password = $this->getContainer()->getParameter('pi.gstandaard.password');
        $url = self::GSTANDAARD_URL.'GSTNDDB';
        $output->writeln(date('[H:i:s]').' URL: '.$url);
		$out = fopen($downloadLocation, 'wb');
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
		curl_setopt($curl, CURLOPT_USERPWD, $user.":".$password);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_FILE, $out);
		$result = curl_exec($curl);
		$info = curl_getinfo($curl);
		if($result === false || $info['http_code'] != 200) {
			throw new \Exception(sprintf('Fout bij downloaden G-Standaard. HTTP# %s. Error code %s - %s: ', $info['http_code'], curl_errno($curl), curl_error($curl)));
		}
		$output->writeln(date('[H:i:s]').' Downloaded: '.filesize($downloadLocation).' bytes');
		$output->writeln(date('[H:i:s]').' Gereed downloaden G-Standaard');
	}

	protected function extractGStandaard(InputInterface $input, OutputInterface $output) {
		$output->writeln(date('[H:i:s]').' Start uitpakken G-Standaard');
		$outputLocation = $this->getContainer()->get('kernel')->locateResource('@PharmaIntelligenceGstandaardBundle/Resources/g-standaard/');
		$zip = new \ZipArchive();
		$result = $zip->open($outputLocation.'GSTNDDB.ZIP');
		if($result !== true) {
			throw new \Exception('Unable to open G-Standaard ZIP');
		}
		$zip->extractTo($outputLocation);
		$zip->close();
		unlink($outputLocation.'GSTNDDB.ZIP');
		$output->writeln(date('[H:i:s]').' Gereed uitpakken G-Standaard');
	}

	protected function updateCacheTables(InputInterface $input, OutputInterface $output) {
		$output->writeln('<info>Cache tabellen bijwerken</info>');
		$output->writeln('Truncating gs_artikel_eigenschappen');
		\Propel::getConnection()->query('TRUNCATE TABLE gs_artikel_eigenschappen;');
		$output->writeln('Filling gs_artikel_eigenschappen');
		\Propel::getConnection()->query('
				REPLACE INTO gs_artikel_eigenschappen (
                    zindex_nummer
                ,   verpakkings_hoeveelheid
                ,   hoofdverpakking_omschrijving
                ,   deelverpakking_omschrijving
                ,   basiseenheid_omschrijving
                ,   inkoophoeveelheid_omschrijving
                ,   verpakkings_hoeveelheid_omschrijving
                ,   hpk
                ,   prk
                ,   gpk
                ,   atc
                ,   etiket_naam
                ,   merk_naam
                ,   hpk_naam
                ,   prk_naam
                ,   gpk_naam
                ,   stof_naam
                ,   atc_naam
                ,   leverancier_nummer
                ,   leverancier_naam
                ,   is_zvz
                ,   is_dwg
                ,   artikelnummer_fabrikant
                ,   toedieningsvorm
                ,   toedieningsweg
                ,   farmaceutische_vorm
                ,   productgroep
                ,   primaire_werkzame_stof_naam
                ,   primaire_werkzame_stof_eenheid
                ,   primaire_werkzame_stof_hoeveelheid
                ,   meest_recente_aip
                ,   emballage_naam
                )
                SELECT
					a.`zinummer`
				,	IF(t3.`naam_item_50_posities` != "STUK", a.`aantal_hoofdverpakkingen`*a.`aantal_deelverpakkingen`, a.`aantal_deelverpakkingen`*a.`aantal_hoofdverpakkingen`*a.`hoeveelheid_per_deelverpakking`) as verpakkings_hoeveelheid
				,	t1.`naam_item_50_posities`
				,	t2.`naam_item_50_posities`
				,	t3.`naam_item_50_posities`
				,	t4.`naam_item_50_posities` as x
                ,	IF(t3.`naam_item_50_posities` != "STUK", t2.naam_item_50_posities, t3.naam_item_50_posities) as verpakkings_hoeveelheid_omschrijving
				,	a.`handelsproduktkode`
				,	hpk.`prkcode`
				,	pri.`generiekeproductcode`
				,	gpk.`atccode`
				,	n1.`naam_volledig`
				,	hpk.`merkstamnaam`
				,	n2.`naam_volledig`
				,	n3.`naam_volledig`
				,	n4.`naam_volledig`
				,	n5.`naam_volledig`
				,	atc.`atcnederlandse_omschrijving`
				,	l.`naw_nummer`
				,	l.`naam`
				,	IF(COUNT(bijz.`mutatiekode`) > 0, 1, 0) as is_zvz
				,	IF(COUNT(dwg.`mutatiekode`) > 0, 1, 0) as is_dwg
				,	a.`fabrikant_artikelkodering`
				,	t5.`naam_item_50_posities`
                ,   GROUP_CONCAT(DISTINCT t10.naam_item_50_posities ORDER BY t10.naam_item_50_posities SEPARATOR ", ")
				,	t6.`naam_item_50_posities`
				,	t7.`naam_item_50_posities`
				,	nam.generieke_naam
				,	t8.`naam_item_4_posities`
				,	IF(t3.`naam_item_50_posities` = "MILLILITER", sam.hoeveelheid_werkzame_stof*a.`hoeveelheid_per_deelverpakking`, sam.hoeveelheid_werkzame_stof)
				,	a.`inkoopprijs`
                ,   t9.naam_item_50_posities
				FROM `gs_artikelen` as a
				LEFT JOIN `gs_naw_gegevens_gstandaard` as l ON a.`leverancier_kode` = l.`naw_nummer`
				LEFT JOIN `gs_handelsproducten` as hpk ON a.`handelsproduktkode` = hpk.`handelsproduktkode`
				LEFT JOIN `gs_voorschrijfpr_geneesmiddel_identific` as pri ON hpk.`prkcode` = pri.`prkcode`
				LEFT JOIN `gs_voorschrijfproducten` as prk ON pri.`prkcode` = prk.`prkcode`
				LEFT JOIN `gs_generieke_producten` as gpk ON pri.`generiekeproductcode` = gpk.`generiekeproductcode`
				LEFT JOIN `gs_atc_codes` as atc ON gpk.`atccode` = atc.`atccode`
				LEFT JOIN `gs_bijzondere_kenmerken` as bijz ON (hpk.`handelsproduktkode` = bijz.`handelsproduktkode` AND bijz.`bijzondere_kenmerk` = 106)
                LEFT JOIN gs_supplementaire_producten_met_nza_maximumtarief as dwg ON dwg.zindex_nummer = a.zinummer AND dwg.mutatiekode <> 1
		    
				LEFT JOIN gs_namen as n1 ON a.`artikelnaamnummer` = n1.`naamnummer`
				LEFT JOIN gs_namen as n2 ON hpk.`handelsproduktnaamnummer` = n2.`naamnummer`
				LEFT JOIN gs_namen as n3 ON prk.`naamnummer_prescriptie_product` = n3.`naamnummer`
				LEFT JOIN gs_namen as n4 ON gpk.`naamnummer_volledige_gpknaam` = n4.`naamnummer`
				LEFT JOIN gs_namen as n5 ON gpk.`naamnummer_gpkstofnaam` = n5.`naamnummer`
				LEFT JOIN `gs_thesauri_totaal` as t1 ON a.`hoofdverpakking_omschrijving_kode` = t1.`thesaurus_itemnummer` AND a.`hoofdverpakking_omschrijving_thesnr` = t1.`thesaurusnummer`
				LEFT JOIN `gs_thesauri_totaal` as t2 ON a.`deelverpakking_omschrijving_kode` = t2.`thesaurus_itemnummer` AND a.`deelverpakking_omschrijving_thesnr` = t2.`thesaurusnummer`
				LEFT JOIN `gs_thesauri_totaal` as t3 ON hpk.`basiseenheid_verpakking` = t3.`thesaurus_itemnummer` AND hpk.`basiseenheid_verpakking_thesnr` = t3.`thesaurusnummer`
				LEFT JOIN `gs_thesauri_totaal` as t4 ON hpk.`eenheid_inkoophoeveelheid`= t4.`thesaurus_itemnummer` AND hpk.`eenheid_inkoophoeveelheid_thesnr` = t4.`thesaurusnummer`
				LEFT JOIN `gs_thesauri_totaal` as t5 ON t5.thesaurusnummer = 7 AND t5.thesaurus_itemnummer = gpk.`toedieningsweg_code`
				LEFT JOIN `gs_thesauri_totaal` as t6 ON t6.thesaurusnummer = 6 AND t6.thesaurus_itemnummer = gpk.`farmaceutische_vorm_code`
				LEFT JOIN `gs_thesauri_totaal` as t7 ON t7.thesaurusnummer = 20 AND t7.thesaurus_itemnummer = hpk.`produktgroep_kode`
				LEFT JOIN `gs_ingegeven_samenstellingen` as sam ON sam.`aanduiding_werkzaamhulpstof` = "W" AND sam.`volgnummer` = 1 AND sam.`handelsproduktkode` = hpk.`handelsproduktkode`
				LEFT JOIN `gs_eenheden` as eenh ON eenh.`code` = sam.`handelsproduktkode` AND eenh.soort_code = 1 AND eenh.eenheid = sam.`eenhhoeveelheid_werkzame_stof_kode` AND eenh.hoeveelheid > 0
				LEFT JOIN `gs_thesauri_totaal` as t8 ON t8.thesaurusnummer = 2 AND t8.thesaurus_itemnummer = sam.`eenhhoeveelheid_werkzame_stof_kode`
				LEFT JOIN `gs_generieke_namen` as nam ON sam.`generiekenaamkode` = nam.`generiekenaamkode`
                LEFT JOIN `gs_thesauri_totaal` as t9 ON t9.thesaurusnummer = 73 AND t9.thesaurus_itemnummer = pri.emballagetype_kode
                LEFT JOIN gs_enkelvoudige_toedieningswegen_hpk as thpk ON hpk.`handelsproduktkode` = thpk.handelsproduktkode
                LEFT JOIN `gs_thesauri_totaal` as t10 ON t10.thesaurusnummer = 7 AND t10.thesaurus_itemnummer = thpk.enkelvoudige_toedieningsweg_itemnr
				WHERE zinummer > 0
				GROUP BY a.`zinummer`');
		$output->writeln('Filling ATC extended table');
		\Propel::getConnection()->query("
		    REPLACE INTO gs_atc_codes_extended
            SELECT
            	a.atccode AS atccode
            ,	a.atcnederlandse_omschrijving AS atcnederlandse_omschrijving
            ,	b.atccode
            ,	b.atcnederlandse_omschrijving AS anatomische_hoofdgroep
            ,	c.atccode
            ,	c.atcnederlandse_omschrijving AS therapeutische_hoofdgroep
            ,	d.atccode
            ,	d.atcnederlandse_omschrijving AS therapeutische_subgroep
            ,	e.atccode
            ,	e.atcnederlandse_omschrijving AS chemische_subgroep
            ,	f.atccode
            ,	f.atcnederlandse_omschrijving AS chemische_stofnaam
            ,	CONCAT(
            		IFNULL(b.atcnederlandse_omschrijving, ''),' / ',
            		IFNULL(c.atcnederlandse_omschrijving, ''),' / ',
            		IFNULL(d.atcnederlandse_omschrijving, ''),' / ',
            		IFNULL(e.atcnederlandse_omschrijving, ''),' / ',
            		IFNULL(f.atcnederlandse_omschrijving, '')) as volledige_naam
            ,	GROUP_CONCAT(DISTINCT IF(hpk.merkstamnaam = '', NULL, hpk.merkstamnaam) SEPARATOR ', ') as merken
            FROM gs_atc_codes a
            LEFT JOIN gs_atc_codes b on substr(a.atccode,1,1) = b.atccode
            LEFT JOIN gs_atc_codes c on rpad(substr(a.atccode,1,3),3,'?') = c.atccode
            LEFT JOIN gs_atc_codes d on rpad(substr(a.atccode,1,4),4,'?') = d.atccode
            LEFT JOIN gs_atc_codes e on rpad(substr(a.atccode,1,5),5,'?') = e.atccode
            LEFT JOIN gs_atc_codes f on rpad(substr(a.atccode,1,7),7,'?') = f.atccode
            LEFT JOIN gs_generieke_producten as gpk ON a.atccode = gpk.atccode
            LEFT JOIN gs_voorschrijfpr_geneesmiddel_identific as prk ON(gpk.generiekeproductcode = prk.generiekeproductcode AND prk.prkcode > 0)
            LEFT JOIN gs_handelsproducten as hpk USING(prkcode)
            LEFT JOIN gs_artikelen as art USING(handelsproduktkode)
            WHERE LENGTH(a.atccode) > 0
            GROUP BY a.atccode
		");
	}

	protected function importGstandaard(InputInterface $input, OutputInterface $output) {
		$output->writeln('<info>Importeren G-Standaard</info>');
		if($input->getOption('alleenMutaties')) {
			$output->writeln('<info>Alleen mutaties importeren</info>');
			$this->importType = self::IMPORT_MUTATIES;
		}
		else {
			$output->writeln('<info>Volledige G-Standaard importeren</info>');
		}
		\Propel::getConnection()->query('SET FOREIGN_KEY_CHECKS = 0;');
		\Propel::disableInstancePooling();
		$this->output = $output;
		$start = time();
		$zindexConfig = $this->getContainer()->get('kernel')->locateResource('@PharmaIntelligenceGstandaardBundle/Resources/config/zindex.yml');
		$this->zindexConfig = \sfYaml::load($zindexConfig);
		$this->mapRecordlengths();
		foreach($this->zindexConfig['import'] as $fileName => $import) {
		    if($this->bestand !== self::ALLE_BESTANDEN && $fileName != $this->bestand) {
		        continue;
		    }
			try {
				$this->import($fileName, $import);
			}
			catch(\Exception $e) {
				$output->writeln('<error>Import '.$fileName.' failed: '.$e->getMessage().'</error>');
			}
		}
		$output->writeln('G-standaard bijgewerkt');
		$output->writeln('Tijd: '.(time()-$start).' seconden');
	}


    protected function importHistorischAddOnBestand(OutputInterface $output) {
        $output->writeln(date('[H:i:s]').' Start downloaden historisch add-on bestand');
        $downloadLocation = $this->getContainer()->get('kernel')->locateResource('@PharmaIntelligenceGstandaardBundle/Resources/g-standaard/').'addonhist.csv';
        $out = fopen($downloadLocation, 'wb');

        $url = self::GSTANDAARD_URL.'addonhist.csv';
        $output->writeln('URL: '.$url);
        $curl = curl_init($url);
        $user = $this->getContainer()->getParameter('pi.gstandaard.user');
        $password = $this->getContainer()->getParameter('pi.gstandaard.password');
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_USERPWD, $user.":".$password);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_FILE, $out);
        $result = curl_exec($curl);
        $info = curl_getinfo($curl);
        if($result === false || $info['http_code'] != 200) {
            throw new \Exception(sprintf('Fout bij downloaden bestand. HTTP# %s. Error code %s - %s: ', $info['http_code'], curl_errno($curl), curl_error($curl)));
        }
        $output->writeln('Downloaded: '.filesize($downloadLocation).' bytes');
        $output->writeln(date('[H:i:s]').' Gereed downloaden historisch add-on bestand');

        $fh = fopen($downloadLocation, 'r');
        $headers = fgetcsv($fh, null, ';');
        $sql = 'REPLACE INTO gs_historisch_bestand_add_on VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $statement = \Propel::getConnection()->prepare($sql);
        while($row = fgetcsv($fh, null, ';')) {
            $artikelExists = GsArtikelEigenschappenQuery::create()
                ->filterByZindexNummer($row[0])
                ->count();
            if($artikelExists == 0) {
                continue;
            }
            $row[2] = $row[2]/100;
            $row[4] = $row[4]/1000000;
            $row[10] = \DateTime::createFromFormat('Ymd', $row[10])->format('Y-m-d');
            if(empty($row[11]) || $row[11] == "0") {
                $row[11] = 20991231;
            }
            $row[11] = \DateTime::createFromFormat('Ymd', $row[11])->format('Y-m-d');

            $statement->execute($row);
        }
        fclose($fh);
        unlink($downloadLocation);
    }

	protected function updateSlugs(InputInterface $input, OutputInterface $output) {
		$output->writeln('Slugs bijwerken');
		$this->createLeverancierSlugs();
		$this->createArtikelSlugs();
		$output->writeln('Slugs bijgewerkt');
	}

	protected function createArtikelSlugs() {
		$zindexNummers = GsArtikelenQuery::create()
			->select(array('ZiNummer'))
			->where('Slug IS NULL')
			->find();
		foreach($zindexNummers as $int => $nummer) {
			$artikel = GsArtikelenQuery::create()
				->findOneByZinummer($nummer);
			$artikel->save();
		}
	}

	protected function createLeverancierSlugs() {
		$leveranciers = GsNawGegevensGstandaardQuery::create()
			->where('Slug IS NULL')
			->find();
		foreach($leveranciers as $leverancier) {
			$leverancier->save();
		}
	}

		protected function import($fileName, array $importData) {
			$start = time();
			$this->output->writeln('<info>Importing '.$importData['_attributes']['table'].' ('.$fileName.')</info>');
			$fullFilename = $this->getContainer()->get('kernel')->locateResource('@PharmaIntelligenceGstandaardBundle/Resources/g-standaard/'.$fileName);
			$omClass = 'PharmaIntelligence\\GstandaardBundle\\Model\\'.$importData['_attributes']['modelClass'];

			if(!file_exists($fullFilename))
				throw new \Exception($fullFilename.' does not exists');
			$fh = fopen($fullFilename, 'r');
			$progress = new ProgressBar($this->output, $this->recordMap[$fileName]['totaal']);
			$progress->setFormat('debug');
			$progress->start();
			$recordsPerStap = floor($this->recordMap[$fileName]['totaal']/100);
			if($recordsPerStap == 0)
				$recordsPerStap = 1;
			 $progress->setRedrawFrequency($recordsPerStap);

			// Vorige maand gewijzigde rijen op code geen wijzigingen zetten.
			$sql = 'UPDATE '.constant($omClass.'Peer::TABLE_NAME').' SET mutatiekode = 0 WHERE mutatiekode IN ('.self::MUTATIE_WIJZIGEN.', '.self::MUTATIE_NIEUW.')';
			\Propel::getConnection()->query($sql);

			while(($row = fgets($fh)) == true) {
				$progress->advance();
				$rowData = $this->getRowData($row, $importData);
				if($this->importType == self::IMPORT_FULL || $fileName == 'BST000T') {
					$this->updateRow($rowData, $omClass);

				}
				else {
					switch($rowData['mutatiekode']) {
						case self::MUTATIE_GEEN:
							break;
						case self::MUTATIE_NIEUW:
							$this->updateRow($rowData, $omClass);
							break;
						case self::MUTATIE_VERWIJDER:
							$this->updateRow($rowData, $omClass);
							break;
						case self::MUTATIE_WIJZIGEN:
							$this->updateRow($rowData, $omClass);
							break;
					}
				}
			}
			fclose($fh);
			unlink($fullFilename);
			$progress->finish();
			$this->output->writeln('');
			$this->output->writeln('<comment>'.$this->recordMap[$fileName]['totaal'].' records in G-Standaard.</comment>');
			if($this->importType == self::IMPORT_FULL)
				$this->output->writeln('<comment>'.$this->recordMap[$fileName]['totaal'].' records verwerkt.</comment>');
			else {
				$this->output->writeln('<comment>'.(int)$this->recordMap[$fileName]['vervallen'].' records vervallen.</comment>');
				$this->output->writeln('<comment>'.(int)$this->recordMap[$fileName]['gewijzigd'].' records gewijzigd.</comment>');
				$this->output->writeln('<comment>'.(int)$this->recordMap[$fileName]['nieuw'].' records nieuw.</comment>');
				$this->output->writeln('<comment>'.($this->recordMap[$fileName]['totaal']-$this->recordMap[$fileName]['ongewijzigd']).' records verwerkt.</comment>');
			}

			$this->output->writeln('<info>Tijd: '. (time()-$start).' seconden</info>');
			$this->output->writeln(' ');
		}


		protected function updateRow($rowData, $omClass) {

			$peerClass = $omClass.'Peer';
			$values = $rowData;
			$values['mutatiekode'] = $values['mutatie_code'];
			unset($values['mutatie_code']);


			$sql = 'REPLACE '.constant($peerClass.'::TABLE_NAME').' (';
			$sql .= implode(', ', array_keys($values));
			$sql .= ') VALUES (';

			$sql .= implode(', ', array_fill(0, count($values), '?'));
			$sql .= ')';
			$stmt = \Propel::getConnection()->prepare($sql);
			$values = array_values($values);
			$stmt->execute($values);

			return;
		}

		protected function getRowData($rowString, $importData) {
			$rowData = array('mutatie_code' => trim(substr($rowString, 4, 1)));
			foreach($importData as $fieldName => $params) {
				if($fieldName == '_attributes')
					continue;
				$rowData[$fieldName] = trim(substr($rowString, $params['start'], $params['length']));
			}
			return $this->mapDataRow($importData, $rowData);
		}

		protected function mapDataRow($dataDict, $row) {
			foreach($dataDict as $field => $fieldOptions) {
				if($field == '_attributes')
					continue;
				switch($fieldOptions['type']) {
					case 'decimal':
						$row[$field] = $row[$field]/pow(10, $fieldOptions['scale']);
						break;
					case 'integer':
						$row[$field] = ltrim($row[$field], 0);
						break;
					case 'date':
						$date = $row[$field];
						if(empty($date))
							$date = null;
						else
							$row[$field] = substr($date, 4, 4).'-'.substr($date, 2, 2).'-'.substr($date, 0, 2);
						break;
					case 'dateus':
						    $date = $row[$field];
						    if(empty($date)) {
						        $date = null;
						    } else {
						        $row[$field] = substr($date, 0, 4).'-'.substr($date, 4, 2).'-'.substr($date, 6, 2);
						    }
						    break;
					case 'boolean':
						$row[$field] = $row[$field] == 'J'?true:false;
				}
			}
			return $row;
		}

		protected function getPrimaryKeys($importData) {
			$keys = array();
			foreach($importData as $columnName => $columnOptions) {
				if($columnName == '_attributes') {
					continue;
				}
				if(array_key_exists('primaryKey', $columnOptions) && $columnOptions['primaryKey'] == true) {
					$keys[] = $columnName;
				}
			}
			return $keys;
		}

		protected function mapRecordlengths() {
			$fileDefinition = $this->zindexConfig['import']['BST000T'];
			$fileName = $this->getContainer()->get('kernel')->locateResource('@PharmaIntelligenceGstandaardBundle/Resources/g-standaard/BST000T');
			$fh = fopen($fileName, 'r');
			$map = [];
			while(($row = fgets($fh)) == true) {
				$rowData = $this->getRowData($row, $fileDefinition);
				$map[$rowData['naam_van_het_bestand']] = [
					'totaal' => $rowData['totaal_aantal_records'],
					'gewijzigd' => $rowData['aantal_gewijzigde_records'],
					'nieuw' => $rowData['aantal_nieuwe_records'],
					'vervallen' => $rowData['aantal_vervallen_records'],
					'ongewijzigd' => $rowData['aantal_ongewijzigde_records']
				];
			}
			fclose($fh);
			$this->recordMap = $map;
		}
}
