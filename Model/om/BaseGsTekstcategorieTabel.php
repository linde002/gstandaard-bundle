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
use PharmaIntelligence\GstandaardBundle\Model\GsTekstcategorieTabel;
use PharmaIntelligence\GstandaardBundle\Model\GsTekstcategorieTabelPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsTekstcategorieTabelQuery;

abstract class BaseGsTekstcategorieTabel extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsTekstcategorieTabelPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsTekstcategorieTabelPeer
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
     * The value for the uniek_nummer_per_tekstcategorie field.
     * @var        int
     */
    protected $uniek_nummer_per_tekstcategorie;

    /**
     * The value for the memocode_tekstcategorie field.
     * @var        string
     */
    protected $memocode_tekstcategorie;

    /**
     * The value for the omschrijving_tekstcategorie field.
     * @var        string
     */
    protected $omschrijving_tekstcategorie;

    /**
     * The value for the registratiedatum_gstandaard field.
     * @var        string
     */
    protected $registratiedatum_gstandaard;

    /**
     * The value for the versienummer_wcia_tabellen_eerste_opname field.
     * @var        int
     */
    protected $versienummer_wcia_tabellen_eerste_opname;

    /**
     * The value for the versienummer_wcia_tabellen_laatste_wijziging field.
     * @var        int
     */
    protected $versienummer_wcia_tabellen_laatste_wijziging;

    /**
     * The value for the versienummer_wcia_tabellen_vervallen field.
     * @var        int
     */
    protected $versienummer_wcia_tabellen_vervallen;

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
     * Get the [uniek_nummer_per_tekstcategorie] column value.
     *
     * @return int
     */
    public function getUniekNummerPerTekstcategorie()
    {

        return $this->uniek_nummer_per_tekstcategorie;
    }

    /**
     * Get the [memocode_tekstcategorie] column value.
     *
     * @return string
     */
    public function getMemocodeTekstcategorie()
    {

        return $this->memocode_tekstcategorie;
    }

    /**
     * Get the [omschrijving_tekstcategorie] column value.
     *
     * @return string
     */
    public function getOmschrijvingTekstcategorie()
    {

        return $this->omschrijving_tekstcategorie;
    }

    /**
     * Get the [registratiedatum_gstandaard] column value.
     *
     * @return string
     */
    public function getRegistratiedatumGstandaard()
    {

        return $this->registratiedatum_gstandaard;
    }

    /**
     * Get the [versienummer_wcia_tabellen_eerste_opname] column value.
     *
     * @return int
     */
    public function getVersienummerWciaTabellenEersteOpname()
    {

        return $this->versienummer_wcia_tabellen_eerste_opname;
    }

    /**
     * Get the [versienummer_wcia_tabellen_laatste_wijziging] column value.
     *
     * @return int
     */
    public function getVersienummerWciaTabellenLaatsteWijziging()
    {

        return $this->versienummer_wcia_tabellen_laatste_wijziging;
    }

    /**
     * Get the [versienummer_wcia_tabellen_vervallen] column value.
     *
     * @return int
     */
    public function getVersienummerWciaTabellenVervallen()
    {

        return $this->versienummer_wcia_tabellen_vervallen;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsTekstcategorieTabel The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsTekstcategorieTabelPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsTekstcategorieTabel The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsTekstcategorieTabelPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [uniek_nummer_per_tekstcategorie] column.
     *
     * @param  int $v new value
     * @return GsTekstcategorieTabel The current object (for fluent API support)
     */
    public function setUniekNummerPerTekstcategorie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->uniek_nummer_per_tekstcategorie !== $v) {
            $this->uniek_nummer_per_tekstcategorie = $v;
            $this->modifiedColumns[] = GsTekstcategorieTabelPeer::UNIEK_NUMMER_PER_TEKSTCATEGORIE;
        }


        return $this;
    } // setUniekNummerPerTekstcategorie()

    /**
     * Set the value of [memocode_tekstcategorie] column.
     *
     * @param  string $v new value
     * @return GsTekstcategorieTabel The current object (for fluent API support)
     */
    public function setMemocodeTekstcategorie($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->memocode_tekstcategorie !== $v) {
            $this->memocode_tekstcategorie = $v;
            $this->modifiedColumns[] = GsTekstcategorieTabelPeer::MEMOCODE_TEKSTCATEGORIE;
        }


        return $this;
    } // setMemocodeTekstcategorie()

    /**
     * Set the value of [omschrijving_tekstcategorie] column.
     *
     * @param  string $v new value
     * @return GsTekstcategorieTabel The current object (for fluent API support)
     */
    public function setOmschrijvingTekstcategorie($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->omschrijving_tekstcategorie !== $v) {
            $this->omschrijving_tekstcategorie = $v;
            $this->modifiedColumns[] = GsTekstcategorieTabelPeer::OMSCHRIJVING_TEKSTCATEGORIE;
        }


        return $this;
    } // setOmschrijvingTekstcategorie()

    /**
     * Set the value of [registratiedatum_gstandaard] column.
     *
     * @param  string $v new value
     * @return GsTekstcategorieTabel The current object (for fluent API support)
     */
    public function setRegistratiedatumGstandaard($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->registratiedatum_gstandaard !== $v) {
            $this->registratiedatum_gstandaard = $v;
            $this->modifiedColumns[] = GsTekstcategorieTabelPeer::REGISTRATIEDATUM_GSTANDAARD;
        }


        return $this;
    } // setRegistratiedatumGstandaard()

    /**
     * Set the value of [versienummer_wcia_tabellen_eerste_opname] column.
     *
     * @param  int $v new value
     * @return GsTekstcategorieTabel The current object (for fluent API support)
     */
    public function setVersienummerWciaTabellenEersteOpname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->versienummer_wcia_tabellen_eerste_opname !== $v) {
            $this->versienummer_wcia_tabellen_eerste_opname = $v;
            $this->modifiedColumns[] = GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME;
        }


        return $this;
    } // setVersienummerWciaTabellenEersteOpname()

    /**
     * Set the value of [versienummer_wcia_tabellen_laatste_wijziging] column.
     *
     * @param  int $v new value
     * @return GsTekstcategorieTabel The current object (for fluent API support)
     */
    public function setVersienummerWciaTabellenLaatsteWijziging($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->versienummer_wcia_tabellen_laatste_wijziging !== $v) {
            $this->versienummer_wcia_tabellen_laatste_wijziging = $v;
            $this->modifiedColumns[] = GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING;
        }


        return $this;
    } // setVersienummerWciaTabellenLaatsteWijziging()

    /**
     * Set the value of [versienummer_wcia_tabellen_vervallen] column.
     *
     * @param  int $v new value
     * @return GsTekstcategorieTabel The current object (for fluent API support)
     */
    public function setVersienummerWciaTabellenVervallen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->versienummer_wcia_tabellen_vervallen !== $v) {
            $this->versienummer_wcia_tabellen_vervallen = $v;
            $this->modifiedColumns[] = GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN;
        }


        return $this;
    } // setVersienummerWciaTabellenVervallen()

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
            $this->uniek_nummer_per_tekstcategorie = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->memocode_tekstcategorie = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->omschrijving_tekstcategorie = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->registratiedatum_gstandaard = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->versienummer_wcia_tabellen_eerste_opname = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->versienummer_wcia_tabellen_laatste_wijziging = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->versienummer_wcia_tabellen_vervallen = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = GsTekstcategorieTabelPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsTekstcategorieTabel object", $e);
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
            $con = Propel::getConnection(GsTekstcategorieTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsTekstcategorieTabelPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsTekstcategorieTabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsTekstcategorieTabelQuery::create()
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
            $con = Propel::getConnection(GsTekstcategorieTabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsTekstcategorieTabelPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsTekstcategorieTabelPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsTekstcategorieTabelPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsTekstcategorieTabelPeer::UNIEK_NUMMER_PER_TEKSTCATEGORIE)) {
            $modifiedColumns[':p' . $index++]  = '`uniek_nummer_per_tekstcategorie`';
        }
        if ($this->isColumnModified(GsTekstcategorieTabelPeer::MEMOCODE_TEKSTCATEGORIE)) {
            $modifiedColumns[':p' . $index++]  = '`memocode_tekstcategorie`';
        }
        if ($this->isColumnModified(GsTekstcategorieTabelPeer::OMSCHRIJVING_TEKSTCATEGORIE)) {
            $modifiedColumns[':p' . $index++]  = '`omschrijving_tekstcategorie`';
        }
        if ($this->isColumnModified(GsTekstcategorieTabelPeer::REGISTRATIEDATUM_GSTANDAARD)) {
            $modifiedColumns[':p' . $index++]  = '`registratiedatum_gstandaard`';
        }
        if ($this->isColumnModified(GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME)) {
            $modifiedColumns[':p' . $index++]  = '`versienummer_wcia_tabellen_eerste_opname`';
        }
        if ($this->isColumnModified(GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING)) {
            $modifiedColumns[':p' . $index++]  = '`versienummer_wcia_tabellen_laatste_wijziging`';
        }
        if ($this->isColumnModified(GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN)) {
            $modifiedColumns[':p' . $index++]  = '`versienummer_wcia_tabellen_vervallen`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_tekstcategorie_tabel` (%s) VALUES (%s)',
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
                    case '`uniek_nummer_per_tekstcategorie`':
                        $stmt->bindValue($identifier, $this->uniek_nummer_per_tekstcategorie, PDO::PARAM_INT);
                        break;
                    case '`memocode_tekstcategorie`':
                        $stmt->bindValue($identifier, $this->memocode_tekstcategorie, PDO::PARAM_STR);
                        break;
                    case '`omschrijving_tekstcategorie`':
                        $stmt->bindValue($identifier, $this->omschrijving_tekstcategorie, PDO::PARAM_STR);
                        break;
                    case '`registratiedatum_gstandaard`':
                        $stmt->bindValue($identifier, $this->registratiedatum_gstandaard, PDO::PARAM_STR);
                        break;
                    case '`versienummer_wcia_tabellen_eerste_opname`':
                        $stmt->bindValue($identifier, $this->versienummer_wcia_tabellen_eerste_opname, PDO::PARAM_INT);
                        break;
                    case '`versienummer_wcia_tabellen_laatste_wijziging`':
                        $stmt->bindValue($identifier, $this->versienummer_wcia_tabellen_laatste_wijziging, PDO::PARAM_INT);
                        break;
                    case '`versienummer_wcia_tabellen_vervallen`':
                        $stmt->bindValue($identifier, $this->versienummer_wcia_tabellen_vervallen, PDO::PARAM_INT);
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


            if (($retval = GsTekstcategorieTabelPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsTekstcategorieTabelPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getUniekNummerPerTekstcategorie();
                break;
            case 3:
                return $this->getMemocodeTekstcategorie();
                break;
            case 4:
                return $this->getOmschrijvingTekstcategorie();
                break;
            case 5:
                return $this->getRegistratiedatumGstandaard();
                break;
            case 6:
                return $this->getVersienummerWciaTabellenEersteOpname();
                break;
            case 7:
                return $this->getVersienummerWciaTabellenLaatsteWijziging();
                break;
            case 8:
                return $this->getVersienummerWciaTabellenVervallen();
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
        if (isset($alreadyDumpedObjects['GsTekstcategorieTabel'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsTekstcategorieTabel'][$this->getPrimaryKey()] = true;
        $keys = GsTekstcategorieTabelPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getUniekNummerPerTekstcategorie(),
            $keys[3] => $this->getMemocodeTekstcategorie(),
            $keys[4] => $this->getOmschrijvingTekstcategorie(),
            $keys[5] => $this->getRegistratiedatumGstandaard(),
            $keys[6] => $this->getVersienummerWciaTabellenEersteOpname(),
            $keys[7] => $this->getVersienummerWciaTabellenLaatsteWijziging(),
            $keys[8] => $this->getVersienummerWciaTabellenVervallen(),
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
        $pos = GsTekstcategorieTabelPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setUniekNummerPerTekstcategorie($value);
                break;
            case 3:
                $this->setMemocodeTekstcategorie($value);
                break;
            case 4:
                $this->setOmschrijvingTekstcategorie($value);
                break;
            case 5:
                $this->setRegistratiedatumGstandaard($value);
                break;
            case 6:
                $this->setVersienummerWciaTabellenEersteOpname($value);
                break;
            case 7:
                $this->setVersienummerWciaTabellenLaatsteWijziging($value);
                break;
            case 8:
                $this->setVersienummerWciaTabellenVervallen($value);
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
        $keys = GsTekstcategorieTabelPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setUniekNummerPerTekstcategorie($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMemocodeTekstcategorie($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOmschrijvingTekstcategorie($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRegistratiedatumGstandaard($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setVersienummerWciaTabellenEersteOpname($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setVersienummerWciaTabellenLaatsteWijziging($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVersienummerWciaTabellenVervallen($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsTekstcategorieTabelPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsTekstcategorieTabelPeer::BESTANDNUMMER)) $criteria->add(GsTekstcategorieTabelPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsTekstcategorieTabelPeer::MUTATIEKODE)) $criteria->add(GsTekstcategorieTabelPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsTekstcategorieTabelPeer::UNIEK_NUMMER_PER_TEKSTCATEGORIE)) $criteria->add(GsTekstcategorieTabelPeer::UNIEK_NUMMER_PER_TEKSTCATEGORIE, $this->uniek_nummer_per_tekstcategorie);
        if ($this->isColumnModified(GsTekstcategorieTabelPeer::MEMOCODE_TEKSTCATEGORIE)) $criteria->add(GsTekstcategorieTabelPeer::MEMOCODE_TEKSTCATEGORIE, $this->memocode_tekstcategorie);
        if ($this->isColumnModified(GsTekstcategorieTabelPeer::OMSCHRIJVING_TEKSTCATEGORIE)) $criteria->add(GsTekstcategorieTabelPeer::OMSCHRIJVING_TEKSTCATEGORIE, $this->omschrijving_tekstcategorie);
        if ($this->isColumnModified(GsTekstcategorieTabelPeer::REGISTRATIEDATUM_GSTANDAARD)) $criteria->add(GsTekstcategorieTabelPeer::REGISTRATIEDATUM_GSTANDAARD, $this->registratiedatum_gstandaard);
        if ($this->isColumnModified(GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME)) $criteria->add(GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME, $this->versienummer_wcia_tabellen_eerste_opname);
        if ($this->isColumnModified(GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING)) $criteria->add(GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING, $this->versienummer_wcia_tabellen_laatste_wijziging);
        if ($this->isColumnModified(GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN)) $criteria->add(GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN, $this->versienummer_wcia_tabellen_vervallen);

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
        $criteria = new Criteria(GsTekstcategorieTabelPeer::DATABASE_NAME);
        $criteria->add(GsTekstcategorieTabelPeer::UNIEK_NUMMER_PER_TEKSTCATEGORIE, $this->uniek_nummer_per_tekstcategorie);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getUniekNummerPerTekstcategorie();
    }

    /**
     * Generic method to set the primary key (uniek_nummer_per_tekstcategorie column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setUniekNummerPerTekstcategorie($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getUniekNummerPerTekstcategorie();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsTekstcategorieTabel (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setMemocodeTekstcategorie($this->getMemocodeTekstcategorie());
        $copyObj->setOmschrijvingTekstcategorie($this->getOmschrijvingTekstcategorie());
        $copyObj->setRegistratiedatumGstandaard($this->getRegistratiedatumGstandaard());
        $copyObj->setVersienummerWciaTabellenEersteOpname($this->getVersienummerWciaTabellenEersteOpname());
        $copyObj->setVersienummerWciaTabellenLaatsteWijziging($this->getVersienummerWciaTabellenLaatsteWijziging());
        $copyObj->setVersienummerWciaTabellenVervallen($this->getVersienummerWciaTabellenVervallen());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setUniekNummerPerTekstcategorie(NULL); // this is a auto-increment column, so set to default value
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
     * @return GsTekstcategorieTabel Clone of current object.
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
     * @return GsTekstcategorieTabelPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsTekstcategorieTabelPeer();
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
        $this->uniek_nummer_per_tekstcategorie = null;
        $this->memocode_tekstcategorie = null;
        $this->omschrijving_tekstcategorie = null;
        $this->registratiedatum_gstandaard = null;
        $this->versienummer_wcia_tabellen_eerste_opname = null;
        $this->versienummer_wcia_tabellen_laatste_wijziging = null;
        $this->versienummer_wcia_tabellen_vervallen = null;
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
        return (string) $this->exportTo(GsTekstcategorieTabelPeer::DEFAULT_STRING_FORMAT);
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
