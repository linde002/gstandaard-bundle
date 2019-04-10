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
use PharmaIntelligence\GstandaardBundle\Model\GsRelatiesTussenThesaurusitemnummers;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatiesTussenThesaurusitemnummersPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatiesTussenThesaurusitemnummersQuery;

/**
 * @method GsRelatiesTussenThesaurusitemnummersQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsRelatiesTussenThesaurusitemnummersQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsRelatiesTussenThesaurusitemnummersQuery orderByThesaurusRelatienummer($order = Criteria::ASC) Order by the thesaurus_relatienummer column
 * @method GsRelatiesTussenThesaurusitemnummersQuery orderByThesaurusnummerIn($order = Criteria::ASC) Order by the thesaurusnummer_in column
 * @method GsRelatiesTussenThesaurusitemnummersQuery orderByThesaurusnummerUit($order = Criteria::ASC) Order by the thesaurusnummer_uit column
 * @method GsRelatiesTussenThesaurusitemnummersQuery orderByThesaurusItemnummerIn($order = Criteria::ASC) Order by the thesaurus_itemnummer_in column
 * @method GsRelatiesTussenThesaurusitemnummersQuery orderByThesaurusItemnummerUit($order = Criteria::ASC) Order by the thesaurus_itemnummer_uit column
 *
 * @method GsRelatiesTussenThesaurusitemnummersQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsRelatiesTussenThesaurusitemnummersQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsRelatiesTussenThesaurusitemnummersQuery groupByThesaurusRelatienummer() Group by the thesaurus_relatienummer column
 * @method GsRelatiesTussenThesaurusitemnummersQuery groupByThesaurusnummerIn() Group by the thesaurusnummer_in column
 * @method GsRelatiesTussenThesaurusitemnummersQuery groupByThesaurusnummerUit() Group by the thesaurusnummer_uit column
 * @method GsRelatiesTussenThesaurusitemnummersQuery groupByThesaurusItemnummerIn() Group by the thesaurus_itemnummer_in column
 * @method GsRelatiesTussenThesaurusitemnummersQuery groupByThesaurusItemnummerUit() Group by the thesaurus_itemnummer_uit column
 *
 * @method GsRelatiesTussenThesaurusitemnummersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsRelatiesTussenThesaurusitemnummersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsRelatiesTussenThesaurusitemnummersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsRelatiesTussenThesaurusitemnummers findOne(PropelPDO $con = null) Return the first GsRelatiesTussenThesaurusitemnummers matching the query
 * @method GsRelatiesTussenThesaurusitemnummers findOneOrCreate(PropelPDO $con = null) Return the first GsRelatiesTussenThesaurusitemnummers matching the query, or a new GsRelatiesTussenThesaurusitemnummers object populated from the query conditions when no match is found
 *
 * @method GsRelatiesTussenThesaurusitemnummers findOneByBestandnummer(int $bestandnummer) Return the first GsRelatiesTussenThesaurusitemnummers filtered by the bestandnummer column
 * @method GsRelatiesTussenThesaurusitemnummers findOneByMutatiekode(int $mutatiekode) Return the first GsRelatiesTussenThesaurusitemnummers filtered by the mutatiekode column
 * @method GsRelatiesTussenThesaurusitemnummers findOneByThesaurusRelatienummer(int $thesaurus_relatienummer) Return the first GsRelatiesTussenThesaurusitemnummers filtered by the thesaurus_relatienummer column
 * @method GsRelatiesTussenThesaurusitemnummers findOneByThesaurusnummerIn(int $thesaurusnummer_in) Return the first GsRelatiesTussenThesaurusitemnummers filtered by the thesaurusnummer_in column
 * @method GsRelatiesTussenThesaurusitemnummers findOneByThesaurusnummerUit(int $thesaurusnummer_uit) Return the first GsRelatiesTussenThesaurusitemnummers filtered by the thesaurusnummer_uit column
 * @method GsRelatiesTussenThesaurusitemnummers findOneByThesaurusItemnummerIn(int $thesaurus_itemnummer_in) Return the first GsRelatiesTussenThesaurusitemnummers filtered by the thesaurus_itemnummer_in column
 * @method GsRelatiesTussenThesaurusitemnummers findOneByThesaurusItemnummerUit(int $thesaurus_itemnummer_uit) Return the first GsRelatiesTussenThesaurusitemnummers filtered by the thesaurus_itemnummer_uit column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsRelatiesTussenThesaurusitemnummers objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsRelatiesTussenThesaurusitemnummers objects filtered by the mutatiekode column
 * @method array findByThesaurusRelatienummer(int $thesaurus_relatienummer) Return GsRelatiesTussenThesaurusitemnummers objects filtered by the thesaurus_relatienummer column
 * @method array findByThesaurusnummerIn(int $thesaurusnummer_in) Return GsRelatiesTussenThesaurusitemnummers objects filtered by the thesaurusnummer_in column
 * @method array findByThesaurusnummerUit(int $thesaurusnummer_uit) Return GsRelatiesTussenThesaurusitemnummers objects filtered by the thesaurusnummer_uit column
 * @method array findByThesaurusItemnummerIn(int $thesaurus_itemnummer_in) Return GsRelatiesTussenThesaurusitemnummers objects filtered by the thesaurus_itemnummer_in column
 * @method array findByThesaurusItemnummerUit(int $thesaurus_itemnummer_uit) Return GsRelatiesTussenThesaurusitemnummers objects filtered by the thesaurus_itemnummer_uit column
 */
