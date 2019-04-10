<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeInformatiePeer;
use PharmaIntelligence\GstandaardBundle\Model\GsNamenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsArtikelenTableMap;

abstract class BaseGsArtikelenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_artikelen';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsArtikelenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 55;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 55;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_artikelen.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_artikelen.mutatiekode';

    /** the column name for the zinummer field */
    const ZINUMMER = 'gs_artikelen.zinummer';

    /** the column name for the handelsproduktkode field */
    const HANDELSPRODUKTKODE = 'gs_artikelen.handelsproduktkode';

    /** the column name for the artikelnaamnummer field */
    const ARTIKELNAAMNUMMER = 'gs_artikelen.artikelnaamnummer';

    /** the column name for the inkoophoeveelheid field */
    const INKOOPHOEVEELHEID = 'gs_artikelen.inkoophoeveelheid';

    /** the column name for the aantal_hoofdverpakkingen field */
    const AANTAL_HOOFDVERPAKKINGEN = 'gs_artikelen.aantal_hoofdverpakkingen';

    /** the column name for the hoofdverpakking_omschrijving_thesnr field */
    const HOOFDVERPAKKING_OMSCHRIJVING_THESNR = 'gs_artikelen.hoofdverpakking_omschrijving_thesnr';

    /** the column name for the hoofdverpakking_omschrijving_kode field */
    const HOOFDVERPAKKING_OMSCHRIJVING_KODE = 'gs_artikelen.hoofdverpakking_omschrijving_kode';

    /** the column name for the aantal_deelverpakkingen field */
    const AANTAL_DEELVERPAKKINGEN = 'gs_artikelen.aantal_deelverpakkingen';

    /** the column name for the deelverpakking_omschrijving_thesnr field */
    const DEELVERPAKKING_OMSCHRIJVING_THESNR = 'gs_artikelen.deelverpakking_omschrijving_thesnr';

    /** the column name for the deelverpakking_omschrijving_kode field */
    const DEELVERPAKKING_OMSCHRIJVING_KODE = 'gs_artikelen.deelverpakking_omschrijving_kode';

    /** the column name for the hoeveelheid_per_deelverpakking field */
    const HOEVEELHEID_PER_DEELVERPAKKING = 'gs_artikelen.hoeveelheid_per_deelverpakking';

    /** the column name for the un_kode field */
    const UN_KODE = 'gs_artikelen.un_kode';

    /** the column name for the un_datum field */
    const UN_DATUM = 'gs_artikelen.un_datum';

    /** the column name for the kode_wet_op_de_geneesmiddelen field */
    const KODE_WET_OP_DE_GENEESMIDDELEN = 'gs_artikelen.kode_wet_op_de_geneesmiddelen';

    /** the column name for the kode_koelkast field */
    const KODE_KOELKAST = 'gs_artikelen.kode_koelkast';

    /** the column name for the kode_kliniekverpakking field */
    const KODE_KLINIEKVERPAKKING = 'gs_artikelen.kode_kliniekverpakking';

    /** the column name for the kode_vervaldatum field */
    const KODE_VERVALDATUM = 'gs_artikelen.kode_vervaldatum';

    /** the column name for the kode_easysteem field */
    const KODE_EASYSTEEM = 'gs_artikelen.kode_easysteem';

    /** the column name for the rvgnummer_1 field */
    const RVGNUMMER_1 = 'gs_artikelen.rvgnummer_1';

    /** the column name for the rvgnummer_2 field */
    const RVGNUMMER_2 = 'gs_artikelen.rvgnummer_2';

    /** the column name for the rvgnummer_3 field */
    const RVGNUMMER_3 = 'gs_artikelen.rvgnummer_3';

    /** the column name for the datum_inschrijving_registratie field */
    const DATUM_INSCHRIJVING_REGISTRATIE = 'gs_artikelen.datum_inschrijving_registratie';

    /** the column name for the aantal_ddds_per_verpakking field */
    const AANTAL_DDDS_PER_VERPAKKING = 'gs_artikelen.aantal_ddds_per_verpakking';

    /** the column name for the fabrikant_artikelkodering field */
    const FABRIKANT_ARTIKELKODERING = 'gs_artikelen.fabrikant_artikelkodering';

    /** the column name for the registratiehouder_kode field */
    const REGISTRATIEHOUDER_KODE = 'gs_artikelen.registratiehouder_kode';

    /** the column name for the importeur_kode field */
    const IMPORTEUR_KODE = 'gs_artikelen.importeur_kode';

    /** the column name for the leverancier_kode field */
    const LEVERANCIER_KODE = 'gs_artikelen.leverancier_kode';

    /** the column name for the land_van_herkomst_thesaurus_nummer field */
    const LAND_VAN_HERKOMST_THESAURUS_NUMMER = 'gs_artikelen.land_van_herkomst_thesaurus_nummer';

    /** the column name for the land_van_herkomst_kode field */
    const LAND_VAN_HERKOMST_KODE = 'gs_artikelen.land_van_herkomst_kode';

    /** the column name for the datum_invoer_verpakking field */
    const DATUM_INVOER_VERPAKKING = 'gs_artikelen.datum_invoer_verpakking';

    /** the column name for the datum_afvoer_verpakking field */
    const DATUM_AFVOER_VERPAKKING = 'gs_artikelen.datum_afvoer_verpakking';

    /** the column name for the produktkoppel_kode field */
    const PRODUKTKOPPEL_KODE = 'gs_artikelen.produktkoppel_kode';

    /** the column name for the wtgkode field */
    const WTGKODE = 'gs_artikelen.wtgkode';

    /** the column name for the btwkode_voor_declaratie field */
    const BTWKODE_VOOR_DECLARATIE = 'gs_artikelen.btwkode_voor_declaratie';

    /** the column name for the kode_inkoopkanaal field */
    const KODE_INKOOPKANAAL = 'gs_artikelen.kode_inkoopkanaal';

    /** the column name for the kode_referentieprodukt_per_cluster field */
    const KODE_REFERENTIEPRODUKT_PER_CLUSTER = 'gs_artikelen.kode_referentieprodukt_per_cluster';

    /** the column name for the verkoopprijs_exclusief_btw field */
    const VERKOOPPRIJS_EXCLUSIEF_BTW = 'gs_artikelen.verkoopprijs_exclusief_btw';

    /** the column name for the vergoedingsprijs field */
    const VERGOEDINGSPRIJS = 'gs_artikelen.vergoedingsprijs';

    /** the column name for the referentieprijs field */
    const REFERENTIEPRIJS = 'gs_artikelen.referentieprijs';

    /** the column name for the datum_schorsing field */
    const DATUM_SCHORSING = 'gs_artikelen.datum_schorsing';

    /** the column name for the datum_doorhaling field */
    const DATUM_DOORHALING = 'gs_artikelen.datum_doorhaling';

    /** the column name for the mutatie_datum field */
    const MUTATIE_DATUM = 'gs_artikelen.mutatie_datum';

    /** the column name for the uitgavedatum field */
    const UITGAVEDATUM = 'gs_artikelen.uitgavedatum';

    /** the column name for the gvs_cluster_kode field */
    const GVS_CLUSTER_KODE = 'gs_artikelen.gvs_cluster_kode';

    /** the column name for the gvs_vergoedingslimiet field */
    const GVS_VERGOEDINGSLIMIET = 'gs_artikelen.gvs_vergoedingslimiet';

    /** the column name for the inkoopprijs field */
    const INKOOPPRIJS = 'gs_artikelen.inkoopprijs';

    /** the column name for the europees_registratienummer field */
    const EUROPEES_REGISTRATIENUMMER = 'gs_artikelen.europees_registratienummer';

    /** the column name for the kortingspercentage field */
    const KORTINGSPERCENTAGE = 'gs_artikelen.kortingspercentage';

    /** the column name for the maximumprijs_vws field */
    const MAXIMUMPRIJS_VWS = 'gs_artikelen.maximumprijs_vws';

    /** the column name for the registratie_nummer_1 field */
    const REGISTRATIE_NUMMER_1 = 'gs_artikelen.registratie_nummer_1';

    /** the column name for the registratie_nummer_2 field */
    const REGISTRATIE_NUMMER_2 = 'gs_artikelen.registratie_nummer_2';

    /** the column name for the registratie_nummer_3 field */
    const REGISTRATIE_NUMMER_3 = 'gs_artikelen.registratie_nummer_3';

    /** the column name for the slug field */
    const SLUG = 'gs_artikelen.slug';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsArtikelen objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsArtikelen[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsArtikelenPeer::$fieldNames[GsArtikelenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Zinummer', 'Handelsproduktkode', 'Artikelnaamnummer', 'Inkoophoeveelheid', 'AantalHoofdverpakkingen', 'HoofdverpakkingOmschrijvingThesnr', 'HoofdverpakkingOmschrijvingKode', 'AantalDeelverpakkingen', 'DeelverpakkingOmschrijvingThesnr', 'DeelverpakkingOmschrijvingKode', 'HoeveelheidPerDeelverpakking', 'UnKode', 'UnDatum', 'KodeWetOpDeGeneesmiddelen', 'KodeKoelkast', 'KodeKliniekverpakking', 'KodeVervaldatum', 'KodeEasysteem', 'Rvgnummer1', 'Rvgnummer2', 'Rvgnummer3', 'DatumInschrijvingRegistratie', 'AantalDddsPerVerpakking', 'FabrikantArtikelkodering', 'RegistratiehouderKode', 'ImporteurKode', 'LeverancierKode', 'LandVanHerkomstThesaurusNummer', 'LandVanHerkomstKode', 'DatumInvoerVerpakking', 'DatumAfvoerVerpakking', 'ProduktkoppelKode', 'Wtgkode', 'BtwkodeVoorDeclaratie', 'KodeInkoopkanaal', 'KodeReferentieproduktPerCluster', 'VerkoopprijsExclusiefBtw', 'Vergoedingsprijs', 'Referentieprijs', 'DatumSchorsing', 'DatumDoorhaling', 'MutatieDatum', 'Uitgavedatum', 'GvsClusterKode', 'GvsVergoedingslimiet', 'Inkoopprijs', 'EuropeesRegistratienummer', 'Kortingspercentage', 'MaximumprijsVws', 'RegistratieNummer1', 'RegistratieNummer2', 'RegistratieNummer3', 'Slug', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'zinummer', 'handelsproduktkode', 'artikelnaamnummer', 'inkoophoeveelheid', 'aantalHoofdverpakkingen', 'hoofdverpakkingOmschrijvingThesnr', 'hoofdverpakkingOmschrijvingKode', 'aantalDeelverpakkingen', 'deelverpakkingOmschrijvingThesnr', 'deelverpakkingOmschrijvingKode', 'hoeveelheidPerDeelverpakking', 'unKode', 'unDatum', 'kodeWetOpDeGeneesmiddelen', 'kodeKoelkast', 'kodeKliniekverpakking', 'kodeVervaldatum', 'kodeEasysteem', 'rvgnummer1', 'rvgnummer2', 'rvgnummer3', 'datumInschrijvingRegistratie', 'aantalDddsPerVerpakking', 'fabrikantArtikelkodering', 'registratiehouderKode', 'importeurKode', 'leverancierKode', 'landVanHerkomstThesaurusNummer', 'landVanHerkomstKode', 'datumInvoerVerpakking', 'datumAfvoerVerpakking', 'produktkoppelKode', 'wtgkode', 'btwkodeVoorDeclaratie', 'kodeInkoopkanaal', 'kodeReferentieproduktPerCluster', 'verkoopprijsExclusiefBtw', 'vergoedingsprijs', 'referentieprijs', 'datumSchorsing', 'datumDoorhaling', 'mutatieDatum', 'uitgavedatum', 'gvsClusterKode', 'gvsVergoedingslimiet', 'inkoopprijs', 'europeesRegistratienummer', 'kortingspercentage', 'maximumprijsVws', 'registratieNummer1', 'registratieNummer2', 'registratieNummer3', 'slug', ),
        BasePeer::TYPE_COLNAME => array (GsArtikelenPeer::BESTANDNUMMER, GsArtikelenPeer::MUTATIEKODE, GsArtikelenPeer::ZINUMMER, GsArtikelenPeer::HANDELSPRODUKTKODE, GsArtikelenPeer::ARTIKELNAAMNUMMER, GsArtikelenPeer::INKOOPHOEVEELHEID, GsArtikelenPeer::AANTAL_HOOFDVERPAKKINGEN, GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, GsArtikelenPeer::AANTAL_DEELVERPAKKINGEN, GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, GsArtikelenPeer::HOEVEELHEID_PER_DEELVERPAKKING, GsArtikelenPeer::UN_KODE, GsArtikelenPeer::UN_DATUM, GsArtikelenPeer::KODE_WET_OP_DE_GENEESMIDDELEN, GsArtikelenPeer::KODE_KOELKAST, GsArtikelenPeer::KODE_KLINIEKVERPAKKING, GsArtikelenPeer::KODE_VERVALDATUM, GsArtikelenPeer::KODE_EASYSTEEM, GsArtikelenPeer::RVGNUMMER_1, GsArtikelenPeer::RVGNUMMER_2, GsArtikelenPeer::RVGNUMMER_3, GsArtikelenPeer::DATUM_INSCHRIJVING_REGISTRATIE, GsArtikelenPeer::AANTAL_DDDS_PER_VERPAKKING, GsArtikelenPeer::FABRIKANT_ARTIKELKODERING, GsArtikelenPeer::REGISTRATIEHOUDER_KODE, GsArtikelenPeer::IMPORTEUR_KODE, GsArtikelenPeer::LEVERANCIER_KODE, GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, GsArtikelenPeer::DATUM_INVOER_VERPAKKING, GsArtikelenPeer::DATUM_AFVOER_VERPAKKING, GsArtikelenPeer::PRODUKTKOPPEL_KODE, GsArtikelenPeer::WTGKODE, GsArtikelenPeer::BTWKODE_VOOR_DECLARATIE, GsArtikelenPeer::KODE_INKOOPKANAAL, GsArtikelenPeer::KODE_REFERENTIEPRODUKT_PER_CLUSTER, GsArtikelenPeer::VERKOOPPRIJS_EXCLUSIEF_BTW, GsArtikelenPeer::VERGOEDINGSPRIJS, GsArtikelenPeer::REFERENTIEPRIJS, GsArtikelenPeer::DATUM_SCHORSING, GsArtikelenPeer::DATUM_DOORHALING, GsArtikelenPeer::MUTATIE_DATUM, GsArtikelenPeer::UITGAVEDATUM, GsArtikelenPeer::GVS_CLUSTER_KODE, GsArtikelenPeer::GVS_VERGOEDINGSLIMIET, GsArtikelenPeer::INKOOPPRIJS, GsArtikelenPeer::EUROPEES_REGISTRATIENUMMER, GsArtikelenPeer::KORTINGSPERCENTAGE, GsArtikelenPeer::MAXIMUMPRIJS_VWS, GsArtikelenPeer::REGISTRATIE_NUMMER_1, GsArtikelenPeer::REGISTRATIE_NUMMER_2, GsArtikelenPeer::REGISTRATIE_NUMMER_3, GsArtikelenPeer::SLUG, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'ZINUMMER', 'HANDELSPRODUKTKODE', 'ARTIKELNAAMNUMMER', 'INKOOPHOEVEELHEID', 'AANTAL_HOOFDVERPAKKINGEN', 'HOOFDVERPAKKING_OMSCHRIJVING_THESNR', 'HOOFDVERPAKKING_OMSCHRIJVING_KODE', 'AANTAL_DEELVERPAKKINGEN', 'DEELVERPAKKING_OMSCHRIJVING_THESNR', 'DEELVERPAKKING_OMSCHRIJVING_KODE', 'HOEVEELHEID_PER_DEELVERPAKKING', 'UN_KODE', 'UN_DATUM', 'KODE_WET_OP_DE_GENEESMIDDELEN', 'KODE_KOELKAST', 'KODE_KLINIEKVERPAKKING', 'KODE_VERVALDATUM', 'KODE_EASYSTEEM', 'RVGNUMMER_1', 'RVGNUMMER_2', 'RVGNUMMER_3', 'DATUM_INSCHRIJVING_REGISTRATIE', 'AANTAL_DDDS_PER_VERPAKKING', 'FABRIKANT_ARTIKELKODERING', 'REGISTRATIEHOUDER_KODE', 'IMPORTEUR_KODE', 'LEVERANCIER_KODE', 'LAND_VAN_HERKOMST_THESAURUS_NUMMER', 'LAND_VAN_HERKOMST_KODE', 'DATUM_INVOER_VERPAKKING', 'DATUM_AFVOER_VERPAKKING', 'PRODUKTKOPPEL_KODE', 'WTGKODE', 'BTWKODE_VOOR_DECLARATIE', 'KODE_INKOOPKANAAL', 'KODE_REFERENTIEPRODUKT_PER_CLUSTER', 'VERKOOPPRIJS_EXCLUSIEF_BTW', 'VERGOEDINGSPRIJS', 'REFERENTIEPRIJS', 'DATUM_SCHORSING', 'DATUM_DOORHALING', 'MUTATIE_DATUM', 'UITGAVEDATUM', 'GVS_CLUSTER_KODE', 'GVS_VERGOEDINGSLIMIET', 'INKOOPPRIJS', 'EUROPEES_REGISTRATIENUMMER', 'KORTINGSPERCENTAGE', 'MAXIMUMPRIJS_VWS', 'REGISTRATIE_NUMMER_1', 'REGISTRATIE_NUMMER_2', 'REGISTRATIE_NUMMER_3', 'SLUG', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'zinummer', 'handelsproduktkode', 'artikelnaamnummer', 'inkoophoeveelheid', 'aantal_hoofdverpakkingen', 'hoofdverpakking_omschrijving_thesnr', 'hoofdverpakking_omschrijving_kode', 'aantal_deelverpakkingen', 'deelverpakking_omschrijving_thesnr', 'deelverpakking_omschrijving_kode', 'hoeveelheid_per_deelverpakking', 'un_kode', 'un_datum', 'kode_wet_op_de_geneesmiddelen', 'kode_koelkast', 'kode_kliniekverpakking', 'kode_vervaldatum', 'kode_easysteem', 'rvgnummer_1', 'rvgnummer_2', 'rvgnummer_3', 'datum_inschrijving_registratie', 'aantal_ddds_per_verpakking', 'fabrikant_artikelkodering', 'registratiehouder_kode', 'importeur_kode', 'leverancier_kode', 'land_van_herkomst_thesaurus_nummer', 'land_van_herkomst_kode', 'datum_invoer_verpakking', 'datum_afvoer_verpakking', 'produktkoppel_kode', 'wtgkode', 'btwkode_voor_declaratie', 'kode_inkoopkanaal', 'kode_referentieprodukt_per_cluster', 'verkoopprijs_exclusief_btw', 'vergoedingsprijs', 'referentieprijs', 'datum_schorsing', 'datum_doorhaling', 'mutatie_datum', 'uitgavedatum', 'gvs_cluster_kode', 'gvs_vergoedingslimiet', 'inkoopprijs', 'europees_registratienummer', 'kortingspercentage', 'maximumprijs_vws', 'registratie_nummer_1', 'registratie_nummer_2', 'registratie_nummer_3', 'slug', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsArtikelenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Zinummer' => 2, 'Handelsproduktkode' => 3, 'Artikelnaamnummer' => 4, 'Inkoophoeveelheid' => 5, 'AantalHoofdverpakkingen' => 6, 'HoofdverpakkingOmschrijvingThesnr' => 7, 'HoofdverpakkingOmschrijvingKode' => 8, 'AantalDeelverpakkingen' => 9, 'DeelverpakkingOmschrijvingThesnr' => 10, 'DeelverpakkingOmschrijvingKode' => 11, 'HoeveelheidPerDeelverpakking' => 12, 'UnKode' => 13, 'UnDatum' => 14, 'KodeWetOpDeGeneesmiddelen' => 15, 'KodeKoelkast' => 16, 'KodeKliniekverpakking' => 17, 'KodeVervaldatum' => 18, 'KodeEasysteem' => 19, 'Rvgnummer1' => 20, 'Rvgnummer2' => 21, 'Rvgnummer3' => 22, 'DatumInschrijvingRegistratie' => 23, 'AantalDddsPerVerpakking' => 24, 'FabrikantArtikelkodering' => 25, 'RegistratiehouderKode' => 26, 'ImporteurKode' => 27, 'LeverancierKode' => 28, 'LandVanHerkomstThesaurusNummer' => 29, 'LandVanHerkomstKode' => 30, 'DatumInvoerVerpakking' => 31, 'DatumAfvoerVerpakking' => 32, 'ProduktkoppelKode' => 33, 'Wtgkode' => 34, 'BtwkodeVoorDeclaratie' => 35, 'KodeInkoopkanaal' => 36, 'KodeReferentieproduktPerCluster' => 37, 'VerkoopprijsExclusiefBtw' => 38, 'Vergoedingsprijs' => 39, 'Referentieprijs' => 40, 'DatumSchorsing' => 41, 'DatumDoorhaling' => 42, 'MutatieDatum' => 43, 'Uitgavedatum' => 44, 'GvsClusterKode' => 45, 'GvsVergoedingslimiet' => 46, 'Inkoopprijs' => 47, 'EuropeesRegistratienummer' => 48, 'Kortingspercentage' => 49, 'MaximumprijsVws' => 50, 'RegistratieNummer1' => 51, 'RegistratieNummer2' => 52, 'RegistratieNummer3' => 53, 'Slug' => 54, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'zinummer' => 2, 'handelsproduktkode' => 3, 'artikelnaamnummer' => 4, 'inkoophoeveelheid' => 5, 'aantalHoofdverpakkingen' => 6, 'hoofdverpakkingOmschrijvingThesnr' => 7, 'hoofdverpakkingOmschrijvingKode' => 8, 'aantalDeelverpakkingen' => 9, 'deelverpakkingOmschrijvingThesnr' => 10, 'deelverpakkingOmschrijvingKode' => 11, 'hoeveelheidPerDeelverpakking' => 12, 'unKode' => 13, 'unDatum' => 14, 'kodeWetOpDeGeneesmiddelen' => 15, 'kodeKoelkast' => 16, 'kodeKliniekverpakking' => 17, 'kodeVervaldatum' => 18, 'kodeEasysteem' => 19, 'rvgnummer1' => 20, 'rvgnummer2' => 21, 'rvgnummer3' => 22, 'datumInschrijvingRegistratie' => 23, 'aantalDddsPerVerpakking' => 24, 'fabrikantArtikelkodering' => 25, 'registratiehouderKode' => 26, 'importeurKode' => 27, 'leverancierKode' => 28, 'landVanHerkomstThesaurusNummer' => 29, 'landVanHerkomstKode' => 30, 'datumInvoerVerpakking' => 31, 'datumAfvoerVerpakking' => 32, 'produktkoppelKode' => 33, 'wtgkode' => 34, 'btwkodeVoorDeclaratie' => 35, 'kodeInkoopkanaal' => 36, 'kodeReferentieproduktPerCluster' => 37, 'verkoopprijsExclusiefBtw' => 38, 'vergoedingsprijs' => 39, 'referentieprijs' => 40, 'datumSchorsing' => 41, 'datumDoorhaling' => 42, 'mutatieDatum' => 43, 'uitgavedatum' => 44, 'gvsClusterKode' => 45, 'gvsVergoedingslimiet' => 46, 'inkoopprijs' => 47, 'europeesRegistratienummer' => 48, 'kortingspercentage' => 49, 'maximumprijsVws' => 50, 'registratieNummer1' => 51, 'registratieNummer2' => 52, 'registratieNummer3' => 53, 'slug' => 54, ),
        BasePeer::TYPE_COLNAME => array (GsArtikelenPeer::BESTANDNUMMER => 0, GsArtikelenPeer::MUTATIEKODE => 1, GsArtikelenPeer::ZINUMMER => 2, GsArtikelenPeer::HANDELSPRODUKTKODE => 3, GsArtikelenPeer::ARTIKELNAAMNUMMER => 4, GsArtikelenPeer::INKOOPHOEVEELHEID => 5, GsArtikelenPeer::AANTAL_HOOFDVERPAKKINGEN => 6, GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR => 7, GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE => 8, GsArtikelenPeer::AANTAL_DEELVERPAKKINGEN => 9, GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR => 10, GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE => 11, GsArtikelenPeer::HOEVEELHEID_PER_DEELVERPAKKING => 12, GsArtikelenPeer::UN_KODE => 13, GsArtikelenPeer::UN_DATUM => 14, GsArtikelenPeer::KODE_WET_OP_DE_GENEESMIDDELEN => 15, GsArtikelenPeer::KODE_KOELKAST => 16, GsArtikelenPeer::KODE_KLINIEKVERPAKKING => 17, GsArtikelenPeer::KODE_VERVALDATUM => 18, GsArtikelenPeer::KODE_EASYSTEEM => 19, GsArtikelenPeer::RVGNUMMER_1 => 20, GsArtikelenPeer::RVGNUMMER_2 => 21, GsArtikelenPeer::RVGNUMMER_3 => 22, GsArtikelenPeer::DATUM_INSCHRIJVING_REGISTRATIE => 23, GsArtikelenPeer::AANTAL_DDDS_PER_VERPAKKING => 24, GsArtikelenPeer::FABRIKANT_ARTIKELKODERING => 25, GsArtikelenPeer::REGISTRATIEHOUDER_KODE => 26, GsArtikelenPeer::IMPORTEUR_KODE => 27, GsArtikelenPeer::LEVERANCIER_KODE => 28, GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER => 29, GsArtikelenPeer::LAND_VAN_HERKOMST_KODE => 30, GsArtikelenPeer::DATUM_INVOER_VERPAKKING => 31, GsArtikelenPeer::DATUM_AFVOER_VERPAKKING => 32, GsArtikelenPeer::PRODUKTKOPPEL_KODE => 33, GsArtikelenPeer::WTGKODE => 34, GsArtikelenPeer::BTWKODE_VOOR_DECLARATIE => 35, GsArtikelenPeer::KODE_INKOOPKANAAL => 36, GsArtikelenPeer::KODE_REFERENTIEPRODUKT_PER_CLUSTER => 37, GsArtikelenPeer::VERKOOPPRIJS_EXCLUSIEF_BTW => 38, GsArtikelenPeer::VERGOEDINGSPRIJS => 39, GsArtikelenPeer::REFERENTIEPRIJS => 40, GsArtikelenPeer::DATUM_SCHORSING => 41, GsArtikelenPeer::DATUM_DOORHALING => 42, GsArtikelenPeer::MUTATIE_DATUM => 43, GsArtikelenPeer::UITGAVEDATUM => 44, GsArtikelenPeer::GVS_CLUSTER_KODE => 45, GsArtikelenPeer::GVS_VERGOEDINGSLIMIET => 46, GsArtikelenPeer::INKOOPPRIJS => 47, GsArtikelenPeer::EUROPEES_REGISTRATIENUMMER => 48, GsArtikelenPeer::KORTINGSPERCENTAGE => 49, GsArtikelenPeer::MAXIMUMPRIJS_VWS => 50, GsArtikelenPeer::REGISTRATIE_NUMMER_1 => 51, GsArtikelenPeer::REGISTRATIE_NUMMER_2 => 52, GsArtikelenPeer::REGISTRATIE_NUMMER_3 => 53, GsArtikelenPeer::SLUG => 54, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'ZINUMMER' => 2, 'HANDELSPRODUKTKODE' => 3, 'ARTIKELNAAMNUMMER' => 4, 'INKOOPHOEVEELHEID' => 5, 'AANTAL_HOOFDVERPAKKINGEN' => 6, 'HOOFDVERPAKKING_OMSCHRIJVING_THESNR' => 7, 'HOOFDVERPAKKING_OMSCHRIJVING_KODE' => 8, 'AANTAL_DEELVERPAKKINGEN' => 9, 'DEELVERPAKKING_OMSCHRIJVING_THESNR' => 10, 'DEELVERPAKKING_OMSCHRIJVING_KODE' => 11, 'HOEVEELHEID_PER_DEELVERPAKKING' => 12, 'UN_KODE' => 13, 'UN_DATUM' => 14, 'KODE_WET_OP_DE_GENEESMIDDELEN' => 15, 'KODE_KOELKAST' => 16, 'KODE_KLINIEKVERPAKKING' => 17, 'KODE_VERVALDATUM' => 18, 'KODE_EASYSTEEM' => 19, 'RVGNUMMER_1' => 20, 'RVGNUMMER_2' => 21, 'RVGNUMMER_3' => 22, 'DATUM_INSCHRIJVING_REGISTRATIE' => 23, 'AANTAL_DDDS_PER_VERPAKKING' => 24, 'FABRIKANT_ARTIKELKODERING' => 25, 'REGISTRATIEHOUDER_KODE' => 26, 'IMPORTEUR_KODE' => 27, 'LEVERANCIER_KODE' => 28, 'LAND_VAN_HERKOMST_THESAURUS_NUMMER' => 29, 'LAND_VAN_HERKOMST_KODE' => 30, 'DATUM_INVOER_VERPAKKING' => 31, 'DATUM_AFVOER_VERPAKKING' => 32, 'PRODUKTKOPPEL_KODE' => 33, 'WTGKODE' => 34, 'BTWKODE_VOOR_DECLARATIE' => 35, 'KODE_INKOOPKANAAL' => 36, 'KODE_REFERENTIEPRODUKT_PER_CLUSTER' => 37, 'VERKOOPPRIJS_EXCLUSIEF_BTW' => 38, 'VERGOEDINGSPRIJS' => 39, 'REFERENTIEPRIJS' => 40, 'DATUM_SCHORSING' => 41, 'DATUM_DOORHALING' => 42, 'MUTATIE_DATUM' => 43, 'UITGAVEDATUM' => 44, 'GVS_CLUSTER_KODE' => 45, 'GVS_VERGOEDINGSLIMIET' => 46, 'INKOOPPRIJS' => 47, 'EUROPEES_REGISTRATIENUMMER' => 48, 'KORTINGSPERCENTAGE' => 49, 'MAXIMUMPRIJS_VWS' => 50, 'REGISTRATIE_NUMMER_1' => 51, 'REGISTRATIE_NUMMER_2' => 52, 'REGISTRATIE_NUMMER_3' => 53, 'SLUG' => 54, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'zinummer' => 2, 'handelsproduktkode' => 3, 'artikelnaamnummer' => 4, 'inkoophoeveelheid' => 5, 'aantal_hoofdverpakkingen' => 6, 'hoofdverpakking_omschrijving_thesnr' => 7, 'hoofdverpakking_omschrijving_kode' => 8, 'aantal_deelverpakkingen' => 9, 'deelverpakking_omschrijving_thesnr' => 10, 'deelverpakking_omschrijving_kode' => 11, 'hoeveelheid_per_deelverpakking' => 12, 'un_kode' => 13, 'un_datum' => 14, 'kode_wet_op_de_geneesmiddelen' => 15, 'kode_koelkast' => 16, 'kode_kliniekverpakking' => 17, 'kode_vervaldatum' => 18, 'kode_easysteem' => 19, 'rvgnummer_1' => 20, 'rvgnummer_2' => 21, 'rvgnummer_3' => 22, 'datum_inschrijving_registratie' => 23, 'aantal_ddds_per_verpakking' => 24, 'fabrikant_artikelkodering' => 25, 'registratiehouder_kode' => 26, 'importeur_kode' => 27, 'leverancier_kode' => 28, 'land_van_herkomst_thesaurus_nummer' => 29, 'land_van_herkomst_kode' => 30, 'datum_invoer_verpakking' => 31, 'datum_afvoer_verpakking' => 32, 'produktkoppel_kode' => 33, 'wtgkode' => 34, 'btwkode_voor_declaratie' => 35, 'kode_inkoopkanaal' => 36, 'kode_referentieprodukt_per_cluster' => 37, 'verkoopprijs_exclusief_btw' => 38, 'vergoedingsprijs' => 39, 'referentieprijs' => 40, 'datum_schorsing' => 41, 'datum_doorhaling' => 42, 'mutatie_datum' => 43, 'uitgavedatum' => 44, 'gvs_cluster_kode' => 45, 'gvs_vergoedingslimiet' => 46, 'inkoopprijs' => 47, 'europees_registratienummer' => 48, 'kortingspercentage' => 49, 'maximumprijs_vws' => 50, 'registratie_nummer_1' => 51, 'registratie_nummer_2' => 52, 'registratie_nummer_3' => 53, 'slug' => 54, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = GsArtikelenPeer::getFieldNames($toType);
        $key = isset(GsArtikelenPeer::$fieldKeys[$fromType][$name]) ? GsArtikelenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsArtikelenPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, GsArtikelenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsArtikelenPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. GsArtikelenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsArtikelenPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(GsArtikelenPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsArtikelenPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsArtikelenPeer::ZINUMMER);
            $criteria->addSelectColumn(GsArtikelenPeer::HANDELSPRODUKTKODE);
            $criteria->addSelectColumn(GsArtikelenPeer::ARTIKELNAAMNUMMER);
            $criteria->addSelectColumn(GsArtikelenPeer::INKOOPHOEVEELHEID);
            $criteria->addSelectColumn(GsArtikelenPeer::AANTAL_HOOFDVERPAKKINGEN);
            $criteria->addSelectColumn(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR);
            $criteria->addSelectColumn(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE);
            $criteria->addSelectColumn(GsArtikelenPeer::AANTAL_DEELVERPAKKINGEN);
            $criteria->addSelectColumn(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR);
            $criteria->addSelectColumn(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE);
            $criteria->addSelectColumn(GsArtikelenPeer::HOEVEELHEID_PER_DEELVERPAKKING);
            $criteria->addSelectColumn(GsArtikelenPeer::UN_KODE);
            $criteria->addSelectColumn(GsArtikelenPeer::UN_DATUM);
            $criteria->addSelectColumn(GsArtikelenPeer::KODE_WET_OP_DE_GENEESMIDDELEN);
            $criteria->addSelectColumn(GsArtikelenPeer::KODE_KOELKAST);
            $criteria->addSelectColumn(GsArtikelenPeer::KODE_KLINIEKVERPAKKING);
            $criteria->addSelectColumn(GsArtikelenPeer::KODE_VERVALDATUM);
            $criteria->addSelectColumn(GsArtikelenPeer::KODE_EASYSTEEM);
            $criteria->addSelectColumn(GsArtikelenPeer::RVGNUMMER_1);
            $criteria->addSelectColumn(GsArtikelenPeer::RVGNUMMER_2);
            $criteria->addSelectColumn(GsArtikelenPeer::RVGNUMMER_3);
            $criteria->addSelectColumn(GsArtikelenPeer::DATUM_INSCHRIJVING_REGISTRATIE);
            $criteria->addSelectColumn(GsArtikelenPeer::AANTAL_DDDS_PER_VERPAKKING);
            $criteria->addSelectColumn(GsArtikelenPeer::FABRIKANT_ARTIKELKODERING);
            $criteria->addSelectColumn(GsArtikelenPeer::REGISTRATIEHOUDER_KODE);
            $criteria->addSelectColumn(GsArtikelenPeer::IMPORTEUR_KODE);
            $criteria->addSelectColumn(GsArtikelenPeer::LEVERANCIER_KODE);
            $criteria->addSelectColumn(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER);
            $criteria->addSelectColumn(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE);
            $criteria->addSelectColumn(GsArtikelenPeer::DATUM_INVOER_VERPAKKING);
            $criteria->addSelectColumn(GsArtikelenPeer::DATUM_AFVOER_VERPAKKING);
            $criteria->addSelectColumn(GsArtikelenPeer::PRODUKTKOPPEL_KODE);
            $criteria->addSelectColumn(GsArtikelenPeer::WTGKODE);
            $criteria->addSelectColumn(GsArtikelenPeer::BTWKODE_VOOR_DECLARATIE);
            $criteria->addSelectColumn(GsArtikelenPeer::KODE_INKOOPKANAAL);
            $criteria->addSelectColumn(GsArtikelenPeer::KODE_REFERENTIEPRODUKT_PER_CLUSTER);
            $criteria->addSelectColumn(GsArtikelenPeer::VERKOOPPRIJS_EXCLUSIEF_BTW);
            $criteria->addSelectColumn(GsArtikelenPeer::VERGOEDINGSPRIJS);
            $criteria->addSelectColumn(GsArtikelenPeer::REFERENTIEPRIJS);
            $criteria->addSelectColumn(GsArtikelenPeer::DATUM_SCHORSING);
            $criteria->addSelectColumn(GsArtikelenPeer::DATUM_DOORHALING);
            $criteria->addSelectColumn(GsArtikelenPeer::MUTATIE_DATUM);
            $criteria->addSelectColumn(GsArtikelenPeer::UITGAVEDATUM);
            $criteria->addSelectColumn(GsArtikelenPeer::GVS_CLUSTER_KODE);
            $criteria->addSelectColumn(GsArtikelenPeer::GVS_VERGOEDINGSLIMIET);
            $criteria->addSelectColumn(GsArtikelenPeer::INKOOPPRIJS);
            $criteria->addSelectColumn(GsArtikelenPeer::EUROPEES_REGISTRATIENUMMER);
            $criteria->addSelectColumn(GsArtikelenPeer::KORTINGSPERCENTAGE);
            $criteria->addSelectColumn(GsArtikelenPeer::MAXIMUMPRIJS_VWS);
            $criteria->addSelectColumn(GsArtikelenPeer::REGISTRATIE_NUMMER_1);
            $criteria->addSelectColumn(GsArtikelenPeer::REGISTRATIE_NUMMER_2);
            $criteria->addSelectColumn(GsArtikelenPeer::REGISTRATIE_NUMMER_3);
            $criteria->addSelectColumn(GsArtikelenPeer::SLUG);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.zinummer');
            $criteria->addSelectColumn($alias . '.handelsproduktkode');
            $criteria->addSelectColumn($alias . '.artikelnaamnummer');
            $criteria->addSelectColumn($alias . '.inkoophoeveelheid');
            $criteria->addSelectColumn($alias . '.aantal_hoofdverpakkingen');
            $criteria->addSelectColumn($alias . '.hoofdverpakking_omschrijving_thesnr');
            $criteria->addSelectColumn($alias . '.hoofdverpakking_omschrijving_kode');
            $criteria->addSelectColumn($alias . '.aantal_deelverpakkingen');
            $criteria->addSelectColumn($alias . '.deelverpakking_omschrijving_thesnr');
            $criteria->addSelectColumn($alias . '.deelverpakking_omschrijving_kode');
            $criteria->addSelectColumn($alias . '.hoeveelheid_per_deelverpakking');
            $criteria->addSelectColumn($alias . '.un_kode');
            $criteria->addSelectColumn($alias . '.un_datum');
            $criteria->addSelectColumn($alias . '.kode_wet_op_de_geneesmiddelen');
            $criteria->addSelectColumn($alias . '.kode_koelkast');
            $criteria->addSelectColumn($alias . '.kode_kliniekverpakking');
            $criteria->addSelectColumn($alias . '.kode_vervaldatum');
            $criteria->addSelectColumn($alias . '.kode_easysteem');
            $criteria->addSelectColumn($alias . '.rvgnummer_1');
            $criteria->addSelectColumn($alias . '.rvgnummer_2');
            $criteria->addSelectColumn($alias . '.rvgnummer_3');
            $criteria->addSelectColumn($alias . '.datum_inschrijving_registratie');
            $criteria->addSelectColumn($alias . '.aantal_ddds_per_verpakking');
            $criteria->addSelectColumn($alias . '.fabrikant_artikelkodering');
            $criteria->addSelectColumn($alias . '.registratiehouder_kode');
            $criteria->addSelectColumn($alias . '.importeur_kode');
            $criteria->addSelectColumn($alias . '.leverancier_kode');
            $criteria->addSelectColumn($alias . '.land_van_herkomst_thesaurus_nummer');
            $criteria->addSelectColumn($alias . '.land_van_herkomst_kode');
            $criteria->addSelectColumn($alias . '.datum_invoer_verpakking');
            $criteria->addSelectColumn($alias . '.datum_afvoer_verpakking');
            $criteria->addSelectColumn($alias . '.produktkoppel_kode');
            $criteria->addSelectColumn($alias . '.wtgkode');
            $criteria->addSelectColumn($alias . '.btwkode_voor_declaratie');
            $criteria->addSelectColumn($alias . '.kode_inkoopkanaal');
            $criteria->addSelectColumn($alias . '.kode_referentieprodukt_per_cluster');
            $criteria->addSelectColumn($alias . '.verkoopprijs_exclusief_btw');
            $criteria->addSelectColumn($alias . '.vergoedingsprijs');
            $criteria->addSelectColumn($alias . '.referentieprijs');
            $criteria->addSelectColumn($alias . '.datum_schorsing');
            $criteria->addSelectColumn($alias . '.datum_doorhaling');
            $criteria->addSelectColumn($alias . '.mutatie_datum');
            $criteria->addSelectColumn($alias . '.uitgavedatum');
            $criteria->addSelectColumn($alias . '.gvs_cluster_kode');
            $criteria->addSelectColumn($alias . '.gvs_vergoedingslimiet');
            $criteria->addSelectColumn($alias . '.inkoopprijs');
            $criteria->addSelectColumn($alias . '.europees_registratienummer');
            $criteria->addSelectColumn($alias . '.kortingspercentage');
            $criteria->addSelectColumn($alias . '.maximumprijs_vws');
            $criteria->addSelectColumn($alias . '.registratie_nummer_1');
            $criteria->addSelectColumn($alias . '.registratie_nummer_2');
            $criteria->addSelectColumn($alias . '.registratie_nummer_3');
            $criteria->addSelectColumn($alias . '.slug');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return GsArtikelen
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsArtikelenPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return GsArtikelenPeer::populateObjects(GsArtikelenPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param GsArtikelen $obj A GsArtikelen object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getZinummer();
            } // if key === null
            GsArtikelenPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A GsArtikelen object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsArtikelen) {
                $key = (string) $value->getZinummer();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsArtikelen object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsArtikelenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsArtikelen Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsArtikelenPeer::$instances[$key])) {
                return GsArtikelenPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (GsArtikelenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsArtikelenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_artikelen
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol + 2] === null) {
            return null;
        }

        return (string) $row[$startcol + 2];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol + 2];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = GsArtikelenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsArtikelenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsArtikelenPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (GsArtikelen object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsArtikelenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsArtikelenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsArtikelenPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsHandelsproducten table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsHandelsproducten(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsNamen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsNamen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Leverancier table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinLeverancier(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelenPeer::LEVERANCIER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Importeur table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinImporteur(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelenPeer::IMPORTEUR_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Registratiehouder table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRegistratiehouder(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related LandOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinLandOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related HoofdverpakkingOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinHoofdverpakkingOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related DeelverpakkingOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinDeelverpakkingOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related LogistiekeInformatie table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinLogistiekeInformatie(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of GsArtikelen objects pre-filled with their GsHandelsproducten objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsHandelsproducten(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;
        GsHandelsproductenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsArtikelen) to $obj2 (GsHandelsproducten)
                $obj2->addGsArtikelen($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelen objects pre-filled with their GsNamen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsNamen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;
        GsNamenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsNamenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsNamenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsNamenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsArtikelen) to $obj2 (GsNamen)
                $obj2->addGsArtikelen($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelen objects pre-filled with their GsNawGegevensGstandaard objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinLeverancier(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;
        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsArtikelenPeer::LEVERANCIER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsArtikelen) to $obj2 (GsNawGegevensGstandaard)
                $obj2->addGsArtikelenRelatedByLeverancierKode($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelen objects pre-filled with their GsNawGegevensGstandaard objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinImporteur(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;
        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsArtikelenPeer::IMPORTEUR_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsArtikelen) to $obj2 (GsNawGegevensGstandaard)
                $obj2->addGsArtikelenRelatedByImporteurKode($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelen objects pre-filled with their GsNawGegevensGstandaard objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRegistratiehouder(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;
        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsArtikelen) to $obj2 (GsNawGegevensGstandaard)
                $obj2->addGsArtikelenRelatedByRegistratiehouderKode($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelen objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinLandOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsArtikelen) to $obj2 (GsThesauriTotaal)
                $obj2->addGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelen objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinHoofdverpakkingOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsArtikelen) to $obj2 (GsThesauriTotaal)
                $obj2->addGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelen objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinDeelverpakkingOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsArtikelen) to $obj2 (GsThesauriTotaal)
                $obj2->addGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelen objects pre-filled with their GsLogistiekeInformatie objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinLogistiekeInformatie(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;
        GsLogistiekeInformatiePeer::addSelectColumns($criteria);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsLogistiekeInformatiePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsLogistiekeInformatiePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsLogistiekeInformatiePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsLogistiekeInformatiePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsArtikelen) to $obj2 (GsLogistiekeInformatie)
                // one to one relationship
                $obj1->setGsLogistiekeInformatie($obj2);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::LEVERANCIER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::IMPORTEUR_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of GsArtikelen objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol2 = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsLogistiekeInformatiePeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + GsLogistiekeInformatiePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::LEVERANCIER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::IMPORTEUR_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined GsHandelsproducten rows

            $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj2 (GsHandelsproducten)
                $obj2->addGsArtikelen($obj1);
            } // if joined row not null

            // Add objects for joined GsNamen rows

            $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj3 (GsNamen)
                $obj3->addGsArtikelen($obj1);
            } // if joined row not null

            // Add objects for joined GsNawGegevensGstandaard rows

            $key4 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj4 (GsNawGegevensGstandaard)
                $obj4->addGsArtikelenRelatedByLeverancierKode($obj1);
            } // if joined row not null

            // Add objects for joined GsNawGegevensGstandaard rows

            $key5 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj5 (GsNawGegevensGstandaard)
                $obj5->addGsArtikelenRelatedByImporteurKode($obj1);
            } // if joined row not null

            // Add objects for joined GsNawGegevensGstandaard rows

            $key6 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj6 (GsNawGegevensGstandaard)
                $obj6->addGsArtikelenRelatedByRegistratiehouderKode($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key7 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol7);
            if ($key7 !== null) {
                $obj7 = GsThesauriTotaalPeer::getInstanceFromPool($key7);
                if (!$obj7) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    GsThesauriTotaalPeer::addInstanceToPool($obj7, $key7);
                } // if obj7 loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj7 (GsThesauriTotaal)
                $obj7->addGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key8 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol8);
            if ($key8 !== null) {
                $obj8 = GsThesauriTotaalPeer::getInstanceFromPool($key8);
                if (!$obj8) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    GsThesauriTotaalPeer::addInstanceToPool($obj8, $key8);
                } // if obj8 loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj8 (GsThesauriTotaal)
                $obj8->addGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key9 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol9);
            if ($key9 !== null) {
                $obj9 = GsThesauriTotaalPeer::getInstanceFromPool($key9);
                if (!$obj9) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    GsThesauriTotaalPeer::addInstanceToPool($obj9, $key9);
                } // if obj9 loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj9 (GsThesauriTotaal)
                $obj9->addGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($obj1);
            } // if joined row not null

            // Add objects for joined GsLogistiekeInformatie rows

            $key10 = GsLogistiekeInformatiePeer::getPrimaryKeyHashFromRow($row, $startcol10);
            if ($key10 !== null) {
                $obj10 = GsLogistiekeInformatiePeer::getInstanceFromPool($key10);
                if (!$obj10) {

                    $cls = GsLogistiekeInformatiePeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    GsLogistiekeInformatiePeer::addInstanceToPool($obj10, $key10);
                } // if obj10 loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj10 (GsLogistiekeInformatie)
                $obj1->setGsLogistiekeInformatie($obj10);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsHandelsproducten table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsHandelsproducten(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::LEVERANCIER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::IMPORTEUR_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsNamen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsNamen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::LEVERANCIER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::IMPORTEUR_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Leverancier table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptLeverancier(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Importeur table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptImporteur(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Registratiehouder table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRegistratiehouder(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related LandOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptLandOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::LEVERANCIER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::IMPORTEUR_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related HoofdverpakkingOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptHoofdverpakkingOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::LEVERANCIER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::IMPORTEUR_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related DeelverpakkingOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptDeelverpakkingOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::LEVERANCIER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::IMPORTEUR_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related LogistiekeInformatie table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptLogistiekeInformatie(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsArtikelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::LEVERANCIER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::IMPORTEUR_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of GsArtikelen objects pre-filled with all related objects except GsHandelsproducten.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsHandelsproducten(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol2 = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsLogistiekeInformatiePeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + GsLogistiekeInformatiePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::LEVERANCIER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::IMPORTEUR_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsNamen rows

                $key2 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsNamenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsNamenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj2 (GsNamen)
                $obj2->addGsArtikelen($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key3 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj3 (GsNawGegevensGstandaard)
                $obj3->addGsArtikelenRelatedByLeverancierKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key4 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj4 (GsNawGegevensGstandaard)
                $obj4->addGsArtikelenRelatedByImporteurKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key5 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj5 (GsNawGegevensGstandaard)
                $obj5->addGsArtikelenRelatedByRegistratiehouderKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key6 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsThesauriTotaalPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsThesauriTotaalPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj6 (GsThesauriTotaal)
                $obj6->addGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key7 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = GsThesauriTotaalPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    GsThesauriTotaalPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj7 (GsThesauriTotaal)
                $obj7->addGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key8 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = GsThesauriTotaalPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    GsThesauriTotaalPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj8 (GsThesauriTotaal)
                $obj8->addGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsLogistiekeInformatie rows

                $key9 = GsLogistiekeInformatiePeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = GsLogistiekeInformatiePeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = GsLogistiekeInformatiePeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    GsLogistiekeInformatiePeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj9 (GsLogistiekeInformatie)
                $obj1->setGsLogistiekeInformatie($obj9);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelen objects pre-filled with all related objects except GsNamen.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsNamen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol2 = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsLogistiekeInformatiePeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + GsLogistiekeInformatiePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::LEVERANCIER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::IMPORTEUR_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsHandelsproducten rows

                $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj2 (GsHandelsproducten)
                $obj2->addGsArtikelen($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key3 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj3 (GsNawGegevensGstandaard)
                $obj3->addGsArtikelenRelatedByLeverancierKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key4 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj4 (GsNawGegevensGstandaard)
                $obj4->addGsArtikelenRelatedByImporteurKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key5 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj5 (GsNawGegevensGstandaard)
                $obj5->addGsArtikelenRelatedByRegistratiehouderKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key6 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsThesauriTotaalPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsThesauriTotaalPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj6 (GsThesauriTotaal)
                $obj6->addGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key7 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = GsThesauriTotaalPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    GsThesauriTotaalPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj7 (GsThesauriTotaal)
                $obj7->addGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key8 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = GsThesauriTotaalPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    GsThesauriTotaalPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj8 (GsThesauriTotaal)
                $obj8->addGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsLogistiekeInformatie rows

                $key9 = GsLogistiekeInformatiePeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = GsLogistiekeInformatiePeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = GsLogistiekeInformatiePeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    GsLogistiekeInformatiePeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj9 (GsLogistiekeInformatie)
                $obj1->setGsLogistiekeInformatie($obj9);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelen objects pre-filled with all related objects except Leverancier.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptLeverancier(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol2 = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsLogistiekeInformatiePeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + GsLogistiekeInformatiePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsHandelsproducten rows

                $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj2 (GsHandelsproducten)
                $obj2->addGsArtikelen($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj3 (GsNamen)
                $obj3->addGsArtikelen($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key4 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsThesauriTotaalPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsThesauriTotaalPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key5 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsThesauriTotaalPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsThesauriTotaalPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj5 (GsThesauriTotaal)
                $obj5->addGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key6 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsThesauriTotaalPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsThesauriTotaalPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj6 (GsThesauriTotaal)
                $obj6->addGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsLogistiekeInformatie rows

                $key7 = GsLogistiekeInformatiePeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = GsLogistiekeInformatiePeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = GsLogistiekeInformatiePeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    GsLogistiekeInformatiePeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj7 (GsLogistiekeInformatie)
                $obj1->setGsLogistiekeInformatie($obj7);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelen objects pre-filled with all related objects except Importeur.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptImporteur(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol2 = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsLogistiekeInformatiePeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + GsLogistiekeInformatiePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsHandelsproducten rows

                $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj2 (GsHandelsproducten)
                $obj2->addGsArtikelen($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj3 (GsNamen)
                $obj3->addGsArtikelen($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key4 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsThesauriTotaalPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsThesauriTotaalPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key5 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsThesauriTotaalPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsThesauriTotaalPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj5 (GsThesauriTotaal)
                $obj5->addGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key6 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsThesauriTotaalPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsThesauriTotaalPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj6 (GsThesauriTotaal)
                $obj6->addGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsLogistiekeInformatie rows

                $key7 = GsLogistiekeInformatiePeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = GsLogistiekeInformatiePeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = GsLogistiekeInformatiePeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    GsLogistiekeInformatiePeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj7 (GsLogistiekeInformatie)
                $obj1->setGsLogistiekeInformatie($obj7);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelen objects pre-filled with all related objects except Registratiehouder.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRegistratiehouder(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol2 = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsLogistiekeInformatiePeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + GsLogistiekeInformatiePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsHandelsproducten rows

                $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj2 (GsHandelsproducten)
                $obj2->addGsArtikelen($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj3 (GsNamen)
                $obj3->addGsArtikelen($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key4 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsThesauriTotaalPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsThesauriTotaalPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key5 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsThesauriTotaalPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsThesauriTotaalPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj5 (GsThesauriTotaal)
                $obj5->addGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key6 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsThesauriTotaalPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsThesauriTotaalPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj6 (GsThesauriTotaal)
                $obj6->addGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsLogistiekeInformatie rows

                $key7 = GsLogistiekeInformatiePeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = GsLogistiekeInformatiePeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = GsLogistiekeInformatiePeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    GsLogistiekeInformatiePeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj7 (GsLogistiekeInformatie)
                $obj1->setGsLogistiekeInformatie($obj7);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelen objects pre-filled with all related objects except LandOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptLandOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol2 = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsLogistiekeInformatiePeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + GsLogistiekeInformatiePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::LEVERANCIER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::IMPORTEUR_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsHandelsproducten rows

                $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj2 (GsHandelsproducten)
                $obj2->addGsArtikelen($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj3 (GsNamen)
                $obj3->addGsArtikelen($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key4 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj4 (GsNawGegevensGstandaard)
                $obj4->addGsArtikelenRelatedByLeverancierKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key5 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj5 (GsNawGegevensGstandaard)
                $obj5->addGsArtikelenRelatedByImporteurKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key6 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj6 (GsNawGegevensGstandaard)
                $obj6->addGsArtikelenRelatedByRegistratiehouderKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsLogistiekeInformatie rows

                $key7 = GsLogistiekeInformatiePeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = GsLogistiekeInformatiePeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = GsLogistiekeInformatiePeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    GsLogistiekeInformatiePeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj7 (GsLogistiekeInformatie)
                $obj1->setGsLogistiekeInformatie($obj7);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelen objects pre-filled with all related objects except HoofdverpakkingOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptHoofdverpakkingOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol2 = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsLogistiekeInformatiePeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + GsLogistiekeInformatiePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::LEVERANCIER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::IMPORTEUR_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsHandelsproducten rows

                $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj2 (GsHandelsproducten)
                $obj2->addGsArtikelen($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj3 (GsNamen)
                $obj3->addGsArtikelen($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key4 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj4 (GsNawGegevensGstandaard)
                $obj4->addGsArtikelenRelatedByLeverancierKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key5 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj5 (GsNawGegevensGstandaard)
                $obj5->addGsArtikelenRelatedByImporteurKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key6 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj6 (GsNawGegevensGstandaard)
                $obj6->addGsArtikelenRelatedByRegistratiehouderKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsLogistiekeInformatie rows

                $key7 = GsLogistiekeInformatiePeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = GsLogistiekeInformatiePeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = GsLogistiekeInformatiePeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    GsLogistiekeInformatiePeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj7 (GsLogistiekeInformatie)
                $obj1->setGsLogistiekeInformatie($obj7);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelen objects pre-filled with all related objects except DeelverpakkingOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptDeelverpakkingOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol2 = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsLogistiekeInformatiePeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + GsLogistiekeInformatiePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::LEVERANCIER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::IMPORTEUR_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ZINUMMER, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsHandelsproducten rows

                $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj2 (GsHandelsproducten)
                $obj2->addGsArtikelen($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj3 (GsNamen)
                $obj3->addGsArtikelen($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key4 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj4 (GsNawGegevensGstandaard)
                $obj4->addGsArtikelenRelatedByLeverancierKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key5 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj5 (GsNawGegevensGstandaard)
                $obj5->addGsArtikelenRelatedByImporteurKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key6 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj6 (GsNawGegevensGstandaard)
                $obj6->addGsArtikelenRelatedByRegistratiehouderKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsLogistiekeInformatie rows

                $key7 = GsLogistiekeInformatiePeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = GsLogistiekeInformatiePeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = GsLogistiekeInformatiePeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    GsLogistiekeInformatiePeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj7 (GsLogistiekeInformatie)
                $obj1->setGsLogistiekeInformatie($obj7);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsArtikelen objects pre-filled with all related objects except LogistiekeInformatie.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsArtikelen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptLogistiekeInformatie(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);
        }

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol2 = GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsArtikelenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::ARTIKELNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::LEVERANCIER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::IMPORTEUR_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(GsArtikelenPeer::REGISTRATIEHOUDER_KODE, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_THESAURUS_NUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::LAND_VAN_HERKOMST_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsArtikelenPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsArtikelenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsArtikelenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsArtikelenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsHandelsproducten rows

                $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj2 (GsHandelsproducten)
                $obj2->addGsArtikelen($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj3 (GsNamen)
                $obj3->addGsArtikelen($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key4 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj4 (GsNawGegevensGstandaard)
                $obj4->addGsArtikelenRelatedByLeverancierKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key5 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj5 (GsNawGegevensGstandaard)
                $obj5->addGsArtikelenRelatedByImporteurKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key6 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj6 (GsNawGegevensGstandaard)
                $obj6->addGsArtikelenRelatedByRegistratiehouderKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key7 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = GsThesauriTotaalPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    GsThesauriTotaalPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj7 (GsThesauriTotaal)
                $obj7->addGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key8 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = GsThesauriTotaalPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    GsThesauriTotaalPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj8 (GsThesauriTotaal)
                $obj8->addGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key9 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = GsThesauriTotaalPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    GsThesauriTotaalPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (GsArtikelen) to the collection in $obj9 (GsThesauriTotaal)
                $obj9->addGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(GsArtikelenPeer::DATABASE_NAME)->getTable(GsArtikelenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsArtikelenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsArtikelenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsArtikelenTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return GsArtikelenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsArtikelen or Criteria object.
     *
     * @param      mixed $values Criteria or GsArtikelen object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsArtikelen object
        }


        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a GsArtikelen or Criteria object.
     *
     * @param      mixed $values Criteria or GsArtikelen object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsArtikelenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsArtikelenPeer::ZINUMMER);
            $value = $criteria->remove(GsArtikelenPeer::ZINUMMER);
            if ($value) {
                $selectCriteria->add(GsArtikelenPeer::ZINUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsArtikelenPeer::TABLE_NAME);
            }

        } else { // $values is GsArtikelen object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_artikelen table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsArtikelenPeer::TABLE_NAME, $con, GsArtikelenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsArtikelenPeer::clearInstancePool();
            GsArtikelenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsArtikelen or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsArtikelen object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsArtikelenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsArtikelen) { // it's a model object
            // invalidate the cache for this single object
            GsArtikelenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsArtikelenPeer::DATABASE_NAME);
            $criteria->add(GsArtikelenPeer::ZINUMMER, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsArtikelenPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsArtikelenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsArtikelenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsArtikelen object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsArtikelen $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsArtikelenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsArtikelenPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(GsArtikelenPeer::DATABASE_NAME, GsArtikelenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsArtikelen
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsArtikelenPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsArtikelenPeer::DATABASE_NAME);
        $criteria->add(GsArtikelenPeer::ZINUMMER, $pk);

        $v = GsArtikelenPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsArtikelen[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsArtikelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsArtikelenPeer::DATABASE_NAME);
            $criteria->add(GsArtikelenPeer::ZINUMMER, $pks, Criteria::IN);
            $objs = GsArtikelenPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsArtikelenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsArtikelenPeer::buildTableMap();

