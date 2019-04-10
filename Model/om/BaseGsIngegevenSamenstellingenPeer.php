<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeNamenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingen;
use PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsIngegevenSamenstellingenTableMap;

abstract class BaseGsIngegevenSamenstellingenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_ingegeven_samenstellingen';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsIngegevenSamenstellingen';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsIngegevenSamenstellingenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_ingegeven_samenstellingen.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_ingegeven_samenstellingen.mutatiekode';

    /** the column name for the handelsproduktkode field */
    const HANDELSPRODUKTKODE = 'gs_ingegeven_samenstellingen.handelsproduktkode';

    /** the column name for the volgnummer field */
    const VOLGNUMMER = 'gs_ingegeven_samenstellingen.volgnummer';

    /** the column name for the aanduiding_werkzaamhulpstof field */
    const AANDUIDING_WERKZAAMHULPSTOF = 'gs_ingegeven_samenstellingen.aanduiding_werkzaamhulpstof';

    /** the column name for the generiekenaamkode field */
    const GENERIEKENAAMKODE = 'gs_ingegeven_samenstellingen.generiekenaamkode';

    /** the column name for the hoeveelheid_werkzame_stof field */
    const HOEVEELHEID_WERKZAME_STOF = 'gs_ingegeven_samenstellingen.hoeveelheid_werkzame_stof';

    /** the column name for the eenh_hvh_werkzstof_thesaurus_1 field */
    const EENH_HVH_WERKZSTOF_THESAURUS_1 = 'gs_ingegeven_samenstellingen.eenh_hvh_werkzstof_thesaurus_1';

    /** the column name for the eenhhoeveelheid_werkzame_stof_kode field */
    const EENHHOEVEELHEID_WERKZAME_STOF_KODE = 'gs_ingegeven_samenstellingen.eenhhoeveelheid_werkzame_stof_kode';

    /** the column name for the stamnaamcode field */
    const STAMNAAMCODE = 'gs_ingegeven_samenstellingen.stamnaamcode';

    /** the column name for the stamtoedieningsweg_thesaurus_58 field */
    const STAMTOEDIENINGSWEG_THESAURUS_58 = 'gs_ingegeven_samenstellingen.stamtoedieningsweg_thesaurus_58';

    /** the column name for the stamtoedieningsweg_code field */
    const STAMTOEDIENINGSWEG_CODE = 'gs_ingegeven_samenstellingen.stamtoedieningsweg_code';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsIngegevenSamenstellingen objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsIngegevenSamenstellingen[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsIngegevenSamenstellingenPeer::$fieldNames[GsIngegevenSamenstellingenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Handelsproduktkode', 'Volgnummer', 'AanduidingWerkzaamhulpstof', 'Generiekenaamkode', 'HoeveelheidWerkzameStof', 'EenhHvhWerkzstofThesaurus1', 'EenhhoeveelheidWerkzameStofKode', 'Stamnaamcode', 'StamtoedieningswegThesaurus58', 'StamtoedieningswegCode', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'handelsproduktkode', 'volgnummer', 'aanduidingWerkzaamhulpstof', 'generiekenaamkode', 'hoeveelheidWerkzameStof', 'eenhHvhWerkzstofThesaurus1', 'eenhhoeveelheidWerkzameStofKode', 'stamnaamcode', 'stamtoedieningswegThesaurus58', 'stamtoedieningswegCode', ),
        BasePeer::TYPE_COLNAME => array (GsIngegevenSamenstellingenPeer::BESTANDNUMMER, GsIngegevenSamenstellingenPeer::MUTATIEKODE, GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, GsIngegevenSamenstellingenPeer::VOLGNUMMER, GsIngegevenSamenstellingenPeer::AANDUIDING_WERKZAAMHULPSTOF, GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE, GsIngegevenSamenstellingenPeer::HOEVEELHEID_WERKZAME_STOF, GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1, GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE, GsIngegevenSamenstellingenPeer::STAMNAAMCODE, GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'HANDELSPRODUKTKODE', 'VOLGNUMMER', 'AANDUIDING_WERKZAAMHULPSTOF', 'GENERIEKENAAMKODE', 'HOEVEELHEID_WERKZAME_STOF', 'EENH_HVH_WERKZSTOF_THESAURUS_1', 'EENHHOEVEELHEID_WERKZAME_STOF_KODE', 'STAMNAAMCODE', 'STAMTOEDIENINGSWEG_THESAURUS_58', 'STAMTOEDIENINGSWEG_CODE', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'handelsproduktkode', 'volgnummer', 'aanduiding_werkzaamhulpstof', 'generiekenaamkode', 'hoeveelheid_werkzame_stof', 'eenh_hvh_werkzstof_thesaurus_1', 'eenhhoeveelheid_werkzame_stof_kode', 'stamnaamcode', 'stamtoedieningsweg_thesaurus_58', 'stamtoedieningsweg_code', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsIngegevenSamenstellingenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Handelsproduktkode' => 2, 'Volgnummer' => 3, 'AanduidingWerkzaamhulpstof' => 4, 'Generiekenaamkode' => 5, 'HoeveelheidWerkzameStof' => 6, 'EenhHvhWerkzstofThesaurus1' => 7, 'EenhhoeveelheidWerkzameStofKode' => 8, 'Stamnaamcode' => 9, 'StamtoedieningswegThesaurus58' => 10, 'StamtoedieningswegCode' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'handelsproduktkode' => 2, 'volgnummer' => 3, 'aanduidingWerkzaamhulpstof' => 4, 'generiekenaamkode' => 5, 'hoeveelheidWerkzameStof' => 6, 'eenhHvhWerkzstofThesaurus1' => 7, 'eenhhoeveelheidWerkzameStofKode' => 8, 'stamnaamcode' => 9, 'stamtoedieningswegThesaurus58' => 10, 'stamtoedieningswegCode' => 11, ),
        BasePeer::TYPE_COLNAME => array (GsIngegevenSamenstellingenPeer::BESTANDNUMMER => 0, GsIngegevenSamenstellingenPeer::MUTATIEKODE => 1, GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE => 2, GsIngegevenSamenstellingenPeer::VOLGNUMMER => 3, GsIngegevenSamenstellingenPeer::AANDUIDING_WERKZAAMHULPSTOF => 4, GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE => 5, GsIngegevenSamenstellingenPeer::HOEVEELHEID_WERKZAME_STOF => 6, GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1 => 7, GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE => 8, GsIngegevenSamenstellingenPeer::STAMNAAMCODE => 9, GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58 => 10, GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'HANDELSPRODUKTKODE' => 2, 'VOLGNUMMER' => 3, 'AANDUIDING_WERKZAAMHULPSTOF' => 4, 'GENERIEKENAAMKODE' => 5, 'HOEVEELHEID_WERKZAME_STOF' => 6, 'EENH_HVH_WERKZSTOF_THESAURUS_1' => 7, 'EENHHOEVEELHEID_WERKZAME_STOF_KODE' => 8, 'STAMNAAMCODE' => 9, 'STAMTOEDIENINGSWEG_THESAURUS_58' => 10, 'STAMTOEDIENINGSWEG_CODE' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'handelsproduktkode' => 2, 'volgnummer' => 3, 'aanduiding_werkzaamhulpstof' => 4, 'generiekenaamkode' => 5, 'hoeveelheid_werkzame_stof' => 6, 'eenh_hvh_werkzstof_thesaurus_1' => 7, 'eenhhoeveelheid_werkzame_stof_kode' => 8, 'stamnaamcode' => 9, 'stamtoedieningsweg_thesaurus_58' => 10, 'stamtoedieningsweg_code' => 11, ),
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
        $toNames = GsIngegevenSamenstellingenPeer::getFieldNames($toType);
        $key = isset(GsIngegevenSamenstellingenPeer::$fieldKeys[$fromType][$name]) ? GsIngegevenSamenstellingenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsIngegevenSamenstellingenPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsIngegevenSamenstellingenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsIngegevenSamenstellingenPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsIngegevenSamenstellingenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsIngegevenSamenstellingenPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsIngegevenSamenstellingenPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsIngegevenSamenstellingenPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE);
            $criteria->addSelectColumn(GsIngegevenSamenstellingenPeer::VOLGNUMMER);
            $criteria->addSelectColumn(GsIngegevenSamenstellingenPeer::AANDUIDING_WERKZAAMHULPSTOF);
            $criteria->addSelectColumn(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE);
            $criteria->addSelectColumn(GsIngegevenSamenstellingenPeer::HOEVEELHEID_WERKZAME_STOF);
            $criteria->addSelectColumn(GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1);
            $criteria->addSelectColumn(GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE);
            $criteria->addSelectColumn(GsIngegevenSamenstellingenPeer::STAMNAAMCODE);
            $criteria->addSelectColumn(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58);
            $criteria->addSelectColumn(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.handelsproduktkode');
            $criteria->addSelectColumn($alias . '.volgnummer');
            $criteria->addSelectColumn($alias . '.aanduiding_werkzaamhulpstof');
            $criteria->addSelectColumn($alias . '.generiekenaamkode');
            $criteria->addSelectColumn($alias . '.hoeveelheid_werkzame_stof');
            $criteria->addSelectColumn($alias . '.eenh_hvh_werkzstof_thesaurus_1');
            $criteria->addSelectColumn($alias . '.eenhhoeveelheid_werkzame_stof_kode');
            $criteria->addSelectColumn($alias . '.stamnaamcode');
            $criteria->addSelectColumn($alias . '.stamtoedieningsweg_thesaurus_58');
            $criteria->addSelectColumn($alias . '.stamtoedieningsweg_code');
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
        $criteria->setPrimaryTableName(GsIngegevenSamenstellingenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsIngegevenSamenstellingen
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsIngegevenSamenstellingenPeer::doSelect($critcopy, $con);
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
        return GsIngegevenSamenstellingenPeer::populateObjects(GsIngegevenSamenstellingenPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);

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
     * @param GsIngegevenSamenstellingen $obj A GsIngegevenSamenstellingen object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getHandelsproduktkode(), (string) $obj->getVolgnummer()));
            } // if key === null
            GsIngegevenSamenstellingenPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsIngegevenSamenstellingen object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsIngegevenSamenstellingen) {
                $key = serialize(array((string) $value->getHandelsproduktkode(), (string) $value->getVolgnummer()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsIngegevenSamenstellingen object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsIngegevenSamenstellingenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsIngegevenSamenstellingen Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsIngegevenSamenstellingenPeer::$instances[$key])) {
                return GsIngegevenSamenstellingenPeer::$instances[$key];
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
        foreach (GsIngegevenSamenstellingenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsIngegevenSamenstellingenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_ingegeven_samenstellingen
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
        $cls = GsIngegevenSamenstellingenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsIngegevenSamenstellingenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsIngegevenSamenstellingenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsIngegevenSamenstellingenPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsIngegevenSamenstellingen object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsIngegevenSamenstellingenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsIngegevenSamenstellingenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsIngegevenSamenstellingenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsIngegevenSamenstellingenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsIngegevenSamenstellingenPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsHandelsproducten table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsHandelsproducten(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsIngegevenSamenstellingenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsGeneriekeNamen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsGeneriekeNamen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsIngegevenSamenstellingenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE, GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related EenheidHoeveelheidOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEenheidHoeveelheidOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsIngegevenSamenstellingenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Returns the number of rows matching criteria, joining the related StamtoedieningswegOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinStamtoedieningswegOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsIngegevenSamenstellingenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Selects a collection of GsIngegevenSamenstellingen objects pre-filled with their GsHandelsproducten objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsIngegevenSamenstellingen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsHandelsproducten(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);
        }

        GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        $startcol = GsIngegevenSamenstellingenPeer::NUM_HYDRATE_COLUMNS;
        GsHandelsproductenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsIngegevenSamenstellingenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsIngegevenSamenstellingenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsIngegevenSamenstellingenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsIngegevenSamenstellingenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsIngegevenSamenstellingen) to $obj2 (GsHandelsproducten)
                $obj2->addGsIngegevenSamenstellingen($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsIngegevenSamenstellingen objects pre-filled with their GsGeneriekeNamen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsIngegevenSamenstellingen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsGeneriekeNamen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);
        }

        GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        $startcol = GsIngegevenSamenstellingenPeer::NUM_HYDRATE_COLUMNS;
        GsGeneriekeNamenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE, GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsIngegevenSamenstellingenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsIngegevenSamenstellingenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsIngegevenSamenstellingenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsIngegevenSamenstellingenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsGeneriekeNamenPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsGeneriekeNamenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsGeneriekeNamenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsGeneriekeNamenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsIngegevenSamenstellingen) to $obj2 (GsGeneriekeNamen)
                $obj2->addGsIngegevenSamenstellingen($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsIngegevenSamenstellingen objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsIngegevenSamenstellingen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEenheidHoeveelheidOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);
        }

        GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        $startcol = GsIngegevenSamenstellingenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsIngegevenSamenstellingenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsIngegevenSamenstellingenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsIngegevenSamenstellingenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsIngegevenSamenstellingenPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsIngegevenSamenstellingen) to $obj2 (GsThesauriTotaal)
                $obj2->addGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsIngegevenSamenstellingen objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsIngegevenSamenstellingen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinStamtoedieningswegOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);
        }

        GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        $startcol = GsIngegevenSamenstellingenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsIngegevenSamenstellingenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsIngegevenSamenstellingenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsIngegevenSamenstellingenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsIngegevenSamenstellingenPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsIngegevenSamenstellingen) to $obj2 (GsThesauriTotaal)
                $obj2->addGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($obj1);

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
        $criteria->setPrimaryTableName(GsIngegevenSamenstellingenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE, GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Selects a collection of GsIngegevenSamenstellingen objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsIngegevenSamenstellingen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);
        }

        GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        $startcol2 = GsIngegevenSamenstellingenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsGeneriekeNamenPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE, GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsIngegevenSamenstellingenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsIngegevenSamenstellingenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsIngegevenSamenstellingenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsIngegevenSamenstellingenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined GsHandelsproducten rows

            $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (GsIngegevenSamenstellingen) to the collection in $obj2 (GsHandelsproducten)
                $obj2->addGsIngegevenSamenstellingen($obj1);
            } // if joined row not null

            // Add objects for joined GsGeneriekeNamen rows

            $key3 = GsGeneriekeNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = GsGeneriekeNamenPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = GsGeneriekeNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsGeneriekeNamenPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (GsIngegevenSamenstellingen) to the collection in $obj3 (GsGeneriekeNamen)
                $obj3->addGsIngegevenSamenstellingen($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key4 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = GsThesauriTotaalPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsThesauriTotaalPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (GsIngegevenSamenstellingen) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key5 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = GsThesauriTotaalPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsThesauriTotaalPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (GsIngegevenSamenstellingen) to the collection in $obj5 (GsThesauriTotaal)
                $obj5->addGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsHandelsproducten table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsHandelsproducten(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsIngegevenSamenstellingenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE, GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Returns the number of rows matching criteria, joining the related GsGeneriekeNamen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsGeneriekeNamen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsIngegevenSamenstellingenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Returns the number of rows matching criteria, joining the related EenheidHoeveelheidOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEenheidHoeveelheidOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsIngegevenSamenstellingenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE, GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related StamtoedieningswegOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptStamtoedieningswegOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsIngegevenSamenstellingenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE, GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $join_behavior);

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
     * Selects a collection of GsIngegevenSamenstellingen objects pre-filled with all related objects except GsHandelsproducten.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsIngegevenSamenstellingen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsHandelsproducten(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);
        }

        GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        $startcol2 = GsIngegevenSamenstellingenPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeNamenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsGeneriekeNamenPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE, GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsIngegevenSamenstellingenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsIngegevenSamenstellingenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsIngegevenSamenstellingenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsIngegevenSamenstellingenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsGeneriekeNamen rows

                $key2 = GsGeneriekeNamenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsGeneriekeNamenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsGeneriekeNamenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsGeneriekeNamenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsIngegevenSamenstellingen) to the collection in $obj2 (GsGeneriekeNamen)
                $obj2->addGsIngegevenSamenstellingen($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key3 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsThesauriTotaalPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsThesauriTotaalPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsIngegevenSamenstellingen) to the collection in $obj3 (GsThesauriTotaal)
                $obj3->addGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key4 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsThesauriTotaalPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsThesauriTotaalPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsIngegevenSamenstellingen) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsIngegevenSamenstellingen objects pre-filled with all related objects except GsGeneriekeNamen.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsIngegevenSamenstellingen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsGeneriekeNamen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);
        }

        GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        $startcol2 = GsIngegevenSamenstellingenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsIngegevenSamenstellingenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsIngegevenSamenstellingenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsIngegevenSamenstellingenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsIngegevenSamenstellingenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsHandelsproducten rows

                $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsIngegevenSamenstellingen) to the collection in $obj2 (GsHandelsproducten)
                $obj2->addGsIngegevenSamenstellingen($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key3 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsThesauriTotaalPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsThesauriTotaalPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsIngegevenSamenstellingen) to the collection in $obj3 (GsThesauriTotaal)
                $obj3->addGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key4 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsThesauriTotaalPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsThesauriTotaalPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsIngegevenSamenstellingen) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsIngegevenSamenstellingen objects pre-filled with all related objects except EenheidHoeveelheidOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsIngegevenSamenstellingen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEenheidHoeveelheidOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);
        }

        GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        $startcol2 = GsIngegevenSamenstellingenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsGeneriekeNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE, GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsIngegevenSamenstellingenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsIngegevenSamenstellingenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsIngegevenSamenstellingenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsIngegevenSamenstellingenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsHandelsproducten rows

                $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsIngegevenSamenstellingen) to the collection in $obj2 (GsHandelsproducten)
                $obj2->addGsIngegevenSamenstellingen($obj1);

            } // if joined row is not null

                // Add objects for joined GsGeneriekeNamen rows

                $key3 = GsGeneriekeNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsGeneriekeNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsGeneriekeNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsGeneriekeNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsIngegevenSamenstellingen) to the collection in $obj3 (GsGeneriekeNamen)
                $obj3->addGsIngegevenSamenstellingen($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsIngegevenSamenstellingen objects pre-filled with all related objects except StamtoedieningswegOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsIngegevenSamenstellingen objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptStamtoedieningswegOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);
        }

        GsIngegevenSamenstellingenPeer::addSelectColumns($criteria);
        $startcol2 = GsIngegevenSamenstellingenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsGeneriekeNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE, GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsIngegevenSamenstellingenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsIngegevenSamenstellingenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsIngegevenSamenstellingenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsIngegevenSamenstellingenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsHandelsproducten rows

                $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsIngegevenSamenstellingen) to the collection in $obj2 (GsHandelsproducten)
                $obj2->addGsIngegevenSamenstellingen($obj1);

            } // if joined row is not null

                // Add objects for joined GsGeneriekeNamen rows

                $key3 = GsGeneriekeNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsGeneriekeNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsGeneriekeNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsGeneriekeNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsIngegevenSamenstellingen) to the collection in $obj3 (GsGeneriekeNamen)
                $obj3->addGsIngegevenSamenstellingen($obj1);

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
        return Propel::getDatabaseMap(GsIngegevenSamenstellingenPeer::DATABASE_NAME)->getTable(GsIngegevenSamenstellingenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsIngegevenSamenstellingenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsIngegevenSamenstellingenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsIngegevenSamenstellingenTableMap());
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
        return GsIngegevenSamenstellingenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsIngegevenSamenstellingen or Criteria object.
     *
     * @param      mixed $values Criteria or GsIngegevenSamenstellingen object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsIngegevenSamenstellingen object
        }


        // Set the correct dbName
        $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsIngegevenSamenstellingen or Criteria object.
     *
     * @param      mixed $values Criteria or GsIngegevenSamenstellingen object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsIngegevenSamenstellingenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE);
            $value = $criteria->remove(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE);
            if ($value) {
                $selectCriteria->add(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsIngegevenSamenstellingenPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsIngegevenSamenstellingenPeer::VOLGNUMMER);
            $value = $criteria->remove(GsIngegevenSamenstellingenPeer::VOLGNUMMER);
            if ($value) {
                $selectCriteria->add(GsIngegevenSamenstellingenPeer::VOLGNUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsIngegevenSamenstellingenPeer::TABLE_NAME);
            }

        } else { // $values is GsIngegevenSamenstellingen object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_ingegeven_samenstellingen table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsIngegevenSamenstellingenPeer::TABLE_NAME, $con, GsIngegevenSamenstellingenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsIngegevenSamenstellingenPeer::clearInstancePool();
            GsIngegevenSamenstellingenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsIngegevenSamenstellingen or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsIngegevenSamenstellingen object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsIngegevenSamenstellingenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsIngegevenSamenstellingen) { // it's a model object
            // invalidate the cache for this single object
            GsIngegevenSamenstellingenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsIngegevenSamenstellingenPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsIngegevenSamenstellingenPeer::VOLGNUMMER, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsIngegevenSamenstellingenPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsIngegevenSamenstellingenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsIngegevenSamenstellingenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsIngegevenSamenstellingen object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsIngegevenSamenstellingen $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsIngegevenSamenstellingenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsIngegevenSamenstellingenPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsIngegevenSamenstellingenPeer::DATABASE_NAME, GsIngegevenSamenstellingenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $handelsproduktkode
     * @param   int $volgnummer
     * @param      PropelPDO $con
     * @return GsIngegevenSamenstellingen
     */
    public static function retrieveByPK($handelsproduktkode, $volgnummer, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $handelsproduktkode, (string) $volgnummer));
         if (null !== ($obj = GsIngegevenSamenstellingenPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsIngegevenSamenstellingenPeer::DATABASE_NAME);
        $criteria->add(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, $handelsproduktkode);
        $criteria->add(GsIngegevenSamenstellingenPeer::VOLGNUMMER, $volgnummer);
        $v = GsIngegevenSamenstellingenPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsIngegevenSamenstellingenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsIngegevenSamenstellingenPeer::buildTableMap();

