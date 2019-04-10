<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaard;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsNawGegevensGstandaardTableMap;

abstract class BaseGsNawGegevensGstandaardPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_naw_gegevens_gstandaard';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsNawGegevensGstandaard';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsNawGegevensGstandaardTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 25;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 25;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_naw_gegevens_gstandaard.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_naw_gegevens_gstandaard.mutatiekode';

    /** the column name for the thesaurusnummer_soort_naw field */
    const THESAURUSNUMMER_SOORT_NAW = 'gs_naw_gegevens_gstandaard.thesaurusnummer_soort_naw';

    /** the column name for the naw_soort field */
    const NAW_SOORT = 'gs_naw_gegevens_gstandaard.naw_soort';

    /** the column name for the naw_nummer field */
    const NAW_NUMMER = 'gs_naw_gegevens_gstandaard.naw_nummer';

    /** the column name for the memocode_onderneming_3_posities_alfanumeriek field */
    const MEMOCODE_ONDERNEMING_3_POSITIES_ALFANUMERIEK = 'gs_naw_gegevens_gstandaard.memocode_onderneming_3_posities_alfanumeriek';

    /** the column name for the memocode_onderneming_2_posities_numeriek field */
    const MEMOCODE_ONDERNEMING_2_POSITIES_NUMERIEK = 'gs_naw_gegevens_gstandaard.memocode_onderneming_2_posities_numeriek';

    /** the column name for the naam field */
    const NAAM = 'gs_naw_gegevens_gstandaard.naam';

    /** the column name for the adres field */
    const ADRES = 'gs_naw_gegevens_gstandaard.adres';

    /** the column name for the postcode field */
    const POSTCODE = 'gs_naw_gegevens_gstandaard.postcode';

    /** the column name for the woonplaats field */
    const WOONPLAATS = 'gs_naw_gegevens_gstandaard.woonplaats';

    /** the column name for the land field */
    const LAND = 'gs_naw_gegevens_gstandaard.land';

    /** the column name for the postbusnummer field */
    const POSTBUSNUMMER = 'gs_naw_gegevens_gstandaard.postbusnummer';

    /** the column name for the postcode_postbus field */
    const POSTCODE_POSTBUS = 'gs_naw_gegevens_gstandaard.postcode_postbus';

    /** the column name for the telefoonnummer_ondernemer field */
    const TELEFOONNUMMER_ONDERNEMER = 'gs_naw_gegevens_gstandaard.telefoonnummer_ondernemer';

    /** the column name for the faxnummer field */
    const FAXNUMMER = 'gs_naw_gegevens_gstandaard.faxnummer';

    /** the column name for the zoeknaam field */
    const ZOEKNAAM = 'gs_naw_gegevens_gstandaard.zoeknaam';

    /** the column name for the land_memocode field */
    const LAND_MEMOCODE = 'gs_naw_gegevens_gstandaard.land_memocode';

    /** the column name for the lic_nummer field */
    const LIC_NUMMER = 'gs_naw_gegevens_gstandaard.lic_nummer';

    /** the column name for the gln_code field */
    const GLN_CODE = 'gs_naw_gegevens_gstandaard.gln_code';

    /** the column name for the uzovi_code field */
    const UZOVI_CODE = 'gs_naw_gegevens_gstandaard.uzovi_code';

    /** the column name for the agb_code field */
    const AGB_CODE = 'gs_naw_gegevens_gstandaard.agb_code';

    /** the column name for the reservenummer_1 field */
    const RESERVENUMMER_1 = 'gs_naw_gegevens_gstandaard.reservenummer_1';

    /** the column name for the reservenummer_2 field */
    const RESERVENUMMER_2 = 'gs_naw_gegevens_gstandaard.reservenummer_2';

    /** the column name for the slug field */
    const SLUG = 'gs_naw_gegevens_gstandaard.slug';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsNawGegevensGstandaard objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsNawGegevensGstandaard[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsNawGegevensGstandaardPeer::$fieldNames[GsNawGegevensGstandaardPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'ThesaurusnummerSoortNaw', 'NawSoort', 'NawNummer', 'MemocodeOnderneming3PositiesAlfanumeriek', 'MemocodeOnderneming2PositiesNumeriek', 'Naam', 'Adres', 'Postcode', 'Woonplaats', 'Land', 'Postbusnummer', 'PostcodePostbus', 'TelefoonnummerOndernemer', 'Faxnummer', 'Zoeknaam', 'LandMemocode', 'LicNummer', 'GlnCode', 'UzoviCode', 'AgbCode', 'Reservenummer1', 'Reservenummer2', 'Slug', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'thesaurusnummerSoortNaw', 'nawSoort', 'nawNummer', 'memocodeOnderneming3PositiesAlfanumeriek', 'memocodeOnderneming2PositiesNumeriek', 'naam', 'adres', 'postcode', 'woonplaats', 'land', 'postbusnummer', 'postcodePostbus', 'telefoonnummerOndernemer', 'faxnummer', 'zoeknaam', 'landMemocode', 'licNummer', 'glnCode', 'uzoviCode', 'agbCode', 'reservenummer1', 'reservenummer2', 'slug', ),
        BasePeer::TYPE_COLNAME => array (GsNawGegevensGstandaardPeer::BESTANDNUMMER, GsNawGegevensGstandaardPeer::MUTATIEKODE, GsNawGegevensGstandaardPeer::THESAURUSNUMMER_SOORT_NAW, GsNawGegevensGstandaardPeer::NAW_SOORT, GsNawGegevensGstandaardPeer::NAW_NUMMER, GsNawGegevensGstandaardPeer::MEMOCODE_ONDERNEMING_3_POSITIES_ALFANUMERIEK, GsNawGegevensGstandaardPeer::MEMOCODE_ONDERNEMING_2_POSITIES_NUMERIEK, GsNawGegevensGstandaardPeer::NAAM, GsNawGegevensGstandaardPeer::ADRES, GsNawGegevensGstandaardPeer::POSTCODE, GsNawGegevensGstandaardPeer::WOONPLAATS, GsNawGegevensGstandaardPeer::LAND, GsNawGegevensGstandaardPeer::POSTBUSNUMMER, GsNawGegevensGstandaardPeer::POSTCODE_POSTBUS, GsNawGegevensGstandaardPeer::TELEFOONNUMMER_ONDERNEMER, GsNawGegevensGstandaardPeer::FAXNUMMER, GsNawGegevensGstandaardPeer::ZOEKNAAM, GsNawGegevensGstandaardPeer::LAND_MEMOCODE, GsNawGegevensGstandaardPeer::LIC_NUMMER, GsNawGegevensGstandaardPeer::GLN_CODE, GsNawGegevensGstandaardPeer::UZOVI_CODE, GsNawGegevensGstandaardPeer::AGB_CODE, GsNawGegevensGstandaardPeer::RESERVENUMMER_1, GsNawGegevensGstandaardPeer::RESERVENUMMER_2, GsNawGegevensGstandaardPeer::SLUG, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'THESAURUSNUMMER_SOORT_NAW', 'NAW_SOORT', 'NAW_NUMMER', 'MEMOCODE_ONDERNEMING_3_POSITIES_ALFANUMERIEK', 'MEMOCODE_ONDERNEMING_2_POSITIES_NUMERIEK', 'NAAM', 'ADRES', 'POSTCODE', 'WOONPLAATS', 'LAND', 'POSTBUSNUMMER', 'POSTCODE_POSTBUS', 'TELEFOONNUMMER_ONDERNEMER', 'FAXNUMMER', 'ZOEKNAAM', 'LAND_MEMOCODE', 'LIC_NUMMER', 'GLN_CODE', 'UZOVI_CODE', 'AGB_CODE', 'RESERVENUMMER_1', 'RESERVENUMMER_2', 'SLUG', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'thesaurusnummer_soort_naw', 'naw_soort', 'naw_nummer', 'memocode_onderneming_3_posities_alfanumeriek', 'memocode_onderneming_2_posities_numeriek', 'naam', 'adres', 'postcode', 'woonplaats', 'land', 'postbusnummer', 'postcode_postbus', 'telefoonnummer_ondernemer', 'faxnummer', 'zoeknaam', 'land_memocode', 'lic_nummer', 'gln_code', 'uzovi_code', 'agb_code', 'reservenummer_1', 'reservenummer_2', 'slug', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsNawGegevensGstandaardPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'ThesaurusnummerSoortNaw' => 2, 'NawSoort' => 3, 'NawNummer' => 4, 'MemocodeOnderneming3PositiesAlfanumeriek' => 5, 'MemocodeOnderneming2PositiesNumeriek' => 6, 'Naam' => 7, 'Adres' => 8, 'Postcode' => 9, 'Woonplaats' => 10, 'Land' => 11, 'Postbusnummer' => 12, 'PostcodePostbus' => 13, 'TelefoonnummerOndernemer' => 14, 'Faxnummer' => 15, 'Zoeknaam' => 16, 'LandMemocode' => 17, 'LicNummer' => 18, 'GlnCode' => 19, 'UzoviCode' => 20, 'AgbCode' => 21, 'Reservenummer1' => 22, 'Reservenummer2' => 23, 'Slug' => 24, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'thesaurusnummerSoortNaw' => 2, 'nawSoort' => 3, 'nawNummer' => 4, 'memocodeOnderneming3PositiesAlfanumeriek' => 5, 'memocodeOnderneming2PositiesNumeriek' => 6, 'naam' => 7, 'adres' => 8, 'postcode' => 9, 'woonplaats' => 10, 'land' => 11, 'postbusnummer' => 12, 'postcodePostbus' => 13, 'telefoonnummerOndernemer' => 14, 'faxnummer' => 15, 'zoeknaam' => 16, 'landMemocode' => 17, 'licNummer' => 18, 'glnCode' => 19, 'uzoviCode' => 20, 'agbCode' => 21, 'reservenummer1' => 22, 'reservenummer2' => 23, 'slug' => 24, ),
        BasePeer::TYPE_COLNAME => array (GsNawGegevensGstandaardPeer::BESTANDNUMMER => 0, GsNawGegevensGstandaardPeer::MUTATIEKODE => 1, GsNawGegevensGstandaardPeer::THESAURUSNUMMER_SOORT_NAW => 2, GsNawGegevensGstandaardPeer::NAW_SOORT => 3, GsNawGegevensGstandaardPeer::NAW_NUMMER => 4, GsNawGegevensGstandaardPeer::MEMOCODE_ONDERNEMING_3_POSITIES_ALFANUMERIEK => 5, GsNawGegevensGstandaardPeer::MEMOCODE_ONDERNEMING_2_POSITIES_NUMERIEK => 6, GsNawGegevensGstandaardPeer::NAAM => 7, GsNawGegevensGstandaardPeer::ADRES => 8, GsNawGegevensGstandaardPeer::POSTCODE => 9, GsNawGegevensGstandaardPeer::WOONPLAATS => 10, GsNawGegevensGstandaardPeer::LAND => 11, GsNawGegevensGstandaardPeer::POSTBUSNUMMER => 12, GsNawGegevensGstandaardPeer::POSTCODE_POSTBUS => 13, GsNawGegevensGstandaardPeer::TELEFOONNUMMER_ONDERNEMER => 14, GsNawGegevensGstandaardPeer::FAXNUMMER => 15, GsNawGegevensGstandaardPeer::ZOEKNAAM => 16, GsNawGegevensGstandaardPeer::LAND_MEMOCODE => 17, GsNawGegevensGstandaardPeer::LIC_NUMMER => 18, GsNawGegevensGstandaardPeer::GLN_CODE => 19, GsNawGegevensGstandaardPeer::UZOVI_CODE => 20, GsNawGegevensGstandaardPeer::AGB_CODE => 21, GsNawGegevensGstandaardPeer::RESERVENUMMER_1 => 22, GsNawGegevensGstandaardPeer::RESERVENUMMER_2 => 23, GsNawGegevensGstandaardPeer::SLUG => 24, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'THESAURUSNUMMER_SOORT_NAW' => 2, 'NAW_SOORT' => 3, 'NAW_NUMMER' => 4, 'MEMOCODE_ONDERNEMING_3_POSITIES_ALFANUMERIEK' => 5, 'MEMOCODE_ONDERNEMING_2_POSITIES_NUMERIEK' => 6, 'NAAM' => 7, 'ADRES' => 8, 'POSTCODE' => 9, 'WOONPLAATS' => 10, 'LAND' => 11, 'POSTBUSNUMMER' => 12, 'POSTCODE_POSTBUS' => 13, 'TELEFOONNUMMER_ONDERNEMER' => 14, 'FAXNUMMER' => 15, 'ZOEKNAAM' => 16, 'LAND_MEMOCODE' => 17, 'LIC_NUMMER' => 18, 'GLN_CODE' => 19, 'UZOVI_CODE' => 20, 'AGB_CODE' => 21, 'RESERVENUMMER_1' => 22, 'RESERVENUMMER_2' => 23, 'SLUG' => 24, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'thesaurusnummer_soort_naw' => 2, 'naw_soort' => 3, 'naw_nummer' => 4, 'memocode_onderneming_3_posities_alfanumeriek' => 5, 'memocode_onderneming_2_posities_numeriek' => 6, 'naam' => 7, 'adres' => 8, 'postcode' => 9, 'woonplaats' => 10, 'land' => 11, 'postbusnummer' => 12, 'postcode_postbus' => 13, 'telefoonnummer_ondernemer' => 14, 'faxnummer' => 15, 'zoeknaam' => 16, 'land_memocode' => 17, 'lic_nummer' => 18, 'gln_code' => 19, 'uzovi_code' => 20, 'agb_code' => 21, 'reservenummer_1' => 22, 'reservenummer_2' => 23, 'slug' => 24, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
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
        $toNames = GsNawGegevensGstandaardPeer::getFieldNames($toType);
        $key = isset(GsNawGegevensGstandaardPeer::$fieldKeys[$fromType][$name]) ? GsNawGegevensGstandaardPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsNawGegevensGstandaardPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsNawGegevensGstandaardPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsNawGegevensGstandaardPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsNawGegevensGstandaardPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsNawGegevensGstandaardPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::THESAURUSNUMMER_SOORT_NAW);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::NAW_SOORT);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::NAW_NUMMER);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::MEMOCODE_ONDERNEMING_3_POSITIES_ALFANUMERIEK);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::MEMOCODE_ONDERNEMING_2_POSITIES_NUMERIEK);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::NAAM);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::ADRES);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::POSTCODE);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::WOONPLAATS);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::LAND);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::POSTBUSNUMMER);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::POSTCODE_POSTBUS);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::TELEFOONNUMMER_ONDERNEMER);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::FAXNUMMER);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::ZOEKNAAM);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::LAND_MEMOCODE);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::LIC_NUMMER);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::GLN_CODE);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::UZOVI_CODE);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::AGB_CODE);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::RESERVENUMMER_1);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::RESERVENUMMER_2);
            $criteria->addSelectColumn(GsNawGegevensGstandaardPeer::SLUG);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.thesaurusnummer_soort_naw');
            $criteria->addSelectColumn($alias . '.naw_soort');
            $criteria->addSelectColumn($alias . '.naw_nummer');
            $criteria->addSelectColumn($alias . '.memocode_onderneming_3_posities_alfanumeriek');
            $criteria->addSelectColumn($alias . '.memocode_onderneming_2_posities_numeriek');
            $criteria->addSelectColumn($alias . '.naam');
            $criteria->addSelectColumn($alias . '.adres');
            $criteria->addSelectColumn($alias . '.postcode');
            $criteria->addSelectColumn($alias . '.woonplaats');
            $criteria->addSelectColumn($alias . '.land');
            $criteria->addSelectColumn($alias . '.postbusnummer');
            $criteria->addSelectColumn($alias . '.postcode_postbus');
            $criteria->addSelectColumn($alias . '.telefoonnummer_ondernemer');
            $criteria->addSelectColumn($alias . '.faxnummer');
            $criteria->addSelectColumn($alias . '.zoeknaam');
            $criteria->addSelectColumn($alias . '.land_memocode');
            $criteria->addSelectColumn($alias . '.lic_nummer');
            $criteria->addSelectColumn($alias . '.gln_code');
            $criteria->addSelectColumn($alias . '.uzovi_code');
            $criteria->addSelectColumn($alias . '.agb_code');
            $criteria->addSelectColumn($alias . '.reservenummer_1');
            $criteria->addSelectColumn($alias . '.reservenummer_2');
            $criteria->addSelectColumn($alias . '.slug');
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
        $criteria->setPrimaryTableName(GsNawGegevensGstandaardPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsNawGegevensGstandaardPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsNawGegevensGstandaardPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsNawGegevensGstandaard
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsNawGegevensGstandaardPeer::doSelect($critcopy, $con);
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
        return GsNawGegevensGstandaardPeer::populateObjects(GsNawGegevensGstandaardPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsNawGegevensGstandaardPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsNawGegevensGstandaardPeer::DATABASE_NAME);

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
     * @param GsNawGegevensGstandaard $obj A GsNawGegevensGstandaard object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getNawSoort(), (string) $obj->getNawNummer()));
            } // if key === null
            GsNawGegevensGstandaardPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsNawGegevensGstandaard object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsNawGegevensGstandaard) {
                $key = serialize(array((string) $value->getNawSoort(), (string) $value->getNawNummer()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsNawGegevensGstandaard object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsNawGegevensGstandaardPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsNawGegevensGstandaard Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsNawGegevensGstandaardPeer::$instances[$key])) {
                return GsNawGegevensGstandaardPeer::$instances[$key];
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
        foreach (GsNawGegevensGstandaardPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsNawGegevensGstandaardPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_naw_gegevens_gstandaard
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
        if ($row[$startcol + 3] === null && $row[$startcol + 4] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 3], (string) $row[$startcol + 4]));
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

        return array((int) $row[$startcol + 3], (int) $row[$startcol + 4]);
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
        $cls = GsNawGegevensGstandaardPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsNawGegevensGstandaardPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsNawGegevensGstandaardPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsNawGegevensGstandaard object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsNawGegevensGstandaardPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsNawGegevensGstandaardPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsNawGegevensGstandaardPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related SoortOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSoortOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsNawGegevensGstandaardPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsNawGegevensGstandaardPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsNawGegevensGstandaardPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsNawGegevensGstandaardPeer::THESAURUSNUMMER_SOORT_NAW, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsNawGegevensGstandaardPeer::NAW_SOORT, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Selects a collection of GsNawGegevensGstandaard objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsNawGegevensGstandaard objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSoortOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsNawGegevensGstandaardPeer::DATABASE_NAME);
        }

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol = GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsNawGegevensGstandaardPeer::THESAURUSNUMMER_SOORT_NAW, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsNawGegevensGstandaardPeer::NAW_SOORT, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsNawGegevensGstandaardPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsNawGegevensGstandaardPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsNawGegevensGstandaard) to $obj2 (GsThesauriTotaal)
                $obj2->addGsNawGegevensGstandaard($obj1);

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
        $criteria->setPrimaryTableName(GsNawGegevensGstandaardPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsNawGegevensGstandaardPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsNawGegevensGstandaardPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsNawGegevensGstandaardPeer::THESAURUSNUMMER_SOORT_NAW, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsNawGegevensGstandaardPeer::NAW_SOORT, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Selects a collection of GsNawGegevensGstandaard objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsNawGegevensGstandaard objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsNawGegevensGstandaardPeer::DATABASE_NAME);
        }

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol2 = GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(GsNawGegevensGstandaardPeer::THESAURUSNUMMER_SOORT_NAW, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsNawGegevensGstandaardPeer::NAW_SOORT, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsNawGegevensGstandaardPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsNawGegevensGstandaardPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsNawGegevensGstandaard) to the collection in $obj2 (GsThesauriTotaal)
                $obj2->addGsNawGegevensGstandaard($obj1);
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
        return Propel::getDatabaseMap(GsNawGegevensGstandaardPeer::DATABASE_NAME)->getTable(GsNawGegevensGstandaardPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsNawGegevensGstandaardPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsNawGegevensGstandaardPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsNawGegevensGstandaardTableMap());
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
        return GsNawGegevensGstandaardPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsNawGegevensGstandaard or Criteria object.
     *
     * @param      mixed $values Criteria or GsNawGegevensGstandaard object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsNawGegevensGstandaardPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsNawGegevensGstandaard object
        }


        // Set the correct dbName
        $criteria->setDbName(GsNawGegevensGstandaardPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsNawGegevensGstandaard or Criteria object.
     *
     * @param      mixed $values Criteria or GsNawGegevensGstandaard object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsNawGegevensGstandaardPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsNawGegevensGstandaardPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsNawGegevensGstandaardPeer::NAW_SOORT);
            $value = $criteria->remove(GsNawGegevensGstandaardPeer::NAW_SOORT);
            if ($value) {
                $selectCriteria->add(GsNawGegevensGstandaardPeer::NAW_SOORT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsNawGegevensGstandaardPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsNawGegevensGstandaardPeer::NAW_NUMMER);
            $value = $criteria->remove(GsNawGegevensGstandaardPeer::NAW_NUMMER);
            if ($value) {
                $selectCriteria->add(GsNawGegevensGstandaardPeer::NAW_NUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsNawGegevensGstandaardPeer::TABLE_NAME);
            }

        } else { // $values is GsNawGegevensGstandaard object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsNawGegevensGstandaardPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_naw_gegevens_gstandaard table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsNawGegevensGstandaardPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsNawGegevensGstandaardPeer::TABLE_NAME, $con, GsNawGegevensGstandaardPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsNawGegevensGstandaardPeer::clearInstancePool();
            GsNawGegevensGstandaardPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsNawGegevensGstandaard or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsNawGegevensGstandaard object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsNawGegevensGstandaardPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsNawGegevensGstandaardPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsNawGegevensGstandaard) { // it's a model object
            // invalidate the cache for this single object
            GsNawGegevensGstandaardPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsNawGegevensGstandaardPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsNawGegevensGstandaardPeer::NAW_SOORT, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsNawGegevensGstandaardPeer::NAW_NUMMER, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsNawGegevensGstandaardPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsNawGegevensGstandaardPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsNawGegevensGstandaardPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsNawGegevensGstandaard object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsNawGegevensGstandaard $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsNawGegevensGstandaardPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsNawGegevensGstandaardPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsNawGegevensGstandaardPeer::DATABASE_NAME, GsNawGegevensGstandaardPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $naw_soort
     * @param   int $naw_nummer
     * @param      PropelPDO $con
     * @return GsNawGegevensGstandaard
     */
    public static function retrieveByPK($naw_soort, $naw_nummer, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $naw_soort, (string) $naw_nummer));
         if (null !== ($obj = GsNawGegevensGstandaardPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsNawGegevensGstandaardPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsNawGegevensGstandaardPeer::DATABASE_NAME);
        $criteria->add(GsNawGegevensGstandaardPeer::NAW_SOORT, $naw_soort);
        $criteria->add(GsNawGegevensGstandaardPeer::NAW_NUMMER, $naw_nummer);
        $v = GsNawGegevensGstandaardPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsNawGegevensGstandaardPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsNawGegevensGstandaardPeer::buildTableMap();

