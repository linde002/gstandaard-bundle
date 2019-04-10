<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsZiccode;
use PharmaIntelligence\GstandaardBundle\Model\GsZiccodePeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsZiccodeTableMap;

abstract class BaseGsZiccodePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_ziccode';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsZiccode';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsZiccodeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_ziccode.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_ziccode.mutatiekode';

    /** the column name for the instellingscode field */
    const INSTELLINGSCODE = 'gs_ziccode.instellingscode';

    /** the column name for the naam_van_de_instelling field */
    const NAAM_VAN_DE_INSTELLING = 'gs_ziccode.naam_van_de_instelling';

    /** the column name for the straatnaam field */
    const STRAATNAAM = 'gs_ziccode.straatnaam';

    /** the column name for the huisnummer field */
    const HUISNUMMER = 'gs_ziccode.huisnummer';

    /** the column name for the huisnummer_toevoeging field */
    const HUISNUMMER_TOEVOEGING = 'gs_ziccode.huisnummer_toevoeging';

    /** the column name for the postcode field */
    const POSTCODE = 'gs_ziccode.postcode';

    /** the column name for the plaats field */
    const PLAATS = 'gs_ziccode.plaats';

    /** the column name for the zoeksleutel field */
    const ZOEKSLEUTEL = 'gs_ziccode.zoeksleutel';

    /** the column name for the agbcode_van_de_instelling field */
    const AGBCODE_VAN_DE_INSTELLING = 'gs_ziccode.agbcode_van_de_instelling';

    /** the column name for the agbcode_toevoegsel_lokaties field */
    const AGBCODE_TOEVOEGSEL_LOKATIES = 'gs_ziccode.agbcode_toevoegsel_lokaties';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsZiccode objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsZiccode[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsZiccodePeer::$fieldNames[GsZiccodePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Instellingscode', 'NaamVanDeInstelling', 'Straatnaam', 'Huisnummer', 'HuisnummerToevoeging', 'Postcode', 'Plaats', 'Zoeksleutel', 'AgbcodeVanDeInstelling', 'AgbcodeToevoegselLokaties', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'instellingscode', 'naamVanDeInstelling', 'straatnaam', 'huisnummer', 'huisnummerToevoeging', 'postcode', 'plaats', 'zoeksleutel', 'agbcodeVanDeInstelling', 'agbcodeToevoegselLokaties', ),
        BasePeer::TYPE_COLNAME => array (GsZiccodePeer::BESTANDNUMMER, GsZiccodePeer::MUTATIEKODE, GsZiccodePeer::INSTELLINGSCODE, GsZiccodePeer::NAAM_VAN_DE_INSTELLING, GsZiccodePeer::STRAATNAAM, GsZiccodePeer::HUISNUMMER, GsZiccodePeer::HUISNUMMER_TOEVOEGING, GsZiccodePeer::POSTCODE, GsZiccodePeer::PLAATS, GsZiccodePeer::ZOEKSLEUTEL, GsZiccodePeer::AGBCODE_VAN_DE_INSTELLING, GsZiccodePeer::AGBCODE_TOEVOEGSEL_LOKATIES, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'INSTELLINGSCODE', 'NAAM_VAN_DE_INSTELLING', 'STRAATNAAM', 'HUISNUMMER', 'HUISNUMMER_TOEVOEGING', 'POSTCODE', 'PLAATS', 'ZOEKSLEUTEL', 'AGBCODE_VAN_DE_INSTELLING', 'AGBCODE_TOEVOEGSEL_LOKATIES', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'instellingscode', 'naam_van_de_instelling', 'straatnaam', 'huisnummer', 'huisnummer_toevoeging', 'postcode', 'plaats', 'zoeksleutel', 'agbcode_van_de_instelling', 'agbcode_toevoegsel_lokaties', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsZiccodePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Instellingscode' => 2, 'NaamVanDeInstelling' => 3, 'Straatnaam' => 4, 'Huisnummer' => 5, 'HuisnummerToevoeging' => 6, 'Postcode' => 7, 'Plaats' => 8, 'Zoeksleutel' => 9, 'AgbcodeVanDeInstelling' => 10, 'AgbcodeToevoegselLokaties' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'instellingscode' => 2, 'naamVanDeInstelling' => 3, 'straatnaam' => 4, 'huisnummer' => 5, 'huisnummerToevoeging' => 6, 'postcode' => 7, 'plaats' => 8, 'zoeksleutel' => 9, 'agbcodeVanDeInstelling' => 10, 'agbcodeToevoegselLokaties' => 11, ),
        BasePeer::TYPE_COLNAME => array (GsZiccodePeer::BESTANDNUMMER => 0, GsZiccodePeer::MUTATIEKODE => 1, GsZiccodePeer::INSTELLINGSCODE => 2, GsZiccodePeer::NAAM_VAN_DE_INSTELLING => 3, GsZiccodePeer::STRAATNAAM => 4, GsZiccodePeer::HUISNUMMER => 5, GsZiccodePeer::HUISNUMMER_TOEVOEGING => 6, GsZiccodePeer::POSTCODE => 7, GsZiccodePeer::PLAATS => 8, GsZiccodePeer::ZOEKSLEUTEL => 9, GsZiccodePeer::AGBCODE_VAN_DE_INSTELLING => 10, GsZiccodePeer::AGBCODE_TOEVOEGSEL_LOKATIES => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'INSTELLINGSCODE' => 2, 'NAAM_VAN_DE_INSTELLING' => 3, 'STRAATNAAM' => 4, 'HUISNUMMER' => 5, 'HUISNUMMER_TOEVOEGING' => 6, 'POSTCODE' => 7, 'PLAATS' => 8, 'ZOEKSLEUTEL' => 9, 'AGBCODE_VAN_DE_INSTELLING' => 10, 'AGBCODE_TOEVOEGSEL_LOKATIES' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'instellingscode' => 2, 'naam_van_de_instelling' => 3, 'straatnaam' => 4, 'huisnummer' => 5, 'huisnummer_toevoeging' => 6, 'postcode' => 7, 'plaats' => 8, 'zoeksleutel' => 9, 'agbcode_van_de_instelling' => 10, 'agbcode_toevoegsel_lokaties' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
        $toNames = GsZiccodePeer::getFieldNames($toType);
        $key = isset(GsZiccodePeer::$fieldKeys[$fromType][$name]) ? GsZiccodePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsZiccodePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsZiccodePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsZiccodePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsZiccodePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsZiccodePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsZiccodePeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsZiccodePeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsZiccodePeer::INSTELLINGSCODE);
            $criteria->addSelectColumn(GsZiccodePeer::NAAM_VAN_DE_INSTELLING);
            $criteria->addSelectColumn(GsZiccodePeer::STRAATNAAM);
            $criteria->addSelectColumn(GsZiccodePeer::HUISNUMMER);
            $criteria->addSelectColumn(GsZiccodePeer::HUISNUMMER_TOEVOEGING);
            $criteria->addSelectColumn(GsZiccodePeer::POSTCODE);
            $criteria->addSelectColumn(GsZiccodePeer::PLAATS);
            $criteria->addSelectColumn(GsZiccodePeer::ZOEKSLEUTEL);
            $criteria->addSelectColumn(GsZiccodePeer::AGBCODE_VAN_DE_INSTELLING);
            $criteria->addSelectColumn(GsZiccodePeer::AGBCODE_TOEVOEGSEL_LOKATIES);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.instellingscode');
            $criteria->addSelectColumn($alias . '.naam_van_de_instelling');
            $criteria->addSelectColumn($alias . '.straatnaam');
            $criteria->addSelectColumn($alias . '.huisnummer');
            $criteria->addSelectColumn($alias . '.huisnummer_toevoeging');
            $criteria->addSelectColumn($alias . '.postcode');
            $criteria->addSelectColumn($alias . '.plaats');
            $criteria->addSelectColumn($alias . '.zoeksleutel');
            $criteria->addSelectColumn($alias . '.agbcode_van_de_instelling');
            $criteria->addSelectColumn($alias . '.agbcode_toevoegsel_lokaties');
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
        $criteria->setPrimaryTableName(GsZiccodePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsZiccodePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsZiccodePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsZiccodePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsZiccode
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsZiccodePeer::doSelect($critcopy, $con);
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
        return GsZiccodePeer::populateObjects(GsZiccodePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsZiccodePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsZiccodePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsZiccodePeer::DATABASE_NAME);

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
     * @param GsZiccode $obj A GsZiccode object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getInstellingscode();
            } // if key === null
            GsZiccodePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsZiccode object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsZiccode) {
                $key = (string) $value->getInstellingscode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsZiccode object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsZiccodePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsZiccode Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsZiccodePeer::$instances[$key])) {
                return GsZiccodePeer::$instances[$key];
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
        foreach (GsZiccodePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsZiccodePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_ziccode
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

        return (string) $row[$startcol + 2];
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
        $cls = GsZiccodePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsZiccodePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsZiccodePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsZiccodePeer::addInstanceToPool($obj, $key);
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
     * @return array (GsZiccode object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsZiccodePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsZiccodePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsZiccodePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsZiccodePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsZiccodePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsZiccodePeer::DATABASE_NAME)->getTable(GsZiccodePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsZiccodePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsZiccodePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsZiccodeTableMap());
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
        return GsZiccodePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsZiccode or Criteria object.
     *
     * @param      mixed $values Criteria or GsZiccode object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsZiccodePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsZiccode object
        }


        // Set the correct dbName
        $criteria->setDbName(GsZiccodePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsZiccode or Criteria object.
     *
     * @param      mixed $values Criteria or GsZiccode object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsZiccodePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsZiccodePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsZiccodePeer::INSTELLINGSCODE);
            $value = $criteria->remove(GsZiccodePeer::INSTELLINGSCODE);
            if ($value) {
                $selectCriteria->add(GsZiccodePeer::INSTELLINGSCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsZiccodePeer::TABLE_NAME);
            }

        } else { // $values is GsZiccode object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsZiccodePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_ziccode table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsZiccodePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsZiccodePeer::TABLE_NAME, $con, GsZiccodePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsZiccodePeer::clearInstancePool();
            GsZiccodePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsZiccode or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsZiccode object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsZiccodePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsZiccodePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsZiccode) { // it's a model object
            // invalidate the cache for this single object
            GsZiccodePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsZiccodePeer::DATABASE_NAME);
            $criteria->add(GsZiccodePeer::INSTELLINGSCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsZiccodePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsZiccodePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsZiccodePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsZiccode object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsZiccode $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsZiccodePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsZiccodePeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsZiccodePeer::DATABASE_NAME, GsZiccodePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsZiccode
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsZiccodePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsZiccodePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsZiccodePeer::DATABASE_NAME);
        $criteria->add(GsZiccodePeer::INSTELLINGSCODE, $pk);

        $v = GsZiccodePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsZiccode[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsZiccodePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsZiccodePeer::DATABASE_NAME);
            $criteria->add(GsZiccodePeer::INSTELLINGSCODE, $pks, Criteria::IN);
            $objs = GsZiccodePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsZiccodePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsZiccodePeer::buildTableMap();

