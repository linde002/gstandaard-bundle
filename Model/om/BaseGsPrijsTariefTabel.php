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
use PharmaIntelligence\GstandaardBundle\Model\GsPrijsTariefTabel;
use PharmaIntelligence\GstandaardBundle\Model\GsPrijsTariefTabelPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsPrijsTariefTabelQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery;

abstract class BaseGsPrijsTariefTabel extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPrijsTariefTabelPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsPrijsTariefTabelPeer
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
     * The value for the thesaurusverwijzing_soort_codering field.
     * @var        int
     */
    protected $thesaurusverwijzing_soort_codering;

    /**
     * The value for the soort_codering field.
     * @var        int
     */
    protected $soort_codering;

    /**
     * The value for the unieke_id_van_codering field.
     * @var        string
     */
    protected $unieke_id_van_codering;

    /**
     * The value for the thesaurusverwijzing_srt_tariefprijsbedrag field.
     * @var        int
     */
    protected $thesaurusverwijzing_srt_tariefprijsbedrag;

    /**
     * The value for the soort_tariefprijsbedrag field.
     * @var        int
     */
    protected $soort_tariefprijsbedrag;

    /**
     * The value for the thesaurusverwijzing_soort_bron field.
     * @var        int
     */
    protected $thesaurusverwijzing_soort_bron;

    /**
     * The value for the soort_bron field.
     * @var        int
     */
    protected $soort_bron;

    /**
     * The value for the unieke_id_van_bron field.
     * @var        string
     */
    protected $unieke_id_van_bron;

    /**
     * The value for the aanvullende_contract_informatie field.
     * @var        string
     */
    protected $aanvullende_contract_informatie;

    /**
     * The value for the tarief_prijs_bedrag field.
     * @var        string
     */
    protected $tarief_prijs_bedrag;

    /**
     * The value for the startdatum_van_tariefprijsbedrag field.
     * @var        int
     */
    protected $startdatum_van_tariefprijsbedrag;

    /**
     * The value for the einddatum_van_tariefprijsbedrag field.
     * @var        int
     */
    protected $einddatum_van_tariefprijsbedrag;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aSoortCoderingOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aSoortTariefprijsbedragOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aSoortBronOmschrijving;

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
     * Get the [thesaurusverwijzing_soort_codering] column value.
     *
     * @return int
     */
    public function getThesaurusverwijzingSoortCodering()
    {

        return $this->thesaurusverwijzing_soort_codering;
    }

    /**
     * Get the [soort_codering] column value.
     *
     * @return int
     */
    public function getSoortCodering()
    {

        return $this->soort_codering;
    }

    /**
     * Get the [unieke_id_van_codering] column value.
     *
     * @return string
     */
    public function getUniekeIdVanCodering()
    {

        return $this->unieke_id_van_codering;
    }

    /**
     * Get the [thesaurusverwijzing_srt_tariefprijsbedrag] column value.
     *
     * @return int
     */
    public function getThesaurusverwijzingSrtTariefprijsbedrag()
    {

        return $this->thesaurusverwijzing_srt_tariefprijsbedrag;
    }

    /**
     * Get the [soort_tariefprijsbedrag] column value.
     *
     * @return int
     */
    public function getSoortTariefprijsbedrag()
    {

        return $this->soort_tariefprijsbedrag;
    }

    /**
     * Get the [thesaurusverwijzing_soort_bron] column value.
     *
     * @return int
     */
    public function getThesaurusverwijzingSoortBron()
    {

        return $this->thesaurusverwijzing_soort_bron;
    }

    /**
     * Get the [soort_bron] column value.
     *
     * @return int
     */
    public function getSoortBron()
    {

        return $this->soort_bron;
    }

    /**
     * Get the [unieke_id_van_bron] column value.
     *
     * @return string
     */
    public function getUniekeIdVanBron()
    {

        return $this->unieke_id_van_bron;
    }

    /**
     * Get the [aanvullende_contract_informatie] column value.
     *
     * @return string
     */
    public function getAanvullendeContractInformatie()
    {

        return $this->aanvullende_contract_informatie;
    }

    /**
     * Get the [tarief_prijs_bedrag] column value.
     *
     * @return string
     */
    public function getTariefPrijsBedrag()
    {

        return $this->tarief_prijs_bedrag;
    }

    /**
     * Get the [startdatum_van_tariefprijsbedrag] column value.
     *
     * @return int
     */
    public function getStartdatumVanTariefprijsbedrag()
    {

        return $this->startdatum_van_tariefprijsbedrag;
    }

    /**
     * Get the [einddatum_van_tariefprijsbedrag] column value.
     *
     * @return int
     */
    public function getEinddatumVanTariefprijsbedrag()
    {

        return $this->einddatum_van_tariefprijsbedrag;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsPrijsTariefTabel The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsPrijsTariefTabelPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsPrijsTariefTabel The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsPrijsTariefTabelPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [thesaurusverwijzing_soort_codering] column.
     *
     * @param  int $v new value
     * @return GsPrijsTariefTabel The current object (for fluent API support)
     */
    public function setThesaurusverwijzingSoortCodering($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusverwijzing_soort_codering !== $v) {
            $this->thesaurusverwijzing_soort_codering = $v;
            $this->modifiedColumns[] = GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_CODERING;
        }

        if ($this->aSoortCoderingOmschrijving !== null && $this->aSoortCoderingOmschrijving->getThesaurusnummer() !== $v) {
            $this->aSoortCoderingOmschrijving = null;
        }


        return $this;
    } // setThesaurusverwijzingSoortCodering()

    /**
     * Set the value of [soort_codering] column.
     *
     * @param  int $v new value
     * @return GsPrijsTariefTabel The current object (for fluent API support)
     */
    public function setSoortCodering($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->soort_codering !== $v) {
            $this->soort_codering = $v;
            $this->modifiedColumns[] = GsPrijsTariefTabelPeer::SOORT_CODERING;
        }

        if ($this->aSoortCoderingOmschrijving !== null && $this->aSoortCoderingOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aSoortCoderingOmschrijving = null;
        }


        return $this;
    } // setSoortCodering()

    /**
     * Set the value of [unieke_id_van_codering] column.
     *
     * @param  string $v new value
     * @return GsPrijsTariefTabel The current object (for fluent API support)
     */
    public function setUniekeIdVanCodering($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->unieke_id_van_codering !== $v) {
            $this->unieke_id_van_codering = $v;
            $this->modifiedColumns[] = GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_CODERING;
        }


        return $this;
    } // setUniekeIdVanCodering()

    /**
     * Set the value of [thesaurusverwijzing_srt_tariefprijsbedrag] column.
     *
     * @param  int $v new value
     * @return GsPrijsTariefTabel The current object (for fluent API support)
     */
    public function setThesaurusverwijzingSrtTariefprijsbedrag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusverwijzing_srt_tariefprijsbedrag !== $v) {
            $this->thesaurusverwijzing_srt_tariefprijsbedrag = $v;
            $this->modifiedColumns[] = GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SRT_TARIEFPRIJSBEDRAG;
        }

        if ($this->aSoortTariefprijsbedragOmschrijving !== null && $this->aSoortTariefprijsbedragOmschrijving->getThesaurusnummer() !== $v) {
            $this->aSoortTariefprijsbedragOmschrijving = null;
        }


        return $this;
    } // setThesaurusverwijzingSrtTariefprijsbedrag()

    /**
     * Set the value of [soort_tariefprijsbedrag] column.
     *
     * @param  int $v new value
     * @return GsPrijsTariefTabel The current object (for fluent API support)
     */
    public function setSoortTariefprijsbedrag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->soort_tariefprijsbedrag !== $v) {
            $this->soort_tariefprijsbedrag = $v;
            $this->modifiedColumns[] = GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG;
        }

        if ($this->aSoortTariefprijsbedragOmschrijving !== null && $this->aSoortTariefprijsbedragOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aSoortTariefprijsbedragOmschrijving = null;
        }


        return $this;
    } // setSoortTariefprijsbedrag()

    /**
     * Set the value of [thesaurusverwijzing_soort_bron] column.
     *
     * @param  int $v new value
     * @return GsPrijsTariefTabel The current object (for fluent API support)
     */
    public function setThesaurusverwijzingSoortBron($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusverwijzing_soort_bron !== $v) {
            $this->thesaurusverwijzing_soort_bron = $v;
            $this->modifiedColumns[] = GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_BRON;
        }

        if ($this->aSoortBronOmschrijving !== null && $this->aSoortBronOmschrijving->getThesaurusnummer() !== $v) {
            $this->aSoortBronOmschrijving = null;
        }


        return $this;
    } // setThesaurusverwijzingSoortBron()

    /**
     * Set the value of [soort_bron] column.
     *
     * @param  int $v new value
     * @return GsPrijsTariefTabel The current object (for fluent API support)
     */
    public function setSoortBron($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->soort_bron !== $v) {
            $this->soort_bron = $v;
            $this->modifiedColumns[] = GsPrijsTariefTabelPeer::SOORT_BRON;
        }

        if ($this->aSoortBronOmschrijving !== null && $this->aSoortBronOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aSoortBronOmschrijving = null;
        }


        return $this;
    } // setSoortBron()

    /**
     * Set the value of [unieke_id_van_bron] column.
     *
     * @param  string $v new value
     * @return GsPrijsTariefTabel The current object (for fluent API support)
     */
    public function setUniekeIdVanBron($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->unieke_id_van_bron !== $v) {
            $this->unieke_id_van_bron = $v;
            $this->modifiedColumns[] = GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_BRON;
        }


        return $this;
    } // setUniekeIdVanBron()

    /**
     * Set the value of [aanvullende_contract_informatie] column.
     *
     * @param  string $v new value
     * @return GsPrijsTariefTabel The current object (for fluent API support)
     */
    public function setAanvullendeContractInformatie($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aanvullende_contract_informatie !== $v) {
            $this->aanvullende_contract_informatie = $v;
            $this->modifiedColumns[] = GsPrijsTariefTabelPeer::AANVULLENDE_CONTRACT_INFORMATIE;
        }


        return $this;
    } // setAanvullendeContractInformatie()

    /**
     * Set the value of [tarief_prijs_bedrag] column.
     *
     * @param  string $v new value
     * @return GsPrijsTariefTabel The current object (for fluent API support)
     */
    public function setTariefPrijsBedrag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tarief_prijs_bedrag !== $v) {
            $this->tarief_prijs_bedrag = $v;
            $this->modifiedColumns[] = GsPrijsTariefTabelPeer::TARIEF_PRIJS_BEDRAG;
        }


        return $this;
    } // setTariefPrijsBedrag()

    /**
     * Set the value of [startdatum_van_tariefprijsbedrag] column.
     *
     * @param  int $v new value
     * @return GsPrijsTariefTabel The current object (for fluent API support)
     */
    public function setStartdatumVanTariefprijsbedrag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->startdatum_van_tariefprijsbedrag !== $v) {
            $this->startdatum_van_tariefprijsbedrag = $v;
            $this->modifiedColumns[] = GsPrijsTariefTabelPeer::STARTDATUM_VAN_TARIEFPRIJSBEDRAG;
        }


        return $this;
    } // setStartdatumVanTariefprijsbedrag()

    /**
     * Set the value of [einddatum_van_tariefprijsbedrag] column.
     *
     * @param  int $v new value
     * @return GsPrijsTariefTabel The current object (for fluent API support)
     */
    public function setEinddatumVanTariefprijsbedrag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->einddatum_van_tariefprijsbedrag !== $v) {
            $this->einddatum_van_tariefprijsbedrag = $v;
            $this->modifiedColumns[] = GsPrijsTariefTabelPeer::EINDDATUM_VAN_TARIEFPRIJSBEDRAG;
        }


        return $this;
    } // setEinddatumVanTariefprijsbedrag()

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
            $this->thesaurusverwijzing_soort_codering = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->soort_codering = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->unieke_id_van_codering = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->thesaurusverwijzing_srt_tariefprijsbedrag = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->soort_tariefprijsbedrag = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->thesaurusverwijzing_soort_bron = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->soort_bron = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->unieke_id_van_bron = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->aanvullende_contract_informatie = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->tarief_prijs_bedrag = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->startdatum_van_tariefprijsbedrag = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->einddatum_van_tariefprijsbedrag = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = GsPrijsTariefTabelPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsPrijsTariefTabel object", $e);
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

        if ($this->aSoortCoderingOmschrijving !== null && $this->thesaurusverwijzing_soort_codering !== $this->aSoortCoderingOmschrijving->getThesaurusnummer()) {
            $this->aSoortCoderingOmschrijving = null;
        }
        if ($this->aSoortCoderingOmschrijving !== null && $this->soort_codering !== $this->aSoortCoderingOmschrijving->getThesaurusItemnummer()) {
            $this->aSoortCoderingOmschrijving = null;
        }
        if ($this->aSoortTariefprijsbedragOmschrijving !== null && $this->thesaurusverwijzing_srt_tariefprijsbedrag !== $this->aSoortTariefprijsbedragOmschrijving->getThesaurusnummer()) {
            $this->aSoortTariefprijsbedragOmschrijving = null;
        }
        if ($this->aSoortTariefprijsbedragOmschrijving !== null && $this->soort_tariefprijsbedrag !== $this->aSoortTariefprijsbedragOmschrijving->getThesaurusItemnummer()) {
            $this->aSoortTariefprijsbedragOmschrijving = null;
        }
        if ($this->aSoortBronOmschrijving !== null && $this->thesaurusverwijzing_soort_bron !== $this->aSoortBronOmschrijving->getThesaurusnummer()) {
            $this->aSoortBronOmschrijving = null;
        }
        if ($this->aSoortBronOmschrijving !== null && $this->soort_bron !== $this->aSoortBronOmschrijving->getThesaurusItemnummer()) {
            $this->aSoortBronOmschrijving = null;
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
            $con = Propel::getConnection(GsPrijsTariefTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsPrijsTariefTabelPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSoortCoderingOmschrijving = null;
            $this->aSoortTariefprijsbedragOmschrijving = null;
            $this->aSoortBronOmschrijving = null;
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
            $con = Propel::getConnection(GsPrijsTariefTabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsPrijsTariefTabelQuery::create()
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
            $con = Propel::getConnection(GsPrijsTariefTabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsPrijsTariefTabelPeer::addInstanceToPool($this);
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

            if ($this->aSoortCoderingOmschrijving !== null) {
                if ($this->aSoortCoderingOmschrijving->isModified() || $this->aSoortCoderingOmschrijving->isNew()) {
                    $affectedRows += $this->aSoortCoderingOmschrijving->save($con);
                }
                $this->setSoortCoderingOmschrijving($this->aSoortCoderingOmschrijving);
            }

            if ($this->aSoortTariefprijsbedragOmschrijving !== null) {
                if ($this->aSoortTariefprijsbedragOmschrijving->isModified() || $this->aSoortTariefprijsbedragOmschrijving->isNew()) {
                    $affectedRows += $this->aSoortTariefprijsbedragOmschrijving->save($con);
                }
                $this->setSoortTariefprijsbedragOmschrijving($this->aSoortTariefprijsbedragOmschrijving);
            }

            if ($this->aSoortBronOmschrijving !== null) {
                if ($this->aSoortBronOmschrijving->isModified() || $this->aSoortBronOmschrijving->isNew()) {
                    $affectedRows += $this->aSoortBronOmschrijving->save($con);
                }
                $this->setSoortBronOmschrijving($this->aSoortBronOmschrijving);
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
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_CODERING)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusverwijzing_soort_codering`';
        }
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::SOORT_CODERING)) {
            $modifiedColumns[':p' . $index++]  = '`soort_codering`';
        }
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_CODERING)) {
            $modifiedColumns[':p' . $index++]  = '`unieke_id_van_codering`';
        }
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SRT_TARIEFPRIJSBEDRAG)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusverwijzing_srt_tariefprijsbedrag`';
        }
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG)) {
            $modifiedColumns[':p' . $index++]  = '`soort_tariefprijsbedrag`';
        }
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_BRON)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusverwijzing_soort_bron`';
        }
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::SOORT_BRON)) {
            $modifiedColumns[':p' . $index++]  = '`soort_bron`';
        }
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_BRON)) {
            $modifiedColumns[':p' . $index++]  = '`unieke_id_van_bron`';
        }
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::AANVULLENDE_CONTRACT_INFORMATIE)) {
            $modifiedColumns[':p' . $index++]  = '`aanvullende_contract_informatie`';
        }
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::TARIEF_PRIJS_BEDRAG)) {
            $modifiedColumns[':p' . $index++]  = '`tarief_prijs_bedrag`';
        }
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::STARTDATUM_VAN_TARIEFPRIJSBEDRAG)) {
            $modifiedColumns[':p' . $index++]  = '`startdatum_van_tariefprijsbedrag`';
        }
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::EINDDATUM_VAN_TARIEFPRIJSBEDRAG)) {
            $modifiedColumns[':p' . $index++]  = '`einddatum_van_tariefprijsbedrag`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_prijs_tarief_tabel` (%s) VALUES (%s)',
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
                    case '`thesaurusverwijzing_soort_codering`':
                        $stmt->bindValue($identifier, $this->thesaurusverwijzing_soort_codering, PDO::PARAM_INT);
                        break;
                    case '`soort_codering`':
                        $stmt->bindValue($identifier, $this->soort_codering, PDO::PARAM_INT);
                        break;
                    case '`unieke_id_van_codering`':
                        $stmt->bindValue($identifier, $this->unieke_id_van_codering, PDO::PARAM_STR);
                        break;
                    case '`thesaurusverwijzing_srt_tariefprijsbedrag`':
                        $stmt->bindValue($identifier, $this->thesaurusverwijzing_srt_tariefprijsbedrag, PDO::PARAM_INT);
                        break;
                    case '`soort_tariefprijsbedrag`':
                        $stmt->bindValue($identifier, $this->soort_tariefprijsbedrag, PDO::PARAM_INT);
                        break;
                    case '`thesaurusverwijzing_soort_bron`':
                        $stmt->bindValue($identifier, $this->thesaurusverwijzing_soort_bron, PDO::PARAM_INT);
                        break;
                    case '`soort_bron`':
                        $stmt->bindValue($identifier, $this->soort_bron, PDO::PARAM_INT);
                        break;
                    case '`unieke_id_van_bron`':
                        $stmt->bindValue($identifier, $this->unieke_id_van_bron, PDO::PARAM_STR);
                        break;
                    case '`aanvullende_contract_informatie`':
                        $stmt->bindValue($identifier, $this->aanvullende_contract_informatie, PDO::PARAM_STR);
                        break;
                    case '`tarief_prijs_bedrag`':
                        $stmt->bindValue($identifier, $this->tarief_prijs_bedrag, PDO::PARAM_STR);
                        break;
                    case '`startdatum_van_tariefprijsbedrag`':
                        $stmt->bindValue($identifier, $this->startdatum_van_tariefprijsbedrag, PDO::PARAM_INT);
                        break;
                    case '`einddatum_van_tariefprijsbedrag`':
                        $stmt->bindValue($identifier, $this->einddatum_van_tariefprijsbedrag, PDO::PARAM_INT);
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

            if ($this->aSoortCoderingOmschrijving !== null) {
                if (!$this->aSoortCoderingOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSoortCoderingOmschrijving->getValidationFailures());
                }
            }

            if ($this->aSoortTariefprijsbedragOmschrijving !== null) {
                if (!$this->aSoortTariefprijsbedragOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSoortTariefprijsbedragOmschrijving->getValidationFailures());
                }
            }

            if ($this->aSoortBronOmschrijving !== null) {
                if (!$this->aSoortBronOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSoortBronOmschrijving->getValidationFailures());
                }
            }


            if (($retval = GsPrijsTariefTabelPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsPrijsTariefTabelPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getThesaurusverwijzingSoortCodering();
                break;
            case 3:
                return $this->getSoortCodering();
                break;
            case 4:
                return $this->getUniekeIdVanCodering();
                break;
            case 5:
                return $this->getThesaurusverwijzingSrtTariefprijsbedrag();
                break;
            case 6:
                return $this->getSoortTariefprijsbedrag();
                break;
            case 7:
                return $this->getThesaurusverwijzingSoortBron();
                break;
            case 8:
                return $this->getSoortBron();
                break;
            case 9:
                return $this->getUniekeIdVanBron();
                break;
            case 10:
                return $this->getAanvullendeContractInformatie();
                break;
            case 11:
                return $this->getTariefPrijsBedrag();
                break;
            case 12:
                return $this->getStartdatumVanTariefprijsbedrag();
                break;
            case 13:
                return $this->getEinddatumVanTariefprijsbedrag();
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
        if (isset($alreadyDumpedObjects['GsPrijsTariefTabel'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsPrijsTariefTabel'][serialize($this->getPrimaryKey())] = true;
        $keys = GsPrijsTariefTabelPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getThesaurusverwijzingSoortCodering(),
            $keys[3] => $this->getSoortCodering(),
            $keys[4] => $this->getUniekeIdVanCodering(),
            $keys[5] => $this->getThesaurusverwijzingSrtTariefprijsbedrag(),
            $keys[6] => $this->getSoortTariefprijsbedrag(),
            $keys[7] => $this->getThesaurusverwijzingSoortBron(),
            $keys[8] => $this->getSoortBron(),
            $keys[9] => $this->getUniekeIdVanBron(),
            $keys[10] => $this->getAanvullendeContractInformatie(),
            $keys[11] => $this->getTariefPrijsBedrag(),
            $keys[12] => $this->getStartdatumVanTariefprijsbedrag(),
            $keys[13] => $this->getEinddatumVanTariefprijsbedrag(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSoortCoderingOmschrijving) {
                $result['SoortCoderingOmschrijving'] = $this->aSoortCoderingOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSoortTariefprijsbedragOmschrijving) {
                $result['SoortTariefprijsbedragOmschrijving'] = $this->aSoortTariefprijsbedragOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSoortBronOmschrijving) {
                $result['SoortBronOmschrijving'] = $this->aSoortBronOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = GsPrijsTariefTabelPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setThesaurusverwijzingSoortCodering($value);
                break;
            case 3:
                $this->setSoortCodering($value);
                break;
            case 4:
                $this->setUniekeIdVanCodering($value);
                break;
            case 5:
                $this->setThesaurusverwijzingSrtTariefprijsbedrag($value);
                break;
            case 6:
                $this->setSoortTariefprijsbedrag($value);
                break;
            case 7:
                $this->setThesaurusverwijzingSoortBron($value);
                break;
            case 8:
                $this->setSoortBron($value);
                break;
            case 9:
                $this->setUniekeIdVanBron($value);
                break;
            case 10:
                $this->setAanvullendeContractInformatie($value);
                break;
            case 11:
                $this->setTariefPrijsBedrag($value);
                break;
            case 12:
                $this->setStartdatumVanTariefprijsbedrag($value);
                break;
            case 13:
                $this->setEinddatumVanTariefprijsbedrag($value);
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
        $keys = GsPrijsTariefTabelPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setThesaurusverwijzingSoortCodering($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSoortCodering($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setUniekeIdVanCodering($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setThesaurusverwijzingSrtTariefprijsbedrag($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSoortTariefprijsbedrag($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setThesaurusverwijzingSoortBron($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setSoortBron($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setUniekeIdVanBron($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAanvullendeContractInformatie($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTariefPrijsBedrag($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setStartdatumVanTariefprijsbedrag($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setEinddatumVanTariefprijsbedrag($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsPrijsTariefTabelPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsPrijsTariefTabelPeer::BESTANDNUMMER)) $criteria->add(GsPrijsTariefTabelPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::MUTATIEKODE)) $criteria->add(GsPrijsTariefTabelPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_CODERING)) $criteria->add(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_CODERING, $this->thesaurusverwijzing_soort_codering);
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::SOORT_CODERING)) $criteria->add(GsPrijsTariefTabelPeer::SOORT_CODERING, $this->soort_codering);
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_CODERING)) $criteria->add(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_CODERING, $this->unieke_id_van_codering);
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SRT_TARIEFPRIJSBEDRAG)) $criteria->add(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SRT_TARIEFPRIJSBEDRAG, $this->thesaurusverwijzing_srt_tariefprijsbedrag);
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG)) $criteria->add(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG, $this->soort_tariefprijsbedrag);
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_BRON)) $criteria->add(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_BRON, $this->thesaurusverwijzing_soort_bron);
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::SOORT_BRON)) $criteria->add(GsPrijsTariefTabelPeer::SOORT_BRON, $this->soort_bron);
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_BRON)) $criteria->add(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_BRON, $this->unieke_id_van_bron);
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::AANVULLENDE_CONTRACT_INFORMATIE)) $criteria->add(GsPrijsTariefTabelPeer::AANVULLENDE_CONTRACT_INFORMATIE, $this->aanvullende_contract_informatie);
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::TARIEF_PRIJS_BEDRAG)) $criteria->add(GsPrijsTariefTabelPeer::TARIEF_PRIJS_BEDRAG, $this->tarief_prijs_bedrag);
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::STARTDATUM_VAN_TARIEFPRIJSBEDRAG)) $criteria->add(GsPrijsTariefTabelPeer::STARTDATUM_VAN_TARIEFPRIJSBEDRAG, $this->startdatum_van_tariefprijsbedrag);
        if ($this->isColumnModified(GsPrijsTariefTabelPeer::EINDDATUM_VAN_TARIEFPRIJSBEDRAG)) $criteria->add(GsPrijsTariefTabelPeer::EINDDATUM_VAN_TARIEFPRIJSBEDRAG, $this->einddatum_van_tariefprijsbedrag);

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
        $criteria = new Criteria(GsPrijsTariefTabelPeer::DATABASE_NAME);
        $criteria->add(GsPrijsTariefTabelPeer::SOORT_CODERING, $this->soort_codering);
        $criteria->add(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_CODERING, $this->unieke_id_van_codering);
        $criteria->add(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG, $this->soort_tariefprijsbedrag);
        $criteria->add(GsPrijsTariefTabelPeer::SOORT_BRON, $this->soort_bron);
        $criteria->add(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_BRON, $this->unieke_id_van_bron);
        $criteria->add(GsPrijsTariefTabelPeer::AANVULLENDE_CONTRACT_INFORMATIE, $this->aanvullende_contract_informatie);

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
        $pks[0] = $this->getSoortCodering();
        $pks[1] = $this->getUniekeIdVanCodering();
        $pks[2] = $this->getSoortTariefprijsbedrag();
        $pks[3] = $this->getSoortBron();
        $pks[4] = $this->getUniekeIdVanBron();
        $pks[5] = $this->getAanvullendeContractInformatie();

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
        $this->setSoortCodering($keys[0]);
        $this->setUniekeIdVanCodering($keys[1]);
        $this->setSoortTariefprijsbedrag($keys[2]);
        $this->setSoortBron($keys[3]);
        $this->setUniekeIdVanBron($keys[4]);
        $this->setAanvullendeContractInformatie($keys[5]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getSoortCodering()) && (null === $this->getUniekeIdVanCodering()) && (null === $this->getSoortTariefprijsbedrag()) && (null === $this->getSoortBron()) && (null === $this->getUniekeIdVanBron()) && (null === $this->getAanvullendeContractInformatie());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsPrijsTariefTabel (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setThesaurusverwijzingSoortCodering($this->getThesaurusverwijzingSoortCodering());
        $copyObj->setSoortCodering($this->getSoortCodering());
        $copyObj->setUniekeIdVanCodering($this->getUniekeIdVanCodering());
        $copyObj->setThesaurusverwijzingSrtTariefprijsbedrag($this->getThesaurusverwijzingSrtTariefprijsbedrag());
        $copyObj->setSoortTariefprijsbedrag($this->getSoortTariefprijsbedrag());
        $copyObj->setThesaurusverwijzingSoortBron($this->getThesaurusverwijzingSoortBron());
        $copyObj->setSoortBron($this->getSoortBron());
        $copyObj->setUniekeIdVanBron($this->getUniekeIdVanBron());
        $copyObj->setAanvullendeContractInformatie($this->getAanvullendeContractInformatie());
        $copyObj->setTariefPrijsBedrag($this->getTariefPrijsBedrag());
        $copyObj->setStartdatumVanTariefprijsbedrag($this->getStartdatumVanTariefprijsbedrag());
        $copyObj->setEinddatumVanTariefprijsbedrag($this->getEinddatumVanTariefprijsbedrag());

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
     * @return GsPrijsTariefTabel Clone of current object.
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
     * @return GsPrijsTariefTabelPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsPrijsTariefTabelPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsPrijsTariefTabel The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSoortCoderingOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesaurusverwijzingSoortCodering(NULL);
        } else {
            $this->setThesaurusverwijzingSoortCodering($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setSoortCodering(NULL);
        } else {
            $this->setSoortCodering($v->getThesaurusItemnummer());
        }

        $this->aSoortCoderingOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering($this);
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
    public function getSoortCoderingOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSoortCoderingOmschrijving === null && ($this->thesaurusverwijzing_soort_codering !== null && $this->soort_codering !== null) && $doQuery) {
            $this->aSoortCoderingOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesaurusverwijzing_soort_codering, $this->soort_codering), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSoortCoderingOmschrijving->addGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering($this);
             */
        }

        return $this->aSoortCoderingOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsPrijsTariefTabel The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSoortTariefprijsbedragOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesaurusverwijzingSrtTariefprijsbedrag(NULL);
        } else {
            $this->setThesaurusverwijzingSrtTariefprijsbedrag($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setSoortTariefprijsbedrag(NULL);
        } else {
            $this->setSoortTariefprijsbedrag($v->getThesaurusItemnummer());
        }

        $this->aSoortTariefprijsbedragOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag($this);
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
    public function getSoortTariefprijsbedragOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSoortTariefprijsbedragOmschrijving === null && ($this->thesaurusverwijzing_srt_tariefprijsbedrag !== null && $this->soort_tariefprijsbedrag !== null) && $doQuery) {
            $this->aSoortTariefprijsbedragOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesaurusverwijzing_srt_tariefprijsbedrag, $this->soort_tariefprijsbedrag), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSoortTariefprijsbedragOmschrijving->addGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag($this);
             */
        }

        return $this->aSoortTariefprijsbedragOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsPrijsTariefTabel The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSoortBronOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesaurusverwijzingSoortBron(NULL);
        } else {
            $this->setThesaurusverwijzingSoortBron($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setSoortBron(NULL);
        } else {
            $this->setSoortBron($v->getThesaurusItemnummer());
        }

        $this->aSoortBronOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron($this);
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
    public function getSoortBronOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSoortBronOmschrijving === null && ($this->thesaurusverwijzing_soort_bron !== null && $this->soort_bron !== null) && $doQuery) {
            $this->aSoortBronOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesaurusverwijzing_soort_bron, $this->soort_bron), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSoortBronOmschrijving->addGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron($this);
             */
        }

        return $this->aSoortBronOmschrijving;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->thesaurusverwijzing_soort_codering = null;
        $this->soort_codering = null;
        $this->unieke_id_van_codering = null;
        $this->thesaurusverwijzing_srt_tariefprijsbedrag = null;
        $this->soort_tariefprijsbedrag = null;
        $this->thesaurusverwijzing_soort_bron = null;
        $this->soort_bron = null;
        $this->unieke_id_van_bron = null;
        $this->aanvullende_contract_informatie = null;
        $this->tarief_prijs_bedrag = null;
        $this->startdatum_van_tariefprijsbedrag = null;
        $this->einddatum_van_tariefprijsbedrag = null;
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
            if ($this->aSoortCoderingOmschrijving instanceof Persistent) {
              $this->aSoortCoderingOmschrijving->clearAllReferences($deep);
            }
            if ($this->aSoortTariefprijsbedragOmschrijving instanceof Persistent) {
              $this->aSoortTariefprijsbedragOmschrijving->clearAllReferences($deep);
            }
            if ($this->aSoortBronOmschrijving instanceof Persistent) {
              $this->aSoortBronOmschrijving->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aSoortCoderingOmschrijving = null;
        $this->aSoortTariefprijsbedragOmschrijving = null;
        $this->aSoortBronOmschrijving = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsPrijsTariefTabelPeer::DEFAULT_STRING_FORMAT);
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
