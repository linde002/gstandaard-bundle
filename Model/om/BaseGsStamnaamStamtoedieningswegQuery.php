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
use PharmaIntelligence\GstandaardBundle\Model\GsStamnaamStamtoedieningsweg;
use PharmaIntelligence\GstandaardBundle\Model\GsStamnaamStamtoedieningswegPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsStamnaamStamtoedieningswegQuery;

/**
 * @method GsStamnaamStamtoedieningswegQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsStamnaamStamtoedieningswegQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsStamnaamStamtoedieningswegQuery orderBySskkode($order = Criteria::ASC) Order by the sskkode column
 * @method GsStamnaamStamtoedieningswegQuery orderByStamnaamcode($order = Criteria::ASC) Order by the stamnaamcode column
 * @method GsStamnaamStamtoedieningswegQuery orderByStamtoedieningswegCode($order = Criteria::ASC) Order by the stamtoedieningsweg_code column
 *
 * @method GsStamnaamStamtoedieningswegQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsStamnaamStamtoedieningswegQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsStamnaamStamtoedieningswegQuery groupBySskkode() Group by the sskkode column
 * @method GsStamnaamStamtoedieningswegQuery groupByStamnaamcode() Group by the stamnaamcode column
 * @method GsStamnaamStamtoedieningswegQuery groupByStamtoedieningswegCode() Group by the stamtoedieningsweg_code column
 *
 * @method GsStamnaamStamtoedieningswegQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsStamnaamStamtoedieningswegQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsStamnaamStamtoedieningswegQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsStamnaamStamtoedieningsweg findOne(PropelPDO $con = null) Return the first GsStamnaamStamtoedieningsweg matching the query
 * @method GsStamnaamStamtoedieningsweg findOneOrCreate(PropelPDO $con = null) Return the first GsStamnaamStamtoedieningsweg matching the query, or a new GsStamnaamStamtoedieningsweg object populated from the query conditions when no match is found
 *
 * @method GsStamnaamStamtoedieningsweg findOneByBestandnummer(int $bestandnummer) Return the first GsStamnaamStamtoedieningsweg filtered by the bestandnummer column
 * @method GsStamnaamStamtoedieningsweg findOneByMutatiekode(int $mutatiekode) Return the first GsStamnaamStamtoedieningsweg filtered by the mutatiekode column
 * @method GsStamnaamStamtoedieningsweg findOneByStamnaamcode(int $stamnaamcode) Return the first GsStamnaamStamtoedieningsweg filtered by the stamnaamcode column
 * @method GsStamnaamStamtoedieningsweg findOneByStamtoedieningswegCode(int $stamtoedieningsweg_code) Return the first GsStamnaamStamtoedieningsweg filtered by the stamtoedieningsweg_code column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsStamnaamStamtoedieningsweg objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsStamnaamStamtoedieningsweg objects filtered by the mutatiekode column
 * @method array findBySskkode(int $sskkode) Return GsStamnaamStamtoedieningsweg objects filtered by the sskkode column
 * @method array findByStamnaamcode(int $stamnaamcode) Return GsStamnaamStamtoedieningsweg objects filtered by the stamnaamcode column
 * @method array findByStamtoedieningswegCode(int $stamtoedieningsweg_code) Return GsStamnaamStamtoedieningsweg objects filtered by the stamtoedieningsweg_code column
 */
