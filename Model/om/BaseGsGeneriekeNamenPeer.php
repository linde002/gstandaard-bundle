<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeNamen;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeNamenPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsGeneriekeNamenTableMap;

abstract class BaseGsGeneriekeNamenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_generieke_namen';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeNamen';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsGeneriekeNamenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 19;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 19;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_generieke_namen.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_generieke_namen.mutatiekode';

    /** the column name for the generiekenaamkode field */
    const GENERIEKENAAMKODE = 'gs_generieke_namen.generiekenaamkode';

    /** the column name for the generieke_naam field */
    const GENERIEKE_NAAM = 'gs_generieke_namen.generieke_naam';

    /** the column name for the stamnaamcode field */
    const STAMNAAMCODE = 'gs_generieke_namen.stamnaamcode';

    /** the column name for the volledige_generieke_naam_kode field */
    const VOLLEDIGE_GENERIEKE_NAAM_KODE = 'gs_generieke_namen.volledige_generieke_naam_kode';

    /** the column name for the kode_stamnaam_toegestaan field */
    const KODE_STAMNAAM_TOEGESTAAN = 'gs_generieke_namen.kode_stamnaam_toegestaan';

    /** the column name for the kode_werkzaam_bestanddeelhulpstof field */
    const KODE_WERKZAAM_BESTANDDEELHULPSTOF = 'gs_generieke_namen.kode_werkzaam_bestanddeelhulpstof';

    /** the column name for the informatorium_stof_kode field */
    const INFORMATORIUM_STOF_KODE = 'gs_generieke_namen.informatorium_stof_kode';

    /** the column name for the cas_nummer field */
    const CAS_NUMMER = 'gs_generieke_namen.cas_nummer';

    /** the column name for the bruto_formule field */
    const BRUTO_FORMULE = 'gs_generieke_namen.bruto_formule';

    /** the column name for the molekuulgewicht field */
    const MOLEKUULGEWICHT = 'gs_generieke_namen.molekuulgewicht';

    /** the column name for the molekuulgewicht_indicator field */
    const MOLEKUULGEWICHT_INDICATOR = 'gs_generieke_namen.molekuulgewicht_indicator';

    /** the column name for the molekuulgewicht_voor_samenstelling field */
    const MOLEKUULGEWICHT_VOOR_SAMENSTELLING = 'gs_generieke_namen.molekuulgewicht_voor_samenstelling';

    /** the column name for the soortelijk_gewicht field */
    const SOORTELIJK_GEWICHT = 'gs_generieke_namen.soortelijk_gewicht';

    /** the column name for the voorkeurseenheid field */
    const VOORKEURSEENHEID = 'gs_generieke_namen.voorkeurseenheid';

    /** the column name for the kode_rijvaardigheid field */
    const KODE_RIJVAARDIGHEID = 'gs_generieke_namen.kode_rijvaardigheid';

    /** the column name for the kode_vergift field */
    const KODE_VERGIFT = 'gs_generieke_namen.kode_vergift';

    /** the column name for the kode_opiumwet field */
    const KODE_OPIUMWET = 'gs_generieke_namen.kode_opiumwet';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsGeneriekeNamen objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsGeneriekeNamen[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsGeneriekeNamenPeer::$fieldNames[GsGeneriekeNamenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Generiekenaamkode', 'GeneriekeNaam', 'Stamnaamcode', 'VolledigeGeneriekeNaamKode', 'KodeStamnaamToegestaan', 'KodeWerkzaamBestanddeelhulpstof', 'InformatoriumStofKode', 'CasNummer', 'BrutoFormule', 'Molekuulgewicht', 'MolekuulgewichtIndicator', 'MolekuulgewichtVoorSamenstelling', 'SoortelijkGewicht', 'Voorkeurseenheid', 'KodeRijvaardigheid', 'KodeVergift', 'KodeOpiumwet', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'generiekenaamkode', 'generiekeNaam', 'stamnaamcode', 'volledigeGeneriekeNaamKode', 'kodeStamnaamToegestaan', 'kodeWerkzaamBestanddeelhulpstof', 'informatoriumStofKode', 'casNummer', 'brutoFormule', 'molekuulgewicht', 'molekuulgewichtIndicator', 'molekuulgewichtVoorSamenstelling', 'soortelijkGewicht', 'voorkeurseenheid', 'kodeRijvaardigheid', 'kodeVergift', 'kodeOpiumwet', ),
        BasePeer::TYPE_COLNAME => array (GsGeneriekeNamenPeer::BESTANDNUMMER, GsGeneriekeNamenPeer::MUTATIEKODE, GsGeneriekeNamenPeer::GENERIEKENAAMKODE, GsGeneriekeNamenPeer::GENERIEKE_NAAM, GsGeneriekeNamenPeer::STAMNAAMCODE, GsGeneriekeNamenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE, GsGeneriekeNamenPeer::KODE_STAMNAAM_TOEGESTAAN, GsGeneriekeNamenPeer::KODE_WERKZAAM_BESTANDDEELHULPSTOF, GsGeneriekeNamenPeer::INFORMATORIUM_STOF_KODE, GsGeneriekeNamenPeer::CAS_NUMMER, GsGeneriekeNamenPeer::BRUTO_FORMULE, GsGeneriekeNamenPeer::MOLEKUULGEWICHT, GsGeneriekeNamenPeer::MOLEKUULGEWICHT_INDICATOR, GsGeneriekeNamenPeer::MOLEKUULGEWICHT_VOOR_SAMENSTELLING, GsGeneriekeNamenPeer::SOORTELIJK_GEWICHT, GsGeneriekeNamenPeer::VOORKEURSEENHEID, GsGeneriekeNamenPeer::KODE_RIJVAARDIGHEID, GsGeneriekeNamenPeer::KODE_VERGIFT, GsGeneriekeNamenPeer::KODE_OPIUMWET, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'GENERIEKENAAMKODE', 'GENERIEKE_NAAM', 'STAMNAAMCODE', 'VOLLEDIGE_GENERIEKE_NAAM_KODE', 'KODE_STAMNAAM_TOEGESTAAN', 'KODE_WERKZAAM_BESTANDDEELHULPSTOF', 'INFORMATORIUM_STOF_KODE', 'CAS_NUMMER', 'BRUTO_FORMULE', 'MOLEKUULGEWICHT', 'MOLEKUULGEWICHT_INDICATOR', 'MOLEKUULGEWICHT_VOOR_SAMENSTELLING', 'SOORTELIJK_GEWICHT', 'VOORKEURSEENHEID', 'KODE_RIJVAARDIGHEID', 'KODE_VERGIFT', 'KODE_OPIUMWET', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'generiekenaamkode', 'generieke_naam', 'stamnaamcode', 'volledige_generieke_naam_kode', 'kode_stamnaam_toegestaan', 'kode_werkzaam_bestanddeelhulpstof', 'informatorium_stof_kode', 'cas_nummer', 'bruto_formule', 'molekuulgewicht', 'molekuulgewicht_indicator', 'molekuulgewicht_voor_samenstelling', 'soortelijk_gewicht', 'voorkeurseenheid', 'kode_rijvaardigheid', 'kode_vergift', 'kode_opiumwet', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsGeneriekeNamenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Generiekenaamkode' => 2, 'GeneriekeNaam' => 3, 'Stamnaamcode' => 4, 'VolledigeGeneriekeNaamKode' => 5, 'KodeStamnaamToegestaan' => 6, 'KodeWerkzaamBestanddeelhulpstof' => 7, 'InformatoriumStofKode' => 8, 'CasNummer' => 9, 'BrutoFormule' => 10, 'Molekuulgewicht' => 11, 'MolekuulgewichtIndicator' => 12, 'MolekuulgewichtVoorSamenstelling' => 13, 'SoortelijkGewicht' => 14, 'Voorkeurseenheid' => 15, 'KodeRijvaardigheid' => 16, 'KodeVergift' => 17, 'KodeOpiumwet' => 18, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'generiekenaamkode' => 2, 'generiekeNaam' => 3, 'stamnaamcode' => 4, 'volledigeGeneriekeNaamKode' => 5, 'kodeStamnaamToegestaan' => 6, 'kodeWerkzaamBestanddeelhulpstof' => 7, 'informatoriumStofKode' => 8, 'casNummer' => 9, 'brutoFormule' => 10, 'molekuulgewicht' => 11, 'molekuulgewichtIndicator' => 12, 'molekuulgewichtVoorSamenstelling' => 13, 'soortelijkGewicht' => 14, 'voorkeurseenheid' => 15, 'kodeRijvaardigheid' => 16, 'kodeVergift' => 17, 'kodeOpiumwet' => 18, ),
        BasePeer::TYPE_COLNAME => array (GsGeneriekeNamenPeer::BESTANDNUMMER => 0, GsGeneriekeNamenPeer::MUTATIEKODE => 1, GsGeneriekeNamenPeer::GENERIEKENAAMKODE => 2, GsGeneriekeNamenPeer::GENERIEKE_NAAM => 3, GsGeneriekeNamenPeer::STAMNAAMCODE => 4, GsGeneriekeNamenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE => 5, GsGeneriekeNamenPeer::KODE_STAMNAAM_TOEGESTAAN => 6, GsGeneriekeNamenPeer::KODE_WERKZAAM_BESTANDDEELHULPSTOF => 7, GsGeneriekeNamenPeer::INFORMATORIUM_STOF_KODE => 8, GsGeneriekeNamenPeer::CAS_NUMMER => 9, GsGeneriekeNamenPeer::BRUTO_FORMULE => 10, GsGeneriekeNamenPeer::MOLEKUULGEWICHT => 11, GsGeneriekeNamenPeer::MOLEKUULGEWICHT_INDICATOR => 12, GsGeneriekeNamenPeer::MOLEKUULGEWICHT_VOOR_SAMENSTELLING => 13, GsGeneriekeNamenPeer::SOORTELIJK_GEWICHT => 14, GsGeneriekeNamenPeer::VOORKEURSEENHEID => 15, GsGeneriekeNamenPeer::KODE_RIJVAARDIGHEID => 16, GsGeneriekeNamenPeer::KODE_VERGIFT => 17, GsGeneriekeNamenPeer::KODE_OPIUMWET => 18, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'GENERIEKENAAMKODE' => 2, 'GENERIEKE_NAAM' => 3, 'STAMNAAMCODE' => 4, 'VOLLEDIGE_GENERIEKE_NAAM_KODE' => 5, 'KODE_STAMNAAM_TOEGESTAAN' => 6, 'KODE_WERKZAAM_BESTANDDEELHULPSTOF' => 7, 'INFORMATORIUM_STOF_KODE' => 8, 'CAS_NUMMER' => 9, 'BRUTO_FORMULE' => 10, 'MOLEKUULGEWICHT' => 11, 'MOLEKUULGEWICHT_INDICATOR' => 12, 'MOLEKUULGEWICHT_VOOR_SAMENSTELLING' => 13, 'SOORTELIJK_GEWICHT' => 14, 'VOORKEURSEENHEID' => 15, 'KODE_RIJVAARDIGHEID' => 16, 'KODE_VERGIFT' => 17, 'KODE_OPIUMWET' => 18, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'generiekenaamkode' => 2, 'generieke_naam' => 3, 'stamnaamcode' => 4, 'volledige_generieke_naam_kode' => 5, 'kode_stamnaam_toegestaan' => 6, 'kode_werkzaam_bestanddeelhulpstof' => 7, 'informatorium_stof_kode' => 8, 'cas_nummer' => 9, 'bruto_formule' => 10, 'molekuulgewicht' => 11, 'molekuulgewicht_indicator' => 12, 'molekuulgewicht_voor_samenstelling' => 13, 'soortelijk_gewicht' => 14, 'voorkeurseenheid' => 15, 'kode_rijvaardigheid' => 16, 'kode_vergift' => 17, 'kode_opiumwet' => 18, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
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
        $toNames = GsGeneriekeNamenPeer::getFieldNames($toType);
        $key = isset(GsGeneriekeNamenPeer::$fieldKeys[$fromType][$name]) ? GsGeneriekeNamenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsGeneriekeNamenPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsGeneriekeNamenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsGeneriekeNamenPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsGeneriekeNamenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsGeneriekeNamenPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::GENERIEKENAAMKODE);
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::GENERIEKE_NAAM);
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::STAMNAAMCODE);
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE);
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::KODE_STAMNAAM_TOEGESTAAN);
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::KODE_WERKZAAM_BESTANDDEELHULPSTOF);
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::INFORMATORIUM_STOF_KODE);
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::CAS_NUMMER);
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::BRUTO_FORMULE);
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::MOLEKUULGEWICHT);
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::MOLEKUULGEWICHT_INDICATOR);
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::MOLEKUULGEWICHT_VOOR_SAMENSTELLING);
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::SOORTELIJK_GEWICHT);
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::VOORKEURSEENHEID);
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::KODE_RIJVAARDIGHEID);
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::KODE_VERGIFT);
            $criteria->addSelectColumn(GsGeneriekeNamenPeer::KODE_OPIUMWET);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.generiekenaamkode');
            $criteria->addSelectColumn($alias . '.generieke_naam');
            $criteria->addSelectColumn($alias . '.stamnaamcode');
            $criteria->addSelectColumn($alias . '.volledige_generieke_naam_kode');
            $criteria->addSelectColumn($alias . '.kode_stamnaam_toegestaan');
            $criteria->addSelectColumn($alias . '.kode_werkzaam_bestanddeelhulpstof');
            $criteria->addSelectColumn($alias . '.informatorium_stof_kode');
            $criteria->addSelectColumn($alias . '.cas_nummer');
            $criteria->addSelectColumn($alias . '.bruto_formule');
            $criteria->addSelectColumn($alias . '.molekuulgewicht');
            $criteria->addSelectColumn($alias . '.molekuulgewicht_indicator');
            $criteria->addSelectColumn($alias . '.molekuulgewicht_voor_samenstelling');
            $criteria->addSelectColumn($alias . '.soortelijk_gewicht');
            $criteria->addSelectColumn($alias . '.voorkeurseenheid');
            $criteria->addSelectColumn($alias . '.kode_rijvaardigheid');
            $criteria->addSelectColumn($alias . '.kode_vergift');
            $criteria->addSelectColumn($alias . '.kode_opiumwet');
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
        $criteria->setPrimaryTableName(GsGeneriekeNamenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsGeneriekeNamenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsGeneriekeNamenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeNamenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsGeneriekeNamen
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsGeneriekeNamenPeer::doSelect($critcopy, $con);
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
        return GsGeneriekeNamenPeer::populateObjects(GsGeneriekeNamenPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsGeneriekeNamenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsGeneriekeNamenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsGeneriekeNamenPeer::DATABASE_NAME);

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
     * @param GsGeneriekeNamen $obj A GsGeneriekeNamen object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getGeneriekenaamkode();
            } // if key === null
            GsGeneriekeNamenPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsGeneriekeNamen object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsGeneriekeNamen) {
                $key = (string) $value->getGeneriekenaamkode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsGeneriekeNamen object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsGeneriekeNamenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsGeneriekeNamen Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsGeneriekeNamenPeer::$instances[$key])) {
                return GsGeneriekeNamenPeer::$instances[$key];
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
        foreach (GsGeneriekeNamenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsGeneriekeNamenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_generieke_namen
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
        $cls = GsGeneriekeNamenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsGeneriekeNamenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsGeneriekeNamenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsGeneriekeNamenPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsGeneriekeNamen object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsGeneriekeNamenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsGeneriekeNamenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsGeneriekeNamenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsGeneriekeNamenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsGeneriekeNamenPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsGeneriekeNamenPeer::DATABASE_NAME)->getTable(GsGeneriekeNamenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsGeneriekeNamenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsGeneriekeNamenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsGeneriekeNamenTableMap());
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
        return GsGeneriekeNamenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsGeneriekeNamen or Criteria object.
     *
     * @param      mixed $values Criteria or GsGeneriekeNamen object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeNamenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsGeneriekeNamen object
        }


        // Set the correct dbName
        $criteria->setDbName(GsGeneriekeNamenPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsGeneriekeNamen or Criteria object.
     *
     * @param      mixed $values Criteria or GsGeneriekeNamen object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeNamenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsGeneriekeNamenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsGeneriekeNamenPeer::GENERIEKENAAMKODE);
            $value = $criteria->remove(GsGeneriekeNamenPeer::GENERIEKENAAMKODE);
            if ($value) {
                $selectCriteria->add(GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsGeneriekeNamenPeer::TABLE_NAME);
            }

        } else { // $values is GsGeneriekeNamen object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsGeneriekeNamenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_generieke_namen table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeNamenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsGeneriekeNamenPeer::TABLE_NAME, $con, GsGeneriekeNamenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsGeneriekeNamenPeer::clearInstancePool();
            GsGeneriekeNamenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsGeneriekeNamen or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsGeneriekeNamen object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsGeneriekeNamenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsGeneriekeNamenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsGeneriekeNamen) { // it's a model object
            // invalidate the cache for this single object
            GsGeneriekeNamenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsGeneriekeNamenPeer::DATABASE_NAME);
            $criteria->add(GsGeneriekeNamenPeer::GENERIEKENAAMKODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsGeneriekeNamenPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsGeneriekeNamenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsGeneriekeNamenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsGeneriekeNamen object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsGeneriekeNamen $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsGeneriekeNamenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsGeneriekeNamenPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsGeneriekeNamenPeer::DATABASE_NAME, GsGeneriekeNamenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsGeneriekeNamen
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsGeneriekeNamenPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeNamenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsGeneriekeNamenPeer::DATABASE_NAME);
        $criteria->add(GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $pk);

        $v = GsGeneriekeNamenPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsGeneriekeNamen[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeNamenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsGeneriekeNamenPeer::DATABASE_NAME);
            $criteria->add(GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $pks, Criteria::IN);
            $objs = GsGeneriekeNamenPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsGeneriekeNamenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsGeneriekeNamenPeer::buildTableMap();

