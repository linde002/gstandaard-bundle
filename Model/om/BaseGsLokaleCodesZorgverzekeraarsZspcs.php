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
use PharmaIntelligence\GstandaardBundle\Model\GsLokaleCodesZorgverzekeraarsZspcs;
use PharmaIntelligence\GstandaardBundle\Model\GsLokaleCodesZorgverzekeraarsZspcsPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsLokaleCodesZorgverzekeraarsZspcsQuery;

abstract class BaseGsLokaleCodesZorgverzekeraarsZspcs extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLokaleCodesZorgverzekeraarsZspcsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsLokaleCodesZorgverzekeraarsZspcsPeer
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
     * The value for the zorgverzekeraar_specifieke_prestatie_code field.
     * @var        string
     */
    protected $zorgverzekeraar_specifieke_prestatie_code;

    /**
     * The value for the uzovi_code_zorgverzekeraar field.
     * @var        string
     */
    protected $uzovi_code_zorgverzekeraar;

    /**
     * The value for the artikel_omschrijving field.
     * @var        string
     */
    protected $artikel_omschrijving;

    /**
     * The value for the etiketnaam field.
     * @var        string
     */
    protected $etiketnaam;

    /**
     * The value for the memocode field.
     * @var        string
     */
    protected $memocode;

    /**
     * The value for the hoeveelheid field.
     * @var        string
     */
    protected $hoeveelheid;

    /**
     * The value for the thesaurusverwijzing_eenheid field.
     * @var        int
     */
    protected $thesaurusverwijzing_eenheid;

    /**
     * The value for the eenheid field.
     * @var        int
     */
    protected $eenheid;

    /**
     * The value for the declaratieprijs field.
     * @var        string
     */
    protected $declaratieprijs;

    /**
     * The value for the wmg field.
     * @var        int
     */
    protected $wmg;

    /**
     * The value for the uitsluitend_voor_gecontracteerde_apotheken field.
     * @var        int
     */
    protected $uitsluitend_voor_gecontracteerde_apotheken;

    /**
     * The value for the tariefsoort_thesaurus_verwijzing field.
     * @var        int
     */
    protected $tariefsoort_thesaurus_verwijzing;

    /**
     * The value for the tariefsoort field.
     * @var        int
     */
    protected $tariefsoort;

    /**
     * The value for the begindatum field.
     * @var        string
     */
    protected $begindatum;

    /**
     * The value for the vervaldatum field.
     * @var        string
     */
    protected $vervaldatum;

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
     * Get the [zorgverzekeraar_specifieke_prestatie_code] column value.
     *
     * @return string
     */
    public function getZorgverzekeraarSpecifiekePrestatieCode()
    {

        return $this->zorgverzekeraar_specifieke_prestatie_code;
    }

    /**
     * Get the [uzovi_code_zorgverzekeraar] column value.
     *
     * @return string
     */
    public function getUzoviCodeZorgverzekeraar()
    {

        return $this->uzovi_code_zorgverzekeraar;
    }

    /**
     * Get the [artikel_omschrijving] column value.
     *
     * @return string
     */
    public function getArtikelOmschrijving()
    {

        return $this->artikel_omschrijving;
    }

    /**
     * Get the [etiketnaam] column value.
     *
     * @return string
     */
    public function getEtiketnaam()
    {

        return $this->etiketnaam;
    }

    /**
     * Get the [memocode] column value.
     *
     * @return string
     */
    public function getMemocode()
    {

        return $this->memocode;
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
     * Get the [thesaurusverwijzing_eenheid] column value.
     *
     * @return int
     */
    public function getThesaurusverwijzingEenheid()
    {

        return $this->thesaurusverwijzing_eenheid;
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
     * Get the [declaratieprijs] column value.
     *
     * @return string
     */
    public function getDeclaratieprijs()
    {

        return $this->declaratieprijs;
    }

    /**
     * Get the [wmg] column value.
     *
     * @return int
     */
    public function getWmg()
    {

        return $this->wmg;
    }

    /**
     * Get the [uitsluitend_voor_gecontracteerde_apotheken] column value.
     *
     * @return int
     */
    public function getUitsluitendVoorGecontracteerdeApotheken()
    {

        return $this->uitsluitend_voor_gecontracteerde_apotheken;
    }

    /**
     * Get the [tariefsoort_thesaurus_verwijzing] column value.
     *
     * @return int
     */
    public function getTariefsoortThesaurusVerwijzing()
    {

        return $this->tariefsoort_thesaurus_verwijzing;
    }

    /**
     * Get the [tariefsoort] column value.
     *
     * @return int
     */
    public function getTariefsoort()
    {

        return $this->tariefsoort;
    }

    /**
     * Get the [optionally formatted] temporal [begindatum] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getBegindatum($format = null)
    {
        if ($this->begindatum === null) {
            return null;
        }

        if ($this->begindatum === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->begindatum);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->begindatum, true), $x);
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
     * Get the [optionally formatted] temporal [vervaldatum] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getVervaldatum($format = null)
    {
        if ($this->vervaldatum === null) {
            return null;
        }

        if ($this->vervaldatum === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->vervaldatum);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->vervaldatum, true), $x);
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
     * @return GsLokaleCodesZorgverzekeraarsZspcs The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsLokaleCodesZorgverzekeraarsZspcsPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsLokaleCodesZorgverzekeraarsZspcs The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsLokaleCodesZorgverzekeraarsZspcsPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [zorgverzekeraar_specifieke_prestatie_code] column.
     *
     * @param  string $v new value
     * @return GsLokaleCodesZorgverzekeraarsZspcs The current object (for fluent API support)
     */
    public function setZorgverzekeraarSpecifiekePrestatieCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->zorgverzekeraar_specifieke_prestatie_code !== $v) {
            $this->zorgverzekeraar_specifieke_prestatie_code = $v;
            $this->modifiedColumns[] = GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE;
        }


        return $this;
    } // setZorgverzekeraarSpecifiekePrestatieCode()

    /**
     * Set the value of [uzovi_code_zorgverzekeraar] column.
     *
     * @param  string $v new value
     * @return GsLokaleCodesZorgverzekeraarsZspcs The current object (for fluent API support)
     */
    public function setUzoviCodeZorgverzekeraar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->uzovi_code_zorgverzekeraar !== $v) {
            $this->uzovi_code_zorgverzekeraar = $v;
            $this->modifiedColumns[] = GsLokaleCodesZorgverzekeraarsZspcsPeer::UZOVI_CODE_ZORGVERZEKERAAR;
        }


        return $this;
    } // setUzoviCodeZorgverzekeraar()

    /**
     * Set the value of [artikel_omschrijving] column.
     *
     * @param  string $v new value
     * @return GsLokaleCodesZorgverzekeraarsZspcs The current object (for fluent API support)
     */
    public function setArtikelOmschrijving($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artikel_omschrijving !== $v) {
            $this->artikel_omschrijving = $v;
            $this->modifiedColumns[] = GsLokaleCodesZorgverzekeraarsZspcsPeer::ARTIKEL_OMSCHRIJVING;
        }


        return $this;
    } // setArtikelOmschrijving()

    /**
     * Set the value of [etiketnaam] column.
     *
     * @param  string $v new value
     * @return GsLokaleCodesZorgverzekeraarsZspcs The current object (for fluent API support)
     */
    public function setEtiketnaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->etiketnaam !== $v) {
            $this->etiketnaam = $v;
            $this->modifiedColumns[] = GsLokaleCodesZorgverzekeraarsZspcsPeer::ETIKETNAAM;
        }


        return $this;
    } // setEtiketnaam()

    /**
     * Set the value of [memocode] column.
     *
     * @param  string $v new value
     * @return GsLokaleCodesZorgverzekeraarsZspcs The current object (for fluent API support)
     */
    public function setMemocode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->memocode !== $v) {
            $this->memocode = $v;
            $this->modifiedColumns[] = GsLokaleCodesZorgverzekeraarsZspcsPeer::MEMOCODE;
        }


        return $this;
    } // setMemocode()

    /**
     * Set the value of [hoeveelheid] column.
     *
     * @param  string $v new value
     * @return GsLokaleCodesZorgverzekeraarsZspcs The current object (for fluent API support)
     */
    public function setHoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hoeveelheid !== $v) {
            $this->hoeveelheid = $v;
            $this->modifiedColumns[] = GsLokaleCodesZorgverzekeraarsZspcsPeer::HOEVEELHEID;
        }


        return $this;
    } // setHoeveelheid()

    /**
     * Set the value of [thesaurusverwijzing_eenheid] column.
     *
     * @param  int $v new value
     * @return GsLokaleCodesZorgverzekeraarsZspcs The current object (for fluent API support)
     */
    public function setThesaurusverwijzingEenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusverwijzing_eenheid !== $v) {
            $this->thesaurusverwijzing_eenheid = $v;
            $this->modifiedColumns[] = GsLokaleCodesZorgverzekeraarsZspcsPeer::THESAURUSVERWIJZING_EENHEID;
        }


        return $this;
    } // setThesaurusverwijzingEenheid()

    /**
     * Set the value of [eenheid] column.
     *
     * @param  int $v new value
     * @return GsLokaleCodesZorgverzekeraarsZspcs The current object (for fluent API support)
     */
    public function setEenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eenheid !== $v) {
            $this->eenheid = $v;
            $this->modifiedColumns[] = GsLokaleCodesZorgverzekeraarsZspcsPeer::EENHEID;
        }


        return $this;
    } // setEenheid()

    /**
     * Set the value of [declaratieprijs] column.
     *
     * @param  string $v new value
     * @return GsLokaleCodesZorgverzekeraarsZspcs The current object (for fluent API support)
     */
    public function setDeclaratieprijs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->declaratieprijs !== $v) {
            $this->declaratieprijs = $v;
            $this->modifiedColumns[] = GsLokaleCodesZorgverzekeraarsZspcsPeer::DECLARATIEPRIJS;
        }


        return $this;
    } // setDeclaratieprijs()

    /**
     * Set the value of [wmg] column.
     *
     * @param  int $v new value
     * @return GsLokaleCodesZorgverzekeraarsZspcs The current object (for fluent API support)
     */
    public function setWmg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->wmg !== $v) {
            $this->wmg = $v;
            $this->modifiedColumns[] = GsLokaleCodesZorgverzekeraarsZspcsPeer::WMG;
        }


        return $this;
    } // setWmg()

    /**
     * Set the value of [uitsluitend_voor_gecontracteerde_apotheken] column.
     *
     * @param  int $v new value
     * @return GsLokaleCodesZorgverzekeraarsZspcs The current object (for fluent API support)
     */
    public function setUitsluitendVoorGecontracteerdeApotheken($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->uitsluitend_voor_gecontracteerde_apotheken !== $v) {
            $this->uitsluitend_voor_gecontracteerde_apotheken = $v;
            $this->modifiedColumns[] = GsLokaleCodesZorgverzekeraarsZspcsPeer::UITSLUITEND_VOOR_GECONTRACTEERDE_APOTHEKEN;
        }


        return $this;
    } // setUitsluitendVoorGecontracteerdeApotheken()

    /**
     * Set the value of [tariefsoort_thesaurus_verwijzing] column.
     *
     * @param  int $v new value
     * @return GsLokaleCodesZorgverzekeraarsZspcs The current object (for fluent API support)
     */
    public function setTariefsoortThesaurusVerwijzing($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tariefsoort_thesaurus_verwijzing !== $v) {
            $this->tariefsoort_thesaurus_verwijzing = $v;
            $this->modifiedColumns[] = GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT_THESAURUS_VERWIJZING;
        }


        return $this;
    } // setTariefsoortThesaurusVerwijzing()

    /**
     * Set the value of [tariefsoort] column.
     *
     * @param  int $v new value
     * @return GsLokaleCodesZorgverzekeraarsZspcs The current object (for fluent API support)
     */
    public function setTariefsoort($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tariefsoort !== $v) {
            $this->tariefsoort = $v;
            $this->modifiedColumns[] = GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT;
        }


        return $this;
    } // setTariefsoort()

    /**
     * Sets the value of [begindatum] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsLokaleCodesZorgverzekeraarsZspcs The current object (for fluent API support)
     */
    public function setBegindatum($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->begindatum !== null || $dt !== null) {
            $currentDateAsString = ($this->begindatum !== null && $tmpDt = new DateTime($this->begindatum)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->begindatum = $newDateAsString;
                $this->modifiedColumns[] = GsLokaleCodesZorgverzekeraarsZspcsPeer::BEGINDATUM;
            }
        } // if either are not null


        return $this;
    } // setBegindatum()

    /**
     * Sets the value of [vervaldatum] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsLokaleCodesZorgverzekeraarsZspcs The current object (for fluent API support)
     */
    public function setVervaldatum($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->vervaldatum !== null || $dt !== null) {
            $currentDateAsString = ($this->vervaldatum !== null && $tmpDt = new DateTime($this->vervaldatum)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->vervaldatum = $newDateAsString;
                $this->modifiedColumns[] = GsLokaleCodesZorgverzekeraarsZspcsPeer::VERVALDATUM;
            }
        } // if either are not null


        return $this;
    } // setVervaldatum()

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
            $this->zorgverzekeraar_specifieke_prestatie_code = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->uzovi_code_zorgverzekeraar = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->artikel_omschrijving = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->etiketnaam = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->memocode = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->hoeveelheid = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->thesaurusverwijzing_eenheid = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->eenheid = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->declaratieprijs = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->wmg = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->uitsluitend_voor_gecontracteerde_apotheken = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->tariefsoort_thesaurus_verwijzing = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->tariefsoort = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->begindatum = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->vervaldatum = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 17; // 17 = GsLokaleCodesZorgverzekeraarsZspcsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsLokaleCodesZorgverzekeraarsZspcs object", $e);
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
            $con = Propel::getConnection(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsLokaleCodesZorgverzekeraarsZspcsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

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
            $con = Propel::getConnection(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsLokaleCodesZorgverzekeraarsZspcsQuery::create()
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
            $con = Propel::getConnection(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsLokaleCodesZorgverzekeraarsZspcsPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`zorgverzekeraar_specifieke_prestatie_code`';
        }
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::UZOVI_CODE_ZORGVERZEKERAAR)) {
            $modifiedColumns[':p' . $index++]  = '`uzovi_code_zorgverzekeraar`';
        }
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::ARTIKEL_OMSCHRIJVING)) {
            $modifiedColumns[':p' . $index++]  = '`artikel_omschrijving`';
        }
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::ETIKETNAAM)) {
            $modifiedColumns[':p' . $index++]  = '`etiketnaam`';
        }
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::MEMOCODE)) {
            $modifiedColumns[':p' . $index++]  = '`memocode`';
        }
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::HOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`hoeveelheid`';
        }
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::THESAURUSVERWIJZING_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusverwijzing_eenheid`';
        }
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`eenheid`';
        }
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::DECLARATIEPRIJS)) {
            $modifiedColumns[':p' . $index++]  = '`declaratieprijs`';
        }
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::WMG)) {
            $modifiedColumns[':p' . $index++]  = '`wmg`';
        }
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::UITSLUITEND_VOOR_GECONTRACTEERDE_APOTHEKEN)) {
            $modifiedColumns[':p' . $index++]  = '`uitsluitend_voor_gecontracteerde_apotheken`';
        }
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT_THESAURUS_VERWIJZING)) {
            $modifiedColumns[':p' . $index++]  = '`tariefsoort_thesaurus_verwijzing`';
        }
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT)) {
            $modifiedColumns[':p' . $index++]  = '`tariefsoort`';
        }
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::BEGINDATUM)) {
            $modifiedColumns[':p' . $index++]  = '`begindatum`';
        }
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::VERVALDATUM)) {
            $modifiedColumns[':p' . $index++]  = '`vervaldatum`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_lokale_codes_zorgverzekeraars_zspcs` (%s) VALUES (%s)',
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
                    case '`zorgverzekeraar_specifieke_prestatie_code`':
                        $stmt->bindValue($identifier, $this->zorgverzekeraar_specifieke_prestatie_code, PDO::PARAM_STR);
                        break;
                    case '`uzovi_code_zorgverzekeraar`':
                        $stmt->bindValue($identifier, $this->uzovi_code_zorgverzekeraar, PDO::PARAM_STR);
                        break;
                    case '`artikel_omschrijving`':
                        $stmt->bindValue($identifier, $this->artikel_omschrijving, PDO::PARAM_STR);
                        break;
                    case '`etiketnaam`':
                        $stmt->bindValue($identifier, $this->etiketnaam, PDO::PARAM_STR);
                        break;
                    case '`memocode`':
                        $stmt->bindValue($identifier, $this->memocode, PDO::PARAM_STR);
                        break;
                    case '`hoeveelheid`':
                        $stmt->bindValue($identifier, $this->hoeveelheid, PDO::PARAM_STR);
                        break;
                    case '`thesaurusverwijzing_eenheid`':
                        $stmt->bindValue($identifier, $this->thesaurusverwijzing_eenheid, PDO::PARAM_INT);
                        break;
                    case '`eenheid`':
                        $stmt->bindValue($identifier, $this->eenheid, PDO::PARAM_INT);
                        break;
                    case '`declaratieprijs`':
                        $stmt->bindValue($identifier, $this->declaratieprijs, PDO::PARAM_STR);
                        break;
                    case '`wmg`':
                        $stmt->bindValue($identifier, $this->wmg, PDO::PARAM_INT);
                        break;
                    case '`uitsluitend_voor_gecontracteerde_apotheken`':
                        $stmt->bindValue($identifier, $this->uitsluitend_voor_gecontracteerde_apotheken, PDO::PARAM_INT);
                        break;
                    case '`tariefsoort_thesaurus_verwijzing`':
                        $stmt->bindValue($identifier, $this->tariefsoort_thesaurus_verwijzing, PDO::PARAM_INT);
                        break;
                    case '`tariefsoort`':
                        $stmt->bindValue($identifier, $this->tariefsoort, PDO::PARAM_INT);
                        break;
                    case '`begindatum`':
                        $stmt->bindValue($identifier, $this->begindatum, PDO::PARAM_STR);
                        break;
                    case '`vervaldatum`':
                        $stmt->bindValue($identifier, $this->vervaldatum, PDO::PARAM_STR);
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


            if (($retval = GsLokaleCodesZorgverzekeraarsZspcsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsLokaleCodesZorgverzekeraarsZspcsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getZorgverzekeraarSpecifiekePrestatieCode();
                break;
            case 3:
                return $this->getUzoviCodeZorgverzekeraar();
                break;
            case 4:
                return $this->getArtikelOmschrijving();
                break;
            case 5:
                return $this->getEtiketnaam();
                break;
            case 6:
                return $this->getMemocode();
                break;
            case 7:
                return $this->getHoeveelheid();
                break;
            case 8:
                return $this->getThesaurusverwijzingEenheid();
                break;
            case 9:
                return $this->getEenheid();
                break;
            case 10:
                return $this->getDeclaratieprijs();
                break;
            case 11:
                return $this->getWmg();
                break;
            case 12:
                return $this->getUitsluitendVoorGecontracteerdeApotheken();
                break;
            case 13:
                return $this->getTariefsoortThesaurusVerwijzing();
                break;
            case 14:
                return $this->getTariefsoort();
                break;
            case 15:
                return $this->getBegindatum();
                break;
            case 16:
                return $this->getVervaldatum();
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
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['GsLokaleCodesZorgverzekeraarsZspcs'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsLokaleCodesZorgverzekeraarsZspcs'][$this->getPrimaryKey()] = true;
        $keys = GsLokaleCodesZorgverzekeraarsZspcsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getZorgverzekeraarSpecifiekePrestatieCode(),
            $keys[3] => $this->getUzoviCodeZorgverzekeraar(),
            $keys[4] => $this->getArtikelOmschrijving(),
            $keys[5] => $this->getEtiketnaam(),
            $keys[6] => $this->getMemocode(),
            $keys[7] => $this->getHoeveelheid(),
            $keys[8] => $this->getThesaurusverwijzingEenheid(),
            $keys[9] => $this->getEenheid(),
            $keys[10] => $this->getDeclaratieprijs(),
            $keys[11] => $this->getWmg(),
            $keys[12] => $this->getUitsluitendVoorGecontracteerdeApotheken(),
            $keys[13] => $this->getTariefsoortThesaurusVerwijzing(),
            $keys[14] => $this->getTariefsoort(),
            $keys[15] => $this->getBegindatum(),
            $keys[16] => $this->getVervaldatum(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
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
        $pos = GsLokaleCodesZorgverzekeraarsZspcsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setZorgverzekeraarSpecifiekePrestatieCode($value);
                break;
            case 3:
                $this->setUzoviCodeZorgverzekeraar($value);
                break;
            case 4:
                $this->setArtikelOmschrijving($value);
                break;
            case 5:
                $this->setEtiketnaam($value);
                break;
            case 6:
                $this->setMemocode($value);
                break;
            case 7:
                $this->setHoeveelheid($value);
                break;
            case 8:
                $this->setThesaurusverwijzingEenheid($value);
                break;
            case 9:
                $this->setEenheid($value);
                break;
            case 10:
                $this->setDeclaratieprijs($value);
                break;
            case 11:
                $this->setWmg($value);
                break;
            case 12:
                $this->setUitsluitendVoorGecontracteerdeApotheken($value);
                break;
            case 13:
                $this->setTariefsoortThesaurusVerwijzing($value);
                break;
            case 14:
                $this->setTariefsoort($value);
                break;
            case 15:
                $this->setBegindatum($value);
                break;
            case 16:
                $this->setVervaldatum($value);
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
        $keys = GsLokaleCodesZorgverzekeraarsZspcsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setZorgverzekeraarSpecifiekePrestatieCode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setUzoviCodeZorgverzekeraar($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setArtikelOmschrijving($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEtiketnaam($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMemocode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setHoeveelheid($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setThesaurusverwijzingEenheid($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEenheid($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDeclaratieprijs($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setWmg($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setUitsluitendVoorGecontracteerdeApotheken($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setTariefsoortThesaurusVerwijzing($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setTariefsoort($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setBegindatum($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setVervaldatum($arr[$keys[16]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::BESTANDNUMMER)) $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::MUTATIEKODE)) $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE)) $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE, $this->zorgverzekeraar_specifieke_prestatie_code);
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::UZOVI_CODE_ZORGVERZEKERAAR)) $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::UZOVI_CODE_ZORGVERZEKERAAR, $this->uzovi_code_zorgverzekeraar);
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::ARTIKEL_OMSCHRIJVING)) $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::ARTIKEL_OMSCHRIJVING, $this->artikel_omschrijving);
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::ETIKETNAAM)) $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::ETIKETNAAM, $this->etiketnaam);
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::MEMOCODE)) $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::MEMOCODE, $this->memocode);
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::HOEVEELHEID)) $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::HOEVEELHEID, $this->hoeveelheid);
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::THESAURUSVERWIJZING_EENHEID)) $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::THESAURUSVERWIJZING_EENHEID, $this->thesaurusverwijzing_eenheid);
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::EENHEID)) $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::EENHEID, $this->eenheid);
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::DECLARATIEPRIJS)) $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::DECLARATIEPRIJS, $this->declaratieprijs);
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::WMG)) $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::WMG, $this->wmg);
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::UITSLUITEND_VOOR_GECONTRACTEERDE_APOTHEKEN)) $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::UITSLUITEND_VOOR_GECONTRACTEERDE_APOTHEKEN, $this->uitsluitend_voor_gecontracteerde_apotheken);
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT_THESAURUS_VERWIJZING)) $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT_THESAURUS_VERWIJZING, $this->tariefsoort_thesaurus_verwijzing);
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT)) $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT, $this->tariefsoort);
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::BEGINDATUM)) $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::BEGINDATUM, $this->begindatum);
        if ($this->isColumnModified(GsLokaleCodesZorgverzekeraarsZspcsPeer::VERVALDATUM)) $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::VERVALDATUM, $this->vervaldatum);

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
        $criteria = new Criteria(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME);
        $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE, $this->zorgverzekeraar_specifieke_prestatie_code);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getZorgverzekeraarSpecifiekePrestatieCode();
    }

    /**
     * Generic method to set the primary key (zorgverzekeraar_specifieke_prestatie_code column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setZorgverzekeraarSpecifiekePrestatieCode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getZorgverzekeraarSpecifiekePrestatieCode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsLokaleCodesZorgverzekeraarsZspcs (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setUzoviCodeZorgverzekeraar($this->getUzoviCodeZorgverzekeraar());
        $copyObj->setArtikelOmschrijving($this->getArtikelOmschrijving());
        $copyObj->setEtiketnaam($this->getEtiketnaam());
        $copyObj->setMemocode($this->getMemocode());
        $copyObj->setHoeveelheid($this->getHoeveelheid());
        $copyObj->setThesaurusverwijzingEenheid($this->getThesaurusverwijzingEenheid());
        $copyObj->setEenheid($this->getEenheid());
        $copyObj->setDeclaratieprijs($this->getDeclaratieprijs());
        $copyObj->setWmg($this->getWmg());
        $copyObj->setUitsluitendVoorGecontracteerdeApotheken($this->getUitsluitendVoorGecontracteerdeApotheken());
        $copyObj->setTariefsoortThesaurusVerwijzing($this->getTariefsoortThesaurusVerwijzing());
        $copyObj->setTariefsoort($this->getTariefsoort());
        $copyObj->setBegindatum($this->getBegindatum());
        $copyObj->setVervaldatum($this->getVervaldatum());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setZorgverzekeraarSpecifiekePrestatieCode(NULL); // this is a auto-increment column, so set to default value
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
     * @return GsLokaleCodesZorgverzekeraarsZspcs Clone of current object.
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
     * @return GsLokaleCodesZorgverzekeraarsZspcsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsLokaleCodesZorgverzekeraarsZspcsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->zorgverzekeraar_specifieke_prestatie_code = null;
        $this->uzovi_code_zorgverzekeraar = null;
        $this->artikel_omschrijving = null;
        $this->etiketnaam = null;
        $this->memocode = null;
        $this->hoeveelheid = null;
        $this->thesaurusverwijzing_eenheid = null;
        $this->eenheid = null;
        $this->declaratieprijs = null;
        $this->wmg = null;
        $this->uitsluitend_voor_gecontracteerde_apotheken = null;
        $this->tariefsoort_thesaurus_verwijzing = null;
        $this->tariefsoort = null;
        $this->begindatum = null;
        $this->vervaldatum = null;
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

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsLokaleCodesZorgverzekeraarsZspcsPeer::DEFAULT_STRING_FORMAT);
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
