<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \Criteria;
use \Exception;
use \ModelCriteria;
use \ModelJoin;
use \PDO;
use \Propel;
use \PropelCollection;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodes;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesExtended;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesExtendedPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesExtendedQuery;

/**
 * @method GsAtcCodesExtendedQuery orderByAtccode($order = Criteria::ASC) Order by the atccode column
 * @method GsAtcCodesExtendedQuery orderByAtcnederlandseOmschrijving($order = Criteria::ASC) Order by the atcnederlandse_omschrijving column
 * @method GsAtcCodesExtendedQuery orderByAnatomischeHoofdgroepCode($order = Criteria::ASC) Order by the anatomische_hoofdgroep_code column
 * @method GsAtcCodesExtendedQuery orderByAnatomischeHoofdgroep($order = Criteria::ASC) Order by the anatomische_hoofdgroep column
 * @method GsAtcCodesExtendedQuery orderByTherapeutischeHoofdgroepCode($order = Criteria::ASC) Order by the therapeutische_hoofdgroep_code column
 * @method GsAtcCodesExtendedQuery orderByTherapeutischeHoofdgroep($order = Criteria::ASC) Order by the therapeutische_hoofdgroep column
 * @method GsAtcCodesExtendedQuery orderByTherapeutischeSubgroepCode($order = Criteria::ASC) Order by the therapeutische_subgroep_code column
 * @method GsAtcCodesExtendedQuery orderByTherapeutischeSubgroep($order = Criteria::ASC) Order by the therapeutische_subgroep column
 * @method GsAtcCodesExtendedQuery orderByChemischeSubgroepCode($order = Criteria::ASC) Order by the chemische_subgroep_code column
 * @method GsAtcCodesExtendedQuery orderByChemischeSubgroep($order = Criteria::ASC) Order by the chemische_subgroep column
 * @method GsAtcCodesExtendedQuery orderByChemischeStofnaamCode($order = Criteria::ASC) Order by the chemische_stofnaam_code column
 * @method GsAtcCodesExtendedQuery orderByChemischeStofnaam($order = Criteria::ASC) Order by the chemische_stofnaam column
 * @method GsAtcCodesExtendedQuery orderByVolledigeNaam($order = Criteria::ASC) Order by the volledige_naam column
 * @method GsAtcCodesExtendedQuery orderByMerken($order = Criteria::ASC) Order by the merken column
 *
 * @method GsAtcCodesExtendedQuery groupByAtccode() Group by the atccode column
 * @method GsAtcCodesExtendedQuery groupByAtcnederlandseOmschrijving() Group by the atcnederlandse_omschrijving column
 * @method GsAtcCodesExtendedQuery groupByAnatomischeHoofdgroepCode() Group by the anatomische_hoofdgroep_code column
 * @method GsAtcCodesExtendedQuery groupByAnatomischeHoofdgroep() Group by the anatomische_hoofdgroep column
 * @method GsAtcCodesExtendedQuery groupByTherapeutischeHoofdgroepCode() Group by the therapeutische_hoofdgroep_code column
 * @method GsAtcCodesExtendedQuery groupByTherapeutischeHoofdgroep() Group by the therapeutische_hoofdgroep column
 * @method GsAtcCodesExtendedQuery groupByTherapeutischeSubgroepCode() Group by the therapeutische_subgroep_code column
 * @method GsAtcCodesExtendedQuery groupByTherapeutischeSubgroep() Group by the therapeutische_subgroep column
 * @method GsAtcCodesExtendedQuery groupByChemischeSubgroepCode() Group by the chemische_subgroep_code column
 * @method GsAtcCodesExtendedQuery groupByChemischeSubgroep() Group by the chemische_subgroep column
 * @method GsAtcCodesExtendedQuery groupByChemischeStofnaamCode() Group by the chemische_stofnaam_code column
 * @method GsAtcCodesExtendedQuery groupByChemischeStofnaam() Group by the chemische_stofnaam column
 * @method GsAtcCodesExtendedQuery groupByVolledigeNaam() Group by the volledige_naam column
 * @method GsAtcCodesExtendedQuery groupByMerken() Group by the merken column
 *
 * @method GsAtcCodesExtendedQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsAtcCodesExtendedQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsAtcCodesExtendedQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsAtcCodesExtendedQuery leftJoinGsAtcCodes($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsAtcCodes relation
 * @method GsAtcCodesExtendedQuery rightJoinGsAtcCodes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsAtcCodes relation
 * @method GsAtcCodesExtendedQuery innerJoinGsAtcCodes($relationAlias = null) Adds a INNER JOIN clause to the query using the GsAtcCodes relation
 *
 * @method GsAtcCodesExtended findOne(PropelPDO $con = null) Return the first GsAtcCodesExtended matching the query
 * @method GsAtcCodesExtended findOneOrCreate(PropelPDO $con = null) Return the first GsAtcCodesExtended matching the query, or a new GsAtcCodesExtended object populated from the query conditions when no match is found
 *
 * @method GsAtcCodesExtended findOneByAtcnederlandseOmschrijving(string $atcnederlandse_omschrijving) Return the first GsAtcCodesExtended filtered by the atcnederlandse_omschrijving column
 * @method GsAtcCodesExtended findOneByAnatomischeHoofdgroepCode(string $anatomische_hoofdgroep_code) Return the first GsAtcCodesExtended filtered by the anatomische_hoofdgroep_code column
 * @method GsAtcCodesExtended findOneByAnatomischeHoofdgroep(string $anatomische_hoofdgroep) Return the first GsAtcCodesExtended filtered by the anatomische_hoofdgroep column
 * @method GsAtcCodesExtended findOneByTherapeutischeHoofdgroepCode(string $therapeutische_hoofdgroep_code) Return the first GsAtcCodesExtended filtered by the therapeutische_hoofdgroep_code column
 * @method GsAtcCodesExtended findOneByTherapeutischeHoofdgroep(string $therapeutische_hoofdgroep) Return the first GsAtcCodesExtended filtered by the therapeutische_hoofdgroep column
 * @method GsAtcCodesExtended findOneByTherapeutischeSubgroepCode(string $therapeutische_subgroep_code) Return the first GsAtcCodesExtended filtered by the therapeutische_subgroep_code column
 * @method GsAtcCodesExtended findOneByTherapeutischeSubgroep(string $therapeutische_subgroep) Return the first GsAtcCodesExtended filtered by the therapeutische_subgroep column
 * @method GsAtcCodesExtended findOneByChemischeSubgroepCode(string $chemische_subgroep_code) Return the first GsAtcCodesExtended filtered by the chemische_subgroep_code column
 * @method GsAtcCodesExtended findOneByChemischeSubgroep(string $chemische_subgroep) Return the first GsAtcCodesExtended filtered by the chemische_subgroep column
 * @method GsAtcCodesExtended findOneByChemischeStofnaamCode(string $chemische_stofnaam_code) Return the first GsAtcCodesExtended filtered by the chemische_stofnaam_code column
 * @method GsAtcCodesExtended findOneByChemischeStofnaam(string $chemische_stofnaam) Return the first GsAtcCodesExtended filtered by the chemische_stofnaam column
 * @method GsAtcCodesExtended findOneByVolledigeNaam(string $volledige_naam) Return the first GsAtcCodesExtended filtered by the volledige_naam column
 * @method GsAtcCodesExtended findOneByMerken(string $merken) Return the first GsAtcCodesExtended filtered by the merken column
 *
 * @method array findByAtccode(string $atccode) Return GsAtcCodesExtended objects filtered by the atccode column
 * @method array findByAtcnederlandseOmschrijving(string $atcnederlandse_omschrijving) Return GsAtcCodesExtended objects filtered by the atcnederlandse_omschrijving column
 * @method array findByAnatomischeHoofdgroepCode(string $anatomische_hoofdgroep_code) Return GsAtcCodesExtended objects filtered by the anatomische_hoofdgroep_code column
 * @method array findByAnatomischeHoofdgroep(string $anatomische_hoofdgroep) Return GsAtcCodesExtended objects filtered by the anatomische_hoofdgroep column
 * @method array findByTherapeutischeHoofdgroepCode(string $therapeutische_hoofdgroep_code) Return GsAtcCodesExtended objects filtered by the therapeutische_hoofdgroep_code column
 * @method array findByTherapeutischeHoofdgroep(string $therapeutische_hoofdgroep) Return GsAtcCodesExtended objects filtered by the therapeutische_hoofdgroep column
 * @method array findByTherapeutischeSubgroepCode(string $therapeutische_subgroep_code) Return GsAtcCodesExtended objects filtered by the therapeutische_subgroep_code column
 * @method array findByTherapeutischeSubgroep(string $therapeutische_subgroep) Return GsAtcCodesExtended objects filtered by the therapeutische_subgroep column
 * @method array findByChemischeSubgroepCode(string $chemische_subgroep_code) Return GsAtcCodesExtended objects filtered by the chemische_subgroep_code column
 * @method array findByChemischeSubgroep(string $chemische_subgroep) Return GsAtcCodesExtended objects filtered by the chemische_subgroep column
 * @method array findByChemischeStofnaamCode(string $chemische_stofnaam_code) Return GsAtcCodesExtended objects filtered by the chemische_stofnaam_code column
 * @method array findByChemischeStofnaam(string $chemische_stofnaam) Return GsAtcCodesExtended objects filtered by the chemische_stofnaam column
 * @method array findByVolledigeNaam(string $volledige_naam) Return GsAtcCodesExtended objects filtered by the volledige_naam column
 * @method array findByMerken(string $merken) Return GsAtcCodesExtended objects filtered by the merken column
 */
abstract class BaseGsAtcCodesExtendedQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsAtcCodesExtendedQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'default';
        }
        if (null === $modelName) {
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAtcCodesExtended';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsAtcCodesExtendedQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsAtcCodesExtendedQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsAtcCodesExtendedQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsAtcCodesExtendedQuery) {
            return $criteria;
        }
        $query = new GsAtcCodesExtendedQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsAtcCodesExtended|GsAtcCodesExtended[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsAtcCodesExtendedPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsAtcCodesExtendedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 GsAtcCodesExtended A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByAtccode($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 GsAtcCodesExtended A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `atccode`, `atcnederlandse_omschrijving`, `anatomische_hoofdgroep_code`, `anatomische_hoofdgroep`, `therapeutische_hoofdgroep_code`, `therapeutische_hoofdgroep`, `therapeutische_subgroep_code`, `therapeutische_subgroep`, `chemische_subgroep_code`, `chemische_subgroep`, `chemische_stofnaam_code`, `chemische_stofnaam`, `volledige_naam`, `merken` FROM `gs_atc_codes_extended` WHERE `atccode` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsAtcCodesExtended();
            $obj->hydrate($row);
            GsAtcCodesExtendedPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return GsAtcCodesExtended|GsAtcCodesExtended[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|GsAtcCodesExtended[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return GsAtcCodesExtendedQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsAtcCodesExtendedPeer::ATCCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsAtcCodesExtendedQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsAtcCodesExtendedPeer::ATCCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the atccode column
     *
     * Example usage:
     * <code>
     * $query->filterByAtccode('fooValue');   // WHERE atccode = 'fooValue'
     * $query->filterByAtccode('%fooValue%'); // WHERE atccode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $atccode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcCodesExtendedQuery The current query, for fluid interface
     */
    public function filterByAtccode($atccode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($atccode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $atccode)) {
                $atccode = str_replace('*', '%', $atccode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcCodesExtendedPeer::ATCCODE, $atccode, $comparison);
    }

    /**
     * Filter the query on the atcnederlandse_omschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByAtcnederlandseOmschrijving('fooValue');   // WHERE atcnederlandse_omschrijving = 'fooValue'
     * $query->filterByAtcnederlandseOmschrijving('%fooValue%'); // WHERE atcnederlandse_omschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $atcnederlandseOmschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcCodesExtendedQuery The current query, for fluid interface
     */
    public function filterByAtcnederlandseOmschrijving($atcnederlandseOmschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($atcnederlandseOmschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $atcnederlandseOmschrijving)) {
                $atcnederlandseOmschrijving = str_replace('*', '%', $atcnederlandseOmschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcCodesExtendedPeer::ATCNEDERLANDSE_OMSCHRIJVING, $atcnederlandseOmschrijving, $comparison);
    }

    /**
     * Filter the query on the anatomische_hoofdgroep_code column
     *
     * Example usage:
     * <code>
     * $query->filterByAnatomischeHoofdgroepCode('fooValue');   // WHERE anatomische_hoofdgroep_code = 'fooValue'
     * $query->filterByAnatomischeHoofdgroepCode('%fooValue%'); // WHERE anatomische_hoofdgroep_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $anatomischeHoofdgroepCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcCodesExtendedQuery The current query, for fluid interface
     */
    public function filterByAnatomischeHoofdgroepCode($anatomischeHoofdgroepCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($anatomischeHoofdgroepCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $anatomischeHoofdgroepCode)) {
                $anatomischeHoofdgroepCode = str_replace('*', '%', $anatomischeHoofdgroepCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcCodesExtendedPeer::ANATOMISCHE_HOOFDGROEP_CODE, $anatomischeHoofdgroepCode, $comparison);
    }

    /**
     * Filter the query on the anatomische_hoofdgroep column
     *
     * Example usage:
     * <code>
     * $query->filterByAnatomischeHoofdgroep('fooValue');   // WHERE anatomische_hoofdgroep = 'fooValue'
     * $query->filterByAnatomischeHoofdgroep('%fooValue%'); // WHERE anatomische_hoofdgroep LIKE '%fooValue%'
     * </code>
     *
     * @param     string $anatomischeHoofdgroep The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcCodesExtendedQuery The current query, for fluid interface
     */
    public function filterByAnatomischeHoofdgroep($anatomischeHoofdgroep = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($anatomischeHoofdgroep)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $anatomischeHoofdgroep)) {
                $anatomischeHoofdgroep = str_replace('*', '%', $anatomischeHoofdgroep);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcCodesExtendedPeer::ANATOMISCHE_HOOFDGROEP, $anatomischeHoofdgroep, $comparison);
    }

    /**
     * Filter the query on the therapeutische_hoofdgroep_code column
     *
     * Example usage:
     * <code>
     * $query->filterByTherapeutischeHoofdgroepCode('fooValue');   // WHERE therapeutische_hoofdgroep_code = 'fooValue'
     * $query->filterByTherapeutischeHoofdgroepCode('%fooValue%'); // WHERE therapeutische_hoofdgroep_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $therapeutischeHoofdgroepCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcCodesExtendedQuery The current query, for fluid interface
     */
    public function filterByTherapeutischeHoofdgroepCode($therapeutischeHoofdgroepCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($therapeutischeHoofdgroepCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $therapeutischeHoofdgroepCode)) {
                $therapeutischeHoofdgroepCode = str_replace('*', '%', $therapeutischeHoofdgroepCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcCodesExtendedPeer::THERAPEUTISCHE_HOOFDGROEP_CODE, $therapeutischeHoofdgroepCode, $comparison);
    }

    /**
     * Filter the query on the therapeutische_hoofdgroep column
     *
     * Example usage:
     * <code>
     * $query->filterByTherapeutischeHoofdgroep('fooValue');   // WHERE therapeutische_hoofdgroep = 'fooValue'
     * $query->filterByTherapeutischeHoofdgroep('%fooValue%'); // WHERE therapeutische_hoofdgroep LIKE '%fooValue%'
     * </code>
     *
     * @param     string $therapeutischeHoofdgroep The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcCodesExtendedQuery The current query, for fluid interface
     */
    public function filterByTherapeutischeHoofdgroep($therapeutischeHoofdgroep = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($therapeutischeHoofdgroep)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $therapeutischeHoofdgroep)) {
                $therapeutischeHoofdgroep = str_replace('*', '%', $therapeutischeHoofdgroep);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcCodesExtendedPeer::THERAPEUTISCHE_HOOFDGROEP, $therapeutischeHoofdgroep, $comparison);
    }

    /**
     * Filter the query on the therapeutische_subgroep_code column
     *
     * Example usage:
     * <code>
     * $query->filterByTherapeutischeSubgroepCode('fooValue');   // WHERE therapeutische_subgroep_code = 'fooValue'
     * $query->filterByTherapeutischeSubgroepCode('%fooValue%'); // WHERE therapeutische_subgroep_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $therapeutischeSubgroepCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcCodesExtendedQuery The current query, for fluid interface
     */
    public function filterByTherapeutischeSubgroepCode($therapeutischeSubgroepCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($therapeutischeSubgroepCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $therapeutischeSubgroepCode)) {
                $therapeutischeSubgroepCode = str_replace('*', '%', $therapeutischeSubgroepCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcCodesExtendedPeer::THERAPEUTISCHE_SUBGROEP_CODE, $therapeutischeSubgroepCode, $comparison);
    }

    /**
     * Filter the query on the therapeutische_subgroep column
     *
     * Example usage:
     * <code>
     * $query->filterByTherapeutischeSubgroep('fooValue');   // WHERE therapeutische_subgroep = 'fooValue'
     * $query->filterByTherapeutischeSubgroep('%fooValue%'); // WHERE therapeutische_subgroep LIKE '%fooValue%'
     * </code>
     *
     * @param     string $therapeutischeSubgroep The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcCodesExtendedQuery The current query, for fluid interface
     */
    public function filterByTherapeutischeSubgroep($therapeutischeSubgroep = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($therapeutischeSubgroep)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $therapeutischeSubgroep)) {
                $therapeutischeSubgroep = str_replace('*', '%', $therapeutischeSubgroep);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcCodesExtendedPeer::THERAPEUTISCHE_SUBGROEP, $therapeutischeSubgroep, $comparison);
    }

    /**
     * Filter the query on the chemische_subgroep_code column
     *
     * Example usage:
     * <code>
     * $query->filterByChemischeSubgroepCode('fooValue');   // WHERE chemische_subgroep_code = 'fooValue'
     * $query->filterByChemischeSubgroepCode('%fooValue%'); // WHERE chemische_subgroep_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chemischeSubgroepCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcCodesExtendedQuery The current query, for fluid interface
     */
    public function filterByChemischeSubgroepCode($chemischeSubgroepCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chemischeSubgroepCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chemischeSubgroepCode)) {
                $chemischeSubgroepCode = str_replace('*', '%', $chemischeSubgroepCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcCodesExtendedPeer::CHEMISCHE_SUBGROEP_CODE, $chemischeSubgroepCode, $comparison);
    }

    /**
     * Filter the query on the chemische_subgroep column
     *
     * Example usage:
     * <code>
     * $query->filterByChemischeSubgroep('fooValue');   // WHERE chemische_subgroep = 'fooValue'
     * $query->filterByChemischeSubgroep('%fooValue%'); // WHERE chemische_subgroep LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chemischeSubgroep The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcCodesExtendedQuery The current query, for fluid interface
     */
    public function filterByChemischeSubgroep($chemischeSubgroep = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chemischeSubgroep)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chemischeSubgroep)) {
                $chemischeSubgroep = str_replace('*', '%', $chemischeSubgroep);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcCodesExtendedPeer::CHEMISCHE_SUBGROEP, $chemischeSubgroep, $comparison);
    }

    /**
     * Filter the query on the chemische_stofnaam_code column
     *
     * Example usage:
     * <code>
     * $query->filterByChemischeStofnaamCode('fooValue');   // WHERE chemische_stofnaam_code = 'fooValue'
     * $query->filterByChemischeStofnaamCode('%fooValue%'); // WHERE chemische_stofnaam_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chemischeStofnaamCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcCodesExtendedQuery The current query, for fluid interface
     */
    public function filterByChemischeStofnaamCode($chemischeStofnaamCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chemischeStofnaamCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chemischeStofnaamCode)) {
                $chemischeStofnaamCode = str_replace('*', '%', $chemischeStofnaamCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcCodesExtendedPeer::CHEMISCHE_STOFNAAM_CODE, $chemischeStofnaamCode, $comparison);
    }

    /**
     * Filter the query on the chemische_stofnaam column
     *
     * Example usage:
     * <code>
     * $query->filterByChemischeStofnaam('fooValue');   // WHERE chemische_stofnaam = 'fooValue'
     * $query->filterByChemischeStofnaam('%fooValue%'); // WHERE chemische_stofnaam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chemischeStofnaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcCodesExtendedQuery The current query, for fluid interface
     */
    public function filterByChemischeStofnaam($chemischeStofnaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chemischeStofnaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chemischeStofnaam)) {
                $chemischeStofnaam = str_replace('*', '%', $chemischeStofnaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcCodesExtendedPeer::CHEMISCHE_STOFNAAM, $chemischeStofnaam, $comparison);
    }

    /**
     * Filter the query on the volledige_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByVolledigeNaam('fooValue');   // WHERE volledige_naam = 'fooValue'
     * $query->filterByVolledigeNaam('%fooValue%'); // WHERE volledige_naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $volledigeNaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcCodesExtendedQuery The current query, for fluid interface
     */
    public function filterByVolledigeNaam($volledigeNaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($volledigeNaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $volledigeNaam)) {
                $volledigeNaam = str_replace('*', '%', $volledigeNaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcCodesExtendedPeer::VOLLEDIGE_NAAM, $volledigeNaam, $comparison);
    }

    /**
     * Filter the query on the merken column
     *
     * Example usage:
     * <code>
     * $query->filterByMerken('fooValue');   // WHERE merken = 'fooValue'
     * $query->filterByMerken('%fooValue%'); // WHERE merken LIKE '%fooValue%'
     * </code>
     *
     * @param     string $merken The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcCodesExtendedQuery The current query, for fluid interface
     */
    public function filterByMerken($merken = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($merken)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $merken)) {
                $merken = str_replace('*', '%', $merken);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcCodesExtendedPeer::MERKEN, $merken, $comparison);
    }

    /**
     * Filter the query by a related GsAtcCodes object
     *
     * @param   GsAtcCodes|PropelObjectCollection $gsAtcCodes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsAtcCodesExtendedQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsAtcCodes($gsAtcCodes, $comparison = null)
    {
        if ($gsAtcCodes instanceof GsAtcCodes) {
            return $this
                ->addUsingAlias(GsAtcCodesExtendedPeer::ATCCODE, $gsAtcCodes->getAtccode(), $comparison);
        } elseif ($gsAtcCodes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsAtcCodesExtendedPeer::ATCCODE, $gsAtcCodes->toKeyValue('PrimaryKey', 'Atccode'), $comparison);
        } else {
            throw new PropelException('filterByGsAtcCodes() only accepts arguments of type GsAtcCodes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsAtcCodes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsAtcCodesExtendedQuery The current query, for fluid interface
     */
    public function joinGsAtcCodes($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsAtcCodes');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'GsAtcCodes');
        }

        return $this;
    }

    /**
     * Use the GsAtcCodes relation GsAtcCodes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesQuery A secondary query class using the current class as primary query
     */
    public function useGsAtcCodesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsAtcCodes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsAtcCodes', '\PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsAtcCodesExtended $gsAtcCodesExtended Object to remove from the list of results
     *
     * @return GsAtcCodesExtendedQuery The current query, for fluid interface
     */
    public function prune($gsAtcCodesExtended = null)
    {
        if ($gsAtcCodesExtended) {
            $this->addUsingAlias(GsAtcCodesExtendedPeer::ATCCODE, $gsAtcCodesExtended->getAtccode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
