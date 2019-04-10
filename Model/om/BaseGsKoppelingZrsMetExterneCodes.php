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
use PharmaIntelligence\GstandaardBundle\Model\GsKoppelingZrsMetExterneCodes;
use PharmaIntelligence\GstandaardBundle\Model\GsKoppelingZrsMetExterneCodesPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsKoppelingZrsMetExterneCodesQuery;

abstract class BaseGsKoppelingZrsMetExterneCodes extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsKoppelingZrsMetExterneCodesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsKoppelingZrsMetExterneCodesPeer
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
     * The value for the type_externe_zrs_code field.
     * @var        int
     */
    protected $type_externe_zrs_code;

    /**
     * The value for the externe_code_van_het_type_exttyp field.
     * @var        string
     */
    protected $externe_code_van_het_type_exttyp;

    /**
     * The value for the soort_code field.
     * @var        int
     */
    protected $soort_code;

    /**
     * The value for the zorg_registratie_binnen_aaa field.
     * @var        int
     */
    protected $zorg_registratie_binnen_aaa;

    /**
     * The value for the zorg_registratie_binnen_aaa1 field.
     * @var        int
     */
    protected $zorg_registratie_binnen_aaa1;

    /**
     * The value for the zorg_registratie_nummer_van_de_actieregel field.
     * @var        int
     */
    protected $zorg_registratie_nummer_van_de_actieregel;

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
     * Get the [type_externe_zrs_code] column value.
     *
     * @return int
     */
    public function getTypeExterneZrsCode()
    {

        return $this->type_externe_zrs_code;
    }

    /**
     * Get the [externe_code_van_het_type_exttyp] column value.
     *
     * @return string
     */
    public function getExterneCodeVanHetTypeExttyp()
    {

        return $this->externe_code_van_het_type_exttyp;
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
     * Get the [zorg_registratie_binnen_aaa] column value.
     *
     * @return int
     */
    public function getZorgRegistratieBinnenAaa()
    {

        return $this->zorg_registratie_binnen_aaa;
    }

    /**
     * Get the [zorg_registratie_binnen_aaa1] column value.
     *
     * @return int
     */
    public function getZorgRegistratieBinnenAaa1()
    {

        return $this->zorg_registratie_binnen_aaa1;
    }

    /**
     * Get the [zorg_registratie_nummer_van_de_actieregel] column value.
     *
     * @return int
     */
    public function getZorgRegistratieNummerVanDeActieregel()
    {

        return $this->zorg_registratie_nummer_van_de_actieregel;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsKoppelingZrsMetExterneCodes The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsKoppelingZrsMetExterneCodesPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsKoppelingZrsMetExterneCodes The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsKoppelingZrsMetExterneCodesPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [type_externe_zrs_code] column.
     *
     * @param  int $v new value
     * @return GsKoppelingZrsMetExterneCodes The current object (for fluent API support)
     */
    public function setTypeExterneZrsCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_externe_zrs_code !== $v) {
            $this->type_externe_zrs_code = $v;
            $this->modifiedColumns[] = GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE;
        }


        return $this;
    } // setTypeExterneZrsCode()

    /**
     * Set the value of [externe_code_van_het_type_exttyp] column.
     *
     * @param  string $v new value
     * @return GsKoppelingZrsMetExterneCodes The current object (for fluent API support)
     */
    public function setExterneCodeVanHetTypeExttyp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->externe_code_van_het_type_exttyp !== $v) {
            $this->externe_code_van_het_type_exttyp = $v;
            $this->modifiedColumns[] = GsKoppelingZrsMetExterneCodesPeer::EXTERNE_CODE_VAN_HET_TYPE_EXTTYP;
        }


        return $this;
    } // setExterneCodeVanHetTypeExttyp()

    /**
     * Set the value of [soort_code] column.
     *
     * @param  int $v new value
     * @return GsKoppelingZrsMetExterneCodes The current object (for fluent API support)
     */
    public function setSoortCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->soort_code !== $v) {
            $this->soort_code = $v;
            $this->modifiedColumns[] = GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE;
        }


        return $this;
    } // setSoortCode()

    /**
     * Set the value of [zorg_registratie_binnen_aaa] column.
     *
     * @param  int $v new value
     * @return GsKoppelingZrsMetExterneCodes The current object (for fluent API support)
     */
    public function setZorgRegistratieBinnenAaa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zorg_registratie_binnen_aaa !== $v) {
            $this->zorg_registratie_binnen_aaa = $v;
            $this->modifiedColumns[] = GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA;
        }


        return $this;
    } // setZorgRegistratieBinnenAaa()

    /**
     * Set the value of [zorg_registratie_binnen_aaa1] column.
     *
     * @param  int $v new value
     * @return GsKoppelingZrsMetExterneCodes The current object (for fluent API support)
     */
    public function setZorgRegistratieBinnenAaa1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zorg_registratie_binnen_aaa1 !== $v) {
            $this->zorg_registratie_binnen_aaa1 = $v;
            $this->modifiedColumns[] = GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1;
        }


        return $this;
    } // setZorgRegistratieBinnenAaa1()

    /**
     * Set the value of [zorg_registratie_nummer_van_de_actieregel] column.
     *
     * @param  int $v new value
     * @return GsKoppelingZrsMetExterneCodes The current object (for fluent API support)
     */
    public function setZorgRegistratieNummerVanDeActieregel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zorg_registratie_nummer_van_de_actieregel !== $v) {
            $this->zorg_registratie_nummer_van_de_actieregel = $v;
            $this->modifiedColumns[] = GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL;
        }


        return $this;
    } // setZorgRegistratieNummerVanDeActieregel()

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
            $this->type_externe_zrs_code = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->externe_code_van_het_type_exttyp = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->soort_code = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->zorg_registratie_binnen_aaa = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->zorg_registratie_binnen_aaa1 = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->zorg_registratie_nummer_van_de_actieregel = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = GsKoppelingZrsMetExterneCodesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsKoppelingZrsMetExterneCodes object", $e);
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
            $con = Propel::getConnection(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsKoppelingZrsMetExterneCodesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsKoppelingZrsMetExterneCodesQuery::create()
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
            $con = Propel::getConnection(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsKoppelingZrsMetExterneCodesPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsKoppelingZrsMetExterneCodesPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsKoppelingZrsMetExterneCodesPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`type_externe_zrs_code`';
        }
        if ($this->isColumnModified(GsKoppelingZrsMetExterneCodesPeer::EXTERNE_CODE_VAN_HET_TYPE_EXTTYP)) {
            $modifiedColumns[':p' . $index++]  = '`externe_code_van_het_type_exttyp`';
        }
        if ($this->isColumnModified(GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`soort_code`';
        }
        if ($this->isColumnModified(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA)) {
            $modifiedColumns[':p' . $index++]  = '`zorg_registratie_binnen_aaa`';
        }
        if ($this->isColumnModified(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1)) {
            $modifiedColumns[':p' . $index++]  = '`zorg_registratie_binnen_aaa1`';
        }
        if ($this->isColumnModified(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL)) {
            $modifiedColumns[':p' . $index++]  = '`zorg_registratie_nummer_van_de_actieregel`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_koppeling_zrs_met_externe_codes` (%s) VALUES (%s)',
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
                    case '`type_externe_zrs_code`':
                        $stmt->bindValue($identifier, $this->type_externe_zrs_code, PDO::PARAM_INT);
                        break;
                    case '`externe_code_van_het_type_exttyp`':
                        $stmt->bindValue($identifier, $this->externe_code_van_het_type_exttyp, PDO::PARAM_STR);
                        break;
                    case '`soort_code`':
                        $stmt->bindValue($identifier, $this->soort_code, PDO::PARAM_INT);
                        break;
                    case '`zorg_registratie_binnen_aaa`':
                        $stmt->bindValue($identifier, $this->zorg_registratie_binnen_aaa, PDO::PARAM_INT);
                        break;
                    case '`zorg_registratie_binnen_aaa1`':
                        $stmt->bindValue($identifier, $this->zorg_registratie_binnen_aaa1, PDO::PARAM_INT);
                        break;
                    case '`zorg_registratie_nummer_van_de_actieregel`':
                        $stmt->bindValue($identifier, $this->zorg_registratie_nummer_van_de_actieregel, PDO::PARAM_INT);
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


            if (($retval = GsKoppelingZrsMetExterneCodesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsKoppelingZrsMetExterneCodesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getTypeExterneZrsCode();
                break;
            case 3:
                return $this->getExterneCodeVanHetTypeExttyp();
                break;
            case 4:
                return $this->getSoortCode();
                break;
            case 5:
                return $this->getZorgRegistratieBinnenAaa();
                break;
            case 6:
                return $this->getZorgRegistratieBinnenAaa1();
                break;
            case 7:
                return $this->getZorgRegistratieNummerVanDeActieregel();
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
        if (isset($alreadyDumpedObjects['GsKoppelingZrsMetExterneCodes'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsKoppelingZrsMetExterneCodes'][serialize($this->getPrimaryKey())] = true;
        $keys = GsKoppelingZrsMetExterneCodesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getTypeExterneZrsCode(),
            $keys[3] => $this->getExterneCodeVanHetTypeExttyp(),
            $keys[4] => $this->getSoortCode(),
            $keys[5] => $this->getZorgRegistratieBinnenAaa(),
            $keys[6] => $this->getZorgRegistratieBinnenAaa1(),
            $keys[7] => $this->getZorgRegistratieNummerVanDeActieregel(),
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
        $pos = GsKoppelingZrsMetExterneCodesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setTypeExterneZrsCode($value);
                break;
            case 3:
                $this->setExterneCodeVanHetTypeExttyp($value);
                break;
            case 4:
                $this->setSoortCode($value);
                break;
            case 5:
                $this->setZorgRegistratieBinnenAaa($value);
                break;
            case 6:
                $this->setZorgRegistratieBinnenAaa1($value);
                break;
            case 7:
                $this->setZorgRegistratieNummerVanDeActieregel($value);
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
        $keys = GsKoppelingZrsMetExterneCodesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTypeExterneZrsCode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setExterneCodeVanHetTypeExttyp($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSoortCode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setZorgRegistratieBinnenAaa($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setZorgRegistratieBinnenAaa1($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setZorgRegistratieNummerVanDeActieregel($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsKoppelingZrsMetExterneCodesPeer::BESTANDNUMMER)) $criteria->add(GsKoppelingZrsMetExterneCodesPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsKoppelingZrsMetExterneCodesPeer::MUTATIEKODE)) $criteria->add(GsKoppelingZrsMetExterneCodesPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE)) $criteria->add(GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE, $this->type_externe_zrs_code);
        if ($this->isColumnModified(GsKoppelingZrsMetExterneCodesPeer::EXTERNE_CODE_VAN_HET_TYPE_EXTTYP)) $criteria->add(GsKoppelingZrsMetExterneCodesPeer::EXTERNE_CODE_VAN_HET_TYPE_EXTTYP, $this->externe_code_van_het_type_exttyp);
        if ($this->isColumnModified(GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE)) $criteria->add(GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE, $this->soort_code);
        if ($this->isColumnModified(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA)) $criteria->add(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA, $this->zorg_registratie_binnen_aaa);
        if ($this->isColumnModified(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1)) $criteria->add(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1, $this->zorg_registratie_binnen_aaa1);
        if ($this->isColumnModified(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL)) $criteria->add(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $this->zorg_registratie_nummer_van_de_actieregel);

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
        $criteria = new Criteria(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME);
        $criteria->add(GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE, $this->type_externe_zrs_code);
        $criteria->add(GsKoppelingZrsMetExterneCodesPeer::EXTERNE_CODE_VAN_HET_TYPE_EXTTYP, $this->externe_code_van_het_type_exttyp);
        $criteria->add(GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE, $this->soort_code);
        $criteria->add(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA, $this->zorg_registratie_binnen_aaa);
        $criteria->add(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1, $this->zorg_registratie_binnen_aaa1);
        $criteria->add(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $this->zorg_registratie_nummer_van_de_actieregel);

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
        $pks[0] = $this->getTypeExterneZrsCode();
        $pks[1] = $this->getExterneCodeVanHetTypeExttyp();
        $pks[2] = $this->getSoortCode();
        $pks[3] = $this->getZorgRegistratieBinnenAaa();
        $pks[4] = $this->getZorgRegistratieBinnenAaa1();
        $pks[5] = $this->getZorgRegistratieNummerVanDeActieregel();

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
        $this->setTypeExterneZrsCode($keys[0]);
        $this->setExterneCodeVanHetTypeExttyp($keys[1]);
        $this->setSoortCode($keys[2]);
        $this->setZorgRegistratieBinnenAaa($keys[3]);
        $this->setZorgRegistratieBinnenAaa1($keys[4]);
        $this->setZorgRegistratieNummerVanDeActieregel($keys[5]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getTypeExterneZrsCode()) && (null === $this->getExterneCodeVanHetTypeExttyp()) && (null === $this->getSoortCode()) && (null === $this->getZorgRegistratieBinnenAaa()) && (null === $this->getZorgRegistratieBinnenAaa1()) && (null === $this->getZorgRegistratieNummerVanDeActieregel());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsKoppelingZrsMetExterneCodes (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setTypeExterneZrsCode($this->getTypeExterneZrsCode());
        $copyObj->setExterneCodeVanHetTypeExttyp($this->getExterneCodeVanHetTypeExttyp());
        $copyObj->setSoortCode($this->getSoortCode());
        $copyObj->setZorgRegistratieBinnenAaa($this->getZorgRegistratieBinnenAaa());
        $copyObj->setZorgRegistratieBinnenAaa1($this->getZorgRegistratieBinnenAaa1());
        $copyObj->setZorgRegistratieNummerVanDeActieregel($this->getZorgRegistratieNummerVanDeActieregel());
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
     * @return GsKoppelingZrsMetExterneCodes Clone of current object.
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
     * @return GsKoppelingZrsMetExterneCodesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsKoppelingZrsMetExterneCodesPeer();
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
        $this->type_externe_zrs_code = null;
        $this->externe_code_van_het_type_exttyp = null;
        $this->soort_code = null;
        $this->zorg_registratie_binnen_aaa = null;
        $this->zorg_registratie_binnen_aaa1 = null;
        $this->zorg_registratie_nummer_van_de_actieregel = null;
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
        return (string) $this->exportTo(GsKoppelingZrsMetExterneCodesPeer::DEFAULT_STRING_FORMAT);
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
