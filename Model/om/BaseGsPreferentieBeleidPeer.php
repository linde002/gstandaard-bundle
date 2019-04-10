<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsPreferentieBeleid;
use PharmaIntelligence\GstandaardBundle\Model\GsPreferentieBeleidPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsPreferentieBeleidTableMap;

abstract class BaseGsPreferentieBeleidPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_preferentie_beleid';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPreferentieBeleid';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsPreferentieBeleidTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_preferentie_beleid.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_preferentie_beleid.mutatiekode';

    /** the column name for the zindex_nummer field */
    const ZINDEX_NUMMER = 'gs_preferentie_beleid.zindex_nummer';

    /** the column name for the uzovi_code_zorgverzekeraar field */
    const UZOVI_CODE_ZORGVERZEKERAAR = 'gs_preferentie_beleid.uzovi_code_zorgverzekeraar';

    /** the column name for the thesaurusverwijzing_preferentie_status field */
    const THESAURUSVERWIJZING_PREFERENTIE_STATUS = 'gs_preferentie_beleid.thesaurusverwijzing_preferentie_status';

    /** the column name for the preferentie_status field */
    const PREFERENTIE_STATUS = 'gs_preferentie_beleid.preferentie_status';

    /** the column name for the startdatum_preferentie_status field */
    const STARTDATUM_PREFERENTIE_STATUS = 'gs_preferentie_beleid.startdatum_preferentie_status';

    /** the column name for the einddatum_preferentie_status field */
    const EINDDATUM_PREFERENTIE_STATUS = 'gs_preferentie_beleid.einddatum_preferentie_status';

    /** the column name for the preferentie_cluster_code field */
    const PREFERENTIE_CLUSTER_CODE = 'gs_preferentie_beleid.preferentie_cluster_code';

    /** the column name for the prkcode field */
    const PRKCODE = 'gs_preferentie_beleid.prkcode';

    /** the column name for the handelsproduktkode field */
    const HANDELSPRODUKTKODE = 'gs_preferentie_beleid.handelsproduktkode';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsPreferentieBeleid objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsPreferentieBeleid[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsPreferentieBeleidPeer::$fieldNames[GsPreferentieBeleidPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'ZindexNummer', 'UzoviCodeZorgverzekeraar', 'ThesaurusverwijzingPreferentieStatus', 'PreferentieStatus', 'StartdatumPreferentieStatus', 'EinddatumPreferentieStatus', 'PreferentieClusterCode', 'Prkcode', 'Handelsproduktkode', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'zindexNummer', 'uzoviCodeZorgverzekeraar', 'thesaurusverwijzingPreferentieStatus', 'preferentieStatus', 'startdatumPreferentieStatus', 'einddatumPreferentieStatus', 'preferentieClusterCode', 'prkcode', 'handelsproduktkode', ),
        BasePeer::TYPE_COLNAME => array (GsPreferentieBeleidPeer::BESTANDNUMMER, GsPreferentieBeleidPeer::MUTATIEKODE, GsPreferentieBeleidPeer::ZINDEX_NUMMER, GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR, GsPreferentieBeleidPeer::THESAURUSVERWIJZING_PREFERENTIE_STATUS, GsPreferentieBeleidPeer::PREFERENTIE_STATUS, GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS, GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS, GsPreferentieBeleidPeer::PREFERENTIE_CLUSTER_CODE, GsPreferentieBeleidPeer::PRKCODE, GsPreferentieBeleidPeer::HANDELSPRODUKTKODE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'ZINDEX_NUMMER', 'UZOVI_CODE_ZORGVERZEKERAAR', 'THESAURUSVERWIJZING_PREFERENTIE_STATUS', 'PREFERENTIE_STATUS', 'STARTDATUM_PREFERENTIE_STATUS', 'EINDDATUM_PREFERENTIE_STATUS', 'PREFERENTIE_CLUSTER_CODE', 'PRKCODE', 'HANDELSPRODUKTKODE', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'zindex_nummer', 'uzovi_code_zorgverzekeraar', 'thesaurusverwijzing_preferentie_status', 'preferentie_status', 'startdatum_preferentie_status', 'einddatum_preferentie_status', 'preferentie_cluster_code', 'prkcode', 'handelsproduktkode', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsPreferentieBeleidPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'ZindexNummer' => 2, 'UzoviCodeZorgverzekeraar' => 3, 'ThesaurusverwijzingPreferentieStatus' => 4, 'PreferentieStatus' => 5, 'StartdatumPreferentieStatus' => 6, 'EinddatumPreferentieStatus' => 7, 'PreferentieClusterCode' => 8, 'Prkcode' => 9, 'Handelsproduktkode' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'zindexNummer' => 2, 'uzoviCodeZorgverzekeraar' => 3, 'thesaurusverwijzingPreferentieStatus' => 4, 'preferentieStatus' => 5, 'startdatumPreferentieStatus' => 6, 'einddatumPreferentieStatus' => 7, 'preferentieClusterCode' => 8, 'prkcode' => 9, 'handelsproduktkode' => 10, ),
        BasePeer::TYPE_COLNAME => array (GsPreferentieBeleidPeer::BESTANDNUMMER => 0, GsPreferentieBeleidPeer::MUTATIEKODE => 1, GsPreferentieBeleidPeer::ZINDEX_NUMMER => 2, GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR => 3, GsPreferentieBeleidPeer::THESAURUSVERWIJZING_PREFERENTIE_STATUS => 4, GsPreferentieBeleidPeer::PREFERENTIE_STATUS => 5, GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS => 6, GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS => 7, GsPreferentieBeleidPeer::PREFERENTIE_CLUSTER_CODE => 8, GsPreferentieBeleidPeer::PRKCODE => 9, GsPreferentieBeleidPeer::HANDELSPRODUKTKODE => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'ZINDEX_NUMMER' => 2, 'UZOVI_CODE_ZORGVERZEKERAAR' => 3, 'THESAURUSVERWIJZING_PREFERENTIE_STATUS' => 4, 'PREFERENTIE_STATUS' => 5, 'STARTDATUM_PREFERENTIE_STATUS' => 6, 'EINDDATUM_PREFERENTIE_STATUS' => 7, 'PREFERENTIE_CLUSTER_CODE' => 8, 'PRKCODE' => 9, 'HANDELSPRODUKTKODE' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'zindex_nummer' => 2, 'uzovi_code_zorgverzekeraar' => 3, 'thesaurusverwijzing_preferentie_status' => 4, 'preferentie_status' => 5, 'startdatum_preferentie_status' => 6, 'einddatum_preferentie_status' => 7, 'preferentie_cluster_code' => 8, 'prkcode' => 9, 'handelsproduktkode' => 10, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
        $toNames = GsPreferentieBeleidPeer::getFieldNames($toType);
        $key = isset(GsPreferentieBeleidPeer::$fieldKeys[$fromType][$name]) ? GsPreferentieBeleidPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsPreferentieBeleidPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsPreferentieBeleidPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsPreferentieBeleidPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsPreferentieBeleidPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsPreferentieBeleidPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsPreferentieBeleidPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsPreferentieBeleidPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsPreferentieBeleidPeer::ZINDEX_NUMMER);
            $criteria->addSelectColumn(GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR);
            $criteria->addSelectColumn(GsPreferentieBeleidPeer::THESAURUSVERWIJZING_PREFERENTIE_STATUS);
            $criteria->addSelectColumn(GsPreferentieBeleidPeer::PREFERENTIE_STATUS);
            $criteria->addSelectColumn(GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS);
            $criteria->addSelectColumn(GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS);
            $criteria->addSelectColumn(GsPreferentieBeleidPeer::PREFERENTIE_CLUSTER_CODE);
            $criteria->addSelectColumn(GsPreferentieBeleidPeer::PRKCODE);
            $criteria->addSelectColumn(GsPreferentieBeleidPeer::HANDELSPRODUKTKODE);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.zindex_nummer');
            $criteria->addSelectColumn($alias . '.uzovi_code_zorgverzekeraar');
            $criteria->addSelectColumn($alias . '.thesaurusverwijzing_preferentie_status');
            $criteria->addSelectColumn($alias . '.preferentie_status');
            $criteria->addSelectColumn($alias . '.startdatum_preferentie_status');
            $criteria->addSelectColumn($alias . '.einddatum_preferentie_status');
            $criteria->addSelectColumn($alias . '.preferentie_cluster_code');
            $criteria->addSelectColumn($alias . '.prkcode');
            $criteria->addSelectColumn($alias . '.handelsproduktkode');
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
        $criteria->setPrimaryTableName(GsPreferentieBeleidPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPreferentieBeleidPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsPreferentieBeleidPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsPreferentieBeleidPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsPreferentieBeleid
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsPreferentieBeleidPeer::doSelect($critcopy, $con);
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
        return GsPreferentieBeleidPeer::populateObjects(GsPreferentieBeleidPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsPreferentieBeleidPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsPreferentieBeleidPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsPreferentieBeleidPeer::DATABASE_NAME);

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
     * @param GsPreferentieBeleid $obj A GsPreferentieBeleid object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getZindexNummer(), (string) $obj->getUzoviCodeZorgverzekeraar(), (string) $obj->getStartdatumPreferentieStatus('U'), (string) $obj->getEinddatumPreferentieStatus('U')));
            } // if key === null
            GsPreferentieBeleidPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsPreferentieBeleid object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsPreferentieBeleid) {
                $key = serialize(array((string) $value->getZindexNummer(), (string) $value->getUzoviCodeZorgverzekeraar(), (string) $value->getStartdatumPreferentieStatus(), (string) $value->getEinddatumPreferentieStatus()));
            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsPreferentieBeleid object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsPreferentieBeleidPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsPreferentieBeleid Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsPreferentieBeleidPeer::$instances[$key])) {
                return GsPreferentieBeleidPeer::$instances[$key];
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
        foreach (GsPreferentieBeleidPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsPreferentieBeleidPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_preferentie_beleid
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
        if ($row[$startcol + 2] === null && $row[$startcol + 3] === null && $row[$startcol + 6] === null && $row[$startcol + 7] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 6], (string) $row[$startcol + 7]));
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

        return array((int) $row[$startcol + 2], (int) $row[$startcol + 3], (string) $row[$startcol + 6], (string) $row[$startcol + 7]);
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
        $cls = GsPreferentieBeleidPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsPreferentieBeleidPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsPreferentieBeleidPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsPreferentieBeleidPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsPreferentieBeleid object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsPreferentieBeleidPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsPreferentieBeleidPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsPreferentieBeleidPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsPreferentieBeleidPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsPreferentieBeleidPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related PreferentieStatusOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPreferentieStatusOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPreferentieBeleidPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPreferentieBeleidPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsPreferentieBeleidPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPreferentieBeleidPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsPreferentieBeleidPeer::THESAURUSVERWIJZING_PREFERENTIE_STATUS, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPreferentieBeleidPeer::PREFERENTIE_STATUS, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Returns the number of rows matching criteria, joining the related GsArtikelen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsArtikelen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPreferentieBeleidPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPreferentieBeleidPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsPreferentieBeleidPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPreferentieBeleidPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsPreferentieBeleidPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Selects a collection of GsPreferentieBeleid objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPreferentieBeleid objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPreferentieStatusOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPreferentieBeleidPeer::DATABASE_NAME);
        }

        GsPreferentieBeleidPeer::addSelectColumns($criteria);
        $startcol = GsPreferentieBeleidPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsPreferentieBeleidPeer::THESAURUSVERWIJZING_PREFERENTIE_STATUS, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPreferentieBeleidPeer::PREFERENTIE_STATUS, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPreferentieBeleidPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPreferentieBeleidPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsPreferentieBeleidPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPreferentieBeleidPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsPreferentieBeleid) to $obj2 (GsThesauriTotaal)
                $obj2->addGsPreferentieBeleid($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPreferentieBeleid objects pre-filled with their GsArtikelen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPreferentieBeleid objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsArtikelen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPreferentieBeleidPeer::DATABASE_NAME);
        }

        GsPreferentieBeleidPeer::addSelectColumns($criteria);
        $startcol = GsPreferentieBeleidPeer::NUM_HYDRATE_COLUMNS;
        GsArtikelenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsPreferentieBeleidPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPreferentieBeleidPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPreferentieBeleidPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsPreferentieBeleidPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPreferentieBeleidPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsArtikelenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsArtikelenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsArtikelenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsPreferentieBeleid) to $obj2 (GsArtikelen)
                $obj2->addGsPreferentieBeleid($obj1);

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
        $criteria->setPrimaryTableName(GsPreferentieBeleidPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPreferentieBeleidPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsPreferentieBeleidPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPreferentieBeleidPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsPreferentieBeleidPeer::THESAURUSVERWIJZING_PREFERENTIE_STATUS, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPreferentieBeleidPeer::PREFERENTIE_STATUS, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsPreferentieBeleidPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Selects a collection of GsPreferentieBeleid objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPreferentieBeleid objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPreferentieBeleidPeer::DATABASE_NAME);
        }

        GsPreferentieBeleidPeer::addSelectColumns($criteria);
        $startcol2 = GsPreferentieBeleidPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(GsPreferentieBeleidPeer::THESAURUSVERWIJZING_PREFERENTIE_STATUS, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPreferentieBeleidPeer::PREFERENTIE_STATUS, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addJoin(GsPreferentieBeleidPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPreferentieBeleidPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPreferentieBeleidPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsPreferentieBeleidPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPreferentieBeleidPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsPreferentieBeleid) to the collection in $obj2 (GsThesauriTotaal)
                $obj2->addGsPreferentieBeleid($obj1);
            } // if joined row not null

            // Add objects for joined GsArtikelen rows

            $key3 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = GsArtikelenPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = GsArtikelenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsArtikelenPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (GsPreferentieBeleid) to the collection in $obj3 (GsArtikelen)
                $obj3->addGsPreferentieBeleid($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related PreferentieStatusOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptPreferentieStatusOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPreferentieBeleidPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPreferentieBeleidPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsPreferentieBeleidPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPreferentieBeleidPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsPreferentieBeleidPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsArtikelen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsArtikelen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPreferentieBeleidPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPreferentieBeleidPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsPreferentieBeleidPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPreferentieBeleidPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsPreferentieBeleidPeer::THESAURUSVERWIJZING_PREFERENTIE_STATUS, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPreferentieBeleidPeer::PREFERENTIE_STATUS, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Selects a collection of GsPreferentieBeleid objects pre-filled with all related objects except PreferentieStatusOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPreferentieBeleid objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptPreferentieStatusOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPreferentieBeleidPeer::DATABASE_NAME);
        }

        GsPreferentieBeleidPeer::addSelectColumns($criteria);
        $startcol2 = GsPreferentieBeleidPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsPreferentieBeleidPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPreferentieBeleidPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPreferentieBeleidPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsPreferentieBeleidPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPreferentieBeleidPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsArtikelen rows

                $key2 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsArtikelenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsArtikelenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsArtikelenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsPreferentieBeleid) to the collection in $obj2 (GsArtikelen)
                $obj2->addGsPreferentieBeleid($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPreferentieBeleid objects pre-filled with all related objects except GsArtikelen.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPreferentieBeleid objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsArtikelen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPreferentieBeleidPeer::DATABASE_NAME);
        }

        GsPreferentieBeleidPeer::addSelectColumns($criteria);
        $startcol2 = GsPreferentieBeleidPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(GsPreferentieBeleidPeer::THESAURUSVERWIJZING_PREFERENTIE_STATUS, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPreferentieBeleidPeer::PREFERENTIE_STATUS, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPreferentieBeleidPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPreferentieBeleidPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsPreferentieBeleidPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPreferentieBeleidPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsPreferentieBeleid) to the collection in $obj2 (GsThesauriTotaal)
                $obj2->addGsPreferentieBeleid($obj1);

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
        return Propel::getDatabaseMap(GsPreferentieBeleidPeer::DATABASE_NAME)->getTable(GsPreferentieBeleidPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsPreferentieBeleidPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsPreferentieBeleidPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsPreferentieBeleidTableMap());
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
        return GsPreferentieBeleidPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsPreferentieBeleid or Criteria object.
     *
     * @param      mixed $values Criteria or GsPreferentieBeleid object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsPreferentieBeleidPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsPreferentieBeleid object
        }


        // Set the correct dbName
        $criteria->setDbName(GsPreferentieBeleidPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsPreferentieBeleid or Criteria object.
     *
     * @param      mixed $values Criteria or GsPreferentieBeleid object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsPreferentieBeleidPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsPreferentieBeleidPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsPreferentieBeleidPeer::ZINDEX_NUMMER);
            $value = $criteria->remove(GsPreferentieBeleidPeer::ZINDEX_NUMMER);
            if ($value) {
                $selectCriteria->add(GsPreferentieBeleidPeer::ZINDEX_NUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsPreferentieBeleidPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR);
            $value = $criteria->remove(GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR);
            if ($value) {
                $selectCriteria->add(GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsPreferentieBeleidPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS);
            $value = $criteria->remove(GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS);
            if ($value) {
                $selectCriteria->add(GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsPreferentieBeleidPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS);
            $value = $criteria->remove(GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS);
            if ($value) {
                $selectCriteria->add(GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsPreferentieBeleidPeer::TABLE_NAME);
            }

        } else { // $values is GsPreferentieBeleid object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsPreferentieBeleidPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_preferentie_beleid table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsPreferentieBeleidPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsPreferentieBeleidPeer::TABLE_NAME, $con, GsPreferentieBeleidPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsPreferentieBeleidPeer::clearInstancePool();
            GsPreferentieBeleidPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsPreferentieBeleid or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsPreferentieBeleid object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsPreferentieBeleidPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsPreferentieBeleidPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsPreferentieBeleid) { // it's a model object
            // invalidate the cache for this single object
            GsPreferentieBeleidPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsPreferentieBeleidPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsPreferentieBeleidPeer::ZINDEX_NUMMER, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS, $value[3]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsPreferentieBeleidPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsPreferentieBeleidPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsPreferentieBeleidPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsPreferentieBeleid object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsPreferentieBeleid $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsPreferentieBeleidPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsPreferentieBeleidPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsPreferentieBeleidPeer::DATABASE_NAME, GsPreferentieBeleidPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $zindex_nummer
     * @param   int $uzovi_code_zorgverzekeraar
     * @param   string $startdatum_preferentie_status
     * @param   string $einddatum_preferentie_status
     * @param      PropelPDO $con
     * @return GsPreferentieBeleid
     */
    public static function retrieveByPK($zindex_nummer, $uzovi_code_zorgverzekeraar, $startdatum_preferentie_status, $einddatum_preferentie_status, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $zindex_nummer, (string) $uzovi_code_zorgverzekeraar, (string) $startdatum_preferentie_status, (string) $einddatum_preferentie_status));
         if (null !== ($obj = GsPreferentieBeleidPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsPreferentieBeleidPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsPreferentieBeleidPeer::DATABASE_NAME);
        $criteria->add(GsPreferentieBeleidPeer::ZINDEX_NUMMER, $zindex_nummer);
        $criteria->add(GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR, $uzovi_code_zorgverzekeraar);
        $criteria->add(GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS, $startdatum_preferentie_status);
        $criteria->add(GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS, $einddatum_preferentie_status);
        $v = GsPreferentieBeleidPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsPreferentieBeleidPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsPreferentieBeleidPeer::buildTableMap();

