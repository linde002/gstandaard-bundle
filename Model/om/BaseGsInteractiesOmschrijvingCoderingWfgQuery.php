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
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesOmschrijvingCoderingWfg;
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesOmschrijvingCoderingWfgPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesOmschrijvingCoderingWfgQuery;

/**
 * @method GsInteractiesOmschrijvingCoderingWfgQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsInteractiesOmschrijvingCoderingWfgQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsInteractiesOmschrijvingCoderingWfgQuery orderBySoortCodering($order = Criteria::ASC) Order by the soort_codering column
 * @method GsInteractiesOmschrijvingCoderingWfgQuery orderByWfgcode($order = Criteria::ASC) Order by the wfgcode column
 * @method GsInteractiesOmschrijvingCoderingWfgQuery orderByRegelnummer($order = Criteria::ASC) Order by the regelnummer column
 * @method GsInteractiesOmschrijvingCoderingWfgQuery orderByTekstueleOmschrijving($order = Criteria::ASC) Order by the tekstuele_omschrijving column
 *
 * @method GsInteractiesOmschrijvingCoderingWfgQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsInteractiesOmschrijvingCoderingWfgQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsInteractiesOmschrijvingCoderingWfgQuery groupBySoortCodering() Group by the soort_codering column
 * @method GsInteractiesOmschrijvingCoderingWfgQuery groupByWfgcode() Group by the wfgcode column
 * @method GsInteractiesOmschrijvingCoderingWfgQuery groupByRegelnummer() Group by the regelnummer column
 * @method GsInteractiesOmschrijvingCoderingWfgQuery groupByTekstueleOmschrijving() Group by the tekstuele_omschrijving column
 *
 * @method GsInteractiesOmschrijvingCoderingWfgQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsInteractiesOmschrijvingCoderingWfgQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsInteractiesOmschrijvingCoderingWfgQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsInteractiesOmschrijvingCoderingWfg findOne(PropelPDO $con = null) Return the first GsInteractiesOmschrijvingCoderingWfg matching the query
 * @method GsInteractiesOmschrijvingCoderingWfg findOneOrCreate(PropelPDO $con = null) Return the first GsInteractiesOmschrijvingCoderingWfg matching the query, or a new GsInteractiesOmschrijvingCoderingWfg object populated from the query conditions when no match is found
 *
 * @method GsInteractiesOmschrijvingCoderingWfg findOneByBestandnummer(int $bestandnummer) Return the first GsInteractiesOmschrijvingCoderingWfg filtered by the bestandnummer column
 * @method GsInteractiesOmschrijvingCoderingWfg findOneByMutatiekode(int $mutatiekode) Return the first GsInteractiesOmschrijvingCoderingWfg filtered by the mutatiekode column
 * @method GsInteractiesOmschrijvingCoderingWfg findOneBySoortCodering(int $soort_codering) Return the first GsInteractiesOmschrijvingCoderingWfg filtered by the soort_codering column
 * @method GsInteractiesOmschrijvingCoderingWfg findOneByWfgcode(string $wfgcode) Return the first GsInteractiesOmschrijvingCoderingWfg filtered by the wfgcode column
 * @method GsInteractiesOmschrijvingCoderingWfg findOneByRegelnummer(int $regelnummer) Return the first GsInteractiesOmschrijvingCoderingWfg filtered by the regelnummer column
 * @method GsInteractiesOmschrijvingCoderingWfg findOneByTekstueleOmschrijving(string $tekstuele_omschrijving) Return the first GsInteractiesOmschrijvingCoderingWfg filtered by the tekstuele_omschrijving column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsInteractiesOmschrijvingCoderingWfg objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsInteractiesOmschrijvingCoderingWfg objects filtered by the mutatiekode column
 * @method array findBySoortCodering(int $soort_codering) Return GsInteractiesOmschrijvingCoderingWfg objects filtered by the soort_codering column
 * @method array findByWfgcode(string $wfgcode) Return GsInteractiesOmschrijvingCoderingWfg objects filtered by the wfgcode column
 * @method array findByRegelnummer(int $regelnummer) Return GsInteractiesOmschrijvingCoderingWfg objects filtered by the regelnummer column
 * @method array findByTekstueleOmschrijving(string $tekstuele_omschrijving) Return GsInteractiesOmschrijvingCoderingWfg objects filtered by the tekstuele_omschrijving column
 */
