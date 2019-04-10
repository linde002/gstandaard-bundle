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
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenHistorie;
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenHistoriePeer;
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenHistorieQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;

/**
 * @method GsSupplementaireProductenHistorieQuery orderByDatumProduct($order = Criteria::ASC) Order by the datum_product column
 * @method GsSupplementaireProductenHistorieQuery orderByZindexNummer($order = Criteria::ASC) Order by the zindex_nummer column
 * @method GsSupplementaireProductenHistorieQuery orderByNzaMaximumTariefIncBtwLaag($order = Criteria::ASC) Order by the nza_maximum_tarief_inc_btw_laag column
 * @method GsSupplementaireProductenHistorieQuery orderByThesaurusNummerSoortSupplementairProduct($order = Criteria::ASC) Order by the thesaurus_nummer_soort_supplementair_product column
 * @method GsSupplementaireProductenHistorieQuery orderBySoortSupplementairProduct($order = Criteria::ASC) Order by the soort_supplementair_product column
 *
 * @method GsSupplementaireProductenHistorieQuery groupByDatumProduct() Group by the datum_product column
 * @method GsSupplementaireProductenHistorieQuery groupByZindexNummer() Group by the zindex_nummer column
 * @method GsSupplementaireProductenHistorieQuery groupByNzaMaximumTariefIncBtwLaag() Group by the nza_maximum_tarief_inc_btw_laag column
 * @method GsSupplementaireProductenHistorieQuery groupByThesaurusNummerSoortSupplementairProduct() Group by the thesaurus_nummer_soort_supplementair_product column
 * @method GsSupplementaireProductenHistorieQuery groupBySoortSupplementairProduct() Group by the soort_supplementair_product column
 *
 * @method GsSupplementaireProductenHistorieQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsSupplementaireProductenHistorieQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsSupplementaireProductenHistorieQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsSupplementaireProductenHistorieQuery leftJoinGsArtikelen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelen relation
 * @method GsSupplementaireProductenHistorieQuery rightJoinGsArtikelen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelen relation
 * @method GsSupplementaireProductenHistorieQuery innerJoinGsArtikelen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelen relation
 *
 * @method GsSupplementaireProductenHistorieQuery leftJoinGsThesauriTotaal($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsThesauriTotaal relation
 * @method GsSupplementaireProductenHistorieQuery rightJoinGsThesauriTotaal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsThesauriTotaal relation
 * @method GsSupplementaireProductenHistorieQuery innerJoinGsThesauriTotaal($relationAlias = null) Adds a INNER JOIN clause to the query using the GsThesauriTotaal relation
 *
 * @method GsSupplementaireProductenHistorie findOne(PropelPDO $con = null) Return the first GsSupplementaireProductenHistorie matching the query
 * @method GsSupplementaireProductenHistorie findOneOrCreate(PropelPDO $con = null) Return the first GsSupplementaireProductenHistorie matching the query, or a new GsSupplementaireProductenHistorie object populated from the query conditions when no match is found
 *
 * @method GsSupplementaireProductenHistorie findOneByDatumProduct(string $datum_product) Return the first GsSupplementaireProductenHistorie filtered by the datum_product column
 * @method GsSupplementaireProductenHistorie findOneByZindexNummer(int $zindex_nummer) Return the first GsSupplementaireProductenHistorie filtered by the zindex_nummer column
 * @method GsSupplementaireProductenHistorie findOneByNzaMaximumTariefIncBtwLaag(string $nza_maximum_tarief_inc_btw_laag) Return the first GsSupplementaireProductenHistorie filtered by the nza_maximum_tarief_inc_btw_laag column
 * @method GsSupplementaireProductenHistorie findOneByThesaurusNummerSoortSupplementairProduct(int $thesaurus_nummer_soort_supplementair_product) Return the first GsSupplementaireProductenHistorie filtered by the thesaurus_nummer_soort_supplementair_product column
 * @method GsSupplementaireProductenHistorie findOneBySoortSupplementairProduct(int $soort_supplementair_product) Return the first GsSupplementaireProductenHistorie filtered by the soort_supplementair_product column
 *
 * @method array findByDatumProduct(string $datum_product) Return GsSupplementaireProductenHistorie objects filtered by the datum_product column
 * @method array findByZindexNummer(int $zindex_nummer) Return GsSupplementaireProductenHistorie objects filtered by the zindex_nummer column
 * @method array findByNzaMaximumTariefIncBtwLaag(string $nza_maximum_tarief_inc_btw_laag) Return GsSupplementaireProductenHistorie objects filtered by the nza_maximum_tarief_inc_btw_laag column
 * @method array findByThesaurusNummerSoortSupplementairProduct(int $thesaurus_nummer_soort_supplementair_product) Return GsSupplementaireProductenHistorie objects filtered by the thesaurus_nummer_soort_supplementair_product column
 * @method array findBySoortSupplementairProduct(int $soort_supplementair_product) Return GsSupplementaireProductenHistorie objects filtered by the soort_supplementair_product column
 */
