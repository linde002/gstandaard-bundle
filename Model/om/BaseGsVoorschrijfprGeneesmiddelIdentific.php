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
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerken;
use PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerkenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProducten;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentific;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprIdentificerendeVelden;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprIdentificerendeVeldenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfproductenQuery;

abstract class BaseGsVoorschrijfprGeneesmiddelIdentific extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVoorschrijfprGeneesmiddelIdentificPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsVoorschrijfprGeneesmiddelIdentificPeer
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
     * The value for the prkcode field.
     * @var        int
     */
    protected $prkcode;

    /**
     * The value for the naamstoevoeging field.
     * @var        string
     */
    protected $naamstoevoeging;

    /**
     * The value for the generiekeproductcode field.
     * @var        int
     */
    protected $generiekeproductcode;

    /**
     * The value for the emballagetype_kode field.
     * @var        int
     */
    protected $emballagetype_kode;

    /**
     * The value for the basiseenheid_product_kode field.
     * @var        int
     */
    protected $basiseenheid_product_kode;

    /**
     * The value for the hpkgrootte_algemeen field.
     * @var        string
     */
    protected $hpkgrootte_algemeen;

    /**
     * The value for the hulpmiddel_aard_1_kode field.
     * @var        int
     */
    protected $hulpmiddel_aard_1_kode;

    /**
     * The value for the hulpmiddel_hoeveelheid_1 field.
     * @var        int
     */
    protected $hulpmiddel_hoeveelheid_1;

    /**
     * The value for the hulpmiddel_aard_2_kode field.
     * @var        int
     */
    protected $hulpmiddel_aard_2_kode;

    /**
     * The value for the hulpmiddel_hoeveelheid_2 field.
     * @var        int
     */
    protected $hulpmiddel_hoeveelheid_2;

    /**
     * The value for the kode_meervoudigprodukt field.
     * @var        string
     */
    protected $kode_meervoudigprodukt;

    /**
     * The value for the hpkgrootte_verbandlengte field.
     * @var        string
     */
    protected $hpkgrootte_verbandlengte;

    /**
     * The value for the hpkgrootte_verbandbreedte field.
     * @var        string
     */
    protected $hpkgrootte_verbandbreedte;

    /**
     * The value for the hpkgrootte_iud field.
     * @var        string
     */
    protected $hpkgrootte_iud;

    /**
     * The value for the reden_hulpstof_identificerend field.
     * @var        int
     */
    protected $reden_hulpstof_identificerend;

    /**
     * The value for the instant field.
     * @var        string
     */
    protected $instant;

    /**
     * The value for the extra_kenmerk_tbv_voorschrijven field.
     * @var        int
     */
    protected $extra_kenmerk_tbv_voorschrijven;

    /**
     * @var        GsGeneriekeProducten
     */
    protected $aGsGeneriekeProducten;

    /**
     * @var        PropelObjectCollection|GsArtikelEigenschappen[] Collection to store aggregation of GsArtikelEigenschappen objects.
     */
    protected $collGsArtikelEigenschappens;
    protected $collGsArtikelEigenschappensPartial;

    /**
     * @var        PropelObjectCollection|GsBijzondereKenmerken[] Collection to store aggregation of GsBijzondereKenmerken objects.
     */
    protected $collGsBijzondereKenmerkens;
    protected $collGsBijzondereKenmerkensPartial;

    /**
     * @var        PropelObjectCollection|GsHandelsproducten[] Collection to store aggregation of GsHandelsproducten objects.
     */
    protected $collGsHandelsproductens;
    protected $collGsHandelsproductensPartial;

    /**
     * @var        PropelObjectCollection|GsVoorschrijfprIdentificerendeVelden[] Collection to store aggregation of GsVoorschrijfprIdentificerendeVelden objects.
     */
    protected $collGsVoorschrijfprIdentificerendeVeldens;
    protected $collGsVoorschrijfprIdentificerendeVeldensPartial;

    /**
     * @var        GsVoorschrijfproducten one-to-one related GsVoorschrijfproducten object
     */
    protected $singleGsVoorschrijfproducten;

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
    protected $gsArtikelEigenschappensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsBijzondereKenmerkensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsHandelsproductensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsVoorschrijfprIdentificerendeVeldensScheduledForDeletion = null;

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
     * Get the [prkcode] column value.
     *
     * @return int
     */
    public function getPrkcode()
    {

        return $this->prkcode;
    }

    /**
     * Get the [naamstoevoeging] column value.
     *
     * @return string
     */
    public function getNaamstoevoeging()
    {

        return $this->naamstoevoeging;
    }

    /**
     * Get the [generiekeproductcode] column value.
     *
     * @return int
     */
    public function getGeneriekeproductcode()
    {

        return $this->generiekeproductcode;
    }

    /**
     * Get the [emballagetype_kode] column value.
     *
     * @return int
     */
    public function getEmballagetypeKode()
    {

        return $this->emballagetype_kode;
    }

    /**
     * Get the [basiseenheid_product_kode] column value.
     *
     * @return int
     */
    public function getBasiseenheidProductKode()
    {

        return $this->basiseenheid_product_kode;
    }

    /**
     * Get the [hpkgrootte_algemeen] column value.
     *
     * @return string
     */
    public function getHpkgrootteAlgemeen()
    {

        return $this->hpkgrootte_algemeen;
    }

    /**
     * Get the [hulpmiddel_aard_1_kode] column value.
     *
     * @return int
     */
    public function getHulpmiddelAard1Kode()
    {

        return $this->hulpmiddel_aard_1_kode;
    }

    /**
     * Get the [hulpmiddel_hoeveelheid_1] column value.
     *
     * @return int
     */
    public function getHulpmiddelHoeveelheid1()
    {

        return $this->hulpmiddel_hoeveelheid_1;
    }

    /**
     * Get the [hulpmiddel_aard_2_kode] column value.
     *
     * @return int
     */
    public function getHulpmiddelAard2Kode()
    {

        return $this->hulpmiddel_aard_2_kode;
    }

    /**
     * Get the [hulpmiddel_hoeveelheid_2] column value.
     *
     * @return int
     */
    public function getHulpmiddelHoeveelheid2()
    {

        return $this->hulpmiddel_hoeveelheid_2;
    }

    /**
     * Get the [kode_meervoudigprodukt] column value.
     *
     * @return string
     */
    public function getKodeMeervoudigprodukt()
    {

        return $this->kode_meervoudigprodukt;
    }

    /**
     * Get the [hpkgrootte_verbandlengte] column value.
     *
     * @return string
     */
    public function getHpkgrootteVerbandlengte()
    {

        return $this->hpkgrootte_verbandlengte;
    }

    /**
     * Get the [hpkgrootte_verbandbreedte] column value.
     *
     * @return string
     */
    public function getHpkgrootteVerbandbreedte()
    {

        return $this->hpkgrootte_verbandbreedte;
    }

    /**
     * Get the [hpkgrootte_iud] column value.
     *
     * @return string
     */
    public function getHpkgrootteIud()
    {

        return $this->hpkgrootte_iud;
    }

    /**
     * Get the [reden_hulpstof_identificerend] column value.
     *
     * @return int
     */
    public function getRedenHulpstofIdentificerend()
    {

        return $this->reden_hulpstof_identificerend;
    }

    /**
     * Get the [instant] column value.
     *
     * @return string
     */
    public function getInstant()
    {

        return $this->instant;
    }

    /**
     * Get the [extra_kenmerk_tbv_voorschrijven] column value.
     *
     * @return int
     */
    public function getExtraKenmerkTbvVoorschrijven()
    {

        return $this->extra_kenmerk_tbv_voorschrijven;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [prkcode] column.
     *
     * @param  int $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setPrkcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->prkcode !== $v) {
            $this->prkcode = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE;
        }


        return $this;
    } // setPrkcode()

    /**
     * Set the value of [naamstoevoeging] column.
     *
     * @param  string $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setNaamstoevoeging($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->naamstoevoeging !== $v) {
            $this->naamstoevoeging = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::NAAMSTOEVOEGING;
        }


        return $this;
    } // setNaamstoevoeging()

    /**
     * Set the value of [generiekeproductcode] column.
     *
     * @param  int $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setGeneriekeproductcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->generiekeproductcode !== $v) {
            $this->generiekeproductcode = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::GENERIEKEPRODUCTCODE;
        }

        if ($this->aGsGeneriekeProducten !== null && $this->aGsGeneriekeProducten->getGeneriekeproductcode() !== $v) {
            $this->aGsGeneriekeProducten = null;
        }


        return $this;
    } // setGeneriekeproductcode()

    /**
     * Set the value of [emballagetype_kode] column.
     *
     * @param  int $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setEmballagetypeKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->emballagetype_kode !== $v) {
            $this->emballagetype_kode = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::EMBALLAGETYPE_KODE;
        }


        return $this;
    } // setEmballagetypeKode()

    /**
     * Set the value of [basiseenheid_product_kode] column.
     *
     * @param  int $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setBasiseenheidProductKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->basiseenheid_product_kode !== $v) {
            $this->basiseenheid_product_kode = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::BASISEENHEID_PRODUCT_KODE;
        }


        return $this;
    } // setBasiseenheidProductKode()

    /**
     * Set the value of [hpkgrootte_algemeen] column.
     *
     * @param  string $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setHpkgrootteAlgemeen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hpkgrootte_algemeen !== $v) {
            $this->hpkgrootte_algemeen = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_ALGEMEEN;
        }


        return $this;
    } // setHpkgrootteAlgemeen()

    /**
     * Set the value of [hulpmiddel_aard_1_kode] column.
     *
     * @param  int $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setHulpmiddelAard1Kode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hulpmiddel_aard_1_kode !== $v) {
            $this->hulpmiddel_aard_1_kode = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_1_KODE;
        }


        return $this;
    } // setHulpmiddelAard1Kode()

    /**
     * Set the value of [hulpmiddel_hoeveelheid_1] column.
     *
     * @param  int $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setHulpmiddelHoeveelheid1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hulpmiddel_hoeveelheid_1 !== $v) {
            $this->hulpmiddel_hoeveelheid_1 = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_1;
        }


        return $this;
    } // setHulpmiddelHoeveelheid1()

    /**
     * Set the value of [hulpmiddel_aard_2_kode] column.
     *
     * @param  int $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setHulpmiddelAard2Kode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hulpmiddel_aard_2_kode !== $v) {
            $this->hulpmiddel_aard_2_kode = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_2_KODE;
        }


        return $this;
    } // setHulpmiddelAard2Kode()

    /**
     * Set the value of [hulpmiddel_hoeveelheid_2] column.
     *
     * @param  int $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setHulpmiddelHoeveelheid2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hulpmiddel_hoeveelheid_2 !== $v) {
            $this->hulpmiddel_hoeveelheid_2 = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_2;
        }


        return $this;
    } // setHulpmiddelHoeveelheid2()

    /**
     * Set the value of [kode_meervoudigprodukt] column.
     *
     * @param  string $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setKodeMeervoudigprodukt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->kode_meervoudigprodukt !== $v) {
            $this->kode_meervoudigprodukt = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::KODE_MEERVOUDIGPRODUKT;
        }


        return $this;
    } // setKodeMeervoudigprodukt()

    /**
     * Set the value of [hpkgrootte_verbandlengte] column.
     *
     * @param  string $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setHpkgrootteVerbandlengte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hpkgrootte_verbandlengte !== $v) {
            $this->hpkgrootte_verbandlengte = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDLENGTE;
        }


        return $this;
    } // setHpkgrootteVerbandlengte()

    /**
     * Set the value of [hpkgrootte_verbandbreedte] column.
     *
     * @param  string $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setHpkgrootteVerbandbreedte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hpkgrootte_verbandbreedte !== $v) {
            $this->hpkgrootte_verbandbreedte = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDBREEDTE;
        }


        return $this;
    } // setHpkgrootteVerbandbreedte()

    /**
     * Set the value of [hpkgrootte_iud] column.
     *
     * @param  string $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setHpkgrootteIud($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hpkgrootte_iud !== $v) {
            $this->hpkgrootte_iud = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_IUD;
        }


        return $this;
    } // setHpkgrootteIud()

    /**
     * Set the value of [reden_hulpstof_identificerend] column.
     *
     * @param  int $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setRedenHulpstofIdentificerend($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reden_hulpstof_identificerend !== $v) {
            $this->reden_hulpstof_identificerend = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::REDEN_HULPSTOF_IDENTIFICEREND;
        }


        return $this;
    } // setRedenHulpstofIdentificerend()

    /**
     * Set the value of [instant] column.
     *
     * @param  string $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setInstant($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->instant !== $v) {
            $this->instant = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::INSTANT;
        }


        return $this;
    } // setInstant()

    /**
     * Set the value of [extra_kenmerk_tbv_voorschrijven] column.
     *
     * @param  int $v new value
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setExtraKenmerkTbvVoorschrijven($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->extra_kenmerk_tbv_voorschrijven !== $v) {
            $this->extra_kenmerk_tbv_voorschrijven = $v;
            $this->modifiedColumns[] = GsVoorschrijfprGeneesmiddelIdentificPeer::EXTRA_KENMERK_TBV_VOORSCHRIJVEN;
        }


        return $this;
    } // setExtraKenmerkTbvVoorschrijven()

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
            $this->prkcode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->naamstoevoeging = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->generiekeproductcode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->emballagetype_kode = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->basiseenheid_product_kode = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->hpkgrootte_algemeen = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->hulpmiddel_aard_1_kode = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->hulpmiddel_hoeveelheid_1 = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->hulpmiddel_aard_2_kode = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->hulpmiddel_hoeveelheid_2 = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->kode_meervoudigprodukt = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->hpkgrootte_verbandlengte = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->hpkgrootte_verbandbreedte = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->hpkgrootte_iud = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->reden_hulpstof_identificerend = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->instant = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->extra_kenmerk_tbv_voorschrijven = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 19; // 19 = GsVoorschrijfprGeneesmiddelIdentificPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsVoorschrijfprGeneesmiddelIdentific object", $e);
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

        if ($this->aGsGeneriekeProducten !== null && $this->generiekeproductcode !== $this->aGsGeneriekeProducten->getGeneriekeproductcode()) {
            $this->aGsGeneriekeProducten = null;
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
            $con = Propel::getConnection(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsVoorschrijfprGeneesmiddelIdentificPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGsGeneriekeProducten = null;
            $this->collGsArtikelEigenschappens = null;

            $this->collGsBijzondereKenmerkens = null;

            $this->collGsHandelsproductens = null;

            $this->collGsVoorschrijfprIdentificerendeVeldens = null;

            $this->singleGsVoorschrijfproducten = null;

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
            $con = Propel::getConnection(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsVoorschrijfprGeneesmiddelIdentificQuery::create()
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
            $con = Propel::getConnection(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsVoorschrijfprGeneesmiddelIdentificPeer::addInstanceToPool($this);
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

            if ($this->aGsGeneriekeProducten !== null) {
                if ($this->aGsGeneriekeProducten->isModified() || $this->aGsGeneriekeProducten->isNew()) {
                    $affectedRows += $this->aGsGeneriekeProducten->save($con);
                }
                $this->setGsGeneriekeProducten($this->aGsGeneriekeProducten);
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

            if ($this->gsArtikelEigenschappensScheduledForDeletion !== null) {
                if (!$this->gsArtikelEigenschappensScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsArtikelEigenschappensScheduledForDeletion as $gsArtikelEigenschappen) {
                        // need to save related object because we set the relation to null
                        $gsArtikelEigenschappen->save($con);
                    }
                    $this->gsArtikelEigenschappensScheduledForDeletion = null;
                }
            }

            if ($this->collGsArtikelEigenschappens !== null) {
                foreach ($this->collGsArtikelEigenschappens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsBijzondereKenmerkensScheduledForDeletion !== null) {
                if (!$this->gsBijzondereKenmerkensScheduledForDeletion->isEmpty()) {
                    GsBijzondereKenmerkenQuery::create()
                        ->filterByPrimaryKeys($this->gsBijzondereKenmerkensScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->gsBijzondereKenmerkensScheduledForDeletion = null;
                }
            }

            if ($this->collGsBijzondereKenmerkens !== null) {
                foreach ($this->collGsBijzondereKenmerkens as $referrerFK) {
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

            if ($this->gsVoorschrijfprIdentificerendeVeldensScheduledForDeletion !== null) {
                if (!$this->gsVoorschrijfprIdentificerendeVeldensScheduledForDeletion->isEmpty()) {
                    GsVoorschrijfprIdentificerendeVeldenQuery::create()
                        ->filterByPrimaryKeys($this->gsVoorschrijfprIdentificerendeVeldensScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->gsVoorschrijfprIdentificerendeVeldensScheduledForDeletion = null;
                }
            }

            if ($this->collGsVoorschrijfprIdentificerendeVeldens !== null) {
                foreach ($this->collGsVoorschrijfprIdentificerendeVeldens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->singleGsVoorschrijfproducten !== null) {
                if (!$this->singleGsVoorschrijfproducten->isDeleted() && ($this->singleGsVoorschrijfproducten->isNew() || $this->singleGsVoorschrijfproducten->isModified())) {
                        $affectedRows += $this->singleGsVoorschrijfproducten->save($con);
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
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`prkcode`';
        }
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::NAAMSTOEVOEGING)) {
            $modifiedColumns[':p' . $index++]  = '`naamstoevoeging`';
        }
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::GENERIEKEPRODUCTCODE)) {
            $modifiedColumns[':p' . $index++]  = '`generiekeproductcode`';
        }
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::EMBALLAGETYPE_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`emballagetype_kode`';
        }
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::BASISEENHEID_PRODUCT_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`basiseenheid_product_kode`';
        }
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_ALGEMEEN)) {
            $modifiedColumns[':p' . $index++]  = '`hpkgrootte_algemeen`';
        }
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_1_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`hulpmiddel_aard_1_kode`';
        }
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_1)) {
            $modifiedColumns[':p' . $index++]  = '`hulpmiddel_hoeveelheid_1`';
        }
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_2_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`hulpmiddel_aard_2_kode`';
        }
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_2)) {
            $modifiedColumns[':p' . $index++]  = '`hulpmiddel_hoeveelheid_2`';
        }
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::KODE_MEERVOUDIGPRODUKT)) {
            $modifiedColumns[':p' . $index++]  = '`kode_meervoudigprodukt`';
        }
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDLENGTE)) {
            $modifiedColumns[':p' . $index++]  = '`hpkgrootte_verbandlengte`';
        }
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDBREEDTE)) {
            $modifiedColumns[':p' . $index++]  = '`hpkgrootte_verbandbreedte`';
        }
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_IUD)) {
            $modifiedColumns[':p' . $index++]  = '`hpkgrootte_iud`';
        }
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::REDEN_HULPSTOF_IDENTIFICEREND)) {
            $modifiedColumns[':p' . $index++]  = '`reden_hulpstof_identificerend`';
        }
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::INSTANT)) {
            $modifiedColumns[':p' . $index++]  = '`instant`';
        }
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::EXTRA_KENMERK_TBV_VOORSCHRIJVEN)) {
            $modifiedColumns[':p' . $index++]  = '`extra_kenmerk_tbv_voorschrijven`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_voorschrijfpr_geneesmiddel_identific` (%s) VALUES (%s)',
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
                    case '`prkcode`':
                        $stmt->bindValue($identifier, $this->prkcode, PDO::PARAM_INT);
                        break;
                    case '`naamstoevoeging`':
                        $stmt->bindValue($identifier, $this->naamstoevoeging, PDO::PARAM_STR);
                        break;
                    case '`generiekeproductcode`':
                        $stmt->bindValue($identifier, $this->generiekeproductcode, PDO::PARAM_INT);
                        break;
                    case '`emballagetype_kode`':
                        $stmt->bindValue($identifier, $this->emballagetype_kode, PDO::PARAM_INT);
                        break;
                    case '`basiseenheid_product_kode`':
                        $stmt->bindValue($identifier, $this->basiseenheid_product_kode, PDO::PARAM_INT);
                        break;
                    case '`hpkgrootte_algemeen`':
                        $stmt->bindValue($identifier, $this->hpkgrootte_algemeen, PDO::PARAM_STR);
                        break;
                    case '`hulpmiddel_aard_1_kode`':
                        $stmt->bindValue($identifier, $this->hulpmiddel_aard_1_kode, PDO::PARAM_INT);
                        break;
                    case '`hulpmiddel_hoeveelheid_1`':
                        $stmt->bindValue($identifier, $this->hulpmiddel_hoeveelheid_1, PDO::PARAM_INT);
                        break;
                    case '`hulpmiddel_aard_2_kode`':
                        $stmt->bindValue($identifier, $this->hulpmiddel_aard_2_kode, PDO::PARAM_INT);
                        break;
                    case '`hulpmiddel_hoeveelheid_2`':
                        $stmt->bindValue($identifier, $this->hulpmiddel_hoeveelheid_2, PDO::PARAM_INT);
                        break;
                    case '`kode_meervoudigprodukt`':
                        $stmt->bindValue($identifier, $this->kode_meervoudigprodukt, PDO::PARAM_STR);
                        break;
                    case '`hpkgrootte_verbandlengte`':
                        $stmt->bindValue($identifier, $this->hpkgrootte_verbandlengte, PDO::PARAM_STR);
                        break;
                    case '`hpkgrootte_verbandbreedte`':
                        $stmt->bindValue($identifier, $this->hpkgrootte_verbandbreedte, PDO::PARAM_STR);
                        break;
                    case '`hpkgrootte_iud`':
                        $stmt->bindValue($identifier, $this->hpkgrootte_iud, PDO::PARAM_STR);
                        break;
                    case '`reden_hulpstof_identificerend`':
                        $stmt->bindValue($identifier, $this->reden_hulpstof_identificerend, PDO::PARAM_INT);
                        break;
                    case '`instant`':
                        $stmt->bindValue($identifier, $this->instant, PDO::PARAM_STR);
                        break;
                    case '`extra_kenmerk_tbv_voorschrijven`':
                        $stmt->bindValue($identifier, $this->extra_kenmerk_tbv_voorschrijven, PDO::PARAM_INT);
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

            if ($this->aGsGeneriekeProducten !== null) {
                if (!$this->aGsGeneriekeProducten->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsGeneriekeProducten->getValidationFailures());
                }
            }


            if (($retval = GsVoorschrijfprGeneesmiddelIdentificPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collGsArtikelEigenschappens !== null) {
                    foreach ($this->collGsArtikelEigenschappens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsBijzondereKenmerkens !== null) {
                    foreach ($this->collGsBijzondereKenmerkens as $referrerFK) {
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

                if ($this->collGsVoorschrijfprIdentificerendeVeldens !== null) {
                    foreach ($this->collGsVoorschrijfprIdentificerendeVeldens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->singleGsVoorschrijfproducten !== null) {
                    if (!$this->singleGsVoorschrijfproducten->validate($columns)) {
                        $failureMap = array_merge($failureMap, $this->singleGsVoorschrijfproducten->getValidationFailures());
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
        $pos = GsVoorschrijfprGeneesmiddelIdentificPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getPrkcode();
                break;
            case 3:
                return $this->getNaamstoevoeging();
                break;
            case 4:
                return $this->getGeneriekeproductcode();
                break;
            case 5:
                return $this->getEmballagetypeKode();
                break;
            case 6:
                return $this->getBasiseenheidProductKode();
                break;
            case 7:
                return $this->getHpkgrootteAlgemeen();
                break;
            case 8:
                return $this->getHulpmiddelAard1Kode();
                break;
            case 9:
                return $this->getHulpmiddelHoeveelheid1();
                break;
            case 10:
                return $this->getHulpmiddelAard2Kode();
                break;
            case 11:
                return $this->getHulpmiddelHoeveelheid2();
                break;
            case 12:
                return $this->getKodeMeervoudigprodukt();
                break;
            case 13:
                return $this->getHpkgrootteVerbandlengte();
                break;
            case 14:
                return $this->getHpkgrootteVerbandbreedte();
                break;
            case 15:
                return $this->getHpkgrootteIud();
                break;
            case 16:
                return $this->getRedenHulpstofIdentificerend();
                break;
            case 17:
                return $this->getInstant();
                break;
            case 18:
                return $this->getExtraKenmerkTbvVoorschrijven();
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
        if (isset($alreadyDumpedObjects['GsVoorschrijfprGeneesmiddelIdentific'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsVoorschrijfprGeneesmiddelIdentific'][$this->getPrimaryKey()] = true;
        $keys = GsVoorschrijfprGeneesmiddelIdentificPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getPrkcode(),
            $keys[3] => $this->getNaamstoevoeging(),
            $keys[4] => $this->getGeneriekeproductcode(),
            $keys[5] => $this->getEmballagetypeKode(),
            $keys[6] => $this->getBasiseenheidProductKode(),
            $keys[7] => $this->getHpkgrootteAlgemeen(),
            $keys[8] => $this->getHulpmiddelAard1Kode(),
            $keys[9] => $this->getHulpmiddelHoeveelheid1(),
            $keys[10] => $this->getHulpmiddelAard2Kode(),
            $keys[11] => $this->getHulpmiddelHoeveelheid2(),
            $keys[12] => $this->getKodeMeervoudigprodukt(),
            $keys[13] => $this->getHpkgrootteVerbandlengte(),
            $keys[14] => $this->getHpkgrootteVerbandbreedte(),
            $keys[15] => $this->getHpkgrootteIud(),
            $keys[16] => $this->getRedenHulpstofIdentificerend(),
            $keys[17] => $this->getInstant(),
            $keys[18] => $this->getExtraKenmerkTbvVoorschrijven(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aGsGeneriekeProducten) {
                $result['GsGeneriekeProducten'] = $this->aGsGeneriekeProducten->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collGsArtikelEigenschappens) {
                $result['GsArtikelEigenschappens'] = $this->collGsArtikelEigenschappens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsBijzondereKenmerkens) {
                $result['GsBijzondereKenmerkens'] = $this->collGsBijzondereKenmerkens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsHandelsproductens) {
                $result['GsHandelsproductens'] = $this->collGsHandelsproductens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsVoorschrijfprIdentificerendeVeldens) {
                $result['GsVoorschrijfprIdentificerendeVeldens'] = $this->collGsVoorschrijfprIdentificerendeVeldens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->singleGsVoorschrijfproducten) {
                $result['GsVoorschrijfproducten'] = $this->singleGsVoorschrijfproducten->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
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
        $pos = GsVoorschrijfprGeneesmiddelIdentificPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setPrkcode($value);
                break;
            case 3:
                $this->setNaamstoevoeging($value);
                break;
            case 4:
                $this->setGeneriekeproductcode($value);
                break;
            case 5:
                $this->setEmballagetypeKode($value);
                break;
            case 6:
                $this->setBasiseenheidProductKode($value);
                break;
            case 7:
                $this->setHpkgrootteAlgemeen($value);
                break;
            case 8:
                $this->setHulpmiddelAard1Kode($value);
                break;
            case 9:
                $this->setHulpmiddelHoeveelheid1($value);
                break;
            case 10:
                $this->setHulpmiddelAard2Kode($value);
                break;
            case 11:
                $this->setHulpmiddelHoeveelheid2($value);
                break;
            case 12:
                $this->setKodeMeervoudigprodukt($value);
                break;
            case 13:
                $this->setHpkgrootteVerbandlengte($value);
                break;
            case 14:
                $this->setHpkgrootteVerbandbreedte($value);
                break;
            case 15:
                $this->setHpkgrootteIud($value);
                break;
            case 16:
                $this->setRedenHulpstofIdentificerend($value);
                break;
            case 17:
                $this->setInstant($value);
                break;
            case 18:
                $this->setExtraKenmerkTbvVoorschrijven($value);
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
        $keys = GsVoorschrijfprGeneesmiddelIdentificPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPrkcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNaamstoevoeging($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setGeneriekeproductcode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEmballagetypeKode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setBasiseenheidProductKode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setHpkgrootteAlgemeen($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setHulpmiddelAard1Kode($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setHulpmiddelHoeveelheid1($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setHulpmiddelAard2Kode($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setHulpmiddelHoeveelheid2($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setKodeMeervoudigprodukt($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setHpkgrootteVerbandlengte($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setHpkgrootteVerbandbreedte($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setHpkgrootteIud($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setRedenHulpstofIdentificerend($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setInstant($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setExtraKenmerkTbvVoorschrijven($arr[$keys[18]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::BESTANDNUMMER)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::MUTATIEKODE)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $this->prkcode);
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::NAAMSTOEVOEGING)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::NAAMSTOEVOEGING, $this->naamstoevoeging);
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::GENERIEKEPRODUCTCODE)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::GENERIEKEPRODUCTCODE, $this->generiekeproductcode);
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::EMBALLAGETYPE_KODE)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::EMBALLAGETYPE_KODE, $this->emballagetype_kode);
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::BASISEENHEID_PRODUCT_KODE)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::BASISEENHEID_PRODUCT_KODE, $this->basiseenheid_product_kode);
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_ALGEMEEN)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_ALGEMEEN, $this->hpkgrootte_algemeen);
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_1_KODE)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_1_KODE, $this->hulpmiddel_aard_1_kode);
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_1)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_1, $this->hulpmiddel_hoeveelheid_1);
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_2_KODE)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_2_KODE, $this->hulpmiddel_aard_2_kode);
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_2)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_2, $this->hulpmiddel_hoeveelheid_2);
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::KODE_MEERVOUDIGPRODUKT)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::KODE_MEERVOUDIGPRODUKT, $this->kode_meervoudigprodukt);
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDLENGTE)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDLENGTE, $this->hpkgrootte_verbandlengte);
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDBREEDTE)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDBREEDTE, $this->hpkgrootte_verbandbreedte);
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_IUD)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_IUD, $this->hpkgrootte_iud);
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::REDEN_HULPSTOF_IDENTIFICEREND)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::REDEN_HULPSTOF_IDENTIFICEREND, $this->reden_hulpstof_identificerend);
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::INSTANT)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::INSTANT, $this->instant);
        if ($this->isColumnModified(GsVoorschrijfprGeneesmiddelIdentificPeer::EXTRA_KENMERK_TBV_VOORSCHRIJVEN)) $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::EXTRA_KENMERK_TBV_VOORSCHRIJVEN, $this->extra_kenmerk_tbv_voorschrijven);

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
        $criteria = new Criteria(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME);
        $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $this->prkcode);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getPrkcode();
    }

    /**
     * Generic method to set the primary key (prkcode column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setPrkcode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getPrkcode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsVoorschrijfprGeneesmiddelIdentific (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setNaamstoevoeging($this->getNaamstoevoeging());
        $copyObj->setGeneriekeproductcode($this->getGeneriekeproductcode());
        $copyObj->setEmballagetypeKode($this->getEmballagetypeKode());
        $copyObj->setBasiseenheidProductKode($this->getBasiseenheidProductKode());
        $copyObj->setHpkgrootteAlgemeen($this->getHpkgrootteAlgemeen());
        $copyObj->setHulpmiddelAard1Kode($this->getHulpmiddelAard1Kode());
        $copyObj->setHulpmiddelHoeveelheid1($this->getHulpmiddelHoeveelheid1());
        $copyObj->setHulpmiddelAard2Kode($this->getHulpmiddelAard2Kode());
        $copyObj->setHulpmiddelHoeveelheid2($this->getHulpmiddelHoeveelheid2());
        $copyObj->setKodeMeervoudigprodukt($this->getKodeMeervoudigprodukt());
        $copyObj->setHpkgrootteVerbandlengte($this->getHpkgrootteVerbandlengte());
        $copyObj->setHpkgrootteVerbandbreedte($this->getHpkgrootteVerbandbreedte());
        $copyObj->setHpkgrootteIud($this->getHpkgrootteIud());
        $copyObj->setRedenHulpstofIdentificerend($this->getRedenHulpstofIdentificerend());
        $copyObj->setInstant($this->getInstant());
        $copyObj->setExtraKenmerkTbvVoorschrijven($this->getExtraKenmerkTbvVoorschrijven());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getGsArtikelEigenschappens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsArtikelEigenschappen($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsBijzondereKenmerkens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsBijzondereKenmerken($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsHandelsproductens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsHandelsproducten($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsVoorschrijfprIdentificerendeVeldens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsVoorschrijfprIdentificerendeVelden($relObj->copy($deepCopy));
                }
            }

            $relObj = $this->getGsVoorschrijfproducten();
            if ($relObj) {
                $copyObj->setGsVoorschrijfproducten($relObj->copy($deepCopy));
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setPrkcode(NULL); // this is a auto-increment column, so set to default value
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
     * @return GsVoorschrijfprGeneesmiddelIdentific Clone of current object.
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
     * @return GsVoorschrijfprGeneesmiddelIdentificPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsVoorschrijfprGeneesmiddelIdentificPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsGeneriekeProducten object.
     *
     * @param                  GsGeneriekeProducten $v
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsGeneriekeProducten(GsGeneriekeProducten $v = null)
    {
        if ($v === null) {
            $this->setGeneriekeproductcode(NULL);
        } else {
            $this->setGeneriekeproductcode($v->getGeneriekeproductcode());
        }

        $this->aGsGeneriekeProducten = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsGeneriekeProducten object, it will not be re-added.
        if ($v !== null) {
            $v->addGsVoorschrijfprGeneesmiddelIdentific($this);
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
        if ($this->aGsGeneriekeProducten === null && ($this->generiekeproductcode !== null) && $doQuery) {
            $this->aGsGeneriekeProducten = GsGeneriekeProductenQuery::create()->findPk($this->generiekeproductcode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsGeneriekeProducten->addGsVoorschrijfprGeneesmiddelIdentifics($this);
             */
        }

        return $this->aGsGeneriekeProducten;
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
        if ('GsArtikelEigenschappen' == $relationName) {
            $this->initGsArtikelEigenschappens();
        }
        if ('GsBijzondereKenmerken' == $relationName) {
            $this->initGsBijzondereKenmerkens();
        }
        if ('GsHandelsproducten' == $relationName) {
            $this->initGsHandelsproductens();
        }
        if ('GsVoorschrijfprIdentificerendeVelden' == $relationName) {
            $this->initGsVoorschrijfprIdentificerendeVeldens();
        }
    }

    /**
     * Clears out the collGsArtikelEigenschappens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     * @see        addGsArtikelEigenschappens()
     */
    public function clearGsArtikelEigenschappens()
    {
        $this->collGsArtikelEigenschappens = null; // important to set this to null since that means it is uninitialized
        $this->collGsArtikelEigenschappensPartial = null;

        return $this;
    }

    /**
     * reset is the collGsArtikelEigenschappens collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsArtikelEigenschappens($v = true)
    {
        $this->collGsArtikelEigenschappensPartial = $v;
    }

    /**
     * Initializes the collGsArtikelEigenschappens collection.
     *
     * By default this just sets the collGsArtikelEigenschappens collection to an empty array (like clearcollGsArtikelEigenschappens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsArtikelEigenschappens($overrideExisting = true)
    {
        if (null !== $this->collGsArtikelEigenschappens && !$overrideExisting) {
            return;
        }
        $this->collGsArtikelEigenschappens = new PropelObjectCollection();
        $this->collGsArtikelEigenschappens->setModel('GsArtikelEigenschappen');
    }

    /**
     * Gets an array of GsArtikelEigenschappen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     * @throws PropelException
     */
    public function getGsArtikelEigenschappens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelEigenschappensPartial && !$this->isNew();
        if (null === $this->collGsArtikelEigenschappens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelEigenschappens) {
                // return empty collection
                $this->initGsArtikelEigenschappens();
            } else {
                $collGsArtikelEigenschappens = GsArtikelEigenschappenQuery::create(null, $criteria)
                    ->filterByGsVoorschrijfprGeneesmiddelIdentific($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsArtikelEigenschappensPartial && count($collGsArtikelEigenschappens)) {
                      $this->initGsArtikelEigenschappens(false);

                      foreach ($collGsArtikelEigenschappens as $obj) {
                        if (false == $this->collGsArtikelEigenschappens->contains($obj)) {
                          $this->collGsArtikelEigenschappens->append($obj);
                        }
                      }

                      $this->collGsArtikelEigenschappensPartial = true;
                    }

                    $collGsArtikelEigenschappens->getInternalIterator()->rewind();

                    return $collGsArtikelEigenschappens;
                }

                if ($partial && $this->collGsArtikelEigenschappens) {
                    foreach ($this->collGsArtikelEigenschappens as $obj) {
                        if ($obj->isNew()) {
                            $collGsArtikelEigenschappens[] = $obj;
                        }
                    }
                }

                $this->collGsArtikelEigenschappens = $collGsArtikelEigenschappens;
                $this->collGsArtikelEigenschappensPartial = false;
            }
        }

        return $this->collGsArtikelEigenschappens;
    }

    /**
     * Sets a collection of GsArtikelEigenschappen objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsArtikelEigenschappens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setGsArtikelEigenschappens(PropelCollection $gsArtikelEigenschappens, PropelPDO $con = null)
    {
        $gsArtikelEigenschappensToDelete = $this->getGsArtikelEigenschappens(new Criteria(), $con)->diff($gsArtikelEigenschappens);


        $this->gsArtikelEigenschappensScheduledForDeletion = $gsArtikelEigenschappensToDelete;

        foreach ($gsArtikelEigenschappensToDelete as $gsArtikelEigenschappenRemoved) {
            $gsArtikelEigenschappenRemoved->setGsVoorschrijfprGeneesmiddelIdentific(null);
        }

        $this->collGsArtikelEigenschappens = null;
        foreach ($gsArtikelEigenschappens as $gsArtikelEigenschappen) {
            $this->addGsArtikelEigenschappen($gsArtikelEigenschappen);
        }

        $this->collGsArtikelEigenschappens = $gsArtikelEigenschappens;
        $this->collGsArtikelEigenschappensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsArtikelEigenschappen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsArtikelEigenschappen objects.
     * @throws PropelException
     */
    public function countGsArtikelEigenschappens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelEigenschappensPartial && !$this->isNew();
        if (null === $this->collGsArtikelEigenschappens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelEigenschappens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsArtikelEigenschappens());
            }
            $query = GsArtikelEigenschappenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsVoorschrijfprGeneesmiddelIdentific($this)
                ->count($con);
        }

        return count($this->collGsArtikelEigenschappens);
    }

    /**
     * Method called to associate a GsArtikelEigenschappen object to this object
     * through the GsArtikelEigenschappen foreign key attribute.
     *
     * @param    GsArtikelEigenschappen $l GsArtikelEigenschappen
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function addGsArtikelEigenschappen(GsArtikelEigenschappen $l)
    {
        if ($this->collGsArtikelEigenschappens === null) {
            $this->initGsArtikelEigenschappens();
            $this->collGsArtikelEigenschappensPartial = true;
        }

        if (!in_array($l, $this->collGsArtikelEigenschappens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsArtikelEigenschappen($l);

            if ($this->gsArtikelEigenschappensScheduledForDeletion and $this->gsArtikelEigenschappensScheduledForDeletion->contains($l)) {
                $this->gsArtikelEigenschappensScheduledForDeletion->remove($this->gsArtikelEigenschappensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsArtikelEigenschappen $gsArtikelEigenschappen The gsArtikelEigenschappen object to add.
     */
    protected function doAddGsArtikelEigenschappen($gsArtikelEigenschappen)
    {
        $this->collGsArtikelEigenschappens[]= $gsArtikelEigenschappen;
        $gsArtikelEigenschappen->setGsVoorschrijfprGeneesmiddelIdentific($this);
    }

    /**
     * @param	GsArtikelEigenschappen $gsArtikelEigenschappen The gsArtikelEigenschappen object to remove.
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function removeGsArtikelEigenschappen($gsArtikelEigenschappen)
    {
        if ($this->getGsArtikelEigenschappens()->contains($gsArtikelEigenschappen)) {
            $this->collGsArtikelEigenschappens->remove($this->collGsArtikelEigenschappens->search($gsArtikelEigenschappen));
            if (null === $this->gsArtikelEigenschappensScheduledForDeletion) {
                $this->gsArtikelEigenschappensScheduledForDeletion = clone $this->collGsArtikelEigenschappens;
                $this->gsArtikelEigenschappensScheduledForDeletion->clear();
            }
            $this->gsArtikelEigenschappensScheduledForDeletion[]= $gsArtikelEigenschappen;
            $gsArtikelEigenschappen->setGsVoorschrijfprGeneesmiddelIdentific(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     */
    public function getGsArtikelEigenschappensJoinGsArtikelen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelEigenschappenQuery::create(null, $criteria);
        $query->joinWith('GsArtikelen', $join_behavior);

        return $this->getGsArtikelEigenschappens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     */
    public function getGsArtikelEigenschappensJoinGsHandelsproducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelEigenschappenQuery::create(null, $criteria);
        $query->joinWith('GsHandelsproducten', $join_behavior);

        return $this->getGsArtikelEigenschappens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     */
    public function getGsArtikelEigenschappensJoinGsNawGegevensGstandaard($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelEigenschappenQuery::create(null, $criteria);
        $query->joinWith('GsNawGegevensGstandaard', $join_behavior);

        return $this->getGsArtikelEigenschappens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     */
    public function getGsArtikelEigenschappensJoinGsGeneriekeProducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelEigenschappenQuery::create(null, $criteria);
        $query->joinWith('GsGeneriekeProducten', $join_behavior);

        return $this->getGsArtikelEigenschappens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     */
    public function getGsArtikelEigenschappensJoinGsAtcCodes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelEigenschappenQuery::create(null, $criteria);
        $query->joinWith('GsAtcCodes', $join_behavior);

        return $this->getGsArtikelEigenschappens($query, $con);
    }

    /**
     * Clears out the collGsBijzondereKenmerkens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     * @see        addGsBijzondereKenmerkens()
     */
    public function clearGsBijzondereKenmerkens()
    {
        $this->collGsBijzondereKenmerkens = null; // important to set this to null since that means it is uninitialized
        $this->collGsBijzondereKenmerkensPartial = null;

        return $this;
    }

    /**
     * reset is the collGsBijzondereKenmerkens collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsBijzondereKenmerkens($v = true)
    {
        $this->collGsBijzondereKenmerkensPartial = $v;
    }

    /**
     * Initializes the collGsBijzondereKenmerkens collection.
     *
     * By default this just sets the collGsBijzondereKenmerkens collection to an empty array (like clearcollGsBijzondereKenmerkens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsBijzondereKenmerkens($overrideExisting = true)
    {
        if (null !== $this->collGsBijzondereKenmerkens && !$overrideExisting) {
            return;
        }
        $this->collGsBijzondereKenmerkens = new PropelObjectCollection();
        $this->collGsBijzondereKenmerkens->setModel('GsBijzondereKenmerken');
    }

    /**
     * Gets an array of GsBijzondereKenmerken objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsBijzondereKenmerken[] List of GsBijzondereKenmerken objects
     * @throws PropelException
     */
    public function getGsBijzondereKenmerkens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsBijzondereKenmerkensPartial && !$this->isNew();
        if (null === $this->collGsBijzondereKenmerkens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsBijzondereKenmerkens) {
                // return empty collection
                $this->initGsBijzondereKenmerkens();
            } else {
                $collGsBijzondereKenmerkens = GsBijzondereKenmerkenQuery::create(null, $criteria)
                    ->filterByGsVoorschrijfprGeneesmiddelIdentific($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsBijzondereKenmerkensPartial && count($collGsBijzondereKenmerkens)) {
                      $this->initGsBijzondereKenmerkens(false);

                      foreach ($collGsBijzondereKenmerkens as $obj) {
                        if (false == $this->collGsBijzondereKenmerkens->contains($obj)) {
                          $this->collGsBijzondereKenmerkens->append($obj);
                        }
                      }

                      $this->collGsBijzondereKenmerkensPartial = true;
                    }

                    $collGsBijzondereKenmerkens->getInternalIterator()->rewind();

                    return $collGsBijzondereKenmerkens;
                }

                if ($partial && $this->collGsBijzondereKenmerkens) {
                    foreach ($this->collGsBijzondereKenmerkens as $obj) {
                        if ($obj->isNew()) {
                            $collGsBijzondereKenmerkens[] = $obj;
                        }
                    }
                }

                $this->collGsBijzondereKenmerkens = $collGsBijzondereKenmerkens;
                $this->collGsBijzondereKenmerkensPartial = false;
            }
        }

        return $this->collGsBijzondereKenmerkens;
    }

    /**
     * Sets a collection of GsBijzondereKenmerken objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsBijzondereKenmerkens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setGsBijzondereKenmerkens(PropelCollection $gsBijzondereKenmerkens, PropelPDO $con = null)
    {
        $gsBijzondereKenmerkensToDelete = $this->getGsBijzondereKenmerkens(new Criteria(), $con)->diff($gsBijzondereKenmerkens);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsBijzondereKenmerkensScheduledForDeletion = clone $gsBijzondereKenmerkensToDelete;

        foreach ($gsBijzondereKenmerkensToDelete as $gsBijzondereKenmerkenRemoved) {
            $gsBijzondereKenmerkenRemoved->setGsVoorschrijfprGeneesmiddelIdentific(null);
        }

        $this->collGsBijzondereKenmerkens = null;
        foreach ($gsBijzondereKenmerkens as $gsBijzondereKenmerken) {
            $this->addGsBijzondereKenmerken($gsBijzondereKenmerken);
        }

        $this->collGsBijzondereKenmerkens = $gsBijzondereKenmerkens;
        $this->collGsBijzondereKenmerkensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsBijzondereKenmerken objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsBijzondereKenmerken objects.
     * @throws PropelException
     */
    public function countGsBijzondereKenmerkens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsBijzondereKenmerkensPartial && !$this->isNew();
        if (null === $this->collGsBijzondereKenmerkens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsBijzondereKenmerkens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsBijzondereKenmerkens());
            }
            $query = GsBijzondereKenmerkenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsVoorschrijfprGeneesmiddelIdentific($this)
                ->count($con);
        }

        return count($this->collGsBijzondereKenmerkens);
    }

    /**
     * Method called to associate a GsBijzondereKenmerken object to this object
     * through the GsBijzondereKenmerken foreign key attribute.
     *
     * @param    GsBijzondereKenmerken $l GsBijzondereKenmerken
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function addGsBijzondereKenmerken(GsBijzondereKenmerken $l)
    {
        if ($this->collGsBijzondereKenmerkens === null) {
            $this->initGsBijzondereKenmerkens();
            $this->collGsBijzondereKenmerkensPartial = true;
        }

        if (!in_array($l, $this->collGsBijzondereKenmerkens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsBijzondereKenmerken($l);

            if ($this->gsBijzondereKenmerkensScheduledForDeletion and $this->gsBijzondereKenmerkensScheduledForDeletion->contains($l)) {
                $this->gsBijzondereKenmerkensScheduledForDeletion->remove($this->gsBijzondereKenmerkensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsBijzondereKenmerken $gsBijzondereKenmerken The gsBijzondereKenmerken object to add.
     */
    protected function doAddGsBijzondereKenmerken($gsBijzondereKenmerken)
    {
        $this->collGsBijzondereKenmerkens[]= $gsBijzondereKenmerken;
        $gsBijzondereKenmerken->setGsVoorschrijfprGeneesmiddelIdentific($this);
    }

    /**
     * @param	GsBijzondereKenmerken $gsBijzondereKenmerken The gsBijzondereKenmerken object to remove.
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function removeGsBijzondereKenmerken($gsBijzondereKenmerken)
    {
        if ($this->getGsBijzondereKenmerkens()->contains($gsBijzondereKenmerken)) {
            $this->collGsBijzondereKenmerkens->remove($this->collGsBijzondereKenmerkens->search($gsBijzondereKenmerken));
            if (null === $this->gsBijzondereKenmerkensScheduledForDeletion) {
                $this->gsBijzondereKenmerkensScheduledForDeletion = clone $this->collGsBijzondereKenmerkens;
                $this->gsBijzondereKenmerkensScheduledForDeletion->clear();
            }
            $this->gsBijzondereKenmerkensScheduledForDeletion[]= clone $gsBijzondereKenmerken;
            $gsBijzondereKenmerken->setGsVoorschrijfprGeneesmiddelIdentific(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsBijzondereKenmerkens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsBijzondereKenmerken[] List of GsBijzondereKenmerken objects
     */
    public function getGsBijzondereKenmerkensJoinKenmerkOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsBijzondereKenmerkenQuery::create(null, $criteria);
        $query->joinWith('KenmerkOmschrijving', $join_behavior);

        return $this->getGsBijzondereKenmerkens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsBijzondereKenmerkens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsBijzondereKenmerken[] List of GsBijzondereKenmerken objects
     */
    public function getGsBijzondereKenmerkensJoinGsHandelsproducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsBijzondereKenmerkenQuery::create(null, $criteria);
        $query->joinWith('GsHandelsproducten', $join_behavior);

        return $this->getGsBijzondereKenmerkens($query, $con);
    }

    /**
     * Clears out the collGsHandelsproductens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
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
     * If this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
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
                    ->filterByGsVoorschrijfprGeneesmiddelIdentific($this)
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
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setGsHandelsproductens(PropelCollection $gsHandelsproductens, PropelPDO $con = null)
    {
        $gsHandelsproductensToDelete = $this->getGsHandelsproductens(new Criteria(), $con)->diff($gsHandelsproductens);


        $this->gsHandelsproductensScheduledForDeletion = $gsHandelsproductensToDelete;

        foreach ($gsHandelsproductensToDelete as $gsHandelsproductenRemoved) {
            $gsHandelsproductenRemoved->setGsVoorschrijfprGeneesmiddelIdentific(null);
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
                ->filterByGsVoorschrijfprGeneesmiddelIdentific($this)
                ->count($con);
        }

        return count($this->collGsHandelsproductens);
    }

    /**
     * Method called to associate a GsHandelsproducten object to this object
     * through the GsHandelsproducten foreign key attribute.
     *
     * @param    GsHandelsproducten $l GsHandelsproducten
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
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
        $gsHandelsproducten->setGsVoorschrijfprGeneesmiddelIdentific($this);
    }

    /**
     * @param	GsHandelsproducten $gsHandelsproducten The gsHandelsproducten object to remove.
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
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
            $gsHandelsproducten->setGsVoorschrijfprGeneesmiddelIdentific(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsHandelsproductens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
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
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
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
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
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
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
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
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
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
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
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
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
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
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
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
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
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
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
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
     * Otherwise if this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection; or if this GsVoorschrijfprGeneesmiddelIdentific has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsVoorschrijfprGeneesmiddelIdentific.
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
     * Clears out the collGsVoorschrijfprIdentificerendeVeldens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     * @see        addGsVoorschrijfprIdentificerendeVeldens()
     */
    public function clearGsVoorschrijfprIdentificerendeVeldens()
    {
        $this->collGsVoorschrijfprIdentificerendeVeldens = null; // important to set this to null since that means it is uninitialized
        $this->collGsVoorschrijfprIdentificerendeVeldensPartial = null;

        return $this;
    }

    /**
     * reset is the collGsVoorschrijfprIdentificerendeVeldens collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsVoorschrijfprIdentificerendeVeldens($v = true)
    {
        $this->collGsVoorschrijfprIdentificerendeVeldensPartial = $v;
    }

    /**
     * Initializes the collGsVoorschrijfprIdentificerendeVeldens collection.
     *
     * By default this just sets the collGsVoorschrijfprIdentificerendeVeldens collection to an empty array (like clearcollGsVoorschrijfprIdentificerendeVeldens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsVoorschrijfprIdentificerendeVeldens($overrideExisting = true)
    {
        if (null !== $this->collGsVoorschrijfprIdentificerendeVeldens && !$overrideExisting) {
            return;
        }
        $this->collGsVoorschrijfprIdentificerendeVeldens = new PropelObjectCollection();
        $this->collGsVoorschrijfprIdentificerendeVeldens->setModel('GsVoorschrijfprIdentificerendeVelden');
    }

    /**
     * Gets an array of GsVoorschrijfprIdentificerendeVelden objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsVoorschrijfprGeneesmiddelIdentific is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsVoorschrijfprIdentificerendeVelden[] List of GsVoorschrijfprIdentificerendeVelden objects
     * @throws PropelException
     */
    public function getGsVoorschrijfprIdentificerendeVeldens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsVoorschrijfprIdentificerendeVeldensPartial && !$this->isNew();
        if (null === $this->collGsVoorschrijfprIdentificerendeVeldens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsVoorschrijfprIdentificerendeVeldens) {
                // return empty collection
                $this->initGsVoorschrijfprIdentificerendeVeldens();
            } else {
                $collGsVoorschrijfprIdentificerendeVeldens = GsVoorschrijfprIdentificerendeVeldenQuery::create(null, $criteria)
                    ->filterByGsVoorschrijfprGeneesmiddelIdentific($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsVoorschrijfprIdentificerendeVeldensPartial && count($collGsVoorschrijfprIdentificerendeVeldens)) {
                      $this->initGsVoorschrijfprIdentificerendeVeldens(false);

                      foreach ($collGsVoorschrijfprIdentificerendeVeldens as $obj) {
                        if (false == $this->collGsVoorschrijfprIdentificerendeVeldens->contains($obj)) {
                          $this->collGsVoorschrijfprIdentificerendeVeldens->append($obj);
                        }
                      }

                      $this->collGsVoorschrijfprIdentificerendeVeldensPartial = true;
                    }

                    $collGsVoorschrijfprIdentificerendeVeldens->getInternalIterator()->rewind();

                    return $collGsVoorschrijfprIdentificerendeVeldens;
                }

                if ($partial && $this->collGsVoorschrijfprIdentificerendeVeldens) {
                    foreach ($this->collGsVoorschrijfprIdentificerendeVeldens as $obj) {
                        if ($obj->isNew()) {
                            $collGsVoorschrijfprIdentificerendeVeldens[] = $obj;
                        }
                    }
                }

                $this->collGsVoorschrijfprIdentificerendeVeldens = $collGsVoorschrijfprIdentificerendeVeldens;
                $this->collGsVoorschrijfprIdentificerendeVeldensPartial = false;
            }
        }

        return $this->collGsVoorschrijfprIdentificerendeVeldens;
    }

    /**
     * Sets a collection of GsVoorschrijfprIdentificerendeVelden objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsVoorschrijfprIdentificerendeVeldens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function setGsVoorschrijfprIdentificerendeVeldens(PropelCollection $gsVoorschrijfprIdentificerendeVeldens, PropelPDO $con = null)
    {
        $gsVoorschrijfprIdentificerendeVeldensToDelete = $this->getGsVoorschrijfprIdentificerendeVeldens(new Criteria(), $con)->diff($gsVoorschrijfprIdentificerendeVeldens);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsVoorschrijfprIdentificerendeVeldensScheduledForDeletion = clone $gsVoorschrijfprIdentificerendeVeldensToDelete;

        foreach ($gsVoorschrijfprIdentificerendeVeldensToDelete as $gsVoorschrijfprIdentificerendeVeldenRemoved) {
            $gsVoorschrijfprIdentificerendeVeldenRemoved->setGsVoorschrijfprGeneesmiddelIdentific(null);
        }

        $this->collGsVoorschrijfprIdentificerendeVeldens = null;
        foreach ($gsVoorschrijfprIdentificerendeVeldens as $gsVoorschrijfprIdentificerendeVelden) {
            $this->addGsVoorschrijfprIdentificerendeVelden($gsVoorschrijfprIdentificerendeVelden);
        }

        $this->collGsVoorschrijfprIdentificerendeVeldens = $gsVoorschrijfprIdentificerendeVeldens;
        $this->collGsVoorschrijfprIdentificerendeVeldensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsVoorschrijfprIdentificerendeVelden objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsVoorschrijfprIdentificerendeVelden objects.
     * @throws PropelException
     */
    public function countGsVoorschrijfprIdentificerendeVeldens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsVoorschrijfprIdentificerendeVeldensPartial && !$this->isNew();
        if (null === $this->collGsVoorschrijfprIdentificerendeVeldens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsVoorschrijfprIdentificerendeVeldens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsVoorschrijfprIdentificerendeVeldens());
            }
            $query = GsVoorschrijfprIdentificerendeVeldenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsVoorschrijfprGeneesmiddelIdentific($this)
                ->count($con);
        }

        return count($this->collGsVoorschrijfprIdentificerendeVeldens);
    }

    /**
     * Method called to associate a GsVoorschrijfprIdentificerendeVelden object to this object
     * through the GsVoorschrijfprIdentificerendeVelden foreign key attribute.
     *
     * @param    GsVoorschrijfprIdentificerendeVelden $l GsVoorschrijfprIdentificerendeVelden
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function addGsVoorschrijfprIdentificerendeVelden(GsVoorschrijfprIdentificerendeVelden $l)
    {
        if ($this->collGsVoorschrijfprIdentificerendeVeldens === null) {
            $this->initGsVoorschrijfprIdentificerendeVeldens();
            $this->collGsVoorschrijfprIdentificerendeVeldensPartial = true;
        }

        if (!in_array($l, $this->collGsVoorschrijfprIdentificerendeVeldens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsVoorschrijfprIdentificerendeVelden($l);

            if ($this->gsVoorschrijfprIdentificerendeVeldensScheduledForDeletion and $this->gsVoorschrijfprIdentificerendeVeldensScheduledForDeletion->contains($l)) {
                $this->gsVoorschrijfprIdentificerendeVeldensScheduledForDeletion->remove($this->gsVoorschrijfprIdentificerendeVeldensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsVoorschrijfprIdentificerendeVelden $gsVoorschrijfprIdentificerendeVelden The gsVoorschrijfprIdentificerendeVelden object to add.
     */
    protected function doAddGsVoorschrijfprIdentificerendeVelden($gsVoorschrijfprIdentificerendeVelden)
    {
        $this->collGsVoorschrijfprIdentificerendeVeldens[]= $gsVoorschrijfprIdentificerendeVelden;
        $gsVoorschrijfprIdentificerendeVelden->setGsVoorschrijfprGeneesmiddelIdentific($this);
    }

    /**
     * @param	GsVoorschrijfprIdentificerendeVelden $gsVoorschrijfprIdentificerendeVelden The gsVoorschrijfprIdentificerendeVelden object to remove.
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     */
    public function removeGsVoorschrijfprIdentificerendeVelden($gsVoorschrijfprIdentificerendeVelden)
    {
        if ($this->getGsVoorschrijfprIdentificerendeVeldens()->contains($gsVoorschrijfprIdentificerendeVelden)) {
            $this->collGsVoorschrijfprIdentificerendeVeldens->remove($this->collGsVoorschrijfprIdentificerendeVeldens->search($gsVoorschrijfprIdentificerendeVelden));
            if (null === $this->gsVoorschrijfprIdentificerendeVeldensScheduledForDeletion) {
                $this->gsVoorschrijfprIdentificerendeVeldensScheduledForDeletion = clone $this->collGsVoorschrijfprIdentificerendeVeldens;
                $this->gsVoorschrijfprIdentificerendeVeldensScheduledForDeletion->clear();
            }
            $this->gsVoorschrijfprIdentificerendeVeldensScheduledForDeletion[]= clone $gsVoorschrijfprIdentificerendeVelden;
            $gsVoorschrijfprIdentificerendeVelden->setGsVoorschrijfprGeneesmiddelIdentific(null);
        }

        return $this;
    }

    /**
     * Gets a single GsVoorschrijfproducten object, which is related to this object by a one-to-one relationship.
     *
     * @param PropelPDO $con optional connection object
     * @return GsVoorschrijfproducten
     * @throws PropelException
     */
    public function getGsVoorschrijfproducten(PropelPDO $con = null)
    {

        if ($this->singleGsVoorschrijfproducten === null && !$this->isNew()) {
            $this->singleGsVoorschrijfproducten = GsVoorschrijfproductenQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleGsVoorschrijfproducten;
    }

    /**
     * Sets a single GsVoorschrijfproducten object as related to this object by a one-to-one relationship.
     *
     * @param                  GsVoorschrijfproducten $v GsVoorschrijfproducten
     * @return GsVoorschrijfprGeneesmiddelIdentific The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsVoorschrijfproducten(GsVoorschrijfproducten $v = null)
    {
        $this->singleGsVoorschrijfproducten = $v;

        // Make sure that that the passed-in GsVoorschrijfproducten isn't already associated with this object
        if ($v !== null && $v->getGsVoorschrijfprGeneesmiddelIdentific(null, false) === null) {
            $v->setGsVoorschrijfprGeneesmiddelIdentific($this);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->prkcode = null;
        $this->naamstoevoeging = null;
        $this->generiekeproductcode = null;
        $this->emballagetype_kode = null;
        $this->basiseenheid_product_kode = null;
        $this->hpkgrootte_algemeen = null;
        $this->hulpmiddel_aard_1_kode = null;
        $this->hulpmiddel_hoeveelheid_1 = null;
        $this->hulpmiddel_aard_2_kode = null;
        $this->hulpmiddel_hoeveelheid_2 = null;
        $this->kode_meervoudigprodukt = null;
        $this->hpkgrootte_verbandlengte = null;
        $this->hpkgrootte_verbandbreedte = null;
        $this->hpkgrootte_iud = null;
        $this->reden_hulpstof_identificerend = null;
        $this->instant = null;
        $this->extra_kenmerk_tbv_voorschrijven = null;
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
            if ($this->collGsArtikelEigenschappens) {
                foreach ($this->collGsArtikelEigenschappens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsBijzondereKenmerkens) {
                foreach ($this->collGsBijzondereKenmerkens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsHandelsproductens) {
                foreach ($this->collGsHandelsproductens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsVoorschrijfprIdentificerendeVeldens) {
                foreach ($this->collGsVoorschrijfprIdentificerendeVeldens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->singleGsVoorschrijfproducten) {
                $this->singleGsVoorschrijfproducten->clearAllReferences($deep);
            }
            if ($this->aGsGeneriekeProducten instanceof Persistent) {
              $this->aGsGeneriekeProducten->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collGsArtikelEigenschappens instanceof PropelCollection) {
            $this->collGsArtikelEigenschappens->clearIterator();
        }
        $this->collGsArtikelEigenschappens = null;
        if ($this->collGsBijzondereKenmerkens instanceof PropelCollection) {
            $this->collGsBijzondereKenmerkens->clearIterator();
        }
        $this->collGsBijzondereKenmerkens = null;
        if ($this->collGsHandelsproductens instanceof PropelCollection) {
            $this->collGsHandelsproductens->clearIterator();
        }
        $this->collGsHandelsproductens = null;
        if ($this->collGsVoorschrijfprIdentificerendeVeldens instanceof PropelCollection) {
            $this->collGsVoorschrijfprIdentificerendeVeldens->clearIterator();
        }
        $this->collGsVoorschrijfprIdentificerendeVeldens = null;
        if ($this->singleGsVoorschrijfproducten instanceof PropelCollection) {
            $this->singleGsVoorschrijfproducten->clearIterator();
        }
        $this->singleGsVoorschrijfproducten = null;
        $this->aGsGeneriekeProducten = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsVoorschrijfprGeneesmiddelIdentificPeer::DEFAULT_STRING_FORMAT);
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
