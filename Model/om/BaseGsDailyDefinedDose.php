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
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodes;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDose;
use PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDosePeer;
use PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDoseQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery;

abstract class BaseGsDailyDefinedDose extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDailyDefinedDosePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsDailyDefinedDosePeer
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
     * The value for the atccode field.
     * @var        string
     */
    protected $atccode;

    /**
     * The value for the dddaantal field.
     * @var        string
     */
    protected $dddaantal;

    /**
     * The value for the dddeenheid_thesaurusnummer field.
     * @var        int
     */
    protected $dddeenheid_thesaurusnummer;

    /**
     * The value for the dddeenheid field.
     * @var        int
     */
    protected $dddeenheid;

    /**
     * The value for the ddd_toedieningsweg_thesaurusnummer field.
     * @var        int
     */
    protected $ddd_toedieningsweg_thesaurusnummer;

    /**
     * The value for the dddtoedieningsweg field.
     * @var        int
     */
    protected $dddtoedieningsweg;

    /**
     * The value for the ddd_statusaanduiding field.
     * @var        int
     */
    protected $ddd_statusaanduiding;

    /**
     * @var        GsAtcCodes
     */
    protected $aGsAtcCodes;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aEenheidOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aToedieningswegOmschrijving;

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
     * Get the [atccode] column value.
     *
     * @return string
     */
    public function getAtccode()
    {

        return $this->atccode;
    }

    /**
     * Get the [dddaantal] column value.
     *
     * @return string
     */
    public function getDddaantal()
    {

        return $this->dddaantal;
    }

    /**
     * Get the [dddeenheid_thesaurusnummer] column value.
     *
     * @return int
     */
    public function getDddeenheidThesaurusnummer()
    {

        return $this->dddeenheid_thesaurusnummer;
    }

    /**
     * Get the [dddeenheid] column value.
     *
     * @return int
     */
    public function getDddeenheid()
    {

        return $this->dddeenheid;
    }

    /**
     * Get the [ddd_toedieningsweg_thesaurusnummer] column value.
     *
     * @return int
     */
    public function getDddToedieningswegThesaurusnummer()
    {

        return $this->ddd_toedieningsweg_thesaurusnummer;
    }

    /**
     * Get the [dddtoedieningsweg] column value.
     *
     * @return int
     */
    public function getDddtoedieningsweg()
    {

        return $this->dddtoedieningsweg;
    }

    /**
     * Get the [ddd_statusaanduiding] column value.
     *
     * @return int
     */
    public function getDddStatusaanduiding()
    {

        return $this->ddd_statusaanduiding;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsDailyDefinedDose The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsDailyDefinedDosePeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsDailyDefinedDose The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsDailyDefinedDosePeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [atccode] column.
     *
     * @param  string $v new value
     * @return GsDailyDefinedDose The current object (for fluent API support)
     */
    public function setAtccode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->atccode !== $v) {
            $this->atccode = $v;
            $this->modifiedColumns[] = GsDailyDefinedDosePeer::ATCCODE;
        }

        if ($this->aGsAtcCodes !== null && $this->aGsAtcCodes->getAtccode() !== $v) {
            $this->aGsAtcCodes = null;
        }


        return $this;
    } // setAtccode()

    /**
     * Set the value of [dddaantal] column.
     *
     * @param  string $v new value
     * @return GsDailyDefinedDose The current object (for fluent API support)
     */
    public function setDddaantal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dddaantal !== $v) {
            $this->dddaantal = $v;
            $this->modifiedColumns[] = GsDailyDefinedDosePeer::DDDAANTAL;
        }


        return $this;
    } // setDddaantal()

    /**
     * Set the value of [dddeenheid_thesaurusnummer] column.
     *
     * @param  int $v new value
     * @return GsDailyDefinedDose The current object (for fluent API support)
     */
    public function setDddeenheidThesaurusnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dddeenheid_thesaurusnummer !== $v) {
            $this->dddeenheid_thesaurusnummer = $v;
            $this->modifiedColumns[] = GsDailyDefinedDosePeer::DDDEENHEID_THESAURUSNUMMER;
        }

        if ($this->aEenheidOmschrijving !== null && $this->aEenheidOmschrijving->getThesaurusnummer() !== $v) {
            $this->aEenheidOmschrijving = null;
        }


        return $this;
    } // setDddeenheidThesaurusnummer()

    /**
     * Set the value of [dddeenheid] column.
     *
     * @param  int $v new value
     * @return GsDailyDefinedDose The current object (for fluent API support)
     */
    public function setDddeenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dddeenheid !== $v) {
            $this->dddeenheid = $v;
            $this->modifiedColumns[] = GsDailyDefinedDosePeer::DDDEENHEID;
        }

        if ($this->aEenheidOmschrijving !== null && $this->aEenheidOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aEenheidOmschrijving = null;
        }


        return $this;
    } // setDddeenheid()

    /**
     * Set the value of [ddd_toedieningsweg_thesaurusnummer] column.
     *
     * @param  int $v new value
     * @return GsDailyDefinedDose The current object (for fluent API support)
     */
    public function setDddToedieningswegThesaurusnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ddd_toedieningsweg_thesaurusnummer !== $v) {
            $this->ddd_toedieningsweg_thesaurusnummer = $v;
            $this->modifiedColumns[] = GsDailyDefinedDosePeer::DDD_TOEDIENINGSWEG_THESAURUSNUMMER;
        }

        if ($this->aToedieningswegOmschrijving !== null && $this->aToedieningswegOmschrijving->getThesaurusnummer() !== $v) {
            $this->aToedieningswegOmschrijving = null;
        }


        return $this;
    } // setDddToedieningswegThesaurusnummer()

    /**
     * Set the value of [dddtoedieningsweg] column.
     *
     * @param  int $v new value
     * @return GsDailyDefinedDose The current object (for fluent API support)
     */
    public function setDddtoedieningsweg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dddtoedieningsweg !== $v) {
            $this->dddtoedieningsweg = $v;
            $this->modifiedColumns[] = GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG;
        }

        if ($this->aToedieningswegOmschrijving !== null && $this->aToedieningswegOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aToedieningswegOmschrijving = null;
        }


        return $this;
    } // setDddtoedieningsweg()

    /**
     * Set the value of [ddd_statusaanduiding] column.
     *
     * @param  int $v new value
     * @return GsDailyDefinedDose The current object (for fluent API support)
     */
    public function setDddStatusaanduiding($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ddd_statusaanduiding !== $v) {
            $this->ddd_statusaanduiding = $v;
            $this->modifiedColumns[] = GsDailyDefinedDosePeer::DDD_STATUSAANDUIDING;
        }


        return $this;
    } // setDddStatusaanduiding()

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
            $this->atccode = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->dddaantal = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->dddeenheid_thesaurusnummer = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->dddeenheid = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->ddd_toedieningsweg_thesaurusnummer = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->dddtoedieningsweg = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->ddd_statusaanduiding = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = GsDailyDefinedDosePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsDailyDefinedDose object", $e);
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

        if ($this->aGsAtcCodes !== null && $this->atccode !== $this->aGsAtcCodes->getAtccode()) {
            $this->aGsAtcCodes = null;
        }
        if ($this->aEenheidOmschrijving !== null && $this->dddeenheid_thesaurusnummer !== $this->aEenheidOmschrijving->getThesaurusnummer()) {
            $this->aEenheidOmschrijving = null;
        }
        if ($this->aEenheidOmschrijving !== null && $this->dddeenheid !== $this->aEenheidOmschrijving->getThesaurusItemnummer()) {
            $this->aEenheidOmschrijving = null;
        }
        if ($this->aToedieningswegOmschrijving !== null && $this->ddd_toedieningsweg_thesaurusnummer !== $this->aToedieningswegOmschrijving->getThesaurusnummer()) {
            $this->aToedieningswegOmschrijving = null;
        }
        if ($this->aToedieningswegOmschrijving !== null && $this->dddtoedieningsweg !== $this->aToedieningswegOmschrijving->getThesaurusItemnummer()) {
            $this->aToedieningswegOmschrijving = null;
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
            $con = Propel::getConnection(GsDailyDefinedDosePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsDailyDefinedDosePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGsAtcCodes = null;
            $this->aEenheidOmschrijving = null;
            $this->aToedieningswegOmschrijving = null;
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
            $con = Propel::getConnection(GsDailyDefinedDosePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsDailyDefinedDoseQuery::create()
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
            $con = Propel::getConnection(GsDailyDefinedDosePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsDailyDefinedDosePeer::addInstanceToPool($this);
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

            if ($this->aGsAtcCodes !== null) {
                if ($this->aGsAtcCodes->isModified() || $this->aGsAtcCodes->isNew()) {
                    $affectedRows += $this->aGsAtcCodes->save($con);
                }
                $this->setGsAtcCodes($this->aGsAtcCodes);
            }

            if ($this->aEenheidOmschrijving !== null) {
                if ($this->aEenheidOmschrijving->isModified() || $this->aEenheidOmschrijving->isNew()) {
                    $affectedRows += $this->aEenheidOmschrijving->save($con);
                }
                $this->setEenheidOmschrijving($this->aEenheidOmschrijving);
            }

            if ($this->aToedieningswegOmschrijving !== null) {
                if ($this->aToedieningswegOmschrijving->isModified() || $this->aToedieningswegOmschrijving->isNew()) {
                    $affectedRows += $this->aToedieningswegOmschrijving->save($con);
                }
                $this->setToedieningswegOmschrijving($this->aToedieningswegOmschrijving);
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
        if ($this->isColumnModified(GsDailyDefinedDosePeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsDailyDefinedDosePeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsDailyDefinedDosePeer::ATCCODE)) {
            $modifiedColumns[':p' . $index++]  = '`atccode`';
        }
        if ($this->isColumnModified(GsDailyDefinedDosePeer::DDDAANTAL)) {
            $modifiedColumns[':p' . $index++]  = '`dddaantal`';
        }
        if ($this->isColumnModified(GsDailyDefinedDosePeer::DDDEENHEID_THESAURUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`dddeenheid_thesaurusnummer`';
        }
        if ($this->isColumnModified(GsDailyDefinedDosePeer::DDDEENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`dddeenheid`';
        }
        if ($this->isColumnModified(GsDailyDefinedDosePeer::DDD_TOEDIENINGSWEG_THESAURUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`ddd_toedieningsweg_thesaurusnummer`';
        }
        if ($this->isColumnModified(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG)) {
            $modifiedColumns[':p' . $index++]  = '`dddtoedieningsweg`';
        }
        if ($this->isColumnModified(GsDailyDefinedDosePeer::DDD_STATUSAANDUIDING)) {
            $modifiedColumns[':p' . $index++]  = '`ddd_statusaanduiding`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_daily_defined_dose` (%s) VALUES (%s)',
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
                    case '`atccode`':
                        $stmt->bindValue($identifier, $this->atccode, PDO::PARAM_STR);
                        break;
                    case '`dddaantal`':
                        $stmt->bindValue($identifier, $this->dddaantal, PDO::PARAM_STR);
                        break;
                    case '`dddeenheid_thesaurusnummer`':
                        $stmt->bindValue($identifier, $this->dddeenheid_thesaurusnummer, PDO::PARAM_INT);
                        break;
                    case '`dddeenheid`':
                        $stmt->bindValue($identifier, $this->dddeenheid, PDO::PARAM_INT);
                        break;
                    case '`ddd_toedieningsweg_thesaurusnummer`':
                        $stmt->bindValue($identifier, $this->ddd_toedieningsweg_thesaurusnummer, PDO::PARAM_INT);
                        break;
                    case '`dddtoedieningsweg`':
                        $stmt->bindValue($identifier, $this->dddtoedieningsweg, PDO::PARAM_INT);
                        break;
                    case '`ddd_statusaanduiding`':
                        $stmt->bindValue($identifier, $this->ddd_statusaanduiding, PDO::PARAM_INT);
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

            if ($this->aGsAtcCodes !== null) {
                if (!$this->aGsAtcCodes->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsAtcCodes->getValidationFailures());
                }
            }

            if ($this->aEenheidOmschrijving !== null) {
                if (!$this->aEenheidOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEenheidOmschrijving->getValidationFailures());
                }
            }

            if ($this->aToedieningswegOmschrijving !== null) {
                if (!$this->aToedieningswegOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aToedieningswegOmschrijving->getValidationFailures());
                }
            }


            if (($retval = GsDailyDefinedDosePeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsDailyDefinedDosePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAtccode();
                break;
            case 3:
                return $this->getDddaantal();
                break;
            case 4:
                return $this->getDddeenheidThesaurusnummer();
                break;
            case 5:
                return $this->getDddeenheid();
                break;
            case 6:
                return $this->getDddToedieningswegThesaurusnummer();
                break;
            case 7:
                return $this->getDddtoedieningsweg();
                break;
            case 8:
                return $this->getDddStatusaanduiding();
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
        if (isset($alreadyDumpedObjects['GsDailyDefinedDose'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsDailyDefinedDose'][serialize($this->getPrimaryKey())] = true;
        $keys = GsDailyDefinedDosePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getAtccode(),
            $keys[3] => $this->getDddaantal(),
            $keys[4] => $this->getDddeenheidThesaurusnummer(),
            $keys[5] => $this->getDddeenheid(),
            $keys[6] => $this->getDddToedieningswegThesaurusnummer(),
            $keys[7] => $this->getDddtoedieningsweg(),
            $keys[8] => $this->getDddStatusaanduiding(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aGsAtcCodes) {
                $result['GsAtcCodes'] = $this->aGsAtcCodes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEenheidOmschrijving) {
                $result['EenheidOmschrijving'] = $this->aEenheidOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aToedieningswegOmschrijving) {
                $result['ToedieningswegOmschrijving'] = $this->aToedieningswegOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = GsDailyDefinedDosePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAtccode($value);
                break;
            case 3:
                $this->setDddaantal($value);
                break;
            case 4:
                $this->setDddeenheidThesaurusnummer($value);
                break;
            case 5:
                $this->setDddeenheid($value);
                break;
            case 6:
                $this->setDddToedieningswegThesaurusnummer($value);
                break;
            case 7:
                $this->setDddtoedieningsweg($value);
                break;
            case 8:
                $this->setDddStatusaanduiding($value);
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
        $keys = GsDailyDefinedDosePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAtccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDddaantal($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDddeenheidThesaurusnummer($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDddeenheid($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDddToedieningswegThesaurusnummer($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDddtoedieningsweg($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDddStatusaanduiding($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsDailyDefinedDosePeer::DATABASE_NAME);

        if ($this->isColumnModified(GsDailyDefinedDosePeer::BESTANDNUMMER)) $criteria->add(GsDailyDefinedDosePeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsDailyDefinedDosePeer::MUTATIEKODE)) $criteria->add(GsDailyDefinedDosePeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsDailyDefinedDosePeer::ATCCODE)) $criteria->add(GsDailyDefinedDosePeer::ATCCODE, $this->atccode);
        if ($this->isColumnModified(GsDailyDefinedDosePeer::DDDAANTAL)) $criteria->add(GsDailyDefinedDosePeer::DDDAANTAL, $this->dddaantal);
        if ($this->isColumnModified(GsDailyDefinedDosePeer::DDDEENHEID_THESAURUSNUMMER)) $criteria->add(GsDailyDefinedDosePeer::DDDEENHEID_THESAURUSNUMMER, $this->dddeenheid_thesaurusnummer);
        if ($this->isColumnModified(GsDailyDefinedDosePeer::DDDEENHEID)) $criteria->add(GsDailyDefinedDosePeer::DDDEENHEID, $this->dddeenheid);
        if ($this->isColumnModified(GsDailyDefinedDosePeer::DDD_TOEDIENINGSWEG_THESAURUSNUMMER)) $criteria->add(GsDailyDefinedDosePeer::DDD_TOEDIENINGSWEG_THESAURUSNUMMER, $this->ddd_toedieningsweg_thesaurusnummer);
        if ($this->isColumnModified(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG)) $criteria->add(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG, $this->dddtoedieningsweg);
        if ($this->isColumnModified(GsDailyDefinedDosePeer::DDD_STATUSAANDUIDING)) $criteria->add(GsDailyDefinedDosePeer::DDD_STATUSAANDUIDING, $this->ddd_statusaanduiding);

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
        $criteria = new Criteria(GsDailyDefinedDosePeer::DATABASE_NAME);
        $criteria->add(GsDailyDefinedDosePeer::ATCCODE, $this->atccode);
        $criteria->add(GsDailyDefinedDosePeer::DDDAANTAL, $this->dddaantal);
        $criteria->add(GsDailyDefinedDosePeer::DDDEENHEID, $this->dddeenheid);
        $criteria->add(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG, $this->dddtoedieningsweg);

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
        $pks[0] = $this->getAtccode();
        $pks[1] = $this->getDddaantal();
        $pks[2] = $this->getDddeenheid();
        $pks[3] = $this->getDddtoedieningsweg();

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
        $this->setAtccode($keys[0]);
        $this->setDddaantal($keys[1]);
        $this->setDddeenheid($keys[2]);
        $this->setDddtoedieningsweg($keys[3]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getAtccode()) && (null === $this->getDddaantal()) && (null === $this->getDddeenheid()) && (null === $this->getDddtoedieningsweg());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsDailyDefinedDose (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setAtccode($this->getAtccode());
        $copyObj->setDddaantal($this->getDddaantal());
        $copyObj->setDddeenheidThesaurusnummer($this->getDddeenheidThesaurusnummer());
        $copyObj->setDddeenheid($this->getDddeenheid());
        $copyObj->setDddToedieningswegThesaurusnummer($this->getDddToedieningswegThesaurusnummer());
        $copyObj->setDddtoedieningsweg($this->getDddtoedieningsweg());
        $copyObj->setDddStatusaanduiding($this->getDddStatusaanduiding());

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
     * @return GsDailyDefinedDose Clone of current object.
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
     * @return GsDailyDefinedDosePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsDailyDefinedDosePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsAtcCodes object.
     *
     * @param                  GsAtcCodes $v
     * @return GsDailyDefinedDose The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsAtcCodes(GsAtcCodes $v = null)
    {
        if ($v === null) {
            $this->setAtccode(NULL);
        } else {
            $this->setAtccode($v->getAtccode());
        }

        $this->aGsAtcCodes = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsAtcCodes object, it will not be re-added.
        if ($v !== null) {
            $v->addGsDailyDefinedDose($this);
        }


        return $this;
    }


    /**
     * Get the associated GsAtcCodes object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsAtcCodes The associated GsAtcCodes object.
     * @throws PropelException
     */
    public function getGsAtcCodes(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsAtcCodes === null && (($this->atccode !== "" && $this->atccode !== null)) && $doQuery) {
            $this->aGsAtcCodes = GsAtcCodesQuery::create()->findPk($this->atccode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsAtcCodes->addGsDailyDefinedDoses($this);
             */
        }

        return $this->aGsAtcCodes;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsDailyDefinedDose The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEenheidOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setDddeenheidThesaurusnummer(NULL);
        } else {
            $this->setDddeenheidThesaurusnummer($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setDddeenheid(NULL);
        } else {
            $this->setDddeenheid($v->getThesaurusItemnummer());
        }

        $this->aEenheidOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid($this);
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
    public function getEenheidOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEenheidOmschrijving === null && ($this->dddeenheid_thesaurusnummer !== null && $this->dddeenheid !== null) && $doQuery) {
            $this->aEenheidOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->dddeenheid_thesaurusnummer, $this->dddeenheid), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEenheidOmschrijving->addGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid($this);
             */
        }

        return $this->aEenheidOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsDailyDefinedDose The current object (for fluent API support)
     * @throws PropelException
     */
    public function setToedieningswegOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setDddToedieningswegThesaurusnummer(NULL);
        } else {
            $this->setDddToedieningswegThesaurusnummer($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setDddtoedieningsweg(NULL);
        } else {
            $this->setDddtoedieningsweg($v->getThesaurusItemnummer());
        }

        $this->aToedieningswegOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($this);
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
    public function getToedieningswegOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aToedieningswegOmschrijving === null && ($this->ddd_toedieningsweg_thesaurusnummer !== null && $this->dddtoedieningsweg !== null) && $doQuery) {
            $this->aToedieningswegOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->ddd_toedieningsweg_thesaurusnummer, $this->dddtoedieningsweg), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aToedieningswegOmschrijving->addGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($this);
             */
        }

        return $this->aToedieningswegOmschrijving;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->atccode = null;
        $this->dddaantal = null;
        $this->dddeenheid_thesaurusnummer = null;
        $this->dddeenheid = null;
        $this->ddd_toedieningsweg_thesaurusnummer = null;
        $this->dddtoedieningsweg = null;
        $this->ddd_statusaanduiding = null;
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
            if ($this->aGsAtcCodes instanceof Persistent) {
              $this->aGsAtcCodes->clearAllReferences($deep);
            }
            if ($this->aEenheidOmschrijving instanceof Persistent) {
              $this->aEenheidOmschrijving->clearAllReferences($deep);
            }
            if ($this->aToedieningswegOmschrijving instanceof Persistent) {
              $this->aToedieningswegOmschrijving->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aGsAtcCodes = null;
        $this->aEenheidOmschrijving = null;
        $this->aToedieningswegOmschrijving = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsDailyDefinedDosePeer::DEFAULT_STRING_FORMAT);
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
