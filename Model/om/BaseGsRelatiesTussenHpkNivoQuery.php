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
use PharmaIntelligence\GstandaardBundle\Model\GsRelatiesTussenHpkNivo;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatiesTussenHpkNivoPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatiesTussenHpkNivoQuery;

/**
 * @method GsRelatiesTussenHpkNivoQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsRelatiesTussenHpkNivoQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsRelatiesTussenHpkNivoQuery orderByHandelsproduktkode($order = Criteria::ASC) Order by the handelsproduktkode column
 * @method GsRelatiesTussenHpkNivoQuery orderByNivoAanduiding($order = Criteria::ASC) Order by the nivo_aanduiding column
 * @method GsRelatiesTussenHpkNivoQuery orderByNivoKode($order = Criteria::ASC) Order by the nivo_kode column
 *
 * @method GsRelatiesTussenHpkNivoQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsRelatiesTussenHpkNivoQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsRelatiesTussenHpkNivoQuery groupByHandelsproduktkode() Group by the handelsproduktkode column
 * @method GsRelatiesTussenHpkNivoQuery groupByNivoAanduiding() Group by the nivo_aanduiding column
 * @method GsRelatiesTussenHpkNivoQuery groupByNivoKode() Group by the nivo_kode column
 *
 * @method GsRelatiesTussenHpkNivoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsRelatiesTussenHpkNivoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsRelatiesTussenHpkNivoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsRelatiesTussenHpkNivo findOne(PropelPDO $con = null) Return the first GsRelatiesTussenHpkNivo matching the query
 * @method GsRelatiesTussenHpkNivo findOneOrCreate(PropelPDO $con = null) Return the first GsRelatiesTussenHpkNivo matching the query, or a new GsRelatiesTussenHpkNivo object populated from the query conditions when no match is found
 *
 * @method GsRelatiesTussenHpkNivo findOneByBestandnummer(int $bestandnummer) Return the first GsRelatiesTussenHpkNivo filtered by the bestandnummer column
 * @method GsRelatiesTussenHpkNivo findOneByMutatiekode(int $mutatiekode) Return the first GsRelatiesTussenHpkNivo filtered by the mutatiekode column
 * @method GsRelatiesTussenHpkNivo findOneByHandelsproduktkode(int $handelsproduktkode) Return the first GsRelatiesTussenHpkNivo filtered by the handelsproduktkode column
 * @method GsRelatiesTussenHpkNivo findOneByNivoAanduiding(int $nivo_aanduiding) Return the first GsRelatiesTussenHpkNivo filtered by the nivo_aanduiding column
 * @method GsRelatiesTussenHpkNivo findOneByNivoKode(int $nivo_kode) Return the first GsRelatiesTussenHpkNivo filtered by the nivo_kode column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsRelatiesTussenHpkNivo objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsRelatiesTussenHpkNivo objects filtered by the mutatiekode column
 * @method array findByHandelsproduktkode(int $handelsproduktkode) Return GsRelatiesTussenHpkNivo objects filtered by the handelsproduktkode column
 * @method array findByNivoAanduiding(int $nivo_aanduiding) Return GsRelatiesTussenHpkNivo objects filtered by the nivo_aanduiding column
 * @method array findByNivoKode(int $nivo_kode) Return GsRelatiesTussenHpkNivo objects filtered by the nivo_kode column
 */
