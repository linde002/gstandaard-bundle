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
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesExtended;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesExtendedPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesExtendedQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesQuery;

abstract class BaseGsAtcCodesExtended extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAtcCodesExtendedPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsAtcCodesExtendedPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the atccode field.
     * @var        string
     */
    protected $atccode;

    /**
     * The value for the atcnederlandse_omschrijving field.
     * @var        string
     */
    protected $atcnederlandse_omschrijving;

    /**
     * The value for the anatomische_hoofdgroep_code field.
     * @var        string
     */
    protected $anatomische_hoofdgroep_code;

    /**
     * The value for the anatomische_hoofdgroep field.
     * @var        string
     */
    protected $anatomische_hoofdgroep;

    /**
     * The value for the therapeutische_hoofdgroep_code field.
     * @var        string
     */
    protected $therapeutische_hoofdgroep_code;

    /**
     * The value for the therapeutische_hoofdgroep field.
     * @var        string
     */
    protected $therapeutische_hoofdgroep;

    /**
     * The value for the therapeutische_subgroep_code field.
     * @var        string
     */
    protected $therapeutische_subgroep_code;

    /**
     * The value for the therapeutische_subgroep field.
     * @var        string
     */
    protected $therapeutische_subgroep;

    /**
     * The value for the chemische_subgroep_code field.
     * @var        string
     */
    protected $chemische_subgroep_code;

    /**
     * The value for the chemische_subgroep field.
     * @var        string
     */
    protected $chemische_subgroep;

    /**
     * The value for the chemische_stofnaam_code field.
     * @var        string
     */
    protected $chemische_stofnaam_code;

    /**
     * The value for the chemische_stofnaam field.
     * @var        string
     */
    protected $chemische_stofnaam;

    /**
     * The value for the volledige_naam field.
     * @var        string
     */
    protected $volledige_naam;

    /**
     * The value for the merken field.
     * @var        string
     */
    protected $merken;

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
     * Get the [atccode] column value.
     *
     * @return string
     */
    public function getAtccode()
    {

        return $this->atccode;
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
     * Get the [anatomische_hoofdgroep_code] column value.
     *
     * @return string
     */
    public function getAnatomischeHoofdgroepCode()
    {

        return $this->anatomische_hoofdgroep_code;
    }

    /**
     * Get the [anatomische_hoofdgroep] column value.
     *
     * @return string
     */
    public function getAnatomischeHoofdgroep()
    {

        return $this->anatomische_hoofdgroep;
    }

    /**
     * Get the [therapeutische_hoofdgroep_code] column value.
     *
     * @return string
     */
    public function getTherapeutischeHoofdgroepCode()
    {

        return $this->therapeutische_hoofdgroep_code;
    }

    /**
     * Get the [therapeutische_hoofdgroep] column value.
     *
     * @return string
     */
    public function getTherapeutischeHoofdgroep()
    {

        return $this->therapeutische_hoofdgroep;
    }

    /**
     * Get the [therapeutische_subgroep_code] column value.
     *
     * @return string
     */
    public function getTherapeutischeSubgroepCode()
    {

        return $this->therapeutische_subgroep_code;
    }

    /**
     * Get the [therapeutische_subgroep] column value.
     *
     * @return string
     */
    public function getTherapeutischeSubgroep()
    {

        return $this->therapeutische_subgroep;
    }

    /**
     * Get the [chemische_subgroep_code] column value.
     *
     * @return string
     */
    public function getChemischeSubgroepCode()
    {

        return $this->chemische_subgroep_code;
    }

    /**
     * Get the [chemische_subgroep] column value.
     *
     * @return string
     */
    public function getChemischeSubgroep()
    {

        return $this->chemische_subgroep;
    }

    /**
     * Get the [chemische_stofnaam_code] column value.
     *
     * @return string
     */
    public function getChemischeStofnaamCode()
    {

        return $this->chemische_stofnaam_code;
    }

    /**
     * Get the [chemische_stofnaam] column value.
     *
     * @return string
     */
    public function getChemischeStofnaam()
    {

        return $this->chemische_stofnaam;
    }

    /**
     * Get the [volledige_naam] column value.
     *
     * @return string
     */
    public function getVolledigeNaam()
    {

        return $this->volledige_naam;
    }

    /**
     * Get the [merken] column value.
     *
     * @return string
     */
    public function getMerken()
    {

        return $this->merken;
    }

    /**
     * Set the value of [atccode] column.
     *
     * @param  string $v new value
     * @return GsAtcCodesExtended The current object (for fluent API support)
     */
    public function setAtccode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->atccode !== $v) {
            $this->atccode = $v;
            $this->modifiedColumns[] = GsAtcCodesExtendedPeer::ATCCODE;
        }

        if ($this->aGsAtcCodes !== null && $this->aGsAtcCodes->getAtccode() !== $v) {
            $this->aGsAtcCodes = null;
        }


        return $this;
    } // setAtccode()

    /**
     * Set the value of [atcnederlandse_omschrijving] column.
     *
     * @param  string $v new value
     * @return GsAtcCodesExtended The current object (for fluent API support)
     */
    public function setAtcnederlandseOmschrijving($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->atcnederlandse_omschrijving !== $v) {
            $this->atcnederlandse_omschrijving = $v;
            $this->modifiedColumns[] = GsAtcCodesExtendedPeer::ATCNEDERLANDSE_OMSCHRIJVING;
        }


        return $this;
    } // setAtcnederlandseOmschrijving()

    /**
     * Set the value of [anatomische_hoofdgroep_code] column.
     *
     * @param  string $v new value
     * @return GsAtcCodesExtended The current object (for fluent API support)
     */
    public function setAnatomischeHoofdgroepCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->anatomische_hoofdgroep_code !== $v) {
            $this->anatomische_hoofdgroep_code = $v;
            $this->modifiedColumns[] = GsAtcCodesExtendedPeer::ANATOMISCHE_HOOFDGROEP_CODE;
        }


        return $this;
    } // setAnatomischeHoofdgroepCode()

    /**
     * Set the value of [anatomische_hoofdgroep] column.
     *
     * @param  string $v new value
     * @return GsAtcCodesExtended The current object (for fluent API support)
     */
    public function setAnatomischeHoofdgroep($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->anatomische_hoofdgroep !== $v) {
            $this->anatomische_hoofdgroep = $v;
            $this->modifiedColumns[] = GsAtcCodesExtendedPeer::ANATOMISCHE_HOOFDGROEP;
        }


        return $this;
    } // setAnatomischeHoofdgroep()

    /**
     * Set the value of [therapeutische_hoofdgroep_code] column.
     *
     * @param  string $v new value
     * @return GsAtcCodesExtended The current object (for fluent API support)
     */
    public function setTherapeutischeHoofdgroepCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->therapeutische_hoofdgroep_code !== $v) {
            $this->therapeutische_hoofdgroep_code = $v;
            $this->modifiedColumns[] = GsAtcCodesExtendedPeer::THERAPEUTISCHE_HOOFDGROEP_CODE;
        }


        return $this;
    } // setTherapeutischeHoofdgroepCode()

    /**
     * Set the value of [therapeutische_hoofdgroep] column.
     *
     * @param  string $v new value
     * @return GsAtcCodesExtended The current object (for fluent API support)
     */
    public function setTherapeutischeHoofdgroep($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->therapeutische_hoofdgroep !== $v) {
            $this->therapeutische_hoofdgroep = $v;
            $this->modifiedColumns[] = GsAtcCodesExtendedPeer::THERAPEUTISCHE_HOOFDGROEP;
        }


        return $this;
    } // setTherapeutischeHoofdgroep()

    /**
     * Set the value of [therapeutische_subgroep_code] column.
     *
     * @param  string $v new value
     * @return GsAtcCodesExtended The current object (for fluent API support)
     */
    public function setTherapeutischeSubgroepCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->therapeutische_subgroep_code !== $v) {
            $this->therapeutische_subgroep_code = $v;
            $this->modifiedColumns[] = GsAtcCodesExtendedPeer::THERAPEUTISCHE_SUBGROEP_CODE;
        }


        return $this;
    } // setTherapeutischeSubgroepCode()

    /**
     * Set the value of [therapeutische_subgroep] column.
     *
     * @param  string $v new value
     * @return GsAtcCodesExtended The current object (for fluent API support)
     */
    public function setTherapeutischeSubgroep($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->therapeutische_subgroep !== $v) {
            $this->therapeutische_subgroep = $v;
            $this->modifiedColumns[] = GsAtcCodesExtendedPeer::THERAPEUTISCHE_SUBGROEP;
        }


        return $this;
    } // setTherapeutischeSubgroep()

    /**
     * Set the value of [chemische_subgroep_code] column.
     *
     * @param  string $v new value
     * @return GsAtcCodesExtended The current object (for fluent API support)
     */
    public function setChemischeSubgroepCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->chemische_subgroep_code !== $v) {
            $this->chemische_subgroep_code = $v;
            $this->modifiedColumns[] = GsAtcCodesExtendedPeer::CHEMISCHE_SUBGROEP_CODE;
        }


        return $this;
    } // setChemischeSubgroepCode()

    /**
     * Set the value of [chemische_subgroep] column.
     *
     * @param  string $v new value
     * @return GsAtcCodesExtended The current object (for fluent API support)
     */
    public function setChemischeSubgroep($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->chemische_subgroep !== $v) {
            $this->chemische_subgroep = $v;
            $this->modifiedColumns[] = GsAtcCodesExtendedPeer::CHEMISCHE_SUBGROEP;
        }


        return $this;
    } // setChemischeSubgroep()

    /**
     * Set the value of [chemische_stofnaam_code] column.
     *
     * @param  string $v new value
     * @return GsAtcCodesExtended The current object (for fluent API support)
     */
    public function setChemischeStofnaamCode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->chemische_stofnaam_code !== $v) {
            $this->chemische_stofnaam_code = $v;
            $this->modifiedColumns[] = GsAtcCodesExtendedPeer::CHEMISCHE_STOFNAAM_CODE;
        }


        return $this;
    } // setChemischeStofnaamCode()

    /**
     * Set the value of [chemische_stofnaam] column.
     *
     * @param  string $v new value
     * @return GsAtcCodesExtended The current object (for fluent API support)
     */
    public function setChemischeStofnaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->chemische_stofnaam !== $v) {
            $this->chemische_stofnaam = $v;
            $this->modifiedColumns[] = GsAtcCodesExtendedPeer::CHEMISCHE_STOFNAAM;
        }


        return $this;
    } // setChemischeStofnaam()

    /**
     * Set the value of [volledige_naam] column.
     *
     * @param  string $v new value
     * @return GsAtcCodesExtended The current object (for fluent API support)
     */
    public function setVolledigeNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->volledige_naam !== $v) {
            $this->volledige_naam = $v;
            $this->modifiedColumns[] = GsAtcCodesExtendedPeer::VOLLEDIGE_NAAM;
        }


        return $this;
    } // setVolledigeNaam()

    /**
     * Set the value of [merken] column.
     *
     * @param  string $v new value
     * @return GsAtcCodesExtended The current object (for fluent API support)
     */
    public function setMerken($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->merken !== $v) {
            $this->merken = $v;
            $this->modifiedColumns[] = GsAtcCodesExtendedPeer::MERKEN;
        }


        return $this;
    } // setMerken()

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

            $this->atccode = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->atcnederlandse_omschrijving = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->anatomische_hoofdgroep_code = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->anatomische_hoofdgroep = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->therapeutische_hoofdgroep_code = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->therapeutische_hoofdgroep = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->therapeutische_subgroep_code = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->therapeutische_subgroep = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->chemische_subgroep_code = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->chemische_subgroep = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->chemische_stofnaam_code = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->chemische_stofnaam = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->volledige_naam = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->merken = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = GsAtcCodesExtendedPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsAtcCodesExtended object", $e);
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
            $con = Propel::getConnection(GsAtcCodesExtendedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsAtcCodesExtendedPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsAtcCodesExtendedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsAtcCodesExtendedQuery::create()
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
            $con = Propel::getConnection(GsAtcCodesExtendedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsAtcCodesExtendedPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::ATCCODE)) {
            $modifiedColumns[':p' . $index++]  = '`atccode`';
        }
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::ATCNEDERLANDSE_OMSCHRIJVING)) {
            $modifiedColumns[':p' . $index++]  = '`atcnederlandse_omschrijving`';
        }
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::ANATOMISCHE_HOOFDGROEP_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`anatomische_hoofdgroep_code`';
        }
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::ANATOMISCHE_HOOFDGROEP)) {
            $modifiedColumns[':p' . $index++]  = '`anatomische_hoofdgroep`';
        }
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::THERAPEUTISCHE_HOOFDGROEP_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`therapeutische_hoofdgroep_code`';
        }
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::THERAPEUTISCHE_HOOFDGROEP)) {
            $modifiedColumns[':p' . $index++]  = '`therapeutische_hoofdgroep`';
        }
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::THERAPEUTISCHE_SUBGROEP_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`therapeutische_subgroep_code`';
        }
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::THERAPEUTISCHE_SUBGROEP)) {
            $modifiedColumns[':p' . $index++]  = '`therapeutische_subgroep`';
        }
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::CHEMISCHE_SUBGROEP_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`chemische_subgroep_code`';
        }
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::CHEMISCHE_SUBGROEP)) {
            $modifiedColumns[':p' . $index++]  = '`chemische_subgroep`';
        }
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::CHEMISCHE_STOFNAAM_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`chemische_stofnaam_code`';
        }
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::CHEMISCHE_STOFNAAM)) {
            $modifiedColumns[':p' . $index++]  = '`chemische_stofnaam`';
        }
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::VOLLEDIGE_NAAM)) {
            $modifiedColumns[':p' . $index++]  = '`volledige_naam`';
        }
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::MERKEN)) {
            $modifiedColumns[':p' . $index++]  = '`merken`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_atc_codes_extended` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`atccode`':
                        $stmt->bindValue($identifier, $this->atccode, PDO::PARAM_STR);
                        break;
                    case '`atcnederlandse_omschrijving`':
                        $stmt->bindValue($identifier, $this->atcnederlandse_omschrijving, PDO::PARAM_STR);
                        break;
                    case '`anatomische_hoofdgroep_code`':
                        $stmt->bindValue($identifier, $this->anatomische_hoofdgroep_code, PDO::PARAM_STR);
                        break;
                    case '`anatomische_hoofdgroep`':
                        $stmt->bindValue($identifier, $this->anatomische_hoofdgroep, PDO::PARAM_STR);
                        break;
                    case '`therapeutische_hoofdgroep_code`':
                        $stmt->bindValue($identifier, $this->therapeutische_hoofdgroep_code, PDO::PARAM_STR);
                        break;
                    case '`therapeutische_hoofdgroep`':
                        $stmt->bindValue($identifier, $this->therapeutische_hoofdgroep, PDO::PARAM_STR);
                        break;
                    case '`therapeutische_subgroep_code`':
                        $stmt->bindValue($identifier, $this->therapeutische_subgroep_code, PDO::PARAM_STR);
                        break;
                    case '`therapeutische_subgroep`':
                        $stmt->bindValue($identifier, $this->therapeutische_subgroep, PDO::PARAM_STR);
                        break;
                    case '`chemische_subgroep_code`':
                        $stmt->bindValue($identifier, $this->chemische_subgroep_code, PDO::PARAM_STR);
                        break;
                    case '`chemische_subgroep`':
                        $stmt->bindValue($identifier, $this->chemische_subgroep, PDO::PARAM_STR);
                        break;
                    case '`chemische_stofnaam_code`':
                        $stmt->bindValue($identifier, $this->chemische_stofnaam_code, PDO::PARAM_STR);
                        break;
                    case '`chemische_stofnaam`':
                        $stmt->bindValue($identifier, $this->chemische_stofnaam, PDO::PARAM_STR);
                        break;
                    case '`volledige_naam`':
                        $stmt->bindValue($identifier, $this->volledige_naam, PDO::PARAM_STR);
                        break;
                    case '`merken`':
                        $stmt->bindValue($identifier, $this->merken, PDO::PARAM_STR);
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


            if (($retval = GsAtcCodesExtendedPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsAtcCodesExtendedPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAtccode();
                break;
            case 1:
                return $this->getAtcnederlandseOmschrijving();
                break;
            case 2:
                return $this->getAnatomischeHoofdgroepCode();
                break;
            case 3:
                return $this->getAnatomischeHoofdgroep();
                break;
            case 4:
                return $this->getTherapeutischeHoofdgroepCode();
                break;
            case 5:
                return $this->getTherapeutischeHoofdgroep();
                break;
            case 6:
                return $this->getTherapeutischeSubgroepCode();
                break;
            case 7:
                return $this->getTherapeutischeSubgroep();
                break;
            case 8:
                return $this->getChemischeSubgroepCode();
                break;
            case 9:
                return $this->getChemischeSubgroep();
                break;
            case 10:
                return $this->getChemischeStofnaamCode();
                break;
            case 11:
                return $this->getChemischeStofnaam();
                break;
            case 12:
                return $this->getVolledigeNaam();
                break;
            case 13:
                return $this->getMerken();
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
        if (isset($alreadyDumpedObjects['GsAtcCodesExtended'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsAtcCodesExtended'][$this->getPrimaryKey()] = true;
        $keys = GsAtcCodesExtendedPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getAtccode(),
            $keys[1] => $this->getAtcnederlandseOmschrijving(),
            $keys[2] => $this->getAnatomischeHoofdgroepCode(),
            $keys[3] => $this->getAnatomischeHoofdgroep(),
            $keys[4] => $this->getTherapeutischeHoofdgroepCode(),
            $keys[5] => $this->getTherapeutischeHoofdgroep(),
            $keys[6] => $this->getTherapeutischeSubgroepCode(),
            $keys[7] => $this->getTherapeutischeSubgroep(),
            $keys[8] => $this->getChemischeSubgroepCode(),
            $keys[9] => $this->getChemischeSubgroep(),
            $keys[10] => $this->getChemischeStofnaamCode(),
            $keys[11] => $this->getChemischeStofnaam(),
            $keys[12] => $this->getVolledigeNaam(),
            $keys[13] => $this->getMerken(),
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
        $pos = GsAtcCodesExtendedPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAtccode($value);
                break;
            case 1:
                $this->setAtcnederlandseOmschrijving($value);
                break;
            case 2:
                $this->setAnatomischeHoofdgroepCode($value);
                break;
            case 3:
                $this->setAnatomischeHoofdgroep($value);
                break;
            case 4:
                $this->setTherapeutischeHoofdgroepCode($value);
                break;
            case 5:
                $this->setTherapeutischeHoofdgroep($value);
                break;
            case 6:
                $this->setTherapeutischeSubgroepCode($value);
                break;
            case 7:
                $this->setTherapeutischeSubgroep($value);
                break;
            case 8:
                $this->setChemischeSubgroepCode($value);
                break;
            case 9:
                $this->setChemischeSubgroep($value);
                break;
            case 10:
                $this->setChemischeStofnaamCode($value);
                break;
            case 11:
                $this->setChemischeStofnaam($value);
                break;
            case 12:
                $this->setVolledigeNaam($value);
                break;
            case 13:
                $this->setMerken($value);
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
        $keys = GsAtcCodesExtendedPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setAtccode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setAtcnederlandseOmschrijving($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAnatomischeHoofdgroepCode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAnatomischeHoofdgroep($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTherapeutischeHoofdgroepCode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTherapeutischeHoofdgroep($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTherapeutischeSubgroepCode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTherapeutischeSubgroep($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setChemischeSubgroepCode($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setChemischeSubgroep($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setChemischeStofnaamCode($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setChemischeStofnaam($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setVolledigeNaam($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setMerken($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsAtcCodesExtendedPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsAtcCodesExtendedPeer::ATCCODE)) $criteria->add(GsAtcCodesExtendedPeer::ATCCODE, $this->atccode);
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::ATCNEDERLANDSE_OMSCHRIJVING)) $criteria->add(GsAtcCodesExtendedPeer::ATCNEDERLANDSE_OMSCHRIJVING, $this->atcnederlandse_omschrijving);
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::ANATOMISCHE_HOOFDGROEP_CODE)) $criteria->add(GsAtcCodesExtendedPeer::ANATOMISCHE_HOOFDGROEP_CODE, $this->anatomische_hoofdgroep_code);
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::ANATOMISCHE_HOOFDGROEP)) $criteria->add(GsAtcCodesExtendedPeer::ANATOMISCHE_HOOFDGROEP, $this->anatomische_hoofdgroep);
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::THERAPEUTISCHE_HOOFDGROEP_CODE)) $criteria->add(GsAtcCodesExtendedPeer::THERAPEUTISCHE_HOOFDGROEP_CODE, $this->therapeutische_hoofdgroep_code);
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::THERAPEUTISCHE_HOOFDGROEP)) $criteria->add(GsAtcCodesExtendedPeer::THERAPEUTISCHE_HOOFDGROEP, $this->therapeutische_hoofdgroep);
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::THERAPEUTISCHE_SUBGROEP_CODE)) $criteria->add(GsAtcCodesExtendedPeer::THERAPEUTISCHE_SUBGROEP_CODE, $this->therapeutische_subgroep_code);
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::THERAPEUTISCHE_SUBGROEP)) $criteria->add(GsAtcCodesExtendedPeer::THERAPEUTISCHE_SUBGROEP, $this->therapeutische_subgroep);
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::CHEMISCHE_SUBGROEP_CODE)) $criteria->add(GsAtcCodesExtendedPeer::CHEMISCHE_SUBGROEP_CODE, $this->chemische_subgroep_code);
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::CHEMISCHE_SUBGROEP)) $criteria->add(GsAtcCodesExtendedPeer::CHEMISCHE_SUBGROEP, $this->chemische_subgroep);
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::CHEMISCHE_STOFNAAM_CODE)) $criteria->add(GsAtcCodesExtendedPeer::CHEMISCHE_STOFNAAM_CODE, $this->chemische_stofnaam_code);
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::CHEMISCHE_STOFNAAM)) $criteria->add(GsAtcCodesExtendedPeer::CHEMISCHE_STOFNAAM, $this->chemische_stofnaam);
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::VOLLEDIGE_NAAM)) $criteria->add(GsAtcCodesExtendedPeer::VOLLEDIGE_NAAM, $this->volledige_naam);
        if ($this->isColumnModified(GsAtcCodesExtendedPeer::MERKEN)) $criteria->add(GsAtcCodesExtendedPeer::MERKEN, $this->merken);

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
        $criteria = new Criteria(GsAtcCodesExtendedPeer::DATABASE_NAME);
        $criteria->add(GsAtcCodesExtendedPeer::ATCCODE, $this->atccode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getAtccode();
    }

    /**
     * Generic method to set the primary key (atccode column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setAtccode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getAtccode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsAtcCodesExtended (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAtcnederlandseOmschrijving($this->getAtcnederlandseOmschrijving());
        $copyObj->setAnatomischeHoofdgroepCode($this->getAnatomischeHoofdgroepCode());
        $copyObj->setAnatomischeHoofdgroep($this->getAnatomischeHoofdgroep());
        $copyObj->setTherapeutischeHoofdgroepCode($this->getTherapeutischeHoofdgroepCode());
        $copyObj->setTherapeutischeHoofdgroep($this->getTherapeutischeHoofdgroep());
        $copyObj->setTherapeutischeSubgroepCode($this->getTherapeutischeSubgroepCode());
        $copyObj->setTherapeutischeSubgroep($this->getTherapeutischeSubgroep());
        $copyObj->setChemischeSubgroepCode($this->getChemischeSubgroepCode());
        $copyObj->setChemischeSubgroep($this->getChemischeSubgroep());
        $copyObj->setChemischeStofnaamCode($this->getChemischeStofnaamCode());
        $copyObj->setChemischeStofnaam($this->getChemischeStofnaam());
        $copyObj->setVolledigeNaam($this->getVolledigeNaam());
        $copyObj->setMerken($this->getMerken());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            $relObj = $this->getGsAtcCodes();
            if ($relObj) {
                $copyObj->setGsAtcCodes($relObj->copy($deepCopy));
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setAtccode(NULL); // this is a auto-increment column, so set to default value
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
     * @return GsAtcCodesExtended Clone of current object.
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
     * @return GsAtcCodesExtendedPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsAtcCodesExtendedPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsAtcCodes object.
     *
     * @param                  GsAtcCodes $v
     * @return GsAtcCodesExtended The current object (for fluent API support)
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

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setGsAtcCodesExtended($this);
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
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aGsAtcCodes->setGsAtcCodesExtended($this);
        }

        return $this->aGsAtcCodes;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->atccode = null;
        $this->atcnederlandse_omschrijving = null;
        $this->anatomische_hoofdgroep_code = null;
        $this->anatomische_hoofdgroep = null;
        $this->therapeutische_hoofdgroep_code = null;
        $this->therapeutische_hoofdgroep = null;
        $this->therapeutische_subgroep_code = null;
        $this->therapeutische_subgroep = null;
        $this->chemische_subgroep_code = null;
        $this->chemische_subgroep = null;
        $this->chemische_stofnaam_code = null;
        $this->chemische_stofnaam = null;
        $this->volledige_naam = null;
        $this->merken = null;
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
        return (string) $this->exportTo(GsAtcCodesExtendedPeer::DEFAULT_STRING_FORMAT);
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
