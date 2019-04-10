<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsSamenstelling;
use PharmaIntelligence\GstandaardBundle\Model\GsSamenstellingPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsSamenstellingTableMap;

abstract class BaseGsSamenstellingPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_samenstelling';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsSamenstelling';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsSamenstellingTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_samenstelling.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_samenstelling.mutatiekode';

    /** the column name for the thesaurus_verwijzing_soort_code field */
    const THESAURUS_VERWIJZING_SOORT_CODE = 'gs_samenstelling.thesaurus_verwijzing_soort_code';

    /** the column name for the soort_code field */
    const SOORT_CODE = 'gs_samenstelling.soort_code';

    /** the column name for the code field */
    const CODE = 'gs_samenstelling.code';

    /** the column name for the generiekenaamkode field */
    const GENERIEKENAAMKODE = 'gs_samenstelling.generiekenaamkode';

    /** the column name for the hoeveelheid_generiek_naam field */
    const HOEVEELHEID_GENERIEK_NAAM = 'gs_samenstelling.hoeveelheid_generiek_naam';

    /** the column name for the thesaurusverwijzig_eenh_hoeveelh_generiek_naam field */
    const THESAURUSVERWIJZIG_EENH_HOEVEELH_GENERIEK_NAAM = 'gs_samenstelling.thesaurusverwijzig_eenh_hoeveelh_generiek_naam';

    /** the column name for the eenheid_hoeveelheid_generieke_naam field */
    const EENHEID_HOEVEELHEID_GENERIEKE_NAAM = 'gs_samenstelling.eenheid_hoeveelheid_generieke_naam';

    /** the column name for the stamnaamcode field */
    const STAMNAAMCODE = 'gs_samenstelling.stamnaamcode';

    /** the column name for the hoeveelheid_stamnaam field */
    const HOEVEELHEID_STAMNAAM = 'gs_samenstelling.hoeveelheid_stamnaam';

    /** the column name for the thesaurusverwijzig_eenh_hoeveelh_stamnaam field */
    const THESAURUSVERWIJZIG_EENH_HOEVEELH_STAMNAAM = 'gs_samenstelling.thesaurusverwijzig_eenh_hoeveelh_stamnaam';

    /** the column name for the eenheid_hoeveelheid_stamnaam field */
    const EENHEID_HOEVEELHEID_STAMNAAM = 'gs_samenstelling.eenheid_hoeveelheid_stamnaam';

    /** the column name for the sterktes_mogen_worden_opgeteld_jn field */
    const STERKTES_MOGEN_WORDEN_OPGETELD_JN = 'gs_samenstelling.sterktes_mogen_worden_opgeteld_jn';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsSamenstelling objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsSamenstelling[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsSamenstellingPeer::$fieldNames[GsSamenstellingPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'ThesaurusVerwijzingSoortCode', 'SoortCode', 'Code', 'Generiekenaamkode', 'HoeveelheidGeneriekNaam', 'ThesaurusverwijzigEenhHoeveelhGeneriekNaam', 'EenheidHoeveelheidGeneriekeNaam', 'Stamnaamcode', 'HoeveelheidStamnaam', 'ThesaurusverwijzigEenhHoeveelhStamnaam', 'EenheidHoeveelheidStamnaam', 'SterktesMogenWordenOpgeteldJn', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'thesaurusVerwijzingSoortCode', 'soortCode', 'code', 'generiekenaamkode', 'hoeveelheidGeneriekNaam', 'thesaurusverwijzigEenhHoeveelhGeneriekNaam', 'eenheidHoeveelheidGeneriekeNaam', 'stamnaamcode', 'hoeveelheidStamnaam', 'thesaurusverwijzigEenhHoeveelhStamnaam', 'eenheidHoeveelheidStamnaam', 'sterktesMogenWordenOpgeteldJn', ),
        BasePeer::TYPE_COLNAME => array (GsSamenstellingPeer::BESTANDNUMMER, GsSamenstellingPeer::MUTATIEKODE, GsSamenstellingPeer::THESAURUS_VERWIJZING_SOORT_CODE, GsSamenstellingPeer::SOORT_CODE, GsSamenstellingPeer::CODE, GsSamenstellingPeer::GENERIEKENAAMKODE, GsSamenstellingPeer::HOEVEELHEID_GENERIEK_NAAM, GsSamenstellingPeer::THESAURUSVERWIJZIG_EENH_HOEVEELH_GENERIEK_NAAM, GsSamenstellingPeer::EENHEID_HOEVEELHEID_GENERIEKE_NAAM, GsSamenstellingPeer::STAMNAAMCODE, GsSamenstellingPeer::HOEVEELHEID_STAMNAAM, GsSamenstellingPeer::THESAURUSVERWIJZIG_EENH_HOEVEELH_STAMNAAM, GsSamenstellingPeer::EENHEID_HOEVEELHEID_STAMNAAM, GsSamenstellingPeer::STERKTES_MOGEN_WORDEN_OPGETELD_JN, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'THESAURUS_VERWIJZING_SOORT_CODE', 'SOORT_CODE', 'CODE', 'GENERIEKENAAMKODE', 'HOEVEELHEID_GENERIEK_NAAM', 'THESAURUSVERWIJZIG_EENH_HOEVEELH_GENERIEK_NAAM', 'EENHEID_HOEVEELHEID_GENERIEKE_NAAM', 'STAMNAAMCODE', 'HOEVEELHEID_STAMNAAM', 'THESAURUSVERWIJZIG_EENH_HOEVEELH_STAMNAAM', 'EENHEID_HOEVEELHEID_STAMNAAM', 'STERKTES_MOGEN_WORDEN_OPGETELD_JN', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'thesaurus_verwijzing_soort_code', 'soort_code', 'code', 'generiekenaamkode', 'hoeveelheid_generiek_naam', 'thesaurusverwijzig_eenh_hoeveelh_generiek_naam', 'eenheid_hoeveelheid_generieke_naam', 'stamnaamcode', 'hoeveelheid_stamnaam', 'thesaurusverwijzig_eenh_hoeveelh_stamnaam', 'eenheid_hoeveelheid_stamnaam', 'sterktes_mogen_worden_opgeteld_jn', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsSamenstellingPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'ThesaurusVerwijzingSoortCode' => 2, 'SoortCode' => 3, 'Code' => 4, 'Generiekenaamkode' => 5, 'HoeveelheidGeneriekNaam' => 6, 'ThesaurusverwijzigEenhHoeveelhGeneriekNaam' => 7, 'EenheidHoeveelheidGeneriekeNaam' => 8, 'Stamnaamcode' => 9, 'HoeveelheidStamnaam' => 10, 'ThesaurusverwijzigEenhHoeveelhStamnaam' => 11, 'EenheidHoeveelheidStamnaam' => 12, 'SterktesMogenWordenOpgeteldJn' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'thesaurusVerwijzingSoortCode' => 2, 'soortCode' => 3, 'code' => 4, 'generiekenaamkode' => 5, 'hoeveelheidGeneriekNaam' => 6, 'thesaurusverwijzigEenhHoeveelhGeneriekNaam' => 7, 'eenheidHoeveelheidGeneriekeNaam' => 8, 'stamnaamcode' => 9, 'hoeveelheidStamnaam' => 10, 'thesaurusverwijzigEenhHoeveelhStamnaam' => 11, 'eenheidHoeveelheidStamnaam' => 12, 'sterktesMogenWordenOpgeteldJn' => 13, ),
        BasePeer::TYPE_COLNAME => array (GsSamenstellingPeer::BESTANDNUMMER => 0, GsSamenstellingPeer::MUTATIEKODE => 1, GsSamenstellingPeer::THESAURUS_VERWIJZING_SOORT_CODE => 2, GsSamenstellingPeer::SOORT_CODE => 3, GsSamenstellingPeer::CODE => 4, GsSamenstellingPeer::GENERIEKENAAMKODE => 5, GsSamenstellingPeer::HOEVEELHEID_GENERIEK_NAAM => 6, GsSamenstellingPeer::THESAURUSVERWIJZIG_EENH_HOEVEELH_GENERIEK_NAAM => 7, GsSamenstellingPeer::EENHEID_HOEVEELHEID_GENERIEKE_NAAM => 8, GsSamenstellingPeer::STAMNAAMCODE => 9, GsSamenstellingPeer::HOEVEELHEID_STAMNAAM => 10, GsSamenstellingPeer::THESAURUSVERWIJZIG_EENH_HOEVEELH_STAMNAAM => 11, GsSamenstellingPeer::EENHEID_HOEVEELHEID_STAMNAAM => 12, GsSamenstellingPeer::STERKTES_MOGEN_WORDEN_OPGETELD_JN => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'THESAURUS_VERWIJZING_SOORT_CODE' => 2, 'SOORT_CODE' => 3, 'CODE' => 4, 'GENERIEKENAAMKODE' => 5, 'HOEVEELHEID_GENERIEK_NAAM' => 6, 'THESAURUSVERWIJZIG_EENH_HOEVEELH_GENERIEK_NAAM' => 7, 'EENHEID_HOEVEELHEID_GENERIEKE_NAAM' => 8, 'STAMNAAMCODE' => 9, 'HOEVEELHEID_STAMNAAM' => 10, 'THESAURUSVERWIJZIG_EENH_HOEVEELH_STAMNAAM' => 11, 'EENHEID_HOEVEELHEID_STAMNAAM' => 12, 'STERKTES_MOGEN_WORDEN_OPGETELD_JN' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'thesaurus_verwijzing_soort_code' => 2, 'soort_code' => 3, 'code' => 4, 'generiekenaamkode' => 5, 'hoeveelheid_generiek_naam' => 6, 'thesaurusverwijzig_eenh_hoeveelh_generiek_naam' => 7, 'eenheid_hoeveelheid_generieke_naam' => 8, 'stamnaamcode' => 9, 'hoeveelheid_stamnaam' => 10, 'thesaurusverwijzig_eenh_hoeveelh_stamnaam' => 11, 'eenheid_hoeveelheid_stamnaam' => 12, 'sterktes_mogen_worden_opgeteld_jn' => 13, ),
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
        $toNames = GsSamenstellingPeer::getFieldNames($toType);
        $key = isset(GsSamenstellingPeer::$fieldKeys[$fromType][$name]) ? GsSamenstellingPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsSamenstellingPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsSamenstellingPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsSamenstellingPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsSamenstellingPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsSamenstellingPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsSamenstellingPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsSamenstellingPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsSamenstellingPeer::THESAURUS_VERWIJZING_SOORT_CODE);
            $criteria->addSelectColumn(GsSamenstellingPeer::SOORT_CODE);
            $criteria->addSelectColumn(GsSamenstellingPeer::CODE);
            $criteria->addSelectColumn(GsSamenstellingPeer::GENERIEKENAAMKODE);
            $criteria->addSelectColumn(GsSamenstellingPeer::HOEVEELHEID_GENERIEK_NAAM);
            $criteria->addSelectColumn(GsSamenstellingPeer::THESAURUSVERWIJZIG_EENH_HOEVEELH_GENERIEK_NAAM);
            $criteria->addSelectColumn(GsSamenstellingPeer::EENHEID_HOEVEELHEID_GENERIEKE_NAAM);
            $criteria->addSelectColumn(GsSamenstellingPeer::STAMNAAMCODE);
            $criteria->addSelectColumn(GsSamenstellingPeer::HOEVEELHEID_STAMNAAM);
            $criteria->addSelectColumn(GsSamenstellingPeer::THESAURUSVERWIJZIG_EENH_HOEVEELH_STAMNAAM);
            $criteria->addSelectColumn(GsSamenstellingPeer::EENHEID_HOEVEELHEID_STAMNAAM);
            $criteria->addSelectColumn(GsSamenstellingPeer::STERKTES_MOGEN_WORDEN_OPGETELD_JN);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.thesaurus_verwijzing_soort_code');
            $criteria->addSelectColumn($alias . '.soort_code');
            $criteria->addSelectColumn($alias . '.code');
            $criteria->addSelectColumn($alias . '.generiekenaamkode');
            $criteria->addSelectColumn($alias . '.hoeveelheid_generiek_naam');
            $criteria->addSelectColumn($alias . '.thesaurusverwijzig_eenh_hoeveelh_generiek_naam');
            $criteria->addSelectColumn($alias . '.eenheid_hoeveelheid_generieke_naam');
            $criteria->addSelectColumn($alias . '.stamnaamcode');
            $criteria->addSelectColumn($alias . '.hoeveelheid_stamnaam');
            $criteria->addSelectColumn($alias . '.thesaurusverwijzig_eenh_hoeveelh_stamnaam');
            $criteria->addSelectColumn($alias . '.eenheid_hoeveelheid_stamnaam');
            $criteria->addSelectColumn($alias . '.sterktes_mogen_worden_opgeteld_jn');
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
        $criteria->setPrimaryTableName(GsSamenstellingPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsSamenstellingPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsSamenstellingPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsSamenstellingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsSamenstelling
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsSamenstellingPeer::doSelect($critcopy, $con);
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
        return GsSamenstellingPeer::populateObjects(GsSamenstellingPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsSamenstellingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsSamenstellingPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsSamenstellingPeer::DATABASE_NAME);

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
     * @param GsSamenstelling $obj A GsSamenstelling object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getSoortCode(), (string) $obj->getCode(), (string) $obj->getGeneriekenaamkode(), (string) $obj->getHoeveelheidGeneriekNaam(), (string) $obj->getEenheidHoeveelheidGeneriekeNaam()));
            } // if key === null
            GsSamenstellingPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsSamenstelling object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsSamenstelling) {
                $key = serialize(array((string) $value->getSoortCode(), (string) $value->getCode(), (string) $value->getGeneriekenaamkode(), (string) $value->getHoeveelheidGeneriekNaam(), (string) $value->getEenheidHoeveelheidGeneriekeNaam()));
            } elseif (is_array($value) && count($value) === 5) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsSamenstelling object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsSamenstellingPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsSamenstelling Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsSamenstellingPeer::$instances[$key])) {
                return GsSamenstellingPeer::$instances[$key];
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
        foreach (GsSamenstellingPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsSamenstellingPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_samenstelling
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
        if ($row[$startcol + 3] === null && $row[$startcol + 4] === null && $row[$startcol + 5] === null && $row[$startcol + 6] === null && $row[$startcol + 8] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 3], (string) $row[$startcol + 4], (string) $row[$startcol + 5], (string) $row[$startcol + 6], (string) $row[$startcol + 8]));
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

        return array((int) $row[$startcol + 3], (int) $row[$startcol + 4], (int) $row[$startcol + 5], (string) $row[$startcol + 6], (int) $row[$startcol + 8]);
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
        $cls = GsSamenstellingPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsSamenstellingPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsSamenstellingPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsSamenstellingPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsSamenstelling object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsSamenstellingPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsSamenstellingPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsSamenstellingPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsSamenstellingPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsSamenstellingPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsSamenstellingPeer::DATABASE_NAME)->getTable(GsSamenstellingPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsSamenstellingPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsSamenstellingPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsSamenstellingTableMap());
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
        return GsSamenstellingPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsSamenstelling or Criteria object.
     *
     * @param      mixed $values Criteria or GsSamenstelling object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsSamenstellingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsSamenstelling object
        }


        // Set the correct dbName
        $criteria->setDbName(GsSamenstellingPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsSamenstelling or Criteria object.
     *
     * @param      mixed $values Criteria or GsSamenstelling object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsSamenstellingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsSamenstellingPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsSamenstellingPeer::SOORT_CODE);
            $value = $criteria->remove(GsSamenstellingPeer::SOORT_CODE);
            if ($value) {
                $selectCriteria->add(GsSamenstellingPeer::SOORT_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsSamenstellingPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsSamenstellingPeer::CODE);
            $value = $criteria->remove(GsSamenstellingPeer::CODE);
            if ($value) {
                $selectCriteria->add(GsSamenstellingPeer::CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsSamenstellingPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsSamenstellingPeer::GENERIEKENAAMKODE);
            $value = $criteria->remove(GsSamenstellingPeer::GENERIEKENAAMKODE);
            if ($value) {
                $selectCriteria->add(GsSamenstellingPeer::GENERIEKENAAMKODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsSamenstellingPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsSamenstellingPeer::HOEVEELHEID_GENERIEK_NAAM);
            $value = $criteria->remove(GsSamenstellingPeer::HOEVEELHEID_GENERIEK_NAAM);
            if ($value) {
                $selectCriteria->add(GsSamenstellingPeer::HOEVEELHEID_GENERIEK_NAAM, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsSamenstellingPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsSamenstellingPeer::EENHEID_HOEVEELHEID_GENERIEKE_NAAM);
            $value = $criteria->remove(GsSamenstellingPeer::EENHEID_HOEVEELHEID_GENERIEKE_NAAM);
            if ($value) {
                $selectCriteria->add(GsSamenstellingPeer::EENHEID_HOEVEELHEID_GENERIEKE_NAAM, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsSamenstellingPeer::TABLE_NAME);
            }

        } else { // $values is GsSamenstelling object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsSamenstellingPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_samenstelling table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsSamenstellingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsSamenstellingPeer::TABLE_NAME, $con, GsSamenstellingPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsSamenstellingPeer::clearInstancePool();
            GsSamenstellingPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsSamenstelling or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsSamenstelling object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsSamenstellingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsSamenstellingPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsSamenstelling) { // it's a model object
            // invalidate the cache for this single object
            GsSamenstellingPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsSamenstellingPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsSamenstellingPeer::SOORT_CODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsSamenstellingPeer::CODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(GsSamenstellingPeer::GENERIEKENAAMKODE, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(GsSamenstellingPeer::HOEVEELHEID_GENERIEK_NAAM, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(GsSamenstellingPeer::EENHEID_HOEVEELHEID_GENERIEKE_NAAM, $value[4]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsSamenstellingPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsSamenstellingPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsSamenstellingPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsSamenstelling object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsSamenstelling $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsSamenstellingPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsSamenstellingPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsSamenstellingPeer::DATABASE_NAME, GsSamenstellingPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $soort_code
     * @param   int $code
     * @param   int $generiekenaamkode
     * @param   string $hoeveelheid_generiek_naam
     * @param   int $eenheid_hoeveelheid_generieke_naam
     * @param      PropelPDO $con
     * @return GsSamenstelling
     */
    public static function retrieveByPK($soort_code, $code, $generiekenaamkode, $hoeveelheid_generiek_naam, $eenheid_hoeveelheid_generieke_naam, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $soort_code, (string) $code, (string) $generiekenaamkode, (string) $hoeveelheid_generiek_naam, (string) $eenheid_hoeveelheid_generieke_naam));
         if (null !== ($obj = GsSamenstellingPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsSamenstellingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsSamenstellingPeer::DATABASE_NAME);
        $criteria->add(GsSamenstellingPeer::SOORT_CODE, $soort_code);
        $criteria->add(GsSamenstellingPeer::CODE, $code);
        $criteria->add(GsSamenstellingPeer::GENERIEKENAAMKODE, $generiekenaamkode);
        $criteria->add(GsSamenstellingPeer::HOEVEELHEID_GENERIEK_NAAM, $hoeveelheid_generiek_naam);
        $criteria->add(GsSamenstellingPeer::EENHEID_HOEVEELHEID_GENERIEKE_NAAM, $eenheid_hoeveelheid_generieke_naam);
        $v = GsSamenstellingPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsSamenstellingPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsSamenstellingPeer::buildTableMap();

