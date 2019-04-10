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
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieOngewensteGroepensnk;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieOngewensteGroepensnkPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieOngewensteGroepensnkQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery;

abstract class BaseGsRelatieOngewensteGroepensnk extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRelatieOngewensteGroepensnkPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsRelatieOngewensteGroepensnkPeer
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
     * The value for the stamnaamcode field.
     * @var        int
     */
    protected $stamnaamcode;

    /**
     * The value for the ongewenste_groepen_thesaurus_122 field.
     * @var        int
     */
    protected $ongewenste_groepen_thesaurus_122;

    /**
     * The value for the ongewenste_groepsnummer field.
     * @var        int
     */
    protected $ongewenste_groepsnummer;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aOngewensteGroepenOmschrijving;

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
     * Get the [stamnaamcode] column value.
     *
     * @return int
     */
    public function getStamnaamcode()
    {

        return $this->stamnaamcode;
    }

    /**
     * Get the [ongewenste_groepen_thesaurus_122] column value.
     *
     * @return int
     */
    public function getOngewensteGroepenThesaurus122()
    {

        return $this->ongewenste_groepen_thesaurus_122;
    }

    /**
     * Get the [ongewenste_groepsnummer] column value.
     *
     * @return int
     */
    public function getOngewensteGroepsnummer()
    {

        return $this->ongewenste_groepsnummer;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsRelatieOngewensteGroepensnk The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsRelatieOngewensteGroepensnkPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsRelatieOngewensteGroepensnk The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsRelatieOngewensteGroepensnkPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [stamnaamcode] column.
     *
     * @param  int $v new value
     * @return GsRelatieOngewensteGroepensnk The current object (for fluent API support)
     */
    public function setStamnaamcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stamnaamcode !== $v) {
            $this->stamnaamcode = $v;
            $this->modifiedColumns[] = GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE;
        }


        return $this;
    } // setStamnaamcode()

    /**
     * Set the value of [ongewenste_groepen_thesaurus_122] column.
     *
     * @param  int $v new value
     * @return GsRelatieOngewensteGroepensnk The current object (for fluent API support)
     */
    public function setOngewensteGroepenThesaurus122($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ongewenste_groepen_thesaurus_122 !== $v) {
            $this->ongewenste_groepen_thesaurus_122 = $v;
            $this->modifiedColumns[] = GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPEN_THESAURUS_122;
        }

        if ($this->aOngewensteGroepenOmschrijving !== null && $this->aOngewensteGroepenOmschrijving->getThesaurusnummer() !== $v) {
            $this->aOngewensteGroepenOmschrijving = null;
        }


        return $this;
    } // setOngewensteGroepenThesaurus122()

    /**
     * Set the value of [ongewenste_groepsnummer] column.
     *
     * @param  int $v new value
     * @return GsRelatieOngewensteGroepensnk The current object (for fluent API support)
     */
    public function setOngewensteGroepsnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ongewenste_groepsnummer !== $v) {
            $this->ongewenste_groepsnummer = $v;
            $this->modifiedColumns[] = GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER;
        }

        if ($this->aOngewensteGroepenOmschrijving !== null && $this->aOngewensteGroepenOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aOngewensteGroepenOmschrijving = null;
        }


        return $this;
    } // setOngewensteGroepsnummer()

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
            $this->stamnaamcode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->ongewenste_groepen_thesaurus_122 = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->ongewenste_groepsnummer = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = GsRelatieOngewensteGroepensnkPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsRelatieOngewensteGroepensnk object", $e);
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

        if ($this->aOngewensteGroepenOmschrijving !== null && $this->ongewenste_groepen_thesaurus_122 !== $this->aOngewensteGroepenOmschrijving->getThesaurusnummer()) {
            $this->aOngewensteGroepenOmschrijving = null;
        }
        if ($this->aOngewensteGroepenOmschrijving !== null && $this->ongewenste_groepsnummer !== $this->aOngewensteGroepenOmschrijving->getThesaurusItemnummer()) {
            $this->aOngewensteGroepenOmschrijving = null;
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
            $con = Propel::getConnection(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsRelatieOngewensteGroepensnkPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aOngewensteGroepenOmschrijving = null;
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
            $con = Propel::getConnection(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsRelatieOngewensteGroepensnkQuery::create()
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
            $con = Propel::getConnection(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsRelatieOngewensteGroepensnkPeer::addInstanceToPool($this);
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

            if ($this->aOngewensteGroepenOmschrijving !== null) {
                if ($this->aOngewensteGroepenOmschrijving->isModified() || $this->aOngewensteGroepenOmschrijving->isNew()) {
                    $affectedRows += $this->aOngewensteGroepenOmschrijving->save($con);
                }
                $this->setOngewensteGroepenOmschrijving($this->aOngewensteGroepenOmschrijving);
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
        if ($this->isColumnModified(GsRelatieOngewensteGroepensnkPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsRelatieOngewensteGroepensnkPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE)) {
            $modifiedColumns[':p' . $index++]  = '`stamnaamcode`';
        }
        if ($this->isColumnModified(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPEN_THESAURUS_122)) {
            $modifiedColumns[':p' . $index++]  = '`ongewenste_groepen_thesaurus_122`';
        }
        if ($this->isColumnModified(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`ongewenste_groepsnummer`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_relatie_ongewenste_groepensnk` (%s) VALUES (%s)',
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
                    case '`stamnaamcode`':
                        $stmt->bindValue($identifier, $this->stamnaamcode, PDO::PARAM_INT);
                        break;
                    case '`ongewenste_groepen_thesaurus_122`':
                        $stmt->bindValue($identifier, $this->ongewenste_groepen_thesaurus_122, PDO::PARAM_INT);
                        break;
                    case '`ongewenste_groepsnummer`':
                        $stmt->bindValue($identifier, $this->ongewenste_groepsnummer, PDO::PARAM_INT);
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

            if ($this->aOngewensteGroepenOmschrijving !== null) {
                if (!$this->aOngewensteGroepenOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aOngewensteGroepenOmschrijving->getValidationFailures());
                }
            }


            if (($retval = GsRelatieOngewensteGroepensnkPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsRelatieOngewensteGroepensnkPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getStamnaamcode();
                break;
            case 3:
                return $this->getOngewensteGroepenThesaurus122();
                break;
            case 4:
                return $this->getOngewensteGroepsnummer();
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
        if (isset($alreadyDumpedObjects['GsRelatieOngewensteGroepensnk'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsRelatieOngewensteGroepensnk'][serialize($this->getPrimaryKey())] = true;
        $keys = GsRelatieOngewensteGroepensnkPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getStamnaamcode(),
            $keys[3] => $this->getOngewensteGroepenThesaurus122(),
            $keys[4] => $this->getOngewensteGroepsnummer(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aOngewensteGroepenOmschrijving) {
                $result['OngewensteGroepenOmschrijving'] = $this->aOngewensteGroepenOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = GsRelatieOngewensteGroepensnkPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setStamnaamcode($value);
                break;
            case 3:
                $this->setOngewensteGroepenThesaurus122($value);
                break;
            case 4:
                $this->setOngewensteGroepsnummer($value);
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
        $keys = GsRelatieOngewensteGroepensnkPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setStamnaamcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOngewensteGroepenThesaurus122($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOngewensteGroepsnummer($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsRelatieOngewensteGroepensnkPeer::BESTANDNUMMER)) $criteria->add(GsRelatieOngewensteGroepensnkPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsRelatieOngewensteGroepensnkPeer::MUTATIEKODE)) $criteria->add(GsRelatieOngewensteGroepensnkPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE)) $criteria->add(GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE, $this->stamnaamcode);
        if ($this->isColumnModified(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPEN_THESAURUS_122)) $criteria->add(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPEN_THESAURUS_122, $this->ongewenste_groepen_thesaurus_122);
        if ($this->isColumnModified(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER)) $criteria->add(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER, $this->ongewenste_groepsnummer);

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
        $criteria = new Criteria(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME);
        $criteria->add(GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE, $this->stamnaamcode);
        $criteria->add(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER, $this->ongewenste_groepsnummer);

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
        $pks[0] = $this->getStamnaamcode();
        $pks[1] = $this->getOngewensteGroepsnummer();

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
        $this->setStamnaamcode($keys[0]);
        $this->setOngewensteGroepsnummer($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getStamnaamcode()) && (null === $this->getOngewensteGroepsnummer());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsRelatieOngewensteGroepensnk (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setStamnaamcode($this->getStamnaamcode());
        $copyObj->setOngewensteGroepenThesaurus122($this->getOngewensteGroepenThesaurus122());
        $copyObj->setOngewensteGroepsnummer($this->getOngewensteGroepsnummer());

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
     * @return GsRelatieOngewensteGroepensnk Clone of current object.
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
     * @return GsRelatieOngewensteGroepensnkPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsRelatieOngewensteGroepensnkPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsRelatieOngewensteGroepensnk The current object (for fluent API support)
     * @throws PropelException
     */
    public function setOngewensteGroepenOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setOngewensteGroepenThesaurus122(NULL);
        } else {
            $this->setOngewensteGroepenThesaurus122($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setOngewensteGroepsnummer(NULL);
        } else {
            $this->setOngewensteGroepsnummer($v->getThesaurusItemnummer());
        }

        $this->aOngewensteGroepenOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsRelatieOngewensteGroepensnk($this);
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
    public function getOngewensteGroepenOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aOngewensteGroepenOmschrijving === null && ($this->ongewenste_groepen_thesaurus_122 !== null && $this->ongewenste_groepsnummer !== null) && $doQuery) {
            $this->aOngewensteGroepenOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->ongewenste_groepen_thesaurus_122, $this->ongewenste_groepsnummer), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aOngewensteGroepenOmschrijving->addGsRelatieOngewensteGroepensnks($this);
             */
        }

        return $this->aOngewensteGroepenOmschrijving;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->stamnaamcode = null;
        $this->ongewenste_groepen_thesaurus_122 = null;
        $this->ongewenste_groepsnummer = null;
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
            if ($this->aOngewensteGroepenOmschrijving instanceof Persistent) {
              $this->aOngewensteGroepenOmschrijving->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aOngewensteGroepenOmschrijving = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsRelatieOngewensteGroepensnkPeer::DEFAULT_STRING_FORMAT);
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
