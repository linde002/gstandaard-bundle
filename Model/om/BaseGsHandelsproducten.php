<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BaseObject;
use \BasePeer;
use \Criteria;
use \Exception;
use \PDO;
use \Persistent;
use \Propel;
use \PropelCollection;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerken;
use PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerkenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsDeclaratietabelDureGeneesmiddelen;
use PharmaIntelligence\GstandaardBundle\Model\GsDeclaratietabelDureGeneesmiddelenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingen;
use PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsNamen;
use PharmaIntelligence\GstandaardBundle\Model\GsNamenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProduct;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProductQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery;

abstract class BaseGsHandelsproducten extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproductenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsHandelsproductenPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the bestandnummer field.
     * @var        int
     */
    protected $bestandnummer;

    /**
     * The value for the mutatiekode field.
     * @var        int
     */
    protected $mutatiekode;

    /**
     * The value for the handelsproduktkode field.
     * @var        int
     */
    protected $handelsproduktkode;

    /**
     * The value for the prkcode field.
     * @var        int
     */
    protected $prkcode;

    /**
     * The value for the medisch_hulpmiddelkode field.
     * @var        int
     */
    protected $medisch_hulpmiddelkode;

    /**
     * The value for the handelsproduktnaamnummer field.
     * @var        int
     */
    protected $handelsproduktnaamnummer;

    /**
     * The value for the merkstamnaam field.
     * @var        string
     */
    protected $merkstamnaam;

    /**
     * The value for the firmastamnaam field.
     * @var        string
     */
    protected $firmastamnaam;

    /**
     * The value for the produktgroep_thesaurusnummer field.
     * @var        int
     */
    protected $produktgroep_thesaurusnummer;

    /**
     * The value for the produktgroep_kode field.
     * @var        int
     */
    protected $produktgroep_kode;

    /**
     * The value for the soortelijk_gewicht field.
     * @var        string
     */
    protected $soortelijk_gewicht;

    /**
     * The value for the aantal_ddds_per_basiseenh_produkt field.
     * @var        string
     */
    protected $aantal_ddds_per_basiseenh_produkt;

    /**
     * The value for the aantal_druppels_per_ml field.
     * @var        string
     */
    protected $aantal_druppels_per_ml;

    /**
     * The value for the pifnummer_thesaurusnummer field.
     * @var        int
     */
    protected $pifnummer_thesaurusnummer;

    /**
     * The value for the pifnummer field.
     * @var        int
     */
    protected $pifnummer;

    /**
     * The value for the fabrikant_produktkodering field.
     * @var        string
     */
    protected $fabrikant_produktkodering;

    /**
     * The value for the reden_niet_clusteren_thesaurusnr field.
     * @var        int
     */
    protected $reden_niet_clusteren_thesaurusnr;

    /**
     * The value for the reden_niet_clusteren_kode field.
     * @var        int
     */
    protected $reden_niet_clusteren_kode;

    /**
     * The value for the ftk_1 field.
     * @var        int
     */
    protected $ftk_1;

    /**
     * The value for the ftk_2 field.
     * @var        int
     */
    protected $ftk_2;

    /**
     * The value for the ftk_3 field.
     * @var        int
     */
    protected $ftk_3;

    /**
     * The value for the ftk_4 field.
     * @var        int
     */
    protected $ftk_4;

    /**
     * The value for the ftk_5 field.
     * @var        int
     */
    protected $ftk_5;

    /**
     * The value for the informatoriumproductcode field.
     * @var        int
     */
    protected $informatoriumproductcode;

    /**
     * The value for the kode_combinatiepreparaat field.
     * @var        int
     */
    protected $kode_combinatiepreparaat;

    /**
     * The value for the kode_vergift field.
     * @var        string
     */
    protected $kode_vergift;

    /**
     * The value for the kode_rijvaardigheid field.
     * @var        string
     */
    protected $kode_rijvaardigheid;

    /**
     * The value for the kode_brandgevaarlijk field.
     * @var        string
     */
    protected $kode_brandgevaarlijk;

    /**
     * The value for the gesteriliseerd_voor_geneesmiddelen field.
     * @var        string
     */
    protected $gesteriliseerd_voor_geneesmiddelen;

    /**
     * The value for the hpkeenheid_thesaurusnummer field.
     * @var        int
     */
    protected $hpkeenheid_thesaurusnummer;

    /**
     * The value for the hpkeenheid_kode field.
     * @var        int
     */
    protected $hpkeenheid_kode;

    /**
     * The value for the oplosmiddel_hoeveelheid_1 field.
     * @var        string
     */
    protected $oplosmiddel_hoeveelheid_1;

    /**
     * The value for the oplosmiddel_aantal_1 field.
     * @var        int
     */
    protected $oplosmiddel_aantal_1;

    /**
     * The value for the oplosmiddel_hoeveelheid_2 field.
     * @var        string
     */
    protected $oplosmiddel_hoeveelheid_2;

    /**
     * The value for the oplosmiddel_aantal_2 field.
     * @var        int
     */
    protected $oplosmiddel_aantal_2;

    /**
     * The value for the farmaceutische_kwaliteit field.
     * @var        string
     */
    protected $farmaceutische_kwaliteit;

    /**
     * The value for the halffabrikaat_thesaurusnummer field.
     * @var        int
     */
    protected $halffabrikaat_thesaurusnummer;

    /**
     * The value for the halffabrikaat_code field.
     * @var        int
     */
    protected $halffabrikaat_code;

    /**
     * The value for the deelbaarheid_aantal field.
     * @var        int
     */
    protected $deelbaarheid_aantal;

    /**
     * The value for the emballagemateriaal_thesaurusnummer field.
     * @var        int
     */
    protected $emballagemateriaal_thesaurusnummer;

    /**
     * The value for the emballagemateriaal_kode field.
     * @var        int
     */
    protected $emballagemateriaal_kode;

    /**
     * The value for the emballagesluiting_thesaurusnummer field.
     * @var        int
     */
    protected $emballagesluiting_thesaurusnummer;

    /**
     * The value for the emballagesluiting_kode field.
     * @var        int
     */
    protected $emballagesluiting_kode;

    /**
     * The value for the emballagedoseerinr_thesaurusnr field.
     * @var        int
     */
    protected $emballagedoseerinr_thesaurusnr;

    /**
     * The value for the emballagedoseerinrichting_kode field.
     * @var        int
     */
    protected $emballagedoseerinrichting_kode;

    /**
     * The value for the hulpstoffen_identificerend field.
     * @var        string
     */
    protected $hulpstoffen_identificerend;

    /**
     * The value for the kleur_thesaurusnummer field.
     * @var        int
     */
    protected $kleur_thesaurusnummer;

    /**
     * The value for the kleur_kode field.
     * @var        int
     */
    protected $kleur_kode;

    /**
     * The value for the smaak_thesaurusnummer field.
     * @var        int
     */
    protected $smaak_thesaurusnummer;

    /**
     * The value for the smaak_kode field.
     * @var        int
     */
    protected $smaak_kode;

    /**
     * The value for the bereidingsvoorschr_thesaurusnummer field.
     * @var        int
     */
    protected $bereidingsvoorschr_thesaurusnummer;

    /**
     * The value for the bereidingsvoorschrift_kode field.
     * @var        int
     */
    protected $bereidingsvoorschrift_kode;

    /**
     * The value for the fysische_eigenschap_thesaurusnummer field.
     * @var        int
     */
    protected $fysische_eigenschap_thesaurusnummer;

    /**
     * The value for the fysische_eigenschap_kode field.
     * @var        int
     */
    protected $fysische_eigenschap_kode;

    /**
     * The value for the grondstofvorm_thesaurusnummer field.
     * @var        int
     */
    protected $grondstofvorm_thesaurusnummer;

    /**
     * The value for the grondstofvorm_kode field.
     * @var        int
     */
    protected $grondstofvorm_kode;

    /**
     * The value for the los_verkrijgbaar field.
     * @var        string
     */
    protected $los_verkrijgbaar;

    /**
     * The value for the bioequivalente_groep field.
     * @var        int
     */
    protected $bioequivalente_groep;

    /**
     * The value for the kode_radioactieve_stof field.
     * @var        string
     */
    protected $kode_radioactieve_stof;

    /**
     * The value for the soort_hulpmiddel field.
     * @var        int
     */
    protected $soort_hulpmiddel;

    /**
     * The value for the rzv_thesaurus_120 field.
     * @var        int
     */
    protected $rzv_thesaurus_120;

    /**
     * The value for the rzvvoorwaarden_bijlage_2 field.
     * @var        int
     */
    protected $rzvvoorwaarden_bijlage_2;

    /**
     * The value for the tekstmodule field.
     * @var        int
     */
    protected $tekstmodule;

    /**
     * The value for the tekst_verwijzing field.
     * @var        int
     */
    protected $tekst_verwijzing;

    /**
     * The value for the hulpmiddel_volgens_awbz field.
     * @var        string
     */
    protected $hulpmiddel_volgens_awbz;

    /**
     * The value for the eenheid_inkoophoeveelheid_thesnr field.
     * @var        int
     */
    protected $eenheid_inkoophoeveelheid_thesnr;

    /**
     * The value for the eenheid_inkoophoeveelheid field.
     * @var        int
     */
    protected $eenheid_inkoophoeveelheid;

    /**
     * The value for the basiseenheid_verpakking_thesnr field.
     * @var        int
     */
    protected $basiseenheid_verpakking_thesnr;

    /**
     * The value for the basiseenheid_verpakking field.
     * @var        int
     */
    protected $basiseenheid_verpakking;

    /**
     * The value for the richtlijn_gebruik_ondergrens field.
     * @var        string
     */
    protected $richtlijn_gebruik_ondergrens;

    /**
     * The value for the richtlijn_gebruik_bovengrens field.
     * @var        string
     */
    protected $richtlijn_gebruik_bovengrens;

    /**
     * The value for the thesaurus_rzv_verstrekking field.
     * @var        int
     */
    protected $thesaurus_rzv_verstrekking;

    /**
     * The value for the rzvverstrekking field.
     * @var        int
     */
    protected $rzvverstrekking;

    /**
     * The value for the thesaurus_rzv_rationaliteit field.
     * @var        int
     */
    protected $thesaurus_rzv_rationaliteit;

    /**
     * The value for the beoordeling_rationaliteit field.
     * @var        int
     */
    protected $beoordeling_rationaliteit;

    /**
     * The value for the thesaurus_rzv_beoordeling field.
     * @var        int
     */
    protected $thesaurus_rzv_beoordeling;

    /**
     * The value for the achtergrond_rationaliteit field.
     * @var        int
     */
    protected $achtergrond_rationaliteit;

    /**
     * The value for the thesaurus_rzv_hulpmiddelen field.
     * @var        int
     */
    protected $thesaurus_rzv_hulpmiddelen;

    /**
     * The value for the hulpmiddelen_zorg field.
     * @var        int
     */
    protected $hulpmiddelen_zorg;

    /**
     * @var        GsPrescriptieProduct
     */
    protected $aGsPrescriptieProduct;

    /**
     * @var        GsNamen
     */
    protected $aGsNamen;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aInkoophoeveelheidOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aBasiseenheidOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aEmballageMateriaalOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aEmballageSluitingOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aEmballageDoseerinrichtingOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aKleurOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aSmaakOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aBereidingsvoorschrijftOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aProduktgroepOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aRzvVerstrekkingOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aRzvBijlage2Omschrijving;

    /**
     * @var        PropelObjectCollection|GsArtikelEigenschappen[] Collection to store aggregation of GsArtikelEigenschappen objects.
     */
    protected $collGsArtikelEigenschappens;
    protected $collGsArtikelEigenschappensPartial;

    /**
     * @var        PropelObjectCollection|GsArtikelen[] Collection to store aggregation of GsArtikelen objects.
     */
    protected $collGsArtikelens;
    protected $collGsArtikelensPartial;

    /**
     * @var        PropelObjectCollection|GsBijzondereKenmerken[] Collection to store aggregation of GsBijzondereKenmerken objects.
     */
    protected $collGsBijzondereKenmerkens;
    protected $collGsBijzondereKenmerkensPartial;

    /**
     * @var        PropelObjectCollection|GsDeclaratietabelDureGeneesmiddelen[] Collection to store aggregation of GsDeclaratietabelDureGeneesmiddelen objects.
     */
    protected $collGsDeclaratietabelDureGeneesmiddelens;
    protected $collGsDeclaratietabelDureGeneesmiddelensPartial;

    /**
     * @var        PropelObjectCollection|GsIngegevenSamenstellingen[] Collection to store aggregation of GsIngegevenSamenstellingen objects.
     */
    protected $collGsIngegevenSamenstellingens;
    protected $collGsIngegevenSamenstellingensPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsArtikelEigenschappensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsArtikelensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsBijzondereKenmerkensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsDeclaratietabelDureGeneesmiddelensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsIngegevenSamenstellingensScheduledForDeletion = null;

    /**
     * Get the [bestandnummer] column value.
     *
     * @return int
     */
    public function getBestandnummer()
    {

        return $this->bestandnummer;
    }

    /**
     * Get the [mutatiekode] column value.
     *
     * @return int
     */
    public function getMutatiekode()
    {

        return $this->mutatiekode;
    }

    /**
     * Get the [handelsproduktkode] column value.
     *
     * @return int
     */
    public function getHandelsproduktkode()
    {

        return $this->handelsproduktkode;
    }

    /**
     * Get the [prkcode] column value.
     *
     * @return int
     */
    public function getPrkcode()
    {

        return $this->prkcode;
    }

    /**
     * Get the [medisch_hulpmiddelkode] column value.
     *
     * @return int
     */
    public function getMedischHulpmiddelkode()
    {

        return $this->medisch_hulpmiddelkode;
    }

    /**
     * Get the [handelsproduktnaamnummer] column value.
     *
     * @return int
     */
    public function getHandelsproduktnaamnummer()
    {

        return $this->handelsproduktnaamnummer;
    }

    /**
     * Get the [merkstamnaam] column value.
     *
     * @return string
     */
    public function getMerkstamnaam()
    {

        return $this->merkstamnaam;
    }

    /**
     * Get the [firmastamnaam] column value.
     *
     * @return string
     */
    public function getFirmastamnaam()
    {

        return $this->firmastamnaam;
    }

    /**
     * Get the [produktgroep_thesaurusnummer] column value.
     *
     * @return int
     */
    public function getProduktgroepThesaurusnummer()
    {

        return $this->produktgroep_thesaurusnummer;
    }

    /**
     * Get the [produktgroep_kode] column value.
     *
     * @return int
     */
    public function getProduktgroepKode()
    {

        return $this->produktgroep_kode;
    }

    /**
     * Get the [soortelijk_gewicht] column value.
     *
     * @return string
     */
    public function getSoortelijkGewicht()
    {

        return $this->soortelijk_gewicht;
    }

    /**
     * Get the [aantal_ddds_per_basiseenh_produkt] column value.
     *
     * @return string
     */
    public function getAantalDddsPerBasiseenhProdukt()
    {

        return $this->aantal_ddds_per_basiseenh_produkt;
    }

    /**
     * Get the [aantal_druppels_per_ml] column value.
     *
     * @return string
     */
    public function getAantalDruppelsPerMl()
    {

        return $this->aantal_druppels_per_ml;
    }

    /**
     * Get the [pifnummer_thesaurusnummer] column value.
     *
     * @return int
     */
    public function getPifnummerThesaurusnummer()
    {

        return $this->pifnummer_thesaurusnummer;
    }

    /**
     * Get the [pifnummer] column value.
     *
     * @return int
     */
    public function getPifnummer()
    {

        return $this->pifnummer;
    }

    /**
     * Get the [fabrikant_produktkodering] column value.
     *
     * @return string
     */
    public function getFabrikantProduktkodering()
    {

        return $this->fabrikant_produktkodering;
    }

    /**
     * Get the [reden_niet_clusteren_thesaurusnr] column value.
     *
     * @return int
     */
    public function getRedenNietClusterenThesaurusnr()
    {

        return $this->reden_niet_clusteren_thesaurusnr;
    }

    /**
     * Get the [reden_niet_clusteren_kode] column value.
     *
     * @return int
     */
    public function getRedenNietClusterenKode()
    {

        return $this->reden_niet_clusteren_kode;
    }

    /**
     * Get the [ftk_1] column value.
     *
     * @return int
     */
    public function getFtk1()
    {

        return $this->ftk_1;
    }

    /**
     * Get the [ftk_2] column value.
     *
     * @return int
     */
    public function getFtk2()
    {

        return $this->ftk_2;
    }

    /**
     * Get the [ftk_3] column value.
     *
     * @return int
     */
    public function getFtk3()
    {

        return $this->ftk_3;
    }

    /**
     * Get the [ftk_4] column value.
     *
     * @return int
     */
    public function getFtk4()
    {

        return $this->ftk_4;
    }

    /**
     * Get the [ftk_5] column value.
     *
     * @return int
     */
    public function getFtk5()
    {

        return $this->ftk_5;
    }

    /**
     * Get the [informatoriumproductcode] column value.
     *
     * @return int
     */
    public function getInformatoriumproductcode()
    {

        return $this->informatoriumproductcode;
    }

    /**
     * Get the [kode_combinatiepreparaat] column value.
     *
     * @return int
     */
    public function getKodeCombinatiepreparaat()
    {

        return $this->kode_combinatiepreparaat;
    }

    /**
     * Get the [kode_vergift] column value.
     *
     * @return string
     */
    public function getKodeVergift()
    {

        return $this->kode_vergift;
    }

    /**
     * Get the [kode_rijvaardigheid] column value.
     *
     * @return string
     */
    public function getKodeRijvaardigheid()
    {

        return $this->kode_rijvaardigheid;
    }

    /**
     * Get the [kode_brandgevaarlijk] column value.
     *
     * @return string
     */
    public function getKodeBrandgevaarlijk()
    {

        return $this->kode_brandgevaarlijk;
    }

    /**
     * Get the [gesteriliseerd_voor_geneesmiddelen] column value.
     *
     * @return string
     */
    public function getGesteriliseerdVoorGeneesmiddelen()
    {

        return $this->gesteriliseerd_voor_geneesmiddelen;
    }

    /**
     * Get the [hpkeenheid_thesaurusnummer] column value.
     *
     * @return int
     */
    public function getHpkeenheidThesaurusnummer()
    {

        return $this->hpkeenheid_thesaurusnummer;
    }

    /**
     * Get the [hpkeenheid_kode] column value.
     *
     * @return int
     */
    public function getHpkeenheidKode()
    {

        return $this->hpkeenheid_kode;
    }

    /**
     * Get the [oplosmiddel_hoeveelheid_1] column value.
     *
     * @return string
     */
    public function getOplosmiddelHoeveelheid1()
    {

        return $this->oplosmiddel_hoeveelheid_1;
    }

    /**
     * Get the [oplosmiddel_aantal_1] column value.
     *
     * @return int
     */
    public function getOplosmiddelAantal1()
    {

        return $this->oplosmiddel_aantal_1;
    }

    /**
     * Get the [oplosmiddel_hoeveelheid_2] column value.
     *
     * @return string
     */
    public function getOplosmiddelHoeveelheid2()
    {

        return $this->oplosmiddel_hoeveelheid_2;
    }

    /**
     * Get the [oplosmiddel_aantal_2] column value.
     *
     * @return int
     */
    public function getOplosmiddelAantal2()
    {

        return $this->oplosmiddel_aantal_2;
    }

    /**
     * Get the [farmaceutische_kwaliteit] column value.
     *
     * @return string
     */
    public function getFarmaceutischeKwaliteit()
    {

        return $this->farmaceutische_kwaliteit;
    }

    /**
     * Get the [halffabrikaat_thesaurusnummer] column value.
     *
     * @return int
     */
    public function getHalffabrikaatThesaurusnummer()
    {

        return $this->halffabrikaat_thesaurusnummer;
    }

    /**
     * Get the [halffabrikaat_code] column value.
     *
     * @return int
     */
    public function getHalffabrikaatCode()
    {

        return $this->halffabrikaat_code;
    }

    /**
     * Get the [deelbaarheid_aantal] column value.
     *
     * @return int
     */
    public function getDeelbaarheidAantal()
    {

        return $this->deelbaarheid_aantal;
    }

    /**
     * Get the [emballagemateriaal_thesaurusnummer] column value.
     *
     * @return int
     */
    public function getEmballagemateriaalThesaurusnummer()
    {

        return $this->emballagemateriaal_thesaurusnummer;
    }

    /**
     * Get the [emballagemateriaal_kode] column value.
     *
     * @return int
     */
    public function getEmballagemateriaalKode()
    {

        return $this->emballagemateriaal_kode;
    }

    /**
     * Get the [emballagesluiting_thesaurusnummer] column value.
     *
     * @return int
     */
    public function getEmballagesluitingThesaurusnummer()
    {

        return $this->emballagesluiting_thesaurusnummer;
    }

    /**
     * Get the [emballagesluiting_kode] column value.
     *
     * @return int
     */
    public function getEmballagesluitingKode()
    {

        return $this->emballagesluiting_kode;
    }

    /**
     * Get the [emballagedoseerinr_thesaurusnr] column value.
     *
     * @return int
     */
    public function getEmballagedoseerinrThesaurusnr()
    {

        return $this->emballagedoseerinr_thesaurusnr;
    }

    /**
     * Get the [emballagedoseerinrichting_kode] column value.
     *
     * @return int
     */
    public function getEmballagedoseerinrichtingKode()
    {

        return $this->emballagedoseerinrichting_kode;
    }

    /**
     * Get the [hulpstoffen_identificerend] column value.
     *
     * @return string
     */
    public function getHulpstoffenIdentificerend()
    {

        return $this->hulpstoffen_identificerend;
    }

    /**
     * Get the [kleur_thesaurusnummer] column value.
     *
     * @return int
     */
    public function getKleurThesaurusnummer()
    {

        return $this->kleur_thesaurusnummer;
    }

    /**
     * Get the [kleur_kode] column value.
     *
     * @return int
     */
    public function getKleurKode()
    {

        return $this->kleur_kode;
    }

    /**
     * Get the [smaak_thesaurusnummer] column value.
     *
     * @return int
     */
    public function getSmaakThesaurusnummer()
    {

        return $this->smaak_thesaurusnummer;
    }

    /**
     * Get the [smaak_kode] column value.
     *
     * @return int
     */
    public function getSmaakKode()
    {

        return $this->smaak_kode;
    }

    /**
     * Get the [bereidingsvoorschr_thesaurusnummer] column value.
     *
     * @return int
     */
    public function getBereidingsvoorschrThesaurusnummer()
    {

        return $this->bereidingsvoorschr_thesaurusnummer;
    }

    /**
     * Get the [bereidingsvoorschrift_kode] column value.
     *
     * @return int
     */
    public function getBereidingsvoorschriftKode()
    {

        return $this->bereidingsvoorschrift_kode;
    }

    /**
     * Get the [fysische_eigenschap_thesaurusnummer] column value.
     *
     * @return int
     */
    public function getFysischeEigenschapThesaurusnummer()
    {

        return $this->fysische_eigenschap_thesaurusnummer;
    }

    /**
     * Get the [fysische_eigenschap_kode] column value.
     *
     * @return int
     */
    public function getFysischeEigenschapKode()
    {

        return $this->fysische_eigenschap_kode;
    }

    /**
     * Get the [grondstofvorm_thesaurusnummer] column value.
     *
     * @return int
     */
    public function getGrondstofvormThesaurusnummer()
    {

        return $this->grondstofvorm_thesaurusnummer;
    }

    /**
     * Get the [grondstofvorm_kode] column value.
     *
     * @return int
     */
    public function getGrondstofvormKode()
    {

        return $this->grondstofvorm_kode;
    }

    /**
     * Get the [los_verkrijgbaar] column value.
     *
     * @return string
     */
    public function getLosVerkrijgbaar()
    {

        return $this->los_verkrijgbaar;
    }

    /**
     * Get the [bioequivalente_groep] column value.
     *
     * @return int
     */
    public function getBioequivalenteGroep()
    {

        return $this->bioequivalente_groep;
    }

    /**
     * Get the [kode_radioactieve_stof] column value.
     *
     * @return string
     */
    public function getKodeRadioactieveStof()
    {

        return $this->kode_radioactieve_stof;
    }

    /**
     * Get the [soort_hulpmiddel] column value.
     *
     * @return int
     */
    public function getSoortHulpmiddel()
    {

        return $this->soort_hulpmiddel;
    }

    /**
     * Get the [rzv_thesaurus_120] column value.
     *
     * @return int
     */
    public function getRzvThesaurus120()
    {

        return $this->rzv_thesaurus_120;
    }

    /**
     * Get the [rzvvoorwaarden_bijlage_2] column value.
     *
     * @return int
     */
    public function getRzvvoorwaardenBijlage2()
    {

        return $this->rzvvoorwaarden_bijlage_2;
    }

    /**
     * Get the [tekstmodule] column value.
     *
     * @return int
     */
    public function getTekstmodule()
    {

        return $this->tekstmodule;
    }

    /**
     * Get the [tekst_verwijzing] column value.
     *
     * @return int
     */
    public function getTekstVerwijzing()
    {

        return $this->tekst_verwijzing;
    }

    /**
     * Get the [hulpmiddel_volgens_awbz] column value.
     *
     * @return string
     */
    public function getHulpmiddelVolgensAwbz()
    {

        return $this->hulpmiddel_volgens_awbz;
    }

    /**
     * Get the [eenheid_inkoophoeveelheid_thesnr] column value.
     *
     * @return int
     */
    public function getEenheidInkoophoeveelheidThesnr()
    {

        return $this->eenheid_inkoophoeveelheid_thesnr;
    }

    /**
     * Get the [eenheid_inkoophoeveelheid] column value.
     *
     * @return int
     */
    public function getEenheidInkoophoeveelheid()
    {

        return $this->eenheid_inkoophoeveelheid;
    }

    /**
     * Get the [basiseenheid_verpakking_thesnr] column value.
     *
     * @return int
     */
    public function getBasiseenheidVerpakkingThesnr()
    {

        return $this->basiseenheid_verpakking_thesnr;
    }

    /**
     * Get the [basiseenheid_verpakking] column value.
     *
     * @return int
     */
    public function getBasiseenheidVerpakking()
    {

        return $this->basiseenheid_verpakking;
    }

    /**
     * Get the [richtlijn_gebruik_ondergrens] column value.
     *
     * @return string
     */
    public function getRichtlijnGebruikOndergrens()
    {

        return $this->richtlijn_gebruik_ondergrens;
    }

    /**
     * Get the [richtlijn_gebruik_bovengrens] column value.
     *
     * @return string
     */
    public function getRichtlijnGebruikBovengrens()
    {

        return $this->richtlijn_gebruik_bovengrens;
    }

    /**
     * Get the [thesaurus_rzv_verstrekking] column value.
     *
     * @return int
     */
    public function getThesaurusRzvVerstrekking()
    {

        return $this->thesaurus_rzv_verstrekking;
    }

    /**
     * Get the [rzvverstrekking] column value.
     *
     * @return int
     */
    public function getRzvverstrekking()
    {

        return $this->rzvverstrekking;
    }

    /**
     * Get the [thesaurus_rzv_rationaliteit] column value.
     *
     * @return int
     */
    public function getThesaurusRzvRationaliteit()
    {

        return $this->thesaurus_rzv_rationaliteit;
    }

    /**
     * Get the [beoordeling_rationaliteit] column value.
     *
     * @return int
     */
    public function getBeoordelingRationaliteit()
    {

        return $this->beoordeling_rationaliteit;
    }

    /**
     * Get the [thesaurus_rzv_beoordeling] column value.
     *
     * @return int
     */
    public function getThesaurusRzvBeoordeling()
    {

        return $this->thesaurus_rzv_beoordeling;
    }

    /**
     * Get the [achtergrond_rationaliteit] column value.
     *
     * @return int
     */
    public function getAchtergrondRationaliteit()
    {

        return $this->achtergrond_rationaliteit;
    }

    /**
     * Get the [thesaurus_rzv_hulpmiddelen] column value.
     *
     * @return int
     */
    public function getThesaurusRzvHulpmiddelen()
    {

        return $this->thesaurus_rzv_hulpmiddelen;
    }

    /**
     * Get the [hulpmiddelen_zorg] column value.
     *
     * @return int
     */
    public function getHulpmiddelenZorg()
    {

        return $this->hulpmiddelen_zorg;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [handelsproduktkode] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setHandelsproduktkode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->handelsproduktkode !== $v) {
            $this->handelsproduktkode = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::HANDELSPRODUKTKODE;
        }


        return $this;
    } // setHandelsproduktkode()

    /**
     * Set the value of [prkcode] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setPrkcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->prkcode !== $v) {
            $this->prkcode = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::PRKCODE;
        }

        if ($this->aGsPrescriptieProduct !== null && $this->aGsPrescriptieProduct->getPrkcode() !== $v) {
            $this->aGsPrescriptieProduct = null;
        }


        return $this;
    } // setPrkcode()

    /**
     * Set the value of [medisch_hulpmiddelkode] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setMedischHulpmiddelkode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->medisch_hulpmiddelkode !== $v) {
            $this->medisch_hulpmiddelkode = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::MEDISCH_HULPMIDDELKODE;
        }


        return $this;
    } // setMedischHulpmiddelkode()

    /**
     * Set the value of [handelsproduktnaamnummer] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setHandelsproduktnaamnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->handelsproduktnaamnummer !== $v) {
            $this->handelsproduktnaamnummer = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER;
        }

        if ($this->aGsNamen !== null && $this->aGsNamen->getNaamnummer() !== $v) {
            $this->aGsNamen = null;
        }


        return $this;
    } // setHandelsproduktnaamnummer()

    /**
     * Set the value of [merkstamnaam] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setMerkstamnaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->merkstamnaam !== $v) {
            $this->merkstamnaam = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::MERKSTAMNAAM;
        }


        return $this;
    } // setMerkstamnaam()

    /**
     * Set the value of [firmastamnaam] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setFirmastamnaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->firmastamnaam !== $v) {
            $this->firmastamnaam = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::FIRMASTAMNAAM;
        }


        return $this;
    } // setFirmastamnaam()

    /**
     * Set the value of [produktgroep_thesaurusnummer] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setProduktgroepThesaurusnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->produktgroep_thesaurusnummer !== $v) {
            $this->produktgroep_thesaurusnummer = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER;
        }

        if ($this->aProduktgroepOmschrijving !== null && $this->aProduktgroepOmschrijving->getThesaurusnummer() !== $v) {
            $this->aProduktgroepOmschrijving = null;
        }


        return $this;
    } // setProduktgroepThesaurusnummer()

    /**
     * Set the value of [produktgroep_kode] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setProduktgroepKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->produktgroep_kode !== $v) {
            $this->produktgroep_kode = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::PRODUKTGROEP_KODE;
        }

        if ($this->aProduktgroepOmschrijving !== null && $this->aProduktgroepOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aProduktgroepOmschrijving = null;
        }


        return $this;
    } // setProduktgroepKode()

    /**
     * Set the value of [soortelijk_gewicht] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setSoortelijkGewicht($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->soortelijk_gewicht !== $v) {
            $this->soortelijk_gewicht = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::SOORTELIJK_GEWICHT;
        }


        return $this;
    } // setSoortelijkGewicht()

    /**
     * Set the value of [aantal_ddds_per_basiseenh_produkt] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setAantalDddsPerBasiseenhProdukt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->aantal_ddds_per_basiseenh_produkt !== $v) {
            $this->aantal_ddds_per_basiseenh_produkt = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::AANTAL_DDDS_PER_BASISEENH_PRODUKT;
        }


        return $this;
    } // setAantalDddsPerBasiseenhProdukt()

    /**
     * Set the value of [aantal_druppels_per_ml] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setAantalDruppelsPerMl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->aantal_druppels_per_ml !== $v) {
            $this->aantal_druppels_per_ml = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::AANTAL_DRUPPELS_PER_ML;
        }


        return $this;
    } // setAantalDruppelsPerMl()

    /**
     * Set the value of [pifnummer_thesaurusnummer] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setPifnummerThesaurusnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pifnummer_thesaurusnummer !== $v) {
            $this->pifnummer_thesaurusnummer = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::PIFNUMMER_THESAURUSNUMMER;
        }


        return $this;
    } // setPifnummerThesaurusnummer()

    /**
     * Set the value of [pifnummer] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setPifnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pifnummer !== $v) {
            $this->pifnummer = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::PIFNUMMER;
        }


        return $this;
    } // setPifnummer()

    /**
     * Set the value of [fabrikant_produktkodering] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setFabrikantProduktkodering($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fabrikant_produktkodering !== $v) {
            $this->fabrikant_produktkodering = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::FABRIKANT_PRODUKTKODERING;
        }


        return $this;
    } // setFabrikantProduktkodering()

    /**
     * Set the value of [reden_niet_clusteren_thesaurusnr] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setRedenNietClusterenThesaurusnr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reden_niet_clusteren_thesaurusnr !== $v) {
            $this->reden_niet_clusteren_thesaurusnr = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_THESAURUSNR;
        }


        return $this;
    } // setRedenNietClusterenThesaurusnr()

    /**
     * Set the value of [reden_niet_clusteren_kode] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setRedenNietClusterenKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reden_niet_clusteren_kode !== $v) {
            $this->reden_niet_clusteren_kode = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_KODE;
        }


        return $this;
    } // setRedenNietClusterenKode()

    /**
     * Set the value of [ftk_1] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setFtk1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ftk_1 !== $v) {
            $this->ftk_1 = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::FTK_1;
        }


        return $this;
    } // setFtk1()

    /**
     * Set the value of [ftk_2] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setFtk2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ftk_2 !== $v) {
            $this->ftk_2 = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::FTK_2;
        }


        return $this;
    } // setFtk2()

    /**
     * Set the value of [ftk_3] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setFtk3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ftk_3 !== $v) {
            $this->ftk_3 = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::FTK_3;
        }


        return $this;
    } // setFtk3()

    /**
     * Set the value of [ftk_4] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setFtk4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ftk_4 !== $v) {
            $this->ftk_4 = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::FTK_4;
        }


        return $this;
    } // setFtk4()

    /**
     * Set the value of [ftk_5] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setFtk5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ftk_5 !== $v) {
            $this->ftk_5 = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::FTK_5;
        }


        return $this;
    } // setFtk5()

    /**
     * Set the value of [informatoriumproductcode] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setInformatoriumproductcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->informatoriumproductcode !== $v) {
            $this->informatoriumproductcode = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::INFORMATORIUMPRODUCTCODE;
        }


        return $this;
    } // setInformatoriumproductcode()

    /**
     * Set the value of [kode_combinatiepreparaat] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setKodeCombinatiepreparaat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->kode_combinatiepreparaat !== $v) {
            $this->kode_combinatiepreparaat = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::KODE_COMBINATIEPREPARAAT;
        }


        return $this;
    } // setKodeCombinatiepreparaat()

    /**
     * Set the value of [kode_vergift] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setKodeVergift($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->kode_vergift !== $v) {
            $this->kode_vergift = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::KODE_VERGIFT;
        }


        return $this;
    } // setKodeVergift()

    /**
     * Set the value of [kode_rijvaardigheid] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setKodeRijvaardigheid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->kode_rijvaardigheid !== $v) {
            $this->kode_rijvaardigheid = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::KODE_RIJVAARDIGHEID;
        }


        return $this;
    } // setKodeRijvaardigheid()

    /**
     * Set the value of [kode_brandgevaarlijk] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setKodeBrandgevaarlijk($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->kode_brandgevaarlijk !== $v) {
            $this->kode_brandgevaarlijk = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::KODE_BRANDGEVAARLIJK;
        }


        return $this;
    } // setKodeBrandgevaarlijk()

    /**
     * Set the value of [gesteriliseerd_voor_geneesmiddelen] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setGesteriliseerdVoorGeneesmiddelen($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gesteriliseerd_voor_geneesmiddelen !== $v) {
            $this->gesteriliseerd_voor_geneesmiddelen = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::GESTERILISEERD_VOOR_GENEESMIDDELEN;
        }


        return $this;
    } // setGesteriliseerdVoorGeneesmiddelen()

    /**
     * Set the value of [hpkeenheid_thesaurusnummer] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setHpkeenheidThesaurusnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hpkeenheid_thesaurusnummer !== $v) {
            $this->hpkeenheid_thesaurusnummer = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::HPKEENHEID_THESAURUSNUMMER;
        }


        return $this;
    } // setHpkeenheidThesaurusnummer()

    /**
     * Set the value of [hpkeenheid_kode] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setHpkeenheidKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hpkeenheid_kode !== $v) {
            $this->hpkeenheid_kode = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::HPKEENHEID_KODE;
        }


        return $this;
    } // setHpkeenheidKode()

    /**
     * Set the value of [oplosmiddel_hoeveelheid_1] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setOplosmiddelHoeveelheid1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->oplosmiddel_hoeveelheid_1 !== $v) {
            $this->oplosmiddel_hoeveelheid_1 = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_1;
        }


        return $this;
    } // setOplosmiddelHoeveelheid1()

    /**
     * Set the value of [oplosmiddel_aantal_1] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setOplosmiddelAantal1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->oplosmiddel_aantal_1 !== $v) {
            $this->oplosmiddel_aantal_1 = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_1;
        }


        return $this;
    } // setOplosmiddelAantal1()

    /**
     * Set the value of [oplosmiddel_hoeveelheid_2] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setOplosmiddelHoeveelheid2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->oplosmiddel_hoeveelheid_2 !== $v) {
            $this->oplosmiddel_hoeveelheid_2 = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_2;
        }


        return $this;
    } // setOplosmiddelHoeveelheid2()

    /**
     * Set the value of [oplosmiddel_aantal_2] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setOplosmiddelAantal2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->oplosmiddel_aantal_2 !== $v) {
            $this->oplosmiddel_aantal_2 = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_2;
        }


        return $this;
    } // setOplosmiddelAantal2()

    /**
     * Set the value of [farmaceutische_kwaliteit] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setFarmaceutischeKwaliteit($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->farmaceutische_kwaliteit !== $v) {
            $this->farmaceutische_kwaliteit = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::FARMACEUTISCHE_KWALITEIT;
        }


        return $this;
    } // setFarmaceutischeKwaliteit()

    /**
     * Set the value of [halffabrikaat_thesaurusnummer] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setHalffabrikaatThesaurusnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->halffabrikaat_thesaurusnummer !== $v) {
            $this->halffabrikaat_thesaurusnummer = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::HALFFABRIKAAT_THESAURUSNUMMER;
        }


        return $this;
    } // setHalffabrikaatThesaurusnummer()

    /**
     * Set the value of [halffabrikaat_code] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setHalffabrikaatCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->halffabrikaat_code !== $v) {
            $this->halffabrikaat_code = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::HALFFABRIKAAT_CODE;
        }


        return $this;
    } // setHalffabrikaatCode()

    /**
     * Set the value of [deelbaarheid_aantal] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setDeelbaarheidAantal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->deelbaarheid_aantal !== $v) {
            $this->deelbaarheid_aantal = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::DEELBAARHEID_AANTAL;
        }


        return $this;
    } // setDeelbaarheidAantal()

    /**
     * Set the value of [emballagemateriaal_thesaurusnummer] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setEmballagemateriaalThesaurusnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->emballagemateriaal_thesaurusnummer !== $v) {
            $this->emballagemateriaal_thesaurusnummer = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER;
        }

        if ($this->aEmballageMateriaalOmschrijving !== null && $this->aEmballageMateriaalOmschrijving->getThesaurusnummer() !== $v) {
            $this->aEmballageMateriaalOmschrijving = null;
        }


        return $this;
    } // setEmballagemateriaalThesaurusnummer()

    /**
     * Set the value of [emballagemateriaal_kode] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setEmballagemateriaalKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->emballagemateriaal_kode !== $v) {
            $this->emballagemateriaal_kode = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE;
        }

        if ($this->aEmballageMateriaalOmschrijving !== null && $this->aEmballageMateriaalOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aEmballageMateriaalOmschrijving = null;
        }


        return $this;
    } // setEmballagemateriaalKode()

    /**
     * Set the value of [emballagesluiting_thesaurusnummer] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setEmballagesluitingThesaurusnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->emballagesluiting_thesaurusnummer !== $v) {
            $this->emballagesluiting_thesaurusnummer = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER;
        }

        if ($this->aEmballageSluitingOmschrijving !== null && $this->aEmballageSluitingOmschrijving->getThesaurusnummer() !== $v) {
            $this->aEmballageSluitingOmschrijving = null;
        }


        return $this;
    } // setEmballagesluitingThesaurusnummer()

    /**
     * Set the value of [emballagesluiting_kode] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setEmballagesluitingKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->emballagesluiting_kode !== $v) {
            $this->emballagesluiting_kode = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::EMBALLAGESLUITING_KODE;
        }

        if ($this->aEmballageSluitingOmschrijving !== null && $this->aEmballageSluitingOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aEmballageSluitingOmschrijving = null;
        }


        return $this;
    } // setEmballagesluitingKode()

    /**
     * Set the value of [emballagedoseerinr_thesaurusnr] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setEmballagedoseerinrThesaurusnr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->emballagedoseerinr_thesaurusnr !== $v) {
            $this->emballagedoseerinr_thesaurusnr = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR;
        }

        if ($this->aEmballageDoseerinrichtingOmschrijving !== null && $this->aEmballageDoseerinrichtingOmschrijving->getThesaurusnummer() !== $v) {
            $this->aEmballageDoseerinrichtingOmschrijving = null;
        }


        return $this;
    } // setEmballagedoseerinrThesaurusnr()

    /**
     * Set the value of [emballagedoseerinrichting_kode] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setEmballagedoseerinrichtingKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->emballagedoseerinrichting_kode !== $v) {
            $this->emballagedoseerinrichting_kode = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE;
        }

        if ($this->aEmballageDoseerinrichtingOmschrijving !== null && $this->aEmballageDoseerinrichtingOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aEmballageDoseerinrichtingOmschrijving = null;
        }


        return $this;
    } // setEmballagedoseerinrichtingKode()

    /**
     * Set the value of [hulpstoffen_identificerend] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setHulpstoffenIdentificerend($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hulpstoffen_identificerend !== $v) {
            $this->hulpstoffen_identificerend = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::HULPSTOFFEN_IDENTIFICEREND;
        }


        return $this;
    } // setHulpstoffenIdentificerend()

    /**
     * Set the value of [kleur_thesaurusnummer] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setKleurThesaurusnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->kleur_thesaurusnummer !== $v) {
            $this->kleur_thesaurusnummer = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER;
        }

        if ($this->aKleurOmschrijving !== null && $this->aKleurOmschrijving->getThesaurusnummer() !== $v) {
            $this->aKleurOmschrijving = null;
        }


        return $this;
    } // setKleurThesaurusnummer()

    /**
     * Set the value of [kleur_kode] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setKleurKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->kleur_kode !== $v) {
            $this->kleur_kode = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::KLEUR_KODE;
        }

        if ($this->aKleurOmschrijving !== null && $this->aKleurOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aKleurOmschrijving = null;
        }


        return $this;
    } // setKleurKode()

    /**
     * Set the value of [smaak_thesaurusnummer] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setSmaakThesaurusnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->smaak_thesaurusnummer !== $v) {
            $this->smaak_thesaurusnummer = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER;
        }

        if ($this->aSmaakOmschrijving !== null && $this->aSmaakOmschrijving->getThesaurusnummer() !== $v) {
            $this->aSmaakOmschrijving = null;
        }


        return $this;
    } // setSmaakThesaurusnummer()

    /**
     * Set the value of [smaak_kode] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setSmaakKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->smaak_kode !== $v) {
            $this->smaak_kode = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::SMAAK_KODE;
        }

        if ($this->aSmaakOmschrijving !== null && $this->aSmaakOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aSmaakOmschrijving = null;
        }


        return $this;
    } // setSmaakKode()

    /**
     * Set the value of [bereidingsvoorschr_thesaurusnummer] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setBereidingsvoorschrThesaurusnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bereidingsvoorschr_thesaurusnummer !== $v) {
            $this->bereidingsvoorschr_thesaurusnummer = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER;
        }

        if ($this->aBereidingsvoorschrijftOmschrijving !== null && $this->aBereidingsvoorschrijftOmschrijving->getThesaurusnummer() !== $v) {
            $this->aBereidingsvoorschrijftOmschrijving = null;
        }


        return $this;
    } // setBereidingsvoorschrThesaurusnummer()

    /**
     * Set the value of [bereidingsvoorschrift_kode] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setBereidingsvoorschriftKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bereidingsvoorschrift_kode !== $v) {
            $this->bereidingsvoorschrift_kode = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE;
        }

        if ($this->aBereidingsvoorschrijftOmschrijving !== null && $this->aBereidingsvoorschrijftOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aBereidingsvoorschrijftOmschrijving = null;
        }


        return $this;
    } // setBereidingsvoorschriftKode()

    /**
     * Set the value of [fysische_eigenschap_thesaurusnummer] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setFysischeEigenschapThesaurusnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fysische_eigenschap_thesaurusnummer !== $v) {
            $this->fysische_eigenschap_thesaurusnummer = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_THESAURUSNUMMER;
        }


        return $this;
    } // setFysischeEigenschapThesaurusnummer()

    /**
     * Set the value of [fysische_eigenschap_kode] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setFysischeEigenschapKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fysische_eigenschap_kode !== $v) {
            $this->fysische_eigenschap_kode = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_KODE;
        }


        return $this;
    } // setFysischeEigenschapKode()

    /**
     * Set the value of [grondstofvorm_thesaurusnummer] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setGrondstofvormThesaurusnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->grondstofvorm_thesaurusnummer !== $v) {
            $this->grondstofvorm_thesaurusnummer = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::GRONDSTOFVORM_THESAURUSNUMMER;
        }


        return $this;
    } // setGrondstofvormThesaurusnummer()

    /**
     * Set the value of [grondstofvorm_kode] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setGrondstofvormKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->grondstofvorm_kode !== $v) {
            $this->grondstofvorm_kode = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::GRONDSTOFVORM_KODE;
        }


        return $this;
    } // setGrondstofvormKode()

    /**
     * Set the value of [los_verkrijgbaar] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setLosVerkrijgbaar($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->los_verkrijgbaar !== $v) {
            $this->los_verkrijgbaar = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::LOS_VERKRIJGBAAR;
        }


        return $this;
    } // setLosVerkrijgbaar()

    /**
     * Set the value of [bioequivalente_groep] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setBioequivalenteGroep($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bioequivalente_groep !== $v) {
            $this->bioequivalente_groep = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::BIOEQUIVALENTE_GROEP;
        }


        return $this;
    } // setBioequivalenteGroep()

    /**
     * Set the value of [kode_radioactieve_stof] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setKodeRadioactieveStof($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->kode_radioactieve_stof !== $v) {
            $this->kode_radioactieve_stof = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::KODE_RADIOACTIEVE_STOF;
        }


        return $this;
    } // setKodeRadioactieveStof()

    /**
     * Set the value of [soort_hulpmiddel] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setSoortHulpmiddel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->soort_hulpmiddel !== $v) {
            $this->soort_hulpmiddel = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::SOORT_HULPMIDDEL;
        }


        return $this;
    } // setSoortHulpmiddel()

    /**
     * Set the value of [rzv_thesaurus_120] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setRzvThesaurus120($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rzv_thesaurus_120 !== $v) {
            $this->rzv_thesaurus_120 = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::RZV_THESAURUS_120;
        }

        if ($this->aRzvBijlage2Omschrijving !== null && $this->aRzvBijlage2Omschrijving->getThesaurusnummer() !== $v) {
            $this->aRzvBijlage2Omschrijving = null;
        }


        return $this;
    } // setRzvThesaurus120()

    /**
     * Set the value of [rzvvoorwaarden_bijlage_2] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setRzvvoorwaardenBijlage2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rzvvoorwaarden_bijlage_2 !== $v) {
            $this->rzvvoorwaarden_bijlage_2 = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2;
        }

        if ($this->aRzvBijlage2Omschrijving !== null && $this->aRzvBijlage2Omschrijving->getThesaurusItemnummer() !== $v) {
            $this->aRzvBijlage2Omschrijving = null;
        }


        return $this;
    } // setRzvvoorwaardenBijlage2()

    /**
     * Set the value of [tekstmodule] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setTekstmodule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekstmodule !== $v) {
            $this->tekstmodule = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::TEKSTMODULE;
        }


        return $this;
    } // setTekstmodule()

    /**
     * Set the value of [tekst_verwijzing] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setTekstVerwijzing($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekst_verwijzing !== $v) {
            $this->tekst_verwijzing = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::TEKST_VERWIJZING;
        }


        return $this;
    } // setTekstVerwijzing()

    /**
     * Set the value of [hulpmiddel_volgens_awbz] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setHulpmiddelVolgensAwbz($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hulpmiddel_volgens_awbz !== $v) {
            $this->hulpmiddel_volgens_awbz = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::HULPMIDDEL_VOLGENS_AWBZ;
        }


        return $this;
    } // setHulpmiddelVolgensAwbz()

    /**
     * Set the value of [eenheid_inkoophoeveelheid_thesnr] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setEenheidInkoophoeveelheidThesnr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eenheid_inkoophoeveelheid_thesnr !== $v) {
            $this->eenheid_inkoophoeveelheid_thesnr = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR;
        }

        if ($this->aInkoophoeveelheidOmschrijving !== null && $this->aInkoophoeveelheidOmschrijving->getThesaurusnummer() !== $v) {
            $this->aInkoophoeveelheidOmschrijving = null;
        }


        return $this;
    } // setEenheidInkoophoeveelheidThesnr()

    /**
     * Set the value of [eenheid_inkoophoeveelheid] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setEenheidInkoophoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eenheid_inkoophoeveelheid !== $v) {
            $this->eenheid_inkoophoeveelheid = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID;
        }

        if ($this->aInkoophoeveelheidOmschrijving !== null && $this->aInkoophoeveelheidOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aInkoophoeveelheidOmschrijving = null;
        }


        return $this;
    } // setEenheidInkoophoeveelheid()

    /**
     * Set the value of [basiseenheid_verpakking_thesnr] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setBasiseenheidVerpakkingThesnr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->basiseenheid_verpakking_thesnr !== $v) {
            $this->basiseenheid_verpakking_thesnr = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR;
        }

        if ($this->aBasiseenheidOmschrijving !== null && $this->aBasiseenheidOmschrijving->getThesaurusnummer() !== $v) {
            $this->aBasiseenheidOmschrijving = null;
        }


        return $this;
    } // setBasiseenheidVerpakkingThesnr()

    /**
     * Set the value of [basiseenheid_verpakking] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setBasiseenheidVerpakking($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->basiseenheid_verpakking !== $v) {
            $this->basiseenheid_verpakking = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::BASISEENHEID_VERPAKKING;
        }

        if ($this->aBasiseenheidOmschrijving !== null && $this->aBasiseenheidOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aBasiseenheidOmschrijving = null;
        }


        return $this;
    } // setBasiseenheidVerpakking()

    /**
     * Set the value of [richtlijn_gebruik_ondergrens] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setRichtlijnGebruikOndergrens($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->richtlijn_gebruik_ondergrens !== $v) {
            $this->richtlijn_gebruik_ondergrens = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_ONDERGRENS;
        }


        return $this;
    } // setRichtlijnGebruikOndergrens()

    /**
     * Set the value of [richtlijn_gebruik_bovengrens] column.
     *
     * @param  string $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setRichtlijnGebruikBovengrens($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->richtlijn_gebruik_bovengrens !== $v) {
            $this->richtlijn_gebruik_bovengrens = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_BOVENGRENS;
        }


        return $this;
    } // setRichtlijnGebruikBovengrens()

    /**
     * Set the value of [thesaurus_rzv_verstrekking] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setThesaurusRzvVerstrekking($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurus_rzv_verstrekking !== $v) {
            $this->thesaurus_rzv_verstrekking = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING;
        }

        if ($this->aRzvVerstrekkingOmschrijving !== null && $this->aRzvVerstrekkingOmschrijving->getThesaurusnummer() !== $v) {
            $this->aRzvVerstrekkingOmschrijving = null;
        }


        return $this;
    } // setThesaurusRzvVerstrekking()

    /**
     * Set the value of [rzvverstrekking] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setRzvverstrekking($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rzvverstrekking !== $v) {
            $this->rzvverstrekking = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::RZVVERSTREKKING;
        }

        if ($this->aRzvVerstrekkingOmschrijving !== null && $this->aRzvVerstrekkingOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aRzvVerstrekkingOmschrijving = null;
        }


        return $this;
    } // setRzvverstrekking()

    /**
     * Set the value of [thesaurus_rzv_rationaliteit] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setThesaurusRzvRationaliteit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurus_rzv_rationaliteit !== $v) {
            $this->thesaurus_rzv_rationaliteit = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::THESAURUS_RZV_RATIONALITEIT;
        }


        return $this;
    } // setThesaurusRzvRationaliteit()

    /**
     * Set the value of [beoordeling_rationaliteit] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setBeoordelingRationaliteit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->beoordeling_rationaliteit !== $v) {
            $this->beoordeling_rationaliteit = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::BEOORDELING_RATIONALITEIT;
        }


        return $this;
    } // setBeoordelingRationaliteit()

    /**
     * Set the value of [thesaurus_rzv_beoordeling] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setThesaurusRzvBeoordeling($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurus_rzv_beoordeling !== $v) {
            $this->thesaurus_rzv_beoordeling = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::THESAURUS_RZV_BEOORDELING;
        }


        return $this;
    } // setThesaurusRzvBeoordeling()

    /**
     * Set the value of [achtergrond_rationaliteit] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setAchtergrondRationaliteit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->achtergrond_rationaliteit !== $v) {
            $this->achtergrond_rationaliteit = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::ACHTERGROND_RATIONALITEIT;
        }


        return $this;
    } // setAchtergrondRationaliteit()

    /**
     * Set the value of [thesaurus_rzv_hulpmiddelen] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setThesaurusRzvHulpmiddelen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurus_rzv_hulpmiddelen !== $v) {
            $this->thesaurus_rzv_hulpmiddelen = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::THESAURUS_RZV_HULPMIDDELEN;
        }


        return $this;
    } // setThesaurusRzvHulpmiddelen()

    /**
     * Set the value of [hulpmiddelen_zorg] column.
     *
     * @param  int $v new value
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setHulpmiddelenZorg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hulpmiddelen_zorg !== $v) {
            $this->hulpmiddelen_zorg = $v;
            $this->modifiedColumns[] = GsHandelsproductenPeer::HULPMIDDELEN_ZORG;
        }


        return $this;
    } // setHulpmiddelenZorg()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->bestandnummer = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->mutatiekode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->handelsproduktkode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->prkcode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->medisch_hulpmiddelkode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->handelsproduktnaamnummer = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->merkstamnaam = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->firmastamnaam = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->produktgroep_thesaurusnummer = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->produktgroep_kode = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->soortelijk_gewicht = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->aantal_ddds_per_basiseenh_produkt = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->aantal_druppels_per_ml = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->pifnummer_thesaurusnummer = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->pifnummer = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->fabrikant_produktkodering = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->reden_niet_clusteren_thesaurusnr = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->reden_niet_clusteren_kode = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->ftk_1 = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->ftk_2 = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->ftk_3 = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->ftk_4 = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->ftk_5 = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->informatoriumproductcode = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->kode_combinatiepreparaat = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->kode_vergift = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->kode_rijvaardigheid = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->kode_brandgevaarlijk = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->gesteriliseerd_voor_geneesmiddelen = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->hpkeenheid_thesaurusnummer = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->hpkeenheid_kode = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->oplosmiddel_hoeveelheid_1 = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->oplosmiddel_aantal_1 = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->oplosmiddel_hoeveelheid_2 = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->oplosmiddel_aantal_2 = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->farmaceutische_kwaliteit = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->halffabrikaat_thesaurusnummer = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->halffabrikaat_code = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->deelbaarheid_aantal = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->emballagemateriaal_thesaurusnummer = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->emballagemateriaal_kode = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->emballagesluiting_thesaurusnummer = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->emballagesluiting_kode = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->emballagedoseerinr_thesaurusnr = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->emballagedoseerinrichting_kode = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->hulpstoffen_identificerend = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->kleur_thesaurusnummer = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->kleur_kode = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->smaak_thesaurusnummer = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->smaak_kode = ($row[$startcol + 49] !== null) ? (int) $row[$startcol + 49] : null;
            $this->bereidingsvoorschr_thesaurusnummer = ($row[$startcol + 50] !== null) ? (int) $row[$startcol + 50] : null;
            $this->bereidingsvoorschrift_kode = ($row[$startcol + 51] !== null) ? (int) $row[$startcol + 51] : null;
            $this->fysische_eigenschap_thesaurusnummer = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->fysische_eigenschap_kode = ($row[$startcol + 53] !== null) ? (int) $row[$startcol + 53] : null;
            $this->grondstofvorm_thesaurusnummer = ($row[$startcol + 54] !== null) ? (int) $row[$startcol + 54] : null;
            $this->grondstofvorm_kode = ($row[$startcol + 55] !== null) ? (int) $row[$startcol + 55] : null;
            $this->los_verkrijgbaar = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->bioequivalente_groep = ($row[$startcol + 57] !== null) ? (int) $row[$startcol + 57] : null;
            $this->kode_radioactieve_stof = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->soort_hulpmiddel = ($row[$startcol + 59] !== null) ? (int) $row[$startcol + 59] : null;
            $this->rzv_thesaurus_120 = ($row[$startcol + 60] !== null) ? (int) $row[$startcol + 60] : null;
            $this->rzvvoorwaarden_bijlage_2 = ($row[$startcol + 61] !== null) ? (int) $row[$startcol + 61] : null;
            $this->tekstmodule = ($row[$startcol + 62] !== null) ? (int) $row[$startcol + 62] : null;
            $this->tekst_verwijzing = ($row[$startcol + 63] !== null) ? (int) $row[$startcol + 63] : null;
            $this->hulpmiddel_volgens_awbz = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->eenheid_inkoophoeveelheid_thesnr = ($row[$startcol + 65] !== null) ? (int) $row[$startcol + 65] : null;
            $this->eenheid_inkoophoeveelheid = ($row[$startcol + 66] !== null) ? (int) $row[$startcol + 66] : null;
            $this->basiseenheid_verpakking_thesnr = ($row[$startcol + 67] !== null) ? (int) $row[$startcol + 67] : null;
            $this->basiseenheid_verpakking = ($row[$startcol + 68] !== null) ? (int) $row[$startcol + 68] : null;
            $this->richtlijn_gebruik_ondergrens = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->richtlijn_gebruik_bovengrens = ($row[$startcol + 70] !== null) ? (string) $row[$startcol + 70] : null;
            $this->thesaurus_rzv_verstrekking = ($row[$startcol + 71] !== null) ? (int) $row[$startcol + 71] : null;
            $this->rzvverstrekking = ($row[$startcol + 72] !== null) ? (int) $row[$startcol + 72] : null;
            $this->thesaurus_rzv_rationaliteit = ($row[$startcol + 73] !== null) ? (int) $row[$startcol + 73] : null;
            $this->beoordeling_rationaliteit = ($row[$startcol + 74] !== null) ? (int) $row[$startcol + 74] : null;
            $this->thesaurus_rzv_beoordeling = ($row[$startcol + 75] !== null) ? (int) $row[$startcol + 75] : null;
            $this->achtergrond_rationaliteit = ($row[$startcol + 76] !== null) ? (int) $row[$startcol + 76] : null;
            $this->thesaurus_rzv_hulpmiddelen = ($row[$startcol + 77] !== null) ? (int) $row[$startcol + 77] : null;
            $this->hulpmiddelen_zorg = ($row[$startcol + 78] !== null) ? (int) $row[$startcol + 78] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 79; // 79 = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsHandelsproducten object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aGsPrescriptieProduct !== null && $this->prkcode !== $this->aGsPrescriptieProduct->getPrkcode()) {
            $this->aGsPrescriptieProduct = null;
        }
        if ($this->aGsNamen !== null && $this->handelsproduktnaamnummer !== $this->aGsNamen->getNaamnummer()) {
            $this->aGsNamen = null;
        }
        if ($this->aProduktgroepOmschrijving !== null && $this->produktgroep_thesaurusnummer !== $this->aProduktgroepOmschrijving->getThesaurusnummer()) {
            $this->aProduktgroepOmschrijving = null;
        }
        if ($this->aProduktgroepOmschrijving !== null && $this->produktgroep_kode !== $this->aProduktgroepOmschrijving->getThesaurusItemnummer()) {
            $this->aProduktgroepOmschrijving = null;
        }
        if ($this->aEmballageMateriaalOmschrijving !== null && $this->emballagemateriaal_thesaurusnummer !== $this->aEmballageMateriaalOmschrijving->getThesaurusnummer()) {
            $this->aEmballageMateriaalOmschrijving = null;
        }
        if ($this->aEmballageMateriaalOmschrijving !== null && $this->emballagemateriaal_kode !== $this->aEmballageMateriaalOmschrijving->getThesaurusItemnummer()) {
            $this->aEmballageMateriaalOmschrijving = null;
        }
        if ($this->aEmballageSluitingOmschrijving !== null && $this->emballagesluiting_thesaurusnummer !== $this->aEmballageSluitingOmschrijving->getThesaurusnummer()) {
            $this->aEmballageSluitingOmschrijving = null;
        }
        if ($this->aEmballageSluitingOmschrijving !== null && $this->emballagesluiting_kode !== $this->aEmballageSluitingOmschrijving->getThesaurusItemnummer()) {
            $this->aEmballageSluitingOmschrijving = null;
        }
        if ($this->aEmballageDoseerinrichtingOmschrijving !== null && $this->emballagedoseerinr_thesaurusnr !== $this->aEmballageDoseerinrichtingOmschrijving->getThesaurusnummer()) {
            $this->aEmballageDoseerinrichtingOmschrijving = null;
        }
        if ($this->aEmballageDoseerinrichtingOmschrijving !== null && $this->emballagedoseerinrichting_kode !== $this->aEmballageDoseerinrichtingOmschrijving->getThesaurusItemnummer()) {
            $this->aEmballageDoseerinrichtingOmschrijving = null;
        }
        if ($this->aKleurOmschrijving !== null && $this->kleur_thesaurusnummer !== $this->aKleurOmschrijving->getThesaurusnummer()) {
            $this->aKleurOmschrijving = null;
        }
        if ($this->aKleurOmschrijving !== null && $this->kleur_kode !== $this->aKleurOmschrijving->getThesaurusItemnummer()) {
            $this->aKleurOmschrijving = null;
        }
        if ($this->aSmaakOmschrijving !== null && $this->smaak_thesaurusnummer !== $this->aSmaakOmschrijving->getThesaurusnummer()) {
            $this->aSmaakOmschrijving = null;
        }
        if ($this->aSmaakOmschrijving !== null && $this->smaak_kode !== $this->aSmaakOmschrijving->getThesaurusItemnummer()) {
            $this->aSmaakOmschrijving = null;
        }
        if ($this->aBereidingsvoorschrijftOmschrijving !== null && $this->bereidingsvoorschr_thesaurusnummer !== $this->aBereidingsvoorschrijftOmschrijving->getThesaurusnummer()) {
            $this->aBereidingsvoorschrijftOmschrijving = null;
        }
        if ($this->aBereidingsvoorschrijftOmschrijving !== null && $this->bereidingsvoorschrift_kode !== $this->aBereidingsvoorschrijftOmschrijving->getThesaurusItemnummer()) {
            $this->aBereidingsvoorschrijftOmschrijving = null;
        }
        if ($this->aRzvBijlage2Omschrijving !== null && $this->rzv_thesaurus_120 !== $this->aRzvBijlage2Omschrijving->getThesaurusnummer()) {
            $this->aRzvBijlage2Omschrijving = null;
        }
        if ($this->aRzvBijlage2Omschrijving !== null && $this->rzvvoorwaarden_bijlage_2 !== $this->aRzvBijlage2Omschrijving->getThesaurusItemnummer()) {
            $this->aRzvBijlage2Omschrijving = null;
        }
        if ($this->aInkoophoeveelheidOmschrijving !== null && $this->eenheid_inkoophoeveelheid_thesnr !== $this->aInkoophoeveelheidOmschrijving->getThesaurusnummer()) {
            $this->aInkoophoeveelheidOmschrijving = null;
        }
        if ($this->aInkoophoeveelheidOmschrijving !== null && $this->eenheid_inkoophoeveelheid !== $this->aInkoophoeveelheidOmschrijving->getThesaurusItemnummer()) {
            $this->aInkoophoeveelheidOmschrijving = null;
        }
        if ($this->aBasiseenheidOmschrijving !== null && $this->basiseenheid_verpakking_thesnr !== $this->aBasiseenheidOmschrijving->getThesaurusnummer()) {
            $this->aBasiseenheidOmschrijving = null;
        }
        if ($this->aBasiseenheidOmschrijving !== null && $this->basiseenheid_verpakking !== $this->aBasiseenheidOmschrijving->getThesaurusItemnummer()) {
            $this->aBasiseenheidOmschrijving = null;
        }
        if ($this->aRzvVerstrekkingOmschrijving !== null && $this->thesaurus_rzv_verstrekking !== $this->aRzvVerstrekkingOmschrijving->getThesaurusnummer()) {
            $this->aRzvVerstrekkingOmschrijving = null;
        }
        if ($this->aRzvVerstrekkingOmschrijving !== null && $this->rzvverstrekking !== $this->aRzvVerstrekkingOmschrijving->getThesaurusItemnummer()) {
            $this->aRzvVerstrekkingOmschrijving = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsHandelsproductenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGsPrescriptieProduct = null;
            $this->aGsNamen = null;
            $this->aInkoophoeveelheidOmschrijving = null;
            $this->aBasiseenheidOmschrijving = null;
            $this->aEmballageMateriaalOmschrijving = null;
            $this->aEmballageSluitingOmschrijving = null;
            $this->aEmballageDoseerinrichtingOmschrijving = null;
            $this->aKleurOmschrijving = null;
            $this->aSmaakOmschrijving = null;
            $this->aBereidingsvoorschrijftOmschrijving = null;
            $this->aProduktgroepOmschrijving = null;
            $this->aRzvVerstrekkingOmschrijving = null;
            $this->aRzvBijlage2Omschrijving = null;
            $this->collGsArtikelEigenschappens = null;

            $this->collGsArtikelens = null;

            $this->collGsBijzondereKenmerkens = null;

            $this->collGsDeclaratietabelDureGeneesmiddelens = null;

            $this->collGsIngegevenSamenstellingens = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsHandelsproductenQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                GsHandelsproductenPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aGsPrescriptieProduct !== null) {
                if ($this->aGsPrescriptieProduct->isModified() || $this->aGsPrescriptieProduct->isNew()) {
                    $affectedRows += $this->aGsPrescriptieProduct->save($con);
                }
                $this->setGsPrescriptieProduct($this->aGsPrescriptieProduct);
            }

            if ($this->aGsNamen !== null) {
                if ($this->aGsNamen->isModified() || $this->aGsNamen->isNew()) {
                    $affectedRows += $this->aGsNamen->save($con);
                }
                $this->setGsNamen($this->aGsNamen);
            }

            if ($this->aInkoophoeveelheidOmschrijving !== null) {
                if ($this->aInkoophoeveelheidOmschrijving->isModified() || $this->aInkoophoeveelheidOmschrijving->isNew()) {
                    $affectedRows += $this->aInkoophoeveelheidOmschrijving->save($con);
                }
                $this->setInkoophoeveelheidOmschrijving($this->aInkoophoeveelheidOmschrijving);
            }

            if ($this->aBasiseenheidOmschrijving !== null) {
                if ($this->aBasiseenheidOmschrijving->isModified() || $this->aBasiseenheidOmschrijving->isNew()) {
                    $affectedRows += $this->aBasiseenheidOmschrijving->save($con);
                }
                $this->setBasiseenheidOmschrijving($this->aBasiseenheidOmschrijving);
            }

            if ($this->aEmballageMateriaalOmschrijving !== null) {
                if ($this->aEmballageMateriaalOmschrijving->isModified() || $this->aEmballageMateriaalOmschrijving->isNew()) {
                    $affectedRows += $this->aEmballageMateriaalOmschrijving->save($con);
                }
                $this->setEmballageMateriaalOmschrijving($this->aEmballageMateriaalOmschrijving);
            }

            if ($this->aEmballageSluitingOmschrijving !== null) {
                if ($this->aEmballageSluitingOmschrijving->isModified() || $this->aEmballageSluitingOmschrijving->isNew()) {
                    $affectedRows += $this->aEmballageSluitingOmschrijving->save($con);
                }
                $this->setEmballageSluitingOmschrijving($this->aEmballageSluitingOmschrijving);
            }

            if ($this->aEmballageDoseerinrichtingOmschrijving !== null) {
                if ($this->aEmballageDoseerinrichtingOmschrijving->isModified() || $this->aEmballageDoseerinrichtingOmschrijving->isNew()) {
                    $affectedRows += $this->aEmballageDoseerinrichtingOmschrijving->save($con);
                }
                $this->setEmballageDoseerinrichtingOmschrijving($this->aEmballageDoseerinrichtingOmschrijving);
            }

            if ($this->aKleurOmschrijving !== null) {
                if ($this->aKleurOmschrijving->isModified() || $this->aKleurOmschrijving->isNew()) {
                    $affectedRows += $this->aKleurOmschrijving->save($con);
                }
                $this->setKleurOmschrijving($this->aKleurOmschrijving);
            }

            if ($this->aSmaakOmschrijving !== null) {
                if ($this->aSmaakOmschrijving->isModified() || $this->aSmaakOmschrijving->isNew()) {
                    $affectedRows += $this->aSmaakOmschrijving->save($con);
                }
                $this->setSmaakOmschrijving($this->aSmaakOmschrijving);
            }

            if ($this->aBereidingsvoorschrijftOmschrijving !== null) {
                if ($this->aBereidingsvoorschrijftOmschrijving->isModified() || $this->aBereidingsvoorschrijftOmschrijving->isNew()) {
                    $affectedRows += $this->aBereidingsvoorschrijftOmschrijving->save($con);
                }
                $this->setBereidingsvoorschrijftOmschrijving($this->aBereidingsvoorschrijftOmschrijving);
            }

            if ($this->aProduktgroepOmschrijving !== null) {
                if ($this->aProduktgroepOmschrijving->isModified() || $this->aProduktgroepOmschrijving->isNew()) {
                    $affectedRows += $this->aProduktgroepOmschrijving->save($con);
                }
                $this->setProduktgroepOmschrijving($this->aProduktgroepOmschrijving);
            }

            if ($this->aRzvVerstrekkingOmschrijving !== null) {
                if ($this->aRzvVerstrekkingOmschrijving->isModified() || $this->aRzvVerstrekkingOmschrijving->isNew()) {
                    $affectedRows += $this->aRzvVerstrekkingOmschrijving->save($con);
                }
                $this->setRzvVerstrekkingOmschrijving($this->aRzvVerstrekkingOmschrijving);
            }

            if ($this->aRzvBijlage2Omschrijving !== null) {
                if ($this->aRzvBijlage2Omschrijving->isModified() || $this->aRzvBijlage2Omschrijving->isNew()) {
                    $affectedRows += $this->aRzvBijlage2Omschrijving->save($con);
                }
                $this->setRzvBijlage2Omschrijving($this->aRzvBijlage2Omschrijving);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->gsArtikelEigenschappensScheduledForDeletion !== null) {
                if (!$this->gsArtikelEigenschappensScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsArtikelEigenschappensScheduledForDeletion as $gsArtikelEigenschappen) {
                        // need to save related object because we set the relation to null
                        $gsArtikelEigenschappen->save($con);
                    }
                    $this->gsArtikelEigenschappensScheduledForDeletion = null;
                }
            }

            if ($this->collGsArtikelEigenschappens !== null) {
                foreach ($this->collGsArtikelEigenschappens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsArtikelensScheduledForDeletion !== null) {
                if (!$this->gsArtikelensScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsArtikelensScheduledForDeletion as $gsArtikelen) {
                        // need to save related object because we set the relation to null
                        $gsArtikelen->save($con);
                    }
                    $this->gsArtikelensScheduledForDeletion = null;
                }
            }

            if ($this->collGsArtikelens !== null) {
                foreach ($this->collGsArtikelens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsBijzondereKenmerkensScheduledForDeletion !== null) {
                if (!$this->gsBijzondereKenmerkensScheduledForDeletion->isEmpty()) {
                    GsBijzondereKenmerkenQuery::create()
                        ->filterByPrimaryKeys($this->gsBijzondereKenmerkensScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->gsBijzondereKenmerkensScheduledForDeletion = null;
                }
            }

            if ($this->collGsBijzondereKenmerkens !== null) {
                foreach ($this->collGsBijzondereKenmerkens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsDeclaratietabelDureGeneesmiddelensScheduledForDeletion !== null) {
                if (!$this->gsDeclaratietabelDureGeneesmiddelensScheduledForDeletion->isEmpty()) {
                    GsDeclaratietabelDureGeneesmiddelenQuery::create()
                        ->filterByPrimaryKeys($this->gsDeclaratietabelDureGeneesmiddelensScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->gsDeclaratietabelDureGeneesmiddelensScheduledForDeletion = null;
                }
            }

            if ($this->collGsDeclaratietabelDureGeneesmiddelens !== null) {
                foreach ($this->collGsDeclaratietabelDureGeneesmiddelens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsIngegevenSamenstellingensScheduledForDeletion !== null) {
                if (!$this->gsIngegevenSamenstellingensScheduledForDeletion->isEmpty()) {
                    GsIngegevenSamenstellingenQuery::create()
                        ->filterByPrimaryKeys($this->gsIngegevenSamenstellingensScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->gsIngegevenSamenstellingensScheduledForDeletion = null;
                }
            }

            if ($this->collGsIngegevenSamenstellingens !== null) {
                foreach ($this->collGsIngegevenSamenstellingens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(GsHandelsproductenPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::HANDELSPRODUKTKODE)) {
            $modifiedColumns[':p' . $index++]  = '`handelsproduktkode`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::PRKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`prkcode`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::MEDISCH_HULPMIDDELKODE)) {
            $modifiedColumns[':p' . $index++]  = '`medisch_hulpmiddelkode`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`handelsproduktnaamnummer`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::MERKSTAMNAAM)) {
            $modifiedColumns[':p' . $index++]  = '`merkstamnaam`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::FIRMASTAMNAAM)) {
            $modifiedColumns[':p' . $index++]  = '`firmastamnaam`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`produktgroep_thesaurusnummer`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::PRODUKTGROEP_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`produktgroep_kode`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::SOORTELIJK_GEWICHT)) {
            $modifiedColumns[':p' . $index++]  = '`soortelijk_gewicht`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::AANTAL_DDDS_PER_BASISEENH_PRODUKT)) {
            $modifiedColumns[':p' . $index++]  = '`aantal_ddds_per_basiseenh_produkt`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::AANTAL_DRUPPELS_PER_ML)) {
            $modifiedColumns[':p' . $index++]  = '`aantal_druppels_per_ml`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::PIFNUMMER_THESAURUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`pifnummer_thesaurusnummer`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::PIFNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`pifnummer`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::FABRIKANT_PRODUKTKODERING)) {
            $modifiedColumns[':p' . $index++]  = '`fabrikant_produktkodering`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_THESAURUSNR)) {
            $modifiedColumns[':p' . $index++]  = '`reden_niet_clusteren_thesaurusnr`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`reden_niet_clusteren_kode`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::FTK_1)) {
            $modifiedColumns[':p' . $index++]  = '`ftk_1`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::FTK_2)) {
            $modifiedColumns[':p' . $index++]  = '`ftk_2`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::FTK_3)) {
            $modifiedColumns[':p' . $index++]  = '`ftk_3`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::FTK_4)) {
            $modifiedColumns[':p' . $index++]  = '`ftk_4`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::FTK_5)) {
            $modifiedColumns[':p' . $index++]  = '`ftk_5`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::INFORMATORIUMPRODUCTCODE)) {
            $modifiedColumns[':p' . $index++]  = '`informatoriumproductcode`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::KODE_COMBINATIEPREPARAAT)) {
            $modifiedColumns[':p' . $index++]  = '`kode_combinatiepreparaat`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::KODE_VERGIFT)) {
            $modifiedColumns[':p' . $index++]  = '`kode_vergift`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::KODE_RIJVAARDIGHEID)) {
            $modifiedColumns[':p' . $index++]  = '`kode_rijvaardigheid`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::KODE_BRANDGEVAARLIJK)) {
            $modifiedColumns[':p' . $index++]  = '`kode_brandgevaarlijk`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::GESTERILISEERD_VOOR_GENEESMIDDELEN)) {
            $modifiedColumns[':p' . $index++]  = '`gesteriliseerd_voor_geneesmiddelen`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::HPKEENHEID_THESAURUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`hpkeenheid_thesaurusnummer`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::HPKEENHEID_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`hpkeenheid_kode`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_1)) {
            $modifiedColumns[':p' . $index++]  = '`oplosmiddel_hoeveelheid_1`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_1)) {
            $modifiedColumns[':p' . $index++]  = '`oplosmiddel_aantal_1`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_2)) {
            $modifiedColumns[':p' . $index++]  = '`oplosmiddel_hoeveelheid_2`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_2)) {
            $modifiedColumns[':p' . $index++]  = '`oplosmiddel_aantal_2`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::FARMACEUTISCHE_KWALITEIT)) {
            $modifiedColumns[':p' . $index++]  = '`farmaceutische_kwaliteit`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::HALFFABRIKAAT_THESAURUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`halffabrikaat_thesaurusnummer`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::HALFFABRIKAAT_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`halffabrikaat_code`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::DEELBAARHEID_AANTAL)) {
            $modifiedColumns[':p' . $index++]  = '`deelbaarheid_aantal`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`emballagemateriaal_thesaurusnummer`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`emballagemateriaal_kode`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`emballagesluiting_thesaurusnummer`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::EMBALLAGESLUITING_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`emballagesluiting_kode`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR)) {
            $modifiedColumns[':p' . $index++]  = '`emballagedoseerinr_thesaurusnr`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`emballagedoseerinrichting_kode`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::HULPSTOFFEN_IDENTIFICEREND)) {
            $modifiedColumns[':p' . $index++]  = '`hulpstoffen_identificerend`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`kleur_thesaurusnummer`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::KLEUR_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`kleur_kode`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`smaak_thesaurusnummer`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::SMAAK_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`smaak_kode`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bereidingsvoorschr_thesaurusnummer`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`bereidingsvoorschrift_kode`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_THESAURUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`fysische_eigenschap_thesaurusnummer`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`fysische_eigenschap_kode`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::GRONDSTOFVORM_THESAURUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`grondstofvorm_thesaurusnummer`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::GRONDSTOFVORM_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`grondstofvorm_kode`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::LOS_VERKRIJGBAAR)) {
            $modifiedColumns[':p' . $index++]  = '`los_verkrijgbaar`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::BIOEQUIVALENTE_GROEP)) {
            $modifiedColumns[':p' . $index++]  = '`bioequivalente_groep`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::KODE_RADIOACTIEVE_STOF)) {
            $modifiedColumns[':p' . $index++]  = '`kode_radioactieve_stof`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::SOORT_HULPMIDDEL)) {
            $modifiedColumns[':p' . $index++]  = '`soort_hulpmiddel`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::RZV_THESAURUS_120)) {
            $modifiedColumns[':p' . $index++]  = '`rzv_thesaurus_120`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2)) {
            $modifiedColumns[':p' . $index++]  = '`rzvvoorwaarden_bijlage_2`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::TEKSTMODULE)) {
            $modifiedColumns[':p' . $index++]  = '`tekstmodule`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::TEKST_VERWIJZING)) {
            $modifiedColumns[':p' . $index++]  = '`tekst_verwijzing`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::HULPMIDDEL_VOLGENS_AWBZ)) {
            $modifiedColumns[':p' . $index++]  = '`hulpmiddel_volgens_awbz`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR)) {
            $modifiedColumns[':p' . $index++]  = '`eenheid_inkoophoeveelheid_thesnr`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`eenheid_inkoophoeveelheid`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR)) {
            $modifiedColumns[':p' . $index++]  = '`basiseenheid_verpakking_thesnr`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`basiseenheid_verpakking`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_ONDERGRENS)) {
            $modifiedColumns[':p' . $index++]  = '`richtlijn_gebruik_ondergrens`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_BOVENGRENS)) {
            $modifiedColumns[':p' . $index++]  = '`richtlijn_gebruik_bovengrens`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurus_rzv_verstrekking`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::RZVVERSTREKKING)) {
            $modifiedColumns[':p' . $index++]  = '`rzvverstrekking`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::THESAURUS_RZV_RATIONALITEIT)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurus_rzv_rationaliteit`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::BEOORDELING_RATIONALITEIT)) {
            $modifiedColumns[':p' . $index++]  = '`beoordeling_rationaliteit`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::THESAURUS_RZV_BEOORDELING)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurus_rzv_beoordeling`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::ACHTERGROND_RATIONALITEIT)) {
            $modifiedColumns[':p' . $index++]  = '`achtergrond_rationaliteit`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::THESAURUS_RZV_HULPMIDDELEN)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurus_rzv_hulpmiddelen`';
        }
        if ($this->isColumnModified(GsHandelsproductenPeer::HULPMIDDELEN_ZORG)) {
            $modifiedColumns[':p' . $index++]  = '`hulpmiddelen_zorg`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_handelsproducten` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`bestandnummer`':
                        $stmt->bindValue($identifier, $this->bestandnummer, PDO::PARAM_INT);
                        break;
                    case '`mutatiekode`':
                        $stmt->bindValue($identifier, $this->mutatiekode, PDO::PARAM_INT);
                        break;
                    case '`handelsproduktkode`':
                        $stmt->bindValue($identifier, $this->handelsproduktkode, PDO::PARAM_INT);
                        break;
                    case '`prkcode`':
                        $stmt->bindValue($identifier, $this->prkcode, PDO::PARAM_INT);
                        break;
                    case '`medisch_hulpmiddelkode`':
                        $stmt->bindValue($identifier, $this->medisch_hulpmiddelkode, PDO::PARAM_INT);
                        break;
                    case '`handelsproduktnaamnummer`':
                        $stmt->bindValue($identifier, $this->handelsproduktnaamnummer, PDO::PARAM_INT);
                        break;
                    case '`merkstamnaam`':
                        $stmt->bindValue($identifier, $this->merkstamnaam, PDO::PARAM_STR);
                        break;
                    case '`firmastamnaam`':
                        $stmt->bindValue($identifier, $this->firmastamnaam, PDO::PARAM_STR);
                        break;
                    case '`produktgroep_thesaurusnummer`':
                        $stmt->bindValue($identifier, $this->produktgroep_thesaurusnummer, PDO::PARAM_INT);
                        break;
                    case '`produktgroep_kode`':
                        $stmt->bindValue($identifier, $this->produktgroep_kode, PDO::PARAM_INT);
                        break;
                    case '`soortelijk_gewicht`':
                        $stmt->bindValue($identifier, $this->soortelijk_gewicht, PDO::PARAM_STR);
                        break;
                    case '`aantal_ddds_per_basiseenh_produkt`':
                        $stmt->bindValue($identifier, $this->aantal_ddds_per_basiseenh_produkt, PDO::PARAM_STR);
                        break;
                    case '`aantal_druppels_per_ml`':
                        $stmt->bindValue($identifier, $this->aantal_druppels_per_ml, PDO::PARAM_STR);
                        break;
                    case '`pifnummer_thesaurusnummer`':
                        $stmt->bindValue($identifier, $this->pifnummer_thesaurusnummer, PDO::PARAM_INT);
                        break;
                    case '`pifnummer`':
                        $stmt->bindValue($identifier, $this->pifnummer, PDO::PARAM_INT);
                        break;
                    case '`fabrikant_produktkodering`':
                        $stmt->bindValue($identifier, $this->fabrikant_produktkodering, PDO::PARAM_STR);
                        break;
                    case '`reden_niet_clusteren_thesaurusnr`':
                        $stmt->bindValue($identifier, $this->reden_niet_clusteren_thesaurusnr, PDO::PARAM_INT);
                        break;
                    case '`reden_niet_clusteren_kode`':
                        $stmt->bindValue($identifier, $this->reden_niet_clusteren_kode, PDO::PARAM_INT);
                        break;
                    case '`ftk_1`':
                        $stmt->bindValue($identifier, $this->ftk_1, PDO::PARAM_INT);
                        break;
                    case '`ftk_2`':
                        $stmt->bindValue($identifier, $this->ftk_2, PDO::PARAM_INT);
                        break;
                    case '`ftk_3`':
                        $stmt->bindValue($identifier, $this->ftk_3, PDO::PARAM_INT);
                        break;
                    case '`ftk_4`':
                        $stmt->bindValue($identifier, $this->ftk_4, PDO::PARAM_INT);
                        break;
                    case '`ftk_5`':
                        $stmt->bindValue($identifier, $this->ftk_5, PDO::PARAM_INT);
                        break;
                    case '`informatoriumproductcode`':
                        $stmt->bindValue($identifier, $this->informatoriumproductcode, PDO::PARAM_INT);
                        break;
                    case '`kode_combinatiepreparaat`':
                        $stmt->bindValue($identifier, $this->kode_combinatiepreparaat, PDO::PARAM_INT);
                        break;
                    case '`kode_vergift`':
                        $stmt->bindValue($identifier, $this->kode_vergift, PDO::PARAM_STR);
                        break;
                    case '`kode_rijvaardigheid`':
                        $stmt->bindValue($identifier, $this->kode_rijvaardigheid, PDO::PARAM_STR);
                        break;
                    case '`kode_brandgevaarlijk`':
                        $stmt->bindValue($identifier, $this->kode_brandgevaarlijk, PDO::PARAM_STR);
                        break;
                    case '`gesteriliseerd_voor_geneesmiddelen`':
                        $stmt->bindValue($identifier, $this->gesteriliseerd_voor_geneesmiddelen, PDO::PARAM_STR);
                        break;
                    case '`hpkeenheid_thesaurusnummer`':
                        $stmt->bindValue($identifier, $this->hpkeenheid_thesaurusnummer, PDO::PARAM_INT);
                        break;
                    case '`hpkeenheid_kode`':
                        $stmt->bindValue($identifier, $this->hpkeenheid_kode, PDO::PARAM_INT);
                        break;
                    case '`oplosmiddel_hoeveelheid_1`':
                        $stmt->bindValue($identifier, $this->oplosmiddel_hoeveelheid_1, PDO::PARAM_STR);
                        break;
                    case '`oplosmiddel_aantal_1`':
                        $stmt->bindValue($identifier, $this->oplosmiddel_aantal_1, PDO::PARAM_INT);
                        break;
                    case '`oplosmiddel_hoeveelheid_2`':
                        $stmt->bindValue($identifier, $this->oplosmiddel_hoeveelheid_2, PDO::PARAM_STR);
                        break;
                    case '`oplosmiddel_aantal_2`':
                        $stmt->bindValue($identifier, $this->oplosmiddel_aantal_2, PDO::PARAM_INT);
                        break;
                    case '`farmaceutische_kwaliteit`':
                        $stmt->bindValue($identifier, $this->farmaceutische_kwaliteit, PDO::PARAM_STR);
                        break;
                    case '`halffabrikaat_thesaurusnummer`':
                        $stmt->bindValue($identifier, $this->halffabrikaat_thesaurusnummer, PDO::PARAM_INT);
                        break;
                    case '`halffabrikaat_code`':
                        $stmt->bindValue($identifier, $this->halffabrikaat_code, PDO::PARAM_INT);
                        break;
                    case '`deelbaarheid_aantal`':
                        $stmt->bindValue($identifier, $this->deelbaarheid_aantal, PDO::PARAM_INT);
                        break;
                    case '`emballagemateriaal_thesaurusnummer`':
                        $stmt->bindValue($identifier, $this->emballagemateriaal_thesaurusnummer, PDO::PARAM_INT);
                        break;
                    case '`emballagemateriaal_kode`':
                        $stmt->bindValue($identifier, $this->emballagemateriaal_kode, PDO::PARAM_INT);
                        break;
                    case '`emballagesluiting_thesaurusnummer`':
                        $stmt->bindValue($identifier, $this->emballagesluiting_thesaurusnummer, PDO::PARAM_INT);
                        break;
                    case '`emballagesluiting_kode`':
                        $stmt->bindValue($identifier, $this->emballagesluiting_kode, PDO::PARAM_INT);
                        break;
                    case '`emballagedoseerinr_thesaurusnr`':
                        $stmt->bindValue($identifier, $this->emballagedoseerinr_thesaurusnr, PDO::PARAM_INT);
                        break;
                    case '`emballagedoseerinrichting_kode`':
                        $stmt->bindValue($identifier, $this->emballagedoseerinrichting_kode, PDO::PARAM_INT);
                        break;
                    case '`hulpstoffen_identificerend`':
                        $stmt->bindValue($identifier, $this->hulpstoffen_identificerend, PDO::PARAM_STR);
                        break;
                    case '`kleur_thesaurusnummer`':
                        $stmt->bindValue($identifier, $this->kleur_thesaurusnummer, PDO::PARAM_INT);
                        break;
                    case '`kleur_kode`':
                        $stmt->bindValue($identifier, $this->kleur_kode, PDO::PARAM_INT);
                        break;
                    case '`smaak_thesaurusnummer`':
                        $stmt->bindValue($identifier, $this->smaak_thesaurusnummer, PDO::PARAM_INT);
                        break;
                    case '`smaak_kode`':
                        $stmt->bindValue($identifier, $this->smaak_kode, PDO::PARAM_INT);
                        break;
                    case '`bereidingsvoorschr_thesaurusnummer`':
                        $stmt->bindValue($identifier, $this->bereidingsvoorschr_thesaurusnummer, PDO::PARAM_INT);
                        break;
                    case '`bereidingsvoorschrift_kode`':
                        $stmt->bindValue($identifier, $this->bereidingsvoorschrift_kode, PDO::PARAM_INT);
                        break;
                    case '`fysische_eigenschap_thesaurusnummer`':
                        $stmt->bindValue($identifier, $this->fysische_eigenschap_thesaurusnummer, PDO::PARAM_INT);
                        break;
                    case '`fysische_eigenschap_kode`':
                        $stmt->bindValue($identifier, $this->fysische_eigenschap_kode, PDO::PARAM_INT);
                        break;
                    case '`grondstofvorm_thesaurusnummer`':
                        $stmt->bindValue($identifier, $this->grondstofvorm_thesaurusnummer, PDO::PARAM_INT);
                        break;
                    case '`grondstofvorm_kode`':
                        $stmt->bindValue($identifier, $this->grondstofvorm_kode, PDO::PARAM_INT);
                        break;
                    case '`los_verkrijgbaar`':
                        $stmt->bindValue($identifier, $this->los_verkrijgbaar, PDO::PARAM_STR);
                        break;
                    case '`bioequivalente_groep`':
                        $stmt->bindValue($identifier, $this->bioequivalente_groep, PDO::PARAM_INT);
                        break;
                    case '`kode_radioactieve_stof`':
                        $stmt->bindValue($identifier, $this->kode_radioactieve_stof, PDO::PARAM_STR);
                        break;
                    case '`soort_hulpmiddel`':
                        $stmt->bindValue($identifier, $this->soort_hulpmiddel, PDO::PARAM_INT);
                        break;
                    case '`rzv_thesaurus_120`':
                        $stmt->bindValue($identifier, $this->rzv_thesaurus_120, PDO::PARAM_INT);
                        break;
                    case '`rzvvoorwaarden_bijlage_2`':
                        $stmt->bindValue($identifier, $this->rzvvoorwaarden_bijlage_2, PDO::PARAM_INT);
                        break;
                    case '`tekstmodule`':
                        $stmt->bindValue($identifier, $this->tekstmodule, PDO::PARAM_INT);
                        break;
                    case '`tekst_verwijzing`':
                        $stmt->bindValue($identifier, $this->tekst_verwijzing, PDO::PARAM_INT);
                        break;
                    case '`hulpmiddel_volgens_awbz`':
                        $stmt->bindValue($identifier, $this->hulpmiddel_volgens_awbz, PDO::PARAM_STR);
                        break;
                    case '`eenheid_inkoophoeveelheid_thesnr`':
                        $stmt->bindValue($identifier, $this->eenheid_inkoophoeveelheid_thesnr, PDO::PARAM_INT);
                        break;
                    case '`eenheid_inkoophoeveelheid`':
                        $stmt->bindValue($identifier, $this->eenheid_inkoophoeveelheid, PDO::PARAM_INT);
                        break;
                    case '`basiseenheid_verpakking_thesnr`':
                        $stmt->bindValue($identifier, $this->basiseenheid_verpakking_thesnr, PDO::PARAM_INT);
                        break;
                    case '`basiseenheid_verpakking`':
                        $stmt->bindValue($identifier, $this->basiseenheid_verpakking, PDO::PARAM_INT);
                        break;
                    case '`richtlijn_gebruik_ondergrens`':
                        $stmt->bindValue($identifier, $this->richtlijn_gebruik_ondergrens, PDO::PARAM_STR);
                        break;
                    case '`richtlijn_gebruik_bovengrens`':
                        $stmt->bindValue($identifier, $this->richtlijn_gebruik_bovengrens, PDO::PARAM_STR);
                        break;
                    case '`thesaurus_rzv_verstrekking`':
                        $stmt->bindValue($identifier, $this->thesaurus_rzv_verstrekking, PDO::PARAM_INT);
                        break;
                    case '`rzvverstrekking`':
                        $stmt->bindValue($identifier, $this->rzvverstrekking, PDO::PARAM_INT);
                        break;
                    case '`thesaurus_rzv_rationaliteit`':
                        $stmt->bindValue($identifier, $this->thesaurus_rzv_rationaliteit, PDO::PARAM_INT);
                        break;
                    case '`beoordeling_rationaliteit`':
                        $stmt->bindValue($identifier, $this->beoordeling_rationaliteit, PDO::PARAM_INT);
                        break;
                    case '`thesaurus_rzv_beoordeling`':
                        $stmt->bindValue($identifier, $this->thesaurus_rzv_beoordeling, PDO::PARAM_INT);
                        break;
                    case '`achtergrond_rationaliteit`':
                        $stmt->bindValue($identifier, $this->achtergrond_rationaliteit, PDO::PARAM_INT);
                        break;
                    case '`thesaurus_rzv_hulpmiddelen`':
                        $stmt->bindValue($identifier, $this->thesaurus_rzv_hulpmiddelen, PDO::PARAM_INT);
                        break;
                    case '`hulpmiddelen_zorg`':
                        $stmt->bindValue($identifier, $this->hulpmiddelen_zorg, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aGsPrescriptieProduct !== null) {
                if (!$this->aGsPrescriptieProduct->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsPrescriptieProduct->getValidationFailures());
                }
            }

            if ($this->aGsNamen !== null) {
                if (!$this->aGsNamen->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsNamen->getValidationFailures());
                }
            }

            if ($this->aInkoophoeveelheidOmschrijving !== null) {
                if (!$this->aInkoophoeveelheidOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aInkoophoeveelheidOmschrijving->getValidationFailures());
                }
            }

            if ($this->aBasiseenheidOmschrijving !== null) {
                if (!$this->aBasiseenheidOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aBasiseenheidOmschrijving->getValidationFailures());
                }
            }

            if ($this->aEmballageMateriaalOmschrijving !== null) {
                if (!$this->aEmballageMateriaalOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmballageMateriaalOmschrijving->getValidationFailures());
                }
            }

            if ($this->aEmballageSluitingOmschrijving !== null) {
                if (!$this->aEmballageSluitingOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmballageSluitingOmschrijving->getValidationFailures());
                }
            }

            if ($this->aEmballageDoseerinrichtingOmschrijving !== null) {
                if (!$this->aEmballageDoseerinrichtingOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmballageDoseerinrichtingOmschrijving->getValidationFailures());
                }
            }

            if ($this->aKleurOmschrijving !== null) {
                if (!$this->aKleurOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aKleurOmschrijving->getValidationFailures());
                }
            }

            if ($this->aSmaakOmschrijving !== null) {
                if (!$this->aSmaakOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSmaakOmschrijving->getValidationFailures());
                }
            }

            if ($this->aBereidingsvoorschrijftOmschrijving !== null) {
                if (!$this->aBereidingsvoorschrijftOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aBereidingsvoorschrijftOmschrijving->getValidationFailures());
                }
            }

            if ($this->aProduktgroepOmschrijving !== null) {
                if (!$this->aProduktgroepOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProduktgroepOmschrijving->getValidationFailures());
                }
            }

            if ($this->aRzvVerstrekkingOmschrijving !== null) {
                if (!$this->aRzvVerstrekkingOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRzvVerstrekkingOmschrijving->getValidationFailures());
                }
            }

            if ($this->aRzvBijlage2Omschrijving !== null) {
                if (!$this->aRzvBijlage2Omschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRzvBijlage2Omschrijving->getValidationFailures());
                }
            }


            if (($retval = GsHandelsproductenPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collGsArtikelEigenschappens !== null) {
                    foreach ($this->collGsArtikelEigenschappens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsArtikelens !== null) {
                    foreach ($this->collGsArtikelens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsBijzondereKenmerkens !== null) {
                    foreach ($this->collGsBijzondereKenmerkens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsDeclaratietabelDureGeneesmiddelens !== null) {
                    foreach ($this->collGsDeclaratietabelDureGeneesmiddelens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsIngegevenSamenstellingens !== null) {
                    foreach ($this->collGsIngegevenSamenstellingens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = GsHandelsproductenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getBestandnummer();
                break;
            case 1:
                return $this->getMutatiekode();
                break;
            case 2:
                return $this->getHandelsproduktkode();
                break;
            case 3:
                return $this->getPrkcode();
                break;
            case 4:
                return $this->getMedischHulpmiddelkode();
                break;
            case 5:
                return $this->getHandelsproduktnaamnummer();
                break;
            case 6:
                return $this->getMerkstamnaam();
                break;
            case 7:
                return $this->getFirmastamnaam();
                break;
            case 8:
                return $this->getProduktgroepThesaurusnummer();
                break;
            case 9:
                return $this->getProduktgroepKode();
                break;
            case 10:
                return $this->getSoortelijkGewicht();
                break;
            case 11:
                return $this->getAantalDddsPerBasiseenhProdukt();
                break;
            case 12:
                return $this->getAantalDruppelsPerMl();
                break;
            case 13:
                return $this->getPifnummerThesaurusnummer();
                break;
            case 14:
                return $this->getPifnummer();
                break;
            case 15:
                return $this->getFabrikantProduktkodering();
                break;
            case 16:
                return $this->getRedenNietClusterenThesaurusnr();
                break;
            case 17:
                return $this->getRedenNietClusterenKode();
                break;
            case 18:
                return $this->getFtk1();
                break;
            case 19:
                return $this->getFtk2();
                break;
            case 20:
                return $this->getFtk3();
                break;
            case 21:
                return $this->getFtk4();
                break;
            case 22:
                return $this->getFtk5();
                break;
            case 23:
                return $this->getInformatoriumproductcode();
                break;
            case 24:
                return $this->getKodeCombinatiepreparaat();
                break;
            case 25:
                return $this->getKodeVergift();
                break;
            case 26:
                return $this->getKodeRijvaardigheid();
                break;
            case 27:
                return $this->getKodeBrandgevaarlijk();
                break;
            case 28:
                return $this->getGesteriliseerdVoorGeneesmiddelen();
                break;
            case 29:
                return $this->getHpkeenheidThesaurusnummer();
                break;
            case 30:
                return $this->getHpkeenheidKode();
                break;
            case 31:
                return $this->getOplosmiddelHoeveelheid1();
                break;
            case 32:
                return $this->getOplosmiddelAantal1();
                break;
            case 33:
                return $this->getOplosmiddelHoeveelheid2();
                break;
            case 34:
                return $this->getOplosmiddelAantal2();
                break;
            case 35:
                return $this->getFarmaceutischeKwaliteit();
                break;
            case 36:
                return $this->getHalffabrikaatThesaurusnummer();
                break;
            case 37:
                return $this->getHalffabrikaatCode();
                break;
            case 38:
                return $this->getDeelbaarheidAantal();
                break;
            case 39:
                return $this->getEmballagemateriaalThesaurusnummer();
                break;
            case 40:
                return $this->getEmballagemateriaalKode();
                break;
            case 41:
                return $this->getEmballagesluitingThesaurusnummer();
                break;
            case 42:
                return $this->getEmballagesluitingKode();
                break;
            case 43:
                return $this->getEmballagedoseerinrThesaurusnr();
                break;
            case 44:
                return $this->getEmballagedoseerinrichtingKode();
                break;
            case 45:
                return $this->getHulpstoffenIdentificerend();
                break;
            case 46:
                return $this->getKleurThesaurusnummer();
                break;
            case 47:
                return $this->getKleurKode();
                break;
            case 48:
                return $this->getSmaakThesaurusnummer();
                break;
            case 49:
                return $this->getSmaakKode();
                break;
            case 50:
                return $this->getBereidingsvoorschrThesaurusnummer();
                break;
            case 51:
                return $this->getBereidingsvoorschriftKode();
                break;
            case 52:
                return $this->getFysischeEigenschapThesaurusnummer();
                break;
            case 53:
                return $this->getFysischeEigenschapKode();
                break;
            case 54:
                return $this->getGrondstofvormThesaurusnummer();
                break;
            case 55:
                return $this->getGrondstofvormKode();
                break;
            case 56:
                return $this->getLosVerkrijgbaar();
                break;
            case 57:
                return $this->getBioequivalenteGroep();
                break;
            case 58:
                return $this->getKodeRadioactieveStof();
                break;
            case 59:
                return $this->getSoortHulpmiddel();
                break;
            case 60:
                return $this->getRzvThesaurus120();
                break;
            case 61:
                return $this->getRzvvoorwaardenBijlage2();
                break;
            case 62:
                return $this->getTekstmodule();
                break;
            case 63:
                return $this->getTekstVerwijzing();
                break;
            case 64:
                return $this->getHulpmiddelVolgensAwbz();
                break;
            case 65:
                return $this->getEenheidInkoophoeveelheidThesnr();
                break;
            case 66:
                return $this->getEenheidInkoophoeveelheid();
                break;
            case 67:
                return $this->getBasiseenheidVerpakkingThesnr();
                break;
            case 68:
                return $this->getBasiseenheidVerpakking();
                break;
            case 69:
                return $this->getRichtlijnGebruikOndergrens();
                break;
            case 70:
                return $this->getRichtlijnGebruikBovengrens();
                break;
            case 71:
                return $this->getThesaurusRzvVerstrekking();
                break;
            case 72:
                return $this->getRzvverstrekking();
                break;
            case 73:
                return $this->getThesaurusRzvRationaliteit();
                break;
            case 74:
                return $this->getBeoordelingRationaliteit();
                break;
            case 75:
                return $this->getThesaurusRzvBeoordeling();
                break;
            case 76:
                return $this->getAchtergrondRationaliteit();
                break;
            case 77:
                return $this->getThesaurusRzvHulpmiddelen();
                break;
            case 78:
                return $this->getHulpmiddelenZorg();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['GsHandelsproducten'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsHandelsproducten'][$this->getPrimaryKey()] = true;
        $keys = GsHandelsproductenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getHandelsproduktkode(),
            $keys[3] => $this->getPrkcode(),
            $keys[4] => $this->getMedischHulpmiddelkode(),
            $keys[5] => $this->getHandelsproduktnaamnummer(),
            $keys[6] => $this->getMerkstamnaam(),
            $keys[7] => $this->getFirmastamnaam(),
            $keys[8] => $this->getProduktgroepThesaurusnummer(),
            $keys[9] => $this->getProduktgroepKode(),
            $keys[10] => $this->getSoortelijkGewicht(),
            $keys[11] => $this->getAantalDddsPerBasiseenhProdukt(),
            $keys[12] => $this->getAantalDruppelsPerMl(),
            $keys[13] => $this->getPifnummerThesaurusnummer(),
            $keys[14] => $this->getPifnummer(),
            $keys[15] => $this->getFabrikantProduktkodering(),
            $keys[16] => $this->getRedenNietClusterenThesaurusnr(),
            $keys[17] => $this->getRedenNietClusterenKode(),
            $keys[18] => $this->getFtk1(),
            $keys[19] => $this->getFtk2(),
            $keys[20] => $this->getFtk3(),
            $keys[21] => $this->getFtk4(),
            $keys[22] => $this->getFtk5(),
            $keys[23] => $this->getInformatoriumproductcode(),
            $keys[24] => $this->getKodeCombinatiepreparaat(),
            $keys[25] => $this->getKodeVergift(),
            $keys[26] => $this->getKodeRijvaardigheid(),
            $keys[27] => $this->getKodeBrandgevaarlijk(),
            $keys[28] => $this->getGesteriliseerdVoorGeneesmiddelen(),
            $keys[29] => $this->getHpkeenheidThesaurusnummer(),
            $keys[30] => $this->getHpkeenheidKode(),
            $keys[31] => $this->getOplosmiddelHoeveelheid1(),
            $keys[32] => $this->getOplosmiddelAantal1(),
            $keys[33] => $this->getOplosmiddelHoeveelheid2(),
            $keys[34] => $this->getOplosmiddelAantal2(),
            $keys[35] => $this->getFarmaceutischeKwaliteit(),
            $keys[36] => $this->getHalffabrikaatThesaurusnummer(),
            $keys[37] => $this->getHalffabrikaatCode(),
            $keys[38] => $this->getDeelbaarheidAantal(),
            $keys[39] => $this->getEmballagemateriaalThesaurusnummer(),
            $keys[40] => $this->getEmballagemateriaalKode(),
            $keys[41] => $this->getEmballagesluitingThesaurusnummer(),
            $keys[42] => $this->getEmballagesluitingKode(),
            $keys[43] => $this->getEmballagedoseerinrThesaurusnr(),
            $keys[44] => $this->getEmballagedoseerinrichtingKode(),
            $keys[45] => $this->getHulpstoffenIdentificerend(),
            $keys[46] => $this->getKleurThesaurusnummer(),
            $keys[47] => $this->getKleurKode(),
            $keys[48] => $this->getSmaakThesaurusnummer(),
            $keys[49] => $this->getSmaakKode(),
            $keys[50] => $this->getBereidingsvoorschrThesaurusnummer(),
            $keys[51] => $this->getBereidingsvoorschriftKode(),
            $keys[52] => $this->getFysischeEigenschapThesaurusnummer(),
            $keys[53] => $this->getFysischeEigenschapKode(),
            $keys[54] => $this->getGrondstofvormThesaurusnummer(),
            $keys[55] => $this->getGrondstofvormKode(),
            $keys[56] => $this->getLosVerkrijgbaar(),
            $keys[57] => $this->getBioequivalenteGroep(),
            $keys[58] => $this->getKodeRadioactieveStof(),
            $keys[59] => $this->getSoortHulpmiddel(),
            $keys[60] => $this->getRzvThesaurus120(),
            $keys[61] => $this->getRzvvoorwaardenBijlage2(),
            $keys[62] => $this->getTekstmodule(),
            $keys[63] => $this->getTekstVerwijzing(),
            $keys[64] => $this->getHulpmiddelVolgensAwbz(),
            $keys[65] => $this->getEenheidInkoophoeveelheidThesnr(),
            $keys[66] => $this->getEenheidInkoophoeveelheid(),
            $keys[67] => $this->getBasiseenheidVerpakkingThesnr(),
            $keys[68] => $this->getBasiseenheidVerpakking(),
            $keys[69] => $this->getRichtlijnGebruikOndergrens(),
            $keys[70] => $this->getRichtlijnGebruikBovengrens(),
            $keys[71] => $this->getThesaurusRzvVerstrekking(),
            $keys[72] => $this->getRzvverstrekking(),
            $keys[73] => $this->getThesaurusRzvRationaliteit(),
            $keys[74] => $this->getBeoordelingRationaliteit(),
            $keys[75] => $this->getThesaurusRzvBeoordeling(),
            $keys[76] => $this->getAchtergrondRationaliteit(),
            $keys[77] => $this->getThesaurusRzvHulpmiddelen(),
            $keys[78] => $this->getHulpmiddelenZorg(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aGsPrescriptieProduct) {
                $result['GsPrescriptieProduct'] = $this->aGsPrescriptieProduct->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aGsNamen) {
                $result['GsNamen'] = $this->aGsNamen->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aInkoophoeveelheidOmschrijving) {
                $result['InkoophoeveelheidOmschrijving'] = $this->aInkoophoeveelheidOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aBasiseenheidOmschrijving) {
                $result['BasiseenheidOmschrijving'] = $this->aBasiseenheidOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmballageMateriaalOmschrijving) {
                $result['EmballageMateriaalOmschrijving'] = $this->aEmballageMateriaalOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmballageSluitingOmschrijving) {
                $result['EmballageSluitingOmschrijving'] = $this->aEmballageSluitingOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmballageDoseerinrichtingOmschrijving) {
                $result['EmballageDoseerinrichtingOmschrijving'] = $this->aEmballageDoseerinrichtingOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aKleurOmschrijving) {
                $result['KleurOmschrijving'] = $this->aKleurOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSmaakOmschrijving) {
                $result['SmaakOmschrijving'] = $this->aSmaakOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aBereidingsvoorschrijftOmschrijving) {
                $result['BereidingsvoorschrijftOmschrijving'] = $this->aBereidingsvoorschrijftOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProduktgroepOmschrijving) {
                $result['ProduktgroepOmschrijving'] = $this->aProduktgroepOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRzvVerstrekkingOmschrijving) {
                $result['RzvVerstrekkingOmschrijving'] = $this->aRzvVerstrekkingOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRzvBijlage2Omschrijving) {
                $result['RzvBijlage2Omschrijving'] = $this->aRzvBijlage2Omschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collGsArtikelEigenschappens) {
                $result['GsArtikelEigenschappens'] = $this->collGsArtikelEigenschappens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsArtikelens) {
                $result['GsArtikelens'] = $this->collGsArtikelens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsBijzondereKenmerkens) {
                $result['GsBijzondereKenmerkens'] = $this->collGsBijzondereKenmerkens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsDeclaratietabelDureGeneesmiddelens) {
                $result['GsDeclaratietabelDureGeneesmiddelens'] = $this->collGsDeclaratietabelDureGeneesmiddelens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsIngegevenSamenstellingens) {
                $result['GsIngegevenSamenstellingens'] = $this->collGsIngegevenSamenstellingens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = GsHandelsproductenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setBestandnummer($value);
                break;
            case 1:
                $this->setMutatiekode($value);
                break;
            case 2:
                $this->setHandelsproduktkode($value);
                break;
            case 3:
                $this->setPrkcode($value);
                break;
            case 4:
                $this->setMedischHulpmiddelkode($value);
                break;
            case 5:
                $this->setHandelsproduktnaamnummer($value);
                break;
            case 6:
                $this->setMerkstamnaam($value);
                break;
            case 7:
                $this->setFirmastamnaam($value);
                break;
            case 8:
                $this->setProduktgroepThesaurusnummer($value);
                break;
            case 9:
                $this->setProduktgroepKode($value);
                break;
            case 10:
                $this->setSoortelijkGewicht($value);
                break;
            case 11:
                $this->setAantalDddsPerBasiseenhProdukt($value);
                break;
            case 12:
                $this->setAantalDruppelsPerMl($value);
                break;
            case 13:
                $this->setPifnummerThesaurusnummer($value);
                break;
            case 14:
                $this->setPifnummer($value);
                break;
            case 15:
                $this->setFabrikantProduktkodering($value);
                break;
            case 16:
                $this->setRedenNietClusterenThesaurusnr($value);
                break;
            case 17:
                $this->setRedenNietClusterenKode($value);
                break;
            case 18:
                $this->setFtk1($value);
                break;
            case 19:
                $this->setFtk2($value);
                break;
            case 20:
                $this->setFtk3($value);
                break;
            case 21:
                $this->setFtk4($value);
                break;
            case 22:
                $this->setFtk5($value);
                break;
            case 23:
                $this->setInformatoriumproductcode($value);
                break;
            case 24:
                $this->setKodeCombinatiepreparaat($value);
                break;
            case 25:
                $this->setKodeVergift($value);
                break;
            case 26:
                $this->setKodeRijvaardigheid($value);
                break;
            case 27:
                $this->setKodeBrandgevaarlijk($value);
                break;
            case 28:
                $this->setGesteriliseerdVoorGeneesmiddelen($value);
                break;
            case 29:
                $this->setHpkeenheidThesaurusnummer($value);
                break;
            case 30:
                $this->setHpkeenheidKode($value);
                break;
            case 31:
                $this->setOplosmiddelHoeveelheid1($value);
                break;
            case 32:
                $this->setOplosmiddelAantal1($value);
                break;
            case 33:
                $this->setOplosmiddelHoeveelheid2($value);
                break;
            case 34:
                $this->setOplosmiddelAantal2($value);
                break;
            case 35:
                $this->setFarmaceutischeKwaliteit($value);
                break;
            case 36:
                $this->setHalffabrikaatThesaurusnummer($value);
                break;
            case 37:
                $this->setHalffabrikaatCode($value);
                break;
            case 38:
                $this->setDeelbaarheidAantal($value);
                break;
            case 39:
                $this->setEmballagemateriaalThesaurusnummer($value);
                break;
            case 40:
                $this->setEmballagemateriaalKode($value);
                break;
            case 41:
                $this->setEmballagesluitingThesaurusnummer($value);
                break;
            case 42:
                $this->setEmballagesluitingKode($value);
                break;
            case 43:
                $this->setEmballagedoseerinrThesaurusnr($value);
                break;
            case 44:
                $this->setEmballagedoseerinrichtingKode($value);
                break;
            case 45:
                $this->setHulpstoffenIdentificerend($value);
                break;
            case 46:
                $this->setKleurThesaurusnummer($value);
                break;
            case 47:
                $this->setKleurKode($value);
                break;
            case 48:
                $this->setSmaakThesaurusnummer($value);
                break;
            case 49:
                $this->setSmaakKode($value);
                break;
            case 50:
                $this->setBereidingsvoorschrThesaurusnummer($value);
                break;
            case 51:
                $this->setBereidingsvoorschriftKode($value);
                break;
            case 52:
                $this->setFysischeEigenschapThesaurusnummer($value);
                break;
            case 53:
                $this->setFysischeEigenschapKode($value);
                break;
            case 54:
                $this->setGrondstofvormThesaurusnummer($value);
                break;
            case 55:
                $this->setGrondstofvormKode($value);
                break;
            case 56:
                $this->setLosVerkrijgbaar($value);
                break;
            case 57:
                $this->setBioequivalenteGroep($value);
                break;
            case 58:
                $this->setKodeRadioactieveStof($value);
                break;
            case 59:
                $this->setSoortHulpmiddel($value);
                break;
            case 60:
                $this->setRzvThesaurus120($value);
                break;
            case 61:
                $this->setRzvvoorwaardenBijlage2($value);
                break;
            case 62:
                $this->setTekstmodule($value);
                break;
            case 63:
                $this->setTekstVerwijzing($value);
                break;
            case 64:
                $this->setHulpmiddelVolgensAwbz($value);
                break;
            case 65:
                $this->setEenheidInkoophoeveelheidThesnr($value);
                break;
            case 66:
                $this->setEenheidInkoophoeveelheid($value);
                break;
            case 67:
                $this->setBasiseenheidVerpakkingThesnr($value);
                break;
            case 68:
                $this->setBasiseenheidVerpakking($value);
                break;
            case 69:
                $this->setRichtlijnGebruikOndergrens($value);
                break;
            case 70:
                $this->setRichtlijnGebruikBovengrens($value);
                break;
            case 71:
                $this->setThesaurusRzvVerstrekking($value);
                break;
            case 72:
                $this->setRzvverstrekking($value);
                break;
            case 73:
                $this->setThesaurusRzvRationaliteit($value);
                break;
            case 74:
                $this->setBeoordelingRationaliteit($value);
                break;
            case 75:
                $this->setThesaurusRzvBeoordeling($value);
                break;
            case 76:
                $this->setAchtergrondRationaliteit($value);
                break;
            case 77:
                $this->setThesaurusRzvHulpmiddelen($value);
                break;
            case 78:
                $this->setHulpmiddelenZorg($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = GsHandelsproductenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setHandelsproduktkode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPrkcode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMedischHulpmiddelkode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setHandelsproduktnaamnummer($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMerkstamnaam($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setFirmastamnaam($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setProduktgroepThesaurusnummer($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setProduktgroepKode($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSoortelijkGewicht($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAantalDddsPerBasiseenhProdukt($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAantalDruppelsPerMl($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPifnummerThesaurusnummer($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setPifnummer($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setFabrikantProduktkodering($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setRedenNietClusterenThesaurusnr($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setRedenNietClusterenKode($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setFtk1($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setFtk2($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setFtk3($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setFtk4($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setFtk5($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setInformatoriumproductcode($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setKodeCombinatiepreparaat($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setKodeVergift($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setKodeRijvaardigheid($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setKodeBrandgevaarlijk($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setGesteriliseerdVoorGeneesmiddelen($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setHpkeenheidThesaurusnummer($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setHpkeenheidKode($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setOplosmiddelHoeveelheid1($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setOplosmiddelAantal1($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setOplosmiddelHoeveelheid2($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setOplosmiddelAantal2($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setFarmaceutischeKwaliteit($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setHalffabrikaatThesaurusnummer($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setHalffabrikaatCode($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setDeelbaarheidAantal($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setEmballagemateriaalThesaurusnummer($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setEmballagemateriaalKode($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setEmballagesluitingThesaurusnummer($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setEmballagesluitingKode($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setEmballagedoseerinrThesaurusnr($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setEmballagedoseerinrichtingKode($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setHulpstoffenIdentificerend($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setKleurThesaurusnummer($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setKleurKode($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setSmaakThesaurusnummer($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setSmaakKode($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setBereidingsvoorschrThesaurusnummer($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setBereidingsvoorschriftKode($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setFysischeEigenschapThesaurusnummer($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setFysischeEigenschapKode($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setGrondstofvormThesaurusnummer($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setGrondstofvormKode($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setLosVerkrijgbaar($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setBioequivalenteGroep($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setKodeRadioactieveStof($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setSoortHulpmiddel($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setRzvThesaurus120($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setRzvvoorwaardenBijlage2($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setTekstmodule($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setTekstVerwijzing($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setHulpmiddelVolgensAwbz($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setEenheidInkoophoeveelheidThesnr($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setEenheidInkoophoeveelheid($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setBasiseenheidVerpakkingThesnr($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setBasiseenheidVerpakking($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setRichtlijnGebruikOndergrens($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setRichtlijnGebruikBovengrens($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setThesaurusRzvVerstrekking($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setRzvverstrekking($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setThesaurusRzvRationaliteit($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setBeoordelingRationaliteit($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setThesaurusRzvBeoordeling($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setAchtergrondRationaliteit($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setThesaurusRzvHulpmiddelen($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setHulpmiddelenZorg($arr[$keys[78]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsHandelsproductenPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsHandelsproductenPeer::BESTANDNUMMER)) $criteria->add(GsHandelsproductenPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsHandelsproductenPeer::MUTATIEKODE)) $criteria->add(GsHandelsproductenPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsHandelsproductenPeer::HANDELSPRODUKTKODE)) $criteria->add(GsHandelsproductenPeer::HANDELSPRODUKTKODE, $this->handelsproduktkode);
        if ($this->isColumnModified(GsHandelsproductenPeer::PRKCODE)) $criteria->add(GsHandelsproductenPeer::PRKCODE, $this->prkcode);
        if ($this->isColumnModified(GsHandelsproductenPeer::MEDISCH_HULPMIDDELKODE)) $criteria->add(GsHandelsproductenPeer::MEDISCH_HULPMIDDELKODE, $this->medisch_hulpmiddelkode);
        if ($this->isColumnModified(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER)) $criteria->add(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, $this->handelsproduktnaamnummer);
        if ($this->isColumnModified(GsHandelsproductenPeer::MERKSTAMNAAM)) $criteria->add(GsHandelsproductenPeer::MERKSTAMNAAM, $this->merkstamnaam);
        if ($this->isColumnModified(GsHandelsproductenPeer::FIRMASTAMNAAM)) $criteria->add(GsHandelsproductenPeer::FIRMASTAMNAAM, $this->firmastamnaam);
        if ($this->isColumnModified(GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER)) $criteria->add(GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER, $this->produktgroep_thesaurusnummer);
        if ($this->isColumnModified(GsHandelsproductenPeer::PRODUKTGROEP_KODE)) $criteria->add(GsHandelsproductenPeer::PRODUKTGROEP_KODE, $this->produktgroep_kode);
        if ($this->isColumnModified(GsHandelsproductenPeer::SOORTELIJK_GEWICHT)) $criteria->add(GsHandelsproductenPeer::SOORTELIJK_GEWICHT, $this->soortelijk_gewicht);
        if ($this->isColumnModified(GsHandelsproductenPeer::AANTAL_DDDS_PER_BASISEENH_PRODUKT)) $criteria->add(GsHandelsproductenPeer::AANTAL_DDDS_PER_BASISEENH_PRODUKT, $this->aantal_ddds_per_basiseenh_produkt);
        if ($this->isColumnModified(GsHandelsproductenPeer::AANTAL_DRUPPELS_PER_ML)) $criteria->add(GsHandelsproductenPeer::AANTAL_DRUPPELS_PER_ML, $this->aantal_druppels_per_ml);
        if ($this->isColumnModified(GsHandelsproductenPeer::PIFNUMMER_THESAURUSNUMMER)) $criteria->add(GsHandelsproductenPeer::PIFNUMMER_THESAURUSNUMMER, $this->pifnummer_thesaurusnummer);
        if ($this->isColumnModified(GsHandelsproductenPeer::PIFNUMMER)) $criteria->add(GsHandelsproductenPeer::PIFNUMMER, $this->pifnummer);
        if ($this->isColumnModified(GsHandelsproductenPeer::FABRIKANT_PRODUKTKODERING)) $criteria->add(GsHandelsproductenPeer::FABRIKANT_PRODUKTKODERING, $this->fabrikant_produktkodering);
        if ($this->isColumnModified(GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_THESAURUSNR)) $criteria->add(GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_THESAURUSNR, $this->reden_niet_clusteren_thesaurusnr);
        if ($this->isColumnModified(GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_KODE)) $criteria->add(GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_KODE, $this->reden_niet_clusteren_kode);
        if ($this->isColumnModified(GsHandelsproductenPeer::FTK_1)) $criteria->add(GsHandelsproductenPeer::FTK_1, $this->ftk_1);
        if ($this->isColumnModified(GsHandelsproductenPeer::FTK_2)) $criteria->add(GsHandelsproductenPeer::FTK_2, $this->ftk_2);
        if ($this->isColumnModified(GsHandelsproductenPeer::FTK_3)) $criteria->add(GsHandelsproductenPeer::FTK_3, $this->ftk_3);
        if ($this->isColumnModified(GsHandelsproductenPeer::FTK_4)) $criteria->add(GsHandelsproductenPeer::FTK_4, $this->ftk_4);
        if ($this->isColumnModified(GsHandelsproductenPeer::FTK_5)) $criteria->add(GsHandelsproductenPeer::FTK_5, $this->ftk_5);
        if ($this->isColumnModified(GsHandelsproductenPeer::INFORMATORIUMPRODUCTCODE)) $criteria->add(GsHandelsproductenPeer::INFORMATORIUMPRODUCTCODE, $this->informatoriumproductcode);
        if ($this->isColumnModified(GsHandelsproductenPeer::KODE_COMBINATIEPREPARAAT)) $criteria->add(GsHandelsproductenPeer::KODE_COMBINATIEPREPARAAT, $this->kode_combinatiepreparaat);
        if ($this->isColumnModified(GsHandelsproductenPeer::KODE_VERGIFT)) $criteria->add(GsHandelsproductenPeer::KODE_VERGIFT, $this->kode_vergift);
        if ($this->isColumnModified(GsHandelsproductenPeer::KODE_RIJVAARDIGHEID)) $criteria->add(GsHandelsproductenPeer::KODE_RIJVAARDIGHEID, $this->kode_rijvaardigheid);
        if ($this->isColumnModified(GsHandelsproductenPeer::KODE_BRANDGEVAARLIJK)) $criteria->add(GsHandelsproductenPeer::KODE_BRANDGEVAARLIJK, $this->kode_brandgevaarlijk);
        if ($this->isColumnModified(GsHandelsproductenPeer::GESTERILISEERD_VOOR_GENEESMIDDELEN)) $criteria->add(GsHandelsproductenPeer::GESTERILISEERD_VOOR_GENEESMIDDELEN, $this->gesteriliseerd_voor_geneesmiddelen);
        if ($this->isColumnModified(GsHandelsproductenPeer::HPKEENHEID_THESAURUSNUMMER)) $criteria->add(GsHandelsproductenPeer::HPKEENHEID_THESAURUSNUMMER, $this->hpkeenheid_thesaurusnummer);
        if ($this->isColumnModified(GsHandelsproductenPeer::HPKEENHEID_KODE)) $criteria->add(GsHandelsproductenPeer::HPKEENHEID_KODE, $this->hpkeenheid_kode);
        if ($this->isColumnModified(GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_1)) $criteria->add(GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_1, $this->oplosmiddel_hoeveelheid_1);
        if ($this->isColumnModified(GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_1)) $criteria->add(GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_1, $this->oplosmiddel_aantal_1);
        if ($this->isColumnModified(GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_2)) $criteria->add(GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_2, $this->oplosmiddel_hoeveelheid_2);
        if ($this->isColumnModified(GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_2)) $criteria->add(GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_2, $this->oplosmiddel_aantal_2);
        if ($this->isColumnModified(GsHandelsproductenPeer::FARMACEUTISCHE_KWALITEIT)) $criteria->add(GsHandelsproductenPeer::FARMACEUTISCHE_KWALITEIT, $this->farmaceutische_kwaliteit);
        if ($this->isColumnModified(GsHandelsproductenPeer::HALFFABRIKAAT_THESAURUSNUMMER)) $criteria->add(GsHandelsproductenPeer::HALFFABRIKAAT_THESAURUSNUMMER, $this->halffabrikaat_thesaurusnummer);
        if ($this->isColumnModified(GsHandelsproductenPeer::HALFFABRIKAAT_CODE)) $criteria->add(GsHandelsproductenPeer::HALFFABRIKAAT_CODE, $this->halffabrikaat_code);
        if ($this->isColumnModified(GsHandelsproductenPeer::DEELBAARHEID_AANTAL)) $criteria->add(GsHandelsproductenPeer::DEELBAARHEID_AANTAL, $this->deelbaarheid_aantal);
        if ($this->isColumnModified(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER)) $criteria->add(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER, $this->emballagemateriaal_thesaurusnummer);
        if ($this->isColumnModified(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE)) $criteria->add(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE, $this->emballagemateriaal_kode);
        if ($this->isColumnModified(GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER)) $criteria->add(GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER, $this->emballagesluiting_thesaurusnummer);
        if ($this->isColumnModified(GsHandelsproductenPeer::EMBALLAGESLUITING_KODE)) $criteria->add(GsHandelsproductenPeer::EMBALLAGESLUITING_KODE, $this->emballagesluiting_kode);
        if ($this->isColumnModified(GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR)) $criteria->add(GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR, $this->emballagedoseerinr_thesaurusnr);
        if ($this->isColumnModified(GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE)) $criteria->add(GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE, $this->emballagedoseerinrichting_kode);
        if ($this->isColumnModified(GsHandelsproductenPeer::HULPSTOFFEN_IDENTIFICEREND)) $criteria->add(GsHandelsproductenPeer::HULPSTOFFEN_IDENTIFICEREND, $this->hulpstoffen_identificerend);
        if ($this->isColumnModified(GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER)) $criteria->add(GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER, $this->kleur_thesaurusnummer);
        if ($this->isColumnModified(GsHandelsproductenPeer::KLEUR_KODE)) $criteria->add(GsHandelsproductenPeer::KLEUR_KODE, $this->kleur_kode);
        if ($this->isColumnModified(GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER)) $criteria->add(GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER, $this->smaak_thesaurusnummer);
        if ($this->isColumnModified(GsHandelsproductenPeer::SMAAK_KODE)) $criteria->add(GsHandelsproductenPeer::SMAAK_KODE, $this->smaak_kode);
        if ($this->isColumnModified(GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER)) $criteria->add(GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER, $this->bereidingsvoorschr_thesaurusnummer);
        if ($this->isColumnModified(GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE)) $criteria->add(GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE, $this->bereidingsvoorschrift_kode);
        if ($this->isColumnModified(GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_THESAURUSNUMMER)) $criteria->add(GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_THESAURUSNUMMER, $this->fysische_eigenschap_thesaurusnummer);
        if ($this->isColumnModified(GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_KODE)) $criteria->add(GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_KODE, $this->fysische_eigenschap_kode);
        if ($this->isColumnModified(GsHandelsproductenPeer::GRONDSTOFVORM_THESAURUSNUMMER)) $criteria->add(GsHandelsproductenPeer::GRONDSTOFVORM_THESAURUSNUMMER, $this->grondstofvorm_thesaurusnummer);
        if ($this->isColumnModified(GsHandelsproductenPeer::GRONDSTOFVORM_KODE)) $criteria->add(GsHandelsproductenPeer::GRONDSTOFVORM_KODE, $this->grondstofvorm_kode);
        if ($this->isColumnModified(GsHandelsproductenPeer::LOS_VERKRIJGBAAR)) $criteria->add(GsHandelsproductenPeer::LOS_VERKRIJGBAAR, $this->los_verkrijgbaar);
        if ($this->isColumnModified(GsHandelsproductenPeer::BIOEQUIVALENTE_GROEP)) $criteria->add(GsHandelsproductenPeer::BIOEQUIVALENTE_GROEP, $this->bioequivalente_groep);
        if ($this->isColumnModified(GsHandelsproductenPeer::KODE_RADIOACTIEVE_STOF)) $criteria->add(GsHandelsproductenPeer::KODE_RADIOACTIEVE_STOF, $this->kode_radioactieve_stof);
        if ($this->isColumnModified(GsHandelsproductenPeer::SOORT_HULPMIDDEL)) $criteria->add(GsHandelsproductenPeer::SOORT_HULPMIDDEL, $this->soort_hulpmiddel);
        if ($this->isColumnModified(GsHandelsproductenPeer::RZV_THESAURUS_120)) $criteria->add(GsHandelsproductenPeer::RZV_THESAURUS_120, $this->rzv_thesaurus_120);
        if ($this->isColumnModified(GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2)) $criteria->add(GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2, $this->rzvvoorwaarden_bijlage_2);
        if ($this->isColumnModified(GsHandelsproductenPeer::TEKSTMODULE)) $criteria->add(GsHandelsproductenPeer::TEKSTMODULE, $this->tekstmodule);
        if ($this->isColumnModified(GsHandelsproductenPeer::TEKST_VERWIJZING)) $criteria->add(GsHandelsproductenPeer::TEKST_VERWIJZING, $this->tekst_verwijzing);
        if ($this->isColumnModified(GsHandelsproductenPeer::HULPMIDDEL_VOLGENS_AWBZ)) $criteria->add(GsHandelsproductenPeer::HULPMIDDEL_VOLGENS_AWBZ, $this->hulpmiddel_volgens_awbz);
        if ($this->isColumnModified(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR)) $criteria->add(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR, $this->eenheid_inkoophoeveelheid_thesnr);
        if ($this->isColumnModified(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID)) $criteria->add(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID, $this->eenheid_inkoophoeveelheid);
        if ($this->isColumnModified(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR)) $criteria->add(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR, $this->basiseenheid_verpakking_thesnr);
        if ($this->isColumnModified(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING)) $criteria->add(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING, $this->basiseenheid_verpakking);
        if ($this->isColumnModified(GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_ONDERGRENS)) $criteria->add(GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_ONDERGRENS, $this->richtlijn_gebruik_ondergrens);
        if ($this->isColumnModified(GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_BOVENGRENS)) $criteria->add(GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_BOVENGRENS, $this->richtlijn_gebruik_bovengrens);
        if ($this->isColumnModified(GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING)) $criteria->add(GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING, $this->thesaurus_rzv_verstrekking);
        if ($this->isColumnModified(GsHandelsproductenPeer::RZVVERSTREKKING)) $criteria->add(GsHandelsproductenPeer::RZVVERSTREKKING, $this->rzvverstrekking);
        if ($this->isColumnModified(GsHandelsproductenPeer::THESAURUS_RZV_RATIONALITEIT)) $criteria->add(GsHandelsproductenPeer::THESAURUS_RZV_RATIONALITEIT, $this->thesaurus_rzv_rationaliteit);
        if ($this->isColumnModified(GsHandelsproductenPeer::BEOORDELING_RATIONALITEIT)) $criteria->add(GsHandelsproductenPeer::BEOORDELING_RATIONALITEIT, $this->beoordeling_rationaliteit);
        if ($this->isColumnModified(GsHandelsproductenPeer::THESAURUS_RZV_BEOORDELING)) $criteria->add(GsHandelsproductenPeer::THESAURUS_RZV_BEOORDELING, $this->thesaurus_rzv_beoordeling);
        if ($this->isColumnModified(GsHandelsproductenPeer::ACHTERGROND_RATIONALITEIT)) $criteria->add(GsHandelsproductenPeer::ACHTERGROND_RATIONALITEIT, $this->achtergrond_rationaliteit);
        if ($this->isColumnModified(GsHandelsproductenPeer::THESAURUS_RZV_HULPMIDDELEN)) $criteria->add(GsHandelsproductenPeer::THESAURUS_RZV_HULPMIDDELEN, $this->thesaurus_rzv_hulpmiddelen);
        if ($this->isColumnModified(GsHandelsproductenPeer::HULPMIDDELEN_ZORG)) $criteria->add(GsHandelsproductenPeer::HULPMIDDELEN_ZORG, $this->hulpmiddelen_zorg);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(GsHandelsproductenPeer::DATABASE_NAME);
        $criteria->add(GsHandelsproductenPeer::HANDELSPRODUKTKODE, $this->handelsproduktkode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getHandelsproduktkode();
    }

    /**
     * Generic method to set the primary key (handelsproduktkode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setHandelsproduktkode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getHandelsproduktkode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsHandelsproducten (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setPrkcode($this->getPrkcode());
        $copyObj->setMedischHulpmiddelkode($this->getMedischHulpmiddelkode());
        $copyObj->setHandelsproduktnaamnummer($this->getHandelsproduktnaamnummer());
        $copyObj->setMerkstamnaam($this->getMerkstamnaam());
        $copyObj->setFirmastamnaam($this->getFirmastamnaam());
        $copyObj->setProduktgroepThesaurusnummer($this->getProduktgroepThesaurusnummer());
        $copyObj->setProduktgroepKode($this->getProduktgroepKode());
        $copyObj->setSoortelijkGewicht($this->getSoortelijkGewicht());
        $copyObj->setAantalDddsPerBasiseenhProdukt($this->getAantalDddsPerBasiseenhProdukt());
        $copyObj->setAantalDruppelsPerMl($this->getAantalDruppelsPerMl());
        $copyObj->setPifnummerThesaurusnummer($this->getPifnummerThesaurusnummer());
        $copyObj->setPifnummer($this->getPifnummer());
        $copyObj->setFabrikantProduktkodering($this->getFabrikantProduktkodering());
        $copyObj->setRedenNietClusterenThesaurusnr($this->getRedenNietClusterenThesaurusnr());
        $copyObj->setRedenNietClusterenKode($this->getRedenNietClusterenKode());
        $copyObj->setFtk1($this->getFtk1());
        $copyObj->setFtk2($this->getFtk2());
        $copyObj->setFtk3($this->getFtk3());
        $copyObj->setFtk4($this->getFtk4());
        $copyObj->setFtk5($this->getFtk5());
        $copyObj->setInformatoriumproductcode($this->getInformatoriumproductcode());
        $copyObj->setKodeCombinatiepreparaat($this->getKodeCombinatiepreparaat());
        $copyObj->setKodeVergift($this->getKodeVergift());
        $copyObj->setKodeRijvaardigheid($this->getKodeRijvaardigheid());
        $copyObj->setKodeBrandgevaarlijk($this->getKodeBrandgevaarlijk());
        $copyObj->setGesteriliseerdVoorGeneesmiddelen($this->getGesteriliseerdVoorGeneesmiddelen());
        $copyObj->setHpkeenheidThesaurusnummer($this->getHpkeenheidThesaurusnummer());
        $copyObj->setHpkeenheidKode($this->getHpkeenheidKode());
        $copyObj->setOplosmiddelHoeveelheid1($this->getOplosmiddelHoeveelheid1());
        $copyObj->setOplosmiddelAantal1($this->getOplosmiddelAantal1());
        $copyObj->setOplosmiddelHoeveelheid2($this->getOplosmiddelHoeveelheid2());
        $copyObj->setOplosmiddelAantal2($this->getOplosmiddelAantal2());
        $copyObj->setFarmaceutischeKwaliteit($this->getFarmaceutischeKwaliteit());
        $copyObj->setHalffabrikaatThesaurusnummer($this->getHalffabrikaatThesaurusnummer());
        $copyObj->setHalffabrikaatCode($this->getHalffabrikaatCode());
        $copyObj->setDeelbaarheidAantal($this->getDeelbaarheidAantal());
        $copyObj->setEmballagemateriaalThesaurusnummer($this->getEmballagemateriaalThesaurusnummer());
        $copyObj->setEmballagemateriaalKode($this->getEmballagemateriaalKode());
        $copyObj->setEmballagesluitingThesaurusnummer($this->getEmballagesluitingThesaurusnummer());
        $copyObj->setEmballagesluitingKode($this->getEmballagesluitingKode());
        $copyObj->setEmballagedoseerinrThesaurusnr($this->getEmballagedoseerinrThesaurusnr());
        $copyObj->setEmballagedoseerinrichtingKode($this->getEmballagedoseerinrichtingKode());
        $copyObj->setHulpstoffenIdentificerend($this->getHulpstoffenIdentificerend());
        $copyObj->setKleurThesaurusnummer($this->getKleurThesaurusnummer());
        $copyObj->setKleurKode($this->getKleurKode());
        $copyObj->setSmaakThesaurusnummer($this->getSmaakThesaurusnummer());
        $copyObj->setSmaakKode($this->getSmaakKode());
        $copyObj->setBereidingsvoorschrThesaurusnummer($this->getBereidingsvoorschrThesaurusnummer());
        $copyObj->setBereidingsvoorschriftKode($this->getBereidingsvoorschriftKode());
        $copyObj->setFysischeEigenschapThesaurusnummer($this->getFysischeEigenschapThesaurusnummer());
        $copyObj->setFysischeEigenschapKode($this->getFysischeEigenschapKode());
        $copyObj->setGrondstofvormThesaurusnummer($this->getGrondstofvormThesaurusnummer());
        $copyObj->setGrondstofvormKode($this->getGrondstofvormKode());
        $copyObj->setLosVerkrijgbaar($this->getLosVerkrijgbaar());
        $copyObj->setBioequivalenteGroep($this->getBioequivalenteGroep());
        $copyObj->setKodeRadioactieveStof($this->getKodeRadioactieveStof());
        $copyObj->setSoortHulpmiddel($this->getSoortHulpmiddel());
        $copyObj->setRzvThesaurus120($this->getRzvThesaurus120());
        $copyObj->setRzvvoorwaardenBijlage2($this->getRzvvoorwaardenBijlage2());
        $copyObj->setTekstmodule($this->getTekstmodule());
        $copyObj->setTekstVerwijzing($this->getTekstVerwijzing());
        $copyObj->setHulpmiddelVolgensAwbz($this->getHulpmiddelVolgensAwbz());
        $copyObj->setEenheidInkoophoeveelheidThesnr($this->getEenheidInkoophoeveelheidThesnr());
        $copyObj->setEenheidInkoophoeveelheid($this->getEenheidInkoophoeveelheid());
        $copyObj->setBasiseenheidVerpakkingThesnr($this->getBasiseenheidVerpakkingThesnr());
        $copyObj->setBasiseenheidVerpakking($this->getBasiseenheidVerpakking());
        $copyObj->setRichtlijnGebruikOndergrens($this->getRichtlijnGebruikOndergrens());
        $copyObj->setRichtlijnGebruikBovengrens($this->getRichtlijnGebruikBovengrens());
        $copyObj->setThesaurusRzvVerstrekking($this->getThesaurusRzvVerstrekking());
        $copyObj->setRzvverstrekking($this->getRzvverstrekking());
        $copyObj->setThesaurusRzvRationaliteit($this->getThesaurusRzvRationaliteit());
        $copyObj->setBeoordelingRationaliteit($this->getBeoordelingRationaliteit());
        $copyObj->setThesaurusRzvBeoordeling($this->getThesaurusRzvBeoordeling());
        $copyObj->setAchtergrondRationaliteit($this->getAchtergrondRationaliteit());
        $copyObj->setThesaurusRzvHulpmiddelen($this->getThesaurusRzvHulpmiddelen());
        $copyObj->setHulpmiddelenZorg($this->getHulpmiddelenZorg());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getGsArtikelEigenschappens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsArtikelEigenschappen($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsArtikelens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsArtikelen($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsBijzondereKenmerkens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsBijzondereKenmerken($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsDeclaratietabelDureGeneesmiddelens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsDeclaratietabelDureGeneesmiddelen($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsIngegevenSamenstellingens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsIngegevenSamenstellingen($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setHandelsproduktkode(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return GsHandelsproducten Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return GsHandelsproductenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsHandelsproductenPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsPrescriptieProduct object.
     *
     * @param                  GsPrescriptieProduct $v
     * @return GsHandelsproducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsPrescriptieProduct(GsPrescriptieProduct $v = null)
    {
        if ($v === null) {
            $this->setPrkcode(NULL);
        } else {
            $this->setPrkcode($v->getPrkcode());
        }

        $this->aGsPrescriptieProduct = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsPrescriptieProduct object, it will not be re-added.
        if ($v !== null) {
            $v->addGsHandelsproducten($this);
        }


        return $this;
    }


    /**
     * Get the associated GsPrescriptieProduct object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsPrescriptieProduct The associated GsPrescriptieProduct object.
     * @throws PropelException
     */
    public function getGsPrescriptieProduct(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsPrescriptieProduct === null && ($this->prkcode !== null) && $doQuery) {
            $this->aGsPrescriptieProduct = GsPrescriptieProductQuery::create()->findPk($this->prkcode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsPrescriptieProduct->addGsHandelsproductens($this);
             */
        }

        return $this->aGsPrescriptieProduct;
    }

    /**
     * Declares an association between this object and a GsNamen object.
     *
     * @param                  GsNamen $v
     * @return GsHandelsproducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsNamen(GsNamen $v = null)
    {
        if ($v === null) {
            $this->setHandelsproduktnaamnummer(NULL);
        } else {
            $this->setHandelsproduktnaamnummer($v->getNaamnummer());
        }

        $this->aGsNamen = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsNamen object, it will not be re-added.
        if ($v !== null) {
            $v->addGsHandelsproducten($this);
        }


        return $this;
    }


    /**
     * Get the associated GsNamen object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsNamen The associated GsNamen object.
     * @throws PropelException
     */
    public function getGsNamen(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsNamen === null && ($this->handelsproduktnaamnummer !== null) && $doQuery) {
            $this->aGsNamen = GsNamenQuery::create()->findPk($this->handelsproduktnaamnummer, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsNamen->addGsHandelsproductens($this);
             */
        }

        return $this->aGsNamen;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsHandelsproducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInkoophoeveelheidOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setEenheidInkoophoeveelheidThesnr(NULL);
        } else {
            $this->setEenheidInkoophoeveelheidThesnr($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setEenheidInkoophoeveelheid(NULL);
        } else {
            $this->setEenheidInkoophoeveelheid($v->getThesaurusItemnummer());
        }

        $this->aInkoophoeveelheidOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($this);
        }


        return $this;
    }


    /**
     * Get the associated GsThesauriTotaal object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsThesauriTotaal The associated GsThesauriTotaal object.
     * @throws PropelException
     */
    public function getInkoophoeveelheidOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aInkoophoeveelheidOmschrijving === null && ($this->eenheid_inkoophoeveelheid_thesnr !== null && $this->eenheid_inkoophoeveelheid !== null) && $doQuery) {
            $this->aInkoophoeveelheidOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->eenheid_inkoophoeveelheid_thesnr, $this->eenheid_inkoophoeveelheid), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInkoophoeveelheidOmschrijving->addGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($this);
             */
        }

        return $this->aInkoophoeveelheidOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsHandelsproducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setBasiseenheidOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setBasiseenheidVerpakkingThesnr(NULL);
        } else {
            $this->setBasiseenheidVerpakkingThesnr($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setBasiseenheidVerpakking(NULL);
        } else {
            $this->setBasiseenheidVerpakking($v->getThesaurusItemnummer());
        }

        $this->aBasiseenheidOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($this);
        }


        return $this;
    }


    /**
     * Get the associated GsThesauriTotaal object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsThesauriTotaal The associated GsThesauriTotaal object.
     * @throws PropelException
     */
    public function getBasiseenheidOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aBasiseenheidOmschrijving === null && ($this->basiseenheid_verpakking_thesnr !== null && $this->basiseenheid_verpakking !== null) && $doQuery) {
            $this->aBasiseenheidOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->basiseenheid_verpakking_thesnr, $this->basiseenheid_verpakking), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aBasiseenheidOmschrijving->addGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($this);
             */
        }

        return $this->aBasiseenheidOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsHandelsproducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmballageMateriaalOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setEmballagemateriaalThesaurusnummer(NULL);
        } else {
            $this->setEmballagemateriaalThesaurusnummer($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setEmballagemateriaalKode(NULL);
        } else {
            $this->setEmballagemateriaalKode($v->getThesaurusItemnummer());
        }

        $this->aEmballageMateriaalOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($this);
        }


        return $this;
    }


    /**
     * Get the associated GsThesauriTotaal object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsThesauriTotaal The associated GsThesauriTotaal object.
     * @throws PropelException
     */
    public function getEmballageMateriaalOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmballageMateriaalOmschrijving === null && ($this->emballagemateriaal_thesaurusnummer !== null && $this->emballagemateriaal_kode !== null) && $doQuery) {
            $this->aEmballageMateriaalOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->emballagemateriaal_thesaurusnummer, $this->emballagemateriaal_kode), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmballageMateriaalOmschrijving->addGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($this);
             */
        }

        return $this->aEmballageMateriaalOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsHandelsproducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmballageSluitingOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setEmballagesluitingThesaurusnummer(NULL);
        } else {
            $this->setEmballagesluitingThesaurusnummer($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setEmballagesluitingKode(NULL);
        } else {
            $this->setEmballagesluitingKode($v->getThesaurusItemnummer());
        }

        $this->aEmballageSluitingOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($this);
        }


        return $this;
    }


    /**
     * Get the associated GsThesauriTotaal object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsThesauriTotaal The associated GsThesauriTotaal object.
     * @throws PropelException
     */
    public function getEmballageSluitingOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmballageSluitingOmschrijving === null && ($this->emballagesluiting_thesaurusnummer !== null && $this->emballagesluiting_kode !== null) && $doQuery) {
            $this->aEmballageSluitingOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->emballagesluiting_thesaurusnummer, $this->emballagesluiting_kode), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmballageSluitingOmschrijving->addGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($this);
             */
        }

        return $this->aEmballageSluitingOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsHandelsproducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmballageDoseerinrichtingOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setEmballagedoseerinrThesaurusnr(NULL);
        } else {
            $this->setEmballagedoseerinrThesaurusnr($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setEmballagedoseerinrichtingKode(NULL);
        } else {
            $this->setEmballagedoseerinrichtingKode($v->getThesaurusItemnummer());
        }

        $this->aEmballageDoseerinrichtingOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($this);
        }


        return $this;
    }


    /**
     * Get the associated GsThesauriTotaal object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsThesauriTotaal The associated GsThesauriTotaal object.
     * @throws PropelException
     */
    public function getEmballageDoseerinrichtingOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmballageDoseerinrichtingOmschrijving === null && ($this->emballagedoseerinr_thesaurusnr !== null && $this->emballagedoseerinrichting_kode !== null) && $doQuery) {
            $this->aEmballageDoseerinrichtingOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->emballagedoseerinr_thesaurusnr, $this->emballagedoseerinrichting_kode), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmballageDoseerinrichtingOmschrijving->addGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($this);
             */
        }

        return $this->aEmballageDoseerinrichtingOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsHandelsproducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setKleurOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setKleurThesaurusnummer(NULL);
        } else {
            $this->setKleurThesaurusnummer($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setKleurKode(NULL);
        } else {
            $this->setKleurKode($v->getThesaurusItemnummer());
        }

        $this->aKleurOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsHandelsproductenRelatedByKleurThesaurusnummerKleurKode($this);
        }


        return $this;
    }


    /**
     * Get the associated GsThesauriTotaal object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsThesauriTotaal The associated GsThesauriTotaal object.
     * @throws PropelException
     */
    public function getKleurOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aKleurOmschrijving === null && ($this->kleur_thesaurusnummer !== null && $this->kleur_kode !== null) && $doQuery) {
            $this->aKleurOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->kleur_thesaurusnummer, $this->kleur_kode), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aKleurOmschrijving->addGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode($this);
             */
        }

        return $this->aKleurOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsHandelsproducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSmaakOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setSmaakThesaurusnummer(NULL);
        } else {
            $this->setSmaakThesaurusnummer($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setSmaakKode(NULL);
        } else {
            $this->setSmaakKode($v->getThesaurusItemnummer());
        }

        $this->aSmaakOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode($this);
        }


        return $this;
    }


    /**
     * Get the associated GsThesauriTotaal object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsThesauriTotaal The associated GsThesauriTotaal object.
     * @throws PropelException
     */
    public function getSmaakOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSmaakOmschrijving === null && ($this->smaak_thesaurusnummer !== null && $this->smaak_kode !== null) && $doQuery) {
            $this->aSmaakOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->smaak_thesaurusnummer, $this->smaak_kode), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSmaakOmschrijving->addGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode($this);
             */
        }

        return $this->aSmaakOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsHandelsproducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setBereidingsvoorschrijftOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setBereidingsvoorschrThesaurusnummer(NULL);
        } else {
            $this->setBereidingsvoorschrThesaurusnummer($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setBereidingsvoorschriftKode(NULL);
        } else {
            $this->setBereidingsvoorschriftKode($v->getThesaurusItemnummer());
        }

        $this->aBereidingsvoorschrijftOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($this);
        }


        return $this;
    }


    /**
     * Get the associated GsThesauriTotaal object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsThesauriTotaal The associated GsThesauriTotaal object.
     * @throws PropelException
     */
    public function getBereidingsvoorschrijftOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aBereidingsvoorschrijftOmschrijving === null && ($this->bereidingsvoorschr_thesaurusnummer !== null && $this->bereidingsvoorschrift_kode !== null) && $doQuery) {
            $this->aBereidingsvoorschrijftOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->bereidingsvoorschr_thesaurusnummer, $this->bereidingsvoorschrift_kode), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aBereidingsvoorschrijftOmschrijving->addGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($this);
             */
        }

        return $this->aBereidingsvoorschrijftOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsHandelsproducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProduktgroepOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setProduktgroepThesaurusnummer(NULL);
        } else {
            $this->setProduktgroepThesaurusnummer($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setProduktgroepKode(NULL);
        } else {
            $this->setProduktgroepKode($v->getThesaurusItemnummer());
        }

        $this->aProduktgroepOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode($this);
        }


        return $this;
    }


    /**
     * Get the associated GsThesauriTotaal object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsThesauriTotaal The associated GsThesauriTotaal object.
     * @throws PropelException
     */
    public function getProduktgroepOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProduktgroepOmschrijving === null && ($this->produktgroep_thesaurusnummer !== null && $this->produktgroep_kode !== null) && $doQuery) {
            $this->aProduktgroepOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->produktgroep_thesaurusnummer, $this->produktgroep_kode), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProduktgroepOmschrijving->addGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode($this);
             */
        }

        return $this->aProduktgroepOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsHandelsproducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRzvVerstrekkingOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesaurusRzvVerstrekking(NULL);
        } else {
            $this->setThesaurusRzvVerstrekking($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setRzvverstrekking(NULL);
        } else {
            $this->setRzvverstrekking($v->getThesaurusItemnummer());
        }

        $this->aRzvVerstrekkingOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking($this);
        }


        return $this;
    }


    /**
     * Get the associated GsThesauriTotaal object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsThesauriTotaal The associated GsThesauriTotaal object.
     * @throws PropelException
     */
    public function getRzvVerstrekkingOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRzvVerstrekkingOmschrijving === null && ($this->thesaurus_rzv_verstrekking !== null && $this->rzvverstrekking !== null) && $doQuery) {
            $this->aRzvVerstrekkingOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesaurus_rzv_verstrekking, $this->rzvverstrekking), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRzvVerstrekkingOmschrijving->addGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking($this);
             */
        }

        return $this->aRzvVerstrekkingOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsHandelsproducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRzvBijlage2Omschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setRzvThesaurus120(NULL);
        } else {
            $this->setRzvThesaurus120($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setRzvvoorwaardenBijlage2(NULL);
        } else {
            $this->setRzvvoorwaardenBijlage2($v->getThesaurusItemnummer());
        }

        $this->aRzvBijlage2Omschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($this);
        }


        return $this;
    }


    /**
     * Get the associated GsThesauriTotaal object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsThesauriTotaal The associated GsThesauriTotaal object.
     * @throws PropelException
     */
    public function getRzvBijlage2Omschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRzvBijlage2Omschrijving === null && ($this->rzv_thesaurus_120 !== null && $this->rzvvoorwaarden_bijlage_2 !== null) && $doQuery) {
            $this->aRzvBijlage2Omschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->rzv_thesaurus_120, $this->rzvvoorwaarden_bijlage_2), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRzvBijlage2Omschrijving->addGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($this);
             */
        }

        return $this->aRzvBijlage2Omschrijving;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('GsArtikelEigenschappen' == $relationName) {
            $this->initGsArtikelEigenschappens();
        }
        if ('GsArtikelen' == $relationName) {
            $this->initGsArtikelens();
        }
        if ('GsBijzondereKenmerken' == $relationName) {
            $this->initGsBijzondereKenmerkens();
        }
        if ('GsDeclaratietabelDureGeneesmiddelen' == $relationName) {
            $this->initGsDeclaratietabelDureGeneesmiddelens();
        }
        if ('GsIngegevenSamenstellingen' == $relationName) {
            $this->initGsIngegevenSamenstellingens();
        }
    }

    /**
     * Clears out the collGsArtikelEigenschappens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsHandelsproducten The current object (for fluent API support)
     * @see        addGsArtikelEigenschappens()
     */
    public function clearGsArtikelEigenschappens()
    {
        $this->collGsArtikelEigenschappens = null; // important to set this to null since that means it is uninitialized
        $this->collGsArtikelEigenschappensPartial = null;

        return $this;
    }

    /**
     * reset is the collGsArtikelEigenschappens collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsArtikelEigenschappens($v = true)
    {
        $this->collGsArtikelEigenschappensPartial = $v;
    }

    /**
     * Initializes the collGsArtikelEigenschappens collection.
     *
     * By default this just sets the collGsArtikelEigenschappens collection to an empty array (like clearcollGsArtikelEigenschappens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsArtikelEigenschappens($overrideExisting = true)
    {
        if (null !== $this->collGsArtikelEigenschappens && !$overrideExisting) {
            return;
        }
        $this->collGsArtikelEigenschappens = new PropelObjectCollection();
        $this->collGsArtikelEigenschappens->setModel('GsArtikelEigenschappen');
    }

    /**
     * Gets an array of GsArtikelEigenschappen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsHandelsproducten is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     * @throws PropelException
     */
    public function getGsArtikelEigenschappens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelEigenschappensPartial && !$this->isNew();
        if (null === $this->collGsArtikelEigenschappens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelEigenschappens) {
                // return empty collection
                $this->initGsArtikelEigenschappens();
            } else {
                $collGsArtikelEigenschappens = GsArtikelEigenschappenQuery::create(null, $criteria)
                    ->filterByGsHandelsproducten($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsArtikelEigenschappensPartial && count($collGsArtikelEigenschappens)) {
                      $this->initGsArtikelEigenschappens(false);

                      foreach ($collGsArtikelEigenschappens as $obj) {
                        if (false == $this->collGsArtikelEigenschappens->contains($obj)) {
                          $this->collGsArtikelEigenschappens->append($obj);
                        }
                      }

                      $this->collGsArtikelEigenschappensPartial = true;
                    }

                    $collGsArtikelEigenschappens->getInternalIterator()->rewind();

                    return $collGsArtikelEigenschappens;
                }

                if ($partial && $this->collGsArtikelEigenschappens) {
                    foreach ($this->collGsArtikelEigenschappens as $obj) {
                        if ($obj->isNew()) {
                            $collGsArtikelEigenschappens[] = $obj;
                        }
                    }
                }

                $this->collGsArtikelEigenschappens = $collGsArtikelEigenschappens;
                $this->collGsArtikelEigenschappensPartial = false;
            }
        }

        return $this->collGsArtikelEigenschappens;
    }

    /**
     * Sets a collection of GsArtikelEigenschappen objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsArtikelEigenschappens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setGsArtikelEigenschappens(PropelCollection $gsArtikelEigenschappens, PropelPDO $con = null)
    {
        $gsArtikelEigenschappensToDelete = $this->getGsArtikelEigenschappens(new Criteria(), $con)->diff($gsArtikelEigenschappens);


        $this->gsArtikelEigenschappensScheduledForDeletion = $gsArtikelEigenschappensToDelete;

        foreach ($gsArtikelEigenschappensToDelete as $gsArtikelEigenschappenRemoved) {
            $gsArtikelEigenschappenRemoved->setGsHandelsproducten(null);
        }

        $this->collGsArtikelEigenschappens = null;
        foreach ($gsArtikelEigenschappens as $gsArtikelEigenschappen) {
            $this->addGsArtikelEigenschappen($gsArtikelEigenschappen);
        }

        $this->collGsArtikelEigenschappens = $gsArtikelEigenschappens;
        $this->collGsArtikelEigenschappensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsArtikelEigenschappen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsArtikelEigenschappen objects.
     * @throws PropelException
     */
    public function countGsArtikelEigenschappens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelEigenschappensPartial && !$this->isNew();
        if (null === $this->collGsArtikelEigenschappens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelEigenschappens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsArtikelEigenschappens());
            }
            $query = GsArtikelEigenschappenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsHandelsproducten($this)
                ->count($con);
        }

        return count($this->collGsArtikelEigenschappens);
    }

    /**
     * Method called to associate a GsArtikelEigenschappen object to this object
     * through the GsArtikelEigenschappen foreign key attribute.
     *
     * @param    GsArtikelEigenschappen $l GsArtikelEigenschappen
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function addGsArtikelEigenschappen(GsArtikelEigenschappen $l)
    {
        if ($this->collGsArtikelEigenschappens === null) {
            $this->initGsArtikelEigenschappens();
            $this->collGsArtikelEigenschappensPartial = true;
        }

        if (!in_array($l, $this->collGsArtikelEigenschappens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsArtikelEigenschappen($l);

            if ($this->gsArtikelEigenschappensScheduledForDeletion and $this->gsArtikelEigenschappensScheduledForDeletion->contains($l)) {
                $this->gsArtikelEigenschappensScheduledForDeletion->remove($this->gsArtikelEigenschappensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsArtikelEigenschappen $gsArtikelEigenschappen The gsArtikelEigenschappen object to add.
     */
    protected function doAddGsArtikelEigenschappen($gsArtikelEigenschappen)
    {
        $this->collGsArtikelEigenschappens[]= $gsArtikelEigenschappen;
        $gsArtikelEigenschappen->setGsHandelsproducten($this);
    }

    /**
     * @param	GsArtikelEigenschappen $gsArtikelEigenschappen The gsArtikelEigenschappen object to remove.
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function removeGsArtikelEigenschappen($gsArtikelEigenschappen)
    {
        if ($this->getGsArtikelEigenschappens()->contains($gsArtikelEigenschappen)) {
            $this->collGsArtikelEigenschappens->remove($this->collGsArtikelEigenschappens->search($gsArtikelEigenschappen));
            if (null === $this->gsArtikelEigenschappensScheduledForDeletion) {
                $this->gsArtikelEigenschappensScheduledForDeletion = clone $this->collGsArtikelEigenschappens;
                $this->gsArtikelEigenschappensScheduledForDeletion->clear();
            }
            $this->gsArtikelEigenschappensScheduledForDeletion[]= $gsArtikelEigenschappen;
            $gsArtikelEigenschappen->setGsHandelsproducten(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     */
    public function getGsArtikelEigenschappensJoinGsArtikelen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelEigenschappenQuery::create(null, $criteria);
        $query->joinWith('GsArtikelen', $join_behavior);

        return $this->getGsArtikelEigenschappens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     */
    public function getGsArtikelEigenschappensJoinGsNawGegevensGstandaard($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelEigenschappenQuery::create(null, $criteria);
        $query->joinWith('GsNawGegevensGstandaard', $join_behavior);

        return $this->getGsArtikelEigenschappens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     */
    public function getGsArtikelEigenschappensJoinGsPrescriptieProduct($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelEigenschappenQuery::create(null, $criteria);
        $query->joinWith('GsPrescriptieProduct', $join_behavior);

        return $this->getGsArtikelEigenschappens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     */
    public function getGsArtikelEigenschappensJoinGsGeneriekeProducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelEigenschappenQuery::create(null, $criteria);
        $query->joinWith('GsGeneriekeProducten', $join_behavior);

        return $this->getGsArtikelEigenschappens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     */
    public function getGsArtikelEigenschappensJoinGsAtcCodes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelEigenschappenQuery::create(null, $criteria);
        $query->joinWith('GsAtcCodes', $join_behavior);

        return $this->getGsArtikelEigenschappens($query, $con);
    }

    /**
     * Clears out the collGsArtikelens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsHandelsproducten The current object (for fluent API support)
     * @see        addGsArtikelens()
     */
    public function clearGsArtikelens()
    {
        $this->collGsArtikelens = null; // important to set this to null since that means it is uninitialized
        $this->collGsArtikelensPartial = null;

        return $this;
    }

    /**
     * reset is the collGsArtikelens collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsArtikelens($v = true)
    {
        $this->collGsArtikelensPartial = $v;
    }

    /**
     * Initializes the collGsArtikelens collection.
     *
     * By default this just sets the collGsArtikelens collection to an empty array (like clearcollGsArtikelens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsArtikelens($overrideExisting = true)
    {
        if (null !== $this->collGsArtikelens && !$overrideExisting) {
            return;
        }
        $this->collGsArtikelens = new PropelObjectCollection();
        $this->collGsArtikelens->setModel('GsArtikelen');
    }

    /**
     * Gets an array of GsArtikelen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsHandelsproducten is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     * @throws PropelException
     */
    public function getGsArtikelens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelensPartial && !$this->isNew();
        if (null === $this->collGsArtikelens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelens) {
                // return empty collection
                $this->initGsArtikelens();
            } else {
                $collGsArtikelens = GsArtikelenQuery::create(null, $criteria)
                    ->filterByGsHandelsproducten($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsArtikelensPartial && count($collGsArtikelens)) {
                      $this->initGsArtikelens(false);

                      foreach ($collGsArtikelens as $obj) {
                        if (false == $this->collGsArtikelens->contains($obj)) {
                          $this->collGsArtikelens->append($obj);
                        }
                      }

                      $this->collGsArtikelensPartial = true;
                    }

                    $collGsArtikelens->getInternalIterator()->rewind();

                    return $collGsArtikelens;
                }

                if ($partial && $this->collGsArtikelens) {
                    foreach ($this->collGsArtikelens as $obj) {
                        if ($obj->isNew()) {
                            $collGsArtikelens[] = $obj;
                        }
                    }
                }

                $this->collGsArtikelens = $collGsArtikelens;
                $this->collGsArtikelensPartial = false;
            }
        }

        return $this->collGsArtikelens;
    }

    /**
     * Sets a collection of GsArtikelen objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsArtikelens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setGsArtikelens(PropelCollection $gsArtikelens, PropelPDO $con = null)
    {
        $gsArtikelensToDelete = $this->getGsArtikelens(new Criteria(), $con)->diff($gsArtikelens);


        $this->gsArtikelensScheduledForDeletion = $gsArtikelensToDelete;

        foreach ($gsArtikelensToDelete as $gsArtikelenRemoved) {
            $gsArtikelenRemoved->setGsHandelsproducten(null);
        }

        $this->collGsArtikelens = null;
        foreach ($gsArtikelens as $gsArtikelen) {
            $this->addGsArtikelen($gsArtikelen);
        }

        $this->collGsArtikelens = $gsArtikelens;
        $this->collGsArtikelensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsArtikelen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsArtikelen objects.
     * @throws PropelException
     */
    public function countGsArtikelens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelensPartial && !$this->isNew();
        if (null === $this->collGsArtikelens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsArtikelens());
            }
            $query = GsArtikelenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsHandelsproducten($this)
                ->count($con);
        }

        return count($this->collGsArtikelens);
    }

    /**
     * Method called to associate a GsArtikelen object to this object
     * through the GsArtikelen foreign key attribute.
     *
     * @param    GsArtikelen $l GsArtikelen
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function addGsArtikelen(GsArtikelen $l)
    {
        if ($this->collGsArtikelens === null) {
            $this->initGsArtikelens();
            $this->collGsArtikelensPartial = true;
        }

        if (!in_array($l, $this->collGsArtikelens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsArtikelen($l);

            if ($this->gsArtikelensScheduledForDeletion and $this->gsArtikelensScheduledForDeletion->contains($l)) {
                $this->gsArtikelensScheduledForDeletion->remove($this->gsArtikelensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsArtikelen $gsArtikelen The gsArtikelen object to add.
     */
    protected function doAddGsArtikelen($gsArtikelen)
    {
        $this->collGsArtikelens[]= $gsArtikelen;
        $gsArtikelen->setGsHandelsproducten($this);
    }

    /**
     * @param	GsArtikelen $gsArtikelen The gsArtikelen object to remove.
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function removeGsArtikelen($gsArtikelen)
    {
        if ($this->getGsArtikelens()->contains($gsArtikelen)) {
            $this->collGsArtikelens->remove($this->collGsArtikelens->search($gsArtikelen));
            if (null === $this->gsArtikelensScheduledForDeletion) {
                $this->gsArtikelensScheduledForDeletion = clone $this->collGsArtikelens;
                $this->gsArtikelensScheduledForDeletion->clear();
            }
            $this->gsArtikelensScheduledForDeletion[]= $gsArtikelen;
            $gsArtikelen->setGsHandelsproducten(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsArtikelens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsArtikelens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsArtikelens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensJoinLeverancier($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('Leverancier', $join_behavior);

        return $this->getGsArtikelens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsArtikelens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensJoinImporteur($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('Importeur', $join_behavior);

        return $this->getGsArtikelens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsArtikelens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensJoinRegistratiehouder($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('Registratiehouder', $join_behavior);

        return $this->getGsArtikelens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsArtikelens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensJoinLandOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('LandOmschrijving', $join_behavior);

        return $this->getGsArtikelens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsArtikelens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensJoinHoofdverpakkingOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('HoofdverpakkingOmschrijving', $join_behavior);

        return $this->getGsArtikelens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsArtikelens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensJoinDeelverpakkingOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('DeelverpakkingOmschrijving', $join_behavior);

        return $this->getGsArtikelens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsArtikelens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensJoinLogistiekeInformatie($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('LogistiekeInformatie', $join_behavior);

        return $this->getGsArtikelens($query, $con);
    }

    /**
     * Clears out the collGsBijzondereKenmerkens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsHandelsproducten The current object (for fluent API support)
     * @see        addGsBijzondereKenmerkens()
     */
    public function clearGsBijzondereKenmerkens()
    {
        $this->collGsBijzondereKenmerkens = null; // important to set this to null since that means it is uninitialized
        $this->collGsBijzondereKenmerkensPartial = null;

        return $this;
    }

    /**
     * reset is the collGsBijzondereKenmerkens collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsBijzondereKenmerkens($v = true)
    {
        $this->collGsBijzondereKenmerkensPartial = $v;
    }

    /**
     * Initializes the collGsBijzondereKenmerkens collection.
     *
     * By default this just sets the collGsBijzondereKenmerkens collection to an empty array (like clearcollGsBijzondereKenmerkens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsBijzondereKenmerkens($overrideExisting = true)
    {
        if (null !== $this->collGsBijzondereKenmerkens && !$overrideExisting) {
            return;
        }
        $this->collGsBijzondereKenmerkens = new PropelObjectCollection();
        $this->collGsBijzondereKenmerkens->setModel('GsBijzondereKenmerken');
    }

    /**
     * Gets an array of GsBijzondereKenmerken objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsHandelsproducten is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsBijzondereKenmerken[] List of GsBijzondereKenmerken objects
     * @throws PropelException
     */
    public function getGsBijzondereKenmerkens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsBijzondereKenmerkensPartial && !$this->isNew();
        if (null === $this->collGsBijzondereKenmerkens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsBijzondereKenmerkens) {
                // return empty collection
                $this->initGsBijzondereKenmerkens();
            } else {
                $collGsBijzondereKenmerkens = GsBijzondereKenmerkenQuery::create(null, $criteria)
                    ->filterByGsHandelsproducten($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsBijzondereKenmerkensPartial && count($collGsBijzondereKenmerkens)) {
                      $this->initGsBijzondereKenmerkens(false);

                      foreach ($collGsBijzondereKenmerkens as $obj) {
                        if (false == $this->collGsBijzondereKenmerkens->contains($obj)) {
                          $this->collGsBijzondereKenmerkens->append($obj);
                        }
                      }

                      $this->collGsBijzondereKenmerkensPartial = true;
                    }

                    $collGsBijzondereKenmerkens->getInternalIterator()->rewind();

                    return $collGsBijzondereKenmerkens;
                }

                if ($partial && $this->collGsBijzondereKenmerkens) {
                    foreach ($this->collGsBijzondereKenmerkens as $obj) {
                        if ($obj->isNew()) {
                            $collGsBijzondereKenmerkens[] = $obj;
                        }
                    }
                }

                $this->collGsBijzondereKenmerkens = $collGsBijzondereKenmerkens;
                $this->collGsBijzondereKenmerkensPartial = false;
            }
        }

        return $this->collGsBijzondereKenmerkens;
    }

    /**
     * Sets a collection of GsBijzondereKenmerken objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsBijzondereKenmerkens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setGsBijzondereKenmerkens(PropelCollection $gsBijzondereKenmerkens, PropelPDO $con = null)
    {
        $gsBijzondereKenmerkensToDelete = $this->getGsBijzondereKenmerkens(new Criteria(), $con)->diff($gsBijzondereKenmerkens);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsBijzondereKenmerkensScheduledForDeletion = clone $gsBijzondereKenmerkensToDelete;

        foreach ($gsBijzondereKenmerkensToDelete as $gsBijzondereKenmerkenRemoved) {
            $gsBijzondereKenmerkenRemoved->setGsHandelsproducten(null);
        }

        $this->collGsBijzondereKenmerkens = null;
        foreach ($gsBijzondereKenmerkens as $gsBijzondereKenmerken) {
            $this->addGsBijzondereKenmerken($gsBijzondereKenmerken);
        }

        $this->collGsBijzondereKenmerkens = $gsBijzondereKenmerkens;
        $this->collGsBijzondereKenmerkensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsBijzondereKenmerken objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsBijzondereKenmerken objects.
     * @throws PropelException
     */
    public function countGsBijzondereKenmerkens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsBijzondereKenmerkensPartial && !$this->isNew();
        if (null === $this->collGsBijzondereKenmerkens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsBijzondereKenmerkens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsBijzondereKenmerkens());
            }
            $query = GsBijzondereKenmerkenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsHandelsproducten($this)
                ->count($con);
        }

        return count($this->collGsBijzondereKenmerkens);
    }

    /**
     * Method called to associate a GsBijzondereKenmerken object to this object
     * through the GsBijzondereKenmerken foreign key attribute.
     *
     * @param    GsBijzondereKenmerken $l GsBijzondereKenmerken
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function addGsBijzondereKenmerken(GsBijzondereKenmerken $l)
    {
        if ($this->collGsBijzondereKenmerkens === null) {
            $this->initGsBijzondereKenmerkens();
            $this->collGsBijzondereKenmerkensPartial = true;
        }

        if (!in_array($l, $this->collGsBijzondereKenmerkens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsBijzondereKenmerken($l);

            if ($this->gsBijzondereKenmerkensScheduledForDeletion and $this->gsBijzondereKenmerkensScheduledForDeletion->contains($l)) {
                $this->gsBijzondereKenmerkensScheduledForDeletion->remove($this->gsBijzondereKenmerkensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsBijzondereKenmerken $gsBijzondereKenmerken The gsBijzondereKenmerken object to add.
     */
    protected function doAddGsBijzondereKenmerken($gsBijzondereKenmerken)
    {
        $this->collGsBijzondereKenmerkens[]= $gsBijzondereKenmerken;
        $gsBijzondereKenmerken->setGsHandelsproducten($this);
    }

    /**
     * @param	GsBijzondereKenmerken $gsBijzondereKenmerken The gsBijzondereKenmerken object to remove.
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function removeGsBijzondereKenmerken($gsBijzondereKenmerken)
    {
        if ($this->getGsBijzondereKenmerkens()->contains($gsBijzondereKenmerken)) {
            $this->collGsBijzondereKenmerkens->remove($this->collGsBijzondereKenmerkens->search($gsBijzondereKenmerken));
            if (null === $this->gsBijzondereKenmerkensScheduledForDeletion) {
                $this->gsBijzondereKenmerkensScheduledForDeletion = clone $this->collGsBijzondereKenmerkens;
                $this->gsBijzondereKenmerkensScheduledForDeletion->clear();
            }
            $this->gsBijzondereKenmerkensScheduledForDeletion[]= clone $gsBijzondereKenmerken;
            $gsBijzondereKenmerken->setGsHandelsproducten(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsBijzondereKenmerkens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsBijzondereKenmerken[] List of GsBijzondereKenmerken objects
     */
    public function getGsBijzondereKenmerkensJoinKenmerkOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsBijzondereKenmerkenQuery::create(null, $criteria);
        $query->joinWith('KenmerkOmschrijving', $join_behavior);

        return $this->getGsBijzondereKenmerkens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsBijzondereKenmerkens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsBijzondereKenmerken[] List of GsBijzondereKenmerken objects
     */
    public function getGsBijzondereKenmerkensJoinGsPrescriptieProduct($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsBijzondereKenmerkenQuery::create(null, $criteria);
        $query->joinWith('GsPrescriptieProduct', $join_behavior);

        return $this->getGsBijzondereKenmerkens($query, $con);
    }

    /**
     * Clears out the collGsDeclaratietabelDureGeneesmiddelens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsHandelsproducten The current object (for fluent API support)
     * @see        addGsDeclaratietabelDureGeneesmiddelens()
     */
    public function clearGsDeclaratietabelDureGeneesmiddelens()
    {
        $this->collGsDeclaratietabelDureGeneesmiddelens = null; // important to set this to null since that means it is uninitialized
        $this->collGsDeclaratietabelDureGeneesmiddelensPartial = null;

        return $this;
    }

    /**
     * reset is the collGsDeclaratietabelDureGeneesmiddelens collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsDeclaratietabelDureGeneesmiddelens($v = true)
    {
        $this->collGsDeclaratietabelDureGeneesmiddelensPartial = $v;
    }

    /**
     * Initializes the collGsDeclaratietabelDureGeneesmiddelens collection.
     *
     * By default this just sets the collGsDeclaratietabelDureGeneesmiddelens collection to an empty array (like clearcollGsDeclaratietabelDureGeneesmiddelens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsDeclaratietabelDureGeneesmiddelens($overrideExisting = true)
    {
        if (null !== $this->collGsDeclaratietabelDureGeneesmiddelens && !$overrideExisting) {
            return;
        }
        $this->collGsDeclaratietabelDureGeneesmiddelens = new PropelObjectCollection();
        $this->collGsDeclaratietabelDureGeneesmiddelens->setModel('GsDeclaratietabelDureGeneesmiddelen');
    }

    /**
     * Gets an array of GsDeclaratietabelDureGeneesmiddelen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsHandelsproducten is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsDeclaratietabelDureGeneesmiddelen[] List of GsDeclaratietabelDureGeneesmiddelen objects
     * @throws PropelException
     */
    public function getGsDeclaratietabelDureGeneesmiddelens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsDeclaratietabelDureGeneesmiddelensPartial && !$this->isNew();
        if (null === $this->collGsDeclaratietabelDureGeneesmiddelens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsDeclaratietabelDureGeneesmiddelens) {
                // return empty collection
                $this->initGsDeclaratietabelDureGeneesmiddelens();
            } else {
                $collGsDeclaratietabelDureGeneesmiddelens = GsDeclaratietabelDureGeneesmiddelenQuery::create(null, $criteria)
                    ->filterByGsHandelsproducten($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsDeclaratietabelDureGeneesmiddelensPartial && count($collGsDeclaratietabelDureGeneesmiddelens)) {
                      $this->initGsDeclaratietabelDureGeneesmiddelens(false);

                      foreach ($collGsDeclaratietabelDureGeneesmiddelens as $obj) {
                        if (false == $this->collGsDeclaratietabelDureGeneesmiddelens->contains($obj)) {
                          $this->collGsDeclaratietabelDureGeneesmiddelens->append($obj);
                        }
                      }

                      $this->collGsDeclaratietabelDureGeneesmiddelensPartial = true;
                    }

                    $collGsDeclaratietabelDureGeneesmiddelens->getInternalIterator()->rewind();

                    return $collGsDeclaratietabelDureGeneesmiddelens;
                }

                if ($partial && $this->collGsDeclaratietabelDureGeneesmiddelens) {
                    foreach ($this->collGsDeclaratietabelDureGeneesmiddelens as $obj) {
                        if ($obj->isNew()) {
                            $collGsDeclaratietabelDureGeneesmiddelens[] = $obj;
                        }
                    }
                }

                $this->collGsDeclaratietabelDureGeneesmiddelens = $collGsDeclaratietabelDureGeneesmiddelens;
                $this->collGsDeclaratietabelDureGeneesmiddelensPartial = false;
            }
        }

        return $this->collGsDeclaratietabelDureGeneesmiddelens;
    }

    /**
     * Sets a collection of GsDeclaratietabelDureGeneesmiddelen objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsDeclaratietabelDureGeneesmiddelens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setGsDeclaratietabelDureGeneesmiddelens(PropelCollection $gsDeclaratietabelDureGeneesmiddelens, PropelPDO $con = null)
    {
        $gsDeclaratietabelDureGeneesmiddelensToDelete = $this->getGsDeclaratietabelDureGeneesmiddelens(new Criteria(), $con)->diff($gsDeclaratietabelDureGeneesmiddelens);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsDeclaratietabelDureGeneesmiddelensScheduledForDeletion = clone $gsDeclaratietabelDureGeneesmiddelensToDelete;

        foreach ($gsDeclaratietabelDureGeneesmiddelensToDelete as $gsDeclaratietabelDureGeneesmiddelenRemoved) {
            $gsDeclaratietabelDureGeneesmiddelenRemoved->setGsHandelsproducten(null);
        }

        $this->collGsDeclaratietabelDureGeneesmiddelens = null;
        foreach ($gsDeclaratietabelDureGeneesmiddelens as $gsDeclaratietabelDureGeneesmiddelen) {
            $this->addGsDeclaratietabelDureGeneesmiddelen($gsDeclaratietabelDureGeneesmiddelen);
        }

        $this->collGsDeclaratietabelDureGeneesmiddelens = $gsDeclaratietabelDureGeneesmiddelens;
        $this->collGsDeclaratietabelDureGeneesmiddelensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsDeclaratietabelDureGeneesmiddelen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsDeclaratietabelDureGeneesmiddelen objects.
     * @throws PropelException
     */
    public function countGsDeclaratietabelDureGeneesmiddelens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsDeclaratietabelDureGeneesmiddelensPartial && !$this->isNew();
        if (null === $this->collGsDeclaratietabelDureGeneesmiddelens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsDeclaratietabelDureGeneesmiddelens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsDeclaratietabelDureGeneesmiddelens());
            }
            $query = GsDeclaratietabelDureGeneesmiddelenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsHandelsproducten($this)
                ->count($con);
        }

        return count($this->collGsDeclaratietabelDureGeneesmiddelens);
    }

    /**
     * Method called to associate a GsDeclaratietabelDureGeneesmiddelen object to this object
     * through the GsDeclaratietabelDureGeneesmiddelen foreign key attribute.
     *
     * @param    GsDeclaratietabelDureGeneesmiddelen $l GsDeclaratietabelDureGeneesmiddelen
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function addGsDeclaratietabelDureGeneesmiddelen(GsDeclaratietabelDureGeneesmiddelen $l)
    {
        if ($this->collGsDeclaratietabelDureGeneesmiddelens === null) {
            $this->initGsDeclaratietabelDureGeneesmiddelens();
            $this->collGsDeclaratietabelDureGeneesmiddelensPartial = true;
        }

        if (!in_array($l, $this->collGsDeclaratietabelDureGeneesmiddelens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsDeclaratietabelDureGeneesmiddelen($l);

            if ($this->gsDeclaratietabelDureGeneesmiddelensScheduledForDeletion and $this->gsDeclaratietabelDureGeneesmiddelensScheduledForDeletion->contains($l)) {
                $this->gsDeclaratietabelDureGeneesmiddelensScheduledForDeletion->remove($this->gsDeclaratietabelDureGeneesmiddelensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsDeclaratietabelDureGeneesmiddelen $gsDeclaratietabelDureGeneesmiddelen The gsDeclaratietabelDureGeneesmiddelen object to add.
     */
    protected function doAddGsDeclaratietabelDureGeneesmiddelen($gsDeclaratietabelDureGeneesmiddelen)
    {
        $this->collGsDeclaratietabelDureGeneesmiddelens[]= $gsDeclaratietabelDureGeneesmiddelen;
        $gsDeclaratietabelDureGeneesmiddelen->setGsHandelsproducten($this);
    }

    /**
     * @param	GsDeclaratietabelDureGeneesmiddelen $gsDeclaratietabelDureGeneesmiddelen The gsDeclaratietabelDureGeneesmiddelen object to remove.
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function removeGsDeclaratietabelDureGeneesmiddelen($gsDeclaratietabelDureGeneesmiddelen)
    {
        if ($this->getGsDeclaratietabelDureGeneesmiddelens()->contains($gsDeclaratietabelDureGeneesmiddelen)) {
            $this->collGsDeclaratietabelDureGeneesmiddelens->remove($this->collGsDeclaratietabelDureGeneesmiddelens->search($gsDeclaratietabelDureGeneesmiddelen));
            if (null === $this->gsDeclaratietabelDureGeneesmiddelensScheduledForDeletion) {
                $this->gsDeclaratietabelDureGeneesmiddelensScheduledForDeletion = clone $this->collGsDeclaratietabelDureGeneesmiddelens;
                $this->gsDeclaratietabelDureGeneesmiddelensScheduledForDeletion->clear();
            }
            $this->gsDeclaratietabelDureGeneesmiddelensScheduledForDeletion[]= clone $gsDeclaratietabelDureGeneesmiddelen;
            $gsDeclaratietabelDureGeneesmiddelen->setGsHandelsproducten(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsDeclaratietabelDureGeneesmiddelens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsDeclaratietabelDureGeneesmiddelen[] List of GsDeclaratietabelDureGeneesmiddelen objects
     */
    public function getGsDeclaratietabelDureGeneesmiddelensJoinBeleidsregelOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsDeclaratietabelDureGeneesmiddelenQuery::create(null, $criteria);
        $query->joinWith('BeleidsregelOmschrijving', $join_behavior);

        return $this->getGsDeclaratietabelDureGeneesmiddelens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsDeclaratietabelDureGeneesmiddelens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsDeclaratietabelDureGeneesmiddelen[] List of GsDeclaratietabelDureGeneesmiddelen objects
     */
    public function getGsDeclaratietabelDureGeneesmiddelensJoinToedieningsEenheidOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsDeclaratietabelDureGeneesmiddelenQuery::create(null, $criteria);
        $query->joinWith('ToedieningsEenheidOmschrijving', $join_behavior);

        return $this->getGsDeclaratietabelDureGeneesmiddelens($query, $con);
    }

    /**
     * Clears out the collGsIngegevenSamenstellingens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsHandelsproducten The current object (for fluent API support)
     * @see        addGsIngegevenSamenstellingens()
     */
    public function clearGsIngegevenSamenstellingens()
    {
        $this->collGsIngegevenSamenstellingens = null; // important to set this to null since that means it is uninitialized
        $this->collGsIngegevenSamenstellingensPartial = null;

        return $this;
    }

    /**
     * reset is the collGsIngegevenSamenstellingens collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsIngegevenSamenstellingens($v = true)
    {
        $this->collGsIngegevenSamenstellingensPartial = $v;
    }

    /**
     * Initializes the collGsIngegevenSamenstellingens collection.
     *
     * By default this just sets the collGsIngegevenSamenstellingens collection to an empty array (like clearcollGsIngegevenSamenstellingens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsIngegevenSamenstellingens($overrideExisting = true)
    {
        if (null !== $this->collGsIngegevenSamenstellingens && !$overrideExisting) {
            return;
        }
        $this->collGsIngegevenSamenstellingens = new PropelObjectCollection();
        $this->collGsIngegevenSamenstellingens->setModel('GsIngegevenSamenstellingen');
    }

    /**
     * Gets an array of GsIngegevenSamenstellingen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsHandelsproducten is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsIngegevenSamenstellingen[] List of GsIngegevenSamenstellingen objects
     * @throws PropelException
     */
    public function getGsIngegevenSamenstellingens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsIngegevenSamenstellingensPartial && !$this->isNew();
        if (null === $this->collGsIngegevenSamenstellingens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsIngegevenSamenstellingens) {
                // return empty collection
                $this->initGsIngegevenSamenstellingens();
            } else {
                $collGsIngegevenSamenstellingens = GsIngegevenSamenstellingenQuery::create(null, $criteria)
                    ->filterByGsHandelsproducten($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsIngegevenSamenstellingensPartial && count($collGsIngegevenSamenstellingens)) {
                      $this->initGsIngegevenSamenstellingens(false);

                      foreach ($collGsIngegevenSamenstellingens as $obj) {
                        if (false == $this->collGsIngegevenSamenstellingens->contains($obj)) {
                          $this->collGsIngegevenSamenstellingens->append($obj);
                        }
                      }

                      $this->collGsIngegevenSamenstellingensPartial = true;
                    }

                    $collGsIngegevenSamenstellingens->getInternalIterator()->rewind();

                    return $collGsIngegevenSamenstellingens;
                }

                if ($partial && $this->collGsIngegevenSamenstellingens) {
                    foreach ($this->collGsIngegevenSamenstellingens as $obj) {
                        if ($obj->isNew()) {
                            $collGsIngegevenSamenstellingens[] = $obj;
                        }
                    }
                }

                $this->collGsIngegevenSamenstellingens = $collGsIngegevenSamenstellingens;
                $this->collGsIngegevenSamenstellingensPartial = false;
            }
        }

        return $this->collGsIngegevenSamenstellingens;
    }

    /**
     * Sets a collection of GsIngegevenSamenstellingen objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsIngegevenSamenstellingens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function setGsIngegevenSamenstellingens(PropelCollection $gsIngegevenSamenstellingens, PropelPDO $con = null)
    {
        $gsIngegevenSamenstellingensToDelete = $this->getGsIngegevenSamenstellingens(new Criteria(), $con)->diff($gsIngegevenSamenstellingens);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsIngegevenSamenstellingensScheduledForDeletion = clone $gsIngegevenSamenstellingensToDelete;

        foreach ($gsIngegevenSamenstellingensToDelete as $gsIngegevenSamenstellingenRemoved) {
            $gsIngegevenSamenstellingenRemoved->setGsHandelsproducten(null);
        }

        $this->collGsIngegevenSamenstellingens = null;
        foreach ($gsIngegevenSamenstellingens as $gsIngegevenSamenstellingen) {
            $this->addGsIngegevenSamenstellingen($gsIngegevenSamenstellingen);
        }

        $this->collGsIngegevenSamenstellingens = $gsIngegevenSamenstellingens;
        $this->collGsIngegevenSamenstellingensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsIngegevenSamenstellingen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsIngegevenSamenstellingen objects.
     * @throws PropelException
     */
    public function countGsIngegevenSamenstellingens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsIngegevenSamenstellingensPartial && !$this->isNew();
        if (null === $this->collGsIngegevenSamenstellingens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsIngegevenSamenstellingens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsIngegevenSamenstellingens());
            }
            $query = GsIngegevenSamenstellingenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsHandelsproducten($this)
                ->count($con);
        }

        return count($this->collGsIngegevenSamenstellingens);
    }

    /**
     * Method called to associate a GsIngegevenSamenstellingen object to this object
     * through the GsIngegevenSamenstellingen foreign key attribute.
     *
     * @param    GsIngegevenSamenstellingen $l GsIngegevenSamenstellingen
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function addGsIngegevenSamenstellingen(GsIngegevenSamenstellingen $l)
    {
        if ($this->collGsIngegevenSamenstellingens === null) {
            $this->initGsIngegevenSamenstellingens();
            $this->collGsIngegevenSamenstellingensPartial = true;
        }

        if (!in_array($l, $this->collGsIngegevenSamenstellingens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsIngegevenSamenstellingen($l);

            if ($this->gsIngegevenSamenstellingensScheduledForDeletion and $this->gsIngegevenSamenstellingensScheduledForDeletion->contains($l)) {
                $this->gsIngegevenSamenstellingensScheduledForDeletion->remove($this->gsIngegevenSamenstellingensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsIngegevenSamenstellingen $gsIngegevenSamenstellingen The gsIngegevenSamenstellingen object to add.
     */
    protected function doAddGsIngegevenSamenstellingen($gsIngegevenSamenstellingen)
    {
        $this->collGsIngegevenSamenstellingens[]= $gsIngegevenSamenstellingen;
        $gsIngegevenSamenstellingen->setGsHandelsproducten($this);
    }

    /**
     * @param	GsIngegevenSamenstellingen $gsIngegevenSamenstellingen The gsIngegevenSamenstellingen object to remove.
     * @return GsHandelsproducten The current object (for fluent API support)
     */
    public function removeGsIngegevenSamenstellingen($gsIngegevenSamenstellingen)
    {
        if ($this->getGsIngegevenSamenstellingens()->contains($gsIngegevenSamenstellingen)) {
            $this->collGsIngegevenSamenstellingens->remove($this->collGsIngegevenSamenstellingens->search($gsIngegevenSamenstellingen));
            if (null === $this->gsIngegevenSamenstellingensScheduledForDeletion) {
                $this->gsIngegevenSamenstellingensScheduledForDeletion = clone $this->collGsIngegevenSamenstellingens;
                $this->gsIngegevenSamenstellingensScheduledForDeletion->clear();
            }
            $this->gsIngegevenSamenstellingensScheduledForDeletion[]= clone $gsIngegevenSamenstellingen;
            $gsIngegevenSamenstellingen->setGsHandelsproducten(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsIngegevenSamenstellingens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsIngegevenSamenstellingen[] List of GsIngegevenSamenstellingen objects
     */
    public function getGsIngegevenSamenstellingensJoinGsGeneriekeNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsIngegevenSamenstellingenQuery::create(null, $criteria);
        $query->joinWith('GsGeneriekeNamen', $join_behavior);

        return $this->getGsIngegevenSamenstellingens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsIngegevenSamenstellingens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsIngegevenSamenstellingen[] List of GsIngegevenSamenstellingen objects
     */
    public function getGsIngegevenSamenstellingensJoinEenheidHoeveelheidOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsIngegevenSamenstellingenQuery::create(null, $criteria);
        $query->joinWith('EenheidHoeveelheidOmschrijving', $join_behavior);

        return $this->getGsIngegevenSamenstellingens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsHandelsproducten is new, it will return
     * an empty collection; or if this GsHandelsproducten has previously
     * been saved, it will retrieve related GsIngegevenSamenstellingens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsHandelsproducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsIngegevenSamenstellingen[] List of GsIngegevenSamenstellingen objects
     */
    public function getGsIngegevenSamenstellingensJoinStamtoedieningswegOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsIngegevenSamenstellingenQuery::create(null, $criteria);
        $query->joinWith('StamtoedieningswegOmschrijving', $join_behavior);

        return $this->getGsIngegevenSamenstellingens($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->handelsproduktkode = null;
        $this->prkcode = null;
        $this->medisch_hulpmiddelkode = null;
        $this->handelsproduktnaamnummer = null;
        $this->merkstamnaam = null;
        $this->firmastamnaam = null;
        $this->produktgroep_thesaurusnummer = null;
        $this->produktgroep_kode = null;
        $this->soortelijk_gewicht = null;
        $this->aantal_ddds_per_basiseenh_produkt = null;
        $this->aantal_druppels_per_ml = null;
        $this->pifnummer_thesaurusnummer = null;
        $this->pifnummer = null;
        $this->fabrikant_produktkodering = null;
        $this->reden_niet_clusteren_thesaurusnr = null;
        $this->reden_niet_clusteren_kode = null;
        $this->ftk_1 = null;
        $this->ftk_2 = null;
        $this->ftk_3 = null;
        $this->ftk_4 = null;
        $this->ftk_5 = null;
        $this->informatoriumproductcode = null;
        $this->kode_combinatiepreparaat = null;
        $this->kode_vergift = null;
        $this->kode_rijvaardigheid = null;
        $this->kode_brandgevaarlijk = null;
        $this->gesteriliseerd_voor_geneesmiddelen = null;
        $this->hpkeenheid_thesaurusnummer = null;
        $this->hpkeenheid_kode = null;
        $this->oplosmiddel_hoeveelheid_1 = null;
        $this->oplosmiddel_aantal_1 = null;
        $this->oplosmiddel_hoeveelheid_2 = null;
        $this->oplosmiddel_aantal_2 = null;
        $this->farmaceutische_kwaliteit = null;
        $this->halffabrikaat_thesaurusnummer = null;
        $this->halffabrikaat_code = null;
        $this->deelbaarheid_aantal = null;
        $this->emballagemateriaal_thesaurusnummer = null;
        $this->emballagemateriaal_kode = null;
        $this->emballagesluiting_thesaurusnummer = null;
        $this->emballagesluiting_kode = null;
        $this->emballagedoseerinr_thesaurusnr = null;
        $this->emballagedoseerinrichting_kode = null;
        $this->hulpstoffen_identificerend = null;
        $this->kleur_thesaurusnummer = null;
        $this->kleur_kode = null;
        $this->smaak_thesaurusnummer = null;
        $this->smaak_kode = null;
        $this->bereidingsvoorschr_thesaurusnummer = null;
        $this->bereidingsvoorschrift_kode = null;
        $this->fysische_eigenschap_thesaurusnummer = null;
        $this->fysische_eigenschap_kode = null;
        $this->grondstofvorm_thesaurusnummer = null;
        $this->grondstofvorm_kode = null;
        $this->los_verkrijgbaar = null;
        $this->bioequivalente_groep = null;
        $this->kode_radioactieve_stof = null;
        $this->soort_hulpmiddel = null;
        $this->rzv_thesaurus_120 = null;
        $this->rzvvoorwaarden_bijlage_2 = null;
        $this->tekstmodule = null;
        $this->tekst_verwijzing = null;
        $this->hulpmiddel_volgens_awbz = null;
        $this->eenheid_inkoophoeveelheid_thesnr = null;
        $this->eenheid_inkoophoeveelheid = null;
        $this->basiseenheid_verpakking_thesnr = null;
        $this->basiseenheid_verpakking = null;
        $this->richtlijn_gebruik_ondergrens = null;
        $this->richtlijn_gebruik_bovengrens = null;
        $this->thesaurus_rzv_verstrekking = null;
        $this->rzvverstrekking = null;
        $this->thesaurus_rzv_rationaliteit = null;
        $this->beoordeling_rationaliteit = null;
        $this->thesaurus_rzv_beoordeling = null;
        $this->achtergrond_rationaliteit = null;
        $this->thesaurus_rzv_hulpmiddelen = null;
        $this->hulpmiddelen_zorg = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collGsArtikelEigenschappens) {
                foreach ($this->collGsArtikelEigenschappens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsArtikelens) {
                foreach ($this->collGsArtikelens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsBijzondereKenmerkens) {
                foreach ($this->collGsBijzondereKenmerkens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsDeclaratietabelDureGeneesmiddelens) {
                foreach ($this->collGsDeclaratietabelDureGeneesmiddelens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsIngegevenSamenstellingens) {
                foreach ($this->collGsIngegevenSamenstellingens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aGsPrescriptieProduct instanceof Persistent) {
              $this->aGsPrescriptieProduct->clearAllReferences($deep);
            }
            if ($this->aGsNamen instanceof Persistent) {
              $this->aGsNamen->clearAllReferences($deep);
            }
            if ($this->aInkoophoeveelheidOmschrijving instanceof Persistent) {
              $this->aInkoophoeveelheidOmschrijving->clearAllReferences($deep);
            }
            if ($this->aBasiseenheidOmschrijving instanceof Persistent) {
              $this->aBasiseenheidOmschrijving->clearAllReferences($deep);
            }
            if ($this->aEmballageMateriaalOmschrijving instanceof Persistent) {
              $this->aEmballageMateriaalOmschrijving->clearAllReferences($deep);
            }
            if ($this->aEmballageSluitingOmschrijving instanceof Persistent) {
              $this->aEmballageSluitingOmschrijving->clearAllReferences($deep);
            }
            if ($this->aEmballageDoseerinrichtingOmschrijving instanceof Persistent) {
              $this->aEmballageDoseerinrichtingOmschrijving->clearAllReferences($deep);
            }
            if ($this->aKleurOmschrijving instanceof Persistent) {
              $this->aKleurOmschrijving->clearAllReferences($deep);
            }
            if ($this->aSmaakOmschrijving instanceof Persistent) {
              $this->aSmaakOmschrijving->clearAllReferences($deep);
            }
            if ($this->aBereidingsvoorschrijftOmschrijving instanceof Persistent) {
              $this->aBereidingsvoorschrijftOmschrijving->clearAllReferences($deep);
            }
            if ($this->aProduktgroepOmschrijving instanceof Persistent) {
              $this->aProduktgroepOmschrijving->clearAllReferences($deep);
            }
            if ($this->aRzvVerstrekkingOmschrijving instanceof Persistent) {
              $this->aRzvVerstrekkingOmschrijving->clearAllReferences($deep);
            }
            if ($this->aRzvBijlage2Omschrijving instanceof Persistent) {
              $this->aRzvBijlage2Omschrijving->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collGsArtikelEigenschappens instanceof PropelCollection) {
            $this->collGsArtikelEigenschappens->clearIterator();
        }
        $this->collGsArtikelEigenschappens = null;
        if ($this->collGsArtikelens instanceof PropelCollection) {
            $this->collGsArtikelens->clearIterator();
        }
        $this->collGsArtikelens = null;
        if ($this->collGsBijzondereKenmerkens instanceof PropelCollection) {
            $this->collGsBijzondereKenmerkens->clearIterator();
        }
        $this->collGsBijzondereKenmerkens = null;
        if ($this->collGsDeclaratietabelDureGeneesmiddelens instanceof PropelCollection) {
            $this->collGsDeclaratietabelDureGeneesmiddelens->clearIterator();
        }
        $this->collGsDeclaratietabelDureGeneesmiddelens = null;
        if ($this->collGsIngegevenSamenstellingens instanceof PropelCollection) {
            $this->collGsIngegevenSamenstellingens->clearIterator();
        }
        $this->collGsIngegevenSamenstellingens = null;
        $this->aGsPrescriptieProduct = null;
        $this->aGsNamen = null;
        $this->aInkoophoeveelheidOmschrijving = null;
        $this->aBasiseenheidOmschrijving = null;
        $this->aEmballageMateriaalOmschrijving = null;
        $this->aEmballageSluitingOmschrijving = null;
        $this->aEmballageDoseerinrichtingOmschrijving = null;
        $this->aKleurOmschrijving = null;
        $this->aSmaakOmschrijving = null;
        $this->aBereidingsvoorschrijftOmschrijving = null;
        $this->aProduktgroepOmschrijving = null;
        $this->aRzvVerstrekkingOmschrijving = null;
        $this->aRzvBijlage2Omschrijving = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsHandelsproductenPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
