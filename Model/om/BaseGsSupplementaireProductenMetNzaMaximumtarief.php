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
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenMetNzaMaximumtarief;
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenMetNzaMaximumtariefPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenMetNzaMaximumtariefQuery;

abstract class BaseGsSupplementaireProductenMetNzaMaximumtarief extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsSupplementaireProductenMetNzaMaximumtariefPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsSupplementaireProductenMetNzaMaximumtariefPeer
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
     * The value for the zindex_nummer field.
     * @var        int
     */
    protected $zindex_nummer;

    /**
     * The value for the nza_maximum_tarief_inc_btw_laag field.
     * @var        string
     */
    protected $nza_maximum_tarief_inc_btw_laag;

    /**
     * The value for the thesaurus_nummer_soort_supplementair_product field.
     * @var        int
     */
    protected $thesaurus_nummer_soort_supplementair_product;

    /**
     * The value for the soort_supplementair_product field.
     * @var        int
     */
    protected $soort_supplementair_product;

    /**
     * @var        GsArtikelen
     */
    protected $aGsArtikelen;

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
     * Get the [zindex_nummer] column value.
     *
     * @return int
     */
    public function getZindexNummer()
    {

        return $this->zindex_nummer;
    }

    /**
     * Get the [nza_maximum_tarief_inc_btw_laag] column value.
     *
     * @return string
     */
    public function getNzaMaximumTariefIncBtwLaag()
    {

        return $this->nza_maximum_tarief_inc_btw_laag;
    }

    /**
     * Get the [thesaurus_nummer_soort_supplementair_product] column value.
     *
     * @return int
     */
    public function getThesaurusNummerSoortSupplementairProduct()
    {

        return $this->thesaurus_nummer_soort_supplementair_product;
    }

    /**
     * Get the [soort_supplementair_product] column value.
     *
     * @return int
     */
    public function getSoortSupplementairProduct()
    {

        return $this->soort_supplementair_product;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsSupplementaireProductenMetNzaMaximumtarief The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsSupplementaireProductenMetNzaMaximumtariefPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsSupplementaireProductenMetNzaMaximumtarief The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsSupplementaireProductenMetNzaMaximumtariefPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [zindex_nummer] column.
     *
     * @param  int $v new value
     * @return GsSupplementaireProductenMetNzaMaximumtarief The current object (for fluent API support)
     */
    public function setZindexNummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zindex_nummer !== $v) {
            $this->zindex_nummer = $v;
            $this->modifiedColumns[] = GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER;
        }

        if ($this->aGsArtikelen !== null && $this->aGsArtikelen->getZinummer() !== $v) {
            $this->aGsArtikelen = null;
        }


        return $this;
    } // setZindexNummer()

    /**
     * Set the value of [nza_maximum_tarief_inc_btw_laag] column.
     *
     * @param  string $v new value
     * @return GsSupplementaireProductenMetNzaMaximumtarief The current object (for fluent API support)
     */
    public function setNzaMaximumTariefIncBtwLaag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nza_maximum_tarief_inc_btw_laag !== $v) {
            $this->nza_maximum_tarief_inc_btw_laag = $v;
            $this->modifiedColumns[] = GsSupplementaireProductenMetNzaMaximumtariefPeer::NZA_MAXIMUM_TARIEF_INC_BTW_LAAG;
        }


        return $this;
    } // setNzaMaximumTariefIncBtwLaag()

    /**
     * Set the value of [thesaurus_nummer_soort_supplementair_product] column.
     *
     * @param  int $v new value
     * @return GsSupplementaireProductenMetNzaMaximumtarief The current object (for fluent API support)
     */
    public function setThesaurusNummerSoortSupplementairProduct($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurus_nummer_soort_supplementair_product !== $v) {
            $this->thesaurus_nummer_soort_supplementair_product = $v;
            $this->modifiedColumns[] = GsSupplementaireProductenMetNzaMaximumtariefPeer::THESAURUS_NUMMER_SOORT_SUPPLEMENTAIR_PRODUCT;
        }


        return $this;
    } // setThesaurusNummerSoortSupplementairProduct()

    /**
     * Set the value of [soort_supplementair_product] column.
     *
     * @param  int $v new value
     * @return GsSupplementaireProductenMetNzaMaximumtarief The current object (for fluent API support)
     */
    public function setSoortSupplementairProduct($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->soort_supplementair_product !== $v) {
            $this->soort_supplementair_product = $v;
            $this->modifiedColumns[] = GsSupplementaireProductenMetNzaMaximumtariefPeer::SOORT_SUPPLEMENTAIR_PRODUCT;
        }


        return $this;
    } // setSoortSupplementairProduct()

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
            $this->zindex_nummer = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->nza_maximum_tarief_inc_btw_laag = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->thesaurus_nummer_soort_supplementair_product = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->soort_supplementair_product = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = GsSupplementaireProductenMetNzaMaximumtariefPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsSupplementaireProductenMetNzaMaximumtarief object", $e);
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
            $con = Propel::getConnection(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsSupplementaireProductenMetNzaMaximumtariefPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGsArtikelen = null;
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
            $con = Propel::getConnection(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsSupplementaireProductenMetNzaMaximumtariefQuery::create()
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
            $con = Propel::getConnection(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsSupplementaireProductenMetNzaMaximumtariefPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsSupplementaireProductenMetNzaMaximumtariefPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsSupplementaireProductenMetNzaMaximumtariefPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`zindex_nummer`';
        }
        if ($this->isColumnModified(GsSupplementaireProductenMetNzaMaximumtariefPeer::NZA_MAXIMUM_TARIEF_INC_BTW_LAAG)) {
            $modifiedColumns[':p' . $index++]  = '`nza_maximum_tarief_inc_btw_laag`';
        }
        if ($this->isColumnModified(GsSupplementaireProductenMetNzaMaximumtariefPeer::THESAURUS_NUMMER_SOORT_SUPPLEMENTAIR_PRODUCT)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurus_nummer_soort_supplementair_product`';
        }
        if ($this->isColumnModified(GsSupplementaireProductenMetNzaMaximumtariefPeer::SOORT_SUPPLEMENTAIR_PRODUCT)) {
            $modifiedColumns[':p' . $index++]  = '`soort_supplementair_product`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_supplementaire_producten_met_nza_maximumtarief` (%s) VALUES (%s)',
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
                    case '`zindex_nummer`':
                        $stmt->bindValue($identifier, $this->zindex_nummer, PDO::PARAM_INT);
                        break;
                    case '`nza_maximum_tarief_inc_btw_laag`':
                        $stmt->bindValue($identifier, $this->nza_maximum_tarief_inc_btw_laag, PDO::PARAM_STR);
                        break;
                    case '`thesaurus_nummer_soort_supplementair_product`':
                        $stmt->bindValue($identifier, $this->thesaurus_nummer_soort_supplementair_product, PDO::PARAM_INT);
                        break;
                    case '`soort_supplementair_product`':
                        $stmt->bindValue($identifier, $this->soort_supplementair_product, PDO::PARAM_INT);
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


            if (($retval = GsSupplementaireProductenMetNzaMaximumtariefPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsSupplementaireProductenMetNzaMaximumtariefPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getZindexNummer();
                break;
            case 3:
                return $this->getNzaMaximumTariefIncBtwLaag();
                break;
            case 4:
                return $this->getThesaurusNummerSoortSupplementairProduct();
                break;
            case 5:
                return $this->getSoortSupplementairProduct();
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
        if (isset($alreadyDumpedObjects['GsSupplementaireProductenMetNzaMaximumtarief'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsSupplementaireProductenMetNzaMaximumtarief'][$this->getPrimaryKey()] = true;
        $keys = GsSupplementaireProductenMetNzaMaximumtariefPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getZindexNummer(),
            $keys[3] => $this->getNzaMaximumTariefIncBtwLaag(),
            $keys[4] => $this->getThesaurusNummerSoortSupplementairProduct(),
            $keys[5] => $this->getSoortSupplementairProduct(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aGsArtikelen) {
                $result['GsArtikelen'] = $this->aGsArtikelen->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = GsSupplementaireProductenMetNzaMaximumtariefPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setZindexNummer($value);
                break;
            case 3:
                $this->setNzaMaximumTariefIncBtwLaag($value);
                break;
            case 4:
                $this->setThesaurusNummerSoortSupplementairProduct($value);
                break;
            case 5:
                $this->setSoortSupplementairProduct($value);
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
        $keys = GsSupplementaireProductenMetNzaMaximumtariefPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setZindexNummer($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNzaMaximumTariefIncBtwLaag($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setThesaurusNummerSoortSupplementairProduct($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSoortSupplementairProduct($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsSupplementaireProductenMetNzaMaximumtariefPeer::BESTANDNUMMER)) $criteria->add(GsSupplementaireProductenMetNzaMaximumtariefPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsSupplementaireProductenMetNzaMaximumtariefPeer::MUTATIEKODE)) $criteria->add(GsSupplementaireProductenMetNzaMaximumtariefPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER)) $criteria->add(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, $this->zindex_nummer);
        if ($this->isColumnModified(GsSupplementaireProductenMetNzaMaximumtariefPeer::NZA_MAXIMUM_TARIEF_INC_BTW_LAAG)) $criteria->add(GsSupplementaireProductenMetNzaMaximumtariefPeer::NZA_MAXIMUM_TARIEF_INC_BTW_LAAG, $this->nza_maximum_tarief_inc_btw_laag);
        if ($this->isColumnModified(GsSupplementaireProductenMetNzaMaximumtariefPeer::THESAURUS_NUMMER_SOORT_SUPPLEMENTAIR_PRODUCT)) $criteria->add(GsSupplementaireProductenMetNzaMaximumtariefPeer::THESAURUS_NUMMER_SOORT_SUPPLEMENTAIR_PRODUCT, $this->thesaurus_nummer_soort_supplementair_product);
        if ($this->isColumnModified(GsSupplementaireProductenMetNzaMaximumtariefPeer::SOORT_SUPPLEMENTAIR_PRODUCT)) $criteria->add(GsSupplementaireProductenMetNzaMaximumtariefPeer::SOORT_SUPPLEMENTAIR_PRODUCT, $this->soort_supplementair_product);

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
        $criteria = new Criteria(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME);
        $criteria->add(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, $this->zindex_nummer);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getZindexNummer();
    }

    /**
     * Generic method to set the primary key (zindex_nummer column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setZindexNummer($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getZindexNummer();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsSupplementaireProductenMetNzaMaximumtarief (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setNzaMaximumTariefIncBtwLaag($this->getNzaMaximumTariefIncBtwLaag());
        $copyObj->setThesaurusNummerSoortSupplementairProduct($this->getThesaurusNummerSoortSupplementairProduct());
        $copyObj->setSoortSupplementairProduct($this->getSoortSupplementairProduct());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            $relObj = $this->getGsArtikelen();
            if ($relObj) {
                $copyObj->setGsArtikelen($relObj->copy($deepCopy));
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setZindexNummer(NULL); // this is a auto-increment column, so set to default value
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
     * @return GsSupplementaireProductenMetNzaMaximumtarief Clone of current object.
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
     * @return GsSupplementaireProductenMetNzaMaximumtariefPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsSupplementaireProductenMetNzaMaximumtariefPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsArtikelen object.
     *
     * @param                  GsArtikelen $v
     * @return GsSupplementaireProductenMetNzaMaximumtarief The current object (for fluent API support)
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

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setGsSupplementaireProductenMetNzaMaximumtarief($this);
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
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aGsArtikelen->setGsSupplementaireProductenMetNzaMaximumtarief($this);
        }

        return $this->aGsArtikelen;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->zindex_nummer = null;
        $this->nza_maximum_tarief_inc_btw_laag = null;
        $this->thesaurus_nummer_soort_supplementair_product = null;
        $this->soort_supplementair_product = null;
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

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aGsArtikelen = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsSupplementaireProductenMetNzaMaximumtariefPeer::DEFAULT_STRING_FORMAT);
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
