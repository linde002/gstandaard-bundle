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
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieTussenZinummerHibc;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieTussenZinummerHibcPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieTussenZinummerHibcQuery;

/**
 * @method GsRelatieTussenZinummerHibcQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsRelatieTussenZinummerHibcQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsRelatieTussenZinummerHibcQuery orderByZinummer($order = Criteria::ASC) Order by the zinummer column
 * @method GsRelatieTussenZinummerHibcQuery orderByHibcbarcode($order = Criteria::ASC) Order by the hibcbarcode column
 * @method GsRelatieTussenZinummerHibcQuery orderByHandelsproduktkode($order = Criteria::ASC) Order by the handelsproduktkode column
 * @method GsRelatieTussenZinummerHibcQuery orderByIdentificatieNummer($order = Criteria::ASC) Order by the identificatie_nummer column
 *
 * @method GsRelatieTussenZinummerHibcQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsRelatieTussenZinummerHibcQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsRelatieTussenZinummerHibcQuery groupByZinummer() Group by the zinummer column
 * @method GsRelatieTussenZinummerHibcQuery groupByHibcbarcode() Group by the hibcbarcode column
 * @method GsRelatieTussenZinummerHibcQuery groupByHandelsproduktkode() Group by the handelsproduktkode column
 * @method GsRelatieTussenZinummerHibcQuery groupByIdentificatieNummer() Group by the identificatie_nummer column
 *
 * @method GsRelatieTussenZinummerHibcQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsRelatieTussenZinummerHibcQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsRelatieTussenZinummerHibcQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsRelatieTussenZinummerHibcQuery leftJoinGsArtikelen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelen relation
 * @method GsRelatieTussenZinummerHibcQuery rightJoinGsArtikelen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelen relation
 * @method GsRelatieTussenZinummerHibcQuery innerJoinGsArtikelen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelen relation
 *
 * @method GsRelatieTussenZinummerHibc findOne(PropelPDO $con = null) Return the first GsRelatieTussenZinummerHibc matching the query
 * @method GsRelatieTussenZinummerHibc findOneOrCreate(PropelPDO $con = null) Return the first GsRelatieTussenZinummerHibc matching the query, or a new GsRelatieTussenZinummerHibc object populated from the query conditions when no match is found
 *
 * @method GsRelatieTussenZinummerHibc findOneByBestandnummer(int $bestandnummer) Return the first GsRelatieTussenZinummerHibc filtered by the bestandnummer column
 * @method GsRelatieTussenZinummerHibc findOneByMutatiekode(int $mutatiekode) Return the first GsRelatieTussenZinummerHibc filtered by the mutatiekode column
 * @method GsRelatieTussenZinummerHibc findOneByHibcbarcode(string $hibcbarcode) Return the first GsRelatieTussenZinummerHibc filtered by the hibcbarcode column
 * @method GsRelatieTussenZinummerHibc findOneByHandelsproduktkode(string $handelsproduktkode) Return the first GsRelatieTussenZinummerHibc filtered by the handelsproduktkode column
 * @method GsRelatieTussenZinummerHibc findOneByIdentificatieNummer(string $identificatie_nummer) Return the first GsRelatieTussenZinummerHibc filtered by the identificatie_nummer column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsRelatieTussenZinummerHibc objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsRelatieTussenZinummerHibc objects filtered by the mutatiekode column
 * @method array findByZinummer(int $zinummer) Return GsRelatieTussenZinummerHibc objects filtered by the zinummer column
 * @method array findByHibcbarcode(string $hibcbarcode) Return GsRelatieTussenZinummerHibc objects filtered by the hibcbarcode column
 * @method array findByHandelsproduktkode(string $handelsproduktkode) Return GsRelatieTussenZinummerHibc objects filtered by the handelsproduktkode column
 * @method array findByIdentificatieNummer(string $identificatie_nummer) Return GsRelatieTussenZinummerHibc objects filtered by the identificatie_nummer column
 */
