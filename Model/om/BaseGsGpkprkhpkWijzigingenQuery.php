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
use PharmaIntelligence\GstandaardBundle\Model\GsGpkprkhpkWijzigingen;
use PharmaIntelligence\GstandaardBundle\Model\GsGpkprkhpkWijzigingenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsGpkprkhpkWijzigingenQuery;

/**
 * @method GsGpkprkhpkWijzigingenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsGpkprkhpkWijzigingenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsGpkprkhpkWijzigingenQuery orderByGeneriekeproductcode($order = Criteria::ASC) Order by the generiekeproductcode column
 * @method GsGpkprkhpkWijzigingenQuery orderByPrkcode($order = Criteria::ASC) Order by the prkcode column
 * @method GsGpkprkhpkWijzigingenQuery orderByHandelsproduktkode($order = Criteria::ASC) Order by the handelsproduktkode column
 * @method GsGpkprkhpkWijzigingenQuery orderByDatumWijzigingopsplitsingOpDdmmjjjj($order = Criteria::ASC) Order by the datum_wijzigingopsplitsing_op_ddmmjjjj column
 * @method GsGpkprkhpkWijzigingenQuery orderByThesaurusRedenWijziging($order = Criteria::ASC) Order by the thesaurus_reden_wijziging column
 * @method GsGpkprkhpkWijzigingenQuery orderByRedenVanWijzigingItemnummer($order = Criteria::ASC) Order by the reden_van_wijziging_itemnummer column
 * @method GsGpkprkhpkWijzigingenQuery orderByGeneriekeproductcodeNieuw($order = Criteria::ASC) Order by the generiekeproductcode_nieuw column
 * @method GsGpkprkhpkWijzigingenQuery orderByPrescriptiecodeNieuw($order = Criteria::ASC) Order by the prescriptiecode_nieuw column
 *
 * @method GsGpkprkhpkWijzigingenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsGpkprkhpkWijzigingenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsGpkprkhpkWijzigingenQuery groupByGeneriekeproductcode() Group by the generiekeproductcode column
 * @method GsGpkprkhpkWijzigingenQuery groupByPrkcode() Group by the prkcode column
 * @method GsGpkprkhpkWijzigingenQuery groupByHandelsproduktkode() Group by the handelsproduktkode column
 * @method GsGpkprkhpkWijzigingenQuery groupByDatumWijzigingopsplitsingOpDdmmjjjj() Group by the datum_wijzigingopsplitsing_op_ddmmjjjj column
 * @method GsGpkprkhpkWijzigingenQuery groupByThesaurusRedenWijziging() Group by the thesaurus_reden_wijziging column
 * @method GsGpkprkhpkWijzigingenQuery groupByRedenVanWijzigingItemnummer() Group by the reden_van_wijziging_itemnummer column
 * @method GsGpkprkhpkWijzigingenQuery groupByGeneriekeproductcodeNieuw() Group by the generiekeproductcode_nieuw column
 * @method GsGpkprkhpkWijzigingenQuery groupByPrescriptiecodeNieuw() Group by the prescriptiecode_nieuw column
 *
 * @method GsGpkprkhpkWijzigingenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsGpkprkhpkWijzigingenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsGpkprkhpkWijzigingenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsGpkprkhpkWijzigingen findOne(PropelPDO $con = null) Return the first GsGpkprkhpkWijzigingen matching the query
 * @method GsGpkprkhpkWijzigingen findOneOrCreate(PropelPDO $con = null) Return the first GsGpkprkhpkWijzigingen matching the query, or a new GsGpkprkhpkWijzigingen object populated from the query conditions when no match is found
 *
 * @method GsGpkprkhpkWijzigingen findOneByBestandnummer(int $bestandnummer) Return the first GsGpkprkhpkWijzigingen filtered by the bestandnummer column
 * @method GsGpkprkhpkWijzigingen findOneByMutatiekode(int $mutatiekode) Return the first GsGpkprkhpkWijzigingen filtered by the mutatiekode column
 * @method GsGpkprkhpkWijzigingen findOneByGeneriekeproductcode(int $generiekeproductcode) Return the first GsGpkprkhpkWijzigingen filtered by the generiekeproductcode column
 * @method GsGpkprkhpkWijzigingen findOneByPrkcode(int $prkcode) Return the first GsGpkprkhpkWijzigingen filtered by the prkcode column
 * @method GsGpkprkhpkWijzigingen findOneByHandelsproduktkode(int $handelsproduktkode) Return the first GsGpkprkhpkWijzigingen filtered by the handelsproduktkode column
 * @method GsGpkprkhpkWijzigingen findOneByDatumWijzigingopsplitsingOpDdmmjjjj(int $datum_wijzigingopsplitsing_op_ddmmjjjj) Return the first GsGpkprkhpkWijzigingen filtered by the datum_wijzigingopsplitsing_op_ddmmjjjj column
 * @method GsGpkprkhpkWijzigingen findOneByThesaurusRedenWijziging(int $thesaurus_reden_wijziging) Return the first GsGpkprkhpkWijzigingen filtered by the thesaurus_reden_wijziging column
 * @method GsGpkprkhpkWijzigingen findOneByRedenVanWijzigingItemnummer(int $reden_van_wijziging_itemnummer) Return the first GsGpkprkhpkWijzigingen filtered by the reden_van_wijziging_itemnummer column
 * @method GsGpkprkhpkWijzigingen findOneByGeneriekeproductcodeNieuw(int $generiekeproductcode_nieuw) Return the first GsGpkprkhpkWijzigingen filtered by the generiekeproductcode_nieuw column
 * @method GsGpkprkhpkWijzigingen findOneByPrescriptiecodeNieuw(int $prescriptiecode_nieuw) Return the first GsGpkprkhpkWijzigingen filtered by the prescriptiecode_nieuw column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsGpkprkhpkWijzigingen objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsGpkprkhpkWijzigingen objects filtered by the mutatiekode column
 * @method array findByGeneriekeproductcode(int $generiekeproductcode) Return GsGpkprkhpkWijzigingen objects filtered by the generiekeproductcode column
 * @method array findByPrkcode(int $prkcode) Return GsGpkprkhpkWijzigingen objects filtered by the prkcode column
 * @method array findByHandelsproduktkode(int $handelsproduktkode) Return GsGpkprkhpkWijzigingen objects filtered by the handelsproduktkode column
 * @method array findByDatumWijzigingopsplitsingOpDdmmjjjj(int $datum_wijzigingopsplitsing_op_ddmmjjjj) Return GsGpkprkhpkWijzigingen objects filtered by the datum_wijzigingopsplitsing_op_ddmmjjjj column
 * @method array findByThesaurusRedenWijziging(int $thesaurus_reden_wijziging) Return GsGpkprkhpkWijzigingen objects filtered by the thesaurus_reden_wijziging column
 * @method array findByRedenVanWijzigingItemnummer(int $reden_van_wijziging_itemnummer) Return GsGpkprkhpkWijzigingen objects filtered by the reden_van_wijziging_itemnummer column
 * @method array findByGeneriekeproductcodeNieuw(int $generiekeproductcode_nieuw) Return GsGpkprkhpkWijzigingen objects filtered by the generiekeproductcode_nieuw column
 * @method array findByPrescriptiecodeNieuw(int $prescriptiecode_nieuw) Return GsGpkprkhpkWijzigingen objects filtered by the prescriptiecode_nieuw column
 */
