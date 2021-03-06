<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsBtabel;
use PharmaIntelligence\GstandaardBundle\Model\GsBtabelPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsBtabelTableMap;

abstract class BaseGsBtabelPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_btabel';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsBtabel';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsBtabelTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_btabel.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_btabel.mutatiekode';

    /** the column name for the uniek_nummer_aanvullende_tekst field */
    const UNIEK_NUMMER_AANVULLENDE_TEKST = 'gs_btabel.uniek_nummer_aanvullende_tekst';

    /** the column name for the memocode_aanvullende_tekst field */
    const MEMOCODE_AANVULLENDE_TEKST = 'gs_btabel.memocode_aanvullende_tekst';

    /** the column name for the omschrijving_aanvullende_tekst field */
    const OMSCHRIJVING_AANVULLENDE_TEKST = 'gs_btabel.omschrijving_aanvullende_tekst';

    /** the column name for the registratiedatum_gstandaard field */
    const REGISTRATIEDATUM_GSTANDAARD = 'gs_btabel.registratiedatum_gstandaard';

    /** the column name for the versienummer_wcia_tabellen_eerste_opname field */
    const VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME = 'gs_btabel.versienummer_wcia_tabellen_eerste_opname';

    /** the column name for the versienummer_wcia_tabellen_laatste_wijziging field */
    const VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING = 'gs_btabel.versienummer_wcia_tabellen_laatste_wijziging';

    /** the column name for the versienummer_wcia_tabellen_vervallen field */
    const VERSIENUMMER_WCIA_TABELLEN_VERVALLEN = 'gs_btabel.versienummer_wcia_tabellen_vervallen';

    /** the column name for the laagste_frequentie_dosering field */
    const LAAGSTE_FREQUENTIE_DOSERING = 'gs_btabel.laagste_frequentie_dosering';

    /** the column name for the hoogste_frequentie_dosering field */
    const HOOGSTE_FREQUENTIE_DOSERING = 'gs_btabel.hoogste_frequentie_dosering';

    /** the column name for the laagste_keerdosering field */
    const LAAGSTE_KEERDOSERING = 'gs_btabel.laagste_keerdosering';

    /** the column name for the hoogste_keerdosering field */
    const HOOGSTE_KEERDOSERING = 'gs_btabel.hoogste_keerdosering';

    /** the column name for the omrekenfactor_theoretische_duur field */
    const OMREKENFACTOR_THEORETISCHE_DUUR = 'gs_btabel.omrekenfactor_theoretische_duur';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsBtabel objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsBtabel[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsBtabelPeer::$fieldNames[GsBtabelPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'UniekNummerAanvullendeTekst', 'MemocodeAanvullendeTekst', 'OmschrijvingAanvullendeTekst', 'RegistratiedatumGstandaard', 'VersienummerWciaTabellenEersteOpname', 'VersienummerWciaTabellenLaatsteWijziging', 'VersienummerWciaTabellenVervallen', 'LaagsteFrequentieDosering', 'HoogsteFrequentieDosering', 'LaagsteKeerdosering', 'HoogsteKeerdosering', 'OmrekenfactorTheoretischeDuur', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'uniekNummerAanvullendeTekst', 'memocodeAanvullendeTekst', 'omschrijvingAanvullendeTekst', 'registratiedatumGstandaard', 'versienummerWciaTabellenEersteOpname', 'versienummerWciaTabellenLaatsteWijziging', 'versienummerWciaTabellenVervallen', 'laagsteFrequentieDosering', 'hoogsteFrequentieDosering', 'laagsteKeerdosering', 'hoogsteKeerdosering', 'omrekenfactorTheoretischeDuur', ),
        BasePeer::TYPE_COLNAME => array (GsBtabelPeer::BESTANDNUMMER, GsBtabelPeer::MUTATIEKODE, GsBtabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST, GsBtabelPeer::MEMOCODE_AANVULLENDE_TEKST, GsBtabelPeer::OMSCHRIJVING_AANVULLENDE_TEKST, GsBtabelPeer::REGISTRATIEDATUM_GSTANDAARD, GsBtabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME, GsBtabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING, GsBtabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN, GsBtabelPeer::LAAGSTE_FREQUENTIE_DOSERING, GsBtabelPeer::HOOGSTE_FREQUENTIE_DOSERING, GsBtabelPeer::LAAGSTE_KEERDOSERING, GsBtabelPeer::HOOGSTE_KEERDOSERING, GsBtabelPeer::OMREKENFACTOR_THEORETISCHE_DUUR, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'UNIEK_NUMMER_AANVULLENDE_TEKST', 'MEMOCODE_AANVULLENDE_TEKST', 'OMSCHRIJVING_AANVULLENDE_TEKST', 'REGISTRATIEDATUM_GSTANDAARD', 'VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME', 'VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING', 'VERSIENUMMER_WCIA_TABELLEN_VERVALLEN', 'LAAGSTE_FREQUENTIE_DOSERING', 'HOOGSTE_FREQUENTIE_DOSERING', 'LAAGSTE_KEERDOSERING', 'HOOGSTE_KEERDOSERING', 'OMREKENFACTOR_THEORETISCHE_DUUR', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'uniek_nummer_aanvullende_tekst', 'memocode_aanvullende_tekst', 'omschrijving_aanvullende_tekst', 'registratiedatum_gstandaard', 'versienummer_wcia_tabellen_eerste_opname', 'versienummer_wcia_tabellen_laatste_wijziging', 'versienummer_wcia_tabellen_vervallen', 'laagste_frequentie_dosering', 'hoogste_frequentie_dosering', 'laagste_keerdosering', 'hoogste_keerdosering', 'omrekenfactor_theoretische_duur', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsBtabelPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'UniekNummerAanvullendeTekst' => 2, 'MemocodeAanvullendeTekst' => 3, 'OmschrijvingAanvullendeTekst' => 4, 'RegistratiedatumGstandaard' => 5, 'VersienummerWciaTabellenEersteOpname' => 6, 'VersienummerWciaTabellenLaatsteWijziging' => 7, 'VersienummerWciaTabellenVervallen' => 8, 'LaagsteFrequentieDosering' => 9, 'HoogsteFrequentieDosering' => 10, 'LaagsteKeerdosering' => 11, 'HoogsteKeerdosering' => 12, 'OmrekenfactorTheoretischeDuur' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'uniekNummerAanvullendeTekst' => 2, 'memocodeAanvullendeTekst' => 3, 'omschrijvingAanvullendeTekst' => 4, 'registratiedatumGstandaard' => 5, 'versienummerWciaTabellenEersteOpname' => 6, 'versienummerWciaTabellenLaatsteWijziging' => 7, 'versienummerWciaTabellenVervallen' => 8, 'laagsteFrequentieDosering' => 9, 'hoogsteFrequentieDosering' => 10, 'laagsteKeerdosering' => 11, 'hoogsteKeerdosering' => 12, 'omrekenfactorTheoretischeDuur' => 13, ),
        BasePeer::TYPE_COLNAME => array (GsBtabelPeer::BESTANDNUMMER => 0, GsBtabelPeer::MUTATIEKODE => 1, GsBtabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST => 2, GsBtabelPeer::MEMOCODE_AANVULLENDE_TEKST => 3, GsBtabelPeer::OMSCHRIJVING_AANVULLENDE_TEKST => 4, GsBtabelPeer::REGISTRATIEDATUM_GSTANDAARD => 5, GsBtabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME => 6, GsBtabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING => 7, GsBtabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN => 8, GsBtabelPeer::LAAGSTE_FREQUENTIE_DOSERING => 9, GsBtabelPeer::HOOGSTE_FREQUENTIE_DOSERING => 10, GsBtabelPeer::LAAGSTE_KEERDOSERING => 11, GsBtabelPeer::HOOGSTE_KEERDOSERING => 12, GsBtabelPeer::OMREKENFACTOR_THEORETISCHE_DUUR => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'UNIEK_NUMMER_AANVULLENDE_TEKST' => 2, 'MEMOCODE_AANVULLENDE_TEKST' => 3, 'OMSCHRIJVING_AANVULLENDE_TEKST' => 4, 'REGISTRATIEDATUM_GSTANDAARD' => 5, 'VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME' => 6, 'VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING' => 7, 'VERSIENUMMER_WCIA_TABELLEN_VERVALLEN' => 8, 'LAAGSTE_FREQUENTIE_DOSERING' => 9, 'HOOGSTE_FREQUENTIE_DOSERING' => 10, 'LAAGSTE_KEERDOSERING' => 11, 'HOOGSTE_KEERDOSERING' => 12, 'OMREKENFACTOR_THEORETISCHE_DUUR' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'uniek_nummer_aanvullende_tekst' => 2, 'memocode_aanvullende_tekst' => 3, 'omschrijving_aanvullende_tekst' => 4, 'registratiedatum_gstandaard' => 5, 'versienummer_wcia_tabellen_eerste_opname' => 6, 'versienummer_wcia_tabellen_laatste_wijziging' => 7, 'versienummer_wcia_tabellen_vervallen' => 8, 'laagste_frequentie_dosering' => 9, 'hoogste_frequentie_dosering' => 10, 'laagste_keerdosering' => 11, 'hoogste_keerdosering' => 12, 'omrekenfactor_theoretische_duur' => 13, ),
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
        $toNames = GsBtabelPeer::getFieldNames($toType);
        $key = isset(GsBtabelPeer::$fieldKeys[$fromType][$name]) ? GsBtabelPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsBtabelPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsBtabelPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsBtabelPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsBtabelPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsBtabelPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsBtabelPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsBtabelPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsBtabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST);
            $criteria->addSelectColumn(GsBtabelPeer::MEMOCODE_AANVULLENDE_TEKST);
            $criteria->addSelectColumn(GsBtabelPeer::OMSCHRIJVING_AANVULLENDE_TEKST);
            $criteria->addSelectColumn(GsBtabelPeer::REGISTRATIEDATUM_GSTANDAARD);
            $criteria->addSelectColumn(GsBtabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME);
            $criteria->addSelectColumn(GsBtabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING);
            $criteria->addSelectColumn(GsBtabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN);
            $criteria->addSelectColumn(GsBtabelPeer::LAAGSTE_FREQUENTIE_DOSERING);
            $criteria->addSelectColumn(GsBtabelPeer::HOOGSTE_FREQUENTIE_DOSERING);
            $criteria->addSelectColumn(GsBtabelPeer::LAAGSTE_KEERDOSERING);
            $criteria->addSelectColumn(GsBtabelPeer::HOOGSTE_KEERDOSERING);
            $criteria->addSelectColumn(GsBtabelPeer::OMREKENFACTOR_THEORETISCHE_DUUR);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.uniek_nummer_aanvullende_tekst');
            $criteria->addSelectColumn($alias . '.memocode_aanvullende_tekst');
            $criteria->addSelectColumn($alias . '.omschrijving_aanvullende_tekst');
            $criteria->addSelectColumn($alias . '.registratiedatum_gstandaard');
            $criteria->addSelectColumn($alias . '.versienummer_wcia_tabellen_eerste_opname');
            $criteria->addSelectColumn($alias . '.versienummer_wcia_tabellen_laatste_wijziging');
            $criteria->addSelectColumn($alias . '.versienummer_wcia_tabellen_vervallen');
            $criteria->addSelectColumn($alias . '.laagste_frequentie_dosering');
            $criteria->addSelectColumn($alias . '.hoogste_frequentie_dosering');
            $criteria->addSelectColumn($alias . '.laagste_keerdosering');
            $criteria->addSelectColumn($alias . '.hoogste_keerdosering');
            $criteria->addSelectColumn($alias . '.omrekenfactor_theoretische_duur');
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
        $criteria->setPrimaryTableName(GsBtabelPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsBtabelPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsBtabelPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsBtabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsBtabel
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsBtabelPeer::doSelect($critcopy, $con);
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
        return GsBtabelPeer::populateObjects(GsBtabelPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsBtabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsBtabelPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsBtabelPeer::DATABASE_NAME);

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
     * @param GsBtabel $obj A GsBtabel object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getUniekNummerAanvullendeTekst();
            } // if key === null
            GsBtabelPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsBtabel object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsBtabel) {
                $key = (string) $value->getUniekNummerAanvullendeTekst();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsBtabel object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsBtabelPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsBtabel Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsBtabelPeer::$instances[$key])) {
                return GsBtabelPeer::$instances[$key];
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
        foreach (GsBtabelPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsBtabelPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_btabel
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
        $cls = GsBtabelPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsBtabelPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsBtabelPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsBtabelPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsBtabel object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsBtabelPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsBtabelPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsBtabelPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsBtabelPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsBtabelPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsBtabelPeer::DATABASE_NAME)->getTable(GsBtabelPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsBtabelPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsBtabelPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsBtabelTableMap());
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
        return GsBtabelPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsBtabel or Criteria object.
     *
     * @param      mixed $values Criteria or GsBtabel object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsBtabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsBtabel object
        }


        // Set the correct dbName
        $criteria->setDbName(GsBtabelPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsBtabel or Criteria object.
     *
     * @param      mixed $values Criteria or GsBtabel object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsBtabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsBtabelPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsBtabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST);
            $value = $criteria->remove(GsBtabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST);
            if ($value) {
                $selectCriteria->add(GsBtabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsBtabelPeer::TABLE_NAME);
            }

        } else { // $values is GsBtabel object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsBtabelPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_btabel table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsBtabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsBtabelPeer::TABLE_NAME, $con, GsBtabelPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsBtabelPeer::clearInstancePool();
            GsBtabelPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsBtabel or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsBtabel object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsBtabelPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsBtabelPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsBtabel) { // it's a model object
            // invalidate the cache for this single object
            GsBtabelPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsBtabelPeer::DATABASE_NAME);
            $criteria->add(GsBtabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsBtabelPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsBtabelPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsBtabelPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsBtabel object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsBtabel $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsBtabelPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsBtabelPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsBtabelPeer::DATABASE_NAME, GsBtabelPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsBtabel
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsBtabelPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsBtabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsBtabelPeer::DATABASE_NAME);
        $criteria->add(GsBtabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST, $pk);

        $v = GsBtabelPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsBtabel[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsBtabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsBtabelPeer::DATABASE_NAME);
            $criteria->add(GsBtabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST, $pks, Criteria::IN);
            $objs = GsBtabelPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsBtabelPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsBtabelPeer::buildTableMap();

