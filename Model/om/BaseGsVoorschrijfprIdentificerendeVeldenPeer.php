<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprIdentificerendeVelden;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprIdentificerendeVeldenPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsVoorschrijfprIdentificerendeVeldenTableMap;

abstract class BaseGsVoorschrijfprIdentificerendeVeldenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_voorschrijfpr_identificerende_velden';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVoorschrijfprIdentificerendeVelden';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsVoorschrijfprIdentificerendeVeldenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 4;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 4;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_voorschrijfpr_identificerende_velden.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_voorschrijfpr_identificerende_velden.mutatiekode';

    /** the column name for the prkcode field */
    const PRKCODE = 'gs_voorschrijfpr_identificerende_velden.prkcode';

    /** the column name for the identificerend_kenmerk field */
    const IDENTIFICEREND_KENMERK = 'gs_voorschrijfpr_identificerende_velden.identificerend_kenmerk';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsVoorschrijfprIdentificerendeVelden objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsVoorschrijfprIdentificerendeVelden[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsVoorschrijfprIdentificerendeVeldenPeer::$fieldNames[GsVoorschrijfprIdentificerendeVeldenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Prkcode', 'IdentificerendKenmerk', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'prkcode', 'identificerendKenmerk', ),
        BasePeer::TYPE_COLNAME => array (GsVoorschrijfprIdentificerendeVeldenPeer::BESTANDNUMMER, GsVoorschrijfprIdentificerendeVeldenPeer::MUTATIEKODE, GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE, GsVoorschrijfprIdentificerendeVeldenPeer::IDENTIFICEREND_KENMERK, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'PRKCODE', 'IDENTIFICEREND_KENMERK', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'prkcode', 'identificerend_kenmerk', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsVoorschrijfprIdentificerendeVeldenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Prkcode' => 2, 'IdentificerendKenmerk' => 3, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'prkcode' => 2, 'identificerendKenmerk' => 3, ),
        BasePeer::TYPE_COLNAME => array (GsVoorschrijfprIdentificerendeVeldenPeer::BESTANDNUMMER => 0, GsVoorschrijfprIdentificerendeVeldenPeer::MUTATIEKODE => 1, GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE => 2, GsVoorschrijfprIdentificerendeVeldenPeer::IDENTIFICEREND_KENMERK => 3, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'PRKCODE' => 2, 'IDENTIFICEREND_KENMERK' => 3, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'prkcode' => 2, 'identificerend_kenmerk' => 3, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
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
        $toNames = GsVoorschrijfprIdentificerendeVeldenPeer::getFieldNames($toType);
        $key = isset(GsVoorschrijfprIdentificerendeVeldenPeer::$fieldKeys[$fromType][$name]) ? GsVoorschrijfprIdentificerendeVeldenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsVoorschrijfprIdentificerendeVeldenPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsVoorschrijfprIdentificerendeVeldenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsVoorschrijfprIdentificerendeVeldenPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsVoorschrijfprIdentificerendeVeldenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsVoorschrijfprIdentificerendeVeldenPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsVoorschrijfprIdentificerendeVeldenPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsVoorschrijfprIdentificerendeVeldenPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE);
            $criteria->addSelectColumn(GsVoorschrijfprIdentificerendeVeldenPeer::IDENTIFICEREND_KENMERK);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.prkcode');
            $criteria->addSelectColumn($alias . '.identificerend_kenmerk');
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
        $criteria->setPrimaryTableName(GsVoorschrijfprIdentificerendeVeldenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsVoorschrijfprIdentificerendeVeldenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsVoorschrijfprIdentificerendeVelden
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsVoorschrijfprIdentificerendeVeldenPeer::doSelect($critcopy, $con);
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
        return GsVoorschrijfprIdentificerendeVeldenPeer::populateObjects(GsVoorschrijfprIdentificerendeVeldenPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsVoorschrijfprIdentificerendeVeldenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME);

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
     * @param GsVoorschrijfprIdentificerendeVelden $obj A GsVoorschrijfprIdentificerendeVelden object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getPrkcode(), (string) $obj->getIdentificerendKenmerk()));
            } // if key === null
            GsVoorschrijfprIdentificerendeVeldenPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsVoorschrijfprIdentificerendeVelden object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsVoorschrijfprIdentificerendeVelden) {
                $key = serialize(array((string) $value->getPrkcode(), (string) $value->getIdentificerendKenmerk()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsVoorschrijfprIdentificerendeVelden object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsVoorschrijfprIdentificerendeVeldenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsVoorschrijfprIdentificerendeVelden Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsVoorschrijfprIdentificerendeVeldenPeer::$instances[$key])) {
                return GsVoorschrijfprIdentificerendeVeldenPeer::$instances[$key];
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
        foreach (GsVoorschrijfprIdentificerendeVeldenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsVoorschrijfprIdentificerendeVeldenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_voorschrijfpr_identificerende_velden
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
        if ($row[$startcol + 2] === null && $row[$startcol + 3] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 3]));
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

        return array((int) $row[$startcol + 2], (string) $row[$startcol + 3]);
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
        $cls = GsVoorschrijfprIdentificerendeVeldenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsVoorschrijfprIdentificerendeVeldenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsVoorschrijfprIdentificerendeVeldenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsVoorschrijfprIdentificerendeVeldenPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsVoorschrijfprIdentificerendeVelden object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsVoorschrijfprIdentificerendeVeldenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsVoorschrijfprIdentificerendeVeldenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsVoorschrijfprIdentificerendeVeldenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsVoorschrijfprIdentificerendeVeldenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsVoorschrijfprIdentificerendeVeldenPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsVoorschrijfprGeneesmiddelIdentific table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsVoorschrijfprGeneesmiddelIdentific(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsVoorschrijfprIdentificerendeVeldenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsVoorschrijfprIdentificerendeVeldenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $join_behavior);

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
     * Selects a collection of GsVoorschrijfprIdentificerendeVelden objects pre-filled with their GsVoorschrijfprGeneesmiddelIdentific objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsVoorschrijfprIdentificerendeVelden objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsVoorschrijfprGeneesmiddelIdentific(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME);
        }

        GsVoorschrijfprIdentificerendeVeldenPeer::addSelectColumns($criteria);
        $startcol = GsVoorschrijfprIdentificerendeVeldenPeer::NUM_HYDRATE_COLUMNS;
        GsVoorschrijfprGeneesmiddelIdentificPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsVoorschrijfprIdentificerendeVeldenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsVoorschrijfprIdentificerendeVeldenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsVoorschrijfprIdentificerendeVeldenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsVoorschrijfprIdentificerendeVeldenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsVoorschrijfprGeneesmiddelIdentificPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsVoorschrijfprGeneesmiddelIdentificPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsVoorschrijfprGeneesmiddelIdentificPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsVoorschrijfprGeneesmiddelIdentificPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsVoorschrijfprIdentificerendeVelden) to $obj2 (GsVoorschrijfprGeneesmiddelIdentific)
                $obj2->addGsVoorschrijfprIdentificerendeVelden($obj1);

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
        $criteria->setPrimaryTableName(GsVoorschrijfprIdentificerendeVeldenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsVoorschrijfprIdentificerendeVeldenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $join_behavior);

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
     * Selects a collection of GsVoorschrijfprIdentificerendeVelden objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsVoorschrijfprIdentificerendeVelden objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME);
        }

        GsVoorschrijfprIdentificerendeVeldenPeer::addSelectColumns($criteria);
        $startcol2 = GsVoorschrijfprIdentificerendeVeldenPeer::NUM_HYDRATE_COLUMNS;

        GsVoorschrijfprGeneesmiddelIdentificPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsVoorschrijfprGeneesmiddelIdentificPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsVoorschrijfprIdentificerendeVeldenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsVoorschrijfprIdentificerendeVeldenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsVoorschrijfprIdentificerendeVeldenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsVoorschrijfprIdentificerendeVeldenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined GsVoorschrijfprGeneesmiddelIdentific rows

            $key2 = GsVoorschrijfprGeneesmiddelIdentificPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = GsVoorschrijfprGeneesmiddelIdentificPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsVoorschrijfprGeneesmiddelIdentificPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsVoorschrijfprGeneesmiddelIdentificPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (GsVoorschrijfprIdentificerendeVelden) to the collection in $obj2 (GsVoorschrijfprGeneesmiddelIdentific)
                $obj2->addGsVoorschrijfprIdentificerendeVelden($obj1);
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
        return Propel::getDatabaseMap(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME)->getTable(GsVoorschrijfprIdentificerendeVeldenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsVoorschrijfprIdentificerendeVeldenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsVoorschrijfprIdentificerendeVeldenTableMap());
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
        return GsVoorschrijfprIdentificerendeVeldenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsVoorschrijfprIdentificerendeVelden or Criteria object.
     *
     * @param      mixed $values Criteria or GsVoorschrijfprIdentificerendeVelden object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsVoorschrijfprIdentificerendeVelden object
        }


        // Set the correct dbName
        $criteria->setDbName(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsVoorschrijfprIdentificerendeVelden or Criteria object.
     *
     * @param      mixed $values Criteria or GsVoorschrijfprIdentificerendeVelden object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE);
            $value = $criteria->remove(GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE);
            if ($value) {
                $selectCriteria->add(GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsVoorschrijfprIdentificerendeVeldenPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsVoorschrijfprIdentificerendeVeldenPeer::IDENTIFICEREND_KENMERK);
            $value = $criteria->remove(GsVoorschrijfprIdentificerendeVeldenPeer::IDENTIFICEREND_KENMERK);
            if ($value) {
                $selectCriteria->add(GsVoorschrijfprIdentificerendeVeldenPeer::IDENTIFICEREND_KENMERK, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsVoorschrijfprIdentificerendeVeldenPeer::TABLE_NAME);
            }

        } else { // $values is GsVoorschrijfprIdentificerendeVelden object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_voorschrijfpr_identificerende_velden table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsVoorschrijfprIdentificerendeVeldenPeer::TABLE_NAME, $con, GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsVoorschrijfprIdentificerendeVeldenPeer::clearInstancePool();
            GsVoorschrijfprIdentificerendeVeldenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsVoorschrijfprIdentificerendeVelden or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsVoorschrijfprIdentificerendeVelden object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsVoorschrijfprIdentificerendeVeldenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsVoorschrijfprIdentificerendeVelden) { // it's a model object
            // invalidate the cache for this single object
            GsVoorschrijfprIdentificerendeVeldenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsVoorschrijfprIdentificerendeVeldenPeer::IDENTIFICEREND_KENMERK, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsVoorschrijfprIdentificerendeVeldenPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsVoorschrijfprIdentificerendeVeldenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsVoorschrijfprIdentificerendeVelden object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsVoorschrijfprIdentificerendeVelden $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsVoorschrijfprIdentificerendeVeldenPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME, GsVoorschrijfprIdentificerendeVeldenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $prkcode
     * @param   string $identificerend_kenmerk
     * @param      PropelPDO $con
     * @return GsVoorschrijfprIdentificerendeVelden
     */
    public static function retrieveByPK($prkcode, $identificerend_kenmerk, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $prkcode, (string) $identificerend_kenmerk));
         if (null !== ($obj = GsVoorschrijfprIdentificerendeVeldenPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME);
        $criteria->add(GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE, $prkcode);
        $criteria->add(GsVoorschrijfprIdentificerendeVeldenPeer::IDENTIFICEREND_KENMERK, $identificerend_kenmerk);
        $v = GsVoorschrijfprIdentificerendeVeldenPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsVoorschrijfprIdentificerendeVeldenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsVoorschrijfprIdentificerendeVeldenPeer::buildTableMap();

