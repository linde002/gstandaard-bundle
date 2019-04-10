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
use PharmaIntelligence\GstandaardBundle\Model\GsCoderingGedifferentieerdeTarieven;
use PharmaIntelligence\GstandaardBundle\Model\GsCoderingGedifferentieerdeTarievenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsCoderingGedifferentieerdeTarievenQuery;

abstract class BaseGsCoderingGedifferentieerdeTarieven extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsCoderingGedifferentieerdeTarievenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsCoderingGedifferentieerdeTarievenPeer
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
     * The value for the codering field.
     * @var        int
     */
    protected $codering;

    /**
     * The value for the volledige_omschrijving field.
     * @var        string
     */
    protected $volledige_omschrijving;

    /**
     * The value for the verkorte_omschrijving field.
     * @var        string
     */
    protected $verkorte_omschrijving;

    /**
     * The value for the thesnr_soort_levering field.
     * @var        int
     */
    protected $thesnr_soort_levering;

    /**
     * The value for the soort_levering field.
     * @var        int
     */
    protected $soort_levering;

    /**
     * The value for the thesnr_uitgifte_soort field.
     * @var        int
     */
    protected $thesnr_uitgifte_soort;

    /**
     * The value for the soort_uitgifte field.
     * @var        int
     */
    protected $soort_uitgifte;

    /**
     * The value for the thesnr_soort_bereiding field.
     * @var        int
     */
    protected $thesnr_soort_bereiding;

    /**
     * The value for the soort_bereiding field.
     * @var        int
     */
    protected $soort_bereiding;

    /**
     * The value for the thesnr_aanbiedingsmoment field.
     * @var        int
     */
    protected $thesnr_aanbiedingsmoment;

    /**
     * The value for the aanbiedingsmoment field.
     * @var        int
     */
    protected $aanbiedingsmoment;

    /**
     * The value for the wmg_tarief field.
     * @var        string
     */
    protected $wmg_tarief;

    /**
     * The value for the thesnr_toeslag_thuis field.
     * @var        int
     */
    protected $thesnr_toeslag_thuis;

    /**
     * The value for the toeslag_thuis field.
     * @var        int
     */
    protected $toeslag_thuis;

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
     * Get the [codering] column value.
     *
     * @return int
     */
    public function getCodering()
    {

        return $this->codering;
    }

    /**
     * Get the [volledige_omschrijving] column value.
     *
     * @return string
     */
    public function getVolledigeOmschrijving()
    {

        return $this->volledige_omschrijving;
    }

    /**
     * Get the [verkorte_omschrijving] column value.
     *
     * @return string
     */
    public function getVerkorteOmschrijving()
    {

        return $this->verkorte_omschrijving;
    }

    /**
     * Get the [thesnr_soort_levering] column value.
     *
     * @return int
     */
    public function getThesnrSoortLevering()
    {

        return $this->thesnr_soort_levering;
    }

    /**
     * Get the [soort_levering] column value.
     *
     * @return int
     */
    public function getSoortLevering()
    {

        return $this->soort_levering;
    }

    /**
     * Get the [thesnr_uitgifte_soort] column value.
     *
     * @return int
     */
    public function getThesnrUitgifteSoort()
    {

        return $this->thesnr_uitgifte_soort;
    }

    /**
     * Get the [soort_uitgifte] column value.
     *
     * @return int
     */
    public function getSoortUitgifte()
    {

        return $this->soort_uitgifte;
    }

    /**
     * Get the [thesnr_soort_bereiding] column value.
     *
     * @return int
     */
    public function getThesnrSoortBereiding()
    {

        return $this->thesnr_soort_bereiding;
    }

    /**
     * Get the [soort_bereiding] column value.
     *
     * @return int
     */
    public function getSoortBereiding()
    {

        return $this->soort_bereiding;
    }

    /**
     * Get the [thesnr_aanbiedingsmoment] column value.
     *
     * @return int
     */
    public function getThesnrAanbiedingsmoment()
    {

        return $this->thesnr_aanbiedingsmoment;
    }

    /**
     * Get the [aanbiedingsmoment] column value.
     *
     * @return int
     */
    public function getAanbiedingsmoment()
    {

        return $this->aanbiedingsmoment;
    }

    /**
     * Get the [wmg_tarief] column value.
     *
     * @return string
     */
    public function getWmgTarief()
    {

        return $this->wmg_tarief;
    }

    /**
     * Get the [thesnr_toeslag_thuis] column value.
     *
     * @return int
     */
    public function getThesnrToeslagThuis()
    {

        return $this->thesnr_toeslag_thuis;
    }

    /**
     * Get the [toeslag_thuis] column value.
     *
     * @return int
     */
    public function getToeslagThuis()
    {

        return $this->toeslag_thuis;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsCoderingGedifferentieerdeTarieven The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsCoderingGedifferentieerdeTarievenPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsCoderingGedifferentieerdeTarieven The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsCoderingGedifferentieerdeTarievenPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [codering] column.
     *
     * @param  int $v new value
     * @return GsCoderingGedifferentieerdeTarieven The current object (for fluent API support)
     */
    public function setCodering($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->codering !== $v) {
            $this->codering = $v;
            $this->modifiedColumns[] = GsCoderingGedifferentieerdeTarievenPeer::CODERING;
        }


        return $this;
    } // setCodering()

    /**
     * Set the value of [volledige_omschrijving] column.
     *
     * @param  string $v new value
     * @return GsCoderingGedifferentieerdeTarieven The current object (for fluent API support)
     */
    public function setVolledigeOmschrijving($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->volledige_omschrijving !== $v) {
            $this->volledige_omschrijving = $v;
            $this->modifiedColumns[] = GsCoderingGedifferentieerdeTarievenPeer::VOLLEDIGE_OMSCHRIJVING;
        }


        return $this;
    } // setVolledigeOmschrijving()

    /**
     * Set the value of [verkorte_omschrijving] column.
     *
     * @param  string $v new value
     * @return GsCoderingGedifferentieerdeTarieven The current object (for fluent API support)
     */
    public function setVerkorteOmschrijving($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->verkorte_omschrijving !== $v) {
            $this->verkorte_omschrijving = $v;
            $this->modifiedColumns[] = GsCoderingGedifferentieerdeTarievenPeer::VERKORTE_OMSCHRIJVING;
        }


        return $this;
    } // setVerkorteOmschrijving()

    /**
     * Set the value of [thesnr_soort_levering] column.
     *
     * @param  int $v new value
     * @return GsCoderingGedifferentieerdeTarieven The current object (for fluent API support)
     */
    public function setThesnrSoortLevering($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesnr_soort_levering !== $v) {
            $this->thesnr_soort_levering = $v;
            $this->modifiedColumns[] = GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_LEVERING;
        }


        return $this;
    } // setThesnrSoortLevering()

    /**
     * Set the value of [soort_levering] column.
     *
     * @param  int $v new value
     * @return GsCoderingGedifferentieerdeTarieven The current object (for fluent API support)
     */
    public function setSoortLevering($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->soort_levering !== $v) {
            $this->soort_levering = $v;
            $this->modifiedColumns[] = GsCoderingGedifferentieerdeTarievenPeer::SOORT_LEVERING;
        }


        return $this;
    } // setSoortLevering()

    /**
     * Set the value of [thesnr_uitgifte_soort] column.
     *
     * @param  int $v new value
     * @return GsCoderingGedifferentieerdeTarieven The current object (for fluent API support)
     */
    public function setThesnrUitgifteSoort($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesnr_uitgifte_soort !== $v) {
            $this->thesnr_uitgifte_soort = $v;
            $this->modifiedColumns[] = GsCoderingGedifferentieerdeTarievenPeer::THESNR_UITGIFTE_SOORT;
        }


        return $this;
    } // setThesnrUitgifteSoort()

    /**
     * Set the value of [soort_uitgifte] column.
     *
     * @param  int $v new value
     * @return GsCoderingGedifferentieerdeTarieven The current object (for fluent API support)
     */
    public function setSoortUitgifte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->soort_uitgifte !== $v) {
            $this->soort_uitgifte = $v;
            $this->modifiedColumns[] = GsCoderingGedifferentieerdeTarievenPeer::SOORT_UITGIFTE;
        }


        return $this;
    } // setSoortUitgifte()

    /**
     * Set the value of [thesnr_soort_bereiding] column.
     *
     * @param  int $v new value
     * @return GsCoderingGedifferentieerdeTarieven The current object (for fluent API support)
     */
    public function setThesnrSoortBereiding($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesnr_soort_bereiding !== $v) {
            $this->thesnr_soort_bereiding = $v;
            $this->modifiedColumns[] = GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_BEREIDING;
        }


        return $this;
    } // setThesnrSoortBereiding()

    /**
     * Set the value of [soort_bereiding] column.
     *
     * @param  int $v new value
     * @return GsCoderingGedifferentieerdeTarieven The current object (for fluent API support)
     */
    public function setSoortBereiding($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->soort_bereiding !== $v) {
            $this->soort_bereiding = $v;
            $this->modifiedColumns[] = GsCoderingGedifferentieerdeTarievenPeer::SOORT_BEREIDING;
        }


        return $this;
    } // setSoortBereiding()

    /**
     * Set the value of [thesnr_aanbiedingsmoment] column.
     *
     * @param  int $v new value
     * @return GsCoderingGedifferentieerdeTarieven The current object (for fluent API support)
     */
    public function setThesnrAanbiedingsmoment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesnr_aanbiedingsmoment !== $v) {
            $this->thesnr_aanbiedingsmoment = $v;
            $this->modifiedColumns[] = GsCoderingGedifferentieerdeTarievenPeer::THESNR_AANBIEDINGSMOMENT;
        }


        return $this;
    } // setThesnrAanbiedingsmoment()

    /**
     * Set the value of [aanbiedingsmoment] column.
     *
     * @param  int $v new value
     * @return GsCoderingGedifferentieerdeTarieven The current object (for fluent API support)
     */
    public function setAanbiedingsmoment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aanbiedingsmoment !== $v) {
            $this->aanbiedingsmoment = $v;
            $this->modifiedColumns[] = GsCoderingGedifferentieerdeTarievenPeer::AANBIEDINGSMOMENT;
        }


        return $this;
    } // setAanbiedingsmoment()

    /**
     * Set the value of [wmg_tarief] column.
     *
     * @param  string $v new value
     * @return GsCoderingGedifferentieerdeTarieven The current object (for fluent API support)
     */
    public function setWmgTarief($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->wmg_tarief !== $v) {
            $this->wmg_tarief = $v;
            $this->modifiedColumns[] = GsCoderingGedifferentieerdeTarievenPeer::WMG_TARIEF;
        }


        return $this;
    } // setWmgTarief()

    /**
     * Set the value of [thesnr_toeslag_thuis] column.
     *
     * @param  int $v new value
     * @return GsCoderingGedifferentieerdeTarieven The current object (for fluent API support)
     */
    public function setThesnrToeslagThuis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesnr_toeslag_thuis !== $v) {
            $this->thesnr_toeslag_thuis = $v;
            $this->modifiedColumns[] = GsCoderingGedifferentieerdeTarievenPeer::THESNR_TOESLAG_THUIS;
        }


        return $this;
    } // setThesnrToeslagThuis()

    /**
     * Set the value of [toeslag_thuis] column.
     *
     * @param  int $v new value
     * @return GsCoderingGedifferentieerdeTarieven The current object (for fluent API support)
     */
    public function setToeslagThuis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->toeslag_thuis !== $v) {
            $this->toeslag_thuis = $v;
            $this->modifiedColumns[] = GsCoderingGedifferentieerdeTarievenPeer::TOESLAG_THUIS;
        }


        return $this;
    } // setToeslagThuis()

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
            $this->codering = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->volledige_omschrijving = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->verkorte_omschrijving = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->thesnr_soort_levering = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->soort_levering = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->thesnr_uitgifte_soort = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->soort_uitgifte = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->thesnr_soort_bereiding = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->soort_bereiding = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->thesnr_aanbiedingsmoment = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->aanbiedingsmoment = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->wmg_tarief = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->thesnr_toeslag_thuis = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->toeslag_thuis = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 16; // 16 = GsCoderingGedifferentieerdeTarievenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsCoderingGedifferentieerdeTarieven object", $e);
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
            $con = Propel::getConnection(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsCoderingGedifferentieerdeTarievenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsCoderingGedifferentieerdeTarievenQuery::create()
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
            $con = Propel::getConnection(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsCoderingGedifferentieerdeTarievenPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::CODERING)) {
            $modifiedColumns[':p' . $index++]  = '`codering`';
        }
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::VOLLEDIGE_OMSCHRIJVING)) {
            $modifiedColumns[':p' . $index++]  = '`volledige_omschrijving`';
        }
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::VERKORTE_OMSCHRIJVING)) {
            $modifiedColumns[':p' . $index++]  = '`verkorte_omschrijving`';
        }
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_LEVERING)) {
            $modifiedColumns[':p' . $index++]  = '`thesnr_soort_levering`';
        }
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::SOORT_LEVERING)) {
            $modifiedColumns[':p' . $index++]  = '`soort_levering`';
        }
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::THESNR_UITGIFTE_SOORT)) {
            $modifiedColumns[':p' . $index++]  = '`thesnr_uitgifte_soort`';
        }
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::SOORT_UITGIFTE)) {
            $modifiedColumns[':p' . $index++]  = '`soort_uitgifte`';
        }
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_BEREIDING)) {
            $modifiedColumns[':p' . $index++]  = '`thesnr_soort_bereiding`';
        }
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::SOORT_BEREIDING)) {
            $modifiedColumns[':p' . $index++]  = '`soort_bereiding`';
        }
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::THESNR_AANBIEDINGSMOMENT)) {
            $modifiedColumns[':p' . $index++]  = '`thesnr_aanbiedingsmoment`';
        }
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::AANBIEDINGSMOMENT)) {
            $modifiedColumns[':p' . $index++]  = '`aanbiedingsmoment`';
        }
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::WMG_TARIEF)) {
            $modifiedColumns[':p' . $index++]  = '`wmg_tarief`';
        }
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::THESNR_TOESLAG_THUIS)) {
            $modifiedColumns[':p' . $index++]  = '`thesnr_toeslag_thuis`';
        }
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::TOESLAG_THUIS)) {
            $modifiedColumns[':p' . $index++]  = '`toeslag_thuis`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_codering_gedifferentieerde_tarieven` (%s) VALUES (%s)',
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
                    case '`codering`':
                        $stmt->bindValue($identifier, $this->codering, PDO::PARAM_INT);
                        break;
                    case '`volledige_omschrijving`':
                        $stmt->bindValue($identifier, $this->volledige_omschrijving, PDO::PARAM_STR);
                        break;
                    case '`verkorte_omschrijving`':
                        $stmt->bindValue($identifier, $this->verkorte_omschrijving, PDO::PARAM_STR);
                        break;
                    case '`thesnr_soort_levering`':
                        $stmt->bindValue($identifier, $this->thesnr_soort_levering, PDO::PARAM_INT);
                        break;
                    case '`soort_levering`':
                        $stmt->bindValue($identifier, $this->soort_levering, PDO::PARAM_INT);
                        break;
                    case '`thesnr_uitgifte_soort`':
                        $stmt->bindValue($identifier, $this->thesnr_uitgifte_soort, PDO::PARAM_INT);
                        break;
                    case '`soort_uitgifte`':
                        $stmt->bindValue($identifier, $this->soort_uitgifte, PDO::PARAM_INT);
                        break;
                    case '`thesnr_soort_bereiding`':
                        $stmt->bindValue($identifier, $this->thesnr_soort_bereiding, PDO::PARAM_INT);
                        break;
                    case '`soort_bereiding`':
                        $stmt->bindValue($identifier, $this->soort_bereiding, PDO::PARAM_INT);
                        break;
                    case '`thesnr_aanbiedingsmoment`':
                        $stmt->bindValue($identifier, $this->thesnr_aanbiedingsmoment, PDO::PARAM_INT);
                        break;
                    case '`aanbiedingsmoment`':
                        $stmt->bindValue($identifier, $this->aanbiedingsmoment, PDO::PARAM_INT);
                        break;
                    case '`wmg_tarief`':
                        $stmt->bindValue($identifier, $this->wmg_tarief, PDO::PARAM_STR);
                        break;
                    case '`thesnr_toeslag_thuis`':
                        $stmt->bindValue($identifier, $this->thesnr_toeslag_thuis, PDO::PARAM_INT);
                        break;
                    case '`toeslag_thuis`':
                        $stmt->bindValue($identifier, $this->toeslag_thuis, PDO::PARAM_INT);
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


            if (($retval = GsCoderingGedifferentieerdeTarievenPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsCoderingGedifferentieerdeTarievenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getCodering();
                break;
            case 3:
                return $this->getVolledigeOmschrijving();
                break;
            case 4:
                return $this->getVerkorteOmschrijving();
                break;
            case 5:
                return $this->getThesnrSoortLevering();
                break;
            case 6:
                return $this->getSoortLevering();
                break;
            case 7:
                return $this->getThesnrUitgifteSoort();
                break;
            case 8:
                return $this->getSoortUitgifte();
                break;
            case 9:
                return $this->getThesnrSoortBereiding();
                break;
            case 10:
                return $this->getSoortBereiding();
                break;
            case 11:
                return $this->getThesnrAanbiedingsmoment();
                break;
            case 12:
                return $this->getAanbiedingsmoment();
                break;
            case 13:
                return $this->getWmgTarief();
                break;
            case 14:
                return $this->getThesnrToeslagThuis();
                break;
            case 15:
                return $this->getToeslagThuis();
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
        if (isset($alreadyDumpedObjects['GsCoderingGedifferentieerdeTarieven'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsCoderingGedifferentieerdeTarieven'][$this->getPrimaryKey()] = true;
        $keys = GsCoderingGedifferentieerdeTarievenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getCodering(),
            $keys[3] => $this->getVolledigeOmschrijving(),
            $keys[4] => $this->getVerkorteOmschrijving(),
            $keys[5] => $this->getThesnrSoortLevering(),
            $keys[6] => $this->getSoortLevering(),
            $keys[7] => $this->getThesnrUitgifteSoort(),
            $keys[8] => $this->getSoortUitgifte(),
            $keys[9] => $this->getThesnrSoortBereiding(),
            $keys[10] => $this->getSoortBereiding(),
            $keys[11] => $this->getThesnrAanbiedingsmoment(),
            $keys[12] => $this->getAanbiedingsmoment(),
            $keys[13] => $this->getWmgTarief(),
            $keys[14] => $this->getThesnrToeslagThuis(),
            $keys[15] => $this->getToeslagThuis(),
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
        $pos = GsCoderingGedifferentieerdeTarievenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setCodering($value);
                break;
            case 3:
                $this->setVolledigeOmschrijving($value);
                break;
            case 4:
                $this->setVerkorteOmschrijving($value);
                break;
            case 5:
                $this->setThesnrSoortLevering($value);
                break;
            case 6:
                $this->setSoortLevering($value);
                break;
            case 7:
                $this->setThesnrUitgifteSoort($value);
                break;
            case 8:
                $this->setSoortUitgifte($value);
                break;
            case 9:
                $this->setThesnrSoortBereiding($value);
                break;
            case 10:
                $this->setSoortBereiding($value);
                break;
            case 11:
                $this->setThesnrAanbiedingsmoment($value);
                break;
            case 12:
                $this->setAanbiedingsmoment($value);
                break;
            case 13:
                $this->setWmgTarief($value);
                break;
            case 14:
                $this->setThesnrToeslagThuis($value);
                break;
            case 15:
                $this->setToeslagThuis($value);
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
        $keys = GsCoderingGedifferentieerdeTarievenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCodering($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setVolledigeOmschrijving($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setVerkorteOmschrijving($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setThesnrSoortLevering($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSoortLevering($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setThesnrUitgifteSoort($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setSoortUitgifte($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setThesnrSoortBereiding($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSoortBereiding($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setThesnrAanbiedingsmoment($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAanbiedingsmoment($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setWmgTarief($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setThesnrToeslagThuis($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setToeslagThuis($arr[$keys[15]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::BESTANDNUMMER)) $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::MUTATIEKODE)) $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::CODERING)) $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::CODERING, $this->codering);
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::VOLLEDIGE_OMSCHRIJVING)) $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::VOLLEDIGE_OMSCHRIJVING, $this->volledige_omschrijving);
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::VERKORTE_OMSCHRIJVING)) $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::VERKORTE_OMSCHRIJVING, $this->verkorte_omschrijving);
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_LEVERING)) $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_LEVERING, $this->thesnr_soort_levering);
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::SOORT_LEVERING)) $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::SOORT_LEVERING, $this->soort_levering);
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::THESNR_UITGIFTE_SOORT)) $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::THESNR_UITGIFTE_SOORT, $this->thesnr_uitgifte_soort);
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::SOORT_UITGIFTE)) $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::SOORT_UITGIFTE, $this->soort_uitgifte);
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_BEREIDING)) $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_BEREIDING, $this->thesnr_soort_bereiding);
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::SOORT_BEREIDING)) $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::SOORT_BEREIDING, $this->soort_bereiding);
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::THESNR_AANBIEDINGSMOMENT)) $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::THESNR_AANBIEDINGSMOMENT, $this->thesnr_aanbiedingsmoment);
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::AANBIEDINGSMOMENT)) $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::AANBIEDINGSMOMENT, $this->aanbiedingsmoment);
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::WMG_TARIEF)) $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::WMG_TARIEF, $this->wmg_tarief);
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::THESNR_TOESLAG_THUIS)) $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::THESNR_TOESLAG_THUIS, $this->thesnr_toeslag_thuis);
        if ($this->isColumnModified(GsCoderingGedifferentieerdeTarievenPeer::TOESLAG_THUIS)) $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::TOESLAG_THUIS, $this->toeslag_thuis);

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
        $criteria = new Criteria(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME);
        $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::CODERING, $this->codering);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getCodering();
    }

    /**
     * Generic method to set the primary key (codering column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCodering($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getCodering();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsCoderingGedifferentieerdeTarieven (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setVolledigeOmschrijving($this->getVolledigeOmschrijving());
        $copyObj->setVerkorteOmschrijving($this->getVerkorteOmschrijving());
        $copyObj->setThesnrSoortLevering($this->getThesnrSoortLevering());
        $copyObj->setSoortLevering($this->getSoortLevering());
        $copyObj->setThesnrUitgifteSoort($this->getThesnrUitgifteSoort());
        $copyObj->setSoortUitgifte($this->getSoortUitgifte());
        $copyObj->setThesnrSoortBereiding($this->getThesnrSoortBereiding());
        $copyObj->setSoortBereiding($this->getSoortBereiding());
        $copyObj->setThesnrAanbiedingsmoment($this->getThesnrAanbiedingsmoment());
        $copyObj->setAanbiedingsmoment($this->getAanbiedingsmoment());
        $copyObj->setWmgTarief($this->getWmgTarief());
        $copyObj->setThesnrToeslagThuis($this->getThesnrToeslagThuis());
        $copyObj->setToeslagThuis($this->getToeslagThuis());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setCodering(NULL); // this is a auto-increment column, so set to default value
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
     * @return GsCoderingGedifferentieerdeTarieven Clone of current object.
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
     * @return GsCoderingGedifferentieerdeTarievenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsCoderingGedifferentieerdeTarievenPeer();
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
        $this->codering = null;
        $this->volledige_omschrijving = null;
        $this->verkorte_omschrijving = null;
        $this->thesnr_soort_levering = null;
        $this->soort_levering = null;
        $this->thesnr_uitgifte_soort = null;
        $this->soort_uitgifte = null;
        $this->thesnr_soort_bereiding = null;
        $this->soort_bereiding = null;
        $this->thesnr_aanbiedingsmoment = null;
        $this->aanbiedingsmoment = null;
        $this->wmg_tarief = null;
        $this->thesnr_toeslag_thuis = null;
        $this->toeslag_thuis = null;
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
        return (string) $this->exportTo(GsCoderingGedifferentieerdeTarievenPeer::DEFAULT_STRING_FORMAT);
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
