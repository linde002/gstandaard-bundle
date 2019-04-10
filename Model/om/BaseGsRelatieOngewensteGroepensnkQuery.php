<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \Criteria;
use \Exception;
use \ModelCriteria;
use \ModelJoin;
use \PDO;
use \Propel;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieOngewensteGroepensnk;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieOngewensteGroepensnkPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieOngewensteGroepensnkQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;

/**
 * @method GsRelatieOngewensteGroepensnkQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsRelatieOngewensteGroepensnkQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsRelatieOngewensteGroepensnkQuery orderByStamnaamcode($order = Criteria::ASC) Order by the stamnaamcode column
 * @method GsRelatieOngewensteGroepensnkQuery orderByOngewensteGroepenThesaurus122($order = Criteria::ASC) Order by the ongewenste_groepen_thesaurus_122 column
 * @method GsRelatieOngewensteGroepensnkQuery orderByOngewensteGroepsnummer($order = Criteria::ASC) Order by the ongewenste_groepsnummer column
 *
 * @method GsRelatieOngewensteGroepensnkQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsRelatieOngewensteGroepensnkQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsRelatieOngewensteGroepensnkQuery groupByStamnaamcode() Group by the stamnaamcode column
 * @method GsRelatieOngewensteGroepensnkQuery groupByOngewensteGroepenThesaurus122() Group by the ongewenste_groepen_thesaurus_122 column
 * @method GsRelatieOngewensteGroepensnkQuery groupByOngewensteGroepsnummer() Group by the ongewenste_groepsnummer column
 *
 * @method GsRelatieOngewensteGroepensnkQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsRelatieOngewensteGroepensnkQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsRelatieOngewensteGroepensnkQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsRelatieOngewensteGroepensnkQuery leftJoinOngewensteGroepenOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the OngewensteGroepenOmschrijving relation
 * @method GsRelatieOngewensteGroepensnkQuery rightJoinOngewensteGroepenOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OngewensteGroepenOmschrijving relation
 * @method GsRelatieOngewensteGroepensnkQuery innerJoinOngewensteGroepenOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the OngewensteGroepenOmschrijving relation
 *
 * @method GsRelatieOngewensteGroepensnk findOne(PropelPDO $con = null) Return the first GsRelatieOngewensteGroepensnk matching the query
 * @method GsRelatieOngewensteGroepensnk findOneOrCreate(PropelPDO $con = null) Return the first GsRelatieOngewensteGroepensnk matching the query, or a new GsRelatieOngewensteGroepensnk object populated from the query conditions when no match is found
 *
 * @method GsRelatieOngewensteGroepensnk findOneByBestandnummer(int $bestandnummer) Return the first GsRelatieOngewensteGroepensnk filtered by the bestandnummer column
 * @method GsRelatieOngewensteGroepensnk findOneByMutatiekode(int $mutatiekode) Return the first GsRelatieOngewensteGroepensnk filtered by the mutatiekode column
 * @method GsRelatieOngewensteGroepensnk findOneByStamnaamcode(int $stamnaamcode) Return the first GsRelatieOngewensteGroepensnk filtered by the stamnaamcode column
 * @method GsRelatieOngewensteGroepensnk findOneByOngewensteGroepenThesaurus122(int $ongewenste_groepen_thesaurus_122) Return the first GsRelatieOngewensteGroepensnk filtered by the ongewenste_groepen_thesaurus_122 column
 * @method GsRelatieOngewensteGroepensnk findOneByOngewensteGroepsnummer(int $ongewenste_groepsnummer) Return the first GsRelatieOngewensteGroepensnk filtered by the ongewenste_groepsnummer column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsRelatieOngewensteGroepensnk objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsRelatieOngewensteGroepensnk objects filtered by the mutatiekode column
 * @method array findByStamnaamcode(int $stamnaamcode) Return GsRelatieOngewensteGroepensnk objects filtered by the stamnaamcode column
 * @method array findByOngewensteGroepenThesaurus122(int $ongewenste_groepen_thesaurus_122) Return GsRelatieOngewensteGroepensnk objects filtered by the ongewenste_groepen_thesaurus_122 column
 * @method array findByOngewensteGroepsnummer(int $ongewenste_groepsnummer) Return GsRelatieOngewensteGroepensnk objects filtered by the ongewenste_groepsnummer column
 */
