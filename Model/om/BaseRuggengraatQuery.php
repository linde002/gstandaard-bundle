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
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodes;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProducten;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaard;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentific;
use PharmaIntelligence\GstandaardBundle\Model\Ruggengraat;
use PharmaIntelligence\GstandaardBundle\Model\RuggengraatPeer;
use PharmaIntelligence\GstandaardBundle\Model\RuggengraatQuery;

/**
 * @method RuggengraatQuery orderByZindexNummer($order = Criteria::ASC) Order by the zindex_nummer column
 * @method RuggengraatQuery orderByHpk($order = Criteria::ASC) Order by the hpk column
 * @method RuggengraatQuery orderByPrk($order = Criteria::ASC) Order by the prk column
 * @method RuggengraatQuery orderByGpk($order = Criteria::ASC) Order by the gpk column
 * @method RuggengraatQuery orderByAtc($order = Criteria::ASC) Order by the atc column
 * @method RuggengraatQuery orderByArtikelNaam($order = Criteria::ASC) Order by the artikel_naam column
 * @method RuggengraatQuery orderByHpkNaam($order = Criteria::ASC) Order by the hpk_naam column
 * @method RuggengraatQuery orderByPrkNaam($order = Criteria::ASC) Order by the prk_naam column
 * @method RuggengraatQuery orderByGpkNaam($order = Criteria::ASC) Order by the gpk_naam column
 * @method RuggengraatQuery orderByAtcNaam($order = Criteria::ASC) Order by the atc_naam column
 * @method RuggengraatQuery orderByLeverancierNummer($order = Criteria::ASC) Order by the leverancier_nummer column
 * @method RuggengraatQuery orderByLeverancierNaam($order = Criteria::ASC) Order by the leverancier_naam column
 *
 * @method RuggengraatQuery groupByZindexNummer() Group by the zindex_nummer column
 * @method RuggengraatQuery groupByHpk() Group by the hpk column
 * @method RuggengraatQuery groupByPrk() Group by the prk column
 * @method RuggengraatQuery groupByGpk() Group by the gpk column
 * @method RuggengraatQuery groupByAtc() Group by the atc column
 * @method RuggengraatQuery groupByArtikelNaam() Group by the artikel_naam column
 * @method RuggengraatQuery groupByHpkNaam() Group by the hpk_naam column
 * @method RuggengraatQuery groupByPrkNaam() Group by the prk_naam column
 * @method RuggengraatQuery groupByGpkNaam() Group by the gpk_naam column
 * @method RuggengraatQuery groupByAtcNaam() Group by the atc_naam column
 * @method RuggengraatQuery groupByLeverancierNummer() Group by the leverancier_nummer column
 * @method RuggengraatQuery groupByLeverancierNaam() Group by the leverancier_naam column
 *
 * @method RuggengraatQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RuggengraatQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RuggengraatQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RuggengraatQuery leftJoinGsArtikelen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelen relation
 * @method RuggengraatQuery rightJoinGsArtikelen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelen relation
 * @method RuggengraatQuery innerJoinGsArtikelen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelen relation
 *
 * @method RuggengraatQuery leftJoinGsHandelsproducten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproducten relation
 * @method RuggengraatQuery rightJoinGsHandelsproducten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproducten relation
 * @method RuggengraatQuery innerJoinGsHandelsproducten($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproducten relation
 *
 * @method RuggengraatQuery leftJoinGsNawGegevensGstandaard($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsNawGegevensGstandaard relation
 * @method RuggengraatQuery rightJoinGsNawGegevensGstandaard($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsNawGegevensGstandaard relation
 * @method RuggengraatQuery innerJoinGsNawGegevensGstandaard($relationAlias = null) Adds a INNER JOIN clause to the query using the GsNawGegevensGstandaard relation
 *
 * @method RuggengraatQuery leftJoinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
 * @method RuggengraatQuery rightJoinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
 * @method RuggengraatQuery innerJoinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null) Adds a INNER JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
 *
 * @method RuggengraatQuery leftJoinGsGeneriekeProducten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsGeneriekeProducten relation
 * @method RuggengraatQuery rightJoinGsGeneriekeProducten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsGeneriekeProducten relation
 * @method RuggengraatQuery innerJoinGsGeneriekeProducten($relationAlias = null) Adds a INNER JOIN clause to the query using the GsGeneriekeProducten relation
 *
 * @method RuggengraatQuery leftJoinGsAtcCodes($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsAtcCodes relation
 * @method RuggengraatQuery rightJoinGsAtcCodes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsAtcCodes relation
 * @method RuggengraatQuery innerJoinGsAtcCodes($relationAlias = null) Adds a INNER JOIN clause to the query using the GsAtcCodes relation
 *
 * @method Ruggengraat findOne(PropelPDO $con = null) Return the first Ruggengraat matching the query
 * @method Ruggengraat findOneOrCreate(PropelPDO $con = null) Return the first Ruggengraat matching the query, or a new Ruggengraat object populated from the query conditions when no match is found
 *
 * @method Ruggengraat findOneByHpk(int $hpk) Return the first Ruggengraat filtered by the hpk column
 * @method Ruggengraat findOneByPrk(int $prk) Return the first Ruggengraat filtered by the prk column
 * @method Ruggengraat findOneByGpk(int $gpk) Return the first Ruggengraat filtered by the gpk column
 * @method Ruggengraat findOneByAtc(string $atc) Return the first Ruggengraat filtered by the atc column
 * @method Ruggengraat findOneByArtikelNaam(string $artikel_naam) Return the first Ruggengraat filtered by the artikel_naam column
 * @method Ruggengraat findOneByHpkNaam(string $hpk_naam) Return the first Ruggengraat filtered by the hpk_naam column
 * @method Ruggengraat findOneByPrkNaam(string $prk_naam) Return the first Ruggengraat filtered by the prk_naam column
 * @method Ruggengraat findOneByGpkNaam(string $gpk_naam) Return the first Ruggengraat filtered by the gpk_naam column
 * @method Ruggengraat findOneByAtcNaam(string $atc_naam) Return the first Ruggengraat filtered by the atc_naam column
 * @method Ruggengraat findOneByLeverancierNummer(int $leverancier_nummer) Return the first Ruggengraat filtered by the leverancier_nummer column
 * @method Ruggengraat findOneByLeverancierNaam(string $leverancier_naam) Return the first Ruggengraat filtered by the leverancier_naam column
 *
 * @method array findByZindexNummer(int $zindex_nummer) Return Ruggengraat objects filtered by the zindex_nummer column
 * @method array findByHpk(int $hpk) Return Ruggengraat objects filtered by the hpk column
 * @method array findByPrk(int $prk) Return Ruggengraat objects filtered by the prk column
 * @method array findByGpk(int $gpk) Return Ruggengraat objects filtered by the gpk column
 * @method array findByAtc(string $atc) Return Ruggengraat objects filtered by the atc column
 * @method array findByArtikelNaam(string $artikel_naam) Return Ruggengraat objects filtered by the artikel_naam column
 * @method array findByHpkNaam(string $hpk_naam) Return Ruggengraat objects filtered by the hpk_naam column
 * @method array findByPrkNaam(string $prk_naam) Return Ruggengraat objects filtered by the prk_naam column
 * @method array findByGpkNaam(string $gpk_naam) Return Ruggengraat objects filtered by the gpk_naam column
 * @method array findByAtcNaam(string $atc_naam) Return Ruggengraat objects filtered by the atc_naam column
 * @method array findByLeverancierNummer(int $leverancier_nummer) Return Ruggengraat objects filtered by the leverancier_nummer column
 * @method array findByLeverancierNaam(string $leverancier_naam) Return Ruggengraat objects filtered by the leverancier_naam column
 */
