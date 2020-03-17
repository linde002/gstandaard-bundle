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
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsRzvAanspraak;
use PharmaIntelligence\GstandaardBundle\Model\GsRzvAanspraakPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsRzvAanspraakQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery;

abstract class BaseGsRzvAanspraak extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRzvAanspraakPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsRzvAanspraakPeer
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
     * The value for the zinummer field.
     * @var        int
     */
    protected $zinummer;

    /**
     * The value for the thesaurus_rzv_verstrekking field.
     * @var        int
     */
    protected $thesaurus_rzv_verstrekking;

    /**
     * The value for the rzvverstrekking field.
     * @var        int
     */
    protected $rzvverstrekking;

    /**
     * The value for the thesaurus_rzv_hulpmiddelen field.
     * @var        int
     */
    protected $thesaurus_rzv_hulpmiddelen;

    /**
     * The value for the hulpmiddelen_zorg field.
     * @var        int
     */
    protected $hulpmiddelen_zorg;

    /**
     * The value for the rzv_thesaurus_120 field.
     * @var        int
     */
    protected $rzv_thesaurus_120;

    /**
     * The value for the rzvvoorwaarden_bijlage_2 field.
     * @var        int
     */
    protected $rzvvoorwaarden_bijlage_2;

    /**
     * The value for the tekstmodule field.
     * @var        int
     */
    protected $tekstmodule;

    /**
     * The value for the tekst_verwijzing field.
     * @var        int
     */
    protected $tekst_verwijzing;

    /**
     * @var        GsArtikelen
     */
    protected $aGsArtikelen;

    /**
     * @var        GsArtikelEigenschappen
     */
    protected $aGsArtikelEigenschappen;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aRzvVerstrekkingOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aRzvHulpmiddelenOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aRzvVoorwaardenOmschrijving;

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
     * Get the [zinummer] column value.
     *
     * @return int
     */
    public function getZinummer()
    {

        return $this->zinummer;
    }

    /**
     * Get the [thesaurus_rzv_verstrekking] column value.
     *
     * @return int
     */
    public function getThesaurusRzvVerstrekking()
    {

        return $this->thesaurus_rzv_verstrekking;
    }

    /**
     * Get the [rzvverstrekking] column value.
     *
     * @return int
     */
    public function getRzvverstrekking()
    {

        return $this->rzvverstrekking;
    }

    /**
     * Get the [thesaurus_rzv_hulpmiddelen] column value.
     *
     * @return int
     */
    public function getThesaurusRzvHulpmiddelen()
    {

        return $this->thesaurus_rzv_hulpmiddelen;
    }

    /**
     * Get the [hulpmiddelen_zorg] column value.
     *
     * @return int
     */
    public function getHulpmiddelenZorg()
    {

        return $this->hulpmiddelen_zorg;
    }

    /**
     * Get the [rzv_thesaurus_120] column value.
     *
     * @return int
     */
    public function getRzvThesaurus120()
    {

        return $this->rzv_thesaurus_120;
    }

    /**
     * Get the [rzvvoorwaarden_bijlage_2] column value.
     *
     * @return int
     */
    public function getRzvvoorwaardenBijlage2()
    {

        return $this->rzvvoorwaarden_bijlage_2;
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
     * Get the [tekst_verwijzing] column value.
     *
     * @return int
     */
    public function getTekstVerwijzing()
    {

        return $this->tekst_verwijzing;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsRzvAanspraak The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsRzvAanspraakPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsRzvAanspraak The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsRzvAanspraakPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [zinummer] column.
     *
     * @param  int $v new value
     * @return GsRzvAanspraak The current object (for fluent API support)
     */
    public function setZinummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zinummer !== $v) {
            $this->zinummer = $v;
            $this->modifiedColumns[] = GsRzvAanspraakPeer::ZINUMMER;
        }

        if ($this->aGsArtikelen !== null && $this->aGsArtikelen->getZinummer() !== $v) {
            $this->aGsArtikelen = null;
        }

        if ($this->aGsArtikelEigenschappen !== null && $this->aGsArtikelEigenschappen->getZindexNummer() !== $v) {
            $this->aGsArtikelEigenschappen = null;
        }


        return $this;
    } // setZinummer()

    /**
     * Set the value of [thesaurus_rzv_verstrekking] column.
     *
     * @param  int $v new value
     * @return GsRzvAanspraak The current object (for fluent API support)
     */
    public function setThesaurusRzvVerstrekking($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurus_rzv_verstrekking !== $v) {
            $this->thesaurus_rzv_verstrekking = $v;
            $this->modifiedColumns[] = GsRzvAanspraakPeer::THESAURUS_RZV_VERSTREKKING;
        }

        if ($this->aRzvVerstrekkingOmschrijving !== null && $this->aRzvVerstrekkingOmschrijving->getThesaurusnummer() !== $v) {
            $this->aRzvVerstrekkingOmschrijving = null;
        }


        return $this;
    } // setThesaurusRzvVerstrekking()

    /**
     * Set the value of [rzvverstrekking] column.
     *
     * @param  int $v new value
     * @return GsRzvAanspraak The current object (for fluent API support)
     */
    public function setRzvverstrekking($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rzvverstrekking !== $v) {
            $this->rzvverstrekking = $v;
            $this->modifiedColumns[] = GsRzvAanspraakPeer::RZVVERSTREKKING;
        }

        if ($this->aRzvVerstrekkingOmschrijving !== null && $this->aRzvVerstrekkingOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aRzvVerstrekkingOmschrijving = null;
        }


        return $this;
    } // setRzvverstrekking()

    /**
     * Set the value of [thesaurus_rzv_hulpmiddelen] column.
     *
     * @param  int $v new value
     * @return GsRzvAanspraak The current object (for fluent API support)
     */
    public function setThesaurusRzvHulpmiddelen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurus_rzv_hulpmiddelen !== $v) {
            $this->thesaurus_rzv_hulpmiddelen = $v;
            $this->modifiedColumns[] = GsRzvAanspraakPeer::THESAURUS_RZV_HULPMIDDELEN;
        }

        if ($this->aRzvHulpmiddelenOmschrijving !== null && $this->aRzvHulpmiddelenOmschrijving->getThesaurusnummer() !== $v) {
            $this->aRzvHulpmiddelenOmschrijving = null;
        }


        return $this;
    } // setThesaurusRzvHulpmiddelen()

    /**
     * Set the value of [hulpmiddelen_zorg] column.
     *
     * @param  int $v new value
     * @return GsRzvAanspraak The current object (for fluent API support)
     */
    public function setHulpmiddelenZorg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hulpmiddelen_zorg !== $v) {
            $this->hulpmiddelen_zorg = $v;
            $this->modifiedColumns[] = GsRzvAanspraakPeer::HULPMIDDELEN_ZORG;
        }

        if ($this->aRzvHulpmiddelenOmschrijving !== null && $this->aRzvHulpmiddelenOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aRzvHulpmiddelenOmschrijving = null;
        }


        return $this;
    } // setHulpmiddelenZorg()

    /**
     * Set the value of [rzv_thesaurus_120] column.
     *
     * @param  int $v new value
     * @return GsRzvAanspraak The current object (for fluent API support)
     */
    public function setRzvThesaurus120($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rzv_thesaurus_120 !== $v) {
            $this->rzv_thesaurus_120 = $v;
            $this->modifiedColumns[] = GsRzvAanspraakPeer::RZV_THESAURUS_120;
        }

        if ($this->aRzvVoorwaardenOmschrijving !== null && $this->aRzvVoorwaardenOmschrijving->getThesaurusnummer() !== $v) {
            $this->aRzvVoorwaardenOmschrijving = null;
        }


        return $this;
    } // setRzvThesaurus120()

    /**
     * Set the value of [rzvvoorwaarden_bijlage_2] column.
     *
     * @param  int $v new value
     * @return GsRzvAanspraak The current object (for fluent API support)
     */
    public function setRzvvoorwaardenBijlage2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rzvvoorwaarden_bijlage_2 !== $v) {
            $this->rzvvoorwaarden_bijlage_2 = $v;
            $this->modifiedColumns[] = GsRzvAanspraakPeer::RZVVOORWAARDEN_BIJLAGE_2;
        }

        if ($this->aRzvVoorwaardenOmschrijving !== null && $this->aRzvVoorwaardenOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aRzvVoorwaardenOmschrijving = null;
        }


        return $this;
    } // setRzvvoorwaardenBijlage2()

    /**
     * Set the value of [tekstmodule] column.
     *
     * @param  int $v new value
     * @return GsRzvAanspraak The current object (for fluent API support)
     */
    public function setTekstmodule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekstmodule !== $v) {
            $this->tekstmodule = $v;
            $this->modifiedColumns[] = GsRzvAanspraakPeer::TEKSTMODULE;
        }


        return $this;
    } // setTekstmodule()

    /**
     * Set the value of [tekst_verwijzing] column.
     *
     * @param  int $v new value
     * @return GsRzvAanspraak The current object (for fluent API support)
     */
    public function setTekstVerwijzing($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekst_verwijzing !== $v) {
            $this->tekst_verwijzing = $v;
            $this->modifiedColumns[] = GsRzvAanspraakPeer::TEKST_VERWIJZING;
        }


        return $this;
    } // setTekstVerwijzing()

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
            $this->zinummer = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->thesaurus_rzv_verstrekking = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->rzvverstrekking = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->thesaurus_rzv_hulpmiddelen = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->hulpmiddelen_zorg = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->rzv_thesaurus_120 = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->rzvvoorwaarden_bijlage_2 = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->tekstmodule = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->tekst_verwijzing = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = GsRzvAanspraakPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsRzvAanspraak object", $e);
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

        if ($this->aGsArtikelen !== null && $this->zinummer !== $this->aGsArtikelen->getZinummer()) {
            $this->aGsArtikelen = null;
        }
        if ($this->aGsArtikelEigenschappen !== null && $this->zinummer !== $this->aGsArtikelEigenschappen->getZindexNummer()) {
            $this->aGsArtikelEigenschappen = null;
        }
        if ($this->aRzvVerstrekkingOmschrijving !== null && $this->thesaurus_rzv_verstrekking !== $this->aRzvVerstrekkingOmschrijving->getThesaurusnummer()) {
            $this->aRzvVerstrekkingOmschrijving = null;
        }
        if ($this->aRzvVerstrekkingOmschrijving !== null && $this->rzvverstrekking !== $this->aRzvVerstrekkingOmschrijving->getThesaurusItemnummer()) {
            $this->aRzvVerstrekkingOmschrijving = null;
        }
        if ($this->aRzvHulpmiddelenOmschrijving !== null && $this->thesaurus_rzv_hulpmiddelen !== $this->aRzvHulpmiddelenOmschrijving->getThesaurusnummer()) {
            $this->aRzvHulpmiddelenOmschrijving = null;
        }
        if ($this->aRzvHulpmiddelenOmschrijving !== null && $this->hulpmiddelen_zorg !== $this->aRzvHulpmiddelenOmschrijving->getThesaurusItemnummer()) {
            $this->aRzvHulpmiddelenOmschrijving = null;
        }
        if ($this->aRzvVoorwaardenOmschrijving !== null && $this->rzv_thesaurus_120 !== $this->aRzvVoorwaardenOmschrijving->getThesaurusnummer()) {
            $this->aRzvVoorwaardenOmschrijving = null;
        }
        if ($this->aRzvVoorwaardenOmschrijving !== null && $this->rzvvoorwaarden_bijlage_2 !== $this->aRzvVoorwaardenOmschrijving->getThesaurusItemnummer()) {
            $this->aRzvVoorwaardenOmschrijving = null;
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
            $con = Propel::getConnection(GsRzvAanspraakPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsRzvAanspraakPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGsArtikelen = null;
            $this->aGsArtikelEigenschappen = null;
            $this->aRzvVerstrekkingOmschrijving = null;
            $this->aRzvHulpmiddelenOmschrijving = null;
            $this->aRzvVoorwaardenOmschrijving = null;
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
            $con = Propel::getConnection(GsRzvAanspraakPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsRzvAanspraakQuery::create()
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
            $con = Propel::getConnection(GsRzvAanspraakPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsRzvAanspraakPeer::addInstanceToPool($this);
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

            if ($this->aGsArtikelEigenschappen !== null) {
                if ($this->aGsArtikelEigenschappen->isModified() || $this->aGsArtikelEigenschappen->isNew()) {
                    $affectedRows += $this->aGsArtikelEigenschappen->save($con);
                }
                $this->setGsArtikelEigenschappen($this->aGsArtikelEigenschappen);
            }

            if ($this->aRzvVerstrekkingOmschrijving !== null) {
                if ($this->aRzvVerstrekkingOmschrijving->isModified() || $this->aRzvVerstrekkingOmschrijving->isNew()) {
                    $affectedRows += $this->aRzvVerstrekkingOmschrijving->save($con);
                }
                $this->setRzvVerstrekkingOmschrijving($this->aRzvVerstrekkingOmschrijving);
            }

            if ($this->aRzvHulpmiddelenOmschrijving !== null) {
                if ($this->aRzvHulpmiddelenOmschrijving->isModified() || $this->aRzvHulpmiddelenOmschrijving->isNew()) {
                    $affectedRows += $this->aRzvHulpmiddelenOmschrijving->save($con);
                }
                $this->setRzvHulpmiddelenOmschrijving($this->aRzvHulpmiddelenOmschrijving);
            }

            if ($this->aRzvVoorwaardenOmschrijving !== null) {
                if ($this->aRzvVoorwaardenOmschrijving->isModified() || $this->aRzvVoorwaardenOmschrijving->isNew()) {
                    $affectedRows += $this->aRzvVoorwaardenOmschrijving->save($con);
                }
                $this->setRzvVoorwaardenOmschrijving($this->aRzvVoorwaardenOmschrijving);
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
        if ($this->isColumnModified(GsRzvAanspraakPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsRzvAanspraakPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsRzvAanspraakPeer::ZINUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`zinummer`';
        }
        if ($this->isColumnModified(GsRzvAanspraakPeer::THESAURUS_RZV_VERSTREKKING)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurus_rzv_verstrekking`';
        }
        if ($this->isColumnModified(GsRzvAanspraakPeer::RZVVERSTREKKING)) {
            $modifiedColumns[':p' . $index++]  = '`rzvverstrekking`';
        }
        if ($this->isColumnModified(GsRzvAanspraakPeer::THESAURUS_RZV_HULPMIDDELEN)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurus_rzv_hulpmiddelen`';
        }
        if ($this->isColumnModified(GsRzvAanspraakPeer::HULPMIDDELEN_ZORG)) {
            $modifiedColumns[':p' . $index++]  = '`hulpmiddelen_zorg`';
        }
        if ($this->isColumnModified(GsRzvAanspraakPeer::RZV_THESAURUS_120)) {
            $modifiedColumns[':p' . $index++]  = '`rzv_thesaurus_120`';
        }
        if ($this->isColumnModified(GsRzvAanspraakPeer::RZVVOORWAARDEN_BIJLAGE_2)) {
            $modifiedColumns[':p' . $index++]  = '`rzvvoorwaarden_bijlage_2`';
        }
        if ($this->isColumnModified(GsRzvAanspraakPeer::TEKSTMODULE)) {
            $modifiedColumns[':p' . $index++]  = '`tekstmodule`';
        }
        if ($this->isColumnModified(GsRzvAanspraakPeer::TEKST_VERWIJZING)) {
            $modifiedColumns[':p' . $index++]  = '`tekst_verwijzing`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_rzv_aanspraak` (%s) VALUES (%s)',
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
                    case '`zinummer`':
                        $stmt->bindValue($identifier, $this->zinummer, PDO::PARAM_INT);
                        break;
                    case '`thesaurus_rzv_verstrekking`':
                        $stmt->bindValue($identifier, $this->thesaurus_rzv_verstrekking, PDO::PARAM_INT);
                        break;
                    case '`rzvverstrekking`':
                        $stmt->bindValue($identifier, $this->rzvverstrekking, PDO::PARAM_INT);
                        break;
                    case '`thesaurus_rzv_hulpmiddelen`':
                        $stmt->bindValue($identifier, $this->thesaurus_rzv_hulpmiddelen, PDO::PARAM_INT);
                        break;
                    case '`hulpmiddelen_zorg`':
                        $stmt->bindValue($identifier, $this->hulpmiddelen_zorg, PDO::PARAM_INT);
                        break;
                    case '`rzv_thesaurus_120`':
                        $stmt->bindValue($identifier, $this->rzv_thesaurus_120, PDO::PARAM_INT);
                        break;
                    case '`rzvvoorwaarden_bijlage_2`':
                        $stmt->bindValue($identifier, $this->rzvvoorwaarden_bijlage_2, PDO::PARAM_INT);
                        break;
                    case '`tekstmodule`':
                        $stmt->bindValue($identifier, $this->tekstmodule, PDO::PARAM_INT);
                        break;
                    case '`tekst_verwijzing`':
                        $stmt->bindValue($identifier, $this->tekst_verwijzing, PDO::PARAM_INT);
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

            if ($this->aGsArtikelEigenschappen !== null) {
                if (!$this->aGsArtikelEigenschappen->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsArtikelEigenschappen->getValidationFailures());
                }
            }

            if ($this->aRzvVerstrekkingOmschrijving !== null) {
                if (!$this->aRzvVerstrekkingOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRzvVerstrekkingOmschrijving->getValidationFailures());
                }
            }

            if ($this->aRzvHulpmiddelenOmschrijving !== null) {
                if (!$this->aRzvHulpmiddelenOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRzvHulpmiddelenOmschrijving->getValidationFailures());
                }
            }

            if ($this->aRzvVoorwaardenOmschrijving !== null) {
                if (!$this->aRzvVoorwaardenOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRzvVoorwaardenOmschrijving->getValidationFailures());
                }
            }


            if (($retval = GsRzvAanspraakPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsRzvAanspraakPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getZinummer();
                break;
            case 3:
                return $this->getThesaurusRzvVerstrekking();
                break;
            case 4:
                return $this->getRzvverstrekking();
                break;
            case 5:
                return $this->getThesaurusRzvHulpmiddelen();
                break;
            case 6:
                return $this->getHulpmiddelenZorg();
                break;
            case 7:
                return $this->getRzvThesaurus120();
                break;
            case 8:
                return $this->getRzvvoorwaardenBijlage2();
                break;
            case 9:
                return $this->getTekstmodule();
                break;
            case 10:
                return $this->getTekstVerwijzing();
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
        if (isset($alreadyDumpedObjects['GsRzvAanspraak'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsRzvAanspraak'][$this->getPrimaryKey()] = true;
        $keys = GsRzvAanspraakPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getZinummer(),
            $keys[3] => $this->getThesaurusRzvVerstrekking(),
            $keys[4] => $this->getRzvverstrekking(),
            $keys[5] => $this->getThesaurusRzvHulpmiddelen(),
            $keys[6] => $this->getHulpmiddelenZorg(),
            $keys[7] => $this->getRzvThesaurus120(),
            $keys[8] => $this->getRzvvoorwaardenBijlage2(),
            $keys[9] => $this->getTekstmodule(),
            $keys[10] => $this->getTekstVerwijzing(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aGsArtikelen) {
                $result['GsArtikelen'] = $this->aGsArtikelen->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aGsArtikelEigenschappen) {
                $result['GsArtikelEigenschappen'] = $this->aGsArtikelEigenschappen->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRzvVerstrekkingOmschrijving) {
                $result['RzvVerstrekkingOmschrijving'] = $this->aRzvVerstrekkingOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRzvHulpmiddelenOmschrijving) {
                $result['RzvHulpmiddelenOmschrijving'] = $this->aRzvHulpmiddelenOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRzvVoorwaardenOmschrijving) {
                $result['RzvVoorwaardenOmschrijving'] = $this->aRzvVoorwaardenOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = GsRzvAanspraakPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setZinummer($value);
                break;
            case 3:
                $this->setThesaurusRzvVerstrekking($value);
                break;
            case 4:
                $this->setRzvverstrekking($value);
                break;
            case 5:
                $this->setThesaurusRzvHulpmiddelen($value);
                break;
            case 6:
                $this->setHulpmiddelenZorg($value);
                break;
            case 7:
                $this->setRzvThesaurus120($value);
                break;
            case 8:
                $this->setRzvvoorwaardenBijlage2($value);
                break;
            case 9:
                $this->setTekstmodule($value);
                break;
            case 10:
                $this->setTekstVerwijzing($value);
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
        $keys = GsRzvAanspraakPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setZinummer($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setThesaurusRzvVerstrekking($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRzvverstrekking($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setThesaurusRzvHulpmiddelen($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setHulpmiddelenZorg($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setRzvThesaurus120($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setRzvvoorwaardenBijlage2($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTekstmodule($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTekstVerwijzing($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsRzvAanspraakPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsRzvAanspraakPeer::BESTANDNUMMER)) $criteria->add(GsRzvAanspraakPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsRzvAanspraakPeer::MUTATIEKODE)) $criteria->add(GsRzvAanspraakPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsRzvAanspraakPeer::ZINUMMER)) $criteria->add(GsRzvAanspraakPeer::ZINUMMER, $this->zinummer);
        if ($this->isColumnModified(GsRzvAanspraakPeer::THESAURUS_RZV_VERSTREKKING)) $criteria->add(GsRzvAanspraakPeer::THESAURUS_RZV_VERSTREKKING, $this->thesaurus_rzv_verstrekking);
        if ($this->isColumnModified(GsRzvAanspraakPeer::RZVVERSTREKKING)) $criteria->add(GsRzvAanspraakPeer::RZVVERSTREKKING, $this->rzvverstrekking);
        if ($this->isColumnModified(GsRzvAanspraakPeer::THESAURUS_RZV_HULPMIDDELEN)) $criteria->add(GsRzvAanspraakPeer::THESAURUS_RZV_HULPMIDDELEN, $this->thesaurus_rzv_hulpmiddelen);
        if ($this->isColumnModified(GsRzvAanspraakPeer::HULPMIDDELEN_ZORG)) $criteria->add(GsRzvAanspraakPeer::HULPMIDDELEN_ZORG, $this->hulpmiddelen_zorg);
        if ($this->isColumnModified(GsRzvAanspraakPeer::RZV_THESAURUS_120)) $criteria->add(GsRzvAanspraakPeer::RZV_THESAURUS_120, $this->rzv_thesaurus_120);
        if ($this->isColumnModified(GsRzvAanspraakPeer::RZVVOORWAARDEN_BIJLAGE_2)) $criteria->add(GsRzvAanspraakPeer::RZVVOORWAARDEN_BIJLAGE_2, $this->rzvvoorwaarden_bijlage_2);
        if ($this->isColumnModified(GsRzvAanspraakPeer::TEKSTMODULE)) $criteria->add(GsRzvAanspraakPeer::TEKSTMODULE, $this->tekstmodule);
        if ($this->isColumnModified(GsRzvAanspraakPeer::TEKST_VERWIJZING)) $criteria->add(GsRzvAanspraakPeer::TEKST_VERWIJZING, $this->tekst_verwijzing);

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
        $criteria = new Criteria(GsRzvAanspraakPeer::DATABASE_NAME);
        $criteria->add(GsRzvAanspraakPeer::ZINUMMER, $this->zinummer);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getZinummer();
    }

    /**
     * Generic method to set the primary key (zinummer column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setZinummer($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getZinummer();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsRzvAanspraak (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setThesaurusRzvVerstrekking($this->getThesaurusRzvVerstrekking());
        $copyObj->setRzvverstrekking($this->getRzvverstrekking());
        $copyObj->setThesaurusRzvHulpmiddelen($this->getThesaurusRzvHulpmiddelen());
        $copyObj->setHulpmiddelenZorg($this->getHulpmiddelenZorg());
        $copyObj->setRzvThesaurus120($this->getRzvThesaurus120());
        $copyObj->setRzvvoorwaardenBijlage2($this->getRzvvoorwaardenBijlage2());
        $copyObj->setTekstmodule($this->getTekstmodule());
        $copyObj->setTekstVerwijzing($this->getTekstVerwijzing());

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

            $relObj = $this->getGsArtikelEigenschappen();
            if ($relObj) {
                $copyObj->setGsArtikelEigenschappen($relObj->copy($deepCopy));
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setZinummer(NULL); // this is a auto-increment column, so set to default value
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
     * @return GsRzvAanspraak Clone of current object.
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
     * @return GsRzvAanspraakPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsRzvAanspraakPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsArtikelen object.
     *
     * @param                  GsArtikelen $v
     * @return GsRzvAanspraak The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsArtikelen(GsArtikelen $v = null)
    {
        if ($v === null) {
            $this->setZinummer(NULL);
        } else {
            $this->setZinummer($v->getZinummer());
        }

        $this->aGsArtikelen = $v;

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setGsRzvAanspraak($this);
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
        if ($this->aGsArtikelen === null && ($this->zinummer !== null) && $doQuery) {
            $this->aGsArtikelen = GsArtikelenQuery::create()->findPk($this->zinummer, $con);
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aGsArtikelen->setGsRzvAanspraak($this);
        }

        return $this->aGsArtikelen;
    }

    /**
     * Declares an association between this object and a GsArtikelEigenschappen object.
     *
     * @param                  GsArtikelEigenschappen $v
     * @return GsRzvAanspraak The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsArtikelEigenschappen(GsArtikelEigenschappen $v = null)
    {
        if ($v === null) {
            $this->setZinummer(NULL);
        } else {
            $this->setZinummer($v->getZindexNummer());
        }

        $this->aGsArtikelEigenschappen = $v;

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setGsRzvAanspraak($this);
        }


        return $this;
    }


    /**
     * Get the associated GsArtikelEigenschappen object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsArtikelEigenschappen The associated GsArtikelEigenschappen object.
     * @throws PropelException
     */
    public function getGsArtikelEigenschappen(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsArtikelEigenschappen === null && ($this->zinummer !== null) && $doQuery) {
            $this->aGsArtikelEigenschappen = GsArtikelEigenschappenQuery::create()->findPk($this->zinummer, $con);
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aGsArtikelEigenschappen->setGsRzvAanspraak($this);
        }

        return $this->aGsArtikelEigenschappen;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsRzvAanspraak The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRzvVerstrekkingOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesaurusRzvVerstrekking(NULL);
        } else {
            $this->setThesaurusRzvVerstrekking($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setRzvverstrekking(NULL);
        } else {
            $this->setRzvverstrekking($v->getThesaurusItemnummer());
        }

        $this->aRzvVerstrekkingOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking($this);
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
    public function getRzvVerstrekkingOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRzvVerstrekkingOmschrijving === null && ($this->thesaurus_rzv_verstrekking !== null && $this->rzvverstrekking !== null) && $doQuery) {
            $this->aRzvVerstrekkingOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesaurus_rzv_verstrekking, $this->rzvverstrekking), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRzvVerstrekkingOmschrijving->addGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking($this);
             */
        }

        return $this->aRzvVerstrekkingOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsRzvAanspraak The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRzvHulpmiddelenOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesaurusRzvHulpmiddelen(NULL);
        } else {
            $this->setThesaurusRzvHulpmiddelen($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setHulpmiddelenZorg(NULL);
        } else {
            $this->setHulpmiddelenZorg($v->getThesaurusItemnummer());
        }

        $this->aRzvHulpmiddelenOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg($this);
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
    public function getRzvHulpmiddelenOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRzvHulpmiddelenOmschrijving === null && ($this->thesaurus_rzv_hulpmiddelen !== null && $this->hulpmiddelen_zorg !== null) && $doQuery) {
            $this->aRzvHulpmiddelenOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesaurus_rzv_hulpmiddelen, $this->hulpmiddelen_zorg), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRzvHulpmiddelenOmschrijving->addGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg($this);
             */
        }

        return $this->aRzvHulpmiddelenOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsRzvAanspraak The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRzvVoorwaardenOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setRzvThesaurus120(NULL);
        } else {
            $this->setRzvThesaurus120($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setRzvvoorwaardenBijlage2(NULL);
        } else {
            $this->setRzvvoorwaardenBijlage2($v->getThesaurusItemnummer());
        }

        $this->aRzvVoorwaardenOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($this);
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
    public function getRzvVoorwaardenOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRzvVoorwaardenOmschrijving === null && ($this->rzv_thesaurus_120 !== null && $this->rzvvoorwaarden_bijlage_2 !== null) && $doQuery) {
            $this->aRzvVoorwaardenOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->rzv_thesaurus_120, $this->rzvvoorwaarden_bijlage_2), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRzvVoorwaardenOmschrijving->addGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($this);
             */
        }

        return $this->aRzvVoorwaardenOmschrijving;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->zinummer = null;
        $this->thesaurus_rzv_verstrekking = null;
        $this->rzvverstrekking = null;
        $this->thesaurus_rzv_hulpmiddelen = null;
        $this->hulpmiddelen_zorg = null;
        $this->rzv_thesaurus_120 = null;
        $this->rzvvoorwaarden_bijlage_2 = null;
        $this->tekstmodule = null;
        $this->tekst_verwijzing = null;
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
            if ($this->aGsArtikelEigenschappen instanceof Persistent) {
              $this->aGsArtikelEigenschappen->clearAllReferences($deep);
            }
            if ($this->aRzvVerstrekkingOmschrijving instanceof Persistent) {
              $this->aRzvVerstrekkingOmschrijving->clearAllReferences($deep);
            }
            if ($this->aRzvHulpmiddelenOmschrijving instanceof Persistent) {
              $this->aRzvHulpmiddelenOmschrijving->clearAllReferences($deep);
            }
            if ($this->aRzvVoorwaardenOmschrijving instanceof Persistent) {
              $this->aRzvVoorwaardenOmschrijving->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aGsArtikelen = null;
        $this->aGsArtikelEigenschappen = null;
        $this->aRzvVerstrekkingOmschrijving = null;
        $this->aRzvHulpmiddelenOmschrijving = null;
        $this->aRzvVoorwaardenOmschrijving = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsRzvAanspraakPeer::DEFAULT_STRING_FORMAT);
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
