<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsKoppelingZrsMetExterneCodes;
use PharmaIntelligence\GstandaardBundle\Model\GsKoppelingZrsMetExterneCodesPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsKoppelingZrsMetExterneCodesTableMap;

abstract class BaseGsKoppelingZrsMetExterneCodesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_koppeling_zrs_met_externe_codes';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsKoppelingZrsMetExterneCodes';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsKoppelingZrsMetExterneCodesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_koppeling_zrs_met_externe_codes.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_koppeling_zrs_met_externe_codes.mutatiekode';

    /** the column name for the type_externe_zrs_code field */
    const TYPE_EXTERNE_ZRS_CODE = 'gs_koppeling_zrs_met_externe_codes.type_externe_zrs_code';

    /** the column name for the externe_code_van_het_type_exttyp field */
    const EXTERNE_CODE_VAN_HET_TYPE_EXTTYP = 'gs_koppeling_zrs_met_externe_codes.externe_code_van_het_type_exttyp';

    /** the column name for the soort_code field */
    const SOORT_CODE = 'gs_koppeling_zrs_met_externe_codes.soort_code';

    /** the column name for the zorg_registratie_binnen_aaa field */
    const ZORG_REGISTRATIE_BINNEN_AAA = 'gs_koppeling_zrs_met_externe_codes.zorg_registratie_binnen_aaa';

    /** the column name for the zorg_registratie_binnen_aaa1 field */
    const ZORG_REGISTRATIE_BINNEN_AAA1 = 'gs_koppeling_zrs_met_externe_codes.zorg_registratie_binnen_aaa1';

    /** the column name for the zorg_registratie_nummer_van_de_actieregel field */
    const ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL = 'gs_koppeling_zrs_met_externe_codes.zorg_registratie_nummer_van_de_actieregel';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsKoppelingZrsMetExterneCodes objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsKoppelingZrsMetExterneCodes[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsKoppelingZrsMetExterneCodesPeer::$fieldNames[GsKoppelingZrsMetExterneCodesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'TypeExterneZrsCode', 'ExterneCodeVanHetTypeExttyp', 'SoortCode', 'ZorgRegistratieBinnenAaa', 'ZorgRegistratieBinnenAaa1', 'ZorgRegistratieNummerVanDeActieregel', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'typeExterneZrsCode', 'externeCodeVanHetTypeExttyp', 'soortCode', 'zorgRegistratieBinnenAaa', 'zorgRegistratieBinnenAaa1', 'zorgRegistratieNummerVanDeActieregel', ),
        BasePeer::TYPE_COLNAME => array (GsKoppelingZrsMetExterneCodesPeer::BESTANDNUMMER, GsKoppelingZrsMetExterneCodesPeer::MUTATIEKODE, GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE, GsKoppelingZrsMetExterneCodesPeer::EXTERNE_CODE_VAN_HET_TYPE_EXTTYP, GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE, GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA, GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1, GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'TYPE_EXTERNE_ZRS_CODE', 'EXTERNE_CODE_VAN_HET_TYPE_EXTTYP', 'SOORT_CODE', 'ZORG_REGISTRATIE_BINNEN_AAA', 'ZORG_REGISTRATIE_BINNEN_AAA1', 'ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'type_externe_zrs_code', 'externe_code_van_het_type_exttyp', 'soort_code', 'zorg_registratie_binnen_aaa', 'zorg_registratie_binnen_aaa1', 'zorg_registratie_nummer_van_de_actieregel', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsKoppelingZrsMetExterneCodesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'TypeExterneZrsCode' => 2, 'ExterneCodeVanHetTypeExttyp' => 3, 'SoortCode' => 4, 'ZorgRegistratieBinnenAaa' => 5, 'ZorgRegistratieBinnenAaa1' => 6, 'ZorgRegistratieNummerVanDeActieregel' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'typeExterneZrsCode' => 2, 'externeCodeVanHetTypeExttyp' => 3, 'soortCode' => 4, 'zorgRegistratieBinnenAaa' => 5, 'zorgRegistratieBinnenAaa1' => 6, 'zorgRegistratieNummerVanDeActieregel' => 7, ),
        BasePeer::TYPE_COLNAME => array (GsKoppelingZrsMetExterneCodesPeer::BESTANDNUMMER => 0, GsKoppelingZrsMetExterneCodesPeer::MUTATIEKODE => 1, GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE => 2, GsKoppelingZrsMetExterneCodesPeer::EXTERNE_CODE_VAN_HET_TYPE_EXTTYP => 3, GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE => 4, GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA => 5, GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1 => 6, GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'TYPE_EXTERNE_ZRS_CODE' => 2, 'EXTERNE_CODE_VAN_HET_TYPE_EXTTYP' => 3, 'SOORT_CODE' => 4, 'ZORG_REGISTRATIE_BINNEN_AAA' => 5, 'ZORG_REGISTRATIE_BINNEN_AAA1' => 6, 'ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'type_externe_zrs_code' => 2, 'externe_code_van_het_type_exttyp' => 3, 'soort_code' => 4, 'zorg_registratie_binnen_aaa' => 5, 'zorg_registratie_binnen_aaa1' => 6, 'zorg_registratie_nummer_van_de_actieregel' => 7, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
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
        $toNames = GsKoppelingZrsMetExterneCodesPeer::getFieldNames($toType);
        $key = isset(GsKoppelingZrsMetExterneCodesPeer::$fieldKeys[$fromType][$name]) ? GsKoppelingZrsMetExterneCodesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsKoppelingZrsMetExterneCodesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsKoppelingZrsMetExterneCodesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsKoppelingZrsMetExterneCodesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsKoppelingZrsMetExterneCodesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsKoppelingZrsMetExterneCodesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsKoppelingZrsMetExterneCodesPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsKoppelingZrsMetExterneCodesPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE);
            $criteria->addSelectColumn(GsKoppelingZrsMetExterneCodesPeer::EXTERNE_CODE_VAN_HET_TYPE_EXTTYP);
            $criteria->addSelectColumn(GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE);
            $criteria->addSelectColumn(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA);
            $criteria->addSelectColumn(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1);
            $criteria->addSelectColumn(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.type_externe_zrs_code');
            $criteria->addSelectColumn($alias . '.externe_code_van_het_type_exttyp');
            $criteria->addSelectColumn($alias . '.soort_code');
            $criteria->addSelectColumn($alias . '.zorg_registratie_binnen_aaa');
            $criteria->addSelectColumn($alias . '.zorg_registratie_binnen_aaa1');
            $criteria->addSelectColumn($alias . '.zorg_registratie_nummer_van_de_actieregel');
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
        $criteria->setPrimaryTableName(GsKoppelingZrsMetExterneCodesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsKoppelingZrsMetExterneCodesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsKoppelingZrsMetExterneCodes
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsKoppelingZrsMetExterneCodesPeer::doSelect($critcopy, $con);
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
        return GsKoppelingZrsMetExterneCodesPeer::populateObjects(GsKoppelingZrsMetExterneCodesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsKoppelingZrsMetExterneCodesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME);

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
     * @param GsKoppelingZrsMetExterneCodes $obj A GsKoppelingZrsMetExterneCodes object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getTypeExterneZrsCode(), (string) $obj->getExterneCodeVanHetTypeExttyp(), (string) $obj->getSoortCode(), (string) $obj->getZorgRegistratieBinnenAaa(), (string) $obj->getZorgRegistratieBinnenAaa1(), (string) $obj->getZorgRegistratieNummerVanDeActieregel()));
            } // if key === null
            GsKoppelingZrsMetExterneCodesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsKoppelingZrsMetExterneCodes object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsKoppelingZrsMetExterneCodes) {
                $key = serialize(array((string) $value->getTypeExterneZrsCode(), (string) $value->getExterneCodeVanHetTypeExttyp(), (string) $value->getSoortCode(), (string) $value->getZorgRegistratieBinnenAaa(), (string) $value->getZorgRegistratieBinnenAaa1(), (string) $value->getZorgRegistratieNummerVanDeActieregel()));
            } elseif (is_array($value) && count($value) === 6) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4], (string) $value[5]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsKoppelingZrsMetExterneCodes object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsKoppelingZrsMetExterneCodesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsKoppelingZrsMetExterneCodes Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsKoppelingZrsMetExterneCodesPeer::$instances[$key])) {
                return GsKoppelingZrsMetExterneCodesPeer::$instances[$key];
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
        foreach (GsKoppelingZrsMetExterneCodesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsKoppelingZrsMetExterneCodesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_koppeling_zrs_met_externe_codes
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
        if ($row[$startcol + 2] === null && $row[$startcol + 3] === null && $row[$startcol + 4] === null && $row[$startcol + 5] === null && $row[$startcol + 6] === null && $row[$startcol + 7] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 4], (string) $row[$startcol + 5], (string) $row[$startcol + 6], (string) $row[$startcol + 7]));
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

        return array((int) $row[$startcol + 2], (string) $row[$startcol + 3], (int) $row[$startcol + 4], (int) $row[$startcol + 5], (int) $row[$startcol + 6], (int) $row[$startcol + 7]);
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
        $cls = GsKoppelingZrsMetExterneCodesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsKoppelingZrsMetExterneCodesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsKoppelingZrsMetExterneCodesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsKoppelingZrsMetExterneCodesPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsKoppelingZrsMetExterneCodes object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsKoppelingZrsMetExterneCodesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsKoppelingZrsMetExterneCodesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsKoppelingZrsMetExterneCodesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsKoppelingZrsMetExterneCodesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsKoppelingZrsMetExterneCodesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME)->getTable(GsKoppelingZrsMetExterneCodesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsKoppelingZrsMetExterneCodesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsKoppelingZrsMetExterneCodesTableMap());
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
        return GsKoppelingZrsMetExterneCodesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsKoppelingZrsMetExterneCodes or Criteria object.
     *
     * @param      mixed $values Criteria or GsKoppelingZrsMetExterneCodes object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsKoppelingZrsMetExterneCodes object
        }


        // Set the correct dbName
        $criteria->setDbName(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsKoppelingZrsMetExterneCodes or Criteria object.
     *
     * @param      mixed $values Criteria or GsKoppelingZrsMetExterneCodes object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE);
            $value = $criteria->remove(GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE);
            if ($value) {
                $selectCriteria->add(GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsKoppelingZrsMetExterneCodesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsKoppelingZrsMetExterneCodesPeer::EXTERNE_CODE_VAN_HET_TYPE_EXTTYP);
            $value = $criteria->remove(GsKoppelingZrsMetExterneCodesPeer::EXTERNE_CODE_VAN_HET_TYPE_EXTTYP);
            if ($value) {
                $selectCriteria->add(GsKoppelingZrsMetExterneCodesPeer::EXTERNE_CODE_VAN_HET_TYPE_EXTTYP, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsKoppelingZrsMetExterneCodesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE);
            $value = $criteria->remove(GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE);
            if ($value) {
                $selectCriteria->add(GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsKoppelingZrsMetExterneCodesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA);
            $value = $criteria->remove(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA);
            if ($value) {
                $selectCriteria->add(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsKoppelingZrsMetExterneCodesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1);
            $value = $criteria->remove(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1);
            if ($value) {
                $selectCriteria->add(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsKoppelingZrsMetExterneCodesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL);
            $value = $criteria->remove(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL);
            if ($value) {
                $selectCriteria->add(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsKoppelingZrsMetExterneCodesPeer::TABLE_NAME);
            }

        } else { // $values is GsKoppelingZrsMetExterneCodes object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_koppeling_zrs_met_externe_codes table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsKoppelingZrsMetExterneCodesPeer::TABLE_NAME, $con, GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsKoppelingZrsMetExterneCodesPeer::clearInstancePool();
            GsKoppelingZrsMetExterneCodesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsKoppelingZrsMetExterneCodes or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsKoppelingZrsMetExterneCodes object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsKoppelingZrsMetExterneCodesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsKoppelingZrsMetExterneCodes) { // it's a model object
            // invalidate the cache for this single object
            GsKoppelingZrsMetExterneCodesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsKoppelingZrsMetExterneCodesPeer::EXTERNE_CODE_VAN_HET_TYPE_EXTTYP, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $value[5]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsKoppelingZrsMetExterneCodesPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsKoppelingZrsMetExterneCodesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsKoppelingZrsMetExterneCodes object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsKoppelingZrsMetExterneCodes $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsKoppelingZrsMetExterneCodesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME, GsKoppelingZrsMetExterneCodesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $type_externe_zrs_code
     * @param   string $externe_code_van_het_type_exttyp
     * @param   int $soort_code
     * @param   int $zorg_registratie_binnen_aaa
     * @param   int $zorg_registratie_binnen_aaa1
     * @param   int $zorg_registratie_nummer_van_de_actieregel
     * @param      PropelPDO $con
     * @return GsKoppelingZrsMetExterneCodes
     */
    public static function retrieveByPK($type_externe_zrs_code, $externe_code_van_het_type_exttyp, $soort_code, $zorg_registratie_binnen_aaa, $zorg_registratie_binnen_aaa1, $zorg_registratie_nummer_van_de_actieregel, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $type_externe_zrs_code, (string) $externe_code_van_het_type_exttyp, (string) $soort_code, (string) $zorg_registratie_binnen_aaa, (string) $zorg_registratie_binnen_aaa1, (string) $zorg_registratie_nummer_van_de_actieregel));
         if (null !== ($obj = GsKoppelingZrsMetExterneCodesPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME);
        $criteria->add(GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE, $type_externe_zrs_code);
        $criteria->add(GsKoppelingZrsMetExterneCodesPeer::EXTERNE_CODE_VAN_HET_TYPE_EXTTYP, $externe_code_van_het_type_exttyp);
        $criteria->add(GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE, $soort_code);
        $criteria->add(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA, $zorg_registratie_binnen_aaa);
        $criteria->add(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1, $zorg_registratie_binnen_aaa1);
        $criteria->add(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $zorg_registratie_nummer_van_de_actieregel);
        $v = GsKoppelingZrsMetExterneCodesPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsKoppelingZrsMetExterneCodesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsKoppelingZrsMetExterneCodesPeer::buildTableMap();