abstract class BaseGsRelatieOngewensteGroepensnkQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsRelatieOngewensteGroepensnkQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRelatieOngewensteGroepensnk';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsRelatieOngewensteGroepensnkQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsRelatieOngewensteGroepensnkQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsRelatieOngewensteGroepensnkQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsRelatieOngewensteGroepensnkQuery) {
            return $criteria;
        }
        $query = new GsRelatieOngewensteGroepensnkQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$stamnaamcode, $ongewenste_groepsnummer]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsRelatieOngewensteGroepensnk|GsRelatieOngewensteGroepensnk[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsRelatieOngewensteGroepensnkPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsRelatieOngewensteGroepensnkPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsRelatieOngewensteGroepensnk A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `stamnaamcode`, `ongewenste_groepen_thesaurus_122`, `ongewenste_groepsnummer` FROM `gs_relatie_ongewenste_groepensnk` WHERE `stamnaamcode` = :p0 AND `ongewenste_groepsnummer` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsRelatieOngewensteGroepensnk();
            $obj->hydrate($row);
            GsRelatieOngewensteGroepensnkPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsRelatieOngewensteGroepensnk|GsRelatieOngewensteGroepensnk[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsRelatieOngewensteGroepensnk[]|mixed the list of results, formatted by the current formatter
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
     * @return GsRelatieOngewensteGroepensnkQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsRelatieOngewensteGroepensnkQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER, $key[1], Criteria::EQUAL);
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
     * @return GsRelatieOngewensteGroepensnkQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsRelatieOngewensteGroepensnkQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the stamnaamcode column
     *
     * Example usage:
     * <code>
     * $query->filterByStamnaamcode(1234); // WHERE stamnaamcode = 1234
     * $query->filterByStamnaamcode(array(12, 34)); // WHERE stamnaamcode IN (12, 34)
     * $query->filterByStamnaamcode(array('min' => 12)); // WHERE stamnaamcode >= 12
     * $query->filterByStamnaamcode(array('max' => 12)); // WHERE stamnaamcode <= 12
     * </code>
     *
     * @param     mixed $stamnaamcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatieOngewensteGroepensnkQuery The current query, for fluid interface
     */
    public function filterByStamnaamcode($stamnaamcode = null, $comparison = null)
    {
        if (is_array($stamnaamcode)) {
            $useMinMax = false;
            if (isset($stamnaamcode['min'])) {
                $this->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE, $stamnaamcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stamnaamcode['max'])) {
                $this->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE, $stamnaamcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE, $stamnaamcode, $comparison);
    }

    /**
     * Filter the query on the ongewenste_groepen_thesaurus_122 column
     *
     * Example usage:
     * <code>
     * $query->filterByOngewensteGroepenThesaurus122(1234); // WHERE ongewenste_groepen_thesaurus_122 = 1234
     * $query->filterByOngewensteGroepenThesaurus122(array(12, 34)); // WHERE ongewenste_groepen_thesaurus_122 IN (12, 34)
     * $query->filterByOngewensteGroepenThesaurus122(array('min' => 12)); // WHERE ongewenste_groepen_thesaurus_122 >= 12
     * $query->filterByOngewensteGroepenThesaurus122(array('max' => 12)); // WHERE ongewenste_groepen_thesaurus_122 <= 12
     * </code>
     *
     * @see       filterByOngewensteGroepenOmschrijving()
     *
     * @param     mixed $ongewensteGroepenThesaurus122 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatieOngewensteGroepensnkQuery The current query, for fluid interface
     */
    public function filterByOngewensteGroepenThesaurus122($ongewensteGroepenThesaurus122 = null, $comparison = null)
    {
        if (is_array($ongewensteGroepenThesaurus122)) {
            $useMinMax = false;
            if (isset($ongewensteGroepenThesaurus122['min'])) {
                $this->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPEN_THESAURUS_122, $ongewensteGroepenThesaurus122['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ongewensteGroepenThesaurus122['max'])) {
                $this->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPEN_THESAURUS_122, $ongewensteGroepenThesaurus122['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPEN_THESAURUS_122, $ongewensteGroepenThesaurus122, $comparison);
    }

    /**
     * Filter the query on the ongewenste_groepsnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByOngewensteGroepsnummer(1234); // WHERE ongewenste_groepsnummer = 1234
     * $query->filterByOngewensteGroepsnummer(array(12, 34)); // WHERE ongewenste_groepsnummer IN (12, 34)
     * $query->filterByOngewensteGroepsnummer(array('min' => 12)); // WHERE ongewenste_groepsnummer >= 12
     * $query->filterByOngewensteGroepsnummer(array('max' => 12)); // WHERE ongewenste_groepsnummer <= 12
     * </code>
     *
     * @see       filterByOngewensteGroepenOmschrijving()
     *
     * @param     mixed $ongewensteGroepsnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatieOngewensteGroepensnkQuery The current query, for fluid interface
     */
    public function filterByOngewensteGroepsnummer($ongewensteGroepsnummer = null, $comparison = null)
    {
        if (is_array($ongewensteGroepsnummer)) {
            $useMinMax = false;
            if (isset($ongewensteGroepsnummer['min'])) {
                $this->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER, $ongewensteGroepsnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ongewensteGroepsnummer['max'])) {
                $this->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER, $ongewensteGroepsnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER, $ongewensteGroepsnummer, $comparison);
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsRelatieOngewensteGroepensnkQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOngewensteGroepenOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPEN_THESAURUS_122, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByOngewensteGroepenOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OngewensteGroepenOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsRelatieOngewensteGroepensnkQuery The current query, for fluid interface
     */
    public function joinOngewensteGroepenOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OngewensteGroepenOmschrijving');

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
            $this->addJoinObject($join, 'OngewensteGroepenOmschrijving');
        }

        return $this;
    }

    /**
     * Use the OngewensteGroepenOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useOngewensteGroepenOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinOngewensteGroepenOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OngewensteGroepenOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsRelatieOngewensteGroepensnk $gsRelatieOngewensteGroepensnk Object to remove from the list of results
     *
     * @return GsRelatieOngewensteGroepensnkQuery The current query, for fluid interface
     */
    public function prune($gsRelatieOngewensteGroepensnk = null)
    {
        if ($gsRelatieOngewensteGroepensnk) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsRelatieOngewensteGroepensnkPeer::STAMNAAMCODE), $gsRelatieOngewensteGroepensnk->getStamnaamcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsRelatieOngewensteGroepensnkPeer::ONGEWENSTE_GROEPSNUMMER), $gsRelatieOngewensteGroepensnk->getOngewensteGroepsnummer(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
