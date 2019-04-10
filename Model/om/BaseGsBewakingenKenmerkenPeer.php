<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsBewakingenKenmerken;
use PharmaIntelligence\GstandaardBundle\Model\GsBewakingenKenmerkenPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsBewakingenKenmerkenTableMap;

abstract class BaseGsBewakingenKenmerkenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_bewakingen_kenmerken';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsBewakingenKenmerken';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsBewakingenKenmerkenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_bewakingen_kenmerken.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_bewakingen_kenmerken.mutatiekode';

    /** the column name for the bewakingscode_ci field */
    const BEWAKINGSCODE_CI = 'gs_bewakingen_kenmerken.bewakingscode_ci';

    /** the column name for the omschrijving_cibewaking field */
    const OMSCHRIJVING_CIBEWAKING = 'gs_bewakingen_kenmerken.omschrijving_cibewaking';

    /** the column name for the thesnr_bewakingssoort field */
    const THESNR_BEWAKINGSSOORT = 'gs_bewakingen_kenmerken.thesnr_bewakingssoort';

    /** the column name for the bewakingssoort field */
    const BEWAKINGSSOORT = 'gs_bewakingen_kenmerken.bewakingssoort';

    /** the column name for the thesnr_folder field */
    const THESNR_FOLDER = 'gs_bewakingen_kenmerken.thesnr_folder';

    /** the column name for the folder field */
    const FOLDER = 'gs_bewakingen_kenmerken.folder';

    /** the column name for the volgens_deskundigen_jn field */
    const VOLGENS_DESKUNDIGEN_JN = 'gs_bewakingen_kenmerken.volgens_deskundigen_jn';

    /** the column name for the actie_nodig_jn field */
    const ACTIE_NODIG_JN = 'gs_bewakingen_kenmerken.actie_nodig_jn';

    /** the column name for the datum_vastlegging_winap field */
    const DATUM_VASTLEGGING_WINAP = 'gs_bewakingen_kenmerken.datum_vastlegging_winap';

    /** the column name for the datum_opvoer_gstandaard field */
    const DATUM_OPVOER_GSTANDAARD = 'gs_bewakingen_kenmerken.datum_opvoer_gstandaard';

    /** the column name for the datum_mutatie_gstandaard field */
    const DATUM_MUTATIE_GSTANDAARD = 'gs_bewakingen_kenmerken.datum_mutatie_gstandaard';

    /** the column name for the creatinine_klaring field */
    const CREATININE_KLARING = 'gs_bewakingen_kenmerken.creatinine_klaring';

    /** the column name for the bewaking_te_volgen_door_monitoren field */
    const BEWAKING_TE_VOLGEN_DOOR_MONITOREN = 'gs_bewakingen_kenmerken.bewaking_te_volgen_door_monitoren';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsBewakingenKenmerken objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsBewakingenKenmerken[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsBewakingenKenmerkenPeer::$fieldNames[GsBewakingenKenmerkenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'BewakingscodeCi', 'OmschrijvingCibewaking', 'ThesnrBewakingssoort', 'Bewakingssoort', 'ThesnrFolder', 'Folder', 'VolgensDeskundigenJn', 'ActieNodigJn', 'DatumVastleggingWinap', 'DatumOpvoerGstandaard', 'DatumMutatieGstandaard', 'CreatinineKlaring', 'BewakingTeVolgenDoorMonitoren', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'bewakingscodeCi', 'omschrijvingCibewaking', 'thesnrBewakingssoort', 'bewakingssoort', 'thesnrFolder', 'folder', 'volgensDeskundigenJn', 'actieNodigJn', 'datumVastleggingWinap', 'datumOpvoerGstandaard', 'datumMutatieGstandaard', 'creatinineKlaring', 'bewakingTeVolgenDoorMonitoren', ),
        BasePeer::TYPE_COLNAME => array (GsBewakingenKenmerkenPeer::BESTANDNUMMER, GsBewakingenKenmerkenPeer::MUTATIEKODE, GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI, GsBewakingenKenmerkenPeer::OMSCHRIJVING_CIBEWAKING, GsBewakingenKenmerkenPeer::THESNR_BEWAKINGSSOORT, GsBewakingenKenmerkenPeer::BEWAKINGSSOORT, GsBewakingenKenmerkenPeer::THESNR_FOLDER, GsBewakingenKenmerkenPeer::FOLDER, GsBewakingenKenmerkenPeer::VOLGENS_DESKUNDIGEN_JN, GsBewakingenKenmerkenPeer::ACTIE_NODIG_JN, GsBewakingenKenmerkenPeer::DATUM_VASTLEGGING_WINAP, GsBewakingenKenmerkenPeer::DATUM_OPVOER_GSTANDAARD, GsBewakingenKenmerkenPeer::DATUM_MUTATIE_GSTANDAARD, GsBewakingenKenmerkenPeer::CREATININE_KLARING, GsBewakingenKenmerkenPeer::BEWAKING_TE_VOLGEN_DOOR_MONITOREN, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'BEWAKINGSCODE_CI', 'OMSCHRIJVING_CIBEWAKING', 'THESNR_BEWAKINGSSOORT', 'BEWAKINGSSOORT', 'THESNR_FOLDER', 'FOLDER', 'VOLGENS_DESKUNDIGEN_JN', 'ACTIE_NODIG_JN', 'DATUM_VASTLEGGING_WINAP', 'DATUM_OPVOER_GSTANDAARD', 'DATUM_MUTATIE_GSTANDAARD', 'CREATININE_KLARING', 'BEWAKING_TE_VOLGEN_DOOR_MONITOREN', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'bewakingscode_ci', 'omschrijving_cibewaking', 'thesnr_bewakingssoort', 'bewakingssoort', 'thesnr_folder', 'folder', 'volgens_deskundigen_jn', 'actie_nodig_jn', 'datum_vastlegging_winap', 'datum_opvoer_gstandaard', 'datum_mutatie_gstandaard', 'creatinine_klaring', 'bewaking_te_volgen_door_monitoren', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsBewakingenKenmerkenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'BewakingscodeCi' => 2, 'OmschrijvingCibewaking' => 3, 'ThesnrBewakingssoort' => 4, 'Bewakingssoort' => 5, 'ThesnrFolder' => 6, 'Folder' => 7, 'VolgensDeskundigenJn' => 8, 'ActieNodigJn' => 9, 'DatumVastleggingWinap' => 10, 'DatumOpvoerGstandaard' => 11, 'DatumMutatieGstandaard' => 12, 'CreatinineKlaring' => 13, 'BewakingTeVolgenDoorMonitoren' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'bewakingscodeCi' => 2, 'omschrijvingCibewaking' => 3, 'thesnrBewakingssoort' => 4, 'bewakingssoort' => 5, 'thesnrFolder' => 6, 'folder' => 7, 'volgensDeskundigenJn' => 8, 'actieNodigJn' => 9, 'datumVastleggingWinap' => 10, 'datumOpvoerGstandaard' => 11, 'datumMutatieGstandaard' => 12, 'creatinineKlaring' => 13, 'bewakingTeVolgenDoorMonitoren' => 14, ),
        BasePeer::TYPE_COLNAME => array (GsBewakingenKenmerkenPeer::BESTANDNUMMER => 0, GsBewakingenKenmerkenPeer::MUTATIEKODE => 1, GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI => 2, GsBewakingenKenmerkenPeer::OMSCHRIJVING_CIBEWAKING => 3, GsBewakingenKenmerkenPeer::THESNR_BEWAKINGSSOORT => 4, GsBewakingenKenmerkenPeer::BEWAKINGSSOORT => 5, GsBewakingenKenmerkenPeer::THESNR_FOLDER => 6, GsBewakingenKenmerkenPeer::FOLDER => 7, GsBewakingenKenmerkenPeer::VOLGENS_DESKUNDIGEN_JN => 8, GsBewakingenKenmerkenPeer::ACTIE_NODIG_JN => 9, GsBewakingenKenmerkenPeer::DATUM_VASTLEGGING_WINAP => 10, GsBewakingenKenmerkenPeer::DATUM_OPVOER_GSTANDAARD => 11, GsBewakingenKenmerkenPeer::DATUM_MUTATIE_GSTANDAARD => 12, GsBewakingenKenmerkenPeer::CREATININE_KLARING => 13, GsBewakingenKenmerkenPeer::BEWAKING_TE_VOLGEN_DOOR_MONITOREN => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'BEWAKINGSCODE_CI' => 2, 'OMSCHRIJVING_CIBEWAKING' => 3, 'THESNR_BEWAKINGSSOORT' => 4, 'BEWAKINGSSOORT' => 5, 'THESNR_FOLDER' => 6, 'FOLDER' => 7, 'VOLGENS_DESKUNDIGEN_JN' => 8, 'ACTIE_NODIG_JN' => 9, 'DATUM_VASTLEGGING_WINAP' => 10, 'DATUM_OPVOER_GSTANDAARD' => 11, 'DATUM_MUTATIE_GSTANDAARD' => 12, 'CREATININE_KLARING' => 13, 'BEWAKING_TE_VOLGEN_DOOR_MONITOREN' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'bewakingscode_ci' => 2, 'omschrijving_cibewaking' => 3, 'thesnr_bewakingssoort' => 4, 'bewakingssoort' => 5, 'thesnr_folder' => 6, 'folder' => 7, 'volgens_deskundigen_jn' => 8, 'actie_nodig_jn' => 9, 'datum_vastlegging_winap' => 10, 'datum_opvoer_gstandaard' => 11, 'datum_mutatie_gstandaard' => 12, 'creatinine_klaring' => 13, 'bewaking_te_volgen_door_monitoren' => 14, ),
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
        $toNames = GsBewakingenKenmerkenPeer::getFieldNames($toType);
        $key = isset(GsBewakingenKenmerkenPeer::$fieldKeys[$fromType][$name]) ? GsBewakingenKenmerkenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsBewakingenKenmerkenPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsBewakingenKenmerkenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsBewakingenKenmerkenPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsBewakingenKenmerkenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsBewakingenKenmerkenPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsBewakingenKenmerkenPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsBewakingenKenmerkenPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI);
            $criteria->addSelectColumn(GsBewakingenKenmerkenPeer::OMSCHRIJVING_CIBEWAKING);
            $criteria->addSelectColumn(GsBewakingenKenmerkenPeer::THESNR_BEWAKINGSSOORT);
            $criteria->addSelectColumn(GsBewakingenKenmerkenPeer::BEWAKINGSSOORT);
            $criteria->addSelectColumn(GsBewakingenKenmerkenPeer::THESNR_FOLDER);
            $criteria->addSelectColumn(GsBewakingenKenmerkenPeer::FOLDER);
            $criteria->addSelectColumn(GsBewakingenKenmerkenPeer::VOLGENS_DESKUNDIGEN_JN);
            $criteria->addSelectColumn(GsBewakingenKenmerkenPeer::ACTIE_NODIG_JN);
            $criteria->addSelectColumn(GsBewakingenKenmerkenPeer::DATUM_VASTLEGGING_WINAP);
            $criteria->addSelectColumn(GsBewakingenKenmerkenPeer::DATUM_OPVOER_GSTANDAARD);
            $criteria->addSelectColumn(GsBewakingenKenmerkenPeer::DATUM_MUTATIE_GSTANDAARD);
            $criteria->addSelectColumn(GsBewakingenKenmerkenPeer::CREATININE_KLARING);
            $criteria->addSelectColumn(GsBewakingenKenmerkenPeer::BEWAKING_TE_VOLGEN_DOOR_MONITOREN);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.bewakingscode_ci');
            $criteria->addSelectColumn($alias . '.omschrijving_cibewaking');
            $criteria->addSelectColumn($alias . '.thesnr_bewakingssoort');
            $criteria->addSelectColumn($alias . '.bewakingssoort');
            $criteria->addSelectColumn($alias . '.thesnr_folder');
            $criteria->addSelectColumn($alias . '.folder');
            $criteria->addSelectColumn($alias . '.volgens_deskundigen_jn');
            $criteria->addSelectColumn($alias . '.actie_nodig_jn');
            $criteria->addSelectColumn($alias . '.datum_vastlegging_winap');
            $criteria->addSelectColumn($alias . '.datum_opvoer_gstandaard');
            $criteria->addSelectColumn($alias . '.datum_mutatie_gstandaard');
            $criteria->addSelectColumn($alias . '.creatinine_klaring');
            $criteria->addSelectColumn($alias . '.bewaking_te_volgen_door_monitoren');
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
        $criteria->setPrimaryTableName(GsBewakingenKenmerkenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsBewakingenKenmerkenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsBewakingenKenmerkenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsBewakingenKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsBewakingenKenmerken
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsBewakingenKenmerkenPeer::doSelect($critcopy, $con);
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
        return GsBewakingenKenmerkenPeer::populateObjects(GsBewakingenKenmerkenPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsBewakingenKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsBewakingenKenmerkenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsBewakingenKenmerkenPeer::DATABASE_NAME);

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
     * @param GsBewakingenKenmerken $obj A GsBewakingenKenmerken object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getBewakingscodeCi();
            } // if key === null
            GsBewakingenKenmerkenPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsBewakingenKenmerken object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsBewakingenKenmerken) {
                $key = (string) $value->getBewakingscodeCi();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsBewakingenKenmerken object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsBewakingenKenmerkenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsBewakingenKenmerken Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsBewakingenKenmerkenPeer::$instances[$key])) {
                return GsBewakingenKenmerkenPeer::$instances[$key];
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
        foreach (GsBewakingenKenmerkenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsBewakingenKenmerkenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_bewakingen_kenmerken
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
        $cls = GsBewakingenKenmerkenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsBewakingenKenmerkenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsBewakingenKenmerkenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsBewakingenKenmerkenPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsBewakingenKenmerken object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsBewakingenKenmerkenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsBewakingenKenmerkenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsBewakingenKenmerkenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsBewakingenKenmerkenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsBewakingenKenmerkenPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsBewakingenKenmerkenPeer::DATABASE_NAME)->getTable(GsBewakingenKenmerkenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsBewakingenKenmerkenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsBewakingenKenmerkenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsBewakingenKenmerkenTableMap());
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
        return GsBewakingenKenmerkenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsBewakingenKenmerken or Criteria object.
     *
     * @param      mixed $values Criteria or GsBewakingenKenmerken object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsBewakingenKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsBewakingenKenmerken object
        }


        // Set the correct dbName
        $criteria->setDbName(GsBewakingenKenmerkenPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsBewakingenKenmerken or Criteria object.
     *
     * @param      mixed $values Criteria or GsBewakingenKenmerken object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsBewakingenKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsBewakingenKenmerkenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI);
            $value = $criteria->remove(GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI);
            if ($value) {
                $selectCriteria->add(GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsBewakingenKenmerkenPeer::TABLE_NAME);
            }

        } else { // $values is GsBewakingenKenmerken object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsBewakingenKenmerkenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_bewakingen_kenmerken table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsBewakingenKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsBewakingenKenmerkenPeer::TABLE_NAME, $con, GsBewakingenKenmerkenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsBewakingenKenmerkenPeer::clearInstancePool();
            GsBewakingenKenmerkenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsBewakingenKenmerken or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsBewakingenKenmerken object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsBewakingenKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsBewakingenKenmerkenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsBewakingenKenmerken) { // it's a model object
            // invalidate the cache for this single object
            GsBewakingenKenmerkenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsBewakingenKenmerkenPeer::DATABASE_NAME);
            $criteria->add(GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsBewakingenKenmerkenPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsBewakingenKenmerkenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsBewakingenKenmerkenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsBewakingenKenmerken object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsBewakingenKenmerken $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsBewakingenKenmerkenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsBewakingenKenmerkenPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsBewakingenKenmerkenPeer::DATABASE_NAME, GsBewakingenKenmerkenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsBewakingenKenmerken
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsBewakingenKenmerkenPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsBewakingenKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsBewakingenKenmerkenPeer::DATABASE_NAME);
        $criteria->add(GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI, $pk);

        $v = GsBewakingenKenmerkenPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsBewakingenKenmerken[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsBewakingenKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsBewakingenKenmerkenPeer::DATABASE_NAME);
            $criteria->add(GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI, $pks, Criteria::IN);
            $objs = GsBewakingenKenmerkenPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsBewakingenKenmerkenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsBewakingenKenmerkenPeer::buildTableMap();

