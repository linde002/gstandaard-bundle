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
use PharmaIntelligence\GstandaardBundle\Model\GsCodestelselZrsOnderlingVerband;
use PharmaIntelligence\GstandaardBundle\Model\GsCodestelselZrsOnderlingVerbandPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsCodestelselZrsOnderlingVerbandQuery;

abstract class BaseGsCodestelselZrsOnderlingVerband extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsCodestelselZrsOnderlingVerbandPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsCodestelselZrsOnderlingVerbandPeer
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
     * The value for the zorg_registratie_nummer_van_de_actie field.
     * @var        int
     */
    protected $zorg_registratie_nummer_van_de_actie;

    /**
     * The value for the zorg_registratie_nummer_van_de_actiegroep field.
     * @var        int
     */
    protected $zorg_registratie_nummer_van_de_actiegroep;

    /**
     * The value for the zorg_registratie_nummer_van_de_actieregel field.
     * @var        int
     */
    protected $zorg_registratie_nummer_van_de_actieregel;

    /**
     * The value for the zorg_registratie_nummer_van_de_analyse field.
     * @var        int
     */
    protected $zorg_registratie_nummer_van_de_analyse;

    /**
     * The value for the zorg_registratie_nummer_van_de_subanalyse field.
     * @var        int
     */
    protected $zorg_registratie_nummer_van_de_subanalyse;

    /**
     * The value for the zorg_registratie_nummer_van_de_aanleiding field.
     * @var        int
     */
    protected $zorg_registratie_nummer_van_de_aanleiding;

    /**
     * The value for the zorg_registratie_nummer_van_de_subaanleiding field.
     * @var        int
     */
    protected $zorg_registratie_nummer_van_de_subaanleiding;

    /**
     * The value for the tekstmodulethesaurus_103 field.
     * @var        int
     */
    protected $tekstmodulethesaurus_103;

    /**
     * The value for the tekstmodule field.
     * @var        int
     */
    protected $tekstmodule;

    /**
     * The value for the tekstsoortthesaurus_104 field.
     * @var        int
     */
    protected $tekstsoortthesaurus_104;

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
     * The value for the opnemen_als_favoriet_na_aanleiding_en_analyse field.
     * @var        string
     */
    protected $opnemen_als_favoriet_na_aanleiding_en_analyse;

    /**
     * The value for the opn_als_favoriet_na_aanleiding_analyse_en_actie field.
     * @var        string
     */
    protected $opn_als_favoriet_na_aanleiding_analyse_en_actie;

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
     * Get the [zorg_registratie_nummer_van_de_actie] column value.
     *
     * @return int
     */
    public function getZorgRegistratieNummerVanDeActie()
    {

        return $this->zorg_registratie_nummer_van_de_actie;
    }

    /**
     * Get the [zorg_registratie_nummer_van_de_actiegroep] column value.
     *
     * @return int
     */
    public function getZorgRegistratieNummerVanDeActiegroep()
    {

        return $this->zorg_registratie_nummer_van_de_actiegroep;
    }

    /**
     * Get the [zorg_registratie_nummer_van_de_actieregel] column value.
     *
     * @return int
     */
    public function getZorgRegistratieNummerVanDeActieregel()
    {

        return $this->zorg_registratie_nummer_van_de_actieregel;
    }

    /**
     * Get the [zorg_registratie_nummer_van_de_analyse] column value.
     *
     * @return int
     */
    public function getZorgRegistratieNummerVanDeAnalyse()
    {

        return $this->zorg_registratie_nummer_van_de_analyse;
    }

    /**
     * Get the [zorg_registratie_nummer_van_de_subanalyse] column value.
     *
     * @return int
     */
    public function getZorgRegistratieNummerVanDeSubanalyse()
    {

        return $this->zorg_registratie_nummer_van_de_subanalyse;
    }

    /**
     * Get the [zorg_registratie_nummer_van_de_aanleiding] column value.
     *
     * @return int
     */
    public function getZorgRegistratieNummerVanDeAanleiding()
    {

        return $this->zorg_registratie_nummer_van_de_aanleiding;
    }

    /**
     * Get the [zorg_registratie_nummer_van_de_subaanleiding] column value.
     *
     * @return int
     */
    public function getZorgRegistratieNummerVanDeSubaanleiding()
    {

        return $this->zorg_registratie_nummer_van_de_subaanleiding;
    }

    /**
     * Get the [tekstmodulethesaurus_103] column value.
     *
     * @return int
     */
    public function getTekstmodulethesaurus103()
    {

        return $this->tekstmodulethesaurus_103;
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
     * Get the [tekstsoortthesaurus_104] column value.
     *
     * @return int
     */
    public function getTekstsoortthesaurus104()
    {

        return $this->tekstsoortthesaurus_104;
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
     * Get the [opnemen_als_favoriet_na_aanleiding_en_analyse] column value.
     *
     * @return string
     */
    public function getOpnemenAlsFavorietNaAanleidingEnAnalyse()
    {

        return $this->opnemen_als_favoriet_na_aanleiding_en_analyse;
    }

    /**
     * Get the [opn_als_favoriet_na_aanleiding_analyse_en_actie] column value.
     *
     * @return string
     */
    public function getOpnAlsFavorietNaAanleidingAnalyseEnActie()
    {

        return $this->opn_als_favoriet_na_aanleiding_analyse_en_actie;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrsOnderlingVerband The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsCodestelselZrsOnderlingVerbandPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrsOnderlingVerband The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsCodestelselZrsOnderlingVerbandPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [zorg_registratie_nummer_van_de_actie] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrsOnderlingVerband The current object (for fluent API support)
     */
    public function setZorgRegistratieNummerVanDeActie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zorg_registratie_nummer_van_de_actie !== $v) {
            $this->zorg_registratie_nummer_van_de_actie = $v;
            $this->modifiedColumns[] = GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE;
        }


        return $this;
    } // setZorgRegistratieNummerVanDeActie()

    /**
     * Set the value of [zorg_registratie_nummer_van_de_actiegroep] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrsOnderlingVerband The current object (for fluent API support)
     */
    public function setZorgRegistratieNummerVanDeActiegroep($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zorg_registratie_nummer_van_de_actiegroep !== $v) {
            $this->zorg_registratie_nummer_van_de_actiegroep = $v;
            $this->modifiedColumns[] = GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP;
        }


        return $this;
    } // setZorgRegistratieNummerVanDeActiegroep()

    /**
     * Set the value of [zorg_registratie_nummer_van_de_actieregel] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrsOnderlingVerband The current object (for fluent API support)
     */
    public function setZorgRegistratieNummerVanDeActieregel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zorg_registratie_nummer_van_de_actieregel !== $v) {
            $this->zorg_registratie_nummer_van_de_actieregel = $v;
            $this->modifiedColumns[] = GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL;
        }


        return $this;
    } // setZorgRegistratieNummerVanDeActieregel()

    /**
     * Set the value of [zorg_registratie_nummer_van_de_analyse] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrsOnderlingVerband The current object (for fluent API support)
     */
    public function setZorgRegistratieNummerVanDeAnalyse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zorg_registratie_nummer_van_de_analyse !== $v) {
            $this->zorg_registratie_nummer_van_de_analyse = $v;
            $this->modifiedColumns[] = GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE;
        }


        return $this;
    } // setZorgRegistratieNummerVanDeAnalyse()

    /**
     * Set the value of [zorg_registratie_nummer_van_de_subanalyse] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrsOnderlingVerband The current object (for fluent API support)
     */
    public function setZorgRegistratieNummerVanDeSubanalyse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zorg_registratie_nummer_van_de_subanalyse !== $v) {
            $this->zorg_registratie_nummer_van_de_subanalyse = $v;
            $this->modifiedColumns[] = GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE;
        }


        return $this;
    } // setZorgRegistratieNummerVanDeSubanalyse()

    /**
     * Set the value of [zorg_registratie_nummer_van_de_aanleiding] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrsOnderlingVerband The current object (for fluent API support)
     */
    public function setZorgRegistratieNummerVanDeAanleiding($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zorg_registratie_nummer_van_de_aanleiding !== $v) {
            $this->zorg_registratie_nummer_van_de_aanleiding = $v;
            $this->modifiedColumns[] = GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING;
        }


        return $this;
    } // setZorgRegistratieNummerVanDeAanleiding()

    /**
     * Set the value of [zorg_registratie_nummer_van_de_subaanleiding] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrsOnderlingVerband The current object (for fluent API support)
     */
    public function setZorgRegistratieNummerVanDeSubaanleiding($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zorg_registratie_nummer_van_de_subaanleiding !== $v) {
            $this->zorg_registratie_nummer_van_de_subaanleiding = $v;
            $this->modifiedColumns[] = GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING;
        }


        return $this;
    } // setZorgRegistratieNummerVanDeSubaanleiding()

    /**
     * Set the value of [tekstmodulethesaurus_103] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrsOnderlingVerband The current object (for fluent API support)
     */
    public function setTekstmodulethesaurus103($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekstmodulethesaurus_103 !== $v) {
            $this->tekstmodulethesaurus_103 = $v;
            $this->modifiedColumns[] = GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULETHESAURUS_103;
        }


        return $this;
    } // setTekstmodulethesaurus103()

    /**
     * Set the value of [tekstmodule] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrsOnderlingVerband The current object (for fluent API support)
     */
    public function setTekstmodule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekstmodule !== $v) {
            $this->tekstmodule = $v;
            $this->modifiedColumns[] = GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULE;
        }


        return $this;
    } // setTekstmodule()

    /**
     * Set the value of [tekstsoortthesaurus_104] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrsOnderlingVerband The current object (for fluent API support)
     */
    public function setTekstsoortthesaurus104($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekstsoortthesaurus_104 !== $v) {
            $this->tekstsoortthesaurus_104 = $v;
            $this->modifiedColumns[] = GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORTTHESAURUS_104;
        }


        return $this;
    } // setTekstsoortthesaurus104()

    /**
     * Set the value of [tekstsoort] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrsOnderlingVerband The current object (for fluent API support)
     */
    public function setTekstsoort($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekstsoort !== $v) {
            $this->tekstsoort = $v;
            $this->modifiedColumns[] = GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORT;
        }


        return $this;
    } // setTekstsoort()

    /**
     * Set the value of [tekst_nivo_kode] column.
     *
     * @param  int $v new value
     * @return GsCodestelselZrsOnderlingVerband The current object (for fluent API support)
     */
    public function setTekstNivoKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tekst_nivo_kode !== $v) {
            $this->tekst_nivo_kode = $v;
            $this->modifiedColumns[] = GsCodestelselZrsOnderlingVerbandPeer::TEKST_NIVO_KODE;
        }


        return $this;
    } // setTekstNivoKode()

    /**
     * Set the value of [opnemen_als_favoriet_na_aanleiding_en_analyse] column.
     *
     * @param  string $v new value
     * @return GsCodestelselZrsOnderlingVerband The current object (for fluent API support)
     */
    public function setOpnemenAlsFavorietNaAanleidingEnAnalyse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->opnemen_als_favoriet_na_aanleiding_en_analyse !== $v) {
            $this->opnemen_als_favoriet_na_aanleiding_en_analyse = $v;
            $this->modifiedColumns[] = GsCodestelselZrsOnderlingVerbandPeer::OPNEMEN_ALS_FAVORIET_NA_AANLEIDING_EN_ANALYSE;
        }


        return $this;
    } // setOpnemenAlsFavorietNaAanleidingEnAnalyse()

    /**
     * Set the value of [opn_als_favoriet_na_aanleiding_analyse_en_actie] column.
     *
     * @param  string $v new value
     * @return GsCodestelselZrsOnderlingVerband The current object (for fluent API support)
     */
    public function setOpnAlsFavorietNaAanleidingAnalyseEnActie($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->opn_als_favoriet_na_aanleiding_analyse_en_actie !== $v) {
            $this->opn_als_favoriet_na_aanleiding_analyse_en_actie = $v;
            $this->modifiedColumns[] = GsCodestelselZrsOnderlingVerbandPeer::OPN_ALS_FAVORIET_NA_AANLEIDING_ANALYSE_EN_ACTIE;
        }


        return $this;
    } // setOpnAlsFavorietNaAanleidingAnalyseEnActie()

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
            $this->zorg_registratie_nummer_van_de_actie = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->zorg_registratie_nummer_van_de_actiegroep = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->zorg_registratie_nummer_van_de_actieregel = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->zorg_registratie_nummer_van_de_analyse = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->zorg_registratie_nummer_van_de_subanalyse = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->zorg_registratie_nummer_van_de_aanleiding = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->zorg_registratie_nummer_van_de_subaanleiding = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->tekstmodulethesaurus_103 = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->tekstmodule = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->tekstsoortthesaurus_104 = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->tekstsoort = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->tekst_nivo_kode = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->opnemen_als_favoriet_na_aanleiding_en_analyse = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->opn_als_favoriet_na_aanleiding_analyse_en_actie = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 16; // 16 = GsCodestelselZrsOnderlingVerbandPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsCodestelselZrsOnderlingVerband object", $e);
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
            $con = Propel::getConnection(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsCodestelselZrsOnderlingVerbandPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsCodestelselZrsOnderlingVerbandQuery::create()
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
            $con = Propel::getConnection(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsCodestelselZrsOnderlingVerbandPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE)) {
            $modifiedColumns[':p' . $index++]  = '`zorg_registratie_nummer_van_de_actie`';
        }
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP)) {
            $modifiedColumns[':p' . $index++]  = '`zorg_registratie_nummer_van_de_actiegroep`';
        }
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL)) {
            $modifiedColumns[':p' . $index++]  = '`zorg_registratie_nummer_van_de_actieregel`';
        }
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE)) {
            $modifiedColumns[':p' . $index++]  = '`zorg_registratie_nummer_van_de_analyse`';
        }
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE)) {
            $modifiedColumns[':p' . $index++]  = '`zorg_registratie_nummer_van_de_subanalyse`';
        }
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING)) {
            $modifiedColumns[':p' . $index++]  = '`zorg_registratie_nummer_van_de_aanleiding`';
        }
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING)) {
            $modifiedColumns[':p' . $index++]  = '`zorg_registratie_nummer_van_de_subaanleiding`';
        }
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULETHESAURUS_103)) {
            $modifiedColumns[':p' . $index++]  = '`tekstmodulethesaurus_103`';
        }
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULE)) {
            $modifiedColumns[':p' . $index++]  = '`tekstmodule`';
        }
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORTTHESAURUS_104)) {
            $modifiedColumns[':p' . $index++]  = '`tekstsoortthesaurus_104`';
        }
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORT)) {
            $modifiedColumns[':p' . $index++]  = '`tekstsoort`';
        }
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::TEKST_NIVO_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`tekst_nivo_kode`';
        }
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::OPNEMEN_ALS_FAVORIET_NA_AANLEIDING_EN_ANALYSE)) {
            $modifiedColumns[':p' . $index++]  = '`opnemen_als_favoriet_na_aanleiding_en_analyse`';
        }
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::OPN_ALS_FAVORIET_NA_AANLEIDING_ANALYSE_EN_ACTIE)) {
            $modifiedColumns[':p' . $index++]  = '`opn_als_favoriet_na_aanleiding_analyse_en_actie`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_codestelsel_zrs_onderling_verband` (%s) VALUES (%s)',
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
                    case '`zorg_registratie_nummer_van_de_actie`':
                        $stmt->bindValue($identifier, $this->zorg_registratie_nummer_van_de_actie, PDO::PARAM_INT);
                        break;
                    case '`zorg_registratie_nummer_van_de_actiegroep`':
                        $stmt->bindValue($identifier, $this->zorg_registratie_nummer_van_de_actiegroep, PDO::PARAM_INT);
                        break;
                    case '`zorg_registratie_nummer_van_de_actieregel`':
                        $stmt->bindValue($identifier, $this->zorg_registratie_nummer_van_de_actieregel, PDO::PARAM_INT);
                        break;
                    case '`zorg_registratie_nummer_van_de_analyse`':
                        $stmt->bindValue($identifier, $this->zorg_registratie_nummer_van_de_analyse, PDO::PARAM_INT);
                        break;
                    case '`zorg_registratie_nummer_van_de_subanalyse`':
                        $stmt->bindValue($identifier, $this->zorg_registratie_nummer_van_de_subanalyse, PDO::PARAM_INT);
                        break;
                    case '`zorg_registratie_nummer_van_de_aanleiding`':
                        $stmt->bindValue($identifier, $this->zorg_registratie_nummer_van_de_aanleiding, PDO::PARAM_INT);
                        break;
                    case '`zorg_registratie_nummer_van_de_subaanleiding`':
                        $stmt->bindValue($identifier, $this->zorg_registratie_nummer_van_de_subaanleiding, PDO::PARAM_INT);
                        break;
                    case '`tekstmodulethesaurus_103`':
                        $stmt->bindValue($identifier, $this->tekstmodulethesaurus_103, PDO::PARAM_INT);
                        break;
                    case '`tekstmodule`':
                        $stmt->bindValue($identifier, $this->tekstmodule, PDO::PARAM_INT);
                        break;
                    case '`tekstsoortthesaurus_104`':
                        $stmt->bindValue($identifier, $this->tekstsoortthesaurus_104, PDO::PARAM_INT);
                        break;
                    case '`tekstsoort`':
                        $stmt->bindValue($identifier, $this->tekstsoort, PDO::PARAM_INT);
                        break;
                    case '`tekst_nivo_kode`':
                        $stmt->bindValue($identifier, $this->tekst_nivo_kode, PDO::PARAM_INT);
                        break;
                    case '`opnemen_als_favoriet_na_aanleiding_en_analyse`':
                        $stmt->bindValue($identifier, $this->opnemen_als_favoriet_na_aanleiding_en_analyse, PDO::PARAM_STR);
                        break;
                    case '`opn_als_favoriet_na_aanleiding_analyse_en_actie`':
                        $stmt->bindValue($identifier, $this->opn_als_favoriet_na_aanleiding_analyse_en_actie, PDO::PARAM_STR);
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


            if (($retval = GsCodestelselZrsOnderlingVerbandPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsCodestelselZrsOnderlingVerbandPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getZorgRegistratieNummerVanDeActie();
                break;
            case 3:
                return $this->getZorgRegistratieNummerVanDeActiegroep();
                break;
            case 4:
                return $this->getZorgRegistratieNummerVanDeActieregel();
                break;
            case 5:
                return $this->getZorgRegistratieNummerVanDeAnalyse();
                break;
            case 6:
                return $this->getZorgRegistratieNummerVanDeSubanalyse();
                break;
            case 7:
                return $this->getZorgRegistratieNummerVanDeAanleiding();
                break;
            case 8:
                return $this->getZorgRegistratieNummerVanDeSubaanleiding();
                break;
            case 9:
                return $this->getTekstmodulethesaurus103();
                break;
            case 10:
                return $this->getTekstmodule();
                break;
            case 11:
                return $this->getTekstsoortthesaurus104();
                break;
            case 12:
                return $this->getTekstsoort();
                break;
            case 13:
                return $this->getTekstNivoKode();
                break;
            case 14:
                return $this->getOpnemenAlsFavorietNaAanleidingEnAnalyse();
                break;
            case 15:
                return $this->getOpnAlsFavorietNaAanleidingAnalyseEnActie();
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
        if (isset($alreadyDumpedObjects['GsCodestelselZrsOnderlingVerband'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsCodestelselZrsOnderlingVerband'][serialize($this->getPrimaryKey())] = true;
        $keys = GsCodestelselZrsOnderlingVerbandPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getZorgRegistratieNummerVanDeActie(),
            $keys[3] => $this->getZorgRegistratieNummerVanDeActiegroep(),
            $keys[4] => $this->getZorgRegistratieNummerVanDeActieregel(),
            $keys[5] => $this->getZorgRegistratieNummerVanDeAnalyse(),
            $keys[6] => $this->getZorgRegistratieNummerVanDeSubanalyse(),
            $keys[7] => $this->getZorgRegistratieNummerVanDeAanleiding(),
            $keys[8] => $this->getZorgRegistratieNummerVanDeSubaanleiding(),
            $keys[9] => $this->getTekstmodulethesaurus103(),
            $keys[10] => $this->getTekstmodule(),
            $keys[11] => $this->getTekstsoortthesaurus104(),
            $keys[12] => $this->getTekstsoort(),
            $keys[13] => $this->getTekstNivoKode(),
            $keys[14] => $this->getOpnemenAlsFavorietNaAanleidingEnAnalyse(),
            $keys[15] => $this->getOpnAlsFavorietNaAanleidingAnalyseEnActie(),
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
        $pos = GsCodestelselZrsOnderlingVerbandPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setZorgRegistratieNummerVanDeActie($value);
                break;
            case 3:
                $this->setZorgRegistratieNummerVanDeActiegroep($value);
                break;
            case 4:
                $this->setZorgRegistratieNummerVanDeActieregel($value);
                break;
            case 5:
                $this->setZorgRegistratieNummerVanDeAnalyse($value);
                break;
            case 6:
                $this->setZorgRegistratieNummerVanDeSubanalyse($value);
                break;
            case 7:
                $this->setZorgRegistratieNummerVanDeAanleiding($value);
                break;
            case 8:
                $this->setZorgRegistratieNummerVanDeSubaanleiding($value);
                break;
            case 9:
                $this->setTekstmodulethesaurus103($value);
                break;
            case 10:
                $this->setTekstmodule($value);
                break;
            case 11:
                $this->setTekstsoortthesaurus104($value);
                break;
            case 12:
                $this->setTekstsoort($value);
                break;
            case 13:
                $this->setTekstNivoKode($value);
                break;
            case 14:
                $this->setOpnemenAlsFavorietNaAanleidingEnAnalyse($value);
                break;
            case 15:
                $this->setOpnAlsFavorietNaAanleidingAnalyseEnActie($value);
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
        $keys = GsCodestelselZrsOnderlingVerbandPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setZorgRegistratieNummerVanDeActie($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setZorgRegistratieNummerVanDeActiegroep($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setZorgRegistratieNummerVanDeActieregel($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setZorgRegistratieNummerVanDeAnalyse($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setZorgRegistratieNummerVanDeSubanalyse($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setZorgRegistratieNummerVanDeAanleiding($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setZorgRegistratieNummerVanDeSubaanleiding($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTekstmodulethesaurus103($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTekstmodule($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTekstsoortthesaurus104($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTekstsoort($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setTekstNivoKode($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setOpnemenAlsFavorietNaAanleidingEnAnalyse($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setOpnAlsFavorietNaAanleidingAnalyseEnActie($arr[$keys[15]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::BESTANDNUMMER)) $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::MUTATIEKODE)) $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE)) $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE, $this->zorg_registratie_nummer_van_de_actie);
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP)) $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP, $this->zorg_registratie_nummer_van_de_actiegroep);
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL)) $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $this->zorg_registratie_nummer_van_de_actieregel);
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE)) $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE, $this->zorg_registratie_nummer_van_de_analyse);
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE)) $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE, $this->zorg_registratie_nummer_van_de_subanalyse);
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING)) $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING, $this->zorg_registratie_nummer_van_de_aanleiding);
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING)) $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING, $this->zorg_registratie_nummer_van_de_subaanleiding);
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULETHESAURUS_103)) $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULETHESAURUS_103, $this->tekstmodulethesaurus_103);
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULE)) $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULE, $this->tekstmodule);
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORTTHESAURUS_104)) $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORTTHESAURUS_104, $this->tekstsoortthesaurus_104);
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORT)) $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORT, $this->tekstsoort);
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::TEKST_NIVO_KODE)) $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::TEKST_NIVO_KODE, $this->tekst_nivo_kode);
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::OPNEMEN_ALS_FAVORIET_NA_AANLEIDING_EN_ANALYSE)) $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::OPNEMEN_ALS_FAVORIET_NA_AANLEIDING_EN_ANALYSE, $this->opnemen_als_favoriet_na_aanleiding_en_analyse);
        if ($this->isColumnModified(GsCodestelselZrsOnderlingVerbandPeer::OPN_ALS_FAVORIET_NA_AANLEIDING_ANALYSE_EN_ACTIE)) $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::OPN_ALS_FAVORIET_NA_AANLEIDING_ANALYSE_EN_ACTIE, $this->opn_als_favoriet_na_aanleiding_analyse_en_actie);

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
        $criteria = new Criteria(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME);
        $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE, $this->zorg_registratie_nummer_van_de_actie);
        $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP, $this->zorg_registratie_nummer_van_de_actiegroep);
        $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $this->zorg_registratie_nummer_van_de_actieregel);
        $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE, $this->zorg_registratie_nummer_van_de_analyse);
        $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE, $this->zorg_registratie_nummer_van_de_subanalyse);
        $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING, $this->zorg_registratie_nummer_van_de_aanleiding);
        $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING, $this->zorg_registratie_nummer_van_de_subaanleiding);

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
        $pks[0] = $this->getZorgRegistratieNummerVanDeActie();
        $pks[1] = $this->getZorgRegistratieNummerVanDeActiegroep();
        $pks[2] = $this->getZorgRegistratieNummerVanDeActieregel();
        $pks[3] = $this->getZorgRegistratieNummerVanDeAnalyse();
        $pks[4] = $this->getZorgRegistratieNummerVanDeSubanalyse();
        $pks[5] = $this->getZorgRegistratieNummerVanDeAanleiding();
        $pks[6] = $this->getZorgRegistratieNummerVanDeSubaanleiding();

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
        $this->setZorgRegistratieNummerVanDeActie($keys[0]);
        $this->setZorgRegistratieNummerVanDeActiegroep($keys[1]);
        $this->setZorgRegistratieNummerVanDeActieregel($keys[2]);
        $this->setZorgRegistratieNummerVanDeAnalyse($keys[3]);
        $this->setZorgRegistratieNummerVanDeSubanalyse($keys[4]);
        $this->setZorgRegistratieNummerVanDeAanleiding($keys[5]);
        $this->setZorgRegistratieNummerVanDeSubaanleiding($keys[6]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getZorgRegistratieNummerVanDeActie()) && (null === $this->getZorgRegistratieNummerVanDeActiegroep()) && (null === $this->getZorgRegistratieNummerVanDeActieregel()) && (null === $this->getZorgRegistratieNummerVanDeAnalyse()) && (null === $this->getZorgRegistratieNummerVanDeSubanalyse()) && (null === $this->getZorgRegistratieNummerVanDeAanleiding()) && (null === $this->getZorgRegistratieNummerVanDeSubaanleiding());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsCodestelselZrsOnderlingVerband (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setZorgRegistratieNummerVanDeActie($this->getZorgRegistratieNummerVanDeActie());
        $copyObj->setZorgRegistratieNummerVanDeActiegroep($this->getZorgRegistratieNummerVanDeActiegroep());
        $copyObj->setZorgRegistratieNummerVanDeActieregel($this->getZorgRegistratieNummerVanDeActieregel());
        $copyObj->setZorgRegistratieNummerVanDeAnalyse($this->getZorgRegistratieNummerVanDeAnalyse());
        $copyObj->setZorgRegistratieNummerVanDeSubanalyse($this->getZorgRegistratieNummerVanDeSubanalyse());
        $copyObj->setZorgRegistratieNummerVanDeAanleiding($this->getZorgRegistratieNummerVanDeAanleiding());
        $copyObj->setZorgRegistratieNummerVanDeSubaanleiding($this->getZorgRegistratieNummerVanDeSubaanleiding());
        $copyObj->setTekstmodulethesaurus103($this->getTekstmodulethesaurus103());
        $copyObj->setTekstmodule($this->getTekstmodule());
        $copyObj->setTekstsoortthesaurus104($this->getTekstsoortthesaurus104());
        $copyObj->setTekstsoort($this->getTekstsoort());
        $copyObj->setTekstNivoKode($this->getTekstNivoKode());
        $copyObj->setOpnemenAlsFavorietNaAanleidingEnAnalyse($this->getOpnemenAlsFavorietNaAanleidingEnAnalyse());
        $copyObj->setOpnAlsFavorietNaAanleidingAnalyseEnActie($this->getOpnAlsFavorietNaAanleidingAnalyseEnActie());
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
     * @return GsCodestelselZrsOnderlingVerband Clone of current object.
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
     * @return GsCodestelselZrsOnderlingVerbandPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsCodestelselZrsOnderlingVerbandPeer();
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
        $this->zorg_registratie_nummer_van_de_actie = null;
        $this->zorg_registratie_nummer_van_de_actiegroep = null;
        $this->zorg_registratie_nummer_van_de_actieregel = null;
        $this->zorg_registratie_nummer_van_de_analyse = null;
        $this->zorg_registratie_nummer_van_de_subanalyse = null;
        $this->zorg_registratie_nummer_van_de_aanleiding = null;
        $this->zorg_registratie_nummer_van_de_subaanleiding = null;
        $this->tekstmodulethesaurus_103 = null;
        $this->tekstmodule = null;
        $this->tekstsoortthesaurus_104 = null;
        $this->tekstsoort = null;
        $this->tekst_nivo_kode = null;
        $this->opnemen_als_favoriet_na_aanleiding_en_analyse = null;
        $this->opn_als_favoriet_na_aanleiding_analyse_en_actie = null;
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
        return (string) $this->exportTo(GsCodestelselZrsOnderlingVerbandPeer::DEFAULT_STRING_FORMAT);
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
