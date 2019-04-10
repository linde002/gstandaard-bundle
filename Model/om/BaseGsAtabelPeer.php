<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsAtabel;
use PharmaIntelligence\GstandaardBundle\Model\GsAtabelPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsAtabelTableMap;

abstract class BaseGsAtabelPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_atabel';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAtabel';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsAtabelTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_atabel.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_atabel.mutatiekode';

    /** the column name for the unieknummer_per_eenheid_gebruiksadvies field */
    const UNIEKNUMMER_PER_EENHEID_GEBRUIKSADVIES = 'gs_atabel.unieknummer_per_eenheid_gebruiksadvies';

    /** the column name for the memocode_eenheid_gebruiksadvies field */
    const MEMOCODE_EENHEID_GEBRUIKSADVIES = 'gs_atabel.memocode_eenheid_gebruiksadvies';

    /** the column name for the omschrijving_eenheid_gebruiksadvies_enkelvoud field */
    const OMSCHRIJVING_EENHEID_GEBRUIKSADVIES_ENKELVOUD = 'gs_atabel.omschrijving_eenheid_gebruiksadvies_enkelvoud';

    /** the column name for the omschrijving_eenheid_gebruiksadvies_meervoud field */
    const OMSCHRIJVING_EENHEID_GEBRUIKSADVIES_MEERVOUD = 'gs_atabel.omschrijving_eenheid_gebruiksadvies_meervoud';

    /** the column name for the registratiedatum_gstandaard field */
    const REGISTRATIEDATUM_GSTANDAARD = 'gs_atabel.registratiedatum_gstandaard';

    /** the column name for the versienummer_wcia_tabellen_eerste_opname field */
    const VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME = 'gs_atabel.versienummer_wcia_tabellen_eerste_opname';

    /** the column name for the versienummer_wcia_tabellen_laatste_wijziging field */
    const VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING = 'gs_atabel.versienummer_wcia_tabellen_laatste_wijziging';

    /** the column name for the versienummer_wcia_tabellen_vervallen field */
    const VERSIENUMMER_WCIA_TABELLEN_VERVALLEN = 'gs_atabel.versienummer_wcia_tabellen_vervallen';

    /** the column name for the basiseenheid_product_thesaurusnr field */
    const BASISEENHEID_PRODUCT_THESAURUSNR = 'gs_atabel.basiseenheid_product_thesaurusnr';

    /** the column name for the hoeveelheid_overeenkomstige_eenheid field */
    const HOEVEELHEID_OVEREENKOMSTIGE_EENHEID = 'gs_atabel.hoeveelheid_overeenkomstige_eenheid';

    /** the column name for the basiseenheid_product_kode field */
    const BASISEENHEID_PRODUCT_KODE = 'gs_atabel.basiseenheid_product_kode';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsAtabel objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsAtabel[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsAtabelPeer::$fieldNames[GsAtabelPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'UnieknummerPerEenheidGebruiksadvies', 'MemocodeEenheidGebruiksadvies', 'OmschrijvingEenheidGebruiksadviesEnkelvoud', 'OmschrijvingEenheidGebruiksadviesMeervoud', 'RegistratiedatumGstandaard', 'VersienummerWciaTabellenEersteOpname', 'VersienummerWciaTabellenLaatsteWijziging', 'VersienummerWciaTabellenVervallen', 'BasiseenheidProductThesaurusnr', 'HoeveelheidOvereenkomstigeEenheid', 'BasiseenheidProductKode', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'unieknummerPerEenheidGebruiksadvies', 'memocodeEenheidGebruiksadvies', 'omschrijvingEenheidGebruiksadviesEnkelvoud', 'omschrijvingEenheidGebruiksadviesMeervoud', 'registratiedatumGstandaard', 'versienummerWciaTabellenEersteOpname', 'versienummerWciaTabellenLaatsteWijziging', 'versienummerWciaTabellenVervallen', 'basiseenheidProductThesaurusnr', 'hoeveelheidOvereenkomstigeEenheid', 'basiseenheidProductKode', ),
        BasePeer::TYPE_COLNAME => array (GsAtabelPeer::BESTANDNUMMER, GsAtabelPeer::MUTATIEKODE, GsAtabelPeer::UNIEKNUMMER_PER_EENHEID_GEBRUIKSADVIES, GsAtabelPeer::MEMOCODE_EENHEID_GEBRUIKSADVIES, GsAtabelPeer::OMSCHRIJVING_EENHEID_GEBRUIKSADVIES_ENKELVOUD, GsAtabelPeer::OMSCHRIJVING_EENHEID_GEBRUIKSADVIES_MEERVOUD, GsAtabelPeer::REGISTRATIEDATUM_GSTANDAARD, GsAtabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME, GsAtabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING, GsAtabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN, GsAtabelPeer::BASISEENHEID_PRODUCT_THESAURUSNR, GsAtabelPeer::HOEVEELHEID_OVEREENKOMSTIGE_EENHEID, GsAtabelPeer::BASISEENHEID_PRODUCT_KODE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'UNIEKNUMMER_PER_EENHEID_GEBRUIKSADVIES', 'MEMOCODE_EENHEID_GEBRUIKSADVIES', 'OMSCHRIJVING_EENHEID_GEBRUIKSADVIES_ENKELVOUD', 'OMSCHRIJVING_EENHEID_GEBRUIKSADVIES_MEERVOUD', 'REGISTRATIEDATUM_GSTANDAARD', 'VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME', 'VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING', 'VERSIENUMMER_WCIA_TABELLEN_VERVALLEN', 'BASISEENHEID_PRODUCT_THESAURUSNR', 'HOEVEELHEID_OVEREENKOMSTIGE_EENHEID', 'BASISEENHEID_PRODUCT_KODE', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'unieknummer_per_eenheid_gebruiksadvies', 'memocode_eenheid_gebruiksadvies', 'omschrijving_eenheid_gebruiksadvies_enkelvoud', 'omschrijving_eenheid_gebruiksadvies_meervoud', 'registratiedatum_gstandaard', 'versienummer_wcia_tabellen_eerste_opname', 'versienummer_wcia_tabellen_laatste_wijziging', 'versienummer_wcia_tabellen_vervallen', 'basiseenheid_product_thesaurusnr', 'hoeveelheid_overeenkomstige_eenheid', 'basiseenheid_product_kode', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsAtabelPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'UnieknummerPerEenheidGebruiksadvies' => 2, 'MemocodeEenheidGebruiksadvies' => 3, 'OmschrijvingEenheidGebruiksadviesEnkelvoud' => 4, 'OmschrijvingEenheidGebruiksadviesMeervoud' => 5, 'RegistratiedatumGstandaard' => 6, 'VersienummerWciaTabellenEersteOpname' => 7, 'VersienummerWciaTabellenLaatsteWijziging' => 8, 'VersienummerWciaTabellenVervallen' => 9, 'BasiseenheidProductThesaurusnr' => 10, 'HoeveelheidOvereenkomstigeEenheid' => 11, 'BasiseenheidProductKode' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'unieknummerPerEenheidGebruiksadvies' => 2, 'memocodeEenheidGebruiksadvies' => 3, 'omschrijvingEenheidGebruiksadviesEnkelvoud' => 4, 'omschrijvingEenheidGebruiksadviesMeervoud' => 5, 'registratiedatumGstandaard' => 6, 'versienummerWciaTabellenEersteOpname' => 7, 'versienummerWciaTabellenLaatsteWijziging' => 8, 'versienummerWciaTabellenVervallen' => 9, 'basiseenheidProductThesaurusnr' => 10, 'hoeveelheidOvereenkomstigeEenheid' => 11, 'basiseenheidProductKode' => 12, ),
        BasePeer::TYPE_COLNAME => array (GsAtabelPeer::BESTANDNUMMER => 0, GsAtabelPeer::MUTATIEKODE => 1, GsAtabelPeer::UNIEKNUMMER_PER_EENHEID_GEBRUIKSADVIES => 2, GsAtabelPeer::MEMOCODE_EENHEID_GEBRUIKSADVIES => 3, GsAtabelPeer::OMSCHRIJVING_EENHEID_GEBRUIKSADVIES_ENKELVOUD => 4, GsAtabelPeer::OMSCHRIJVING_EENHEID_GEBRUIKSADVIES_MEERVOUD => 5, GsAtabelPeer::REGISTRATIEDATUM_GSTANDAARD => 6, GsAtabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME => 7, GsAtabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING => 8, GsAtabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN => 9, GsAtabelPeer::BASISEENHEID_PRODUCT_THESAURUSNR => 10, GsAtabelPeer::HOEVEELHEID_OVEREENKOMSTIGE_EENHEID => 11, GsAtabelPeer::BASISEENHEID_PRODUCT_KODE => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'UNIEKNUMMER_PER_EENHEID_GEBRUIKSADVIES' => 2, 'MEMOCODE_EENHEID_GEBRUIKSADVIES' => 3, 'OMSCHRIJVING_EENHEID_GEBRUIKSADVIES_ENKELVOUD' => 4, 'OMSCHRIJVING_EENHEID_GEBRUIKSADVIES_MEERVOUD' => 5, 'REGISTRATIEDATUM_GSTANDAARD' => 6, 'VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME' => 7, 'VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING' => 8, 'VERSIENUMMER_WCIA_TABELLEN_VERVALLEN' => 9, 'BASISEENHEID_PRODUCT_THESAURUSNR' => 10, 'HOEVEELHEID_OVEREENKOMSTIGE_EENHEID' => 11, 'BASISEENHEID_PRODUCT_KODE' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'unieknummer_per_eenheid_gebruiksadvies' => 2, 'memocode_eenheid_gebruiksadvies' => 3, 'omschrijving_eenheid_gebruiksadvies_enkelvoud' => 4, 'omschrijving_eenheid_gebruiksadvies_meervoud' => 5, 'registratiedatum_gstandaard' => 6, 'versienummer_wcia_tabellen_eerste_opname' => 7, 'versienummer_wcia_tabellen_laatste_wijziging' => 8, 'versienummer_wcia_tabellen_vervallen' => 9, 'basiseenheid_product_thesaurusnr' => 10, 'hoeveelheid_overeenkomstige_eenheid' => 11, 'basiseenheid_product_kode' => 12, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
        $toNames = GsAtabelPeer::getFieldNames($toType);
        $key = isset(GsAtabelPeer::$fieldKeys[$fromType][$name]) ? GsAtabelPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsAtabelPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsAtabelPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsAtabelPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsAtabelPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsAtabelPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsAtabelPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsAtabelPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsAtabelPeer::UNIEKNUMMER_PER_EENHEID_GEBRUIKSADVIES);
            $criteria->addSelectColumn(GsAtabelPeer::MEMOCODE_EENHEID_GEBRUIKSADVIES);
            $criteria->addSelectColumn(GsAtabelPeer::OMSCHRIJVING_EENHEID_GEBRUIKSADVIES_ENKELVOUD);
            $criteria->addSelectColumn(GsAtabelPeer::OMSCHRIJVING_EENHEID_GEBRUIKSADVIES_MEERVOUD);
            $criteria->addSelectColumn(GsAtabelPeer::REGISTRATIEDATUM_GSTANDAARD);
            $criteria->addSelectColumn(GsAtabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME);
            $criteria->addSelectColumn(GsAtabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING);
            $criteria->addSelectColumn(GsAtabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN);
            $criteria->addSelectColumn(GsAtabelPeer::BASISEENHEID_PRODUCT_THESAURUSNR);
            $criteria->addSelectColumn(GsAtabelPeer::HOEVEELHEID_OVEREENKOMSTIGE_EENHEID);
            $criteria->addSelectColumn(GsAtabelPeer::BASISEENHEID_PRODUCT_KODE);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.unieknummer_per_eenheid_gebruiksadvies');
            $criteria->addSelectColumn($alias . '.memocode_eenheid_gebruiksadvies');
            $criteria->addSelectColumn($alias . '.omschrijving_eenheid_gebruiksadvies_enkelvoud');
            $criteria->addSelectColumn($alias . '.omschrijving_eenheid_gebruiksadvies_meervoud');
            $criteria->addSelectColumn($alias . '.registratiedatum_gstandaard');
            $criteria->addSelectColumn($alias . '.versienummer_wcia_tabellen_eerste_opname');
            $criteria->addSelectColumn($alias . '.versienummer_wcia_tabellen_laatste_wijziging');
            $criteria->addSelectColumn($alias . '.versienummer_wcia_tabellen_vervallen');
            $criteria->addSelectColumn($alias . '.basiseenheid_product_thesaurusnr');
            $criteria->addSelectColumn($alias . '.hoeveelheid_overeenkomstige_eenheid');
            $criteria->addSelectColumn($alias . '.basiseenheid_product_kode');
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
        $criteria->setPrimaryTableName(GsAtabelPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsAtabelPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsAtabelPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsAtabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsAtabel
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsAtabelPeer::doSelect($critcopy, $con);
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
        return GsAtabelPeer::populateObjects(GsAtabelPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsAtabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsAtabelPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsAtabelPeer::DATABASE_NAME);

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
     * @param GsAtabel $obj A GsAtabel object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getUnieknummerPerEenheidGebruiksadvies();
            } // if key === null
            GsAtabelPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsAtabel object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsAtabel) {
                $key = (string) $value->getUnieknummerPerEenheidGebruiksadvies();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsAtabel object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsAtabelPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsAtabel Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsAtabelPeer::$instances[$key])) {
                return GsAtabelPeer::$instances[$key];
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
        foreach (GsAtabelPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsAtabelPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_atabel
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
        $cls = GsAtabelPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsAtabelPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsAtabelPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsAtabelPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsAtabel object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsAtabelPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsAtabelPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsAtabelPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsAtabelPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsAtabelPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsAtabelPeer::DATABASE_NAME)->getTable(GsAtabelPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsAtabelPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsAtabelPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsAtabelTableMap());
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
        return GsAtabelPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsAtabel or Criteria object.
     *
     * @param      mixed $values Criteria or GsAtabel object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsAtabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsAtabel object
        }


        // Set the correct dbName
        $criteria->setDbName(GsAtabelPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsAtabel or Criteria object.
     *
     * @param      mixed $values Criteria or GsAtabel object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsAtabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsAtabelPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsAtabelPeer::UNIEKNUMMER_PER_EENHEID_GEBRUIKSADVIES);
            $value = $criteria->remove(GsAtabelPeer::UNIEKNUMMER_PER_EENHEID_GEBRUIKSADVIES);
            if ($value) {
                $selectCriteria->add(GsAtabelPeer::UNIEKNUMMER_PER_EENHEID_GEBRUIKSADVIES, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsAtabelPeer::TABLE_NAME);
            }

        } else { // $values is GsAtabel object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsAtabelPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_atabel table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsAtabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsAtabelPeer::TABLE_NAME, $con, GsAtabelPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsAtabelPeer::clearInstancePool();
            GsAtabelPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsAtabel or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsAtabel object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsAtabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsAtabelPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsAtabel) { // it's a model object
            // invalidate the cache for this single object
            GsAtabelPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsAtabelPeer::DATABASE_NAME);
            $criteria->add(GsAtabelPeer::UNIEKNUMMER_PER_EENHEID_GEBRUIKSADVIES, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsAtabelPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsAtabelPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsAtabelPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsAtabel object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsAtabel $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsAtabelPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsAtabelPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsAtabelPeer::DATABASE_NAME, GsAtabelPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsAtabel
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsAtabelPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsAtabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsAtabelPeer::DATABASE_NAME);
        $criteria->add(GsAtabelPeer::UNIEKNUMMER_PER_EENHEID_GEBRUIKSADVIES, $pk);

        $v = GsAtabelPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsAtabel[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsAtabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsAtabelPeer::DATABASE_NAME);
            $criteria->add(GsAtabelPeer::UNIEKNUMMER_PER_EENHEID_GEBRUIKSADVIES, $pks, Criteria::IN);
            $objs = GsAtabelPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsAtabelPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsAtabelPeer::buildTableMap();

