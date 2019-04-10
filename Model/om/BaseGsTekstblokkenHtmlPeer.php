<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsTekstblokkenHtml;
use PharmaIntelligence\GstandaardBundle\Model\GsTekstblokkenHtmlPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsTekstblokkenHtmlTableMap;

abstract class BaseGsTekstblokkenHtmlPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_tekstblokken_html';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsTekstblokkenHtml';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsTekstblokkenHtmlTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_tekstblokken_html.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_tekstblokken_html.mutatiekode';

    /** the column name for the thesaurus_verwijzing_tekstmodule field */
    const THESAURUS_VERWIJZING_TEKSTMODULE = 'gs_tekstblokken_html.thesaurus_verwijzing_tekstmodule';

    /** the column name for the tekstmodule field */
    const TEKSTMODULE = 'gs_tekstblokken_html.tekstmodule';

    /** the column name for the thesaurus_verwijzing_tekstsoort field */
    const THESAURUS_VERWIJZING_TEKSTSOORT = 'gs_tekstblokken_html.thesaurus_verwijzing_tekstsoort';

    /** the column name for the tekstsoort field */
    const TEKSTSOORT = 'gs_tekstblokken_html.tekstsoort';

    /** the column name for the tekst_nivo_kode field */
    const TEKST_NIVO_KODE = 'gs_tekstblokken_html.tekst_nivo_kode';

    /** the column name for the tekstbloknummer field */
    const TEKSTBLOKNUMMER = 'gs_tekstblokken_html.tekstbloknummer';

    /** the column name for the tekstregelnummer field */
    const TEKSTREGELNUMMER = 'gs_tekstblokken_html.tekstregelnummer';

    /** the column name for the tekst field */
    const TEKST = 'gs_tekstblokken_html.tekst';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsTekstblokkenHtml objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsTekstblokkenHtml[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsTekstblokkenHtmlPeer::$fieldNames[GsTekstblokkenHtmlPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'ThesaurusVerwijzingTekstmodule', 'Tekstmodule', 'ThesaurusVerwijzingTekstsoort', 'Tekstsoort', 'TekstNivoKode', 'Tekstbloknummer', 'Tekstregelnummer', 'Tekst', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'thesaurusVerwijzingTekstmodule', 'tekstmodule', 'thesaurusVerwijzingTekstsoort', 'tekstsoort', 'tekstNivoKode', 'tekstbloknummer', 'tekstregelnummer', 'tekst', ),
        BasePeer::TYPE_COLNAME => array (GsTekstblokkenHtmlPeer::BESTANDNUMMER, GsTekstblokkenHtmlPeer::MUTATIEKODE, GsTekstblokkenHtmlPeer::THESAURUS_VERWIJZING_TEKSTMODULE, GsTekstblokkenHtmlPeer::TEKSTMODULE, GsTekstblokkenHtmlPeer::THESAURUS_VERWIJZING_TEKSTSOORT, GsTekstblokkenHtmlPeer::TEKSTSOORT, GsTekstblokkenHtmlPeer::TEKST_NIVO_KODE, GsTekstblokkenHtmlPeer::TEKSTBLOKNUMMER, GsTekstblokkenHtmlPeer::TEKSTREGELNUMMER, GsTekstblokkenHtmlPeer::TEKST, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'THESAURUS_VERWIJZING_TEKSTMODULE', 'TEKSTMODULE', 'THESAURUS_VERWIJZING_TEKSTSOORT', 'TEKSTSOORT', 'TEKST_NIVO_KODE', 'TEKSTBLOKNUMMER', 'TEKSTREGELNUMMER', 'TEKST', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'thesaurus_verwijzing_tekstmodule', 'tekstmodule', 'thesaurus_verwijzing_tekstsoort', 'tekstsoort', 'tekst_nivo_kode', 'tekstbloknummer', 'tekstregelnummer', 'tekst', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsTekstblokkenHtmlPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'ThesaurusVerwijzingTekstmodule' => 2, 'Tekstmodule' => 3, 'ThesaurusVerwijzingTekstsoort' => 4, 'Tekstsoort' => 5, 'TekstNivoKode' => 6, 'Tekstbloknummer' => 7, 'Tekstregelnummer' => 8, 'Tekst' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'thesaurusVerwijzingTekstmodule' => 2, 'tekstmodule' => 3, 'thesaurusVerwijzingTekstsoort' => 4, 'tekstsoort' => 5, 'tekstNivoKode' => 6, 'tekstbloknummer' => 7, 'tekstregelnummer' => 8, 'tekst' => 9, ),
        BasePeer::TYPE_COLNAME => array (GsTekstblokkenHtmlPeer::BESTANDNUMMER => 0, GsTekstblokkenHtmlPeer::MUTATIEKODE => 1, GsTekstblokkenHtmlPeer::THESAURUS_VERWIJZING_TEKSTMODULE => 2, GsTekstblokkenHtmlPeer::TEKSTMODULE => 3, GsTekstblokkenHtmlPeer::THESAURUS_VERWIJZING_TEKSTSOORT => 4, GsTekstblokkenHtmlPeer::TEKSTSOORT => 5, GsTekstblokkenHtmlPeer::TEKST_NIVO_KODE => 6, GsTekstblokkenHtmlPeer::TEKSTBLOKNUMMER => 7, GsTekstblokkenHtmlPeer::TEKSTREGELNUMMER => 8, GsTekstblokkenHtmlPeer::TEKST => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'THESAURUS_VERWIJZING_TEKSTMODULE' => 2, 'TEKSTMODULE' => 3, 'THESAURUS_VERWIJZING_TEKSTSOORT' => 4, 'TEKSTSOORT' => 5, 'TEKST_NIVO_KODE' => 6, 'TEKSTBLOKNUMMER' => 7, 'TEKSTREGELNUMMER' => 8, 'TEKST' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'thesaurus_verwijzing_tekstmodule' => 2, 'tekstmodule' => 3, 'thesaurus_verwijzing_tekstsoort' => 4, 'tekstsoort' => 5, 'tekst_nivo_kode' => 6, 'tekstbloknummer' => 7, 'tekstregelnummer' => 8, 'tekst' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
        $toNames = GsTekstblokkenHtmlPeer::getFieldNames($toType);
        $key = isset(GsTekstblokkenHtmlPeer::$fieldKeys[$fromType][$name]) ? GsTekstblokkenHtmlPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsTekstblokkenHtmlPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsTekstblokkenHtmlPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsTekstblokkenHtmlPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsTekstblokkenHtmlPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsTekstblokkenHtmlPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsTekstblokkenHtmlPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsTekstblokkenHtmlPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsTekstblokkenHtmlPeer::THESAURUS_VERWIJZING_TEKSTMODULE);
            $criteria->addSelectColumn(GsTekstblokkenHtmlPeer::TEKSTMODULE);
            $criteria->addSelectColumn(GsTekstblokkenHtmlPeer::THESAURUS_VERWIJZING_TEKSTSOORT);
            $criteria->addSelectColumn(GsTekstblokkenHtmlPeer::TEKSTSOORT);
            $criteria->addSelectColumn(GsTekstblokkenHtmlPeer::TEKST_NIVO_KODE);
            $criteria->addSelectColumn(GsTekstblokkenHtmlPeer::TEKSTBLOKNUMMER);
            $criteria->addSelectColumn(GsTekstblokkenHtmlPeer::TEKSTREGELNUMMER);
            $criteria->addSelectColumn(GsTekstblokkenHtmlPeer::TEKST);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.thesaurus_verwijzing_tekstmodule');
            $criteria->addSelectColumn($alias . '.tekstmodule');
            $criteria->addSelectColumn($alias . '.thesaurus_verwijzing_tekstsoort');
            $criteria->addSelectColumn($alias . '.tekstsoort');
            $criteria->addSelectColumn($alias . '.tekst_nivo_kode');
            $criteria->addSelectColumn($alias . '.tekstbloknummer');
            $criteria->addSelectColumn($alias . '.tekstregelnummer');
            $criteria->addSelectColumn($alias . '.tekst');
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
        $criteria->setPrimaryTableName(GsTekstblokkenHtmlPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsTekstblokkenHtmlPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsTekstblokkenHtmlPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsTekstblokkenHtmlPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsTekstblokkenHtml
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsTekstblokkenHtmlPeer::doSelect($critcopy, $con);
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
        return GsTekstblokkenHtmlPeer::populateObjects(GsTekstblokkenHtmlPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsTekstblokkenHtmlPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsTekstblokkenHtmlPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsTekstblokkenHtmlPeer::DATABASE_NAME);

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
     * @param GsTekstblokkenHtml $obj A GsTekstblokkenHtml object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getTekstmodule(), (string) $obj->getTekstsoort(), (string) $obj->getTekstNivoKode(), (string) $obj->getTekstbloknummer(), (string) $obj->getTekstregelnummer()));
            } // if key === null
            GsTekstblokkenHtmlPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsTekstblokkenHtml object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsTekstblokkenHtml) {
                $key = serialize(array((string) $value->getTekstmodule(), (string) $value->getTekstsoort(), (string) $value->getTekstNivoKode(), (string) $value->getTekstbloknummer(), (string) $value->getTekstregelnummer()));
            } elseif (is_array($value) && count($value) === 5) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsTekstblokkenHtml object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsTekstblokkenHtmlPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsTekstblokkenHtml Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsTekstblokkenHtmlPeer::$instances[$key])) {
                return GsTekstblokkenHtmlPeer::$instances[$key];
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
        foreach (GsTekstblokkenHtmlPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsTekstblokkenHtmlPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_tekstblokken_html
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
        if ($row[$startcol + 3] === null && $row[$startcol + 5] === null && $row[$startcol + 6] === null && $row[$startcol + 7] === null && $row[$startcol + 8] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 3], (string) $row[$startcol + 5], (string) $row[$startcol + 6], (string) $row[$startcol + 7], (string) $row[$startcol + 8]));
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

        return array((int) $row[$startcol + 3], (int) $row[$startcol + 5], (int) $row[$startcol + 6], (int) $row[$startcol + 7], (int) $row[$startcol + 8]);
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
        $cls = GsTekstblokkenHtmlPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsTekstblokkenHtmlPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsTekstblokkenHtmlPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsTekstblokkenHtmlPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsTekstblokkenHtml object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsTekstblokkenHtmlPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsTekstblokkenHtmlPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsTekstblokkenHtmlPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsTekstblokkenHtmlPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsTekstblokkenHtmlPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsTekstblokkenHtmlPeer::DATABASE_NAME)->getTable(GsTekstblokkenHtmlPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsTekstblokkenHtmlPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsTekstblokkenHtmlPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsTekstblokkenHtmlTableMap());
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
        return GsTekstblokkenHtmlPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsTekstblokkenHtml or Criteria object.
     *
     * @param      mixed $values Criteria or GsTekstblokkenHtml object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsTekstblokkenHtmlPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsTekstblokkenHtml object
        }


        // Set the correct dbName
        $criteria->setDbName(GsTekstblokkenHtmlPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsTekstblokkenHtml or Criteria object.
     *
     * @param      mixed $values Criteria or GsTekstblokkenHtml object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsTekstblokkenHtmlPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsTekstblokkenHtmlPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsTekstblokkenHtmlPeer::TEKSTMODULE);
            $value = $criteria->remove(GsTekstblokkenHtmlPeer::TEKSTMODULE);
            if ($value) {
                $selectCriteria->add(GsTekstblokkenHtmlPeer::TEKSTMODULE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsTekstblokkenHtmlPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsTekstblokkenHtmlPeer::TEKSTSOORT);
            $value = $criteria->remove(GsTekstblokkenHtmlPeer::TEKSTSOORT);
            if ($value) {
                $selectCriteria->add(GsTekstblokkenHtmlPeer::TEKSTSOORT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsTekstblokkenHtmlPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsTekstblokkenHtmlPeer::TEKST_NIVO_KODE);
            $value = $criteria->remove(GsTekstblokkenHtmlPeer::TEKST_NIVO_KODE);
            if ($value) {
                $selectCriteria->add(GsTekstblokkenHtmlPeer::TEKST_NIVO_KODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsTekstblokkenHtmlPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsTekstblokkenHtmlPeer::TEKSTBLOKNUMMER);
            $value = $criteria->remove(GsTekstblokkenHtmlPeer::TEKSTBLOKNUMMER);
            if ($value) {
                $selectCriteria->add(GsTekstblokkenHtmlPeer::TEKSTBLOKNUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsTekstblokkenHtmlPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsTekstblokkenHtmlPeer::TEKSTREGELNUMMER);
            $value = $criteria->remove(GsTekstblokkenHtmlPeer::TEKSTREGELNUMMER);
            if ($value) {
                $selectCriteria->add(GsTekstblokkenHtmlPeer::TEKSTREGELNUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsTekstblokkenHtmlPeer::TABLE_NAME);
            }

        } else { // $values is GsTekstblokkenHtml object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsTekstblokkenHtmlPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_tekstblokken_html table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsTekstblokkenHtmlPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsTekstblokkenHtmlPeer::TABLE_NAME, $con, GsTekstblokkenHtmlPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsTekstblokkenHtmlPeer::clearInstancePool();
            GsTekstblokkenHtmlPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsTekstblokkenHtml or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsTekstblokkenHtml object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsTekstblokkenHtmlPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsTekstblokkenHtmlPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsTekstblokkenHtml) { // it's a model object
            // invalidate the cache for this single object
            GsTekstblokkenHtmlPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsTekstblokkenHtmlPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsTekstblokkenHtmlPeer::TEKSTMODULE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsTekstblokkenHtmlPeer::TEKSTSOORT, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(GsTekstblokkenHtmlPeer::TEKST_NIVO_KODE, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(GsTekstblokkenHtmlPeer::TEKSTBLOKNUMMER, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(GsTekstblokkenHtmlPeer::TEKSTREGELNUMMER, $value[4]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsTekstblokkenHtmlPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsTekstblokkenHtmlPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsTekstblokkenHtmlPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsTekstblokkenHtml object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsTekstblokkenHtml $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsTekstblokkenHtmlPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsTekstblokkenHtmlPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsTekstblokkenHtmlPeer::DATABASE_NAME, GsTekstblokkenHtmlPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $tekstmodule
     * @param   int $tekstsoort
     * @param   int $tekst_nivo_kode
     * @param   int $tekstbloknummer
     * @param   int $tekstregelnummer
     * @param      PropelPDO $con
     * @return GsTekstblokkenHtml
     */
    public static function retrieveByPK($tekstmodule, $tekstsoort, $tekst_nivo_kode, $tekstbloknummer, $tekstregelnummer, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $tekstmodule, (string) $tekstsoort, (string) $tekst_nivo_kode, (string) $tekstbloknummer, (string) $tekstregelnummer));
         if (null !== ($obj = GsTekstblokkenHtmlPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsTekstblokkenHtmlPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsTekstblokkenHtmlPeer::DATABASE_NAME);
        $criteria->add(GsTekstblokkenHtmlPeer::TEKSTMODULE, $tekstmodule);
        $criteria->add(GsTekstblokkenHtmlPeer::TEKSTSOORT, $tekstsoort);
        $criteria->add(GsTekstblokkenHtmlPeer::TEKST_NIVO_KODE, $tekst_nivo_kode);
        $criteria->add(GsTekstblokkenHtmlPeer::TEKSTBLOKNUMMER, $tekstbloknummer);
        $criteria->add(GsTekstblokkenHtmlPeer::TEKSTREGELNUMMER, $tekstregelnummer);
        $v = GsTekstblokkenHtmlPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsTekstblokkenHtmlPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsTekstblokkenHtmlPeer::buildTableMap();

