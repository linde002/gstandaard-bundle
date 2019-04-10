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
use PharmaIntelligence\GstandaardBundle\Model\GsLeveranciersassortimenten;
use PharmaIntelligence\GstandaardBundle\Model\GsLeveranciersassortimentenPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsLeveranciersassortimentenTableMap;

abstract class BaseGsLeveranciersassortimentenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_leveranciersassortimenten';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLeveranciersassortimenten';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsLeveranciersassortimentenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 21;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 21;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_leveranciersassortimenten.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_leveranciersassortimenten.mutatiekode';

    /** the column name for the assortimentsnummer field */
    const ASSORTIMENTSNUMMER = 'gs_leveranciersassortimenten.assortimentsnummer';

    /** the column name for the zinummer field */
    const ZINUMMER = 'gs_leveranciersassortimenten.zinummer';

    /** the column name for the intern_artikelnummer_assorthouder field */
    const INTERN_ARTIKELNUMMER_ASSORTHOUDER = 'gs_leveranciersassortimenten.intern_artikelnummer_assorthouder';

    /** the column name for the faktor_van_het_artikelnummer field */
    const FAKTOR_VAN_HET_ARTIKELNUMMER = 'gs_leveranciersassortimenten.faktor_van_het_artikelnummer';

    /** the column name for the omschrijving field */
    const OMSCHRIJVING = 'gs_leveranciersassortimenten.omschrijving';

    /** the column name for the assortimentshouder field */
    const ASSORTIMENTSHOUDER = 'gs_leveranciersassortimenten.assortimentshouder';

    /** the column name for the datum_van_ingang field */
    const DATUM_VAN_INGANG = 'gs_leveranciersassortimenten.datum_van_ingang';

    /** the column name for the retourtermijn field */
    const RETOURTERMIJN = 'gs_leveranciersassortimenten.retourtermijn';

    /** the column name for the retouraanduiding field */
    const RETOURAANDUIDING = 'gs_leveranciersassortimenten.retouraanduiding';

    /** the column name for the retourpercentage field */
    const RETOURPERCENTAGE = 'gs_leveranciersassortimenten.retourpercentage';

    /** the column name for the assortimentsprijs field */
    const ASSORTIMENTSPRIJS = 'gs_leveranciersassortimenten.assortimentsprijs';

    /** the column name for the opgegeven_verkoopprijs field */
    const OPGEGEVEN_VERKOOPPRIJS = 'gs_leveranciersassortimenten.opgegeven_verkoopprijs';

    /** the column name for the btwkode_van_assortimentshouder field */
    const BTWKODE_VAN_ASSORTIMENTSHOUDER = 'gs_leveranciersassortimenten.btwkode_van_assortimentshouder';

    /** the column name for the hoeveelheid field */
    const HOEVEELHEID = 'gs_leveranciersassortimenten.hoeveelheid';

    /** the column name for the eenheid field */
    const EENHEID = 'gs_leveranciersassortimenten.eenheid';

    /** the column name for the ean_barcode field */
    const EAN_BARCODE = 'gs_leveranciersassortimenten.ean_barcode';

    /** the column name for the hibc_barcode field */
    const HIBC_BARCODE = 'gs_leveranciersassortimenten.hibc_barcode';

    /** the column name for the minikaart_kode field */
    const MINIKAART_KODE = 'gs_leveranciersassortimenten.minikaart_kode';

    /** the column name for the bestelmogelijkheid field */
    const BESTELMOGELIJKHEID = 'gs_leveranciersassortimenten.bestelmogelijkheid';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsLeveranciersassortimenten objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsLeveranciersassortimenten[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsLeveranciersassortimentenPeer::$fieldNames[GsLeveranciersassortimentenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Assortimentsnummer', 'Zinummer', 'InternArtikelnummerAssorthouder', 'FaktorVanHetArtikelnummer', 'Omschrijving', 'Assortimentshouder', 'DatumVanIngang', 'Retourtermijn', 'Retouraanduiding', 'Retourpercentage', 'Assortimentsprijs', 'OpgegevenVerkoopprijs', 'BtwkodeVanAssortimentshouder', 'Hoeveelheid', 'Eenheid', 'EanBarcode', 'HibcBarcode', 'MinikaartKode', 'Bestelmogelijkheid', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'assortimentsnummer', 'zinummer', 'internArtikelnummerAssorthouder', 'faktorVanHetArtikelnummer', 'omschrijving', 'assortimentshouder', 'datumVanIngang', 'retourtermijn', 'retouraanduiding', 'retourpercentage', 'assortimentsprijs', 'opgegevenVerkoopprijs', 'btwkodeVanAssortimentshouder', 'hoeveelheid', 'eenheid', 'eanBarcode', 'hibcBarcode', 'minikaartKode', 'bestelmogelijkheid', ),
        BasePeer::TYPE_COLNAME => array (GsLeveranciersassortimentenPeer::BESTANDNUMMER, GsLeveranciersassortimentenPeer::MUTATIEKODE, GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER, GsLeveranciersassortimentenPeer::ZINUMMER, GsLeveranciersassortimentenPeer::INTERN_ARTIKELNUMMER_ASSORTHOUDER, GsLeveranciersassortimentenPeer::FAKTOR_VAN_HET_ARTIKELNUMMER, GsLeveranciersassortimentenPeer::OMSCHRIJVING, GsLeveranciersassortimentenPeer::ASSORTIMENTSHOUDER, GsLeveranciersassortimentenPeer::DATUM_VAN_INGANG, GsLeveranciersassortimentenPeer::RETOURTERMIJN, GsLeveranciersassortimentenPeer::RETOURAANDUIDING, GsLeveranciersassortimentenPeer::RETOURPERCENTAGE, GsLeveranciersassortimentenPeer::ASSORTIMENTSPRIJS, GsLeveranciersassortimentenPeer::OPGEGEVEN_VERKOOPPRIJS, GsLeveranciersassortimentenPeer::BTWKODE_VAN_ASSORTIMENTSHOUDER, GsLeveranciersassortimentenPeer::HOEVEELHEID, GsLeveranciersassortimentenPeer::EENHEID, GsLeveranciersassortimentenPeer::EAN_BARCODE, GsLeveranciersassortimentenPeer::HIBC_BARCODE, GsLeveranciersassortimentenPeer::MINIKAART_KODE, GsLeveranciersassortimentenPeer::BESTELMOGELIJKHEID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'ASSORTIMENTSNUMMER', 'ZINUMMER', 'INTERN_ARTIKELNUMMER_ASSORTHOUDER', 'FAKTOR_VAN_HET_ARTIKELNUMMER', 'OMSCHRIJVING', 'ASSORTIMENTSHOUDER', 'DATUM_VAN_INGANG', 'RETOURTERMIJN', 'RETOURAANDUIDING', 'RETOURPERCENTAGE', 'ASSORTIMENTSPRIJS', 'OPGEGEVEN_VERKOOPPRIJS', 'BTWKODE_VAN_ASSORTIMENTSHOUDER', 'HOEVEELHEID', 'EENHEID', 'EAN_BARCODE', 'HIBC_BARCODE', 'MINIKAART_KODE', 'BESTELMOGELIJKHEID', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'assortimentsnummer', 'zinummer', 'intern_artikelnummer_assorthouder', 'faktor_van_het_artikelnummer', 'omschrijving', 'assortimentshouder', 'datum_van_ingang', 'retourtermijn', 'retouraanduiding', 'retourpercentage', 'assortimentsprijs', 'opgegeven_verkoopprijs', 'btwkode_van_assortimentshouder', 'hoeveelheid', 'eenheid', 'ean_barcode', 'hibc_barcode', 'minikaart_kode', 'bestelmogelijkheid', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsLeveranciersassortimentenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Assortimentsnummer' => 2, 'Zinummer' => 3, 'InternArtikelnummerAssorthouder' => 4, 'FaktorVanHetArtikelnummer' => 5, 'Omschrijving' => 6, 'Assortimentshouder' => 7, 'DatumVanIngang' => 8, 'Retourtermijn' => 9, 'Retouraanduiding' => 10, 'Retourpercentage' => 11, 'Assortimentsprijs' => 12, 'OpgegevenVerkoopprijs' => 13, 'BtwkodeVanAssortimentshouder' => 14, 'Hoeveelheid' => 15, 'Eenheid' => 16, 'EanBarcode' => 17, 'HibcBarcode' => 18, 'MinikaartKode' => 19, 'Bestelmogelijkheid' => 20, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'assortimentsnummer' => 2, 'zinummer' => 3, 'internArtikelnummerAssorthouder' => 4, 'faktorVanHetArtikelnummer' => 5, 'omschrijving' => 6, 'assortimentshouder' => 7, 'datumVanIngang' => 8, 'retourtermijn' => 9, 'retouraanduiding' => 10, 'retourpercentage' => 11, 'assortimentsprijs' => 12, 'opgegevenVerkoopprijs' => 13, 'btwkodeVanAssortimentshouder' => 14, 'hoeveelheid' => 15, 'eenheid' => 16, 'eanBarcode' => 17, 'hibcBarcode' => 18, 'minikaartKode' => 19, 'bestelmogelijkheid' => 20, ),
        BasePeer::TYPE_COLNAME => array (GsLeveranciersassortimentenPeer::BESTANDNUMMER => 0, GsLeveranciersassortimentenPeer::MUTATIEKODE => 1, GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER => 2, GsLeveranciersassortimentenPeer::ZINUMMER => 3, GsLeveranciersassortimentenPeer::INTERN_ARTIKELNUMMER_ASSORTHOUDER => 4, GsLeveranciersassortimentenPeer::FAKTOR_VAN_HET_ARTIKELNUMMER => 5, GsLeveranciersassortimentenPeer::OMSCHRIJVING => 6, GsLeveranciersassortimentenPeer::ASSORTIMENTSHOUDER => 7, GsLeveranciersassortimentenPeer::DATUM_VAN_INGANG => 8, GsLeveranciersassortimentenPeer::RETOURTERMIJN => 9, GsLeveranciersassortimentenPeer::RETOURAANDUIDING => 10, GsLeveranciersassortimentenPeer::RETOURPERCENTAGE => 11, GsLeveranciersassortimentenPeer::ASSORTIMENTSPRIJS => 12, GsLeveranciersassortimentenPeer::OPGEGEVEN_VERKOOPPRIJS => 13, GsLeveranciersassortimentenPeer::BTWKODE_VAN_ASSORTIMENTSHOUDER => 14, GsLeveranciersassortimentenPeer::HOEVEELHEID => 15, GsLeveranciersassortimentenPeer::EENHEID => 16, GsLeveranciersassortimentenPeer::EAN_BARCODE => 17, GsLeveranciersassortimentenPeer::HIBC_BARCODE => 18, GsLeveranciersassortimentenPeer::MINIKAART_KODE => 19, GsLeveranciersassortimentenPeer::BESTELMOGELIJKHEID => 20, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'ASSORTIMENTSNUMMER' => 2, 'ZINUMMER' => 3, 'INTERN_ARTIKELNUMMER_ASSORTHOUDER' => 4, 'FAKTOR_VAN_HET_ARTIKELNUMMER' => 5, 'OMSCHRIJVING' => 6, 'ASSORTIMENTSHOUDER' => 7, 'DATUM_VAN_INGANG' => 8, 'RETOURTERMIJN' => 9, 'RETOURAANDUIDING' => 10, 'RETOURPERCENTAGE' => 11, 'ASSORTIMENTSPRIJS' => 12, 'OPGEGEVEN_VERKOOPPRIJS' => 13, 'BTWKODE_VAN_ASSORTIMENTSHOUDER' => 14, 'HOEVEELHEID' => 15, 'EENHEID' => 16, 'EAN_BARCODE' => 17, 'HIBC_BARCODE' => 18, 'MINIKAART_KODE' => 19, 'BESTELMOGELIJKHEID' => 20, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'assortimentsnummer' => 2, 'zinummer' => 3, 'intern_artikelnummer_assorthouder' => 4, 'faktor_van_het_artikelnummer' => 5, 'omschrijving' => 6, 'assortimentshouder' => 7, 'datum_van_ingang' => 8, 'retourtermijn' => 9, 'retouraanduiding' => 10, 'retourpercentage' => 11, 'assortimentsprijs' => 12, 'opgegeven_verkoopprijs' => 13, 'btwkode_van_assortimentshouder' => 14, 'hoeveelheid' => 15, 'eenheid' => 16, 'ean_barcode' => 17, 'hibc_barcode' => 18, 'minikaart_kode' => 19, 'bestelmogelijkheid' => 20, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
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
        $toNames = GsLeveranciersassortimentenPeer::getFieldNames($toType);
        $key = isset(GsLeveranciersassortimentenPeer::$fieldKeys[$fromType][$name]) ? GsLeveranciersassortimentenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsLeveranciersassortimentenPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsLeveranciersassortimentenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsLeveranciersassortimentenPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsLeveranciersassortimentenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsLeveranciersassortimentenPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::ZINUMMER);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::INTERN_ARTIKELNUMMER_ASSORTHOUDER);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::FAKTOR_VAN_HET_ARTIKELNUMMER);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::OMSCHRIJVING);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::ASSORTIMENTSHOUDER);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::DATUM_VAN_INGANG);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::RETOURTERMIJN);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::RETOURAANDUIDING);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::RETOURPERCENTAGE);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::ASSORTIMENTSPRIJS);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::OPGEGEVEN_VERKOOPPRIJS);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::BTWKODE_VAN_ASSORTIMENTSHOUDER);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::HOEVEELHEID);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::EENHEID);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::EAN_BARCODE);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::HIBC_BARCODE);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::MINIKAART_KODE);
            $criteria->addSelectColumn(GsLeveranciersassortimentenPeer::BESTELMOGELIJKHEID);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.assortimentsnummer');
            $criteria->addSelectColumn($alias . '.zinummer');
            $criteria->addSelectColumn($alias . '.intern_artikelnummer_assorthouder');
            $criteria->addSelectColumn($alias . '.faktor_van_het_artikelnummer');
            $criteria->addSelectColumn($alias . '.omschrijving');
            $criteria->addSelectColumn($alias . '.assortimentshouder');
            $criteria->addSelectColumn($alias . '.datum_van_ingang');
            $criteria->addSelectColumn($alias . '.retourtermijn');
            $criteria->addSelectColumn($alias . '.retouraanduiding');
            $criteria->addSelectColumn($alias . '.retourpercentage');
            $criteria->addSelectColumn($alias . '.assortimentsprijs');
            $criteria->addSelectColumn($alias . '.opgegeven_verkoopprijs');
            $criteria->addSelectColumn($alias . '.btwkode_van_assortimentshouder');
            $criteria->addSelectColumn($alias . '.hoeveelheid');
            $criteria->addSelectColumn($alias . '.eenheid');
            $criteria->addSelectColumn($alias . '.ean_barcode');
            $criteria->addSelectColumn($alias . '.hibc_barcode');
            $criteria->addSelectColumn($alias . '.minikaart_kode');
            $criteria->addSelectColumn($alias . '.bestelmogelijkheid');
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
        $criteria->setPrimaryTableName(GsLeveranciersassortimentenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLeveranciersassortimentenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsLeveranciersassortimentenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsLeveranciersassortimentenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsLeveranciersassortimenten
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsLeveranciersassortimentenPeer::doSelect($critcopy, $con);
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
        return GsLeveranciersassortimentenPeer::populateObjects(GsLeveranciersassortimentenPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsLeveranciersassortimentenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsLeveranciersassortimentenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsLeveranciersassortimentenPeer::DATABASE_NAME);

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
     * @param GsLeveranciersassortimenten $obj A GsLeveranciersassortimenten object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAssortimentsnummer();
            } // if key === null
            GsLeveranciersassortimentenPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsLeveranciersassortimenten object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsLeveranciersassortimenten) {
                $key = (string) $value->getAssortimentsnummer();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsLeveranciersassortimenten object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsLeveranciersassortimentenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsLeveranciersassortimenten Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsLeveranciersassortimentenPeer::$instances[$key])) {
                return GsLeveranciersassortimentenPeer::$instances[$key];
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
        foreach (GsLeveranciersassortimentenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsLeveranciersassortimentenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_leveranciersassortimenten
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
        $cls = GsLeveranciersassortimentenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsLeveranciersassortimentenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsLeveranciersassortimentenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsLeveranciersassortimentenPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsLeveranciersassortimenten object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsLeveranciersassortimentenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsLeveranciersassortimentenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsLeveranciersassortimentenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsLeveranciersassortimentenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsLeveranciersassortimentenPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(GsLeveranciersassortimentenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLeveranciersassortimentenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsLeveranciersassortimentenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsLeveranciersassortimentenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsLeveranciersassortimentenPeer::ZINUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Selects a collection of GsLeveranciersassortimenten objects pre-filled with their GsArtikelen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsLeveranciersassortimenten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsArtikelen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsLeveranciersassortimentenPeer::DATABASE_NAME);
        }

        GsLeveranciersassortimentenPeer::addSelectColumns($criteria);
        $startcol = GsLeveranciersassortimentenPeer::NUM_HYDRATE_COLUMNS;
        GsArtikelenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsLeveranciersassortimentenPeer::ZINUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsLeveranciersassortimentenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsLeveranciersassortimentenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsLeveranciersassortimentenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsLeveranciersassortimentenPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsLeveranciersassortimenten) to $obj2 (GsArtikelen)
                $obj2->addGsLeveranciersassortimenten($obj1);

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
        $criteria->setPrimaryTableName(GsLeveranciersassortimentenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLeveranciersassortimentenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsLeveranciersassortimentenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsLeveranciersassortimentenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsLeveranciersassortimentenPeer::ZINUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Selects a collection of GsLeveranciersassortimenten objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsLeveranciersassortimenten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsLeveranciersassortimentenPeer::DATABASE_NAME);
        }

        GsLeveranciersassortimentenPeer::addSelectColumns($criteria);
        $startcol2 = GsLeveranciersassortimentenPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsLeveranciersassortimentenPeer::ZINUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsLeveranciersassortimentenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsLeveranciersassortimentenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsLeveranciersassortimentenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsLeveranciersassortimentenPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsLeveranciersassortimenten) to the collection in $obj2 (GsArtikelen)
                $obj2->addGsLeveranciersassortimenten($obj1);
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
        return Propel::getDatabaseMap(GsLeveranciersassortimentenPeer::DATABASE_NAME)->getTable(GsLeveranciersassortimentenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsLeveranciersassortimentenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsLeveranciersassortimentenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsLeveranciersassortimentenTableMap());
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
        return GsLeveranciersassortimentenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsLeveranciersassortimenten or Criteria object.
     *
     * @param      mixed $values Criteria or GsLeveranciersassortimenten object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsLeveranciersassortimentenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsLeveranciersassortimenten object
        }


        // Set the correct dbName
        $criteria->setDbName(GsLeveranciersassortimentenPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsLeveranciersassortimenten or Criteria object.
     *
     * @param      mixed $values Criteria or GsLeveranciersassortimenten object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsLeveranciersassortimentenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsLeveranciersassortimentenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER);
            $value = $criteria->remove(GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER);
            if ($value) {
                $selectCriteria->add(GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsLeveranciersassortimentenPeer::TABLE_NAME);
            }

        } else { // $values is GsLeveranciersassortimenten object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsLeveranciersassortimentenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_leveranciersassortimenten table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsLeveranciersassortimentenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsLeveranciersassortimentenPeer::TABLE_NAME, $con, GsLeveranciersassortimentenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsLeveranciersassortimentenPeer::clearInstancePool();
            GsLeveranciersassortimentenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsLeveranciersassortimenten or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsLeveranciersassortimenten object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsLeveranciersassortimentenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsLeveranciersassortimentenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsLeveranciersassortimenten) { // it's a model object
            // invalidate the cache for this single object
            GsLeveranciersassortimentenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsLeveranciersassortimentenPeer::DATABASE_NAME);
            $criteria->add(GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsLeveranciersassortimentenPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsLeveranciersassortimentenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsLeveranciersassortimentenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsLeveranciersassortimenten object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsLeveranciersassortimenten $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsLeveranciersassortimentenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsLeveranciersassortimentenPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsLeveranciersassortimentenPeer::DATABASE_NAME, GsLeveranciersassortimentenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsLeveranciersassortimenten
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsLeveranciersassortimentenPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsLeveranciersassortimentenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsLeveranciersassortimentenPeer::DATABASE_NAME);
        $criteria->add(GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER, $pk);

        $v = GsLeveranciersassortimentenPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsLeveranciersassortimenten[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsLeveranciersassortimentenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsLeveranciersassortimentenPeer::DATABASE_NAME);
            $criteria->add(GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER, $pks, Criteria::IN);
            $objs = GsLeveranciersassortimentenPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsLeveranciersassortimentenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsLeveranciersassortimentenPeer::buildTableMap();

