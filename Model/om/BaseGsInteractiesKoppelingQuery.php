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
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesKoppeling;
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesKoppelingPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesKoppelingQuery;

/**
 * @method GsInteractiesKoppelingQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsInteractiesKoppelingQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsInteractiesKoppelingQuery orderByGpkCodeInteractiewaarschuwingA($order = Criteria::ASC) Order by the gpk_code_interactiewaarschuwing_a column
 * @method GsInteractiesKoppelingQuery orderByGpkCodeInteractiewaarschuwingB($order = Criteria::ASC) Order by the gpk_code_interactiewaarschuwing_b column
 * @method GsInteractiesKoppelingQuery orderByInteractiewaarschuwingCode($order = Criteria::ASC) Order by the interactiewaarschuwing_code column
 * @method GsInteractiesKoppelingQuery orderByRelevantePeriodeNaStakenVanAInDagen($order = Criteria::ASC) Order by the relevante_periode_na_staken_van_a_in_dagen column
 * @method GsInteractiesKoppelingQuery orderByRelevantePeriodeNaStakenVanBInDagen($order = Criteria::ASC) Order by the relevante_periode_na_staken_van_b_in_dagen column
 * @method GsInteractiesKoppelingQuery orderByRelevantIndienAWordtToegevoegdAanB($order = Criteria::ASC) Order by the relevant_indien_a_wordt_toegevoegd_aan_b column
 * @method GsInteractiesKoppelingQuery orderByRelevantIndienBWordtToegevoegdAanA($order = Criteria::ASC) Order by the relevant_indien_b_wordt_toegevoegd_aan_a column
 *
 * @method GsInteractiesKoppelingQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsInteractiesKoppelingQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsInteractiesKoppelingQuery groupByGpkCodeInteractiewaarschuwingA() Group by the gpk_code_interactiewaarschuwing_a column
 * @method GsInteractiesKoppelingQuery groupByGpkCodeInteractiewaarschuwingB() Group by the gpk_code_interactiewaarschuwing_b column
 * @method GsInteractiesKoppelingQuery groupByInteractiewaarschuwingCode() Group by the interactiewaarschuwing_code column
 * @method GsInteractiesKoppelingQuery groupByRelevantePeriodeNaStakenVanAInDagen() Group by the relevante_periode_na_staken_van_a_in_dagen column
 * @method GsInteractiesKoppelingQuery groupByRelevantePeriodeNaStakenVanBInDagen() Group by the relevante_periode_na_staken_van_b_in_dagen column
 * @method GsInteractiesKoppelingQuery groupByRelevantIndienAWordtToegevoegdAanB() Group by the relevant_indien_a_wordt_toegevoegd_aan_b column
 * @method GsInteractiesKoppelingQuery groupByRelevantIndienBWordtToegevoegdAanA() Group by the relevant_indien_b_wordt_toegevoegd_aan_a column
 *
 * @method GsInteractiesKoppelingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsInteractiesKoppelingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsInteractiesKoppelingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsInteractiesKoppeling findOne(PropelPDO $con = null) Return the first GsInteractiesKoppeling matching the query
 * @method GsInteractiesKoppeling findOneOrCreate(PropelPDO $con = null) Return the first GsInteractiesKoppeling matching the query, or a new GsInteractiesKoppeling object populated from the query conditions when no match is found
 *
 * @method GsInteractiesKoppeling findOneByBestandnummer(int $bestandnummer) Return the first GsInteractiesKoppeling filtered by the bestandnummer column
 * @method GsInteractiesKoppeling findOneByMutatiekode(int $mutatiekode) Return the first GsInteractiesKoppeling filtered by the mutatiekode column
 * @method GsInteractiesKoppeling findOneByGpkCodeInteractiewaarschuwingA(int $gpk_code_interactiewaarschuwing_a) Return the first GsInteractiesKoppeling filtered by the gpk_code_interactiewaarschuwing_a column
 * @method GsInteractiesKoppeling findOneByGpkCodeInteractiewaarschuwingB(int $gpk_code_interactiewaarschuwing_b) Return the first GsInteractiesKoppeling filtered by the gpk_code_interactiewaarschuwing_b column
 * @method GsInteractiesKoppeling findOneByInteractiewaarschuwingCode(int $interactiewaarschuwing_code) Return the first GsInteractiesKoppeling filtered by the interactiewaarschuwing_code column
 * @method GsInteractiesKoppeling findOneByRelevantePeriodeNaStakenVanAInDagen(int $relevante_periode_na_staken_van_a_in_dagen) Return the first GsInteractiesKoppeling filtered by the relevante_periode_na_staken_van_a_in_dagen column
 * @method GsInteractiesKoppeling findOneByRelevantePeriodeNaStakenVanBInDagen(int $relevante_periode_na_staken_van_b_in_dagen) Return the first GsInteractiesKoppeling filtered by the relevante_periode_na_staken_van_b_in_dagen column
 * @method GsInteractiesKoppeling findOneByRelevantIndienAWordtToegevoegdAanB(int $relevant_indien_a_wordt_toegevoegd_aan_b) Return the first GsInteractiesKoppeling filtered by the relevant_indien_a_wordt_toegevoegd_aan_b column
 * @method GsInteractiesKoppeling findOneByRelevantIndienBWordtToegevoegdAanA(int $relevant_indien_b_wordt_toegevoegd_aan_a) Return the first GsInteractiesKoppeling filtered by the relevant_indien_b_wordt_toegevoegd_aan_a column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsInteractiesKoppeling objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsInteractiesKoppeling objects filtered by the mutatiekode column
 * @method array findByGpkCodeInteractiewaarschuwingA(int $gpk_code_interactiewaarschuwing_a) Return GsInteractiesKoppeling objects filtered by the gpk_code_interactiewaarschuwing_a column
 * @method array findByGpkCodeInteractiewaarschuwingB(int $gpk_code_interactiewaarschuwing_b) Return GsInteractiesKoppeling objects filtered by the gpk_code_interactiewaarschuwing_b column
 * @method array findByInteractiewaarschuwingCode(int $interactiewaarschuwing_code) Return GsInteractiesKoppeling objects filtered by the interactiewaarschuwing_code column
 * @method array findByRelevantePeriodeNaStakenVanAInDagen(int $relevante_periode_na_staken_van_a_in_dagen) Return GsInteractiesKoppeling objects filtered by the relevante_periode_na_staken_van_a_in_dagen column
 * @method array findByRelevantePeriodeNaStakenVanBInDagen(int $relevante_periode_na_staken_van_b_in_dagen) Return GsInteractiesKoppeling objects filtered by the relevante_periode_na_staken_van_b_in_dagen column
 * @method array findByRelevantIndienAWordtToegevoegdAanB(int $relevant_indien_a_wordt_toegevoegd_aan_b) Return GsInteractiesKoppeling objects filtered by the relevant_indien_a_wordt_toegevoegd_aan_b column
 * @method array findByRelevantIndienBWordtToegevoegdAanA(int $relevant_indien_b_wordt_toegevoegd_aan_a) Return GsInteractiesKoppeling objects filtered by the relevant_indien_b_wordt_toegevoegd_aan_a column
 */
abstract class BaseGsInteractiesKoppelingQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsInteractiesKoppelingQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsInteractiesKoppeling';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsInteractiesKoppelingQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsInteractiesKoppelingQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsInteractiesKoppelingQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsInteractiesKoppelingQuery) {
            return $criteria;
        }
        $query = new GsInteractiesKoppelingQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$gpk_code_interactiewaarschuwing_a, $gpk_code_interactiewaarschuwing_b, $interactiewaarschuwing_code]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsInteractiesKoppeling|GsInteractiesKoppeling[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsInteractiesKoppelingPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsInteractiesKoppelingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsInteractiesKoppeling A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `gpk_code_interactiewaarschuwing_a`, `gpk_code_interactiewaarschuwing_b`, `interactiewaarschuwing_code`, `relevante_periode_na_staken_van_a_in_dagen`, `relevante_periode_na_staken_van_b_in_dagen`, `relevant_indien_a_wordt_toegevoegd_aan_b`, `relevant_indien_b_wordt_toegevoegd_aan_a` FROM `gs_interacties_koppeling` WHERE `gpk_code_interactiewaarschuwing_a` = :p0 AND `gpk_code_interactiewaarschuwing_b` = :p1 AND `interactiewaarschuwing_code` = :p2';
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
            $obj = new GsInteractiesKoppeling();
            $obj->hydrate($row);
            GsInteractiesKoppelingPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return GsInteractiesKoppeling|GsInteractiesKoppeling[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsInteractiesKoppeling[]|mixed the list of results, formatted by the current formatter
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
     * @return GsInteractiesKoppelingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_A, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_B, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsInteractiesKoppelingPeer::INTERACTIEWAARSCHUWING_CODE, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsInteractiesKoppelingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_A, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_B, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsInteractiesKoppelingPeer::INTERACTIEWAARSCHUWING_CODE, $key[2], Criteria::EQUAL);
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
     * @return GsInteractiesKoppelingQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsInteractiesKoppelingPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsInteractiesKoppelingPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesKoppelingPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsInteractiesKoppelingQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsInteractiesKoppelingPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsInteractiesKoppelingPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesKoppelingPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the gpk_code_interactiewaarschuwing_a column
     *
     * Example usage:
     * <code>
     * $query->filterByGpkCodeInteractiewaarschuwingA(1234); // WHERE gpk_code_interactiewaarschuwing_a = 1234
     * $query->filterByGpkCodeInteractiewaarschuwingA(array(12, 34)); // WHERE gpk_code_interactiewaarschuwing_a IN (12, 34)
     * $query->filterByGpkCodeInteractiewaarschuwingA(array('min' => 12)); // WHERE gpk_code_interactiewaarschuwing_a >= 12
     * $query->filterByGpkCodeInteractiewaarschuwingA(array('max' => 12)); // WHERE gpk_code_interactiewaarschuwing_a <= 12
     * </code>
     *
     * @param     mixed $gpkCodeInteractiewaarschuwingA The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesKoppelingQuery The current query, for fluid interface
     */
    public function filterByGpkCodeInteractiewaarschuwingA($gpkCodeInteractiewaarschuwingA = null, $comparison = null)
    {
        if (is_array($gpkCodeInteractiewaarschuwingA)) {
            $useMinMax = false;
            if (isset($gpkCodeInteractiewaarschuwingA['min'])) {
                $this->addUsingAlias(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_A, $gpkCodeInteractiewaarschuwingA['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gpkCodeInteractiewaarschuwingA['max'])) {
                $this->addUsingAlias(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_A, $gpkCodeInteractiewaarschuwingA['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_A, $gpkCodeInteractiewaarschuwingA, $comparison);
    }

    /**
     * Filter the query on the gpk_code_interactiewaarschuwing_b column
     *
     * Example usage:
     * <code>
     * $query->filterByGpkCodeInteractiewaarschuwingB(1234); // WHERE gpk_code_interactiewaarschuwing_b = 1234
     * $query->filterByGpkCodeInteractiewaarschuwingB(array(12, 34)); // WHERE gpk_code_interactiewaarschuwing_b IN (12, 34)
     * $query->filterByGpkCodeInteractiewaarschuwingB(array('min' => 12)); // WHERE gpk_code_interactiewaarschuwing_b >= 12
     * $query->filterByGpkCodeInteractiewaarschuwingB(array('max' => 12)); // WHERE gpk_code_interactiewaarschuwing_b <= 12
     * </code>
     *
     * @param     mixed $gpkCodeInteractiewaarschuwingB The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesKoppelingQuery The current query, for fluid interface
     */
    public function filterByGpkCodeInteractiewaarschuwingB($gpkCodeInteractiewaarschuwingB = null, $comparison = null)
    {
        if (is_array($gpkCodeInteractiewaarschuwingB)) {
            $useMinMax = false;
            if (isset($gpkCodeInteractiewaarschuwingB['min'])) {
                $this->addUsingAlias(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_B, $gpkCodeInteractiewaarschuwingB['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gpkCodeInteractiewaarschuwingB['max'])) {
                $this->addUsingAlias(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_B, $gpkCodeInteractiewaarschuwingB['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_B, $gpkCodeInteractiewaarschuwingB, $comparison);
    }

    /**
     * Filter the query on the interactiewaarschuwing_code column
     *
     * Example usage:
     * <code>
     * $query->filterByInteractiewaarschuwingCode(1234); // WHERE interactiewaarschuwing_code = 1234
     * $query->filterByInteractiewaarschuwingCode(array(12, 34)); // WHERE interactiewaarschuwing_code IN (12, 34)
     * $query->filterByInteractiewaarschuwingCode(array('min' => 12)); // WHERE interactiewaarschuwing_code >= 12
     * $query->filterByInteractiewaarschuwingCode(array('max' => 12)); // WHERE interactiewaarschuwing_code <= 12
     * </code>
     *
     * @param     mixed $interactiewaarschuwingCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesKoppelingQuery The current query, for fluid interface
     */
    public function filterByInteractiewaarschuwingCode($interactiewaarschuwingCode = null, $comparison = null)
    {
        if (is_array($interactiewaarschuwingCode)) {
            $useMinMax = false;
            if (isset($interactiewaarschuwingCode['min'])) {
                $this->addUsingAlias(GsInteractiesKoppelingPeer::INTERACTIEWAARSCHUWING_CODE, $interactiewaarschuwingCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($interactiewaarschuwingCode['max'])) {
                $this->addUsingAlias(GsInteractiesKoppelingPeer::INTERACTIEWAARSCHUWING_CODE, $interactiewaarschuwingCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesKoppelingPeer::INTERACTIEWAARSCHUWING_CODE, $interactiewaarschuwingCode, $comparison);
    }

    /**
     * Filter the query on the relevante_periode_na_staken_van_a_in_dagen column
     *
     * Example usage:
     * <code>
     * $query->filterByRelevantePeriodeNaStakenVanAInDagen(1234); // WHERE relevante_periode_na_staken_van_a_in_dagen = 1234
     * $query->filterByRelevantePeriodeNaStakenVanAInDagen(array(12, 34)); // WHERE relevante_periode_na_staken_van_a_in_dagen IN (12, 34)
     * $query->filterByRelevantePeriodeNaStakenVanAInDagen(array('min' => 12)); // WHERE relevante_periode_na_staken_van_a_in_dagen >= 12
     * $query->filterByRelevantePeriodeNaStakenVanAInDagen(array('max' => 12)); // WHERE relevante_periode_na_staken_van_a_in_dagen <= 12
     * </code>
     *
     * @param     mixed $relevantePeriodeNaStakenVanAInDagen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesKoppelingQuery The current query, for fluid interface
     */
    public function filterByRelevantePeriodeNaStakenVanAInDagen($relevantePeriodeNaStakenVanAInDagen = null, $comparison = null)
    {
        if (is_array($relevantePeriodeNaStakenVanAInDagen)) {
            $useMinMax = false;
            if (isset($relevantePeriodeNaStakenVanAInDagen['min'])) {
                $this->addUsingAlias(GsInteractiesKoppelingPeer::RELEVANTE_PERIODE_NA_STAKEN_VAN_A_IN_DAGEN, $relevantePeriodeNaStakenVanAInDagen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relevantePeriodeNaStakenVanAInDagen['max'])) {
                $this->addUsingAlias(GsInteractiesKoppelingPeer::RELEVANTE_PERIODE_NA_STAKEN_VAN_A_IN_DAGEN, $relevantePeriodeNaStakenVanAInDagen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesKoppelingPeer::RELEVANTE_PERIODE_NA_STAKEN_VAN_A_IN_DAGEN, $relevantePeriodeNaStakenVanAInDagen, $comparison);
    }

    /**
     * Filter the query on the relevante_periode_na_staken_van_b_in_dagen column
     *
     * Example usage:
     * <code>
     * $query->filterByRelevantePeriodeNaStakenVanBInDagen(1234); // WHERE relevante_periode_na_staken_van_b_in_dagen = 1234
     * $query->filterByRelevantePeriodeNaStakenVanBInDagen(array(12, 34)); // WHERE relevante_periode_na_staken_van_b_in_dagen IN (12, 34)
     * $query->filterByRelevantePeriodeNaStakenVanBInDagen(array('min' => 12)); // WHERE relevante_periode_na_staken_van_b_in_dagen >= 12
     * $query->filterByRelevantePeriodeNaStakenVanBInDagen(array('max' => 12)); // WHERE relevante_periode_na_staken_van_b_in_dagen <= 12
     * </code>
     *
     * @param     mixed $relevantePeriodeNaStakenVanBInDagen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesKoppelingQuery The current query, for fluid interface
     */
    public function filterByRelevantePeriodeNaStakenVanBInDagen($relevantePeriodeNaStakenVanBInDagen = null, $comparison = null)
    {
        if (is_array($relevantePeriodeNaStakenVanBInDagen)) {
            $useMinMax = false;
            if (isset($relevantePeriodeNaStakenVanBInDagen['min'])) {
                $this->addUsingAlias(GsInteractiesKoppelingPeer::RELEVANTE_PERIODE_NA_STAKEN_VAN_B_IN_DAGEN, $relevantePeriodeNaStakenVanBInDagen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relevantePeriodeNaStakenVanBInDagen['max'])) {
                $this->addUsingAlias(GsInteractiesKoppelingPeer::RELEVANTE_PERIODE_NA_STAKEN_VAN_B_IN_DAGEN, $relevantePeriodeNaStakenVanBInDagen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesKoppelingPeer::RELEVANTE_PERIODE_NA_STAKEN_VAN_B_IN_DAGEN, $relevantePeriodeNaStakenVanBInDagen, $comparison);
    }

    /**
     * Filter the query on the relevant_indien_a_wordt_toegevoegd_aan_b column
     *
     * Example usage:
     * <code>
     * $query->filterByRelevantIndienAWordtToegevoegdAanB(1234); // WHERE relevant_indien_a_wordt_toegevoegd_aan_b = 1234
     * $query->filterByRelevantIndienAWordtToegevoegdAanB(array(12, 34)); // WHERE relevant_indien_a_wordt_toegevoegd_aan_b IN (12, 34)
     * $query->filterByRelevantIndienAWordtToegevoegdAanB(array('min' => 12)); // WHERE relevant_indien_a_wordt_toegevoegd_aan_b >= 12
     * $query->filterByRelevantIndienAWordtToegevoegdAanB(array('max' => 12)); // WHERE relevant_indien_a_wordt_toegevoegd_aan_b <= 12
     * </code>
     *
     * @param     mixed $relevantIndienAWordtToegevoegdAanB The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesKoppelingQuery The current query, for fluid interface
     */
    public function filterByRelevantIndienAWordtToegevoegdAanB($relevantIndienAWordtToegevoegdAanB = null, $comparison = null)
    {
        if (is_array($relevantIndienAWordtToegevoegdAanB)) {
            $useMinMax = false;
            if (isset($relevantIndienAWordtToegevoegdAanB['min'])) {
                $this->addUsingAlias(GsInteractiesKoppelingPeer::RELEVANT_INDIEN_A_WORDT_TOEGEVOEGD_AAN_B, $relevantIndienAWordtToegevoegdAanB['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relevantIndienAWordtToegevoegdAanB['max'])) {
                $this->addUsingAlias(GsInteractiesKoppelingPeer::RELEVANT_INDIEN_A_WORDT_TOEGEVOEGD_AAN_B, $relevantIndienAWordtToegevoegdAanB['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesKoppelingPeer::RELEVANT_INDIEN_A_WORDT_TOEGEVOEGD_AAN_B, $relevantIndienAWordtToegevoegdAanB, $comparison);
    }

    /**
     * Filter the query on the relevant_indien_b_wordt_toegevoegd_aan_a column
     *
     * Example usage:
     * <code>
     * $query->filterByRelevantIndienBWordtToegevoegdAanA(1234); // WHERE relevant_indien_b_wordt_toegevoegd_aan_a = 1234
     * $query->filterByRelevantIndienBWordtToegevoegdAanA(array(12, 34)); // WHERE relevant_indien_b_wordt_toegevoegd_aan_a IN (12, 34)
     * $query->filterByRelevantIndienBWordtToegevoegdAanA(array('min' => 12)); // WHERE relevant_indien_b_wordt_toegevoegd_aan_a >= 12
     * $query->filterByRelevantIndienBWordtToegevoegdAanA(array('max' => 12)); // WHERE relevant_indien_b_wordt_toegevoegd_aan_a <= 12
     * </code>
     *
     * @param     mixed $relevantIndienBWordtToegevoegdAanA The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesKoppelingQuery The current query, for fluid interface
     */
    public function filterByRelevantIndienBWordtToegevoegdAanA($relevantIndienBWordtToegevoegdAanA = null, $comparison = null)
    {
        if (is_array($relevantIndienBWordtToegevoegdAanA)) {
            $useMinMax = false;
            if (isset($relevantIndienBWordtToegevoegdAanA['min'])) {
                $this->addUsingAlias(GsInteractiesKoppelingPeer::RELEVANT_INDIEN_B_WORDT_TOEGEVOEGD_AAN_A, $relevantIndienBWordtToegevoegdAanA['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relevantIndienBWordtToegevoegdAanA['max'])) {
                $this->addUsingAlias(GsInteractiesKoppelingPeer::RELEVANT_INDIEN_B_WORDT_TOEGEVOEGD_AAN_A, $relevantIndienBWordtToegevoegdAanA['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesKoppelingPeer::RELEVANT_INDIEN_B_WORDT_TOEGEVOEGD_AAN_A, $relevantIndienBWordtToegevoegdAanA, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsInteractiesKoppeling $gsInteractiesKoppeling Object to remove from the list of results
     *
     * @return GsInteractiesKoppelingQuery The current query, for fluid interface
     */
    public function prune($gsInteractiesKoppeling = null)
    {
        if ($gsInteractiesKoppeling) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_A), $gsInteractiesKoppeling->getGpkCodeInteractiewaarschuwingA(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsInteractiesKoppelingPeer::GPK_CODE_INTERACTIEWAARSCHUWING_B), $gsInteractiesKoppeling->getGpkCodeInteractiewaarschuwingB(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsInteractiesKoppelingPeer::INTERACTIEWAARSCHUWING_CODE), $gsInteractiesKoppeling->getInteractiewaarschuwingCode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
