<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesGegevens;
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesGegevensPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsInteractiesGegevensTableMap;

abstract class BaseGsInteractiesGegevensPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_interacties_gegevens';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsInteractiesGegevens';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsInteractiesGegevensTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 18;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 18;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_interacties_gegevens.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_interacties_gegevens.mutatiekode';

    /** the column name for the interactiewaarschuwing_code field */
    const INTERACTIEWAARSCHUWING_CODE = 'gs_interacties_gegevens.interactiewaarschuwing_code';

    /** the column name for the datum_vastlegging field */
    const DATUM_VASTLEGGING = 'gs_interacties_gegevens.datum_vastlegging';

    /** the column name for the datum_opname_in_gstandaard field */
    const DATUM_OPNAME_IN_GSTANDAARD = 'gs_interacties_gegevens.datum_opname_in_gstandaard';

    /** the column name for the datum_laaste_mutatie_in_gstandaard field */
    const DATUM_LAASTE_MUTATIE_IN_GSTANDAARD = 'gs_interacties_gegevens.datum_laaste_mutatie_in_gstandaard';

    /** the column name for the code_onderbouwing_bewijslast_bij_interactie field */
    const CODE_ONDERBOUWING_BEWIJSLAST_BIJ_INTERACTIE = 'gs_interacties_gegevens.code_onderbouwing_bewijslast_bij_interactie';

    /** the column name for the code_ernst_van_potentieel_effect_bij_interactie field */
    const CODE_ERNST_VAN_POTENTIEEL_EFFECT_BIJ_INTERACTIE = 'gs_interacties_gegevens.code_ernst_van_potentieel_effect_bij_interactie';

    /** the column name for the omschrijving_interactiewaarschuwing field */
    const OMSCHRIJVING_INTERACTIEWAARSCHUWING = 'gs_interacties_gegevens.omschrijving_interactiewaarschuwing';

    /** the column name for the interactiefolderthesaurus_128 field */
    const INTERACTIEFOLDERTHESAURUS_128 = 'gs_interacties_gegevens.interactiefolderthesaurus_128';

    /** the column name for the folder field */
    const FOLDER = 'gs_interacties_gegevens.folder';

    /** the column name for the interactie field */
    const INTERACTIE = 'gs_interacties_gegevens.interactie';

    /** the column name for the vervolg_actie field */
    const VERVOLG_ACTIE = 'gs_interacties_gegevens.vervolg_actie';

    /** the column name for the ia_te_volgen_door_monitoren field */
    const IA_TE_VOLGEN_DOOR_MONITOREN = 'gs_interacties_gegevens.ia_te_volgen_door_monitoren';

    /** the column name for the ook_bij_staken_van_het_voorschrift field */
    const OOK_BIJ_STAKEN_VAN_HET_VOORSCHRIFT = 'gs_interacties_gegevens.ook_bij_staken_van_het_voorschrift';

    /** the column name for the afhandeling_voorschrijver field */
    const AFHANDELING_VOORSCHRIJVER = 'gs_interacties_gegevens.afhandeling_voorschrijver';

    /** the column name for the afhandeling_balie_in_apotheek field */
    const AFHANDELING_BALIE_IN_APOTHEEK = 'gs_interacties_gegevens.afhandeling_balie_in_apotheek';

    /** the column name for the afhandeling_farmaceutisch_specialist field */
    const AFHANDELING_FARMACEUTISCH_SPECIALIST = 'gs_interacties_gegevens.afhandeling_farmaceutisch_specialist';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsInteractiesGegevens objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsInteractiesGegevens[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsInteractiesGegevensPeer::$fieldNames[GsInteractiesGegevensPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'InteractiewaarschuwingCode', 'DatumVastlegging', 'DatumOpnameInGstandaard', 'DatumLaasteMutatieInGstandaard', 'CodeOnderbouwingBewijslastBijInteractie', 'CodeErnstVanPotentieelEffectBijInteractie', 'OmschrijvingInteractiewaarschuwing', 'Interactiefolderthesaurus128', 'Folder', 'Interactie', 'VervolgActie', 'IaTeVolgenDoorMonitoren', 'OokBijStakenVanHetVoorschrift', 'AfhandelingVoorschrijver', 'AfhandelingBalieInApotheek', 'AfhandelingFarmaceutischSpecialist', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'interactiewaarschuwingCode', 'datumVastlegging', 'datumOpnameInGstandaard', 'datumLaasteMutatieInGstandaard', 'codeOnderbouwingBewijslastBijInteractie', 'codeErnstVanPotentieelEffectBijInteractie', 'omschrijvingInteractiewaarschuwing', 'interactiefolderthesaurus128', 'folder', 'interactie', 'vervolgActie', 'iaTeVolgenDoorMonitoren', 'ookBijStakenVanHetVoorschrift', 'afhandelingVoorschrijver', 'afhandelingBalieInApotheek', 'afhandelingFarmaceutischSpecialist', ),
        BasePeer::TYPE_COLNAME => array (GsInteractiesGegevensPeer::BESTANDNUMMER, GsInteractiesGegevensPeer::MUTATIEKODE, GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE, GsInteractiesGegevensPeer::DATUM_VASTLEGGING, GsInteractiesGegevensPeer::DATUM_OPNAME_IN_GSTANDAARD, GsInteractiesGegevensPeer::DATUM_LAASTE_MUTATIE_IN_GSTANDAARD, GsInteractiesGegevensPeer::CODE_ONDERBOUWING_BEWIJSLAST_BIJ_INTERACTIE, GsInteractiesGegevensPeer::CODE_ERNST_VAN_POTENTIEEL_EFFECT_BIJ_INTERACTIE, GsInteractiesGegevensPeer::OMSCHRIJVING_INTERACTIEWAARSCHUWING, GsInteractiesGegevensPeer::INTERACTIEFOLDERTHESAURUS_128, GsInteractiesGegevensPeer::FOLDER, GsInteractiesGegevensPeer::INTERACTIE, GsInteractiesGegevensPeer::VERVOLG_ACTIE, GsInteractiesGegevensPeer::IA_TE_VOLGEN_DOOR_MONITOREN, GsInteractiesGegevensPeer::OOK_BIJ_STAKEN_VAN_HET_VOORSCHRIFT, GsInteractiesGegevensPeer::AFHANDELING_VOORSCHRIJVER, GsInteractiesGegevensPeer::AFHANDELING_BALIE_IN_APOTHEEK, GsInteractiesGegevensPeer::AFHANDELING_FARMACEUTISCH_SPECIALIST, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'INTERACTIEWAARSCHUWING_CODE', 'DATUM_VASTLEGGING', 'DATUM_OPNAME_IN_GSTANDAARD', 'DATUM_LAASTE_MUTATIE_IN_GSTANDAARD', 'CODE_ONDERBOUWING_BEWIJSLAST_BIJ_INTERACTIE', 'CODE_ERNST_VAN_POTENTIEEL_EFFECT_BIJ_INTERACTIE', 'OMSCHRIJVING_INTERACTIEWAARSCHUWING', 'INTERACTIEFOLDERTHESAURUS_128', 'FOLDER', 'INTERACTIE', 'VERVOLG_ACTIE', 'IA_TE_VOLGEN_DOOR_MONITOREN', 'OOK_BIJ_STAKEN_VAN_HET_VOORSCHRIFT', 'AFHANDELING_VOORSCHRIJVER', 'AFHANDELING_BALIE_IN_APOTHEEK', 'AFHANDELING_FARMACEUTISCH_SPECIALIST', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'interactiewaarschuwing_code', 'datum_vastlegging', 'datum_opname_in_gstandaard', 'datum_laaste_mutatie_in_gstandaard', 'code_onderbouwing_bewijslast_bij_interactie', 'code_ernst_van_potentieel_effect_bij_interactie', 'omschrijving_interactiewaarschuwing', 'interactiefolderthesaurus_128', 'folder', 'interactie', 'vervolg_actie', 'ia_te_volgen_door_monitoren', 'ook_bij_staken_van_het_voorschrift', 'afhandeling_voorschrijver', 'afhandeling_balie_in_apotheek', 'afhandeling_farmaceutisch_specialist', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsInteractiesGegevensPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'InteractiewaarschuwingCode' => 2, 'DatumVastlegging' => 3, 'DatumOpnameInGstandaard' => 4, 'DatumLaasteMutatieInGstandaard' => 5, 'CodeOnderbouwingBewijslastBijInteractie' => 6, 'CodeErnstVanPotentieelEffectBijInteractie' => 7, 'OmschrijvingInteractiewaarschuwing' => 8, 'Interactiefolderthesaurus128' => 9, 'Folder' => 10, 'Interactie' => 11, 'VervolgActie' => 12, 'IaTeVolgenDoorMonitoren' => 13, 'OokBijStakenVanHetVoorschrift' => 14, 'AfhandelingVoorschrijver' => 15, 'AfhandelingBalieInApotheek' => 16, 'AfhandelingFarmaceutischSpecialist' => 17, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'interactiewaarschuwingCode' => 2, 'datumVastlegging' => 3, 'datumOpnameInGstandaard' => 4, 'datumLaasteMutatieInGstandaard' => 5, 'codeOnderbouwingBewijslastBijInteractie' => 6, 'codeErnstVanPotentieelEffectBijInteractie' => 7, 'omschrijvingInteractiewaarschuwing' => 8, 'interactiefolderthesaurus128' => 9, 'folder' => 10, 'interactie' => 11, 'vervolgActie' => 12, 'iaTeVolgenDoorMonitoren' => 13, 'ookBijStakenVanHetVoorschrift' => 14, 'afhandelingVoorschrijver' => 15, 'afhandelingBalieInApotheek' => 16, 'afhandelingFarmaceutischSpecialist' => 17, ),
        BasePeer::TYPE_COLNAME => array (GsInteractiesGegevensPeer::BESTANDNUMMER => 0, GsInteractiesGegevensPeer::MUTATIEKODE => 1, GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE => 2, GsInteractiesGegevensPeer::DATUM_VASTLEGGING => 3, GsInteractiesGegevensPeer::DATUM_OPNAME_IN_GSTANDAARD => 4, GsInteractiesGegevensPeer::DATUM_LAASTE_MUTATIE_IN_GSTANDAARD => 5, GsInteractiesGegevensPeer::CODE_ONDERBOUWING_BEWIJSLAST_BIJ_INTERACTIE => 6, GsInteractiesGegevensPeer::CODE_ERNST_VAN_POTENTIEEL_EFFECT_BIJ_INTERACTIE => 7, GsInteractiesGegevensPeer::OMSCHRIJVING_INTERACTIEWAARSCHUWING => 8, GsInteractiesGegevensPeer::INTERACTIEFOLDERTHESAURUS_128 => 9, GsInteractiesGegevensPeer::FOLDER => 10, GsInteractiesGegevensPeer::INTERACTIE => 11, GsInteractiesGegevensPeer::VERVOLG_ACTIE => 12, GsInteractiesGegevensPeer::IA_TE_VOLGEN_DOOR_MONITOREN => 13, GsInteractiesGegevensPeer::OOK_BIJ_STAKEN_VAN_HET_VOORSCHRIFT => 14, GsInteractiesGegevensPeer::AFHANDELING_VOORSCHRIJVER => 15, GsInteractiesGegevensPeer::AFHANDELING_BALIE_IN_APOTHEEK => 16, GsInteractiesGegevensPeer::AFHANDELING_FARMACEUTISCH_SPECIALIST => 17, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'INTERACTIEWAARSCHUWING_CODE' => 2, 'DATUM_VASTLEGGING' => 3, 'DATUM_OPNAME_IN_GSTANDAARD' => 4, 'DATUM_LAASTE_MUTATIE_IN_GSTANDAARD' => 5, 'CODE_ONDERBOUWING_BEWIJSLAST_BIJ_INTERACTIE' => 6, 'CODE_ERNST_VAN_POTENTIEEL_EFFECT_BIJ_INTERACTIE' => 7, 'OMSCHRIJVING_INTERACTIEWAARSCHUWING' => 8, 'INTERACTIEFOLDERTHESAURUS_128' => 9, 'FOLDER' => 10, 'INTERACTIE' => 11, 'VERVOLG_ACTIE' => 12, 'IA_TE_VOLGEN_DOOR_MONITOREN' => 13, 'OOK_BIJ_STAKEN_VAN_HET_VOORSCHRIFT' => 14, 'AFHANDELING_VOORSCHRIJVER' => 15, 'AFHANDELING_BALIE_IN_APOTHEEK' => 16, 'AFHANDELING_FARMACEUTISCH_SPECIALIST' => 17, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'interactiewaarschuwing_code' => 2, 'datum_vastlegging' => 3, 'datum_opname_in_gstandaard' => 4, 'datum_laaste_mutatie_in_gstandaard' => 5, 'code_onderbouwing_bewijslast_bij_interactie' => 6, 'code_ernst_van_potentieel_effect_bij_interactie' => 7, 'omschrijving_interactiewaarschuwing' => 8, 'interactiefolderthesaurus_128' => 9, 'folder' => 10, 'interactie' => 11, 'vervolg_actie' => 12, 'ia_te_volgen_door_monitoren' => 13, 'ook_bij_staken_van_het_voorschrift' => 14, 'afhandeling_voorschrijver' => 15, 'afhandeling_balie_in_apotheek' => 16, 'afhandeling_farmaceutisch_specialist' => 17, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
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
        $toNames = GsInteractiesGegevensPeer::getFieldNames($toType);
        $key = isset(GsInteractiesGegevensPeer::$fieldKeys[$fromType][$name]) ? GsInteractiesGegevensPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsInteractiesGegevensPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsInteractiesGegevensPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsInteractiesGegevensPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsInteractiesGegevensPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsInteractiesGegevensPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsInteractiesGegevensPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsInteractiesGegevensPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE);
            $criteria->addSelectColumn(GsInteractiesGegevensPeer::DATUM_VASTLEGGING);
            $criteria->addSelectColumn(GsInteractiesGegevensPeer::DATUM_OPNAME_IN_GSTANDAARD);
            $criteria->addSelectColumn(GsInteractiesGegevensPeer::DATUM_LAASTE_MUTATIE_IN_GSTANDAARD);
            $criteria->addSelectColumn(GsInteractiesGegevensPeer::CODE_ONDERBOUWING_BEWIJSLAST_BIJ_INTERACTIE);
            $criteria->addSelectColumn(GsInteractiesGegevensPeer::CODE_ERNST_VAN_POTENTIEEL_EFFECT_BIJ_INTERACTIE);
            $criteria->addSelectColumn(GsInteractiesGegevensPeer::OMSCHRIJVING_INTERACTIEWAARSCHUWING);
            $criteria->addSelectColumn(GsInteractiesGegevensPeer::INTERACTIEFOLDERTHESAURUS_128);
            $criteria->addSelectColumn(GsInteractiesGegevensPeer::FOLDER);
            $criteria->addSelectColumn(GsInteractiesGegevensPeer::INTERACTIE);
            $criteria->addSelectColumn(GsInteractiesGegevensPeer::VERVOLG_ACTIE);
            $criteria->addSelectColumn(GsInteractiesGegevensPeer::IA_TE_VOLGEN_DOOR_MONITOREN);
            $criteria->addSelectColumn(GsInteractiesGegevensPeer::OOK_BIJ_STAKEN_VAN_HET_VOORSCHRIFT);
            $criteria->addSelectColumn(GsInteractiesGegevensPeer::AFHANDELING_VOORSCHRIJVER);
            $criteria->addSelectColumn(GsInteractiesGegevensPeer::AFHANDELING_BALIE_IN_APOTHEEK);
            $criteria->addSelectColumn(GsInteractiesGegevensPeer::AFHANDELING_FARMACEUTISCH_SPECIALIST);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.interactiewaarschuwing_code');
            $criteria->addSelectColumn($alias . '.datum_vastlegging');
            $criteria->addSelectColumn($alias . '.datum_opname_in_gstandaard');
            $criteria->addSelectColumn($alias . '.datum_laaste_mutatie_in_gstandaard');
            $criteria->addSelectColumn($alias . '.code_onderbouwing_bewijslast_bij_interactie');
            $criteria->addSelectColumn($alias . '.code_ernst_van_potentieel_effect_bij_interactie');
            $criteria->addSelectColumn($alias . '.omschrijving_interactiewaarschuwing');
            $criteria->addSelectColumn($alias . '.interactiefolderthesaurus_128');
            $criteria->addSelectColumn($alias . '.folder');
            $criteria->addSelectColumn($alias . '.interactie');
            $criteria->addSelectColumn($alias . '.vervolg_actie');
            $criteria->addSelectColumn($alias . '.ia_te_volgen_door_monitoren');
            $criteria->addSelectColumn($alias . '.ook_bij_staken_van_het_voorschrift');
            $criteria->addSelectColumn($alias . '.afhandeling_voorschrijver');
            $criteria->addSelectColumn($alias . '.afhandeling_balie_in_apotheek');
            $criteria->addSelectColumn($alias . '.afhandeling_farmaceutisch_specialist');
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
        $criteria->setPrimaryTableName(GsInteractiesGegevensPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsInteractiesGegevensPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsInteractiesGegevensPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsInteractiesGegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsInteractiesGegevens
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsInteractiesGegevensPeer::doSelect($critcopy, $con);
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
        return GsInteractiesGegevensPeer::populateObjects(GsInteractiesGegevensPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsInteractiesGegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsInteractiesGegevensPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsInteractiesGegevensPeer::DATABASE_NAME);

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
     * @param GsInteractiesGegevens $obj A GsInteractiesGegevens object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getInteractiewaarschuwingCode();
            } // if key === null
            GsInteractiesGegevensPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsInteractiesGegevens object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsInteractiesGegevens) {
                $key = (string) $value->getInteractiewaarschuwingCode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsInteractiesGegevens object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsInteractiesGegevensPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsInteractiesGegevens Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsInteractiesGegevensPeer::$instances[$key])) {
                return GsInteractiesGegevensPeer::$instances[$key];
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
        foreach (GsInteractiesGegevensPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsInteractiesGegevensPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_interacties_gegevens
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
        $cls = GsInteractiesGegevensPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsInteractiesGegevensPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsInteractiesGegevensPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsInteractiesGegevensPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsInteractiesGegevens object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsInteractiesGegevensPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsInteractiesGegevensPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsInteractiesGegevensPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsInteractiesGegevensPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsInteractiesGegevensPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsInteractiesGegevensPeer::DATABASE_NAME)->getTable(GsInteractiesGegevensPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsInteractiesGegevensPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsInteractiesGegevensPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsInteractiesGegevensTableMap());
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
        return GsInteractiesGegevensPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsInteractiesGegevens or Criteria object.
     *
     * @param      mixed $values Criteria or GsInteractiesGegevens object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsInteractiesGegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsInteractiesGegevens object
        }


        // Set the correct dbName
        $criteria->setDbName(GsInteractiesGegevensPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsInteractiesGegevens or Criteria object.
     *
     * @param      mixed $values Criteria or GsInteractiesGegevens object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsInteractiesGegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsInteractiesGegevensPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE);
            $value = $criteria->remove(GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE);
            if ($value) {
                $selectCriteria->add(GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsInteractiesGegevensPeer::TABLE_NAME);
            }

        } else { // $values is GsInteractiesGegevens object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsInteractiesGegevensPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_interacties_gegevens table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsInteractiesGegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsInteractiesGegevensPeer::TABLE_NAME, $con, GsInteractiesGegevensPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsInteractiesGegevensPeer::clearInstancePool();
            GsInteractiesGegevensPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsInteractiesGegevens or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsInteractiesGegevens object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsInteractiesGegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsInteractiesGegevensPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsInteractiesGegevens) { // it's a model object
            // invalidate the cache for this single object
            GsInteractiesGegevensPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsInteractiesGegevensPeer::DATABASE_NAME);
            $criteria->add(GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsInteractiesGegevensPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsInteractiesGegevensPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsInteractiesGegevensPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsInteractiesGegevens object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsInteractiesGegevens $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsInteractiesGegevensPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsInteractiesGegevensPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsInteractiesGegevensPeer::DATABASE_NAME, GsInteractiesGegevensPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsInteractiesGegevens
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsInteractiesGegevensPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsInteractiesGegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsInteractiesGegevensPeer::DATABASE_NAME);
        $criteria->add(GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE, $pk);

        $v = GsInteractiesGegevensPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsInteractiesGegevens[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsInteractiesGegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsInteractiesGegevensPeer::DATABASE_NAME);
            $criteria->add(GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE, $pks, Criteria::IN);
            $objs = GsInteractiesGegevensPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsInteractiesGegevensPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsInteractiesGegevensPeer::buildTableMap();

