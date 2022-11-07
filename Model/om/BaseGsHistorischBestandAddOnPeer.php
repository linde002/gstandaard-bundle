<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsHistorischBestandAddOn;
use PharmaIntelligence\GstandaardBundle\Model\GsHistorischBestandAddOnPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsHistorischBestandAddOnTableMap;

abstract class BaseGsHistorischBestandAddOnPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_historisch_bestand_add_on';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHistorischBestandAddOn';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsHistorischBestandAddOnTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the zindex_nummer field */
    const ZINDEX_NUMMER = 'gs_historisch_bestand_add_on.zindex_nummer';

    /** the column name for the artikel_omschrijving field */
    const ARTIKEL_OMSCHRIJVING = 'gs_historisch_bestand_add_on.artikel_omschrijving';

    /** the column name for the inkoop_hoeveelheid field */
    const INKOOP_HOEVEELHEID = 'gs_historisch_bestand_add_on.inkoop_hoeveelheid';

    /** the column name for the inkoop_eenheid field */
    const INKOOP_EENHEID = 'gs_historisch_bestand_add_on.inkoop_eenheid';

    /** the column name for the maximum_prijs field */
    const MAXIMUM_PRIJS = 'gs_historisch_bestand_add_on.maximum_prijs';

    /** the column name for the soort_product field */
    const SOORT_PRODUCT = 'gs_historisch_bestand_add_on.soort_product';

    /** the column name for the indicatie_id field */
    const INDICATIE_ID = 'gs_historisch_bestand_add_on.indicatie_id';

    /** the column name for the soort_indicatie field */
    const SOORT_INDICATIE = 'gs_historisch_bestand_add_on.soort_indicatie';

    /** the column name for the duiding_id field */
    const DUIDING_ID = 'gs_historisch_bestand_add_on.duiding_id';

    /** the column name for the aanspraak_status field */
    const AANSPRAAK_STATUS = 'gs_historisch_bestand_add_on.aanspraak_status';

    /** the column name for the start_datum field */
    const START_DATUM = 'gs_historisch_bestand_add_on.start_datum';

    /** the column name for the eind_datum field */
    const EIND_DATUM = 'gs_historisch_bestand_add_on.eind_datum';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsHistorischBestandAddOn objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsHistorischBestandAddOn[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsHistorischBestandAddOnPeer::$fieldNames[GsHistorischBestandAddOnPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('ZindexNummer', 'ArtikelOmschrijving', 'InkoopHoeveelheid', 'InkoopEenheid', 'MaximumPrijs', 'SoortProduct', 'IndicatieId', 'SoortIndicatie', 'DuidingId', 'AanspraakStatus', 'StartDatum', 'EindDatum', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('zindexNummer', 'artikelOmschrijving', 'inkoopHoeveelheid', 'inkoopEenheid', 'maximumPrijs', 'soortProduct', 'indicatieId', 'soortIndicatie', 'duidingId', 'aanspraakStatus', 'startDatum', 'eindDatum', ),
        BasePeer::TYPE_COLNAME => array (GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, GsHistorischBestandAddOnPeer::ARTIKEL_OMSCHRIJVING, GsHistorischBestandAddOnPeer::INKOOP_HOEVEELHEID, GsHistorischBestandAddOnPeer::INKOOP_EENHEID, GsHistorischBestandAddOnPeer::MAXIMUM_PRIJS, GsHistorischBestandAddOnPeer::SOORT_PRODUCT, GsHistorischBestandAddOnPeer::INDICATIE_ID, GsHistorischBestandAddOnPeer::SOORT_INDICATIE, GsHistorischBestandAddOnPeer::DUIDING_ID, GsHistorischBestandAddOnPeer::AANSPRAAK_STATUS, GsHistorischBestandAddOnPeer::START_DATUM, GsHistorischBestandAddOnPeer::EIND_DATUM, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ZINDEX_NUMMER', 'ARTIKEL_OMSCHRIJVING', 'INKOOP_HOEVEELHEID', 'INKOOP_EENHEID', 'MAXIMUM_PRIJS', 'SOORT_PRODUCT', 'INDICATIE_ID', 'SOORT_INDICATIE', 'DUIDING_ID', 'AANSPRAAK_STATUS', 'START_DATUM', 'EIND_DATUM', ),
        BasePeer::TYPE_FIELDNAME => array ('zindex_nummer', 'artikel_omschrijving', 'inkoop_hoeveelheid', 'inkoop_eenheid', 'maximum_prijs', 'soort_product', 'indicatie_id', 'soort_indicatie', 'duiding_id', 'aanspraak_status', 'start_datum', 'eind_datum', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsHistorischBestandAddOnPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('ZindexNummer' => 0, 'ArtikelOmschrijving' => 1, 'InkoopHoeveelheid' => 2, 'InkoopEenheid' => 3, 'MaximumPrijs' => 4, 'SoortProduct' => 5, 'IndicatieId' => 6, 'SoortIndicatie' => 7, 'DuidingId' => 8, 'AanspraakStatus' => 9, 'StartDatum' => 10, 'EindDatum' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('zindexNummer' => 0, 'artikelOmschrijving' => 1, 'inkoopHoeveelheid' => 2, 'inkoopEenheid' => 3, 'maximumPrijs' => 4, 'soortProduct' => 5, 'indicatieId' => 6, 'soortIndicatie' => 7, 'duidingId' => 8, 'aanspraakStatus' => 9, 'startDatum' => 10, 'eindDatum' => 11, ),
        BasePeer::TYPE_COLNAME => array (GsHistorischBestandAddOnPeer::ZINDEX_NUMMER => 0, GsHistorischBestandAddOnPeer::ARTIKEL_OMSCHRIJVING => 1, GsHistorischBestandAddOnPeer::INKOOP_HOEVEELHEID => 2, GsHistorischBestandAddOnPeer::INKOOP_EENHEID => 3, GsHistorischBestandAddOnPeer::MAXIMUM_PRIJS => 4, GsHistorischBestandAddOnPeer::SOORT_PRODUCT => 5, GsHistorischBestandAddOnPeer::INDICATIE_ID => 6, GsHistorischBestandAddOnPeer::SOORT_INDICATIE => 7, GsHistorischBestandAddOnPeer::DUIDING_ID => 8, GsHistorischBestandAddOnPeer::AANSPRAAK_STATUS => 9, GsHistorischBestandAddOnPeer::START_DATUM => 10, GsHistorischBestandAddOnPeer::EIND_DATUM => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ZINDEX_NUMMER' => 0, 'ARTIKEL_OMSCHRIJVING' => 1, 'INKOOP_HOEVEELHEID' => 2, 'INKOOP_EENHEID' => 3, 'MAXIMUM_PRIJS' => 4, 'SOORT_PRODUCT' => 5, 'INDICATIE_ID' => 6, 'SOORT_INDICATIE' => 7, 'DUIDING_ID' => 8, 'AANSPRAAK_STATUS' => 9, 'START_DATUM' => 10, 'EIND_DATUM' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('zindex_nummer' => 0, 'artikel_omschrijving' => 1, 'inkoop_hoeveelheid' => 2, 'inkoop_eenheid' => 3, 'maximum_prijs' => 4, 'soort_product' => 5, 'indicatie_id' => 6, 'soort_indicatie' => 7, 'duiding_id' => 8, 'aanspraak_status' => 9, 'start_datum' => 10, 'eind_datum' => 11, ),
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
        $toNames = GsHistorischBestandAddOnPeer::getFieldNames($toType);
        $key = isset(GsHistorischBestandAddOnPeer::$fieldKeys[$fromType][$name]) ? GsHistorischBestandAddOnPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsHistorischBestandAddOnPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsHistorischBestandAddOnPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsHistorischBestandAddOnPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsHistorischBestandAddOnPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsHistorischBestandAddOnPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER);
            $criteria->addSelectColumn(GsHistorischBestandAddOnPeer::ARTIKEL_OMSCHRIJVING);
            $criteria->addSelectColumn(GsHistorischBestandAddOnPeer::INKOOP_HOEVEELHEID);
            $criteria->addSelectColumn(GsHistorischBestandAddOnPeer::INKOOP_EENHEID);
            $criteria->addSelectColumn(GsHistorischBestandAddOnPeer::MAXIMUM_PRIJS);
            $criteria->addSelectColumn(GsHistorischBestandAddOnPeer::SOORT_PRODUCT);
            $criteria->addSelectColumn(GsHistorischBestandAddOnPeer::INDICATIE_ID);
            $criteria->addSelectColumn(GsHistorischBestandAddOnPeer::SOORT_INDICATIE);
            $criteria->addSelectColumn(GsHistorischBestandAddOnPeer::DUIDING_ID);
            $criteria->addSelectColumn(GsHistorischBestandAddOnPeer::AANSPRAAK_STATUS);
            $criteria->addSelectColumn(GsHistorischBestandAddOnPeer::START_DATUM);
            $criteria->addSelectColumn(GsHistorischBestandAddOnPeer::EIND_DATUM);
        } else {
            $criteria->addSelectColumn($alias . '.zindex_nummer');
            $criteria->addSelectColumn($alias . '.artikel_omschrijving');
            $criteria->addSelectColumn($alias . '.inkoop_hoeveelheid');
            $criteria->addSelectColumn($alias . '.inkoop_eenheid');
            $criteria->addSelectColumn($alias . '.maximum_prijs');
            $criteria->addSelectColumn($alias . '.soort_product');
            $criteria->addSelectColumn($alias . '.indicatie_id');
            $criteria->addSelectColumn($alias . '.soort_indicatie');
            $criteria->addSelectColumn($alias . '.duiding_id');
            $criteria->addSelectColumn($alias . '.aanspraak_status');
            $criteria->addSelectColumn($alias . '.start_datum');
            $criteria->addSelectColumn($alias . '.eind_datum');
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
        $criteria->setPrimaryTableName(GsHistorischBestandAddOnPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHistorischBestandAddOnPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsHistorischBestandAddOnPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsHistorischBestandAddOnPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsHistorischBestandAddOn
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsHistorischBestandAddOnPeer::doSelect($critcopy, $con);
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
        return GsHistorischBestandAddOnPeer::populateObjects(GsHistorischBestandAddOnPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsHistorischBestandAddOnPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsHistorischBestandAddOnPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsHistorischBestandAddOnPeer::DATABASE_NAME);

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
     * @param GsHistorischBestandAddOn $obj A GsHistorischBestandAddOn object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getZindexNummer(), (string) $obj->getIndicatieId(), (string) $obj->getStartDatum('U')));
            } // if key === null
            GsHistorischBestandAddOnPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsHistorischBestandAddOn object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsHistorischBestandAddOn) {
                $key = serialize(array((string) $value->getZindexNummer(), (string) $value->getIndicatieId(), (string) $value->getStartDatum()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsHistorischBestandAddOn object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsHistorischBestandAddOnPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsHistorischBestandAddOn Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsHistorischBestandAddOnPeer::$instances[$key])) {
                return GsHistorischBestandAddOnPeer::$instances[$key];
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
        foreach (GsHistorischBestandAddOnPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsHistorischBestandAddOnPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_historisch_bestand_add_on
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
        if ($row[$startcol] === null && $row[$startcol + 6] === null && $row[$startcol + 10] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 6], (string) $row[$startcol + 10]));
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

        return array((int) $row[$startcol], (int) $row[$startcol + 6], (string) $row[$startcol + 10]);
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
        $cls = GsHistorischBestandAddOnPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsHistorischBestandAddOnPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsHistorischBestandAddOnPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsHistorischBestandAddOnPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsHistorischBestandAddOn object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsHistorischBestandAddOnPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsHistorischBestandAddOnPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsHistorischBestandAddOnPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsHistorischBestandAddOnPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsHistorischBestandAddOnPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(GsHistorischBestandAddOnPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHistorischBestandAddOnPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsHistorischBestandAddOnPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHistorischBestandAddOnPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsArtikelEigenschappen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsArtikelEigenschappen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHistorischBestandAddOnPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHistorischBestandAddOnPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsHistorischBestandAddOnPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHistorischBestandAddOnPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $join_behavior);

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
     * Selects a collection of GsHistorischBestandAddOn objects pre-filled with their GsArtikelen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHistorischBestandAddOn objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsArtikelen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHistorischBestandAddOnPeer::DATABASE_NAME);
        }

        GsHistorischBestandAddOnPeer::addSelectColumns($criteria);
        $startcol = GsHistorischBestandAddOnPeer::NUM_HYDRATE_COLUMNS;
        GsArtikelenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHistorischBestandAddOnPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHistorischBestandAddOnPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsHistorischBestandAddOnPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHistorischBestandAddOnPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsHistorischBestandAddOn) to $obj2 (GsArtikelen)
                $obj2->addGsHistorischBestandAddOn($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHistorischBestandAddOn objects pre-filled with their GsArtikelEigenschappen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHistorischBestandAddOn objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsArtikelEigenschappen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHistorischBestandAddOnPeer::DATABASE_NAME);
        }

        GsHistorischBestandAddOnPeer::addSelectColumns($criteria);
        $startcol = GsHistorischBestandAddOnPeer::NUM_HYDRATE_COLUMNS;
        GsArtikelEigenschappenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHistorischBestandAddOnPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHistorischBestandAddOnPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsHistorischBestandAddOnPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHistorischBestandAddOnPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsArtikelEigenschappenPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsArtikelEigenschappenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsArtikelEigenschappenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsArtikelEigenschappenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsHistorischBestandAddOn) to $obj2 (GsArtikelEigenschappen)
                $obj2->addGsHistorischBestandAddOn($obj1);

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
        $criteria->setPrimaryTableName(GsHistorischBestandAddOnPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHistorischBestandAddOnPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsHistorischBestandAddOnPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHistorischBestandAddOnPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $join_behavior);

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
     * Selects a collection of GsHistorischBestandAddOn objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHistorischBestandAddOn objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHistorischBestandAddOnPeer::DATABASE_NAME);
        }

        GsHistorischBestandAddOnPeer::addSelectColumns($criteria);
        $startcol2 = GsHistorischBestandAddOnPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsArtikelEigenschappenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHistorischBestandAddOnPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHistorischBestandAddOnPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsHistorischBestandAddOnPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHistorischBestandAddOnPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsHistorischBestandAddOn) to the collection in $obj2 (GsArtikelen)
                $obj2->addGsHistorischBestandAddOn($obj1);
            } // if joined row not null

            // Add objects for joined GsArtikelEigenschappen rows

            $key3 = GsArtikelEigenschappenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = GsArtikelEigenschappenPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = GsArtikelEigenschappenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsArtikelEigenschappenPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (GsHistorischBestandAddOn) to the collection in $obj3 (GsArtikelEigenschappen)
                $obj3->addGsHistorischBestandAddOn($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
        $criteria->setPrimaryTableName(GsHistorischBestandAddOnPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHistorischBestandAddOnPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsHistorischBestandAddOnPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHistorischBestandAddOnPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsArtikelEigenschappen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsArtikelEigenschappen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHistorischBestandAddOnPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHistorischBestandAddOnPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsHistorischBestandAddOnPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHistorischBestandAddOnPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Selects a collection of GsHistorischBestandAddOn objects pre-filled with all related objects except GsArtikelen.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHistorischBestandAddOn objects.
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
            $criteria->setDbName(GsHistorischBestandAddOnPeer::DATABASE_NAME);
        }

        GsHistorischBestandAddOnPeer::addSelectColumns($criteria);
        $startcol2 = GsHistorischBestandAddOnPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelEigenschappenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelEigenschappenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHistorischBestandAddOnPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHistorischBestandAddOnPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsHistorischBestandAddOnPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHistorischBestandAddOnPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsArtikelEigenschappen rows

                $key2 = GsArtikelEigenschappenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsArtikelEigenschappenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsArtikelEigenschappenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsArtikelEigenschappenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsHistorischBestandAddOn) to the collection in $obj2 (GsArtikelEigenschappen)
                $obj2->addGsHistorischBestandAddOn($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHistorischBestandAddOn objects pre-filled with all related objects except GsArtikelEigenschappen.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHistorischBestandAddOn objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsArtikelEigenschappen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHistorischBestandAddOnPeer::DATABASE_NAME);
        }

        GsHistorischBestandAddOnPeer::addSelectColumns($criteria);
        $startcol2 = GsHistorischBestandAddOnPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHistorischBestandAddOnPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHistorischBestandAddOnPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsHistorischBestandAddOnPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHistorischBestandAddOnPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsHistorischBestandAddOn) to the collection in $obj2 (GsArtikelen)
                $obj2->addGsHistorischBestandAddOn($obj1);

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
        return Propel::getDatabaseMap(GsHistorischBestandAddOnPeer::DATABASE_NAME)->getTable(GsHistorischBestandAddOnPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsHistorischBestandAddOnPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsHistorischBestandAddOnPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsHistorischBestandAddOnTableMap());
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
        return GsHistorischBestandAddOnPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsHistorischBestandAddOn or Criteria object.
     *
     * @param      mixed $values Criteria or GsHistorischBestandAddOn object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsHistorischBestandAddOnPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsHistorischBestandAddOn object
        }


        // Set the correct dbName
        $criteria->setDbName(GsHistorischBestandAddOnPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsHistorischBestandAddOn or Criteria object.
     *
     * @param      mixed $values Criteria or GsHistorischBestandAddOn object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsHistorischBestandAddOnPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsHistorischBestandAddOnPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER);
            $value = $criteria->remove(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER);
            if ($value) {
                $selectCriteria->add(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsHistorischBestandAddOnPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsHistorischBestandAddOnPeer::INDICATIE_ID);
            $value = $criteria->remove(GsHistorischBestandAddOnPeer::INDICATIE_ID);
            if ($value) {
                $selectCriteria->add(GsHistorischBestandAddOnPeer::INDICATIE_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsHistorischBestandAddOnPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsHistorischBestandAddOnPeer::START_DATUM);
            $value = $criteria->remove(GsHistorischBestandAddOnPeer::START_DATUM);
            if ($value) {
                $selectCriteria->add(GsHistorischBestandAddOnPeer::START_DATUM, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsHistorischBestandAddOnPeer::TABLE_NAME);
            }

        } else { // $values is GsHistorischBestandAddOn object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsHistorischBestandAddOnPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_historisch_bestand_add_on table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsHistorischBestandAddOnPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsHistorischBestandAddOnPeer::TABLE_NAME, $con, GsHistorischBestandAddOnPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsHistorischBestandAddOnPeer::clearInstancePool();
            GsHistorischBestandAddOnPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsHistorischBestandAddOn or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsHistorischBestandAddOn object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsHistorischBestandAddOnPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsHistorischBestandAddOnPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsHistorischBestandAddOn) { // it's a model object
            // invalidate the cache for this single object
            GsHistorischBestandAddOnPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsHistorischBestandAddOnPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsHistorischBestandAddOnPeer::INDICATIE_ID, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(GsHistorischBestandAddOnPeer::START_DATUM, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsHistorischBestandAddOnPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsHistorischBestandAddOnPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsHistorischBestandAddOnPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsHistorischBestandAddOn object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsHistorischBestandAddOn $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsHistorischBestandAddOnPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsHistorischBestandAddOnPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsHistorischBestandAddOnPeer::DATABASE_NAME, GsHistorischBestandAddOnPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $zindex_nummer
     * @param   int $indicatie_id
     * @param   string $start_datum
     * @param      PropelPDO $con
     * @return GsHistorischBestandAddOn
     */
    public static function retrieveByPK($zindex_nummer, $indicatie_id, $start_datum, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $zindex_nummer, (string) $indicatie_id, (string) $start_datum));
         if (null !== ($obj = GsHistorischBestandAddOnPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsHistorischBestandAddOnPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsHistorischBestandAddOnPeer::DATABASE_NAME);
        $criteria->add(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, $zindex_nummer);
        $criteria->add(GsHistorischBestandAddOnPeer::INDICATIE_ID, $indicatie_id);
        $criteria->add(GsHistorischBestandAddOnPeer::START_DATUM, $start_datum);
        $v = GsHistorischBestandAddOnPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsHistorischBestandAddOnPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsHistorischBestandAddOnPeer::buildTableMap();

