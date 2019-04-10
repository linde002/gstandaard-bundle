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
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentific;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprIdentificerendeVelden;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprIdentificerendeVeldenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprIdentificerendeVeldenQuery;

/**
 * @method GsVoorschrijfprIdentificerendeVeldenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsVoorschrijfprIdentificerendeVeldenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsVoorschrijfprIdentificerendeVeldenQuery orderByPrkcode($order = Criteria::ASC) Order by the prkcode column
 * @method GsVoorschrijfprIdentificerendeVeldenQuery orderByIdentificerendKenmerk($order = Criteria::ASC) Order by the identificerend_kenmerk column
 *
 * @method GsVoorschrijfprIdentificerendeVeldenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsVoorschrijfprIdentificerendeVeldenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsVoorschrijfprIdentificerendeVeldenQuery groupByPrkcode() Group by the prkcode column
 * @method GsVoorschrijfprIdentificerendeVeldenQuery groupByIdentificerendKenmerk() Group by the identificerend_kenmerk column
 *
 * @method GsVoorschrijfprIdentificerendeVeldenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsVoorschrijfprIdentificerendeVeldenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsVoorschrijfprIdentificerendeVeldenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsVoorschrijfprIdentificerendeVeldenQuery leftJoinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
 * @method GsVoorschrijfprIdentificerendeVeldenQuery rightJoinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
 * @method GsVoorschrijfprIdentificerendeVeldenQuery innerJoinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null) Adds a INNER JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
 *
 * @method GsVoorschrijfprIdentificerendeVelden findOne(PropelPDO $con = null) Return the first GsVoorschrijfprIdentificerendeVelden matching the query
 * @method GsVoorschrijfprIdentificerendeVelden findOneOrCreate(PropelPDO $con = null) Return the first GsVoorschrijfprIdentificerendeVelden matching the query, or a new GsVoorschrijfprIdentificerendeVelden object populated from the query conditions when no match is found
 *
 * @method GsVoorschrijfprIdentificerendeVelden findOneByBestandnummer(int $bestandnummer) Return the first GsVoorschrijfprIdentificerendeVelden filtered by the bestandnummer column
 * @method GsVoorschrijfprIdentificerendeVelden findOneByMutatiekode(int $mutatiekode) Return the first GsVoorschrijfprIdentificerendeVelden filtered by the mutatiekode column
 * @method GsVoorschrijfprIdentificerendeVelden findOneByPrkcode(int $prkcode) Return the first GsVoorschrijfprIdentificerendeVelden filtered by the prkcode column
 * @method GsVoorschrijfprIdentificerendeVelden findOneByIdentificerendKenmerk(string $identificerend_kenmerk) Return the first GsVoorschrijfprIdentificerendeVelden filtered by the identificerend_kenmerk column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsVoorschrijfprIdentificerendeVelden objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsVoorschrijfprIdentificerendeVelden objects filtered by the mutatiekode column
 * @method array findByPrkcode(int $prkcode) Return GsVoorschrijfprIdentificerendeVelden objects filtered by the prkcode column
 * @method array findByIdentificerendKenmerk(string $identificerend_kenmerk) Return GsVoorschrijfprIdentificerendeVelden objects filtered by the identificerend_kenmerk column
 */
