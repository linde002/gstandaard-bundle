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
use PharmaIntelligence\GstandaardBundle\Model\GsRubrieken;
use PharmaIntelligence\GstandaardBundle\Model\GsRubriekenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsRubriekenQuery;

abstract class BaseGsRubrieken extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRubriekenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsRubriekenPeer
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
     * The value for the naam_van_het_bestand field.
     * @var        string
     */
    protected $naam_van_het_bestand;

    /**
     * The value for the volgnummer field.
     * @var        int
     */
    protected $volgnummer;

    /**
     * The value for the naam_van_de_rubriek field.
     * @var        string
     */
    protected $naam_van_de_rubriek;

    /**
     * The value for the omschrijving_van_de_rubriek field.
     * @var        string
     */
    protected $omschrijving_van_de_rubriek;

    /**
     * The value for the rubriekscode field.
     * @var        int
     */
    protected $rubriekscode;

    /**
     * The value for the sleutelkode_van_de_rubriek field.
     * @var        string
     */
    protected $sleutelkode_van_de_rubriek;

    /**
     * The value for the type_van_de_rubriek field.
     * @var        string
     */
    protected $type_van_de_rubriek;

    /**
     * The value for the lengte_van_de_rubriek field.
     * @var        int
     */
    protected $lengte_van_de_rubriek;

    /**
     * The value for the aantal_decimalen field.
     * @var        int
     */
    protected $aantal_decimalen;

    /**
     * The value for the opmaak field.
     * @var        string
     */
    protected $opmaak;

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
     * Get the [naam_van_het_bestand] column value.
     *
     * @return string
     */
    public function getNaamVanHetBestand()
    {

        return $this->naam_van_het_bestand;
    }

    /**
     * Get the [volgnummer] column value.
     *
     * @return int
     */
    public function getVolgnummer()
    {

        return $this->volgnummer;
    }

    /**
     * Get the [naam_van_de_rubriek] column value.
     *
     * @return string
     */
    public function getNaamVanDeRubriek()
    {

        return $this->naam_van_de_rubriek;
    }

    /**
     * Get the [omschrijving_van_de_rubriek] column value.
     *
     * @return string
     */
    public function getOmschrijvingVanDeRubriek()
    {

        return $this->omschrijving_van_de_rubriek;
    }

    /**
     * Get the [rubriekscode] column value.
     *
     * @return int
     */
    public function getRubriekscode()
    {

        return $this->rubriekscode;
    }

    /**
     * Get the [sleutelkode_van_de_rubriek] column value.
     *
     * @return string
     */
    public function getSleutelkodeVanDeRubriek()
    {

        return $this->sleutelkode_van_de_rubriek;
    }

    /**
     * Get the [type_van_de_rubriek] column value.
     *
     * @return string
     */
    public function getTypeVanDeRubriek()
    {

        return $this->type_van_de_rubriek;
    }

    /**
     * Get the [lengte_van_de_rubriek] column value.
     *
     * @return int
     */
    public function getLengteVanDeRubriek()
    {

        return $this->lengte_van_de_rubriek;
    }

    /**
     * Get the [aantal_decimalen] column value.
     *
     * @return int
     */
    public function getAantalDecimalen()
    {

        return $this->aantal_decimalen;
    }

    /**
     * Get the [opmaak] column value.
     *
     * @return string
     */
    public function getOpmaak()
    {

        return $this->opmaak;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsRubrieken The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsRubriekenPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsRubrieken The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsRubriekenPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [naam_van_het_bestand] column.
     *
     * @param  string $v new value
     * @return GsRubrieken The current object (for fluent API support)
     */
    public function setNaamVanHetBestand($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->naam_van_het_bestand !== $v) {
            $this->naam_van_het_bestand = $v;
            $this->modifiedColumns[] = GsRubriekenPeer::NAAM_VAN_HET_BESTAND;
        }


        return $this;
    } // setNaamVanHetBestand()

    /**
     * Set the value of [volgnummer] column.
     *
     * @param  int $v new value
     * @return GsRubrieken The current object (for fluent API support)
     */
    public function setVolgnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->volgnummer !== $v) {
            $this->volgnummer = $v;
            $this->modifiedColumns[] = GsRubriekenPeer::VOLGNUMMER;
        }


        return $this;
    } // setVolgnummer()

    /**
     * Set the value of [naam_van_de_rubriek] column.
     *
     * @param  string $v new value
     * @return GsRubrieken The current object (for fluent API support)
     */
    public function setNaamVanDeRubriek($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->naam_van_de_rubriek !== $v) {
            $this->naam_van_de_rubriek = $v;
            $this->modifiedColumns[] = GsRubriekenPeer::NAAM_VAN_DE_RUBRIEK;
        }


        return $this;
    } // setNaamVanDeRubriek()

    /**
     * Set the value of [omschrijving_van_de_rubriek] column.
     *
     * @param  string $v new value
     * @return GsRubrieken The current object (for fluent API support)
     */
    public function setOmschrijvingVanDeRubriek($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->omschrijving_van_de_rubriek !== $v) {
            $this->omschrijving_van_de_rubriek = $v;
            $this->modifiedColumns[] = GsRubriekenPeer::OMSCHRIJVING_VAN_DE_RUBRIEK;
        }


        return $this;
    } // setOmschrijvingVanDeRubriek()

    /**
     * Set the value of [rubriekscode] column.
     *
     * @param  int $v new value
     * @return GsRubrieken The current object (for fluent API support)
     */
    public function setRubriekscode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rubriekscode !== $v) {
            $this->rubriekscode = $v;
            $this->modifiedColumns[] = GsRubriekenPeer::RUBRIEKSCODE;
        }


        return $this;
    } // setRubriekscode()

    /**
     * Set the value of [sleutelkode_van_de_rubriek] column.
     *
     * @param  string $v new value
     * @return GsRubrieken The current object (for fluent API support)
     */
    public function setSleutelkodeVanDeRubriek($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sleutelkode_van_de_rubriek !== $v) {
            $this->sleutelkode_van_de_rubriek = $v;
            $this->modifiedColumns[] = GsRubriekenPeer::SLEUTELKODE_VAN_DE_RUBRIEK;
        }


        return $this;
    } // setSleutelkodeVanDeRubriek()

    /**
     * Set the value of [type_van_de_rubriek] column.
     *
     * @param  string $v new value
     * @return GsRubrieken The current object (for fluent API support)
     */
    public function setTypeVanDeRubriek($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->type_van_de_rubriek !== $v) {
            $this->type_van_de_rubriek = $v;
            $this->modifiedColumns[] = GsRubriekenPeer::TYPE_VAN_DE_RUBRIEK;
        }


        return $this;
    } // setTypeVanDeRubriek()

    /**
     * Set the value of [lengte_van_de_rubriek] column.
     *
     * @param  int $v new value
     * @return GsRubrieken The current object (for fluent API support)
     */
    public function setLengteVanDeRubriek($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lengte_van_de_rubriek !== $v) {
            $this->lengte_van_de_rubriek = $v;
            $this->modifiedColumns[] = GsRubriekenPeer::LENGTE_VAN_DE_RUBRIEK;
        }


        return $this;
    } // setLengteVanDeRubriek()

    /**
     * Set the value of [aantal_decimalen] column.
     *
     * @param  int $v new value
     * @return GsRubrieken The current object (for fluent API support)
     */
    public function setAantalDecimalen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aantal_decimalen !== $v) {
            $this->aantal_decimalen = $v;
            $this->modifiedColumns[] = GsRubriekenPeer::AANTAL_DECIMALEN;
        }


        return $this;
    } // setAantalDecimalen()

    /**
     * Set the value of [opmaak] column.
     *
     * @param  string $v new value
     * @return GsRubrieken The current object (for fluent API support)
     */
    public function setOpmaak($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->opmaak !== $v) {
            $this->opmaak = $v;
            $this->modifiedColumns[] = GsRubriekenPeer::OPMAAK;
        }


        return $this;
    } // setOpmaak()

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
            $this->naam_van_het_bestand = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->volgnummer = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->naam_van_de_rubriek = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->omschrijving_van_de_rubriek = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->rubriekscode = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->sleutelkode_van_de_rubriek = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->type_van_de_rubriek = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->lengte_van_de_rubriek = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->aantal_decimalen = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->opmaak = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = GsRubriekenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsRubrieken object", $e);
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
            $con = Propel::getConnection(GsRubriekenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsRubriekenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsRubriekenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsRubriekenQuery::create()
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
            $con = Propel::getConnection(GsRubriekenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsRubriekenPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsRubriekenPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsRubriekenPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsRubriekenPeer::NAAM_VAN_HET_BESTAND)) {
            $modifiedColumns[':p' . $index++]  = '`naam_van_het_bestand`';
        }
        if ($this->isColumnModified(GsRubriekenPeer::VOLGNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`volgnummer`';
        }
        if ($this->isColumnModified(GsRubriekenPeer::NAAM_VAN_DE_RUBRIEK)) {
            $modifiedColumns[':p' . $index++]  = '`naam_van_de_rubriek`';
        }
        if ($this->isColumnModified(GsRubriekenPeer::OMSCHRIJVING_VAN_DE_RUBRIEK)) {
            $modifiedColumns[':p' . $index++]  = '`omschrijving_van_de_rubriek`';
        }
        if ($this->isColumnModified(GsRubriekenPeer::RUBRIEKSCODE)) {
            $modifiedColumns[':p' . $index++]  = '`rubriekscode`';
        }
        if ($this->isColumnModified(GsRubriekenPeer::SLEUTELKODE_VAN_DE_RUBRIEK)) {
            $modifiedColumns[':p' . $index++]  = '`sleutelkode_van_de_rubriek`';
        }
        if ($this->isColumnModified(GsRubriekenPeer::TYPE_VAN_DE_RUBRIEK)) {
            $modifiedColumns[':p' . $index++]  = '`type_van_de_rubriek`';
        }
        if ($this->isColumnModified(GsRubriekenPeer::LENGTE_VAN_DE_RUBRIEK)) {
            $modifiedColumns[':p' . $index++]  = '`lengte_van_de_rubriek`';
        }
        if ($this->isColumnModified(GsRubriekenPeer::AANTAL_DECIMALEN)) {
            $modifiedColumns[':p' . $index++]  = '`aantal_decimalen`';
        }
        if ($this->isColumnModified(GsRubriekenPeer::OPMAAK)) {
            $modifiedColumns[':p' . $index++]  = '`opmaak`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_rubrieken` (%s) VALUES (%s)',
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
                    case '`naam_van_het_bestand`':
                        $stmt->bindValue($identifier, $this->naam_van_het_bestand, PDO::PARAM_STR);
                        break;
                    case '`volgnummer`':
                        $stmt->bindValue($identifier, $this->volgnummer, PDO::PARAM_INT);
                        break;
                    case '`naam_van_de_rubriek`':
                        $stmt->bindValue($identifier, $this->naam_van_de_rubriek, PDO::PARAM_STR);
                        break;
                    case '`omschrijving_van_de_rubriek`':
                        $stmt->bindValue($identifier, $this->omschrijving_van_de_rubriek, PDO::PARAM_STR);
                        break;
                    case '`rubriekscode`':
                        $stmt->bindValue($identifier, $this->rubriekscode, PDO::PARAM_INT);
                        break;
                    case '`sleutelkode_van_de_rubriek`':
                        $stmt->bindValue($identifier, $this->sleutelkode_van_de_rubriek, PDO::PARAM_STR);
                        break;
                    case '`type_van_de_rubriek`':
                        $stmt->bindValue($identifier, $this->type_van_de_rubriek, PDO::PARAM_STR);
                        break;
                    case '`lengte_van_de_rubriek`':
                        $stmt->bindValue($identifier, $this->lengte_van_de_rubriek, PDO::PARAM_INT);
                        break;
                    case '`aantal_decimalen`':
                        $stmt->bindValue($identifier, $this->aantal_decimalen, PDO::PARAM_INT);
                        break;
                    case '`opmaak`':
                        $stmt->bindValue($identifier, $this->opmaak, PDO::PARAM_STR);
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


            if (($retval = GsRubriekenPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsRubriekenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getNaamVanHetBestand();
                break;
            case 3:
                return $this->getVolgnummer();
                break;
            case 4:
                return $this->getNaamVanDeRubriek();
                break;
            case 5:
                return $this->getOmschrijvingVanDeRubriek();
                break;
            case 6:
                return $this->getRubriekscode();
                break;
            case 7:
                return $this->getSleutelkodeVanDeRubriek();
                break;
            case 8:
                return $this->getTypeVanDeRubriek();
                break;
            case 9:
                return $this->getLengteVanDeRubriek();
                break;
            case 10:
                return $this->getAantalDecimalen();
                break;
            case 11:
                return $this->getOpmaak();
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
        if (isset($alreadyDumpedObjects['GsRubrieken'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsRubrieken'][serialize($this->getPrimaryKey())] = true;
        $keys = GsRubriekenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getNaamVanHetBestand(),
            $keys[3] => $this->getVolgnummer(),
            $keys[4] => $this->getNaamVanDeRubriek(),
            $keys[5] => $this->getOmschrijvingVanDeRubriek(),
            $keys[6] => $this->getRubriekscode(),
            $keys[7] => $this->getSleutelkodeVanDeRubriek(),
            $keys[8] => $this->getTypeVanDeRubriek(),
            $keys[9] => $this->getLengteVanDeRubriek(),
            $keys[10] => $this->getAantalDecimalen(),
            $keys[11] => $this->getOpmaak(),
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
        $pos = GsRubriekenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setNaamVanHetBestand($value);
                break;
            case 3:
                $this->setVolgnummer($value);
                break;
            case 4:
                $this->setNaamVanDeRubriek($value);
                break;
            case 5:
                $this->setOmschrijvingVanDeRubriek($value);
                break;
            case 6:
                $this->setRubriekscode($value);
                break;
            case 7:
                $this->setSleutelkodeVanDeRubriek($value);
                break;
            case 8:
                $this->setTypeVanDeRubriek($value);
                break;
            case 9:
                $this->setLengteVanDeRubriek($value);
                break;
            case 10:
                $this->setAantalDecimalen($value);
                break;
            case 11:
                $this->setOpmaak($value);
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
        $keys = GsRubriekenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNaamVanHetBestand($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setVolgnummer($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNaamVanDeRubriek($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOmschrijvingVanDeRubriek($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRubriekscode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSleutelkodeVanDeRubriek($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTypeVanDeRubriek($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLengteVanDeRubriek($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAantalDecimalen($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setOpmaak($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsRubriekenPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsRubriekenPeer::BESTANDNUMMER)) $criteria->add(GsRubriekenPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsRubriekenPeer::MUTATIEKODE)) $criteria->add(GsRubriekenPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsRubriekenPeer::NAAM_VAN_HET_BESTAND)) $criteria->add(GsRubriekenPeer::NAAM_VAN_HET_BESTAND, $this->naam_van_het_bestand);
        if ($this->isColumnModified(GsRubriekenPeer::VOLGNUMMER)) $criteria->add(GsRubriekenPeer::VOLGNUMMER, $this->volgnummer);
        if ($this->isColumnModified(GsRubriekenPeer::NAAM_VAN_DE_RUBRIEK)) $criteria->add(GsRubriekenPeer::NAAM_VAN_DE_RUBRIEK, $this->naam_van_de_rubriek);
        if ($this->isColumnModified(GsRubriekenPeer::OMSCHRIJVING_VAN_DE_RUBRIEK)) $criteria->add(GsRubriekenPeer::OMSCHRIJVING_VAN_DE_RUBRIEK, $this->omschrijving_van_de_rubriek);
        if ($this->isColumnModified(GsRubriekenPeer::RUBRIEKSCODE)) $criteria->add(GsRubriekenPeer::RUBRIEKSCODE, $this->rubriekscode);
        if ($this->isColumnModified(GsRubriekenPeer::SLEUTELKODE_VAN_DE_RUBRIEK)) $criteria->add(GsRubriekenPeer::SLEUTELKODE_VAN_DE_RUBRIEK, $this->sleutelkode_van_de_rubriek);
        if ($this->isColumnModified(GsRubriekenPeer::TYPE_VAN_DE_RUBRIEK)) $criteria->add(GsRubriekenPeer::TYPE_VAN_DE_RUBRIEK, $this->type_van_de_rubriek);
        if ($this->isColumnModified(GsRubriekenPeer::LENGTE_VAN_DE_RUBRIEK)) $criteria->add(GsRubriekenPeer::LENGTE_VAN_DE_RUBRIEK, $this->lengte_van_de_rubriek);
        if ($this->isColumnModified(GsRubriekenPeer::AANTAL_DECIMALEN)) $criteria->add(GsRubriekenPeer::AANTAL_DECIMALEN, $this->aantal_decimalen);
        if ($this->isColumnModified(GsRubriekenPeer::OPMAAK)) $criteria->add(GsRubriekenPeer::OPMAAK, $this->opmaak);

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
        $criteria = new Criteria(GsRubriekenPeer::DATABASE_NAME);
        $criteria->add(GsRubriekenPeer::NAAM_VAN_HET_BESTAND, $this->naam_van_het_bestand);
        $criteria->add(GsRubriekenPeer::VOLGNUMMER, $this->volgnummer);

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
        $pks[0] = $this->getNaamVanHetBestand();
        $pks[1] = $this->getVolgnummer();

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
        $this->setNaamVanHetBestand($keys[0]);
        $this->setVolgnummer($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getNaamVanHetBestand()) && (null === $this->getVolgnummer());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsRubrieken (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setNaamVanHetBestand($this->getNaamVanHetBestand());
        $copyObj->setVolgnummer($this->getVolgnummer());
        $copyObj->setNaamVanDeRubriek($this->getNaamVanDeRubriek());
        $copyObj->setOmschrijvingVanDeRubriek($this->getOmschrijvingVanDeRubriek());
        $copyObj->setRubriekscode($this->getRubriekscode());
        $copyObj->setSleutelkodeVanDeRubriek($this->getSleutelkodeVanDeRubriek());
        $copyObj->setTypeVanDeRubriek($this->getTypeVanDeRubriek());
        $copyObj->setLengteVanDeRubriek($this->getLengteVanDeRubriek());
        $copyObj->setAantalDecimalen($this->getAantalDecimalen());
        $copyObj->setOpmaak($this->getOpmaak());
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
     * @return GsRubrieken Clone of current object.
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
     * @return GsRubriekenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsRubriekenPeer();
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
        $this->naam_van_het_bestand = null;
        $this->volgnummer = null;
        $this->naam_van_de_rubriek = null;
        $this->omschrijving_van_de_rubriek = null;
        $this->rubriekscode = null;
        $this->sleutelkode_van_de_rubriek = null;
        $this->type_van_de_rubriek = null;
        $this->lengte_van_de_rubriek = null;
        $this->aantal_decimalen = null;
        $this->opmaak = null;
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
        return (string) $this->exportTo(GsRubriekenPeer::DEFAULT_STRING_FORMAT);
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
