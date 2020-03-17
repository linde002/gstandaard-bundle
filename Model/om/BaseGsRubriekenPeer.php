<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsRubrieken;
use PharmaIntelligence\GstandaardBundle\Model\GsRubriekenPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsRubriekenTableMap;

abstract class BaseGsRubriekenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_rubrieken';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRubrieken';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsRubriekenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_rubrieken.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_rubrieken.mutatiekode';

    /** the column name for the naam_van_het_bestand field */
    const NAAM_VAN_HET_BESTAND = 'gs_rubrieken.naam_van_het_bestand';

    /** the column name for the volgnummer field */
    const VOLGNUMMER = 'gs_rubrieken.volgnummer';

    /** the column name for the naam_van_de_rubriek field */
    const NAAM_VAN_DE_RUBRIEK = 'gs_rubrieken.naam_van_de_rubriek';

    /** the column name for the omschrijving_van_de_rubriek field */
    const OMSCHRIJVING_VAN_DE_RUBRIEK = 'gs_rubrieken.omschrijving_van_de_rubriek';

    /** the column name for the rubriekscode field */
    const RUBRIEKSCODE = 'gs_rubrieken.rubriekscode';

    /** the column name for the sleutelkode_van_de_rubriek field */
    const SLEUTELKODE_VAN_DE_RUBRIEK = 'gs_rubrieken.sleutelkode_van_de_rubriek';

    /** the column name for the type_van_de_rubriek field */
    const TYPE_VAN_DE_RUBRIEK = 'gs_rubrieken.type_van_de_rubriek';

    /** the column name for the lengte_van_de_rubriek field */
    const LENGTE_VAN_DE_RUBRIEK = 'gs_rubrieken.lengte_van_de_rubriek';

    /** the column name for the aantal_decimalen field */
    const AANTAL_DECIMALEN = 'gs_rubrieken.aantal_decimalen';

    /** the column name for the opmaak field */
    const OPMAAK = 'gs_rubrieken.opmaak';

    /** the column name for the gebruik_van_veld field */
    const GEBRUIK_VAN_VELD = 'gs_rubrieken.gebruik_van_veld';

    /** the column name for the datum_gebruik field */
    const DATUM_GEBRUIK = 'gs_rubrieken.datum_gebruik';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsRubrieken objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsRubrieken[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsRubriekenPeer::$fieldNames[GsRubriekenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'NaamVanHetBestand', 'Volgnummer', 'NaamVanDeRubriek', 'OmschrijvingVanDeRubriek', 'Rubriekscode', 'SleutelkodeVanDeRubriek', 'TypeVanDeRubriek', 'LengteVanDeRubriek', 'AantalDecimalen', 'Opmaak', 'GebruikVanVeld', 'DatumGebruik', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'naamVanHetBestand', 'volgnummer', 'naamVanDeRubriek', 'omschrijvingVanDeRubriek', 'rubriekscode', 'sleutelkodeVanDeRubriek', 'typeVanDeRubriek', 'lengteVanDeRubriek', 'aantalDecimalen', 'opmaak', 'gebruikVanVeld', 'datumGebruik', ),
        BasePeer::TYPE_COLNAME => array (GsRubriekenPeer::BESTANDNUMMER, GsRubriekenPeer::MUTATIEKODE, GsRubriekenPeer::NAAM_VAN_HET_BESTAND, GsRubriekenPeer::VOLGNUMMER, GsRubriekenPeer::NAAM_VAN_DE_RUBRIEK, GsRubriekenPeer::OMSCHRIJVING_VAN_DE_RUBRIEK, GsRubriekenPeer::RUBRIEKSCODE, GsRubriekenPeer::SLEUTELKODE_VAN_DE_RUBRIEK, GsRubriekenPeer::TYPE_VAN_DE_RUBRIEK, GsRubriekenPeer::LENGTE_VAN_DE_RUBRIEK, GsRubriekenPeer::AANTAL_DECIMALEN, GsRubriekenPeer::OPMAAK, GsRubriekenPeer::GEBRUIK_VAN_VELD, GsRubriekenPeer::DATUM_GEBRUIK, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'NAAM_VAN_HET_BESTAND', 'VOLGNUMMER', 'NAAM_VAN_DE_RUBRIEK', 'OMSCHRIJVING_VAN_DE_RUBRIEK', 'RUBRIEKSCODE', 'SLEUTELKODE_VAN_DE_RUBRIEK', 'TYPE_VAN_DE_RUBRIEK', 'LENGTE_VAN_DE_RUBRIEK', 'AANTAL_DECIMALEN', 'OPMAAK', 'GEBRUIK_VAN_VELD', 'DATUM_GEBRUIK', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'naam_van_het_bestand', 'volgnummer', 'naam_van_de_rubriek', 'omschrijving_van_de_rubriek', 'rubriekscode', 'sleutelkode_van_de_rubriek', 'type_van_de_rubriek', 'lengte_van_de_rubriek', 'aantal_decimalen', 'opmaak', 'gebruik_van_veld', 'datum_gebruik', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsRubriekenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'NaamVanHetBestand' => 2, 'Volgnummer' => 3, 'NaamVanDeRubriek' => 4, 'OmschrijvingVanDeRubriek' => 5, 'Rubriekscode' => 6, 'SleutelkodeVanDeRubriek' => 7, 'TypeVanDeRubriek' => 8, 'LengteVanDeRubriek' => 9, 'AantalDecimalen' => 10, 'Opmaak' => 11, 'GebruikVanVeld' => 12, 'DatumGebruik' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'naamVanHetBestand' => 2, 'volgnummer' => 3, 'naamVanDeRubriek' => 4, 'omschrijvingVanDeRubriek' => 5, 'rubriekscode' => 6, 'sleutelkodeVanDeRubriek' => 7, 'typeVanDeRubriek' => 8, 'lengteVanDeRubriek' => 9, 'aantalDecimalen' => 10, 'opmaak' => 11, 'gebruikVanVeld' => 12, 'datumGebruik' => 13, ),
        BasePeer::TYPE_COLNAME => array (GsRubriekenPeer::BESTANDNUMMER => 0, GsRubriekenPeer::MUTATIEKODE => 1, GsRubriekenPeer::NAAM_VAN_HET_BESTAND => 2, GsRubriekenPeer::VOLGNUMMER => 3, GsRubriekenPeer::NAAM_VAN_DE_RUBRIEK => 4, GsRubriekenPeer::OMSCHRIJVING_VAN_DE_RUBRIEK => 5, GsRubriekenPeer::RUBRIEKSCODE => 6, GsRubriekenPeer::SLEUTELKODE_VAN_DE_RUBRIEK => 7, GsRubriekenPeer::TYPE_VAN_DE_RUBRIEK => 8, GsRubriekenPeer::LENGTE_VAN_DE_RUBRIEK => 9, GsRubriekenPeer::AANTAL_DECIMALEN => 10, GsRubriekenPeer::OPMAAK => 11, GsRubriekenPeer::GEBRUIK_VAN_VELD => 12, GsRubriekenPeer::DATUM_GEBRUIK => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'NAAM_VAN_HET_BESTAND' => 2, 'VOLGNUMMER' => 3, 'NAAM_VAN_DE_RUBRIEK' => 4, 'OMSCHRIJVING_VAN_DE_RUBRIEK' => 5, 'RUBRIEKSCODE' => 6, 'SLEUTELKODE_VAN_DE_RUBRIEK' => 7, 'TYPE_VAN_DE_RUBRIEK' => 8, 'LENGTE_VAN_DE_RUBRIEK' => 9, 'AANTAL_DECIMALEN' => 10, 'OPMAAK' => 11, 'GEBRUIK_VAN_VELD' => 12, 'DATUM_GEBRUIK' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'naam_van_het_bestand' => 2, 'volgnummer' => 3, 'naam_van_de_rubriek' => 4, 'omschrijving_van_de_rubriek' => 5, 'rubriekscode' => 6, 'sleutelkode_van_de_rubriek' => 7, 'type_van_de_rubriek' => 8, 'lengte_van_de_rubriek' => 9, 'aantal_decimalen' => 10, 'opmaak' => 11, 'gebruik_van_veld' => 12, 'datum_gebruik' => 13, ),
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
        $toNames = GsRubriekenPeer::getFieldNames($toType);
        $key = isset(GsRubriekenPeer::$fieldKeys[$fromType][$name]) ? GsRubriekenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsRubriekenPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsRubriekenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsRubriekenPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsRubriekenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsRubriekenPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsRubriekenPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsRubriekenPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsRubriekenPeer::NAAM_VAN_HET_BESTAND);
            $criteria->addSelectColumn(GsRubriekenPeer::VOLGNUMMER);
            $criteria->addSelectColumn(GsRubriekenPeer::NAAM_VAN_DE_RUBRIEK);
            $criteria->addSelectColumn(GsRubriekenPeer::OMSCHRIJVING_VAN_DE_RUBRIEK);
            $criteria->addSelectColumn(GsRubriekenPeer::RUBRIEKSCODE);
            $criteria->addSelectColumn(GsRubriekenPeer::SLEUTELKODE_VAN_DE_RUBRIEK);
            $criteria->addSelectColumn(GsRubriekenPeer::TYPE_VAN_DE_RUBRIEK);
            $criteria->addSelectColumn(GsRubriekenPeer::LENGTE_VAN_DE_RUBRIEK);
            $criteria->addSelectColumn(GsRubriekenPeer::AANTAL_DECIMALEN);
            $criteria->addSelectColumn(GsRubriekenPeer::OPMAAK);
            $criteria->addSelectColumn(GsRubriekenPeer::GEBRUIK_VAN_VELD);
            $criteria->addSelectColumn(GsRubriekenPeer::DATUM_GEBRUIK);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.naam_van_het_bestand');
            $criteria->addSelectColumn($alias . '.volgnummer');
            $criteria->addSelectColumn($alias . '.naam_van_de_rubriek');
            $criteria->addSelectColumn($alias . '.omschrijving_van_de_rubriek');
            $criteria->addSelectColumn($alias . '.rubriekscode');
            $criteria->addSelectColumn($alias . '.sleutelkode_van_de_rubriek');
            $criteria->addSelectColumn($alias . '.type_van_de_rubriek');
            $criteria->addSelectColumn($alias . '.lengte_van_de_rubriek');
            $criteria->addSelectColumn($alias . '.aantal_decimalen');
            $criteria->addSelectColumn($alias . '.opmaak');
            $criteria->addSelectColumn($alias . '.gebruik_van_veld');
            $criteria->addSelectColumn($alias . '.datum_gebruik');
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
        $criteria->setPrimaryTableName(GsRubriekenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsRubriekenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsRubriekenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsRubriekenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsRubrieken
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsRubriekenPeer::doSelect($critcopy, $con);
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
        return GsRubriekenPeer::populateObjects(GsRubriekenPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsRubriekenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsRubriekenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsRubriekenPeer::DATABASE_NAME);

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
     * @param GsRubrieken $obj A GsRubrieken object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getNaamVanHetBestand(), (string) $obj->getVolgnummer()));
            } // if key === null
            GsRubriekenPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsRubrieken object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsRubrieken) {
                $key = serialize(array((string) $value->getNaamVanHetBestand(), (string) $value->getVolgnummer()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsRubrieken object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsRubriekenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsRubrieken Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsRubriekenPeer::$instances[$key])) {
                return GsRubriekenPeer::$instances[$key];
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
        foreach (GsRubriekenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsRubriekenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_rubrieken
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
        $cls = GsRubriekenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsRubriekenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsRubriekenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsRubriekenPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsRubrieken object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsRubriekenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsRubriekenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsRubriekenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsRubriekenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsRubriekenPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsRubriekenPeer::DATABASE_NAME)->getTable(GsRubriekenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsRubriekenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsRubriekenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsRubriekenTableMap());
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
        return GsRubriekenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsRubrieken or Criteria object.
     *
     * @param      mixed $values Criteria or GsRubrieken object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsRubriekenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsRubrieken object
        }


        // Set the correct dbName
        $criteria->setDbName(GsRubriekenPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsRubrieken or Criteria object.
     *
     * @param      mixed $values Criteria or GsRubrieken object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsRubriekenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsRubriekenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsRubriekenPeer::NAAM_VAN_HET_BESTAND);
            $value = $criteria->remove(GsRubriekenPeer::NAAM_VAN_HET_BESTAND);
            if ($value) {
                $selectCriteria->add(GsRubriekenPeer::NAAM_VAN_HET_BESTAND, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsRubriekenPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsRubriekenPeer::VOLGNUMMER);
            $value = $criteria->remove(GsRubriekenPeer::VOLGNUMMER);
            if ($value) {
                $selectCriteria->add(GsRubriekenPeer::VOLGNUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsRubriekenPeer::TABLE_NAME);
            }

        } else { // $values is GsRubrieken object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsRubriekenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_rubrieken table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsRubriekenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsRubriekenPeer::TABLE_NAME, $con, GsRubriekenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsRubriekenPeer::clearInstancePool();
            GsRubriekenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsRubrieken or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsRubrieken object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsRubriekenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsRubriekenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsRubrieken) { // it's a model object
            // invalidate the cache for this single object
            GsRubriekenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsRubriekenPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsRubriekenPeer::NAAM_VAN_HET_BESTAND, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsRubriekenPeer::VOLGNUMMER, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsRubriekenPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsRubriekenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsRubriekenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsRubrieken object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsRubrieken $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsRubriekenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsRubriekenPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsRubriekenPeer::DATABASE_NAME, GsRubriekenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   string $naam_van_het_bestand
     * @param   int $volgnummer
     * @param      PropelPDO $con
     * @return GsRubrieken
     */
    public static function retrieveByPK($naam_van_het_bestand, $volgnummer, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $naam_van_het_bestand, (string) $volgnummer));
         if (null !== ($obj = GsRubriekenPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsRubriekenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsRubriekenPeer::DATABASE_NAME);
        $criteria->add(GsRubriekenPeer::NAAM_VAN_HET_BESTAND, $naam_van_het_bestand);
        $criteria->add(GsRubriekenPeer::VOLGNUMMER, $volgnummer);
        $v = GsRubriekenPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsRubriekenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsRubriekenPeer::buildTableMap();

