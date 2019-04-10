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
use PharmaIntelligence\GstandaardBundle\Model\GsPreferentieBeleid;
use PharmaIntelligence\GstandaardBundle\Model\GsPreferentieBeleidPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsPreferentieBeleidQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery;

abstract class BaseGsPreferentieBeleid extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPreferentieBeleidPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsPreferentieBeleidPeer
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
     * The value for the zindex_nummer field.
     * @var        int
     */
    protected $zindex_nummer;

    /**
     * The value for the uzovi_code_zorgverzekeraar field.
     * @var        int
     */
    protected $uzovi_code_zorgverzekeraar;

    /**
     * The value for the thesaurusverwijzing_preferentie_status field.
     * @var        int
     */
    protected $thesaurusverwijzing_preferentie_status;

    /**
     * The value for the preferentie_status field.
     * @var        int
     */
    protected $preferentie_status;

    /**
     * The value for the startdatum_preferentie_status field.
     * @var        string
     */
    protected $startdatum_preferentie_status;

    /**
     * The value for the einddatum_preferentie_status field.
     * @var        string
     */
    protected $einddatum_preferentie_status;

    /**
     * The value for the preferentie_cluster_code field.
     * @var        int
     */
    protected $preferentie_cluster_code;

    /**
     * The value for the prkcode field.
     * @var        int
     */
    protected $prkcode;

    /**
     * The value for the handelsproduktkode field.
     * @var        int
     */
    protected $handelsproduktkode;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aPreferentieStatusOmschrijving;

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
     * Get the [zindex_nummer] column value.
     *
     * @return int
     */
    public function getZindexNummer()
    {

        return $this->zindex_nummer;
    }

    /**
     * Get the [uzovi_code_zorgverzekeraar] column value.
     *
     * @return int
     */
    public function getUzoviCodeZorgverzekeraar()
    {

        return $this->uzovi_code_zorgverzekeraar;
    }

    /**
     * Get the [thesaurusverwijzing_preferentie_status] column value.
     *
     * @return int
     */
    public function getThesaurusverwijzingPreferentieStatus()
    {

        return $this->thesaurusverwijzing_preferentie_status;
    }

    /**
     * Get the [preferentie_status] column value.
     *
     * @return int
     */
    public function getPreferentieStatus()
    {

        return $this->preferentie_status;
    }

    /**
     * Get the [optionally formatted] temporal [startdatum_preferentie_status] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getStartdatumPreferentieStatus($format = null)
    {
        if ($this->startdatum_preferentie_status === null) {
            return null;
        }

        if ($this->startdatum_preferentie_status === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->startdatum_preferentie_status);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->startdatum_preferentie_status, true), $x);
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
     * Get the [optionally formatted] temporal [einddatum_preferentie_status] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEinddatumPreferentieStatus($format = null)
    {
        if ($this->einddatum_preferentie_status === null) {
            return null;
        }

        if ($this->einddatum_preferentie_status === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->einddatum_preferentie_status);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->einddatum_preferentie_status, true), $x);
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
     * Get the [preferentie_cluster_code] column value.
     *
     * @return int
     */
    public function getPreferentieClusterCode()
    {

        return $this->preferentie_cluster_code;
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
     * Get the [handelsproduktkode] column value.
     *
     * @return int
     */
    public function getHandelsproduktkode()
    {

        return $this->handelsproduktkode;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsPreferentieBeleid The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsPreferentieBeleidPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsPreferentieBeleid The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsPreferentieBeleidPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [zindex_nummer] column.
     *
     * @param  int $v new value
     * @return GsPreferentieBeleid The current object (for fluent API support)
     */
    public function setZindexNummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zindex_nummer !== $v) {
            $this->zindex_nummer = $v;
            $this->modifiedColumns[] = GsPreferentieBeleidPeer::ZINDEX_NUMMER;
        }

        if ($this->aGsArtikelen !== null && $this->aGsArtikelen->getZinummer() !== $v) {
            $this->aGsArtikelen = null;
        }


        return $this;
    } // setZindexNummer()

    /**
     * Set the value of [uzovi_code_zorgverzekeraar] column.
     *
     * @param  int $v new value
     * @return GsPreferentieBeleid The current object (for fluent API support)
     */
    public function setUzoviCodeZorgverzekeraar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->uzovi_code_zorgverzekeraar !== $v) {
            $this->uzovi_code_zorgverzekeraar = $v;
            $this->modifiedColumns[] = GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR;
        }


        return $this;
    } // setUzoviCodeZorgverzekeraar()

    /**
     * Set the value of [thesaurusverwijzing_preferentie_status] column.
     *
     * @param  int $v new value
     * @return GsPreferentieBeleid The current object (for fluent API support)
     */
    public function setThesaurusverwijzingPreferentieStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusverwijzing_preferentie_status !== $v) {
            $this->thesaurusverwijzing_preferentie_status = $v;
            $this->modifiedColumns[] = GsPreferentieBeleidPeer::THESAURUSVERWIJZING_PREFERENTIE_STATUS;
        }

        if ($this->aPreferentieStatusOmschrijving !== null && $this->aPreferentieStatusOmschrijving->getThesaurusnummer() !== $v) {
            $this->aPreferentieStatusOmschrijving = null;
        }


        return $this;
    } // setThesaurusverwijzingPreferentieStatus()

    /**
     * Set the value of [preferentie_status] column.
     *
     * @param  int $v new value
     * @return GsPreferentieBeleid The current object (for fluent API support)
     */
    public function setPreferentieStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->preferentie_status !== $v) {
            $this->preferentie_status = $v;
            $this->modifiedColumns[] = GsPreferentieBeleidPeer::PREFERENTIE_STATUS;
        }

        if ($this->aPreferentieStatusOmschrijving !== null && $this->aPreferentieStatusOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aPreferentieStatusOmschrijving = null;
        }


        return $this;
    } // setPreferentieStatus()

    /**
     * Sets the value of [startdatum_preferentie_status] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsPreferentieBeleid The current object (for fluent API support)
     */
    public function setStartdatumPreferentieStatus($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->startdatum_preferentie_status !== null || $dt !== null) {
            $currentDateAsString = ($this->startdatum_preferentie_status !== null && $tmpDt = new DateTime($this->startdatum_preferentie_status)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->startdatum_preferentie_status = $newDateAsString;
                $this->modifiedColumns[] = GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS;
            }
        } // if either are not null


        return $this;
    } // setStartdatumPreferentieStatus()

    /**
     * Sets the value of [einddatum_preferentie_status] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsPreferentieBeleid The current object (for fluent API support)
     */
    public function setEinddatumPreferentieStatus($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->einddatum_preferentie_status !== null || $dt !== null) {
            $currentDateAsString = ($this->einddatum_preferentie_status !== null && $tmpDt = new DateTime($this->einddatum_preferentie_status)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->einddatum_preferentie_status = $newDateAsString;
                $this->modifiedColumns[] = GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS;
            }
        } // if either are not null


        return $this;
    } // setEinddatumPreferentieStatus()

    /**
     * Set the value of [preferentie_cluster_code] column.
     *
     * @param  int $v new value
     * @return GsPreferentieBeleid The current object (for fluent API support)
     */
    public function setPreferentieClusterCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->preferentie_cluster_code !== $v) {
            $this->preferentie_cluster_code = $v;
            $this->modifiedColumns[] = GsPreferentieBeleidPeer::PREFERENTIE_CLUSTER_CODE;
        }


        return $this;
    } // setPreferentieClusterCode()

    /**
     * Set the value of [prkcode] column.
     *
     * @param  int $v new value
     * @return GsPreferentieBeleid The current object (for fluent API support)
     */
    public function setPrkcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->prkcode !== $v) {
            $this->prkcode = $v;
            $this->modifiedColumns[] = GsPreferentieBeleidPeer::PRKCODE;
        }


        return $this;
    } // setPrkcode()

    /**
     * Set the value of [handelsproduktkode] column.
     *
     * @param  int $v new value
     * @return GsPreferentieBeleid The current object (for fluent API support)
     */
    public function setHandelsproduktkode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->handelsproduktkode !== $v) {
            $this->handelsproduktkode = $v;
            $this->modifiedColumns[] = GsPreferentieBeleidPeer::HANDELSPRODUKTKODE;
        }


        return $this;
    } // setHandelsproduktkode()

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
            $this->zindex_nummer = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->uzovi_code_zorgverzekeraar = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->thesaurusverwijzing_preferentie_status = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->preferentie_status = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->startdatum_preferentie_status = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->einddatum_preferentie_status = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->preferentie_cluster_code = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->prkcode = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->handelsproduktkode = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = GsPreferentieBeleidPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsPreferentieBeleid object", $e);
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
        if ($this->aPreferentieStatusOmschrijving !== null && $this->thesaurusverwijzing_preferentie_status !== $this->aPreferentieStatusOmschrijving->getThesaurusnummer()) {
            $this->aPreferentieStatusOmschrijving = null;
        }
        if ($this->aPreferentieStatusOmschrijving !== null && $this->preferentie_status !== $this->aPreferentieStatusOmschrijving->getThesaurusItemnummer()) {
            $this->aPreferentieStatusOmschrijving = null;
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
            $con = Propel::getConnection(GsPreferentieBeleidPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsPreferentieBeleidPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aPreferentieStatusOmschrijving = null;
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
            $con = Propel::getConnection(GsPreferentieBeleidPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsPreferentieBeleidQuery::create()
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
            $con = Propel::getConnection(GsPreferentieBeleidPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsPreferentieBeleidPeer::addInstanceToPool($this);
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

            if ($this->aPreferentieStatusOmschrijving !== null) {
                if ($this->aPreferentieStatusOmschrijving->isModified() || $this->aPreferentieStatusOmschrijving->isNew()) {
                    $affectedRows += $this->aPreferentieStatusOmschrijving->save($con);
                }
                $this->setPreferentieStatusOmschrijving($this->aPreferentieStatusOmschrijving);
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
        if ($this->isColumnModified(GsPreferentieBeleidPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsPreferentieBeleidPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsPreferentieBeleidPeer::ZINDEX_NUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`zindex_nummer`';
        }
        if ($this->isColumnModified(GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR)) {
            $modifiedColumns[':p' . $index++]  = '`uzovi_code_zorgverzekeraar`';
        }
        if ($this->isColumnModified(GsPreferentieBeleidPeer::THESAURUSVERWIJZING_PREFERENTIE_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusverwijzing_preferentie_status`';
        }
        if ($this->isColumnModified(GsPreferentieBeleidPeer::PREFERENTIE_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`preferentie_status`';
        }
        if ($this->isColumnModified(GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`startdatum_preferentie_status`';
        }
        if ($this->isColumnModified(GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`einddatum_preferentie_status`';
        }
        if ($this->isColumnModified(GsPreferentieBeleidPeer::PREFERENTIE_CLUSTER_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`preferentie_cluster_code`';
        }
        if ($this->isColumnModified(GsPreferentieBeleidPeer::PRKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`prkcode`';
        }
        if ($this->isColumnModified(GsPreferentieBeleidPeer::HANDELSPRODUKTKODE)) {
            $modifiedColumns[':p' . $index++]  = '`handelsproduktkode`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_preferentie_beleid` (%s) VALUES (%s)',
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
                    case '`zindex_nummer`':
                        $stmt->bindValue($identifier, $this->zindex_nummer, PDO::PARAM_INT);
                        break;
                    case '`uzovi_code_zorgverzekeraar`':
                        $stmt->bindValue($identifier, $this->uzovi_code_zorgverzekeraar, PDO::PARAM_INT);
                        break;
                    case '`thesaurusverwijzing_preferentie_status`':
                        $stmt->bindValue($identifier, $this->thesaurusverwijzing_preferentie_status, PDO::PARAM_INT);
                        break;
                    case '`preferentie_status`':
                        $stmt->bindValue($identifier, $this->preferentie_status, PDO::PARAM_INT);
                        break;
                    case '`startdatum_preferentie_status`':
                        $stmt->bindValue($identifier, $this->startdatum_preferentie_status, PDO::PARAM_STR);
                        break;
                    case '`einddatum_preferentie_status`':
                        $stmt->bindValue($identifier, $this->einddatum_preferentie_status, PDO::PARAM_STR);
                        break;
                    case '`preferentie_cluster_code`':
                        $stmt->bindValue($identifier, $this->preferentie_cluster_code, PDO::PARAM_INT);
                        break;
                    case '`prkcode`':
                        $stmt->bindValue($identifier, $this->prkcode, PDO::PARAM_INT);
                        break;
                    case '`handelsproduktkode`':
                        $stmt->bindValue($identifier, $this->handelsproduktkode, PDO::PARAM_INT);
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

            if ($this->aPreferentieStatusOmschrijving !== null) {
                if (!$this->aPreferentieStatusOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPreferentieStatusOmschrijving->getValidationFailures());
                }
            }

            if ($this->aGsArtikelen !== null) {
                if (!$this->aGsArtikelen->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsArtikelen->getValidationFailures());
                }
            }


            if (($retval = GsPreferentieBeleidPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsPreferentieBeleidPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getZindexNummer();
                break;
            case 3:
                return $this->getUzoviCodeZorgverzekeraar();
                break;
            case 4:
                return $this->getThesaurusverwijzingPreferentieStatus();
                break;
            case 5:
                return $this->getPreferentieStatus();
                break;
            case 6:
                return $this->getStartdatumPreferentieStatus();
                break;
            case 7:
                return $this->getEinddatumPreferentieStatus();
                break;
            case 8:
                return $this->getPreferentieClusterCode();
                break;
            case 9:
                return $this->getPrkcode();
                break;
            case 10:
                return $this->getHandelsproduktkode();
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
        if (isset($alreadyDumpedObjects['GsPreferentieBeleid'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsPreferentieBeleid'][serialize($this->getPrimaryKey())] = true;
        $keys = GsPreferentieBeleidPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getZindexNummer(),
            $keys[3] => $this->getUzoviCodeZorgverzekeraar(),
            $keys[4] => $this->getThesaurusverwijzingPreferentieStatus(),
            $keys[5] => $this->getPreferentieStatus(),
            $keys[6] => $this->getStartdatumPreferentieStatus(),
            $keys[7] => $this->getEinddatumPreferentieStatus(),
            $keys[8] => $this->getPreferentieClusterCode(),
            $keys[9] => $this->getPrkcode(),
            $keys[10] => $this->getHandelsproduktkode(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aPreferentieStatusOmschrijving) {
                $result['PreferentieStatusOmschrijving'] = $this->aPreferentieStatusOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = GsPreferentieBeleidPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setZindexNummer($value);
                break;
            case 3:
                $this->setUzoviCodeZorgverzekeraar($value);
                break;
            case 4:
                $this->setThesaurusverwijzingPreferentieStatus($value);
                break;
            case 5:
                $this->setPreferentieStatus($value);
                break;
            case 6:
                $this->setStartdatumPreferentieStatus($value);
                break;
            case 7:
                $this->setEinddatumPreferentieStatus($value);
                break;
            case 8:
                $this->setPreferentieClusterCode($value);
                break;
            case 9:
                $this->setPrkcode($value);
                break;
            case 10:
                $this->setHandelsproduktkode($value);
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
        $keys = GsPreferentieBeleidPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setZindexNummer($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setUzoviCodeZorgverzekeraar($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setThesaurusverwijzingPreferentieStatus($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPreferentieStatus($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setStartdatumPreferentieStatus($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEinddatumPreferentieStatus($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPreferentieClusterCode($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPrkcode($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setHandelsproduktkode($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsPreferentieBeleidPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsPreferentieBeleidPeer::BESTANDNUMMER)) $criteria->add(GsPreferentieBeleidPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsPreferentieBeleidPeer::MUTATIEKODE)) $criteria->add(GsPreferentieBeleidPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsPreferentieBeleidPeer::ZINDEX_NUMMER)) $criteria->add(GsPreferentieBeleidPeer::ZINDEX_NUMMER, $this->zindex_nummer);
        if ($this->isColumnModified(GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR)) $criteria->add(GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR, $this->uzovi_code_zorgverzekeraar);
        if ($this->isColumnModified(GsPreferentieBeleidPeer::THESAURUSVERWIJZING_PREFERENTIE_STATUS)) $criteria->add(GsPreferentieBeleidPeer::THESAURUSVERWIJZING_PREFERENTIE_STATUS, $this->thesaurusverwijzing_preferentie_status);
        if ($this->isColumnModified(GsPreferentieBeleidPeer::PREFERENTIE_STATUS)) $criteria->add(GsPreferentieBeleidPeer::PREFERENTIE_STATUS, $this->preferentie_status);
        if ($this->isColumnModified(GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS)) $criteria->add(GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS, $this->startdatum_preferentie_status);
        if ($this->isColumnModified(GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS)) $criteria->add(GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS, $this->einddatum_preferentie_status);
        if ($this->isColumnModified(GsPreferentieBeleidPeer::PREFERENTIE_CLUSTER_CODE)) $criteria->add(GsPreferentieBeleidPeer::PREFERENTIE_CLUSTER_CODE, $this->preferentie_cluster_code);
        if ($this->isColumnModified(GsPreferentieBeleidPeer::PRKCODE)) $criteria->add(GsPreferentieBeleidPeer::PRKCODE, $this->prkcode);
        if ($this->isColumnModified(GsPreferentieBeleidPeer::HANDELSPRODUKTKODE)) $criteria->add(GsPreferentieBeleidPeer::HANDELSPRODUKTKODE, $this->handelsproduktkode);

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
        $criteria = new Criteria(GsPreferentieBeleidPeer::DATABASE_NAME);
        $criteria->add(GsPreferentieBeleidPeer::ZINDEX_NUMMER, $this->zindex_nummer);
        $criteria->add(GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR, $this->uzovi_code_zorgverzekeraar);
        $criteria->add(GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS, $this->startdatum_preferentie_status);
        $criteria->add(GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS, $this->einddatum_preferentie_status);

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
        $pks[0] = $this->getZindexNummer();
        $pks[1] = $this->getUzoviCodeZorgverzekeraar();
        $pks[2] = $this->getStartdatumPreferentieStatus();
        $pks[3] = $this->getEinddatumPreferentieStatus();

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
        $this->setZindexNummer($keys[0]);
        $this->setUzoviCodeZorgverzekeraar($keys[1]);
        $this->setStartdatumPreferentieStatus($keys[2]);
        $this->setEinddatumPreferentieStatus($keys[3]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getZindexNummer()) && (null === $this->getUzoviCodeZorgverzekeraar()) && (null === $this->getStartdatumPreferentieStatus()) && (null === $this->getEinddatumPreferentieStatus());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsPreferentieBeleid (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setZindexNummer($this->getZindexNummer());
        $copyObj->setUzoviCodeZorgverzekeraar($this->getUzoviCodeZorgverzekeraar());
        $copyObj->setThesaurusverwijzingPreferentieStatus($this->getThesaurusverwijzingPreferentieStatus());
        $copyObj->setPreferentieStatus($this->getPreferentieStatus());
        $copyObj->setStartdatumPreferentieStatus($this->getStartdatumPreferentieStatus());
        $copyObj->setEinddatumPreferentieStatus($this->getEinddatumPreferentieStatus());
        $copyObj->setPreferentieClusterCode($this->getPreferentieClusterCode());
        $copyObj->setPrkcode($this->getPrkcode());
        $copyObj->setHandelsproduktkode($this->getHandelsproduktkode());

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
     * @return GsPreferentieBeleid Clone of current object.
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
     * @return GsPreferentieBeleidPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsPreferentieBeleidPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsPreferentieBeleid The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPreferentieStatusOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesaurusverwijzingPreferentieStatus(NULL);
        } else {
            $this->setThesaurusverwijzingPreferentieStatus($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setPreferentieStatus(NULL);
        } else {
            $this->setPreferentieStatus($v->getThesaurusItemnummer());
        }

        $this->aPreferentieStatusOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsPreferentieBeleid($this);
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
    public function getPreferentieStatusOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPreferentieStatusOmschrijving === null && ($this->thesaurusverwijzing_preferentie_status !== null && $this->preferentie_status !== null) && $doQuery) {
            $this->aPreferentieStatusOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesaurusverwijzing_preferentie_status, $this->preferentie_status), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPreferentieStatusOmschrijving->addGsPreferentieBeleids($this);
             */
        }

        return $this->aPreferentieStatusOmschrijving;
    }

    /**
     * Declares an association between this object and a GsArtikelen object.
     *
     * @param                  GsArtikelen $v
     * @return GsPreferentieBeleid The current object (for fluent API support)
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
            $v->addGsPreferentieBeleid($this);
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
                $this->aGsArtikelen->addGsPreferentieBeleids($this);
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
        $this->zindex_nummer = null;
        $this->uzovi_code_zorgverzekeraar = null;
        $this->thesaurusverwijzing_preferentie_status = null;
        $this->preferentie_status = null;
        $this->startdatum_preferentie_status = null;
        $this->einddatum_preferentie_status = null;
        $this->preferentie_cluster_code = null;
        $this->prkcode = null;
        $this->handelsproduktkode = null;
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
            if ($this->aPreferentieStatusOmschrijving instanceof Persistent) {
              $this->aPreferentieStatusOmschrijving->clearAllReferences($deep);
            }
            if ($this->aGsArtikelen instanceof Persistent) {
              $this->aGsArtikelen->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aPreferentieStatusOmschrijving = null;
        $this->aGsArtikelen = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsPreferentieBeleidPeer::DEFAULT_STRING_FORMAT);
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