abstract class BaseGsInteractiesOmschrijvingCoderingWfgQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsInteractiesOmschrijvingCoderingWfgQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsInteractiesOmschrijvingCoderingWfg';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsInteractiesOmschrijvingCoderingWfgQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsInteractiesOmschrijvingCoderingWfgQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsInteractiesOmschrijvingCoderingWfgQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsInteractiesOmschrijvingCoderingWfgQuery) {
            return $criteria;
        }
        $query = new GsInteractiesOmschrijvingCoderingWfgQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$soort_codering, $wfgcode, $regelnummer]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsInteractiesOmschrijvingCoderingWfg|GsInteractiesOmschrijvingCoderingWfg[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsInteractiesOmschrijvingCoderingWfgPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsInteractiesOmschrijvingCoderingWfgPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsInteractiesOmschrijvingCoderingWfg A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `soort_codering`, `wfgcode`, `regelnummer`, `tekstuele_omschrijving` FROM `gs_interacties_omschrijving_codering_wfg` WHERE `soort_codering` = :p0 AND `wfgcode` = :p1 AND `regelnummer` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsInteractiesOmschrijvingCoderingWfg();
            $obj->hydrate($row);
            GsInteractiesOmschrijvingCoderingWfgPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return GsInteractiesOmschrijvingCoderingWfg|GsInteractiesOmschrijvingCoderingWfg[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsInteractiesOmschrijvingCoderingWfg[]|mixed the list of results, formatted by the current formatter
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
     * @return GsInteractiesOmschrijvingCoderingWfgQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsInteractiesOmschrijvingCoderingWfgPeer::SOORT_CODERING, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsInteractiesOmschrijvingCoderingWfgPeer::WFGCODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsInteractiesOmschrijvingCoderingWfgPeer::REGELNUMMER, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsInteractiesOmschrijvingCoderingWfgQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsInteractiesOmschrijvingCoderingWfgPeer::SOORT_CODERING, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsInteractiesOmschrijvingCoderingWfgPeer::WFGCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsInteractiesOmschrijvingCoderingWfgPeer::REGELNUMMER, $key[2], Criteria::EQUAL);
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
     * @return GsInteractiesOmschrijvingCoderingWfgQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsInteractiesOmschrijvingCoderingWfgPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsInteractiesOmschrijvingCoderingWfgPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesOmschrijvingCoderingWfgPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsInteractiesOmschrijvingCoderingWfgQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsInteractiesOmschrijvingCoderingWfgPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsInteractiesOmschrijvingCoderingWfgPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesOmschrijvingCoderingWfgPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the soort_codering column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortCodering(1234); // WHERE soort_codering = 1234
     * $query->filterBySoortCodering(array(12, 34)); // WHERE soort_codering IN (12, 34)
     * $query->filterBySoortCodering(array('min' => 12)); // WHERE soort_codering >= 12
     * $query->filterBySoortCodering(array('max' => 12)); // WHERE soort_codering <= 12
     * </code>
     *
     * @param     mixed $soortCodering The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesOmschrijvingCoderingWfgQuery The current query, for fluid interface
     */
    public function filterBySoortCodering($soortCodering = null, $comparison = null)
    {
        if (is_array($soortCodering)) {
            $useMinMax = false;
            if (isset($soortCodering['min'])) {
                $this->addUsingAlias(GsInteractiesOmschrijvingCoderingWfgPeer::SOORT_CODERING, $soortCodering['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortCodering['max'])) {
                $this->addUsingAlias(GsInteractiesOmschrijvingCoderingWfgPeer::SOORT_CODERING, $soortCodering['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesOmschrijvingCoderingWfgPeer::SOORT_CODERING, $soortCodering, $comparison);
    }

    /**
     * Filter the query on the wfgcode column
     *
     * Example usage:
     * <code>
     * $query->filterByWfgcode('fooValue');   // WHERE wfgcode = 'fooValue'
     * $query->filterByWfgcode('%fooValue%'); // WHERE wfgcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $wfgcode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesOmschrijvingCoderingWfgQuery The current query, for fluid interface
     */
    public function filterByWfgcode($wfgcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($wfgcode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $wfgcode)) {
                $wfgcode = str_replace('*', '%', $wfgcode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsInteractiesOmschrijvingCoderingWfgPeer::WFGCODE, $wfgcode, $comparison);
    }

    /**
     * Filter the query on the regelnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByRegelnummer(1234); // WHERE regelnummer = 1234
     * $query->filterByRegelnummer(array(12, 34)); // WHERE regelnummer IN (12, 34)
     * $query->filterByRegelnummer(array('min' => 12)); // WHERE regelnummer >= 12
     * $query->filterByRegelnummer(array('max' => 12)); // WHERE regelnummer <= 12
     * </code>
     *
     * @param     mixed $regelnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesOmschrijvingCoderingWfgQuery The current query, for fluid interface
     */
    public function filterByRegelnummer($regelnummer = null, $comparison = null)
    {
        if (is_array($regelnummer)) {
            $useMinMax = false;
            if (isset($regelnummer['min'])) {
                $this->addUsingAlias(GsInteractiesOmschrijvingCoderingWfgPeer::REGELNUMMER, $regelnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($regelnummer['max'])) {
                $this->addUsingAlias(GsInteractiesOmschrijvingCoderingWfgPeer::REGELNUMMER, $regelnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesOmschrijvingCoderingWfgPeer::REGELNUMMER, $regelnummer, $comparison);
    }

    /**
     * Filter the query on the tekstuele_omschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstueleOmschrijving('fooValue');   // WHERE tekstuele_omschrijving = 'fooValue'
     * $query->filterByTekstueleOmschrijving('%fooValue%'); // WHERE tekstuele_omschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tekstueleOmschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesOmschrijvingCoderingWfgQuery The current query, for fluid interface
     */
    public function filterByTekstueleOmschrijving($tekstueleOmschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tekstueleOmschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tekstueleOmschrijving)) {
                $tekstueleOmschrijving = str_replace('*', '%', $tekstueleOmschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsInteractiesOmschrijvingCoderingWfgPeer::TEKSTUELE_OMSCHRIJVING, $tekstueleOmschrijving, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsInteractiesOmschrijvingCoderingWfg $gsInteractiesOmschrijvingCoderingWfg Object to remove from the list of results
     *
     * @return GsInteractiesOmschrijvingCoderingWfgQuery The current query, for fluid interface
     */
    public function prune($gsInteractiesOmschrijvingCoderingWfg = null)
    {
        if ($gsInteractiesOmschrijvingCoderingWfg) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsInteractiesOmschrijvingCoderingWfgPeer::SOORT_CODERING), $gsInteractiesOmschrijvingCoderingWfg->getSoortCodering(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsInteractiesOmschrijvingCoderingWfgPeer::WFGCODE), $gsInteractiesOmschrijvingCoderingWfg->getWfgcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsInteractiesOmschrijvingCoderingWfgPeer::REGELNUMMER), $gsInteractiesOmschrijvingCoderingWfg->getRegelnummer(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
