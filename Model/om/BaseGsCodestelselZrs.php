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
use PharmaIntelligence\GstandaardBundle\Model\GsCodestelselZrs;
use PharmaIntelligence\GstandaardBundle\Model\GsCodestelselZrsPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsCodestelselZrsQuery;

abstract class BaseGsCodestelselZrs extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsCodestelselZrsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsCodestelselZrsPeer
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
     * The value for the soort_code field.
     * @var        int
     */
    protected $soort_code;

    /**
     * The value for the zorg_registratie_nummer field.
     * @var        int
     */
    protected $zorg_registratie_nummer;

    /**
     * The value for the memocode_bij_zr_nummer_uniek_per_aaacod field.
     * @var        string
     */
    protected $memocode_bij_zr_nummer_uniek_per_aaacod;

    /**
     * The value for the omschrijving_zrnr_in_70_posities_voor_keuzemenus field.
     * @var        string
     */
    protected $omschrijving_zrnr_in_70_posities_voor_keuzemenus;

    /**
     * The value for the omschrijving_zrnr_in_45_posities_voor_op_etiket field.
     * @var        string
     */
    protected $omschrijving_zrnr_in_45_posities_voor_op_etiket;

    /**
     * The value for the tekstmodulethesaurus_103 field.
     * @var        int
     */
    protected $tekstmodulethesaurus_103;

    /**
     * The value for the tekstmodule field.
     * @var        int
     */
    protected $tekstmodule;

    /**
     * The value for the tekstsoortthesaurus_104 field.
     * @var        int
     */
    protected $tekstsoortthesaurus_104;

    /**
     * The value for the tekstsoort field.
     * @var        int
     */
    protected $tekstsoort;

    /**
     * The value for the tekst_nivo_kode field.
     * @var        int
     */
    protected $tekst_nivo_kode;

    /**
     * The value for the datum_van_1e_opname field.
     * @var        string
     */
    protected $datum_van_1e_opname;

    /**
     * The value for the datum_van_laatste_mutatie field.
     * @var        string
     */
    protected $datum_van_laatste_mutatie;

    /**
     * The value for the datum_van_inactief_maken field.
     * @var        string
     */
    protected $datum_van_inactief_maken;

    /**
     * The value for the thesaurusnummer field.
     * @var        int
     */
    protected $thesaurusnummer;

    /**
     * The value for the thesaurus_itemnummer field.
     * @var        int
     */
    protected $thesaurus_itemnummer;

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
     * Get the [soort_code] column value.
     *
     * @return int
     */
    public function getSoortCode()
    {

        return $this->soort_code;
    }

    /**
     * Get the [zorg_registratie_nummer] column value.
     *
     * @return int
     */
    public function getZorgRegistratieNummer()
    {

        return $this->zorg_registratie_nummer;
    }

    /**
     * Get the [memocode_bij_zr_nummer_uniek_per_aaacod] column value.
     *
     * @return string
     */
    public function getMemocodeBijZrNummerUniekPerAaacod()
    {

        return $this->memocode_bij_zr_nummer_uniek_per_aaacod;
    }

    /**
     * Get the [omschrijving_zrnr_in_70_posities_voor_keuzemenus] column value.
     *
     * @return string
     */
    public function getOmschrijvingZrnrIn70PositiesVoorKeuzemenus()
    {

        return $this->omschrijving_zrnr_in_70_posities_voor_keuzemenus;
    }

    /**
     * Get the [omschrijving_zrnr_in_45_posities_voor_op_etiket] column value.
     *
     * @return string
     */
    public function getOmschrijvingZrnrIn45PositiesVoorOpEtiket()
    {

        return $this->omschrijving_zrnr_in_45_posities_voor_op_etiket;
    }

    /**
     * Get the [tekstmodulethesaurus_103] column value.
     *
     * @return int
     */
    public function getTekstmodulethesaurus103()
    {

        return $this->tekstmodulethesaurus_103;
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
     * Get the [tekstsoortthesaurus_104] column value.
     *
     * @return int
     */
    public function getTekstsoortthesaurus104()
    {

        return $this->tekstsoortthesaurus_104;
    }

    /**
     * Get the [tekstsoort] column value.
     *
     * @return int
     */
    public function getTekstsoort()
    {

        return $this->tekstsoort;
    }

    /**
     * Get the [tekst_nivo_kode] column value.
     *
     * @return int
     */
    public function getTekstNivoKode()
    {

        return $this->tekst_nivo_kode;
    }

    /**
     * Get the [optionally formatted] temporal [datum_van_1e_opname] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatumVan1eOpname($format = null)
    {
        if ($this->datum_van_1e_opname === null) {
            return null;
        }

        if ($this->datum_van_1e_opname === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datum_van_1e_opname);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datum_van_1e_opname, true), $x);
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
     * Get the [optionally formatted] temporal [datum_van_laatste_mutatie] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatumVanLaatsteMutatie($format = null)
    {
        if ($this->datum_van_laatste_mutatie === null) {
            return null;
        }

        if ($this->datum_van_laatste_mutatie === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datum_van_laatste_mutatie);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datum_van_laatste_mutatie, true), $x);
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
     * Get the [optionally formatted] temporal [datum_van_inactief_maken] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatumVanInactiefMaken($format = null)
    {
        if ($this->datum_van_inactief_maken === null) {
            return null;
        }

        if ($this->datum_van_inactief_maken === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datum_van_inactief_maken);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datum_van_inactief_maken, true), $x);
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
     * Get the [thesaurusnummer] column value.
     *
     * @return int
     */
    public function getThesaurusnummer()
    {

        return $this->thesaurusnummer;
    }

    /**
     * Get the [thesaurus_itemnummer] column value.
     *
     * @return int
     */
    public function getThesaurusItemnummer()
    {

        return $this->thesaurus_itemnummer;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrs The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsCodestelselZrsPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrs The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsCodestelselZrsPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [soort_code] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrs The current object (for fluent API support)
     */
    public function setSoortCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->soort_code !== $v) {
            $this->soort_code = $v;
            $this->modifiedColumns[] = GsCodestelselZrsPeer::SOORT_CODE;
        }


        return $this;
    } // setSoortCode()

    /**
     * Set the value of [zorg_registratie_nummer] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrs The current object (for fluent API support)
     */
    public function setZorgRegistratieNummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zorg_registratie_nummer !== $v) {
            $this->zorg_registratie_nummer = $v;
            $this->modifiedColumns[] = GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER;
        }


        return $this;
    } // setZorgRegistratieNummer()

    /**
     * Set the value of [memocode_bij_zr_nummer_uniek_per_aaacod] column.
     *
     * @param  string $v new value
     * @return GsCodestelselZrs The current object (for fluent API support)
     */
    public function setMemocodeBijZrNummerUniekPerAaacod($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->memocode_bij_zr_nummer_uniek_per_aaacod !== $v) {
            $this->memocode_bij_zr_nummer_uniek_per_aaacod = $v;
            $this->modifiedColumns[] = GsCodestelselZrsPeer::MEMOCODE_BIJ_ZR_NUMMER_UNIEK_PER_AAACOD;
        }


        return $this;
    } // setMemocodeBijZrNummerUniekPerAaacod()

    /**
     * Set the value of [omschrijving_zrnr_in_70_posities_voor_keuzemenus] column.
     *
     * @param  string $v new value
     * @return GsCodestelselZrs The current object (for fluent API support)
     */
    public function setOmschrijvingZrnrIn70PositiesVoorKeuzemenus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->omschrijving_zrnr_in_70_posities_voor_keuzemenus !== $v) {
            $this->omschrijving_zrnr_in_70_posities_voor_keuzemenus = $v;
            $this->modifiedColumns[] = GsCodestelselZrsPeer::OMSCHRIJVING_ZRNR_IN_70_POSITIES_VOOR_KEUZEMENUS;
        }


        return $this;
    } // setOmschrijvingZrnrIn70PositiesVoorKeuzemenus()

    /**
     * Set the value of [omschrijving_zrnr_in_45_posities_voor_op_etiket] column.
     *
     * @param  string $v new value
     * @return GsCodestelselZrs The current object (for fluent API support)
     */
    public function setOmschrijvingZrnrIn45PositiesVoorOpEtiket($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->omschrijving_zrnr_in_45_posities_voor_op_etiket !== $v) {
            $this->omschrijving_zrnr_in_45_posities_voor_op_etiket = $v;
            $this->modifiedColumns[] = GsCodestelselZrsPeer::OMSCHRIJVING_ZRNR_IN_45_POSITIES_VOOR_OP_ETIKET;
        }


        return $this;
    } // setOmschrijvingZrnrIn45PositiesVoorOpEtiket()

    /**
     * Set the value of [tekstmodulethesaurus_103] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrs The current object (for fluent API support)
     */
    public function setTekstmodulethesaurus103($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekstmodulethesaurus_103 !== $v) {
            $this->tekstmodulethesaurus_103 = $v;
            $this->modifiedColumns[] = GsCodestelselZrsPeer::TEKSTMODULETHESAURUS_103;
        }


        return $this;
    } // setTekstmodulethesaurus103()

    /**
     * Set the value of [tekstmodule] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrs The current object (for fluent API support)
     */
    public function setTekstmodule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekstmodule !== $v) {
            $this->tekstmodule = $v;
            $this->modifiedColumns[] = GsCodestelselZrsPeer::TEKSTMODULE;
        }


        return $this;
    } // setTekstmodule()

    /**
     * Set the value of [tekstsoortthesaurus_104] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrs The current object (for fluent API support)
     */
    public function setTekstsoortthesaurus104($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekstsoortthesaurus_104 !== $v) {
            $this->tekstsoortthesaurus_104 = $v;
            $this->modifiedColumns[] = GsCodestelselZrsPeer::TEKSTSOORTTHESAURUS_104;
        }


        return $this;
    } // setTekstsoortthesaurus104()

    /**
     * Set the value of [tekstsoort] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrs The current object (for fluent API support)
     */
    public function setTekstsoort($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekstsoort !== $v) {
            $this->tekstsoort = $v;
            $this->modifiedColumns[] = GsCodestelselZrsPeer::TEKSTSOORT;
        }


        return $this;
    } // setTekstsoort()

    /**
     * Set the value of [tekst_nivo_kode] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrs The current object (for fluent API support)
     */
    public function setTekstNivoKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekst_nivo_kode !== $v) {
            $this->tekst_nivo_kode = $v;
            $this->modifiedColumns[] = GsCodestelselZrsPeer::TEKST_NIVO_KODE;
        }


        return $this;
    } // setTekstNivoKode()

    /**
     * Sets the value of [datum_van_1e_opname] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsCodestelselZrs The current object (for fluent API support)
     */
    public function setDatumVan1eOpname($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datum_van_1e_opname !== null || $dt !== null) {
            $currentDateAsString = ($this->datum_van_1e_opname !== null && $tmpDt = new DateTime($this->datum_van_1e_opname)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datum_van_1e_opname = $newDateAsString;
                $this->modifiedColumns[] = GsCodestelselZrsPeer::DATUM_VAN_1E_OPNAME;
            }
        } // if either are not null


        return $this;
    } // setDatumVan1eOpname()

    /**
     * Sets the value of [datum_van_laatste_mutatie] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsCodestelselZrs The current object (for fluent API support)
     */
    public function setDatumVanLaatsteMutatie($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datum_van_laatste_mutatie !== null || $dt !== null) {
            $currentDateAsString = ($this->datum_van_laatste_mutatie !== null && $tmpDt = new DateTime($this->datum_van_laatste_mutatie)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datum_van_laatste_mutatie = $newDateAsString;
                $this->modifiedColumns[] = GsCodestelselZrsPeer::DATUM_VAN_LAATSTE_MUTATIE;
            }
        } // if either are not null


        return $this;
    } // setDatumVanLaatsteMutatie()

    /**
     * Sets the value of [datum_van_inactief_maken] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsCodestelselZrs The current object (for fluent API support)
     */
    public function setDatumVanInactiefMaken($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datum_van_inactief_maken !== null || $dt !== null) {
            $currentDateAsString = ($this->datum_van_inactief_maken !== null && $tmpDt = new DateTime($this->datum_van_inactief_maken)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datum_van_inactief_maken = $newDateAsString;
                $this->modifiedColumns[] = GsCodestelselZrsPeer::DATUM_VAN_INACTIEF_MAKEN;
            }
        } // if either are not null


        return $this;
    } // setDatumVanInactiefMaken()

    /**
     * Set the value of [thesaurusnummer] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrs The current object (for fluent API support)
     */
    public function setThesaurusnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusnummer !== $v) {
            $this->thesaurusnummer = $v;
            $this->modifiedColumns[] = GsCodestelselZrsPeer::THESAURUSNUMMER;
        }


        return $this;
    } // setThesaurusnummer()

    /**
     * Set the value of [thesaurus_itemnummer] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrs The current object (for fluent API support)
     */
    public function setThesaurusItemnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurus_itemnummer !== $v) {
            $this->thesaurus_itemnummer = $v;
            $this->modifiedColumns[] = GsCodestelselZrsPeer::THESAURUS_ITEMNUMMER;
        }


        return $this;
    } // setThesaurusItemnummer()

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
            $this->soort_code = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->zorg_registratie_nummer = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->memocode_bij_zr_nummer_uniek_per_aaacod = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->omschrijving_zrnr_in_70_posities_voor_keuzemenus = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->omschrijving_zrnr_in_45_posities_voor_op_etiket = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->tekstmodulethesaurus_103 = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->tekstmodule = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->tekstsoortthesaurus_104 = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->tekstsoort = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->tekst_nivo_kode = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->datum_van_1e_opname = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->datum_van_laatste_mutatie = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->datum_van_inactief_maken = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->thesaurusnummer = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->thesaurus_itemnummer = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 17; // 17 = GsCodestelselZrsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsCodestelselZrs object", $e);
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
            $con = Propel::getConnection(GsCodestelselZrsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsCodestelselZrsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsCodestelselZrsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsCodestelselZrsQuery::create()
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
            $con = Propel::getConnection(GsCodestelselZrsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsCodestelselZrsPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsCodestelselZrsPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsCodestelselZrsPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsCodestelselZrsPeer::SOORT_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`soort_code`';
        }
        if ($this->isColumnModified(GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`zorg_registratie_nummer`';
        }
        if ($this->isColumnModified(GsCodestelselZrsPeer::MEMOCODE_BIJ_ZR_NUMMER_UNIEK_PER_AAACOD)) {
            $modifiedColumns[':p' . $index++]  = '`memocode_bij_zr_nummer_uniek_per_aaacod`';
        }
        if ($this->isColumnModified(GsCodestelselZrsPeer::OMSCHRIJVING_ZRNR_IN_70_POSITIES_VOOR_KEUZEMENUS)) {
            $modifiedColumns[':p' . $index++]  = '`omschrijving_zrnr_in_70_posities_voor_keuzemenus`';
        }
        if ($this->isColumnModified(GsCodestelselZrsPeer::OMSCHRIJVING_ZRNR_IN_45_POSITIES_VOOR_OP_ETIKET)) {
            $modifiedColumns[':p' . $index++]  = '`omschrijving_zrnr_in_45_posities_voor_op_etiket`';
        }
        if ($this->isColumnModified(GsCodestelselZrsPeer::TEKSTMODULETHESAURUS_103)) {
            $modifiedColumns[':p' . $index++]  = '`tekstmodulethesaurus_103`';
        }
        if ($this->isColumnModified(GsCodestelselZrsPeer::TEKSTMODULE)) {
            $modifiedColumns[':p' . $index++]  = '`tekstmodule`';
        }
        if ($this->isColumnModified(GsCodestelselZrsPeer::TEKSTSOORTTHESAURUS_104)) {
            $modifiedColumns[':p' . $index++]  = '`tekstsoortthesaurus_104`';
        }
        if ($this->isColumnModified(GsCodestelselZrsPeer::TEKSTSOORT)) {
            $modifiedColumns[':p' . $index++]  = '`tekstsoort`';
        }
        if ($this->isColumnModified(GsCodestelselZrsPeer::TEKST_NIVO_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`tekst_nivo_kode`';
        }
        if ($this->isColumnModified(GsCodestelselZrsPeer::DATUM_VAN_1E_OPNAME)) {
            $modifiedColumns[':p' . $index++]  = '`datum_van_1e_opname`';
        }
        if ($this->isColumnModified(GsCodestelselZrsPeer::DATUM_VAN_LAATSTE_MUTATIE)) {
            $modifiedColumns[':p' . $index++]  = '`datum_van_laatste_mutatie`';
        }
        if ($this->isColumnModified(GsCodestelselZrsPeer::DATUM_VAN_INACTIEF_MAKEN)) {
            $modifiedColumns[':p' . $index++]  = '`datum_van_inactief_maken`';
        }
        if ($this->isColumnModified(GsCodestelselZrsPeer::THESAURUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusnummer`';
        }
        if ($this->isColumnModified(GsCodestelselZrsPeer::THESAURUS_ITEMNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurus_itemnummer`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_codestelsel_zrs` (%s) VALUES (%s)',
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
                    case '`soort_code`':
                        $stmt->bindValue($identifier, $this->soort_code, PDO::PARAM_INT);
                        break;
                    case '`zorg_registratie_nummer`':
                        $stmt->bindValue($identifier, $this->zorg_registratie_nummer, PDO::PARAM_INT);
                        break;
                    case '`memocode_bij_zr_nummer_uniek_per_aaacod`':
                        $stmt->bindValue($identifier, $this->memocode_bij_zr_nummer_uniek_per_aaacod, PDO::PARAM_STR);
                        break;
                    case '`omschrijving_zrnr_in_70_posities_voor_keuzemenus`':
                        $stmt->bindValue($identifier, $this->omschrijving_zrnr_in_70_posities_voor_keuzemenus, PDO::PARAM_STR);
                        break;
                    case '`omschrijving_zrnr_in_45_posities_voor_op_etiket`':
                        $stmt->bindValue($identifier, $this->omschrijving_zrnr_in_45_posities_voor_op_etiket, PDO::PARAM_STR);
                        break;
                    case '`tekstmodulethesaurus_103`':
                        $stmt->bindValue($identifier, $this->tekstmodulethesaurus_103, PDO::PARAM_INT);
                        break;
                    case '`tekstmodule`':
                        $stmt->bindValue($identifier, $this->tekstmodule, PDO::PARAM_INT);
                        break;
                    case '`tekstsoortthesaurus_104`':
                        $stmt->bindValue($identifier, $this->tekstsoortthesaurus_104, PDO::PARAM_INT);
                        break;
                    case '`tekstsoort`':
                        $stmt->bindValue($identifier, $this->tekstsoort, PDO::PARAM_INT);
                        break;
                    case '`tekst_nivo_kode`':
                        $stmt->bindValue($identifier, $this->tekst_nivo_kode, PDO::PARAM_INT);
                        break;
                    case '`datum_van_1e_opname`':
                        $stmt->bindValue($identifier, $this->datum_van_1e_opname, PDO::PARAM_STR);
                        break;
                    case '`datum_van_laatste_mutatie`':
                        $stmt->bindValue($identifier, $this->datum_van_laatste_mutatie, PDO::PARAM_STR);
                        break;
                    case '`datum_van_inactief_maken`':
                        $stmt->bindValue($identifier, $this->datum_van_inactief_maken, PDO::PARAM_STR);
                        break;
                    case '`thesaurusnummer`':
                        $stmt->bindValue($identifier, $this->thesaurusnummer, PDO::PARAM_INT);
                        break;
                    case '`thesaurus_itemnummer`':
                        $stmt->bindValue($identifier, $this->thesaurus_itemnummer, PDO::PARAM_INT);
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


            if (($retval = GsCodestelselZrsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsCodestelselZrsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getSoortCode();
                break;
            case 3:
                return $this->getZorgRegistratieNummer();
                break;
            case 4:
                return $this->getMemocodeBijZrNummerUniekPerAaacod();
                break;
            case 5:
                return $this->getOmschrijvingZrnrIn70PositiesVoorKeuzemenus();
                break;
            case 6:
                return $this->getOmschrijvingZrnrIn45PositiesVoorOpEtiket();
                break;
            case 7:
                return $this->getTekstmodulethesaurus103();
                break;
            case 8:
                return $this->getTekstmodule();
                break;
            case 9:
                return $this->getTekstsoortthesaurus104();
                break;
            case 10:
                return $this->getTekstsoort();
                break;
            case 11:
                return $this->getTekstNivoKode();
                break;
            case 12:
                return $this->getDatumVan1eOpname();
                break;
            case 13:
                return $this->getDatumVanLaatsteMutatie();
                break;
            case 14:
                return $this->getDatumVanInactiefMaken();
                break;
            case 15:
                return $this->getThesaurusnummer();
                break;
            case 16:
                return $this->getThesaurusItemnummer();
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
        if (isset($alreadyDumpedObjects['GsCodestelselZrs'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsCodestelselZrs'][serialize($this->getPrimaryKey())] = true;
        $keys = GsCodestelselZrsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getSoortCode(),
            $keys[3] => $this->getZorgRegistratieNummer(),
            $keys[4] => $this->getMemocodeBijZrNummerUniekPerAaacod(),
            $keys[5] => $this->getOmschrijvingZrnrIn70PositiesVoorKeuzemenus(),
            $keys[6] => $this->getOmschrijvingZrnrIn45PositiesVoorOpEtiket(),
            $keys[7] => $this->getTekstmodulethesaurus103(),
            $keys[8] => $this->getTekstmodule(),
            $keys[9] => $this->getTekstsoortthesaurus104(),
            $keys[10] => $this->getTekstsoort(),
            $keys[11] => $this->getTekstNivoKode(),
            $keys[12] => $this->getDatumVan1eOpname(),
            $keys[13] => $this->getDatumVanLaatsteMutatie(),
            $keys[14] => $this->getDatumVanInactiefMaken(),
            $keys[15] => $this->getThesaurusnummer(),
            $keys[16] => $this->getThesaurusItemnummer(),
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
        $pos = GsCodestelselZrsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setSoortCode($value);
                break;
            case 3:
                $this->setZorgRegistratieNummer($value);
                break;
            case 4:
                $this->setMemocodeBijZrNummerUniekPerAaacod($value);
                break;
            case 5:
                $this->setOmschrijvingZrnrIn70PositiesVoorKeuzemenus($value);
                break;
            case 6:
                $this->setOmschrijvingZrnrIn45PositiesVoorOpEtiket($value);
                break;
            case 7:
                $this->setTekstmodulethesaurus103($value);
                break;
            case 8:
                $this->setTekstmodule($value);
                break;
            case 9:
                $this->setTekstsoortthesaurus104($value);
                break;
            case 10:
                $this->setTekstsoort($value);
                break;
            case 11:
                $this->setTekstNivoKode($value);
                break;
            case 12:
                $this->setDatumVan1eOpname($value);
                break;
            case 13:
                $this->setDatumVanLaatsteMutatie($value);
                break;
            case 14:
                $this->setDatumVanInactiefMaken($value);
                break;
            case 15:
                $this->setThesaurusnummer($value);
                break;
            case 16:
                $this->setThesaurusItemnummer($value);
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
        $keys = GsCodestelselZrsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSoortCode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setZorgRegistratieNummer($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMemocodeBijZrNummerUniekPerAaacod($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOmschrijvingZrnrIn70PositiesVoorKeuzemenus($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOmschrijvingZrnrIn45PositiesVoorOpEtiket($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTekstmodulethesaurus103($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTekstmodule($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTekstsoortthesaurus104($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTekstsoort($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTekstNivoKode($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDatumVan1eOpname($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDatumVanLaatsteMutatie($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDatumVanInactiefMaken($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setThesaurusnummer($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setThesaurusItemnummer($arr[$keys[16]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsCodestelselZrsPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsCodestelselZrsPeer::BESTANDNUMMER)) $criteria->add(GsCodestelselZrsPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsCodestelselZrsPeer::MUTATIEKODE)) $criteria->add(GsCodestelselZrsPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsCodestelselZrsPeer::SOORT_CODE)) $criteria->add(GsCodestelselZrsPeer::SOORT_CODE, $this->soort_code);
        if ($this->isColumnModified(GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER)) $criteria->add(GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER, $this->zorg_registratie_nummer);
        if ($this->isColumnModified(GsCodestelselZrsPeer::MEMOCODE_BIJ_ZR_NUMMER_UNIEK_PER_AAACOD)) $criteria->add(GsCodestelselZrsPeer::MEMOCODE_BIJ_ZR_NUMMER_UNIEK_PER_AAACOD, $this->memocode_bij_zr_nummer_uniek_per_aaacod);
        if ($this->isColumnModified(GsCodestelselZrsPeer::OMSCHRIJVING_ZRNR_IN_70_POSITIES_VOOR_KEUZEMENUS)) $criteria->add(GsCodestelselZrsPeer::OMSCHRIJVING_ZRNR_IN_70_POSITIES_VOOR_KEUZEMENUS, $this->omschrijving_zrnr_in_70_posities_voor_keuzemenus);
        if ($this->isColumnModified(GsCodestelselZrsPeer::OMSCHRIJVING_ZRNR_IN_45_POSITIES_VOOR_OP_ETIKET)) $criteria->add(GsCodestelselZrsPeer::OMSCHRIJVING_ZRNR_IN_45_POSITIES_VOOR_OP_ETIKET, $this->omschrijving_zrnr_in_45_posities_voor_op_etiket);
        if ($this->isColumnModified(GsCodestelselZrsPeer::TEKSTMODULETHESAURUS_103)) $criteria->add(GsCodestelselZrsPeer::TEKSTMODULETHESAURUS_103, $this->tekstmodulethesaurus_103);
        if ($this->isColumnModified(GsCodestelselZrsPeer::TEKSTMODULE)) $criteria->add(GsCodestelselZrsPeer::TEKSTMODULE, $this->tekstmodule);
        if ($this->isColumnModified(GsCodestelselZrsPeer::TEKSTSOORTTHESAURUS_104)) $criteria->add(GsCodestelselZrsPeer::TEKSTSOORTTHESAURUS_104, $this->tekstsoortthesaurus_104);
        if ($this->isColumnModified(GsCodestelselZrsPeer::TEKSTSOORT)) $criteria->add(GsCodestelselZrsPeer::TEKSTSOORT, $this->tekstsoort);
        if ($this->isColumnModified(GsCodestelselZrsPeer::TEKST_NIVO_KODE)) $criteria->add(GsCodestelselZrsPeer::TEKST_NIVO_KODE, $this->tekst_nivo_kode);
        if ($this->isColumnModified(GsCodestelselZrsPeer::DATUM_VAN_1E_OPNAME)) $criteria->add(GsCodestelselZrsPeer::DATUM_VAN_1E_OPNAME, $this->datum_van_1e_opname);
        if ($this->isColumnModified(GsCodestelselZrsPeer::DATUM_VAN_LAATSTE_MUTATIE)) $criteria->add(GsCodestelselZrsPeer::DATUM_VAN_LAATSTE_MUTATIE, $this->datum_van_laatste_mutatie);
        if ($this->isColumnModified(GsCodestelselZrsPeer::DATUM_VAN_INACTIEF_MAKEN)) $criteria->add(GsCodestelselZrsPeer::DATUM_VAN_INACTIEF_MAKEN, $this->datum_van_inactief_maken);
        if ($this->isColumnModified(GsCodestelselZrsPeer::THESAURUSNUMMER)) $criteria->add(GsCodestelselZrsPeer::THESAURUSNUMMER, $this->thesaurusnummer);
        if ($this->isColumnModified(GsCodestelselZrsPeer::THESAURUS_ITEMNUMMER)) $criteria->add(GsCodestelselZrsPeer::THESAURUS_ITEMNUMMER, $this->thesaurus_itemnummer);

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
        $criteria = new Criteria(GsCodestelselZrsPeer::DATABASE_NAME);
        $criteria->add(GsCodestelselZrsPeer::SOORT_CODE, $this->soort_code);
        $criteria->add(GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER, $this->zorg_registratie_nummer);

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
        $pks[0] = $this->getSoortCode();
        $pks[1] = $this->getZorgRegistratieNummer();

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
        $this->setSoortCode($keys[0]);
        $this->setZorgRegistratieNummer($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getSoortCode()) && (null === $this->getZorgRegistratieNummer());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsCodestelselZrs (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setSoortCode($this->getSoortCode());
        $copyObj->setZorgRegistratieNummer($this->getZorgRegistratieNummer());
        $copyObj->setMemocodeBijZrNummerUniekPerAaacod($this->getMemocodeBijZrNummerUniekPerAaacod());
        $copyObj->setOmschrijvingZrnrIn70PositiesVoorKeuzemenus($this->getOmschrijvingZrnrIn70PositiesVoorKeuzemenus());
        $copyObj->setOmschrijvingZrnrIn45PositiesVoorOpEtiket($this->getOmschrijvingZrnrIn45PositiesVoorOpEtiket());
        $copyObj->setTekstmodulethesaurus103($this->getTekstmodulethesaurus103());
        $copyObj->setTekstmodule($this->getTekstmodule());
        $copyObj->setTekstsoortthesaurus104($this->getTekstsoortthesaurus104());
        $copyObj->setTekstsoort($this->getTekstsoort());
        $copyObj->setTekstNivoKode($this->getTekstNivoKode());
        $copyObj->setDatumVan1eOpname($this->getDatumVan1eOpname());
        $copyObj->setDatumVanLaatsteMutatie($this->getDatumVanLaatsteMutatie());
        $copyObj->setDatumVanInactiefMaken($this->getDatumVanInactiefMaken());
        $copyObj->setThesaurusnummer($this->getThesaurusnummer());
        $copyObj->setThesaurusItemnummer($this->getThesaurusItemnummer());
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
     * @return GsCodestelselZrs Clone of current object.
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
     * @return GsCodestelselZrsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsCodestelselZrsPeer();
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
        $this->soort_code = null;
        $this->zorg_registratie_nummer = null;
        $this->memocode_bij_zr_nummer_uniek_per_aaacod = null;
        $this->omschrijving_zrnr_in_70_posities_voor_keuzemenus = null;
        $this->omschrijving_zrnr_in_45_posities_voor_op_etiket = null;
        $this->tekstmodulethesaurus_103 = null;
        $this->tekstmodule = null;
        $this->tekstsoortthesaurus_104 = null;
        $this->tekstsoort = null;
        $this->tekst_nivo_kode = null;
        $this->datum_van_1e_opname = null;
        $this->datum_van_laatste_mutatie = null;
        $this->datum_van_inactief_maken = null;
        $this->thesaurusnummer = null;
        $this->thesaurus_itemnummer = null;
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
        return (string) $this->exportTo(GsCodestelselZrsPeer::DEFAULT_STRING_FORMAT);
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
