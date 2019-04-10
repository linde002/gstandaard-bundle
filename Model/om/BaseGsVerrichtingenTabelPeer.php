<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsVerrichtingenTabel;
use PharmaIntelligence\GstandaardBundle\Model\GsVerrichtingenTabelPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsVerrichtingenTabelTableMap;

abstract class BaseGsVerrichtingenTabelPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_verrichtingen_tabel';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVerrichtingenTabel';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsVerrichtingenTabelTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_verrichtingen_tabel.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_verrichtingen_tabel.mutatiekode';

    /** the column name for the verrichtingsnummer field */
    const VERRICHTINGSNUMMER = 'gs_verrichtingen_tabel.verrichtingsnummer';

    /** the column name for the thesaurusverwijzing_bron_verrichting field */
    const THESAURUSVERWIJZING_BRON_VERRICHTING = 'gs_verrichtingen_tabel.thesaurusverwijzing_bron_verrichting';

    /** the column name for the bron_verrichting field */
    const BRON_VERRICHTING = 'gs_verrichtingen_tabel.bron_verrichting';

    /** the column name for the verrichtingscode_gehanteerd_door_bron field */
    const VERRICHTINGSCODE_GEHANTEERD_DOOR_BRON = 'gs_verrichtingen_tabel.verrichtingscode_gehanteerd_door_bron';

    /** the column name for the thesaurusverwijzing_verrichtingsoort field */
    const THESAURUSVERWIJZING_VERRICHTINGSOORT = 'gs_verrichtingen_tabel.thesaurusverwijzing_verrichtingsoort';

    /** the column name for the verrichtingssoort_code field */
    const VERRICHTINGSSOORT_CODE = 'gs_verrichtingen_tabel.verrichtingssoort_code';

    /** the column name for the verrichtingsomschrijving field */
    const VERRICHTINGSOMSCHRIJVING = 'gs_verrichtingen_tabel.verrichtingsomschrijving';

    /** the column name for the memocode field */
    const MEMOCODE = 'gs_verrichtingen_tabel.memocode';

    /** the column name for the ingangsdatum field */
    const INGANGSDATUM = 'gs_verrichtingen_tabel.ingangsdatum';

    /** the column name for the vervaldatum field */
    const VERVALDATUM = 'gs_verrichtingen_tabel.vervaldatum';

    /** the column name for the url_voor_beschrijving_van_toepassing_verrichting field */
    const URL_VOOR_BESCHRIJVING_VAN_TOEPASSING_VERRICHTING = 'gs_verrichtingen_tabel.url_voor_beschrijving_van_toepassing_verrichting';

    /** the column name for the verrichtingsnummer_bovenliggend_niveau field */
    const VERRICHTINGSNUMMER_BOVENLIGGEND_NIVEAU = 'gs_verrichtingen_tabel.verrichtingsnummer_bovenliggend_niveau';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsVerrichtingenTabel objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsVerrichtingenTabel[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsVerrichtingenTabelPeer::$fieldNames[GsVerrichtingenTabelPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Verrichtingsnummer', 'ThesaurusverwijzingBronVerrichting', 'BronVerrichting', 'VerrichtingscodeGehanteerdDoorBron', 'ThesaurusverwijzingVerrichtingsoort', 'VerrichtingssoortCode', 'Verrichtingsomschrijving', 'Memocode', 'Ingangsdatum', 'Vervaldatum', 'UrlVoorBeschrijvingVanToepassingVerrichting', 'VerrichtingsnummerBovenliggendNiveau', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'verrichtingsnummer', 'thesaurusverwijzingBronVerrichting', 'bronVerrichting', 'verrichtingscodeGehanteerdDoorBron', 'thesaurusverwijzingVerrichtingsoort', 'verrichtingssoortCode', 'verrichtingsomschrijving', 'memocode', 'ingangsdatum', 'vervaldatum', 'urlVoorBeschrijvingVanToepassingVerrichting', 'verrichtingsnummerBovenliggendNiveau', ),
        BasePeer::TYPE_COLNAME => array (GsVerrichtingenTabelPeer::BESTANDNUMMER, GsVerrichtingenTabelPeer::MUTATIEKODE, GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER, GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_BRON_VERRICHTING, GsVerrichtingenTabelPeer::BRON_VERRICHTING, GsVerrichtingenTabelPeer::VERRICHTINGSCODE_GEHANTEERD_DOOR_BRON, GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_VERRICHTINGSOORT, GsVerrichtingenTabelPeer::VERRICHTINGSSOORT_CODE, GsVerrichtingenTabelPeer::VERRICHTINGSOMSCHRIJVING, GsVerrichtingenTabelPeer::MEMOCODE, GsVerrichtingenTabelPeer::INGANGSDATUM, GsVerrichtingenTabelPeer::VERVALDATUM, GsVerrichtingenTabelPeer::URL_VOOR_BESCHRIJVING_VAN_TOEPASSING_VERRICHTING, GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER_BOVENLIGGEND_NIVEAU, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'VERRICHTINGSNUMMER', 'THESAURUSVERWIJZING_BRON_VERRICHTING', 'BRON_VERRICHTING', 'VERRICHTINGSCODE_GEHANTEERD_DOOR_BRON', 'THESAURUSVERWIJZING_VERRICHTINGSOORT', 'VERRICHTINGSSOORT_CODE', 'VERRICHTINGSOMSCHRIJVING', 'MEMOCODE', 'INGANGSDATUM', 'VERVALDATUM', 'URL_VOOR_BESCHRIJVING_VAN_TOEPASSING_VERRICHTING', 'VERRICHTINGSNUMMER_BOVENLIGGEND_NIVEAU', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'verrichtingsnummer', 'thesaurusverwijzing_bron_verrichting', 'bron_verrichting', 'verrichtingscode_gehanteerd_door_bron', 'thesaurusverwijzing_verrichtingsoort', 'verrichtingssoort_code', 'verrichtingsomschrijving', 'memocode', 'ingangsdatum', 'vervaldatum', 'url_voor_beschrijving_van_toepassing_verrichting', 'verrichtingsnummer_bovenliggend_niveau', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsVerrichtingenTabelPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Verrichtingsnummer' => 2, 'ThesaurusverwijzingBronVerrichting' => 3, 'BronVerrichting' => 4, 'VerrichtingscodeGehanteerdDoorBron' => 5, 'ThesaurusverwijzingVerrichtingsoort' => 6, 'VerrichtingssoortCode' => 7, 'Verrichtingsomschrijving' => 8, 'Memocode' => 9, 'Ingangsdatum' => 10, 'Vervaldatum' => 11, 'UrlVoorBeschrijvingVanToepassingVerrichting' => 12, 'VerrichtingsnummerBovenliggendNiveau' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'verrichtingsnummer' => 2, 'thesaurusverwijzingBronVerrichting' => 3, 'bronVerrichting' => 4, 'verrichtingscodeGehanteerdDoorBron' => 5, 'thesaurusverwijzingVerrichtingsoort' => 6, 'verrichtingssoortCode' => 7, 'verrichtingsomschrijving' => 8, 'memocode' => 9, 'ingangsdatum' => 10, 'vervaldatum' => 11, 'urlVoorBeschrijvingVanToepassingVerrichting' => 12, 'verrichtingsnummerBovenliggendNiveau' => 13, ),
        BasePeer::TYPE_COLNAME => array (GsVerrichtingenTabelPeer::BESTANDNUMMER => 0, GsVerrichtingenTabelPeer::MUTATIEKODE => 1, GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER => 2, GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_BRON_VERRICHTING => 3, GsVerrichtingenTabelPeer::BRON_VERRICHTING => 4, GsVerrichtingenTabelPeer::VERRICHTINGSCODE_GEHANTEERD_DOOR_BRON => 5, GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_VERRICHTINGSOORT => 6, GsVerrichtingenTabelPeer::VERRICHTINGSSOORT_CODE => 7, GsVerrichtingenTabelPeer::VERRICHTINGSOMSCHRIJVING => 8, GsVerrichtingenTabelPeer::MEMOCODE => 9, GsVerrichtingenTabelPeer::INGANGSDATUM => 10, GsVerrichtingenTabelPeer::VERVALDATUM => 11, GsVerrichtingenTabelPeer::URL_VOOR_BESCHRIJVING_VAN_TOEPASSING_VERRICHTING => 12, GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER_BOVENLIGGEND_NIVEAU => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'VERRICHTINGSNUMMER' => 2, 'THESAURUSVERWIJZING_BRON_VERRICHTING' => 3, 'BRON_VERRICHTING' => 4, 'VERRICHTINGSCODE_GEHANTEERD_DOOR_BRON' => 5, 'THESAURUSVERWIJZING_VERRICHTINGSOORT' => 6, 'VERRICHTINGSSOORT_CODE' => 7, 'VERRICHTINGSOMSCHRIJVING' => 8, 'MEMOCODE' => 9, 'INGANGSDATUM' => 10, 'VERVALDATUM' => 11, 'URL_VOOR_BESCHRIJVING_VAN_TOEPASSING_VERRICHTING' => 12, 'VERRICHTINGSNUMMER_BOVENLIGGEND_NIVEAU' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'verrichtingsnummer' => 2, 'thesaurusverwijzing_bron_verrichting' => 3, 'bron_verrichting' => 4, 'verrichtingscode_gehanteerd_door_bron' => 5, 'thesaurusverwijzing_verrichtingsoort' => 6, 'verrichtingssoort_code' => 7, 'verrichtingsomschrijving' => 8, 'memocode' => 9, 'ingangsdatum' => 10, 'vervaldatum' => 11, 'url_voor_beschrijving_van_toepassing_verrichting' => 12, 'verrichtingsnummer_bovenliggend_niveau' => 13, ),
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
        $toNames = GsVerrichtingenTabelPeer::getFieldNames($toType);
        $key = isset(GsVerrichtingenTabelPeer::$fieldKeys[$fromType][$name]) ? GsVerrichtingenTabelPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsVerrichtingenTabelPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsVerrichtingenTabelPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsVerrichtingenTabelPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsVerrichtingenTabelPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsVerrichtingenTabelPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsVerrichtingenTabelPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsVerrichtingenTabelPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER);
            $criteria->addSelectColumn(GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_BRON_VERRICHTING);
            $criteria->addSelectColumn(GsVerrichtingenTabelPeer::BRON_VERRICHTING);
            $criteria->addSelectColumn(GsVerrichtingenTabelPeer::VERRICHTINGSCODE_GEHANTEERD_DOOR_BRON);
            $criteria->addSelectColumn(GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_VERRICHTINGSOORT);
            $criteria->addSelectColumn(GsVerrichtingenTabelPeer::VERRICHTINGSSOORT_CODE);
            $criteria->addSelectColumn(GsVerrichtingenTabelPeer::VERRICHTINGSOMSCHRIJVING);
            $criteria->addSelectColumn(GsVerrichtingenTabelPeer::MEMOCODE);
            $criteria->addSelectColumn(GsVerrichtingenTabelPeer::INGANGSDATUM);
            $criteria->addSelectColumn(GsVerrichtingenTabelPeer::VERVALDATUM);
            $criteria->addSelectColumn(GsVerrichtingenTabelPeer::URL_VOOR_BESCHRIJVING_VAN_TOEPASSING_VERRICHTING);
            $criteria->addSelectColumn(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER_BOVENLIGGEND_NIVEAU);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.verrichtingsnummer');
            $criteria->addSelectColumn($alias . '.thesaurusverwijzing_bron_verrichting');
            $criteria->addSelectColumn($alias . '.bron_verrichting');
            $criteria->addSelectColumn($alias . '.verrichtingscode_gehanteerd_door_bron');
            $criteria->addSelectColumn($alias . '.thesaurusverwijzing_verrichtingsoort');
            $criteria->addSelectColumn($alias . '.verrichtingssoort_code');
            $criteria->addSelectColumn($alias . '.verrichtingsomschrijving');
            $criteria->addSelectColumn($alias . '.memocode');
            $criteria->addSelectColumn($alias . '.ingangsdatum');
            $criteria->addSelectColumn($alias . '.vervaldatum');
            $criteria->addSelectColumn($alias . '.url_voor_beschrijving_van_toepassing_verrichting');
            $criteria->addSelectColumn($alias . '.verrichtingsnummer_bovenliggend_niveau');
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
        $criteria->setPrimaryTableName(GsVerrichtingenTabelPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsVerrichtingenTabelPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsVerrichtingenTabelPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsVerrichtingenTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsVerrichtingenTabel
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsVerrichtingenTabelPeer::doSelect($critcopy, $con);
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
        return GsVerrichtingenTabelPeer::populateObjects(GsVerrichtingenTabelPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsVerrichtingenTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsVerrichtingenTabelPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsVerrichtingenTabelPeer::DATABASE_NAME);

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
     * @param GsVerrichtingenTabel $obj A GsVerrichtingenTabel object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getVerrichtingsnummer(), (string) $obj->getBronVerrichting()));
            } // if key === null
            GsVerrichtingenTabelPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsVerrichtingenTabel object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsVerrichtingenTabel) {
                $key = serialize(array((string) $value->getVerrichtingsnummer(), (string) $value->getBronVerrichting()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsVerrichtingenTabel object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsVerrichtingenTabelPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsVerrichtingenTabel Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsVerrichtingenTabelPeer::$instances[$key])) {
                return GsVerrichtingenTabelPeer::$instances[$key];
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
        foreach (GsVerrichtingenTabelPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsVerrichtingenTabelPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_verrichtingen_tabel
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
        if ($row[$startcol + 2] === null && $row[$startcol + 4] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 4]));
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

        return array((int) $row[$startcol + 2], (int) $row[$startcol + 4]);
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
        $cls = GsVerrichtingenTabelPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsVerrichtingenTabelPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsVerrichtingenTabelPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsVerrichtingenTabelPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsVerrichtingenTabel object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsVerrichtingenTabelPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsVerrichtingenTabelPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsVerrichtingenTabelPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsVerrichtingenTabelPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsVerrichtingenTabelPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsVerrichtingenTabelPeer::DATABASE_NAME)->getTable(GsVerrichtingenTabelPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsVerrichtingenTabelPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsVerrichtingenTabelPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsVerrichtingenTabelTableMap());
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
        return GsVerrichtingenTabelPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsVerrichtingenTabel or Criteria object.
     *
     * @param      mixed $values Criteria or GsVerrichtingenTabel object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsVerrichtingenTabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsVerrichtingenTabel object
        }


        // Set the correct dbName
        $criteria->setDbName(GsVerrichtingenTabelPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsVerrichtingenTabel or Criteria object.
     *
     * @param      mixed $values Criteria or GsVerrichtingenTabel object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsVerrichtingenTabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsVerrichtingenTabelPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER);
            $value = $criteria->remove(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER);
            if ($value) {
                $selectCriteria->add(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsVerrichtingenTabelPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsVerrichtingenTabelPeer::BRON_VERRICHTING);
            $value = $criteria->remove(GsVerrichtingenTabelPeer::BRON_VERRICHTING);
            if ($value) {
                $selectCriteria->add(GsVerrichtingenTabelPeer::BRON_VERRICHTING, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsVerrichtingenTabelPeer::TABLE_NAME);
            }

        } else { // $values is GsVerrichtingenTabel object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsVerrichtingenTabelPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_verrichtingen_tabel table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsVerrichtingenTabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsVerrichtingenTabelPeer::TABLE_NAME, $con, GsVerrichtingenTabelPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsVerrichtingenTabelPeer::clearInstancePool();
            GsVerrichtingenTabelPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsVerrichtingenTabel or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsVerrichtingenTabel object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsVerrichtingenTabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsVerrichtingenTabelPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsVerrichtingenTabel) { // it's a model object
            // invalidate the cache for this single object
            GsVerrichtingenTabelPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsVerrichtingenTabelPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsVerrichtingenTabelPeer::BRON_VERRICHTING, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsVerrichtingenTabelPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsVerrichtingenTabelPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsVerrichtingenTabelPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsVerrichtingenTabel object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsVerrichtingenTabel $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsVerrichtingenTabelPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsVerrichtingenTabelPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsVerrichtingenTabelPeer::DATABASE_NAME, GsVerrichtingenTabelPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $verrichtingsnummer
     * @param   int $bron_verrichting
     * @param      PropelPDO $con
     * @return GsVerrichtingenTabel
     */
    public static function retrieveByPK($verrichtingsnummer, $bron_verrichting, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $verrichtingsnummer, (string) $bron_verrichting));
         if (null !== ($obj = GsVerrichtingenTabelPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsVerrichtingenTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsVerrichtingenTabelPeer::DATABASE_NAME);
        $criteria->add(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER, $verrichtingsnummer);
        $criteria->add(GsVerrichtingenTabelPeer::BRON_VERRICHTING, $bron_verrichting);
        $v = GsVerrichtingenTabelPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsVerrichtingenTabelPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsVerrichtingenTabelPeer::buildTableMap();

