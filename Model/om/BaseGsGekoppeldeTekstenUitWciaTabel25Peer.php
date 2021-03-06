<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsGekoppeldeTekstenUitWciaTabel25;
use PharmaIntelligence\GstandaardBundle\Model\GsGekoppeldeTekstenUitWciaTabel25Peer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsGekoppeldeTekstenUitWciaTabel25TableMap;

abstract class BaseGsGekoppeldeTekstenUitWciaTabel25Peer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_gekoppelde_teksten_uit_wcia_tabel_25';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGekoppeldeTekstenUitWciaTabel25';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsGekoppeldeTekstenUitWciaTabel25TableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 5;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 5;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_gekoppelde_teksten_uit_wcia_tabel_25.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_gekoppelde_teksten_uit_wcia_tabel_25.mutatiekode';

    /** the column name for the handelsproduktkode field */
    const HANDELSPRODUKTKODE = 'gs_gekoppelde_teksten_uit_wcia_tabel_25.handelsproduktkode';

    /** the column name for the prkcode field */
    const PRKCODE = 'gs_gekoppelde_teksten_uit_wcia_tabel_25.prkcode';

    /** the column name for the uniek_nummer_aanvullende_tekst field */
    const UNIEK_NUMMER_AANVULLENDE_TEKST = 'gs_gekoppelde_teksten_uit_wcia_tabel_25.uniek_nummer_aanvullende_tekst';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsGekoppeldeTekstenUitWciaTabel25 objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsGekoppeldeTekstenUitWciaTabel25[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsGekoppeldeTekstenUitWciaTabel25Peer::$fieldNames[GsGekoppeldeTekstenUitWciaTabel25Peer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Handelsproduktkode', 'Prkcode', 'UniekNummerAanvullendeTekst', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'handelsproduktkode', 'prkcode', 'uniekNummerAanvullendeTekst', ),
        BasePeer::TYPE_COLNAME => array (GsGekoppeldeTekstenUitWciaTabel25Peer::BESTANDNUMMER, GsGekoppeldeTekstenUitWciaTabel25Peer::MUTATIEKODE, GsGekoppeldeTekstenUitWciaTabel25Peer::HANDELSPRODUKTKODE, GsGekoppeldeTekstenUitWciaTabel25Peer::PRKCODE, GsGekoppeldeTekstenUitWciaTabel25Peer::UNIEK_NUMMER_AANVULLENDE_TEKST, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'HANDELSPRODUKTKODE', 'PRKCODE', 'UNIEK_NUMMER_AANVULLENDE_TEKST', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'handelsproduktkode', 'prkcode', 'uniek_nummer_aanvullende_tekst', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsGekoppeldeTekstenUitWciaTabel25Peer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Handelsproduktkode' => 2, 'Prkcode' => 3, 'UniekNummerAanvullendeTekst' => 4, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'handelsproduktkode' => 2, 'prkcode' => 3, 'uniekNummerAanvullendeTekst' => 4, ),
        BasePeer::TYPE_COLNAME => array (GsGekoppeldeTekstenUitWciaTabel25Peer::BESTANDNUMMER => 0, GsGekoppeldeTekstenUitWciaTabel25Peer::MUTATIEKODE => 1, GsGekoppeldeTekstenUitWciaTabel25Peer::HANDELSPRODUKTKODE => 2, GsGekoppeldeTekstenUitWciaTabel25Peer::PRKCODE => 3, GsGekoppeldeTekstenUitWciaTabel25Peer::UNIEK_NUMMER_AANVULLENDE_TEKST => 4, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'HANDELSPRODUKTKODE' => 2, 'PRKCODE' => 3, 'UNIEK_NUMMER_AANVULLENDE_TEKST' => 4, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'handelsproduktkode' => 2, 'prkcode' => 3, 'uniek_nummer_aanvullende_tekst' => 4, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
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
        $toNames = GsGekoppeldeTekstenUitWciaTabel25Peer::getFieldNames($toType);
        $key = isset(GsGekoppeldeTekstenUitWciaTabel25Peer::$fieldKeys[$fromType][$name]) ? GsGekoppeldeTekstenUitWciaTabel25Peer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsGekoppeldeTekstenUitWciaTabel25Peer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsGekoppeldeTekstenUitWciaTabel25Peer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsGekoppeldeTekstenUitWciaTabel25Peer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsGekoppeldeTekstenUitWciaTabel25Peer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsGekoppeldeTekstenUitWciaTabel25Peer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsGekoppeldeTekstenUitWciaTabel25Peer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsGekoppeldeTekstenUitWciaTabel25Peer::MUTATIEKODE);
            $criteria->addSelectColumn(GsGekoppeldeTekstenUitWciaTabel25Peer::HANDELSPRODUKTKODE);
            $criteria->addSelectColumn(GsGekoppeldeTekstenUitWciaTabel25Peer::PRKCODE);
            $criteria->addSelectColumn(GsGekoppeldeTekstenUitWciaTabel25Peer::UNIEK_NUMMER_AANVULLENDE_TEKST);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.handelsproduktkode');
            $criteria->addSelectColumn($alias . '.prkcode');
            $criteria->addSelectColumn($alias . '.uniek_nummer_aanvullende_tekst');
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
        $criteria->setPrimaryTableName(GsGekoppeldeTekstenUitWciaTabel25Peer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsGekoppeldeTekstenUitWciaTabel25Peer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsGekoppeldeTekstenUitWciaTabel25
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsGekoppeldeTekstenUitWciaTabel25Peer::doSelect($critcopy, $con);
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
        return GsGekoppeldeTekstenUitWciaTabel25Peer::populateObjects(GsGekoppeldeTekstenUitWciaTabel25Peer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsGekoppeldeTekstenUitWciaTabel25Peer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME);

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
     * @param GsGekoppeldeTekstenUitWciaTabel25 $obj A GsGekoppeldeTekstenUitWciaTabel25 object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getHandelsproduktkode(), (string) $obj->getPrkcode(), (string) $obj->getUniekNummerAanvullendeTekst()));
            } // if key === null
            GsGekoppeldeTekstenUitWciaTabel25Peer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsGekoppeldeTekstenUitWciaTabel25 object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsGekoppeldeTekstenUitWciaTabel25) {
                $key = serialize(array((string) $value->getHandelsproduktkode(), (string) $value->getPrkcode(), (string) $value->getUniekNummerAanvullendeTekst()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsGekoppeldeTekstenUitWciaTabel25 object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsGekoppeldeTekstenUitWciaTabel25Peer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsGekoppeldeTekstenUitWciaTabel25 Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsGekoppeldeTekstenUitWciaTabel25Peer::$instances[$key])) {
                return GsGekoppeldeTekstenUitWciaTabel25Peer::$instances[$key];
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
        foreach (GsGekoppeldeTekstenUitWciaTabel25Peer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsGekoppeldeTekstenUitWciaTabel25Peer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_gekoppelde_teksten_uit_wcia_tabel_25
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
        if ($row[$startcol + 2] === null && $row[$startcol + 3] === null && $row[$startcol + 4] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 4]));
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

        return array((int) $row[$startcol + 2], (int) $row[$startcol + 3], (int) $row[$startcol + 4]);
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
        $cls = GsGekoppeldeTekstenUitWciaTabel25Peer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsGekoppeldeTekstenUitWciaTabel25Peer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsGekoppeldeTekstenUitWciaTabel25Peer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsGekoppeldeTekstenUitWciaTabel25Peer::addInstanceToPool($obj, $key);
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
     * @return array (GsGekoppeldeTekstenUitWciaTabel25 object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsGekoppeldeTekstenUitWciaTabel25Peer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsGekoppeldeTekstenUitWciaTabel25Peer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsGekoppeldeTekstenUitWciaTabel25Peer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsGekoppeldeTekstenUitWciaTabel25Peer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsGekoppeldeTekstenUitWciaTabel25Peer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME)->getTable(GsGekoppeldeTekstenUitWciaTabel25Peer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsGekoppeldeTekstenUitWciaTabel25Peer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsGekoppeldeTekstenUitWciaTabel25TableMap());
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
        return GsGekoppeldeTekstenUitWciaTabel25Peer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsGekoppeldeTekstenUitWciaTabel25 or Criteria object.
     *
     * @param      mixed $values Criteria or GsGekoppeldeTekstenUitWciaTabel25 object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsGekoppeldeTekstenUitWciaTabel25 object
        }


        // Set the correct dbName
        $criteria->setDbName(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsGekoppeldeTekstenUitWciaTabel25 or Criteria object.
     *
     * @param      mixed $values Criteria or GsGekoppeldeTekstenUitWciaTabel25 object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsGekoppeldeTekstenUitWciaTabel25Peer::HANDELSPRODUKTKODE);
            $value = $criteria->remove(GsGekoppeldeTekstenUitWciaTabel25Peer::HANDELSPRODUKTKODE);
            if ($value) {
                $selectCriteria->add(GsGekoppeldeTekstenUitWciaTabel25Peer::HANDELSPRODUKTKODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsGekoppeldeTekstenUitWciaTabel25Peer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsGekoppeldeTekstenUitWciaTabel25Peer::PRKCODE);
            $value = $criteria->remove(GsGekoppeldeTekstenUitWciaTabel25Peer::PRKCODE);
            if ($value) {
                $selectCriteria->add(GsGekoppeldeTekstenUitWciaTabel25Peer::PRKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsGekoppeldeTekstenUitWciaTabel25Peer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsGekoppeldeTekstenUitWciaTabel25Peer::UNIEK_NUMMER_AANVULLENDE_TEKST);
            $value = $criteria->remove(GsGekoppeldeTekstenUitWciaTabel25Peer::UNIEK_NUMMER_AANVULLENDE_TEKST);
            if ($value) {
                $selectCriteria->add(GsGekoppeldeTekstenUitWciaTabel25Peer::UNIEK_NUMMER_AANVULLENDE_TEKST, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsGekoppeldeTekstenUitWciaTabel25Peer::TABLE_NAME);
            }

        } else { // $values is GsGekoppeldeTekstenUitWciaTabel25 object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_gekoppelde_teksten_uit_wcia_tabel_25 table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsGekoppeldeTekstenUitWciaTabel25Peer::TABLE_NAME, $con, GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsGekoppeldeTekstenUitWciaTabel25Peer::clearInstancePool();
            GsGekoppeldeTekstenUitWciaTabel25Peer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsGekoppeldeTekstenUitWciaTabel25 or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsGekoppeldeTekstenUitWciaTabel25 object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsGekoppeldeTekstenUitWciaTabel25Peer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsGekoppeldeTekstenUitWciaTabel25) { // it's a model object
            // invalidate the cache for this single object
            GsGekoppeldeTekstenUitWciaTabel25Peer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsGekoppeldeTekstenUitWciaTabel25Peer::HANDELSPRODUKTKODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsGekoppeldeTekstenUitWciaTabel25Peer::PRKCODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(GsGekoppeldeTekstenUitWciaTabel25Peer::UNIEK_NUMMER_AANVULLENDE_TEKST, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsGekoppeldeTekstenUitWciaTabel25Peer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsGekoppeldeTekstenUitWciaTabel25Peer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsGekoppeldeTekstenUitWciaTabel25 object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsGekoppeldeTekstenUitWciaTabel25 $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsGekoppeldeTekstenUitWciaTabel25Peer::TABLE_NAME);

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

        return BasePeer::doValidate(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME, GsGekoppeldeTekstenUitWciaTabel25Peer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $handelsproduktkode
     * @param   int $prkcode
     * @param   int $uniek_nummer_aanvullende_tekst
     * @param      PropelPDO $con
     * @return GsGekoppeldeTekstenUitWciaTabel25
     */
    public static function retrieveByPK($handelsproduktkode, $prkcode, $uniek_nummer_aanvullende_tekst, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $handelsproduktkode, (string) $prkcode, (string) $uniek_nummer_aanvullende_tekst));
         if (null !== ($obj = GsGekoppeldeTekstenUitWciaTabel25Peer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME);
        $criteria->add(GsGekoppeldeTekstenUitWciaTabel25Peer::HANDELSPRODUKTKODE, $handelsproduktkode);
        $criteria->add(GsGekoppeldeTekstenUitWciaTabel25Peer::PRKCODE, $prkcode);
        $criteria->add(GsGekoppeldeTekstenUitWciaTabel25Peer::UNIEK_NUMMER_AANVULLENDE_TEKST, $uniek_nummer_aanvullende_tekst);
        $v = GsGekoppeldeTekstenUitWciaTabel25Peer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsGekoppeldeTekstenUitWciaTabel25Peer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsGekoppeldeTekstenUitWciaTabel25Peer::buildTableMap();

