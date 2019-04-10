<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsCodestelselZrsOnderlingVerband;
use PharmaIntelligence\GstandaardBundle\Model\GsCodestelselZrsOnderlingVerbandPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsCodestelselZrsOnderlingVerbandTableMap;

abstract class BaseGsCodestelselZrsOnderlingVerbandPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_codestelsel_zrs_onderling_verband';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsCodestelselZrsOnderlingVerband';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsCodestelselZrsOnderlingVerbandTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 16;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 16;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_codestelsel_zrs_onderling_verband.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_codestelsel_zrs_onderling_verband.mutatiekode';

    /** the column name for the zorg_registratie_nummer_van_de_actie field */
    const ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE = 'gs_codestelsel_zrs_onderling_verband.zorg_registratie_nummer_van_de_actie';

    /** the column name for the zorg_registratie_nummer_van_de_actiegroep field */
    const ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP = 'gs_codestelsel_zrs_onderling_verband.zorg_registratie_nummer_van_de_actiegroep';

    /** the column name for the zorg_registratie_nummer_van_de_actieregel field */
    const ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL = 'gs_codestelsel_zrs_onderling_verband.zorg_registratie_nummer_van_de_actieregel';

    /** the column name for the zorg_registratie_nummer_van_de_analyse field */
    const ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE = 'gs_codestelsel_zrs_onderling_verband.zorg_registratie_nummer_van_de_analyse';

    /** the column name for the zorg_registratie_nummer_van_de_subanalyse field */
    const ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE = 'gs_codestelsel_zrs_onderling_verband.zorg_registratie_nummer_van_de_subanalyse';

    /** the column name for the zorg_registratie_nummer_van_de_aanleiding field */
    const ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING = 'gs_codestelsel_zrs_onderling_verband.zorg_registratie_nummer_van_de_aanleiding';

    /** the column name for the zorg_registratie_nummer_van_de_subaanleiding field */
    const ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING = 'gs_codestelsel_zrs_onderling_verband.zorg_registratie_nummer_van_de_subaanleiding';

    /** the column name for the tekstmodulethesaurus_103 field */
    const TEKSTMODULETHESAURUS_103 = 'gs_codestelsel_zrs_onderling_verband.tekstmodulethesaurus_103';

    /** the column name for the tekstmodule field */
    const TEKSTMODULE = 'gs_codestelsel_zrs_onderling_verband.tekstmodule';

    /** the column name for the tekstsoortthesaurus_104 field */
    const TEKSTSOORTTHESAURUS_104 = 'gs_codestelsel_zrs_onderling_verband.tekstsoortthesaurus_104';

    /** the column name for the tekstsoort field */
    const TEKSTSOORT = 'gs_codestelsel_zrs_onderling_verband.tekstsoort';

    /** the column name for the tekst_nivo_kode field */
    const TEKST_NIVO_KODE = 'gs_codestelsel_zrs_onderling_verband.tekst_nivo_kode';

    /** the column name for the opnemen_als_favoriet_na_aanleiding_en_analyse field */
    const OPNEMEN_ALS_FAVORIET_NA_AANLEIDING_EN_ANALYSE = 'gs_codestelsel_zrs_onderling_verband.opnemen_als_favoriet_na_aanleiding_en_analyse';

    /** the column name for the opn_als_favoriet_na_aanleiding_analyse_en_actie field */
    const OPN_ALS_FAVORIET_NA_AANLEIDING_ANALYSE_EN_ACTIE = 'gs_codestelsel_zrs_onderling_verband.opn_als_favoriet_na_aanleiding_analyse_en_actie';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsCodestelselZrsOnderlingVerband objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsCodestelselZrsOnderlingVerband[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsCodestelselZrsOnderlingVerbandPeer::$fieldNames[GsCodestelselZrsOnderlingVerbandPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'ZorgRegistratieNummerVanDeActie', 'ZorgRegistratieNummerVanDeActiegroep', 'ZorgRegistratieNummerVanDeActieregel', 'ZorgRegistratieNummerVanDeAnalyse', 'ZorgRegistratieNummerVanDeSubanalyse', 'ZorgRegistratieNummerVanDeAanleiding', 'ZorgRegistratieNummerVanDeSubaanleiding', 'Tekstmodulethesaurus103', 'Tekstmodule', 'Tekstsoortthesaurus104', 'Tekstsoort', 'TekstNivoKode', 'OpnemenAlsFavorietNaAanleidingEnAnalyse', 'OpnAlsFavorietNaAanleidingAnalyseEnActie', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'zorgRegistratieNummerVanDeActie', 'zorgRegistratieNummerVanDeActiegroep', 'zorgRegistratieNummerVanDeActieregel', 'zorgRegistratieNummerVanDeAnalyse', 'zorgRegistratieNummerVanDeSubanalyse', 'zorgRegistratieNummerVanDeAanleiding', 'zorgRegistratieNummerVanDeSubaanleiding', 'tekstmodulethesaurus103', 'tekstmodule', 'tekstsoortthesaurus104', 'tekstsoort', 'tekstNivoKode', 'opnemenAlsFavorietNaAanleidingEnAnalyse', 'opnAlsFavorietNaAanleidingAnalyseEnActie', ),
        BasePeer::TYPE_COLNAME => array (GsCodestelselZrsOnderlingVerbandPeer::BESTANDNUMMER, GsCodestelselZrsOnderlingVerbandPeer::MUTATIEKODE, GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE, GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP, GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE, GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE, GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING, GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING, GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULETHESAURUS_103, GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULE, GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORTTHESAURUS_104, GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORT, GsCodestelselZrsOnderlingVerbandPeer::TEKST_NIVO_KODE, GsCodestelselZrsOnderlingVerbandPeer::OPNEMEN_ALS_FAVORIET_NA_AANLEIDING_EN_ANALYSE, GsCodestelselZrsOnderlingVerbandPeer::OPN_ALS_FAVORIET_NA_AANLEIDING_ANALYSE_EN_ACTIE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE', 'ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP', 'ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL', 'ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE', 'ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE', 'ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING', 'ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING', 'TEKSTMODULETHESAURUS_103', 'TEKSTMODULE', 'TEKSTSOORTTHESAURUS_104', 'TEKSTSOORT', 'TEKST_NIVO_KODE', 'OPNEMEN_ALS_FAVORIET_NA_AANLEIDING_EN_ANALYSE', 'OPN_ALS_FAVORIET_NA_AANLEIDING_ANALYSE_EN_ACTIE', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'zorg_registratie_nummer_van_de_actie', 'zorg_registratie_nummer_van_de_actiegroep', 'zorg_registratie_nummer_van_de_actieregel', 'zorg_registratie_nummer_van_de_analyse', 'zorg_registratie_nummer_van_de_subanalyse', 'zorg_registratie_nummer_van_de_aanleiding', 'zorg_registratie_nummer_van_de_subaanleiding', 'tekstmodulethesaurus_103', 'tekstmodule', 'tekstsoortthesaurus_104', 'tekstsoort', 'tekst_nivo_kode', 'opnemen_als_favoriet_na_aanleiding_en_analyse', 'opn_als_favoriet_na_aanleiding_analyse_en_actie', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsCodestelselZrsOnderlingVerbandPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'ZorgRegistratieNummerVanDeActie' => 2, 'ZorgRegistratieNummerVanDeActiegroep' => 3, 'ZorgRegistratieNummerVanDeActieregel' => 4, 'ZorgRegistratieNummerVanDeAnalyse' => 5, 'ZorgRegistratieNummerVanDeSubanalyse' => 6, 'ZorgRegistratieNummerVanDeAanleiding' => 7, 'ZorgRegistratieNummerVanDeSubaanleiding' => 8, 'Tekstmodulethesaurus103' => 9, 'Tekstmodule' => 10, 'Tekstsoortthesaurus104' => 11, 'Tekstsoort' => 12, 'TekstNivoKode' => 13, 'OpnemenAlsFavorietNaAanleidingEnAnalyse' => 14, 'OpnAlsFavorietNaAanleidingAnalyseEnActie' => 15, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'zorgRegistratieNummerVanDeActie' => 2, 'zorgRegistratieNummerVanDeActiegroep' => 3, 'zorgRegistratieNummerVanDeActieregel' => 4, 'zorgRegistratieNummerVanDeAnalyse' => 5, 'zorgRegistratieNummerVanDeSubanalyse' => 6, 'zorgRegistratieNummerVanDeAanleiding' => 7, 'zorgRegistratieNummerVanDeSubaanleiding' => 8, 'tekstmodulethesaurus103' => 9, 'tekstmodule' => 10, 'tekstsoortthesaurus104' => 11, 'tekstsoort' => 12, 'tekstNivoKode' => 13, 'opnemenAlsFavorietNaAanleidingEnAnalyse' => 14, 'opnAlsFavorietNaAanleidingAnalyseEnActie' => 15, ),
        BasePeer::TYPE_COLNAME => array (GsCodestelselZrsOnderlingVerbandPeer::BESTANDNUMMER => 0, GsCodestelselZrsOnderlingVerbandPeer::MUTATIEKODE => 1, GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE => 2, GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP => 3, GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL => 4, GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE => 5, GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE => 6, GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING => 7, GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING => 8, GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULETHESAURUS_103 => 9, GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULE => 10, GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORTTHESAURUS_104 => 11, GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORT => 12, GsCodestelselZrsOnderlingVerbandPeer::TEKST_NIVO_KODE => 13, GsCodestelselZrsOnderlingVerbandPeer::OPNEMEN_ALS_FAVORIET_NA_AANLEIDING_EN_ANALYSE => 14, GsCodestelselZrsOnderlingVerbandPeer::OPN_ALS_FAVORIET_NA_AANLEIDING_ANALYSE_EN_ACTIE => 15, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE' => 2, 'ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP' => 3, 'ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL' => 4, 'ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE' => 5, 'ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE' => 6, 'ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING' => 7, 'ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING' => 8, 'TEKSTMODULETHESAURUS_103' => 9, 'TEKSTMODULE' => 10, 'TEKSTSOORTTHESAURUS_104' => 11, 'TEKSTSOORT' => 12, 'TEKST_NIVO_KODE' => 13, 'OPNEMEN_ALS_FAVORIET_NA_AANLEIDING_EN_ANALYSE' => 14, 'OPN_ALS_FAVORIET_NA_AANLEIDING_ANALYSE_EN_ACTIE' => 15, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'zorg_registratie_nummer_van_de_actie' => 2, 'zorg_registratie_nummer_van_de_actiegroep' => 3, 'zorg_registratie_nummer_van_de_actieregel' => 4, 'zorg_registratie_nummer_van_de_analyse' => 5, 'zorg_registratie_nummer_van_de_subanalyse' => 6, 'zorg_registratie_nummer_van_de_aanleiding' => 7, 'zorg_registratie_nummer_van_de_subaanleiding' => 8, 'tekstmodulethesaurus_103' => 9, 'tekstmodule' => 10, 'tekstsoortthesaurus_104' => 11, 'tekstsoort' => 12, 'tekst_nivo_kode' => 13, 'opnemen_als_favoriet_na_aanleiding_en_analyse' => 14, 'opn_als_favoriet_na_aanleiding_analyse_en_actie' => 15, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
        $toNames = GsCodestelselZrsOnderlingVerbandPeer::getFieldNames($toType);
        $key = isset(GsCodestelselZrsOnderlingVerbandPeer::$fieldKeys[$fromType][$name]) ? GsCodestelselZrsOnderlingVerbandPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsCodestelselZrsOnderlingVerbandPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsCodestelselZrsOnderlingVerbandPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsCodestelselZrsOnderlingVerbandPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsCodestelselZrsOnderlingVerbandPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsCodestelselZrsOnderlingVerbandPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsCodestelselZrsOnderlingVerbandPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsCodestelselZrsOnderlingVerbandPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE);
            $criteria->addSelectColumn(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP);
            $criteria->addSelectColumn(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL);
            $criteria->addSelectColumn(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE);
            $criteria->addSelectColumn(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE);
            $criteria->addSelectColumn(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING);
            $criteria->addSelectColumn(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING);
            $criteria->addSelectColumn(GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULETHESAURUS_103);
            $criteria->addSelectColumn(GsCodestelselZrsOnderlingVerbandPeer::TEKSTMODULE);
            $criteria->addSelectColumn(GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORTTHESAURUS_104);
            $criteria->addSelectColumn(GsCodestelselZrsOnderlingVerbandPeer::TEKSTSOORT);
            $criteria->addSelectColumn(GsCodestelselZrsOnderlingVerbandPeer::TEKST_NIVO_KODE);
            $criteria->addSelectColumn(GsCodestelselZrsOnderlingVerbandPeer::OPNEMEN_ALS_FAVORIET_NA_AANLEIDING_EN_ANALYSE);
            $criteria->addSelectColumn(GsCodestelselZrsOnderlingVerbandPeer::OPN_ALS_FAVORIET_NA_AANLEIDING_ANALYSE_EN_ACTIE);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.zorg_registratie_nummer_van_de_actie');
            $criteria->addSelectColumn($alias . '.zorg_registratie_nummer_van_de_actiegroep');
            $criteria->addSelectColumn($alias . '.zorg_registratie_nummer_van_de_actieregel');
            $criteria->addSelectColumn($alias . '.zorg_registratie_nummer_van_de_analyse');
            $criteria->addSelectColumn($alias . '.zorg_registratie_nummer_van_de_subanalyse');
            $criteria->addSelectColumn($alias . '.zorg_registratie_nummer_van_de_aanleiding');
            $criteria->addSelectColumn($alias . '.zorg_registratie_nummer_van_de_subaanleiding');
            $criteria->addSelectColumn($alias . '.tekstmodulethesaurus_103');
            $criteria->addSelectColumn($alias . '.tekstmodule');
            $criteria->addSelectColumn($alias . '.tekstsoortthesaurus_104');
            $criteria->addSelectColumn($alias . '.tekstsoort');
            $criteria->addSelectColumn($alias . '.tekst_nivo_kode');
            $criteria->addSelectColumn($alias . '.opnemen_als_favoriet_na_aanleiding_en_analyse');
            $criteria->addSelectColumn($alias . '.opn_als_favoriet_na_aanleiding_analyse_en_actie');
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
        $criteria->setPrimaryTableName(GsCodestelselZrsOnderlingVerbandPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsCodestelselZrsOnderlingVerbandPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsCodestelselZrsOnderlingVerband
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsCodestelselZrsOnderlingVerbandPeer::doSelect($critcopy, $con);
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
        return GsCodestelselZrsOnderlingVerbandPeer::populateObjects(GsCodestelselZrsOnderlingVerbandPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsCodestelselZrsOnderlingVerbandPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME);

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
     * @param GsCodestelselZrsOnderlingVerband $obj A GsCodestelselZrsOnderlingVerband object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getZorgRegistratieNummerVanDeActie(), (string) $obj->getZorgRegistratieNummerVanDeActiegroep(), (string) $obj->getZorgRegistratieNummerVanDeActieregel(), (string) $obj->getZorgRegistratieNummerVanDeAnalyse(), (string) $obj->getZorgRegistratieNummerVanDeSubanalyse(), (string) $obj->getZorgRegistratieNummerVanDeAanleiding(), (string) $obj->getZorgRegistratieNummerVanDeSubaanleiding()));
            } // if key === null
            GsCodestelselZrsOnderlingVerbandPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsCodestelselZrsOnderlingVerband object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsCodestelselZrsOnderlingVerband) {
                $key = serialize(array((string) $value->getZorgRegistratieNummerVanDeActie(), (string) $value->getZorgRegistratieNummerVanDeActiegroep(), (string) $value->getZorgRegistratieNummerVanDeActieregel(), (string) $value->getZorgRegistratieNummerVanDeAnalyse(), (string) $value->getZorgRegistratieNummerVanDeSubanalyse(), (string) $value->getZorgRegistratieNummerVanDeAanleiding(), (string) $value->getZorgRegistratieNummerVanDeSubaanleiding()));
            } elseif (is_array($value) && count($value) === 7) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4], (string) $value[5], (string) $value[6]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsCodestelselZrsOnderlingVerband object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsCodestelselZrsOnderlingVerbandPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsCodestelselZrsOnderlingVerband Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsCodestelselZrsOnderlingVerbandPeer::$instances[$key])) {
                return GsCodestelselZrsOnderlingVerbandPeer::$instances[$key];
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
        foreach (GsCodestelselZrsOnderlingVerbandPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsCodestelselZrsOnderlingVerbandPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_codestelsel_zrs_onderling_verband
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
        if ($row[$startcol + 2] === null && $row[$startcol + 3] === null && $row[$startcol + 4] === null && $row[$startcol + 5] === null && $row[$startcol + 6] === null && $row[$startcol + 7] === null && $row[$startcol + 8] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 4], (string) $row[$startcol + 5], (string) $row[$startcol + 6], (string) $row[$startcol + 7], (string) $row[$startcol + 8]));
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

        return array((int) $row[$startcol + 2], (int) $row[$startcol + 3], (int) $row[$startcol + 4], (int) $row[$startcol + 5], (int) $row[$startcol + 6], (int) $row[$startcol + 7], (int) $row[$startcol + 8]);
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
        $cls = GsCodestelselZrsOnderlingVerbandPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsCodestelselZrsOnderlingVerbandPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsCodestelselZrsOnderlingVerbandPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsCodestelselZrsOnderlingVerbandPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsCodestelselZrsOnderlingVerband object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsCodestelselZrsOnderlingVerbandPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsCodestelselZrsOnderlingVerbandPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsCodestelselZrsOnderlingVerbandPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsCodestelselZrsOnderlingVerbandPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsCodestelselZrsOnderlingVerbandPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME)->getTable(GsCodestelselZrsOnderlingVerbandPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsCodestelselZrsOnderlingVerbandPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsCodestelselZrsOnderlingVerbandTableMap());
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
        return GsCodestelselZrsOnderlingVerbandPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsCodestelselZrsOnderlingVerband or Criteria object.
     *
     * @param      mixed $values Criteria or GsCodestelselZrsOnderlingVerband object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsCodestelselZrsOnderlingVerband object
        }


        // Set the correct dbName
        $criteria->setDbName(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsCodestelselZrsOnderlingVerband or Criteria object.
     *
     * @param      mixed $values Criteria or GsCodestelselZrsOnderlingVerband object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE);
            $value = $criteria->remove(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE);
            if ($value) {
                $selectCriteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsCodestelselZrsOnderlingVerbandPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP);
            $value = $criteria->remove(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP);
            if ($value) {
                $selectCriteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsCodestelselZrsOnderlingVerbandPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL);
            $value = $criteria->remove(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL);
            if ($value) {
                $selectCriteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsCodestelselZrsOnderlingVerbandPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE);
            $value = $criteria->remove(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE);
            if ($value) {
                $selectCriteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsCodestelselZrsOnderlingVerbandPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE);
            $value = $criteria->remove(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE);
            if ($value) {
                $selectCriteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsCodestelselZrsOnderlingVerbandPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING);
            $value = $criteria->remove(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING);
            if ($value) {
                $selectCriteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsCodestelselZrsOnderlingVerbandPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING);
            $value = $criteria->remove(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING);
            if ($value) {
                $selectCriteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsCodestelselZrsOnderlingVerbandPeer::TABLE_NAME);
            }

        } else { // $values is GsCodestelselZrsOnderlingVerband object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_codestelsel_zrs_onderling_verband table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsCodestelselZrsOnderlingVerbandPeer::TABLE_NAME, $con, GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsCodestelselZrsOnderlingVerbandPeer::clearInstancePool();
            GsCodestelselZrsOnderlingVerbandPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsCodestelselZrsOnderlingVerband or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsCodestelselZrsOnderlingVerband object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsCodestelselZrsOnderlingVerbandPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsCodestelselZrsOnderlingVerband) { // it's a model object
            // invalidate the cache for this single object
            GsCodestelselZrsOnderlingVerbandPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING, $value[5]));
                $criterion->addAnd($criteria->getNewCriterion(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING, $value[6]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsCodestelselZrsOnderlingVerbandPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsCodestelselZrsOnderlingVerbandPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsCodestelselZrsOnderlingVerband object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsCodestelselZrsOnderlingVerband $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsCodestelselZrsOnderlingVerbandPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME, GsCodestelselZrsOnderlingVerbandPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $zorg_registratie_nummer_van_de_actie
     * @param   int $zorg_registratie_nummer_van_de_actiegroep
     * @param   int $zorg_registratie_nummer_van_de_actieregel
     * @param   int $zorg_registratie_nummer_van_de_analyse
     * @param   int $zorg_registratie_nummer_van_de_subanalyse
     * @param   int $zorg_registratie_nummer_van_de_aanleiding
     * @param   int $zorg_registratie_nummer_van_de_subaanleiding
     * @param      PropelPDO $con
     * @return GsCodestelselZrsOnderlingVerband
     */
    public static function retrieveByPK($zorg_registratie_nummer_van_de_actie, $zorg_registratie_nummer_van_de_actiegroep, $zorg_registratie_nummer_van_de_actieregel, $zorg_registratie_nummer_van_de_analyse, $zorg_registratie_nummer_van_de_subanalyse, $zorg_registratie_nummer_van_de_aanleiding, $zorg_registratie_nummer_van_de_subaanleiding, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $zorg_registratie_nummer_van_de_actie, (string) $zorg_registratie_nummer_van_de_actiegroep, (string) $zorg_registratie_nummer_van_de_actieregel, (string) $zorg_registratie_nummer_van_de_analyse, (string) $zorg_registratie_nummer_van_de_subanalyse, (string) $zorg_registratie_nummer_van_de_aanleiding, (string) $zorg_registratie_nummer_van_de_subaanleiding));
         if (null !== ($obj = GsCodestelselZrsOnderlingVerbandPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsCodestelselZrsOnderlingVerbandPeer::DATABASE_NAME);
        $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIE, $zorg_registratie_nummer_van_de_actie);
        $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEGROEP, $zorg_registratie_nummer_van_de_actiegroep);
        $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $zorg_registratie_nummer_van_de_actieregel);
        $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ANALYSE, $zorg_registratie_nummer_van_de_analyse);
        $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBANALYSE, $zorg_registratie_nummer_van_de_subanalyse);
        $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_AANLEIDING, $zorg_registratie_nummer_van_de_aanleiding);
        $criteria->add(GsCodestelselZrsOnderlingVerbandPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_SUBAANLEIDING, $zorg_registratie_nummer_van_de_subaanleiding);
        $v = GsCodestelselZrsOnderlingVerbandPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsCodestelselZrsOnderlingVerbandPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsCodestelselZrsOnderlingVerbandPeer::buildTableMap();

