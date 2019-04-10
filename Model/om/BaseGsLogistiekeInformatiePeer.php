<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeInformatie;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeInformatiePeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsLogistiekeInformatieTableMap;

abstract class BaseGsLogistiekeInformatiePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_logistieke_informatie';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLogistiekeInformatie';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsLogistiekeInformatieTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 36;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 36;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_logistieke_informatie.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_logistieke_informatie.mutatiekode';

    /** the column name for the gtin field */
    const GTIN = 'gs_logistieke_informatie.gtin';

    /** the column name for the gtin_van_de_data_leverancier field */
    const GTIN_VAN_DE_DATA_LEVERANCIER = 'gs_logistieke_informatie.gtin_van_de_data_leverancier';

    /** the column name for the omschrijving_gtin field */
    const OMSCHRIJVING_GTIN = 'gs_logistieke_informatie.omschrijving_gtin';

    /** the column name for the hoogte_hoeveelheid field */
    const HOOGTE_HOEVEELHEID = 'gs_logistieke_informatie.hoogte_hoeveelheid';

    /** the column name for the hoogte_eenheid field */
    const HOOGTE_EENHEID = 'gs_logistieke_informatie.hoogte_eenheid';

    /** the column name for the breedte_hoeveelheid field */
    const BREEDTE_HOEVEELHEID = 'gs_logistieke_informatie.breedte_hoeveelheid';

    /** the column name for the breedte_eenheid field */
    const BREEDTE_EENHEID = 'gs_logistieke_informatie.breedte_eenheid';

    /** the column name for the diepte_hoeveelheid field */
    const DIEPTE_HOEVEELHEID = 'gs_logistieke_informatie.diepte_hoeveelheid';

    /** the column name for the diepte_eenheid field */
    const DIEPTE_EENHEID = 'gs_logistieke_informatie.diepte_eenheid';

    /** the column name for the bruto_gewicht_hoeveelheid field */
    const BRUTO_GEWICHT_HOEVEELHEID = 'gs_logistieke_informatie.bruto_gewicht_hoeveelheid';

    /** the column name for the bruto_gewicht_eenheid field */
    const BRUTO_GEWICHT_EENHEID = 'gs_logistieke_informatie.bruto_gewicht_eenheid';

    /** the column name for the netto_gewicht_hoeveelheid field */
    const NETTO_GEWICHT_HOEVEELHEID = 'gs_logistieke_informatie.netto_gewicht_hoeveelheid';

    /** the column name for the netto_gewicht_eenheid field */
    const NETTO_GEWICHT_EENHEID = 'gs_logistieke_informatie.netto_gewicht_eenheid';

    /** the column name for the indicatie_basiseenheid field */
    const INDICATIE_BASISEENHEID = 'gs_logistieke_informatie.indicatie_basiseenheid';

    /** the column name for the indicatie_consumenteneenheid field */
    const INDICATIE_CONSUMENTENEENHEID = 'gs_logistieke_informatie.indicatie_consumenteneenheid';

    /** the column name for the indicatie_besteleenheid field */
    const INDICATIE_BESTELEENHEID = 'gs_logistieke_informatie.indicatie_besteleenheid';

    /** the column name for the indicatie_levereenheid field */
    const INDICATIE_LEVEREENHEID = 'gs_logistieke_informatie.indicatie_levereenheid';

    /** the column name for the indicatie_factuureenheid field */
    const INDICATIE_FACTUUREENHEID = 'gs_logistieke_informatie.indicatie_factuureenheid';

    /** the column name for the startdatum_beschikbaarheid_verpakking field */
    const STARTDATUM_BESCHIKBAARHEID_VERPAKKING = 'gs_logistieke_informatie.startdatum_beschikbaarheid_verpakking';

    /** the column name for the einddatum_beschikbaarheid_verpakking field */
    const EINDDATUM_BESCHIKBAARHEID_VERPAKKING = 'gs_logistieke_informatie.einddatum_beschikbaarheid_verpakking';

    /** the column name for the stopdatum_verpakking field */
    const STOPDATUM_VERPAKKING = 'gs_logistieke_informatie.stopdatum_verpakking';

    /** the column name for the child_gtin field */
    const CHILD_GTIN = 'gs_logistieke_informatie.child_gtin';

    /** the column name for the child_gtin_hoeveelheid field */
    const CHILD_GTIN_HOEVEELHEID = 'gs_logistieke_informatie.child_gtin_hoeveelheid';

    /** the column name for the product_type field */
    const PRODUCT_TYPE = 'gs_logistieke_informatie.product_type';

    /** the column name for the lijstprijs field */
    const LIJSTPRIJS = 'gs_logistieke_informatie.lijstprijs';

    /** the column name for the retailprijs field */
    const RETAILPRIJS = 'gs_logistieke_informatie.retailprijs';

    /** the column name for the netto_inhoud_hoeveelheid field */
    const NETTO_INHOUD_HOEVEELHEID = 'gs_logistieke_informatie.netto_inhoud_hoeveelheid';

    /** the column name for the netto_inhoud_eenheid field */
    const NETTO_INHOUD_EENHEID = 'gs_logistieke_informatie.netto_inhoud_eenheid';

    /** the column name for the zindex_nummer field */
    const ZINDEX_NUMMER = 'gs_logistieke_informatie.zindex_nummer';

    /** the column name for the hoeveelheid_verpakking field */
    const HOEVEELHEID_VERPAKKING = 'gs_logistieke_informatie.hoeveelheid_verpakking';

    /** the column name for the memocode_eenheid_verpakking field */
    const MEMOCODE_EENHEID_VERPAKKING = 'gs_logistieke_informatie.memocode_eenheid_verpakking';

    /** the column name for the fabrikant_artikel_codering field */
    const FABRIKANT_ARTIKEL_CODERING = 'gs_logistieke_informatie.fabrikant_artikel_codering';

    /** the column name for the thesaurus_verwijzing_status field */
    const THESAURUS_VERWIJZING_STATUS = 'gs_logistieke_informatie.thesaurus_verwijzing_status';

    /** the column name for the status field */
    const STATUS = 'gs_logistieke_informatie.status';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsLogistiekeInformatie objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsLogistiekeInformatie[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsLogistiekeInformatiePeer::$fieldNames[GsLogistiekeInformatiePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Gtin', 'GtinVanDeDataLeverancier', 'OmschrijvingGtin', 'HoogteHoeveelheid', 'HoogteEenheid', 'BreedteHoeveelheid', 'BreedteEenheid', 'DiepteHoeveelheid', 'DiepteEenheid', 'BrutoGewichtHoeveelheid', 'BrutoGewichtEenheid', 'NettoGewichtHoeveelheid', 'NettoGewichtEenheid', 'IndicatieBasiseenheid', 'IndicatieConsumenteneenheid', 'IndicatieBesteleenheid', 'IndicatieLevereenheid', 'IndicatieFactuureenheid', 'StartdatumBeschikbaarheidVerpakking', 'EinddatumBeschikbaarheidVerpakking', 'StopdatumVerpakking', 'ChildGtin', 'ChildGtinHoeveelheid', 'ProductType', 'Lijstprijs', 'Retailprijs', 'NettoInhoudHoeveelheid', 'NettoInhoudEenheid', 'ZindexNummer', 'HoeveelheidVerpakking', 'MemocodeEenheidVerpakking', 'FabrikantArtikelCodering', 'ThesaurusVerwijzingStatus', 'Status', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'gtin', 'gtinVanDeDataLeverancier', 'omschrijvingGtin', 'hoogteHoeveelheid', 'hoogteEenheid', 'breedteHoeveelheid', 'breedteEenheid', 'diepteHoeveelheid', 'diepteEenheid', 'brutoGewichtHoeveelheid', 'brutoGewichtEenheid', 'nettoGewichtHoeveelheid', 'nettoGewichtEenheid', 'indicatieBasiseenheid', 'indicatieConsumenteneenheid', 'indicatieBesteleenheid', 'indicatieLevereenheid', 'indicatieFactuureenheid', 'startdatumBeschikbaarheidVerpakking', 'einddatumBeschikbaarheidVerpakking', 'stopdatumVerpakking', 'childGtin', 'childGtinHoeveelheid', 'productType', 'lijstprijs', 'retailprijs', 'nettoInhoudHoeveelheid', 'nettoInhoudEenheid', 'zindexNummer', 'hoeveelheidVerpakking', 'memocodeEenheidVerpakking', 'fabrikantArtikelCodering', 'thesaurusVerwijzingStatus', 'status', ),
        BasePeer::TYPE_COLNAME => array (GsLogistiekeInformatiePeer::BESTANDNUMMER, GsLogistiekeInformatiePeer::MUTATIEKODE, GsLogistiekeInformatiePeer::GTIN, GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER, GsLogistiekeInformatiePeer::OMSCHRIJVING_GTIN, GsLogistiekeInformatiePeer::HOOGTE_HOEVEELHEID, GsLogistiekeInformatiePeer::HOOGTE_EENHEID, GsLogistiekeInformatiePeer::BREEDTE_HOEVEELHEID, GsLogistiekeInformatiePeer::BREEDTE_EENHEID, GsLogistiekeInformatiePeer::DIEPTE_HOEVEELHEID, GsLogistiekeInformatiePeer::DIEPTE_EENHEID, GsLogistiekeInformatiePeer::BRUTO_GEWICHT_HOEVEELHEID, GsLogistiekeInformatiePeer::BRUTO_GEWICHT_EENHEID, GsLogistiekeInformatiePeer::NETTO_GEWICHT_HOEVEELHEID, GsLogistiekeInformatiePeer::NETTO_GEWICHT_EENHEID, GsLogistiekeInformatiePeer::INDICATIE_BASISEENHEID, GsLogistiekeInformatiePeer::INDICATIE_CONSUMENTENEENHEID, GsLogistiekeInformatiePeer::INDICATIE_BESTELEENHEID, GsLogistiekeInformatiePeer::INDICATIE_LEVEREENHEID, GsLogistiekeInformatiePeer::INDICATIE_FACTUUREENHEID, GsLogistiekeInformatiePeer::STARTDATUM_BESCHIKBAARHEID_VERPAKKING, GsLogistiekeInformatiePeer::EINDDATUM_BESCHIKBAARHEID_VERPAKKING, GsLogistiekeInformatiePeer::STOPDATUM_VERPAKKING, GsLogistiekeInformatiePeer::CHILD_GTIN, GsLogistiekeInformatiePeer::CHILD_GTIN_HOEVEELHEID, GsLogistiekeInformatiePeer::PRODUCT_TYPE, GsLogistiekeInformatiePeer::LIJSTPRIJS, GsLogistiekeInformatiePeer::RETAILPRIJS, GsLogistiekeInformatiePeer::NETTO_INHOUD_HOEVEELHEID, GsLogistiekeInformatiePeer::NETTO_INHOUD_EENHEID, GsLogistiekeInformatiePeer::ZINDEX_NUMMER, GsLogistiekeInformatiePeer::HOEVEELHEID_VERPAKKING, GsLogistiekeInformatiePeer::MEMOCODE_EENHEID_VERPAKKING, GsLogistiekeInformatiePeer::FABRIKANT_ARTIKEL_CODERING, GsLogistiekeInformatiePeer::THESAURUS_VERWIJZING_STATUS, GsLogistiekeInformatiePeer::STATUS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'GTIN', 'GTIN_VAN_DE_DATA_LEVERANCIER', 'OMSCHRIJVING_GTIN', 'HOOGTE_HOEVEELHEID', 'HOOGTE_EENHEID', 'BREEDTE_HOEVEELHEID', 'BREEDTE_EENHEID', 'DIEPTE_HOEVEELHEID', 'DIEPTE_EENHEID', 'BRUTO_GEWICHT_HOEVEELHEID', 'BRUTO_GEWICHT_EENHEID', 'NETTO_GEWICHT_HOEVEELHEID', 'NETTO_GEWICHT_EENHEID', 'INDICATIE_BASISEENHEID', 'INDICATIE_CONSUMENTENEENHEID', 'INDICATIE_BESTELEENHEID', 'INDICATIE_LEVEREENHEID', 'INDICATIE_FACTUUREENHEID', 'STARTDATUM_BESCHIKBAARHEID_VERPAKKING', 'EINDDATUM_BESCHIKBAARHEID_VERPAKKING', 'STOPDATUM_VERPAKKING', 'CHILD_GTIN', 'CHILD_GTIN_HOEVEELHEID', 'PRODUCT_TYPE', 'LIJSTPRIJS', 'RETAILPRIJS', 'NETTO_INHOUD_HOEVEELHEID', 'NETTO_INHOUD_EENHEID', 'ZINDEX_NUMMER', 'HOEVEELHEID_VERPAKKING', 'MEMOCODE_EENHEID_VERPAKKING', 'FABRIKANT_ARTIKEL_CODERING', 'THESAURUS_VERWIJZING_STATUS', 'STATUS', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'gtin', 'gtin_van_de_data_leverancier', 'omschrijving_gtin', 'hoogte_hoeveelheid', 'hoogte_eenheid', 'breedte_hoeveelheid', 'breedte_eenheid', 'diepte_hoeveelheid', 'diepte_eenheid', 'bruto_gewicht_hoeveelheid', 'bruto_gewicht_eenheid', 'netto_gewicht_hoeveelheid', 'netto_gewicht_eenheid', 'indicatie_basiseenheid', 'indicatie_consumenteneenheid', 'indicatie_besteleenheid', 'indicatie_levereenheid', 'indicatie_factuureenheid', 'startdatum_beschikbaarheid_verpakking', 'einddatum_beschikbaarheid_verpakking', 'stopdatum_verpakking', 'child_gtin', 'child_gtin_hoeveelheid', 'product_type', 'lijstprijs', 'retailprijs', 'netto_inhoud_hoeveelheid', 'netto_inhoud_eenheid', 'zindex_nummer', 'hoeveelheid_verpakking', 'memocode_eenheid_verpakking', 'fabrikant_artikel_codering', 'thesaurus_verwijzing_status', 'status', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsLogistiekeInformatiePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Gtin' => 2, 'GtinVanDeDataLeverancier' => 3, 'OmschrijvingGtin' => 4, 'HoogteHoeveelheid' => 5, 'HoogteEenheid' => 6, 'BreedteHoeveelheid' => 7, 'BreedteEenheid' => 8, 'DiepteHoeveelheid' => 9, 'DiepteEenheid' => 10, 'BrutoGewichtHoeveelheid' => 11, 'BrutoGewichtEenheid' => 12, 'NettoGewichtHoeveelheid' => 13, 'NettoGewichtEenheid' => 14, 'IndicatieBasiseenheid' => 15, 'IndicatieConsumenteneenheid' => 16, 'IndicatieBesteleenheid' => 17, 'IndicatieLevereenheid' => 18, 'IndicatieFactuureenheid' => 19, 'StartdatumBeschikbaarheidVerpakking' => 20, 'EinddatumBeschikbaarheidVerpakking' => 21, 'StopdatumVerpakking' => 22, 'ChildGtin' => 23, 'ChildGtinHoeveelheid' => 24, 'ProductType' => 25, 'Lijstprijs' => 26, 'Retailprijs' => 27, 'NettoInhoudHoeveelheid' => 28, 'NettoInhoudEenheid' => 29, 'ZindexNummer' => 30, 'HoeveelheidVerpakking' => 31, 'MemocodeEenheidVerpakking' => 32, 'FabrikantArtikelCodering' => 33, 'ThesaurusVerwijzingStatus' => 34, 'Status' => 35, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'gtin' => 2, 'gtinVanDeDataLeverancier' => 3, 'omschrijvingGtin' => 4, 'hoogteHoeveelheid' => 5, 'hoogteEenheid' => 6, 'breedteHoeveelheid' => 7, 'breedteEenheid' => 8, 'diepteHoeveelheid' => 9, 'diepteEenheid' => 10, 'brutoGewichtHoeveelheid' => 11, 'brutoGewichtEenheid' => 12, 'nettoGewichtHoeveelheid' => 13, 'nettoGewichtEenheid' => 14, 'indicatieBasiseenheid' => 15, 'indicatieConsumenteneenheid' => 16, 'indicatieBesteleenheid' => 17, 'indicatieLevereenheid' => 18, 'indicatieFactuureenheid' => 19, 'startdatumBeschikbaarheidVerpakking' => 20, 'einddatumBeschikbaarheidVerpakking' => 21, 'stopdatumVerpakking' => 22, 'childGtin' => 23, 'childGtinHoeveelheid' => 24, 'productType' => 25, 'lijstprijs' => 26, 'retailprijs' => 27, 'nettoInhoudHoeveelheid' => 28, 'nettoInhoudEenheid' => 29, 'zindexNummer' => 30, 'hoeveelheidVerpakking' => 31, 'memocodeEenheidVerpakking' => 32, 'fabrikantArtikelCodering' => 33, 'thesaurusVerwijzingStatus' => 34, 'status' => 35, ),
        BasePeer::TYPE_COLNAME => array (GsLogistiekeInformatiePeer::BESTANDNUMMER => 0, GsLogistiekeInformatiePeer::MUTATIEKODE => 1, GsLogistiekeInformatiePeer::GTIN => 2, GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER => 3, GsLogistiekeInformatiePeer::OMSCHRIJVING_GTIN => 4, GsLogistiekeInformatiePeer::HOOGTE_HOEVEELHEID => 5, GsLogistiekeInformatiePeer::HOOGTE_EENHEID => 6, GsLogistiekeInformatiePeer::BREEDTE_HOEVEELHEID => 7, GsLogistiekeInformatiePeer::BREEDTE_EENHEID => 8, GsLogistiekeInformatiePeer::DIEPTE_HOEVEELHEID => 9, GsLogistiekeInformatiePeer::DIEPTE_EENHEID => 10, GsLogistiekeInformatiePeer::BRUTO_GEWICHT_HOEVEELHEID => 11, GsLogistiekeInformatiePeer::BRUTO_GEWICHT_EENHEID => 12, GsLogistiekeInformatiePeer::NETTO_GEWICHT_HOEVEELHEID => 13, GsLogistiekeInformatiePeer::NETTO_GEWICHT_EENHEID => 14, GsLogistiekeInformatiePeer::INDICATIE_BASISEENHEID => 15, GsLogistiekeInformatiePeer::INDICATIE_CONSUMENTENEENHEID => 16, GsLogistiekeInformatiePeer::INDICATIE_BESTELEENHEID => 17, GsLogistiekeInformatiePeer::INDICATIE_LEVEREENHEID => 18, GsLogistiekeInformatiePeer::INDICATIE_FACTUUREENHEID => 19, GsLogistiekeInformatiePeer::STARTDATUM_BESCHIKBAARHEID_VERPAKKING => 20, GsLogistiekeInformatiePeer::EINDDATUM_BESCHIKBAARHEID_VERPAKKING => 21, GsLogistiekeInformatiePeer::STOPDATUM_VERPAKKING => 22, GsLogistiekeInformatiePeer::CHILD_GTIN => 23, GsLogistiekeInformatiePeer::CHILD_GTIN_HOEVEELHEID => 24, GsLogistiekeInformatiePeer::PRODUCT_TYPE => 25, GsLogistiekeInformatiePeer::LIJSTPRIJS => 26, GsLogistiekeInformatiePeer::RETAILPRIJS => 27, GsLogistiekeInformatiePeer::NETTO_INHOUD_HOEVEELHEID => 28, GsLogistiekeInformatiePeer::NETTO_INHOUD_EENHEID => 29, GsLogistiekeInformatiePeer::ZINDEX_NUMMER => 30, GsLogistiekeInformatiePeer::HOEVEELHEID_VERPAKKING => 31, GsLogistiekeInformatiePeer::MEMOCODE_EENHEID_VERPAKKING => 32, GsLogistiekeInformatiePeer::FABRIKANT_ARTIKEL_CODERING => 33, GsLogistiekeInformatiePeer::THESAURUS_VERWIJZING_STATUS => 34, GsLogistiekeInformatiePeer::STATUS => 35, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'GTIN' => 2, 'GTIN_VAN_DE_DATA_LEVERANCIER' => 3, 'OMSCHRIJVING_GTIN' => 4, 'HOOGTE_HOEVEELHEID' => 5, 'HOOGTE_EENHEID' => 6, 'BREEDTE_HOEVEELHEID' => 7, 'BREEDTE_EENHEID' => 8, 'DIEPTE_HOEVEELHEID' => 9, 'DIEPTE_EENHEID' => 10, 'BRUTO_GEWICHT_HOEVEELHEID' => 11, 'BRUTO_GEWICHT_EENHEID' => 12, 'NETTO_GEWICHT_HOEVEELHEID' => 13, 'NETTO_GEWICHT_EENHEID' => 14, 'INDICATIE_BASISEENHEID' => 15, 'INDICATIE_CONSUMENTENEENHEID' => 16, 'INDICATIE_BESTELEENHEID' => 17, 'INDICATIE_LEVEREENHEID' => 18, 'INDICATIE_FACTUUREENHEID' => 19, 'STARTDATUM_BESCHIKBAARHEID_VERPAKKING' => 20, 'EINDDATUM_BESCHIKBAARHEID_VERPAKKING' => 21, 'STOPDATUM_VERPAKKING' => 22, 'CHILD_GTIN' => 23, 'CHILD_GTIN_HOEVEELHEID' => 24, 'PRODUCT_TYPE' => 25, 'LIJSTPRIJS' => 26, 'RETAILPRIJS' => 27, 'NETTO_INHOUD_HOEVEELHEID' => 28, 'NETTO_INHOUD_EENHEID' => 29, 'ZINDEX_NUMMER' => 30, 'HOEVEELHEID_VERPAKKING' => 31, 'MEMOCODE_EENHEID_VERPAKKING' => 32, 'FABRIKANT_ARTIKEL_CODERING' => 33, 'THESAURUS_VERWIJZING_STATUS' => 34, 'STATUS' => 35, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'gtin' => 2, 'gtin_van_de_data_leverancier' => 3, 'omschrijving_gtin' => 4, 'hoogte_hoeveelheid' => 5, 'hoogte_eenheid' => 6, 'breedte_hoeveelheid' => 7, 'breedte_eenheid' => 8, 'diepte_hoeveelheid' => 9, 'diepte_eenheid' => 10, 'bruto_gewicht_hoeveelheid' => 11, 'bruto_gewicht_eenheid' => 12, 'netto_gewicht_hoeveelheid' => 13, 'netto_gewicht_eenheid' => 14, 'indicatie_basiseenheid' => 15, 'indicatie_consumenteneenheid' => 16, 'indicatie_besteleenheid' => 17, 'indicatie_levereenheid' => 18, 'indicatie_factuureenheid' => 19, 'startdatum_beschikbaarheid_verpakking' => 20, 'einddatum_beschikbaarheid_verpakking' => 21, 'stopdatum_verpakking' => 22, 'child_gtin' => 23, 'child_gtin_hoeveelheid' => 24, 'product_type' => 25, 'lijstprijs' => 26, 'retailprijs' => 27, 'netto_inhoud_hoeveelheid' => 28, 'netto_inhoud_eenheid' => 29, 'zindex_nummer' => 30, 'hoeveelheid_verpakking' => 31, 'memocode_eenheid_verpakking' => 32, 'fabrikant_artikel_codering' => 33, 'thesaurus_verwijzing_status' => 34, 'status' => 35, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
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
        $toNames = GsLogistiekeInformatiePeer::getFieldNames($toType);
        $key = isset(GsLogistiekeInformatiePeer::$fieldKeys[$fromType][$name]) ? GsLogistiekeInformatiePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsLogistiekeInformatiePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsLogistiekeInformatiePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsLogistiekeInformatiePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsLogistiekeInformatiePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsLogistiekeInformatiePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::GTIN);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::OMSCHRIJVING_GTIN);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::HOOGTE_HOEVEELHEID);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::HOOGTE_EENHEID);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::BREEDTE_HOEVEELHEID);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::BREEDTE_EENHEID);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::DIEPTE_HOEVEELHEID);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::DIEPTE_EENHEID);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::BRUTO_GEWICHT_HOEVEELHEID);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::BRUTO_GEWICHT_EENHEID);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::NETTO_GEWICHT_HOEVEELHEID);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::NETTO_GEWICHT_EENHEID);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::INDICATIE_BASISEENHEID);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::INDICATIE_CONSUMENTENEENHEID);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::INDICATIE_BESTELEENHEID);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::INDICATIE_LEVEREENHEID);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::INDICATIE_FACTUUREENHEID);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::STARTDATUM_BESCHIKBAARHEID_VERPAKKING);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::EINDDATUM_BESCHIKBAARHEID_VERPAKKING);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::STOPDATUM_VERPAKKING);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::CHILD_GTIN);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::CHILD_GTIN_HOEVEELHEID);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::PRODUCT_TYPE);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::LIJSTPRIJS);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::RETAILPRIJS);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::NETTO_INHOUD_HOEVEELHEID);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::NETTO_INHOUD_EENHEID);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::ZINDEX_NUMMER);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::HOEVEELHEID_VERPAKKING);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::MEMOCODE_EENHEID_VERPAKKING);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::FABRIKANT_ARTIKEL_CODERING);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::THESAURUS_VERWIJZING_STATUS);
            $criteria->addSelectColumn(GsLogistiekeInformatiePeer::STATUS);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.gtin');
            $criteria->addSelectColumn($alias . '.gtin_van_de_data_leverancier');
            $criteria->addSelectColumn($alias . '.omschrijving_gtin');
            $criteria->addSelectColumn($alias . '.hoogte_hoeveelheid');
            $criteria->addSelectColumn($alias . '.hoogte_eenheid');
            $criteria->addSelectColumn($alias . '.breedte_hoeveelheid');
            $criteria->addSelectColumn($alias . '.breedte_eenheid');
            $criteria->addSelectColumn($alias . '.diepte_hoeveelheid');
            $criteria->addSelectColumn($alias . '.diepte_eenheid');
            $criteria->addSelectColumn($alias . '.bruto_gewicht_hoeveelheid');
            $criteria->addSelectColumn($alias . '.bruto_gewicht_eenheid');
            $criteria->addSelectColumn($alias . '.netto_gewicht_hoeveelheid');
            $criteria->addSelectColumn($alias . '.netto_gewicht_eenheid');
            $criteria->addSelectColumn($alias . '.indicatie_basiseenheid');
            $criteria->addSelectColumn($alias . '.indicatie_consumenteneenheid');
            $criteria->addSelectColumn($alias . '.indicatie_besteleenheid');
            $criteria->addSelectColumn($alias . '.indicatie_levereenheid');
            $criteria->addSelectColumn($alias . '.indicatie_factuureenheid');
            $criteria->addSelectColumn($alias . '.startdatum_beschikbaarheid_verpakking');
            $criteria->addSelectColumn($alias . '.einddatum_beschikbaarheid_verpakking');
            $criteria->addSelectColumn($alias . '.stopdatum_verpakking');
            $criteria->addSelectColumn($alias . '.child_gtin');
            $criteria->addSelectColumn($alias . '.child_gtin_hoeveelheid');
            $criteria->addSelectColumn($alias . '.product_type');
            $criteria->addSelectColumn($alias . '.lijstprijs');
            $criteria->addSelectColumn($alias . '.retailprijs');
            $criteria->addSelectColumn($alias . '.netto_inhoud_hoeveelheid');
            $criteria->addSelectColumn($alias . '.netto_inhoud_eenheid');
            $criteria->addSelectColumn($alias . '.zindex_nummer');
            $criteria->addSelectColumn($alias . '.hoeveelheid_verpakking');
            $criteria->addSelectColumn($alias . '.memocode_eenheid_verpakking');
            $criteria->addSelectColumn($alias . '.fabrikant_artikel_codering');
            $criteria->addSelectColumn($alias . '.thesaurus_verwijzing_status');
            $criteria->addSelectColumn($alias . '.status');
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
        $criteria->setPrimaryTableName(GsLogistiekeInformatiePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLogistiekeInformatiePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsLogistiekeInformatiePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeInformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsLogistiekeInformatie
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsLogistiekeInformatiePeer::doSelect($critcopy, $con);
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
        return GsLogistiekeInformatiePeer::populateObjects(GsLogistiekeInformatiePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsLogistiekeInformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsLogistiekeInformatiePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeInformatiePeer::DATABASE_NAME);

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
     * @param GsLogistiekeInformatie $obj A GsLogistiekeInformatie object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getGtin(), (string) $obj->getGtinVanDeDataLeverancier(), (string) $obj->getChildGtin()));
            } // if key === null
            GsLogistiekeInformatiePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsLogistiekeInformatie object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsLogistiekeInformatie) {
                $key = serialize(array((string) $value->getGtin(), (string) $value->getGtinVanDeDataLeverancier(), (string) $value->getChildGtin()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsLogistiekeInformatie object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsLogistiekeInformatiePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsLogistiekeInformatie Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsLogistiekeInformatiePeer::$instances[$key])) {
                return GsLogistiekeInformatiePeer::$instances[$key];
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
        foreach (GsLogistiekeInformatiePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsLogistiekeInformatiePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_logistieke_informatie
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
        if ($row[$startcol + 2] === null && $row[$startcol + 3] === null && $row[$startcol + 23] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 23]));
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

        return array((string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 23]);
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
        $cls = GsLogistiekeInformatiePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsLogistiekeInformatiePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsLogistiekeInformatiePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsLogistiekeInformatiePeer::addInstanceToPool($obj, $key);
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
     * @return array (GsLogistiekeInformatie object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsLogistiekeInformatiePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsLogistiekeInformatiePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsLogistiekeInformatiePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsLogistiekeInformatiePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsLogistiekeInformatiePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsArtikelenRelatedByZindexNummer table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsArtikelenRelatedByZindexNummer(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsLogistiekeInformatiePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLogistiekeInformatiePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeInformatiePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeInformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsLogistiekeInformatiePeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Selects a collection of GsLogistiekeInformatie objects pre-filled with their GsArtikelen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsLogistiekeInformatie objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsArtikelenRelatedByZindexNummer(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsLogistiekeInformatiePeer::DATABASE_NAME);
        }

        GsLogistiekeInformatiePeer::addSelectColumns($criteria);
        $startcol = GsLogistiekeInformatiePeer::NUM_HYDRATE_COLUMNS;
        GsArtikelenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsLogistiekeInformatiePeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsLogistiekeInformatiePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsLogistiekeInformatiePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsLogistiekeInformatiePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsLogistiekeInformatiePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsArtikelenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsArtikelenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsArtikelenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsLogistiekeInformatie) to $obj2 (GsArtikelen)
                $obj2->addGsLogistiekeInformatieRelatedByZindexNummer($obj1);

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
        $criteria->setPrimaryTableName(GsLogistiekeInformatiePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLogistiekeInformatiePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeInformatiePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeInformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsLogistiekeInformatiePeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Selects a collection of GsLogistiekeInformatie objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsLogistiekeInformatie objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsLogistiekeInformatiePeer::DATABASE_NAME);
        }

        GsLogistiekeInformatiePeer::addSelectColumns($criteria);
        $startcol2 = GsLogistiekeInformatiePeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsLogistiekeInformatiePeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsLogistiekeInformatiePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsLogistiekeInformatiePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsLogistiekeInformatiePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsLogistiekeInformatiePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined GsArtikelen rows

            $key2 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = GsArtikelenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsArtikelenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsArtikelenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (GsLogistiekeInformatie) to the collection in $obj2 (GsArtikelen)
                $obj2->addGsLogistiekeInformatieRelatedByZindexNummer($obj1);
            } // if joined row not null

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
        return Propel::getDatabaseMap(GsLogistiekeInformatiePeer::DATABASE_NAME)->getTable(GsLogistiekeInformatiePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsLogistiekeInformatiePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsLogistiekeInformatiePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsLogistiekeInformatieTableMap());
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
        return GsLogistiekeInformatiePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsLogistiekeInformatie or Criteria object.
     *
     * @param      mixed $values Criteria or GsLogistiekeInformatie object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeInformatiePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsLogistiekeInformatie object
        }


        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeInformatiePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsLogistiekeInformatie or Criteria object.
     *
     * @param      mixed $values Criteria or GsLogistiekeInformatie object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeInformatiePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsLogistiekeInformatiePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsLogistiekeInformatiePeer::GTIN);
            $value = $criteria->remove(GsLogistiekeInformatiePeer::GTIN);
            if ($value) {
                $selectCriteria->add(GsLogistiekeInformatiePeer::GTIN, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsLogistiekeInformatiePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER);
            $value = $criteria->remove(GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER);
            if ($value) {
                $selectCriteria->add(GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsLogistiekeInformatiePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsLogistiekeInformatiePeer::CHILD_GTIN);
            $value = $criteria->remove(GsLogistiekeInformatiePeer::CHILD_GTIN);
            if ($value) {
                $selectCriteria->add(GsLogistiekeInformatiePeer::CHILD_GTIN, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsLogistiekeInformatiePeer::TABLE_NAME);
            }

        } else { // $values is GsLogistiekeInformatie object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsLogistiekeInformatiePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_logistieke_informatie table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeInformatiePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsLogistiekeInformatiePeer::TABLE_NAME, $con, GsLogistiekeInformatiePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsLogistiekeInformatiePeer::clearInstancePool();
            GsLogistiekeInformatiePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsLogistiekeInformatie or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsLogistiekeInformatie object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsLogistiekeInformatiePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsLogistiekeInformatiePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsLogistiekeInformatie) { // it's a model object
            // invalidate the cache for this single object
            GsLogistiekeInformatiePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsLogistiekeInformatiePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsLogistiekeInformatiePeer::GTIN, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(GsLogistiekeInformatiePeer::CHILD_GTIN, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsLogistiekeInformatiePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeInformatiePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsLogistiekeInformatiePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsLogistiekeInformatie object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsLogistiekeInformatie $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsLogistiekeInformatiePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsLogistiekeInformatiePeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsLogistiekeInformatiePeer::DATABASE_NAME, GsLogistiekeInformatiePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   string $gtin
     * @param   string $gtin_van_de_data_leverancier
     * @param   string $child_gtin
     * @param      PropelPDO $con
     * @return GsLogistiekeInformatie
     */
    public static function retrieveByPK($gtin, $gtin_van_de_data_leverancier, $child_gtin, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $gtin, (string) $gtin_van_de_data_leverancier, (string) $child_gtin));
         if (null !== ($obj = GsLogistiekeInformatiePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeInformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsLogistiekeInformatiePeer::DATABASE_NAME);
        $criteria->add(GsLogistiekeInformatiePeer::GTIN, $gtin);
        $criteria->add(GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER, $gtin_van_de_data_leverancier);
        $criteria->add(GsLogistiekeInformatiePeer::CHILD_GTIN, $child_gtin);
        $v = GsLogistiekeInformatiePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsLogistiekeInformatiePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsLogistiekeInformatiePeer::buildTableMap();

