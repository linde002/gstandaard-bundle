<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BaseObject;
use \BasePeer;
use \Criteria;
use \Exception;
use \PDO;
use \Persistent;
use \Propel;
use \PropelCollection;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodes;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesExtended;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesExtendedQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcdddgegevens;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcdddgegevensQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDose;
use PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDoseQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProducten;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery;

abstract class BaseGsAtcCodes extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAtcCodesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsAtcCodesPeer
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
     * The value for the atcnederlandse_omschrijving field.
     * @var        string
     */
    protected $atcnederlandse_omschrijving;

    /**
     * The value for the atcengelse_omschrijving field.
     * @var        string
     */
    protected $atcengelse_omschrijving;

    /**
     * The value for the atcindicator field.
     * @var        string
     */
    protected $atcindicator;

    /**
     * @var        PropelObjectCollection|GsArtikelEigenschappen[] Collection to store aggregation of GsArtikelEigenschappen objects.
     */
    protected $collGsArtikelEigenschappens;
    protected $collGsArtikelEigenschappensPartial;

    /**
     * @var        GsAtcCodesExtended one-to-one related GsAtcCodesExtended object
     */
    protected $singleGsAtcCodesExtended;

    /**
     * @var        PropelObjectCollection|GsAtcdddgegevens[] Collection to store aggregation of GsAtcdddgegevens objects.
     */
    protected $collGsAtcdddgegevenss;
    protected $collGsAtcdddgegevenssPartial;

    /**
     * @var        PropelObjectCollection|GsDailyDefinedDose[] Collection to store aggregation of GsDailyDefinedDose objects.
     */
    protected $collGsDailyDefinedDoses;
    protected $collGsDailyDefinedDosesPartial;

    /**
     * @var        PropelObjectCollection|GsGeneriekeProducten[] Collection to store aggregation of GsGeneriekeProducten objects.
     */
    protected $collGsGeneriekeProductens;
    protected $collGsGeneriekeProductensPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsArtikelEigenschappensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsAtcdddgegevenssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsDailyDefinedDosesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsGeneriekeProductensScheduledForDeletion = null;

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
     * Get the [atcnederlandse_omschrijving] column value.
     *
     * @return string
     */
    public function getAtcnederlandseOmschrijving()
    {

        return $this->atcnederlandse_omschrijving;
    }

    /**
     * Get the [atcengelse_omschrijving] column value.
     *
     * @return string
     */
    public function getAtcengelseOmschrijving()
    {

        return $this->atcengelse_omschrijving;
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
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsAtcCodes The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsAtcCodesPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsAtcCodes The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsAtcCodesPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [atccode] column.
     *
     * @param  string $v new value
     * @return GsAtcCodes The current object (for fluent API support)
     */
    public function setAtccode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->atccode !== $v) {
            $this->atccode = $v;
            $this->modifiedColumns[] = GsAtcCodesPeer::ATCCODE;
        }


        return $this;
    } // setAtccode()

    /**
     * Set the value of [atcnederlandse_omschrijving] column.
     *
     * @param  string $v new value
     * @return GsAtcCodes The current object (for fluent API support)
     */
    public function setAtcnederlandseOmschrijving($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->atcnederlandse_omschrijving !== $v) {
            $this->atcnederlandse_omschrijving = $v;
            $this->modifiedColumns[] = GsAtcCodesPeer::ATCNEDERLANDSE_OMSCHRIJVING;
        }


        return $this;
    } // setAtcnederlandseOmschrijving()

    /**
     * Set the value of [atcengelse_omschrijving] column.
     *
     * @param  string $v new value
     * @return GsAtcCodes The current object (for fluent API support)
     */
    public function setAtcengelseOmschrijving($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->atcengelse_omschrijving !== $v) {
            $this->atcengelse_omschrijving = $v;
            $this->modifiedColumns[] = GsAtcCodesPeer::ATCENGELSE_OMSCHRIJVING;
        }


        return $this;
    } // setAtcengelseOmschrijving()

    /**
     * Set the value of [atcindicator] column.
     *
     * @param  string $v new value
     * @return GsAtcCodes The current object (for fluent API support)
     */
    public function setAtcindicator($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->atcindicator !== $v) {
            $this->atcindicator = $v;
            $this->modifiedColumns[] = GsAtcCodesPeer::ATCINDICATOR;
        }


        return $this;
    } // setAtcindicator()

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
            $this->atcnederlandse_omschrijving = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->atcengelse_omschrijving = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->atcindicator = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = GsAtcCodesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsAtcCodes object", $e);
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
            $con = Propel::getConnection(GsAtcCodesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsAtcCodesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collGsArtikelEigenschappens = null;

            $this->singleGsAtcCodesExtended = null;

            $this->collGsAtcdddgegevenss = null;

            $this->collGsDailyDefinedDoses = null;

            $this->collGsGeneriekeProductens = null;

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
            $con = Propel::getConnection(GsAtcCodesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsAtcCodesQuery::create()
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
            $con = Propel::getConnection(GsAtcCodesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsAtcCodesPeer::addInstanceToPool($this);
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

            if ($this->gsArtikelEigenschappensScheduledForDeletion !== null) {
                if (!$this->gsArtikelEigenschappensScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsArtikelEigenschappensScheduledForDeletion as $gsArtikelEigenschappen) {
                        // need to save related object because we set the relation to null
                        $gsArtikelEigenschappen->save($con);
                    }
                    $this->gsArtikelEigenschappensScheduledForDeletion = null;
                }
            }

            if ($this->collGsArtikelEigenschappens !== null) {
                foreach ($this->collGsArtikelEigenschappens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->singleGsAtcCodesExtended !== null) {
                if (!$this->singleGsAtcCodesExtended->isDeleted() && ($this->singleGsAtcCodesExtended->isNew() || $this->singleGsAtcCodesExtended->isModified())) {
                        $affectedRows += $this->singleGsAtcCodesExtended->save($con);
                }
            }

            if ($this->gsAtcdddgegevenssScheduledForDeletion !== null) {
                if (!$this->gsAtcdddgegevenssScheduledForDeletion->isEmpty()) {
                    GsAtcdddgegevensQuery::create()
                        ->filterByPrimaryKeys($this->gsAtcdddgegevenssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->gsAtcdddgegevenssScheduledForDeletion = null;
                }
            }

            if ($this->collGsAtcdddgegevenss !== null) {
                foreach ($this->collGsAtcdddgegevenss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsDailyDefinedDosesScheduledForDeletion !== null) {
                if (!$this->gsDailyDefinedDosesScheduledForDeletion->isEmpty()) {
                    GsDailyDefinedDoseQuery::create()
                        ->filterByPrimaryKeys($this->gsDailyDefinedDosesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->gsDailyDefinedDosesScheduledForDeletion = null;
                }
            }

            if ($this->collGsDailyDefinedDoses !== null) {
                foreach ($this->collGsDailyDefinedDoses as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsGeneriekeProductensScheduledForDeletion !== null) {
                if (!$this->gsGeneriekeProductensScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsGeneriekeProductensScheduledForDeletion as $gsGeneriekeProducten) {
                        // need to save related object because we set the relation to null
                        $gsGeneriekeProducten->save($con);
                    }
                    $this->gsGeneriekeProductensScheduledForDeletion = null;
                }
            }

            if ($this->collGsGeneriekeProductens !== null) {
                foreach ($this->collGsGeneriekeProductens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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
        if ($this->isColumnModified(GsAtcCodesPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsAtcCodesPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsAtcCodesPeer::ATCCODE)) {
            $modifiedColumns[':p' . $index++]  = '`atccode`';
        }
        if ($this->isColumnModified(GsAtcCodesPeer::ATCNEDERLANDSE_OMSCHRIJVING)) {
            $modifiedColumns[':p' . $index++]  = '`atcnederlandse_omschrijving`';
        }
        if ($this->isColumnModified(GsAtcCodesPeer::ATCENGELSE_OMSCHRIJVING)) {
            $modifiedColumns[':p' . $index++]  = '`atcengelse_omschrijving`';
        }
        if ($this->isColumnModified(GsAtcCodesPeer::ATCINDICATOR)) {
            $modifiedColumns[':p' . $index++]  = '`atcindicator`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_atc_codes` (%s) VALUES (%s)',
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
                    case '`atcnederlandse_omschrijving`':
                        $stmt->bindValue($identifier, $this->atcnederlandse_omschrijving, PDO::PARAM_STR);
                        break;
                    case '`atcengelse_omschrijving`':
                        $stmt->bindValue($identifier, $this->atcengelse_omschrijving, PDO::PARAM_STR);
                        break;
                    case '`atcindicator`':
                        $stmt->bindValue($identifier, $this->atcindicator, PDO::PARAM_STR);
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


            if (($retval = GsAtcCodesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collGsArtikelEigenschappens !== null) {
                    foreach ($this->collGsArtikelEigenschappens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->singleGsAtcCodesExtended !== null) {
                    if (!$this->singleGsAtcCodesExtended->validate($columns)) {
                        $failureMap = array_merge($failureMap, $this->singleGsAtcCodesExtended->getValidationFailures());
                    }
                }

                if ($this->collGsAtcdddgegevenss !== null) {
                    foreach ($this->collGsAtcdddgegevenss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsDailyDefinedDoses !== null) {
                    foreach ($this->collGsDailyDefinedDoses as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsGeneriekeProductens !== null) {
                    foreach ($this->collGsGeneriekeProductens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = GsAtcCodesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAtcnederlandseOmschrijving();
                break;
            case 4:
                return $this->getAtcengelseOmschrijving();
                break;
            case 5:
                return $this->getAtcindicator();
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
        if (isset($alreadyDumpedObjects['GsAtcCodes'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsAtcCodes'][$this->getPrimaryKey()] = true;
        $keys = GsAtcCodesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getAtccode(),
            $keys[3] => $this->getAtcnederlandseOmschrijving(),
            $keys[4] => $this->getAtcengelseOmschrijving(),
            $keys[5] => $this->getAtcindicator(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collGsArtikelEigenschappens) {
                $result['GsArtikelEigenschappens'] = $this->collGsArtikelEigenschappens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->singleGsAtcCodesExtended) {
                $result['GsAtcCodesExtended'] = $this->singleGsAtcCodesExtended->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
            }
            if (null !== $this->collGsAtcdddgegevenss) {
                $result['GsAtcdddgegevenss'] = $this->collGsAtcdddgegevenss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsDailyDefinedDoses) {
                $result['GsDailyDefinedDoses'] = $this->collGsDailyDefinedDoses->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsGeneriekeProductens) {
                $result['GsGeneriekeProductens'] = $this->collGsGeneriekeProductens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = GsAtcCodesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAtcnederlandseOmschrijving($value);
                break;
            case 4:
                $this->setAtcengelseOmschrijving($value);
                break;
            case 5:
                $this->setAtcindicator($value);
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
        $keys = GsAtcCodesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAtccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAtcnederlandseOmschrijving($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAtcengelseOmschrijving($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAtcindicator($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsAtcCodesPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsAtcCodesPeer::BESTANDNUMMER)) $criteria->add(GsAtcCodesPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsAtcCodesPeer::MUTATIEKODE)) $criteria->add(GsAtcCodesPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsAtcCodesPeer::ATCCODE)) $criteria->add(GsAtcCodesPeer::ATCCODE, $this->atccode);
        if ($this->isColumnModified(GsAtcCodesPeer::ATCNEDERLANDSE_OMSCHRIJVING)) $criteria->add(GsAtcCodesPeer::ATCNEDERLANDSE_OMSCHRIJVING, $this->atcnederlandse_omschrijving);
        if ($this->isColumnModified(GsAtcCodesPeer::ATCENGELSE_OMSCHRIJVING)) $criteria->add(GsAtcCodesPeer::ATCENGELSE_OMSCHRIJVING, $this->atcengelse_omschrijving);
        if ($this->isColumnModified(GsAtcCodesPeer::ATCINDICATOR)) $criteria->add(GsAtcCodesPeer::ATCINDICATOR, $this->atcindicator);

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
        $criteria = new Criteria(GsAtcCodesPeer::DATABASE_NAME);
        $criteria->add(GsAtcCodesPeer::ATCCODE, $this->atccode);

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
     * @param object $copyObj An object of GsAtcCodes (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setAtcnederlandseOmschrijving($this->getAtcnederlandseOmschrijving());
        $copyObj->setAtcengelseOmschrijving($this->getAtcengelseOmschrijving());
        $copyObj->setAtcindicator($this->getAtcindicator());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getGsArtikelEigenschappens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsArtikelEigenschappen($relObj->copy($deepCopy));
                }
            }

            $relObj = $this->getGsAtcCodesExtended();
            if ($relObj) {
                $copyObj->setGsAtcCodesExtended($relObj->copy($deepCopy));
            }

            foreach ($this->getGsAtcdddgegevenss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsAtcdddgegevens($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsDailyDefinedDoses() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsDailyDefinedDose($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsGeneriekeProductens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsGeneriekeProducten($relObj->copy($deepCopy));
                }
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
     * @return GsAtcCodes Clone of current object.
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
     * @return GsAtcCodesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsAtcCodesPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('GsArtikelEigenschappen' == $relationName) {
            $this->initGsArtikelEigenschappens();
        }
        if ('GsAtcdddgegevens' == $relationName) {
            $this->initGsAtcdddgegevenss();
        }
        if ('GsDailyDefinedDose' == $relationName) {
            $this->initGsDailyDefinedDoses();
        }
        if ('GsGeneriekeProducten' == $relationName) {
            $this->initGsGeneriekeProductens();
        }
    }

    /**
     * Clears out the collGsArtikelEigenschappens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsAtcCodes The current object (for fluent API support)
     * @see        addGsArtikelEigenschappens()
     */
    public function clearGsArtikelEigenschappens()
    {
        $this->collGsArtikelEigenschappens = null; // important to set this to null since that means it is uninitialized
        $this->collGsArtikelEigenschappensPartial = null;

        return $this;
    }

    /**
     * reset is the collGsArtikelEigenschappens collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsArtikelEigenschappens($v = true)
    {
        $this->collGsArtikelEigenschappensPartial = $v;
    }

    /**
     * Initializes the collGsArtikelEigenschappens collection.
     *
     * By default this just sets the collGsArtikelEigenschappens collection to an empty array (like clearcollGsArtikelEigenschappens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsArtikelEigenschappens($overrideExisting = true)
    {
        if (null !== $this->collGsArtikelEigenschappens && !$overrideExisting) {
            return;
        }
        $this->collGsArtikelEigenschappens = new PropelObjectCollection();
        $this->collGsArtikelEigenschappens->setModel('GsArtikelEigenschappen');
    }

    /**
     * Gets an array of GsArtikelEigenschappen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsAtcCodes is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     * @throws PropelException
     */
    public function getGsArtikelEigenschappens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelEigenschappensPartial && !$this->isNew();
        if (null === $this->collGsArtikelEigenschappens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelEigenschappens) {
                // return empty collection
                $this->initGsArtikelEigenschappens();
            } else {
                $collGsArtikelEigenschappens = GsArtikelEigenschappenQuery::create(null, $criteria)
                    ->filterByGsAtcCodes($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsArtikelEigenschappensPartial && count($collGsArtikelEigenschappens)) {
                      $this->initGsArtikelEigenschappens(false);

                      foreach ($collGsArtikelEigenschappens as $obj) {
                        if (false == $this->collGsArtikelEigenschappens->contains($obj)) {
                          $this->collGsArtikelEigenschappens->append($obj);
                        }
                      }

                      $this->collGsArtikelEigenschappensPartial = true;
                    }

                    $collGsArtikelEigenschappens->getInternalIterator()->rewind();

                    return $collGsArtikelEigenschappens;
                }

                if ($partial && $this->collGsArtikelEigenschappens) {
                    foreach ($this->collGsArtikelEigenschappens as $obj) {
                        if ($obj->isNew()) {
                            $collGsArtikelEigenschappens[] = $obj;
                        }
                    }
                }

                $this->collGsArtikelEigenschappens = $collGsArtikelEigenschappens;
                $this->collGsArtikelEigenschappensPartial = false;
            }
        }

        return $this->collGsArtikelEigenschappens;
    }

    /**
     * Sets a collection of GsArtikelEigenschappen objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsArtikelEigenschappens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsAtcCodes The current object (for fluent API support)
     */
    public function setGsArtikelEigenschappens(PropelCollection $gsArtikelEigenschappens, PropelPDO $con = null)
    {
        $gsArtikelEigenschappensToDelete = $this->getGsArtikelEigenschappens(new Criteria(), $con)->diff($gsArtikelEigenschappens);


        $this->gsArtikelEigenschappensScheduledForDeletion = $gsArtikelEigenschappensToDelete;

        foreach ($gsArtikelEigenschappensToDelete as $gsArtikelEigenschappenRemoved) {
            $gsArtikelEigenschappenRemoved->setGsAtcCodes(null);
        }

        $this->collGsArtikelEigenschappens = null;
        foreach ($gsArtikelEigenschappens as $gsArtikelEigenschappen) {
            $this->addGsArtikelEigenschappen($gsArtikelEigenschappen);
        }

        $this->collGsArtikelEigenschappens = $gsArtikelEigenschappens;
        $this->collGsArtikelEigenschappensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsArtikelEigenschappen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsArtikelEigenschappen objects.
     * @throws PropelException
     */
    public function countGsArtikelEigenschappens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelEigenschappensPartial && !$this->isNew();
        if (null === $this->collGsArtikelEigenschappens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelEigenschappens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsArtikelEigenschappens());
            }
            $query = GsArtikelEigenschappenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsAtcCodes($this)
                ->count($con);
        }

        return count($this->collGsArtikelEigenschappens);
    }

    /**
     * Method called to associate a GsArtikelEigenschappen object to this object
     * through the GsArtikelEigenschappen foreign key attribute.
     *
     * @param    GsArtikelEigenschappen $l GsArtikelEigenschappen
     * @return GsAtcCodes The current object (for fluent API support)
     */
    public function addGsArtikelEigenschappen(GsArtikelEigenschappen $l)
    {
        if ($this->collGsArtikelEigenschappens === null) {
            $this->initGsArtikelEigenschappens();
            $this->collGsArtikelEigenschappensPartial = true;
        }

        if (!in_array($l, $this->collGsArtikelEigenschappens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsArtikelEigenschappen($l);

            if ($this->gsArtikelEigenschappensScheduledForDeletion and $this->gsArtikelEigenschappensScheduledForDeletion->contains($l)) {
                $this->gsArtikelEigenschappensScheduledForDeletion->remove($this->gsArtikelEigenschappensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsArtikelEigenschappen $gsArtikelEigenschappen The gsArtikelEigenschappen object to add.
     */
    protected function doAddGsArtikelEigenschappen($gsArtikelEigenschappen)
    {
        $this->collGsArtikelEigenschappens[]= $gsArtikelEigenschappen;
        $gsArtikelEigenschappen->setGsAtcCodes($this);
    }

    /**
     * @param	GsArtikelEigenschappen $gsArtikelEigenschappen The gsArtikelEigenschappen object to remove.
     * @return GsAtcCodes The current object (for fluent API support)
     */
    public function removeGsArtikelEigenschappen($gsArtikelEigenschappen)
    {
        if ($this->getGsArtikelEigenschappens()->contains($gsArtikelEigenschappen)) {
            $this->collGsArtikelEigenschappens->remove($this->collGsArtikelEigenschappens->search($gsArtikelEigenschappen));
            if (null === $this->gsArtikelEigenschappensScheduledForDeletion) {
                $this->gsArtikelEigenschappensScheduledForDeletion = clone $this->collGsArtikelEigenschappens;
                $this->gsArtikelEigenschappensScheduledForDeletion->clear();
            }
            $this->gsArtikelEigenschappensScheduledForDeletion[]= $gsArtikelEigenschappen;
            $gsArtikelEigenschappen->setGsAtcCodes(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsAtcCodes is new, it will return
     * an empty collection; or if this GsAtcCodes has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsAtcCodes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     */
    public function getGsArtikelEigenschappensJoinGsArtikelen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelEigenschappenQuery::create(null, $criteria);
        $query->joinWith('GsArtikelen', $join_behavior);

        return $this->getGsArtikelEigenschappens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsAtcCodes is new, it will return
     * an empty collection; or if this GsAtcCodes has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsAtcCodes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     */
    public function getGsArtikelEigenschappensJoinGsHandelsproducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelEigenschappenQuery::create(null, $criteria);
        $query->joinWith('GsHandelsproducten', $join_behavior);

        return $this->getGsArtikelEigenschappens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsAtcCodes is new, it will return
     * an empty collection; or if this GsAtcCodes has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsAtcCodes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     */
    public function getGsArtikelEigenschappensJoinGsNawGegevensGstandaard($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelEigenschappenQuery::create(null, $criteria);
        $query->joinWith('GsNawGegevensGstandaard', $join_behavior);

        return $this->getGsArtikelEigenschappens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsAtcCodes is new, it will return
     * an empty collection; or if this GsAtcCodes has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsAtcCodes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     */
    public function getGsArtikelEigenschappensJoinGsPrescriptieProduct($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelEigenschappenQuery::create(null, $criteria);
        $query->joinWith('GsPrescriptieProduct', $join_behavior);

        return $this->getGsArtikelEigenschappens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsAtcCodes is new, it will return
     * an empty collection; or if this GsAtcCodes has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsAtcCodes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     */
    public function getGsArtikelEigenschappensJoinGsGeneriekeProducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelEigenschappenQuery::create(null, $criteria);
        $query->joinWith('GsGeneriekeProducten', $join_behavior);

        return $this->getGsArtikelEigenschappens($query, $con);
    }

    /**
     * Gets a single GsAtcCodesExtended object, which is related to this object by a one-to-one relationship.
     *
     * @param PropelPDO $con optional connection object
     * @return GsAtcCodesExtended
     * @throws PropelException
     */
    public function getGsAtcCodesExtended(PropelPDO $con = null)
    {

        if ($this->singleGsAtcCodesExtended === null && !$this->isNew()) {
            $this->singleGsAtcCodesExtended = GsAtcCodesExtendedQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleGsAtcCodesExtended;
    }

    /**
     * Sets a single GsAtcCodesExtended object as related to this object by a one-to-one relationship.
     *
     * @param                  GsAtcCodesExtended $v GsAtcCodesExtended
     * @return GsAtcCodes The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsAtcCodesExtended(GsAtcCodesExtended $v = null)
    {
        $this->singleGsAtcCodesExtended = $v;

        // Make sure that that the passed-in GsAtcCodesExtended isn't already associated with this object
        if ($v !== null && $v->getGsAtcCodes(null, false) === null) {
            $v->setGsAtcCodes($this);
        }

        return $this;
    }

    /**
     * Clears out the collGsAtcdddgegevenss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsAtcCodes The current object (for fluent API support)
     * @see        addGsAtcdddgegevenss()
     */
    public function clearGsAtcdddgegevenss()
    {
        $this->collGsAtcdddgegevenss = null; // important to set this to null since that means it is uninitialized
        $this->collGsAtcdddgegevenssPartial = null;

        return $this;
    }

    /**
     * reset is the collGsAtcdddgegevenss collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsAtcdddgegevenss($v = true)
    {
        $this->collGsAtcdddgegevenssPartial = $v;
    }

    /**
     * Initializes the collGsAtcdddgegevenss collection.
     *
     * By default this just sets the collGsAtcdddgegevenss collection to an empty array (like clearcollGsAtcdddgegevenss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsAtcdddgegevenss($overrideExisting = true)
    {
        if (null !== $this->collGsAtcdddgegevenss && !$overrideExisting) {
            return;
        }
        $this->collGsAtcdddgegevenss = new PropelObjectCollection();
        $this->collGsAtcdddgegevenss->setModel('GsAtcdddgegevens');
    }

    /**
     * Gets an array of GsAtcdddgegevens objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsAtcCodes is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsAtcdddgegevens[] List of GsAtcdddgegevens objects
     * @throws PropelException
     */
    public function getGsAtcdddgegevenss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsAtcdddgegevenssPartial && !$this->isNew();
        if (null === $this->collGsAtcdddgegevenss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsAtcdddgegevenss) {
                // return empty collection
                $this->initGsAtcdddgegevenss();
            } else {
                $collGsAtcdddgegevenss = GsAtcdddgegevensQuery::create(null, $criteria)
                    ->filterByGsAtcCodes($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsAtcdddgegevenssPartial && count($collGsAtcdddgegevenss)) {
                      $this->initGsAtcdddgegevenss(false);

                      foreach ($collGsAtcdddgegevenss as $obj) {
                        if (false == $this->collGsAtcdddgegevenss->contains($obj)) {
                          $this->collGsAtcdddgegevenss->append($obj);
                        }
                      }

                      $this->collGsAtcdddgegevenssPartial = true;
                    }

                    $collGsAtcdddgegevenss->getInternalIterator()->rewind();

                    return $collGsAtcdddgegevenss;
                }

                if ($partial && $this->collGsAtcdddgegevenss) {
                    foreach ($this->collGsAtcdddgegevenss as $obj) {
                        if ($obj->isNew()) {
                            $collGsAtcdddgegevenss[] = $obj;
                        }
                    }
                }

                $this->collGsAtcdddgegevenss = $collGsAtcdddgegevenss;
                $this->collGsAtcdddgegevenssPartial = false;
            }
        }

        return $this->collGsAtcdddgegevenss;
    }

    /**
     * Sets a collection of GsAtcdddgegevens objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsAtcdddgegevenss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsAtcCodes The current object (for fluent API support)
     */
    public function setGsAtcdddgegevenss(PropelCollection $gsAtcdddgegevenss, PropelPDO $con = null)
    {
        $gsAtcdddgegevenssToDelete = $this->getGsAtcdddgegevenss(new Criteria(), $con)->diff($gsAtcdddgegevenss);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsAtcdddgegevenssScheduledForDeletion = clone $gsAtcdddgegevenssToDelete;

        foreach ($gsAtcdddgegevenssToDelete as $gsAtcdddgegevensRemoved) {
            $gsAtcdddgegevensRemoved->setGsAtcCodes(null);
        }

        $this->collGsAtcdddgegevenss = null;
        foreach ($gsAtcdddgegevenss as $gsAtcdddgegevens) {
            $this->addGsAtcdddgegevens($gsAtcdddgegevens);
        }

        $this->collGsAtcdddgegevenss = $gsAtcdddgegevenss;
        $this->collGsAtcdddgegevenssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsAtcdddgegevens objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsAtcdddgegevens objects.
     * @throws PropelException
     */
    public function countGsAtcdddgegevenss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsAtcdddgegevenssPartial && !$this->isNew();
        if (null === $this->collGsAtcdddgegevenss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsAtcdddgegevenss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsAtcdddgegevenss());
            }
            $query = GsAtcdddgegevensQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsAtcCodes($this)
                ->count($con);
        }

        return count($this->collGsAtcdddgegevenss);
    }

    /**
     * Method called to associate a GsAtcdddgegevens object to this object
     * through the GsAtcdddgegevens foreign key attribute.
     *
     * @param    GsAtcdddgegevens $l GsAtcdddgegevens
     * @return GsAtcCodes The current object (for fluent API support)
     */
    public function addGsAtcdddgegevens(GsAtcdddgegevens $l)
    {
        if ($this->collGsAtcdddgegevenss === null) {
            $this->initGsAtcdddgegevenss();
            $this->collGsAtcdddgegevenssPartial = true;
        }

        if (!in_array($l, $this->collGsAtcdddgegevenss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsAtcdddgegevens($l);

            if ($this->gsAtcdddgegevenssScheduledForDeletion and $this->gsAtcdddgegevenssScheduledForDeletion->contains($l)) {
                $this->gsAtcdddgegevenssScheduledForDeletion->remove($this->gsAtcdddgegevenssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsAtcdddgegevens $gsAtcdddgegevens The gsAtcdddgegevens object to add.
     */
    protected function doAddGsAtcdddgegevens($gsAtcdddgegevens)
    {
        $this->collGsAtcdddgegevenss[]= $gsAtcdddgegevens;
        $gsAtcdddgegevens->setGsAtcCodes($this);
    }

    /**
     * @param	GsAtcdddgegevens $gsAtcdddgegevens The gsAtcdddgegevens object to remove.
     * @return GsAtcCodes The current object (for fluent API support)
     */
    public function removeGsAtcdddgegevens($gsAtcdddgegevens)
    {
        if ($this->getGsAtcdddgegevenss()->contains($gsAtcdddgegevens)) {
            $this->collGsAtcdddgegevenss->remove($this->collGsAtcdddgegevenss->search($gsAtcdddgegevens));
            if (null === $this->gsAtcdddgegevenssScheduledForDeletion) {
                $this->gsAtcdddgegevenssScheduledForDeletion = clone $this->collGsAtcdddgegevenss;
                $this->gsAtcdddgegevenssScheduledForDeletion->clear();
            }
            $this->gsAtcdddgegevenssScheduledForDeletion[]= clone $gsAtcdddgegevens;
            $gsAtcdddgegevens->setGsAtcCodes(null);
        }

        return $this;
    }

    /**
     * Clears out the collGsDailyDefinedDoses collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsAtcCodes The current object (for fluent API support)
     * @see        addGsDailyDefinedDoses()
     */
    public function clearGsDailyDefinedDoses()
    {
        $this->collGsDailyDefinedDoses = null; // important to set this to null since that means it is uninitialized
        $this->collGsDailyDefinedDosesPartial = null;

        return $this;
    }

    /**
     * reset is the collGsDailyDefinedDoses collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsDailyDefinedDoses($v = true)
    {
        $this->collGsDailyDefinedDosesPartial = $v;
    }

    /**
     * Initializes the collGsDailyDefinedDoses collection.
     *
     * By default this just sets the collGsDailyDefinedDoses collection to an empty array (like clearcollGsDailyDefinedDoses());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsDailyDefinedDoses($overrideExisting = true)
    {
        if (null !== $this->collGsDailyDefinedDoses && !$overrideExisting) {
            return;
        }
        $this->collGsDailyDefinedDoses = new PropelObjectCollection();
        $this->collGsDailyDefinedDoses->setModel('GsDailyDefinedDose');
    }

    /**
     * Gets an array of GsDailyDefinedDose objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsAtcCodes is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsDailyDefinedDose[] List of GsDailyDefinedDose objects
     * @throws PropelException
     */
    public function getGsDailyDefinedDoses($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsDailyDefinedDosesPartial && !$this->isNew();
        if (null === $this->collGsDailyDefinedDoses || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsDailyDefinedDoses) {
                // return empty collection
                $this->initGsDailyDefinedDoses();
            } else {
                $collGsDailyDefinedDoses = GsDailyDefinedDoseQuery::create(null, $criteria)
                    ->filterByGsAtcCodes($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsDailyDefinedDosesPartial && count($collGsDailyDefinedDoses)) {
                      $this->initGsDailyDefinedDoses(false);

                      foreach ($collGsDailyDefinedDoses as $obj) {
                        if (false == $this->collGsDailyDefinedDoses->contains($obj)) {
                          $this->collGsDailyDefinedDoses->append($obj);
                        }
                      }

                      $this->collGsDailyDefinedDosesPartial = true;
                    }

                    $collGsDailyDefinedDoses->getInternalIterator()->rewind();

                    return $collGsDailyDefinedDoses;
                }

                if ($partial && $this->collGsDailyDefinedDoses) {
                    foreach ($this->collGsDailyDefinedDoses as $obj) {
                        if ($obj->isNew()) {
                            $collGsDailyDefinedDoses[] = $obj;
                        }
                    }
                }

                $this->collGsDailyDefinedDoses = $collGsDailyDefinedDoses;
                $this->collGsDailyDefinedDosesPartial = false;
            }
        }

        return $this->collGsDailyDefinedDoses;
    }

    /**
     * Sets a collection of GsDailyDefinedDose objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsDailyDefinedDoses A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsAtcCodes The current object (for fluent API support)
     */
    public function setGsDailyDefinedDoses(PropelCollection $gsDailyDefinedDoses, PropelPDO $con = null)
    {
        $gsDailyDefinedDosesToDelete = $this->getGsDailyDefinedDoses(new Criteria(), $con)->diff($gsDailyDefinedDoses);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsDailyDefinedDosesScheduledForDeletion = clone $gsDailyDefinedDosesToDelete;

        foreach ($gsDailyDefinedDosesToDelete as $gsDailyDefinedDoseRemoved) {
            $gsDailyDefinedDoseRemoved->setGsAtcCodes(null);
        }

        $this->collGsDailyDefinedDoses = null;
        foreach ($gsDailyDefinedDoses as $gsDailyDefinedDose) {
            $this->addGsDailyDefinedDose($gsDailyDefinedDose);
        }

        $this->collGsDailyDefinedDoses = $gsDailyDefinedDoses;
        $this->collGsDailyDefinedDosesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsDailyDefinedDose objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsDailyDefinedDose objects.
     * @throws PropelException
     */
    public function countGsDailyDefinedDoses(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsDailyDefinedDosesPartial && !$this->isNew();
        if (null === $this->collGsDailyDefinedDoses || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsDailyDefinedDoses) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsDailyDefinedDoses());
            }
            $query = GsDailyDefinedDoseQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsAtcCodes($this)
                ->count($con);
        }

        return count($this->collGsDailyDefinedDoses);
    }

    /**
     * Method called to associate a GsDailyDefinedDose object to this object
     * through the GsDailyDefinedDose foreign key attribute.
     *
     * @param    GsDailyDefinedDose $l GsDailyDefinedDose
     * @return GsAtcCodes The current object (for fluent API support)
     */
    public function addGsDailyDefinedDose(GsDailyDefinedDose $l)
    {
        if ($this->collGsDailyDefinedDoses === null) {
            $this->initGsDailyDefinedDoses();
            $this->collGsDailyDefinedDosesPartial = true;
        }

        if (!in_array($l, $this->collGsDailyDefinedDoses->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsDailyDefinedDose($l);

            if ($this->gsDailyDefinedDosesScheduledForDeletion and $this->gsDailyDefinedDosesScheduledForDeletion->contains($l)) {
                $this->gsDailyDefinedDosesScheduledForDeletion->remove($this->gsDailyDefinedDosesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsDailyDefinedDose $gsDailyDefinedDose The gsDailyDefinedDose object to add.
     */
    protected function doAddGsDailyDefinedDose($gsDailyDefinedDose)
    {
        $this->collGsDailyDefinedDoses[]= $gsDailyDefinedDose;
        $gsDailyDefinedDose->setGsAtcCodes($this);
    }

    /**
     * @param	GsDailyDefinedDose $gsDailyDefinedDose The gsDailyDefinedDose object to remove.
     * @return GsAtcCodes The current object (for fluent API support)
     */
    public function removeGsDailyDefinedDose($gsDailyDefinedDose)
    {
        if ($this->getGsDailyDefinedDoses()->contains($gsDailyDefinedDose)) {
            $this->collGsDailyDefinedDoses->remove($this->collGsDailyDefinedDoses->search($gsDailyDefinedDose));
            if (null === $this->gsDailyDefinedDosesScheduledForDeletion) {
                $this->gsDailyDefinedDosesScheduledForDeletion = clone $this->collGsDailyDefinedDoses;
                $this->gsDailyDefinedDosesScheduledForDeletion->clear();
            }
            $this->gsDailyDefinedDosesScheduledForDeletion[]= clone $gsDailyDefinedDose;
            $gsDailyDefinedDose->setGsAtcCodes(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsAtcCodes is new, it will return
     * an empty collection; or if this GsAtcCodes has previously
     * been saved, it will retrieve related GsDailyDefinedDoses from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsAtcCodes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsDailyDefinedDose[] List of GsDailyDefinedDose objects
     */
    public function getGsDailyDefinedDosesJoinEenheidOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsDailyDefinedDoseQuery::create(null, $criteria);
        $query->joinWith('EenheidOmschrijving', $join_behavior);

        return $this->getGsDailyDefinedDoses($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsAtcCodes is new, it will return
     * an empty collection; or if this GsAtcCodes has previously
     * been saved, it will retrieve related GsDailyDefinedDoses from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsAtcCodes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsDailyDefinedDose[] List of GsDailyDefinedDose objects
     */
    public function getGsDailyDefinedDosesJoinToedieningswegOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsDailyDefinedDoseQuery::create(null, $criteria);
        $query->joinWith('ToedieningswegOmschrijving', $join_behavior);

        return $this->getGsDailyDefinedDoses($query, $con);
    }

    /**
     * Clears out the collGsGeneriekeProductens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsAtcCodes The current object (for fluent API support)
     * @see        addGsGeneriekeProductens()
     */
    public function clearGsGeneriekeProductens()
    {
        $this->collGsGeneriekeProductens = null; // important to set this to null since that means it is uninitialized
        $this->collGsGeneriekeProductensPartial = null;

        return $this;
    }

    /**
     * reset is the collGsGeneriekeProductens collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsGeneriekeProductens($v = true)
    {
        $this->collGsGeneriekeProductensPartial = $v;
    }

    /**
     * Initializes the collGsGeneriekeProductens collection.
     *
     * By default this just sets the collGsGeneriekeProductens collection to an empty array (like clearcollGsGeneriekeProductens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsGeneriekeProductens($overrideExisting = true)
    {
        if (null !== $this->collGsGeneriekeProductens && !$overrideExisting) {
            return;
        }
        $this->collGsGeneriekeProductens = new PropelObjectCollection();
        $this->collGsGeneriekeProductens->setModel('GsGeneriekeProducten');
    }

    /**
     * Gets an array of GsGeneriekeProducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsAtcCodes is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     * @throws PropelException
     */
    public function getGsGeneriekeProductens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsGeneriekeProductensPartial && !$this->isNew();
        if (null === $this->collGsGeneriekeProductens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsGeneriekeProductens) {
                // return empty collection
                $this->initGsGeneriekeProductens();
            } else {
                $collGsGeneriekeProductens = GsGeneriekeProductenQuery::create(null, $criteria)
                    ->filterByGsAtcCodes($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsGeneriekeProductensPartial && count($collGsGeneriekeProductens)) {
                      $this->initGsGeneriekeProductens(false);

                      foreach ($collGsGeneriekeProductens as $obj) {
                        if (false == $this->collGsGeneriekeProductens->contains($obj)) {
                          $this->collGsGeneriekeProductens->append($obj);
                        }
                      }

                      $this->collGsGeneriekeProductensPartial = true;
                    }

                    $collGsGeneriekeProductens->getInternalIterator()->rewind();

                    return $collGsGeneriekeProductens;
                }

                if ($partial && $this->collGsGeneriekeProductens) {
                    foreach ($this->collGsGeneriekeProductens as $obj) {
                        if ($obj->isNew()) {
                            $collGsGeneriekeProductens[] = $obj;
                        }
                    }
                }

                $this->collGsGeneriekeProductens = $collGsGeneriekeProductens;
                $this->collGsGeneriekeProductensPartial = false;
            }
        }

        return $this->collGsGeneriekeProductens;
    }

    /**
     * Sets a collection of GsGeneriekeProducten objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsGeneriekeProductens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsAtcCodes The current object (for fluent API support)
     */
    public function setGsGeneriekeProductens(PropelCollection $gsGeneriekeProductens, PropelPDO $con = null)
    {
        $gsGeneriekeProductensToDelete = $this->getGsGeneriekeProductens(new Criteria(), $con)->diff($gsGeneriekeProductens);


        $this->gsGeneriekeProductensScheduledForDeletion = $gsGeneriekeProductensToDelete;

        foreach ($gsGeneriekeProductensToDelete as $gsGeneriekeProductenRemoved) {
            $gsGeneriekeProductenRemoved->setGsAtcCodes(null);
        }

        $this->collGsGeneriekeProductens = null;
        foreach ($gsGeneriekeProductens as $gsGeneriekeProducten) {
            $this->addGsGeneriekeProducten($gsGeneriekeProducten);
        }

        $this->collGsGeneriekeProductens = $gsGeneriekeProductens;
        $this->collGsGeneriekeProductensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsGeneriekeProducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsGeneriekeProducten objects.
     * @throws PropelException
     */
    public function countGsGeneriekeProductens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsGeneriekeProductensPartial && !$this->isNew();
        if (null === $this->collGsGeneriekeProductens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsGeneriekeProductens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsGeneriekeProductens());
            }
            $query = GsGeneriekeProductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsAtcCodes($this)
                ->count($con);
        }

        return count($this->collGsGeneriekeProductens);
    }

    /**
     * Method called to associate a GsGeneriekeProducten object to this object
     * through the GsGeneriekeProducten foreign key attribute.
     *
     * @param    GsGeneriekeProducten $l GsGeneriekeProducten
     * @return GsAtcCodes The current object (for fluent API support)
     */
    public function addGsGeneriekeProducten(GsGeneriekeProducten $l)
    {
        if ($this->collGsGeneriekeProductens === null) {
            $this->initGsGeneriekeProductens();
            $this->collGsGeneriekeProductensPartial = true;
        }

        if (!in_array($l, $this->collGsGeneriekeProductens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsGeneriekeProducten($l);

            if ($this->gsGeneriekeProductensScheduledForDeletion and $this->gsGeneriekeProductensScheduledForDeletion->contains($l)) {
                $this->gsGeneriekeProductensScheduledForDeletion->remove($this->gsGeneriekeProductensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsGeneriekeProducten $gsGeneriekeProducten The gsGeneriekeProducten object to add.
     */
    protected function doAddGsGeneriekeProducten($gsGeneriekeProducten)
    {
        $this->collGsGeneriekeProductens[]= $gsGeneriekeProducten;
        $gsGeneriekeProducten->setGsAtcCodes($this);
    }

    /**
     * @param	GsGeneriekeProducten $gsGeneriekeProducten The gsGeneriekeProducten object to remove.
     * @return GsAtcCodes The current object (for fluent API support)
     */
    public function removeGsGeneriekeProducten($gsGeneriekeProducten)
    {
        if ($this->getGsGeneriekeProductens()->contains($gsGeneriekeProducten)) {
            $this->collGsGeneriekeProductens->remove($this->collGsGeneriekeProductens->search($gsGeneriekeProducten));
            if (null === $this->gsGeneriekeProductensScheduledForDeletion) {
                $this->gsGeneriekeProductensScheduledForDeletion = clone $this->collGsGeneriekeProductens;
                $this->gsGeneriekeProductensScheduledForDeletion->clear();
            }
            $this->gsGeneriekeProductensScheduledForDeletion[]= $gsGeneriekeProducten;
            $gsGeneriekeProducten->setGsAtcCodes(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsAtcCodes is new, it will return
     * an empty collection; or if this GsAtcCodes has previously
     * been saved, it will retrieve related GsGeneriekeProductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsAtcCodes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     */
    public function getGsGeneriekeProductensJoinGsNamenRelatedByNaamnummerVolledigeGpknaam($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsGeneriekeProductenQuery::create(null, $criteria);
        $query->joinWith('GsNamenRelatedByNaamnummerVolledigeGpknaam', $join_behavior);

        return $this->getGsGeneriekeProductens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsAtcCodes is new, it will return
     * an empty collection; or if this GsAtcCodes has previously
     * been saved, it will retrieve related GsGeneriekeProductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsAtcCodes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     */
    public function getGsGeneriekeProductensJoinStofnaam($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsGeneriekeProductenQuery::create(null, $criteria);
        $query->joinWith('Stofnaam', $join_behavior);

        return $this->getGsGeneriekeProductens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsAtcCodes is new, it will return
     * an empty collection; or if this GsAtcCodes has previously
     * been saved, it will retrieve related GsGeneriekeProductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsAtcCodes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     */
    public function getGsGeneriekeProductensJoinFarmaceutischeVormOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsGeneriekeProductenQuery::create(null, $criteria);
        $query->joinWith('FarmaceutischeVormOmschrijving', $join_behavior);

        return $this->getGsGeneriekeProductens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsAtcCodes is new, it will return
     * an empty collection; or if this GsAtcCodes has previously
     * been saved, it will retrieve related GsGeneriekeProductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsAtcCodes.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     */
    public function getGsGeneriekeProductensJoinToedieningswegOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsGeneriekeProductenQuery::create(null, $criteria);
        $query->joinWith('ToedieningswegOmschrijving', $join_behavior);

        return $this->getGsGeneriekeProductens($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->atccode = null;
        $this->atcnederlandse_omschrijving = null;
        $this->atcengelse_omschrijving = null;
        $this->atcindicator = null;
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
            if ($this->collGsArtikelEigenschappens) {
                foreach ($this->collGsArtikelEigenschappens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->singleGsAtcCodesExtended) {
                $this->singleGsAtcCodesExtended->clearAllReferences($deep);
            }
            if ($this->collGsAtcdddgegevenss) {
                foreach ($this->collGsAtcdddgegevenss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsDailyDefinedDoses) {
                foreach ($this->collGsDailyDefinedDoses as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsGeneriekeProductens) {
                foreach ($this->collGsGeneriekeProductens as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collGsArtikelEigenschappens instanceof PropelCollection) {
            $this->collGsArtikelEigenschappens->clearIterator();
        }
        $this->collGsArtikelEigenschappens = null;
        if ($this->singleGsAtcCodesExtended instanceof PropelCollection) {
            $this->singleGsAtcCodesExtended->clearIterator();
        }
        $this->singleGsAtcCodesExtended = null;
        if ($this->collGsAtcdddgegevenss instanceof PropelCollection) {
            $this->collGsAtcdddgegevenss->clearIterator();
        }
        $this->collGsAtcdddgegevenss = null;
        if ($this->collGsDailyDefinedDoses instanceof PropelCollection) {
            $this->collGsDailyDefinedDoses->clearIterator();
        }
        $this->collGsDailyDefinedDoses = null;
        if ($this->collGsGeneriekeProductens instanceof PropelCollection) {
            $this->collGsGeneriekeProductens->clearIterator();
        }
        $this->collGsGeneriekeProductens = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsAtcCodesPeer::DEFAULT_STRING_FORMAT);
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
