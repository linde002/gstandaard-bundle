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
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodes;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcdddgegevens;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcdddgegevensPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcdddgegevensQuery;

abstract class BaseGsAtcdddgegevens extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAtcdddgegevensPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsAtcdddgegevensPeer
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
     * The value for the atccode field.
     * @var        string
     */
    protected $atccode;

    /**
     * The value for the atcvolgnummer field.
     * @var        int
     */
    protected $atcvolgnummer;

    /**
     * The value for the atcnederlandse_omschrijving field.
     * @var        string
     */
    protected $atcnederlandse_omschrijving;

    /**
     * The value for the atcindicator field.
     * @var        string
     */
    protected $atcindicator;

    /**
     * The value for the selectiekode_voor_dubbelmedicatie field.
     * @var        string
     */
    protected $selectiekode_voor_dubbelmedicatie;

    /**
     * The value for the aantal_dddclusters field.
     * @var        int
     */
    protected $aantal_dddclusters;

    /**
     * The value for the dddaantal field.
     * @var        string
     */
    protected $dddaantal;

    /**
     * The value for the dddeenheid field.
     * @var        string
     */
    protected $dddeenheid;

    /**
     * The value for the dddtoedieningsweg_kode field.
     * @var        int
     */
    protected $dddtoedieningsweg_kode;

    /**
     * The value for the dddindicator field.
     * @var        string
     */
    protected $dddindicator;

    /**
     * The value for the dddstatusaanduiding field.
     * @var        int
     */
    protected $dddstatusaanduiding;

    /**
     * @var        GsAtcCodes
     */
    protected $aGsAtcCodes;

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
     * Get the [atccode] column value.
     *
     * @return string
     */
    public function getAtccode()
    {

        return $this->atccode;
    }

    /**
     * Get the [atcvolgnummer] column value.
     *
     * @return int
     */
    public function getAtcvolgnummer()
    {

        return $this->atcvolgnummer;
    }

    /**
     * Get the [atcnederlandse_omschrijving] column value.
     *
     * @return string
     */
    public function getAtcnederlandseOmschrijving()
    {

        return $this->atcnederlandse_omschrijving;
    }

    /**
     * Get the [atcindicator] column value.
     *
     * @return string
     */
    public function getAtcindicator()
    {

        return $this->atcindicator;
    }

    /**
     * Get the [selectiekode_voor_dubbelmedicatie] column value.
     *
     * @return string
     */
    public function getSelectiekodeVoorDubbelmedicatie()
    {

        return $this->selectiekode_voor_dubbelmedicatie;
    }

    /**
     * Get the [aantal_dddclusters] column value.
     *
     * @return int
     */
    public function getAantalDddclusters()
    {

        return $this->aantal_dddclusters;
    }

    /**
     * Get the [dddaantal] column value.
     *
     * @return string
     */
    public function getDddaantal()
    {

        return $this->dddaantal;
    }

    /**
     * Get the [dddeenheid] column value.
     *
     * @return string
     */
    public function getDddeenheid()
    {

        return $this->dddeenheid;
    }

    /**
     * Get the [dddtoedieningsweg_kode] column value.
     *
     * @return int
     */
    public function getDddtoedieningswegKode()
    {

        return $this->dddtoedieningsweg_kode;
    }

    /**
     * Get the [dddindicator] column value.
     *
     * @return string
     */
    public function getDddindicator()
    {

        return $this->dddindicator;
    }

    /**
     * Get the [dddstatusaanduiding] column value.
     *
     * @return int
     */
    public function getDddstatusaanduiding()
    {

        return $this->dddstatusaanduiding;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsAtcdddgegevens The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsAtcdddgegevensPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsAtcdddgegevens The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsAtcdddgegevensPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [atccode] column.
     *
     * @param  string $v new value
     * @return GsAtcdddgegevens The current object (for fluent API support)
     */
    public function setAtccode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->atccode !== $v) {
            $this->atccode = $v;
            $this->modifiedColumns[] = GsAtcdddgegevensPeer::ATCCODE;
        }

        if ($this->aGsAtcCodes !== null && $this->aGsAtcCodes->getAtccode() !== $v) {
            $this->aGsAtcCodes = null;
        }


        return $this;
    } // setAtccode()

    /**
     * Set the value of [atcvolgnummer] column.
     *
     * @param  int $v new value
     * @return GsAtcdddgegevens The current object (for fluent API support)
     */
    public function setAtcvolgnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->atcvolgnummer !== $v) {
            $this->atcvolgnummer = $v;
            $this->modifiedColumns[] = GsAtcdddgegevensPeer::ATCVOLGNUMMER;
        }


        return $this;
    } // setAtcvolgnummer()

    /**
     * Set the value of [atcnederlandse_omschrijving] column.
     *
     * @param  string $v new value
     * @return GsAtcdddgegevens The current object (for fluent API support)
     */
    public function setAtcnederlandseOmschrijving($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->atcnederlandse_omschrijving !== $v) {
            $this->atcnederlandse_omschrijving = $v;
            $this->modifiedColumns[] = GsAtcdddgegevensPeer::ATCNEDERLANDSE_OMSCHRIJVING;
        }


        return $this;
    } // setAtcnederlandseOmschrijving()

    /**
     * Set the value of [atcindicator] column.
     *
     * @param  string $v new value
     * @return GsAtcdddgegevens The current object (for fluent API support)
     */
    public function setAtcindicator($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->atcindicator !== $v) {
            $this->atcindicator = $v;
            $this->modifiedColumns[] = GsAtcdddgegevensPeer::ATCINDICATOR;
        }


        return $this;
    } // setAtcindicator()

    /**
     * Set the value of [selectiekode_voor_dubbelmedicatie] column.
     *
     * @param  string $v new value
     * @return GsAtcdddgegevens The current object (for fluent API support)
     */
    public function setSelectiekodeVoorDubbelmedicatie($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->selectiekode_voor_dubbelmedicatie !== $v) {
            $this->selectiekode_voor_dubbelmedicatie = $v;
            $this->modifiedColumns[] = GsAtcdddgegevensPeer::SELECTIEKODE_VOOR_DUBBELMEDICATIE;
        }


        return $this;
    } // setSelectiekodeVoorDubbelmedicatie()

    /**
     * Set the value of [aantal_dddclusters] column.
     *
     * @param  int $v new value
     * @return GsAtcdddgegevens The current object (for fluent API support)
     */
    public function setAantalDddclusters($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aantal_dddclusters !== $v) {
            $this->aantal_dddclusters = $v;
            $this->modifiedColumns[] = GsAtcdddgegevensPeer::AANTAL_DDDCLUSTERS;
        }


        return $this;
    } // setAantalDddclusters()

    /**
     * Set the value of [dddaantal] column.
     *
     * @param  string $v new value
     * @return GsAtcdddgegevens The current object (for fluent API support)
     */
    public function setDddaantal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dddaantal !== $v) {
            $this->dddaantal = $v;
            $this->modifiedColumns[] = GsAtcdddgegevensPeer::DDDAANTAL;
        }


        return $this;
    } // setDddaantal()

    /**
     * Set the value of [dddeenheid] column.
     *
     * @param  string $v new value
     * @return GsAtcdddgegevens The current object (for fluent API support)
     */
    public function setDddeenheid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dddeenheid !== $v) {
            $this->dddeenheid = $v;
            $this->modifiedColumns[] = GsAtcdddgegevensPeer::DDDEENHEID;
        }


        return $this;
    } // setDddeenheid()

    /**
     * Set the value of [dddtoedieningsweg_kode] column.
     *
     * @param  int $v new value
     * @return GsAtcdddgegevens The current object (for fluent API support)
     */
    public function setDddtoedieningswegKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dddtoedieningsweg_kode !== $v) {
            $this->dddtoedieningsweg_kode = $v;
            $this->modifiedColumns[] = GsAtcdddgegevensPeer::DDDTOEDIENINGSWEG_KODE;
        }


        return $this;
    } // setDddtoedieningswegKode()

    /**
     * Set the value of [dddindicator] column.
     *
     * @param  string $v new value
     * @return GsAtcdddgegevens The current object (for fluent API support)
     */
    public function setDddindicator($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dddindicator !== $v) {
            $this->dddindicator = $v;
            $this->modifiedColumns[] = GsAtcdddgegevensPeer::DDDINDICATOR;
        }


        return $this;
    } // setDddindicator()

    /**
     * Set the value of [dddstatusaanduiding] column.
     *
     * @param  int $v new value
     * @return GsAtcdddgegevens The current object (for fluent API support)
     */
    public function setDddstatusaanduiding($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dddstatusaanduiding !== $v) {
            $this->dddstatusaanduiding = $v;
            $this->modifiedColumns[] = GsAtcdddgegevensPeer::DDDSTATUSAANDUIDING;
        }


        return $this;
    } // setDddstatusaanduiding()

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
            $this->atccode = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->atcvolgnummer = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->atcnederlandse_omschrijving = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->atcindicator = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->selectiekode_voor_dubbelmedicatie = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->aantal_dddclusters = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->dddaantal = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->dddeenheid = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->dddtoedieningsweg_kode = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->dddindicator = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->dddstatusaanduiding = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = GsAtcdddgegevensPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsAtcdddgegevens object", $e);
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
            $con = Propel::getConnection(GsAtcdddgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsAtcdddgegevensPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGsAtcCodes = null;
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
            $con = Propel::getConnection(GsAtcdddgegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsAtcdddgegevensQuery::create()
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
            $con = Propel::getConnection(GsAtcdddgegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsAtcdddgegevensPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsAtcdddgegevensPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsAtcdddgegevensPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsAtcdddgegevensPeer::ATCCODE)) {
            $modifiedColumns[':p' . $index++]  = '`atccode`';
        }
        if ($this->isColumnModified(GsAtcdddgegevensPeer::ATCVOLGNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`atcvolgnummer`';
        }
        if ($this->isColumnModified(GsAtcdddgegevensPeer::ATCNEDERLANDSE_OMSCHRIJVING)) {
            $modifiedColumns[':p' . $index++]  = '`atcnederlandse_omschrijving`';
        }
        if ($this->isColumnModified(GsAtcdddgegevensPeer::ATCINDICATOR)) {
            $modifiedColumns[':p' . $index++]  = '`atcindicator`';
        }
        if ($this->isColumnModified(GsAtcdddgegevensPeer::SELECTIEKODE_VOOR_DUBBELMEDICATIE)) {
            $modifiedColumns[':p' . $index++]  = '`selectiekode_voor_dubbelmedicatie`';
        }
        if ($this->isColumnModified(GsAtcdddgegevensPeer::AANTAL_DDDCLUSTERS)) {
            $modifiedColumns[':p' . $index++]  = '`aantal_dddclusters`';
        }
        if ($this->isColumnModified(GsAtcdddgegevensPeer::DDDAANTAL)) {
            $modifiedColumns[':p' . $index++]  = '`dddaantal`';
        }
        if ($this->isColumnModified(GsAtcdddgegevensPeer::DDDEENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`dddeenheid`';
        }
        if ($this->isColumnModified(GsAtcdddgegevensPeer::DDDTOEDIENINGSWEG_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`dddtoedieningsweg_kode`';
        }
        if ($this->isColumnModified(GsAtcdddgegevensPeer::DDDINDICATOR)) {
            $modifiedColumns[':p' . $index++]  = '`dddindicator`';
        }
        if ($this->isColumnModified(GsAtcdddgegevensPeer::DDDSTATUSAANDUIDING)) {
            $modifiedColumns[':p' . $index++]  = '`dddstatusaanduiding`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_atcdddgegevens` (%s) VALUES (%s)',
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
                    case '`atccode`':
                        $stmt->bindValue($identifier, $this->atccode, PDO::PARAM_STR);
                        break;
                    case '`atcvolgnummer`':
                        $stmt->bindValue($identifier, $this->atcvolgnummer, PDO::PARAM_INT);
                        break;
                    case '`atcnederlandse_omschrijving`':
                        $stmt->bindValue($identifier, $this->atcnederlandse_omschrijving, PDO::PARAM_STR);
                        break;
                    case '`atcindicator`':
                        $stmt->bindValue($identifier, $this->atcindicator, PDO::PARAM_STR);
                        break;
                    case '`selectiekode_voor_dubbelmedicatie`':
                        $stmt->bindValue($identifier, $this->selectiekode_voor_dubbelmedicatie, PDO::PARAM_STR);
                        break;
                    case '`aantal_dddclusters`':
                        $stmt->bindValue($identifier, $this->aantal_dddclusters, PDO::PARAM_INT);
                        break;
                    case '`dddaantal`':
                        $stmt->bindValue($identifier, $this->dddaantal, PDO::PARAM_STR);
                        break;
                    case '`dddeenheid`':
                        $stmt->bindValue($identifier, $this->dddeenheid, PDO::PARAM_STR);
                        break;
                    case '`dddtoedieningsweg_kode`':
                        $stmt->bindValue($identifier, $this->dddtoedieningsweg_kode, PDO::PARAM_INT);
                        break;
                    case '`dddindicator`':
                        $stmt->bindValue($identifier, $this->dddindicator, PDO::PARAM_STR);
                        break;
                    case '`dddstatusaanduiding`':
                        $stmt->bindValue($identifier, $this->dddstatusaanduiding, PDO::PARAM_INT);
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


            if (($retval = GsAtcdddgegevensPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsAtcdddgegevensPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAtccode();
                break;
            case 3:
                return $this->getAtcvolgnummer();
                break;
            case 4:
                return $this->getAtcnederlandseOmschrijving();
                break;
            case 5:
                return $this->getAtcindicator();
                break;
            case 6:
                return $this->getSelectiekodeVoorDubbelmedicatie();
                break;
            case 7:
                return $this->getAantalDddclusters();
                break;
            case 8:
                return $this->getDddaantal();
                break;
            case 9:
                return $this->getDddeenheid();
                break;
            case 10:
                return $this->getDddtoedieningswegKode();
                break;
            case 11:
                return $this->getDddindicator();
                break;
            case 12:
                return $this->getDddstatusaanduiding();
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
        if (isset($alreadyDumpedObjects['GsAtcdddgegevens'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsAtcdddgegevens'][serialize($this->getPrimaryKey())] = true;
        $keys = GsAtcdddgegevensPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getAtccode(),
            $keys[3] => $this->getAtcvolgnummer(),
            $keys[4] => $this->getAtcnederlandseOmschrijving(),
            $keys[5] => $this->getAtcindicator(),
            $keys[6] => $this->getSelectiekodeVoorDubbelmedicatie(),
            $keys[7] => $this->getAantalDddclusters(),
            $keys[8] => $this->getDddaantal(),
            $keys[9] => $this->getDddeenheid(),
            $keys[10] => $this->getDddtoedieningswegKode(),
            $keys[11] => $this->getDddindicator(),
            $keys[12] => $this->getDddstatusaanduiding(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aGsAtcCodes) {
                $result['GsAtcCodes'] = $this->aGsAtcCodes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = GsAtcdddgegevensPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAtccode($value);
                break;
            case 3:
                $this->setAtcvolgnummer($value);
                break;
            case 4:
                $this->setAtcnederlandseOmschrijving($value);
                break;
            case 5:
                $this->setAtcindicator($value);
                break;
            case 6:
                $this->setSelectiekodeVoorDubbelmedicatie($value);
                break;
            case 7:
                $this->setAantalDddclusters($value);
                break;
            case 8:
                $this->setDddaantal($value);
                break;
            case 9:
                $this->setDddeenheid($value);
                break;
            case 10:
                $this->setDddtoedieningswegKode($value);
                break;
            case 11:
                $this->setDddindicator($value);
                break;
            case 12:
                $this->setDddstatusaanduiding($value);
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
        $keys = GsAtcdddgegevensPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAtccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAtcvolgnummer($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAtcnederlandseOmschrijving($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAtcindicator($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSelectiekodeVoorDubbelmedicatie($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAantalDddclusters($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDddaantal($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDddeenheid($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDddtoedieningswegKode($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDddindicator($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDddstatusaanduiding($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsAtcdddgegevensPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsAtcdddgegevensPeer::BESTANDNUMMER)) $criteria->add(GsAtcdddgegevensPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsAtcdddgegevensPeer::MUTATIEKODE)) $criteria->add(GsAtcdddgegevensPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsAtcdddgegevensPeer::ATCCODE)) $criteria->add(GsAtcdddgegevensPeer::ATCCODE, $this->atccode);
        if ($this->isColumnModified(GsAtcdddgegevensPeer::ATCVOLGNUMMER)) $criteria->add(GsAtcdddgegevensPeer::ATCVOLGNUMMER, $this->atcvolgnummer);
        if ($this->isColumnModified(GsAtcdddgegevensPeer::ATCNEDERLANDSE_OMSCHRIJVING)) $criteria->add(GsAtcdddgegevensPeer::ATCNEDERLANDSE_OMSCHRIJVING, $this->atcnederlandse_omschrijving);
        if ($this->isColumnModified(GsAtcdddgegevensPeer::ATCINDICATOR)) $criteria->add(GsAtcdddgegevensPeer::ATCINDICATOR, $this->atcindicator);
        if ($this->isColumnModified(GsAtcdddgegevensPeer::SELECTIEKODE_VOOR_DUBBELMEDICATIE)) $criteria->add(GsAtcdddgegevensPeer::SELECTIEKODE_VOOR_DUBBELMEDICATIE, $this->selectiekode_voor_dubbelmedicatie);
        if ($this->isColumnModified(GsAtcdddgegevensPeer::AANTAL_DDDCLUSTERS)) $criteria->add(GsAtcdddgegevensPeer::AANTAL_DDDCLUSTERS, $this->aantal_dddclusters);
        if ($this->isColumnModified(GsAtcdddgegevensPeer::DDDAANTAL)) $criteria->add(GsAtcdddgegevensPeer::DDDAANTAL, $this->dddaantal);
        if ($this->isColumnModified(GsAtcdddgegevensPeer::DDDEENHEID)) $criteria->add(GsAtcdddgegevensPeer::DDDEENHEID, $this->dddeenheid);
        if ($this->isColumnModified(GsAtcdddgegevensPeer::DDDTOEDIENINGSWEG_KODE)) $criteria->add(GsAtcdddgegevensPeer::DDDTOEDIENINGSWEG_KODE, $this->dddtoedieningsweg_kode);
        if ($this->isColumnModified(GsAtcdddgegevensPeer::DDDINDICATOR)) $criteria->add(GsAtcdddgegevensPeer::DDDINDICATOR, $this->dddindicator);
        if ($this->isColumnModified(GsAtcdddgegevensPeer::DDDSTATUSAANDUIDING)) $criteria->add(GsAtcdddgegevensPeer::DDDSTATUSAANDUIDING, $this->dddstatusaanduiding);

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
        $criteria = new Criteria(GsAtcdddgegevensPeer::DATABASE_NAME);
        $criteria->add(GsAtcdddgegevensPeer::ATCCODE, $this->atccode);
        $criteria->add(GsAtcdddgegevensPeer::ATCVOLGNUMMER, $this->atcvolgnummer);

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
        $pks[0] = $this->getAtccode();
        $pks[1] = $this->getAtcvolgnummer();

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
        $this->setAtccode($keys[0]);
        $this->setAtcvolgnummer($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getAtccode()) && (null === $this->getAtcvolgnummer());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsAtcdddgegevens (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setAtccode($this->getAtccode());
        $copyObj->setAtcvolgnummer($this->getAtcvolgnummer());
        $copyObj->setAtcnederlandseOmschrijving($this->getAtcnederlandseOmschrijving());
        $copyObj->setAtcindicator($this->getAtcindicator());
        $copyObj->setSelectiekodeVoorDubbelmedicatie($this->getSelectiekodeVoorDubbelmedicatie());
        $copyObj->setAantalDddclusters($this->getAantalDddclusters());
        $copyObj->setDddaantal($this->getDddaantal());
        $copyObj->setDddeenheid($this->getDddeenheid());
        $copyObj->setDddtoedieningswegKode($this->getDddtoedieningswegKode());
        $copyObj->setDddindicator($this->getDddindicator());
        $copyObj->setDddstatusaanduiding($this->getDddstatusaanduiding());

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
     * @return GsAtcdddgegevens Clone of current object.
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
     * @return GsAtcdddgegevensPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsAtcdddgegevensPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsAtcCodes object.
     *
     * @param                  GsAtcCodes $v
     * @return GsAtcdddgegevens The current object (for fluent API support)
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
            $v->addGsAtcdddgegevens($this);
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
                $this->aGsAtcCodes->addGsAtcdddgegevenss($this);
             */
        }

        return $this->aGsAtcCodes;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->atccode = null;
        $this->atcvolgnummer = null;
        $this->atcnederlandse_omschrijving = null;
        $this->atcindicator = null;
        $this->selectiekode_voor_dubbelmedicatie = null;
        $this->aantal_dddclusters = null;
        $this->dddaantal = null;
        $this->dddeenheid = null;
        $this->dddtoedieningsweg_kode = null;
        $this->dddindicator = null;
        $this->dddstatusaanduiding = null;
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
            if ($this->aGsAtcCodes instanceof Persistent) {
              $this->aGsAtcCodes->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aGsAtcCodes = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsAtcdddgegevensPeer::DEFAULT_STRING_FORMAT);
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
