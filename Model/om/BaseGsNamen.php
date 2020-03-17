<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BaseObject;
use \BasePeer;
use \Criteria;
use \Exception;
use \PDO;
use \Persistent;
use \Propel;
use \PropelCollection;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProducten;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsNamen;
use PharmaIntelligence\GstandaardBundle\Model\GsNamenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsNamenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProduct;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProductQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfproductenQuery;

abstract class BaseGsNamen extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsNamenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsNamenPeer
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
     * The value for the naamnummer field.
     * @var        int
     */
    protected $naamnummer;

    /**
     * The value for the memokode field.
     * @var        string
     */
    protected $memokode;

    /**
     * The value for the etiketnaam field.
     * @var        string
     */
    protected $etiketnaam;

    /**
     * The value for the korte_handelsnaam field.
     * @var        string
     */
    protected $korte_handelsnaam;

    /**
     * The value for the naam_volledig field.
     * @var        string
     */
    protected $naam_volledig;

    /**
     * @var        PropelObjectCollection|GsArtikelen[] Collection to store aggregation of GsArtikelen objects.
     */
    protected $collGsArtikelens;
    protected $collGsArtikelensPartial;

    /**
     * @var        PropelObjectCollection|GsGeneriekeProducten[] Collection to store aggregation of GsGeneriekeProducten objects.
     */
    protected $collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam;
    protected $collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamPartial;

    /**
     * @var        PropelObjectCollection|GsGeneriekeProducten[] Collection to store aggregation of GsGeneriekeProducten objects.
     */
    protected $collGeneriekeProductens;
    protected $collGeneriekeProductensPartial;

    /**
     * @var        PropelObjectCollection|GsHandelsproducten[] Collection to store aggregation of GsHandelsproducten objects.
     */
    protected $collGsHandelsproductens;
    protected $collGsHandelsproductensPartial;

    /**
     * @var        PropelObjectCollection|GsPrescriptieProduct[] Collection to store aggregation of GsPrescriptieProduct objects.
     */
    protected $collGsPrescriptieProducts;
    protected $collGsPrescriptieProductsPartial;

    /**
     * @var        PropelObjectCollection|GsVoorschrijfproducten[] Collection to store aggregation of GsVoorschrijfproducten objects.
     */
    protected $collGsVoorschrijfproductens;
    protected $collGsVoorschrijfproductensPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsArtikelensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $generiekeProductensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsHandelsproductensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsPrescriptieProductsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsVoorschrijfproductensScheduledForDeletion = null;

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
     * Get the [naamnummer] column value.
     *
     * @return int
     */
    public function getNaamnummer()
    {

        return $this->naamnummer;
    }

    /**
     * Get the [memokode] column value.
     *
     * @return string
     */
    public function getMemokode()
    {

        return $this->memokode;
    }

    /**
     * Get the [etiketnaam] column value.
     *
     * @return string
     */
    public function getEtiketnaam()
    {

        return $this->etiketnaam;
    }

    /**
     * Get the [korte_handelsnaam] column value.
     *
     * @return string
     */
    public function getKorteHandelsnaam()
    {

        return $this->korte_handelsnaam;
    }

    /**
     * Get the [naam_volledig] column value.
     *
     * @return string
     */
    public function getNaamVolledig()
    {

        return $this->naam_volledig;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsNamen The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsNamenPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsNamen The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsNamenPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [naamnummer] column.
     *
     * @param  int $v new value
     * @return GsNamen The current object (for fluent API support)
     */
    public function setNaamnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->naamnummer !== $v) {
            $this->naamnummer = $v;
            $this->modifiedColumns[] = GsNamenPeer::NAAMNUMMER;
        }


        return $this;
    } // setNaamnummer()

    /**
     * Set the value of [memokode] column.
     *
     * @param  string $v new value
     * @return GsNamen The current object (for fluent API support)
     */
    public function setMemokode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->memokode !== $v) {
            $this->memokode = $v;
            $this->modifiedColumns[] = GsNamenPeer::MEMOKODE;
        }


        return $this;
    } // setMemokode()

    /**
     * Set the value of [etiketnaam] column.
     *
     * @param  string $v new value
     * @return GsNamen The current object (for fluent API support)
     */
    public function setEtiketnaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->etiketnaam !== $v) {
            $this->etiketnaam = $v;
            $this->modifiedColumns[] = GsNamenPeer::ETIKETNAAM;
        }


        return $this;
    } // setEtiketnaam()

    /**
     * Set the value of [korte_handelsnaam] column.
     *
     * @param  string $v new value
     * @return GsNamen The current object (for fluent API support)
     */
    public function setKorteHandelsnaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->korte_handelsnaam !== $v) {
            $this->korte_handelsnaam = $v;
            $this->modifiedColumns[] = GsNamenPeer::KORTE_HANDELSNAAM;
        }


        return $this;
    } // setKorteHandelsnaam()

    /**
     * Set the value of [naam_volledig] column.
     *
     * @param  string $v new value
     * @return GsNamen The current object (for fluent API support)
     */
    public function setNaamVolledig($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->naam_volledig !== $v) {
            $this->naam_volledig = $v;
            $this->modifiedColumns[] = GsNamenPeer::NAAM_VOLLEDIG;
        }


        return $this;
    } // setNaamVolledig()

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
            $this->naamnummer = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->memokode = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->etiketnaam = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->korte_handelsnaam = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->naam_volledig = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = GsNamenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsNamen object", $e);
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
            $con = Propel::getConnection(GsNamenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsNamenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collGsArtikelens = null;

            $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam = null;

            $this->collGeneriekeProductens = null;

            $this->collGsHandelsproductens = null;

            $this->collGsPrescriptieProducts = null;

            $this->collGsVoorschrijfproductens = null;

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
            $con = Propel::getConnection(GsNamenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsNamenQuery::create()
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
            $con = Propel::getConnection(GsNamenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsNamenPeer::addInstanceToPool($this);
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

            if ($this->gsArtikelensScheduledForDeletion !== null) {
                if (!$this->gsArtikelensScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsArtikelensScheduledForDeletion as $gsArtikelen) {
                        // need to save related object because we set the relation to null
                        $gsArtikelen->save($con);
                    }
                    $this->gsArtikelensScheduledForDeletion = null;
                }
            }

            if ($this->collGsArtikelens !== null) {
                foreach ($this->collGsArtikelens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamScheduledForDeletion !== null) {
                if (!$this->gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamScheduledForDeletion as $gsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam) {
                        // need to save related object because we set the relation to null
                        $gsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam->save($con);
                    }
                    $this->gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamScheduledForDeletion = null;
                }
            }

            if ($this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam !== null) {
                foreach ($this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->generiekeProductensScheduledForDeletion !== null) {
                if (!$this->generiekeProductensScheduledForDeletion->isEmpty()) {
                    foreach ($this->generiekeProductensScheduledForDeletion as $generiekeProducten) {
                        // need to save related object because we set the relation to null
                        $generiekeProducten->save($con);
                    }
                    $this->generiekeProductensScheduledForDeletion = null;
                }
            }

            if ($this->collGeneriekeProductens !== null) {
                foreach ($this->collGeneriekeProductens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsHandelsproductensScheduledForDeletion !== null) {
                if (!$this->gsHandelsproductensScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsHandelsproductensScheduledForDeletion as $gsHandelsproducten) {
                        // need to save related object because we set the relation to null
                        $gsHandelsproducten->save($con);
                    }
                    $this->gsHandelsproductensScheduledForDeletion = null;
                }
            }

            if ($this->collGsHandelsproductens !== null) {
                foreach ($this->collGsHandelsproductens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsPrescriptieProductsScheduledForDeletion !== null) {
                if (!$this->gsPrescriptieProductsScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsPrescriptieProductsScheduledForDeletion as $gsPrescriptieProduct) {
                        // need to save related object because we set the relation to null
                        $gsPrescriptieProduct->save($con);
                    }
                    $this->gsPrescriptieProductsScheduledForDeletion = null;
                }
            }

            if ($this->collGsPrescriptieProducts !== null) {
                foreach ($this->collGsPrescriptieProducts as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsVoorschrijfproductensScheduledForDeletion !== null) {
                if (!$this->gsVoorschrijfproductensScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsVoorschrijfproductensScheduledForDeletion as $gsVoorschrijfproducten) {
                        // need to save related object because we set the relation to null
                        $gsVoorschrijfproducten->save($con);
                    }
                    $this->gsVoorschrijfproductensScheduledForDeletion = null;
                }
            }

            if ($this->collGsVoorschrijfproductens !== null) {
                foreach ($this->collGsVoorschrijfproductens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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
        if ($this->isColumnModified(GsNamenPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsNamenPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsNamenPeer::NAAMNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`naamnummer`';
        }
        if ($this->isColumnModified(GsNamenPeer::MEMOKODE)) {
            $modifiedColumns[':p' . $index++]  = '`memokode`';
        }
        if ($this->isColumnModified(GsNamenPeer::ETIKETNAAM)) {
            $modifiedColumns[':p' . $index++]  = '`etiketnaam`';
        }
        if ($this->isColumnModified(GsNamenPeer::KORTE_HANDELSNAAM)) {
            $modifiedColumns[':p' . $index++]  = '`korte_handelsnaam`';
        }
        if ($this->isColumnModified(GsNamenPeer::NAAM_VOLLEDIG)) {
            $modifiedColumns[':p' . $index++]  = '`naam_volledig`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_namen` (%s) VALUES (%s)',
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
                    case '`naamnummer`':
                        $stmt->bindValue($identifier, $this->naamnummer, PDO::PARAM_INT);
                        break;
                    case '`memokode`':
                        $stmt->bindValue($identifier, $this->memokode, PDO::PARAM_STR);
                        break;
                    case '`etiketnaam`':
                        $stmt->bindValue($identifier, $this->etiketnaam, PDO::PARAM_STR);
                        break;
                    case '`korte_handelsnaam`':
                        $stmt->bindValue($identifier, $this->korte_handelsnaam, PDO::PARAM_STR);
                        break;
                    case '`naam_volledig`':
                        $stmt->bindValue($identifier, $this->naam_volledig, PDO::PARAM_STR);
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


            if (($retval = GsNamenPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collGsArtikelens !== null) {
                    foreach ($this->collGsArtikelens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam !== null) {
                    foreach ($this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGeneriekeProductens !== null) {
                    foreach ($this->collGeneriekeProductens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsHandelsproductens !== null) {
                    foreach ($this->collGsHandelsproductens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsPrescriptieProducts !== null) {
                    foreach ($this->collGsPrescriptieProducts as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsVoorschrijfproductens !== null) {
                    foreach ($this->collGsVoorschrijfproductens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = GsNamenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getNaamnummer();
                break;
            case 3:
                return $this->getMemokode();
                break;
            case 4:
                return $this->getEtiketnaam();
                break;
            case 5:
                return $this->getKorteHandelsnaam();
                break;
            case 6:
                return $this->getNaamVolledig();
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
        if (isset($alreadyDumpedObjects['GsNamen'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsNamen'][$this->getPrimaryKey()] = true;
        $keys = GsNamenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getNaamnummer(),
            $keys[3] => $this->getMemokode(),
            $keys[4] => $this->getEtiketnaam(),
            $keys[5] => $this->getKorteHandelsnaam(),
            $keys[6] => $this->getNaamVolledig(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collGsArtikelens) {
                $result['GsArtikelens'] = $this->collGsArtikelens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam) {
                $result['GsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam'] = $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGeneriekeProductens) {
                $result['GeneriekeProductens'] = $this->collGeneriekeProductens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsHandelsproductens) {
                $result['GsHandelsproductens'] = $this->collGsHandelsproductens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsPrescriptieProducts) {
                $result['GsPrescriptieProducts'] = $this->collGsPrescriptieProducts->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsVoorschrijfproductens) {
                $result['GsVoorschrijfproductens'] = $this->collGsVoorschrijfproductens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = GsNamenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setNaamnummer($value);
                break;
            case 3:
                $this->setMemokode($value);
                break;
            case 4:
                $this->setEtiketnaam($value);
                break;
            case 5:
                $this->setKorteHandelsnaam($value);
                break;
            case 6:
                $this->setNaamVolledig($value);
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
        $keys = GsNamenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNaamnummer($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMemokode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEtiketnaam($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setKorteHandelsnaam($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setNaamVolledig($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsNamenPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsNamenPeer::BESTANDNUMMER)) $criteria->add(GsNamenPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsNamenPeer::MUTATIEKODE)) $criteria->add(GsNamenPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsNamenPeer::NAAMNUMMER)) $criteria->add(GsNamenPeer::NAAMNUMMER, $this->naamnummer);
        if ($this->isColumnModified(GsNamenPeer::MEMOKODE)) $criteria->add(GsNamenPeer::MEMOKODE, $this->memokode);
        if ($this->isColumnModified(GsNamenPeer::ETIKETNAAM)) $criteria->add(GsNamenPeer::ETIKETNAAM, $this->etiketnaam);
        if ($this->isColumnModified(GsNamenPeer::KORTE_HANDELSNAAM)) $criteria->add(GsNamenPeer::KORTE_HANDELSNAAM, $this->korte_handelsnaam);
        if ($this->isColumnModified(GsNamenPeer::NAAM_VOLLEDIG)) $criteria->add(GsNamenPeer::NAAM_VOLLEDIG, $this->naam_volledig);

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
        $criteria = new Criteria(GsNamenPeer::DATABASE_NAME);
        $criteria->add(GsNamenPeer::NAAMNUMMER, $this->naamnummer);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getNaamnummer();
    }

    /**
     * Generic method to set the primary key (naamnummer column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setNaamnummer($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getNaamnummer();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsNamen (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setMemokode($this->getMemokode());
        $copyObj->setEtiketnaam($this->getEtiketnaam());
        $copyObj->setKorteHandelsnaam($this->getKorteHandelsnaam());
        $copyObj->setNaamVolledig($this->getNaamVolledig());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getGsArtikelens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsArtikelen($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGeneriekeProductens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGeneriekeProducten($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsHandelsproductens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsHandelsproducten($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsPrescriptieProducts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsPrescriptieProduct($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsVoorschrijfproductens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsVoorschrijfproducten($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setNaamnummer(NULL); // this is a auto-increment column, so set to default value
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
     * @return GsNamen Clone of current object.
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
     * @return GsNamenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsNamenPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('GsArtikelen' == $relationName) {
            $this->initGsArtikelens();
        }
        if ('GsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam' == $relationName) {
            $this->initGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam();
        }
        if ('GeneriekeProducten' == $relationName) {
            $this->initGeneriekeProductens();
        }
        if ('GsHandelsproducten' == $relationName) {
            $this->initGsHandelsproductens();
        }
        if ('GsPrescriptieProduct' == $relationName) {
            $this->initGsPrescriptieProducts();
        }
        if ('GsVoorschrijfproducten' == $relationName) {
            $this->initGsVoorschrijfproductens();
        }
    }

    /**
     * Clears out the collGsArtikelens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsNamen The current object (for fluent API support)
     * @see        addGsArtikelens()
     */
    public function clearGsArtikelens()
    {
        $this->collGsArtikelens = null; // important to set this to null since that means it is uninitialized
        $this->collGsArtikelensPartial = null;

        return $this;
    }

    /**
     * reset is the collGsArtikelens collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsArtikelens($v = true)
    {
        $this->collGsArtikelensPartial = $v;
    }

    /**
     * Initializes the collGsArtikelens collection.
     *
     * By default this just sets the collGsArtikelens collection to an empty array (like clearcollGsArtikelens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsArtikelens($overrideExisting = true)
    {
        if (null !== $this->collGsArtikelens && !$overrideExisting) {
            return;
        }
        $this->collGsArtikelens = new PropelObjectCollection();
        $this->collGsArtikelens->setModel('GsArtikelen');
    }

    /**
     * Gets an array of GsArtikelen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsNamen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     * @throws PropelException
     */
    public function getGsArtikelens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelensPartial && !$this->isNew();
        if (null === $this->collGsArtikelens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelens) {
                // return empty collection
                $this->initGsArtikelens();
            } else {
                $collGsArtikelens = GsArtikelenQuery::create(null, $criteria)
                    ->filterByGsNamen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsArtikelensPartial && count($collGsArtikelens)) {
                      $this->initGsArtikelens(false);

                      foreach ($collGsArtikelens as $obj) {
                        if (false == $this->collGsArtikelens->contains($obj)) {
                          $this->collGsArtikelens->append($obj);
                        }
                      }

                      $this->collGsArtikelensPartial = true;
                    }

                    $collGsArtikelens->getInternalIterator()->rewind();

                    return $collGsArtikelens;
                }

                if ($partial && $this->collGsArtikelens) {
                    foreach ($this->collGsArtikelens as $obj) {
                        if ($obj->isNew()) {
                            $collGsArtikelens[] = $obj;
                        }
                    }
                }

                $this->collGsArtikelens = $collGsArtikelens;
                $this->collGsArtikelensPartial = false;
            }
        }

        return $this->collGsArtikelens;
    }

    /**
     * Sets a collection of GsArtikelen objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsArtikelens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsNamen The current object (for fluent API support)
     */
    public function setGsArtikelens(PropelCollection $gsArtikelens, PropelPDO $con = null)
    {
        $gsArtikelensToDelete = $this->getGsArtikelens(new Criteria(), $con)->diff($gsArtikelens);


        $this->gsArtikelensScheduledForDeletion = $gsArtikelensToDelete;

        foreach ($gsArtikelensToDelete as $gsArtikelenRemoved) {
            $gsArtikelenRemoved->setGsNamen(null);
        }

        $this->collGsArtikelens = null;
        foreach ($gsArtikelens as $gsArtikelen) {
            $this->addGsArtikelen($gsArtikelen);
        }

        $this->collGsArtikelens = $gsArtikelens;
        $this->collGsArtikelensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsArtikelen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsArtikelen objects.
     * @throws PropelException
     */
    public function countGsArtikelens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelensPartial && !$this->isNew();
        if (null === $this->collGsArtikelens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsArtikelens());
            }
            $query = GsArtikelenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsNamen($this)
                ->count($con);
        }

        return count($this->collGsArtikelens);
    }

    /**
     * Method called to associate a GsArtikelen object to this object
     * through the GsArtikelen foreign key attribute.
     *
     * @param    GsArtikelen $l GsArtikelen
     * @return GsNamen The current object (for fluent API support)
     */
    public function addGsArtikelen(GsArtikelen $l)
    {
        if ($this->collGsArtikelens === null) {
            $this->initGsArtikelens();
            $this->collGsArtikelensPartial = true;
        }

        if (!in_array($l, $this->collGsArtikelens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsArtikelen($l);

            if ($this->gsArtikelensScheduledForDeletion and $this->gsArtikelensScheduledForDeletion->contains($l)) {
                $this->gsArtikelensScheduledForDeletion->remove($this->gsArtikelensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsArtikelen $gsArtikelen The gsArtikelen object to add.
     */
    protected function doAddGsArtikelen($gsArtikelen)
    {
        $this->collGsArtikelens[]= $gsArtikelen;
        $gsArtikelen->setGsNamen($this);
    }

    /**
     * @param	GsArtikelen $gsArtikelen The gsArtikelen object to remove.
     * @return GsNamen The current object (for fluent API support)
     */
    public function removeGsArtikelen($gsArtikelen)
    {
        if ($this->getGsArtikelens()->contains($gsArtikelen)) {
            $this->collGsArtikelens->remove($this->collGsArtikelens->search($gsArtikelen));
            if (null === $this->gsArtikelensScheduledForDeletion) {
                $this->gsArtikelensScheduledForDeletion = clone $this->collGsArtikelens;
                $this->gsArtikelensScheduledForDeletion->clear();
            }
            $this->gsArtikelensScheduledForDeletion[]= $gsArtikelen;
            $gsArtikelen->setGsNamen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsArtikelens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensJoinGsHandelsproducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('GsHandelsproducten', $join_behavior);

        return $this->getGsArtikelens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsArtikelens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensJoinLeverancier($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('Leverancier', $join_behavior);

        return $this->getGsArtikelens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsArtikelens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensJoinImporteur($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('Importeur', $join_behavior);

        return $this->getGsArtikelens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsArtikelens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensJoinRegistratiehouder($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('Registratiehouder', $join_behavior);

        return $this->getGsArtikelens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsArtikelens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensJoinLandOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('LandOmschrijving', $join_behavior);

        return $this->getGsArtikelens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsArtikelens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensJoinHoofdverpakkingOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('HoofdverpakkingOmschrijving', $join_behavior);

        return $this->getGsArtikelens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsArtikelens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensJoinDeelverpakkingOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('DeelverpakkingOmschrijving', $join_behavior);

        return $this->getGsArtikelens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsArtikelens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensJoinLogistiekeInformatie($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('LogistiekeInformatie', $join_behavior);

        return $this->getGsArtikelens($query, $con);
    }

    /**
     * Clears out the collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsNamen The current object (for fluent API support)
     * @see        addGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam()
     */
    public function clearGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam()
    {
        $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam = null; // important to set this to null since that means it is uninitialized
        $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamPartial = null;

        return $this;
    }

    /**
     * reset is the collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam($v = true)
    {
        $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamPartial = $v;
    }

    /**
     * Initializes the collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam collection.
     *
     * By default this just sets the collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam collection to an empty array (like clearcollGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam($overrideExisting = true)
    {
        if (null !== $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam && !$overrideExisting) {
            return;
        }
        $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam = new PropelObjectCollection();
        $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam->setModel('GsGeneriekeProducten');
    }

    /**
     * Gets an array of GsGeneriekeProducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsNamen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     * @throws PropelException
     */
    public function getGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamPartial && !$this->isNew();
        if (null === $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam) {
                // return empty collection
                $this->initGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam();
            } else {
                $collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam = GsGeneriekeProductenQuery::create(null, $criteria)
                    ->filterByGsNamenRelatedByNaamnummerVolledigeGpknaam($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamPartial && count($collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam)) {
                      $this->initGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam(false);

                      foreach ($collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam as $obj) {
                        if (false == $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam->contains($obj)) {
                          $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam->append($obj);
                        }
                      }

                      $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamPartial = true;
                    }

                    $collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam->getInternalIterator()->rewind();

                    return $collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam;
                }

                if ($partial && $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam) {
                    foreach ($this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam as $obj) {
                        if ($obj->isNew()) {
                            $collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam[] = $obj;
                        }
                    }
                }

                $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam = $collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam;
                $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamPartial = false;
            }
        }

        return $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam;
    }

    /**
     * Sets a collection of GsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsNamen The current object (for fluent API support)
     */
    public function setGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam(PropelCollection $gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam, PropelPDO $con = null)
    {
        $gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamToDelete = $this->getGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam(new Criteria(), $con)->diff($gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam);


        $this->gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamScheduledForDeletion = $gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamToDelete;

        foreach ($gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamToDelete as $gsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaamRemoved) {
            $gsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaamRemoved->setGsNamenRelatedByNaamnummerVolledigeGpknaam(null);
        }

        $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam = null;
        foreach ($gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam as $gsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam) {
            $this->addGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam($gsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam);
        }

        $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam = $gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam;
        $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsGeneriekeProducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsGeneriekeProducten objects.
     * @throws PropelException
     */
    public function countGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamPartial && !$this->isNew();
        if (null === $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam());
            }
            $query = GsGeneriekeProductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsNamenRelatedByNaamnummerVolledigeGpknaam($this)
                ->count($con);
        }

        return count($this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam);
    }

    /**
     * Method called to associate a GsGeneriekeProducten object to this object
     * through the GsGeneriekeProducten foreign key attribute.
     *
     * @param    GsGeneriekeProducten $l GsGeneriekeProducten
     * @return GsNamen The current object (for fluent API support)
     */
    public function addGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam(GsGeneriekeProducten $l)
    {
        if ($this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam === null) {
            $this->initGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam();
            $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamPartial = true;
        }

        if (!in_array($l, $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam($l);

            if ($this->gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamScheduledForDeletion and $this->gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamScheduledForDeletion->contains($l)) {
                $this->gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamScheduledForDeletion->remove($this->gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam $gsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam The gsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam object to add.
     */
    protected function doAddGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam($gsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam)
    {
        $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam[]= $gsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam;
        $gsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam->setGsNamenRelatedByNaamnummerVolledigeGpknaam($this);
    }

    /**
     * @param	GsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam $gsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam The gsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam object to remove.
     * @return GsNamen The current object (for fluent API support)
     */
    public function removeGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam($gsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam)
    {
        if ($this->getGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam()->contains($gsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam)) {
            $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam->remove($this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam->search($gsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam));
            if (null === $this->gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamScheduledForDeletion) {
                $this->gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamScheduledForDeletion = clone $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam;
                $this->gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamScheduledForDeletion->clear();
            }
            $this->gsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamScheduledForDeletion[]= $gsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam;
            $gsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam->setGsNamenRelatedByNaamnummerVolledigeGpknaam(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     */
    public function getGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamJoinGsAtcCodes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsGeneriekeProductenQuery::create(null, $criteria);
        $query->joinWith('GsAtcCodes', $join_behavior);

        return $this->getGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     */
    public function getGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamJoinFarmaceutischeVormOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsGeneriekeProductenQuery::create(null, $criteria);
        $query->joinWith('FarmaceutischeVormOmschrijving', $join_behavior);

        return $this->getGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     */
    public function getGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaamJoinToedieningswegOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsGeneriekeProductenQuery::create(null, $criteria);
        $query->joinWith('ToedieningswegOmschrijving', $join_behavior);

        return $this->getGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam($query, $con);
    }

    /**
     * Clears out the collGeneriekeProductens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsNamen The current object (for fluent API support)
     * @see        addGeneriekeProductens()
     */
    public function clearGeneriekeProductens()
    {
        $this->collGeneriekeProductens = null; // important to set this to null since that means it is uninitialized
        $this->collGeneriekeProductensPartial = null;

        return $this;
    }

    /**
     * reset is the collGeneriekeProductens collection loaded partially
     *
     * @return void
     */
    public function resetPartialGeneriekeProductens($v = true)
    {
        $this->collGeneriekeProductensPartial = $v;
    }

    /**
     * Initializes the collGeneriekeProductens collection.
     *
     * By default this just sets the collGeneriekeProductens collection to an empty array (like clearcollGeneriekeProductens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGeneriekeProductens($overrideExisting = true)
    {
        if (null !== $this->collGeneriekeProductens && !$overrideExisting) {
            return;
        }
        $this->collGeneriekeProductens = new PropelObjectCollection();
        $this->collGeneriekeProductens->setModel('GsGeneriekeProducten');
    }

    /**
     * Gets an array of GsGeneriekeProducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsNamen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     * @throws PropelException
     */
    public function getGeneriekeProductens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGeneriekeProductensPartial && !$this->isNew();
        if (null === $this->collGeneriekeProductens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGeneriekeProductens) {
                // return empty collection
                $this->initGeneriekeProductens();
            } else {
                $collGeneriekeProductens = GsGeneriekeProductenQuery::create(null, $criteria)
                    ->filterByStofnaam($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGeneriekeProductensPartial && count($collGeneriekeProductens)) {
                      $this->initGeneriekeProductens(false);

                      foreach ($collGeneriekeProductens as $obj) {
                        if (false == $this->collGeneriekeProductens->contains($obj)) {
                          $this->collGeneriekeProductens->append($obj);
                        }
                      }

                      $this->collGeneriekeProductensPartial = true;
                    }

                    $collGeneriekeProductens->getInternalIterator()->rewind();

                    return $collGeneriekeProductens;
                }

                if ($partial && $this->collGeneriekeProductens) {
                    foreach ($this->collGeneriekeProductens as $obj) {
                        if ($obj->isNew()) {
                            $collGeneriekeProductens[] = $obj;
                        }
                    }
                }

                $this->collGeneriekeProductens = $collGeneriekeProductens;
                $this->collGeneriekeProductensPartial = false;
            }
        }

        return $this->collGeneriekeProductens;
    }

    /**
     * Sets a collection of GeneriekeProducten objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $generiekeProductens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsNamen The current object (for fluent API support)
     */
    public function setGeneriekeProductens(PropelCollection $generiekeProductens, PropelPDO $con = null)
    {
        $generiekeProductensToDelete = $this->getGeneriekeProductens(new Criteria(), $con)->diff($generiekeProductens);


        $this->generiekeProductensScheduledForDeletion = $generiekeProductensToDelete;

        foreach ($generiekeProductensToDelete as $generiekeProductenRemoved) {
            $generiekeProductenRemoved->setStofnaam(null);
        }

        $this->collGeneriekeProductens = null;
        foreach ($generiekeProductens as $generiekeProducten) {
            $this->addGeneriekeProducten($generiekeProducten);
        }

        $this->collGeneriekeProductens = $generiekeProductens;
        $this->collGeneriekeProductensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsGeneriekeProducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsGeneriekeProducten objects.
     * @throws PropelException
     */
    public function countGeneriekeProductens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGeneriekeProductensPartial && !$this->isNew();
        if (null === $this->collGeneriekeProductens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGeneriekeProductens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGeneriekeProductens());
            }
            $query = GsGeneriekeProductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByStofnaam($this)
                ->count($con);
        }

        return count($this->collGeneriekeProductens);
    }

    /**
     * Method called to associate a GsGeneriekeProducten object to this object
     * through the GsGeneriekeProducten foreign key attribute.
     *
     * @param    GsGeneriekeProducten $l GsGeneriekeProducten
     * @return GsNamen The current object (for fluent API support)
     */
    public function addGeneriekeProducten(GsGeneriekeProducten $l)
    {
        if ($this->collGeneriekeProductens === null) {
            $this->initGeneriekeProductens();
            $this->collGeneriekeProductensPartial = true;
        }

        if (!in_array($l, $this->collGeneriekeProductens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGeneriekeProducten($l);

            if ($this->generiekeProductensScheduledForDeletion and $this->generiekeProductensScheduledForDeletion->contains($l)) {
                $this->generiekeProductensScheduledForDeletion->remove($this->generiekeProductensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GeneriekeProducten $generiekeProducten The generiekeProducten object to add.
     */
    protected function doAddGeneriekeProducten($generiekeProducten)
    {
        $this->collGeneriekeProductens[]= $generiekeProducten;
        $generiekeProducten->setStofnaam($this);
    }

    /**
     * @param	GeneriekeProducten $generiekeProducten The generiekeProducten object to remove.
     * @return GsNamen The current object (for fluent API support)
     */
    public function removeGeneriekeProducten($generiekeProducten)
    {
        if ($this->getGeneriekeProductens()->contains($generiekeProducten)) {
            $this->collGeneriekeProductens->remove($this->collGeneriekeProductens->search($generiekeProducten));
            if (null === $this->generiekeProductensScheduledForDeletion) {
                $this->generiekeProductensScheduledForDeletion = clone $this->collGeneriekeProductens;
                $this->generiekeProductensScheduledForDeletion->clear();
            }
            $this->generiekeProductensScheduledForDeletion[]= $generiekeProducten;
            $generiekeProducten->setStofnaam(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GeneriekeProductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     */
    public function getGeneriekeProductensJoinGsAtcCodes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsGeneriekeProductenQuery::create(null, $criteria);
        $query->joinWith('GsAtcCodes', $join_behavior);

        return $this->getGeneriekeProductens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GeneriekeProductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     */
    public function getGeneriekeProductensJoinFarmaceutischeVormOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsGeneriekeProductenQuery::create(null, $criteria);
        $query->joinWith('FarmaceutischeVormOmschrijving', $join_behavior);

        return $this->getGeneriekeProductens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GeneriekeProductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     */
    public function getGeneriekeProductensJoinToedieningswegOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsGeneriekeProductenQuery::create(null, $criteria);
        $query->joinWith('ToedieningswegOmschrijving', $join_behavior);

        return $this->getGeneriekeProductens($query, $con);
    }

    /**
     * Clears out the collGsHandelsproductens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsNamen The current object (for fluent API support)
     * @see        addGsHandelsproductens()
     */
    public function clearGsHandelsproductens()
    {
        $this->collGsHandelsproductens = null; // important to set this to null since that means it is uninitialized
        $this->collGsHandelsproductensPartial = null;

        return $this;
    }

    /**
     * reset is the collGsHandelsproductens collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsHandelsproductens($v = true)
    {
        $this->collGsHandelsproductensPartial = $v;
    }

    /**
     * Initializes the collGsHandelsproductens collection.
     *
     * By default this just sets the collGsHandelsproductens collection to an empty array (like clearcollGsHandelsproductens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsHandelsproductens($overrideExisting = true)
    {
        if (null !== $this->collGsHandelsproductens && !$overrideExisting) {
            return;
        }
        $this->collGsHandelsproductens = new PropelObjectCollection();
        $this->collGsHandelsproductens->setModel('GsHandelsproducten');
    }

    /**
     * Gets an array of GsHandelsproducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsNamen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     * @throws PropelException
     */
    public function getGsHandelsproductens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensPartial && !$this->isNew();
        if (null === $this->collGsHandelsproductens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductens) {
                // return empty collection
                $this->initGsHandelsproductens();
            } else {
                $collGsHandelsproductens = GsHandelsproductenQuery::create(null, $criteria)
                    ->filterByGsNamen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsHandelsproductensPartial && count($collGsHandelsproductens)) {
                      $this->initGsHandelsproductens(false);

                      foreach ($collGsHandelsproductens as $obj) {
                        if (false == $this->collGsHandelsproductens->contains($obj)) {
                          $this->collGsHandelsproductens->append($obj);
                        }
                      }

                      $this->collGsHandelsproductensPartial = true;
                    }

                    $collGsHandelsproductens->getInternalIterator()->rewind();

                    return $collGsHandelsproductens;
                }

                if ($partial && $this->collGsHandelsproductens) {
                    foreach ($this->collGsHandelsproductens as $obj) {
                        if ($obj->isNew()) {
                            $collGsHandelsproductens[] = $obj;
                        }
                    }
                }

                $this->collGsHandelsproductens = $collGsHandelsproductens;
                $this->collGsHandelsproductensPartial = false;
            }
        }

        return $this->collGsHandelsproductens;
    }

    /**
     * Sets a collection of GsHandelsproducten objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsHandelsproductens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsNamen The current object (for fluent API support)
     */
    public function setGsHandelsproductens(PropelCollection $gsHandelsproductens, PropelPDO $con = null)
    {
        $gsHandelsproductensToDelete = $this->getGsHandelsproductens(new Criteria(), $con)->diff($gsHandelsproductens);


        $this->gsHandelsproductensScheduledForDeletion = $gsHandelsproductensToDelete;

        foreach ($gsHandelsproductensToDelete as $gsHandelsproductenRemoved) {
            $gsHandelsproductenRemoved->setGsNamen(null);
        }

        $this->collGsHandelsproductens = null;
        foreach ($gsHandelsproductens as $gsHandelsproducten) {
            $this->addGsHandelsproducten($gsHandelsproducten);
        }

        $this->collGsHandelsproductens = $gsHandelsproductens;
        $this->collGsHandelsproductensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsHandelsproducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsHandelsproducten objects.
     * @throws PropelException
     */
    public function countGsHandelsproductens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensPartial && !$this->isNew();
        if (null === $this->collGsHandelsproductens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsHandelsproductens());
            }
            $query = GsHandelsproductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsNamen($this)
                ->count($con);
        }

        return count($this->collGsHandelsproductens);
    }

    /**
     * Method called to associate a GsHandelsproducten object to this object
     * through the GsHandelsproducten foreign key attribute.
     *
     * @param    GsHandelsproducten $l GsHandelsproducten
     * @return GsNamen The current object (for fluent API support)
     */
    public function addGsHandelsproducten(GsHandelsproducten $l)
    {
        if ($this->collGsHandelsproductens === null) {
            $this->initGsHandelsproductens();
            $this->collGsHandelsproductensPartial = true;
        }

        if (!in_array($l, $this->collGsHandelsproductens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsHandelsproducten($l);

            if ($this->gsHandelsproductensScheduledForDeletion and $this->gsHandelsproductensScheduledForDeletion->contains($l)) {
                $this->gsHandelsproductensScheduledForDeletion->remove($this->gsHandelsproductensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsHandelsproducten $gsHandelsproducten The gsHandelsproducten object to add.
     */
    protected function doAddGsHandelsproducten($gsHandelsproducten)
    {
        $this->collGsHandelsproductens[]= $gsHandelsproducten;
        $gsHandelsproducten->setGsNamen($this);
    }

    /**
     * @param	GsHandelsproducten $gsHandelsproducten The gsHandelsproducten object to remove.
     * @return GsNamen The current object (for fluent API support)
     */
    public function removeGsHandelsproducten($gsHandelsproducten)
    {
        if ($this->getGsHandelsproductens()->contains($gsHandelsproducten)) {
            $this->collGsHandelsproductens->remove($this->collGsHandelsproductens->search($gsHandelsproducten));
            if (null === $this->gsHandelsproductensScheduledForDeletion) {
                $this->gsHandelsproductensScheduledForDeletion = clone $this->collGsHandelsproductens;
                $this->gsHandelsproductensScheduledForDeletion->clear();
            }
            $this->gsHandelsproductensScheduledForDeletion[]= $gsHandelsproducten;
            $gsHandelsproducten->setGsNamen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensJoinGsVoorschrijfprGeneesmiddelIdentific($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsVoorschrijfprGeneesmiddelIdentific', $join_behavior);

        return $this->getGsHandelsproductens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensJoinInkoophoeveelheidOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('InkoophoeveelheidOmschrijving', $join_behavior);

        return $this->getGsHandelsproductens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensJoinBasiseenheidOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('BasiseenheidOmschrijving', $join_behavior);

        return $this->getGsHandelsproductens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensJoinEmballageMateriaalOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('EmballageMateriaalOmschrijving', $join_behavior);

        return $this->getGsHandelsproductens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensJoinEmballageSluitingOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('EmballageSluitingOmschrijving', $join_behavior);

        return $this->getGsHandelsproductens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensJoinEmballageDoseerinrichtingOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('EmballageDoseerinrichtingOmschrijving', $join_behavior);

        return $this->getGsHandelsproductens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensJoinKleurOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('KleurOmschrijving', $join_behavior);

        return $this->getGsHandelsproductens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensJoinSmaakOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('SmaakOmschrijving', $join_behavior);

        return $this->getGsHandelsproductens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensJoinBereidingsvoorschrijftOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('BereidingsvoorschrijftOmschrijving', $join_behavior);

        return $this->getGsHandelsproductens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensJoinProduktgroepOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('ProduktgroepOmschrijving', $join_behavior);

        return $this->getGsHandelsproductens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensJoinRzvVerstrekkingOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('RzvVerstrekkingOmschrijving', $join_behavior);

        return $this->getGsHandelsproductens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensJoinRzvBijlage2Omschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('RzvBijlage2Omschrijving', $join_behavior);

        return $this->getGsHandelsproductens($query, $con);
    }

    /**
     * Clears out the collGsPrescriptieProducts collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsNamen The current object (for fluent API support)
     * @see        addGsPrescriptieProducts()
     */
    public function clearGsPrescriptieProducts()
    {
        $this->collGsPrescriptieProducts = null; // important to set this to null since that means it is uninitialized
        $this->collGsPrescriptieProductsPartial = null;

        return $this;
    }

    /**
     * reset is the collGsPrescriptieProducts collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsPrescriptieProducts($v = true)
    {
        $this->collGsPrescriptieProductsPartial = $v;
    }

    /**
     * Initializes the collGsPrescriptieProducts collection.
     *
     * By default this just sets the collGsPrescriptieProducts collection to an empty array (like clearcollGsPrescriptieProducts());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsPrescriptieProducts($overrideExisting = true)
    {
        if (null !== $this->collGsPrescriptieProducts && !$overrideExisting) {
            return;
        }
        $this->collGsPrescriptieProducts = new PropelObjectCollection();
        $this->collGsPrescriptieProducts->setModel('GsPrescriptieProduct');
    }

    /**
     * Gets an array of GsPrescriptieProduct objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsNamen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     * @throws PropelException
     */
    public function getGsPrescriptieProducts($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsPrescriptieProductsPartial && !$this->isNew();
        if (null === $this->collGsPrescriptieProducts || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsPrescriptieProducts) {
                // return empty collection
                $this->initGsPrescriptieProducts();
            } else {
                $collGsPrescriptieProducts = GsPrescriptieProductQuery::create(null, $criteria)
                    ->filterByGsNamen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsPrescriptieProductsPartial && count($collGsPrescriptieProducts)) {
                      $this->initGsPrescriptieProducts(false);

                      foreach ($collGsPrescriptieProducts as $obj) {
                        if (false == $this->collGsPrescriptieProducts->contains($obj)) {
                          $this->collGsPrescriptieProducts->append($obj);
                        }
                      }

                      $this->collGsPrescriptieProductsPartial = true;
                    }

                    $collGsPrescriptieProducts->getInternalIterator()->rewind();

                    return $collGsPrescriptieProducts;
                }

                if ($partial && $this->collGsPrescriptieProducts) {
                    foreach ($this->collGsPrescriptieProducts as $obj) {
                        if ($obj->isNew()) {
                            $collGsPrescriptieProducts[] = $obj;
                        }
                    }
                }

                $this->collGsPrescriptieProducts = $collGsPrescriptieProducts;
                $this->collGsPrescriptieProductsPartial = false;
            }
        }

        return $this->collGsPrescriptieProducts;
    }

    /**
     * Sets a collection of GsPrescriptieProduct objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsPrescriptieProducts A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsNamen The current object (for fluent API support)
     */
    public function setGsPrescriptieProducts(PropelCollection $gsPrescriptieProducts, PropelPDO $con = null)
    {
        $gsPrescriptieProductsToDelete = $this->getGsPrescriptieProducts(new Criteria(), $con)->diff($gsPrescriptieProducts);


        $this->gsPrescriptieProductsScheduledForDeletion = $gsPrescriptieProductsToDelete;

        foreach ($gsPrescriptieProductsToDelete as $gsPrescriptieProductRemoved) {
            $gsPrescriptieProductRemoved->setGsNamen(null);
        }

        $this->collGsPrescriptieProducts = null;
        foreach ($gsPrescriptieProducts as $gsPrescriptieProduct) {
            $this->addGsPrescriptieProduct($gsPrescriptieProduct);
        }

        $this->collGsPrescriptieProducts = $gsPrescriptieProducts;
        $this->collGsPrescriptieProductsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsPrescriptieProduct objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsPrescriptieProduct objects.
     * @throws PropelException
     */
    public function countGsPrescriptieProducts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsPrescriptieProductsPartial && !$this->isNew();
        if (null === $this->collGsPrescriptieProducts || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsPrescriptieProducts) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsPrescriptieProducts());
            }
            $query = GsPrescriptieProductQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsNamen($this)
                ->count($con);
        }

        return count($this->collGsPrescriptieProducts);
    }

    /**
     * Method called to associate a GsPrescriptieProduct object to this object
     * through the GsPrescriptieProduct foreign key attribute.
     *
     * @param    GsPrescriptieProduct $l GsPrescriptieProduct
     * @return GsNamen The current object (for fluent API support)
     */
    public function addGsPrescriptieProduct(GsPrescriptieProduct $l)
    {
        if ($this->collGsPrescriptieProducts === null) {
            $this->initGsPrescriptieProducts();
            $this->collGsPrescriptieProductsPartial = true;
        }

        if (!in_array($l, $this->collGsPrescriptieProducts->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsPrescriptieProduct($l);

            if ($this->gsPrescriptieProductsScheduledForDeletion and $this->gsPrescriptieProductsScheduledForDeletion->contains($l)) {
                $this->gsPrescriptieProductsScheduledForDeletion->remove($this->gsPrescriptieProductsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsPrescriptieProduct $gsPrescriptieProduct The gsPrescriptieProduct object to add.
     */
    protected function doAddGsPrescriptieProduct($gsPrescriptieProduct)
    {
        $this->collGsPrescriptieProducts[]= $gsPrescriptieProduct;
        $gsPrescriptieProduct->setGsNamen($this);
    }

    /**
     * @param	GsPrescriptieProduct $gsPrescriptieProduct The gsPrescriptieProduct object to remove.
     * @return GsNamen The current object (for fluent API support)
     */
    public function removeGsPrescriptieProduct($gsPrescriptieProduct)
    {
        if ($this->getGsPrescriptieProducts()->contains($gsPrescriptieProduct)) {
            $this->collGsPrescriptieProducts->remove($this->collGsPrescriptieProducts->search($gsPrescriptieProduct));
            if (null === $this->gsPrescriptieProductsScheduledForDeletion) {
                $this->gsPrescriptieProductsScheduledForDeletion = clone $this->collGsPrescriptieProducts;
                $this->gsPrescriptieProductsScheduledForDeletion->clear();
            }
            $this->gsPrescriptieProductsScheduledForDeletion[]= $gsPrescriptieProduct;
            $gsPrescriptieProduct->setGsNamen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsPrescriptieProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsJoinGsGeneriekeProducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('GsGeneriekeProducten', $join_behavior);

        return $this->getGsPrescriptieProducts($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsPrescriptieProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsJoinRedenVoorschrijvenHpkNiveauOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('RedenVoorschrijvenHpkNiveauOmschrijving', $join_behavior);

        return $this->getGsPrescriptieProducts($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsPrescriptieProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsJoinEmballagetypeOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('EmballagetypeOmschrijving', $join_behavior);

        return $this->getGsPrescriptieProducts($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsPrescriptieProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsJoinBasiseenheidProductOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('BasiseenheidProductOmschrijving', $join_behavior);

        return $this->getGsPrescriptieProducts($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsPrescriptieProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsJoinHulpmiddelAardOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('HulpmiddelAardOmschrijving', $join_behavior);

        return $this->getGsPrescriptieProducts($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsPrescriptieProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsJoinRedenHulpstofIdentificerendOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('RedenHulpstofIdentificerendOmschrijving', $join_behavior);

        return $this->getGsPrescriptieProducts($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsPrescriptieProducts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsJoinVerwijzingExtraKenmerkOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('VerwijzingExtraKenmerkOmschrijving', $join_behavior);

        return $this->getGsPrescriptieProducts($query, $con);
    }

    /**
     * Clears out the collGsVoorschrijfproductens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsNamen The current object (for fluent API support)
     * @see        addGsVoorschrijfproductens()
     */
    public function clearGsVoorschrijfproductens()
    {
        $this->collGsVoorschrijfproductens = null; // important to set this to null since that means it is uninitialized
        $this->collGsVoorschrijfproductensPartial = null;

        return $this;
    }

    /**
     * reset is the collGsVoorschrijfproductens collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsVoorschrijfproductens($v = true)
    {
        $this->collGsVoorschrijfproductensPartial = $v;
    }

    /**
     * Initializes the collGsVoorschrijfproductens collection.
     *
     * By default this just sets the collGsVoorschrijfproductens collection to an empty array (like clearcollGsVoorschrijfproductens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsVoorschrijfproductens($overrideExisting = true)
    {
        if (null !== $this->collGsVoorschrijfproductens && !$overrideExisting) {
            return;
        }
        $this->collGsVoorschrijfproductens = new PropelObjectCollection();
        $this->collGsVoorschrijfproductens->setModel('GsVoorschrijfproducten');
    }

    /**
     * Gets an array of GsVoorschrijfproducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsNamen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsVoorschrijfproducten[] List of GsVoorschrijfproducten objects
     * @throws PropelException
     */
    public function getGsVoorschrijfproductens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsVoorschrijfproductensPartial && !$this->isNew();
        if (null === $this->collGsVoorschrijfproductens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsVoorschrijfproductens) {
                // return empty collection
                $this->initGsVoorschrijfproductens();
            } else {
                $collGsVoorschrijfproductens = GsVoorschrijfproductenQuery::create(null, $criteria)
                    ->filterByGsNamen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsVoorschrijfproductensPartial && count($collGsVoorschrijfproductens)) {
                      $this->initGsVoorschrijfproductens(false);

                      foreach ($collGsVoorschrijfproductens as $obj) {
                        if (false == $this->collGsVoorschrijfproductens->contains($obj)) {
                          $this->collGsVoorschrijfproductens->append($obj);
                        }
                      }

                      $this->collGsVoorschrijfproductensPartial = true;
                    }

                    $collGsVoorschrijfproductens->getInternalIterator()->rewind();

                    return $collGsVoorschrijfproductens;
                }

                if ($partial && $this->collGsVoorschrijfproductens) {
                    foreach ($this->collGsVoorschrijfproductens as $obj) {
                        if ($obj->isNew()) {
                            $collGsVoorschrijfproductens[] = $obj;
                        }
                    }
                }

                $this->collGsVoorschrijfproductens = $collGsVoorschrijfproductens;
                $this->collGsVoorschrijfproductensPartial = false;
            }
        }

        return $this->collGsVoorschrijfproductens;
    }

    /**
     * Sets a collection of GsVoorschrijfproducten objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsVoorschrijfproductens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsNamen The current object (for fluent API support)
     */
    public function setGsVoorschrijfproductens(PropelCollection $gsVoorschrijfproductens, PropelPDO $con = null)
    {
        $gsVoorschrijfproductensToDelete = $this->getGsVoorschrijfproductens(new Criteria(), $con)->diff($gsVoorschrijfproductens);


        $this->gsVoorschrijfproductensScheduledForDeletion = $gsVoorschrijfproductensToDelete;

        foreach ($gsVoorschrijfproductensToDelete as $gsVoorschrijfproductenRemoved) {
            $gsVoorschrijfproductenRemoved->setGsNamen(null);
        }

        $this->collGsVoorschrijfproductens = null;
        foreach ($gsVoorschrijfproductens as $gsVoorschrijfproducten) {
            $this->addGsVoorschrijfproducten($gsVoorschrijfproducten);
        }

        $this->collGsVoorschrijfproductens = $gsVoorschrijfproductens;
        $this->collGsVoorschrijfproductensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsVoorschrijfproducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsVoorschrijfproducten objects.
     * @throws PropelException
     */
    public function countGsVoorschrijfproductens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsVoorschrijfproductensPartial && !$this->isNew();
        if (null === $this->collGsVoorschrijfproductens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsVoorschrijfproductens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsVoorschrijfproductens());
            }
            $query = GsVoorschrijfproductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsNamen($this)
                ->count($con);
        }

        return count($this->collGsVoorschrijfproductens);
    }

    /**
     * Method called to associate a GsVoorschrijfproducten object to this object
     * through the GsVoorschrijfproducten foreign key attribute.
     *
     * @param    GsVoorschrijfproducten $l GsVoorschrijfproducten
     * @return GsNamen The current object (for fluent API support)
     */
    public function addGsVoorschrijfproducten(GsVoorschrijfproducten $l)
    {
        if ($this->collGsVoorschrijfproductens === null) {
            $this->initGsVoorschrijfproductens();
            $this->collGsVoorschrijfproductensPartial = true;
        }

        if (!in_array($l, $this->collGsVoorschrijfproductens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsVoorschrijfproducten($l);

            if ($this->gsVoorschrijfproductensScheduledForDeletion and $this->gsVoorschrijfproductensScheduledForDeletion->contains($l)) {
                $this->gsVoorschrijfproductensScheduledForDeletion->remove($this->gsVoorschrijfproductensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsVoorschrijfproducten $gsVoorschrijfproducten The gsVoorschrijfproducten object to add.
     */
    protected function doAddGsVoorschrijfproducten($gsVoorschrijfproducten)
    {
        $this->collGsVoorschrijfproductens[]= $gsVoorschrijfproducten;
        $gsVoorschrijfproducten->setGsNamen($this);
    }

    /**
     * @param	GsVoorschrijfproducten $gsVoorschrijfproducten The gsVoorschrijfproducten object to remove.
     * @return GsNamen The current object (for fluent API support)
     */
    public function removeGsVoorschrijfproducten($gsVoorschrijfproducten)
    {
        if ($this->getGsVoorschrijfproductens()->contains($gsVoorschrijfproducten)) {
            $this->collGsVoorschrijfproductens->remove($this->collGsVoorschrijfproductens->search($gsVoorschrijfproducten));
            if (null === $this->gsVoorschrijfproductensScheduledForDeletion) {
                $this->gsVoorschrijfproductensScheduledForDeletion = clone $this->collGsVoorschrijfproductens;
                $this->gsVoorschrijfproductensScheduledForDeletion->clear();
            }
            $this->gsVoorschrijfproductensScheduledForDeletion[]= $gsVoorschrijfproducten;
            $gsVoorschrijfproducten->setGsNamen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNamen is new, it will return
     * an empty collection; or if this GsNamen has previously
     * been saved, it will retrieve related GsVoorschrijfproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsVoorschrijfproducten[] List of GsVoorschrijfproducten objects
     */
    public function getGsVoorschrijfproductensJoinGsVoorschrijfprGeneesmiddelIdentific($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsVoorschrijfproductenQuery::create(null, $criteria);
        $query->joinWith('GsVoorschrijfprGeneesmiddelIdentific', $join_behavior);

        return $this->getGsVoorschrijfproductens($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->naamnummer = null;
        $this->memokode = null;
        $this->etiketnaam = null;
        $this->korte_handelsnaam = null;
        $this->naam_volledig = null;
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
            if ($this->collGsArtikelens) {
                foreach ($this->collGsArtikelens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam) {
                foreach ($this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGeneriekeProductens) {
                foreach ($this->collGeneriekeProductens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsHandelsproductens) {
                foreach ($this->collGsHandelsproductens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsPrescriptieProducts) {
                foreach ($this->collGsPrescriptieProducts as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsVoorschrijfproductens) {
                foreach ($this->collGsVoorschrijfproductens as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collGsArtikelens instanceof PropelCollection) {
            $this->collGsArtikelens->clearIterator();
        }
        $this->collGsArtikelens = null;
        if ($this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam instanceof PropelCollection) {
            $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam->clearIterator();
        }
        $this->collGsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam = null;
        if ($this->collGeneriekeProductens instanceof PropelCollection) {
            $this->collGeneriekeProductens->clearIterator();
        }
        $this->collGeneriekeProductens = null;
        if ($this->collGsHandelsproductens instanceof PropelCollection) {
            $this->collGsHandelsproductens->clearIterator();
        }
        $this->collGsHandelsproductens = null;
        if ($this->collGsPrescriptieProducts instanceof PropelCollection) {
            $this->collGsPrescriptieProducts->clearIterator();
        }
        $this->collGsPrescriptieProducts = null;
        if ($this->collGsVoorschrijfproductens instanceof PropelCollection) {
            $this->collGsVoorschrijfproductens->clearIterator();
        }
        $this->collGsVoorschrijfproductens = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsNamenPeer::DEFAULT_STRING_FORMAT);
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
