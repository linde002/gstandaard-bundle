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
use PharmaIntelligence\GstandaardBundle\Model\GsZiccode;
use PharmaIntelligence\GstandaardBundle\Model\GsZiccodePeer;
use PharmaIntelligence\GstandaardBundle\Model\GsZiccodeQuery;

abstract class BaseGsZiccode extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsZiccodePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsZiccodePeer
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
     * The value for the instellingscode field.
     * @var        string
     */
    protected $instellingscode;

    /**
     * The value for the naam_van_de_instelling field.
     * @var        string
     */
    protected $naam_van_de_instelling;

    /**
     * The value for the straatnaam field.
     * @var        string
     */
    protected $straatnaam;

    /**
     * The value for the huisnummer field.
     * @var        int
     */
    protected $huisnummer;

    /**
     * The value for the huisnummer_toevoeging field.
     * @var        string
     */
    protected $huisnummer_toevoeging;

    /**
     * The value for the postcode field.
     * @var        string
     */
    protected $postcode;

    /**
     * The value for the plaats field.
     * @var        string
     */
    protected $plaats;

    /**
     * The value for the zoeksleutel field.
     * @var        string
     */
    protected $zoeksleutel;

    /**
     * The value for the agbcode_van_de_instelling field.
     * @var        int
     */
    protected $agbcode_van_de_instelling;

    /**
     * The value for the agbcode_toevoegsel_lokaties field.
     * @var        string
     */
    protected $agbcode_toevoegsel_lokaties;

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
     * Get the [instellingscode] column value.
     *
     * @return string
     */
    public function getInstellingscode()
    {

        return $this->instellingscode;
    }

    /**
     * Get the [naam_van_de_instelling] column value.
     *
     * @return string
     */
    public function getNaamVanDeInstelling()
    {

        return $this->naam_van_de_instelling;
    }

    /**
     * Get the [straatnaam] column value.
     *
     * @return string
     */
    public function getStraatnaam()
    {

        return $this->straatnaam;
    }

    /**
     * Get the [huisnummer] column value.
     *
     * @return int
     */
    public function getHuisnummer()
    {

        return $this->huisnummer;
    }

    /**
     * Get the [huisnummer_toevoeging] column value.
     *
     * @return string
     */
    public function getHuisnummerToevoeging()
    {

        return $this->huisnummer_toevoeging;
    }

    /**
     * Get the [postcode] column value.
     *
     * @return string
     */
    public function getPostcode()
    {

        return $this->postcode;
    }

    /**
     * Get the [plaats] column value.
     *
     * @return string
     */
    public function getPlaats()
    {

        return $this->plaats;
    }

    /**
     * Get the [zoeksleutel] column value.
     *
     * @return string
     */
    public function getZoeksleutel()
    {

        return $this->zoeksleutel;
    }

    /**
     * Get the [agbcode_van_de_instelling] column value.
     *
     * @return int
     */
    public function getAgbcodeVanDeInstelling()
    {

        return $this->agbcode_van_de_instelling;
    }

    /**
     * Get the [agbcode_toevoegsel_lokaties] column value.
     *
     * @return string
     */
    public function getAgbcodeToevoegselLokaties()
    {

        return $this->agbcode_toevoegsel_lokaties;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsZiccode The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsZiccodePeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsZiccode The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsZiccodePeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [instellingscode] column.
     *
     * @param  string $v new value
     * @return GsZiccode The current object (for fluent API support)
     */
    public function setInstellingscode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->instellingscode !== $v) {
            $this->instellingscode = $v;
            $this->modifiedColumns[] = GsZiccodePeer::INSTELLINGSCODE;
        }


        return $this;
    } // setInstellingscode()

    /**
     * Set the value of [naam_van_de_instelling] column.
     *
     * @param  string $v new value
     * @return GsZiccode The current object (for fluent API support)
     */
    public function setNaamVanDeInstelling($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->naam_van_de_instelling !== $v) {
            $this->naam_van_de_instelling = $v;
            $this->modifiedColumns[] = GsZiccodePeer::NAAM_VAN_DE_INSTELLING;
        }


        return $this;
    } // setNaamVanDeInstelling()

    /**
     * Set the value of [straatnaam] column.
     *
     * @param  string $v new value
     * @return GsZiccode The current object (for fluent API support)
     */
    public function setStraatnaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->straatnaam !== $v) {
            $this->straatnaam = $v;
            $this->modifiedColumns[] = GsZiccodePeer::STRAATNAAM;
        }


        return $this;
    } // setStraatnaam()

    /**
     * Set the value of [huisnummer] column.
     *
     * @param  int $v new value
     * @return GsZiccode The current object (for fluent API support)
     */
    public function setHuisnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->huisnummer !== $v) {
            $this->huisnummer = $v;
            $this->modifiedColumns[] = GsZiccodePeer::HUISNUMMER;
        }


        return $this;
    } // setHuisnummer()

    /**
     * Set the value of [huisnummer_toevoeging] column.
     *
     * @param  string $v new value
     * @return GsZiccode The current object (for fluent API support)
     */
    public function setHuisnummerToevoeging($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->huisnummer_toevoeging !== $v) {
            $this->huisnummer_toevoeging = $v;
            $this->modifiedColumns[] = GsZiccodePeer::HUISNUMMER_TOEVOEGING;
        }


        return $this;
    } // setHuisnummerToevoeging()

    /**
     * Set the value of [postcode] column.
     *
     * @param  string $v new value
     * @return GsZiccode The current object (for fluent API support)
     */
    public function setPostcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->postcode !== $v) {
            $this->postcode = $v;
            $this->modifiedColumns[] = GsZiccodePeer::POSTCODE;
        }


        return $this;
    } // setPostcode()

    /**
     * Set the value of [plaats] column.
     *
     * @param  string $v new value
     * @return GsZiccode The current object (for fluent API support)
     */
    public function setPlaats($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->plaats !== $v) {
            $this->plaats = $v;
            $this->modifiedColumns[] = GsZiccodePeer::PLAATS;
        }


        return $this;
    } // setPlaats()

    /**
     * Set the value of [zoeksleutel] column.
     *
     * @param  string $v new value
     * @return GsZiccode The current object (for fluent API support)
     */
    public function setZoeksleutel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->zoeksleutel !== $v) {
            $this->zoeksleutel = $v;
            $this->modifiedColumns[] = GsZiccodePeer::ZOEKSLEUTEL;
        }


        return $this;
    } // setZoeksleutel()

    /**
     * Set the value of [agbcode_van_de_instelling] column.
     *
     * @param  int $v new value
     * @return GsZiccode The current object (for fluent API support)
     */
    public function setAgbcodeVanDeInstelling($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agbcode_van_de_instelling !== $v) {
            $this->agbcode_van_de_instelling = $v;
            $this->modifiedColumns[] = GsZiccodePeer::AGBCODE_VAN_DE_INSTELLING;
        }


        return $this;
    } // setAgbcodeVanDeInstelling()

    /**
     * Set the value of [agbcode_toevoegsel_lokaties] column.
     *
     * @param  string $v new value
     * @return GsZiccode The current object (for fluent API support)
     */
    public function setAgbcodeToevoegselLokaties($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->agbcode_toevoegsel_lokaties !== $v) {
            $this->agbcode_toevoegsel_lokaties = $v;
            $this->modifiedColumns[] = GsZiccodePeer::AGBCODE_TOEVOEGSEL_LOKATIES;
        }


        return $this;
    } // setAgbcodeToevoegselLokaties()

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
            $this->instellingscode = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->naam_van_de_instelling = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->straatnaam = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->huisnummer = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->huisnummer_toevoeging = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->postcode = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->plaats = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->zoeksleutel = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->agbcode_van_de_instelling = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->agbcode_toevoegsel_lokaties = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = GsZiccodePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsZiccode object", $e);
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
            $con = Propel::getConnection(GsZiccodePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsZiccodePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsZiccodePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsZiccodeQuery::create()
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
            $con = Propel::getConnection(GsZiccodePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsZiccodePeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsZiccodePeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsZiccodePeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsZiccodePeer::INSTELLINGSCODE)) {
            $modifiedColumns[':p' . $index++]  = '`instellingscode`';
        }
        if ($this->isColumnModified(GsZiccodePeer::NAAM_VAN_DE_INSTELLING)) {
            $modifiedColumns[':p' . $index++]  = '`naam_van_de_instelling`';
        }
        if ($this->isColumnModified(GsZiccodePeer::STRAATNAAM)) {
            $modifiedColumns[':p' . $index++]  = '`straatnaam`';
        }
        if ($this->isColumnModified(GsZiccodePeer::HUISNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`huisnummer`';
        }
        if ($this->isColumnModified(GsZiccodePeer::HUISNUMMER_TOEVOEGING)) {
            $modifiedColumns[':p' . $index++]  = '`huisnummer_toevoeging`';
        }
        if ($this->isColumnModified(GsZiccodePeer::POSTCODE)) {
            $modifiedColumns[':p' . $index++]  = '`postcode`';
        }
        if ($this->isColumnModified(GsZiccodePeer::PLAATS)) {
            $modifiedColumns[':p' . $index++]  = '`plaats`';
        }
        if ($this->isColumnModified(GsZiccodePeer::ZOEKSLEUTEL)) {
            $modifiedColumns[':p' . $index++]  = '`zoeksleutel`';
        }
        if ($this->isColumnModified(GsZiccodePeer::AGBCODE_VAN_DE_INSTELLING)) {
            $modifiedColumns[':p' . $index++]  = '`agbcode_van_de_instelling`';
        }
        if ($this->isColumnModified(GsZiccodePeer::AGBCODE_TOEVOEGSEL_LOKATIES)) {
            $modifiedColumns[':p' . $index++]  = '`agbcode_toevoegsel_lokaties`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_ziccode` (%s) VALUES (%s)',
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
                    case '`instellingscode`':
                        $stmt->bindValue($identifier, $this->instellingscode, PDO::PARAM_STR);
                        break;
                    case '`naam_van_de_instelling`':
                        $stmt->bindValue($identifier, $this->naam_van_de_instelling, PDO::PARAM_STR);
                        break;
                    case '`straatnaam`':
                        $stmt->bindValue($identifier, $this->straatnaam, PDO::PARAM_STR);
                        break;
                    case '`huisnummer`':
                        $stmt->bindValue($identifier, $this->huisnummer, PDO::PARAM_INT);
                        break;
                    case '`huisnummer_toevoeging`':
                        $stmt->bindValue($identifier, $this->huisnummer_toevoeging, PDO::PARAM_STR);
                        break;
                    case '`postcode`':
                        $stmt->bindValue($identifier, $this->postcode, PDO::PARAM_STR);
                        break;
                    case '`plaats`':
                        $stmt->bindValue($identifier, $this->plaats, PDO::PARAM_STR);
                        break;
                    case '`zoeksleutel`':
                        $stmt->bindValue($identifier, $this->zoeksleutel, PDO::PARAM_STR);
                        break;
                    case '`agbcode_van_de_instelling`':
                        $stmt->bindValue($identifier, $this->agbcode_van_de_instelling, PDO::PARAM_INT);
                        break;
                    case '`agbcode_toevoegsel_lokaties`':
                        $stmt->bindValue($identifier, $this->agbcode_toevoegsel_lokaties, PDO::PARAM_STR);
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


            if (($retval = GsZiccodePeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsZiccodePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getInstellingscode();
                break;
            case 3:
                return $this->getNaamVanDeInstelling();
                break;
            case 4:
                return $this->getStraatnaam();
                break;
            case 5:
                return $this->getHuisnummer();
                break;
            case 6:
                return $this->getHuisnummerToevoeging();
                break;
            case 7:
                return $this->getPostcode();
                break;
            case 8:
                return $this->getPlaats();
                break;
            case 9:
                return $this->getZoeksleutel();
                break;
            case 10:
                return $this->getAgbcodeVanDeInstelling();
                break;
            case 11:
                return $this->getAgbcodeToevoegselLokaties();
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
        if (isset($alreadyDumpedObjects['GsZiccode'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsZiccode'][$this->getPrimaryKey()] = true;
        $keys = GsZiccodePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getInstellingscode(),
            $keys[3] => $this->getNaamVanDeInstelling(),
            $keys[4] => $this->getStraatnaam(),
            $keys[5] => $this->getHuisnummer(),
            $keys[6] => $this->getHuisnummerToevoeging(),
            $keys[7] => $this->getPostcode(),
            $keys[8] => $this->getPlaats(),
            $keys[9] => $this->getZoeksleutel(),
            $keys[10] => $this->getAgbcodeVanDeInstelling(),
            $keys[11] => $this->getAgbcodeToevoegselLokaties(),
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
        $pos = GsZiccodePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setInstellingscode($value);
                break;
            case 3:
                $this->setNaamVanDeInstelling($value);
                break;
            case 4:
                $this->setStraatnaam($value);
                break;
            case 5:
                $this->setHuisnummer($value);
                break;
            case 6:
                $this->setHuisnummerToevoeging($value);
                break;
            case 7:
                $this->setPostcode($value);
                break;
            case 8:
                $this->setPlaats($value);
                break;
            case 9:
                $this->setZoeksleutel($value);
                break;
            case 10:
                $this->setAgbcodeVanDeInstelling($value);
                break;
            case 11:
                $this->setAgbcodeToevoegselLokaties($value);
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
        $keys = GsZiccodePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setInstellingscode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNaamVanDeInstelling($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setStraatnaam($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setHuisnummer($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setHuisnummerToevoeging($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPostcode($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPlaats($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setZoeksleutel($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAgbcodeVanDeInstelling($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAgbcodeToevoegselLokaties($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsZiccodePeer::DATABASE_NAME);

        if ($this->isColumnModified(GsZiccodePeer::BESTANDNUMMER)) $criteria->add(GsZiccodePeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsZiccodePeer::MUTATIEKODE)) $criteria->add(GsZiccodePeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsZiccodePeer::INSTELLINGSCODE)) $criteria->add(GsZiccodePeer::INSTELLINGSCODE, $this->instellingscode);
        if ($this->isColumnModified(GsZiccodePeer::NAAM_VAN_DE_INSTELLING)) $criteria->add(GsZiccodePeer::NAAM_VAN_DE_INSTELLING, $this->naam_van_de_instelling);
        if ($this->isColumnModified(GsZiccodePeer::STRAATNAAM)) $criteria->add(GsZiccodePeer::STRAATNAAM, $this->straatnaam);
        if ($this->isColumnModified(GsZiccodePeer::HUISNUMMER)) $criteria->add(GsZiccodePeer::HUISNUMMER, $this->huisnummer);
        if ($this->isColumnModified(GsZiccodePeer::HUISNUMMER_TOEVOEGING)) $criteria->add(GsZiccodePeer::HUISNUMMER_TOEVOEGING, $this->huisnummer_toevoeging);
        if ($this->isColumnModified(GsZiccodePeer::POSTCODE)) $criteria->add(GsZiccodePeer::POSTCODE, $this->postcode);
        if ($this->isColumnModified(GsZiccodePeer::PLAATS)) $criteria->add(GsZiccodePeer::PLAATS, $this->plaats);
        if ($this->isColumnModified(GsZiccodePeer::ZOEKSLEUTEL)) $criteria->add(GsZiccodePeer::ZOEKSLEUTEL, $this->zoeksleutel);
        if ($this->isColumnModified(GsZiccodePeer::AGBCODE_VAN_DE_INSTELLING)) $criteria->add(GsZiccodePeer::AGBCODE_VAN_DE_INSTELLING, $this->agbcode_van_de_instelling);
        if ($this->isColumnModified(GsZiccodePeer::AGBCODE_TOEVOEGSEL_LOKATIES)) $criteria->add(GsZiccodePeer::AGBCODE_TOEVOEGSEL_LOKATIES, $this->agbcode_toevoegsel_lokaties);

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
        $criteria = new Criteria(GsZiccodePeer::DATABASE_NAME);
        $criteria->add(GsZiccodePeer::INSTELLINGSCODE, $this->instellingscode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getInstellingscode();
    }

    /**
     * Generic method to set the primary key (instellingscode column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setInstellingscode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getInstellingscode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsZiccode (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setNaamVanDeInstelling($this->getNaamVanDeInstelling());
        $copyObj->setStraatnaam($this->getStraatnaam());
        $copyObj->setHuisnummer($this->getHuisnummer());
        $copyObj->setHuisnummerToevoeging($this->getHuisnummerToevoeging());
        $copyObj->setPostcode($this->getPostcode());
        $copyObj->setPlaats($this->getPlaats());
        $copyObj->setZoeksleutel($this->getZoeksleutel());
        $copyObj->setAgbcodeVanDeInstelling($this->getAgbcodeVanDeInstelling());
        $copyObj->setAgbcodeToevoegselLokaties($this->getAgbcodeToevoegselLokaties());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setInstellingscode(NULL); // this is a auto-increment column, so set to default value
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
     * @return GsZiccode Clone of current object.
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
     * @return GsZiccodePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsZiccodePeer();
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
        $this->instellingscode = null;
        $this->naam_van_de_instelling = null;
        $this->straatnaam = null;
        $this->huisnummer = null;
        $this->huisnummer_toevoeging = null;
        $this->postcode = null;
        $this->plaats = null;
        $this->zoeksleutel = null;
        $this->agbcode_van_de_instelling = null;
        $this->agbcode_toevoegsel_lokaties = null;
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
        return (string) $this->exportTo(GsZiccodePeer::DEFAULT_STRING_FORMAT);
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
