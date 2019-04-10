<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificPeer;
use PharmaIntelligence\GstandaardBundle\Model\Ruggengraat;
use PharmaIntelligence\GstandaardBundle\Model\RuggengraatPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\RuggengraatTableMap;

abstract class BaseRuggengraatPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gstandaard_ruggengraat';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\Ruggengraat';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\RuggengraatTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the zindex_nummer field */
    const ZINDEX_NUMMER = 'gstandaard_ruggengraat.zindex_nummer';

    /** the column name for the hpk field */
    const HPK = 'gstandaard_ruggengraat.hpk';

    /** the column name for the prk field */
    const PRK = 'gstandaard_ruggengraat.prk';

    /** the column name for the gpk field */
    const GPK = 'gstandaard_ruggengraat.gpk';

    /** the column name for the atc field */
    const ATC = 'gstandaard_ruggengraat.atc';

    /** the column name for the artikel_naam field */
    const ARTIKEL_NAAM = 'gstandaard_ruggengraat.artikel_naam';

    /** the column name for the hpk_naam field */
    const HPK_NAAM = 'gstandaard_ruggengraat.hpk_naam';

    /** the column name for the prk_naam field */
    const PRK_NAAM = 'gstandaard_ruggengraat.prk_naam';

    /** the column name for the gpk_naam field */
    const GPK_NAAM = 'gstandaard_ruggengraat.gpk_naam';

    /** the column name for the atc_naam field */
    const ATC_NAAM = 'gstandaard_ruggengraat.atc_naam';

    /** the column name for the leverancier_nummer field */
    const LEVERANCIER_NUMMER = 'gstandaard_ruggengraat.leverancier_nummer';

    /** the column name for the leverancier_naam field */
    const LEVERANCIER_NAAM = 'gstandaard_ruggengraat.leverancier_naam';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Ruggengraat objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Ruggengraat[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. RuggengraatPeer::$fieldNames[RuggengraatPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('ZindexNummer', 'Hpk', 'Prk', 'Gpk', 'Atc', 'ArtikelNaam', 'HpkNaam', 'PrkNaam', 'GpkNaam', 'AtcNaam', 'LeverancierNummer', 'LeverancierNaam', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('zindexNummer', 'hpk', 'prk', 'gpk', 'atc', 'artikelNaam', 'hpkNaam', 'prkNaam', 'gpkNaam', 'atcNaam', 'leverancierNummer', 'leverancierNaam', ),
        BasePeer::TYPE_COLNAME => array (RuggengraatPeer::ZINDEX_NUMMER, RuggengraatPeer::HPK, RuggengraatPeer::PRK, RuggengraatPeer::GPK, RuggengraatPeer::ATC, RuggengraatPeer::ARTIKEL_NAAM, RuggengraatPeer::HPK_NAAM, RuggengraatPeer::PRK_NAAM, RuggengraatPeer::GPK_NAAM, RuggengraatPeer::ATC_NAAM, RuggengraatPeer::LEVERANCIER_NUMMER, RuggengraatPeer::LEVERANCIER_NAAM, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ZINDEX_NUMMER', 'HPK', 'PRK', 'GPK', 'ATC', 'ARTIKEL_NAAM', 'HPK_NAAM', 'PRK_NAAM', 'GPK_NAAM', 'ATC_NAAM', 'LEVERANCIER_NUMMER', 'LEVERANCIER_NAAM', ),
        BasePeer::TYPE_FIELDNAME => array ('zindex_nummer', 'hpk', 'prk', 'gpk', 'atc', 'artikel_naam', 'hpk_naam', 'prk_naam', 'gpk_naam', 'atc_naam', 'leverancier_nummer', 'leverancier_naam', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. RuggengraatPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('ZindexNummer' => 0, 'Hpk' => 1, 'Prk' => 2, 'Gpk' => 3, 'Atc' => 4, 'ArtikelNaam' => 5, 'HpkNaam' => 6, 'PrkNaam' => 7, 'GpkNaam' => 8, 'AtcNaam' => 9, 'LeverancierNummer' => 10, 'LeverancierNaam' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('zindexNummer' => 0, 'hpk' => 1, 'prk' => 2, 'gpk' => 3, 'atc' => 4, 'artikelNaam' => 5, 'hpkNaam' => 6, 'prkNaam' => 7, 'gpkNaam' => 8, 'atcNaam' => 9, 'leverancierNummer' => 10, 'leverancierNaam' => 11, ),
        BasePeer::TYPE_COLNAME => array (RuggengraatPeer::ZINDEX_NUMMER => 0, RuggengraatPeer::HPK => 1, RuggengraatPeer::PRK => 2, RuggengraatPeer::GPK => 3, RuggengraatPeer::ATC => 4, RuggengraatPeer::ARTIKEL_NAAM => 5, RuggengraatPeer::HPK_NAAM => 6, RuggengraatPeer::PRK_NAAM => 7, RuggengraatPeer::GPK_NAAM => 8, RuggengraatPeer::ATC_NAAM => 9, RuggengraatPeer::LEVERANCIER_NUMMER => 10, RuggengraatPeer::LEVERANCIER_NAAM => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ZINDEX_NUMMER' => 0, 'HPK' => 1, 'PRK' => 2, 'GPK' => 3, 'ATC' => 4, 'ARTIKEL_NAAM' => 5, 'HPK_NAAM' => 6, 'PRK_NAAM' => 7, 'GPK_NAAM' => 8, 'ATC_NAAM' => 9, 'LEVERANCIER_NUMMER' => 10, 'LEVERANCIER_NAAM' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('zindex_nummer' => 0, 'hpk' => 1, 'prk' => 2, 'gpk' => 3, 'atc' => 4, 'artikel_naam' => 5, 'hpk_naam' => 6, 'prk_naam' => 7, 'gpk_naam' => 8, 'atc_naam' => 9, 'leverancier_nummer' => 10, 'leverancier_naam' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
        $toNames = RuggengraatPeer::getFieldNames($toType);
        $key = isset(RuggengraatPeer::$fieldKeys[$fromType][$name]) ? RuggengraatPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(RuggengraatPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, RuggengraatPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return RuggengraatPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. RuggengraatPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(RuggengraatPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(RuggengraatPeer::ZINDEX_NUMMER);
            $criteria->addSelectColumn(RuggengraatPeer::HPK);
            $criteria->addSelectColumn(RuggengraatPeer::PRK);
            $criteria->addSelectColumn(RuggengraatPeer::GPK);
            $criteria->addSelectColumn(RuggengraatPeer::ATC);
            $criteria->addSelectColumn(RuggengraatPeer::ARTIKEL_NAAM);
            $criteria->addSelectColumn(RuggengraatPeer::HPK_NAAM);
            $criteria->addSelectColumn(RuggengraatPeer::PRK_NAAM);
            $criteria->addSelectColumn(RuggengraatPeer::GPK_NAAM);
            $criteria->addSelectColumn(RuggengraatPeer::ATC_NAAM);
            $criteria->addSelectColumn(RuggengraatPeer::LEVERANCIER_NUMMER);
            $criteria->addSelectColumn(RuggengraatPeer::LEVERANCIER_NAAM);
        } else {
            $criteria->addSelectColumn($alias . '.zindex_nummer');
            $criteria->addSelectColumn($alias . '.hpk');
            $criteria->addSelectColumn($alias . '.prk');
            $criteria->addSelectColumn($alias . '.gpk');
            $criteria->addSelectColumn($alias . '.atc');
            $criteria->addSelectColumn($alias . '.artikel_naam');
            $criteria->addSelectColumn($alias . '.hpk_naam');
            $criteria->addSelectColumn($alias . '.prk_naam');
            $criteria->addSelectColumn($alias . '.gpk_naam');
            $criteria->addSelectColumn($alias . '.atc_naam');
            $criteria->addSelectColumn($alias . '.leverancier_nummer');
            $criteria->addSelectColumn($alias . '.leverancier_naam');
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
        $criteria->setPrimaryTableName(RuggengraatPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RuggengraatPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(RuggengraatPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Ruggengraat
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = RuggengraatPeer::doSelect($critcopy, $con);
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
        return RuggengraatPeer::populateObjects(RuggengraatPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            RuggengraatPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);

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
     * @param Ruggengraat $obj A Ruggengraat object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getZindexNummer();
            } // if key === null
            RuggengraatPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Ruggengraat object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Ruggengraat) {
                $key = (string) $value->getZindexNummer();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Ruggengraat object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(RuggengraatPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Ruggengraat Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(RuggengraatPeer::$instances[$key])) {
                return RuggengraatPeer::$instances[$key];
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
        foreach (RuggengraatPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        RuggengraatPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gstandaard_ruggengraat
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
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
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

        return (int) $row[$startcol];
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
        $cls = RuggengraatPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = RuggengraatPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = RuggengraatPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                RuggengraatPeer::addInstanceToPool($obj, $key);
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
     * @return array (Ruggengraat object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = RuggengraatPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = RuggengraatPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + RuggengraatPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = RuggengraatPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            RuggengraatPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsArtikelen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsArtikelen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RuggengraatPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RuggengraatPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RuggengraatPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsHandelsproducten table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsHandelsproducten(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RuggengraatPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RuggengraatPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RuggengraatPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsNawGegevensGstandaard table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsNawGegevensGstandaard(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RuggengraatPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RuggengraatPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RuggengraatPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsVoorschrijfprGeneesmiddelIdentific table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsVoorschrijfprGeneesmiddelIdentific(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RuggengraatPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RuggengraatPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RuggengraatPeer::PRK, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsGeneriekeProducten table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsGeneriekeProducten(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RuggengraatPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RuggengraatPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RuggengraatPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsAtcCodes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsAtcCodes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RuggengraatPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RuggengraatPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RuggengraatPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);

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
     * Selects a collection of Ruggengraat objects pre-filled with their GsArtikelen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ruggengraat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsArtikelen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);
        }

        RuggengraatPeer::addSelectColumns($criteria);
        $startcol = RuggengraatPeer::NUM_HYDRATE_COLUMNS;
        GsArtikelenPeer::addSelectColumns($criteria);

        $criteria->addJoin(RuggengraatPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RuggengraatPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RuggengraatPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RuggengraatPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RuggengraatPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsArtikelenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsArtikelenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsArtikelenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Ruggengraat) to $obj2 (GsArtikelen)
                // one to one relationship
                $obj1->setGsArtikelen($obj2);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ruggengraat objects pre-filled with their GsHandelsproducten objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ruggengraat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsHandelsproducten(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);
        }

        RuggengraatPeer::addSelectColumns($criteria);
        $startcol = RuggengraatPeer::NUM_HYDRATE_COLUMNS;
        GsHandelsproductenPeer::addSelectColumns($criteria);

        $criteria->addJoin(RuggengraatPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RuggengraatPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RuggengraatPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RuggengraatPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RuggengraatPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Ruggengraat) to $obj2 (GsHandelsproducten)
                $obj2->addRuggengraat($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ruggengraat objects pre-filled with their GsNawGegevensGstandaard objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ruggengraat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsNawGegevensGstandaard(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);
        }

        RuggengraatPeer::addSelectColumns($criteria);
        $startcol = RuggengraatPeer::NUM_HYDRATE_COLUMNS;
        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);

        $criteria->addJoin(RuggengraatPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RuggengraatPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RuggengraatPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RuggengraatPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RuggengraatPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Ruggengraat) to $obj2 (GsNawGegevensGstandaard)
                $obj2->addRuggengraat($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ruggengraat objects pre-filled with their GsVoorschrijfprGeneesmiddelIdentific objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ruggengraat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsVoorschrijfprGeneesmiddelIdentific(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);
        }

        RuggengraatPeer::addSelectColumns($criteria);
        $startcol = RuggengraatPeer::NUM_HYDRATE_COLUMNS;
        GsVoorschrijfprGeneesmiddelIdentificPeer::addSelectColumns($criteria);

        $criteria->addJoin(RuggengraatPeer::PRK, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RuggengraatPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RuggengraatPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RuggengraatPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RuggengraatPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsVoorschrijfprGeneesmiddelIdentificPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsVoorschrijfprGeneesmiddelIdentificPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsVoorschrijfprGeneesmiddelIdentificPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsVoorschrijfprGeneesmiddelIdentificPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Ruggengraat) to $obj2 (GsVoorschrijfprGeneesmiddelIdentific)
                $obj2->addRuggengraat($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ruggengraat objects pre-filled with their GsGeneriekeProducten objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ruggengraat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsGeneriekeProducten(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);
        }

        RuggengraatPeer::addSelectColumns($criteria);
        $startcol = RuggengraatPeer::NUM_HYDRATE_COLUMNS;
        GsGeneriekeProductenPeer::addSelectColumns($criteria);

        $criteria->addJoin(RuggengraatPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RuggengraatPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RuggengraatPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RuggengraatPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RuggengraatPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsGeneriekeProductenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsGeneriekeProductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsGeneriekeProductenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Ruggengraat) to $obj2 (GsGeneriekeProducten)
                $obj2->addRuggengraat($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ruggengraat objects pre-filled with their GsAtcCodes objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ruggengraat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsAtcCodes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);
        }

        RuggengraatPeer::addSelectColumns($criteria);
        $startcol = RuggengraatPeer::NUM_HYDRATE_COLUMNS;
        GsAtcCodesPeer::addSelectColumns($criteria);

        $criteria->addJoin(RuggengraatPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RuggengraatPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RuggengraatPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RuggengraatPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RuggengraatPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsAtcCodesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsAtcCodesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsAtcCodesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Ruggengraat) to $obj2 (GsAtcCodes)
                $obj2->addRuggengraat($obj1);

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
        $criteria->setPrimaryTableName(RuggengraatPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RuggengraatPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RuggengraatPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::PRK, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);

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
     * Selects a collection of Ruggengraat objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ruggengraat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);
        }

        RuggengraatPeer::addSelectColumns($criteria);
        $startcol2 = RuggengraatPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsVoorschrijfprGeneesmiddelIdentificPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsVoorschrijfprGeneesmiddelIdentificPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RuggengraatPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::PRK, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RuggengraatPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RuggengraatPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RuggengraatPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RuggengraatPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined GsArtikelen rows

            $key2 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = GsArtikelenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsArtikelenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsArtikelenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj2 (GsArtikelen)
                $obj1->setGsArtikelen($obj2);
            } // if joined row not null

            // Add objects for joined GsHandelsproducten rows

            $key3 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = GsHandelsproductenPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = GsHandelsproductenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsHandelsproductenPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj3 (GsHandelsproducten)
                $obj3->addRuggengraat($obj1);
            } // if joined row not null

            // Add objects for joined GsNawGegevensGstandaard rows

            $key4 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj4 (GsNawGegevensGstandaard)
                $obj4->addRuggengraat($obj1);
            } // if joined row not null

            // Add objects for joined GsVoorschrijfprGeneesmiddelIdentific rows

            $key5 = GsVoorschrijfprGeneesmiddelIdentificPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = GsVoorschrijfprGeneesmiddelIdentificPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = GsVoorschrijfprGeneesmiddelIdentificPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsVoorschrijfprGeneesmiddelIdentificPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj5 (GsVoorschrijfprGeneesmiddelIdentific)
                $obj5->addRuggengraat($obj1);
            } // if joined row not null

            // Add objects for joined GsGeneriekeProducten rows

            $key6 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = GsGeneriekeProductenPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = GsGeneriekeProductenPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsGeneriekeProductenPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj6 (GsGeneriekeProducten)
                $obj6->addRuggengraat($obj1);
            } // if joined row not null

            // Add objects for joined GsAtcCodes rows

            $key7 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol7);
            if ($key7 !== null) {
                $obj7 = GsAtcCodesPeer::getInstanceFromPool($key7);
                if (!$obj7) {

                    $cls = GsAtcCodesPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    GsAtcCodesPeer::addInstanceToPool($obj7, $key7);
                } // if obj7 loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj7 (GsAtcCodes)
                $obj7->addRuggengraat($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsArtikelen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsArtikelen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RuggengraatPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RuggengraatPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RuggengraatPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::PRK, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsHandelsproducten table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsHandelsproducten(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RuggengraatPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RuggengraatPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RuggengraatPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::PRK, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsNawGegevensGstandaard table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsNawGegevensGstandaard(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RuggengraatPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RuggengraatPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RuggengraatPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::PRK, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsVoorschrijfprGeneesmiddelIdentific table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsVoorschrijfprGeneesmiddelIdentific(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RuggengraatPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RuggengraatPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RuggengraatPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsGeneriekeProducten table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsGeneriekeProducten(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RuggengraatPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RuggengraatPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RuggengraatPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::PRK, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related GsAtcCodes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsAtcCodes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RuggengraatPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RuggengraatPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RuggengraatPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::PRK, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

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
     * Selects a collection of Ruggengraat objects pre-filled with all related objects except GsArtikelen.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ruggengraat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsArtikelen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);
        }

        RuggengraatPeer::addSelectColumns($criteria);
        $startcol2 = RuggengraatPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsVoorschrijfprGeneesmiddelIdentificPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsVoorschrijfprGeneesmiddelIdentificPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RuggengraatPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::PRK, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RuggengraatPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RuggengraatPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RuggengraatPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RuggengraatPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsHandelsproducten rows

                $key2 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsHandelsproductenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsHandelsproductenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj2 (GsHandelsproducten)
                $obj2->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key3 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj3 (GsNawGegevensGstandaard)
                $obj3->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsVoorschrijfprGeneesmiddelIdentific rows

                $key4 = GsVoorschrijfprGeneesmiddelIdentificPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsVoorschrijfprGeneesmiddelIdentificPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsVoorschrijfprGeneesmiddelIdentificPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsVoorschrijfprGeneesmiddelIdentificPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj4 (GsVoorschrijfprGeneesmiddelIdentific)
                $obj4->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsGeneriekeProducten rows

                $key5 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsGeneriekeProductenPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsGeneriekeProductenPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsGeneriekeProductenPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj5 (GsGeneriekeProducten)
                $obj5->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsAtcCodes rows

                $key6 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsAtcCodesPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsAtcCodesPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsAtcCodesPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj6 (GsAtcCodes)
                $obj6->addRuggengraat($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ruggengraat objects pre-filled with all related objects except GsHandelsproducten.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ruggengraat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsHandelsproducten(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);
        }

        RuggengraatPeer::addSelectColumns($criteria);
        $startcol2 = RuggengraatPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsVoorschrijfprGeneesmiddelIdentificPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsVoorschrijfprGeneesmiddelIdentificPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RuggengraatPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::PRK, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RuggengraatPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RuggengraatPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RuggengraatPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RuggengraatPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsArtikelen rows

                $key2 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsArtikelenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsArtikelenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsArtikelenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj2 (GsArtikelen)
                $obj1->setGsArtikelen($obj2);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key3 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj3 (GsNawGegevensGstandaard)
                $obj3->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsVoorschrijfprGeneesmiddelIdentific rows

                $key4 = GsVoorschrijfprGeneesmiddelIdentificPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsVoorschrijfprGeneesmiddelIdentificPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsVoorschrijfprGeneesmiddelIdentificPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsVoorschrijfprGeneesmiddelIdentificPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj4 (GsVoorschrijfprGeneesmiddelIdentific)
                $obj4->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsGeneriekeProducten rows

                $key5 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsGeneriekeProductenPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsGeneriekeProductenPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsGeneriekeProductenPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj5 (GsGeneriekeProducten)
                $obj5->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsAtcCodes rows

                $key6 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsAtcCodesPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsAtcCodesPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsAtcCodesPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj6 (GsAtcCodes)
                $obj6->addRuggengraat($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ruggengraat objects pre-filled with all related objects except GsNawGegevensGstandaard.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ruggengraat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsNawGegevensGstandaard(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);
        }

        RuggengraatPeer::addSelectColumns($criteria);
        $startcol2 = RuggengraatPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsVoorschrijfprGeneesmiddelIdentificPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsVoorschrijfprGeneesmiddelIdentificPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RuggengraatPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::PRK, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RuggengraatPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RuggengraatPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RuggengraatPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RuggengraatPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsArtikelen rows

                $key2 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsArtikelenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsArtikelenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsArtikelenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj2 (GsArtikelen)
                $obj1->setGsArtikelen($obj2);

            } // if joined row is not null

                // Add objects for joined GsHandelsproducten rows

                $key3 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsHandelsproductenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsHandelsproductenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj3 (GsHandelsproducten)
                $obj3->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsVoorschrijfprGeneesmiddelIdentific rows

                $key4 = GsVoorschrijfprGeneesmiddelIdentificPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsVoorschrijfprGeneesmiddelIdentificPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsVoorschrijfprGeneesmiddelIdentificPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsVoorschrijfprGeneesmiddelIdentificPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj4 (GsVoorschrijfprGeneesmiddelIdentific)
                $obj4->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsGeneriekeProducten rows

                $key5 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsGeneriekeProductenPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsGeneriekeProductenPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsGeneriekeProductenPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj5 (GsGeneriekeProducten)
                $obj5->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsAtcCodes rows

                $key6 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsAtcCodesPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsAtcCodesPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsAtcCodesPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj6 (GsAtcCodes)
                $obj6->addRuggengraat($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ruggengraat objects pre-filled with all related objects except GsVoorschrijfprGeneesmiddelIdentific.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ruggengraat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsVoorschrijfprGeneesmiddelIdentific(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);
        }

        RuggengraatPeer::addSelectColumns($criteria);
        $startcol2 = RuggengraatPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RuggengraatPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RuggengraatPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RuggengraatPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RuggengraatPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RuggengraatPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsArtikelen rows

                $key2 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsArtikelenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsArtikelenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsArtikelenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj2 (GsArtikelen)
                $obj1->setGsArtikelen($obj2);

            } // if joined row is not null

                // Add objects for joined GsHandelsproducten rows

                $key3 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsHandelsproductenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsHandelsproductenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj3 (GsHandelsproducten)
                $obj3->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key4 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj4 (GsNawGegevensGstandaard)
                $obj4->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsGeneriekeProducten rows

                $key5 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsGeneriekeProductenPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsGeneriekeProductenPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsGeneriekeProductenPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj5 (GsGeneriekeProducten)
                $obj5->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsAtcCodes rows

                $key6 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsAtcCodesPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsAtcCodesPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsAtcCodesPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj6 (GsAtcCodes)
                $obj6->addRuggengraat($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ruggengraat objects pre-filled with all related objects except GsGeneriekeProducten.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ruggengraat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsGeneriekeProducten(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);
        }

        RuggengraatPeer::addSelectColumns($criteria);
        $startcol2 = RuggengraatPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsVoorschrijfprGeneesmiddelIdentificPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsVoorschrijfprGeneesmiddelIdentificPeer::NUM_HYDRATE_COLUMNS;

        GsAtcCodesPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsAtcCodesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RuggengraatPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::PRK, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::ATC, GsAtcCodesPeer::ATCCODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RuggengraatPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RuggengraatPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RuggengraatPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RuggengraatPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsArtikelen rows

                $key2 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsArtikelenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsArtikelenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsArtikelenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj2 (GsArtikelen)
                $obj1->setGsArtikelen($obj2);

            } // if joined row is not null

                // Add objects for joined GsHandelsproducten rows

                $key3 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsHandelsproductenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsHandelsproductenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj3 (GsHandelsproducten)
                $obj3->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key4 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj4 (GsNawGegevensGstandaard)
                $obj4->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsVoorschrijfprGeneesmiddelIdentific rows

                $key5 = GsVoorschrijfprGeneesmiddelIdentificPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsVoorschrijfprGeneesmiddelIdentificPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsVoorschrijfprGeneesmiddelIdentificPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsVoorschrijfprGeneesmiddelIdentificPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj5 (GsVoorschrijfprGeneesmiddelIdentific)
                $obj5->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsAtcCodes rows

                $key6 = GsAtcCodesPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsAtcCodesPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsAtcCodesPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsAtcCodesPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj6 (GsAtcCodes)
                $obj6->addRuggengraat($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ruggengraat objects pre-filled with all related objects except GsAtcCodes.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ruggengraat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsAtcCodes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);
        }

        RuggengraatPeer::addSelectColumns($criteria);
        $startcol2 = RuggengraatPeer::NUM_HYDRATE_COLUMNS;

        GsArtikelenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsArtikelenPeer::NUM_HYDRATE_COLUMNS;

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNawGegevensGstandaardPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsNawGegevensGstandaardPeer::NUM_HYDRATE_COLUMNS;

        GsVoorschrijfprGeneesmiddelIdentificPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsVoorschrijfprGeneesmiddelIdentificPeer::NUM_HYDRATE_COLUMNS;

        GsGeneriekeProductenPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsGeneriekeProductenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RuggengraatPeer::ZINDEX_NUMMER, GsArtikelenPeer::ZINUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::HPK, GsHandelsproductenPeer::HANDELSPRODUKTKODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::LEVERANCIER_NUMMER, GsNawGegevensGstandaardPeer::NAW_NUMMER, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::PRK, GsVoorschrijfprGeneesmiddelIdentificPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(RuggengraatPeer::GPK, GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RuggengraatPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RuggengraatPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RuggengraatPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RuggengraatPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsArtikelen rows

                $key2 = GsArtikelenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsArtikelenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsArtikelenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsArtikelenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj2 (GsArtikelen)
                $obj1->setGsArtikelen($obj2);

            } // if joined row is not null

                // Add objects for joined GsHandelsproducten rows

                $key3 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsHandelsproductenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsHandelsproductenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsHandelsproductenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj3 (GsHandelsproducten)
                $obj3->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsNawGegevensGstandaard rows

                $key4 = GsNawGegevensGstandaardPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsNawGegevensGstandaardPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsNawGegevensGstandaardPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsNawGegevensGstandaardPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj4 (GsNawGegevensGstandaard)
                $obj4->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsVoorschrijfprGeneesmiddelIdentific rows

                $key5 = GsVoorschrijfprGeneesmiddelIdentificPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsVoorschrijfprGeneesmiddelIdentificPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsVoorschrijfprGeneesmiddelIdentificPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsVoorschrijfprGeneesmiddelIdentificPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj5 (GsVoorschrijfprGeneesmiddelIdentific)
                $obj5->addRuggengraat($obj1);

            } // if joined row is not null

                // Add objects for joined GsGeneriekeProducten rows

                $key6 = GsGeneriekeProductenPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsGeneriekeProductenPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsGeneriekeProductenPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsGeneriekeProductenPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Ruggengraat) to the collection in $obj6 (GsGeneriekeProducten)
                $obj6->addRuggengraat($obj1);

            } // if joined row is not null

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
        return Propel::getDatabaseMap(RuggengraatPeer::DATABASE_NAME)->getTable(RuggengraatPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseRuggengraatPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseRuggengraatPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\RuggengraatTableMap());
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
        return RuggengraatPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Ruggengraat or Criteria object.
     *
     * @param      mixed $values Criteria or Ruggengraat object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Ruggengraat object
        }


        // Set the correct dbName
        $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Ruggengraat or Criteria object.
     *
     * @param      mixed $values Criteria or Ruggengraat object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(RuggengraatPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(RuggengraatPeer::ZINDEX_NUMMER);
            $value = $criteria->remove(RuggengraatPeer::ZINDEX_NUMMER);
            if ($value) {
                $selectCriteria->add(RuggengraatPeer::ZINDEX_NUMMER, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(RuggengraatPeer::TABLE_NAME);
            }

        } else { // $values is Ruggengraat object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gstandaard_ruggengraat table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(RuggengraatPeer::TABLE_NAME, $con, RuggengraatPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            RuggengraatPeer::clearInstancePool();
            RuggengraatPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Ruggengraat or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Ruggengraat object or primary key or array of primary keys
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
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            RuggengraatPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Ruggengraat) { // it's a model object
            // invalidate the cache for this single object
            RuggengraatPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(RuggengraatPeer::DATABASE_NAME);
            $criteria->add(RuggengraatPeer::ZINDEX_NUMMER, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                RuggengraatPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(RuggengraatPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            RuggengraatPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Ruggengraat object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Ruggengraat $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(RuggengraatPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(RuggengraatPeer::TABLE_NAME);

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

        return BasePeer::doValidate(RuggengraatPeer::DATABASE_NAME, RuggengraatPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Ruggengraat
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = RuggengraatPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(RuggengraatPeer::DATABASE_NAME);
        $criteria->add(RuggengraatPeer::ZINDEX_NUMMER, $pk);

        $v = RuggengraatPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Ruggengraat[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(RuggengraatPeer::DATABASE_NAME);
            $criteria->add(RuggengraatPeer::ZINDEX_NUMMER, $pks, Criteria::IN);
            $objs = RuggengraatPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseRuggengraatPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseRuggengraatPeer::buildTableMap();

