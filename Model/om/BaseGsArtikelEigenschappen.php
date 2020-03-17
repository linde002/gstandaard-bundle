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
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenPeer;
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
use PharmaIntelligence\GstandaardBundle\Model\GsRzvAanspraak;
use PharmaIntelligence\GstandaardBundle\Model\GsRzvAanspraakQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentific;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificQuery;

abstract class BaseGsArtikelEigenschappen extends BaseObject
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelEigenschappenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsArtikelEigenschappenPeer
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
     * The value for the verpakkings_hoeveelheid field.
     * @var        int
     */
    protected $verpakkings_hoeveelheid;

    /**
     * The value for the verpakkings_hoeveelheid_omschrijving field.
     * @var        string
     */
    protected $verpakkings_hoeveelheid_omschrijving;

    /**
     * The value for the hoofdverpakking_omschrijving field.
     * @var        string
     */
    protected $hoofdverpakking_omschrijving;

    /**
     * The value for the deelverpakking_omschrijving field.
     * @var        string
     */
    protected $deelverpakking_omschrijving;

    /**
     * The value for the basiseenheid_omschrijving field.
     * @var        string
     */
    protected $basiseenheid_omschrijving;

    /**
     * The value for the inkoophoeveelheid_omschrijving field.
     * @var        string
     */
    protected $inkoophoeveelheid_omschrijving;

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
     * The value for the etiket_naam field.
     * @var        string
     */
    protected $etiket_naam;

    /**
     * The value for the merk_naam field.
     * @var        string
     */
    protected $merk_naam;

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
     * The value for the stof_naam field.
     * @var        string
     */
    protected $stof_naam;

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
     * The value for the is_zvz field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $is_zvz;

    /**
     * The value for the is_dwg field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $is_dwg;

    /**
     * The value for the artikelnummer_fabrikant field.
     * @var        string
     */
    protected $artikelnummer_fabrikant;

    /**
     * The value for the toedieningsvorm field.
     * @var        string
     */
    protected $toedieningsvorm;

    /**
     * The value for the toedieningsweg field.
     * @var        string
     */
    protected $toedieningsweg;

    /**
     * The value for the farmaceutische_vorm field.
     * @var        string
     */
    protected $farmaceutische_vorm;

    /**
     * The value for the productgroep field.
     * @var        string
     */
    protected $productgroep;

    /**
     * The value for the primaire_werkzame_stof_naam field.
     * @var        string
     */
    protected $primaire_werkzame_stof_naam;

    /**
     * The value for the primaire_werkzame_stof_eenheid field.
     * @var        string
     */
    protected $primaire_werkzame_stof_eenheid;

    /**
     * The value for the primaire_werkzame_stof_hoeveelheid field.
     * @var        string
     */
    protected $primaire_werkzame_stof_hoeveelheid;

    /**
     * The value for the meest_recente_aip field.
     * @var        string
     */
    protected $meest_recente_aip;

    /**
     * The value for the emballage_naam field.
     * @var        string
     */
    protected $emballage_naam;

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
     * @var        GsRzvAanspraak one-to-one related GsRzvAanspraak object
     */
    protected $singleGsRzvAanspraak;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->is_zvz = false;
        $this->is_dwg = false;
    }

    /**
     * Initializes internal state of BaseGsArtikelEigenschappen object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [verpakkings_hoeveelheid] column value.
     *
     * @return int
     */
    public function getVerpakkingsHoeveelheid()
    {

        return $this->verpakkings_hoeveelheid;
    }

    /**
     * Get the [verpakkings_hoeveelheid_omschrijving] column value.
     *
     * @return string
     */
    public function getVerpakkingsHoeveelheidOmschrijving()
    {

        return $this->verpakkings_hoeveelheid_omschrijving;
    }

    /**
     * Get the [hoofdverpakking_omschrijving] column value.
     *
     * @return string
     */
    public function getHoofdverpakkingOmschrijving()
    {

        return $this->hoofdverpakking_omschrijving;
    }

    /**
     * Get the [deelverpakking_omschrijving] column value.
     *
     * @return string
     */
    public function getDeelverpakkingOmschrijving()
    {

        return $this->deelverpakking_omschrijving;
    }

    /**
     * Get the [basiseenheid_omschrijving] column value.
     *
     * @return string
     */
    public function getBasiseenheidOmschrijving()
    {

        return $this->basiseenheid_omschrijving;
    }

    /**
     * Get the [inkoophoeveelheid_omschrijving] column value.
     *
     * @return string
     */
    public function getInkoophoeveelheidOmschrijving()
    {

        return $this->inkoophoeveelheid_omschrijving;
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
     * Get the [etiket_naam] column value.
     *
     * @return string
     */
    public function getEtiketNaam()
    {

        return $this->etiket_naam;
    }

    /**
     * Get the [merk_naam] column value.
     *
     * @return string
     */
    public function getMerkNaam()
    {

        return $this->merk_naam;
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
     * Get the [stof_naam] column value.
     *
     * @return string
     */
    public function getStofNaam()
    {

        return $this->stof_naam;
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
     * Get the [is_zvz] column value.
     *
     * @return boolean
     */
    public function getIsZvz()
    {

        return $this->is_zvz;
    }

    /**
     * Get the [is_dwg] column value.
     *
     * @return boolean
     */
    public function getIsDwg()
    {

        return $this->is_dwg;
    }

    /**
     * Get the [artikelnummer_fabrikant] column value.
     *
     * @return string
     */
    public function getArtikelnummerFabrikant()
    {

        return $this->artikelnummer_fabrikant;
    }

    /**
     * Get the [toedieningsvorm] column value.
     *
     * @return string
     */
    public function getToedieningsvorm()
    {

        return $this->toedieningsvorm;
    }

    /**
     * Get the [toedieningsweg] column value.
     *
     * @return string
     */
    public function getToedieningsweg()
    {

        return $this->toedieningsweg;
    }

    /**
     * Get the [farmaceutische_vorm] column value.
     *
     * @return string
     */
    public function getFarmaceutischeVorm()
    {

        return $this->farmaceutische_vorm;
    }

    /**
     * Get the [productgroep] column value.
     *
     * @return string
     */
    public function getProductgroep()
    {

        return $this->productgroep;
    }

    /**
     * Get the [primaire_werkzame_stof_naam] column value.
     *
     * @return string
     */
    public function getPrimaireWerkzameStofNaam()
    {

        return $this->primaire_werkzame_stof_naam;
    }

    /**
     * Get the [primaire_werkzame_stof_eenheid] column value.
     *
     * @return string
     */
    public function getPrimaireWerkzameStofEenheid()
    {

        return $this->primaire_werkzame_stof_eenheid;
    }

    /**
     * Get the [primaire_werkzame_stof_hoeveelheid] column value.
     *
     * @return string
     */
    public function getPrimaireWerkzameStofHoeveelheid()
    {

        return $this->primaire_werkzame_stof_hoeveelheid;
    }

    /**
     * Get the [meest_recente_aip] column value.
     *
     * @return string
     */
    public function getMeestRecenteAip()
    {

        return $this->meest_recente_aip;
    }

    /**
     * Get the [emballage_naam] column value.
     *
     * @return string
     */
    public function getEmballageNaam()
    {

        return $this->emballage_naam;
    }

    /**
     * Set the value of [zindex_nummer] column.
     *
     * @param  int $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setZindexNummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zindex_nummer !== $v) {
            $this->zindex_nummer = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::ZINDEX_NUMMER;
        }

        if ($this->aGsArtikelen !== null && $this->aGsArtikelen->getZinummer() !== $v) {
            $this->aGsArtikelen = null;
        }


        return $this;
    } // setZindexNummer()

    /**
     * Set the value of [verpakkings_hoeveelheid] column.
     *
     * @param  int $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setVerpakkingsHoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->verpakkings_hoeveelheid !== $v) {
            $this->verpakkings_hoeveelheid = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::VERPAKKINGS_HOEVEELHEID;
        }


        return $this;
    } // setVerpakkingsHoeveelheid()

    /**
     * Set the value of [verpakkings_hoeveelheid_omschrijving] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setVerpakkingsHoeveelheidOmschrijving($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->verpakkings_hoeveelheid_omschrijving !== $v) {
            $this->verpakkings_hoeveelheid_omschrijving = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::VERPAKKINGS_HOEVEELHEID_OMSCHRIJVING;
        }


        return $this;
    } // setVerpakkingsHoeveelheidOmschrijving()

    /**
     * Set the value of [hoofdverpakking_omschrijving] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setHoofdverpakkingOmschrijving($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hoofdverpakking_omschrijving !== $v) {
            $this->hoofdverpakking_omschrijving = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::HOOFDVERPAKKING_OMSCHRIJVING;
        }


        return $this;
    } // setHoofdverpakkingOmschrijving()

    /**
     * Set the value of [deelverpakking_omschrijving] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setDeelverpakkingOmschrijving($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->deelverpakking_omschrijving !== $v) {
            $this->deelverpakking_omschrijving = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::DEELVERPAKKING_OMSCHRIJVING;
        }


        return $this;
    } // setDeelverpakkingOmschrijving()

    /**
     * Set the value of [basiseenheid_omschrijving] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setBasiseenheidOmschrijving($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->basiseenheid_omschrijving !== $v) {
            $this->basiseenheid_omschrijving = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::BASISEENHEID_OMSCHRIJVING;
        }


        return $this;
    } // setBasiseenheidOmschrijving()

    /**
     * Set the value of [inkoophoeveelheid_omschrijving] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setInkoophoeveelheidOmschrijving($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inkoophoeveelheid_omschrijving !== $v) {
            $this->inkoophoeveelheid_omschrijving = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::INKOOPHOEVEELHEID_OMSCHRIJVING;
        }


        return $this;
    } // setInkoophoeveelheidOmschrijving()

    /**
     * Set the value of [hpk] column.
     *
     * @param  int $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setHpk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hpk !== $v) {
            $this->hpk = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::HPK;
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
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setPrk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->prk !== $v) {
            $this->prk = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::PRK;
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
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setGpk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gpk !== $v) {
            $this->gpk = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::GPK;
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
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setAtc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->atc !== $v) {
            $this->atc = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::ATC;
        }

        if ($this->aGsAtcCodes !== null && $this->aGsAtcCodes->getAtccode() !== $v) {
            $this->aGsAtcCodes = null;
        }


        return $this;
    } // setAtc()

    /**
     * Set the value of [etiket_naam] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setEtiketNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->etiket_naam !== $v) {
            $this->etiket_naam = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::ETIKET_NAAM;
        }


        return $this;
    } // setEtiketNaam()

    /**
     * Set the value of [merk_naam] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setMerkNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->merk_naam !== $v) {
            $this->merk_naam = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::MERK_NAAM;
        }


        return $this;
    } // setMerkNaam()

    /**
     * Set the value of [hpk_naam] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setHpkNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hpk_naam !== $v) {
            $this->hpk_naam = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::HPK_NAAM;
        }


        return $this;
    } // setHpkNaam()

    /**
     * Set the value of [prk_naam] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setPrkNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->prk_naam !== $v) {
            $this->prk_naam = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::PRK_NAAM;
        }


        return $this;
    } // setPrkNaam()

    /**
     * Set the value of [gpk_naam] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setGpkNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gpk_naam !== $v) {
            $this->gpk_naam = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::GPK_NAAM;
        }


        return $this;
    } // setGpkNaam()

    /**
     * Set the value of [stof_naam] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setStofNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->stof_naam !== $v) {
            $this->stof_naam = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::STOF_NAAM;
        }


        return $this;
    } // setStofNaam()

    /**
     * Set the value of [atc_naam] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setAtcNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->atc_naam !== $v) {
            $this->atc_naam = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::ATC_NAAM;
        }


        return $this;
    } // setAtcNaam()

    /**
     * Set the value of [leverancier_nummer] column.
     *
     * @param  int $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setLeverancierNummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->leverancier_nummer !== $v) {
            $this->leverancier_nummer = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER;
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
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setLeverancierNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->leverancier_naam !== $v) {
            $this->leverancier_naam = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::LEVERANCIER_NAAM;
        }


        return $this;
    } // setLeverancierNaam()

    /**
     * Sets the value of the [is_zvz] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setIsZvz($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_zvz !== $v) {
            $this->is_zvz = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::IS_ZVZ;
        }


        return $this;
    } // setIsZvz()

    /**
     * Sets the value of the [is_dwg] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setIsDwg($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_dwg !== $v) {
            $this->is_dwg = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::IS_DWG;
        }


        return $this;
    } // setIsDwg()

    /**
     * Set the value of [artikelnummer_fabrikant] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setArtikelnummerFabrikant($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artikelnummer_fabrikant !== $v) {
            $this->artikelnummer_fabrikant = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::ARTIKELNUMMER_FABRIKANT;
        }


        return $this;
    } // setArtikelnummerFabrikant()

    /**
     * Set the value of [toedieningsvorm] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setToedieningsvorm($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->toedieningsvorm !== $v) {
            $this->toedieningsvorm = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::TOEDIENINGSVORM;
        }


        return $this;
    } // setToedieningsvorm()

    /**
     * Set the value of [toedieningsweg] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setToedieningsweg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->toedieningsweg !== $v) {
            $this->toedieningsweg = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::TOEDIENINGSWEG;
        }


        return $this;
    } // setToedieningsweg()

    /**
     * Set the value of [farmaceutische_vorm] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setFarmaceutischeVorm($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->farmaceutische_vorm !== $v) {
            $this->farmaceutische_vorm = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::FARMACEUTISCHE_VORM;
        }


        return $this;
    } // setFarmaceutischeVorm()

    /**
     * Set the value of [productgroep] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setProductgroep($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->productgroep !== $v) {
            $this->productgroep = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::PRODUCTGROEP;
        }


        return $this;
    } // setProductgroep()

    /**
     * Set the value of [primaire_werkzame_stof_naam] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setPrimaireWerkzameStofNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->primaire_werkzame_stof_naam !== $v) {
            $this->primaire_werkzame_stof_naam = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_NAAM;
        }


        return $this;
    } // setPrimaireWerkzameStofNaam()

    /**
     * Set the value of [primaire_werkzame_stof_eenheid] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setPrimaireWerkzameStofEenheid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->primaire_werkzame_stof_eenheid !== $v) {
            $this->primaire_werkzame_stof_eenheid = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_EENHEID;
        }


        return $this;
    } // setPrimaireWerkzameStofEenheid()

    /**
     * Set the value of [primaire_werkzame_stof_hoeveelheid] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setPrimaireWerkzameStofHoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->primaire_werkzame_stof_hoeveelheid !== $v) {
            $this->primaire_werkzame_stof_hoeveelheid = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_HOEVEELHEID;
        }


        return $this;
    } // setPrimaireWerkzameStofHoeveelheid()

    /**
     * Set the value of [meest_recente_aip] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setMeestRecenteAip($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->meest_recente_aip !== $v) {
            $this->meest_recente_aip = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::MEEST_RECENTE_AIP;
        }


        return $this;
    } // setMeestRecenteAip()

    /**
     * Set the value of [emballage_naam] column.
     *
     * @param  string $v new value
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     */
    public function setEmballageNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->emballage_naam !== $v) {
            $this->emballage_naam = $v;
            $this->modifiedColumns[] = GsArtikelEigenschappenPeer::EMBALLAGE_NAAM;
        }


        return $this;
    } // setEmballageNaam()

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
            if ($this->is_zvz !== false) {
                return false;
            }

            if ($this->is_dwg !== false) {
                return false;
            }

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
            $this->verpakkings_hoeveelheid = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->verpakkings_hoeveelheid_omschrijving = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->hoofdverpakking_omschrijving = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->deelverpakking_omschrijving = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->basiseenheid_omschrijving = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->inkoophoeveelheid_omschrijving = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->hpk = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->prk = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->gpk = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->atc = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->etiket_naam = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->merk_naam = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->hpk_naam = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->prk_naam = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->gpk_naam = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->stof_naam = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->atc_naam = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->leverancier_nummer = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->leverancier_naam = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->is_zvz = ($row[$startcol + 20] !== null) ? (boolean) $row[$startcol + 20] : null;
            $this->is_dwg = ($row[$startcol + 21] !== null) ? (boolean) $row[$startcol + 21] : null;
            $this->artikelnummer_fabrikant = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->toedieningsvorm = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->toedieningsweg = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->farmaceutische_vorm = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->productgroep = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->primaire_werkzame_stof_naam = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->primaire_werkzame_stof_eenheid = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->primaire_werkzame_stof_hoeveelheid = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->meest_recente_aip = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->emballage_naam = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 32; // 32 = GsArtikelEigenschappenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsArtikelEigenschappen object", $e);
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


            if (($retval = GsArtikelEigenschappenPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->singleGsRzvAanspraak !== null) {
                    if (!$this->singleGsRzvAanspraak->validate($columns)) {
                        $failureMap = array_merge($failureMap, $this->singleGsRzvAanspraak->getValidationFailures());
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
        $pos = GsArtikelEigenschappenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getVerpakkingsHoeveelheid();
                break;
            case 2:
                return $this->getVerpakkingsHoeveelheidOmschrijving();
                break;
            case 3:
                return $this->getHoofdverpakkingOmschrijving();
                break;
            case 4:
                return $this->getDeelverpakkingOmschrijving();
                break;
            case 5:
                return $this->getBasiseenheidOmschrijving();
                break;
            case 6:
                return $this->getInkoophoeveelheidOmschrijving();
                break;
            case 7:
                return $this->getHpk();
                break;
            case 8:
                return $this->getPrk();
                break;
            case 9:
                return $this->getGpk();
                break;
            case 10:
                return $this->getAtc();
                break;
            case 11:
                return $this->getEtiketNaam();
                break;
            case 12:
                return $this->getMerkNaam();
                break;
            case 13:
                return $this->getHpkNaam();
                break;
            case 14:
                return $this->getPrkNaam();
                break;
            case 15:
                return $this->getGpkNaam();
                break;
            case 16:
                return $this->getStofNaam();
                break;
            case 17:
                return $this->getAtcNaam();
                break;
            case 18:
                return $this->getLeverancierNummer();
                break;
            case 19:
                return $this->getLeverancierNaam();
                break;
            case 20:
                return $this->getIsZvz();
                break;
            case 21:
                return $this->getIsDwg();
                break;
            case 22:
                return $this->getArtikelnummerFabrikant();
                break;
            case 23:
                return $this->getToedieningsvorm();
                break;
            case 24:
                return $this->getToedieningsweg();
                break;
            case 25:
                return $this->getFarmaceutischeVorm();
                break;
            case 26:
                return $this->getProductgroep();
                break;
            case 27:
                return $this->getPrimaireWerkzameStofNaam();
                break;
            case 28:
                return $this->getPrimaireWerkzameStofEenheid();
                break;
            case 29:
                return $this->getPrimaireWerkzameStofHoeveelheid();
                break;
            case 30:
                return $this->getMeestRecenteAip();
                break;
            case 31:
                return $this->getEmballageNaam();
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
        if (isset($alreadyDumpedObjects['GsArtikelEigenschappen'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsArtikelEigenschappen'][$this->getPrimaryKey()] = true;
        $keys = GsArtikelEigenschappenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getZindexNummer(),
            $keys[1] => $this->getVerpakkingsHoeveelheid(),
            $keys[2] => $this->getVerpakkingsHoeveelheidOmschrijving(),
            $keys[3] => $this->getHoofdverpakkingOmschrijving(),
            $keys[4] => $this->getDeelverpakkingOmschrijving(),
            $keys[5] => $this->getBasiseenheidOmschrijving(),
            $keys[6] => $this->getInkoophoeveelheidOmschrijving(),
            $keys[7] => $this->getHpk(),
            $keys[8] => $this->getPrk(),
            $keys[9] => $this->getGpk(),
            $keys[10] => $this->getAtc(),
            $keys[11] => $this->getEtiketNaam(),
            $keys[12] => $this->getMerkNaam(),
            $keys[13] => $this->getHpkNaam(),
            $keys[14] => $this->getPrkNaam(),
            $keys[15] => $this->getGpkNaam(),
            $keys[16] => $this->getStofNaam(),
            $keys[17] => $this->getAtcNaam(),
            $keys[18] => $this->getLeverancierNummer(),
            $keys[19] => $this->getLeverancierNaam(),
            $keys[20] => $this->getIsZvz(),
            $keys[21] => $this->getIsDwg(),
            $keys[22] => $this->getArtikelnummerFabrikant(),
            $keys[23] => $this->getToedieningsvorm(),
            $keys[24] => $this->getToedieningsweg(),
            $keys[25] => $this->getFarmaceutischeVorm(),
            $keys[26] => $this->getProductgroep(),
            $keys[27] => $this->getPrimaireWerkzameStofNaam(),
            $keys[28] => $this->getPrimaireWerkzameStofEenheid(),
            $keys[29] => $this->getPrimaireWerkzameStofHoeveelheid(),
            $keys[30] => $this->getMeestRecenteAip(),
            $keys[31] => $this->getEmballageNaam(),
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
            if (null !== $this->singleGsRzvAanspraak) {
                $result['GsRzvAanspraak'] = $this->singleGsRzvAanspraak->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
            }
        }

        return $result;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsArtikelEigenschappenPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsArtikelEigenschappenPeer::ZINDEX_NUMMER)) $criteria->add(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $this->zindex_nummer);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::VERPAKKINGS_HOEVEELHEID)) $criteria->add(GsArtikelEigenschappenPeer::VERPAKKINGS_HOEVEELHEID, $this->verpakkings_hoeveelheid);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::VERPAKKINGS_HOEVEELHEID_OMSCHRIJVING)) $criteria->add(GsArtikelEigenschappenPeer::VERPAKKINGS_HOEVEELHEID_OMSCHRIJVING, $this->verpakkings_hoeveelheid_omschrijving);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::HOOFDVERPAKKING_OMSCHRIJVING)) $criteria->add(GsArtikelEigenschappenPeer::HOOFDVERPAKKING_OMSCHRIJVING, $this->hoofdverpakking_omschrijving);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::DEELVERPAKKING_OMSCHRIJVING)) $criteria->add(GsArtikelEigenschappenPeer::DEELVERPAKKING_OMSCHRIJVING, $this->deelverpakking_omschrijving);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::BASISEENHEID_OMSCHRIJVING)) $criteria->add(GsArtikelEigenschappenPeer::BASISEENHEID_OMSCHRIJVING, $this->basiseenheid_omschrijving);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::INKOOPHOEVEELHEID_OMSCHRIJVING)) $criteria->add(GsArtikelEigenschappenPeer::INKOOPHOEVEELHEID_OMSCHRIJVING, $this->inkoophoeveelheid_omschrijving);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::HPK)) $criteria->add(GsArtikelEigenschappenPeer::HPK, $this->hpk);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::PRK)) $criteria->add(GsArtikelEigenschappenPeer::PRK, $this->prk);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::GPK)) $criteria->add(GsArtikelEigenschappenPeer::GPK, $this->gpk);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::ATC)) $criteria->add(GsArtikelEigenschappenPeer::ATC, $this->atc);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::ETIKET_NAAM)) $criteria->add(GsArtikelEigenschappenPeer::ETIKET_NAAM, $this->etiket_naam);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::MERK_NAAM)) $criteria->add(GsArtikelEigenschappenPeer::MERK_NAAM, $this->merk_naam);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::HPK_NAAM)) $criteria->add(GsArtikelEigenschappenPeer::HPK_NAAM, $this->hpk_naam);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::PRK_NAAM)) $criteria->add(GsArtikelEigenschappenPeer::PRK_NAAM, $this->prk_naam);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::GPK_NAAM)) $criteria->add(GsArtikelEigenschappenPeer::GPK_NAAM, $this->gpk_naam);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::STOF_NAAM)) $criteria->add(GsArtikelEigenschappenPeer::STOF_NAAM, $this->stof_naam);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::ATC_NAAM)) $criteria->add(GsArtikelEigenschappenPeer::ATC_NAAM, $this->atc_naam);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER)) $criteria->add(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, $this->leverancier_nummer);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::LEVERANCIER_NAAM)) $criteria->add(GsArtikelEigenschappenPeer::LEVERANCIER_NAAM, $this->leverancier_naam);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::IS_ZVZ)) $criteria->add(GsArtikelEigenschappenPeer::IS_ZVZ, $this->is_zvz);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::IS_DWG)) $criteria->add(GsArtikelEigenschappenPeer::IS_DWG, $this->is_dwg);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::ARTIKELNUMMER_FABRIKANT)) $criteria->add(GsArtikelEigenschappenPeer::ARTIKELNUMMER_FABRIKANT, $this->artikelnummer_fabrikant);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::TOEDIENINGSVORM)) $criteria->add(GsArtikelEigenschappenPeer::TOEDIENINGSVORM, $this->toedieningsvorm);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::TOEDIENINGSWEG)) $criteria->add(GsArtikelEigenschappenPeer::TOEDIENINGSWEG, $this->toedieningsweg);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::FARMACEUTISCHE_VORM)) $criteria->add(GsArtikelEigenschappenPeer::FARMACEUTISCHE_VORM, $this->farmaceutische_vorm);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::PRODUCTGROEP)) $criteria->add(GsArtikelEigenschappenPeer::PRODUCTGROEP, $this->productgroep);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_NAAM)) $criteria->add(GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_NAAM, $this->primaire_werkzame_stof_naam);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_EENHEID)) $criteria->add(GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_EENHEID, $this->primaire_werkzame_stof_eenheid);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_HOEVEELHEID)) $criteria->add(GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_HOEVEELHEID, $this->primaire_werkzame_stof_hoeveelheid);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::MEEST_RECENTE_AIP)) $criteria->add(GsArtikelEigenschappenPeer::MEEST_RECENTE_AIP, $this->meest_recente_aip);
        if ($this->isColumnModified(GsArtikelEigenschappenPeer::EMBALLAGE_NAAM)) $criteria->add(GsArtikelEigenschappenPeer::EMBALLAGE_NAAM, $this->emballage_naam);

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
        $criteria = new Criteria(GsArtikelEigenschappenPeer::DATABASE_NAME);
        $criteria->add(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $this->zindex_nummer);

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
     * @param object $copyObj An object of GsArtikelEigenschappen (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setVerpakkingsHoeveelheid($this->getVerpakkingsHoeveelheid());
        $copyObj->setVerpakkingsHoeveelheidOmschrijving($this->getVerpakkingsHoeveelheidOmschrijving());
        $copyObj->setHoofdverpakkingOmschrijving($this->getHoofdverpakkingOmschrijving());
        $copyObj->setDeelverpakkingOmschrijving($this->getDeelverpakkingOmschrijving());
        $copyObj->setBasiseenheidOmschrijving($this->getBasiseenheidOmschrijving());
        $copyObj->setInkoophoeveelheidOmschrijving($this->getInkoophoeveelheidOmschrijving());
        $copyObj->setHpk($this->getHpk());
        $copyObj->setPrk($this->getPrk());
        $copyObj->setGpk($this->getGpk());
        $copyObj->setAtc($this->getAtc());
        $copyObj->setEtiketNaam($this->getEtiketNaam());
        $copyObj->setMerkNaam($this->getMerkNaam());
        $copyObj->setHpkNaam($this->getHpkNaam());
        $copyObj->setPrkNaam($this->getPrkNaam());
        $copyObj->setGpkNaam($this->getGpkNaam());
        $copyObj->setStofNaam($this->getStofNaam());
        $copyObj->setAtcNaam($this->getAtcNaam());
        $copyObj->setLeverancierNummer($this->getLeverancierNummer());
        $copyObj->setLeverancierNaam($this->getLeverancierNaam());
        $copyObj->setIsZvz($this->getIsZvz());
        $copyObj->setIsDwg($this->getIsDwg());
        $copyObj->setArtikelnummerFabrikant($this->getArtikelnummerFabrikant());
        $copyObj->setToedieningsvorm($this->getToedieningsvorm());
        $copyObj->setToedieningsweg($this->getToedieningsweg());
        $copyObj->setFarmaceutischeVorm($this->getFarmaceutischeVorm());
        $copyObj->setProductgroep($this->getProductgroep());
        $copyObj->setPrimaireWerkzameStofNaam($this->getPrimaireWerkzameStofNaam());
        $copyObj->setPrimaireWerkzameStofEenheid($this->getPrimaireWerkzameStofEenheid());
        $copyObj->setPrimaireWerkzameStofHoeveelheid($this->getPrimaireWerkzameStofHoeveelheid());
        $copyObj->setMeestRecenteAip($this->getMeestRecenteAip());
        $copyObj->setEmballageNaam($this->getEmballageNaam());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            $relObj = $this->getGsRzvAanspraak();
            if ($relObj) {
                $copyObj->setGsRzvAanspraak($relObj->copy($deepCopy));
            }

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
     * @return GsArtikelEigenschappen Clone of current object.
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
     * @return GsArtikelEigenschappenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsArtikelEigenschappenPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsArtikelen object.
     *
     * @param                  GsArtikelen $v
     * @return GsArtikelEigenschappen The current object (for fluent API support)
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
            $v->setGsArtikelEigenschappen($this);
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
            $this->aGsArtikelen->setGsArtikelEigenschappen($this);
        }

        return $this->aGsArtikelen;
    }

    /**
     * Declares an association between this object and a GsHandelsproducten object.
     *
     * @param                  GsHandelsproducten $v
     * @return GsArtikelEigenschappen The current object (for fluent API support)
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
            $v->addGsArtikelEigenschappen($this);
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
                $this->aGsHandelsproducten->addGsArtikelEigenschappens($this);
             */
        }

        return $this->aGsHandelsproducten;
    }

    /**
     * Declares an association between this object and a GsNawGegevensGstandaard object.
     *
     * @param                  GsNawGegevensGstandaard $v
     * @return GsArtikelEigenschappen The current object (for fluent API support)
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
            $v->addGsArtikelEigenschappen($this);
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
                ->filterByGsArtikelEigenschappen($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsNawGegevensGstandaard->addGsArtikelEigenschappens($this);
             */
        }

        return $this->aGsNawGegevensGstandaard;
    }

    /**
     * Declares an association between this object and a GsVoorschrijfprGeneesmiddelIdentific object.
     *
     * @param                  GsVoorschrijfprGeneesmiddelIdentific $v
     * @return GsArtikelEigenschappen The current object (for fluent API support)
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
            $v->addGsArtikelEigenschappen($this);
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
                $this->aGsVoorschrijfprGeneesmiddelIdentific->addGsArtikelEigenschappens($this);
             */
        }

        return $this->aGsVoorschrijfprGeneesmiddelIdentific;
    }

    /**
     * Declares an association between this object and a GsGeneriekeProducten object.
     *
     * @param                  GsGeneriekeProducten $v
     * @return GsArtikelEigenschappen The current object (for fluent API support)
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
            $v->addGsArtikelEigenschappen($this);
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
                $this->aGsGeneriekeProducten->addGsArtikelEigenschappens($this);
             */
        }

        return $this->aGsGeneriekeProducten;
    }

    /**
     * Declares an association between this object and a GsAtcCodes object.
     *
     * @param                  GsAtcCodes $v
     * @return GsArtikelEigenschappen The current object (for fluent API support)
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
            $v->addGsArtikelEigenschappen($this);
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
                $this->aGsAtcCodes->addGsArtikelEigenschappens($this);
             */
        }

        return $this->aGsAtcCodes;
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
    }

    /**
     * Gets a single GsRzvAanspraak object, which is related to this object by a one-to-one relationship.
     *
     * @param PropelPDO $con optional connection object
     * @return GsRzvAanspraak
     * @throws PropelException
     */
    public function getGsRzvAanspraak(PropelPDO $con = null)
    {

        if ($this->singleGsRzvAanspraak === null && !$this->isNew()) {
            $this->singleGsRzvAanspraak = GsRzvAanspraakQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleGsRzvAanspraak;
    }

    /**
     * Sets a single GsRzvAanspraak object as related to this object by a one-to-one relationship.
     *
     * @param                  GsRzvAanspraak $v GsRzvAanspraak
     * @return GsArtikelEigenschappen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsRzvAanspraak(GsRzvAanspraak $v = null)
    {
        $this->singleGsRzvAanspraak = $v;

        // Make sure that that the passed-in GsRzvAanspraak isn't already associated with this object
        if ($v !== null && $v->getGsArtikelEigenschappen(null, false) === null) {
            $v->setGsArtikelEigenschappen($this);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->zindex_nummer = null;
        $this->verpakkings_hoeveelheid = null;
        $this->verpakkings_hoeveelheid_omschrijving = null;
        $this->hoofdverpakking_omschrijving = null;
        $this->deelverpakking_omschrijving = null;
        $this->basiseenheid_omschrijving = null;
        $this->inkoophoeveelheid_omschrijving = null;
        $this->hpk = null;
        $this->prk = null;
        $this->gpk = null;
        $this->atc = null;
        $this->etiket_naam = null;
        $this->merk_naam = null;
        $this->hpk_naam = null;
        $this->prk_naam = null;
        $this->gpk_naam = null;
        $this->stof_naam = null;
        $this->atc_naam = null;
        $this->leverancier_nummer = null;
        $this->leverancier_naam = null;
        $this->is_zvz = null;
        $this->is_dwg = null;
        $this->artikelnummer_fabrikant = null;
        $this->toedieningsvorm = null;
        $this->toedieningsweg = null;
        $this->farmaceutische_vorm = null;
        $this->productgroep = null;
        $this->primaire_werkzame_stof_naam = null;
        $this->primaire_werkzame_stof_eenheid = null;
        $this->primaire_werkzame_stof_hoeveelheid = null;
        $this->meest_recente_aip = null;
        $this->emballage_naam = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
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
            if ($this->singleGsRzvAanspraak) {
                $this->singleGsRzvAanspraak->clearAllReferences($deep);
            }
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

        if ($this->singleGsRzvAanspraak instanceof PropelCollection) {
            $this->singleGsRzvAanspraak->clearIterator();
        }
        $this->singleGsRzvAanspraak = null;
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
        return (string) $this->exportTo(GsArtikelEigenschappenPeer::DEFAULT_STRING_FORMAT);
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
