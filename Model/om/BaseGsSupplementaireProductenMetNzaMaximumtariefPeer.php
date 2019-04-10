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
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenMetNzaMaximumtarief;
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenMetNzaMaximumtariefPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsSupplementaireProductenMetNzaMaximumtariefTableMap;

abstract class BaseGsSupplementaireProductenMetNzaMaximumtariefPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_supplementaire_producten_met_nza_maximumtarief';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsSupplementaireProductenMetNzaMaximumtarief';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsSupplementaireProductenMetNzaMaximumtariefTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_supplementaire_producten_met_nza_maximumtarief.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_supplementaire_producten_met_nza_maximumtarief.mutatiekode';

    /** the column name for the zindex_nummer field */
    const ZINDEX_NUMMER = 'gs_supplementaire_producten_met_nza_maximumtarief.zindex_nummer';

    /** the column name for the nza_maximum_tarief_inc_btw_laag field */
    const NZA_MAXIMUM_TARIEF_INC_BTW_LAAG = 'gs_supplementaire_producten_met_nza_maximumtarief.nza_maximum_tarief_inc_btw_laag';

    /** the column name for the thesaurus_nummer_soort_supplementair_product field */
    const THESAURUS_NUMMER_SOORT_SUPPLEMENTAIR_PRODUCT = 'gs_supplementaire_producten_met_nza_maximumtarief.thesaurus_nummer_soort_supplementair_product';

    /** the column name for the soort_supplementair_product field */
    const SOORT_SUPPLEMENTAIR_PRODUCT = 'gs_supplementaire_producten_met_nza_maximumtarief.soort_supplementair_product';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsSupplementaireProductenMetNzaMaximumtarief objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsSupplementaireProductenMetNzaMaximumtarief[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsSupplementaireProductenMetNzaMaximumtariefPeer::$fieldNames[GsSupplementaireProductenMetNzaMaximumtariefPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'ZindexNummer', 'NzaMaximumTariefIncBtwLaag', 'ThesaurusNummerSoortSupplementairProduct', 'SoortSupplementairProduct', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'zindexNummer', 'nzaMaximumTariefIncBtwLaag', 'thesaurusNummerSoortSupplementairProduct', 'soortSupplementairProduct', ),
        BasePeer::TYPE_COLNAME => array (GsSupplementaireProductenMetNzaMaximumtariefPeer::BESTANDNUMMER, GsSupplementaireProductenMetNzaMaximumtariefPeer::MUTATIEKODE, GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, GsSupplementaireProductenMetNzaMaximumtariefPeer::NZA_MAXIMUM_TARIEF_INC_BTW_LAAG, GsSupplementaireProductenMetNzaMaximumtariefPeer::THESAURUS_NUMMER_SOORT_SUPPLEMENTAIR_PRODUCT, GsSupplementaireProductenMetNzaMaximumtariefPeer::SOORT_SUPPLEMENTAIR_PRODUCT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'ZINDEX_NUMMER', 'NZA_MAXIMUM_TARIEF_INC_BTW_LAAG', 'THESAURUS_NUMMER_SOORT_SUPPLEMENTAIR_PRODUCT', 'SOORT_SUPPLEMENTAIR_PRODUCT', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'zindex_nummer', 'nza_maximum_tarief_inc_btw_laag', 'thesaurus_nummer_soort_supplementair_product', 'soort_supplementair_product', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsSupplementaireProductenMetNzaMaximumtariefPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'ZindexNummer' => 2, 'NzaMaximumTariefIncBtwLaag' => 3, 'ThesaurusNummerSoortSupplementairProduct' => 4, 'SoortSupplementairProduct' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'zindexNummer' => 2, 'nzaMaximumTariefIncBtwLaag' => 3, 'thesaurusNummerSoortSupplementairProduct' => 4, 'soortSupplementairProduct' => 5, ),
        BasePeer::TYPE_COLNAME => array (GsSupplementaireProductenMetNzaMaximumtariefPeer::BESTANDNUMMER => 0, GsSupplementaireProductenMetNzaMaximumtariefPeer::MUTATIEKODE => 1, GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER => 2, GsSupplementaireProductenMetNzaMaximumtariefPeer::NZA_MAXIMUM_TARIEF_INC_BTW_LAAG => 3, GsSupplementaireProductenMetNzaMaximumtariefPeer::THESAURUS_NUMMER_SOORT_SUPPLEMENTAIR_PRODUCT => 4, GsSupplementaireProductenMetNzaMaximumtariefPeer::SOORT_SUPPLEMENTAIR_PRODUCT => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'ZINDEX_NUMMER' => 2, 'NZA_MAXIMUM_TARIEF_INC_BTW_LAAG' => 3, 'THESAURUS_NUMMER_SOORT_SUPPLEMENTAIR_PRODUCT' => 4, 'SOORT_SUPPLEMENTAIR_PRODUCT' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'zindex_nummer' => 2, 'nza_maximum_tarief_inc_btw_laag' => 3, 'thesaurus_nummer_soort_supplementair_product' => 4, 'soort_supplementair_product' => 5, ),
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
        $toNames = GsSupplementaireProductenMetNzaMaximumtariefPeer::getFieldNames($toType);
        $key = isset(GsSupplementaireProductenMetNzaMaximumtariefPeer::$fieldKeys[$fromType][$name]) ? GsSupplementaireProductenMetNzaMaximumtariefPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsSupplementaireProductenMetNzaMaximumtariefPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsSupplementaireProductenMetNzaMaximumtariefPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsSupplementaireProductenMetNzaMaximumtariefPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsSupplementaireProductenMetNzaMaximumtariefPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsSupplementaireProductenMetNzaMaximumtariefPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsSupplementaireProductenMetNzaMaximumtariefPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsSupplementaireProductenMetNzaMaximumtariefPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER);
            $criteria->addSelectColumn(GsSupplementaireProductenMetNzaMaximumtariefPeer::NZA_MAXIMUM_TARIEF_INC_BTW_LAAG);
            $criteria->addSelectColumn(GsSupplementaireProductenMetNzaMaximumtariefPeer::THESAURUS_NUMMER_SOORT_SUPPLEMENTAIR_PRODUCT);
            $criteria->addSelectColumn(GsSupplementaireProductenMetNzaMaximumtariefPeer::SOORT_SUPPLEMENTAIR_PRODUCT);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.zindex_nummer');
            $criteria->addSelectColumn($alias . '.nza_maximum_tarief_inc_btw_laag');
            $criteria->addSelectColumn($alias . '.thesaurus_nummer_soort_supplementair_product');
            $criteria->addSelectColumn($alias . '.soort_supplementair_product');
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
        $criteria->setPrimaryTableName(GsSupplementaireProductenMetNzaMaximumtariefPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsSupplementaireProductenMetNzaMaximumtariefPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsSupplementaireProductenMetNzaMaximumtarief
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsSupplementaireProductenMetNzaMaximumtariefPeer::doSelect($critcopy, $con);
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
        return GsSupplementaireProductenMetNzaMaximumtariefPeer::populateObjects(GsSupplementaireProductenMetNzaMaximumtariefPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsSupplementaireProductenMetNzaMaximumtariefPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME);

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
     * @param GsSupplementaireProductenMetNzaMaximumtarief $obj A GsSupplementaireProductenMetNzaMaximumtarief object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getZindexNummer();
            } // if key === null
            GsSupplementaireProductenMetNzaMaximumtariefPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsSupplementaireProductenMetNzaMaximumtarief object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsSupplementaireProductenMetNzaMaximumtarief) {
                $key = (string) $value->getZindexNummer();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsSupplementaireProductenMetNzaMaximumtarief object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsSupplementaireProductenMetNzaMaximumtariefPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsSupplementaireProductenMetNzaMaximumtarief Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsSupplementaireProductenMetNzaMaximumtariefPeer::$instances[$key])) {
                return GsSupplementaireProductenMetNzaMaximumtariefPeer::$instances[$key];
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
        foreach (GsSupplementaireProductenMetNzaMaximumtariefPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsSupplementaireProductenMetNzaMaximumtariefPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_supplementaire_producten_met_nza_maximumtarief
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

        return (int) $row[$startcol + 2];
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
        $cls = GsSupplementaireProductenMetNzaMaximumtariefPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsSupplementaireProductenMetNzaMaximumtariefPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsSupplementaireProductenMetNzaMaximumtariefPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsSupplementaireProductenMetNzaMaximumtariefPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsSupplementaireProductenMetNzaMaximumtarief object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsSupplementaireProductenMetNzaMaximumtariefPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsSupplementaireProductenMetNzaMaximumtariefPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsSupplementaireProductenMetNzaMaximumtariefPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsSupplementaireProductenMetNzaMaximumtariefPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsSupplementaireProductenMetNzaMaximumtariefPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        $criteria->setPrimaryTableName(GsSupplementaireProductenMetNzaMaximumtariefPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsSupplementaireProductenMetNzaMaximumtariefPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Selects a collection of GsSupplementaireProductenMetNzaMaximumtarief objects pre-filled with their GsArtikelen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsSupplementaireProductenMetNzaMaximumtarief objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsArtikelen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME);
        }

        GsSupplementaireProductenMetNzaMaximumtariefPeer::addSelectColumns($criteria);
        $startcol = GsSupplementaireProductenMetNzaMaximumtariefPeer::NUM_HYDRATE_COLUMNS;
        GsArtikelenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsSupplementaireProductenMetNzaMaximumtariefPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsSupplementaireProductenMetNzaMaximumtariefPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsSupplementaireProductenMetNzaMaximumtariefPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsSupplementaireProductenMetNzaMaximumtariefPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsSupplementaireProductenMetNzaMaximumtarief) to $obj2 (GsArtikelen)
                // one to one relationship
                $obj1->setGsArtikelen($obj2);

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
        $criteria->setPrimaryTableName(GsSupplementaireProductenMetNzaMaximumtariefPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsSupplementaireProductenMetNzaMaximumtariefPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Selects a collection of GsSupplementaireProductenMetNzaMaximumtarief objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsSupplementaireProductenMetNzaMaximumtarief objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME);
        }

        GsSupplementaireProductenMetNzaMaximumtariefPeer::addSelectColumns($criteria);
        $startcol2 = GsSupplementaireProductenMetNzaMaximumtariefPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsSupplementaireProductenMetNzaMaximumtariefPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsSupplementaireProductenMetNzaMaximumtariefPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsSupplementaireProductenMetNzaMaximumtariefPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsSupplementaireProductenMetNzaMaximumtariefPeer::addInstanceToPool($obj1, $key1);
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
                } // if obj2 loaded

                // Add the $obj1 (GsSupplementaireProductenMetNzaMaximumtarief) to the collection in $obj2 (GsArtikelen)
                $obj1->setGsArtikelen($obj2);
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
        return Propel::getDatabaseMap(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME)->getTable(GsSupplementaireProductenMetNzaMaximumtariefPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsSupplementaireProductenMetNzaMaximumtariefPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsSupplementaireProductenMetNzaMaximumtariefTableMap());
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
        return GsSupplementaireProductenMetNzaMaximumtariefPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsSupplementaireProductenMetNzaMaximumtarief or Criteria object.
     *
     * @param      mixed $values Criteria or GsSupplementaireProductenMetNzaMaximumtarief object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsSupplementaireProductenMetNzaMaximumtarief object
        }


        // Set the correct dbName
        $criteria->setDbName(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsSupplementaireProductenMetNzaMaximumtarief or Criteria object.
     *
     * @param      mixed $values Criteria or GsSupplementaireProductenMetNzaMaximumtarief object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER);
            $value = $criteria->remove(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER);
            if ($value) {
                $selectCriteria->add(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsSupplementaireProductenMetNzaMaximumtariefPeer::TABLE_NAME);
            }

        } else { // $values is GsSupplementaireProductenMetNzaMaximumtarief object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_supplementaire_producten_met_nza_maximumtarief table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsSupplementaireProductenMetNzaMaximumtariefPeer::TABLE_NAME, $con, GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsSupplementaireProductenMetNzaMaximumtariefPeer::clearInstancePool();
            GsSupplementaireProductenMetNzaMaximumtariefPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsSupplementaireProductenMetNzaMaximumtarief or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsSupplementaireProductenMetNzaMaximumtarief object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsSupplementaireProductenMetNzaMaximumtariefPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsSupplementaireProductenMetNzaMaximumtarief) { // it's a model object
            // invalidate the cache for this single object
            GsSupplementaireProductenMetNzaMaximumtariefPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME);
            $criteria->add(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsSupplementaireProductenMetNzaMaximumtariefPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsSupplementaireProductenMetNzaMaximumtariefPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsSupplementaireProductenMetNzaMaximumtarief object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsSupplementaireProductenMetNzaMaximumtarief $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsSupplementaireProductenMetNzaMaximumtariefPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME, GsSupplementaireProductenMetNzaMaximumtariefPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsSupplementaireProductenMetNzaMaximumtarief
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsSupplementaireProductenMetNzaMaximumtariefPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME);
        $criteria->add(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, $pk);

        $v = GsSupplementaireProductenMetNzaMaximumtariefPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsSupplementaireProductenMetNzaMaximumtarief[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME);
            $criteria->add(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, $pks, Criteria::IN);
            $objs = GsSupplementaireProductenMetNzaMaximumtariefPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsSupplementaireProductenMetNzaMaximumtariefPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsSupplementaireProductenMetNzaMaximumtariefPeer::buildTableMap();

