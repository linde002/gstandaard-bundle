<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsDubbelmedicatieTeksten;
use PharmaIntelligence\GstandaardBundle\Model\GsDubbelmedicatieTekstenPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsDubbelmedicatieTekstenTableMap;

abstract class BaseGsDubbelmedicatieTekstenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_dubbelmedicatie_teksten';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDubbelmedicatieTeksten';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsDubbelmedicatieTekstenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_dubbelmedicatie_teksten.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_dubbelmedicatie_teksten.mutatiekode';

    /** the column name for the dubbelmedicatiecode field */
    const DUBBELMEDICATIECODE = 'gs_dubbelmedicatie_teksten.dubbelmedicatiecode';

    /** the column name for the tekstmodule field */
    const TEKSTMODULE = 'gs_dubbelmedicatie_teksten.tekstmodule';

    /** the column name for the tekstsoort field */
    const TEKSTSOORT = 'gs_dubbelmedicatie_teksten.tekstsoort';

    /** the column name for the tekst_nivo_kode field */
    const TEKST_NIVO_KODE = 'gs_dubbelmedicatie_teksten.tekst_nivo_kode';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsDubbelmedicatieTeksten objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsDubbelmedicatieTeksten[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsDubbelmedicatieTekstenPeer::$fieldNames[GsDubbelmedicatieTekstenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Dubbelmedicatiecode', 'Tekstmodule', 'Tekstsoort', 'TekstNivoKode', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'dubbelmedicatiecode', 'tekstmodule', 'tekstsoort', 'tekstNivoKode', ),
        BasePeer::TYPE_COLNAME => array (GsDubbelmedicatieTekstenPeer::BESTANDNUMMER, GsDubbelmedicatieTekstenPeer::MUTATIEKODE, GsDubbelmedicatieTekstenPeer::DUBBELMEDICATIECODE, GsDubbelmedicatieTekstenPeer::TEKSTMODULE, GsDubbelmedicatieTekstenPeer::TEKSTSOORT, GsDubbelmedicatieTekstenPeer::TEKST_NIVO_KODE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'DUBBELMEDICATIECODE', 'TEKSTMODULE', 'TEKSTSOORT', 'TEKST_NIVO_KODE', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'dubbelmedicatiecode', 'tekstmodule', 'tekstsoort', 'tekst_nivo_kode', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsDubbelmedicatieTekstenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Dubbelmedicatiecode' => 2, 'Tekstmodule' => 3, 'Tekstsoort' => 4, 'TekstNivoKode' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'dubbelmedicatiecode' => 2, 'tekstmodule' => 3, 'tekstsoort' => 4, 'tekstNivoKode' => 5, ),
        BasePeer::TYPE_COLNAME => array (GsDubbelmedicatieTekstenPeer::BESTANDNUMMER => 0, GsDubbelmedicatieTekstenPeer::MUTATIEKODE => 1, GsDubbelmedicatieTekstenPeer::DUBBELMEDICATIECODE => 2, GsDubbelmedicatieTekstenPeer::TEKSTMODULE => 3, GsDubbelmedicatieTekstenPeer::TEKSTSOORT => 4, GsDubbelmedicatieTekstenPeer::TEKST_NIVO_KODE => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'DUBBELMEDICATIECODE' => 2, 'TEKSTMODULE' => 3, 'TEKSTSOORT' => 4, 'TEKST_NIVO_KODE' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'dubbelmedicatiecode' => 2, 'tekstmodule' => 3, 'tekstsoort' => 4, 'tekst_nivo_kode' => 5, ),
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
        $toNames = GsDubbelmedicatieTekstenPeer::getFieldNames($toType);
        $key = isset(GsDubbelmedicatieTekstenPeer::$fieldKeys[$fromType][$name]) ? GsDubbelmedicatieTekstenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsDubbelmedicatieTekstenPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsDubbelmedicatieTekstenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsDubbelmedicatieTekstenPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsDubbelmedicatieTekstenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsDubbelmedicatieTekstenPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsDubbelmedicatieTekstenPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsDubbelmedicatieTekstenPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsDubbelmedicatieTekstenPeer::DUBBELMEDICATIECODE);
            $criteria->addSelectColumn(GsDubbelmedicatieTekstenPeer::TEKSTMODULE);
            $criteria->addSelectColumn(GsDubbelmedicatieTekstenPeer::TEKSTSOORT);
            $criteria->addSelectColumn(GsDubbelmedicatieTekstenPeer::TEKST_NIVO_KODE);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.dubbelmedicatiecode');
            $criteria->addSelectColumn($alias . '.tekstmodule');
            $criteria->addSelectColumn($alias . '.tekstsoort');
            $criteria->addSelectColumn($alias . '.tekst_nivo_kode');
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
        $criteria->setPrimaryTableName(GsDubbelmedicatieTekstenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsDubbelmedicatieTekstenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsDubbelmedicatieTekstenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsDubbelmedicatieTekstenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsDubbelmedicatieTeksten
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsDubbelmedicatieTekstenPeer::doSelect($critcopy, $con);
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
        return GsDubbelmedicatieTekstenPeer::populateObjects(GsDubbelmedicatieTekstenPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsDubbelmedicatieTekstenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsDubbelmedicatieTekstenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsDubbelmedicatieTekstenPeer::DATABASE_NAME);

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
     * @param GsDubbelmedicatieTeksten $obj A GsDubbelmedicatieTeksten object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getDubbelmedicatiecode(), (string) $obj->getTekstsoort(), (string) $obj->getTekstNivoKode()));
            } // if key === null
            GsDubbelmedicatieTekstenPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsDubbelmedicatieTeksten object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsDubbelmedicatieTeksten) {
                $key = serialize(array((string) $value->getDubbelmedicatiecode(), (string) $value->getTekstsoort(), (string) $value->getTekstNivoKode()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsDubbelmedicatieTeksten object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsDubbelmedicatieTekstenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsDubbelmedicatieTeksten Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsDubbelmedicatieTekstenPeer::$instances[$key])) {
                return GsDubbelmedicatieTekstenPeer::$instances[$key];
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
        foreach (GsDubbelmedicatieTekstenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsDubbelmedicatieTekstenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_dubbelmedicatie_teksten
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
        if ($row[$startcol + 2] === null && $row[$startcol + 4] === null && $row[$startcol + 5] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 4], (string) $row[$startcol + 5]));
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

        return array((int) $row[$startcol + 2], (int) $row[$startcol + 4], (int) $row[$startcol + 5]);
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
        $cls = GsDubbelmedicatieTekstenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsDubbelmedicatieTekstenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsDubbelmedicatieTekstenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsDubbelmedicatieTekstenPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsDubbelmedicatieTeksten object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsDubbelmedicatieTekstenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsDubbelmedicatieTekstenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsDubbelmedicatieTekstenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsDubbelmedicatieTekstenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsDubbelmedicatieTekstenPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsDubbelmedicatieTekstenPeer::DATABASE_NAME)->getTable(GsDubbelmedicatieTekstenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsDubbelmedicatieTekstenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsDubbelmedicatieTekstenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsDubbelmedicatieTekstenTableMap());
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
        return GsDubbelmedicatieTekstenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsDubbelmedicatieTeksten or Criteria object.
     *
     * @param      mixed $values Criteria or GsDubbelmedicatieTeksten object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsDubbelmedicatieTekstenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsDubbelmedicatieTeksten object
        }


        // Set the correct dbName
        $criteria->setDbName(GsDubbelmedicatieTekstenPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsDubbelmedicatieTeksten or Criteria object.
     *
     * @param      mixed $values Criteria or GsDubbelmedicatieTeksten object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsDubbelmedicatieTekstenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsDubbelmedicatieTekstenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsDubbelmedicatieTekstenPeer::DUBBELMEDICATIECODE);
            $value = $criteria->remove(GsDubbelmedicatieTekstenPeer::DUBBELMEDICATIECODE);
            if ($value) {
                $selectCriteria->add(GsDubbelmedicatieTekstenPeer::DUBBELMEDICATIECODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsDubbelmedicatieTekstenPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsDubbelmedicatieTekstenPeer::TEKSTSOORT);
            $value = $criteria->remove(GsDubbelmedicatieTekstenPeer::TEKSTSOORT);
            if ($value) {
                $selectCriteria->add(GsDubbelmedicatieTekstenPeer::TEKSTSOORT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsDubbelmedicatieTekstenPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsDubbelmedicatieTekstenPeer::TEKST_NIVO_KODE);
            $value = $criteria->remove(GsDubbelmedicatieTekstenPeer::TEKST_NIVO_KODE);
            if ($value) {
                $selectCriteria->add(GsDubbelmedicatieTekstenPeer::TEKST_NIVO_KODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsDubbelmedicatieTekstenPeer::TABLE_NAME);
            }

        } else { // $values is GsDubbelmedicatieTeksten object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsDubbelmedicatieTekstenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_dubbelmedicatie_teksten table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsDubbelmedicatieTekstenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsDubbelmedicatieTekstenPeer::TABLE_NAME, $con, GsDubbelmedicatieTekstenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsDubbelmedicatieTekstenPeer::clearInstancePool();
            GsDubbelmedicatieTekstenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsDubbelmedicatieTeksten or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsDubbelmedicatieTeksten object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsDubbelmedicatieTekstenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsDubbelmedicatieTekstenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsDubbelmedicatieTeksten) { // it's a model object
            // invalidate the cache for this single object
            GsDubbelmedicatieTekstenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsDubbelmedicatieTekstenPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsDubbelmedicatieTekstenPeer::DUBBELMEDICATIECODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsDubbelmedicatieTekstenPeer::TEKSTSOORT, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(GsDubbelmedicatieTekstenPeer::TEKST_NIVO_KODE, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsDubbelmedicatieTekstenPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsDubbelmedicatieTekstenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsDubbelmedicatieTekstenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsDubbelmedicatieTeksten object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsDubbelmedicatieTeksten $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsDubbelmedicatieTekstenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsDubbelmedicatieTekstenPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsDubbelmedicatieTekstenPeer::DATABASE_NAME, GsDubbelmedicatieTekstenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $dubbelmedicatiecode
     * @param   int $tekstsoort
     * @param   int $tekst_nivo_kode
     * @param      PropelPDO $con
     * @return GsDubbelmedicatieTeksten
     */
    public static function retrieveByPK($dubbelmedicatiecode, $tekstsoort, $tekst_nivo_kode, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $dubbelmedicatiecode, (string) $tekstsoort, (string) $tekst_nivo_kode));
         if (null !== ($obj = GsDubbelmedicatieTekstenPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsDubbelmedicatieTekstenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsDubbelmedicatieTekstenPeer::DATABASE_NAME);
        $criteria->add(GsDubbelmedicatieTekstenPeer::DUBBELMEDICATIECODE, $dubbelmedicatiecode);
        $criteria->add(GsDubbelmedicatieTekstenPeer::TEKSTSOORT, $tekstsoort);
        $criteria->add(GsDubbelmedicatieTekstenPeer::TEKST_NIVO_KODE, $tekst_nivo_kode);
        $v = GsDubbelmedicatieTekstenPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsDubbelmedicatieTekstenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsDubbelmedicatieTekstenPeer::buildTableMap();

