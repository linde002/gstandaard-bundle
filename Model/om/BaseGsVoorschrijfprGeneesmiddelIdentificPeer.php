<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentific;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsVoorschrijfprGeneesmiddelIdentificTableMap;

abstract class BaseGsVoorschrijfprGeneesmiddelIdentificPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_voorschrijfpr_geneesmiddel_identific';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVoorschrijfprGeneesmiddelIdentific';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsVoorschrijfprGeneesmiddelIdentificTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 19;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 19;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_voorschrijfpr_geneesmiddel_identific.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_voorschrijfpr_geneesmiddel_identific.mutatiekode';

    /** the column name for the prkcode field */
    const PRKCODE = 'gs_voorschrijfpr_geneesmiddel_identific.prkcode';

    /** the column name for the naamstoevoeging field */
    const NAAMSTOEVOEGING = 'gs_voorschrijfpr_geneesmiddel_identific.naamstoevoeging';

    /** the column name for the generiekeproductcode field */
    const GENERIEKEPRODUCTCODE = 'gs_voorschrijfpr_geneesmiddel_identific.generiekeproductcode';

    /** the column name for the emballagetype_kode field */
    const EMBALLAGETYPE_KODE = 'gs_voorschrijfpr_geneesmiddel_identific.emballagetype_kode';

    /** the column name for the basiseenheid_product_kode field */
    const BASISEENHEID_PRODUCT_KODE = 'gs_voorschrijfpr_geneesmiddel_identific.basiseenheid_product_kode';

    /** the column name for the hpkgrootte_algemeen field */
    const HPKGROOTTE_ALGEMEEN = 'gs_voorschrijfpr_geneesmiddel_identific.hpkgrootte_algemeen';

    /** the column name for the hulpmiddel_aard_1_kode field */
    const HULPMIDDEL_AARD_1_KODE = 'gs_voorschrijfpr_geneesmiddel_identific.hulpmiddel_aard_1_kode';

    /** the column name for the hulpmiddel_hoeveelheid_1 field */
    const HULPMIDDEL_HOEVEELHEID_1 = 'gs_voorschrijfpr_geneesmiddel_identific.hulpmiddel_hoeveelheid_1';

    /** the column name for the hulpmiddel_aard_2_kode field */
    const HULPMIDDEL_AARD_2_KODE = 'gs_voorschrijfpr_geneesmiddel_identific.hulpmiddel_aard_2_kode';

    /** the column name for the hulpmiddel_hoeveelheid_2 field */
    const HULPMIDDEL_HOEVEELHEID_2 = 'gs_voorschrijfpr_geneesmiddel_identific.hulpmiddel_hoeveelheid_2';

    /** the column name for the kode_meervoudigprodukt field */
    const KODE_MEERVOUDIGPRODUKT = 'gs_voorschrijfpr_geneesmiddel_identific.kode_meervoudigprodukt';

    /** the column name for the hpkgrootte_verbandlengte field */
    const HPKGROOTTE_VERBANDLENGTE = 'gs_voorschrijfpr_geneesmiddel_identific.hpkgrootte_verbandlengte';

    /** the column name for the hpkgrootte_verbandbreedte field */
    const HPKGROOTTE_VERBANDBREEDTE = 'gs_voorschrijfpr_geneesmiddel_identific.hpkgrootte_verbandbreedte';

    /** the column name for the hpkgrootte_iud field */
    const HPKGROOTTE_IUD = 'gs_voorschrijfpr_geneesmiddel_identific.hpkgrootte_iud';

    /** the column name for the reden_hulpstof_identificerend field */
    const REDEN_HULPSTOF_IDENTIFICEREND = 'gs_voorschrijfpr_geneesmiddel_identific.reden_hulpstof_identificerend';

    /** the column name for the instant field */
    const INSTANT = 'gs_voorschrijfpr_geneesmiddel_identific.instant';

    /** the column name for the extra_kenmerk_tbv_voorschrijven field */
    const EXTRA_KENMERK_TBV_VOORSCHRIJVEN = 'gs_voorschrijfpr_geneesmiddel_identific.extra_kenmerk_tbv_voorschrijven';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsVoorschrijfprGeneesmiddelIdentific objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsVoorschrijfprGeneesmiddelIdentific[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsVoorschrijfprGeneesmiddelIdentificPeer::$fieldNames[GsVoorschrijfprGeneesmiddelIdentificPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Prkcode', 'Naamstoevoeging', 'Generiekeproductcode', 'EmballagetypeKode', 'BasiseenheidProductKode', 'HpkgrootteAlgemeen', 'HulpmiddelAard1Kode', 'HulpmiddelHoeveelheid1', 'HulpmiddelAard2Kode', 'HulpmiddelHoeveelheid2', 'KodeMeervoudigprodukt', 'HpkgrootteVerbandlengte', 'HpkgrootteVerbandbreedte', 'HpkgrootteIud', 'RedenHulpstofIdentificerend', 'Instant', 'ExtraKenmerkTbvVoorschrijven', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'prkcode', 'naamstoevoeging', 'generiekeproductcode', 'emballagetypeKode', 'basiseenheidProductKode', 'hpkgrootteAlgemeen', 'hulpmiddelAard1Kode', 'hulpmiddelHoeveelheid1', 'hulpmiddelAard2Kode', 'hulpmiddelHoeveelheid2', 'kodeMeervoudigprodukt', 'hpkgrootteVerbandlengte', 'hpkgrootteVerbandbreedte', 'hpkgrootteIud', 'redenHulpstofIdentificerend', 'instant', 'extraKenmerkTbvVoorschrijven', ),
        BasePeer::TYPE_COLNAME => array (GsVoorschrijfprGeneesmiddelIdentificPeer::BESTANDNUMMER, GsVoorschrijfprGeneesmiddelIdentificPeer::MUTATIEKODE, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, GsVoorschrijfprGeneesmiddelIdentificPeer::NAAMSTOEVOEGING, GsVoorschrijfprGeneesmiddelIdentificPeer::GENERIEKEPRODUCTCODE, GsVoorschrijfprGeneesmiddelIdentificPeer::EMBALLAGETYPE_KODE, GsVoorschrijfprGeneesmiddelIdentificPeer::BASISEENHEID_PRODUCT_KODE, GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_ALGEMEEN, GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_1_KODE, GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_1, GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_2_KODE, GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_2, GsVoorschrijfprGeneesmiddelIdentificPeer::KODE_MEERVOUDIGPRODUKT, GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDLENGTE, GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDBREEDTE, GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_IUD, GsVoorschrijfprGeneesmiddelIdentificPeer::REDEN_HULPSTOF_IDENTIFICEREND, GsVoorschrijfprGeneesmiddelIdentificPeer::INSTANT, GsVoorschrijfprGeneesmiddelIdentificPeer::EXTRA_KENMERK_TBV_VOORSCHRIJVEN, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'PRKCODE', 'NAAMSTOEVOEGING', 'GENERIEKEPRODUCTCODE', 'EMBALLAGETYPE_KODE', 'BASISEENHEID_PRODUCT_KODE', 'HPKGROOTTE_ALGEMEEN', 'HULPMIDDEL_AARD_1_KODE', 'HULPMIDDEL_HOEVEELHEID_1', 'HULPMIDDEL_AARD_2_KODE', 'HULPMIDDEL_HOEVEELHEID_2', 'KODE_MEERVOUDIGPRODUKT', 'HPKGROOTTE_VERBANDLENGTE', 'HPKGROOTTE_VERBANDBREEDTE', 'HPKGROOTTE_IUD', 'REDEN_HULPSTOF_IDENTIFICEREND', 'INSTANT', 'EXTRA_KENMERK_TBV_VOORSCHRIJVEN', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'prkcode', 'naamstoevoeging', 'generiekeproductcode', 'emballagetype_kode', 'basiseenheid_product_kode', 'hpkgrootte_algemeen', 'hulpmiddel_aard_1_kode', 'hulpmiddel_hoeveelheid_1', 'hulpmiddel_aard_2_kode', 'hulpmiddel_hoeveelheid_2', 'kode_meervoudigprodukt', 'hpkgrootte_verbandlengte', 'hpkgrootte_verbandbreedte', 'hpkgrootte_iud', 'reden_hulpstof_identificerend', 'instant', 'extra_kenmerk_tbv_voorschrijven', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsVoorschrijfprGeneesmiddelIdentificPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Prkcode' => 2, 'Naamstoevoeging' => 3, 'Generiekeproductcode' => 4, 'EmballagetypeKode' => 5, 'BasiseenheidProductKode' => 6, 'HpkgrootteAlgemeen' => 7, 'HulpmiddelAard1Kode' => 8, 'HulpmiddelHoeveelheid1' => 9, 'HulpmiddelAard2Kode' => 10, 'HulpmiddelHoeveelheid2' => 11, 'KodeMeervoudigprodukt' => 12, 'HpkgrootteVerbandlengte' => 13, 'HpkgrootteVerbandbreedte' => 14, 'HpkgrootteIud' => 15, 'RedenHulpstofIdentificerend' => 16, 'Instant' => 17, 'ExtraKenmerkTbvVoorschrijven' => 18, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'prkcode' => 2, 'naamstoevoeging' => 3, 'generiekeproductcode' => 4, 'emballagetypeKode' => 5, 'basiseenheidProductKode' => 6, 'hpkgrootteAlgemeen' => 7, 'hulpmiddelAard1Kode' => 8, 'hulpmiddelHoeveelheid1' => 9, 'hulpmiddelAard2Kode' => 10, 'hulpmiddelHoeveelheid2' => 11, 'kodeMeervoudigprodukt' => 12, 'hpkgrootteVerbandlengte' => 13, 'hpkgrootteVerbandbreedte' => 14, 'hpkgrootteIud' => 15, 'redenHulpstofIdentificerend' => 16, 'instant' => 17, 'extraKenmerkTbvVoorschrijven' => 18, ),
        BasePeer::TYPE_COLNAME => array (GsVoorschrijfprGeneesmiddelIdentificPeer::BESTANDNUMMER => 0, GsVoorschrijfprGeneesmiddelIdentificPeer::MUTATIEKODE => 1, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE => 2, GsVoorschrijfprGeneesmiddelIdentificPeer::NAAMSTOEVOEGING => 3, GsVoorschrijfprGeneesmiddelIdentificPeer::GENERIEKEPRODUCTCODE => 4, GsVoorschrijfprGeneesmiddelIdentificPeer::EMBALLAGETYPE_KODE => 5, GsVoorschrijfprGeneesmiddelIdentificPeer::BASISEENHEID_PRODUCT_KODE => 6, GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_ALGEMEEN => 7, GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_1_KODE => 8, GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_1 => 9, GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_2_KODE => 10, GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_2 => 11, GsVoorschrijfprGeneesmiddelIdentificPeer::KODE_MEERVOUDIGPRODUKT => 12, GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDLENGTE => 13, GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDBREEDTE => 14, GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_IUD => 15, GsVoorschrijfprGeneesmiddelIdentificPeer::REDEN_HULPSTOF_IDENTIFICEREND => 16, GsVoorschrijfprGeneesmiddelIdentificPeer::INSTANT => 17, GsVoorschrijfprGeneesmiddelIdentificPeer::EXTRA_KENMERK_TBV_VOORSCHRIJVEN => 18, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'PRKCODE' => 2, 'NAAMSTOEVOEGING' => 3, 'GENERIEKEPRODUCTCODE' => 4, 'EMBALLAGETYPE_KODE' => 5, 'BASISEENHEID_PRODUCT_KODE' => 6, 'HPKGROOTTE_ALGEMEEN' => 7, 'HULPMIDDEL_AARD_1_KODE' => 8, 'HULPMIDDEL_HOEVEELHEID_1' => 9, 'HULPMIDDEL_AARD_2_KODE' => 10, 'HULPMIDDEL_HOEVEELHEID_2' => 11, 'KODE_MEERVOUDIGPRODUKT' => 12, 'HPKGROOTTE_VERBANDLENGTE' => 13, 'HPKGROOTTE_VERBANDBREEDTE' => 14, 'HPKGROOTTE_IUD' => 15, 'REDEN_HULPSTOF_IDENTIFICEREND' => 16, 'INSTANT' => 17, 'EXTRA_KENMERK_TBV_VOORSCHRIJVEN' => 18, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'prkcode' => 2, 'naamstoevoeging' => 3, 'generiekeproductcode' => 4, 'emballagetype_kode' => 5, 'basiseenheid_product_kode' => 6, 'hpkgrootte_algemeen' => 7, 'hulpmiddel_aard_1_kode' => 8, 'hulpmiddel_hoeveelheid_1' => 9, 'hulpmiddel_aard_2_kode' => 10, 'hulpmiddel_hoeveelheid_2' => 11, 'kode_meervoudigprodukt' => 12, 'hpkgrootte_verbandlengte' => 13, 'hpkgrootte_verbandbreedte' => 14, 'hpkgrootte_iud' => 15, 'reden_hulpstof_identificerend' => 16, 'instant' => 17, 'extra_kenmerk_tbv_voorschrijven' => 18, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
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
        $toNames = GsVoorschrijfprGeneesmiddelIdentificPeer::getFieldNames($toType);
        $key = isset(GsVoorschrijfprGeneesmiddelIdentificPeer::$fieldKeys[$fromType][$name]) ? GsVoorschrijfprGeneesmiddelIdentificPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsVoorschrijfprGeneesmiddelIdentificPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsVoorschrijfprGeneesmiddelIdentificPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsVoorschrijfprGeneesmiddelIdentificPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsVoorschrijfprGeneesmiddelIdentificPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsVoorschrijfprGeneesmiddelIdentificPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE);
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::NAAMSTOEVOEGING);
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::GENERIEKEPRODUCTCODE);
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::EMBALLAGETYPE_KODE);
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::BASISEENHEID_PRODUCT_KODE);
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_ALGEMEEN);
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_1_KODE);
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_1);
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_AARD_2_KODE);
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::HULPMIDDEL_HOEVEELHEID_2);
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::KODE_MEERVOUDIGPRODUKT);
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDLENGTE);
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_VERBANDBREEDTE);
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::HPKGROOTTE_IUD);
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::REDEN_HULPSTOF_IDENTIFICEREND);
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::INSTANT);
            $criteria->addSelectColumn(GsVoorschrijfprGeneesmiddelIdentificPeer::EXTRA_KENMERK_TBV_VOORSCHRIJVEN);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.prkcode');
            $criteria->addSelectColumn($alias . '.naamstoevoeging');
            $criteria->addSelectColumn($alias . '.generiekeproductcode');
            $criteria->addSelectColumn($alias . '.emballagetype_kode');
            $criteria->addSelectColumn($alias . '.basiseenheid_product_kode');
            $criteria->addSelectColumn($alias . '.hpkgrootte_algemeen');
            $criteria->addSelectColumn($alias . '.hulpmiddel_aard_1_kode');
            $criteria->addSelectColumn($alias . '.hulpmiddel_hoeveelheid_1');
            $criteria->addSelectColumn($alias . '.hulpmiddel_aard_2_kode');
            $criteria->addSelectColumn($alias . '.hulpmiddel_hoeveelheid_2');
            $criteria->addSelectColumn($alias . '.kode_meervoudigprodukt');
            $criteria->addSelectColumn($alias . '.hpkgrootte_verbandlengte');
            $criteria->addSelectColumn($alias . '.hpkgrootte_verbandbreedte');
            $criteria->addSelectColumn($alias . '.hpkgrootte_iud');
            $criteria->addSelectColumn($alias . '.reden_hulpstof_identificerend');
            $criteria->addSelectColumn($alias . '.instant');
            $criteria->addSelectColumn($alias . '.extra_kenmerk_tbv_voorschrijven');
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
        $criteria->setPrimaryTableName(GsVoorschrijfprGeneesmiddelIdentificPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsVoorschrijfprGeneesmiddelIdentificPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsVoorschrijfprGeneesmiddelIdentific
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsVoorschrijfprGeneesmiddelIdentificPeer::doSelect($critcopy, $con);
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
        return GsVoorschrijfprGeneesmiddelIdentificPeer::populateObjects(GsVoorschrijfprGeneesmiddelIdentificPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsVoorschrijfprGeneesmiddelIdentificPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME);

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
     * @param GsVoorschrijfprGeneesmiddelIdentific $obj A GsVoorschrijfprGeneesmiddelIdentific object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getPrkcode();
            } // if key === null
            GsVoorschrijfprGeneesmiddelIdentificPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsVoorschrijfprGeneesmiddelIdentific object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsVoorschrijfprGeneesmiddelIdentific) {
                $key = (string) $value->getPrkcode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsVoorschrijfprGeneesmiddelIdentific object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsVoorschrijfprGeneesmiddelIdentificPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsVoorschrijfprGeneesmiddelIdentific Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsVoorschrijfprGeneesmiddelIdentificPeer::$instances[$key])) {
                return GsVoorschrijfprGeneesmiddelIdentificPeer::$instances[$key];
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
        foreach (GsVoorschrijfprGeneesmiddelIdentificPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsVoorschrijfprGeneesmiddelIdentificPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_voorschrijfpr_geneesmiddel_identific
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
        $cls = GsVoorschrijfprGeneesmiddelIdentificPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsVoorschrijfprGeneesmiddelIdentificPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsVoorschrijfprGeneesmiddelIdentificPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsVoorschrijfprGeneesmiddelIdentificPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsVoorschrijfprGeneesmiddelIdentific object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsVoorschrijfprGeneesmiddelIdentificPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsVoorschrijfprGeneesmiddelIdentificPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsVoorschrijfprGeneesmiddelIdentificPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsVoorschrijfprGeneesmiddelIdentificPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsVoorschrijfprGeneesmiddelIdentificPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsGeneriekeProducten table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsGeneriekeProducten(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsVoorschrijfprGeneesmiddelIdentificPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsVoorschrijfprGeneesmiddelIdentificPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsVoorschrijfprGeneesmiddelIdentificPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

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
     * Selects a collection of GsVoorschrijfprGeneesmiddelIdentific objects pre-filled with their GsGeneriekeProducten objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsVoorschrijfprGeneesmiddelIdentific objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsGeneriekeProducten(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME);
        }

        GsVoorschrijfprGeneesmiddelIdentificPeer::addSelectColumns($criteria);
        $startcol = GsVoorschrijfprGeneesmiddelIdentificPeer::NUM_HYDRATE_COLUMNS;
        GsGeneriekeProductenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsVoorschrijfprGeneesmiddelIdentificPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsVoorschrijfprGeneesmiddelIdentificPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsVoorschrijfprGeneesmiddelIdentificPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsVoorschrijfprGeneesmiddelIdentificPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsVoorschrijfprGeneesmiddelIdentificPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsGeneriekeProductenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsGeneriekeProductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsGeneriekeProductenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsVoorschrijfprGeneesmiddelIdentific) to $obj2 (GsGeneriekeProducten)
                $obj2->addGsVoorschrijfprGeneesmiddelIdentific($obj1);

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
        $criteria->setPrimaryTableName(GsVoorschrijfprGeneesmiddelIdentificPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsVoorschrijfprGeneesmiddelIdentificPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsVoorschrijfprGeneesmiddelIdentificPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

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
     * Selects a collection of GsVoorschrijfprGeneesmiddelIdentific objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsVoorschrijfprGeneesmiddelIdentific objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME);
        }

        GsVoorschrijfprGeneesmiddelIdentificPeer::addSelectColumns($criteria);
        $startcol2 = GsVoorschrijfprGeneesmiddelIdentificPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsVoorschrijfprGeneesmiddelIdentificPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsVoorschrijfprGeneesmiddelIdentificPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsVoorschrijfprGeneesmiddelIdentificPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsVoorschrijfprGeneesmiddelIdentificPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsVoorschrijfprGeneesmiddelIdentificPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined GsGeneriekeProducten rows

            $key2 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = GsGeneriekeProductenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsGeneriekeProductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsGeneriekeProductenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (GsVoorschrijfprGeneesmiddelIdentific) to the collection in $obj2 (GsGeneriekeProducten)
                $obj2->addGsVoorschrijfprGeneesmiddelIdentific($obj1);
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
        return Propel::getDatabaseMap(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME)->getTable(GsVoorschrijfprGeneesmiddelIdentificPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsVoorschrijfprGeneesmiddelIdentificPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsVoorschrijfprGeneesmiddelIdentificTableMap());
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
        return GsVoorschrijfprGeneesmiddelIdentificPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsVoorschrijfprGeneesmiddelIdentific or Criteria object.
     *
     * @param      mixed $values Criteria or GsVoorschrijfprGeneesmiddelIdentific object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsVoorschrijfprGeneesmiddelIdentific object
        }


        // Set the correct dbName
        $criteria->setDbName(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsVoorschrijfprGeneesmiddelIdentific or Criteria object.
     *
     * @param      mixed $values Criteria or GsVoorschrijfprGeneesmiddelIdentific object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE);
            $value = $criteria->remove(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE);
            if ($value) {
                $selectCriteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsVoorschrijfprGeneesmiddelIdentificPeer::TABLE_NAME);
            }

        } else { // $values is GsVoorschrijfprGeneesmiddelIdentific object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_voorschrijfpr_geneesmiddel_identific table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsVoorschrijfprGeneesmiddelIdentificPeer::TABLE_NAME, $con, GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsVoorschrijfprGeneesmiddelIdentificPeer::clearInstancePool();
            GsVoorschrijfprGeneesmiddelIdentificPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsVoorschrijfprGeneesmiddelIdentific or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsVoorschrijfprGeneesmiddelIdentific object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsVoorschrijfprGeneesmiddelIdentificPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsVoorschrijfprGeneesmiddelIdentific) { // it's a model object
            // invalidate the cache for this single object
            GsVoorschrijfprGeneesmiddelIdentificPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME);
            $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsVoorschrijfprGeneesmiddelIdentificPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsVoorschrijfprGeneesmiddelIdentificPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsVoorschrijfprGeneesmiddelIdentific object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsVoorschrijfprGeneesmiddelIdentific $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsVoorschrijfprGeneesmiddelIdentificPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME, GsVoorschrijfprGeneesmiddelIdentificPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsVoorschrijfprGeneesmiddelIdentific
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsVoorschrijfprGeneesmiddelIdentificPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME);
        $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $pk);

        $v = GsVoorschrijfprGeneesmiddelIdentificPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsVoorschrijfprGeneesmiddelIdentific[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsVoorschrijfprGeneesmiddelIdentificPeer::DATABASE_NAME);
            $criteria->add(GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $pks, Criteria::IN);
            $objs = GsVoorschrijfprGeneesmiddelIdentificPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsVoorschrijfprGeneesmiddelIdentificPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsVoorschrijfprGeneesmiddelIdentificPeer::buildTableMap();

