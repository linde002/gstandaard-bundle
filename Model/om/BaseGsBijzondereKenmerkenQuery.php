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
use PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerken;
use PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerkenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerkenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProduct;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;

/**
 * @method GsBijzondereKenmerkenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsBijzondereKenmerkenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsBijzondereKenmerkenQuery orderByPrkcode($order = Criteria::ASC) Order by the prkcode column
 * @method GsBijzondereKenmerkenQuery orderByHandelsproduktkode($order = Criteria::ASC) Order by the handelsproduktkode column
 * @method GsBijzondereKenmerkenQuery orderByThesnrBijzondereKenmerken($order = Criteria::ASC) Order by the thesnr_bijzondere_kenmerken column
 * @method GsBijzondereKenmerkenQuery orderByBijzondereKenmerk($order = Criteria::ASC) Order by the bijzondere_kenmerk column
 *
 * @method GsBijzondereKenmerkenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsBijzondereKenmerkenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsBijzondereKenmerkenQuery groupByPrkcode() Group by the prkcode column
 * @method GsBijzondereKenmerkenQuery groupByHandelsproduktkode() Group by the handelsproduktkode column
 * @method GsBijzondereKenmerkenQuery groupByThesnrBijzondereKenmerken() Group by the thesnr_bijzondere_kenmerken column
 * @method GsBijzondereKenmerkenQuery groupByBijzondereKenmerk() Group by the bijzondere_kenmerk column
 *
 * @method GsBijzondereKenmerkenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsBijzondereKenmerkenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsBijzondereKenmerkenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsBijzondereKenmerkenQuery leftJoinKenmerkOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the KenmerkOmschrijving relation
 * @method GsBijzondereKenmerkenQuery rightJoinKenmerkOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the KenmerkOmschrijving relation
 * @method GsBijzondereKenmerkenQuery innerJoinKenmerkOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the KenmerkOmschrijving relation
 *
 * @method GsBijzondereKenmerkenQuery leftJoinGsHandelsproducten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproducten relation
 * @method GsBijzondereKenmerkenQuery rightJoinGsHandelsproducten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproducten relation
 * @method GsBijzondereKenmerkenQuery innerJoinGsHandelsproducten($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproducten relation
 *
 * @method GsBijzondereKenmerkenQuery leftJoinGsPrescriptieProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsPrescriptieProduct relation
 * @method GsBijzondereKenmerkenQuery rightJoinGsPrescriptieProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsPrescriptieProduct relation
 * @method GsBijzondereKenmerkenQuery innerJoinGsPrescriptieProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the GsPrescriptieProduct relation
 *
 * @method GsBijzondereKenmerken findOne(PropelPDO $con = null) Return the first GsBijzondereKenmerken matching the query
 * @method GsBijzondereKenmerken findOneOrCreate(PropelPDO $con = null) Return the first GsBijzondereKenmerken matching the query, or a new GsBijzondereKenmerken object populated from the query conditions when no match is found
 *
 * @method GsBijzondereKenmerken findOneByBestandnummer(int $bestandnummer) Return the first GsBijzondereKenmerken filtered by the bestandnummer column
 * @method GsBijzondereKenmerken findOneByMutatiekode(int $mutatiekode) Return the first GsBijzondereKenmerken filtered by the mutatiekode column
 * @method GsBijzondereKenmerken findOneByPrkcode(int $prkcode) Return the first GsBijzondereKenmerken filtered by the prkcode column
 * @method GsBijzondereKenmerken findOneByHandelsproduktkode(int $handelsproduktkode) Return the first GsBijzondereKenmerken filtered by the handelsproduktkode column
 * @method GsBijzondereKenmerken findOneByThesnrBijzondereKenmerken(int $thesnr_bijzondere_kenmerken) Return the first GsBijzondereKenmerken filtered by the thesnr_bijzondere_kenmerken column
 * @method GsBijzondereKenmerken findOneByBijzondereKenmerk(int $bijzondere_kenmerk) Return the first GsBijzondereKenmerken filtered by the bijzondere_kenmerk column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsBijzondereKenmerken objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsBijzondereKenmerken objects filtered by the mutatiekode column
 * @method array findByPrkcode(int $prkcode) Return GsBijzondereKenmerken objects filtered by the prkcode column
 * @method array findByHandelsproduktkode(int $handelsproduktkode) Return GsBijzondereKenmerken objects filtered by the handelsproduktkode column
 * @method array findByThesnrBijzondereKenmerken(int $thesnr_bijzondere_kenmerken) Return GsBijzondereKenmerken objects filtered by the thesnr_bijzondere_kenmerken column
 * @method array findByBijzondereKenmerk(int $bijzondere_kenmerk) Return GsBijzondereKenmerken objects filtered by the bijzondere_kenmerk column
 */
abstract class BaseGsBijzondereKenmerkenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsBijzondereKenmerkenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsBijzondereKenmerken';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsBijzondereKenmerkenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsBijzondereKenmerkenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsBijzondereKenmerkenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsBijzondereKenmerkenQuery) {
            return $criteria;
        }
        $query = new GsBijzondereKenmerkenQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$prkcode, $handelsproduktkode, $bijzondere_kenmerk]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsBijzondereKenmerken|GsBijzondereKenmerken[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsBijzondereKenmerkenPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsBijzondereKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsBijzondereKenmerken A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `prkcode`, `handelsproduktkode`, `thesnr_bijzondere_kenmerken`, `bijzondere_kenmerk` FROM `gs_bijzondere_kenmerken` WHERE `prkcode` = :p0 AND `handelsproduktkode` = :p1 AND `bijzondere_kenmerk` = :p2';
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
            $obj = new GsBijzondereKenmerken();
            $obj->hydrate($row);
            GsBijzondereKenmerkenPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return GsBijzondereKenmerken|GsBijzondereKenmerken[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsBijzondereKenmerken[]|mixed the list of results, formatted by the current formatter
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
     * @return GsBijzondereKenmerkenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsBijzondereKenmerkenPeer::PRKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsBijzondereKenmerkenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsBijzondereKenmerkenPeer::PRKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, $key[2], Criteria::EQUAL);
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
     * @return GsBijzondereKenmerkenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsBijzondereKenmerkenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsBijzondereKenmerkenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBijzondereKenmerkenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsBijzondereKenmerkenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsBijzondereKenmerkenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsBijzondereKenmerkenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBijzondereKenmerkenPeer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @see       filterByGsPrescriptieProduct()
     *
     * @param     mixed $prkcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBijzondereKenmerkenQuery The current query, for fluid interface
     */
    public function filterByPrkcode($prkcode = null, $comparison = null)
    {
        if (is_array($prkcode)) {
            $useMinMax = false;
            if (isset($prkcode['min'])) {
                $this->addUsingAlias(GsBijzondereKenmerkenPeer::PRKCODE, $prkcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prkcode['max'])) {
                $this->addUsingAlias(GsBijzondereKenmerkenPeer::PRKCODE, $prkcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBijzondereKenmerkenPeer::PRKCODE, $prkcode, $comparison);
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
     * @see       filterByGsHandelsproducten()
     *
     * @param     mixed $handelsproduktkode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBijzondereKenmerkenQuery The current query, for fluid interface
     */
    public function filterByHandelsproduktkode($handelsproduktkode = null, $comparison = null)
    {
        if (is_array($handelsproduktkode)) {
            $useMinMax = false;
            if (isset($handelsproduktkode['min'])) {
                $this->addUsingAlias(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, $handelsproduktkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($handelsproduktkode['max'])) {
                $this->addUsingAlias(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, $handelsproduktkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, $handelsproduktkode, $comparison);
    }

    /**
     * Filter the query on the thesnr_bijzondere_kenmerken column
     *
     * Example usage:
     * <code>
     * $query->filterByThesnrBijzondereKenmerken(1234); // WHERE thesnr_bijzondere_kenmerken = 1234
     * $query->filterByThesnrBijzondereKenmerken(array(12, 34)); // WHERE thesnr_bijzondere_kenmerken IN (12, 34)
     * $query->filterByThesnrBijzondereKenmerken(array('min' => 12)); // WHERE thesnr_bijzondere_kenmerken >= 12
     * $query->filterByThesnrBijzondereKenmerken(array('max' => 12)); // WHERE thesnr_bijzondere_kenmerken <= 12
     * </code>
     *
     * @see       filterByKenmerkOmschrijving()
     *
     * @param     mixed $thesnrBijzondereKenmerken The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBijzondereKenmerkenQuery The current query, for fluid interface
     */
    public function filterByThesnrBijzondereKenmerken($thesnrBijzondereKenmerken = null, $comparison = null)
    {
        if (is_array($thesnrBijzondereKenmerken)) {
            $useMinMax = false;
            if (isset($thesnrBijzondereKenmerken['min'])) {
                $this->addUsingAlias(GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN, $thesnrBijzondereKenmerken['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesnrBijzondereKenmerken['max'])) {
                $this->addUsingAlias(GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN, $thesnrBijzondereKenmerken['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN, $thesnrBijzondereKenmerken, $comparison);
    }

    /**
     * Filter the query on the bijzondere_kenmerk column
     *
     * Example usage:
     * <code>
     * $query->filterByBijzondereKenmerk(1234); // WHERE bijzondere_kenmerk = 1234
     * $query->filterByBijzondereKenmerk(array(12, 34)); // WHERE bijzondere_kenmerk IN (12, 34)
     * $query->filterByBijzondereKenmerk(array('min' => 12)); // WHERE bijzondere_kenmerk >= 12
     * $query->filterByBijzondereKenmerk(array('max' => 12)); // WHERE bijzondere_kenmerk <= 12
     * </code>
     *
     * @see       filterByKenmerkOmschrijving()
     *
     * @param     mixed $bijzondereKenmerk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBijzondereKenmerkenQuery The current query, for fluid interface
     */
    public function filterByBijzondereKenmerk($bijzondereKenmerk = null, $comparison = null)
    {
        if (is_array($bijzondereKenmerk)) {
            $useMinMax = false;
            if (isset($bijzondereKenmerk['min'])) {
                $this->addUsingAlias(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, $bijzondereKenmerk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bijzondereKenmerk['max'])) {
                $this->addUsingAlias(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, $bijzondereKenmerk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, $bijzondereKenmerk, $comparison);
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsBijzondereKenmerkenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByKenmerkOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsBijzondereKenmerkenPeer::THESNR_BIJZONDERE_KENMERKEN, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByKenmerkOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the KenmerkOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsBijzondereKenmerkenQuery The current query, for fluid interface
     */
    public function joinKenmerkOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('KenmerkOmschrijving');

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
            $this->addJoinObject($join, 'KenmerkOmschrijving');
        }

        return $this;
    }

    /**
     * Use the KenmerkOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useKenmerkOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinKenmerkOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'KenmerkOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsBijzondereKenmerkenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproducten($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, $gsHandelsproducten->getHandelsproduktkode(), $comparison);
        } elseif ($gsHandelsproducten instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE, $gsHandelsproducten->toKeyValue('PrimaryKey', 'Handelsproduktkode'), $comparison);
        } else {
            throw new PropelException('filterByGsHandelsproducten() only accepts arguments of type GsHandelsproducten or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsHandelsproducten relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsBijzondereKenmerkenQuery The current query, for fluid interface
     */
    public function joinGsHandelsproducten($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsHandelsproducten');

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
            $this->addJoinObject($join, 'GsHandelsproducten');
        }

        return $this;
    }

    /**
     * Use the GsHandelsproducten relation GsHandelsproducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery A secondary query class using the current class as primary query
     */
    public function useGsHandelsproductenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsHandelsproducten($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsHandelsproducten', '\PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery');
    }

    /**
     * Filter the query by a related GsPrescriptieProduct object
     *
     * @param   GsPrescriptieProduct|PropelObjectCollection $gsPrescriptieProduct The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsBijzondereKenmerkenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsPrescriptieProduct($gsPrescriptieProduct, $comparison = null)
    {
        if ($gsPrescriptieProduct instanceof GsPrescriptieProduct) {
            return $this
                ->addUsingAlias(GsBijzondereKenmerkenPeer::PRKCODE, $gsPrescriptieProduct->getPrkcode(), $comparison);
        } elseif ($gsPrescriptieProduct instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsBijzondereKenmerkenPeer::PRKCODE, $gsPrescriptieProduct->toKeyValue('PrimaryKey', 'Prkcode'), $comparison);
        } else {
            throw new PropelException('filterByGsPrescriptieProduct() only accepts arguments of type GsPrescriptieProduct or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsPrescriptieProduct relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsBijzondereKenmerkenQuery The current query, for fluid interface
     */
    public function joinGsPrescriptieProduct($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsPrescriptieProduct');

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
            $this->addJoinObject($join, 'GsPrescriptieProduct');
        }

        return $this;
    }

    /**
     * Use the GsPrescriptieProduct relation GsPrescriptieProduct object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProductQuery A secondary query class using the current class as primary query
     */
    public function useGsPrescriptieProductQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsPrescriptieProduct($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsPrescriptieProduct', '\PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProductQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsBijzondereKenmerken $gsBijzondereKenmerken Object to remove from the list of results
     *
     * @return GsBijzondereKenmerkenQuery The current query, for fluid interface
     */
    public function prune($gsBijzondereKenmerken = null)
    {
        if ($gsBijzondereKenmerken) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsBijzondereKenmerkenPeer::PRKCODE), $gsBijzondereKenmerken->getPrkcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsBijzondereKenmerkenPeer::HANDELSPRODUKTKODE), $gsBijzondereKenmerken->getHandelsproduktkode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsBijzondereKenmerkenPeer::BIJZONDERE_KENMERK), $gsBijzondereKenmerken->getBijzondereKenmerk(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
