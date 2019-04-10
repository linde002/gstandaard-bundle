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
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatie;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatiePeer;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsLogistiekeVerpakkingsinformatieTableMap;

abstract class BaseGsLogistiekeVerpakkingsinformatiePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_logistieke_verpakkingsinformatie';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLogistiekeVerpakkingsinformatie';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsLogistiekeVerpakkingsinformatieTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 20;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 20;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_logistieke_verpakkingsinformatie.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_logistieke_verpakkingsinformatie.mutatiekode';

    /** the column name for the gln field */
    const GLN = 'gs_logistieke_verpakkingsinformatie.gln';

    /** the column name for the gtin field */
    const GTIN = 'gs_logistieke_verpakkingsinformatie.gtin';

    /** the column name for the zindex_nummer field */
    const ZINDEX_NUMMER = 'gs_logistieke_verpakkingsinformatie.zindex_nummer';

    /** the column name for the thesaurus_soorten_verpakkingen field */
    const THESAURUS_SOORTEN_VERPAKKINGEN = 'gs_logistieke_verpakkingsinformatie.thesaurus_soorten_verpakkingen';

    /** the column name for the thesaurusitem_soorten_verpakkingen field */
    const THESAURUSITEM_SOORTEN_VERPAKKINGEN = 'gs_logistieke_verpakkingsinformatie.thesaurusitem_soorten_verpakkingen';

    /** the column name for the naam_op_verpakking field */
    const NAAM_OP_VERPAKKING = 'gs_logistieke_verpakkingsinformatie.naam_op_verpakking';

    /** the column name for the onderscheidend_kenmerk field */
    const ONDERSCHEIDEND_KENMERK = 'gs_logistieke_verpakkingsinformatie.onderscheidend_kenmerk';

    /** the column name for the startdatum_beschikbaarheid_verpakking field */
    const STARTDATUM_BESCHIKBAARHEID_VERPAKKING = 'gs_logistieke_verpakkingsinformatie.startdatum_beschikbaarheid_verpakking';

    /** the column name for the einddatum_beschikbaarheid_verpakking field */
    const EINDDATUM_BESCHIKBAARHEID_VERPAKKING = 'gs_logistieke_verpakkingsinformatie.einddatum_beschikbaarheid_verpakking';

    /** the column name for the gtin_van_het_verpakt_item field */
    const GTIN_VAN_HET_VERPAKT_ITEM = 'gs_logistieke_verpakkingsinformatie.gtin_van_het_verpakt_item';

    /** the column name for the aantal_van_het_verpakt_item field */
    const AANTAL_VAN_HET_VERPAKT_ITEM = 'gs_logistieke_verpakkingsinformatie.aantal_van_het_verpakt_item';

    /** the column name for the thesaurus_met_items_van_eenheden field */
    const THESAURUS_MET_ITEMS_VAN_EENHEDEN = 'gs_logistieke_verpakkingsinformatie.thesaurus_met_items_van_eenheden';

    /** the column name for the hoogte_van_verpakking field */
    const HOOGTE_VAN_VERPAKKING = 'gs_logistieke_verpakkingsinformatie.hoogte_van_verpakking';

    /** the column name for the thesaurusitem_van_eenheid_hoogte field */
    const THESAURUSITEM_VAN_EENHEID_HOOGTE = 'gs_logistieke_verpakkingsinformatie.thesaurusitem_van_eenheid_hoogte';

    /** the column name for the breedte_van_verpakking field */
    const BREEDTE_VAN_VERPAKKING = 'gs_logistieke_verpakkingsinformatie.breedte_van_verpakking';

    /** the column name for the thesaurusitem_van_eenheid_breedte field */
    const THESAURUSITEM_VAN_EENHEID_BREEDTE = 'gs_logistieke_verpakkingsinformatie.thesaurusitem_van_eenheid_breedte';

    /** the column name for the diepte_van_verpakking field */
    const DIEPTE_VAN_VERPAKKING = 'gs_logistieke_verpakkingsinformatie.diepte_van_verpakking';

    /** the column name for the thesaurusitem_van_eenheid_diepte field */
    const THESAURUSITEM_VAN_EENHEID_DIEPTE = 'gs_logistieke_verpakkingsinformatie.thesaurusitem_van_eenheid_diepte';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsLogistiekeVerpakkingsinformatie objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsLogistiekeVerpakkingsinformatie[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsLogistiekeVerpakkingsinformatiePeer::$fieldNames[GsLogistiekeVerpakkingsinformatiePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Gln', 'Gtin', 'ZindexNummer', 'ThesaurusSoortenVerpakkingen', 'ThesaurusitemSoortenVerpakkingen', 'NaamOpVerpakking', 'OnderscheidendKenmerk', 'StartdatumBeschikbaarheidVerpakking', 'EinddatumBeschikbaarheidVerpakking', 'GtinVanHetVerpaktItem', 'AantalVanHetVerpaktItem', 'ThesaurusMetItemsVanEenheden', 'HoogteVanVerpakking', 'ThesaurusitemVanEenheidHoogte', 'BreedteVanVerpakking', 'ThesaurusitemVanEenheidBreedte', 'DiepteVanVerpakking', 'ThesaurusitemVanEenheidDiepte', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'gln', 'gtin', 'zindexNummer', 'thesaurusSoortenVerpakkingen', 'thesaurusitemSoortenVerpakkingen', 'naamOpVerpakking', 'onderscheidendKenmerk', 'startdatumBeschikbaarheidVerpakking', 'einddatumBeschikbaarheidVerpakking', 'gtinVanHetVerpaktItem', 'aantalVanHetVerpaktItem', 'thesaurusMetItemsVanEenheden', 'hoogteVanVerpakking', 'thesaurusitemVanEenheidHoogte', 'breedteVanVerpakking', 'thesaurusitemVanEenheidBreedte', 'diepteVanVerpakking', 'thesaurusitemVanEenheidDiepte', ),
        BasePeer::TYPE_COLNAME => array (GsLogistiekeVerpakkingsinformatiePeer::BESTANDNUMMER, GsLogistiekeVerpakkingsinformatiePeer::MUTATIEKODE, GsLogistiekeVerpakkingsinformatiePeer::GLN, GsLogistiekeVerpakkingsinformatiePeer::GTIN, GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_SOORTEN_VERPAKKINGEN, GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_SOORTEN_VERPAKKINGEN, GsLogistiekeVerpakkingsinformatiePeer::NAAM_OP_VERPAKKING, GsLogistiekeVerpakkingsinformatiePeer::ONDERSCHEIDEND_KENMERK, GsLogistiekeVerpakkingsinformatiePeer::STARTDATUM_BESCHIKBAARHEID_VERPAKKING, GsLogistiekeVerpakkingsinformatiePeer::EINDDATUM_BESCHIKBAARHEID_VERPAKKING, GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM, GsLogistiekeVerpakkingsinformatiePeer::AANTAL_VAN_HET_VERPAKT_ITEM, GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsLogistiekeVerpakkingsinformatiePeer::HOOGTE_VAN_VERPAKKING, GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_HOOGTE, GsLogistiekeVerpakkingsinformatiePeer::BREEDTE_VAN_VERPAKKING, GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_BREEDTE, GsLogistiekeVerpakkingsinformatiePeer::DIEPTE_VAN_VERPAKKING, GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_DIEPTE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'GLN', 'GTIN', 'ZINDEX_NUMMER', 'THESAURUS_SOORTEN_VERPAKKINGEN', 'THESAURUSITEM_SOORTEN_VERPAKKINGEN', 'NAAM_OP_VERPAKKING', 'ONDERSCHEIDEND_KENMERK', 'STARTDATUM_BESCHIKBAARHEID_VERPAKKING', 'EINDDATUM_BESCHIKBAARHEID_VERPAKKING', 'GTIN_VAN_HET_VERPAKT_ITEM', 'AANTAL_VAN_HET_VERPAKT_ITEM', 'THESAURUS_MET_ITEMS_VAN_EENHEDEN', 'HOOGTE_VAN_VERPAKKING', 'THESAURUSITEM_VAN_EENHEID_HOOGTE', 'BREEDTE_VAN_VERPAKKING', 'THESAURUSITEM_VAN_EENHEID_BREEDTE', 'DIEPTE_VAN_VERPAKKING', 'THESAURUSITEM_VAN_EENHEID_DIEPTE', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'gln', 'gtin', 'zindex_nummer', 'thesaurus_soorten_verpakkingen', 'thesaurusitem_soorten_verpakkingen', 'naam_op_verpakking', 'onderscheidend_kenmerk', 'startdatum_beschikbaarheid_verpakking', 'einddatum_beschikbaarheid_verpakking', 'gtin_van_het_verpakt_item', 'aantal_van_het_verpakt_item', 'thesaurus_met_items_van_eenheden', 'hoogte_van_verpakking', 'thesaurusitem_van_eenheid_hoogte', 'breedte_van_verpakking', 'thesaurusitem_van_eenheid_breedte', 'diepte_van_verpakking', 'thesaurusitem_van_eenheid_diepte', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsLogistiekeVerpakkingsinformatiePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Gln' => 2, 'Gtin' => 3, 'ZindexNummer' => 4, 'ThesaurusSoortenVerpakkingen' => 5, 'ThesaurusitemSoortenVerpakkingen' => 6, 'NaamOpVerpakking' => 7, 'OnderscheidendKenmerk' => 8, 'StartdatumBeschikbaarheidVerpakking' => 9, 'EinddatumBeschikbaarheidVerpakking' => 10, 'GtinVanHetVerpaktItem' => 11, 'AantalVanHetVerpaktItem' => 12, 'ThesaurusMetItemsVanEenheden' => 13, 'HoogteVanVerpakking' => 14, 'ThesaurusitemVanEenheidHoogte' => 15, 'BreedteVanVerpakking' => 16, 'ThesaurusitemVanEenheidBreedte' => 17, 'DiepteVanVerpakking' => 18, 'ThesaurusitemVanEenheidDiepte' => 19, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'gln' => 2, 'gtin' => 3, 'zindexNummer' => 4, 'thesaurusSoortenVerpakkingen' => 5, 'thesaurusitemSoortenVerpakkingen' => 6, 'naamOpVerpakking' => 7, 'onderscheidendKenmerk' => 8, 'startdatumBeschikbaarheidVerpakking' => 9, 'einddatumBeschikbaarheidVerpakking' => 10, 'gtinVanHetVerpaktItem' => 11, 'aantalVanHetVerpaktItem' => 12, 'thesaurusMetItemsVanEenheden' => 13, 'hoogteVanVerpakking' => 14, 'thesaurusitemVanEenheidHoogte' => 15, 'breedteVanVerpakking' => 16, 'thesaurusitemVanEenheidBreedte' => 17, 'diepteVanVerpakking' => 18, 'thesaurusitemVanEenheidDiepte' => 19, ),
        BasePeer::TYPE_COLNAME => array (GsLogistiekeVerpakkingsinformatiePeer::BESTANDNUMMER => 0, GsLogistiekeVerpakkingsinformatiePeer::MUTATIEKODE => 1, GsLogistiekeVerpakkingsinformatiePeer::GLN => 2, GsLogistiekeVerpakkingsinformatiePeer::GTIN => 3, GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER => 4, GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_SOORTEN_VERPAKKINGEN => 5, GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_SOORTEN_VERPAKKINGEN => 6, GsLogistiekeVerpakkingsinformatiePeer::NAAM_OP_VERPAKKING => 7, GsLogistiekeVerpakkingsinformatiePeer::ONDERSCHEIDEND_KENMERK => 8, GsLogistiekeVerpakkingsinformatiePeer::STARTDATUM_BESCHIKBAARHEID_VERPAKKING => 9, GsLogistiekeVerpakkingsinformatiePeer::EINDDATUM_BESCHIKBAARHEID_VERPAKKING => 10, GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM => 11, GsLogistiekeVerpakkingsinformatiePeer::AANTAL_VAN_HET_VERPAKT_ITEM => 12, GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN => 13, GsLogistiekeVerpakkingsinformatiePeer::HOOGTE_VAN_VERPAKKING => 14, GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_HOOGTE => 15, GsLogistiekeVerpakkingsinformatiePeer::BREEDTE_VAN_VERPAKKING => 16, GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_BREEDTE => 17, GsLogistiekeVerpakkingsinformatiePeer::DIEPTE_VAN_VERPAKKING => 18, GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_DIEPTE => 19, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'GLN' => 2, 'GTIN' => 3, 'ZINDEX_NUMMER' => 4, 'THESAURUS_SOORTEN_VERPAKKINGEN' => 5, 'THESAURUSITEM_SOORTEN_VERPAKKINGEN' => 6, 'NAAM_OP_VERPAKKING' => 7, 'ONDERSCHEIDEND_KENMERK' => 8, 'STARTDATUM_BESCHIKBAARHEID_VERPAKKING' => 9, 'EINDDATUM_BESCHIKBAARHEID_VERPAKKING' => 10, 'GTIN_VAN_HET_VERPAKT_ITEM' => 11, 'AANTAL_VAN_HET_VERPAKT_ITEM' => 12, 'THESAURUS_MET_ITEMS_VAN_EENHEDEN' => 13, 'HOOGTE_VAN_VERPAKKING' => 14, 'THESAURUSITEM_VAN_EENHEID_HOOGTE' => 15, 'BREEDTE_VAN_VERPAKKING' => 16, 'THESAURUSITEM_VAN_EENHEID_BREEDTE' => 17, 'DIEPTE_VAN_VERPAKKING' => 18, 'THESAURUSITEM_VAN_EENHEID_DIEPTE' => 19, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'gln' => 2, 'gtin' => 3, 'zindex_nummer' => 4, 'thesaurus_soorten_verpakkingen' => 5, 'thesaurusitem_soorten_verpakkingen' => 6, 'naam_op_verpakking' => 7, 'onderscheidend_kenmerk' => 8, 'startdatum_beschikbaarheid_verpakking' => 9, 'einddatum_beschikbaarheid_verpakking' => 10, 'gtin_van_het_verpakt_item' => 11, 'aantal_van_het_verpakt_item' => 12, 'thesaurus_met_items_van_eenheden' => 13, 'hoogte_van_verpakking' => 14, 'thesaurusitem_van_eenheid_hoogte' => 15, 'breedte_van_verpakking' => 16, 'thesaurusitem_van_eenheid_breedte' => 17, 'diepte_van_verpakking' => 18, 'thesaurusitem_van_eenheid_diepte' => 19, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
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
        $toNames = GsLogistiekeVerpakkingsinformatiePeer::getFieldNames($toType);
        $key = isset(GsLogistiekeVerpakkingsinformatiePeer::$fieldKeys[$fromType][$name]) ? GsLogistiekeVerpakkingsinformatiePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsLogistiekeVerpakkingsinformatiePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsLogistiekeVerpakkingsinformatiePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsLogistiekeVerpakkingsinformatiePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsLogistiekeVerpakkingsinformatiePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::GLN);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::GTIN);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_SOORTEN_VERPAKKINGEN);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_SOORTEN_VERPAKKINGEN);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::NAAM_OP_VERPAKKING);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::ONDERSCHEIDEND_KENMERK);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::STARTDATUM_BESCHIKBAARHEID_VERPAKKING);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::EINDDATUM_BESCHIKBAARHEID_VERPAKKING);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::AANTAL_VAN_HET_VERPAKT_ITEM);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::HOOGTE_VAN_VERPAKKING);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_HOOGTE);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::BREEDTE_VAN_VERPAKKING);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_BREEDTE);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::DIEPTE_VAN_VERPAKKING);
            $criteria->addSelectColumn(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_DIEPTE);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.gln');
            $criteria->addSelectColumn($alias . '.gtin');
            $criteria->addSelectColumn($alias . '.zindex_nummer');
            $criteria->addSelectColumn($alias . '.thesaurus_soorten_verpakkingen');
            $criteria->addSelectColumn($alias . '.thesaurusitem_soorten_verpakkingen');
            $criteria->addSelectColumn($alias . '.naam_op_verpakking');
            $criteria->addSelectColumn($alias . '.onderscheidend_kenmerk');
            $criteria->addSelectColumn($alias . '.startdatum_beschikbaarheid_verpakking');
            $criteria->addSelectColumn($alias . '.einddatum_beschikbaarheid_verpakking');
            $criteria->addSelectColumn($alias . '.gtin_van_het_verpakt_item');
            $criteria->addSelectColumn($alias . '.aantal_van_het_verpakt_item');
            $criteria->addSelectColumn($alias . '.thesaurus_met_items_van_eenheden');
            $criteria->addSelectColumn($alias . '.hoogte_van_verpakking');
            $criteria->addSelectColumn($alias . '.thesaurusitem_van_eenheid_hoogte');
            $criteria->addSelectColumn($alias . '.breedte_van_verpakking');
            $criteria->addSelectColumn($alias . '.thesaurusitem_van_eenheid_breedte');
            $criteria->addSelectColumn($alias . '.diepte_van_verpakking');
            $criteria->addSelectColumn($alias . '.thesaurusitem_van_eenheid_diepte');
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
        $criteria->setPrimaryTableName(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsLogistiekeVerpakkingsinformatie
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsLogistiekeVerpakkingsinformatiePeer::doSelect($critcopy, $con);
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
        return GsLogistiekeVerpakkingsinformatiePeer::populateObjects(GsLogistiekeVerpakkingsinformatiePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);

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
     * @param GsLogistiekeVerpakkingsinformatie $obj A GsLogistiekeVerpakkingsinformatie object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getGln(), (string) $obj->getGtin(), (string) $obj->getGtinVanHetVerpaktItem()));
            } // if key === null
            GsLogistiekeVerpakkingsinformatiePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsLogistiekeVerpakkingsinformatie object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsLogistiekeVerpakkingsinformatie) {
                $key = serialize(array((string) $value->getGln(), (string) $value->getGtin(), (string) $value->getGtinVanHetVerpaktItem()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsLogistiekeVerpakkingsinformatie object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsLogistiekeVerpakkingsinformatiePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsLogistiekeVerpakkingsinformatie Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsLogistiekeVerpakkingsinformatiePeer::$instances[$key])) {
                return GsLogistiekeVerpakkingsinformatiePeer::$instances[$key];
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
        foreach (GsLogistiekeVerpakkingsinformatiePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsLogistiekeVerpakkingsinformatiePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_logistieke_verpakkingsinformatie
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
        if ($row[$startcol + 2] === null && $row[$startcol + 3] === null && $row[$startcol + 11] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 11]));
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

        return array((string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 11]);
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
        $cls = GsLogistiekeVerpakkingsinformatiePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsLogistiekeVerpakkingsinformatiePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsLogistiekeVerpakkingsinformatiePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsLogistiekeVerpakkingsinformatiePeer::addInstanceToPool($obj, $key);
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
     * @return array (GsLogistiekeVerpakkingsinformatie object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsLogistiekeVerpakkingsinformatiePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsLogistiekeVerpakkingsinformatiePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsLogistiekeVerpakkingsinformatiePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsLogistiekeVerpakkingsinformatiePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsLogistiekeVerpakkingsinformatiePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related SoortenVerpakkingOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSoortenVerpakkingOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_SOORTEN_VERPAKKINGEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_SOORTEN_VERPAKKINGEN, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Returns the number of rows matching criteria, joining the related HoogteEenheidOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinHoogteEenheidOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_HOOGTE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Returns the number of rows matching criteria, joining the related DiepteEenheidOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinDiepteEenheidOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_DIEPTE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Returns the number of rows matching criteria, joining the related BreedteEenheidOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinBreedteEenheidOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_BREEDTE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Returns the number of rows matching criteria, joining the related GsArtikelen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsArtikelen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Selects a collection of GsLogistiekeVerpakkingsinformatie objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsLogistiekeVerpakkingsinformatie objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSoortenVerpakkingOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);
        }

        GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        $startcol = GsLogistiekeVerpakkingsinformatiePeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_SOORTEN_VERPAKKINGEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_SOORTEN_VERPAKKINGEN, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsLogistiekeVerpakkingsinformatiePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsLogistiekeVerpakkingsinformatiePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsLogistiekeVerpakkingsinformatiePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsLogistiekeVerpakkingsinformatiePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsLogistiekeVerpakkingsinformatie) to $obj2 (GsThesauriTotaal)
                $obj2->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsLogistiekeVerpakkingsinformatie objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsLogistiekeVerpakkingsinformatie objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinHoogteEenheidOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);
        }

        GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        $startcol = GsLogistiekeVerpakkingsinformatiePeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_HOOGTE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsLogistiekeVerpakkingsinformatiePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsLogistiekeVerpakkingsinformatiePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsLogistiekeVerpakkingsinformatiePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsLogistiekeVerpakkingsinformatiePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsLogistiekeVerpakkingsinformatie) to $obj2 (GsThesauriTotaal)
                $obj2->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsLogistiekeVerpakkingsinformatie objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsLogistiekeVerpakkingsinformatie objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinDiepteEenheidOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);
        }

        GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        $startcol = GsLogistiekeVerpakkingsinformatiePeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_DIEPTE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsLogistiekeVerpakkingsinformatiePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsLogistiekeVerpakkingsinformatiePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsLogistiekeVerpakkingsinformatiePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsLogistiekeVerpakkingsinformatiePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsLogistiekeVerpakkingsinformatie) to $obj2 (GsThesauriTotaal)
                $obj2->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsLogistiekeVerpakkingsinformatie objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsLogistiekeVerpakkingsinformatie objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinBreedteEenheidOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);
        }

        GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        $startcol = GsLogistiekeVerpakkingsinformatiePeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_BREEDTE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsLogistiekeVerpakkingsinformatiePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsLogistiekeVerpakkingsinformatiePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsLogistiekeVerpakkingsinformatiePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsLogistiekeVerpakkingsinformatiePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsLogistiekeVerpakkingsinformatie) to $obj2 (GsThesauriTotaal)
                $obj2->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsLogistiekeVerpakkingsinformatie objects pre-filled with their GsArtikelen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsLogistiekeVerpakkingsinformatie objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsArtikelen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);
        }

        GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        $startcol = GsLogistiekeVerpakkingsinformatiePeer::NUM_HYDRATE_COLUMNS;
        GsArtikelenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsLogistiekeVerpakkingsinformatiePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsLogistiekeVerpakkingsinformatiePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsLogistiekeVerpakkingsinformatiePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsLogistiekeVerpakkingsinformatiePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsLogistiekeVerpakkingsinformatie) to $obj2 (GsArtikelen)
                $obj2->addGsLogistiekeVerpakkingsinformatie($obj1);

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
        $criteria->setPrimaryTableName(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_SOORTEN_VERPAKKINGEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_SOORTEN_VERPAKKINGEN, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_HOOGTE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_DIEPTE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_BREEDTE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Selects a collection of GsLogistiekeVerpakkingsinformatie objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsLogistiekeVerpakkingsinformatie objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);
        }

        GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        $startcol2 = GsLogistiekeVerpakkingsinformatiePeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_SOORTEN_VERPAKKINGEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_SOORTEN_VERPAKKINGEN, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_HOOGTE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_DIEPTE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_BREEDTE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsLogistiekeVerpakkingsinformatiePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsLogistiekeVerpakkingsinformatiePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsLogistiekeVerpakkingsinformatiePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsLogistiekeVerpakkingsinformatiePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined GsThesauriTotaal rows

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (GsLogistiekeVerpakkingsinformatie) to the collection in $obj2 (GsThesauriTotaal)
                $obj2->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key3 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = GsThesauriTotaalPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsThesauriTotaalPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (GsLogistiekeVerpakkingsinformatie) to the collection in $obj3 (GsThesauriTotaal)
                $obj3->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key4 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = GsThesauriTotaalPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsThesauriTotaalPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (GsLogistiekeVerpakkingsinformatie) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key5 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = GsThesauriTotaalPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsThesauriTotaalPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (GsLogistiekeVerpakkingsinformatie) to the collection in $obj5 (GsThesauriTotaal)
                $obj5->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($obj1);
            } // if joined row not null

            // Add objects for joined GsArtikelen rows

            $key6 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = GsArtikelenPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = GsArtikelenPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsArtikelenPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (GsLogistiekeVerpakkingsinformatie) to the collection in $obj6 (GsArtikelen)
                $obj6->addGsLogistiekeVerpakkingsinformatie($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related SoortenVerpakkingOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptSoortenVerpakkingOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related HoogteEenheidOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptHoogteEenheidOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related DiepteEenheidOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptDiepteEenheidOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related BreedteEenheidOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptBreedteEenheidOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsArtikelen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsArtikelen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_SOORTEN_VERPAKKINGEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_SOORTEN_VERPAKKINGEN, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_HOOGTE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_DIEPTE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_BREEDTE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Selects a collection of GsLogistiekeVerpakkingsinformatie objects pre-filled with all related objects except SoortenVerpakkingOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsLogistiekeVerpakkingsinformatie objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptSoortenVerpakkingOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);
        }

        GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        $startcol2 = GsLogistiekeVerpakkingsinformatiePeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsLogistiekeVerpakkingsinformatiePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsLogistiekeVerpakkingsinformatiePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsLogistiekeVerpakkingsinformatiePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsLogistiekeVerpakkingsinformatiePeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (GsLogistiekeVerpakkingsinformatie) to the collection in $obj2 (GsArtikelen)
                $obj2->addGsLogistiekeVerpakkingsinformatie($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsLogistiekeVerpakkingsinformatie objects pre-filled with all related objects except HoogteEenheidOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsLogistiekeVerpakkingsinformatie objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptHoogteEenheidOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);
        }

        GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        $startcol2 = GsLogistiekeVerpakkingsinformatiePeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsLogistiekeVerpakkingsinformatiePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsLogistiekeVerpakkingsinformatiePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsLogistiekeVerpakkingsinformatiePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsLogistiekeVerpakkingsinformatiePeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (GsLogistiekeVerpakkingsinformatie) to the collection in $obj2 (GsArtikelen)
                $obj2->addGsLogistiekeVerpakkingsinformatie($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsLogistiekeVerpakkingsinformatie objects pre-filled with all related objects except DiepteEenheidOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsLogistiekeVerpakkingsinformatie objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptDiepteEenheidOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);
        }

        GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        $startcol2 = GsLogistiekeVerpakkingsinformatiePeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsLogistiekeVerpakkingsinformatiePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsLogistiekeVerpakkingsinformatiePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsLogistiekeVerpakkingsinformatiePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsLogistiekeVerpakkingsinformatiePeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (GsLogistiekeVerpakkingsinformatie) to the collection in $obj2 (GsArtikelen)
                $obj2->addGsLogistiekeVerpakkingsinformatie($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsLogistiekeVerpakkingsinformatie objects pre-filled with all related objects except BreedteEenheidOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsLogistiekeVerpakkingsinformatie objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptBreedteEenheidOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);
        }

        GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        $startcol2 = GsLogistiekeVerpakkingsinformatiePeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsLogistiekeVerpakkingsinformatiePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsLogistiekeVerpakkingsinformatiePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsLogistiekeVerpakkingsinformatiePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsLogistiekeVerpakkingsinformatiePeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (GsLogistiekeVerpakkingsinformatie) to the collection in $obj2 (GsArtikelen)
                $obj2->addGsLogistiekeVerpakkingsinformatie($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsLogistiekeVerpakkingsinformatie objects pre-filled with all related objects except GsArtikelen.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsLogistiekeVerpakkingsinformatie objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsArtikelen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);
        }

        GsLogistiekeVerpakkingsinformatiePeer::addSelectColumns($criteria);
        $startcol2 = GsLogistiekeVerpakkingsinformatiePeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_SOORTEN_VERPAKKINGEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_SOORTEN_VERPAKKINGEN, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_HOOGTE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_DIEPTE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_BREEDTE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsLogistiekeVerpakkingsinformatiePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsLogistiekeVerpakkingsinformatiePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsLogistiekeVerpakkingsinformatiePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsLogistiekeVerpakkingsinformatiePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsThesauriTotaal rows

                $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsLogistiekeVerpakkingsinformatie) to the collection in $obj2 (GsThesauriTotaal)
                $obj2->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key3 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsThesauriTotaalPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsThesauriTotaalPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsLogistiekeVerpakkingsinformatie) to the collection in $obj3 (GsThesauriTotaal)
                $obj3->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($obj1);

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

                // Add the $obj1 (GsLogistiekeVerpakkingsinformatie) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($obj1);

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

                // Add the $obj1 (GsLogistiekeVerpakkingsinformatie) to the collection in $obj5 (GsThesauriTotaal)
                $obj5->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($obj1);

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
        return Propel::getDatabaseMap(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME)->getTable(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsLogistiekeVerpakkingsinformatieTableMap());
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
        return GsLogistiekeVerpakkingsinformatiePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsLogistiekeVerpakkingsinformatie or Criteria object.
     *
     * @param      mixed $values Criteria or GsLogistiekeVerpakkingsinformatie object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsLogistiekeVerpakkingsinformatie object
        }


        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsLogistiekeVerpakkingsinformatie or Criteria object.
     *
     * @param      mixed $values Criteria or GsLogistiekeVerpakkingsinformatie object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsLogistiekeVerpakkingsinformatiePeer::GLN);
            $value = $criteria->remove(GsLogistiekeVerpakkingsinformatiePeer::GLN);
            if ($value) {
                $selectCriteria->add(GsLogistiekeVerpakkingsinformatiePeer::GLN, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsLogistiekeVerpakkingsinformatiePeer::GTIN);
            $value = $criteria->remove(GsLogistiekeVerpakkingsinformatiePeer::GTIN);
            if ($value) {
                $selectCriteria->add(GsLogistiekeVerpakkingsinformatiePeer::GTIN, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM);
            $value = $criteria->remove(GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM);
            if ($value) {
                $selectCriteria->add(GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME);
            }

        } else { // $values is GsLogistiekeVerpakkingsinformatie object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_logistieke_verpakkingsinformatie table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME, $con, GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsLogistiekeVerpakkingsinformatiePeer::clearInstancePool();
            GsLogistiekeVerpakkingsinformatiePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsLogistiekeVerpakkingsinformatie or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsLogistiekeVerpakkingsinformatie object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsLogistiekeVerpakkingsinformatiePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsLogistiekeVerpakkingsinformatie) { // it's a model object
            // invalidate the cache for this single object
            GsLogistiekeVerpakkingsinformatiePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsLogistiekeVerpakkingsinformatiePeer::GLN, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsLogistiekeVerpakkingsinformatiePeer::GTIN, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsLogistiekeVerpakkingsinformatiePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsLogistiekeVerpakkingsinformatiePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsLogistiekeVerpakkingsinformatie object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsLogistiekeVerpakkingsinformatie $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, GsLogistiekeVerpakkingsinformatiePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   string $gln
     * @param   string $gtin
     * @param   string $gtin_van_het_verpakt_item
     * @param      PropelPDO $con
     * @return GsLogistiekeVerpakkingsinformatie
     */
    public static function retrieveByPK($gln, $gtin, $gtin_van_het_verpakt_item, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $gln, (string) $gtin, (string) $gtin_van_het_verpakt_item));
         if (null !== ($obj = GsLogistiekeVerpakkingsinformatiePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME);
        $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::GLN, $gln);
        $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::GTIN, $gtin);
        $criteria->add(GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM, $gtin_van_het_verpakt_item);
        $v = GsLogistiekeVerpakkingsinformatiePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsLogistiekeVerpakkingsinformatiePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsLogistiekeVerpakkingsinformatiePeer::buildTableMap();

