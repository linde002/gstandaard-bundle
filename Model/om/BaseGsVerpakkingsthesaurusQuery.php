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
use PharmaIntelligence\GstandaardBundle\Model\GsVerpakkingsthesaurus;
use PharmaIntelligence\GstandaardBundle\Model\GsVerpakkingsthesaurusPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsVerpakkingsthesaurusQuery;

/**
 * @method GsVerpakkingsthesaurusQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsVerpakkingsthesaurusQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsVerpakkingsthesaurusQuery orderByIdentificatieNummer($order = Criteria::ASC) Order by the identificatie_nummer column
 * @method GsVerpakkingsthesaurusQuery orderByAantalHoofdverpakkingen($order = Criteria::ASC) Order by the aantal_hoofdverpakkingen column
 * @method GsVerpakkingsthesaurusQuery orderByHoofdverpakkingOmschrijvingKode($order = Criteria::ASC) Order by the hoofdverpakking_omschrijving_kode column
 * @method GsVerpakkingsthesaurusQuery orderByAantalDeelverpakkingen($order = Criteria::ASC) Order by the aantal_deelverpakkingen column
 * @method GsVerpakkingsthesaurusQuery orderByDeelverpakkingOmschrijvingKode($order = Criteria::ASC) Order by the deelverpakking_omschrijving_kode column
 * @method GsVerpakkingsthesaurusQuery orderByHoeveelheidPerDeelverpakking($order = Criteria::ASC) Order by the hoeveelheid_per_deelverpakking column
 * @method GsVerpakkingsthesaurusQuery orderByBasiseenheidVerpakking($order = Criteria::ASC) Order by the basiseenheid_verpakking column
 * @method GsVerpakkingsthesaurusQuery orderById($order = Criteria::ASC) Order by the id column
 *
 * @method GsVerpakkingsthesaurusQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsVerpakkingsthesaurusQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsVerpakkingsthesaurusQuery groupByIdentificatieNummer() Group by the identificatie_nummer column
 * @method GsVerpakkingsthesaurusQuery groupByAantalHoofdverpakkingen() Group by the aantal_hoofdverpakkingen column
 * @method GsVerpakkingsthesaurusQuery groupByHoofdverpakkingOmschrijvingKode() Group by the hoofdverpakking_omschrijving_kode column
 * @method GsVerpakkingsthesaurusQuery groupByAantalDeelverpakkingen() Group by the aantal_deelverpakkingen column
 * @method GsVerpakkingsthesaurusQuery groupByDeelverpakkingOmschrijvingKode() Group by the deelverpakking_omschrijving_kode column
 * @method GsVerpakkingsthesaurusQuery groupByHoeveelheidPerDeelverpakking() Group by the hoeveelheid_per_deelverpakking column
 * @method GsVerpakkingsthesaurusQuery groupByBasiseenheidVerpakking() Group by the basiseenheid_verpakking column
 * @method GsVerpakkingsthesaurusQuery groupById() Group by the id column
 *
 * @method GsVerpakkingsthesaurusQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsVerpakkingsthesaurusQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsVerpakkingsthesaurusQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsVerpakkingsthesaurus findOne(PropelPDO $con = null) Return the first GsVerpakkingsthesaurus matching the query
 * @method GsVerpakkingsthesaurus findOneOrCreate(PropelPDO $con = null) Return the first GsVerpakkingsthesaurus matching the query, or a new GsVerpakkingsthesaurus object populated from the query conditions when no match is found
 *
 * @method GsVerpakkingsthesaurus findOneByBestandnummer(int $bestandnummer) Return the first GsVerpakkingsthesaurus filtered by the bestandnummer column
 * @method GsVerpakkingsthesaurus findOneByMutatiekode(int $mutatiekode) Return the first GsVerpakkingsthesaurus filtered by the mutatiekode column
 * @method GsVerpakkingsthesaurus findOneByIdentificatieNummer(string $identificatie_nummer) Return the first GsVerpakkingsthesaurus filtered by the identificatie_nummer column
 * @method GsVerpakkingsthesaurus findOneByAantalHoofdverpakkingen(int $aantal_hoofdverpakkingen) Return the first GsVerpakkingsthesaurus filtered by the aantal_hoofdverpakkingen column
 * @method GsVerpakkingsthesaurus findOneByHoofdverpakkingOmschrijvingKode(int $hoofdverpakking_omschrijving_kode) Return the first GsVerpakkingsthesaurus filtered by the hoofdverpakking_omschrijving_kode column
 * @method GsVerpakkingsthesaurus findOneByAantalDeelverpakkingen(int $aantal_deelverpakkingen) Return the first GsVerpakkingsthesaurus filtered by the aantal_deelverpakkingen column
 * @method GsVerpakkingsthesaurus findOneByDeelverpakkingOmschrijvingKode(int $deelverpakking_omschrijving_kode) Return the first GsVerpakkingsthesaurus filtered by the deelverpakking_omschrijving_kode column
 * @method GsVerpakkingsthesaurus findOneByHoeveelheidPerDeelverpakking(string $hoeveelheid_per_deelverpakking) Return the first GsVerpakkingsthesaurus filtered by the hoeveelheid_per_deelverpakking column
 * @method GsVerpakkingsthesaurus findOneByBasiseenheidVerpakking(string $basiseenheid_verpakking) Return the first GsVerpakkingsthesaurus filtered by the basiseenheid_verpakking column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsVerpakkingsthesaurus objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsVerpakkingsthesaurus objects filtered by the mutatiekode column
 * @method array findByIdentificatieNummer(string $identificatie_nummer) Return GsVerpakkingsthesaurus objects filtered by the identificatie_nummer column
 * @method array findByAantalHoofdverpakkingen(int $aantal_hoofdverpakkingen) Return GsVerpakkingsthesaurus objects filtered by the aantal_hoofdverpakkingen column
 * @method array findByHoofdverpakkingOmschrijvingKode(int $hoofdverpakking_omschrijving_kode) Return GsVerpakkingsthesaurus objects filtered by the hoofdverpakking_omschrijving_kode column
 * @method array findByAantalDeelverpakkingen(int $aantal_deelverpakkingen) Return GsVerpakkingsthesaurus objects filtered by the aantal_deelverpakkingen column
 * @method array findByDeelverpakkingOmschrijvingKode(int $deelverpakking_omschrijving_kode) Return GsVerpakkingsthesaurus objects filtered by the deelverpakking_omschrijving_kode column
 * @method array findByHoeveelheidPerDeelverpakking(string $hoeveelheid_per_deelverpakking) Return GsVerpakkingsthesaurus objects filtered by the hoeveelheid_per_deelverpakking column
 * @method array findByBasiseenheidVerpakking(string $basiseenheid_verpakking) Return GsVerpakkingsthesaurus objects filtered by the basiseenheid_verpakking column
 * @method array findById(int $id) Return GsVerpakkingsthesaurus objects filtered by the id column
 */
