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
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieBestand;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieBestandPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieBestandQuery;

abstract class BaseGsRelatieBestand extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRelatieBestandPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsRelatieBestandPeer
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
     * The value for the relatie_soort_nummer field.
     * @var        int
     */
    protected $relatie_soort_nummer;

    /**
     * The value for the verwijzing_identificatie_1_numeriek field.
     * @var        int
     */
    protected $verwijzing_identificatie_1_numeriek;

    /**
     * The value for the verwijzing_identificatie_1_alfanumeriek field.
     * @var        string
     */
    protected $verwijzing_identificatie_1_alfanumeriek;

    /**
     * The value for the verwijzing_identificatie_2_numeriek field.
     * @var        int
     */
    protected $verwijzing_identificatie_2_numeriek;

    /**
     * The value for the verwijzing_identificatie_2_alfanumeriek field.
     * @var        string
     */
    protected $verwijzing_identificatie_2_alfanumeriek;

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
     * Get the [relatie_soort_nummer] column value.
     *
     * @return int
     */
    public function getRelatieSoortNummer()
    {

        return $this->relatie_soort_nummer;
    }

    /**
     * Get the [verwijzing_identificatie_1_numeriek] column value.
     *
     * @return int
     */
    public function getVerwijzingIdentificatie1Numeriek()
    {

        return $this->verwijzing_identificatie_1_numeriek;
    }

    /**
     * Get the [verwijzing_identificatie_1_alfanumeriek] column value.
     *
     * @return string
     */
    public function getVerwijzingIdentificatie1Alfanumeriek()
    {

        return $this->verwijzing_identificatie_1_alfanumeriek;
    }

    /**
     * Get the [verwijzing_identificatie_2_numeriek] column value.
     *
     * @return int
     */
    public function getVerwijzingIdentificatie2Numeriek()
    {

        return $this->verwijzing_identificatie_2_numeriek;
    }

    /**
     * Get the [verwijzing_identificatie_2_alfanumeriek] column value.
     *
     * @return string
     */
    public function getVerwijzingIdentificatie2Alfanumeriek()
    {

        return $this->verwijzing_identificatie_2_alfanumeriek;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsRelatieBestand The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsRelatieBestandPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsRelatieBestand The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsRelatieBestandPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [relatie_soort_nummer] column.
     *
     * @param  int $v new value
     * @return GsRelatieBestand The current object (for fluent API support)
     */
    public function setRelatieSoortNummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->relatie_soort_nummer !== $v) {
            $this->relatie_soort_nummer = $v;
            $this->modifiedColumns[] = GsRelatieBestandPeer::RELATIE_SOORT_NUMMER;
        }


        return $this;
    } // setRelatieSoortNummer()

    /**
     * Set the value of [verwijzing_identificatie_1_numeriek] column.
     *
     * @param  int $v new value
     * @return GsRelatieBestand The current object (for fluent API support)
     */
    public function setVerwijzingIdentificatie1Numeriek($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->verwijzing_identificatie_1_numeriek !== $v) {
            $this->verwijzing_identificatie_1_numeriek = $v;
            $this->modifiedColumns[] = GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_NUMERIEK;
        }


        return $this;
    } // setVerwijzingIdentificatie1Numeriek()

    /**
     * Set the value of [verwijzing_identificatie_1_alfanumeriek] column.
     *
     * @param  string $v new value
     * @return GsRelatieBestand The current object (for fluent API support)
     */
    public function setVerwijzingIdentificatie1Alfanumeriek($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->verwijzing_identificatie_1_alfanumeriek !== $v) {
            $this->verwijzing_identificatie_1_alfanumeriek = $v;
            $this->modifiedColumns[] = GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_ALFANUMERIEK;
        }


        return $this;
    } // setVerwijzingIdentificatie1Alfanumeriek()

    /**
     * Set the value of [verwijzing_identificatie_2_numeriek] column.
     *
     * @param  int $v new value
     * @return GsRelatieBestand The current object (for fluent API support)
     */
    public function setVerwijzingIdentificatie2Numeriek($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->verwijzing_identificatie_2_numeriek !== $v) {
            $this->verwijzing_identificatie_2_numeriek = $v;
            $this->modifiedColumns[] = GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_NUMERIEK;
        }


        return $this;
    } // setVerwijzingIdentificatie2Numeriek()

    /**
     * Set the value of [verwijzing_identificatie_2_alfanumeriek] column.
     *
     * @param  string $v new value
     * @return GsRelatieBestand The current object (for fluent API support)
     */
    public function setVerwijzingIdentificatie2Alfanumeriek($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->verwijzing_identificatie_2_alfanumeriek !== $v) {
            $this->verwijzing_identificatie_2_alfanumeriek = $v;
            $this->modifiedColumns[] = GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_ALFANUMERIEK;
        }


        return $this;
    } // setVerwijzingIdentificatie2Alfanumeriek()

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
            $this->relatie_soort_nummer = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->verwijzing_identificatie_1_numeriek = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->verwijzing_identificatie_1_alfanumeriek = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->verwijzing_identificatie_2_numeriek = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->verwijzing_identificatie_2_alfanumeriek = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = GsRelatieBestandPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsRelatieBestand object", $e);
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
            $con = Propel::getConnection(GsRelatieBestandPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsRelatieBestandPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsRelatieBestandPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsRelatieBestandQuery::create()
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
            $con = Propel::getConnection(GsRelatieBestandPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsRelatieBestandPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsRelatieBestandPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsRelatieBestandPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsRelatieBestandPeer::RELATIE_SOORT_NUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`relatie_soort_nummer`';
        }
        if ($this->isColumnModified(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_NUMERIEK)) {
            $modifiedColumns[':p' . $index++]  = '`verwijzing_identificatie_1_numeriek`';
        }
        if ($this->isColumnModified(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_ALFANUMERIEK)) {
            $modifiedColumns[':p' . $index++]  = '`verwijzing_identificatie_1_alfanumeriek`';
        }
        if ($this->isColumnModified(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_NUMERIEK)) {
            $modifiedColumns[':p' . $index++]  = '`verwijzing_identificatie_2_numeriek`';
        }
        if ($this->isColumnModified(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_ALFANUMERIEK)) {
            $modifiedColumns[':p' . $index++]  = '`verwijzing_identificatie_2_alfanumeriek`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_relatie_bestand` (%s) VALUES (%s)',
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
                    case '`relatie_soort_nummer`':
                        $stmt->bindValue($identifier, $this->relatie_soort_nummer, PDO::PARAM_INT);
                        break;
                    case '`verwijzing_identificatie_1_numeriek`':
                        $stmt->bindValue($identifier, $this->verwijzing_identificatie_1_numeriek, PDO::PARAM_INT);
                        break;
                    case '`verwijzing_identificatie_1_alfanumeriek`':
                        $stmt->bindValue($identifier, $this->verwijzing_identificatie_1_alfanumeriek, PDO::PARAM_STR);
                        break;
                    case '`verwijzing_identificatie_2_numeriek`':
                        $stmt->bindValue($identifier, $this->verwijzing_identificatie_2_numeriek, PDO::PARAM_INT);
                        break;
                    case '`verwijzing_identificatie_2_alfanumeriek`':
                        $stmt->bindValue($identifier, $this->verwijzing_identificatie_2_alfanumeriek, PDO::PARAM_STR);
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


            if (($retval = GsRelatieBestandPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsRelatieBestandPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRelatieSoortNummer();
                break;
            case 3:
                return $this->getVerwijzingIdentificatie1Numeriek();
                break;
            case 4:
                return $this->getVerwijzingIdentificatie1Alfanumeriek();
                break;
            case 5:
                return $this->getVerwijzingIdentificatie2Numeriek();
                break;
            case 6:
                return $this->getVerwijzingIdentificatie2Alfanumeriek();
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
        if (isset($alreadyDumpedObjects['GsRelatieBestand'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsRelatieBestand'][serialize($this->getPrimaryKey())] = true;
        $keys = GsRelatieBestandPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getRelatieSoortNummer(),
            $keys[3] => $this->getVerwijzingIdentificatie1Numeriek(),
            $keys[4] => $this->getVerwijzingIdentificatie1Alfanumeriek(),
            $keys[5] => $this->getVerwijzingIdentificatie2Numeriek(),
            $keys[6] => $this->getVerwijzingIdentificatie2Alfanumeriek(),
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
        $pos = GsRelatieBestandPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRelatieSoortNummer($value);
                break;
            case 3:
                $this->setVerwijzingIdentificatie1Numeriek($value);
                break;
            case 4:
                $this->setVerwijzingIdentificatie1Alfanumeriek($value);
                break;
            case 5:
                $this->setVerwijzingIdentificatie2Numeriek($value);
                break;
            case 6:
                $this->setVerwijzingIdentificatie2Alfanumeriek($value);
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
        $keys = GsRelatieBestandPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRelatieSoortNummer($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setVerwijzingIdentificatie1Numeriek($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setVerwijzingIdentificatie1Alfanumeriek($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setVerwijzingIdentificatie2Numeriek($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setVerwijzingIdentificatie2Alfanumeriek($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsRelatieBestandPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsRelatieBestandPeer::BESTANDNUMMER)) $criteria->add(GsRelatieBestandPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsRelatieBestandPeer::MUTATIEKODE)) $criteria->add(GsRelatieBestandPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsRelatieBestandPeer::RELATIE_SOORT_NUMMER)) $criteria->add(GsRelatieBestandPeer::RELATIE_SOORT_NUMMER, $this->relatie_soort_nummer);
        if ($this->isColumnModified(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_NUMERIEK)) $criteria->add(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_NUMERIEK, $this->verwijzing_identificatie_1_numeriek);
        if ($this->isColumnModified(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_ALFANUMERIEK)) $criteria->add(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_ALFANUMERIEK, $this->verwijzing_identificatie_1_alfanumeriek);
        if ($this->isColumnModified(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_NUMERIEK)) $criteria->add(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_NUMERIEK, $this->verwijzing_identificatie_2_numeriek);
        if ($this->isColumnModified(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_ALFANUMERIEK)) $criteria->add(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_ALFANUMERIEK, $this->verwijzing_identificatie_2_alfanumeriek);

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
        $criteria = new Criteria(GsRelatieBestandPeer::DATABASE_NAME);
        $criteria->add(GsRelatieBestandPeer::RELATIE_SOORT_NUMMER, $this->relatie_soort_nummer);
        $criteria->add(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_NUMERIEK, $this->verwijzing_identificatie_1_numeriek);
        $criteria->add(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_ALFANUMERIEK, $this->verwijzing_identificatie_1_alfanumeriek);
        $criteria->add(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_NUMERIEK, $this->verwijzing_identificatie_2_numeriek);
        $criteria->add(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_ALFANUMERIEK, $this->verwijzing_identificatie_2_alfanumeriek);

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
        $pks[0] = $this->getRelatieSoortNummer();
        $pks[1] = $this->getVerwijzingIdentificatie1Numeriek();
        $pks[2] = $this->getVerwijzingIdentificatie1Alfanumeriek();
        $pks[3] = $this->getVerwijzingIdentificatie2Numeriek();
        $pks[4] = $this->getVerwijzingIdentificatie2Alfanumeriek();

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
        $this->setRelatieSoortNummer($keys[0]);
        $this->setVerwijzingIdentificatie1Numeriek($keys[1]);
        $this->setVerwijzingIdentificatie1Alfanumeriek($keys[2]);
        $this->setVerwijzingIdentificatie2Numeriek($keys[3]);
        $this->setVerwijzingIdentificatie2Alfanumeriek($keys[4]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getRelatieSoortNummer()) && (null === $this->getVerwijzingIdentificatie1Numeriek()) && (null === $this->getVerwijzingIdentificatie1Alfanumeriek()) && (null === $this->getVerwijzingIdentificatie2Numeriek()) && (null === $this->getVerwijzingIdentificatie2Alfanumeriek());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsRelatieBestand (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setRelatieSoortNummer($this->getRelatieSoortNummer());
        $copyObj->setVerwijzingIdentificatie1Numeriek($this->getVerwijzingIdentificatie1Numeriek());
        $copyObj->setVerwijzingIdentificatie1Alfanumeriek($this->getVerwijzingIdentificatie1Alfanumeriek());
        $copyObj->setVerwijzingIdentificatie2Numeriek($this->getVerwijzingIdentificatie2Numeriek());
        $copyObj->setVerwijzingIdentificatie2Alfanumeriek($this->getVerwijzingIdentificatie2Alfanumeriek());
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
     * @return GsRelatieBestand Clone of current object.
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
     * @return GsRelatieBestandPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsRelatieBestandPeer();
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
        $this->relatie_soort_nummer = null;
        $this->verwijzing_identificatie_1_numeriek = null;
        $this->verwijzing_identificatie_1_alfanumeriek = null;
        $this->verwijzing_identificatie_2_numeriek = null;
        $this->verwijzing_identificatie_2_alfanumeriek = null;
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
        return (string) $this->exportTo(GsRelatieBestandPeer::DEFAULT_STRING_FORMAT);
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
