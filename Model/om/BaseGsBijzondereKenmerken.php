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
use PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerken;
use PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerkenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerkenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentific;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificQuery;

abstract class BaseGsBijzondereKenmerken extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsBijzondereKenmerkenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsBijzondereKenmerkenPeer
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
     * The value for the prkcode field.
     * @var        int
     */
    protected $prkcode;

    /**
     * The value for the handelsproduktkode field.
     * @var        int
     */
    protected $handelsproduktkode;

    /**
     * The value for the thesnr_bijzondere_kenmerken field.
     * @var        int
     */
    protected $thesnr_bijzondere_kenmerken;

    /**
     * The value for the bijzondere_kenmerk field.
     * @var        int
     */
    protected $bijzondere_kenmerk;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aKenmerkOmschrijving;

    /**
     * @var        GsHandelsproducten
     */
    protected $aGsHandelsproducten;

    /**
     * @var        GsVoorschrijfprGeneesmiddelIdentific
     */
    protected $aGsVoorschrijfprGeneesmiddelIdentific;

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
     * Get the [prkcode] column value.
     *
     * @return int
     */
    public function getPrkcode()
    {

        return $this->prkcode;
    }

    /**
     * Get the [handelsproduktkode] column value.
     *
     * @return int
     */
    public function getHandelsproduktkode()
    {

        return $this->handelsproduktkode;
    }

    /**
     * Get the [thesnr_bijzondere_kenmerken] column value.
     *
     * @return int
     */
    public function getThesnrBijzondereKenmerken()
    {

        return $this->thesnr_bijzondere_kenmerken;
    }

    /**
     * Get the [bijzondere_kenmerk] column value.
     *
     * @return int
     */
    public function getBijzondereKenmerk()
    {

        return $this->bijzondere_kenmerk;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsBijzondereKenmerken The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsBijzondereKenmerkenPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsBijzondereKenmerken The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsBijzondereKenmerkenPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [prkcode] column.
     *
     * @param  int $v new value
     * @return GsBijzondereKenmerken The current object (for fluent API support)
     */
    public function setPrkcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->prkcode !== $v) {
            $this->prkcode = $v;
            $this->modifiedColumns[] = GsBijzondereKenmerkenPeer::PRKCODE;
        }

        if ($this->aGsVoorschrijfprGeneesmiddelIdentific !== null && $this->aGsVoorschrijfprGeneesmiddelIdentific->getPrkcode() !== $v) {
            $this->aGsVoorschrijfprGeneesmiddelIdentific = null;
        }


        return $this;
    } // setPrkcode()

    /**
     * Set the value of [handelsproduktkode] column.
     *
     * @param  int $v new value
     * @return GsBijzondereKenmerken The current object (for fluent API support)
     */
    public function setHandelsproduktkode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->handelsproduktkode !== $v) {
            $this->handelsproduktkode = $v;
            $this->modifiedColumns[] = GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE;
        }

        if ($this->aGsHandelsproducten !== null && $this->aGsHandelsproducten->getHandelsproduktkode() !== $v) {
            $this->aGsHandelsproducten = null;
        }


        return $this;
    } // setHandelsproduktkode()

    /**
     * Set the value of [thesnr_bijzondere_kenmerken] column.
     *
     * @param  int $v new value
     * @return GsBijzondereKenmerken The current object (for fluent API support)
     */
    public function setThesnrBijzondereKenmerken($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesnr_bijzondere_kenmerken !== $v) {
            $this->thesnr_bijzondere_kenmerken = $v;
            $this->modifiedColumns[] = GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN;
        }

        if ($this->aKenmerkOmschrijving !== null && $this->aKenmerkOmschrijving->getThesaurusnummer() !== $v) {
            $this->aKenmerkOmschrijving = null;
        }


        return $this;
    } // setThesnrBijzondereKenmerken()

    /**
     * Set the value of [bijzondere_kenmerk] column.
     *
     * @param  int $v new value
     * @return GsBijzondereKenmerken The current object (for fluent API support)
     */
    public function setBijzondereKenmerk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bijzondere_kenmerk !== $v) {
            $this->bijzondere_kenmerk = $v;
            $this->modifiedColumns[] = GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK;
        }

        if ($this->aKenmerkOmschrijving !== null && $this->aKenmerkOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aKenmerkOmschrijving = null;
        }


        return $this;
    } // setBijzondereKenmerk()

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
            $this->prkcode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->handelsproduktkode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->thesnr_bijzondere_kenmerken = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->bijzondere_kenmerk = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = GsBijzondereKenmerkenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsBijzondereKenmerken object", $e);
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

        if ($this->aGsVoorschrijfprGeneesmiddelIdentific !== null && $this->prkcode !== $this->aGsVoorschrijfprGeneesmiddelIdentific->getPrkcode()) {
            $this->aGsVoorschrijfprGeneesmiddelIdentific = null;
        }
        if ($this->aGsHandelsproducten !== null && $this->handelsproduktkode !== $this->aGsHandelsproducten->getHandelsproduktkode()) {
            $this->aGsHandelsproducten = null;
        }
        if ($this->aKenmerkOmschrijving !== null && $this->thesnr_bijzondere_kenmerken !== $this->aKenmerkOmschrijving->getThesaurusnummer()) {
            $this->aKenmerkOmschrijving = null;
        }
        if ($this->aKenmerkOmschrijving !== null && $this->bijzondere_kenmerk !== $this->aKenmerkOmschrijving->getThesaurusItemnummer()) {
            $this->aKenmerkOmschrijving = null;
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
            $con = Propel::getConnection(GsBijzondereKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsBijzondereKenmerkenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aKenmerkOmschrijving = null;
            $this->aGsHandelsproducten = null;
            $this->aGsVoorschrijfprGeneesmiddelIdentific = null;
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
            $con = Propel::getConnection(GsBijzondereKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsBijzondereKenmerkenQuery::create()
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
            $con = Propel::getConnection(GsBijzondereKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsBijzondereKenmerkenPeer::addInstanceToPool($this);
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

            if ($this->aKenmerkOmschrijving !== null) {
                if ($this->aKenmerkOmschrijving->isModified() || $this->aKenmerkOmschrijving->isNew()) {
                    $affectedRows += $this->aKenmerkOmschrijving->save($con);
                }
                $this->setKenmerkOmschrijving($this->aKenmerkOmschrijving);
            }

            if ($this->aGsHandelsproducten !== null) {
                if ($this->aGsHandelsproducten->isModified() || $this->aGsHandelsproducten->isNew()) {
                    $affectedRows += $this->aGsHandelsproducten->save($con);
                }
                $this->setGsHandelsproducten($this->aGsHandelsproducten);
            }

            if ($this->aGsVoorschrijfprGeneesmiddelIdentific !== null) {
                if ($this->aGsVoorschrijfprGeneesmiddelIdentific->isModified() || $this->aGsVoorschrijfprGeneesmiddelIdentific->isNew()) {
                    $affectedRows += $this->aGsVoorschrijfprGeneesmiddelIdentific->save($con);
                }
                $this->setGsVoorschrijfprGeneesmiddelIdentific($this->aGsVoorschrijfprGeneesmiddelIdentific);
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
        if ($this->isColumnModified(GsBijzondereKenmerkenPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsBijzondereKenmerkenPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsBijzondereKenmerkenPeer::PRKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`prkcode`';
        }
        if ($this->isColumnModified(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE)) {
            $modifiedColumns[':p' . $index++]  = '`handelsproduktkode`';
        }
        if ($this->isColumnModified(GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN)) {
            $modifiedColumns[':p' . $index++]  = '`thesnr_bijzondere_kenmerken`';
        }
        if ($this->isColumnModified(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK)) {
            $modifiedColumns[':p' . $index++]  = '`bijzondere_kenmerk`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_bijzondere_kenmerken` (%s) VALUES (%s)',
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
                    case '`prkcode`':
                        $stmt->bindValue($identifier, $this->prkcode, PDO::PARAM_INT);
                        break;
                    case '`handelsproduktkode`':
                        $stmt->bindValue($identifier, $this->handelsproduktkode, PDO::PARAM_INT);
                        break;
                    case '`thesnr_bijzondere_kenmerken`':
                        $stmt->bindValue($identifier, $this->thesnr_bijzondere_kenmerken, PDO::PARAM_INT);
                        break;
                    case '`bijzondere_kenmerk`':
                        $stmt->bindValue($identifier, $this->bijzondere_kenmerk, PDO::PARAM_INT);
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

            if ($this->aKenmerkOmschrijving !== null) {
                if (!$this->aKenmerkOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aKenmerkOmschrijving->getValidationFailures());
                }
            }

            if ($this->aGsHandelsproducten !== null) {
                if (!$this->aGsHandelsproducten->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsHandelsproducten->getValidationFailures());
                }
            }

            if ($this->aGsVoorschrijfprGeneesmiddelIdentific !== null) {
                if (!$this->aGsVoorschrijfprGeneesmiddelIdentific->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsVoorschrijfprGeneesmiddelIdentific->getValidationFailures());
                }
            }


            if (($retval = GsBijzondereKenmerkenPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsBijzondereKenmerkenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getPrkcode();
                break;
            case 3:
                return $this->getHandelsproduktkode();
                break;
            case 4:
                return $this->getThesnrBijzondereKenmerken();
                break;
            case 5:
                return $this->getBijzondereKenmerk();
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
        if (isset($alreadyDumpedObjects['GsBijzondereKenmerken'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsBijzondereKenmerken'][serialize($this->getPrimaryKey())] = true;
        $keys = GsBijzondereKenmerkenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getPrkcode(),
            $keys[3] => $this->getHandelsproduktkode(),
            $keys[4] => $this->getThesnrBijzondereKenmerken(),
            $keys[5] => $this->getBijzondereKenmerk(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aKenmerkOmschrijving) {
                $result['KenmerkOmschrijving'] = $this->aKenmerkOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aGsHandelsproducten) {
                $result['GsHandelsproducten'] = $this->aGsHandelsproducten->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aGsVoorschrijfprGeneesmiddelIdentific) {
                $result['GsVoorschrijfprGeneesmiddelIdentific'] = $this->aGsVoorschrijfprGeneesmiddelIdentific->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = GsBijzondereKenmerkenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setPrkcode($value);
                break;
            case 3:
                $this->setHandelsproduktkode($value);
                break;
            case 4:
                $this->setThesnrBijzondereKenmerken($value);
                break;
            case 5:
                $this->setBijzondereKenmerk($value);
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
        $keys = GsBijzondereKenmerkenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPrkcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setHandelsproduktkode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setThesnrBijzondereKenmerken($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setBijzondereKenmerk($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsBijzondereKenmerkenPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsBijzondereKenmerkenPeer::BESTANDNUMMER)) $criteria->add(GsBijzondereKenmerkenPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsBijzondereKenmerkenPeer::MUTATIEKODE)) $criteria->add(GsBijzondereKenmerkenPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsBijzondereKenmerkenPeer::PRKCODE)) $criteria->add(GsBijzondereKenmerkenPeer::PRKCODE, $this->prkcode);
        if ($this->isColumnModified(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE)) $criteria->add(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, $this->handelsproduktkode);
        if ($this->isColumnModified(GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN)) $criteria->add(GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN, $this->thesnr_bijzondere_kenmerken);
        if ($this->isColumnModified(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK)) $criteria->add(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, $this->bijzondere_kenmerk);

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
        $criteria = new Criteria(GsBijzondereKenmerkenPeer::DATABASE_NAME);
        $criteria->add(GsBijzondereKenmerkenPeer::PRKCODE, $this->prkcode);
        $criteria->add(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, $this->handelsproduktkode);
        $criteria->add(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, $this->bijzondere_kenmerk);

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
        $pks[0] = $this->getPrkcode();
        $pks[1] = $this->getHandelsproduktkode();
        $pks[2] = $this->getBijzondereKenmerk();

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
        $this->setPrkcode($keys[0]);
        $this->setHandelsproduktkode($keys[1]);
        $this->setBijzondereKenmerk($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getPrkcode()) && (null === $this->getHandelsproduktkode()) && (null === $this->getBijzondereKenmerk());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsBijzondereKenmerken (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setPrkcode($this->getPrkcode());
        $copyObj->setHandelsproduktkode($this->getHandelsproduktkode());
        $copyObj->setThesnrBijzondereKenmerken($this->getThesnrBijzondereKenmerken());
        $copyObj->setBijzondereKenmerk($this->getBijzondereKenmerk());

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
     * @return GsBijzondereKenmerken Clone of current object.
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
     * @return GsBijzondereKenmerkenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsBijzondereKenmerkenPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsBijzondereKenmerken The current object (for fluent API support)
     * @throws PropelException
     */
    public function setKenmerkOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesnrBijzondereKenmerken(NULL);
        } else {
            $this->setThesnrBijzondereKenmerken($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setBijzondereKenmerk(NULL);
        } else {
            $this->setBijzondereKenmerk($v->getThesaurusItemnummer());
        }

        $this->aKenmerkOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsBijzondereKenmerken($this);
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
    public function getKenmerkOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aKenmerkOmschrijving === null && ($this->thesnr_bijzondere_kenmerken !== null && $this->bijzondere_kenmerk !== null) && $doQuery) {
            $this->aKenmerkOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesnr_bijzondere_kenmerken, $this->bijzondere_kenmerk), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aKenmerkOmschrijving->addGsBijzondereKenmerkens($this);
             */
        }

        return $this->aKenmerkOmschrijving;
    }

    /**
     * Declares an association between this object and a GsHandelsproducten object.
     *
     * @param                  GsHandelsproducten $v
     * @return GsBijzondereKenmerken The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsHandelsproducten(GsHandelsproducten $v = null)
    {
        if ($v === null) {
            $this->setHandelsproduktkode(NULL);
        } else {
            $this->setHandelsproduktkode($v->getHandelsproduktkode());
        }

        $this->aGsHandelsproducten = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsHandelsproducten object, it will not be re-added.
        if ($v !== null) {
            $v->addGsBijzondereKenmerken($this);
        }


        return $this;
    }


    /**
     * Get the associated GsHandelsproducten object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsHandelsproducten The associated GsHandelsproducten object.
     * @throws PropelException
     */
    public function getGsHandelsproducten(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsHandelsproducten === null && ($this->handelsproduktkode !== null) && $doQuery) {
            $this->aGsHandelsproducten = GsHandelsproductenQuery::create()->findPk($this->handelsproduktkode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsHandelsproducten->addGsBijzondereKenmerkens($this);
             */
        }

        return $this->aGsHandelsproducten;
    }

    /**
     * Declares an association between this object and a GsVoorschrijfprGeneesmiddelIdentific object.
     *
     * @param                  GsVoorschrijfprGeneesmiddelIdentific $v
     * @return GsBijzondereKenmerken The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsVoorschrijfprGeneesmiddelIdentific(GsVoorschrijfprGeneesmiddelIdentific $v = null)
    {
        if ($v === null) {
            $this->setPrkcode(NULL);
        } else {
            $this->setPrkcode($v->getPrkcode());
        }

        $this->aGsVoorschrijfprGeneesmiddelIdentific = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsVoorschrijfprGeneesmiddelIdentific object, it will not be re-added.
        if ($v !== null) {
            $v->addGsBijzondereKenmerken($this);
        }


        return $this;
    }


    /**
     * Get the associated GsVoorschrijfprGeneesmiddelIdentific object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsVoorschrijfprGeneesmiddelIdentific The associated GsVoorschrijfprGeneesmiddelIdentific object.
     * @throws PropelException
     */
    public function getGsVoorschrijfprGeneesmiddelIdentific(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsVoorschrijfprGeneesmiddelIdentific === null && ($this->prkcode !== null) && $doQuery) {
            $this->aGsVoorschrijfprGeneesmiddelIdentific = GsVoorschrijfprGeneesmiddelIdentificQuery::create()->findPk($this->prkcode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsVoorschrijfprGeneesmiddelIdentific->addGsBijzondereKenmerkens($this);
             */
        }

        return $this->aGsVoorschrijfprGeneesmiddelIdentific;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->prkcode = null;
        $this->handelsproduktkode = null;
        $this->thesnr_bijzondere_kenmerken = null;
        $this->bijzondere_kenmerk = null;
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
            if ($this->aKenmerkOmschrijving instanceof Persistent) {
              $this->aKenmerkOmschrijving->clearAllReferences($deep);
            }
            if ($this->aGsHandelsproducten instanceof Persistent) {
              $this->aGsHandelsproducten->clearAllReferences($deep);
            }
            if ($this->aGsVoorschrijfprGeneesmiddelIdentific instanceof Persistent) {
              $this->aGsVoorschrijfprGeneesmiddelIdentific->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aKenmerkOmschrijving = null;
        $this->aGsHandelsproducten = null;
        $this->aGsVoorschrijfprGeneesmiddelIdentific = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsBijzondereKenmerkenPeer::DEFAULT_STRING_FORMAT);
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
