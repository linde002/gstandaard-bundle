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
use PharmaIntelligence\GstandaardBundle\Model\GsCoderingGedifferentieerdeTarieven;
use PharmaIntelligence\GstandaardBundle\Model\GsCoderingGedifferentieerdeTarievenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsCoderingGedifferentieerdeTarievenQuery;

/**
 * @method GsCoderingGedifferentieerdeTarievenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsCoderingGedifferentieerdeTarievenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsCoderingGedifferentieerdeTarievenQuery orderByCodering($order = Criteria::ASC) Order by the codering column
 * @method GsCoderingGedifferentieerdeTarievenQuery orderByVolledigeOmschrijving($order = Criteria::ASC) Order by the volledige_omschrijving column
 * @method GsCoderingGedifferentieerdeTarievenQuery orderByVerkorteOmschrijving($order = Criteria::ASC) Order by the verkorte_omschrijving column
 * @method GsCoderingGedifferentieerdeTarievenQuery orderByThesnrSoortLevering($order = Criteria::ASC) Order by the thesnr_soort_levering column
 * @method GsCoderingGedifferentieerdeTarievenQuery orderBySoortLevering($order = Criteria::ASC) Order by the soort_levering column
 * @method GsCoderingGedifferentieerdeTarievenQuery orderByThesnrUitgifteSoort($order = Criteria::ASC) Order by the thesnr_uitgifte_soort column
 * @method GsCoderingGedifferentieerdeTarievenQuery orderBySoortUitgifte($order = Criteria::ASC) Order by the soort_uitgifte column
 * @method GsCoderingGedifferentieerdeTarievenQuery orderByThesnrSoortBereiding($order = Criteria::ASC) Order by the thesnr_soort_bereiding column
 * @method GsCoderingGedifferentieerdeTarievenQuery orderBySoortBereiding($order = Criteria::ASC) Order by the soort_bereiding column
 * @method GsCoderingGedifferentieerdeTarievenQuery orderByThesnrAanbiedingsmoment($order = Criteria::ASC) Order by the thesnr_aanbiedingsmoment column
 * @method GsCoderingGedifferentieerdeTarievenQuery orderByAanbiedingsmoment($order = Criteria::ASC) Order by the aanbiedingsmoment column
 * @method GsCoderingGedifferentieerdeTarievenQuery orderByWmgTarief($order = Criteria::ASC) Order by the wmg_tarief column
 * @method GsCoderingGedifferentieerdeTarievenQuery orderByThesnrToeslagThuis($order = Criteria::ASC) Order by the thesnr_toeslag_thuis column
 * @method GsCoderingGedifferentieerdeTarievenQuery orderByToeslagThuis($order = Criteria::ASC) Order by the toeslag_thuis column
 *
 * @method GsCoderingGedifferentieerdeTarievenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsCoderingGedifferentieerdeTarievenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsCoderingGedifferentieerdeTarievenQuery groupByCodering() Group by the codering column
 * @method GsCoderingGedifferentieerdeTarievenQuery groupByVolledigeOmschrijving() Group by the volledige_omschrijving column
 * @method GsCoderingGedifferentieerdeTarievenQuery groupByVerkorteOmschrijving() Group by the verkorte_omschrijving column
 * @method GsCoderingGedifferentieerdeTarievenQuery groupByThesnrSoortLevering() Group by the thesnr_soort_levering column
 * @method GsCoderingGedifferentieerdeTarievenQuery groupBySoortLevering() Group by the soort_levering column
 * @method GsCoderingGedifferentieerdeTarievenQuery groupByThesnrUitgifteSoort() Group by the thesnr_uitgifte_soort column
 * @method GsCoderingGedifferentieerdeTarievenQuery groupBySoortUitgifte() Group by the soort_uitgifte column
 * @method GsCoderingGedifferentieerdeTarievenQuery groupByThesnrSoortBereiding() Group by the thesnr_soort_bereiding column
 * @method GsCoderingGedifferentieerdeTarievenQuery groupBySoortBereiding() Group by the soort_bereiding column
 * @method GsCoderingGedifferentieerdeTarievenQuery groupByThesnrAanbiedingsmoment() Group by the thesnr_aanbiedingsmoment column
 * @method GsCoderingGedifferentieerdeTarievenQuery groupByAanbiedingsmoment() Group by the aanbiedingsmoment column
 * @method GsCoderingGedifferentieerdeTarievenQuery groupByWmgTarief() Group by the wmg_tarief column
 * @method GsCoderingGedifferentieerdeTarievenQuery groupByThesnrToeslagThuis() Group by the thesnr_toeslag_thuis column
 * @method GsCoderingGedifferentieerdeTarievenQuery groupByToeslagThuis() Group by the toeslag_thuis column
 *
 * @method GsCoderingGedifferentieerdeTarievenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsCoderingGedifferentieerdeTarievenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsCoderingGedifferentieerdeTarievenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsCoderingGedifferentieerdeTarieven findOne(PropelPDO $con = null) Return the first GsCoderingGedifferentieerdeTarieven matching the query
 * @method GsCoderingGedifferentieerdeTarieven findOneOrCreate(PropelPDO $con = null) Return the first GsCoderingGedifferentieerdeTarieven matching the query, or a new GsCoderingGedifferentieerdeTarieven object populated from the query conditions when no match is found
 *
 * @method GsCoderingGedifferentieerdeTarieven findOneByBestandnummer(int $bestandnummer) Return the first GsCoderingGedifferentieerdeTarieven filtered by the bestandnummer column
 * @method GsCoderingGedifferentieerdeTarieven findOneByMutatiekode(int $mutatiekode) Return the first GsCoderingGedifferentieerdeTarieven filtered by the mutatiekode column
 * @method GsCoderingGedifferentieerdeTarieven findOneByVolledigeOmschrijving(string $volledige_omschrijving) Return the first GsCoderingGedifferentieerdeTarieven filtered by the volledige_omschrijving column
 * @method GsCoderingGedifferentieerdeTarieven findOneByVerkorteOmschrijving(string $verkorte_omschrijving) Return the first GsCoderingGedifferentieerdeTarieven filtered by the verkorte_omschrijving column
 * @method GsCoderingGedifferentieerdeTarieven findOneByThesnrSoortLevering(int $thesnr_soort_levering) Return the first GsCoderingGedifferentieerdeTarieven filtered by the thesnr_soort_levering column
 * @method GsCoderingGedifferentieerdeTarieven findOneBySoortLevering(int $soort_levering) Return the first GsCoderingGedifferentieerdeTarieven filtered by the soort_levering column
 * @method GsCoderingGedifferentieerdeTarieven findOneByThesnrUitgifteSoort(int $thesnr_uitgifte_soort) Return the first GsCoderingGedifferentieerdeTarieven filtered by the thesnr_uitgifte_soort column
 * @method GsCoderingGedifferentieerdeTarieven findOneBySoortUitgifte(int $soort_uitgifte) Return the first GsCoderingGedifferentieerdeTarieven filtered by the soort_uitgifte column
 * @method GsCoderingGedifferentieerdeTarieven findOneByThesnrSoortBereiding(int $thesnr_soort_bereiding) Return the first GsCoderingGedifferentieerdeTarieven filtered by the thesnr_soort_bereiding column
 * @method GsCoderingGedifferentieerdeTarieven findOneBySoortBereiding(int $soort_bereiding) Return the first GsCoderingGedifferentieerdeTarieven filtered by the soort_bereiding column
 * @method GsCoderingGedifferentieerdeTarieven findOneByThesnrAanbiedingsmoment(int $thesnr_aanbiedingsmoment) Return the first GsCoderingGedifferentieerdeTarieven filtered by the thesnr_aanbiedingsmoment column
 * @method GsCoderingGedifferentieerdeTarieven findOneByAanbiedingsmoment(int $aanbiedingsmoment) Return the first GsCoderingGedifferentieerdeTarieven filtered by the aanbiedingsmoment column
 * @method GsCoderingGedifferentieerdeTarieven findOneByWmgTarief(string $wmg_tarief) Return the first GsCoderingGedifferentieerdeTarieven filtered by the wmg_tarief column
 * @method GsCoderingGedifferentieerdeTarieven findOneByThesnrToeslagThuis(int $thesnr_toeslag_thuis) Return the first GsCoderingGedifferentieerdeTarieven filtered by the thesnr_toeslag_thuis column
 * @method GsCoderingGedifferentieerdeTarieven findOneByToeslagThuis(int $toeslag_thuis) Return the first GsCoderingGedifferentieerdeTarieven filtered by the toeslag_thuis column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsCoderingGedifferentieerdeTarieven objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsCoderingGedifferentieerdeTarieven objects filtered by the mutatiekode column
 * @method array findByCodering(int $codering) Return GsCoderingGedifferentieerdeTarieven objects filtered by the codering column
 * @method array findByVolledigeOmschrijving(string $volledige_omschrijving) Return GsCoderingGedifferentieerdeTarieven objects filtered by the volledige_omschrijving column
 * @method array findByVerkorteOmschrijving(string $verkorte_omschrijving) Return GsCoderingGedifferentieerdeTarieven objects filtered by the verkorte_omschrijving column
 * @method array findByThesnrSoortLevering(int $thesnr_soort_levering) Return GsCoderingGedifferentieerdeTarieven objects filtered by the thesnr_soort_levering column
 * @method array findBySoortLevering(int $soort_levering) Return GsCoderingGedifferentieerdeTarieven objects filtered by the soort_levering column
 * @method array findByThesnrUitgifteSoort(int $thesnr_uitgifte_soort) Return GsCoderingGedifferentieerdeTarieven objects filtered by the thesnr_uitgifte_soort column
 * @method array findBySoortUitgifte(int $soort_uitgifte) Return GsCoderingGedifferentieerdeTarieven objects filtered by the soort_uitgifte column
 * @method array findByThesnrSoortBereiding(int $thesnr_soort_bereiding) Return GsCoderingGedifferentieerdeTarieven objects filtered by the thesnr_soort_bereiding column
 * @method array findBySoortBereiding(int $soort_bereiding) Return GsCoderingGedifferentieerdeTarieven objects filtered by the soort_bereiding column
 * @method array findByThesnrAanbiedingsmoment(int $thesnr_aanbiedingsmoment) Return GsCoderingGedifferentieerdeTarieven objects filtered by the thesnr_aanbiedingsmoment column
 * @method array findByAanbiedingsmoment(int $aanbiedingsmoment) Return GsCoderingGedifferentieerdeTarieven objects filtered by the aanbiedingsmoment column
 * @method array findByWmgTarief(string $wmg_tarief) Return GsCoderingGedifferentieerdeTarieven objects filtered by the wmg_tarief column
 * @method array findByThesnrToeslagThuis(int $thesnr_toeslag_thuis) Return GsCoderingGedifferentieerdeTarieven objects filtered by the thesnr_toeslag_thuis column
 * @method array findByToeslagThuis(int $toeslag_thuis) Return GsCoderingGedifferentieerdeTarieven objects filtered by the toeslag_thuis column
 */
