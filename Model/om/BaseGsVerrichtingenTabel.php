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
use PharmaIntelligence\GstandaardBundle\Model\GsVerrichtingenTabel;
use PharmaIntelligence\GstandaardBundle\Model\GsVerrichtingenTabelPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsVerrichtingenTabelQuery;

abstract class BaseGsVerrichtingenTabel extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVerrichtingenTabelPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsVerrichtingenTabelPeer
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
     * The value for the verrichtingsnummer field.
     * @var        int
     */
    protected $verrichtingsnummer;

    /**
     * The value for the thesaurusverwijzing_bron_verrichting field.
     * @var        int
     */
    protected $thesaurusverwijzing_bron_verrichting;

    /**
     * The value for the bron_verrichting field.
     * @var        int
     */
    protected $bron_verrichting;

    /**
     * The value for the verrichtingscode_gehanteerd_door_bron field.
     * @var        string
     */
    protected $verrichtingscode_gehanteerd_door_bron;

    /**
     * The value for the thesaurusverwijzing_verrichtingsoort field.
     * @var        int
     */
    protected $thesaurusverwijzing_verrichtingsoort;

    /**
     * The value for the verrichtingssoort_code field.
     * @var        int
     */
    protected $verrichtingssoort_code;

    /**
     * The value for the verrichtingsomschrijving field.
     * @var        string
     */
    protected $verrichtingsomschrijving;

    /**
     * The value for the memocode field.
     * @var        string
     */
    protected $memocode;

    /**
     * The value for the ingangsdatum field.
     * @var        int
     */
    protected $ingangsdatum;

    /**
     * The value for the vervaldatum field.
     * @var        int
     */
    protected $vervaldatum;

    /**
     * The value for the url_voor_beschrijving_van_toepassing_verrichting field.
     * @var        string
     */
    protected $url_voor_beschrijving_van_toepassing_verrichting;

    /**
     * The value for the verrichtingsnummer_bovenliggend_niveau field.
     * @var        int
     */
    protected $verrichtingsnummer_bovenliggend_niveau;

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
     * Get the [verrichtingsnummer] column value.
     *
     * @return int
     */
    public function getVerrichtingsnummer()
    {

        return $this->verrichtingsnummer;
    }

    /**
     * Get the [thesaurusverwijzing_bron_verrichting] column value.
     *
     * @return int
     */
    public function getThesaurusverwijzingBronVerrichting()
    {

        return $this->thesaurusverwijzing_bron_verrichting;
    }

    /**
     * Get the [bron_verrichting] column value.
     *
     * @return int
     */
    public function getBronVerrichting()
    {

        return $this->bron_verrichting;
    }

    /**
     * Get the [verrichtingscode_gehanteerd_door_bron] column value.
     *
     * @return string
     */
    public function getVerrichtingscodeGehanteerdDoorBron()
    {

        return $this->verrichtingscode_gehanteerd_door_bron;
    }

    /**
     * Get the [thesaurusverwijzing_verrichtingsoort] column value.
     *
     * @return int
     */
    public function getThesaurusverwijzingVerrichtingsoort()
    {

        return $this->thesaurusverwijzing_verrichtingsoort;
    }

    /**
     * Get the [verrichtingssoort_code] column value.
     *
     * @return int
     */
    public function getVerrichtingssoortCode()
    {

        return $this->verrichtingssoort_code;
    }

    /**
     * Get the [verrichtingsomschrijving] column value.
     *
     * @return string
     */
    public function getVerrichtingsomschrijving()
    {

        return $this->verrichtingsomschrijving;
    }

    /**
     * Get the [memocode] column value.
     *
     * @return string
     */
    public function getMemocode()
    {

        return $this->memocode;
    }

    /**
     * Get the [ingangsdatum] column value.
     *
     * @return int
     */
    public function getIngangsdatum()
    {

        return $this->ingangsdatum;
    }

    /**
     * Get the [vervaldatum] column value.
     *
     * @return int
     */
    public function getVervaldatum()
    {

        return $this->vervaldatum;
    }

    /**
     * Get the [url_voor_beschrijving_van_toepassing_verrichting] column value.
     *
     * @return string
     */
    public function getUrlVoorBeschrijvingVanToepassingVerrichting()
    {

        return $this->url_voor_beschrijving_van_toepassing_verrichting;
    }

    /**
     * Get the [verrichtingsnummer_bovenliggend_niveau] column value.
     *
     * @return int
     */
    public function getVerrichtingsnummerBovenliggendNiveau()
    {

        return $this->verrichtingsnummer_bovenliggend_niveau;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsVerrichtingenTabel The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsVerrichtingenTabelPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsVerrichtingenTabel The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsVerrichtingenTabelPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [verrichtingsnummer] column.
     *
     * @param  int $v new value
     * @return GsVerrichtingenTabel The current object (for fluent API support)
     */
    public function setVerrichtingsnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->verrichtingsnummer !== $v) {
            $this->verrichtingsnummer = $v;
            $this->modifiedColumns[] = GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER;
        }


        return $this;
    } // setVerrichtingsnummer()

    /**
     * Set the value of [thesaurusverwijzing_bron_verrichting] column.
     *
     * @param  int $v new value
     * @return GsVerrichtingenTabel The current object (for fluent API support)
     */
    public function setThesaurusverwijzingBronVerrichting($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusverwijzing_bron_verrichting !== $v) {
            $this->thesaurusverwijzing_bron_verrichting = $v;
            $this->modifiedColumns[] = GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_BRON_VERRICHTING;
        }


        return $this;
    } // setThesaurusverwijzingBronVerrichting()

    /**
     * Set the value of [bron_verrichting] column.
     *
     * @param  int $v new value
     * @return GsVerrichtingenTabel The current object (for fluent API support)
     */
    public function setBronVerrichting($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bron_verrichting !== $v) {
            $this->bron_verrichting = $v;
            $this->modifiedColumns[] = GsVerrichtingenTabelPeer::BRON_VERRICHTING;
        }


        return $this;
    } // setBronVerrichting()

    /**
     * Set the value of [verrichtingscode_gehanteerd_door_bron] column.
     *
     * @param  string $v new value
     * @return GsVerrichtingenTabel The current object (for fluent API support)
     */
    public function setVerrichtingscodeGehanteerdDoorBron($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->verrichtingscode_gehanteerd_door_bron !== $v) {
            $this->verrichtingscode_gehanteerd_door_bron = $v;
            $this->modifiedColumns[] = GsVerrichtingenTabelPeer::VERRICHTINGSCODE_GEHANTEERD_DOOR_BRON;
        }


        return $this;
    } // setVerrichtingscodeGehanteerdDoorBron()

    /**
     * Set the value of [thesaurusverwijzing_verrichtingsoort] column.
     *
     * @param  int $v new value
     * @return GsVerrichtingenTabel The current object (for fluent API support)
     */
    public function setThesaurusverwijzingVerrichtingsoort($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusverwijzing_verrichtingsoort !== $v) {
            $this->thesaurusverwijzing_verrichtingsoort = $v;
            $this->modifiedColumns[] = GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_VERRICHTINGSOORT;
        }


        return $this;
    } // setThesaurusverwijzingVerrichtingsoort()

    /**
     * Set the value of [verrichtingssoort_code] column.
     *
     * @param  int $v new value
     * @return GsVerrichtingenTabel The current object (for fluent API support)
     */
    public function setVerrichtingssoortCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->verrichtingssoort_code !== $v) {
            $this->verrichtingssoort_code = $v;
            $this->modifiedColumns[] = GsVerrichtingenTabelPeer::VERRICHTINGSSOORT_CODE;
        }


        return $this;
    } // setVerrichtingssoortCode()

    /**
     * Set the value of [verrichtingsomschrijving] column.
     *
     * @param  string $v new value
     * @return GsVerrichtingenTabel The current object (for fluent API support)
     */
    public function setVerrichtingsomschrijving($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->verrichtingsomschrijving !== $v) {
            $this->verrichtingsomschrijving = $v;
            $this->modifiedColumns[] = GsVerrichtingenTabelPeer::VERRICHTINGSOMSCHRIJVING;
        }


        return $this;
    } // setVerrichtingsomschrijving()

    /**
     * Set the value of [memocode] column.
     *
     * @param  string $v new value
     * @return GsVerrichtingenTabel The current object (for fluent API support)
     */
    public function setMemocode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->memocode !== $v) {
            $this->memocode = $v;
            $this->modifiedColumns[] = GsVerrichtingenTabelPeer::MEMOCODE;
        }


        return $this;
    } // setMemocode()

    /**
     * Set the value of [ingangsdatum] column.
     *
     * @param  int $v new value
     * @return GsVerrichtingenTabel The current object (for fluent API support)
     */
    public function setIngangsdatum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ingangsdatum !== $v) {
            $this->ingangsdatum = $v;
            $this->modifiedColumns[] = GsVerrichtingenTabelPeer::INGANGSDATUM;
        }


        return $this;
    } // setIngangsdatum()

    /**
     * Set the value of [vervaldatum] column.
     *
     * @param  int $v new value
     * @return GsVerrichtingenTabel The current object (for fluent API support)
     */
    public function setVervaldatum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vervaldatum !== $v) {
            $this->vervaldatum = $v;
            $this->modifiedColumns[] = GsVerrichtingenTabelPeer::VERVALDATUM;
        }


        return $this;
    } // setVervaldatum()

    /**
     * Set the value of [url_voor_beschrijving_van_toepassing_verrichting] column.
     *
     * @param  string $v new value
     * @return GsVerrichtingenTabel The current object (for fluent API support)
     */
    public function setUrlVoorBeschrijvingVanToepassingVerrichting($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->url_voor_beschrijving_van_toepassing_verrichting !== $v) {
            $this->url_voor_beschrijving_van_toepassing_verrichting = $v;
            $this->modifiedColumns[] = GsVerrichtingenTabelPeer::URL_VOOR_BESCHRIJVING_VAN_TOEPASSING_VERRICHTING;
        }


        return $this;
    } // setUrlVoorBeschrijvingVanToepassingVerrichting()

    /**
     * Set the value of [verrichtingsnummer_bovenliggend_niveau] column.
     *
     * @param  int $v new value
     * @return GsVerrichtingenTabel The current object (for fluent API support)
     */
    public function setVerrichtingsnummerBovenliggendNiveau($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->verrichtingsnummer_bovenliggend_niveau !== $v) {
            $this->verrichtingsnummer_bovenliggend_niveau = $v;
            $this->modifiedColumns[] = GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER_BOVENLIGGEND_NIVEAU;
        }


        return $this;
    } // setVerrichtingsnummerBovenliggendNiveau()

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
            $this->verrichtingsnummer = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->thesaurusverwijzing_bron_verrichting = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->bron_verrichting = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->verrichtingscode_gehanteerd_door_bron = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->thesaurusverwijzing_verrichtingsoort = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->verrichtingssoort_code = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->verrichtingsomschrijving = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->memocode = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->ingangsdatum = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->vervaldatum = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->url_voor_beschrijving_van_toepassing_verrichting = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->verrichtingsnummer_bovenliggend_niveau = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = GsVerrichtingenTabelPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsVerrichtingenTabel object", $e);
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
            $con = Propel::getConnection(GsVerrichtingenTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsVerrichtingenTabelPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsVerrichtingenTabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsVerrichtingenTabelQuery::create()
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
            $con = Propel::getConnection(GsVerrichtingenTabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsVerrichtingenTabelPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`verrichtingsnummer`';
        }
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_BRON_VERRICHTING)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusverwijzing_bron_verrichting`';
        }
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::BRON_VERRICHTING)) {
            $modifiedColumns[':p' . $index++]  = '`bron_verrichting`';
        }
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::VERRICHTINGSCODE_GEHANTEERD_DOOR_BRON)) {
            $modifiedColumns[':p' . $index++]  = '`verrichtingscode_gehanteerd_door_bron`';
        }
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_VERRICHTINGSOORT)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusverwijzing_verrichtingsoort`';
        }
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::VERRICHTINGSSOORT_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`verrichtingssoort_code`';
        }
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::VERRICHTINGSOMSCHRIJVING)) {
            $modifiedColumns[':p' . $index++]  = '`verrichtingsomschrijving`';
        }
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::MEMOCODE)) {
            $modifiedColumns[':p' . $index++]  = '`memocode`';
        }
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::INGANGSDATUM)) {
            $modifiedColumns[':p' . $index++]  = '`ingangsdatum`';
        }
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::VERVALDATUM)) {
            $modifiedColumns[':p' . $index++]  = '`vervaldatum`';
        }
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::URL_VOOR_BESCHRIJVING_VAN_TOEPASSING_VERRICHTING)) {
            $modifiedColumns[':p' . $index++]  = '`url_voor_beschrijving_van_toepassing_verrichting`';
        }
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER_BOVENLIGGEND_NIVEAU)) {
            $modifiedColumns[':p' . $index++]  = '`verrichtingsnummer_bovenliggend_niveau`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_verrichtingen_tabel` (%s) VALUES (%s)',
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
                    case '`verrichtingsnummer`':
                        $stmt->bindValue($identifier, $this->verrichtingsnummer, PDO::PARAM_INT);
                        break;
                    case '`thesaurusverwijzing_bron_verrichting`':
                        $stmt->bindValue($identifier, $this->thesaurusverwijzing_bron_verrichting, PDO::PARAM_INT);
                        break;
                    case '`bron_verrichting`':
                        $stmt->bindValue($identifier, $this->bron_verrichting, PDO::PARAM_INT);
                        break;
                    case '`verrichtingscode_gehanteerd_door_bron`':
                        $stmt->bindValue($identifier, $this->verrichtingscode_gehanteerd_door_bron, PDO::PARAM_STR);
                        break;
                    case '`thesaurusverwijzing_verrichtingsoort`':
                        $stmt->bindValue($identifier, $this->thesaurusverwijzing_verrichtingsoort, PDO::PARAM_INT);
                        break;
                    case '`verrichtingssoort_code`':
                        $stmt->bindValue($identifier, $this->verrichtingssoort_code, PDO::PARAM_INT);
                        break;
                    case '`verrichtingsomschrijving`':
                        $stmt->bindValue($identifier, $this->verrichtingsomschrijving, PDO::PARAM_STR);
                        break;
                    case '`memocode`':
                        $stmt->bindValue($identifier, $this->memocode, PDO::PARAM_STR);
                        break;
                    case '`ingangsdatum`':
                        $stmt->bindValue($identifier, $this->ingangsdatum, PDO::PARAM_INT);
                        break;
                    case '`vervaldatum`':
                        $stmt->bindValue($identifier, $this->vervaldatum, PDO::PARAM_INT);
                        break;
                    case '`url_voor_beschrijving_van_toepassing_verrichting`':
                        $stmt->bindValue($identifier, $this->url_voor_beschrijving_van_toepassing_verrichting, PDO::PARAM_STR);
                        break;
                    case '`verrichtingsnummer_bovenliggend_niveau`':
                        $stmt->bindValue($identifier, $this->verrichtingsnummer_bovenliggend_niveau, PDO::PARAM_INT);
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


            if (($retval = GsVerrichtingenTabelPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsVerrichtingenTabelPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getVerrichtingsnummer();
                break;
            case 3:
                return $this->getThesaurusverwijzingBronVerrichting();
                break;
            case 4:
                return $this->getBronVerrichting();
                break;
            case 5:
                return $this->getVerrichtingscodeGehanteerdDoorBron();
                break;
            case 6:
                return $this->getThesaurusverwijzingVerrichtingsoort();
                break;
            case 7:
                return $this->getVerrichtingssoortCode();
                break;
            case 8:
                return $this->getVerrichtingsomschrijving();
                break;
            case 9:
                return $this->getMemocode();
                break;
            case 10:
                return $this->getIngangsdatum();
                break;
            case 11:
                return $this->getVervaldatum();
                break;
            case 12:
                return $this->getUrlVoorBeschrijvingVanToepassingVerrichting();
                break;
            case 13:
                return $this->getVerrichtingsnummerBovenliggendNiveau();
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
        if (isset($alreadyDumpedObjects['GsVerrichtingenTabel'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsVerrichtingenTabel'][serialize($this->getPrimaryKey())] = true;
        $keys = GsVerrichtingenTabelPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getVerrichtingsnummer(),
            $keys[3] => $this->getThesaurusverwijzingBronVerrichting(),
            $keys[4] => $this->getBronVerrichting(),
            $keys[5] => $this->getVerrichtingscodeGehanteerdDoorBron(),
            $keys[6] => $this->getThesaurusverwijzingVerrichtingsoort(),
            $keys[7] => $this->getVerrichtingssoortCode(),
            $keys[8] => $this->getVerrichtingsomschrijving(),
            $keys[9] => $this->getMemocode(),
            $keys[10] => $this->getIngangsdatum(),
            $keys[11] => $this->getVervaldatum(),
            $keys[12] => $this->getUrlVoorBeschrijvingVanToepassingVerrichting(),
            $keys[13] => $this->getVerrichtingsnummerBovenliggendNiveau(),
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
        $pos = GsVerrichtingenTabelPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setVerrichtingsnummer($value);
                break;
            case 3:
                $this->setThesaurusverwijzingBronVerrichting($value);
                break;
            case 4:
                $this->setBronVerrichting($value);
                break;
            case 5:
                $this->setVerrichtingscodeGehanteerdDoorBron($value);
                break;
            case 6:
                $this->setThesaurusverwijzingVerrichtingsoort($value);
                break;
            case 7:
                $this->setVerrichtingssoortCode($value);
                break;
            case 8:
                $this->setVerrichtingsomschrijving($value);
                break;
            case 9:
                $this->setMemocode($value);
                break;
            case 10:
                $this->setIngangsdatum($value);
                break;
            case 11:
                $this->setVervaldatum($value);
                break;
            case 12:
                $this->setUrlVoorBeschrijvingVanToepassingVerrichting($value);
                break;
            case 13:
                $this->setVerrichtingsnummerBovenliggendNiveau($value);
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
        $keys = GsVerrichtingenTabelPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setVerrichtingsnummer($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setThesaurusverwijzingBronVerrichting($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setBronVerrichting($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setVerrichtingscodeGehanteerdDoorBron($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setThesaurusverwijzingVerrichtingsoort($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setVerrichtingssoortCode($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVerrichtingsomschrijving($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMemocode($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIngangsdatum($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setVervaldatum($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setUrlVoorBeschrijvingVanToepassingVerrichting($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setVerrichtingsnummerBovenliggendNiveau($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsVerrichtingenTabelPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsVerrichtingenTabelPeer::BESTANDNUMMER)) $criteria->add(GsVerrichtingenTabelPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::MUTATIEKODE)) $criteria->add(GsVerrichtingenTabelPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER)) $criteria->add(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER, $this->verrichtingsnummer);
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_BRON_VERRICHTING)) $criteria->add(GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_BRON_VERRICHTING, $this->thesaurusverwijzing_bron_verrichting);
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::BRON_VERRICHTING)) $criteria->add(GsVerrichtingenTabelPeer::BRON_VERRICHTING, $this->bron_verrichting);
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::VERRICHTINGSCODE_GEHANTEERD_DOOR_BRON)) $criteria->add(GsVerrichtingenTabelPeer::VERRICHTINGSCODE_GEHANTEERD_DOOR_BRON, $this->verrichtingscode_gehanteerd_door_bron);
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_VERRICHTINGSOORT)) $criteria->add(GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_VERRICHTINGSOORT, $this->thesaurusverwijzing_verrichtingsoort);
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::VERRICHTINGSSOORT_CODE)) $criteria->add(GsVerrichtingenTabelPeer::VERRICHTINGSSOORT_CODE, $this->verrichtingssoort_code);
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::VERRICHTINGSOMSCHRIJVING)) $criteria->add(GsVerrichtingenTabelPeer::VERRICHTINGSOMSCHRIJVING, $this->verrichtingsomschrijving);
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::MEMOCODE)) $criteria->add(GsVerrichtingenTabelPeer::MEMOCODE, $this->memocode);
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::INGANGSDATUM)) $criteria->add(GsVerrichtingenTabelPeer::INGANGSDATUM, $this->ingangsdatum);
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::VERVALDATUM)) $criteria->add(GsVerrichtingenTabelPeer::VERVALDATUM, $this->vervaldatum);
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::URL_VOOR_BESCHRIJVING_VAN_TOEPASSING_VERRICHTING)) $criteria->add(GsVerrichtingenTabelPeer::URL_VOOR_BESCHRIJVING_VAN_TOEPASSING_VERRICHTING, $this->url_voor_beschrijving_van_toepassing_verrichting);
        if ($this->isColumnModified(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER_BOVENLIGGEND_NIVEAU)) $criteria->add(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER_BOVENLIGGEND_NIVEAU, $this->verrichtingsnummer_bovenliggend_niveau);

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
        $criteria = new Criteria(GsVerrichtingenTabelPeer::DATABASE_NAME);
        $criteria->add(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER, $this->verrichtingsnummer);
        $criteria->add(GsVerrichtingenTabelPeer::BRON_VERRICHTING, $this->bron_verrichting);

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
        $pks[0] = $this->getVerrichtingsnummer();
        $pks[1] = $this->getBronVerrichting();

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
        $this->setVerrichtingsnummer($keys[0]);
        $this->setBronVerrichting($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getVerrichtingsnummer()) && (null === $this->getBronVerrichting());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsVerrichtingenTabel (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setVerrichtingsnummer($this->getVerrichtingsnummer());
        $copyObj->setThesaurusverwijzingBronVerrichting($this->getThesaurusverwijzingBronVerrichting());
        $copyObj->setBronVerrichting($this->getBronVerrichting());
        $copyObj->setVerrichtingscodeGehanteerdDoorBron($this->getVerrichtingscodeGehanteerdDoorBron());
        $copyObj->setThesaurusverwijzingVerrichtingsoort($this->getThesaurusverwijzingVerrichtingsoort());
        $copyObj->setVerrichtingssoortCode($this->getVerrichtingssoortCode());
        $copyObj->setVerrichtingsomschrijving($this->getVerrichtingsomschrijving());
        $copyObj->setMemocode($this->getMemocode());
        $copyObj->setIngangsdatum($this->getIngangsdatum());
        $copyObj->setVervaldatum($this->getVervaldatum());
        $copyObj->setUrlVoorBeschrijvingVanToepassingVerrichting($this->getUrlVoorBeschrijvingVanToepassingVerrichting());
        $copyObj->setVerrichtingsnummerBovenliggendNiveau($this->getVerrichtingsnummerBovenliggendNiveau());
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
     * @return GsVerrichtingenTabel Clone of current object.
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
     * @return GsVerrichtingenTabelPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsVerrichtingenTabelPeer();
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
        $this->verrichtingsnummer = null;
        $this->thesaurusverwijzing_bron_verrichting = null;
        $this->bron_verrichting = null;
        $this->verrichtingscode_gehanteerd_door_bron = null;
        $this->thesaurusverwijzing_verrichtingsoort = null;
        $this->verrichtingssoort_code = null;
        $this->verrichtingsomschrijving = null;
        $this->memocode = null;
        $this->ingangsdatum = null;
        $this->vervaldatum = null;
        $this->url_voor_beschrijving_van_toepassing_verrichting = null;
        $this->verrichtingsnummer_bovenliggend_niveau = null;
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
        return (string) $this->exportTo(GsVerrichtingenTabelPeer::DEFAULT_STRING_FORMAT);
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
