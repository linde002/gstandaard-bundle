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
use PharmaIntelligence\GstandaardBundle\Model\GsDoseringenUitzonderingenOpBasis;
use PharmaIntelligence\GstandaardBundle\Model\GsDoseringenUitzonderingenOpBasisPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsDoseringenUitzonderingenOpBasisQuery;

abstract class BaseGsDoseringenUitzonderingenOpBasis extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDoseringenUitzonderingenOpBasisPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsDoseringenUitzonderingenOpBasisPeer
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
     * The value for the dosisbasisnummer field.
     * @var        int
     */
    protected $dosisbasisnummer;

    /**
     * The value for the identificerend_volgnummer field.
     * @var        int
     */
    protected $identificerend_volgnummer;

    /**
     * The value for the thesaurus_zorggroepcodering field.
     * @var        int
     */
    protected $thesaurus_zorggroepcodering;

    /**
     * The value for the zorggroepcodering field.
     * @var        int
     */
    protected $zorggroepcodering;

    /**
     * The value for the icpc1nummer field.
     * @var        int
     */
    protected $icpc1nummer;

    /**
     * The value for the thesaurus_verbijzondering field.
     * @var        int
     */
    protected $thesaurus_verbijzondering;

    /**
     * The value for the verbijzondering field.
     * @var        int
     */
    protected $verbijzondering;

    /**
     * The value for the icpc2nummer field.
     * @var        int
     */
    protected $icpc2nummer;

    /**
     * The value for the icd10nummer field.
     * @var        int
     */
    protected $icd10nummer;

    /**
     * The value for the thesaurus_afwijkende_toedieningsweg field.
     * @var        int
     */
    protected $thesaurus_afwijkende_toedieningsweg;

    /**
     * The value for the toedieningsweg_code field.
     * @var        int
     */
    protected $toedieningsweg_code;

    /**
     * The value for the dosiscategorienummer field.
     * @var        int
     */
    protected $dosiscategorienummer;

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
     * Get the [dosisbasisnummer] column value.
     *
     * @return int
     */
    public function getDosisbasisnummer()
    {

        return $this->dosisbasisnummer;
    }

    /**
     * Get the [identificerend_volgnummer] column value.
     *
     * @return int
     */
    public function getIdentificerendVolgnummer()
    {

        return $this->identificerend_volgnummer;
    }

    /**
     * Get the [thesaurus_zorggroepcodering] column value.
     *
     * @return int
     */
    public function getThesaurusZorggroepcodering()
    {

        return $this->thesaurus_zorggroepcodering;
    }

    /**
     * Get the [zorggroepcodering] column value.
     *
     * @return int
     */
    public function getZorggroepcodering()
    {

        return $this->zorggroepcodering;
    }

    /**
     * Get the [icpc1nummer] column value.
     *
     * @return int
     */
    public function getIcpc1nummer()
    {

        return $this->icpc1nummer;
    }

    /**
     * Get the [thesaurus_verbijzondering] column value.
     *
     * @return int
     */
    public function getThesaurusVerbijzondering()
    {

        return $this->thesaurus_verbijzondering;
    }

    /**
     * Get the [verbijzondering] column value.
     *
     * @return int
     */
    public function getVerbijzondering()
    {

        return $this->verbijzondering;
    }

    /**
     * Get the [icpc2nummer] column value.
     *
     * @return int
     */
    public function getIcpc2nummer()
    {

        return $this->icpc2nummer;
    }

    /**
     * Get the [icd10nummer] column value.
     *
     * @return int
     */
    public function getIcd10nummer()
    {

        return $this->icd10nummer;
    }

    /**
     * Get the [thesaurus_afwijkende_toedieningsweg] column value.
     *
     * @return int
     */
    public function getThesaurusAfwijkendeToedieningsweg()
    {

        return $this->thesaurus_afwijkende_toedieningsweg;
    }

    /**
     * Get the [toedieningsweg_code] column value.
     *
     * @return int
     */
    public function getToedieningswegCode()
    {

        return $this->toedieningsweg_code;
    }

    /**
     * Get the [dosiscategorienummer] column value.
     *
     * @return int
     */
    public function getDosiscategorienummer()
    {

        return $this->dosiscategorienummer;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsDoseringenUitzonderingenOpBasis The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsDoseringenUitzonderingenOpBasisPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsDoseringenUitzonderingenOpBasis The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsDoseringenUitzonderingenOpBasisPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [dosisbasisnummer] column.
     *
     * @param  int $v new value
     * @return GsDoseringenUitzonderingenOpBasis The current object (for fluent API support)
     */
    public function setDosisbasisnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dosisbasisnummer !== $v) {
            $this->dosisbasisnummer = $v;
            $this->modifiedColumns[] = GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER;
        }


        return $this;
    } // setDosisbasisnummer()

    /**
     * Set the value of [identificerend_volgnummer] column.
     *
     * @param  int $v new value
     * @return GsDoseringenUitzonderingenOpBasis The current object (for fluent API support)
     */
    public function setIdentificerendVolgnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->identificerend_volgnummer !== $v) {
            $this->identificerend_volgnummer = $v;
            $this->modifiedColumns[] = GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER;
        }


        return $this;
    } // setIdentificerendVolgnummer()

    /**
     * Set the value of [thesaurus_zorggroepcodering] column.
     *
     * @param  int $v new value
     * @return GsDoseringenUitzonderingenOpBasis The current object (for fluent API support)
     */
    public function setThesaurusZorggroepcodering($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurus_zorggroepcodering !== $v) {
            $this->thesaurus_zorggroepcodering = $v;
            $this->modifiedColumns[] = GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_ZORGGROEPCODERING;
        }


        return $this;
    } // setThesaurusZorggroepcodering()

    /**
     * Set the value of [zorggroepcodering] column.
     *
     * @param  int $v new value
     * @return GsDoseringenUitzonderingenOpBasis The current object (for fluent API support)
     */
    public function setZorggroepcodering($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zorggroepcodering !== $v) {
            $this->zorggroepcodering = $v;
            $this->modifiedColumns[] = GsDoseringenUitzonderingenOpBasisPeer::ZORGGROEPCODERING;
        }


        return $this;
    } // setZorggroepcodering()

    /**
     * Set the value of [icpc1nummer] column.
     *
     * @param  int $v new value
     * @return GsDoseringenUitzonderingenOpBasis The current object (for fluent API support)
     */
    public function setIcpc1nummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->icpc1nummer !== $v) {
            $this->icpc1nummer = $v;
            $this->modifiedColumns[] = GsDoseringenUitzonderingenOpBasisPeer::ICPC1NUMMER;
        }


        return $this;
    } // setIcpc1nummer()

    /**
     * Set the value of [thesaurus_verbijzondering] column.
     *
     * @param  int $v new value
     * @return GsDoseringenUitzonderingenOpBasis The current object (for fluent API support)
     */
    public function setThesaurusVerbijzondering($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurus_verbijzondering !== $v) {
            $this->thesaurus_verbijzondering = $v;
            $this->modifiedColumns[] = GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_VERBIJZONDERING;
        }


        return $this;
    } // setThesaurusVerbijzondering()

    /**
     * Set the value of [verbijzondering] column.
     *
     * @param  int $v new value
     * @return GsDoseringenUitzonderingenOpBasis The current object (for fluent API support)
     */
    public function setVerbijzondering($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->verbijzondering !== $v) {
            $this->verbijzondering = $v;
            $this->modifiedColumns[] = GsDoseringenUitzonderingenOpBasisPeer::VERBIJZONDERING;
        }


        return $this;
    } // setVerbijzondering()

    /**
     * Set the value of [icpc2nummer] column.
     *
     * @param  int $v new value
     * @return GsDoseringenUitzonderingenOpBasis The current object (for fluent API support)
     */
    public function setIcpc2nummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->icpc2nummer !== $v) {
            $this->icpc2nummer = $v;
            $this->modifiedColumns[] = GsDoseringenUitzonderingenOpBasisPeer::ICPC2NUMMER;
        }


        return $this;
    } // setIcpc2nummer()

    /**
     * Set the value of [icd10nummer] column.
     *
     * @param  int $v new value
     * @return GsDoseringenUitzonderingenOpBasis The current object (for fluent API support)
     */
    public function setIcd10nummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->icd10nummer !== $v) {
            $this->icd10nummer = $v;
            $this->modifiedColumns[] = GsDoseringenUitzonderingenOpBasisPeer::ICD10NUMMER;
        }


        return $this;
    } // setIcd10nummer()

    /**
     * Set the value of [thesaurus_afwijkende_toedieningsweg] column.
     *
     * @param  int $v new value
     * @return GsDoseringenUitzonderingenOpBasis The current object (for fluent API support)
     */
    public function setThesaurusAfwijkendeToedieningsweg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurus_afwijkende_toedieningsweg !== $v) {
            $this->thesaurus_afwijkende_toedieningsweg = $v;
            $this->modifiedColumns[] = GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_AFWIJKENDE_TOEDIENINGSWEG;
        }


        return $this;
    } // setThesaurusAfwijkendeToedieningsweg()

    /**
     * Set the value of [toedieningsweg_code] column.
     *
     * @param  int $v new value
     * @return GsDoseringenUitzonderingenOpBasis The current object (for fluent API support)
     */
    public function setToedieningswegCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->toedieningsweg_code !== $v) {
            $this->toedieningsweg_code = $v;
            $this->modifiedColumns[] = GsDoseringenUitzonderingenOpBasisPeer::TOEDIENINGSWEG_CODE;
        }


        return $this;
    } // setToedieningswegCode()

    /**
     * Set the value of [dosiscategorienummer] column.
     *
     * @param  int $v new value
     * @return GsDoseringenUitzonderingenOpBasis The current object (for fluent API support)
     */
    public function setDosiscategorienummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dosiscategorienummer !== $v) {
            $this->dosiscategorienummer = $v;
            $this->modifiedColumns[] = GsDoseringenUitzonderingenOpBasisPeer::DOSISCATEGORIENUMMER;
        }


        return $this;
    } // setDosiscategorienummer()

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
            $this->dosisbasisnummer = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->identificerend_volgnummer = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->thesaurus_zorggroepcodering = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->zorggroepcodering = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->icpc1nummer = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->thesaurus_verbijzondering = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->verbijzondering = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->icpc2nummer = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->icd10nummer = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->thesaurus_afwijkende_toedieningsweg = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->toedieningsweg_code = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->dosiscategorienummer = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = GsDoseringenUitzonderingenOpBasisPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsDoseringenUitzonderingenOpBasis object", $e);
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
            $con = Propel::getConnection(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsDoseringenUitzonderingenOpBasisPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsDoseringenUitzonderingenOpBasisQuery::create()
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
            $con = Propel::getConnection(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsDoseringenUitzonderingenOpBasisPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`dosisbasisnummer`';
        }
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`identificerend_volgnummer`';
        }
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_ZORGGROEPCODERING)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurus_zorggroepcodering`';
        }
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::ZORGGROEPCODERING)) {
            $modifiedColumns[':p' . $index++]  = '`zorggroepcodering`';
        }
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::ICPC1NUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`icpc1nummer`';
        }
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_VERBIJZONDERING)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurus_verbijzondering`';
        }
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::VERBIJZONDERING)) {
            $modifiedColumns[':p' . $index++]  = '`verbijzondering`';
        }
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::ICPC2NUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`icpc2nummer`';
        }
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::ICD10NUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`icd10nummer`';
        }
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_AFWIJKENDE_TOEDIENINGSWEG)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurus_afwijkende_toedieningsweg`';
        }
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::TOEDIENINGSWEG_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`toedieningsweg_code`';
        }
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::DOSISCATEGORIENUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`dosiscategorienummer`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_doseringen_uitzonderingen_op_basis` (%s) VALUES (%s)',
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
                    case '`dosisbasisnummer`':
                        $stmt->bindValue($identifier, $this->dosisbasisnummer, PDO::PARAM_INT);
                        break;
                    case '`identificerend_volgnummer`':
                        $stmt->bindValue($identifier, $this->identificerend_volgnummer, PDO::PARAM_INT);
                        break;
                    case '`thesaurus_zorggroepcodering`':
                        $stmt->bindValue($identifier, $this->thesaurus_zorggroepcodering, PDO::PARAM_INT);
                        break;
                    case '`zorggroepcodering`':
                        $stmt->bindValue($identifier, $this->zorggroepcodering, PDO::PARAM_INT);
                        break;
                    case '`icpc1nummer`':
                        $stmt->bindValue($identifier, $this->icpc1nummer, PDO::PARAM_INT);
                        break;
                    case '`thesaurus_verbijzondering`':
                        $stmt->bindValue($identifier, $this->thesaurus_verbijzondering, PDO::PARAM_INT);
                        break;
                    case '`verbijzondering`':
                        $stmt->bindValue($identifier, $this->verbijzondering, PDO::PARAM_INT);
                        break;
                    case '`icpc2nummer`':
                        $stmt->bindValue($identifier, $this->icpc2nummer, PDO::PARAM_INT);
                        break;
                    case '`icd10nummer`':
                        $stmt->bindValue($identifier, $this->icd10nummer, PDO::PARAM_INT);
                        break;
                    case '`thesaurus_afwijkende_toedieningsweg`':
                        $stmt->bindValue($identifier, $this->thesaurus_afwijkende_toedieningsweg, PDO::PARAM_INT);
                        break;
                    case '`toedieningsweg_code`':
                        $stmt->bindValue($identifier, $this->toedieningsweg_code, PDO::PARAM_INT);
                        break;
                    case '`dosiscategorienummer`':
                        $stmt->bindValue($identifier, $this->dosiscategorienummer, PDO::PARAM_INT);
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


            if (($retval = GsDoseringenUitzonderingenOpBasisPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsDoseringenUitzonderingenOpBasisPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getDosisbasisnummer();
                break;
            case 3:
                return $this->getIdentificerendVolgnummer();
                break;
            case 4:
                return $this->getThesaurusZorggroepcodering();
                break;
            case 5:
                return $this->getZorggroepcodering();
                break;
            case 6:
                return $this->getIcpc1nummer();
                break;
            case 7:
                return $this->getThesaurusVerbijzondering();
                break;
            case 8:
                return $this->getVerbijzondering();
                break;
            case 9:
                return $this->getIcpc2nummer();
                break;
            case 10:
                return $this->getIcd10nummer();
                break;
            case 11:
                return $this->getThesaurusAfwijkendeToedieningsweg();
                break;
            case 12:
                return $this->getToedieningswegCode();
                break;
            case 13:
                return $this->getDosiscategorienummer();
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
        if (isset($alreadyDumpedObjects['GsDoseringenUitzonderingenOpBasis'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsDoseringenUitzonderingenOpBasis'][serialize($this->getPrimaryKey())] = true;
        $keys = GsDoseringenUitzonderingenOpBasisPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getDosisbasisnummer(),
            $keys[3] => $this->getIdentificerendVolgnummer(),
            $keys[4] => $this->getThesaurusZorggroepcodering(),
            $keys[5] => $this->getZorggroepcodering(),
            $keys[6] => $this->getIcpc1nummer(),
            $keys[7] => $this->getThesaurusVerbijzondering(),
            $keys[8] => $this->getVerbijzondering(),
            $keys[9] => $this->getIcpc2nummer(),
            $keys[10] => $this->getIcd10nummer(),
            $keys[11] => $this->getThesaurusAfwijkendeToedieningsweg(),
            $keys[12] => $this->getToedieningswegCode(),
            $keys[13] => $this->getDosiscategorienummer(),
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
        $pos = GsDoseringenUitzonderingenOpBasisPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setDosisbasisnummer($value);
                break;
            case 3:
                $this->setIdentificerendVolgnummer($value);
                break;
            case 4:
                $this->setThesaurusZorggroepcodering($value);
                break;
            case 5:
                $this->setZorggroepcodering($value);
                break;
            case 6:
                $this->setIcpc1nummer($value);
                break;
            case 7:
                $this->setThesaurusVerbijzondering($value);
                break;
            case 8:
                $this->setVerbijzondering($value);
                break;
            case 9:
                $this->setIcpc2nummer($value);
                break;
            case 10:
                $this->setIcd10nummer($value);
                break;
            case 11:
                $this->setThesaurusAfwijkendeToedieningsweg($value);
                break;
            case 12:
                $this->setToedieningswegCode($value);
                break;
            case 13:
                $this->setDosiscategorienummer($value);
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
        $keys = GsDoseringenUitzonderingenOpBasisPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDosisbasisnummer($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdentificerendVolgnummer($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setThesaurusZorggroepcodering($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setZorggroepcodering($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIcpc1nummer($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setThesaurusVerbijzondering($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVerbijzondering($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setIcpc2nummer($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIcd10nummer($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setThesaurusAfwijkendeToedieningsweg($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setToedieningswegCode($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDosiscategorienummer($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::BESTANDNUMMER)) $criteria->add(GsDoseringenUitzonderingenOpBasisPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::MUTATIEKODE)) $criteria->add(GsDoseringenUitzonderingenOpBasisPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER)) $criteria->add(GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER, $this->dosisbasisnummer);
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER)) $criteria->add(GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER, $this->identificerend_volgnummer);
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_ZORGGROEPCODERING)) $criteria->add(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_ZORGGROEPCODERING, $this->thesaurus_zorggroepcodering);
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::ZORGGROEPCODERING)) $criteria->add(GsDoseringenUitzonderingenOpBasisPeer::ZORGGROEPCODERING, $this->zorggroepcodering);
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::ICPC1NUMMER)) $criteria->add(GsDoseringenUitzonderingenOpBasisPeer::ICPC1NUMMER, $this->icpc1nummer);
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_VERBIJZONDERING)) $criteria->add(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_VERBIJZONDERING, $this->thesaurus_verbijzondering);
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::VERBIJZONDERING)) $criteria->add(GsDoseringenUitzonderingenOpBasisPeer::VERBIJZONDERING, $this->verbijzondering);
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::ICPC2NUMMER)) $criteria->add(GsDoseringenUitzonderingenOpBasisPeer::ICPC2NUMMER, $this->icpc2nummer);
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::ICD10NUMMER)) $criteria->add(GsDoseringenUitzonderingenOpBasisPeer::ICD10NUMMER, $this->icd10nummer);
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_AFWIJKENDE_TOEDIENINGSWEG)) $criteria->add(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_AFWIJKENDE_TOEDIENINGSWEG, $this->thesaurus_afwijkende_toedieningsweg);
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::TOEDIENINGSWEG_CODE)) $criteria->add(GsDoseringenUitzonderingenOpBasisPeer::TOEDIENINGSWEG_CODE, $this->toedieningsweg_code);
        if ($this->isColumnModified(GsDoseringenUitzonderingenOpBasisPeer::DOSISCATEGORIENUMMER)) $criteria->add(GsDoseringenUitzonderingenOpBasisPeer::DOSISCATEGORIENUMMER, $this->dosiscategorienummer);

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
        $criteria = new Criteria(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME);
        $criteria->add(GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER, $this->dosisbasisnummer);
        $criteria->add(GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER, $this->identificerend_volgnummer);

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
        $pks[0] = $this->getDosisbasisnummer();
        $pks[1] = $this->getIdentificerendVolgnummer();

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
        $this->setDosisbasisnummer($keys[0]);
        $this->setIdentificerendVolgnummer($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getDosisbasisnummer()) && (null === $this->getIdentificerendVolgnummer());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsDoseringenUitzonderingenOpBasis (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setDosisbasisnummer($this->getDosisbasisnummer());
        $copyObj->setIdentificerendVolgnummer($this->getIdentificerendVolgnummer());
        $copyObj->setThesaurusZorggroepcodering($this->getThesaurusZorggroepcodering());
        $copyObj->setZorggroepcodering($this->getZorggroepcodering());
        $copyObj->setIcpc1nummer($this->getIcpc1nummer());
        $copyObj->setThesaurusVerbijzondering($this->getThesaurusVerbijzondering());
        $copyObj->setVerbijzondering($this->getVerbijzondering());
        $copyObj->setIcpc2nummer($this->getIcpc2nummer());
        $copyObj->setIcd10nummer($this->getIcd10nummer());
        $copyObj->setThesaurusAfwijkendeToedieningsweg($this->getThesaurusAfwijkendeToedieningsweg());
        $copyObj->setToedieningswegCode($this->getToedieningswegCode());
        $copyObj->setDosiscategorienummer($this->getDosiscategorienummer());
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
     * @return GsDoseringenUitzonderingenOpBasis Clone of current object.
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
     * @return GsDoseringenUitzonderingenOpBasisPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsDoseringenUitzonderingenOpBasisPeer();
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
        $this->dosisbasisnummer = null;
        $this->identificerend_volgnummer = null;
        $this->thesaurus_zorggroepcodering = null;
        $this->zorggroepcodering = null;
        $this->icpc1nummer = null;
        $this->thesaurus_verbijzondering = null;
        $this->verbijzondering = null;
        $this->icpc2nummer = null;
        $this->icd10nummer = null;
        $this->thesaurus_afwijkende_toedieningsweg = null;
        $this->toedieningsweg_code = null;
        $this->dosiscategorienummer = null;
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
        return (string) $this->exportTo(GsDoseringenUitzonderingenOpBasisPeer::DEFAULT_STRING_FORMAT);
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
