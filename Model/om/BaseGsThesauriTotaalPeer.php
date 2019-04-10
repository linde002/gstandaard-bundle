<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsThesauriTotaalTableMap;

abstract class BaseGsThesauriTotaalPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_thesauri_totaal';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsThesauriTotaalTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_thesauri_totaal.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_thesauri_totaal.mutatiekode';

    /** the column name for the thesaurusnummer field */
    const THESAURUSNUMMER = 'gs_thesauri_totaal.thesaurusnummer';

    /** the column name for the thesaurus_itemnummer field */
    const THESAURUS_ITEMNUMMER = 'gs_thesauri_totaal.thesaurus_itemnummer';

    /** the column name for the memokode_item field */
    const MEMOKODE_ITEM = 'gs_thesauri_totaal.memokode_item';

    /** the column name for the naam_item_4_posities field */
    const NAAM_ITEM_4_POSITIES = 'gs_thesauri_totaal.naam_item_4_posities';

    /** the column name for the naam_item_15_posities field */
    const NAAM_ITEM_15_POSITIES = 'gs_thesauri_totaal.naam_item_15_posities';

    /** the column name for the naam_item_25_posities field */
    const NAAM_ITEM_25_POSITIES = 'gs_thesauri_totaal.naam_item_25_posities';

    /** the column name for the naam_item_50_posities field */
    const NAAM_ITEM_50_POSITIES = 'gs_thesauri_totaal.naam_item_50_posities';

    /** the column name for the aanvullende_kode_1 field */
    const AANVULLENDE_KODE_1 = 'gs_thesauri_totaal.aanvullende_kode_1';

    /** the column name for the aanvullende_kode_2 field */
    const AANVULLENDE_KODE_2 = 'gs_thesauri_totaal.aanvullende_kode_2';

    /** the column name for the aanvullende_kode_3 field */
    const AANVULLENDE_KODE_3 = 'gs_thesauri_totaal.aanvullende_kode_3';

    /** the column name for the aanvullende_kode_4 field */
    const AANVULLENDE_KODE_4 = 'gs_thesauri_totaal.aanvullende_kode_4';

    /** the column name for the aanvullende_kode_5 field */
    const AANVULLENDE_KODE_5 = 'gs_thesauri_totaal.aanvullende_kode_5';

    /** the column name for the aanvullende_kode_6 field */
    const AANVULLENDE_KODE_6 = 'gs_thesauri_totaal.aanvullende_kode_6';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsThesauriTotaal objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsThesauriTotaal[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsThesauriTotaalPeer::$fieldNames[GsThesauriTotaalPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Thesaurusnummer', 'ThesaurusItemnummer', 'MemokodeItem', 'NaamItem4Posities', 'NaamItem15Posities', 'NaamItem25Posities', 'NaamItem50Posities', 'AanvullendeKode1', 'AanvullendeKode2', 'AanvullendeKode3', 'AanvullendeKode4', 'AanvullendeKode5', 'AanvullendeKode6', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'thesaurusnummer', 'thesaurusItemnummer', 'memokodeItem', 'naamItem4Posities', 'naamItem15Posities', 'naamItem25Posities', 'naamItem50Posities', 'aanvullendeKode1', 'aanvullendeKode2', 'aanvullendeKode3', 'aanvullendeKode4', 'aanvullendeKode5', 'aanvullendeKode6', ),
        BasePeer::TYPE_COLNAME => array (GsThesauriTotaalPeer::BESTANDNUMMER, GsThesauriTotaalPeer::MUTATIEKODE, GsThesauriTotaalPeer::THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, GsThesauriTotaalPeer::MEMOKODE_ITEM, GsThesauriTotaalPeer::NAAM_ITEM_4_POSITIES, GsThesauriTotaalPeer::NAAM_ITEM_15_POSITIES, GsThesauriTotaalPeer::NAAM_ITEM_25_POSITIES, GsThesauriTotaalPeer::NAAM_ITEM_50_POSITIES, GsThesauriTotaalPeer::AANVULLENDE_KODE_1, GsThesauriTotaalPeer::AANVULLENDE_KODE_2, GsThesauriTotaalPeer::AANVULLENDE_KODE_3, GsThesauriTotaalPeer::AANVULLENDE_KODE_4, GsThesauriTotaalPeer::AANVULLENDE_KODE_5, GsThesauriTotaalPeer::AANVULLENDE_KODE_6, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'THESAURUSNUMMER', 'THESAURUS_ITEMNUMMER', 'MEMOKODE_ITEM', 'NAAM_ITEM_4_POSITIES', 'NAAM_ITEM_15_POSITIES', 'NAAM_ITEM_25_POSITIES', 'NAAM_ITEM_50_POSITIES', 'AANVULLENDE_KODE_1', 'AANVULLENDE_KODE_2', 'AANVULLENDE_KODE_3', 'AANVULLENDE_KODE_4', 'AANVULLENDE_KODE_5', 'AANVULLENDE_KODE_6', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'thesaurusnummer', 'thesaurus_itemnummer', 'memokode_item', 'naam_item_4_posities', 'naam_item_15_posities', 'naam_item_25_posities', 'naam_item_50_posities', 'aanvullende_kode_1', 'aanvullende_kode_2', 'aanvullende_kode_3', 'aanvullende_kode_4', 'aanvullende_kode_5', 'aanvullende_kode_6', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsThesauriTotaalPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Thesaurusnummer' => 2, 'ThesaurusItemnummer' => 3, 'MemokodeItem' => 4, 'NaamItem4Posities' => 5, 'NaamItem15Posities' => 6, 'NaamItem25Posities' => 7, 'NaamItem50Posities' => 8, 'AanvullendeKode1' => 9, 'AanvullendeKode2' => 10, 'AanvullendeKode3' => 11, 'AanvullendeKode4' => 12, 'AanvullendeKode5' => 13, 'AanvullendeKode6' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'thesaurusnummer' => 2, 'thesaurusItemnummer' => 3, 'memokodeItem' => 4, 'naamItem4Posities' => 5, 'naamItem15Posities' => 6, 'naamItem25Posities' => 7, 'naamItem50Posities' => 8, 'aanvullendeKode1' => 9, 'aanvullendeKode2' => 10, 'aanvullendeKode3' => 11, 'aanvullendeKode4' => 12, 'aanvullendeKode5' => 13, 'aanvullendeKode6' => 14, ),
        BasePeer::TYPE_COLNAME => array (GsThesauriTotaalPeer::BESTANDNUMMER => 0, GsThesauriTotaalPeer::MUTATIEKODE => 1, GsThesauriTotaalPeer::THESAURUSNUMMER => 2, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER => 3, GsThesauriTotaalPeer::MEMOKODE_ITEM => 4, GsThesauriTotaalPeer::NAAM_ITEM_4_POSITIES => 5, GsThesauriTotaalPeer::NAAM_ITEM_15_POSITIES => 6, GsThesauriTotaalPeer::NAAM_ITEM_25_POSITIES => 7, GsThesauriTotaalPeer::NAAM_ITEM_50_POSITIES => 8, GsThesauriTotaalPeer::AANVULLENDE_KODE_1 => 9, GsThesauriTotaalPeer::AANVULLENDE_KODE_2 => 10, GsThesauriTotaalPeer::AANVULLENDE_KODE_3 => 11, GsThesauriTotaalPeer::AANVULLENDE_KODE_4 => 12, GsThesauriTotaalPeer::AANVULLENDE_KODE_5 => 13, GsThesauriTotaalPeer::AANVULLENDE_KODE_6 => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'THESAURUSNUMMER' => 2, 'THESAURUS_ITEMNUMMER' => 3, 'MEMOKODE_ITEM' => 4, 'NAAM_ITEM_4_POSITIES' => 5, 'NAAM_ITEM_15_POSITIES' => 6, 'NAAM_ITEM_25_POSITIES' => 7, 'NAAM_ITEM_50_POSITIES' => 8, 'AANVULLENDE_KODE_1' => 9, 'AANVULLENDE_KODE_2' => 10, 'AANVULLENDE_KODE_3' => 11, 'AANVULLENDE_KODE_4' => 12, 'AANVULLENDE_KODE_5' => 13, 'AANVULLENDE_KODE_6' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'thesaurusnummer' => 2, 'thesaurus_itemnummer' => 3, 'memokode_item' => 4, 'naam_item_4_posities' => 5, 'naam_item_15_posities' => 6, 'naam_item_25_posities' => 7, 'naam_item_50_posities' => 8, 'aanvullende_kode_1' => 9, 'aanvullende_kode_2' => 10, 'aanvullende_kode_3' => 11, 'aanvullende_kode_4' => 12, 'aanvullende_kode_5' => 13, 'aanvullende_kode_6' => 14, ),
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
        $toNames = GsThesauriTotaalPeer::getFieldNames($toType);
        $key = isset(GsThesauriTotaalPeer::$fieldKeys[$fromType][$name]) ? GsThesauriTotaalPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsThesauriTotaalPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsThesauriTotaalPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsThesauriTotaalPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsThesauriTotaalPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsThesauriTotaalPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsThesauriTotaalPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsThesauriTotaalPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsThesauriTotaalPeer::THESAURUSNUMMER);
            $criteria->addSelectColumn(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER);
            $criteria->addSelectColumn(GsThesauriTotaalPeer::MEMOKODE_ITEM);
            $criteria->addSelectColumn(GsThesauriTotaalPeer::NAAM_ITEM_4_POSITIES);
            $criteria->addSelectColumn(GsThesauriTotaalPeer::NAAM_ITEM_15_POSITIES);
            $criteria->addSelectColumn(GsThesauriTotaalPeer::NAAM_ITEM_25_POSITIES);
            $criteria->addSelectColumn(GsThesauriTotaalPeer::NAAM_ITEM_50_POSITIES);
            $criteria->addSelectColumn(GsThesauriTotaalPeer::AANVULLENDE_KODE_1);
            $criteria->addSelectColumn(GsThesauriTotaalPeer::AANVULLENDE_KODE_2);
            $criteria->addSelectColumn(GsThesauriTotaalPeer::AANVULLENDE_KODE_3);
            $criteria->addSelectColumn(GsThesauriTotaalPeer::AANVULLENDE_KODE_4);
            $criteria->addSelectColumn(GsThesauriTotaalPeer::AANVULLENDE_KODE_5);
            $criteria->addSelectColumn(GsThesauriTotaalPeer::AANVULLENDE_KODE_6);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.thesaurusnummer');
            $criteria->addSelectColumn($alias . '.thesaurus_itemnummer');
            $criteria->addSelectColumn($alias . '.memokode_item');
            $criteria->addSelectColumn($alias . '.naam_item_4_posities');
            $criteria->addSelectColumn($alias . '.naam_item_15_posities');
            $criteria->addSelectColumn($alias . '.naam_item_25_posities');
            $criteria->addSelectColumn($alias . '.naam_item_50_posities');
            $criteria->addSelectColumn($alias . '.aanvullende_kode_1');
            $criteria->addSelectColumn($alias . '.aanvullende_kode_2');
            $criteria->addSelectColumn($alias . '.aanvullende_kode_3');
            $criteria->addSelectColumn($alias . '.aanvullende_kode_4');
            $criteria->addSelectColumn($alias . '.aanvullende_kode_5');
            $criteria->addSelectColumn($alias . '.aanvullende_kode_6');
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
        $criteria->setPrimaryTableName(GsThesauriTotaalPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsThesauriTotaalPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsThesauriTotaalPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsThesauriTotaalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsThesauriTotaal
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsThesauriTotaalPeer::doSelect($critcopy, $con);
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
        return GsThesauriTotaalPeer::populateObjects(GsThesauriTotaalPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsThesauriTotaalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsThesauriTotaalPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsThesauriTotaalPeer::DATABASE_NAME);

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
     * @param GsThesauriTotaal $obj A GsThesauriTotaal object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getThesaurusnummer(), (string) $obj->getThesaurusItemnummer()));
            } // if key === null
            GsThesauriTotaalPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsThesauriTotaal object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsThesauriTotaal) {
                $key = serialize(array((string) $value->getThesaurusnummer(), (string) $value->getThesaurusItemnummer()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsThesauriTotaal object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsThesauriTotaalPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsThesauriTotaal Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsThesauriTotaalPeer::$instances[$key])) {
                return GsThesauriTotaalPeer::$instances[$key];
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
        foreach (GsThesauriTotaalPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsThesauriTotaalPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_thesauri_totaal
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
        $cls = GsThesauriTotaalPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsThesauriTotaalPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsThesauriTotaalPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsThesauriTotaal object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsThesauriTotaalPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsThesauriTotaalPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsThesauriTotaalPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsThesauriTotaalPeer::DATABASE_NAME)->getTable(GsThesauriTotaalPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsThesauriTotaalPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsThesauriTotaalPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsThesauriTotaalTableMap());
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
        return GsThesauriTotaalPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsThesauriTotaal or Criteria object.
     *
     * @param      mixed $values Criteria or GsThesauriTotaal object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsThesauriTotaalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsThesauriTotaal object
        }


        // Set the correct dbName
        $criteria->setDbName(GsThesauriTotaalPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsThesauriTotaal or Criteria object.
     *
     * @param      mixed $values Criteria or GsThesauriTotaal object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsThesauriTotaalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsThesauriTotaalPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsThesauriTotaalPeer::THESAURUSNUMMER);
            $value = $criteria->remove(GsThesauriTotaalPeer::THESAURUSNUMMER);
            if ($value) {
                $selectCriteria->add(GsThesauriTotaalPeer::THESAURUSNUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsThesauriTotaalPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER);
            $value = $criteria->remove(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER);
            if ($value) {
                $selectCriteria->add(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsThesauriTotaalPeer::TABLE_NAME);
            }

        } else { // $values is GsThesauriTotaal object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsThesauriTotaalPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_thesauri_totaal table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsThesauriTotaalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsThesauriTotaalPeer::TABLE_NAME, $con, GsThesauriTotaalPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsThesauriTotaalPeer::clearInstancePool();
            GsThesauriTotaalPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsThesauriTotaal or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsThesauriTotaal object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsThesauriTotaalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsThesauriTotaalPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsThesauriTotaal) { // it's a model object
            // invalidate the cache for this single object
            GsThesauriTotaalPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsThesauriTotaalPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsThesauriTotaalPeer::THESAURUSNUMMER, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsThesauriTotaalPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsThesauriTotaalPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsThesauriTotaalPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsThesauriTotaal object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsThesauriTotaal $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsThesauriTotaalPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsThesauriTotaalPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsThesauriTotaalPeer::DATABASE_NAME, GsThesauriTotaalPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $thesaurusnummer
     * @param   int $thesaurus_itemnummer
     * @param      PropelPDO $con
     * @return GsThesauriTotaal
     */
    public static function retrieveByPK($thesaurusnummer, $thesaurus_itemnummer, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $thesaurusnummer, (string) $thesaurus_itemnummer));
         if (null !== ($obj = GsThesauriTotaalPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsThesauriTotaalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsThesauriTotaalPeer::DATABASE_NAME);
        $criteria->add(GsThesauriTotaalPeer::THESAURUSNUMMER, $thesaurusnummer);
        $criteria->add(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $thesaurus_itemnummer);
        $v = GsThesauriTotaalPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsThesauriTotaalPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsThesauriTotaalPeer::buildTableMap();

