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
use PharmaIntelligence\GstandaardBundle\Model\GsVerpakkingsthesaurus;
use PharmaIntelligence\GstandaardBundle\Model\GsVerpakkingsthesaurusPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsVerpakkingsthesaurusQuery;

abstract class BaseGsVerpakkingsthesaurus extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVerpakkingsthesaurusPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsVerpakkingsthesaurusPeer
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
     * The value for the identificatie_nummer field.
     * @var        string
     */
    protected $identificatie_nummer;

    /**
     * The value for the aantal_hoofdverpakkingen field.
     * @var        int
     */
    protected $aantal_hoofdverpakkingen;

    /**
     * The value for the hoofdverpakking_omschrijving_kode field.
     * @var        int
     */
    protected $hoofdverpakking_omschrijving_kode;

    /**
     * The value for the aantal_deelverpakkingen field.
     * @var        int
     */
    protected $aantal_deelverpakkingen;

    /**
     * The value for the deelverpakking_omschrijving_kode field.
     * @var        int
     */
    protected $deelverpakking_omschrijving_kode;

    /**
     * The value for the hoeveelheid_per_deelverpakking field.
     * @var        string
     */
    protected $hoeveelheid_per_deelverpakking;

    /**
     * The value for the basiseenheid_verpakking field.
     * @var        string
     */
    protected $basiseenheid_verpakking;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

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
     * Get the [identificatie_nummer] column value.
     *
     * @return string
     */
    public function getIdentificatieNummer()
    {

        return $this->identificatie_nummer;
    }

    /**
     * Get the [aantal_hoofdverpakkingen] column value.
     *
     * @return int
     */
    public function getAantalHoofdverpakkingen()
    {

        return $this->aantal_hoofdverpakkingen;
    }

    /**
     * Get the [hoofdverpakking_omschrijving_kode] column value.
     *
     * @return int
     */
    public function getHoofdverpakkingOmschrijvingKode()
    {

        return $this->hoofdverpakking_omschrijving_kode;
    }

    /**
     * Get the [aantal_deelverpakkingen] column value.
     *
     * @return int
     */
    public function getAantalDeelverpakkingen()
    {

        return $this->aantal_deelverpakkingen;
    }

    /**
     * Get the [deelverpakking_omschrijving_kode] column value.
     *
     * @return int
     */
    public function getDeelverpakkingOmschrijvingKode()
    {

        return $this->deelverpakking_omschrijving_kode;
    }

    /**
     * Get the [hoeveelheid_per_deelverpakking] column value.
     *
     * @return string
     */
    public function getHoeveelheidPerDeelverpakking()
    {

        return $this->hoeveelheid_per_deelverpakking;
    }

    /**
     * Get the [basiseenheid_verpakking] column value.
     *
     * @return string
     */
    public function getBasiseenheidVerpakking()
    {

        return $this->basiseenheid_verpakking;
    }

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsVerpakkingsthesaurus The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsVerpakkingsthesaurusPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsVerpakkingsthesaurus The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsVerpakkingsthesaurusPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [identificatie_nummer] column.
     *
     * @param  string $v new value
     * @return GsVerpakkingsthesaurus The current object (for fluent API support)
     */
    public function setIdentificatieNummer($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->identificatie_nummer !== $v) {
            $this->identificatie_nummer = $v;
            $this->modifiedColumns[] = GsVerpakkingsthesaurusPeer::IDENTIFICATIE_NUMMER;
        }


        return $this;
    } // setIdentificatieNummer()

    /**
     * Set the value of [aantal_hoofdverpakkingen] column.
     *
     * @param  int $v new value
     * @return GsVerpakkingsthesaurus The current object (for fluent API support)
     */
    public function setAantalHoofdverpakkingen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aantal_hoofdverpakkingen !== $v) {
            $this->aantal_hoofdverpakkingen = $v;
            $this->modifiedColumns[] = GsVerpakkingsthesaurusPeer::AANTAL_HOOFDVERPAKKINGEN;
        }


        return $this;
    } // setAantalHoofdverpakkingen()

    /**
     * Set the value of [hoofdverpakking_omschrijving_kode] column.
     *
     * @param  int $v new value
     * @return GsVerpakkingsthesaurus The current object (for fluent API support)
     */
    public function setHoofdverpakkingOmschrijvingKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hoofdverpakking_omschrijving_kode !== $v) {
            $this->hoofdverpakking_omschrijving_kode = $v;
            $this->modifiedColumns[] = GsVerpakkingsthesaurusPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE;
        }


        return $this;
    } // setHoofdverpakkingOmschrijvingKode()

    /**
     * Set the value of [aantal_deelverpakkingen] column.
     *
     * @param  int $v new value
     * @return GsVerpakkingsthesaurus The current object (for fluent API support)
     */
    public function setAantalDeelverpakkingen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aantal_deelverpakkingen !== $v) {
            $this->aantal_deelverpakkingen = $v;
            $this->modifiedColumns[] = GsVerpakkingsthesaurusPeer::AANTAL_DEELVERPAKKINGEN;
        }


        return $this;
    } // setAantalDeelverpakkingen()

    /**
     * Set the value of [deelverpakking_omschrijving_kode] column.
     *
     * @param  int $v new value
     * @return GsVerpakkingsthesaurus The current object (for fluent API support)
     */
    public function setDeelverpakkingOmschrijvingKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->deelverpakking_omschrijving_kode !== $v) {
            $this->deelverpakking_omschrijving_kode = $v;
            $this->modifiedColumns[] = GsVerpakkingsthesaurusPeer::DEELVERPAKKING_OMSCHRIJVING_KODE;
        }


        return $this;
    } // setDeelverpakkingOmschrijvingKode()

    /**
     * Set the value of [hoeveelheid_per_deelverpakking] column.
     *
     * @param  string $v new value
     * @return GsVerpakkingsthesaurus The current object (for fluent API support)
     */
    public function setHoeveelheidPerDeelverpakking($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hoeveelheid_per_deelverpakking !== $v) {
            $this->hoeveelheid_per_deelverpakking = $v;
            $this->modifiedColumns[] = GsVerpakkingsthesaurusPeer::HOEVEELHEID_PER_DEELVERPAKKING;
        }


        return $this;
    } // setHoeveelheidPerDeelverpakking()

    /**
     * Set the value of [basiseenheid_verpakking] column.
     *
     * @param  string $v new value
     * @return GsVerpakkingsthesaurus The current object (for fluent API support)
     */
    public function setBasiseenheidVerpakking($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->basiseenheid_verpakking !== $v) {
            $this->basiseenheid_verpakking = $v;
            $this->modifiedColumns[] = GsVerpakkingsthesaurusPeer::BASISEENHEID_VERPAKKING;
        }


        return $this;
    } // setBasiseenheidVerpakking()

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return GsVerpakkingsthesaurus The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = GsVerpakkingsthesaurusPeer::ID;
        }


        return $this;
    } // setId()

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
            $this->identificatie_nummer = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->aantal_hoofdverpakkingen = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->hoofdverpakking_omschrijving_kode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->aantal_deelverpakkingen = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->deelverpakking_omschrijving_kode = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->hoeveelheid_per_deelverpakking = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->basiseenheid_verpakking = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->id = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = GsVerpakkingsthesaurusPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsVerpakkingsthesaurus object", $e);
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
            $con = Propel::getConnection(GsVerpakkingsthesaurusPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsVerpakkingsthesaurusPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsVerpakkingsthesaurusPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsVerpakkingsthesaurusQuery::create()
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
            $con = Propel::getConnection(GsVerpakkingsthesaurusPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsVerpakkingsthesaurusPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = GsVerpakkingsthesaurusPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . GsVerpakkingsthesaurusPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::IDENTIFICATIE_NUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`identificatie_nummer`';
        }
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::AANTAL_HOOFDVERPAKKINGEN)) {
            $modifiedColumns[':p' . $index++]  = '`aantal_hoofdverpakkingen`';
        }
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`hoofdverpakking_omschrijving_kode`';
        }
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::AANTAL_DEELVERPAKKINGEN)) {
            $modifiedColumns[':p' . $index++]  = '`aantal_deelverpakkingen`';
        }
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::DEELVERPAKKING_OMSCHRIJVING_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`deelverpakking_omschrijving_kode`';
        }
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::HOEVEELHEID_PER_DEELVERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`hoeveelheid_per_deelverpakking`';
        }
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::BASISEENHEID_VERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`basiseenheid_verpakking`';
        }
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_verpakkingsthesaurus` (%s) VALUES (%s)',
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
                    case '`identificatie_nummer`':
                        $stmt->bindValue($identifier, $this->identificatie_nummer, PDO::PARAM_STR);
                        break;
                    case '`aantal_hoofdverpakkingen`':
                        $stmt->bindValue($identifier, $this->aantal_hoofdverpakkingen, PDO::PARAM_INT);
                        break;
                    case '`hoofdverpakking_omschrijving_kode`':
                        $stmt->bindValue($identifier, $this->hoofdverpakking_omschrijving_kode, PDO::PARAM_INT);
                        break;
                    case '`aantal_deelverpakkingen`':
                        $stmt->bindValue($identifier, $this->aantal_deelverpakkingen, PDO::PARAM_INT);
                        break;
                    case '`deelverpakking_omschrijving_kode`':
                        $stmt->bindValue($identifier, $this->deelverpakking_omschrijving_kode, PDO::PARAM_INT);
                        break;
                    case '`hoeveelheid_per_deelverpakking`':
                        $stmt->bindValue($identifier, $this->hoeveelheid_per_deelverpakking, PDO::PARAM_STR);
                        break;
                    case '`basiseenheid_verpakking`':
                        $stmt->bindValue($identifier, $this->basiseenheid_verpakking, PDO::PARAM_STR);
                        break;
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

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


            if (($retval = GsVerpakkingsthesaurusPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsVerpakkingsthesaurusPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdentificatieNummer();
                break;
            case 3:
                return $this->getAantalHoofdverpakkingen();
                break;
            case 4:
                return $this->getHoofdverpakkingOmschrijvingKode();
                break;
            case 5:
                return $this->getAantalDeelverpakkingen();
                break;
            case 6:
                return $this->getDeelverpakkingOmschrijvingKode();
                break;
            case 7:
                return $this->getHoeveelheidPerDeelverpakking();
                break;
            case 8:
                return $this->getBasiseenheidVerpakking();
                break;
            case 9:
                return $this->getId();
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
        if (isset($alreadyDumpedObjects['GsVerpakkingsthesaurus'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsVerpakkingsthesaurus'][$this->getPrimaryKey()] = true;
        $keys = GsVerpakkingsthesaurusPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getIdentificatieNummer(),
            $keys[3] => $this->getAantalHoofdverpakkingen(),
            $keys[4] => $this->getHoofdverpakkingOmschrijvingKode(),
            $keys[5] => $this->getAantalDeelverpakkingen(),
            $keys[6] => $this->getDeelverpakkingOmschrijvingKode(),
            $keys[7] => $this->getHoeveelheidPerDeelverpakking(),
            $keys[8] => $this->getBasiseenheidVerpakking(),
            $keys[9] => $this->getId(),
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
        $pos = GsVerpakkingsthesaurusPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdentificatieNummer($value);
                break;
            case 3:
                $this->setAantalHoofdverpakkingen($value);
                break;
            case 4:
                $this->setHoofdverpakkingOmschrijvingKode($value);
                break;
            case 5:
                $this->setAantalDeelverpakkingen($value);
                break;
            case 6:
                $this->setDeelverpakkingOmschrijvingKode($value);
                break;
            case 7:
                $this->setHoeveelheidPerDeelverpakking($value);
                break;
            case 8:
                $this->setBasiseenheidVerpakking($value);
                break;
            case 9:
                $this->setId($value);
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
        $keys = GsVerpakkingsthesaurusPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdentificatieNummer($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAantalHoofdverpakkingen($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setHoofdverpakkingOmschrijvingKode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAantalDeelverpakkingen($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDeelverpakkingOmschrijvingKode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setHoeveelheidPerDeelverpakking($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setBasiseenheidVerpakking($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setId($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsVerpakkingsthesaurusPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::BESTANDNUMMER)) $criteria->add(GsVerpakkingsthesaurusPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::MUTATIEKODE)) $criteria->add(GsVerpakkingsthesaurusPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::IDENTIFICATIE_NUMMER)) $criteria->add(GsVerpakkingsthesaurusPeer::IDENTIFICATIE_NUMMER, $this->identificatie_nummer);
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::AANTAL_HOOFDVERPAKKINGEN)) $criteria->add(GsVerpakkingsthesaurusPeer::AANTAL_HOOFDVERPAKKINGEN, $this->aantal_hoofdverpakkingen);
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE)) $criteria->add(GsVerpakkingsthesaurusPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, $this->hoofdverpakking_omschrijving_kode);
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::AANTAL_DEELVERPAKKINGEN)) $criteria->add(GsVerpakkingsthesaurusPeer::AANTAL_DEELVERPAKKINGEN, $this->aantal_deelverpakkingen);
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::DEELVERPAKKING_OMSCHRIJVING_KODE)) $criteria->add(GsVerpakkingsthesaurusPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, $this->deelverpakking_omschrijving_kode);
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::HOEVEELHEID_PER_DEELVERPAKKING)) $criteria->add(GsVerpakkingsthesaurusPeer::HOEVEELHEID_PER_DEELVERPAKKING, $this->hoeveelheid_per_deelverpakking);
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::BASISEENHEID_VERPAKKING)) $criteria->add(GsVerpakkingsthesaurusPeer::BASISEENHEID_VERPAKKING, $this->basiseenheid_verpakking);
        if ($this->isColumnModified(GsVerpakkingsthesaurusPeer::ID)) $criteria->add(GsVerpakkingsthesaurusPeer::ID, $this->id);

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
        $criteria = new Criteria(GsVerpakkingsthesaurusPeer::DATABASE_NAME);
        $criteria->add(GsVerpakkingsthesaurusPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsVerpakkingsthesaurus (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setIdentificatieNummer($this->getIdentificatieNummer());
        $copyObj->setAantalHoofdverpakkingen($this->getAantalHoofdverpakkingen());
        $copyObj->setHoofdverpakkingOmschrijvingKode($this->getHoofdverpakkingOmschrijvingKode());
        $copyObj->setAantalDeelverpakkingen($this->getAantalDeelverpakkingen());
        $copyObj->setDeelverpakkingOmschrijvingKode($this->getDeelverpakkingOmschrijvingKode());
        $copyObj->setHoeveelheidPerDeelverpakking($this->getHoeveelheidPerDeelverpakking());
        $copyObj->setBasiseenheidVerpakking($this->getBasiseenheidVerpakking());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
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
     * @return GsVerpakkingsthesaurus Clone of current object.
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
     * @return GsVerpakkingsthesaurusPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsVerpakkingsthesaurusPeer();
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
        $this->identificatie_nummer = null;
        $this->aantal_hoofdverpakkingen = null;
        $this->hoofdverpakking_omschrijving_kode = null;
        $this->aantal_deelverpakkingen = null;
        $this->deelverpakking_omschrijving_kode = null;
        $this->hoeveelheid_per_deelverpakking = null;
        $this->basiseenheid_verpakking = null;
        $this->id = null;
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
        return (string) $this->exportTo(GsVerpakkingsthesaurusPeer::DEFAULT_STRING_FORMAT);
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
