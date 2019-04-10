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
use PharmaIntelligence\GstandaardBundle\Model\GsOnderlingVerbandHpkprkgpk;
use PharmaIntelligence\GstandaardBundle\Model\GsOnderlingVerbandHpkprkgpkPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsOnderlingVerbandHpkprkgpkQuery;

/**
 * @method GsOnderlingVerbandHpkprkgpkQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsOnderlingVerbandHpkprkgpkQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsOnderlingVerbandHpkprkgpkQuery orderByHandelsproduktkode($order = Criteria::ASC) Order by the handelsproduktkode column
 * @method GsOnderlingVerbandHpkprkgpkQuery orderByPrkcode($order = Criteria::ASC) Order by the prkcode column
 * @method GsOnderlingVerbandHpkprkgpkQuery orderByAantalEenhedenPrkInHpk($order = Criteria::ASC) Order by the aantal_eenheden_prk_in_hpk column
 * @method GsOnderlingVerbandHpkprkgpkQuery orderByGeneriekeproductcode($order = Criteria::ASC) Order by the generiekeproductcode column
 * @method GsOnderlingVerbandHpkprkgpkQuery orderByAantalEenhedenGpkInPrk($order = Criteria::ASC) Order by the aantal_eenheden_gpk_in_prk column
 * @method GsOnderlingVerbandHpkprkgpkQuery orderByAantalEenhedenGpkInHpk($order = Criteria::ASC) Order by the aantal_eenheden_gpk_in_hpk column
 *
 * @method GsOnderlingVerbandHpkprkgpkQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsOnderlingVerbandHpkprkgpkQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsOnderlingVerbandHpkprkgpkQuery groupByHandelsproduktkode() Group by the handelsproduktkode column
 * @method GsOnderlingVerbandHpkprkgpkQuery groupByPrkcode() Group by the prkcode column
 * @method GsOnderlingVerbandHpkprkgpkQuery groupByAantalEenhedenPrkInHpk() Group by the aantal_eenheden_prk_in_hpk column
 * @method GsOnderlingVerbandHpkprkgpkQuery groupByGeneriekeproductcode() Group by the generiekeproductcode column
 * @method GsOnderlingVerbandHpkprkgpkQuery groupByAantalEenhedenGpkInPrk() Group by the aantal_eenheden_gpk_in_prk column
 * @method GsOnderlingVerbandHpkprkgpkQuery groupByAantalEenhedenGpkInHpk() Group by the aantal_eenheden_gpk_in_hpk column
 *
 * @method GsOnderlingVerbandHpkprkgpkQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsOnderlingVerbandHpkprkgpkQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsOnderlingVerbandHpkprkgpkQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsOnderlingVerbandHpkprkgpk findOne(PropelPDO $con = null) Return the first GsOnderlingVerbandHpkprkgpk matching the query
 * @method GsOnderlingVerbandHpkprkgpk findOneOrCreate(PropelPDO $con = null) Return the first GsOnderlingVerbandHpkprkgpk matching the query, or a new GsOnderlingVerbandHpkprkgpk object populated from the query conditions when no match is found
 *
 * @method GsOnderlingVerbandHpkprkgpk findOneByBestandnummer(int $bestandnummer) Return the first GsOnderlingVerbandHpkprkgpk filtered by the bestandnummer column
 * @method GsOnderlingVerbandHpkprkgpk findOneByMutatiekode(int $mutatiekode) Return the first GsOnderlingVerbandHpkprkgpk filtered by the mutatiekode column
 * @method GsOnderlingVerbandHpkprkgpk findOneByPrkcode(int $prkcode) Return the first GsOnderlingVerbandHpkprkgpk filtered by the prkcode column
 * @method GsOnderlingVerbandHpkprkgpk findOneByAantalEenhedenPrkInHpk(string $aantal_eenheden_prk_in_hpk) Return the first GsOnderlingVerbandHpkprkgpk filtered by the aantal_eenheden_prk_in_hpk column
 * @method GsOnderlingVerbandHpkprkgpk findOneByGeneriekeproductcode(int $generiekeproductcode) Return the first GsOnderlingVerbandHpkprkgpk filtered by the generiekeproductcode column
 * @method GsOnderlingVerbandHpkprkgpk findOneByAantalEenhedenGpkInPrk(string $aantal_eenheden_gpk_in_prk) Return the first GsOnderlingVerbandHpkprkgpk filtered by the aantal_eenheden_gpk_in_prk column
 * @method GsOnderlingVerbandHpkprkgpk findOneByAantalEenhedenGpkInHpk(string $aantal_eenheden_gpk_in_hpk) Return the first GsOnderlingVerbandHpkprkgpk filtered by the aantal_eenheden_gpk_in_hpk column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsOnderlingVerbandHpkprkgpk objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsOnderlingVerbandHpkprkgpk objects filtered by the mutatiekode column
 * @method array findByHandelsproduktkode(int $handelsproduktkode) Return GsOnderlingVerbandHpkprkgpk objects filtered by the handelsproduktkode column
 * @method array findByPrkcode(int $prkcode) Return GsOnderlingVerbandHpkprkgpk objects filtered by the prkcode column
 * @method array findByAantalEenhedenPrkInHpk(string $aantal_eenheden_prk_in_hpk) Return GsOnderlingVerbandHpkprkgpk objects filtered by the aantal_eenheden_prk_in_hpk column
 * @method array findByGeneriekeproductcode(int $generiekeproductcode) Return GsOnderlingVerbandHpkprkgpk objects filtered by the generiekeproductcode column
 * @method array findByAantalEenhedenGpkInPrk(string $aantal_eenheden_gpk_in_prk) Return GsOnderlingVerbandHpkprkgpk objects filtered by the aantal_eenheden_gpk_in_prk column
 * @method array findByAantalEenhedenGpkInHpk(string $aantal_eenheden_gpk_in_hpk) Return GsOnderlingVerbandHpkprkgpk objects filtered by the aantal_eenheden_gpk_in_hpk column
 */
