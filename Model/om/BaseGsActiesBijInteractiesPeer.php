<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsActiesBijInteracties;
use PharmaIntelligence\GstandaardBundle\Model\GsActiesBijInteractiesPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsActiesBijInteractiesTableMap;

abstract class BaseGsActiesBijInteractiesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_acties_bij_interacties';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsActiesBijInteracties';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsActiesBijInteractiesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_acties_bij_interacties.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_acties_bij_interacties.mutatiekode';

    /** the column name for the interactiewaarschuwing_code field */
    const INTERACTIEWAARSCHUWING_CODE = 'gs_acties_bij_interacties.interactiewaarschuwing_code';

    /** the column name for the volgnummer_actie field */
    const VOLGNUMMER_ACTIE = 'gs_acties_bij_interacties.volgnummer_actie';

    /** the column name for the acties_bij_interactiesthes_130 field */
    const ACTIES_BIJ_INTERACTIESTHES_130 = 'gs_acties_bij_interacties.acties_bij_interactiesthes_130';

    /** the column name for the actie_bij_interactie field */
    const ACTIE_BIJ_INTERACTIE = 'gs_acties_bij_interacties.actie_bij_interactie';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsActiesBijInteracties objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsActiesBijInteracties[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsActiesBijInteractiesPeer::$fieldNames[GsActiesBijInteractiesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'InteractiewaarschuwingCode', 'VolgnummerActie', 'ActiesBijInteractiesthes130', 'ActieBijInteractie', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'interactiewaarschuwingCode', 'volgnummerActie', 'actiesBijInteractiesthes130', 'actieBijInteractie', ),
        BasePeer::TYPE_COLNAME => array (GsActiesBijInteractiesPeer::BESTANDNUMMER, GsActiesBijInteractiesPeer::MUTATIEKODE, GsActiesBijInteractiesPeer::INTERACTIEWAARSCHUWING_CODE, GsActiesBijInteractiesPeer::VOLGNUMMER_ACTIE, GsActiesBijInteractiesPeer::ACTIES_BIJ_INTERACTIESTHES_130, GsActiesBijInteractiesPeer::ACTIE_BIJ_INTERACTIE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'INTERACTIEWAARSCHUWING_CODE', 'VOLGNUMMER_ACTIE', 'ACTIES_BIJ_INTERACTIESTHES_130', 'ACTIE_BIJ_INTERACTIE', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'interactiewaarschuwing_code', 'volgnummer_actie', 'acties_bij_interactiesthes_130', 'actie_bij_interactie', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsActiesBijInteractiesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'InteractiewaarschuwingCode' => 2, 'VolgnummerActie' => 3, 'ActiesBijInteractiesthes130' => 4, 'ActieBijInteractie' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'interactiewaarschuwingCode' => 2, 'volgnummerActie' => 3, 'actiesBijInteractiesthes130' => 4, 'actieBijInteractie' => 5, ),
        BasePeer::TYPE_COLNAME => array (GsActiesBijInteractiesPeer::BESTANDNUMMER => 0, GsActiesBijInteractiesPeer::MUTATIEKODE => 1, GsActiesBijInteractiesPeer::INTERACTIEWAARSCHUWING_CODE => 2, GsActiesBijInteractiesPeer::VOLGNUMMER_ACTIE => 3, GsActiesBijInteractiesPeer::ACTIES_BIJ_INTERACTIESTHES_130 => 4, GsActiesBijInteractiesPeer::ACTIE_BIJ_INTERACTIE => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'INTERACTIEWAARSCHUWING_CODE' => 2, 'VOLGNUMMER_ACTIE' => 3, 'ACTIES_BIJ_INTERACTIESTHES_130' => 4, 'ACTIE_BIJ_INTERACTIE' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'interactiewaarschuwing_code' => 2, 'volgnummer_actie' => 3, 'acties_bij_interactiesthes_130' => 4, 'actie_bij_interactie' => 5, ),
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
        $toNames = GsActiesBijInteractiesPeer::getFieldNames($toType);
        $key = isset(GsActiesBijInteractiesPeer::$fieldKeys[$fromType][$name]) ? GsActiesBijInteractiesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsActiesBijInteractiesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsActiesBijInteractiesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsActiesBijInteractiesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsActiesBijInteractiesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsActiesBijInteractiesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsActiesBijInteractiesPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsActiesBijInteractiesPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsActiesBijInteractiesPeer::INTERACTIEWAARSCHUWING_CODE);
            $criteria->addSelectColumn(GsActiesBijInteractiesPeer::VOLGNUMMER_ACTIE);
            $criteria->addSelectColumn(GsActiesBijInteractiesPeer::ACTIES_BIJ_INTERACTIESTHES_130);
            $criteria->addSelectColumn(GsActiesBijInteractiesPeer::ACTIE_BIJ_INTERACTIE);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.interactiewaarschuwing_code');
            $criteria->addSelectColumn($alias . '.volgnummer_actie');
            $criteria->addSelectColumn($alias . '.acties_bij_interactiesthes_130');
            $criteria->addSelectColumn($alias . '.actie_bij_interactie');
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
        $criteria->setPrimaryTableName(GsActiesBijInteractiesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsActiesBijInteractiesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsActiesBijInteractiesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsActiesBijInteractiesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsActiesBijInteracties
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsActiesBijInteractiesPeer::doSelect($critcopy, $con);
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
        return GsActiesBijInteractiesPeer::populateObjects(GsActiesBijInteractiesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsActiesBijInteractiesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsActiesBijInteractiesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsActiesBijInteractiesPeer::DATABASE_NAME);

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
     * @param GsActiesBijInteracties $obj A GsActiesBijInteracties object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getInteractiewaarschuwingCode(), (string) $obj->getVolgnummerActie()));
            } // if key === null
            GsActiesBijInteractiesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsActiesBijInteracties object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsActiesBijInteracties) {
                $key = serialize(array((string) $value->getInteractiewaarschuwingCode(), (string) $value->getVolgnummerActie()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsActiesBijInteracties object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsActiesBijInteractiesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsActiesBijInteracties Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsActiesBijInteractiesPeer::$instances[$key])) {
                return GsActiesBijInteractiesPeer::$instances[$key];
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
        foreach (GsActiesBijInteractiesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsActiesBijInteractiesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_acties_bij_interacties
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

        return array((int) $row[$startcol + 2], (int) $row[$startcol + 3]);
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
        $cls = GsActiesBijInteractiesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsActiesBijInteractiesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsActiesBijInteractiesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsActiesBijInteractiesPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsActiesBijInteracties object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsActiesBijInteractiesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsActiesBijInteractiesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsActiesBijInteractiesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsActiesBijInteractiesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsActiesBijInteractiesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsActiesBijInteractiesPeer::DATABASE_NAME)->getTable(GsActiesBijInteractiesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsActiesBijInteractiesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsActiesBijInteractiesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsActiesBijInteractiesTableMap());
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
        return GsActiesBijInteractiesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsActiesBijInteracties or Criteria object.
     *
     * @param      mixed $values Criteria or GsActiesBijInteracties object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsActiesBijInteractiesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsActiesBijInteracties object
        }


        // Set the correct dbName
        $criteria->setDbName(GsActiesBijInteractiesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsActiesBijInteracties or Criteria object.
     *
     * @param      mixed $values Criteria or GsActiesBijInteracties object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsActiesBijInteractiesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsActiesBijInteractiesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsActiesBijInteractiesPeer::INTERACTIEWAARSCHUWING_CODE);
            $value = $criteria->remove(GsActiesBijInteractiesPeer::INTERACTIEWAARSCHUWING_CODE);
            if ($value) {
                $selectCriteria->add(GsActiesBijInteractiesPeer::INTERACTIEWAARSCHUWING_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsActiesBijInteractiesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsActiesBijInteractiesPeer::VOLGNUMMER_ACTIE);
            $value = $criteria->remove(GsActiesBijInteractiesPeer::VOLGNUMMER_ACTIE);
            if ($value) {
                $selectCriteria->add(GsActiesBijInteractiesPeer::VOLGNUMMER_ACTIE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsActiesBijInteractiesPeer::TABLE_NAME);
            }

        } else { // $values is GsActiesBijInteracties object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsActiesBijInteractiesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_acties_bij_interacties table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsActiesBijInteractiesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsActiesBijInteractiesPeer::TABLE_NAME, $con, GsActiesBijInteractiesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsActiesBijInteractiesPeer::clearInstancePool();
            GsActiesBijInteractiesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsActiesBijInteracties or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsActiesBijInteracties object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsActiesBijInteractiesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsActiesBijInteractiesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsActiesBijInteracties) { // it's a model object
            // invalidate the cache for this single object
            GsActiesBijInteractiesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsActiesBijInteractiesPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsActiesBijInteractiesPeer::INTERACTIEWAARSCHUWING_CODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsActiesBijInteractiesPeer::VOLGNUMMER_ACTIE, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsActiesBijInteractiesPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsActiesBijInteractiesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsActiesBijInteractiesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsActiesBijInteracties object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsActiesBijInteracties $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsActiesBijInteractiesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsActiesBijInteractiesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsActiesBijInteractiesPeer::DATABASE_NAME, GsActiesBijInteractiesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $interactiewaarschuwing_code
     * @param   int $volgnummer_actie
     * @param      PropelPDO $con
     * @return GsActiesBijInteracties
     */
    public static function retrieveByPK($interactiewaarschuwing_code, $volgnummer_actie, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $interactiewaarschuwing_code, (string) $volgnummer_actie));
         if (null !== ($obj = GsActiesBijInteractiesPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsActiesBijInteractiesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsActiesBijInteractiesPeer::DATABASE_NAME);
        $criteria->add(GsActiesBijInteractiesPeer::INTERACTIEWAARSCHUWING_CODE, $interactiewaarschuwing_code);
        $criteria->add(GsActiesBijInteractiesPeer::VOLGNUMMER_ACTIE, $volgnummer_actie);
        $v = GsActiesBijInteractiesPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsActiesBijInteractiesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsActiesBijInteractiesPeer::buildTableMap();

