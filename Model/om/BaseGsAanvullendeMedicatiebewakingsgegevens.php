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
use PharmaIntelligence\GstandaardBundle\Model\GsAanvullendeMedicatiebewakingsgegevens;
use PharmaIntelligence\GstandaardBundle\Model\GsAanvullendeMedicatiebewakingsgegevensPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsAanvullendeMedicatiebewakingsgegevensQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery;

abstract class BaseGsAanvullendeMedicatiebewakingsgegevens extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAanvullendeMedicatiebewakingsgegevensPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsAanvullendeMedicatiebewakingsgegevensPeer
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
     * The value for the medicatiebewaking_identificerende_code field.
     * @var        int
     */
    protected $medicatiebewaking_identificerende_code;

    /**
     * The value for the thesaurusverwijzing_aanvullende_voorwaarde field.
     * @var        int
     */
    protected $thesaurusverwijzing_aanvullende_voorwaarde;

    /**
     * The value for the medicatiebewaking_aanvullende_voorwaarde field.
     * @var        int
     */
    protected $medicatiebewaking_aanvullende_voorwaarde;

    /**
     * The value for the codering_waarde_1_alfanumeriek field.
     * @var        string
     */
    protected $codering_waarde_1_alfanumeriek;

    /**
     * The value for the codering_waarde_2_numeriek field.
     * @var        int
     */
    protected $codering_waarde_2_numeriek;

    /**
     * The value for the codering_waarde_3_numeriek field.
     * @var        int
     */
    protected $codering_waarde_3_numeriek;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aBewakingssoortOmschrijving;

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
     * Get the [medicatiebewaking_identificerende_code] column value.
     *
     * @return int
     */
    public function getMedicatiebewakingIdentificerendeCode()
    {

        return $this->medicatiebewaking_identificerende_code;
    }

    /**
     * Get the [thesaurusverwijzing_aanvullende_voorwaarde] column value.
     *
     * @return int
     */
    public function getThesaurusverwijzingAanvullendeVoorwaarde()
    {

        return $this->thesaurusverwijzing_aanvullende_voorwaarde;
    }

    /**
     * Get the [medicatiebewaking_aanvullende_voorwaarde] column value.
     *
     * @return int
     */
    public function getMedicatiebewakingAanvullendeVoorwaarde()
    {

        return $this->medicatiebewaking_aanvullende_voorwaarde;
    }

    /**
     * Get the [codering_waarde_1_alfanumeriek] column value.
     *
     * @return string
     */
    public function getCoderingWaarde1Alfanumeriek()
    {

        return $this->codering_waarde_1_alfanumeriek;
    }

    /**
     * Get the [codering_waarde_2_numeriek] column value.
     *
     * @return int
     */
    public function getCoderingWaarde2Numeriek()
    {

        return $this->codering_waarde_2_numeriek;
    }

    /**
     * Get the [codering_waarde_3_numeriek] column value.
     *
     * @return int
     */
    public function getCoderingWaarde3Numeriek()
    {

        return $this->codering_waarde_3_numeriek;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsAanvullendeMedicatiebewakingsgegevens The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsAanvullendeMedicatiebewakingsgegevensPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsAanvullendeMedicatiebewakingsgegevens The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsAanvullendeMedicatiebewakingsgegevensPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [thesnr_bewakingssoort] column.
     *
     * @param  int $v new value
     * @return GsAanvullendeMedicatiebewakingsgegevens The current object (for fluent API support)
     */
    public function setThesnrBewakingssoort($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesnr_bewakingssoort !== $v) {
            $this->thesnr_bewakingssoort = $v;
            $this->modifiedColumns[] = GsAanvullendeMedicatiebewakingsgegevensPeer::THESNR_BEWAKINGSSOORT;
        }

        if ($this->aBewakingssoortOmschrijving !== null && $this->aBewakingssoortOmschrijving->getThesaurusnummer() !== $v) {
            $this->aBewakingssoortOmschrijving = null;
        }


        return $this;
    } // setThesnrBewakingssoort()

    /**
     * Set the value of [bewakingssoort] column.
     *
     * @param  int $v new value
     * @return GsAanvullendeMedicatiebewakingsgegevens The current object (for fluent API support)
     */
    public function setBewakingssoort($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bewakingssoort !== $v) {
            $this->bewakingssoort = $v;
            $this->modifiedColumns[] = GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT;
        }

        if ($this->aBewakingssoortOmschrijving !== null && $this->aBewakingssoortOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aBewakingssoortOmschrijving = null;
        }


        return $this;
    } // setBewakingssoort()

    /**
     * Set the value of [medicatiebewaking_identificerende_code] column.
     *
     * @param  int $v new value
     * @return GsAanvullendeMedicatiebewakingsgegevens The current object (for fluent API support)
     */
    public function setMedicatiebewakingIdentificerendeCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->medicatiebewaking_identificerende_code !== $v) {
            $this->medicatiebewaking_identificerende_code = $v;
            $this->modifiedColumns[] = GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE;
        }


        return $this;
    } // setMedicatiebewakingIdentificerendeCode()

    /**
     * Set the value of [thesaurusverwijzing_aanvullende_voorwaarde] column.
     *
     * @param  int $v new value
     * @return GsAanvullendeMedicatiebewakingsgegevens The current object (for fluent API support)
     */
    public function setThesaurusverwijzingAanvullendeVoorwaarde($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusverwijzing_aanvullende_voorwaarde !== $v) {
            $this->thesaurusverwijzing_aanvullende_voorwaarde = $v;
            $this->modifiedColumns[] = GsAanvullendeMedicatiebewakingsgegevensPeer::THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE;
        }


        return $this;
    } // setThesaurusverwijzingAanvullendeVoorwaarde()

    /**
     * Set the value of [medicatiebewaking_aanvullende_voorwaarde] column.
     *
     * @param  int $v new value
     * @return GsAanvullendeMedicatiebewakingsgegevens The current object (for fluent API support)
     */
    public function setMedicatiebewakingAanvullendeVoorwaarde($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->medicatiebewaking_aanvullende_voorwaarde !== $v) {
            $this->medicatiebewaking_aanvullende_voorwaarde = $v;
            $this->modifiedColumns[] = GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE;
        }


        return $this;
    } // setMedicatiebewakingAanvullendeVoorwaarde()

    /**
     * Set the value of [codering_waarde_1_alfanumeriek] column.
     *
     * @param  string $v new value
     * @return GsAanvullendeMedicatiebewakingsgegevens The current object (for fluent API support)
     */
    public function setCoderingWaarde1Alfanumeriek($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->codering_waarde_1_alfanumeriek !== $v) {
            $this->codering_waarde_1_alfanumeriek = $v;
            $this->modifiedColumns[] = GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_1_ALFANUMERIEK;
        }


        return $this;
    } // setCoderingWaarde1Alfanumeriek()

    /**
     * Set the value of [codering_waarde_2_numeriek] column.
     *
     * @param  int $v new value
     * @return GsAanvullendeMedicatiebewakingsgegevens The current object (for fluent API support)
     */
    public function setCoderingWaarde2Numeriek($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->codering_waarde_2_numeriek !== $v) {
            $this->codering_waarde_2_numeriek = $v;
            $this->modifiedColumns[] = GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK;
        }


        return $this;
    } // setCoderingWaarde2Numeriek()

    /**
     * Set the value of [codering_waarde_3_numeriek] column.
     *
     * @param  int $v new value
     * @return GsAanvullendeMedicatiebewakingsgegevens The current object (for fluent API support)
     */
    public function setCoderingWaarde3Numeriek($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->codering_waarde_3_numeriek !== $v) {
            $this->codering_waarde_3_numeriek = $v;
            $this->modifiedColumns[] = GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_3_NUMERIEK;
        }


        return $this;
    } // setCoderingWaarde3Numeriek()

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
            $this->thesnr_bewakingssoort = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->bewakingssoort = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->medicatiebewaking_identificerende_code = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->thesaurusverwijzing_aanvullende_voorwaarde = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->medicatiebewaking_aanvullende_voorwaarde = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->codering_waarde_1_alfanumeriek = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->codering_waarde_2_numeriek = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->codering_waarde_3_numeriek = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = GsAanvullendeMedicatiebewakingsgegevensPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsAanvullendeMedicatiebewakingsgegevens object", $e);
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

        if ($this->aBewakingssoortOmschrijving !== null && $this->thesnr_bewakingssoort !== $this->aBewakingssoortOmschrijving->getThesaurusnummer()) {
            $this->aBewakingssoortOmschrijving = null;
        }
        if ($this->aBewakingssoortOmschrijving !== null && $this->bewakingssoort !== $this->aBewakingssoortOmschrijving->getThesaurusItemnummer()) {
            $this->aBewakingssoortOmschrijving = null;
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
            $con = Propel::getConnection(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsAanvullendeMedicatiebewakingsgegevensPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aBewakingssoortOmschrijving = null;
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
            $con = Propel::getConnection(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsAanvullendeMedicatiebewakingsgegevensQuery::create()
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
            $con = Propel::getConnection(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsAanvullendeMedicatiebewakingsgegevensPeer::addInstanceToPool($this);
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

            if ($this->aBewakingssoortOmschrijving !== null) {
                if ($this->aBewakingssoortOmschrijving->isModified() || $this->aBewakingssoortOmschrijving->isNew()) {
                    $affectedRows += $this->aBewakingssoortOmschrijving->save($con);
                }
                $this->setBewakingssoortOmschrijving($this->aBewakingssoortOmschrijving);
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
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::THESNR_BEWAKINGSSOORT)) {
            $modifiedColumns[':p' . $index++]  = '`thesnr_bewakingssoort`';
        }
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT)) {
            $modifiedColumns[':p' . $index++]  = '`bewakingssoort`';
        }
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`medicatiebewaking_identificerende_code`';
        }
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusverwijzing_aanvullende_voorwaarde`';
        }
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE)) {
            $modifiedColumns[':p' . $index++]  = '`medicatiebewaking_aanvullende_voorwaarde`';
        }
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_1_ALFANUMERIEK)) {
            $modifiedColumns[':p' . $index++]  = '`codering_waarde_1_alfanumeriek`';
        }
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK)) {
            $modifiedColumns[':p' . $index++]  = '`codering_waarde_2_numeriek`';
        }
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_3_NUMERIEK)) {
            $modifiedColumns[':p' . $index++]  = '`codering_waarde_3_numeriek`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_aanvullende_medicatiebewakingsgegevens` (%s) VALUES (%s)',
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
                    case '`thesnr_bewakingssoort`':
                        $stmt->bindValue($identifier, $this->thesnr_bewakingssoort, PDO::PARAM_INT);
                        break;
                    case '`bewakingssoort`':
                        $stmt->bindValue($identifier, $this->bewakingssoort, PDO::PARAM_INT);
                        break;
                    case '`medicatiebewaking_identificerende_code`':
                        $stmt->bindValue($identifier, $this->medicatiebewaking_identificerende_code, PDO::PARAM_INT);
                        break;
                    case '`thesaurusverwijzing_aanvullende_voorwaarde`':
                        $stmt->bindValue($identifier, $this->thesaurusverwijzing_aanvullende_voorwaarde, PDO::PARAM_INT);
                        break;
                    case '`medicatiebewaking_aanvullende_voorwaarde`':
                        $stmt->bindValue($identifier, $this->medicatiebewaking_aanvullende_voorwaarde, PDO::PARAM_INT);
                        break;
                    case '`codering_waarde_1_alfanumeriek`':
                        $stmt->bindValue($identifier, $this->codering_waarde_1_alfanumeriek, PDO::PARAM_STR);
                        break;
                    case '`codering_waarde_2_numeriek`':
                        $stmt->bindValue($identifier, $this->codering_waarde_2_numeriek, PDO::PARAM_INT);
                        break;
                    case '`codering_waarde_3_numeriek`':
                        $stmt->bindValue($identifier, $this->codering_waarde_3_numeriek, PDO::PARAM_INT);
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

            if ($this->aBewakingssoortOmschrijving !== null) {
                if (!$this->aBewakingssoortOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aBewakingssoortOmschrijving->getValidationFailures());
                }
            }


            if (($retval = GsAanvullendeMedicatiebewakingsgegevensPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsAanvullendeMedicatiebewakingsgegevensPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getThesnrBewakingssoort();
                break;
            case 3:
                return $this->getBewakingssoort();
                break;
            case 4:
                return $this->getMedicatiebewakingIdentificerendeCode();
                break;
            case 5:
                return $this->getThesaurusverwijzingAanvullendeVoorwaarde();
                break;
            case 6:
                return $this->getMedicatiebewakingAanvullendeVoorwaarde();
                break;
            case 7:
                return $this->getCoderingWaarde1Alfanumeriek();
                break;
            case 8:
                return $this->getCoderingWaarde2Numeriek();
                break;
            case 9:
                return $this->getCoderingWaarde3Numeriek();
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
        if (isset($alreadyDumpedObjects['GsAanvullendeMedicatiebewakingsgegevens'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsAanvullendeMedicatiebewakingsgegevens'][serialize($this->getPrimaryKey())] = true;
        $keys = GsAanvullendeMedicatiebewakingsgegevensPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getThesnrBewakingssoort(),
            $keys[3] => $this->getBewakingssoort(),
            $keys[4] => $this->getMedicatiebewakingIdentificerendeCode(),
            $keys[5] => $this->getThesaurusverwijzingAanvullendeVoorwaarde(),
            $keys[6] => $this->getMedicatiebewakingAanvullendeVoorwaarde(),
            $keys[7] => $this->getCoderingWaarde1Alfanumeriek(),
            $keys[8] => $this->getCoderingWaarde2Numeriek(),
            $keys[9] => $this->getCoderingWaarde3Numeriek(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aBewakingssoortOmschrijving) {
                $result['BewakingssoortOmschrijving'] = $this->aBewakingssoortOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = GsAanvullendeMedicatiebewakingsgegevensPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setThesnrBewakingssoort($value);
                break;
            case 3:
                $this->setBewakingssoort($value);
                break;
            case 4:
                $this->setMedicatiebewakingIdentificerendeCode($value);
                break;
            case 5:
                $this->setThesaurusverwijzingAanvullendeVoorwaarde($value);
                break;
            case 6:
                $this->setMedicatiebewakingAanvullendeVoorwaarde($value);
                break;
            case 7:
                $this->setCoderingWaarde1Alfanumeriek($value);
                break;
            case 8:
                $this->setCoderingWaarde2Numeriek($value);
                break;
            case 9:
                $this->setCoderingWaarde3Numeriek($value);
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
        $keys = GsAanvullendeMedicatiebewakingsgegevensPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setThesnrBewakingssoort($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setBewakingssoort($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMedicatiebewakingIdentificerendeCode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setThesaurusverwijzingAanvullendeVoorwaarde($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMedicatiebewakingAanvullendeVoorwaarde($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCoderingWaarde1Alfanumeriek($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCoderingWaarde2Numeriek($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCoderingWaarde3Numeriek($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::BESTANDNUMMER)) $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::MUTATIEKODE)) $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::THESNR_BEWAKINGSSOORT)) $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::THESNR_BEWAKINGSSOORT, $this->thesnr_bewakingssoort);
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT)) $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT, $this->bewakingssoort);
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE)) $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, $this->medicatiebewaking_identificerende_code);
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE)) $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE, $this->thesaurusverwijzing_aanvullende_voorwaarde);
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE)) $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, $this->medicatiebewaking_aanvullende_voorwaarde);
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_1_ALFANUMERIEK)) $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_1_ALFANUMERIEK, $this->codering_waarde_1_alfanumeriek);
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK)) $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK, $this->codering_waarde_2_numeriek);
        if ($this->isColumnModified(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_3_NUMERIEK)) $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_3_NUMERIEK, $this->codering_waarde_3_numeriek);

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
        $criteria = new Criteria(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME);
        $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT, $this->bewakingssoort);
        $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, $this->medicatiebewaking_identificerende_code);
        $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, $this->medicatiebewaking_aanvullende_voorwaarde);
        $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_1_ALFANUMERIEK, $this->codering_waarde_1_alfanumeriek);
        $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK, $this->codering_waarde_2_numeriek);

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
        $pks[0] = $this->getBewakingssoort();
        $pks[1] = $this->getMedicatiebewakingIdentificerendeCode();
        $pks[2] = $this->getMedicatiebewakingAanvullendeVoorwaarde();
        $pks[3] = $this->getCoderingWaarde1Alfanumeriek();
        $pks[4] = $this->getCoderingWaarde2Numeriek();

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
        $this->setBewakingssoort($keys[0]);
        $this->setMedicatiebewakingIdentificerendeCode($keys[1]);
        $this->setMedicatiebewakingAanvullendeVoorwaarde($keys[2]);
        $this->setCoderingWaarde1Alfanumeriek($keys[3]);
        $this->setCoderingWaarde2Numeriek($keys[4]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getBewakingssoort()) && (null === $this->getMedicatiebewakingIdentificerendeCode()) && (null === $this->getMedicatiebewakingAanvullendeVoorwaarde()) && (null === $this->getCoderingWaarde1Alfanumeriek()) && (null === $this->getCoderingWaarde2Numeriek());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsAanvullendeMedicatiebewakingsgegevens (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setThesnrBewakingssoort($this->getThesnrBewakingssoort());
        $copyObj->setBewakingssoort($this->getBewakingssoort());
        $copyObj->setMedicatiebewakingIdentificerendeCode($this->getMedicatiebewakingIdentificerendeCode());
        $copyObj->setThesaurusverwijzingAanvullendeVoorwaarde($this->getThesaurusverwijzingAanvullendeVoorwaarde());
        $copyObj->setMedicatiebewakingAanvullendeVoorwaarde($this->getMedicatiebewakingAanvullendeVoorwaarde());
        $copyObj->setCoderingWaarde1Alfanumeriek($this->getCoderingWaarde1Alfanumeriek());
        $copyObj->setCoderingWaarde2Numeriek($this->getCoderingWaarde2Numeriek());
        $copyObj->setCoderingWaarde3Numeriek($this->getCoderingWaarde3Numeriek());

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
     * @return GsAanvullendeMedicatiebewakingsgegevens Clone of current object.
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
     * @return GsAanvullendeMedicatiebewakingsgegevensPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsAanvullendeMedicatiebewakingsgegevensPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsAanvullendeMedicatiebewakingsgegevens The current object (for fluent API support)
     * @throws PropelException
     */
    public function setBewakingssoortOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesnrBewakingssoort(NULL);
        } else {
            $this->setThesnrBewakingssoort($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setBewakingssoort(NULL);
        } else {
            $this->setBewakingssoort($v->getThesaurusItemnummer());
        }

        $this->aBewakingssoortOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsAanvullendeMedicatiebewakingsgegevens($this);
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
    public function getBewakingssoortOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aBewakingssoortOmschrijving === null && ($this->thesnr_bewakingssoort !== null && $this->bewakingssoort !== null) && $doQuery) {
            $this->aBewakingssoortOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesnr_bewakingssoort, $this->bewakingssoort), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aBewakingssoortOmschrijving->addGsAanvullendeMedicatiebewakingsgegevenss($this);
             */
        }

        return $this->aBewakingssoortOmschrijving;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->thesnr_bewakingssoort = null;
        $this->bewakingssoort = null;
        $this->medicatiebewaking_identificerende_code = null;
        $this->thesaurusverwijzing_aanvullende_voorwaarde = null;
        $this->medicatiebewaking_aanvullende_voorwaarde = null;
        $this->codering_waarde_1_alfanumeriek = null;
        $this->codering_waarde_2_numeriek = null;
        $this->codering_waarde_3_numeriek = null;
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
            if ($this->aBewakingssoortOmschrijving instanceof Persistent) {
              $this->aBewakingssoortOmschrijving->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aBewakingssoortOmschrijving = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsAanvullendeMedicatiebewakingsgegevensPeer::DEFAULT_STRING_FORMAT);
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