abstract class BaseGsVerpakkingsthesaurusQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsVerpakkingsthesaurusQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVerpakkingsthesaurus';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsVerpakkingsthesaurusQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsVerpakkingsthesaurusQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsVerpakkingsthesaurusQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsVerpakkingsthesaurusQuery) {
            return $criteria;
        }
        $query = new GsVerpakkingsthesaurusQuery(null, null, $modelAlias);

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
     * @return   GsVerpakkingsthesaurus|GsVerpakkingsthesaurus[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsVerpakkingsthesaurusPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsVerpakkingsthesaurusPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsVerpakkingsthesaurus A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
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
     * @return                 GsVerpakkingsthesaurus A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `identificatie_nummer`, `aantal_hoofdverpakkingen`, `hoofdverpakking_omschrijving_kode`, `aantal_deelverpakkingen`, `deelverpakking_omschrijving_kode`, `hoeveelheid_per_deelverpakking`, `basiseenheid_verpakking`, `id` FROM `gs_verpakkingsthesaurus` WHERE `id` = :p0';
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
            $obj = new GsVerpakkingsthesaurus();
            $obj->hydrate($row);
            GsVerpakkingsthesaurusPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsVerpakkingsthesaurus|GsVerpakkingsthesaurus[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsVerpakkingsthesaurus[]|mixed the list of results, formatted by the current formatter
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
     * @return GsVerpakkingsthesaurusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsVerpakkingsthesaurusPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsVerpakkingsthesaurusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsVerpakkingsthesaurusPeer::ID, $keys, Criteria::IN);
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
     * @return GsVerpakkingsthesaurusQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsVerpakkingsthesaurusPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsVerpakkingsthesaurusPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerpakkingsthesaurusPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsVerpakkingsthesaurusQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsVerpakkingsthesaurusPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsVerpakkingsthesaurusPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerpakkingsthesaurusPeer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @return GsVerpakkingsthesaurusQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GsVerpakkingsthesaurusPeer::IDENTIFICATIE_NUMMER, $identificatieNummer, $comparison);
    }

    /**
     * Filter the query on the aantal_hoofdverpakkingen column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalHoofdverpakkingen(1234); // WHERE aantal_hoofdverpakkingen = 1234
     * $query->filterByAantalHoofdverpakkingen(array(12, 34)); // WHERE aantal_hoofdverpakkingen IN (12, 34)
     * $query->filterByAantalHoofdverpakkingen(array('min' => 12)); // WHERE aantal_hoofdverpakkingen >= 12
     * $query->filterByAantalHoofdverpakkingen(array('max' => 12)); // WHERE aantal_hoofdverpakkingen <= 12
     * </code>
     *
     * @param     mixed $aantalHoofdverpakkingen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerpakkingsthesaurusQuery The current query, for fluid interface
     */
    public function filterByAantalHoofdverpakkingen($aantalHoofdverpakkingen = null, $comparison = null)
    {
        if (is_array($aantalHoofdverpakkingen)) {
            $useMinMax = false;
            if (isset($aantalHoofdverpakkingen['min'])) {
                $this->addUsingAlias(GsVerpakkingsthesaurusPeer::AANTAL_HOOFDVERPAKKINGEN, $aantalHoofdverpakkingen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalHoofdverpakkingen['max'])) {
                $this->addUsingAlias(GsVerpakkingsthesaurusPeer::AANTAL_HOOFDVERPAKKINGEN, $aantalHoofdverpakkingen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerpakkingsthesaurusPeer::AANTAL_HOOFDVERPAKKINGEN, $aantalHoofdverpakkingen, $comparison);
    }

    /**
     * Filter the query on the hoofdverpakking_omschrijving_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByHoofdverpakkingOmschrijvingKode(1234); // WHERE hoofdverpakking_omschrijving_kode = 1234
     * $query->filterByHoofdverpakkingOmschrijvingKode(array(12, 34)); // WHERE hoofdverpakking_omschrijving_kode IN (12, 34)
     * $query->filterByHoofdverpakkingOmschrijvingKode(array('min' => 12)); // WHERE hoofdverpakking_omschrijving_kode >= 12
     * $query->filterByHoofdverpakkingOmschrijvingKode(array('max' => 12)); // WHERE hoofdverpakking_omschrijving_kode <= 12
     * </code>
     *
     * @param     mixed $hoofdverpakkingOmschrijvingKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerpakkingsthesaurusQuery The current query, for fluid interface
     */
    public function filterByHoofdverpakkingOmschrijvingKode($hoofdverpakkingOmschrijvingKode = null, $comparison = null)
    {
        if (is_array($hoofdverpakkingOmschrijvingKode)) {
            $useMinMax = false;
            if (isset($hoofdverpakkingOmschrijvingKode['min'])) {
                $this->addUsingAlias(GsVerpakkingsthesaurusPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, $hoofdverpakkingOmschrijvingKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hoofdverpakkingOmschrijvingKode['max'])) {
                $this->addUsingAlias(GsVerpakkingsthesaurusPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, $hoofdverpakkingOmschrijvingKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerpakkingsthesaurusPeer::HOOFDVERPAKKING_OMSCHRIJVING_KODE, $hoofdverpakkingOmschrijvingKode, $comparison);
    }

    /**
     * Filter the query on the aantal_deelverpakkingen column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalDeelverpakkingen(1234); // WHERE aantal_deelverpakkingen = 1234
     * $query->filterByAantalDeelverpakkingen(array(12, 34)); // WHERE aantal_deelverpakkingen IN (12, 34)
     * $query->filterByAantalDeelverpakkingen(array('min' => 12)); // WHERE aantal_deelverpakkingen >= 12
     * $query->filterByAantalDeelverpakkingen(array('max' => 12)); // WHERE aantal_deelverpakkingen <= 12
     * </code>
     *
     * @param     mixed $aantalDeelverpakkingen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerpakkingsthesaurusQuery The current query, for fluid interface
     */
    public function filterByAantalDeelverpakkingen($aantalDeelverpakkingen = null, $comparison = null)
    {
        if (is_array($aantalDeelverpakkingen)) {
            $useMinMax = false;
            if (isset($aantalDeelverpakkingen['min'])) {
                $this->addUsingAlias(GsVerpakkingsthesaurusPeer::AANTAL_DEELVERPAKKINGEN, $aantalDeelverpakkingen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalDeelverpakkingen['max'])) {
                $this->addUsingAlias(GsVerpakkingsthesaurusPeer::AANTAL_DEELVERPAKKINGEN, $aantalDeelverpakkingen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerpakkingsthesaurusPeer::AANTAL_DEELVERPAKKINGEN, $aantalDeelverpakkingen, $comparison);
    }

    /**
     * Filter the query on the deelverpakking_omschrijving_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByDeelverpakkingOmschrijvingKode(1234); // WHERE deelverpakking_omschrijving_kode = 1234
     * $query->filterByDeelverpakkingOmschrijvingKode(array(12, 34)); // WHERE deelverpakking_omschrijving_kode IN (12, 34)
     * $query->filterByDeelverpakkingOmschrijvingKode(array('min' => 12)); // WHERE deelverpakking_omschrijving_kode >= 12
     * $query->filterByDeelverpakkingOmschrijvingKode(array('max' => 12)); // WHERE deelverpakking_omschrijving_kode <= 12
     * </code>
     *
     * @param     mixed $deelverpakkingOmschrijvingKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerpakkingsthesaurusQuery The current query, for fluid interface
     */
    public function filterByDeelverpakkingOmschrijvingKode($deelverpakkingOmschrijvingKode = null, $comparison = null)
    {
        if (is_array($deelverpakkingOmschrijvingKode)) {
            $useMinMax = false;
            if (isset($deelverpakkingOmschrijvingKode['min'])) {
                $this->addUsingAlias(GsVerpakkingsthesaurusPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, $deelverpakkingOmschrijvingKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deelverpakkingOmschrijvingKode['max'])) {
                $this->addUsingAlias(GsVerpakkingsthesaurusPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, $deelverpakkingOmschrijvingKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerpakkingsthesaurusPeer::DEELVERPAKKING_OMSCHRIJVING_KODE, $deelverpakkingOmschrijvingKode, $comparison);
    }

    /**
     * Filter the query on the hoeveelheid_per_deelverpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByHoeveelheidPerDeelverpakking(1234); // WHERE hoeveelheid_per_deelverpakking = 1234
     * $query->filterByHoeveelheidPerDeelverpakking(array(12, 34)); // WHERE hoeveelheid_per_deelverpakking IN (12, 34)
     * $query->filterByHoeveelheidPerDeelverpakking(array('min' => 12)); // WHERE hoeveelheid_per_deelverpakking >= 12
     * $query->filterByHoeveelheidPerDeelverpakking(array('max' => 12)); // WHERE hoeveelheid_per_deelverpakking <= 12
     * </code>
     *
     * @param     mixed $hoeveelheidPerDeelverpakking The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerpakkingsthesaurusQuery The current query, for fluid interface
     */
    public function filterByHoeveelheidPerDeelverpakking($hoeveelheidPerDeelverpakking = null, $comparison = null)
    {
        if (is_array($hoeveelheidPerDeelverpakking)) {
            $useMinMax = false;
            if (isset($hoeveelheidPerDeelverpakking['min'])) {
                $this->addUsingAlias(GsVerpakkingsthesaurusPeer::HOEVEELHEID_PER_DEELVERPAKKING, $hoeveelheidPerDeelverpakking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hoeveelheidPerDeelverpakking['max'])) {
                $this->addUsingAlias(GsVerpakkingsthesaurusPeer::HOEVEELHEID_PER_DEELVERPAKKING, $hoeveelheidPerDeelverpakking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerpakkingsthesaurusPeer::HOEVEELHEID_PER_DEELVERPAKKING, $hoeveelheidPerDeelverpakking, $comparison);
    }

    /**
     * Filter the query on the basiseenheid_verpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByBasiseenheidVerpakking('fooValue');   // WHERE basiseenheid_verpakking = 'fooValue'
     * $query->filterByBasiseenheidVerpakking('%fooValue%'); // WHERE basiseenheid_verpakking LIKE '%fooValue%'
     * </code>
     *
     * @param     string $basiseenheidVerpakking The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerpakkingsthesaurusQuery The current query, for fluid interface
     */
    public function filterByBasiseenheidVerpakking($basiseenheidVerpakking = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($basiseenheidVerpakking)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $basiseenheidVerpakking)) {
                $basiseenheidVerpakking = str_replace('*', '%', $basiseenheidVerpakking);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsVerpakkingsthesaurusPeer::BASISEENHEID_VERPAKKING, $basiseenheidVerpakking, $comparison);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerpakkingsthesaurusQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(GsVerpakkingsthesaurusPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(GsVerpakkingsthesaurusPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerpakkingsthesaurusPeer::ID, $id, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsVerpakkingsthesaurus $gsVerpakkingsthesaurus Object to remove from the list of results
     *
     * @return GsVerpakkingsthesaurusQuery The current query, for fluid interface
     */
    public function prune($gsVerpakkingsthesaurus = null)
    {
        if ($gsVerpakkingsthesaurus) {
            $this->addUsingAlias(GsVerpakkingsthesaurusPeer::ID, $gsVerpakkingsthesaurus->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
