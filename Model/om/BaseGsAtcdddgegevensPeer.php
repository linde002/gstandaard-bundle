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
use PharmaIntelligence\GstandaardBundle\Model\GsAtcdddgegevens;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcdddgegevensPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsAtcdddgegevensTableMap;

abstract class BaseGsAtcdddgegevensPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_atcdddgegevens';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAtcdddgegevens';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsAtcdddgegevensTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_atcdddgegevens.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_atcdddgegevens.mutatiekode';

    /** the column name for the atccode field */
    const ATCCODE = 'gs_atcdddgegevens.atccode';

    /** the column name for the atcvolgnummer field */
    const ATCVOLGNUMMER = 'gs_atcdddgegevens.atcvolgnummer';

    /** the column name for the atcnederlandse_omschrijving field */
    const ATCNEDERLANDSE_OMSCHRIJVING = 'gs_atcdddgegevens.atcnederlandse_omschrijving';

    /** the column name for the atcindicator field */
    const ATCINDICATOR = 'gs_atcdddgegevens.atcindicator';

    /** the column name for the selectiekode_voor_dubbelmedicatie field */
    const SELECTIEKODE_VOOR_DUBBELMEDICATIE = 'gs_atcdddgegevens.selectiekode_voor_dubbelmedicatie';

    /** the column name for the aantal_dddclusters field */
    const AANTAL_DDDCLUSTERS = 'gs_atcdddgegevens.aantal_dddclusters';

    /** the column name for the dddaantal field */
    const DDDAANTAL = 'gs_atcdddgegevens.dddaantal';

    /** the column name for the dddeenheid field */
    const DDDEENHEID = 'gs_atcdddgegevens.dddeenheid';

    /** the column name for the dddtoedieningsweg_kode field */
    const DDDTOEDIENINGSWEG_KODE = 'gs_atcdddgegevens.dddtoedieningsweg_kode';

    /** the column name for the dddindicator field */
    const DDDINDICATOR = 'gs_atcdddgegevens.dddindicator';

    /** the column name for the dddstatusaanduiding field */
    const DDDSTATUSAANDUIDING = 'gs_atcdddgegevens.dddstatusaanduiding';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsAtcdddgegevens objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsAtcdddgegevens[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsAtcdddgegevensPeer::$fieldNames[GsAtcdddgegevensPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Atccode', 'Atcvolgnummer', 'AtcnederlandseOmschrijving', 'Atcindicator', 'SelectiekodeVoorDubbelmedicatie', 'AantalDddclusters', 'Dddaantal', 'Dddeenheid', 'DddtoedieningswegKode', 'Dddindicator', 'Dddstatusaanduiding', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'atccode', 'atcvolgnummer', 'atcnederlandseOmschrijving', 'atcindicator', 'selectiekodeVoorDubbelmedicatie', 'aantalDddclusters', 'dddaantal', 'dddeenheid', 'dddtoedieningswegKode', 'dddindicator', 'dddstatusaanduiding', ),
        BasePeer::TYPE_COLNAME => array (GsAtcdddgegevensPeer::BESTANDNUMMER, GsAtcdddgegevensPeer::MUTATIEKODE, GsAtcdddgegevensPeer::ATCCODE, GsAtcdddgegevensPeer::ATCVOLGNUMMER, GsAtcdddgegevensPeer::ATCNEDERLANDSE_OMSCHRIJVING, GsAtcdddgegevensPeer::ATCINDICATOR, GsAtcdddgegevensPeer::SELECTIEKODE_VOOR_DUBBELMEDICATIE, GsAtcdddgegevensPeer::AANTAL_DDDCLUSTERS, GsAtcdddgegevensPeer::DDDAANTAL, GsAtcdddgegevensPeer::DDDEENHEID, GsAtcdddgegevensPeer::DDDTOEDIENINGSWEG_KODE, GsAtcdddgegevensPeer::DDDINDICATOR, GsAtcdddgegevensPeer::DDDSTATUSAANDUIDING, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'ATCCODE', 'ATCVOLGNUMMER', 'ATCNEDERLANDSE_OMSCHRIJVING', 'ATCINDICATOR', 'SELECTIEKODE_VOOR_DUBBELMEDICATIE', 'AANTAL_DDDCLUSTERS', 'DDDAANTAL', 'DDDEENHEID', 'DDDTOEDIENINGSWEG_KODE', 'DDDINDICATOR', 'DDDSTATUSAANDUIDING', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'atccode', 'atcvolgnummer', 'atcnederlandse_omschrijving', 'atcindicator', 'selectiekode_voor_dubbelmedicatie', 'aantal_dddclusters', 'dddaantal', 'dddeenheid', 'dddtoedieningsweg_kode', 'dddindicator', 'dddstatusaanduiding', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsAtcdddgegevensPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Atccode' => 2, 'Atcvolgnummer' => 3, 'AtcnederlandseOmschrijving' => 4, 'Atcindicator' => 5, 'SelectiekodeVoorDubbelmedicatie' => 6, 'AantalDddclusters' => 7, 'Dddaantal' => 8, 'Dddeenheid' => 9, 'DddtoedieningswegKode' => 10, 'Dddindicator' => 11, 'Dddstatusaanduiding' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'atccode' => 2, 'atcvolgnummer' => 3, 'atcnederlandseOmschrijving' => 4, 'atcindicator' => 5, 'selectiekodeVoorDubbelmedicatie' => 6, 'aantalDddclusters' => 7, 'dddaantal' => 8, 'dddeenheid' => 9, 'dddtoedieningswegKode' => 10, 'dddindicator' => 11, 'dddstatusaanduiding' => 12, ),
        BasePeer::TYPE_COLNAME => array (GsAtcdddgegevensPeer::BESTANDNUMMER => 0, GsAtcdddgegevensPeer::MUTATIEKODE => 1, GsAtcdddgegevensPeer::ATCCODE => 2, GsAtcdddgegevensPeer::ATCVOLGNUMMER => 3, GsAtcdddgegevensPeer::ATCNEDERLANDSE_OMSCHRIJVING => 4, GsAtcdddgegevensPeer::ATCINDICATOR => 5, GsAtcdddgegevensPeer::SELECTIEKODE_VOOR_DUBBELMEDICATIE => 6, GsAtcdddgegevensPeer::AANTAL_DDDCLUSTERS => 7, GsAtcdddgegevensPeer::DDDAANTAL => 8, GsAtcdddgegevensPeer::DDDEENHEID => 9, GsAtcdddgegevensPeer::DDDTOEDIENINGSWEG_KODE => 10, GsAtcdddgegevensPeer::DDDINDICATOR => 11, GsAtcdddgegevensPeer::DDDSTATUSAANDUIDING => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'ATCCODE' => 2, 'ATCVOLGNUMMER' => 3, 'ATCNEDERLANDSE_OMSCHRIJVING' => 4, 'ATCINDICATOR' => 5, 'SELECTIEKODE_VOOR_DUBBELMEDICATIE' => 6, 'AANTAL_DDDCLUSTERS' => 7, 'DDDAANTAL' => 8, 'DDDEENHEID' => 9, 'DDDTOEDIENINGSWEG_KODE' => 10, 'DDDINDICATOR' => 11, 'DDDSTATUSAANDUIDING' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'atccode' => 2, 'atcvolgnummer' => 3, 'atcnederlandse_omschrijving' => 4, 'atcindicator' => 5, 'selectiekode_voor_dubbelmedicatie' => 6, 'aantal_dddclusters' => 7, 'dddaantal' => 8, 'dddeenheid' => 9, 'dddtoedieningsweg_kode' => 10, 'dddindicator' => 11, 'dddstatusaanduiding' => 12, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
        $toNames = GsAtcdddgegevensPeer::getFieldNames($toType);
        $key = isset(GsAtcdddgegevensPeer::$fieldKeys[$fromType][$name]) ? GsAtcdddgegevensPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsAtcdddgegevensPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsAtcdddgegevensPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsAtcdddgegevensPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsAtcdddgegevensPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsAtcdddgegevensPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsAtcdddgegevensPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsAtcdddgegevensPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsAtcdddgegevensPeer::ATCCODE);
            $criteria->addSelectColumn(GsAtcdddgegevensPeer::ATCVOLGNUMMER);
            $criteria->addSelectColumn(GsAtcdddgegevensPeer::ATCNEDERLANDSE_OMSCHRIJVING);
            $criteria->addSelectColumn(GsAtcdddgegevensPeer::ATCINDICATOR);
            $criteria->addSelectColumn(GsAtcdddgegevensPeer::SELECTIEKODE_VOOR_DUBBELMEDICATIE);
            $criteria->addSelectColumn(GsAtcdddgegevensPeer::AANTAL_DDDCLUSTERS);
            $criteria->addSelectColumn(GsAtcdddgegevensPeer::DDDAANTAL);
            $criteria->addSelectColumn(GsAtcdddgegevensPeer::DDDEENHEID);
            $criteria->addSelectColumn(GsAtcdddgegevensPeer::DDDTOEDIENINGSWEG_KODE);
            $criteria->addSelectColumn(GsAtcdddgegevensPeer::DDDINDICATOR);
            $criteria->addSelectColumn(GsAtcdddgegevensPeer::DDDSTATUSAANDUIDING);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.atccode');
            $criteria->addSelectColumn($alias . '.atcvolgnummer');
            $criteria->addSelectColumn($alias . '.atcnederlandse_omschrijving');
            $criteria->addSelectColumn($alias . '.atcindicator');
            $criteria->addSelectColumn($alias . '.selectiekode_voor_dubbelmedicatie');
            $criteria->addSelectColumn($alias . '.aantal_dddclusters');
            $criteria->addSelectColumn($alias . '.dddaantal');
            $criteria->addSelectColumn($alias . '.dddeenheid');
            $criteria->addSelectColumn($alias . '.dddtoedieningsweg_kode');
            $criteria->addSelectColumn($alias . '.dddindicator');
            $criteria->addSelectColumn($alias . '.dddstatusaanduiding');
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
        $criteria->setPrimaryTableName(GsAtcdddgegevensPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsAtcdddgegevensPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsAtcdddgegevensPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsAtcdddgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsAtcdddgegevens
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsAtcdddgegevensPeer::doSelect($critcopy, $con);
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
        return GsAtcdddgegevensPeer::populateObjects(GsAtcdddgegevensPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsAtcdddgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsAtcdddgegevensPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsAtcdddgegevensPeer::DATABASE_NAME);

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
     * @param GsAtcdddgegevens $obj A GsAtcdddgegevens object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getAtccode(), (string) $obj->getAtcvolgnummer()));
            } // if key === null
            GsAtcdddgegevensPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsAtcdddgegevens object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsAtcdddgegevens) {
                $key = serialize(array((string) $value->getAtccode(), (string) $value->getAtcvolgnummer()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsAtcdddgegevens object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsAtcdddgegevensPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsAtcdddgegevens Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsAtcdddgegevensPeer::$instances[$key])) {
                return GsAtcdddgegevensPeer::$instances[$key];
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
        foreach (GsAtcdddgegevensPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsAtcdddgegevensPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_atcdddgegevens
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

        return array((string) $row[$startcol + 2], (int) $row[$startcol + 3]);
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
        $cls = GsAtcdddgegevensPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsAtcdddgegevensPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsAtcdddgegevensPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsAtcdddgegevensPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsAtcdddgegevens object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsAtcdddgegevensPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsAtcdddgegevensPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsAtcdddgegevensPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsAtcdddgegevensPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsAtcdddgegevensPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(GsAtcdddgegevensPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsAtcdddgegevensPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsAtcdddgegevensPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsAtcdddgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsAtcdddgegevensPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

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
     * Selects a collection of GsAtcdddgegevens objects pre-filled with their GsAtcCodes objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsAtcdddgegevens objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsAtcCodes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsAtcdddgegevensPeer::DATABASE_NAME);
        }

        GsAtcdddgegevensPeer::addSelectColumns($criteria);
        $startcol = GsAtcdddgegevensPeer::NUM_HYDRATE_COLUMNS;
        GsAtcCodesPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsAtcdddgegevensPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsAtcdddgegevensPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsAtcdddgegevensPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsAtcdddgegevensPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsAtcdddgegevensPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsAtcdddgegevens) to $obj2 (GsAtcCodes)
                $obj2->addGsAtcdddgegevens($obj1);

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
        $criteria->setPrimaryTableName(GsAtcdddgegevensPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsAtcdddgegevensPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsAtcdddgegevensPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsAtcdddgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsAtcdddgegevensPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

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
     * Selects a collection of GsAtcdddgegevens objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsAtcdddgegevens objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsAtcdddgegevensPeer::DATABASE_NAME);
        }

        GsAtcdddgegevensPeer::addSelectColumns($criteria);
        $startcol2 = GsAtcdddgegevensPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsAtcdddgegevensPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsAtcdddgegevensPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsAtcdddgegevensPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsAtcdddgegevensPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsAtcdddgegevensPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsAtcdddgegevens) to the collection in $obj2 (GsAtcCodes)
                $obj2->addGsAtcdddgegevens($obj1);
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
        return Propel::getDatabaseMap(GsAtcdddgegevensPeer::DATABASE_NAME)->getTable(GsAtcdddgegevensPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsAtcdddgegevensPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsAtcdddgegevensPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsAtcdddgegevensTableMap());
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
        return GsAtcdddgegevensPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsAtcdddgegevens or Criteria object.
     *
     * @param      mixed $values Criteria or GsAtcdddgegevens object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsAtcdddgegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsAtcdddgegevens object
        }


        // Set the correct dbName
        $criteria->setDbName(GsAtcdddgegevensPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsAtcdddgegevens or Criteria object.
     *
     * @param      mixed $values Criteria or GsAtcdddgegevens object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsAtcdddgegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsAtcdddgegevensPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsAtcdddgegevensPeer::ATCCODE);
            $value = $criteria->remove(GsAtcdddgegevensPeer::ATCCODE);
            if ($value) {
                $selectCriteria->add(GsAtcdddgegevensPeer::ATCCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsAtcdddgegevensPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsAtcdddgegevensPeer::ATCVOLGNUMMER);
            $value = $criteria->remove(GsAtcdddgegevensPeer::ATCVOLGNUMMER);
            if ($value) {
                $selectCriteria->add(GsAtcdddgegevensPeer::ATCVOLGNUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsAtcdddgegevensPeer::TABLE_NAME);
            }

        } else { // $values is GsAtcdddgegevens object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsAtcdddgegevensPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_atcdddgegevens table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsAtcdddgegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsAtcdddgegevensPeer::TABLE_NAME, $con, GsAtcdddgegevensPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsAtcdddgegevensPeer::clearInstancePool();
            GsAtcdddgegevensPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsAtcdddgegevens or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsAtcdddgegevens object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsAtcdddgegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsAtcdddgegevensPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsAtcdddgegevens) { // it's a model object
            // invalidate the cache for this single object
            GsAtcdddgegevensPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsAtcdddgegevensPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsAtcdddgegevensPeer::ATCCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsAtcdddgegevensPeer::ATCVOLGNUMMER, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsAtcdddgegevensPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsAtcdddgegevensPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsAtcdddgegevensPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsAtcdddgegevens object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsAtcdddgegevens $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsAtcdddgegevensPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsAtcdddgegevensPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsAtcdddgegevensPeer::DATABASE_NAME, GsAtcdddgegevensPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   string $atccode
     * @param   int $atcvolgnummer
     * @param      PropelPDO $con
     * @return GsAtcdddgegevens
     */
    public static function retrieveByPK($atccode, $atcvolgnummer, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $atccode, (string) $atcvolgnummer));
         if (null !== ($obj = GsAtcdddgegevensPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsAtcdddgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsAtcdddgegevensPeer::DATABASE_NAME);
        $criteria->add(GsAtcdddgegevensPeer::ATCCODE, $atccode);
        $criteria->add(GsAtcdddgegevensPeer::ATCVOLGNUMMER, $atcvolgnummer);
        $v = GsAtcdddgegevensPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsAtcdddgegevensPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsAtcdddgegevensPeer::buildTableMap();

