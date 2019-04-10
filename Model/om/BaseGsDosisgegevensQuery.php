<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \Criteria;
use \Exception;
use \ModelCriteria;
use \PDO;
use \Propel;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsDosisgegevens;
use PharmaIntelligence\GstandaardBundle\Model\GsDosisgegevensPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsDosisgegevensQuery;

/**
 * @method GsDosisgegevensQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsDosisgegevensQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsDosisgegevensQuery orderByDosisnummer($order = Criteria::ASC) Order by the dosisnummer column
 * @method GsDosisgegevensQuery orderByNormMinimum($order = Criteria::ASC) Order by the norm_minimum column
 * @method GsDosisgegevensQuery orderByNormMaximum($order = Criteria::ASC) Order by the norm_maximum column
 * @method GsDosisgegevensQuery orderByAbsoluutMinimum($order = Criteria::ASC) Order by the absoluut_minimum column
 * @method GsDosisgegevensQuery orderByAbsoluutMaximum($order = Criteria::ASC) Order by the absoluut_maximum column
 * @method GsDosisgegevensQuery orderByNormMinimumPerKg($order = Criteria::ASC) Order by the norm_minimum_per_kg column
 * @method GsDosisgegevensQuery orderByNormMaximumPerKg($order = Criteria::ASC) Order by the norm_maximum_per_kg column
 * @method GsDosisgegevensQuery orderByAbsoluutMinimumPerKg($order = Criteria::ASC) Order by the absoluut_minimum_per_kg column
 * @method GsDosisgegevensQuery orderByAbsoluutMaximumPerKg($order = Criteria::ASC) Order by the absoluut_maximum_per_kg column
 * @method GsDosisgegevensQuery orderByNormMinimumPerM2($order = Criteria::ASC) Order by the norm_minimum_per_m2 column
 * @method GsDosisgegevensQuery orderByNormMaximumPerM2($order = Criteria::ASC) Order by the norm_maximum_per_m2 column
 * @method GsDosisgegevensQuery orderByAbsoluutMinimumPerM2($order = Criteria::ASC) Order by the absoluut_minimum_per_m2 column
 * @method GsDosisgegevensQuery orderByAbsoluutMaximumPerM2($order = Criteria::ASC) Order by the absoluut_maximum_per_m2 column
 *
 * @method GsDosisgegevensQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsDosisgegevensQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsDosisgegevensQuery groupByDosisnummer() Group by the dosisnummer column
 * @method GsDosisgegevensQuery groupByNormMinimum() Group by the norm_minimum column
 * @method GsDosisgegevensQuery groupByNormMaximum() Group by the norm_maximum column
 * @method GsDosisgegevensQuery groupByAbsoluutMinimum() Group by the absoluut_minimum column
 * @method GsDosisgegevensQuery groupByAbsoluutMaximum() Group by the absoluut_maximum column
 * @method GsDosisgegevensQuery groupByNormMinimumPerKg() Group by the norm_minimum_per_kg column
 * @method GsDosisgegevensQuery groupByNormMaximumPerKg() Group by the norm_maximum_per_kg column
 * @method GsDosisgegevensQuery groupByAbsoluutMinimumPerKg() Group by the absoluut_minimum_per_kg column
 * @method GsDosisgegevensQuery groupByAbsoluutMaximumPerKg() Group by the absoluut_maximum_per_kg column
 * @method GsDosisgegevensQuery groupByNormMinimumPerM2() Group by the norm_minimum_per_m2 column
 * @method GsDosisgegevensQuery groupByNormMaximumPerM2() Group by the norm_maximum_per_m2 column
 * @method GsDosisgegevensQuery groupByAbsoluutMinimumPerM2() Group by the absoluut_minimum_per_m2 column
 * @method GsDosisgegevensQuery groupByAbsoluutMaximumPerM2() Group by the absoluut_maximum_per_m2 column
 *
 * @method GsDosisgegevensQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsDosisgegevensQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsDosisgegevensQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsDosisgegevens findOne(PropelPDO $con = null) Return the first GsDosisgegevens matching the query
 * @method GsDosisgegevens findOneOrCreate(PropelPDO $con = null) Return the first GsDosisgegevens matching the query, or a new GsDosisgegevens object populated from the query conditions when no match is found
 *
 * @method GsDosisgegevens findOneByBestandnummer(int $bestandnummer) Return the first GsDosisgegevens filtered by the bestandnummer column
 * @method GsDosisgegevens findOneByMutatiekode(int $mutatiekode) Return the first GsDosisgegevens filtered by the mutatiekode column
 * @method GsDosisgegevens findOneByNormMinimum(string $norm_minimum) Return the first GsDosisgegevens filtered by the norm_minimum column
 * @method GsDosisgegevens findOneByNormMaximum(string $norm_maximum) Return the first GsDosisgegevens filtered by the norm_maximum column
 * @method GsDosisgegevens findOneByAbsoluutMinimum(string $absoluut_minimum) Return the first GsDosisgegevens filtered by the absoluut_minimum column
 * @method GsDosisgegevens findOneByAbsoluutMaximum(string $absoluut_maximum) Return the first GsDosisgegevens filtered by the absoluut_maximum column
 * @method GsDosisgegevens findOneByNormMinimumPerKg(string $norm_minimum_per_kg) Return the first GsDosisgegevens filtered by the norm_minimum_per_kg column
 * @method GsDosisgegevens findOneByNormMaximumPerKg(string $norm_maximum_per_kg) Return the first GsDosisgegevens filtered by the norm_maximum_per_kg column
 * @method GsDosisgegevens findOneByAbsoluutMinimumPerKg(string $absoluut_minimum_per_kg) Return the first GsDosisgegevens filtered by the absoluut_minimum_per_kg column
 * @method GsDosisgegevens findOneByAbsoluutMaximumPerKg(string $absoluut_maximum_per_kg) Return the first GsDosisgegevens filtered by the absoluut_maximum_per_kg column
 * @method GsDosisgegevens findOneByNormMinimumPerM2(string $norm_minimum_per_m2) Return the first GsDosisgegevens filtered by the norm_minimum_per_m2 column
 * @method GsDosisgegevens findOneByNormMaximumPerM2(string $norm_maximum_per_m2) Return the first GsDosisgegevens filtered by the norm_maximum_per_m2 column
 * @method GsDosisgegevens findOneByAbsoluutMinimumPerM2(string $absoluut_minimum_per_m2) Return the first GsDosisgegevens filtered by the absoluut_minimum_per_m2 column
 * @method GsDosisgegevens findOneByAbsoluutMaximumPerM2(string $absoluut_maximum_per_m2) Return the first GsDosisgegevens filtered by the absoluut_maximum_per_m2 column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsDosisgegevens objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsDosisgegevens objects filtered by the mutatiekode column
 * @method array findByDosisnummer(int $dosisnummer) Return GsDosisgegevens objects filtered by the dosisnummer column
 * @method array findByNormMinimum(string $norm_minimum) Return GsDosisgegevens objects filtered by the norm_minimum column
 * @method array findByNormMaximum(string $norm_maximum) Return GsDosisgegevens objects filtered by the norm_maximum column
 * @method array findByAbsoluutMinimum(string $absoluut_minimum) Return GsDosisgegevens objects filtered by the absoluut_minimum column
 * @method array findByAbsoluutMaximum(string $absoluut_maximum) Return GsDosisgegevens objects filtered by the absoluut_maximum column
 * @method array findByNormMinimumPerKg(string $norm_minimum_per_kg) Return GsDosisgegevens objects filtered by the norm_minimum_per_kg column
 * @method array findByNormMaximumPerKg(string $norm_maximum_per_kg) Return GsDosisgegevens objects filtered by the norm_maximum_per_kg column
 * @method array findByAbsoluutMinimumPerKg(string $absoluut_minimum_per_kg) Return GsDosisgegevens objects filtered by the absoluut_minimum_per_kg column
 * @method array findByAbsoluutMaximumPerKg(string $absoluut_maximum_per_kg) Return GsDosisgegevens objects filtered by the absoluut_maximum_per_kg column
 * @method array findByNormMinimumPerM2(string $norm_minimum_per_m2) Return GsDosisgegevens objects filtered by the norm_minimum_per_m2 column
 * @method array findByNormMaximumPerM2(string $norm_maximum_per_m2) Return GsDosisgegevens objects filtered by the norm_maximum_per_m2 column
 * @method array findByAbsoluutMinimumPerM2(string $absoluut_minimum_per_m2) Return GsDosisgegevens objects filtered by the absoluut_minimum_per_m2 column
 * @method array findByAbsoluutMaximumPerM2(string $absoluut_maximum_per_m2) Return GsDosisgegevens objects filtered by the absoluut_maximum_per_m2 column
 */
abstract class BaseGsDosisgegevensQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsDosisgegevensQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDosisgegevens';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsDosisgegevensQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsDosisgegevensQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsDosisgegevensQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsDosisgegevensQuery) {
            return $criteria;
        }
        $query = new GsDosisgegevensQuery(null, null, $modelAlias);

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
     * @return   GsDosisgegevens|GsDosisgegevens[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsDosisgegevensPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsDosisgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsDosisgegevens A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByDosisnummer($key, $con = null)
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
     * @return                 GsDosisgegevens A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `dosisnummer`, `norm_minimum`, `norm_maximum`, `absoluut_minimum`, `absoluut_maximum`, `norm_minimum_per_kg`, `norm_maximum_per_kg`, `absoluut_minimum_per_kg`, `absoluut_maximum_per_kg`, `norm_minimum_per_m2`, `norm_maximum_per_m2`, `absoluut_minimum_per_m2`, `absoluut_maximum_per_m2` FROM `gs_dosisgegevens` WHERE `dosisnummer` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsDosisgegevens();
            $obj->hydrate($row);
            GsDosisgegevensPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsDosisgegevens|GsDosisgegevens[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsDosisgegevens[]|mixed the list of results, formatted by the current formatter
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
     * @return GsDosisgegevensQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsDosisgegevensPeer::DOSISNUMMER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsDosisgegevensQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsDosisgegevensPeer::DOSISNUMMER, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the bestandnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByBestandnummer(1234); // WHERE bestandnummer = 1234
     * $query->filterByBestandnummer(array(12, 34)); // WHERE bestandnummer IN (12, 34)
     * $query->filterByBestandnummer(array('min' => 12)); // WHERE bestandnummer >= 12
     * $query->filterByBestandnummer(array('max' => 12)); // WHERE bestandnummer <= 12
     * </code>
     *
     * @param     mixed $bestandnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDosisgegevensQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDosisgegevensPeer::BESTANDNUMMER, $bestandnummer, $comparison);
    }

    /**
     * Filter the query on the mutatiekode column
     *
     * Example usage:
     * <code>
     * $query->filterByMutatiekode(1234); // WHERE mutatiekode = 1234
     * $query->filterByMutatiekode(array(12, 34)); // WHERE mutatiekode IN (12, 34)
     * $query->filterByMutatiekode(array('min' => 12)); // WHERE mutatiekode >= 12
     * $query->filterByMutatiekode(array('max' => 12)); // WHERE mutatiekode <= 12
     * </code>
     *
     * @param     mixed $mutatiekode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDosisgegevensQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDosisgegevensPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the dosisnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByDosisnummer(1234); // WHERE dosisnummer = 1234
     * $query->filterByDosisnummer(array(12, 34)); // WHERE dosisnummer IN (12, 34)
     * $query->filterByDosisnummer(array('min' => 12)); // WHERE dosisnummer >= 12
     * $query->filterByDosisnummer(array('max' => 12)); // WHERE dosisnummer <= 12
     * </code>
     *
     * @param     mixed $dosisnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDosisgegevensQuery The current query, for fluid interface
     */
    public function filterByDosisnummer($dosisnummer = null, $comparison = null)
    {
        if (is_array($dosisnummer)) {
            $useMinMax = false;
            if (isset($dosisnummer['min'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::DOSISNUMMER, $dosisnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dosisnummer['max'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::DOSISNUMMER, $dosisnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDosisgegevensPeer::DOSISNUMMER, $dosisnummer, $comparison);
    }

    /**
     * Filter the query on the norm_minimum column
     *
     * Example usage:
     * <code>
     * $query->filterByNormMinimum(1234); // WHERE norm_minimum = 1234
     * $query->filterByNormMinimum(array(12, 34)); // WHERE norm_minimum IN (12, 34)
     * $query->filterByNormMinimum(array('min' => 12)); // WHERE norm_minimum >= 12
     * $query->filterByNormMinimum(array('max' => 12)); // WHERE norm_minimum <= 12
     * </code>
     *
     * @param     mixed $normMinimum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDosisgegevensQuery The current query, for fluid interface
     */
    public function filterByNormMinimum($normMinimum = null, $comparison = null)
    {
        if (is_array($normMinimum)) {
            $useMinMax = false;
            if (isset($normMinimum['min'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::NORM_MINIMUM, $normMinimum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($normMinimum['max'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::NORM_MINIMUM, $normMinimum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDosisgegevensPeer::NORM_MINIMUM, $normMinimum, $comparison);
    }

    /**
     * Filter the query on the norm_maximum column
     *
     * Example usage:
     * <code>
     * $query->filterByNormMaximum(1234); // WHERE norm_maximum = 1234
     * $query->filterByNormMaximum(array(12, 34)); // WHERE norm_maximum IN (12, 34)
     * $query->filterByNormMaximum(array('min' => 12)); // WHERE norm_maximum >= 12
     * $query->filterByNormMaximum(array('max' => 12)); // WHERE norm_maximum <= 12
     * </code>
     *
     * @param     mixed $normMaximum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDosisgegevensQuery The current query, for fluid interface
     */
    public function filterByNormMaximum($normMaximum = null, $comparison = null)
    {
        if (is_array($normMaximum)) {
            $useMinMax = false;
            if (isset($normMaximum['min'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::NORM_MAXIMUM, $normMaximum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($normMaximum['max'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::NORM_MAXIMUM, $normMaximum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDosisgegevensPeer::NORM_MAXIMUM, $normMaximum, $comparison);
    }

    /**
     * Filter the query on the absoluut_minimum column
     *
     * Example usage:
     * <code>
     * $query->filterByAbsoluutMinimum(1234); // WHERE absoluut_minimum = 1234
     * $query->filterByAbsoluutMinimum(array(12, 34)); // WHERE absoluut_minimum IN (12, 34)
     * $query->filterByAbsoluutMinimum(array('min' => 12)); // WHERE absoluut_minimum >= 12
     * $query->filterByAbsoluutMinimum(array('max' => 12)); // WHERE absoluut_minimum <= 12
     * </code>
     *
     * @param     mixed $absoluutMinimum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDosisgegevensQuery The current query, for fluid interface
     */
    public function filterByAbsoluutMinimum($absoluutMinimum = null, $comparison = null)
    {
        if (is_array($absoluutMinimum)) {
            $useMinMax = false;
            if (isset($absoluutMinimum['min'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::ABSOLUUT_MINIMUM, $absoluutMinimum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($absoluutMinimum['max'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::ABSOLUUT_MINIMUM, $absoluutMinimum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDosisgegevensPeer::ABSOLUUT_MINIMUM, $absoluutMinimum, $comparison);
    }

    /**
     * Filter the query on the absoluut_maximum column
     *
     * Example usage:
     * <code>
     * $query->filterByAbsoluutMaximum(1234); // WHERE absoluut_maximum = 1234
     * $query->filterByAbsoluutMaximum(array(12, 34)); // WHERE absoluut_maximum IN (12, 34)
     * $query->filterByAbsoluutMaximum(array('min' => 12)); // WHERE absoluut_maximum >= 12
     * $query->filterByAbsoluutMaximum(array('max' => 12)); // WHERE absoluut_maximum <= 12
     * </code>
     *
     * @param     mixed $absoluutMaximum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDosisgegevensQuery The current query, for fluid interface
     */
    public function filterByAbsoluutMaximum($absoluutMaximum = null, $comparison = null)
    {
        if (is_array($absoluutMaximum)) {
            $useMinMax = false;
            if (isset($absoluutMaximum['min'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM, $absoluutMaximum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($absoluutMaximum['max'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM, $absoluutMaximum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM, $absoluutMaximum, $comparison);
    }

    /**
     * Filter the query on the norm_minimum_per_kg column
     *
     * Example usage:
     * <code>
     * $query->filterByNormMinimumPerKg(1234); // WHERE norm_minimum_per_kg = 1234
     * $query->filterByNormMinimumPerKg(array(12, 34)); // WHERE norm_minimum_per_kg IN (12, 34)
     * $query->filterByNormMinimumPerKg(array('min' => 12)); // WHERE norm_minimum_per_kg >= 12
     * $query->filterByNormMinimumPerKg(array('max' => 12)); // WHERE norm_minimum_per_kg <= 12
     * </code>
     *
     * @param     mixed $normMinimumPerKg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDosisgegevensQuery The current query, for fluid interface
     */
    public function filterByNormMinimumPerKg($normMinimumPerKg = null, $comparison = null)
    {
        if (is_array($normMinimumPerKg)) {
            $useMinMax = false;
            if (isset($normMinimumPerKg['min'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::NORM_MINIMUM_PER_KG, $normMinimumPerKg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($normMinimumPerKg['max'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::NORM_MINIMUM_PER_KG, $normMinimumPerKg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDosisgegevensPeer::NORM_MINIMUM_PER_KG, $normMinimumPerKg, $comparison);
    }

    /**
     * Filter the query on the norm_maximum_per_kg column
     *
     * Example usage:
     * <code>
     * $query->filterByNormMaximumPerKg(1234); // WHERE norm_maximum_per_kg = 1234
     * $query->filterByNormMaximumPerKg(array(12, 34)); // WHERE norm_maximum_per_kg IN (12, 34)
     * $query->filterByNormMaximumPerKg(array('min' => 12)); // WHERE norm_maximum_per_kg >= 12
     * $query->filterByNormMaximumPerKg(array('max' => 12)); // WHERE norm_maximum_per_kg <= 12
     * </code>
     *
     * @param     mixed $normMaximumPerKg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDosisgegevensQuery The current query, for fluid interface
     */
    public function filterByNormMaximumPerKg($normMaximumPerKg = null, $comparison = null)
    {
        if (is_array($normMaximumPerKg)) {
            $useMinMax = false;
            if (isset($normMaximumPerKg['min'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::NORM_MAXIMUM_PER_KG, $normMaximumPerKg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($normMaximumPerKg['max'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::NORM_MAXIMUM_PER_KG, $normMaximumPerKg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDosisgegevensPeer::NORM_MAXIMUM_PER_KG, $normMaximumPerKg, $comparison);
    }

    /**
     * Filter the query on the absoluut_minimum_per_kg column
     *
     * Example usage:
     * <code>
     * $query->filterByAbsoluutMinimumPerKg(1234); // WHERE absoluut_minimum_per_kg = 1234
     * $query->filterByAbsoluutMinimumPerKg(array(12, 34)); // WHERE absoluut_minimum_per_kg IN (12, 34)
     * $query->filterByAbsoluutMinimumPerKg(array('min' => 12)); // WHERE absoluut_minimum_per_kg >= 12
     * $query->filterByAbsoluutMinimumPerKg(array('max' => 12)); // WHERE absoluut_minimum_per_kg <= 12
     * </code>
     *
     * @param     mixed $absoluutMinimumPerKg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDosisgegevensQuery The current query, for fluid interface
     */
    public function filterByAbsoluutMinimumPerKg($absoluutMinimumPerKg = null, $comparison = null)
    {
        if (is_array($absoluutMinimumPerKg)) {
            $useMinMax = false;
            if (isset($absoluutMinimumPerKg['min'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_KG, $absoluutMinimumPerKg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($absoluutMinimumPerKg['max'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_KG, $absoluutMinimumPerKg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_KG, $absoluutMinimumPerKg, $comparison);
    }

    /**
     * Filter the query on the absoluut_maximum_per_kg column
     *
     * Example usage:
     * <code>
     * $query->filterByAbsoluutMaximumPerKg(1234); // WHERE absoluut_maximum_per_kg = 1234
     * $query->filterByAbsoluutMaximumPerKg(array(12, 34)); // WHERE absoluut_maximum_per_kg IN (12, 34)
     * $query->filterByAbsoluutMaximumPerKg(array('min' => 12)); // WHERE absoluut_maximum_per_kg >= 12
     * $query->filterByAbsoluutMaximumPerKg(array('max' => 12)); // WHERE absoluut_maximum_per_kg <= 12
     * </code>
     *
     * @param     mixed $absoluutMaximumPerKg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDosisgegevensQuery The current query, for fluid interface
     */
    public function filterByAbsoluutMaximumPerKg($absoluutMaximumPerKg = null, $comparison = null)
    {
        if (is_array($absoluutMaximumPerKg)) {
            $useMinMax = false;
            if (isset($absoluutMaximumPerKg['min'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_KG, $absoluutMaximumPerKg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($absoluutMaximumPerKg['max'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_KG, $absoluutMaximumPerKg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_KG, $absoluutMaximumPerKg, $comparison);
    }

    /**
     * Filter the query on the norm_minimum_per_m2 column
     *
     * Example usage:
     * <code>
     * $query->filterByNormMinimumPerM2(1234); // WHERE norm_minimum_per_m2 = 1234
     * $query->filterByNormMinimumPerM2(array(12, 34)); // WHERE norm_minimum_per_m2 IN (12, 34)
     * $query->filterByNormMinimumPerM2(array('min' => 12)); // WHERE norm_minimum_per_m2 >= 12
     * $query->filterByNormMinimumPerM2(array('max' => 12)); // WHERE norm_minimum_per_m2 <= 12
     * </code>
     *
     * @param     mixed $normMinimumPerM2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDosisgegevensQuery The current query, for fluid interface
     */
    public function filterByNormMinimumPerM2($normMinimumPerM2 = null, $comparison = null)
    {
        if (is_array($normMinimumPerM2)) {
            $useMinMax = false;
            if (isset($normMinimumPerM2['min'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::NORM_MINIMUM_PER_M2, $normMinimumPerM2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($normMinimumPerM2['max'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::NORM_MINIMUM_PER_M2, $normMinimumPerM2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDosisgegevensPeer::NORM_MINIMUM_PER_M2, $normMinimumPerM2, $comparison);
    }

    /**
     * Filter the query on the norm_maximum_per_m2 column
     *
     * Example usage:
     * <code>
     * $query->filterByNormMaximumPerM2(1234); // WHERE norm_maximum_per_m2 = 1234
     * $query->filterByNormMaximumPerM2(array(12, 34)); // WHERE norm_maximum_per_m2 IN (12, 34)
     * $query->filterByNormMaximumPerM2(array('min' => 12)); // WHERE norm_maximum_per_m2 >= 12
     * $query->filterByNormMaximumPerM2(array('max' => 12)); // WHERE norm_maximum_per_m2 <= 12
     * </code>
     *
     * @param     mixed $normMaximumPerM2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDosisgegevensQuery The current query, for fluid interface
     */
    public function filterByNormMaximumPerM2($normMaximumPerM2 = null, $comparison = null)
    {
        if (is_array($normMaximumPerM2)) {
            $useMinMax = false;
            if (isset($normMaximumPerM2['min'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::NORM_MAXIMUM_PER_M2, $normMaximumPerM2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($normMaximumPerM2['max'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::NORM_MAXIMUM_PER_M2, $normMaximumPerM2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDosisgegevensPeer::NORM_MAXIMUM_PER_M2, $normMaximumPerM2, $comparison);
    }

    /**
     * Filter the query on the absoluut_minimum_per_m2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAbsoluutMinimumPerM2(1234); // WHERE absoluut_minimum_per_m2 = 1234
     * $query->filterByAbsoluutMinimumPerM2(array(12, 34)); // WHERE absoluut_minimum_per_m2 IN (12, 34)
     * $query->filterByAbsoluutMinimumPerM2(array('min' => 12)); // WHERE absoluut_minimum_per_m2 >= 12
     * $query->filterByAbsoluutMinimumPerM2(array('max' => 12)); // WHERE absoluut_minimum_per_m2 <= 12
     * </code>
     *
     * @param     mixed $absoluutMinimumPerM2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDosisgegevensQuery The current query, for fluid interface
     */
    public function filterByAbsoluutMinimumPerM2($absoluutMinimumPerM2 = null, $comparison = null)
    {
        if (is_array($absoluutMinimumPerM2)) {
            $useMinMax = false;
            if (isset($absoluutMinimumPerM2['min'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_M2, $absoluutMinimumPerM2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($absoluutMinimumPerM2['max'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_M2, $absoluutMinimumPerM2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDosisgegevensPeer::ABSOLUUT_MINIMUM_PER_M2, $absoluutMinimumPerM2, $comparison);
    }

    /**
     * Filter the query on the absoluut_maximum_per_m2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAbsoluutMaximumPerM2(1234); // WHERE absoluut_maximum_per_m2 = 1234
     * $query->filterByAbsoluutMaximumPerM2(array(12, 34)); // WHERE absoluut_maximum_per_m2 IN (12, 34)
     * $query->filterByAbsoluutMaximumPerM2(array('min' => 12)); // WHERE absoluut_maximum_per_m2 >= 12
     * $query->filterByAbsoluutMaximumPerM2(array('max' => 12)); // WHERE absoluut_maximum_per_m2 <= 12
     * </code>
     *
     * @param     mixed $absoluutMaximumPerM2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDosisgegevensQuery The current query, for fluid interface
     */
    public function filterByAbsoluutMaximumPerM2($absoluutMaximumPerM2 = null, $comparison = null)
    {
        if (is_array($absoluutMaximumPerM2)) {
            $useMinMax = false;
            if (isset($absoluutMaximumPerM2['min'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_M2, $absoluutMaximumPerM2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($absoluutMaximumPerM2['max'])) {
                $this->addUsingAlias(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_M2, $absoluutMaximumPerM2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDosisgegevensPeer::ABSOLUUT_MAXIMUM_PER_M2, $absoluutMaximumPerM2, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsDosisgegevens $gsDosisgegevens Object to remove from the list of results
     *
     * @return GsDosisgegevensQuery The current query, for fluid interface
     */
    public function prune($gsDosisgegevens = null)
    {
        if ($gsDosisgegevens) {
            $this->addUsingAlias(GsDosisgegevensPeer::DOSISNUMMER, $gsDosisgegevens->getDosisnummer(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
