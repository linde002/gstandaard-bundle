<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsCodestelselZrs;
use PharmaIntelligence\GstandaardBundle\Model\GsCodestelselZrsPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsCodestelselZrsTableMap;

abstract class BaseGsCodestelselZrsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_codestelsel_zrs';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsCodestelselZrs';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsCodestelselZrsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_codestelsel_zrs.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_codestelsel_zrs.mutatiekode';

    /** the column name for the soort_code field */
    const SOORT_CODE = 'gs_codestelsel_zrs.soort_code';

    /** the column name for the zorg_registratie_nummer field */
    const ZORG_REGISTRATIE_NUMMER = 'gs_codestelsel_zrs.zorg_registratie_nummer';

    /** the column name for the memocode_bij_zr_nummer_uniek_per_aaacod field */
    const MEMOCODE_BIJ_ZR_NUMMER_UNIEK_PER_AAACOD = 'gs_codestelsel_zrs.memocode_bij_zr_nummer_uniek_per_aaacod';

    /** the column name for the omschrijving_zrnr_in_70_posities_voor_keuzemenus field */
    const OMSCHRIJVING_ZRNR_IN_70_POSITIES_VOOR_KEUZEMENUS = 'gs_codestelsel_zrs.omschrijving_zrnr_in_70_posities_voor_keuzemenus';

    /** the column name for the omschrijving_zrnr_in_45_posities_voor_op_etiket field */
    const OMSCHRIJVING_ZRNR_IN_45_POSITIES_VOOR_OP_ETIKET = 'gs_codestelsel_zrs.omschrijving_zrnr_in_45_posities_voor_op_etiket';

    /** the column name for the tekstmodulethesaurus_103 field */
    const TEKSTMODULETHESAURUS_103 = 'gs_codestelsel_zrs.tekstmodulethesaurus_103';

    /** the column name for the tekstmodule field */
    const TEKSTMODULE = 'gs_codestelsel_zrs.tekstmodule';

    /** the column name for the tekstsoortthesaurus_104 field */
    const TEKSTSOORTTHESAURUS_104 = 'gs_codestelsel_zrs.tekstsoortthesaurus_104';

    /** the column name for the tekstsoort field */
    const TEKSTSOORT = 'gs_codestelsel_zrs.tekstsoort';

    /** the column name for the tekst_nivo_kode field */
    const TEKST_NIVO_KODE = 'gs_codestelsel_zrs.tekst_nivo_kode';

    /** the column name for the datum_van_1e_opname field */
    const DATUM_VAN_1E_OPNAME = 'gs_codestelsel_zrs.datum_van_1e_opname';

    /** the column name for the datum_van_laatste_mutatie field */
    const DATUM_VAN_LAATSTE_MUTATIE = 'gs_codestelsel_zrs.datum_van_laatste_mutatie';

    /** the column name for the datum_van_inactief_maken field */
    const DATUM_VAN_INACTIEF_MAKEN = 'gs_codestelsel_zrs.datum_van_inactief_maken';

    /** the column name for the thesaurusnummer field */
    const THESAURUSNUMMER = 'gs_codestelsel_zrs.thesaurusnummer';

    /** the column name for the thesaurus_itemnummer field */
    const THESAURUS_ITEMNUMMER = 'gs_codestelsel_zrs.thesaurus_itemnummer';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsCodestelselZrs objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsCodestelselZrs[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsCodestelselZrsPeer::$fieldNames[GsCodestelselZrsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'SoortCode', 'ZorgRegistratieNummer', 'MemocodeBijZrNummerUniekPerAaacod', 'OmschrijvingZrnrIn70PositiesVoorKeuzemenus', 'OmschrijvingZrnrIn45PositiesVoorOpEtiket', 'Tekstmodulethesaurus103', 'Tekstmodule', 'Tekstsoortthesaurus104', 'Tekstsoort', 'TekstNivoKode', 'DatumVan1eOpname', 'DatumVanLaatsteMutatie', 'DatumVanInactiefMaken', 'Thesaurusnummer', 'ThesaurusItemnummer', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'soortCode', 'zorgRegistratieNummer', 'memocodeBijZrNummerUniekPerAaacod', 'omschrijvingZrnrIn70PositiesVoorKeuzemenus', 'omschrijvingZrnrIn45PositiesVoorOpEtiket', 'tekstmodulethesaurus103', 'tekstmodule', 'tekstsoortthesaurus104', 'tekstsoort', 'tekstNivoKode', 'datumVan1eOpname', 'datumVanLaatsteMutatie', 'datumVanInactiefMaken', 'thesaurusnummer', 'thesaurusItemnummer', ),
        BasePeer::TYPE_COLNAME => array (GsCodestelselZrsPeer::BESTANDNUMMER, GsCodestelselZrsPeer::MUTATIEKODE, GsCodestelselZrsPeer::SOORT_CODE, GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER, GsCodestelselZrsPeer::MEMOCODE_BIJ_ZR_NUMMER_UNIEK_PER_AAACOD, GsCodestelselZrsPeer::OMSCHRIJVING_ZRNR_IN_70_POSITIES_VOOR_KEUZEMENUS, GsCodestelselZrsPeer::OMSCHRIJVING_ZRNR_IN_45_POSITIES_VOOR_OP_ETIKET, GsCodestelselZrsPeer::TEKSTMODULETHESAURUS_103, GsCodestelselZrsPeer::TEKSTMODULE, GsCodestelselZrsPeer::TEKSTSOORTTHESAURUS_104, GsCodestelselZrsPeer::TEKSTSOORT, GsCodestelselZrsPeer::TEKST_NIVO_KODE, GsCodestelselZrsPeer::DATUM_VAN_1E_OPNAME, GsCodestelselZrsPeer::DATUM_VAN_LAATSTE_MUTATIE, GsCodestelselZrsPeer::DATUM_VAN_INACTIEF_MAKEN, GsCodestelselZrsPeer::THESAURUSNUMMER, GsCodestelselZrsPeer::THESAURUS_ITEMNUMMER, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'SOORT_CODE', 'ZORG_REGISTRATIE_NUMMER', 'MEMOCODE_BIJ_ZR_NUMMER_UNIEK_PER_AAACOD', 'OMSCHRIJVING_ZRNR_IN_70_POSITIES_VOOR_KEUZEMENUS', 'OMSCHRIJVING_ZRNR_IN_45_POSITIES_VOOR_OP_ETIKET', 'TEKSTMODULETHESAURUS_103', 'TEKSTMODULE', 'TEKSTSOORTTHESAURUS_104', 'TEKSTSOORT', 'TEKST_NIVO_KODE', 'DATUM_VAN_1E_OPNAME', 'DATUM_VAN_LAATSTE_MUTATIE', 'DATUM_VAN_INACTIEF_MAKEN', 'THESAURUSNUMMER', 'THESAURUS_ITEMNUMMER', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'soort_code', 'zorg_registratie_nummer', 'memocode_bij_zr_nummer_uniek_per_aaacod', 'omschrijving_zrnr_in_70_posities_voor_keuzemenus', 'omschrijving_zrnr_in_45_posities_voor_op_etiket', 'tekstmodulethesaurus_103', 'tekstmodule', 'tekstsoortthesaurus_104', 'tekstsoort', 'tekst_nivo_kode', 'datum_van_1e_opname', 'datum_van_laatste_mutatie', 'datum_van_inactief_maken', 'thesaurusnummer', 'thesaurus_itemnummer', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsCodestelselZrsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'SoortCode' => 2, 'ZorgRegistratieNummer' => 3, 'MemocodeBijZrNummerUniekPerAaacod' => 4, 'OmschrijvingZrnrIn70PositiesVoorKeuzemenus' => 5, 'OmschrijvingZrnrIn45PositiesVoorOpEtiket' => 6, 'Tekstmodulethesaurus103' => 7, 'Tekstmodule' => 8, 'Tekstsoortthesaurus104' => 9, 'Tekstsoort' => 10, 'TekstNivoKode' => 11, 'DatumVan1eOpname' => 12, 'DatumVanLaatsteMutatie' => 13, 'DatumVanInactiefMaken' => 14, 'Thesaurusnummer' => 15, 'ThesaurusItemnummer' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'soortCode' => 2, 'zorgRegistratieNummer' => 3, 'memocodeBijZrNummerUniekPerAaacod' => 4, 'omschrijvingZrnrIn70PositiesVoorKeuzemenus' => 5, 'omschrijvingZrnrIn45PositiesVoorOpEtiket' => 6, 'tekstmodulethesaurus103' => 7, 'tekstmodule' => 8, 'tekstsoortthesaurus104' => 9, 'tekstsoort' => 10, 'tekstNivoKode' => 11, 'datumVan1eOpname' => 12, 'datumVanLaatsteMutatie' => 13, 'datumVanInactiefMaken' => 14, 'thesaurusnummer' => 15, 'thesaurusItemnummer' => 16, ),
        BasePeer::TYPE_COLNAME => array (GsCodestelselZrsPeer::BESTANDNUMMER => 0, GsCodestelselZrsPeer::MUTATIEKODE => 1, GsCodestelselZrsPeer::SOORT_CODE => 2, GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER => 3, GsCodestelselZrsPeer::MEMOCODE_BIJ_ZR_NUMMER_UNIEK_PER_AAACOD => 4, GsCodestelselZrsPeer::OMSCHRIJVING_ZRNR_IN_70_POSITIES_VOOR_KEUZEMENUS => 5, GsCodestelselZrsPeer::OMSCHRIJVING_ZRNR_IN_45_POSITIES_VOOR_OP_ETIKET => 6, GsCodestelselZrsPeer::TEKSTMODULETHESAURUS_103 => 7, GsCodestelselZrsPeer::TEKSTMODULE => 8, GsCodestelselZrsPeer::TEKSTSOORTTHESAURUS_104 => 9, GsCodestelselZrsPeer::TEKSTSOORT => 10, GsCodestelselZrsPeer::TEKST_NIVO_KODE => 11, GsCodestelselZrsPeer::DATUM_VAN_1E_OPNAME => 12, GsCodestelselZrsPeer::DATUM_VAN_LAATSTE_MUTATIE => 13, GsCodestelselZrsPeer::DATUM_VAN_INACTIEF_MAKEN => 14, GsCodestelselZrsPeer::THESAURUSNUMMER => 15, GsCodestelselZrsPeer::THESAURUS_ITEMNUMMER => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'SOORT_CODE' => 2, 'ZORG_REGISTRATIE_NUMMER' => 3, 'MEMOCODE_BIJ_ZR_NUMMER_UNIEK_PER_AAACOD' => 4, 'OMSCHRIJVING_ZRNR_IN_70_POSITIES_VOOR_KEUZEMENUS' => 5, 'OMSCHRIJVING_ZRNR_IN_45_POSITIES_VOOR_OP_ETIKET' => 6, 'TEKSTMODULETHESAURUS_103' => 7, 'TEKSTMODULE' => 8, 'TEKSTSOORTTHESAURUS_104' => 9, 'TEKSTSOORT' => 10, 'TEKST_NIVO_KODE' => 11, 'DATUM_VAN_1E_OPNAME' => 12, 'DATUM_VAN_LAATSTE_MUTATIE' => 13, 'DATUM_VAN_INACTIEF_MAKEN' => 14, 'THESAURUSNUMMER' => 15, 'THESAURUS_ITEMNUMMER' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'soort_code' => 2, 'zorg_registratie_nummer' => 3, 'memocode_bij_zr_nummer_uniek_per_aaacod' => 4, 'omschrijving_zrnr_in_70_posities_voor_keuzemenus' => 5, 'omschrijving_zrnr_in_45_posities_voor_op_etiket' => 6, 'tekstmodulethesaurus_103' => 7, 'tekstmodule' => 8, 'tekstsoortthesaurus_104' => 9, 'tekstsoort' => 10, 'tekst_nivo_kode' => 11, 'datum_van_1e_opname' => 12, 'datum_van_laatste_mutatie' => 13, 'datum_van_inactief_maken' => 14, 'thesaurusnummer' => 15, 'thesaurus_itemnummer' => 16, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $toNames = GsCodestelselZrsPeer::getFieldNames($toType);
        $key = isset(GsCodestelselZrsPeer::$fieldKeys[$fromType][$name]) ? GsCodestelselZrsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsCodestelselZrsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsCodestelselZrsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsCodestelselZrsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsCodestelselZrsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsCodestelselZrsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsCodestelselZrsPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsCodestelselZrsPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsCodestelselZrsPeer::SOORT_CODE);
            $criteria->addSelectColumn(GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER);
            $criteria->addSelectColumn(GsCodestelselZrsPeer::MEMOCODE_BIJ_ZR_NUMMER_UNIEK_PER_AAACOD);
            $criteria->addSelectColumn(GsCodestelselZrsPeer::OMSCHRIJVING_ZRNR_IN_70_POSITIES_VOOR_KEUZEMENUS);
            $criteria->addSelectColumn(GsCodestelselZrsPeer::OMSCHRIJVING_ZRNR_IN_45_POSITIES_VOOR_OP_ETIKET);
            $criteria->addSelectColumn(GsCodestelselZrsPeer::TEKSTMODULETHESAURUS_103);
            $criteria->addSelectColumn(GsCodestelselZrsPeer::TEKSTMODULE);
            $criteria->addSelectColumn(GsCodestelselZrsPeer::TEKSTSOORTTHESAURUS_104);
            $criteria->addSelectColumn(GsCodestelselZrsPeer::TEKSTSOORT);
            $criteria->addSelectColumn(GsCodestelselZrsPeer::TEKST_NIVO_KODE);
            $criteria->addSelectColumn(GsCodestelselZrsPeer::DATUM_VAN_1E_OPNAME);
            $criteria->addSelectColumn(GsCodestelselZrsPeer::DATUM_VAN_LAATSTE_MUTATIE);
            $criteria->addSelectColumn(GsCodestelselZrsPeer::DATUM_VAN_INACTIEF_MAKEN);
            $criteria->addSelectColumn(GsCodestelselZrsPeer::THESAURUSNUMMER);
            $criteria->addSelectColumn(GsCodestelselZrsPeer::THESAURUS_ITEMNUMMER);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.soort_code');
            $criteria->addSelectColumn($alias . '.zorg_registratie_nummer');
            $criteria->addSelectColumn($alias . '.memocode_bij_zr_nummer_uniek_per_aaacod');
            $criteria->addSelectColumn($alias . '.omschrijving_zrnr_in_70_posities_voor_keuzemenus');
            $criteria->addSelectColumn($alias . '.omschrijving_zrnr_in_45_posities_voor_op_etiket');
            $criteria->addSelectColumn($alias . '.tekstmodulethesaurus_103');
            $criteria->addSelectColumn($alias . '.tekstmodule');
            $criteria->addSelectColumn($alias . '.tekstsoortthesaurus_104');
            $criteria->addSelectColumn($alias . '.tekstsoort');
            $criteria->addSelectColumn($alias . '.tekst_nivo_kode');
            $criteria->addSelectColumn($alias . '.datum_van_1e_opname');
            $criteria->addSelectColumn($alias . '.datum_van_laatste_mutatie');
            $criteria->addSelectColumn($alias . '.datum_van_inactief_maken');
            $criteria->addSelectColumn($alias . '.thesaurusnummer');
            $criteria->addSelectColumn($alias . '.thesaurus_itemnummer');
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
        $criteria->setPrimaryTableName(GsCodestelselZrsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsCodestelselZrsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsCodestelselZrsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsCodestelselZrsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsCodestelselZrs
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsCodestelselZrsPeer::doSelect($critcopy, $con);
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
        return GsCodestelselZrsPeer::populateObjects(GsCodestelselZrsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsCodestelselZrsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsCodestelselZrsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsCodestelselZrsPeer::DATABASE_NAME);

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
     * @param GsCodestelselZrs $obj A GsCodestelselZrs object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getSoortCode(), (string) $obj->getZorgRegistratieNummer()));
            } // if key === null
            GsCodestelselZrsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsCodestelselZrs object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsCodestelselZrs) {
                $key = serialize(array((string) $value->getSoortCode(), (string) $value->getZorgRegistratieNummer()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsCodestelselZrs object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsCodestelselZrsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsCodestelselZrs Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsCodestelselZrsPeer::$instances[$key])) {
                return GsCodestelselZrsPeer::$instances[$key];
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
        foreach (GsCodestelselZrsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsCodestelselZrsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_codestelsel_zrs
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
        $cls = GsCodestelselZrsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsCodestelselZrsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsCodestelselZrsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsCodestelselZrsPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsCodestelselZrs object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsCodestelselZrsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsCodestelselZrsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsCodestelselZrsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsCodestelselZrsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsCodestelselZrsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsCodestelselZrsPeer::DATABASE_NAME)->getTable(GsCodestelselZrsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsCodestelselZrsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsCodestelselZrsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsCodestelselZrsTableMap());
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
        return GsCodestelselZrsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsCodestelselZrs or Criteria object.
     *
     * @param      mixed $values Criteria or GsCodestelselZrs object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsCodestelselZrsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsCodestelselZrs object
        }


        // Set the correct dbName
        $criteria->setDbName(GsCodestelselZrsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsCodestelselZrs or Criteria object.
     *
     * @param      mixed $values Criteria or GsCodestelselZrs object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsCodestelselZrsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsCodestelselZrsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsCodestelselZrsPeer::SOORT_CODE);
            $value = $criteria->remove(GsCodestelselZrsPeer::SOORT_CODE);
            if ($value) {
                $selectCriteria->add(GsCodestelselZrsPeer::SOORT_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsCodestelselZrsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER);
            $value = $criteria->remove(GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER);
            if ($value) {
                $selectCriteria->add(GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsCodestelselZrsPeer::TABLE_NAME);
            }

        } else { // $values is GsCodestelselZrs object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsCodestelselZrsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_codestelsel_zrs table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsCodestelselZrsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsCodestelselZrsPeer::TABLE_NAME, $con, GsCodestelselZrsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsCodestelselZrsPeer::clearInstancePool();
            GsCodestelselZrsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsCodestelselZrs or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsCodestelselZrs object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsCodestelselZrsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsCodestelselZrsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsCodestelselZrs) { // it's a model object
            // invalidate the cache for this single object
            GsCodestelselZrsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsCodestelselZrsPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsCodestelselZrsPeer::SOORT_CODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsCodestelselZrsPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsCodestelselZrsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsCodestelselZrsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsCodestelselZrs object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsCodestelselZrs $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsCodestelselZrsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsCodestelselZrsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsCodestelselZrsPeer::DATABASE_NAME, GsCodestelselZrsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $soort_code
     * @param   int $zorg_registratie_nummer
     * @param      PropelPDO $con
     * @return GsCodestelselZrs
     */
    public static function retrieveByPK($soort_code, $zorg_registratie_nummer, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $soort_code, (string) $zorg_registratie_nummer));
         if (null !== ($obj = GsCodestelselZrsPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsCodestelselZrsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsCodestelselZrsPeer::DATABASE_NAME);
        $criteria->add(GsCodestelselZrsPeer::SOORT_CODE, $soort_code);
        $criteria->add(GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER, $zorg_registratie_nummer);
        $v = GsCodestelselZrsPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsCodestelselZrsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsCodestelselZrsPeer::buildTableMap();

