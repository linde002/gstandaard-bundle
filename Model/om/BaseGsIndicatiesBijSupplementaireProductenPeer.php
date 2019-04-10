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
use PharmaIntelligence\GstandaardBundle\Model\GsIndicatiesBijSupplementaireProducten;
use PharmaIntelligence\GstandaardBundle\Model\GsIndicatiesBijSupplementaireProductenPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsIndicatiesBijSupplementaireProductenTableMap;

abstract class BaseGsIndicatiesBijSupplementaireProductenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_indicaties_bij_supplementaire_producten';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsIndicatiesBijSupplementaireProducten';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsIndicatiesBijSupplementaireProductenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_indicaties_bij_supplementaire_producten.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_indicaties_bij_supplementaire_producten.mutatiekode';

    /** the column name for the zindex_nummer field */
    const ZINDEX_NUMMER = 'gs_indicaties_bij_supplementaire_producten.zindex_nummer';

    /** the column name for the indicatie_id field */
    const INDICATIE_ID = 'gs_indicaties_bij_supplementaire_producten.indicatie_id';

    /** the column name for the tekstmodule_indicatie_id field */
    const TEKSTMODULE_INDICATIE_ID = 'gs_indicaties_bij_supplementaire_producten.tekstmodule_indicatie_id';

    /** the column name for the thesaurus_nummer_soort_indicatie field */
    const THESAURUS_NUMMER_SOORT_INDICATIE = 'gs_indicaties_bij_supplementaire_producten.thesaurus_nummer_soort_indicatie';

    /** the column name for the soort_indicatie field */
    const SOORT_INDICATIE = 'gs_indicaties_bij_supplementaire_producten.soort_indicatie';

    /** the column name for the duiding_id field */
    const DUIDING_ID = 'gs_indicaties_bij_supplementaire_producten.duiding_id';

    /** the column name for the tekstmodule_duiding_id field */
    const TEKSTMODULE_DUIDING_ID = 'gs_indicaties_bij_supplementaire_producten.tekstmodule_duiding_id';

    /** the column name for the aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn field */
    const AANSPRAAK_OP_GENEESMIDDEL_BIJ_INDICATIE_VOLGENS_ZN = 'gs_indicaties_bij_supplementaire_producten.aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsIndicatiesBijSupplementaireProducten objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsIndicatiesBijSupplementaireProducten[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsIndicatiesBijSupplementaireProductenPeer::$fieldNames[GsIndicatiesBijSupplementaireProductenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'ZindexNummer', 'IndicatieId', 'TekstmoduleIndicatieId', 'ThesaurusNummerSoortIndicatie', 'SoortIndicatie', 'DuidingId', 'TekstmoduleDuidingId', 'AanspraakOpGeneesmiddelBijIndicatieVolgensZn', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'zindexNummer', 'indicatieId', 'tekstmoduleIndicatieId', 'thesaurusNummerSoortIndicatie', 'soortIndicatie', 'duidingId', 'tekstmoduleDuidingId', 'aanspraakOpGeneesmiddelBijIndicatieVolgensZn', ),
        BasePeer::TYPE_COLNAME => array (GsIndicatiesBijSupplementaireProductenPeer::BESTANDNUMMER, GsIndicatiesBijSupplementaireProductenPeer::MUTATIEKODE, GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER, GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID, GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_INDICATIE_ID, GsIndicatiesBijSupplementaireProductenPeer::THESAURUS_NUMMER_SOORT_INDICATIE, GsIndicatiesBijSupplementaireProductenPeer::SOORT_INDICATIE, GsIndicatiesBijSupplementaireProductenPeer::DUIDING_ID, GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_DUIDING_ID, GsIndicatiesBijSupplementaireProductenPeer::AANSPRAAK_OP_GENEESMIDDEL_BIJ_INDICATIE_VOLGENS_ZN, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'ZINDEX_NUMMER', 'INDICATIE_ID', 'TEKSTMODULE_INDICATIE_ID', 'THESAURUS_NUMMER_SOORT_INDICATIE', 'SOORT_INDICATIE', 'DUIDING_ID', 'TEKSTMODULE_DUIDING_ID', 'AANSPRAAK_OP_GENEESMIDDEL_BIJ_INDICATIE_VOLGENS_ZN', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'zindex_nummer', 'indicatie_id', 'tekstmodule_indicatie_id', 'thesaurus_nummer_soort_indicatie', 'soort_indicatie', 'duiding_id', 'tekstmodule_duiding_id', 'aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsIndicatiesBijSupplementaireProductenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'ZindexNummer' => 2, 'IndicatieId' => 3, 'TekstmoduleIndicatieId' => 4, 'ThesaurusNummerSoortIndicatie' => 5, 'SoortIndicatie' => 6, 'DuidingId' => 7, 'TekstmoduleDuidingId' => 8, 'AanspraakOpGeneesmiddelBijIndicatieVolgensZn' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'zindexNummer' => 2, 'indicatieId' => 3, 'tekstmoduleIndicatieId' => 4, 'thesaurusNummerSoortIndicatie' => 5, 'soortIndicatie' => 6, 'duidingId' => 7, 'tekstmoduleDuidingId' => 8, 'aanspraakOpGeneesmiddelBijIndicatieVolgensZn' => 9, ),
        BasePeer::TYPE_COLNAME => array (GsIndicatiesBijSupplementaireProductenPeer::BESTANDNUMMER => 0, GsIndicatiesBijSupplementaireProductenPeer::MUTATIEKODE => 1, GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER => 2, GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID => 3, GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_INDICATIE_ID => 4, GsIndicatiesBijSupplementaireProductenPeer::THESAURUS_NUMMER_SOORT_INDICATIE => 5, GsIndicatiesBijSupplementaireProductenPeer::SOORT_INDICATIE => 6, GsIndicatiesBijSupplementaireProductenPeer::DUIDING_ID => 7, GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_DUIDING_ID => 8, GsIndicatiesBijSupplementaireProductenPeer::AANSPRAAK_OP_GENEESMIDDEL_BIJ_INDICATIE_VOLGENS_ZN => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'ZINDEX_NUMMER' => 2, 'INDICATIE_ID' => 3, 'TEKSTMODULE_INDICATIE_ID' => 4, 'THESAURUS_NUMMER_SOORT_INDICATIE' => 5, 'SOORT_INDICATIE' => 6, 'DUIDING_ID' => 7, 'TEKSTMODULE_DUIDING_ID' => 8, 'AANSPRAAK_OP_GENEESMIDDEL_BIJ_INDICATIE_VOLGENS_ZN' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'zindex_nummer' => 2, 'indicatie_id' => 3, 'tekstmodule_indicatie_id' => 4, 'thesaurus_nummer_soort_indicatie' => 5, 'soort_indicatie' => 6, 'duiding_id' => 7, 'tekstmodule_duiding_id' => 8, 'aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn' => 9, ),
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
        $toNames = GsIndicatiesBijSupplementaireProductenPeer::getFieldNames($toType);
        $key = isset(GsIndicatiesBijSupplementaireProductenPeer::$fieldKeys[$fromType][$name]) ? GsIndicatiesBijSupplementaireProductenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsIndicatiesBijSupplementaireProductenPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsIndicatiesBijSupplementaireProductenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsIndicatiesBijSupplementaireProductenPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsIndicatiesBijSupplementaireProductenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsIndicatiesBijSupplementaireProductenPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsIndicatiesBijSupplementaireProductenPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsIndicatiesBijSupplementaireProductenPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER);
            $criteria->addSelectColumn(GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID);
            $criteria->addSelectColumn(GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_INDICATIE_ID);
            $criteria->addSelectColumn(GsIndicatiesBijSupplementaireProductenPeer::THESAURUS_NUMMER_SOORT_INDICATIE);
            $criteria->addSelectColumn(GsIndicatiesBijSupplementaireProductenPeer::SOORT_INDICATIE);
            $criteria->addSelectColumn(GsIndicatiesBijSupplementaireProductenPeer::DUIDING_ID);
            $criteria->addSelectColumn(GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_DUIDING_ID);
            $criteria->addSelectColumn(GsIndicatiesBijSupplementaireProductenPeer::AANSPRAAK_OP_GENEESMIDDEL_BIJ_INDICATIE_VOLGENS_ZN);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.zindex_nummer');
            $criteria->addSelectColumn($alias . '.indicatie_id');
            $criteria->addSelectColumn($alias . '.tekstmodule_indicatie_id');
            $criteria->addSelectColumn($alias . '.thesaurus_nummer_soort_indicatie');
            $criteria->addSelectColumn($alias . '.soort_indicatie');
            $criteria->addSelectColumn($alias . '.duiding_id');
            $criteria->addSelectColumn($alias . '.tekstmodule_duiding_id');
            $criteria->addSelectColumn($alias . '.aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn');
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
        $criteria->setPrimaryTableName(GsIndicatiesBijSupplementaireProductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsIndicatiesBijSupplementaireProductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsIndicatiesBijSupplementaireProducten
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsIndicatiesBijSupplementaireProductenPeer::doSelect($critcopy, $con);
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
        return GsIndicatiesBijSupplementaireProductenPeer::populateObjects(GsIndicatiesBijSupplementaireProductenPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsIndicatiesBijSupplementaireProductenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME);

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
     * @param GsIndicatiesBijSupplementaireProducten $obj A GsIndicatiesBijSupplementaireProducten object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getZindexNummer(), (string) $obj->getIndicatieId()));
            } // if key === null
            GsIndicatiesBijSupplementaireProductenPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsIndicatiesBijSupplementaireProducten object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsIndicatiesBijSupplementaireProducten) {
                $key = serialize(array((string) $value->getZindexNummer(), (string) $value->getIndicatieId()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsIndicatiesBijSupplementaireProducten object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsIndicatiesBijSupplementaireProductenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsIndicatiesBijSupplementaireProducten Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsIndicatiesBijSupplementaireProductenPeer::$instances[$key])) {
                return GsIndicatiesBijSupplementaireProductenPeer::$instances[$key];
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
        foreach (GsIndicatiesBijSupplementaireProductenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsIndicatiesBijSupplementaireProductenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_indicaties_bij_supplementaire_producten
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
        $cls = GsIndicatiesBijSupplementaireProductenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsIndicatiesBijSupplementaireProductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsIndicatiesBijSupplementaireProductenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsIndicatiesBijSupplementaireProductenPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsIndicatiesBijSupplementaireProducten object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsIndicatiesBijSupplementaireProductenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsIndicatiesBijSupplementaireProductenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsIndicatiesBijSupplementaireProductenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsIndicatiesBijSupplementaireProductenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsIndicatiesBijSupplementaireProductenPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(GsIndicatiesBijSupplementaireProductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsIndicatiesBijSupplementaireProductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Selects a collection of GsIndicatiesBijSupplementaireProducten objects pre-filled with their GsArtikelen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsIndicatiesBijSupplementaireProducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsArtikelen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME);
        }

        GsIndicatiesBijSupplementaireProductenPeer::addSelectColumns($criteria);
        $startcol = GsIndicatiesBijSupplementaireProductenPeer::NUM_HYDRATE_COLUMNS;
        GsArtikelenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsIndicatiesBijSupplementaireProductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsIndicatiesBijSupplementaireProductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsIndicatiesBijSupplementaireProductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsIndicatiesBijSupplementaireProductenPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsIndicatiesBijSupplementaireProducten) to $obj2 (GsArtikelen)
                $obj2->addGsIndicatiesBijSupplementaireProducten($obj1);

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
        $criteria->setPrimaryTableName(GsIndicatiesBijSupplementaireProductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsIndicatiesBijSupplementaireProductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Selects a collection of GsIndicatiesBijSupplementaireProducten objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsIndicatiesBijSupplementaireProducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME);
        }

        GsIndicatiesBijSupplementaireProductenPeer::addSelectColumns($criteria);
        $startcol2 = GsIndicatiesBijSupplementaireProductenPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsIndicatiesBijSupplementaireProductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsIndicatiesBijSupplementaireProductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsIndicatiesBijSupplementaireProductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsIndicatiesBijSupplementaireProductenPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsIndicatiesBijSupplementaireProducten) to the collection in $obj2 (GsArtikelen)
                $obj2->addGsIndicatiesBijSupplementaireProducten($obj1);
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
        return Propel::getDatabaseMap(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME)->getTable(GsIndicatiesBijSupplementaireProductenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsIndicatiesBijSupplementaireProductenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsIndicatiesBijSupplementaireProductenTableMap());
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
        return GsIndicatiesBijSupplementaireProductenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsIndicatiesBijSupplementaireProducten or Criteria object.
     *
     * @param      mixed $values Criteria or GsIndicatiesBijSupplementaireProducten object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsIndicatiesBijSupplementaireProducten object
        }


        // Set the correct dbName
        $criteria->setDbName(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsIndicatiesBijSupplementaireProducten or Criteria object.
     *
     * @param      mixed $values Criteria or GsIndicatiesBijSupplementaireProducten object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER);
            $value = $criteria->remove(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER);
            if ($value) {
                $selectCriteria->add(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsIndicatiesBijSupplementaireProductenPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID);
            $value = $criteria->remove(GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID);
            if ($value) {
                $selectCriteria->add(GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsIndicatiesBijSupplementaireProductenPeer::TABLE_NAME);
            }

        } else { // $values is GsIndicatiesBijSupplementaireProducten object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_indicaties_bij_supplementaire_producten table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsIndicatiesBijSupplementaireProductenPeer::TABLE_NAME, $con, GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsIndicatiesBijSupplementaireProductenPeer::clearInstancePool();
            GsIndicatiesBijSupplementaireProductenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsIndicatiesBijSupplementaireProducten or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsIndicatiesBijSupplementaireProducten object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsIndicatiesBijSupplementaireProductenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsIndicatiesBijSupplementaireProducten) { // it's a model object
            // invalidate the cache for this single object
            GsIndicatiesBijSupplementaireProductenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsIndicatiesBijSupplementaireProductenPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsIndicatiesBijSupplementaireProductenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsIndicatiesBijSupplementaireProducten object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsIndicatiesBijSupplementaireProducten $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsIndicatiesBijSupplementaireProductenPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME, GsIndicatiesBijSupplementaireProductenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $zindex_nummer
     * @param   int $indicatie_id
     * @param      PropelPDO $con
     * @return GsIndicatiesBijSupplementaireProducten
     */
    public static function retrieveByPK($zindex_nummer, $indicatie_id, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $zindex_nummer, (string) $indicatie_id));
         if (null !== ($obj = GsIndicatiesBijSupplementaireProductenPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME);
        $criteria->add(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER, $zindex_nummer);
        $criteria->add(GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID, $indicatie_id);
        $v = GsIndicatiesBijSupplementaireProductenPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsIndicatiesBijSupplementaireProductenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsIndicatiesBijSupplementaireProductenPeer::buildTableMap();

