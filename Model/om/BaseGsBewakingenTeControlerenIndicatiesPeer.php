<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsBewakingenTeControlerenIndicaties;
use PharmaIntelligence\GstandaardBundle\Model\GsBewakingenTeControlerenIndicatiesPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsBewakingenTeControlerenIndicatiesTableMap;

abstract class BaseGsBewakingenTeControlerenIndicatiesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_bewakingen_te_controleren_indicaties';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsBewakingenTeControlerenIndicaties';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsBewakingenTeControlerenIndicatiesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 7;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 7;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_bewakingen_te_controleren_indicaties.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_bewakingen_te_controleren_indicaties.mutatiekode';

    /** the column name for the prkcode field */
    const PRKCODE = 'gs_bewakingen_te_controleren_indicaties.prkcode';

    /** the column name for the handelsproduktkode field */
    const HANDELSPRODUKTKODE = 'gs_bewakingen_te_controleren_indicaties.handelsproduktkode';

    /** the column name for the thesnr_contra_indicatie field */
    const THESNR_CONTRA_INDICATIE = 'gs_bewakingen_te_controleren_indicaties.thesnr_contra_indicatie';

    /** the column name for the indicatie_aard field */
    const INDICATIE_AARD = 'gs_bewakingen_te_controleren_indicaties.indicatie_aard';

    /** the column name for the bewakingscode_ci field */
    const BEWAKINGSCODE_CI = 'gs_bewakingen_te_controleren_indicaties.bewakingscode_ci';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsBewakingenTeControlerenIndicaties objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsBewakingenTeControlerenIndicaties[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsBewakingenTeControlerenIndicatiesPeer::$fieldNames[GsBewakingenTeControlerenIndicatiesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Prkcode', 'Handelsproduktkode', 'ThesnrContraIndicatie', 'IndicatieAard', 'BewakingscodeCi', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'prkcode', 'handelsproduktkode', 'thesnrContraIndicatie', 'indicatieAard', 'bewakingscodeCi', ),
        BasePeer::TYPE_COLNAME => array (GsBewakingenTeControlerenIndicatiesPeer::BESTANDNUMMER, GsBewakingenTeControlerenIndicatiesPeer::MUTATIEKODE, GsBewakingenTeControlerenIndicatiesPeer::PRKCODE, GsBewakingenTeControlerenIndicatiesPeer::HANDELSPRODUKTKODE, GsBewakingenTeControlerenIndicatiesPeer::THESNR_CONTRA_INDICATIE, GsBewakingenTeControlerenIndicatiesPeer::INDICATIE_AARD, GsBewakingenTeControlerenIndicatiesPeer::BEWAKINGSCODE_CI, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'PRKCODE', 'HANDELSPRODUKTKODE', 'THESNR_CONTRA_INDICATIE', 'INDICATIE_AARD', 'BEWAKINGSCODE_CI', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'prkcode', 'handelsproduktkode', 'thesnr_contra_indicatie', 'indicatie_aard', 'bewakingscode_ci', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsBewakingenTeControlerenIndicatiesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Prkcode' => 2, 'Handelsproduktkode' => 3, 'ThesnrContraIndicatie' => 4, 'IndicatieAard' => 5, 'BewakingscodeCi' => 6, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'prkcode' => 2, 'handelsproduktkode' => 3, 'thesnrContraIndicatie' => 4, 'indicatieAard' => 5, 'bewakingscodeCi' => 6, ),
        BasePeer::TYPE_COLNAME => array (GsBewakingenTeControlerenIndicatiesPeer::BESTANDNUMMER => 0, GsBewakingenTeControlerenIndicatiesPeer::MUTATIEKODE => 1, GsBewakingenTeControlerenIndicatiesPeer::PRKCODE => 2, GsBewakingenTeControlerenIndicatiesPeer::HANDELSPRODUKTKODE => 3, GsBewakingenTeControlerenIndicatiesPeer::THESNR_CONTRA_INDICATIE => 4, GsBewakingenTeControlerenIndicatiesPeer::INDICATIE_AARD => 5, GsBewakingenTeControlerenIndicatiesPeer::BEWAKINGSCODE_CI => 6, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'PRKCODE' => 2, 'HANDELSPRODUKTKODE' => 3, 'THESNR_CONTRA_INDICATIE' => 4, 'INDICATIE_AARD' => 5, 'BEWAKINGSCODE_CI' => 6, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'prkcode' => 2, 'handelsproduktkode' => 3, 'thesnr_contra_indicatie' => 4, 'indicatie_aard' => 5, 'bewakingscode_ci' => 6, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
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
        $toNames = GsBewakingenTeControlerenIndicatiesPeer::getFieldNames($toType);
        $key = isset(GsBewakingenTeControlerenIndicatiesPeer::$fieldKeys[$fromType][$name]) ? GsBewakingenTeControlerenIndicatiesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsBewakingenTeControlerenIndicatiesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsBewakingenTeControlerenIndicatiesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsBewakingenTeControlerenIndicatiesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsBewakingenTeControlerenIndicatiesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsBewakingenTeControlerenIndicatiesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsBewakingenTeControlerenIndicatiesPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsBewakingenTeControlerenIndicatiesPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsBewakingenTeControlerenIndicatiesPeer::PRKCODE);
            $criteria->addSelectColumn(GsBewakingenTeControlerenIndicatiesPeer::HANDELSPRODUKTKODE);
            $criteria->addSelectColumn(GsBewakingenTeControlerenIndicatiesPeer::THESNR_CONTRA_INDICATIE);
            $criteria->addSelectColumn(GsBewakingenTeControlerenIndicatiesPeer::INDICATIE_AARD);
            $criteria->addSelectColumn(GsBewakingenTeControlerenIndicatiesPeer::BEWAKINGSCODE_CI);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.prkcode');
            $criteria->addSelectColumn($alias . '.handelsproduktkode');
            $criteria->addSelectColumn($alias . '.thesnr_contra_indicatie');
            $criteria->addSelectColumn($alias . '.indicatie_aard');
            $criteria->addSelectColumn($alias . '.bewakingscode_ci');
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
        $criteria->setPrimaryTableName(GsBewakingenTeControlerenIndicatiesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsBewakingenTeControlerenIndicatiesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsBewakingenTeControlerenIndicaties
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsBewakingenTeControlerenIndicatiesPeer::doSelect($critcopy, $con);
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
        return GsBewakingenTeControlerenIndicatiesPeer::populateObjects(GsBewakingenTeControlerenIndicatiesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsBewakingenTeControlerenIndicatiesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME);

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
     * @param GsBewakingenTeControlerenIndicaties $obj A GsBewakingenTeControlerenIndicaties object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getPrkcode(), (string) $obj->getHandelsproduktkode(), (string) $obj->getIndicatieAard(), (string) $obj->getBewakingscodeCi()));
            } // if key === null
            GsBewakingenTeControlerenIndicatiesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsBewakingenTeControlerenIndicaties object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsBewakingenTeControlerenIndicaties) {
                $key = serialize(array((string) $value->getPrkcode(), (string) $value->getHandelsproduktkode(), (string) $value->getIndicatieAard(), (string) $value->getBewakingscodeCi()));
            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsBewakingenTeControlerenIndicaties object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsBewakingenTeControlerenIndicatiesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsBewakingenTeControlerenIndicaties Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsBewakingenTeControlerenIndicatiesPeer::$instances[$key])) {
                return GsBewakingenTeControlerenIndicatiesPeer::$instances[$key];
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
        foreach (GsBewakingenTeControlerenIndicatiesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsBewakingenTeControlerenIndicatiesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_bewakingen_te_controleren_indicaties
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
        if ($row[$startcol + 2] === null && $row[$startcol + 3] === null && $row[$startcol + 5] === null && $row[$startcol + 6] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 5], (string) $row[$startcol + 6]));
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

        return array((int) $row[$startcol + 2], (int) $row[$startcol + 3], (int) $row[$startcol + 5], (int) $row[$startcol + 6]);
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
        $cls = GsBewakingenTeControlerenIndicatiesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsBewakingenTeControlerenIndicatiesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsBewakingenTeControlerenIndicatiesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsBewakingenTeControlerenIndicatiesPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsBewakingenTeControlerenIndicaties object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsBewakingenTeControlerenIndicatiesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsBewakingenTeControlerenIndicatiesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsBewakingenTeControlerenIndicatiesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsBewakingenTeControlerenIndicatiesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsBewakingenTeControlerenIndicatiesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME)->getTable(GsBewakingenTeControlerenIndicatiesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsBewakingenTeControlerenIndicatiesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsBewakingenTeControlerenIndicatiesTableMap());
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
        return GsBewakingenTeControlerenIndicatiesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsBewakingenTeControlerenIndicaties or Criteria object.
     *
     * @param      mixed $values Criteria or GsBewakingenTeControlerenIndicaties object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsBewakingenTeControlerenIndicaties object
        }


        // Set the correct dbName
        $criteria->setDbName(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsBewakingenTeControlerenIndicaties or Criteria object.
     *
     * @param      mixed $values Criteria or GsBewakingenTeControlerenIndicaties object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsBewakingenTeControlerenIndicatiesPeer::PRKCODE);
            $value = $criteria->remove(GsBewakingenTeControlerenIndicatiesPeer::PRKCODE);
            if ($value) {
                $selectCriteria->add(GsBewakingenTeControlerenIndicatiesPeer::PRKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsBewakingenTeControlerenIndicatiesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsBewakingenTeControlerenIndicatiesPeer::HANDELSPRODUKTKODE);
            $value = $criteria->remove(GsBewakingenTeControlerenIndicatiesPeer::HANDELSPRODUKTKODE);
            if ($value) {
                $selectCriteria->add(GsBewakingenTeControlerenIndicatiesPeer::HANDELSPRODUKTKODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsBewakingenTeControlerenIndicatiesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsBewakingenTeControlerenIndicatiesPeer::INDICATIE_AARD);
            $value = $criteria->remove(GsBewakingenTeControlerenIndicatiesPeer::INDICATIE_AARD);
            if ($value) {
                $selectCriteria->add(GsBewakingenTeControlerenIndicatiesPeer::INDICATIE_AARD, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsBewakingenTeControlerenIndicatiesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsBewakingenTeControlerenIndicatiesPeer::BEWAKINGSCODE_CI);
            $value = $criteria->remove(GsBewakingenTeControlerenIndicatiesPeer::BEWAKINGSCODE_CI);
            if ($value) {
                $selectCriteria->add(GsBewakingenTeControlerenIndicatiesPeer::BEWAKINGSCODE_CI, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsBewakingenTeControlerenIndicatiesPeer::TABLE_NAME);
            }

        } else { // $values is GsBewakingenTeControlerenIndicaties object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_bewakingen_te_controleren_indicaties table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsBewakingenTeControlerenIndicatiesPeer::TABLE_NAME, $con, GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsBewakingenTeControlerenIndicatiesPeer::clearInstancePool();
            GsBewakingenTeControlerenIndicatiesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsBewakingenTeControlerenIndicaties or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsBewakingenTeControlerenIndicaties object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsBewakingenTeControlerenIndicatiesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsBewakingenTeControlerenIndicaties) { // it's a model object
            // invalidate the cache for this single object
            GsBewakingenTeControlerenIndicatiesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsBewakingenTeControlerenIndicatiesPeer::PRKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsBewakingenTeControlerenIndicatiesPeer::HANDELSPRODUKTKODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(GsBewakingenTeControlerenIndicatiesPeer::INDICATIE_AARD, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(GsBewakingenTeControlerenIndicatiesPeer::BEWAKINGSCODE_CI, $value[3]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsBewakingenTeControlerenIndicatiesPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsBewakingenTeControlerenIndicatiesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsBewakingenTeControlerenIndicaties object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsBewakingenTeControlerenIndicaties $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsBewakingenTeControlerenIndicatiesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME, GsBewakingenTeControlerenIndicatiesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $prkcode
     * @param   int $handelsproduktkode
     * @param   int $indicatie_aard
     * @param   int $bewakingscode_ci
     * @param      PropelPDO $con
     * @return GsBewakingenTeControlerenIndicaties
     */
    public static function retrieveByPK($prkcode, $handelsproduktkode, $indicatie_aard, $bewakingscode_ci, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $prkcode, (string) $handelsproduktkode, (string) $indicatie_aard, (string) $bewakingscode_ci));
         if (null !== ($obj = GsBewakingenTeControlerenIndicatiesPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME);
        $criteria->add(GsBewakingenTeControlerenIndicatiesPeer::PRKCODE, $prkcode);
        $criteria->add(GsBewakingenTeControlerenIndicatiesPeer::HANDELSPRODUKTKODE, $handelsproduktkode);
        $criteria->add(GsBewakingenTeControlerenIndicatiesPeer::INDICATIE_AARD, $indicatie_aard);
        $criteria->add(GsBewakingenTeControlerenIndicatiesPeer::BEWAKINGSCODE_CI, $bewakingscode_ci);
        $v = GsBewakingenTeControlerenIndicatiesPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsBewakingenTeControlerenIndicatiesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsBewakingenTeControlerenIndicatiesPeer::buildTableMap();

