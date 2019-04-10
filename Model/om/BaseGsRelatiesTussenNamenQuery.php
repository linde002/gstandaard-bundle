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
use PharmaIntelligence\GstandaardBundle\Model\GsRelatiesTussenNamen;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatiesTussenNamenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatiesTussenNamenQuery;

/**
 * @method GsRelatiesTussenNamenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsRelatiesTussenNamenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsRelatiesTussenNamenQuery orderByRelatieSoort($order = Criteria::ASC) Order by the relatie_soort column
 * @method GsRelatiesTussenNamenQuery orderByNaamnummerIngang($order = Criteria::ASC) Order by the naamnummer_ingang column
 * @method GsRelatiesTussenNamenQuery orderByNaamnummerUitgang($order = Criteria::ASC) Order by the naamnummer_uitgang column
 *
 * @method GsRelatiesTussenNamenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsRelatiesTussenNamenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsRelatiesTussenNamenQuery groupByRelatieSoort() Group by the relatie_soort column
 * @method GsRelatiesTussenNamenQuery groupByNaamnummerIngang() Group by the naamnummer_ingang column
 * @method GsRelatiesTussenNamenQuery groupByNaamnummerUitgang() Group by the naamnummer_uitgang column
 *
 * @method GsRelatiesTussenNamenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsRelatiesTussenNamenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsRelatiesTussenNamenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsRelatiesTussenNamen findOne(PropelPDO $con = null) Return the first GsRelatiesTussenNamen matching the query
 * @method GsRelatiesTussenNamen findOneOrCreate(PropelPDO $con = null) Return the first GsRelatiesTussenNamen matching the query, or a new GsRelatiesTussenNamen object populated from the query conditions when no match is found
 *
 * @method GsRelatiesTussenNamen findOneByBestandnummer(int $bestandnummer) Return the first GsRelatiesTussenNamen filtered by the bestandnummer column
 * @method GsRelatiesTussenNamen findOneByMutatiekode(int $mutatiekode) Return the first GsRelatiesTussenNamen filtered by the mutatiekode column
 * @method GsRelatiesTussenNamen findOneByRelatieSoort(int $relatie_soort) Return the first GsRelatiesTussenNamen filtered by the relatie_soort column
 * @method GsRelatiesTussenNamen findOneByNaamnummerIngang(int $naamnummer_ingang) Return the first GsRelatiesTussenNamen filtered by the naamnummer_ingang column
 * @method GsRelatiesTussenNamen findOneByNaamnummerUitgang(int $naamnummer_uitgang) Return the first GsRelatiesTussenNamen filtered by the naamnummer_uitgang column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsRelatiesTussenNamen objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsRelatiesTussenNamen objects filtered by the mutatiekode column
 * @method array findByRelatieSoort(int $relatie_soort) Return GsRelatiesTussenNamen objects filtered by the relatie_soort column
 * @method array findByNaamnummerIngang(int $naamnummer_ingang) Return GsRelatiesTussenNamen objects filtered by the naamnummer_ingang column
 * @method array findByNaamnummerUitgang(int $naamnummer_uitgang) Return GsRelatiesTussenNamen objects filtered by the naamnummer_uitgang column
 */
abstract class BaseGsRelatiesTussenNamenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsRelatiesTussenNamenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRelatiesTussenNamen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsRelatiesTussenNamenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsRelatiesTussenNamenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsRelatiesTussenNamenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsRelatiesTussenNamenQuery) {
            return $criteria;
        }
        $query = new GsRelatiesTussenNamenQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$relatie_soort, $naamnummer_ingang, $naamnummer_uitgang]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsRelatiesTussenNamen|GsRelatiesTussenNamen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsRelatiesTussenNamenPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsRelatiesTussenNamenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsRelatiesTussenNamen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `relatie_soort`, `naamnummer_ingang`, `naamnummer_uitgang` FROM `gs_relaties_tussen_namen` WHERE `relatie_soort` = :p0 AND `naamnummer_ingang` = :p1 AND `naamnummer_uitgang` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsRelatiesTussenNamen();
            $obj->hydrate($row);
            GsRelatiesTussenNamenPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return GsRelatiesTussenNamen|GsRelatiesTussenNamen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsRelatiesTussenNamen[]|mixed the list of results, formatted by the current formatter
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
     * @return GsRelatiesTussenNamenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsRelatiesTussenNamenPeer::RELATIE_SOORT, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsRelatiesTussenNamenPeer::NAAMNUMMER_INGANG, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsRelatiesTussenNamenPeer::NAAMNUMMER_UITGANG, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsRelatiesTussenNamenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsRelatiesTussenNamenPeer::RELATIE_SOORT, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsRelatiesTussenNamenPeer::NAAMNUMMER_INGANG, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsRelatiesTussenNamenPeer::NAAMNUMMER_UITGANG, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
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
     * @return GsRelatiesTussenNamenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsRelatiesTussenNamenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsRelatiesTussenNamenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatiesTussenNamenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsRelatiesTussenNamenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsRelatiesTussenNamenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsRelatiesTussenNamenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatiesTussenNamenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the relatie_soort column
     *
     * Example usage:
     * <code>
     * $query->filterByRelatieSoort(1234); // WHERE relatie_soort = 1234
     * $query->filterByRelatieSoort(array(12, 34)); // WHERE relatie_soort IN (12, 34)
     * $query->filterByRelatieSoort(array('min' => 12)); // WHERE relatie_soort >= 12
     * $query->filterByRelatieSoort(array('max' => 12)); // WHERE relatie_soort <= 12
     * </code>
     *
     * @param     mixed $relatieSoort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatiesTussenNamenQuery The current query, for fluid interface
     */
    public function filterByRelatieSoort($relatieSoort = null, $comparison = null)
    {
        if (is_array($relatieSoort)) {
            $useMinMax = false;
            if (isset($relatieSoort['min'])) {
                $this->addUsingAlias(GsRelatiesTussenNamenPeer::RELATIE_SOORT, $relatieSoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relatieSoort['max'])) {
                $this->addUsingAlias(GsRelatiesTussenNamenPeer::RELATIE_SOORT, $relatieSoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatiesTussenNamenPeer::RELATIE_SOORT, $relatieSoort, $comparison);
    }

    /**
     * Filter the query on the naamnummer_ingang column
     *
     * Example usage:
     * <code>
     * $query->filterByNaamnummerIngang(1234); // WHERE naamnummer_ingang = 1234
     * $query->filterByNaamnummerIngang(array(12, 34)); // WHERE naamnummer_ingang IN (12, 34)
     * $query->filterByNaamnummerIngang(array('min' => 12)); // WHERE naamnummer_ingang >= 12
     * $query->filterByNaamnummerIngang(array('max' => 12)); // WHERE naamnummer_ingang <= 12
     * </code>
     *
     * @param     mixed $naamnummerIngang The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatiesTussenNamenQuery The current query, for fluid interface
     */
    public function filterByNaamnummerIngang($naamnummerIngang = null, $comparison = null)
    {
        if (is_array($naamnummerIngang)) {
            $useMinMax = false;
            if (isset($naamnummerIngang['min'])) {
                $this->addUsingAlias(GsRelatiesTussenNamenPeer::NAAMNUMMER_INGANG, $naamnummerIngang['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($naamnummerIngang['max'])) {
                $this->addUsingAlias(GsRelatiesTussenNamenPeer::NAAMNUMMER_INGANG, $naamnummerIngang['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatiesTussenNamenPeer::NAAMNUMMER_INGANG, $naamnummerIngang, $comparison);
    }

    /**
     * Filter the query on the naamnummer_uitgang column
     *
     * Example usage:
     * <code>
     * $query->filterByNaamnummerUitgang(1234); // WHERE naamnummer_uitgang = 1234
     * $query->filterByNaamnummerUitgang(array(12, 34)); // WHERE naamnummer_uitgang IN (12, 34)
     * $query->filterByNaamnummerUitgang(array('min' => 12)); // WHERE naamnummer_uitgang >= 12
     * $query->filterByNaamnummerUitgang(array('max' => 12)); // WHERE naamnummer_uitgang <= 12
     * </code>
     *
     * @param     mixed $naamnummerUitgang The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatiesTussenNamenQuery The current query, for fluid interface
     */
    public function filterByNaamnummerUitgang($naamnummerUitgang = null, $comparison = null)
    {
        if (is_array($naamnummerUitgang)) {
            $useMinMax = false;
            if (isset($naamnummerUitgang['min'])) {
                $this->addUsingAlias(GsRelatiesTussenNamenPeer::NAAMNUMMER_UITGANG, $naamnummerUitgang['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($naamnummerUitgang['max'])) {
                $this->addUsingAlias(GsRelatiesTussenNamenPeer::NAAMNUMMER_UITGANG, $naamnummerUitgang['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatiesTussenNamenPeer::NAAMNUMMER_UITGANG, $naamnummerUitgang, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsRelatiesTussenNamen $gsRelatiesTussenNamen Object to remove from the list of results
     *
     * @return GsRelatiesTussenNamenQuery The current query, for fluid interface
     */
    public function prune($gsRelatiesTussenNamen = null)
    {
        if ($gsRelatiesTussenNamen) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsRelatiesTussenNamenPeer::RELATIE_SOORT), $gsRelatiesTussenNamen->getRelatieSoort(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsRelatiesTussenNamenPeer::NAAMNUMMER_INGANG), $gsRelatiesTussenNamen->getNaamnummerIngang(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsRelatiesTussenNamenPeer::NAAMNUMMER_UITGANG), $gsRelatiesTussenNamen->getNaamnummerUitgang(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
