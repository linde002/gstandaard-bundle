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
use PharmaIntelligence\GstandaardBundle\Model\GsEenheden;
use PharmaIntelligence\GstandaardBundle\Model\GsEenhedenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsEenhedenQuery;

/**
 * @method GsEenhedenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsEenhedenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsEenhedenQuery orderByThesaurusVerwijzingSoortCode($order = Criteria::ASC) Order by the thesaurus_verwijzing_soort_code column
 * @method GsEenhedenQuery orderBySoortCode($order = Criteria::ASC) Order by the soort_code column
 * @method GsEenhedenQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method GsEenhedenQuery orderByHoeveelheid($order = Criteria::ASC) Order by the hoeveelheid column
 * @method GsEenhedenQuery orderByHpkeenheidThesaurusnummer($order = Criteria::ASC) Order by the hpkeenheid_thesaurusnummer column
 * @method GsEenhedenQuery orderByEenheid($order = Criteria::ASC) Order by the eenheid column
 *
 * @method GsEenhedenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsEenhedenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsEenhedenQuery groupByThesaurusVerwijzingSoortCode() Group by the thesaurus_verwijzing_soort_code column
 * @method GsEenhedenQuery groupBySoortCode() Group by the soort_code column
 * @method GsEenhedenQuery groupByCode() Group by the code column
 * @method GsEenhedenQuery groupByHoeveelheid() Group by the hoeveelheid column
 * @method GsEenhedenQuery groupByHpkeenheidThesaurusnummer() Group by the hpkeenheid_thesaurusnummer column
 * @method GsEenhedenQuery groupByEenheid() Group by the eenheid column
 *
 * @method GsEenhedenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsEenhedenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsEenhedenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsEenheden findOne(PropelPDO $con = null) Return the first GsEenheden matching the query
 * @method GsEenheden findOneOrCreate(PropelPDO $con = null) Return the first GsEenheden matching the query, or a new GsEenheden object populated from the query conditions when no match is found
 *
 * @method GsEenheden findOneByBestandnummer(int $bestandnummer) Return the first GsEenheden filtered by the bestandnummer column
 * @method GsEenheden findOneByMutatiekode(int $mutatiekode) Return the first GsEenheden filtered by the mutatiekode column
 * @method GsEenheden findOneByThesaurusVerwijzingSoortCode(int $thesaurus_verwijzing_soort_code) Return the first GsEenheden filtered by the thesaurus_verwijzing_soort_code column
 * @method GsEenheden findOneBySoortCode(int $soort_code) Return the first GsEenheden filtered by the soort_code column
 * @method GsEenheden findOneByCode(int $code) Return the first GsEenheden filtered by the code column
 * @method GsEenheden findOneByHoeveelheid(string $hoeveelheid) Return the first GsEenheden filtered by the hoeveelheid column
 * @method GsEenheden findOneByHpkeenheidThesaurusnummer(int $hpkeenheid_thesaurusnummer) Return the first GsEenheden filtered by the hpkeenheid_thesaurusnummer column
 * @method GsEenheden findOneByEenheid(int $eenheid) Return the first GsEenheden filtered by the eenheid column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsEenheden objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsEenheden objects filtered by the mutatiekode column
 * @method array findByThesaurusVerwijzingSoortCode(int $thesaurus_verwijzing_soort_code) Return GsEenheden objects filtered by the thesaurus_verwijzing_soort_code column
 * @method array findBySoortCode(int $soort_code) Return GsEenheden objects filtered by the soort_code column
 * @method array findByCode(int $code) Return GsEenheden objects filtered by the code column
 * @method array findByHoeveelheid(string $hoeveelheid) Return GsEenheden objects filtered by the hoeveelheid column
 * @method array findByHpkeenheidThesaurusnummer(int $hpkeenheid_thesaurusnummer) Return GsEenheden objects filtered by the hpkeenheid_thesaurusnummer column
 * @method array findByEenheid(int $eenheid) Return GsEenheden objects filtered by the eenheid column
 */
