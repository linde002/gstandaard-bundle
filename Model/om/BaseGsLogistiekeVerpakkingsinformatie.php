<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BaseObject;
use \BasePeer;
use \Criteria;
use \DateTime;
use \Exception;
use \PDO;
use \Persistent;
use \Propel;
use \PropelDateTime;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatie;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatiePeer;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatieQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery;

abstract class BaseGsLogistiekeVerpakkingsinformatie extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLogistiekeVerpakkingsinformatiePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsLogistiekeVerpakkingsinformatiePeer
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
     * The value for the gln field.
     * @var        string
     */
    protected $gln;

    /**
     * The value for the gtin field.
     * @var        string
     */
    protected $gtin;

    /**
     * The value for the zindex_nummer field.
     * @var        int
     */
    protected $zindex_nummer;

    /**
     * The value for the thesaurus_soorten_verpakkingen field.
     * @var        int
     */
    protected $thesaurus_soorten_verpakkingen;

    /**
     * The value for the thesaurusitem_soorten_verpakkingen field.
     * @var        int
     */
    protected $thesaurusitem_soorten_verpakkingen;

    /**
     * The value for the naam_op_verpakking field.
     * @var        string
     */
    protected $naam_op_verpakking;

    /**
     * The value for the onderscheidend_kenmerk field.
     * @var        string
     */
    protected $onderscheidend_kenmerk;

    /**
     * The value for the startdatum_beschikbaarheid_verpakking field.
     * @var        string
     */
    protected $startdatum_beschikbaarheid_verpakking;

    /**
     * The value for the einddatum_beschikbaarheid_verpakking field.
     * @var        string
     */
    protected $einddatum_beschikbaarheid_verpakking;

    /**
     * The value for the gtin_van_het_verpakt_item field.
     * @var        string
     */
    protected $gtin_van_het_verpakt_item;

    /**
     * The value for the aantal_van_het_verpakt_item field.
     * @var        int
     */
    protected $aantal_van_het_verpakt_item;

    /**
     * The value for the thesaurus_met_items_van_eenheden field.
     * @var        int
     */
    protected $thesaurus_met_items_van_eenheden;

    /**
     * The value for the hoogte_van_verpakking field.
     * @var        string
     */
    protected $hoogte_van_verpakking;

    /**
     * The value for the thesaurusitem_van_eenheid_hoogte field.
     * @var        int
     */
    protected $thesaurusitem_van_eenheid_hoogte;

    /**
     * The value for the breedte_van_verpakking field.
     * @var        string
     */
    protected $breedte_van_verpakking;

    /**
     * The value for the thesaurusitem_van_eenheid_breedte field.
     * @var        int
     */
    protected $thesaurusitem_van_eenheid_breedte;

    /**
     * The value for the diepte_van_verpakking field.
     * @var        string
     */
    protected $diepte_van_verpakking;

    /**
     * The value for the thesaurusitem_van_eenheid_diepte field.
     * @var        int
     */
    protected $thesaurusitem_van_eenheid_diepte;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aSoortenVerpakkingOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aHoogteEenheidOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aDiepteEenheidOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aBreedteEenheidOmschrijving;

    /**
     * @var        GsArtikelen
     */
    protected $aGsArtikelen;

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
     * Get the [gln] column value.
     *
     * @return string
     */
    public function getGln()
    {

        return $this->gln;
    }

    /**
     * Get the [gtin] column value.
     *
     * @return string
     */
    public function getGtin()
    {

        return $this->gtin;
    }

    /**
     * Get the [zindex_nummer] column value.
     *
     * @return int
     */
    public function getZindexNummer()
    {

        return $this->zindex_nummer;
    }

    /**
     * Get the [thesaurus_soorten_verpakkingen] column value.
     *
     * @return int
     */
    public function getThesaurusSoortenVerpakkingen()
    {

        return $this->thesaurus_soorten_verpakkingen;
    }

    /**
     * Get the [thesaurusitem_soorten_verpakkingen] column value.
     *
     * @return int
     */
    public function getThesaurusitemSoortenVerpakkingen()
    {

        return $this->thesaurusitem_soorten_verpakkingen;
    }

    /**
     * Get the [naam_op_verpakking] column value.
     *
     * @return string
     */
    public function getNaamOpVerpakking()
    {

        return $this->naam_op_verpakking;
    }

    /**
     * Get the [onderscheidend_kenmerk] column value.
     *
     * @return string
     */
    public function getOnderscheidendKenmerk()
    {

        return $this->onderscheidend_kenmerk;
    }

    /**
     * Get the [optionally formatted] temporal [startdatum_beschikbaarheid_verpakking] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getStartdatumBeschikbaarheidVerpakking($format = null)
    {
        if ($this->startdatum_beschikbaarheid_verpakking === null) {
            return null;
        }

        if ($this->startdatum_beschikbaarheid_verpakking === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->startdatum_beschikbaarheid_verpakking);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->startdatum_beschikbaarheid_verpakking, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [einddatum_beschikbaarheid_verpakking] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEinddatumBeschikbaarheidVerpakking($format = null)
    {
        if ($this->einddatum_beschikbaarheid_verpakking === null) {
            return null;
        }

        if ($this->einddatum_beschikbaarheid_verpakking === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->einddatum_beschikbaarheid_verpakking);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->einddatum_beschikbaarheid_verpakking, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [gtin_van_het_verpakt_item] column value.
     *
     * @return string
     */
    public function getGtinVanHetVerpaktItem()
    {

        return $this->gtin_van_het_verpakt_item;
    }

    /**
     * Get the [aantal_van_het_verpakt_item] column value.
     *
     * @return int
     */
    public function getAantalVanHetVerpaktItem()
    {

        return $this->aantal_van_het_verpakt_item;
    }

    /**
     * Get the [thesaurus_met_items_van_eenheden] column value.
     *
     * @return int
     */
    public function getThesaurusMetItemsVanEenheden()
    {

        return $this->thesaurus_met_items_van_eenheden;
    }

    /**
     * Get the [hoogte_van_verpakking] column value.
     *
     * @return string
     */
    public function getHoogteVanVerpakking()
    {

        return $this->hoogte_van_verpakking;
    }

    /**
     * Get the [thesaurusitem_van_eenheid_hoogte] column value.
     *
     * @return int
     */
    public function getThesaurusitemVanEenheidHoogte()
    {

        return $this->thesaurusitem_van_eenheid_hoogte;
    }

    /**
     * Get the [breedte_van_verpakking] column value.
     *
     * @return string
     */
    public function getBreedteVanVerpakking()
    {

        return $this->breedte_van_verpakking;
    }

    /**
     * Get the [thesaurusitem_van_eenheid_breedte] column value.
     *
     * @return int
     */
    public function getThesaurusitemVanEenheidBreedte()
    {

        return $this->thesaurusitem_van_eenheid_breedte;
    }

    /**
     * Get the [diepte_van_verpakking] column value.
     *
     * @return string
     */
    public function getDiepteVanVerpakking()
    {

        return $this->diepte_van_verpakking;
    }

    /**
     * Get the [thesaurusitem_van_eenheid_diepte] column value.
     *
     * @return int
     */
    public function getThesaurusitemVanEenheidDiepte()
    {

        return $this->thesaurusitem_van_eenheid_diepte;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [gln] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setGln($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gln !== $v) {
            $this->gln = $v;
            $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::GLN;
        }


        return $this;
    } // setGln()

    /**
     * Set the value of [gtin] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setGtin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gtin !== $v) {
            $this->gtin = $v;
            $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::GTIN;
        }


        return $this;
    } // setGtin()

    /**
     * Set the value of [zindex_nummer] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setZindexNummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zindex_nummer !== $v) {
            $this->zindex_nummer = $v;
            $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER;
        }

        if ($this->aGsArtikelen !== null && $this->aGsArtikelen->getZinummer() !== $v) {
            $this->aGsArtikelen = null;
        }


        return $this;
    } // setZindexNummer()

    /**
     * Set the value of [thesaurus_soorten_verpakkingen] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setThesaurusSoortenVerpakkingen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurus_soorten_verpakkingen !== $v) {
            $this->thesaurus_soorten_verpakkingen = $v;
            $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_SOORTEN_VERPAKKINGEN;
        }

        if ($this->aSoortenVerpakkingOmschrijving !== null && $this->aSoortenVerpakkingOmschrijving->getThesaurusnummer() !== $v) {
            $this->aSoortenVerpakkingOmschrijving = null;
        }


        return $this;
    } // setThesaurusSoortenVerpakkingen()

    /**
     * Set the value of [thesaurusitem_soorten_verpakkingen] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setThesaurusitemSoortenVerpakkingen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusitem_soorten_verpakkingen !== $v) {
            $this->thesaurusitem_soorten_verpakkingen = $v;
            $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_SOORTEN_VERPAKKINGEN;
        }

        if ($this->aSoortenVerpakkingOmschrijving !== null && $this->aSoortenVerpakkingOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aSoortenVerpakkingOmschrijving = null;
        }


        return $this;
    } // setThesaurusitemSoortenVerpakkingen()

    /**
     * Set the value of [naam_op_verpakking] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setNaamOpVerpakking($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->naam_op_verpakking !== $v) {
            $this->naam_op_verpakking = $v;
            $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::NAAM_OP_VERPAKKING;
        }


        return $this;
    } // setNaamOpVerpakking()

    /**
     * Set the value of [onderscheidend_kenmerk] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setOnderscheidendKenmerk($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->onderscheidend_kenmerk !== $v) {
            $this->onderscheidend_kenmerk = $v;
            $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::ONDERSCHEIDEND_KENMERK;
        }


        return $this;
    } // setOnderscheidendKenmerk()

    /**
     * Sets the value of [startdatum_beschikbaarheid_verpakking] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setStartdatumBeschikbaarheidVerpakking($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->startdatum_beschikbaarheid_verpakking !== null || $dt !== null) {
            $currentDateAsString = ($this->startdatum_beschikbaarheid_verpakking !== null && $tmpDt = new DateTime($this->startdatum_beschikbaarheid_verpakking)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->startdatum_beschikbaarheid_verpakking = $newDateAsString;
                $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::STARTDATUM_BESCHIKBAARHEID_VERPAKKING;
            }
        } // if either are not null


        return $this;
    } // setStartdatumBeschikbaarheidVerpakking()

    /**
     * Sets the value of [einddatum_beschikbaarheid_verpakking] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setEinddatumBeschikbaarheidVerpakking($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->einddatum_beschikbaarheid_verpakking !== null || $dt !== null) {
            $currentDateAsString = ($this->einddatum_beschikbaarheid_verpakking !== null && $tmpDt = new DateTime($this->einddatum_beschikbaarheid_verpakking)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->einddatum_beschikbaarheid_verpakking = $newDateAsString;
                $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::EINDDATUM_BESCHIKBAARHEID_VERPAKKING;
            }
        } // if either are not null


        return $this;
    } // setEinddatumBeschikbaarheidVerpakking()

    /**
     * Set the value of [gtin_van_het_verpakt_item] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setGtinVanHetVerpaktItem($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gtin_van_het_verpakt_item !== $v) {
            $this->gtin_van_het_verpakt_item = $v;
            $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM;
        }


        return $this;
    } // setGtinVanHetVerpaktItem()

    /**
     * Set the value of [aantal_van_het_verpakt_item] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setAantalVanHetVerpaktItem($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aantal_van_het_verpakt_item !== $v) {
            $this->aantal_van_het_verpakt_item = $v;
            $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::AANTAL_VAN_HET_VERPAKT_ITEM;
        }


        return $this;
    } // setAantalVanHetVerpaktItem()

    /**
     * Set the value of [thesaurus_met_items_van_eenheden] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setThesaurusMetItemsVanEenheden($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurus_met_items_van_eenheden !== $v) {
            $this->thesaurus_met_items_van_eenheden = $v;
            $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN;
        }

        if ($this->aHoogteEenheidOmschrijving !== null && $this->aHoogteEenheidOmschrijving->getThesaurusnummer() !== $v) {
            $this->aHoogteEenheidOmschrijving = null;
        }

        if ($this->aDiepteEenheidOmschrijving !== null && $this->aDiepteEenheidOmschrijving->getThesaurusnummer() !== $v) {
            $this->aDiepteEenheidOmschrijving = null;
        }

        if ($this->aBreedteEenheidOmschrijving !== null && $this->aBreedteEenheidOmschrijving->getThesaurusnummer() !== $v) {
            $this->aBreedteEenheidOmschrijving = null;
        }


        return $this;
    } // setThesaurusMetItemsVanEenheden()

    /**
     * Set the value of [hoogte_van_verpakking] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setHoogteVanVerpakking($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hoogte_van_verpakking !== $v) {
            $this->hoogte_van_verpakking = $v;
            $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::HOOGTE_VAN_VERPAKKING;
        }


        return $this;
    } // setHoogteVanVerpakking()

    /**
     * Set the value of [thesaurusitem_van_eenheid_hoogte] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setThesaurusitemVanEenheidHoogte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusitem_van_eenheid_hoogte !== $v) {
            $this->thesaurusitem_van_eenheid_hoogte = $v;
            $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_HOOGTE;
        }

        if ($this->aHoogteEenheidOmschrijving !== null && $this->aHoogteEenheidOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aHoogteEenheidOmschrijving = null;
        }


        return $this;
    } // setThesaurusitemVanEenheidHoogte()

    /**
     * Set the value of [breedte_van_verpakking] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setBreedteVanVerpakking($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->breedte_van_verpakking !== $v) {
            $this->breedte_van_verpakking = $v;
            $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::BREEDTE_VAN_VERPAKKING;
        }


        return $this;
    } // setBreedteVanVerpakking()

    /**
     * Set the value of [thesaurusitem_van_eenheid_breedte] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setThesaurusitemVanEenheidBreedte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusitem_van_eenheid_breedte !== $v) {
            $this->thesaurusitem_van_eenheid_breedte = $v;
            $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_BREEDTE;
        }

        if ($this->aBreedteEenheidOmschrijving !== null && $this->aBreedteEenheidOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aBreedteEenheidOmschrijving = null;
        }


        return $this;
    } // setThesaurusitemVanEenheidBreedte()

    /**
     * Set the value of [diepte_van_verpakking] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setDiepteVanVerpakking($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->diepte_van_verpakking !== $v) {
            $this->diepte_van_verpakking = $v;
            $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::DIEPTE_VAN_VERPAKKING;
        }


        return $this;
    } // setDiepteVanVerpakking()

    /**
     * Set the value of [thesaurusitem_van_eenheid_diepte] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     */
    public function setThesaurusitemVanEenheidDiepte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusitem_van_eenheid_diepte !== $v) {
            $this->thesaurusitem_van_eenheid_diepte = $v;
            $this->modifiedColumns[] = GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_DIEPTE;
        }

        if ($this->aDiepteEenheidOmschrijving !== null && $this->aDiepteEenheidOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aDiepteEenheidOmschrijving = null;
        }


        return $this;
    } // setThesaurusitemVanEenheidDiepte()

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
            $this->gln = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->gtin = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->zindex_nummer = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->thesaurus_soorten_verpakkingen = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->thesaurusitem_soorten_verpakkingen = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->naam_op_verpakking = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->onderscheidend_kenmerk = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->startdatum_beschikbaarheid_verpakking = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->einddatum_beschikbaarheid_verpakking = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->gtin_van_het_verpakt_item = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->aantal_van_het_verpakt_item = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->thesaurus_met_items_van_eenheden = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->hoogte_van_verpakking = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->thesaurusitem_van_eenheid_hoogte = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->breedte_van_verpakking = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->thesaurusitem_van_eenheid_breedte = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->diepte_van_verpakking = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->thesaurusitem_van_eenheid_diepte = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 20; // 20 = GsLogistiekeVerpakkingsinformatiePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsLogistiekeVerpakkingsinformatie object", $e);
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

        if ($this->aGsArtikelen !== null && $this->zindex_nummer !== $this->aGsArtikelen->getZinummer()) {
            $this->aGsArtikelen = null;
        }
        if ($this->aSoortenVerpakkingOmschrijving !== null && $this->thesaurus_soorten_verpakkingen !== $this->aSoortenVerpakkingOmschrijving->getThesaurusnummer()) {
            $this->aSoortenVerpakkingOmschrijving = null;
        }
        if ($this->aSoortenVerpakkingOmschrijving !== null && $this->thesaurusitem_soorten_verpakkingen !== $this->aSoortenVerpakkingOmschrijving->getThesaurusItemnummer()) {
            $this->aSoortenVerpakkingOmschrijving = null;
        }
        if ($this->aHoogteEenheidOmschrijving !== null && $this->thesaurus_met_items_van_eenheden !== $this->aHoogteEenheidOmschrijving->getThesaurusnummer()) {
            $this->aHoogteEenheidOmschrijving = null;
        }
        if ($this->aDiepteEenheidOmschrijving !== null && $this->thesaurus_met_items_van_eenheden !== $this->aDiepteEenheidOmschrijving->getThesaurusnummer()) {
            $this->aDiepteEenheidOmschrijving = null;
        }
        if ($this->aBreedteEenheidOmschrijving !== null && $this->thesaurus_met_items_van_eenheden !== $this->aBreedteEenheidOmschrijving->getThesaurusnummer()) {
            $this->aBreedteEenheidOmschrijving = null;
        }
        if ($this->aHoogteEenheidOmschrijving !== null && $this->thesaurusitem_van_eenheid_hoogte !== $this->aHoogteEenheidOmschrijving->getThesaurusItemnummer()) {
            $this->aHoogteEenheidOmschrijving = null;
        }
        if ($this->aBreedteEenheidOmschrijving !== null && $this->thesaurusitem_van_eenheid_breedte !== $this->aBreedteEenheidOmschrijving->getThesaurusItemnummer()) {
            $this->aBreedteEenheidOmschrijving = null;
        }
        if ($this->aDiepteEenheidOmschrijving !== null && $this->thesaurusitem_van_eenheid_diepte !== $this->aDiepteEenheidOmschrijving->getThesaurusItemnummer()) {
            $this->aDiepteEenheidOmschrijving = null;
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
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsLogistiekeVerpakkingsinformatiePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSoortenVerpakkingOmschrijving = null;
            $this->aHoogteEenheidOmschrijving = null;
            $this->aDiepteEenheidOmschrijving = null;
            $this->aBreedteEenheidOmschrijving = null;
            $this->aGsArtikelen = null;
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
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsLogistiekeVerpakkingsinformatieQuery::create()
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
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsLogistiekeVerpakkingsinformatiePeer::addInstanceToPool($this);
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

            if ($this->aSoortenVerpakkingOmschrijving !== null) {
                if ($this->aSoortenVerpakkingOmschrijving->isModified() || $this->aSoortenVerpakkingOmschrijving->isNew()) {
                    $affectedRows += $this->aSoortenVerpakkingOmschrijving->save($con);
                }
                $this->setSoortenVerpakkingOmschrijving($this->aSoortenVerpakkingOmschrijving);
            }

            if ($this->aHoogteEenheidOmschrijving !== null) {
                if ($this->aHoogteEenheidOmschrijving->isModified() || $this->aHoogteEenheidOmschrijving->isNew()) {
                    $affectedRows += $this->aHoogteEenheidOmschrijving->save($con);
                }
                $this->setHoogteEenheidOmschrijving($this->aHoogteEenheidOmschrijving);
            }

            if ($this->aDiepteEenheidOmschrijving !== null) {
                if ($this->aDiepteEenheidOmschrijving->isModified() || $this->aDiepteEenheidOmschrijving->isNew()) {
                    $affectedRows += $this->aDiepteEenheidOmschrijving->save($con);
                }
                $this->setDiepteEenheidOmschrijving($this->aDiepteEenheidOmschrijving);
            }

            if ($this->aBreedteEenheidOmschrijving !== null) {
                if ($this->aBreedteEenheidOmschrijving->isModified() || $this->aBreedteEenheidOmschrijving->isNew()) {
                    $affectedRows += $this->aBreedteEenheidOmschrijving->save($con);
                }
                $this->setBreedteEenheidOmschrijving($this->aBreedteEenheidOmschrijving);
            }

            if ($this->aGsArtikelen !== null) {
                if ($this->aGsArtikelen->isModified() || $this->aGsArtikelen->isNew()) {
                    $affectedRows += $this->aGsArtikelen->save($con);
                }
                $this->setGsArtikelen($this->aGsArtikelen);
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
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::GLN)) {
            $modifiedColumns[':p' . $index++]  = '`gln`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::GTIN)) {
            $modifiedColumns[':p' . $index++]  = '`gtin`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`zindex_nummer`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_SOORTEN_VERPAKKINGEN)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurus_soorten_verpakkingen`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_SOORTEN_VERPAKKINGEN)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusitem_soorten_verpakkingen`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::NAAM_OP_VERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`naam_op_verpakking`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::ONDERSCHEIDEND_KENMERK)) {
            $modifiedColumns[':p' . $index++]  = '`onderscheidend_kenmerk`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::STARTDATUM_BESCHIKBAARHEID_VERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`startdatum_beschikbaarheid_verpakking`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::EINDDATUM_BESCHIKBAARHEID_VERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`einddatum_beschikbaarheid_verpakking`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM)) {
            $modifiedColumns[':p' . $index++]  = '`gtin_van_het_verpakt_item`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::AANTAL_VAN_HET_VERPAKT_ITEM)) {
            $modifiedColumns[':p' . $index++]  = '`aantal_van_het_verpakt_item`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurus_met_items_van_eenheden`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::HOOGTE_VAN_VERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`hoogte_van_verpakking`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_HOOGTE)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusitem_van_eenheid_hoogte`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::BREEDTE_VAN_VERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`breedte_van_verpakking`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_BREEDTE)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusitem_van_eenheid_breedte`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::DIEPTE_VAN_VERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`diepte_van_verpakking`';
        }
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_DIEPTE)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusitem_van_eenheid_diepte`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_logistieke_verpakkingsinformatie` (%s) VALUES (%s)',
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
                    case '`gln`':
                        $stmt->bindValue($identifier, $this->gln, PDO::PARAM_STR);
                        break;
                    case '`gtin`':
                        $stmt->bindValue($identifier, $this->gtin, PDO::PARAM_STR);
                        break;
                    case '`zindex_nummer`':
                        $stmt->bindValue($identifier, $this->zindex_nummer, PDO::PARAM_INT);
                        break;
                    case '`thesaurus_soorten_verpakkingen`':
                        $stmt->bindValue($identifier, $this->thesaurus_soorten_verpakkingen, PDO::PARAM_INT);
                        break;
                    case '`thesaurusitem_soorten_verpakkingen`':
                        $stmt->bindValue($identifier, $this->thesaurusitem_soorten_verpakkingen, PDO::PARAM_INT);
                        break;
                    case '`naam_op_verpakking`':
                        $stmt->bindValue($identifier, $this->naam_op_verpakking, PDO::PARAM_STR);
                        break;
                    case '`onderscheidend_kenmerk`':
                        $stmt->bindValue($identifier, $this->onderscheidend_kenmerk, PDO::PARAM_STR);
                        break;
                    case '`startdatum_beschikbaarheid_verpakking`':
                        $stmt->bindValue($identifier, $this->startdatum_beschikbaarheid_verpakking, PDO::PARAM_STR);
                        break;
                    case '`einddatum_beschikbaarheid_verpakking`':
                        $stmt->bindValue($identifier, $this->einddatum_beschikbaarheid_verpakking, PDO::PARAM_STR);
                        break;
                    case '`gtin_van_het_verpakt_item`':
                        $stmt->bindValue($identifier, $this->gtin_van_het_verpakt_item, PDO::PARAM_STR);
                        break;
                    case '`aantal_van_het_verpakt_item`':
                        $stmt->bindValue($identifier, $this->aantal_van_het_verpakt_item, PDO::PARAM_INT);
                        break;
                    case '`thesaurus_met_items_van_eenheden`':
                        $stmt->bindValue($identifier, $this->thesaurus_met_items_van_eenheden, PDO::PARAM_INT);
                        break;
                    case '`hoogte_van_verpakking`':
                        $stmt->bindValue($identifier, $this->hoogte_van_verpakking, PDO::PARAM_STR);
                        break;
                    case '`thesaurusitem_van_eenheid_hoogte`':
                        $stmt->bindValue($identifier, $this->thesaurusitem_van_eenheid_hoogte, PDO::PARAM_INT);
                        break;
                    case '`breedte_van_verpakking`':
                        $stmt->bindValue($identifier, $this->breedte_van_verpakking, PDO::PARAM_STR);
                        break;
                    case '`thesaurusitem_van_eenheid_breedte`':
                        $stmt->bindValue($identifier, $this->thesaurusitem_van_eenheid_breedte, PDO::PARAM_INT);
                        break;
                    case '`diepte_van_verpakking`':
                        $stmt->bindValue($identifier, $this->diepte_van_verpakking, PDO::PARAM_STR);
                        break;
                    case '`thesaurusitem_van_eenheid_diepte`':
                        $stmt->bindValue($identifier, $this->thesaurusitem_van_eenheid_diepte, PDO::PARAM_INT);
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

            if ($this->aSoortenVerpakkingOmschrijving !== null) {
                if (!$this->aSoortenVerpakkingOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSoortenVerpakkingOmschrijving->getValidationFailures());
                }
            }

            if ($this->aHoogteEenheidOmschrijving !== null) {
                if (!$this->aHoogteEenheidOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aHoogteEenheidOmschrijving->getValidationFailures());
                }
            }

            if ($this->aDiepteEenheidOmschrijving !== null) {
                if (!$this->aDiepteEenheidOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aDiepteEenheidOmschrijving->getValidationFailures());
                }
            }

            if ($this->aBreedteEenheidOmschrijving !== null) {
                if (!$this->aBreedteEenheidOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aBreedteEenheidOmschrijving->getValidationFailures());
                }
            }

            if ($this->aGsArtikelen !== null) {
                if (!$this->aGsArtikelen->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsArtikelen->getValidationFailures());
                }
            }


            if (($retval = GsLogistiekeVerpakkingsinformatiePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = GsLogistiekeVerpakkingsinformatiePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getGln();
                break;
            case 3:
                return $this->getGtin();
                break;
            case 4:
                return $this->getZindexNummer();
                break;
            case 5:
                return $this->getThesaurusSoortenVerpakkingen();
                break;
            case 6:
                return $this->getThesaurusitemSoortenVerpakkingen();
                break;
            case 7:
                return $this->getNaamOpVerpakking();
                break;
            case 8:
                return $this->getOnderscheidendKenmerk();
                break;
            case 9:
                return $this->getStartdatumBeschikbaarheidVerpakking();
                break;
            case 10:
                return $this->getEinddatumBeschikbaarheidVerpakking();
                break;
            case 11:
                return $this->getGtinVanHetVerpaktItem();
                break;
            case 12:
                return $this->getAantalVanHetVerpaktItem();
                break;
            case 13:
                return $this->getThesaurusMetItemsVanEenheden();
                break;
            case 14:
                return $this->getHoogteVanVerpakking();
                break;
            case 15:
                return $this->getThesaurusitemVanEenheidHoogte();
                break;
            case 16:
                return $this->getBreedteVanVerpakking();
                break;
            case 17:
                return $this->getThesaurusitemVanEenheidBreedte();
                break;
            case 18:
                return $this->getDiepteVanVerpakking();
                break;
            case 19:
                return $this->getThesaurusitemVanEenheidDiepte();
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
        if (isset($alreadyDumpedObjects['GsLogistiekeVerpakkingsinformatie'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsLogistiekeVerpakkingsinformatie'][serialize($this->getPrimaryKey())] = true;
        $keys = GsLogistiekeVerpakkingsinformatiePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getGln(),
            $keys[3] => $this->getGtin(),
            $keys[4] => $this->getZindexNummer(),
            $keys[5] => $this->getThesaurusSoortenVerpakkingen(),
            $keys[6] => $this->getThesaurusitemSoortenVerpakkingen(),
            $keys[7] => $this->getNaamOpVerpakking(),
            $keys[8] => $this->getOnderscheidendKenmerk(),
            $keys[9] => $this->getStartdatumBeschikbaarheidVerpakking(),
            $keys[10] => $this->getEinddatumBeschikbaarheidVerpakking(),
            $keys[11] => $this->getGtinVanHetVerpaktItem(),
            $keys[12] => $this->getAantalVanHetVerpaktItem(),
            $keys[13] => $this->getThesaurusMetItemsVanEenheden(),
            $keys[14] => $this->getHoogteVanVerpakking(),
            $keys[15] => $this->getThesaurusitemVanEenheidHoogte(),
            $keys[16] => $this->getBreedteVanVerpakking(),
            $keys[17] => $this->getThesaurusitemVanEenheidBreedte(),
            $keys[18] => $this->getDiepteVanVerpakking(),
            $keys[19] => $this->getThesaurusitemVanEenheidDiepte(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSoortenVerpakkingOmschrijving) {
                $result['SoortenVerpakkingOmschrijving'] = $this->aSoortenVerpakkingOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aHoogteEenheidOmschrijving) {
                $result['HoogteEenheidOmschrijving'] = $this->aHoogteEenheidOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aDiepteEenheidOmschrijving) {
                $result['DiepteEenheidOmschrijving'] = $this->aDiepteEenheidOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aBreedteEenheidOmschrijving) {
                $result['BreedteEenheidOmschrijving'] = $this->aBreedteEenheidOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aGsArtikelen) {
                $result['GsArtikelen'] = $this->aGsArtikelen->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = GsLogistiekeVerpakkingsinformatiePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setGln($value);
                break;
            case 3:
                $this->setGtin($value);
                break;
            case 4:
                $this->setZindexNummer($value);
                break;
            case 5:
                $this->setThesaurusSoortenVerpakkingen($value);
                break;
            case 6:
                $this->setThesaurusitemSoortenVerpakkingen($value);
                break;
            case 7:
                $this->setNaamOpVerpakking($value);
                break;
            case 8:
                $this->setOnderscheidendKenmerk($value);
                break;
            case 9:
                $this->setStartdatumBeschikbaarheidVerpakking($value);
                break;
            case 10:
                $this->setEinddatumBeschikbaarheidVerpakking($value);
                break;
            case 11:
                $this->setGtinVanHetVerpaktItem($value);
                break;
            case 12:
                $this->setAantalVanHetVerpaktItem($value);
                break;
            case 13:
                $this->setThesaurusMetItemsVanEenheden($value);
                break;
            case 14:
                $this->setHoogteVanVerpakking($value);
                break;
            case 15:
                $this->setThesaurusitemVanEenheidHoogte($value);
                break;
            case 16:
                $this->setBreedteVanVerpakking($value);
                break;
            case 17:
                $this->setThesaurusitemVanEenheidBreedte($value);
                break;
            case 18:
                $this->setDiepteVanVerpakking($value);
                break;
            case 19:
                $this->setThesaurusitemVanEenheidDiepte($value);
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
        $keys = GsLogistiekeVerpakkingsinformatiePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setGln($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setGtin($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setZindexNummer($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setThesaurusSoortenVerpakkingen($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setThesaurusitemSoortenVerpakkingen($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNaamOpVerpakking($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOnderscheidendKenmerk($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setStartdatumBeschikbaarheidVerpakking($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setEinddatumBeschikbaarheidVerpakking($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setGtinVanHetVerpaktItem($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAantalVanHetVerpaktItem($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setThesaurusMetItemsVanEenheden($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setHoogteVanVerpakking($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setThesaurusitemVanEenheidHoogte($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setBreedteVanVerpakking($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setThesaurusitemVanEenheidBreedte($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDiepteVanVerpakking($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setThesaurusitemVanEenheidDiepte($arr[$keys[19]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);

        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::BESTANDNUMMER)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::MUTATIEKODE)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::GLN)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::GLN, $this->gln);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::GTIN)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::GTIN, $this->gtin);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, $this->zindex_nummer);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_SOORTEN_VERPAKKINGEN)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_SOORTEN_VERPAKKINGEN, $this->thesaurus_soorten_verpakkingen);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_SOORTEN_VERPAKKINGEN)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_SOORTEN_VERPAKKINGEN, $this->thesaurusitem_soorten_verpakkingen);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::NAAM_OP_VERPAKKING)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::NAAM_OP_VERPAKKING, $this->naam_op_verpakking);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::ONDERSCHEIDEND_KENMERK)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::ONDERSCHEIDEND_KENMERK, $this->onderscheidend_kenmerk);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::STARTDATUM_BESCHIKBAARHEID_VERPAKKING)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::STARTDATUM_BESCHIKBAARHEID_VERPAKKING, $this->startdatum_beschikbaarheid_verpakking);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::EINDDATUM_BESCHIKBAARHEID_VERPAKKING)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::EINDDATUM_BESCHIKBAARHEID_VERPAKKING, $this->einddatum_beschikbaarheid_verpakking);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM, $this->gtin_van_het_verpakt_item);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::AANTAL_VAN_HET_VERPAKT_ITEM)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::AANTAL_VAN_HET_VERPAKT_ITEM, $this->aantal_van_het_verpakt_item);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, $this->thesaurus_met_items_van_eenheden);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::HOOGTE_VAN_VERPAKKING)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::HOOGTE_VAN_VERPAKKING, $this->hoogte_van_verpakking);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_HOOGTE)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_HOOGTE, $this->thesaurusitem_van_eenheid_hoogte);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::BREEDTE_VAN_VERPAKKING)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::BREEDTE_VAN_VERPAKKING, $this->breedte_van_verpakking);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_BREEDTE)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_BREEDTE, $this->thesaurusitem_van_eenheid_breedte);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::DIEPTE_VAN_VERPAKKING)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::DIEPTE_VAN_VERPAKKING, $this->diepte_van_verpakking);
        if ($this->isColumnModified(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_DIEPTE)) $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_DIEPTE, $this->thesaurusitem_van_eenheid_diepte);

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
        $criteria = new Criteria(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);
        $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::GLN, $this->gln);
        $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::GTIN, $this->gtin);
        $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM, $this->gtin_van_het_verpakt_item);

        return $criteria;
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getGln();
        $pks[1] = $this->getGtin();
        $pks[2] = $this->getGtinVanHetVerpaktItem();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setGln($keys[0]);
        $this->setGtin($keys[1]);
        $this->setGtinVanHetVerpaktItem($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getGln()) && (null === $this->getGtin()) && (null === $this->getGtinVanHetVerpaktItem());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsLogistiekeVerpakkingsinformatie (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setGln($this->getGln());
        $copyObj->setGtin($this->getGtin());
        $copyObj->setZindexNummer($this->getZindexNummer());
        $copyObj->setThesaurusSoortenVerpakkingen($this->getThesaurusSoortenVerpakkingen());
        $copyObj->setThesaurusitemSoortenVerpakkingen($this->getThesaurusitemSoortenVerpakkingen());
        $copyObj->setNaamOpVerpakking($this->getNaamOpVerpakking());
        $copyObj->setOnderscheidendKenmerk($this->getOnderscheidendKenmerk());
        $copyObj->setStartdatumBeschikbaarheidVerpakking($this->getStartdatumBeschikbaarheidVerpakking());
        $copyObj->setEinddatumBeschikbaarheidVerpakking($this->getEinddatumBeschikbaarheidVerpakking());
        $copyObj->setGtinVanHetVerpaktItem($this->getGtinVanHetVerpaktItem());
        $copyObj->setAantalVanHetVerpaktItem($this->getAantalVanHetVerpaktItem());
        $copyObj->setThesaurusMetItemsVanEenheden($this->getThesaurusMetItemsVanEenheden());
        $copyObj->setHoogteVanVerpakking($this->getHoogteVanVerpakking());
        $copyObj->setThesaurusitemVanEenheidHoogte($this->getThesaurusitemVanEenheidHoogte());
        $copyObj->setBreedteVanVerpakking($this->getBreedteVanVerpakking());
        $copyObj->setThesaurusitemVanEenheidBreedte($this->getThesaurusitemVanEenheidBreedte());
        $copyObj->setDiepteVanVerpakking($this->getDiepteVanVerpakking());
        $copyObj->setThesaurusitemVanEenheidDiepte($this->getThesaurusitemVanEenheidDiepte());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
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
     * @return GsLogistiekeVerpakkingsinformatie Clone of current object.
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
     * @return GsLogistiekeVerpakkingsinformatiePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsLogistiekeVerpakkingsinformatiePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSoortenVerpakkingOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesaurusSoortenVerpakkingen(NULL);
        } else {
            $this->setThesaurusSoortenVerpakkingen($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setThesaurusitemSoortenVerpakkingen(NULL);
        } else {
            $this->setThesaurusitemSoortenVerpakkingen($v->getThesaurusItemnummer());
        }

        $this->aSoortenVerpakkingOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($this);
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
    public function getSoortenVerpakkingOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSoortenVerpakkingOmschrijving === null && ($this->thesaurus_soorten_verpakkingen !== null && $this->thesaurusitem_soorten_verpakkingen !== null) && $doQuery) {
            $this->aSoortenVerpakkingOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesaurus_soorten_verpakkingen, $this->thesaurusitem_soorten_verpakkingen), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSoortenVerpakkingOmschrijving->addGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($this);
             */
        }

        return $this->aSoortenVerpakkingOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     * @throws PropelException
     */
    public function setHoogteEenheidOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesaurusMetItemsVanEenheden(NULL);
        } else {
            $this->setThesaurusMetItemsVanEenheden($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setThesaurusitemVanEenheidHoogte(NULL);
        } else {
            $this->setThesaurusitemVanEenheidHoogte($v->getThesaurusItemnummer());
        }

        $this->aHoogteEenheidOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($this);
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
    public function getHoogteEenheidOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aHoogteEenheidOmschrijving === null && ($this->thesaurus_met_items_van_eenheden !== null && $this->thesaurusitem_van_eenheid_hoogte !== null) && $doQuery) {
            $this->aHoogteEenheidOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesaurus_met_items_van_eenheden, $this->thesaurusitem_van_eenheid_hoogte), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aHoogteEenheidOmschrijving->addGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($this);
             */
        }

        return $this->aHoogteEenheidOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     * @throws PropelException
     */
    public function setDiepteEenheidOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesaurusMetItemsVanEenheden(NULL);
        } else {
            $this->setThesaurusMetItemsVanEenheden($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setThesaurusitemVanEenheidDiepte(NULL);
        } else {
            $this->setThesaurusitemVanEenheidDiepte($v->getThesaurusItemnummer());
        }

        $this->aDiepteEenheidOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($this);
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
    public function getDiepteEenheidOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aDiepteEenheidOmschrijving === null && ($this->thesaurus_met_items_van_eenheden !== null && $this->thesaurusitem_van_eenheid_diepte !== null) && $doQuery) {
            $this->aDiepteEenheidOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesaurus_met_items_van_eenheden, $this->thesaurusitem_van_eenheid_diepte), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aDiepteEenheidOmschrijving->addGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($this);
             */
        }

        return $this->aDiepteEenheidOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     * @throws PropelException
     */
    public function setBreedteEenheidOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesaurusMetItemsVanEenheden(NULL);
        } else {
            $this->setThesaurusMetItemsVanEenheden($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setThesaurusitemVanEenheidBreedte(NULL);
        } else {
            $this->setThesaurusitemVanEenheidBreedte($v->getThesaurusItemnummer());
        }

        $this->aBreedteEenheidOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($this);
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
    public function getBreedteEenheidOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aBreedteEenheidOmschrijving === null && ($this->thesaurus_met_items_van_eenheden !== null && $this->thesaurusitem_van_eenheid_breedte !== null) && $doQuery) {
            $this->aBreedteEenheidOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesaurus_met_items_van_eenheden, $this->thesaurusitem_van_eenheid_breedte), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aBreedteEenheidOmschrijving->addGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($this);
             */
        }

        return $this->aBreedteEenheidOmschrijving;
    }

    /**
     * Declares an association between this object and a GsArtikelen object.
     *
     * @param                  GsArtikelen $v
     * @return GsLogistiekeVerpakkingsinformatie The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsArtikelen(GsArtikelen $v = null)
    {
        if ($v === null) {
            $this->setZindexNummer(NULL);
        } else {
            $this->setZindexNummer($v->getZinummer());
        }

        $this->aGsArtikelen = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsArtikelen object, it will not be re-added.
        if ($v !== null) {
            $v->addGsLogistiekeVerpakkingsinformatie($this);
        }


        return $this;
    }


    /**
     * Get the associated GsArtikelen object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsArtikelen The associated GsArtikelen object.
     * @throws PropelException
     */
    public function getGsArtikelen(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsArtikelen === null && ($this->zindex_nummer !== null) && $doQuery) {
            $this->aGsArtikelen = GsArtikelenQuery::create()->findPk($this->zindex_nummer, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsArtikelen->addGsLogistiekeVerpakkingsinformaties($this);
             */
        }

        return $this->aGsArtikelen;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->gln = null;
        $this->gtin = null;
        $this->zindex_nummer = null;
        $this->thesaurus_soorten_verpakkingen = null;
        $this->thesaurusitem_soorten_verpakkingen = null;
        $this->naam_op_verpakking = null;
        $this->onderscheidend_kenmerk = null;
        $this->startdatum_beschikbaarheid_verpakking = null;
        $this->einddatum_beschikbaarheid_verpakking = null;
        $this->gtin_van_het_verpakt_item = null;
        $this->aantal_van_het_verpakt_item = null;
        $this->thesaurus_met_items_van_eenheden = null;
        $this->hoogte_van_verpakking = null;
        $this->thesaurusitem_van_eenheid_hoogte = null;
        $this->breedte_van_verpakking = null;
        $this->thesaurusitem_van_eenheid_breedte = null;
        $this->diepte_van_verpakking = null;
        $this->thesaurusitem_van_eenheid_diepte = null;
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
            if ($this->aSoortenVerpakkingOmschrijving instanceof Persistent) {
              $this->aSoortenVerpakkingOmschrijving->clearAllReferences($deep);
            }
            if ($this->aHoogteEenheidOmschrijving instanceof Persistent) {
              $this->aHoogteEenheidOmschrijving->clearAllReferences($deep);
            }
            if ($this->aDiepteEenheidOmschrijving instanceof Persistent) {
              $this->aDiepteEenheidOmschrijving->clearAllReferences($deep);
            }
            if ($this->aBreedteEenheidOmschrijving instanceof Persistent) {
              $this->aBreedteEenheidOmschrijving->clearAllReferences($deep);
            }
            if ($this->aGsArtikelen instanceof Persistent) {
              $this->aGsArtikelen->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aSoortenVerpakkingOmschrijving = null;
        $this->aHoogteEenheidOmschrijving = null;
        $this->aDiepteEenheidOmschrijving = null;
        $this->aBreedteEenheidOmschrijving = null;
        $this->aGsArtikelen = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsLogistiekeVerpakkingsinformatiePeer::DEFAULT_STRING_FORMAT);
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
