<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsPrijsTariefTabel;
use PharmaIntelligence\GstandaardBundle\Model\GsPrijsTariefTabelPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsPrijsTariefTabelTableMap;

abstract class BaseGsPrijsTariefTabelPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_prijs_tarief_tabel';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPrijsTariefTabel';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsPrijsTariefTabelTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_prijs_tarief_tabel.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_prijs_tarief_tabel.mutatiekode';

    /** the column name for the thesaurusverwijzing_soort_codering field */
    const THESAURUSVERWIJZING_SOORT_CODERING = 'gs_prijs_tarief_tabel.thesaurusverwijzing_soort_codering';

    /** the column name for the soort_codering field */
    const SOORT_CODERING = 'gs_prijs_tarief_tabel.soort_codering';

    /** the column name for the unieke_id_van_codering field */
    const UNIEKE_ID_VAN_CODERING = 'gs_prijs_tarief_tabel.unieke_id_van_codering';

    /** the column name for the thesaurusverwijzing_srt_tariefprijsbedrag field */
    const THESAURUSVERWIJZING_SRT_TARIEFPRIJSBEDRAG = 'gs_prijs_tarief_tabel.thesaurusverwijzing_srt_tariefprijsbedrag';

    /** the column name for the soort_tariefprijsbedrag field */
    const SOORT_TARIEFPRIJSBEDRAG = 'gs_prijs_tarief_tabel.soort_tariefprijsbedrag';

    /** the column name for the thesaurusverwijzing_soort_bron field */
    const THESAURUSVERWIJZING_SOORT_BRON = 'gs_prijs_tarief_tabel.thesaurusverwijzing_soort_bron';

    /** the column name for the soort_bron field */
    const SOORT_BRON = 'gs_prijs_tarief_tabel.soort_bron';

    /** the column name for the unieke_id_van_bron field */
    const UNIEKE_ID_VAN_BRON = 'gs_prijs_tarief_tabel.unieke_id_van_bron';

    /** the column name for the aanvullende_contract_informatie field */
    const AANVULLENDE_CONTRACT_INFORMATIE = 'gs_prijs_tarief_tabel.aanvullende_contract_informatie';

    /** the column name for the tarief_prijs_bedrag field */
    const TARIEF_PRIJS_BEDRAG = 'gs_prijs_tarief_tabel.tarief_prijs_bedrag';

    /** the column name for the startdatum_van_tariefprijsbedrag field */
    const STARTDATUM_VAN_TARIEFPRIJSBEDRAG = 'gs_prijs_tarief_tabel.startdatum_van_tariefprijsbedrag';

    /** the column name for the einddatum_van_tariefprijsbedrag field */
    const EINDDATUM_VAN_TARIEFPRIJSBEDRAG = 'gs_prijs_tarief_tabel.einddatum_van_tariefprijsbedrag';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsPrijsTariefTabel objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsPrijsTariefTabel[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsPrijsTariefTabelPeer::$fieldNames[GsPrijsTariefTabelPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'ThesaurusverwijzingSoortCodering', 'SoortCodering', 'UniekeIdVanCodering', 'ThesaurusverwijzingSrtTariefprijsbedrag', 'SoortTariefprijsbedrag', 'ThesaurusverwijzingSoortBron', 'SoortBron', 'UniekeIdVanBron', 'AanvullendeContractInformatie', 'TariefPrijsBedrag', 'StartdatumVanTariefprijsbedrag', 'EinddatumVanTariefprijsbedrag', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'thesaurusverwijzingSoortCodering', 'soortCodering', 'uniekeIdVanCodering', 'thesaurusverwijzingSrtTariefprijsbedrag', 'soortTariefprijsbedrag', 'thesaurusverwijzingSoortBron', 'soortBron', 'uniekeIdVanBron', 'aanvullendeContractInformatie', 'tariefPrijsBedrag', 'startdatumVanTariefprijsbedrag', 'einddatumVanTariefprijsbedrag', ),
        BasePeer::TYPE_COLNAME => array (GsPrijsTariefTabelPeer::BESTANDNUMMER, GsPrijsTariefTabelPeer::MUTATIEKODE, GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_CODERING, GsPrijsTariefTabelPeer::SOORT_CODERING, GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_CODERING, GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SRT_TARIEFPRIJSBEDRAG, GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG, GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_BRON, GsPrijsTariefTabelPeer::SOORT_BRON, GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_BRON, GsPrijsTariefTabelPeer::AANVULLENDE_CONTRACT_INFORMATIE, GsPrijsTariefTabelPeer::TARIEF_PRIJS_BEDRAG, GsPrijsTariefTabelPeer::STARTDATUM_VAN_TARIEFPRIJSBEDRAG, GsPrijsTariefTabelPeer::EINDDATUM_VAN_TARIEFPRIJSBEDRAG, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'THESAURUSVERWIJZING_SOORT_CODERING', 'SOORT_CODERING', 'UNIEKE_ID_VAN_CODERING', 'THESAURUSVERWIJZING_SRT_TARIEFPRIJSBEDRAG', 'SOORT_TARIEFPRIJSBEDRAG', 'THESAURUSVERWIJZING_SOORT_BRON', 'SOORT_BRON', 'UNIEKE_ID_VAN_BRON', 'AANVULLENDE_CONTRACT_INFORMATIE', 'TARIEF_PRIJS_BEDRAG', 'STARTDATUM_VAN_TARIEFPRIJSBEDRAG', 'EINDDATUM_VAN_TARIEFPRIJSBEDRAG', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'thesaurusverwijzing_soort_codering', 'soort_codering', 'unieke_id_van_codering', 'thesaurusverwijzing_srt_tariefprijsbedrag', 'soort_tariefprijsbedrag', 'thesaurusverwijzing_soort_bron', 'soort_bron', 'unieke_id_van_bron', 'aanvullende_contract_informatie', 'tarief_prijs_bedrag', 'startdatum_van_tariefprijsbedrag', 'einddatum_van_tariefprijsbedrag', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsPrijsTariefTabelPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'ThesaurusverwijzingSoortCodering' => 2, 'SoortCodering' => 3, 'UniekeIdVanCodering' => 4, 'ThesaurusverwijzingSrtTariefprijsbedrag' => 5, 'SoortTariefprijsbedrag' => 6, 'ThesaurusverwijzingSoortBron' => 7, 'SoortBron' => 8, 'UniekeIdVanBron' => 9, 'AanvullendeContractInformatie' => 10, 'TariefPrijsBedrag' => 11, 'StartdatumVanTariefprijsbedrag' => 12, 'EinddatumVanTariefprijsbedrag' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'thesaurusverwijzingSoortCodering' => 2, 'soortCodering' => 3, 'uniekeIdVanCodering' => 4, 'thesaurusverwijzingSrtTariefprijsbedrag' => 5, 'soortTariefprijsbedrag' => 6, 'thesaurusverwijzingSoortBron' => 7, 'soortBron' => 8, 'uniekeIdVanBron' => 9, 'aanvullendeContractInformatie' => 10, 'tariefPrijsBedrag' => 11, 'startdatumVanTariefprijsbedrag' => 12, 'einddatumVanTariefprijsbedrag' => 13, ),
        BasePeer::TYPE_COLNAME => array (GsPrijsTariefTabelPeer::BESTANDNUMMER => 0, GsPrijsTariefTabelPeer::MUTATIEKODE => 1, GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_CODERING => 2, GsPrijsTariefTabelPeer::SOORT_CODERING => 3, GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_CODERING => 4, GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SRT_TARIEFPRIJSBEDRAG => 5, GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG => 6, GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_BRON => 7, GsPrijsTariefTabelPeer::SOORT_BRON => 8, GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_BRON => 9, GsPrijsTariefTabelPeer::AANVULLENDE_CONTRACT_INFORMATIE => 10, GsPrijsTariefTabelPeer::TARIEF_PRIJS_BEDRAG => 11, GsPrijsTariefTabelPeer::STARTDATUM_VAN_TARIEFPRIJSBEDRAG => 12, GsPrijsTariefTabelPeer::EINDDATUM_VAN_TARIEFPRIJSBEDRAG => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'THESAURUSVERWIJZING_SOORT_CODERING' => 2, 'SOORT_CODERING' => 3, 'UNIEKE_ID_VAN_CODERING' => 4, 'THESAURUSVERWIJZING_SRT_TARIEFPRIJSBEDRAG' => 5, 'SOORT_TARIEFPRIJSBEDRAG' => 6, 'THESAURUSVERWIJZING_SOORT_BRON' => 7, 'SOORT_BRON' => 8, 'UNIEKE_ID_VAN_BRON' => 9, 'AANVULLENDE_CONTRACT_INFORMATIE' => 10, 'TARIEF_PRIJS_BEDRAG' => 11, 'STARTDATUM_VAN_TARIEFPRIJSBEDRAG' => 12, 'EINDDATUM_VAN_TARIEFPRIJSBEDRAG' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'thesaurusverwijzing_soort_codering' => 2, 'soort_codering' => 3, 'unieke_id_van_codering' => 4, 'thesaurusverwijzing_srt_tariefprijsbedrag' => 5, 'soort_tariefprijsbedrag' => 6, 'thesaurusverwijzing_soort_bron' => 7, 'soort_bron' => 8, 'unieke_id_van_bron' => 9, 'aanvullende_contract_informatie' => 10, 'tarief_prijs_bedrag' => 11, 'startdatum_van_tariefprijsbedrag' => 12, 'einddatum_van_tariefprijsbedrag' => 13, ),
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
        $toNames = GsPrijsTariefTabelPeer::getFieldNames($toType);
        $key = isset(GsPrijsTariefTabelPeer::$fieldKeys[$fromType][$name]) ? GsPrijsTariefTabelPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsPrijsTariefTabelPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsPrijsTariefTabelPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsPrijsTariefTabelPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsPrijsTariefTabelPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsPrijsTariefTabelPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsPrijsTariefTabelPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsPrijsTariefTabelPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_CODERING);
            $criteria->addSelectColumn(GsPrijsTariefTabelPeer::SOORT_CODERING);
            $criteria->addSelectColumn(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_CODERING);
            $criteria->addSelectColumn(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SRT_TARIEFPRIJSBEDRAG);
            $criteria->addSelectColumn(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG);
            $criteria->addSelectColumn(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_BRON);
            $criteria->addSelectColumn(GsPrijsTariefTabelPeer::SOORT_BRON);
            $criteria->addSelectColumn(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_BRON);
            $criteria->addSelectColumn(GsPrijsTariefTabelPeer::AANVULLENDE_CONTRACT_INFORMATIE);
            $criteria->addSelectColumn(GsPrijsTariefTabelPeer::TARIEF_PRIJS_BEDRAG);
            $criteria->addSelectColumn(GsPrijsTariefTabelPeer::STARTDATUM_VAN_TARIEFPRIJSBEDRAG);
            $criteria->addSelectColumn(GsPrijsTariefTabelPeer::EINDDATUM_VAN_TARIEFPRIJSBEDRAG);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.thesaurusverwijzing_soort_codering');
            $criteria->addSelectColumn($alias . '.soort_codering');
            $criteria->addSelectColumn($alias . '.unieke_id_van_codering');
            $criteria->addSelectColumn($alias . '.thesaurusverwijzing_srt_tariefprijsbedrag');
            $criteria->addSelectColumn($alias . '.soort_tariefprijsbedrag');
            $criteria->addSelectColumn($alias . '.thesaurusverwijzing_soort_bron');
            $criteria->addSelectColumn($alias . '.soort_bron');
            $criteria->addSelectColumn($alias . '.unieke_id_van_bron');
            $criteria->addSelectColumn($alias . '.aanvullende_contract_informatie');
            $criteria->addSelectColumn($alias . '.tarief_prijs_bedrag');
            $criteria->addSelectColumn($alias . '.startdatum_van_tariefprijsbedrag');
            $criteria->addSelectColumn($alias . '.einddatum_van_tariefprijsbedrag');
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
        $criteria->setPrimaryTableName(GsPrijsTariefTabelPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrijsTariefTabelPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsPrijsTariefTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsPrijsTariefTabel
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsPrijsTariefTabelPeer::doSelect($critcopy, $con);
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
        return GsPrijsTariefTabelPeer::populateObjects(GsPrijsTariefTabelPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsPrijsTariefTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsPrijsTariefTabelPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME);

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
     * @param GsPrijsTariefTabel $obj A GsPrijsTariefTabel object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getSoortCodering(), (string) $obj->getUniekeIdVanCodering(), (string) $obj->getSoortTariefprijsbedrag(), (string) $obj->getSoortBron(), (string) $obj->getUniekeIdVanBron(), (string) $obj->getAanvullendeContractInformatie()));
            } // if key === null
            GsPrijsTariefTabelPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsPrijsTariefTabel object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsPrijsTariefTabel) {
                $key = serialize(array((string) $value->getSoortCodering(), (string) $value->getUniekeIdVanCodering(), (string) $value->getSoortTariefprijsbedrag(), (string) $value->getSoortBron(), (string) $value->getUniekeIdVanBron(), (string) $value->getAanvullendeContractInformatie()));
            } elseif (is_array($value) && count($value) === 6) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4], (string) $value[5]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsPrijsTariefTabel object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsPrijsTariefTabelPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsPrijsTariefTabel Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsPrijsTariefTabelPeer::$instances[$key])) {
                return GsPrijsTariefTabelPeer::$instances[$key];
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
        foreach (GsPrijsTariefTabelPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsPrijsTariefTabelPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_prijs_tarief_tabel
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
        if ($row[$startcol + 3] === null && $row[$startcol + 4] === null && $row[$startcol + 6] === null && $row[$startcol + 8] === null && $row[$startcol + 9] === null && $row[$startcol + 10] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 3], (string) $row[$startcol + 4], (string) $row[$startcol + 6], (string) $row[$startcol + 8], (string) $row[$startcol + 9], (string) $row[$startcol + 10]));
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

        return array((int) $row[$startcol + 3], (string) $row[$startcol + 4], (int) $row[$startcol + 6], (int) $row[$startcol + 8], (string) $row[$startcol + 9], (string) $row[$startcol + 10]);
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
        $cls = GsPrijsTariefTabelPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsPrijsTariefTabelPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsPrijsTariefTabelPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsPrijsTariefTabelPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsPrijsTariefTabel object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsPrijsTariefTabelPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsPrijsTariefTabelPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsPrijsTariefTabelPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsPrijsTariefTabelPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsPrijsTariefTabelPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related SoortCoderingOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSoortCoderingOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrijsTariefTabelPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrijsTariefTabelPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrijsTariefTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_CODERING, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrijsTariefTabelPeer::SOORT_CODERING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Returns the number of rows matching criteria, joining the related SoortTariefprijsbedragOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSoortTariefprijsbedragOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrijsTariefTabelPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrijsTariefTabelPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrijsTariefTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SRT_TARIEFPRIJSBEDRAG, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Returns the number of rows matching criteria, joining the related SoortBronOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSoortBronOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrijsTariefTabelPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrijsTariefTabelPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrijsTariefTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_BRON, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrijsTariefTabelPeer::SOORT_BRON, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Selects a collection of GsPrijsTariefTabel objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrijsTariefTabel objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSoortCoderingOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME);
        }

        GsPrijsTariefTabelPeer::addSelectColumns($criteria);
        $startcol = GsPrijsTariefTabelPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_CODERING, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrijsTariefTabelPeer::SOORT_CODERING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrijsTariefTabelPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrijsTariefTabelPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsPrijsTariefTabelPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrijsTariefTabelPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsPrijsTariefTabel) to $obj2 (GsThesauriTotaal)
                $obj2->addGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPrijsTariefTabel objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrijsTariefTabel objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSoortTariefprijsbedragOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME);
        }

        GsPrijsTariefTabelPeer::addSelectColumns($criteria);
        $startcol = GsPrijsTariefTabelPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SRT_TARIEFPRIJSBEDRAG, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrijsTariefTabelPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrijsTariefTabelPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsPrijsTariefTabelPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrijsTariefTabelPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsPrijsTariefTabel) to $obj2 (GsThesauriTotaal)
                $obj2->addGsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPrijsTariefTabel objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrijsTariefTabel objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSoortBronOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME);
        }

        GsPrijsTariefTabelPeer::addSelectColumns($criteria);
        $startcol = GsPrijsTariefTabelPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_BRON, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrijsTariefTabelPeer::SOORT_BRON, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrijsTariefTabelPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrijsTariefTabelPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsPrijsTariefTabelPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrijsTariefTabelPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsPrijsTariefTabel) to $obj2 (GsThesauriTotaal)
                $obj2->addGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron($obj1);

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
        $criteria->setPrimaryTableName(GsPrijsTariefTabelPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrijsTariefTabelPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrijsTariefTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_CODERING, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrijsTariefTabelPeer::SOORT_CODERING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SRT_TARIEFPRIJSBEDRAG, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_BRON, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrijsTariefTabelPeer::SOORT_BRON, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Selects a collection of GsPrijsTariefTabel objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrijsTariefTabel objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME);
        }

        GsPrijsTariefTabelPeer::addSelectColumns($criteria);
        $startcol2 = GsPrijsTariefTabelPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_CODERING, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrijsTariefTabelPeer::SOORT_CODERING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SRT_TARIEFPRIJSBEDRAG, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_BRON, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsPrijsTariefTabelPeer::SOORT_BRON, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrijsTariefTabelPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrijsTariefTabelPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsPrijsTariefTabelPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrijsTariefTabelPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined GsThesauriTotaal rows

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (GsPrijsTariefTabel) to the collection in $obj2 (GsThesauriTotaal)
                $obj2->addGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key3 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = GsThesauriTotaalPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsThesauriTotaalPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (GsPrijsTariefTabel) to the collection in $obj3 (GsThesauriTotaal)
                $obj3->addGsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag($obj1);
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

                // Add the $obj1 (GsPrijsTariefTabel) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related SoortCoderingOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptSoortCoderingOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrijsTariefTabelPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrijsTariefTabelPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrijsTariefTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

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
     * Returns the number of rows matching criteria, joining the related SoortTariefprijsbedragOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptSoortTariefprijsbedragOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrijsTariefTabelPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrijsTariefTabelPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrijsTariefTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

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
     * Returns the number of rows matching criteria, joining the related SoortBronOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptSoortBronOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsPrijsTariefTabelPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsPrijsTariefTabelPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsPrijsTariefTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

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
     * Selects a collection of GsPrijsTariefTabel objects pre-filled with all related objects except SoortCoderingOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrijsTariefTabel objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptSoortCoderingOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME);
        }

        GsPrijsTariefTabelPeer::addSelectColumns($criteria);
        $startcol2 = GsPrijsTariefTabelPeer::NUM_HYDRATE_COLUMNS;


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrijsTariefTabelPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrijsTariefTabelPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsPrijsTariefTabelPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrijsTariefTabelPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPrijsTariefTabel objects pre-filled with all related objects except SoortTariefprijsbedragOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrijsTariefTabel objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptSoortTariefprijsbedragOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME);
        }

        GsPrijsTariefTabelPeer::addSelectColumns($criteria);
        $startcol2 = GsPrijsTariefTabelPeer::NUM_HYDRATE_COLUMNS;


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrijsTariefTabelPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrijsTariefTabelPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsPrijsTariefTabelPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrijsTariefTabelPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsPrijsTariefTabel objects pre-filled with all related objects except SoortBronOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsPrijsTariefTabel objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptSoortBronOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME);
        }

        GsPrijsTariefTabelPeer::addSelectColumns($criteria);
        $startcol2 = GsPrijsTariefTabelPeer::NUM_HYDRATE_COLUMNS;


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsPrijsTariefTabelPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsPrijsTariefTabelPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsPrijsTariefTabelPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsPrijsTariefTabelPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

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
        return Propel::getDatabaseMap(GsPrijsTariefTabelPeer::DATABASE_NAME)->getTable(GsPrijsTariefTabelPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsPrijsTariefTabelPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsPrijsTariefTabelPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsPrijsTariefTabelTableMap());
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
        return GsPrijsTariefTabelPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsPrijsTariefTabel or Criteria object.
     *
     * @param      mixed $values Criteria or GsPrijsTariefTabel object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsPrijsTariefTabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsPrijsTariefTabel object
        }


        // Set the correct dbName
        $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsPrijsTariefTabel or Criteria object.
     *
     * @param      mixed $values Criteria or GsPrijsTariefTabel object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsPrijsTariefTabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsPrijsTariefTabelPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsPrijsTariefTabelPeer::SOORT_CODERING);
            $value = $criteria->remove(GsPrijsTariefTabelPeer::SOORT_CODERING);
            if ($value) {
                $selectCriteria->add(GsPrijsTariefTabelPeer::SOORT_CODERING, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsPrijsTariefTabelPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_CODERING);
            $value = $criteria->remove(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_CODERING);
            if ($value) {
                $selectCriteria->add(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_CODERING, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsPrijsTariefTabelPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG);
            $value = $criteria->remove(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG);
            if ($value) {
                $selectCriteria->add(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsPrijsTariefTabelPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsPrijsTariefTabelPeer::SOORT_BRON);
            $value = $criteria->remove(GsPrijsTariefTabelPeer::SOORT_BRON);
            if ($value) {
                $selectCriteria->add(GsPrijsTariefTabelPeer::SOORT_BRON, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsPrijsTariefTabelPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_BRON);
            $value = $criteria->remove(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_BRON);
            if ($value) {
                $selectCriteria->add(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_BRON, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsPrijsTariefTabelPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsPrijsTariefTabelPeer::AANVULLENDE_CONTRACT_INFORMATIE);
            $value = $criteria->remove(GsPrijsTariefTabelPeer::AANVULLENDE_CONTRACT_INFORMATIE);
            if ($value) {
                $selectCriteria->add(GsPrijsTariefTabelPeer::AANVULLENDE_CONTRACT_INFORMATIE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsPrijsTariefTabelPeer::TABLE_NAME);
            }

        } else { // $values is GsPrijsTariefTabel object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_prijs_tarief_tabel table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsPrijsTariefTabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsPrijsTariefTabelPeer::TABLE_NAME, $con, GsPrijsTariefTabelPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsPrijsTariefTabelPeer::clearInstancePool();
            GsPrijsTariefTabelPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsPrijsTariefTabel or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsPrijsTariefTabel object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsPrijsTariefTabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsPrijsTariefTabelPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsPrijsTariefTabel) { // it's a model object
            // invalidate the cache for this single object
            GsPrijsTariefTabelPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsPrijsTariefTabelPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsPrijsTariefTabelPeer::SOORT_CODERING, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_CODERING, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(GsPrijsTariefTabelPeer::SOORT_BRON, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_BRON, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(GsPrijsTariefTabelPeer::AANVULLENDE_CONTRACT_INFORMATIE, $value[5]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsPrijsTariefTabelPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsPrijsTariefTabelPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsPrijsTariefTabelPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsPrijsTariefTabel object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsPrijsTariefTabel $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsPrijsTariefTabelPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsPrijsTariefTabelPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsPrijsTariefTabelPeer::DATABASE_NAME, GsPrijsTariefTabelPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $soort_codering
     * @param   string $unieke_id_van_codering
     * @param   int $soort_tariefprijsbedrag
     * @param   int $soort_bron
     * @param   string $unieke_id_van_bron
     * @param   string $aanvullende_contract_informatie
     * @param      PropelPDO $con
     * @return GsPrijsTariefTabel
     */
    public static function retrieveByPK($soort_codering, $unieke_id_van_codering, $soort_tariefprijsbedrag, $soort_bron, $unieke_id_van_bron, $aanvullende_contract_informatie, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $soort_codering, (string) $unieke_id_van_codering, (string) $soort_tariefprijsbedrag, (string) $soort_bron, (string) $unieke_id_van_bron, (string) $aanvullende_contract_informatie));
         if (null !== ($obj = GsPrijsTariefTabelPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsPrijsTariefTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsPrijsTariefTabelPeer::DATABASE_NAME);
        $criteria->add(GsPrijsTariefTabelPeer::SOORT_CODERING, $soort_codering);
        $criteria->add(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_CODERING, $unieke_id_van_codering);
        $criteria->add(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG, $soort_tariefprijsbedrag);
        $criteria->add(GsPrijsTariefTabelPeer::SOORT_BRON, $soort_bron);
        $criteria->add(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_BRON, $unieke_id_van_bron);
        $criteria->add(GsPrijsTariefTabelPeer::AANVULLENDE_CONTRACT_INFORMATIE, $aanvullende_contract_informatie);
        $v = GsPrijsTariefTabelPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsPrijsTariefTabelPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsPrijsTariefTabelPeer::buildTableMap();

