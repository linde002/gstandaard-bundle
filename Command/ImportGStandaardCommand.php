<?php

namespace PharmaIntelligence\GstandaardBundle\Command;

use Symfony\Component\Console\Helper\ProgressHelper;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\EventDispatcher\Event;

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
	
	const GSTANDAARD_URL = 'https://www.z-index.nl/@@download-file?filename=GSTNDDB';
	
	protected function configure()
	{
		$this
			->setName('pharma-intelligence:g-standaard:import')
			->setDescription('Importeerd G-Standaard')
			->addOption(
				'alleenMutaties',
				null,
				InputOption::VALUE_NONE,
				'Wanneer alleen records met een mutatiecode > 0 moeten worden verwerkt')
		;
	}		
	
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$this->downloadGStandaard($input, $output);
		$this->extractGStandaard($input, $output);
		$this->importGstandaard($input, $output);
		$this->updateCacheTables($input, $output);
		$this->updateSlugs($input, $output);
		
		/**
         * Notify subscibers
		 */
		$event = new Event();
		$eventDispatcher = $this->getContainer()->get('event_dispatcher');
		$eventDispatcher->dispatch('pharmaintelligence.gstandaard.import.complete', $event);
	}
	
	protected function downloadGStandaard(InputInterface $input, OutputInterface $output) {
		$output->writeln(date('[H:i:s]').' Start downloaden G-Standaard');
		$downloadDirectory = $this->getContainer()->get('kernel')->locateResource('@PharmaIntelligenceGstandaardBundle/Resources/g-standaard/');
		$downloadLocation = $downloadDirectory.'GSTNDDB.ZIP';
		
		$user = $this->getContainer()->getParameter('pi.gstandaard.user');
        $password = $this->getContainer()->getParameter('pi.gstandaard.password');
		
		
		$out = fopen($downloadLocation, 'wb');
		$curl = curl_init(self::GSTANDAARD_URL);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_USERPWD, $user.":".$password);
		curl_setopt($curl, CURLOPT_HEADER, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_FILE, $out);
		$result = curl_exec($curl);
		
		if($result === false) {
			throw new \Exception('Fout bij downloaden G-Standaard: '.curl_errno($curl).' '.curl_error($curl));
		}
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
		\Propel::getConnection()->query("
				REPLACE INTO gs_artikel_eigenschappen SELECT
					a.`zinummer`
				,	IF(t3.`naam_item_50_posities` != 'STUK', a.`aantal_hoofdverpakkingen`*a.`aantal_deelverpakkingen`, a.`aantal_deelverpakkingen`*a.`aantal_hoofdverpakkingen`*a.`hoeveelheid_per_deelverpakking`) as verpakkings_hoeveelheid
				,	t1.`naam_item_50_posities`
				,	t2.`naam_item_50_posities`
				,	t3.`naam_item_50_posities`
				,	t4.`naam_item_50_posities`
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
				FROM `gs_artikelen` as a
				LEFT JOIN `gs_naw_gegevens_gstandaard` as l ON a.`leverancier_kode` = l.`naw_nummer`
				LEFT JOIN `gs_handelsproducten` as hpk ON a.`handelsproduktkode` = hpk.`handelsproduktkode`
				LEFT JOIN `gs_voorschrijfpr_geneesmiddel_identific` as pri ON hpk.`prkcode` = pri.`prkcode`
				LEFT JOIN `gs_voorschrijfproducten` as prk ON pri.`prkcode` = prk.`prkcode`
				LEFT JOIN `gs_generieke_producten` as gpk ON pri.`generiekeproductcode` = gpk.`generiekeproductcode`
				LEFT JOIN `gs_atc_codes` as atc ON gpk.`atccode` = atc.`atccode`
				LEFT JOIN gs_namen as n1 ON a.`artikelnaamnummer` = n1.`naamnummer`
				LEFT JOIN gs_namen as n2 ON hpk.`handelsproduktnaamnummer` = n2.`naamnummer`
				LEFT JOIN gs_namen as n3 ON prk.`naamnummer_prescriptie_product` = n3.`naamnummer`
				LEFT JOIN gs_namen as n4 ON gpk.`naamnummer_volledige_gpknaam` = n4.`naamnummer`
				LEFT JOIN gs_namen as n5 ON gpk.`naamnummer_gpkstofnaam` = n5.`naamnummer`
				LEFT JOIN `gs_thesauri_totaal` as t1 ON a.`hoofdverpakking_omschrijving_kode` = t1.`thesaurus_itemnummer` AND a.`hoofdverpakking_omschrijving_thesnr` = t1.`thesaurusnummer`
				LEFT JOIN `gs_thesauri_totaal` as t2 ON a.`deelverpakking_omschrijving_kode` = t2.`thesaurus_itemnummer` AND a.`deelverpakking_omschrijving_thesnr` = t2.`thesaurusnummer`
				LEFT JOIN `gs_thesauri_totaal` as t3 ON hpk.`basiseenheid_verpakking` = t3.`thesaurus_itemnummer` AND hpk.`basiseenheid_verpakking_thesnr` = t3.`thesaurusnummer`
				LEFT JOIN `gs_thesauri_totaal` as t4 ON hpk.`eenheid_inkoophoeveelheid`= t4.`thesaurus_itemnummer` AND hpk.`eenheid_inkoophoeveelheid_thesnr` = t4.`thesaurusnummer`
				WHERE zinummer > 0");
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
		foreach($leveranciers as $int => $leverancier) {
			$leverancier->save();
		}
	}
		
		protected function import($fileName, array $importData) {
			$start = time();
			$this->output->writeln('<info>Importing '.$importData['_attributes']['table'].' ('.$fileName.')</info>');
			$progress = $this->getHelperSet()->get('progress');
			$progress->setFormat(ProgressHelper::FORMAT_QUIET);
			$fullFilename = $this->getContainer()->get('kernel')->locateResource('@PharmaIntelligenceGstandaardBundle/Resources/g-standaard/'.$fileName);
			$omClass = 'PharmaIntelligence\\GstandaardBundle\\Model\\'.$importData['_attributes']['modelClass'];
			
			if(!file_exists($fullFilename))
				throw new \Exception($fullFilename.' does not exists');
			$fh = fopen($fullFilename, 'r');
			$progress->start($this->output, $this->recordMap[$fileName]['totaal']);
			$recordsPerStap = floor($this->recordMap[$fileName]['totaal']/100);
			if($recordsPerStap == 0)
				$recordsPerStap = 1;
			$progress->setRedrawFrequency($recordsPerStap);

			// Vorige maand gewijzigde rijen op code geen wijzigingen zetten.
			$sql = 'UPDATE '.constant($omClass.'Peer::TABLE_NAME').' SET mutatiekode = 0 WHERE mutatiekode = '.self::MUTATIE_WIJZIGEN;
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
					case 'boolean':
						$row[$field] = $row[$field] == 'J'?true:false;
				}
			}
			return $row;
		}
		
		protected function getPrimaryKeys($importData) {
			$keys = array();
			foreach($importData as $columnName => $columnOptions) {
				if($columnName == '_attributes')
					continue;
				if(array_key_exists('primaryKey', $columnOptions) &&
						$columnOptions['primaryKey'] == true) {
					$keys[] = $columnName;
				}
			}
			return $keys;
		}
		
		protected function mapRecordlengths() {
			$fileDefinition = $this->zindexConfig['import']['BST000T'];
			$fileName = $this->getContainer()->get('kernel')->locateResource('@PharmaIntelligenceGstandaardBundle/Resources/g-standaard/BST000T');
			$fh = fopen($fileName, 'r');
			$map = array();
			while(($row = fgets($fh)) == true) {
				$rowData = $this->getRowData($row, $fileDefinition);
				$map[$rowData['naam_van_het_bestand']] = array(
						'totaal' => $rowData['totaal_aantal_records'],
						'gewijzigd' => $rowData['aantal_gewijzigde_records'],
						'nieuw' => $rowData['aantal_nieuwe_records'],
						'vervallen' => $rowData['aantal_vervallen_records'],
						'ongewijzigd' => $rowData['aantal_ongewijzigde_records']);
			}
			fclose($fh);
			$this->recordMap = $map;
		}
}