<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsDoseringenUitzonderingenOpBasis;
use PharmaIntelligence\GstandaardBundle\Model\GsDoseringenUitzonderingenOpBasisPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsDoseringenUitzonderingenOpBasisTableMap;

abstract class BaseGsDoseringenUitzonderingenOpBasisPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_doseringen_uitzonderingen_op_basis';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDoseringenUitzonderingenOpBasis';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsDoseringenUitzonderingenOpBasisTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_doseringen_uitzonderingen_op_basis.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_doseringen_uitzonderingen_op_basis.mutatiekode';

    /** the column name for the dosisbasisnummer field */
    const DOSISBASISNUMMER = 'gs_doseringen_uitzonderingen_op_basis.dosisbasisnummer';

    /** the column name for the identificerend_volgnummer field */
    const IDENTIFICEREND_VOLGNUMMER = 'gs_doseringen_uitzonderingen_op_basis.identificerend_volgnummer';

    /** the column name for the thesaurus_zorggroepcodering field */
    const THESAURUS_ZORGGROEPCODERING = 'gs_doseringen_uitzonderingen_op_basis.thesaurus_zorggroepcodering';

    /** the column name for the zorggroepcodering field */
    const ZORGGROEPCODERING = 'gs_doseringen_uitzonderingen_op_basis.zorggroepcodering';

    /** the column name for the icpc1nummer field */
    const ICPC1NUMMER = 'gs_doseringen_uitzonderingen_op_basis.icpc1nummer';

    /** the column name for the thesaurus_verbijzondering field */
    const THESAURUS_VERBIJZONDERING = 'gs_doseringen_uitzonderingen_op_basis.thesaurus_verbijzondering';

    /** the column name for the verbijzondering field */
    const VERBIJZONDERING = 'gs_doseringen_uitzonderingen_op_basis.verbijzondering';

    /** the column name for the icpc2nummer field */
    const ICPC2NUMMER = 'gs_doseringen_uitzonderingen_op_basis.icpc2nummer';

    /** the column name for the icd10nummer field */
    const ICD10NUMMER = 'gs_doseringen_uitzonderingen_op_basis.icd10nummer';

    /** the column name for the thesaurus_afwijkende_toedieningsweg field */
    const THESAURUS_AFWIJKENDE_TOEDIENINGSWEG = 'gs_doseringen_uitzonderingen_op_basis.thesaurus_afwijkende_toedieningsweg';

    /** the column name for the toedieningsweg_code field */
    const TOEDIENINGSWEG_CODE = 'gs_doseringen_uitzonderingen_op_basis.toedieningsweg_code';

    /** the column name for the dosiscategorienummer field */
    const DOSISCATEGORIENUMMER = 'gs_doseringen_uitzonderingen_op_basis.dosiscategorienummer';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsDoseringenUitzonderingenOpBasis objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsDoseringenUitzonderingenOpBasis[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsDoseringenUitzonderingenOpBasisPeer::$fieldNames[GsDoseringenUitzonderingenOpBasisPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Dosisbasisnummer', 'IdentificerendVolgnummer', 'ThesaurusZorggroepcodering', 'Zorggroepcodering', 'Icpc1nummer', 'ThesaurusVerbijzondering', 'Verbijzondering', 'Icpc2nummer', 'Icd10nummer', 'ThesaurusAfwijkendeToedieningsweg', 'ToedieningswegCode', 'Dosiscategorienummer', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'dosisbasisnummer', 'identificerendVolgnummer', 'thesaurusZorggroepcodering', 'zorggroepcodering', 'icpc1nummer', 'thesaurusVerbijzondering', 'verbijzondering', 'icpc2nummer', 'icd10nummer', 'thesaurusAfwijkendeToedieningsweg', 'toedieningswegCode', 'dosiscategorienummer', ),
        BasePeer::TYPE_COLNAME => array (GsDoseringenUitzonderingenOpBasisPeer::BESTANDNUMMER, GsDoseringenUitzonderingenOpBasisPeer::MUTATIEKODE, GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER, GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER, GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_ZORGGROEPCODERING, GsDoseringenUitzonderingenOpBasisPeer::ZORGGROEPCODERING, GsDoseringenUitzonderingenOpBasisPeer::ICPC1NUMMER, GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_VERBIJZONDERING, GsDoseringenUitzonderingenOpBasisPeer::VERBIJZONDERING, GsDoseringenUitzonderingenOpBasisPeer::ICPC2NUMMER, GsDoseringenUitzonderingenOpBasisPeer::ICD10NUMMER, GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_AFWIJKENDE_TOEDIENINGSWEG, GsDoseringenUitzonderingenOpBasisPeer::TOEDIENINGSWEG_CODE, GsDoseringenUitzonderingenOpBasisPeer::DOSISCATEGORIENUMMER, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'DOSISBASISNUMMER', 'IDENTIFICEREND_VOLGNUMMER', 'THESAURUS_ZORGGROEPCODERING', 'ZORGGROEPCODERING', 'ICPC1NUMMER', 'THESAURUS_VERBIJZONDERING', 'VERBIJZONDERING', 'ICPC2NUMMER', 'ICD10NUMMER', 'THESAURUS_AFWIJKENDE_TOEDIENINGSWEG', 'TOEDIENINGSWEG_CODE', 'DOSISCATEGORIENUMMER', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'dosisbasisnummer', 'identificerend_volgnummer', 'thesaurus_zorggroepcodering', 'zorggroepcodering', 'icpc1nummer', 'thesaurus_verbijzondering', 'verbijzondering', 'icpc2nummer', 'icd10nummer', 'thesaurus_afwijkende_toedieningsweg', 'toedieningsweg_code', 'dosiscategorienummer', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsDoseringenUitzonderingenOpBasisPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Dosisbasisnummer' => 2, 'IdentificerendVolgnummer' => 3, 'ThesaurusZorggroepcodering' => 4, 'Zorggroepcodering' => 5, 'Icpc1nummer' => 6, 'ThesaurusVerbijzondering' => 7, 'Verbijzondering' => 8, 'Icpc2nummer' => 9, 'Icd10nummer' => 10, 'ThesaurusAfwijkendeToedieningsweg' => 11, 'ToedieningswegCode' => 12, 'Dosiscategorienummer' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'dosisbasisnummer' => 2, 'identificerendVolgnummer' => 3, 'thesaurusZorggroepcodering' => 4, 'zorggroepcodering' => 5, 'icpc1nummer' => 6, 'thesaurusVerbijzondering' => 7, 'verbijzondering' => 8, 'icpc2nummer' => 9, 'icd10nummer' => 10, 'thesaurusAfwijkendeToedieningsweg' => 11, 'toedieningswegCode' => 12, 'dosiscategorienummer' => 13, ),
        BasePeer::TYPE_COLNAME => array (GsDoseringenUitzonderingenOpBasisPeer::BESTANDNUMMER => 0, GsDoseringenUitzonderingenOpBasisPeer::MUTATIEKODE => 1, GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER => 2, GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER => 3, GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_ZORGGROEPCODERING => 4, GsDoseringenUitzonderingenOpBasisPeer::ZORGGROEPCODERING => 5, GsDoseringenUitzonderingenOpBasisPeer::ICPC1NUMMER => 6, GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_VERBIJZONDERING => 7, GsDoseringenUitzonderingenOpBasisPeer::VERBIJZONDERING => 8, GsDoseringenUitzonderingenOpBasisPeer::ICPC2NUMMER => 9, GsDoseringenUitzonderingenOpBasisPeer::ICD10NUMMER => 10, GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_AFWIJKENDE_TOEDIENINGSWEG => 11, GsDoseringenUitzonderingenOpBasisPeer::TOEDIENINGSWEG_CODE => 12, GsDoseringenUitzonderingenOpBasisPeer::DOSISCATEGORIENUMMER => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'DOSISBASISNUMMER' => 2, 'IDENTIFICEREND_VOLGNUMMER' => 3, 'THESAURUS_ZORGGROEPCODERING' => 4, 'ZORGGROEPCODERING' => 5, 'ICPC1NUMMER' => 6, 'THESAURUS_VERBIJZONDERING' => 7, 'VERBIJZONDERING' => 8, 'ICPC2NUMMER' => 9, 'ICD10NUMMER' => 10, 'THESAURUS_AFWIJKENDE_TOEDIENINGSWEG' => 11, 'TOEDIENINGSWEG_CODE' => 12, 'DOSISCATEGORIENUMMER' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'dosisbasisnummer' => 2, 'identificerend_volgnummer' => 3, 'thesaurus_zorggroepcodering' => 4, 'zorggroepcodering' => 5, 'icpc1nummer' => 6, 'thesaurus_verbijzondering' => 7, 'verbijzondering' => 8, 'icpc2nummer' => 9, 'icd10nummer' => 10, 'thesaurus_afwijkende_toedieningsweg' => 11, 'toedieningsweg_code' => 12, 'dosiscategorienummer' => 13, ),
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
        $toNames = GsDoseringenUitzonderingenOpBasisPeer::getFieldNames($toType);
        $key = isset(GsDoseringenUitzonderingenOpBasisPeer::$fieldKeys[$fromType][$name]) ? GsDoseringenUitzonderingenOpBasisPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsDoseringenUitzonderingenOpBasisPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsDoseringenUitzonderingenOpBasisPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsDoseringenUitzonderingenOpBasisPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsDoseringenUitzonderingenOpBasisPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsDoseringenUitzonderingenOpBasisPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsDoseringenUitzonderingenOpBasisPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsDoseringenUitzonderingenOpBasisPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER);
            $criteria->addSelectColumn(GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER);
            $criteria->addSelectColumn(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_ZORGGROEPCODERING);
            $criteria->addSelectColumn(GsDoseringenUitzonderingenOpBasisPeer::ZORGGROEPCODERING);
            $criteria->addSelectColumn(GsDoseringenUitzonderingenOpBasisPeer::ICPC1NUMMER);
            $criteria->addSelectColumn(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_VERBIJZONDERING);
            $criteria->addSelectColumn(GsDoseringenUitzonderingenOpBasisPeer::VERBIJZONDERING);
            $criteria->addSelectColumn(GsDoseringenUitzonderingenOpBasisPeer::ICPC2NUMMER);
            $criteria->addSelectColumn(GsDoseringenUitzonderingenOpBasisPeer::ICD10NUMMER);
            $criteria->addSelectColumn(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_AFWIJKENDE_TOEDIENINGSWEG);
            $criteria->addSelectColumn(GsDoseringenUitzonderingenOpBasisPeer::TOEDIENINGSWEG_CODE);
            $criteria->addSelectColumn(GsDoseringenUitzonderingenOpBasisPeer::DOSISCATEGORIENUMMER);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.dosisbasisnummer');
            $criteria->addSelectColumn($alias . '.identificerend_volgnummer');
            $criteria->addSelectColumn($alias . '.thesaurus_zorggroepcodering');
            $criteria->addSelectColumn($alias . '.zorggroepcodering');
            $criteria->addSelectColumn($alias . '.icpc1nummer');
            $criteria->addSelectColumn($alias . '.thesaurus_verbijzondering');
            $criteria->addSelectColumn($alias . '.verbijzondering');
            $criteria->addSelectColumn($alias . '.icpc2nummer');
            $criteria->addSelectColumn($alias . '.icd10nummer');
            $criteria->addSelectColumn($alias . '.thesaurus_afwijkende_toedieningsweg');
            $criteria->addSelectColumn($alias . '.toedieningsweg_code');
            $criteria->addSelectColumn($alias . '.dosiscategorienummer');
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
        $criteria->setPrimaryTableName(GsDoseringenUitzonderingenOpBasisPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsDoseringenUitzonderingenOpBasisPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsDoseringenUitzonderingenOpBasis
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsDoseringenUitzonderingenOpBasisPeer::doSelect($critcopy, $con);
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
        return GsDoseringenUitzonderingenOpBasisPeer::populateObjects(GsDoseringenUitzonderingenOpBasisPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsDoseringenUitzonderingenOpBasisPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME);

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
     * @param GsDoseringenUitzonderingenOpBasis $obj A GsDoseringenUitzonderingenOpBasis object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getDosisbasisnummer(), (string) $obj->getIdentificerendVolgnummer()));
            } // if key === null
            GsDoseringenUitzonderingenOpBasisPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsDoseringenUitzonderingenOpBasis object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsDoseringenUitzonderingenOpBasis) {
                $key = serialize(array((string) $value->getDosisbasisnummer(), (string) $value->getIdentificerendVolgnummer()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsDoseringenUitzonderingenOpBasis object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsDoseringenUitzonderingenOpBasisPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsDoseringenUitzonderingenOpBasis Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsDoseringenUitzonderingenOpBasisPeer::$instances[$key])) {
                return GsDoseringenUitzonderingenOpBasisPeer::$instances[$key];
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
        foreach (GsDoseringenUitzonderingenOpBasisPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsDoseringenUitzonderingenOpBasisPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_doseringen_uitzonderingen_op_basis
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
        $cls = GsDoseringenUitzonderingenOpBasisPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsDoseringenUitzonderingenOpBasisPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsDoseringenUitzonderingenOpBasisPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsDoseringenUitzonderingenOpBasisPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsDoseringenUitzonderingenOpBasis object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsDoseringenUitzonderingenOpBasisPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsDoseringenUitzonderingenOpBasisPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsDoseringenUitzonderingenOpBasisPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsDoseringenUitzonderingenOpBasisPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsDoseringenUitzonderingenOpBasisPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME)->getTable(GsDoseringenUitzonderingenOpBasisPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsDoseringenUitzonderingenOpBasisPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsDoseringenUitzonderingenOpBasisTableMap());
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
        return GsDoseringenUitzonderingenOpBasisPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsDoseringenUitzonderingenOpBasis or Criteria object.
     *
     * @param      mixed $values Criteria or GsDoseringenUitzonderingenOpBasis object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsDoseringenUitzonderingenOpBasis object
        }


        // Set the correct dbName
        $criteria->setDbName(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsDoseringenUitzonderingenOpBasis or Criteria object.
     *
     * @param      mixed $values Criteria or GsDoseringenUitzonderingenOpBasis object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER);
            $value = $criteria->remove(GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER);
            if ($value) {
                $selectCriteria->add(GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsDoseringenUitzonderingenOpBasisPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER);
            $value = $criteria->remove(GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER);
            if ($value) {
                $selectCriteria->add(GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsDoseringenUitzonderingenOpBasisPeer::TABLE_NAME);
            }

        } else { // $values is GsDoseringenUitzonderingenOpBasis object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_doseringen_uitzonderingen_op_basis table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsDoseringenUitzonderingenOpBasisPeer::TABLE_NAME, $con, GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsDoseringenUitzonderingenOpBasisPeer::clearInstancePool();
            GsDoseringenUitzonderingenOpBasisPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsDoseringenUitzonderingenOpBasis or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsDoseringenUitzonderingenOpBasis object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsDoseringenUitzonderingenOpBasisPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsDoseringenUitzonderingenOpBasis) { // it's a model object
            // invalidate the cache for this single object
            GsDoseringenUitzonderingenOpBasisPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsDoseringenUitzonderingenOpBasisPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsDoseringenUitzonderingenOpBasisPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsDoseringenUitzonderingenOpBasis object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsDoseringenUitzonderingenOpBasis $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsDoseringenUitzonderingenOpBasisPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME, GsDoseringenUitzonderingenOpBasisPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $dosisbasisnummer
     * @param   int $identificerend_volgnummer
     * @param      PropelPDO $con
     * @return GsDoseringenUitzonderingenOpBasis
     */
    public static function retrieveByPK($dosisbasisnummer, $identificerend_volgnummer, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $dosisbasisnummer, (string) $identificerend_volgnummer));
         if (null !== ($obj = GsDoseringenUitzonderingenOpBasisPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME);
        $criteria->add(GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER, $dosisbasisnummer);
        $criteria->add(GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER, $identificerend_volgnummer);
        $v = GsDoseringenUitzonderingenOpBasisPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsDoseringenUitzonderingenOpBasisPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsDoseringenUitzonderingenOpBasisPeer::buildTableMap();

