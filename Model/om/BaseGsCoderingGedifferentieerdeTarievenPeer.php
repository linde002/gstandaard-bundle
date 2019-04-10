<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsCoderingGedifferentieerdeTarieven;
use PharmaIntelligence\GstandaardBundle\Model\GsCoderingGedifferentieerdeTarievenPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsCoderingGedifferentieerdeTarievenTableMap;

abstract class BaseGsCoderingGedifferentieerdeTarievenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_codering_gedifferentieerde_tarieven';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsCoderingGedifferentieerdeTarieven';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsCoderingGedifferentieerdeTarievenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 16;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 16;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_codering_gedifferentieerde_tarieven.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_codering_gedifferentieerde_tarieven.mutatiekode';

    /** the column name for the codering field */
    const CODERING = 'gs_codering_gedifferentieerde_tarieven.codering';

    /** the column name for the volledige_omschrijving field */
    const VOLLEDIGE_OMSCHRIJVING = 'gs_codering_gedifferentieerde_tarieven.volledige_omschrijving';

    /** the column name for the verkorte_omschrijving field */
    const VERKORTE_OMSCHRIJVING = 'gs_codering_gedifferentieerde_tarieven.verkorte_omschrijving';

    /** the column name for the thesnr_soort_levering field */
    const THESNR_SOORT_LEVERING = 'gs_codering_gedifferentieerde_tarieven.thesnr_soort_levering';

    /** the column name for the soort_levering field */
    const SOORT_LEVERING = 'gs_codering_gedifferentieerde_tarieven.soort_levering';

    /** the column name for the thesnr_uitgifte_soort field */
    const THESNR_UITGIFTE_SOORT = 'gs_codering_gedifferentieerde_tarieven.thesnr_uitgifte_soort';

    /** the column name for the soort_uitgifte field */
    const SOORT_UITGIFTE = 'gs_codering_gedifferentieerde_tarieven.soort_uitgifte';

    /** the column name for the thesnr_soort_bereiding field */
    const THESNR_SOORT_BEREIDING = 'gs_codering_gedifferentieerde_tarieven.thesnr_soort_bereiding';

    /** the column name for the soort_bereiding field */
    const SOORT_BEREIDING = 'gs_codering_gedifferentieerde_tarieven.soort_bereiding';

    /** the column name for the thesnr_aanbiedingsmoment field */
    const THESNR_AANBIEDINGSMOMENT = 'gs_codering_gedifferentieerde_tarieven.thesnr_aanbiedingsmoment';

    /** the column name for the aanbiedingsmoment field */
    const AANBIEDINGSMOMENT = 'gs_codering_gedifferentieerde_tarieven.aanbiedingsmoment';

    /** the column name for the wmg_tarief field */
    const WMG_TARIEF = 'gs_codering_gedifferentieerde_tarieven.wmg_tarief';

    /** the column name for the thesnr_toeslag_thuis field */
    const THESNR_TOESLAG_THUIS = 'gs_codering_gedifferentieerde_tarieven.thesnr_toeslag_thuis';

    /** the column name for the toeslag_thuis field */
    const TOESLAG_THUIS = 'gs_codering_gedifferentieerde_tarieven.toeslag_thuis';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsCoderingGedifferentieerdeTarieven objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsCoderingGedifferentieerdeTarieven[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsCoderingGedifferentieerdeTarievenPeer::$fieldNames[GsCoderingGedifferentieerdeTarievenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Codering', 'VolledigeOmschrijving', 'VerkorteOmschrijving', 'ThesnrSoortLevering', 'SoortLevering', 'ThesnrUitgifteSoort', 'SoortUitgifte', 'ThesnrSoortBereiding', 'SoortBereiding', 'ThesnrAanbiedingsmoment', 'Aanbiedingsmoment', 'WmgTarief', 'ThesnrToeslagThuis', 'ToeslagThuis', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'codering', 'volledigeOmschrijving', 'verkorteOmschrijving', 'thesnrSoortLevering', 'soortLevering', 'thesnrUitgifteSoort', 'soortUitgifte', 'thesnrSoortBereiding', 'soortBereiding', 'thesnrAanbiedingsmoment', 'aanbiedingsmoment', 'wmgTarief', 'thesnrToeslagThuis', 'toeslagThuis', ),
        BasePeer::TYPE_COLNAME => array (GsCoderingGedifferentieerdeTarievenPeer::BESTANDNUMMER, GsCoderingGedifferentieerdeTarievenPeer::MUTATIEKODE, GsCoderingGedifferentieerdeTarievenPeer::CODERING, GsCoderingGedifferentieerdeTarievenPeer::VOLLEDIGE_OMSCHRIJVING, GsCoderingGedifferentieerdeTarievenPeer::VERKORTE_OMSCHRIJVING, GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_LEVERING, GsCoderingGedifferentieerdeTarievenPeer::SOORT_LEVERING, GsCoderingGedifferentieerdeTarievenPeer::THESNR_UITGIFTE_SOORT, GsCoderingGedifferentieerdeTarievenPeer::SOORT_UITGIFTE, GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_BEREIDING, GsCoderingGedifferentieerdeTarievenPeer::SOORT_BEREIDING, GsCoderingGedifferentieerdeTarievenPeer::THESNR_AANBIEDINGSMOMENT, GsCoderingGedifferentieerdeTarievenPeer::AANBIEDINGSMOMENT, GsCoderingGedifferentieerdeTarievenPeer::WMG_TARIEF, GsCoderingGedifferentieerdeTarievenPeer::THESNR_TOESLAG_THUIS, GsCoderingGedifferentieerdeTarievenPeer::TOESLAG_THUIS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'CODERING', 'VOLLEDIGE_OMSCHRIJVING', 'VERKORTE_OMSCHRIJVING', 'THESNR_SOORT_LEVERING', 'SOORT_LEVERING', 'THESNR_UITGIFTE_SOORT', 'SOORT_UITGIFTE', 'THESNR_SOORT_BEREIDING', 'SOORT_BEREIDING', 'THESNR_AANBIEDINGSMOMENT', 'AANBIEDINGSMOMENT', 'WMG_TARIEF', 'THESNR_TOESLAG_THUIS', 'TOESLAG_THUIS', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'codering', 'volledige_omschrijving', 'verkorte_omschrijving', 'thesnr_soort_levering', 'soort_levering', 'thesnr_uitgifte_soort', 'soort_uitgifte', 'thesnr_soort_bereiding', 'soort_bereiding', 'thesnr_aanbiedingsmoment', 'aanbiedingsmoment', 'wmg_tarief', 'thesnr_toeslag_thuis', 'toeslag_thuis', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsCoderingGedifferentieerdeTarievenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Codering' => 2, 'VolledigeOmschrijving' => 3, 'VerkorteOmschrijving' => 4, 'ThesnrSoortLevering' => 5, 'SoortLevering' => 6, 'ThesnrUitgifteSoort' => 7, 'SoortUitgifte' => 8, 'ThesnrSoortBereiding' => 9, 'SoortBereiding' => 10, 'ThesnrAanbiedingsmoment' => 11, 'Aanbiedingsmoment' => 12, 'WmgTarief' => 13, 'ThesnrToeslagThuis' => 14, 'ToeslagThuis' => 15, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'codering' => 2, 'volledigeOmschrijving' => 3, 'verkorteOmschrijving' => 4, 'thesnrSoortLevering' => 5, 'soortLevering' => 6, 'thesnrUitgifteSoort' => 7, 'soortUitgifte' => 8, 'thesnrSoortBereiding' => 9, 'soortBereiding' => 10, 'thesnrAanbiedingsmoment' => 11, 'aanbiedingsmoment' => 12, 'wmgTarief' => 13, 'thesnrToeslagThuis' => 14, 'toeslagThuis' => 15, ),
        BasePeer::TYPE_COLNAME => array (GsCoderingGedifferentieerdeTarievenPeer::BESTANDNUMMER => 0, GsCoderingGedifferentieerdeTarievenPeer::MUTATIEKODE => 1, GsCoderingGedifferentieerdeTarievenPeer::CODERING => 2, GsCoderingGedifferentieerdeTarievenPeer::VOLLEDIGE_OMSCHRIJVING => 3, GsCoderingGedifferentieerdeTarievenPeer::VERKORTE_OMSCHRIJVING => 4, GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_LEVERING => 5, GsCoderingGedifferentieerdeTarievenPeer::SOORT_LEVERING => 6, GsCoderingGedifferentieerdeTarievenPeer::THESNR_UITGIFTE_SOORT => 7, GsCoderingGedifferentieerdeTarievenPeer::SOORT_UITGIFTE => 8, GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_BEREIDING => 9, GsCoderingGedifferentieerdeTarievenPeer::SOORT_BEREIDING => 10, GsCoderingGedifferentieerdeTarievenPeer::THESNR_AANBIEDINGSMOMENT => 11, GsCoderingGedifferentieerdeTarievenPeer::AANBIEDINGSMOMENT => 12, GsCoderingGedifferentieerdeTarievenPeer::WMG_TARIEF => 13, GsCoderingGedifferentieerdeTarievenPeer::THESNR_TOESLAG_THUIS => 14, GsCoderingGedifferentieerdeTarievenPeer::TOESLAG_THUIS => 15, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'CODERING' => 2, 'VOLLEDIGE_OMSCHRIJVING' => 3, 'VERKORTE_OMSCHRIJVING' => 4, 'THESNR_SOORT_LEVERING' => 5, 'SOORT_LEVERING' => 6, 'THESNR_UITGIFTE_SOORT' => 7, 'SOORT_UITGIFTE' => 8, 'THESNR_SOORT_BEREIDING' => 9, 'SOORT_BEREIDING' => 10, 'THESNR_AANBIEDINGSMOMENT' => 11, 'AANBIEDINGSMOMENT' => 12, 'WMG_TARIEF' => 13, 'THESNR_TOESLAG_THUIS' => 14, 'TOESLAG_THUIS' => 15, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'codering' => 2, 'volledige_omschrijving' => 3, 'verkorte_omschrijving' => 4, 'thesnr_soort_levering' => 5, 'soort_levering' => 6, 'thesnr_uitgifte_soort' => 7, 'soort_uitgifte' => 8, 'thesnr_soort_bereiding' => 9, 'soort_bereiding' => 10, 'thesnr_aanbiedingsmoment' => 11, 'aanbiedingsmoment' => 12, 'wmg_tarief' => 13, 'thesnr_toeslag_thuis' => 14, 'toeslag_thuis' => 15, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
        $toNames = GsCoderingGedifferentieerdeTarievenPeer::getFieldNames($toType);
        $key = isset(GsCoderingGedifferentieerdeTarievenPeer::$fieldKeys[$fromType][$name]) ? GsCoderingGedifferentieerdeTarievenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsCoderingGedifferentieerdeTarievenPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsCoderingGedifferentieerdeTarievenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsCoderingGedifferentieerdeTarievenPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsCoderingGedifferentieerdeTarievenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsCoderingGedifferentieerdeTarievenPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsCoderingGedifferentieerdeTarievenPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsCoderingGedifferentieerdeTarievenPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsCoderingGedifferentieerdeTarievenPeer::CODERING);
            $criteria->addSelectColumn(GsCoderingGedifferentieerdeTarievenPeer::VOLLEDIGE_OMSCHRIJVING);
            $criteria->addSelectColumn(GsCoderingGedifferentieerdeTarievenPeer::VERKORTE_OMSCHRIJVING);
            $criteria->addSelectColumn(GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_LEVERING);
            $criteria->addSelectColumn(GsCoderingGedifferentieerdeTarievenPeer::SOORT_LEVERING);
            $criteria->addSelectColumn(GsCoderingGedifferentieerdeTarievenPeer::THESNR_UITGIFTE_SOORT);
            $criteria->addSelectColumn(GsCoderingGedifferentieerdeTarievenPeer::SOORT_UITGIFTE);
            $criteria->addSelectColumn(GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_BEREIDING);
            $criteria->addSelectColumn(GsCoderingGedifferentieerdeTarievenPeer::SOORT_BEREIDING);
            $criteria->addSelectColumn(GsCoderingGedifferentieerdeTarievenPeer::THESNR_AANBIEDINGSMOMENT);
            $criteria->addSelectColumn(GsCoderingGedifferentieerdeTarievenPeer::AANBIEDINGSMOMENT);
            $criteria->addSelectColumn(GsCoderingGedifferentieerdeTarievenPeer::WMG_TARIEF);
            $criteria->addSelectColumn(GsCoderingGedifferentieerdeTarievenPeer::THESNR_TOESLAG_THUIS);
            $criteria->addSelectColumn(GsCoderingGedifferentieerdeTarievenPeer::TOESLAG_THUIS);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.codering');
            $criteria->addSelectColumn($alias . '.volledige_omschrijving');
            $criteria->addSelectColumn($alias . '.verkorte_omschrijving');
            $criteria->addSelectColumn($alias . '.thesnr_soort_levering');
            $criteria->addSelectColumn($alias . '.soort_levering');
            $criteria->addSelectColumn($alias . '.thesnr_uitgifte_soort');
            $criteria->addSelectColumn($alias . '.soort_uitgifte');
            $criteria->addSelectColumn($alias . '.thesnr_soort_bereiding');
            $criteria->addSelectColumn($alias . '.soort_bereiding');
            $criteria->addSelectColumn($alias . '.thesnr_aanbiedingsmoment');
            $criteria->addSelectColumn($alias . '.aanbiedingsmoment');
            $criteria->addSelectColumn($alias . '.wmg_tarief');
            $criteria->addSelectColumn($alias . '.thesnr_toeslag_thuis');
            $criteria->addSelectColumn($alias . '.toeslag_thuis');
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
        $criteria->setPrimaryTableName(GsCoderingGedifferentieerdeTarievenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsCoderingGedifferentieerdeTarievenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsCoderingGedifferentieerdeTarieven
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsCoderingGedifferentieerdeTarievenPeer::doSelect($critcopy, $con);
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
        return GsCoderingGedifferentieerdeTarievenPeer::populateObjects(GsCoderingGedifferentieerdeTarievenPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsCoderingGedifferentieerdeTarievenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME);

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
     * @param GsCoderingGedifferentieerdeTarieven $obj A GsCoderingGedifferentieerdeTarieven object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getCodering();
            } // if key === null
            GsCoderingGedifferentieerdeTarievenPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsCoderingGedifferentieerdeTarieven object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsCoderingGedifferentieerdeTarieven) {
                $key = (string) $value->getCodering();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsCoderingGedifferentieerdeTarieven object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsCoderingGedifferentieerdeTarievenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsCoderingGedifferentieerdeTarieven Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsCoderingGedifferentieerdeTarievenPeer::$instances[$key])) {
                return GsCoderingGedifferentieerdeTarievenPeer::$instances[$key];
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
        foreach (GsCoderingGedifferentieerdeTarievenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsCoderingGedifferentieerdeTarievenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_codering_gedifferentieerde_tarieven
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
        $cls = GsCoderingGedifferentieerdeTarievenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsCoderingGedifferentieerdeTarievenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsCoderingGedifferentieerdeTarievenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsCoderingGedifferentieerdeTarievenPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsCoderingGedifferentieerdeTarieven object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsCoderingGedifferentieerdeTarievenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsCoderingGedifferentieerdeTarievenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsCoderingGedifferentieerdeTarievenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsCoderingGedifferentieerdeTarievenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsCoderingGedifferentieerdeTarievenPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        return Propel::getDatabaseMap(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME)->getTable(GsCoderingGedifferentieerdeTarievenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsCoderingGedifferentieerdeTarievenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsCoderingGedifferentieerdeTarievenTableMap());
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
        return GsCoderingGedifferentieerdeTarievenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsCoderingGedifferentieerdeTarieven or Criteria object.
     *
     * @param      mixed $values Criteria or GsCoderingGedifferentieerdeTarieven object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsCoderingGedifferentieerdeTarieven object
        }


        // Set the correct dbName
        $criteria->setDbName(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsCoderingGedifferentieerdeTarieven or Criteria object.
     *
     * @param      mixed $values Criteria or GsCoderingGedifferentieerdeTarieven object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsCoderingGedifferentieerdeTarievenPeer::CODERING);
            $value = $criteria->remove(GsCoderingGedifferentieerdeTarievenPeer::CODERING);
            if ($value) {
                $selectCriteria->add(GsCoderingGedifferentieerdeTarievenPeer::CODERING, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsCoderingGedifferentieerdeTarievenPeer::TABLE_NAME);
            }

        } else { // $values is GsCoderingGedifferentieerdeTarieven object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_codering_gedifferentieerde_tarieven table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsCoderingGedifferentieerdeTarievenPeer::TABLE_NAME, $con, GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsCoderingGedifferentieerdeTarievenPeer::clearInstancePool();
            GsCoderingGedifferentieerdeTarievenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsCoderingGedifferentieerdeTarieven or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsCoderingGedifferentieerdeTarieven object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsCoderingGedifferentieerdeTarievenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsCoderingGedifferentieerdeTarieven) { // it's a model object
            // invalidate the cache for this single object
            GsCoderingGedifferentieerdeTarievenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME);
            $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::CODERING, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsCoderingGedifferentieerdeTarievenPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsCoderingGedifferentieerdeTarievenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsCoderingGedifferentieerdeTarieven object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsCoderingGedifferentieerdeTarieven $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsCoderingGedifferentieerdeTarievenPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME, GsCoderingGedifferentieerdeTarievenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsCoderingGedifferentieerdeTarieven
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsCoderingGedifferentieerdeTarievenPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME);
        $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::CODERING, $pk);

        $v = GsCoderingGedifferentieerdeTarievenPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsCoderingGedifferentieerdeTarieven[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME);
            $criteria->add(GsCoderingGedifferentieerdeTarievenPeer::CODERING, $pks, Criteria::IN);
            $objs = GsCoderingGedifferentieerdeTarievenPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsCoderingGedifferentieerdeTarievenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsCoderingGedifferentieerdeTarievenPeer::buildTableMap();

