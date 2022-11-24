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
use PharmaIntelligence\GstandaardBundle\Model\GsNamen;
use PharmaIntelligence\GstandaardBundle\Model\GsNamenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProduct;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProductPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProductQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery;

abstract class BaseGsPrescriptieProduct extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPrescriptieProductPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsPrescriptieProductPeer
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
     * The value for the naamnummer_prescriptie_product field.
     * @var        int
     */
    protected $naamnummer_prescriptie_product;

    /**
     * The value for the generiekeproductcode field.
     * @var        int
     */
    protected $generiekeproductcode;

    /**
     * The value for the thesnr_reden_voorschrijven_hpk_niveau field.
     * @var        int
     */
    protected $thesnr_reden_voorschrijven_hpk_niveau;

    /**
     * The value for the reden_voorschrijven_hpk_niveau field.
     * @var        int
     */
    protected $reden_voorschrijven_hpk_niveau;

    /**
     * The value for the thesnr_emballagetype field.
     * @var        int
     */
    protected $thesnr_emballagetype;

    /**
     * The value for the emballagetype field.
     * @var        int
     */
    protected $emballagetype;

    /**
     * The value for the thesnr_basiseenheid_product field.
     * @var        int
     */
    protected $thesnr_basiseenheid_product;

    /**
     * The value for the basiseenheid_product field.
     * @var        int
     */
    protected $basiseenheid_product;

    /**
     * The value for the productgrootte_algemeen field.
     * @var        string
     */
    protected $productgrootte_algemeen;

    /**
     * The value for the thesnr_hulpmiddel_aard field.
     * @var        int
     */
    protected $thesnr_hulpmiddel_aard;

    /**
     * The value for the hulpmiddel_aard field.
     * @var        int
     */
    protected $hulpmiddel_aard;

    /**
     * The value for the hulpmiddel_aard_hoeveelheid field.
     * @var        int
     */
    protected $hulpmiddel_aard_hoeveelheid;

    /**
     * The value for the meervoudig_product_jn field.
     * @var        string
     */
    protected $meervoudig_product_jn;

    /**
     * The value for the thesnr_reden_hulpstof_identificerend field.
     * @var        int
     */
    protected $thesnr_reden_hulpstof_identificerend;

    /**
     * The value for the reden_hulpstof_identificerend field.
     * @var        int
     */
    protected $reden_hulpstof_identificerend;

    /**
     * The value for the thesnr_verwijzing_extra_kenmerk field.
     * @var        int
     */
    protected $thesnr_verwijzing_extra_kenmerk;

    /**
     * The value for the verwijzing_extra_kenmerk field.
     * @var        int
     */
    protected $verwijzing_extra_kenmerk;

    /**
     * @var        GsGeneriekeProducten
     */
    protected $aGsGeneriekeProducten;

    /**
     * @var        GsNamen
     */
    protected $aGsNamen;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aRedenVoorschrijvenHpkNiveauOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aEmballagetypeOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aBasiseenheidProductOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aHulpmiddelAardOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aRedenHulpstofIdentificerendOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aVerwijzingExtraKenmerkOmschrijving;

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
     * Get the [naamnummer_prescriptie_product] column value.
     *
     * @return int
     */
    public function getNaamnummerPrescriptieProduct()
    {

        return $this->naamnummer_prescriptie_product;
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
     * Get the [thesnr_reden_voorschrijven_hpk_niveau] column value.
     *
     * @return int
     */
    public function getThesnrRedenVoorschrijvenHpkNiveau()
    {

        return $this->thesnr_reden_voorschrijven_hpk_niveau;
    }

    /**
     * Get the [reden_voorschrijven_hpk_niveau] column value.
     *
     * @return int
     */
    public function getRedenVoorschrijvenHpkNiveau()
    {

        return $this->reden_voorschrijven_hpk_niveau;
    }

    /**
     * Get the [thesnr_emballagetype] column value.
     *
     * @return int
     */
    public function getThesnrEmballagetype()
    {

        return $this->thesnr_emballagetype;
    }

    /**
     * Get the [emballagetype] column value.
     *
     * @return int
     */
    public function getEmballagetype()
    {

        return $this->emballagetype;
    }

    /**
     * Get the [thesnr_basiseenheid_product] column value.
     *
     * @return int
     */
    public function getThesnrBasiseenheidProduct()
    {

        return $this->thesnr_basiseenheid_product;
    }

    /**
     * Get the [basiseenheid_product] column value.
     *
     * @return int
     */
    public function getBasiseenheidProduct()
    {

        return $this->basiseenheid_product;
    }

    /**
     * Get the [productgrootte_algemeen] column value.
     *
     * @return string
     */
    public function getProductgrootteAlgemeen()
    {

        return $this->productgrootte_algemeen;
    }

    /**
     * Get the [thesnr_hulpmiddel_aard] column value.
     *
     * @return int
     */
    public function getThesnrHulpmiddelAard()
    {

        return $this->thesnr_hulpmiddel_aard;
    }

    /**
     * Get the [hulpmiddel_aard] column value.
     *
     * @return int
     */
    public function getHulpmiddelAard()
    {

        return $this->hulpmiddel_aard;
    }

    /**
     * Get the [hulpmiddel_aard_hoeveelheid] column value.
     *
     * @return int
     */
    public function getHulpmiddelAardHoeveelheid()
    {

        return $this->hulpmiddel_aard_hoeveelheid;
    }

    /**
     * Get the [meervoudig_product_jn] column value.
     *
     * @return string
     */
    public function getMeervoudigProductJn()
    {

        return $this->meervoudig_product_jn;
    }

    /**
     * Get the [thesnr_reden_hulpstof_identificerend] column value.
     *
     * @return int
     */
    public function getThesnrRedenHulpstofIdentificerend()
    {

        return $this->thesnr_reden_hulpstof_identificerend;
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
     * Get the [thesnr_verwijzing_extra_kenmerk] column value.
     *
     * @return int
     */
    public function getThesnrVerwijzingExtraKenmerk()
    {

        return $this->thesnr_verwijzing_extra_kenmerk;
    }

    /**
     * Get the [verwijzing_extra_kenmerk] column value.
     *
     * @return int
     */
    public function getVerwijzingExtraKenmerk()
    {

        return $this->verwijzing_extra_kenmerk;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [prkcode] column.
     *
     * @param  int $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setPrkcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->prkcode !== $v) {
            $this->prkcode = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::PRKCODE;
        }


        return $this;
    } // setPrkcode()

    /**
     * Set the value of [naamnummer_prescriptie_product] column.
     *
     * @param  int $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setNaamnummerPrescriptieProduct($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->naamnummer_prescriptie_product !== $v) {
            $this->naamnummer_prescriptie_product = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT;
        }

        if ($this->aGsNamen !== null && $this->aGsNamen->getNaamnummer() !== $v) {
            $this->aGsNamen = null;
        }


        return $this;
    } // setNaamnummerPrescriptieProduct()

    /**
     * Set the value of [generiekeproductcode] column.
     *
     * @param  int $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setGeneriekeproductcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->generiekeproductcode !== $v) {
            $this->generiekeproductcode = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE;
        }

        if ($this->aGsGeneriekeProducten !== null && $this->aGsGeneriekeProducten->getGeneriekeproductcode() !== $v) {
            $this->aGsGeneriekeProducten = null;
        }


        return $this;
    } // setGeneriekeproductcode()

    /**
     * Set the value of [thesnr_reden_voorschrijven_hpk_niveau] column.
     *
     * @param  int $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setThesnrRedenVoorschrijvenHpkNiveau($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesnr_reden_voorschrijven_hpk_niveau !== $v) {
            $this->thesnr_reden_voorschrijven_hpk_niveau = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU;
        }

        if ($this->aRedenVoorschrijvenHpkNiveauOmschrijving !== null && $this->aRedenVoorschrijvenHpkNiveauOmschrijving->getThesaurusnummer() !== $v) {
            $this->aRedenVoorschrijvenHpkNiveauOmschrijving = null;
        }


        return $this;
    } // setThesnrRedenVoorschrijvenHpkNiveau()

    /**
     * Set the value of [reden_voorschrijven_hpk_niveau] column.
     *
     * @param  int $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setRedenVoorschrijvenHpkNiveau($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reden_voorschrijven_hpk_niveau !== $v) {
            $this->reden_voorschrijven_hpk_niveau = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU;
        }

        if ($this->aRedenVoorschrijvenHpkNiveauOmschrijving !== null && $this->aRedenVoorschrijvenHpkNiveauOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aRedenVoorschrijvenHpkNiveauOmschrijving = null;
        }


        return $this;
    } // setRedenVoorschrijvenHpkNiveau()

    /**
     * Set the value of [thesnr_emballagetype] column.
     *
     * @param  int $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setThesnrEmballagetype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesnr_emballagetype !== $v) {
            $this->thesnr_emballagetype = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE;
        }

        if ($this->aEmballagetypeOmschrijving !== null && $this->aEmballagetypeOmschrijving->getThesaurusnummer() !== $v) {
            $this->aEmballagetypeOmschrijving = null;
        }


        return $this;
    } // setThesnrEmballagetype()

    /**
     * Set the value of [emballagetype] column.
     *
     * @param  int $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setEmballagetype($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->emballagetype !== $v) {
            $this->emballagetype = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::EMBALLAGETYPE;
        }

        if ($this->aEmballagetypeOmschrijving !== null && $this->aEmballagetypeOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aEmballagetypeOmschrijving = null;
        }


        return $this;
    } // setEmballagetype()

    /**
     * Set the value of [thesnr_basiseenheid_product] column.
     *
     * @param  int $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setThesnrBasiseenheidProduct($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesnr_basiseenheid_product !== $v) {
            $this->thesnr_basiseenheid_product = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT;
        }

        if ($this->aBasiseenheidProductOmschrijving !== null && $this->aBasiseenheidProductOmschrijving->getThesaurusnummer() !== $v) {
            $this->aBasiseenheidProductOmschrijving = null;
        }


        return $this;
    } // setThesnrBasiseenheidProduct()

    /**
     * Set the value of [basiseenheid_product] column.
     *
     * @param  int $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setBasiseenheidProduct($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->basiseenheid_product !== $v) {
            $this->basiseenheid_product = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::BASISEENHEID_PRODUCT;
        }

        if ($this->aBasiseenheidProductOmschrijving !== null && $this->aBasiseenheidProductOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aBasiseenheidProductOmschrijving = null;
        }


        return $this;
    } // setBasiseenheidProduct()

    /**
     * Set the value of [productgrootte_algemeen] column.
     *
     * @param  string $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setProductgrootteAlgemeen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->productgrootte_algemeen !== $v) {
            $this->productgrootte_algemeen = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::PRODUCTGROOTTE_ALGEMEEN;
        }


        return $this;
    } // setProductgrootteAlgemeen()

    /**
     * Set the value of [thesnr_hulpmiddel_aard] column.
     *
     * @param  int $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setThesnrHulpmiddelAard($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesnr_hulpmiddel_aard !== $v) {
            $this->thesnr_hulpmiddel_aard = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD;
        }

        if ($this->aHulpmiddelAardOmschrijving !== null && $this->aHulpmiddelAardOmschrijving->getThesaurusnummer() !== $v) {
            $this->aHulpmiddelAardOmschrijving = null;
        }


        return $this;
    } // setThesnrHulpmiddelAard()

    /**
     * Set the value of [hulpmiddel_aard] column.
     *
     * @param  int $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setHulpmiddelAard($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hulpmiddel_aard !== $v) {
            $this->hulpmiddel_aard = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::HULPMIDDEL_AARD;
        }

        if ($this->aHulpmiddelAardOmschrijving !== null && $this->aHulpmiddelAardOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aHulpmiddelAardOmschrijving = null;
        }


        return $this;
    } // setHulpmiddelAard()

    /**
     * Set the value of [hulpmiddel_aard_hoeveelheid] column.
     *
     * @param  int $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setHulpmiddelAardHoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hulpmiddel_aard_hoeveelheid !== $v) {
            $this->hulpmiddel_aard_hoeveelheid = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::HULPMIDDEL_AARD_HOEVEELHEID;
        }


        return $this;
    } // setHulpmiddelAardHoeveelheid()

    /**
     * Set the value of [meervoudig_product_jn] column.
     *
     * @param  string $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setMeervoudigProductJn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->meervoudig_product_jn !== $v) {
            $this->meervoudig_product_jn = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::MEERVOUDIG_PRODUCT_JN;
        }


        return $this;
    } // setMeervoudigProductJn()

    /**
     * Set the value of [thesnr_reden_hulpstof_identificerend] column.
     *
     * @param  int $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setThesnrRedenHulpstofIdentificerend($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesnr_reden_hulpstof_identificerend !== $v) {
            $this->thesnr_reden_hulpstof_identificerend = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND;
        }

        if ($this->aRedenHulpstofIdentificerendOmschrijving !== null && $this->aRedenHulpstofIdentificerendOmschrijving->getThesaurusnummer() !== $v) {
            $this->aRedenHulpstofIdentificerendOmschrijving = null;
        }


        return $this;
    } // setThesnrRedenHulpstofIdentificerend()

    /**
     * Set the value of [reden_hulpstof_identificerend] column.
     *
     * @param  int $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setRedenHulpstofIdentificerend($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reden_hulpstof_identificerend !== $v) {
            $this->reden_hulpstof_identificerend = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND;
        }

        if ($this->aRedenHulpstofIdentificerendOmschrijving !== null && $this->aRedenHulpstofIdentificerendOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aRedenHulpstofIdentificerendOmschrijving = null;
        }


        return $this;
    } // setRedenHulpstofIdentificerend()

    /**
     * Set the value of [thesnr_verwijzing_extra_kenmerk] column.
     *
     * @param  int $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setThesnrVerwijzingExtraKenmerk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesnr_verwijzing_extra_kenmerk !== $v) {
            $this->thesnr_verwijzing_extra_kenmerk = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK;
        }

        if ($this->aVerwijzingExtraKenmerkOmschrijving !== null && $this->aVerwijzingExtraKenmerkOmschrijving->getThesaurusnummer() !== $v) {
            $this->aVerwijzingExtraKenmerkOmschrijving = null;
        }


        return $this;
    } // setThesnrVerwijzingExtraKenmerk()

    /**
     * Set the value of [verwijzing_extra_kenmerk] column.
     *
     * @param  int $v new value
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setVerwijzingExtraKenmerk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->verwijzing_extra_kenmerk !== $v) {
            $this->verwijzing_extra_kenmerk = $v;
            $this->modifiedColumns[] = GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK;
        }

        if ($this->aVerwijzingExtraKenmerkOmschrijving !== null && $this->aVerwijzingExtraKenmerkOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aVerwijzingExtraKenmerkOmschrijving = null;
        }


        return $this;
    } // setVerwijzingExtraKenmerk()

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
            $this->naamnummer_prescriptie_product = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->generiekeproductcode = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->thesnr_reden_voorschrijven_hpk_niveau = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->reden_voorschrijven_hpk_niveau = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->thesnr_emballagetype = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->emballagetype = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->thesnr_basiseenheid_product = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->basiseenheid_product = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->productgrootte_algemeen = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->thesnr_hulpmiddel_aard = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->hulpmiddel_aard = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->hulpmiddel_aard_hoeveelheid = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->meervoudig_product_jn = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->thesnr_reden_hulpstof_identificerend = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->reden_hulpstof_identificerend = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->thesnr_verwijzing_extra_kenmerk = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->verwijzing_extra_kenmerk = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 20; // 20 = GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsPrescriptieProduct object", $e);
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

        if ($this->aGsNamen !== null && $this->naamnummer_prescriptie_product !== $this->aGsNamen->getNaamnummer()) {
            $this->aGsNamen = null;
        }
        if ($this->aGsGeneriekeProducten !== null && $this->generiekeproductcode !== $this->aGsGeneriekeProducten->getGeneriekeproductcode()) {
            $this->aGsGeneriekeProducten = null;
        }
        if ($this->aRedenVoorschrijvenHpkNiveauOmschrijving !== null && $this->thesnr_reden_voorschrijven_hpk_niveau !== $this->aRedenVoorschrijvenHpkNiveauOmschrijving->getThesaurusnummer()) {
            $this->aRedenVoorschrijvenHpkNiveauOmschrijving = null;
        }
        if ($this->aRedenVoorschrijvenHpkNiveauOmschrijving !== null && $this->reden_voorschrijven_hpk_niveau !== $this->aRedenVoorschrijvenHpkNiveauOmschrijving->getThesaurusItemnummer()) {
            $this->aRedenVoorschrijvenHpkNiveauOmschrijving = null;
        }
        if ($this->aEmballagetypeOmschrijving !== null && $this->thesnr_emballagetype !== $this->aEmballagetypeOmschrijving->getThesaurusnummer()) {
            $this->aEmballagetypeOmschrijving = null;
        }
        if ($this->aEmballagetypeOmschrijving !== null && $this->emballagetype !== $this->aEmballagetypeOmschrijving->getThesaurusItemnummer()) {
            $this->aEmballagetypeOmschrijving = null;
        }
        if ($this->aBasiseenheidProductOmschrijving !== null && $this->thesnr_basiseenheid_product !== $this->aBasiseenheidProductOmschrijving->getThesaurusnummer()) {
            $this->aBasiseenheidProductOmschrijving = null;
        }
        if ($this->aBasiseenheidProductOmschrijving !== null && $this->basiseenheid_product !== $this->aBasiseenheidProductOmschrijving->getThesaurusItemnummer()) {
            $this->aBasiseenheidProductOmschrijving = null;
        }
        if ($this->aHulpmiddelAardOmschrijving !== null && $this->thesnr_hulpmiddel_aard !== $this->aHulpmiddelAardOmschrijving->getThesaurusnummer()) {
            $this->aHulpmiddelAardOmschrijving = null;
        }
        if ($this->aHulpmiddelAardOmschrijving !== null && $this->hulpmiddel_aard !== $this->aHulpmiddelAardOmschrijving->getThesaurusItemnummer()) {
            $this->aHulpmiddelAardOmschrijving = null;
        }
        if ($this->aRedenHulpstofIdentificerendOmschrijving !== null && $this->thesnr_reden_hulpstof_identificerend !== $this->aRedenHulpstofIdentificerendOmschrijving->getThesaurusnummer()) {
            $this->aRedenHulpstofIdentificerendOmschrijving = null;
        }
        if ($this->aRedenHulpstofIdentificerendOmschrijving !== null && $this->reden_hulpstof_identificerend !== $this->aRedenHulpstofIdentificerendOmschrijving->getThesaurusItemnummer()) {
            $this->aRedenHulpstofIdentificerendOmschrijving = null;
        }
        if ($this->aVerwijzingExtraKenmerkOmschrijving !== null && $this->thesnr_verwijzing_extra_kenmerk !== $this->aVerwijzingExtraKenmerkOmschrijving->getThesaurusnummer()) {
            $this->aVerwijzingExtraKenmerkOmschrijving = null;
        }
        if ($this->aVerwijzingExtraKenmerkOmschrijving !== null && $this->verwijzing_extra_kenmerk !== $this->aVerwijzingExtraKenmerkOmschrijving->getThesaurusItemnummer()) {
            $this->aVerwijzingExtraKenmerkOmschrijving = null;
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
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsPrescriptieProductPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGsGeneriekeProducten = null;
            $this->aGsNamen = null;
            $this->aRedenVoorschrijvenHpkNiveauOmschrijving = null;
            $this->aEmballagetypeOmschrijving = null;
            $this->aBasiseenheidProductOmschrijving = null;
            $this->aHulpmiddelAardOmschrijving = null;
            $this->aRedenHulpstofIdentificerendOmschrijving = null;
            $this->aVerwijzingExtraKenmerkOmschrijving = null;
            $this->collGsArtikelEigenschappens = null;

            $this->collGsBijzondereKenmerkens = null;

            $this->collGsHandelsproductens = null;

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
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsPrescriptieProductQuery::create()
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
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsPrescriptieProductPeer::addInstanceToPool($this);
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

            if ($this->aGsNamen !== null) {
                if ($this->aGsNamen->isModified() || $this->aGsNamen->isNew()) {
                    $affectedRows += $this->aGsNamen->save($con);
                }
                $this->setGsNamen($this->aGsNamen);
            }

            if ($this->aRedenVoorschrijvenHpkNiveauOmschrijving !== null) {
                if ($this->aRedenVoorschrijvenHpkNiveauOmschrijving->isModified() || $this->aRedenVoorschrijvenHpkNiveauOmschrijving->isNew()) {
                    $affectedRows += $this->aRedenVoorschrijvenHpkNiveauOmschrijving->save($con);
                }
                $this->setRedenVoorschrijvenHpkNiveauOmschrijving($this->aRedenVoorschrijvenHpkNiveauOmschrijving);
            }

            if ($this->aEmballagetypeOmschrijving !== null) {
                if ($this->aEmballagetypeOmschrijving->isModified() || $this->aEmballagetypeOmschrijving->isNew()) {
                    $affectedRows += $this->aEmballagetypeOmschrijving->save($con);
                }
                $this->setEmballagetypeOmschrijving($this->aEmballagetypeOmschrijving);
            }

            if ($this->aBasiseenheidProductOmschrijving !== null) {
                if ($this->aBasiseenheidProductOmschrijving->isModified() || $this->aBasiseenheidProductOmschrijving->isNew()) {
                    $affectedRows += $this->aBasiseenheidProductOmschrijving->save($con);
                }
                $this->setBasiseenheidProductOmschrijving($this->aBasiseenheidProductOmschrijving);
            }

            if ($this->aHulpmiddelAardOmschrijving !== null) {
                if ($this->aHulpmiddelAardOmschrijving->isModified() || $this->aHulpmiddelAardOmschrijving->isNew()) {
                    $affectedRows += $this->aHulpmiddelAardOmschrijving->save($con);
                }
                $this->setHulpmiddelAardOmschrijving($this->aHulpmiddelAardOmschrijving);
            }

            if ($this->aRedenHulpstofIdentificerendOmschrijving !== null) {
                if ($this->aRedenHulpstofIdentificerendOmschrijving->isModified() || $this->aRedenHulpstofIdentificerendOmschrijving->isNew()) {
                    $affectedRows += $this->aRedenHulpstofIdentificerendOmschrijving->save($con);
                }
                $this->setRedenHulpstofIdentificerendOmschrijving($this->aRedenHulpstofIdentificerendOmschrijving);
            }

            if ($this->aVerwijzingExtraKenmerkOmschrijving !== null) {
                if ($this->aVerwijzingExtraKenmerkOmschrijving->isModified() || $this->aVerwijzingExtraKenmerkOmschrijving->isNew()) {
                    $affectedRows += $this->aVerwijzingExtraKenmerkOmschrijving->save($con);
                }
                $this->setVerwijzingExtraKenmerkOmschrijving($this->aVerwijzingExtraKenmerkOmschrijving);
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
        if ($this->isColumnModified(GsPrescriptieProductPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::PRKCODE)) {
            $modifiedColumns[':p' . $index++]  = '`prkcode`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT)) {
            $modifiedColumns[':p' . $index++]  = '`naamnummer_prescriptie_product`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE)) {
            $modifiedColumns[':p' . $index++]  = '`generiekeproductcode`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU)) {
            $modifiedColumns[':p' . $index++]  = '`thesnr_reden_voorschrijven_hpk_niveau`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU)) {
            $modifiedColumns[':p' . $index++]  = '`reden_voorschrijven_hpk_niveau`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE)) {
            $modifiedColumns[':p' . $index++]  = '`thesnr_emballagetype`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::EMBALLAGETYPE)) {
            $modifiedColumns[':p' . $index++]  = '`emballagetype`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT)) {
            $modifiedColumns[':p' . $index++]  = '`thesnr_basiseenheid_product`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::BASISEENHEID_PRODUCT)) {
            $modifiedColumns[':p' . $index++]  = '`basiseenheid_product`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::PRODUCTGROOTTE_ALGEMEEN)) {
            $modifiedColumns[':p' . $index++]  = '`productgrootte_algemeen`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD)) {
            $modifiedColumns[':p' . $index++]  = '`thesnr_hulpmiddel_aard`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::HULPMIDDEL_AARD)) {
            $modifiedColumns[':p' . $index++]  = '`hulpmiddel_aard`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::HULPMIDDEL_AARD_HOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`hulpmiddel_aard_hoeveelheid`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::MEERVOUDIG_PRODUCT_JN)) {
            $modifiedColumns[':p' . $index++]  = '`meervoudig_product_jn`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND)) {
            $modifiedColumns[':p' . $index++]  = '`thesnr_reden_hulpstof_identificerend`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND)) {
            $modifiedColumns[':p' . $index++]  = '`reden_hulpstof_identificerend`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK)) {
            $modifiedColumns[':p' . $index++]  = '`thesnr_verwijzing_extra_kenmerk`';
        }
        if ($this->isColumnModified(GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK)) {
            $modifiedColumns[':p' . $index++]  = '`verwijzing_extra_kenmerk`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_prescriptie_product` (%s) VALUES (%s)',
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
                    case '`naamnummer_prescriptie_product`':
                        $stmt->bindValue($identifier, $this->naamnummer_prescriptie_product, PDO::PARAM_INT);
                        break;
                    case '`generiekeproductcode`':
                        $stmt->bindValue($identifier, $this->generiekeproductcode, PDO::PARAM_INT);
                        break;
                    case '`thesnr_reden_voorschrijven_hpk_niveau`':
                        $stmt->bindValue($identifier, $this->thesnr_reden_voorschrijven_hpk_niveau, PDO::PARAM_INT);
                        break;
                    case '`reden_voorschrijven_hpk_niveau`':
                        $stmt->bindValue($identifier, $this->reden_voorschrijven_hpk_niveau, PDO::PARAM_INT);
                        break;
                    case '`thesnr_emballagetype`':
                        $stmt->bindValue($identifier, $this->thesnr_emballagetype, PDO::PARAM_INT);
                        break;
                    case '`emballagetype`':
                        $stmt->bindValue($identifier, $this->emballagetype, PDO::PARAM_INT);
                        break;
                    case '`thesnr_basiseenheid_product`':
                        $stmt->bindValue($identifier, $this->thesnr_basiseenheid_product, PDO::PARAM_INT);
                        break;
                    case '`basiseenheid_product`':
                        $stmt->bindValue($identifier, $this->basiseenheid_product, PDO::PARAM_INT);
                        break;
                    case '`productgrootte_algemeen`':
                        $stmt->bindValue($identifier, $this->productgrootte_algemeen, PDO::PARAM_STR);
                        break;
                    case '`thesnr_hulpmiddel_aard`':
                        $stmt->bindValue($identifier, $this->thesnr_hulpmiddel_aard, PDO::PARAM_INT);
                        break;
                    case '`hulpmiddel_aard`':
                        $stmt->bindValue($identifier, $this->hulpmiddel_aard, PDO::PARAM_INT);
                        break;
                    case '`hulpmiddel_aard_hoeveelheid`':
                        $stmt->bindValue($identifier, $this->hulpmiddel_aard_hoeveelheid, PDO::PARAM_INT);
                        break;
                    case '`meervoudig_product_jn`':
                        $stmt->bindValue($identifier, $this->meervoudig_product_jn, PDO::PARAM_STR);
                        break;
                    case '`thesnr_reden_hulpstof_identificerend`':
                        $stmt->bindValue($identifier, $this->thesnr_reden_hulpstof_identificerend, PDO::PARAM_INT);
                        break;
                    case '`reden_hulpstof_identificerend`':
                        $stmt->bindValue($identifier, $this->reden_hulpstof_identificerend, PDO::PARAM_INT);
                        break;
                    case '`thesnr_verwijzing_extra_kenmerk`':
                        $stmt->bindValue($identifier, $this->thesnr_verwijzing_extra_kenmerk, PDO::PARAM_INT);
                        break;
                    case '`verwijzing_extra_kenmerk`':
                        $stmt->bindValue($identifier, $this->verwijzing_extra_kenmerk, PDO::PARAM_INT);
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

            if ($this->aGsNamen !== null) {
                if (!$this->aGsNamen->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsNamen->getValidationFailures());
                }
            }

            if ($this->aRedenVoorschrijvenHpkNiveauOmschrijving !== null) {
                if (!$this->aRedenVoorschrijvenHpkNiveauOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRedenVoorschrijvenHpkNiveauOmschrijving->getValidationFailures());
                }
            }

            if ($this->aEmballagetypeOmschrijving !== null) {
                if (!$this->aEmballagetypeOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmballagetypeOmschrijving->getValidationFailures());
                }
            }

            if ($this->aBasiseenheidProductOmschrijving !== null) {
                if (!$this->aBasiseenheidProductOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aBasiseenheidProductOmschrijving->getValidationFailures());
                }
            }

            if ($this->aHulpmiddelAardOmschrijving !== null) {
                if (!$this->aHulpmiddelAardOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aHulpmiddelAardOmschrijving->getValidationFailures());
                }
            }

            if ($this->aRedenHulpstofIdentificerendOmschrijving !== null) {
                if (!$this->aRedenHulpstofIdentificerendOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRedenHulpstofIdentificerendOmschrijving->getValidationFailures());
                }
            }

            if ($this->aVerwijzingExtraKenmerkOmschrijving !== null) {
                if (!$this->aVerwijzingExtraKenmerkOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aVerwijzingExtraKenmerkOmschrijving->getValidationFailures());
                }
            }


            if (($retval = GsPrescriptieProductPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GsPrescriptieProductPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getNaamnummerPrescriptieProduct();
                break;
            case 4:
                return $this->getGeneriekeproductcode();
                break;
            case 5:
                return $this->getThesnrRedenVoorschrijvenHpkNiveau();
                break;
            case 6:
                return $this->getRedenVoorschrijvenHpkNiveau();
                break;
            case 7:
                return $this->getThesnrEmballagetype();
                break;
            case 8:
                return $this->getEmballagetype();
                break;
            case 9:
                return $this->getThesnrBasiseenheidProduct();
                break;
            case 10:
                return $this->getBasiseenheidProduct();
                break;
            case 11:
                return $this->getProductgrootteAlgemeen();
                break;
            case 12:
                return $this->getThesnrHulpmiddelAard();
                break;
            case 13:
                return $this->getHulpmiddelAard();
                break;
            case 14:
                return $this->getHulpmiddelAardHoeveelheid();
                break;
            case 15:
                return $this->getMeervoudigProductJn();
                break;
            case 16:
                return $this->getThesnrRedenHulpstofIdentificerend();
                break;
            case 17:
                return $this->getRedenHulpstofIdentificerend();
                break;
            case 18:
                return $this->getThesnrVerwijzingExtraKenmerk();
                break;
            case 19:
                return $this->getVerwijzingExtraKenmerk();
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
        if (isset($alreadyDumpedObjects['GsPrescriptieProduct'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsPrescriptieProduct'][$this->getPrimaryKey()] = true;
        $keys = GsPrescriptieProductPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getPrkcode(),
            $keys[3] => $this->getNaamnummerPrescriptieProduct(),
            $keys[4] => $this->getGeneriekeproductcode(),
            $keys[5] => $this->getThesnrRedenVoorschrijvenHpkNiveau(),
            $keys[6] => $this->getRedenVoorschrijvenHpkNiveau(),
            $keys[7] => $this->getThesnrEmballagetype(),
            $keys[8] => $this->getEmballagetype(),
            $keys[9] => $this->getThesnrBasiseenheidProduct(),
            $keys[10] => $this->getBasiseenheidProduct(),
            $keys[11] => $this->getProductgrootteAlgemeen(),
            $keys[12] => $this->getThesnrHulpmiddelAard(),
            $keys[13] => $this->getHulpmiddelAard(),
            $keys[14] => $this->getHulpmiddelAardHoeveelheid(),
            $keys[15] => $this->getMeervoudigProductJn(),
            $keys[16] => $this->getThesnrRedenHulpstofIdentificerend(),
            $keys[17] => $this->getRedenHulpstofIdentificerend(),
            $keys[18] => $this->getThesnrVerwijzingExtraKenmerk(),
            $keys[19] => $this->getVerwijzingExtraKenmerk(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aGsGeneriekeProducten) {
                $result['GsGeneriekeProducten'] = $this->aGsGeneriekeProducten->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aGsNamen) {
                $result['GsNamen'] = $this->aGsNamen->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRedenVoorschrijvenHpkNiveauOmschrijving) {
                $result['RedenVoorschrijvenHpkNiveauOmschrijving'] = $this->aRedenVoorschrijvenHpkNiveauOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmballagetypeOmschrijving) {
                $result['EmballagetypeOmschrijving'] = $this->aEmballagetypeOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aBasiseenheidProductOmschrijving) {
                $result['BasiseenheidProductOmschrijving'] = $this->aBasiseenheidProductOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aHulpmiddelAardOmschrijving) {
                $result['HulpmiddelAardOmschrijving'] = $this->aHulpmiddelAardOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRedenHulpstofIdentificerendOmschrijving) {
                $result['RedenHulpstofIdentificerendOmschrijving'] = $this->aRedenHulpstofIdentificerendOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aVerwijzingExtraKenmerkOmschrijving) {
                $result['VerwijzingExtraKenmerkOmschrijving'] = $this->aVerwijzingExtraKenmerkOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = GsPrescriptieProductPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setNaamnummerPrescriptieProduct($value);
                break;
            case 4:
                $this->setGeneriekeproductcode($value);
                break;
            case 5:
                $this->setThesnrRedenVoorschrijvenHpkNiveau($value);
                break;
            case 6:
                $this->setRedenVoorschrijvenHpkNiveau($value);
                break;
            case 7:
                $this->setThesnrEmballagetype($value);
                break;
            case 8:
                $this->setEmballagetype($value);
                break;
            case 9:
                $this->setThesnrBasiseenheidProduct($value);
                break;
            case 10:
                $this->setBasiseenheidProduct($value);
                break;
            case 11:
                $this->setProductgrootteAlgemeen($value);
                break;
            case 12:
                $this->setThesnrHulpmiddelAard($value);
                break;
            case 13:
                $this->setHulpmiddelAard($value);
                break;
            case 14:
                $this->setHulpmiddelAardHoeveelheid($value);
                break;
            case 15:
                $this->setMeervoudigProductJn($value);
                break;
            case 16:
                $this->setThesnrRedenHulpstofIdentificerend($value);
                break;
            case 17:
                $this->setRedenHulpstofIdentificerend($value);
                break;
            case 18:
                $this->setThesnrVerwijzingExtraKenmerk($value);
                break;
            case 19:
                $this->setVerwijzingExtraKenmerk($value);
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
        $keys = GsPrescriptieProductPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPrkcode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNaamnummerPrescriptieProduct($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setGeneriekeproductcode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setThesnrRedenVoorschrijvenHpkNiveau($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRedenVoorschrijvenHpkNiveau($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setThesnrEmballagetype($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEmballagetype($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setThesnrBasiseenheidProduct($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setBasiseenheidProduct($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setProductgrootteAlgemeen($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setThesnrHulpmiddelAard($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setHulpmiddelAard($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setHulpmiddelAardHoeveelheid($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setMeervoudigProductJn($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setThesnrRedenHulpstofIdentificerend($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setRedenHulpstofIdentificerend($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setThesnrVerwijzingExtraKenmerk($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setVerwijzingExtraKenmerk($arr[$keys[19]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsPrescriptieProductPeer::BESTANDNUMMER)) $criteria->add(GsPrescriptieProductPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsPrescriptieProductPeer::MUTATIEKODE)) $criteria->add(GsPrescriptieProductPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsPrescriptieProductPeer::PRKCODE)) $criteria->add(GsPrescriptieProductPeer::PRKCODE, $this->prkcode);
        if ($this->isColumnModified(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT)) $criteria->add(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, $this->naamnummer_prescriptie_product);
        if ($this->isColumnModified(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE)) $criteria->add(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, $this->generiekeproductcode);
        if ($this->isColumnModified(GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU)) $criteria->add(GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU, $this->thesnr_reden_voorschrijven_hpk_niveau);
        if ($this->isColumnModified(GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU)) $criteria->add(GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU, $this->reden_voorschrijven_hpk_niveau);
        if ($this->isColumnModified(GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE)) $criteria->add(GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE, $this->thesnr_emballagetype);
        if ($this->isColumnModified(GsPrescriptieProductPeer::EMBALLAGETYPE)) $criteria->add(GsPrescriptieProductPeer::EMBALLAGETYPE, $this->emballagetype);
        if ($this->isColumnModified(GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT)) $criteria->add(GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT, $this->thesnr_basiseenheid_product);
        if ($this->isColumnModified(GsPrescriptieProductPeer::BASISEENHEID_PRODUCT)) $criteria->add(GsPrescriptieProductPeer::BASISEENHEID_PRODUCT, $this->basiseenheid_product);
        if ($this->isColumnModified(GsPrescriptieProductPeer::PRODUCTGROOTTE_ALGEMEEN)) $criteria->add(GsPrescriptieProductPeer::PRODUCTGROOTTE_ALGEMEEN, $this->productgrootte_algemeen);
        if ($this->isColumnModified(GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD)) $criteria->add(GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD, $this->thesnr_hulpmiddel_aard);
        if ($this->isColumnModified(GsPrescriptieProductPeer::HULPMIDDEL_AARD)) $criteria->add(GsPrescriptieProductPeer::HULPMIDDEL_AARD, $this->hulpmiddel_aard);
        if ($this->isColumnModified(GsPrescriptieProductPeer::HULPMIDDEL_AARD_HOEVEELHEID)) $criteria->add(GsPrescriptieProductPeer::HULPMIDDEL_AARD_HOEVEELHEID, $this->hulpmiddel_aard_hoeveelheid);
        if ($this->isColumnModified(GsPrescriptieProductPeer::MEERVOUDIG_PRODUCT_JN)) $criteria->add(GsPrescriptieProductPeer::MEERVOUDIG_PRODUCT_JN, $this->meervoudig_product_jn);
        if ($this->isColumnModified(GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND)) $criteria->add(GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND, $this->thesnr_reden_hulpstof_identificerend);
        if ($this->isColumnModified(GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND)) $criteria->add(GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND, $this->reden_hulpstof_identificerend);
        if ($this->isColumnModified(GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK)) $criteria->add(GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK, $this->thesnr_verwijzing_extra_kenmerk);
        if ($this->isColumnModified(GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK)) $criteria->add(GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK, $this->verwijzing_extra_kenmerk);

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
        $criteria = new Criteria(GsPrescriptieProductPeer::DATABASE_NAME);
        $criteria->add(GsPrescriptieProductPeer::PRKCODE, $this->prkcode);

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
     * @param object $copyObj An object of GsPrescriptieProduct (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setNaamnummerPrescriptieProduct($this->getNaamnummerPrescriptieProduct());
        $copyObj->setGeneriekeproductcode($this->getGeneriekeproductcode());
        $copyObj->setThesnrRedenVoorschrijvenHpkNiveau($this->getThesnrRedenVoorschrijvenHpkNiveau());
        $copyObj->setRedenVoorschrijvenHpkNiveau($this->getRedenVoorschrijvenHpkNiveau());
        $copyObj->setThesnrEmballagetype($this->getThesnrEmballagetype());
        $copyObj->setEmballagetype($this->getEmballagetype());
        $copyObj->setThesnrBasiseenheidProduct($this->getThesnrBasiseenheidProduct());
        $copyObj->setBasiseenheidProduct($this->getBasiseenheidProduct());
        $copyObj->setProductgrootteAlgemeen($this->getProductgrootteAlgemeen());
        $copyObj->setThesnrHulpmiddelAard($this->getThesnrHulpmiddelAard());
        $copyObj->setHulpmiddelAard($this->getHulpmiddelAard());
        $copyObj->setHulpmiddelAardHoeveelheid($this->getHulpmiddelAardHoeveelheid());
        $copyObj->setMeervoudigProductJn($this->getMeervoudigProductJn());
        $copyObj->setThesnrRedenHulpstofIdentificerend($this->getThesnrRedenHulpstofIdentificerend());
        $copyObj->setRedenHulpstofIdentificerend($this->getRedenHulpstofIdentificerend());
        $copyObj->setThesnrVerwijzingExtraKenmerk($this->getThesnrVerwijzingExtraKenmerk());
        $copyObj->setVerwijzingExtraKenmerk($this->getVerwijzingExtraKenmerk());

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
     * @return GsPrescriptieProduct Clone of current object.
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
     * @return GsPrescriptieProductPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsPrescriptieProductPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsGeneriekeProducten object.
     *
     * @param                  GsGeneriekeProducten $v
     * @return GsPrescriptieProduct The current object (for fluent API support)
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
            $v->addGsPrescriptieProduct($this);
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
                $this->aGsGeneriekeProducten->addGsPrescriptieProducts($this);
             */
        }

        return $this->aGsGeneriekeProducten;
    }

    /**
     * Declares an association between this object and a GsNamen object.
     *
     * @param                  GsNamen $v
     * @return GsPrescriptieProduct The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsNamen(GsNamen $v = null)
    {
        if ($v === null) {
            $this->setNaamnummerPrescriptieProduct(NULL);
        } else {
            $this->setNaamnummerPrescriptieProduct($v->getNaamnummer());
        }

        $this->aGsNamen = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsNamen object, it will not be re-added.
        if ($v !== null) {
            $v->addGsPrescriptieProduct($this);
        }


        return $this;
    }


    /**
     * Get the associated GsNamen object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsNamen The associated GsNamen object.
     * @throws PropelException
     */
    public function getGsNamen(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGsNamen === null && ($this->naamnummer_prescriptie_product !== null) && $doQuery) {
            $this->aGsNamen = GsNamenQuery::create()->findPk($this->naamnummer_prescriptie_product, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsNamen->addGsPrescriptieProducts($this);
             */
        }

        return $this->aGsNamen;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsPrescriptieProduct The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRedenVoorschrijvenHpkNiveauOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesnrRedenVoorschrijvenHpkNiveau(NULL);
        } else {
            $this->setThesnrRedenVoorschrijvenHpkNiveau($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setRedenVoorschrijvenHpkNiveau(NULL);
        } else {
            $this->setRedenVoorschrijvenHpkNiveau($v->getThesaurusItemnummer());
        }

        $this->aRedenVoorschrijvenHpkNiveauOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau($this);
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
    public function getRedenVoorschrijvenHpkNiveauOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRedenVoorschrijvenHpkNiveauOmschrijving === null && ($this->thesnr_reden_voorschrijven_hpk_niveau !== null && $this->reden_voorschrijven_hpk_niveau !== null) && $doQuery) {
            $this->aRedenVoorschrijvenHpkNiveauOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesnr_reden_voorschrijven_hpk_niveau, $this->reden_voorschrijven_hpk_niveau), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRedenVoorschrijvenHpkNiveauOmschrijving->addGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau($this);
             */
        }

        return $this->aRedenVoorschrijvenHpkNiveauOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsPrescriptieProduct The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmballagetypeOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesnrEmballagetype(NULL);
        } else {
            $this->setThesnrEmballagetype($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setEmballagetype(NULL);
        } else {
            $this->setEmballagetype($v->getThesaurusItemnummer());
        }

        $this->aEmballagetypeOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype($this);
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
    public function getEmballagetypeOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmballagetypeOmschrijving === null && ($this->thesnr_emballagetype !== null && $this->emballagetype !== null) && $doQuery) {
            $this->aEmballagetypeOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesnr_emballagetype, $this->emballagetype), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmballagetypeOmschrijving->addGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype($this);
             */
        }

        return $this->aEmballagetypeOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsPrescriptieProduct The current object (for fluent API support)
     * @throws PropelException
     */
    public function setBasiseenheidProductOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesnrBasiseenheidProduct(NULL);
        } else {
            $this->setThesnrBasiseenheidProduct($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setBasiseenheidProduct(NULL);
        } else {
            $this->setBasiseenheidProduct($v->getThesaurusItemnummer());
        }

        $this->aBasiseenheidProductOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct($this);
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
    public function getBasiseenheidProductOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aBasiseenheidProductOmschrijving === null && ($this->thesnr_basiseenheid_product !== null && $this->basiseenheid_product !== null) && $doQuery) {
            $this->aBasiseenheidProductOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesnr_basiseenheid_product, $this->basiseenheid_product), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aBasiseenheidProductOmschrijving->addGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct($this);
             */
        }

        return $this->aBasiseenheidProductOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsPrescriptieProduct The current object (for fluent API support)
     * @throws PropelException
     */
    public function setHulpmiddelAardOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesnrHulpmiddelAard(NULL);
        } else {
            $this->setThesnrHulpmiddelAard($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setHulpmiddelAard(NULL);
        } else {
            $this->setHulpmiddelAard($v->getThesaurusItemnummer());
        }

        $this->aHulpmiddelAardOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard($this);
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
    public function getHulpmiddelAardOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aHulpmiddelAardOmschrijving === null && ($this->thesnr_hulpmiddel_aard !== null && $this->hulpmiddel_aard !== null) && $doQuery) {
            $this->aHulpmiddelAardOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesnr_hulpmiddel_aard, $this->hulpmiddel_aard), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aHulpmiddelAardOmschrijving->addGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard($this);
             */
        }

        return $this->aHulpmiddelAardOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsPrescriptieProduct The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRedenHulpstofIdentificerendOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesnrRedenHulpstofIdentificerend(NULL);
        } else {
            $this->setThesnrRedenHulpstofIdentificerend($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setRedenHulpstofIdentificerend(NULL);
        } else {
            $this->setRedenHulpstofIdentificerend($v->getThesaurusItemnummer());
        }

        $this->aRedenHulpstofIdentificerendOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend($this);
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
    public function getRedenHulpstofIdentificerendOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRedenHulpstofIdentificerendOmschrijving === null && ($this->thesnr_reden_hulpstof_identificerend !== null && $this->reden_hulpstof_identificerend !== null) && $doQuery) {
            $this->aRedenHulpstofIdentificerendOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesnr_reden_hulpstof_identificerend, $this->reden_hulpstof_identificerend), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRedenHulpstofIdentificerendOmschrijving->addGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend($this);
             */
        }

        return $this->aRedenHulpstofIdentificerendOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsPrescriptieProduct The current object (for fluent API support)
     * @throws PropelException
     */
    public function setVerwijzingExtraKenmerkOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesnrVerwijzingExtraKenmerk(NULL);
        } else {
            $this->setThesnrVerwijzingExtraKenmerk($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setVerwijzingExtraKenmerk(NULL);
        } else {
            $this->setVerwijzingExtraKenmerk($v->getThesaurusItemnummer());
        }

        $this->aVerwijzingExtraKenmerkOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk($this);
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
    public function getVerwijzingExtraKenmerkOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aVerwijzingExtraKenmerkOmschrijving === null && ($this->thesnr_verwijzing_extra_kenmerk !== null && $this->verwijzing_extra_kenmerk !== null) && $doQuery) {
            $this->aVerwijzingExtraKenmerkOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesnr_verwijzing_extra_kenmerk, $this->verwijzing_extra_kenmerk), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aVerwijzingExtraKenmerkOmschrijving->addGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk($this);
             */
        }

        return $this->aVerwijzingExtraKenmerkOmschrijving;
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
    }

    /**
     * Clears out the collGsArtikelEigenschappens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsPrescriptieProduct The current object (for fluent API support)
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
     * If this GsPrescriptieProduct is new, it will return
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
                    ->filterByGsPrescriptieProduct($this)
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
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setGsArtikelEigenschappens(PropelCollection $gsArtikelEigenschappens, PropelPDO $con = null)
    {
        $gsArtikelEigenschappensToDelete = $this->getGsArtikelEigenschappens(new Criteria(), $con)->diff($gsArtikelEigenschappens);


        $this->gsArtikelEigenschappensScheduledForDeletion = $gsArtikelEigenschappensToDelete;

        foreach ($gsArtikelEigenschappensToDelete as $gsArtikelEigenschappenRemoved) {
            $gsArtikelEigenschappenRemoved->setGsPrescriptieProduct(null);
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
                ->filterByGsPrescriptieProduct($this)
                ->count($con);
        }

        return count($this->collGsArtikelEigenschappens);
    }

    /**
     * Method called to associate a GsArtikelEigenschappen object to this object
     * through the GsArtikelEigenschappen foreign key attribute.
     *
     * @param    GsArtikelEigenschappen $l GsArtikelEigenschappen
     * @return GsPrescriptieProduct The current object (for fluent API support)
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
        $gsArtikelEigenschappen->setGsPrescriptieProduct($this);
    }

    /**
     * @param	GsArtikelEigenschappen $gsArtikelEigenschappen The gsArtikelEigenschappen object to remove.
     * @return GsPrescriptieProduct The current object (for fluent API support)
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
            $gsArtikelEigenschappen->setGsPrescriptieProduct(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * @return GsPrescriptieProduct The current object (for fluent API support)
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
     * If this GsPrescriptieProduct is new, it will return
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
                    ->filterByGsPrescriptieProduct($this)
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
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setGsBijzondereKenmerkens(PropelCollection $gsBijzondereKenmerkens, PropelPDO $con = null)
    {
        $gsBijzondereKenmerkensToDelete = $this->getGsBijzondereKenmerkens(new Criteria(), $con)->diff($gsBijzondereKenmerkens);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsBijzondereKenmerkensScheduledForDeletion = clone $gsBijzondereKenmerkensToDelete;

        foreach ($gsBijzondereKenmerkensToDelete as $gsBijzondereKenmerkenRemoved) {
            $gsBijzondereKenmerkenRemoved->setGsPrescriptieProduct(null);
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
                ->filterByGsPrescriptieProduct($this)
                ->count($con);
        }

        return count($this->collGsBijzondereKenmerkens);
    }

    /**
     * Method called to associate a GsBijzondereKenmerken object to this object
     * through the GsBijzondereKenmerken foreign key attribute.
     *
     * @param    GsBijzondereKenmerken $l GsBijzondereKenmerken
     * @return GsPrescriptieProduct The current object (for fluent API support)
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
        $gsBijzondereKenmerken->setGsPrescriptieProduct($this);
    }

    /**
     * @param	GsBijzondereKenmerken $gsBijzondereKenmerken The gsBijzondereKenmerken object to remove.
     * @return GsPrescriptieProduct The current object (for fluent API support)
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
            $gsBijzondereKenmerken->setGsPrescriptieProduct(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsBijzondereKenmerkens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsBijzondereKenmerkens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * @return GsPrescriptieProduct The current object (for fluent API support)
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
     * If this GsPrescriptieProduct is new, it will return
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
                    ->filterByGsPrescriptieProduct($this)
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
     * @return GsPrescriptieProduct The current object (for fluent API support)
     */
    public function setGsHandelsproductens(PropelCollection $gsHandelsproductens, PropelPDO $con = null)
    {
        $gsHandelsproductensToDelete = $this->getGsHandelsproductens(new Criteria(), $con)->diff($gsHandelsproductens);


        $this->gsHandelsproductensScheduledForDeletion = $gsHandelsproductensToDelete;

        foreach ($gsHandelsproductensToDelete as $gsHandelsproductenRemoved) {
            $gsHandelsproductenRemoved->setGsPrescriptieProduct(null);
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
                ->filterByGsPrescriptieProduct($this)
                ->count($con);
        }

        return count($this->collGsHandelsproductens);
    }

    /**
     * Method called to associate a GsHandelsproducten object to this object
     * through the GsHandelsproducten foreign key attribute.
     *
     * @param    GsHandelsproducten $l GsHandelsproducten
     * @return GsPrescriptieProduct The current object (for fluent API support)
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
        $gsHandelsproducten->setGsPrescriptieProduct($this);
    }

    /**
     * @param	GsHandelsproducten $gsHandelsproducten The gsHandelsproducten object to remove.
     * @return GsPrescriptieProduct The current object (for fluent API support)
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
            $gsHandelsproducten->setGsPrescriptieProduct(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * Otherwise if this GsPrescriptieProduct is new, it will return
     * an empty collection; or if this GsPrescriptieProduct has previously
     * been saved, it will retrieve related GsHandelsproductens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsPrescriptieProduct.
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
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->prkcode = null;
        $this->naamnummer_prescriptie_product = null;
        $this->generiekeproductcode = null;
        $this->thesnr_reden_voorschrijven_hpk_niveau = null;
        $this->reden_voorschrijven_hpk_niveau = null;
        $this->thesnr_emballagetype = null;
        $this->emballagetype = null;
        $this->thesnr_basiseenheid_product = null;
        $this->basiseenheid_product = null;
        $this->productgrootte_algemeen = null;
        $this->thesnr_hulpmiddel_aard = null;
        $this->hulpmiddel_aard = null;
        $this->hulpmiddel_aard_hoeveelheid = null;
        $this->meervoudig_product_jn = null;
        $this->thesnr_reden_hulpstof_identificerend = null;
        $this->reden_hulpstof_identificerend = null;
        $this->thesnr_verwijzing_extra_kenmerk = null;
        $this->verwijzing_extra_kenmerk = null;
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
            if ($this->aGsGeneriekeProducten instanceof Persistent) {
              $this->aGsGeneriekeProducten->clearAllReferences($deep);
            }
            if ($this->aGsNamen instanceof Persistent) {
              $this->aGsNamen->clearAllReferences($deep);
            }
            if ($this->aRedenVoorschrijvenHpkNiveauOmschrijving instanceof Persistent) {
              $this->aRedenVoorschrijvenHpkNiveauOmschrijving->clearAllReferences($deep);
            }
            if ($this->aEmballagetypeOmschrijving instanceof Persistent) {
              $this->aEmballagetypeOmschrijving->clearAllReferences($deep);
            }
            if ($this->aBasiseenheidProductOmschrijving instanceof Persistent) {
              $this->aBasiseenheidProductOmschrijving->clearAllReferences($deep);
            }
            if ($this->aHulpmiddelAardOmschrijving instanceof Persistent) {
              $this->aHulpmiddelAardOmschrijving->clearAllReferences($deep);
            }
            if ($this->aRedenHulpstofIdentificerendOmschrijving instanceof Persistent) {
              $this->aRedenHulpstofIdentificerendOmschrijving->clearAllReferences($deep);
            }
            if ($this->aVerwijzingExtraKenmerkOmschrijving instanceof Persistent) {
              $this->aVerwijzingExtraKenmerkOmschrijving->clearAllReferences($deep);
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
        $this->aGsGeneriekeProducten = null;
        $this->aGsNamen = null;
        $this->aRedenVoorschrijvenHpkNiveauOmschrijving = null;
        $this->aEmballagetypeOmschrijving = null;
        $this->aBasiseenheidProductOmschrijving = null;
        $this->aHulpmiddelAardOmschrijving = null;
        $this->aRedenHulpstofIdentificerendOmschrijving = null;
        $this->aVerwijzingExtraKenmerkOmschrijving = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsPrescriptieProductPeer::DEFAULT_STRING_FORMAT);
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
