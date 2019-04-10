<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDose;
use PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDosePeer;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsDailyDefinedDoseTableMap;

abstract class BaseGsDailyDefinedDosePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_daily_defined_dose';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDailyDefinedDose';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsDailyDefinedDoseTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_daily_defined_dose.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_daily_defined_dose.mutatiekode';

    /** the column name for the atccode field */
    const ATCCODE = 'gs_daily_defined_dose.atccode';

    /** the column name for the dddaantal field */
    const DDDAANTAL = 'gs_daily_defined_dose.dddaantal';

    /** the column name for the dddeenheid_thesaurusnummer field */
    const DDDEENHEID_THESAURUSNUMMER = 'gs_daily_defined_dose.dddeenheid_thesaurusnummer';

    /** the column name for the dddeenheid field */
    const DDDEENHEID = 'gs_daily_defined_dose.dddeenheid';

    /** the column name for the ddd_toedieningsweg_thesaurusnummer field */
    const DDD_TOEDIENINGSWEG_THESAURUSNUMMER = 'gs_daily_defined_dose.ddd_toedieningsweg_thesaurusnummer';

    /** the column name for the dddtoedieningsweg field */
    const DDDTOEDIENINGSWEG = 'gs_daily_defined_dose.dddtoedieningsweg';

    /** the column name for the ddd_statusaanduiding field */
    const DDD_STATUSAANDUIDING = 'gs_daily_defined_dose.ddd_statusaanduiding';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsDailyDefinedDose objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsDailyDefinedDose[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsDailyDefinedDosePeer::$fieldNames[GsDailyDefinedDosePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Atccode', 'Dddaantal', 'DddeenheidThesaurusnummer', 'Dddeenheid', 'DddToedieningswegThesaurusnummer', 'Dddtoedieningsweg', 'DddStatusaanduiding', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'atccode', 'dddaantal', 'dddeenheidThesaurusnummer', 'dddeenheid', 'dddToedieningswegThesaurusnummer', 'dddtoedieningsweg', 'dddStatusaanduiding', ),
        BasePeer::TYPE_COLNAME => array (GsDailyDefinedDosePeer::BESTANDNUMMER, GsDailyDefinedDosePeer::MUTATIEKODE, GsDailyDefinedDosePeer::ATCCODE, GsDailyDefinedDosePeer::DDDAANTAL, GsDailyDefinedDosePeer::DDDEENHEID_THESAURUSNUMMER, GsDailyDefinedDosePeer::DDDEENHEID, GsDailyDefinedDosePeer::DDD_TOEDIENINGSWEG_THESAURUSNUMMER, GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG, GsDailyDefinedDosePeer::DDD_STATUSAANDUIDING, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'ATCCODE', 'DDDAANTAL', 'DDDEENHEID_THESAURUSNUMMER', 'DDDEENHEID', 'DDD_TOEDIENINGSWEG_THESAURUSNUMMER', 'DDDTOEDIENINGSWEG', 'DDD_STATUSAANDUIDING', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'atccode', 'dddaantal', 'dddeenheid_thesaurusnummer', 'dddeenheid', 'ddd_toedieningsweg_thesaurusnummer', 'dddtoedieningsweg', 'ddd_statusaanduiding', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsDailyDefinedDosePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Atccode' => 2, 'Dddaantal' => 3, 'DddeenheidThesaurusnummer' => 4, 'Dddeenheid' => 5, 'DddToedieningswegThesaurusnummer' => 6, 'Dddtoedieningsweg' => 7, 'DddStatusaanduiding' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'atccode' => 2, 'dddaantal' => 3, 'dddeenheidThesaurusnummer' => 4, 'dddeenheid' => 5, 'dddToedieningswegThesaurusnummer' => 6, 'dddtoedieningsweg' => 7, 'dddStatusaanduiding' => 8, ),
        BasePeer::TYPE_COLNAME => array (GsDailyDefinedDosePeer::BESTANDNUMMER => 0, GsDailyDefinedDosePeer::MUTATIEKODE => 1, GsDailyDefinedDosePeer::ATCCODE => 2, GsDailyDefinedDosePeer::DDDAANTAL => 3, GsDailyDefinedDosePeer::DDDEENHEID_THESAURUSNUMMER => 4, GsDailyDefinedDosePeer::DDDEENHEID => 5, GsDailyDefinedDosePeer::DDD_TOEDIENINGSWEG_THESAURUSNUMMER => 6, GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG => 7, GsDailyDefinedDosePeer::DDD_STATUSAANDUIDING => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'ATCCODE' => 2, 'DDDAANTAL' => 3, 'DDDEENHEID_THESAURUSNUMMER' => 4, 'DDDEENHEID' => 5, 'DDD_TOEDIENINGSWEG_THESAURUSNUMMER' => 6, 'DDDTOEDIENINGSWEG' => 7, 'DDD_STATUSAANDUIDING' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'atccode' => 2, 'dddaantal' => 3, 'dddeenheid_thesaurusnummer' => 4, 'dddeenheid' => 5, 'ddd_toedieningsweg_thesaurusnummer' => 6, 'dddtoedieningsweg' => 7, 'ddd_statusaanduiding' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
        $toNames = GsDailyDefinedDosePeer::getFieldNames($toType);
        $key = isset(GsDailyDefinedDosePeer::$fieldKeys[$fromType][$name]) ? GsDailyDefinedDosePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsDailyDefinedDosePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsDailyDefinedDosePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsDailyDefinedDosePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsDailyDefinedDosePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsDailyDefinedDosePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsDailyDefinedDosePeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsDailyDefinedDosePeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsDailyDefinedDosePeer::ATCCODE);
            $criteria->addSelectColumn(GsDailyDefinedDosePeer::DDDAANTAL);
            $criteria->addSelectColumn(GsDailyDefinedDosePeer::DDDEENHEID_THESAURUSNUMMER);
            $criteria->addSelectColumn(GsDailyDefinedDosePeer::DDDEENHEID);
            $criteria->addSelectColumn(GsDailyDefinedDosePeer::DDD_TOEDIENINGSWEG_THESAURUSNUMMER);
            $criteria->addSelectColumn(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG);
            $criteria->addSelectColumn(GsDailyDefinedDosePeer::DDD_STATUSAANDUIDING);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.atccode');
            $criteria->addSelectColumn($alias . '.dddaantal');
            $criteria->addSelectColumn($alias . '.dddeenheid_thesaurusnummer');
            $criteria->addSelectColumn($alias . '.dddeenheid');
            $criteria->addSelectColumn($alias . '.ddd_toedieningsweg_thesaurusnummer');
            $criteria->addSelectColumn($alias . '.dddtoedieningsweg');
            $criteria->addSelectColumn($alias . '.ddd_statusaanduiding');
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
        $criteria->setPrimaryTableName(GsDailyDefinedDosePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsDailyDefinedDosePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsDailyDefinedDosePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsDailyDefinedDose
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsDailyDefinedDosePeer::doSelect($critcopy, $con);
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
        return GsDailyDefinedDosePeer::populateObjects(GsDailyDefinedDosePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsDailyDefinedDosePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsDailyDefinedDosePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME);

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
     * @param GsDailyDefinedDose $obj A GsDailyDefinedDose object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getAtccode(), (string) $obj->getDddaantal(), (string) $obj->getDddeenheid(), (string) $obj->getDddtoedieningsweg()));
            } // if key === null
            GsDailyDefinedDosePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsDailyDefinedDose object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsDailyDefinedDose) {
                $key = serialize(array((string) $value->getAtccode(), (string) $value->getDddaantal(), (string) $value->getDddeenheid(), (string) $value->getDddtoedieningsweg()));
            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsDailyDefinedDose object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsDailyDefinedDosePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsDailyDefinedDose Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsDailyDefinedDosePeer::$instances[$key])) {
                return GsDailyDefinedDosePeer::$instances[$key];
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
        foreach (GsDailyDefinedDosePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsDailyDefinedDosePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_daily_defined_dose
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
        if ($row[$startcol + 2] === null && $row[$startcol + 3] === null && $row[$startcol + 5] === null && $row[$startcol + 7] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 5], (string) $row[$startcol + 7]));
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

        return array((string) $row[$startcol + 2], (string) $row[$startcol + 3], (int) $row[$startcol + 5], (int) $row[$startcol + 7]);
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
        $cls = GsDailyDefinedDosePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsDailyDefinedDosePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsDailyDefinedDosePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsDailyDefinedDosePeer::addInstanceToPool($obj, $key);
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
     * @return array (GsDailyDefinedDose object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsDailyDefinedDosePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsDailyDefinedDosePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsDailyDefinedDosePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsDailyDefinedDosePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsDailyDefinedDosePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsAtcCodes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsAtcCodes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsDailyDefinedDosePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsDailyDefinedDosePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsDailyDefinedDosePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsDailyDefinedDosePeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related EenheidOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEenheidOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsDailyDefinedDosePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsDailyDefinedDosePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsDailyDefinedDosePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsDailyDefinedDosePeer::DDDEENHEID_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsDailyDefinedDosePeer::DDDEENHEID, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Returns the number of rows matching criteria, joining the related ToedieningswegOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinToedieningswegOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsDailyDefinedDosePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsDailyDefinedDosePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsDailyDefinedDosePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsDailyDefinedDosePeer::DDD_TOEDIENINGSWEG_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Selects a collection of GsDailyDefinedDose objects pre-filled with their GsAtcCodes objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsDailyDefinedDose objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsAtcCodes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME);
        }

        GsDailyDefinedDosePeer::addSelectColumns($criteria);
        $startcol = GsDailyDefinedDosePeer::NUM_HYDRATE_COLUMNS;
        GsAtcCodesPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsDailyDefinedDosePeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsDailyDefinedDosePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsDailyDefinedDosePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsDailyDefinedDosePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsDailyDefinedDosePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsAtcCodesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsAtcCodesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsAtcCodesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsDailyDefinedDose) to $obj2 (GsAtcCodes)
                $obj2->addGsDailyDefinedDose($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsDailyDefinedDose objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsDailyDefinedDose objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEenheidOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME);
        }

        GsDailyDefinedDosePeer::addSelectColumns($criteria);
        $startcol = GsDailyDefinedDosePeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsDailyDefinedDosePeer::DDDEENHEID_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsDailyDefinedDosePeer::DDDEENHEID, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsDailyDefinedDosePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsDailyDefinedDosePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsDailyDefinedDosePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsDailyDefinedDosePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsDailyDefinedDose) to $obj2 (GsThesauriTotaal)
                $obj2->addGsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsDailyDefinedDose objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsDailyDefinedDose objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinToedieningswegOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME);
        }

        GsDailyDefinedDosePeer::addSelectColumns($criteria);
        $startcol = GsDailyDefinedDosePeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsDailyDefinedDosePeer::DDD_TOEDIENINGSWEG_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsDailyDefinedDosePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsDailyDefinedDosePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsDailyDefinedDosePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsDailyDefinedDosePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsDailyDefinedDose) to $obj2 (GsThesauriTotaal)
                $obj2->addGsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($obj1);

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
        $criteria->setPrimaryTableName(GsDailyDefinedDosePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsDailyDefinedDosePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsDailyDefinedDosePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsDailyDefinedDosePeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsDailyDefinedDosePeer::DDDEENHEID_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsDailyDefinedDosePeer::DDDEENHEID, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsDailyDefinedDosePeer::DDD_TOEDIENINGSWEG_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Selects a collection of GsDailyDefinedDose objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsDailyDefinedDose objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME);
        }

        GsDailyDefinedDosePeer::addSelectColumns($criteria);
        $startcol2 = GsDailyDefinedDosePeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsDailyDefinedDosePeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsDailyDefinedDosePeer::DDDEENHEID_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsDailyDefinedDosePeer::DDDEENHEID, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsDailyDefinedDosePeer::DDD_TOEDIENINGSWEG_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsDailyDefinedDosePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsDailyDefinedDosePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsDailyDefinedDosePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsDailyDefinedDosePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined GsAtcCodes rows

            $key2 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = GsAtcCodesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsAtcCodesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsAtcCodesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (GsDailyDefinedDose) to the collection in $obj2 (GsAtcCodes)
                $obj2->addGsDailyDefinedDose($obj1);
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

                // Add the $obj1 (GsDailyDefinedDose) to the collection in $obj3 (GsThesauriTotaal)
                $obj3->addGsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid($obj1);
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

                // Add the $obj1 (GsDailyDefinedDose) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsAtcCodes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsAtcCodes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsDailyDefinedDosePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsDailyDefinedDosePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsDailyDefinedDosePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsDailyDefinedDosePeer::DDDEENHEID_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsDailyDefinedDosePeer::DDDEENHEID, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsDailyDefinedDosePeer::DDD_TOEDIENINGSWEG_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Returns the number of rows matching criteria, joining the related EenheidOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEenheidOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsDailyDefinedDosePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsDailyDefinedDosePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsDailyDefinedDosePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsDailyDefinedDosePeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ToedieningswegOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptToedieningswegOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsDailyDefinedDosePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsDailyDefinedDosePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsDailyDefinedDosePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsDailyDefinedDosePeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

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
     * Selects a collection of GsDailyDefinedDose objects pre-filled with all related objects except GsAtcCodes.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsDailyDefinedDose objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsAtcCodes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME);
        }

        GsDailyDefinedDosePeer::addSelectColumns($criteria);
        $startcol2 = GsDailyDefinedDosePeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(GsDailyDefinedDosePeer::DDDEENHEID_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsDailyDefinedDosePeer::DDDEENHEID, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsDailyDefinedDosePeer::DDD_TOEDIENINGSWEG_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsDailyDefinedDosePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsDailyDefinedDosePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsDailyDefinedDosePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsDailyDefinedDosePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsDailyDefinedDose) to the collection in $obj2 (GsThesauriTotaal)
                $obj2->addGsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid($obj1);

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

                // Add the $obj1 (GsDailyDefinedDose) to the collection in $obj3 (GsThesauriTotaal)
                $obj3->addGsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsDailyDefinedDose objects pre-filled with all related objects except EenheidOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsDailyDefinedDose objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEenheidOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME);
        }

        GsDailyDefinedDosePeer::addSelectColumns($criteria);
        $startcol2 = GsDailyDefinedDosePeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsDailyDefinedDosePeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsDailyDefinedDosePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsDailyDefinedDosePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsDailyDefinedDosePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsDailyDefinedDosePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsAtcCodes rows

                $key2 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsAtcCodesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsAtcCodesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsAtcCodesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsDailyDefinedDose) to the collection in $obj2 (GsAtcCodes)
                $obj2->addGsDailyDefinedDose($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsDailyDefinedDose objects pre-filled with all related objects except ToedieningswegOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsDailyDefinedDose objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptToedieningswegOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME);
        }

        GsDailyDefinedDosePeer::addSelectColumns($criteria);
        $startcol2 = GsDailyDefinedDosePeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsDailyDefinedDosePeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsDailyDefinedDosePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsDailyDefinedDosePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsDailyDefinedDosePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsDailyDefinedDosePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsAtcCodes rows

                $key2 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsAtcCodesPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsAtcCodesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsAtcCodesPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsDailyDefinedDose) to the collection in $obj2 (GsAtcCodes)
                $obj2->addGsDailyDefinedDose($obj1);

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
        return Propel::getDatabaseMap(GsDailyDefinedDosePeer::DATABASE_NAME)->getTable(GsDailyDefinedDosePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsDailyDefinedDosePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsDailyDefinedDosePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsDailyDefinedDoseTableMap());
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
        return GsDailyDefinedDosePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsDailyDefinedDose or Criteria object.
     *
     * @param      mixed $values Criteria or GsDailyDefinedDose object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsDailyDefinedDosePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsDailyDefinedDose object
        }


        // Set the correct dbName
        $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsDailyDefinedDose or Criteria object.
     *
     * @param      mixed $values Criteria or GsDailyDefinedDose object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsDailyDefinedDosePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsDailyDefinedDosePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsDailyDefinedDosePeer::ATCCODE);
            $value = $criteria->remove(GsDailyDefinedDosePeer::ATCCODE);
            if ($value) {
                $selectCriteria->add(GsDailyDefinedDosePeer::ATCCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsDailyDefinedDosePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsDailyDefinedDosePeer::DDDAANTAL);
            $value = $criteria->remove(GsDailyDefinedDosePeer::DDDAANTAL);
            if ($value) {
                $selectCriteria->add(GsDailyDefinedDosePeer::DDDAANTAL, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsDailyDefinedDosePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsDailyDefinedDosePeer::DDDEENHEID);
            $value = $criteria->remove(GsDailyDefinedDosePeer::DDDEENHEID);
            if ($value) {
                $selectCriteria->add(GsDailyDefinedDosePeer::DDDEENHEID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsDailyDefinedDosePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG);
            $value = $criteria->remove(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG);
            if ($value) {
                $selectCriteria->add(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsDailyDefinedDosePeer::TABLE_NAME);
            }

        } else { // $values is GsDailyDefinedDose object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_daily_defined_dose table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsDailyDefinedDosePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsDailyDefinedDosePeer::TABLE_NAME, $con, GsDailyDefinedDosePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsDailyDefinedDosePeer::clearInstancePool();
            GsDailyDefinedDosePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsDailyDefinedDose or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsDailyDefinedDose object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsDailyDefinedDosePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsDailyDefinedDosePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsDailyDefinedDose) { // it's a model object
            // invalidate the cache for this single object
            GsDailyDefinedDosePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsDailyDefinedDosePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsDailyDefinedDosePeer::ATCCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsDailyDefinedDosePeer::DDDAANTAL, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(GsDailyDefinedDosePeer::DDDEENHEID, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG, $value[3]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsDailyDefinedDosePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsDailyDefinedDosePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsDailyDefinedDosePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsDailyDefinedDose object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsDailyDefinedDose $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsDailyDefinedDosePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsDailyDefinedDosePeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsDailyDefinedDosePeer::DATABASE_NAME, GsDailyDefinedDosePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   string $atccode
     * @param   string $dddaantal
     * @param   int $dddeenheid
     * @param   int $dddtoedieningsweg
     * @param      PropelPDO $con
     * @return GsDailyDefinedDose
     */
    public static function retrieveByPK($atccode, $dddaantal, $dddeenheid, $dddtoedieningsweg, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $atccode, (string) $dddaantal, (string) $dddeenheid, (string) $dddtoedieningsweg));
         if (null !== ($obj = GsDailyDefinedDosePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsDailyDefinedDosePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsDailyDefinedDosePeer::DATABASE_NAME);
        $criteria->add(GsDailyDefinedDosePeer::ATCCODE, $atccode);
        $criteria->add(GsDailyDefinedDosePeer::DDDAANTAL, $dddaantal);
        $criteria->add(GsDailyDefinedDosePeer::DDDEENHEID, $dddeenheid);
        $criteria->add(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG, $dddtoedieningsweg);
        $v = GsDailyDefinedDosePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsDailyDefinedDosePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsDailyDefinedDosePeer::buildTableMap();

