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
use PharmaIntelligence\GstandaardBundle\Model\GsIcpc12000;
use PharmaIntelligence\GstandaardBundle\Model\GsIcpc12000Peer;
use PharmaIntelligence\GstandaardBundle\Model\GsIcpc12000Query;

/**
 * @method GsIcpc12000Query orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsIcpc12000Query orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsIcpc12000Query orderByIcpc1nummer($order = Criteria::ASC) Order by the icpc1nummer column
 * @method GsIcpc12000Query orderByIcpccode($order = Criteria::ASC) Order by the icpccode column
 * @method GsIcpc12000Query orderByIcpcomschrijvingen($order = Criteria::ASC) Order by the icpcomschrijvingen column
 *
 * @method GsIcpc12000Query groupByBestandnummer() Group by the bestandnummer column
 * @method GsIcpc12000Query groupByMutatiekode() Group by the mutatiekode column
 * @method GsIcpc12000Query groupByIcpc1nummer() Group by the icpc1nummer column
 * @method GsIcpc12000Query groupByIcpccode() Group by the icpccode column
 * @method GsIcpc12000Query groupByIcpcomschrijvingen() Group by the icpcomschrijvingen column
 *
 * @method GsIcpc12000Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsIcpc12000Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsIcpc12000Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsIcpc12000 findOne(PropelPDO $con = null) Return the first GsIcpc12000 matching the query
 * @method GsIcpc12000 findOneOrCreate(PropelPDO $con = null) Return the first GsIcpc12000 matching the query, or a new GsIcpc12000 object populated from the query conditions when no match is found
 *
 * @method GsIcpc12000 findOneByBestandnummer(int $bestandnummer) Return the first GsIcpc12000 filtered by the bestandnummer column
 * @method GsIcpc12000 findOneByMutatiekode(int $mutatiekode) Return the first GsIcpc12000 filtered by the mutatiekode column
 * @method GsIcpc12000 findOneByIcpccode(string $icpccode) Return the first GsIcpc12000 filtered by the icpccode column
 * @method GsIcpc12000 findOneByIcpcomschrijvingen(string $icpcomschrijvingen) Return the first GsIcpc12000 filtered by the icpcomschrijvingen column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsIcpc12000 objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsIcpc12000 objects filtered by the mutatiekode column
 * @method array findByIcpc1nummer(int $icpc1nummer) Return GsIcpc12000 objects filtered by the icpc1nummer column
 * @method array findByIcpccode(string $icpccode) Return GsIcpc12000 objects filtered by the icpccode column
 * @method array findByIcpcomschrijvingen(string $icpcomschrijvingen) Return GsIcpc12000 objects filtered by the icpcomschrijvingen column
 */
abstract class BaseGsIcpc12000Query extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsIcpc12000Query object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsIcpc12000';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsIcpc12000Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsIcpc12000Query|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsIcpc12000Query
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsIcpc12000Query) {
            return $criteria;
        }
        $query = new GsIcpc12000Query(null, null, $modelAlias);

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
     * @return   GsIcpc12000|GsIcpc12000[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsIcpc12000Peer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsIcpc12000Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsIcpc12000 A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIcpc1nummer($key, $con = null)
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
     * @return                 GsIcpc12000 A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `icpc1nummer`, `icpccode`, `icpcomschrijvingen` FROM `gs_icpc_1_2000` WHERE `icpc1nummer` = :p0';
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
            $obj = new GsIcpc12000();
            $obj->hydrate($row);
            GsIcpc12000Peer::addInstanceToPool($obj, (string) $key);
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
     * @return GsIcpc12000|GsIcpc12000[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsIcpc12000[]|mixed the list of results, formatted by the current formatter
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
     * @return GsIcpc12000Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsIcpc12000Peer::ICPC1NUMMER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsIcpc12000Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsIcpc12000Peer::ICPC1NUMMER, $keys, Criteria::IN);
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
     * @return GsIcpc12000Query The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsIcpc12000Peer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsIcpc12000Peer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIcpc12000Peer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsIcpc12000Query The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsIcpc12000Peer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsIcpc12000Peer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIcpc12000Peer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the icpc1nummer column
     *
     * Example usage:
     * <code>
     * $query->filterByIcpc1nummer(1234); // WHERE icpc1nummer = 1234
     * $query->filterByIcpc1nummer(array(12, 34)); // WHERE icpc1nummer IN (12, 34)
     * $query->filterByIcpc1nummer(array('min' => 12)); // WHERE icpc1nummer >= 12
     * $query->filterByIcpc1nummer(array('max' => 12)); // WHERE icpc1nummer <= 12
     * </code>
     *
     * @param     mixed $icpc1nummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIcpc12000Query The current query, for fluid interface
     */
    public function filterByIcpc1nummer($icpc1nummer = null, $comparison = null)
    {
        if (is_array($icpc1nummer)) {
            $useMinMax = false;
            if (isset($icpc1nummer['min'])) {
                $this->addUsingAlias(GsIcpc12000Peer::ICPC1NUMMER, $icpc1nummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($icpc1nummer['max'])) {
                $this->addUsingAlias(GsIcpc12000Peer::ICPC1NUMMER, $icpc1nummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIcpc12000Peer::ICPC1NUMMER, $icpc1nummer, $comparison);
    }

    /**
     * Filter the query on the icpccode column
     *
     * Example usage:
     * <code>
     * $query->filterByIcpccode('fooValue');   // WHERE icpccode = 'fooValue'
     * $query->filterByIcpccode('%fooValue%'); // WHERE icpccode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $icpccode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIcpc12000Query The current query, for fluid interface
     */
    public function filterByIcpccode($icpccode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($icpccode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $icpccode)) {
                $icpccode = str_replace('*', '%', $icpccode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsIcpc12000Peer::ICPCCODE, $icpccode, $comparison);
    }

    /**
     * Filter the query on the icpcomschrijvingen column
     *
     * Example usage:
     * <code>
     * $query->filterByIcpcomschrijvingen('fooValue');   // WHERE icpcomschrijvingen = 'fooValue'
     * $query->filterByIcpcomschrijvingen('%fooValue%'); // WHERE icpcomschrijvingen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $icpcomschrijvingen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIcpc12000Query The current query, for fluid interface
     */
    public function filterByIcpcomschrijvingen($icpcomschrijvingen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($icpcomschrijvingen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $icpcomschrijvingen)) {
                $icpcomschrijvingen = str_replace('*', '%', $icpcomschrijvingen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsIcpc12000Peer::ICPCOMSCHRIJVINGEN, $icpcomschrijvingen, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsIcpc12000 $gsIcpc12000 Object to remove from the list of results
     *
     * @return GsIcpc12000Query The current query, for fluid interface
     */
    public function prune($gsIcpc12000 = null)
    {
        if ($gsIcpc12000) {
            $this->addUsingAlias(GsIcpc12000Peer::ICPC1NUMMER, $gsIcpc12000->getIcpc1nummer(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
