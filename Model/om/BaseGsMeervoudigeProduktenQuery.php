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
use PharmaIntelligence\GstandaardBundle\Model\GsMeervoudigeProdukten;
use PharmaIntelligence\GstandaardBundle\Model\GsMeervoudigeProduktenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsMeervoudigeProduktenQuery;

/**
 * @method GsMeervoudigeProduktenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsMeervoudigeProduktenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsMeervoudigeProduktenQuery orderByHandelsproduktkode($order = Criteria::ASC) Order by the handelsproduktkode column
 * @method GsMeervoudigeProduktenQuery orderByComponentHpkNummer($order = Criteria::ASC) Order by the component_hpk_nummer column
 * @method GsMeervoudigeProduktenQuery orderByComponentHpkAantal($order = Criteria::ASC) Order by the component_hpk_aantal column
 *
 * @method GsMeervoudigeProduktenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsMeervoudigeProduktenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsMeervoudigeProduktenQuery groupByHandelsproduktkode() Group by the handelsproduktkode column
 * @method GsMeervoudigeProduktenQuery groupByComponentHpkNummer() Group by the component_hpk_nummer column
 * @method GsMeervoudigeProduktenQuery groupByComponentHpkAantal() Group by the component_hpk_aantal column
 *
 * @method GsMeervoudigeProduktenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsMeervoudigeProduktenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsMeervoudigeProduktenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsMeervoudigeProdukten findOne(PropelPDO $con = null) Return the first GsMeervoudigeProdukten matching the query
 * @method GsMeervoudigeProdukten findOneOrCreate(PropelPDO $con = null) Return the first GsMeervoudigeProdukten matching the query, or a new GsMeervoudigeProdukten object populated from the query conditions when no match is found
 *
 * @method GsMeervoudigeProdukten findOneByBestandnummer(int $bestandnummer) Return the first GsMeervoudigeProdukten filtered by the bestandnummer column
 * @method GsMeervoudigeProdukten findOneByMutatiekode(int $mutatiekode) Return the first GsMeervoudigeProdukten filtered by the mutatiekode column
 * @method GsMeervoudigeProdukten findOneByHandelsproduktkode(int $handelsproduktkode) Return the first GsMeervoudigeProdukten filtered by the handelsproduktkode column
 * @method GsMeervoudigeProdukten findOneByComponentHpkNummer(int $component_hpk_nummer) Return the first GsMeervoudigeProdukten filtered by the component_hpk_nummer column
 * @method GsMeervoudigeProdukten findOneByComponentHpkAantal(int $component_hpk_aantal) Return the first GsMeervoudigeProdukten filtered by the component_hpk_aantal column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsMeervoudigeProdukten objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsMeervoudigeProdukten objects filtered by the mutatiekode column
 * @method array findByHandelsproduktkode(int $handelsproduktkode) Return GsMeervoudigeProdukten objects filtered by the handelsproduktkode column
 * @method array findByComponentHpkNummer(int $component_hpk_nummer) Return GsMeervoudigeProdukten objects filtered by the component_hpk_nummer column
 * @method array findByComponentHpkAantal(int $component_hpk_aantal) Return GsMeervoudigeProdukten objects filtered by the component_hpk_aantal column
 */
abstract class BaseGsMeervoudigeProduktenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsMeervoudigeProduktenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsMeervoudigeProdukten';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsMeervoudigeProduktenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsMeervoudigeProduktenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsMeervoudigeProduktenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsMeervoudigeProduktenQuery) {
            return $criteria;
        }
        $query = new GsMeervoudigeProduktenQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$handelsproduktkode, $component_hpk_nummer]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsMeervoudigeProdukten|GsMeervoudigeProdukten[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsMeervoudigeProduktenPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsMeervoudigeProduktenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsMeervoudigeProdukten A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `handelsproduktkode`, `component_hpk_nummer`, `component_hpk_aantal` FROM `gs_meervoudige_produkten` WHERE `handelsproduktkode` = :p0 AND `component_hpk_nummer` = :p1';
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
            $obj = new GsMeervoudigeProdukten();
            $obj->hydrate($row);
            GsMeervoudigeProduktenPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsMeervoudigeProdukten|GsMeervoudigeProdukten[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsMeervoudigeProdukten[]|mixed the list of results, formatted by the current formatter
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
     * @return GsMeervoudigeProduktenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsMeervoudigeProduktenPeer::HANDELSPRODUKTKODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsMeervoudigeProduktenPeer::COMPONENT_HPK_NUMMER, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsMeervoudigeProduktenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsMeervoudigeProduktenPeer::HANDELSPRODUKTKODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsMeervoudigeProduktenPeer::COMPONENT_HPK_NUMMER, $key[1], Criteria::EQUAL);
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
     * @return GsMeervoudigeProduktenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsMeervoudigeProduktenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsMeervoudigeProduktenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMeervoudigeProduktenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsMeervoudigeProduktenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsMeervoudigeProduktenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsMeervoudigeProduktenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMeervoudigeProduktenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the handelsproduktkode column
     *
     * Example usage:
     * <code>
     * $query->filterByHandelsproduktkode(1234); // WHERE handelsproduktkode = 1234
     * $query->filterByHandelsproduktkode(array(12, 34)); // WHERE handelsproduktkode IN (12, 34)
     * $query->filterByHandelsproduktkode(array('min' => 12)); // WHERE handelsproduktkode >= 12
     * $query->filterByHandelsproduktkode(array('max' => 12)); // WHERE handelsproduktkode <= 12
     * </code>
     *
     * @param     mixed $handelsproduktkode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMeervoudigeProduktenQuery The current query, for fluid interface
     */
    public function filterByHandelsproduktkode($handelsproduktkode = null, $comparison = null)
    {
        if (is_array($handelsproduktkode)) {
            $useMinMax = false;
            if (isset($handelsproduktkode['min'])) {
                $this->addUsingAlias(GsMeervoudigeProduktenPeer::HANDELSPRODUKTKODE, $handelsproduktkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($handelsproduktkode['max'])) {
                $this->addUsingAlias(GsMeervoudigeProduktenPeer::HANDELSPRODUKTKODE, $handelsproduktkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMeervoudigeProduktenPeer::HANDELSPRODUKTKODE, $handelsproduktkode, $comparison);
    }

    /**
     * Filter the query on the component_hpk_nummer column
     *
     * Example usage:
     * <code>
     * $query->filterByComponentHpkNummer(1234); // WHERE component_hpk_nummer = 1234
     * $query->filterByComponentHpkNummer(array(12, 34)); // WHERE component_hpk_nummer IN (12, 34)
     * $query->filterByComponentHpkNummer(array('min' => 12)); // WHERE component_hpk_nummer >= 12
     * $query->filterByComponentHpkNummer(array('max' => 12)); // WHERE component_hpk_nummer <= 12
     * </code>
     *
     * @param     mixed $componentHpkNummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMeervoudigeProduktenQuery The current query, for fluid interface
     */
    public function filterByComponentHpkNummer($componentHpkNummer = null, $comparison = null)
    {
        if (is_array($componentHpkNummer)) {
            $useMinMax = false;
            if (isset($componentHpkNummer['min'])) {
                $this->addUsingAlias(GsMeervoudigeProduktenPeer::COMPONENT_HPK_NUMMER, $componentHpkNummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($componentHpkNummer['max'])) {
                $this->addUsingAlias(GsMeervoudigeProduktenPeer::COMPONENT_HPK_NUMMER, $componentHpkNummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMeervoudigeProduktenPeer::COMPONENT_HPK_NUMMER, $componentHpkNummer, $comparison);
    }

    /**
     * Filter the query on the component_hpk_aantal column
     *
     * Example usage:
     * <code>
     * $query->filterByComponentHpkAantal(1234); // WHERE component_hpk_aantal = 1234
     * $query->filterByComponentHpkAantal(array(12, 34)); // WHERE component_hpk_aantal IN (12, 34)
     * $query->filterByComponentHpkAantal(array('min' => 12)); // WHERE component_hpk_aantal >= 12
     * $query->filterByComponentHpkAantal(array('max' => 12)); // WHERE component_hpk_aantal <= 12
     * </code>
     *
     * @param     mixed $componentHpkAantal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMeervoudigeProduktenQuery The current query, for fluid interface
     */
    public function filterByComponentHpkAantal($componentHpkAantal = null, $comparison = null)
    {
        if (is_array($componentHpkAantal)) {
            $useMinMax = false;
            if (isset($componentHpkAantal['min'])) {
                $this->addUsingAlias(GsMeervoudigeProduktenPeer::COMPONENT_HPK_AANTAL, $componentHpkAantal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($componentHpkAantal['max'])) {
                $this->addUsingAlias(GsMeervoudigeProduktenPeer::COMPONENT_HPK_AANTAL, $componentHpkAantal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMeervoudigeProduktenPeer::COMPONENT_HPK_AANTAL, $componentHpkAantal, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsMeervoudigeProdukten $gsMeervoudigeProdukten Object to remove from the list of results
     *
     * @return GsMeervoudigeProduktenQuery The current query, for fluid interface
     */
    public function prune($gsMeervoudigeProdukten = null)
    {
        if ($gsMeervoudigeProdukten) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsMeervoudigeProduktenPeer::HANDELSPRODUKTKODE), $gsMeervoudigeProdukten->getHandelsproduktkode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsMeervoudigeProduktenPeer::COMPONENT_HPK_NUMMER), $gsMeervoudigeProdukten->getComponentHpkNummer(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
