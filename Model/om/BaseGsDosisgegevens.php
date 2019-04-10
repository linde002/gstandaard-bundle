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
use PharmaIntelligence\GstandaardBundle\Model\GsDosisgegevens;
use PharmaIntelligence\GstandaardBundle\Model\GsDosisgegevensPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsDosisgegevensQuery;

abstract class BaseGsDosisgegevens extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDosisgegevensPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsDosisgegevensPeer
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
     * The value for the dosisnummer field.
     * @var        int
     */
    protected $dosisnummer;

    /**
     * The value for the norm_minimum field.
     * @var        string
     */
    protected $norm_minimum;

    /**
     * The value for the norm_maximum field.
     * @var        string
     */
    protected $norm_maximum;

    /**
     * The value for the absoluut_minimum field.
     * @var        string
     */
    protected $absoluut_minimum;

    /**
     * The value for the absoluut_maximum field.
     * @var        string
     */
    protected $absoluut_maximum;

    /**
     * The value for the norm_minimum_per_kg field.
     * @var        string
     */
    protected $norm_minimum_per_kg;

    /**
     * The value for the norm_maximum_per_kg field.
     * @var        string
     */
    protected $norm_maximum_per_kg;

    /**
     * The value for the absoluut_minimum_per_kg field.
     * @var        string
     */
    protected $absoluut_minimum_per_kg;

    /**
     * The value for the absoluut_maximum_per_kg field.
     * @var        string
     */
    protected $absoluut_maximum_per_kg;

    /**
     * The value for the norm_minimum_per_m2 field.
     * @var        string
     */
    protected $norm_minimum_per_m2;

    /**
     * The value for the norm_maximum_per_m2 field.
     * @var        string
     */
    protected $norm_maximum_per_m2;

    /**
     * The value for the absoluut_minimum_per_m2 field.
     * @var        string
     */
    protected $absoluut_minimum_per_m2;

    /**
     * The value for the absoluut_maximum_per_m2 field.
     * @var        string
     */
    protected $absoluut_maximum_per_m2;

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
     * Get the [dosisnummer] column value.
     *
     * @return int
     */
    public function getDosisnummer()
    {

        return $this->dosisnummer;
    }

    /**
     * Get the [norm_minimum] column value.
     *
     * @return string
     */
    public function getNormMinimum()
    {

        return $this->norm_minimum;
    }

    /**
     * Get the [norm_maximum] column value.
     *
     * @return string
     */
    public function getNormMaximum()
    {

        return $this->norm_maximum;
    }

    /**
     * Get the [absoluut_minimum] column value.
     *
     * @return string
     */
    public function getAbsoluutMinimum()
    {

        return $this->absoluut_minimum;
    }

    /**
     * Get the [absoluut_maximum] column value.
     *
     * @return string
     */
    public function getAbsoluutMaximum()
    {

        return $this->absoluut_maximum;
    }

    /**
     * Get the [norm_minimum_per_kg] column value.
     *
     * @return string
     */
    public function getNormMinimumPerKg()
    {

        return $this->norm_minimum_per_kg;
    }

    /**
     * Get the [norm_maximum_per_kg] column value.
     *
     * @return string
     */
    public function getNormMaximumPerKg()
    {

        return $this->norm_maximum_per_kg;
    }

    /**
     * Get the [absoluut_minimum_per_kg] column value.
     *
     * @return string
     */
    public function getAbsoluutMinimumPerKg()
    {

        return $this->absoluut_minimum_per_kg;
    }

    /**
     * Get the [absoluut_maximum_per_kg] column value.
     *
     * @return string
     */
    public function getAbsoluutMaximumPerKg()
    {

        return $this->absoluut_maximum_per_kg;
    }

    /**
     * Get the [norm_minimum_per_m2] column value.
     *
     * @return string
     */
    public function getNormMinimumPerM2()
    {

        return $this->norm_minimum_per_m2;
    }

    /**
     * Get the [norm_maximum_per_m2] column value.
     *
     * @return string
     */
    public function getNormMaximumPerM2()
    {

        return $this->norm_maximum_per_m2;
    }

    /**
     * Get the [absoluut_minimum_per_m2] column value.
     *
     * @return string
     */
    public function getAbsoluutMinimumPerM2()
    {

        return $this->absoluut_minimum_per_m2;
    }

    /**
     * Get the [absoluut_maximum_per_m2] column value.
     *
     * @return string
     */
    public function getAbsoluutMaximumPerM2()
    {

        return $this->absoluut_maximum_per_m2;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsDosisgegevens The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsDosisgegevensPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsDosisgegevens The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsDosisgegevensPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [dosisnummer] column.
     *
     * @param  int $v new value
     * @return GsDosisgegevens The current object (for fluent API support)
     */
    public function setDosisnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dosisnummer !== $v) {
            $this->dosisnummer = $v;
            $this->modifiedColumns[] = GsDosisgegevensPeer::DOSISNUMMER;
        }


        return $this;
    } // setDosisnummer()

    /**
     * Set the value of [norm_minimum] column.
     *
     * @param  string $v new value
     * @return GsDosisgegevens The current object (for fluent API support)
     */
    public function setNormMinimum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->norm_minimum !== $v) {
            $this->norm_minimum = $v;
            $this->modifiedColumns[] = GsDosisgegevensPeer::NORM_MINIMUM;
        }


        return $this;
    } // setNormMinimum()

    /**
     * Set the value of [norm_maximum] column.
     *
     * @param  string $v new value
     * @return GsDosisgegevens The current object (for fluent API support)
     */
    public function setNormMaximum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->norm_maximum !== $v) {
            $this->norm_maximum = $v;
            $this->modifiedColumns[] = GsDosisgegevensPeer::NORM_MAXIMUM;
        }


        return $this;
    } // setNormMaximum()

    /**
     * Set the value of [absoluut_minimum] column.
     *
     * @param  string $v new value
     * @return GsDosisgegevens The current object (for fluent API support)
     */
    public function setAbsoluutMinimum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->absoluut_minimum !== $v) {
            $this->absoluut_minimum = $v;
            $this->modifiedColumns[] = GsDosisgegevensPeer::ABSOLUUT_MINIMUM;
        }


        return $this;
    } // setAbsoluutMinimum()

    /**
     * Set the value of [absoluut_maximum] column.
     *
     * @param  string $v new value
     * @return GsDosisgegevens The current object (for fluent API support)
     */
    public function setAbsoluutMaximum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->absoluut_maximum !== $v) {
            $this->absoluut_maximum = $v;
            $this->modifiedColumns[] = GsDosisgegevensPeer::ABSOLUUT_MAXIMUM;
        }


        return $this;
    } // setAbsoluutMaximum()

    /**
     * Set the value of [norm_minimum_per_kg] column.
     *
     * @param  string $v new value
     * @return GsDosisgegevens The current object (for fluent API support)
     */
    public function setNormMinimumPerKg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->norm_minimum_per_kg !== $v) {
            $this->norm_minimum_per_kg = $v;
            $this->modifiedColumns[] = GsDosisgegevensPeer::NORM_MINIMUM_PER_KG;
        }


        return $this;
    } // setNormMinimumPerKg()

    /**
     * Set the value of [norm_maximum_per_kg] column.
     *
     * @param  string $v new value
     * @return GsDosisgegevens The current object (for fluent API support)
     */
    public function setNormMaximumPerKg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->norm_maximum_per_kg !== $v) {
            $this->norm_maximum_per_kg = $v;
            $this->modifiedColumns[] = GsDosisgegevensPeer::NORM_MAXIMUM_PER_KG;
        }


        return $this;
    } // setNormMaximumPerKg()

    /**
     * Set the value of [absoluut_minimum_per_kg] column.
     *
     * @param  string $v new value
     * @return GsDosisgegevens The current object (for fluent API support)
     */
    public function setAbsoluutMinimumPerKg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->absoluut_minimum_per_kg !== $v) {
            $this->absoluut_minimum_per_kg = $v;
            $this->modifiedColumns[] = GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_KG;
        }


        return $this;
    } // setAbsoluutMinimumPerKg()

    /**
     * Set the value of [absoluut_maximum_per_kg] column.
     *
     * @param  string $v new value
     * @return GsDosisgegevens The current object (for fluent API support)
     */
    public function setAbsoluutMaximumPerKg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->absoluut_maximum_per_kg !== $v) {
            $this->absoluut_maximum_per_kg = $v;
            $this->modifiedColumns[] = GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_KG;
        }


        return $this;
    } // setAbsoluutMaximumPerKg()

    /**
     * Set the value of [norm_minimum_per_m2] column.
     *
     * @param  string $v new value
     * @return GsDosisgegevens The current object (for fluent API support)
     */
    public function setNormMinimumPerM2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->norm_minimum_per_m2 !== $v) {
            $this->norm_minimum_per_m2 = $v;
            $this->modifiedColumns[] = GsDosisgegevensPeer::NORM_MINIMUM_PER_M2;
        }


        return $this;
    } // setNormMinimumPerM2()

    /**
     * Set the value of [norm_maximum_per_m2] column.
     *
     * @param  string $v new value
     * @return GsDosisgegevens The current object (for fluent API support)
     */
    public function setNormMaximumPerM2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->norm_maximum_per_m2 !== $v) {
            $this->norm_maximum_per_m2 = $v;
            $this->modifiedColumns[] = GsDosisgegevensPeer::NORM_MAXIMUM_PER_M2;
        }


        return $this;
    } // setNormMaximumPerM2()

    /**
     * Set the value of [absoluut_minimum_per_m2] column.
     *
     * @param  string $v new value
     * @return GsDosisgegevens The current object (for fluent API support)
     */
    public function setAbsoluutMinimumPerM2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->absoluut_minimum_per_m2 !== $v) {
            $this->absoluut_minimum_per_m2 = $v;
            $this->modifiedColumns[] = GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_M2;
        }


        return $this;
    } // setAbsoluutMinimumPerM2()

    /**
     * Set the value of [absoluut_maximum_per_m2] column.
     *
     * @param  string $v new value
     * @return GsDosisgegevens The current object (for fluent API support)
     */
    public function setAbsoluutMaximumPerM2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->absoluut_maximum_per_m2 !== $v) {
            $this->absoluut_maximum_per_m2 = $v;
            $this->modifiedColumns[] = GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_M2;
        }


        return $this;
    } // setAbsoluutMaximumPerM2()

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
            $this->dosisnummer = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->norm_minimum = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->norm_maximum = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->absoluut_minimum = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->absoluut_maximum = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->norm_minimum_per_kg = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->norm_maximum_per_kg = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->absoluut_minimum_per_kg = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->absoluut_maximum_per_kg = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->norm_minimum_per_m2 = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->norm_maximum_per_m2 = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->absoluut_minimum_per_m2 = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->absoluut_maximum_per_m2 = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = GsDosisgegevensPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsDosisgegevens object", $e);
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
            $con = Propel::getConnection(GsDosisgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsDosisgegevensPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsDosisgegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsDosisgegevensQuery::create()
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
            $con = Propel::getConnection(GsDosisgegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsDosisgegevensPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsDosisgegevensPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsDosisgegevensPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsDosisgegevensPeer::DOSISNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`dosisnummer`';
        }
        if ($this->isColumnModified(GsDosisgegevensPeer::NORM_MINIMUM)) {
            $modifiedColumns[':p' . $index++]  = '`norm_minimum`';
        }
        if ($this->isColumnModified(GsDosisgegevensPeer::NORM_MAXIMUM)) {
            $modifiedColumns[':p' . $index++]  = '`norm_maximum`';
        }
        if ($this->isColumnModified(GsDosisgegevensPeer::ABSOLUUT_MINIMUM)) {
            $modifiedColumns[':p' . $index++]  = '`absoluut_minimum`';
        }
        if ($this->isColumnModified(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM)) {
            $modifiedColumns[':p' . $index++]  = '`absoluut_maximum`';
        }
        if ($this->isColumnModified(GsDosisgegevensPeer::NORM_MINIMUM_PER_KG)) {
            $modifiedColumns[':p' . $index++]  = '`norm_minimum_per_kg`';
        }
        if ($this->isColumnModified(GsDosisgegevensPeer::NORM_MAXIMUM_PER_KG)) {
            $modifiedColumns[':p' . $index++]  = '`norm_maximum_per_kg`';
        }
        if ($this->isColumnModified(GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_KG)) {
            $modifiedColumns[':p' . $index++]  = '`absoluut_minimum_per_kg`';
        }
        if ($this->isColumnModified(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_KG)) {
            $modifiedColumns[':p' . $index++]  = '`absoluut_maximum_per_kg`';
        }
        if ($this->isColumnModified(GsDosisgegevensPeer::NORM_MINIMUM_PER_M2)) {
            $modifiedColumns[':p' . $index++]  = '`norm_minimum_per_m2`';
        }
        if ($this->isColumnModified(GsDosisgegevensPeer::NORM_MAXIMUM_PER_M2)) {
            $modifiedColumns[':p' . $index++]  = '`norm_maximum_per_m2`';
        }
        if ($this->isColumnModified(GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_M2)) {
            $modifiedColumns[':p' . $index++]  = '`absoluut_minimum_per_m2`';
        }
        if ($this->isColumnModified(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_M2)) {
            $modifiedColumns[':p' . $index++]  = '`absoluut_maximum_per_m2`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_dosisgegevens` (%s) VALUES (%s)',
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
                    case '`dosisnummer`':
                        $stmt->bindValue($identifier, $this->dosisnummer, PDO::PARAM_INT);
                        break;
                    case '`norm_minimum`':
                        $stmt->bindValue($identifier, $this->norm_minimum, PDO::PARAM_STR);
                        break;
                    case '`norm_maximum`':
                        $stmt->bindValue($identifier, $this->norm_maximum, PDO::PARAM_STR);
                        break;
                    case '`absoluut_minimum`':
                        $stmt->bindValue($identifier, $this->absoluut_minimum, PDO::PARAM_STR);
                        break;
                    case '`absoluut_maximum`':
                        $stmt->bindValue($identifier, $this->absoluut_maximum, PDO::PARAM_STR);
                        break;
                    case '`norm_minimum_per_kg`':
                        $stmt->bindValue($identifier, $this->norm_minimum_per_kg, PDO::PARAM_STR);
                        break;
                    case '`norm_maximum_per_kg`':
                        $stmt->bindValue($identifier, $this->norm_maximum_per_kg, PDO::PARAM_STR);
                        break;
                    case '`absoluut_minimum_per_kg`':
                        $stmt->bindValue($identifier, $this->absoluut_minimum_per_kg, PDO::PARAM_STR);
                        break;
                    case '`absoluut_maximum_per_kg`':
                        $stmt->bindValue($identifier, $this->absoluut_maximum_per_kg, PDO::PARAM_STR);
                        break;
                    case '`norm_minimum_per_m2`':
                        $stmt->bindValue($identifier, $this->norm_minimum_per_m2, PDO::PARAM_STR);
                        break;
                    case '`norm_maximum_per_m2`':
                        $stmt->bindValue($identifier, $this->norm_maximum_per_m2, PDO::PARAM_STR);
                        break;
                    case '`absoluut_minimum_per_m2`':
                        $stmt->bindValue($identifier, $this->absoluut_minimum_per_m2, PDO::PARAM_STR);
                        break;
                    case '`absoluut_maximum_per_m2`':
                        $stmt->bindValue($identifier, $this->absoluut_maximum_per_m2, PDO::PARAM_STR);
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


            if (($retval = GsDosisgegevensPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsDosisgegevensPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getDosisnummer();
                break;
            case 3:
                return $this->getNormMinimum();
                break;
            case 4:
                return $this->getNormMaximum();
                break;
            case 5:
                return $this->getAbsoluutMinimum();
                break;
            case 6:
                return $this->getAbsoluutMaximum();
                break;
            case 7:
                return $this->getNormMinimumPerKg();
                break;
            case 8:
                return $this->getNormMaximumPerKg();
                break;
            case 9:
                return $this->getAbsoluutMinimumPerKg();
                break;
            case 10:
                return $this->getAbsoluutMaximumPerKg();
                break;
            case 11:
                return $this->getNormMinimumPerM2();
                break;
            case 12:
                return $this->getNormMaximumPerM2();
                break;
            case 13:
                return $this->getAbsoluutMinimumPerM2();
                break;
            case 14:
                return $this->getAbsoluutMaximumPerM2();
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
        if (isset($alreadyDumpedObjects['GsDosisgegevens'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsDosisgegevens'][$this->getPrimaryKey()] = true;
        $keys = GsDosisgegevensPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getDosisnummer(),
            $keys[3] => $this->getNormMinimum(),
            $keys[4] => $this->getNormMaximum(),
            $keys[5] => $this->getAbsoluutMinimum(),
            $keys[6] => $this->getAbsoluutMaximum(),
            $keys[7] => $this->getNormMinimumPerKg(),
            $keys[8] => $this->getNormMaximumPerKg(),
            $keys[9] => $this->getAbsoluutMinimumPerKg(),
            $keys[10] => $this->getAbsoluutMaximumPerKg(),
            $keys[11] => $this->getNormMinimumPerM2(),
            $keys[12] => $this->getNormMaximumPerM2(),
            $keys[13] => $this->getAbsoluutMinimumPerM2(),
            $keys[14] => $this->getAbsoluutMaximumPerM2(),
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
        $pos = GsDosisgegevensPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setDosisnummer($value);
                break;
            case 3:
                $this->setNormMinimum($value);
                break;
            case 4:
                $this->setNormMaximum($value);
                break;
            case 5:
                $this->setAbsoluutMinimum($value);
                break;
            case 6:
                $this->setAbsoluutMaximum($value);
                break;
            case 7:
                $this->setNormMinimumPerKg($value);
                break;
            case 8:
                $this->setNormMaximumPerKg($value);
                break;
            case 9:
                $this->setAbsoluutMinimumPerKg($value);
                break;
            case 10:
                $this->setAbsoluutMaximumPerKg($value);
                break;
            case 11:
                $this->setNormMinimumPerM2($value);
                break;
            case 12:
                $this->setNormMaximumPerM2($value);
                break;
            case 13:
                $this->setAbsoluutMinimumPerM2($value);
                break;
            case 14:
                $this->setAbsoluutMaximumPerM2($value);
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
        $keys = GsDosisgegevensPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDosisnummer($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNormMinimum($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNormMaximum($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAbsoluutMinimum($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAbsoluutMaximum($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNormMinimumPerKg($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNormMaximumPerKg($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAbsoluutMinimumPerKg($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAbsoluutMaximumPerKg($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setNormMinimumPerM2($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNormMaximumPerM2($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAbsoluutMinimumPerM2($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setAbsoluutMaximumPerM2($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsDosisgegevensPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsDosisgegevensPeer::BESTANDNUMMER)) $criteria->add(GsDosisgegevensPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsDosisgegevensPeer::MUTATIEKODE)) $criteria->add(GsDosisgegevensPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsDosisgegevensPeer::DOSISNUMMER)) $criteria->add(GsDosisgegevensPeer::DOSISNUMMER, $this->dosisnummer);
        if ($this->isColumnModified(GsDosisgegevensPeer::NORM_MINIMUM)) $criteria->add(GsDosisgegevensPeer::NORM_MINIMUM, $this->norm_minimum);
        if ($this->isColumnModified(GsDosisgegevensPeer::NORM_MAXIMUM)) $criteria->add(GsDosisgegevensPeer::NORM_MAXIMUM, $this->norm_maximum);
        if ($this->isColumnModified(GsDosisgegevensPeer::ABSOLUUT_MINIMUM)) $criteria->add(GsDosisgegevensPeer::ABSOLUUT_MINIMUM, $this->absoluut_minimum);
        if ($this->isColumnModified(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM)) $criteria->add(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM, $this->absoluut_maximum);
        if ($this->isColumnModified(GsDosisgegevensPeer::NORM_MINIMUM_PER_KG)) $criteria->add(GsDosisgegevensPeer::NORM_MINIMUM_PER_KG, $this->norm_minimum_per_kg);
        if ($this->isColumnModified(GsDosisgegevensPeer::NORM_MAXIMUM_PER_KG)) $criteria->add(GsDosisgegevensPeer::NORM_MAXIMUM_PER_KG, $this->norm_maximum_per_kg);
        if ($this->isColumnModified(GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_KG)) $criteria->add(GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_KG, $this->absoluut_minimum_per_kg);
        if ($this->isColumnModified(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_KG)) $criteria->add(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_KG, $this->absoluut_maximum_per_kg);
        if ($this->isColumnModified(GsDosisgegevensPeer::NORM_MINIMUM_PER_M2)) $criteria->add(GsDosisgegevensPeer::NORM_MINIMUM_PER_M2, $this->norm_minimum_per_m2);
        if ($this->isColumnModified(GsDosisgegevensPeer::NORM_MAXIMUM_PER_M2)) $criteria->add(GsDosisgegevensPeer::NORM_MAXIMUM_PER_M2, $this->norm_maximum_per_m2);
        if ($this->isColumnModified(GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_M2)) $criteria->add(GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_M2, $this->absoluut_minimum_per_m2);
        if ($this->isColumnModified(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_M2)) $criteria->add(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_M2, $this->absoluut_maximum_per_m2);

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
        $criteria = new Criteria(GsDosisgegevensPeer::DATABASE_NAME);
        $criteria->add(GsDosisgegevensPeer::DOSISNUMMER, $this->dosisnummer);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getDosisnummer();
    }

    /**
     * Generic method to set the primary key (dosisnummer column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setDosisnummer($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getDosisnummer();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsDosisgegevens (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setNormMinimum($this->getNormMinimum());
        $copyObj->setNormMaximum($this->getNormMaximum());
        $copyObj->setAbsoluutMinimum($this->getAbsoluutMinimum());
        $copyObj->setAbsoluutMaximum($this->getAbsoluutMaximum());
        $copyObj->setNormMinimumPerKg($this->getNormMinimumPerKg());
        $copyObj->setNormMaximumPerKg($this->getNormMaximumPerKg());
        $copyObj->setAbsoluutMinimumPerKg($this->getAbsoluutMinimumPerKg());
        $copyObj->setAbsoluutMaximumPerKg($this->getAbsoluutMaximumPerKg());
        $copyObj->setNormMinimumPerM2($this->getNormMinimumPerM2());
        $copyObj->setNormMaximumPerM2($this->getNormMaximumPerM2());
        $copyObj->setAbsoluutMinimumPerM2($this->getAbsoluutMinimumPerM2());
        $copyObj->setAbsoluutMaximumPerM2($this->getAbsoluutMaximumPerM2());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setDosisnummer(NULL); // this is a auto-increment column, so set to default value
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
     * @return GsDosisgegevens Clone of current object.
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
     * @return GsDosisgegevensPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsDosisgegevensPeer();
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
        $this->dosisnummer = null;
        $this->norm_minimum = null;
        $this->norm_maximum = null;
        $this->absoluut_minimum = null;
        $this->absoluut_maximum = null;
        $this->norm_minimum_per_kg = null;
        $this->norm_maximum_per_kg = null;
        $this->absoluut_minimum_per_kg = null;
        $this->absoluut_maximum_per_kg = null;
        $this->norm_minimum_per_m2 = null;
        $this->norm_maximum_per_m2 = null;
        $this->absoluut_minimum_per_m2 = null;
        $this->absoluut_maximum_per_m2 = null;
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
        return (string) $this->exportTo(GsDosisgegevensPeer::DEFAULT_STRING_FORMAT);
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
