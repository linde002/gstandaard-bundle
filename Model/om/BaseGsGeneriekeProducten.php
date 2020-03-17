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
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodes;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProducten;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsNamen;
use PharmaIntelligence\GstandaardBundle\Model\GsNamenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProduct;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProductQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentific;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificQuery;

abstract class BaseGsGeneriekeProducten extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeProductenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsGeneriekeProductenPeer
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
     * The value for the generiekeproductcode field.
     * @var        int
     */
    protected $generiekeproductcode;

    /**
     * The value for the gskcode field.
     * @var        int
     */
    protected $gskcode;

    /**
     * The value for the farmaceutische_vorm_thesaurusnummer field.
     * @var        int
     */
    protected $farmaceutische_vorm_thesaurusnummer;

    /**
     * The value for the farmaceutische_vorm_code field.
     * @var        int
     */
    protected $farmaceutische_vorm_code;

    /**
     * The value for the toedieningsweg_thesaurusnummer field.
     * @var        int
     */
    protected $toedieningsweg_thesaurusnummer;

    /**
     * The value for the toedieningsweg_code field.
     * @var        int
     */
    protected $toedieningsweg_code;

    /**
     * The value for the naamnummer_volledige_gpknaam field.
     * @var        int
     */
    protected $naamnummer_volledige_gpknaam;

    /**
     * The value for the naamnummer_gpkstofnaam field.
     * @var        int
     */
    protected $naamnummer_gpkstofnaam;

    /**
     * The value for the ingegeven_sterkte_stofnamen field.
     * @var        string
     */
    protected $ingegeven_sterkte_stofnamen;

    /**
     * The value for the min_leeftijd_als_contraindicatie field.
     * @var        int
     */
    protected $min_leeftijd_als_contraindicatie;

    /**
     * The value for the minleeftijd_als_ci_tekstnummer field.
     * @var        int
     */
    protected $minleeftijd_als_ci_tekstnummer;

    /**
     * The value for the aantal_dagen_voorschrijfperiode field.
     * @var        int
     */
    protected $aantal_dagen_voorschrijfperiode;

    /**
     * The value for the tekstcode_voorschrijfperiode field.
     * @var        int
     */
    protected $tekstcode_voorschrijfperiode;

    /**
     * The value for the tnnr_waarschuwing_substitutie_voorschrijven_prk field.
     * @var        int
     */
    protected $tnnr_waarschuwing_substitutie_voorschrijven_prk;

    /**
     * The value for the waarschuwing_substitutie_en_voorschrijven_prk field.
     * @var        int
     */
    protected $waarschuwing_substitutie_en_voorschrijven_prk;

    /**
     * The value for the superproduktkode field.
     * @var        int
     */
    protected $superproduktkode;

    /**
     * The value for the stamtoedieningsweg_thesaurus_58 field.
     * @var        int
     */
    protected $stamtoedieningsweg_thesaurus_58;

    /**
     * The value for the stamtoedieningsweg_code field.
     * @var        int
     */
    protected $stamtoedieningsweg_code;

    /**
     * The value for the atccode field.
     * @var        string
     */
    protected $atccode;

    /**
     * The value for the basiseenheid_product_thesaurusnr field.
     * @var        int
     */
    protected $basiseenheid_product_thesaurusnr;

    /**
     * The value for the basiseenheid_product_kode field.
     * @var        int
     */
    protected $basiseenheid_product_kode;

    /**
     * @var        GsAtcCodes
     */
    protected $aGsAtcCodes;

    /**
     * @var        GsNamen
     */
    protected $aGsNamenRelatedByNaamnummerVolledigeGpknaam;

    /**
     * @var        GsNamen
     */
    protected $aStofnaam;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aFarmaceutischeVormOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aToedieningswegOmschrijving;

    /**
     * @var        PropelObjectCollection|GsArtikelEigenschappen[] Collection to store aggregation of GsArtikelEigenschappen objects.
     */
    protected $collGsArtikelEigenschappens;
    protected $collGsArtikelEigenschappensPartial;

    /**
     * @var        PropelObjectCollection|GsPrescriptieProduct[] Collection to store aggregation of GsPrescriptieProduct objects.
     */
    protected $collGsPrescriptieProducts;
    protected $collGsPrescriptieProductsPartial;

    /**
     * @var        PropelObjectCollection|GsVoorschrijfprGeneesmiddelIdentific[] Collection to store aggregation of GsVoorschrijfprGeneesmiddelIdentific objects.
     */
    protected $collGsVoorschrijfprGeneesmiddelIdentifics;
    protected $collGsVoorschrijfprGeneesmiddelIdentificsPartial;

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
    protected $gsPrescriptieProductsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsVoorschrijfprGeneesmiddelIdentificsScheduledForDeletion = null;

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
     * Get the [generiekeproductcode] column value.
     *
     * @return int
     */
    public function getGeneriekeproductcode()
    {

        return $this->generiekeproductcode;
    }

    /**
     * Get the [gskcode] column value.
     *
     * @return int
     */
    public function getGskcode()
    {

        return $this->gskcode;
    }

    /**
     * Get the [farmaceutische_vorm_thesaurusnummer] column value.
     *
     * @return int
     */
    public function getFarmaceutischeVormThesaurusnummer()
    {

        return $this->farmaceutische_vorm_thesaurusnummer;
    }

    /**
     * Get the [farmaceutische_vorm_code] column value.
     *
     * @return int
     */
    public function getFarmaceutischeVormCode()
    {

        return $this->farmaceutische_vorm_code;
    }

    /**
     * Get the [toedieningsweg_thesaurusnummer] column value.
     *
     * @return int
     */
    public function getToedieningswegThesaurusnummer()
    {

        return $this->toedieningsweg_thesaurusnummer;
    }

    /**
     * Get the [toedieningsweg_code] column value.
     *
     * @return int
     */
    public function getToedieningswegCode()
    {

        return $this->toedieningsweg_code;
    }

    /**
     * Get the [naamnummer_volledige_gpknaam] column value.
     *
     * @return int
     */
    public function getNaamnummerVolledigeGpknaam()
    {

        return $this->naamnummer_volledige_gpknaam;
    }

    /**
     * Get the [naamnummer_gpkstofnaam] column value.
     *
     * @return int
     */
    public function getNaamnummerGpkstofnaam()
    {

        return $this->naamnummer_gpkstofnaam;
    }

    /**
     * Get the [ingegeven_sterkte_stofnamen] column value.
     *
     * @return string
     */
    public function getIngegevenSterkteStofnamen()
    {

        return $this->ingegeven_sterkte_stofnamen;
    }

    /**
     * Get the [min_leeftijd_als_contraindicatie] column value.
     *
     * @return int
     */
    public function getMinLeeftijdAlsContraindicatie()
    {

        return $this->min_leeftijd_als_contraindicatie;
    }

    /**
     * Get the [minleeftijd_als_ci_tekstnummer] column value.
     *
     * @return int
     */
    public function getMinleeftijdAlsCiTekstnummer()
    {

        return $this->minleeftijd_als_ci_tekstnummer;
    }

    /**
     * Get the [aantal_dagen_voorschrijfperiode] column value.
     *
     * @return int
     */
    public function getAantalDagenVoorschrijfperiode()
    {

        return $this->aantal_dagen_voorschrijfperiode;
    }

    /**
     * Get the [tekstcode_voorschrijfperiode] column value.
     *
     * @return int
     */
    public function getTekstcodeVoorschrijfperiode()
    {

        return $this->tekstcode_voorschrijfperiode;
    }

    /**
     * Get the [tnnr_waarschuwing_substitutie_voorschrijven_prk] column value.
     *
     * @return int
     */
    public function getTnnrWaarschuwingSubstitutieVoorschrijvenPrk()
    {

        return $this->tnnr_waarschuwing_substitutie_voorschrijven_prk;
    }

    /**
     * Get the [waarschuwing_substitutie_en_voorschrijven_prk] column value.
     *
     * @return int
     */
    public function getWaarschuwingSubstitutieEnVoorschrijvenPrk()
    {

        return $this->waarschuwing_substitutie_en_voorschrijven_prk;
    }

    /**
     * Get the [superproduktkode] column value.
     *
     * @return int
     */
    public function getSuperproduktkode()
    {

        return $this->superproduktkode;
    }

    /**
     * Get the [stamtoedieningsweg_thesaurus_58] column value.
     *
     * @return int
     */
    public function getStamtoedieningswegThesaurus58()
    {

        return $this->stamtoedieningsweg_thesaurus_58;
    }

    /**
     * Get the [stamtoedieningsweg_code] column value.
     *
     * @return int
     */
    public function getStamtoedieningswegCode()
    {

        return $this->stamtoedieningsweg_code;
    }

    /**
     * Get the [atccode] column value.
     *
     * @return string
     */
    public function getAtccode()
    {

        return $this->atccode;
    }

    /**
     * Get the [basiseenheid_product_thesaurusnr] column value.
     *
     * @return int
     */
    public function getBasiseenheidProductThesaurusnr()
    {

        return $this->basiseenheid_product_thesaurusnr;
    }

    /**
     * Get the [basiseenheid_product_kode] column value.
     *
     * @return int
     */
    public function getBasiseenheidProductKode()
    {

        return $this->basiseenheid_product_kode;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [generiekeproductcode] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setGeneriekeproductcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->generiekeproductcode !== $v) {
            $this->generiekeproductcode = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE;
        }


        return $this;
    } // setGeneriekeproductcode()

    /**
     * Set the value of [gskcode] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setGskcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gskcode !== $v) {
            $this->gskcode = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::GSKCODE;
        }


        return $this;
    } // setGskcode()

    /**
     * Set the value of [farmaceutische_vorm_thesaurusnummer] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setFarmaceutischeVormThesaurusnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->farmaceutische_vorm_thesaurusnummer !== $v) {
            $this->farmaceutische_vorm_thesaurusnummer = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER;
        }

        if ($this->aFarmaceutischeVormOmschrijving !== null && $this->aFarmaceutischeVormOmschrijving->getThesaurusnummer() !== $v) {
            $this->aFarmaceutischeVormOmschrijving = null;
        }


        return $this;
    } // setFarmaceutischeVormThesaurusnummer()

    /**
     * Set the value of [farmaceutische_vorm_code] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setFarmaceutischeVormCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->farmaceutische_vorm_code !== $v) {
            $this->farmaceutische_vorm_code = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE;
        }

        if ($this->aFarmaceutischeVormOmschrijving !== null && $this->aFarmaceutischeVormOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aFarmaceutischeVormOmschrijving = null;
        }


        return $this;
    } // setFarmaceutischeVormCode()

    /**
     * Set the value of [toedieningsweg_thesaurusnummer] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setToedieningswegThesaurusnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->toedieningsweg_thesaurusnummer !== $v) {
            $this->toedieningsweg_thesaurusnummer = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER;
        }

        if ($this->aToedieningswegOmschrijving !== null && $this->aToedieningswegOmschrijving->getThesaurusnummer() !== $v) {
            $this->aToedieningswegOmschrijving = null;
        }


        return $this;
    } // setToedieningswegThesaurusnummer()

    /**
     * Set the value of [toedieningsweg_code] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setToedieningswegCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->toedieningsweg_code !== $v) {
            $this->toedieningsweg_code = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE;
        }

        if ($this->aToedieningswegOmschrijving !== null && $this->aToedieningswegOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aToedieningswegOmschrijving = null;
        }


        return $this;
    } // setToedieningswegCode()

    /**
     * Set the value of [naamnummer_volledige_gpknaam] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setNaamnummerVolledigeGpknaam($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->naamnummer_volledige_gpknaam !== $v) {
            $this->naamnummer_volledige_gpknaam = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM;
        }

        if ($this->aGsNamenRelatedByNaamnummerVolledigeGpknaam !== null && $this->aGsNamenRelatedByNaamnummerVolledigeGpknaam->getNaamnummer() !== $v) {
            $this->aGsNamenRelatedByNaamnummerVolledigeGpknaam = null;
        }


        return $this;
    } // setNaamnummerVolledigeGpknaam()

    /**
     * Set the value of [naamnummer_gpkstofnaam] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setNaamnummerGpkstofnaam($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->naamnummer_gpkstofnaam !== $v) {
            $this->naamnummer_gpkstofnaam = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM;
        }

        if ($this->aStofnaam !== null && $this->aStofnaam->getNaamnummer() !== $v) {
            $this->aStofnaam = null;
        }


        return $this;
    } // setNaamnummerGpkstofnaam()

    /**
     * Set the value of [ingegeven_sterkte_stofnamen] column.
     *
     * @param  string $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setIngegevenSterkteStofnamen($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ingegeven_sterkte_stofnamen !== $v) {
            $this->ingegeven_sterkte_stofnamen = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::INGEGEVEN_STERKTE_STOFNAMEN;
        }


        return $this;
    } // setIngegevenSterkteStofnamen()

    /**
     * Set the value of [min_leeftijd_als_contraindicatie] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setMinLeeftijdAlsContraindicatie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->min_leeftijd_als_contraindicatie !== $v) {
            $this->min_leeftijd_als_contraindicatie = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::MIN_LEEFTIJD_ALS_CONTRAINDICATIE;
        }


        return $this;
    } // setMinLeeftijdAlsContraindicatie()

    /**
     * Set the value of [minleeftijd_als_ci_tekstnummer] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setMinleeftijdAlsCiTekstnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->minleeftijd_als_ci_tekstnummer !== $v) {
            $this->minleeftijd_als_ci_tekstnummer = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::MINLEEFTIJD_ALS_CI_TEKSTNUMMER;
        }


        return $this;
    } // setMinleeftijdAlsCiTekstnummer()

    /**
     * Set the value of [aantal_dagen_voorschrijfperiode] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setAantalDagenVoorschrijfperiode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aantal_dagen_voorschrijfperiode !== $v) {
            $this->aantal_dagen_voorschrijfperiode = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::AANTAL_DAGEN_VOORSCHRIJFPERIODE;
        }


        return $this;
    } // setAantalDagenVoorschrijfperiode()

    /**
     * Set the value of [tekstcode_voorschrijfperiode] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setTekstcodeVoorschrijfperiode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekstcode_voorschrijfperiode !== $v) {
            $this->tekstcode_voorschrijfperiode = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::TEKSTCODE_VOORSCHRIJFPERIODE;
        }


        return $this;
    } // setTekstcodeVoorschrijfperiode()

    /**
     * Set the value of [tnnr_waarschuwing_substitutie_voorschrijven_prk] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setTnnrWaarschuwingSubstitutieVoorschrijvenPrk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tnnr_waarschuwing_substitutie_voorschrijven_prk !== $v) {
            $this->tnnr_waarschuwing_substitutie_voorschrijven_prk = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::TNNR_WAARSCHUWING_SUBSTITUTIE_VOORSCHRIJVEN_PRK;
        }


        return $this;
    } // setTnnrWaarschuwingSubstitutieVoorschrijvenPrk()

    /**
     * Set the value of [waarschuwing_substitutie_en_voorschrijven_prk] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setWaarschuwingSubstitutieEnVoorschrijvenPrk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->waarschuwing_substitutie_en_voorschrijven_prk !== $v) {
            $this->waarschuwing_substitutie_en_voorschrijven_prk = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::WAARSCHUWING_SUBSTITUTIE_EN_VOORSCHRIJVEN_PRK;
        }


        return $this;
    } // setWaarschuwingSubstitutieEnVoorschrijvenPrk()

    /**
     * Set the value of [superproduktkode] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setSuperproduktkode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->superproduktkode !== $v) {
            $this->superproduktkode = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::SUPERPRODUKTKODE;
        }


        return $this;
    } // setSuperproduktkode()

    /**
     * Set the value of [stamtoedieningsweg_thesaurus_58] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setStamtoedieningswegThesaurus58($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stamtoedieningsweg_thesaurus_58 !== $v) {
            $this->stamtoedieningsweg_thesaurus_58 = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_THESAURUS_58;
        }


        return $this;
    } // setStamtoedieningswegThesaurus58()

    /**
     * Set the value of [stamtoedieningsweg_code] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setStamtoedieningswegCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stamtoedieningsweg_code !== $v) {
            $this->stamtoedieningsweg_code = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_CODE;
        }


        return $this;
    } // setStamtoedieningswegCode()

    /**
     * Set the value of [atccode] column.
     *
     * @param  string $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setAtccode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->atccode !== $v) {
            $this->atccode = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::ATCCODE;
        }

        if ($this->aGsAtcCodes !== null && $this->aGsAtcCodes->getAtccode() !== $v) {
            $this->aGsAtcCodes = null;
        }


        return $this;
    } // setAtccode()

    /**
     * Set the value of [basiseenheid_product_thesaurusnr] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setBasiseenheidProductThesaurusnr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->basiseenheid_product_thesaurusnr !== $v) {
            $this->basiseenheid_product_thesaurusnr = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_THESAURUSNR;
        }


        return $this;
    } // setBasiseenheidProductThesaurusnr()

    /**
     * Set the value of [basiseenheid_product_kode] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setBasiseenheidProductKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->basiseenheid_product_kode !== $v) {
            $this->basiseenheid_product_kode = $v;
            $this->modifiedColumns[] = GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_KODE;
        }


        return $this;
    } // setBasiseenheidProductKode()

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
            $this->generiekeproductcode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->gskcode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->farmaceutische_vorm_thesaurusnummer = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->farmaceutische_vorm_code = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->toedieningsweg_thesaurusnummer = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->toedieningsweg_code = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->naamnummer_volledige_gpknaam = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->naamnummer_gpkstofnaam = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->ingegeven_sterkte_stofnamen = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->min_leeftijd_als_contraindicatie = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->minleeftijd_als_ci_tekstnummer = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->aantal_dagen_voorschrijfperiode = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->tekstcode_voorschrijfperiode = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->tnnr_waarschuwing_substitutie_voorschrijven_prk = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->waarschuwing_substitutie_en_voorschrijven_prk = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->superproduktkode = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->stamtoedieningsweg_thesaurus_58 = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->stamtoedieningsweg_code = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->atccode = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->basiseenheid_product_thesaurusnr = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->basiseenheid_product_kode = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 23; // 23 = GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsGeneriekeProducten object", $e);
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

        if ($this->aFarmaceutischeVormOmschrijving !== null && $this->farmaceutische_vorm_thesaurusnummer !== $this->aFarmaceutischeVormOmschrijving->getThesaurusnummer()) {
            $this->aFarmaceutischeVormOmschrijving = null;
        }
        if ($this->aFarmaceutischeVormOmschrijving !== null && $this->farmaceutische_vorm_code !== $this->aFarmaceutischeVormOmschrijving->getThesaurusItemnummer()) {
            $this->aFarmaceutischeVormOmschrijving = null;
        }
        if ($this->aToedieningswegOmschrijving !== null && $this->toedieningsweg_thesaurusnummer !== $this->aToedieningswegOmschrijving->getThesaurusnummer()) {
            $this->aToedieningswegOmschrijving = null;
        }
        if ($this->aToedieningswegOmschrijving !== null && $this->toedieningsweg_code !== $this->aToedieningswegOmschrijving->getThesaurusItemnummer()) {
            $this->aToedieningswegOmschrijving = null;
        }
        if ($this->aGsNamenRelatedByNaamnummerVolledigeGpknaam !== null && $this->naamnummer_volledige_gpknaam !== $this->aGsNamenRelatedByNaamnummerVolledigeGpknaam->getNaamnummer()) {
            $this->aGsNamenRelatedByNaamnummerVolledigeGpknaam = null;
        }
        if ($this->aStofnaam !== null && $this->naamnummer_gpkstofnaam !== $this->aStofnaam->getNaamnummer()) {
            $this->aStofnaam = null;
        }
        if ($this->aGsAtcCodes !== null && $this->atccode !== $this->aGsAtcCodes->getAtccode()) {
            $this->aGsAtcCodes = null;
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
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsGeneriekeProductenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGsAtcCodes = null;
            $this->aGsNamenRelatedByNaamnummerVolledigeGpknaam = null;
            $this->aStofnaam = null;
            $this->aFarmaceutischeVormOmschrijving = null;
            $this->aToedieningswegOmschrijving = null;
            $this->collGsArtikelEigenschappens = null;

            $this->collGsPrescriptieProducts = null;

            $this->collGsVoorschrijfprGeneesmiddelIdentifics = null;

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
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsGeneriekeProductenQuery::create()
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
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsGeneriekeProductenPeer::addInstanceToPool($this);
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

            if ($this->aGsAtcCodes !== null) {
                if ($this->aGsAtcCodes->isModified() || $this->aGsAtcCodes->isNew()) {
                    $affectedRows += $this->aGsAtcCodes->save($con);
                }
                $this->setGsAtcCodes($this->aGsAtcCodes);
            }

            if ($this->aGsNamenRelatedByNaamnummerVolledigeGpknaam !== null) {
                if ($this->aGsNamenRelatedByNaamnummerVolledigeGpknaam->isModified() || $this->aGsNamenRelatedByNaamnummerVolledigeGpknaam->isNew()) {
                    $affectedRows += $this->aGsNamenRelatedByNaamnummerVolledigeGpknaam->save($con);
                }
                $this->setGsNamenRelatedByNaamnummerVolledigeGpknaam($this->aGsNamenRelatedByNaamnummerVolledigeGpknaam);
            }

            if ($this->aStofnaam !== null) {
                if ($this->aStofnaam->isModified() || $this->aStofnaam->isNew()) {
                    $affectedRows += $this->aStofnaam->save($con);
                }
                $this->setStofnaam($this->aStofnaam);
            }

            if ($this->aFarmaceutischeVormOmschrijving !== null) {
                if ($this->aFarmaceutischeVormOmschrijving->isModified() || $this->aFarmaceutischeVormOmschrijving->isNew()) {
                    $affectedRows += $this->aFarmaceutischeVormOmschrijving->save($con);
                }
                $this->setFarmaceutischeVormOmschrijving($this->aFarmaceutischeVormOmschrijving);
            }

            if ($this->aToedieningswegOmschrijving !== null) {
                if ($this->aToedieningswegOmschrijving->isModified() || $this->aToedieningswegOmschrijving->isNew()) {
                    $affectedRows += $this->aToedieningswegOmschrijving->save($con);
                }
                $this->setToedieningswegOmschrijving($this->aToedieningswegOmschrijving);
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

            if ($this->gsPrescriptieProductsScheduledForDeletion !== null) {
                if (!$this->gsPrescriptieProductsScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsPrescriptieProductsScheduledForDeletion as $gsPrescriptieProduct) {
                        // need to save related object because we set the relation to null
                        $gsPrescriptieProduct->save($con);
                    }
                    $this->gsPrescriptieProductsScheduledForDeletion = null;
                }
            }

            if ($this->collGsPrescriptieProducts !== null) {
                foreach ($this->collGsPrescriptieProducts as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsVoorschrijfprGeneesmiddelIdentificsScheduledForDeletion !== null) {
                if (!$this->gsVoorschrijfprGeneesmiddelIdentificsScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsVoorschrijfprGeneesmiddelIdentificsScheduledForDeletion as $gsVoorschrijfprGeneesmiddelIdentific) {
                        // need to save related object because we set the relation to null
                        $gsVoorschrijfprGeneesmiddelIdentific->save($con);
                    }
                    $this->gsVoorschrijfprGeneesmiddelIdentificsScheduledForDeletion = null;
                }
            }

            if ($this->collGsVoorschrijfprGeneesmiddelIdentifics !== null) {
                foreach ($this->collGsVoorschrijfprGeneesmiddelIdentifics as $referrerFK) {
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
        if ($this->isColumnModified(GsGeneriekeProductenPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE)) {
            $modifiedColumns[':p' . $index++]  = '`generiekeproductcode`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::GSKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`gskcode`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`farmaceutische_vorm_thesaurusnummer`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`farmaceutische_vorm_code`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`toedieningsweg_thesaurusnummer`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`toedieningsweg_code`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM)) {
            $modifiedColumns[':p' . $index++]  = '`naamnummer_volledige_gpknaam`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM)) {
            $modifiedColumns[':p' . $index++]  = '`naamnummer_gpkstofnaam`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::INGEGEVEN_STERKTE_STOFNAMEN)) {
            $modifiedColumns[':p' . $index++]  = '`ingegeven_sterkte_stofnamen`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::MIN_LEEFTIJD_ALS_CONTRAINDICATIE)) {
            $modifiedColumns[':p' . $index++]  = '`min_leeftijd_als_contraindicatie`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::MINLEEFTIJD_ALS_CI_TEKSTNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`minleeftijd_als_ci_tekstnummer`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::AANTAL_DAGEN_VOORSCHRIJFPERIODE)) {
            $modifiedColumns[':p' . $index++]  = '`aantal_dagen_voorschrijfperiode`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::TEKSTCODE_VOORSCHRIJFPERIODE)) {
            $modifiedColumns[':p' . $index++]  = '`tekstcode_voorschrijfperiode`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::TNNR_WAARSCHUWING_SUBSTITUTIE_VOORSCHRIJVEN_PRK)) {
            $modifiedColumns[':p' . $index++]  = '`tnnr_waarschuwing_substitutie_voorschrijven_prk`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::WAARSCHUWING_SUBSTITUTIE_EN_VOORSCHRIJVEN_PRK)) {
            $modifiedColumns[':p' . $index++]  = '`waarschuwing_substitutie_en_voorschrijven_prk`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::SUPERPRODUKTKODE)) {
            $modifiedColumns[':p' . $index++]  = '`superproduktkode`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_THESAURUS_58)) {
            $modifiedColumns[':p' . $index++]  = '`stamtoedieningsweg_thesaurus_58`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`stamtoedieningsweg_code`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::ATCCODE)) {
            $modifiedColumns[':p' . $index++]  = '`atccode`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_THESAURUSNR)) {
            $modifiedColumns[':p' . $index++]  = '`basiseenheid_product_thesaurusnr`';
        }
        if ($this->isColumnModified(GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`basiseenheid_product_kode`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_generieke_producten` (%s) VALUES (%s)',
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
                    case '`generiekeproductcode`':
                        $stmt->bindValue($identifier, $this->generiekeproductcode, PDO::PARAM_INT);
                        break;
                    case '`gskcode`':
                        $stmt->bindValue($identifier, $this->gskcode, PDO::PARAM_INT);
                        break;
                    case '`farmaceutische_vorm_thesaurusnummer`':
                        $stmt->bindValue($identifier, $this->farmaceutische_vorm_thesaurusnummer, PDO::PARAM_INT);
                        break;
                    case '`farmaceutische_vorm_code`':
                        $stmt->bindValue($identifier, $this->farmaceutische_vorm_code, PDO::PARAM_INT);
                        break;
                    case '`toedieningsweg_thesaurusnummer`':
                        $stmt->bindValue($identifier, $this->toedieningsweg_thesaurusnummer, PDO::PARAM_INT);
                        break;
                    case '`toedieningsweg_code`':
                        $stmt->bindValue($identifier, $this->toedieningsweg_code, PDO::PARAM_INT);
                        break;
                    case '`naamnummer_volledige_gpknaam`':
                        $stmt->bindValue($identifier, $this->naamnummer_volledige_gpknaam, PDO::PARAM_INT);
                        break;
                    case '`naamnummer_gpkstofnaam`':
                        $stmt->bindValue($identifier, $this->naamnummer_gpkstofnaam, PDO::PARAM_INT);
                        break;
                    case '`ingegeven_sterkte_stofnamen`':
                        $stmt->bindValue($identifier, $this->ingegeven_sterkte_stofnamen, PDO::PARAM_STR);
                        break;
                    case '`min_leeftijd_als_contraindicatie`':
                        $stmt->bindValue($identifier, $this->min_leeftijd_als_contraindicatie, PDO::PARAM_INT);
                        break;
                    case '`minleeftijd_als_ci_tekstnummer`':
                        $stmt->bindValue($identifier, $this->minleeftijd_als_ci_tekstnummer, PDO::PARAM_INT);
                        break;
                    case '`aantal_dagen_voorschrijfperiode`':
                        $stmt->bindValue($identifier, $this->aantal_dagen_voorschrijfperiode, PDO::PARAM_INT);
                        break;
                    case '`tekstcode_voorschrijfperiode`':
                        $stmt->bindValue($identifier, $this->tekstcode_voorschrijfperiode, PDO::PARAM_INT);
                        break;
                    case '`tnnr_waarschuwing_substitutie_voorschrijven_prk`':
                        $stmt->bindValue($identifier, $this->tnnr_waarschuwing_substitutie_voorschrijven_prk, PDO::PARAM_INT);
                        break;
                    case '`waarschuwing_substitutie_en_voorschrijven_prk`':
                        $stmt->bindValue($identifier, $this->waarschuwing_substitutie_en_voorschrijven_prk, PDO::PARAM_INT);
                        break;
                    case '`superproduktkode`':
                        $stmt->bindValue($identifier, $this->superproduktkode, PDO::PARAM_INT);
                        break;
                    case '`stamtoedieningsweg_thesaurus_58`':
                        $stmt->bindValue($identifier, $this->stamtoedieningsweg_thesaurus_58, PDO::PARAM_INT);
                        break;
                    case '`stamtoedieningsweg_code`':
                        $stmt->bindValue($identifier, $this->stamtoedieningsweg_code, PDO::PARAM_INT);
                        break;
                    case '`atccode`':
                        $stmt->bindValue($identifier, $this->atccode, PDO::PARAM_STR);
                        break;
                    case '`basiseenheid_product_thesaurusnr`':
                        $stmt->bindValue($identifier, $this->basiseenheid_product_thesaurusnr, PDO::PARAM_INT);
                        break;
                    case '`basiseenheid_product_kode`':
                        $stmt->bindValue($identifier, $this->basiseenheid_product_kode, PDO::PARAM_INT);
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

            if ($this->aGsAtcCodes !== null) {
                if (!$this->aGsAtcCodes->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsAtcCodes->getValidationFailures());
                }
            }

            if ($this->aGsNamenRelatedByNaamnummerVolledigeGpknaam !== null) {
                if (!$this->aGsNamenRelatedByNaamnummerVolledigeGpknaam->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsNamenRelatedByNaamnummerVolledigeGpknaam->getValidationFailures());
                }
            }

            if ($this->aStofnaam !== null) {
                if (!$this->aStofnaam->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aStofnaam->getValidationFailures());
                }
            }

            if ($this->aFarmaceutischeVormOmschrijving !== null) {
                if (!$this->aFarmaceutischeVormOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aFarmaceutischeVormOmschrijving->getValidationFailures());
                }
            }

            if ($this->aToedieningswegOmschrijving !== null) {
                if (!$this->aToedieningswegOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aToedieningswegOmschrijving->getValidationFailures());
                }
            }


            if (($retval = GsGeneriekeProductenPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collGsArtikelEigenschappens !== null) {
                    foreach ($this->collGsArtikelEigenschappens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsPrescriptieProducts !== null) {
                    foreach ($this->collGsPrescriptieProducts as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsVoorschrijfprGeneesmiddelIdentifics !== null) {
                    foreach ($this->collGsVoorschrijfprGeneesmiddelIdentifics as $referrerFK) {
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
        $pos = GsGeneriekeProductenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getGeneriekeproductcode();
                break;
            case 3:
                return $this->getGskcode();
                break;
            case 4:
                return $this->getFarmaceutischeVormThesaurusnummer();
                break;
            case 5:
                return $this->getFarmaceutischeVormCode();
                break;
            case 6:
                return $this->getToedieningswegThesaurusnummer();
                break;
            case 7:
                return $this->getToedieningswegCode();
                break;
            case 8:
                return $this->getNaamnummerVolledigeGpknaam();
                break;
            case 9:
                return $this->getNaamnummerGpkstofnaam();
                break;
            case 10:
                return $this->getIngegevenSterkteStofnamen();
                break;
            case 11:
                return $this->getMinLeeftijdAlsContraindicatie();
                break;
            case 12:
                return $this->getMinleeftijdAlsCiTekstnummer();
                break;
            case 13:
                return $this->getAantalDagenVoorschrijfperiode();
                break;
            case 14:
                return $this->getTekstcodeVoorschrijfperiode();
                break;
            case 15:
                return $this->getTnnrWaarschuwingSubstitutieVoorschrijvenPrk();
                break;
            case 16:
                return $this->getWaarschuwingSubstitutieEnVoorschrijvenPrk();
                break;
            case 17:
                return $this->getSuperproduktkode();
                break;
            case 18:
                return $this->getStamtoedieningswegThesaurus58();
                break;
            case 19:
                return $this->getStamtoedieningswegCode();
                break;
            case 20:
                return $this->getAtccode();
                break;
            case 21:
                return $this->getBasiseenheidProductThesaurusnr();
                break;
            case 22:
                return $this->getBasiseenheidProductKode();
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
        if (isset($alreadyDumpedObjects['GsGeneriekeProducten'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsGeneriekeProducten'][$this->getPrimaryKey()] = true;
        $keys = GsGeneriekeProductenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getGeneriekeproductcode(),
            $keys[3] => $this->getGskcode(),
            $keys[4] => $this->getFarmaceutischeVormThesaurusnummer(),
            $keys[5] => $this->getFarmaceutischeVormCode(),
            $keys[6] => $this->getToedieningswegThesaurusnummer(),
            $keys[7] => $this->getToedieningswegCode(),
            $keys[8] => $this->getNaamnummerVolledigeGpknaam(),
            $keys[9] => $this->getNaamnummerGpkstofnaam(),
            $keys[10] => $this->getIngegevenSterkteStofnamen(),
            $keys[11] => $this->getMinLeeftijdAlsContraindicatie(),
            $keys[12] => $this->getMinleeftijdAlsCiTekstnummer(),
            $keys[13] => $this->getAantalDagenVoorschrijfperiode(),
            $keys[14] => $this->getTekstcodeVoorschrijfperiode(),
            $keys[15] => $this->getTnnrWaarschuwingSubstitutieVoorschrijvenPrk(),
            $keys[16] => $this->getWaarschuwingSubstitutieEnVoorschrijvenPrk(),
            $keys[17] => $this->getSuperproduktkode(),
            $keys[18] => $this->getStamtoedieningswegThesaurus58(),
            $keys[19] => $this->getStamtoedieningswegCode(),
            $keys[20] => $this->getAtccode(),
            $keys[21] => $this->getBasiseenheidProductThesaurusnr(),
            $keys[22] => $this->getBasiseenheidProductKode(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aGsAtcCodes) {
                $result['GsAtcCodes'] = $this->aGsAtcCodes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aGsNamenRelatedByNaamnummerVolledigeGpknaam) {
                $result['GsNamenRelatedByNaamnummerVolledigeGpknaam'] = $this->aGsNamenRelatedByNaamnummerVolledigeGpknaam->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aStofnaam) {
                $result['Stofnaam'] = $this->aStofnaam->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aFarmaceutischeVormOmschrijving) {
                $result['FarmaceutischeVormOmschrijving'] = $this->aFarmaceutischeVormOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aToedieningswegOmschrijving) {
                $result['ToedieningswegOmschrijving'] = $this->aToedieningswegOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collGsArtikelEigenschappens) {
                $result['GsArtikelEigenschappens'] = $this->collGsArtikelEigenschappens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsPrescriptieProducts) {
                $result['GsPrescriptieProducts'] = $this->collGsPrescriptieProducts->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsVoorschrijfprGeneesmiddelIdentifics) {
                $result['GsVoorschrijfprGeneesmiddelIdentifics'] = $this->collGsVoorschrijfprGeneesmiddelIdentifics->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = GsGeneriekeProductenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setGeneriekeproductcode($value);
                break;
            case 3:
                $this->setGskcode($value);
                break;
            case 4:
                $this->setFarmaceutischeVormThesaurusnummer($value);
                break;
            case 5:
                $this->setFarmaceutischeVormCode($value);
                break;
            case 6:
                $this->setToedieningswegThesaurusnummer($value);
                break;
            case 7:
                $this->setToedieningswegCode($value);
                break;
            case 8:
                $this->setNaamnummerVolledigeGpknaam($value);
                break;
            case 9:
                $this->setNaamnummerGpkstofnaam($value);
                break;
            case 10:
                $this->setIngegevenSterkteStofnamen($value);
                break;
            case 11:
                $this->setMinLeeftijdAlsContraindicatie($value);
                break;
            case 12:
                $this->setMinleeftijdAlsCiTekstnummer($value);
                break;
            case 13:
                $this->setAantalDagenVoorschrijfperiode($value);
                break;
            case 14:
                $this->setTekstcodeVoorschrijfperiode($value);
                break;
            case 15:
                $this->setTnnrWaarschuwingSubstitutieVoorschrijvenPrk($value);
                break;
            case 16:
                $this->setWaarschuwingSubstitutieEnVoorschrijvenPrk($value);
                break;
            case 17:
                $this->setSuperproduktkode($value);
                break;
            case 18:
                $this->setStamtoedieningswegThesaurus58($value);
                break;
            case 19:
                $this->setStamtoedieningswegCode($value);
                break;
            case 20:
                $this->setAtccode($value);
                break;
            case 21:
                $this->setBasiseenheidProductThesaurusnr($value);
                break;
            case 22:
                $this->setBasiseenheidProductKode($value);
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
        $keys = GsGeneriekeProductenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setGeneriekeproductcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setGskcode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setFarmaceutischeVormThesaurusnummer($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFarmaceutischeVormCode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setToedieningswegThesaurusnummer($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setToedieningswegCode($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNaamnummerVolledigeGpknaam($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNaamnummerGpkstofnaam($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIngegevenSterkteStofnamen($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setMinLeeftijdAlsContraindicatie($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setMinleeftijdAlsCiTekstnummer($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAantalDagenVoorschrijfperiode($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setTekstcodeVoorschrijfperiode($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setTnnrWaarschuwingSubstitutieVoorschrijvenPrk($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setWaarschuwingSubstitutieEnVoorschrijvenPrk($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setSuperproduktkode($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setStamtoedieningswegThesaurus58($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setStamtoedieningswegCode($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setAtccode($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setBasiseenheidProductThesaurusnr($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setBasiseenheidProductKode($arr[$keys[22]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsGeneriekeProductenPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsGeneriekeProductenPeer::BESTANDNUMMER)) $criteria->add(GsGeneriekeProductenPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::MUTATIEKODE)) $criteria->add(GsGeneriekeProductenPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE)) $criteria->add(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $this->generiekeproductcode);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::GSKCODE)) $criteria->add(GsGeneriekeProductenPeer::GSKCODE, $this->gskcode);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER)) $criteria->add(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER, $this->farmaceutische_vorm_thesaurusnummer);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE)) $criteria->add(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE, $this->farmaceutische_vorm_code);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER)) $criteria->add(GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER, $this->toedieningsweg_thesaurusnummer);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE)) $criteria->add(GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE, $this->toedieningsweg_code);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM)) $criteria->add(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM, $this->naamnummer_volledige_gpknaam);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM)) $criteria->add(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM, $this->naamnummer_gpkstofnaam);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::INGEGEVEN_STERKTE_STOFNAMEN)) $criteria->add(GsGeneriekeProductenPeer::INGEGEVEN_STERKTE_STOFNAMEN, $this->ingegeven_sterkte_stofnamen);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::MIN_LEEFTIJD_ALS_CONTRAINDICATIE)) $criteria->add(GsGeneriekeProductenPeer::MIN_LEEFTIJD_ALS_CONTRAINDICATIE, $this->min_leeftijd_als_contraindicatie);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::MINLEEFTIJD_ALS_CI_TEKSTNUMMER)) $criteria->add(GsGeneriekeProductenPeer::MINLEEFTIJD_ALS_CI_TEKSTNUMMER, $this->minleeftijd_als_ci_tekstnummer);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::AANTAL_DAGEN_VOORSCHRIJFPERIODE)) $criteria->add(GsGeneriekeProductenPeer::AANTAL_DAGEN_VOORSCHRIJFPERIODE, $this->aantal_dagen_voorschrijfperiode);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::TEKSTCODE_VOORSCHRIJFPERIODE)) $criteria->add(GsGeneriekeProductenPeer::TEKSTCODE_VOORSCHRIJFPERIODE, $this->tekstcode_voorschrijfperiode);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::TNNR_WAARSCHUWING_SUBSTITUTIE_VOORSCHRIJVEN_PRK)) $criteria->add(GsGeneriekeProductenPeer::TNNR_WAARSCHUWING_SUBSTITUTIE_VOORSCHRIJVEN_PRK, $this->tnnr_waarschuwing_substitutie_voorschrijven_prk);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::WAARSCHUWING_SUBSTITUTIE_EN_VOORSCHRIJVEN_PRK)) $criteria->add(GsGeneriekeProductenPeer::WAARSCHUWING_SUBSTITUTIE_EN_VOORSCHRIJVEN_PRK, $this->waarschuwing_substitutie_en_voorschrijven_prk);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::SUPERPRODUKTKODE)) $criteria->add(GsGeneriekeProductenPeer::SUPERPRODUKTKODE, $this->superproduktkode);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_THESAURUS_58)) $criteria->add(GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, $this->stamtoedieningsweg_thesaurus_58);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_CODE)) $criteria->add(GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_CODE, $this->stamtoedieningsweg_code);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::ATCCODE)) $criteria->add(GsGeneriekeProductenPeer::ATCCODE, $this->atccode);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_THESAURUSNR)) $criteria->add(GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_THESAURUSNR, $this->basiseenheid_product_thesaurusnr);
        if ($this->isColumnModified(GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_KODE)) $criteria->add(GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_KODE, $this->basiseenheid_product_kode);

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
        $criteria = new Criteria(GsGeneriekeProductenPeer::DATABASE_NAME);
        $criteria->add(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $this->generiekeproductcode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getGeneriekeproductcode();
    }

    /**
     * Generic method to set the primary key (generiekeproductcode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setGeneriekeproductcode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getGeneriekeproductcode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsGeneriekeProducten (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setGskcode($this->getGskcode());
        $copyObj->setFarmaceutischeVormThesaurusnummer($this->getFarmaceutischeVormThesaurusnummer());
        $copyObj->setFarmaceutischeVormCode($this->getFarmaceutischeVormCode());
        $copyObj->setToedieningswegThesaurusnummer($this->getToedieningswegThesaurusnummer());
        $copyObj->setToedieningswegCode($this->getToedieningswegCode());
        $copyObj->setNaamnummerVolledigeGpknaam($this->getNaamnummerVolledigeGpknaam());
        $copyObj->setNaamnummerGpkstofnaam($this->getNaamnummerGpkstofnaam());
        $copyObj->setIngegevenSterkteStofnamen($this->getIngegevenSterkteStofnamen());
        $copyObj->setMinLeeftijdAlsContraindicatie($this->getMinLeeftijdAlsContraindicatie());
        $copyObj->setMinleeftijdAlsCiTekstnummer($this->getMinleeftijdAlsCiTekstnummer());
        $copyObj->setAantalDagenVoorschrijfperiode($this->getAantalDagenVoorschrijfperiode());
        $copyObj->setTekstcodeVoorschrijfperiode($this->getTekstcodeVoorschrijfperiode());
        $copyObj->setTnnrWaarschuwingSubstitutieVoorschrijvenPrk($this->getTnnrWaarschuwingSubstitutieVoorschrijvenPrk());
        $copyObj->setWaarschuwingSubstitutieEnVoorschrijvenPrk($this->getWaarschuwingSubstitutieEnVoorschrijvenPrk());
        $copyObj->setSuperproduktkode($this->getSuperproduktkode());
        $copyObj->setStamtoedieningswegThesaurus58($this->getStamtoedieningswegThesaurus58());
        $copyObj->setStamtoedieningswegCode($this->getStamtoedieningswegCode());
        $copyObj->setAtccode($this->getAtccode());
        $copyObj->setBasiseenheidProductThesaurusnr($this->getBasiseenheidProductThesaurusnr());
        $copyObj->setBasiseenheidProductKode($this->getBasiseenheidProductKode());

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

            foreach ($this->getGsPrescriptieProducts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsPrescriptieProduct($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsVoorschrijfprGeneesmiddelIdentifics() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsVoorschrijfprGeneesmiddelIdentific($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setGeneriekeproductcode(NULL); // this is a auto-increment column, so set to default value
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
     * @return GsGeneriekeProducten Clone of current object.
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
     * @return GsGeneriekeProductenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsGeneriekeProductenPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsAtcCodes object.
     *
     * @param                  GsAtcCodes $v
     * @return GsGeneriekeProducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsAtcCodes(GsAtcCodes $v = null)
    {
        if ($v === null) {
            $this->setAtccode(NULL);
        } else {
            $this->setAtccode($v->getAtccode());
        }

        $this->aGsAtcCodes = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsAtcCodes object, it will not be re-added.
        if ($v !== null) {
            $v->addGsGeneriekeProducten($this);
        }


        return $this;
    }


    /**
     * Get the associated GsAtcCodes object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsAtcCodes The associated GsAtcCodes object.
     * @throws PropelException
     */
    public function getGsAtcCodes(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsAtcCodes === null && (($this->atccode !== "" && $this->atccode !== null)) && $doQuery) {
            $this->aGsAtcCodes = GsAtcCodesQuery::create()->findPk($this->atccode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsAtcCodes->addGsGeneriekeProductens($this);
             */
        }

        return $this->aGsAtcCodes;
    }

    /**
     * Declares an association between this object and a GsNamen object.
     *
     * @param                  GsNamen $v
     * @return GsGeneriekeProducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsNamenRelatedByNaamnummerVolledigeGpknaam(GsNamen $v = null)
    {
        if ($v === null) {
            $this->setNaamnummerVolledigeGpknaam(NULL);
        } else {
            $this->setNaamnummerVolledigeGpknaam($v->getNaamnummer());
        }

        $this->aGsNamenRelatedByNaamnummerVolledigeGpknaam = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsNamen object, it will not be re-added.
        if ($v !== null) {
            $v->addGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam($this);
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
    public function getGsNamenRelatedByNaamnummerVolledigeGpknaam(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsNamenRelatedByNaamnummerVolledigeGpknaam === null && ($this->naamnummer_volledige_gpknaam !== null) && $doQuery) {
            $this->aGsNamenRelatedByNaamnummerVolledigeGpknaam = GsNamenQuery::create()->findPk($this->naamnummer_volledige_gpknaam, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsNamenRelatedByNaamnummerVolledigeGpknaam->addGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam($this);
             */
        }

        return $this->aGsNamenRelatedByNaamnummerVolledigeGpknaam;
    }

    /**
     * Declares an association between this object and a GsNamen object.
     *
     * @param                  GsNamen $v
     * @return GsGeneriekeProducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setStofnaam(GsNamen $v = null)
    {
        if ($v === null) {
            $this->setNaamnummerGpkstofnaam(NULL);
        } else {
            $this->setNaamnummerGpkstofnaam($v->getNaamnummer());
        }

        $this->aStofnaam = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsNamen object, it will not be re-added.
        if ($v !== null) {
            $v->addGeneriekeProducten($this);
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
    public function getStofnaam(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aStofnaam === null && ($this->naamnummer_gpkstofnaam !== null) && $doQuery) {
            $this->aStofnaam = GsNamenQuery::create()->findPk($this->naamnummer_gpkstofnaam, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aStofnaam->addGeneriekeProductens($this);
             */
        }

        return $this->aStofnaam;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsGeneriekeProducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setFarmaceutischeVormOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setFarmaceutischeVormThesaurusnummer(NULL);
        } else {
            $this->setFarmaceutischeVormThesaurusnummer($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setFarmaceutischeVormCode(NULL);
        } else {
            $this->setFarmaceutischeVormCode($v->getThesaurusItemnummer());
        }

        $this->aFarmaceutischeVormOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($this);
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
    public function getFarmaceutischeVormOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aFarmaceutischeVormOmschrijving === null && ($this->farmaceutische_vorm_thesaurusnummer !== null && $this->farmaceutische_vorm_code !== null) && $doQuery) {
            $this->aFarmaceutischeVormOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->farmaceutische_vorm_thesaurusnummer, $this->farmaceutische_vorm_code), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aFarmaceutischeVormOmschrijving->addGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($this);
             */
        }

        return $this->aFarmaceutischeVormOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsGeneriekeProducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setToedieningswegOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setToedieningswegThesaurusnummer(NULL);
        } else {
            $this->setToedieningswegThesaurusnummer($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setToedieningswegCode(NULL);
        } else {
            $this->setToedieningswegCode($v->getThesaurusItemnummer());
        }

        $this->aToedieningswegOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode($this);
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
    public function getToedieningswegOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aToedieningswegOmschrijving === null && ($this->toedieningsweg_thesaurusnummer !== null && $this->toedieningsweg_code !== null) && $doQuery) {
            $this->aToedieningswegOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->toedieningsweg_thesaurusnummer, $this->toedieningsweg_code), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aToedieningswegOmschrijving->addGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode($this);
             */
        }

        return $this->aToedieningswegOmschrijving;
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
        if ('GsPrescriptieProduct' == $relationName) {
            $this->initGsPrescriptieProducts();
        }
        if ('GsVoorschrijfprGeneesmiddelIdentific' == $relationName) {
            $this->initGsVoorschrijfprGeneesmiddelIdentifics();
        }
    }

    /**
     * Clears out the collGsArtikelEigenschappens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsGeneriekeProducten The current object (for fluent API support)
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
     * If this GsGeneriekeProducten is new, it will return
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
                    ->filterByGsGeneriekeProducten($this)
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
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setGsArtikelEigenschappens(PropelCollection $gsArtikelEigenschappens, PropelPDO $con = null)
    {
        $gsArtikelEigenschappensToDelete = $this->getGsArtikelEigenschappens(new Criteria(), $con)->diff($gsArtikelEigenschappens);


        $this->gsArtikelEigenschappensScheduledForDeletion = $gsArtikelEigenschappensToDelete;

        foreach ($gsArtikelEigenschappensToDelete as $gsArtikelEigenschappenRemoved) {
            $gsArtikelEigenschappenRemoved->setGsGeneriekeProducten(null);
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
                ->filterByGsGeneriekeProducten($this)
                ->count($con);
        }

        return count($this->collGsArtikelEigenschappens);
    }

    /**
     * Method called to associate a GsArtikelEigenschappen object to this object
     * through the GsArtikelEigenschappen foreign key attribute.
     *
     * @param    GsArtikelEigenschappen $l GsArtikelEigenschappen
     * @return GsGeneriekeProducten The current object (for fluent API support)
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
        $gsArtikelEigenschappen->setGsGeneriekeProducten($this);
    }

    /**
     * @param	GsArtikelEigenschappen $gsArtikelEigenschappen The gsArtikelEigenschappen object to remove.
     * @return GsGeneriekeProducten The current object (for fluent API support)
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
            $gsArtikelEigenschappen->setGsGeneriekeProducten(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsGeneriekeProducten is new, it will return
     * an empty collection; or if this GsGeneriekeProducten has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsGeneriekeProducten.
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
     * Otherwise if this GsGeneriekeProducten is new, it will return
     * an empty collection; or if this GsGeneriekeProducten has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsGeneriekeProducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     */
    public function getGsArtikelEigenschappensJoinGsHandelsproducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelEigenschappenQuery::create(null, $criteria);
        $query->joinWith('GsHandelsproducten', $join_behavior);

        return $this->getGsArtikelEigenschappens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsGeneriekeProducten is new, it will return
     * an empty collection; or if this GsGeneriekeProducten has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsGeneriekeProducten.
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
     * Otherwise if this GsGeneriekeProducten is new, it will return
     * an empty collection; or if this GsGeneriekeProducten has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsGeneriekeProducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     */
    public function getGsArtikelEigenschappensJoinGsVoorschrijfprGeneesmiddelIdentific($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelEigenschappenQuery::create(null, $criteria);
        $query->joinWith('GsVoorschrijfprGeneesmiddelIdentific', $join_behavior);

        return $this->getGsArtikelEigenschappens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsGeneriekeProducten is new, it will return
     * an empty collection; or if this GsGeneriekeProducten has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsGeneriekeProducten.
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
     * Clears out the collGsPrescriptieProducts collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsGeneriekeProducten The current object (for fluent API support)
     * @see        addGsPrescriptieProducts()
     */
    public function clearGsPrescriptieProducts()
    {
        $this->collGsPrescriptieProducts = null; // important to set this to null since that means it is uninitialized
        $this->collGsPrescriptieProductsPartial = null;

        return $this;
    }

    /**
     * reset is the collGsPrescriptieProducts collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsPrescriptieProducts($v = true)
    {
        $this->collGsPrescriptieProductsPartial = $v;
    }

    /**
     * Initializes the collGsPrescriptieProducts collection.
     *
     * By default this just sets the collGsPrescriptieProducts collection to an empty array (like clearcollGsPrescriptieProducts());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsPrescriptieProducts($overrideExisting = true)
    {
        if (null !== $this->collGsPrescriptieProducts && !$overrideExisting) {
            return;
        }
        $this->collGsPrescriptieProducts = new PropelObjectCollection();
        $this->collGsPrescriptieProducts->setModel('GsPrescriptieProduct');
    }

    /**
     * Gets an array of GsPrescriptieProduct objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsGeneriekeProducten is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     * @throws PropelException
     */
    public function getGsPrescriptieProducts($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsPrescriptieProductsPartial && !$this->isNew();
        if (null === $this->collGsPrescriptieProducts || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsPrescriptieProducts) {
                // return empty collection
                $this->initGsPrescriptieProducts();
            } else {
                $collGsPrescriptieProducts = GsPrescriptieProductQuery::create(null, $criteria)
                    ->filterByGsGeneriekeProducten($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsPrescriptieProductsPartial && count($collGsPrescriptieProducts)) {
                      $this->initGsPrescriptieProducts(false);

                      foreach ($collGsPrescriptieProducts as $obj) {
                        if (false == $this->collGsPrescriptieProducts->contains($obj)) {
                          $this->collGsPrescriptieProducts->append($obj);
                        }
                      }

                      $this->collGsPrescriptieProductsPartial = true;
                    }

                    $collGsPrescriptieProducts->getInternalIterator()->rewind();

                    return $collGsPrescriptieProducts;
                }

                if ($partial && $this->collGsPrescriptieProducts) {
                    foreach ($this->collGsPrescriptieProducts as $obj) {
                        if ($obj->isNew()) {
                            $collGsPrescriptieProducts[] = $obj;
                        }
                    }
                }

                $this->collGsPrescriptieProducts = $collGsPrescriptieProducts;
                $this->collGsPrescriptieProductsPartial = false;
            }
        }

        return $this->collGsPrescriptieProducts;
    }

    /**
     * Sets a collection of GsPrescriptieProduct objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsPrescriptieProducts A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setGsPrescriptieProducts(PropelCollection $gsPrescriptieProducts, PropelPDO $con = null)
    {
        $gsPrescriptieProductsToDelete = $this->getGsPrescriptieProducts(new Criteria(), $con)->diff($gsPrescriptieProducts);


        $this->gsPrescriptieProductsScheduledForDeletion = $gsPrescriptieProductsToDelete;

        foreach ($gsPrescriptieProductsToDelete as $gsPrescriptieProductRemoved) {
            $gsPrescriptieProductRemoved->setGsGeneriekeProducten(null);
        }

        $this->collGsPrescriptieProducts = null;
        foreach ($gsPrescriptieProducts as $gsPrescriptieProduct) {
            $this->addGsPrescriptieProduct($gsPrescriptieProduct);
        }

        $this->collGsPrescriptieProducts = $gsPrescriptieProducts;
        $this->collGsPrescriptieProductsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsPrescriptieProduct objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsPrescriptieProduct objects.
     * @throws PropelException
     */
    public function countGsPrescriptieProducts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsPrescriptieProductsPartial && !$this->isNew();
        if (null === $this->collGsPrescriptieProducts || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsPrescriptieProducts) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsPrescriptieProducts());
            }
            $query = GsPrescriptieProductQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsGeneriekeProducten($this)
                ->count($con);
        }

        return count($this->collGsPrescriptieProducts);
    }

    /**
     * Method called to associate a GsPrescriptieProduct object to this object
     * through the GsPrescriptieProduct foreign key attribute.
     *
     * @param    GsPrescriptieProduct $l GsPrescriptieProduct
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function addGsPrescriptieProduct(GsPrescriptieProduct $l)
    {
        if ($this->collGsPrescriptieProducts === null) {
            $this->initGsPrescriptieProducts();
            $this->collGsPrescriptieProductsPartial = true;
        }

        if (!in_array($l, $this->collGsPrescriptieProducts->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsPrescriptieProduct($l);

            if ($this->gsPrescriptieProductsScheduledForDeletion and $this->gsPrescriptieProductsScheduledForDeletion->contains($l)) {
                $this->gsPrescriptieProductsScheduledForDeletion->remove($this->gsPrescriptieProductsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsPrescriptieProduct $gsPrescriptieProduct The gsPrescriptieProduct object to add.
     */
    protected function doAddGsPrescriptieProduct($gsPrescriptieProduct)
    {
        $this->collGsPrescriptieProducts[]= $gsPrescriptieProduct;
        $gsPrescriptieProduct->setGsGeneriekeProducten($this);
    }

    /**
     * @param	GsPrescriptieProduct $gsPrescriptieProduct The gsPrescriptieProduct object to remove.
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function removeGsPrescriptieProduct($gsPrescriptieProduct)
    {
        if ($this->getGsPrescriptieProducts()->contains($gsPrescriptieProduct)) {
            $this->collGsPrescriptieProducts->remove($this->collGsPrescriptieProducts->search($gsPrescriptieProduct));
            if (null === $this->gsPrescriptieProductsScheduledForDeletion) {
                $this->gsPrescriptieProductsScheduledForDeletion = clone $this->collGsPrescriptieProducts;
                $this->gsPrescriptieProductsScheduledForDeletion->clear();
            }
            $this->gsPrescriptieProductsScheduledForDeletion[]= $gsPrescriptieProduct;
            $gsPrescriptieProduct->setGsGeneriekeProducten(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsGeneriekeProducten is new, it will return
     * an empty collection; or if this GsGeneriekeProducten has previously
     * been saved, it will retrieve related GsPrescriptieProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsGeneriekeProducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsPrescriptieProducts($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsGeneriekeProducten is new, it will return
     * an empty collection; or if this GsGeneriekeProducten has previously
     * been saved, it will retrieve related GsPrescriptieProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsGeneriekeProducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsJoinRedenVoorschrijvenHpkNiveauOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('RedenVoorschrijvenHpkNiveauOmschrijving', $join_behavior);

        return $this->getGsPrescriptieProducts($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsGeneriekeProducten is new, it will return
     * an empty collection; or if this GsGeneriekeProducten has previously
     * been saved, it will retrieve related GsPrescriptieProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsGeneriekeProducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsJoinEmballagetypeOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('EmballagetypeOmschrijving', $join_behavior);

        return $this->getGsPrescriptieProducts($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsGeneriekeProducten is new, it will return
     * an empty collection; or if this GsGeneriekeProducten has previously
     * been saved, it will retrieve related GsPrescriptieProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsGeneriekeProducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsJoinBasiseenheidProductOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('BasiseenheidProductOmschrijving', $join_behavior);

        return $this->getGsPrescriptieProducts($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsGeneriekeProducten is new, it will return
     * an empty collection; or if this GsGeneriekeProducten has previously
     * been saved, it will retrieve related GsPrescriptieProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsGeneriekeProducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsJoinHulpmiddelAardOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('HulpmiddelAardOmschrijving', $join_behavior);

        return $this->getGsPrescriptieProducts($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsGeneriekeProducten is new, it will return
     * an empty collection; or if this GsGeneriekeProducten has previously
     * been saved, it will retrieve related GsPrescriptieProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsGeneriekeProducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsJoinRedenHulpstofIdentificerendOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('RedenHulpstofIdentificerendOmschrijving', $join_behavior);

        return $this->getGsPrescriptieProducts($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsGeneriekeProducten is new, it will return
     * an empty collection; or if this GsGeneriekeProducten has previously
     * been saved, it will retrieve related GsPrescriptieProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsGeneriekeProducten.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsJoinVerwijzingExtraKenmerkOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('VerwijzingExtraKenmerkOmschrijving', $join_behavior);

        return $this->getGsPrescriptieProducts($query, $con);
    }

    /**
     * Clears out the collGsVoorschrijfprGeneesmiddelIdentifics collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsGeneriekeProducten The current object (for fluent API support)
     * @see        addGsVoorschrijfprGeneesmiddelIdentifics()
     */
    public function clearGsVoorschrijfprGeneesmiddelIdentifics()
    {
        $this->collGsVoorschrijfprGeneesmiddelIdentifics = null; // important to set this to null since that means it is uninitialized
        $this->collGsVoorschrijfprGeneesmiddelIdentificsPartial = null;

        return $this;
    }

    /**
     * reset is the collGsVoorschrijfprGeneesmiddelIdentifics collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsVoorschrijfprGeneesmiddelIdentifics($v = true)
    {
        $this->collGsVoorschrijfprGeneesmiddelIdentificsPartial = $v;
    }

    /**
     * Initializes the collGsVoorschrijfprGeneesmiddelIdentifics collection.
     *
     * By default this just sets the collGsVoorschrijfprGeneesmiddelIdentifics collection to an empty array (like clearcollGsVoorschrijfprGeneesmiddelIdentifics());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsVoorschrijfprGeneesmiddelIdentifics($overrideExisting = true)
    {
        if (null !== $this->collGsVoorschrijfprGeneesmiddelIdentifics && !$overrideExisting) {
            return;
        }
        $this->collGsVoorschrijfprGeneesmiddelIdentifics = new PropelObjectCollection();
        $this->collGsVoorschrijfprGeneesmiddelIdentifics->setModel('GsVoorschrijfprGeneesmiddelIdentific');
    }

    /**
     * Gets an array of GsVoorschrijfprGeneesmiddelIdentific objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsGeneriekeProducten is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsVoorschrijfprGeneesmiddelIdentific[] List of GsVoorschrijfprGeneesmiddelIdentific objects
     * @throws PropelException
     */
    public function getGsVoorschrijfprGeneesmiddelIdentifics($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsVoorschrijfprGeneesmiddelIdentificsPartial && !$this->isNew();
        if (null === $this->collGsVoorschrijfprGeneesmiddelIdentifics || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsVoorschrijfprGeneesmiddelIdentifics) {
                // return empty collection
                $this->initGsVoorschrijfprGeneesmiddelIdentifics();
            } else {
                $collGsVoorschrijfprGeneesmiddelIdentifics = GsVoorschrijfprGeneesmiddelIdentificQuery::create(null, $criteria)
                    ->filterByGsGeneriekeProducten($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsVoorschrijfprGeneesmiddelIdentificsPartial && count($collGsVoorschrijfprGeneesmiddelIdentifics)) {
                      $this->initGsVoorschrijfprGeneesmiddelIdentifics(false);

                      foreach ($collGsVoorschrijfprGeneesmiddelIdentifics as $obj) {
                        if (false == $this->collGsVoorschrijfprGeneesmiddelIdentifics->contains($obj)) {
                          $this->collGsVoorschrijfprGeneesmiddelIdentifics->append($obj);
                        }
                      }

                      $this->collGsVoorschrijfprGeneesmiddelIdentificsPartial = true;
                    }

                    $collGsVoorschrijfprGeneesmiddelIdentifics->getInternalIterator()->rewind();

                    return $collGsVoorschrijfprGeneesmiddelIdentifics;
                }

                if ($partial && $this->collGsVoorschrijfprGeneesmiddelIdentifics) {
                    foreach ($this->collGsVoorschrijfprGeneesmiddelIdentifics as $obj) {
                        if ($obj->isNew()) {
                            $collGsVoorschrijfprGeneesmiddelIdentifics[] = $obj;
                        }
                    }
                }

                $this->collGsVoorschrijfprGeneesmiddelIdentifics = $collGsVoorschrijfprGeneesmiddelIdentifics;
                $this->collGsVoorschrijfprGeneesmiddelIdentificsPartial = false;
            }
        }

        return $this->collGsVoorschrijfprGeneesmiddelIdentifics;
    }

    /**
     * Sets a collection of GsVoorschrijfprGeneesmiddelIdentific objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsVoorschrijfprGeneesmiddelIdentifics A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function setGsVoorschrijfprGeneesmiddelIdentifics(PropelCollection $gsVoorschrijfprGeneesmiddelIdentifics, PropelPDO $con = null)
    {
        $gsVoorschrijfprGeneesmiddelIdentificsToDelete = $this->getGsVoorschrijfprGeneesmiddelIdentifics(new Criteria(), $con)->diff($gsVoorschrijfprGeneesmiddelIdentifics);


        $this->gsVoorschrijfprGeneesmiddelIdentificsScheduledForDeletion = $gsVoorschrijfprGeneesmiddelIdentificsToDelete;

        foreach ($gsVoorschrijfprGeneesmiddelIdentificsToDelete as $gsVoorschrijfprGeneesmiddelIdentificRemoved) {
            $gsVoorschrijfprGeneesmiddelIdentificRemoved->setGsGeneriekeProducten(null);
        }

        $this->collGsVoorschrijfprGeneesmiddelIdentifics = null;
        foreach ($gsVoorschrijfprGeneesmiddelIdentifics as $gsVoorschrijfprGeneesmiddelIdentific) {
            $this->addGsVoorschrijfprGeneesmiddelIdentific($gsVoorschrijfprGeneesmiddelIdentific);
        }

        $this->collGsVoorschrijfprGeneesmiddelIdentifics = $gsVoorschrijfprGeneesmiddelIdentifics;
        $this->collGsVoorschrijfprGeneesmiddelIdentificsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsVoorschrijfprGeneesmiddelIdentific objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsVoorschrijfprGeneesmiddelIdentific objects.
     * @throws PropelException
     */
    public function countGsVoorschrijfprGeneesmiddelIdentifics(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsVoorschrijfprGeneesmiddelIdentificsPartial && !$this->isNew();
        if (null === $this->collGsVoorschrijfprGeneesmiddelIdentifics || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsVoorschrijfprGeneesmiddelIdentifics) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsVoorschrijfprGeneesmiddelIdentifics());
            }
            $query = GsVoorschrijfprGeneesmiddelIdentificQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsGeneriekeProducten($this)
                ->count($con);
        }

        return count($this->collGsVoorschrijfprGeneesmiddelIdentifics);
    }

    /**
     * Method called to associate a GsVoorschrijfprGeneesmiddelIdentific object to this object
     * through the GsVoorschrijfprGeneesmiddelIdentific foreign key attribute.
     *
     * @param    GsVoorschrijfprGeneesmiddelIdentific $l GsVoorschrijfprGeneesmiddelIdentific
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function addGsVoorschrijfprGeneesmiddelIdentific(GsVoorschrijfprGeneesmiddelIdentific $l)
    {
        if ($this->collGsVoorschrijfprGeneesmiddelIdentifics === null) {
            $this->initGsVoorschrijfprGeneesmiddelIdentifics();
            $this->collGsVoorschrijfprGeneesmiddelIdentificsPartial = true;
        }

        if (!in_array($l, $this->collGsVoorschrijfprGeneesmiddelIdentifics->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsVoorschrijfprGeneesmiddelIdentific($l);

            if ($this->gsVoorschrijfprGeneesmiddelIdentificsScheduledForDeletion and $this->gsVoorschrijfprGeneesmiddelIdentificsScheduledForDeletion->contains($l)) {
                $this->gsVoorschrijfprGeneesmiddelIdentificsScheduledForDeletion->remove($this->gsVoorschrijfprGeneesmiddelIdentificsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsVoorschrijfprGeneesmiddelIdentific $gsVoorschrijfprGeneesmiddelIdentific The gsVoorschrijfprGeneesmiddelIdentific object to add.
     */
    protected function doAddGsVoorschrijfprGeneesmiddelIdentific($gsVoorschrijfprGeneesmiddelIdentific)
    {
        $this->collGsVoorschrijfprGeneesmiddelIdentifics[]= $gsVoorschrijfprGeneesmiddelIdentific;
        $gsVoorschrijfprGeneesmiddelIdentific->setGsGeneriekeProducten($this);
    }

    /**
     * @param	GsVoorschrijfprGeneesmiddelIdentific $gsVoorschrijfprGeneesmiddelIdentific The gsVoorschrijfprGeneesmiddelIdentific object to remove.
     * @return GsGeneriekeProducten The current object (for fluent API support)
     */
    public function removeGsVoorschrijfprGeneesmiddelIdentific($gsVoorschrijfprGeneesmiddelIdentific)
    {
        if ($this->getGsVoorschrijfprGeneesmiddelIdentifics()->contains($gsVoorschrijfprGeneesmiddelIdentific)) {
            $this->collGsVoorschrijfprGeneesmiddelIdentifics->remove($this->collGsVoorschrijfprGeneesmiddelIdentifics->search($gsVoorschrijfprGeneesmiddelIdentific));
            if (null === $this->gsVoorschrijfprGeneesmiddelIdentificsScheduledForDeletion) {
                $this->gsVoorschrijfprGeneesmiddelIdentificsScheduledForDeletion = clone $this->collGsVoorschrijfprGeneesmiddelIdentifics;
                $this->gsVoorschrijfprGeneesmiddelIdentificsScheduledForDeletion->clear();
            }
            $this->gsVoorschrijfprGeneesmiddelIdentificsScheduledForDeletion[]= $gsVoorschrijfprGeneesmiddelIdentific;
            $gsVoorschrijfprGeneesmiddelIdentific->setGsGeneriekeProducten(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->generiekeproductcode = null;
        $this->gskcode = null;
        $this->farmaceutische_vorm_thesaurusnummer = null;
        $this->farmaceutische_vorm_code = null;
        $this->toedieningsweg_thesaurusnummer = null;
        $this->toedieningsweg_code = null;
        $this->naamnummer_volledige_gpknaam = null;
        $this->naamnummer_gpkstofnaam = null;
        $this->ingegeven_sterkte_stofnamen = null;
        $this->min_leeftijd_als_contraindicatie = null;
        $this->minleeftijd_als_ci_tekstnummer = null;
        $this->aantal_dagen_voorschrijfperiode = null;
        $this->tekstcode_voorschrijfperiode = null;
        $this->tnnr_waarschuwing_substitutie_voorschrijven_prk = null;
        $this->waarschuwing_substitutie_en_voorschrijven_prk = null;
        $this->superproduktkode = null;
        $this->stamtoedieningsweg_thesaurus_58 = null;
        $this->stamtoedieningsweg_code = null;
        $this->atccode = null;
        $this->basiseenheid_product_thesaurusnr = null;
        $this->basiseenheid_product_kode = null;
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
            if ($this->collGsPrescriptieProducts) {
                foreach ($this->collGsPrescriptieProducts as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsVoorschrijfprGeneesmiddelIdentifics) {
                foreach ($this->collGsVoorschrijfprGeneesmiddelIdentifics as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aGsAtcCodes instanceof Persistent) {
              $this->aGsAtcCodes->clearAllReferences($deep);
            }
            if ($this->aGsNamenRelatedByNaamnummerVolledigeGpknaam instanceof Persistent) {
              $this->aGsNamenRelatedByNaamnummerVolledigeGpknaam->clearAllReferences($deep);
            }
            if ($this->aStofnaam instanceof Persistent) {
              $this->aStofnaam->clearAllReferences($deep);
            }
            if ($this->aFarmaceutischeVormOmschrijving instanceof Persistent) {
              $this->aFarmaceutischeVormOmschrijving->clearAllReferences($deep);
            }
            if ($this->aToedieningswegOmschrijving instanceof Persistent) {
              $this->aToedieningswegOmschrijving->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collGsArtikelEigenschappens instanceof PropelCollection) {
            $this->collGsArtikelEigenschappens->clearIterator();
        }
        $this->collGsArtikelEigenschappens = null;
        if ($this->collGsPrescriptieProducts instanceof PropelCollection) {
            $this->collGsPrescriptieProducts->clearIterator();
        }
        $this->collGsPrescriptieProducts = null;
        if ($this->collGsVoorschrijfprGeneesmiddelIdentifics instanceof PropelCollection) {
            $this->collGsVoorschrijfprGeneesmiddelIdentifics->clearIterator();
        }
        $this->collGsVoorschrijfprGeneesmiddelIdentifics = null;
        $this->aGsAtcCodes = null;
        $this->aGsNamenRelatedByNaamnummerVolledigeGpknaam = null;
        $this->aStofnaam = null;
        $this->aFarmaceutischeVormOmschrijving = null;
        $this->aToedieningswegOmschrijving = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsGeneriekeProductenPeer::DEFAULT_STRING_FORMAT);
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
