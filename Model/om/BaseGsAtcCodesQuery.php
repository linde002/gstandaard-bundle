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
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappen;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodes;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesExtended;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcdddgegevens;
use PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDose;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProducten;

/**
 * @method GsAtcCodesQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsAtcCodesQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsAtcCodesQuery orderByAtccode($order = Criteria::ASC) Order by the atccode column
 * @method GsAtcCodesQuery orderByAtcnederlandseOmschrijving($order = Criteria::ASC) Order by the atcnederlandse_omschrijving column
 * @method GsAtcCodesQuery orderByAtcengelseOmschrijving($order = Criteria::ASC) Order by the atcengelse_omschrijving column
 * @method GsAtcCodesQuery orderByAtcindicator($order = Criteria::ASC) Order by the atcindicator column
 *
 * @method GsAtcCodesQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsAtcCodesQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsAtcCodesQuery groupByAtccode() Group by the atccode column
 * @method GsAtcCodesQuery groupByAtcnederlandseOmschrijving() Group by the atcnederlandse_omschrijving column
 * @method GsAtcCodesQuery groupByAtcengelseOmschrijving() Group by the atcengelse_omschrijving column
 * @method GsAtcCodesQuery groupByAtcindicator() Group by the atcindicator column
 *
 * @method GsAtcCodesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsAtcCodesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsAtcCodesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsAtcCodesQuery leftJoinGsArtikelEigenschappen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelEigenschappen relation
 * @method GsAtcCodesQuery rightJoinGsArtikelEigenschappen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelEigenschappen relation
 * @method GsAtcCodesQuery innerJoinGsArtikelEigenschappen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelEigenschappen relation
 *
 * @method GsAtcCodesQuery leftJoinGsAtcCodesExtended($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsAtcCodesExtended relation
 * @method GsAtcCodesQuery rightJoinGsAtcCodesExtended($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsAtcCodesExtended relation
 * @method GsAtcCodesQuery innerJoinGsAtcCodesExtended($relationAlias = null) Adds a INNER JOIN clause to the query using the GsAtcCodesExtended relation
 *
 * @method GsAtcCodesQuery leftJoinGsAtcdddgegevens($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsAtcdddgegevens relation
 * @method GsAtcCodesQuery rightJoinGsAtcdddgegevens($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsAtcdddgegevens relation
 * @method GsAtcCodesQuery innerJoinGsAtcdddgegevens($relationAlias = null) Adds a INNER JOIN clause to the query using the GsAtcdddgegevens relation
 *
 * @method GsAtcCodesQuery leftJoinGsDailyDefinedDose($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsDailyDefinedDose relation
 * @method GsAtcCodesQuery rightJoinGsDailyDefinedDose($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsDailyDefinedDose relation
 * @method GsAtcCodesQuery innerJoinGsDailyDefinedDose($relationAlias = null) Adds a INNER JOIN clause to the query using the GsDailyDefinedDose relation
 *
 * @method GsAtcCodesQuery leftJoinGsGeneriekeProducten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsGeneriekeProducten relation
 * @method GsAtcCodesQuery rightJoinGsGeneriekeProducten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsGeneriekeProducten relation
 * @method GsAtcCodesQuery innerJoinGsGeneriekeProducten($relationAlias = null) Adds a INNER JOIN clause to the query using the GsGeneriekeProducten relation
 *
 * @method GsAtcCodes findOne(PropelPDO $con = null) Return the first GsAtcCodes matching the query
 * @method GsAtcCodes findOneOrCreate(PropelPDO $con = null) Return the first GsAtcCodes matching the query, or a new GsAtcCodes object populated from the query conditions when no match is found
 *
 * @method GsAtcCodes findOneByBestandnummer(int $bestandnummer) Return the first GsAtcCodes filtered by the bestandnummer column
 * @method GsAtcCodes findOneByMutatiekode(int $mutatiekode) Return the first GsAtcCodes filtered by the mutatiekode column
 * @method GsAtcCodes findOneByAtcnederlandseOmschrijving(string $atcnederlandse_omschrijving) Return the first GsAtcCodes filtered by the atcnederlandse_omschrijving column
 * @method GsAtcCodes findOneByAtcengelseOmschrijving(string $atcengelse_omschrijving) Return the first GsAtcCodes filtered by the atcengelse_omschrijving column
 * @method GsAtcCodes findOneByAtcindicator(string $atcindicator) Return the first GsAtcCodes filtered by the atcindicator column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsAtcCodes objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsAtcCodes objects filtered by the mutatiekode column
 * @method array findByAtccode(string $atccode) Return GsAtcCodes objects filtered by the atccode column
 * @method array findByAtcnederlandseOmschrijving(string $atcnederlandse_omschrijving) Return GsAtcCodes objects filtered by the atcnederlandse_omschrijving column
 * @method array findByAtcengelseOmschrijving(string $atcengelse_omschrijving) Return GsAtcCodes objects filtered by the atcengelse_omschrijving column
 * @method array findByAtcindicator(string $atcindicator) Return GsAtcCodes objects filtered by the atcindicator column
 */