abstract class BaseRuggengraatQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRuggengraatQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\Ruggengraat';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RuggengraatQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RuggengraatQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RuggengraatQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RuggengraatQuery) {
            return $criteria;
        }
        $query = new RuggengraatQuery(null, null, $modelAlias);

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
     * @return   Ruggengraat|Ruggengraat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RuggengraatPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RuggengraatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ruggengraat A model object, or null if the key is not found
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
     * @return                 Ruggengraat A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `zindex_nummer`, `hpk`, `prk`, `gpk`, `atc`, `artikel_naam`, `hpk_naam`, `prk_naam`, `gpk_naam`, `atc_naam`, `leverancier_nummer`, `leverancier_naam` FROM `gstandaard_ruggengraat` WHERE `zindex_nummer` = :p0';
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
            $obj = new Ruggengraat();
            $obj->hydrate($row);
            RuggengraatPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ruggengraat|Ruggengraat[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ruggengraat[]|mixed the list of results, formatted by the current formatter
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
     * @return RuggengraatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RuggengraatPeer::ZINDEX_NUMMER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RuggengraatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RuggengraatPeer::ZINDEX_NUMMER, $keys, Criteria::IN);
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
     * @return RuggengraatQuery The current query, for fluid interface
     */
    public function filterByZindexNummer($zindexNummer = null, $comparison = null)
    {
        if (is_array($zindexNummer)) {
            $useMinMax = false;
            if (isset($zindexNummer['min'])) {
                $this->addUsingAlias(RuggengraatPeer::ZINDEX_NUMMER, $zindexNummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zindexNummer['max'])) {
                $this->addUsingAlias(RuggengraatPeer::ZINDEX_NUMMER, $zindexNummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RuggengraatPeer::ZINDEX_NUMMER, $zindexNummer, $comparison);
    }

    /**
     * Filter the query on the hpk column
     *
     * Example usage:
     * <code>
     * $query->filterByHpk(1234); // WHERE hpk = 1234
     * $query->filterByHpk(array(12, 34)); // WHERE hpk IN (12, 34)
     * $query->filterByHpk(array('min' => 12)); // WHERE hpk >= 12
     * $query->filterByHpk(array('max' => 12)); // WHERE hpk <= 12
     * </code>
     *
     * @see       filterByGsHandelsproducten()
     *
     * @param     mixed $hpk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RuggengraatQuery The current query, for fluid interface
     */
    public function filterByHpk($hpk = null, $comparison = null)
    {
        if (is_array($hpk)) {
            $useMinMax = false;
            if (isset($hpk['min'])) {
                $this->addUsingAlias(RuggengraatPeer::HPK, $hpk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hpk['max'])) {
                $this->addUsingAlias(RuggengraatPeer::HPK, $hpk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RuggengraatPeer::HPK, $hpk, $comparison);
    }

    /**
     * Filter the query on the prk column
     *
     * Example usage:
     * <code>
     * $query->filterByPrk(1234); // WHERE prk = 1234
     * $query->filterByPrk(array(12, 34)); // WHERE prk IN (12, 34)
     * $query->filterByPrk(array('min' => 12)); // WHERE prk >= 12
     * $query->filterByPrk(array('max' => 12)); // WHERE prk <= 12
     * </code>
     *
     * @see       filterByGsVoorschrijfprGeneesmiddelIdentific()
     *
     * @param     mixed $prk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RuggengraatQuery The current query, for fluid interface
     */
    public function filterByPrk($prk = null, $comparison = null)
    {
        if (is_array($prk)) {
            $useMinMax = false;
            if (isset($prk['min'])) {
                $this->addUsingAlias(RuggengraatPeer::PRK, $prk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prk['max'])) {
                $this->addUsingAlias(RuggengraatPeer::PRK, $prk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RuggengraatPeer::PRK, $prk, $comparison);
    }

    /**
     * Filter the query on the gpk column
     *
     * Example usage:
     * <code>
     * $query->filterByGpk(1234); // WHERE gpk = 1234
     * $query->filterByGpk(array(12, 34)); // WHERE gpk IN (12, 34)
     * $query->filterByGpk(array('min' => 12)); // WHERE gpk >= 12
     * $query->filterByGpk(array('max' => 12)); // WHERE gpk <= 12
     * </code>
     *
     * @see       filterByGsGeneriekeProducten()
     *
     * @param     mixed $gpk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RuggengraatQuery The current query, for fluid interface
     */
    public function filterByGpk($gpk = null, $comparison = null)
    {
        if (is_array($gpk)) {
            $useMinMax = false;
            if (isset($gpk['min'])) {
                $this->addUsingAlias(RuggengraatPeer::GPK, $gpk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gpk['max'])) {
                $this->addUsingAlias(RuggengraatPeer::GPK, $gpk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RuggengraatPeer::GPK, $gpk, $comparison);
    }

    /**
     * Filter the query on the atc column
     *
     * Example usage:
     * <code>
     * $query->filterByAtc('fooValue');   // WHERE atc = 'fooValue'
     * $query->filterByAtc('%fooValue%'); // WHERE atc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $atc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RuggengraatQuery The current query, for fluid interface
     */
    public function filterByAtc($atc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($atc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $atc)) {
                $atc = str_replace('*', '%', $atc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RuggengraatPeer::ATC, $atc, $comparison);
    }

    /**
     * Filter the query on the artikel_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByArtikelNaam('fooValue');   // WHERE artikel_naam = 'fooValue'
     * $query->filterByArtikelNaam('%fooValue%'); // WHERE artikel_naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artikelNaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RuggengraatQuery The current query, for fluid interface
     */
    public function filterByArtikelNaam($artikelNaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artikelNaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $artikelNaam)) {
                $artikelNaam = str_replace('*', '%', $artikelNaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RuggengraatPeer::ARTIKEL_NAAM, $artikelNaam, $comparison);
    }

    /**
     * Filter the query on the hpk_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByHpkNaam('fooValue');   // WHERE hpk_naam = 'fooValue'
     * $query->filterByHpkNaam('%fooValue%'); // WHERE hpk_naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hpkNaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RuggengraatQuery The current query, for fluid interface
     */
    public function filterByHpkNaam($hpkNaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hpkNaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hpkNaam)) {
                $hpkNaam = str_replace('*', '%', $hpkNaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RuggengraatPeer::HPK_NAAM, $hpkNaam, $comparison);
    }

    /**
     * Filter the query on the prk_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByPrkNaam('fooValue');   // WHERE prk_naam = 'fooValue'
     * $query->filterByPrkNaam('%fooValue%'); // WHERE prk_naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prkNaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RuggengraatQuery The current query, for fluid interface
     */
    public function filterByPrkNaam($prkNaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prkNaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prkNaam)) {
                $prkNaam = str_replace('*', '%', $prkNaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RuggengraatPeer::PRK_NAAM, $prkNaam, $comparison);
    }

    /**
     * Filter the query on the gpk_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByGpkNaam('fooValue');   // WHERE gpk_naam = 'fooValue'
     * $query->filterByGpkNaam('%fooValue%'); // WHERE gpk_naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gpkNaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RuggengraatQuery The current query, for fluid interface
     */
    public function filterByGpkNaam($gpkNaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gpkNaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gpkNaam)) {
                $gpkNaam = str_replace('*', '%', $gpkNaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RuggengraatPeer::GPK_NAAM, $gpkNaam, $comparison);
    }

    /**
     * Filter the query on the atc_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByAtcNaam('fooValue');   // WHERE atc_naam = 'fooValue'
     * $query->filterByAtcNaam('%fooValue%'); // WHERE atc_naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $atcNaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RuggengraatQuery The current query, for fluid interface
     */
    public function filterByAtcNaam($atcNaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($atcNaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $atcNaam)) {
                $atcNaam = str_replace('*', '%', $atcNaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RuggengraatPeer::ATC_NAAM, $atcNaam, $comparison);
    }

    /**
     * Filter the query on the leverancier_nummer column
     *
     * Example usage:
     * <code>
     * $query->filterByLeverancierNummer(1234); // WHERE leverancier_nummer = 1234
     * $query->filterByLeverancierNummer(array(12, 34)); // WHERE leverancier_nummer IN (12, 34)
     * $query->filterByLeverancierNummer(array('min' => 12)); // WHERE leverancier_nummer >= 12
     * $query->filterByLeverancierNummer(array('max' => 12)); // WHERE leverancier_nummer <= 12
     * </code>
     *
     * @see       filterByGsNawGegevensGstandaard()
     *
     * @param     mixed $leverancierNummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RuggengraatQuery The current query, for fluid interface
     */
    public function filterByLeverancierNummer($leverancierNummer = null, $comparison = null)
    {
        if (is_array($leverancierNummer)) {
            $useMinMax = false;
            if (isset($leverancierNummer['min'])) {
                $this->addUsingAlias(RuggengraatPeer::LEVERANCIER_NUMMER, $leverancierNummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($leverancierNummer['max'])) {
                $this->addUsingAlias(RuggengraatPeer::LEVERANCIER_NUMMER, $leverancierNummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RuggengraatPeer::LEVERANCIER_NUMMER, $leverancierNummer, $comparison);
    }

    /**
     * Filter the query on the leverancier_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByLeverancierNaam('fooValue');   // WHERE leverancier_naam = 'fooValue'
     * $query->filterByLeverancierNaam('%fooValue%'); // WHERE leverancier_naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $leverancierNaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RuggengraatQuery The current query, for fluid interface
     */
    public function filterByLeverancierNaam($leverancierNaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($leverancierNaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $leverancierNaam)) {
                $leverancierNaam = str_replace('*', '%', $leverancierNaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RuggengraatPeer::LEVERANCIER_NAAM, $leverancierNaam, $comparison);
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RuggengraatQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelen($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(RuggengraatPeer::ZINDEX_NUMMER, $gsArtikelen->getZinummer(), $comparison);
        } elseif ($gsArtikelen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RuggengraatPeer::ZINDEX_NUMMER, $gsArtikelen->toKeyValue('PrimaryKey', 'Zinummer'), $comparison);
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
     * @return RuggengraatQuery The current query, for fluid interface
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
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RuggengraatQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproducten($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(RuggengraatPeer::HPK, $gsHandelsproducten->getHandelsproduktkode(), $comparison);
        } elseif ($gsHandelsproducten instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RuggengraatPeer::HPK, $gsHandelsproducten->toKeyValue('PrimaryKey', 'Handelsproduktkode'), $comparison);
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
     * @return RuggengraatQuery The current query, for fluid interface
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
     * Filter the query by a related GsNawGegevensGstandaard object
     *
     * @param   GsNawGegevensGstandaard|PropelObjectCollection $gsNawGegevensGstandaard The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RuggengraatQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsNawGegevensGstandaard($gsNawGegevensGstandaard, $comparison = null)
    {
        if ($gsNawGegevensGstandaard instanceof GsNawGegevensGstandaard) {
            return $this
                ->addUsingAlias(RuggengraatPeer::LEVERANCIER_NUMMER, $gsNawGegevensGstandaard->getNawNummer(), $comparison);
        } elseif ($gsNawGegevensGstandaard instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RuggengraatPeer::LEVERANCIER_NUMMER, $gsNawGegevensGstandaard->toKeyValue('NawNummer', 'NawNummer'), $comparison);
        } else {
            throw new PropelException('filterByGsNawGegevensGstandaard() only accepts arguments of type GsNawGegevensGstandaard or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsNawGegevensGstandaard relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RuggengraatQuery The current query, for fluid interface
     */
    public function joinGsNawGegevensGstandaard($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsNawGegevensGstandaard');

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
            $this->addJoinObject($join, 'GsNawGegevensGstandaard');
        }

        return $this;
    }

    /**
     * Use the GsNawGegevensGstandaard relation GsNawGegevensGstandaard object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery A secondary query class using the current class as primary query
     */
    public function useGsNawGegevensGstandaardQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsNawGegevensGstandaard($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsNawGegevensGstandaard', '\PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery');
    }

    /**
     * Filter the query by a related GsVoorschrijfprGeneesmiddelIdentific object
     *
     * @param   GsVoorschrijfprGeneesmiddelIdentific|PropelObjectCollection $gsVoorschrijfprGeneesmiddelIdentific The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RuggengraatQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsVoorschrijfprGeneesmiddelIdentific($gsVoorschrijfprGeneesmiddelIdentific, $comparison = null)
    {
        if ($gsVoorschrijfprGeneesmiddelIdentific instanceof GsVoorschrijfprGeneesmiddelIdentific) {
            return $this
                ->addUsingAlias(RuggengraatPeer::PRK, $gsVoorschrijfprGeneesmiddelIdentific->getPrkcode(), $comparison);
        } elseif ($gsVoorschrijfprGeneesmiddelIdentific instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RuggengraatPeer::PRK, $gsVoorschrijfprGeneesmiddelIdentific->toKeyValue('PrimaryKey', 'Prkcode'), $comparison);
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
     * @return RuggengraatQuery The current query, for fluid interface
     */
    public function joinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useGsVoorschrijfprGeneesmiddelIdentificQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsVoorschrijfprGeneesmiddelIdentific($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsVoorschrijfprGeneesmiddelIdentific', '\PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificQuery');
    }

    /**
     * Filter the query by a related GsGeneriekeProducten object
     *
     * @param   GsGeneriekeProducten|PropelObjectCollection $gsGeneriekeProducten The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RuggengraatQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsGeneriekeProducten($gsGeneriekeProducten, $comparison = null)
    {
        if ($gsGeneriekeProducten instanceof GsGeneriekeProducten) {
            return $this
                ->addUsingAlias(RuggengraatPeer::GPK, $gsGeneriekeProducten->getGeneriekeproductcode(), $comparison);
        } elseif ($gsGeneriekeProducten instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RuggengraatPeer::GPK, $gsGeneriekeProducten->toKeyValue('PrimaryKey', 'Generiekeproductcode'), $comparison);
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
     * @return RuggengraatQuery The current query, for fluid interface
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
     * Filter the query by a related GsAtcCodes object
     *
     * @param   GsAtcCodes|PropelObjectCollection $gsAtcCodes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RuggengraatQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsAtcCodes($gsAtcCodes, $comparison = null)
    {
        if ($gsAtcCodes instanceof GsAtcCodes) {
            return $this
                ->addUsingAlias(RuggengraatPeer::ATC, $gsAtcCodes->getAtccode(), $comparison);
        } elseif ($gsAtcCodes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RuggengraatPeer::ATC, $gsAtcCodes->toKeyValue('PrimaryKey', 'Atccode'), $comparison);
        } else {
            throw new PropelException('filterByGsAtcCodes() only accepts arguments of type GsAtcCodes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsAtcCodes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RuggengraatQuery The current query, for fluid interface
     */
    public function joinGsAtcCodes($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsAtcCodes');

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
            $this->addJoinObject($join, 'GsAtcCodes');
        }

        return $this;
    }

    /**
     * Use the GsAtcCodes relation GsAtcCodes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesQuery A secondary query class using the current class as primary query
     */
    public function useGsAtcCodesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsAtcCodes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsAtcCodes', '\PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Ruggengraat $ruggengraat Object to remove from the list of results
     *
     * @return RuggengraatQuery The current query, for fluid interface
     */
    public function prune($ruggengraat = null)
    {
        if ($ruggengraat) {
            $this->addUsingAlias(RuggengraatPeer::ZINDEX_NUMMER, $ruggengraat->getZindexNummer(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