abstract class BaseGsStamnaamStamtoedieningswegQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsStamnaamStamtoedieningswegQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsStamnaamStamtoedieningsweg';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsStamnaamStamtoedieningswegQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsStamnaamStamtoedieningswegQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsStamnaamStamtoedieningswegQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsStamnaamStamtoedieningswegQuery) {
            return $criteria;
        }
        $query = new GsStamnaamStamtoedieningswegQuery(null, null, $modelAlias);

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
     * @return   GsStamnaamStamtoedieningsweg|GsStamnaamStamtoedieningsweg[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsStamnaamStamtoedieningswegPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsStamnaamStamtoedieningswegPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsStamnaamStamtoedieningsweg A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneBySskkode($key, $con = null)
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
     * @return                 GsStamnaamStamtoedieningsweg A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `sskkode`, `stamnaamcode`, `stamtoedieningsweg_code` FROM `gs_stamnaam_stamtoedieningsweg` WHERE `sskkode` = :p0';
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
            $obj = new GsStamnaamStamtoedieningsweg();
            $obj->hydrate($row);
            GsStamnaamStamtoedieningswegPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsStamnaamStamtoedieningsweg|GsStamnaamStamtoedieningsweg[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsStamnaamStamtoedieningsweg[]|mixed the list of results, formatted by the current formatter
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
     * @return GsStamnaamStamtoedieningswegQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsStamnaamStamtoedieningswegPeer::SSKKODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsStamnaamStamtoedieningswegQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsStamnaamStamtoedieningswegPeer::SSKKODE, $keys, Criteria::IN);
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
     * @return GsStamnaamStamtoedieningswegQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsStamnaamStamtoedieningswegPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsStamnaamStamtoedieningswegPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsStamnaamStamtoedieningswegPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsStamnaamStamtoedieningswegQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsStamnaamStamtoedieningswegPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsStamnaamStamtoedieningswegPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsStamnaamStamtoedieningswegPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the sskkode column
     *
     * Example usage:
     * <code>
     * $query->filterBySskkode(1234); // WHERE sskkode = 1234
     * $query->filterBySskkode(array(12, 34)); // WHERE sskkode IN (12, 34)
     * $query->filterBySskkode(array('min' => 12)); // WHERE sskkode >= 12
     * $query->filterBySskkode(array('max' => 12)); // WHERE sskkode <= 12
     * </code>
     *
     * @param     mixed $sskkode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsStamnaamStamtoedieningswegQuery The current query, for fluid interface
     */
    public function filterBySskkode($sskkode = null, $comparison = null)
    {
        if (is_array($sskkode)) {
            $useMinMax = false;
            if (isset($sskkode['min'])) {
                $this->addUsingAlias(GsStamnaamStamtoedieningswegPeer::SSKKODE, $sskkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sskkode['max'])) {
                $this->addUsingAlias(GsStamnaamStamtoedieningswegPeer::SSKKODE, $sskkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsStamnaamStamtoedieningswegPeer::SSKKODE, $sskkode, $comparison);
    }

    /**
     * Filter the query on the stamnaamcode column
     *
     * Example usage:
     * <code>
     * $query->filterByStamnaamcode(1234); // WHERE stamnaamcode = 1234
     * $query->filterByStamnaamcode(array(12, 34)); // WHERE stamnaamcode IN (12, 34)
     * $query->filterByStamnaamcode(array('min' => 12)); // WHERE stamnaamcode >= 12
     * $query->filterByStamnaamcode(array('max' => 12)); // WHERE stamnaamcode <= 12
     * </code>
     *
     * @param     mixed $stamnaamcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsStamnaamStamtoedieningswegQuery The current query, for fluid interface
     */
    public function filterByStamnaamcode($stamnaamcode = null, $comparison = null)
    {
        if (is_array($stamnaamcode)) {
            $useMinMax = false;
            if (isset($stamnaamcode['min'])) {
                $this->addUsingAlias(GsStamnaamStamtoedieningswegPeer::STAMNAAMCODE, $stamnaamcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stamnaamcode['max'])) {
                $this->addUsingAlias(GsStamnaamStamtoedieningswegPeer::STAMNAAMCODE, $stamnaamcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsStamnaamStamtoedieningswegPeer::STAMNAAMCODE, $stamnaamcode, $comparison);
    }

    /**
     * Filter the query on the stamtoedieningsweg_code column
     *
     * Example usage:
     * <code>
     * $query->filterByStamtoedieningswegCode(1234); // WHERE stamtoedieningsweg_code = 1234
     * $query->filterByStamtoedieningswegCode(array(12, 34)); // WHERE stamtoedieningsweg_code IN (12, 34)
     * $query->filterByStamtoedieningswegCode(array('min' => 12)); // WHERE stamtoedieningsweg_code >= 12
     * $query->filterByStamtoedieningswegCode(array('max' => 12)); // WHERE stamtoedieningsweg_code <= 12
     * </code>
     *
     * @param     mixed $stamtoedieningswegCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsStamnaamStamtoedieningswegQuery The current query, for fluid interface
     */
    public function filterByStamtoedieningswegCode($stamtoedieningswegCode = null, $comparison = null)
    {
        if (is_array($stamtoedieningswegCode)) {
            $useMinMax = false;
            if (isset($stamtoedieningswegCode['min'])) {
                $this->addUsingAlias(GsStamnaamStamtoedieningswegPeer::STAMTOEDIENINGSWEG_CODE, $stamtoedieningswegCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stamtoedieningswegCode['max'])) {
                $this->addUsingAlias(GsStamnaamStamtoedieningswegPeer::STAMTOEDIENINGSWEG_CODE, $stamtoedieningswegCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsStamnaamStamtoedieningswegPeer::STAMTOEDIENINGSWEG_CODE, $stamtoedieningswegCode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsStamnaamStamtoedieningsweg $gsStamnaamStamtoedieningsweg Object to remove from the list of results
     *
     * @return GsStamnaamStamtoedieningswegQuery The current query, for fluid interface
     */
    public function prune($gsStamnaamStamtoedieningsweg = null)
    {
        if ($gsStamnaamStamtoedieningsweg) {
            $this->addUsingAlias(GsStamnaamStamtoedieningswegPeer::SSKKODE, $gsStamnaamStamtoedieningsweg->getSskkode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
