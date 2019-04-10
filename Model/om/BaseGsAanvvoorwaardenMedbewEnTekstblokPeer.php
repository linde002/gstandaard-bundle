<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsAanvvoorwaardenMedbewEnTekstblok;
use PharmaIntelligence\GstandaardBundle\Model\GsAanvvoorwaardenMedbewEnTekstblokPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsAanvvoorwaardenMedbewEnTekstblokTableMap;

abstract class BaseGsAanvvoorwaardenMedbewEnTekstblokPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_aanvvoorwaarden_medbew_en_tekstblok';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAanvvoorwaardenMedbewEnTekstblok';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsAanvvoorwaardenMedbewEnTekstblokTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_aanvvoorwaarden_medbew_en_tekstblok.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_aanvvoorwaarden_medbew_en_tekstblok.mutatiekode';

    /** the column name for the thesnr_bewakingssoort field */
    const THESNR_BEWAKINGSSOORT = 'gs_aanvvoorwaarden_medbew_en_tekstblok.thesnr_bewakingssoort';

    /** the column name for the bewakingssoort field */
    const BEWAKINGSSOORT = 'gs_aanvvoorwaarden_medbew_en_tekstblok.bewakingssoort';

    /** the column name for the medicatiebewaking_identificerende_code field */
    const MEDICATIEBEWAKING_IDENTIFICERENDE_CODE = 'gs_aanvvoorwaarden_medbew_en_tekstblok.medicatiebewaking_identificerende_code';

    /** the column name for the thesaurus_verwijzing_tekstmodule field */
    const THESAURUS_VERWIJZING_TEKSTMODULE = 'gs_aanvvoorwaarden_medbew_en_tekstblok.thesaurus_verwijzing_tekstmodule';

    /** the column name for the tekstmodule field */
    const TEKSTMODULE = 'gs_aanvvoorwaarden_medbew_en_tekstblok.tekstmodule';

    /** the column name for the thesaurus_verwijzing_tekstsoort field */
    const THESAURUS_VERWIJZING_TEKSTSOORT = 'gs_aanvvoorwaarden_medbew_en_tekstblok.thesaurus_verwijzing_tekstsoort';

    /** the column name for the tekstsoort field */
    const TEKSTSOORT = 'gs_aanvvoorwaarden_medbew_en_tekstblok.tekstsoort';

    /** the column name for the tekstbloknummer field */
    const TEKSTBLOKNUMMER = 'gs_aanvvoorwaarden_medbew_en_tekstblok.tekstbloknummer';

    /** the column name for the thesaurusverwijzing_aanvullende_voorwaarde field */
    const THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE = 'gs_aanvvoorwaarden_medbew_en_tekstblok.thesaurusverwijzing_aanvullende_voorwaarde';

    /** the column name for the medicatiebewaking_aanvullende_voorwaarde field */
    const MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE = 'gs_aanvvoorwaarden_medbew_en_tekstblok.medicatiebewaking_aanvullende_voorwaarde';

    /** the column name for the codering_waarde_1_alfanumeriek field */
    const CODERING_WAARDE_1_ALFANUMERIEK = 'gs_aanvvoorwaarden_medbew_en_tekstblok.codering_waarde_1_alfanumeriek';

    /** the column name for the codering_waarde_2_numeriek field */
    const CODERING_WAARDE_2_NUMERIEK = 'gs_aanvvoorwaarden_medbew_en_tekstblok.codering_waarde_2_numeriek';

    /** the column name for the codering_waarde_3_numeriek field */
    const CODERING_WAARDE_3_NUMERIEK = 'gs_aanvvoorwaarden_medbew_en_tekstblok.codering_waarde_3_numeriek';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsAanvvoorwaardenMedbewEnTekstblok objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsAanvvoorwaardenMedbewEnTekstblok[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsAanvvoorwaardenMedbewEnTekstblokPeer::$fieldNames[GsAanvvoorwaardenMedbewEnTekstblokPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'ThesnrBewakingssoort', 'Bewakingssoort', 'MedicatiebewakingIdentificerendeCode', 'ThesaurusVerwijzingTekstmodule', 'Tekstmodule', 'ThesaurusVerwijzingTekstsoort', 'Tekstsoort', 'Tekstbloknummer', 'ThesaurusverwijzingAanvullendeVoorwaarde', 'MedicatiebewakingAanvullendeVoorwaarde', 'CoderingWaarde1Alfanumeriek', 'CoderingWaarde2Numeriek', 'CoderingWaarde3Numeriek', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'thesnrBewakingssoort', 'bewakingssoort', 'medicatiebewakingIdentificerendeCode', 'thesaurusVerwijzingTekstmodule', 'tekstmodule', 'thesaurusVerwijzingTekstsoort', 'tekstsoort', 'tekstbloknummer', 'thesaurusverwijzingAanvullendeVoorwaarde', 'medicatiebewakingAanvullendeVoorwaarde', 'coderingWaarde1Alfanumeriek', 'coderingWaarde2Numeriek', 'coderingWaarde3Numeriek', ),
        BasePeer::TYPE_COLNAME => array (GsAanvvoorwaardenMedbewEnTekstblokPeer::BESTANDNUMMER, GsAanvvoorwaardenMedbewEnTekstblokPeer::MUTATIEKODE, GsAanvvoorwaardenMedbewEnTekstblokPeer::THESNR_BEWAKINGSSOORT, GsAanvvoorwaardenMedbewEnTekstblokPeer::BEWAKINGSSOORT, GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, GsAanvvoorwaardenMedbewEnTekstblokPeer::THESAURUS_VERWIJZING_TEKSTMODULE, GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTMODULE, GsAanvvoorwaardenMedbewEnTekstblokPeer::THESAURUS_VERWIJZING_TEKSTSOORT, GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTSOORT, GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTBLOKNUMMER, GsAanvvoorwaardenMedbewEnTekstblokPeer::THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE, GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_1_ALFANUMERIEK, GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_2_NUMERIEK, GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_3_NUMERIEK, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'THESNR_BEWAKINGSSOORT', 'BEWAKINGSSOORT', 'MEDICATIEBEWAKING_IDENTIFICERENDE_CODE', 'THESAURUS_VERWIJZING_TEKSTMODULE', 'TEKSTMODULE', 'THESAURUS_VERWIJZING_TEKSTSOORT', 'TEKSTSOORT', 'TEKSTBLOKNUMMER', 'THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE', 'MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE', 'CODERING_WAARDE_1_ALFANUMERIEK', 'CODERING_WAARDE_2_NUMERIEK', 'CODERING_WAARDE_3_NUMERIEK', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'thesnr_bewakingssoort', 'bewakingssoort', 'medicatiebewaking_identificerende_code', 'thesaurus_verwijzing_tekstmodule', 'tekstmodule', 'thesaurus_verwijzing_tekstsoort', 'tekstsoort', 'tekstbloknummer', 'thesaurusverwijzing_aanvullende_voorwaarde', 'medicatiebewaking_aanvullende_voorwaarde', 'codering_waarde_1_alfanumeriek', 'codering_waarde_2_numeriek', 'codering_waarde_3_numeriek', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsAanvvoorwaardenMedbewEnTekstblokPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'ThesnrBewakingssoort' => 2, 'Bewakingssoort' => 3, 'MedicatiebewakingIdentificerendeCode' => 4, 'ThesaurusVerwijzingTekstmodule' => 5, 'Tekstmodule' => 6, 'ThesaurusVerwijzingTekstsoort' => 7, 'Tekstsoort' => 8, 'Tekstbloknummer' => 9, 'ThesaurusverwijzingAanvullendeVoorwaarde' => 10, 'MedicatiebewakingAanvullendeVoorwaarde' => 11, 'CoderingWaarde1Alfanumeriek' => 12, 'CoderingWaarde2Numeriek' => 13, 'CoderingWaarde3Numeriek' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'thesnrBewakingssoort' => 2, 'bewakingssoort' => 3, 'medicatiebewakingIdentificerendeCode' => 4, 'thesaurusVerwijzingTekstmodule' => 5, 'tekstmodule' => 6, 'thesaurusVerwijzingTekstsoort' => 7, 'tekstsoort' => 8, 'tekstbloknummer' => 9, 'thesaurusverwijzingAanvullendeVoorwaarde' => 10, 'medicatiebewakingAanvullendeVoorwaarde' => 11, 'coderingWaarde1Alfanumeriek' => 12, 'coderingWaarde2Numeriek' => 13, 'coderingWaarde3Numeriek' => 14, ),
        BasePeer::TYPE_COLNAME => array (GsAanvvoorwaardenMedbewEnTekstblokPeer::BESTANDNUMMER => 0, GsAanvvoorwaardenMedbewEnTekstblokPeer::MUTATIEKODE => 1, GsAanvvoorwaardenMedbewEnTekstblokPeer::THESNR_BEWAKINGSSOORT => 2, GsAanvvoorwaardenMedbewEnTekstblokPeer::BEWAKINGSSOORT => 3, GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE => 4, GsAanvvoorwaardenMedbewEnTekstblokPeer::THESAURUS_VERWIJZING_TEKSTMODULE => 5, GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTMODULE => 6, GsAanvvoorwaardenMedbewEnTekstblokPeer::THESAURUS_VERWIJZING_TEKSTSOORT => 7, GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTSOORT => 8, GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTBLOKNUMMER => 9, GsAanvvoorwaardenMedbewEnTekstblokPeer::THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE => 10, GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE => 11, GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_1_ALFANUMERIEK => 12, GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_2_NUMERIEK => 13, GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_3_NUMERIEK => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'THESNR_BEWAKINGSSOORT' => 2, 'BEWAKINGSSOORT' => 3, 'MEDICATIEBEWAKING_IDENTIFICERENDE_CODE' => 4, 'THESAURUS_VERWIJZING_TEKSTMODULE' => 5, 'TEKSTMODULE' => 6, 'THESAURUS_VERWIJZING_TEKSTSOORT' => 7, 'TEKSTSOORT' => 8, 'TEKSTBLOKNUMMER' => 9, 'THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE' => 10, 'MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE' => 11, 'CODERING_WAARDE_1_ALFANUMERIEK' => 12, 'CODERING_WAARDE_2_NUMERIEK' => 13, 'CODERING_WAARDE_3_NUMERIEK' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'thesnr_bewakingssoort' => 2, 'bewakingssoort' => 3, 'medicatiebewaking_identificerende_code' => 4, 'thesaurus_verwijzing_tekstmodule' => 5, 'tekstmodule' => 6, 'thesaurus_verwijzing_tekstsoort' => 7, 'tekstsoort' => 8, 'tekstbloknummer' => 9, 'thesaurusverwijzing_aanvullende_voorwaarde' => 10, 'medicatiebewaking_aanvullende_voorwaarde' => 11, 'codering_waarde_1_alfanumeriek' => 12, 'codering_waarde_2_numeriek' => 13, 'codering_waarde_3_numeriek' => 14, ),
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
        $toNames = GsAanvvoorwaardenMedbewEnTekstblokPeer::getFieldNames($toType);
        $key = isset(GsAanvvoorwaardenMedbewEnTekstblokPeer::$fieldKeys[$fromType][$name]) ? GsAanvvoorwaardenMedbewEnTekstblokPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsAanvvoorwaardenMedbewEnTekstblokPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsAanvvoorwaardenMedbewEnTekstblokPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsAanvvoorwaardenMedbewEnTekstblokPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsAanvvoorwaardenMedbewEnTekstblokPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsAanvvoorwaardenMedbewEnTekstblokPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsAanvvoorwaardenMedbewEnTekstblokPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsAanvvoorwaardenMedbewEnTekstblokPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsAanvvoorwaardenMedbewEnTekstblokPeer::THESNR_BEWAKINGSSOORT);
            $criteria->addSelectColumn(GsAanvvoorwaardenMedbewEnTekstblokPeer::BEWAKINGSSOORT);
            $criteria->addSelectColumn(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE);
            $criteria->addSelectColumn(GsAanvvoorwaardenMedbewEnTekstblokPeer::THESAURUS_VERWIJZING_TEKSTMODULE);
            $criteria->addSelectColumn(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTMODULE);
            $criteria->addSelectColumn(GsAanvvoorwaardenMedbewEnTekstblokPeer::THESAURUS_VERWIJZING_TEKSTSOORT);
            $criteria->addSelectColumn(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTSOORT);
            $criteria->addSelectColumn(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTBLOKNUMMER);
            $criteria->addSelectColumn(GsAanvvoorwaardenMedbewEnTekstblokPeer::THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE);
            $criteria->addSelectColumn(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE);
            $criteria->addSelectColumn(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_1_ALFANUMERIEK);
            $criteria->addSelectColumn(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_2_NUMERIEK);
            $criteria->addSelectColumn(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_3_NUMERIEK);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.thesnr_bewakingssoort');
            $criteria->addSelectColumn($alias . '.bewakingssoort');
            $criteria->addSelectColumn($alias . '.medicatiebewaking_identificerende_code');
            $criteria->addSelectColumn($alias . '.thesaurus_verwijzing_tekstmodule');
            $criteria->addSelectColumn($alias . '.tekstmodule');
            $criteria->addSelectColumn($alias . '.thesaurus_verwijzing_tekstsoort');
            $criteria->addSelectColumn($alias . '.tekstsoort');
            $criteria->addSelectColumn($alias . '.tekstbloknummer');
            $criteria->addSelectColumn($alias . '.thesaurusverwijzing_aanvullende_voorwaarde');
            $criteria->addSelectColumn($alias . '.medicatiebewaking_aanvullende_voorwaarde');
            $criteria->addSelectColumn($alias . '.codering_waarde_1_alfanumeriek');
            $criteria->addSelectColumn($alias . '.codering_waarde_2_numeriek');
            $criteria->addSelectColumn($alias . '.codering_waarde_3_numeriek');
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
        $criteria->setPrimaryTableName(GsAanvvoorwaardenMedbewEnTekstblokPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsAanvvoorwaardenMedbewEnTekstblokPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsAanvvoorwaardenMedbewEnTekstblok
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsAanvvoorwaardenMedbewEnTekstblokPeer::doSelect($critcopy, $con);
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
        return GsAanvvoorwaardenMedbewEnTekstblokPeer::populateObjects(GsAanvvoorwaardenMedbewEnTekstblokPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsAanvvoorwaardenMedbewEnTekstblokPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME);

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
     * @param GsAanvvoorwaardenMedbewEnTekstblok $obj A GsAanvvoorwaardenMedbewEnTekstblok object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getBewakingssoort(), (string) $obj->getMedicatiebewakingIdentificerendeCode(), (string) $obj->getTekstmodule(), (string) $obj->getTekstsoort(), (string) $obj->getTekstbloknummer(), (string) $obj->getMedicatiebewakingAanvullendeVoorwaarde(), (string) $obj->getCoderingWaarde1Alfanumeriek(), (string) $obj->getCoderingWaarde2Numeriek()));
            } // if key === null
            GsAanvvoorwaardenMedbewEnTekstblokPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsAanvvoorwaardenMedbewEnTekstblok object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsAanvvoorwaardenMedbewEnTekstblok) {
                $key = serialize(array((string) $value->getBewakingssoort(), (string) $value->getMedicatiebewakingIdentificerendeCode(), (string) $value->getTekstmodule(), (string) $value->getTekstsoort(), (string) $value->getTekstbloknummer(), (string) $value->getMedicatiebewakingAanvullendeVoorwaarde(), (string) $value->getCoderingWaarde1Alfanumeriek(), (string) $value->getCoderingWaarde2Numeriek()));
            } elseif (is_array($value) && count($value) === 8) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4], (string) $value[5], (string) $value[6], (string) $value[7]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsAanvvoorwaardenMedbewEnTekstblok object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsAanvvoorwaardenMedbewEnTekstblokPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsAanvvoorwaardenMedbewEnTekstblok Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsAanvvoorwaardenMedbewEnTekstblokPeer::$instances[$key])) {
                return GsAanvvoorwaardenMedbewEnTekstblokPeer::$instances[$key];
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
        foreach (GsAanvvoorwaardenMedbewEnTekstblokPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsAanvvoorwaardenMedbewEnTekstblokPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_aanvvoorwaarden_medbew_en_tekstblok
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
        if ($row[$startcol + 3] === null && $row[$startcol + 4] === null && $row[$startcol + 6] === null && $row[$startcol + 8] === null && $row[$startcol + 9] === null && $row[$startcol + 11] === null && $row[$startcol + 12] === null && $row[$startcol + 13] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 3], (string) $row[$startcol + 4], (string) $row[$startcol + 6], (string) $row[$startcol + 8], (string) $row[$startcol + 9], (string) $row[$startcol + 11], (string) $row[$startcol + 12], (string) $row[$startcol + 13]));
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

        return array((int) $row[$startcol + 3], (int) $row[$startcol + 4], (int) $row[$startcol + 6], (int) $row[$startcol + 8], (int) $row[$startcol + 9], (int) $row[$startcol + 11], (string) $row[$startcol + 12], (int) $row[$startcol + 13]);
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
        $cls = GsAanvvoorwaardenMedbewEnTekstblokPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsAanvvoorwaardenMedbewEnTekstblokPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsAanvvoorwaardenMedbewEnTekstblokPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsAanvvoorwaardenMedbewEnTekstblokPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsAanvvoorwaardenMedbewEnTekstblok object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsAanvvoorwaardenMedbewEnTekstblokPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsAanvvoorwaardenMedbewEnTekstblokPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsAanvvoorwaardenMedbewEnTekstblokPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsAanvvoorwaardenMedbewEnTekstblokPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsAanvvoorwaardenMedbewEnTekstblokPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME)->getTable(GsAanvvoorwaardenMedbewEnTekstblokPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsAanvvoorwaardenMedbewEnTekstblokPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsAanvvoorwaardenMedbewEnTekstblokTableMap());
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
        return GsAanvvoorwaardenMedbewEnTekstblokPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsAanvvoorwaardenMedbewEnTekstblok or Criteria object.
     *
     * @param      mixed $values Criteria or GsAanvvoorwaardenMedbewEnTekstblok object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsAanvvoorwaardenMedbewEnTekstblok object
        }


        // Set the correct dbName
        $criteria->setDbName(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsAanvvoorwaardenMedbewEnTekstblok or Criteria object.
     *
     * @param      mixed $values Criteria or GsAanvvoorwaardenMedbewEnTekstblok object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsAanvvoorwaardenMedbewEnTekstblokPeer::BEWAKINGSSOORT);
            $value = $criteria->remove(GsAanvvoorwaardenMedbewEnTekstblokPeer::BEWAKINGSSOORT);
            if ($value) {
                $selectCriteria->add(GsAanvvoorwaardenMedbewEnTekstblokPeer::BEWAKINGSSOORT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsAanvvoorwaardenMedbewEnTekstblokPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE);
            $value = $criteria->remove(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE);
            if ($value) {
                $selectCriteria->add(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsAanvvoorwaardenMedbewEnTekstblokPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTMODULE);
            $value = $criteria->remove(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTMODULE);
            if ($value) {
                $selectCriteria->add(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTMODULE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsAanvvoorwaardenMedbewEnTekstblokPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTSOORT);
            $value = $criteria->remove(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTSOORT);
            if ($value) {
                $selectCriteria->add(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTSOORT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsAanvvoorwaardenMedbewEnTekstblokPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTBLOKNUMMER);
            $value = $criteria->remove(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTBLOKNUMMER);
            if ($value) {
                $selectCriteria->add(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTBLOKNUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsAanvvoorwaardenMedbewEnTekstblokPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE);
            $value = $criteria->remove(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE);
            if ($value) {
                $selectCriteria->add(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsAanvvoorwaardenMedbewEnTekstblokPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_1_ALFANUMERIEK);
            $value = $criteria->remove(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_1_ALFANUMERIEK);
            if ($value) {
                $selectCriteria->add(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_1_ALFANUMERIEK, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsAanvvoorwaardenMedbewEnTekstblokPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_2_NUMERIEK);
            $value = $criteria->remove(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_2_NUMERIEK);
            if ($value) {
                $selectCriteria->add(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_2_NUMERIEK, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsAanvvoorwaardenMedbewEnTekstblokPeer::TABLE_NAME);
            }

        } else { // $values is GsAanvvoorwaardenMedbewEnTekstblok object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_aanvvoorwaarden_medbew_en_tekstblok table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsAanvvoorwaardenMedbewEnTekstblokPeer::TABLE_NAME, $con, GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsAanvvoorwaardenMedbewEnTekstblokPeer::clearInstancePool();
            GsAanvvoorwaardenMedbewEnTekstblokPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsAanvvoorwaardenMedbewEnTekstblok or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsAanvvoorwaardenMedbewEnTekstblok object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsAanvvoorwaardenMedbewEnTekstblokPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsAanvvoorwaardenMedbewEnTekstblok) { // it's a model object
            // invalidate the cache for this single object
            GsAanvvoorwaardenMedbewEnTekstblokPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsAanvvoorwaardenMedbewEnTekstblokPeer::BEWAKINGSSOORT, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTMODULE, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTSOORT, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTBLOKNUMMER, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, $value[5]));
                $criterion->addAnd($criteria->getNewCriterion(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_1_ALFANUMERIEK, $value[6]));
                $criterion->addAnd($criteria->getNewCriterion(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_2_NUMERIEK, $value[7]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsAanvvoorwaardenMedbewEnTekstblokPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsAanvvoorwaardenMedbewEnTekstblokPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsAanvvoorwaardenMedbewEnTekstblok object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsAanvvoorwaardenMedbewEnTekstblok $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsAanvvoorwaardenMedbewEnTekstblokPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME, GsAanvvoorwaardenMedbewEnTekstblokPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $bewakingssoort
     * @param   int $medicatiebewaking_identificerende_code
     * @param   int $tekstmodule
     * @param   int $tekstsoort
     * @param   int $tekstbloknummer
     * @param   int $medicatiebewaking_aanvullende_voorwaarde
     * @param   string $codering_waarde_1_alfanumeriek
     * @param   int $codering_waarde_2_numeriek
     * @param      PropelPDO $con
     * @return GsAanvvoorwaardenMedbewEnTekstblok
     */
    public static function retrieveByPK($bewakingssoort, $medicatiebewaking_identificerende_code, $tekstmodule, $tekstsoort, $tekstbloknummer, $medicatiebewaking_aanvullende_voorwaarde, $codering_waarde_1_alfanumeriek, $codering_waarde_2_numeriek, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $bewakingssoort, (string) $medicatiebewaking_identificerende_code, (string) $tekstmodule, (string) $tekstsoort, (string) $tekstbloknummer, (string) $medicatiebewaking_aanvullende_voorwaarde, (string) $codering_waarde_1_alfanumeriek, (string) $codering_waarde_2_numeriek));
         if (null !== ($obj = GsAanvvoorwaardenMedbewEnTekstblokPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsAanvvoorwaardenMedbewEnTekstblokPeer::DATABASE_NAME);
        $criteria->add(GsAanvvoorwaardenMedbewEnTekstblokPeer::BEWAKINGSSOORT, $bewakingssoort);
        $criteria->add(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, $medicatiebewaking_identificerende_code);
        $criteria->add(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTMODULE, $tekstmodule);
        $criteria->add(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTSOORT, $tekstsoort);
        $criteria->add(GsAanvvoorwaardenMedbewEnTekstblokPeer::TEKSTBLOKNUMMER, $tekstbloknummer);
        $criteria->add(GsAanvvoorwaardenMedbewEnTekstblokPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, $medicatiebewaking_aanvullende_voorwaarde);
        $criteria->add(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_1_ALFANUMERIEK, $codering_waarde_1_alfanumeriek);
        $criteria->add(GsAanvvoorwaardenMedbewEnTekstblokPeer::CODERING_WAARDE_2_NUMERIEK, $codering_waarde_2_numeriek);
        $v = GsAanvvoorwaardenMedbewEnTekstblokPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsAanvvoorwaardenMedbewEnTekstblokPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsAanvvoorwaardenMedbewEnTekstblokPeer::buildTableMap();

