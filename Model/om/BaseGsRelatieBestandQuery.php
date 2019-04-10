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
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieBestand;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieBestandPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieBestandQuery;

/**
 * @method GsRelatieBestandQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsRelatieBestandQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsRelatieBestandQuery orderByRelatieSoortNummer($order = Criteria::ASC) Order by the relatie_soort_nummer column
 * @method GsRelatieBestandQuery orderByVerwijzingIdentificatie1Numeriek($order = Criteria::ASC) Order by the verwijzing_identificatie_1_numeriek column
 * @method GsRelatieBestandQuery orderByVerwijzingIdentificatie1Alfanumeriek($order = Criteria::ASC) Order by the verwijzing_identificatie_1_alfanumeriek column
 * @method GsRelatieBestandQuery orderByVerwijzingIdentificatie2Numeriek($order = Criteria::ASC) Order by the verwijzing_identificatie_2_numeriek column
 * @method GsRelatieBestandQuery orderByVerwijzingIdentificatie2Alfanumeriek($order = Criteria::ASC) Order by the verwijzing_identificatie_2_alfanumeriek column
 *
 * @method GsRelatieBestandQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsRelatieBestandQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsRelatieBestandQuery groupByRelatieSoortNummer() Group by the relatie_soort_nummer column
 * @method GsRelatieBestandQuery groupByVerwijzingIdentificatie1Numeriek() Group by the verwijzing_identificatie_1_numeriek column
 * @method GsRelatieBestandQuery groupByVerwijzingIdentificatie1Alfanumeriek() Group by the verwijzing_identificatie_1_alfanumeriek column
 * @method GsRelatieBestandQuery groupByVerwijzingIdentificatie2Numeriek() Group by the verwijzing_identificatie_2_numeriek column
 * @method GsRelatieBestandQuery groupByVerwijzingIdentificatie2Alfanumeriek() Group by the verwijzing_identificatie_2_alfanumeriek column
 *
 * @method GsRelatieBestandQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsRelatieBestandQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsRelatieBestandQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsRelatieBestand findOne(PropelPDO $con = null) Return the first GsRelatieBestand matching the query
 * @method GsRelatieBestand findOneOrCreate(PropelPDO $con = null) Return the first GsRelatieBestand matching the query, or a new GsRelatieBestand object populated from the query conditions when no match is found
 *
 * @method GsRelatieBestand findOneByBestandnummer(int $bestandnummer) Return the first GsRelatieBestand filtered by the bestandnummer column
 * @method GsRelatieBestand findOneByMutatiekode(int $mutatiekode) Return the first GsRelatieBestand filtered by the mutatiekode column
 * @method GsRelatieBestand findOneByRelatieSoortNummer(int $relatie_soort_nummer) Return the first GsRelatieBestand filtered by the relatie_soort_nummer column
 * @method GsRelatieBestand findOneByVerwijzingIdentificatie1Numeriek(int $verwijzing_identificatie_1_numeriek) Return the first GsRelatieBestand filtered by the verwijzing_identificatie_1_numeriek column
 * @method GsRelatieBestand findOneByVerwijzingIdentificatie1Alfanumeriek(string $verwijzing_identificatie_1_alfanumeriek) Return the first GsRelatieBestand filtered by the verwijzing_identificatie_1_alfanumeriek column
 * @method GsRelatieBestand findOneByVerwijzingIdentificatie2Numeriek(int $verwijzing_identificatie_2_numeriek) Return the first GsRelatieBestand filtered by the verwijzing_identificatie_2_numeriek column
 * @method GsRelatieBestand findOneByVerwijzingIdentificatie2Alfanumeriek(string $verwijzing_identificatie_2_alfanumeriek) Return the first GsRelatieBestand filtered by the verwijzing_identificatie_2_alfanumeriek column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsRelatieBestand objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsRelatieBestand objects filtered by the mutatiekode column
 * @method array findByRelatieSoortNummer(int $relatie_soort_nummer) Return GsRelatieBestand objects filtered by the relatie_soort_nummer column
 * @method array findByVerwijzingIdentificatie1Numeriek(int $verwijzing_identificatie_1_numeriek) Return GsRelatieBestand objects filtered by the verwijzing_identificatie_1_numeriek column
 * @method array findByVerwijzingIdentificatie1Alfanumeriek(string $verwijzing_identificatie_1_alfanumeriek) Return GsRelatieBestand objects filtered by the verwijzing_identificatie_1_alfanumeriek column
 * @method array findByVerwijzingIdentificatie2Numeriek(int $verwijzing_identificatie_2_numeriek) Return GsRelatieBestand objects filtered by the verwijzing_identificatie_2_numeriek column
 * @method array findByVerwijzingIdentificatie2Alfanumeriek(string $verwijzing_identificatie_2_alfanumeriek) Return GsRelatieBestand objects filtered by the verwijzing_identificatie_2_alfanumeriek column
 */
abstract class BaseGsRelatieBestandQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsRelatieBestandQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRelatieBestand';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsRelatieBestandQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsRelatieBestandQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsRelatieBestandQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsRelatieBestandQuery) {
            return $criteria;
        }
        $query = new GsRelatieBestandQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$relatie_soort_nummer, $verwijzing_identificatie_1_numeriek, $verwijzing_identificatie_1_alfanumeriek, $verwijzing_identificatie_2_numeriek, $verwijzing_identificatie_2_alfanumeriek]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsRelatieBestand|GsRelatieBestand[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsRelatieBestandPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsRelatieBestandPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsRelatieBestand A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `relatie_soort_nummer`, `verwijzing_identificatie_1_numeriek`, `verwijzing_identificatie_1_alfanumeriek`, `verwijzing_identificatie_2_numeriek`, `verwijzing_identificatie_2_alfanumeriek` FROM `gs_relatie_bestand` WHERE `relatie_soort_nummer` = :p0 AND `verwijzing_identificatie_1_numeriek` = :p1 AND `verwijzing_identificatie_1_alfanumeriek` = :p2 AND `verwijzing_identificatie_2_numeriek` = :p3 AND `verwijzing_identificatie_2_alfanumeriek` = :p4';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsRelatieBestand();
            $obj->hydrate($row);
            GsRelatieBestandPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4])));
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
     * @return GsRelatieBestand|GsRelatieBestand[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsRelatieBestand[]|mixed the list of results, formatted by the current formatter
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
     * @return GsRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsRelatieBestandPeer::RELATIE_SOORT_NUMMER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_NUMERIEK, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_ALFANUMERIEK, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_NUMERIEK, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_ALFANUMERIEK, $key[4], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsRelatieBestandPeer::RELATIE_SOORT_NUMMER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_NUMERIEK, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_ALFANUMERIEK, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_NUMERIEK, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_ALFANUMERIEK, $key[4], Criteria::EQUAL);
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
     * @return GsRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsRelatieBestandPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsRelatieBestandPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatieBestandPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsRelatieBestandPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsRelatieBestandPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatieBestandPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the relatie_soort_nummer column
     *
     * Example usage:
     * <code>
     * $query->filterByRelatieSoortNummer(1234); // WHERE relatie_soort_nummer = 1234
     * $query->filterByRelatieSoortNummer(array(12, 34)); // WHERE relatie_soort_nummer IN (12, 34)
     * $query->filterByRelatieSoortNummer(array('min' => 12)); // WHERE relatie_soort_nummer >= 12
     * $query->filterByRelatieSoortNummer(array('max' => 12)); // WHERE relatie_soort_nummer <= 12
     * </code>
     *
     * @param     mixed $relatieSoortNummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByRelatieSoortNummer($relatieSoortNummer = null, $comparison = null)
    {
        if (is_array($relatieSoortNummer)) {
            $useMinMax = false;
            if (isset($relatieSoortNummer['min'])) {
                $this->addUsingAlias(GsRelatieBestandPeer::RELATIE_SOORT_NUMMER, $relatieSoortNummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relatieSoortNummer['max'])) {
                $this->addUsingAlias(GsRelatieBestandPeer::RELATIE_SOORT_NUMMER, $relatieSoortNummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatieBestandPeer::RELATIE_SOORT_NUMMER, $relatieSoortNummer, $comparison);
    }

    /**
     * Filter the query on the verwijzing_identificatie_1_numeriek column
     *
     * Example usage:
     * <code>
     * $query->filterByVerwijzingIdentificatie1Numeriek(1234); // WHERE verwijzing_identificatie_1_numeriek = 1234
     * $query->filterByVerwijzingIdentificatie1Numeriek(array(12, 34)); // WHERE verwijzing_identificatie_1_numeriek IN (12, 34)
     * $query->filterByVerwijzingIdentificatie1Numeriek(array('min' => 12)); // WHERE verwijzing_identificatie_1_numeriek >= 12
     * $query->filterByVerwijzingIdentificatie1Numeriek(array('max' => 12)); // WHERE verwijzing_identificatie_1_numeriek <= 12
     * </code>
     *
     * @param     mixed $verwijzingIdentificatie1Numeriek The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByVerwijzingIdentificatie1Numeriek($verwijzingIdentificatie1Numeriek = null, $comparison = null)
    {
        if (is_array($verwijzingIdentificatie1Numeriek)) {
            $useMinMax = false;
            if (isset($verwijzingIdentificatie1Numeriek['min'])) {
                $this->addUsingAlias(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_NUMERIEK, $verwijzingIdentificatie1Numeriek['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($verwijzingIdentificatie1Numeriek['max'])) {
                $this->addUsingAlias(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_NUMERIEK, $verwijzingIdentificatie1Numeriek['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_NUMERIEK, $verwijzingIdentificatie1Numeriek, $comparison);
    }

    /**
     * Filter the query on the verwijzing_identificatie_1_alfanumeriek column
     *
     * Example usage:
     * <code>
     * $query->filterByVerwijzingIdentificatie1Alfanumeriek('fooValue');   // WHERE verwijzing_identificatie_1_alfanumeriek = 'fooValue'
     * $query->filterByVerwijzingIdentificatie1Alfanumeriek('%fooValue%'); // WHERE verwijzing_identificatie_1_alfanumeriek LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verwijzingIdentificatie1Alfanumeriek The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByVerwijzingIdentificatie1Alfanumeriek($verwijzingIdentificatie1Alfanumeriek = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verwijzingIdentificatie1Alfanumeriek)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $verwijzingIdentificatie1Alfanumeriek)) {
                $verwijzingIdentificatie1Alfanumeriek = str_replace('*', '%', $verwijzingIdentificatie1Alfanumeriek);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_ALFANUMERIEK, $verwijzingIdentificatie1Alfanumeriek, $comparison);
    }

    /**
     * Filter the query on the verwijzing_identificatie_2_numeriek column
     *
     * Example usage:
     * <code>
     * $query->filterByVerwijzingIdentificatie2Numeriek(1234); // WHERE verwijzing_identificatie_2_numeriek = 1234
     * $query->filterByVerwijzingIdentificatie2Numeriek(array(12, 34)); // WHERE verwijzing_identificatie_2_numeriek IN (12, 34)
     * $query->filterByVerwijzingIdentificatie2Numeriek(array('min' => 12)); // WHERE verwijzing_identificatie_2_numeriek >= 12
     * $query->filterByVerwijzingIdentificatie2Numeriek(array('max' => 12)); // WHERE verwijzing_identificatie_2_numeriek <= 12
     * </code>
     *
     * @param     mixed $verwijzingIdentificatie2Numeriek The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByVerwijzingIdentificatie2Numeriek($verwijzingIdentificatie2Numeriek = null, $comparison = null)
    {
        if (is_array($verwijzingIdentificatie2Numeriek)) {
            $useMinMax = false;
            if (isset($verwijzingIdentificatie2Numeriek['min'])) {
                $this->addUsingAlias(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_NUMERIEK, $verwijzingIdentificatie2Numeriek['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($verwijzingIdentificatie2Numeriek['max'])) {
                $this->addUsingAlias(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_NUMERIEK, $verwijzingIdentificatie2Numeriek['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_NUMERIEK, $verwijzingIdentificatie2Numeriek, $comparison);
    }

    /**
     * Filter the query on the verwijzing_identificatie_2_alfanumeriek column
     *
     * Example usage:
     * <code>
     * $query->filterByVerwijzingIdentificatie2Alfanumeriek('fooValue');   // WHERE verwijzing_identificatie_2_alfanumeriek = 'fooValue'
     * $query->filterByVerwijzingIdentificatie2Alfanumeriek('%fooValue%'); // WHERE verwijzing_identificatie_2_alfanumeriek LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verwijzingIdentificatie2Alfanumeriek The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByVerwijzingIdentificatie2Alfanumeriek($verwijzingIdentificatie2Alfanumeriek = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verwijzingIdentificatie2Alfanumeriek)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $verwijzingIdentificatie2Alfanumeriek)) {
                $verwijzingIdentificatie2Alfanumeriek = str_replace('*', '%', $verwijzingIdentificatie2Alfanumeriek);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_ALFANUMERIEK, $verwijzingIdentificatie2Alfanumeriek, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsRelatieBestand $gsRelatieBestand Object to remove from the list of results
     *
     * @return GsRelatieBestandQuery The current query, for fluid interface
     */
    public function prune($gsRelatieBestand = null)
    {
        if ($gsRelatieBestand) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsRelatieBestandPeer::RELATIE_SOORT_NUMMER), $gsRelatieBestand->getRelatieSoortNummer(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_NUMERIEK), $gsRelatieBestand->getVerwijzingIdentificatie1Numeriek(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_1_ALFANUMERIEK), $gsRelatieBestand->getVerwijzingIdentificatie1Alfanumeriek(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_NUMERIEK), $gsRelatieBestand->getVerwijzingIdentificatie2Numeriek(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(GsRelatieBestandPeer::VERWIJZING_IDENTIFICATIE_2_ALFANUMERIEK), $gsRelatieBestand->getVerwijzingIdentificatie2Alfanumeriek(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