abstract class BaseGsEenhedenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsEenhedenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsEenheden';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsEenhedenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsEenhedenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsEenhedenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsEenhedenQuery) {
            return $criteria;
        }
        $query = new GsEenhedenQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56, 78), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$soort_code, $code, $hoeveelheid, $eenheid]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsEenheden|GsEenheden[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsEenhedenPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsEenhedenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsEenheden A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `thesaurus_verwijzing_soort_code`, `soort_code`, `code`, `hoeveelheid`, `hpkeenheid_thesaurusnummer`, `eenheid` FROM `gs_eenheden` WHERE `soort_code` = :p0 AND `code` = :p1 AND `hoeveelheid` = :p2 AND `eenheid` = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsEenheden();
            $obj->hydrate($row);
            GsEenhedenPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3])));
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
     * @return GsEenheden|GsEenheden[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsEenheden[]|mixed the list of results, formatted by the current formatter
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
     * @return GsEenhedenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsEenhedenPeer::SOORT_CODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsEenhedenPeer::CODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsEenhedenPeer::HOEVEELHEID, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(GsEenhedenPeer::EENHEID, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsEenhedenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsEenhedenPeer::SOORT_CODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsEenhedenPeer::CODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsEenhedenPeer::HOEVEELHEID, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(GsEenhedenPeer::EENHEID, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
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
     * @return GsEenhedenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsEenhedenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsEenhedenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEenhedenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsEenhedenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsEenhedenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsEenhedenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEenhedenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the thesaurus_verwijzing_soort_code column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusVerwijzingSoortCode(1234); // WHERE thesaurus_verwijzing_soort_code = 1234
     * $query->filterByThesaurusVerwijzingSoortCode(array(12, 34)); // WHERE thesaurus_verwijzing_soort_code IN (12, 34)
     * $query->filterByThesaurusVerwijzingSoortCode(array('min' => 12)); // WHERE thesaurus_verwijzing_soort_code >= 12
     * $query->filterByThesaurusVerwijzingSoortCode(array('max' => 12)); // WHERE thesaurus_verwijzing_soort_code <= 12
     * </code>
     *
     * @param     mixed $thesaurusVerwijzingSoortCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsEenhedenQuery The current query, for fluid interface
     */
    public function filterByThesaurusVerwijzingSoortCode($thesaurusVerwijzingSoortCode = null, $comparison = null)
    {
        if (is_array($thesaurusVerwijzingSoortCode)) {
            $useMinMax = false;
            if (isset($thesaurusVerwijzingSoortCode['min'])) {
                $this->addUsingAlias(GsEenhedenPeer::THESAURUS_VERWIJZING_SOORT_CODE, $thesaurusVerwijzingSoortCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusVerwijzingSoortCode['max'])) {
                $this->addUsingAlias(GsEenhedenPeer::THESAURUS_VERWIJZING_SOORT_CODE, $thesaurusVerwijzingSoortCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEenhedenPeer::THESAURUS_VERWIJZING_SOORT_CODE, $thesaurusVerwijzingSoortCode, $comparison);
    }

    /**
     * Filter the query on the soort_code column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortCode(1234); // WHERE soort_code = 1234
     * $query->filterBySoortCode(array(12, 34)); // WHERE soort_code IN (12, 34)
     * $query->filterBySoortCode(array('min' => 12)); // WHERE soort_code >= 12
     * $query->filterBySoortCode(array('max' => 12)); // WHERE soort_code <= 12
     * </code>
     *
     * @param     mixed $soortCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsEenhedenQuery The current query, for fluid interface
     */
    public function filterBySoortCode($soortCode = null, $comparison = null)
    {
        if (is_array($soortCode)) {
            $useMinMax = false;
            if (isset($soortCode['min'])) {
                $this->addUsingAlias(GsEenhedenPeer::SOORT_CODE, $soortCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortCode['max'])) {
                $this->addUsingAlias(GsEenhedenPeer::SOORT_CODE, $soortCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEenhedenPeer::SOORT_CODE, $soortCode, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode(1234); // WHERE code = 1234
     * $query->filterByCode(array(12, 34)); // WHERE code IN (12, 34)
     * $query->filterByCode(array('min' => 12)); // WHERE code >= 12
     * $query->filterByCode(array('max' => 12)); // WHERE code <= 12
     * </code>
     *
     * @param     mixed $code The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsEenhedenQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (is_array($code)) {
            $useMinMax = false;
            if (isset($code['min'])) {
                $this->addUsingAlias(GsEenhedenPeer::CODE, $code['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($code['max'])) {
                $this->addUsingAlias(GsEenhedenPeer::CODE, $code['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEenhedenPeer::CODE, $code, $comparison);
    }

    /**
     * Filter the query on the hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByHoeveelheid(1234); // WHERE hoeveelheid = 1234
     * $query->filterByHoeveelheid(array(12, 34)); // WHERE hoeveelheid IN (12, 34)
     * $query->filterByHoeveelheid(array('min' => 12)); // WHERE hoeveelheid >= 12
     * $query->filterByHoeveelheid(array('max' => 12)); // WHERE hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $hoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsEenhedenQuery The current query, for fluid interface
     */
    public function filterByHoeveelheid($hoeveelheid = null, $comparison = null)
    {
        if (is_array($hoeveelheid)) {
            $useMinMax = false;
            if (isset($hoeveelheid['min'])) {
                $this->addUsingAlias(GsEenhedenPeer::HOEVEELHEID, $hoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hoeveelheid['max'])) {
                $this->addUsingAlias(GsEenhedenPeer::HOEVEELHEID, $hoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEenhedenPeer::HOEVEELHEID, $hoeveelheid, $comparison);
    }

    /**
     * Filter the query on the hpkeenheid_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByHpkeenheidThesaurusnummer(1234); // WHERE hpkeenheid_thesaurusnummer = 1234
     * $query->filterByHpkeenheidThesaurusnummer(array(12, 34)); // WHERE hpkeenheid_thesaurusnummer IN (12, 34)
     * $query->filterByHpkeenheidThesaurusnummer(array('min' => 12)); // WHERE hpkeenheid_thesaurusnummer >= 12
     * $query->filterByHpkeenheidThesaurusnummer(array('max' => 12)); // WHERE hpkeenheid_thesaurusnummer <= 12
     * </code>
     *
     * @param     mixed $hpkeenheidThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsEenhedenQuery The current query, for fluid interface
     */
    public function filterByHpkeenheidThesaurusnummer($hpkeenheidThesaurusnummer = null, $comparison = null)
    {
        if (is_array($hpkeenheidThesaurusnummer)) {
            $useMinMax = false;
            if (isset($hpkeenheidThesaurusnummer['min'])) {
                $this->addUsingAlias(GsEenhedenPeer::HPKEENHEID_THESAURUSNUMMER, $hpkeenheidThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hpkeenheidThesaurusnummer['max'])) {
                $this->addUsingAlias(GsEenhedenPeer::HPKEENHEID_THESAURUSNUMMER, $hpkeenheidThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEenhedenPeer::HPKEENHEID_THESAURUSNUMMER, $hpkeenheidThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByEenheid(1234); // WHERE eenheid = 1234
     * $query->filterByEenheid(array(12, 34)); // WHERE eenheid IN (12, 34)
     * $query->filterByEenheid(array('min' => 12)); // WHERE eenheid >= 12
     * $query->filterByEenheid(array('max' => 12)); // WHERE eenheid <= 12
     * </code>
     *
     * @param     mixed $eenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsEenhedenQuery The current query, for fluid interface
     */
    public function filterByEenheid($eenheid = null, $comparison = null)
    {
        if (is_array($eenheid)) {
            $useMinMax = false;
            if (isset($eenheid['min'])) {
                $this->addUsingAlias(GsEenhedenPeer::EENHEID, $eenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eenheid['max'])) {
                $this->addUsingAlias(GsEenhedenPeer::EENHEID, $eenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEenhedenPeer::EENHEID, $eenheid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsEenheden $gsEenheden Object to remove from the list of results
     *
     * @return GsEenhedenQuery The current query, for fluid interface
     */
    public function prune($gsEenheden = null)
    {
        if ($gsEenheden) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsEenhedenPeer::SOORT_CODE), $gsEenheden->getSoortCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsEenhedenPeer::CODE), $gsEenheden->getCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsEenhedenPeer::HOEVEELHEID), $gsEenheden->getHoeveelheid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(GsEenhedenPeer::EENHEID), $gsEenheden->getEenheid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