abstract class BaseGsVoorschrijfprIdentificerendeVeldenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsVoorschrijfprIdentificerendeVeldenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVoorschrijfprIdentificerendeVelden';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsVoorschrijfprIdentificerendeVeldenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsVoorschrijfprIdentificerendeVeldenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsVoorschrijfprIdentificerendeVeldenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsVoorschrijfprIdentificerendeVeldenQuery) {
            return $criteria;
        }
        $query = new GsVoorschrijfprIdentificerendeVeldenQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$prkcode, $identificerend_kenmerk]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsVoorschrijfprIdentificerendeVelden|GsVoorschrijfprIdentificerendeVelden[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsVoorschrijfprIdentificerendeVeldenPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsVoorschrijfprIdentificerendeVeldenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsVoorschrijfprIdentificerendeVelden A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `prkcode`, `identificerend_kenmerk` FROM `gs_voorschrijfpr_identificerende_velden` WHERE `prkcode` = :p0 AND `identificerend_kenmerk` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsVoorschrijfprIdentificerendeVelden();
            $obj->hydrate($row);
            GsVoorschrijfprIdentificerendeVeldenPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsVoorschrijfprIdentificerendeVelden|GsVoorschrijfprIdentificerendeVelden[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsVoorschrijfprIdentificerendeVelden[]|mixed the list of results, formatted by the current formatter
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
     * @return GsVoorschrijfprIdentificerendeVeldenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsVoorschrijfprIdentificerendeVeldenPeer::IDENTIFICEREND_KENMERK, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsVoorschrijfprIdentificerendeVeldenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsVoorschrijfprIdentificerendeVeldenPeer::IDENTIFICEREND_KENMERK, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
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
     * @return GsVoorschrijfprIdentificerendeVeldenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsVoorschrijfprIdentificerendeVeldenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsVoorschrijfprIdentificerendeVeldenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprIdentificerendeVeldenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsVoorschrijfprIdentificerendeVeldenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsVoorschrijfprIdentificerendeVeldenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsVoorschrijfprIdentificerendeVeldenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprIdentificerendeVeldenPeer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @see       filterByGsVoorschrijfprGeneesmiddelIdentific()
     *
     * @param     mixed $prkcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprIdentificerendeVeldenQuery The current query, for fluid interface
     */
    public function filterByPrkcode($prkcode = null, $comparison = null)
    {
        if (is_array($prkcode)) {
            $useMinMax = false;
            if (isset($prkcode['min'])) {
                $this->addUsingAlias(GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE, $prkcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prkcode['max'])) {
                $this->addUsingAlias(GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE, $prkcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE, $prkcode, $comparison);
    }

    /**
     * Filter the query on the identificerend_kenmerk column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentificerendKenmerk('fooValue');   // WHERE identificerend_kenmerk = 'fooValue'
     * $query->filterByIdentificerendKenmerk('%fooValue%'); // WHERE identificerend_kenmerk LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identificerendKenmerk The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfprIdentificerendeVeldenQuery The current query, for fluid interface
     */
    public function filterByIdentificerendKenmerk($identificerendKenmerk = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identificerendKenmerk)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identificerendKenmerk)) {
                $identificerendKenmerk = str_replace('*', '%', $identificerendKenmerk);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfprIdentificerendeVeldenPeer::IDENTIFICEREND_KENMERK, $identificerendKenmerk, $comparison);
    }

    /**
     * Filter the query by a related GsVoorschrijfprGeneesmiddelIdentific object
     *
     * @param   GsVoorschrijfprGeneesmiddelIdentific|PropelObjectCollection $gsVoorschrijfprGeneesmiddelIdentific The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsVoorschrijfprIdentificerendeVeldenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsVoorschrijfprGeneesmiddelIdentific($gsVoorschrijfprGeneesmiddelIdentific, $comparison = null)
    {
        if ($gsVoorschrijfprGeneesmiddelIdentific instanceof GsVoorschrijfprGeneesmiddelIdentific) {
            return $this
                ->addUsingAlias(GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE, $gsVoorschrijfprGeneesmiddelIdentific->getPrkcode(), $comparison);
        } elseif ($gsVoorschrijfprGeneesmiddelIdentific instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE, $gsVoorschrijfprGeneesmiddelIdentific->toKeyValue('PrimaryKey', 'Prkcode'), $comparison);
        } else {
            throw new PropelException('filterByGsVoorschrijfprGeneesmiddelIdentific() only accepts arguments of type GsVoorschrijfprGeneesmiddelIdentific or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsVoorschrijfprIdentificerendeVeldenQuery The current query, for fluid interface
     */
    public function joinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsVoorschrijfprGeneesmiddelIdentific');

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
            $this->addJoinObject($join, 'GsVoorschrijfprGeneesmiddelIdentific');
        }

        return $this;
    }

    /**
     * Use the GsVoorschrijfprGeneesmiddelIdentific relation GsVoorschrijfprGeneesmiddelIdentific object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificQuery A secondary query class using the current class as primary query
     */
    public function useGsVoorschrijfprGeneesmiddelIdentificQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsVoorschrijfprGeneesmiddelIdentific($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsVoorschrijfprGeneesmiddelIdentific', '\PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsVoorschrijfprIdentificerendeVelden $gsVoorschrijfprIdentificerendeVelden Object to remove from the list of results
     *
     * @return GsVoorschrijfprIdentificerendeVeldenQuery The current query, for fluid interface
     */
    public function prune($gsVoorschrijfprIdentificerendeVelden = null)
    {
        if ($gsVoorschrijfprIdentificerendeVelden) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsVoorschrijfprIdentificerendeVeldenPeer::PRKCODE), $gsVoorschrijfprIdentificerendeVelden->getPrkcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsVoorschrijfprIdentificerendeVeldenPeer::IDENTIFICEREND_KENMERK), $gsVoorschrijfprIdentificerendeVelden->getIdentificerendKenmerk(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
