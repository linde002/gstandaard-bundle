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
use PharmaIntelligence\GstandaardBundle\Model\GsEnkelvoudigeToedieningswegenHpk;
use PharmaIntelligence\GstandaardBundle\Model\GsEnkelvoudigeToedieningswegenHpkPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsEnkelvoudigeToedieningswegenHpkQuery;

/**
 * @method GsEnkelvoudigeToedieningswegenHpkQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery orderByHandelsproduktkode($order = Criteria::ASC) Order by the handelsproduktkode column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery orderByPrkcode($order = Criteria::ASC) Order by the prkcode column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery orderByToedieningswegenThesaurusnummer($order = Criteria::ASC) Order by the toedieningswegen_thesaurusnummer column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery orderByEnkelvoudigeToedieningswegItemnr($order = Criteria::ASC) Order by the enkelvoudige_toedieningsweg_itemnr column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery orderByToedieningswegGeregistreerd($order = Criteria::ASC) Order by the toedieningsweg_geregistreerd column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery orderByVoorkeurstoedieningswegIndicatieThesaurusnummer($order = Criteria::ASC) Order by the voorkeurstoedieningsweg_indicatie_thesaurusnummer column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery orderByVoorkeurstoedieningswegIndicatieItemnummer($order = Criteria::ASC) Order by the voorkeurstoedieningsweg_indicatie_itemnummer column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery orderByBronToedieningswegThesaurusnummer($order = Criteria::ASC) Order by the bron_toedieningsweg_thesaurusnummer column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery orderByBronToedieningswegItemnummer($order = Criteria::ASC) Order by the bron_toedieningsweg_itemnummer column
 *
 * @method GsEnkelvoudigeToedieningswegenHpkQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery groupByHandelsproduktkode() Group by the handelsproduktkode column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery groupByPrkcode() Group by the prkcode column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery groupByToedieningswegenThesaurusnummer() Group by the toedieningswegen_thesaurusnummer column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery groupByEnkelvoudigeToedieningswegItemnr() Group by the enkelvoudige_toedieningsweg_itemnr column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery groupByToedieningswegGeregistreerd() Group by the toedieningsweg_geregistreerd column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery groupByVoorkeurstoedieningswegIndicatieThesaurusnummer() Group by the voorkeurstoedieningsweg_indicatie_thesaurusnummer column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery groupByVoorkeurstoedieningswegIndicatieItemnummer() Group by the voorkeurstoedieningsweg_indicatie_itemnummer column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery groupByBronToedieningswegThesaurusnummer() Group by the bron_toedieningsweg_thesaurusnummer column
 * @method GsEnkelvoudigeToedieningswegenHpkQuery groupByBronToedieningswegItemnummer() Group by the bron_toedieningsweg_itemnummer column
 *
 * @method GsEnkelvoudigeToedieningswegenHpkQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsEnkelvoudigeToedieningswegenHpkQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsEnkelvoudigeToedieningswegenHpkQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsEnkelvoudigeToedieningswegenHpk findOne(PropelPDO $con = null) Return the first GsEnkelvoudigeToedieningswegenHpk matching the query
 * @method GsEnkelvoudigeToedieningswegenHpk findOneOrCreate(PropelPDO $con = null) Return the first GsEnkelvoudigeToedieningswegenHpk matching the query, or a new GsEnkelvoudigeToedieningswegenHpk object populated from the query conditions when no match is found
 *
 * @method GsEnkelvoudigeToedieningswegenHpk findOneByBestandnummer(int $bestandnummer) Return the first GsEnkelvoudigeToedieningswegenHpk filtered by the bestandnummer column
 * @method GsEnkelvoudigeToedieningswegenHpk findOneByMutatiekode(int $mutatiekode) Return the first GsEnkelvoudigeToedieningswegenHpk filtered by the mutatiekode column
 * @method GsEnkelvoudigeToedieningswegenHpk findOneByHandelsproduktkode(int $handelsproduktkode) Return the first GsEnkelvoudigeToedieningswegenHpk filtered by the handelsproduktkode column
 * @method GsEnkelvoudigeToedieningswegenHpk findOneByPrkcode(int $prkcode) Return the first GsEnkelvoudigeToedieningswegenHpk filtered by the prkcode column
 * @method GsEnkelvoudigeToedieningswegenHpk findOneByToedieningswegenThesaurusnummer(int $toedieningswegen_thesaurusnummer) Return the first GsEnkelvoudigeToedieningswegenHpk filtered by the toedieningswegen_thesaurusnummer column
 * @method GsEnkelvoudigeToedieningswegenHpk findOneByEnkelvoudigeToedieningswegItemnr(int $enkelvoudige_toedieningsweg_itemnr) Return the first GsEnkelvoudigeToedieningswegenHpk filtered by the enkelvoudige_toedieningsweg_itemnr column
 * @method GsEnkelvoudigeToedieningswegenHpk findOneByToedieningswegGeregistreerd(int $toedieningsweg_geregistreerd) Return the first GsEnkelvoudigeToedieningswegenHpk filtered by the toedieningsweg_geregistreerd column
 * @method GsEnkelvoudigeToedieningswegenHpk findOneByVoorkeurstoedieningswegIndicatieThesaurusnummer(int $voorkeurstoedieningsweg_indicatie_thesaurusnummer) Return the first GsEnkelvoudigeToedieningswegenHpk filtered by the voorkeurstoedieningsweg_indicatie_thesaurusnummer column
 * @method GsEnkelvoudigeToedieningswegenHpk findOneByVoorkeurstoedieningswegIndicatieItemnummer(int $voorkeurstoedieningsweg_indicatie_itemnummer) Return the first GsEnkelvoudigeToedieningswegenHpk filtered by the voorkeurstoedieningsweg_indicatie_itemnummer column
 * @method GsEnkelvoudigeToedieningswegenHpk findOneByBronToedieningswegThesaurusnummer(int $bron_toedieningsweg_thesaurusnummer) Return the first GsEnkelvoudigeToedieningswegenHpk filtered by the bron_toedieningsweg_thesaurusnummer column
 * @method GsEnkelvoudigeToedieningswegenHpk findOneByBronToedieningswegItemnummer(int $bron_toedieningsweg_itemnummer) Return the first GsEnkelvoudigeToedieningswegenHpk filtered by the bron_toedieningsweg_itemnummer column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsEnkelvoudigeToedieningswegenHpk objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsEnkelvoudigeToedieningswegenHpk objects filtered by the mutatiekode column
 * @method array findByHandelsproduktkode(int $handelsproduktkode) Return GsEnkelvoudigeToedieningswegenHpk objects filtered by the handelsproduktkode column
 * @method array findByPrkcode(int $prkcode) Return GsEnkelvoudigeToedieningswegenHpk objects filtered by the prkcode column
 * @method array findByToedieningswegenThesaurusnummer(int $toedieningswegen_thesaurusnummer) Return GsEnkelvoudigeToedieningswegenHpk objects filtered by the toedieningswegen_thesaurusnummer column
 * @method array findByEnkelvoudigeToedieningswegItemnr(int $enkelvoudige_toedieningsweg_itemnr) Return GsEnkelvoudigeToedieningswegenHpk objects filtered by the enkelvoudige_toedieningsweg_itemnr column
 * @method array findByToedieningswegGeregistreerd(int $toedieningsweg_geregistreerd) Return GsEnkelvoudigeToedieningswegenHpk objects filtered by the toedieningsweg_geregistreerd column
 * @method array findByVoorkeurstoedieningswegIndicatieThesaurusnummer(int $voorkeurstoedieningsweg_indicatie_thesaurusnummer) Return GsEnkelvoudigeToedieningswegenHpk objects filtered by the voorkeurstoedieningsweg_indicatie_thesaurusnummer column
 * @method array findByVoorkeurstoedieningswegIndicatieItemnummer(int $voorkeurstoedieningsweg_indicatie_itemnummer) Return GsEnkelvoudigeToedieningswegenHpk objects filtered by the voorkeurstoedieningsweg_indicatie_itemnummer column
 * @method array findByBronToedieningswegThesaurusnummer(int $bron_toedieningsweg_thesaurusnummer) Return GsEnkelvoudigeToedieningswegenHpk objects filtered by the bron_toedieningsweg_thesaurusnummer column
 * @method array findByBronToedieningswegItemnummer(int $bron_toedieningsweg_itemnummer) Return GsEnkelvoudigeToedieningswegenHpk objects filtered by the bron_toedieningsweg_itemnummer column
 */
