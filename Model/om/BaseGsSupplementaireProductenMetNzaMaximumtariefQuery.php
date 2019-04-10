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
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenMetNzaMaximumtarief;
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenMetNzaMaximumtariefPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenMetNzaMaximumtariefQuery;

/**
 * @method GsSupplementaireProductenMetNzaMaximumtariefQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsSupplementaireProductenMetNzaMaximumtariefQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsSupplementaireProductenMetNzaMaximumtariefQuery orderByZindexNummer($order = Criteria::ASC) Order by the zindex_nummer column
 * @method GsSupplementaireProductenMetNzaMaximumtariefQuery orderByNzaMaximumTariefIncBtwLaag($order = Criteria::ASC) Order by the nza_maximum_tarief_inc_btw_laag column
 * @method GsSupplementaireProductenMetNzaMaximumtariefQuery orderByThesaurusNummerSoortSupplementairProduct($order = Criteria::ASC) Order by the thesaurus_nummer_soort_supplementair_product column
 * @method GsSupplementaireProductenMetNzaMaximumtariefQuery orderBySoortSupplementairProduct($order = Criteria::ASC) Order by the soort_supplementair_product column
 *
 * @method GsSupplementaireProductenMetNzaMaximumtariefQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsSupplementaireProductenMetNzaMaximumtariefQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsSupplementaireProductenMetNzaMaximumtariefQuery groupByZindexNummer() Group by the zindex_nummer column
 * @method GsSupplementaireProductenMetNzaMaximumtariefQuery groupByNzaMaximumTariefIncBtwLaag() Group by the nza_maximum_tarief_inc_btw_laag column
 * @method GsSupplementaireProductenMetNzaMaximumtariefQuery groupByThesaurusNummerSoortSupplementairProduct() Group by the thesaurus_nummer_soort_supplementair_product column
 * @method GsSupplementaireProductenMetNzaMaximumtariefQuery groupBySoortSupplementairProduct() Group by the soort_supplementair_product column
 *
 * @method GsSupplementaireProductenMetNzaMaximumtariefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsSupplementaireProductenMetNzaMaximumtariefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsSupplementaireProductenMetNzaMaximumtariefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsSupplementaireProductenMetNzaMaximumtariefQuery leftJoinGsArtikelen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelen relation
 * @method GsSupplementaireProductenMetNzaMaximumtariefQuery rightJoinGsArtikelen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelen relation
 * @method GsSupplementaireProductenMetNzaMaximumtariefQuery innerJoinGsArtikelen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelen relation
 *
 * @method GsSupplementaireProductenMetNzaMaximumtarief findOne(PropelPDO $con = null) Return the first GsSupplementaireProductenMetNzaMaximumtarief matching the query
 * @method GsSupplementaireProductenMetNzaMaximumtarief findOneOrCreate(PropelPDO $con = null) Return the first GsSupplementaireProductenMetNzaMaximumtarief matching the query, or a new GsSupplementaireProductenMetNzaMaximumtarief object populated from the query conditions when no match is found
 *
 * @method GsSupplementaireProductenMetNzaMaximumtarief findOneByBestandnummer(int $bestandnummer) Return the first GsSupplementaireProductenMetNzaMaximumtarief filtered by the bestandnummer column
 * @method GsSupplementaireProductenMetNzaMaximumtarief findOneByMutatiekode(int $mutatiekode) Return the first GsSupplementaireProductenMetNzaMaximumtarief filtered by the mutatiekode column
 * @method GsSupplementaireProductenMetNzaMaximumtarief findOneByNzaMaximumTariefIncBtwLaag(string $nza_maximum_tarief_inc_btw_laag) Return the first GsSupplementaireProductenMetNzaMaximumtarief filtered by the nza_maximum_tarief_inc_btw_laag column
 * @method GsSupplementaireProductenMetNzaMaximumtarief findOneByThesaurusNummerSoortSupplementairProduct(int $thesaurus_nummer_soort_supplementair_product) Return the first GsSupplementaireProductenMetNzaMaximumtarief filtered by the thesaurus_nummer_soort_supplementair_product column
 * @method GsSupplementaireProductenMetNzaMaximumtarief findOneBySoortSupplementairProduct(int $soort_supplementair_product) Return the first GsSupplementaireProductenMetNzaMaximumtarief filtered by the soort_supplementair_product column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsSupplementaireProductenMetNzaMaximumtarief objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsSupplementaireProductenMetNzaMaximumtarief objects filtered by the mutatiekode column
 * @method array findByZindexNummer(int $zindex_nummer) Return GsSupplementaireProductenMetNzaMaximumtarief objects filtered by the zindex_nummer column
 * @method array findByNzaMaximumTariefIncBtwLaag(string $nza_maximum_tarief_inc_btw_laag) Return GsSupplementaireProductenMetNzaMaximumtarief objects filtered by the nza_maximum_tarief_inc_btw_laag column
 * @method array findByThesaurusNummerSoortSupplementairProduct(int $thesaurus_nummer_soort_supplementair_product) Return GsSupplementaireProductenMetNzaMaximumtarief objects filtered by the thesaurus_nummer_soort_supplementair_product column
 * @method array findBySoortSupplementairProduct(int $soort_supplementair_product) Return GsSupplementaireProductenMetNzaMaximumtarief objects filtered by the soort_supplementair_product column
 */
