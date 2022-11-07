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
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsHistorischBestandAddOn;
use PharmaIntelligence\GstandaardBundle\Model\GsHistorischBestandAddOnPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsHistorischBestandAddOnQuery;

/**
 * @method GsHistorischBestandAddOnQuery orderByZindexNummer($order = Criteria::ASC) Order by the zindex_nummer column
 * @method GsHistorischBestandAddOnQuery orderByArtikelOmschrijving($order = Criteria::ASC) Order by the artikel_omschrijving column
 * @method GsHistorischBestandAddOnQuery orderByInkoopHoeveelheid($order = Criteria::ASC) Order by the inkoop_hoeveelheid column
 * @method GsHistorischBestandAddOnQuery orderByInkoopEenheid($order = Criteria::ASC) Order by the inkoop_eenheid column
 * @method GsHistorischBestandAddOnQuery orderByMaximumPrijs($order = Criteria::ASC) Order by the maximum_prijs column
 * @method GsHistorischBestandAddOnQuery orderBySoortProduct($order = Criteria::ASC) Order by the soort_product column
 * @method GsHistorischBestandAddOnQuery orderByIndicatieId($order = Criteria::ASC) Order by the indicatie_id column
 * @method GsHistorischBestandAddOnQuery orderBySoortIndicatie($order = Criteria::ASC) Order by the soort_indicatie column
 * @method GsHistorischBestandAddOnQuery orderByDuidingId($order = Criteria::ASC) Order by the duiding_id column
 * @method GsHistorischBestandAddOnQuery orderByAanspraakStatus($order = Criteria::ASC) Order by the aanspraak_status column
 * @method GsHistorischBestandAddOnQuery orderByStartDatum($order = Criteria::ASC) Order by the start_datum column
 * @method GsHistorischBestandAddOnQuery orderByEindDatum($order = Criteria::ASC) Order by the eind_datum column
 *
 * @method GsHistorischBestandAddOnQuery groupByZindexNummer() Group by the zindex_nummer column
 * @method GsHistorischBestandAddOnQuery groupByArtikelOmschrijving() Group by the artikel_omschrijving column
 * @method GsHistorischBestandAddOnQuery groupByInkoopHoeveelheid() Group by the inkoop_hoeveelheid column
 * @method GsHistorischBestandAddOnQuery groupByInkoopEenheid() Group by the inkoop_eenheid column
 * @method GsHistorischBestandAddOnQuery groupByMaximumPrijs() Group by the maximum_prijs column
 * @method GsHistorischBestandAddOnQuery groupBySoortProduct() Group by the soort_product column
 * @method GsHistorischBestandAddOnQuery groupByIndicatieId() Group by the indicatie_id column
 * @method GsHistorischBestandAddOnQuery groupBySoortIndicatie() Group by the soort_indicatie column
 * @method GsHistorischBestandAddOnQuery groupByDuidingId() Group by the duiding_id column
 * @method GsHistorischBestandAddOnQuery groupByAanspraakStatus() Group by the aanspraak_status column
 * @method GsHistorischBestandAddOnQuery groupByStartDatum() Group by the start_datum column
 * @method GsHistorischBestandAddOnQuery groupByEindDatum() Group by the eind_datum column
 *
 * @method GsHistorischBestandAddOnQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsHistorischBestandAddOnQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsHistorischBestandAddOnQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsHistorischBestandAddOnQuery leftJoinGsArtikelen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelen relation
 * @method GsHistorischBestandAddOnQuery rightJoinGsArtikelen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelen relation
 * @method GsHistorischBestandAddOnQuery innerJoinGsArtikelen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelen relation
 *
 * @method GsHistorischBestandAddOnQuery leftJoinGsArtikelEigenschappen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelEigenschappen relation
 * @method GsHistorischBestandAddOnQuery rightJoinGsArtikelEigenschappen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelEigenschappen relation
 * @method GsHistorischBestandAddOnQuery innerJoinGsArtikelEigenschappen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelEigenschappen relation
 *
 * @method GsHistorischBestandAddOn findOne(PropelPDO $con = null) Return the first GsHistorischBestandAddOn matching the query
 * @method GsHistorischBestandAddOn findOneOrCreate(PropelPDO $con = null) Return the first GsHistorischBestandAddOn matching the query, or a new GsHistorischBestandAddOn object populated from the query conditions when no match is found
 *
 * @method GsHistorischBestandAddOn findOneByZindexNummer(int $zindex_nummer) Return the first GsHistorischBestandAddOn filtered by the zindex_nummer column
 * @method GsHistorischBestandAddOn findOneByArtikelOmschrijving(string $artikel_omschrijving) Return the first GsHistorischBestandAddOn filtered by the artikel_omschrijving column
 * @method GsHistorischBestandAddOn findOneByInkoopHoeveelheid(string $inkoop_hoeveelheid) Return the first GsHistorischBestandAddOn filtered by the inkoop_hoeveelheid column
 * @method GsHistorischBestandAddOn findOneByInkoopEenheid(string $inkoop_eenheid) Return the first GsHistorischBestandAddOn filtered by the inkoop_eenheid column
 * @method GsHistorischBestandAddOn findOneByMaximumPrijs(string $maximum_prijs) Return the first GsHistorischBestandAddOn filtered by the maximum_prijs column
 * @method GsHistorischBestandAddOn findOneBySoortProduct(int $soort_product) Return the first GsHistorischBestandAddOn filtered by the soort_product column
 * @method GsHistorischBestandAddOn findOneByIndicatieId(int $indicatie_id) Return the first GsHistorischBestandAddOn filtered by the indicatie_id column
 * @method GsHistorischBestandAddOn findOneBySoortIndicatie(int $soort_indicatie) Return the first GsHistorischBestandAddOn filtered by the soort_indicatie column
 * @method GsHistorischBestandAddOn findOneByDuidingId(int $duiding_id) Return the first GsHistorischBestandAddOn filtered by the duiding_id column
 * @method GsHistorischBestandAddOn findOneByAanspraakStatus(string $aanspraak_status) Return the first GsHistorischBestandAddOn filtered by the aanspraak_status column
 * @method GsHistorischBestandAddOn findOneByStartDatum(string $start_datum) Return the first GsHistorischBestandAddOn filtered by the start_datum column
 * @method GsHistorischBestandAddOn findOneByEindDatum(string $eind_datum) Return the first GsHistorischBestandAddOn filtered by the eind_datum column
 *
 * @method array findByZindexNummer(int $zindex_nummer) Return GsHistorischBestandAddOn objects filtered by the zindex_nummer column
 * @method array findByArtikelOmschrijving(string $artikel_omschrijving) Return GsHistorischBestandAddOn objects filtered by the artikel_omschrijving column
 * @method array findByInkoopHoeveelheid(string $inkoop_hoeveelheid) Return GsHistorischBestandAddOn objects filtered by the inkoop_hoeveelheid column
 * @method array findByInkoopEenheid(string $inkoop_eenheid) Return GsHistorischBestandAddOn objects filtered by the inkoop_eenheid column
 * @method array findByMaximumPrijs(string $maximum_prijs) Return GsHistorischBestandAddOn objects filtered by the maximum_prijs column
 * @method array findBySoortProduct(int $soort_product) Return GsHistorischBestandAddOn objects filtered by the soort_product column
 * @method array findByIndicatieId(int $indicatie_id) Return GsHistorischBestandAddOn objects filtered by the indicatie_id column
 * @method array findBySoortIndicatie(int $soort_indicatie) Return GsHistorischBestandAddOn objects filtered by the soort_indicatie column
 * @method array findByDuidingId(int $duiding_id) Return GsHistorischBestandAddOn objects filtered by the duiding_id column
 * @method array findByAanspraakStatus(string $aanspraak_status) Return GsHistorischBestandAddOn objects filtered by the aanspraak_status column
 * @method array findByStartDatum(string $start_datum) Return GsHistorischBestandAddOn objects filtered by the start_datum column
 * @method array findByEindDatum(string $eind_datum) Return GsHistorischBestandAddOn objects filtered by the eind_datum column
 */
abstract class BaseGsHistorischBestandAddOnQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsHistorischBestandAddOnQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHistorischBestandAddOn';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsHistorischBestandAddOnQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsHistorischBestandAddOnQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsHistorischBestandAddOnQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsHistorischBestandAddOnQuery) {
            return $criteria;
        }
        $query = new GsHistorischBestandAddOnQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$zindex_nummer, $indicatie_id, $start_datum]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsHistorischBestandAddOn|GsHistorischBestandAddOn[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsHistorischBestandAddOnPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsHistorischBestandAddOnPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsHistorischBestandAddOn A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `zindex_nummer`, `artikel_omschrijving`, `inkoop_hoeveelheid`, `inkoop_eenheid`, `maximum_prijs`, `soort_product`, `indicatie_id`, `soort_indicatie`, `duiding_id`, `aanspraak_status`, `start_datum`, `eind_datum` FROM `gs_historisch_bestand_add_on` WHERE `zindex_nummer` = :p0 AND `indicatie_id` = :p1 AND `start_datum` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsHistorischBestandAddOn();
            $obj->hydrate($row);
            GsHistorischBestandAddOnPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return GsHistorischBestandAddOn|GsHistorischBestandAddOn[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsHistorischBestandAddOn[]|mixed the list of results, formatted by the current formatter
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
     * @return GsHistorischBestandAddOnQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsHistorischBestandAddOnPeer::INDICATIE_ID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsHistorischBestandAddOnPeer::START_DATUM, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsHistorischBestandAddOnQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsHistorischBestandAddOnPeer::INDICATIE_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsHistorischBestandAddOnPeer::START_DATUM, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
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
     * @see       filterByGsArtikelEigenschappen()
     *
     * @param     mixed $zindexNummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHistorischBestandAddOnQuery The current query, for fluid interface
     */
    public function filterByZindexNummer($zindexNummer = null, $comparison = null)
    {
        if (is_array($zindexNummer)) {
            $useMinMax = false;
            if (isset($zindexNummer['min'])) {
                $this->addUsingAlias(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, $zindexNummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zindexNummer['max'])) {
                $this->addUsingAlias(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, $zindexNummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, $zindexNummer, $comparison);
    }

    /**
     * Filter the query on the artikel_omschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByArtikelOmschrijving('fooValue');   // WHERE artikel_omschrijving = 'fooValue'
     * $query->filterByArtikelOmschrijving('%fooValue%'); // WHERE artikel_omschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artikelOmschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHistorischBestandAddOnQuery The current query, for fluid interface
     */
    public function filterByArtikelOmschrijving($artikelOmschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artikelOmschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $artikelOmschrijving)) {
                $artikelOmschrijving = str_replace('*', '%', $artikelOmschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHistorischBestandAddOnPeer::ARTIKEL_OMSCHRIJVING, $artikelOmschrijving, $comparison);
    }

    /**
     * Filter the query on the inkoop_hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByInkoopHoeveelheid(1234); // WHERE inkoop_hoeveelheid = 1234
     * $query->filterByInkoopHoeveelheid(array(12, 34)); // WHERE inkoop_hoeveelheid IN (12, 34)
     * $query->filterByInkoopHoeveelheid(array('min' => 12)); // WHERE inkoop_hoeveelheid >= 12
     * $query->filterByInkoopHoeveelheid(array('max' => 12)); // WHERE inkoop_hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $inkoopHoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHistorischBestandAddOnQuery The current query, for fluid interface
     */
    public function filterByInkoopHoeveelheid($inkoopHoeveelheid = null, $comparison = null)
    {
        if (is_array($inkoopHoeveelheid)) {
            $useMinMax = false;
            if (isset($inkoopHoeveelheid['min'])) {
                $this->addUsingAlias(GsHistorischBestandAddOnPeer::INKOOP_HOEVEELHEID, $inkoopHoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inkoopHoeveelheid['max'])) {
                $this->addUsingAlias(GsHistorischBestandAddOnPeer::INKOOP_HOEVEELHEID, $inkoopHoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHistorischBestandAddOnPeer::INKOOP_HOEVEELHEID, $inkoopHoeveelheid, $comparison);
    }

    /**
     * Filter the query on the inkoop_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByInkoopEenheid('fooValue');   // WHERE inkoop_eenheid = 'fooValue'
     * $query->filterByInkoopEenheid('%fooValue%'); // WHERE inkoop_eenheid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inkoopEenheid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHistorischBestandAddOnQuery The current query, for fluid interface
     */
    public function filterByInkoopEenheid($inkoopEenheid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inkoopEenheid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $inkoopEenheid)) {
                $inkoopEenheid = str_replace('*', '%', $inkoopEenheid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHistorischBestandAddOnPeer::INKOOP_EENHEID, $inkoopEenheid, $comparison);
    }

    /**
     * Filter the query on the maximum_prijs column
     *
     * Example usage:
     * <code>
     * $query->filterByMaximumPrijs(1234); // WHERE maximum_prijs = 1234
     * $query->filterByMaximumPrijs(array(12, 34)); // WHERE maximum_prijs IN (12, 34)
     * $query->filterByMaximumPrijs(array('min' => 12)); // WHERE maximum_prijs >= 12
     * $query->filterByMaximumPrijs(array('max' => 12)); // WHERE maximum_prijs <= 12
     * </code>
     *
     * @param     mixed $maximumPrijs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHistorischBestandAddOnQuery The current query, for fluid interface
     */
    public function filterByMaximumPrijs($maximumPrijs = null, $comparison = null)
    {
        if (is_array($maximumPrijs)) {
            $useMinMax = false;
            if (isset($maximumPrijs['min'])) {
                $this->addUsingAlias(GsHistorischBestandAddOnPeer::MAXIMUM_PRIJS, $maximumPrijs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maximumPrijs['max'])) {
                $this->addUsingAlias(GsHistorischBestandAddOnPeer::MAXIMUM_PRIJS, $maximumPrijs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHistorischBestandAddOnPeer::MAXIMUM_PRIJS, $maximumPrijs, $comparison);
    }

    /**
     * Filter the query on the soort_product column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortProduct(1234); // WHERE soort_product = 1234
     * $query->filterBySoortProduct(array(12, 34)); // WHERE soort_product IN (12, 34)
     * $query->filterBySoortProduct(array('min' => 12)); // WHERE soort_product >= 12
     * $query->filterBySoortProduct(array('max' => 12)); // WHERE soort_product <= 12
     * </code>
     *
     * @param     mixed $soortProduct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHistorischBestandAddOnQuery The current query, for fluid interface
     */
    public function filterBySoortProduct($soortProduct = null, $comparison = null)
    {
        if (is_array($soortProduct)) {
            $useMinMax = false;
            if (isset($soortProduct['min'])) {
                $this->addUsingAlias(GsHistorischBestandAddOnPeer::SOORT_PRODUCT, $soortProduct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortProduct['max'])) {
                $this->addUsingAlias(GsHistorischBestandAddOnPeer::SOORT_PRODUCT, $soortProduct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHistorischBestandAddOnPeer::SOORT_PRODUCT, $soortProduct, $comparison);
    }

    /**
     * Filter the query on the indicatie_id column
     *
     * Example usage:
     * <code>
     * $query->filterByIndicatieId(1234); // WHERE indicatie_id = 1234
     * $query->filterByIndicatieId(array(12, 34)); // WHERE indicatie_id IN (12, 34)
     * $query->filterByIndicatieId(array('min' => 12)); // WHERE indicatie_id >= 12
     * $query->filterByIndicatieId(array('max' => 12)); // WHERE indicatie_id <= 12
     * </code>
     *
     * @param     mixed $indicatieId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHistorischBestandAddOnQuery The current query, for fluid interface
     */
    public function filterByIndicatieId($indicatieId = null, $comparison = null)
    {
        if (is_array($indicatieId)) {
            $useMinMax = false;
            if (isset($indicatieId['min'])) {
                $this->addUsingAlias(GsHistorischBestandAddOnPeer::INDICATIE_ID, $indicatieId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indicatieId['max'])) {
                $this->addUsingAlias(GsHistorischBestandAddOnPeer::INDICATIE_ID, $indicatieId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHistorischBestandAddOnPeer::INDICATIE_ID, $indicatieId, $comparison);
    }

    /**
     * Filter the query on the soort_indicatie column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortIndicatie(1234); // WHERE soort_indicatie = 1234
     * $query->filterBySoortIndicatie(array(12, 34)); // WHERE soort_indicatie IN (12, 34)
     * $query->filterBySoortIndicatie(array('min' => 12)); // WHERE soort_indicatie >= 12
     * $query->filterBySoortIndicatie(array('max' => 12)); // WHERE soort_indicatie <= 12
     * </code>
     *
     * @param     mixed $soortIndicatie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHistorischBestandAddOnQuery The current query, for fluid interface
     */
    public function filterBySoortIndicatie($soortIndicatie = null, $comparison = null)
    {
        if (is_array($soortIndicatie)) {
            $useMinMax = false;
            if (isset($soortIndicatie['min'])) {
                $this->addUsingAlias(GsHistorischBestandAddOnPeer::SOORT_INDICATIE, $soortIndicatie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortIndicatie['max'])) {
                $this->addUsingAlias(GsHistorischBestandAddOnPeer::SOORT_INDICATIE, $soortIndicatie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHistorischBestandAddOnPeer::SOORT_INDICATIE, $soortIndicatie, $comparison);
    }

    /**
     * Filter the query on the duiding_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDuidingId(1234); // WHERE duiding_id = 1234
     * $query->filterByDuidingId(array(12, 34)); // WHERE duiding_id IN (12, 34)
     * $query->filterByDuidingId(array('min' => 12)); // WHERE duiding_id >= 12
     * $query->filterByDuidingId(array('max' => 12)); // WHERE duiding_id <= 12
     * </code>
     *
     * @param     mixed $duidingId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHistorischBestandAddOnQuery The current query, for fluid interface
     */
    public function filterByDuidingId($duidingId = null, $comparison = null)
    {
        if (is_array($duidingId)) {
            $useMinMax = false;
            if (isset($duidingId['min'])) {
                $this->addUsingAlias(GsHistorischBestandAddOnPeer::DUIDING_ID, $duidingId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($duidingId['max'])) {
                $this->addUsingAlias(GsHistorischBestandAddOnPeer::DUIDING_ID, $duidingId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHistorischBestandAddOnPeer::DUIDING_ID, $duidingId, $comparison);
    }

    /**
     * Filter the query on the aanspraak_status column
     *
     * Example usage:
     * <code>
     * $query->filterByAanspraakStatus('fooValue');   // WHERE aanspraak_status = 'fooValue'
     * $query->filterByAanspraakStatus('%fooValue%'); // WHERE aanspraak_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aanspraakStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHistorischBestandAddOnQuery The current query, for fluid interface
     */
    public function filterByAanspraakStatus($aanspraakStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aanspraakStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aanspraakStatus)) {
                $aanspraakStatus = str_replace('*', '%', $aanspraakStatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsHistorischBestandAddOnPeer::AANSPRAAK_STATUS, $aanspraakStatus, $comparison);
    }

    /**
     * Filter the query on the start_datum column
     *
     * Example usage:
     * <code>
     * $query->filterByStartDatum('2011-03-14'); // WHERE start_datum = '2011-03-14'
     * $query->filterByStartDatum('now'); // WHERE start_datum = '2011-03-14'
     * $query->filterByStartDatum(array('max' => 'yesterday')); // WHERE start_datum < '2011-03-13'
     * </code>
     *
     * @param     mixed $startDatum The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHistorischBestandAddOnQuery The current query, for fluid interface
     */
    public function filterByStartDatum($startDatum = null, $comparison = null)
    {
        if (is_array($startDatum)) {
            $useMinMax = false;
            if (isset($startDatum['min'])) {
                $this->addUsingAlias(GsHistorischBestandAddOnPeer::START_DATUM, $startDatum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($startDatum['max'])) {
                $this->addUsingAlias(GsHistorischBestandAddOnPeer::START_DATUM, $startDatum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHistorischBestandAddOnPeer::START_DATUM, $startDatum, $comparison);
    }

    /**
     * Filter the query on the eind_datum column
     *
     * Example usage:
     * <code>
     * $query->filterByEindDatum('2011-03-14'); // WHERE eind_datum = '2011-03-14'
     * $query->filterByEindDatum('now'); // WHERE eind_datum = '2011-03-14'
     * $query->filterByEindDatum(array('max' => 'yesterday')); // WHERE eind_datum < '2011-03-13'
     * </code>
     *
     * @param     mixed $eindDatum The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsHistorischBestandAddOnQuery The current query, for fluid interface
     */
    public function filterByEindDatum($eindDatum = null, $comparison = null)
    {
        if (is_array($eindDatum)) {
            $useMinMax = false;
            if (isset($eindDatum['min'])) {
                $this->addUsingAlias(GsHistorischBestandAddOnPeer::EIND_DATUM, $eindDatum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eindDatum['max'])) {
                $this->addUsingAlias(GsHistorischBestandAddOnPeer::EIND_DATUM, $eindDatum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsHistorischBestandAddOnPeer::EIND_DATUM, $eindDatum, $comparison);
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHistorischBestandAddOnQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelen($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, $gsArtikelen->getZinummer(), $comparison);
        } elseif ($gsArtikelen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, $gsArtikelen->toKeyValue('PrimaryKey', 'Zinummer'), $comparison);
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
     * @return GsHistorischBestandAddOnQuery The current query, for fluid interface
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
     * Filter the query by a related GsArtikelEigenschappen object
     *
     * @param   GsArtikelEigenschappen|PropelObjectCollection $gsArtikelEigenschappen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsHistorischBestandAddOnQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelEigenschappen($gsArtikelEigenschappen, $comparison = null)
    {
        if ($gsArtikelEigenschappen instanceof GsArtikelEigenschappen) {
            return $this
                ->addUsingAlias(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, $gsArtikelEigenschappen->getZindexNummer(), $comparison);
        } elseif ($gsArtikelEigenschappen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER, $gsArtikelEigenschappen->toKeyValue('PrimaryKey', 'ZindexNummer'), $comparison);
        } else {
            throw new PropelException('filterByGsArtikelEigenschappen() only accepts arguments of type GsArtikelEigenschappen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsArtikelEigenschappen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsHistorischBestandAddOnQuery The current query, for fluid interface
     */
    public function joinGsArtikelEigenschappen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsArtikelEigenschappen');

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
            $this->addJoinObject($join, 'GsArtikelEigenschappen');
        }

        return $this;
    }

    /**
     * Use the GsArtikelEigenschappen relation GsArtikelEigenschappen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery A secondary query class using the current class as primary query
     */
    public function useGsArtikelEigenschappenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsArtikelEigenschappen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelEigenschappen', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsHistorischBestandAddOn $gsHistorischBestandAddOn Object to remove from the list of results
     *
     * @return GsHistorischBestandAddOnQuery The current query, for fluid interface
     */
    public function prune($gsHistorischBestandAddOn = null)
    {
        if ($gsHistorischBestandAddOn) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsHistorischBestandAddOnPeer::ZINDEX_NUMMER), $gsHistorischBestandAddOn->getZindexNummer(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsHistorischBestandAddOnPeer::INDICATIE_ID), $gsHistorischBestandAddOn->getIndicatieId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsHistorischBestandAddOnPeer::START_DATUM), $gsHistorischBestandAddOn->getStartDatum(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
