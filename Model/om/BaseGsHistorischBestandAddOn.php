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
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsHistorischBestandAddOn;
use PharmaIntelligence\GstandaardBundle\Model\GsHistorischBestandAddOnPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsHistorischBestandAddOnQuery;

abstract class BaseGsHistorischBestandAddOn extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHistorischBestandAddOnPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsHistorischBestandAddOnPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the zindex_nummer field.
     * @var        int
     */
    protected $zindex_nummer;

    /**
     * The value for the artikel_omschrijving field.
     * @var        string
     */
    protected $artikel_omschrijving;

    /**
     * The value for the inkoop_hoeveelheid field.
     * @var        string
     */
    protected $inkoop_hoeveelheid;

    /**
     * The value for the inkoop_eenheid field.
     * @var        string
     */
    protected $inkoop_eenheid;

    /**
     * The value for the maximum_prijs field.
     * @var        string
     */
    protected $maximum_prijs;

    /**
     * The value for the soort_product field.
     * @var        int
     */
    protected $soort_product;

    /**
     * The value for the indicatie_id field.
     * @var        int
     */
    protected $indicatie_id;

    /**
     * The value for the soort_indicatie field.
     * @var        int
     */
    protected $soort_indicatie;

    /**
     * The value for the duiding_id field.
     * @var        int
     */
    protected $duiding_id;

    /**
     * The value for the aanspraak_status field.
     * @var        string
     */
    protected $aanspraak_status;

    /**
     * The value for the start_datum field.
     * @var        string
     */
    protected $start_datum;

    /**
     * The value for the eind_datum field.
     * @var        string
     */
    protected $eind_datum;

    /**
     * @var        GsArtikelen
     */
    protected $aGsArtikelen;

    /**
     * @var        GsArtikelEigenschappen
     */
    protected $aGsArtikelEigenschappen;

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
     * Get the [zindex_nummer] column value.
     *
     * @return int
     */
    public function getZindexNummer()
    {

        return $this->zindex_nummer;
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
     * Get the [inkoop_hoeveelheid] column value.
     *
     * @return string
     */
    public function getInkoopHoeveelheid()
    {

        return $this->inkoop_hoeveelheid;
    }

    /**
     * Get the [inkoop_eenheid] column value.
     *
     * @return string
     */
    public function getInkoopEenheid()
    {

        return $this->inkoop_eenheid;
    }

    /**
     * Get the [maximum_prijs] column value.
     *
     * @return string
     */
    public function getMaximumPrijs()
    {

        return $this->maximum_prijs;
    }

    /**
     * Get the [soort_product] column value.
     *
     * @return int
     */
    public function getSoortProduct()
    {

        return $this->soort_product;
    }

    /**
     * Get the [indicatie_id] column value.
     *
     * @return int
     */
    public function getIndicatieId()
    {

        return $this->indicatie_id;
    }

    /**
     * Get the [soort_indicatie] column value.
     *
     * @return int
     */
    public function getSoortIndicatie()
    {

        return $this->soort_indicatie;
    }

    /**
     * Get the [duiding_id] column value.
     *
     * @return int
     */
    public function getDuidingId()
    {

        return $this->duiding_id;
    }

    /**
     * Get the [aanspraak_status] column value.
     *
     * @return string
     */
    public function getAanspraakStatus()
    {

        return $this->aanspraak_status;
    }

    /**
     * Get the [optionally formatted] temporal [start_datum] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getStartDatum($format = null)
    {
        if ($this->start_datum === null) {
            return null;
        }

        if ($this->start_datum === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->start_datum);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->start_datum, true), $x);
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
     * Get the [optionally formatted] temporal [eind_datum] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEindDatum($format = null)
    {
        if ($this->eind_datum === null) {
            return null;
        }

        if ($this->eind_datum === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->eind_datum);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->eind_datum, true), $x);
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
     * Set the value of [zindex_nummer] column.
     *
     * @param  int $v new value
     * @return GsHistorischBestandAddOn The current object (for fluent API support)
     */
    public function setZindexNummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zindex_nummer !== $v) {
            $this->zindex_nummer = $v;
            $this->modifiedColumns[] = GsHistorischBestandAddOnPeer::ZINDEX_NUMMER;
        }

        if ($this->aGsArtikelen !== null && $this->aGsArtikelen->getZinummer() !== $v) {
            $this->aGsArtikelen = null;
        }

        if ($this->aGsArtikelEigenschappen !== null && $this->aGsArtikelEigenschappen->getZindexNummer() !== $v) {
            $this->aGsArtikelEigenschappen = null;
        }


        return $this;
    } // setZindexNummer()

    /**
     * Set the value of [artikel_omschrijving] column.
     *
     * @param  string $v new value
     * @return GsHistorischBestandAddOn The current object (for fluent API support)
     */
    public function setArtikelOmschrijving($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artikel_omschrijving !== $v) {
            $this->artikel_omschrijving = $v;
            $this->modifiedColumns[] = GsHistorischBestandAddOnPeer::ARTIKEL_OMSCHRIJVING;
        }


        return $this;
    } // setArtikelOmschrijving()

    /**
     * Set the value of [inkoop_hoeveelheid] column.
     *
     * @param  string $v new value
     * @return GsHistorischBestandAddOn The current object (for fluent API support)
     */
    public function setInkoopHoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->inkoop_hoeveelheid !== $v) {
            $this->inkoop_hoeveelheid = $v;
            $this->modifiedColumns[] = GsHistorischBestandAddOnPeer::INKOOP_HOEVEELHEID;
        }


        return $this;
    } // setInkoopHoeveelheid()

    /**
     * Set the value of [inkoop_eenheid] column.
     *
     * @param  string $v new value
     * @return GsHistorischBestandAddOn The current object (for fluent API support)
     */
    public function setInkoopEenheid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inkoop_eenheid !== $v) {
            $this->inkoop_eenheid = $v;
            $this->modifiedColumns[] = GsHistorischBestandAddOnPeer::INKOOP_EENHEID;
        }


        return $this;
    } // setInkoopEenheid()

    /**
     * Set the value of [maximum_prijs] column.
     *
     * @param  string $v new value
     * @return GsHistorischBestandAddOn The current object (for fluent API support)
     */
    public function setMaximumPrijs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->maximum_prijs !== $v) {
            $this->maximum_prijs = $v;
            $this->modifiedColumns[] = GsHistorischBestandAddOnPeer::MAXIMUM_PRIJS;
        }


        return $this;
    } // setMaximumPrijs()

    /**
     * Set the value of [soort_product] column.
     *
     * @param  int $v new value
     * @return GsHistorischBestandAddOn The current object (for fluent API support)
     */
    public function setSoortProduct($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->soort_product !== $v) {
            $this->soort_product = $v;
            $this->modifiedColumns[] = GsHistorischBestandAddOnPeer::SOORT_PRODUCT;
        }


        return $this;
    } // setSoortProduct()

    /**
     * Set the value of [indicatie_id] column.
     *
     * @param  int $v new value
     * @return GsHistorischBestandAddOn The current object (for fluent API support)
     */
    public function setIndicatieId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->indicatie_id !== $v) {
            $this->indicatie_id = $v;
            $this->modifiedColumns[] = GsHistorischBestandAddOnPeer::INDICATIE_ID;
        }


        return $this;
    } // setIndicatieId()

    /**
     * Set the value of [soort_indicatie] column.
     *
     * @param  int $v new value
     * @return GsHistorischBestandAddOn The current object (for fluent API support)
     */
    public function setSoortIndicatie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->soort_indicatie !== $v) {
            $this->soort_indicatie = $v;
            $this->modifiedColumns[] = GsHistorischBestandAddOnPeer::SOORT_INDICATIE;
        }


        return $this;
    } // setSoortIndicatie()

    /**
     * Set the value of [duiding_id] column.
     *
     * @param  int $v new value
     * @return GsHistorischBestandAddOn The current object (for fluent API support)
     */
    public function setDuidingId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->duiding_id !== $v) {
            $this->duiding_id = $v;
            $this->modifiedColumns[] = GsHistorischBestandAddOnPeer::DUIDING_ID;
        }


        return $this;
    } // setDuidingId()

    /**
     * Set the value of [aanspraak_status] column.
     *
     * @param  string $v new value
     * @return GsHistorischBestandAddOn The current object (for fluent API support)
     */
    public function setAanspraakStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aanspraak_status !== $v) {
            $this->aanspraak_status = $v;
            $this->modifiedColumns[] = GsHistorischBestandAddOnPeer::AANSPRAAK_STATUS;
        }


        return $this;
    } // setAanspraakStatus()

    /**
     * Sets the value of [start_datum] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsHistorischBestandAddOn The current object (for fluent API support)
     */
    public function setStartDatum($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->start_datum !== null || $dt !== null) {
            $currentDateAsString = ($this->start_datum !== null && $tmpDt = new DateTime($this->start_datum)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->start_datum = $newDateAsString;
                $this->modifiedColumns[] = GsHistorischBestandAddOnPeer::START_DATUM;
            }
        } // if either are not null


        return $this;
    } // setStartDatum()

    /**
     * Sets the value of [eind_datum] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsHistorischBestandAddOn The current object (for fluent API support)
     */
    public function setEindDatum($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->eind_datum !== null || $dt !== null) {
            $currentDateAsString = ($this->eind_datum !== null && $tmpDt = new DateTime($this->eind_datum)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->eind_datum = $newDateAsString;
                $this->modifiedColumns[] = GsHistorischBestandAddOnPeer::EIND_DATUM;
            }
        } // if either are not null


        return $this;
    } // setEindDatum()

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

            $this->zindex_nummer = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->artikel_omschrijving = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->inkoop_hoeveelheid = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->inkoop_eenheid = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->maximum_prijs = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->soort_product = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->indicatie_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->soort_indicatie = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->duiding_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->aanspraak_status = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->start_datum = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->eind_datum = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = GsHistorischBestandAddOnPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsHistorischBestandAddOn object", $e);
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
        if ($this->aGsArtikelEigenschappen !== null && $this->zindex_nummer !== $this->aGsArtikelEigenschappen->getZindexNummer()) {
            $this->aGsArtikelEigenschappen = null;
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
            $con = Propel::getConnection(GsHistorischBestandAddOnPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsHistorischBestandAddOnPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGsArtikelen = null;
            $this->aGsArtikelEigenschappen = null;
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
            $con = Propel::getConnection(GsHistorischBestandAddOnPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsHistorischBestandAddOnQuery::create()
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
            $con = Propel::getConnection(GsHistorischBestandAddOnPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsHistorischBestandAddOnPeer::addInstanceToPool($this);
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

            if ($this->aGsArtikelEigenschappen !== null) {
                if ($this->aGsArtikelEigenschappen->isModified() || $this->aGsArtikelEigenschappen->isNew()) {
                    $affectedRows += $this->aGsArtikelEigenschappen->save($con);
                }
                $this->setGsArtikelEigenschappen($this->aGsArtikelEigenschappen);
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
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`zindex_nummer`';
        }
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::ARTIKEL_OMSCHRIJVING)) {
            $modifiedColumns[':p' . $index++]  = '`artikel_omschrijving`';
        }
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::INKOOP_HOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`inkoop_hoeveelheid`';
        }
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::INKOOP_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`inkoop_eenheid`';
        }
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::MAXIMUM_PRIJS)) {
            $modifiedColumns[':p' . $index++]  = '`maximum_prijs`';
        }
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::SOORT_PRODUCT)) {
            $modifiedColumns[':p' . $index++]  = '`soort_product`';
        }
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::INDICATIE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`indicatie_id`';
        }
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::SOORT_INDICATIE)) {
            $modifiedColumns[':p' . $index++]  = '`soort_indicatie`';
        }
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::DUIDING_ID)) {
            $modifiedColumns[':p' . $index++]  = '`duiding_id`';
        }
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::AANSPRAAK_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`aanspraak_status`';
        }
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::START_DATUM)) {
            $modifiedColumns[':p' . $index++]  = '`start_datum`';
        }
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::EIND_DATUM)) {
            $modifiedColumns[':p' . $index++]  = '`eind_datum`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_historisch_bestand_add_on` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`zindex_nummer`':
                        $stmt->bindValue($identifier, $this->zindex_nummer, PDO::PARAM_INT);
                        break;
                    case '`artikel_omschrijving`':
                        $stmt->bindValue($identifier, $this->artikel_omschrijving, PDO::PARAM_STR);
                        break;
                    case '`inkoop_hoeveelheid`':
                        $stmt->bindValue($identifier, $this->inkoop_hoeveelheid, PDO::PARAM_STR);
                        break;
                    case '`inkoop_eenheid`':
                        $stmt->bindValue($identifier, $this->inkoop_eenheid, PDO::PARAM_STR);
                        break;
                    case '`maximum_prijs`':
                        $stmt->bindValue($identifier, $this->maximum_prijs, PDO::PARAM_STR);
                        break;
                    case '`soort_product`':
                        $stmt->bindValue($identifier, $this->soort_product, PDO::PARAM_INT);
                        break;
                    case '`indicatie_id`':
                        $stmt->bindValue($identifier, $this->indicatie_id, PDO::PARAM_INT);
                        break;
                    case '`soort_indicatie`':
                        $stmt->bindValue($identifier, $this->soort_indicatie, PDO::PARAM_INT);
                        break;
                    case '`duiding_id`':
                        $stmt->bindValue($identifier, $this->duiding_id, PDO::PARAM_INT);
                        break;
                    case '`aanspraak_status`':
                        $stmt->bindValue($identifier, $this->aanspraak_status, PDO::PARAM_STR);
                        break;
                    case '`start_datum`':
                        $stmt->bindValue($identifier, $this->start_datum, PDO::PARAM_STR);
                        break;
                    case '`eind_datum`':
                        $stmt->bindValue($identifier, $this->eind_datum, PDO::PARAM_STR);
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

            if ($this->aGsArtikelEigenschappen !== null) {
                if (!$this->aGsArtikelEigenschappen->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsArtikelEigenschappen->getValidationFailures());
                }
            }


            if (($retval = GsHistorischBestandAddOnPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsHistorischBestandAddOnPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getZindexNummer();
                break;
            case 1:
                return $this->getArtikelOmschrijving();
                break;
            case 2:
                return $this->getInkoopHoeveelheid();
                break;
            case 3:
                return $this->getInkoopEenheid();
                break;
            case 4:
                return $this->getMaximumPrijs();
                break;
            case 5:
                return $this->getSoortProduct();
                break;
            case 6:
                return $this->getIndicatieId();
                break;
            case 7:
                return $this->getSoortIndicatie();
                break;
            case 8:
                return $this->getDuidingId();
                break;
            case 9:
                return $this->getAanspraakStatus();
                break;
            case 10:
                return $this->getStartDatum();
                break;
            case 11:
                return $this->getEindDatum();
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
        if (isset($alreadyDumpedObjects['GsHistorischBestandAddOn'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsHistorischBestandAddOn'][serialize($this->getPrimaryKey())] = true;
        $keys = GsHistorischBestandAddOnPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getZindexNummer(),
            $keys[1] => $this->getArtikelOmschrijving(),
            $keys[2] => $this->getInkoopHoeveelheid(),
            $keys[3] => $this->getInkoopEenheid(),
            $keys[4] => $this->getMaximumPrijs(),
            $keys[5] => $this->getSoortProduct(),
            $keys[6] => $this->getIndicatieId(),
            $keys[7] => $this->getSoortIndicatie(),
            $keys[8] => $this->getDuidingId(),
            $keys[9] => $this->getAanspraakStatus(),
            $keys[10] => $this->getStartDatum(),
            $keys[11] => $this->getEindDatum(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aGsArtikelen) {
                $result['GsArtikelen'] = $this->aGsArtikelen->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aGsArtikelEigenschappen) {
                $result['GsArtikelEigenschappen'] = $this->aGsArtikelEigenschappen->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = GsHistorischBestandAddOnPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setZindexNummer($value);
                break;
            case 1:
                $this->setArtikelOmschrijving($value);
                break;
            case 2:
                $this->setInkoopHoeveelheid($value);
                break;
            case 3:
                $this->setInkoopEenheid($value);
                break;
            case 4:
                $this->setMaximumPrijs($value);
                break;
            case 5:
                $this->setSoortProduct($value);
                break;
            case 6:
                $this->setIndicatieId($value);
                break;
            case 7:
                $this->setSoortIndicatie($value);
                break;
            case 8:
                $this->setDuidingId($value);
                break;
            case 9:
                $this->setAanspraakStatus($value);
                break;
            case 10:
                $this->setStartDatum($value);
                break;
            case 11:
                $this->setEindDatum($value);
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
        $keys = GsHistorischBestandAddOnPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setZindexNummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setArtikelOmschrijving($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setInkoopHoeveelheid($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setInkoopEenheid($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMaximumPrijs($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSoortProduct($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIndicatieId($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSoortIndicatie($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDuidingId($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAanspraakStatus($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setStartDatum($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEindDatum($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsHistorischBestandAddOnPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER)) $criteria->add(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, $this->zindex_nummer);
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::ARTIKEL_OMSCHRIJVING)) $criteria->add(GsHistorischBestandAddOnPeer::ARTIKEL_OMSCHRIJVING, $this->artikel_omschrijving);
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::INKOOP_HOEVEELHEID)) $criteria->add(GsHistorischBestandAddOnPeer::INKOOP_HOEVEELHEID, $this->inkoop_hoeveelheid);
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::INKOOP_EENHEID)) $criteria->add(GsHistorischBestandAddOnPeer::INKOOP_EENHEID, $this->inkoop_eenheid);
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::MAXIMUM_PRIJS)) $criteria->add(GsHistorischBestandAddOnPeer::MAXIMUM_PRIJS, $this->maximum_prijs);
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::SOORT_PRODUCT)) $criteria->add(GsHistorischBestandAddOnPeer::SOORT_PRODUCT, $this->soort_product);
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::INDICATIE_ID)) $criteria->add(GsHistorischBestandAddOnPeer::INDICATIE_ID, $this->indicatie_id);
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::SOORT_INDICATIE)) $criteria->add(GsHistorischBestandAddOnPeer::SOORT_INDICATIE, $this->soort_indicatie);
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::DUIDING_ID)) $criteria->add(GsHistorischBestandAddOnPeer::DUIDING_ID, $this->duiding_id);
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::AANSPRAAK_STATUS)) $criteria->add(GsHistorischBestandAddOnPeer::AANSPRAAK_STATUS, $this->aanspraak_status);
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::START_DATUM)) $criteria->add(GsHistorischBestandAddOnPeer::START_DATUM, $this->start_datum);
        if ($this->isColumnModified(GsHistorischBestandAddOnPeer::EIND_DATUM)) $criteria->add(GsHistorischBestandAddOnPeer::EIND_DATUM, $this->eind_datum);

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
        $criteria = new Criteria(GsHistorischBestandAddOnPeer::DATABASE_NAME);
        $criteria->add(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, $this->zindex_nummer);
        $criteria->add(GsHistorischBestandAddOnPeer::INDICATIE_ID, $this->indicatie_id);
        $criteria->add(GsHistorischBestandAddOnPeer::START_DATUM, $this->start_datum);

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
        $pks[1] = $this->getIndicatieId();
        $pks[2] = $this->getStartDatum();

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
        $this->setIndicatieId($keys[1]);
        $this->setStartDatum($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getZindexNummer()) && (null === $this->getIndicatieId()) && (null === $this->getStartDatum());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsHistorischBestandAddOn (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setZindexNummer($this->getZindexNummer());
        $copyObj->setArtikelOmschrijving($this->getArtikelOmschrijving());
        $copyObj->setInkoopHoeveelheid($this->getInkoopHoeveelheid());
        $copyObj->setInkoopEenheid($this->getInkoopEenheid());
        $copyObj->setMaximumPrijs($this->getMaximumPrijs());
        $copyObj->setSoortProduct($this->getSoortProduct());
        $copyObj->setIndicatieId($this->getIndicatieId());
        $copyObj->setSoortIndicatie($this->getSoortIndicatie());
        $copyObj->setDuidingId($this->getDuidingId());
        $copyObj->setAanspraakStatus($this->getAanspraakStatus());
        $copyObj->setStartDatum($this->getStartDatum());
        $copyObj->setEindDatum($this->getEindDatum());

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
     * @return GsHistorischBestandAddOn Clone of current object.
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
     * @return GsHistorischBestandAddOnPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsHistorischBestandAddOnPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsArtikelen object.
     *
     * @param                  GsArtikelen $v
     * @return GsHistorischBestandAddOn The current object (for fluent API support)
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
            $v->addGsHistorischBestandAddOn($this);
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
                $this->aGsArtikelen->addGsHistorischBestandAddOns($this);
             */
        }

        return $this->aGsArtikelen;
    }

    /**
     * Declares an association between this object and a GsArtikelEigenschappen object.
     *
     * @param                  GsArtikelEigenschappen $v
     * @return GsHistorischBestandAddOn The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsArtikelEigenschappen(GsArtikelEigenschappen $v = null)
    {
        if ($v === null) {
            $this->setZindexNummer(NULL);
        } else {
            $this->setZindexNummer($v->getZindexNummer());
        }

        $this->aGsArtikelEigenschappen = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsArtikelEigenschappen object, it will not be re-added.
        if ($v !== null) {
            $v->addGsHistorischBestandAddOn($this);
        }


        return $this;
    }


    /**
     * Get the associated GsArtikelEigenschappen object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsArtikelEigenschappen The associated GsArtikelEigenschappen object.
     * @throws PropelException
     */
    public function getGsArtikelEigenschappen(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsArtikelEigenschappen === null && ($this->zindex_nummer !== null) && $doQuery) {
            $this->aGsArtikelEigenschappen = GsArtikelEigenschappenQuery::create()->findPk($this->zindex_nummer, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsArtikelEigenschappen->addGsHistorischBestandAddOns($this);
             */
        }

        return $this->aGsArtikelEigenschappen;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->zindex_nummer = null;
        $this->artikel_omschrijving = null;
        $this->inkoop_hoeveelheid = null;
        $this->inkoop_eenheid = null;
        $this->maximum_prijs = null;
        $this->soort_product = null;
        $this->indicatie_id = null;
        $this->soort_indicatie = null;
        $this->duiding_id = null;
        $this->aanspraak_status = null;
        $this->start_datum = null;
        $this->eind_datum = null;
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
            if ($this->aGsArtikelEigenschappen instanceof Persistent) {
              $this->aGsArtikelEigenschappen->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aGsArtikelen = null;
        $this->aGsArtikelEigenschappen = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsHistorischBestandAddOnPeer::DEFAULT_STRING_FORMAT);
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
