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
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeSamenstellingen;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeSamenstellingenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeSamenstellingenQuery;

abstract class BaseGsGeneriekeSamenstellingen extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeSamenstellingenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsGeneriekeSamenstellingenPeer
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
     * The value for the aanduiding_werkzaamhulpstof field.
     * @var        string
     */
    protected $aanduiding_werkzaamhulpstof;

    /**
     * The value for the gskcode field.
     * @var        int
     */
    protected $gskcode;

    /**
     * The value for the volledige_generieke_naam_kode field.
     * @var        int
     */
    protected $volledige_generieke_naam_kode;

    /**
     * The value for the omgerekende_hoeveelheid field.
     * @var        string
     */
    protected $omgerekende_hoeveelheid;

    /**
     * The value for the eenh_omgerekende_hoeveelheid_kode field.
     * @var        int
     */
    protected $eenh_omgerekende_hoeveelheid_kode;

    /**
     * The value for the basiseenheid_product_kode field.
     * @var        int
     */
    protected $basiseenheid_product_kode;

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
     * Get the [aanduiding_werkzaamhulpstof] column value.
     *
     * @return string
     */
    public function getAanduidingWerkzaamhulpstof()
    {

        return $this->aanduiding_werkzaamhulpstof;
    }

    /**
     * Get the [gskcode] column value.
     *
     * @return int
     */
    public function getGskcode()
    {

        return $this->gskcode;
    }

    /**
     * Get the [volledige_generieke_naam_kode] column value.
     *
     * @return int
     */
    public function getVolledigeGeneriekeNaamKode()
    {

        return $this->volledige_generieke_naam_kode;
    }

    /**
     * Get the [omgerekende_hoeveelheid] column value.
     *
     * @return string
     */
    public function getOmgerekendeHoeveelheid()
    {

        return $this->omgerekende_hoeveelheid;
    }

    /**
     * Get the [eenh_omgerekende_hoeveelheid_kode] column value.
     *
     * @return int
     */
    public function getEenhOmgerekendeHoeveelheidKode()
    {

        return $this->eenh_omgerekende_hoeveelheid_kode;
    }

    /**
     * Get the [basiseenheid_product_kode] column value.
     *
     * @return int
     */
    public function getBasiseenheidProductKode()
    {

        return $this->basiseenheid_product_kode;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeSamenstellingen The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsGeneriekeSamenstellingenPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeSamenstellingen The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsGeneriekeSamenstellingenPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [aanduiding_werkzaamhulpstof] column.
     *
     * @param  string $v new value
     * @return GsGeneriekeSamenstellingen The current object (for fluent API support)
     */
    public function setAanduidingWerkzaamhulpstof($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aanduiding_werkzaamhulpstof !== $v) {
            $this->aanduiding_werkzaamhulpstof = $v;
            $this->modifiedColumns[] = GsGeneriekeSamenstellingenPeer::AANDUIDING_WERKZAAMHULPSTOF;
        }


        return $this;
    } // setAanduidingWerkzaamhulpstof()

    /**
     * Set the value of [gskcode] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeSamenstellingen The current object (for fluent API support)
     */
    public function setGskcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gskcode !== $v) {
            $this->gskcode = $v;
            $this->modifiedColumns[] = GsGeneriekeSamenstellingenPeer::GSKCODE;
        }


        return $this;
    } // setGskcode()

    /**
     * Set the value of [volledige_generieke_naam_kode] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeSamenstellingen The current object (for fluent API support)
     */
    public function setVolledigeGeneriekeNaamKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->volledige_generieke_naam_kode !== $v) {
            $this->volledige_generieke_naam_kode = $v;
            $this->modifiedColumns[] = GsGeneriekeSamenstellingenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE;
        }


        return $this;
    } // setVolledigeGeneriekeNaamKode()

    /**
     * Set the value of [omgerekende_hoeveelheid] column.
     *
     * @param  string $v new value
     * @return GsGeneriekeSamenstellingen The current object (for fluent API support)
     */
    public function setOmgerekendeHoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->omgerekende_hoeveelheid !== $v) {
            $this->omgerekende_hoeveelheid = $v;
            $this->modifiedColumns[] = GsGeneriekeSamenstellingenPeer::OMGEREKENDE_HOEVEELHEID;
        }


        return $this;
    } // setOmgerekendeHoeveelheid()

    /**
     * Set the value of [eenh_omgerekende_hoeveelheid_kode] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeSamenstellingen The current object (for fluent API support)
     */
    public function setEenhOmgerekendeHoeveelheidKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eenh_omgerekende_hoeveelheid_kode !== $v) {
            $this->eenh_omgerekende_hoeveelheid_kode = $v;
            $this->modifiedColumns[] = GsGeneriekeSamenstellingenPeer::EENH_OMGEREKENDE_HOEVEELHEID_KODE;
        }


        return $this;
    } // setEenhOmgerekendeHoeveelheidKode()

    /**
     * Set the value of [basiseenheid_product_kode] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeSamenstellingen The current object (for fluent API support)
     */
    public function setBasiseenheidProductKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->basiseenheid_product_kode !== $v) {
            $this->basiseenheid_product_kode = $v;
            $this->modifiedColumns[] = GsGeneriekeSamenstellingenPeer::BASISEENHEID_PRODUCT_KODE;
        }


        return $this;
    } // setBasiseenheidProductKode()

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
            $this->aanduiding_werkzaamhulpstof = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->gskcode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->volledige_generieke_naam_kode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->omgerekende_hoeveelheid = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->eenh_omgerekende_hoeveelheid_kode = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->basiseenheid_product_kode = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = GsGeneriekeSamenstellingenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsGeneriekeSamenstellingen object", $e);
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
            $con = Propel::getConnection(GsGeneriekeSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsGeneriekeSamenstellingenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsGeneriekeSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsGeneriekeSamenstellingenQuery::create()
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
            $con = Propel::getConnection(GsGeneriekeSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsGeneriekeSamenstellingenPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsGeneriekeSamenstellingenPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsGeneriekeSamenstellingenPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsGeneriekeSamenstellingenPeer::AANDUIDING_WERKZAAMHULPSTOF)) {
            $modifiedColumns[':p' . $index++]  = '`aanduiding_werkzaamhulpstof`';
        }
        if ($this->isColumnModified(GsGeneriekeSamenstellingenPeer::GSKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`gskcode`';
        }
        if ($this->isColumnModified(GsGeneriekeSamenstellingenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`volledige_generieke_naam_kode`';
        }
        if ($this->isColumnModified(GsGeneriekeSamenstellingenPeer::OMGEREKENDE_HOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`omgerekende_hoeveelheid`';
        }
        if ($this->isColumnModified(GsGeneriekeSamenstellingenPeer::EENH_OMGEREKENDE_HOEVEELHEID_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`eenh_omgerekende_hoeveelheid_kode`';
        }
        if ($this->isColumnModified(GsGeneriekeSamenstellingenPeer::BASISEENHEID_PRODUCT_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`basiseenheid_product_kode`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_generieke_samenstellingen` (%s) VALUES (%s)',
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
                    case '`aanduiding_werkzaamhulpstof`':
                        $stmt->bindValue($identifier, $this->aanduiding_werkzaamhulpstof, PDO::PARAM_STR);
                        break;
                    case '`gskcode`':
                        $stmt->bindValue($identifier, $this->gskcode, PDO::PARAM_INT);
                        break;
                    case '`volledige_generieke_naam_kode`':
                        $stmt->bindValue($identifier, $this->volledige_generieke_naam_kode, PDO::PARAM_INT);
                        break;
                    case '`omgerekende_hoeveelheid`':
                        $stmt->bindValue($identifier, $this->omgerekende_hoeveelheid, PDO::PARAM_STR);
                        break;
                    case '`eenh_omgerekende_hoeveelheid_kode`':
                        $stmt->bindValue($identifier, $this->eenh_omgerekende_hoeveelheid_kode, PDO::PARAM_INT);
                        break;
                    case '`basiseenheid_product_kode`':
                        $stmt->bindValue($identifier, $this->basiseenheid_product_kode, PDO::PARAM_INT);
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


            if (($retval = GsGeneriekeSamenstellingenPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsGeneriekeSamenstellingenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAanduidingWerkzaamhulpstof();
                break;
            case 3:
                return $this->getGskcode();
                break;
            case 4:
                return $this->getVolledigeGeneriekeNaamKode();
                break;
            case 5:
                return $this->getOmgerekendeHoeveelheid();
                break;
            case 6:
                return $this->getEenhOmgerekendeHoeveelheidKode();
                break;
            case 7:
                return $this->getBasiseenheidProductKode();
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
        if (isset($alreadyDumpedObjects['GsGeneriekeSamenstellingen'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsGeneriekeSamenstellingen'][serialize($this->getPrimaryKey())] = true;
        $keys = GsGeneriekeSamenstellingenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getAanduidingWerkzaamhulpstof(),
            $keys[3] => $this->getGskcode(),
            $keys[4] => $this->getVolledigeGeneriekeNaamKode(),
            $keys[5] => $this->getOmgerekendeHoeveelheid(),
            $keys[6] => $this->getEenhOmgerekendeHoeveelheidKode(),
            $keys[7] => $this->getBasiseenheidProductKode(),
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
        $pos = GsGeneriekeSamenstellingenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAanduidingWerkzaamhulpstof($value);
                break;
            case 3:
                $this->setGskcode($value);
                break;
            case 4:
                $this->setVolledigeGeneriekeNaamKode($value);
                break;
            case 5:
                $this->setOmgerekendeHoeveelheid($value);
                break;
            case 6:
                $this->setEenhOmgerekendeHoeveelheidKode($value);
                break;
            case 7:
                $this->setBasiseenheidProductKode($value);
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
        $keys = GsGeneriekeSamenstellingenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAanduidingWerkzaamhulpstof($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setGskcode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setVolledigeGeneriekeNaamKode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOmgerekendeHoeveelheid($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEenhOmgerekendeHoeveelheidKode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setBasiseenheidProductKode($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsGeneriekeSamenstellingenPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsGeneriekeSamenstellingenPeer::BESTANDNUMMER)) $criteria->add(GsGeneriekeSamenstellingenPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsGeneriekeSamenstellingenPeer::MUTATIEKODE)) $criteria->add(GsGeneriekeSamenstellingenPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsGeneriekeSamenstellingenPeer::AANDUIDING_WERKZAAMHULPSTOF)) $criteria->add(GsGeneriekeSamenstellingenPeer::AANDUIDING_WERKZAAMHULPSTOF, $this->aanduiding_werkzaamhulpstof);
        if ($this->isColumnModified(GsGeneriekeSamenstellingenPeer::GSKCODE)) $criteria->add(GsGeneriekeSamenstellingenPeer::GSKCODE, $this->gskcode);
        if ($this->isColumnModified(GsGeneriekeSamenstellingenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE)) $criteria->add(GsGeneriekeSamenstellingenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE, $this->volledige_generieke_naam_kode);
        if ($this->isColumnModified(GsGeneriekeSamenstellingenPeer::OMGEREKENDE_HOEVEELHEID)) $criteria->add(GsGeneriekeSamenstellingenPeer::OMGEREKENDE_HOEVEELHEID, $this->omgerekende_hoeveelheid);
        if ($this->isColumnModified(GsGeneriekeSamenstellingenPeer::EENH_OMGEREKENDE_HOEVEELHEID_KODE)) $criteria->add(GsGeneriekeSamenstellingenPeer::EENH_OMGEREKENDE_HOEVEELHEID_KODE, $this->eenh_omgerekende_hoeveelheid_kode);
        if ($this->isColumnModified(GsGeneriekeSamenstellingenPeer::BASISEENHEID_PRODUCT_KODE)) $criteria->add(GsGeneriekeSamenstellingenPeer::BASISEENHEID_PRODUCT_KODE, $this->basiseenheid_product_kode);

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
        $criteria = new Criteria(GsGeneriekeSamenstellingenPeer::DATABASE_NAME);
        $criteria->add(GsGeneriekeSamenstellingenPeer::AANDUIDING_WERKZAAMHULPSTOF, $this->aanduiding_werkzaamhulpstof);
        $criteria->add(GsGeneriekeSamenstellingenPeer::GSKCODE, $this->gskcode);
        $criteria->add(GsGeneriekeSamenstellingenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE, $this->volledige_generieke_naam_kode);

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
        $pks[0] = $this->getAanduidingWerkzaamhulpstof();
        $pks[1] = $this->getGskcode();
        $pks[2] = $this->getVolledigeGeneriekeNaamKode();

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
        $this->setAanduidingWerkzaamhulpstof($keys[0]);
        $this->setGskcode($keys[1]);
        $this->setVolledigeGeneriekeNaamKode($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getAanduidingWerkzaamhulpstof()) && (null === $this->getGskcode()) && (null === $this->getVolledigeGeneriekeNaamKode());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsGeneriekeSamenstellingen (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setAanduidingWerkzaamhulpstof($this->getAanduidingWerkzaamhulpstof());
        $copyObj->setGskcode($this->getGskcode());
        $copyObj->setVolledigeGeneriekeNaamKode($this->getVolledigeGeneriekeNaamKode());
        $copyObj->setOmgerekendeHoeveelheid($this->getOmgerekendeHoeveelheid());
        $copyObj->setEenhOmgerekendeHoeveelheidKode($this->getEenhOmgerekendeHoeveelheidKode());
        $copyObj->setBasiseenheidProductKode($this->getBasiseenheidProductKode());
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
     * @return GsGeneriekeSamenstellingen Clone of current object.
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
     * @return GsGeneriekeSamenstellingenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsGeneriekeSamenstellingenPeer();
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
        $this->aanduiding_werkzaamhulpstof = null;
        $this->gskcode = null;
        $this->volledige_generieke_naam_kode = null;
        $this->omgerekende_hoeveelheid = null;
        $this->eenh_omgerekende_hoeveelheid_kode = null;
        $this->basiseenheid_product_kode = null;
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
        return (string) $this->exportTo(GsGeneriekeSamenstellingenPeer::DEFAULT_STRING_FORMAT);
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
