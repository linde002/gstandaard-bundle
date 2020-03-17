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
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProducten;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsNamen;
use PharmaIntelligence\GstandaardBundle\Model\GsNamenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsNamenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProduct;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfproducten;

/**
 * @method GsNamenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsNamenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsNamenQuery orderByNaamnummer($order = Criteria::ASC) Order by the naamnummer column
 * @method GsNamenQuery orderByMemokode($order = Criteria::ASC) Order by the memokode column
 * @method GsNamenQuery orderByEtiketnaam($order = Criteria::ASC) Order by the etiketnaam column
 * @method GsNamenQuery orderByKorteHandelsnaam($order = Criteria::ASC) Order by the korte_handelsnaam column
 * @method GsNamenQuery orderByNaamVolledig($order = Criteria::ASC) Order by the naam_volledig column
 *
 * @method GsNamenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsNamenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsNamenQuery groupByNaamnummer() Group by the naamnummer column
 * @method GsNamenQuery groupByMemokode() Group by the memokode column
 * @method GsNamenQuery groupByEtiketnaam() Group by the etiketnaam column
 * @method GsNamenQuery groupByKorteHandelsnaam() Group by the korte_handelsnaam column
 * @method GsNamenQuery groupByNaamVolledig() Group by the naam_volledig column
 *
 * @method GsNamenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsNamenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsNamenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsNamenQuery leftJoinGsArtikelen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelen relation
 * @method GsNamenQuery rightJoinGsArtikelen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelen relation
 * @method GsNamenQuery innerJoinGsArtikelen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelen relation
 *
 * @method GsNamenQuery leftJoinGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam relation
 * @method GsNamenQuery rightJoinGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam relation
 * @method GsNamenQuery innerJoinGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam($relationAlias = null) Adds a INNER JOIN clause to the query using the GsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam relation
 *
 * @method GsNamenQuery leftJoinGeneriekeProducten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GeneriekeProducten relation
 * @method GsNamenQuery rightJoinGeneriekeProducten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GeneriekeProducten relation
 * @method GsNamenQuery innerJoinGeneriekeProducten($relationAlias = null) Adds a INNER JOIN clause to the query using the GeneriekeProducten relation
 *
 * @method GsNamenQuery leftJoinGsHandelsproducten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproducten relation
 * @method GsNamenQuery rightJoinGsHandelsproducten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproducten relation
 * @method GsNamenQuery innerJoinGsHandelsproducten($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproducten relation
 *
 * @method GsNamenQuery leftJoinGsPrescriptieProduct($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsPrescriptieProduct relation
 * @method GsNamenQuery rightJoinGsPrescriptieProduct($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsPrescriptieProduct relation
 * @method GsNamenQuery innerJoinGsPrescriptieProduct($relationAlias = null) Adds a INNER JOIN clause to the query using the GsPrescriptieProduct relation
 *
 * @method GsNamenQuery leftJoinGsVoorschrijfproducten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsVoorschrijfproducten relation
 * @method GsNamenQuery rightJoinGsVoorschrijfproducten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsVoorschrijfproducten relation
 * @method GsNamenQuery innerJoinGsVoorschrijfproducten($relationAlias = null) Adds a INNER JOIN clause to the query using the GsVoorschrijfproducten relation
 *
 * @method GsNamen findOne(PropelPDO $con = null) Return the first GsNamen matching the query
 * @method GsNamen findOneOrCreate(PropelPDO $con = null) Return the first GsNamen matching the query, or a new GsNamen object populated from the query conditions when no match is found
 *
 * @method GsNamen findOneByBestandnummer(int $bestandnummer) Return the first GsNamen filtered by the bestandnummer column
 * @method GsNamen findOneByMutatiekode(int $mutatiekode) Return the first GsNamen filtered by the mutatiekode column
 * @method GsNamen findOneByMemokode(string $memokode) Return the first GsNamen filtered by the memokode column
 * @method GsNamen findOneByEtiketnaam(string $etiketnaam) Return the first GsNamen filtered by the etiketnaam column
 * @method GsNamen findOneByKorteHandelsnaam(string $korte_handelsnaam) Return the first GsNamen filtered by the korte_handelsnaam column
 * @method GsNamen findOneByNaamVolledig(string $naam_volledig) Return the first GsNamen filtered by the naam_volledig column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsNamen objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsNamen objects filtered by the mutatiekode column
 * @method array findByNaamnummer(int $naamnummer) Return GsNamen objects filtered by the naamnummer column
 * @method array findByMemokode(string $memokode) Return GsNamen objects filtered by the memokode column
 * @method array findByEtiketnaam(string $etiketnaam) Return GsNamen objects filtered by the etiketnaam column
 * @method array findByKorteHandelsnaam(string $korte_handelsnaam) Return GsNamen objects filtered by the korte_handelsnaam column
 * @method array findByNaamVolledig(string $naam_volledig) Return GsNamen objects filtered by the naam_volledig column
 */
