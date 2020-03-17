<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BaseObject;
use \BasePeer;
use \Criteria;
use \DateTime;
use \Exception;
use \PDO;
use \Persistent;
use \Propel;
use \PropelCollection;
use \PropelDateTime;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsIndicatiesBijSupplementaireProducten;
use PharmaIntelligence\GstandaardBundle\Model\GsIndicatiesBijSupplementaireProductenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsLeveranciersassortimenten;
use PharmaIntelligence\GstandaardBundle\Model\GsLeveranciersassortimentenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeInformatie;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeInformatieQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatie;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatieQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsNamen;
use PharmaIntelligence\GstandaardBundle\Model\GsNamenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaard;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsPreferentieBeleid;
use PharmaIntelligence\GstandaardBundle\Model\GsPreferentieBeleidQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieTussenZinummerHibc;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieTussenZinummerHibcQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsRzvAanspraak;
use PharmaIntelligence\GstandaardBundle\Model\GsRzvAanspraakQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenHistorie;
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenHistorieQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenMetNzaMaximumtarief;
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenMetNzaMaximumtariefQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery;

abstract class BaseGsArtikelen extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsArtikelenPeer
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
     * The value for the handelsproduktkode field.
     * @var        int
     */
    protected $handelsproduktkode;

    /**
     * The value for the artikelnaamnummer field.
     * @var        int
     */
    protected $artikelnaamnummer;

    /**
     * The value for the inkoophoeveelheid field.
     * @var        string
     */
    protected $inkoophoeveelheid;

    /**
     * The value for the aantal_hoofdverpakkingen field.
     * @var        int
     */
    protected $aantal_hoofdverpakkingen;

    /**
     * The value for the hoofdverpakking_omschrijving_thesnr field.
     * @var        int
     */
    protected $hoofdverpakking_omschrijving_thesnr;

    /**
     * The value for the hoofdverpakking_omschrijving_kode field.
     * @var        int
     */
    protected $hoofdverpakking_omschrijving_kode;

    /**
     * The value for the aantal_deelverpakkingen field.
     * @var        int
     */
    protected $aantal_deelverpakkingen;

    /**
     * The value for the deelverpakking_omschrijving_thesnr field.
     * @var        int
     */
    protected $deelverpakking_omschrijving_thesnr;

    /**
     * The value for the deelverpakking_omschrijving_kode field.
     * @var        int
     */
    protected $deelverpakking_omschrijving_kode;

    /**
     * The value for the hoeveelheid_per_deelverpakking field.
     * @var        string
     */
    protected $hoeveelheid_per_deelverpakking;

    /**
     * The value for the un_kode field.
     * @var        string
     */
    protected $un_kode;

    /**
     * The value for the un_datum field.
     * @var        string
     */
    protected $un_datum;

    /**
     * The value for the kode_wet_op_de_geneesmiddelen field.
     * @var        string
     */
    protected $kode_wet_op_de_geneesmiddelen;

    /**
     * The value for the kode_koelkast field.
     * @var        string
     */
    protected $kode_koelkast;

    /**
     * The value for the kode_kliniekverpakking field.
     * @var        string
     */
    protected $kode_kliniekverpakking;

    /**
     * The value for the kode_vervaldatum field.
     * @var        string
     */
    protected $kode_vervaldatum;

    /**
     * The value for the kode_easysteem field.
     * @var        string
     */
    protected $kode_easysteem;

    /**
     * The value for the rvgnummer_1 field.
     * @var        int
     */
    protected $rvgnummer_1;

    /**
     * The value for the rvgnummer_2 field.
     * @var        string
     */
    protected $rvgnummer_2;

    /**
     * The value for the rvgnummer_3 field.
     * @var        int
     */
    protected $rvgnummer_3;

    /**
     * The value for the datum_inschrijving_registratie field.
     * @var        string
     */
    protected $datum_inschrijving_registratie;

    /**
     * The value for the aantal_ddds_per_verpakking field.
     * @var        string
     */
    protected $aantal_ddds_per_verpakking;

    /**
     * The value for the fabrikant_artikelkodering field.
     * @var        string
     */
    protected $fabrikant_artikelkodering;

    /**
     * The value for the registratiehouder_kode field.
     * @var        int
     */
    protected $registratiehouder_kode;

    /**
     * The value for the importeur_kode field.
     * @var        int
     */
    protected $importeur_kode;

    /**
     * The value for the leverancier_kode field.
     * @var        int
     */
    protected $leverancier_kode;

    /**
     * The value for the land_van_herkomst_thesaurus_nummer field.
     * @var        int
     */
    protected $land_van_herkomst_thesaurus_nummer;

    /**
     * The value for the land_van_herkomst_kode field.
     * @var        int
     */
    protected $land_van_herkomst_kode;

    /**
     * The value for the datum_invoer_verpakking field.
     * @var        string
     */
    protected $datum_invoer_verpakking;

    /**
     * The value for the datum_afvoer_verpakking field.
     * @var        string
     */
    protected $datum_afvoer_verpakking;

    /**
     * The value for the produktkoppel_kode field.
     * @var        int
     */
    protected $produktkoppel_kode;

    /**
     * The value for the wtgkode field.
     * @var        int
     */
    protected $wtgkode;

    /**
     * The value for the btwkode_voor_declaratie field.
     * @var        int
     */
    protected $btwkode_voor_declaratie;

    /**
     * The value for the kode_inkoopkanaal field.
     * @var        int
     */
    protected $kode_inkoopkanaal;

    /**
     * The value for the kode_referentieprodukt_per_cluster field.
     * @var        int
     */
    protected $kode_referentieprodukt_per_cluster;

    /**
     * The value for the verkoopprijs_exclusief_btw field.
     * @var        string
     */
    protected $verkoopprijs_exclusief_btw;

    /**
     * The value for the vergoedingsprijs field.
     * @var        string
     */
    protected $vergoedingsprijs;

    /**
     * The value for the referentieprijs field.
     * @var        string
     */
    protected $referentieprijs;

    /**
     * The value for the datum_schorsing field.
     * @var        string
     */
    protected $datum_schorsing;

    /**
     * The value for the datum_doorhaling field.
     * @var        string
     */
    protected $datum_doorhaling;

    /**
     * The value for the mutatie_datum field.
     * @var        string
     */
    protected $mutatie_datum;

    /**
     * The value for the uitgavedatum field.
     * @var        string
     */
    protected $uitgavedatum;

    /**
     * The value for the gvs_cluster_kode field.
     * @var        string
     */
    protected $gvs_cluster_kode;

    /**
     * The value for the gvs_vergoedingslimiet field.
     * @var        string
     */
    protected $gvs_vergoedingslimiet;

    /**
     * The value for the inkoopprijs field.
     * @var        string
     */
    protected $inkoopprijs;

    /**
     * The value for the europees_registratienummer field.
     * @var        string
     */
    protected $europees_registratienummer;

    /**
     * The value for the kortingspercentage field.
     * @var        string
     */
    protected $kortingspercentage;

    /**
     * The value for the maximumprijs_vws field.
     * @var        string
     */
    protected $maximumprijs_vws;

    /**
     * The value for the registratie_nummer_1 field.
     * @var        int
     */
    protected $registratie_nummer_1;

    /**
     * The value for the registratie_nummer_2 field.
     * @var        string
     */
    protected $registratie_nummer_2;

    /**
     * The value for the registratie_nummer_3 field.
     * @var        int
     */
    protected $registratie_nummer_3;

    /**
     * The value for the slug field.
     * @var        string
     */
    protected $slug;

    /**
     * @var        GsHandelsproducten
     */
    protected $aGsHandelsproducten;

    /**
     * @var        GsNamen
     */
    protected $aGsNamen;

    /**
     * @var        GsNawGegevensGstandaard
     */
    protected $aLeverancier;

    /**
     * @var        GsNawGegevensGstandaard
     */
    protected $aImporteur;

    /**
     * @var        GsNawGegevensGstandaard
     */
    protected $aRegistratiehouder;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aLandOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aHoofdverpakkingOmschrijving;

    /**
     * @var        GsThesauriTotaal
     */
    protected $aDeelverpakkingOmschrijving;

    /**
     * @var        GsLogistiekeInformatie
     */
    protected $aLogistiekeInformatie;

    /**
     * @var        PropelObjectCollection|GsSupplementaireProductenHistorie[] Collection to store aggregation of GsSupplementaireProductenHistorie objects.
     */
    protected $collGsSupplementaireProductenHistories;
    protected $collGsSupplementaireProductenHistoriesPartial;

    /**
     * @var        GsArtikelEigenschappen one-to-one related GsArtikelEigenschappen object
     */
    protected $singleGsArtikelEigenschappen;

    /**
     * @var        GsRzvAanspraak one-to-one related GsRzvAanspraak object
     */
    protected $singleGsRzvAanspraak;

    /**
     * @var        PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[] Collection to store aggregation of GsLogistiekeVerpakkingsinformatie objects.
     */
    protected $collGsLogistiekeVerpakkingsinformaties;
    protected $collGsLogistiekeVerpakkingsinformatiesPartial;

    /**
     * @var        GsSupplementaireProductenMetNzaMaximumtarief one-to-one related GsSupplementaireProductenMetNzaMaximumtarief object
     */
    protected $singleGsSupplementaireProductenMetNzaMaximumtarief;

    /**
     * @var        PropelObjectCollection|GsIndicatiesBijSupplementaireProducten[] Collection to store aggregation of GsIndicatiesBijSupplementaireProducten objects.
     */
    protected $collGsIndicatiesBijSupplementaireProductens;
    protected $collGsIndicatiesBijSupplementaireProductensPartial;

    /**
     * @var        PropelObjectCollection|GsLeveranciersassortimenten[] Collection to store aggregation of GsLeveranciersassortimenten objects.
     */
    protected $collGsLeveranciersassortimentens;
    protected $collGsLeveranciersassortimentensPartial;

    /**
     * @var        PropelObjectCollection|GsLogistiekeInformatie[] Collection to store aggregation of GsLogistiekeInformatie objects.
     */
    protected $collGsLogistiekeInformatiesRelatedByZindexNummer;
    protected $collGsLogistiekeInformatiesRelatedByZindexNummerPartial;

    /**
     * @var        PropelObjectCollection|GsPreferentieBeleid[] Collection to store aggregation of GsPreferentieBeleid objects.
     */
    protected $collGsPreferentieBeleids;
    protected $collGsPreferentieBeleidsPartial;

    /**
     * @var        GsRelatieTussenZinummerHibc one-to-one related GsRelatieTussenZinummerHibc object
     */
    protected $singleGsRelatieTussenZinummerHibc;

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
    protected $gsSupplementaireProductenHistoriesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsLogistiekeVerpakkingsinformatiesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsIndicatiesBijSupplementaireProductensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsLeveranciersassortimentensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsLogistiekeInformatiesRelatedByZindexNummerScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsPreferentieBeleidsScheduledForDeletion = null;

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
     * Get the [handelsproduktkode] column value.
     *
     * @return int
     */
    public function getHandelsproduktkode()
    {

        return $this->handelsproduktkode;
    }

    /**
     * Get the [artikelnaamnummer] column value.
     *
     * @return int
     */
    public function getArtikelnaamnummer()
    {

        return $this->artikelnaamnummer;
    }

    /**
     * Get the [inkoophoeveelheid] column value.
     *
     * @return string
     */
    public function getInkoophoeveelheid()
    {

        return $this->inkoophoeveelheid;
    }

    /**
     * Get the [aantal_hoofdverpakkingen] column value.
     *
     * @return int
     */
    public function getAantalHoofdverpakkingen()
    {

        return $this->aantal_hoofdverpakkingen;
    }

    /**
     * Get the [hoofdverpakking_omschrijving_thesnr] column value.
     *
     * @return int
     */
    public function getHoofdverpakkingOmschrijvingThesnr()
    {

        return $this->hoofdverpakking_omschrijving_thesnr;
    }

    /**
     * Get the [hoofdverpakking_omschrijving_kode] column value.
     *
     * @return int
     */
    public function getHoofdverpakkingOmschrijvingKode()
    {

        return $this->hoofdverpakking_omschrijving_kode;
    }

    /**
     * Get the [aantal_deelverpakkingen] column value.
     *
     * @return int
     */
    public function getAantalDeelverpakkingen()
    {

        return $this->aantal_deelverpakkingen;
    }

    /**
     * Get the [deelverpakking_omschrijving_thesnr] column value.
     *
     * @return int
     */
    public function getDeelverpakkingOmschrijvingThesnr()
    {

        return $this->deelverpakking_omschrijving_thesnr;
    }

    /**
     * Get the [deelverpakking_omschrijving_kode] column value.
     *
     * @return int
     */
    public function getDeelverpakkingOmschrijvingKode()
    {

        return $this->deelverpakking_omschrijving_kode;
    }

    /**
     * Get the [hoeveelheid_per_deelverpakking] column value.
     *
     * @return string
     */
    public function getHoeveelheidPerDeelverpakking()
    {

        return $this->hoeveelheid_per_deelverpakking;
    }

    /**
     * Get the [un_kode] column value.
     *
     * @return string
     */
    public function getUnKode()
    {

        return $this->un_kode;
    }

    /**
     * Get the [optionally formatted] temporal [un_datum] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUnDatum($format = null)
    {
        if ($this->un_datum === null) {
            return null;
        }

        if ($this->un_datum === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->un_datum);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->un_datum, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [kode_wet_op_de_geneesmiddelen] column value.
     *
     * @return string
     */
    public function getKodeWetOpDeGeneesmiddelen()
    {

        return $this->kode_wet_op_de_geneesmiddelen;
    }

    /**
     * Get the [kode_koelkast] column value.
     *
     * @return string
     */
    public function getKodeKoelkast()
    {

        return $this->kode_koelkast;
    }

    /**
     * Get the [kode_kliniekverpakking] column value.
     *
     * @return string
     */
    public function getKodeKliniekverpakking()
    {

        return $this->kode_kliniekverpakking;
    }

    /**
     * Get the [kode_vervaldatum] column value.
     *
     * @return string
     */
    public function getKodeVervaldatum()
    {

        return $this->kode_vervaldatum;
    }

    /**
     * Get the [kode_easysteem] column value.
     *
     * @return string
     */
    public function getKodeEasysteem()
    {

        return $this->kode_easysteem;
    }

    /**
     * Get the [rvgnummer_1] column value.
     *
     * @return int
     */
    public function getRvgnummer1()
    {

        return $this->rvgnummer_1;
    }

    /**
     * Get the [rvgnummer_2] column value.
     *
     * @return string
     */
    public function getRvgnummer2()
    {

        return $this->rvgnummer_2;
    }

    /**
     * Get the [rvgnummer_3] column value.
     *
     * @return int
     */
    public function getRvgnummer3()
    {

        return $this->rvgnummer_3;
    }

    /**
     * Get the [optionally formatted] temporal [datum_inschrijving_registratie] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatumInschrijvingRegistratie($format = null)
    {
        if ($this->datum_inschrijving_registratie === null) {
            return null;
        }

        if ($this->datum_inschrijving_registratie === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datum_inschrijving_registratie);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datum_inschrijving_registratie, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [aantal_ddds_per_verpakking] column value.
     *
     * @return string
     */
    public function getAantalDddsPerVerpakking()
    {

        return $this->aantal_ddds_per_verpakking;
    }

    /**
     * Get the [fabrikant_artikelkodering] column value.
     *
     * @return string
     */
    public function getFabrikantArtikelkodering()
    {

        return $this->fabrikant_artikelkodering;
    }

    /**
     * Get the [registratiehouder_kode] column value.
     *
     * @return int
     */
    public function getRegistratiehouderKode()
    {

        return $this->registratiehouder_kode;
    }

    /**
     * Get the [importeur_kode] column value.
     *
     * @return int
     */
    public function getImporteurKode()
    {

        return $this->importeur_kode;
    }

    /**
     * Get the [leverancier_kode] column value.
     *
     * @return int
     */
    public function getLeverancierKode()
    {

        return $this->leverancier_kode;
    }

    /**
     * Get the [land_van_herkomst_thesaurus_nummer] column value.
     *
     * @return int
     */
    public function getLandVanHerkomstThesaurusNummer()
    {

        return $this->land_van_herkomst_thesaurus_nummer;
    }

    /**
     * Get the [land_van_herkomst_kode] column value.
     *
     * @return int
     */
    public function getLandVanHerkomstKode()
    {

        return $this->land_van_herkomst_kode;
    }

    /**
     * Get the [optionally formatted] temporal [datum_invoer_verpakking] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatumInvoerVerpakking($format = null)
    {
        if ($this->datum_invoer_verpakking === null) {
            return null;
        }

        if ($this->datum_invoer_verpakking === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datum_invoer_verpakking);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datum_invoer_verpakking, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [datum_afvoer_verpakking] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatumAfvoerVerpakking($format = null)
    {
        if ($this->datum_afvoer_verpakking === null) {
            return null;
        }

        if ($this->datum_afvoer_verpakking === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datum_afvoer_verpakking);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datum_afvoer_verpakking, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [produktkoppel_kode] column value.
     *
     * @return int
     */
    public function getProduktkoppelKode()
    {

        return $this->produktkoppel_kode;
    }

    /**
     * Get the [wtgkode] column value.
     *
     * @return int
     */
    public function getWtgkode()
    {

        return $this->wtgkode;
    }

    /**
     * Get the [btwkode_voor_declaratie] column value.
     *
     * @return int
     */
    public function getBtwkodeVoorDeclaratie()
    {

        return $this->btwkode_voor_declaratie;
    }

    /**
     * Get the [kode_inkoopkanaal] column value.
     *
     * @return int
     */
    public function getKodeInkoopkanaal()
    {

        return $this->kode_inkoopkanaal;
    }

    /**
     * Get the [kode_referentieprodukt_per_cluster] column value.
     *
     * @return int
     */
    public function getKodeReferentieproduktPerCluster()
    {

        return $this->kode_referentieprodukt_per_cluster;
    }

    /**
     * Get the [verkoopprijs_exclusief_btw] column value.
     *
     * @return string
     */
    public function getVerkoopprijsExclusiefBtw()
    {

        return $this->verkoopprijs_exclusief_btw;
    }

    /**
     * Get the [vergoedingsprijs] column value.
     *
     * @return string
     */
    public function getVergoedingsprijs()
    {

        return $this->vergoedingsprijs;
    }

    /**
     * Get the [referentieprijs] column value.
     *
     * @return string
     */
    public function getReferentieprijs()
    {

        return $this->referentieprijs;
    }

    /**
     * Get the [optionally formatted] temporal [datum_schorsing] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatumSchorsing($format = null)
    {
        if ($this->datum_schorsing === null) {
            return null;
        }

        if ($this->datum_schorsing === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datum_schorsing);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datum_schorsing, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [datum_doorhaling] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatumDoorhaling($format = null)
    {
        if ($this->datum_doorhaling === null) {
            return null;
        }

        if ($this->datum_doorhaling === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datum_doorhaling);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datum_doorhaling, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [mutatie_datum] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getMutatieDatum($format = null)
    {
        if ($this->mutatie_datum === null) {
            return null;
        }

        if ($this->mutatie_datum === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->mutatie_datum);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->mutatie_datum, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [uitgavedatum] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUitgavedatum($format = null)
    {
        if ($this->uitgavedatum === null) {
            return null;
        }

        if ($this->uitgavedatum === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->uitgavedatum);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->uitgavedatum, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [gvs_cluster_kode] column value.
     *
     * @return string
     */
    public function getGvsClusterKode()
    {

        return $this->gvs_cluster_kode;
    }

    /**
     * Get the [gvs_vergoedingslimiet] column value.
     *
     * @return string
     */
    public function getGvsVergoedingslimiet()
    {

        return $this->gvs_vergoedingslimiet;
    }

    /**
     * Get the [inkoopprijs] column value.
     *
     * @return string
     */
    public function getInkoopprijs()
    {

        return $this->inkoopprijs;
    }

    /**
     * Get the [europees_registratienummer] column value.
     *
     * @return string
     */
    public function getEuropeesRegistratienummer()
    {

        return $this->europees_registratienummer;
    }

    /**
     * Get the [kortingspercentage] column value.
     *
     * @return string
     */
    public function getKortingspercentage()
    {

        return $this->kortingspercentage;
    }

    /**
     * Get the [maximumprijs_vws] column value.
     *
     * @return string
     */
    public function getMaximumprijsVws()
    {

        return $this->maximumprijs_vws;
    }

    /**
     * Get the [registratie_nummer_1] column value.
     *
     * @return int
     */
    public function getRegistratieNummer1()
    {

        return $this->registratie_nummer_1;
    }

    /**
     * Get the [registratie_nummer_2] column value.
     *
     * @return string
     */
    public function getRegistratieNummer2()
    {

        return $this->registratie_nummer_2;
    }

    /**
     * Get the [registratie_nummer_3] column value.
     *
     * @return int
     */
    public function getRegistratieNummer3()
    {

        return $this->registratie_nummer_3;
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
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [zinummer] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setZinummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->zinummer !== $v) {
            $this->zinummer = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::ZINUMMER;
        }

        if ($this->aLogistiekeInformatie !== null && $this->aLogistiekeInformatie->getZindexNummer() !== $v) {
            $this->aLogistiekeInformatie = null;
        }


        return $this;
    } // setZinummer()

    /**
     * Set the value of [handelsproduktkode] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setHandelsproduktkode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->handelsproduktkode !== $v) {
            $this->handelsproduktkode = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::HANDELSPRODUKTKODE;
        }

        if ($this->aGsHandelsproducten !== null && $this->aGsHandelsproducten->getHandelsproduktkode() !== $v) {
            $this->aGsHandelsproducten = null;
        }


        return $this;
    } // setHandelsproduktkode()

    /**
     * Set the value of [artikelnaamnummer] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setArtikelnaamnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->artikelnaamnummer !== $v) {
            $this->artikelnaamnummer = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::ARTIKELNAAMNUMMER;
        }

        if ($this->aGsNamen !== null && $this->aGsNamen->getNaamnummer() !== $v) {
            $this->aGsNamen = null;
        }


        return $this;
    } // setArtikelnaamnummer()

    /**
     * Set the value of [inkoophoeveelheid] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setInkoophoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->inkoophoeveelheid !== $v) {
            $this->inkoophoeveelheid = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::INKOOPHOEVEELHEID;
        }


        return $this;
    } // setInkoophoeveelheid()

    /**
     * Set the value of [aantal_hoofdverpakkingen] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setAantalHoofdverpakkingen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aantal_hoofdverpakkingen !== $v) {
            $this->aantal_hoofdverpakkingen = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::AANTAL_HOOFDVERPAKKINGEN;
        }


        return $this;
    } // setAantalHoofdverpakkingen()

    /**
     * Set the value of [hoofdverpakking_omschrijving_thesnr] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setHoofdverpakkingOmschrijvingThesnr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hoofdverpakking_omschrijving_thesnr !== $v) {
            $this->hoofdverpakking_omschrijving_thesnr = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR;
        }

        if ($this->aHoofdverpakkingOmschrijving !== null && $this->aHoofdverpakkingOmschrijving->getThesaurusnummer() !== $v) {
            $this->aHoofdverpakkingOmschrijving = null;
        }


        return $this;
    } // setHoofdverpakkingOmschrijvingThesnr()

    /**
     * Set the value of [hoofdverpakking_omschrijving_kode] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setHoofdverpakkingOmschrijvingKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hoofdverpakking_omschrijving_kode !== $v) {
            $this->hoofdverpakking_omschrijving_kode = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE;
        }

        if ($this->aHoofdverpakkingOmschrijving !== null && $this->aHoofdverpakkingOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aHoofdverpakkingOmschrijving = null;
        }


        return $this;
    } // setHoofdverpakkingOmschrijvingKode()

    /**
     * Set the value of [aantal_deelverpakkingen] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setAantalDeelverpakkingen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aantal_deelverpakkingen !== $v) {
            $this->aantal_deelverpakkingen = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::AANTAL_DEELVERPAKKINGEN;
        }


        return $this;
    } // setAantalDeelverpakkingen()

    /**
     * Set the value of [deelverpakking_omschrijving_thesnr] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setDeelverpakkingOmschrijvingThesnr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->deelverpakking_omschrijving_thesnr !== $v) {
            $this->deelverpakking_omschrijving_thesnr = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR;
        }

        if ($this->aDeelverpakkingOmschrijving !== null && $this->aDeelverpakkingOmschrijving->getThesaurusnummer() !== $v) {
            $this->aDeelverpakkingOmschrijving = null;
        }


        return $this;
    } // setDeelverpakkingOmschrijvingThesnr()

    /**
     * Set the value of [deelverpakking_omschrijving_kode] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setDeelverpakkingOmschrijvingKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->deelverpakking_omschrijving_kode !== $v) {
            $this->deelverpakking_omschrijving_kode = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE;
        }

        if ($this->aDeelverpakkingOmschrijving !== null && $this->aDeelverpakkingOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aDeelverpakkingOmschrijving = null;
        }


        return $this;
    } // setDeelverpakkingOmschrijvingKode()

    /**
     * Set the value of [hoeveelheid_per_deelverpakking] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setHoeveelheidPerDeelverpakking($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hoeveelheid_per_deelverpakking !== $v) {
            $this->hoeveelheid_per_deelverpakking = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::HOEVEELHEID_PER_DEELVERPAKKING;
        }


        return $this;
    } // setHoeveelheidPerDeelverpakking()

    /**
     * Set the value of [un_kode] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setUnKode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->un_kode !== $v) {
            $this->un_kode = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::UN_KODE;
        }


        return $this;
    } // setUnKode()

    /**
     * Sets the value of [un_datum] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setUnDatum($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->un_datum !== null || $dt !== null) {
            $currentDateAsString = ($this->un_datum !== null && $tmpDt = new DateTime($this->un_datum)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->un_datum = $newDateAsString;
                $this->modifiedColumns[] = GsArtikelenPeer::UN_DATUM;
            }
        } // if either are not null


        return $this;
    } // setUnDatum()

    /**
     * Set the value of [kode_wet_op_de_geneesmiddelen] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setKodeWetOpDeGeneesmiddelen($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->kode_wet_op_de_geneesmiddelen !== $v) {
            $this->kode_wet_op_de_geneesmiddelen = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::KODE_WET_OP_DE_GENEESMIDDELEN;
        }


        return $this;
    } // setKodeWetOpDeGeneesmiddelen()

    /**
     * Set the value of [kode_koelkast] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setKodeKoelkast($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->kode_koelkast !== $v) {
            $this->kode_koelkast = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::KODE_KOELKAST;
        }


        return $this;
    } // setKodeKoelkast()

    /**
     * Set the value of [kode_kliniekverpakking] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setKodeKliniekverpakking($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->kode_kliniekverpakking !== $v) {
            $this->kode_kliniekverpakking = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::KODE_KLINIEKVERPAKKING;
        }


        return $this;
    } // setKodeKliniekverpakking()

    /**
     * Set the value of [kode_vervaldatum] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setKodeVervaldatum($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->kode_vervaldatum !== $v) {
            $this->kode_vervaldatum = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::KODE_VERVALDATUM;
        }


        return $this;
    } // setKodeVervaldatum()

    /**
     * Set the value of [kode_easysteem] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setKodeEasysteem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->kode_easysteem !== $v) {
            $this->kode_easysteem = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::KODE_EASYSTEEM;
        }


        return $this;
    } // setKodeEasysteem()

    /**
     * Set the value of [rvgnummer_1] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setRvgnummer1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rvgnummer_1 !== $v) {
            $this->rvgnummer_1 = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::RVGNUMMER_1;
        }


        return $this;
    } // setRvgnummer1()

    /**
     * Set the value of [rvgnummer_2] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setRvgnummer2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rvgnummer_2 !== $v) {
            $this->rvgnummer_2 = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::RVGNUMMER_2;
        }


        return $this;
    } // setRvgnummer2()

    /**
     * Set the value of [rvgnummer_3] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setRvgnummer3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rvgnummer_3 !== $v) {
            $this->rvgnummer_3 = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::RVGNUMMER_3;
        }


        return $this;
    } // setRvgnummer3()

    /**
     * Sets the value of [datum_inschrijving_registratie] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setDatumInschrijvingRegistratie($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datum_inschrijving_registratie !== null || $dt !== null) {
            $currentDateAsString = ($this->datum_inschrijving_registratie !== null && $tmpDt = new DateTime($this->datum_inschrijving_registratie)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datum_inschrijving_registratie = $newDateAsString;
                $this->modifiedColumns[] = GsArtikelenPeer::DATUM_INSCHRIJVING_REGISTRATIE;
            }
        } // if either are not null


        return $this;
    } // setDatumInschrijvingRegistratie()

    /**
     * Set the value of [aantal_ddds_per_verpakking] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setAantalDddsPerVerpakking($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->aantal_ddds_per_verpakking !== $v) {
            $this->aantal_ddds_per_verpakking = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::AANTAL_DDDS_PER_VERPAKKING;
        }


        return $this;
    } // setAantalDddsPerVerpakking()

    /**
     * Set the value of [fabrikant_artikelkodering] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setFabrikantArtikelkodering($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->fabrikant_artikelkodering !== $v) {
            $this->fabrikant_artikelkodering = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::FABRIKANT_ARTIKELKODERING;
        }


        return $this;
    } // setFabrikantArtikelkodering()

    /**
     * Set the value of [registratiehouder_kode] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setRegistratiehouderKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->registratiehouder_kode !== $v) {
            $this->registratiehouder_kode = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::REGISTRATIEHOUDER_KODE;
        }

        if ($this->aRegistratiehouder !== null && $this->aRegistratiehouder->getNawNummer() !== $v) {
            $this->aRegistratiehouder = null;
        }


        return $this;
    } // setRegistratiehouderKode()

    /**
     * Set the value of [importeur_kode] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setImporteurKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->importeur_kode !== $v) {
            $this->importeur_kode = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::IMPORTEUR_KODE;
        }

        if ($this->aImporteur !== null && $this->aImporteur->getNawNummer() !== $v) {
            $this->aImporteur = null;
        }


        return $this;
    } // setImporteurKode()

    /**
     * Set the value of [leverancier_kode] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setLeverancierKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->leverancier_kode !== $v) {
            $this->leverancier_kode = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::LEVERANCIER_KODE;
        }

        if ($this->aLeverancier !== null && $this->aLeverancier->getNawNummer() !== $v) {
            $this->aLeverancier = null;
        }


        return $this;
    } // setLeverancierKode()

    /**
     * Set the value of [land_van_herkomst_thesaurus_nummer] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setLandVanHerkomstThesaurusNummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->land_van_herkomst_thesaurus_nummer !== $v) {
            $this->land_van_herkomst_thesaurus_nummer = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER;
        }

        if ($this->aLandOmschrijving !== null && $this->aLandOmschrijving->getThesaurusnummer() !== $v) {
            $this->aLandOmschrijving = null;
        }


        return $this;
    } // setLandVanHerkomstThesaurusNummer()

    /**
     * Set the value of [land_van_herkomst_kode] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setLandVanHerkomstKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->land_van_herkomst_kode !== $v) {
            $this->land_van_herkomst_kode = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::LAND_VAN_HERKOMST_KODE;
        }

        if ($this->aLandOmschrijving !== null && $this->aLandOmschrijving->getThesaurusItemnummer() !== $v) {
            $this->aLandOmschrijving = null;
        }


        return $this;
    } // setLandVanHerkomstKode()

    /**
     * Sets the value of [datum_invoer_verpakking] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setDatumInvoerVerpakking($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datum_invoer_verpakking !== null || $dt !== null) {
            $currentDateAsString = ($this->datum_invoer_verpakking !== null && $tmpDt = new DateTime($this->datum_invoer_verpakking)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datum_invoer_verpakking = $newDateAsString;
                $this->modifiedColumns[] = GsArtikelenPeer::DATUM_INVOER_VERPAKKING;
            }
        } // if either are not null


        return $this;
    } // setDatumInvoerVerpakking()

    /**
     * Sets the value of [datum_afvoer_verpakking] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setDatumAfvoerVerpakking($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datum_afvoer_verpakking !== null || $dt !== null) {
            $currentDateAsString = ($this->datum_afvoer_verpakking !== null && $tmpDt = new DateTime($this->datum_afvoer_verpakking)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datum_afvoer_verpakking = $newDateAsString;
                $this->modifiedColumns[] = GsArtikelenPeer::DATUM_AFVOER_VERPAKKING;
            }
        } // if either are not null


        return $this;
    } // setDatumAfvoerVerpakking()

    /**
     * Set the value of [produktkoppel_kode] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setProduktkoppelKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->produktkoppel_kode !== $v) {
            $this->produktkoppel_kode = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::PRODUKTKOPPEL_KODE;
        }


        return $this;
    } // setProduktkoppelKode()

    /**
     * Set the value of [wtgkode] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setWtgkode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->wtgkode !== $v) {
            $this->wtgkode = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::WTGKODE;
        }


        return $this;
    } // setWtgkode()

    /**
     * Set the value of [btwkode_voor_declaratie] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setBtwkodeVoorDeclaratie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->btwkode_voor_declaratie !== $v) {
            $this->btwkode_voor_declaratie = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::BTWKODE_VOOR_DECLARATIE;
        }


        return $this;
    } // setBtwkodeVoorDeclaratie()

    /**
     * Set the value of [kode_inkoopkanaal] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setKodeInkoopkanaal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->kode_inkoopkanaal !== $v) {
            $this->kode_inkoopkanaal = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::KODE_INKOOPKANAAL;
        }


        return $this;
    } // setKodeInkoopkanaal()

    /**
     * Set the value of [kode_referentieprodukt_per_cluster] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setKodeReferentieproduktPerCluster($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->kode_referentieprodukt_per_cluster !== $v) {
            $this->kode_referentieprodukt_per_cluster = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::KODE_REFERENTIEPRODUKT_PER_CLUSTER;
        }


        return $this;
    } // setKodeReferentieproduktPerCluster()

    /**
     * Set the value of [verkoopprijs_exclusief_btw] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setVerkoopprijsExclusiefBtw($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->verkoopprijs_exclusief_btw !== $v) {
            $this->verkoopprijs_exclusief_btw = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::VERKOOPPRIJS_EXCLUSIEF_BTW;
        }


        return $this;
    } // setVerkoopprijsExclusiefBtw()

    /**
     * Set the value of [vergoedingsprijs] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setVergoedingsprijs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->vergoedingsprijs !== $v) {
            $this->vergoedingsprijs = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::VERGOEDINGSPRIJS;
        }


        return $this;
    } // setVergoedingsprijs()

    /**
     * Set the value of [referentieprijs] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setReferentieprijs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->referentieprijs !== $v) {
            $this->referentieprijs = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::REFERENTIEPRIJS;
        }


        return $this;
    } // setReferentieprijs()

    /**
     * Sets the value of [datum_schorsing] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setDatumSchorsing($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datum_schorsing !== null || $dt !== null) {
            $currentDateAsString = ($this->datum_schorsing !== null && $tmpDt = new DateTime($this->datum_schorsing)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datum_schorsing = $newDateAsString;
                $this->modifiedColumns[] = GsArtikelenPeer::DATUM_SCHORSING;
            }
        } // if either are not null


        return $this;
    } // setDatumSchorsing()

    /**
     * Sets the value of [datum_doorhaling] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setDatumDoorhaling($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datum_doorhaling !== null || $dt !== null) {
            $currentDateAsString = ($this->datum_doorhaling !== null && $tmpDt = new DateTime($this->datum_doorhaling)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datum_doorhaling = $newDateAsString;
                $this->modifiedColumns[] = GsArtikelenPeer::DATUM_DOORHALING;
            }
        } // if either are not null


        return $this;
    } // setDatumDoorhaling()

    /**
     * Sets the value of [mutatie_datum] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setMutatieDatum($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->mutatie_datum !== null || $dt !== null) {
            $currentDateAsString = ($this->mutatie_datum !== null && $tmpDt = new DateTime($this->mutatie_datum)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->mutatie_datum = $newDateAsString;
                $this->modifiedColumns[] = GsArtikelenPeer::MUTATIE_DATUM;
            }
        } // if either are not null


        return $this;
    } // setMutatieDatum()

    /**
     * Sets the value of [uitgavedatum] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setUitgavedatum($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->uitgavedatum !== null || $dt !== null) {
            $currentDateAsString = ($this->uitgavedatum !== null && $tmpDt = new DateTime($this->uitgavedatum)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->uitgavedatum = $newDateAsString;
                $this->modifiedColumns[] = GsArtikelenPeer::UITGAVEDATUM;
            }
        } // if either are not null


        return $this;
    } // setUitgavedatum()

    /**
     * Set the value of [gvs_cluster_kode] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setGvsClusterKode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->gvs_cluster_kode !== $v) {
            $this->gvs_cluster_kode = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::GVS_CLUSTER_KODE;
        }


        return $this;
    } // setGvsClusterKode()

    /**
     * Set the value of [gvs_vergoedingslimiet] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setGvsVergoedingslimiet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gvs_vergoedingslimiet !== $v) {
            $this->gvs_vergoedingslimiet = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::GVS_VERGOEDINGSLIMIET;
        }


        return $this;
    } // setGvsVergoedingslimiet()

    /**
     * Set the value of [inkoopprijs] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setInkoopprijs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->inkoopprijs !== $v) {
            $this->inkoopprijs = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::INKOOPPRIJS;
        }


        return $this;
    } // setInkoopprijs()

    /**
     * Set the value of [europees_registratienummer] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setEuropeesRegistratienummer($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->europees_registratienummer !== $v) {
            $this->europees_registratienummer = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::EUROPEES_REGISTRATIENUMMER;
        }


        return $this;
    } // setEuropeesRegistratienummer()

    /**
     * Set the value of [kortingspercentage] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setKortingspercentage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->kortingspercentage !== $v) {
            $this->kortingspercentage = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::KORTINGSPERCENTAGE;
        }


        return $this;
    } // setKortingspercentage()

    /**
     * Set the value of [maximumprijs_vws] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setMaximumprijsVws($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->maximumprijs_vws !== $v) {
            $this->maximumprijs_vws = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::MAXIMUMPRIJS_VWS;
        }


        return $this;
    } // setMaximumprijsVws()

    /**
     * Set the value of [registratie_nummer_1] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setRegistratieNummer1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->registratie_nummer_1 !== $v) {
            $this->registratie_nummer_1 = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::REGISTRATIE_NUMMER_1;
        }


        return $this;
    } // setRegistratieNummer1()

    /**
     * Set the value of [registratie_nummer_2] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setRegistratieNummer2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->registratie_nummer_2 !== $v) {
            $this->registratie_nummer_2 = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::REGISTRATIE_NUMMER_2;
        }


        return $this;
    } // setRegistratieNummer2()

    /**
     * Set the value of [registratie_nummer_3] column.
     *
     * @param  int $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setRegistratieNummer3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->registratie_nummer_3 !== $v) {
            $this->registratie_nummer_3 = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::REGISTRATIE_NUMMER_3;
        }


        return $this;
    } // setRegistratieNummer3()

    /**
     * Set the value of [slug] column.
     *
     * @param  string $v new value
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setSlug($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->slug !== $v) {
            $this->slug = $v;
            $this->modifiedColumns[] = GsArtikelenPeer::SLUG;
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
            $this->zinummer = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->handelsproduktkode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->artikelnaamnummer = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->inkoophoeveelheid = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->aantal_hoofdverpakkingen = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->hoofdverpakking_omschrijving_thesnr = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->hoofdverpakking_omschrijving_kode = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->aantal_deelverpakkingen = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->deelverpakking_omschrijving_thesnr = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->deelverpakking_omschrijving_kode = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->hoeveelheid_per_deelverpakking = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->un_kode = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->un_datum = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->kode_wet_op_de_geneesmiddelen = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->kode_koelkast = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->kode_kliniekverpakking = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->kode_vervaldatum = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->kode_easysteem = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->rvgnummer_1 = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->rvgnummer_2 = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->rvgnummer_3 = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->datum_inschrijving_registratie = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->aantal_ddds_per_verpakking = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->fabrikant_artikelkodering = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->registratiehouder_kode = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->importeur_kode = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->leverancier_kode = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->land_van_herkomst_thesaurus_nummer = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->land_van_herkomst_kode = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->datum_invoer_verpakking = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->datum_afvoer_verpakking = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->produktkoppel_kode = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->wtgkode = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->btwkode_voor_declaratie = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->kode_inkoopkanaal = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->kode_referentieprodukt_per_cluster = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->verkoopprijs_exclusief_btw = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->vergoedingsprijs = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->referentieprijs = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->datum_schorsing = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->datum_doorhaling = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->mutatie_datum = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->uitgavedatum = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->gvs_cluster_kode = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->gvs_vergoedingslimiet = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->inkoopprijs = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->europees_registratienummer = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->kortingspercentage = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->maximumprijs_vws = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->registratie_nummer_1 = ($row[$startcol + 51] !== null) ? (int) $row[$startcol + 51] : null;
            $this->registratie_nummer_2 = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->registratie_nummer_3 = ($row[$startcol + 53] !== null) ? (int) $row[$startcol + 53] : null;
            $this->slug = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 55; // 55 = GsArtikelenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsArtikelen object", $e);
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

        if ($this->aLogistiekeInformatie !== null && $this->zinummer !== $this->aLogistiekeInformatie->getZindexNummer()) {
            $this->aLogistiekeInformatie = null;
        }
        if ($this->aGsHandelsproducten !== null && $this->handelsproduktkode !== $this->aGsHandelsproducten->getHandelsproduktkode()) {
            $this->aGsHandelsproducten = null;
        }
        if ($this->aGsNamen !== null && $this->artikelnaamnummer !== $this->aGsNamen->getNaamnummer()) {
            $this->aGsNamen = null;
        }
        if ($this->aHoofdverpakkingOmschrijving !== null && $this->hoofdverpakking_omschrijving_thesnr !== $this->aHoofdverpakkingOmschrijving->getThesaurusnummer()) {
            $this->aHoofdverpakkingOmschrijving = null;
        }
        if ($this->aHoofdverpakkingOmschrijving !== null && $this->hoofdverpakking_omschrijving_kode !== $this->aHoofdverpakkingOmschrijving->getThesaurusItemnummer()) {
            $this->aHoofdverpakkingOmschrijving = null;
        }
        if ($this->aDeelverpakkingOmschrijving !== null && $this->deelverpakking_omschrijving_thesnr !== $this->aDeelverpakkingOmschrijving->getThesaurusnummer()) {
            $this->aDeelverpakkingOmschrijving = null;
        }
        if ($this->aDeelverpakkingOmschrijving !== null && $this->deelverpakking_omschrijving_kode !== $this->aDeelverpakkingOmschrijving->getThesaurusItemnummer()) {
            $this->aDeelverpakkingOmschrijving = null;
        }
        if ($this->aRegistratiehouder !== null && $this->registratiehouder_kode !== $this->aRegistratiehouder->getNawNummer()) {
            $this->aRegistratiehouder = null;
        }
        if ($this->aImporteur !== null && $this->importeur_kode !== $this->aImporteur->getNawNummer()) {
            $this->aImporteur = null;
        }
        if ($this->aLeverancier !== null && $this->leverancier_kode !== $this->aLeverancier->getNawNummer()) {
            $this->aLeverancier = null;
        }
        if ($this->aLandOmschrijving !== null && $this->land_van_herkomst_thesaurus_nummer !== $this->aLandOmschrijving->getThesaurusnummer()) {
            $this->aLandOmschrijving = null;
        }
        if ($this->aLandOmschrijving !== null && $this->land_van_herkomst_kode !== $this->aLandOmschrijving->getThesaurusItemnummer()) {
            $this->aLandOmschrijving = null;
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
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsArtikelenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGsHandelsproducten = null;
            $this->aGsNamen = null;
            $this->aLeverancier = null;
            $this->aImporteur = null;
            $this->aRegistratiehouder = null;
            $this->aLandOmschrijving = null;
            $this->aHoofdverpakkingOmschrijving = null;
            $this->aDeelverpakkingOmschrijving = null;
            $this->aLogistiekeInformatie = null;
            $this->collGsSupplementaireProductenHistories = null;

            $this->singleGsArtikelEigenschappen = null;

            $this->singleGsRzvAanspraak = null;

            $this->collGsLogistiekeVerpakkingsinformaties = null;

            $this->singleGsSupplementaireProductenMetNzaMaximumtarief = null;

            $this->collGsIndicatiesBijSupplementaireProductens = null;

            $this->collGsLeveranciersassortimentens = null;

            $this->collGsLogistiekeInformatiesRelatedByZindexNummer = null;

            $this->collGsPreferentieBeleids = null;

            $this->singleGsRelatieTussenZinummerHibc = null;

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
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsArtikelenQuery::create()
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
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            // sluggable behavior

            if ($this->isColumnModified(GsArtikelenPeer::SLUG) && $this->getSlug()) {
                $this->setSlug($this->makeSlugUnique($this->getSlug()));
            } elseif ($this->isColumnModified(GsArtikelenPeer::ZINUMMER)) {
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
                GsArtikelenPeer::addInstanceToPool($this);
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

            if ($this->aGsHandelsproducten !== null) {
                if ($this->aGsHandelsproducten->isModified() || $this->aGsHandelsproducten->isNew()) {
                    $affectedRows += $this->aGsHandelsproducten->save($con);
                }
                $this->setGsHandelsproducten($this->aGsHandelsproducten);
            }

            if ($this->aGsNamen !== null) {
                if ($this->aGsNamen->isModified() || $this->aGsNamen->isNew()) {
                    $affectedRows += $this->aGsNamen->save($con);
                }
                $this->setGsNamen($this->aGsNamen);
            }

            if ($this->aLeverancier !== null) {
                if ($this->aLeverancier->isModified() || $this->aLeverancier->isNew()) {
                    $affectedRows += $this->aLeverancier->save($con);
                }
                $this->setLeverancier($this->aLeverancier);
            }

            if ($this->aImporteur !== null) {
                if ($this->aImporteur->isModified() || $this->aImporteur->isNew()) {
                    $affectedRows += $this->aImporteur->save($con);
                }
                $this->setImporteur($this->aImporteur);
            }

            if ($this->aRegistratiehouder !== null) {
                if ($this->aRegistratiehouder->isModified() || $this->aRegistratiehouder->isNew()) {
                    $affectedRows += $this->aRegistratiehouder->save($con);
                }
                $this->setRegistratiehouder($this->aRegistratiehouder);
            }

            if ($this->aLandOmschrijving !== null) {
                if ($this->aLandOmschrijving->isModified() || $this->aLandOmschrijving->isNew()) {
                    $affectedRows += $this->aLandOmschrijving->save($con);
                }
                $this->setLandOmschrijving($this->aLandOmschrijving);
            }

            if ($this->aHoofdverpakkingOmschrijving !== null) {
                if ($this->aHoofdverpakkingOmschrijving->isModified() || $this->aHoofdverpakkingOmschrijving->isNew()) {
                    $affectedRows += $this->aHoofdverpakkingOmschrijving->save($con);
                }
                $this->setHoofdverpakkingOmschrijving($this->aHoofdverpakkingOmschrijving);
            }

            if ($this->aDeelverpakkingOmschrijving !== null) {
                if ($this->aDeelverpakkingOmschrijving->isModified() || $this->aDeelverpakkingOmschrijving->isNew()) {
                    $affectedRows += $this->aDeelverpakkingOmschrijving->save($con);
                }
                $this->setDeelverpakkingOmschrijving($this->aDeelverpakkingOmschrijving);
            }

            if ($this->aLogistiekeInformatie !== null) {
                if ($this->aLogistiekeInformatie->isModified() || $this->aLogistiekeInformatie->isNew()) {
                    $affectedRows += $this->aLogistiekeInformatie->save($con);
                }
                $this->setLogistiekeInformatie($this->aLogistiekeInformatie);
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

            if ($this->gsSupplementaireProductenHistoriesScheduledForDeletion !== null) {
                if (!$this->gsSupplementaireProductenHistoriesScheduledForDeletion->isEmpty()) {
                    GsSupplementaireProductenHistorieQuery::create()
                        ->filterByPrimaryKeys($this->gsSupplementaireProductenHistoriesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->gsSupplementaireProductenHistoriesScheduledForDeletion = null;
                }
            }

            if ($this->collGsSupplementaireProductenHistories !== null) {
                foreach ($this->collGsSupplementaireProductenHistories as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->singleGsArtikelEigenschappen !== null) {
                if (!$this->singleGsArtikelEigenschappen->isDeleted() && ($this->singleGsArtikelEigenschappen->isNew() || $this->singleGsArtikelEigenschappen->isModified())) {
                        $affectedRows += $this->singleGsArtikelEigenschappen->save($con);
                }
            }

            if ($this->singleGsRzvAanspraak !== null) {
                if (!$this->singleGsRzvAanspraak->isDeleted() && ($this->singleGsRzvAanspraak->isNew() || $this->singleGsRzvAanspraak->isModified())) {
                        $affectedRows += $this->singleGsRzvAanspraak->save($con);
                }
            }

            if ($this->gsLogistiekeVerpakkingsinformatiesScheduledForDeletion !== null) {
                if (!$this->gsLogistiekeVerpakkingsinformatiesScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsLogistiekeVerpakkingsinformatiesScheduledForDeletion as $gsLogistiekeVerpakkingsinformatie) {
                        // need to save related object because we set the relation to null
                        $gsLogistiekeVerpakkingsinformatie->save($con);
                    }
                    $this->gsLogistiekeVerpakkingsinformatiesScheduledForDeletion = null;
                }
            }

            if ($this->collGsLogistiekeVerpakkingsinformaties !== null) {
                foreach ($this->collGsLogistiekeVerpakkingsinformaties as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->singleGsSupplementaireProductenMetNzaMaximumtarief !== null) {
                if (!$this->singleGsSupplementaireProductenMetNzaMaximumtarief->isDeleted() && ($this->singleGsSupplementaireProductenMetNzaMaximumtarief->isNew() || $this->singleGsSupplementaireProductenMetNzaMaximumtarief->isModified())) {
                        $affectedRows += $this->singleGsSupplementaireProductenMetNzaMaximumtarief->save($con);
                }
            }

            if ($this->gsIndicatiesBijSupplementaireProductensScheduledForDeletion !== null) {
                if (!$this->gsIndicatiesBijSupplementaireProductensScheduledForDeletion->isEmpty()) {
                    GsIndicatiesBijSupplementaireProductenQuery::create()
                        ->filterByPrimaryKeys($this->gsIndicatiesBijSupplementaireProductensScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->gsIndicatiesBijSupplementaireProductensScheduledForDeletion = null;
                }
            }

            if ($this->collGsIndicatiesBijSupplementaireProductens !== null) {
                foreach ($this->collGsIndicatiesBijSupplementaireProductens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsLeveranciersassortimentensScheduledForDeletion !== null) {
                if (!$this->gsLeveranciersassortimentensScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsLeveranciersassortimentensScheduledForDeletion as $gsLeveranciersassortimenten) {
                        // need to save related object because we set the relation to null
                        $gsLeveranciersassortimenten->save($con);
                    }
                    $this->gsLeveranciersassortimentensScheduledForDeletion = null;
                }
            }

            if ($this->collGsLeveranciersassortimentens !== null) {
                foreach ($this->collGsLeveranciersassortimentens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsLogistiekeInformatiesRelatedByZindexNummerScheduledForDeletion !== null) {
                if (!$this->gsLogistiekeInformatiesRelatedByZindexNummerScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsLogistiekeInformatiesRelatedByZindexNummerScheduledForDeletion as $gsLogistiekeInformatieRelatedByZindexNummer) {
                        // need to save related object because we set the relation to null
                        $gsLogistiekeInformatieRelatedByZindexNummer->save($con);
                    }
                    $this->gsLogistiekeInformatiesRelatedByZindexNummerScheduledForDeletion = null;
                }
            }

            if ($this->collGsLogistiekeInformatiesRelatedByZindexNummer !== null) {
                foreach ($this->collGsLogistiekeInformatiesRelatedByZindexNummer as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsPreferentieBeleidsScheduledForDeletion !== null) {
                if (!$this->gsPreferentieBeleidsScheduledForDeletion->isEmpty()) {
                    GsPreferentieBeleidQuery::create()
                        ->filterByPrimaryKeys($this->gsPreferentieBeleidsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->gsPreferentieBeleidsScheduledForDeletion = null;
                }
            }

            if ($this->collGsPreferentieBeleids !== null) {
                foreach ($this->collGsPreferentieBeleids as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->singleGsRelatieTussenZinummerHibc !== null) {
                if (!$this->singleGsRelatieTussenZinummerHibc->isDeleted() && ($this->singleGsRelatieTussenZinummerHibc->isNew() || $this->singleGsRelatieTussenZinummerHibc->isModified())) {
                        $affectedRows += $this->singleGsRelatieTussenZinummerHibc->save($con);
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
        if ($this->isColumnModified(GsArtikelenPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::ZINUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`zinummer`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::HANDELSPRODUKTKODE)) {
            $modifiedColumns[':p' . $index++]  = '`handelsproduktkode`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::ARTIKELNAAMNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`artikelnaamnummer`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::INKOOPHOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`inkoophoeveelheid`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::AANTAL_HOOFDVERPAKKINGEN)) {
            $modifiedColumns[':p' . $index++]  = '`aantal_hoofdverpakkingen`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR)) {
            $modifiedColumns[':p' . $index++]  = '`hoofdverpakking_omschrijving_thesnr`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`hoofdverpakking_omschrijving_kode`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::AANTAL_DEELVERPAKKINGEN)) {
            $modifiedColumns[':p' . $index++]  = '`aantal_deelverpakkingen`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR)) {
            $modifiedColumns[':p' . $index++]  = '`deelverpakking_omschrijving_thesnr`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`deelverpakking_omschrijving_kode`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::HOEVEELHEID_PER_DEELVERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`hoeveelheid_per_deelverpakking`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::UN_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`un_kode`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::UN_DATUM)) {
            $modifiedColumns[':p' . $index++]  = '`un_datum`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::KODE_WET_OP_DE_GENEESMIDDELEN)) {
            $modifiedColumns[':p' . $index++]  = '`kode_wet_op_de_geneesmiddelen`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::KODE_KOELKAST)) {
            $modifiedColumns[':p' . $index++]  = '`kode_koelkast`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::KODE_KLINIEKVERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`kode_kliniekverpakking`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::KODE_VERVALDATUM)) {
            $modifiedColumns[':p' . $index++]  = '`kode_vervaldatum`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::KODE_EASYSTEEM)) {
            $modifiedColumns[':p' . $index++]  = '`kode_easysteem`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::RVGNUMMER_1)) {
            $modifiedColumns[':p' . $index++]  = '`rvgnummer_1`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::RVGNUMMER_2)) {
            $modifiedColumns[':p' . $index++]  = '`rvgnummer_2`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::RVGNUMMER_3)) {
            $modifiedColumns[':p' . $index++]  = '`rvgnummer_3`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::DATUM_INSCHRIJVING_REGISTRATIE)) {
            $modifiedColumns[':p' . $index++]  = '`datum_inschrijving_registratie`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::AANTAL_DDDS_PER_VERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`aantal_ddds_per_verpakking`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::FABRIKANT_ARTIKELKODERING)) {
            $modifiedColumns[':p' . $index++]  = '`fabrikant_artikelkodering`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::REGISTRATIEHOUDER_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`registratiehouder_kode`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::IMPORTEUR_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`importeur_kode`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::LEVERANCIER_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`leverancier_kode`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`land_van_herkomst_thesaurus_nummer`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`land_van_herkomst_kode`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::DATUM_INVOER_VERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`datum_invoer_verpakking`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::DATUM_AFVOER_VERPAKKING)) {
            $modifiedColumns[':p' . $index++]  = '`datum_afvoer_verpakking`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::PRODUKTKOPPEL_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`produktkoppel_kode`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::WTGKODE)) {
            $modifiedColumns[':p' . $index++]  = '`wtgkode`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::BTWKODE_VOOR_DECLARATIE)) {
            $modifiedColumns[':p' . $index++]  = '`btwkode_voor_declaratie`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::KODE_INKOOPKANAAL)) {
            $modifiedColumns[':p' . $index++]  = '`kode_inkoopkanaal`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::KODE_REFERENTIEPRODUKT_PER_CLUSTER)) {
            $modifiedColumns[':p' . $index++]  = '`kode_referentieprodukt_per_cluster`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::VERKOOPPRIJS_EXCLUSIEF_BTW)) {
            $modifiedColumns[':p' . $index++]  = '`verkoopprijs_exclusief_btw`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::VERGOEDINGSPRIJS)) {
            $modifiedColumns[':p' . $index++]  = '`vergoedingsprijs`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::REFERENTIEPRIJS)) {
            $modifiedColumns[':p' . $index++]  = '`referentieprijs`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::DATUM_SCHORSING)) {
            $modifiedColumns[':p' . $index++]  = '`datum_schorsing`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::DATUM_DOORHALING)) {
            $modifiedColumns[':p' . $index++]  = '`datum_doorhaling`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::MUTATIE_DATUM)) {
            $modifiedColumns[':p' . $index++]  = '`mutatie_datum`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::UITGAVEDATUM)) {
            $modifiedColumns[':p' . $index++]  = '`uitgavedatum`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::GVS_CLUSTER_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`gvs_cluster_kode`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::GVS_VERGOEDINGSLIMIET)) {
            $modifiedColumns[':p' . $index++]  = '`gvs_vergoedingslimiet`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::INKOOPPRIJS)) {
            $modifiedColumns[':p' . $index++]  = '`inkoopprijs`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::EUROPEES_REGISTRATIENUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`europees_registratienummer`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::KORTINGSPERCENTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`kortingspercentage`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::MAXIMUMPRIJS_VWS)) {
            $modifiedColumns[':p' . $index++]  = '`maximumprijs_vws`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::REGISTRATIE_NUMMER_1)) {
            $modifiedColumns[':p' . $index++]  = '`registratie_nummer_1`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::REGISTRATIE_NUMMER_2)) {
            $modifiedColumns[':p' . $index++]  = '`registratie_nummer_2`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::REGISTRATIE_NUMMER_3)) {
            $modifiedColumns[':p' . $index++]  = '`registratie_nummer_3`';
        }
        if ($this->isColumnModified(GsArtikelenPeer::SLUG)) {
            $modifiedColumns[':p' . $index++]  = '`slug`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_artikelen` (%s) VALUES (%s)',
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
                    case '`handelsproduktkode`':
                        $stmt->bindValue($identifier, $this->handelsproduktkode, PDO::PARAM_INT);
                        break;
                    case '`artikelnaamnummer`':
                        $stmt->bindValue($identifier, $this->artikelnaamnummer, PDO::PARAM_INT);
                        break;
                    case '`inkoophoeveelheid`':
                        $stmt->bindValue($identifier, $this->inkoophoeveelheid, PDO::PARAM_STR);
                        break;
                    case '`aantal_hoofdverpakkingen`':
                        $stmt->bindValue($identifier, $this->aantal_hoofdverpakkingen, PDO::PARAM_INT);
                        break;
                    case '`hoofdverpakking_omschrijving_thesnr`':
                        $stmt->bindValue($identifier, $this->hoofdverpakking_omschrijving_thesnr, PDO::PARAM_INT);
                        break;
                    case '`hoofdverpakking_omschrijving_kode`':
                        $stmt->bindValue($identifier, $this->hoofdverpakking_omschrijving_kode, PDO::PARAM_INT);
                        break;
                    case '`aantal_deelverpakkingen`':
                        $stmt->bindValue($identifier, $this->aantal_deelverpakkingen, PDO::PARAM_INT);
                        break;
                    case '`deelverpakking_omschrijving_thesnr`':
                        $stmt->bindValue($identifier, $this->deelverpakking_omschrijving_thesnr, PDO::PARAM_INT);
                        break;
                    case '`deelverpakking_omschrijving_kode`':
                        $stmt->bindValue($identifier, $this->deelverpakking_omschrijving_kode, PDO::PARAM_INT);
                        break;
                    case '`hoeveelheid_per_deelverpakking`':
                        $stmt->bindValue($identifier, $this->hoeveelheid_per_deelverpakking, PDO::PARAM_STR);
                        break;
                    case '`un_kode`':
                        $stmt->bindValue($identifier, $this->un_kode, PDO::PARAM_STR);
                        break;
                    case '`un_datum`':
                        $stmt->bindValue($identifier, $this->un_datum, PDO::PARAM_STR);
                        break;
                    case '`kode_wet_op_de_geneesmiddelen`':
                        $stmt->bindValue($identifier, $this->kode_wet_op_de_geneesmiddelen, PDO::PARAM_STR);
                        break;
                    case '`kode_koelkast`':
                        $stmt->bindValue($identifier, $this->kode_koelkast, PDO::PARAM_STR);
                        break;
                    case '`kode_kliniekverpakking`':
                        $stmt->bindValue($identifier, $this->kode_kliniekverpakking, PDO::PARAM_STR);
                        break;
                    case '`kode_vervaldatum`':
                        $stmt->bindValue($identifier, $this->kode_vervaldatum, PDO::PARAM_STR);
                        break;
                    case '`kode_easysteem`':
                        $stmt->bindValue($identifier, $this->kode_easysteem, PDO::PARAM_STR);
                        break;
                    case '`rvgnummer_1`':
                        $stmt->bindValue($identifier, $this->rvgnummer_1, PDO::PARAM_INT);
                        break;
                    case '`rvgnummer_2`':
                        $stmt->bindValue($identifier, $this->rvgnummer_2, PDO::PARAM_STR);
                        break;
                    case '`rvgnummer_3`':
                        $stmt->bindValue($identifier, $this->rvgnummer_3, PDO::PARAM_INT);
                        break;
                    case '`datum_inschrijving_registratie`':
                        $stmt->bindValue($identifier, $this->datum_inschrijving_registratie, PDO::PARAM_STR);
                        break;
                    case '`aantal_ddds_per_verpakking`':
                        $stmt->bindValue($identifier, $this->aantal_ddds_per_verpakking, PDO::PARAM_STR);
                        break;
                    case '`fabrikant_artikelkodering`':
                        $stmt->bindValue($identifier, $this->fabrikant_artikelkodering, PDO::PARAM_STR);
                        break;
                    case '`registratiehouder_kode`':
                        $stmt->bindValue($identifier, $this->registratiehouder_kode, PDO::PARAM_INT);
                        break;
                    case '`importeur_kode`':
                        $stmt->bindValue($identifier, $this->importeur_kode, PDO::PARAM_INT);
                        break;
                    case '`leverancier_kode`':
                        $stmt->bindValue($identifier, $this->leverancier_kode, PDO::PARAM_INT);
                        break;
                    case '`land_van_herkomst_thesaurus_nummer`':
                        $stmt->bindValue($identifier, $this->land_van_herkomst_thesaurus_nummer, PDO::PARAM_INT);
                        break;
                    case '`land_van_herkomst_kode`':
                        $stmt->bindValue($identifier, $this->land_van_herkomst_kode, PDO::PARAM_INT);
                        break;
                    case '`datum_invoer_verpakking`':
                        $stmt->bindValue($identifier, $this->datum_invoer_verpakking, PDO::PARAM_STR);
                        break;
                    case '`datum_afvoer_verpakking`':
                        $stmt->bindValue($identifier, $this->datum_afvoer_verpakking, PDO::PARAM_STR);
                        break;
                    case '`produktkoppel_kode`':
                        $stmt->bindValue($identifier, $this->produktkoppel_kode, PDO::PARAM_INT);
                        break;
                    case '`wtgkode`':
                        $stmt->bindValue($identifier, $this->wtgkode, PDO::PARAM_INT);
                        break;
                    case '`btwkode_voor_declaratie`':
                        $stmt->bindValue($identifier, $this->btwkode_voor_declaratie, PDO::PARAM_INT);
                        break;
                    case '`kode_inkoopkanaal`':
                        $stmt->bindValue($identifier, $this->kode_inkoopkanaal, PDO::PARAM_INT);
                        break;
                    case '`kode_referentieprodukt_per_cluster`':
                        $stmt->bindValue($identifier, $this->kode_referentieprodukt_per_cluster, PDO::PARAM_INT);
                        break;
                    case '`verkoopprijs_exclusief_btw`':
                        $stmt->bindValue($identifier, $this->verkoopprijs_exclusief_btw, PDO::PARAM_STR);
                        break;
                    case '`vergoedingsprijs`':
                        $stmt->bindValue($identifier, $this->vergoedingsprijs, PDO::PARAM_STR);
                        break;
                    case '`referentieprijs`':
                        $stmt->bindValue($identifier, $this->referentieprijs, PDO::PARAM_STR);
                        break;
                    case '`datum_schorsing`':
                        $stmt->bindValue($identifier, $this->datum_schorsing, PDO::PARAM_STR);
                        break;
                    case '`datum_doorhaling`':
                        $stmt->bindValue($identifier, $this->datum_doorhaling, PDO::PARAM_STR);
                        break;
                    case '`mutatie_datum`':
                        $stmt->bindValue($identifier, $this->mutatie_datum, PDO::PARAM_STR);
                        break;
                    case '`uitgavedatum`':
                        $stmt->bindValue($identifier, $this->uitgavedatum, PDO::PARAM_STR);
                        break;
                    case '`gvs_cluster_kode`':
                        $stmt->bindValue($identifier, $this->gvs_cluster_kode, PDO::PARAM_STR);
                        break;
                    case '`gvs_vergoedingslimiet`':
                        $stmt->bindValue($identifier, $this->gvs_vergoedingslimiet, PDO::PARAM_STR);
                        break;
                    case '`inkoopprijs`':
                        $stmt->bindValue($identifier, $this->inkoopprijs, PDO::PARAM_STR);
                        break;
                    case '`europees_registratienummer`':
                        $stmt->bindValue($identifier, $this->europees_registratienummer, PDO::PARAM_STR);
                        break;
                    case '`kortingspercentage`':
                        $stmt->bindValue($identifier, $this->kortingspercentage, PDO::PARAM_STR);
                        break;
                    case '`maximumprijs_vws`':
                        $stmt->bindValue($identifier, $this->maximumprijs_vws, PDO::PARAM_STR);
                        break;
                    case '`registratie_nummer_1`':
                        $stmt->bindValue($identifier, $this->registratie_nummer_1, PDO::PARAM_INT);
                        break;
                    case '`registratie_nummer_2`':
                        $stmt->bindValue($identifier, $this->registratie_nummer_2, PDO::PARAM_STR);
                        break;
                    case '`registratie_nummer_3`':
                        $stmt->bindValue($identifier, $this->registratie_nummer_3, PDO::PARAM_INT);
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

            if ($this->aGsHandelsproducten !== null) {
                if (!$this->aGsHandelsproducten->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsHandelsproducten->getValidationFailures());
                }
            }

            if ($this->aGsNamen !== null) {
                if (!$this->aGsNamen->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGsNamen->getValidationFailures());
                }
            }

            if ($this->aLeverancier !== null) {
                if (!$this->aLeverancier->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aLeverancier->getValidationFailures());
                }
            }

            if ($this->aImporteur !== null) {
                if (!$this->aImporteur->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aImporteur->getValidationFailures());
                }
            }

            if ($this->aRegistratiehouder !== null) {
                if (!$this->aRegistratiehouder->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRegistratiehouder->getValidationFailures());
                }
            }

            if ($this->aLandOmschrijving !== null) {
                if (!$this->aLandOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aLandOmschrijving->getValidationFailures());
                }
            }

            if ($this->aHoofdverpakkingOmschrijving !== null) {
                if (!$this->aHoofdverpakkingOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aHoofdverpakkingOmschrijving->getValidationFailures());
                }
            }

            if ($this->aDeelverpakkingOmschrijving !== null) {
                if (!$this->aDeelverpakkingOmschrijving->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aDeelverpakkingOmschrijving->getValidationFailures());
                }
            }

            if ($this->aLogistiekeInformatie !== null) {
                if (!$this->aLogistiekeInformatie->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aLogistiekeInformatie->getValidationFailures());
                }
            }


            if (($retval = GsArtikelenPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collGsSupplementaireProductenHistories !== null) {
                    foreach ($this->collGsSupplementaireProductenHistories as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->singleGsArtikelEigenschappen !== null) {
                    if (!$this->singleGsArtikelEigenschappen->validate($columns)) {
                        $failureMap = array_merge($failureMap, $this->singleGsArtikelEigenschappen->getValidationFailures());
                    }
                }

                if ($this->singleGsRzvAanspraak !== null) {
                    if (!$this->singleGsRzvAanspraak->validate($columns)) {
                        $failureMap = array_merge($failureMap, $this->singleGsRzvAanspraak->getValidationFailures());
                    }
                }

                if ($this->collGsLogistiekeVerpakkingsinformaties !== null) {
                    foreach ($this->collGsLogistiekeVerpakkingsinformaties as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->singleGsSupplementaireProductenMetNzaMaximumtarief !== null) {
                    if (!$this->singleGsSupplementaireProductenMetNzaMaximumtarief->validate($columns)) {
                        $failureMap = array_merge($failureMap, $this->singleGsSupplementaireProductenMetNzaMaximumtarief->getValidationFailures());
                    }
                }

                if ($this->collGsIndicatiesBijSupplementaireProductens !== null) {
                    foreach ($this->collGsIndicatiesBijSupplementaireProductens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsLeveranciersassortimentens !== null) {
                    foreach ($this->collGsLeveranciersassortimentens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsLogistiekeInformatiesRelatedByZindexNummer !== null) {
                    foreach ($this->collGsLogistiekeInformatiesRelatedByZindexNummer as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsPreferentieBeleids !== null) {
                    foreach ($this->collGsPreferentieBeleids as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->singleGsRelatieTussenZinummerHibc !== null) {
                    if (!$this->singleGsRelatieTussenZinummerHibc->validate($columns)) {
                        $failureMap = array_merge($failureMap, $this->singleGsRelatieTussenZinummerHibc->getValidationFailures());
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
        $pos = GsArtikelenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getHandelsproduktkode();
                break;
            case 4:
                return $this->getArtikelnaamnummer();
                break;
            case 5:
                return $this->getInkoophoeveelheid();
                break;
            case 6:
                return $this->getAantalHoofdverpakkingen();
                break;
            case 7:
                return $this->getHoofdverpakkingOmschrijvingThesnr();
                break;
            case 8:
                return $this->getHoofdverpakkingOmschrijvingKode();
                break;
            case 9:
                return $this->getAantalDeelverpakkingen();
                break;
            case 10:
                return $this->getDeelverpakkingOmschrijvingThesnr();
                break;
            case 11:
                return $this->getDeelverpakkingOmschrijvingKode();
                break;
            case 12:
                return $this->getHoeveelheidPerDeelverpakking();
                break;
            case 13:
                return $this->getUnKode();
                break;
            case 14:
                return $this->getUnDatum();
                break;
            case 15:
                return $this->getKodeWetOpDeGeneesmiddelen();
                break;
            case 16:
                return $this->getKodeKoelkast();
                break;
            case 17:
                return $this->getKodeKliniekverpakking();
                break;
            case 18:
                return $this->getKodeVervaldatum();
                break;
            case 19:
                return $this->getKodeEasysteem();
                break;
            case 20:
                return $this->getRvgnummer1();
                break;
            case 21:
                return $this->getRvgnummer2();
                break;
            case 22:
                return $this->getRvgnummer3();
                break;
            case 23:
                return $this->getDatumInschrijvingRegistratie();
                break;
            case 24:
                return $this->getAantalDddsPerVerpakking();
                break;
            case 25:
                return $this->getFabrikantArtikelkodering();
                break;
            case 26:
                return $this->getRegistratiehouderKode();
                break;
            case 27:
                return $this->getImporteurKode();
                break;
            case 28:
                return $this->getLeverancierKode();
                break;
            case 29:
                return $this->getLandVanHerkomstThesaurusNummer();
                break;
            case 30:
                return $this->getLandVanHerkomstKode();
                break;
            case 31:
                return $this->getDatumInvoerVerpakking();
                break;
            case 32:
                return $this->getDatumAfvoerVerpakking();
                break;
            case 33:
                return $this->getProduktkoppelKode();
                break;
            case 34:
                return $this->getWtgkode();
                break;
            case 35:
                return $this->getBtwkodeVoorDeclaratie();
                break;
            case 36:
                return $this->getKodeInkoopkanaal();
                break;
            case 37:
                return $this->getKodeReferentieproduktPerCluster();
                break;
            case 38:
                return $this->getVerkoopprijsExclusiefBtw();
                break;
            case 39:
                return $this->getVergoedingsprijs();
                break;
            case 40:
                return $this->getReferentieprijs();
                break;
            case 41:
                return $this->getDatumSchorsing();
                break;
            case 42:
                return $this->getDatumDoorhaling();
                break;
            case 43:
                return $this->getMutatieDatum();
                break;
            case 44:
                return $this->getUitgavedatum();
                break;
            case 45:
                return $this->getGvsClusterKode();
                break;
            case 46:
                return $this->getGvsVergoedingslimiet();
                break;
            case 47:
                return $this->getInkoopprijs();
                break;
            case 48:
                return $this->getEuropeesRegistratienummer();
                break;
            case 49:
                return $this->getKortingspercentage();
                break;
            case 50:
                return $this->getMaximumprijsVws();
                break;
            case 51:
                return $this->getRegistratieNummer1();
                break;
            case 52:
                return $this->getRegistratieNummer2();
                break;
            case 53:
                return $this->getRegistratieNummer3();
                break;
            case 54:
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
        if (isset($alreadyDumpedObjects['GsArtikelen'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsArtikelen'][$this->getPrimaryKey()] = true;
        $keys = GsArtikelenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getZinummer(),
            $keys[3] => $this->getHandelsproduktkode(),
            $keys[4] => $this->getArtikelnaamnummer(),
            $keys[5] => $this->getInkoophoeveelheid(),
            $keys[6] => $this->getAantalHoofdverpakkingen(),
            $keys[7] => $this->getHoofdverpakkingOmschrijvingThesnr(),
            $keys[8] => $this->getHoofdverpakkingOmschrijvingKode(),
            $keys[9] => $this->getAantalDeelverpakkingen(),
            $keys[10] => $this->getDeelverpakkingOmschrijvingThesnr(),
            $keys[11] => $this->getDeelverpakkingOmschrijvingKode(),
            $keys[12] => $this->getHoeveelheidPerDeelverpakking(),
            $keys[13] => $this->getUnKode(),
            $keys[14] => $this->getUnDatum(),
            $keys[15] => $this->getKodeWetOpDeGeneesmiddelen(),
            $keys[16] => $this->getKodeKoelkast(),
            $keys[17] => $this->getKodeKliniekverpakking(),
            $keys[18] => $this->getKodeVervaldatum(),
            $keys[19] => $this->getKodeEasysteem(),
            $keys[20] => $this->getRvgnummer1(),
            $keys[21] => $this->getRvgnummer2(),
            $keys[22] => $this->getRvgnummer3(),
            $keys[23] => $this->getDatumInschrijvingRegistratie(),
            $keys[24] => $this->getAantalDddsPerVerpakking(),
            $keys[25] => $this->getFabrikantArtikelkodering(),
            $keys[26] => $this->getRegistratiehouderKode(),
            $keys[27] => $this->getImporteurKode(),
            $keys[28] => $this->getLeverancierKode(),
            $keys[29] => $this->getLandVanHerkomstThesaurusNummer(),
            $keys[30] => $this->getLandVanHerkomstKode(),
            $keys[31] => $this->getDatumInvoerVerpakking(),
            $keys[32] => $this->getDatumAfvoerVerpakking(),
            $keys[33] => $this->getProduktkoppelKode(),
            $keys[34] => $this->getWtgkode(),
            $keys[35] => $this->getBtwkodeVoorDeclaratie(),
            $keys[36] => $this->getKodeInkoopkanaal(),
            $keys[37] => $this->getKodeReferentieproduktPerCluster(),
            $keys[38] => $this->getVerkoopprijsExclusiefBtw(),
            $keys[39] => $this->getVergoedingsprijs(),
            $keys[40] => $this->getReferentieprijs(),
            $keys[41] => $this->getDatumSchorsing(),
            $keys[42] => $this->getDatumDoorhaling(),
            $keys[43] => $this->getMutatieDatum(),
            $keys[44] => $this->getUitgavedatum(),
            $keys[45] => $this->getGvsClusterKode(),
            $keys[46] => $this->getGvsVergoedingslimiet(),
            $keys[47] => $this->getInkoopprijs(),
            $keys[48] => $this->getEuropeesRegistratienummer(),
            $keys[49] => $this->getKortingspercentage(),
            $keys[50] => $this->getMaximumprijsVws(),
            $keys[51] => $this->getRegistratieNummer1(),
            $keys[52] => $this->getRegistratieNummer2(),
            $keys[53] => $this->getRegistratieNummer3(),
            $keys[54] => $this->getSlug(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aGsHandelsproducten) {
                $result['GsHandelsproducten'] = $this->aGsHandelsproducten->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aGsNamen) {
                $result['GsNamen'] = $this->aGsNamen->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aLeverancier) {
                $result['Leverancier'] = $this->aLeverancier->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aImporteur) {
                $result['Importeur'] = $this->aImporteur->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aRegistratiehouder) {
                $result['Registratiehouder'] = $this->aRegistratiehouder->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aLandOmschrijving) {
                $result['LandOmschrijving'] = $this->aLandOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aHoofdverpakkingOmschrijving) {
                $result['HoofdverpakkingOmschrijving'] = $this->aHoofdverpakkingOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aDeelverpakkingOmschrijving) {
                $result['DeelverpakkingOmschrijving'] = $this->aDeelverpakkingOmschrijving->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aLogistiekeInformatie) {
                $result['LogistiekeInformatie'] = $this->aLogistiekeInformatie->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collGsSupplementaireProductenHistories) {
                $result['GsSupplementaireProductenHistories'] = $this->collGsSupplementaireProductenHistories->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->singleGsArtikelEigenschappen) {
                $result['GsArtikelEigenschappen'] = $this->singleGsArtikelEigenschappen->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
            }
            if (null !== $this->singleGsRzvAanspraak) {
                $result['GsRzvAanspraak'] = $this->singleGsRzvAanspraak->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
            }
            if (null !== $this->collGsLogistiekeVerpakkingsinformaties) {
                $result['GsLogistiekeVerpakkingsinformaties'] = $this->collGsLogistiekeVerpakkingsinformaties->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->singleGsSupplementaireProductenMetNzaMaximumtarief) {
                $result['GsSupplementaireProductenMetNzaMaximumtarief'] = $this->singleGsSupplementaireProductenMetNzaMaximumtarief->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
            }
            if (null !== $this->collGsIndicatiesBijSupplementaireProductens) {
                $result['GsIndicatiesBijSupplementaireProductens'] = $this->collGsIndicatiesBijSupplementaireProductens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsLeveranciersassortimentens) {
                $result['GsLeveranciersassortimentens'] = $this->collGsLeveranciersassortimentens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsLogistiekeInformatiesRelatedByZindexNummer) {
                $result['GsLogistiekeInformatiesRelatedByZindexNummer'] = $this->collGsLogistiekeInformatiesRelatedByZindexNummer->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsPreferentieBeleids) {
                $result['GsPreferentieBeleids'] = $this->collGsPreferentieBeleids->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->singleGsRelatieTussenZinummerHibc) {
                $result['GsRelatieTussenZinummerHibc'] = $this->singleGsRelatieTussenZinummerHibc->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
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
        $pos = GsArtikelenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setHandelsproduktkode($value);
                break;
            case 4:
                $this->setArtikelnaamnummer($value);
                break;
            case 5:
                $this->setInkoophoeveelheid($value);
                break;
            case 6:
                $this->setAantalHoofdverpakkingen($value);
                break;
            case 7:
                $this->setHoofdverpakkingOmschrijvingThesnr($value);
                break;
            case 8:
                $this->setHoofdverpakkingOmschrijvingKode($value);
                break;
            case 9:
                $this->setAantalDeelverpakkingen($value);
                break;
            case 10:
                $this->setDeelverpakkingOmschrijvingThesnr($value);
                break;
            case 11:
                $this->setDeelverpakkingOmschrijvingKode($value);
                break;
            case 12:
                $this->setHoeveelheidPerDeelverpakking($value);
                break;
            case 13:
                $this->setUnKode($value);
                break;
            case 14:
                $this->setUnDatum($value);
                break;
            case 15:
                $this->setKodeWetOpDeGeneesmiddelen($value);
                break;
            case 16:
                $this->setKodeKoelkast($value);
                break;
            case 17:
                $this->setKodeKliniekverpakking($value);
                break;
            case 18:
                $this->setKodeVervaldatum($value);
                break;
            case 19:
                $this->setKodeEasysteem($value);
                break;
            case 20:
                $this->setRvgnummer1($value);
                break;
            case 21:
                $this->setRvgnummer2($value);
                break;
            case 22:
                $this->setRvgnummer3($value);
                break;
            case 23:
                $this->setDatumInschrijvingRegistratie($value);
                break;
            case 24:
                $this->setAantalDddsPerVerpakking($value);
                break;
            case 25:
                $this->setFabrikantArtikelkodering($value);
                break;
            case 26:
                $this->setRegistratiehouderKode($value);
                break;
            case 27:
                $this->setImporteurKode($value);
                break;
            case 28:
                $this->setLeverancierKode($value);
                break;
            case 29:
                $this->setLandVanHerkomstThesaurusNummer($value);
                break;
            case 30:
                $this->setLandVanHerkomstKode($value);
                break;
            case 31:
                $this->setDatumInvoerVerpakking($value);
                break;
            case 32:
                $this->setDatumAfvoerVerpakking($value);
                break;
            case 33:
                $this->setProduktkoppelKode($value);
                break;
            case 34:
                $this->setWtgkode($value);
                break;
            case 35:
                $this->setBtwkodeVoorDeclaratie($value);
                break;
            case 36:
                $this->setKodeInkoopkanaal($value);
                break;
            case 37:
                $this->setKodeReferentieproduktPerCluster($value);
                break;
            case 38:
                $this->setVerkoopprijsExclusiefBtw($value);
                break;
            case 39:
                $this->setVergoedingsprijs($value);
                break;
            case 40:
                $this->setReferentieprijs($value);
                break;
            case 41:
                $this->setDatumSchorsing($value);
                break;
            case 42:
                $this->setDatumDoorhaling($value);
                break;
            case 43:
                $this->setMutatieDatum($value);
                break;
            case 44:
                $this->setUitgavedatum($value);
                break;
            case 45:
                $this->setGvsClusterKode($value);
                break;
            case 46:
                $this->setGvsVergoedingslimiet($value);
                break;
            case 47:
                $this->setInkoopprijs($value);
                break;
            case 48:
                $this->setEuropeesRegistratienummer($value);
                break;
            case 49:
                $this->setKortingspercentage($value);
                break;
            case 50:
                $this->setMaximumprijsVws($value);
                break;
            case 51:
                $this->setRegistratieNummer1($value);
                break;
            case 52:
                $this->setRegistratieNummer2($value);
                break;
            case 53:
                $this->setRegistratieNummer3($value);
                break;
            case 54:
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
        $keys = GsArtikelenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setZinummer($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setHandelsproduktkode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setArtikelnaamnummer($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setInkoophoeveelheid($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAantalHoofdverpakkingen($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setHoofdverpakkingOmschrijvingThesnr($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setHoofdverpakkingOmschrijvingKode($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAantalDeelverpakkingen($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDeelverpakkingOmschrijvingThesnr($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDeelverpakkingOmschrijvingKode($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setHoeveelheidPerDeelverpakking($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setUnKode($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setUnDatum($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setKodeWetOpDeGeneesmiddelen($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setKodeKoelkast($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setKodeKliniekverpakking($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setKodeVervaldatum($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setKodeEasysteem($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setRvgnummer1($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setRvgnummer2($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setRvgnummer3($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDatumInschrijvingRegistratie($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setAantalDddsPerVerpakking($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setFabrikantArtikelkodering($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setRegistratiehouderKode($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setImporteurKode($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setLeverancierKode($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setLandVanHerkomstThesaurusNummer($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setLandVanHerkomstKode($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDatumInvoerVerpakking($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setDatumAfvoerVerpakking($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setProduktkoppelKode($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setWtgkode($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setBtwkodeVoorDeclaratie($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setKodeInkoopkanaal($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setKodeReferentieproduktPerCluster($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setVerkoopprijsExclusiefBtw($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setVergoedingsprijs($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setReferentieprijs($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setDatumSchorsing($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setDatumDoorhaling($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setMutatieDatum($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setUitgavedatum($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setGvsClusterKode($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setGvsVergoedingslimiet($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setInkoopprijs($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setEuropeesRegistratienummer($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setKortingspercentage($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setMaximumprijsVws($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setRegistratieNummer1($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setRegistratieNummer2($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setRegistratieNummer3($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setSlug($arr[$keys[54]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsArtikelenPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsArtikelenPeer::BESTANDNUMMER)) $criteria->add(GsArtikelenPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsArtikelenPeer::MUTATIEKODE)) $criteria->add(GsArtikelenPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsArtikelenPeer::ZINUMMER)) $criteria->add(GsArtikelenPeer::ZINUMMER, $this->zinummer);
        if ($this->isColumnModified(GsArtikelenPeer::HANDELSPRODUKTKODE)) $criteria->add(GsArtikelenPeer::HANDELSPRODUKTKODE, $this->handelsproduktkode);
        if ($this->isColumnModified(GsArtikelenPeer::ARTIKELNAAMNUMMER)) $criteria->add(GsArtikelenPeer::ARTIKELNAAMNUMMER, $this->artikelnaamnummer);
        if ($this->isColumnModified(GsArtikelenPeer::INKOOPHOEVEELHEID)) $criteria->add(GsArtikelenPeer::INKOOPHOEVEELHEID, $this->inkoophoeveelheid);
        if ($this->isColumnModified(GsArtikelenPeer::AANTAL_HOOFDVERPAKKINGEN)) $criteria->add(GsArtikelenPeer::AANTAL_HOOFDVERPAKKINGEN, $this->aantal_hoofdverpakkingen);
        if ($this->isColumnModified(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR)) $criteria->add(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, $this->hoofdverpakking_omschrijving_thesnr);
        if ($this->isColumnModified(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE)) $criteria->add(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, $this->hoofdverpakking_omschrijving_kode);
        if ($this->isColumnModified(GsArtikelenPeer::AANTAL_DEELVERPAKKINGEN)) $criteria->add(GsArtikelenPeer::AANTAL_DEELVERPAKKINGEN, $this->aantal_deelverpakkingen);
        if ($this->isColumnModified(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR)) $criteria->add(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, $this->deelverpakking_omschrijving_thesnr);
        if ($this->isColumnModified(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE)) $criteria->add(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, $this->deelverpakking_omschrijving_kode);
        if ($this->isColumnModified(GsArtikelenPeer::HOEVEELHEID_PER_DEELVERPAKKING)) $criteria->add(GsArtikelenPeer::HOEVEELHEID_PER_DEELVERPAKKING, $this->hoeveelheid_per_deelverpakking);
        if ($this->isColumnModified(GsArtikelenPeer::UN_KODE)) $criteria->add(GsArtikelenPeer::UN_KODE, $this->un_kode);
        if ($this->isColumnModified(GsArtikelenPeer::UN_DATUM)) $criteria->add(GsArtikelenPeer::UN_DATUM, $this->un_datum);
        if ($this->isColumnModified(GsArtikelenPeer::KODE_WET_OP_DE_GENEESMIDDELEN)) $criteria->add(GsArtikelenPeer::KODE_WET_OP_DE_GENEESMIDDELEN, $this->kode_wet_op_de_geneesmiddelen);
        if ($this->isColumnModified(GsArtikelenPeer::KODE_KOELKAST)) $criteria->add(GsArtikelenPeer::KODE_KOELKAST, $this->kode_koelkast);
        if ($this->isColumnModified(GsArtikelenPeer::KODE_KLINIEKVERPAKKING)) $criteria->add(GsArtikelenPeer::KODE_KLINIEKVERPAKKING, $this->kode_kliniekverpakking);
        if ($this->isColumnModified(GsArtikelenPeer::KODE_VERVALDATUM)) $criteria->add(GsArtikelenPeer::KODE_VERVALDATUM, $this->kode_vervaldatum);
        if ($this->isColumnModified(GsArtikelenPeer::KODE_EASYSTEEM)) $criteria->add(GsArtikelenPeer::KODE_EASYSTEEM, $this->kode_easysteem);
        if ($this->isColumnModified(GsArtikelenPeer::RVGNUMMER_1)) $criteria->add(GsArtikelenPeer::RVGNUMMER_1, $this->rvgnummer_1);
        if ($this->isColumnModified(GsArtikelenPeer::RVGNUMMER_2)) $criteria->add(GsArtikelenPeer::RVGNUMMER_2, $this->rvgnummer_2);
        if ($this->isColumnModified(GsArtikelenPeer::RVGNUMMER_3)) $criteria->add(GsArtikelenPeer::RVGNUMMER_3, $this->rvgnummer_3);
        if ($this->isColumnModified(GsArtikelenPeer::DATUM_INSCHRIJVING_REGISTRATIE)) $criteria->add(GsArtikelenPeer::DATUM_INSCHRIJVING_REGISTRATIE, $this->datum_inschrijving_registratie);
        if ($this->isColumnModified(GsArtikelenPeer::AANTAL_DDDS_PER_VERPAKKING)) $criteria->add(GsArtikelenPeer::AANTAL_DDDS_PER_VERPAKKING, $this->aantal_ddds_per_verpakking);
        if ($this->isColumnModified(GsArtikelenPeer::FABRIKANT_ARTIKELKODERING)) $criteria->add(GsArtikelenPeer::FABRIKANT_ARTIKELKODERING, $this->fabrikant_artikelkodering);
        if ($this->isColumnModified(GsArtikelenPeer::REGISTRATIEHOUDER_KODE)) $criteria->add(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, $this->registratiehouder_kode);
        if ($this->isColumnModified(GsArtikelenPeer::IMPORTEUR_KODE)) $criteria->add(GsArtikelenPeer::IMPORTEUR_KODE, $this->importeur_kode);
        if ($this->isColumnModified(GsArtikelenPeer::LEVERANCIER_KODE)) $criteria->add(GsArtikelenPeer::LEVERANCIER_KODE, $this->leverancier_kode);
        if ($this->isColumnModified(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER)) $criteria->add(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, $this->land_van_herkomst_thesaurus_nummer);
        if ($this->isColumnModified(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE)) $criteria->add(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, $this->land_van_herkomst_kode);
        if ($this->isColumnModified(GsArtikelenPeer::DATUM_INVOER_VERPAKKING)) $criteria->add(GsArtikelenPeer::DATUM_INVOER_VERPAKKING, $this->datum_invoer_verpakking);
        if ($this->isColumnModified(GsArtikelenPeer::DATUM_AFVOER_VERPAKKING)) $criteria->add(GsArtikelenPeer::DATUM_AFVOER_VERPAKKING, $this->datum_afvoer_verpakking);
        if ($this->isColumnModified(GsArtikelenPeer::PRODUKTKOPPEL_KODE)) $criteria->add(GsArtikelenPeer::PRODUKTKOPPEL_KODE, $this->produktkoppel_kode);
        if ($this->isColumnModified(GsArtikelenPeer::WTGKODE)) $criteria->add(GsArtikelenPeer::WTGKODE, $this->wtgkode);
        if ($this->isColumnModified(GsArtikelenPeer::BTWKODE_VOOR_DECLARATIE)) $criteria->add(GsArtikelenPeer::BTWKODE_VOOR_DECLARATIE, $this->btwkode_voor_declaratie);
        if ($this->isColumnModified(GsArtikelenPeer::KODE_INKOOPKANAAL)) $criteria->add(GsArtikelenPeer::KODE_INKOOPKANAAL, $this->kode_inkoopkanaal);
        if ($this->isColumnModified(GsArtikelenPeer::KODE_REFERENTIEPRODUKT_PER_CLUSTER)) $criteria->add(GsArtikelenPeer::KODE_REFERENTIEPRODUKT_PER_CLUSTER, $this->kode_referentieprodukt_per_cluster);
        if ($this->isColumnModified(GsArtikelenPeer::VERKOOPPRIJS_EXCLUSIEF_BTW)) $criteria->add(GsArtikelenPeer::VERKOOPPRIJS_EXCLUSIEF_BTW, $this->verkoopprijs_exclusief_btw);
        if ($this->isColumnModified(GsArtikelenPeer::VERGOEDINGSPRIJS)) $criteria->add(GsArtikelenPeer::VERGOEDINGSPRIJS, $this->vergoedingsprijs);
        if ($this->isColumnModified(GsArtikelenPeer::REFERENTIEPRIJS)) $criteria->add(GsArtikelenPeer::REFERENTIEPRIJS, $this->referentieprijs);
        if ($this->isColumnModified(GsArtikelenPeer::DATUM_SCHORSING)) $criteria->add(GsArtikelenPeer::DATUM_SCHORSING, $this->datum_schorsing);
        if ($this->isColumnModified(GsArtikelenPeer::DATUM_DOORHALING)) $criteria->add(GsArtikelenPeer::DATUM_DOORHALING, $this->datum_doorhaling);
        if ($this->isColumnModified(GsArtikelenPeer::MUTATIE_DATUM)) $criteria->add(GsArtikelenPeer::MUTATIE_DATUM, $this->mutatie_datum);
        if ($this->isColumnModified(GsArtikelenPeer::UITGAVEDATUM)) $criteria->add(GsArtikelenPeer::UITGAVEDATUM, $this->uitgavedatum);
        if ($this->isColumnModified(GsArtikelenPeer::GVS_CLUSTER_KODE)) $criteria->add(GsArtikelenPeer::GVS_CLUSTER_KODE, $this->gvs_cluster_kode);
        if ($this->isColumnModified(GsArtikelenPeer::GVS_VERGOEDINGSLIMIET)) $criteria->add(GsArtikelenPeer::GVS_VERGOEDINGSLIMIET, $this->gvs_vergoedingslimiet);
        if ($this->isColumnModified(GsArtikelenPeer::INKOOPPRIJS)) $criteria->add(GsArtikelenPeer::INKOOPPRIJS, $this->inkoopprijs);
        if ($this->isColumnModified(GsArtikelenPeer::EUROPEES_REGISTRATIENUMMER)) $criteria->add(GsArtikelenPeer::EUROPEES_REGISTRATIENUMMER, $this->europees_registratienummer);
        if ($this->isColumnModified(GsArtikelenPeer::KORTINGSPERCENTAGE)) $criteria->add(GsArtikelenPeer::KORTINGSPERCENTAGE, $this->kortingspercentage);
        if ($this->isColumnModified(GsArtikelenPeer::MAXIMUMPRIJS_VWS)) $criteria->add(GsArtikelenPeer::MAXIMUMPRIJS_VWS, $this->maximumprijs_vws);
        if ($this->isColumnModified(GsArtikelenPeer::REGISTRATIE_NUMMER_1)) $criteria->add(GsArtikelenPeer::REGISTRATIE_NUMMER_1, $this->registratie_nummer_1);
        if ($this->isColumnModified(GsArtikelenPeer::REGISTRATIE_NUMMER_2)) $criteria->add(GsArtikelenPeer::REGISTRATIE_NUMMER_2, $this->registratie_nummer_2);
        if ($this->isColumnModified(GsArtikelenPeer::REGISTRATIE_NUMMER_3)) $criteria->add(GsArtikelenPeer::REGISTRATIE_NUMMER_3, $this->registratie_nummer_3);
        if ($this->isColumnModified(GsArtikelenPeer::SLUG)) $criteria->add(GsArtikelenPeer::SLUG, $this->slug);

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
        $criteria = new Criteria(GsArtikelenPeer::DATABASE_NAME);
        $criteria->add(GsArtikelenPeer::ZINUMMER, $this->zinummer);

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
     * @param object $copyObj An object of GsArtikelen (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setHandelsproduktkode($this->getHandelsproduktkode());
        $copyObj->setArtikelnaamnummer($this->getArtikelnaamnummer());
        $copyObj->setInkoophoeveelheid($this->getInkoophoeveelheid());
        $copyObj->setAantalHoofdverpakkingen($this->getAantalHoofdverpakkingen());
        $copyObj->setHoofdverpakkingOmschrijvingThesnr($this->getHoofdverpakkingOmschrijvingThesnr());
        $copyObj->setHoofdverpakkingOmschrijvingKode($this->getHoofdverpakkingOmschrijvingKode());
        $copyObj->setAantalDeelverpakkingen($this->getAantalDeelverpakkingen());
        $copyObj->setDeelverpakkingOmschrijvingThesnr($this->getDeelverpakkingOmschrijvingThesnr());
        $copyObj->setDeelverpakkingOmschrijvingKode($this->getDeelverpakkingOmschrijvingKode());
        $copyObj->setHoeveelheidPerDeelverpakking($this->getHoeveelheidPerDeelverpakking());
        $copyObj->setUnKode($this->getUnKode());
        $copyObj->setUnDatum($this->getUnDatum());
        $copyObj->setKodeWetOpDeGeneesmiddelen($this->getKodeWetOpDeGeneesmiddelen());
        $copyObj->setKodeKoelkast($this->getKodeKoelkast());
        $copyObj->setKodeKliniekverpakking($this->getKodeKliniekverpakking());
        $copyObj->setKodeVervaldatum($this->getKodeVervaldatum());
        $copyObj->setKodeEasysteem($this->getKodeEasysteem());
        $copyObj->setRvgnummer1($this->getRvgnummer1());
        $copyObj->setRvgnummer2($this->getRvgnummer2());
        $copyObj->setRvgnummer3($this->getRvgnummer3());
        $copyObj->setDatumInschrijvingRegistratie($this->getDatumInschrijvingRegistratie());
        $copyObj->setAantalDddsPerVerpakking($this->getAantalDddsPerVerpakking());
        $copyObj->setFabrikantArtikelkodering($this->getFabrikantArtikelkodering());
        $copyObj->setRegistratiehouderKode($this->getRegistratiehouderKode());
        $copyObj->setImporteurKode($this->getImporteurKode());
        $copyObj->setLeverancierKode($this->getLeverancierKode());
        $copyObj->setLandVanHerkomstThesaurusNummer($this->getLandVanHerkomstThesaurusNummer());
        $copyObj->setLandVanHerkomstKode($this->getLandVanHerkomstKode());
        $copyObj->setDatumInvoerVerpakking($this->getDatumInvoerVerpakking());
        $copyObj->setDatumAfvoerVerpakking($this->getDatumAfvoerVerpakking());
        $copyObj->setProduktkoppelKode($this->getProduktkoppelKode());
        $copyObj->setWtgkode($this->getWtgkode());
        $copyObj->setBtwkodeVoorDeclaratie($this->getBtwkodeVoorDeclaratie());
        $copyObj->setKodeInkoopkanaal($this->getKodeInkoopkanaal());
        $copyObj->setKodeReferentieproduktPerCluster($this->getKodeReferentieproduktPerCluster());
        $copyObj->setVerkoopprijsExclusiefBtw($this->getVerkoopprijsExclusiefBtw());
        $copyObj->setVergoedingsprijs($this->getVergoedingsprijs());
        $copyObj->setReferentieprijs($this->getReferentieprijs());
        $copyObj->setDatumSchorsing($this->getDatumSchorsing());
        $copyObj->setDatumDoorhaling($this->getDatumDoorhaling());
        $copyObj->setMutatieDatum($this->getMutatieDatum());
        $copyObj->setUitgavedatum($this->getUitgavedatum());
        $copyObj->setGvsClusterKode($this->getGvsClusterKode());
        $copyObj->setGvsVergoedingslimiet($this->getGvsVergoedingslimiet());
        $copyObj->setInkoopprijs($this->getInkoopprijs());
        $copyObj->setEuropeesRegistratienummer($this->getEuropeesRegistratienummer());
        $copyObj->setKortingspercentage($this->getKortingspercentage());
        $copyObj->setMaximumprijsVws($this->getMaximumprijsVws());
        $copyObj->setRegistratieNummer1($this->getRegistratieNummer1());
        $copyObj->setRegistratieNummer2($this->getRegistratieNummer2());
        $copyObj->setRegistratieNummer3($this->getRegistratieNummer3());
        $copyObj->setSlug($this->getSlug());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getGsSupplementaireProductenHistories() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsSupplementaireProductenHistorie($relObj->copy($deepCopy));
                }
            }

            $relObj = $this->getGsArtikelEigenschappen();
            if ($relObj) {
                $copyObj->setGsArtikelEigenschappen($relObj->copy($deepCopy));
            }

            $relObj = $this->getGsRzvAanspraak();
            if ($relObj) {
                $copyObj->setGsRzvAanspraak($relObj->copy($deepCopy));
            }

            foreach ($this->getGsLogistiekeVerpakkingsinformaties() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsLogistiekeVerpakkingsinformatie($relObj->copy($deepCopy));
                }
            }

            $relObj = $this->getGsSupplementaireProductenMetNzaMaximumtarief();
            if ($relObj) {
                $copyObj->setGsSupplementaireProductenMetNzaMaximumtarief($relObj->copy($deepCopy));
            }

            foreach ($this->getGsIndicatiesBijSupplementaireProductens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsIndicatiesBijSupplementaireProducten($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsLeveranciersassortimentens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsLeveranciersassortimenten($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsLogistiekeInformatiesRelatedByZindexNummer() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsLogistiekeInformatieRelatedByZindexNummer($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsPreferentieBeleids() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsPreferentieBeleid($relObj->copy($deepCopy));
                }
            }

            $relObj = $this->getGsRelatieTussenZinummerHibc();
            if ($relObj) {
                $copyObj->setGsRelatieTussenZinummerHibc($relObj->copy($deepCopy));
            }

            $relObj = $this->getLogistiekeInformatie();
            if ($relObj) {
                $copyObj->setLogistiekeInformatie($relObj->copy($deepCopy));
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
     * @return GsArtikelen Clone of current object.
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
     * @return GsArtikelenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsArtikelenPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GsHandelsproducten object.
     *
     * @param                  GsHandelsproducten $v
     * @return GsArtikelen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsHandelsproducten(GsHandelsproducten $v = null)
    {
        if ($v === null) {
            $this->setHandelsproduktkode(NULL);
        } else {
            $this->setHandelsproduktkode($v->getHandelsproduktkode());
        }

        $this->aGsHandelsproducten = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsHandelsproducten object, it will not be re-added.
        if ($v !== null) {
            $v->addGsArtikelen($this);
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
        if ($this->aGsHandelsproducten === null && ($this->handelsproduktkode !== null) && $doQuery) {
            $this->aGsHandelsproducten = GsHandelsproductenQuery::create()->findPk($this->handelsproduktkode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsHandelsproducten->addGsArtikelens($this);
             */
        }

        return $this->aGsHandelsproducten;
    }

    /**
     * Declares an association between this object and a GsNamen object.
     *
     * @param                  GsNamen $v
     * @return GsArtikelen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsNamen(GsNamen $v = null)
    {
        if ($v === null) {
            $this->setArtikelnaamnummer(NULL);
        } else {
            $this->setArtikelnaamnummer($v->getNaamnummer());
        }

        $this->aGsNamen = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsNamen object, it will not be re-added.
        if ($v !== null) {
            $v->addGsArtikelen($this);
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
        if ($this->aGsNamen === null && ($this->artikelnaamnummer !== null) && $doQuery) {
            $this->aGsNamen = GsNamenQuery::create()->findPk($this->artikelnaamnummer, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGsNamen->addGsArtikelens($this);
             */
        }

        return $this->aGsNamen;
    }

    /**
     * Declares an association between this object and a GsNawGegevensGstandaard object.
     *
     * @param                  GsNawGegevensGstandaard $v
     * @return GsArtikelen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setLeverancier(GsNawGegevensGstandaard $v = null)
    {
        if ($v === null) {
            $this->setLeverancierKode(NULL);
        } else {
            $this->setLeverancierKode($v->getNawNummer());
        }

        $this->aLeverancier = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsNawGegevensGstandaard object, it will not be re-added.
        if ($v !== null) {
            $v->addGsArtikelenRelatedByLeverancierKode($this);
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
    public function getLeverancier(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aLeverancier === null && ($this->leverancier_kode !== null) && $doQuery) {
            $this->aLeverancier = GsNawGegevensGstandaardQuery::create()
                ->filterByGsArtikelenRelatedByLeverancierKode($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aLeverancier->addGsArtikelensRelatedByLeverancierKode($this);
             */
        }

        return $this->aLeverancier;
    }

    /**
     * Declares an association between this object and a GsNawGegevensGstandaard object.
     *
     * @param                  GsNawGegevensGstandaard $v
     * @return GsArtikelen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setImporteur(GsNawGegevensGstandaard $v = null)
    {
        if ($v === null) {
            $this->setImporteurKode(NULL);
        } else {
            $this->setImporteurKode($v->getNawNummer());
        }

        $this->aImporteur = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsNawGegevensGstandaard object, it will not be re-added.
        if ($v !== null) {
            $v->addGsArtikelenRelatedByImporteurKode($this);
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
    public function getImporteur(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aImporteur === null && ($this->importeur_kode !== null) && $doQuery) {
            $this->aImporteur = GsNawGegevensGstandaardQuery::create()
                ->filterByGsArtikelenRelatedByImporteurKode($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aImporteur->addGsArtikelensRelatedByImporteurKode($this);
             */
        }

        return $this->aImporteur;
    }

    /**
     * Declares an association between this object and a GsNawGegevensGstandaard object.
     *
     * @param                  GsNawGegevensGstandaard $v
     * @return GsArtikelen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRegistratiehouder(GsNawGegevensGstandaard $v = null)
    {
        if ($v === null) {
            $this->setRegistratiehouderKode(NULL);
        } else {
            $this->setRegistratiehouderKode($v->getNawNummer());
        }

        $this->aRegistratiehouder = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsNawGegevensGstandaard object, it will not be re-added.
        if ($v !== null) {
            $v->addGsArtikelenRelatedByRegistratiehouderKode($this);
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
    public function getRegistratiehouder(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRegistratiehouder === null && ($this->registratiehouder_kode !== null) && $doQuery) {
            $this->aRegistratiehouder = GsNawGegevensGstandaardQuery::create()
                ->filterByGsArtikelenRelatedByRegistratiehouderKode($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRegistratiehouder->addGsArtikelensRelatedByRegistratiehouderKode($this);
             */
        }

        return $this->aRegistratiehouder;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsArtikelen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setLandOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setLandVanHerkomstThesaurusNummer(NULL);
        } else {
            $this->setLandVanHerkomstThesaurusNummer($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setLandVanHerkomstKode(NULL);
        } else {
            $this->setLandVanHerkomstKode($v->getThesaurusItemnummer());
        }

        $this->aLandOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($this);
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
    public function getLandOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aLandOmschrijving === null && ($this->land_van_herkomst_thesaurus_nummer !== null && $this->land_van_herkomst_kode !== null) && $doQuery) {
            $this->aLandOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->land_van_herkomst_thesaurus_nummer, $this->land_van_herkomst_kode), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aLandOmschrijving->addGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($this);
             */
        }

        return $this->aLandOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsArtikelen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setHoofdverpakkingOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setHoofdverpakkingOmschrijvingThesnr(NULL);
        } else {
            $this->setHoofdverpakkingOmschrijvingThesnr($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setHoofdverpakkingOmschrijvingKode(NULL);
        } else {
            $this->setHoofdverpakkingOmschrijvingKode($v->getThesaurusItemnummer());
        }

        $this->aHoofdverpakkingOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($this);
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
    public function getHoofdverpakkingOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aHoofdverpakkingOmschrijving === null && ($this->hoofdverpakking_omschrijving_thesnr !== null && $this->hoofdverpakking_omschrijving_kode !== null) && $doQuery) {
            $this->aHoofdverpakkingOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->hoofdverpakking_omschrijving_thesnr, $this->hoofdverpakking_omschrijving_kode), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aHoofdverpakkingOmschrijving->addGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($this);
             */
        }

        return $this->aHoofdverpakkingOmschrijving;
    }

    /**
     * Declares an association between this object and a GsThesauriTotaal object.
     *
     * @param                  GsThesauriTotaal $v
     * @return GsArtikelen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setDeelverpakkingOmschrijving(GsThesauriTotaal $v = null)
    {
        if ($v === null) {
            $this->setDeelverpakkingOmschrijvingThesnr(NULL);
        } else {
            $this->setDeelverpakkingOmschrijvingThesnr($v->getThesaurusnummer());
        }

        if ($v === null) {
            $this->setDeelverpakkingOmschrijvingKode(NULL);
        } else {
            $this->setDeelverpakkingOmschrijvingKode($v->getThesaurusItemnummer());
        }

        $this->aDeelverpakkingOmschrijving = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GsThesauriTotaal object, it will not be re-added.
        if ($v !== null) {
            $v->addGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($this);
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
    public function getDeelverpakkingOmschrijving(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aDeelverpakkingOmschrijving === null && ($this->deelverpakking_omschrijving_thesnr !== null && $this->deelverpakking_omschrijving_kode !== null) && $doQuery) {
            $this->aDeelverpakkingOmschrijving = GsThesauriTotaalQuery::create()->findPk(array($this->deelverpakking_omschrijving_thesnr, $this->deelverpakking_omschrijving_kode), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aDeelverpakkingOmschrijving->addGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($this);
             */
        }

        return $this->aDeelverpakkingOmschrijving;
    }

    /**
     * Declares an association between this object and a GsLogistiekeInformatie object.
     *
     * @param                  GsLogistiekeInformatie $v
     * @return GsArtikelen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setLogistiekeInformatie(GsLogistiekeInformatie $v = null)
    {
        if ($v === null) {
            $this->setZinummer(NULL);
        } else {
            $this->setZinummer($v->getZindexNummer());
        }

        $this->aLogistiekeInformatie = $v;

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setGsArtikelenRelatedByZinummer($this);
        }


        return $this;
    }


    /**
     * Get the associated GsLogistiekeInformatie object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GsLogistiekeInformatie The associated GsLogistiekeInformatie object.
     * @throws PropelException
     */
    public function getLogistiekeInformatie(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aLogistiekeInformatie === null && ($this->zinummer !== null) && $doQuery) {
            $this->aLogistiekeInformatie = GsLogistiekeInformatieQuery::create()
                ->filterByGsArtikelenRelatedByZinummer($this) // here
                ->findOne($con);
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aLogistiekeInformatie->setGsArtikelenRelatedByZinummer($this);
        }

        return $this->aLogistiekeInformatie;
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
        if ('GsSupplementaireProductenHistorie' == $relationName) {
            $this->initGsSupplementaireProductenHistories();
        }
        if ('GsLogistiekeVerpakkingsinformatie' == $relationName) {
            $this->initGsLogistiekeVerpakkingsinformaties();
        }
        if ('GsIndicatiesBijSupplementaireProducten' == $relationName) {
            $this->initGsIndicatiesBijSupplementaireProductens();
        }
        if ('GsLeveranciersassortimenten' == $relationName) {
            $this->initGsLeveranciersassortimentens();
        }
        if ('GsLogistiekeInformatieRelatedByZindexNummer' == $relationName) {
            $this->initGsLogistiekeInformatiesRelatedByZindexNummer();
        }
        if ('GsPreferentieBeleid' == $relationName) {
            $this->initGsPreferentieBeleids();
        }
    }

    /**
     * Clears out the collGsSupplementaireProductenHistories collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsArtikelen The current object (for fluent API support)
     * @see        addGsSupplementaireProductenHistories()
     */
    public function clearGsSupplementaireProductenHistories()
    {
        $this->collGsSupplementaireProductenHistories = null; // important to set this to null since that means it is uninitialized
        $this->collGsSupplementaireProductenHistoriesPartial = null;

        return $this;
    }

    /**
     * reset is the collGsSupplementaireProductenHistories collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsSupplementaireProductenHistories($v = true)
    {
        $this->collGsSupplementaireProductenHistoriesPartial = $v;
    }

    /**
     * Initializes the collGsSupplementaireProductenHistories collection.
     *
     * By default this just sets the collGsSupplementaireProductenHistories collection to an empty array (like clearcollGsSupplementaireProductenHistories());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsSupplementaireProductenHistories($overrideExisting = true)
    {
        if (null !== $this->collGsSupplementaireProductenHistories && !$overrideExisting) {
            return;
        }
        $this->collGsSupplementaireProductenHistories = new PropelObjectCollection();
        $this->collGsSupplementaireProductenHistories->setModel('GsSupplementaireProductenHistorie');
    }

    /**
     * Gets an array of GsSupplementaireProductenHistorie objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsArtikelen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsSupplementaireProductenHistorie[] List of GsSupplementaireProductenHistorie objects
     * @throws PropelException
     */
    public function getGsSupplementaireProductenHistories($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsSupplementaireProductenHistoriesPartial && !$this->isNew();
        if (null === $this->collGsSupplementaireProductenHistories || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsSupplementaireProductenHistories) {
                // return empty collection
                $this->initGsSupplementaireProductenHistories();
            } else {
                $collGsSupplementaireProductenHistories = GsSupplementaireProductenHistorieQuery::create(null, $criteria)
                    ->filterByGsArtikelen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsSupplementaireProductenHistoriesPartial && count($collGsSupplementaireProductenHistories)) {
                      $this->initGsSupplementaireProductenHistories(false);

                      foreach ($collGsSupplementaireProductenHistories as $obj) {
                        if (false == $this->collGsSupplementaireProductenHistories->contains($obj)) {
                          $this->collGsSupplementaireProductenHistories->append($obj);
                        }
                      }

                      $this->collGsSupplementaireProductenHistoriesPartial = true;
                    }

                    $collGsSupplementaireProductenHistories->getInternalIterator()->rewind();

                    return $collGsSupplementaireProductenHistories;
                }

                if ($partial && $this->collGsSupplementaireProductenHistories) {
                    foreach ($this->collGsSupplementaireProductenHistories as $obj) {
                        if ($obj->isNew()) {
                            $collGsSupplementaireProductenHistories[] = $obj;
                        }
                    }
                }

                $this->collGsSupplementaireProductenHistories = $collGsSupplementaireProductenHistories;
                $this->collGsSupplementaireProductenHistoriesPartial = false;
            }
        }

        return $this->collGsSupplementaireProductenHistories;
    }

    /**
     * Sets a collection of GsSupplementaireProductenHistorie objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsSupplementaireProductenHistories A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setGsSupplementaireProductenHistories(PropelCollection $gsSupplementaireProductenHistories, PropelPDO $con = null)
    {
        $gsSupplementaireProductenHistoriesToDelete = $this->getGsSupplementaireProductenHistories(new Criteria(), $con)->diff($gsSupplementaireProductenHistories);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsSupplementaireProductenHistoriesScheduledForDeletion = clone $gsSupplementaireProductenHistoriesToDelete;

        foreach ($gsSupplementaireProductenHistoriesToDelete as $gsSupplementaireProductenHistorieRemoved) {
            $gsSupplementaireProductenHistorieRemoved->setGsArtikelen(null);
        }

        $this->collGsSupplementaireProductenHistories = null;
        foreach ($gsSupplementaireProductenHistories as $gsSupplementaireProductenHistorie) {
            $this->addGsSupplementaireProductenHistorie($gsSupplementaireProductenHistorie);
        }

        $this->collGsSupplementaireProductenHistories = $gsSupplementaireProductenHistories;
        $this->collGsSupplementaireProductenHistoriesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsSupplementaireProductenHistorie objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsSupplementaireProductenHistorie objects.
     * @throws PropelException
     */
    public function countGsSupplementaireProductenHistories(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsSupplementaireProductenHistoriesPartial && !$this->isNew();
        if (null === $this->collGsSupplementaireProductenHistories || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsSupplementaireProductenHistories) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsSupplementaireProductenHistories());
            }
            $query = GsSupplementaireProductenHistorieQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsArtikelen($this)
                ->count($con);
        }

        return count($this->collGsSupplementaireProductenHistories);
    }

    /**
     * Method called to associate a GsSupplementaireProductenHistorie object to this object
     * through the GsSupplementaireProductenHistorie foreign key attribute.
     *
     * @param    GsSupplementaireProductenHistorie $l GsSupplementaireProductenHistorie
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function addGsSupplementaireProductenHistorie(GsSupplementaireProductenHistorie $l)
    {
        if ($this->collGsSupplementaireProductenHistories === null) {
            $this->initGsSupplementaireProductenHistories();
            $this->collGsSupplementaireProductenHistoriesPartial = true;
        }

        if (!in_array($l, $this->collGsSupplementaireProductenHistories->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsSupplementaireProductenHistorie($l);

            if ($this->gsSupplementaireProductenHistoriesScheduledForDeletion and $this->gsSupplementaireProductenHistoriesScheduledForDeletion->contains($l)) {
                $this->gsSupplementaireProductenHistoriesScheduledForDeletion->remove($this->gsSupplementaireProductenHistoriesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsSupplementaireProductenHistorie $gsSupplementaireProductenHistorie The gsSupplementaireProductenHistorie object to add.
     */
    protected function doAddGsSupplementaireProductenHistorie($gsSupplementaireProductenHistorie)
    {
        $this->collGsSupplementaireProductenHistories[]= $gsSupplementaireProductenHistorie;
        $gsSupplementaireProductenHistorie->setGsArtikelen($this);
    }

    /**
     * @param	GsSupplementaireProductenHistorie $gsSupplementaireProductenHistorie The gsSupplementaireProductenHistorie object to remove.
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function removeGsSupplementaireProductenHistorie($gsSupplementaireProductenHistorie)
    {
        if ($this->getGsSupplementaireProductenHistories()->contains($gsSupplementaireProductenHistorie)) {
            $this->collGsSupplementaireProductenHistories->remove($this->collGsSupplementaireProductenHistories->search($gsSupplementaireProductenHistorie));
            if (null === $this->gsSupplementaireProductenHistoriesScheduledForDeletion) {
                $this->gsSupplementaireProductenHistoriesScheduledForDeletion = clone $this->collGsSupplementaireProductenHistories;
                $this->gsSupplementaireProductenHistoriesScheduledForDeletion->clear();
            }
            $this->gsSupplementaireProductenHistoriesScheduledForDeletion[]= clone $gsSupplementaireProductenHistorie;
            $gsSupplementaireProductenHistorie->setGsArtikelen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsArtikelen is new, it will return
     * an empty collection; or if this GsArtikelen has previously
     * been saved, it will retrieve related GsSupplementaireProductenHistories from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsArtikelen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsSupplementaireProductenHistorie[] List of GsSupplementaireProductenHistorie objects
     */
    public function getGsSupplementaireProductenHistoriesJoinGsThesauriTotaal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsSupplementaireProductenHistorieQuery::create(null, $criteria);
        $query->joinWith('GsThesauriTotaal', $join_behavior);

        return $this->getGsSupplementaireProductenHistories($query, $con);
    }

    /**
     * Gets a single GsArtikelEigenschappen object, which is related to this object by a one-to-one relationship.
     *
     * @param PropelPDO $con optional connection object
     * @return GsArtikelEigenschappen
     * @throws PropelException
     */
    public function getGsArtikelEigenschappen(PropelPDO $con = null)
    {

        if ($this->singleGsArtikelEigenschappen === null && !$this->isNew()) {
            $this->singleGsArtikelEigenschappen = GsArtikelEigenschappenQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleGsArtikelEigenschappen;
    }

    /**
     * Sets a single GsArtikelEigenschappen object as related to this object by a one-to-one relationship.
     *
     * @param                  GsArtikelEigenschappen $v GsArtikelEigenschappen
     * @return GsArtikelen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsArtikelEigenschappen(GsArtikelEigenschappen $v = null)
    {
        $this->singleGsArtikelEigenschappen = $v;

        // Make sure that that the passed-in GsArtikelEigenschappen isn't already associated with this object
        if ($v !== null && $v->getGsArtikelen(null, false) === null) {
            $v->setGsArtikelen($this);
        }

        return $this;
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
     * @return GsArtikelen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsRzvAanspraak(GsRzvAanspraak $v = null)
    {
        $this->singleGsRzvAanspraak = $v;

        // Make sure that that the passed-in GsRzvAanspraak isn't already associated with this object
        if ($v !== null && $v->getGsArtikelen(null, false) === null) {
            $v->setGsArtikelen($this);
        }

        return $this;
    }

    /**
     * Clears out the collGsLogistiekeVerpakkingsinformaties collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsArtikelen The current object (for fluent API support)
     * @see        addGsLogistiekeVerpakkingsinformaties()
     */
    public function clearGsLogistiekeVerpakkingsinformaties()
    {
        $this->collGsLogistiekeVerpakkingsinformaties = null; // important to set this to null since that means it is uninitialized
        $this->collGsLogistiekeVerpakkingsinformatiesPartial = null;

        return $this;
    }

    /**
     * reset is the collGsLogistiekeVerpakkingsinformaties collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsLogistiekeVerpakkingsinformaties($v = true)
    {
        $this->collGsLogistiekeVerpakkingsinformatiesPartial = $v;
    }

    /**
     * Initializes the collGsLogistiekeVerpakkingsinformaties collection.
     *
     * By default this just sets the collGsLogistiekeVerpakkingsinformaties collection to an empty array (like clearcollGsLogistiekeVerpakkingsinformaties());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsLogistiekeVerpakkingsinformaties($overrideExisting = true)
    {
        if (null !== $this->collGsLogistiekeVerpakkingsinformaties && !$overrideExisting) {
            return;
        }
        $this->collGsLogistiekeVerpakkingsinformaties = new PropelObjectCollection();
        $this->collGsLogistiekeVerpakkingsinformaties->setModel('GsLogistiekeVerpakkingsinformatie');
    }

    /**
     * Gets an array of GsLogistiekeVerpakkingsinformatie objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsArtikelen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[] List of GsLogistiekeVerpakkingsinformatie objects
     * @throws PropelException
     */
    public function getGsLogistiekeVerpakkingsinformaties($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsLogistiekeVerpakkingsinformatiesPartial && !$this->isNew();
        if (null === $this->collGsLogistiekeVerpakkingsinformaties || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsLogistiekeVerpakkingsinformaties) {
                // return empty collection
                $this->initGsLogistiekeVerpakkingsinformaties();
            } else {
                $collGsLogistiekeVerpakkingsinformaties = GsLogistiekeVerpakkingsinformatieQuery::create(null, $criteria)
                    ->filterByGsArtikelen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsLogistiekeVerpakkingsinformatiesPartial && count($collGsLogistiekeVerpakkingsinformaties)) {
                      $this->initGsLogistiekeVerpakkingsinformaties(false);

                      foreach ($collGsLogistiekeVerpakkingsinformaties as $obj) {
                        if (false == $this->collGsLogistiekeVerpakkingsinformaties->contains($obj)) {
                          $this->collGsLogistiekeVerpakkingsinformaties->append($obj);
                        }
                      }

                      $this->collGsLogistiekeVerpakkingsinformatiesPartial = true;
                    }

                    $collGsLogistiekeVerpakkingsinformaties->getInternalIterator()->rewind();

                    return $collGsLogistiekeVerpakkingsinformaties;
                }

                if ($partial && $this->collGsLogistiekeVerpakkingsinformaties) {
                    foreach ($this->collGsLogistiekeVerpakkingsinformaties as $obj) {
                        if ($obj->isNew()) {
                            $collGsLogistiekeVerpakkingsinformaties[] = $obj;
                        }
                    }
                }

                $this->collGsLogistiekeVerpakkingsinformaties = $collGsLogistiekeVerpakkingsinformaties;
                $this->collGsLogistiekeVerpakkingsinformatiesPartial = false;
            }
        }

        return $this->collGsLogistiekeVerpakkingsinformaties;
    }

    /**
     * Sets a collection of GsLogistiekeVerpakkingsinformatie objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsLogistiekeVerpakkingsinformaties A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setGsLogistiekeVerpakkingsinformaties(PropelCollection $gsLogistiekeVerpakkingsinformaties, PropelPDO $con = null)
    {
        $gsLogistiekeVerpakkingsinformatiesToDelete = $this->getGsLogistiekeVerpakkingsinformaties(new Criteria(), $con)->diff($gsLogistiekeVerpakkingsinformaties);


        $this->gsLogistiekeVerpakkingsinformatiesScheduledForDeletion = $gsLogistiekeVerpakkingsinformatiesToDelete;

        foreach ($gsLogistiekeVerpakkingsinformatiesToDelete as $gsLogistiekeVerpakkingsinformatieRemoved) {
            $gsLogistiekeVerpakkingsinformatieRemoved->setGsArtikelen(null);
        }

        $this->collGsLogistiekeVerpakkingsinformaties = null;
        foreach ($gsLogistiekeVerpakkingsinformaties as $gsLogistiekeVerpakkingsinformatie) {
            $this->addGsLogistiekeVerpakkingsinformatie($gsLogistiekeVerpakkingsinformatie);
        }

        $this->collGsLogistiekeVerpakkingsinformaties = $gsLogistiekeVerpakkingsinformaties;
        $this->collGsLogistiekeVerpakkingsinformatiesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsLogistiekeVerpakkingsinformatie objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsLogistiekeVerpakkingsinformatie objects.
     * @throws PropelException
     */
    public function countGsLogistiekeVerpakkingsinformaties(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsLogistiekeVerpakkingsinformatiesPartial && !$this->isNew();
        if (null === $this->collGsLogistiekeVerpakkingsinformaties || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsLogistiekeVerpakkingsinformaties) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsLogistiekeVerpakkingsinformaties());
            }
            $query = GsLogistiekeVerpakkingsinformatieQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsArtikelen($this)
                ->count($con);
        }

        return count($this->collGsLogistiekeVerpakkingsinformaties);
    }

    /**
     * Method called to associate a GsLogistiekeVerpakkingsinformatie object to this object
     * through the GsLogistiekeVerpakkingsinformatie foreign key attribute.
     *
     * @param    GsLogistiekeVerpakkingsinformatie $l GsLogistiekeVerpakkingsinformatie
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function addGsLogistiekeVerpakkingsinformatie(GsLogistiekeVerpakkingsinformatie $l)
    {
        if ($this->collGsLogistiekeVerpakkingsinformaties === null) {
            $this->initGsLogistiekeVerpakkingsinformaties();
            $this->collGsLogistiekeVerpakkingsinformatiesPartial = true;
        }

        if (!in_array($l, $this->collGsLogistiekeVerpakkingsinformaties->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsLogistiekeVerpakkingsinformatie($l);

            if ($this->gsLogistiekeVerpakkingsinformatiesScheduledForDeletion and $this->gsLogistiekeVerpakkingsinformatiesScheduledForDeletion->contains($l)) {
                $this->gsLogistiekeVerpakkingsinformatiesScheduledForDeletion->remove($this->gsLogistiekeVerpakkingsinformatiesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsLogistiekeVerpakkingsinformatie $gsLogistiekeVerpakkingsinformatie The gsLogistiekeVerpakkingsinformatie object to add.
     */
    protected function doAddGsLogistiekeVerpakkingsinformatie($gsLogistiekeVerpakkingsinformatie)
    {
        $this->collGsLogistiekeVerpakkingsinformaties[]= $gsLogistiekeVerpakkingsinformatie;
        $gsLogistiekeVerpakkingsinformatie->setGsArtikelen($this);
    }

    /**
     * @param	GsLogistiekeVerpakkingsinformatie $gsLogistiekeVerpakkingsinformatie The gsLogistiekeVerpakkingsinformatie object to remove.
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function removeGsLogistiekeVerpakkingsinformatie($gsLogistiekeVerpakkingsinformatie)
    {
        if ($this->getGsLogistiekeVerpakkingsinformaties()->contains($gsLogistiekeVerpakkingsinformatie)) {
            $this->collGsLogistiekeVerpakkingsinformaties->remove($this->collGsLogistiekeVerpakkingsinformaties->search($gsLogistiekeVerpakkingsinformatie));
            if (null === $this->gsLogistiekeVerpakkingsinformatiesScheduledForDeletion) {
                $this->gsLogistiekeVerpakkingsinformatiesScheduledForDeletion = clone $this->collGsLogistiekeVerpakkingsinformaties;
                $this->gsLogistiekeVerpakkingsinformatiesScheduledForDeletion->clear();
            }
            $this->gsLogistiekeVerpakkingsinformatiesScheduledForDeletion[]= $gsLogistiekeVerpakkingsinformatie;
            $gsLogistiekeVerpakkingsinformatie->setGsArtikelen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsArtikelen is new, it will return
     * an empty collection; or if this GsArtikelen has previously
     * been saved, it will retrieve related GsLogistiekeVerpakkingsinformaties from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsArtikelen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[] List of GsLogistiekeVerpakkingsinformatie objects
     */
    public function getGsLogistiekeVerpakkingsinformatiesJoinSoortenVerpakkingOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsLogistiekeVerpakkingsinformatieQuery::create(null, $criteria);
        $query->joinWith('SoortenVerpakkingOmschrijving', $join_behavior);

        return $this->getGsLogistiekeVerpakkingsinformaties($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsArtikelen is new, it will return
     * an empty collection; or if this GsArtikelen has previously
     * been saved, it will retrieve related GsLogistiekeVerpakkingsinformaties from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsArtikelen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[] List of GsLogistiekeVerpakkingsinformatie objects
     */
    public function getGsLogistiekeVerpakkingsinformatiesJoinHoogteEenheidOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsLogistiekeVerpakkingsinformatieQuery::create(null, $criteria);
        $query->joinWith('HoogteEenheidOmschrijving', $join_behavior);

        return $this->getGsLogistiekeVerpakkingsinformaties($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsArtikelen is new, it will return
     * an empty collection; or if this GsArtikelen has previously
     * been saved, it will retrieve related GsLogistiekeVerpakkingsinformaties from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsArtikelen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[] List of GsLogistiekeVerpakkingsinformatie objects
     */
    public function getGsLogistiekeVerpakkingsinformatiesJoinDiepteEenheidOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsLogistiekeVerpakkingsinformatieQuery::create(null, $criteria);
        $query->joinWith('DiepteEenheidOmschrijving', $join_behavior);

        return $this->getGsLogistiekeVerpakkingsinformaties($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsArtikelen is new, it will return
     * an empty collection; or if this GsArtikelen has previously
     * been saved, it will retrieve related GsLogistiekeVerpakkingsinformaties from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsArtikelen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[] List of GsLogistiekeVerpakkingsinformatie objects
     */
    public function getGsLogistiekeVerpakkingsinformatiesJoinBreedteEenheidOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsLogistiekeVerpakkingsinformatieQuery::create(null, $criteria);
        $query->joinWith('BreedteEenheidOmschrijving', $join_behavior);

        return $this->getGsLogistiekeVerpakkingsinformaties($query, $con);
    }

    /**
     * Gets a single GsSupplementaireProductenMetNzaMaximumtarief object, which is related to this object by a one-to-one relationship.
     *
     * @param PropelPDO $con optional connection object
     * @return GsSupplementaireProductenMetNzaMaximumtarief
     * @throws PropelException
     */
    public function getGsSupplementaireProductenMetNzaMaximumtarief(PropelPDO $con = null)
    {

        if ($this->singleGsSupplementaireProductenMetNzaMaximumtarief === null && !$this->isNew()) {
            $this->singleGsSupplementaireProductenMetNzaMaximumtarief = GsSupplementaireProductenMetNzaMaximumtariefQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleGsSupplementaireProductenMetNzaMaximumtarief;
    }

    /**
     * Sets a single GsSupplementaireProductenMetNzaMaximumtarief object as related to this object by a one-to-one relationship.
     *
     * @param                  GsSupplementaireProductenMetNzaMaximumtarief $v GsSupplementaireProductenMetNzaMaximumtarief
     * @return GsArtikelen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsSupplementaireProductenMetNzaMaximumtarief(GsSupplementaireProductenMetNzaMaximumtarief $v = null)
    {
        $this->singleGsSupplementaireProductenMetNzaMaximumtarief = $v;

        // Make sure that that the passed-in GsSupplementaireProductenMetNzaMaximumtarief isn't already associated with this object
        if ($v !== null && $v->getGsArtikelen(null, false) === null) {
            $v->setGsArtikelen($this);
        }

        return $this;
    }

    /**
     * Clears out the collGsIndicatiesBijSupplementaireProductens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsArtikelen The current object (for fluent API support)
     * @see        addGsIndicatiesBijSupplementaireProductens()
     */
    public function clearGsIndicatiesBijSupplementaireProductens()
    {
        $this->collGsIndicatiesBijSupplementaireProductens = null; // important to set this to null since that means it is uninitialized
        $this->collGsIndicatiesBijSupplementaireProductensPartial = null;

        return $this;
    }

    /**
     * reset is the collGsIndicatiesBijSupplementaireProductens collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsIndicatiesBijSupplementaireProductens($v = true)
    {
        $this->collGsIndicatiesBijSupplementaireProductensPartial = $v;
    }

    /**
     * Initializes the collGsIndicatiesBijSupplementaireProductens collection.
     *
     * By default this just sets the collGsIndicatiesBijSupplementaireProductens collection to an empty array (like clearcollGsIndicatiesBijSupplementaireProductens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsIndicatiesBijSupplementaireProductens($overrideExisting = true)
    {
        if (null !== $this->collGsIndicatiesBijSupplementaireProductens && !$overrideExisting) {
            return;
        }
        $this->collGsIndicatiesBijSupplementaireProductens = new PropelObjectCollection();
        $this->collGsIndicatiesBijSupplementaireProductens->setModel('GsIndicatiesBijSupplementaireProducten');
    }

    /**
     * Gets an array of GsIndicatiesBijSupplementaireProducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsArtikelen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsIndicatiesBijSupplementaireProducten[] List of GsIndicatiesBijSupplementaireProducten objects
     * @throws PropelException
     */
    public function getGsIndicatiesBijSupplementaireProductens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsIndicatiesBijSupplementaireProductensPartial && !$this->isNew();
        if (null === $this->collGsIndicatiesBijSupplementaireProductens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsIndicatiesBijSupplementaireProductens) {
                // return empty collection
                $this->initGsIndicatiesBijSupplementaireProductens();
            } else {
                $collGsIndicatiesBijSupplementaireProductens = GsIndicatiesBijSupplementaireProductenQuery::create(null, $criteria)
                    ->filterByGsArtikelen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsIndicatiesBijSupplementaireProductensPartial && count($collGsIndicatiesBijSupplementaireProductens)) {
                      $this->initGsIndicatiesBijSupplementaireProductens(false);

                      foreach ($collGsIndicatiesBijSupplementaireProductens as $obj) {
                        if (false == $this->collGsIndicatiesBijSupplementaireProductens->contains($obj)) {
                          $this->collGsIndicatiesBijSupplementaireProductens->append($obj);
                        }
                      }

                      $this->collGsIndicatiesBijSupplementaireProductensPartial = true;
                    }

                    $collGsIndicatiesBijSupplementaireProductens->getInternalIterator()->rewind();

                    return $collGsIndicatiesBijSupplementaireProductens;
                }

                if ($partial && $this->collGsIndicatiesBijSupplementaireProductens) {
                    foreach ($this->collGsIndicatiesBijSupplementaireProductens as $obj) {
                        if ($obj->isNew()) {
                            $collGsIndicatiesBijSupplementaireProductens[] = $obj;
                        }
                    }
                }

                $this->collGsIndicatiesBijSupplementaireProductens = $collGsIndicatiesBijSupplementaireProductens;
                $this->collGsIndicatiesBijSupplementaireProductensPartial = false;
            }
        }

        return $this->collGsIndicatiesBijSupplementaireProductens;
    }

    /**
     * Sets a collection of GsIndicatiesBijSupplementaireProducten objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsIndicatiesBijSupplementaireProductens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setGsIndicatiesBijSupplementaireProductens(PropelCollection $gsIndicatiesBijSupplementaireProductens, PropelPDO $con = null)
    {
        $gsIndicatiesBijSupplementaireProductensToDelete = $this->getGsIndicatiesBijSupplementaireProductens(new Criteria(), $con)->diff($gsIndicatiesBijSupplementaireProductens);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsIndicatiesBijSupplementaireProductensScheduledForDeletion = clone $gsIndicatiesBijSupplementaireProductensToDelete;

        foreach ($gsIndicatiesBijSupplementaireProductensToDelete as $gsIndicatiesBijSupplementaireProductenRemoved) {
            $gsIndicatiesBijSupplementaireProductenRemoved->setGsArtikelen(null);
        }

        $this->collGsIndicatiesBijSupplementaireProductens = null;
        foreach ($gsIndicatiesBijSupplementaireProductens as $gsIndicatiesBijSupplementaireProducten) {
            $this->addGsIndicatiesBijSupplementaireProducten($gsIndicatiesBijSupplementaireProducten);
        }

        $this->collGsIndicatiesBijSupplementaireProductens = $gsIndicatiesBijSupplementaireProductens;
        $this->collGsIndicatiesBijSupplementaireProductensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsIndicatiesBijSupplementaireProducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsIndicatiesBijSupplementaireProducten objects.
     * @throws PropelException
     */
    public function countGsIndicatiesBijSupplementaireProductens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsIndicatiesBijSupplementaireProductensPartial && !$this->isNew();
        if (null === $this->collGsIndicatiesBijSupplementaireProductens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsIndicatiesBijSupplementaireProductens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsIndicatiesBijSupplementaireProductens());
            }
            $query = GsIndicatiesBijSupplementaireProductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsArtikelen($this)
                ->count($con);
        }

        return count($this->collGsIndicatiesBijSupplementaireProductens);
    }

    /**
     * Method called to associate a GsIndicatiesBijSupplementaireProducten object to this object
     * through the GsIndicatiesBijSupplementaireProducten foreign key attribute.
     *
     * @param    GsIndicatiesBijSupplementaireProducten $l GsIndicatiesBijSupplementaireProducten
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function addGsIndicatiesBijSupplementaireProducten(GsIndicatiesBijSupplementaireProducten $l)
    {
        if ($this->collGsIndicatiesBijSupplementaireProductens === null) {
            $this->initGsIndicatiesBijSupplementaireProductens();
            $this->collGsIndicatiesBijSupplementaireProductensPartial = true;
        }

        if (!in_array($l, $this->collGsIndicatiesBijSupplementaireProductens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsIndicatiesBijSupplementaireProducten($l);

            if ($this->gsIndicatiesBijSupplementaireProductensScheduledForDeletion and $this->gsIndicatiesBijSupplementaireProductensScheduledForDeletion->contains($l)) {
                $this->gsIndicatiesBijSupplementaireProductensScheduledForDeletion->remove($this->gsIndicatiesBijSupplementaireProductensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsIndicatiesBijSupplementaireProducten $gsIndicatiesBijSupplementaireProducten The gsIndicatiesBijSupplementaireProducten object to add.
     */
    protected function doAddGsIndicatiesBijSupplementaireProducten($gsIndicatiesBijSupplementaireProducten)
    {
        $this->collGsIndicatiesBijSupplementaireProductens[]= $gsIndicatiesBijSupplementaireProducten;
        $gsIndicatiesBijSupplementaireProducten->setGsArtikelen($this);
    }

    /**
     * @param	GsIndicatiesBijSupplementaireProducten $gsIndicatiesBijSupplementaireProducten The gsIndicatiesBijSupplementaireProducten object to remove.
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function removeGsIndicatiesBijSupplementaireProducten($gsIndicatiesBijSupplementaireProducten)
    {
        if ($this->getGsIndicatiesBijSupplementaireProductens()->contains($gsIndicatiesBijSupplementaireProducten)) {
            $this->collGsIndicatiesBijSupplementaireProductens->remove($this->collGsIndicatiesBijSupplementaireProductens->search($gsIndicatiesBijSupplementaireProducten));
            if (null === $this->gsIndicatiesBijSupplementaireProductensScheduledForDeletion) {
                $this->gsIndicatiesBijSupplementaireProductensScheduledForDeletion = clone $this->collGsIndicatiesBijSupplementaireProductens;
                $this->gsIndicatiesBijSupplementaireProductensScheduledForDeletion->clear();
            }
            $this->gsIndicatiesBijSupplementaireProductensScheduledForDeletion[]= clone $gsIndicatiesBijSupplementaireProducten;
            $gsIndicatiesBijSupplementaireProducten->setGsArtikelen(null);
        }

        return $this;
    }

    /**
     * Clears out the collGsLeveranciersassortimentens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsArtikelen The current object (for fluent API support)
     * @see        addGsLeveranciersassortimentens()
     */
    public function clearGsLeveranciersassortimentens()
    {
        $this->collGsLeveranciersassortimentens = null; // important to set this to null since that means it is uninitialized
        $this->collGsLeveranciersassortimentensPartial = null;

        return $this;
    }

    /**
     * reset is the collGsLeveranciersassortimentens collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsLeveranciersassortimentens($v = true)
    {
        $this->collGsLeveranciersassortimentensPartial = $v;
    }

    /**
     * Initializes the collGsLeveranciersassortimentens collection.
     *
     * By default this just sets the collGsLeveranciersassortimentens collection to an empty array (like clearcollGsLeveranciersassortimentens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsLeveranciersassortimentens($overrideExisting = true)
    {
        if (null !== $this->collGsLeveranciersassortimentens && !$overrideExisting) {
            return;
        }
        $this->collGsLeveranciersassortimentens = new PropelObjectCollection();
        $this->collGsLeveranciersassortimentens->setModel('GsLeveranciersassortimenten');
    }

    /**
     * Gets an array of GsLeveranciersassortimenten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsArtikelen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsLeveranciersassortimenten[] List of GsLeveranciersassortimenten objects
     * @throws PropelException
     */
    public function getGsLeveranciersassortimentens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsLeveranciersassortimentensPartial && !$this->isNew();
        if (null === $this->collGsLeveranciersassortimentens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsLeveranciersassortimentens) {
                // return empty collection
                $this->initGsLeveranciersassortimentens();
            } else {
                $collGsLeveranciersassortimentens = GsLeveranciersassortimentenQuery::create(null, $criteria)
                    ->filterByGsArtikelen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsLeveranciersassortimentensPartial && count($collGsLeveranciersassortimentens)) {
                      $this->initGsLeveranciersassortimentens(false);

                      foreach ($collGsLeveranciersassortimentens as $obj) {
                        if (false == $this->collGsLeveranciersassortimentens->contains($obj)) {
                          $this->collGsLeveranciersassortimentens->append($obj);
                        }
                      }

                      $this->collGsLeveranciersassortimentensPartial = true;
                    }

                    $collGsLeveranciersassortimentens->getInternalIterator()->rewind();

                    return $collGsLeveranciersassortimentens;
                }

                if ($partial && $this->collGsLeveranciersassortimentens) {
                    foreach ($this->collGsLeveranciersassortimentens as $obj) {
                        if ($obj->isNew()) {
                            $collGsLeveranciersassortimentens[] = $obj;
                        }
                    }
                }

                $this->collGsLeveranciersassortimentens = $collGsLeveranciersassortimentens;
                $this->collGsLeveranciersassortimentensPartial = false;
            }
        }

        return $this->collGsLeveranciersassortimentens;
    }

    /**
     * Sets a collection of GsLeveranciersassortimenten objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsLeveranciersassortimentens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setGsLeveranciersassortimentens(PropelCollection $gsLeveranciersassortimentens, PropelPDO $con = null)
    {
        $gsLeveranciersassortimentensToDelete = $this->getGsLeveranciersassortimentens(new Criteria(), $con)->diff($gsLeveranciersassortimentens);


        $this->gsLeveranciersassortimentensScheduledForDeletion = $gsLeveranciersassortimentensToDelete;

        foreach ($gsLeveranciersassortimentensToDelete as $gsLeveranciersassortimentenRemoved) {
            $gsLeveranciersassortimentenRemoved->setGsArtikelen(null);
        }

        $this->collGsLeveranciersassortimentens = null;
        foreach ($gsLeveranciersassortimentens as $gsLeveranciersassortimenten) {
            $this->addGsLeveranciersassortimenten($gsLeveranciersassortimenten);
        }

        $this->collGsLeveranciersassortimentens = $gsLeveranciersassortimentens;
        $this->collGsLeveranciersassortimentensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsLeveranciersassortimenten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsLeveranciersassortimenten objects.
     * @throws PropelException
     */
    public function countGsLeveranciersassortimentens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsLeveranciersassortimentensPartial && !$this->isNew();
        if (null === $this->collGsLeveranciersassortimentens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsLeveranciersassortimentens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsLeveranciersassortimentens());
            }
            $query = GsLeveranciersassortimentenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsArtikelen($this)
                ->count($con);
        }

        return count($this->collGsLeveranciersassortimentens);
    }

    /**
     * Method called to associate a GsLeveranciersassortimenten object to this object
     * through the GsLeveranciersassortimenten foreign key attribute.
     *
     * @param    GsLeveranciersassortimenten $l GsLeveranciersassortimenten
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function addGsLeveranciersassortimenten(GsLeveranciersassortimenten $l)
    {
        if ($this->collGsLeveranciersassortimentens === null) {
            $this->initGsLeveranciersassortimentens();
            $this->collGsLeveranciersassortimentensPartial = true;
        }

        if (!in_array($l, $this->collGsLeveranciersassortimentens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsLeveranciersassortimenten($l);

            if ($this->gsLeveranciersassortimentensScheduledForDeletion and $this->gsLeveranciersassortimentensScheduledForDeletion->contains($l)) {
                $this->gsLeveranciersassortimentensScheduledForDeletion->remove($this->gsLeveranciersassortimentensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsLeveranciersassortimenten $gsLeveranciersassortimenten The gsLeveranciersassortimenten object to add.
     */
    protected function doAddGsLeveranciersassortimenten($gsLeveranciersassortimenten)
    {
        $this->collGsLeveranciersassortimentens[]= $gsLeveranciersassortimenten;
        $gsLeveranciersassortimenten->setGsArtikelen($this);
    }

    /**
     * @param	GsLeveranciersassortimenten $gsLeveranciersassortimenten The gsLeveranciersassortimenten object to remove.
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function removeGsLeveranciersassortimenten($gsLeveranciersassortimenten)
    {
        if ($this->getGsLeveranciersassortimentens()->contains($gsLeveranciersassortimenten)) {
            $this->collGsLeveranciersassortimentens->remove($this->collGsLeveranciersassortimentens->search($gsLeveranciersassortimenten));
            if (null === $this->gsLeveranciersassortimentensScheduledForDeletion) {
                $this->gsLeveranciersassortimentensScheduledForDeletion = clone $this->collGsLeveranciersassortimentens;
                $this->gsLeveranciersassortimentensScheduledForDeletion->clear();
            }
            $this->gsLeveranciersassortimentensScheduledForDeletion[]= $gsLeveranciersassortimenten;
            $gsLeveranciersassortimenten->setGsArtikelen(null);
        }

        return $this;
    }

    /**
     * Clears out the collGsLogistiekeInformatiesRelatedByZindexNummer collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsArtikelen The current object (for fluent API support)
     * @see        addGsLogistiekeInformatiesRelatedByZindexNummer()
     */
    public function clearGsLogistiekeInformatiesRelatedByZindexNummer()
    {
        $this->collGsLogistiekeInformatiesRelatedByZindexNummer = null; // important to set this to null since that means it is uninitialized
        $this->collGsLogistiekeInformatiesRelatedByZindexNummerPartial = null;

        return $this;
    }

    /**
     * reset is the collGsLogistiekeInformatiesRelatedByZindexNummer collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsLogistiekeInformatiesRelatedByZindexNummer($v = true)
    {
        $this->collGsLogistiekeInformatiesRelatedByZindexNummerPartial = $v;
    }

    /**
     * Initializes the collGsLogistiekeInformatiesRelatedByZindexNummer collection.
     *
     * By default this just sets the collGsLogistiekeInformatiesRelatedByZindexNummer collection to an empty array (like clearcollGsLogistiekeInformatiesRelatedByZindexNummer());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsLogistiekeInformatiesRelatedByZindexNummer($overrideExisting = true)
    {
        if (null !== $this->collGsLogistiekeInformatiesRelatedByZindexNummer && !$overrideExisting) {
            return;
        }
        $this->collGsLogistiekeInformatiesRelatedByZindexNummer = new PropelObjectCollection();
        $this->collGsLogistiekeInformatiesRelatedByZindexNummer->setModel('GsLogistiekeInformatie');
    }

    /**
     * Gets an array of GsLogistiekeInformatie objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsArtikelen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsLogistiekeInformatie[] List of GsLogistiekeInformatie objects
     * @throws PropelException
     */
    public function getGsLogistiekeInformatiesRelatedByZindexNummer($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsLogistiekeInformatiesRelatedByZindexNummerPartial && !$this->isNew();
        if (null === $this->collGsLogistiekeInformatiesRelatedByZindexNummer || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsLogistiekeInformatiesRelatedByZindexNummer) {
                // return empty collection
                $this->initGsLogistiekeInformatiesRelatedByZindexNummer();
            } else {
                $collGsLogistiekeInformatiesRelatedByZindexNummer = GsLogistiekeInformatieQuery::create(null, $criteria)
                    ->filterByGsArtikelenRelatedByZindexNummer($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsLogistiekeInformatiesRelatedByZindexNummerPartial && count($collGsLogistiekeInformatiesRelatedByZindexNummer)) {
                      $this->initGsLogistiekeInformatiesRelatedByZindexNummer(false);

                      foreach ($collGsLogistiekeInformatiesRelatedByZindexNummer as $obj) {
                        if (false == $this->collGsLogistiekeInformatiesRelatedByZindexNummer->contains($obj)) {
                          $this->collGsLogistiekeInformatiesRelatedByZindexNummer->append($obj);
                        }
                      }

                      $this->collGsLogistiekeInformatiesRelatedByZindexNummerPartial = true;
                    }

                    $collGsLogistiekeInformatiesRelatedByZindexNummer->getInternalIterator()->rewind();

                    return $collGsLogistiekeInformatiesRelatedByZindexNummer;
                }

                if ($partial && $this->collGsLogistiekeInformatiesRelatedByZindexNummer) {
                    foreach ($this->collGsLogistiekeInformatiesRelatedByZindexNummer as $obj) {
                        if ($obj->isNew()) {
                            $collGsLogistiekeInformatiesRelatedByZindexNummer[] = $obj;
                        }
                    }
                }

                $this->collGsLogistiekeInformatiesRelatedByZindexNummer = $collGsLogistiekeInformatiesRelatedByZindexNummer;
                $this->collGsLogistiekeInformatiesRelatedByZindexNummerPartial = false;
            }
        }

        return $this->collGsLogistiekeInformatiesRelatedByZindexNummer;
    }

    /**
     * Sets a collection of GsLogistiekeInformatieRelatedByZindexNummer objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsLogistiekeInformatiesRelatedByZindexNummer A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setGsLogistiekeInformatiesRelatedByZindexNummer(PropelCollection $gsLogistiekeInformatiesRelatedByZindexNummer, PropelPDO $con = null)
    {
        $gsLogistiekeInformatiesRelatedByZindexNummerToDelete = $this->getGsLogistiekeInformatiesRelatedByZindexNummer(new Criteria(), $con)->diff($gsLogistiekeInformatiesRelatedByZindexNummer);


        $this->gsLogistiekeInformatiesRelatedByZindexNummerScheduledForDeletion = $gsLogistiekeInformatiesRelatedByZindexNummerToDelete;

        foreach ($gsLogistiekeInformatiesRelatedByZindexNummerToDelete as $gsLogistiekeInformatieRelatedByZindexNummerRemoved) {
            $gsLogistiekeInformatieRelatedByZindexNummerRemoved->setGsArtikelenRelatedByZindexNummer(null);
        }

        $this->collGsLogistiekeInformatiesRelatedByZindexNummer = null;
        foreach ($gsLogistiekeInformatiesRelatedByZindexNummer as $gsLogistiekeInformatieRelatedByZindexNummer) {
            $this->addGsLogistiekeInformatieRelatedByZindexNummer($gsLogistiekeInformatieRelatedByZindexNummer);
        }

        $this->collGsLogistiekeInformatiesRelatedByZindexNummer = $gsLogistiekeInformatiesRelatedByZindexNummer;
        $this->collGsLogistiekeInformatiesRelatedByZindexNummerPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsLogistiekeInformatie objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsLogistiekeInformatie objects.
     * @throws PropelException
     */
    public function countGsLogistiekeInformatiesRelatedByZindexNummer(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsLogistiekeInformatiesRelatedByZindexNummerPartial && !$this->isNew();
        if (null === $this->collGsLogistiekeInformatiesRelatedByZindexNummer || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsLogistiekeInformatiesRelatedByZindexNummer) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsLogistiekeInformatiesRelatedByZindexNummer());
            }
            $query = GsLogistiekeInformatieQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsArtikelenRelatedByZindexNummer($this)
                ->count($con);
        }

        return count($this->collGsLogistiekeInformatiesRelatedByZindexNummer);
    }

    /**
     * Method called to associate a GsLogistiekeInformatie object to this object
     * through the GsLogistiekeInformatie foreign key attribute.
     *
     * @param    GsLogistiekeInformatie $l GsLogistiekeInformatie
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function addGsLogistiekeInformatieRelatedByZindexNummer(GsLogistiekeInformatie $l)
    {
        if ($this->collGsLogistiekeInformatiesRelatedByZindexNummer === null) {
            $this->initGsLogistiekeInformatiesRelatedByZindexNummer();
            $this->collGsLogistiekeInformatiesRelatedByZindexNummerPartial = true;
        }

        if (!in_array($l, $this->collGsLogistiekeInformatiesRelatedByZindexNummer->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsLogistiekeInformatieRelatedByZindexNummer($l);

            if ($this->gsLogistiekeInformatiesRelatedByZindexNummerScheduledForDeletion and $this->gsLogistiekeInformatiesRelatedByZindexNummerScheduledForDeletion->contains($l)) {
                $this->gsLogistiekeInformatiesRelatedByZindexNummerScheduledForDeletion->remove($this->gsLogistiekeInformatiesRelatedByZindexNummerScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsLogistiekeInformatieRelatedByZindexNummer $gsLogistiekeInformatieRelatedByZindexNummer The gsLogistiekeInformatieRelatedByZindexNummer object to add.
     */
    protected function doAddGsLogistiekeInformatieRelatedByZindexNummer($gsLogistiekeInformatieRelatedByZindexNummer)
    {
        $this->collGsLogistiekeInformatiesRelatedByZindexNummer[]= $gsLogistiekeInformatieRelatedByZindexNummer;
        $gsLogistiekeInformatieRelatedByZindexNummer->setGsArtikelenRelatedByZindexNummer($this);
    }

    /**
     * @param	GsLogistiekeInformatieRelatedByZindexNummer $gsLogistiekeInformatieRelatedByZindexNummer The gsLogistiekeInformatieRelatedByZindexNummer object to remove.
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function removeGsLogistiekeInformatieRelatedByZindexNummer($gsLogistiekeInformatieRelatedByZindexNummer)
    {
        if ($this->getGsLogistiekeInformatiesRelatedByZindexNummer()->contains($gsLogistiekeInformatieRelatedByZindexNummer)) {
            $this->collGsLogistiekeInformatiesRelatedByZindexNummer->remove($this->collGsLogistiekeInformatiesRelatedByZindexNummer->search($gsLogistiekeInformatieRelatedByZindexNummer));
            if (null === $this->gsLogistiekeInformatiesRelatedByZindexNummerScheduledForDeletion) {
                $this->gsLogistiekeInformatiesRelatedByZindexNummerScheduledForDeletion = clone $this->collGsLogistiekeInformatiesRelatedByZindexNummer;
                $this->gsLogistiekeInformatiesRelatedByZindexNummerScheduledForDeletion->clear();
            }
            $this->gsLogistiekeInformatiesRelatedByZindexNummerScheduledForDeletion[]= $gsLogistiekeInformatieRelatedByZindexNummer;
            $gsLogistiekeInformatieRelatedByZindexNummer->setGsArtikelenRelatedByZindexNummer(null);
        }

        return $this;
    }

    /**
     * Clears out the collGsPreferentieBeleids collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsArtikelen The current object (for fluent API support)
     * @see        addGsPreferentieBeleids()
     */
    public function clearGsPreferentieBeleids()
    {
        $this->collGsPreferentieBeleids = null; // important to set this to null since that means it is uninitialized
        $this->collGsPreferentieBeleidsPartial = null;

        return $this;
    }

    /**
     * reset is the collGsPreferentieBeleids collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsPreferentieBeleids($v = true)
    {
        $this->collGsPreferentieBeleidsPartial = $v;
    }

    /**
     * Initializes the collGsPreferentieBeleids collection.
     *
     * By default this just sets the collGsPreferentieBeleids collection to an empty array (like clearcollGsPreferentieBeleids());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsPreferentieBeleids($overrideExisting = true)
    {
        if (null !== $this->collGsPreferentieBeleids && !$overrideExisting) {
            return;
        }
        $this->collGsPreferentieBeleids = new PropelObjectCollection();
        $this->collGsPreferentieBeleids->setModel('GsPreferentieBeleid');
    }

    /**
     * Gets an array of GsPreferentieBeleid objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsArtikelen is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsPreferentieBeleid[] List of GsPreferentieBeleid objects
     * @throws PropelException
     */
    public function getGsPreferentieBeleids($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsPreferentieBeleidsPartial && !$this->isNew();
        if (null === $this->collGsPreferentieBeleids || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsPreferentieBeleids) {
                // return empty collection
                $this->initGsPreferentieBeleids();
            } else {
                $collGsPreferentieBeleids = GsPreferentieBeleidQuery::create(null, $criteria)
                    ->filterByGsArtikelen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsPreferentieBeleidsPartial && count($collGsPreferentieBeleids)) {
                      $this->initGsPreferentieBeleids(false);

                      foreach ($collGsPreferentieBeleids as $obj) {
                        if (false == $this->collGsPreferentieBeleids->contains($obj)) {
                          $this->collGsPreferentieBeleids->append($obj);
                        }
                      }

                      $this->collGsPreferentieBeleidsPartial = true;
                    }

                    $collGsPreferentieBeleids->getInternalIterator()->rewind();

                    return $collGsPreferentieBeleids;
                }

                if ($partial && $this->collGsPreferentieBeleids) {
                    foreach ($this->collGsPreferentieBeleids as $obj) {
                        if ($obj->isNew()) {
                            $collGsPreferentieBeleids[] = $obj;
                        }
                    }
                }

                $this->collGsPreferentieBeleids = $collGsPreferentieBeleids;
                $this->collGsPreferentieBeleidsPartial = false;
            }
        }

        return $this->collGsPreferentieBeleids;
    }

    /**
     * Sets a collection of GsPreferentieBeleid objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsPreferentieBeleids A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function setGsPreferentieBeleids(PropelCollection $gsPreferentieBeleids, PropelPDO $con = null)
    {
        $gsPreferentieBeleidsToDelete = $this->getGsPreferentieBeleids(new Criteria(), $con)->diff($gsPreferentieBeleids);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsPreferentieBeleidsScheduledForDeletion = clone $gsPreferentieBeleidsToDelete;

        foreach ($gsPreferentieBeleidsToDelete as $gsPreferentieBeleidRemoved) {
            $gsPreferentieBeleidRemoved->setGsArtikelen(null);
        }

        $this->collGsPreferentieBeleids = null;
        foreach ($gsPreferentieBeleids as $gsPreferentieBeleid) {
            $this->addGsPreferentieBeleid($gsPreferentieBeleid);
        }

        $this->collGsPreferentieBeleids = $gsPreferentieBeleids;
        $this->collGsPreferentieBeleidsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsPreferentieBeleid objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsPreferentieBeleid objects.
     * @throws PropelException
     */
    public function countGsPreferentieBeleids(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsPreferentieBeleidsPartial && !$this->isNew();
        if (null === $this->collGsPreferentieBeleids || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsPreferentieBeleids) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsPreferentieBeleids());
            }
            $query = GsPreferentieBeleidQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsArtikelen($this)
                ->count($con);
        }

        return count($this->collGsPreferentieBeleids);
    }

    /**
     * Method called to associate a GsPreferentieBeleid object to this object
     * through the GsPreferentieBeleid foreign key attribute.
     *
     * @param    GsPreferentieBeleid $l GsPreferentieBeleid
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function addGsPreferentieBeleid(GsPreferentieBeleid $l)
    {
        if ($this->collGsPreferentieBeleids === null) {
            $this->initGsPreferentieBeleids();
            $this->collGsPreferentieBeleidsPartial = true;
        }

        if (!in_array($l, $this->collGsPreferentieBeleids->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsPreferentieBeleid($l);

            if ($this->gsPreferentieBeleidsScheduledForDeletion and $this->gsPreferentieBeleidsScheduledForDeletion->contains($l)) {
                $this->gsPreferentieBeleidsScheduledForDeletion->remove($this->gsPreferentieBeleidsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsPreferentieBeleid $gsPreferentieBeleid The gsPreferentieBeleid object to add.
     */
    protected function doAddGsPreferentieBeleid($gsPreferentieBeleid)
    {
        $this->collGsPreferentieBeleids[]= $gsPreferentieBeleid;
        $gsPreferentieBeleid->setGsArtikelen($this);
    }

    /**
     * @param	GsPreferentieBeleid $gsPreferentieBeleid The gsPreferentieBeleid object to remove.
     * @return GsArtikelen The current object (for fluent API support)
     */
    public function removeGsPreferentieBeleid($gsPreferentieBeleid)
    {
        if ($this->getGsPreferentieBeleids()->contains($gsPreferentieBeleid)) {
            $this->collGsPreferentieBeleids->remove($this->collGsPreferentieBeleids->search($gsPreferentieBeleid));
            if (null === $this->gsPreferentieBeleidsScheduledForDeletion) {
                $this->gsPreferentieBeleidsScheduledForDeletion = clone $this->collGsPreferentieBeleids;
                $this->gsPreferentieBeleidsScheduledForDeletion->clear();
            }
            $this->gsPreferentieBeleidsScheduledForDeletion[]= clone $gsPreferentieBeleid;
            $gsPreferentieBeleid->setGsArtikelen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsArtikelen is new, it will return
     * an empty collection; or if this GsArtikelen has previously
     * been saved, it will retrieve related GsPreferentieBeleids from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsArtikelen.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPreferentieBeleid[] List of GsPreferentieBeleid objects
     */
    public function getGsPreferentieBeleidsJoinPreferentieStatusOmschrijving($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPreferentieBeleidQuery::create(null, $criteria);
        $query->joinWith('PreferentieStatusOmschrijving', $join_behavior);

        return $this->getGsPreferentieBeleids($query, $con);
    }

    /**
     * Gets a single GsRelatieTussenZinummerHibc object, which is related to this object by a one-to-one relationship.
     *
     * @param PropelPDO $con optional connection object
     * @return GsRelatieTussenZinummerHibc
     * @throws PropelException
     */
    public function getGsRelatieTussenZinummerHibc(PropelPDO $con = null)
    {

        if ($this->singleGsRelatieTussenZinummerHibc === null && !$this->isNew()) {
            $this->singleGsRelatieTussenZinummerHibc = GsRelatieTussenZinummerHibcQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleGsRelatieTussenZinummerHibc;
    }

    /**
     * Sets a single GsRelatieTussenZinummerHibc object as related to this object by a one-to-one relationship.
     *
     * @param                  GsRelatieTussenZinummerHibc $v GsRelatieTussenZinummerHibc
     * @return GsArtikelen The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGsRelatieTussenZinummerHibc(GsRelatieTussenZinummerHibc $v = null)
    {
        $this->singleGsRelatieTussenZinummerHibc = $v;

        // Make sure that that the passed-in GsRelatieTussenZinummerHibc isn't already associated with this object
        if ($v !== null && $v->getGsArtikelen(null, false) === null) {
            $v->setGsArtikelen($this);
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
        $this->zinummer = null;
        $this->handelsproduktkode = null;
        $this->artikelnaamnummer = null;
        $this->inkoophoeveelheid = null;
        $this->aantal_hoofdverpakkingen = null;
        $this->hoofdverpakking_omschrijving_thesnr = null;
        $this->hoofdverpakking_omschrijving_kode = null;
        $this->aantal_deelverpakkingen = null;
        $this->deelverpakking_omschrijving_thesnr = null;
        $this->deelverpakking_omschrijving_kode = null;
        $this->hoeveelheid_per_deelverpakking = null;
        $this->un_kode = null;
        $this->un_datum = null;
        $this->kode_wet_op_de_geneesmiddelen = null;
        $this->kode_koelkast = null;
        $this->kode_kliniekverpakking = null;
        $this->kode_vervaldatum = null;
        $this->kode_easysteem = null;
        $this->rvgnummer_1 = null;
        $this->rvgnummer_2 = null;
        $this->rvgnummer_3 = null;
        $this->datum_inschrijving_registratie = null;
        $this->aantal_ddds_per_verpakking = null;
        $this->fabrikant_artikelkodering = null;
        $this->registratiehouder_kode = null;
        $this->importeur_kode = null;
        $this->leverancier_kode = null;
        $this->land_van_herkomst_thesaurus_nummer = null;
        $this->land_van_herkomst_kode = null;
        $this->datum_invoer_verpakking = null;
        $this->datum_afvoer_verpakking = null;
        $this->produktkoppel_kode = null;
        $this->wtgkode = null;
        $this->btwkode_voor_declaratie = null;
        $this->kode_inkoopkanaal = null;
        $this->kode_referentieprodukt_per_cluster = null;
        $this->verkoopprijs_exclusief_btw = null;
        $this->vergoedingsprijs = null;
        $this->referentieprijs = null;
        $this->datum_schorsing = null;
        $this->datum_doorhaling = null;
        $this->mutatie_datum = null;
        $this->uitgavedatum = null;
        $this->gvs_cluster_kode = null;
        $this->gvs_vergoedingslimiet = null;
        $this->inkoopprijs = null;
        $this->europees_registratienummer = null;
        $this->kortingspercentage = null;
        $this->maximumprijs_vws = null;
        $this->registratie_nummer_1 = null;
        $this->registratie_nummer_2 = null;
        $this->registratie_nummer_3 = null;
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
            if ($this->collGsSupplementaireProductenHistories) {
                foreach ($this->collGsSupplementaireProductenHistories as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->singleGsArtikelEigenschappen) {
                $this->singleGsArtikelEigenschappen->clearAllReferences($deep);
            }
            if ($this->singleGsRzvAanspraak) {
                $this->singleGsRzvAanspraak->clearAllReferences($deep);
            }
            if ($this->collGsLogistiekeVerpakkingsinformaties) {
                foreach ($this->collGsLogistiekeVerpakkingsinformaties as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->singleGsSupplementaireProductenMetNzaMaximumtarief) {
                $this->singleGsSupplementaireProductenMetNzaMaximumtarief->clearAllReferences($deep);
            }
            if ($this->collGsIndicatiesBijSupplementaireProductens) {
                foreach ($this->collGsIndicatiesBijSupplementaireProductens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsLeveranciersassortimentens) {
                foreach ($this->collGsLeveranciersassortimentens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsLogistiekeInformatiesRelatedByZindexNummer) {
                foreach ($this->collGsLogistiekeInformatiesRelatedByZindexNummer as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsPreferentieBeleids) {
                foreach ($this->collGsPreferentieBeleids as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->singleGsRelatieTussenZinummerHibc) {
                $this->singleGsRelatieTussenZinummerHibc->clearAllReferences($deep);
            }
            if ($this->aGsHandelsproducten instanceof Persistent) {
              $this->aGsHandelsproducten->clearAllReferences($deep);
            }
            if ($this->aGsNamen instanceof Persistent) {
              $this->aGsNamen->clearAllReferences($deep);
            }
            if ($this->aLeverancier instanceof Persistent) {
              $this->aLeverancier->clearAllReferences($deep);
            }
            if ($this->aImporteur instanceof Persistent) {
              $this->aImporteur->clearAllReferences($deep);
            }
            if ($this->aRegistratiehouder instanceof Persistent) {
              $this->aRegistratiehouder->clearAllReferences($deep);
            }
            if ($this->aLandOmschrijving instanceof Persistent) {
              $this->aLandOmschrijving->clearAllReferences($deep);
            }
            if ($this->aHoofdverpakkingOmschrijving instanceof Persistent) {
              $this->aHoofdverpakkingOmschrijving->clearAllReferences($deep);
            }
            if ($this->aDeelverpakkingOmschrijving instanceof Persistent) {
              $this->aDeelverpakkingOmschrijving->clearAllReferences($deep);
            }
            if ($this->aLogistiekeInformatie instanceof Persistent) {
              $this->aLogistiekeInformatie->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collGsSupplementaireProductenHistories instanceof PropelCollection) {
            $this->collGsSupplementaireProductenHistories->clearIterator();
        }
        $this->collGsSupplementaireProductenHistories = null;
        if ($this->singleGsArtikelEigenschappen instanceof PropelCollection) {
            $this->singleGsArtikelEigenschappen->clearIterator();
        }
        $this->singleGsArtikelEigenschappen = null;
        if ($this->singleGsRzvAanspraak instanceof PropelCollection) {
            $this->singleGsRzvAanspraak->clearIterator();
        }
        $this->singleGsRzvAanspraak = null;
        if ($this->collGsLogistiekeVerpakkingsinformaties instanceof PropelCollection) {
            $this->collGsLogistiekeVerpakkingsinformaties->clearIterator();
        }
        $this->collGsLogistiekeVerpakkingsinformaties = null;
        if ($this->singleGsSupplementaireProductenMetNzaMaximumtarief instanceof PropelCollection) {
            $this->singleGsSupplementaireProductenMetNzaMaximumtarief->clearIterator();
        }
        $this->singleGsSupplementaireProductenMetNzaMaximumtarief = null;
        if ($this->collGsIndicatiesBijSupplementaireProductens instanceof PropelCollection) {
            $this->collGsIndicatiesBijSupplementaireProductens->clearIterator();
        }
        $this->collGsIndicatiesBijSupplementaireProductens = null;
        if ($this->collGsLeveranciersassortimentens instanceof PropelCollection) {
            $this->collGsLeveranciersassortimentens->clearIterator();
        }
        $this->collGsLeveranciersassortimentens = null;
        if ($this->collGsLogistiekeInformatiesRelatedByZindexNummer instanceof PropelCollection) {
            $this->collGsLogistiekeInformatiesRelatedByZindexNummer->clearIterator();
        }
        $this->collGsLogistiekeInformatiesRelatedByZindexNummer = null;
        if ($this->collGsPreferentieBeleids instanceof PropelCollection) {
            $this->collGsPreferentieBeleids->clearIterator();
        }
        $this->collGsPreferentieBeleids = null;
        if ($this->singleGsRelatieTussenZinummerHibc instanceof PropelCollection) {
            $this->singleGsRelatieTussenZinummerHibc->clearIterator();
        }
        $this->singleGsRelatieTussenZinummerHibc = null;
        $this->aGsHandelsproducten = null;
        $this->aGsNamen = null;
        $this->aLeverancier = null;
        $this->aImporteur = null;
        $this->aRegistratiehouder = null;
        $this->aLandOmschrijving = null;
        $this->aHoofdverpakkingOmschrijving = null;
        $this->aDeelverpakkingOmschrijving = null;
        $this->aLogistiekeInformatie = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsArtikelenPeer::DEFAULT_STRING_FORMAT);
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
        return '' . $this->cleanupSlugPart($this->getZinummer()) . '-' . $this->cleanupSlugPart($this->getGsNamen()->getNaamVolledig()) . '';
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

         $query = GsArtikelenQuery::create('q')
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
