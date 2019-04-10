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
use PharmaIntelligence\GstandaardBundle\Model\GsHeaderRelatieBestand;
use PharmaIntelligence\GstandaardBundle\Model\GsHeaderRelatieBestandPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsHeaderRelatieBestandQuery;

/**
 * @method GsHeaderRelatieBestandQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsHeaderRelatieBestandQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsHeaderRelatieBestandQuery orderByRelatieSoortNummer($order = Criteria::ASC) Order by the relatie_soort_nummer column
 * @method GsHeaderRelatieBestandQuery orderByRelatieomschrijving($order = Criteria::ASC) Order by the relatieomschrijving column
 * @method GsHeaderRelatieBestandQuery orderByVerwijzingRelatieBestand1($order = Criteria::ASC) Order by the verwijzing_relatie_bestand_1 column
 * @method GsHeaderRelatieBestandQuery orderByVerwijzingRelatieThesauri1($order = Criteria::ASC) Order by the verwijzing_relatie_thesauri_1 column
 * @method GsHeaderRelatieBestandQuery orderByVerwijzingIdentificierendeRubriek1($order = Criteria::ASC) Order by the verwijzing_identificierende_rubriek_1 column
 * @method GsHeaderRelatieBestandQuery orderByVerwijzingRelatieBestand2($order = Criteria::ASC) Order by the verwijzing_relatie_bestand_2 column
 * @method GsHeaderRelatieBestandQuery orderByVerwijzingRelatieThesauri2($order = Criteria::ASC) Order by the verwijzing_relatie_thesauri_2 column
 * @method GsHeaderRelatieBestandQuery orderByVerwijzingIdentificierendeRubriek2($order = Criteria::ASC) Order by the verwijzing_identificierende_rubriek_2 column
 *
 * @method GsHeaderRelatieBestandQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsHeaderRelatieBestandQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsHeaderRelatieBestandQuery groupByRelatieSoortNummer() Group by the relatie_soort_nummer column
 * @method GsHeaderRelatieBestandQuery groupByRelatieomschrijving() Group by the relatieomschrijving column
 * @method GsHeaderRelatieBestandQuery groupByVerwijzingRelatieBestand1() Group by the verwijzing_relatie_bestand_1 column
 * @method GsHeaderRelatieBestandQuery groupByVerwijzingRelatieThesauri1() Group by the verwijzing_relatie_thesauri_1 column
 * @method GsHeaderRelatieBestandQuery groupByVerwijzingIdentificierendeRubriek1() Group by the verwijzing_identificierende_rubriek_1 column
 * @method GsHeaderRelatieBestandQuery groupByVerwijzingRelatieBestand2() Group by the verwijzing_relatie_bestand_2 column
 * @method GsHeaderRelatieBestandQuery groupByVerwijzingRelatieThesauri2() Group by the verwijzing_relatie_thesauri_2 column
 * @method GsHeaderRelatieBestandQuery groupByVerwijzingIdentificierendeRubriek2() Group by the verwijzing_identificierende_rubriek_2 column
 *
 * @method GsHeaderRelatieBestandQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsHeaderRelatieBestandQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsHeaderRelatieBestandQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsHeaderRelatieBestand findOne(PropelPDO $con = null) Return the first GsHeaderRelatieBestand matching the query
 * @method GsHeaderRelatieBestand findOneOrCreate(PropelPDO $con = null) Return the first GsHeaderRelatieBestand matching the query, or a new GsHeaderRelatieBestand object populated from the query conditions when no match is found
 *
 * @method GsHeaderRelatieBestand findOneByBestandnummer(int $bestandnummer) Return the first GsHeaderRelatieBestand filtered by the bestandnummer column
 * @method GsHeaderRelatieBestand findOneByMutatiekode(int $mutatiekode) Return the first GsHeaderRelatieBestand filtered by the mutatiekode column
 * @method GsHeaderRelatieBestand findOneByRelatieomschrijving(string $relatieomschrijving) Return the first GsHeaderRelatieBestand filtered by the relatieomschrijving column
 * @method GsHeaderRelatieBestand findOneByVerwijzingRelatieBestand1(string $verwijzing_relatie_bestand_1) Return the first GsHeaderRelatieBestand filtered by the verwijzing_relatie_bestand_1 column
 * @method GsHeaderRelatieBestand findOneByVerwijzingRelatieThesauri1(int $verwijzing_relatie_thesauri_1) Return the first GsHeaderRelatieBestand filtered by the verwijzing_relatie_thesauri_1 column
 * @method GsHeaderRelatieBestand findOneByVerwijzingIdentificierendeRubriek1(string $verwijzing_identificierende_rubriek_1) Return the first GsHeaderRelatieBestand filtered by the verwijzing_identificierende_rubriek_1 column
 * @method GsHeaderRelatieBestand findOneByVerwijzingRelatieBestand2(string $verwijzing_relatie_bestand_2) Return the first GsHeaderRelatieBestand filtered by the verwijzing_relatie_bestand_2 column
 * @method GsHeaderRelatieBestand findOneByVerwijzingRelatieThesauri2(int $verwijzing_relatie_thesauri_2) Return the first GsHeaderRelatieBestand filtered by the verwijzing_relatie_thesauri_2 column
 * @method GsHeaderRelatieBestand findOneByVerwijzingIdentificierendeRubriek2(string $verwijzing_identificierende_rubriek_2) Return the first GsHeaderRelatieBestand filtered by the verwijzing_identificierende_rubriek_2 column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsHeaderRelatieBestand objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsHeaderRelatieBestand objects filtered by the mutatiekode column
 * @method array findByRelatieSoortNummer(int $relatie_soort_nummer) Return GsHeaderRelatieBestand objects filtered by the relatie_soort_nummer column
 * @method array findByRelatieomschrijving(string $relatieomschrijving) Return GsHeaderRelatieBestand objects filtered by the relatieomschrijving column
 * @method array findByVerwijzingRelatieBestand1(string $verwijzing_relatie_bestand_1) Return GsHeaderRelatieBestand objects filtered by the verwijzing_relatie_bestand_1 column
 * @method array findByVerwijzingRelatieThesauri1(int $verwijzing_relatie_thesauri_1) Return GsHeaderRelatieBestand objects filtered by the verwijzing_relatie_thesauri_1 column
 * @method array findByVerwijzingIdentificierendeRubriek1(string $verwijzing_identificierende_rubriek_1) Return GsHeaderRelatieBestand objects filtered by the verwijzing_identificierende_rubriek_1 column
 * @method array findByVerwijzingRelatieBestand2(string $verwijzing_relatie_bestand_2) Return GsHeaderRelatieBestand objects filtered by the verwijzing_relatie_bestand_2 column
 * @method array findByVerwijzingRelatieThesauri2(int $verwijzing_relatie_thesauri_2) Return GsHeaderRelatieBestand objects filtered by the verwijzing_relatie_thesauri_2 column
 * @method array findByVerwijzingIdentificierendeRubriek2(string $verwijzing_identificierende_rubriek_2) Return GsHeaderRelatieBestand objects filtered by the verwijzing_identificierende_rubriek_2 column
 */
abstract class BaseGsHeaderRelatieBestandQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsHeaderRelatieBestandQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHeaderRelatieBestand';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsHeaderRelatieBestandQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsHeaderRelatieBestandQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsHeaderRelatieBestandQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsHeaderRelatieBestandQuery) {
            return $criteria;
        }
        $query = new GsHeaderRelatieBestandQuery(null, null, $modelAlias);

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
     * @return   GsHeaderRelatieBestand|GsHeaderRelatieBestand[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsHeaderRelatieBestandPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsHeaderRelatieBestandPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsHeaderRelatieBestand A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRelatieSoortNummer($key, $con = null)
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
     * @return                 GsHeaderRelatieBestand A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `relatie_soort_nummer`, `relatieomschrijving`, `verwijzing_relatie_bestand_1`, `verwijzing_relatie_thesauri_1`, `verwijzing_identificierende_rubriek_1`, `verwijzing_relatie_bestand_2`, `verwijzing_relatie_thesauri_2`, `verwijzing_identificierende_rubriek_2` FROM `gs_header_relatie_bestand` WHERE `relatie_soort_nummer` = :p0';
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
            $obj = new GsHeaderRelatieBestand();
            $obj->hydrate($row);
            GsHeaderRelatieBestandPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsHeaderRelatieBestand|GsHeaderRelatieBestand[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsHeaderRelatieBestand[]|mixed the list of results, formatted by the current formatter
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
     * @return GsHeaderRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsHeaderRelatieBestandPeer::RELATIE_SOORT_NUMMER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsHeaderRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsHeaderRelatieBestandPeer::RELATIE_SOORT_NUMMER, $keys, Criteria::IN);
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
     * @return GsHeaderRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsHeaderRelatieBestandPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsHeaderRelatieBestandPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHeaderRelatieBestandPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsHeaderRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsHeaderRelatieBestandPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsHeaderRelatieBestandPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHeaderRelatieBestandPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the relatie_soort_nummer column
     *
     * Example usage:
     * <code>
     * $query->filterByRelatieSoortNummer(1234); // WHERE relatie_soort_nummer = 1234
     * $query->filterByRelatieSoortNummer(array(12, 34)); // WHERE relatie_soort_nummer IN (12, 34)
     * $query->filterByRelatieSoortNummer(array('min' => 12)); // WHERE relatie_soort_nummer >= 12
     * $query->filterByRelatieSoortNummer(array('max' => 12)); // WHERE relatie_soort_nummer <= 12
     * </code>
     *
     * @param     mixed $relatieSoortNummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHeaderRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByRelatieSoortNummer($relatieSoortNummer = null, $comparison = null)
    {
        if (is_array($relatieSoortNummer)) {
            $useMinMax = false;
            if (isset($relatieSoortNummer['min'])) {
                $this->addUsingAlias(GsHeaderRelatieBestandPeer::RELATIE_SOORT_NUMMER, $relatieSoortNummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($relatieSoortNummer['max'])) {
                $this->addUsingAlias(GsHeaderRelatieBestandPeer::RELATIE_SOORT_NUMMER, $relatieSoortNummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHeaderRelatieBestandPeer::RELATIE_SOORT_NUMMER, $relatieSoortNummer, $comparison);
    }

    /**
     * Filter the query on the relatieomschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByRelatieomschrijving('fooValue');   // WHERE relatieomschrijving = 'fooValue'
     * $query->filterByRelatieomschrijving('%fooValue%'); // WHERE relatieomschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $relatieomschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHeaderRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByRelatieomschrijving($relatieomschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($relatieomschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $relatieomschrijving)) {
                $relatieomschrijving = str_replace('*', '%', $relatieomschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHeaderRelatieBestandPeer::RELATIEOMSCHRIJVING, $relatieomschrijving, $comparison);
    }

    /**
     * Filter the query on the verwijzing_relatie_bestand_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVerwijzingRelatieBestand1('fooValue');   // WHERE verwijzing_relatie_bestand_1 = 'fooValue'
     * $query->filterByVerwijzingRelatieBestand1('%fooValue%'); // WHERE verwijzing_relatie_bestand_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verwijzingRelatieBestand1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHeaderRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByVerwijzingRelatieBestand1($verwijzingRelatieBestand1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verwijzingRelatieBestand1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $verwijzingRelatieBestand1)) {
                $verwijzingRelatieBestand1 = str_replace('*', '%', $verwijzingRelatieBestand1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_BESTAND_1, $verwijzingRelatieBestand1, $comparison);
    }

    /**
     * Filter the query on the verwijzing_relatie_thesauri_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVerwijzingRelatieThesauri1(1234); // WHERE verwijzing_relatie_thesauri_1 = 1234
     * $query->filterByVerwijzingRelatieThesauri1(array(12, 34)); // WHERE verwijzing_relatie_thesauri_1 IN (12, 34)
     * $query->filterByVerwijzingRelatieThesauri1(array('min' => 12)); // WHERE verwijzing_relatie_thesauri_1 >= 12
     * $query->filterByVerwijzingRelatieThesauri1(array('max' => 12)); // WHERE verwijzing_relatie_thesauri_1 <= 12
     * </code>
     *
     * @param     mixed $verwijzingRelatieThesauri1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHeaderRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByVerwijzingRelatieThesauri1($verwijzingRelatieThesauri1 = null, $comparison = null)
    {
        if (is_array($verwijzingRelatieThesauri1)) {
            $useMinMax = false;
            if (isset($verwijzingRelatieThesauri1['min'])) {
                $this->addUsingAlias(GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_THESAURI_1, $verwijzingRelatieThesauri1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($verwijzingRelatieThesauri1['max'])) {
                $this->addUsingAlias(GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_THESAURI_1, $verwijzingRelatieThesauri1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_THESAURI_1, $verwijzingRelatieThesauri1, $comparison);
    }

    /**
     * Filter the query on the verwijzing_identificierende_rubriek_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVerwijzingIdentificierendeRubriek1('fooValue');   // WHERE verwijzing_identificierende_rubriek_1 = 'fooValue'
     * $query->filterByVerwijzingIdentificierendeRubriek1('%fooValue%'); // WHERE verwijzing_identificierende_rubriek_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verwijzingIdentificierendeRubriek1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHeaderRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByVerwijzingIdentificierendeRubriek1($verwijzingIdentificierendeRubriek1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verwijzingIdentificierendeRubriek1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $verwijzingIdentificierendeRubriek1)) {
                $verwijzingIdentificierendeRubriek1 = str_replace('*', '%', $verwijzingIdentificierendeRubriek1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHeaderRelatieBestandPeer::VERWIJZING_IDENTIFICIERENDE_RUBRIEK_1, $verwijzingIdentificierendeRubriek1, $comparison);
    }

    /**
     * Filter the query on the verwijzing_relatie_bestand_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVerwijzingRelatieBestand2('fooValue');   // WHERE verwijzing_relatie_bestand_2 = 'fooValue'
     * $query->filterByVerwijzingRelatieBestand2('%fooValue%'); // WHERE verwijzing_relatie_bestand_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verwijzingRelatieBestand2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHeaderRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByVerwijzingRelatieBestand2($verwijzingRelatieBestand2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verwijzingRelatieBestand2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $verwijzingRelatieBestand2)) {
                $verwijzingRelatieBestand2 = str_replace('*', '%', $verwijzingRelatieBestand2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_BESTAND_2, $verwijzingRelatieBestand2, $comparison);
    }

    /**
     * Filter the query on the verwijzing_relatie_thesauri_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVerwijzingRelatieThesauri2(1234); // WHERE verwijzing_relatie_thesauri_2 = 1234
     * $query->filterByVerwijzingRelatieThesauri2(array(12, 34)); // WHERE verwijzing_relatie_thesauri_2 IN (12, 34)
     * $query->filterByVerwijzingRelatieThesauri2(array('min' => 12)); // WHERE verwijzing_relatie_thesauri_2 >= 12
     * $query->filterByVerwijzingRelatieThesauri2(array('max' => 12)); // WHERE verwijzing_relatie_thesauri_2 <= 12
     * </code>
     *
     * @param     mixed $verwijzingRelatieThesauri2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHeaderRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByVerwijzingRelatieThesauri2($verwijzingRelatieThesauri2 = null, $comparison = null)
    {
        if (is_array($verwijzingRelatieThesauri2)) {
            $useMinMax = false;
            if (isset($verwijzingRelatieThesauri2['min'])) {
                $this->addUsingAlias(GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_THESAURI_2, $verwijzingRelatieThesauri2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($verwijzingRelatieThesauri2['max'])) {
                $this->addUsingAlias(GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_THESAURI_2, $verwijzingRelatieThesauri2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHeaderRelatieBestandPeer::VERWIJZING_RELATIE_THESAURI_2, $verwijzingRelatieThesauri2, $comparison);
    }

    /**
     * Filter the query on the verwijzing_identificierende_rubriek_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVerwijzingIdentificierendeRubriek2('fooValue');   // WHERE verwijzing_identificierende_rubriek_2 = 'fooValue'
     * $query->filterByVerwijzingIdentificierendeRubriek2('%fooValue%'); // WHERE verwijzing_identificierende_rubriek_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verwijzingIdentificierendeRubriek2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHeaderRelatieBestandQuery The current query, for fluid interface
     */
    public function filterByVerwijzingIdentificierendeRubriek2($verwijzingIdentificierendeRubriek2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verwijzingIdentificierendeRubriek2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $verwijzingIdentificierendeRubriek2)) {
                $verwijzingIdentificierendeRubriek2 = str_replace('*', '%', $verwijzingIdentificierendeRubriek2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHeaderRelatieBestandPeer::VERWIJZING_IDENTIFICIERENDE_RUBRIEK_2, $verwijzingIdentificierendeRubriek2, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsHeaderRelatieBestand $gsHeaderRelatieBestand Object to remove from the list of results
     *
     * @return GsHeaderRelatieBestandQuery The current query, for fluid interface
     */
    public function prune($gsHeaderRelatieBestand = null)
    {
        if ($gsHeaderRelatieBestand) {
            $this->addUsingAlias(GsHeaderRelatieBestandPeer::RELATIE_SOORT_NUMMER, $gsHeaderRelatieBestand->getRelatieSoortNummer(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
