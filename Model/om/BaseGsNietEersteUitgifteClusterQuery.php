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
use PharmaIntelligence\GstandaardBundle\Model\GsNietEersteUitgifteCluster;
use PharmaIntelligence\GstandaardBundle\Model\GsNietEersteUitgifteClusterPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsNietEersteUitgifteClusterQuery;

/**
 * @method GsNietEersteUitgifteClusterQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsNietEersteUitgifteClusterQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsNietEersteUitgifteClusterQuery orderByGeneriekeproductcode($order = Criteria::ASC) Order by the generiekeproductcode column
 * @method GsNietEersteUitgifteClusterQuery orderByClusternummerNietEersteUitgifte($order = Criteria::ASC) Order by the clusternummer_niet_eerste_uitgifte column
 *
 * @method GsNietEersteUitgifteClusterQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsNietEersteUitgifteClusterQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsNietEersteUitgifteClusterQuery groupByGeneriekeproductcode() Group by the generiekeproductcode column
 * @method GsNietEersteUitgifteClusterQuery groupByClusternummerNietEersteUitgifte() Group by the clusternummer_niet_eerste_uitgifte column
 *
 * @method GsNietEersteUitgifteClusterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsNietEersteUitgifteClusterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsNietEersteUitgifteClusterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsNietEersteUitgifteCluster findOne(PropelPDO $con = null) Return the first GsNietEersteUitgifteCluster matching the query
 * @method GsNietEersteUitgifteCluster findOneOrCreate(PropelPDO $con = null) Return the first GsNietEersteUitgifteCluster matching the query, or a new GsNietEersteUitgifteCluster object populated from the query conditions when no match is found
 *
 * @method GsNietEersteUitgifteCluster findOneByBestandnummer(int $bestandnummer) Return the first GsNietEersteUitgifteCluster filtered by the bestandnummer column
 * @method GsNietEersteUitgifteCluster findOneByMutatiekode(int $mutatiekode) Return the first GsNietEersteUitgifteCluster filtered by the mutatiekode column
 * @method GsNietEersteUitgifteCluster findOneByClusternummerNietEersteUitgifte(int $clusternummer_niet_eerste_uitgifte) Return the first GsNietEersteUitgifteCluster filtered by the clusternummer_niet_eerste_uitgifte column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsNietEersteUitgifteCluster objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsNietEersteUitgifteCluster objects filtered by the mutatiekode column
 * @method array findByGeneriekeproductcode(int $generiekeproductcode) Return GsNietEersteUitgifteCluster objects filtered by the generiekeproductcode column
 * @method array findByClusternummerNietEersteUitgifte(int $clusternummer_niet_eerste_uitgifte) Return GsNietEersteUitgifteCluster objects filtered by the clusternummer_niet_eerste_uitgifte column
 */
abstract class BaseGsNietEersteUitgifteClusterQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsNietEersteUitgifteClusterQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsNietEersteUitgifteCluster';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsNietEersteUitgifteClusterQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsNietEersteUitgifteClusterQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsNietEersteUitgifteClusterQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsNietEersteUitgifteClusterQuery) {
            return $criteria;
        }
        $query = new GsNietEersteUitgifteClusterQuery(null, null, $modelAlias);

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
     * @return   GsNietEersteUitgifteCluster|GsNietEersteUitgifteCluster[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsNietEersteUitgifteClusterPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsNietEersteUitgifteClusterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsNietEersteUitgifteCluster A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByGeneriekeproductcode($key, $con = null)
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
     * @return                 GsNietEersteUitgifteCluster A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `generiekeproductcode`, `clusternummer_niet_eerste_uitgifte` FROM `gs_niet_eerste_uitgifte_cluster` WHERE `generiekeproductcode` = :p0';
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
            $obj = new GsNietEersteUitgifteCluster();
            $obj->hydrate($row);
            GsNietEersteUitgifteClusterPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsNietEersteUitgifteCluster|GsNietEersteUitgifteCluster[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsNietEersteUitgifteCluster[]|mixed the list of results, formatted by the current formatter
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
     * @return GsNietEersteUitgifteClusterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsNietEersteUitgifteClusterPeer::GENERIEKEPRODUCTCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsNietEersteUitgifteClusterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsNietEersteUitgifteClusterPeer::GENERIEKEPRODUCTCODE, $keys, Criteria::IN);
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
     * @return GsNietEersteUitgifteClusterQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsNietEersteUitgifteClusterPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsNietEersteUitgifteClusterPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsNietEersteUitgifteClusterPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsNietEersteUitgifteClusterQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsNietEersteUitgifteClusterPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsNietEersteUitgifteClusterPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsNietEersteUitgifteClusterPeer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @return GsNietEersteUitgifteClusterQuery The current query, for fluid interface
     */
    public function filterByGeneriekeproductcode($generiekeproductcode = null, $comparison = null)
    {
        if (is_array($generiekeproductcode)) {
            $useMinMax = false;
            if (isset($generiekeproductcode['min'])) {
                $this->addUsingAlias(GsNietEersteUitgifteClusterPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($generiekeproductcode['max'])) {
                $this->addUsingAlias(GsNietEersteUitgifteClusterPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsNietEersteUitgifteClusterPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode, $comparison);
    }

    /**
     * Filter the query on the clusternummer_niet_eerste_uitgifte column
     *
     * Example usage:
     * <code>
     * $query->filterByClusternummerNietEersteUitgifte(1234); // WHERE clusternummer_niet_eerste_uitgifte = 1234
     * $query->filterByClusternummerNietEersteUitgifte(array(12, 34)); // WHERE clusternummer_niet_eerste_uitgifte IN (12, 34)
     * $query->filterByClusternummerNietEersteUitgifte(array('min' => 12)); // WHERE clusternummer_niet_eerste_uitgifte >= 12
     * $query->filterByClusternummerNietEersteUitgifte(array('max' => 12)); // WHERE clusternummer_niet_eerste_uitgifte <= 12
     * </code>
     *
     * @param     mixed $clusternummerNietEersteUitgifte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNietEersteUitgifteClusterQuery The current query, for fluid interface
     */
    public function filterByClusternummerNietEersteUitgifte($clusternummerNietEersteUitgifte = null, $comparison = null)
    {
        if (is_array($clusternummerNietEersteUitgifte)) {
            $useMinMax = false;
            if (isset($clusternummerNietEersteUitgifte['min'])) {
                $this->addUsingAlias(GsNietEersteUitgifteClusterPeer::CLUSTERNUMMER_NIET_EERSTE_UITGIFTE, $clusternummerNietEersteUitgifte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clusternummerNietEersteUitgifte['max'])) {
                $this->addUsingAlias(GsNietEersteUitgifteClusterPeer::CLUSTERNUMMER_NIET_EERSTE_UITGIFTE, $clusternummerNietEersteUitgifte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsNietEersteUitgifteClusterPeer::CLUSTERNUMMER_NIET_EERSTE_UITGIFTE, $clusternummerNietEersteUitgifte, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsNietEersteUitgifteCluster $gsNietEersteUitgifteCluster Object to remove from the list of results
     *
     * @return GsNietEersteUitgifteClusterQuery The current query, for fluid interface
     */
    public function prune($gsNietEersteUitgifteCluster = null)
    {
        if ($gsNietEersteUitgifteCluster) {
            $this->addUsingAlias(GsNietEersteUitgifteClusterPeer::GENERIEKEPRODUCTCODE, $gsNietEersteUitgifteCluster->getGeneriekeproductcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
