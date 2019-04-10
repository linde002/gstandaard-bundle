<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsDosisgegevens;
use PharmaIntelligence\GstandaardBundle\Model\GsDosisgegevensPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsDosisgegevensTableMap;

abstract class BaseGsDosisgegevensPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_dosisgegevens';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDosisgegevens';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsDosisgegevensTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_dosisgegevens.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_dosisgegevens.mutatiekode';

    /** the column name for the dosisnummer field */
    const DOSISNUMMER = 'gs_dosisgegevens.dosisnummer';

    /** the column name for the norm_minimum field */
    const NORM_MINIMUM = 'gs_dosisgegevens.norm_minimum';

    /** the column name for the norm_maximum field */
    const NORM_MAXIMUM = 'gs_dosisgegevens.norm_maximum';

    /** the column name for the absoluut_minimum field */
    const ABSOLUUT_MINIMUM = 'gs_dosisgegevens.absoluut_minimum';

    /** the column name for the absoluut_maximum field */
    const ABSOLUUT_MAXIMUM = 'gs_dosisgegevens.absoluut_maximum';

    /** the column name for the norm_minimum_per_kg field */
    const NORM_MINIMUM_PER_KG = 'gs_dosisgegevens.norm_minimum_per_kg';

    /** the column name for the norm_maximum_per_kg field */
    const NORM_MAXIMUM_PER_KG = 'gs_dosisgegevens.norm_maximum_per_kg';

    /** the column name for the absoluut_minimum_per_kg field */
    const ABSOLUUT_MINIMUM_PER_KG = 'gs_dosisgegevens.absoluut_minimum_per_kg';

    /** the column name for the absoluut_maximum_per_kg field */
    const ABSOLUUT_MAXIMUM_PER_KG = 'gs_dosisgegevens.absoluut_maximum_per_kg';

    /** the column name for the norm_minimum_per_m2 field */
    const NORM_MINIMUM_PER_M2 = 'gs_dosisgegevens.norm_minimum_per_m2';

    /** the column name for the norm_maximum_per_m2 field */
    const NORM_MAXIMUM_PER_M2 = 'gs_dosisgegevens.norm_maximum_per_m2';

    /** the column name for the absoluut_minimum_per_m2 field */
    const ABSOLUUT_MINIMUM_PER_M2 = 'gs_dosisgegevens.absoluut_minimum_per_m2';

    /** the column name for the absoluut_maximum_per_m2 field */
    const ABSOLUUT_MAXIMUM_PER_M2 = 'gs_dosisgegevens.absoluut_maximum_per_m2';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsDosisgegevens objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsDosisgegevens[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsDosisgegevensPeer::$fieldNames[GsDosisgegevensPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Dosisnummer', 'NormMinimum', 'NormMaximum', 'AbsoluutMinimum', 'AbsoluutMaximum', 'NormMinimumPerKg', 'NormMaximumPerKg', 'AbsoluutMinimumPerKg', 'AbsoluutMaximumPerKg', 'NormMinimumPerM2', 'NormMaximumPerM2', 'AbsoluutMinimumPerM2', 'AbsoluutMaximumPerM2', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'dosisnummer', 'normMinimum', 'normMaximum', 'absoluutMinimum', 'absoluutMaximum', 'normMinimumPerKg', 'normMaximumPerKg', 'absoluutMinimumPerKg', 'absoluutMaximumPerKg', 'normMinimumPerM2', 'normMaximumPerM2', 'absoluutMinimumPerM2', 'absoluutMaximumPerM2', ),
        BasePeer::TYPE_COLNAME => array (GsDosisgegevensPeer::BESTANDNUMMER, GsDosisgegevensPeer::MUTATIEKODE, GsDosisgegevensPeer::DOSISNUMMER, GsDosisgegevensPeer::NORM_MINIMUM, GsDosisgegevensPeer::NORM_MAXIMUM, GsDosisgegevensPeer::ABSOLUUT_MINIMUM, GsDosisgegevensPeer::ABSOLUUT_MAXIMUM, GsDosisgegevensPeer::NORM_MINIMUM_PER_KG, GsDosisgegevensPeer::NORM_MAXIMUM_PER_KG, GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_KG, GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_KG, GsDosisgegevensPeer::NORM_MINIMUM_PER_M2, GsDosisgegevensPeer::NORM_MAXIMUM_PER_M2, GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_M2, GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_M2, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'DOSISNUMMER', 'NORM_MINIMUM', 'NORM_MAXIMUM', 'ABSOLUUT_MINIMUM', 'ABSOLUUT_MAXIMUM', 'NORM_MINIMUM_PER_KG', 'NORM_MAXIMUM_PER_KG', 'ABSOLUUT_MINIMUM_PER_KG', 'ABSOLUUT_MAXIMUM_PER_KG', 'NORM_MINIMUM_PER_M2', 'NORM_MAXIMUM_PER_M2', 'ABSOLUUT_MINIMUM_PER_M2', 'ABSOLUUT_MAXIMUM_PER_M2', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'dosisnummer', 'norm_minimum', 'norm_maximum', 'absoluut_minimum', 'absoluut_maximum', 'norm_minimum_per_kg', 'norm_maximum_per_kg', 'absoluut_minimum_per_kg', 'absoluut_maximum_per_kg', 'norm_minimum_per_m2', 'norm_maximum_per_m2', 'absoluut_minimum_per_m2', 'absoluut_maximum_per_m2', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsDosisgegevensPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Dosisnummer' => 2, 'NormMinimum' => 3, 'NormMaximum' => 4, 'AbsoluutMinimum' => 5, 'AbsoluutMaximum' => 6, 'NormMinimumPerKg' => 7, 'NormMaximumPerKg' => 8, 'AbsoluutMinimumPerKg' => 9, 'AbsoluutMaximumPerKg' => 10, 'NormMinimumPerM2' => 11, 'NormMaximumPerM2' => 12, 'AbsoluutMinimumPerM2' => 13, 'AbsoluutMaximumPerM2' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'dosisnummer' => 2, 'normMinimum' => 3, 'normMaximum' => 4, 'absoluutMinimum' => 5, 'absoluutMaximum' => 6, 'normMinimumPerKg' => 7, 'normMaximumPerKg' => 8, 'absoluutMinimumPerKg' => 9, 'absoluutMaximumPerKg' => 10, 'normMinimumPerM2' => 11, 'normMaximumPerM2' => 12, 'absoluutMinimumPerM2' => 13, 'absoluutMaximumPerM2' => 14, ),
        BasePeer::TYPE_COLNAME => array (GsDosisgegevensPeer::BESTANDNUMMER => 0, GsDosisgegevensPeer::MUTATIEKODE => 1, GsDosisgegevensPeer::DOSISNUMMER => 2, GsDosisgegevensPeer::NORM_MINIMUM => 3, GsDosisgegevensPeer::NORM_MAXIMUM => 4, GsDosisgegevensPeer::ABSOLUUT_MINIMUM => 5, GsDosisgegevensPeer::ABSOLUUT_MAXIMUM => 6, GsDosisgegevensPeer::NORM_MINIMUM_PER_KG => 7, GsDosisgegevensPeer::NORM_MAXIMUM_PER_KG => 8, GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_KG => 9, GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_KG => 10, GsDosisgegevensPeer::NORM_MINIMUM_PER_M2 => 11, GsDosisgegevensPeer::NORM_MAXIMUM_PER_M2 => 12, GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_M2 => 13, GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_M2 => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'DOSISNUMMER' => 2, 'NORM_MINIMUM' => 3, 'NORM_MAXIMUM' => 4, 'ABSOLUUT_MINIMUM' => 5, 'ABSOLUUT_MAXIMUM' => 6, 'NORM_MINIMUM_PER_KG' => 7, 'NORM_MAXIMUM_PER_KG' => 8, 'ABSOLUUT_MINIMUM_PER_KG' => 9, 'ABSOLUUT_MAXIMUM_PER_KG' => 10, 'NORM_MINIMUM_PER_M2' => 11, 'NORM_MAXIMUM_PER_M2' => 12, 'ABSOLUUT_MINIMUM_PER_M2' => 13, 'ABSOLUUT_MAXIMUM_PER_M2' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'dosisnummer' => 2, 'norm_minimum' => 3, 'norm_maximum' => 4, 'absoluut_minimum' => 5, 'absoluut_maximum' => 6, 'norm_minimum_per_kg' => 7, 'norm_maximum_per_kg' => 8, 'absoluut_minimum_per_kg' => 9, 'absoluut_maximum_per_kg' => 10, 'norm_minimum_per_m2' => 11, 'norm_maximum_per_m2' => 12, 'absoluut_minimum_per_m2' => 13, 'absoluut_maximum_per_m2' => 14, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
        $toNames = GsDosisgegevensPeer::getFieldNames($toType);
        $key = isset(GsDosisgegevensPeer::$fieldKeys[$fromType][$name]) ? GsDosisgegevensPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsDosisgegevensPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsDosisgegevensPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsDosisgegevensPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsDosisgegevensPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsDosisgegevensPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsDosisgegevensPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsDosisgegevensPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsDosisgegevensPeer::DOSISNUMMER);
            $criteria->addSelectColumn(GsDosisgegevensPeer::NORM_MINIMUM);
            $criteria->addSelectColumn(GsDosisgegevensPeer::NORM_MAXIMUM);
            $criteria->addSelectColumn(GsDosisgegevensPeer::ABSOLUUT_MINIMUM);
            $criteria->addSelectColumn(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM);
            $criteria->addSelectColumn(GsDosisgegevensPeer::NORM_MINIMUM_PER_KG);
            $criteria->addSelectColumn(GsDosisgegevensPeer::NORM_MAXIMUM_PER_KG);
            $criteria->addSelectColumn(GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_KG);
            $criteria->addSelectColumn(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_KG);
            $criteria->addSelectColumn(GsDosisgegevensPeer::NORM_MINIMUM_PER_M2);
            $criteria->addSelectColumn(GsDosisgegevensPeer::NORM_MAXIMUM_PER_M2);
            $criteria->addSelectColumn(GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_M2);
            $criteria->addSelectColumn(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_M2);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.dosisnummer');
            $criteria->addSelectColumn($alias . '.norm_minimum');
            $criteria->addSelectColumn($alias . '.norm_maximum');
            $criteria->addSelectColumn($alias . '.absoluut_minimum');
            $criteria->addSelectColumn($alias . '.absoluut_maximum');
            $criteria->addSelectColumn($alias . '.norm_minimum_per_kg');
            $criteria->addSelectColumn($alias . '.norm_maximum_per_kg');
            $criteria->addSelectColumn($alias . '.absoluut_minimum_per_kg');
            $criteria->addSelectColumn($alias . '.absoluut_maximum_per_kg');
            $criteria->addSelectColumn($alias . '.norm_minimum_per_m2');
            $criteria->addSelectColumn($alias . '.norm_maximum_per_m2');
            $criteria->addSelectColumn($alias . '.absoluut_minimum_per_m2');
            $criteria->addSelectColumn($alias . '.absoluut_maximum_per_m2');
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
        $criteria->setPrimaryTableName(GsDosisgegevensPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsDosisgegevensPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsDosisgegevensPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsDosisgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsDosisgegevens
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsDosisgegevensPeer::doSelect($critcopy, $con);
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
        return GsDosisgegevensPeer::populateObjects(GsDosisgegevensPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsDosisgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsDosisgegevensPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsDosisgegevensPeer::DATABASE_NAME);

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
     * @param GsDosisgegevens $obj A GsDosisgegevens object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getDosisnummer();
            } // if key === null
            GsDosisgegevensPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsDosisgegevens object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsDosisgegevens) {
                $key = (string) $value->getDosisnummer();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsDosisgegevens object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsDosisgegevensPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsDosisgegevens Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsDosisgegevensPeer::$instances[$key])) {
                return GsDosisgegevensPeer::$instances[$key];
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
        foreach (GsDosisgegevensPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsDosisgegevensPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_dosisgegevens
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
        $cls = GsDosisgegevensPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsDosisgegevensPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsDosisgegevensPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsDosisgegevensPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsDosisgegevens object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsDosisgegevensPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsDosisgegevensPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsDosisgegevensPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsDosisgegevensPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsDosisgegevensPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsDosisgegevensPeer::DATABASE_NAME)->getTable(GsDosisgegevensPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsDosisgegevensPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsDosisgegevensPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsDosisgegevensTableMap());
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
        return GsDosisgegevensPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsDosisgegevens or Criteria object.
     *
     * @param      mixed $values Criteria or GsDosisgegevens object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsDosisgegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsDosisgegevens object
        }


        // Set the correct dbName
        $criteria->setDbName(GsDosisgegevensPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsDosisgegevens or Criteria object.
     *
     * @param      mixed $values Criteria or GsDosisgegevens object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsDosisgegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsDosisgegevensPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsDosisgegevensPeer::DOSISNUMMER);
            $value = $criteria->remove(GsDosisgegevensPeer::DOSISNUMMER);
            if ($value) {
                $selectCriteria->add(GsDosisgegevensPeer::DOSISNUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsDosisgegevensPeer::TABLE_NAME);
            }

        } else { // $values is GsDosisgegevens object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsDosisgegevensPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_dosisgegevens table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsDosisgegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsDosisgegevensPeer::TABLE_NAME, $con, GsDosisgegevensPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsDosisgegevensPeer::clearInstancePool();
            GsDosisgegevensPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsDosisgegevens or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsDosisgegevens object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsDosisgegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsDosisgegevensPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsDosisgegevens) { // it's a model object
            // invalidate the cache for this single object
            GsDosisgegevensPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsDosisgegevensPeer::DATABASE_NAME);
            $criteria->add(GsDosisgegevensPeer::DOSISNUMMER, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsDosisgegevensPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsDosisgegevensPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsDosisgegevensPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsDosisgegevens object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsDosisgegevens $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsDosisgegevensPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsDosisgegevensPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsDosisgegevensPeer::DATABASE_NAME, GsDosisgegevensPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsDosisgegevens
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsDosisgegevensPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsDosisgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsDosisgegevensPeer::DATABASE_NAME);
        $criteria->add(GsDosisgegevensPeer::DOSISNUMMER, $pk);

        $v = GsDosisgegevensPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsDosisgegevens[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsDosisgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsDosisgegevensPeer::DATABASE_NAME);
            $criteria->add(GsDosisgegevensPeer::DOSISNUMMER, $pks, Criteria::IN);
            $objs = GsDosisgegevensPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsDosisgegevensPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsDosisgegevensPeer::buildTableMap();