abstract class BaseGsGpkprkhpkWijzigingenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsGpkprkhpkWijzigingenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGpkprkhpkWijzigingen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsGpkprkhpkWijzigingenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsGpkprkhpkWijzigingenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsGpkprkhpkWijzigingenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsGpkprkhpkWijzigingenQuery) {
            return $criteria;
        }
        $query = new GsGpkprkhpkWijzigingenQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$generiekeproductcode, $prkcode, $handelsproduktkode, $datum_wijzigingopsplitsing_op_ddmmjjjj]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsGpkprkhpkWijzigingen|GsGpkprkhpkWijzigingen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsGpkprkhpkWijzigingenPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsGpkprkhpkWijzigingenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsGpkprkhpkWijzigingen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `generiekeproductcode`, `prkcode`, `handelsproduktkode`, `datum_wijzigingopsplitsing_op_ddmmjjjj`, `thesaurus_reden_wijziging`, `reden_van_wijziging_itemnummer`, `generiekeproductcode_nieuw`, `prescriptiecode_nieuw` FROM `gs_gpkprkhpk_wijzigingen` WHERE `generiekeproductcode` = :p0 AND `prkcode` = :p1 AND `handelsproduktkode` = :p2 AND `datum_wijzigingopsplitsing_op_ddmmjjjj` = :p3';
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
            $obj = new GsGpkprkhpkWijzigingen();
            $obj->hydrate($row);
            GsGpkprkhpkWijzigingenPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3])));
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
     * @return GsGpkprkhpkWijzigingen|GsGpkprkhpkWijzigingen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsGpkprkhpkWijzigingen[]|mixed the list of results, formatted by the current formatter
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
     * @return GsGpkprkhpkWijzigingenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::GENERIEKEPRODUCTCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::PRKCODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::HANDELSPRODUKTKODE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::DATUM_WIJZIGINGOPSPLITSING_OP_DDMMJJJJ, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsGpkprkhpkWijzigingenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsGpkprkhpkWijzigingenPeer::GENERIEKEPRODUCTCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsGpkprkhpkWijzigingenPeer::PRKCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsGpkprkhpkWijzigingenPeer::HANDELSPRODUKTKODE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(GsGpkprkhpkWijzigingenPeer::DATUM_WIJZIGINGOPSPLITSING_OP_DDMMJJJJ, $key[3], Criteria::EQUAL);
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
     * @return GsGpkprkhpkWijzigingenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsGpkprkhpkWijzigingenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the generiekeproductcode column
     *
     * Example usage:
     * <code>
     * $query->filterByGeneriekeproductcode(1234); // WHERE generiekeproductcode = 1234
     * $query->filterByGeneriekeproductcode(array(12, 34)); // WHERE generiekeproductcode IN (12, 34)
     * $query->filterByGeneriekeproductcode(array('min' => 12)); // WHERE generiekeproductcode >= 12
     * $query->filterByGeneriekeproductcode(array('max' => 12)); // WHERE generiekeproductcode <= 12
     * </code>
     *
     * @param     mixed $generiekeproductcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGpkprkhpkWijzigingenQuery The current query, for fluid interface
     */
    public function filterByGeneriekeproductcode($generiekeproductcode = null, $comparison = null)
    {
        if (is_array($generiekeproductcode)) {
            $useMinMax = false;
            if (isset($generiekeproductcode['min'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($generiekeproductcode['max'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode, $comparison);
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
     * @return GsGpkprkhpkWijzigingenQuery The current query, for fluid interface
     */
    public function filterByPrkcode($prkcode = null, $comparison = null)
    {
        if (is_array($prkcode)) {
            $useMinMax = false;
            if (isset($prkcode['min'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::PRKCODE, $prkcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prkcode['max'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::PRKCODE, $prkcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::PRKCODE, $prkcode, $comparison);
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
     * @return GsGpkprkhpkWijzigingenQuery The current query, for fluid interface
     */
    public function filterByHandelsproduktkode($handelsproduktkode = null, $comparison = null)
    {
        if (is_array($handelsproduktkode)) {
            $useMinMax = false;
            if (isset($handelsproduktkode['min'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::HANDELSPRODUKTKODE, $handelsproduktkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($handelsproduktkode['max'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::HANDELSPRODUKTKODE, $handelsproduktkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::HANDELSPRODUKTKODE, $handelsproduktkode, $comparison);
    }

    /**
     * Filter the query on the datum_wijzigingopsplitsing_op_ddmmjjjj column
     *
     * Example usage:
     * <code>
     * $query->filterByDatumWijzigingopsplitsingOpDdmmjjjj(1234); // WHERE datum_wijzigingopsplitsing_op_ddmmjjjj = 1234
     * $query->filterByDatumWijzigingopsplitsingOpDdmmjjjj(array(12, 34)); // WHERE datum_wijzigingopsplitsing_op_ddmmjjjj IN (12, 34)
     * $query->filterByDatumWijzigingopsplitsingOpDdmmjjjj(array('min' => 12)); // WHERE datum_wijzigingopsplitsing_op_ddmmjjjj >= 12
     * $query->filterByDatumWijzigingopsplitsingOpDdmmjjjj(array('max' => 12)); // WHERE datum_wijzigingopsplitsing_op_ddmmjjjj <= 12
     * </code>
     *
     * @param     mixed $datumWijzigingopsplitsingOpDdmmjjjj The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGpkprkhpkWijzigingenQuery The current query, for fluid interface
     */
    public function filterByDatumWijzigingopsplitsingOpDdmmjjjj($datumWijzigingopsplitsingOpDdmmjjjj = null, $comparison = null)
    {
        if (is_array($datumWijzigingopsplitsingOpDdmmjjjj)) {
            $useMinMax = false;
            if (isset($datumWijzigingopsplitsingOpDdmmjjjj['min'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::DATUM_WIJZIGINGOPSPLITSING_OP_DDMMJJJJ, $datumWijzigingopsplitsingOpDdmmjjjj['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumWijzigingopsplitsingOpDdmmjjjj['max'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::DATUM_WIJZIGINGOPSPLITSING_OP_DDMMJJJJ, $datumWijzigingopsplitsingOpDdmmjjjj['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::DATUM_WIJZIGINGOPSPLITSING_OP_DDMMJJJJ, $datumWijzigingopsplitsingOpDdmmjjjj, $comparison);
    }

    /**
     * Filter the query on the thesaurus_reden_wijziging column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusRedenWijziging(1234); // WHERE thesaurus_reden_wijziging = 1234
     * $query->filterByThesaurusRedenWijziging(array(12, 34)); // WHERE thesaurus_reden_wijziging IN (12, 34)
     * $query->filterByThesaurusRedenWijziging(array('min' => 12)); // WHERE thesaurus_reden_wijziging >= 12
     * $query->filterByThesaurusRedenWijziging(array('max' => 12)); // WHERE thesaurus_reden_wijziging <= 12
     * </code>
     *
     * @param     mixed $thesaurusRedenWijziging The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGpkprkhpkWijzigingenQuery The current query, for fluid interface
     */
    public function filterByThesaurusRedenWijziging($thesaurusRedenWijziging = null, $comparison = null)
    {
        if (is_array($thesaurusRedenWijziging)) {
            $useMinMax = false;
            if (isset($thesaurusRedenWijziging['min'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::THESAURUS_REDEN_WIJZIGING, $thesaurusRedenWijziging['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusRedenWijziging['max'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::THESAURUS_REDEN_WIJZIGING, $thesaurusRedenWijziging['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::THESAURUS_REDEN_WIJZIGING, $thesaurusRedenWijziging, $comparison);
    }

    /**
     * Filter the query on the reden_van_wijziging_itemnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByRedenVanWijzigingItemnummer(1234); // WHERE reden_van_wijziging_itemnummer = 1234
     * $query->filterByRedenVanWijzigingItemnummer(array(12, 34)); // WHERE reden_van_wijziging_itemnummer IN (12, 34)
     * $query->filterByRedenVanWijzigingItemnummer(array('min' => 12)); // WHERE reden_van_wijziging_itemnummer >= 12
     * $query->filterByRedenVanWijzigingItemnummer(array('max' => 12)); // WHERE reden_van_wijziging_itemnummer <= 12
     * </code>
     *
     * @param     mixed $redenVanWijzigingItemnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGpkprkhpkWijzigingenQuery The current query, for fluid interface
     */
    public function filterByRedenVanWijzigingItemnummer($redenVanWijzigingItemnummer = null, $comparison = null)
    {
        if (is_array($redenVanWijzigingItemnummer)) {
            $useMinMax = false;
            if (isset($redenVanWijzigingItemnummer['min'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::REDEN_VAN_WIJZIGING_ITEMNUMMER, $redenVanWijzigingItemnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($redenVanWijzigingItemnummer['max'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::REDEN_VAN_WIJZIGING_ITEMNUMMER, $redenVanWijzigingItemnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::REDEN_VAN_WIJZIGING_ITEMNUMMER, $redenVanWijzigingItemnummer, $comparison);
    }

    /**
     * Filter the query on the generiekeproductcode_nieuw column
     *
     * Example usage:
     * <code>
     * $query->filterByGeneriekeproductcodeNieuw(1234); // WHERE generiekeproductcode_nieuw = 1234
     * $query->filterByGeneriekeproductcodeNieuw(array(12, 34)); // WHERE generiekeproductcode_nieuw IN (12, 34)
     * $query->filterByGeneriekeproductcodeNieuw(array('min' => 12)); // WHERE generiekeproductcode_nieuw >= 12
     * $query->filterByGeneriekeproductcodeNieuw(array('max' => 12)); // WHERE generiekeproductcode_nieuw <= 12
     * </code>
     *
     * @param     mixed $generiekeproductcodeNieuw The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGpkprkhpkWijzigingenQuery The current query, for fluid interface
     */
    public function filterByGeneriekeproductcodeNieuw($generiekeproductcodeNieuw = null, $comparison = null)
    {
        if (is_array($generiekeproductcodeNieuw)) {
            $useMinMax = false;
            if (isset($generiekeproductcodeNieuw['min'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::GENERIEKEPRODUCTCODE_NIEUW, $generiekeproductcodeNieuw['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($generiekeproductcodeNieuw['max'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::GENERIEKEPRODUCTCODE_NIEUW, $generiekeproductcodeNieuw['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::GENERIEKEPRODUCTCODE_NIEUW, $generiekeproductcodeNieuw, $comparison);
    }

    /**
     * Filter the query on the prescriptiecode_nieuw column
     *
     * Example usage:
     * <code>
     * $query->filterByPrescriptiecodeNieuw(1234); // WHERE prescriptiecode_nieuw = 1234
     * $query->filterByPrescriptiecodeNieuw(array(12, 34)); // WHERE prescriptiecode_nieuw IN (12, 34)
     * $query->filterByPrescriptiecodeNieuw(array('min' => 12)); // WHERE prescriptiecode_nieuw >= 12
     * $query->filterByPrescriptiecodeNieuw(array('max' => 12)); // WHERE prescriptiecode_nieuw <= 12
     * </code>
     *
     * @param     mixed $prescriptiecodeNieuw The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGpkprkhpkWijzigingenQuery The current query, for fluid interface
     */
    public function filterByPrescriptiecodeNieuw($prescriptiecodeNieuw = null, $comparison = null)
    {
        if (is_array($prescriptiecodeNieuw)) {
            $useMinMax = false;
            if (isset($prescriptiecodeNieuw['min'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::PRESCRIPTIECODE_NIEUW, $prescriptiecodeNieuw['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prescriptiecodeNieuw['max'])) {
                $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::PRESCRIPTIECODE_NIEUW, $prescriptiecodeNieuw['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGpkprkhpkWijzigingenPeer::PRESCRIPTIECODE_NIEUW, $prescriptiecodeNieuw, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsGpkprkhpkWijzigingen $gsGpkprkhpkWijzigingen Object to remove from the list of results
     *
     * @return GsGpkprkhpkWijzigingenQuery The current query, for fluid interface
     */
    public function prune($gsGpkprkhpkWijzigingen = null)
    {
        if ($gsGpkprkhpkWijzigingen) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsGpkprkhpkWijzigingenPeer::GENERIEKEPRODUCTCODE), $gsGpkprkhpkWijzigingen->getGeneriekeproductcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsGpkprkhpkWijzigingenPeer::PRKCODE), $gsGpkprkhpkWijzigingen->getPrkcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsGpkprkhpkWijzigingenPeer::HANDELSPRODUKTKODE), $gsGpkprkhpkWijzigingen->getHandelsproduktkode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(GsGpkprkhpkWijzigingenPeer::DATUM_WIJZIGINGOPSPLITSING_OP_DDMMJJJJ), $gsGpkprkhpkWijzigingen->getDatumWijzigingopsplitsingOpDdmmjjjj(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