abstract class BaseGsRelatieTussenZinummerHibcQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsRelatieTussenZinummerHibcQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRelatieTussenZinummerHibc';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsRelatieTussenZinummerHibcQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsRelatieTussenZinummerHibcQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsRelatieTussenZinummerHibcQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsRelatieTussenZinummerHibcQuery) {
            return $criteria;
        }
        $query = new GsRelatieTussenZinummerHibcQuery(null, null, $modelAlias);

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
     * @return   GsRelatieTussenZinummerHibc|GsRelatieTussenZinummerHibc[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsRelatieTussenZinummerHibcPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsRelatieTussenZinummerHibcPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsRelatieTussenZinummerHibc A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByZinummer($key, $con = null)
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
     * @return                 GsRelatieTussenZinummerHibc A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `zinummer`, `hibcbarcode`, `handelsproduktkode`, `identificatie_nummer` FROM `gs_relatie_tussen_zinummer_hibc` WHERE `zinummer` = :p0';
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
            $obj = new GsRelatieTussenZinummerHibc();
            $obj->hydrate($row);
            GsRelatieTussenZinummerHibcPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsRelatieTussenZinummerHibc|GsRelatieTussenZinummerHibc[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsRelatieTussenZinummerHibc[]|mixed the list of results, formatted by the current formatter
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
     * @return GsRelatieTussenZinummerHibcQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsRelatieTussenZinummerHibcPeer::ZINUMMER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsRelatieTussenZinummerHibcQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsRelatieTussenZinummerHibcPeer::ZINUMMER, $keys, Criteria::IN);
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
     * @return GsRelatieTussenZinummerHibcQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsRelatieTussenZinummerHibcPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsRelatieTussenZinummerHibcPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatieTussenZinummerHibcPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsRelatieTussenZinummerHibcQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsRelatieTussenZinummerHibcPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsRelatieTussenZinummerHibcPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatieTussenZinummerHibcPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the zinummer column
     *
     * Example usage:
     * <code>
     * $query->filterByZinummer(1234); // WHERE zinummer = 1234
     * $query->filterByZinummer(array(12, 34)); // WHERE zinummer IN (12, 34)
     * $query->filterByZinummer(array('min' => 12)); // WHERE zinummer >= 12
     * $query->filterByZinummer(array('max' => 12)); // WHERE zinummer <= 12
     * </code>
     *
     * @see       filterByGsArtikelen()
     *
     * @param     mixed $zinummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatieTussenZinummerHibcQuery The current query, for fluid interface
     */
    public function filterByZinummer($zinummer = null, $comparison = null)
    {
        if (is_array($zinummer)) {
            $useMinMax = false;
            if (isset($zinummer['min'])) {
                $this->addUsingAlias(GsRelatieTussenZinummerHibcPeer::ZINUMMER, $zinummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zinummer['max'])) {
                $this->addUsingAlias(GsRelatieTussenZinummerHibcPeer::ZINUMMER, $zinummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRelatieTussenZinummerHibcPeer::ZINUMMER, $zinummer, $comparison);
    }

    /**
     * Filter the query on the hibcbarcode column
     *
     * Example usage:
     * <code>
     * $query->filterByHibcbarcode('fooValue');   // WHERE hibcbarcode = 'fooValue'
     * $query->filterByHibcbarcode('%fooValue%'); // WHERE hibcbarcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hibcbarcode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatieTussenZinummerHibcQuery The current query, for fluid interface
     */
    public function filterByHibcbarcode($hibcbarcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hibcbarcode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hibcbarcode)) {
                $hibcbarcode = str_replace('*', '%', $hibcbarcode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsRelatieTussenZinummerHibcPeer::HIBCBARCODE, $hibcbarcode, $comparison);
    }

    /**
     * Filter the query on the handelsproduktkode column
     *
     * Example usage:
     * <code>
     * $query->filterByHandelsproduktkode('fooValue');   // WHERE handelsproduktkode = 'fooValue'
     * $query->filterByHandelsproduktkode('%fooValue%'); // WHERE handelsproduktkode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $handelsproduktkode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatieTussenZinummerHibcQuery The current query, for fluid interface
     */
    public function filterByHandelsproduktkode($handelsproduktkode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($handelsproduktkode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $handelsproduktkode)) {
                $handelsproduktkode = str_replace('*', '%', $handelsproduktkode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsRelatieTussenZinummerHibcPeer::HANDELSPRODUKTKODE, $handelsproduktkode, $comparison);
    }

    /**
     * Filter the query on the identificatie_nummer column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentificatieNummer('fooValue');   // WHERE identificatie_nummer = 'fooValue'
     * $query->filterByIdentificatieNummer('%fooValue%'); // WHERE identificatie_nummer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identificatieNummer The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRelatieTussenZinummerHibcQuery The current query, for fluid interface
     */
    public function filterByIdentificatieNummer($identificatieNummer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identificatieNummer)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identificatieNummer)) {
                $identificatieNummer = str_replace('*', '%', $identificatieNummer);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsRelatieTussenZinummerHibcPeer::IDENTIFICATIE_NUMMER, $identificatieNummer, $comparison);
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsRelatieTussenZinummerHibcQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelen($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsRelatieTussenZinummerHibcPeer::ZINUMMER, $gsArtikelen->getZinummer(), $comparison);
        } elseif ($gsArtikelen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsRelatieTussenZinummerHibcPeer::ZINUMMER, $gsArtikelen->toKeyValue('PrimaryKey', 'Zinummer'), $comparison);
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
     * @return GsRelatieTussenZinummerHibcQuery The current query, for fluid interface
     */
    public function joinGsArtikelen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useGsArtikelenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsArtikelen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelen', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsRelatieTussenZinummerHibc $gsRelatieTussenZinummerHibc Object to remove from the list of results
     *
     * @return GsRelatieTussenZinummerHibcQuery The current query, for fluid interface
     */
    public function prune($gsRelatieTussenZinummerHibc = null)
    {
        if ($gsRelatieTussenZinummerHibc) {
            $this->addUsingAlias(GsRelatieTussenZinummerHibcPeer::ZINUMMER, $gsRelatieTussenZinummerHibc->getZinummer(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
