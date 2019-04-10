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
use PharmaIntelligence\GstandaardBundle\Model\GsBewakingenKenmerken;
use PharmaIntelligence\GstandaardBundle\Model\GsBewakingenKenmerkenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsBewakingenKenmerkenQuery;

abstract class BaseGsBewakingenKenmerken extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsBewakingenKenmerkenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsBewakingenKenmerkenPeer
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
     * The value for the bewakingscode_ci field.
     * @var        int
     */
    protected $bewakingscode_ci;

    /**
     * The value for the omschrijving_cibewaking field.
     * @var        string
     */
    protected $omschrijving_cibewaking;

    /**
     * The value for the thesnr_bewakingssoort field.
     * @var        int
     */
    protected $thesnr_bewakingssoort;

    /**
     * The value for the bewakingssoort field.
     * @var        int
     */
    protected $bewakingssoort;

    /**
     * The value for the thesnr_folder field.
     * @var        int
     */
    protected $thesnr_folder;

    /**
     * The value for the folder field.
     * @var        int
     */
    protected $folder;

    /**
     * The value for the volgens_deskundigen_jn field.
     * @var        int
     */
    protected $volgens_deskundigen_jn;

    /**
     * The value for the actie_nodig_jn field.
     * @var        int
     */
    protected $actie_nodig_jn;

    /**
     * The value for the datum_vastlegging_winap field.
     * @var        int
     */
    protected $datum_vastlegging_winap;

    /**
     * The value for the datum_opvoer_gstandaard field.
     * @var        int
     */
    protected $datum_opvoer_gstandaard;

    /**
     * The value for the datum_mutatie_gstandaard field.
     * @var        int
     */
    protected $datum_mutatie_gstandaard;

    /**
     * The value for the creatinine_klaring field.
     * @var        int
     */
    protected $creatinine_klaring;

    /**
     * The value for the bewaking_te_volgen_door_monitoren field.
     * @var        int
     */
    protected $bewaking_te_volgen_door_monitoren;

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
     * Get the [bewakingscode_ci] column value.
     *
     * @return int
     */
    public function getBewakingscodeCi()
    {

        return $this->bewakingscode_ci;
    }

    /**
     * Get the [omschrijving_cibewaking] column value.
     *
     * @return string
     */
    public function getOmschrijvingCibewaking()
    {

        return $this->omschrijving_cibewaking;
    }

    /**
     * Get the [thesnr_bewakingssoort] column value.
     *
     * @return int
     */
    public function getThesnrBewakingssoort()
    {

        return $this->thesnr_bewakingssoort;
    }

    /**
     * Get the [bewakingssoort] column value.
     *
     * @return int
     */
    public function getBewakingssoort()
    {

        return $this->bewakingssoort;
    }

    /**
     * Get the [thesnr_folder] column value.
     *
     * @return int
     */
    public function getThesnrFolder()
    {

        return $this->thesnr_folder;
    }

    /**
     * Get the [folder] column value.
     *
     * @return int
     */
    public function getFolder()
    {

        return $this->folder;
    }

    /**
     * Get the [volgens_deskundigen_jn] column value.
     *
     * @return int
     */
    public function getVolgensDeskundigenJn()
    {

        return $this->volgens_deskundigen_jn;
    }

    /**
     * Get the [actie_nodig_jn] column value.
     *
     * @return int
     */
    public function getActieNodigJn()
    {

        return $this->actie_nodig_jn;
    }

    /**
     * Get the [datum_vastlegging_winap] column value.
     *
     * @return int
     */
    public function getDatumVastleggingWinap()
    {

        return $this->datum_vastlegging_winap;
    }

    /**
     * Get the [datum_opvoer_gstandaard] column value.
     *
     * @return int
     */
    public function getDatumOpvoerGstandaard()
    {

        return $this->datum_opvoer_gstandaard;
    }

    /**
     * Get the [datum_mutatie_gstandaard] column value.
     *
     * @return int
     */
    public function getDatumMutatieGstandaard()
    {

        return $this->datum_mutatie_gstandaard;
    }

    /**
     * Get the [creatinine_klaring] column value.
     *
     * @return int
     */
    public function getCreatinineKlaring()
    {

        return $this->creatinine_klaring;
    }

    /**
     * Get the [bewaking_te_volgen_door_monitoren] column value.
     *
     * @return int
     */
    public function getBewakingTeVolgenDoorMonitoren()
    {

        return $this->bewaking_te_volgen_door_monitoren;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsBewakingenKenmerken The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsBewakingenKenmerkenPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsBewakingenKenmerken The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsBewakingenKenmerkenPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [bewakingscode_ci] column.
     *
     * @param  int $v new value
     * @return GsBewakingenKenmerken The current object (for fluent API support)
     */
    public function setBewakingscodeCi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bewakingscode_ci !== $v) {
            $this->bewakingscode_ci = $v;
            $this->modifiedColumns[] = GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI;
        }


        return $this;
    } // setBewakingscodeCi()

    /**
     * Set the value of [omschrijving_cibewaking] column.
     *
     * @param  string $v new value
     * @return GsBewakingenKenmerken The current object (for fluent API support)
     */
    public function setOmschrijvingCibewaking($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->omschrijving_cibewaking !== $v) {
            $this->omschrijving_cibewaking = $v;
            $this->modifiedColumns[] = GsBewakingenKenmerkenPeer::OMSCHRIJVING_CIBEWAKING;
        }


        return $this;
    } // setOmschrijvingCibewaking()

    /**
     * Set the value of [thesnr_bewakingssoort] column.
     *
     * @param  int $v new value
     * @return GsBewakingenKenmerken The current object (for fluent API support)
     */
    public function setThesnrBewakingssoort($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesnr_bewakingssoort !== $v) {
            $this->thesnr_bewakingssoort = $v;
            $this->modifiedColumns[] = GsBewakingenKenmerkenPeer::THESNR_BEWAKINGSSOORT;
        }


        return $this;
    } // setThesnrBewakingssoort()

    /**
     * Set the value of [bewakingssoort] column.
     *
     * @param  int $v new value
     * @return GsBewakingenKenmerken The current object (for fluent API support)
     */
    public function setBewakingssoort($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bewakingssoort !== $v) {
            $this->bewakingssoort = $v;
            $this->modifiedColumns[] = GsBewakingenKenmerkenPeer::BEWAKINGSSOORT;
        }


        return $this;
    } // setBewakingssoort()

    /**
     * Set the value of [thesnr_folder] column.
     *
     * @param  int $v new value
     * @return GsBewakingenKenmerken The current object (for fluent API support)
     */
    public function setThesnrFolder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesnr_folder !== $v) {
            $this->thesnr_folder = $v;
            $this->modifiedColumns[] = GsBewakingenKenmerkenPeer::THESNR_FOLDER;
        }


        return $this;
    } // setThesnrFolder()

    /**
     * Set the value of [folder] column.
     *
     * @param  int $v new value
     * @return GsBewakingenKenmerken The current object (for fluent API support)
     */
    public function setFolder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->folder !== $v) {
            $this->folder = $v;
            $this->modifiedColumns[] = GsBewakingenKenmerkenPeer::FOLDER;
        }


        return $this;
    } // setFolder()

    /**
     * Set the value of [volgens_deskundigen_jn] column.
     *
     * @param  int $v new value
     * @return GsBewakingenKenmerken The current object (for fluent API support)
     */
    public function setVolgensDeskundigenJn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->volgens_deskundigen_jn !== $v) {
            $this->volgens_deskundigen_jn = $v;
            $this->modifiedColumns[] = GsBewakingenKenmerkenPeer::VOLGENS_DESKUNDIGEN_JN;
        }


        return $this;
    } // setVolgensDeskundigenJn()

    /**
     * Set the value of [actie_nodig_jn] column.
     *
     * @param  int $v new value
     * @return GsBewakingenKenmerken The current object (for fluent API support)
     */
    public function setActieNodigJn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->actie_nodig_jn !== $v) {
            $this->actie_nodig_jn = $v;
            $this->modifiedColumns[] = GsBewakingenKenmerkenPeer::ACTIE_NODIG_JN;
        }


        return $this;
    } // setActieNodigJn()

    /**
     * Set the value of [datum_vastlegging_winap] column.
     *
     * @param  int $v new value
     * @return GsBewakingenKenmerken The current object (for fluent API support)
     */
    public function setDatumVastleggingWinap($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->datum_vastlegging_winap !== $v) {
            $this->datum_vastlegging_winap = $v;
            $this->modifiedColumns[] = GsBewakingenKenmerkenPeer::DATUM_VASTLEGGING_WINAP;
        }


        return $this;
    } // setDatumVastleggingWinap()

    /**
     * Set the value of [datum_opvoer_gstandaard] column.
     *
     * @param  int $v new value
     * @return GsBewakingenKenmerken The current object (for fluent API support)
     */
    public function setDatumOpvoerGstandaard($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->datum_opvoer_gstandaard !== $v) {
            $this->datum_opvoer_gstandaard = $v;
            $this->modifiedColumns[] = GsBewakingenKenmerkenPeer::DATUM_OPVOER_GSTANDAARD;
        }


        return $this;
    } // setDatumOpvoerGstandaard()

    /**
     * Set the value of [datum_mutatie_gstandaard] column.
     *
     * @param  int $v new value
     * @return GsBewakingenKenmerken The current object (for fluent API support)
     */
    public function setDatumMutatieGstandaard($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->datum_mutatie_gstandaard !== $v) {
            $this->datum_mutatie_gstandaard = $v;
            $this->modifiedColumns[] = GsBewakingenKenmerkenPeer::DATUM_MUTATIE_GSTANDAARD;
        }


        return $this;
    } // setDatumMutatieGstandaard()

    /**
     * Set the value of [creatinine_klaring] column.
     *
     * @param  int $v new value
     * @return GsBewakingenKenmerken The current object (for fluent API support)
     */
    public function setCreatinineKlaring($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->creatinine_klaring !== $v) {
            $this->creatinine_klaring = $v;
            $this->modifiedColumns[] = GsBewakingenKenmerkenPeer::CREATININE_KLARING;
        }


        return $this;
    } // setCreatinineKlaring()

    /**
     * Set the value of [bewaking_te_volgen_door_monitoren] column.
     *
     * @param  int $v new value
     * @return GsBewakingenKenmerken The current object (for fluent API support)
     */
    public function setBewakingTeVolgenDoorMonitoren($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bewaking_te_volgen_door_monitoren !== $v) {
            $this->bewaking_te_volgen_door_monitoren = $v;
            $this->modifiedColumns[] = GsBewakingenKenmerkenPeer::BEWAKING_TE_VOLGEN_DOOR_MONITOREN;
        }


        return $this;
    } // setBewakingTeVolgenDoorMonitoren()

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
            $this->bewakingscode_ci = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->omschrijving_cibewaking = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->thesnr_bewakingssoort = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->bewakingssoort = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->thesnr_folder = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->folder = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->volgens_deskundigen_jn = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->actie_nodig_jn = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->datum_vastlegging_winap = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->datum_opvoer_gstandaard = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->datum_mutatie_gstandaard = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->creatinine_klaring = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->bewaking_te_volgen_door_monitoren = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = GsBewakingenKenmerkenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsBewakingenKenmerken object", $e);
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
            $con = Propel::getConnection(GsBewakingenKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsBewakingenKenmerkenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsBewakingenKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsBewakingenKenmerkenQuery::create()
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
            $con = Propel::getConnection(GsBewakingenKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsBewakingenKenmerkenPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI)) {
            $modifiedColumns[':p' . $index++]  = '`bewakingscode_ci`';
        }
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::OMSCHRIJVING_CIBEWAKING)) {
            $modifiedColumns[':p' . $index++]  = '`omschrijving_cibewaking`';
        }
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::THESNR_BEWAKINGSSOORT)) {
            $modifiedColumns[':p' . $index++]  = '`thesnr_bewakingssoort`';
        }
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::BEWAKINGSSOORT)) {
            $modifiedColumns[':p' . $index++]  = '`bewakingssoort`';
        }
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::THESNR_FOLDER)) {
            $modifiedColumns[':p' . $index++]  = '`thesnr_folder`';
        }
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::FOLDER)) {
            $modifiedColumns[':p' . $index++]  = '`folder`';
        }
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::VOLGENS_DESKUNDIGEN_JN)) {
            $modifiedColumns[':p' . $index++]  = '`volgens_deskundigen_jn`';
        }
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::ACTIE_NODIG_JN)) {
            $modifiedColumns[':p' . $index++]  = '`actie_nodig_jn`';
        }
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::DATUM_VASTLEGGING_WINAP)) {
            $modifiedColumns[':p' . $index++]  = '`datum_vastlegging_winap`';
        }
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::DATUM_OPVOER_GSTANDAARD)) {
            $modifiedColumns[':p' . $index++]  = '`datum_opvoer_gstandaard`';
        }
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::DATUM_MUTATIE_GSTANDAARD)) {
            $modifiedColumns[':p' . $index++]  = '`datum_mutatie_gstandaard`';
        }
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::CREATININE_KLARING)) {
            $modifiedColumns[':p' . $index++]  = '`creatinine_klaring`';
        }
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::BEWAKING_TE_VOLGEN_DOOR_MONITOREN)) {
            $modifiedColumns[':p' . $index++]  = '`bewaking_te_volgen_door_monitoren`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_bewakingen_kenmerken` (%s) VALUES (%s)',
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
                    case '`bewakingscode_ci`':
                        $stmt->bindValue($identifier, $this->bewakingscode_ci, PDO::PARAM_INT);
                        break;
                    case '`omschrijving_cibewaking`':
                        $stmt->bindValue($identifier, $this->omschrijving_cibewaking, PDO::PARAM_STR);
                        break;
                    case '`thesnr_bewakingssoort`':
                        $stmt->bindValue($identifier, $this->thesnr_bewakingssoort, PDO::PARAM_INT);
                        break;
                    case '`bewakingssoort`':
                        $stmt->bindValue($identifier, $this->bewakingssoort, PDO::PARAM_INT);
                        break;
                    case '`thesnr_folder`':
                        $stmt->bindValue($identifier, $this->thesnr_folder, PDO::PARAM_INT);
                        break;
                    case '`folder`':
                        $stmt->bindValue($identifier, $this->folder, PDO::PARAM_INT);
                        break;
                    case '`volgens_deskundigen_jn`':
                        $stmt->bindValue($identifier, $this->volgens_deskundigen_jn, PDO::PARAM_INT);
                        break;
                    case '`actie_nodig_jn`':
                        $stmt->bindValue($identifier, $this->actie_nodig_jn, PDO::PARAM_INT);
                        break;
                    case '`datum_vastlegging_winap`':
                        $stmt->bindValue($identifier, $this->datum_vastlegging_winap, PDO::PARAM_INT);
                        break;
                    case '`datum_opvoer_gstandaard`':
                        $stmt->bindValue($identifier, $this->datum_opvoer_gstandaard, PDO::PARAM_INT);
                        break;
                    case '`datum_mutatie_gstandaard`':
                        $stmt->bindValue($identifier, $this->datum_mutatie_gstandaard, PDO::PARAM_INT);
                        break;
                    case '`creatinine_klaring`':
                        $stmt->bindValue($identifier, $this->creatinine_klaring, PDO::PARAM_INT);
                        break;
                    case '`bewaking_te_volgen_door_monitoren`':
                        $stmt->bindValue($identifier, $this->bewaking_te_volgen_door_monitoren, PDO::PARAM_INT);
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


            if (($retval = GsBewakingenKenmerkenPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsBewakingenKenmerkenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getBewakingscodeCi();
                break;
            case 3:
                return $this->getOmschrijvingCibewaking();
                break;
            case 4:
                return $this->getThesnrBewakingssoort();
                break;
            case 5:
                return $this->getBewakingssoort();
                break;
            case 6:
                return $this->getThesnrFolder();
                break;
            case 7:
                return $this->getFolder();
                break;
            case 8:
                return $this->getVolgensDeskundigenJn();
                break;
            case 9:
                return $this->getActieNodigJn();
                break;
            case 10:
                return $this->getDatumVastleggingWinap();
                break;
            case 11:
                return $this->getDatumOpvoerGstandaard();
                break;
            case 12:
                return $this->getDatumMutatieGstandaard();
                break;
            case 13:
                return $this->getCreatinineKlaring();
                break;
            case 14:
                return $this->getBewakingTeVolgenDoorMonitoren();
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
        if (isset($alreadyDumpedObjects['GsBewakingenKenmerken'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsBewakingenKenmerken'][$this->getPrimaryKey()] = true;
        $keys = GsBewakingenKenmerkenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getBewakingscodeCi(),
            $keys[3] => $this->getOmschrijvingCibewaking(),
            $keys[4] => $this->getThesnrBewakingssoort(),
            $keys[5] => $this->getBewakingssoort(),
            $keys[6] => $this->getThesnrFolder(),
            $keys[7] => $this->getFolder(),
            $keys[8] => $this->getVolgensDeskundigenJn(),
            $keys[9] => $this->getActieNodigJn(),
            $keys[10] => $this->getDatumVastleggingWinap(),
            $keys[11] => $this->getDatumOpvoerGstandaard(),
            $keys[12] => $this->getDatumMutatieGstandaard(),
            $keys[13] => $this->getCreatinineKlaring(),
            $keys[14] => $this->getBewakingTeVolgenDoorMonitoren(),
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
        $pos = GsBewakingenKenmerkenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setBewakingscodeCi($value);
                break;
            case 3:
                $this->setOmschrijvingCibewaking($value);
                break;
            case 4:
                $this->setThesnrBewakingssoort($value);
                break;
            case 5:
                $this->setBewakingssoort($value);
                break;
            case 6:
                $this->setThesnrFolder($value);
                break;
            case 7:
                $this->setFolder($value);
                break;
            case 8:
                $this->setVolgensDeskundigenJn($value);
                break;
            case 9:
                $this->setActieNodigJn($value);
                break;
            case 10:
                $this->setDatumVastleggingWinap($value);
                break;
            case 11:
                $this->setDatumOpvoerGstandaard($value);
                break;
            case 12:
                $this->setDatumMutatieGstandaard($value);
                break;
            case 13:
                $this->setCreatinineKlaring($value);
                break;
            case 14:
                $this->setBewakingTeVolgenDoorMonitoren($value);
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
        $keys = GsBewakingenKenmerkenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setBewakingscodeCi($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOmschrijvingCibewaking($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setThesnrBewakingssoort($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setBewakingssoort($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setThesnrFolder($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setFolder($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVolgensDeskundigenJn($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setActieNodigJn($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDatumVastleggingWinap($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDatumOpvoerGstandaard($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDatumMutatieGstandaard($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCreatinineKlaring($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setBewakingTeVolgenDoorMonitoren($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsBewakingenKenmerkenPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::BESTANDNUMMER)) $criteria->add(GsBewakingenKenmerkenPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::MUTATIEKODE)) $criteria->add(GsBewakingenKenmerkenPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI)) $criteria->add(GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI, $this->bewakingscode_ci);
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::OMSCHRIJVING_CIBEWAKING)) $criteria->add(GsBewakingenKenmerkenPeer::OMSCHRIJVING_CIBEWAKING, $this->omschrijving_cibewaking);
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::THESNR_BEWAKINGSSOORT)) $criteria->add(GsBewakingenKenmerkenPeer::THESNR_BEWAKINGSSOORT, $this->thesnr_bewakingssoort);
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::BEWAKINGSSOORT)) $criteria->add(GsBewakingenKenmerkenPeer::BEWAKINGSSOORT, $this->bewakingssoort);
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::THESNR_FOLDER)) $criteria->add(GsBewakingenKenmerkenPeer::THESNR_FOLDER, $this->thesnr_folder);
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::FOLDER)) $criteria->add(GsBewakingenKenmerkenPeer::FOLDER, $this->folder);
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::VOLGENS_DESKUNDIGEN_JN)) $criteria->add(GsBewakingenKenmerkenPeer::VOLGENS_DESKUNDIGEN_JN, $this->volgens_deskundigen_jn);
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::ACTIE_NODIG_JN)) $criteria->add(GsBewakingenKenmerkenPeer::ACTIE_NODIG_JN, $this->actie_nodig_jn);
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::DATUM_VASTLEGGING_WINAP)) $criteria->add(GsBewakingenKenmerkenPeer::DATUM_VASTLEGGING_WINAP, $this->datum_vastlegging_winap);
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::DATUM_OPVOER_GSTANDAARD)) $criteria->add(GsBewakingenKenmerkenPeer::DATUM_OPVOER_GSTANDAARD, $this->datum_opvoer_gstandaard);
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::DATUM_MUTATIE_GSTANDAARD)) $criteria->add(GsBewakingenKenmerkenPeer::DATUM_MUTATIE_GSTANDAARD, $this->datum_mutatie_gstandaard);
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::CREATININE_KLARING)) $criteria->add(GsBewakingenKenmerkenPeer::CREATININE_KLARING, $this->creatinine_klaring);
        if ($this->isColumnModified(GsBewakingenKenmerkenPeer::BEWAKING_TE_VOLGEN_DOOR_MONITOREN)) $criteria->add(GsBewakingenKenmerkenPeer::BEWAKING_TE_VOLGEN_DOOR_MONITOREN, $this->bewaking_te_volgen_door_monitoren);

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
        $criteria = new Criteria(GsBewakingenKenmerkenPeer::DATABASE_NAME);
        $criteria->add(GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI, $this->bewakingscode_ci);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getBewakingscodeCi();
    }

    /**
     * Generic method to set the primary key (bewakingscode_ci column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setBewakingscodeCi($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getBewakingscodeCi();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsBewakingenKenmerken (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setOmschrijvingCibewaking($this->getOmschrijvingCibewaking());
        $copyObj->setThesnrBewakingssoort($this->getThesnrBewakingssoort());
        $copyObj->setBewakingssoort($this->getBewakingssoort());
        $copyObj->setThesnrFolder($this->getThesnrFolder());
        $copyObj->setFolder($this->getFolder());
        $copyObj->setVolgensDeskundigenJn($this->getVolgensDeskundigenJn());
        $copyObj->setActieNodigJn($this->getActieNodigJn());
        $copyObj->setDatumVastleggingWinap($this->getDatumVastleggingWinap());
        $copyObj->setDatumOpvoerGstandaard($this->getDatumOpvoerGstandaard());
        $copyObj->setDatumMutatieGstandaard($this->getDatumMutatieGstandaard());
        $copyObj->setCreatinineKlaring($this->getCreatinineKlaring());
        $copyObj->setBewakingTeVolgenDoorMonitoren($this->getBewakingTeVolgenDoorMonitoren());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setBewakingscodeCi(NULL); // this is a auto-increment column, so set to default value
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
     * @return GsBewakingenKenmerken Clone of current object.
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
     * @return GsBewakingenKenmerkenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsBewakingenKenmerkenPeer();
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
        $this->bewakingscode_ci = null;
        $this->omschrijving_cibewaking = null;
        $this->thesnr_bewakingssoort = null;
        $this->bewakingssoort = null;
        $this->thesnr_folder = null;
        $this->folder = null;
        $this->volgens_deskundigen_jn = null;
        $this->actie_nodig_jn = null;
        $this->datum_vastlegging_winap = null;
        $this->datum_opvoer_gstandaard = null;
        $this->datum_mutatie_gstandaard = null;
        $this->creatinine_klaring = null;
        $this->bewaking_te_volgen_door_monitoren = null;
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
        return (string) $this->exportTo(GsBewakingenKenmerkenPeer::DEFAULT_STRING_FORMAT);
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