abstract class BaseGsNamenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsNamenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsNamen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsNamenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsNamenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsNamenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsNamenQuery) {
            return $criteria;
        }
        $query = new GsNamenQuery(null, null, $modelAlias);

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
     * @return   GsNamen|GsNamen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsNamenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsNamenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsNamen A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByNaamnummer($key, $con = null)
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
     * @return                 GsNamen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `naamnummer`, `memokode`, `etiketnaam`, `korte_handelsnaam`, `naam_volledig` FROM `gs_namen` WHERE `naamnummer` = :p0';
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
            $obj = new GsNamen();
            $obj->hydrate($row);
            GsNamenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsNamen|GsNamen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsNamen[]|mixed the list of results, formatted by the current formatter
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
     * @return GsNamenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsNamenPeer::NAAMNUMMER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsNamenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsNamenPeer::NAAMNUMMER, $keys, Criteria::IN);
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
     * @return GsNamenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsNamenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsNamenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsNamenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsNamenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsNamenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsNamenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsNamenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the naamnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByNaamnummer(1234); // WHERE naamnummer = 1234
     * $query->filterByNaamnummer(array(12, 34)); // WHERE naamnummer IN (12, 34)
     * $query->filterByNaamnummer(array('min' => 12)); // WHERE naamnummer >= 12
     * $query->filterByNaamnummer(array('max' => 12)); // WHERE naamnummer <= 12
     * </code>
     *
     * @param     mixed $naamnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNamenQuery The current query, for fluid interface
     */
    public function filterByNaamnummer($naamnummer = null, $comparison = null)
    {
        if (is_array($naamnummer)) {
            $useMinMax = false;
            if (isset($naamnummer['min'])) {
                $this->addUsingAlias(GsNamenPeer::NAAMNUMMER, $naamnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($naamnummer['max'])) {
                $this->addUsingAlias(GsNamenPeer::NAAMNUMMER, $naamnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsNamenPeer::NAAMNUMMER, $naamnummer, $comparison);
    }

    /**
     * Filter the query on the memokode column
     *
     * Example usage:
     * <code>
     * $query->filterByMemokode('fooValue');   // WHERE memokode = 'fooValue'
     * $query->filterByMemokode('%fooValue%'); // WHERE memokode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $memokode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNamenQuery The current query, for fluid interface
     */
    public function filterByMemokode($memokode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($memokode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $memokode)) {
                $memokode = str_replace('*', '%', $memokode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsNamenPeer::MEMOKODE, $memokode, $comparison);
    }

    /**
     * Filter the query on the etiketnaam column
     *
     * Example usage:
     * <code>
     * $query->filterByEtiketnaam('fooValue');   // WHERE etiketnaam = 'fooValue'
     * $query->filterByEtiketnaam('%fooValue%'); // WHERE etiketnaam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etiketnaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNamenQuery The current query, for fluid interface
     */
    public function filterByEtiketnaam($etiketnaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etiketnaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etiketnaam)) {
                $etiketnaam = str_replace('*', '%', $etiketnaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsNamenPeer::ETIKETNAAM, $etiketnaam, $comparison);
    }

    /**
     * Filter the query on the korte_handelsnaam column
     *
     * Example usage:
     * <code>
     * $query->filterByKorteHandelsnaam('fooValue');   // WHERE korte_handelsnaam = 'fooValue'
     * $query->filterByKorteHandelsnaam('%fooValue%'); // WHERE korte_handelsnaam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $korteHandelsnaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNamenQuery The current query, for fluid interface
     */
    public function filterByKorteHandelsnaam($korteHandelsnaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($korteHandelsnaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $korteHandelsnaam)) {
                $korteHandelsnaam = str_replace('*', '%', $korteHandelsnaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsNamenPeer::KORTE_HANDELSNAAM, $korteHandelsnaam, $comparison);
    }

    /**
     * Filter the query on the naam_volledig column
     *
     * Example usage:
     * <code>
     * $query->filterByNaamVolledig('fooValue');   // WHERE naam_volledig = 'fooValue'
     * $query->filterByNaamVolledig('%fooValue%'); // WHERE naam_volledig LIKE '%fooValue%'
     * </code>
     *
     * @param     string $naamVolledig The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNamenQuery The current query, for fluid interface
     */
    public function filterByNaamVolledig($naamVolledig = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($naamVolledig)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $naamVolledig)) {
                $naamVolledig = str_replace('*', '%', $naamVolledig);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsNamenPeer::NAAM_VOLLEDIG, $naamVolledig, $comparison);
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsNamenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelen($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsNamenPeer::NAAMNUMMER, $gsArtikelen->getArtikelnaamnummer(), $comparison);
        } elseif ($gsArtikelen instanceof PropelObjectCollection) {
            return $this
                ->useGsArtikelenQuery()
                ->filterByPrimaryKeys($gsArtikelen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsArtikelen() only accepts arguments of type GsArtikelen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsArtikelen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsNamenQuery The current query, for fluid interface
     */
    public function joinGsArtikelen($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsArtikelen');

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
            $this->addJoinObject($join, 'GsArtikelen');
        }

        return $this;
    }

    /**
     * Use the GsArtikelen relation GsArtikelen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery A secondary query class using the current class as primary query
     */
    public function useGsArtikelenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsArtikelen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelen', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery');
    }

    /**
     * Filter the query by a related GsGeneriekeProducten object
     *
     * @param   GsGeneriekeProducten|PropelObjectCollection $gsGeneriekeProducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsNamenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam($gsGeneriekeProducten, $comparison = null)
    {
        if ($gsGeneriekeProducten instanceof GsGeneriekeProducten) {
            return $this
                ->addUsingAlias(GsNamenPeer::NAAMNUMMER, $gsGeneriekeProducten->getNaamnummerVolledigeGpknaam(), $comparison);
        } elseif ($gsGeneriekeProducten instanceof PropelObjectCollection) {
            return $this
                ->useGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaamQuery()
                ->filterByPrimaryKeys($gsGeneriekeProducten->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam() only accepts arguments of type GsGeneriekeProducten or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsNamenQuery The current query, for fluid interface
     */
    public function joinGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam');

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
            $this->addJoinObject($join, 'GsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam');
        }

        return $this;
    }

    /**
     * Use the GsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam relation GsGeneriekeProducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery A secondary query class using the current class as primary query
     */
    public function useGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaamQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam', '\PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery');
    }

    /**
     * Filter the query by a related GsGeneriekeProducten object
     *
     * @param   GsGeneriekeProducten|PropelObjectCollection $gsGeneriekeProducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsNamenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGeneriekeProducten($gsGeneriekeProducten, $comparison = null)
    {
        if ($gsGeneriekeProducten instanceof GsGeneriekeProducten) {
            return $this
                ->addUsingAlias(GsNamenPeer::NAAMNUMMER, $gsGeneriekeProducten->getNaamnummerGpkstofnaam(), $comparison);
        } elseif ($gsGeneriekeProducten instanceof PropelObjectCollection) {
            return $this
                ->useGeneriekeProductenQuery()
                ->filterByPrimaryKeys($gsGeneriekeProducten->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGeneriekeProducten() only accepts arguments of type GsGeneriekeProducten or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GeneriekeProducten relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsNamenQuery The current query, for fluid interface
     */
    public function joinGeneriekeProducten($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GeneriekeProducten');

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
            $this->addJoinObject($join, 'GeneriekeProducten');
        }

        return $this;
    }

    /**
     * Use the GeneriekeProducten relation GsGeneriekeProducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery A secondary query class using the current class as primary query
     */
    public function useGeneriekeProductenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGeneriekeProducten($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GeneriekeProducten', '\PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery');
    }

    /**
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsNamenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproducten($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsNamenPeer::NAAMNUMMER, $gsHandelsproducten->getHandelsproduktnaamnummer(), $comparison);
        } elseif ($gsHandelsproducten instanceof PropelObjectCollection) {
            return $this
                ->useGsHandelsproductenQuery()
                ->filterByPrimaryKeys($gsHandelsproducten->getPrimaryKeys())
                ->endUse();
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
     * @return GsNamenQuery The current query, for fluid interface
     */
    public function joinGsHandelsproducten($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useGsHandelsproductenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsHandelsproducten($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsHandelsproducten', '\PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery');
    }

    /**
     * Filter the query by a related GsPrescriptieProduct object
     *
     * @param   GsPrescriptieProduct|PropelObjectCollection $gsPrescriptieProduct  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsNamenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsPrescriptieProduct($gsPrescriptieProduct, $comparison = null)
    {
        if ($gsPrescriptieProduct instanceof GsPrescriptieProduct) {
            return $this
                ->addUsingAlias(GsNamenPeer::NAAMNUMMER, $gsPrescriptieProduct->getNaamnummerPrescriptieProduct(), $comparison);
        } elseif ($gsPrescriptieProduct instanceof PropelObjectCollection) {
            return $this
                ->useGsPrescriptieProductQuery()
                ->filterByPrimaryKeys($gsPrescriptieProduct->getPrimaryKeys())
                ->endUse();
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
     * @return GsNamenQuery The current query, for fluid interface
     */
    public function joinGsPrescriptieProduct($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useGsPrescriptieProductQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsPrescriptieProduct($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsPrescriptieProduct', '\PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProductQuery');
    }

    /**
     * Filter the query by a related GsVoorschrijfproducten object
     *
     * @param   GsVoorschrijfproducten|PropelObjectCollection $gsVoorschrijfproducten  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsNamenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsVoorschrijfproducten($gsVoorschrijfproducten, $comparison = null)
    {
        if ($gsVoorschrijfproducten instanceof GsVoorschrijfproducten) {
            return $this
                ->addUsingAlias(GsNamenPeer::NAAMNUMMER, $gsVoorschrijfproducten->getNaamnummerPrescriptieProduct(), $comparison);
        } elseif ($gsVoorschrijfproducten instanceof PropelObjectCollection) {
            return $this
                ->useGsVoorschrijfproductenQuery()
                ->filterByPrimaryKeys($gsVoorschrijfproducten->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsVoorschrijfproducten() only accepts arguments of type GsVoorschrijfproducten or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsVoorschrijfproducten relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsNamenQuery The current query, for fluid interface
     */
    public function joinGsVoorschrijfproducten($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsVoorschrijfproducten');

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
            $this->addJoinObject($join, 'GsVoorschrijfproducten');
        }

        return $this;
    }

    /**
     * Use the GsVoorschrijfproducten relation GsVoorschrijfproducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfproductenQuery A secondary query class using the current class as primary query
     */
    public function useGsVoorschrijfproductenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsVoorschrijfproducten($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsVoorschrijfproducten', '\PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfproductenQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsNamen $gsNamen Object to remove from the list of results
     *
     * @return GsNamenQuery The current query, for fluid interface
     */
    public function prune($gsNamen = null)
    {
        if ($gsNamen) {
            $this->addUsingAlias(GsNamenPeer::NAAMNUMMER, $gsNamen->getNaamnummer(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
