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
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaard;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery;

abstract class BaseGsNawGegevensGstandaard extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsNawGegevensGstandaardPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsNawGegevensGstandaardPeer
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
     * The value for the thesaurusnummer_soort_naw field.
     * @var        int
     */
    protected $thesaurusnummer_soort_naw;

    /**
     * The value for the naw_soort field.
     * @var        int
     */
    protected $naw_soort;

    /**
     * The value for the naw_nummer field.
     * @var        int
     */
    protected $naw_nummer;

    /**
     * The value for the memocode_onderneming_3_posities_alfanumeriek field.
     * @var        string
     */
    protected $memocode_onderneming_3_posities_alfanumeriek;

    /**
     * The value for the memocode_onderneming_2_posities_numeriek field.
     * @var        int
     */
    protected $memocode_onderneming_2_posities_numeriek;

    /**
     * The value for the naam field.
     * @var        string
     */
    protected $naam;

    /**
     * The value for the adres field.
     * @var        string
     */
    protected $adres;

    /**
     * The value for the postcode field.
     * @var        string
     */
    protected $postcode;

    /**
     * The value for the woonplaats field.
     * @var        string
     */
    protected $woonplaats;

    /**
     * The value for the land field.
     * @var        string
     */
    protected $land;

    /**
     * The value for the postbusnummer field.
     * @var        string
     */
    protected $postbusnummer;

    /**
     * The value for the postcode_postbus field.
     * @var        string
     */
    protected $postcode_postbus;

    /**
     * The value for the telefoonnummer_ondernemer field.
     * @var        string
     */
    protected $telefoonnummer_ondernemer;

    /**
     * The value for the faxnummer field.
     * @var        string
     */
    protected $faxnummer;

    /**
     * The value for the zoeknaam field.
     * @var        string
     */
    protected $zoeknaam;

    /**
     * The value for the land_memocode field.
     * @var        string
     */
    protected $land_memocode;

    /**
     * The value for the lic_nummer field.
     * @var        string
     */
    protected $lic_nummer;

    /**
     * The value for the gln_code field.
     * @var        string
     */
    protected $gln_code;

    /**
     * The value for the uzovi_code field.
     * @var        int
     */
    protected $uzovi_code;

    /**
     * The value for the agb_code field.
     * @var        int
     */
    protected $agb_code;

    /**
     * The value for the reservenummer_1 field.
     * @var        int
     */
    protected $reservenummer_1;

    /**
     * The value for the reservenummer_2 field.
     * @var        int
     */
    protected $reservenummer_2;

    /**
     * The value for the slug field.
     * @var        string
     */
    protected $slug;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aSoortOmschrijving;

    /**
     * @var        PropelObjectCollection|GsArtikelEigenschappen[] Collection to store aggregation of GsArtikelEigenschappen objects.
     */
    protected $collGsArtikelEigenschappens;
    protected $collGsArtikelEigenschappensPartial;

    /**
     * @var        PropelObjectCollection|GsArtikelen[] Collection to store aggregation of GsArtikelen objects.
     */
    protected $collGsArtikelensRelatedByLeverancierKode;
    protected $collGsArtikelensRelatedByLeverancierKodePartial;

    /**
     * @var        PropelObjectCollection|GsArtikelen[] Collection to store aggregation of GsArtikelen objects.
     */
    protected $collGsArtikelensRelatedByImporteurKode;
    protected $collGsArtikelensRelatedByImporteurKodePartial;

    /**
     * @var        PropelObjectCollection|GsArtikelen[] Collection to store aggregation of GsArtikelen objects.
     */
    protected $collGsArtikelensRelatedByRegistratiehouderKode;
    protected $collGsArtikelensRelatedByRegistratiehouderKodePartial;

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
    protected $gsArtikelensRelatedByLeverancierKodeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsArtikelensRelatedByImporteurKodeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsArtikelensRelatedByRegistratiehouderKodeScheduledForDeletion = null;

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
     * Get the [thesaurusnummer_soort_naw] column value.
     *
     * @return int
     */
    public function getThesaurusnummerSoortNaw()
    {

        return $this->thesaurusnummer_soort_naw;
    }

    /**
     * Get the [naw_soort] column value.
     *
     * @return int
     */
    public function getNawSoort()
    {

        return $this->naw_soort;
    }

    /**
     * Get the [naw_nummer] column value.
     *
     * @return int
     */
    public function getNawNummer()
    {

        return $this->naw_nummer;
    }

    /**
     * Get the [memocode_onderneming_3_posities_alfanumeriek] column value.
     *
     * @return string
     */
    public function getMemocodeOnderneming3PositiesAlfanumeriek()
    {

        return $this->memocode_onderneming_3_posities_alfanumeriek;
    }

    /**
     * Get the [memocode_onderneming_2_posities_numeriek] column value.
     *
     * @return int
     */
    public function getMemocodeOnderneming2PositiesNumeriek()
    {

        return $this->memocode_onderneming_2_posities_numeriek;
    }

    /**
     * Get the [naam] column value.
     *
     * @return string
     */
    public function getNaam()
    {

        return $this->naam;
    }

    /**
     * Get the [adres] column value.
     *
     * @return string
     */
    public function getAdres()
    {

        return $this->adres;
    }

    /**
     * Get the [postcode] column value.
     *
     * @return string
     */
    public function getPostcode()
    {

        return $this->postcode;
    }

    /**
     * Get the [woonplaats] column value.
     *
     * @return string
     */
    public function getWoonplaats()
    {

        return $this->woonplaats;
    }

    /**
     * Get the [land] column value.
     *
     * @return string
     */
    public function getLand()
    {

        return $this->land;
    }

    /**
     * Get the [postbusnummer] column value.
     *
     * @return string
     */
    public function getPostbusnummer()
    {

        return $this->postbusnummer;
    }

    /**
     * Get the [postcode_postbus] column value.
     *
     * @return string
     */
    public function getPostcodePostbus()
    {

        return $this->postcode_postbus;
    }

    /**
     * Get the [telefoonnummer_ondernemer] column value.
     *
     * @return string
     */
    public function getTelefoonnummerOndernemer()
    {

        return $this->telefoonnummer_ondernemer;
    }

    /**
     * Get the [faxnummer] column value.
     *
     * @return string
     */
    public function getFaxnummer()
    {

        return $this->faxnummer;
    }

    /**
     * Get the [zoeknaam] column value.
     *
     * @return string
     */
    public function getZoeknaam()
    {

        return $this->zoeknaam;
    }

    /**
     * Get the [land_memocode] column value.
     *
     * @return string
     */
    public function getLandMemocode()
    {

        return $this->land_memocode;
    }

    /**
     * Get the [lic_nummer] column value.
     *
     * @return string
     */
    public function getLicNummer()
    {

        return $this->lic_nummer;
    }

    /**
     * Get the [gln_code] column value.
     *
     * @return string
     */
    public function getGlnCode()
    {

        return $this->gln_code;
    }

    /**
     * Get the [uzovi_code] column value.
     *
     * @return int
     */
    public function getUzoviCode()
    {

        return $this->uzovi_code;
    }

    /**
     * Get the [agb_code] column value.
     *
     * @return int
     */
    public function getAgbCode()
    {

        return $this->agb_code;
    }

    /**
     * Get the [reservenummer_1] column value.
     *
     * @return int
     */
    public function getReservenummer1()
    {

        return $this->reservenummer_1;
    }

    /**
     * Get the [reservenummer_2] column value.
     *
     * @return int
     */
    public function getReservenummer2()
    {

        return $this->reservenummer_2;
    }

    /**
     * Get the [slug] column value.
     *
     * @return string
     */
    public function getSlug()
    {

        return $this->slug;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [thesaurusnummer_soort_naw] column.
     *
     * @param  int $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setThesaurusnummerSoortNaw($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusnummer_soort_naw !== $v) {
            $this->thesaurusnummer_soort_naw = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::THESAURUSNUMMER_SOORT_NAW;
        }

        if ($this->aSoortOmschrijving !== null && $this->aSoortOmschrijving->getThesaurusnummer() !== $v) {
            $this->aSoortOmschrijving = null;
        }


        return $this;
    } // setThesaurusnummerSoortNaw()

    /**
     * Set the value of [naw_soort] column.
     *
     * @param  int $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setNawSoort($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->naw_soort !== $v) {
            $this->naw_soort = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::NAW_SOORT;
        }

        if ($this->aSoortOmschrijving !== null && $this->aSoortOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aSoortOmschrijving = null;
        }


        return $this;
    } // setNawSoort()

    /**
     * Set the value of [naw_nummer] column.
     *
     * @param  int $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setNawNummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->naw_nummer !== $v) {
            $this->naw_nummer = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::NAW_NUMMER;
        }


        return $this;
    } // setNawNummer()

    /**
     * Set the value of [memocode_onderneming_3_posities_alfanumeriek] column.
     *
     * @param  string $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setMemocodeOnderneming3PositiesAlfanumeriek($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->memocode_onderneming_3_posities_alfanumeriek !== $v) {
            $this->memocode_onderneming_3_posities_alfanumeriek = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::MEMOCODE_ONDERNEMING_3_POSITIES_ALFANUMERIEK;
        }


        return $this;
    } // setMemocodeOnderneming3PositiesAlfanumeriek()

    /**
     * Set the value of [memocode_onderneming_2_posities_numeriek] column.
     *
     * @param  int $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setMemocodeOnderneming2PositiesNumeriek($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->memocode_onderneming_2_posities_numeriek !== $v) {
            $this->memocode_onderneming_2_posities_numeriek = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::MEMOCODE_ONDERNEMING_2_POSITIES_NUMERIEK;
        }


        return $this;
    } // setMemocodeOnderneming2PositiesNumeriek()

    /**
     * Set the value of [naam] column.
     *
     * @param  string $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setNaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->naam !== $v) {
            $this->naam = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::NAAM;
        }


        return $this;
    } // setNaam()

    /**
     * Set the value of [adres] column.
     *
     * @param  string $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setAdres($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->adres !== $v) {
            $this->adres = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::ADRES;
        }


        return $this;
    } // setAdres()

    /**
     * Set the value of [postcode] column.
     *
     * @param  string $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setPostcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->postcode !== $v) {
            $this->postcode = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::POSTCODE;
        }


        return $this;
    } // setPostcode()

    /**
     * Set the value of [woonplaats] column.
     *
     * @param  string $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setWoonplaats($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->woonplaats !== $v) {
            $this->woonplaats = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::WOONPLAATS;
        }


        return $this;
    } // setWoonplaats()

    /**
     * Set the value of [land] column.
     *
     * @param  string $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setLand($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->land !== $v) {
            $this->land = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::LAND;
        }


        return $this;
    } // setLand()

    /**
     * Set the value of [postbusnummer] column.
     *
     * @param  string $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setPostbusnummer($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->postbusnummer !== $v) {
            $this->postbusnummer = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::POSTBUSNUMMER;
        }


        return $this;
    } // setPostbusnummer()

    /**
     * Set the value of [postcode_postbus] column.
     *
     * @param  string $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setPostcodePostbus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->postcode_postbus !== $v) {
            $this->postcode_postbus = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::POSTCODE_POSTBUS;
        }


        return $this;
    } // setPostcodePostbus()

    /**
     * Set the value of [telefoonnummer_ondernemer] column.
     *
     * @param  string $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setTelefoonnummerOndernemer($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->telefoonnummer_ondernemer !== $v) {
            $this->telefoonnummer_ondernemer = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::TELEFOONNUMMER_ONDERNEMER;
        }


        return $this;
    } // setTelefoonnummerOndernemer()

    /**
     * Set the value of [faxnummer] column.
     *
     * @param  string $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setFaxnummer($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->faxnummer !== $v) {
            $this->faxnummer = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::FAXNUMMER;
        }


        return $this;
    } // setFaxnummer()

    /**
     * Set the value of [zoeknaam] column.
     *
     * @param  string $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setZoeknaam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->zoeknaam !== $v) {
            $this->zoeknaam = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::ZOEKNAAM;
        }


        return $this;
    } // setZoeknaam()

    /**
     * Set the value of [land_memocode] column.
     *
     * @param  string $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setLandMemocode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->land_memocode !== $v) {
            $this->land_memocode = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::LAND_MEMOCODE;
        }


        return $this;
    } // setLandMemocode()

    /**
     * Set the value of [lic_nummer] column.
     *
     * @param  string $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setLicNummer($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->lic_nummer !== $v) {
            $this->lic_nummer = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::LIC_NUMMER;
        }


        return $this;
    } // setLicNummer()

    /**
     * Set the value of [gln_code] column.
     *
     * @param  string $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setGlnCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gln_code !== $v) {
            $this->gln_code = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::GLN_CODE;
        }


        return $this;
    } // setGlnCode()

    /**
     * Set the value of [uzovi_code] column.
     *
     * @param  int $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setUzoviCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->uzovi_code !== $v) {
            $this->uzovi_code = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::UZOVI_CODE;
        }


        return $this;
    } // setUzoviCode()

    /**
     * Set the value of [agb_code] column.
     *
     * @param  int $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setAgbCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agb_code !== $v) {
            $this->agb_code = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::AGB_CODE;
        }


        return $this;
    } // setAgbCode()

    /**
     * Set the value of [reservenummer_1] column.
     *
     * @param  int $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setReservenummer1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reservenummer_1 !== $v) {
            $this->reservenummer_1 = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::RESERVENUMMER_1;
        }


        return $this;
    } // setReservenummer1()

    /**
     * Set the value of [reservenummer_2] column.
     *
     * @param  int $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setReservenummer2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reservenummer_2 !== $v) {
            $this->reservenummer_2 = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::RESERVENUMMER_2;
        }


        return $this;
    } // setReservenummer2()

    /**
     * Set the value of [slug] column.
     *
     * @param  string $v new value
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setSlug($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->slug !== $v) {
            $this->slug = $v;
            $this->modifiedColumns[] = GsNawGegevensGstandaardPeer::SLUG;
        }


        return $this;
    } // setSlug()

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
            $this->thesaurusnummer_soort_naw = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->naw_soort = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->naw_nummer = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->memocode_onderneming_3_posities_alfanumeriek = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->memocode_onderneming_2_posities_numeriek = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->naam = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->adres = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->postcode = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->woonplaats = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->land = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->postbusnummer = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->postcode_postbus = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->telefoonnummer_ondernemer = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->faxnummer = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->zoeknaam = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->land_memocode = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->lic_nummer = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->gln_code = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->uzovi_code = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->agb_code = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->reservenummer_1 = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->reservenummer_2 = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->slug = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 25; // 25 = GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsNawGegevensGstandaard object", $e);
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

        if ($this->aSoortOmschrijving !== null && $this->thesaurusnummer_soort_naw !== $this->aSoortOmschrijving->getThesaurusnummer()) {
            $this->aSoortOmschrijving = null;
        }
        if ($this->aSoortOmschrijving !== null && $this->naw_soort !== $this->aSoortOmschrijving->getThesaurusItemnummer()) {
            $this->aSoortOmschrijving = null;
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
            $con = Propel::getConnection(GsNawGegevensGstandaardPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsNawGegevensGstandaardPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSoortOmschrijving = null;
            $this->collGsArtikelEigenschappens = null;

            $this->collGsArtikelensRelatedByLeverancierKode = null;

            $this->collGsArtikelensRelatedByImporteurKode = null;

            $this->collGsArtikelensRelatedByRegistratiehouderKode = null;

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
            $con = Propel::getConnection(GsNawGegevensGstandaardPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsNawGegevensGstandaardQuery::create()
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
            $con = Propel::getConnection(GsNawGegevensGstandaardPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            // sluggable behavior

            if ($this->isColumnModified(GsNawGegevensGstandaardPeer::SLUG) && $this->getSlug()) {
                $this->setSlug($this->makeSlugUnique($this->getSlug()));
            } elseif ($this->isColumnModified(GsNawGegevensGstandaardPeer::NAAM)) {
                $this->setSlug($this->createSlug());
            } elseif (!$this->getSlug()) {
                $this->setSlug($this->createSlug());
            }
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
                GsNawGegevensGstandaardPeer::addInstanceToPool($this);
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

            if ($this->aSoortOmschrijving !== null) {
                if ($this->aSoortOmschrijving->isModified() || $this->aSoortOmschrijving->isNew()) {
                    $affectedRows += $this->aSoortOmschrijving->save($con);
                }
                $this->setSoortOmschrijving($this->aSoortOmschrijving);
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

            if ($this->gsArtikelensRelatedByLeverancierKodeScheduledForDeletion !== null) {
                if (!$this->gsArtikelensRelatedByLeverancierKodeScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsArtikelensRelatedByLeverancierKodeScheduledForDeletion as $gsArtikelenRelatedByLeverancierKode) {
                        // need to save related object because we set the relation to null
                        $gsArtikelenRelatedByLeverancierKode->save($con);
                    }
                    $this->gsArtikelensRelatedByLeverancierKodeScheduledForDeletion = null;
                }
            }

            if ($this->collGsArtikelensRelatedByLeverancierKode !== null) {
                foreach ($this->collGsArtikelensRelatedByLeverancierKode as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsArtikelensRelatedByImporteurKodeScheduledForDeletion !== null) {
                if (!$this->gsArtikelensRelatedByImporteurKodeScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsArtikelensRelatedByImporteurKodeScheduledForDeletion as $gsArtikelenRelatedByImporteurKode) {
                        // need to save related object because we set the relation to null
                        $gsArtikelenRelatedByImporteurKode->save($con);
                    }
                    $this->gsArtikelensRelatedByImporteurKodeScheduledForDeletion = null;
                }
            }

            if ($this->collGsArtikelensRelatedByImporteurKode !== null) {
                foreach ($this->collGsArtikelensRelatedByImporteurKode as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsArtikelensRelatedByRegistratiehouderKodeScheduledForDeletion !== null) {
                if (!$this->gsArtikelensRelatedByRegistratiehouderKodeScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsArtikelensRelatedByRegistratiehouderKodeScheduledForDeletion as $gsArtikelenRelatedByRegistratiehouderKode) {
                        // need to save related object because we set the relation to null
                        $gsArtikelenRelatedByRegistratiehouderKode->save($con);
                    }
                    $this->gsArtikelensRelatedByRegistratiehouderKodeScheduledForDeletion = null;
                }
            }

            if ($this->collGsArtikelensRelatedByRegistratiehouderKode !== null) {
                foreach ($this->collGsArtikelensRelatedByRegistratiehouderKode as $referrerFK) {
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
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::THESAURUSNUMMER_SOORT_NAW)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusnummer_soort_naw`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::NAW_SOORT)) {
            $modifiedColumns[':p' . $index++]  = '`naw_soort`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::NAW_NUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`naw_nummer`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::MEMOCODE_ONDERNEMING_3_POSITIES_ALFANUMERIEK)) {
            $modifiedColumns[':p' . $index++]  = '`memocode_onderneming_3_posities_alfanumeriek`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::MEMOCODE_ONDERNEMING_2_POSITIES_NUMERIEK)) {
            $modifiedColumns[':p' . $index++]  = '`memocode_onderneming_2_posities_numeriek`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::NAAM)) {
            $modifiedColumns[':p' . $index++]  = '`naam`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::ADRES)) {
            $modifiedColumns[':p' . $index++]  = '`adres`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::POSTCODE)) {
            $modifiedColumns[':p' . $index++]  = '`postcode`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::WOONPLAATS)) {
            $modifiedColumns[':p' . $index++]  = '`woonplaats`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::LAND)) {
            $modifiedColumns[':p' . $index++]  = '`land`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::POSTBUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`postbusnummer`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::POSTCODE_POSTBUS)) {
            $modifiedColumns[':p' . $index++]  = '`postcode_postbus`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::TELEFOONNUMMER_ONDERNEMER)) {
            $modifiedColumns[':p' . $index++]  = '`telefoonnummer_ondernemer`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::FAXNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`faxnummer`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::ZOEKNAAM)) {
            $modifiedColumns[':p' . $index++]  = '`zoeknaam`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::LAND_MEMOCODE)) {
            $modifiedColumns[':p' . $index++]  = '`land_memocode`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::LIC_NUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`lic_nummer`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::GLN_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`gln_code`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::UZOVI_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`uzovi_code`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::AGB_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`agb_code`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::RESERVENUMMER_1)) {
            $modifiedColumns[':p' . $index++]  = '`reservenummer_1`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::RESERVENUMMER_2)) {
            $modifiedColumns[':p' . $index++]  = '`reservenummer_2`';
        }
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::SLUG)) {
            $modifiedColumns[':p' . $index++]  = '`slug`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_naw_gegevens_gstandaard` (%s) VALUES (%s)',
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
                    case '`thesaurusnummer_soort_naw`':
                        $stmt->bindValue($identifier, $this->thesaurusnummer_soort_naw, PDO::PARAM_INT);
                        break;
                    case '`naw_soort`':
                        $stmt->bindValue($identifier, $this->naw_soort, PDO::PARAM_INT);
                        break;
                    case '`naw_nummer`':
                        $stmt->bindValue($identifier, $this->naw_nummer, PDO::PARAM_INT);
                        break;
                    case '`memocode_onderneming_3_posities_alfanumeriek`':
                        $stmt->bindValue($identifier, $this->memocode_onderneming_3_posities_alfanumeriek, PDO::PARAM_STR);
                        break;
                    case '`memocode_onderneming_2_posities_numeriek`':
                        $stmt->bindValue($identifier, $this->memocode_onderneming_2_posities_numeriek, PDO::PARAM_INT);
                        break;
                    case '`naam`':
                        $stmt->bindValue($identifier, $this->naam, PDO::PARAM_STR);
                        break;
                    case '`adres`':
                        $stmt->bindValue($identifier, $this->adres, PDO::PARAM_STR);
                        break;
                    case '`postcode`':
                        $stmt->bindValue($identifier, $this->postcode, PDO::PARAM_STR);
                        break;
                    case '`woonplaats`':
                        $stmt->bindValue($identifier, $this->woonplaats, PDO::PARAM_STR);
                        break;
                    case '`land`':
                        $stmt->bindValue($identifier, $this->land, PDO::PARAM_STR);
                        break;
                    case '`postbusnummer`':
                        $stmt->bindValue($identifier, $this->postbusnummer, PDO::PARAM_STR);
                        break;
                    case '`postcode_postbus`':
                        $stmt->bindValue($identifier, $this->postcode_postbus, PDO::PARAM_STR);
                        break;
                    case '`telefoonnummer_ondernemer`':
                        $stmt->bindValue($identifier, $this->telefoonnummer_ondernemer, PDO::PARAM_STR);
                        break;
                    case '`faxnummer`':
                        $stmt->bindValue($identifier, $this->faxnummer, PDO::PARAM_STR);
                        break;
                    case '`zoeknaam`':
                        $stmt->bindValue($identifier, $this->zoeknaam, PDO::PARAM_STR);
                        break;
                    case '`land_memocode`':
                        $stmt->bindValue($identifier, $this->land_memocode, PDO::PARAM_STR);
                        break;
                    case '`lic_nummer`':
                        $stmt->bindValue($identifier, $this->lic_nummer, PDO::PARAM_STR);
                        break;
                    case '`gln_code`':
                        $stmt->bindValue($identifier, $this->gln_code, PDO::PARAM_STR);
                        break;
                    case '`uzovi_code`':
                        $stmt->bindValue($identifier, $this->uzovi_code, PDO::PARAM_INT);
                        break;
                    case '`agb_code`':
                        $stmt->bindValue($identifier, $this->agb_code, PDO::PARAM_INT);
                        break;
                    case '`reservenummer_1`':
                        $stmt->bindValue($identifier, $this->reservenummer_1, PDO::PARAM_INT);
                        break;
                    case '`reservenummer_2`':
                        $stmt->bindValue($identifier, $this->reservenummer_2, PDO::PARAM_INT);
                        break;
                    case '`slug`':
                        $stmt->bindValue($identifier, $this->slug, PDO::PARAM_STR);
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

            if ($this->aSoortOmschrijving !== null) {
                if (!$this->aSoortOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSoortOmschrijving->getValidationFailures());
                }
            }


            if (($retval = GsNawGegevensGstandaardPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collGsArtikelEigenschappens !== null) {
                    foreach ($this->collGsArtikelEigenschappens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsArtikelensRelatedByLeverancierKode !== null) {
                    foreach ($this->collGsArtikelensRelatedByLeverancierKode as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsArtikelensRelatedByImporteurKode !== null) {
                    foreach ($this->collGsArtikelensRelatedByImporteurKode as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsArtikelensRelatedByRegistratiehouderKode !== null) {
                    foreach ($this->collGsArtikelensRelatedByRegistratiehouderKode as $referrerFK) {
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
        $pos = GsNawGegevensGstandaardPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getThesaurusnummerSoortNaw();
                break;
            case 3:
                return $this->getNawSoort();
                break;
            case 4:
                return $this->getNawNummer();
                break;
            case 5:
                return $this->getMemocodeOnderneming3PositiesAlfanumeriek();
                break;
            case 6:
                return $this->getMemocodeOnderneming2PositiesNumeriek();
                break;
            case 7:
                return $this->getNaam();
                break;
            case 8:
                return $this->getAdres();
                break;
            case 9:
                return $this->getPostcode();
                break;
            case 10:
                return $this->getWoonplaats();
                break;
            case 11:
                return $this->getLand();
                break;
            case 12:
                return $this->getPostbusnummer();
                break;
            case 13:
                return $this->getPostcodePostbus();
                break;
            case 14:
                return $this->getTelefoonnummerOndernemer();
                break;
            case 15:
                return $this->getFaxnummer();
                break;
            case 16:
                return $this->getZoeknaam();
                break;
            case 17:
                return $this->getLandMemocode();
                break;
            case 18:
                return $this->getLicNummer();
                break;
            case 19:
                return $this->getGlnCode();
                break;
            case 20:
                return $this->getUzoviCode();
                break;
            case 21:
                return $this->getAgbCode();
                break;
            case 22:
                return $this->getReservenummer1();
                break;
            case 23:
                return $this->getReservenummer2();
                break;
            case 24:
                return $this->getSlug();
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
        if (isset($alreadyDumpedObjects['GsNawGegevensGstandaard'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsNawGegevensGstandaard'][serialize($this->getPrimaryKey())] = true;
        $keys = GsNawGegevensGstandaardPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getThesaurusnummerSoortNaw(),
            $keys[3] => $this->getNawSoort(),
            $keys[4] => $this->getNawNummer(),
            $keys[5] => $this->getMemocodeOnderneming3PositiesAlfanumeriek(),
            $keys[6] => $this->getMemocodeOnderneming2PositiesNumeriek(),
            $keys[7] => $this->getNaam(),
            $keys[8] => $this->getAdres(),
            $keys[9] => $this->getPostcode(),
            $keys[10] => $this->getWoonplaats(),
            $keys[11] => $this->getLand(),
            $keys[12] => $this->getPostbusnummer(),
            $keys[13] => $this->getPostcodePostbus(),
            $keys[14] => $this->getTelefoonnummerOndernemer(),
            $keys[15] => $this->getFaxnummer(),
            $keys[16] => $this->getZoeknaam(),
            $keys[17] => $this->getLandMemocode(),
            $keys[18] => $this->getLicNummer(),
            $keys[19] => $this->getGlnCode(),
            $keys[20] => $this->getUzoviCode(),
            $keys[21] => $this->getAgbCode(),
            $keys[22] => $this->getReservenummer1(),
            $keys[23] => $this->getReservenummer2(),
            $keys[24] => $this->getSlug(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSoortOmschrijving) {
                $result['SoortOmschrijving'] = $this->aSoortOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collGsArtikelEigenschappens) {
                $result['GsArtikelEigenschappens'] = $this->collGsArtikelEigenschappens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsArtikelensRelatedByLeverancierKode) {
                $result['GsArtikelensRelatedByLeverancierKode'] = $this->collGsArtikelensRelatedByLeverancierKode->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsArtikelensRelatedByImporteurKode) {
                $result['GsArtikelensRelatedByImporteurKode'] = $this->collGsArtikelensRelatedByImporteurKode->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsArtikelensRelatedByRegistratiehouderKode) {
                $result['GsArtikelensRelatedByRegistratiehouderKode'] = $this->collGsArtikelensRelatedByRegistratiehouderKode->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = GsNawGegevensGstandaardPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setThesaurusnummerSoortNaw($value);
                break;
            case 3:
                $this->setNawSoort($value);
                break;
            case 4:
                $this->setNawNummer($value);
                break;
            case 5:
                $this->setMemocodeOnderneming3PositiesAlfanumeriek($value);
                break;
            case 6:
                $this->setMemocodeOnderneming2PositiesNumeriek($value);
                break;
            case 7:
                $this->setNaam($value);
                break;
            case 8:
                $this->setAdres($value);
                break;
            case 9:
                $this->setPostcode($value);
                break;
            case 10:
                $this->setWoonplaats($value);
                break;
            case 11:
                $this->setLand($value);
                break;
            case 12:
                $this->setPostbusnummer($value);
                break;
            case 13:
                $this->setPostcodePostbus($value);
                break;
            case 14:
                $this->setTelefoonnummerOndernemer($value);
                break;
            case 15:
                $this->setFaxnummer($value);
                break;
            case 16:
                $this->setZoeknaam($value);
                break;
            case 17:
                $this->setLandMemocode($value);
                break;
            case 18:
                $this->setLicNummer($value);
                break;
            case 19:
                $this->setGlnCode($value);
                break;
            case 20:
                $this->setUzoviCode($value);
                break;
            case 21:
                $this->setAgbCode($value);
                break;
            case 22:
                $this->setReservenummer1($value);
                break;
            case 23:
                $this->setReservenummer2($value);
                break;
            case 24:
                $this->setSlug($value);
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
        $keys = GsNawGegevensGstandaardPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setThesaurusnummerSoortNaw($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNawSoort($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNawNummer($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMemocodeOnderneming3PositiesAlfanumeriek($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMemocodeOnderneming2PositiesNumeriek($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNaam($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAdres($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPostcode($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setWoonplaats($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setLand($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPostbusnummer($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPostcodePostbus($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setTelefoonnummerOndernemer($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setFaxnummer($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setZoeknaam($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setLandMemocode($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setLicNummer($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setGlnCode($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setUzoviCode($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setAgbCode($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setReservenummer1($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setReservenummer2($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setSlug($arr[$keys[24]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsNawGegevensGstandaardPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::BESTANDNUMMER)) $criteria->add(GsNawGegevensGstandaardPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::MUTATIEKODE)) $criteria->add(GsNawGegevensGstandaardPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::THESAURUSNUMMER_SOORT_NAW)) $criteria->add(GsNawGegevensGstandaardPeer::THESAURUSNUMMER_SOORT_NAW, $this->thesaurusnummer_soort_naw);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::NAW_SOORT)) $criteria->add(GsNawGegevensGstandaardPeer::NAW_SOORT, $this->naw_soort);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::NAW_NUMMER)) $criteria->add(GsNawGegevensGstandaardPeer::NAW_NUMMER, $this->naw_nummer);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::MEMOCODE_ONDERNEMING_3_POSITIES_ALFANUMERIEK)) $criteria->add(GsNawGegevensGstandaardPeer::MEMOCODE_ONDERNEMING_3_POSITIES_ALFANUMERIEK, $this->memocode_onderneming_3_posities_alfanumeriek);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::MEMOCODE_ONDERNEMING_2_POSITIES_NUMERIEK)) $criteria->add(GsNawGegevensGstandaardPeer::MEMOCODE_ONDERNEMING_2_POSITIES_NUMERIEK, $this->memocode_onderneming_2_posities_numeriek);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::NAAM)) $criteria->add(GsNawGegevensGstandaardPeer::NAAM, $this->naam);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::ADRES)) $criteria->add(GsNawGegevensGstandaardPeer::ADRES, $this->adres);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::POSTCODE)) $criteria->add(GsNawGegevensGstandaardPeer::POSTCODE, $this->postcode);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::WOONPLAATS)) $criteria->add(GsNawGegevensGstandaardPeer::WOONPLAATS, $this->woonplaats);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::LAND)) $criteria->add(GsNawGegevensGstandaardPeer::LAND, $this->land);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::POSTBUSNUMMER)) $criteria->add(GsNawGegevensGstandaardPeer::POSTBUSNUMMER, $this->postbusnummer);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::POSTCODE_POSTBUS)) $criteria->add(GsNawGegevensGstandaardPeer::POSTCODE_POSTBUS, $this->postcode_postbus);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::TELEFOONNUMMER_ONDERNEMER)) $criteria->add(GsNawGegevensGstandaardPeer::TELEFOONNUMMER_ONDERNEMER, $this->telefoonnummer_ondernemer);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::FAXNUMMER)) $criteria->add(GsNawGegevensGstandaardPeer::FAXNUMMER, $this->faxnummer);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::ZOEKNAAM)) $criteria->add(GsNawGegevensGstandaardPeer::ZOEKNAAM, $this->zoeknaam);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::LAND_MEMOCODE)) $criteria->add(GsNawGegevensGstandaardPeer::LAND_MEMOCODE, $this->land_memocode);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::LIC_NUMMER)) $criteria->add(GsNawGegevensGstandaardPeer::LIC_NUMMER, $this->lic_nummer);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::GLN_CODE)) $criteria->add(GsNawGegevensGstandaardPeer::GLN_CODE, $this->gln_code);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::UZOVI_CODE)) $criteria->add(GsNawGegevensGstandaardPeer::UZOVI_CODE, $this->uzovi_code);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::AGB_CODE)) $criteria->add(GsNawGegevensGstandaardPeer::AGB_CODE, $this->agb_code);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::RESERVENUMMER_1)) $criteria->add(GsNawGegevensGstandaardPeer::RESERVENUMMER_1, $this->reservenummer_1);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::RESERVENUMMER_2)) $criteria->add(GsNawGegevensGstandaardPeer::RESERVENUMMER_2, $this->reservenummer_2);
        if ($this->isColumnModified(GsNawGegevensGstandaardPeer::SLUG)) $criteria->add(GsNawGegevensGstandaardPeer::SLUG, $this->slug);

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
        $criteria = new Criteria(GsNawGegevensGstandaardPeer::DATABASE_NAME);
        $criteria->add(GsNawGegevensGstandaardPeer::NAW_SOORT, $this->naw_soort);
        $criteria->add(GsNawGegevensGstandaardPeer::NAW_NUMMER, $this->naw_nummer);

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
        $pks[0] = $this->getNawSoort();
        $pks[1] = $this->getNawNummer();

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
        $this->setNawSoort($keys[0]);
        $this->setNawNummer($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getNawSoort()) && (null === $this->getNawNummer());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsNawGegevensGstandaard (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setThesaurusnummerSoortNaw($this->getThesaurusnummerSoortNaw());
        $copyObj->setNawSoort($this->getNawSoort());
        $copyObj->setNawNummer($this->getNawNummer());
        $copyObj->setMemocodeOnderneming3PositiesAlfanumeriek($this->getMemocodeOnderneming3PositiesAlfanumeriek());
        $copyObj->setMemocodeOnderneming2PositiesNumeriek($this->getMemocodeOnderneming2PositiesNumeriek());
        $copyObj->setNaam($this->getNaam());
        $copyObj->setAdres($this->getAdres());
        $copyObj->setPostcode($this->getPostcode());
        $copyObj->setWoonplaats($this->getWoonplaats());
        $copyObj->setLand($this->getLand());
        $copyObj->setPostbusnummer($this->getPostbusnummer());
        $copyObj->setPostcodePostbus($this->getPostcodePostbus());
        $copyObj->setTelefoonnummerOndernemer($this->getTelefoonnummerOndernemer());
        $copyObj->setFaxnummer($this->getFaxnummer());
        $copyObj->setZoeknaam($this->getZoeknaam());
        $copyObj->setLandMemocode($this->getLandMemocode());
        $copyObj->setLicNummer($this->getLicNummer());
        $copyObj->setGlnCode($this->getGlnCode());
        $copyObj->setUzoviCode($this->getUzoviCode());
        $copyObj->setAgbCode($this->getAgbCode());
        $copyObj->setReservenummer1($this->getReservenummer1());
        $copyObj->setReservenummer2($this->getReservenummer2());
        $copyObj->setSlug($this->getSlug());

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

            foreach ($this->getGsArtikelensRelatedByLeverancierKode() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsArtikelenRelatedByLeverancierKode($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsArtikelensRelatedByImporteurKode() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsArtikelenRelatedByImporteurKode($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsArtikelensRelatedByRegistratiehouderKode() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsArtikelenRelatedByRegistratiehouderKode($relObj->copy($deepCopy));
                }
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
     * @return GsNawGegevensGstandaard Clone of current object.
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
     * @return GsNawGegevensGstandaardPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsNawGegevensGstandaardPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSoortOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setThesaurusnummerSoortNaw(NULL);
        } else {
            $this->setThesaurusnummerSoortNaw($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setNawSoort(NULL);
        } else {
            $this->setNawSoort($v->getThesaurusItemnummer());
        }

        $this->aSoortOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsNawGegevensGstandaard($this);
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
    public function getSoortOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSoortOmschrijving === null && ($this->thesaurusnummer_soort_naw !== null && $this->naw_soort !== null) && $doQuery) {
            $this->aSoortOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->thesaurusnummer_soort_naw, $this->naw_soort), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSoortOmschrijving->addGsNawGegevensGstandaards($this);
             */
        }

        return $this->aSoortOmschrijving;
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
        if ('GsArtikelenRelatedByLeverancierKode' == $relationName) {
            $this->initGsArtikelensRelatedByLeverancierKode();
        }
        if ('GsArtikelenRelatedByImporteurKode' == $relationName) {
            $this->initGsArtikelensRelatedByImporteurKode();
        }
        if ('GsArtikelenRelatedByRegistratiehouderKode' == $relationName) {
            $this->initGsArtikelensRelatedByRegistratiehouderKode();
        }
    }

    /**
     * Clears out the collGsArtikelEigenschappens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
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
     * If this GsNawGegevensGstandaard is new, it will return
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
                    ->filterByGsNawGegevensGstandaard($this)
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
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setGsArtikelEigenschappens(PropelCollection $gsArtikelEigenschappens, PropelPDO $con = null)
    {
        $gsArtikelEigenschappensToDelete = $this->getGsArtikelEigenschappens(new Criteria(), $con)->diff($gsArtikelEigenschappens);


        $this->gsArtikelEigenschappensScheduledForDeletion = $gsArtikelEigenschappensToDelete;

        foreach ($gsArtikelEigenschappensToDelete as $gsArtikelEigenschappenRemoved) {
            $gsArtikelEigenschappenRemoved->setGsNawGegevensGstandaard(null);
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
                ->filterByGsNawGegevensGstandaard($this)
                ->count($con);
        }

        return count($this->collGsArtikelEigenschappens);
    }

    /**
     * Method called to associate a GsArtikelEigenschappen object to this object
     * through the GsArtikelEigenschappen foreign key attribute.
     *
     * @param    GsArtikelEigenschappen $l GsArtikelEigenschappen
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
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
        $gsArtikelEigenschappen->setGsNawGegevensGstandaard($this);
    }

    /**
     * @param	GsArtikelEigenschappen $gsArtikelEigenschappen The gsArtikelEigenschappen object to remove.
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
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
            $gsArtikelEigenschappen->setGsNawGegevensGstandaard(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
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
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
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
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelEigenschappen[] List of GsArtikelEigenschappen objects
     */
    public function getGsArtikelEigenschappensJoinGsVoorschrijfprGeneesmiddelIdentific($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelEigenschappenQuery::create(null, $criteria);
        $query->joinWith('GsVoorschrijfprGeneesmiddelIdentific', $join_behavior);

        return $this->getGsArtikelEigenschappens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
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
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelEigenschappens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
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
     * Clears out the collGsArtikelensRelatedByLeverancierKode collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     * @see        addGsArtikelensRelatedByLeverancierKode()
     */
    public function clearGsArtikelensRelatedByLeverancierKode()
    {
        $this->collGsArtikelensRelatedByLeverancierKode = null; // important to set this to null since that means it is uninitialized
        $this->collGsArtikelensRelatedByLeverancierKodePartial = null;

        return $this;
    }

    /**
     * reset is the collGsArtikelensRelatedByLeverancierKode collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsArtikelensRelatedByLeverancierKode($v = true)
    {
        $this->collGsArtikelensRelatedByLeverancierKodePartial = $v;
    }

    /**
     * Initializes the collGsArtikelensRelatedByLeverancierKode collection.
     *
     * By default this just sets the collGsArtikelensRelatedByLeverancierKode collection to an empty array (like clearcollGsArtikelensRelatedByLeverancierKode());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsArtikelensRelatedByLeverancierKode($overrideExisting = true)
    {
        if (null !== $this->collGsArtikelensRelatedByLeverancierKode && !$overrideExisting) {
            return;
        }
        $this->collGsArtikelensRelatedByLeverancierKode = new PropelObjectCollection();
        $this->collGsArtikelensRelatedByLeverancierKode->setModel('GsArtikelen');
    }

    /**
     * Gets an array of GsArtikelen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsNawGegevensGstandaard is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     * @throws PropelException
     */
    public function getGsArtikelensRelatedByLeverancierKode($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelensRelatedByLeverancierKodePartial && !$this->isNew();
        if (null === $this->collGsArtikelensRelatedByLeverancierKode || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelensRelatedByLeverancierKode) {
                // return empty collection
                $this->initGsArtikelensRelatedByLeverancierKode();
            } else {
                $collGsArtikelensRelatedByLeverancierKode = GsArtikelenQuery::create(null, $criteria)
                    ->filterByLeverancier($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsArtikelensRelatedByLeverancierKodePartial && count($collGsArtikelensRelatedByLeverancierKode)) {
                      $this->initGsArtikelensRelatedByLeverancierKode(false);

                      foreach ($collGsArtikelensRelatedByLeverancierKode as $obj) {
                        if (false == $this->collGsArtikelensRelatedByLeverancierKode->contains($obj)) {
                          $this->collGsArtikelensRelatedByLeverancierKode->append($obj);
                        }
                      }

                      $this->collGsArtikelensRelatedByLeverancierKodePartial = true;
                    }

                    $collGsArtikelensRelatedByLeverancierKode->getInternalIterator()->rewind();

                    return $collGsArtikelensRelatedByLeverancierKode;
                }

                if ($partial && $this->collGsArtikelensRelatedByLeverancierKode) {
                    foreach ($this->collGsArtikelensRelatedByLeverancierKode as $obj) {
                        if ($obj->isNew()) {
                            $collGsArtikelensRelatedByLeverancierKode[] = $obj;
                        }
                    }
                }

                $this->collGsArtikelensRelatedByLeverancierKode = $collGsArtikelensRelatedByLeverancierKode;
                $this->collGsArtikelensRelatedByLeverancierKodePartial = false;
            }
        }

        return $this->collGsArtikelensRelatedByLeverancierKode;
    }

    /**
     * Sets a collection of GsArtikelenRelatedByLeverancierKode objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsArtikelensRelatedByLeverancierKode A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setGsArtikelensRelatedByLeverancierKode(PropelCollection $gsArtikelensRelatedByLeverancierKode, PropelPDO $con = null)
    {
        $gsArtikelensRelatedByLeverancierKodeToDelete = $this->getGsArtikelensRelatedByLeverancierKode(new Criteria(), $con)->diff($gsArtikelensRelatedByLeverancierKode);


        $this->gsArtikelensRelatedByLeverancierKodeScheduledForDeletion = $gsArtikelensRelatedByLeverancierKodeToDelete;

        foreach ($gsArtikelensRelatedByLeverancierKodeToDelete as $gsArtikelenRelatedByLeverancierKodeRemoved) {
            $gsArtikelenRelatedByLeverancierKodeRemoved->setLeverancier(null);
        }

        $this->collGsArtikelensRelatedByLeverancierKode = null;
        foreach ($gsArtikelensRelatedByLeverancierKode as $gsArtikelenRelatedByLeverancierKode) {
            $this->addGsArtikelenRelatedByLeverancierKode($gsArtikelenRelatedByLeverancierKode);
        }

        $this->collGsArtikelensRelatedByLeverancierKode = $gsArtikelensRelatedByLeverancierKode;
        $this->collGsArtikelensRelatedByLeverancierKodePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsArtikelen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsArtikelen objects.
     * @throws PropelException
     */
    public function countGsArtikelensRelatedByLeverancierKode(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelensRelatedByLeverancierKodePartial && !$this->isNew();
        if (null === $this->collGsArtikelensRelatedByLeverancierKode || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelensRelatedByLeverancierKode) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsArtikelensRelatedByLeverancierKode());
            }
            $query = GsArtikelenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByLeverancier($this)
                ->count($con);
        }

        return count($this->collGsArtikelensRelatedByLeverancierKode);
    }

    /**
     * Method called to associate a GsArtikelen object to this object
     * through the GsArtikelen foreign key attribute.
     *
     * @param    GsArtikelen $l GsArtikelen
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function addGsArtikelenRelatedByLeverancierKode(GsArtikelen $l)
    {
        if ($this->collGsArtikelensRelatedByLeverancierKode === null) {
            $this->initGsArtikelensRelatedByLeverancierKode();
            $this->collGsArtikelensRelatedByLeverancierKodePartial = true;
        }

        if (!in_array($l, $this->collGsArtikelensRelatedByLeverancierKode->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsArtikelenRelatedByLeverancierKode($l);

            if ($this->gsArtikelensRelatedByLeverancierKodeScheduledForDeletion and $this->gsArtikelensRelatedByLeverancierKodeScheduledForDeletion->contains($l)) {
                $this->gsArtikelensRelatedByLeverancierKodeScheduledForDeletion->remove($this->gsArtikelensRelatedByLeverancierKodeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsArtikelenRelatedByLeverancierKode $gsArtikelenRelatedByLeverancierKode The gsArtikelenRelatedByLeverancierKode object to add.
     */
    protected function doAddGsArtikelenRelatedByLeverancierKode($gsArtikelenRelatedByLeverancierKode)
    {
        $this->collGsArtikelensRelatedByLeverancierKode[]= $gsArtikelenRelatedByLeverancierKode;
        $gsArtikelenRelatedByLeverancierKode->setLeverancier($this);
    }

    /**
     * @param	GsArtikelenRelatedByLeverancierKode $gsArtikelenRelatedByLeverancierKode The gsArtikelenRelatedByLeverancierKode object to remove.
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function removeGsArtikelenRelatedByLeverancierKode($gsArtikelenRelatedByLeverancierKode)
    {
        if ($this->getGsArtikelensRelatedByLeverancierKode()->contains($gsArtikelenRelatedByLeverancierKode)) {
            $this->collGsArtikelensRelatedByLeverancierKode->remove($this->collGsArtikelensRelatedByLeverancierKode->search($gsArtikelenRelatedByLeverancierKode));
            if (null === $this->gsArtikelensRelatedByLeverancierKodeScheduledForDeletion) {
                $this->gsArtikelensRelatedByLeverancierKodeScheduledForDeletion = clone $this->collGsArtikelensRelatedByLeverancierKode;
                $this->gsArtikelensRelatedByLeverancierKodeScheduledForDeletion->clear();
            }
            $this->gsArtikelensRelatedByLeverancierKodeScheduledForDeletion[]= $gsArtikelenRelatedByLeverancierKode;
            $gsArtikelenRelatedByLeverancierKode->setLeverancier(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelensRelatedByLeverancierKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByLeverancierKodeJoinGsHandelsproducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('GsHandelsproducten', $join_behavior);

        return $this->getGsArtikelensRelatedByLeverancierKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelensRelatedByLeverancierKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByLeverancierKodeJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsArtikelensRelatedByLeverancierKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelensRelatedByLeverancierKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByLeverancierKodeJoinLandOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('LandOmschrijving', $join_behavior);

        return $this->getGsArtikelensRelatedByLeverancierKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelensRelatedByLeverancierKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByLeverancierKodeJoinHoofdverpakkingOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('HoofdverpakkingOmschrijving', $join_behavior);

        return $this->getGsArtikelensRelatedByLeverancierKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelensRelatedByLeverancierKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByLeverancierKodeJoinDeelverpakkingOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('DeelverpakkingOmschrijving', $join_behavior);

        return $this->getGsArtikelensRelatedByLeverancierKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelensRelatedByLeverancierKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByLeverancierKodeJoinLogistiekeInformatie($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('LogistiekeInformatie', $join_behavior);

        return $this->getGsArtikelensRelatedByLeverancierKode($query, $con);
    }

    /**
     * Clears out the collGsArtikelensRelatedByImporteurKode collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     * @see        addGsArtikelensRelatedByImporteurKode()
     */
    public function clearGsArtikelensRelatedByImporteurKode()
    {
        $this->collGsArtikelensRelatedByImporteurKode = null; // important to set this to null since that means it is uninitialized
        $this->collGsArtikelensRelatedByImporteurKodePartial = null;

        return $this;
    }

    /**
     * reset is the collGsArtikelensRelatedByImporteurKode collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsArtikelensRelatedByImporteurKode($v = true)
    {
        $this->collGsArtikelensRelatedByImporteurKodePartial = $v;
    }

    /**
     * Initializes the collGsArtikelensRelatedByImporteurKode collection.
     *
     * By default this just sets the collGsArtikelensRelatedByImporteurKode collection to an empty array (like clearcollGsArtikelensRelatedByImporteurKode());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsArtikelensRelatedByImporteurKode($overrideExisting = true)
    {
        if (null !== $this->collGsArtikelensRelatedByImporteurKode && !$overrideExisting) {
            return;
        }
        $this->collGsArtikelensRelatedByImporteurKode = new PropelObjectCollection();
        $this->collGsArtikelensRelatedByImporteurKode->setModel('GsArtikelen');
    }

    /**
     * Gets an array of GsArtikelen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsNawGegevensGstandaard is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     * @throws PropelException
     */
    public function getGsArtikelensRelatedByImporteurKode($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelensRelatedByImporteurKodePartial && !$this->isNew();
        if (null === $this->collGsArtikelensRelatedByImporteurKode || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelensRelatedByImporteurKode) {
                // return empty collection
                $this->initGsArtikelensRelatedByImporteurKode();
            } else {
                $collGsArtikelensRelatedByImporteurKode = GsArtikelenQuery::create(null, $criteria)
                    ->filterByImporteur($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsArtikelensRelatedByImporteurKodePartial && count($collGsArtikelensRelatedByImporteurKode)) {
                      $this->initGsArtikelensRelatedByImporteurKode(false);

                      foreach ($collGsArtikelensRelatedByImporteurKode as $obj) {
                        if (false == $this->collGsArtikelensRelatedByImporteurKode->contains($obj)) {
                          $this->collGsArtikelensRelatedByImporteurKode->append($obj);
                        }
                      }

                      $this->collGsArtikelensRelatedByImporteurKodePartial = true;
                    }

                    $collGsArtikelensRelatedByImporteurKode->getInternalIterator()->rewind();

                    return $collGsArtikelensRelatedByImporteurKode;
                }

                if ($partial && $this->collGsArtikelensRelatedByImporteurKode) {
                    foreach ($this->collGsArtikelensRelatedByImporteurKode as $obj) {
                        if ($obj->isNew()) {
                            $collGsArtikelensRelatedByImporteurKode[] = $obj;
                        }
                    }
                }

                $this->collGsArtikelensRelatedByImporteurKode = $collGsArtikelensRelatedByImporteurKode;
                $this->collGsArtikelensRelatedByImporteurKodePartial = false;
            }
        }

        return $this->collGsArtikelensRelatedByImporteurKode;
    }

    /**
     * Sets a collection of GsArtikelenRelatedByImporteurKode objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsArtikelensRelatedByImporteurKode A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setGsArtikelensRelatedByImporteurKode(PropelCollection $gsArtikelensRelatedByImporteurKode, PropelPDO $con = null)
    {
        $gsArtikelensRelatedByImporteurKodeToDelete = $this->getGsArtikelensRelatedByImporteurKode(new Criteria(), $con)->diff($gsArtikelensRelatedByImporteurKode);


        $this->gsArtikelensRelatedByImporteurKodeScheduledForDeletion = $gsArtikelensRelatedByImporteurKodeToDelete;

        foreach ($gsArtikelensRelatedByImporteurKodeToDelete as $gsArtikelenRelatedByImporteurKodeRemoved) {
            $gsArtikelenRelatedByImporteurKodeRemoved->setImporteur(null);
        }

        $this->collGsArtikelensRelatedByImporteurKode = null;
        foreach ($gsArtikelensRelatedByImporteurKode as $gsArtikelenRelatedByImporteurKode) {
            $this->addGsArtikelenRelatedByImporteurKode($gsArtikelenRelatedByImporteurKode);
        }

        $this->collGsArtikelensRelatedByImporteurKode = $gsArtikelensRelatedByImporteurKode;
        $this->collGsArtikelensRelatedByImporteurKodePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsArtikelen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsArtikelen objects.
     * @throws PropelException
     */
    public function countGsArtikelensRelatedByImporteurKode(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelensRelatedByImporteurKodePartial && !$this->isNew();
        if (null === $this->collGsArtikelensRelatedByImporteurKode || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelensRelatedByImporteurKode) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsArtikelensRelatedByImporteurKode());
            }
            $query = GsArtikelenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByImporteur($this)
                ->count($con);
        }

        return count($this->collGsArtikelensRelatedByImporteurKode);
    }

    /**
     * Method called to associate a GsArtikelen object to this object
     * through the GsArtikelen foreign key attribute.
     *
     * @param    GsArtikelen $l GsArtikelen
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function addGsArtikelenRelatedByImporteurKode(GsArtikelen $l)
    {
        if ($this->collGsArtikelensRelatedByImporteurKode === null) {
            $this->initGsArtikelensRelatedByImporteurKode();
            $this->collGsArtikelensRelatedByImporteurKodePartial = true;
        }

        if (!in_array($l, $this->collGsArtikelensRelatedByImporteurKode->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsArtikelenRelatedByImporteurKode($l);

            if ($this->gsArtikelensRelatedByImporteurKodeScheduledForDeletion and $this->gsArtikelensRelatedByImporteurKodeScheduledForDeletion->contains($l)) {
                $this->gsArtikelensRelatedByImporteurKodeScheduledForDeletion->remove($this->gsArtikelensRelatedByImporteurKodeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsArtikelenRelatedByImporteurKode $gsArtikelenRelatedByImporteurKode The gsArtikelenRelatedByImporteurKode object to add.
     */
    protected function doAddGsArtikelenRelatedByImporteurKode($gsArtikelenRelatedByImporteurKode)
    {
        $this->collGsArtikelensRelatedByImporteurKode[]= $gsArtikelenRelatedByImporteurKode;
        $gsArtikelenRelatedByImporteurKode->setImporteur($this);
    }

    /**
     * @param	GsArtikelenRelatedByImporteurKode $gsArtikelenRelatedByImporteurKode The gsArtikelenRelatedByImporteurKode object to remove.
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function removeGsArtikelenRelatedByImporteurKode($gsArtikelenRelatedByImporteurKode)
    {
        if ($this->getGsArtikelensRelatedByImporteurKode()->contains($gsArtikelenRelatedByImporteurKode)) {
            $this->collGsArtikelensRelatedByImporteurKode->remove($this->collGsArtikelensRelatedByImporteurKode->search($gsArtikelenRelatedByImporteurKode));
            if (null === $this->gsArtikelensRelatedByImporteurKodeScheduledForDeletion) {
                $this->gsArtikelensRelatedByImporteurKodeScheduledForDeletion = clone $this->collGsArtikelensRelatedByImporteurKode;
                $this->gsArtikelensRelatedByImporteurKodeScheduledForDeletion->clear();
            }
            $this->gsArtikelensRelatedByImporteurKodeScheduledForDeletion[]= $gsArtikelenRelatedByImporteurKode;
            $gsArtikelenRelatedByImporteurKode->setImporteur(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelensRelatedByImporteurKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByImporteurKodeJoinGsHandelsproducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('GsHandelsproducten', $join_behavior);

        return $this->getGsArtikelensRelatedByImporteurKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelensRelatedByImporteurKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByImporteurKodeJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsArtikelensRelatedByImporteurKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelensRelatedByImporteurKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByImporteurKodeJoinLandOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('LandOmschrijving', $join_behavior);

        return $this->getGsArtikelensRelatedByImporteurKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelensRelatedByImporteurKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByImporteurKodeJoinHoofdverpakkingOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('HoofdverpakkingOmschrijving', $join_behavior);

        return $this->getGsArtikelensRelatedByImporteurKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelensRelatedByImporteurKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByImporteurKodeJoinDeelverpakkingOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('DeelverpakkingOmschrijving', $join_behavior);

        return $this->getGsArtikelensRelatedByImporteurKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelensRelatedByImporteurKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByImporteurKodeJoinLogistiekeInformatie($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('LogistiekeInformatie', $join_behavior);

        return $this->getGsArtikelensRelatedByImporteurKode($query, $con);
    }

    /**
     * Clears out the collGsArtikelensRelatedByRegistratiehouderKode collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     * @see        addGsArtikelensRelatedByRegistratiehouderKode()
     */
    public function clearGsArtikelensRelatedByRegistratiehouderKode()
    {
        $this->collGsArtikelensRelatedByRegistratiehouderKode = null; // important to set this to null since that means it is uninitialized
        $this->collGsArtikelensRelatedByRegistratiehouderKodePartial = null;

        return $this;
    }

    /**
     * reset is the collGsArtikelensRelatedByRegistratiehouderKode collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsArtikelensRelatedByRegistratiehouderKode($v = true)
    {
        $this->collGsArtikelensRelatedByRegistratiehouderKodePartial = $v;
    }

    /**
     * Initializes the collGsArtikelensRelatedByRegistratiehouderKode collection.
     *
     * By default this just sets the collGsArtikelensRelatedByRegistratiehouderKode collection to an empty array (like clearcollGsArtikelensRelatedByRegistratiehouderKode());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsArtikelensRelatedByRegistratiehouderKode($overrideExisting = true)
    {
        if (null !== $this->collGsArtikelensRelatedByRegistratiehouderKode && !$overrideExisting) {
            return;
        }
        $this->collGsArtikelensRelatedByRegistratiehouderKode = new PropelObjectCollection();
        $this->collGsArtikelensRelatedByRegistratiehouderKode->setModel('GsArtikelen');
    }

    /**
     * Gets an array of GsArtikelen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsNawGegevensGstandaard is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     * @throws PropelException
     */
    public function getGsArtikelensRelatedByRegistratiehouderKode($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelensRelatedByRegistratiehouderKodePartial && !$this->isNew();
        if (null === $this->collGsArtikelensRelatedByRegistratiehouderKode || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelensRelatedByRegistratiehouderKode) {
                // return empty collection
                $this->initGsArtikelensRelatedByRegistratiehouderKode();
            } else {
                $collGsArtikelensRelatedByRegistratiehouderKode = GsArtikelenQuery::create(null, $criteria)
                    ->filterByRegistratiehouder($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsArtikelensRelatedByRegistratiehouderKodePartial && count($collGsArtikelensRelatedByRegistratiehouderKode)) {
                      $this->initGsArtikelensRelatedByRegistratiehouderKode(false);

                      foreach ($collGsArtikelensRelatedByRegistratiehouderKode as $obj) {
                        if (false == $this->collGsArtikelensRelatedByRegistratiehouderKode->contains($obj)) {
                          $this->collGsArtikelensRelatedByRegistratiehouderKode->append($obj);
                        }
                      }

                      $this->collGsArtikelensRelatedByRegistratiehouderKodePartial = true;
                    }

                    $collGsArtikelensRelatedByRegistratiehouderKode->getInternalIterator()->rewind();

                    return $collGsArtikelensRelatedByRegistratiehouderKode;
                }

                if ($partial && $this->collGsArtikelensRelatedByRegistratiehouderKode) {
                    foreach ($this->collGsArtikelensRelatedByRegistratiehouderKode as $obj) {
                        if ($obj->isNew()) {
                            $collGsArtikelensRelatedByRegistratiehouderKode[] = $obj;
                        }
                    }
                }

                $this->collGsArtikelensRelatedByRegistratiehouderKode = $collGsArtikelensRelatedByRegistratiehouderKode;
                $this->collGsArtikelensRelatedByRegistratiehouderKodePartial = false;
            }
        }

        return $this->collGsArtikelensRelatedByRegistratiehouderKode;
    }

    /**
     * Sets a collection of GsArtikelenRelatedByRegistratiehouderKode objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsArtikelensRelatedByRegistratiehouderKode A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function setGsArtikelensRelatedByRegistratiehouderKode(PropelCollection $gsArtikelensRelatedByRegistratiehouderKode, PropelPDO $con = null)
    {
        $gsArtikelensRelatedByRegistratiehouderKodeToDelete = $this->getGsArtikelensRelatedByRegistratiehouderKode(new Criteria(), $con)->diff($gsArtikelensRelatedByRegistratiehouderKode);


        $this->gsArtikelensRelatedByRegistratiehouderKodeScheduledForDeletion = $gsArtikelensRelatedByRegistratiehouderKodeToDelete;

        foreach ($gsArtikelensRelatedByRegistratiehouderKodeToDelete as $gsArtikelenRelatedByRegistratiehouderKodeRemoved) {
            $gsArtikelenRelatedByRegistratiehouderKodeRemoved->setRegistratiehouder(null);
        }

        $this->collGsArtikelensRelatedByRegistratiehouderKode = null;
        foreach ($gsArtikelensRelatedByRegistratiehouderKode as $gsArtikelenRelatedByRegistratiehouderKode) {
            $this->addGsArtikelenRelatedByRegistratiehouderKode($gsArtikelenRelatedByRegistratiehouderKode);
        }

        $this->collGsArtikelensRelatedByRegistratiehouderKode = $gsArtikelensRelatedByRegistratiehouderKode;
        $this->collGsArtikelensRelatedByRegistratiehouderKodePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsArtikelen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsArtikelen objects.
     * @throws PropelException
     */
    public function countGsArtikelensRelatedByRegistratiehouderKode(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelensRelatedByRegistratiehouderKodePartial && !$this->isNew();
        if (null === $this->collGsArtikelensRelatedByRegistratiehouderKode || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelensRelatedByRegistratiehouderKode) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsArtikelensRelatedByRegistratiehouderKode());
            }
            $query = GsArtikelenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRegistratiehouder($this)
                ->count($con);
        }

        return count($this->collGsArtikelensRelatedByRegistratiehouderKode);
    }

    /**
     * Method called to associate a GsArtikelen object to this object
     * through the GsArtikelen foreign key attribute.
     *
     * @param    GsArtikelen $l GsArtikelen
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function addGsArtikelenRelatedByRegistratiehouderKode(GsArtikelen $l)
    {
        if ($this->collGsArtikelensRelatedByRegistratiehouderKode === null) {
            $this->initGsArtikelensRelatedByRegistratiehouderKode();
            $this->collGsArtikelensRelatedByRegistratiehouderKodePartial = true;
        }

        if (!in_array($l, $this->collGsArtikelensRelatedByRegistratiehouderKode->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsArtikelenRelatedByRegistratiehouderKode($l);

            if ($this->gsArtikelensRelatedByRegistratiehouderKodeScheduledForDeletion and $this->gsArtikelensRelatedByRegistratiehouderKodeScheduledForDeletion->contains($l)) {
                $this->gsArtikelensRelatedByRegistratiehouderKodeScheduledForDeletion->remove($this->gsArtikelensRelatedByRegistratiehouderKodeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsArtikelenRelatedByRegistratiehouderKode $gsArtikelenRelatedByRegistratiehouderKode The gsArtikelenRelatedByRegistratiehouderKode object to add.
     */
    protected function doAddGsArtikelenRelatedByRegistratiehouderKode($gsArtikelenRelatedByRegistratiehouderKode)
    {
        $this->collGsArtikelensRelatedByRegistratiehouderKode[]= $gsArtikelenRelatedByRegistratiehouderKode;
        $gsArtikelenRelatedByRegistratiehouderKode->setRegistratiehouder($this);
    }

    /**
     * @param	GsArtikelenRelatedByRegistratiehouderKode $gsArtikelenRelatedByRegistratiehouderKode The gsArtikelenRelatedByRegistratiehouderKode object to remove.
     * @return GsNawGegevensGstandaard The current object (for fluent API support)
     */
    public function removeGsArtikelenRelatedByRegistratiehouderKode($gsArtikelenRelatedByRegistratiehouderKode)
    {
        if ($this->getGsArtikelensRelatedByRegistratiehouderKode()->contains($gsArtikelenRelatedByRegistratiehouderKode)) {
            $this->collGsArtikelensRelatedByRegistratiehouderKode->remove($this->collGsArtikelensRelatedByRegistratiehouderKode->search($gsArtikelenRelatedByRegistratiehouderKode));
            if (null === $this->gsArtikelensRelatedByRegistratiehouderKodeScheduledForDeletion) {
                $this->gsArtikelensRelatedByRegistratiehouderKodeScheduledForDeletion = clone $this->collGsArtikelensRelatedByRegistratiehouderKode;
                $this->gsArtikelensRelatedByRegistratiehouderKodeScheduledForDeletion->clear();
            }
            $this->gsArtikelensRelatedByRegistratiehouderKodeScheduledForDeletion[]= $gsArtikelenRelatedByRegistratiehouderKode;
            $gsArtikelenRelatedByRegistratiehouderKode->setRegistratiehouder(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelensRelatedByRegistratiehouderKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByRegistratiehouderKodeJoinGsHandelsproducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('GsHandelsproducten', $join_behavior);

        return $this->getGsArtikelensRelatedByRegistratiehouderKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelensRelatedByRegistratiehouderKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByRegistratiehouderKodeJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsArtikelensRelatedByRegistratiehouderKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelensRelatedByRegistratiehouderKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByRegistratiehouderKodeJoinLandOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('LandOmschrijving', $join_behavior);

        return $this->getGsArtikelensRelatedByRegistratiehouderKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelensRelatedByRegistratiehouderKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByRegistratiehouderKodeJoinHoofdverpakkingOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('HoofdverpakkingOmschrijving', $join_behavior);

        return $this->getGsArtikelensRelatedByRegistratiehouderKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelensRelatedByRegistratiehouderKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByRegistratiehouderKodeJoinDeelverpakkingOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('DeelverpakkingOmschrijving', $join_behavior);

        return $this->getGsArtikelensRelatedByRegistratiehouderKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsNawGegevensGstandaard is new, it will return
     * an empty collection; or if this GsNawGegevensGstandaard has previously
     * been saved, it will retrieve related GsArtikelensRelatedByRegistratiehouderKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsNawGegevensGstandaard.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByRegistratiehouderKodeJoinLogistiekeInformatie($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('LogistiekeInformatie', $join_behavior);

        return $this->getGsArtikelensRelatedByRegistratiehouderKode($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->thesaurusnummer_soort_naw = null;
        $this->naw_soort = null;
        $this->naw_nummer = null;
        $this->memocode_onderneming_3_posities_alfanumeriek = null;
        $this->memocode_onderneming_2_posities_numeriek = null;
        $this->naam = null;
        $this->adres = null;
        $this->postcode = null;
        $this->woonplaats = null;
        $this->land = null;
        $this->postbusnummer = null;
        $this->postcode_postbus = null;
        $this->telefoonnummer_ondernemer = null;
        $this->faxnummer = null;
        $this->zoeknaam = null;
        $this->land_memocode = null;
        $this->lic_nummer = null;
        $this->gln_code = null;
        $this->uzovi_code = null;
        $this->agb_code = null;
        $this->reservenummer_1 = null;
        $this->reservenummer_2 = null;
        $this->slug = null;
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
            if ($this->collGsArtikelensRelatedByLeverancierKode) {
                foreach ($this->collGsArtikelensRelatedByLeverancierKode as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsArtikelensRelatedByImporteurKode) {
                foreach ($this->collGsArtikelensRelatedByImporteurKode as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsArtikelensRelatedByRegistratiehouderKode) {
                foreach ($this->collGsArtikelensRelatedByRegistratiehouderKode as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aSoortOmschrijving instanceof Persistent) {
              $this->aSoortOmschrijving->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collGsArtikelEigenschappens instanceof PropelCollection) {
            $this->collGsArtikelEigenschappens->clearIterator();
        }
        $this->collGsArtikelEigenschappens = null;
        if ($this->collGsArtikelensRelatedByLeverancierKode instanceof PropelCollection) {
            $this->collGsArtikelensRelatedByLeverancierKode->clearIterator();
        }
        $this->collGsArtikelensRelatedByLeverancierKode = null;
        if ($this->collGsArtikelensRelatedByImporteurKode instanceof PropelCollection) {
            $this->collGsArtikelensRelatedByImporteurKode->clearIterator();
        }
        $this->collGsArtikelensRelatedByImporteurKode = null;
        if ($this->collGsArtikelensRelatedByRegistratiehouderKode instanceof PropelCollection) {
            $this->collGsArtikelensRelatedByRegistratiehouderKode->clearIterator();
        }
        $this->collGsArtikelensRelatedByRegistratiehouderKode = null;
        $this->aSoortOmschrijving = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsNawGegevensGstandaardPeer::DEFAULT_STRING_FORMAT);
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

    // sluggable behavior

    /**
     * Create a unique slug based on the object
     *
     * @return string The object slug
     */
    protected function createSlug()
    {
        $slug = $this->createRawSlug();
        $slug = $this->limitSlugSize($slug);
        $slug = $this->makeSlugUnique($slug);

        return $slug;
    }

    /**
     * Create the slug from the appropriate columns
     *
     * @return string
     */
    protected function createRawSlug()
    {
        return '' . $this->cleanupSlugPart($this->getNaam()) . '';
    }

    /**
     * Cleanup a string to make a slug of it
     * Removes special characters, replaces blanks with a separator, and trim it
     *
     * @param     string $slug        the text to slugify
     * @param     string $replacement the separator used by slug
     * @return    string               the slugified text
     */
    protected static function cleanupSlugPart($slug, $replacement = '-')
    {
        // transliterate
        if (function_exists('iconv')) {
            $slug = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);
        }

        // lowercase
        if (function_exists('mb_strtolower')) {
            $slug = mb_strtolower($slug);
        } else {
            $slug = strtolower($slug);
        }

        // remove accents resulting from OSX's iconv
        $slug = str_replace(array('\'', '`', '^'), '', $slug);

        // replace non letter or digits with separator
        $slug = preg_replace('/\W+/', $replacement, $slug);

        // trim
        $slug = trim($slug, $replacement);

        if (empty($slug)) {
            return 'n-a';
        }

        return $slug;
    }


    /**
     * Make sure the slug is short enough to accommodate the column size
     *
     * @param    string $slug                   the slug to check
     * @param    int    $incrementReservedSpace the number of characters to keep empty
     *
     * @return string                            the truncated slug
     */
    protected static function limitSlugSize($slug, $incrementReservedSpace = 3)
    {
        // check length, as suffix could put it over maximum
        if (strlen($slug) > (255 - $incrementReservedSpace)) {
            $slug = substr($slug, 0, 255 - $incrementReservedSpace);
        }

        return $slug;
    }


    /**
     * Get the slug, ensuring its uniqueness
     *
     * @param    string $slug            the slug to check
     * @param    string $separator       the separator used by slug
     * @param    int    $alreadyExists   false for the first try, true for the second, and take the high count + 1
     * @return   string                   the unique slug
     */
    protected function makeSlugUnique($slug, $separator = '-', $alreadyExists = false)
    {
        if (!$alreadyExists) {
            $slug2 = $slug;
        } else {
            $slug2 = $slug . $separator;
        }

         $query = GsNawGegevensGstandaardQuery::create('q')
        ->where('q.Slug ' . ($alreadyExists ? 'REGEXP' : '=') . ' ?', $alreadyExists ? '^' . $slug2 . '[0-9]+$' : $slug2)->prune($this)
        ;

        if (!$alreadyExists) {
            $count = $query->count();
            if ($count > 0) {
                return $this->makeSlugUnique($slug, $separator, true);
            }

            return $slug2;
        }

        // Already exists
        $object = $query
            ->addDescendingOrderByColumn('LENGTH(slug)')
            ->addDescendingOrderByColumn('slug')
        ->findOne();

        // First duplicate slug
        if (null == $object) {
            return $slug2 . '1';
        }

        $slugNum = substr($object->getSlug(), strlen($slug) + 1);
        if ('0' === $slugNum[0]) {
            $slugNum[0] = 1;
        }

        return $slug2 . ($slugNum + 1);
    }

}
