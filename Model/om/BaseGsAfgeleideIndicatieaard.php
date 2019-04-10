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
use PharmaIntelligence\GstandaardBundle\Model\GsAfgeleideIndicatieaard;
use PharmaIntelligence\GstandaardBundle\Model\GsAfgeleideIndicatieaardPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsAfgeleideIndicatieaardQuery;

abstract class BaseGsAfgeleideIndicatieaard extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAfgeleideIndicatieaardPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsAfgeleideIndicatieaardPeer
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
     * The value for the thesaurusverwijzing_indicatie field.
     * @var        int
     */
    protected $thesaurusverwijzing_indicatie;

    /**
     * The value for the indicatie_aard field.
     * @var        int
     */
    protected $indicatie_aard;

    /**
     * The value for the thesaurusverwijzing_hardheid_afleiding field.
     * @var        int
     */
    protected $thesaurusverwijzing_hardheid_afleiding;

    /**
     * The value for the hardheid_afleiding field.
     * @var        int
     */
    protected $hardheid_afleiding;

    /**
     * The value for the thesaurusverwijzing_tekstmodule field.
     * @var        int
     */
    protected $thesaurusverwijzing_tekstmodule;

    /**
     * The value for the tekstmodule field.
     * @var        int
     */
    protected $tekstmodule;

    /**
     * The value for the thesaurusverwijzing_tekstsoort field.
     * @var        int
     */
    protected $thesaurusverwijzing_tekstsoort;

    /**
     * The value for the tekstsoort field.
     * @var        int
     */
    protected $tekstsoort;

    /**
     * The value for the tekst_nivo_kode field.
     * @var        int
     */
    protected $tekst_nivo_kode;

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
     * Get the [thesaurusverwijzing_indicatie] column value.
     *
     * @return int
     */
    public function getThesaurusverwijzingIndicatie()
    {

        return $this->thesaurusverwijzing_indicatie;
    }

    /**
     * Get the [indicatie_aard] column value.
     *
     * @return int
     */
    public function getIndicatieAard()
    {

        return $this->indicatie_aard;
    }

    /**
     * Get the [thesaurusverwijzing_hardheid_afleiding] column value.
     *
     * @return int
     */
    public function getThesaurusverwijzingHardheidAfleiding()
    {

        return $this->thesaurusverwijzing_hardheid_afleiding;
    }

    /**
     * Get the [hardheid_afleiding] column value.
     *
     * @return int
     */
    public function getHardheidAfleiding()
    {

        return $this->hardheid_afleiding;
    }

    /**
     * Get the [thesaurusverwijzing_tekstmodule] column value.
     *
     * @return int
     */
    public function getThesaurusverwijzingTekstmodule()
    {

        return $this->thesaurusverwijzing_tekstmodule;
    }

    /**
     * Get the [tekstmodule] column value.
     *
     * @return int
     */
    public function getTekstmodule()
    {

        return $this->tekstmodule;
    }

    /**
     * Get the [thesaurusverwijzing_tekstsoort] column value.
     *
     * @return int
     */
    public function getThesaurusverwijzingTekstsoort()
    {

        return $this->thesaurusverwijzing_tekstsoort;
    }

    /**
     * Get the [tekstsoort] column value.
     *
     * @return int
     */
    public function getTekstsoort()
    {

        return $this->tekstsoort;
    }

    /**
     * Get the [tekst_nivo_kode] column value.
     *
     * @return int
     */
    public function getTekstNivoKode()
    {

        return $this->tekst_nivo_kode;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsAfgeleideIndicatieaard The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsAfgeleideIndicatieaardPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsAfgeleideIndicatieaard The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsAfgeleideIndicatieaardPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [atccode] column.
     *
     * @param  string $v new value
     * @return GsAfgeleideIndicatieaard The current object (for fluent API support)
     */
    public function setAtccode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->atccode !== $v) {
            $this->atccode = $v;
            $this->modifiedColumns[] = GsAfgeleideIndicatieaardPeer::ATCCODE;
        }


        return $this;
    } // setAtccode()

    /**
     * Set the value of [thesaurusverwijzing_indicatie] column.
     *
     * @param  int $v new value
     * @return GsAfgeleideIndicatieaard The current object (for fluent API support)
     */
    public function setThesaurusverwijzingIndicatie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusverwijzing_indicatie !== $v) {
            $this->thesaurusverwijzing_indicatie = $v;
            $this->modifiedColumns[] = GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_INDICATIE;
        }


        return $this;
    } // setThesaurusverwijzingIndicatie()

    /**
     * Set the value of [indicatie_aard] column.
     *
     * @param  int $v new value
     * @return GsAfgeleideIndicatieaard The current object (for fluent API support)
     */
    public function setIndicatieAard($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->indicatie_aard !== $v) {
            $this->indicatie_aard = $v;
            $this->modifiedColumns[] = GsAfgeleideIndicatieaardPeer::INDICATIE_AARD;
        }


        return $this;
    } // setIndicatieAard()

    /**
     * Set the value of [thesaurusverwijzing_hardheid_afleiding] column.
     *
     * @param  int $v new value
     * @return GsAfgeleideIndicatieaard The current object (for fluent API support)
     */
    public function setThesaurusverwijzingHardheidAfleiding($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusverwijzing_hardheid_afleiding !== $v) {
            $this->thesaurusverwijzing_hardheid_afleiding = $v;
            $this->modifiedColumns[] = GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_HARDHEID_AFLEIDING;
        }


        return $this;
    } // setThesaurusverwijzingHardheidAfleiding()

    /**
     * Set the value of [hardheid_afleiding] column.
     *
     * @param  int $v new value
     * @return GsAfgeleideIndicatieaard The current object (for fluent API support)
     */
    public function setHardheidAfleiding($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hardheid_afleiding !== $v) {
            $this->hardheid_afleiding = $v;
            $this->modifiedColumns[] = GsAfgeleideIndicatieaardPeer::HARDHEID_AFLEIDING;
        }


        return $this;
    } // setHardheidAfleiding()

    /**
     * Set the value of [thesaurusverwijzing_tekstmodule] column.
     *
     * @param  int $v new value
     * @return GsAfgeleideIndicatieaard The current object (for fluent API support)
     */
    public function setThesaurusverwijzingTekstmodule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusverwijzing_tekstmodule !== $v) {
            $this->thesaurusverwijzing_tekstmodule = $v;
            $this->modifiedColumns[] = GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_TEKSTMODULE;
        }


        return $this;
    } // setThesaurusverwijzingTekstmodule()

    /**
     * Set the value of [tekstmodule] column.
     *
     * @param  int $v new value
     * @return GsAfgeleideIndicatieaard The current object (for fluent API support)
     */
    public function setTekstmodule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekstmodule !== $v) {
            $this->tekstmodule = $v;
            $this->modifiedColumns[] = GsAfgeleideIndicatieaardPeer::TEKSTMODULE;
        }


        return $this;
    } // setTekstmodule()

    /**
     * Set the value of [thesaurusverwijzing_tekstsoort] column.
     *
     * @param  int $v new value
     * @return GsAfgeleideIndicatieaard The current object (for fluent API support)
     */
    public function setThesaurusverwijzingTekstsoort($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusverwijzing_tekstsoort !== $v) {
            $this->thesaurusverwijzing_tekstsoort = $v;
            $this->modifiedColumns[] = GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_TEKSTSOORT;
        }


        return $this;
    } // setThesaurusverwijzingTekstsoort()

    /**
     * Set the value of [tekstsoort] column.
     *
     * @param  int $v new value
     * @return GsAfgeleideIndicatieaard The current object (for fluent API support)
     */
    public function setTekstsoort($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekstsoort !== $v) {
            $this->tekstsoort = $v;
            $this->modifiedColumns[] = GsAfgeleideIndicatieaardPeer::TEKSTSOORT;
        }


        return $this;
    } // setTekstsoort()

    /**
     * Set the value of [tekst_nivo_kode] column.
     *
     * @param  int $v new value
     * @return GsAfgeleideIndicatieaard The current object (for fluent API support)
     */
    public function setTekstNivoKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekst_nivo_kode !== $v) {
            $this->tekst_nivo_kode = $v;
            $this->modifiedColumns[] = GsAfgeleideIndicatieaardPeer::TEKST_NIVO_KODE;
        }


        return $this;
    } // setTekstNivoKode()

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
            $this->thesaurusverwijzing_indicatie = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->indicatie_aard = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->thesaurusverwijzing_hardheid_afleiding = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->hardheid_afleiding = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->thesaurusverwijzing_tekstmodule = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->tekstmodule = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->thesaurusverwijzing_tekstsoort = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->tekstsoort = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->tekst_nivo_kode = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = GsAfgeleideIndicatieaardPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsAfgeleideIndicatieaard object", $e);
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
            $con = Propel::getConnection(GsAfgeleideIndicatieaardPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsAfgeleideIndicatieaardPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsAfgeleideIndicatieaardPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsAfgeleideIndicatieaardQuery::create()
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
            $con = Propel::getConnection(GsAfgeleideIndicatieaardPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsAfgeleideIndicatieaardPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::ATCCODE)) {
            $modifiedColumns[':p' . $index++]  = '`atccode`';
        }
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_INDICATIE)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusverwijzing_indicatie`';
        }
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::INDICATIE_AARD)) {
            $modifiedColumns[':p' . $index++]  = '`indicatie_aard`';
        }
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_HARDHEID_AFLEIDING)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusverwijzing_hardheid_afleiding`';
        }
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::HARDHEID_AFLEIDING)) {
            $modifiedColumns[':p' . $index++]  = '`hardheid_afleiding`';
        }
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_TEKSTMODULE)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusverwijzing_tekstmodule`';
        }
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::TEKSTMODULE)) {
            $modifiedColumns[':p' . $index++]  = '`tekstmodule`';
        }
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_TEKSTSOORT)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusverwijzing_tekstsoort`';
        }
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::TEKSTSOORT)) {
            $modifiedColumns[':p' . $index++]  = '`tekstsoort`';
        }
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::TEKST_NIVO_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`tekst_nivo_kode`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_afgeleide_indicatieaard` (%s) VALUES (%s)',
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
                    case '`thesaurusverwijzing_indicatie`':
                        $stmt->bindValue($identifier, $this->thesaurusverwijzing_indicatie, PDO::PARAM_INT);
                        break;
                    case '`indicatie_aard`':
                        $stmt->bindValue($identifier, $this->indicatie_aard, PDO::PARAM_INT);
                        break;
                    case '`thesaurusverwijzing_hardheid_afleiding`':
                        $stmt->bindValue($identifier, $this->thesaurusverwijzing_hardheid_afleiding, PDO::PARAM_INT);
                        break;
                    case '`hardheid_afleiding`':
                        $stmt->bindValue($identifier, $this->hardheid_afleiding, PDO::PARAM_INT);
                        break;
                    case '`thesaurusverwijzing_tekstmodule`':
                        $stmt->bindValue($identifier, $this->thesaurusverwijzing_tekstmodule, PDO::PARAM_INT);
                        break;
                    case '`tekstmodule`':
                        $stmt->bindValue($identifier, $this->tekstmodule, PDO::PARAM_INT);
                        break;
                    case '`thesaurusverwijzing_tekstsoort`':
                        $stmt->bindValue($identifier, $this->thesaurusverwijzing_tekstsoort, PDO::PARAM_INT);
                        break;
                    case '`tekstsoort`':
                        $stmt->bindValue($identifier, $this->tekstsoort, PDO::PARAM_INT);
                        break;
                    case '`tekst_nivo_kode`':
                        $stmt->bindValue($identifier, $this->tekst_nivo_kode, PDO::PARAM_INT);
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


            if (($retval = GsAfgeleideIndicatieaardPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsAfgeleideIndicatieaardPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getThesaurusverwijzingIndicatie();
                break;
            case 4:
                return $this->getIndicatieAard();
                break;
            case 5:
                return $this->getThesaurusverwijzingHardheidAfleiding();
                break;
            case 6:
                return $this->getHardheidAfleiding();
                break;
            case 7:
                return $this->getThesaurusverwijzingTekstmodule();
                break;
            case 8:
                return $this->getTekstmodule();
                break;
            case 9:
                return $this->getThesaurusverwijzingTekstsoort();
                break;
            case 10:
                return $this->getTekstsoort();
                break;
            case 11:
                return $this->getTekstNivoKode();
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
        if (isset($alreadyDumpedObjects['GsAfgeleideIndicatieaard'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsAfgeleideIndicatieaard'][serialize($this->getPrimaryKey())] = true;
        $keys = GsAfgeleideIndicatieaardPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getAtccode(),
            $keys[3] => $this->getThesaurusverwijzingIndicatie(),
            $keys[4] => $this->getIndicatieAard(),
            $keys[5] => $this->getThesaurusverwijzingHardheidAfleiding(),
            $keys[6] => $this->getHardheidAfleiding(),
            $keys[7] => $this->getThesaurusverwijzingTekstmodule(),
            $keys[8] => $this->getTekstmodule(),
            $keys[9] => $this->getThesaurusverwijzingTekstsoort(),
            $keys[10] => $this->getTekstsoort(),
            $keys[11] => $this->getTekstNivoKode(),
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
        $pos = GsAfgeleideIndicatieaardPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setThesaurusverwijzingIndicatie($value);
                break;
            case 4:
                $this->setIndicatieAard($value);
                break;
            case 5:
                $this->setThesaurusverwijzingHardheidAfleiding($value);
                break;
            case 6:
                $this->setHardheidAfleiding($value);
                break;
            case 7:
                $this->setThesaurusverwijzingTekstmodule($value);
                break;
            case 8:
                $this->setTekstmodule($value);
                break;
            case 9:
                $this->setThesaurusverwijzingTekstsoort($value);
                break;
            case 10:
                $this->setTekstsoort($value);
                break;
            case 11:
                $this->setTekstNivoKode($value);
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
        $keys = GsAfgeleideIndicatieaardPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAtccode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setThesaurusverwijzingIndicatie($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIndicatieAard($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setThesaurusverwijzingHardheidAfleiding($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setHardheidAfleiding($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setThesaurusverwijzingTekstmodule($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTekstmodule($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setThesaurusverwijzingTekstsoort($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTekstsoort($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTekstNivoKode($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsAfgeleideIndicatieaardPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::BESTANDNUMMER)) $criteria->add(GsAfgeleideIndicatieaardPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::MUTATIEKODE)) $criteria->add(GsAfgeleideIndicatieaardPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::ATCCODE)) $criteria->add(GsAfgeleideIndicatieaardPeer::ATCCODE, $this->atccode);
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_INDICATIE)) $criteria->add(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_INDICATIE, $this->thesaurusverwijzing_indicatie);
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::INDICATIE_AARD)) $criteria->add(GsAfgeleideIndicatieaardPeer::INDICATIE_AARD, $this->indicatie_aard);
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_HARDHEID_AFLEIDING)) $criteria->add(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_HARDHEID_AFLEIDING, $this->thesaurusverwijzing_hardheid_afleiding);
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::HARDHEID_AFLEIDING)) $criteria->add(GsAfgeleideIndicatieaardPeer::HARDHEID_AFLEIDING, $this->hardheid_afleiding);
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_TEKSTMODULE)) $criteria->add(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_TEKSTMODULE, $this->thesaurusverwijzing_tekstmodule);
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::TEKSTMODULE)) $criteria->add(GsAfgeleideIndicatieaardPeer::TEKSTMODULE, $this->tekstmodule);
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_TEKSTSOORT)) $criteria->add(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_TEKSTSOORT, $this->thesaurusverwijzing_tekstsoort);
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::TEKSTSOORT)) $criteria->add(GsAfgeleideIndicatieaardPeer::TEKSTSOORT, $this->tekstsoort);
        if ($this->isColumnModified(GsAfgeleideIndicatieaardPeer::TEKST_NIVO_KODE)) $criteria->add(GsAfgeleideIndicatieaardPeer::TEKST_NIVO_KODE, $this->tekst_nivo_kode);

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
        $criteria = new Criteria(GsAfgeleideIndicatieaardPeer::DATABASE_NAME);
        $criteria->add(GsAfgeleideIndicatieaardPeer::ATCCODE, $this->atccode);
        $criteria->add(GsAfgeleideIndicatieaardPeer::INDICATIE_AARD, $this->indicatie_aard);

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
        $pks[1] = $this->getIndicatieAard();

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
        $this->setIndicatieAard($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getAtccode()) && (null === $this->getIndicatieAard());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsAfgeleideIndicatieaard (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setAtccode($this->getAtccode());
        $copyObj->setThesaurusverwijzingIndicatie($this->getThesaurusverwijzingIndicatie());
        $copyObj->setIndicatieAard($this->getIndicatieAard());
        $copyObj->setThesaurusverwijzingHardheidAfleiding($this->getThesaurusverwijzingHardheidAfleiding());
        $copyObj->setHardheidAfleiding($this->getHardheidAfleiding());
        $copyObj->setThesaurusverwijzingTekstmodule($this->getThesaurusverwijzingTekstmodule());
        $copyObj->setTekstmodule($this->getTekstmodule());
        $copyObj->setThesaurusverwijzingTekstsoort($this->getThesaurusverwijzingTekstsoort());
        $copyObj->setTekstsoort($this->getTekstsoort());
        $copyObj->setTekstNivoKode($this->getTekstNivoKode());
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
     * @return GsAfgeleideIndicatieaard Clone of current object.
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
     * @return GsAfgeleideIndicatieaardPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsAfgeleideIndicatieaardPeer();
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
        $this->atccode = null;
        $this->thesaurusverwijzing_indicatie = null;
        $this->indicatie_aard = null;
        $this->thesaurusverwijzing_hardheid_afleiding = null;
        $this->hardheid_afleiding = null;
        $this->thesaurusverwijzing_tekstmodule = null;
        $this->tekstmodule = null;
        $this->thesaurusverwijzing_tekstsoort = null;
        $this->tekstsoort = null;
        $this->tekst_nivo_kode = null;
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
        return (string) $this->exportTo(GsAfgeleideIndicatieaardPeer::DEFAULT_STRING_FORMAT);
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
