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
use PharmaIntelligence\GstandaardBundle\Model\GsLeveranciersassortimenten;
use PharmaIntelligence\GstandaardBundle\Model\GsLeveranciersassortimentenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsLeveranciersassortimentenQuery;

abstract class BaseGsLeveranciersassortimenten extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLeveranciersassortimentenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsLeveranciersassortimentenPeer
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
     * The value for the assortimentsnummer field.
     * @var        int
     */
    protected $assortimentsnummer;

    /**
     * The value for the zinummer field.
     * @var        int
     */
    protected $zinummer;

    /**
     * The value for the intern_artikelnummer_assorthouder field.
     * @var        string
     */
    protected $intern_artikelnummer_assorthouder;

    /**
     * The value for the faktor_van_het_artikelnummer field.
     * @var        string
     */
    protected $faktor_van_het_artikelnummer;

    /**
     * The value for the omschrijving field.
     * @var        string
     */
    protected $omschrijving;

    /**
     * The value for the assortimentshouder field.
     * @var        int
     */
    protected $assortimentshouder;

    /**
     * The value for the datum_van_ingang field.
     * @var        string
     */
    protected $datum_van_ingang;

    /**
     * The value for the retourtermijn field.
     * @var        int
     */
    protected $retourtermijn;

    /**
     * The value for the retouraanduiding field.
     * @var        string
     */
    protected $retouraanduiding;

    /**
     * The value for the retourpercentage field.
     * @var        int
     */
    protected $retourpercentage;

    /**
     * The value for the assortimentsprijs field.
     * @var        string
     */
    protected $assortimentsprijs;

    /**
     * The value for the opgegeven_verkoopprijs field.
     * @var        string
     */
    protected $opgegeven_verkoopprijs;

    /**
     * The value for the btwkode_van_assortimentshouder field.
     * @var        int
     */
    protected $btwkode_van_assortimentshouder;

    /**
     * The value for the hoeveelheid field.
     * @var        string
     */
    protected $hoeveelheid;

    /**
     * The value for the eenheid field.
     * @var        string
     */
    protected $eenheid;

    /**
     * The value for the ean_barcode field.
     * @var        string
     */
    protected $ean_barcode;

    /**
     * The value for the hibc_barcode field.
     * @var        string
     */
    protected $hibc_barcode;

    /**
     * The value for the minikaart_kode field.
     * @var        int
     */
    protected $minikaart_kode;

    /**
     * The value for the bestelmogelijkheid field.
     * @var        string
     */
    protected $bestelmogelijkheid;

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
     * Get the [assortimentsnummer] column value.
     *
     * @return int
     */
    public function getAssortimentsnummer()
    {

        return $this->assortimentsnummer;
    }

    /**
     * Get the [zinummer] column value.
     *
     * @return int
     */
    public function getZinummer()
    {

        return $this->zinummer;
    }

    /**
     * Get the [intern_artikelnummer_assorthouder] column value.
     *
     * @return string
     */
    public function getInternArtikelnummerAssorthouder()
    {

        return $this->intern_artikelnummer_assorthouder;
    }

    /**
     * Get the [faktor_van_het_artikelnummer] column value.
     *
     * @return string
     */
    public function getFaktorVanHetArtikelnummer()
    {

        return $this->faktor_van_het_artikelnummer;
    }

    /**
     * Get the [omschrijving] column value.
     *
     * @return string
     */
    public function getOmschrijving()
    {

        return $this->omschrijving;
    }

    /**
     * Get the [assortimentshouder] column value.
     *
     * @return int
     */
    public function getAssortimentshouder()
    {

        return $this->assortimentshouder;
    }

    /**
     * Get the [optionally formatted] temporal [datum_van_ingang] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatumVanIngang($format = null)
    {
        if ($this->datum_van_ingang === null) {
            return null;
        }

        if ($this->datum_van_ingang === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datum_van_ingang);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datum_van_ingang, true), $x);
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
     * Get the [retourtermijn] column value.
     *
     * @return int
     */
    public function getRetourtermijn()
    {

        return $this->retourtermijn;
    }

    /**
     * Get the [retouraanduiding] column value.
     *
     * @return string
     */
    public function getRetouraanduiding()
    {

        return $this->retouraanduiding;
    }

    /**
     * Get the [retourpercentage] column value.
     *
     * @return int
     */
    public function getRetourpercentage()
    {

        return $this->retourpercentage;
    }

    /**
     * Get the [assortimentsprijs] column value.
     *
     * @return string
     */
    public function getAssortimentsprijs()
    {

        return $this->assortimentsprijs;
    }

    /**
     * Get the [opgegeven_verkoopprijs] column value.
     *
     * @return string
     */
    public function getOpgegevenVerkoopprijs()
    {

        return $this->opgegeven_verkoopprijs;
    }

    /**
     * Get the [btwkode_van_assortimentshouder] column value.
     *
     * @return int
     */
    public function getBtwkodeVanAssortimentshouder()
    {

        return $this->btwkode_van_assortimentshouder;
    }

    /**
     * Get the [hoeveelheid] column value.
     *
     * @return string
     */
    public function getHoeveelheid()
    {

        return $this->hoeveelheid;
    }

    /**
     * Get the [eenheid] column value.
     *
     * @return string
     */
    public function getEenheid()
    {

        return $this->eenheid;
    }

    /**
     * Get the [ean_barcode] column value.
     *
     * @return string
     */
    public function getEanBarcode()
    {

        return $this->ean_barcode;
    }

    /**
     * Get the [hibc_barcode] column value.
     *
     * @return string
     */
    public function getHibcBarcode()
    {

        return $this->hibc_barcode;
    }

    /**
     * Get the [minikaart_kode] column value.
     *
     * @return int
     */
    public function getMinikaartKode()
    {

        return $this->minikaart_kode;
    }

    /**
     * Get the [bestelmogelijkheid] column value.
     *
     * @return string
     */
    public function getBestelmogelijkheid()
    {

        return $this->bestelmogelijkheid;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [assortimentsnummer] column.
     *
     * @param  int $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setAssortimentsnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->assortimentsnummer !== $v) {
            $this->assortimentsnummer = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER;
        }


        return $this;
    } // setAssortimentsnummer()

    /**
     * Set the value of [zinummer] column.
     *
     * @param  int $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setZinummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zinummer !== $v) {
            $this->zinummer = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::ZINUMMER;
        }

        if ($this->aGsArtikelen !== null && $this->aGsArtikelen->getZinummer() !== $v) {
            $this->aGsArtikelen = null;
        }


        return $this;
    } // setZinummer()

    /**
     * Set the value of [intern_artikelnummer_assorthouder] column.
     *
     * @param  string $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setInternArtikelnummerAssorthouder($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intern_artikelnummer_assorthouder !== $v) {
            $this->intern_artikelnummer_assorthouder = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::INTERN_ARTIKELNUMMER_ASSORTHOUDER;
        }


        return $this;
    } // setInternArtikelnummerAssorthouder()

    /**
     * Set the value of [faktor_van_het_artikelnummer] column.
     *
     * @param  string $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setFaktorVanHetArtikelnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->faktor_van_het_artikelnummer !== $v) {
            $this->faktor_van_het_artikelnummer = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::FAKTOR_VAN_HET_ARTIKELNUMMER;
        }


        return $this;
    } // setFaktorVanHetArtikelnummer()

    /**
     * Set the value of [omschrijving] column.
     *
     * @param  string $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setOmschrijving($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->omschrijving !== $v) {
            $this->omschrijving = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::OMSCHRIJVING;
        }


        return $this;
    } // setOmschrijving()

    /**
     * Set the value of [assortimentshouder] column.
     *
     * @param  int $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setAssortimentshouder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->assortimentshouder !== $v) {
            $this->assortimentshouder = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::ASSORTIMENTSHOUDER;
        }


        return $this;
    } // setAssortimentshouder()

    /**
     * Sets the value of [datum_van_ingang] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setDatumVanIngang($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datum_van_ingang !== null || $dt !== null) {
            $currentDateAsString = ($this->datum_van_ingang !== null && $tmpDt = new DateTime($this->datum_van_ingang)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datum_van_ingang = $newDateAsString;
                $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::DATUM_VAN_INGANG;
            }
        } // if either are not null


        return $this;
    } // setDatumVanIngang()

    /**
     * Set the value of [retourtermijn] column.
     *
     * @param  int $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setRetourtermijn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->retourtermijn !== $v) {
            $this->retourtermijn = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::RETOURTERMIJN;
        }


        return $this;
    } // setRetourtermijn()

    /**
     * Set the value of [retouraanduiding] column.
     *
     * @param  string $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setRetouraanduiding($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->retouraanduiding !== $v) {
            $this->retouraanduiding = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::RETOURAANDUIDING;
        }


        return $this;
    } // setRetouraanduiding()

    /**
     * Set the value of [retourpercentage] column.
     *
     * @param  int $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setRetourpercentage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->retourpercentage !== $v) {
            $this->retourpercentage = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::RETOURPERCENTAGE;
        }


        return $this;
    } // setRetourpercentage()

    /**
     * Set the value of [assortimentsprijs] column.
     *
     * @param  string $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setAssortimentsprijs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->assortimentsprijs !== $v) {
            $this->assortimentsprijs = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::ASSORTIMENTSPRIJS;
        }


        return $this;
    } // setAssortimentsprijs()

    /**
     * Set the value of [opgegeven_verkoopprijs] column.
     *
     * @param  string $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setOpgegevenVerkoopprijs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->opgegeven_verkoopprijs !== $v) {
            $this->opgegeven_verkoopprijs = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::OPGEGEVEN_VERKOOPPRIJS;
        }


        return $this;
    } // setOpgegevenVerkoopprijs()

    /**
     * Set the value of [btwkode_van_assortimentshouder] column.
     *
     * @param  int $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setBtwkodeVanAssortimentshouder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->btwkode_van_assortimentshouder !== $v) {
            $this->btwkode_van_assortimentshouder = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::BTWKODE_VAN_ASSORTIMENTSHOUDER;
        }


        return $this;
    } // setBtwkodeVanAssortimentshouder()

    /**
     * Set the value of [hoeveelheid] column.
     *
     * @param  string $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setHoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hoeveelheid !== $v) {
            $this->hoeveelheid = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::HOEVEELHEID;
        }


        return $this;
    } // setHoeveelheid()

    /**
     * Set the value of [eenheid] column.
     *
     * @param  string $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setEenheid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->eenheid !== $v) {
            $this->eenheid = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::EENHEID;
        }


        return $this;
    } // setEenheid()

    /**
     * Set the value of [ean_barcode] column.
     *
     * @param  string $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setEanBarcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ean_barcode !== $v) {
            $this->ean_barcode = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::EAN_BARCODE;
        }


        return $this;
    } // setEanBarcode()

    /**
     * Set the value of [hibc_barcode] column.
     *
     * @param  string $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setHibcBarcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hibc_barcode !== $v) {
            $this->hibc_barcode = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::HIBC_BARCODE;
        }


        return $this;
    } // setHibcBarcode()

    /**
     * Set the value of [minikaart_kode] column.
     *
     * @param  int $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setMinikaartKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->minikaart_kode !== $v) {
            $this->minikaart_kode = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::MINIKAART_KODE;
        }


        return $this;
    } // setMinikaartKode()

    /**
     * Set the value of [bestelmogelijkheid] column.
     *
     * @param  string $v new value
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     */
    public function setBestelmogelijkheid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bestelmogelijkheid !== $v) {
            $this->bestelmogelijkheid = $v;
            $this->modifiedColumns[] = GsLeveranciersassortimentenPeer::BESTELMOGELIJKHEID;
        }


        return $this;
    } // setBestelmogelijkheid()

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
            $this->assortimentsnummer = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->zinummer = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->intern_artikelnummer_assorthouder = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->faktor_van_het_artikelnummer = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->omschrijving = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->assortimentshouder = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->datum_van_ingang = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->retourtermijn = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->retouraanduiding = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->retourpercentage = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->assortimentsprijs = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->opgegeven_verkoopprijs = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->btwkode_van_assortimentshouder = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->hoeveelheid = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->eenheid = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->ean_barcode = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->hibc_barcode = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->minikaart_kode = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->bestelmogelijkheid = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 21; // 21 = GsLeveranciersassortimentenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsLeveranciersassortimenten object", $e);
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

        if ($this->aGsArtikelen !== null && $this->zinummer !== $this->aGsArtikelen->getZinummer()) {
            $this->aGsArtikelen = null;
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
            $con = Propel::getConnection(GsLeveranciersassortimentenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsLeveranciersassortimentenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

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
            $con = Propel::getConnection(GsLeveranciersassortimentenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsLeveranciersassortimentenQuery::create()
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
            $con = Propel::getConnection(GsLeveranciersassortimentenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsLeveranciersassortimentenPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`assortimentsnummer`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::ZINUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`zinummer`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::INTERN_ARTIKELNUMMER_ASSORTHOUDER)) {
            $modifiedColumns[':p' . $index++]  = '`intern_artikelnummer_assorthouder`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::FAKTOR_VAN_HET_ARTIKELNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`faktor_van_het_artikelnummer`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::OMSCHRIJVING)) {
            $modifiedColumns[':p' . $index++]  = '`omschrijving`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::ASSORTIMENTSHOUDER)) {
            $modifiedColumns[':p' . $index++]  = '`assortimentshouder`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::DATUM_VAN_INGANG)) {
            $modifiedColumns[':p' . $index++]  = '`datum_van_ingang`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::RETOURTERMIJN)) {
            $modifiedColumns[':p' . $index++]  = '`retourtermijn`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::RETOURAANDUIDING)) {
            $modifiedColumns[':p' . $index++]  = '`retouraanduiding`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::RETOURPERCENTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`retourpercentage`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::ASSORTIMENTSPRIJS)) {
            $modifiedColumns[':p' . $index++]  = '`assortimentsprijs`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::OPGEGEVEN_VERKOOPPRIJS)) {
            $modifiedColumns[':p' . $index++]  = '`opgegeven_verkoopprijs`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::BTWKODE_VAN_ASSORTIMENTSHOUDER)) {
            $modifiedColumns[':p' . $index++]  = '`btwkode_van_assortimentshouder`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::HOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`hoeveelheid`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`eenheid`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::EAN_BARCODE)) {
            $modifiedColumns[':p' . $index++]  = '`ean_barcode`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::HIBC_BARCODE)) {
            $modifiedColumns[':p' . $index++]  = '`hibc_barcode`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::MINIKAART_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`minikaart_kode`';
        }
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::BESTELMOGELIJKHEID)) {
            $modifiedColumns[':p' . $index++]  = '`bestelmogelijkheid`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_leveranciersassortimenten` (%s) VALUES (%s)',
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
                    case '`assortimentsnummer`':
                        $stmt->bindValue($identifier, $this->assortimentsnummer, PDO::PARAM_INT);
                        break;
                    case '`zinummer`':
                        $stmt->bindValue($identifier, $this->zinummer, PDO::PARAM_INT);
                        break;
                    case '`intern_artikelnummer_assorthouder`':
                        $stmt->bindValue($identifier, $this->intern_artikelnummer_assorthouder, PDO::PARAM_STR);
                        break;
                    case '`faktor_van_het_artikelnummer`':
                        $stmt->bindValue($identifier, $this->faktor_van_het_artikelnummer, PDO::PARAM_STR);
                        break;
                    case '`omschrijving`':
                        $stmt->bindValue($identifier, $this->omschrijving, PDO::PARAM_STR);
                        break;
                    case '`assortimentshouder`':
                        $stmt->bindValue($identifier, $this->assortimentshouder, PDO::PARAM_INT);
                        break;
                    case '`datum_van_ingang`':
                        $stmt->bindValue($identifier, $this->datum_van_ingang, PDO::PARAM_STR);
                        break;
                    case '`retourtermijn`':
                        $stmt->bindValue($identifier, $this->retourtermijn, PDO::PARAM_INT);
                        break;
                    case '`retouraanduiding`':
                        $stmt->bindValue($identifier, $this->retouraanduiding, PDO::PARAM_STR);
                        break;
                    case '`retourpercentage`':
                        $stmt->bindValue($identifier, $this->retourpercentage, PDO::PARAM_INT);
                        break;
                    case '`assortimentsprijs`':
                        $stmt->bindValue($identifier, $this->assortimentsprijs, PDO::PARAM_STR);
                        break;
                    case '`opgegeven_verkoopprijs`':
                        $stmt->bindValue($identifier, $this->opgegeven_verkoopprijs, PDO::PARAM_STR);
                        break;
                    case '`btwkode_van_assortimentshouder`':
                        $stmt->bindValue($identifier, $this->btwkode_van_assortimentshouder, PDO::PARAM_INT);
                        break;
                    case '`hoeveelheid`':
                        $stmt->bindValue($identifier, $this->hoeveelheid, PDO::PARAM_STR);
                        break;
                    case '`eenheid`':
                        $stmt->bindValue($identifier, $this->eenheid, PDO::PARAM_STR);
                        break;
                    case '`ean_barcode`':
                        $stmt->bindValue($identifier, $this->ean_barcode, PDO::PARAM_STR);
                        break;
                    case '`hibc_barcode`':
                        $stmt->bindValue($identifier, $this->hibc_barcode, PDO::PARAM_STR);
                        break;
                    case '`minikaart_kode`':
                        $stmt->bindValue($identifier, $this->minikaart_kode, PDO::PARAM_INT);
                        break;
                    case '`bestelmogelijkheid`':
                        $stmt->bindValue($identifier, $this->bestelmogelijkheid, PDO::PARAM_STR);
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

            if ($this->aGsArtikelen !== null) {
                if (!$this->aGsArtikelen->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsArtikelen->getValidationFailures());
                }
            }


            if (($retval = GsLeveranciersassortimentenPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsLeveranciersassortimentenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAssortimentsnummer();
                break;
            case 3:
                return $this->getZinummer();
                break;
            case 4:
                return $this->getInternArtikelnummerAssorthouder();
                break;
            case 5:
                return $this->getFaktorVanHetArtikelnummer();
                break;
            case 6:
                return $this->getOmschrijving();
                break;
            case 7:
                return $this->getAssortimentshouder();
                break;
            case 8:
                return $this->getDatumVanIngang();
                break;
            case 9:
                return $this->getRetourtermijn();
                break;
            case 10:
                return $this->getRetouraanduiding();
                break;
            case 11:
                return $this->getRetourpercentage();
                break;
            case 12:
                return $this->getAssortimentsprijs();
                break;
            case 13:
                return $this->getOpgegevenVerkoopprijs();
                break;
            case 14:
                return $this->getBtwkodeVanAssortimentshouder();
                break;
            case 15:
                return $this->getHoeveelheid();
                break;
            case 16:
                return $this->getEenheid();
                break;
            case 17:
                return $this->getEanBarcode();
                break;
            case 18:
                return $this->getHibcBarcode();
                break;
            case 19:
                return $this->getMinikaartKode();
                break;
            case 20:
                return $this->getBestelmogelijkheid();
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
        if (isset($alreadyDumpedObjects['GsLeveranciersassortimenten'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsLeveranciersassortimenten'][$this->getPrimaryKey()] = true;
        $keys = GsLeveranciersassortimentenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getAssortimentsnummer(),
            $keys[3] => $this->getZinummer(),
            $keys[4] => $this->getInternArtikelnummerAssorthouder(),
            $keys[5] => $this->getFaktorVanHetArtikelnummer(),
            $keys[6] => $this->getOmschrijving(),
            $keys[7] => $this->getAssortimentshouder(),
            $keys[8] => $this->getDatumVanIngang(),
            $keys[9] => $this->getRetourtermijn(),
            $keys[10] => $this->getRetouraanduiding(),
            $keys[11] => $this->getRetourpercentage(),
            $keys[12] => $this->getAssortimentsprijs(),
            $keys[13] => $this->getOpgegevenVerkoopprijs(),
            $keys[14] => $this->getBtwkodeVanAssortimentshouder(),
            $keys[15] => $this->getHoeveelheid(),
            $keys[16] => $this->getEenheid(),
            $keys[17] => $this->getEanBarcode(),
            $keys[18] => $this->getHibcBarcode(),
            $keys[19] => $this->getMinikaartKode(),
            $keys[20] => $this->getBestelmogelijkheid(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
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
        $pos = GsLeveranciersassortimentenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAssortimentsnummer($value);
                break;
            case 3:
                $this->setZinummer($value);
                break;
            case 4:
                $this->setInternArtikelnummerAssorthouder($value);
                break;
            case 5:
                $this->setFaktorVanHetArtikelnummer($value);
                break;
            case 6:
                $this->setOmschrijving($value);
                break;
            case 7:
                $this->setAssortimentshouder($value);
                break;
            case 8:
                $this->setDatumVanIngang($value);
                break;
            case 9:
                $this->setRetourtermijn($value);
                break;
            case 10:
                $this->setRetouraanduiding($value);
                break;
            case 11:
                $this->setRetourpercentage($value);
                break;
            case 12:
                $this->setAssortimentsprijs($value);
                break;
            case 13:
                $this->setOpgegevenVerkoopprijs($value);
                break;
            case 14:
                $this->setBtwkodeVanAssortimentshouder($value);
                break;
            case 15:
                $this->setHoeveelheid($value);
                break;
            case 16:
                $this->setEenheid($value);
                break;
            case 17:
                $this->setEanBarcode($value);
                break;
            case 18:
                $this->setHibcBarcode($value);
                break;
            case 19:
                $this->setMinikaartKode($value);
                break;
            case 20:
                $this->setBestelmogelijkheid($value);
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
        $keys = GsLeveranciersassortimentenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAssortimentsnummer($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setZinummer($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setInternArtikelnummerAssorthouder($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFaktorVanHetArtikelnummer($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOmschrijving($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAssortimentshouder($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDatumVanIngang($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setRetourtermijn($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setRetouraanduiding($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setRetourpercentage($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAssortimentsprijs($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setOpgegevenVerkoopprijs($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setBtwkodeVanAssortimentshouder($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setHoeveelheid($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setEenheid($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setEanBarcode($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setHibcBarcode($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setMinikaartKode($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setBestelmogelijkheid($arr[$keys[20]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsLeveranciersassortimentenPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::BESTANDNUMMER)) $criteria->add(GsLeveranciersassortimentenPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::MUTATIEKODE)) $criteria->add(GsLeveranciersassortimentenPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER)) $criteria->add(GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER, $this->assortimentsnummer);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::ZINUMMER)) $criteria->add(GsLeveranciersassortimentenPeer::ZINUMMER, $this->zinummer);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::INTERN_ARTIKELNUMMER_ASSORTHOUDER)) $criteria->add(GsLeveranciersassortimentenPeer::INTERN_ARTIKELNUMMER_ASSORTHOUDER, $this->intern_artikelnummer_assorthouder);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::FAKTOR_VAN_HET_ARTIKELNUMMER)) $criteria->add(GsLeveranciersassortimentenPeer::FAKTOR_VAN_HET_ARTIKELNUMMER, $this->faktor_van_het_artikelnummer);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::OMSCHRIJVING)) $criteria->add(GsLeveranciersassortimentenPeer::OMSCHRIJVING, $this->omschrijving);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::ASSORTIMENTSHOUDER)) $criteria->add(GsLeveranciersassortimentenPeer::ASSORTIMENTSHOUDER, $this->assortimentshouder);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::DATUM_VAN_INGANG)) $criteria->add(GsLeveranciersassortimentenPeer::DATUM_VAN_INGANG, $this->datum_van_ingang);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::RETOURTERMIJN)) $criteria->add(GsLeveranciersassortimentenPeer::RETOURTERMIJN, $this->retourtermijn);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::RETOURAANDUIDING)) $criteria->add(GsLeveranciersassortimentenPeer::RETOURAANDUIDING, $this->retouraanduiding);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::RETOURPERCENTAGE)) $criteria->add(GsLeveranciersassortimentenPeer::RETOURPERCENTAGE, $this->retourpercentage);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::ASSORTIMENTSPRIJS)) $criteria->add(GsLeveranciersassortimentenPeer::ASSORTIMENTSPRIJS, $this->assortimentsprijs);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::OPGEGEVEN_VERKOOPPRIJS)) $criteria->add(GsLeveranciersassortimentenPeer::OPGEGEVEN_VERKOOPPRIJS, $this->opgegeven_verkoopprijs);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::BTWKODE_VAN_ASSORTIMENTSHOUDER)) $criteria->add(GsLeveranciersassortimentenPeer::BTWKODE_VAN_ASSORTIMENTSHOUDER, $this->btwkode_van_assortimentshouder);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::HOEVEELHEID)) $criteria->add(GsLeveranciersassortimentenPeer::HOEVEELHEID, $this->hoeveelheid);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::EENHEID)) $criteria->add(GsLeveranciersassortimentenPeer::EENHEID, $this->eenheid);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::EAN_BARCODE)) $criteria->add(GsLeveranciersassortimentenPeer::EAN_BARCODE, $this->ean_barcode);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::HIBC_BARCODE)) $criteria->add(GsLeveranciersassortimentenPeer::HIBC_BARCODE, $this->hibc_barcode);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::MINIKAART_KODE)) $criteria->add(GsLeveranciersassortimentenPeer::MINIKAART_KODE, $this->minikaart_kode);
        if ($this->isColumnModified(GsLeveranciersassortimentenPeer::BESTELMOGELIJKHEID)) $criteria->add(GsLeveranciersassortimentenPeer::BESTELMOGELIJKHEID, $this->bestelmogelijkheid);

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
        $criteria = new Criteria(GsLeveranciersassortimentenPeer::DATABASE_NAME);
        $criteria->add(GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER, $this->assortimentsnummer);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getAssortimentsnummer();
    }

    /**
     * Generic method to set the primary key (assortimentsnummer column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setAssortimentsnummer($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getAssortimentsnummer();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsLeveranciersassortimenten (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setZinummer($this->getZinummer());
        $copyObj->setInternArtikelnummerAssorthouder($this->getInternArtikelnummerAssorthouder());
        $copyObj->setFaktorVanHetArtikelnummer($this->getFaktorVanHetArtikelnummer());
        $copyObj->setOmschrijving($this->getOmschrijving());
        $copyObj->setAssortimentshouder($this->getAssortimentshouder());
        $copyObj->setDatumVanIngang($this->getDatumVanIngang());
        $copyObj->setRetourtermijn($this->getRetourtermijn());
        $copyObj->setRetouraanduiding($this->getRetouraanduiding());
        $copyObj->setRetourpercentage($this->getRetourpercentage());
        $copyObj->setAssortimentsprijs($this->getAssortimentsprijs());
        $copyObj->setOpgegevenVerkoopprijs($this->getOpgegevenVerkoopprijs());
        $copyObj->setBtwkodeVanAssortimentshouder($this->getBtwkodeVanAssortimentshouder());
        $copyObj->setHoeveelheid($this->getHoeveelheid());
        $copyObj->setEenheid($this->getEenheid());
        $copyObj->setEanBarcode($this->getEanBarcode());
        $copyObj->setHibcBarcode($this->getHibcBarcode());
        $copyObj->setMinikaartKode($this->getMinikaartKode());
        $copyObj->setBestelmogelijkheid($this->getBestelmogelijkheid());

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
            $copyObj->setAssortimentsnummer(NULL); // this is a auto-increment column, so set to default value
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
     * @return GsLeveranciersassortimenten Clone of current object.
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
     * @return GsLeveranciersassortimentenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsLeveranciersassortimentenPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsArtikelen object.
     *
     * @param                  GsArtikelen $v
     * @return GsLeveranciersassortimenten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsArtikelen(GsArtikelen $v = null)
    {
        if ($v === null) {
            $this->setZinummer(NULL);
        } else {
            $this->setZinummer($v->getZinummer());
        }

        $this->aGsArtikelen = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsArtikelen object, it will not be re-added.
        if ($v !== null) {
            $v->addGsLeveranciersassortimenten($this);
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
        if ($this->aGsArtikelen === null && ($this->zinummer !== null) && $doQuery) {
            $this->aGsArtikelen = GsArtikelenQuery::create()->findPk($this->zinummer, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsArtikelen->addGsLeveranciersassortimentens($this);
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
        $this->assortimentsnummer = null;
        $this->zinummer = null;
        $this->intern_artikelnummer_assorthouder = null;
        $this->faktor_van_het_artikelnummer = null;
        $this->omschrijving = null;
        $this->assortimentshouder = null;
        $this->datum_van_ingang = null;
        $this->retourtermijn = null;
        $this->retouraanduiding = null;
        $this->retourpercentage = null;
        $this->assortimentsprijs = null;
        $this->opgegeven_verkoopprijs = null;
        $this->btwkode_van_assortimentshouder = null;
        $this->hoeveelheid = null;
        $this->eenheid = null;
        $this->ean_barcode = null;
        $this->hibc_barcode = null;
        $this->minikaart_kode = null;
        $this->bestelmogelijkheid = null;
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
            if ($this->aGsArtikelen instanceof Persistent) {
              $this->aGsArtikelen->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aGsArtikelen = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsLeveranciersassortimentenPeer::DEFAULT_STRING_FORMAT);
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
