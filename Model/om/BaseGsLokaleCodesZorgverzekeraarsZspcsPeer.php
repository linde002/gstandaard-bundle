<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsLokaleCodesZorgverzekeraarsZspcs;
use PharmaIntelligence\GstandaardBundle\Model\GsLokaleCodesZorgverzekeraarsZspcsPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsLokaleCodesZorgverzekeraarsZspcsTableMap;

abstract class BaseGsLokaleCodesZorgverzekeraarsZspcsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_lokale_codes_zorgverzekeraars_zspcs';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLokaleCodesZorgverzekeraarsZspcs';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsLokaleCodesZorgverzekeraarsZspcsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_lokale_codes_zorgverzekeraars_zspcs.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_lokale_codes_zorgverzekeraars_zspcs.mutatiekode';

    /** the column name for the zorgverzekeraar_specifieke_prestatie_code field */
    const ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE = 'gs_lokale_codes_zorgverzekeraars_zspcs.zorgverzekeraar_specifieke_prestatie_code';

    /** the column name for the uzovi_code_zorgverzekeraar field */
    const UZOVI_CODE_ZORGVERZEKERAAR = 'gs_lokale_codes_zorgverzekeraars_zspcs.uzovi_code_zorgverzekeraar';

    /** the column name for the artikel_omschrijving field */
    const ARTIKEL_OMSCHRIJVING = 'gs_lokale_codes_zorgverzekeraars_zspcs.artikel_omschrijving';

    /** the column name for the etiketnaam field */
    const ETIKETNAAM = 'gs_lokale_codes_zorgverzekeraars_zspcs.etiketnaam';

    /** the column name for the memocode field */
    const MEMOCODE = 'gs_lokale_codes_zorgverzekeraars_zspcs.memocode';

    /** the column name for the hoeveelheid field */
    const HOEVEELHEID = 'gs_lokale_codes_zorgverzekeraars_zspcs.hoeveelheid';

    /** the column name for the thesaurusverwijzing_eenheid field */
    const THESAURUSVERWIJZING_EENHEID = 'gs_lokale_codes_zorgverzekeraars_zspcs.thesaurusverwijzing_eenheid';

    /** the column name for the eenheid field */
    const EENHEID = 'gs_lokale_codes_zorgverzekeraars_zspcs.eenheid';

    /** the column name for the declaratieprijs field */
    const DECLARATIEPRIJS = 'gs_lokale_codes_zorgverzekeraars_zspcs.declaratieprijs';

    /** the column name for the wmg field */
    const WMG = 'gs_lokale_codes_zorgverzekeraars_zspcs.wmg';

    /** the column name for the uitsluitend_voor_gecontracteerde_apotheken field */
    const UITSLUITEND_VOOR_GECONTRACTEERDE_APOTHEKEN = 'gs_lokale_codes_zorgverzekeraars_zspcs.uitsluitend_voor_gecontracteerde_apotheken';

    /** the column name for the tariefsoort_thesaurus_verwijzing field */
    const TARIEFSOORT_THESAURUS_VERWIJZING = 'gs_lokale_codes_zorgverzekeraars_zspcs.tariefsoort_thesaurus_verwijzing';

    /** the column name for the tariefsoort field */
    const TARIEFSOORT = 'gs_lokale_codes_zorgverzekeraars_zspcs.tariefsoort';

    /** the column name for the begindatum field */
    const BEGINDATUM = 'gs_lokale_codes_zorgverzekeraars_zspcs.begindatum';

    /** the column name for the vervaldatum field */
    const VERVALDATUM = 'gs_lokale_codes_zorgverzekeraars_zspcs.vervaldatum';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsLokaleCodesZorgverzekeraarsZspcs objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsLokaleCodesZorgverzekeraarsZspcs[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsLokaleCodesZorgverzekeraarsZspcsPeer::$fieldNames[GsLokaleCodesZorgverzekeraarsZspcsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'ZorgverzekeraarSpecifiekePrestatieCode', 'UzoviCodeZorgverzekeraar', 'ArtikelOmschrijving', 'Etiketnaam', 'Memocode', 'Hoeveelheid', 'ThesaurusverwijzingEenheid', 'Eenheid', 'Declaratieprijs', 'Wmg', 'UitsluitendVoorGecontracteerdeApotheken', 'TariefsoortThesaurusVerwijzing', 'Tariefsoort', 'Begindatum', 'Vervaldatum', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'zorgverzekeraarSpecifiekePrestatieCode', 'uzoviCodeZorgverzekeraar', 'artikelOmschrijving', 'etiketnaam', 'memocode', 'hoeveelheid', 'thesaurusverwijzingEenheid', 'eenheid', 'declaratieprijs', 'wmg', 'uitsluitendVoorGecontracteerdeApotheken', 'tariefsoortThesaurusVerwijzing', 'tariefsoort', 'begindatum', 'vervaldatum', ),
        BasePeer::TYPE_COLNAME => array (GsLokaleCodesZorgverzekeraarsZspcsPeer::BESTANDNUMMER, GsLokaleCodesZorgverzekeraarsZspcsPeer::MUTATIEKODE, GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE, GsLokaleCodesZorgverzekeraarsZspcsPeer::UZOVI_CODE_ZORGVERZEKERAAR, GsLokaleCodesZorgverzekeraarsZspcsPeer::ARTIKEL_OMSCHRIJVING, GsLokaleCodesZorgverzekeraarsZspcsPeer::ETIKETNAAM, GsLokaleCodesZorgverzekeraarsZspcsPeer::MEMOCODE, GsLokaleCodesZorgverzekeraarsZspcsPeer::HOEVEELHEID, GsLokaleCodesZorgverzekeraarsZspcsPeer::THESAURUSVERWIJZING_EENHEID, GsLokaleCodesZorgverzekeraarsZspcsPeer::EENHEID, GsLokaleCodesZorgverzekeraarsZspcsPeer::DECLARATIEPRIJS, GsLokaleCodesZorgverzekeraarsZspcsPeer::WMG, GsLokaleCodesZorgverzekeraarsZspcsPeer::UITSLUITEND_VOOR_GECONTRACTEERDE_APOTHEKEN, GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT_THESAURUS_VERWIJZING, GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT, GsLokaleCodesZorgverzekeraarsZspcsPeer::BEGINDATUM, GsLokaleCodesZorgverzekeraarsZspcsPeer::VERVALDATUM, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE', 'UZOVI_CODE_ZORGVERZEKERAAR', 'ARTIKEL_OMSCHRIJVING', 'ETIKETNAAM', 'MEMOCODE', 'HOEVEELHEID', 'THESAURUSVERWIJZING_EENHEID', 'EENHEID', 'DECLARATIEPRIJS', 'WMG', 'UITSLUITEND_VOOR_GECONTRACTEERDE_APOTHEKEN', 'TARIEFSOORT_THESAURUS_VERWIJZING', 'TARIEFSOORT', 'BEGINDATUM', 'VERVALDATUM', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'zorgverzekeraar_specifieke_prestatie_code', 'uzovi_code_zorgverzekeraar', 'artikel_omschrijving', 'etiketnaam', 'memocode', 'hoeveelheid', 'thesaurusverwijzing_eenheid', 'eenheid', 'declaratieprijs', 'wmg', 'uitsluitend_voor_gecontracteerde_apotheken', 'tariefsoort_thesaurus_verwijzing', 'tariefsoort', 'begindatum', 'vervaldatum', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsLokaleCodesZorgverzekeraarsZspcsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'ZorgverzekeraarSpecifiekePrestatieCode' => 2, 'UzoviCodeZorgverzekeraar' => 3, 'ArtikelOmschrijving' => 4, 'Etiketnaam' => 5, 'Memocode' => 6, 'Hoeveelheid' => 7, 'ThesaurusverwijzingEenheid' => 8, 'Eenheid' => 9, 'Declaratieprijs' => 10, 'Wmg' => 11, 'UitsluitendVoorGecontracteerdeApotheken' => 12, 'TariefsoortThesaurusVerwijzing' => 13, 'Tariefsoort' => 14, 'Begindatum' => 15, 'Vervaldatum' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'zorgverzekeraarSpecifiekePrestatieCode' => 2, 'uzoviCodeZorgverzekeraar' => 3, 'artikelOmschrijving' => 4, 'etiketnaam' => 5, 'memocode' => 6, 'hoeveelheid' => 7, 'thesaurusverwijzingEenheid' => 8, 'eenheid' => 9, 'declaratieprijs' => 10, 'wmg' => 11, 'uitsluitendVoorGecontracteerdeApotheken' => 12, 'tariefsoortThesaurusVerwijzing' => 13, 'tariefsoort' => 14, 'begindatum' => 15, 'vervaldatum' => 16, ),
        BasePeer::TYPE_COLNAME => array (GsLokaleCodesZorgverzekeraarsZspcsPeer::BESTANDNUMMER => 0, GsLokaleCodesZorgverzekeraarsZspcsPeer::MUTATIEKODE => 1, GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE => 2, GsLokaleCodesZorgverzekeraarsZspcsPeer::UZOVI_CODE_ZORGVERZEKERAAR => 3, GsLokaleCodesZorgverzekeraarsZspcsPeer::ARTIKEL_OMSCHRIJVING => 4, GsLokaleCodesZorgverzekeraarsZspcsPeer::ETIKETNAAM => 5, GsLokaleCodesZorgverzekeraarsZspcsPeer::MEMOCODE => 6, GsLokaleCodesZorgverzekeraarsZspcsPeer::HOEVEELHEID => 7, GsLokaleCodesZorgverzekeraarsZspcsPeer::THESAURUSVERWIJZING_EENHEID => 8, GsLokaleCodesZorgverzekeraarsZspcsPeer::EENHEID => 9, GsLokaleCodesZorgverzekeraarsZspcsPeer::DECLARATIEPRIJS => 10, GsLokaleCodesZorgverzekeraarsZspcsPeer::WMG => 11, GsLokaleCodesZorgverzekeraarsZspcsPeer::UITSLUITEND_VOOR_GECONTRACTEERDE_APOTHEKEN => 12, GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT_THESAURUS_VERWIJZING => 13, GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT => 14, GsLokaleCodesZorgverzekeraarsZspcsPeer::BEGINDATUM => 15, GsLokaleCodesZorgverzekeraarsZspcsPeer::VERVALDATUM => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE' => 2, 'UZOVI_CODE_ZORGVERZEKERAAR' => 3, 'ARTIKEL_OMSCHRIJVING' => 4, 'ETIKETNAAM' => 5, 'MEMOCODE' => 6, 'HOEVEELHEID' => 7, 'THESAURUSVERWIJZING_EENHEID' => 8, 'EENHEID' => 9, 'DECLARATIEPRIJS' => 10, 'WMG' => 11, 'UITSLUITEND_VOOR_GECONTRACTEERDE_APOTHEKEN' => 12, 'TARIEFSOORT_THESAURUS_VERWIJZING' => 13, 'TARIEFSOORT' => 14, 'BEGINDATUM' => 15, 'VERVALDATUM' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'zorgverzekeraar_specifieke_prestatie_code' => 2, 'uzovi_code_zorgverzekeraar' => 3, 'artikel_omschrijving' => 4, 'etiketnaam' => 5, 'memocode' => 6, 'hoeveelheid' => 7, 'thesaurusverwijzing_eenheid' => 8, 'eenheid' => 9, 'declaratieprijs' => 10, 'wmg' => 11, 'uitsluitend_voor_gecontracteerde_apotheken' => 12, 'tariefsoort_thesaurus_verwijzing' => 13, 'tariefsoort' => 14, 'begindatum' => 15, 'vervaldatum' => 16, ),
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
        $toNames = GsLokaleCodesZorgverzekeraarsZspcsPeer::getFieldNames($toType);
        $key = isset(GsLokaleCodesZorgverzekeraarsZspcsPeer::$fieldKeys[$fromType][$name]) ? GsLokaleCodesZorgverzekeraarsZspcsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsLokaleCodesZorgverzekeraarsZspcsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsLokaleCodesZorgverzekeraarsZspcsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsLokaleCodesZorgverzekeraarsZspcsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsLokaleCodesZorgverzekeraarsZspcsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsLokaleCodesZorgverzekeraarsZspcsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsLokaleCodesZorgverzekeraarsZspcsPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsLokaleCodesZorgverzekeraarsZspcsPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE);
            $criteria->addSelectColumn(GsLokaleCodesZorgverzekeraarsZspcsPeer::UZOVI_CODE_ZORGVERZEKERAAR);
            $criteria->addSelectColumn(GsLokaleCodesZorgverzekeraarsZspcsPeer::ARTIKEL_OMSCHRIJVING);
            $criteria->addSelectColumn(GsLokaleCodesZorgverzekeraarsZspcsPeer::ETIKETNAAM);
            $criteria->addSelectColumn(GsLokaleCodesZorgverzekeraarsZspcsPeer::MEMOCODE);
            $criteria->addSelectColumn(GsLokaleCodesZorgverzekeraarsZspcsPeer::HOEVEELHEID);
            $criteria->addSelectColumn(GsLokaleCodesZorgverzekeraarsZspcsPeer::THESAURUSVERWIJZING_EENHEID);
            $criteria->addSelectColumn(GsLokaleCodesZorgverzekeraarsZspcsPeer::EENHEID);
            $criteria->addSelectColumn(GsLokaleCodesZorgverzekeraarsZspcsPeer::DECLARATIEPRIJS);
            $criteria->addSelectColumn(GsLokaleCodesZorgverzekeraarsZspcsPeer::WMG);
            $criteria->addSelectColumn(GsLokaleCodesZorgverzekeraarsZspcsPeer::UITSLUITEND_VOOR_GECONTRACTEERDE_APOTHEKEN);
            $criteria->addSelectColumn(GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT_THESAURUS_VERWIJZING);
            $criteria->addSelectColumn(GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT);
            $criteria->addSelectColumn(GsLokaleCodesZorgverzekeraarsZspcsPeer::BEGINDATUM);
            $criteria->addSelectColumn(GsLokaleCodesZorgverzekeraarsZspcsPeer::VERVALDATUM);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.zorgverzekeraar_specifieke_prestatie_code');
            $criteria->addSelectColumn($alias . '.uzovi_code_zorgverzekeraar');
            $criteria->addSelectColumn($alias . '.artikel_omschrijving');
            $criteria->addSelectColumn($alias . '.etiketnaam');
            $criteria->addSelectColumn($alias . '.memocode');
            $criteria->addSelectColumn($alias . '.hoeveelheid');
            $criteria->addSelectColumn($alias . '.thesaurusverwijzing_eenheid');
            $criteria->addSelectColumn($alias . '.eenheid');
            $criteria->addSelectColumn($alias . '.declaratieprijs');
            $criteria->addSelectColumn($alias . '.wmg');
            $criteria->addSelectColumn($alias . '.uitsluitend_voor_gecontracteerde_apotheken');
            $criteria->addSelectColumn($alias . '.tariefsoort_thesaurus_verwijzing');
            $criteria->addSelectColumn($alias . '.tariefsoort');
            $criteria->addSelectColumn($alias . '.begindatum');
            $criteria->addSelectColumn($alias . '.vervaldatum');
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
        $criteria->setPrimaryTableName(GsLokaleCodesZorgverzekeraarsZspcsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsLokaleCodesZorgverzekeraarsZspcsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsLokaleCodesZorgverzekeraarsZspcs
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsLokaleCodesZorgverzekeraarsZspcsPeer::doSelect($critcopy, $con);
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
        return GsLokaleCodesZorgverzekeraarsZspcsPeer::populateObjects(GsLokaleCodesZorgverzekeraarsZspcsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsLokaleCodesZorgverzekeraarsZspcsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME);

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
     * @param GsLokaleCodesZorgverzekeraarsZspcs $obj A GsLokaleCodesZorgverzekeraarsZspcs object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getZorgverzekeraarSpecifiekePrestatieCode();
            } // if key === null
            GsLokaleCodesZorgverzekeraarsZspcsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsLokaleCodesZorgverzekeraarsZspcs object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsLokaleCodesZorgverzekeraarsZspcs) {
                $key = (string) $value->getZorgverzekeraarSpecifiekePrestatieCode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsLokaleCodesZorgverzekeraarsZspcs object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsLokaleCodesZorgverzekeraarsZspcsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsLokaleCodesZorgverzekeraarsZspcs Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsLokaleCodesZorgverzekeraarsZspcsPeer::$instances[$key])) {
                return GsLokaleCodesZorgverzekeraarsZspcsPeer::$instances[$key];
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
        foreach (GsLokaleCodesZorgverzekeraarsZspcsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsLokaleCodesZorgverzekeraarsZspcsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_lokale_codes_zorgverzekeraars_zspcs
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

        return (string) $row[$startcol + 2];
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
        $cls = GsLokaleCodesZorgverzekeraarsZspcsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsLokaleCodesZorgverzekeraarsZspcsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsLokaleCodesZorgverzekeraarsZspcsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsLokaleCodesZorgverzekeraarsZspcsPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsLokaleCodesZorgverzekeraarsZspcs object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsLokaleCodesZorgverzekeraarsZspcsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsLokaleCodesZorgverzekeraarsZspcsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsLokaleCodesZorgverzekeraarsZspcsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsLokaleCodesZorgverzekeraarsZspcsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsLokaleCodesZorgverzekeraarsZspcsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME)->getTable(GsLokaleCodesZorgverzekeraarsZspcsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsLokaleCodesZorgverzekeraarsZspcsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsLokaleCodesZorgverzekeraarsZspcsTableMap());
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
        return GsLokaleCodesZorgverzekeraarsZspcsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsLokaleCodesZorgverzekeraarsZspcs or Criteria object.
     *
     * @param      mixed $values Criteria or GsLokaleCodesZorgverzekeraarsZspcs object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsLokaleCodesZorgverzekeraarsZspcs object
        }


        // Set the correct dbName
        $criteria->setDbName(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsLokaleCodesZorgverzekeraarsZspcs or Criteria object.
     *
     * @param      mixed $values Criteria or GsLokaleCodesZorgverzekeraarsZspcs object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE);
            $value = $criteria->remove(GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE);
            if ($value) {
                $selectCriteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsLokaleCodesZorgverzekeraarsZspcsPeer::TABLE_NAME);
            }

        } else { // $values is GsLokaleCodesZorgverzekeraarsZspcs object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_lokale_codes_zorgverzekeraars_zspcs table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsLokaleCodesZorgverzekeraarsZspcsPeer::TABLE_NAME, $con, GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsLokaleCodesZorgverzekeraarsZspcsPeer::clearInstancePool();
            GsLokaleCodesZorgverzekeraarsZspcsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsLokaleCodesZorgverzekeraarsZspcs or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsLokaleCodesZorgverzekeraarsZspcs object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsLokaleCodesZorgverzekeraarsZspcsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsLokaleCodesZorgverzekeraarsZspcs) { // it's a model object
            // invalidate the cache for this single object
            GsLokaleCodesZorgverzekeraarsZspcsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME);
            $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsLokaleCodesZorgverzekeraarsZspcsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsLokaleCodesZorgverzekeraarsZspcsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsLokaleCodesZorgverzekeraarsZspcs object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsLokaleCodesZorgverzekeraarsZspcs $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsLokaleCodesZorgverzekeraarsZspcsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME, GsLokaleCodesZorgverzekeraarsZspcsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsLokaleCodesZorgverzekeraarsZspcs
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsLokaleCodesZorgverzekeraarsZspcsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME);
        $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE, $pk);

        $v = GsLokaleCodesZorgverzekeraarsZspcsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsLokaleCodesZorgverzekeraarsZspcs[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME);
            $criteria->add(GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE, $pks, Criteria::IN);
            $objs = GsLokaleCodesZorgverzekeraarsZspcsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsLokaleCodesZorgverzekeraarsZspcsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsLokaleCodesZorgverzekeraarsZspcsPeer::buildTableMap();