abstract class BaseGsEnkelvoudigeToedieningswegenHpkQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsEnkelvoudigeToedieningswegenHpkQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsEnkelvoudigeToedieningswegenHpk';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsEnkelvoudigeToedieningswegenHpkQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsEnkelvoudigeToedieningswegenHpkQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsEnkelvoudigeToedieningswegenHpkQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsEnkelvoudigeToedieningswegenHpkQuery) {
            return $criteria;
        }
        $query = new GsEnkelvoudigeToedieningswegenHpkQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$handelsproduktkode, $enkelvoudige_toedieningsweg_itemnr]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsEnkelvoudigeToedieningswegenHpk|GsEnkelvoudigeToedieningswegenHpk[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsEnkelvoudigeToedieningswegenHpkPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsEnkelvoudigeToedieningswegenHpkPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsEnkelvoudigeToedieningswegenHpk A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `handelsproduktkode`, `prkcode`, `toedieningswegen_thesaurusnummer`, `enkelvoudige_toedieningsweg_itemnr`, `toedieningsweg_geregistreerd`, `voorkeurstoedieningsweg_indicatie_thesaurusnummer`, `voorkeurstoedieningsweg_indicatie_itemnummer`, `bron_toedieningsweg_thesaurusnummer`, `bron_toedieningsweg_itemnummer` FROM `gs_enkelvoudige_toedieningswegen_hpk` WHERE `handelsproduktkode` = :p0 AND `enkelvoudige_toedieningsweg_itemnr` = :p1';
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
            $obj = new GsEnkelvoudigeToedieningswegenHpk();
            $obj->hydrate($row);
            GsEnkelvoudigeToedieningswegenHpkPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsEnkelvoudigeToedieningswegenHpk|GsEnkelvoudigeToedieningswegenHpk[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsEnkelvoudigeToedieningswegenHpk[]|mixed the list of results, formatted by the current formatter
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
     * @return GsEnkelvoudigeToedieningswegenHpkQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::HANDELSPRODUKTKODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::ENKELVOUDIGE_TOEDIENINGSWEG_ITEMNR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsEnkelvoudigeToedieningswegenHpkQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsEnkelvoudigeToedieningswegenHpkPeer::HANDELSPRODUKTKODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsEnkelvoudigeToedieningswegenHpkPeer::ENKELVOUDIGE_TOEDIENINGSWEG_ITEMNR, $key[1], Criteria::EQUAL);
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
     * @return GsEnkelvoudigeToedieningswegenHpkQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsEnkelvoudigeToedieningswegenHpkQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @return GsEnkelvoudigeToedieningswegenHpkQuery The current query, for fluid interface
     */
    public function filterByHandelsproduktkode($handelsproduktkode = null, $comparison = null)
    {
        if (is_array($handelsproduktkode)) {
            $useMinMax = false;
            if (isset($handelsproduktkode['min'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::HANDELSPRODUKTKODE, $handelsproduktkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($handelsproduktkode['max'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::HANDELSPRODUKTKODE, $handelsproduktkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::HANDELSPRODUKTKODE, $handelsproduktkode, $comparison);
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
     * @return GsEnkelvoudigeToedieningswegenHpkQuery The current query, for fluid interface
     */
    public function filterByPrkcode($prkcode = null, $comparison = null)
    {
        if (is_array($prkcode)) {
            $useMinMax = false;
            if (isset($prkcode['min'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::PRKCODE, $prkcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prkcode['max'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::PRKCODE, $prkcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::PRKCODE, $prkcode, $comparison);
    }

    /**
     * Filter the query on the toedieningswegen_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByToedieningswegenThesaurusnummer(1234); // WHERE toedieningswegen_thesaurusnummer = 1234
     * $query->filterByToedieningswegenThesaurusnummer(array(12, 34)); // WHERE toedieningswegen_thesaurusnummer IN (12, 34)
     * $query->filterByToedieningswegenThesaurusnummer(array('min' => 12)); // WHERE toedieningswegen_thesaurusnummer >= 12
     * $query->filterByToedieningswegenThesaurusnummer(array('max' => 12)); // WHERE toedieningswegen_thesaurusnummer <= 12
     * </code>
     *
     * @param     mixed $toedieningswegenThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsEnkelvoudigeToedieningswegenHpkQuery The current query, for fluid interface
     */
    public function filterByToedieningswegenThesaurusnummer($toedieningswegenThesaurusnummer = null, $comparison = null)
    {
        if (is_array($toedieningswegenThesaurusnummer)) {
            $useMinMax = false;
            if (isset($toedieningswegenThesaurusnummer['min'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::TOEDIENINGSWEGEN_THESAURUSNUMMER, $toedieningswegenThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($toedieningswegenThesaurusnummer['max'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::TOEDIENINGSWEGEN_THESAURUSNUMMER, $toedieningswegenThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::TOEDIENINGSWEGEN_THESAURUSNUMMER, $toedieningswegenThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the enkelvoudige_toedieningsweg_itemnr column
     *
     * Example usage:
     * <code>
     * $query->filterByEnkelvoudigeToedieningswegItemnr(1234); // WHERE enkelvoudige_toedieningsweg_itemnr = 1234
     * $query->filterByEnkelvoudigeToedieningswegItemnr(array(12, 34)); // WHERE enkelvoudige_toedieningsweg_itemnr IN (12, 34)
     * $query->filterByEnkelvoudigeToedieningswegItemnr(array('min' => 12)); // WHERE enkelvoudige_toedieningsweg_itemnr >= 12
     * $query->filterByEnkelvoudigeToedieningswegItemnr(array('max' => 12)); // WHERE enkelvoudige_toedieningsweg_itemnr <= 12
     * </code>
     *
     * @param     mixed $enkelvoudigeToedieningswegItemnr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsEnkelvoudigeToedieningswegenHpkQuery The current query, for fluid interface
     */
    public function filterByEnkelvoudigeToedieningswegItemnr($enkelvoudigeToedieningswegItemnr = null, $comparison = null)
    {
        if (is_array($enkelvoudigeToedieningswegItemnr)) {
            $useMinMax = false;
            if (isset($enkelvoudigeToedieningswegItemnr['min'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::ENKELVOUDIGE_TOEDIENINGSWEG_ITEMNR, $enkelvoudigeToedieningswegItemnr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($enkelvoudigeToedieningswegItemnr['max'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::ENKELVOUDIGE_TOEDIENINGSWEG_ITEMNR, $enkelvoudigeToedieningswegItemnr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::ENKELVOUDIGE_TOEDIENINGSWEG_ITEMNR, $enkelvoudigeToedieningswegItemnr, $comparison);
    }

    /**
     * Filter the query on the toedieningsweg_geregistreerd column
     *
     * Example usage:
     * <code>
     * $query->filterByToedieningswegGeregistreerd(1234); // WHERE toedieningsweg_geregistreerd = 1234
     * $query->filterByToedieningswegGeregistreerd(array(12, 34)); // WHERE toedieningsweg_geregistreerd IN (12, 34)
     * $query->filterByToedieningswegGeregistreerd(array('min' => 12)); // WHERE toedieningsweg_geregistreerd >= 12
     * $query->filterByToedieningswegGeregistreerd(array('max' => 12)); // WHERE toedieningsweg_geregistreerd <= 12
     * </code>
     *
     * @param     mixed $toedieningswegGeregistreerd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsEnkelvoudigeToedieningswegenHpkQuery The current query, for fluid interface
     */
    public function filterByToedieningswegGeregistreerd($toedieningswegGeregistreerd = null, $comparison = null)
    {
        if (is_array($toedieningswegGeregistreerd)) {
            $useMinMax = false;
            if (isset($toedieningswegGeregistreerd['min'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::TOEDIENINGSWEG_GEREGISTREERD, $toedieningswegGeregistreerd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($toedieningswegGeregistreerd['max'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::TOEDIENINGSWEG_GEREGISTREERD, $toedieningswegGeregistreerd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::TOEDIENINGSWEG_GEREGISTREERD, $toedieningswegGeregistreerd, $comparison);
    }

    /**
     * Filter the query on the voorkeurstoedieningsweg_indicatie_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByVoorkeurstoedieningswegIndicatieThesaurusnummer(1234); // WHERE voorkeurstoedieningsweg_indicatie_thesaurusnummer = 1234
     * $query->filterByVoorkeurstoedieningswegIndicatieThesaurusnummer(array(12, 34)); // WHERE voorkeurstoedieningsweg_indicatie_thesaurusnummer IN (12, 34)
     * $query->filterByVoorkeurstoedieningswegIndicatieThesaurusnummer(array('min' => 12)); // WHERE voorkeurstoedieningsweg_indicatie_thesaurusnummer >= 12
     * $query->filterByVoorkeurstoedieningswegIndicatieThesaurusnummer(array('max' => 12)); // WHERE voorkeurstoedieningsweg_indicatie_thesaurusnummer <= 12
     * </code>
     *
     * @param     mixed $voorkeurstoedieningswegIndicatieThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsEnkelvoudigeToedieningswegenHpkQuery The current query, for fluid interface
     */
    public function filterByVoorkeurstoedieningswegIndicatieThesaurusnummer($voorkeurstoedieningswegIndicatieThesaurusnummer = null, $comparison = null)
    {
        if (is_array($voorkeurstoedieningswegIndicatieThesaurusnummer)) {
            $useMinMax = false;
            if (isset($voorkeurstoedieningswegIndicatieThesaurusnummer['min'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::VOORKEURSTOEDIENINGSWEG_INDICATIE_THESAURUSNUMMER, $voorkeurstoedieningswegIndicatieThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($voorkeurstoedieningswegIndicatieThesaurusnummer['max'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::VOORKEURSTOEDIENINGSWEG_INDICATIE_THESAURUSNUMMER, $voorkeurstoedieningswegIndicatieThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::VOORKEURSTOEDIENINGSWEG_INDICATIE_THESAURUSNUMMER, $voorkeurstoedieningswegIndicatieThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the voorkeurstoedieningsweg_indicatie_itemnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByVoorkeurstoedieningswegIndicatieItemnummer(1234); // WHERE voorkeurstoedieningsweg_indicatie_itemnummer = 1234
     * $query->filterByVoorkeurstoedieningswegIndicatieItemnummer(array(12, 34)); // WHERE voorkeurstoedieningsweg_indicatie_itemnummer IN (12, 34)
     * $query->filterByVoorkeurstoedieningswegIndicatieItemnummer(array('min' => 12)); // WHERE voorkeurstoedieningsweg_indicatie_itemnummer >= 12
     * $query->filterByVoorkeurstoedieningswegIndicatieItemnummer(array('max' => 12)); // WHERE voorkeurstoedieningsweg_indicatie_itemnummer <= 12
     * </code>
     *
     * @param     mixed $voorkeurstoedieningswegIndicatieItemnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsEnkelvoudigeToedieningswegenHpkQuery The current query, for fluid interface
     */
    public function filterByVoorkeurstoedieningswegIndicatieItemnummer($voorkeurstoedieningswegIndicatieItemnummer = null, $comparison = null)
    {
        if (is_array($voorkeurstoedieningswegIndicatieItemnummer)) {
            $useMinMax = false;
            if (isset($voorkeurstoedieningswegIndicatieItemnummer['min'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::VOORKEURSTOEDIENINGSWEG_INDICATIE_ITEMNUMMER, $voorkeurstoedieningswegIndicatieItemnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($voorkeurstoedieningswegIndicatieItemnummer['max'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::VOORKEURSTOEDIENINGSWEG_INDICATIE_ITEMNUMMER, $voorkeurstoedieningswegIndicatieItemnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::VOORKEURSTOEDIENINGSWEG_INDICATIE_ITEMNUMMER, $voorkeurstoedieningswegIndicatieItemnummer, $comparison);
    }

    /**
     * Filter the query on the bron_toedieningsweg_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByBronToedieningswegThesaurusnummer(1234); // WHERE bron_toedieningsweg_thesaurusnummer = 1234
     * $query->filterByBronToedieningswegThesaurusnummer(array(12, 34)); // WHERE bron_toedieningsweg_thesaurusnummer IN (12, 34)
     * $query->filterByBronToedieningswegThesaurusnummer(array('min' => 12)); // WHERE bron_toedieningsweg_thesaurusnummer >= 12
     * $query->filterByBronToedieningswegThesaurusnummer(array('max' => 12)); // WHERE bron_toedieningsweg_thesaurusnummer <= 12
     * </code>
     *
     * @param     mixed $bronToedieningswegThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsEnkelvoudigeToedieningswegenHpkQuery The current query, for fluid interface
     */
    public function filterByBronToedieningswegThesaurusnummer($bronToedieningswegThesaurusnummer = null, $comparison = null)
    {
        if (is_array($bronToedieningswegThesaurusnummer)) {
            $useMinMax = false;
            if (isset($bronToedieningswegThesaurusnummer['min'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::BRON_TOEDIENINGSWEG_THESAURUSNUMMER, $bronToedieningswegThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bronToedieningswegThesaurusnummer['max'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::BRON_TOEDIENINGSWEG_THESAURUSNUMMER, $bronToedieningswegThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::BRON_TOEDIENINGSWEG_THESAURUSNUMMER, $bronToedieningswegThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the bron_toedieningsweg_itemnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByBronToedieningswegItemnummer(1234); // WHERE bron_toedieningsweg_itemnummer = 1234
     * $query->filterByBronToedieningswegItemnummer(array(12, 34)); // WHERE bron_toedieningsweg_itemnummer IN (12, 34)
     * $query->filterByBronToedieningswegItemnummer(array('min' => 12)); // WHERE bron_toedieningsweg_itemnummer >= 12
     * $query->filterByBronToedieningswegItemnummer(array('max' => 12)); // WHERE bron_toedieningsweg_itemnummer <= 12
     * </code>
     *
     * @param     mixed $bronToedieningswegItemnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsEnkelvoudigeToedieningswegenHpkQuery The current query, for fluid interface
     */
    public function filterByBronToedieningswegItemnummer($bronToedieningswegItemnummer = null, $comparison = null)
    {
        if (is_array($bronToedieningswegItemnummer)) {
            $useMinMax = false;
            if (isset($bronToedieningswegItemnummer['min'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::BRON_TOEDIENINGSWEG_ITEMNUMMER, $bronToedieningswegItemnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bronToedieningswegItemnummer['max'])) {
                $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::BRON_TOEDIENINGSWEG_ITEMNUMMER, $bronToedieningswegItemnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsEnkelvoudigeToedieningswegenHpkPeer::BRON_TOEDIENINGSWEG_ITEMNUMMER, $bronToedieningswegItemnummer, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsEnkelvoudigeToedieningswegenHpk $gsEnkelvoudigeToedieningswegenHpk Object to remove from the list of results
     *
     * @return GsEnkelvoudigeToedieningswegenHpkQuery The current query, for fluid interface
     */
    public function prune($gsEnkelvoudigeToedieningswegenHpk = null)
    {
        if ($gsEnkelvoudigeToedieningswegenHpk) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsEnkelvoudigeToedieningswegenHpkPeer::HANDELSPRODUKTKODE), $gsEnkelvoudigeToedieningswegenHpk->getHandelsproduktkode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsEnkelvoudigeToedieningswegenHpkPeer::ENKELVOUDIGE_TOEDIENINGSWEG_ITEMNR), $gsEnkelvoudigeToedieningswegenHpk->getEnkelvoudigeToedieningswegItemnr(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
