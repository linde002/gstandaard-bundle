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
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeNamen;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeNamenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeNamenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingen;
use PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingenQuery;

abstract class BaseGsGeneriekeNamen extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeNamenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsGeneriekeNamenPeer
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
     * The value for the generiekenaamkode field.
     * @var        int
     */
    protected $generiekenaamkode;

    /**
     * The value for the generieke_naam field.
     * @var        string
     */
    protected $generieke_naam;

    /**
     * The value for the stamnaamcode field.
     * @var        int
     */
    protected $stamnaamcode;

    /**
     * The value for the volledige_generieke_naam_kode field.
     * @var        int
     */
    protected $volledige_generieke_naam_kode;

    /**
     * The value for the kode_stamnaam_toegestaan field.
     * @var        string
     */
    protected $kode_stamnaam_toegestaan;

    /**
     * The value for the kode_werkzaam_bestanddeelhulpstof field.
     * @var        string
     */
    protected $kode_werkzaam_bestanddeelhulpstof;

    /**
     * The value for the informatorium_stof_kode field.
     * @var        int
     */
    protected $informatorium_stof_kode;

    /**
     * The value for the cas_nummer field.
     * @var        int
     */
    protected $cas_nummer;

    /**
     * The value for the bruto_formule field.
     * @var        string
     */
    protected $bruto_formule;

    /**
     * The value for the molekuulgewicht field.
     * @var        string
     */
    protected $molekuulgewicht;

    /**
     * The value for the molekuulgewicht_indicator field.
     * @var        string
     */
    protected $molekuulgewicht_indicator;

    /**
     * The value for the molekuulgewicht_voor_samenstelling field.
     * @var        string
     */
    protected $molekuulgewicht_voor_samenstelling;

    /**
     * The value for the soortelijk_gewicht field.
     * @var        string
     */
    protected $soortelijk_gewicht;

    /**
     * The value for the voorkeurseenheid field.
     * @var        string
     */
    protected $voorkeurseenheid;

    /**
     * The value for the kode_rijvaardigheid field.
     * @var        string
     */
    protected $kode_rijvaardigheid;

    /**
     * The value for the kode_vergift field.
     * @var        string
     */
    protected $kode_vergift;

    /**
     * The value for the kode_opiumwet field.
     * @var        string
     */
    protected $kode_opiumwet;

    /**
     * @var        PropelObjectCollection|GsIngegevenSamenstellingen[] Collection to store aggregation of GsIngegevenSamenstellingen objects.
     */
    protected $collGsIngegevenSamenstellingens;
    protected $collGsIngegevenSamenstellingensPartial;

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
    protected $gsIngegevenSamenstellingensScheduledForDeletion = null;

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
     * Get the [generiekenaamkode] column value.
     *
     * @return int
     */
    public function getGeneriekenaamkode()
    {

        return $this->generiekenaamkode;
    }

    /**
     * Get the [generieke_naam] column value.
     *
     * @return string
     */
    public function getGeneriekeNaam()
    {

        return $this->generieke_naam;
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
     * Get the [volledige_generieke_naam_kode] column value.
     *
     * @return int
     */
    public function getVolledigeGeneriekeNaamKode()
    {

        return $this->volledige_generieke_naam_kode;
    }

    /**
     * Get the [kode_stamnaam_toegestaan] column value.
     *
     * @return string
     */
    public function getKodeStamnaamToegestaan()
    {

        return $this->kode_stamnaam_toegestaan;
    }

    /**
     * Get the [kode_werkzaam_bestanddeelhulpstof] column value.
     *
     * @return string
     */
    public function getKodeWerkzaamBestanddeelhulpstof()
    {

        return $this->kode_werkzaam_bestanddeelhulpstof;
    }

    /**
     * Get the [informatorium_stof_kode] column value.
     *
     * @return int
     */
    public function getInformatoriumStofKode()
    {

        return $this->informatorium_stof_kode;
    }

    /**
     * Get the [cas_nummer] column value.
     *
     * @return int
     */
    public function getCasNummer()
    {

        return $this->cas_nummer;
    }

    /**
     * Get the [bruto_formule] column value.
     *
     * @return string
     */
    public function getBrutoFormule()
    {

        return $this->bruto_formule;
    }

    /**
     * Get the [molekuulgewicht] column value.
     *
     * @return string
     */
    public function getMolekuulgewicht()
    {

        return $this->molekuulgewicht;
    }

    /**
     * Get the [molekuulgewicht_indicator] column value.
     *
     * @return string
     */
    public function getMolekuulgewichtIndicator()
    {

        return $this->molekuulgewicht_indicator;
    }

    /**
     * Get the [molekuulgewicht_voor_samenstelling] column value.
     *
     * @return string
     */
    public function getMolekuulgewichtVoorSamenstelling()
    {

        return $this->molekuulgewicht_voor_samenstelling;
    }

    /**
     * Get the [soortelijk_gewicht] column value.
     *
     * @return string
     */
    public function getSoortelijkGewicht()
    {

        return $this->soortelijk_gewicht;
    }

    /**
     * Get the [voorkeurseenheid] column value.
     *
     * @return string
     */
    public function getVoorkeurseenheid()
    {

        return $this->voorkeurseenheid;
    }

    /**
     * Get the [kode_rijvaardigheid] column value.
     *
     * @return string
     */
    public function getKodeRijvaardigheid()
    {

        return $this->kode_rijvaardigheid;
    }

    /**
     * Get the [kode_vergift] column value.
     *
     * @return string
     */
    public function getKodeVergift()
    {

        return $this->kode_vergift;
    }

    /**
     * Get the [kode_opiumwet] column value.
     *
     * @return string
     */
    public function getKodeOpiumwet()
    {

        return $this->kode_opiumwet;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [generiekenaamkode] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setGeneriekenaamkode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->generiekenaamkode !== $v) {
            $this->generiekenaamkode = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::GENERIEKENAAMKODE;
        }


        return $this;
    } // setGeneriekenaamkode()

    /**
     * Set the value of [generieke_naam] column.
     *
     * @param  string $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setGeneriekeNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->generieke_naam !== $v) {
            $this->generieke_naam = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::GENERIEKE_NAAM;
        }


        return $this;
    } // setGeneriekeNaam()

    /**
     * Set the value of [stamnaamcode] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setStamnaamcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stamnaamcode !== $v) {
            $this->stamnaamcode = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::STAMNAAMCODE;
        }


        return $this;
    } // setStamnaamcode()

    /**
     * Set the value of [volledige_generieke_naam_kode] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setVolledigeGeneriekeNaamKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->volledige_generieke_naam_kode !== $v) {
            $this->volledige_generieke_naam_kode = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE;
        }


        return $this;
    } // setVolledigeGeneriekeNaamKode()

    /**
     * Set the value of [kode_stamnaam_toegestaan] column.
     *
     * @param  string $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setKodeStamnaamToegestaan($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->kode_stamnaam_toegestaan !== $v) {
            $this->kode_stamnaam_toegestaan = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::KODE_STAMNAAM_TOEGESTAAN;
        }


        return $this;
    } // setKodeStamnaamToegestaan()

    /**
     * Set the value of [kode_werkzaam_bestanddeelhulpstof] column.
     *
     * @param  string $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setKodeWerkzaamBestanddeelhulpstof($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->kode_werkzaam_bestanddeelhulpstof !== $v) {
            $this->kode_werkzaam_bestanddeelhulpstof = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::KODE_WERKZAAM_BESTANDDEELHULPSTOF;
        }


        return $this;
    } // setKodeWerkzaamBestanddeelhulpstof()

    /**
     * Set the value of [informatorium_stof_kode] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setInformatoriumStofKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->informatorium_stof_kode !== $v) {
            $this->informatorium_stof_kode = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::INFORMATORIUM_STOF_KODE;
        }


        return $this;
    } // setInformatoriumStofKode()

    /**
     * Set the value of [cas_nummer] column.
     *
     * @param  int $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setCasNummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cas_nummer !== $v) {
            $this->cas_nummer = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::CAS_NUMMER;
        }


        return $this;
    } // setCasNummer()

    /**
     * Set the value of [bruto_formule] column.
     *
     * @param  string $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setBrutoFormule($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bruto_formule !== $v) {
            $this->bruto_formule = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::BRUTO_FORMULE;
        }


        return $this;
    } // setBrutoFormule()

    /**
     * Set the value of [molekuulgewicht] column.
     *
     * @param  string $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setMolekuulgewicht($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->molekuulgewicht !== $v) {
            $this->molekuulgewicht = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::MOLEKUULGEWICHT;
        }


        return $this;
    } // setMolekuulgewicht()

    /**
     * Set the value of [molekuulgewicht_indicator] column.
     *
     * @param  string $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setMolekuulgewichtIndicator($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->molekuulgewicht_indicator !== $v) {
            $this->molekuulgewicht_indicator = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::MOLEKUULGEWICHT_INDICATOR;
        }


        return $this;
    } // setMolekuulgewichtIndicator()

    /**
     * Set the value of [molekuulgewicht_voor_samenstelling] column.
     *
     * @param  string $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setMolekuulgewichtVoorSamenstelling($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->molekuulgewicht_voor_samenstelling !== $v) {
            $this->molekuulgewicht_voor_samenstelling = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::MOLEKUULGEWICHT_VOOR_SAMENSTELLING;
        }


        return $this;
    } // setMolekuulgewichtVoorSamenstelling()

    /**
     * Set the value of [soortelijk_gewicht] column.
     *
     * @param  string $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setSoortelijkGewicht($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->soortelijk_gewicht !== $v) {
            $this->soortelijk_gewicht = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::SOORTELIJK_GEWICHT;
        }


        return $this;
    } // setSoortelijkGewicht()

    /**
     * Set the value of [voorkeurseenheid] column.
     *
     * @param  string $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setVoorkeurseenheid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->voorkeurseenheid !== $v) {
            $this->voorkeurseenheid = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::VOORKEURSEENHEID;
        }


        return $this;
    } // setVoorkeurseenheid()

    /**
     * Set the value of [kode_rijvaardigheid] column.
     *
     * @param  string $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setKodeRijvaardigheid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->kode_rijvaardigheid !== $v) {
            $this->kode_rijvaardigheid = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::KODE_RIJVAARDIGHEID;
        }


        return $this;
    } // setKodeRijvaardigheid()

    /**
     * Set the value of [kode_vergift] column.
     *
     * @param  string $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setKodeVergift($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->kode_vergift !== $v) {
            $this->kode_vergift = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::KODE_VERGIFT;
        }


        return $this;
    } // setKodeVergift()

    /**
     * Set the value of [kode_opiumwet] column.
     *
     * @param  string $v new value
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setKodeOpiumwet($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->kode_opiumwet !== $v) {
            $this->kode_opiumwet = $v;
            $this->modifiedColumns[] = GsGeneriekeNamenPeer::KODE_OPIUMWET;
        }


        return $this;
    } // setKodeOpiumwet()

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
            $this->generiekenaamkode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->generieke_naam = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->stamnaamcode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->volledige_generieke_naam_kode = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->kode_stamnaam_toegestaan = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->kode_werkzaam_bestanddeelhulpstof = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->informatorium_stof_kode = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->cas_nummer = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->bruto_formule = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->molekuulgewicht = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->molekuulgewicht_indicator = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->molekuulgewicht_voor_samenstelling = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->soortelijk_gewicht = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->voorkeurseenheid = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->kode_rijvaardigheid = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->kode_vergift = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->kode_opiumwet = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 19; // 19 = GsGeneriekeNamenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsGeneriekeNamen object", $e);
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
            $con = Propel::getConnection(GsGeneriekeNamenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsGeneriekeNamenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collGsIngegevenSamenstellingens = null;

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
            $con = Propel::getConnection(GsGeneriekeNamenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsGeneriekeNamenQuery::create()
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
            $con = Propel::getConnection(GsGeneriekeNamenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsGeneriekeNamenPeer::addInstanceToPool($this);
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

            if ($this->gsIngegevenSamenstellingensScheduledForDeletion !== null) {
                if (!$this->gsIngegevenSamenstellingensScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsIngegevenSamenstellingensScheduledForDeletion as $gsIngegevenSamenstellingen) {
                        // need to save related object because we set the relation to null
                        $gsIngegevenSamenstellingen->save($con);
                    }
                    $this->gsIngegevenSamenstellingensScheduledForDeletion = null;
                }
            }

            if ($this->collGsIngegevenSamenstellingens !== null) {
                foreach ($this->collGsIngegevenSamenstellingens as $referrerFK) {
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
        if ($this->isColumnModified(GsGeneriekeNamenPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsGeneriekeNamenPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsGeneriekeNamenPeer::GENERIEKENAAMKODE)) {
            $modifiedColumns[':p' . $index++]  = '`generiekenaamkode`';
        }
        if ($this->isColumnModified(GsGeneriekeNamenPeer::GENERIEKE_NAAM)) {
            $modifiedColumns[':p' . $index++]  = '`generieke_naam`';
        }
        if ($this->isColumnModified(GsGeneriekeNamenPeer::STAMNAAMCODE)) {
            $modifiedColumns[':p' . $index++]  = '`stamnaamcode`';
        }
        if ($this->isColumnModified(GsGeneriekeNamenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`volledige_generieke_naam_kode`';
        }
        if ($this->isColumnModified(GsGeneriekeNamenPeer::KODE_STAMNAAM_TOEGESTAAN)) {
            $modifiedColumns[':p' . $index++]  = '`kode_stamnaam_toegestaan`';
        }
        if ($this->isColumnModified(GsGeneriekeNamenPeer::KODE_WERKZAAM_BESTANDDEELHULPSTOF)) {
            $modifiedColumns[':p' . $index++]  = '`kode_werkzaam_bestanddeelhulpstof`';
        }
        if ($this->isColumnModified(GsGeneriekeNamenPeer::INFORMATORIUM_STOF_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`informatorium_stof_kode`';
        }
        if ($this->isColumnModified(GsGeneriekeNamenPeer::CAS_NUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`cas_nummer`';
        }
        if ($this->isColumnModified(GsGeneriekeNamenPeer::BRUTO_FORMULE)) {
            $modifiedColumns[':p' . $index++]  = '`bruto_formule`';
        }
        if ($this->isColumnModified(GsGeneriekeNamenPeer::MOLEKUULGEWICHT)) {
            $modifiedColumns[':p' . $index++]  = '`molekuulgewicht`';
        }
        if ($this->isColumnModified(GsGeneriekeNamenPeer::MOLEKUULGEWICHT_INDICATOR)) {
            $modifiedColumns[':p' . $index++]  = '`molekuulgewicht_indicator`';
        }
        if ($this->isColumnModified(GsGeneriekeNamenPeer::MOLEKUULGEWICHT_VOOR_SAMENSTELLING)) {
            $modifiedColumns[':p' . $index++]  = '`molekuulgewicht_voor_samenstelling`';
        }
        if ($this->isColumnModified(GsGeneriekeNamenPeer::SOORTELIJK_GEWICHT)) {
            $modifiedColumns[':p' . $index++]  = '`soortelijk_gewicht`';
        }
        if ($this->isColumnModified(GsGeneriekeNamenPeer::VOORKEURSEENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`voorkeurseenheid`';
        }
        if ($this->isColumnModified(GsGeneriekeNamenPeer::KODE_RIJVAARDIGHEID)) {
            $modifiedColumns[':p' . $index++]  = '`kode_rijvaardigheid`';
        }
        if ($this->isColumnModified(GsGeneriekeNamenPeer::KODE_VERGIFT)) {
            $modifiedColumns[':p' . $index++]  = '`kode_vergift`';
        }
        if ($this->isColumnModified(GsGeneriekeNamenPeer::KODE_OPIUMWET)) {
            $modifiedColumns[':p' . $index++]  = '`kode_opiumwet`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_generieke_namen` (%s) VALUES (%s)',
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
                    case '`generiekenaamkode`':
                        $stmt->bindValue($identifier, $this->generiekenaamkode, PDO::PARAM_INT);
                        break;
                    case '`generieke_naam`':
                        $stmt->bindValue($identifier, $this->generieke_naam, PDO::PARAM_STR);
                        break;
                    case '`stamnaamcode`':
                        $stmt->bindValue($identifier, $this->stamnaamcode, PDO::PARAM_INT);
                        break;
                    case '`volledige_generieke_naam_kode`':
                        $stmt->bindValue($identifier, $this->volledige_generieke_naam_kode, PDO::PARAM_INT);
                        break;
                    case '`kode_stamnaam_toegestaan`':
                        $stmt->bindValue($identifier, $this->kode_stamnaam_toegestaan, PDO::PARAM_STR);
                        break;
                    case '`kode_werkzaam_bestanddeelhulpstof`':
                        $stmt->bindValue($identifier, $this->kode_werkzaam_bestanddeelhulpstof, PDO::PARAM_STR);
                        break;
                    case '`informatorium_stof_kode`':
                        $stmt->bindValue($identifier, $this->informatorium_stof_kode, PDO::PARAM_INT);
                        break;
                    case '`cas_nummer`':
                        $stmt->bindValue($identifier, $this->cas_nummer, PDO::PARAM_INT);
                        break;
                    case '`bruto_formule`':
                        $stmt->bindValue($identifier, $this->bruto_formule, PDO::PARAM_STR);
                        break;
                    case '`molekuulgewicht`':
                        $stmt->bindValue($identifier, $this->molekuulgewicht, PDO::PARAM_STR);
                        break;
                    case '`molekuulgewicht_indicator`':
                        $stmt->bindValue($identifier, $this->molekuulgewicht_indicator, PDO::PARAM_STR);
                        break;
                    case '`molekuulgewicht_voor_samenstelling`':
                        $stmt->bindValue($identifier, $this->molekuulgewicht_voor_samenstelling, PDO::PARAM_STR);
                        break;
                    case '`soortelijk_gewicht`':
                        $stmt->bindValue($identifier, $this->soortelijk_gewicht, PDO::PARAM_STR);
                        break;
                    case '`voorkeurseenheid`':
                        $stmt->bindValue($identifier, $this->voorkeurseenheid, PDO::PARAM_STR);
                        break;
                    case '`kode_rijvaardigheid`':
                        $stmt->bindValue($identifier, $this->kode_rijvaardigheid, PDO::PARAM_STR);
                        break;
                    case '`kode_vergift`':
                        $stmt->bindValue($identifier, $this->kode_vergift, PDO::PARAM_STR);
                        break;
                    case '`kode_opiumwet`':
                        $stmt->bindValue($identifier, $this->kode_opiumwet, PDO::PARAM_STR);
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


            if (($retval = GsGeneriekeNamenPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collGsIngegevenSamenstellingens !== null) {
                    foreach ($this->collGsIngegevenSamenstellingens as $referrerFK) {
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
        $pos = GsGeneriekeNamenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getGeneriekenaamkode();
                break;
            case 3:
                return $this->getGeneriekeNaam();
                break;
            case 4:
                return $this->getStamnaamcode();
                break;
            case 5:
                return $this->getVolledigeGeneriekeNaamKode();
                break;
            case 6:
                return $this->getKodeStamnaamToegestaan();
                break;
            case 7:
                return $this->getKodeWerkzaamBestanddeelhulpstof();
                break;
            case 8:
                return $this->getInformatoriumStofKode();
                break;
            case 9:
                return $this->getCasNummer();
                break;
            case 10:
                return $this->getBrutoFormule();
                break;
            case 11:
                return $this->getMolekuulgewicht();
                break;
            case 12:
                return $this->getMolekuulgewichtIndicator();
                break;
            case 13:
                return $this->getMolekuulgewichtVoorSamenstelling();
                break;
            case 14:
                return $this->getSoortelijkGewicht();
                break;
            case 15:
                return $this->getVoorkeurseenheid();
                break;
            case 16:
                return $this->getKodeRijvaardigheid();
                break;
            case 17:
                return $this->getKodeVergift();
                break;
            case 18:
                return $this->getKodeOpiumwet();
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
        if (isset($alreadyDumpedObjects['GsGeneriekeNamen'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsGeneriekeNamen'][$this->getPrimaryKey()] = true;
        $keys = GsGeneriekeNamenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getGeneriekenaamkode(),
            $keys[3] => $this->getGeneriekeNaam(),
            $keys[4] => $this->getStamnaamcode(),
            $keys[5] => $this->getVolledigeGeneriekeNaamKode(),
            $keys[6] => $this->getKodeStamnaamToegestaan(),
            $keys[7] => $this->getKodeWerkzaamBestanddeelhulpstof(),
            $keys[8] => $this->getInformatoriumStofKode(),
            $keys[9] => $this->getCasNummer(),
            $keys[10] => $this->getBrutoFormule(),
            $keys[11] => $this->getMolekuulgewicht(),
            $keys[12] => $this->getMolekuulgewichtIndicator(),
            $keys[13] => $this->getMolekuulgewichtVoorSamenstelling(),
            $keys[14] => $this->getSoortelijkGewicht(),
            $keys[15] => $this->getVoorkeurseenheid(),
            $keys[16] => $this->getKodeRijvaardigheid(),
            $keys[17] => $this->getKodeVergift(),
            $keys[18] => $this->getKodeOpiumwet(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collGsIngegevenSamenstellingens) {
                $result['GsIngegevenSamenstellingens'] = $this->collGsIngegevenSamenstellingens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = GsGeneriekeNamenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setGeneriekenaamkode($value);
                break;
            case 3:
                $this->setGeneriekeNaam($value);
                break;
            case 4:
                $this->setStamnaamcode($value);
                break;
            case 5:
                $this->setVolledigeGeneriekeNaamKode($value);
                break;
            case 6:
                $this->setKodeStamnaamToegestaan($value);
                break;
            case 7:
                $this->setKodeWerkzaamBestanddeelhulpstof($value);
                break;
            case 8:
                $this->setInformatoriumStofKode($value);
                break;
            case 9:
                $this->setCasNummer($value);
                break;
            case 10:
                $this->setBrutoFormule($value);
                break;
            case 11:
                $this->setMolekuulgewicht($value);
                break;
            case 12:
                $this->setMolekuulgewichtIndicator($value);
                break;
            case 13:
                $this->setMolekuulgewichtVoorSamenstelling($value);
                break;
            case 14:
                $this->setSoortelijkGewicht($value);
                break;
            case 15:
                $this->setVoorkeurseenheid($value);
                break;
            case 16:
                $this->setKodeRijvaardigheid($value);
                break;
            case 17:
                $this->setKodeVergift($value);
                break;
            case 18:
                $this->setKodeOpiumwet($value);
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
        $keys = GsGeneriekeNamenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setGeneriekenaamkode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setGeneriekeNaam($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setStamnaamcode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setVolledigeGeneriekeNaamKode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setKodeStamnaamToegestaan($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setKodeWerkzaamBestanddeelhulpstof($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setInformatoriumStofKode($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCasNummer($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setBrutoFormule($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setMolekuulgewicht($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setMolekuulgewichtIndicator($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setMolekuulgewichtVoorSamenstelling($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setSoortelijkGewicht($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setVoorkeurseenheid($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setKodeRijvaardigheid($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setKodeVergift($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setKodeOpiumwet($arr[$keys[18]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsGeneriekeNamenPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsGeneriekeNamenPeer::BESTANDNUMMER)) $criteria->add(GsGeneriekeNamenPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsGeneriekeNamenPeer::MUTATIEKODE)) $criteria->add(GsGeneriekeNamenPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsGeneriekeNamenPeer::GENERIEKENAAMKODE)) $criteria->add(GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $this->generiekenaamkode);
        if ($this->isColumnModified(GsGeneriekeNamenPeer::GENERIEKE_NAAM)) $criteria->add(GsGeneriekeNamenPeer::GENERIEKE_NAAM, $this->generieke_naam);
        if ($this->isColumnModified(GsGeneriekeNamenPeer::STAMNAAMCODE)) $criteria->add(GsGeneriekeNamenPeer::STAMNAAMCODE, $this->stamnaamcode);
        if ($this->isColumnModified(GsGeneriekeNamenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE)) $criteria->add(GsGeneriekeNamenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE, $this->volledige_generieke_naam_kode);
        if ($this->isColumnModified(GsGeneriekeNamenPeer::KODE_STAMNAAM_TOEGESTAAN)) $criteria->add(GsGeneriekeNamenPeer::KODE_STAMNAAM_TOEGESTAAN, $this->kode_stamnaam_toegestaan);
        if ($this->isColumnModified(GsGeneriekeNamenPeer::KODE_WERKZAAM_BESTANDDEELHULPSTOF)) $criteria->add(GsGeneriekeNamenPeer::KODE_WERKZAAM_BESTANDDEELHULPSTOF, $this->kode_werkzaam_bestanddeelhulpstof);
        if ($this->isColumnModified(GsGeneriekeNamenPeer::INFORMATORIUM_STOF_KODE)) $criteria->add(GsGeneriekeNamenPeer::INFORMATORIUM_STOF_KODE, $this->informatorium_stof_kode);
        if ($this->isColumnModified(GsGeneriekeNamenPeer::CAS_NUMMER)) $criteria->add(GsGeneriekeNamenPeer::CAS_NUMMER, $this->cas_nummer);
        if ($this->isColumnModified(GsGeneriekeNamenPeer::BRUTO_FORMULE)) $criteria->add(GsGeneriekeNamenPeer::BRUTO_FORMULE, $this->bruto_formule);
        if ($this->isColumnModified(GsGeneriekeNamenPeer::MOLEKUULGEWICHT)) $criteria->add(GsGeneriekeNamenPeer::MOLEKUULGEWICHT, $this->molekuulgewicht);
        if ($this->isColumnModified(GsGeneriekeNamenPeer::MOLEKUULGEWICHT_INDICATOR)) $criteria->add(GsGeneriekeNamenPeer::MOLEKUULGEWICHT_INDICATOR, $this->molekuulgewicht_indicator);
        if ($this->isColumnModified(GsGeneriekeNamenPeer::MOLEKUULGEWICHT_VOOR_SAMENSTELLING)) $criteria->add(GsGeneriekeNamenPeer::MOLEKUULGEWICHT_VOOR_SAMENSTELLING, $this->molekuulgewicht_voor_samenstelling);
        if ($this->isColumnModified(GsGeneriekeNamenPeer::SOORTELIJK_GEWICHT)) $criteria->add(GsGeneriekeNamenPeer::SOORTELIJK_GEWICHT, $this->soortelijk_gewicht);
        if ($this->isColumnModified(GsGeneriekeNamenPeer::VOORKEURSEENHEID)) $criteria->add(GsGeneriekeNamenPeer::VOORKEURSEENHEID, $this->voorkeurseenheid);
        if ($this->isColumnModified(GsGeneriekeNamenPeer::KODE_RIJVAARDIGHEID)) $criteria->add(GsGeneriekeNamenPeer::KODE_RIJVAARDIGHEID, $this->kode_rijvaardigheid);
        if ($this->isColumnModified(GsGeneriekeNamenPeer::KODE_VERGIFT)) $criteria->add(GsGeneriekeNamenPeer::KODE_VERGIFT, $this->kode_vergift);
        if ($this->isColumnModified(GsGeneriekeNamenPeer::KODE_OPIUMWET)) $criteria->add(GsGeneriekeNamenPeer::KODE_OPIUMWET, $this->kode_opiumwet);

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
        $criteria = new Criteria(GsGeneriekeNamenPeer::DATABASE_NAME);
        $criteria->add(GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $this->generiekenaamkode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getGeneriekenaamkode();
    }

    /**
     * Generic method to set the primary key (generiekenaamkode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setGeneriekenaamkode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getGeneriekenaamkode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsGeneriekeNamen (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setGeneriekeNaam($this->getGeneriekeNaam());
        $copyObj->setStamnaamcode($this->getStamnaamcode());
        $copyObj->setVolledigeGeneriekeNaamKode($this->getVolledigeGeneriekeNaamKode());
        $copyObj->setKodeStamnaamToegestaan($this->getKodeStamnaamToegestaan());
        $copyObj->setKodeWerkzaamBestanddeelhulpstof($this->getKodeWerkzaamBestanddeelhulpstof());
        $copyObj->setInformatoriumStofKode($this->getInformatoriumStofKode());
        $copyObj->setCasNummer($this->getCasNummer());
        $copyObj->setBrutoFormule($this->getBrutoFormule());
        $copyObj->setMolekuulgewicht($this->getMolekuulgewicht());
        $copyObj->setMolekuulgewichtIndicator($this->getMolekuulgewichtIndicator());
        $copyObj->setMolekuulgewichtVoorSamenstelling($this->getMolekuulgewichtVoorSamenstelling());
        $copyObj->setSoortelijkGewicht($this->getSoortelijkGewicht());
        $copyObj->setVoorkeurseenheid($this->getVoorkeurseenheid());
        $copyObj->setKodeRijvaardigheid($this->getKodeRijvaardigheid());
        $copyObj->setKodeVergift($this->getKodeVergift());
        $copyObj->setKodeOpiumwet($this->getKodeOpiumwet());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getGsIngegevenSamenstellingens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsIngegevenSamenstellingen($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setGeneriekenaamkode(NULL); // this is a auto-increment column, so set to default value
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
     * @return GsGeneriekeNamen Clone of current object.
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
     * @return GsGeneriekeNamenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsGeneriekeNamenPeer();
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
        if ('GsIngegevenSamenstellingen' == $relationName) {
            $this->initGsIngegevenSamenstellingens();
        }
    }

    /**
     * Clears out the collGsIngegevenSamenstellingens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsGeneriekeNamen The current object (for fluent API support)
     * @see        addGsIngegevenSamenstellingens()
     */
    public function clearGsIngegevenSamenstellingens()
    {
        $this->collGsIngegevenSamenstellingens = null; // important to set this to null since that means it is uninitialized
        $this->collGsIngegevenSamenstellingensPartial = null;

        return $this;
    }

    /**
     * reset is the collGsIngegevenSamenstellingens collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsIngegevenSamenstellingens($v = true)
    {
        $this->collGsIngegevenSamenstellingensPartial = $v;
    }

    /**
     * Initializes the collGsIngegevenSamenstellingens collection.
     *
     * By default this just sets the collGsIngegevenSamenstellingens collection to an empty array (like clearcollGsIngegevenSamenstellingens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsIngegevenSamenstellingens($overrideExisting = true)
    {
        if (null !== $this->collGsIngegevenSamenstellingens && !$overrideExisting) {
            return;
        }
        $this->collGsIngegevenSamenstellingens = new PropelObjectCollection();
        $this->collGsIngegevenSamenstellingens->setModel('GsIngegevenSamenstellingen');
    }

    /**
     * Gets an array of GsIngegevenSamenstellingen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsGeneriekeNamen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsIngegevenSamenstellingen[] List of GsIngegevenSamenstellingen objects
     * @throws PropelException
     */
    public function getGsIngegevenSamenstellingens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsIngegevenSamenstellingensPartial && !$this->isNew();
        if (null === $this->collGsIngegevenSamenstellingens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsIngegevenSamenstellingens) {
                // return empty collection
                $this->initGsIngegevenSamenstellingens();
            } else {
                $collGsIngegevenSamenstellingens = GsIngegevenSamenstellingenQuery::create(null, $criteria)
                    ->filterByGsGeneriekeNamen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsIngegevenSamenstellingensPartial && count($collGsIngegevenSamenstellingens)) {
                      $this->initGsIngegevenSamenstellingens(false);

                      foreach ($collGsIngegevenSamenstellingens as $obj) {
                        if (false == $this->collGsIngegevenSamenstellingens->contains($obj)) {
                          $this->collGsIngegevenSamenstellingens->append($obj);
                        }
                      }

                      $this->collGsIngegevenSamenstellingensPartial = true;
                    }

                    $collGsIngegevenSamenstellingens->getInternalIterator()->rewind();

                    return $collGsIngegevenSamenstellingens;
                }

                if ($partial && $this->collGsIngegevenSamenstellingens) {
                    foreach ($this->collGsIngegevenSamenstellingens as $obj) {
                        if ($obj->isNew()) {
                            $collGsIngegevenSamenstellingens[] = $obj;
                        }
                    }
                }

                $this->collGsIngegevenSamenstellingens = $collGsIngegevenSamenstellingens;
                $this->collGsIngegevenSamenstellingensPartial = false;
            }
        }

        return $this->collGsIngegevenSamenstellingens;
    }

    /**
     * Sets a collection of GsIngegevenSamenstellingen objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsIngegevenSamenstellingens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function setGsIngegevenSamenstellingens(PropelCollection $gsIngegevenSamenstellingens, PropelPDO $con = null)
    {
        $gsIngegevenSamenstellingensToDelete = $this->getGsIngegevenSamenstellingens(new Criteria(), $con)->diff($gsIngegevenSamenstellingens);


        $this->gsIngegevenSamenstellingensScheduledForDeletion = $gsIngegevenSamenstellingensToDelete;

        foreach ($gsIngegevenSamenstellingensToDelete as $gsIngegevenSamenstellingenRemoved) {
            $gsIngegevenSamenstellingenRemoved->setGsGeneriekeNamen(null);
        }

        $this->collGsIngegevenSamenstellingens = null;
        foreach ($gsIngegevenSamenstellingens as $gsIngegevenSamenstellingen) {
            $this->addGsIngegevenSamenstellingen($gsIngegevenSamenstellingen);
        }

        $this->collGsIngegevenSamenstellingens = $gsIngegevenSamenstellingens;
        $this->collGsIngegevenSamenstellingensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsIngegevenSamenstellingen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsIngegevenSamenstellingen objects.
     * @throws PropelException
     */
    public function countGsIngegevenSamenstellingens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsIngegevenSamenstellingensPartial && !$this->isNew();
        if (null === $this->collGsIngegevenSamenstellingens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsIngegevenSamenstellingens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsIngegevenSamenstellingens());
            }
            $query = GsIngegevenSamenstellingenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsGeneriekeNamen($this)
                ->count($con);
        }

        return count($this->collGsIngegevenSamenstellingens);
    }

    /**
     * Method called to associate a GsIngegevenSamenstellingen object to this object
     * through the GsIngegevenSamenstellingen foreign key attribute.
     *
     * @param    GsIngegevenSamenstellingen $l GsIngegevenSamenstellingen
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function addGsIngegevenSamenstellingen(GsIngegevenSamenstellingen $l)
    {
        if ($this->collGsIngegevenSamenstellingens === null) {
            $this->initGsIngegevenSamenstellingens();
            $this->collGsIngegevenSamenstellingensPartial = true;
        }

        if (!in_array($l, $this->collGsIngegevenSamenstellingens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsIngegevenSamenstellingen($l);

            if ($this->gsIngegevenSamenstellingensScheduledForDeletion and $this->gsIngegevenSamenstellingensScheduledForDeletion->contains($l)) {
                $this->gsIngegevenSamenstellingensScheduledForDeletion->remove($this->gsIngegevenSamenstellingensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsIngegevenSamenstellingen $gsIngegevenSamenstellingen The gsIngegevenSamenstellingen object to add.
     */
    protected function doAddGsIngegevenSamenstellingen($gsIngegevenSamenstellingen)
    {
        $this->collGsIngegevenSamenstellingens[]= $gsIngegevenSamenstellingen;
        $gsIngegevenSamenstellingen->setGsGeneriekeNamen($this);
    }

    /**
     * @param	GsIngegevenSamenstellingen $gsIngegevenSamenstellingen The gsIngegevenSamenstellingen object to remove.
     * @return GsGeneriekeNamen The current object (for fluent API support)
     */
    public function removeGsIngegevenSamenstellingen($gsIngegevenSamenstellingen)
    {
        if ($this->getGsIngegevenSamenstellingens()->contains($gsIngegevenSamenstellingen)) {
            $this->collGsIngegevenSamenstellingens->remove($this->collGsIngegevenSamenstellingens->search($gsIngegevenSamenstellingen));
            if (null === $this->gsIngegevenSamenstellingensScheduledForDeletion) {
                $this->gsIngegevenSamenstellingensScheduledForDeletion = clone $this->collGsIngegevenSamenstellingens;
                $this->gsIngegevenSamenstellingensScheduledForDeletion->clear();
            }
            $this->gsIngegevenSamenstellingensScheduledForDeletion[]= $gsIngegevenSamenstellingen;
            $gsIngegevenSamenstellingen->setGsGeneriekeNamen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsGeneriekeNamen is new, it will return
     * an empty collection; or if this GsGeneriekeNamen has previously
     * been saved, it will retrieve related GsIngegevenSamenstellingens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsGeneriekeNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsIngegevenSamenstellingen[] List of GsIngegevenSamenstellingen objects
     */
    public function getGsIngegevenSamenstellingensJoinGsHandelsproducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsIngegevenSamenstellingenQuery::create(null, $criteria);
        $query->joinWith('GsHandelsproducten', $join_behavior);

        return $this->getGsIngegevenSamenstellingens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsGeneriekeNamen is new, it will return
     * an empty collection; or if this GsGeneriekeNamen has previously
     * been saved, it will retrieve related GsIngegevenSamenstellingens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsGeneriekeNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsIngegevenSamenstellingen[] List of GsIngegevenSamenstellingen objects
     */
    public function getGsIngegevenSamenstellingensJoinEenheidHoeveelheidOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsIngegevenSamenstellingenQuery::create(null, $criteria);
        $query->joinWith('EenheidHoeveelheidOmschrijving', $join_behavior);

        return $this->getGsIngegevenSamenstellingens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsGeneriekeNamen is new, it will return
     * an empty collection; or if this GsGeneriekeNamen has previously
     * been saved, it will retrieve related GsIngegevenSamenstellingens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsGeneriekeNamen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsIngegevenSamenstellingen[] List of GsIngegevenSamenstellingen objects
     */
    public function getGsIngegevenSamenstellingensJoinStamtoedieningswegOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsIngegevenSamenstellingenQuery::create(null, $criteria);
        $query->joinWith('StamtoedieningswegOmschrijving', $join_behavior);

        return $this->getGsIngegevenSamenstellingens($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->generiekenaamkode = null;
        $this->generieke_naam = null;
        $this->stamnaamcode = null;
        $this->volledige_generieke_naam_kode = null;
        $this->kode_stamnaam_toegestaan = null;
        $this->kode_werkzaam_bestanddeelhulpstof = null;
        $this->informatorium_stof_kode = null;
        $this->cas_nummer = null;
        $this->bruto_formule = null;
        $this->molekuulgewicht = null;
        $this->molekuulgewicht_indicator = null;
        $this->molekuulgewicht_voor_samenstelling = null;
        $this->soortelijk_gewicht = null;
        $this->voorkeurseenheid = null;
        $this->kode_rijvaardigheid = null;
        $this->kode_vergift = null;
        $this->kode_opiumwet = null;
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
            if ($this->collGsIngegevenSamenstellingens) {
                foreach ($this->collGsIngegevenSamenstellingens as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collGsIngegevenSamenstellingens instanceof PropelCollection) {
            $this->collGsIngegevenSamenstellingens->clearIterator();
        }
        $this->collGsIngegevenSamenstellingens = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsGeneriekeNamenPeer::DEFAULT_STRING_FORMAT);
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