abstract class BaseGsSupplementaireProductenMetNzaMaximumtariefQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsSupplementaireProductenMetNzaMaximumtariefQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsSupplementaireProductenMetNzaMaximumtarief';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsSupplementaireProductenMetNzaMaximumtariefQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsSupplementaireProductenMetNzaMaximumtariefQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsSupplementaireProductenMetNzaMaximumtariefQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsSupplementaireProductenMetNzaMaximumtariefQuery) {
            return $criteria;
        }
        $query = new GsSupplementaireProductenMetNzaMaximumtariefQuery(null, null, $modelAlias);

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
     * @return   GsSupplementaireProductenMetNzaMaximumtarief|GsSupplementaireProductenMetNzaMaximumtarief[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsSupplementaireProductenMetNzaMaximumtariefPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsSupplementaireProductenMetNzaMaximumtariefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsSupplementaireProductenMetNzaMaximumtarief A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByZindexNummer($key, $con = null)
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
     * @return                 GsSupplementaireProductenMetNzaMaximumtarief A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `zindex_nummer`, `nza_maximum_tarief_inc_btw_laag`, `thesaurus_nummer_soort_supplementair_product`, `soort_supplementair_product` FROM `gs_supplementaire_producten_met_nza_maximumtarief` WHERE `zindex_nummer` = :p0';
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
            $obj = new GsSupplementaireProductenMetNzaMaximumtarief();
            $obj->hydrate($row);
            GsSupplementaireProductenMetNzaMaximumtariefPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsSupplementaireProductenMetNzaMaximumtarief|GsSupplementaireProductenMetNzaMaximumtarief[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsSupplementaireProductenMetNzaMaximumtarief[]|mixed the list of results, formatted by the current formatter
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
     * @return GsSupplementaireProductenMetNzaMaximumtariefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsSupplementaireProductenMetNzaMaximumtariefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, $keys, Criteria::IN);
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
     * @return GsSupplementaireProductenMetNzaMaximumtariefQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsSupplementaireProductenMetNzaMaximumtariefQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @return GsSupplementaireProductenMetNzaMaximumtariefQuery The current query, for fluid interface
     */
    public function filterByZindexNummer($zindexNummer = null, $comparison = null)
    {
        if (is_array($zindexNummer)) {
            $useMinMax = false;
            if (isset($zindexNummer['min'])) {
                $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, $zindexNummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zindexNummer['max'])) {
                $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, $zindexNummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, $zindexNummer, $comparison);
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
     * @return GsSupplementaireProductenMetNzaMaximumtariefQuery The current query, for fluid interface
     */
    public function filterByNzaMaximumTariefIncBtwLaag($nzaMaximumTariefIncBtwLaag = null, $comparison = null)
    {
        if (is_array($nzaMaximumTariefIncBtwLaag)) {
            $useMinMax = false;
            if (isset($nzaMaximumTariefIncBtwLaag['min'])) {
                $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::NZA_MAXIMUM_TARIEF_INC_BTW_LAAG, $nzaMaximumTariefIncBtwLaag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nzaMaximumTariefIncBtwLaag['max'])) {
                $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::NZA_MAXIMUM_TARIEF_INC_BTW_LAAG, $nzaMaximumTariefIncBtwLaag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::NZA_MAXIMUM_TARIEF_INC_BTW_LAAG, $nzaMaximumTariefIncBtwLaag, $comparison);
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
     * @param     mixed $thesaurusNummerSoortSupplementairProduct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsSupplementaireProductenMetNzaMaximumtariefQuery The current query, for fluid interface
     */
    public function filterByThesaurusNummerSoortSupplementairProduct($thesaurusNummerSoortSupplementairProduct = null, $comparison = null)
    {
        if (is_array($thesaurusNummerSoortSupplementairProduct)) {
            $useMinMax = false;
            if (isset($thesaurusNummerSoortSupplementairProduct['min'])) {
                $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::THESAURUS_NUMMER_SOORT_SUPPLEMENTAIR_PRODUCT, $thesaurusNummerSoortSupplementairProduct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusNummerSoortSupplementairProduct['max'])) {
                $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::THESAURUS_NUMMER_SOORT_SUPPLEMENTAIR_PRODUCT, $thesaurusNummerSoortSupplementairProduct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::THESAURUS_NUMMER_SOORT_SUPPLEMENTAIR_PRODUCT, $thesaurusNummerSoortSupplementairProduct, $comparison);
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
     * @param     mixed $soortSupplementairProduct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsSupplementaireProductenMetNzaMaximumtariefQuery The current query, for fluid interface
     */
    public function filterBySoortSupplementairProduct($soortSupplementairProduct = null, $comparison = null)
    {
        if (is_array($soortSupplementairProduct)) {
            $useMinMax = false;
            if (isset($soortSupplementairProduct['min'])) {
                $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::SOORT_SUPPLEMENTAIR_PRODUCT, $soortSupplementairProduct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortSupplementairProduct['max'])) {
                $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::SOORT_SUPPLEMENTAIR_PRODUCT, $soortSupplementairProduct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::SOORT_SUPPLEMENTAIR_PRODUCT, $soortSupplementairProduct, $comparison);
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsSupplementaireProductenMetNzaMaximumtariefQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelen($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, $gsArtikelen->getZinummer(), $comparison);
        } elseif ($gsArtikelen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, $gsArtikelen->toKeyValue('PrimaryKey', 'Zinummer'), $comparison);
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
     * @return GsSupplementaireProductenMetNzaMaximumtariefQuery The current query, for fluid interface
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
     * @param   GsSupplementaireProductenMetNzaMaximumtarief $gsSupplementaireProductenMetNzaMaximumtarief Object to remove from the list of results
     *
     * @return GsSupplementaireProductenMetNzaMaximumtariefQuery The current query, for fluid interface
     */
    public function prune($gsSupplementaireProductenMetNzaMaximumtarief = null)
    {
        if ($gsSupplementaireProductenMetNzaMaximumtarief) {
            $this->addUsingAlias(GsSupplementaireProductenMetNzaMaximumtariefPeer::ZINDEX_NUMMER, $gsSupplementaireProductenMetNzaMaximumtarief->getZindexNummer(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