abstract class BaseGsCoderingGedifferentieerdeTarievenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsCoderingGedifferentieerdeTarievenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsCoderingGedifferentieerdeTarieven';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsCoderingGedifferentieerdeTarievenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsCoderingGedifferentieerdeTarievenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsCoderingGedifferentieerdeTarievenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsCoderingGedifferentieerdeTarievenQuery) {
            return $criteria;
        }
        $query = new GsCoderingGedifferentieerdeTarievenQuery(null, null, $modelAlias);

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
     * @return   GsCoderingGedifferentieerdeTarieven|GsCoderingGedifferentieerdeTarieven[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsCoderingGedifferentieerdeTarievenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsCoderingGedifferentieerdeTarievenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsCoderingGedifferentieerdeTarieven A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByCodering($key, $con = null)
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
     * @return                 GsCoderingGedifferentieerdeTarieven A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `codering`, `volledige_omschrijving`, `verkorte_omschrijving`, `thesnr_soort_levering`, `soort_levering`, `thesnr_uitgifte_soort`, `soort_uitgifte`, `thesnr_soort_bereiding`, `soort_bereiding`, `thesnr_aanbiedingsmoment`, `aanbiedingsmoment`, `wmg_tarief`, `thesnr_toeslag_thuis`, `toeslag_thuis` FROM `gs_codering_gedifferentieerde_tarieven` WHERE `codering` = :p0';
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
            $obj = new GsCoderingGedifferentieerdeTarieven();
            $obj->hydrate($row);
            GsCoderingGedifferentieerdeTarievenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsCoderingGedifferentieerdeTarieven|GsCoderingGedifferentieerdeTarieven[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsCoderingGedifferentieerdeTarieven[]|mixed the list of results, formatted by the current formatter
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
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::CODERING, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::CODERING, $keys, Criteria::IN);
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
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the codering column
     *
     * Example usage:
     * <code>
     * $query->filterByCodering(1234); // WHERE codering = 1234
     * $query->filterByCodering(array(12, 34)); // WHERE codering IN (12, 34)
     * $query->filterByCodering(array('min' => 12)); // WHERE codering >= 12
     * $query->filterByCodering(array('max' => 12)); // WHERE codering <= 12
     * </code>
     *
     * @param     mixed $codering The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function filterByCodering($codering = null, $comparison = null)
    {
        if (is_array($codering)) {
            $useMinMax = false;
            if (isset($codering['min'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::CODERING, $codering['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($codering['max'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::CODERING, $codering['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::CODERING, $codering, $comparison);
    }

    /**
     * Filter the query on the volledige_omschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByVolledigeOmschrijving('fooValue');   // WHERE volledige_omschrijving = 'fooValue'
     * $query->filterByVolledigeOmschrijving('%fooValue%'); // WHERE volledige_omschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $volledigeOmschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function filterByVolledigeOmschrijving($volledigeOmschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($volledigeOmschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $volledigeOmschrijving)) {
                $volledigeOmschrijving = str_replace('*', '%', $volledigeOmschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::VOLLEDIGE_OMSCHRIJVING, $volledigeOmschrijving, $comparison);
    }

    /**
     * Filter the query on the verkorte_omschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByVerkorteOmschrijving('fooValue');   // WHERE verkorte_omschrijving = 'fooValue'
     * $query->filterByVerkorteOmschrijving('%fooValue%'); // WHERE verkorte_omschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verkorteOmschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function filterByVerkorteOmschrijving($verkorteOmschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verkorteOmschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $verkorteOmschrijving)) {
                $verkorteOmschrijving = str_replace('*', '%', $verkorteOmschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::VERKORTE_OMSCHRIJVING, $verkorteOmschrijving, $comparison);
    }

    /**
     * Filter the query on the thesnr_soort_levering column
     *
     * Example usage:
     * <code>
     * $query->filterByThesnrSoortLevering(1234); // WHERE thesnr_soort_levering = 1234
     * $query->filterByThesnrSoortLevering(array(12, 34)); // WHERE thesnr_soort_levering IN (12, 34)
     * $query->filterByThesnrSoortLevering(array('min' => 12)); // WHERE thesnr_soort_levering >= 12
     * $query->filterByThesnrSoortLevering(array('max' => 12)); // WHERE thesnr_soort_levering <= 12
     * </code>
     *
     * @param     mixed $thesnrSoortLevering The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function filterByThesnrSoortLevering($thesnrSoortLevering = null, $comparison = null)
    {
        if (is_array($thesnrSoortLevering)) {
            $useMinMax = false;
            if (isset($thesnrSoortLevering['min'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_LEVERING, $thesnrSoortLevering['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesnrSoortLevering['max'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_LEVERING, $thesnrSoortLevering['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_LEVERING, $thesnrSoortLevering, $comparison);
    }

    /**
     * Filter the query on the soort_levering column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortLevering(1234); // WHERE soort_levering = 1234
     * $query->filterBySoortLevering(array(12, 34)); // WHERE soort_levering IN (12, 34)
     * $query->filterBySoortLevering(array('min' => 12)); // WHERE soort_levering >= 12
     * $query->filterBySoortLevering(array('max' => 12)); // WHERE soort_levering <= 12
     * </code>
     *
     * @param     mixed $soortLevering The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function filterBySoortLevering($soortLevering = null, $comparison = null)
    {
        if (is_array($soortLevering)) {
            $useMinMax = false;
            if (isset($soortLevering['min'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::SOORT_LEVERING, $soortLevering['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortLevering['max'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::SOORT_LEVERING, $soortLevering['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::SOORT_LEVERING, $soortLevering, $comparison);
    }

    /**
     * Filter the query on the thesnr_uitgifte_soort column
     *
     * Example usage:
     * <code>
     * $query->filterByThesnrUitgifteSoort(1234); // WHERE thesnr_uitgifte_soort = 1234
     * $query->filterByThesnrUitgifteSoort(array(12, 34)); // WHERE thesnr_uitgifte_soort IN (12, 34)
     * $query->filterByThesnrUitgifteSoort(array('min' => 12)); // WHERE thesnr_uitgifte_soort >= 12
     * $query->filterByThesnrUitgifteSoort(array('max' => 12)); // WHERE thesnr_uitgifte_soort <= 12
     * </code>
     *
     * @param     mixed $thesnrUitgifteSoort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function filterByThesnrUitgifteSoort($thesnrUitgifteSoort = null, $comparison = null)
    {
        if (is_array($thesnrUitgifteSoort)) {
            $useMinMax = false;
            if (isset($thesnrUitgifteSoort['min'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::THESNR_UITGIFTE_SOORT, $thesnrUitgifteSoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesnrUitgifteSoort['max'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::THESNR_UITGIFTE_SOORT, $thesnrUitgifteSoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::THESNR_UITGIFTE_SOORT, $thesnrUitgifteSoort, $comparison);
    }

    /**
     * Filter the query on the soort_uitgifte column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortUitgifte(1234); // WHERE soort_uitgifte = 1234
     * $query->filterBySoortUitgifte(array(12, 34)); // WHERE soort_uitgifte IN (12, 34)
     * $query->filterBySoortUitgifte(array('min' => 12)); // WHERE soort_uitgifte >= 12
     * $query->filterBySoortUitgifte(array('max' => 12)); // WHERE soort_uitgifte <= 12
     * </code>
     *
     * @param     mixed $soortUitgifte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function filterBySoortUitgifte($soortUitgifte = null, $comparison = null)
    {
        if (is_array($soortUitgifte)) {
            $useMinMax = false;
            if (isset($soortUitgifte['min'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::SOORT_UITGIFTE, $soortUitgifte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortUitgifte['max'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::SOORT_UITGIFTE, $soortUitgifte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::SOORT_UITGIFTE, $soortUitgifte, $comparison);
    }

    /**
     * Filter the query on the thesnr_soort_bereiding column
     *
     * Example usage:
     * <code>
     * $query->filterByThesnrSoortBereiding(1234); // WHERE thesnr_soort_bereiding = 1234
     * $query->filterByThesnrSoortBereiding(array(12, 34)); // WHERE thesnr_soort_bereiding IN (12, 34)
     * $query->filterByThesnrSoortBereiding(array('min' => 12)); // WHERE thesnr_soort_bereiding >= 12
     * $query->filterByThesnrSoortBereiding(array('max' => 12)); // WHERE thesnr_soort_bereiding <= 12
     * </code>
     *
     * @param     mixed $thesnrSoortBereiding The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function filterByThesnrSoortBereiding($thesnrSoortBereiding = null, $comparison = null)
    {
        if (is_array($thesnrSoortBereiding)) {
            $useMinMax = false;
            if (isset($thesnrSoortBereiding['min'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_BEREIDING, $thesnrSoortBereiding['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesnrSoortBereiding['max'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_BEREIDING, $thesnrSoortBereiding['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::THESNR_SOORT_BEREIDING, $thesnrSoortBereiding, $comparison);
    }

    /**
     * Filter the query on the soort_bereiding column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortBereiding(1234); // WHERE soort_bereiding = 1234
     * $query->filterBySoortBereiding(array(12, 34)); // WHERE soort_bereiding IN (12, 34)
     * $query->filterBySoortBereiding(array('min' => 12)); // WHERE soort_bereiding >= 12
     * $query->filterBySoortBereiding(array('max' => 12)); // WHERE soort_bereiding <= 12
     * </code>
     *
     * @param     mixed $soortBereiding The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function filterBySoortBereiding($soortBereiding = null, $comparison = null)
    {
        if (is_array($soortBereiding)) {
            $useMinMax = false;
            if (isset($soortBereiding['min'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::SOORT_BEREIDING, $soortBereiding['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortBereiding['max'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::SOORT_BEREIDING, $soortBereiding['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::SOORT_BEREIDING, $soortBereiding, $comparison);
    }

    /**
     * Filter the query on the thesnr_aanbiedingsmoment column
     *
     * Example usage:
     * <code>
     * $query->filterByThesnrAanbiedingsmoment(1234); // WHERE thesnr_aanbiedingsmoment = 1234
     * $query->filterByThesnrAanbiedingsmoment(array(12, 34)); // WHERE thesnr_aanbiedingsmoment IN (12, 34)
     * $query->filterByThesnrAanbiedingsmoment(array('min' => 12)); // WHERE thesnr_aanbiedingsmoment >= 12
     * $query->filterByThesnrAanbiedingsmoment(array('max' => 12)); // WHERE thesnr_aanbiedingsmoment <= 12
     * </code>
     *
     * @param     mixed $thesnrAanbiedingsmoment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function filterByThesnrAanbiedingsmoment($thesnrAanbiedingsmoment = null, $comparison = null)
    {
        if (is_array($thesnrAanbiedingsmoment)) {
            $useMinMax = false;
            if (isset($thesnrAanbiedingsmoment['min'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::THESNR_AANBIEDINGSMOMENT, $thesnrAanbiedingsmoment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesnrAanbiedingsmoment['max'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::THESNR_AANBIEDINGSMOMENT, $thesnrAanbiedingsmoment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::THESNR_AANBIEDINGSMOMENT, $thesnrAanbiedingsmoment, $comparison);
    }

    /**
     * Filter the query on the aanbiedingsmoment column
     *
     * Example usage:
     * <code>
     * $query->filterByAanbiedingsmoment(1234); // WHERE aanbiedingsmoment = 1234
     * $query->filterByAanbiedingsmoment(array(12, 34)); // WHERE aanbiedingsmoment IN (12, 34)
     * $query->filterByAanbiedingsmoment(array('min' => 12)); // WHERE aanbiedingsmoment >= 12
     * $query->filterByAanbiedingsmoment(array('max' => 12)); // WHERE aanbiedingsmoment <= 12
     * </code>
     *
     * @param     mixed $aanbiedingsmoment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function filterByAanbiedingsmoment($aanbiedingsmoment = null, $comparison = null)
    {
        if (is_array($aanbiedingsmoment)) {
            $useMinMax = false;
            if (isset($aanbiedingsmoment['min'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::AANBIEDINGSMOMENT, $aanbiedingsmoment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aanbiedingsmoment['max'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::AANBIEDINGSMOMENT, $aanbiedingsmoment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::AANBIEDINGSMOMENT, $aanbiedingsmoment, $comparison);
    }

    /**
     * Filter the query on the wmg_tarief column
     *
     * Example usage:
     * <code>
     * $query->filterByWmgTarief(1234); // WHERE wmg_tarief = 1234
     * $query->filterByWmgTarief(array(12, 34)); // WHERE wmg_tarief IN (12, 34)
     * $query->filterByWmgTarief(array('min' => 12)); // WHERE wmg_tarief >= 12
     * $query->filterByWmgTarief(array('max' => 12)); // WHERE wmg_tarief <= 12
     * </code>
     *
     * @param     mixed $wmgTarief The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function filterByWmgTarief($wmgTarief = null, $comparison = null)
    {
        if (is_array($wmgTarief)) {
            $useMinMax = false;
            if (isset($wmgTarief['min'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::WMG_TARIEF, $wmgTarief['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wmgTarief['max'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::WMG_TARIEF, $wmgTarief['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::WMG_TARIEF, $wmgTarief, $comparison);
    }

    /**
     * Filter the query on the thesnr_toeslag_thuis column
     *
     * Example usage:
     * <code>
     * $query->filterByThesnrToeslagThuis(1234); // WHERE thesnr_toeslag_thuis = 1234
     * $query->filterByThesnrToeslagThuis(array(12, 34)); // WHERE thesnr_toeslag_thuis IN (12, 34)
     * $query->filterByThesnrToeslagThuis(array('min' => 12)); // WHERE thesnr_toeslag_thuis >= 12
     * $query->filterByThesnrToeslagThuis(array('max' => 12)); // WHERE thesnr_toeslag_thuis <= 12
     * </code>
     *
     * @param     mixed $thesnrToeslagThuis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function filterByThesnrToeslagThuis($thesnrToeslagThuis = null, $comparison = null)
    {
        if (is_array($thesnrToeslagThuis)) {
            $useMinMax = false;
            if (isset($thesnrToeslagThuis['min'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::THESNR_TOESLAG_THUIS, $thesnrToeslagThuis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesnrToeslagThuis['max'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::THESNR_TOESLAG_THUIS, $thesnrToeslagThuis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::THESNR_TOESLAG_THUIS, $thesnrToeslagThuis, $comparison);
    }

    /**
     * Filter the query on the toeslag_thuis column
     *
     * Example usage:
     * <code>
     * $query->filterByToeslagThuis(1234); // WHERE toeslag_thuis = 1234
     * $query->filterByToeslagThuis(array(12, 34)); // WHERE toeslag_thuis IN (12, 34)
     * $query->filterByToeslagThuis(array('min' => 12)); // WHERE toeslag_thuis >= 12
     * $query->filterByToeslagThuis(array('max' => 12)); // WHERE toeslag_thuis <= 12
     * </code>
     *
     * @param     mixed $toeslagThuis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function filterByToeslagThuis($toeslagThuis = null, $comparison = null)
    {
        if (is_array($toeslagThuis)) {
            $useMinMax = false;
            if (isset($toeslagThuis['min'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::TOESLAG_THUIS, $toeslagThuis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($toeslagThuis['max'])) {
                $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::TOESLAG_THUIS, $toeslagThuis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::TOESLAG_THUIS, $toeslagThuis, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsCoderingGedifferentieerdeTarieven $gsCoderingGedifferentieerdeTarieven Object to remove from the list of results
     *
     * @return GsCoderingGedifferentieerdeTarievenQuery The current query, for fluid interface
     */
    public function prune($gsCoderingGedifferentieerdeTarieven = null)
    {
        if ($gsCoderingGedifferentieerdeTarieven) {
            $this->addUsingAlias(GsCoderingGedifferentieerdeTarievenPeer::CODERING, $gsCoderingGedifferentieerdeTarieven->getCodering(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
