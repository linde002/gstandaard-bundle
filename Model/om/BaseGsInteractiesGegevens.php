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
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesGegevens;
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesGegevensPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesGegevensQuery;

abstract class BaseGsInteractiesGegevens extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsInteractiesGegevensPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsInteractiesGegevensPeer
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
     * The value for the interactiewaarschuwing_code field.
     * @var        int
     */
    protected $interactiewaarschuwing_code;

    /**
     * The value for the datum_vastlegging field.
     * @var        int
     */
    protected $datum_vastlegging;

    /**
     * The value for the datum_opname_in_gstandaard field.
     * @var        int
     */
    protected $datum_opname_in_gstandaard;

    /**
     * The value for the datum_laaste_mutatie_in_gstandaard field.
     * @var        int
     */
    protected $datum_laaste_mutatie_in_gstandaard;

    /**
     * The value for the code_onderbouwing_bewijslast_bij_interactie field.
     * @var        string
     */
    protected $code_onderbouwing_bewijslast_bij_interactie;

    /**
     * The value for the code_ernst_van_potentieel_effect_bij_interactie field.
     * @var        string
     */
    protected $code_ernst_van_potentieel_effect_bij_interactie;

    /**
     * The value for the omschrijving_interactiewaarschuwing field.
     * @var        string
     */
    protected $omschrijving_interactiewaarschuwing;

    /**
     * The value for the interactiefolderthesaurus_128 field.
     * @var        int
     */
    protected $interactiefolderthesaurus_128;

    /**
     * The value for the folder field.
     * @var        int
     */
    protected $folder;

    /**
     * The value for the interactie field.
     * @var        int
     */
    protected $interactie;

    /**
     * The value for the vervolg_actie field.
     * @var        int
     */
    protected $vervolg_actie;

    /**
     * The value for the ia_te_volgen_door_monitoren field.
     * @var        int
     */
    protected $ia_te_volgen_door_monitoren;

    /**
     * The value for the ook_bij_staken_van_het_voorschrift field.
     * @var        int
     */
    protected $ook_bij_staken_van_het_voorschrift;

    /**
     * The value for the afhandeling_voorschrijver field.
     * @var        int
     */
    protected $afhandeling_voorschrijver;

    /**
     * The value for the afhandeling_balie_in_apotheek field.
     * @var        int
     */
    protected $afhandeling_balie_in_apotheek;

    /**
     * The value for the afhandeling_farmaceutisch_specialist field.
     * @var        int
     */
    protected $afhandeling_farmaceutisch_specialist;

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
     * Get the [interactiewaarschuwing_code] column value.
     *
     * @return int
     */
    public function getInteractiewaarschuwingCode()
    {

        return $this->interactiewaarschuwing_code;
    }

    /**
     * Get the [datum_vastlegging] column value.
     *
     * @return int
     */
    public function getDatumVastlegging()
    {

        return $this->datum_vastlegging;
    }

    /**
     * Get the [datum_opname_in_gstandaard] column value.
     *
     * @return int
     */
    public function getDatumOpnameInGstandaard()
    {

        return $this->datum_opname_in_gstandaard;
    }

    /**
     * Get the [datum_laaste_mutatie_in_gstandaard] column value.
     *
     * @return int
     */
    public function getDatumLaasteMutatieInGstandaard()
    {

        return $this->datum_laaste_mutatie_in_gstandaard;
    }

    /**
     * Get the [code_onderbouwing_bewijslast_bij_interactie] column value.
     *
     * @return string
     */
    public function getCodeOnderbouwingBewijslastBijInteractie()
    {

        return $this->code_onderbouwing_bewijslast_bij_interactie;
    }

    /**
     * Get the [code_ernst_van_potentieel_effect_bij_interactie] column value.
     *
     * @return string
     */
    public function getCodeErnstVanPotentieelEffectBijInteractie()
    {

        return $this->code_ernst_van_potentieel_effect_bij_interactie;
    }

    /**
     * Get the [omschrijving_interactiewaarschuwing] column value.
     *
     * @return string
     */
    public function getOmschrijvingInteractiewaarschuwing()
    {

        return $this->omschrijving_interactiewaarschuwing;
    }

    /**
     * Get the [interactiefolderthesaurus_128] column value.
     *
     * @return int
     */
    public function getInteractiefolderthesaurus128()
    {

        return $this->interactiefolderthesaurus_128;
    }

    /**
     * Get the [folder] column value.
     *
     * @return int
     */
    public function getFolder()
    {

        return $this->folder;
    }

    /**
     * Get the [interactie] column value.
     *
     * @return int
     */
    public function getInteractie()
    {

        return $this->interactie;
    }

    /**
     * Get the [vervolg_actie] column value.
     *
     * @return int
     */
    public function getVervolgActie()
    {

        return $this->vervolg_actie;
    }

    /**
     * Get the [ia_te_volgen_door_monitoren] column value.
     *
     * @return int
     */
    public function getIaTeVolgenDoorMonitoren()
    {

        return $this->ia_te_volgen_door_monitoren;
    }

    /**
     * Get the [ook_bij_staken_van_het_voorschrift] column value.
     *
     * @return int
     */
    public function getOokBijStakenVanHetVoorschrift()
    {

        return $this->ook_bij_staken_van_het_voorschrift;
    }

    /**
     * Get the [afhandeling_voorschrijver] column value.
     *
     * @return int
     */
    public function getAfhandelingVoorschrijver()
    {

        return $this->afhandeling_voorschrijver;
    }

    /**
     * Get the [afhandeling_balie_in_apotheek] column value.
     *
     * @return int
     */
    public function getAfhandelingBalieInApotheek()
    {

        return $this->afhandeling_balie_in_apotheek;
    }

    /**
     * Get the [afhandeling_farmaceutisch_specialist] column value.
     *
     * @return int
     */
    public function getAfhandelingFarmaceutischSpecialist()
    {

        return $this->afhandeling_farmaceutisch_specialist;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsInteractiesGegevens The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsInteractiesGegevensPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsInteractiesGegevens The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsInteractiesGegevensPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [interactiewaarschuwing_code] column.
     *
     * @param  int $v new value
     * @return GsInteractiesGegevens The current object (for fluent API support)
     */
    public function setInteractiewaarschuwingCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->interactiewaarschuwing_code !== $v) {
            $this->interactiewaarschuwing_code = $v;
            $this->modifiedColumns[] = GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE;
        }


        return $this;
    } // setInteractiewaarschuwingCode()

    /**
     * Set the value of [datum_vastlegging] column.
     *
     * @param  int $v new value
     * @return GsInteractiesGegevens The current object (for fluent API support)
     */
    public function setDatumVastlegging($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->datum_vastlegging !== $v) {
            $this->datum_vastlegging = $v;
            $this->modifiedColumns[] = GsInteractiesGegevensPeer::DATUM_VASTLEGGING;
        }


        return $this;
    } // setDatumVastlegging()

    /**
     * Set the value of [datum_opname_in_gstandaard] column.
     *
     * @param  int $v new value
     * @return GsInteractiesGegevens The current object (for fluent API support)
     */
    public function setDatumOpnameInGstandaard($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->datum_opname_in_gstandaard !== $v) {
            $this->datum_opname_in_gstandaard = $v;
            $this->modifiedColumns[] = GsInteractiesGegevensPeer::DATUM_OPNAME_IN_GSTANDAARD;
        }


        return $this;
    } // setDatumOpnameInGstandaard()

    /**
     * Set the value of [datum_laaste_mutatie_in_gstandaard] column.
     *
     * @param  int $v new value
     * @return GsInteractiesGegevens The current object (for fluent API support)
     */
    public function setDatumLaasteMutatieInGstandaard($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->datum_laaste_mutatie_in_gstandaard !== $v) {
            $this->datum_laaste_mutatie_in_gstandaard = $v;
            $this->modifiedColumns[] = GsInteractiesGegevensPeer::DATUM_LAASTE_MUTATIE_IN_GSTANDAARD;
        }


        return $this;
    } // setDatumLaasteMutatieInGstandaard()

    /**
     * Set the value of [code_onderbouwing_bewijslast_bij_interactie] column.
     *
     * @param  string $v new value
     * @return GsInteractiesGegevens The current object (for fluent API support)
     */
    public function setCodeOnderbouwingBewijslastBijInteractie($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->code_onderbouwing_bewijslast_bij_interactie !== $v) {
            $this->code_onderbouwing_bewijslast_bij_interactie = $v;
            $this->modifiedColumns[] = GsInteractiesGegevensPeer::CODE_ONDERBOUWING_BEWIJSLAST_BIJ_INTERACTIE;
        }


        return $this;
    } // setCodeOnderbouwingBewijslastBijInteractie()

    /**
     * Set the value of [code_ernst_van_potentieel_effect_bij_interactie] column.
     *
     * @param  string $v new value
     * @return GsInteractiesGegevens The current object (for fluent API support)
     */
    public function setCodeErnstVanPotentieelEffectBijInteractie($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->code_ernst_van_potentieel_effect_bij_interactie !== $v) {
            $this->code_ernst_van_potentieel_effect_bij_interactie = $v;
            $this->modifiedColumns[] = GsInteractiesGegevensPeer::CODE_ERNST_VAN_POTENTIEEL_EFFECT_BIJ_INTERACTIE;
        }


        return $this;
    } // setCodeErnstVanPotentieelEffectBijInteractie()

    /**
     * Set the value of [omschrijving_interactiewaarschuwing] column.
     *
     * @param  string $v new value
     * @return GsInteractiesGegevens The current object (for fluent API support)
     */
    public function setOmschrijvingInteractiewaarschuwing($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->omschrijving_interactiewaarschuwing !== $v) {
            $this->omschrijving_interactiewaarschuwing = $v;
            $this->modifiedColumns[] = GsInteractiesGegevensPeer::OMSCHRIJVING_INTERACTIEWAARSCHUWING;
        }


        return $this;
    } // setOmschrijvingInteractiewaarschuwing()

    /**
     * Set the value of [interactiefolderthesaurus_128] column.
     *
     * @param  int $v new value
     * @return GsInteractiesGegevens The current object (for fluent API support)
     */
    public function setInteractiefolderthesaurus128($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->interactiefolderthesaurus_128 !== $v) {
            $this->interactiefolderthesaurus_128 = $v;
            $this->modifiedColumns[] = GsInteractiesGegevensPeer::INTERACTIEFOLDERTHESAURUS_128;
        }


        return $this;
    } // setInteractiefolderthesaurus128()

    /**
     * Set the value of [folder] column.
     *
     * @param  int $v new value
     * @return GsInteractiesGegevens The current object (for fluent API support)
     */
    public function setFolder($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->folder !== $v) {
            $this->folder = $v;
            $this->modifiedColumns[] = GsInteractiesGegevensPeer::FOLDER;
        }


        return $this;
    } // setFolder()

    /**
     * Set the value of [interactie] column.
     *
     * @param  int $v new value
     * @return GsInteractiesGegevens The current object (for fluent API support)
     */
    public function setInteractie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->interactie !== $v) {
            $this->interactie = $v;
            $this->modifiedColumns[] = GsInteractiesGegevensPeer::INTERACTIE;
        }


        return $this;
    } // setInteractie()

    /**
     * Set the value of [vervolg_actie] column.
     *
     * @param  int $v new value
     * @return GsInteractiesGegevens The current object (for fluent API support)
     */
    public function setVervolgActie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->vervolg_actie !== $v) {
            $this->vervolg_actie = $v;
            $this->modifiedColumns[] = GsInteractiesGegevensPeer::VERVOLG_ACTIE;
        }


        return $this;
    } // setVervolgActie()

    /**
     * Set the value of [ia_te_volgen_door_monitoren] column.
     *
     * @param  int $v new value
     * @return GsInteractiesGegevens The current object (for fluent API support)
     */
    public function setIaTeVolgenDoorMonitoren($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ia_te_volgen_door_monitoren !== $v) {
            $this->ia_te_volgen_door_monitoren = $v;
            $this->modifiedColumns[] = GsInteractiesGegevensPeer::IA_TE_VOLGEN_DOOR_MONITOREN;
        }


        return $this;
    } // setIaTeVolgenDoorMonitoren()

    /**
     * Set the value of [ook_bij_staken_van_het_voorschrift] column.
     *
     * @param  int $v new value
     * @return GsInteractiesGegevens The current object (for fluent API support)
     */
    public function setOokBijStakenVanHetVoorschrift($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ook_bij_staken_van_het_voorschrift !== $v) {
            $this->ook_bij_staken_van_het_voorschrift = $v;
            $this->modifiedColumns[] = GsInteractiesGegevensPeer::OOK_BIJ_STAKEN_VAN_HET_VOORSCHRIFT;
        }


        return $this;
    } // setOokBijStakenVanHetVoorschrift()

    /**
     * Set the value of [afhandeling_voorschrijver] column.
     *
     * @param  int $v new value
     * @return GsInteractiesGegevens The current object (for fluent API support)
     */
    public function setAfhandelingVoorschrijver($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->afhandeling_voorschrijver !== $v) {
            $this->afhandeling_voorschrijver = $v;
            $this->modifiedColumns[] = GsInteractiesGegevensPeer::AFHANDELING_VOORSCHRIJVER;
        }


        return $this;
    } // setAfhandelingVoorschrijver()

    /**
     * Set the value of [afhandeling_balie_in_apotheek] column.
     *
     * @param  int $v new value
     * @return GsInteractiesGegevens The current object (for fluent API support)
     */
    public function setAfhandelingBalieInApotheek($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->afhandeling_balie_in_apotheek !== $v) {
            $this->afhandeling_balie_in_apotheek = $v;
            $this->modifiedColumns[] = GsInteractiesGegevensPeer::AFHANDELING_BALIE_IN_APOTHEEK;
        }


        return $this;
    } // setAfhandelingBalieInApotheek()

    /**
     * Set the value of [afhandeling_farmaceutisch_specialist] column.
     *
     * @param  int $v new value
     * @return GsInteractiesGegevens The current object (for fluent API support)
     */
    public function setAfhandelingFarmaceutischSpecialist($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->afhandeling_farmaceutisch_specialist !== $v) {
            $this->afhandeling_farmaceutisch_specialist = $v;
            $this->modifiedColumns[] = GsInteractiesGegevensPeer::AFHANDELING_FARMACEUTISCH_SPECIALIST;
        }


        return $this;
    } // setAfhandelingFarmaceutischSpecialist()

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
            $this->interactiewaarschuwing_code = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->datum_vastlegging = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->datum_opname_in_gstandaard = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->datum_laaste_mutatie_in_gstandaard = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->code_onderbouwing_bewijslast_bij_interactie = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->code_ernst_van_potentieel_effect_bij_interactie = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->omschrijving_interactiewaarschuwing = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->interactiefolderthesaurus_128 = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->folder = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->interactie = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->vervolg_actie = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->ia_te_volgen_door_monitoren = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->ook_bij_staken_van_het_voorschrift = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->afhandeling_voorschrijver = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->afhandeling_balie_in_apotheek = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->afhandeling_farmaceutisch_specialist = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 18; // 18 = GsInteractiesGegevensPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsInteractiesGegevens object", $e);
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
            $con = Propel::getConnection(GsInteractiesGegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsInteractiesGegevensPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsInteractiesGegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsInteractiesGegevensQuery::create()
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
            $con = Propel::getConnection(GsInteractiesGegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsInteractiesGegevensPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsInteractiesGegevensPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsInteractiesGegevensPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`interactiewaarschuwing_code`';
        }
        if ($this->isColumnModified(GsInteractiesGegevensPeer::DATUM_VASTLEGGING)) {
            $modifiedColumns[':p' . $index++]  = '`datum_vastlegging`';
        }
        if ($this->isColumnModified(GsInteractiesGegevensPeer::DATUM_OPNAME_IN_GSTANDAARD)) {
            $modifiedColumns[':p' . $index++]  = '`datum_opname_in_gstandaard`';
        }
        if ($this->isColumnModified(GsInteractiesGegevensPeer::DATUM_LAASTE_MUTATIE_IN_GSTANDAARD)) {
            $modifiedColumns[':p' . $index++]  = '`datum_laaste_mutatie_in_gstandaard`';
        }
        if ($this->isColumnModified(GsInteractiesGegevensPeer::CODE_ONDERBOUWING_BEWIJSLAST_BIJ_INTERACTIE)) {
            $modifiedColumns[':p' . $index++]  = '`code_onderbouwing_bewijslast_bij_interactie`';
        }
        if ($this->isColumnModified(GsInteractiesGegevensPeer::CODE_ERNST_VAN_POTENTIEEL_EFFECT_BIJ_INTERACTIE)) {
            $modifiedColumns[':p' . $index++]  = '`code_ernst_van_potentieel_effect_bij_interactie`';
        }
        if ($this->isColumnModified(GsInteractiesGegevensPeer::OMSCHRIJVING_INTERACTIEWAARSCHUWING)) {
            $modifiedColumns[':p' . $index++]  = '`omschrijving_interactiewaarschuwing`';
        }
        if ($this->isColumnModified(GsInteractiesGegevensPeer::INTERACTIEFOLDERTHESAURUS_128)) {
            $modifiedColumns[':p' . $index++]  = '`interactiefolderthesaurus_128`';
        }
        if ($this->isColumnModified(GsInteractiesGegevensPeer::FOLDER)) {
            $modifiedColumns[':p' . $index++]  = '`folder`';
        }
        if ($this->isColumnModified(GsInteractiesGegevensPeer::INTERACTIE)) {
            $modifiedColumns[':p' . $index++]  = '`interactie`';
        }
        if ($this->isColumnModified(GsInteractiesGegevensPeer::VERVOLG_ACTIE)) {
            $modifiedColumns[':p' . $index++]  = '`vervolg_actie`';
        }
        if ($this->isColumnModified(GsInteractiesGegevensPeer::IA_TE_VOLGEN_DOOR_MONITOREN)) {
            $modifiedColumns[':p' . $index++]  = '`ia_te_volgen_door_monitoren`';
        }
        if ($this->isColumnModified(GsInteractiesGegevensPeer::OOK_BIJ_STAKEN_VAN_HET_VOORSCHRIFT)) {
            $modifiedColumns[':p' . $index++]  = '`ook_bij_staken_van_het_voorschrift`';
        }
        if ($this->isColumnModified(GsInteractiesGegevensPeer::AFHANDELING_VOORSCHRIJVER)) {
            $modifiedColumns[':p' . $index++]  = '`afhandeling_voorschrijver`';
        }
        if ($this->isColumnModified(GsInteractiesGegevensPeer::AFHANDELING_BALIE_IN_APOTHEEK)) {
            $modifiedColumns[':p' . $index++]  = '`afhandeling_balie_in_apotheek`';
        }
        if ($this->isColumnModified(GsInteractiesGegevensPeer::AFHANDELING_FARMACEUTISCH_SPECIALIST)) {
            $modifiedColumns[':p' . $index++]  = '`afhandeling_farmaceutisch_specialist`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_interacties_gegevens` (%s) VALUES (%s)',
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
                    case '`interactiewaarschuwing_code`':
                        $stmt->bindValue($identifier, $this->interactiewaarschuwing_code, PDO::PARAM_INT);
                        break;
                    case '`datum_vastlegging`':
                        $stmt->bindValue($identifier, $this->datum_vastlegging, PDO::PARAM_INT);
                        break;
                    case '`datum_opname_in_gstandaard`':
                        $stmt->bindValue($identifier, $this->datum_opname_in_gstandaard, PDO::PARAM_INT);
                        break;
                    case '`datum_laaste_mutatie_in_gstandaard`':
                        $stmt->bindValue($identifier, $this->datum_laaste_mutatie_in_gstandaard, PDO::PARAM_INT);
                        break;
                    case '`code_onderbouwing_bewijslast_bij_interactie`':
                        $stmt->bindValue($identifier, $this->code_onderbouwing_bewijslast_bij_interactie, PDO::PARAM_STR);
                        break;
                    case '`code_ernst_van_potentieel_effect_bij_interactie`':
                        $stmt->bindValue($identifier, $this->code_ernst_van_potentieel_effect_bij_interactie, PDO::PARAM_STR);
                        break;
                    case '`omschrijving_interactiewaarschuwing`':
                        $stmt->bindValue($identifier, $this->omschrijving_interactiewaarschuwing, PDO::PARAM_STR);
                        break;
                    case '`interactiefolderthesaurus_128`':
                        $stmt->bindValue($identifier, $this->interactiefolderthesaurus_128, PDO::PARAM_INT);
                        break;
                    case '`folder`':
                        $stmt->bindValue($identifier, $this->folder, PDO::PARAM_INT);
                        break;
                    case '`interactie`':
                        $stmt->bindValue($identifier, $this->interactie, PDO::PARAM_INT);
                        break;
                    case '`vervolg_actie`':
                        $stmt->bindValue($identifier, $this->vervolg_actie, PDO::PARAM_INT);
                        break;
                    case '`ia_te_volgen_door_monitoren`':
                        $stmt->bindValue($identifier, $this->ia_te_volgen_door_monitoren, PDO::PARAM_INT);
                        break;
                    case '`ook_bij_staken_van_het_voorschrift`':
                        $stmt->bindValue($identifier, $this->ook_bij_staken_van_het_voorschrift, PDO::PARAM_INT);
                        break;
                    case '`afhandeling_voorschrijver`':
                        $stmt->bindValue($identifier, $this->afhandeling_voorschrijver, PDO::PARAM_INT);
                        break;
                    case '`afhandeling_balie_in_apotheek`':
                        $stmt->bindValue($identifier, $this->afhandeling_balie_in_apotheek, PDO::PARAM_INT);
                        break;
                    case '`afhandeling_farmaceutisch_specialist`':
                        $stmt->bindValue($identifier, $this->afhandeling_farmaceutisch_specialist, PDO::PARAM_INT);
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


            if (($retval = GsInteractiesGegevensPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsInteractiesGegevensPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getInteractiewaarschuwingCode();
                break;
            case 3:
                return $this->getDatumVastlegging();
                break;
            case 4:
                return $this->getDatumOpnameInGstandaard();
                break;
            case 5:
                return $this->getDatumLaasteMutatieInGstandaard();
                break;
            case 6:
                return $this->getCodeOnderbouwingBewijslastBijInteractie();
                break;
            case 7:
                return $this->getCodeErnstVanPotentieelEffectBijInteractie();
                break;
            case 8:
                return $this->getOmschrijvingInteractiewaarschuwing();
                break;
            case 9:
                return $this->getInteractiefolderthesaurus128();
                break;
            case 10:
                return $this->getFolder();
                break;
            case 11:
                return $this->getInteractie();
                break;
            case 12:
                return $this->getVervolgActie();
                break;
            case 13:
                return $this->getIaTeVolgenDoorMonitoren();
                break;
            case 14:
                return $this->getOokBijStakenVanHetVoorschrift();
                break;
            case 15:
                return $this->getAfhandelingVoorschrijver();
                break;
            case 16:
                return $this->getAfhandelingBalieInApotheek();
                break;
            case 17:
                return $this->getAfhandelingFarmaceutischSpecialist();
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
        if (isset($alreadyDumpedObjects['GsInteractiesGegevens'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsInteractiesGegevens'][$this->getPrimaryKey()] = true;
        $keys = GsInteractiesGegevensPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getInteractiewaarschuwingCode(),
            $keys[3] => $this->getDatumVastlegging(),
            $keys[4] => $this->getDatumOpnameInGstandaard(),
            $keys[5] => $this->getDatumLaasteMutatieInGstandaard(),
            $keys[6] => $this->getCodeOnderbouwingBewijslastBijInteractie(),
            $keys[7] => $this->getCodeErnstVanPotentieelEffectBijInteractie(),
            $keys[8] => $this->getOmschrijvingInteractiewaarschuwing(),
            $keys[9] => $this->getInteractiefolderthesaurus128(),
            $keys[10] => $this->getFolder(),
            $keys[11] => $this->getInteractie(),
            $keys[12] => $this->getVervolgActie(),
            $keys[13] => $this->getIaTeVolgenDoorMonitoren(),
            $keys[14] => $this->getOokBijStakenVanHetVoorschrift(),
            $keys[15] => $this->getAfhandelingVoorschrijver(),
            $keys[16] => $this->getAfhandelingBalieInApotheek(),
            $keys[17] => $this->getAfhandelingFarmaceutischSpecialist(),
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
        $pos = GsInteractiesGegevensPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setInteractiewaarschuwingCode($value);
                break;
            case 3:
                $this->setDatumVastlegging($value);
                break;
            case 4:
                $this->setDatumOpnameInGstandaard($value);
                break;
            case 5:
                $this->setDatumLaasteMutatieInGstandaard($value);
                break;
            case 6:
                $this->setCodeOnderbouwingBewijslastBijInteractie($value);
                break;
            case 7:
                $this->setCodeErnstVanPotentieelEffectBijInteractie($value);
                break;
            case 8:
                $this->setOmschrijvingInteractiewaarschuwing($value);
                break;
            case 9:
                $this->setInteractiefolderthesaurus128($value);
                break;
            case 10:
                $this->setFolder($value);
                break;
            case 11:
                $this->setInteractie($value);
                break;
            case 12:
                $this->setVervolgActie($value);
                break;
            case 13:
                $this->setIaTeVolgenDoorMonitoren($value);
                break;
            case 14:
                $this->setOokBijStakenVanHetVoorschrift($value);
                break;
            case 15:
                $this->setAfhandelingVoorschrijver($value);
                break;
            case 16:
                $this->setAfhandelingBalieInApotheek($value);
                break;
            case 17:
                $this->setAfhandelingFarmaceutischSpecialist($value);
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
        $keys = GsInteractiesGegevensPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setInteractiewaarschuwingCode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDatumVastlegging($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDatumOpnameInGstandaard($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDatumLaasteMutatieInGstandaard($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCodeOnderbouwingBewijslastBijInteractie($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCodeErnstVanPotentieelEffectBijInteractie($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOmschrijvingInteractiewaarschuwing($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setInteractiefolderthesaurus128($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFolder($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setInteractie($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setVervolgActie($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setIaTeVolgenDoorMonitoren($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setOokBijStakenVanHetVoorschrift($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setAfhandelingVoorschrijver($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setAfhandelingBalieInApotheek($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setAfhandelingFarmaceutischSpecialist($arr[$keys[17]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsInteractiesGegevensPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsInteractiesGegevensPeer::BESTANDNUMMER)) $criteria->add(GsInteractiesGegevensPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsInteractiesGegevensPeer::MUTATIEKODE)) $criteria->add(GsInteractiesGegevensPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE)) $criteria->add(GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE, $this->interactiewaarschuwing_code);
        if ($this->isColumnModified(GsInteractiesGegevensPeer::DATUM_VASTLEGGING)) $criteria->add(GsInteractiesGegevensPeer::DATUM_VASTLEGGING, $this->datum_vastlegging);
        if ($this->isColumnModified(GsInteractiesGegevensPeer::DATUM_OPNAME_IN_GSTANDAARD)) $criteria->add(GsInteractiesGegevensPeer::DATUM_OPNAME_IN_GSTANDAARD, $this->datum_opname_in_gstandaard);
        if ($this->isColumnModified(GsInteractiesGegevensPeer::DATUM_LAASTE_MUTATIE_IN_GSTANDAARD)) $criteria->add(GsInteractiesGegevensPeer::DATUM_LAASTE_MUTATIE_IN_GSTANDAARD, $this->datum_laaste_mutatie_in_gstandaard);
        if ($this->isColumnModified(GsInteractiesGegevensPeer::CODE_ONDERBOUWING_BEWIJSLAST_BIJ_INTERACTIE)) $criteria->add(GsInteractiesGegevensPeer::CODE_ONDERBOUWING_BEWIJSLAST_BIJ_INTERACTIE, $this->code_onderbouwing_bewijslast_bij_interactie);
        if ($this->isColumnModified(GsInteractiesGegevensPeer::CODE_ERNST_VAN_POTENTIEEL_EFFECT_BIJ_INTERACTIE)) $criteria->add(GsInteractiesGegevensPeer::CODE_ERNST_VAN_POTENTIEEL_EFFECT_BIJ_INTERACTIE, $this->code_ernst_van_potentieel_effect_bij_interactie);
        if ($this->isColumnModified(GsInteractiesGegevensPeer::OMSCHRIJVING_INTERACTIEWAARSCHUWING)) $criteria->add(GsInteractiesGegevensPeer::OMSCHRIJVING_INTERACTIEWAARSCHUWING, $this->omschrijving_interactiewaarschuwing);
        if ($this->isColumnModified(GsInteractiesGegevensPeer::INTERACTIEFOLDERTHESAURUS_128)) $criteria->add(GsInteractiesGegevensPeer::INTERACTIEFOLDERTHESAURUS_128, $this->interactiefolderthesaurus_128);
        if ($this->isColumnModified(GsInteractiesGegevensPeer::FOLDER)) $criteria->add(GsInteractiesGegevensPeer::FOLDER, $this->folder);
        if ($this->isColumnModified(GsInteractiesGegevensPeer::INTERACTIE)) $criteria->add(GsInteractiesGegevensPeer::INTERACTIE, $this->interactie);
        if ($this->isColumnModified(GsInteractiesGegevensPeer::VERVOLG_ACTIE)) $criteria->add(GsInteractiesGegevensPeer::VERVOLG_ACTIE, $this->vervolg_actie);
        if ($this->isColumnModified(GsInteractiesGegevensPeer::IA_TE_VOLGEN_DOOR_MONITOREN)) $criteria->add(GsInteractiesGegevensPeer::IA_TE_VOLGEN_DOOR_MONITOREN, $this->ia_te_volgen_door_monitoren);
        if ($this->isColumnModified(GsInteractiesGegevensPeer::OOK_BIJ_STAKEN_VAN_HET_VOORSCHRIFT)) $criteria->add(GsInteractiesGegevensPeer::OOK_BIJ_STAKEN_VAN_HET_VOORSCHRIFT, $this->ook_bij_staken_van_het_voorschrift);
        if ($this->isColumnModified(GsInteractiesGegevensPeer::AFHANDELING_VOORSCHRIJVER)) $criteria->add(GsInteractiesGegevensPeer::AFHANDELING_VOORSCHRIJVER, $this->afhandeling_voorschrijver);
        if ($this->isColumnModified(GsInteractiesGegevensPeer::AFHANDELING_BALIE_IN_APOTHEEK)) $criteria->add(GsInteractiesGegevensPeer::AFHANDELING_BALIE_IN_APOTHEEK, $this->afhandeling_balie_in_apotheek);
        if ($this->isColumnModified(GsInteractiesGegevensPeer::AFHANDELING_FARMACEUTISCH_SPECIALIST)) $criteria->add(GsInteractiesGegevensPeer::AFHANDELING_FARMACEUTISCH_SPECIALIST, $this->afhandeling_farmaceutisch_specialist);

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
        $criteria = new Criteria(GsInteractiesGegevensPeer::DATABASE_NAME);
        $criteria->add(GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE, $this->interactiewaarschuwing_code);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getInteractiewaarschuwingCode();
    }

    /**
     * Generic method to set the primary key (interactiewaarschuwing_code column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setInteractiewaarschuwingCode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getInteractiewaarschuwingCode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsInteractiesGegevens (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setDatumVastlegging($this->getDatumVastlegging());
        $copyObj->setDatumOpnameInGstandaard($this->getDatumOpnameInGstandaard());
        $copyObj->setDatumLaasteMutatieInGstandaard($this->getDatumLaasteMutatieInGstandaard());
        $copyObj->setCodeOnderbouwingBewijslastBijInteractie($this->getCodeOnderbouwingBewijslastBijInteractie());
        $copyObj->setCodeErnstVanPotentieelEffectBijInteractie($this->getCodeErnstVanPotentieelEffectBijInteractie());
        $copyObj->setOmschrijvingInteractiewaarschuwing($this->getOmschrijvingInteractiewaarschuwing());
        $copyObj->setInteractiefolderthesaurus128($this->getInteractiefolderthesaurus128());
        $copyObj->setFolder($this->getFolder());
        $copyObj->setInteractie($this->getInteractie());
        $copyObj->setVervolgActie($this->getVervolgActie());
        $copyObj->setIaTeVolgenDoorMonitoren($this->getIaTeVolgenDoorMonitoren());
        $copyObj->setOokBijStakenVanHetVoorschrift($this->getOokBijStakenVanHetVoorschrift());
        $copyObj->setAfhandelingVoorschrijver($this->getAfhandelingVoorschrijver());
        $copyObj->setAfhandelingBalieInApotheek($this->getAfhandelingBalieInApotheek());
        $copyObj->setAfhandelingFarmaceutischSpecialist($this->getAfhandelingFarmaceutischSpecialist());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setInteractiewaarschuwingCode(NULL); // this is a auto-increment column, so set to default value
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
     * @return GsInteractiesGegevens Clone of current object.
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
     * @return GsInteractiesGegevensPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsInteractiesGegevensPeer();
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
        $this->interactiewaarschuwing_code = null;
        $this->datum_vastlegging = null;
        $this->datum_opname_in_gstandaard = null;
        $this->datum_laaste_mutatie_in_gstandaard = null;
        $this->code_onderbouwing_bewijslast_bij_interactie = null;
        $this->code_ernst_van_potentieel_effect_bij_interactie = null;
        $this->omschrijving_interactiewaarschuwing = null;
        $this->interactiefolderthesaurus_128 = null;
        $this->folder = null;
        $this->interactie = null;
        $this->vervolg_actie = null;
        $this->ia_te_volgen_door_monitoren = null;
        $this->ook_bij_staken_van_het_voorschrift = null;
        $this->afhandeling_voorschrijver = null;
        $this->afhandeling_balie_in_apotheek = null;
        $this->afhandeling_farmaceutisch_specialist = null;
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
        return (string) $this->exportTo(GsInteractiesGegevensPeer::DEFAULT_STRING_FORMAT);
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