abstract class BaseGsRelatiesTussenThesaurusitemnummersQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsRelatiesTussenThesaurusitemnummersQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRelatiesTussenThesaurusitemnummers';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsRelatiesTussenThesaurusitemnummersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsRelatiesTussenThesaurusitemnummersQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsRelatiesTussenThesaurusitemnummersQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsRelatiesTussenThesaurusitemnummersQuery) {
            return $criteria;
        }
        $query = new GsRelatiesTussenThesaurusitemnummersQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56, 78, 91), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$thesaurus_relatienummer, $thesaurusnummer_in, $thesaurusnummer_uit, $thesaurus_itemnummer_in, $thesaurus_itemnummer_uit]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsRelatiesTussenThesaurusitemnummers|GsRelatiesTussenThesaurusitemnummers[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsRelatiesTussenThesaurusitemnummersPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsRelatiesTussenThesaurusitemnummersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsRelatiesTussenThesaurusitemnummers A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `thesaurus_relatienummer`, `thesaurusnummer_in`, `thesaurusnummer_uit`, `thesaurus_itemnummer_in`, `thesaurus_itemnummer_uit` FROM `gs_relaties_tussen_thesaurusitemnummers` WHERE `thesaurus_relatienummer` = :p0 AND `thesaurusnummer_in` = :p1 AND `thesaurusnummer_uit` = :p2 AND `thesaurus_itemnummer_in` = :p3 AND `thesaurus_itemnummer_uit` = :p4';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsRelatiesTussenThesaurusitemnummers();
            $obj->hydrate($row);
            GsRelatiesTussenThesaurusitemnummersPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4])));
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
     * @return GsRelatiesTussenThesaurusitemnummers|GsRelatiesTussenThesaurusitemnummers[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsRelatiesTussenThesaurusitemnummers[]|mixed the list of results, formatted by the current formatter
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
     * @return GsRelatiesTussenThesaurusitemnummersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUS_RELATIENUMMER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUSNUMMER_IN, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUSNUMMER_UIT, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUS_ITEMNUMMER_IN, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUS_ITEMNUMMER_UIT, $key[4], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsRelatiesTussenThesaurusitemnummersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUS_RELATIENUMMER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUSNUMMER_IN, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUSNUMMER_UIT, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUS_ITEMNUMMER_IN, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUS_ITEMNUMMER_UIT, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
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
     * @return GsRelatiesTussenThesaurusitemnummersQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsRelatiesTussenThesaurusitemnummersQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the thesaurus_relatienummer column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusRelatienummer(1234); // WHERE thesaurus_relatienummer = 1234
     * $query->filterByThesaurusRelatienummer(array(12, 34)); // WHERE thesaurus_relatienummer IN (12, 34)
     * $query->filterByThesaurusRelatienummer(array('min' => 12)); // WHERE thesaurus_relatienummer >= 12
     * $query->filterByThesaurusRelatienummer(array('max' => 12)); // WHERE thesaurus_relatienummer <= 12
     * </code>
     *
     * @param     mixed $thesaurusRelatienummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatiesTussenThesaurusitemnummersQuery The current query, for fluid interface
     */
    public function filterByThesaurusRelatienummer($thesaurusRelatienummer = null, $comparison = null)
    {
        if (is_array($thesaurusRelatienummer)) {
            $useMinMax = false;
            if (isset($thesaurusRelatienummer['min'])) {
                $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUS_RELATIENUMMER, $thesaurusRelatienummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusRelatienummer['max'])) {
                $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUS_RELATIENUMMER, $thesaurusRelatienummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUS_RELATIENUMMER, $thesaurusRelatienummer, $comparison);
    }

    /**
     * Filter the query on the thesaurusnummer_in column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusnummerIn(1234); // WHERE thesaurusnummer_in = 1234
     * $query->filterByThesaurusnummerIn(array(12, 34)); // WHERE thesaurusnummer_in IN (12, 34)
     * $query->filterByThesaurusnummerIn(array('min' => 12)); // WHERE thesaurusnummer_in >= 12
     * $query->filterByThesaurusnummerIn(array('max' => 12)); // WHERE thesaurusnummer_in <= 12
     * </code>
     *
     * @param     mixed $thesaurusnummerIn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatiesTussenThesaurusitemnummersQuery The current query, for fluid interface
     */
    public function filterByThesaurusnummerIn($thesaurusnummerIn = null, $comparison = null)
    {
        if (is_array($thesaurusnummerIn)) {
            $useMinMax = false;
            if (isset($thesaurusnummerIn['min'])) {
                $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUSNUMMER_IN, $thesaurusnummerIn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusnummerIn['max'])) {
                $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUSNUMMER_IN, $thesaurusnummerIn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUSNUMMER_IN, $thesaurusnummerIn, $comparison);
    }

    /**
     * Filter the query on the thesaurusnummer_uit column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusnummerUit(1234); // WHERE thesaurusnummer_uit = 1234
     * $query->filterByThesaurusnummerUit(array(12, 34)); // WHERE thesaurusnummer_uit IN (12, 34)
     * $query->filterByThesaurusnummerUit(array('min' => 12)); // WHERE thesaurusnummer_uit >= 12
     * $query->filterByThesaurusnummerUit(array('max' => 12)); // WHERE thesaurusnummer_uit <= 12
     * </code>
     *
     * @param     mixed $thesaurusnummerUit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatiesTussenThesaurusitemnummersQuery The current query, for fluid interface
     */
    public function filterByThesaurusnummerUit($thesaurusnummerUit = null, $comparison = null)
    {
        if (is_array($thesaurusnummerUit)) {
            $useMinMax = false;
            if (isset($thesaurusnummerUit['min'])) {
                $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUSNUMMER_UIT, $thesaurusnummerUit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusnummerUit['max'])) {
                $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUSNUMMER_UIT, $thesaurusnummerUit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUSNUMMER_UIT, $thesaurusnummerUit, $comparison);
    }

    /**
     * Filter the query on the thesaurus_itemnummer_in column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusItemnummerIn(1234); // WHERE thesaurus_itemnummer_in = 1234
     * $query->filterByThesaurusItemnummerIn(array(12, 34)); // WHERE thesaurus_itemnummer_in IN (12, 34)
     * $query->filterByThesaurusItemnummerIn(array('min' => 12)); // WHERE thesaurus_itemnummer_in >= 12
     * $query->filterByThesaurusItemnummerIn(array('max' => 12)); // WHERE thesaurus_itemnummer_in <= 12
     * </code>
     *
     * @param     mixed $thesaurusItemnummerIn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatiesTussenThesaurusitemnummersQuery The current query, for fluid interface
     */
    public function filterByThesaurusItemnummerIn($thesaurusItemnummerIn = null, $comparison = null)
    {
        if (is_array($thesaurusItemnummerIn)) {
            $useMinMax = false;
            if (isset($thesaurusItemnummerIn['min'])) {
                $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUS_ITEMNUMMER_IN, $thesaurusItemnummerIn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusItemnummerIn['max'])) {
                $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUS_ITEMNUMMER_IN, $thesaurusItemnummerIn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUS_ITEMNUMMER_IN, $thesaurusItemnummerIn, $comparison);
    }

    /**
     * Filter the query on the thesaurus_itemnummer_uit column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusItemnummerUit(1234); // WHERE thesaurus_itemnummer_uit = 1234
     * $query->filterByThesaurusItemnummerUit(array(12, 34)); // WHERE thesaurus_itemnummer_uit IN (12, 34)
     * $query->filterByThesaurusItemnummerUit(array('min' => 12)); // WHERE thesaurus_itemnummer_uit >= 12
     * $query->filterByThesaurusItemnummerUit(array('max' => 12)); // WHERE thesaurus_itemnummer_uit <= 12
     * </code>
     *
     * @param     mixed $thesaurusItemnummerUit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatiesTussenThesaurusitemnummersQuery The current query, for fluid interface
     */
    public function filterByThesaurusItemnummerUit($thesaurusItemnummerUit = null, $comparison = null)
    {
        if (is_array($thesaurusItemnummerUit)) {
            $useMinMax = false;
            if (isset($thesaurusItemnummerUit['min'])) {
                $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUS_ITEMNUMMER_UIT, $thesaurusItemnummerUit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusItemnummerUit['max'])) {
                $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUS_ITEMNUMMER_UIT, $thesaurusItemnummerUit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUS_ITEMNUMMER_UIT, $thesaurusItemnummerUit, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsRelatiesTussenThesaurusitemnummers $gsRelatiesTussenThesaurusitemnummers Object to remove from the list of results
     *
     * @return GsRelatiesTussenThesaurusitemnummersQuery The current query, for fluid interface
     */
    public function prune($gsRelatiesTussenThesaurusitemnummers = null)
    {
        if ($gsRelatiesTussenThesaurusitemnummers) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUS_RELATIENUMMER), $gsRelatiesTussenThesaurusitemnummers->getThesaurusRelatienummer(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUSNUMMER_IN), $gsRelatiesTussenThesaurusitemnummers->getThesaurusnummerIn(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUSNUMMER_UIT), $gsRelatiesTussenThesaurusitemnummers->getThesaurusnummerUit(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUS_ITEMNUMMER_IN), $gsRelatiesTussenThesaurusitemnummers->getThesaurusItemnummerIn(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(GsRelatiesTussenThesaurusitemnummersPeer::THESAURUS_ITEMNUMMER_UIT), $gsRelatiesTussenThesaurusitemnummers->getThesaurusItemnummerUit(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