abstract class BaseGsAtcCodesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsAtcCodesQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAtcCodes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsAtcCodesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsAtcCodesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsAtcCodesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsAtcCodesQuery) {
            return $criteria;
        }
        $query = new GsAtcCodesQuery(null, null, $modelAlias);

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
     * @return   GsAtcCodes|GsAtcCodes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsAtcCodesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsAtcCodesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsAtcCodes A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByAtccode($key, $con = null)
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
     * @return                 GsAtcCodes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `atccode`, `atcnederlandse_omschrijving`, `atcengelse_omschrijving`, `atcindicator` FROM `gs_atc_codes` WHERE `atccode` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsAtcCodes();
            $obj->hydrate($row);
            GsAtcCodesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsAtcCodes|GsAtcCodes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsAtcCodes[]|mixed the list of results, formatted by the current formatter
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
     * @return GsAtcCodesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsAtcCodesPeer::ATCCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsAtcCodesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsAtcCodesPeer::ATCCODE, $keys, Criteria::IN);
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
     * @return GsAtcCodesQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsAtcCodesPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsAtcCodesPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAtcCodesPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsAtcCodesQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsAtcCodesPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsAtcCodesPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAtcCodesPeer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @return GsAtcCodesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GsAtcCodesPeer::ATCCODE, $atccode, $comparison);
    }

    /**
     * Filter the query on the atcnederlandse_omschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByAtcnederlandseOmschrijving('fooValue');   // WHERE atcnederlandse_omschrijving = 'fooValue'
     * $query->filterByAtcnederlandseOmschrijving('%fooValue%'); // WHERE atcnederlandse_omschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $atcnederlandseOmschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcCodesQuery The current query, for fluid interface
     */
    public function filterByAtcnederlandseOmschrijving($atcnederlandseOmschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($atcnederlandseOmschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $atcnederlandseOmschrijving)) {
                $atcnederlandseOmschrijving = str_replace('*', '%', $atcnederlandseOmschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcCodesPeer::ATCNEDERLANDSE_OMSCHRIJVING, $atcnederlandseOmschrijving, $comparison);
    }

    /**
     * Filter the query on the atcengelse_omschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByAtcengelseOmschrijving('fooValue');   // WHERE atcengelse_omschrijving = 'fooValue'
     * $query->filterByAtcengelseOmschrijving('%fooValue%'); // WHERE atcengelse_omschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $atcengelseOmschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcCodesQuery The current query, for fluid interface
     */
    public function filterByAtcengelseOmschrijving($atcengelseOmschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($atcengelseOmschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $atcengelseOmschrijving)) {
                $atcengelseOmschrijving = str_replace('*', '%', $atcengelseOmschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcCodesPeer::ATCENGELSE_OMSCHRIJVING, $atcengelseOmschrijving, $comparison);
    }

    /**
     * Filter the query on the atcindicator column
     *
     * Example usage:
     * <code>
     * $query->filterByAtcindicator('fooValue');   // WHERE atcindicator = 'fooValue'
     * $query->filterByAtcindicator('%fooValue%'); // WHERE atcindicator LIKE '%fooValue%'
     * </code>
     *
     * @param     string $atcindicator The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcCodesQuery The current query, for fluid interface
     */
    public function filterByAtcindicator($atcindicator = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($atcindicator)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $atcindicator)) {
                $atcindicator = str_replace('*', '%', $atcindicator);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcCodesPeer::ATCINDICATOR, $atcindicator, $comparison);
    }

    /**
     * Filter the query by a related GsArtikelEigenschappen object
     *
     * @param   GsArtikelEigenschappen|PropelObjectCollection $gsArtikelEigenschappen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsAtcCodesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelEigenschappen($gsArtikelEigenschappen, $comparison = null)
    {
        if ($gsArtikelEigenschappen instanceof GsArtikelEigenschappen) {
            return $this
                ->addUsingAlias(GsAtcCodesPeer::ATCCODE, $gsArtikelEigenschappen->getAtc(), $comparison);
        } elseif ($gsArtikelEigenschappen instanceof PropelObjectCollection) {
            return $this
                ->useGsArtikelEigenschappenQuery()
                ->filterByPrimaryKeys($gsArtikelEigenschappen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsArtikelEigenschappen() only accepts arguments of type GsArtikelEigenschappen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsArtikelEigenschappen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsAtcCodesQuery The current query, for fluid interface
     */
    public function joinGsArtikelEigenschappen($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsArtikelEigenschappen');

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
            $this->addJoinObject($join, 'GsArtikelEigenschappen');
        }

        return $this;
    }

    /**
     * Use the GsArtikelEigenschappen relation GsArtikelEigenschappen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery A secondary query class using the current class as primary query
     */
    public function useGsArtikelEigenschappenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsArtikelEigenschappen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelEigenschappen', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery');
    }

    /**
     * Filter the query by a related GsAtcCodesExtended object
     *
     * @param   GsAtcCodesExtended|PropelObjectCollection $gsAtcCodesExtended  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsAtcCodesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsAtcCodesExtended($gsAtcCodesExtended, $comparison = null)
    {
        if ($gsAtcCodesExtended instanceof GsAtcCodesExtended) {
            return $this
                ->addUsingAlias(GsAtcCodesPeer::ATCCODE, $gsAtcCodesExtended->getAtccode(), $comparison);
        } elseif ($gsAtcCodesExtended instanceof PropelObjectCollection) {
            return $this
                ->useGsAtcCodesExtendedQuery()
                ->filterByPrimaryKeys($gsAtcCodesExtended->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsAtcCodesExtended() only accepts arguments of type GsAtcCodesExtended or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsAtcCodesExtended relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsAtcCodesQuery The current query, for fluid interface
     */
    public function joinGsAtcCodesExtended($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsAtcCodesExtended');

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
            $this->addJoinObject($join, 'GsAtcCodesExtended');
        }

        return $this;
    }

    /**
     * Use the GsAtcCodesExtended relation GsAtcCodesExtended object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesExtendedQuery A secondary query class using the current class as primary query
     */
    public function useGsAtcCodesExtendedQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsAtcCodesExtended($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsAtcCodesExtended', '\PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesExtendedQuery');
    }

    /**
     * Filter the query by a related GsAtcdddgegevens object
     *
     * @param   GsAtcdddgegevens|PropelObjectCollection $gsAtcdddgegevens  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsAtcCodesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsAtcdddgegevens($gsAtcdddgegevens, $comparison = null)
    {
        if ($gsAtcdddgegevens instanceof GsAtcdddgegevens) {
            return $this
                ->addUsingAlias(GsAtcCodesPeer::ATCCODE, $gsAtcdddgegevens->getAtccode(), $comparison);
        } elseif ($gsAtcdddgegevens instanceof PropelObjectCollection) {
            return $this
                ->useGsAtcdddgegevensQuery()
                ->filterByPrimaryKeys($gsAtcdddgegevens->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsAtcdddgegevens() only accepts arguments of type GsAtcdddgegevens or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsAtcdddgegevens relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsAtcCodesQuery The current query, for fluid interface
     */
    public function joinGsAtcdddgegevens($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsAtcdddgegevens');

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
            $this->addJoinObject($join, 'GsAtcdddgegevens');
        }

        return $this;
    }

    /**
     * Use the GsAtcdddgegevens relation GsAtcdddgegevens object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsAtcdddgegevensQuery A secondary query class using the current class as primary query
     */
    public function useGsAtcdddgegevensQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsAtcdddgegevens($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsAtcdddgegevens', '\PharmaIntelligence\GstandaardBundle\Model\GsAtcdddgegevensQuery');
    }

    /**
     * Filter the query by a related GsDailyDefinedDose object
     *
     * @param   GsDailyDefinedDose|PropelObjectCollection $gsDailyDefinedDose  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsAtcCodesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsDailyDefinedDose($gsDailyDefinedDose, $comparison = null)
    {
        if ($gsDailyDefinedDose instanceof GsDailyDefinedDose) {
            return $this
                ->addUsingAlias(GsAtcCodesPeer::ATCCODE, $gsDailyDefinedDose->getAtccode(), $comparison);
        } elseif ($gsDailyDefinedDose instanceof PropelObjectCollection) {
            return $this
                ->useGsDailyDefinedDoseQuery()
                ->filterByPrimaryKeys($gsDailyDefinedDose->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsDailyDefinedDose() only accepts arguments of type GsDailyDefinedDose or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsDailyDefinedDose relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsAtcCodesQuery The current query, for fluid interface
     */
    public function joinGsDailyDefinedDose($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsDailyDefinedDose');

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
            $this->addJoinObject($join, 'GsDailyDefinedDose');
        }

        return $this;
    }

    /**
     * Use the GsDailyDefinedDose relation GsDailyDefinedDose object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDoseQuery A secondary query class using the current class as primary query
     */
    public function useGsDailyDefinedDoseQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsDailyDefinedDose($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsDailyDefinedDose', '\PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDoseQuery');
    }

    /**
     * Filter the query by a related GsGeneriekeProducten object
     *
     * @param   GsGeneriekeProducten|PropelObjectCollection $gsGeneriekeProducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsAtcCodesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsGeneriekeProducten($gsGeneriekeProducten, $comparison = null)
    {
        if ($gsGeneriekeProducten instanceof GsGeneriekeProducten) {
            return $this
                ->addUsingAlias(GsAtcCodesPeer::ATCCODE, $gsGeneriekeProducten->getAtccode(), $comparison);
        } elseif ($gsGeneriekeProducten instanceof PropelObjectCollection) {
            return $this
                ->useGsGeneriekeProductenQuery()
                ->filterByPrimaryKeys($gsGeneriekeProducten->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsGeneriekeProducten() only accepts arguments of type GsGeneriekeProducten or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsGeneriekeProducten relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsAtcCodesQuery The current query, for fluid interface
     */
    public function joinGsGeneriekeProducten($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsGeneriekeProducten');

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
            $this->addJoinObject($join, 'GsGeneriekeProducten');
        }

        return $this;
    }

    /**
     * Use the GsGeneriekeProducten relation GsGeneriekeProducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery A secondary query class using the current class as primary query
     */
    public function useGsGeneriekeProductenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsGeneriekeProducten($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsGeneriekeProducten', '\PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsAtcCodes $gsAtcCodes Object to remove from the list of results
     *
     * @return GsAtcCodesQuery The current query, for fluid interface
     */
    public function prune($gsAtcCodes = null)
    {
        if ($gsAtcCodes) {
            $this->addUsingAlias(GsAtcCodesPeer::ATCCODE, $gsAtcCodes->getAtccode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
