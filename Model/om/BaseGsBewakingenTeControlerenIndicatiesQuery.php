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
use PharmaIntelligence\GstandaardBundle\Model\GsBewakingenTeControlerenIndicaties;
use PharmaIntelligence\GstandaardBundle\Model\GsBewakingenTeControlerenIndicatiesPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsBewakingenTeControlerenIndicatiesQuery;

/**
 * @method GsBewakingenTeControlerenIndicatiesQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsBewakingenTeControlerenIndicatiesQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsBewakingenTeControlerenIndicatiesQuery orderByPrkcode($order = Criteria::ASC) Order by the prkcode column
 * @method GsBewakingenTeControlerenIndicatiesQuery orderByHandelsproduktkode($order = Criteria::ASC) Order by the handelsproduktkode column
 * @method GsBewakingenTeControlerenIndicatiesQuery orderByThesnrContraIndicatie($order = Criteria::ASC) Order by the thesnr_contra_indicatie column
 * @method GsBewakingenTeControlerenIndicatiesQuery orderByIndicatieAard($order = Criteria::ASC) Order by the indicatie_aard column
 * @method GsBewakingenTeControlerenIndicatiesQuery orderByBewakingscodeCi($order = Criteria::ASC) Order by the bewakingscode_ci column
 *
 * @method GsBewakingenTeControlerenIndicatiesQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsBewakingenTeControlerenIndicatiesQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsBewakingenTeControlerenIndicatiesQuery groupByPrkcode() Group by the prkcode column
 * @method GsBewakingenTeControlerenIndicatiesQuery groupByHandelsproduktkode() Group by the handelsproduktkode column
 * @method GsBewakingenTeControlerenIndicatiesQuery groupByThesnrContraIndicatie() Group by the thesnr_contra_indicatie column
 * @method GsBewakingenTeControlerenIndicatiesQuery groupByIndicatieAard() Group by the indicatie_aard column
 * @method GsBewakingenTeControlerenIndicatiesQuery groupByBewakingscodeCi() Group by the bewakingscode_ci column
 *
 * @method GsBewakingenTeControlerenIndicatiesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsBewakingenTeControlerenIndicatiesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsBewakingenTeControlerenIndicatiesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsBewakingenTeControlerenIndicaties findOne(PropelPDO $con = null) Return the first GsBewakingenTeControlerenIndicaties matching the query
 * @method GsBewakingenTeControlerenIndicaties findOneOrCreate(PropelPDO $con = null) Return the first GsBewakingenTeControlerenIndicaties matching the query, or a new GsBewakingenTeControlerenIndicaties object populated from the query conditions when no match is found
 *
 * @method GsBewakingenTeControlerenIndicaties findOneByBestandnummer(int $bestandnummer) Return the first GsBewakingenTeControlerenIndicaties filtered by the bestandnummer column
 * @method GsBewakingenTeControlerenIndicaties findOneByMutatiekode(int $mutatiekode) Return the first GsBewakingenTeControlerenIndicaties filtered by the mutatiekode column
 * @method GsBewakingenTeControlerenIndicaties findOneByPrkcode(int $prkcode) Return the first GsBewakingenTeControlerenIndicaties filtered by the prkcode column
 * @method GsBewakingenTeControlerenIndicaties findOneByHandelsproduktkode(int $handelsproduktkode) Return the first GsBewakingenTeControlerenIndicaties filtered by the handelsproduktkode column
 * @method GsBewakingenTeControlerenIndicaties findOneByThesnrContraIndicatie(int $thesnr_contra_indicatie) Return the first GsBewakingenTeControlerenIndicaties filtered by the thesnr_contra_indicatie column
 * @method GsBewakingenTeControlerenIndicaties findOneByIndicatieAard(int $indicatie_aard) Return the first GsBewakingenTeControlerenIndicaties filtered by the indicatie_aard column
 * @method GsBewakingenTeControlerenIndicaties findOneByBewakingscodeCi(int $bewakingscode_ci) Return the first GsBewakingenTeControlerenIndicaties filtered by the bewakingscode_ci column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsBewakingenTeControlerenIndicaties objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsBewakingenTeControlerenIndicaties objects filtered by the mutatiekode column
 * @method array findByPrkcode(int $prkcode) Return GsBewakingenTeControlerenIndicaties objects filtered by the prkcode column
 * @method array findByHandelsproduktkode(int $handelsproduktkode) Return GsBewakingenTeControlerenIndicaties objects filtered by the handelsproduktkode column
 * @method array findByThesnrContraIndicatie(int $thesnr_contra_indicatie) Return GsBewakingenTeControlerenIndicaties objects filtered by the thesnr_contra_indicatie column
 * @method array findByIndicatieAard(int $indicatie_aard) Return GsBewakingenTeControlerenIndicaties objects filtered by the indicatie_aard column
 * @method array findByBewakingscodeCi(int $bewakingscode_ci) Return GsBewakingenTeControlerenIndicaties objects filtered by the bewakingscode_ci column
 */
