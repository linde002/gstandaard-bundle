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
use PharmaIntelligence\GstandaardBundle\Model\GsNamenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProduct;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProductPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsPrescriptieProductTableMap;

abstract class BaseGsPrescriptieProductPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_prescriptie_product';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPrescriptieProduct';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsPrescriptieProductTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 20;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 20;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_prescriptie_product.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_prescriptie_product.mutatiekode';

    /** the column name for the prkcode field */
    const PRKCODE = 'gs_prescriptie_product.prkcode';

    /** the column name for the naamnummer_prescriptie_product field */
    const NAAMNUMMER_PRESCRIPTIE_PRODUCT = 'gs_prescriptie_product.naamnummer_prescriptie_product';

    /** the column name for the generiekeproductcode field */
    const GENERIEKEPRODUCTCODE = 'gs_prescriptie_product.generiekeproductcode';

    /** the column name for the thesnr_reden_voorschrijven_hpk_niveau field */
    const THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU = 'gs_prescriptie_product.thesnr_reden_voorschrijven_hpk_niveau';

    /** the column name for the reden_voorschrijven_hpk_niveau field */
    const REDEN_VOORSCHRIJVEN_HPK_NIVEAU = 'gs_prescriptie_product.reden_voorschrijven_hpk_niveau';

    /** the column name for the thesnr_emballagetype field */
    const THESNR_EMBALLAGETYPE = 'gs_prescriptie_product.thesnr_emballagetype';

    /** the column name for the emballagetype field */
    const EMBALLAGETYPE = 'gs_prescriptie_product.emballagetype';

    /** the column name for the thesnr_basiseenheid_product field */
    const THESNR_BASISEENHEID_PRODUCT = 'gs_prescriptie_product.thesnr_basiseenheid_product';

    /** the column name for the basiseenheid_product field */
    const BASISEENHEID_PRODUCT = 'gs_prescriptie_product.basiseenheid_product';

    /** the column name for the productgrootte_algemeen field */
    const PRODUCTGROOTTE_ALGEMEEN = 'gs_prescriptie_product.productgrootte_algemeen';

    /** the column name for the thesnr_hulpmiddel_aard field */
    const THESNR_HULPMIDDEL_AARD = 'gs_prescriptie_product.thesnr_hulpmiddel_aard';

    /** the column name for the hulpmiddel_aard field */
    const HULPMIDDEL_AARD = 'gs_prescriptie_product.hulpmiddel_aard';

    /** the column name for the hulpmiddel_aard_hoeveelheid field */
    const HULPMIDDEL_AARD_HOEVEELHEID = 'gs_prescriptie_product.hulpmiddel_aard_hoeveelheid';

    /** the column name for the meervoudig_product_jn field */
    const MEERVOUDIG_PRODUCT_JN = 'gs_prescriptie_product.meervoudig_product_jn';

    /** the column name for the thesnr_reden_hulpstof_identificerend field */
    const THESNR_REDEN_HULPSTOF_IDENTIFICEREND = 'gs_prescriptie_product.thesnr_reden_hulpstof_identificerend';

    /** the column name for the reden_hulpstof_identificerend field */
    const REDEN_HULPSTOF_IDENTIFICEREND = 'gs_prescriptie_product.reden_hulpstof_identificerend';

    /** the column name for the thesnr_verwijzing_extra_kenmerk field */
    const THESNR_VERWIJZING_EXTRA_KENMERK = 'gs_prescriptie_product.thesnr_verwijzing_extra_kenmerk';

    /** the column name for the verwijzing_extra_kenmerk field */
    const VERWIJZING_EXTRA_KENMERK = 'gs_prescriptie_product.verwijzing_extra_kenmerk';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsPrescriptieProduct objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsPrescriptieProduct[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsPrescriptieProductPeer::$fieldNames[GsPrescriptieProductPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Prkcode', 'NaamnummerPrescriptieProduct', 'Generiekeproductcode', 'ThesnrRedenVoorschrijvenHpkNiveau', 'RedenVoorschrijvenHpkNiveau', 'ThesnrEmballagetype', 'Emballagetype', 'ThesnrBasiseenheidProduct', 'BasiseenheidProduct', 'ProductgrootteAlgemeen', 'ThesnrHulpmiddelAard', 'HulpmiddelAard', 'HulpmiddelAardHoeveelheid', 'MeervoudigProductJn', 'ThesnrRedenHulpstofIdentificerend', 'RedenHulpstofIdentificerend', 'ThesnrVerwijzingExtraKenmerk', 'VerwijzingExtraKenmerk', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'prkcode', 'naamnummerPrescriptieProduct', 'generiekeproductcode', 'thesnrRedenVoorschrijvenHpkNiveau', 'redenVoorschrijvenHpkNiveau', 'thesnrEmballagetype', 'emballagetype', 'thesnrBasiseenheidProduct', 'basiseenheidProduct', 'productgrootteAlgemeen', 'thesnrHulpmiddelAard', 'hulpmiddelAard', 'hulpmiddelAardHoeveelheid', 'meervoudigProductJn', 'thesnrRedenHulpstofIdentificerend', 'redenHulpstofIdentificerend', 'thesnrVerwijzingExtraKenmerk', 'verwijzingExtraKenmerk', ),
        BasePeer::TYPE_COLNAME => array (GsPrescriptieProductPeer::BESTANDNUMMER, GsPrescriptieProductPeer::MUTATIEKODE, GsPrescriptieProductPeer::PRKCODE, GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU, GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU, GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE, GsPrescriptieProductPeer::EMBALLAGETYPE, GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT, GsPrescriptieProductPeer::BASISEENHEID_PRODUCT, GsPrescriptieProductPeer::PRODUCTGROOTTE_ALGEMEEN, GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD, GsPrescriptieProductPeer::HULPMIDDEL_AARD, GsPrescriptieProductPeer::HULPMIDDEL_AARD_HOEVEELHEID, GsPrescriptieProductPeer::MEERVOUDIG_PRODUCT_JN, GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND, GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND, GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK, GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'PRKCODE', 'NAAMNUMMER_PRESCRIPTIE_PRODUCT', 'GENERIEKEPRODUCTCODE', 'THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU', 'REDEN_VOORSCHRIJVEN_HPK_NIVEAU', 'THESNR_EMBALLAGETYPE', 'EMBALLAGETYPE', 'THESNR_BASISEENHEID_PRODUCT', 'BASISEENHEID_PRODUCT', 'PRODUCTGROOTTE_ALGEMEEN', 'THESNR_HULPMIDDEL_AARD', 'HULPMIDDEL_AARD', 'HULPMIDDEL_AARD_HOEVEELHEID', 'MEERVOUDIG_PRODUCT_JN', 'THESNR_REDEN_HULPSTOF_IDENTIFICEREND', 'REDEN_HULPSTOF_IDENTIFICEREND', 'THESNR_VERWIJZING_EXTRA_KENMERK', 'VERWIJZING_EXTRA_KENMERK', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'prkcode', 'naamnummer_prescriptie_product', 'generiekeproductcode', 'thesnr_reden_voorschrijven_hpk_niveau', 'reden_voorschrijven_hpk_niveau', 'thesnr_emballagetype', 'emballagetype', 'thesnr_basiseenheid_product', 'basiseenheid_product', 'productgrootte_algemeen', 'thesnr_hulpmiddel_aard', 'hulpmiddel_aard', 'hulpmiddel_aard_hoeveelheid', 'meervoudig_product_jn', 'thesnr_reden_hulpstof_identificerend', 'reden_hulpstof_identificerend', 'thesnr_verwijzing_extra_kenmerk', 'verwijzing_extra_kenmerk', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsPrescriptieProductPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Prkcode' => 2, 'NaamnummerPrescriptieProduct' => 3, 'Generiekeproductcode' => 4, 'ThesnrRedenVoorschrijvenHpkNiveau' => 5, 'RedenVoorschrijvenHpkNiveau' => 6, 'ThesnrEmballagetype' => 7, 'Emballagetype' => 8, 'ThesnrBasiseenheidProduct' => 9, 'BasiseenheidProduct' => 10, 'ProductgrootteAlgemeen' => 11, 'ThesnrHulpmiddelAard' => 12, 'HulpmiddelAard' => 13, 'HulpmiddelAardHoeveelheid' => 14, 'MeervoudigProductJn' => 15, 'ThesnrRedenHulpstofIdentificerend' => 16, 'RedenHulpstofIdentificerend' => 17, 'ThesnrVerwijzingExtraKenmerk' => 18, 'VerwijzingExtraKenmerk' => 19, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'prkcode' => 2, 'naamnummerPrescriptieProduct' => 3, 'generiekeproductcode' => 4, 'thesnrRedenVoorschrijvenHpkNiveau' => 5, 'redenVoorschrijvenHpkNiveau' => 6, 'thesnrEmballagetype' => 7, 'emballagetype' => 8, 'thesnrBasiseenheidProduct' => 9, 'basiseenheidProduct' => 10, 'productgrootteAlgemeen' => 11, 'thesnrHulpmiddelAard' => 12, 'hulpmiddelAard' => 13, 'hulpmiddelAardHoeveelheid' => 14, 'meervoudigProductJn' => 15, 'thesnrRedenHulpstofIdentificerend' => 16, 'redenHulpstofIdentificerend' => 17, 'thesnrVerwijzingExtraKenmerk' => 18, 'verwijzingExtraKenmerk' => 19, ),
        BasePeer::TYPE_COLNAME => array (GsPrescriptieProductPeer::BESTANDNUMMER => 0, GsPrescriptieProductPeer::MUTATIEKODE => 1, GsPrescriptieProductPeer::PRKCODE => 2, GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT => 3, GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE => 4, GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU => 5, GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU => 6, GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE => 7, GsPrescriptieProductPeer::EMBALLAGETYPE => 8, GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT => 9, GsPrescriptieProductPeer::BASISEENHEID_PRODUCT => 10, GsPrescriptieProductPeer::PRODUCTGROOTTE_ALGEMEEN => 11, GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD => 12, GsPrescriptieProductPeer::HULPMIDDEL_AARD => 13, GsPrescriptieProductPeer::HULPMIDDEL_AARD_HOEVEELHEID => 14, GsPrescriptieProductPeer::MEERVOUDIG_PRODUCT_JN => 15, GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND => 16, GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND => 17, GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK => 18, GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK => 19, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'PRKCODE' => 2, 'NAAMNUMMER_PRESCRIPTIE_PRODUCT' => 3, 'GENERIEKEPRODUCTCODE' => 4, 'THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU' => 5, 'REDEN_VOORSCHRIJVEN_HPK_NIVEAU' => 6, 'THESNR_EMBALLAGETYPE' => 7, 'EMBALLAGETYPE' => 8, 'THESNR_BASISEENHEID_PRODUCT' => 9, 'BASISEENHEID_PRODUCT' => 10, 'PRODUCTGROOTTE_ALGEMEEN' => 11, 'THESNR_HULPMIDDEL_AARD' => 12, 'HULPMIDDEL_AARD' => 13, 'HULPMIDDEL_AARD_HOEVEELHEID' => 14, 'MEERVOUDIG_PRODUCT_JN' => 15, 'THESNR_REDEN_HULPSTOF_IDENTIFICEREND' => 16, 'REDEN_HULPSTOF_IDENTIFICEREND' => 17, 'THESNR_VERWIJZING_EXTRA_KENMERK' => 18, 'VERWIJZING_EXTRA_KENMERK' => 19, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'prkcode' => 2, 'naamnummer_prescriptie_product' => 3, 'generiekeproductcode' => 4, 'thesnr_reden_voorschrijven_hpk_niveau' => 5, 'reden_voorschrijven_hpk_niveau' => 6, 'thesnr_emballagetype' => 7, 'emballagetype' => 8, 'thesnr_basiseenheid_product' => 9, 'basiseenheid_product' => 10, 'productgrootte_algemeen' => 11, 'thesnr_hulpmiddel_aard' => 12, 'hulpmiddel_aard' => 13, 'hulpmiddel_aard_hoeveelheid' => 14, 'meervoudig_product_jn' => 15, 'thesnr_reden_hulpstof_identificerend' => 16, 'reden_hulpstof_identificerend' => 17, 'thesnr_verwijzing_extra_kenmerk' => 18, 'verwijzing_extra_kenmerk' => 19, ),
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
        $toNames = GsPrescriptieProductPeer::getFieldNames($toType);
        $key = isset(GsPrescriptieProductPeer::$fieldKeys[$fromType][$name]) ? GsPrescriptieProductPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsPrescriptieProductPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsPrescriptieProductPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsPrescriptieProductPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsPrescriptieProductPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsPrescriptieProductPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsPrescriptieProductPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::PRKCODE);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::EMBALLAGETYPE);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::BASISEENHEID_PRODUCT);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::PRODUCTGROOTTE_ALGEMEEN);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::HULPMIDDEL_AARD);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::HULPMIDDEL_AARD_HOEVEELHEID);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::MEERVOUDIG_PRODUCT_JN);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK);
            $criteria->addSelectColumn(GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.prkcode');
            $criteria->addSelectColumn($alias . '.naamnummer_prescriptie_product');
            $criteria->addSelectColumn($alias . '.generiekeproductcode');
            $criteria->addSelectColumn($alias . '.thesnr_reden_voorschrijven_hpk_niveau');
            $criteria->addSelectColumn($alias . '.reden_voorschrijven_hpk_niveau');
            $criteria->addSelectColumn($alias . '.thesnr_emballagetype');
            $criteria->addSelectColumn($alias . '.emballagetype');
            $criteria->addSelectColumn($alias . '.thesnr_basiseenheid_product');
            $criteria->addSelectColumn($alias . '.basiseenheid_product');
            $criteria->addSelectColumn($alias . '.productgrootte_algemeen');
            $criteria->addSelectColumn($alias . '.thesnr_hulpmiddel_aard');
            $criteria->addSelectColumn($alias . '.hulpmiddel_aard');
            $criteria->addSelectColumn($alias . '.hulpmiddel_aard_hoeveelheid');
            $criteria->addSelectColumn($alias . '.meervoudig_product_jn');
            $criteria->addSelectColumn($alias . '.thesnr_reden_hulpstof_identificerend');
            $criteria->addSelectColumn($alias . '.reden_hulpstof_identificerend');
            $criteria->addSelectColumn($alias . '.thesnr_verwijzing_extra_kenmerk');
            $criteria->addSelectColumn($alias . '.verwijzing_extra_kenmerk');
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
        $criteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsPrescriptieProduct
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsPrescriptieProductPeer::doSelect($critcopy, $con);
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
        return GsPrescriptieProductPeer::populateObjects(GsPrescriptieProductPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

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
     * @param GsPrescriptieProduct $obj A GsPrescriptieProduct object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getPrkcode();
            } // if key === null
            GsPrescriptieProductPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsPrescriptieProduct object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsPrescriptieProduct) {
                $key = (string) $value->getPrkcode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsPrescriptieProduct object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsPrescriptieProductPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsPrescriptieProduct Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsPrescriptieProductPeer::$instances[$key])) {
                return GsPrescriptieProductPeer::$instances[$key];
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
        foreach (GsPrescriptieProductPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsPrescriptieProductPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_prescriptie_product
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
        $cls = GsPrescriptieProductPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsPrescriptieProductPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsPrescriptieProductPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsPrescriptieProduct object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsPrescriptieProductPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsPrescriptieProductPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsPrescriptieProductPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

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
        $criteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsNamenPeer::NAAMNUMMER, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RedenVoorschrijvenHpkNiveauOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRedenVoorschrijvenHpkNiveauOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Returns the number of rows matching criteria, joining the related EmballagetypeOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEmballagetypeOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::EMBALLAGETYPE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Returns the number of rows matching criteria, joining the related BasiseenheidProductOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinBasiseenheidProductOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::BASISEENHEID_PRODUCT, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Returns the number of rows matching criteria, joining the related HulpmiddelAardOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinHulpmiddelAardOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::HULPMIDDEL_AARD, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Returns the number of rows matching criteria, joining the related RedenHulpstofIdentificerendOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRedenHulpstofIdentificerendOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Returns the number of rows matching criteria, joining the related VerwijzingExtraKenmerkOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinVerwijzingExtraKenmerkOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Selects a collection of GsPrescriptieProduct objects pre-filled with their GsGeneriekeProducten objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrescriptieProduct objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsGeneriekeProducten(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);
        }

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol = GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;
        GsGeneriekeProductenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrescriptieProductPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsPrescriptieProductPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrescriptieProductPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsPrescriptieProduct) to $obj2 (GsGeneriekeProducten)
                $obj2->addGsPrescriptieProduct($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPrescriptieProduct objects pre-filled with their GsNamen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrescriptieProduct objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsNamen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);
        }

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol = GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;
        GsNamenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrescriptieProductPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsPrescriptieProductPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrescriptieProductPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsPrescriptieProduct) to $obj2 (GsNamen)
                $obj2->addGsPrescriptieProduct($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPrescriptieProduct objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrescriptieProduct objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRedenVoorschrijvenHpkNiveauOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);
        }

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol = GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrescriptieProductPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsPrescriptieProductPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrescriptieProductPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsPrescriptieProduct) to $obj2 (GsThesauriTotaal)
                $obj2->addGsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPrescriptieProduct objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrescriptieProduct objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmballagetypeOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);
        }

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol = GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::EMBALLAGETYPE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrescriptieProductPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsPrescriptieProductPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrescriptieProductPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsPrescriptieProduct) to $obj2 (GsThesauriTotaal)
                $obj2->addGsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPrescriptieProduct objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrescriptieProduct objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinBasiseenheidProductOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);
        }

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol = GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::BASISEENHEID_PRODUCT, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrescriptieProductPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsPrescriptieProductPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrescriptieProductPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsPrescriptieProduct) to $obj2 (GsThesauriTotaal)
                $obj2->addGsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPrescriptieProduct objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrescriptieProduct objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinHulpmiddelAardOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);
        }

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol = GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::HULPMIDDEL_AARD, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrescriptieProductPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsPrescriptieProductPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrescriptieProductPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsPrescriptieProduct) to $obj2 (GsThesauriTotaal)
                $obj2->addGsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPrescriptieProduct objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrescriptieProduct objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRedenHulpstofIdentificerendOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);
        }

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol = GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrescriptieProductPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsPrescriptieProductPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrescriptieProductPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsPrescriptieProduct) to $obj2 (GsThesauriTotaal)
                $obj2->addGsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPrescriptieProduct objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrescriptieProduct objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinVerwijzingExtraKenmerkOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);
        }

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol = GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrescriptieProductPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsPrescriptieProductPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrescriptieProductPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsPrescriptieProduct) to $obj2 (GsThesauriTotaal)
                $obj2->addGsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk($obj1);

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
        $criteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::EMBALLAGETYPE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::BASISEENHEID_PRODUCT, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::HULPMIDDEL_AARD, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Selects a collection of GsPrescriptieProduct objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrescriptieProduct objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);
        }

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol2 = GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::EMBALLAGETYPE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::BASISEENHEID_PRODUCT, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::HULPMIDDEL_AARD, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrescriptieProductPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsPrescriptieProductPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrescriptieProductPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj2 (GsGeneriekeProducten)
                $obj2->addGsPrescriptieProduct($obj1);
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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj3 (GsNamen)
                $obj3->addGsPrescriptieProduct($obj1);
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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau($obj1);
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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj5 (GsThesauriTotaal)
                $obj5->addGsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key6 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = GsThesauriTotaalPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsThesauriTotaalPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj6 (GsThesauriTotaal)
                $obj6->addGsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct($obj1);
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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj7 (GsThesauriTotaal)
                $obj7->addGsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard($obj1);
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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj8 (GsThesauriTotaal)
                $obj8->addGsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend($obj1);
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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj9 (GsThesauriTotaal)
                $obj9->addGsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
    public static function doCountJoinAllExceptGsGeneriekeProducten(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::EMBALLAGETYPE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::BASISEENHEID_PRODUCT, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::HULPMIDDEL_AARD, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
        $criteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::EMBALLAGETYPE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::BASISEENHEID_PRODUCT, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::HULPMIDDEL_AARD, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Returns the number of rows matching criteria, joining the related RedenVoorschrijvenHpkNiveauOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRedenVoorschrijvenHpkNiveauOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsNamenPeer::NAAMNUMMER, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related EmballagetypeOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEmballagetypeOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsNamenPeer::NAAMNUMMER, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related BasiseenheidProductOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptBasiseenheidProductOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsNamenPeer::NAAMNUMMER, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related HulpmiddelAardOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptHulpmiddelAardOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsNamenPeer::NAAMNUMMER, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related RedenHulpstofIdentificerendOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRedenHulpstofIdentificerendOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsNamenPeer::NAAMNUMMER, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related VerwijzingExtraKenmerkOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptVerwijzingExtraKenmerkOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrescriptieProductPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsNamenPeer::NAAMNUMMER, $join_behavior);

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
     * Selects a collection of GsPrescriptieProduct objects pre-filled with all related objects except GsGeneriekeProducten.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrescriptieProduct objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsGeneriekeProducten(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);
        }

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol2 = GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::EMBALLAGETYPE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::BASISEENHEID_PRODUCT, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::HULPMIDDEL_AARD, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrescriptieProductPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsPrescriptieProductPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrescriptieProductPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj2 (GsNamen)
                $obj2->addGsPrescriptieProduct($obj1);

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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj3 (GsThesauriTotaal)
                $obj3->addGsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau($obj1);

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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype($obj1);

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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj5 (GsThesauriTotaal)
                $obj5->addGsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct($obj1);

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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj6 (GsThesauriTotaal)
                $obj6->addGsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard($obj1);

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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj7 (GsThesauriTotaal)
                $obj7->addGsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend($obj1);

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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj8 (GsThesauriTotaal)
                $obj8->addGsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPrescriptieProduct objects pre-filled with all related objects except GsNamen.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrescriptieProduct objects.
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
            $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);
        }

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol2 = GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_REDEN_VOORSCHRIJVEN_HPK_NIVEAU, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::REDEN_VOORSCHRIJVEN_HPK_NIVEAU, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_EMBALLAGETYPE, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::EMBALLAGETYPE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_BASISEENHEID_PRODUCT, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::BASISEENHEID_PRODUCT, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_HULPMIDDEL_AARD, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::HULPMIDDEL_AARD, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_REDEN_HULPSTOF_IDENTIFICEREND, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::REDEN_HULPSTOF_IDENTIFICEREND, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrescriptieProductPeer::THESNR_VERWIJZING_EXTRA_KENMERK, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrescriptieProductPeer::VERWIJZING_EXTRA_KENMERK, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrescriptieProductPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsPrescriptieProductPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrescriptieProductPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj2 (GsGeneriekeProducten)
                $obj2->addGsPrescriptieProduct($obj1);

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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj3 (GsThesauriTotaal)
                $obj3->addGsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau($obj1);

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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype($obj1);

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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj5 (GsThesauriTotaal)
                $obj5->addGsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct($obj1);

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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj6 (GsThesauriTotaal)
                $obj6->addGsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard($obj1);

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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj7 (GsThesauriTotaal)
                $obj7->addGsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend($obj1);

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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj8 (GsThesauriTotaal)
                $obj8->addGsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPrescriptieProduct objects pre-filled with all related objects except RedenVoorschrijvenHpkNiveauOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrescriptieProduct objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRedenVoorschrijvenHpkNiveauOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);
        }

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol2 = GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrescriptieProductPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsPrescriptieProductPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrescriptieProductPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj2 (GsGeneriekeProducten)
                $obj2->addGsPrescriptieProduct($obj1);

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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj3 (GsNamen)
                $obj3->addGsPrescriptieProduct($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPrescriptieProduct objects pre-filled with all related objects except EmballagetypeOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrescriptieProduct objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEmballagetypeOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);
        }

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol2 = GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrescriptieProductPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsPrescriptieProductPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrescriptieProductPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj2 (GsGeneriekeProducten)
                $obj2->addGsPrescriptieProduct($obj1);

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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj3 (GsNamen)
                $obj3->addGsPrescriptieProduct($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPrescriptieProduct objects pre-filled with all related objects except BasiseenheidProductOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrescriptieProduct objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptBasiseenheidProductOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);
        }

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol2 = GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrescriptieProductPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsPrescriptieProductPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrescriptieProductPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj2 (GsGeneriekeProducten)
                $obj2->addGsPrescriptieProduct($obj1);

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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj3 (GsNamen)
                $obj3->addGsPrescriptieProduct($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPrescriptieProduct objects pre-filled with all related objects except HulpmiddelAardOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrescriptieProduct objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptHulpmiddelAardOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);
        }

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol2 = GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrescriptieProductPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsPrescriptieProductPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrescriptieProductPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj2 (GsGeneriekeProducten)
                $obj2->addGsPrescriptieProduct($obj1);

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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj3 (GsNamen)
                $obj3->addGsPrescriptieProduct($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPrescriptieProduct objects pre-filled with all related objects except RedenHulpstofIdentificerendOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrescriptieProduct objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRedenHulpstofIdentificerendOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);
        }

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol2 = GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrescriptieProductPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsPrescriptieProductPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrescriptieProductPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj2 (GsGeneriekeProducten)
                $obj2->addGsPrescriptieProduct($obj1);

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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj3 (GsNamen)
                $obj3->addGsPrescriptieProduct($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPrescriptieProduct objects pre-filled with all related objects except VerwijzingExtraKenmerkOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrescriptieProduct objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptVerwijzingExtraKenmerkOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);
        }

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol2 = GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsPrescriptieProductPeer::GENERIEKEPRODUCTCODE, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(GsPrescriptieProductPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrescriptieProductPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsPrescriptieProductPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrescriptieProductPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj2 (GsGeneriekeProducten)
                $obj2->addGsPrescriptieProduct($obj1);

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

                // Add the $obj1 (GsPrescriptieProduct) to the collection in $obj3 (GsNamen)
                $obj3->addGsPrescriptieProduct($obj1);

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
        return Propel::getDatabaseMap(GsPrescriptieProductPeer::DATABASE_NAME)->getTable(GsPrescriptieProductPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsPrescriptieProductPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsPrescriptieProductPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsPrescriptieProductTableMap());
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
        return GsPrescriptieProductPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsPrescriptieProduct or Criteria object.
     *
     * @param      mixed $values Criteria or GsPrescriptieProduct object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsPrescriptieProduct object
        }


        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsPrescriptieProduct or Criteria object.
     *
     * @param      mixed $values Criteria or GsPrescriptieProduct object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsPrescriptieProductPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsPrescriptieProductPeer::PRKCODE);
            $value = $criteria->remove(GsPrescriptieProductPeer::PRKCODE);
            if ($value) {
                $selectCriteria->add(GsPrescriptieProductPeer::PRKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsPrescriptieProductPeer::TABLE_NAME);
            }

        } else { // $values is GsPrescriptieProduct object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_prescriptie_product table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsPrescriptieProductPeer::TABLE_NAME, $con, GsPrescriptieProductPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsPrescriptieProductPeer::clearInstancePool();
            GsPrescriptieProductPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsPrescriptieProduct or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsPrescriptieProduct object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsPrescriptieProductPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsPrescriptieProduct) { // it's a model object
            // invalidate the cache for this single object
            GsPrescriptieProductPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsPrescriptieProductPeer::DATABASE_NAME);
            $criteria->add(GsPrescriptieProductPeer::PRKCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsPrescriptieProductPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsPrescriptieProductPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsPrescriptieProductPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsPrescriptieProduct object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsPrescriptieProduct $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsPrescriptieProductPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsPrescriptieProductPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsPrescriptieProductPeer::DATABASE_NAME, GsPrescriptieProductPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsPrescriptieProduct
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsPrescriptieProductPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsPrescriptieProductPeer::DATABASE_NAME);
        $criteria->add(GsPrescriptieProductPeer::PRKCODE, $pk);

        $v = GsPrescriptieProductPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsPrescriptieProduct[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsPrescriptieProductPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsPrescriptieProductPeer::DATABASE_NAME);
            $criteria->add(GsPrescriptieProductPeer::PRKCODE, $pks, Criteria::IN);
            $objs = GsPrescriptieProductPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsPrescriptieProductPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsPrescriptieProductPeer::buildTableMap();

