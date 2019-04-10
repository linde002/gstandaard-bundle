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
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeNamen;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeNamenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingen;
use PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery;

abstract class BaseGsIngegevenSamenstellingen extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsIngegevenSamenstellingenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsIngegevenSamenstellingenPeer
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
     * The value for the handelsproduktkode field.
     * @var        int
     */
    protected $handelsproduktkode;

    /**
     * The value for the volgnummer field.
     * @var        int
     */
    protected $volgnummer;

    /**
     * The value for the aanduiding_werkzaamhulpstof field.
     * @var        string
     */
    protected $aanduiding_werkzaamhulpstof;

    /**
     * The value for the generiekenaamkode field.
     * @var        int
     */
    protected $generiekenaamkode;

    /**
     * The value for the hoeveelheid_werkzame_stof field.
     * @var        string
     */
    protected $hoeveelheid_werkzame_stof;

    /**
     * The value for the eenh_hvh_werkzstof_thesaurus_1 field.
     * @var        int
     */
    protected $eenh_hvh_werkzstof_thesaurus_1;

    /**
     * The value for the eenhhoeveelheid_werkzame_stof_kode field.
     * @var        int
     */
    protected $eenhhoeveelheid_werkzame_stof_kode;

    /**
     * The value for the stamnaamcode field.
     * @var        int
     */
    protected $stamnaamcode;

    /**
     * The value for the stamtoedieningsweg_thesaurus_58 field.
     * @var        int
     */
    protected $stamtoedieningsweg_thesaurus_58;

    /**
     * The value for the stamtoedieningsweg_code field.
     * @var        int
     */
    protected $stamtoedieningsweg_code;

    /**
     * @var        GsHandelsproducten
     */
    protected $aGsHandelsproducten;

    /**
     * @var        GsGeneriekeNamen
     */
    protected $aGsGeneriekeNamen;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aEenheidHoeveelheidOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aStamtoedieningswegOmschrijving;

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
     * Get the [handelsproduktkode] column value.
     *
     * @return int
     */
    public function getHandelsproduktkode()
    {

        return $this->handelsproduktkode;
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
     * Get the [aanduiding_werkzaamhulpstof] column value.
     *
     * @return string
     */
    public function getAanduidingWerkzaamhulpstof()
    {

        return $this->aanduiding_werkzaamhulpstof;
    }

    /**
     * Get the [generiekenaamkode] column value.
     *
     * @return int
     */
    public function getGeneriekenaamkode()
    {

        return $this->generiekenaamkode;
    }

    /**
     * Get the [hoeveelheid_werkzame_stof] column value.
     *
     * @return string
     */
    public function getHoeveelheidWerkzameStof()
    {

        return $this->hoeveelheid_werkzame_stof;
    }

    /**
     * Get the [eenh_hvh_werkzstof_thesaurus_1] column value.
     *
     * @return int
     */
    public function getEenhHvhWerkzstofThesaurus1()
    {

        return $this->eenh_hvh_werkzstof_thesaurus_1;
    }

    /**
     * Get the [eenhhoeveelheid_werkzame_stof_kode] column value.
     *
     * @return int
     */
    public function getEenhhoeveelheidWerkzameStofKode()
    {

        return $this->eenhhoeveelheid_werkzame_stof_kode;
    }

    /**
     * Get the [stamnaamcode] column value.
     *
     * @return int
     */
    public function getStamnaamcode()
    {

        return $this->stamnaamcode;
    }

    /**
     * Get the [stamtoedieningsweg_thesaurus_58] column value.
     *
     * @return int
     */
    public function getStamtoedieningswegThesaurus58()
    {

        return $this->stamtoedieningsweg_thesaurus_58;
    }

    /**
     * Get the [stamtoedieningsweg_code] column value.
     *
     * @return int
     */
    public function getStamtoedieningswegCode()
    {

        return $this->stamtoedieningsweg_code;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsIngegevenSamenstellingen The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsIngegevenSamenstellingenPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsIngegevenSamenstellingen The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsIngegevenSamenstellingenPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [handelsproduktkode] column.
     *
     * @param  int $v new value
     * @return GsIngegevenSamenstellingen The current object (for fluent API support)
     */
    public function setHandelsproduktkode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->handelsproduktkode !== $v) {
            $this->handelsproduktkode = $v;
            $this->modifiedColumns[] = GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE;
        }

        if ($this->aGsHandelsproducten !== null && $this->aGsHandelsproducten->getHandelsproduktkode() !== $v) {
            $this->aGsHandelsproducten = null;
        }


        return $this;
    } // setHandelsproduktkode()

    /**
     * Set the value of [volgnummer] column.
     *
     * @param  int $v new value
     * @return GsIngegevenSamenstellingen The current object (for fluent API support)
     */
    public function setVolgnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->volgnummer !== $v) {
            $this->volgnummer = $v;
            $this->modifiedColumns[] = GsIngegevenSamenstellingenPeer::VOLGNUMMER;
        }


        return $this;
    } // setVolgnummer()

    /**
     * Set the value of [aanduiding_werkzaamhulpstof] column.
     *
     * @param  string $v new value
     * @return GsIngegevenSamenstellingen The current object (for fluent API support)
     */
    public function setAanduidingWerkzaamhulpstof($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aanduiding_werkzaamhulpstof !== $v) {
            $this->aanduiding_werkzaamhulpstof = $v;
            $this->modifiedColumns[] = GsIngegevenSamenstellingenPeer::AANDUIDING_WERKZAAMHULPSTOF;
        }


        return $this;
    } // setAanduidingWerkzaamhulpstof()

    /**
     * Set the value of [generiekenaamkode] column.
     *
     * @param  int $v new value
     * @return GsIngegevenSamenstellingen The current object (for fluent API support)
     */
    public function setGeneriekenaamkode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->generiekenaamkode !== $v) {
            $this->generiekenaamkode = $v;
            $this->modifiedColumns[] = GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE;
        }

        if ($this->aGsGeneriekeNamen !== null && $this->aGsGeneriekeNamen->getGeneriekenaamkode() !== $v) {
            $this->aGsGeneriekeNamen = null;
        }


        return $this;
    } // setGeneriekenaamkode()

    /**
     * Set the value of [hoeveelheid_werkzame_stof] column.
     *
     * @param  string $v new value
     * @return GsIngegevenSamenstellingen The current object (for fluent API support)
     */
    public function setHoeveelheidWerkzameStof($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hoeveelheid_werkzame_stof !== $v) {
            $this->hoeveelheid_werkzame_stof = $v;
            $this->modifiedColumns[] = GsIngegevenSamenstellingenPeer::HOEVEELHEID_WERKZAME_STOF;
        }


        return $this;
    } // setHoeveelheidWerkzameStof()

    /**
     * Set the value of [eenh_hvh_werkzstof_thesaurus_1] column.
     *
     * @param  int $v new value
     * @return GsIngegevenSamenstellingen The current object (for fluent API support)
     */
    public function setEenhHvhWerkzstofThesaurus1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eenh_hvh_werkzstof_thesaurus_1 !== $v) {
            $this->eenh_hvh_werkzstof_thesaurus_1 = $v;
            $this->modifiedColumns[] = GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1;
        }

        if ($this->aEenheidHoeveelheidOmschrijving !== null && $this->aEenheidHoeveelheidOmschrijving->getThesaurusnummer() !== $v) {
            $this->aEenheidHoeveelheidOmschrijving = null;
        }


        return $this;
    } // setEenhHvhWerkzstofThesaurus1()

    /**
     * Set the value of [eenhhoeveelheid_werkzame_stof_kode] column.
     *
     * @param  int $v new value
     * @return GsIngegevenSamenstellingen The current object (for fluent API support)
     */
    public function setEenhhoeveelheidWerkzameStofKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->eenhhoeveelheid_werkzame_stof_kode !== $v) {
            $this->eenhhoeveelheid_werkzame_stof_kode = $v;
            $this->modifiedColumns[] = GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE;
        }

        if ($this->aEenheidHoeveelheidOmschrijving !== null && $this->aEenheidHoeveelheidOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aEenheidHoeveelheidOmschrijving = null;
        }


        return $this;
    } // setEenhhoeveelheidWerkzameStofKode()

    /**
     * Set the value of [stamnaamcode] column.
     *
     * @param  int $v new value
     * @return GsIngegevenSamenstellingen The current object (for fluent API support)
     */
    public function setStamnaamcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stamnaamcode !== $v) {
            $this->stamnaamcode = $v;
            $this->modifiedColumns[] = GsIngegevenSamenstellingenPeer::STAMNAAMCODE;
        }


        return $this;
    } // setStamnaamcode()

    /**
     * Set the value of [stamtoedieningsweg_thesaurus_58] column.
     *
     * @param  int $v new value
     * @return GsIngegevenSamenstellingen The current object (for fluent API support)
     */
    public function setStamtoedieningswegThesaurus58($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stamtoedieningsweg_thesaurus_58 !== $v) {
            $this->stamtoedieningsweg_thesaurus_58 = $v;
            $this->modifiedColumns[] = GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58;
        }

        if ($this->aStamtoedieningswegOmschrijving !== null && $this->aStamtoedieningswegOmschrijving->getThesaurusnummer() !== $v) {
            $this->aStamtoedieningswegOmschrijving = null;
        }


        return $this;
    } // setStamtoedieningswegThesaurus58()

    /**
     * Set the value of [stamtoedieningsweg_code] column.
     *
     * @param  int $v new value
     * @return GsIngegevenSamenstellingen The current object (for fluent API support)
     */
    public function setStamtoedieningswegCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stamtoedieningsweg_code !== $v) {
            $this->stamtoedieningsweg_code = $v;
            $this->modifiedColumns[] = GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE;
        }

        if ($this->aStamtoedieningswegOmschrijving !== null && $this->aStamtoedieningswegOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aStamtoedieningswegOmschrijving = null;
        }


        return $this;
    } // setStamtoedieningswegCode()

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
            $this->handelsproduktkode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->volgnummer = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->aanduiding_werkzaamhulpstof = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->generiekenaamkode = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->hoeveelheid_werkzame_stof = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->eenh_hvh_werkzstof_thesaurus_1 = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->eenhhoeveelheid_werkzame_stof_kode = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->stamnaamcode = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->stamtoedieningsweg_thesaurus_58 = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->stamtoedieningsweg_code = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = GsIngegevenSamenstellingenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsIngegevenSamenstellingen object", $e);
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

        if ($this->aGsHandelsproducten !== null && $this->handelsproduktkode !== $this->aGsHandelsproducten->getHandelsproduktkode()) {
            $this->aGsHandelsproducten = null;
        }
        if ($this->aGsGeneriekeNamen !== null && $this->generiekenaamkode !== $this->aGsGeneriekeNamen->getGeneriekenaamkode()) {
            $this->aGsGeneriekeNamen = null;
        }
        if ($this->aEenheidHoeveelheidOmschrijving !== null && $this->eenh_hvh_werkzstof_thesaurus_1 !== $this->aEenheidHoeveelheidOmschrijving->getThesaurusnummer()) {
            $this->aEenheidHoeveelheidOmschrijving = null;
        }
        if ($this->aEenheidHoeveelheidOmschrijving !== null && $this->eenhhoeveelheid_werkzame_stof_kode !== $this->aEenheidHoeveelheidOmschrijving->getThesaurusItemnummer()) {
            $this->aEenheidHoeveelheidOmschrijving = null;
        }
        if ($this->aStamtoedieningswegOmschrijving !== null && $this->stamtoedieningsweg_thesaurus_58 !== $this->aStamtoedieningswegOmschrijving->getThesaurusnummer()) {
            $this->aStamtoedieningswegOmschrijving = null;
        }
        if ($this->aStamtoedieningswegOmschrijving !== null && $this->stamtoedieningsweg_code !== $this->aStamtoedieningswegOmschrijving->getThesaurusItemnummer()) {
            $this->aStamtoedieningswegOmschrijving = null;
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
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsIngegevenSamenstellingenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGsHandelsproducten = null;
            $this->aGsGeneriekeNamen = null;
            $this->aEenheidHoeveelheidOmschrijving = null;
            $this->aStamtoedieningswegOmschrijving = null;
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
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsIngegevenSamenstellingenQuery::create()
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
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsIngegevenSamenstellingenPeer::addInstanceToPool($this);
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

            if ($this->aGsHandelsproducten !== null) {
                if ($this->aGsHandelsproducten->isModified() || $this->aGsHandelsproducten->isNew()) {
                    $affectedRows += $this->aGsHandelsproducten->save($con);
                }
                $this->setGsHandelsproducten($this->aGsHandelsproducten);
            }

            if ($this->aGsGeneriekeNamen !== null) {
                if ($this->aGsGeneriekeNamen->isModified() || $this->aGsGeneriekeNamen->isNew()) {
                    $affectedRows += $this->aGsGeneriekeNamen->save($con);
                }
                $this->setGsGeneriekeNamen($this->aGsGeneriekeNamen);
            }

            if ($this->aEenheidHoeveelheidOmschrijving !== null) {
                if ($this->aEenheidHoeveelheidOmschrijving->isModified() || $this->aEenheidHoeveelheidOmschrijving->isNew()) {
                    $affectedRows += $this->aEenheidHoeveelheidOmschrijving->save($con);
                }
                $this->setEenheidHoeveelheidOmschrijving($this->aEenheidHoeveelheidOmschrijving);
            }

            if ($this->aStamtoedieningswegOmschrijving !== null) {
                if ($this->aStamtoedieningswegOmschrijving->isModified() || $this->aStamtoedieningswegOmschrijving->isNew()) {
                    $affectedRows += $this->aStamtoedieningswegOmschrijving->save($con);
                }
                $this->setStamtoedieningswegOmschrijving($this->aStamtoedieningswegOmschrijving);
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
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE)) {
            $modifiedColumns[':p' . $index++]  = '`handelsproduktkode`';
        }
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::VOLGNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`volgnummer`';
        }
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::AANDUIDING_WERKZAAMHULPSTOF)) {
            $modifiedColumns[':p' . $index++]  = '`aanduiding_werkzaamhulpstof`';
        }
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE)) {
            $modifiedColumns[':p' . $index++]  = '`generiekenaamkode`';
        }
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::HOEVEELHEID_WERKZAME_STOF)) {
            $modifiedColumns[':p' . $index++]  = '`hoeveelheid_werkzame_stof`';
        }
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1)) {
            $modifiedColumns[':p' . $index++]  = '`eenh_hvh_werkzstof_thesaurus_1`';
        }
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`eenhhoeveelheid_werkzame_stof_kode`';
        }
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::STAMNAAMCODE)) {
            $modifiedColumns[':p' . $index++]  = '`stamnaamcode`';
        }
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58)) {
            $modifiedColumns[':p' . $index++]  = '`stamtoedieningsweg_thesaurus_58`';
        }
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`stamtoedieningsweg_code`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_ingegeven_samenstellingen` (%s) VALUES (%s)',
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
                    case '`handelsproduktkode`':
                        $stmt->bindValue($identifier, $this->handelsproduktkode, PDO::PARAM_INT);
                        break;
                    case '`volgnummer`':
                        $stmt->bindValue($identifier, $this->volgnummer, PDO::PARAM_INT);
                        break;
                    case '`aanduiding_werkzaamhulpstof`':
                        $stmt->bindValue($identifier, $this->aanduiding_werkzaamhulpstof, PDO::PARAM_STR);
                        break;
                    case '`generiekenaamkode`':
                        $stmt->bindValue($identifier, $this->generiekenaamkode, PDO::PARAM_INT);
                        break;
                    case '`hoeveelheid_werkzame_stof`':
                        $stmt->bindValue($identifier, $this->hoeveelheid_werkzame_stof, PDO::PARAM_STR);
                        break;
                    case '`eenh_hvh_werkzstof_thesaurus_1`':
                        $stmt->bindValue($identifier, $this->eenh_hvh_werkzstof_thesaurus_1, PDO::PARAM_INT);
                        break;
                    case '`eenhhoeveelheid_werkzame_stof_kode`':
                        $stmt->bindValue($identifier, $this->eenhhoeveelheid_werkzame_stof_kode, PDO::PARAM_INT);
                        break;
                    case '`stamnaamcode`':
                        $stmt->bindValue($identifier, $this->stamnaamcode, PDO::PARAM_INT);
                        break;
                    case '`stamtoedieningsweg_thesaurus_58`':
                        $stmt->bindValue($identifier, $this->stamtoedieningsweg_thesaurus_58, PDO::PARAM_INT);
                        break;
                    case '`stamtoedieningsweg_code`':
                        $stmt->bindValue($identifier, $this->stamtoedieningsweg_code, PDO::PARAM_INT);
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

            if ($this->aGsHandelsproducten !== null) {
                if (!$this->aGsHandelsproducten->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsHandelsproducten->getValidationFailures());
                }
            }

            if ($this->aGsGeneriekeNamen !== null) {
                if (!$this->aGsGeneriekeNamen->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsGeneriekeNamen->getValidationFailures());
                }
            }

            if ($this->aEenheidHoeveelheidOmschrijving !== null) {
                if (!$this->aEenheidHoeveelheidOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEenheidHoeveelheidOmschrijving->getValidationFailures());
                }
            }

            if ($this->aStamtoedieningswegOmschrijving !== null) {
                if (!$this->aStamtoedieningswegOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aStamtoedieningswegOmschrijving->getValidationFailures());
                }
            }


            if (($retval = GsIngegevenSamenstellingenPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsIngegevenSamenstellingenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getHandelsproduktkode();
                break;
            case 3:
                return $this->getVolgnummer();
                break;
            case 4:
                return $this->getAanduidingWerkzaamhulpstof();
                break;
            case 5:
                return $this->getGeneriekenaamkode();
                break;
            case 6:
                return $this->getHoeveelheidWerkzameStof();
                break;
            case 7:
                return $this->getEenhHvhWerkzstofThesaurus1();
                break;
            case 8:
                return $this->getEenhhoeveelheidWerkzameStofKode();
                break;
            case 9:
                return $this->getStamnaamcode();
                break;
            case 10:
                return $this->getStamtoedieningswegThesaurus58();
                break;
            case 11:
                return $this->getStamtoedieningswegCode();
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
        if (isset($alreadyDumpedObjects['GsIngegevenSamenstellingen'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsIngegevenSamenstellingen'][serialize($this->getPrimaryKey())] = true;
        $keys = GsIngegevenSamenstellingenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getHandelsproduktkode(),
            $keys[3] => $this->getVolgnummer(),
            $keys[4] => $this->getAanduidingWerkzaamhulpstof(),
            $keys[5] => $this->getGeneriekenaamkode(),
            $keys[6] => $this->getHoeveelheidWerkzameStof(),
            $keys[7] => $this->getEenhHvhWerkzstofThesaurus1(),
            $keys[8] => $this->getEenhhoeveelheidWerkzameStofKode(),
            $keys[9] => $this->getStamnaamcode(),
            $keys[10] => $this->getStamtoedieningswegThesaurus58(),
            $keys[11] => $this->getStamtoedieningswegCode(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aGsHandelsproducten) {
                $result['GsHandelsproducten'] = $this->aGsHandelsproducten->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aGsGeneriekeNamen) {
                $result['GsGeneriekeNamen'] = $this->aGsGeneriekeNamen->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEenheidHoeveelheidOmschrijving) {
                $result['EenheidHoeveelheidOmschrijving'] = $this->aEenheidHoeveelheidOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aStamtoedieningswegOmschrijving) {
                $result['StamtoedieningswegOmschrijving'] = $this->aStamtoedieningswegOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = GsIngegevenSamenstellingenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setHandelsproduktkode($value);
                break;
            case 3:
                $this->setVolgnummer($value);
                break;
            case 4:
                $this->setAanduidingWerkzaamhulpstof($value);
                break;
            case 5:
                $this->setGeneriekenaamkode($value);
                break;
            case 6:
                $this->setHoeveelheidWerkzameStof($value);
                break;
            case 7:
                $this->setEenhHvhWerkzstofThesaurus1($value);
                break;
            case 8:
                $this->setEenhhoeveelheidWerkzameStofKode($value);
                break;
            case 9:
                $this->setStamnaamcode($value);
                break;
            case 10:
                $this->setStamtoedieningswegThesaurus58($value);
                break;
            case 11:
                $this->setStamtoedieningswegCode($value);
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
        $keys = GsIngegevenSamenstellingenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setHandelsproduktkode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setVolgnummer($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAanduidingWerkzaamhulpstof($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setGeneriekenaamkode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setHoeveelheidWerkzameStof($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEenhHvhWerkzstofThesaurus1($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEenhhoeveelheidWerkzameStofKode($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setStamnaamcode($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setStamtoedieningswegThesaurus58($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setStamtoedieningswegCode($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsIngegevenSamenstellingenPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::BESTANDNUMMER)) $criteria->add(GsIngegevenSamenstellingenPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::MUTATIEKODE)) $criteria->add(GsIngegevenSamenstellingenPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE)) $criteria->add(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, $this->handelsproduktkode);
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::VOLGNUMMER)) $criteria->add(GsIngegevenSamenstellingenPeer::VOLGNUMMER, $this->volgnummer);
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::AANDUIDING_WERKZAAMHULPSTOF)) $criteria->add(GsIngegevenSamenstellingenPeer::AANDUIDING_WERKZAAMHULPSTOF, $this->aanduiding_werkzaamhulpstof);
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE)) $criteria->add(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE, $this->generiekenaamkode);
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::HOEVEELHEID_WERKZAME_STOF)) $criteria->add(GsIngegevenSamenstellingenPeer::HOEVEELHEID_WERKZAME_STOF, $this->hoeveelheid_werkzame_stof);
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1)) $criteria->add(GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1, $this->eenh_hvh_werkzstof_thesaurus_1);
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE)) $criteria->add(GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE, $this->eenhhoeveelheid_werkzame_stof_kode);
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::STAMNAAMCODE)) $criteria->add(GsIngegevenSamenstellingenPeer::STAMNAAMCODE, $this->stamnaamcode);
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58)) $criteria->add(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, $this->stamtoedieningsweg_thesaurus_58);
        if ($this->isColumnModified(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE)) $criteria->add(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE, $this->stamtoedieningsweg_code);

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
        $criteria = new Criteria(GsIngegevenSamenstellingenPeer::DATABASE_NAME);
        $criteria->add(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, $this->handelsproduktkode);
        $criteria->add(GsIngegevenSamenstellingenPeer::VOLGNUMMER, $this->volgnummer);

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
        $pks[0] = $this->getHandelsproduktkode();
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
        $this->setHandelsproduktkode($keys[0]);
        $this->setVolgnummer($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getHandelsproduktkode()) && (null === $this->getVolgnummer());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsIngegevenSamenstellingen (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setHandelsproduktkode($this->getHandelsproduktkode());
        $copyObj->setVolgnummer($this->getVolgnummer());
        $copyObj->setAanduidingWerkzaamhulpstof($this->getAanduidingWerkzaamhulpstof());
        $copyObj->setGeneriekenaamkode($this->getGeneriekenaamkode());
        $copyObj->setHoeveelheidWerkzameStof($this->getHoeveelheidWerkzameStof());
        $copyObj->setEenhHvhWerkzstofThesaurus1($this->getEenhHvhWerkzstofThesaurus1());
        $copyObj->setEenhhoeveelheidWerkzameStofKode($this->getEenhhoeveelheidWerkzameStofKode());
        $copyObj->setStamnaamcode($this->getStamnaamcode());
        $copyObj->setStamtoedieningswegThesaurus58($this->getStamtoedieningswegThesaurus58());
        $copyObj->setStamtoedieningswegCode($this->getStamtoedieningswegCode());

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
     * @return GsIngegevenSamenstellingen Clone of current object.
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
     * @return GsIngegevenSamenstellingenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsIngegevenSamenstellingenPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsHandelsproducten object.
     *
     * @param                  GsHandelsproducten $v
     * @return GsIngegevenSamenstellingen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsHandelsproducten(GsHandelsproducten $v = null)
    {
        if ($v === null) {
            $this->setHandelsproduktkode(NULL);
        } else {
            $this->setHandelsproduktkode($v->getHandelsproduktkode());
        }

        $this->aGsHandelsproducten = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsHandelsproducten object, it will not be re-added.
        if ($v !== null) {
            $v->addGsIngegevenSamenstellingen($this);
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
        if ($this->aGsHandelsproducten === null && ($this->handelsproduktkode !== null) && $doQuery) {
            $this->aGsHandelsproducten = GsHandelsproductenQuery::create()->findPk($this->handelsproduktkode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsHandelsproducten->addGsIngegevenSamenstellingens($this);
             */
        }

        return $this->aGsHandelsproducten;
    }

    /**
     * Declares an association between this object and a GsGeneriekeNamen object.
     *
     * @param                  GsGeneriekeNamen $v
     * @return GsIngegevenSamenstellingen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsGeneriekeNamen(GsGeneriekeNamen $v = null)
    {
        if ($v === null) {
            $this->setGeneriekenaamkode(NULL);
        } else {
            $this->setGeneriekenaamkode($v->getGeneriekenaamkode());
        }

        $this->aGsGeneriekeNamen = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsGeneriekeNamen object, it will not be re-added.
        if ($v !== null) {
            $v->addGsIngegevenSamenstellingen($this);
        }


        return $this;
    }


    /**
     * Get the associated GsGeneriekeNamen object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsGeneriekeNamen The associated GsGeneriekeNamen object.
     * @throws PropelException
     */
    public function getGsGeneriekeNamen(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsGeneriekeNamen === null && ($this->generiekenaamkode !== null) && $doQuery) {
            $this->aGsGeneriekeNamen = GsGeneriekeNamenQuery::create()->findPk($this->generiekenaamkode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsGeneriekeNamen->addGsIngegevenSamenstellingens($this);
             */
        }

        return $this->aGsGeneriekeNamen;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsIngegevenSamenstellingen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEenheidHoeveelheidOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setEenhHvhWerkzstofThesaurus1(NULL);
        } else {
            $this->setEenhHvhWerkzstofThesaurus1($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setEenhhoeveelheidWerkzameStofKode(NULL);
        } else {
            $this->setEenhhoeveelheidWerkzameStofKode($v->getThesaurusItemnummer());
        }

        $this->aEenheidHoeveelheidOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($this);
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
    public function getEenheidHoeveelheidOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEenheidHoeveelheidOmschrijving === null && ($this->eenh_hvh_werkzstof_thesaurus_1 !== null && $this->eenhhoeveelheid_werkzame_stof_kode !== null) && $doQuery) {
            $this->aEenheidHoeveelheidOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->eenh_hvh_werkzstof_thesaurus_1, $this->eenhhoeveelheid_werkzame_stof_kode), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEenheidHoeveelheidOmschrijving->addGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($this);
             */
        }

        return $this->aEenheidHoeveelheidOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsIngegevenSamenstellingen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setStamtoedieningswegOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setStamtoedieningswegThesaurus58(NULL);
        } else {
            $this->setStamtoedieningswegThesaurus58($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setStamtoedieningswegCode(NULL);
        } else {
            $this->setStamtoedieningswegCode($v->getThesaurusItemnummer());
        }

        $this->aStamtoedieningswegOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($this);
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
    public function getStamtoedieningswegOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aStamtoedieningswegOmschrijving === null && ($this->stamtoedieningsweg_thesaurus_58 !== null && $this->stamtoedieningsweg_code !== null) && $doQuery) {
            $this->aStamtoedieningswegOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->stamtoedieningsweg_thesaurus_58, $this->stamtoedieningsweg_code), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aStamtoedieningswegOmschrijving->addGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($this);
             */
        }

        return $this->aStamtoedieningswegOmschrijving;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->handelsproduktkode = null;
        $this->volgnummer = null;
        $this->aanduiding_werkzaamhulpstof = null;
        $this->generiekenaamkode = null;
        $this->hoeveelheid_werkzame_stof = null;
        $this->eenh_hvh_werkzstof_thesaurus_1 = null;
        $this->eenhhoeveelheid_werkzame_stof_kode = null;
        $this->stamnaamcode = null;
        $this->stamtoedieningsweg_thesaurus_58 = null;
        $this->stamtoedieningsweg_code = null;
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
            if ($this->aGsHandelsproducten instanceof Persistent) {
              $this->aGsHandelsproducten->clearAllReferences($deep);
            }
            if ($this->aGsGeneriekeNamen instanceof Persistent) {
              $this->aGsGeneriekeNamen->clearAllReferences($deep);
            }
            if ($this->aEenheidHoeveelheidOmschrijving instanceof Persistent) {
              $this->aEenheidHoeveelheidOmschrijving->clearAllReferences($deep);
            }
            if ($this->aStamtoedieningswegOmschrijving instanceof Persistent) {
              $this->aStamtoedieningswegOmschrijving->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aGsHandelsproducten = null;
        $this->aGsGeneriekeNamen = null;
        $this->aEenheidHoeveelheidOmschrijving = null;
        $this->aStamtoedieningswegOmschrijving = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsIngegevenSamenstellingenPeer::DEFAULT_STRING_FORMAT);
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
