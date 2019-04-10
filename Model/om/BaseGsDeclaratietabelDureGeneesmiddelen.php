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
use PharmaIntelligence\GstandaardBundle\Model\GsDeclaratietabelDureGeneesmiddelen;
use PharmaIntelligence\GstandaardBundle\Model\GsDeclaratietabelDureGeneesmiddelenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsDeclaratietabelDureGeneesmiddelenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery;

abstract class BaseGsDeclaratietabelDureGeneesmiddelen extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDeclaratietabelDureGeneesmiddelenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsDeclaratietabelDureGeneesmiddelenPeer
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
     * The value for the zorgactiviteit_code field.
     * @var        int
     */
    protected $zorgactiviteit_code;

    /**
     * The value for the omschrijving field.
     * @var        string
     */
    protected $omschrijving;

    /**
     * The value for the hoeveelheid_per_toedieningseenheid field.
     * @var        string
     */
    protected $hoeveelheid_per_toedieningseenheid;

    /**
     * The value for the thesaurus_verwijzing_eenheid field.
     * @var        int
     */
    protected $thesaurus_verwijzing_eenheid;

    /**
     * The value for the eenheid field.
     * @var        int
     */
    protected $eenheid;

    /**
     * The value for the omrekenfactor_aantal_toedieningseenheden_per_hpk field.
     * @var        string
     */
    protected $omrekenfactor_aantal_toedieningseenheden_per_hpk;

    /**
     * The value for the tarief field.
     * @var        string
     */
    protected $tarief;

    /**
     * The value for the thesaurus_nummer_beleidsregel field.
     * @var        int
     */
    protected $thesaurus_nummer_beleidsregel;

    /**
     * The value for the itemnummer_beleidsregel field.
     * @var        int
     */
    protected $itemnummer_beleidsregel;

    /**
     * The value for the zorgactiviteit_voldoet_aan_beleidsregel field.
     * @var        int
     */
    protected $zorgactiviteit_voldoet_aan_beleidsregel;

    /**
     * The value for the startdatum field.
     * @var        string
     */
    protected $startdatum;

    /**
     * The value for the einddatum field.
     * @var        string
     */
    protected $einddatum;

    /**
     * @var        GsHandelsproducten
     */
    protected $aGsHandelsproducten;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aBeleidsregelOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aToedieningsEenheidOmschrijving;

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
     * Get the [handelsproduktkode] column value.
     *
     * @return int
     */
    public function getHandelsproduktkode()
    {

        return $this->handelsproduktkode;
    }

    /**
     * Get the [zorgactiviteit_code] column value.
     *
     * @return int
     */
    public function getZorgactiviteitCode()
    {

        return $this->zorgactiviteit_code;
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
     * Get the [hoeveelheid_per_toedieningseenheid] column value.
     *
     * @return string
     */
    public function getHoeveelheidPerToedieningseenheid()
    {

        return $this->hoeveelheid_per_toedieningseenheid;
    }

    /**
     * Get the [thesaurus_verwijzing_eenheid] column value.
     *
     * @return int
     */
    public function getThesaurusVerwijzingEenheid()
    {

        return $this->thesaurus_verwijzing_eenheid;
    }

    /**
     * Get the [eenheid] column value.
     *
     * @return int
     */
    public function getEenheid()
    {

        return $this->eenheid;
    }

    /**
     * Get the [omrekenfactor_aantal_toedieningseenheden_per_hpk] column value.
     *
     * @return string
     */
    public function getOmrekenfactorAantalToedieningseenhedenPerHpk()
    {

        return $this->omrekenfactor_aantal_toedieningseenheden_per_hpk;
    }

    /**
     * Get the [tarief] column value.
     *
     * @return string
     */
    public function getTarief()
    {

        return $this->tarief;
    }

    /**
     * Get the [thesaurus_nummer_beleidsregel] column value.
     *
     * @return int
     */
    public function getThesaurusNummerBeleidsregel()
    {

        return $this->thesaurus_nummer_beleidsregel;
    }

    /**
     * Get the [itemnummer_beleidsregel] column value.
     *
     * @return int
     */
    public function getItemnummerBeleidsregel()
    {

        return $this->itemnummer_beleidsregel;
    }

    /**
     * Get the [zorgactiviteit_voldoet_aan_beleidsregel] column value.
     *
     * @return int
     */
    public function getZorgactiviteitVoldoetAanBeleidsregel()
    {

        return $this->zorgactiviteit_voldoet_aan_beleidsregel;
    }

    /**
     * Get the [optionally formatted] temporal [startdatum] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getStartdatum($format = null)
    {
        if ($this->startdatum === null) {
            return null;
        }

        if ($this->startdatum === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->startdatum);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->startdatum, true), $x);
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
     * Get the [optionally formatted] temporal [einddatum] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEinddatum($format = null)
    {
        if ($this->einddatum === null) {
            return null;
        }

        if ($this->einddatum === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->einddatum);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->einddatum, true), $x);
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
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsDeclaratietabelDureGeneesmiddelen The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsDeclaratietabelDureGeneesmiddelenPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsDeclaratietabelDureGeneesmiddelen The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsDeclaratietabelDureGeneesmiddelenPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [handelsproduktkode] column.
     *
     * @param  int $v new value
     * @return GsDeclaratietabelDureGeneesmiddelen The current object (for fluent API support)
     */
    public function setHandelsproduktkode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->handelsproduktkode !== $v) {
            $this->handelsproduktkode = $v;
            $this->modifiedColumns[] = GsDeclaratietabelDureGeneesmiddelenPeer::HANDELSPRODUKTKODE;
        }

        if ($this->aGsHandelsproducten !== null && $this->aGsHandelsproducten->getHandelsproduktkode() !== $v) {
            $this->aGsHandelsproducten = null;
        }


        return $this;
    } // setHandelsproduktkode()

    /**
     * Set the value of [zorgactiviteit_code] column.
     *
     * @param  int $v new value
     * @return GsDeclaratietabelDureGeneesmiddelen The current object (for fluent API support)
     */
    public function setZorgactiviteitCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zorgactiviteit_code !== $v) {
            $this->zorgactiviteit_code = $v;
            $this->modifiedColumns[] = GsDeclaratietabelDureGeneesmiddelenPeer::ZORGACTIVITEIT_CODE;
        }


        return $this;
    } // setZorgactiviteitCode()

    /**
     * Set the value of [omschrijving] column.
     *
     * @param  string $v new value
     * @return GsDeclaratietabelDureGeneesmiddelen The current object (for fluent API support)
     */
    public function setOmschrijving($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->omschrijving !== $v) {
            $this->omschrijving = $v;
            $this->modifiedColumns[] = GsDeclaratietabelDureGeneesmiddelenPeer::OMSCHRIJVING;
        }


        return $this;
    } // setOmschrijving()

    /**
     * Set the value of [hoeveelheid_per_toedieningseenheid] column.
     *
     * @param  string $v new value
     * @return GsDeclaratietabelDureGeneesmiddelen The current object (for fluent API support)
     */
    public function setHoeveelheidPerToedieningseenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hoeveelheid_per_toedieningseenheid !== $v) {
            $this->hoeveelheid_per_toedieningseenheid = $v;
            $this->modifiedColumns[] = GsDeclaratietabelDureGeneesmiddelenPeer::HOEVEELHEID_PER_TOEDIENINGSEENHEID;
        }


        return $this;
    } // setHoeveelheidPerToedieningseenheid()

    /**
     * Set the value of [thesaurus_verwijzing_eenheid] column.
     *
     * @param  int $v new value
     * @return GsDeclaratietabelDureGeneesmiddelen The current object (for fluent API support)
     */
    public function setThesaurusVerwijzingEenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurus_verwijzing_eenheid !== $v) {
            $this->thesaurus_verwijzing_eenheid = $v;
            $this->modifiedColumns[] = GsDeclaratietabelDureGeneesmiddelenPeer::THESAURUS_VERWIJZING_EENHEID;
        }

        if ($this->aToedieningsEenheidOmschrijving !== null && $this->aToedieningsEenheidOmschrijving->getThesaurusnummer() !== $v) {
            $this->aToedieningsEenheidOmschrijving = null;
        }


        return $this;
    } // setThesaurusVerwijzingEenheid()

    /**
     * Set the value of [eenheid] column.
     *
     * @param  int $v new value
     * @return GsDeclaratietabelDureGeneesmiddelen The current object (for fluent API support)
     */
    public function setEenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eenheid !== $v) {
            $this->eenheid = $v;
            $this->modifiedColumns[] = GsDeclaratietabelDureGeneesmiddelenPeer::EENHEID;
        }

        if ($this->aToedieningsEenheidOmschrijving !== null && $this->aToedieningsEenheidOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aToedieningsEenheidOmschrijving = null;
        }


        return $this;
    } // setEenheid()

    /**
     * Set the value of [omrekenfactor_aantal_toedieningseenheden_per_hpk] column.
     *
     * @param  string $v new value
     * @return GsDeclaratietabelDureGeneesmiddelen The current object (for fluent API support)
     */
    public function setOmrekenfactorAantalToedieningseenhedenPerHpk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->omrekenfactor_aantal_toedieningseenheden_per_hpk !== $v) {
            $this->omrekenfactor_aantal_toedieningseenheden_per_hpk = $v;
            $this->modifiedColumns[] = GsDeclaratietabelDureGeneesmiddelenPeer::OMREKENFACTOR_AANTAL_TOEDIENINGSEENHEDEN_PER_HPK;
        }


        return $this;
    } // setOmrekenfactorAantalToedieningseenhedenPerHpk()

    /**
     * Set the value of [tarief] column.
     *
     * @param  string $v new value
     * @return GsDeclaratietabelDureGeneesmiddelen The current object (for fluent API support)
     */
    public function setTarief($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tarief !== $v) {
            $this->tarief = $v;
            $this->modifiedColumns[] = GsDeclaratietabelDureGeneesmiddelenPeer::TARIEF;
        }


        return $this;
    } // setTarief()

    /**
     * Set the value of [thesaurus_nummer_beleidsregel] column.
     *
     * @param  int $v new value
     * @return GsDeclaratietabelDureGeneesmiddelen The current object (for fluent API support)
     */
    public function setThesaurusNummerBeleidsregel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurus_nummer_beleidsregel !== $v) {
            $this->thesaurus_nummer_beleidsregel = $v;
            $this->modifiedColumns[] = GsDeclaratietabelDureGeneesmiddelenPeer::THESAURUS_NUMMER_BELEIDSREGEL;
        }

        if ($this->aBeleidsregelOmschrijving !== null && $this->aBeleidsregelOmschrijving->getThesaurusnummer() !== $v) {
            $this->aBeleidsregelOmschrijving = null;
        }


        return $this;
    } // setThesaurusNummerBeleidsregel()

    /**
     * Set the value of [itemnummer_beleidsregel] column.
     *
     * @param  int $v new value
     * @return GsDeclaratietabelDureGeneesmiddelen The current object (for fluent API support)
     */
    public function setItemnummerBeleidsregel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnummer_beleidsregel !== $v) {
            $this->itemnummer_beleidsregel = $v;
            $this->modifiedColumns[] = GsDeclaratietabelDureGeneesmiddelenPeer::ITEMNUMMER_BELEIDSREGEL;
        }

        if ($this->aBeleidsregelOmschrijving !== null && $this->aBeleidsregelOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aBeleidsregelOmschrijving = null;
        }


        return $this;
    } // setItemnummerBeleidsregel()

    /**
     * Set the value of [zorgactiviteit_voldoet_aan_beleidsregel] column.
     *
     * @param  int $v new value
     * @return GsDeclaratietabelDureGeneesmiddelen The current object (for fluent API support)
     */
    public function setZorgactiviteitVoldoetAanBeleidsregel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zorgactiviteit_voldoet_aan_beleidsregel !== $v) {
            $this->zorgactiviteit_voldoet_aan_beleidsregel = $v;
            $this->modifiedColumns[] = GsDeclaratietabelDureGeneesmiddelenPeer::ZORGACTIVITEIT_VOLDOET_AAN_BELEIDSREGEL;
        }


        return $this;
    } // setZorgactiviteitVoldoetAanBeleidsregel()

    /**
     * Sets the value of [startdatum] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsDeclaratietabelDureGeneesmiddelen The current object (for fluent API support)
     */
    public function setStartdatum($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->startdatum !== null || $dt !== null) {
            $currentDateAsString = ($this->startdatum !== null && $tmpDt = new DateTime($this->startdatum)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->startdatum = $newDateAsString;
                $this->modifiedColumns[] = GsDeclaratietabelDureGeneesmiddelenPeer::STARTDATUM;
            }
        } // if either are not null


        return $this;
    } // setStartdatum()

    /**
     * Sets the value of [einddatum] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsDeclaratietabelDureGeneesmiddelen The current object (for fluent API support)
     */
    public function setEinddatum($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->einddatum !== null || $dt !== null) {
            $currentDateAsString = ($this->einddatum !== null && $tmpDt = new DateTime($this->einddatum)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->einddatum = $newDateAsString;
                $this->modifiedColumns[] = GsDeclaratietabelDureGeneesmiddelenPeer::EINDDATUM;
            }
        } // if either are not null


        return $this;
    } // setEinddatum()

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
            $this->zorgactiviteit_code = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->omschrijving = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->hoeveelheid_per_toedieningseenheid = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->thesaurus_verwijzing_eenheid = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->eenheid = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->omrekenfactor_aantal_toedieningseenheden_per_hpk = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->tarief = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->thesaurus_nummer_beleidsregel = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->itemnummer_beleidsregel = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->zorgactiviteit_voldoet_aan_beleidsregel = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->startdatum = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->einddatum = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = GsDeclaratietabelDureGeneesmiddelenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsDeclaratietabelDureGeneesmiddelen object", $e);
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

        if ($this->aGsHandelsproducten !== null && $this->handelsproduktkode !== $this->aGsHandelsproducten->getHandelsproduktkode()) {
            $this->aGsHandelsproducten = null;
        }
        if ($this->aToedieningsEenheidOmschrijving !== null && $this->thesaurus_verwijzing_eenheid !== $this->aToedieningsEenheidOmschrijving->getThesaurusnummer()) {
            $this->aToedieningsEenheidOmschrijving = null;
        }
        if ($this->aToedieningsEenheidOmschrijving !== null && $this->eenheid !== $this->aToedieningsEenheidOmschrijving->getThesaurusItemnummer()) {
            $this->aToedieningsEenheidOmschrijving = null;
        }
        if ($this->aBeleidsregelOmschrijving !== null && $this->thesaurus_nummer_beleidsregel !== $this->aBeleidsregelOmschrijving->getThesaurusnummer()) {
            $this->aBeleidsregelOmschrijving = null;
        }
        if ($this->aBeleidsregelOmschrijving !== null && $this->itemnummer_beleidsregel !== $this->aBeleidsregelOmschrijving->getThesaurusItemnummer()) {
            $this->aBeleidsregelOmschrijving = null;
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
            $con = Propel::getConnection(GsDeclaratietabelDureGeneesmiddelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsDeclaratietabelDureGeneesmiddelenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGsHandelsproducten = null;
            $this->aBeleidsregelOmschrijving = null;
            $this->aToedieningsEenheidOmschrijving = null;
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
            $con = Propel::getConnection(GsDeclaratietabelDureGeneesmiddelenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsDeclaratietabelDureGeneesmiddelenQuery::create()
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
            $con = Propel::getConnection(GsDeclaratietabelDureGeneesmiddelenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsDeclaratietabelDureGeneesmiddelenPeer::addInstanceToPool($this);
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

            if ($this->aGsHandelsproducten !== null) {
                if ($this->aGsHandelsproducten->isModified() || $this->aGsHandelsproducten->isNew()) {
                    $affectedRows += $this->aGsHandelsproducten->save($con);
                }
                $this->setGsHandelsproducten($this->aGsHandelsproducten);
            }

            if ($this->aBeleidsregelOmschrijving !== null) {
                if ($this->aBeleidsregelOmschrijving->isModified() || $this->aBeleidsregelOmschrijving->isNew()) {
                    $affectedRows += $this->aBeleidsregelOmschrijving->save($con);
                }
                $this->setBeleidsregelOmschrijving($this->aBeleidsregelOmschrijving);
            }

            if ($this->aToedieningsEenheidOmschrijving !== null) {
                if ($this->aToedieningsEenheidOmschrijving->isModified() || $this->aToedieningsEenheidOmschrijving->isNew()) {
                    $affectedRows += $this->aToedieningsEenheidOmschrijving->save($con);
                }
                $this->setToedieningsEenheidOmschrijving($this->aToedieningsEenheidOmschrijving);
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
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::HANDELSPRODUKTKODE)) {
            $modifiedColumns[':p' . $index++]  = '`handelsproduktkode`';
        }
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::ZORGACTIVITEIT_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`zorgactiviteit_code`';
        }
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::OMSCHRIJVING)) {
            $modifiedColumns[':p' . $index++]  = '`omschrijving`';
        }
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::HOEVEELHEID_PER_TOEDIENINGSEENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`hoeveelheid_per_toedieningseenheid`';
        }
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::THESAURUS_VERWIJZING_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurus_verwijzing_eenheid`';
        }
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`eenheid`';
        }
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::OMREKENFACTOR_AANTAL_TOEDIENINGSEENHEDEN_PER_HPK)) {
            $modifiedColumns[':p' . $index++]  = '`omrekenfactor_aantal_toedieningseenheden_per_hpk`';
        }
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::TARIEF)) {
            $modifiedColumns[':p' . $index++]  = '`tarief`';
        }
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::THESAURUS_NUMMER_BELEIDSREGEL)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurus_nummer_beleidsregel`';
        }
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::ITEMNUMMER_BELEIDSREGEL)) {
            $modifiedColumns[':p' . $index++]  = '`itemnummer_beleidsregel`';
        }
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::ZORGACTIVITEIT_VOLDOET_AAN_BELEIDSREGEL)) {
            $modifiedColumns[':p' . $index++]  = '`zorgactiviteit_voldoet_aan_beleidsregel`';
        }
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::STARTDATUM)) {
            $modifiedColumns[':p' . $index++]  = '`startdatum`';
        }
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::EINDDATUM)) {
            $modifiedColumns[':p' . $index++]  = '`einddatum`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_declaratietabel_dure_geneesmiddelen` (%s) VALUES (%s)',
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
                    case '`zorgactiviteit_code`':
                        $stmt->bindValue($identifier, $this->zorgactiviteit_code, PDO::PARAM_INT);
                        break;
                    case '`omschrijving`':
                        $stmt->bindValue($identifier, $this->omschrijving, PDO::PARAM_STR);
                        break;
                    case '`hoeveelheid_per_toedieningseenheid`':
                        $stmt->bindValue($identifier, $this->hoeveelheid_per_toedieningseenheid, PDO::PARAM_STR);
                        break;
                    case '`thesaurus_verwijzing_eenheid`':
                        $stmt->bindValue($identifier, $this->thesaurus_verwijzing_eenheid, PDO::PARAM_INT);
                        break;
                    case '`eenheid`':
                        $stmt->bindValue($identifier, $this->eenheid, PDO::PARAM_INT);
                        break;
                    case '`omrekenfactor_aantal_toedieningseenheden_per_hpk`':
                        $stmt->bindValue($identifier, $this->omrekenfactor_aantal_toedieningseenheden_per_hpk, PDO::PARAM_STR);
                        break;
                    case '`tarief`':
                        $stmt->bindValue($identifier, $this->tarief, PDO::PARAM_STR);
                        break;
                    case '`thesaurus_nummer_beleidsregel`':
                        $stmt->bindValue($identifier, $this->thesaurus_nummer_beleidsregel, PDO::PARAM_INT);
                        break;
                    case '`itemnummer_beleidsregel`':
                        $stmt->bindValue($identifier, $this->itemnummer_beleidsregel, PDO::PARAM_INT);
                        break;
                    case '`zorgactiviteit_voldoet_aan_beleidsregel`':
                        $stmt->bindValue($identifier, $this->zorgactiviteit_voldoet_aan_beleidsregel, PDO::PARAM_INT);
                        break;
                    case '`startdatum`':
                        $stmt->bindValue($identifier, $this->startdatum, PDO::PARAM_STR);
                        break;
                    case '`einddatum`':
                        $stmt->bindValue($identifier, $this->einddatum, PDO::PARAM_STR);
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

            if ($this->aGsHandelsproducten !== null) {
                if (!$this->aGsHandelsproducten->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsHandelsproducten->getValidationFailures());
                }
            }

            if ($this->aBeleidsregelOmschrijving !== null) {
                if (!$this->aBeleidsregelOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aBeleidsregelOmschrijving->getValidationFailures());
                }
            }

            if ($this->aToedieningsEenheidOmschrijving !== null) {
                if (!$this->aToedieningsEenheidOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aToedieningsEenheidOmschrijving->getValidationFailures());
                }
            }


            if (($retval = GsDeclaratietabelDureGeneesmiddelenPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsDeclaratietabelDureGeneesmiddelenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getZorgactiviteitCode();
                break;
            case 4:
                return $this->getOmschrijving();
                break;
            case 5:
                return $this->getHoeveelheidPerToedieningseenheid();
                break;
            case 6:
                return $this->getThesaurusVerwijzingEenheid();
                break;
            case 7:
                return $this->getEenheid();
                break;
            case 8:
                return $this->getOmrekenfactorAantalToedieningseenhedenPerHpk();
                break;
            case 9:
                return $this->getTarief();
                break;
            case 10:
                return $this->getThesaurusNummerBeleidsregel();
                break;
            case 11:
                return $this->getItemnummerBeleidsregel();
                break;
            case 12:
                return $this->getZorgactiviteitVoldoetAanBeleidsregel();
                break;
            case 13:
                return $this->getStartdatum();
                break;
            case 14:
                return $this->getEinddatum();
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
        if (isset($alreadyDumpedObjects['GsDeclaratietabelDureGeneesmiddelen'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsDeclaratietabelDureGeneesmiddelen'][serialize($this->getPrimaryKey())] = true;
        $keys = GsDeclaratietabelDureGeneesmiddelenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getHandelsproduktkode(),
            $keys[3] => $this->getZorgactiviteitCode(),
            $keys[4] => $this->getOmschrijving(),
            $keys[5] => $this->getHoeveelheidPerToedieningseenheid(),
            $keys[6] => $this->getThesaurusVerwijzingEenheid(),
            $keys[7] => $this->getEenheid(),
            $keys[8] => $this->getOmrekenfactorAantalToedieningseenhedenPerHpk(),
            $keys[9] => $this->getTarief(),
            $keys[10] => $this->getThesaurusNummerBeleidsregel(),
            $keys[11] => $this->getItemnummerBeleidsregel(),
            $keys[12] => $this->getZorgactiviteitVoldoetAanBeleidsregel(),
            $keys[13] => $this->getStartdatum(),
            $keys[14] => $this->getEinddatum(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aGsHandelsproducten) {
                $result['GsHandelsproducten'] = $this->aGsHandelsproducten->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aBeleidsregelOmschrijving) {
                $result['BeleidsregelOmschrijving'] = $this->aBeleidsregelOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aToedieningsEenheidOmschrijving) {
                $result['ToedieningsEenheidOmschrijving'] = $this->aToedieningsEenheidOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = GsDeclaratietabelDureGeneesmiddelenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setZorgactiviteitCode($value);
                break;
            case 4:
                $this->setOmschrijving($value);
                break;
            case 5:
                $this->setHoeveelheidPerToedieningseenheid($value);
                break;
            case 6:
                $this->setThesaurusVerwijzingEenheid($value);
                break;
            case 7:
                $this->setEenheid($value);
                break;
            case 8:
                $this->setOmrekenfactorAantalToedieningseenhedenPerHpk($value);
                break;
            case 9:
                $this->setTarief($value);
                break;
            case 10:
                $this->setThesaurusNummerBeleidsregel($value);
                break;
            case 11:
                $this->setItemnummerBeleidsregel($value);
                break;
            case 12:
                $this->setZorgactiviteitVoldoetAanBeleidsregel($value);
                break;
            case 13:
                $this->setStartdatum($value);
                break;
            case 14:
                $this->setEinddatum($value);
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
        $keys = GsDeclaratietabelDureGeneesmiddelenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setHandelsproduktkode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setZorgactiviteitCode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOmschrijving($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setHoeveelheidPerToedieningseenheid($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setThesaurusVerwijzingEenheid($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEenheid($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOmrekenfactorAantalToedieningseenhedenPerHpk($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTarief($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setThesaurusNummerBeleidsregel($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setItemnummerBeleidsregel($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setZorgactiviteitVoldoetAanBeleidsregel($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setStartdatum($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setEinddatum($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsDeclaratietabelDureGeneesmiddelenPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::BESTANDNUMMER)) $criteria->add(GsDeclaratietabelDureGeneesmiddelenPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::MUTATIEKODE)) $criteria->add(GsDeclaratietabelDureGeneesmiddelenPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::HANDELSPRODUKTKODE)) $criteria->add(GsDeclaratietabelDureGeneesmiddelenPeer::HANDELSPRODUKTKODE, $this->handelsproduktkode);
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::ZORGACTIVITEIT_CODE)) $criteria->add(GsDeclaratietabelDureGeneesmiddelenPeer::ZORGACTIVITEIT_CODE, $this->zorgactiviteit_code);
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::OMSCHRIJVING)) $criteria->add(GsDeclaratietabelDureGeneesmiddelenPeer::OMSCHRIJVING, $this->omschrijving);
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::HOEVEELHEID_PER_TOEDIENINGSEENHEID)) $criteria->add(GsDeclaratietabelDureGeneesmiddelenPeer::HOEVEELHEID_PER_TOEDIENINGSEENHEID, $this->hoeveelheid_per_toedieningseenheid);
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::THESAURUS_VERWIJZING_EENHEID)) $criteria->add(GsDeclaratietabelDureGeneesmiddelenPeer::THESAURUS_VERWIJZING_EENHEID, $this->thesaurus_verwijzing_eenheid);
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::EENHEID)) $criteria->add(GsDeclaratietabelDureGeneesmiddelenPeer::EENHEID, $this->eenheid);
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::OMREKENFACTOR_AANTAL_TOEDIENINGSEENHEDEN_PER_HPK)) $criteria->add(GsDeclaratietabelDureGeneesmiddelenPeer::OMREKENFACTOR_AANTAL_TOEDIENINGSEENHEDEN_PER_HPK, $this->omrekenfactor_aantal_toedieningseenheden_per_hpk);
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::TARIEF)) $criteria->add(GsDeclaratietabelDureGeneesmiddelenPeer::TARIEF, $this->tarief);
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::THESAURUS_NUMMER_BELEIDSREGEL)) $criteria->add(GsDeclaratietabelDureGeneesmiddelenPeer::THESAURUS_NUMMER_BELEIDSREGEL, $this->thesaurus_nummer_beleidsregel);
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::ITEMNUMMER_BELEIDSREGEL)) $criteria->add(GsDeclaratietabelDureGeneesmiddelenPeer::ITEMNUMMER_BELEIDSREGEL, $this->itemnummer_beleidsregel);
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::ZORGACTIVITEIT_VOLDOET_AAN_BELEIDSREGEL)) $criteria->add(GsDeclaratietabelDureGeneesmiddelenPeer::ZORGACTIVITEIT_VOLDOET_AAN_BELEIDSREGEL, $this->zorgactiviteit_voldoet_aan_beleidsregel);
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::STARTDATUM)) $criteria->add(GsDeclaratietabelDureGeneesmiddelenPeer::STARTDATUM, $this->startdatum);
        if ($this->isColumnModified(GsDeclaratietabelDureGeneesmiddelenPeer::EINDDATUM)) $criteria->add(GsDeclaratietabelDureGeneesmiddelenPeer::EINDDATUM, $this->einddatum);

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
        $criteria = new Criteria(GsDeclaratietabelDureGeneesmiddelenPeer::DATABASE_NAME);
        $criteria->add(GsDeclaratietabelDureGeneesmiddelenPeer::HANDELSPRODUKTKODE, $this->handelsproduktkode);
        $criteria->add(GsDeclaratietabelDureGeneesmiddelenPeer::ZORGACTIVITEIT_CODE, $this->zorgactiviteit_code);

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
        $pks[0] = $this->getHandelsproduktkode();
        $pks[1] = $this->getZorgactiviteitCode();

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
        $this->setHandelsproduktkode($keys[0]);
        $this->setZorgactiviteitCode($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getHandelsproduktkode()) && (null === $this->getZorgactiviteitCode());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsDeclaratietabelDureGeneesmiddelen (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setHandelsproduktkode($this->getHandelsproduktkode());
        $copyObj->setZorgactiviteitCode($this->getZorgactiviteitCode());
        $copyObj->setOmschrijving($this->getOmschrijving());
        $copyObj->setHoeveelheidPerToedieningseenheid($this->getHoeveelheidPerToedieningseenheid());
        $copyObj->setThesaurusVerwijzingEenheid($this->getThesaurusVerwijzingEenheid());
        $copyObj->setEenheid($this->getEenheid());
        $copyObj->setOmrekenfactorAantalToedieningseenhedenPerHpk($this->getOmrekenfactorAantalToedieningseenhedenPerHpk());
        $copyObj->setTarief($this->getTarief());
        $copyObj->setThesaurusNummerBeleidsregel($this->getThesaurusNummerBeleidsregel());
        $copyObj->setItemnummerBeleidsregel($this->getItemnummerBeleidsregel());
        $copyObj->setZorgactiviteitVoldoetAanBeleidsregel($this->getZorgactiviteitVoldoetAanBeleidsregel());
        $copyObj->setStartdatum($this->getStartdatum());
        $copyObj->setEinddatum($this->getEinddatum());

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
     * @return GsDeclaratietabelDureGeneesmiddelen Clone of current object.
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
     * @return GsDeclaratietabelDureGeneesmiddelenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsDeclaratietabelDureGeneesmiddelenPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsHandelsproducten object.
     *
     * @param                  GsHandelsproducten $v
     * @return GsDeclaratietabelDureGeneesmiddelen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsHandelsproducten(GsHandelsproducten $v = null)
    {
        if ($v === null) {
            $this->setHandelsproduktkode(NULL);
        } else {
            $this->setHandelsproduktkode($v->getHandelsproduktkode());
        }

        $this->aGsHandelsproducten = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsHandelsproducten object, it will not be re-added.
        if ($v !== null) {
            $v->addGsDeclaratietabelDureGeneesmiddelen($this);
        }


        return $this;
    }


    /**
     * Get the associated GsHandelsproducten object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsHandelsproducten The associated GsHandelsproducten object.
     * @throws PropelException
     */
    public function getGsHandelsproducten(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsHandelsproducten === null && ($this->handelsproduktkode !== null) && $doQuery) {
            $this->aGsHandelsproducten = GsHandelsproductenQuery::create()->findPk($this->handelsproduktkode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsHandelsproducten->addGsDeclaratietabelDureGeneesmiddelens($this);
             */
        }

        return $this->aGsHandelsproducten;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsDeclaratietabelDureGeneesmiddelen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setBeleidsregelOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesaurusNummerBeleidsregel(NULL);
        } else {
            $this->setThesaurusNummerBeleidsregel($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setItemnummerBeleidsregel(NULL);
        } else {
            $this->setItemnummerBeleidsregel($v->getThesaurusItemnummer());
        }

        $this->aBeleidsregelOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel($this);
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
    public function getBeleidsregelOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aBeleidsregelOmschrijving === null && ($this->thesaurus_nummer_beleidsregel !== null && $this->itemnummer_beleidsregel !== null) && $doQuery) {
            $this->aBeleidsregelOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesaurus_nummer_beleidsregel, $this->itemnummer_beleidsregel), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aBeleidsregelOmschrijving->addGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel($this);
             */
        }

        return $this->aBeleidsregelOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsDeclaratietabelDureGeneesmiddelen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setToedieningsEenheidOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesaurusVerwijzingEenheid(NULL);
        } else {
            $this->setThesaurusVerwijzingEenheid($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setEenheid(NULL);
        } else {
            $this->setEenheid($v->getThesaurusItemnummer());
        }

        $this->aToedieningsEenheidOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid($this);
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
    public function getToedieningsEenheidOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aToedieningsEenheidOmschrijving === null && ($this->thesaurus_verwijzing_eenheid !== null && $this->eenheid !== null) && $doQuery) {
            $this->aToedieningsEenheidOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesaurus_verwijzing_eenheid, $this->eenheid), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aToedieningsEenheidOmschrijving->addGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid($this);
             */
        }

        return $this->aToedieningsEenheidOmschrijving;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->handelsproduktkode = null;
        $this->zorgactiviteit_code = null;
        $this->omschrijving = null;
        $this->hoeveelheid_per_toedieningseenheid = null;
        $this->thesaurus_verwijzing_eenheid = null;
        $this->eenheid = null;
        $this->omrekenfactor_aantal_toedieningseenheden_per_hpk = null;
        $this->tarief = null;
        $this->thesaurus_nummer_beleidsregel = null;
        $this->itemnummer_beleidsregel = null;
        $this->zorgactiviteit_voldoet_aan_beleidsregel = null;
        $this->startdatum = null;
        $this->einddatum = null;
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
            if ($this->aGsHandelsproducten instanceof Persistent) {
              $this->aGsHandelsproducten->clearAllReferences($deep);
            }
            if ($this->aBeleidsregelOmschrijving instanceof Persistent) {
              $this->aBeleidsregelOmschrijving->clearAllReferences($deep);
            }
            if ($this->aToedieningsEenheidOmschrijving instanceof Persistent) {
              $this->aToedieningsEenheidOmschrijving->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aGsHandelsproducten = null;
        $this->aBeleidsregelOmschrijving = null;
        $this->aToedieningsEenheidOmschrijving = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsDeclaratietabelDureGeneesmiddelenPeer::DEFAULT_STRING_FORMAT);
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
