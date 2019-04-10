<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsAanvullendeMedicatiebewakingsgegevens;
use PharmaIntelligence\GstandaardBundle\Model\GsAanvullendeMedicatiebewakingsgegevensPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsAanvullendeMedicatiebewakingsgegevensTableMap;

abstract class BaseGsAanvullendeMedicatiebewakingsgegevensPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_aanvullende_medicatiebewakingsgegevens';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAanvullendeMedicatiebewakingsgegevens';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsAanvullendeMedicatiebewakingsgegevensTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_aanvullende_medicatiebewakingsgegevens.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_aanvullende_medicatiebewakingsgegevens.mutatiekode';

    /** the column name for the thesnr_bewakingssoort field */
    const THESNR_BEWAKINGSSOORT = 'gs_aanvullende_medicatiebewakingsgegevens.thesnr_bewakingssoort';

    /** the column name for the bewakingssoort field */
    const BEWAKINGSSOORT = 'gs_aanvullende_medicatiebewakingsgegevens.bewakingssoort';

    /** the column name for the medicatiebewaking_identificerende_code field */
    const MEDICATIEBEWAKING_IDENTIFICERENDE_CODE = 'gs_aanvullende_medicatiebewakingsgegevens.medicatiebewaking_identificerende_code';

    /** the column name for the thesaurusverwijzing_aanvullende_voorwaarde field */
    const THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE = 'gs_aanvullende_medicatiebewakingsgegevens.thesaurusverwijzing_aanvullende_voorwaarde';

    /** the column name for the medicatiebewaking_aanvullende_voorwaarde field */
    const MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE = 'gs_aanvullende_medicatiebewakingsgegevens.medicatiebewaking_aanvullende_voorwaarde';

    /** the column name for the codering_waarde_1_alfanumeriek field */
    const CODERING_WAARDE_1_ALFANUMERIEK = 'gs_aanvullende_medicatiebewakingsgegevens.codering_waarde_1_alfanumeriek';

    /** the column name for the codering_waarde_2_numeriek field */
    const CODERING_WAARDE_2_NUMERIEK = 'gs_aanvullende_medicatiebewakingsgegevens.codering_waarde_2_numeriek';

    /** the column name for the codering_waarde_3_numeriek field */
    const CODERING_WAARDE_3_NUMERIEK = 'gs_aanvullende_medicatiebewakingsgegevens.codering_waarde_3_numeriek';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsAanvullendeMedicatiebewakingsgegevens objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsAanvullendeMedicatiebewakingsgegevens[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsAanvullendeMedicatiebewakingsgegevensPeer::$fieldNames[GsAanvullendeMedicatiebewakingsgegevensPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'ThesnrBewakingssoort', 'Bewakingssoort', 'MedicatiebewakingIdentificerendeCode', 'ThesaurusverwijzingAanvullendeVoorwaarde', 'MedicatiebewakingAanvullendeVoorwaarde', 'CoderingWaarde1Alfanumeriek', 'CoderingWaarde2Numeriek', 'CoderingWaarde3Numeriek', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'thesnrBewakingssoort', 'bewakingssoort', 'medicatiebewakingIdentificerendeCode', 'thesaurusverwijzingAanvullendeVoorwaarde', 'medicatiebewakingAanvullendeVoorwaarde', 'coderingWaarde1Alfanumeriek', 'coderingWaarde2Numeriek', 'coderingWaarde3Numeriek', ),
        BasePeer::TYPE_COLNAME => array (GsAanvullendeMedicatiebewakingsgegevensPeer::BESTANDNUMMER, GsAanvullendeMedicatiebewakingsgegevensPeer::MUTATIEKODE, GsAanvullendeMedicatiebewakingsgegevensPeer::THESNR_BEWAKINGSSOORT, GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT, GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, GsAanvullendeMedicatiebewakingsgegevensPeer::THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE, GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_1_ALFANUMERIEK, GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK, GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_3_NUMERIEK, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'THESNR_BEWAKINGSSOORT', 'BEWAKINGSSOORT', 'MEDICATIEBEWAKING_IDENTIFICERENDE_CODE', 'THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE', 'MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE', 'CODERING_WAARDE_1_ALFANUMERIEK', 'CODERING_WAARDE_2_NUMERIEK', 'CODERING_WAARDE_3_NUMERIEK', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'thesnr_bewakingssoort', 'bewakingssoort', 'medicatiebewaking_identificerende_code', 'thesaurusverwijzing_aanvullende_voorwaarde', 'medicatiebewaking_aanvullende_voorwaarde', 'codering_waarde_1_alfanumeriek', 'codering_waarde_2_numeriek', 'codering_waarde_3_numeriek', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsAanvullendeMedicatiebewakingsgegevensPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'ThesnrBewakingssoort' => 2, 'Bewakingssoort' => 3, 'MedicatiebewakingIdentificerendeCode' => 4, 'ThesaurusverwijzingAanvullendeVoorwaarde' => 5, 'MedicatiebewakingAanvullendeVoorwaarde' => 6, 'CoderingWaarde1Alfanumeriek' => 7, 'CoderingWaarde2Numeriek' => 8, 'CoderingWaarde3Numeriek' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'thesnrBewakingssoort' => 2, 'bewakingssoort' => 3, 'medicatiebewakingIdentificerendeCode' => 4, 'thesaurusverwijzingAanvullendeVoorwaarde' => 5, 'medicatiebewakingAanvullendeVoorwaarde' => 6, 'coderingWaarde1Alfanumeriek' => 7, 'coderingWaarde2Numeriek' => 8, 'coderingWaarde3Numeriek' => 9, ),
        BasePeer::TYPE_COLNAME => array (GsAanvullendeMedicatiebewakingsgegevensPeer::BESTANDNUMMER => 0, GsAanvullendeMedicatiebewakingsgegevensPeer::MUTATIEKODE => 1, GsAanvullendeMedicatiebewakingsgegevensPeer::THESNR_BEWAKINGSSOORT => 2, GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT => 3, GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE => 4, GsAanvullendeMedicatiebewakingsgegevensPeer::THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE => 5, GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE => 6, GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_1_ALFANUMERIEK => 7, GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK => 8, GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_3_NUMERIEK => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'THESNR_BEWAKINGSSOORT' => 2, 'BEWAKINGSSOORT' => 3, 'MEDICATIEBEWAKING_IDENTIFICERENDE_CODE' => 4, 'THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE' => 5, 'MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE' => 6, 'CODERING_WAARDE_1_ALFANUMERIEK' => 7, 'CODERING_WAARDE_2_NUMERIEK' => 8, 'CODERING_WAARDE_3_NUMERIEK' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'thesnr_bewakingssoort' => 2, 'bewakingssoort' => 3, 'medicatiebewaking_identificerende_code' => 4, 'thesaurusverwijzing_aanvullende_voorwaarde' => 5, 'medicatiebewaking_aanvullende_voorwaarde' => 6, 'codering_waarde_1_alfanumeriek' => 7, 'codering_waarde_2_numeriek' => 8, 'codering_waarde_3_numeriek' => 9, ),
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
        $toNames = GsAanvullendeMedicatiebewakingsgegevensPeer::getFieldNames($toType);
        $key = isset(GsAanvullendeMedicatiebewakingsgegevensPeer::$fieldKeys[$fromType][$name]) ? GsAanvullendeMedicatiebewakingsgegevensPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsAanvullendeMedicatiebewakingsgegevensPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsAanvullendeMedicatiebewakingsgegevensPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsAanvullendeMedicatiebewakingsgegevensPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsAanvullendeMedicatiebewakingsgegevensPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsAanvullendeMedicatiebewakingsgegevensPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsAanvullendeMedicatiebewakingsgegevensPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsAanvullendeMedicatiebewakingsgegevensPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsAanvullendeMedicatiebewakingsgegevensPeer::THESNR_BEWAKINGSSOORT);
            $criteria->addSelectColumn(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT);
            $criteria->addSelectColumn(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE);
            $criteria->addSelectColumn(GsAanvullendeMedicatiebewakingsgegevensPeer::THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE);
            $criteria->addSelectColumn(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE);
            $criteria->addSelectColumn(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_1_ALFANUMERIEK);
            $criteria->addSelectColumn(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK);
            $criteria->addSelectColumn(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_3_NUMERIEK);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.thesnr_bewakingssoort');
            $criteria->addSelectColumn($alias . '.bewakingssoort');
            $criteria->addSelectColumn($alias . '.medicatiebewaking_identificerende_code');
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
        $criteria->setPrimaryTableName(GsAanvullendeMedicatiebewakingsgegevensPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsAanvullendeMedicatiebewakingsgegevensPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsAanvullendeMedicatiebewakingsgegevens
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsAanvullendeMedicatiebewakingsgegevensPeer::doSelect($critcopy, $con);
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
        return GsAanvullendeMedicatiebewakingsgegevensPeer::populateObjects(GsAanvullendeMedicatiebewakingsgegevensPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsAanvullendeMedicatiebewakingsgegevensPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME);

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
     * @param GsAanvullendeMedicatiebewakingsgegevens $obj A GsAanvullendeMedicatiebewakingsgegevens object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getBewakingssoort(), (string) $obj->getMedicatiebewakingIdentificerendeCode(), (string) $obj->getMedicatiebewakingAanvullendeVoorwaarde(), (string) $obj->getCoderingWaarde1Alfanumeriek(), (string) $obj->getCoderingWaarde2Numeriek()));
            } // if key === null
            GsAanvullendeMedicatiebewakingsgegevensPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsAanvullendeMedicatiebewakingsgegevens object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsAanvullendeMedicatiebewakingsgegevens) {
                $key = serialize(array((string) $value->getBewakingssoort(), (string) $value->getMedicatiebewakingIdentificerendeCode(), (string) $value->getMedicatiebewakingAanvullendeVoorwaarde(), (string) $value->getCoderingWaarde1Alfanumeriek(), (string) $value->getCoderingWaarde2Numeriek()));
            } elseif (is_array($value) && count($value) === 5) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsAanvullendeMedicatiebewakingsgegevens object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsAanvullendeMedicatiebewakingsgegevensPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsAanvullendeMedicatiebewakingsgegevens Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsAanvullendeMedicatiebewakingsgegevensPeer::$instances[$key])) {
                return GsAanvullendeMedicatiebewakingsgegevensPeer::$instances[$key];
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
        foreach (GsAanvullendeMedicatiebewakingsgegevensPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsAanvullendeMedicatiebewakingsgegevensPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_aanvullende_medicatiebewakingsgegevens
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
        if ($row[$startcol + 3] === null && $row[$startcol + 4] === null && $row[$startcol + 6] === null && $row[$startcol + 7] === null && $row[$startcol + 8] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 3], (string) $row[$startcol + 4], (string) $row[$startcol + 6], (string) $row[$startcol + 7], (string) $row[$startcol + 8]));
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

        return array((int) $row[$startcol + 3], (int) $row[$startcol + 4], (int) $row[$startcol + 6], (string) $row[$startcol + 7], (int) $row[$startcol + 8]);
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
        $cls = GsAanvullendeMedicatiebewakingsgegevensPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsAanvullendeMedicatiebewakingsgegevensPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsAanvullendeMedicatiebewakingsgegevensPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsAanvullendeMedicatiebewakingsgegevensPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsAanvullendeMedicatiebewakingsgegevens object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsAanvullendeMedicatiebewakingsgegevensPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsAanvullendeMedicatiebewakingsgegevensPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsAanvullendeMedicatiebewakingsgegevensPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsAanvullendeMedicatiebewakingsgegevensPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsAanvullendeMedicatiebewakingsgegevensPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related BewakingssoortOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinBewakingssoortOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsAanvullendeMedicatiebewakingsgegevensPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsAanvullendeMedicatiebewakingsgegevensPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsAanvullendeMedicatiebewakingsgegevensPeer::THESNR_BEWAKINGSSOORT, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Selects a collection of GsAanvullendeMedicatiebewakingsgegevens objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsAanvullendeMedicatiebewakingsgegevens objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinBewakingssoortOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME);
        }

        GsAanvullendeMedicatiebewakingsgegevensPeer::addSelectColumns($criteria);
        $startcol = GsAanvullendeMedicatiebewakingsgegevensPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsAanvullendeMedicatiebewakingsgegevensPeer::THESNR_BEWAKINGSSOORT, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsAanvullendeMedicatiebewakingsgegevensPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsAanvullendeMedicatiebewakingsgegevensPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsAanvullendeMedicatiebewakingsgegevensPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsAanvullendeMedicatiebewakingsgegevensPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsAanvullendeMedicatiebewakingsgegevens) to $obj2 (GsThesauriTotaal)
                $obj2->addGsAanvullendeMedicatiebewakingsgegevens($obj1);

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
        $criteria->setPrimaryTableName(GsAanvullendeMedicatiebewakingsgegevensPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsAanvullendeMedicatiebewakingsgegevensPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsAanvullendeMedicatiebewakingsgegevensPeer::THESNR_BEWAKINGSSOORT, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
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
     * Selects a collection of GsAanvullendeMedicatiebewakingsgegevens objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsAanvullendeMedicatiebewakingsgegevens objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME);
        }

        GsAanvullendeMedicatiebewakingsgegevensPeer::addSelectColumns($criteria);
        $startcol2 = GsAanvullendeMedicatiebewakingsgegevensPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(GsAanvullendeMedicatiebewakingsgegevensPeer::THESNR_BEWAKINGSSOORT, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsAanvullendeMedicatiebewakingsgegevensPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsAanvullendeMedicatiebewakingsgegevensPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsAanvullendeMedicatiebewakingsgegevensPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsAanvullendeMedicatiebewakingsgegevensPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (GsAanvullendeMedicatiebewakingsgegevens) to the collection in $obj2 (GsThesauriTotaal)
                $obj2->addGsAanvullendeMedicatiebewakingsgegevens($obj1);
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
        return Propel::getDatabaseMap(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME)->getTable(GsAanvullendeMedicatiebewakingsgegevensPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsAanvullendeMedicatiebewakingsgegevensPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsAanvullendeMedicatiebewakingsgegevensTableMap());
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
        return GsAanvullendeMedicatiebewakingsgegevensPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsAanvullendeMedicatiebewakingsgegevens or Criteria object.
     *
     * @param      mixed $values Criteria or GsAanvullendeMedicatiebewakingsgegevens object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsAanvullendeMedicatiebewakingsgegevens object
        }


        // Set the correct dbName
        $criteria->setDbName(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsAanvullendeMedicatiebewakingsgegevens or Criteria object.
     *
     * @param      mixed $values Criteria or GsAanvullendeMedicatiebewakingsgegevens object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT);
            $value = $criteria->remove(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT);
            if ($value) {
                $selectCriteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsAanvullendeMedicatiebewakingsgegevensPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE);
            $value = $criteria->remove(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE);
            if ($value) {
                $selectCriteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsAanvullendeMedicatiebewakingsgegevensPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE);
            $value = $criteria->remove(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE);
            if ($value) {
                $selectCriteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsAanvullendeMedicatiebewakingsgegevensPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_1_ALFANUMERIEK);
            $value = $criteria->remove(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_1_ALFANUMERIEK);
            if ($value) {
                $selectCriteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_1_ALFANUMERIEK, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsAanvullendeMedicatiebewakingsgegevensPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK);
            $value = $criteria->remove(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK);
            if ($value) {
                $selectCriteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsAanvullendeMedicatiebewakingsgegevensPeer::TABLE_NAME);
            }

        } else { // $values is GsAanvullendeMedicatiebewakingsgegevens object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_aanvullende_medicatiebewakingsgegevens table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsAanvullendeMedicatiebewakingsgegevensPeer::TABLE_NAME, $con, GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsAanvullendeMedicatiebewakingsgegevensPeer::clearInstancePool();
            GsAanvullendeMedicatiebewakingsgegevensPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsAanvullendeMedicatiebewakingsgegevens or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsAanvullendeMedicatiebewakingsgegevens object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsAanvullendeMedicatiebewakingsgegevensPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsAanvullendeMedicatiebewakingsgegevens) { // it's a model object
            // invalidate the cache for this single object
            GsAanvullendeMedicatiebewakingsgegevensPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_1_ALFANUMERIEK, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK, $value[4]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsAanvullendeMedicatiebewakingsgegevensPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsAanvullendeMedicatiebewakingsgegevensPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsAanvullendeMedicatiebewakingsgegevens object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsAanvullendeMedicatiebewakingsgegevens $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsAanvullendeMedicatiebewakingsgegevensPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME, GsAanvullendeMedicatiebewakingsgegevensPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $bewakingssoort
     * @param   int $medicatiebewaking_identificerende_code
     * @param   int $medicatiebewaking_aanvullende_voorwaarde
     * @param   string $codering_waarde_1_alfanumeriek
     * @param   int $codering_waarde_2_numeriek
     * @param      PropelPDO $con
     * @return GsAanvullendeMedicatiebewakingsgegevens
     */
    public static function retrieveByPK($bewakingssoort, $medicatiebewaking_identificerende_code, $medicatiebewaking_aanvullende_voorwaarde, $codering_waarde_1_alfanumeriek, $codering_waarde_2_numeriek, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $bewakingssoort, (string) $medicatiebewaking_identificerende_code, (string) $medicatiebewaking_aanvullende_voorwaarde, (string) $codering_waarde_1_alfanumeriek, (string) $codering_waarde_2_numeriek));
         if (null !== ($obj = GsAanvullendeMedicatiebewakingsgegevensPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME);
        $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT, $bewakingssoort);
        $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, $medicatiebewaking_identificerende_code);
        $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, $medicatiebewaking_aanvullende_voorwaarde);
        $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_1_ALFANUMERIEK, $codering_waarde_1_alfanumeriek);
        $criteria->add(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK, $codering_waarde_2_numeriek);
        $v = GsAanvullendeMedicatiebewakingsgegevensPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsAanvullendeMedicatiebewakingsgegevensPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsAanvullendeMedicatiebewakingsgegevensPeer::buildTableMap();

