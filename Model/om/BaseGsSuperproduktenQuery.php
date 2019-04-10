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
use PharmaIntelligence\GstandaardBundle\Model\GsSuperprodukten;
use PharmaIntelligence\GstandaardBundle\Model\GsSuperproduktenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsSuperproduktenQuery;

/**
 * @method GsSuperproduktenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsSuperproduktenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsSuperproduktenQuery orderBySuperproduktkode($order = Criteria::ASC) Order by the superproduktkode column
 * @method GsSuperproduktenQuery orderBySskkode($order = Criteria::ASC) Order by the sskkode column
 *
 * @method GsSuperproduktenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsSuperproduktenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsSuperproduktenQuery groupBySuperproduktkode() Group by the superproduktkode column
 * @method GsSuperproduktenQuery groupBySskkode() Group by the sskkode column
 *
 * @method GsSuperproduktenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsSuperproduktenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsSuperproduktenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsSuperprodukten findOne(PropelPDO $con = null) Return the first GsSuperprodukten matching the query
 * @method GsSuperprodukten findOneOrCreate(PropelPDO $con = null) Return the first GsSuperprodukten matching the query, or a new GsSuperprodukten object populated from the query conditions when no match is found
 *
 * @method GsSuperprodukten findOneByBestandnummer(int $bestandnummer) Return the first GsSuperprodukten filtered by the bestandnummer column
 * @method GsSuperprodukten findOneByMutatiekode(int $mutatiekode) Return the first GsSuperprodukten filtered by the mutatiekode column
 * @method GsSuperprodukten findOneBySuperproduktkode(int $superproduktkode) Return the first GsSuperprodukten filtered by the superproduktkode column
 * @method GsSuperprodukten findOneBySskkode(int $sskkode) Return the first GsSuperprodukten filtered by the sskkode column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsSuperprodukten objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsSuperprodukten objects filtered by the mutatiekode column
 * @method array findBySuperproduktkode(int $superproduktkode) Return GsSuperprodukten objects filtered by the superproduktkode column
 * @method array findBySskkode(int $sskkode) Return GsSuperprodukten objects filtered by the sskkode column
 */
abstract class BaseGsSuperproduktenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsSuperproduktenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsSuperprodukten';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsSuperproduktenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsSuperproduktenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsSuperproduktenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsSuperproduktenQuery) {
            return $criteria;
        }
        $query = new GsSuperproduktenQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$superproduktkode, $sskkode]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsSuperprodukten|GsSuperprodukten[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsSuperproduktenPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsSuperproduktenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 GsSuperprodukten A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `superproduktkode`, `sskkode` FROM `gs_superprodukten` WHERE `superproduktkode` = :p0 AND `sskkode` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsSuperprodukten();
            $obj->hydrate($row);
            GsSuperproduktenPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsSuperprodukten|GsSuperprodukten[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|GsSuperprodukten[]|mixed the list of results, formatted by the current formatter
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
     * @return GsSuperproduktenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsSuperproduktenPeer::SUPERPRODUKTKODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsSuperproduktenPeer::SSKKODE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsSuperproduktenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsSuperproduktenPeer::SUPERPRODUKTKODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsSuperproduktenPeer::SSKKODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return GsSuperproduktenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsSuperproduktenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsSuperproduktenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSuperproduktenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsSuperproduktenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsSuperproduktenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsSuperproduktenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSuperproduktenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the superproduktkode column
     *
     * Example usage:
     * <code>
     * $query->filterBySuperproduktkode(1234); // WHERE superproduktkode = 1234
     * $query->filterBySuperproduktkode(array(12, 34)); // WHERE superproduktkode IN (12, 34)
     * $query->filterBySuperproduktkode(array('min' => 12)); // WHERE superproduktkode >= 12
     * $query->filterBySuperproduktkode(array('max' => 12)); // WHERE superproduktkode <= 12
     * </code>
     *
     * @param     mixed $superproduktkode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsSuperproduktenQuery The current query, for fluid interface
     */
    public function filterBySuperproduktkode($superproduktkode = null, $comparison = null)
    {
        if (is_array($superproduktkode)) {
            $useMinMax = false;
            if (isset($superproduktkode['min'])) {
                $this->addUsingAlias(GsSuperproduktenPeer::SUPERPRODUKTKODE, $superproduktkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($superproduktkode['max'])) {
                $this->addUsingAlias(GsSuperproduktenPeer::SUPERPRODUKTKODE, $superproduktkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSuperproduktenPeer::SUPERPRODUKTKODE, $superproduktkode, $comparison);
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
     * @return GsSuperproduktenQuery The current query, for fluid interface
     */
    public function filterBySskkode($sskkode = null, $comparison = null)
    {
        if (is_array($sskkode)) {
            $useMinMax = false;
            if (isset($sskkode['min'])) {
                $this->addUsingAlias(GsSuperproduktenPeer::SSKKODE, $sskkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sskkode['max'])) {
                $this->addUsingAlias(GsSuperproduktenPeer::SSKKODE, $sskkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSuperproduktenPeer::SSKKODE, $sskkode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsSuperprodukten $gsSuperprodukten Object to remove from the list of results
     *
     * @return GsSuperproduktenQuery The current query, for fluid interface
     */
    public function prune($gsSuperprodukten = null)
    {
        if ($gsSuperprodukten) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsSuperproduktenPeer::SUPERPRODUKTKODE), $gsSuperprodukten->getSuperproduktkode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsSuperproduktenPeer::SSKKODE), $gsSuperprodukten->getSskkode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