abstract class BaseGsRelatiesTussenHpkNivoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsRelatiesTussenHpkNivoQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRelatiesTussenHpkNivo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsRelatiesTussenHpkNivoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsRelatiesTussenHpkNivoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsRelatiesTussenHpkNivoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsRelatiesTussenHpkNivoQuery) {
            return $criteria;
        }
        $query = new GsRelatiesTussenHpkNivoQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$handelsproduktkode, $nivo_aanduiding, $nivo_kode]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsRelatiesTussenHpkNivo|GsRelatiesTussenHpkNivo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsRelatiesTussenHpkNivoPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsRelatiesTussenHpkNivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsRelatiesTussenHpkNivo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `handelsproduktkode`, `nivo_aanduiding`, `nivo_kode` FROM `gs_relaties_tussen_hpk_nivo` WHERE `handelsproduktkode` = :p0 AND `nivo_aanduiding` = :p1 AND `nivo_kode` = :p2';
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
            $obj = new GsRelatiesTussenHpkNivo();
            $obj->hydrate($row);
            GsRelatiesTussenHpkNivoPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return GsRelatiesTussenHpkNivo|GsRelatiesTussenHpkNivo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsRelatiesTussenHpkNivo[]|mixed the list of results, formatted by the current formatter
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
     * @return GsRelatiesTussenHpkNivoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsRelatiesTussenHpkNivoPeer::HANDELSPRODUKTKODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsRelatiesTussenHpkNivoPeer::NIVO_AANDUIDING, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsRelatiesTussenHpkNivoPeer::NIVO_KODE, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsRelatiesTussenHpkNivoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsRelatiesTussenHpkNivoPeer::HANDELSPRODUKTKODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsRelatiesTussenHpkNivoPeer::NIVO_AANDUIDING, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsRelatiesTussenHpkNivoPeer::NIVO_KODE, $key[2], Criteria::EQUAL);
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
     * @return GsRelatiesTussenHpkNivoQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsRelatiesTussenHpkNivoPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsRelatiesTussenHpkNivoPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatiesTussenHpkNivoPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsRelatiesTussenHpkNivoQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsRelatiesTussenHpkNivoPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsRelatiesTussenHpkNivoPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatiesTussenHpkNivoPeer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @return GsRelatiesTussenHpkNivoQuery The current query, for fluid interface
     */
    public function filterByHandelsproduktkode($handelsproduktkode = null, $comparison = null)
    {
        if (is_array($handelsproduktkode)) {
            $useMinMax = false;
            if (isset($handelsproduktkode['min'])) {
                $this->addUsingAlias(GsRelatiesTussenHpkNivoPeer::HANDELSPRODUKTKODE, $handelsproduktkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($handelsproduktkode['max'])) {
                $this->addUsingAlias(GsRelatiesTussenHpkNivoPeer::HANDELSPRODUKTKODE, $handelsproduktkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatiesTussenHpkNivoPeer::HANDELSPRODUKTKODE, $handelsproduktkode, $comparison);
    }

    /**
     * Filter the query on the nivo_aanduiding column
     *
     * Example usage:
     * <code>
     * $query->filterByNivoAanduiding(1234); // WHERE nivo_aanduiding = 1234
     * $query->filterByNivoAanduiding(array(12, 34)); // WHERE nivo_aanduiding IN (12, 34)
     * $query->filterByNivoAanduiding(array('min' => 12)); // WHERE nivo_aanduiding >= 12
     * $query->filterByNivoAanduiding(array('max' => 12)); // WHERE nivo_aanduiding <= 12
     * </code>
     *
     * @param     mixed $nivoAanduiding The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatiesTussenHpkNivoQuery The current query, for fluid interface
     */
    public function filterByNivoAanduiding($nivoAanduiding = null, $comparison = null)
    {
        if (is_array($nivoAanduiding)) {
            $useMinMax = false;
            if (isset($nivoAanduiding['min'])) {
                $this->addUsingAlias(GsRelatiesTussenHpkNivoPeer::NIVO_AANDUIDING, $nivoAanduiding['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nivoAanduiding['max'])) {
                $this->addUsingAlias(GsRelatiesTussenHpkNivoPeer::NIVO_AANDUIDING, $nivoAanduiding['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatiesTussenHpkNivoPeer::NIVO_AANDUIDING, $nivoAanduiding, $comparison);
    }

    /**
     * Filter the query on the nivo_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByNivoKode(1234); // WHERE nivo_kode = 1234
     * $query->filterByNivoKode(array(12, 34)); // WHERE nivo_kode IN (12, 34)
     * $query->filterByNivoKode(array('min' => 12)); // WHERE nivo_kode >= 12
     * $query->filterByNivoKode(array('max' => 12)); // WHERE nivo_kode <= 12
     * </code>
     *
     * @param     mixed $nivoKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatiesTussenHpkNivoQuery The current query, for fluid interface
     */
    public function filterByNivoKode($nivoKode = null, $comparison = null)
    {
        if (is_array($nivoKode)) {
            $useMinMax = false;
            if (isset($nivoKode['min'])) {
                $this->addUsingAlias(GsRelatiesTussenHpkNivoPeer::NIVO_KODE, $nivoKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nivoKode['max'])) {
                $this->addUsingAlias(GsRelatiesTussenHpkNivoPeer::NIVO_KODE, $nivoKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatiesTussenHpkNivoPeer::NIVO_KODE, $nivoKode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsRelatiesTussenHpkNivo $gsRelatiesTussenHpkNivo Object to remove from the list of results
     *
     * @return GsRelatiesTussenHpkNivoQuery The current query, for fluid interface
     */
    public function prune($gsRelatiesTussenHpkNivo = null)
    {
        if ($gsRelatiesTussenHpkNivo) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsRelatiesTussenHpkNivoPeer::HANDELSPRODUKTKODE), $gsRelatiesTussenHpkNivo->getHandelsproduktkode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsRelatiesTussenHpkNivoPeer::NIVO_AANDUIDING), $gsRelatiesTussenHpkNivo->getNivoAanduiding(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsRelatiesTussenHpkNivoPeer::NIVO_KODE), $gsRelatiesTussenHpkNivo->getNivoKode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
