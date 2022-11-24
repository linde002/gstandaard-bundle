<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerken;
use PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerkenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProductPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsBijzondereKenmerkenTableMap;

abstract class BaseGsBijzondereKenmerkenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_bijzondere_kenmerken';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsBijzondereKenmerken';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsBijzondereKenmerkenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_bijzondere_kenmerken.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_bijzondere_kenmerken.mutatiekode';

    /** the column name for the prkcode field */
    const PRKCODE = 'gs_bijzondere_kenmerken.prkcode';

    /** the column name for the handelsproduktkode field */
    const HANDELSPRODUKTKODE = 'gs_bijzondere_kenmerken.handelsproduktkode';

    /** the column name for the thesnr_bijzondere_kenmerken field */
    const THESNR_BIJZONDERE_KENMERKEN = 'gs_bijzondere_kenmerken.thesnr_bijzondere_kenmerken';

    /** the column name for the bijzondere_kenmerk field */
    const BIJZONDERE_KENMERK = 'gs_bijzondere_kenmerken.bijzondere_kenmerk';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsBijzondereKenmerken objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsBijzondereKenmerken[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsBijzondereKenmerkenPeer::$fieldNames[GsBijzondereKenmerkenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Prkcode', 'Handelsproduktkode', 'ThesnrBijzondereKenmerken', 'BijzondereKenmerk', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'prkcode', 'handelsproduktkode', 'thesnrBijzondereKenmerken', 'bijzondereKenmerk', ),
        BasePeer::TYPE_COLNAME => array (GsBijzondereKenmerkenPeer::BESTANDNUMMER, GsBijzondereKenmerkenPeer::MUTATIEKODE, GsBijzondereKenmerkenPeer::PRKCODE, GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN, GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'PRKCODE', 'HANDELSPRODUKTKODE', 'THESNR_BIJZONDERE_KENMERKEN', 'BIJZONDERE_KENMERK', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'prkcode', 'handelsproduktkode', 'thesnr_bijzondere_kenmerken', 'bijzondere_kenmerk', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsBijzondereKenmerkenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Prkcode' => 2, 'Handelsproduktkode' => 3, 'ThesnrBijzondereKenmerken' => 4, 'BijzondereKenmerk' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'prkcode' => 2, 'handelsproduktkode' => 3, 'thesnrBijzondereKenmerken' => 4, 'bijzondereKenmerk' => 5, ),
        BasePeer::TYPE_COLNAME => array (GsBijzondereKenmerkenPeer::BESTANDNUMMER => 0, GsBijzondereKenmerkenPeer::MUTATIEKODE => 1, GsBijzondereKenmerkenPeer::PRKCODE => 2, GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE => 3, GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN => 4, GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'PRKCODE' => 2, 'HANDELSPRODUKTKODE' => 3, 'THESNR_BIJZONDERE_KENMERKEN' => 4, 'BIJZONDERE_KENMERK' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'prkcode' => 2, 'handelsproduktkode' => 3, 'thesnr_bijzondere_kenmerken' => 4, 'bijzondere_kenmerk' => 5, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
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
        $toNames = GsBijzondereKenmerkenPeer::getFieldNames($toType);
        $key = isset(GsBijzondereKenmerkenPeer::$fieldKeys[$fromType][$name]) ? GsBijzondereKenmerkenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsBijzondereKenmerkenPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsBijzondereKenmerkenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsBijzondereKenmerkenPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsBijzondereKenmerkenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsBijzondereKenmerkenPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsBijzondereKenmerkenPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsBijzondereKenmerkenPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsBijzondereKenmerkenPeer::PRKCODE);
            $criteria->addSelectColumn(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE);
            $criteria->addSelectColumn(GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN);
            $criteria->addSelectColumn(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.prkcode');
            $criteria->addSelectColumn($alias . '.handelsproduktkode');
            $criteria->addSelectColumn($alias . '.thesnr_bijzondere_kenmerken');
            $criteria->addSelectColumn($alias . '.bijzondere_kenmerk');
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
        $criteria->setPrimaryTableName(GsBijzondereKenmerkenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsBijzondereKenmerkenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsBijzondereKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsBijzondereKenmerken
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsBijzondereKenmerkenPeer::doSelect($critcopy, $con);
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
        return GsBijzondereKenmerkenPeer::populateObjects(GsBijzondereKenmerkenPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsBijzondereKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsBijzondereKenmerkenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME);

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
     * @param GsBijzondereKenmerken $obj A GsBijzondereKenmerken object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getPrkcode(), (string) $obj->getHandelsproduktkode(), (string) $obj->getBijzondereKenmerk()));
            } // if key === null
            GsBijzondereKenmerkenPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsBijzondereKenmerken object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsBijzondereKenmerken) {
                $key = serialize(array((string) $value->getPrkcode(), (string) $value->getHandelsproduktkode(), (string) $value->getBijzondereKenmerk()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsBijzondereKenmerken object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsBijzondereKenmerkenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsBijzondereKenmerken Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsBijzondereKenmerkenPeer::$instances[$key])) {
                return GsBijzondereKenmerkenPeer::$instances[$key];
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
        foreach (GsBijzondereKenmerkenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsBijzondereKenmerkenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_bijzondere_kenmerken
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
        if ($row[$startcol + 2] === null && $row[$startcol + 3] === null && $row[$startcol + 5] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 5]));
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

        return array((int) $row[$startcol + 2], (int) $row[$startcol + 3], (int) $row[$startcol + 5]);
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
        $cls = GsBijzondereKenmerkenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsBijzondereKenmerkenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsBijzondereKenmerkenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsBijzondereKenmerkenPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsBijzondereKenmerken object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsBijzondereKenmerkenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsBijzondereKenmerkenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsBijzondereKenmerkenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsBijzondereKenmerkenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsBijzondereKenmerkenPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related KenmerkOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinKenmerkOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsBijzondereKenmerkenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsBijzondereKenmerkenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsBijzondereKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
        $criteria->setPrimaryTableName(GsBijzondereKenmerkenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsBijzondereKenmerkenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsBijzondereKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsPrescriptieProduct table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsPrescriptieProduct(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsBijzondereKenmerkenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsBijzondereKenmerkenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsBijzondereKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsBijzondereKenmerkenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

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
     * Selects a collection of GsBijzondereKenmerken objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsBijzondereKenmerken objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinKenmerkOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME);
        }

        GsBijzondereKenmerkenPeer::addSelectColumns($criteria);
        $startcol = GsBijzondereKenmerkenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsBijzondereKenmerkenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsBijzondereKenmerkenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsBijzondereKenmerkenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsBijzondereKenmerkenPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsBijzondereKenmerken) to $obj2 (GsThesauriTotaal)
                $obj2->addGsBijzondereKenmerken($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsBijzondereKenmerken objects pre-filled with their GsHandelsproducten objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsBijzondereKenmerken objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsHandelsproducten(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME);
        }

        GsBijzondereKenmerkenPeer::addSelectColumns($criteria);
        $startcol = GsBijzondereKenmerkenPeer::NUM_HYDRATE_COLUMNS;
        GsHandelsproductenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsBijzondereKenmerkenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsBijzondereKenmerkenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsBijzondereKenmerkenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsBijzondereKenmerkenPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsBijzondereKenmerken) to $obj2 (GsHandelsproducten)
                $obj2->addGsBijzondereKenmerken($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsBijzondereKenmerken objects pre-filled with their GsPrescriptieProduct objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsBijzondereKenmerken objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsPrescriptieProduct(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME);
        }

        GsBijzondereKenmerkenPeer::addSelectColumns($criteria);
        $startcol = GsBijzondereKenmerkenPeer::NUM_HYDRATE_COLUMNS;
        GsPrescriptieProductPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsBijzondereKenmerkenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsBijzondereKenmerkenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsBijzondereKenmerkenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsBijzondereKenmerkenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsBijzondereKenmerkenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsPrescriptieProductPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsPrescriptieProductPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsBijzondereKenmerken) to $obj2 (GsPrescriptieProduct)
                $obj2->addGsBijzondereKenmerken($obj1);

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
        $criteria->setPrimaryTableName(GsBijzondereKenmerkenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsBijzondereKenmerkenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsBijzondereKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsBijzondereKenmerkenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

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
     * Selects a collection of GsBijzondereKenmerken objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsBijzondereKenmerken objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME);
        }

        GsBijzondereKenmerkenPeer::addSelectColumns($criteria);
        $startcol2 = GsBijzondereKenmerkenPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsBijzondereKenmerkenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsBijzondereKenmerkenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsBijzondereKenmerkenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsBijzondereKenmerkenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsBijzondereKenmerkenPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsBijzondereKenmerken) to the collection in $obj2 (GsThesauriTotaal)
                $obj2->addGsBijzondereKenmerken($obj1);
            } // if joined row not null

            // Add objects for joined GsHandelsproducten rows

            $key3 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = GsHandelsproductenPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = GsHandelsproductenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsHandelsproductenPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (GsBijzondereKenmerken) to the collection in $obj3 (GsHandelsproducten)
                $obj3->addGsBijzondereKenmerken($obj1);
            } // if joined row not null

            // Add objects for joined GsPrescriptieProduct rows

            $key4 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = GsPrescriptieProductPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsPrescriptieProductPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (GsBijzondereKenmerken) to the collection in $obj4 (GsPrescriptieProduct)
                $obj4->addGsBijzondereKenmerken($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related KenmerkOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptKenmerkOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsBijzondereKenmerkenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsBijzondereKenmerkenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsBijzondereKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsBijzondereKenmerkenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

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
        $criteria->setPrimaryTableName(GsBijzondereKenmerkenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsBijzondereKenmerkenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsBijzondereKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsBijzondereKenmerkenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsPrescriptieProduct table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsPrescriptieProduct(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsBijzondereKenmerkenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsBijzondereKenmerkenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsBijzondereKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

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
     * Selects a collection of GsBijzondereKenmerken objects pre-filled with all related objects except KenmerkOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsBijzondereKenmerken objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptKenmerkOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME);
        }

        GsBijzondereKenmerkenPeer::addSelectColumns($criteria);
        $startcol2 = GsBijzondereKenmerkenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsBijzondereKenmerkenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsBijzondereKenmerkenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsBijzondereKenmerkenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsBijzondereKenmerkenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsBijzondereKenmerkenPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsBijzondereKenmerken) to the collection in $obj2 (GsHandelsproducten)
                $obj2->addGsBijzondereKenmerken($obj1);

            } // if joined row is not null

                // Add objects for joined GsPrescriptieProduct rows

                $key3 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsPrescriptieProductPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsPrescriptieProductPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsBijzondereKenmerken) to the collection in $obj3 (GsPrescriptieProduct)
                $obj3->addGsBijzondereKenmerken($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsBijzondereKenmerken objects pre-filled with all related objects except GsHandelsproducten.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsBijzondereKenmerken objects.
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
            $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME);
        }

        GsBijzondereKenmerkenPeer::addSelectColumns($criteria);
        $startcol2 = GsBijzondereKenmerkenPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsBijzondereKenmerkenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsBijzondereKenmerkenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsBijzondereKenmerkenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsBijzondereKenmerkenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsBijzondereKenmerkenPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsBijzondereKenmerken) to the collection in $obj2 (GsThesauriTotaal)
                $obj2->addGsBijzondereKenmerken($obj1);

            } // if joined row is not null

                // Add objects for joined GsPrescriptieProduct rows

                $key3 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsPrescriptieProductPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsPrescriptieProductPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsBijzondereKenmerken) to the collection in $obj3 (GsPrescriptieProduct)
                $obj3->addGsBijzondereKenmerken($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsBijzondereKenmerken objects pre-filled with all related objects except GsPrescriptieProduct.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsBijzondereKenmerken objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsPrescriptieProduct(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME);
        }

        GsBijzondereKenmerkenPeer::addSelectColumns($criteria);
        $startcol2 = GsBijzondereKenmerkenPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsBijzondereKenmerkenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsBijzondereKenmerkenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsBijzondereKenmerkenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsBijzondereKenmerkenPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsBijzondereKenmerken) to the collection in $obj2 (GsThesauriTotaal)
                $obj2->addGsBijzondereKenmerken($obj1);

            } // if joined row is not null

                // Add objects for joined GsHandelsproducten rows

                $key3 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsHandelsproductenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsHandelsproductenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsBijzondereKenmerken) to the collection in $obj3 (GsHandelsproducten)
                $obj3->addGsBijzondereKenmerken($obj1);

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
        return Propel::getDatabaseMap(GsBijzondereKenmerkenPeer::DATABASE_NAME)->getTable(GsBijzondereKenmerkenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsBijzondereKenmerkenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsBijzondereKenmerkenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsBijzondereKenmerkenTableMap());
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
        return GsBijzondereKenmerkenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsBijzondereKenmerken or Criteria object.
     *
     * @param      mixed $values Criteria or GsBijzondereKenmerken object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsBijzondereKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsBijzondereKenmerken object
        }


        // Set the correct dbName
        $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsBijzondereKenmerken or Criteria object.
     *
     * @param      mixed $values Criteria or GsBijzondereKenmerken object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsBijzondereKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsBijzondereKenmerkenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsBijzondereKenmerkenPeer::PRKCODE);
            $value = $criteria->remove(GsBijzondereKenmerkenPeer::PRKCODE);
            if ($value) {
                $selectCriteria->add(GsBijzondereKenmerkenPeer::PRKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsBijzondereKenmerkenPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE);
            $value = $criteria->remove(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE);
            if ($value) {
                $selectCriteria->add(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsBijzondereKenmerkenPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK);
            $value = $criteria->remove(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK);
            if ($value) {
                $selectCriteria->add(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsBijzondereKenmerkenPeer::TABLE_NAME);
            }

        } else { // $values is GsBijzondereKenmerken object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_bijzondere_kenmerken table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsBijzondereKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsBijzondereKenmerkenPeer::TABLE_NAME, $con, GsBijzondereKenmerkenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsBijzondereKenmerkenPeer::clearInstancePool();
            GsBijzondereKenmerkenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsBijzondereKenmerken or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsBijzondereKenmerken object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsBijzondereKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsBijzondereKenmerkenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsBijzondereKenmerken) { // it's a model object
            // invalidate the cache for this single object
            GsBijzondereKenmerkenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsBijzondereKenmerkenPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsBijzondereKenmerkenPeer::PRKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsBijzondereKenmerkenPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsBijzondereKenmerkenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsBijzondereKenmerkenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsBijzondereKenmerken object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsBijzondereKenmerken $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsBijzondereKenmerkenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsBijzondereKenmerkenPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsBijzondereKenmerkenPeer::DATABASE_NAME, GsBijzondereKenmerkenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $prkcode
     * @param   int $handelsproduktkode
     * @param   int $bijzondere_kenmerk
     * @param      PropelPDO $con
     * @return GsBijzondereKenmerken
     */
    public static function retrieveByPK($prkcode, $handelsproduktkode, $bijzondere_kenmerk, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $prkcode, (string) $handelsproduktkode, (string) $bijzondere_kenmerk));
         if (null !== ($obj = GsBijzondereKenmerkenPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsBijzondereKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsBijzondereKenmerkenPeer::DATABASE_NAME);
        $criteria->add(GsBijzondereKenmerkenPeer::PRKCODE, $prkcode);
        $criteria->add(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, $handelsproduktkode);
        $criteria->add(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, $bijzondere_kenmerk);
        $v = GsBijzondereKenmerkenPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsBijzondereKenmerkenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsBijzondereKenmerkenPeer::buildTableMap();

