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
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeInformatie;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeInformatiePeer;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeInformatieQuery;

abstract class BaseGsLogistiekeInformatie extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLogistiekeInformatiePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsLogistiekeInformatiePeer
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
     * The value for the gtin field.
     * @var        string
     */
    protected $gtin;

    /**
     * The value for the gtin_van_de_data_leverancier field.
     * @var        string
     */
    protected $gtin_van_de_data_leverancier;

    /**
     * The value for the omschrijving_gtin field.
     * @var        string
     */
    protected $omschrijving_gtin;

    /**
     * The value for the hoogte_hoeveelheid field.
     * @var        string
     */
    protected $hoogte_hoeveelheid;

    /**
     * The value for the hoogte_eenheid field.
     * @var        string
     */
    protected $hoogte_eenheid;

    /**
     * The value for the breedte_hoeveelheid field.
     * @var        string
     */
    protected $breedte_hoeveelheid;

    /**
     * The value for the breedte_eenheid field.
     * @var        string
     */
    protected $breedte_eenheid;

    /**
     * The value for the diepte_hoeveelheid field.
     * @var        string
     */
    protected $diepte_hoeveelheid;

    /**
     * The value for the diepte_eenheid field.
     * @var        string
     */
    protected $diepte_eenheid;

    /**
     * The value for the bruto_gewicht_hoeveelheid field.
     * @var        string
     */
    protected $bruto_gewicht_hoeveelheid;

    /**
     * The value for the bruto_gewicht_eenheid field.
     * @var        string
     */
    protected $bruto_gewicht_eenheid;

    /**
     * The value for the netto_gewicht_hoeveelheid field.
     * @var        string
     */
    protected $netto_gewicht_hoeveelheid;

    /**
     * The value for the netto_gewicht_eenheid field.
     * @var        string
     */
    protected $netto_gewicht_eenheid;

    /**
     * The value for the indicatie_basiseenheid field.
     * @var        int
     */
    protected $indicatie_basiseenheid;

    /**
     * The value for the indicatie_consumenteneenheid field.
     * @var        int
     */
    protected $indicatie_consumenteneenheid;

    /**
     * The value for the indicatie_besteleenheid field.
     * @var        int
     */
    protected $indicatie_besteleenheid;

    /**
     * The value for the indicatie_levereenheid field.
     * @var        int
     */
    protected $indicatie_levereenheid;

    /**
     * The value for the indicatie_factuureenheid field.
     * @var        int
     */
    protected $indicatie_factuureenheid;

    /**
     * The value for the startdatum_beschikbaarheid_verpakking field.
     * @var        string
     */
    protected $startdatum_beschikbaarheid_verpakking;

    /**
     * The value for the einddatum_beschikbaarheid_verpakking field.
     * @var        string
     */
    protected $einddatum_beschikbaarheid_verpakking;

    /**
     * The value for the stopdatum_verpakking field.
     * @var        string
     */
    protected $stopdatum_verpakking;

    /**
     * The value for the child_gtin field.
     * @var        string
     */
    protected $child_gtin;

    /**
     * The value for the child_gtin_hoeveelheid field.
     * @var        int
     */
    protected $child_gtin_hoeveelheid;

    /**
     * The value for the product_type field.
     * @var        string
     */
    protected $product_type;

    /**
     * The value for the lijstprijs field.
     * @var        string
     */
    protected $lijstprijs;

    /**
     * The value for the retailprijs field.
     * @var        string
     */
    protected $retailprijs;

    /**
     * The value for the netto_inhoud_hoeveelheid field.
     * @var        string
     */
    protected $netto_inhoud_hoeveelheid;

    /**
     * The value for the netto_inhoud_eenheid field.
     * @var        string
     */
    protected $netto_inhoud_eenheid;

    /**
     * The value for the zindex_nummer field.
     * @var        int
     */
    protected $zindex_nummer;

    /**
     * The value for the hoeveelheid_verpakking field.
     * @var        string
     */
    protected $hoeveelheid_verpakking;

    /**
     * The value for the memocode_eenheid_verpakking field.
     * @var        string
     */
    protected $memocode_eenheid_verpakking;

    /**
     * The value for the fabrikant_artikel_codering field.
     * @var        string
     */
    protected $fabrikant_artikel_codering;

    /**
     * The value for the thesaurus_verwijzing_status field.
     * @var        int
     */
    protected $thesaurus_verwijzing_status;

    /**
     * The value for the status field.
     * @var        int
     */
    protected $status;

    /**
     * @var        GsArtikelen
     */
    protected $aGsArtikelenRelatedByZindexNummer;

    /**
     * @var        GsArtikelen one-to-one related GsArtikelen object
     */
    protected $singleGsArtikelenRelatedByZinummer;

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
     * Get the [gtin] column value.
     *
     * @return string
     */
    public function getGtin()
    {

        return $this->gtin;
    }

    /**
     * Get the [gtin_van_de_data_leverancier] column value.
     *
     * @return string
     */
    public function getGtinVanDeDataLeverancier()
    {

        return $this->gtin_van_de_data_leverancier;
    }

    /**
     * Get the [omschrijving_gtin] column value.
     *
     * @return string
     */
    public function getOmschrijvingGtin()
    {

        return $this->omschrijving_gtin;
    }

    /**
     * Get the [hoogte_hoeveelheid] column value.
     *
     * @return string
     */
    public function getHoogteHoeveelheid()
    {

        return $this->hoogte_hoeveelheid;
    }

    /**
     * Get the [hoogte_eenheid] column value.
     *
     * @return string
     */
    public function getHoogteEenheid()
    {

        return $this->hoogte_eenheid;
    }

    /**
     * Get the [breedte_hoeveelheid] column value.
     *
     * @return string
     */
    public function getBreedteHoeveelheid()
    {

        return $this->breedte_hoeveelheid;
    }

    /**
     * Get the [breedte_eenheid] column value.
     *
     * @return string
     */
    public function getBreedteEenheid()
    {

        return $this->breedte_eenheid;
    }

    /**
     * Get the [diepte_hoeveelheid] column value.
     *
     * @return string
     */
    public function getDiepteHoeveelheid()
    {

        return $this->diepte_hoeveelheid;
    }

    /**
     * Get the [diepte_eenheid] column value.
     *
     * @return string
     */
    public function getDiepteEenheid()
    {

        return $this->diepte_eenheid;
    }

    /**
     * Get the [bruto_gewicht_hoeveelheid] column value.
     *
     * @return string
     */
    public function getBrutoGewichtHoeveelheid()
    {

        return $this->bruto_gewicht_hoeveelheid;
    }

    /**
     * Get the [bruto_gewicht_eenheid] column value.
     *
     * @return string
     */
    public function getBrutoGewichtEenheid()
    {

        return $this->bruto_gewicht_eenheid;
    }

    /**
     * Get the [netto_gewicht_hoeveelheid] column value.
     *
     * @return string
     */
    public function getNettoGewichtHoeveelheid()
    {

        return $this->netto_gewicht_hoeveelheid;
    }

    /**
     * Get the [netto_gewicht_eenheid] column value.
     *
     * @return string
     */
    public function getNettoGewichtEenheid()
    {

        return $this->netto_gewicht_eenheid;
    }

    /**
     * Get the [indicatie_basiseenheid] column value.
     *
     * @return int
     */
    public function getIndicatieBasiseenheid()
    {

        return $this->indicatie_basiseenheid;
    }

    /**
     * Get the [indicatie_consumenteneenheid] column value.
     *
     * @return int
     */
    public function getIndicatieConsumenteneenheid()
    {

        return $this->indicatie_consumenteneenheid;
    }

    /**
     * Get the [indicatie_besteleenheid] column value.
     *
     * @return int
     */
    public function getIndicatieBesteleenheid()
    {

        return $this->indicatie_besteleenheid;
    }

    /**
     * Get the [indicatie_levereenheid] column value.
     *
     * @return int
     */
    public function getIndicatieLevereenheid()
    {

        return $this->indicatie_levereenheid;
    }

    /**
     * Get the [indicatie_factuureenheid] column value.
     *
     * @return int
     */
    public function getIndicatieFactuureenheid()
    {

        return $this->indicatie_factuureenheid;
    }

    /**
     * Get the [startdatum_beschikbaarheid_verpakking] column value.
     *
     * @return string
     */
    public function getStartdatumBeschikbaarheidVerpakking()
    {

        return $this->startdatum_beschikbaarheid_verpakking;
    }

    /**
     * Get the [einddatum_beschikbaarheid_verpakking] column value.
     *
     * @return string
     */
    public function getEinddatumBeschikbaarheidVerpakking()
    {

        return $this->einddatum_beschikbaarheid_verpakking;
    }

    /**
     * Get the [stopdatum_verpakking] column value.
     *
     * @return string
     */
    public function getStopdatumVerpakking()
    {

        return $this->stopdatum_verpakking;
    }

    /**
     * Get the [child_gtin] column value.
     *
     * @return string
     */
    public function getChildGtin()
    {

        return $this->child_gtin;
    }

    /**
     * Get the [child_gtin_hoeveelheid] column value.
     *
     * @return int
     */
    public function getChildGtinHoeveelheid()
    {

        return $this->child_gtin_hoeveelheid;
    }

    /**
     * Get the [product_type] column value.
     *
     * @return string
     */
    public function getProductType()
    {

        return $this->product_type;
    }

    /**
     * Get the [lijstprijs] column value.
     *
     * @return string
     */
    public function getLijstprijs()
    {

        return $this->lijstprijs;
    }

    /**
     * Get the [retailprijs] column value.
     *
     * @return string
     */
    public function getRetailprijs()
    {

        return $this->retailprijs;
    }

    /**
     * Get the [netto_inhoud_hoeveelheid] column value.
     *
     * @return string
     */
    public function getNettoInhoudHoeveelheid()
    {

        return $this->netto_inhoud_hoeveelheid;
    }

    /**
     * Get the [netto_inhoud_eenheid] column value.
     *
     * @return string
     */
    public function getNettoInhoudEenheid()
    {

        return $this->netto_inhoud_eenheid;
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
     * Get the [hoeveelheid_verpakking] column value.
     *
     * @return string
     */
    public function getHoeveelheidVerpakking()
    {

        return $this->hoeveelheid_verpakking;
    }

    /**
     * Get the [memocode_eenheid_verpakking] column value.
     *
     * @return string
     */
    public function getMemocodeEenheidVerpakking()
    {

        return $this->memocode_eenheid_verpakking;
    }

    /**
     * Get the [fabrikant_artikel_codering] column value.
     *
     * @return string
     */
    public function getFabrikantArtikelCodering()
    {

        return $this->fabrikant_artikel_codering;
    }

    /**
     * Get the [thesaurus_verwijzing_status] column value.
     *
     * @return int
     */
    public function getThesaurusVerwijzingStatus()
    {

        return $this->thesaurus_verwijzing_status;
    }

    /**
     * Get the [status] column value.
     *
     * @return int
     */
    public function getStatus()
    {

        return $this->status;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [gtin] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setGtin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gtin !== $v) {
            $this->gtin = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::GTIN;
        }


        return $this;
    } // setGtin()

    /**
     * Set the value of [gtin_van_de_data_leverancier] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setGtinVanDeDataLeverancier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gtin_van_de_data_leverancier !== $v) {
            $this->gtin_van_de_data_leverancier = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER;
        }


        return $this;
    } // setGtinVanDeDataLeverancier()

    /**
     * Set the value of [omschrijving_gtin] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setOmschrijvingGtin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->omschrijving_gtin !== $v) {
            $this->omschrijving_gtin = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::OMSCHRIJVING_GTIN;
        }


        return $this;
    } // setOmschrijvingGtin()

    /**
     * Set the value of [hoogte_hoeveelheid] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setHoogteHoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hoogte_hoeveelheid !== $v) {
            $this->hoogte_hoeveelheid = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::HOOGTE_HOEVEELHEID;
        }


        return $this;
    } // setHoogteHoeveelheid()

    /**
     * Set the value of [hoogte_eenheid] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setHoogteEenheid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->hoogte_eenheid !== $v) {
            $this->hoogte_eenheid = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::HOOGTE_EENHEID;
        }


        return $this;
    } // setHoogteEenheid()

    /**
     * Set the value of [breedte_hoeveelheid] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setBreedteHoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->breedte_hoeveelheid !== $v) {
            $this->breedte_hoeveelheid = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::BREEDTE_HOEVEELHEID;
        }


        return $this;
    } // setBreedteHoeveelheid()

    /**
     * Set the value of [breedte_eenheid] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setBreedteEenheid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->breedte_eenheid !== $v) {
            $this->breedte_eenheid = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::BREEDTE_EENHEID;
        }


        return $this;
    } // setBreedteEenheid()

    /**
     * Set the value of [diepte_hoeveelheid] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setDiepteHoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->diepte_hoeveelheid !== $v) {
            $this->diepte_hoeveelheid = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::DIEPTE_HOEVEELHEID;
        }


        return $this;
    } // setDiepteHoeveelheid()

    /**
     * Set the value of [diepte_eenheid] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setDiepteEenheid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->diepte_eenheid !== $v) {
            $this->diepte_eenheid = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::DIEPTE_EENHEID;
        }


        return $this;
    } // setDiepteEenheid()

    /**
     * Set the value of [bruto_gewicht_hoeveelheid] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setBrutoGewichtHoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bruto_gewicht_hoeveelheid !== $v) {
            $this->bruto_gewicht_hoeveelheid = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::BRUTO_GEWICHT_HOEVEELHEID;
        }


        return $this;
    } // setBrutoGewichtHoeveelheid()

    /**
     * Set the value of [bruto_gewicht_eenheid] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setBrutoGewichtEenheid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->bruto_gewicht_eenheid !== $v) {
            $this->bruto_gewicht_eenheid = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::BRUTO_GEWICHT_EENHEID;
        }


        return $this;
    } // setBrutoGewichtEenheid()

    /**
     * Set the value of [netto_gewicht_hoeveelheid] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setNettoGewichtHoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->netto_gewicht_hoeveelheid !== $v) {
            $this->netto_gewicht_hoeveelheid = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::NETTO_GEWICHT_HOEVEELHEID;
        }


        return $this;
    } // setNettoGewichtHoeveelheid()

    /**
     * Set the value of [netto_gewicht_eenheid] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setNettoGewichtEenheid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->netto_gewicht_eenheid !== $v) {
            $this->netto_gewicht_eenheid = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::NETTO_GEWICHT_EENHEID;
        }


        return $this;
    } // setNettoGewichtEenheid()

    /**
     * Set the value of [indicatie_basiseenheid] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setIndicatieBasiseenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->indicatie_basiseenheid !== $v) {
            $this->indicatie_basiseenheid = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::INDICATIE_BASISEENHEID;
        }


        return $this;
    } // setIndicatieBasiseenheid()

    /**
     * Set the value of [indicatie_consumenteneenheid] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setIndicatieConsumenteneenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->indicatie_consumenteneenheid !== $v) {
            $this->indicatie_consumenteneenheid = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::INDICATIE_CONSUMENTENEENHEID;
        }


        return $this;
    } // setIndicatieConsumenteneenheid()

    /**
     * Set the value of [indicatie_besteleenheid] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setIndicatieBesteleenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->indicatie_besteleenheid !== $v) {
            $this->indicatie_besteleenheid = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::INDICATIE_BESTELEENHEID;
        }


        return $this;
    } // setIndicatieBesteleenheid()

    /**
     * Set the value of [indicatie_levereenheid] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setIndicatieLevereenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->indicatie_levereenheid !== $v) {
            $this->indicatie_levereenheid = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::INDICATIE_LEVEREENHEID;
        }


        return $this;
    } // setIndicatieLevereenheid()

    /**
     * Set the value of [indicatie_factuureenheid] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setIndicatieFactuureenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->indicatie_factuureenheid !== $v) {
            $this->indicatie_factuureenheid = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::INDICATIE_FACTUUREENHEID;
        }


        return $this;
    } // setIndicatieFactuureenheid()

    /**
     * Set the value of [startdatum_beschikbaarheid_verpakking] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setStartdatumBeschikbaarheidVerpakking($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->startdatum_beschikbaarheid_verpakking !== $v) {
            $this->startdatum_beschikbaarheid_verpakking = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::STARTDATUM_BESCHIKBAARHEID_VERPAKKING;
        }


        return $this;
    } // setStartdatumBeschikbaarheidVerpakking()

    /**
     * Set the value of [einddatum_beschikbaarheid_verpakking] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setEinddatumBeschikbaarheidVerpakking($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->einddatum_beschikbaarheid_verpakking !== $v) {
            $this->einddatum_beschikbaarheid_verpakking = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::EINDDATUM_BESCHIKBAARHEID_VERPAKKING;
        }


        return $this;
    } // setEinddatumBeschikbaarheidVerpakking()

    /**
     * Set the value of [stopdatum_verpakking] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setStopdatumVerpakking($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->stopdatum_verpakking !== $v) {
            $this->stopdatum_verpakking = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::STOPDATUM_VERPAKKING;
        }


        return $this;
    } // setStopdatumVerpakking()

    /**
     * Set the value of [child_gtin] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setChildGtin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->child_gtin !== $v) {
            $this->child_gtin = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::CHILD_GTIN;
        }


        return $this;
    } // setChildGtin()

    /**
     * Set the value of [child_gtin_hoeveelheid] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setChildGtinHoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->child_gtin_hoeveelheid !== $v) {
            $this->child_gtin_hoeveelheid = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::CHILD_GTIN_HOEVEELHEID;
        }


        return $this;
    } // setChildGtinHoeveelheid()

    /**
     * Set the value of [product_type] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setProductType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->product_type !== $v) {
            $this->product_type = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::PRODUCT_TYPE;
        }


        return $this;
    } // setProductType()

    /**
     * Set the value of [lijstprijs] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setLijstprijs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lijstprijs !== $v) {
            $this->lijstprijs = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::LIJSTPRIJS;
        }


        return $this;
    } // setLijstprijs()

    /**
     * Set the value of [retailprijs] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setRetailprijs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->retailprijs !== $v) {
            $this->retailprijs = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::RETAILPRIJS;
        }


        return $this;
    } // setRetailprijs()

    /**
     * Set the value of [netto_inhoud_hoeveelheid] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setNettoInhoudHoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->netto_inhoud_hoeveelheid !== $v) {
            $this->netto_inhoud_hoeveelheid = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::NETTO_INHOUD_HOEVEELHEID;
        }


        return $this;
    } // setNettoInhoudHoeveelheid()

    /**
     * Set the value of [netto_inhoud_eenheid] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setNettoInhoudEenheid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->netto_inhoud_eenheid !== $v) {
            $this->netto_inhoud_eenheid = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::NETTO_INHOUD_EENHEID;
        }


        return $this;
    } // setNettoInhoudEenheid()

    /**
     * Set the value of [zindex_nummer] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setZindexNummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zindex_nummer !== $v) {
            $this->zindex_nummer = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::ZINDEX_NUMMER;
        }

        if ($this->aGsArtikelenRelatedByZindexNummer !== null && $this->aGsArtikelenRelatedByZindexNummer->getZinummer() !== $v) {
            $this->aGsArtikelenRelatedByZindexNummer = null;
        }


        return $this;
    } // setZindexNummer()

    /**
     * Set the value of [hoeveelheid_verpakking] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setHoeveelheidVerpakking($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hoeveelheid_verpakking !== $v) {
            $this->hoeveelheid_verpakking = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::HOEVEELHEID_VERPAKKING;
        }


        return $this;
    } // setHoeveelheidVerpakking()

    /**
     * Set the value of [memocode_eenheid_verpakking] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setMemocodeEenheidVerpakking($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->memocode_eenheid_verpakking !== $v) {
            $this->memocode_eenheid_verpakking = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::MEMOCODE_EENHEID_VERPAKKING;
        }


        return $this;
    } // setMemocodeEenheidVerpakking()

    /**
     * Set the value of [fabrikant_artikel_codering] column.
     *
     * @param  string $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setFabrikantArtikelCodering($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fabrikant_artikel_codering !== $v) {
            $this->fabrikant_artikel_codering = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::FABRIKANT_ARTIKEL_CODERING;
        }


        return $this;
    } // setFabrikantArtikelCodering()

    /**
     * Set the value of [thesaurus_verwijzing_status] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setThesaurusVerwijzingStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurus_verwijzing_status !== $v) {
            $this->thesaurus_verwijzing_status = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::THESAURUS_VERWIJZING_STATUS;
        }


        return $this;
    } // setThesaurusVerwijzingStatus()

    /**
     * Set the value of [status] column.
     *
     * @param  int $v new value
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[] = GsLogistiekeInformatiePeer::STATUS;
        }


        return $this;
    } // setStatus()

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
            $this->gtin = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->gtin_van_de_data_leverancier = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->omschrijving_gtin = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->hoogte_hoeveelheid = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->hoogte_eenheid = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->breedte_hoeveelheid = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->breedte_eenheid = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->diepte_hoeveelheid = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->diepte_eenheid = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->bruto_gewicht_hoeveelheid = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->bruto_gewicht_eenheid = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->netto_gewicht_hoeveelheid = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->netto_gewicht_eenheid = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->indicatie_basiseenheid = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->indicatie_consumenteneenheid = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->indicatie_besteleenheid = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->indicatie_levereenheid = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->indicatie_factuureenheid = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->startdatum_beschikbaarheid_verpakking = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->einddatum_beschikbaarheid_verpakking = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->stopdatum_verpakking = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->child_gtin = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->child_gtin_hoeveelheid = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->product_type = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->lijstprijs = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->retailprijs = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->netto_inhoud_hoeveelheid = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->netto_inhoud_eenheid = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->zindex_nummer = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->hoeveelheid_verpakking = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->memocode_eenheid_verpakking = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->fabrikant_artikel_codering = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->thesaurus_verwijzing_status = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->status = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 36; // 36 = GsLogistiekeInformatiePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsLogistiekeInformatie object", $e);
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

        if ($this->aGsArtikelenRelatedByZindexNummer !== null && $this->zindex_nummer !== $this->aGsArtikelenRelatedByZindexNummer->getZinummer()) {
            $this->aGsArtikelenRelatedByZindexNummer = null;
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
            $con = Propel::getConnection(GsLogistiekeInformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsLogistiekeInformatiePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGsArtikelenRelatedByZindexNummer = null;
            $this->singleGsArtikelenRelatedByZinummer = null;

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
            $con = Propel::getConnection(GsLogistiekeInformatiePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsLogistiekeInformatieQuery::create()
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
            $con = Propel::getConnection(GsLogistiekeInformatiePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsLogistiekeInformatiePeer::addInstanceToPool($this);
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

            if ($this->aGsArtikelenRelatedByZindexNummer !== null) {
                if ($this->aGsArtikelenRelatedByZindexNummer->isModified() || $this->aGsArtikelenRelatedByZindexNummer->isNew()) {
                    $affectedRows += $this->aGsArtikelenRelatedByZindexNummer->save($con);
                }
                $this->setGsArtikelenRelatedByZindexNummer($this->aGsArtikelenRelatedByZindexNummer);
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

            if ($this->singleGsArtikelenRelatedByZinummer !== null) {
                if (!$this->singleGsArtikelenRelatedByZinummer->isDeleted() && ($this->singleGsArtikelenRelatedByZinummer->isNew() || $this->singleGsArtikelenRelatedByZinummer->isModified())) {
                        $affectedRows += $this->singleGsArtikelenRelatedByZinummer->save($con);
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
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::GTIN)) {
            $modifiedColumns[':p' . $index++]  = '`gtin`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER)) {
            $modifiedColumns[':p' . $index++]  = '`gtin_van_de_data_leverancier`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::OMSCHRIJVING_GTIN)) {
            $modifiedColumns[':p' . $index++]  = '`omschrijving_gtin`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::HOOGTE_HOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`hoogte_hoeveelheid`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::HOOGTE_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`hoogte_eenheid`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::BREEDTE_HOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`breedte_hoeveelheid`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::BREEDTE_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`breedte_eenheid`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::DIEPTE_HOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`diepte_hoeveelheid`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::DIEPTE_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`diepte_eenheid`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::BRUTO_GEWICHT_HOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`bruto_gewicht_hoeveelheid`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::BRUTO_GEWICHT_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`bruto_gewicht_eenheid`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::NETTO_GEWICHT_HOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`netto_gewicht_hoeveelheid`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::NETTO_GEWICHT_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`netto_gewicht_eenheid`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::INDICATIE_BASISEENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`indicatie_basiseenheid`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::INDICATIE_CONSUMENTENEENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`indicatie_consumenteneenheid`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::INDICATIE_BESTELEENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`indicatie_besteleenheid`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::INDICATIE_LEVEREENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`indicatie_levereenheid`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::INDICATIE_FACTUUREENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`indicatie_factuureenheid`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::STARTDATUM_BESCHIKBAARHEID_VERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`startdatum_beschikbaarheid_verpakking`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::EINDDATUM_BESCHIKBAARHEID_VERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`einddatum_beschikbaarheid_verpakking`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::STOPDATUM_VERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`stopdatum_verpakking`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::CHILD_GTIN)) {
            $modifiedColumns[':p' . $index++]  = '`child_gtin`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::CHILD_GTIN_HOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`child_gtin_hoeveelheid`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::PRODUCT_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`product_type`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::LIJSTPRIJS)) {
            $modifiedColumns[':p' . $index++]  = '`lijstprijs`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::RETAILPRIJS)) {
            $modifiedColumns[':p' . $index++]  = '`retailprijs`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::NETTO_INHOUD_HOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`netto_inhoud_hoeveelheid`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::NETTO_INHOUD_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`netto_inhoud_eenheid`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::ZINDEX_NUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`zindex_nummer`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::HOEVEELHEID_VERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`hoeveelheid_verpakking`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::MEMOCODE_EENHEID_VERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`memocode_eenheid_verpakking`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::FABRIKANT_ARTIKEL_CODERING)) {
            $modifiedColumns[':p' . $index++]  = '`fabrikant_artikel_codering`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::THESAURUS_VERWIJZING_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurus_verwijzing_status`';
        }
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`status`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_logistieke_informatie` (%s) VALUES (%s)',
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
                    case '`gtin`':
                        $stmt->bindValue($identifier, $this->gtin, PDO::PARAM_STR);
                        break;
                    case '`gtin_van_de_data_leverancier`':
                        $stmt->bindValue($identifier, $this->gtin_van_de_data_leverancier, PDO::PARAM_STR);
                        break;
                    case '`omschrijving_gtin`':
                        $stmt->bindValue($identifier, $this->omschrijving_gtin, PDO::PARAM_STR);
                        break;
                    case '`hoogte_hoeveelheid`':
                        $stmt->bindValue($identifier, $this->hoogte_hoeveelheid, PDO::PARAM_STR);
                        break;
                    case '`hoogte_eenheid`':
                        $stmt->bindValue($identifier, $this->hoogte_eenheid, PDO::PARAM_STR);
                        break;
                    case '`breedte_hoeveelheid`':
                        $stmt->bindValue($identifier, $this->breedte_hoeveelheid, PDO::PARAM_STR);
                        break;
                    case '`breedte_eenheid`':
                        $stmt->bindValue($identifier, $this->breedte_eenheid, PDO::PARAM_STR);
                        break;
                    case '`diepte_hoeveelheid`':
                        $stmt->bindValue($identifier, $this->diepte_hoeveelheid, PDO::PARAM_STR);
                        break;
                    case '`diepte_eenheid`':
                        $stmt->bindValue($identifier, $this->diepte_eenheid, PDO::PARAM_STR);
                        break;
                    case '`bruto_gewicht_hoeveelheid`':
                        $stmt->bindValue($identifier, $this->bruto_gewicht_hoeveelheid, PDO::PARAM_STR);
                        break;
                    case '`bruto_gewicht_eenheid`':
                        $stmt->bindValue($identifier, $this->bruto_gewicht_eenheid, PDO::PARAM_STR);
                        break;
                    case '`netto_gewicht_hoeveelheid`':
                        $stmt->bindValue($identifier, $this->netto_gewicht_hoeveelheid, PDO::PARAM_STR);
                        break;
                    case '`netto_gewicht_eenheid`':
                        $stmt->bindValue($identifier, $this->netto_gewicht_eenheid, PDO::PARAM_STR);
                        break;
                    case '`indicatie_basiseenheid`':
                        $stmt->bindValue($identifier, $this->indicatie_basiseenheid, PDO::PARAM_INT);
                        break;
                    case '`indicatie_consumenteneenheid`':
                        $stmt->bindValue($identifier, $this->indicatie_consumenteneenheid, PDO::PARAM_INT);
                        break;
                    case '`indicatie_besteleenheid`':
                        $stmt->bindValue($identifier, $this->indicatie_besteleenheid, PDO::PARAM_INT);
                        break;
                    case '`indicatie_levereenheid`':
                        $stmt->bindValue($identifier, $this->indicatie_levereenheid, PDO::PARAM_INT);
                        break;
                    case '`indicatie_factuureenheid`':
                        $stmt->bindValue($identifier, $this->indicatie_factuureenheid, PDO::PARAM_INT);
                        break;
                    case '`startdatum_beschikbaarheid_verpakking`':
                        $stmt->bindValue($identifier, $this->startdatum_beschikbaarheid_verpakking, PDO::PARAM_STR);
                        break;
                    case '`einddatum_beschikbaarheid_verpakking`':
                        $stmt->bindValue($identifier, $this->einddatum_beschikbaarheid_verpakking, PDO::PARAM_STR);
                        break;
                    case '`stopdatum_verpakking`':
                        $stmt->bindValue($identifier, $this->stopdatum_verpakking, PDO::PARAM_STR);
                        break;
                    case '`child_gtin`':
                        $stmt->bindValue($identifier, $this->child_gtin, PDO::PARAM_STR);
                        break;
                    case '`child_gtin_hoeveelheid`':
                        $stmt->bindValue($identifier, $this->child_gtin_hoeveelheid, PDO::PARAM_INT);
                        break;
                    case '`product_type`':
                        $stmt->bindValue($identifier, $this->product_type, PDO::PARAM_STR);
                        break;
                    case '`lijstprijs`':
                        $stmt->bindValue($identifier, $this->lijstprijs, PDO::PARAM_STR);
                        break;
                    case '`retailprijs`':
                        $stmt->bindValue($identifier, $this->retailprijs, PDO::PARAM_STR);
                        break;
                    case '`netto_inhoud_hoeveelheid`':
                        $stmt->bindValue($identifier, $this->netto_inhoud_hoeveelheid, PDO::PARAM_STR);
                        break;
                    case '`netto_inhoud_eenheid`':
                        $stmt->bindValue($identifier, $this->netto_inhoud_eenheid, PDO::PARAM_STR);
                        break;
                    case '`zindex_nummer`':
                        $stmt->bindValue($identifier, $this->zindex_nummer, PDO::PARAM_INT);
                        break;
                    case '`hoeveelheid_verpakking`':
                        $stmt->bindValue($identifier, $this->hoeveelheid_verpakking, PDO::PARAM_STR);
                        break;
                    case '`memocode_eenheid_verpakking`':
                        $stmt->bindValue($identifier, $this->memocode_eenheid_verpakking, PDO::PARAM_STR);
                        break;
                    case '`fabrikant_artikel_codering`':
                        $stmt->bindValue($identifier, $this->fabrikant_artikel_codering, PDO::PARAM_STR);
                        break;
                    case '`thesaurus_verwijzing_status`':
                        $stmt->bindValue($identifier, $this->thesaurus_verwijzing_status, PDO::PARAM_INT);
                        break;
                    case '`status`':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_INT);
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

            if ($this->aGsArtikelenRelatedByZindexNummer !== null) {
                if (!$this->aGsArtikelenRelatedByZindexNummer->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsArtikelenRelatedByZindexNummer->getValidationFailures());
                }
            }


            if (($retval = GsLogistiekeInformatiePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->singleGsArtikelenRelatedByZinummer !== null) {
                    if (!$this->singleGsArtikelenRelatedByZinummer->validate($columns)) {
                        $failureMap = array_merge($failureMap, $this->singleGsArtikelenRelatedByZinummer->getValidationFailures());
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
        $pos = GsLogistiekeInformatiePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getGtin();
                break;
            case 3:
                return $this->getGtinVanDeDataLeverancier();
                break;
            case 4:
                return $this->getOmschrijvingGtin();
                break;
            case 5:
                return $this->getHoogteHoeveelheid();
                break;
            case 6:
                return $this->getHoogteEenheid();
                break;
            case 7:
                return $this->getBreedteHoeveelheid();
                break;
            case 8:
                return $this->getBreedteEenheid();
                break;
            case 9:
                return $this->getDiepteHoeveelheid();
                break;
            case 10:
                return $this->getDiepteEenheid();
                break;
            case 11:
                return $this->getBrutoGewichtHoeveelheid();
                break;
            case 12:
                return $this->getBrutoGewichtEenheid();
                break;
            case 13:
                return $this->getNettoGewichtHoeveelheid();
                break;
            case 14:
                return $this->getNettoGewichtEenheid();
                break;
            case 15:
                return $this->getIndicatieBasiseenheid();
                break;
            case 16:
                return $this->getIndicatieConsumenteneenheid();
                break;
            case 17:
                return $this->getIndicatieBesteleenheid();
                break;
            case 18:
                return $this->getIndicatieLevereenheid();
                break;
            case 19:
                return $this->getIndicatieFactuureenheid();
                break;
            case 20:
                return $this->getStartdatumBeschikbaarheidVerpakking();
                break;
            case 21:
                return $this->getEinddatumBeschikbaarheidVerpakking();
                break;
            case 22:
                return $this->getStopdatumVerpakking();
                break;
            case 23:
                return $this->getChildGtin();
                break;
            case 24:
                return $this->getChildGtinHoeveelheid();
                break;
            case 25:
                return $this->getProductType();
                break;
            case 26:
                return $this->getLijstprijs();
                break;
            case 27:
                return $this->getRetailprijs();
                break;
            case 28:
                return $this->getNettoInhoudHoeveelheid();
                break;
            case 29:
                return $this->getNettoInhoudEenheid();
                break;
            case 30:
                return $this->getZindexNummer();
                break;
            case 31:
                return $this->getHoeveelheidVerpakking();
                break;
            case 32:
                return $this->getMemocodeEenheidVerpakking();
                break;
            case 33:
                return $this->getFabrikantArtikelCodering();
                break;
            case 34:
                return $this->getThesaurusVerwijzingStatus();
                break;
            case 35:
                return $this->getStatus();
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
        if (isset($alreadyDumpedObjects['GsLogistiekeInformatie'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsLogistiekeInformatie'][serialize($this->getPrimaryKey())] = true;
        $keys = GsLogistiekeInformatiePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getGtin(),
            $keys[3] => $this->getGtinVanDeDataLeverancier(),
            $keys[4] => $this->getOmschrijvingGtin(),
            $keys[5] => $this->getHoogteHoeveelheid(),
            $keys[6] => $this->getHoogteEenheid(),
            $keys[7] => $this->getBreedteHoeveelheid(),
            $keys[8] => $this->getBreedteEenheid(),
            $keys[9] => $this->getDiepteHoeveelheid(),
            $keys[10] => $this->getDiepteEenheid(),
            $keys[11] => $this->getBrutoGewichtHoeveelheid(),
            $keys[12] => $this->getBrutoGewichtEenheid(),
            $keys[13] => $this->getNettoGewichtHoeveelheid(),
            $keys[14] => $this->getNettoGewichtEenheid(),
            $keys[15] => $this->getIndicatieBasiseenheid(),
            $keys[16] => $this->getIndicatieConsumenteneenheid(),
            $keys[17] => $this->getIndicatieBesteleenheid(),
            $keys[18] => $this->getIndicatieLevereenheid(),
            $keys[19] => $this->getIndicatieFactuureenheid(),
            $keys[20] => $this->getStartdatumBeschikbaarheidVerpakking(),
            $keys[21] => $this->getEinddatumBeschikbaarheidVerpakking(),
            $keys[22] => $this->getStopdatumVerpakking(),
            $keys[23] => $this->getChildGtin(),
            $keys[24] => $this->getChildGtinHoeveelheid(),
            $keys[25] => $this->getProductType(),
            $keys[26] => $this->getLijstprijs(),
            $keys[27] => $this->getRetailprijs(),
            $keys[28] => $this->getNettoInhoudHoeveelheid(),
            $keys[29] => $this->getNettoInhoudEenheid(),
            $keys[30] => $this->getZindexNummer(),
            $keys[31] => $this->getHoeveelheidVerpakking(),
            $keys[32] => $this->getMemocodeEenheidVerpakking(),
            $keys[33] => $this->getFabrikantArtikelCodering(),
            $keys[34] => $this->getThesaurusVerwijzingStatus(),
            $keys[35] => $this->getStatus(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aGsArtikelenRelatedByZindexNummer) {
                $result['GsArtikelenRelatedByZindexNummer'] = $this->aGsArtikelenRelatedByZindexNummer->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->singleGsArtikelenRelatedByZinummer) {
                $result['GsArtikelenRelatedByZinummer'] = $this->singleGsArtikelenRelatedByZinummer->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
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
        $pos = GsLogistiekeInformatiePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setGtin($value);
                break;
            case 3:
                $this->setGtinVanDeDataLeverancier($value);
                break;
            case 4:
                $this->setOmschrijvingGtin($value);
                break;
            case 5:
                $this->setHoogteHoeveelheid($value);
                break;
            case 6:
                $this->setHoogteEenheid($value);
                break;
            case 7:
                $this->setBreedteHoeveelheid($value);
                break;
            case 8:
                $this->setBreedteEenheid($value);
                break;
            case 9:
                $this->setDiepteHoeveelheid($value);
                break;
            case 10:
                $this->setDiepteEenheid($value);
                break;
            case 11:
                $this->setBrutoGewichtHoeveelheid($value);
                break;
            case 12:
                $this->setBrutoGewichtEenheid($value);
                break;
            case 13:
                $this->setNettoGewichtHoeveelheid($value);
                break;
            case 14:
                $this->setNettoGewichtEenheid($value);
                break;
            case 15:
                $this->setIndicatieBasiseenheid($value);
                break;
            case 16:
                $this->setIndicatieConsumenteneenheid($value);
                break;
            case 17:
                $this->setIndicatieBesteleenheid($value);
                break;
            case 18:
                $this->setIndicatieLevereenheid($value);
                break;
            case 19:
                $this->setIndicatieFactuureenheid($value);
                break;
            case 20:
                $this->setStartdatumBeschikbaarheidVerpakking($value);
                break;
            case 21:
                $this->setEinddatumBeschikbaarheidVerpakking($value);
                break;
            case 22:
                $this->setStopdatumVerpakking($value);
                break;
            case 23:
                $this->setChildGtin($value);
                break;
            case 24:
                $this->setChildGtinHoeveelheid($value);
                break;
            case 25:
                $this->setProductType($value);
                break;
            case 26:
                $this->setLijstprijs($value);
                break;
            case 27:
                $this->setRetailprijs($value);
                break;
            case 28:
                $this->setNettoInhoudHoeveelheid($value);
                break;
            case 29:
                $this->setNettoInhoudEenheid($value);
                break;
            case 30:
                $this->setZindexNummer($value);
                break;
            case 31:
                $this->setHoeveelheidVerpakking($value);
                break;
            case 32:
                $this->setMemocodeEenheidVerpakking($value);
                break;
            case 33:
                $this->setFabrikantArtikelCodering($value);
                break;
            case 34:
                $this->setThesaurusVerwijzingStatus($value);
                break;
            case 35:
                $this->setStatus($value);
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
        $keys = GsLogistiekeInformatiePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setGtin($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setGtinVanDeDataLeverancier($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOmschrijvingGtin($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setHoogteHoeveelheid($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setHoogteEenheid($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setBreedteHoeveelheid($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setBreedteEenheid($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDiepteHoeveelheid($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDiepteEenheid($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setBrutoGewichtHoeveelheid($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setBrutoGewichtEenheid($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setNettoGewichtHoeveelheid($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNettoGewichtEenheid($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setIndicatieBasiseenheid($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setIndicatieConsumenteneenheid($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setIndicatieBesteleenheid($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setIndicatieLevereenheid($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setIndicatieFactuureenheid($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setStartdatumBeschikbaarheidVerpakking($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setEinddatumBeschikbaarheidVerpakking($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setStopdatumVerpakking($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setChildGtin($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setChildGtinHoeveelheid($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setProductType($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setLijstprijs($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setRetailprijs($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setNettoInhoudHoeveelheid($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setNettoInhoudEenheid($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setZindexNummer($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setHoeveelheidVerpakking($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setMemocodeEenheidVerpakking($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setFabrikantArtikelCodering($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setThesaurusVerwijzingStatus($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setStatus($arr[$keys[35]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsLogistiekeInformatiePeer::DATABASE_NAME);

        if ($this->isColumnModified(GsLogistiekeInformatiePeer::BESTANDNUMMER)) $criteria->add(GsLogistiekeInformatiePeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::MUTATIEKODE)) $criteria->add(GsLogistiekeInformatiePeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::GTIN)) $criteria->add(GsLogistiekeInformatiePeer::GTIN, $this->gtin);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER)) $criteria->add(GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER, $this->gtin_van_de_data_leverancier);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::OMSCHRIJVING_GTIN)) $criteria->add(GsLogistiekeInformatiePeer::OMSCHRIJVING_GTIN, $this->omschrijving_gtin);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::HOOGTE_HOEVEELHEID)) $criteria->add(GsLogistiekeInformatiePeer::HOOGTE_HOEVEELHEID, $this->hoogte_hoeveelheid);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::HOOGTE_EENHEID)) $criteria->add(GsLogistiekeInformatiePeer::HOOGTE_EENHEID, $this->hoogte_eenheid);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::BREEDTE_HOEVEELHEID)) $criteria->add(GsLogistiekeInformatiePeer::BREEDTE_HOEVEELHEID, $this->breedte_hoeveelheid);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::BREEDTE_EENHEID)) $criteria->add(GsLogistiekeInformatiePeer::BREEDTE_EENHEID, $this->breedte_eenheid);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::DIEPTE_HOEVEELHEID)) $criteria->add(GsLogistiekeInformatiePeer::DIEPTE_HOEVEELHEID, $this->diepte_hoeveelheid);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::DIEPTE_EENHEID)) $criteria->add(GsLogistiekeInformatiePeer::DIEPTE_EENHEID, $this->diepte_eenheid);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::BRUTO_GEWICHT_HOEVEELHEID)) $criteria->add(GsLogistiekeInformatiePeer::BRUTO_GEWICHT_HOEVEELHEID, $this->bruto_gewicht_hoeveelheid);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::BRUTO_GEWICHT_EENHEID)) $criteria->add(GsLogistiekeInformatiePeer::BRUTO_GEWICHT_EENHEID, $this->bruto_gewicht_eenheid);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::NETTO_GEWICHT_HOEVEELHEID)) $criteria->add(GsLogistiekeInformatiePeer::NETTO_GEWICHT_HOEVEELHEID, $this->netto_gewicht_hoeveelheid);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::NETTO_GEWICHT_EENHEID)) $criteria->add(GsLogistiekeInformatiePeer::NETTO_GEWICHT_EENHEID, $this->netto_gewicht_eenheid);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::INDICATIE_BASISEENHEID)) $criteria->add(GsLogistiekeInformatiePeer::INDICATIE_BASISEENHEID, $this->indicatie_basiseenheid);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::INDICATIE_CONSUMENTENEENHEID)) $criteria->add(GsLogistiekeInformatiePeer::INDICATIE_CONSUMENTENEENHEID, $this->indicatie_consumenteneenheid);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::INDICATIE_BESTELEENHEID)) $criteria->add(GsLogistiekeInformatiePeer::INDICATIE_BESTELEENHEID, $this->indicatie_besteleenheid);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::INDICATIE_LEVEREENHEID)) $criteria->add(GsLogistiekeInformatiePeer::INDICATIE_LEVEREENHEID, $this->indicatie_levereenheid);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::INDICATIE_FACTUUREENHEID)) $criteria->add(GsLogistiekeInformatiePeer::INDICATIE_FACTUUREENHEID, $this->indicatie_factuureenheid);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::STARTDATUM_BESCHIKBAARHEID_VERPAKKING)) $criteria->add(GsLogistiekeInformatiePeer::STARTDATUM_BESCHIKBAARHEID_VERPAKKING, $this->startdatum_beschikbaarheid_verpakking);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::EINDDATUM_BESCHIKBAARHEID_VERPAKKING)) $criteria->add(GsLogistiekeInformatiePeer::EINDDATUM_BESCHIKBAARHEID_VERPAKKING, $this->einddatum_beschikbaarheid_verpakking);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::STOPDATUM_VERPAKKING)) $criteria->add(GsLogistiekeInformatiePeer::STOPDATUM_VERPAKKING, $this->stopdatum_verpakking);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::CHILD_GTIN)) $criteria->add(GsLogistiekeInformatiePeer::CHILD_GTIN, $this->child_gtin);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::CHILD_GTIN_HOEVEELHEID)) $criteria->add(GsLogistiekeInformatiePeer::CHILD_GTIN_HOEVEELHEID, $this->child_gtin_hoeveelheid);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::PRODUCT_TYPE)) $criteria->add(GsLogistiekeInformatiePeer::PRODUCT_TYPE, $this->product_type);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::LIJSTPRIJS)) $criteria->add(GsLogistiekeInformatiePeer::LIJSTPRIJS, $this->lijstprijs);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::RETAILPRIJS)) $criteria->add(GsLogistiekeInformatiePeer::RETAILPRIJS, $this->retailprijs);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::NETTO_INHOUD_HOEVEELHEID)) $criteria->add(GsLogistiekeInformatiePeer::NETTO_INHOUD_HOEVEELHEID, $this->netto_inhoud_hoeveelheid);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::NETTO_INHOUD_EENHEID)) $criteria->add(GsLogistiekeInformatiePeer::NETTO_INHOUD_EENHEID, $this->netto_inhoud_eenheid);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::ZINDEX_NUMMER)) $criteria->add(GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $this->zindex_nummer);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::HOEVEELHEID_VERPAKKING)) $criteria->add(GsLogistiekeInformatiePeer::HOEVEELHEID_VERPAKKING, $this->hoeveelheid_verpakking);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::MEMOCODE_EENHEID_VERPAKKING)) $criteria->add(GsLogistiekeInformatiePeer::MEMOCODE_EENHEID_VERPAKKING, $this->memocode_eenheid_verpakking);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::FABRIKANT_ARTIKEL_CODERING)) $criteria->add(GsLogistiekeInformatiePeer::FABRIKANT_ARTIKEL_CODERING, $this->fabrikant_artikel_codering);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::THESAURUS_VERWIJZING_STATUS)) $criteria->add(GsLogistiekeInformatiePeer::THESAURUS_VERWIJZING_STATUS, $this->thesaurus_verwijzing_status);
        if ($this->isColumnModified(GsLogistiekeInformatiePeer::STATUS)) $criteria->add(GsLogistiekeInformatiePeer::STATUS, $this->status);

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
        $criteria = new Criteria(GsLogistiekeInformatiePeer::DATABASE_NAME);
        $criteria->add(GsLogistiekeInformatiePeer::GTIN, $this->gtin);
        $criteria->add(GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER, $this->gtin_van_de_data_leverancier);
        $criteria->add(GsLogistiekeInformatiePeer::CHILD_GTIN, $this->child_gtin);

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
        $pks[0] = $this->getGtin();
        $pks[1] = $this->getGtinVanDeDataLeverancier();
        $pks[2] = $this->getChildGtin();

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
        $this->setGtin($keys[0]);
        $this->setGtinVanDeDataLeverancier($keys[1]);
        $this->setChildGtin($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getGtin()) && (null === $this->getGtinVanDeDataLeverancier()) && (null === $this->getChildGtin());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsLogistiekeInformatie (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setGtin($this->getGtin());
        $copyObj->setGtinVanDeDataLeverancier($this->getGtinVanDeDataLeverancier());
        $copyObj->setOmschrijvingGtin($this->getOmschrijvingGtin());
        $copyObj->setHoogteHoeveelheid($this->getHoogteHoeveelheid());
        $copyObj->setHoogteEenheid($this->getHoogteEenheid());
        $copyObj->setBreedteHoeveelheid($this->getBreedteHoeveelheid());
        $copyObj->setBreedteEenheid($this->getBreedteEenheid());
        $copyObj->setDiepteHoeveelheid($this->getDiepteHoeveelheid());
        $copyObj->setDiepteEenheid($this->getDiepteEenheid());
        $copyObj->setBrutoGewichtHoeveelheid($this->getBrutoGewichtHoeveelheid());
        $copyObj->setBrutoGewichtEenheid($this->getBrutoGewichtEenheid());
        $copyObj->setNettoGewichtHoeveelheid($this->getNettoGewichtHoeveelheid());
        $copyObj->setNettoGewichtEenheid($this->getNettoGewichtEenheid());
        $copyObj->setIndicatieBasiseenheid($this->getIndicatieBasiseenheid());
        $copyObj->setIndicatieConsumenteneenheid($this->getIndicatieConsumenteneenheid());
        $copyObj->setIndicatieBesteleenheid($this->getIndicatieBesteleenheid());
        $copyObj->setIndicatieLevereenheid($this->getIndicatieLevereenheid());
        $copyObj->setIndicatieFactuureenheid($this->getIndicatieFactuureenheid());
        $copyObj->setStartdatumBeschikbaarheidVerpakking($this->getStartdatumBeschikbaarheidVerpakking());
        $copyObj->setEinddatumBeschikbaarheidVerpakking($this->getEinddatumBeschikbaarheidVerpakking());
        $copyObj->setStopdatumVerpakking($this->getStopdatumVerpakking());
        $copyObj->setChildGtin($this->getChildGtin());
        $copyObj->setChildGtinHoeveelheid($this->getChildGtinHoeveelheid());
        $copyObj->setProductType($this->getProductType());
        $copyObj->setLijstprijs($this->getLijstprijs());
        $copyObj->setRetailprijs($this->getRetailprijs());
        $copyObj->setNettoInhoudHoeveelheid($this->getNettoInhoudHoeveelheid());
        $copyObj->setNettoInhoudEenheid($this->getNettoInhoudEenheid());
        $copyObj->setZindexNummer($this->getZindexNummer());
        $copyObj->setHoeveelheidVerpakking($this->getHoeveelheidVerpakking());
        $copyObj->setMemocodeEenheidVerpakking($this->getMemocodeEenheidVerpakking());
        $copyObj->setFabrikantArtikelCodering($this->getFabrikantArtikelCodering());
        $copyObj->setThesaurusVerwijzingStatus($this->getThesaurusVerwijzingStatus());
        $copyObj->setStatus($this->getStatus());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            $relObj = $this->getGsArtikelenRelatedByZinummer();
            if ($relObj) {
                $copyObj->setGsArtikelenRelatedByZinummer($relObj->copy($deepCopy));
            }

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
     * @return GsLogistiekeInformatie Clone of current object.
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
     * @return GsLogistiekeInformatiePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsLogistiekeInformatiePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsArtikelen object.
     *
     * @param                  GsArtikelen $v
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsArtikelenRelatedByZindexNummer(GsArtikelen $v = null)
    {
        if ($v === null) {
            $this->setZindexNummer(NULL);
        } else {
            $this->setZindexNummer($v->getZinummer());
        }

        $this->aGsArtikelenRelatedByZindexNummer = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsArtikelen object, it will not be re-added.
        if ($v !== null) {
            $v->addGsLogistiekeInformatieRelatedByZindexNummer($this);
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
    public function getGsArtikelenRelatedByZindexNummer(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsArtikelenRelatedByZindexNummer === null && ($this->zindex_nummer !== null) && $doQuery) {
            $this->aGsArtikelenRelatedByZindexNummer = GsArtikelenQuery::create()->findPk($this->zindex_nummer, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsArtikelenRelatedByZindexNummer->addGsLogistiekeInformatiesRelatedByZindexNummer($this);
             */
        }

        return $this->aGsArtikelenRelatedByZindexNummer;
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
     * Gets a single GsArtikelen object, which is related to this object by a one-to-one relationship.
     *
     * @param PropelPDO $con optional connection object
     * @return GsArtikelen
     * @throws PropelException
     */
    public function getGsArtikelenRelatedByZinummer(PropelPDO $con = null)
    {

        if ($this->singleGsArtikelenRelatedByZinummer === null && !$this->isNew()) {
            $this->singleGsArtikelenRelatedByZinummer = GsArtikelenQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleGsArtikelenRelatedByZinummer;
    }

    /**
     * Sets a single GsArtikelen object as related to this object by a one-to-one relationship.
     *
     * @param                  GsArtikelen $v GsArtikelen
     * @return GsLogistiekeInformatie The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsArtikelenRelatedByZinummer(GsArtikelen $v = null)
    {
        $this->singleGsArtikelenRelatedByZinummer = $v;

        // Make sure that that the passed-in GsArtikelen isn't already associated with this object
        if ($v !== null && $v->getLogistiekeInformatie(null, false) === null) {
            $v->setLogistiekeInformatie($this);
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
        $this->gtin = null;
        $this->gtin_van_de_data_leverancier = null;
        $this->omschrijving_gtin = null;
        $this->hoogte_hoeveelheid = null;
        $this->hoogte_eenheid = null;
        $this->breedte_hoeveelheid = null;
        $this->breedte_eenheid = null;
        $this->diepte_hoeveelheid = null;
        $this->diepte_eenheid = null;
        $this->bruto_gewicht_hoeveelheid = null;
        $this->bruto_gewicht_eenheid = null;
        $this->netto_gewicht_hoeveelheid = null;
        $this->netto_gewicht_eenheid = null;
        $this->indicatie_basiseenheid = null;
        $this->indicatie_consumenteneenheid = null;
        $this->indicatie_besteleenheid = null;
        $this->indicatie_levereenheid = null;
        $this->indicatie_factuureenheid = null;
        $this->startdatum_beschikbaarheid_verpakking = null;
        $this->einddatum_beschikbaarheid_verpakking = null;
        $this->stopdatum_verpakking = null;
        $this->child_gtin = null;
        $this->child_gtin_hoeveelheid = null;
        $this->product_type = null;
        $this->lijstprijs = null;
        $this->retailprijs = null;
        $this->netto_inhoud_hoeveelheid = null;
        $this->netto_inhoud_eenheid = null;
        $this->zindex_nummer = null;
        $this->hoeveelheid_verpakking = null;
        $this->memocode_eenheid_verpakking = null;
        $this->fabrikant_artikel_codering = null;
        $this->thesaurus_verwijzing_status = null;
        $this->status = null;
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
            if ($this->singleGsArtikelenRelatedByZinummer) {
                $this->singleGsArtikelenRelatedByZinummer->clearAllReferences($deep);
            }
            if ($this->aGsArtikelenRelatedByZindexNummer instanceof Persistent) {
              $this->aGsArtikelenRelatedByZindexNummer->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->singleGsArtikelenRelatedByZinummer instanceof PropelCollection) {
            $this->singleGsArtikelenRelatedByZinummer->clearIterator();
        }
        $this->singleGsArtikelenRelatedByZinummer = null;
        $this->aGsArtikelenRelatedByZindexNummer = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsLogistiekeInformatiePeer::DEFAULT_STRING_FORMAT);
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
