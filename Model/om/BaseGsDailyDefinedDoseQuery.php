<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \Criteria;
use \Exception;
use \ModelCriteria;
use \ModelJoin;
use \PDO;
use \Propel;
use \PropelCollection;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodes;
use PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDose;
use PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDosePeer;
use PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDoseQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;

/**
 * @method GsDailyDefinedDoseQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsDailyDefinedDoseQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsDailyDefinedDoseQuery orderByAtccode($order = Criteria::ASC) Order by the atccode column
 * @method GsDailyDefinedDoseQuery orderByDddaantal($order = Criteria::ASC) Order by the dddaantal column
 * @method GsDailyDefinedDoseQuery orderByDddeenheidThesaurusnummer($order = Criteria::ASC) Order by the dddeenheid_thesaurusnummer column
 * @method GsDailyDefinedDoseQuery orderByDddeenheid($order = Criteria::ASC) Order by the dddeenheid column
 * @method GsDailyDefinedDoseQuery orderByDddToedieningswegThesaurusnummer($order = Criteria::ASC) Order by the ddd_toedieningsweg_thesaurusnummer column
 * @method GsDailyDefinedDoseQuery orderByDddtoedieningsweg($order = Criteria::ASC) Order by the dddtoedieningsweg column
 * @method GsDailyDefinedDoseQuery orderByDddStatusaanduiding($order = Criteria::ASC) Order by the ddd_statusaanduiding column
 *
 * @method GsDailyDefinedDoseQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsDailyDefinedDoseQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsDailyDefinedDoseQuery groupByAtccode() Group by the atccode column
 * @method GsDailyDefinedDoseQuery groupByDddaantal() Group by the dddaantal column
 * @method GsDailyDefinedDoseQuery groupByDddeenheidThesaurusnummer() Group by the dddeenheid_thesaurusnummer column
 * @method GsDailyDefinedDoseQuery groupByDddeenheid() Group by the dddeenheid column
 * @method GsDailyDefinedDoseQuery groupByDddToedieningswegThesaurusnummer() Group by the ddd_toedieningsweg_thesaurusnummer column
 * @method GsDailyDefinedDoseQuery groupByDddtoedieningsweg() Group by the dddtoedieningsweg column
 * @method GsDailyDefinedDoseQuery groupByDddStatusaanduiding() Group by the ddd_statusaanduiding column
 *
 * @method GsDailyDefinedDoseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsDailyDefinedDoseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsDailyDefinedDoseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsDailyDefinedDoseQuery leftJoinGsAtcCodes($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsAtcCodes relation
 * @method GsDailyDefinedDoseQuery rightJoinGsAtcCodes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsAtcCodes relation
 * @method GsDailyDefinedDoseQuery innerJoinGsAtcCodes($relationAlias = null) Adds a INNER JOIN clause to the query using the GsAtcCodes relation
 *
 * @method GsDailyDefinedDoseQuery leftJoinEenheidOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the EenheidOmschrijving relation
 * @method GsDailyDefinedDoseQuery rightJoinEenheidOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EenheidOmschrijving relation
 * @method GsDailyDefinedDoseQuery innerJoinEenheidOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the EenheidOmschrijving relation
 *
 * @method GsDailyDefinedDoseQuery leftJoinToedieningswegOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the ToedieningswegOmschrijving relation
 * @method GsDailyDefinedDoseQuery rightJoinToedieningswegOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ToedieningswegOmschrijving relation
 * @method GsDailyDefinedDoseQuery innerJoinToedieningswegOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the ToedieningswegOmschrijving relation
 *
 * @method GsDailyDefinedDose findOne(PropelPDO $con = null) Return the first GsDailyDefinedDose matching the query
 * @method GsDailyDefinedDose findOneOrCreate(PropelPDO $con = null) Return the first GsDailyDefinedDose matching the query, or a new GsDailyDefinedDose object populated from the query conditions when no match is found
 *
 * @method GsDailyDefinedDose findOneByBestandnummer(int $bestandnummer) Return the first GsDailyDefinedDose filtered by the bestandnummer column
 * @method GsDailyDefinedDose findOneByMutatiekode(int $mutatiekode) Return the first GsDailyDefinedDose filtered by the mutatiekode column
 * @method GsDailyDefinedDose findOneByAtccode(string $atccode) Return the first GsDailyDefinedDose filtered by the atccode column
 * @method GsDailyDefinedDose findOneByDddaantal(string $dddaantal) Return the first GsDailyDefinedDose filtered by the dddaantal column
 * @method GsDailyDefinedDose findOneByDddeenheidThesaurusnummer(int $dddeenheid_thesaurusnummer) Return the first GsDailyDefinedDose filtered by the dddeenheid_thesaurusnummer column
 * @method GsDailyDefinedDose findOneByDddeenheid(int $dddeenheid) Return the first GsDailyDefinedDose filtered by the dddeenheid column
 * @method GsDailyDefinedDose findOneByDddToedieningswegThesaurusnummer(int $ddd_toedieningsweg_thesaurusnummer) Return the first GsDailyDefinedDose filtered by the ddd_toedieningsweg_thesaurusnummer column
 * @method GsDailyDefinedDose findOneByDddtoedieningsweg(int $dddtoedieningsweg) Return the first GsDailyDefinedDose filtered by the dddtoedieningsweg column
 * @method GsDailyDefinedDose findOneByDddStatusaanduiding(int $ddd_statusaanduiding) Return the first GsDailyDefinedDose filtered by the ddd_statusaanduiding column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsDailyDefinedDose objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsDailyDefinedDose objects filtered by the mutatiekode column
 * @method array findByAtccode(string $atccode) Return GsDailyDefinedDose objects filtered by the atccode column
 * @method array findByDddaantal(string $dddaantal) Return GsDailyDefinedDose objects filtered by the dddaantal column
 * @method array findByDddeenheidThesaurusnummer(int $dddeenheid_thesaurusnummer) Return GsDailyDefinedDose objects filtered by the dddeenheid_thesaurusnummer column
 * @method array findByDddeenheid(int $dddeenheid) Return GsDailyDefinedDose objects filtered by the dddeenheid column
 * @method array findByDddToedieningswegThesaurusnummer(int $ddd_toedieningsweg_thesaurusnummer) Return GsDailyDefinedDose objects filtered by the ddd_toedieningsweg_thesaurusnummer column
 * @method array findByDddtoedieningsweg(int $dddtoedieningsweg) Return GsDailyDefinedDose objects filtered by the dddtoedieningsweg column
 * @method array findByDddStatusaanduiding(int $ddd_statusaanduiding) Return GsDailyDefinedDose objects filtered by the ddd_statusaanduiding column
 */
abstract class BaseGsDailyDefinedDoseQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsDailyDefinedDoseQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDailyDefinedDose';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsDailyDefinedDoseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsDailyDefinedDoseQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsDailyDefinedDoseQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsDailyDefinedDoseQuery) {
            return $criteria;
        }
        $query = new GsDailyDefinedDoseQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$atccode, $dddaantal, $dddeenheid, $dddtoedieningsweg]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsDailyDefinedDose|GsDailyDefinedDose[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsDailyDefinedDosePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsDailyDefinedDosePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsDailyDefinedDose A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `atccode`, `dddaantal`, `dddeenheid_thesaurusnummer`, `dddeenheid`, `ddd_toedieningsweg_thesaurusnummer`, `dddtoedieningsweg`, `ddd_statusaanduiding` FROM `gs_daily_defined_dose` WHERE `atccode` = :p0 AND `dddaantal` = :p1 AND `dddeenheid` = :p2 AND `dddtoedieningsweg` = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsDailyDefinedDose();
            $obj->hydrate($row);
            GsDailyDefinedDosePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3])));
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
     * @return GsDailyDefinedDose|GsDailyDefinedDose[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsDailyDefinedDose[]|mixed the list of results, formatted by the current formatter
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
     * @return GsDailyDefinedDoseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsDailyDefinedDosePeer::ATCCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsDailyDefinedDosePeer::DDDAANTAL, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsDailyDefinedDosePeer::DDDEENHEID, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsDailyDefinedDoseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsDailyDefinedDosePeer::ATCCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsDailyDefinedDosePeer::DDDAANTAL, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsDailyDefinedDosePeer::DDDEENHEID, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG, $key[3], Criteria::EQUAL);
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
     * @return GsDailyDefinedDoseQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsDailyDefinedDosePeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsDailyDefinedDosePeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDailyDefinedDosePeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsDailyDefinedDoseQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsDailyDefinedDosePeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsDailyDefinedDosePeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDailyDefinedDosePeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the atccode column
     *
     * Example usage:
     * <code>
     * $query->filterByAtccode('fooValue');   // WHERE atccode = 'fooValue'
     * $query->filterByAtccode('%fooValue%'); // WHERE atccode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $atccode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDailyDefinedDoseQuery The current query, for fluid interface
     */
    public function filterByAtccode($atccode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($atccode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $atccode)) {
                $atccode = str_replace('*', '%', $atccode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsDailyDefinedDosePeer::ATCCODE, $atccode, $comparison);
    }

    /**
     * Filter the query on the dddaantal column
     *
     * Example usage:
     * <code>
     * $query->filterByDddaantal(1234); // WHERE dddaantal = 1234
     * $query->filterByDddaantal(array(12, 34)); // WHERE dddaantal IN (12, 34)
     * $query->filterByDddaantal(array('min' => 12)); // WHERE dddaantal >= 12
     * $query->filterByDddaantal(array('max' => 12)); // WHERE dddaantal <= 12
     * </code>
     *
     * @param     mixed $dddaantal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDailyDefinedDoseQuery The current query, for fluid interface
     */
    public function filterByDddaantal($dddaantal = null, $comparison = null)
    {
        if (is_array($dddaantal)) {
            $useMinMax = false;
            if (isset($dddaantal['min'])) {
                $this->addUsingAlias(GsDailyDefinedDosePeer::DDDAANTAL, $dddaantal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dddaantal['max'])) {
                $this->addUsingAlias(GsDailyDefinedDosePeer::DDDAANTAL, $dddaantal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDailyDefinedDosePeer::DDDAANTAL, $dddaantal, $comparison);
    }

    /**
     * Filter the query on the dddeenheid_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByDddeenheidThesaurusnummer(1234); // WHERE dddeenheid_thesaurusnummer = 1234
     * $query->filterByDddeenheidThesaurusnummer(array(12, 34)); // WHERE dddeenheid_thesaurusnummer IN (12, 34)
     * $query->filterByDddeenheidThesaurusnummer(array('min' => 12)); // WHERE dddeenheid_thesaurusnummer >= 12
     * $query->filterByDddeenheidThesaurusnummer(array('max' => 12)); // WHERE dddeenheid_thesaurusnummer <= 12
     * </code>
     *
     * @see       filterByEenheidOmschrijving()
     *
     * @param     mixed $dddeenheidThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDailyDefinedDoseQuery The current query, for fluid interface
     */
    public function filterByDddeenheidThesaurusnummer($dddeenheidThesaurusnummer = null, $comparison = null)
    {
        if (is_array($dddeenheidThesaurusnummer)) {
            $useMinMax = false;
            if (isset($dddeenheidThesaurusnummer['min'])) {
                $this->addUsingAlias(GsDailyDefinedDosePeer::DDDEENHEID_THESAURUSNUMMER, $dddeenheidThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dddeenheidThesaurusnummer['max'])) {
                $this->addUsingAlias(GsDailyDefinedDosePeer::DDDEENHEID_THESAURUSNUMMER, $dddeenheidThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDailyDefinedDosePeer::DDDEENHEID_THESAURUSNUMMER, $dddeenheidThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the dddeenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByDddeenheid(1234); // WHERE dddeenheid = 1234
     * $query->filterByDddeenheid(array(12, 34)); // WHERE dddeenheid IN (12, 34)
     * $query->filterByDddeenheid(array('min' => 12)); // WHERE dddeenheid >= 12
     * $query->filterByDddeenheid(array('max' => 12)); // WHERE dddeenheid <= 12
     * </code>
     *
     * @see       filterByEenheidOmschrijving()
     *
     * @param     mixed $dddeenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDailyDefinedDoseQuery The current query, for fluid interface
     */
    public function filterByDddeenheid($dddeenheid = null, $comparison = null)
    {
        if (is_array($dddeenheid)) {
            $useMinMax = false;
            if (isset($dddeenheid['min'])) {
                $this->addUsingAlias(GsDailyDefinedDosePeer::DDDEENHEID, $dddeenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dddeenheid['max'])) {
                $this->addUsingAlias(GsDailyDefinedDosePeer::DDDEENHEID, $dddeenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDailyDefinedDosePeer::DDDEENHEID, $dddeenheid, $comparison);
    }

    /**
     * Filter the query on the ddd_toedieningsweg_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByDddToedieningswegThesaurusnummer(1234); // WHERE ddd_toedieningsweg_thesaurusnummer = 1234
     * $query->filterByDddToedieningswegThesaurusnummer(array(12, 34)); // WHERE ddd_toedieningsweg_thesaurusnummer IN (12, 34)
     * $query->filterByDddToedieningswegThesaurusnummer(array('min' => 12)); // WHERE ddd_toedieningsweg_thesaurusnummer >= 12
     * $query->filterByDddToedieningswegThesaurusnummer(array('max' => 12)); // WHERE ddd_toedieningsweg_thesaurusnummer <= 12
     * </code>
     *
     * @see       filterByToedieningswegOmschrijving()
     *
     * @param     mixed $dddToedieningswegThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDailyDefinedDoseQuery The current query, for fluid interface
     */
    public function filterByDddToedieningswegThesaurusnummer($dddToedieningswegThesaurusnummer = null, $comparison = null)
    {
        if (is_array($dddToedieningswegThesaurusnummer)) {
            $useMinMax = false;
            if (isset($dddToedieningswegThesaurusnummer['min'])) {
                $this->addUsingAlias(GsDailyDefinedDosePeer::DDD_TOEDIENINGSWEG_THESAURUSNUMMER, $dddToedieningswegThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dddToedieningswegThesaurusnummer['max'])) {
                $this->addUsingAlias(GsDailyDefinedDosePeer::DDD_TOEDIENINGSWEG_THESAURUSNUMMER, $dddToedieningswegThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDailyDefinedDosePeer::DDD_TOEDIENINGSWEG_THESAURUSNUMMER, $dddToedieningswegThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the dddtoedieningsweg column
     *
     * Example usage:
     * <code>
     * $query->filterByDddtoedieningsweg(1234); // WHERE dddtoedieningsweg = 1234
     * $query->filterByDddtoedieningsweg(array(12, 34)); // WHERE dddtoedieningsweg IN (12, 34)
     * $query->filterByDddtoedieningsweg(array('min' => 12)); // WHERE dddtoedieningsweg >= 12
     * $query->filterByDddtoedieningsweg(array('max' => 12)); // WHERE dddtoedieningsweg <= 12
     * </code>
     *
     * @see       filterByToedieningswegOmschrijving()
     *
     * @param     mixed $dddtoedieningsweg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDailyDefinedDoseQuery The current query, for fluid interface
     */
    public function filterByDddtoedieningsweg($dddtoedieningsweg = null, $comparison = null)
    {
        if (is_array($dddtoedieningsweg)) {
            $useMinMax = false;
            if (isset($dddtoedieningsweg['min'])) {
                $this->addUsingAlias(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG, $dddtoedieningsweg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dddtoedieningsweg['max'])) {
                $this->addUsingAlias(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG, $dddtoedieningsweg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG, $dddtoedieningsweg, $comparison);
    }

    /**
     * Filter the query on the ddd_statusaanduiding column
     *
     * Example usage:
     * <code>
     * $query->filterByDddStatusaanduiding(1234); // WHERE ddd_statusaanduiding = 1234
     * $query->filterByDddStatusaanduiding(array(12, 34)); // WHERE ddd_statusaanduiding IN (12, 34)
     * $query->filterByDddStatusaanduiding(array('min' => 12)); // WHERE ddd_statusaanduiding >= 12
     * $query->filterByDddStatusaanduiding(array('max' => 12)); // WHERE ddd_statusaanduiding <= 12
     * </code>
     *
     * @param     mixed $dddStatusaanduiding The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDailyDefinedDoseQuery The current query, for fluid interface
     */
    public function filterByDddStatusaanduiding($dddStatusaanduiding = null, $comparison = null)
    {
        if (is_array($dddStatusaanduiding)) {
            $useMinMax = false;
            if (isset($dddStatusaanduiding['min'])) {
                $this->addUsingAlias(GsDailyDefinedDosePeer::DDD_STATUSAANDUIDING, $dddStatusaanduiding['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dddStatusaanduiding['max'])) {
                $this->addUsingAlias(GsDailyDefinedDosePeer::DDD_STATUSAANDUIDING, $dddStatusaanduiding['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDailyDefinedDosePeer::DDD_STATUSAANDUIDING, $dddStatusaanduiding, $comparison);
    }

    /**
     * Filter the query by a related GsAtcCodes object
     *
     * @param   GsAtcCodes|PropelObjectCollection $gsAtcCodes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsDailyDefinedDoseQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsAtcCodes($gsAtcCodes, $comparison = null)
    {
        if ($gsAtcCodes instanceof GsAtcCodes) {
            return $this
                ->addUsingAlias(GsDailyDefinedDosePeer::ATCCODE, $gsAtcCodes->getAtccode(), $comparison);
        } elseif ($gsAtcCodes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsDailyDefinedDosePeer::ATCCODE, $gsAtcCodes->toKeyValue('PrimaryKey', 'Atccode'), $comparison);
        } else {
            throw new PropelException('filterByGsAtcCodes() only accepts arguments of type GsAtcCodes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsAtcCodes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsDailyDefinedDoseQuery The current query, for fluid interface
     */
    public function joinGsAtcCodes($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsAtcCodes');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'GsAtcCodes');
        }

        return $this;
    }

    /**
     * Use the GsAtcCodes relation GsAtcCodes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesQuery A secondary query class using the current class as primary query
     */
    public function useGsAtcCodesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsAtcCodes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsAtcCodes', '\PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsDailyDefinedDoseQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEenheidOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsDailyDefinedDosePeer::DDDEENHEID_THESAURUSNUMMER, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsDailyDefinedDosePeer::DDDEENHEID, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByEenheidOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EenheidOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsDailyDefinedDoseQuery The current query, for fluid interface
     */
    public function joinEenheidOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EenheidOmschrijving');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'EenheidOmschrijving');
        }

        return $this;
    }

    /**
     * Use the EenheidOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useEenheidOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinEenheidOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EenheidOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsDailyDefinedDoseQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByToedieningswegOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsDailyDefinedDosePeer::DDD_TOEDIENINGSWEG_THESAURUSNUMMER, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByToedieningswegOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ToedieningswegOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsDailyDefinedDoseQuery The current query, for fluid interface
     */
    public function joinToedieningswegOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ToedieningswegOmschrijving');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'ToedieningswegOmschrijving');
        }

        return $this;
    }

    /**
     * Use the ToedieningswegOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useToedieningswegOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinToedieningswegOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ToedieningswegOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsDailyDefinedDose $gsDailyDefinedDose Object to remove from the list of results
     *
     * @return GsDailyDefinedDoseQuery The current query, for fluid interface
     */
    public function prune($gsDailyDefinedDose = null)
    {
        if ($gsDailyDefinedDose) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsDailyDefinedDosePeer::ATCCODE), $gsDailyDefinedDose->getAtccode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsDailyDefinedDosePeer::DDDAANTAL), $gsDailyDefinedDose->getDddaantal(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsDailyDefinedDosePeer::DDDEENHEID), $gsDailyDefinedDose->getDddeenheid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(GsDailyDefinedDosePeer::DDDTOEDIENINGSWEG), $gsDailyDefinedDose->getDddtoedieningsweg(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
