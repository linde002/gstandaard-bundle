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
use PharmaIntelligence\GstandaardBundle\Model\GsDubbelmedicatie;
use PharmaIntelligence\GstandaardBundle\Model\GsDubbelmedicatiePeer;
use PharmaIntelligence\GstandaardBundle\Model\GsDubbelmedicatieQuery;

/**
 * @method GsDubbelmedicatieQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsDubbelmedicatieQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsDubbelmedicatieQuery orderByPrkKodeDubbelmedicatieA($order = Criteria::ASC) Order by the prk_kode_dubbelmedicatie_a column
 * @method GsDubbelmedicatieQuery orderByPrkKodeDubbelmedicatieB($order = Criteria::ASC) Order by the prk_kode_dubbelmedicatie_b column
 * @method GsDubbelmedicatieQuery orderByDubbelmedicatiecode($order = Criteria::ASC) Order by the dubbelmedicatiecode column
 *
 * @method GsDubbelmedicatieQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsDubbelmedicatieQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsDubbelmedicatieQuery groupByPrkKodeDubbelmedicatieA() Group by the prk_kode_dubbelmedicatie_a column
 * @method GsDubbelmedicatieQuery groupByPrkKodeDubbelmedicatieB() Group by the prk_kode_dubbelmedicatie_b column
 * @method GsDubbelmedicatieQuery groupByDubbelmedicatiecode() Group by the dubbelmedicatiecode column
 *
 * @method GsDubbelmedicatieQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsDubbelmedicatieQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsDubbelmedicatieQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsDubbelmedicatie findOne(PropelPDO $con = null) Return the first GsDubbelmedicatie matching the query
 * @method GsDubbelmedicatie findOneOrCreate(PropelPDO $con = null) Return the first GsDubbelmedicatie matching the query, or a new GsDubbelmedicatie object populated from the query conditions when no match is found
 *
 * @method GsDubbelmedicatie findOneByBestandnummer(int $bestandnummer) Return the first GsDubbelmedicatie filtered by the bestandnummer column
 * @method GsDubbelmedicatie findOneByMutatiekode(int $mutatiekode) Return the first GsDubbelmedicatie filtered by the mutatiekode column
 * @method GsDubbelmedicatie findOneByPrkKodeDubbelmedicatieA(int $prk_kode_dubbelmedicatie_a) Return the first GsDubbelmedicatie filtered by the prk_kode_dubbelmedicatie_a column
 * @method GsDubbelmedicatie findOneByPrkKodeDubbelmedicatieB(int $prk_kode_dubbelmedicatie_b) Return the first GsDubbelmedicatie filtered by the prk_kode_dubbelmedicatie_b column
 * @method GsDubbelmedicatie findOneByDubbelmedicatiecode(int $dubbelmedicatiecode) Return the first GsDubbelmedicatie filtered by the dubbelmedicatiecode column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsDubbelmedicatie objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsDubbelmedicatie objects filtered by the mutatiekode column
 * @method array findByPrkKodeDubbelmedicatieA(int $prk_kode_dubbelmedicatie_a) Return GsDubbelmedicatie objects filtered by the prk_kode_dubbelmedicatie_a column
 * @method array findByPrkKodeDubbelmedicatieB(int $prk_kode_dubbelmedicatie_b) Return GsDubbelmedicatie objects filtered by the prk_kode_dubbelmedicatie_b column
 * @method array findByDubbelmedicatiecode(int $dubbelmedicatiecode) Return GsDubbelmedicatie objects filtered by the dubbelmedicatiecode column
 */
abstract class BaseGsDubbelmedicatieQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsDubbelmedicatieQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDubbelmedicatie';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsDubbelmedicatieQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsDubbelmedicatieQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsDubbelmedicatieQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsDubbelmedicatieQuery) {
            return $criteria;
        }
        $query = new GsDubbelmedicatieQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$prk_kode_dubbelmedicatie_a, $prk_kode_dubbelmedicatie_b]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsDubbelmedicatie|GsDubbelmedicatie[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsDubbelmedicatiePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsDubbelmedicatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsDubbelmedicatie A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `prk_kode_dubbelmedicatie_a`, `prk_kode_dubbelmedicatie_b`, `dubbelmedicatiecode` FROM `gs_dubbelmedicatie` WHERE `prk_kode_dubbelmedicatie_a` = :p0 AND `prk_kode_dubbelmedicatie_b` = :p1';
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
            $obj = new GsDubbelmedicatie();
            $obj->hydrate($row);
            GsDubbelmedicatiePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsDubbelmedicatie|GsDubbelmedicatie[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsDubbelmedicatie[]|mixed the list of results, formatted by the current formatter
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
     * @return GsDubbelmedicatieQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsDubbelmedicatiePeer::PRK_KODE_DUBBELMEDICATIE_A, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsDubbelmedicatiePeer::PRK_KODE_DUBBELMEDICATIE_B, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsDubbelmedicatieQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsDubbelmedicatiePeer::PRK_KODE_DUBBELMEDICATIE_A, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsDubbelmedicatiePeer::PRK_KODE_DUBBELMEDICATIE_B, $key[1], Criteria::EQUAL);
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
     * @return GsDubbelmedicatieQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsDubbelmedicatiePeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsDubbelmedicatiePeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDubbelmedicatiePeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsDubbelmedicatieQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsDubbelmedicatiePeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsDubbelmedicatiePeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDubbelmedicatiePeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the prk_kode_dubbelmedicatie_a column
     *
     * Example usage:
     * <code>
     * $query->filterByPrkKodeDubbelmedicatieA(1234); // WHERE prk_kode_dubbelmedicatie_a = 1234
     * $query->filterByPrkKodeDubbelmedicatieA(array(12, 34)); // WHERE prk_kode_dubbelmedicatie_a IN (12, 34)
     * $query->filterByPrkKodeDubbelmedicatieA(array('min' => 12)); // WHERE prk_kode_dubbelmedicatie_a >= 12
     * $query->filterByPrkKodeDubbelmedicatieA(array('max' => 12)); // WHERE prk_kode_dubbelmedicatie_a <= 12
     * </code>
     *
     * @param     mixed $prkKodeDubbelmedicatieA The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDubbelmedicatieQuery The current query, for fluid interface
     */
    public function filterByPrkKodeDubbelmedicatieA($prkKodeDubbelmedicatieA = null, $comparison = null)
    {
        if (is_array($prkKodeDubbelmedicatieA)) {
            $useMinMax = false;
            if (isset($prkKodeDubbelmedicatieA['min'])) {
                $this->addUsingAlias(GsDubbelmedicatiePeer::PRK_KODE_DUBBELMEDICATIE_A, $prkKodeDubbelmedicatieA['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prkKodeDubbelmedicatieA['max'])) {
                $this->addUsingAlias(GsDubbelmedicatiePeer::PRK_KODE_DUBBELMEDICATIE_A, $prkKodeDubbelmedicatieA['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDubbelmedicatiePeer::PRK_KODE_DUBBELMEDICATIE_A, $prkKodeDubbelmedicatieA, $comparison);
    }

    /**
     * Filter the query on the prk_kode_dubbelmedicatie_b column
     *
     * Example usage:
     * <code>
     * $query->filterByPrkKodeDubbelmedicatieB(1234); // WHERE prk_kode_dubbelmedicatie_b = 1234
     * $query->filterByPrkKodeDubbelmedicatieB(array(12, 34)); // WHERE prk_kode_dubbelmedicatie_b IN (12, 34)
     * $query->filterByPrkKodeDubbelmedicatieB(array('min' => 12)); // WHERE prk_kode_dubbelmedicatie_b >= 12
     * $query->filterByPrkKodeDubbelmedicatieB(array('max' => 12)); // WHERE prk_kode_dubbelmedicatie_b <= 12
     * </code>
     *
     * @param     mixed $prkKodeDubbelmedicatieB The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDubbelmedicatieQuery The current query, for fluid interface
     */
    public function filterByPrkKodeDubbelmedicatieB($prkKodeDubbelmedicatieB = null, $comparison = null)
    {
        if (is_array($prkKodeDubbelmedicatieB)) {
            $useMinMax = false;
            if (isset($prkKodeDubbelmedicatieB['min'])) {
                $this->addUsingAlias(GsDubbelmedicatiePeer::PRK_KODE_DUBBELMEDICATIE_B, $prkKodeDubbelmedicatieB['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prkKodeDubbelmedicatieB['max'])) {
                $this->addUsingAlias(GsDubbelmedicatiePeer::PRK_KODE_DUBBELMEDICATIE_B, $prkKodeDubbelmedicatieB['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDubbelmedicatiePeer::PRK_KODE_DUBBELMEDICATIE_B, $prkKodeDubbelmedicatieB, $comparison);
    }

    /**
     * Filter the query on the dubbelmedicatiecode column
     *
     * Example usage:
     * <code>
     * $query->filterByDubbelmedicatiecode(1234); // WHERE dubbelmedicatiecode = 1234
     * $query->filterByDubbelmedicatiecode(array(12, 34)); // WHERE dubbelmedicatiecode IN (12, 34)
     * $query->filterByDubbelmedicatiecode(array('min' => 12)); // WHERE dubbelmedicatiecode >= 12
     * $query->filterByDubbelmedicatiecode(array('max' => 12)); // WHERE dubbelmedicatiecode <= 12
     * </code>
     *
     * @param     mixed $dubbelmedicatiecode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDubbelmedicatieQuery The current query, for fluid interface
     */
    public function filterByDubbelmedicatiecode($dubbelmedicatiecode = null, $comparison = null)
    {
        if (is_array($dubbelmedicatiecode)) {
            $useMinMax = false;
            if (isset($dubbelmedicatiecode['min'])) {
                $this->addUsingAlias(GsDubbelmedicatiePeer::DUBBELMEDICATIECODE, $dubbelmedicatiecode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dubbelmedicatiecode['max'])) {
                $this->addUsingAlias(GsDubbelmedicatiePeer::DUBBELMEDICATIECODE, $dubbelmedicatiecode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDubbelmedicatiePeer::DUBBELMEDICATIECODE, $dubbelmedicatiecode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsDubbelmedicatie $gsDubbelmedicatie Object to remove from the list of results
     *
     * @return GsDubbelmedicatieQuery The current query, for fluid interface
     */
    public function prune($gsDubbelmedicatie = null)
    {
        if ($gsDubbelmedicatie) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsDubbelmedicatiePeer::PRK_KODE_DUBBELMEDICATIE_A), $gsDubbelmedicatie->getPrkKodeDubbelmedicatieA(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsDubbelmedicatiePeer::PRK_KODE_DUBBELMEDICATIE_B), $gsDubbelmedicatie->getPrkKodeDubbelmedicatieB(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
