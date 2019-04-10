<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesExtended;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesExtendedPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsAtcCodesExtendedTableMap;

abstract class BaseGsAtcCodesExtendedPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_atc_codes_extended';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAtcCodesExtended';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsAtcCodesExtendedTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the atccode field */
    const ATCCODE = 'gs_atc_codes_extended.atccode';

    /** the column name for the atcnederlandse_omschrijving field */
    const ATCNEDERLANDSE_OMSCHRIJVING = 'gs_atc_codes_extended.atcnederlandse_omschrijving';

    /** the column name for the anatomische_hoofdgroep_code field */
    const ANATOMISCHE_HOOFDGROEP_CODE = 'gs_atc_codes_extended.anatomische_hoofdgroep_code';

    /** the column name for the anatomische_hoofdgroep field */
    const ANATOMISCHE_HOOFDGROEP = 'gs_atc_codes_extended.anatomische_hoofdgroep';

    /** the column name for the therapeutische_hoofdgroep_code field */
    const THERAPEUTISCHE_HOOFDGROEP_CODE = 'gs_atc_codes_extended.therapeutische_hoofdgroep_code';

    /** the column name for the therapeutische_hoofdgroep field */
    const THERAPEUTISCHE_HOOFDGROEP = 'gs_atc_codes_extended.therapeutische_hoofdgroep';

    /** the column name for the therapeutische_subgroep_code field */
    const THERAPEUTISCHE_SUBGROEP_CODE = 'gs_atc_codes_extended.therapeutische_subgroep_code';

    /** the column name for the therapeutische_subgroep field */
    const THERAPEUTISCHE_SUBGROEP = 'gs_atc_codes_extended.therapeutische_subgroep';

    /** the column name for the chemische_subgroep_code field */
    const CHEMISCHE_SUBGROEP_CODE = 'gs_atc_codes_extended.chemische_subgroep_code';

    /** the column name for the chemische_subgroep field */
    const CHEMISCHE_SUBGROEP = 'gs_atc_codes_extended.chemische_subgroep';

    /** the column name for the chemische_stofnaam_code field */
    const CHEMISCHE_STOFNAAM_CODE = 'gs_atc_codes_extended.chemische_stofnaam_code';

    /** the column name for the chemische_stofnaam field */
    const CHEMISCHE_STOFNAAM = 'gs_atc_codes_extended.chemische_stofnaam';

    /** the column name for the volledige_naam field */
    const VOLLEDIGE_NAAM = 'gs_atc_codes_extended.volledige_naam';

    /** the column name for the merken field */
    const MERKEN = 'gs_atc_codes_extended.merken';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsAtcCodesExtended objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsAtcCodesExtended[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsAtcCodesExtendedPeer::$fieldNames[GsAtcCodesExtendedPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Atccode', 'AtcnederlandseOmschrijving', 'AnatomischeHoofdgroepCode', 'AnatomischeHoofdgroep', 'TherapeutischeHoofdgroepCode', 'TherapeutischeHoofdgroep', 'TherapeutischeSubgroepCode', 'TherapeutischeSubgroep', 'ChemischeSubgroepCode', 'ChemischeSubgroep', 'ChemischeStofnaamCode', 'ChemischeStofnaam', 'VolledigeNaam', 'Merken', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('atccode', 'atcnederlandseOmschrijving', 'anatomischeHoofdgroepCode', 'anatomischeHoofdgroep', 'therapeutischeHoofdgroepCode', 'therapeutischeHoofdgroep', 'therapeutischeSubgroepCode', 'therapeutischeSubgroep', 'chemischeSubgroepCode', 'chemischeSubgroep', 'chemischeStofnaamCode', 'chemischeStofnaam', 'volledigeNaam', 'merken', ),
        BasePeer::TYPE_COLNAME => array (GsAtcCodesExtendedPeer::ATCCODE, GsAtcCodesExtendedPeer::ATCNEDERLANDSE_OMSCHRIJVING, GsAtcCodesExtendedPeer::ANATOMISCHE_HOOFDGROEP_CODE, GsAtcCodesExtendedPeer::ANATOMISCHE_HOOFDGROEP, GsAtcCodesExtendedPeer::THERAPEUTISCHE_HOOFDGROEP_CODE, GsAtcCodesExtendedPeer::THERAPEUTISCHE_HOOFDGROEP, GsAtcCodesExtendedPeer::THERAPEUTISCHE_SUBGROEP_CODE, GsAtcCodesExtendedPeer::THERAPEUTISCHE_SUBGROEP, GsAtcCodesExtendedPeer::CHEMISCHE_SUBGROEP_CODE, GsAtcCodesExtendedPeer::CHEMISCHE_SUBGROEP, GsAtcCodesExtendedPeer::CHEMISCHE_STOFNAAM_CODE, GsAtcCodesExtendedPeer::CHEMISCHE_STOFNAAM, GsAtcCodesExtendedPeer::VOLLEDIGE_NAAM, GsAtcCodesExtendedPeer::MERKEN, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ATCCODE', 'ATCNEDERLANDSE_OMSCHRIJVING', 'ANATOMISCHE_HOOFDGROEP_CODE', 'ANATOMISCHE_HOOFDGROEP', 'THERAPEUTISCHE_HOOFDGROEP_CODE', 'THERAPEUTISCHE_HOOFDGROEP', 'THERAPEUTISCHE_SUBGROEP_CODE', 'THERAPEUTISCHE_SUBGROEP', 'CHEMISCHE_SUBGROEP_CODE', 'CHEMISCHE_SUBGROEP', 'CHEMISCHE_STOFNAAM_CODE', 'CHEMISCHE_STOFNAAM', 'VOLLEDIGE_NAAM', 'MERKEN', ),
        BasePeer::TYPE_FIELDNAME => array ('atccode', 'atcnederlandse_omschrijving', 'anatomische_hoofdgroep_code', 'anatomische_hoofdgroep', 'therapeutische_hoofdgroep_code', 'therapeutische_hoofdgroep', 'therapeutische_subgroep_code', 'therapeutische_subgroep', 'chemische_subgroep_code', 'chemische_subgroep', 'chemische_stofnaam_code', 'chemische_stofnaam', 'volledige_naam', 'merken', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsAtcCodesExtendedPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Atccode' => 0, 'AtcnederlandseOmschrijving' => 1, 'AnatomischeHoofdgroepCode' => 2, 'AnatomischeHoofdgroep' => 3, 'TherapeutischeHoofdgroepCode' => 4, 'TherapeutischeHoofdgroep' => 5, 'TherapeutischeSubgroepCode' => 6, 'TherapeutischeSubgroep' => 7, 'ChemischeSubgroepCode' => 8, 'ChemischeSubgroep' => 9, 'ChemischeStofnaamCode' => 10, 'ChemischeStofnaam' => 11, 'VolledigeNaam' => 12, 'Merken' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('atccode' => 0, 'atcnederlandseOmschrijving' => 1, 'anatomischeHoofdgroepCode' => 2, 'anatomischeHoofdgroep' => 3, 'therapeutischeHoofdgroepCode' => 4, 'therapeutischeHoofdgroep' => 5, 'therapeutischeSubgroepCode' => 6, 'therapeutischeSubgroep' => 7, 'chemischeSubgroepCode' => 8, 'chemischeSubgroep' => 9, 'chemischeStofnaamCode' => 10, 'chemischeStofnaam' => 11, 'volledigeNaam' => 12, 'merken' => 13, ),
        BasePeer::TYPE_COLNAME => array (GsAtcCodesExtendedPeer::ATCCODE => 0, GsAtcCodesExtendedPeer::ATCNEDERLANDSE_OMSCHRIJVING => 1, GsAtcCodesExtendedPeer::ANATOMISCHE_HOOFDGROEP_CODE => 2, GsAtcCodesExtendedPeer::ANATOMISCHE_HOOFDGROEP => 3, GsAtcCodesExtendedPeer::THERAPEUTISCHE_HOOFDGROEP_CODE => 4, GsAtcCodesExtendedPeer::THERAPEUTISCHE_HOOFDGROEP => 5, GsAtcCodesExtendedPeer::THERAPEUTISCHE_SUBGROEP_CODE => 6, GsAtcCodesExtendedPeer::THERAPEUTISCHE_SUBGROEP => 7, GsAtcCodesExtendedPeer::CHEMISCHE_SUBGROEP_CODE => 8, GsAtcCodesExtendedPeer::CHEMISCHE_SUBGROEP => 9, GsAtcCodesExtendedPeer::CHEMISCHE_STOFNAAM_CODE => 10, GsAtcCodesExtendedPeer::CHEMISCHE_STOFNAAM => 11, GsAtcCodesExtendedPeer::VOLLEDIGE_NAAM => 12, GsAtcCodesExtendedPeer::MERKEN => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ATCCODE' => 0, 'ATCNEDERLANDSE_OMSCHRIJVING' => 1, 'ANATOMISCHE_HOOFDGROEP_CODE' => 2, 'ANATOMISCHE_HOOFDGROEP' => 3, 'THERAPEUTISCHE_HOOFDGROEP_CODE' => 4, 'THERAPEUTISCHE_HOOFDGROEP' => 5, 'THERAPEUTISCHE_SUBGROEP_CODE' => 6, 'THERAPEUTISCHE_SUBGROEP' => 7, 'CHEMISCHE_SUBGROEP_CODE' => 8, 'CHEMISCHE_SUBGROEP' => 9, 'CHEMISCHE_STOFNAAM_CODE' => 10, 'CHEMISCHE_STOFNAAM' => 11, 'VOLLEDIGE_NAAM' => 12, 'MERKEN' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('atccode' => 0, 'atcnederlandse_omschrijving' => 1, 'anatomische_hoofdgroep_code' => 2, 'anatomische_hoofdgroep' => 3, 'therapeutische_hoofdgroep_code' => 4, 'therapeutische_hoofdgroep' => 5, 'therapeutische_subgroep_code' => 6, 'therapeutische_subgroep' => 7, 'chemische_subgroep_code' => 8, 'chemische_subgroep' => 9, 'chemische_stofnaam_code' => 10, 'chemische_stofnaam' => 11, 'volledige_naam' => 12, 'merken' => 13, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $toNames = GsAtcCodesExtendedPeer::getFieldNames($toType);
        $key = isset(GsAtcCodesExtendedPeer::$fieldKeys[$fromType][$name]) ? GsAtcCodesExtendedPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsAtcCodesExtendedPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsAtcCodesExtendedPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsAtcCodesExtendedPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsAtcCodesExtendedPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsAtcCodesExtendedPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsAtcCodesExtendedPeer::ATCCODE);
            $criteria->addSelectColumn(GsAtcCodesExtendedPeer::ATCNEDERLANDSE_OMSCHRIJVING);
            $criteria->addSelectColumn(GsAtcCodesExtendedPeer::ANATOMISCHE_HOOFDGROEP_CODE);
            $criteria->addSelectColumn(GsAtcCodesExtendedPeer::ANATOMISCHE_HOOFDGROEP);
            $criteria->addSelectColumn(GsAtcCodesExtendedPeer::THERAPEUTISCHE_HOOFDGROEP_CODE);
            $criteria->addSelectColumn(GsAtcCodesExtendedPeer::THERAPEUTISCHE_HOOFDGROEP);
            $criteria->addSelectColumn(GsAtcCodesExtendedPeer::THERAPEUTISCHE_SUBGROEP_CODE);
            $criteria->addSelectColumn(GsAtcCodesExtendedPeer::THERAPEUTISCHE_SUBGROEP);
            $criteria->addSelectColumn(GsAtcCodesExtendedPeer::CHEMISCHE_SUBGROEP_CODE);
            $criteria->addSelectColumn(GsAtcCodesExtendedPeer::CHEMISCHE_SUBGROEP);
            $criteria->addSelectColumn(GsAtcCodesExtendedPeer::CHEMISCHE_STOFNAAM_CODE);
            $criteria->addSelectColumn(GsAtcCodesExtendedPeer::CHEMISCHE_STOFNAAM);
            $criteria->addSelectColumn(GsAtcCodesExtendedPeer::VOLLEDIGE_NAAM);
            $criteria->addSelectColumn(GsAtcCodesExtendedPeer::MERKEN);
        } else {
            $criteria->addSelectColumn($alias . '.atccode');
            $criteria->addSelectColumn($alias . '.atcnederlandse_omschrijving');
            $criteria->addSelectColumn($alias . '.anatomische_hoofdgroep_code');
            $criteria->addSelectColumn($alias . '.anatomische_hoofdgroep');
            $criteria->addSelectColumn($alias . '.therapeutische_hoofdgroep_code');
            $criteria->addSelectColumn($alias . '.therapeutische_hoofdgroep');
            $criteria->addSelectColumn($alias . '.therapeutische_subgroep_code');
            $criteria->addSelectColumn($alias . '.therapeutische_subgroep');
            $criteria->addSelectColumn($alias . '.chemische_subgroep_code');
            $criteria->addSelectColumn($alias . '.chemische_subgroep');
            $criteria->addSelectColumn($alias . '.chemische_stofnaam_code');
            $criteria->addSelectColumn($alias . '.chemische_stofnaam');
            $criteria->addSelectColumn($alias . '.volledige_naam');
            $criteria->addSelectColumn($alias . '.merken');
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
        $criteria->setPrimaryTableName(GsAtcCodesExtendedPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsAtcCodesExtendedPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsAtcCodesExtendedPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsAtcCodesExtendedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsAtcCodesExtended
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsAtcCodesExtendedPeer::doSelect($critcopy, $con);
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
        return GsAtcCodesExtendedPeer::populateObjects(GsAtcCodesExtendedPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsAtcCodesExtendedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsAtcCodesExtendedPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsAtcCodesExtendedPeer::DATABASE_NAME);

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
     * @param GsAtcCodesExtended $obj A GsAtcCodesExtended object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAtccode();
            } // if key === null
            GsAtcCodesExtendedPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsAtcCodesExtended object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsAtcCodesExtended) {
                $key = (string) $value->getAtccode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsAtcCodesExtended object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsAtcCodesExtendedPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsAtcCodesExtended Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsAtcCodesExtendedPeer::$instances[$key])) {
                return GsAtcCodesExtendedPeer::$instances[$key];
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
        foreach (GsAtcCodesExtendedPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsAtcCodesExtendedPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_atc_codes_extended
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
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
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

        return (string) $row[$startcol];
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
        $cls = GsAtcCodesExtendedPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsAtcCodesExtendedPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsAtcCodesExtendedPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsAtcCodesExtendedPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsAtcCodesExtended object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsAtcCodesExtendedPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsAtcCodesExtendedPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsAtcCodesExtendedPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsAtcCodesExtendedPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsAtcCodesExtendedPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(GsAtcCodesExtendedPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsAtcCodesExtendedPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsAtcCodesExtendedPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsAtcCodesExtendedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsAtcCodesExtendedPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

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
     * Selects a collection of GsAtcCodesExtended objects pre-filled with their GsAtcCodes objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsAtcCodesExtended objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsAtcCodes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsAtcCodesExtendedPeer::DATABASE_NAME);
        }

        GsAtcCodesExtendedPeer::addSelectColumns($criteria);
        $startcol = GsAtcCodesExtendedPeer::NUM_HYDRATE_COLUMNS;
        GsAtcCodesPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsAtcCodesExtendedPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsAtcCodesExtendedPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsAtcCodesExtendedPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsAtcCodesExtendedPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsAtcCodesExtendedPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsAtcCodesExtended) to $obj2 (GsAtcCodes)
                // one to one relationship
                $obj1->setGsAtcCodes($obj2);

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
        $criteria->setPrimaryTableName(GsAtcCodesExtendedPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsAtcCodesExtendedPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsAtcCodesExtendedPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsAtcCodesExtendedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsAtcCodesExtendedPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

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
     * Selects a collection of GsAtcCodesExtended objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsAtcCodesExtended objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsAtcCodesExtendedPeer::DATABASE_NAME);
        }

        GsAtcCodesExtendedPeer::addSelectColumns($criteria);
        $startcol2 = GsAtcCodesExtendedPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsAtcCodesExtendedPeer::ATCCODE, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsAtcCodesExtendedPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsAtcCodesExtendedPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsAtcCodesExtendedPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsAtcCodesExtendedPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsAtcCodesExtended) to the collection in $obj2 (GsAtcCodes)
                $obj1->setGsAtcCodes($obj2);
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
        return Propel::getDatabaseMap(GsAtcCodesExtendedPeer::DATABASE_NAME)->getTable(GsAtcCodesExtendedPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsAtcCodesExtendedPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsAtcCodesExtendedPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsAtcCodesExtendedTableMap());
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
        return GsAtcCodesExtendedPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsAtcCodesExtended or Criteria object.
     *
     * @param      mixed $values Criteria or GsAtcCodesExtended object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsAtcCodesExtendedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsAtcCodesExtended object
        }


        // Set the correct dbName
        $criteria->setDbName(GsAtcCodesExtendedPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsAtcCodesExtended or Criteria object.
     *
     * @param      mixed $values Criteria or GsAtcCodesExtended object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsAtcCodesExtendedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsAtcCodesExtendedPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsAtcCodesExtendedPeer::ATCCODE);
            $value = $criteria->remove(GsAtcCodesExtendedPeer::ATCCODE);
            if ($value) {
                $selectCriteria->add(GsAtcCodesExtendedPeer::ATCCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsAtcCodesExtendedPeer::TABLE_NAME);
            }

        } else { // $values is GsAtcCodesExtended object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsAtcCodesExtendedPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_atc_codes_extended table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsAtcCodesExtendedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsAtcCodesExtendedPeer::TABLE_NAME, $con, GsAtcCodesExtendedPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsAtcCodesExtendedPeer::clearInstancePool();
            GsAtcCodesExtendedPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsAtcCodesExtended or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsAtcCodesExtended object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsAtcCodesExtendedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsAtcCodesExtendedPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsAtcCodesExtended) { // it's a model object
            // invalidate the cache for this single object
            GsAtcCodesExtendedPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsAtcCodesExtendedPeer::DATABASE_NAME);
            $criteria->add(GsAtcCodesExtendedPeer::ATCCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsAtcCodesExtendedPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsAtcCodesExtendedPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsAtcCodesExtendedPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsAtcCodesExtended object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsAtcCodesExtended $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsAtcCodesExtendedPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsAtcCodesExtendedPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsAtcCodesExtendedPeer::DATABASE_NAME, GsAtcCodesExtendedPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsAtcCodesExtended
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsAtcCodesExtendedPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsAtcCodesExtendedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsAtcCodesExtendedPeer::DATABASE_NAME);
        $criteria->add(GsAtcCodesExtendedPeer::ATCCODE, $pk);

        $v = GsAtcCodesExtendedPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsAtcCodesExtended[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsAtcCodesExtendedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsAtcCodesExtendedPeer::DATABASE_NAME);
            $criteria->add(GsAtcCodesExtendedPeer::ATCCODE, $pks, Criteria::IN);
            $objs = GsAtcCodesExtendedPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsAtcCodesExtendedPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsAtcCodesExtendedPeer::buildTableMap();

