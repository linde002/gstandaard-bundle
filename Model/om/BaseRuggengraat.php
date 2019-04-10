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
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodes;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProducten;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaard;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentific;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificQuery;
use PharmaIntelligence\GstandaardBundle\Model\Ruggengraat;
use PharmaIntelligence\GstandaardBundle\Model\RuggengraatPeer;
use PharmaIntelligence\GstandaardBundle\Model\RuggengraatQuery;

abstract class BaseRuggengraat extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\RuggengraatPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RuggengraatPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the zindex_nummer field.
     * @var        int
     */
    protected $zindex_nummer;

    /**
     * The value for the hpk field.
     * @var        int
     */
    protected $hpk;

    /**
     * The value for the prk field.
     * @var        int
     */
    protected $prk;

    /**
     * The value for the gpk field.
     * @var        int
     */
    protected $gpk;

    /**
     * The value for the atc field.
     * @var        string
     */
    protected $atc;

    /**
     * The value for the artikel_naam field.
     * @var        string
     */
    protected $artikel_naam;

    /**
     * The value for the hpk_naam field.
     * @var        string
     */
    protected $hpk_naam;

    /**
     * The value for the prk_naam field.
     * @var        string
     */
    protected $prk_naam;

    /**
     * The value for the gpk_naam field.
     * @var        string
     */
    protected $gpk_naam;

    /**
     * The value for the atc_naam field.
     * @var        string
     */
    protected $atc_naam;

    /**
     * The value for the leverancier_nummer field.
     * @var        int
     */
    protected $leverancier_nummer;

    /**
     * The value for the leverancier_naam field.
     * @var        string
     */
    protected $leverancier_naam;

    /**
     * @var        GsArtikelen
     */
    protected $aGsArtikelen;

    /**
     * @var        GsHandelsproducten
     */
    protected $aGsHandelsproducten;

    /**
     * @var        GsNawGegevensGstandaard
     */
    protected $aGsNawGegevensGstandaard;

    /**
     * @var        GsVoorschrijfprGeneesmiddelIdentific
     */
    protected $aGsVoorschrijfprGeneesmiddelIdentific;

    /**
     * @var        GsGeneriekeProducten
     */
    protected $aGsGeneriekeProducten;

    /**
     * @var        GsAtcCodes
     */
    protected $aGsAtcCodes;

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
     * Get the [zindex_nummer] column value.
     *
     * @return int
     */
    public function getZindexNummer()
    {

        return $this->zindex_nummer;
    }

    /**
     * Get the [hpk] column value.
     *
     * @return int
     */
    public function getHpk()
    {

        return $this->hpk;
    }

    /**
     * Get the [prk] column value.
     *
     * @return int
     */
    public function getPrk()
    {

        return $this->prk;
    }

    /**
     * Get the [gpk] column value.
     *
     * @return int
     */
    public function getGpk()
    {

        return $this->gpk;
    }

    /**
     * Get the [atc] column value.
     *
     * @return string
     */
    public function getAtc()
    {

        return $this->atc;
    }

    /**
     * Get the [artikel_naam] column value.
     *
     * @return string
     */
    public function getArtikelNaam()
    {

        return $this->artikel_naam;
    }

    /**
     * Get the [hpk_naam] column value.
     *
     * @return string
     */
    public function getHpkNaam()
    {

        return $this->hpk_naam;
    }

    /**
     * Get the [prk_naam] column value.
     *
     * @return string
     */
    public function getPrkNaam()
    {

        return $this->prk_naam;
    }

    /**
     * Get the [gpk_naam] column value.
     *
     * @return string
     */
    public function getGpkNaam()
    {

        return $this->gpk_naam;
    }

    /**
     * Get the [atc_naam] column value.
     *
     * @return string
     */
    public function getAtcNaam()
    {

        return $this->atc_naam;
    }

    /**
     * Get the [leverancier_nummer] column value.
     *
     * @return int
     */
    public function getLeverancierNummer()
    {

        return $this->leverancier_nummer;
    }

    /**
     * Get the [leverancier_naam] column value.
     *
     * @return string
     */
    public function getLeverancierNaam()
    {

        return $this->leverancier_naam;
    }

    /**
     * Set the value of [zindex_nummer] column.
     *
     * @param  int $v new value
     * @return Ruggengraat The current object (for fluent API support)
     */
    public function setZindexNummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zindex_nummer !== $v) {
            $this->zindex_nummer = $v;
            $this->modifiedColumns[] = RuggengraatPeer::ZINDEX_NUMMER;
        }

        if ($this->aGsArtikelen !== null && $this->aGsArtikelen->getZinummer() !== $v) {
            $this->aGsArtikelen = null;
        }


        return $this;
    } // setZindexNummer()

    /**
     * Set the value of [hpk] column.
     *
     * @param  int $v new value
     * @return Ruggengraat The current object (for fluent API support)
     */
    public function setHpk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hpk !== $v) {
            $this->hpk = $v;
            $this->modifiedColumns[] = RuggengraatPeer::HPK;
        }

        if ($this->aGsHandelsproducten !== null && $this->aGsHandelsproducten->getHandelsproduktkode() !== $v) {
            $this->aGsHandelsproducten = null;
        }


        return $this;
    } // setHpk()

    /**
     * Set the value of [prk] column.
     *
     * @param  int $v new value
     * @return Ruggengraat The current object (for fluent API support)
     */
    public function setPrk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->prk !== $v) {
            $this->prk = $v;
            $this->modifiedColumns[] = RuggengraatPeer::PRK;
        }

        if ($this->aGsVoorschrijfprGeneesmiddelIdentific !== null && $this->aGsVoorschrijfprGeneesmiddelIdentific->getPrkcode() !== $v) {
            $this->aGsVoorschrijfprGeneesmiddelIdentific = null;
        }


        return $this;
    } // setPrk()

    /**
     * Set the value of [gpk] column.
     *
     * @param  int $v new value
     * @return Ruggengraat The current object (for fluent API support)
     */
    public function setGpk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gpk !== $v) {
            $this->gpk = $v;
            $this->modifiedColumns[] = RuggengraatPeer::GPK;
        }

        if ($this->aGsGeneriekeProducten !== null && $this->aGsGeneriekeProducten->getGeneriekeproductcode() !== $v) {
            $this->aGsGeneriekeProducten = null;
        }


        return $this;
    } // setGpk()

    /**
     * Set the value of [atc] column.
     *
     * @param  string $v new value
     * @return Ruggengraat The current object (for fluent API support)
     */
    public function setAtc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->atc !== $v) {
            $this->atc = $v;
            $this->modifiedColumns[] = RuggengraatPeer::ATC;
        }

        if ($this->aGsAtcCodes !== null && $this->aGsAtcCodes->getAtccode() !== $v) {
            $this->aGsAtcCodes = null;
        }


        return $this;
    } // setAtc()

    /**
     * Set the value of [artikel_naam] column.
     *
     * @param  string $v new value
     * @return Ruggengraat The current object (for fluent API support)
     */
    public function setArtikelNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artikel_naam !== $v) {
            $this->artikel_naam = $v;
            $this->modifiedColumns[] = RuggengraatPeer::ARTIKEL_NAAM;
        }


        return $this;
    } // setArtikelNaam()

    /**
     * Set the value of [hpk_naam] column.
     *
     * @param  string $v new value
     * @return Ruggengraat The current object (for fluent API support)
     */
    public function setHpkNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hpk_naam !== $v) {
            $this->hpk_naam = $v;
            $this->modifiedColumns[] = RuggengraatPeer::HPK_NAAM;
        }


        return $this;
    } // setHpkNaam()

    /**
     * Set the value of [prk_naam] column.
     *
     * @param  string $v new value
     * @return Ruggengraat The current object (for fluent API support)
     */
    public function setPrkNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prk_naam !== $v) {
            $this->prk_naam = $v;
            $this->modifiedColumns[] = RuggengraatPeer::PRK_NAAM;
        }


        return $this;
    } // setPrkNaam()

    /**
     * Set the value of [gpk_naam] column.
     *
     * @param  string $v new value
     * @return Ruggengraat The current object (for fluent API support)
     */
    public function setGpkNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gpk_naam !== $v) {
            $this->gpk_naam = $v;
            $this->modifiedColumns[] = RuggengraatPeer::GPK_NAAM;
        }


        return $this;
    } // setGpkNaam()

    /**
     * Set the value of [atc_naam] column.
     *
     * @param  string $v new value
     * @return Ruggengraat The current object (for fluent API support)
     */
    public function setAtcNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->atc_naam !== $v) {
            $this->atc_naam = $v;
            $this->modifiedColumns[] = RuggengraatPeer::ATC_NAAM;
        }


        return $this;
    } // setAtcNaam()

    /**
     * Set the value of [leverancier_nummer] column.
     *
     * @param  int $v new value
     * @return Ruggengraat The current object (for fluent API support)
     */
    public function setLeverancierNummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->leverancier_nummer !== $v) {
            $this->leverancier_nummer = $v;
            $this->modifiedColumns[] = RuggengraatPeer::LEVERANCIER_NUMMER;
        }

        if ($this->aGsNawGegevensGstandaard !== null && $this->aGsNawGegevensGstandaard->getNawNummer() !== $v) {
            $this->aGsNawGegevensGstandaard = null;
        }


        return $this;
    } // setLeverancierNummer()

    /**
     * Set the value of [leverancier_naam] column.
     *
     * @param  string $v new value
     * @return Ruggengraat The current object (for fluent API support)
     */
    public function setLeverancierNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->leverancier_naam !== $v) {
            $this->leverancier_naam = $v;
            $this->modifiedColumns[] = RuggengraatPeer::LEVERANCIER_NAAM;
        }


        return $this;
    } // setLeverancierNaam()

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

            $this->zindex_nummer = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->hpk = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->prk = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->gpk = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->atc = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->artikel_naam = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->hpk_naam = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->prk_naam = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->gpk_naam = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->atc_naam = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->leverancier_nummer = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->leverancier_naam = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = RuggengraatPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Ruggengraat object", $e);
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
        if ($this->aGsHandelsproducten !== null && $this->hpk !== $this->aGsHandelsproducten->getHandelsproduktkode()) {
            $this->aGsHandelsproducten = null;
        }
        if ($this->aGsVoorschrijfprGeneesmiddelIdentific !== null && $this->prk !== $this->aGsVoorschrijfprGeneesmiddelIdentific->getPrkcode()) {
            $this->aGsVoorschrijfprGeneesmiddelIdentific = null;
        }
        if ($this->aGsGeneriekeProducten !== null && $this->gpk !== $this->aGsGeneriekeProducten->getGeneriekeproductcode()) {
            $this->aGsGeneriekeProducten = null;
        }
        if ($this->aGsAtcCodes !== null && $this->atc !== $this->aGsAtcCodes->getAtccode()) {
            $this->aGsAtcCodes = null;
        }
        if ($this->aGsNawGegevensGstandaard !== null && $this->leverancier_nummer !== $this->aGsNawGegevensGstandaard->getNawNummer()) {
            $this->aGsNawGegevensGstandaard = null;
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
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RuggengraatPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGsArtikelen = null;
            $this->aGsHandelsproducten = null;
            $this->aGsNawGegevensGstandaard = null;
            $this->aGsVoorschrijfprGeneesmiddelIdentific = null;
            $this->aGsGeneriekeProducten = null;
            $this->aGsAtcCodes = null;
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
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RuggengraatQuery::create()
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
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                RuggengraatPeer::addInstanceToPool($this);
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

            if ($this->aGsHandelsproducten !== null) {
                if ($this->aGsHandelsproducten->isModified() || $this->aGsHandelsproducten->isNew()) {
                    $affectedRows += $this->aGsHandelsproducten->save($con);
                }
                $this->setGsHandelsproducten($this->aGsHandelsproducten);
            }

            if ($this->aGsNawGegevensGstandaard !== null) {
                if ($this->aGsNawGegevensGstandaard->isModified() || $this->aGsNawGegevensGstandaard->isNew()) {
                    $affectedRows += $this->aGsNawGegevensGstandaard->save($con);
                }
                $this->setGsNawGegevensGstandaard($this->aGsNawGegevensGstandaard);
            }

            if ($this->aGsVoorschrijfprGeneesmiddelIdentific !== null) {
                if ($this->aGsVoorschrijfprGeneesmiddelIdentific->isModified() || $this->aGsVoorschrijfprGeneesmiddelIdentific->isNew()) {
                    $affectedRows += $this->aGsVoorschrijfprGeneesmiddelIdentific->save($con);
                }
                $this->setGsVoorschrijfprGeneesmiddelIdentific($this->aGsVoorschrijfprGeneesmiddelIdentific);
            }

            if ($this->aGsGeneriekeProducten !== null) {
                if ($this->aGsGeneriekeProducten->isModified() || $this->aGsGeneriekeProducten->isNew()) {
                    $affectedRows += $this->aGsGeneriekeProducten->save($con);
                }
                $this->setGsGeneriekeProducten($this->aGsGeneriekeProducten);
            }

            if ($this->aGsAtcCodes !== null) {
                if ($this->aGsAtcCodes->isModified() || $this->aGsAtcCodes->isNew()) {
                    $affectedRows += $this->aGsAtcCodes->save($con);
                }
                $this->setGsAtcCodes($this->aGsAtcCodes);
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
        if ($this->isColumnModified(RuggengraatPeer::ZINDEX_NUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`zindex_nummer`';
        }
        if ($this->isColumnModified(RuggengraatPeer::HPK)) {
            $modifiedColumns[':p' . $index++]  = '`hpk`';
        }
        if ($this->isColumnModified(RuggengraatPeer::PRK)) {
            $modifiedColumns[':p' . $index++]  = '`prk`';
        }
        if ($this->isColumnModified(RuggengraatPeer::GPK)) {
            $modifiedColumns[':p' . $index++]  = '`gpk`';
        }
        if ($this->isColumnModified(RuggengraatPeer::ATC)) {
            $modifiedColumns[':p' . $index++]  = '`atc`';
        }
        if ($this->isColumnModified(RuggengraatPeer::ARTIKEL_NAAM)) {
            $modifiedColumns[':p' . $index++]  = '`artikel_naam`';
        }
        if ($this->isColumnModified(RuggengraatPeer::HPK_NAAM)) {
            $modifiedColumns[':p' . $index++]  = '`hpk_naam`';
        }
        if ($this->isColumnModified(RuggengraatPeer::PRK_NAAM)) {
            $modifiedColumns[':p' . $index++]  = '`prk_naam`';
        }
        if ($this->isColumnModified(RuggengraatPeer::GPK_NAAM)) {
            $modifiedColumns[':p' . $index++]  = '`gpk_naam`';
        }
        if ($this->isColumnModified(RuggengraatPeer::ATC_NAAM)) {
            $modifiedColumns[':p' . $index++]  = '`atc_naam`';
        }
        if ($this->isColumnModified(RuggengraatPeer::LEVERANCIER_NUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`leverancier_nummer`';
        }
        if ($this->isColumnModified(RuggengraatPeer::LEVERANCIER_NAAM)) {
            $modifiedColumns[':p' . $index++]  = '`leverancier_naam`';
        }

        $sql = sprintf(
            'INSERT INTO `gstandaard_ruggengraat` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`zindex_nummer`':
                        $stmt->bindValue($identifier, $this->zindex_nummer, PDO::PARAM_INT);
                        break;
                    case '`hpk`':
                        $stmt->bindValue($identifier, $this->hpk, PDO::PARAM_INT);
                        break;
                    case '`prk`':
                        $stmt->bindValue($identifier, $this->prk, PDO::PARAM_INT);
                        break;
                    case '`gpk`':
                        $stmt->bindValue($identifier, $this->gpk, PDO::PARAM_INT);
                        break;
                    case '`atc`':
                        $stmt->bindValue($identifier, $this->atc, PDO::PARAM_STR);
                        break;
                    case '`artikel_naam`':
                        $stmt->bindValue($identifier, $this->artikel_naam, PDO::PARAM_STR);
                        break;
                    case '`hpk_naam`':
                        $stmt->bindValue($identifier, $this->hpk_naam, PDO::PARAM_STR);
                        break;
                    case '`prk_naam`':
                        $stmt->bindValue($identifier, $this->prk_naam, PDO::PARAM_STR);
                        break;
                    case '`gpk_naam`':
                        $stmt->bindValue($identifier, $this->gpk_naam, PDO::PARAM_STR);
                        break;
                    case '`atc_naam`':
                        $stmt->bindValue($identifier, $this->atc_naam, PDO::PARAM_STR);
                        break;
                    case '`leverancier_nummer`':
                        $stmt->bindValue($identifier, $this->leverancier_nummer, PDO::PARAM_INT);
                        break;
                    case '`leverancier_naam`':
                        $stmt->bindValue($identifier, $this->leverancier_naam, PDO::PARAM_STR);
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

            if ($this->aGsHandelsproducten !== null) {
                if (!$this->aGsHandelsproducten->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsHandelsproducten->getValidationFailures());
                }
            }

            if ($this->aGsNawGegevensGstandaard !== null) {
                if (!$this->aGsNawGegevensGstandaard->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsNawGegevensGstandaard->getValidationFailures());
                }
            }

            if ($this->aGsVoorschrijfprGeneesmiddelIdentific !== null) {
                if (!$this->aGsVoorschrijfprGeneesmiddelIdentific->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsVoorschrijfprGeneesmiddelIdentific->getValidationFailures());
                }
            }

            if ($this->aGsGeneriekeProducten !== null) {
                if (!$this->aGsGeneriekeProducten->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsGeneriekeProducten->getValidationFailures());
                }
            }

            if ($this->aGsAtcCodes !== null) {
                if (!$this->aGsAtcCodes->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsAtcCodes->getValidationFailures());
                }
            }


            if (($retval = RuggengraatPeer::doValidate($this, $columns)) !== true) {
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
        $pos = RuggengraatPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getZindexNummer();
                break;
            case 1:
                return $this->getHpk();
                break;
            case 2:
                return $this->getPrk();
                break;
            case 3:
                return $this->getGpk();
                break;
            case 4:
                return $this->getAtc();
                break;
            case 5:
                return $this->getArtikelNaam();
                break;
            case 6:
                return $this->getHpkNaam();
                break;
            case 7:
                return $this->getPrkNaam();
                break;
            case 8:
                return $this->getGpkNaam();
                break;
            case 9:
                return $this->getAtcNaam();
                break;
            case 10:
                return $this->getLeverancierNummer();
                break;
            case 11:
                return $this->getLeverancierNaam();
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
        if (isset($alreadyDumpedObjects['Ruggengraat'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Ruggengraat'][$this->getPrimaryKey()] = true;
        $keys = RuggengraatPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getZindexNummer(),
            $keys[1] => $this->getHpk(),
            $keys[2] => $this->getPrk(),
            $keys[3] => $this->getGpk(),
            $keys[4] => $this->getAtc(),
            $keys[5] => $this->getArtikelNaam(),
            $keys[6] => $this->getHpkNaam(),
            $keys[7] => $this->getPrkNaam(),
            $keys[8] => $this->getGpkNaam(),
            $keys[9] => $this->getAtcNaam(),
            $keys[10] => $this->getLeverancierNummer(),
            $keys[11] => $this->getLeverancierNaam(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aGsArtikelen) {
                $result['GsArtikelen'] = $this->aGsArtikelen->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aGsHandelsproducten) {
                $result['GsHandelsproducten'] = $this->aGsHandelsproducten->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aGsNawGegevensGstandaard) {
                $result['GsNawGegevensGstandaard'] = $this->aGsNawGegevensGstandaard->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aGsVoorschrijfprGeneesmiddelIdentific) {
                $result['GsVoorschrijfprGeneesmiddelIdentific'] = $this->aGsVoorschrijfprGeneesmiddelIdentific->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aGsGeneriekeProducten) {
                $result['GsGeneriekeProducten'] = $this->aGsGeneriekeProducten->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aGsAtcCodes) {
                $result['GsAtcCodes'] = $this->aGsAtcCodes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = RuggengraatPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setZindexNummer($value);
                break;
            case 1:
                $this->setHpk($value);
                break;
            case 2:
                $this->setPrk($value);
                break;
            case 3:
                $this->setGpk($value);
                break;
            case 4:
                $this->setAtc($value);
                break;
            case 5:
                $this->setArtikelNaam($value);
                break;
            case 6:
                $this->setHpkNaam($value);
                break;
            case 7:
                $this->setPrkNaam($value);
                break;
            case 8:
                $this->setGpkNaam($value);
                break;
            case 9:
                $this->setAtcNaam($value);
                break;
            case 10:
                $this->setLeverancierNummer($value);
                break;
            case 11:
                $this->setLeverancierNaam($value);
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
        $keys = RuggengraatPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setZindexNummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setHpk($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPrk($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setGpk($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAtc($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setArtikelNaam($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setHpkNaam($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPrkNaam($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setGpkNaam($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAtcNaam($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLeverancierNummer($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setLeverancierNaam($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RuggengraatPeer::DATABASE_NAME);

        if ($this->isColumnModified(RuggengraatPeer::ZINDEX_NUMMER)) $criteria->add(RuggengraatPeer::ZINDEX_NUMMER, $this->zindex_nummer);
        if ($this->isColumnModified(RuggengraatPeer::HPK)) $criteria->add(RuggengraatPeer::HPK, $this->hpk);
        if ($this->isColumnModified(RuggengraatPeer::PRK)) $criteria->add(RuggengraatPeer::PRK, $this->prk);
        if ($this->isColumnModified(RuggengraatPeer::GPK)) $criteria->add(RuggengraatPeer::GPK, $this->gpk);
        if ($this->isColumnModified(RuggengraatPeer::ATC)) $criteria->add(RuggengraatPeer::ATC, $this->atc);
        if ($this->isColumnModified(RuggengraatPeer::ARTIKEL_NAAM)) $criteria->add(RuggengraatPeer::ARTIKEL_NAAM, $this->artikel_naam);
        if ($this->isColumnModified(RuggengraatPeer::HPK_NAAM)) $criteria->add(RuggengraatPeer::HPK_NAAM, $this->hpk_naam);
        if ($this->isColumnModified(RuggengraatPeer::PRK_NAAM)) $criteria->add(RuggengraatPeer::PRK_NAAM, $this->prk_naam);
        if ($this->isColumnModified(RuggengraatPeer::GPK_NAAM)) $criteria->add(RuggengraatPeer::GPK_NAAM, $this->gpk_naam);
        if ($this->isColumnModified(RuggengraatPeer::ATC_NAAM)) $criteria->add(RuggengraatPeer::ATC_NAAM, $this->atc_naam);
        if ($this->isColumnModified(RuggengraatPeer::LEVERANCIER_NUMMER)) $criteria->add(RuggengraatPeer::LEVERANCIER_NUMMER, $this->leverancier_nummer);
        if ($this->isColumnModified(RuggengraatPeer::LEVERANCIER_NAAM)) $criteria->add(RuggengraatPeer::LEVERANCIER_NAAM, $this->leverancier_naam);

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
        $criteria = new Criteria(RuggengraatPeer::DATABASE_NAME);
        $criteria->add(RuggengraatPeer::ZINDEX_NUMMER, $this->zindex_nummer);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getZindexNummer();
    }

    /**
     * Generic method to set the primary key (zindex_nummer column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setZindexNummer($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getZindexNummer();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Ruggengraat (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setHpk($this->getHpk());
        $copyObj->setPrk($this->getPrk());
        $copyObj->setGpk($this->getGpk());
        $copyObj->setAtc($this->getAtc());
        $copyObj->setArtikelNaam($this->getArtikelNaam());
        $copyObj->setHpkNaam($this->getHpkNaam());
        $copyObj->setPrkNaam($this->getPrkNaam());
        $copyObj->setGpkNaam($this->getGpkNaam());
        $copyObj->setAtcNaam($this->getAtcNaam());
        $copyObj->setLeverancierNummer($this->getLeverancierNummer());
        $copyObj->setLeverancierNaam($this->getLeverancierNaam());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            $relObj = $this->getGsArtikelen();
            if ($relObj) {
                $copyObj->setGsArtikelen($relObj->copy($deepCopy));
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setZindexNummer(NULL); // this is a auto-increment column, so set to default value
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
     * @return Ruggengraat Clone of current object.
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
     * @return RuggengraatPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RuggengraatPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsArtikelen object.
     *
     * @param                  GsArtikelen $v
     * @return Ruggengraat The current object (for fluent API support)
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

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setRuggengraat($this);
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
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aGsArtikelen->setRuggengraat($this);
        }

        return $this->aGsArtikelen;
    }

    /**
     * Declares an association between this object and a GsHandelsproducten object.
     *
     * @param                  GsHandelsproducten $v
     * @return Ruggengraat The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsHandelsproducten(GsHandelsproducten $v = null)
    {
        if ($v === null) {
            $this->setHpk(NULL);
        } else {
            $this->setHpk($v->getHandelsproduktkode());
        }

        $this->aGsHandelsproducten = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsHandelsproducten object, it will not be re-added.
        if ($v !== null) {
            $v->addRuggengraat($this);
        }


        return $this;
    }


    /**
     * Get the associated GsHandelsproducten object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsHandelsproducten The associated GsHandelsproducten object.
     * @throws PropelException
     */
    public function getGsHandelsproducten(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsHandelsproducten === null && ($this->hpk !== null) && $doQuery) {
            $this->aGsHandelsproducten = GsHandelsproductenQuery::create()->findPk($this->hpk, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsHandelsproducten->addRuggengraats($this);
             */
        }

        return $this->aGsHandelsproducten;
    }

    /**
     * Declares an association between this object and a GsNawGegevensGstandaard object.
     *
     * @param                  GsNawGegevensGstandaard $v
     * @return Ruggengraat The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsNawGegevensGstandaard(GsNawGegevensGstandaard $v = null)
    {
        if ($v === null) {
            $this->setLeverancierNummer(NULL);
        } else {
            $this->setLeverancierNummer($v->getNawNummer());
        }

        $this->aGsNawGegevensGstandaard = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsNawGegevensGstandaard object, it will not be re-added.
        if ($v !== null) {
            $v->addRuggengraat($this);
        }


        return $this;
    }


    /**
     * Get the associated GsNawGegevensGstandaard object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsNawGegevensGstandaard The associated GsNawGegevensGstandaard object.
     * @throws PropelException
     */
    public function getGsNawGegevensGstandaard(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsNawGegevensGstandaard === null && ($this->leverancier_nummer !== null) && $doQuery) {
            $this->aGsNawGegevensGstandaard = GsNawGegevensGstandaardQuery::create()
                ->filterByRuggengraat($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsNawGegevensGstandaard->addRuggengraats($this);
             */
        }

        return $this->aGsNawGegevensGstandaard;
    }

    /**
     * Declares an association between this object and a GsVoorschrijfprGeneesmiddelIdentific object.
     *
     * @param                  GsVoorschrijfprGeneesmiddelIdentific $v
     * @return Ruggengraat The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsVoorschrijfprGeneesmiddelIdentific(GsVoorschrijfprGeneesmiddelIdentific $v = null)
    {
        if ($v === null) {
            $this->setPrk(NULL);
        } else {
            $this->setPrk($v->getPrkcode());
        }

        $this->aGsVoorschrijfprGeneesmiddelIdentific = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsVoorschrijfprGeneesmiddelIdentific object, it will not be re-added.
        if ($v !== null) {
            $v->addRuggengraat($this);
        }


        return $this;
    }


    /**
     * Get the associated GsVoorschrijfprGeneesmiddelIdentific object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsVoorschrijfprGeneesmiddelIdentific The associated GsVoorschrijfprGeneesmiddelIdentific object.
     * @throws PropelException
     */
    public function getGsVoorschrijfprGeneesmiddelIdentific(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsVoorschrijfprGeneesmiddelIdentific === null && ($this->prk !== null) && $doQuery) {
            $this->aGsVoorschrijfprGeneesmiddelIdentific = GsVoorschrijfprGeneesmiddelIdentificQuery::create()->findPk($this->prk, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsVoorschrijfprGeneesmiddelIdentific->addRuggengraats($this);
             */
        }

        return $this->aGsVoorschrijfprGeneesmiddelIdentific;
    }

    /**
     * Declares an association between this object and a GsGeneriekeProducten object.
     *
     * @param                  GsGeneriekeProducten $v
     * @return Ruggengraat The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsGeneriekeProducten(GsGeneriekeProducten $v = null)
    {
        if ($v === null) {
            $this->setGpk(NULL);
        } else {
            $this->setGpk($v->getGeneriekeproductcode());
        }

        $this->aGsGeneriekeProducten = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsGeneriekeProducten object, it will not be re-added.
        if ($v !== null) {
            $v->addRuggengraat($this);
        }


        return $this;
    }


    /**
     * Get the associated GsGeneriekeProducten object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsGeneriekeProducten The associated GsGeneriekeProducten object.
     * @throws PropelException
     */
    public function getGsGeneriekeProducten(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsGeneriekeProducten === null && ($this->gpk !== null) && $doQuery) {
            $this->aGsGeneriekeProducten = GsGeneriekeProductenQuery::create()->findPk($this->gpk, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsGeneriekeProducten->addRuggengraats($this);
             */
        }

        return $this->aGsGeneriekeProducten;
    }

    /**
     * Declares an association between this object and a GsAtcCodes object.
     *
     * @param                  GsAtcCodes $v
     * @return Ruggengraat The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsAtcCodes(GsAtcCodes $v = null)
    {
        if ($v === null) {
            $this->setAtc(NULL);
        } else {
            $this->setAtc($v->getAtccode());
        }

        $this->aGsAtcCodes = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsAtcCodes object, it will not be re-added.
        if ($v !== null) {
            $v->addRuggengraat($this);
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
        if ($this->aGsAtcCodes === null && (($this->atc !== "" && $this->atc !== null)) && $doQuery) {
            $this->aGsAtcCodes = GsAtcCodesQuery::create()->findPk($this->atc, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsAtcCodes->addRuggengraats($this);
             */
        }

        return $this->aGsAtcCodes;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->zindex_nummer = null;
        $this->hpk = null;
        $this->prk = null;
        $this->gpk = null;
        $this->atc = null;
        $this->artikel_naam = null;
        $this->hpk_naam = null;
        $this->prk_naam = null;
        $this->gpk_naam = null;
        $this->atc_naam = null;
        $this->leverancier_nummer = null;
        $this->leverancier_naam = null;
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
            if ($this->aGsHandelsproducten instanceof Persistent) {
              $this->aGsHandelsproducten->clearAllReferences($deep);
            }
            if ($this->aGsNawGegevensGstandaard instanceof Persistent) {
              $this->aGsNawGegevensGstandaard->clearAllReferences($deep);
            }
            if ($this->aGsVoorschrijfprGeneesmiddelIdentific instanceof Persistent) {
              $this->aGsVoorschrijfprGeneesmiddelIdentific->clearAllReferences($deep);
            }
            if ($this->aGsGeneriekeProducten instanceof Persistent) {
              $this->aGsGeneriekeProducten->clearAllReferences($deep);
            }
            if ($this->aGsAtcCodes instanceof Persistent) {
              $this->aGsAtcCodes->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aGsArtikelen = null;
        $this->aGsHandelsproducten = null;
        $this->aGsNawGegevensGstandaard = null;
        $this->aGsVoorschrijfprGeneesmiddelIdentific = null;
        $this->aGsGeneriekeProducten = null;
        $this->aGsAtcCodes = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(RuggengraatPeer::DEFAULT_STRING_FORMAT);
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
