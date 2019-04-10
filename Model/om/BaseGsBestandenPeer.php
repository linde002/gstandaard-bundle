<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsBestanden;
use PharmaIntelligence\GstandaardBundle\Model\GsBestandenPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsBestandenTableMap;

abstract class BaseGsBestandenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_bestanden';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsBestanden';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsBestandenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_bestanden.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_bestanden.mutatiekode';

    /** the column name for the naam_van_het_bestand field */
    const NAAM_VAN_HET_BESTAND = 'gs_bestanden.naam_van_het_bestand';

    /** the column name for the bestandomschrijving field */
    const BESTANDOMSCHRIJVING = 'gs_bestanden.bestandomschrijving';

    /** the column name for the bestandscode field */
    const BESTANDSCODE = 'gs_bestanden.bestandscode';

    /** the column name for the recordlengte field */
    const RECORDLENGTE = 'gs_bestanden.recordlengte';

    /** the column name for the ingangsdatum field */
    const INGANGSDATUM = 'gs_bestanden.ingangsdatum';

    /** the column name for the eindedatum_uitlevering field */
    const EINDEDATUM_UITLEVERING = 'gs_bestanden.eindedatum_uitlevering';

    /** the column name for the uitgavedatum field */
    const UITGAVEDATUM = 'gs_bestanden.uitgavedatum';

    /** the column name for the status field */
    const STATUS = 'gs_bestanden.status';

    /** the column name for the aantal_ongewijzigde_records field */
    const AANTAL_ONGEWIJZIGDE_RECORDS = 'gs_bestanden.aantal_ongewijzigde_records';

    /** the column name for the aantal_vervallen_records field */
    const AANTAL_VERVALLEN_RECORDS = 'gs_bestanden.aantal_vervallen_records';

    /** the column name for the aantal_gewijzigde_records field */
    const AANTAL_GEWIJZIGDE_RECORDS = 'gs_bestanden.aantal_gewijzigde_records';

    /** the column name for the aantal_nieuwe_records field */
    const AANTAL_NIEUWE_RECORDS = 'gs_bestanden.aantal_nieuwe_records';

    /** the column name for the totaal_aantal_records field */
    const TOTAAL_AANTAL_RECORDS = 'gs_bestanden.totaal_aantal_records';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsBestanden objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsBestanden[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsBestandenPeer::$fieldNames[GsBestandenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'NaamVanHetBestand', 'Bestandomschrijving', 'Bestandscode', 'Recordlengte', 'Ingangsdatum', 'EindedatumUitlevering', 'Uitgavedatum', 'Status', 'AantalOngewijzigdeRecords', 'AantalVervallenRecords', 'AantalGewijzigdeRecords', 'AantalNieuweRecords', 'TotaalAantalRecords', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'naamVanHetBestand', 'bestandomschrijving', 'bestandscode', 'recordlengte', 'ingangsdatum', 'eindedatumUitlevering', 'uitgavedatum', 'status', 'aantalOngewijzigdeRecords', 'aantalVervallenRecords', 'aantalGewijzigdeRecords', 'aantalNieuweRecords', 'totaalAantalRecords', ),
        BasePeer::TYPE_COLNAME => array (GsBestandenPeer::BESTANDNUMMER, GsBestandenPeer::MUTATIEKODE, GsBestandenPeer::NAAM_VAN_HET_BESTAND, GsBestandenPeer::BESTANDOMSCHRIJVING, GsBestandenPeer::BESTANDSCODE, GsBestandenPeer::RECORDLENGTE, GsBestandenPeer::INGANGSDATUM, GsBestandenPeer::EINDEDATUM_UITLEVERING, GsBestandenPeer::UITGAVEDATUM, GsBestandenPeer::STATUS, GsBestandenPeer::AANTAL_ONGEWIJZIGDE_RECORDS, GsBestandenPeer::AANTAL_VERVALLEN_RECORDS, GsBestandenPeer::AANTAL_GEWIJZIGDE_RECORDS, GsBestandenPeer::AANTAL_NIEUWE_RECORDS, GsBestandenPeer::TOTAAL_AANTAL_RECORDS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'NAAM_VAN_HET_BESTAND', 'BESTANDOMSCHRIJVING', 'BESTANDSCODE', 'RECORDLENGTE', 'INGANGSDATUM', 'EINDEDATUM_UITLEVERING', 'UITGAVEDATUM', 'STATUS', 'AANTAL_ONGEWIJZIGDE_RECORDS', 'AANTAL_VERVALLEN_RECORDS', 'AANTAL_GEWIJZIGDE_RECORDS', 'AANTAL_NIEUWE_RECORDS', 'TOTAAL_AANTAL_RECORDS', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'naam_van_het_bestand', 'bestandomschrijving', 'bestandscode', 'recordlengte', 'ingangsdatum', 'eindedatum_uitlevering', 'uitgavedatum', 'status', 'aantal_ongewijzigde_records', 'aantal_vervallen_records', 'aantal_gewijzigde_records', 'aantal_nieuwe_records', 'totaal_aantal_records', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsBestandenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'NaamVanHetBestand' => 2, 'Bestandomschrijving' => 3, 'Bestandscode' => 4, 'Recordlengte' => 5, 'Ingangsdatum' => 6, 'EindedatumUitlevering' => 7, 'Uitgavedatum' => 8, 'Status' => 9, 'AantalOngewijzigdeRecords' => 10, 'AantalVervallenRecords' => 11, 'AantalGewijzigdeRecords' => 12, 'AantalNieuweRecords' => 13, 'TotaalAantalRecords' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'naamVanHetBestand' => 2, 'bestandomschrijving' => 3, 'bestandscode' => 4, 'recordlengte' => 5, 'ingangsdatum' => 6, 'eindedatumUitlevering' => 7, 'uitgavedatum' => 8, 'status' => 9, 'aantalOngewijzigdeRecords' => 10, 'aantalVervallenRecords' => 11, 'aantalGewijzigdeRecords' => 12, 'aantalNieuweRecords' => 13, 'totaalAantalRecords' => 14, ),
        BasePeer::TYPE_COLNAME => array (GsBestandenPeer::BESTANDNUMMER => 0, GsBestandenPeer::MUTATIEKODE => 1, GsBestandenPeer::NAAM_VAN_HET_BESTAND => 2, GsBestandenPeer::BESTANDOMSCHRIJVING => 3, GsBestandenPeer::BESTANDSCODE => 4, GsBestandenPeer::RECORDLENGTE => 5, GsBestandenPeer::INGANGSDATUM => 6, GsBestandenPeer::EINDEDATUM_UITLEVERING => 7, GsBestandenPeer::UITGAVEDATUM => 8, GsBestandenPeer::STATUS => 9, GsBestandenPeer::AANTAL_ONGEWIJZIGDE_RECORDS => 10, GsBestandenPeer::AANTAL_VERVALLEN_RECORDS => 11, GsBestandenPeer::AANTAL_GEWIJZIGDE_RECORDS => 12, GsBestandenPeer::AANTAL_NIEUWE_RECORDS => 13, GsBestandenPeer::TOTAAL_AANTAL_RECORDS => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'NAAM_VAN_HET_BESTAND' => 2, 'BESTANDOMSCHRIJVING' => 3, 'BESTANDSCODE' => 4, 'RECORDLENGTE' => 5, 'INGANGSDATUM' => 6, 'EINDEDATUM_UITLEVERING' => 7, 'UITGAVEDATUM' => 8, 'STATUS' => 9, 'AANTAL_ONGEWIJZIGDE_RECORDS' => 10, 'AANTAL_VERVALLEN_RECORDS' => 11, 'AANTAL_GEWIJZIGDE_RECORDS' => 12, 'AANTAL_NIEUWE_RECORDS' => 13, 'TOTAAL_AANTAL_RECORDS' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'naam_van_het_bestand' => 2, 'bestandomschrijving' => 3, 'bestandscode' => 4, 'recordlengte' => 5, 'ingangsdatum' => 6, 'eindedatum_uitlevering' => 7, 'uitgavedatum' => 8, 'status' => 9, 'aantal_ongewijzigde_records' => 10, 'aantal_vervallen_records' => 11, 'aantal_gewijzigde_records' => 12, 'aantal_nieuwe_records' => 13, 'totaal_aantal_records' => 14, ),
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
        $toNames = GsBestandenPeer::getFieldNames($toType);
        $key = isset(GsBestandenPeer::$fieldKeys[$fromType][$name]) ? GsBestandenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsBestandenPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsBestandenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsBestandenPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsBestandenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsBestandenPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsBestandenPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsBestandenPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsBestandenPeer::NAAM_VAN_HET_BESTAND);
            $criteria->addSelectColumn(GsBestandenPeer::BESTANDOMSCHRIJVING);
            $criteria->addSelectColumn(GsBestandenPeer::BESTANDSCODE);
            $criteria->addSelectColumn(GsBestandenPeer::RECORDLENGTE);
            $criteria->addSelectColumn(GsBestandenPeer::INGANGSDATUM);
            $criteria->addSelectColumn(GsBestandenPeer::EINDEDATUM_UITLEVERING);
            $criteria->addSelectColumn(GsBestandenPeer::UITGAVEDATUM);
            $criteria->addSelectColumn(GsBestandenPeer::STATUS);
            $criteria->addSelectColumn(GsBestandenPeer::AANTAL_ONGEWIJZIGDE_RECORDS);
            $criteria->addSelectColumn(GsBestandenPeer::AANTAL_VERVALLEN_RECORDS);
            $criteria->addSelectColumn(GsBestandenPeer::AANTAL_GEWIJZIGDE_RECORDS);
            $criteria->addSelectColumn(GsBestandenPeer::AANTAL_NIEUWE_RECORDS);
            $criteria->addSelectColumn(GsBestandenPeer::TOTAAL_AANTAL_RECORDS);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.naam_van_het_bestand');
            $criteria->addSelectColumn($alias . '.bestandomschrijving');
            $criteria->addSelectColumn($alias . '.bestandscode');
            $criteria->addSelectColumn($alias . '.recordlengte');
            $criteria->addSelectColumn($alias . '.ingangsdatum');
            $criteria->addSelectColumn($alias . '.eindedatum_uitlevering');
            $criteria->addSelectColumn($alias . '.uitgavedatum');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.aantal_ongewijzigde_records');
            $criteria->addSelectColumn($alias . '.aantal_vervallen_records');
            $criteria->addSelectColumn($alias . '.aantal_gewijzigde_records');
            $criteria->addSelectColumn($alias . '.aantal_nieuwe_records');
            $criteria->addSelectColumn($alias . '.totaal_aantal_records');
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
        $criteria->setPrimaryTableName(GsBestandenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsBestandenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsBestandenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsBestandenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsBestanden
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsBestandenPeer::doSelect($critcopy, $con);
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
        return GsBestandenPeer::populateObjects(GsBestandenPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsBestandenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsBestandenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsBestandenPeer::DATABASE_NAME);

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
     * @param GsBestanden $obj A GsBestanden object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getNaamVanHetBestand();
            } // if key === null
            GsBestandenPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsBestanden object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsBestanden) {
                $key = (string) $value->getNaamVanHetBestand();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsBestanden object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsBestandenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsBestanden Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsBestandenPeer::$instances[$key])) {
                return GsBestandenPeer::$instances[$key];
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
        foreach (GsBestandenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsBestandenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_bestanden
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
        $cls = GsBestandenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsBestandenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsBestandenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsBestandenPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsBestanden object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsBestandenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsBestandenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsBestandenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsBestandenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsBestandenPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsBestandenPeer::DATABASE_NAME)->getTable(GsBestandenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsBestandenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsBestandenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsBestandenTableMap());
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
        return GsBestandenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsBestanden or Criteria object.
     *
     * @param      mixed $values Criteria or GsBestanden object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsBestandenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsBestanden object
        }


        // Set the correct dbName
        $criteria->setDbName(GsBestandenPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsBestanden or Criteria object.
     *
     * @param      mixed $values Criteria or GsBestanden object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsBestandenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsBestandenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsBestandenPeer::NAAM_VAN_HET_BESTAND);
            $value = $criteria->remove(GsBestandenPeer::NAAM_VAN_HET_BESTAND);
            if ($value) {
                $selectCriteria->add(GsBestandenPeer::NAAM_VAN_HET_BESTAND, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsBestandenPeer::TABLE_NAME);
            }

        } else { // $values is GsBestanden object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsBestandenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_bestanden table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsBestandenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsBestandenPeer::TABLE_NAME, $con, GsBestandenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsBestandenPeer::clearInstancePool();
            GsBestandenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsBestanden or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsBestanden object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsBestandenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsBestandenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsBestanden) { // it's a model object
            // invalidate the cache for this single object
            GsBestandenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsBestandenPeer::DATABASE_NAME);
            $criteria->add(GsBestandenPeer::NAAM_VAN_HET_BESTAND, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsBestandenPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsBestandenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsBestandenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsBestanden object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsBestanden $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsBestandenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsBestandenPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsBestandenPeer::DATABASE_NAME, GsBestandenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsBestanden
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsBestandenPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsBestandenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsBestandenPeer::DATABASE_NAME);
        $criteria->add(GsBestandenPeer::NAAM_VAN_HET_BESTAND, $pk);

        $v = GsBestandenPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsBestanden[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsBestandenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsBestandenPeer::DATABASE_NAME);
            $criteria->add(GsBestandenPeer::NAAM_VAN_HET_BESTAND, $pks, Criteria::IN);
            $objs = GsBestandenPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsBestandenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsBestandenPeer::buildTableMap();

