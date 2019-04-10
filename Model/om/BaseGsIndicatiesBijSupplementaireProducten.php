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
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsIndicatiesBijSupplementaireProducten;
use PharmaIntelligence\GstandaardBundle\Model\GsIndicatiesBijSupplementaireProductenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsIndicatiesBijSupplementaireProductenQuery;

abstract class BaseGsIndicatiesBijSupplementaireProducten extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsIndicatiesBijSupplementaireProductenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsIndicatiesBijSupplementaireProductenPeer
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
     * The value for the zindex_nummer field.
     * @var        int
     */
    protected $zindex_nummer;

    /**
     * The value for the indicatie_id field.
     * @var        int
     */
    protected $indicatie_id;

    /**
     * The value for the tekstmodule_indicatie_id field.
     * @var        int
     */
    protected $tekstmodule_indicatie_id;

    /**
     * The value for the thesaurus_nummer_soort_indicatie field.
     * @var        int
     */
    protected $thesaurus_nummer_soort_indicatie;

    /**
     * The value for the soort_indicatie field.
     * @var        int
     */
    protected $soort_indicatie;

    /**
     * The value for the duiding_id field.
     * @var        int
     */
    protected $duiding_id;

    /**
     * The value for the tekstmodule_duiding_id field.
     * @var        int
     */
    protected $tekstmodule_duiding_id;

    /**
     * The value for the aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn field.
     * @var        string
     */
    protected $aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn;

    /**
     * @var        GsArtikelen
     */
    protected $aGsArtikelen;

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
     * Get the [zindex_nummer] column value.
     *
     * @return int
     */
    public function getZindexNummer()
    {

        return $this->zindex_nummer;
    }

    /**
     * Get the [indicatie_id] column value.
     *
     * @return int
     */
    public function getIndicatieId()
    {

        return $this->indicatie_id;
    }

    /**
     * Get the [tekstmodule_indicatie_id] column value.
     *
     * @return int
     */
    public function getTekstmoduleIndicatieId()
    {

        return $this->tekstmodule_indicatie_id;
    }

    /**
     * Get the [thesaurus_nummer_soort_indicatie] column value.
     *
     * @return int
     */
    public function getThesaurusNummerSoortIndicatie()
    {

        return $this->thesaurus_nummer_soort_indicatie;
    }

    /**
     * Get the [soort_indicatie] column value.
     *
     * @return int
     */
    public function getSoortIndicatie()
    {

        return $this->soort_indicatie;
    }

    /**
     * Get the [duiding_id] column value.
     *
     * @return int
     */
    public function getDuidingId()
    {

        return $this->duiding_id;
    }

    /**
     * Get the [tekstmodule_duiding_id] column value.
     *
     * @return int
     */
    public function getTekstmoduleDuidingId()
    {

        return $this->tekstmodule_duiding_id;
    }

    /**
     * Get the [aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn] column value.
     *
     * @return string
     */
    public function getAanspraakOpGeneesmiddelBijIndicatieVolgensZn()
    {

        return $this->aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsIndicatiesBijSupplementaireProducten The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsIndicatiesBijSupplementaireProductenPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsIndicatiesBijSupplementaireProducten The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsIndicatiesBijSupplementaireProductenPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [zindex_nummer] column.
     *
     * @param  int $v new value
     * @return GsIndicatiesBijSupplementaireProducten The current object (for fluent API support)
     */
    public function setZindexNummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zindex_nummer !== $v) {
            $this->zindex_nummer = $v;
            $this->modifiedColumns[] = GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER;
        }

        if ($this->aGsArtikelen !== null && $this->aGsArtikelen->getZinummer() !== $v) {
            $this->aGsArtikelen = null;
        }


        return $this;
    } // setZindexNummer()

    /**
     * Set the value of [indicatie_id] column.
     *
     * @param  int $v new value
     * @return GsIndicatiesBijSupplementaireProducten The current object (for fluent API support)
     */
    public function setIndicatieId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->indicatie_id !== $v) {
            $this->indicatie_id = $v;
            $this->modifiedColumns[] = GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID;
        }


        return $this;
    } // setIndicatieId()

    /**
     * Set the value of [tekstmodule_indicatie_id] column.
     *
     * @param  int $v new value
     * @return GsIndicatiesBijSupplementaireProducten The current object (for fluent API support)
     */
    public function setTekstmoduleIndicatieId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekstmodule_indicatie_id !== $v) {
            $this->tekstmodule_indicatie_id = $v;
            $this->modifiedColumns[] = GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_INDICATIE_ID;
        }


        return $this;
    } // setTekstmoduleIndicatieId()

    /**
     * Set the value of [thesaurus_nummer_soort_indicatie] column.
     *
     * @param  int $v new value
     * @return GsIndicatiesBijSupplementaireProducten The current object (for fluent API support)
     */
    public function setThesaurusNummerSoortIndicatie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurus_nummer_soort_indicatie !== $v) {
            $this->thesaurus_nummer_soort_indicatie = $v;
            $this->modifiedColumns[] = GsIndicatiesBijSupplementaireProductenPeer::THESAURUS_NUMMER_SOORT_INDICATIE;
        }


        return $this;
    } // setThesaurusNummerSoortIndicatie()

    /**
     * Set the value of [soort_indicatie] column.
     *
     * @param  int $v new value
     * @return GsIndicatiesBijSupplementaireProducten The current object (for fluent API support)
     */
    public function setSoortIndicatie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->soort_indicatie !== $v) {
            $this->soort_indicatie = $v;
            $this->modifiedColumns[] = GsIndicatiesBijSupplementaireProductenPeer::SOORT_INDICATIE;
        }


        return $this;
    } // setSoortIndicatie()

    /**
     * Set the value of [duiding_id] column.
     *
     * @param  int $v new value
     * @return GsIndicatiesBijSupplementaireProducten The current object (for fluent API support)
     */
    public function setDuidingId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->duiding_id !== $v) {
            $this->duiding_id = $v;
            $this->modifiedColumns[] = GsIndicatiesBijSupplementaireProductenPeer::DUIDING_ID;
        }


        return $this;
    } // setDuidingId()

    /**
     * Set the value of [tekstmodule_duiding_id] column.
     *
     * @param  int $v new value
     * @return GsIndicatiesBijSupplementaireProducten The current object (for fluent API support)
     */
    public function setTekstmoduleDuidingId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekstmodule_duiding_id !== $v) {
            $this->tekstmodule_duiding_id = $v;
            $this->modifiedColumns[] = GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_DUIDING_ID;
        }


        return $this;
    } // setTekstmoduleDuidingId()

    /**
     * Set the value of [aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn] column.
     *
     * @param  string $v new value
     * @return GsIndicatiesBijSupplementaireProducten The current object (for fluent API support)
     */
    public function setAanspraakOpGeneesmiddelBijIndicatieVolgensZn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn !== $v) {
            $this->aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn = $v;
            $this->modifiedColumns[] = GsIndicatiesBijSupplementaireProductenPeer::AANSPRAAK_OP_GENEESMIDDEL_BIJ_INDICATIE_VOLGENS_ZN;
        }


        return $this;
    } // setAanspraakOpGeneesmiddelBijIndicatieVolgensZn()

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
            $this->zindex_nummer = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->indicatie_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->tekstmodule_indicatie_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->thesaurus_nummer_soort_indicatie = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->soort_indicatie = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->duiding_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->tekstmodule_duiding_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = GsIndicatiesBijSupplementaireProductenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsIndicatiesBijSupplementaireProducten object", $e);
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

        if ($this->aGsArtikelen !== null && $this->zindex_nummer !== $this->aGsArtikelen->getZinummer()) {
            $this->aGsArtikelen = null;
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
            $con = Propel::getConnection(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsIndicatiesBijSupplementaireProductenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGsArtikelen = null;
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
            $con = Propel::getConnection(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsIndicatiesBijSupplementaireProductenQuery::create()
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
            $con = Propel::getConnection(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsIndicatiesBijSupplementaireProductenPeer::addInstanceToPool($this);
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

            if ($this->aGsArtikelen !== null) {
                if ($this->aGsArtikelen->isModified() || $this->aGsArtikelen->isNew()) {
                    $affectedRows += $this->aGsArtikelen->save($con);
                }
                $this->setGsArtikelen($this->aGsArtikelen);
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
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`zindex_nummer`';
        }
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`indicatie_id`';
        }
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_INDICATIE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`tekstmodule_indicatie_id`';
        }
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::THESAURUS_NUMMER_SOORT_INDICATIE)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurus_nummer_soort_indicatie`';
        }
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::SOORT_INDICATIE)) {
            $modifiedColumns[':p' . $index++]  = '`soort_indicatie`';
        }
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::DUIDING_ID)) {
            $modifiedColumns[':p' . $index++]  = '`duiding_id`';
        }
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_DUIDING_ID)) {
            $modifiedColumns[':p' . $index++]  = '`tekstmodule_duiding_id`';
        }
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::AANSPRAAK_OP_GENEESMIDDEL_BIJ_INDICATIE_VOLGENS_ZN)) {
            $modifiedColumns[':p' . $index++]  = '`aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_indicaties_bij_supplementaire_producten` (%s) VALUES (%s)',
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
                    case '`zindex_nummer`':
                        $stmt->bindValue($identifier, $this->zindex_nummer, PDO::PARAM_INT);
                        break;
                    case '`indicatie_id`':
                        $stmt->bindValue($identifier, $this->indicatie_id, PDO::PARAM_INT);
                        break;
                    case '`tekstmodule_indicatie_id`':
                        $stmt->bindValue($identifier, $this->tekstmodule_indicatie_id, PDO::PARAM_INT);
                        break;
                    case '`thesaurus_nummer_soort_indicatie`':
                        $stmt->bindValue($identifier, $this->thesaurus_nummer_soort_indicatie, PDO::PARAM_INT);
                        break;
                    case '`soort_indicatie`':
                        $stmt->bindValue($identifier, $this->soort_indicatie, PDO::PARAM_INT);
                        break;
                    case '`duiding_id`':
                        $stmt->bindValue($identifier, $this->duiding_id, PDO::PARAM_INT);
                        break;
                    case '`tekstmodule_duiding_id`':
                        $stmt->bindValue($identifier, $this->tekstmodule_duiding_id, PDO::PARAM_INT);
                        break;
                    case '`aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn`':
                        $stmt->bindValue($identifier, $this->aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn, PDO::PARAM_STR);
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

            if ($this->aGsArtikelen !== null) {
                if (!$this->aGsArtikelen->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsArtikelen->getValidationFailures());
                }
            }


            if (($retval = GsIndicatiesBijSupplementaireProductenPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsIndicatiesBijSupplementaireProductenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getZindexNummer();
                break;
            case 3:
                return $this->getIndicatieId();
                break;
            case 4:
                return $this->getTekstmoduleIndicatieId();
                break;
            case 5:
                return $this->getThesaurusNummerSoortIndicatie();
                break;
            case 6:
                return $this->getSoortIndicatie();
                break;
            case 7:
                return $this->getDuidingId();
                break;
            case 8:
                return $this->getTekstmoduleDuidingId();
                break;
            case 9:
                return $this->getAanspraakOpGeneesmiddelBijIndicatieVolgensZn();
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
        if (isset($alreadyDumpedObjects['GsIndicatiesBijSupplementaireProducten'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsIndicatiesBijSupplementaireProducten'][serialize($this->getPrimaryKey())] = true;
        $keys = GsIndicatiesBijSupplementaireProductenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getZindexNummer(),
            $keys[3] => $this->getIndicatieId(),
            $keys[4] => $this->getTekstmoduleIndicatieId(),
            $keys[5] => $this->getThesaurusNummerSoortIndicatie(),
            $keys[6] => $this->getSoortIndicatie(),
            $keys[7] => $this->getDuidingId(),
            $keys[8] => $this->getTekstmoduleDuidingId(),
            $keys[9] => $this->getAanspraakOpGeneesmiddelBijIndicatieVolgensZn(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aGsArtikelen) {
                $result['GsArtikelen'] = $this->aGsArtikelen->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = GsIndicatiesBijSupplementaireProductenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setZindexNummer($value);
                break;
            case 3:
                $this->setIndicatieId($value);
                break;
            case 4:
                $this->setTekstmoduleIndicatieId($value);
                break;
            case 5:
                $this->setThesaurusNummerSoortIndicatie($value);
                break;
            case 6:
                $this->setSoortIndicatie($value);
                break;
            case 7:
                $this->setDuidingId($value);
                break;
            case 8:
                $this->setTekstmoduleDuidingId($value);
                break;
            case 9:
                $this->setAanspraakOpGeneesmiddelBijIndicatieVolgensZn($value);
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
        $keys = GsIndicatiesBijSupplementaireProductenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setZindexNummer($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIndicatieId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTekstmoduleIndicatieId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setThesaurusNummerSoortIndicatie($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSoortIndicatie($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDuidingId($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTekstmoduleDuidingId($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAanspraakOpGeneesmiddelBijIndicatieVolgensZn($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::BESTANDNUMMER)) $criteria->add(GsIndicatiesBijSupplementaireProductenPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::MUTATIEKODE)) $criteria->add(GsIndicatiesBijSupplementaireProductenPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER)) $criteria->add(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER, $this->zindex_nummer);
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID)) $criteria->add(GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID, $this->indicatie_id);
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_INDICATIE_ID)) $criteria->add(GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_INDICATIE_ID, $this->tekstmodule_indicatie_id);
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::THESAURUS_NUMMER_SOORT_INDICATIE)) $criteria->add(GsIndicatiesBijSupplementaireProductenPeer::THESAURUS_NUMMER_SOORT_INDICATIE, $this->thesaurus_nummer_soort_indicatie);
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::SOORT_INDICATIE)) $criteria->add(GsIndicatiesBijSupplementaireProductenPeer::SOORT_INDICATIE, $this->soort_indicatie);
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::DUIDING_ID)) $criteria->add(GsIndicatiesBijSupplementaireProductenPeer::DUIDING_ID, $this->duiding_id);
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_DUIDING_ID)) $criteria->add(GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_DUIDING_ID, $this->tekstmodule_duiding_id);
        if ($this->isColumnModified(GsIndicatiesBijSupplementaireProductenPeer::AANSPRAAK_OP_GENEESMIDDEL_BIJ_INDICATIE_VOLGENS_ZN)) $criteria->add(GsIndicatiesBijSupplementaireProductenPeer::AANSPRAAK_OP_GENEESMIDDEL_BIJ_INDICATIE_VOLGENS_ZN, $this->aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn);

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
        $criteria = new Criteria(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME);
        $criteria->add(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER, $this->zindex_nummer);
        $criteria->add(GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID, $this->indicatie_id);

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
        $pks[0] = $this->getZindexNummer();
        $pks[1] = $this->getIndicatieId();

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
        $this->setZindexNummer($keys[0]);
        $this->setIndicatieId($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getZindexNummer()) && (null === $this->getIndicatieId());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsIndicatiesBijSupplementaireProducten (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setZindexNummer($this->getZindexNummer());
        $copyObj->setIndicatieId($this->getIndicatieId());
        $copyObj->setTekstmoduleIndicatieId($this->getTekstmoduleIndicatieId());
        $copyObj->setThesaurusNummerSoortIndicatie($this->getThesaurusNummerSoortIndicatie());
        $copyObj->setSoortIndicatie($this->getSoortIndicatie());
        $copyObj->setDuidingId($this->getDuidingId());
        $copyObj->setTekstmoduleDuidingId($this->getTekstmoduleDuidingId());
        $copyObj->setAanspraakOpGeneesmiddelBijIndicatieVolgensZn($this->getAanspraakOpGeneesmiddelBijIndicatieVolgensZn());

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
     * @return GsIndicatiesBijSupplementaireProducten Clone of current object.
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
     * @return GsIndicatiesBijSupplementaireProductenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsIndicatiesBijSupplementaireProductenPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsArtikelen object.
     *
     * @param                  GsArtikelen $v
     * @return GsIndicatiesBijSupplementaireProducten The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsArtikelen(GsArtikelen $v = null)
    {
        if ($v === null) {
            $this->setZindexNummer(NULL);
        } else {
            $this->setZindexNummer($v->getZinummer());
        }

        $this->aGsArtikelen = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsArtikelen object, it will not be re-added.
        if ($v !== null) {
            $v->addGsIndicatiesBijSupplementaireProducten($this);
        }


        return $this;
    }


    /**
     * Get the associated GsArtikelen object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsArtikelen The associated GsArtikelen object.
     * @throws PropelException
     */
    public function getGsArtikelen(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsArtikelen === null && ($this->zindex_nummer !== null) && $doQuery) {
            $this->aGsArtikelen = GsArtikelenQuery::create()->findPk($this->zindex_nummer, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsArtikelen->addGsIndicatiesBijSupplementaireProductens($this);
             */
        }

        return $this->aGsArtikelen;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->zindex_nummer = null;
        $this->indicatie_id = null;
        $this->tekstmodule_indicatie_id = null;
        $this->thesaurus_nummer_soort_indicatie = null;
        $this->soort_indicatie = null;
        $this->duiding_id = null;
        $this->tekstmodule_duiding_id = null;
        $this->aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn = null;
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
            if ($this->aGsArtikelen instanceof Persistent) {
              $this->aGsArtikelen->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aGsArtikelen = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsIndicatiesBijSupplementaireProductenPeer::DEFAULT_STRING_FORMAT);
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
