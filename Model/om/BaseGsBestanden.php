<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BaseObject;
use \BasePeer;
use \Criteria;
use \Exception;
use \PDO;
use \Persistent;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsBestanden;
use PharmaIntelligence\GstandaardBundle\Model\GsBestandenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsBestandenQuery;

abstract class BaseGsBestanden extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsBestandenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsBestandenPeer
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
     * The value for the naam_van_het_bestand field.
     * @var        string
     */
    protected $naam_van_het_bestand;

    /**
     * The value for the bestandomschrijving field.
     * @var        string
     */
    protected $bestandomschrijving;

    /**
     * The value for the bestandscode field.
     * @var        int
     */
    protected $bestandscode;

    /**
     * The value for the recordlengte field.
     * @var        int
     */
    protected $recordlengte;

    /**
     * The value for the ingangsdatum field.
     * @var        int
     */
    protected $ingangsdatum;

    /**
     * The value for the eindedatum_uitlevering field.
     * @var        int
     */
    protected $eindedatum_uitlevering;

    /**
     * The value for the uitgavedatum field.
     * @var        int
     */
    protected $uitgavedatum;

    /**
     * The value for the status field.
     * @var        string
     */
    protected $status;

    /**
     * The value for the aantal_ongewijzigde_records field.
     * @var        int
     */
    protected $aantal_ongewijzigde_records;

    /**
     * The value for the aantal_vervallen_records field.
     * @var        int
     */
    protected $aantal_vervallen_records;

    /**
     * The value for the aantal_gewijzigde_records field.
     * @var        int
     */
    protected $aantal_gewijzigde_records;

    /**
     * The value for the aantal_nieuwe_records field.
     * @var        int
     */
    protected $aantal_nieuwe_records;

    /**
     * The value for the totaal_aantal_records field.
     * @var        int
     */
    protected $totaal_aantal_records;

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
     * Get the [naam_van_het_bestand] column value.
     *
     * @return string
     */
    public function getNaamVanHetBestand()
    {

        return $this->naam_van_het_bestand;
    }

    /**
     * Get the [bestandomschrijving] column value.
     *
     * @return string
     */
    public function getBestandomschrijving()
    {

        return $this->bestandomschrijving;
    }

    /**
     * Get the [bestandscode] column value.
     *
     * @return int
     */
    public function getBestandscode()
    {

        return $this->bestandscode;
    }

    /**
     * Get the [recordlengte] column value.
     *
     * @return int
     */
    public function getRecordlengte()
    {

        return $this->recordlengte;
    }

    /**
     * Get the [ingangsdatum] column value.
     *
     * @return int
     */
    public function getIngangsdatum()
    {

        return $this->ingangsdatum;
    }

    /**
     * Get the [eindedatum_uitlevering] column value.
     *
     * @return int
     */
    public function getEindedatumUitlevering()
    {

        return $this->eindedatum_uitlevering;
    }

    /**
     * Get the [uitgavedatum] column value.
     *
     * @return int
     */
    public function getUitgavedatum()
    {

        return $this->uitgavedatum;
    }

    /**
     * Get the [status] column value.
     *
     * @return string
     */
    public function getStatus()
    {

        return $this->status;
    }

    /**
     * Get the [aantal_ongewijzigde_records] column value.
     *
     * @return int
     */
    public function getAantalOngewijzigdeRecords()
    {

        return $this->aantal_ongewijzigde_records;
    }

    /**
     * Get the [aantal_vervallen_records] column value.
     *
     * @return int
     */
    public function getAantalVervallenRecords()
    {

        return $this->aantal_vervallen_records;
    }

    /**
     * Get the [aantal_gewijzigde_records] column value.
     *
     * @return int
     */
    public function getAantalGewijzigdeRecords()
    {

        return $this->aantal_gewijzigde_records;
    }

    /**
     * Get the [aantal_nieuwe_records] column value.
     *
     * @return int
     */
    public function getAantalNieuweRecords()
    {

        return $this->aantal_nieuwe_records;
    }

    /**
     * Get the [totaal_aantal_records] column value.
     *
     * @return int
     */
    public function getTotaalAantalRecords()
    {

        return $this->totaal_aantal_records;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsBestanden The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsBestandenPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsBestanden The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsBestandenPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [naam_van_het_bestand] column.
     *
     * @param  string $v new value
     * @return GsBestanden The current object (for fluent API support)
     */
    public function setNaamVanHetBestand($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->naam_van_het_bestand !== $v) {
            $this->naam_van_het_bestand = $v;
            $this->modifiedColumns[] = GsBestandenPeer::NAAM_VAN_HET_BESTAND;
        }


        return $this;
    } // setNaamVanHetBestand()

    /**
     * Set the value of [bestandomschrijving] column.
     *
     * @param  string $v new value
     * @return GsBestanden The current object (for fluent API support)
     */
    public function setBestandomschrijving($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bestandomschrijving !== $v) {
            $this->bestandomschrijving = $v;
            $this->modifiedColumns[] = GsBestandenPeer::BESTANDOMSCHRIJVING;
        }


        return $this;
    } // setBestandomschrijving()

    /**
     * Set the value of [bestandscode] column.
     *
     * @param  int $v new value
     * @return GsBestanden The current object (for fluent API support)
     */
    public function setBestandscode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandscode !== $v) {
            $this->bestandscode = $v;
            $this->modifiedColumns[] = GsBestandenPeer::BESTANDSCODE;
        }


        return $this;
    } // setBestandscode()

    /**
     * Set the value of [recordlengte] column.
     *
     * @param  int $v new value
     * @return GsBestanden The current object (for fluent API support)
     */
    public function setRecordlengte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->recordlengte !== $v) {
            $this->recordlengte = $v;
            $this->modifiedColumns[] = GsBestandenPeer::RECORDLENGTE;
        }


        return $this;
    } // setRecordlengte()

    /**
     * Set the value of [ingangsdatum] column.
     *
     * @param  int $v new value
     * @return GsBestanden The current object (for fluent API support)
     */
    public function setIngangsdatum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ingangsdatum !== $v) {
            $this->ingangsdatum = $v;
            $this->modifiedColumns[] = GsBestandenPeer::INGANGSDATUM;
        }


        return $this;
    } // setIngangsdatum()

    /**
     * Set the value of [eindedatum_uitlevering] column.
     *
     * @param  int $v new value
     * @return GsBestanden The current object (for fluent API support)
     */
    public function setEindedatumUitlevering($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eindedatum_uitlevering !== $v) {
            $this->eindedatum_uitlevering = $v;
            $this->modifiedColumns[] = GsBestandenPeer::EINDEDATUM_UITLEVERING;
        }


        return $this;
    } // setEindedatumUitlevering()

    /**
     * Set the value of [uitgavedatum] column.
     *
     * @param  int $v new value
     * @return GsBestanden The current object (for fluent API support)
     */
    public function setUitgavedatum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->uitgavedatum !== $v) {
            $this->uitgavedatum = $v;
            $this->modifiedColumns[] = GsBestandenPeer::UITGAVEDATUM;
        }


        return $this;
    } // setUitgavedatum()

    /**
     * Set the value of [status] column.
     *
     * @param  string $v new value
     * @return GsBestanden The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[] = GsBestandenPeer::STATUS;
        }


        return $this;
    } // setStatus()

    /**
     * Set the value of [aantal_ongewijzigde_records] column.
     *
     * @param  int $v new value
     * @return GsBestanden The current object (for fluent API support)
     */
    public function setAantalOngewijzigdeRecords($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aantal_ongewijzigde_records !== $v) {
            $this->aantal_ongewijzigde_records = $v;
            $this->modifiedColumns[] = GsBestandenPeer::AANTAL_ONGEWIJZIGDE_RECORDS;
        }


        return $this;
    } // setAantalOngewijzigdeRecords()

    /**
     * Set the value of [aantal_vervallen_records] column.
     *
     * @param  int $v new value
     * @return GsBestanden The current object (for fluent API support)
     */
    public function setAantalVervallenRecords($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aantal_vervallen_records !== $v) {
            $this->aantal_vervallen_records = $v;
            $this->modifiedColumns[] = GsBestandenPeer::AANTAL_VERVALLEN_RECORDS;
        }


        return $this;
    } // setAantalVervallenRecords()

    /**
     * Set the value of [aantal_gewijzigde_records] column.
     *
     * @param  int $v new value
     * @return GsBestanden The current object (for fluent API support)
     */
    public function setAantalGewijzigdeRecords($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aantal_gewijzigde_records !== $v) {
            $this->aantal_gewijzigde_records = $v;
            $this->modifiedColumns[] = GsBestandenPeer::AANTAL_GEWIJZIGDE_RECORDS;
        }


        return $this;
    } // setAantalGewijzigdeRecords()

    /**
     * Set the value of [aantal_nieuwe_records] column.
     *
     * @param  int $v new value
     * @return GsBestanden The current object (for fluent API support)
     */
    public function setAantalNieuweRecords($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aantal_nieuwe_records !== $v) {
            $this->aantal_nieuwe_records = $v;
            $this->modifiedColumns[] = GsBestandenPeer::AANTAL_NIEUWE_RECORDS;
        }


        return $this;
    } // setAantalNieuweRecords()

    /**
     * Set the value of [totaal_aantal_records] column.
     *
     * @param  int $v new value
     * @return GsBestanden The current object (for fluent API support)
     */
    public function setTotaalAantalRecords($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->totaal_aantal_records !== $v) {
            $this->totaal_aantal_records = $v;
            $this->modifiedColumns[] = GsBestandenPeer::TOTAAL_AANTAL_RECORDS;
        }


        return $this;
    } // setTotaalAantalRecords()

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
            $this->naam_van_het_bestand = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->bestandomschrijving = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->bestandscode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->recordlengte = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->ingangsdatum = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->eindedatum_uitlevering = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->uitgavedatum = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->status = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->aantal_ongewijzigde_records = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->aantal_vervallen_records = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->aantal_gewijzigde_records = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->aantal_nieuwe_records = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->totaal_aantal_records = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = GsBestandenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsBestanden object", $e);
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
            $con = Propel::getConnection(GsBestandenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsBestandenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsBestandenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsBestandenQuery::create()
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
            $con = Propel::getConnection(GsBestandenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsBestandenPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsBestandenPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsBestandenPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsBestandenPeer::NAAM_VAN_HET_BESTAND)) {
            $modifiedColumns[':p' . $index++]  = '`naam_van_het_bestand`';
        }
        if ($this->isColumnModified(GsBestandenPeer::BESTANDOMSCHRIJVING)) {
            $modifiedColumns[':p' . $index++]  = '`bestandomschrijving`';
        }
        if ($this->isColumnModified(GsBestandenPeer::BESTANDSCODE)) {
            $modifiedColumns[':p' . $index++]  = '`bestandscode`';
        }
        if ($this->isColumnModified(GsBestandenPeer::RECORDLENGTE)) {
            $modifiedColumns[':p' . $index++]  = '`recordlengte`';
        }
        if ($this->isColumnModified(GsBestandenPeer::INGANGSDATUM)) {
            $modifiedColumns[':p' . $index++]  = '`ingangsdatum`';
        }
        if ($this->isColumnModified(GsBestandenPeer::EINDEDATUM_UITLEVERING)) {
            $modifiedColumns[':p' . $index++]  = '`eindedatum_uitlevering`';
        }
        if ($this->isColumnModified(GsBestandenPeer::UITGAVEDATUM)) {
            $modifiedColumns[':p' . $index++]  = '`uitgavedatum`';
        }
        if ($this->isColumnModified(GsBestandenPeer::STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`status`';
        }
        if ($this->isColumnModified(GsBestandenPeer::AANTAL_ONGEWIJZIGDE_RECORDS)) {
            $modifiedColumns[':p' . $index++]  = '`aantal_ongewijzigde_records`';
        }
        if ($this->isColumnModified(GsBestandenPeer::AANTAL_VERVALLEN_RECORDS)) {
            $modifiedColumns[':p' . $index++]  = '`aantal_vervallen_records`';
        }
        if ($this->isColumnModified(GsBestandenPeer::AANTAL_GEWIJZIGDE_RECORDS)) {
            $modifiedColumns[':p' . $index++]  = '`aantal_gewijzigde_records`';
        }
        if ($this->isColumnModified(GsBestandenPeer::AANTAL_NIEUWE_RECORDS)) {
            $modifiedColumns[':p' . $index++]  = '`aantal_nieuwe_records`';
        }
        if ($this->isColumnModified(GsBestandenPeer::TOTAAL_AANTAL_RECORDS)) {
            $modifiedColumns[':p' . $index++]  = '`totaal_aantal_records`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_bestanden` (%s) VALUES (%s)',
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
                    case '`naam_van_het_bestand`':
                        $stmt->bindValue($identifier, $this->naam_van_het_bestand, PDO::PARAM_STR);
                        break;
                    case '`bestandomschrijving`':
                        $stmt->bindValue($identifier, $this->bestandomschrijving, PDO::PARAM_STR);
                        break;
                    case '`bestandscode`':
                        $stmt->bindValue($identifier, $this->bestandscode, PDO::PARAM_INT);
                        break;
                    case '`recordlengte`':
                        $stmt->bindValue($identifier, $this->recordlengte, PDO::PARAM_INT);
                        break;
                    case '`ingangsdatum`':
                        $stmt->bindValue($identifier, $this->ingangsdatum, PDO::PARAM_INT);
                        break;
                    case '`eindedatum_uitlevering`':
                        $stmt->bindValue($identifier, $this->eindedatum_uitlevering, PDO::PARAM_INT);
                        break;
                    case '`uitgavedatum`':
                        $stmt->bindValue($identifier, $this->uitgavedatum, PDO::PARAM_INT);
                        break;
                    case '`status`':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case '`aantal_ongewijzigde_records`':
                        $stmt->bindValue($identifier, $this->aantal_ongewijzigde_records, PDO::PARAM_INT);
                        break;
                    case '`aantal_vervallen_records`':
                        $stmt->bindValue($identifier, $this->aantal_vervallen_records, PDO::PARAM_INT);
                        break;
                    case '`aantal_gewijzigde_records`':
                        $stmt->bindValue($identifier, $this->aantal_gewijzigde_records, PDO::PARAM_INT);
                        break;
                    case '`aantal_nieuwe_records`':
                        $stmt->bindValue($identifier, $this->aantal_nieuwe_records, PDO::PARAM_INT);
                        break;
                    case '`totaal_aantal_records`':
                        $stmt->bindValue($identifier, $this->totaal_aantal_records, PDO::PARAM_INT);
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


            if (($retval = GsBestandenPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsBestandenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getNaamVanHetBestand();
                break;
            case 3:
                return $this->getBestandomschrijving();
                break;
            case 4:
                return $this->getBestandscode();
                break;
            case 5:
                return $this->getRecordlengte();
                break;
            case 6:
                return $this->getIngangsdatum();
                break;
            case 7:
                return $this->getEindedatumUitlevering();
                break;
            case 8:
                return $this->getUitgavedatum();
                break;
            case 9:
                return $this->getStatus();
                break;
            case 10:
                return $this->getAantalOngewijzigdeRecords();
                break;
            case 11:
                return $this->getAantalVervallenRecords();
                break;
            case 12:
                return $this->getAantalGewijzigdeRecords();
                break;
            case 13:
                return $this->getAantalNieuweRecords();
                break;
            case 14:
                return $this->getTotaalAantalRecords();
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
        if (isset($alreadyDumpedObjects['GsBestanden'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsBestanden'][$this->getPrimaryKey()] = true;
        $keys = GsBestandenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getNaamVanHetBestand(),
            $keys[3] => $this->getBestandomschrijving(),
            $keys[4] => $this->getBestandscode(),
            $keys[5] => $this->getRecordlengte(),
            $keys[6] => $this->getIngangsdatum(),
            $keys[7] => $this->getEindedatumUitlevering(),
            $keys[8] => $this->getUitgavedatum(),
            $keys[9] => $this->getStatus(),
            $keys[10] => $this->getAantalOngewijzigdeRecords(),
            $keys[11] => $this->getAantalVervallenRecords(),
            $keys[12] => $this->getAantalGewijzigdeRecords(),
            $keys[13] => $this->getAantalNieuweRecords(),
            $keys[14] => $this->getTotaalAantalRecords(),
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
        $pos = GsBestandenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setNaamVanHetBestand($value);
                break;
            case 3:
                $this->setBestandomschrijving($value);
                break;
            case 4:
                $this->setBestandscode($value);
                break;
            case 5:
                $this->setRecordlengte($value);
                break;
            case 6:
                $this->setIngangsdatum($value);
                break;
            case 7:
                $this->setEindedatumUitlevering($value);
                break;
            case 8:
                $this->setUitgavedatum($value);
                break;
            case 9:
                $this->setStatus($value);
                break;
            case 10:
                $this->setAantalOngewijzigdeRecords($value);
                break;
            case 11:
                $this->setAantalVervallenRecords($value);
                break;
            case 12:
                $this->setAantalGewijzigdeRecords($value);
                break;
            case 13:
                $this->setAantalNieuweRecords($value);
                break;
            case 14:
                $this->setTotaalAantalRecords($value);
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
        $keys = GsBestandenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNaamVanHetBestand($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setBestandomschrijving($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setBestandscode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRecordlengte($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIngangsdatum($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEindedatumUitlevering($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setUitgavedatum($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setStatus($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAantalOngewijzigdeRecords($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAantalVervallenRecords($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAantalGewijzigdeRecords($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAantalNieuweRecords($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setTotaalAantalRecords($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsBestandenPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsBestandenPeer::BESTANDNUMMER)) $criteria->add(GsBestandenPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsBestandenPeer::MUTATIEKODE)) $criteria->add(GsBestandenPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsBestandenPeer::NAAM_VAN_HET_BESTAND)) $criteria->add(GsBestandenPeer::NAAM_VAN_HET_BESTAND, $this->naam_van_het_bestand);
        if ($this->isColumnModified(GsBestandenPeer::BESTANDOMSCHRIJVING)) $criteria->add(GsBestandenPeer::BESTANDOMSCHRIJVING, $this->bestandomschrijving);
        if ($this->isColumnModified(GsBestandenPeer::BESTANDSCODE)) $criteria->add(GsBestandenPeer::BESTANDSCODE, $this->bestandscode);
        if ($this->isColumnModified(GsBestandenPeer::RECORDLENGTE)) $criteria->add(GsBestandenPeer::RECORDLENGTE, $this->recordlengte);
        if ($this->isColumnModified(GsBestandenPeer::INGANGSDATUM)) $criteria->add(GsBestandenPeer::INGANGSDATUM, $this->ingangsdatum);
        if ($this->isColumnModified(GsBestandenPeer::EINDEDATUM_UITLEVERING)) $criteria->add(GsBestandenPeer::EINDEDATUM_UITLEVERING, $this->eindedatum_uitlevering);
        if ($this->isColumnModified(GsBestandenPeer::UITGAVEDATUM)) $criteria->add(GsBestandenPeer::UITGAVEDATUM, $this->uitgavedatum);
        if ($this->isColumnModified(GsBestandenPeer::STATUS)) $criteria->add(GsBestandenPeer::STATUS, $this->status);
        if ($this->isColumnModified(GsBestandenPeer::AANTAL_ONGEWIJZIGDE_RECORDS)) $criteria->add(GsBestandenPeer::AANTAL_ONGEWIJZIGDE_RECORDS, $this->aantal_ongewijzigde_records);
        if ($this->isColumnModified(GsBestandenPeer::AANTAL_VERVALLEN_RECORDS)) $criteria->add(GsBestandenPeer::AANTAL_VERVALLEN_RECORDS, $this->aantal_vervallen_records);
        if ($this->isColumnModified(GsBestandenPeer::AANTAL_GEWIJZIGDE_RECORDS)) $criteria->add(GsBestandenPeer::AANTAL_GEWIJZIGDE_RECORDS, $this->aantal_gewijzigde_records);
        if ($this->isColumnModified(GsBestandenPeer::AANTAL_NIEUWE_RECORDS)) $criteria->add(GsBestandenPeer::AANTAL_NIEUWE_RECORDS, $this->aantal_nieuwe_records);
        if ($this->isColumnModified(GsBestandenPeer::TOTAAL_AANTAL_RECORDS)) $criteria->add(GsBestandenPeer::TOTAAL_AANTAL_RECORDS, $this->totaal_aantal_records);

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
        $criteria = new Criteria(GsBestandenPeer::DATABASE_NAME);
        $criteria->add(GsBestandenPeer::NAAM_VAN_HET_BESTAND, $this->naam_van_het_bestand);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getNaamVanHetBestand();
    }

    /**
     * Generic method to set the primary key (naam_van_het_bestand column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setNaamVanHetBestand($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getNaamVanHetBestand();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsBestanden (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setBestandomschrijving($this->getBestandomschrijving());
        $copyObj->setBestandscode($this->getBestandscode());
        $copyObj->setRecordlengte($this->getRecordlengte());
        $copyObj->setIngangsdatum($this->getIngangsdatum());
        $copyObj->setEindedatumUitlevering($this->getEindedatumUitlevering());
        $copyObj->setUitgavedatum($this->getUitgavedatum());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setAantalOngewijzigdeRecords($this->getAantalOngewijzigdeRecords());
        $copyObj->setAantalVervallenRecords($this->getAantalVervallenRecords());
        $copyObj->setAantalGewijzigdeRecords($this->getAantalGewijzigdeRecords());
        $copyObj->setAantalNieuweRecords($this->getAantalNieuweRecords());
        $copyObj->setTotaalAantalRecords($this->getTotaalAantalRecords());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setNaamVanHetBestand(NULL); // this is a auto-increment column, so set to default value
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
     * @return GsBestanden Clone of current object.
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
     * @return GsBestandenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsBestandenPeer();
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
        $this->naam_van_het_bestand = null;
        $this->bestandomschrijving = null;
        $this->bestandscode = null;
        $this->recordlengte = null;
        $this->ingangsdatum = null;
        $this->eindedatum_uitlevering = null;
        $this->uitgavedatum = null;
        $this->status = null;
        $this->aantal_ongewijzigde_records = null;
        $this->aantal_vervallen_records = null;
        $this->aantal_gewijzigde_records = null;
        $this->aantal_nieuwe_records = null;
        $this->totaal_aantal_records = null;
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
        return (string) $this->exportTo(GsBestandenPeer::DEFAULT_STRING_FORMAT);
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