abstract class BaseGsOnderlingVerbandHpkprkgpkQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsOnderlingVerbandHpkprkgpkQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsOnderlingVerbandHpkprkgpk';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsOnderlingVerbandHpkprkgpkQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsOnderlingVerbandHpkprkgpkQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsOnderlingVerbandHpkprkgpkQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsOnderlingVerbandHpkprkgpkQuery) {
            return $criteria;
        }
        $query = new GsOnderlingVerbandHpkprkgpkQuery(null, null, $modelAlias);

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
     * @return   GsOnderlingVerbandHpkprkgpk|GsOnderlingVerbandHpkprkgpk[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsOnderlingVerbandHpkprkgpkPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsOnderlingVerbandHpkprkgpkPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsOnderlingVerbandHpkprkgpk A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByHandelsproduktkode($key, $con = null)
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
     * @return                 GsOnderlingVerbandHpkprkgpk A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `handelsproduktkode`, `prkcode`, `aantal_eenheden_prk_in_hpk`, `generiekeproductcode`, `aantal_eenheden_gpk_in_prk`, `aantal_eenheden_gpk_in_hpk` FROM `gs_onderling_verband_hpkprkgpk` WHERE `handelsproduktkode` = :p0';
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
            $obj = new GsOnderlingVerbandHpkprkgpk();
            $obj->hydrate($row);
            GsOnderlingVerbandHpkprkgpkPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsOnderlingVerbandHpkprkgpk|GsOnderlingVerbandHpkprkgpk[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsOnderlingVerbandHpkprkgpk[]|mixed the list of results, formatted by the current formatter
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
     * @return GsOnderlingVerbandHpkprkgpkQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::HANDELSPRODUKTKODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsOnderlingVerbandHpkprkgpkQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::HANDELSPRODUKTKODE, $keys, Criteria::IN);
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
     * @return GsOnderlingVerbandHpkprkgpkQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsOnderlingVerbandHpkprkgpkQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @return GsOnderlingVerbandHpkprkgpkQuery The current query, for fluid interface
     */
    public function filterByHandelsproduktkode($handelsproduktkode = null, $comparison = null)
    {
        if (is_array($handelsproduktkode)) {
            $useMinMax = false;
            if (isset($handelsproduktkode['min'])) {
                $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::HANDELSPRODUKTKODE, $handelsproduktkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($handelsproduktkode['max'])) {
                $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::HANDELSPRODUKTKODE, $handelsproduktkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::HANDELSPRODUKTKODE, $handelsproduktkode, $comparison);
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
     * @param     mixed $prkcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsOnderlingVerbandHpkprkgpkQuery The current query, for fluid interface
     */
    public function filterByPrkcode($prkcode = null, $comparison = null)
    {
        if (is_array($prkcode)) {
            $useMinMax = false;
            if (isset($prkcode['min'])) {
                $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::PRKCODE, $prkcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prkcode['max'])) {
                $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::PRKCODE, $prkcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::PRKCODE, $prkcode, $comparison);
    }

    /**
     * Filter the query on the aantal_eenheden_prk_in_hpk column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalEenhedenPrkInHpk(1234); // WHERE aantal_eenheden_prk_in_hpk = 1234
     * $query->filterByAantalEenhedenPrkInHpk(array(12, 34)); // WHERE aantal_eenheden_prk_in_hpk IN (12, 34)
     * $query->filterByAantalEenhedenPrkInHpk(array('min' => 12)); // WHERE aantal_eenheden_prk_in_hpk >= 12
     * $query->filterByAantalEenhedenPrkInHpk(array('max' => 12)); // WHERE aantal_eenheden_prk_in_hpk <= 12
     * </code>
     *
     * @param     mixed $aantalEenhedenPrkInHpk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsOnderlingVerbandHpkprkgpkQuery The current query, for fluid interface
     */
    public function filterByAantalEenhedenPrkInHpk($aantalEenhedenPrkInHpk = null, $comparison = null)
    {
        if (is_array($aantalEenhedenPrkInHpk)) {
            $useMinMax = false;
            if (isset($aantalEenhedenPrkInHpk['min'])) {
                $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::AANTAL_EENHEDEN_PRK_IN_HPK, $aantalEenhedenPrkInHpk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalEenhedenPrkInHpk['max'])) {
                $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::AANTAL_EENHEDEN_PRK_IN_HPK, $aantalEenhedenPrkInHpk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::AANTAL_EENHEDEN_PRK_IN_HPK, $aantalEenhedenPrkInHpk, $comparison);
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
     * @return GsOnderlingVerbandHpkprkgpkQuery The current query, for fluid interface
     */
    public function filterByGeneriekeproductcode($generiekeproductcode = null, $comparison = null)
    {
        if (is_array($generiekeproductcode)) {
            $useMinMax = false;
            if (isset($generiekeproductcode['min'])) {
                $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($generiekeproductcode['max'])) {
                $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode, $comparison);
    }

    /**
     * Filter the query on the aantal_eenheden_gpk_in_prk column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalEenhedenGpkInPrk(1234); // WHERE aantal_eenheden_gpk_in_prk = 1234
     * $query->filterByAantalEenhedenGpkInPrk(array(12, 34)); // WHERE aantal_eenheden_gpk_in_prk IN (12, 34)
     * $query->filterByAantalEenhedenGpkInPrk(array('min' => 12)); // WHERE aantal_eenheden_gpk_in_prk >= 12
     * $query->filterByAantalEenhedenGpkInPrk(array('max' => 12)); // WHERE aantal_eenheden_gpk_in_prk <= 12
     * </code>
     *
     * @param     mixed $aantalEenhedenGpkInPrk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsOnderlingVerbandHpkprkgpkQuery The current query, for fluid interface
     */
    public function filterByAantalEenhedenGpkInPrk($aantalEenhedenGpkInPrk = null, $comparison = null)
    {
        if (is_array($aantalEenhedenGpkInPrk)) {
            $useMinMax = false;
            if (isset($aantalEenhedenGpkInPrk['min'])) {
                $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::AANTAL_EENHEDEN_GPK_IN_PRK, $aantalEenhedenGpkInPrk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalEenhedenGpkInPrk['max'])) {
                $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::AANTAL_EENHEDEN_GPK_IN_PRK, $aantalEenhedenGpkInPrk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::AANTAL_EENHEDEN_GPK_IN_PRK, $aantalEenhedenGpkInPrk, $comparison);
    }

    /**
     * Filter the query on the aantal_eenheden_gpk_in_hpk column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalEenhedenGpkInHpk(1234); // WHERE aantal_eenheden_gpk_in_hpk = 1234
     * $query->filterByAantalEenhedenGpkInHpk(array(12, 34)); // WHERE aantal_eenheden_gpk_in_hpk IN (12, 34)
     * $query->filterByAantalEenhedenGpkInHpk(array('min' => 12)); // WHERE aantal_eenheden_gpk_in_hpk >= 12
     * $query->filterByAantalEenhedenGpkInHpk(array('max' => 12)); // WHERE aantal_eenheden_gpk_in_hpk <= 12
     * </code>
     *
     * @param     mixed $aantalEenhedenGpkInHpk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsOnderlingVerbandHpkprkgpkQuery The current query, for fluid interface
     */
    public function filterByAantalEenhedenGpkInHpk($aantalEenhedenGpkInHpk = null, $comparison = null)
    {
        if (is_array($aantalEenhedenGpkInHpk)) {
            $useMinMax = false;
            if (isset($aantalEenhedenGpkInHpk['min'])) {
                $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::AANTAL_EENHEDEN_GPK_IN_HPK, $aantalEenhedenGpkInHpk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalEenhedenGpkInHpk['max'])) {
                $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::AANTAL_EENHEDEN_GPK_IN_HPK, $aantalEenhedenGpkInHpk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::AANTAL_EENHEDEN_GPK_IN_HPK, $aantalEenhedenGpkInHpk, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsOnderlingVerbandHpkprkgpk $gsOnderlingVerbandHpkprkgpk Object to remove from the list of results
     *
     * @return GsOnderlingVerbandHpkprkgpkQuery The current query, for fluid interface
     */
    public function prune($gsOnderlingVerbandHpkprkgpk = null)
    {
        if ($gsOnderlingVerbandHpkprkgpk) {
            $this->addUsingAlias(GsOnderlingVerbandHpkprkgpkPeer::HANDELSPRODUKTKODE, $gsOnderlingVerbandHpkprkgpk->getHandelsproduktkode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
