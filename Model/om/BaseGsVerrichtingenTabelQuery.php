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
use PharmaIntelligence\GstandaardBundle\Model\GsVerrichtingenTabel;
use PharmaIntelligence\GstandaardBundle\Model\GsVerrichtingenTabelPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsVerrichtingenTabelQuery;

/**
 * @method GsVerrichtingenTabelQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsVerrichtingenTabelQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsVerrichtingenTabelQuery orderByVerrichtingsnummer($order = Criteria::ASC) Order by the verrichtingsnummer column
 * @method GsVerrichtingenTabelQuery orderByThesaurusverwijzingBronVerrichting($order = Criteria::ASC) Order by the thesaurusverwijzing_bron_verrichting column
 * @method GsVerrichtingenTabelQuery orderByBronVerrichting($order = Criteria::ASC) Order by the bron_verrichting column
 * @method GsVerrichtingenTabelQuery orderByVerrichtingscodeGehanteerdDoorBron($order = Criteria::ASC) Order by the verrichtingscode_gehanteerd_door_bron column
 * @method GsVerrichtingenTabelQuery orderByThesaurusverwijzingVerrichtingsoort($order = Criteria::ASC) Order by the thesaurusverwijzing_verrichtingsoort column
 * @method GsVerrichtingenTabelQuery orderByVerrichtingssoortCode($order = Criteria::ASC) Order by the verrichtingssoort_code column
 * @method GsVerrichtingenTabelQuery orderByVerrichtingsomschrijving($order = Criteria::ASC) Order by the verrichtingsomschrijving column
 * @method GsVerrichtingenTabelQuery orderByMemocode($order = Criteria::ASC) Order by the memocode column
 * @method GsVerrichtingenTabelQuery orderByIngangsdatum($order = Criteria::ASC) Order by the ingangsdatum column
 * @method GsVerrichtingenTabelQuery orderByVervaldatum($order = Criteria::ASC) Order by the vervaldatum column
 * @method GsVerrichtingenTabelQuery orderByUrlVoorBeschrijvingVanToepassingVerrichting($order = Criteria::ASC) Order by the url_voor_beschrijving_van_toepassing_verrichting column
 * @method GsVerrichtingenTabelQuery orderByVerrichtingsnummerBovenliggendNiveau($order = Criteria::ASC) Order by the verrichtingsnummer_bovenliggend_niveau column
 *
 * @method GsVerrichtingenTabelQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsVerrichtingenTabelQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsVerrichtingenTabelQuery groupByVerrichtingsnummer() Group by the verrichtingsnummer column
 * @method GsVerrichtingenTabelQuery groupByThesaurusverwijzingBronVerrichting() Group by the thesaurusverwijzing_bron_verrichting column
 * @method GsVerrichtingenTabelQuery groupByBronVerrichting() Group by the bron_verrichting column
 * @method GsVerrichtingenTabelQuery groupByVerrichtingscodeGehanteerdDoorBron() Group by the verrichtingscode_gehanteerd_door_bron column
 * @method GsVerrichtingenTabelQuery groupByThesaurusverwijzingVerrichtingsoort() Group by the thesaurusverwijzing_verrichtingsoort column
 * @method GsVerrichtingenTabelQuery groupByVerrichtingssoortCode() Group by the verrichtingssoort_code column
 * @method GsVerrichtingenTabelQuery groupByVerrichtingsomschrijving() Group by the verrichtingsomschrijving column
 * @method GsVerrichtingenTabelQuery groupByMemocode() Group by the memocode column
 * @method GsVerrichtingenTabelQuery groupByIngangsdatum() Group by the ingangsdatum column
 * @method GsVerrichtingenTabelQuery groupByVervaldatum() Group by the vervaldatum column
 * @method GsVerrichtingenTabelQuery groupByUrlVoorBeschrijvingVanToepassingVerrichting() Group by the url_voor_beschrijving_van_toepassing_verrichting column
 * @method GsVerrichtingenTabelQuery groupByVerrichtingsnummerBovenliggendNiveau() Group by the verrichtingsnummer_bovenliggend_niveau column
 *
 * @method GsVerrichtingenTabelQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsVerrichtingenTabelQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsVerrichtingenTabelQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsVerrichtingenTabel findOne(PropelPDO $con = null) Return the first GsVerrichtingenTabel matching the query
 * @method GsVerrichtingenTabel findOneOrCreate(PropelPDO $con = null) Return the first GsVerrichtingenTabel matching the query, or a new GsVerrichtingenTabel object populated from the query conditions when no match is found
 *
 * @method GsVerrichtingenTabel findOneByBestandnummer(int $bestandnummer) Return the first GsVerrichtingenTabel filtered by the bestandnummer column
 * @method GsVerrichtingenTabel findOneByMutatiekode(int $mutatiekode) Return the first GsVerrichtingenTabel filtered by the mutatiekode column
 * @method GsVerrichtingenTabel findOneByVerrichtingsnummer(int $verrichtingsnummer) Return the first GsVerrichtingenTabel filtered by the verrichtingsnummer column
 * @method GsVerrichtingenTabel findOneByThesaurusverwijzingBronVerrichting(int $thesaurusverwijzing_bron_verrichting) Return the first GsVerrichtingenTabel filtered by the thesaurusverwijzing_bron_verrichting column
 * @method GsVerrichtingenTabel findOneByBronVerrichting(int $bron_verrichting) Return the first GsVerrichtingenTabel filtered by the bron_verrichting column
 * @method GsVerrichtingenTabel findOneByVerrichtingscodeGehanteerdDoorBron(string $verrichtingscode_gehanteerd_door_bron) Return the first GsVerrichtingenTabel filtered by the verrichtingscode_gehanteerd_door_bron column
 * @method GsVerrichtingenTabel findOneByThesaurusverwijzingVerrichtingsoort(int $thesaurusverwijzing_verrichtingsoort) Return the first GsVerrichtingenTabel filtered by the thesaurusverwijzing_verrichtingsoort column
 * @method GsVerrichtingenTabel findOneByVerrichtingssoortCode(int $verrichtingssoort_code) Return the first GsVerrichtingenTabel filtered by the verrichtingssoort_code column
 * @method GsVerrichtingenTabel findOneByVerrichtingsomschrijving(string $verrichtingsomschrijving) Return the first GsVerrichtingenTabel filtered by the verrichtingsomschrijving column
 * @method GsVerrichtingenTabel findOneByMemocode(string $memocode) Return the first GsVerrichtingenTabel filtered by the memocode column
 * @method GsVerrichtingenTabel findOneByIngangsdatum(int $ingangsdatum) Return the first GsVerrichtingenTabel filtered by the ingangsdatum column
 * @method GsVerrichtingenTabel findOneByVervaldatum(int $vervaldatum) Return the first GsVerrichtingenTabel filtered by the vervaldatum column
 * @method GsVerrichtingenTabel findOneByUrlVoorBeschrijvingVanToepassingVerrichting(string $url_voor_beschrijving_van_toepassing_verrichting) Return the first GsVerrichtingenTabel filtered by the url_voor_beschrijving_van_toepassing_verrichting column
 * @method GsVerrichtingenTabel findOneByVerrichtingsnummerBovenliggendNiveau(int $verrichtingsnummer_bovenliggend_niveau) Return the first GsVerrichtingenTabel filtered by the verrichtingsnummer_bovenliggend_niveau column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsVerrichtingenTabel objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsVerrichtingenTabel objects filtered by the mutatiekode column
 * @method array findByVerrichtingsnummer(int $verrichtingsnummer) Return GsVerrichtingenTabel objects filtered by the verrichtingsnummer column
 * @method array findByThesaurusverwijzingBronVerrichting(int $thesaurusverwijzing_bron_verrichting) Return GsVerrichtingenTabel objects filtered by the thesaurusverwijzing_bron_verrichting column
 * @method array findByBronVerrichting(int $bron_verrichting) Return GsVerrichtingenTabel objects filtered by the bron_verrichting column
 * @method array findByVerrichtingscodeGehanteerdDoorBron(string $verrichtingscode_gehanteerd_door_bron) Return GsVerrichtingenTabel objects filtered by the verrichtingscode_gehanteerd_door_bron column
 * @method array findByThesaurusverwijzingVerrichtingsoort(int $thesaurusverwijzing_verrichtingsoort) Return GsVerrichtingenTabel objects filtered by the thesaurusverwijzing_verrichtingsoort column
 * @method array findByVerrichtingssoortCode(int $verrichtingssoort_code) Return GsVerrichtingenTabel objects filtered by the verrichtingssoort_code column
 * @method array findByVerrichtingsomschrijving(string $verrichtingsomschrijving) Return GsVerrichtingenTabel objects filtered by the verrichtingsomschrijving column
 * @method array findByMemocode(string $memocode) Return GsVerrichtingenTabel objects filtered by the memocode column
 * @method array findByIngangsdatum(int $ingangsdatum) Return GsVerrichtingenTabel objects filtered by the ingangsdatum column
 * @method array findByVervaldatum(int $vervaldatum) Return GsVerrichtingenTabel objects filtered by the vervaldatum column
 * @method array findByUrlVoorBeschrijvingVanToepassingVerrichting(string $url_voor_beschrijving_van_toepassing_verrichting) Return GsVerrichtingenTabel objects filtered by the url_voor_beschrijving_van_toepassing_verrichting column
 * @method array findByVerrichtingsnummerBovenliggendNiveau(int $verrichtingsnummer_bovenliggend_niveau) Return GsVerrichtingenTabel objects filtered by the verrichtingsnummer_bovenliggend_niveau column
 */
abstract class BaseGsVerrichtingenTabelQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsVerrichtingenTabelQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVerrichtingenTabel';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsVerrichtingenTabelQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsVerrichtingenTabelQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsVerrichtingenTabelQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsVerrichtingenTabelQuery) {
            return $criteria;
        }
        $query = new GsVerrichtingenTabelQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$verrichtingsnummer, $bron_verrichting]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsVerrichtingenTabel|GsVerrichtingenTabel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsVerrichtingenTabelPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsVerrichtingenTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsVerrichtingenTabel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `verrichtingsnummer`, `thesaurusverwijzing_bron_verrichting`, `bron_verrichting`, `verrichtingscode_gehanteerd_door_bron`, `thesaurusverwijzing_verrichtingsoort`, `verrichtingssoort_code`, `verrichtingsomschrijving`, `memocode`, `ingangsdatum`, `vervaldatum`, `url_voor_beschrijving_van_toepassing_verrichting`, `verrichtingsnummer_bovenliggend_niveau` FROM `gs_verrichtingen_tabel` WHERE `verrichtingsnummer` = :p0 AND `bron_verrichting` = :p1';
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
            $obj = new GsVerrichtingenTabel();
            $obj->hydrate($row);
            GsVerrichtingenTabelPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsVerrichtingenTabel|GsVerrichtingenTabel[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsVerrichtingenTabel[]|mixed the list of results, formatted by the current formatter
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
     * @return GsVerrichtingenTabelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsVerrichtingenTabelPeer::BRON_VERRICHTING, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsVerrichtingenTabelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsVerrichtingenTabelPeer::BRON_VERRICHTING, $key[1], Criteria::EQUAL);
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
     * @return GsVerrichtingenTabelQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerrichtingenTabelPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsVerrichtingenTabelQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerrichtingenTabelPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the verrichtingsnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByVerrichtingsnummer(1234); // WHERE verrichtingsnummer = 1234
     * $query->filterByVerrichtingsnummer(array(12, 34)); // WHERE verrichtingsnummer IN (12, 34)
     * $query->filterByVerrichtingsnummer(array('min' => 12)); // WHERE verrichtingsnummer >= 12
     * $query->filterByVerrichtingsnummer(array('max' => 12)); // WHERE verrichtingsnummer <= 12
     * </code>
     *
     * @param     mixed $verrichtingsnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerrichtingenTabelQuery The current query, for fluid interface
     */
    public function filterByVerrichtingsnummer($verrichtingsnummer = null, $comparison = null)
    {
        if (is_array($verrichtingsnummer)) {
            $useMinMax = false;
            if (isset($verrichtingsnummer['min'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER, $verrichtingsnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($verrichtingsnummer['max'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER, $verrichtingsnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER, $verrichtingsnummer, $comparison);
    }

    /**
     * Filter the query on the thesaurusverwijzing_bron_verrichting column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusverwijzingBronVerrichting(1234); // WHERE thesaurusverwijzing_bron_verrichting = 1234
     * $query->filterByThesaurusverwijzingBronVerrichting(array(12, 34)); // WHERE thesaurusverwijzing_bron_verrichting IN (12, 34)
     * $query->filterByThesaurusverwijzingBronVerrichting(array('min' => 12)); // WHERE thesaurusverwijzing_bron_verrichting >= 12
     * $query->filterByThesaurusverwijzingBronVerrichting(array('max' => 12)); // WHERE thesaurusverwijzing_bron_verrichting <= 12
     * </code>
     *
     * @param     mixed $thesaurusverwijzingBronVerrichting The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerrichtingenTabelQuery The current query, for fluid interface
     */
    public function filterByThesaurusverwijzingBronVerrichting($thesaurusverwijzingBronVerrichting = null, $comparison = null)
    {
        if (is_array($thesaurusverwijzingBronVerrichting)) {
            $useMinMax = false;
            if (isset($thesaurusverwijzingBronVerrichting['min'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_BRON_VERRICHTING, $thesaurusverwijzingBronVerrichting['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusverwijzingBronVerrichting['max'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_BRON_VERRICHTING, $thesaurusverwijzingBronVerrichting['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_BRON_VERRICHTING, $thesaurusverwijzingBronVerrichting, $comparison);
    }

    /**
     * Filter the query on the bron_verrichting column
     *
     * Example usage:
     * <code>
     * $query->filterByBronVerrichting(1234); // WHERE bron_verrichting = 1234
     * $query->filterByBronVerrichting(array(12, 34)); // WHERE bron_verrichting IN (12, 34)
     * $query->filterByBronVerrichting(array('min' => 12)); // WHERE bron_verrichting >= 12
     * $query->filterByBronVerrichting(array('max' => 12)); // WHERE bron_verrichting <= 12
     * </code>
     *
     * @param     mixed $bronVerrichting The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerrichtingenTabelQuery The current query, for fluid interface
     */
    public function filterByBronVerrichting($bronVerrichting = null, $comparison = null)
    {
        if (is_array($bronVerrichting)) {
            $useMinMax = false;
            if (isset($bronVerrichting['min'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::BRON_VERRICHTING, $bronVerrichting['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bronVerrichting['max'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::BRON_VERRICHTING, $bronVerrichting['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerrichtingenTabelPeer::BRON_VERRICHTING, $bronVerrichting, $comparison);
    }

    /**
     * Filter the query on the verrichtingscode_gehanteerd_door_bron column
     *
     * Example usage:
     * <code>
     * $query->filterByVerrichtingscodeGehanteerdDoorBron('fooValue');   // WHERE verrichtingscode_gehanteerd_door_bron = 'fooValue'
     * $query->filterByVerrichtingscodeGehanteerdDoorBron('%fooValue%'); // WHERE verrichtingscode_gehanteerd_door_bron LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verrichtingscodeGehanteerdDoorBron The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerrichtingenTabelQuery The current query, for fluid interface
     */
    public function filterByVerrichtingscodeGehanteerdDoorBron($verrichtingscodeGehanteerdDoorBron = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verrichtingscodeGehanteerdDoorBron)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $verrichtingscodeGehanteerdDoorBron)) {
                $verrichtingscodeGehanteerdDoorBron = str_replace('*', '%', $verrichtingscodeGehanteerdDoorBron);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsVerrichtingenTabelPeer::VERRICHTINGSCODE_GEHANTEERD_DOOR_BRON, $verrichtingscodeGehanteerdDoorBron, $comparison);
    }

    /**
     * Filter the query on the thesaurusverwijzing_verrichtingsoort column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusverwijzingVerrichtingsoort(1234); // WHERE thesaurusverwijzing_verrichtingsoort = 1234
     * $query->filterByThesaurusverwijzingVerrichtingsoort(array(12, 34)); // WHERE thesaurusverwijzing_verrichtingsoort IN (12, 34)
     * $query->filterByThesaurusverwijzingVerrichtingsoort(array('min' => 12)); // WHERE thesaurusverwijzing_verrichtingsoort >= 12
     * $query->filterByThesaurusverwijzingVerrichtingsoort(array('max' => 12)); // WHERE thesaurusverwijzing_verrichtingsoort <= 12
     * </code>
     *
     * @param     mixed $thesaurusverwijzingVerrichtingsoort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerrichtingenTabelQuery The current query, for fluid interface
     */
    public function filterByThesaurusverwijzingVerrichtingsoort($thesaurusverwijzingVerrichtingsoort = null, $comparison = null)
    {
        if (is_array($thesaurusverwijzingVerrichtingsoort)) {
            $useMinMax = false;
            if (isset($thesaurusverwijzingVerrichtingsoort['min'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_VERRICHTINGSOORT, $thesaurusverwijzingVerrichtingsoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusverwijzingVerrichtingsoort['max'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_VERRICHTINGSOORT, $thesaurusverwijzingVerrichtingsoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerrichtingenTabelPeer::THESAURUSVERWIJZING_VERRICHTINGSOORT, $thesaurusverwijzingVerrichtingsoort, $comparison);
    }

    /**
     * Filter the query on the verrichtingssoort_code column
     *
     * Example usage:
     * <code>
     * $query->filterByVerrichtingssoortCode(1234); // WHERE verrichtingssoort_code = 1234
     * $query->filterByVerrichtingssoortCode(array(12, 34)); // WHERE verrichtingssoort_code IN (12, 34)
     * $query->filterByVerrichtingssoortCode(array('min' => 12)); // WHERE verrichtingssoort_code >= 12
     * $query->filterByVerrichtingssoortCode(array('max' => 12)); // WHERE verrichtingssoort_code <= 12
     * </code>
     *
     * @param     mixed $verrichtingssoortCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerrichtingenTabelQuery The current query, for fluid interface
     */
    public function filterByVerrichtingssoortCode($verrichtingssoortCode = null, $comparison = null)
    {
        if (is_array($verrichtingssoortCode)) {
            $useMinMax = false;
            if (isset($verrichtingssoortCode['min'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::VERRICHTINGSSOORT_CODE, $verrichtingssoortCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($verrichtingssoortCode['max'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::VERRICHTINGSSOORT_CODE, $verrichtingssoortCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerrichtingenTabelPeer::VERRICHTINGSSOORT_CODE, $verrichtingssoortCode, $comparison);
    }

    /**
     * Filter the query on the verrichtingsomschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByVerrichtingsomschrijving('fooValue');   // WHERE verrichtingsomschrijving = 'fooValue'
     * $query->filterByVerrichtingsomschrijving('%fooValue%'); // WHERE verrichtingsomschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verrichtingsomschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerrichtingenTabelQuery The current query, for fluid interface
     */
    public function filterByVerrichtingsomschrijving($verrichtingsomschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verrichtingsomschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $verrichtingsomschrijving)) {
                $verrichtingsomschrijving = str_replace('*', '%', $verrichtingsomschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsVerrichtingenTabelPeer::VERRICHTINGSOMSCHRIJVING, $verrichtingsomschrijving, $comparison);
    }

    /**
     * Filter the query on the memocode column
     *
     * Example usage:
     * <code>
     * $query->filterByMemocode('fooValue');   // WHERE memocode = 'fooValue'
     * $query->filterByMemocode('%fooValue%'); // WHERE memocode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $memocode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerrichtingenTabelQuery The current query, for fluid interface
     */
    public function filterByMemocode($memocode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($memocode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $memocode)) {
                $memocode = str_replace('*', '%', $memocode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsVerrichtingenTabelPeer::MEMOCODE, $memocode, $comparison);
    }

    /**
     * Filter the query on the ingangsdatum column
     *
     * Example usage:
     * <code>
     * $query->filterByIngangsdatum(1234); // WHERE ingangsdatum = 1234
     * $query->filterByIngangsdatum(array(12, 34)); // WHERE ingangsdatum IN (12, 34)
     * $query->filterByIngangsdatum(array('min' => 12)); // WHERE ingangsdatum >= 12
     * $query->filterByIngangsdatum(array('max' => 12)); // WHERE ingangsdatum <= 12
     * </code>
     *
     * @param     mixed $ingangsdatum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerrichtingenTabelQuery The current query, for fluid interface
     */
    public function filterByIngangsdatum($ingangsdatum = null, $comparison = null)
    {
        if (is_array($ingangsdatum)) {
            $useMinMax = false;
            if (isset($ingangsdatum['min'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::INGANGSDATUM, $ingangsdatum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ingangsdatum['max'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::INGANGSDATUM, $ingangsdatum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerrichtingenTabelPeer::INGANGSDATUM, $ingangsdatum, $comparison);
    }

    /**
     * Filter the query on the vervaldatum column
     *
     * Example usage:
     * <code>
     * $query->filterByVervaldatum(1234); // WHERE vervaldatum = 1234
     * $query->filterByVervaldatum(array(12, 34)); // WHERE vervaldatum IN (12, 34)
     * $query->filterByVervaldatum(array('min' => 12)); // WHERE vervaldatum >= 12
     * $query->filterByVervaldatum(array('max' => 12)); // WHERE vervaldatum <= 12
     * </code>
     *
     * @param     mixed $vervaldatum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerrichtingenTabelQuery The current query, for fluid interface
     */
    public function filterByVervaldatum($vervaldatum = null, $comparison = null)
    {
        if (is_array($vervaldatum)) {
            $useMinMax = false;
            if (isset($vervaldatum['min'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::VERVALDATUM, $vervaldatum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vervaldatum['max'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::VERVALDATUM, $vervaldatum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerrichtingenTabelPeer::VERVALDATUM, $vervaldatum, $comparison);
    }

    /**
     * Filter the query on the url_voor_beschrijving_van_toepassing_verrichting column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlVoorBeschrijvingVanToepassingVerrichting('fooValue');   // WHERE url_voor_beschrijving_van_toepassing_verrichting = 'fooValue'
     * $query->filterByUrlVoorBeschrijvingVanToepassingVerrichting('%fooValue%'); // WHERE url_voor_beschrijving_van_toepassing_verrichting LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlVoorBeschrijvingVanToepassingVerrichting The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerrichtingenTabelQuery The current query, for fluid interface
     */
    public function filterByUrlVoorBeschrijvingVanToepassingVerrichting($urlVoorBeschrijvingVanToepassingVerrichting = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlVoorBeschrijvingVanToepassingVerrichting)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlVoorBeschrijvingVanToepassingVerrichting)) {
                $urlVoorBeschrijvingVanToepassingVerrichting = str_replace('*', '%', $urlVoorBeschrijvingVanToepassingVerrichting);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsVerrichtingenTabelPeer::URL_VOOR_BESCHRIJVING_VAN_TOEPASSING_VERRICHTING, $urlVoorBeschrijvingVanToepassingVerrichting, $comparison);
    }

    /**
     * Filter the query on the verrichtingsnummer_bovenliggend_niveau column
     *
     * Example usage:
     * <code>
     * $query->filterByVerrichtingsnummerBovenliggendNiveau(1234); // WHERE verrichtingsnummer_bovenliggend_niveau = 1234
     * $query->filterByVerrichtingsnummerBovenliggendNiveau(array(12, 34)); // WHERE verrichtingsnummer_bovenliggend_niveau IN (12, 34)
     * $query->filterByVerrichtingsnummerBovenliggendNiveau(array('min' => 12)); // WHERE verrichtingsnummer_bovenliggend_niveau >= 12
     * $query->filterByVerrichtingsnummerBovenliggendNiveau(array('max' => 12)); // WHERE verrichtingsnummer_bovenliggend_niveau <= 12
     * </code>
     *
     * @param     mixed $verrichtingsnummerBovenliggendNiveau The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerrichtingenTabelQuery The current query, for fluid interface
     */
    public function filterByVerrichtingsnummerBovenliggendNiveau($verrichtingsnummerBovenliggendNiveau = null, $comparison = null)
    {
        if (is_array($verrichtingsnummerBovenliggendNiveau)) {
            $useMinMax = false;
            if (isset($verrichtingsnummerBovenliggendNiveau['min'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER_BOVENLIGGEND_NIVEAU, $verrichtingsnummerBovenliggendNiveau['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($verrichtingsnummerBovenliggendNiveau['max'])) {
                $this->addUsingAlias(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER_BOVENLIGGEND_NIVEAU, $verrichtingsnummerBovenliggendNiveau['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER_BOVENLIGGEND_NIVEAU, $verrichtingsnummerBovenliggendNiveau, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsVerrichtingenTabel $gsVerrichtingenTabel Object to remove from the list of results
     *
     * @return GsVerrichtingenTabelQuery The current query, for fluid interface
     */
    public function prune($gsVerrichtingenTabel = null)
    {
        if ($gsVerrichtingenTabel) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsVerrichtingenTabelPeer::VERRICHTINGSNUMMER), $gsVerrichtingenTabel->getVerrichtingsnummer(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsVerrichtingenTabelPeer::BRON_VERRICHTING), $gsVerrichtingenTabel->getBronVerrichting(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