abstract class BaseGsSupplementaireProductenHistorieQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsSupplementaireProductenHistorieQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsSupplementaireProductenHistorie';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsSupplementaireProductenHistorieQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsSupplementaireProductenHistorieQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsSupplementaireProductenHistorieQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsSupplementaireProductenHistorieQuery) {
            return $criteria;
        }
        $query = new GsSupplementaireProductenHistorieQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$datum_product, $zindex_nummer]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsSupplementaireProductenHistorie|GsSupplementaireProductenHistorie[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsSupplementaireProductenHistoriePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsSupplementaireProductenHistoriePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsSupplementaireProductenHistorie A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `datum_product`, `zindex_nummer`, `nza_maximum_tarief_inc_btw_laag`, `thesaurus_nummer_soort_supplementair_product`, `soort_supplementair_product` FROM `gs_supplementaire_producten_historie` WHERE `datum_product` = :p0 AND `zindex_nummer` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsSupplementaireProductenHistorie();
            $obj->hydrate($row);
            GsSupplementaireProductenHistoriePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsSupplementaireProductenHistorie|GsSupplementaireProductenHistorie[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsSupplementaireProductenHistorie[]|mixed the list of results, formatted by the current formatter
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
     * @return GsSupplementaireProductenHistorieQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsSupplementaireProductenHistoriePeer::DATUM_PRODUCT, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsSupplementaireProductenHistoriePeer::ZINDEX_NUMMER, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsSupplementaireProductenHistorieQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsSupplementaireProductenHistoriePeer::DATUM_PRODUCT, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsSupplementaireProductenHistoriePeer::ZINDEX_NUMMER, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the datum_product column
     *
     * Example usage:
     * <code>
     * $query->filterByDatumProduct('2011-03-14'); // WHERE datum_product = '2011-03-14'
     * $query->filterByDatumProduct('now'); // WHERE datum_product = '2011-03-14'
     * $query->filterByDatumProduct(array('max' => 'yesterday')); // WHERE datum_product < '2011-03-13'
     * </code>
     *
     * @param     mixed $datumProduct The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsSupplementaireProductenHistorieQuery The current query, for fluid interface
     */
    public function filterByDatumProduct($datumProduct = null, $comparison = null)
    {
        if (is_array($datumProduct)) {
            $useMinMax = false;
            if (isset($datumProduct['min'])) {
                $this->addUsingAlias(GsSupplementaireProductenHistoriePeer::DATUM_PRODUCT, $datumProduct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumProduct['max'])) {
                $this->addUsingAlias(GsSupplementaireProductenHistoriePeer::DATUM_PRODUCT, $datumProduct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSupplementaireProductenHistoriePeer::DATUM_PRODUCT, $datumProduct, $comparison);
    }

    /**
     * Filter the query on the zindex_nummer column
     *
     * Example usage:
     * <code>
     * $query->filterByZindexNummer(1234); // WHERE zindex_nummer = 1234
     * $query->filterByZindexNummer(array(12, 34)); // WHERE zindex_nummer IN (12, 34)
     * $query->filterByZindexNummer(array('min' => 12)); // WHERE zindex_nummer >= 12
     * $query->filterByZindexNummer(array('max' => 12)); // WHERE zindex_nummer <= 12
     * </code>
     *
     * @see       filterByGsArtikelen()
     *
     * @param     mixed $zindexNummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsSupplementaireProductenHistorieQuery The current query, for fluid interface
     */
    public function filterByZindexNummer($zindexNummer = null, $comparison = null)
    {
        if (is_array($zindexNummer)) {
            $useMinMax = false;
            if (isset($zindexNummer['min'])) {
                $this->addUsingAlias(GsSupplementaireProductenHistoriePeer::ZINDEX_NUMMER, $zindexNummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zindexNummer['max'])) {
                $this->addUsingAlias(GsSupplementaireProductenHistoriePeer::ZINDEX_NUMMER, $zindexNummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSupplementaireProductenHistoriePeer::ZINDEX_NUMMER, $zindexNummer, $comparison);
    }

    /**
     * Filter the query on the nza_maximum_tarief_inc_btw_laag column
     *
     * Example usage:
     * <code>
     * $query->filterByNzaMaximumTariefIncBtwLaag(1234); // WHERE nza_maximum_tarief_inc_btw_laag = 1234
     * $query->filterByNzaMaximumTariefIncBtwLaag(array(12, 34)); // WHERE nza_maximum_tarief_inc_btw_laag IN (12, 34)
     * $query->filterByNzaMaximumTariefIncBtwLaag(array('min' => 12)); // WHERE nza_maximum_tarief_inc_btw_laag >= 12
     * $query->filterByNzaMaximumTariefIncBtwLaag(array('max' => 12)); // WHERE nza_maximum_tarief_inc_btw_laag <= 12
     * </code>
     *
     * @param     mixed $nzaMaximumTariefIncBtwLaag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsSupplementaireProductenHistorieQuery The current query, for fluid interface
     */
    public function filterByNzaMaximumTariefIncBtwLaag($nzaMaximumTariefIncBtwLaag = null, $comparison = null)
    {
        if (is_array($nzaMaximumTariefIncBtwLaag)) {
            $useMinMax = false;
            if (isset($nzaMaximumTariefIncBtwLaag['min'])) {
                $this->addUsingAlias(GsSupplementaireProductenHistoriePeer::NZA_MAXIMUM_TARIEF_INC_BTW_LAAG, $nzaMaximumTariefIncBtwLaag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nzaMaximumTariefIncBtwLaag['max'])) {
                $this->addUsingAlias(GsSupplementaireProductenHistoriePeer::NZA_MAXIMUM_TARIEF_INC_BTW_LAAG, $nzaMaximumTariefIncBtwLaag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSupplementaireProductenHistoriePeer::NZA_MAXIMUM_TARIEF_INC_BTW_LAAG, $nzaMaximumTariefIncBtwLaag, $comparison);
    }

    /**
     * Filter the query on the thesaurus_nummer_soort_supplementair_product column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusNummerSoortSupplementairProduct(1234); // WHERE thesaurus_nummer_soort_supplementair_product = 1234
     * $query->filterByThesaurusNummerSoortSupplementairProduct(array(12, 34)); // WHERE thesaurus_nummer_soort_supplementair_product IN (12, 34)
     * $query->filterByThesaurusNummerSoortSupplementairProduct(array('min' => 12)); // WHERE thesaurus_nummer_soort_supplementair_product >= 12
     * $query->filterByThesaurusNummerSoortSupplementairProduct(array('max' => 12)); // WHERE thesaurus_nummer_soort_supplementair_product <= 12
     * </code>
     *
     * @see       filterByGsThesauriTotaal()
     *
     * @param     mixed $thesaurusNummerSoortSupplementairProduct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsSupplementaireProductenHistorieQuery The current query, for fluid interface
     */
    public function filterByThesaurusNummerSoortSupplementairProduct($thesaurusNummerSoortSupplementairProduct = null, $comparison = null)
    {
        if (is_array($thesaurusNummerSoortSupplementairProduct)) {
            $useMinMax = false;
            if (isset($thesaurusNummerSoortSupplementairProduct['min'])) {
                $this->addUsingAlias(GsSupplementaireProductenHistoriePeer::THESAURUS_NUMMER_SOORT_SUPPLEMENTAIR_PRODUCT, $thesaurusNummerSoortSupplementairProduct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusNummerSoortSupplementairProduct['max'])) {
                $this->addUsingAlias(GsSupplementaireProductenHistoriePeer::THESAURUS_NUMMER_SOORT_SUPPLEMENTAIR_PRODUCT, $thesaurusNummerSoortSupplementairProduct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSupplementaireProductenHistoriePeer::THESAURUS_NUMMER_SOORT_SUPPLEMENTAIR_PRODUCT, $thesaurusNummerSoortSupplementairProduct, $comparison);
    }

    /**
     * Filter the query on the soort_supplementair_product column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortSupplementairProduct(1234); // WHERE soort_supplementair_product = 1234
     * $query->filterBySoortSupplementairProduct(array(12, 34)); // WHERE soort_supplementair_product IN (12, 34)
     * $query->filterBySoortSupplementairProduct(array('min' => 12)); // WHERE soort_supplementair_product >= 12
     * $query->filterBySoortSupplementairProduct(array('max' => 12)); // WHERE soort_supplementair_product <= 12
     * </code>
     *
     * @see       filterByGsThesauriTotaal()
     *
     * @param     mixed $soortSupplementairProduct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsSupplementaireProductenHistorieQuery The current query, for fluid interface
     */
    public function filterBySoortSupplementairProduct($soortSupplementairProduct = null, $comparison = null)
    {
        if (is_array($soortSupplementairProduct)) {
            $useMinMax = false;
            if (isset($soortSupplementairProduct['min'])) {
                $this->addUsingAlias(GsSupplementaireProductenHistoriePeer::SOORT_SUPPLEMENTAIR_PRODUCT, $soortSupplementairProduct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortSupplementairProduct['max'])) {
                $this->addUsingAlias(GsSupplementaireProductenHistoriePeer::SOORT_SUPPLEMENTAIR_PRODUCT, $soortSupplementairProduct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSupplementaireProductenHistoriePeer::SOORT_SUPPLEMENTAIR_PRODUCT, $soortSupplementairProduct, $comparison);
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsSupplementaireProductenHistorieQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelen($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsSupplementaireProductenHistoriePeer::ZINDEX_NUMMER, $gsArtikelen->getZinummer(), $comparison);
        } elseif ($gsArtikelen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsSupplementaireProductenHistoriePeer::ZINDEX_NUMMER, $gsArtikelen->toKeyValue('PrimaryKey', 'Zinummer'), $comparison);
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
     * @return GsSupplementaireProductenHistorieQuery The current query, for fluid interface
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
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsSupplementaireProductenHistorieQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsThesauriTotaal($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsSupplementaireProductenHistoriePeer::THESAURUS_NUMMER_SOORT_SUPPLEMENTAIR_PRODUCT, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsSupplementaireProductenHistoriePeer::SOORT_SUPPLEMENTAIR_PRODUCT, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByGsThesauriTotaal() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsThesauriTotaal relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsSupplementaireProductenHistorieQuery The current query, for fluid interface
     */
    public function joinGsThesauriTotaal($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsThesauriTotaal');

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
            $this->addJoinObject($join, 'GsThesauriTotaal');
        }

        return $this;
    }

    /**
     * Use the GsThesauriTotaal relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useGsThesauriTotaalQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsThesauriTotaal($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsThesauriTotaal', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsSupplementaireProductenHistorie $gsSupplementaireProductenHistorie Object to remove from the list of results
     *
     * @return GsSupplementaireProductenHistorieQuery The current query, for fluid interface
     */
    public function prune($gsSupplementaireProductenHistorie = null)
    {
        if ($gsSupplementaireProductenHistorie) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsSupplementaireProductenHistoriePeer::DATUM_PRODUCT), $gsSupplementaireProductenHistorie->getDatumProduct(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsSupplementaireProductenHistoriePeer::ZINDEX_NUMMER), $gsSupplementaireProductenHistorie->getZindexNummer(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
