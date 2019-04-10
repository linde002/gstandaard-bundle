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
use PharmaIntelligence\GstandaardBundle\Model\GsCategorieen;
use PharmaIntelligence\GstandaardBundle\Model\GsCategorieenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsCategorieenQuery;

abstract class BaseGsCategorieen extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsCategorieenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsCategorieenPeer
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
     * The value for the dosiscategorienummer field.
     * @var        int
     */
    protected $dosiscategorienummer;

    /**
     * The value for the identificerend_recordnummer field.
     * @var        int
     */
    protected $identificerend_recordnummer;

    /**
     * The value for the leeftijd_in_maanden_vanaf field.
     * @var        string
     */
    protected $leeftijd_in_maanden_vanaf;

    /**
     * The value for the leeftijd_in_maanden_tot field.
     * @var        string
     */
    protected $leeftijd_in_maanden_tot;

    /**
     * The value for the gewicht_in_kg_vanaf field.
     * @var        string
     */
    protected $gewicht_in_kg_vanaf;

    /**
     * The value for the gewicht_in_kg_tot field.
     * @var        string
     */
    protected $gewicht_in_kg_tot;

    /**
     * The value for the lichaamsoppervlakte_in_m2_vanaf field.
     * @var        string
     */
    protected $lichaamsoppervlakte_in_m2_vanaf;

    /**
     * The value for the lichaamsoppervlakte_in_m2_tot field.
     * @var        string
     */
    protected $lichaamsoppervlakte_in_m2_tot;

    /**
     * The value for the frequentie_aantal field.
     * @var        string
     */
    protected $frequentie_aantal;

    /**
     * The value for the frequentie_tijdseenheid field.
     * @var        int
     */
    protected $frequentie_tijdseenheid;

    /**
     * The value for the basisset_voor_denekamp_berekening field.
     * @var        int
     */
    protected $basisset_voor_denekamp_berekening;

    /**
     * The value for the dosisnummer field.
     * @var        int
     */
    protected $dosisnummer;

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
     * Get the [dosiscategorienummer] column value.
     *
     * @return int
     */
    public function getDosiscategorienummer()
    {

        return $this->dosiscategorienummer;
    }

    /**
     * Get the [identificerend_recordnummer] column value.
     *
     * @return int
     */
    public function getIdentificerendRecordnummer()
    {

        return $this->identificerend_recordnummer;
    }

    /**
     * Get the [leeftijd_in_maanden_vanaf] column value.
     *
     * @return string
     */
    public function getLeeftijdInMaandenVanaf()
    {

        return $this->leeftijd_in_maanden_vanaf;
    }

    /**
     * Get the [leeftijd_in_maanden_tot] column value.
     *
     * @return string
     */
    public function getLeeftijdInMaandenTot()
    {

        return $this->leeftijd_in_maanden_tot;
    }

    /**
     * Get the [gewicht_in_kg_vanaf] column value.
     *
     * @return string
     */
    public function getGewichtInKgVanaf()
    {

        return $this->gewicht_in_kg_vanaf;
    }

    /**
     * Get the [gewicht_in_kg_tot] column value.
     *
     * @return string
     */
    public function getGewichtInKgTot()
    {

        return $this->gewicht_in_kg_tot;
    }

    /**
     * Get the [lichaamsoppervlakte_in_m2_vanaf] column value.
     *
     * @return string
     */
    public function getLichaamsoppervlakteInM2Vanaf()
    {

        return $this->lichaamsoppervlakte_in_m2_vanaf;
    }

    /**
     * Get the [lichaamsoppervlakte_in_m2_tot] column value.
     *
     * @return string
     */
    public function getLichaamsoppervlakteInM2Tot()
    {

        return $this->lichaamsoppervlakte_in_m2_tot;
    }

    /**
     * Get the [frequentie_aantal] column value.
     *
     * @return string
     */
    public function getFrequentieAantal()
    {

        return $this->frequentie_aantal;
    }

    /**
     * Get the [frequentie_tijdseenheid] column value.
     *
     * @return int
     */
    public function getFrequentieTijdseenheid()
    {

        return $this->frequentie_tijdseenheid;
    }

    /**
     * Get the [basisset_voor_denekamp_berekening] column value.
     *
     * @return int
     */
    public function getBasissetVoorDenekampBerekening()
    {

        return $this->basisset_voor_denekamp_berekening;
    }

    /**
     * Get the [dosisnummer] column value.
     *
     * @return int
     */
    public function getDosisnummer()
    {

        return $this->dosisnummer;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsCategorieen The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsCategorieenPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsCategorieen The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsCategorieenPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [dosiscategorienummer] column.
     *
     * @param  int $v new value
     * @return GsCategorieen The current object (for fluent API support)
     */
    public function setDosiscategorienummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dosiscategorienummer !== $v) {
            $this->dosiscategorienummer = $v;
            $this->modifiedColumns[] = GsCategorieenPeer::DOSISCATEGORIENUMMER;
        }


        return $this;
    } // setDosiscategorienummer()

    /**
     * Set the value of [identificerend_recordnummer] column.
     *
     * @param  int $v new value
     * @return GsCategorieen The current object (for fluent API support)
     */
    public function setIdentificerendRecordnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->identificerend_recordnummer !== $v) {
            $this->identificerend_recordnummer = $v;
            $this->modifiedColumns[] = GsCategorieenPeer::IDENTIFICEREND_RECORDNUMMER;
        }


        return $this;
    } // setIdentificerendRecordnummer()

    /**
     * Set the value of [leeftijd_in_maanden_vanaf] column.
     *
     * @param  string $v new value
     * @return GsCategorieen The current object (for fluent API support)
     */
    public function setLeeftijdInMaandenVanaf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->leeftijd_in_maanden_vanaf !== $v) {
            $this->leeftijd_in_maanden_vanaf = $v;
            $this->modifiedColumns[] = GsCategorieenPeer::LEEFTIJD_IN_MAANDEN_VANAF;
        }


        return $this;
    } // setLeeftijdInMaandenVanaf()

    /**
     * Set the value of [leeftijd_in_maanden_tot] column.
     *
     * @param  string $v new value
     * @return GsCategorieen The current object (for fluent API support)
     */
    public function setLeeftijdInMaandenTot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->leeftijd_in_maanden_tot !== $v) {
            $this->leeftijd_in_maanden_tot = $v;
            $this->modifiedColumns[] = GsCategorieenPeer::LEEFTIJD_IN_MAANDEN_TOT;
        }


        return $this;
    } // setLeeftijdInMaandenTot()

    /**
     * Set the value of [gewicht_in_kg_vanaf] column.
     *
     * @param  string $v new value
     * @return GsCategorieen The current object (for fluent API support)
     */
    public function setGewichtInKgVanaf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gewicht_in_kg_vanaf !== $v) {
            $this->gewicht_in_kg_vanaf = $v;
            $this->modifiedColumns[] = GsCategorieenPeer::GEWICHT_IN_KG_VANAF;
        }


        return $this;
    } // setGewichtInKgVanaf()

    /**
     * Set the value of [gewicht_in_kg_tot] column.
     *
     * @param  string $v new value
     * @return GsCategorieen The current object (for fluent API support)
     */
    public function setGewichtInKgTot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gewicht_in_kg_tot !== $v) {
            $this->gewicht_in_kg_tot = $v;
            $this->modifiedColumns[] = GsCategorieenPeer::GEWICHT_IN_KG_TOT;
        }


        return $this;
    } // setGewichtInKgTot()

    /**
     * Set the value of [lichaamsoppervlakte_in_m2_vanaf] column.
     *
     * @param  string $v new value
     * @return GsCategorieen The current object (for fluent API support)
     */
    public function setLichaamsoppervlakteInM2Vanaf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lichaamsoppervlakte_in_m2_vanaf !== $v) {
            $this->lichaamsoppervlakte_in_m2_vanaf = $v;
            $this->modifiedColumns[] = GsCategorieenPeer::LICHAAMSOPPERVLAKTE_IN_M2_VANAF;
        }


        return $this;
    } // setLichaamsoppervlakteInM2Vanaf()

    /**
     * Set the value of [lichaamsoppervlakte_in_m2_tot] column.
     *
     * @param  string $v new value
     * @return GsCategorieen The current object (for fluent API support)
     */
    public function setLichaamsoppervlakteInM2Tot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lichaamsoppervlakte_in_m2_tot !== $v) {
            $this->lichaamsoppervlakte_in_m2_tot = $v;
            $this->modifiedColumns[] = GsCategorieenPeer::LICHAAMSOPPERVLAKTE_IN_M2_TOT;
        }


        return $this;
    } // setLichaamsoppervlakteInM2Tot()

    /**
     * Set the value of [frequentie_aantal] column.
     *
     * @param  string $v new value
     * @return GsCategorieen The current object (for fluent API support)
     */
    public function setFrequentieAantal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->frequentie_aantal !== $v) {
            $this->frequentie_aantal = $v;
            $this->modifiedColumns[] = GsCategorieenPeer::FREQUENTIE_AANTAL;
        }


        return $this;
    } // setFrequentieAantal()

    /**
     * Set the value of [frequentie_tijdseenheid] column.
     *
     * @param  int $v new value
     * @return GsCategorieen The current object (for fluent API support)
     */
    public function setFrequentieTijdseenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->frequentie_tijdseenheid !== $v) {
            $this->frequentie_tijdseenheid = $v;
            $this->modifiedColumns[] = GsCategorieenPeer::FREQUENTIE_TIJDSEENHEID;
        }


        return $this;
    } // setFrequentieTijdseenheid()

    /**
     * Set the value of [basisset_voor_denekamp_berekening] column.
     *
     * @param  int $v new value
     * @return GsCategorieen The current object (for fluent API support)
     */
    public function setBasissetVoorDenekampBerekening($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->basisset_voor_denekamp_berekening !== $v) {
            $this->basisset_voor_denekamp_berekening = $v;
            $this->modifiedColumns[] = GsCategorieenPeer::BASISSET_VOOR_DENEKAMP_BEREKENING;
        }


        return $this;
    } // setBasissetVoorDenekampBerekening()

    /**
     * Set the value of [dosisnummer] column.
     *
     * @param  int $v new value
     * @return GsCategorieen The current object (for fluent API support)
     */
    public function setDosisnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dosisnummer !== $v) {
            $this->dosisnummer = $v;
            $this->modifiedColumns[] = GsCategorieenPeer::DOSISNUMMER;
        }


        return $this;
    } // setDosisnummer()

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
            $this->dosiscategorienummer = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->identificerend_recordnummer = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->leeftijd_in_maanden_vanaf = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->leeftijd_in_maanden_tot = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->gewicht_in_kg_vanaf = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->gewicht_in_kg_tot = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->lichaamsoppervlakte_in_m2_vanaf = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->lichaamsoppervlakte_in_m2_tot = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->frequentie_aantal = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->frequentie_tijdseenheid = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->basisset_voor_denekamp_berekening = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->dosisnummer = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = GsCategorieenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsCategorieen object", $e);
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
            $con = Propel::getConnection(GsCategorieenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsCategorieenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsCategorieenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsCategorieenQuery::create()
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
            $con = Propel::getConnection(GsCategorieenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsCategorieenPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsCategorieenPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsCategorieenPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsCategorieenPeer::DOSISCATEGORIENUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`dosiscategorienummer`';
        }
        if ($this->isColumnModified(GsCategorieenPeer::IDENTIFICEREND_RECORDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`identificerend_recordnummer`';
        }
        if ($this->isColumnModified(GsCategorieenPeer::LEEFTIJD_IN_MAANDEN_VANAF)) {
            $modifiedColumns[':p' . $index++]  = '`leeftijd_in_maanden_vanaf`';
        }
        if ($this->isColumnModified(GsCategorieenPeer::LEEFTIJD_IN_MAANDEN_TOT)) {
            $modifiedColumns[':p' . $index++]  = '`leeftijd_in_maanden_tot`';
        }
        if ($this->isColumnModified(GsCategorieenPeer::GEWICHT_IN_KG_VANAF)) {
            $modifiedColumns[':p' . $index++]  = '`gewicht_in_kg_vanaf`';
        }
        if ($this->isColumnModified(GsCategorieenPeer::GEWICHT_IN_KG_TOT)) {
            $modifiedColumns[':p' . $index++]  = '`gewicht_in_kg_tot`';
        }
        if ($this->isColumnModified(GsCategorieenPeer::LICHAAMSOPPERVLAKTE_IN_M2_VANAF)) {
            $modifiedColumns[':p' . $index++]  = '`lichaamsoppervlakte_in_m2_vanaf`';
        }
        if ($this->isColumnModified(GsCategorieenPeer::LICHAAMSOPPERVLAKTE_IN_M2_TOT)) {
            $modifiedColumns[':p' . $index++]  = '`lichaamsoppervlakte_in_m2_tot`';
        }
        if ($this->isColumnModified(GsCategorieenPeer::FREQUENTIE_AANTAL)) {
            $modifiedColumns[':p' . $index++]  = '`frequentie_aantal`';
        }
        if ($this->isColumnModified(GsCategorieenPeer::FREQUENTIE_TIJDSEENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`frequentie_tijdseenheid`';
        }
        if ($this->isColumnModified(GsCategorieenPeer::BASISSET_VOOR_DENEKAMP_BEREKENING)) {
            $modifiedColumns[':p' . $index++]  = '`basisset_voor_denekamp_berekening`';
        }
        if ($this->isColumnModified(GsCategorieenPeer::DOSISNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`dosisnummer`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_categorieen` (%s) VALUES (%s)',
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
                    case '`dosiscategorienummer`':
                        $stmt->bindValue($identifier, $this->dosiscategorienummer, PDO::PARAM_INT);
                        break;
                    case '`identificerend_recordnummer`':
                        $stmt->bindValue($identifier, $this->identificerend_recordnummer, PDO::PARAM_INT);
                        break;
                    case '`leeftijd_in_maanden_vanaf`':
                        $stmt->bindValue($identifier, $this->leeftijd_in_maanden_vanaf, PDO::PARAM_STR);
                        break;
                    case '`leeftijd_in_maanden_tot`':
                        $stmt->bindValue($identifier, $this->leeftijd_in_maanden_tot, PDO::PARAM_STR);
                        break;
                    case '`gewicht_in_kg_vanaf`':
                        $stmt->bindValue($identifier, $this->gewicht_in_kg_vanaf, PDO::PARAM_STR);
                        break;
                    case '`gewicht_in_kg_tot`':
                        $stmt->bindValue($identifier, $this->gewicht_in_kg_tot, PDO::PARAM_STR);
                        break;
                    case '`lichaamsoppervlakte_in_m2_vanaf`':
                        $stmt->bindValue($identifier, $this->lichaamsoppervlakte_in_m2_vanaf, PDO::PARAM_STR);
                        break;
                    case '`lichaamsoppervlakte_in_m2_tot`':
                        $stmt->bindValue($identifier, $this->lichaamsoppervlakte_in_m2_tot, PDO::PARAM_STR);
                        break;
                    case '`frequentie_aantal`':
                        $stmt->bindValue($identifier, $this->frequentie_aantal, PDO::PARAM_STR);
                        break;
                    case '`frequentie_tijdseenheid`':
                        $stmt->bindValue($identifier, $this->frequentie_tijdseenheid, PDO::PARAM_INT);
                        break;
                    case '`basisset_voor_denekamp_berekening`':
                        $stmt->bindValue($identifier, $this->basisset_voor_denekamp_berekening, PDO::PARAM_INT);
                        break;
                    case '`dosisnummer`':
                        $stmt->bindValue($identifier, $this->dosisnummer, PDO::PARAM_INT);
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


            if (($retval = GsCategorieenPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsCategorieenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getDosiscategorienummer();
                break;
            case 3:
                return $this->getIdentificerendRecordnummer();
                break;
            case 4:
                return $this->getLeeftijdInMaandenVanaf();
                break;
            case 5:
                return $this->getLeeftijdInMaandenTot();
                break;
            case 6:
                return $this->getGewichtInKgVanaf();
                break;
            case 7:
                return $this->getGewichtInKgTot();
                break;
            case 8:
                return $this->getLichaamsoppervlakteInM2Vanaf();
                break;
            case 9:
                return $this->getLichaamsoppervlakteInM2Tot();
                break;
            case 10:
                return $this->getFrequentieAantal();
                break;
            case 11:
                return $this->getFrequentieTijdseenheid();
                break;
            case 12:
                return $this->getBasissetVoorDenekampBerekening();
                break;
            case 13:
                return $this->getDosisnummer();
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
        if (isset($alreadyDumpedObjects['GsCategorieen'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsCategorieen'][serialize($this->getPrimaryKey())] = true;
        $keys = GsCategorieenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getDosiscategorienummer(),
            $keys[3] => $this->getIdentificerendRecordnummer(),
            $keys[4] => $this->getLeeftijdInMaandenVanaf(),
            $keys[5] => $this->getLeeftijdInMaandenTot(),
            $keys[6] => $this->getGewichtInKgVanaf(),
            $keys[7] => $this->getGewichtInKgTot(),
            $keys[8] => $this->getLichaamsoppervlakteInM2Vanaf(),
            $keys[9] => $this->getLichaamsoppervlakteInM2Tot(),
            $keys[10] => $this->getFrequentieAantal(),
            $keys[11] => $this->getFrequentieTijdseenheid(),
            $keys[12] => $this->getBasissetVoorDenekampBerekening(),
            $keys[13] => $this->getDosisnummer(),
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
        $pos = GsCategorieenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setDosiscategorienummer($value);
                break;
            case 3:
                $this->setIdentificerendRecordnummer($value);
                break;
            case 4:
                $this->setLeeftijdInMaandenVanaf($value);
                break;
            case 5:
                $this->setLeeftijdInMaandenTot($value);
                break;
            case 6:
                $this->setGewichtInKgVanaf($value);
                break;
            case 7:
                $this->setGewichtInKgTot($value);
                break;
            case 8:
                $this->setLichaamsoppervlakteInM2Vanaf($value);
                break;
            case 9:
                $this->setLichaamsoppervlakteInM2Tot($value);
                break;
            case 10:
                $this->setFrequentieAantal($value);
                break;
            case 11:
                $this->setFrequentieTijdseenheid($value);
                break;
            case 12:
                $this->setBasissetVoorDenekampBerekening($value);
                break;
            case 13:
                $this->setDosisnummer($value);
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
        $keys = GsCategorieenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDosiscategorienummer($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdentificerendRecordnummer($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLeeftijdInMaandenVanaf($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLeeftijdInMaandenTot($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setGewichtInKgVanaf($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setGewichtInKgTot($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLichaamsoppervlakteInM2Vanaf($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLichaamsoppervlakteInM2Tot($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFrequentieAantal($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setFrequentieTijdseenheid($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setBasissetVoorDenekampBerekening($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDosisnummer($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsCategorieenPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsCategorieenPeer::BESTANDNUMMER)) $criteria->add(GsCategorieenPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsCategorieenPeer::MUTATIEKODE)) $criteria->add(GsCategorieenPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsCategorieenPeer::DOSISCATEGORIENUMMER)) $criteria->add(GsCategorieenPeer::DOSISCATEGORIENUMMER, $this->dosiscategorienummer);
        if ($this->isColumnModified(GsCategorieenPeer::IDENTIFICEREND_RECORDNUMMER)) $criteria->add(GsCategorieenPeer::IDENTIFICEREND_RECORDNUMMER, $this->identificerend_recordnummer);
        if ($this->isColumnModified(GsCategorieenPeer::LEEFTIJD_IN_MAANDEN_VANAF)) $criteria->add(GsCategorieenPeer::LEEFTIJD_IN_MAANDEN_VANAF, $this->leeftijd_in_maanden_vanaf);
        if ($this->isColumnModified(GsCategorieenPeer::LEEFTIJD_IN_MAANDEN_TOT)) $criteria->add(GsCategorieenPeer::LEEFTIJD_IN_MAANDEN_TOT, $this->leeftijd_in_maanden_tot);
        if ($this->isColumnModified(GsCategorieenPeer::GEWICHT_IN_KG_VANAF)) $criteria->add(GsCategorieenPeer::GEWICHT_IN_KG_VANAF, $this->gewicht_in_kg_vanaf);
        if ($this->isColumnModified(GsCategorieenPeer::GEWICHT_IN_KG_TOT)) $criteria->add(GsCategorieenPeer::GEWICHT_IN_KG_TOT, $this->gewicht_in_kg_tot);
        if ($this->isColumnModified(GsCategorieenPeer::LICHAAMSOPPERVLAKTE_IN_M2_VANAF)) $criteria->add(GsCategorieenPeer::LICHAAMSOPPERVLAKTE_IN_M2_VANAF, $this->lichaamsoppervlakte_in_m2_vanaf);
        if ($this->isColumnModified(GsCategorieenPeer::LICHAAMSOPPERVLAKTE_IN_M2_TOT)) $criteria->add(GsCategorieenPeer::LICHAAMSOPPERVLAKTE_IN_M2_TOT, $this->lichaamsoppervlakte_in_m2_tot);
        if ($this->isColumnModified(GsCategorieenPeer::FREQUENTIE_AANTAL)) $criteria->add(GsCategorieenPeer::FREQUENTIE_AANTAL, $this->frequentie_aantal);
        if ($this->isColumnModified(GsCategorieenPeer::FREQUENTIE_TIJDSEENHEID)) $criteria->add(GsCategorieenPeer::FREQUENTIE_TIJDSEENHEID, $this->frequentie_tijdseenheid);
        if ($this->isColumnModified(GsCategorieenPeer::BASISSET_VOOR_DENEKAMP_BEREKENING)) $criteria->add(GsCategorieenPeer::BASISSET_VOOR_DENEKAMP_BEREKENING, $this->basisset_voor_denekamp_berekening);
        if ($this->isColumnModified(GsCategorieenPeer::DOSISNUMMER)) $criteria->add(GsCategorieenPeer::DOSISNUMMER, $this->dosisnummer);

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
        $criteria = new Criteria(GsCategorieenPeer::DATABASE_NAME);
        $criteria->add(GsCategorieenPeer::DOSISCATEGORIENUMMER, $this->dosiscategorienummer);
        $criteria->add(GsCategorieenPeer::IDENTIFICEREND_RECORDNUMMER, $this->identificerend_recordnummer);

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
        $pks[0] = $this->getDosiscategorienummer();
        $pks[1] = $this->getIdentificerendRecordnummer();

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
        $this->setDosiscategorienummer($keys[0]);
        $this->setIdentificerendRecordnummer($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getDosiscategorienummer()) && (null === $this->getIdentificerendRecordnummer());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsCategorieen (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setDosiscategorienummer($this->getDosiscategorienummer());
        $copyObj->setIdentificerendRecordnummer($this->getIdentificerendRecordnummer());
        $copyObj->setLeeftijdInMaandenVanaf($this->getLeeftijdInMaandenVanaf());
        $copyObj->setLeeftijdInMaandenTot($this->getLeeftijdInMaandenTot());
        $copyObj->setGewichtInKgVanaf($this->getGewichtInKgVanaf());
        $copyObj->setGewichtInKgTot($this->getGewichtInKgTot());
        $copyObj->setLichaamsoppervlakteInM2Vanaf($this->getLichaamsoppervlakteInM2Vanaf());
        $copyObj->setLichaamsoppervlakteInM2Tot($this->getLichaamsoppervlakteInM2Tot());
        $copyObj->setFrequentieAantal($this->getFrequentieAantal());
        $copyObj->setFrequentieTijdseenheid($this->getFrequentieTijdseenheid());
        $copyObj->setBasissetVoorDenekampBerekening($this->getBasissetVoorDenekampBerekening());
        $copyObj->setDosisnummer($this->getDosisnummer());
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
     * @return GsCategorieen Clone of current object.
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
     * @return GsCategorieenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsCategorieenPeer();
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
        $this->dosiscategorienummer = null;
        $this->identificerend_recordnummer = null;
        $this->leeftijd_in_maanden_vanaf = null;
        $this->leeftijd_in_maanden_tot = null;
        $this->gewicht_in_kg_vanaf = null;
        $this->gewicht_in_kg_tot = null;
        $this->lichaamsoppervlakte_in_m2_vanaf = null;
        $this->lichaamsoppervlakte_in_m2_tot = null;
        $this->frequentie_aantal = null;
        $this->frequentie_tijdseenheid = null;
        $this->basisset_voor_denekamp_berekening = null;
        $this->dosisnummer = null;
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
        return (string) $this->exportTo(GsCategorieenPeer::DEFAULT_STRING_FORMAT);
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
