<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsHeaderRelatieBestand;
use PharmaIntelligence\GstandaardBundle\Model\GsHeaderRelatieBestandPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsHeaderRelatieBestandTableMap;

abstract class BaseGsHeaderRelatieBestandPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_header_relatie_bestand';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHeaderRelatieBestand';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsHeaderRelatieBestandTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_header_relatie_bestand.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_header_relatie_bestand.mutatiekode';

    /** the column name for the relatie_soort_nummer field */
    const RELATIE_SOORT_NUMMER = 'gs_header_relatie_bestand.relatie_soort_nummer';

    /** the column name for the relatieomschrijving field */
    const RELATIEOMSCHRIJVING = 'gs_header_relatie_bestand.relatieomschrijving';

    /** the column name for the verwijzing_relatie_bestand_1 field */
    const VERWIJZING_RELATIE_BESTAND_1 = 'gs_header_relatie_bestand.verwijzing_relatie_bestand_1';

    /** the column name for the verwijzing_relatie_thesauri_1 field */
    const VERWIJZING_RELATIE_THESAURI_1 = 'gs_header_relatie_bestand.verwijzing_relatie_thesauri_1';

    /** the column name for the verwijzing_identificierende_rubriek_1 field */
    const VERWIJZING_IDENTIFICIERENDE_RUBRIEK_1 = 'gs_header_relatie_bestand.verwijzing_identificierende_rubriek_1';

    /** the column name for the verwijzing_relatie_bestand_2 field */
    const VERWIJZING_RELATIE_BESTAND_2 = 'gs_header_relatie_bestand.verwijzing_relatie_bestand_2';

    /** the column name for the verwijzing_relatie_thesauri_2 field */
    const VERWIJZING_RELATIE_THESAURI_2 = 'gs_header_relatie_bestand.verwijzing_relatie_thesauri_2';

    /** the column name for the verwijzing_identificierende_rubriek_2 field */
    const VERWIJZING_IDENTIFICIERENDE_RUBRIEK_2 = 'gs_header_relatie_bestand.verwijzing_identificierende_rubriek_2';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsHeaderRelatieBestand objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsHeaderRelatieBestand[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsHeaderRelatieBestandPeer::$fieldNames[GsHeaderRelatieBestandPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'RelatieSoortNummer', 'Relatieomschrijving', 'VerwijzingRelatieBestand1', 'VerwijzingRelatieThesauri1', 'VerwijzingIdentificierendeRubriek1', 'VerwijzingRelatieBestand2', 'VerwijzingRelatieThesauri2', 'VerwijzingIdentificierendeRubriek2', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'relatieSoortNummer', 'relatieomschrijving', 'verwijzingRelatieBestand1', 'verwijzingRelatieThesauri1', 'verwijzingIdentificierendeRubriek1', 'verwijzingRelatieBestand2', 'verwijzingRelatieThesauri2', 'verwijzingIdentificierendeRubriek2', ),
        BasePeer::TYPE_COLNAME => array (GsHeaderRelatieBestandPeer::BESTANDNUMMER, GsHeaderRelatieBestandPeer::MUTATIEKODE, GsHeaderRelatieBestandPeer::RELATIE_SOORT_NUMMER, GsHeaderRelatieBestandPeer::RELATIEOMSCHRIJVING, GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_BESTAND_1, GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_THESAURI_1, GsHeaderRelatieBestandPeer::VERWIJZING_IDENTIFICIERENDE_RUBRIEK_1, GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_BESTAND_2, GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_THESAURI_2, GsHeaderRelatieBestandPeer::VERWIJZING_IDENTIFICIERENDE_RUBRIEK_2, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'RELATIE_SOORT_NUMMER', 'RELATIEOMSCHRIJVING', 'VERWIJZING_RELATIE_BESTAND_1', 'VERWIJZING_RELATIE_THESAURI_1', 'VERWIJZING_IDENTIFICIERENDE_RUBRIEK_1', 'VERWIJZING_RELATIE_BESTAND_2', 'VERWIJZING_RELATIE_THESAURI_2', 'VERWIJZING_IDENTIFICIERENDE_RUBRIEK_2', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'relatie_soort_nummer', 'relatieomschrijving', 'verwijzing_relatie_bestand_1', 'verwijzing_relatie_thesauri_1', 'verwijzing_identificierende_rubriek_1', 'verwijzing_relatie_bestand_2', 'verwijzing_relatie_thesauri_2', 'verwijzing_identificierende_rubriek_2', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsHeaderRelatieBestandPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'RelatieSoortNummer' => 2, 'Relatieomschrijving' => 3, 'VerwijzingRelatieBestand1' => 4, 'VerwijzingRelatieThesauri1' => 5, 'VerwijzingIdentificierendeRubriek1' => 6, 'VerwijzingRelatieBestand2' => 7, 'VerwijzingRelatieThesauri2' => 8, 'VerwijzingIdentificierendeRubriek2' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'relatieSoortNummer' => 2, 'relatieomschrijving' => 3, 'verwijzingRelatieBestand1' => 4, 'verwijzingRelatieThesauri1' => 5, 'verwijzingIdentificierendeRubriek1' => 6, 'verwijzingRelatieBestand2' => 7, 'verwijzingRelatieThesauri2' => 8, 'verwijzingIdentificierendeRubriek2' => 9, ),
        BasePeer::TYPE_COLNAME => array (GsHeaderRelatieBestandPeer::BESTANDNUMMER => 0, GsHeaderRelatieBestandPeer::MUTATIEKODE => 1, GsHeaderRelatieBestandPeer::RELATIE_SOORT_NUMMER => 2, GsHeaderRelatieBestandPeer::RELATIEOMSCHRIJVING => 3, GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_BESTAND_1 => 4, GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_THESAURI_1 => 5, GsHeaderRelatieBestandPeer::VERWIJZING_IDENTIFICIERENDE_RUBRIEK_1 => 6, GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_BESTAND_2 => 7, GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_THESAURI_2 => 8, GsHeaderRelatieBestandPeer::VERWIJZING_IDENTIFICIERENDE_RUBRIEK_2 => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'RELATIE_SOORT_NUMMER' => 2, 'RELATIEOMSCHRIJVING' => 3, 'VERWIJZING_RELATIE_BESTAND_1' => 4, 'VERWIJZING_RELATIE_THESAURI_1' => 5, 'VERWIJZING_IDENTIFICIERENDE_RUBRIEK_1' => 6, 'VERWIJZING_RELATIE_BESTAND_2' => 7, 'VERWIJZING_RELATIE_THESAURI_2' => 8, 'VERWIJZING_IDENTIFICIERENDE_RUBRIEK_2' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'relatie_soort_nummer' => 2, 'relatieomschrijving' => 3, 'verwijzing_relatie_bestand_1' => 4, 'verwijzing_relatie_thesauri_1' => 5, 'verwijzing_identificierende_rubriek_1' => 6, 'verwijzing_relatie_bestand_2' => 7, 'verwijzing_relatie_thesauri_2' => 8, 'verwijzing_identificierende_rubriek_2' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
        $toNames = GsHeaderRelatieBestandPeer::getFieldNames($toType);
        $key = isset(GsHeaderRelatieBestandPeer::$fieldKeys[$fromType][$name]) ? GsHeaderRelatieBestandPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsHeaderRelatieBestandPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsHeaderRelatieBestandPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsHeaderRelatieBestandPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsHeaderRelatieBestandPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsHeaderRelatieBestandPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsHeaderRelatieBestandPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsHeaderRelatieBestandPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsHeaderRelatieBestandPeer::RELATIE_SOORT_NUMMER);
            $criteria->addSelectColumn(GsHeaderRelatieBestandPeer::RELATIEOMSCHRIJVING);
            $criteria->addSelectColumn(GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_BESTAND_1);
            $criteria->addSelectColumn(GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_THESAURI_1);
            $criteria->addSelectColumn(GsHeaderRelatieBestandPeer::VERWIJZING_IDENTIFICIERENDE_RUBRIEK_1);
            $criteria->addSelectColumn(GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_BESTAND_2);
            $criteria->addSelectColumn(GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_THESAURI_2);
            $criteria->addSelectColumn(GsHeaderRelatieBestandPeer::VERWIJZING_IDENTIFICIERENDE_RUBRIEK_2);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.relatie_soort_nummer');
            $criteria->addSelectColumn($alias . '.relatieomschrijving');
            $criteria->addSelectColumn($alias . '.verwijzing_relatie_bestand_1');
            $criteria->addSelectColumn($alias . '.verwijzing_relatie_thesauri_1');
            $criteria->addSelectColumn($alias . '.verwijzing_identificierende_rubriek_1');
            $criteria->addSelectColumn($alias . '.verwijzing_relatie_bestand_2');
            $criteria->addSelectColumn($alias . '.verwijzing_relatie_thesauri_2');
            $criteria->addSelectColumn($alias . '.verwijzing_identificierende_rubriek_2');
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
        $criteria->setPrimaryTableName(GsHeaderRelatieBestandPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHeaderRelatieBestandPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsHeaderRelatieBestandPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsHeaderRelatieBestandPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsHeaderRelatieBestand
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsHeaderRelatieBestandPeer::doSelect($critcopy, $con);
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
        return GsHeaderRelatieBestandPeer::populateObjects(GsHeaderRelatieBestandPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsHeaderRelatieBestandPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsHeaderRelatieBestandPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsHeaderRelatieBestandPeer::DATABASE_NAME);

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
     * @param GsHeaderRelatieBestand $obj A GsHeaderRelatieBestand object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getRelatieSoortNummer();
            } // if key === null
            GsHeaderRelatieBestandPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsHeaderRelatieBestand object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsHeaderRelatieBestand) {
                $key = (string) $value->getRelatieSoortNummer();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsHeaderRelatieBestand object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsHeaderRelatieBestandPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsHeaderRelatieBestand Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsHeaderRelatieBestandPeer::$instances[$key])) {
                return GsHeaderRelatieBestandPeer::$instances[$key];
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
        foreach (GsHeaderRelatieBestandPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsHeaderRelatieBestandPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_header_relatie_bestand
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
        $cls = GsHeaderRelatieBestandPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsHeaderRelatieBestandPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsHeaderRelatieBestandPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsHeaderRelatieBestandPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsHeaderRelatieBestand object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsHeaderRelatieBestandPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsHeaderRelatieBestandPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsHeaderRelatieBestandPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsHeaderRelatieBestandPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsHeaderRelatieBestandPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsHeaderRelatieBestandPeer::DATABASE_NAME)->getTable(GsHeaderRelatieBestandPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsHeaderRelatieBestandPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsHeaderRelatieBestandPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsHeaderRelatieBestandTableMap());
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
        return GsHeaderRelatieBestandPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsHeaderRelatieBestand or Criteria object.
     *
     * @param      mixed $values Criteria or GsHeaderRelatieBestand object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsHeaderRelatieBestandPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsHeaderRelatieBestand object
        }


        // Set the correct dbName
        $criteria->setDbName(GsHeaderRelatieBestandPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsHeaderRelatieBestand or Criteria object.
     *
     * @param      mixed $values Criteria or GsHeaderRelatieBestand object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsHeaderRelatieBestandPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsHeaderRelatieBestandPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsHeaderRelatieBestandPeer::RELATIE_SOORT_NUMMER);
            $value = $criteria->remove(GsHeaderRelatieBestandPeer::RELATIE_SOORT_NUMMER);
            if ($value) {
                $selectCriteria->add(GsHeaderRelatieBestandPeer::RELATIE_SOORT_NUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsHeaderRelatieBestandPeer::TABLE_NAME);
            }

        } else { // $values is GsHeaderRelatieBestand object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsHeaderRelatieBestandPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_header_relatie_bestand table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsHeaderRelatieBestandPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsHeaderRelatieBestandPeer::TABLE_NAME, $con, GsHeaderRelatieBestandPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsHeaderRelatieBestandPeer::clearInstancePool();
            GsHeaderRelatieBestandPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsHeaderRelatieBestand or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsHeaderRelatieBestand object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsHeaderRelatieBestandPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsHeaderRelatieBestandPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsHeaderRelatieBestand) { // it's a model object
            // invalidate the cache for this single object
            GsHeaderRelatieBestandPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsHeaderRelatieBestandPeer::DATABASE_NAME);
            $criteria->add(GsHeaderRelatieBestandPeer::RELATIE_SOORT_NUMMER, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsHeaderRelatieBestandPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsHeaderRelatieBestandPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsHeaderRelatieBestandPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsHeaderRelatieBestand object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsHeaderRelatieBestand $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsHeaderRelatieBestandPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsHeaderRelatieBestandPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsHeaderRelatieBestandPeer::DATABASE_NAME, GsHeaderRelatieBestandPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsHeaderRelatieBestand
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsHeaderRelatieBestandPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsHeaderRelatieBestandPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsHeaderRelatieBestandPeer::DATABASE_NAME);
        $criteria->add(GsHeaderRelatieBestandPeer::RELATIE_SOORT_NUMMER, $pk);

        $v = GsHeaderRelatieBestandPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsHeaderRelatieBestand[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsHeaderRelatieBestandPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsHeaderRelatieBestandPeer::DATABASE_NAME);
            $criteria->add(GsHeaderRelatieBestandPeer::RELATIE_SOORT_NUMMER, $pks, Criteria::IN);
            $objs = GsHeaderRelatieBestandPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsHeaderRelatieBestandPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsHeaderRelatieBestandPeer::buildTableMap();