abstract class BaseGsBewakingenTeControlerenIndicatiesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsBewakingenTeControlerenIndicatiesQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsBewakingenTeControlerenIndicaties';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsBewakingenTeControlerenIndicatiesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsBewakingenTeControlerenIndicatiesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsBewakingenTeControlerenIndicatiesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsBewakingenTeControlerenIndicatiesQuery) {
            return $criteria;
        }
        $query = new GsBewakingenTeControlerenIndicatiesQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$prkcode, $handelsproduktkode, $indicatie_aard, $bewakingscode_ci]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsBewakingenTeControlerenIndicaties|GsBewakingenTeControlerenIndicaties[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsBewakingenTeControlerenIndicatiesPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsBewakingenTeControlerenIndicatiesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsBewakingenTeControlerenIndicaties A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `prkcode`, `handelsproduktkode`, `thesnr_contra_indicatie`, `indicatie_aard`, `bewakingscode_ci` FROM `gs_bewakingen_te_controleren_indicaties` WHERE `prkcode` = :p0 AND `handelsproduktkode` = :p1 AND `indicatie_aard` = :p2 AND `bewakingscode_ci` = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsBewakingenTeControlerenIndicaties();
            $obj->hydrate($row);
            GsBewakingenTeControlerenIndicatiesPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3])));
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
     * @return GsBewakingenTeControlerenIndicaties|GsBewakingenTeControlerenIndicaties[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsBewakingenTeControlerenIndicaties[]|mixed the list of results, formatted by the current formatter
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
     * @return GsBewakingenTeControlerenIndicatiesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::PRKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::HANDELSPRODUKTKODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::INDICATIE_AARD, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::BEWAKINGSCODE_CI, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsBewakingenTeControlerenIndicatiesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsBewakingenTeControlerenIndicatiesPeer::PRKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsBewakingenTeControlerenIndicatiesPeer::HANDELSPRODUKTKODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsBewakingenTeControlerenIndicatiesPeer::INDICATIE_AARD, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(GsBewakingenTeControlerenIndicatiesPeer::BEWAKINGSCODE_CI, $key[3], Criteria::EQUAL);
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
     * @return GsBewakingenTeControlerenIndicatiesQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsBewakingenTeControlerenIndicatiesQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the prkcode column
     *
     * Example usage:
     * <code>
     * $query->filterByPrkcode(1234); // WHERE prkcode = 1234
     * $query->filterByPrkcode(array(12, 34)); // WHERE prkcode IN (12, 34)
     * $query->filterByPrkcode(array('min' => 12)); // WHERE prkcode >= 12
     * $query->filterByPrkcode(array('max' => 12)); // WHERE prkcode <= 12
     * </code>
     *
     * @param     mixed $prkcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBewakingenTeControlerenIndicatiesQuery The current query, for fluid interface
     */
    public function filterByPrkcode($prkcode = null, $comparison = null)
    {
        if (is_array($prkcode)) {
            $useMinMax = false;
            if (isset($prkcode['min'])) {
                $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::PRKCODE, $prkcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prkcode['max'])) {
                $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::PRKCODE, $prkcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::PRKCODE, $prkcode, $comparison);
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
     * @return GsBewakingenTeControlerenIndicatiesQuery The current query, for fluid interface
     */
    public function filterByHandelsproduktkode($handelsproduktkode = null, $comparison = null)
    {
        if (is_array($handelsproduktkode)) {
            $useMinMax = false;
            if (isset($handelsproduktkode['min'])) {
                $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::HANDELSPRODUKTKODE, $handelsproduktkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($handelsproduktkode['max'])) {
                $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::HANDELSPRODUKTKODE, $handelsproduktkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::HANDELSPRODUKTKODE, $handelsproduktkode, $comparison);
    }

    /**
     * Filter the query on the thesnr_contra_indicatie column
     *
     * Example usage:
     * <code>
     * $query->filterByThesnrContraIndicatie(1234); // WHERE thesnr_contra_indicatie = 1234
     * $query->filterByThesnrContraIndicatie(array(12, 34)); // WHERE thesnr_contra_indicatie IN (12, 34)
     * $query->filterByThesnrContraIndicatie(array('min' => 12)); // WHERE thesnr_contra_indicatie >= 12
     * $query->filterByThesnrContraIndicatie(array('max' => 12)); // WHERE thesnr_contra_indicatie <= 12
     * </code>
     *
     * @param     mixed $thesnrContraIndicatie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBewakingenTeControlerenIndicatiesQuery The current query, for fluid interface
     */
    public function filterByThesnrContraIndicatie($thesnrContraIndicatie = null, $comparison = null)
    {
        if (is_array($thesnrContraIndicatie)) {
            $useMinMax = false;
            if (isset($thesnrContraIndicatie['min'])) {
                $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::THESNR_CONTRA_INDICATIE, $thesnrContraIndicatie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesnrContraIndicatie['max'])) {
                $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::THESNR_CONTRA_INDICATIE, $thesnrContraIndicatie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::THESNR_CONTRA_INDICATIE, $thesnrContraIndicatie, $comparison);
    }

    /**
     * Filter the query on the indicatie_aard column
     *
     * Example usage:
     * <code>
     * $query->filterByIndicatieAard(1234); // WHERE indicatie_aard = 1234
     * $query->filterByIndicatieAard(array(12, 34)); // WHERE indicatie_aard IN (12, 34)
     * $query->filterByIndicatieAard(array('min' => 12)); // WHERE indicatie_aard >= 12
     * $query->filterByIndicatieAard(array('max' => 12)); // WHERE indicatie_aard <= 12
     * </code>
     *
     * @param     mixed $indicatieAard The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBewakingenTeControlerenIndicatiesQuery The current query, for fluid interface
     */
    public function filterByIndicatieAard($indicatieAard = null, $comparison = null)
    {
        if (is_array($indicatieAard)) {
            $useMinMax = false;
            if (isset($indicatieAard['min'])) {
                $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::INDICATIE_AARD, $indicatieAard['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indicatieAard['max'])) {
                $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::INDICATIE_AARD, $indicatieAard['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::INDICATIE_AARD, $indicatieAard, $comparison);
    }

    /**
     * Filter the query on the bewakingscode_ci column
     *
     * Example usage:
     * <code>
     * $query->filterByBewakingscodeCi(1234); // WHERE bewakingscode_ci = 1234
     * $query->filterByBewakingscodeCi(array(12, 34)); // WHERE bewakingscode_ci IN (12, 34)
     * $query->filterByBewakingscodeCi(array('min' => 12)); // WHERE bewakingscode_ci >= 12
     * $query->filterByBewakingscodeCi(array('max' => 12)); // WHERE bewakingscode_ci <= 12
     * </code>
     *
     * @param     mixed $bewakingscodeCi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBewakingenTeControlerenIndicatiesQuery The current query, for fluid interface
     */
    public function filterByBewakingscodeCi($bewakingscodeCi = null, $comparison = null)
    {
        if (is_array($bewakingscodeCi)) {
            $useMinMax = false;
            if (isset($bewakingscodeCi['min'])) {
                $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::BEWAKINGSCODE_CI, $bewakingscodeCi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bewakingscodeCi['max'])) {
                $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::BEWAKINGSCODE_CI, $bewakingscodeCi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenTeControlerenIndicatiesPeer::BEWAKINGSCODE_CI, $bewakingscodeCi, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsBewakingenTeControlerenIndicaties $gsBewakingenTeControlerenIndicaties Object to remove from the list of results
     *
     * @return GsBewakingenTeControlerenIndicatiesQuery The current query, for fluid interface
     */
    public function prune($gsBewakingenTeControlerenIndicaties = null)
    {
        if ($gsBewakingenTeControlerenIndicaties) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsBewakingenTeControlerenIndicatiesPeer::PRKCODE), $gsBewakingenTeControlerenIndicaties->getPrkcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsBewakingenTeControlerenIndicatiesPeer::HANDELSPRODUKTKODE), $gsBewakingenTeControlerenIndicaties->getHandelsproduktkode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsBewakingenTeControlerenIndicatiesPeer::INDICATIE_AARD), $gsBewakingenTeControlerenIndicaties->getIndicatieAard(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(GsBewakingenTeControlerenIndicatiesPeer::BEWAKINGSCODE_CI), $gsBewakingenTeControlerenIndicaties->getBewakingscodeCi(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
