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
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodes;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcdddgegevens;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcdddgegevensPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcdddgegevensQuery;

/**
 * @method GsAtcdddgegevensQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsAtcdddgegevensQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsAtcdddgegevensQuery orderByAtccode($order = Criteria::ASC) Order by the atccode column
 * @method GsAtcdddgegevensQuery orderByAtcvolgnummer($order = Criteria::ASC) Order by the atcvolgnummer column
 * @method GsAtcdddgegevensQuery orderByAtcnederlandseOmschrijving($order = Criteria::ASC) Order by the atcnederlandse_omschrijving column
 * @method GsAtcdddgegevensQuery orderByAtcindicator($order = Criteria::ASC) Order by the atcindicator column
 * @method GsAtcdddgegevensQuery orderBySelectiekodeVoorDubbelmedicatie($order = Criteria::ASC) Order by the selectiekode_voor_dubbelmedicatie column
 * @method GsAtcdddgegevensQuery orderByAantalDddclusters($order = Criteria::ASC) Order by the aantal_dddclusters column
 * @method GsAtcdddgegevensQuery orderByDddaantal($order = Criteria::ASC) Order by the dddaantal column
 * @method GsAtcdddgegevensQuery orderByDddeenheid($order = Criteria::ASC) Order by the dddeenheid column
 * @method GsAtcdddgegevensQuery orderByDddtoedieningswegKode($order = Criteria::ASC) Order by the dddtoedieningsweg_kode column
 * @method GsAtcdddgegevensQuery orderByDddindicator($order = Criteria::ASC) Order by the dddindicator column
 * @method GsAtcdddgegevensQuery orderByDddstatusaanduiding($order = Criteria::ASC) Order by the dddstatusaanduiding column
 *
 * @method GsAtcdddgegevensQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsAtcdddgegevensQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsAtcdddgegevensQuery groupByAtccode() Group by the atccode column
 * @method GsAtcdddgegevensQuery groupByAtcvolgnummer() Group by the atcvolgnummer column
 * @method GsAtcdddgegevensQuery groupByAtcnederlandseOmschrijving() Group by the atcnederlandse_omschrijving column
 * @method GsAtcdddgegevensQuery groupByAtcindicator() Group by the atcindicator column
 * @method GsAtcdddgegevensQuery groupBySelectiekodeVoorDubbelmedicatie() Group by the selectiekode_voor_dubbelmedicatie column
 * @method GsAtcdddgegevensQuery groupByAantalDddclusters() Group by the aantal_dddclusters column
 * @method GsAtcdddgegevensQuery groupByDddaantal() Group by the dddaantal column
 * @method GsAtcdddgegevensQuery groupByDddeenheid() Group by the dddeenheid column
 * @method GsAtcdddgegevensQuery groupByDddtoedieningswegKode() Group by the dddtoedieningsweg_kode column
 * @method GsAtcdddgegevensQuery groupByDddindicator() Group by the dddindicator column
 * @method GsAtcdddgegevensQuery groupByDddstatusaanduiding() Group by the dddstatusaanduiding column
 *
 * @method GsAtcdddgegevensQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsAtcdddgegevensQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsAtcdddgegevensQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsAtcdddgegevensQuery leftJoinGsAtcCodes($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsAtcCodes relation
 * @method GsAtcdddgegevensQuery rightJoinGsAtcCodes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsAtcCodes relation
 * @method GsAtcdddgegevensQuery innerJoinGsAtcCodes($relationAlias = null) Adds a INNER JOIN clause to the query using the GsAtcCodes relation
 *
 * @method GsAtcdddgegevens findOne(PropelPDO $con = null) Return the first GsAtcdddgegevens matching the query
 * @method GsAtcdddgegevens findOneOrCreate(PropelPDO $con = null) Return the first GsAtcdddgegevens matching the query, or a new GsAtcdddgegevens object populated from the query conditions when no match is found
 *
 * @method GsAtcdddgegevens findOneByBestandnummer(int $bestandnummer) Return the first GsAtcdddgegevens filtered by the bestandnummer column
 * @method GsAtcdddgegevens findOneByMutatiekode(int $mutatiekode) Return the first GsAtcdddgegevens filtered by the mutatiekode column
 * @method GsAtcdddgegevens findOneByAtccode(string $atccode) Return the first GsAtcdddgegevens filtered by the atccode column
 * @method GsAtcdddgegevens findOneByAtcvolgnummer(int $atcvolgnummer) Return the first GsAtcdddgegevens filtered by the atcvolgnummer column
 * @method GsAtcdddgegevens findOneByAtcnederlandseOmschrijving(string $atcnederlandse_omschrijving) Return the first GsAtcdddgegevens filtered by the atcnederlandse_omschrijving column
 * @method GsAtcdddgegevens findOneByAtcindicator(string $atcindicator) Return the first GsAtcdddgegevens filtered by the atcindicator column
 * @method GsAtcdddgegevens findOneBySelectiekodeVoorDubbelmedicatie(string $selectiekode_voor_dubbelmedicatie) Return the first GsAtcdddgegevens filtered by the selectiekode_voor_dubbelmedicatie column
 * @method GsAtcdddgegevens findOneByAantalDddclusters(int $aantal_dddclusters) Return the first GsAtcdddgegevens filtered by the aantal_dddclusters column
 * @method GsAtcdddgegevens findOneByDddaantal(string $dddaantal) Return the first GsAtcdddgegevens filtered by the dddaantal column
 * @method GsAtcdddgegevens findOneByDddeenheid(string $dddeenheid) Return the first GsAtcdddgegevens filtered by the dddeenheid column
 * @method GsAtcdddgegevens findOneByDddtoedieningswegKode(int $dddtoedieningsweg_kode) Return the first GsAtcdddgegevens filtered by the dddtoedieningsweg_kode column
 * @method GsAtcdddgegevens findOneByDddindicator(string $dddindicator) Return the first GsAtcdddgegevens filtered by the dddindicator column
 * @method GsAtcdddgegevens findOneByDddstatusaanduiding(int $dddstatusaanduiding) Return the first GsAtcdddgegevens filtered by the dddstatusaanduiding column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsAtcdddgegevens objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsAtcdddgegevens objects filtered by the mutatiekode column
 * @method array findByAtccode(string $atccode) Return GsAtcdddgegevens objects filtered by the atccode column
 * @method array findByAtcvolgnummer(int $atcvolgnummer) Return GsAtcdddgegevens objects filtered by the atcvolgnummer column
 * @method array findByAtcnederlandseOmschrijving(string $atcnederlandse_omschrijving) Return GsAtcdddgegevens objects filtered by the atcnederlandse_omschrijving column
 * @method array findByAtcindicator(string $atcindicator) Return GsAtcdddgegevens objects filtered by the atcindicator column
 * @method array findBySelectiekodeVoorDubbelmedicatie(string $selectiekode_voor_dubbelmedicatie) Return GsAtcdddgegevens objects filtered by the selectiekode_voor_dubbelmedicatie column
 * @method array findByAantalDddclusters(int $aantal_dddclusters) Return GsAtcdddgegevens objects filtered by the aantal_dddclusters column
 * @method array findByDddaantal(string $dddaantal) Return GsAtcdddgegevens objects filtered by the dddaantal column
 * @method array findByDddeenheid(string $dddeenheid) Return GsAtcdddgegevens objects filtered by the dddeenheid column
 * @method array findByDddtoedieningswegKode(int $dddtoedieningsweg_kode) Return GsAtcdddgegevens objects filtered by the dddtoedieningsweg_kode column
 * @method array findByDddindicator(string $dddindicator) Return GsAtcdddgegevens objects filtered by the dddindicator column
 * @method array findByDddstatusaanduiding(int $dddstatusaanduiding) Return GsAtcdddgegevens objects filtered by the dddstatusaanduiding column
 */
abstract class BaseGsAtcdddgegevensQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsAtcdddgegevensQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAtcdddgegevens';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsAtcdddgegevensQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsAtcdddgegevensQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsAtcdddgegevensQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsAtcdddgegevensQuery) {
            return $criteria;
        }
        $query = new GsAtcdddgegevensQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$atccode, $atcvolgnummer]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsAtcdddgegevens|GsAtcdddgegevens[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsAtcdddgegevensPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsAtcdddgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsAtcdddgegevens A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `atccode`, `atcvolgnummer`, `atcnederlandse_omschrijving`, `atcindicator`, `selectiekode_voor_dubbelmedicatie`, `aantal_dddclusters`, `dddaantal`, `dddeenheid`, `dddtoedieningsweg_kode`, `dddindicator`, `dddstatusaanduiding` FROM `gs_atcdddgegevens` WHERE `atccode` = :p0 AND `atcvolgnummer` = :p1';
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
            $obj = new GsAtcdddgegevens();
            $obj->hydrate($row);
            GsAtcdddgegevensPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsAtcdddgegevens|GsAtcdddgegevens[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsAtcdddgegevens[]|mixed the list of results, formatted by the current formatter
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
     * @return GsAtcdddgegevensQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsAtcdddgegevensPeer::ATCCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsAtcdddgegevensPeer::ATCVOLGNUMMER, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsAtcdddgegevensQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsAtcdddgegevensPeer::ATCCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsAtcdddgegevensPeer::ATCVOLGNUMMER, $key[1], Criteria::EQUAL);
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
     * @return GsAtcdddgegevensQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsAtcdddgegevensPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsAtcdddgegevensPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAtcdddgegevensPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsAtcdddgegevensQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsAtcdddgegevensPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsAtcdddgegevensPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAtcdddgegevensPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the atccode column
     *
     * Example usage:
     * <code>
     * $query->filterByAtccode('fooValue');   // WHERE atccode = 'fooValue'
     * $query->filterByAtccode('%fooValue%'); // WHERE atccode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $atccode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcdddgegevensQuery The current query, for fluid interface
     */
    public function filterByAtccode($atccode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($atccode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $atccode)) {
                $atccode = str_replace('*', '%', $atccode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcdddgegevensPeer::ATCCODE, $atccode, $comparison);
    }

    /**
     * Filter the query on the atcvolgnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByAtcvolgnummer(1234); // WHERE atcvolgnummer = 1234
     * $query->filterByAtcvolgnummer(array(12, 34)); // WHERE atcvolgnummer IN (12, 34)
     * $query->filterByAtcvolgnummer(array('min' => 12)); // WHERE atcvolgnummer >= 12
     * $query->filterByAtcvolgnummer(array('max' => 12)); // WHERE atcvolgnummer <= 12
     * </code>
     *
     * @param     mixed $atcvolgnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcdddgegevensQuery The current query, for fluid interface
     */
    public function filterByAtcvolgnummer($atcvolgnummer = null, $comparison = null)
    {
        if (is_array($atcvolgnummer)) {
            $useMinMax = false;
            if (isset($atcvolgnummer['min'])) {
                $this->addUsingAlias(GsAtcdddgegevensPeer::ATCVOLGNUMMER, $atcvolgnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($atcvolgnummer['max'])) {
                $this->addUsingAlias(GsAtcdddgegevensPeer::ATCVOLGNUMMER, $atcvolgnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAtcdddgegevensPeer::ATCVOLGNUMMER, $atcvolgnummer, $comparison);
    }

    /**
     * Filter the query on the atcnederlandse_omschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByAtcnederlandseOmschrijving('fooValue');   // WHERE atcnederlandse_omschrijving = 'fooValue'
     * $query->filterByAtcnederlandseOmschrijving('%fooValue%'); // WHERE atcnederlandse_omschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $atcnederlandseOmschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcdddgegevensQuery The current query, for fluid interface
     */
    public function filterByAtcnederlandseOmschrijving($atcnederlandseOmschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($atcnederlandseOmschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $atcnederlandseOmschrijving)) {
                $atcnederlandseOmschrijving = str_replace('*', '%', $atcnederlandseOmschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcdddgegevensPeer::ATCNEDERLANDSE_OMSCHRIJVING, $atcnederlandseOmschrijving, $comparison);
    }

    /**
     * Filter the query on the atcindicator column
     *
     * Example usage:
     * <code>
     * $query->filterByAtcindicator('fooValue');   // WHERE atcindicator = 'fooValue'
     * $query->filterByAtcindicator('%fooValue%'); // WHERE atcindicator LIKE '%fooValue%'
     * </code>
     *
     * @param     string $atcindicator The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcdddgegevensQuery The current query, for fluid interface
     */
    public function filterByAtcindicator($atcindicator = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($atcindicator)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $atcindicator)) {
                $atcindicator = str_replace('*', '%', $atcindicator);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcdddgegevensPeer::ATCINDICATOR, $atcindicator, $comparison);
    }

    /**
     * Filter the query on the selectiekode_voor_dubbelmedicatie column
     *
     * Example usage:
     * <code>
     * $query->filterBySelectiekodeVoorDubbelmedicatie('fooValue');   // WHERE selectiekode_voor_dubbelmedicatie = 'fooValue'
     * $query->filterBySelectiekodeVoorDubbelmedicatie('%fooValue%'); // WHERE selectiekode_voor_dubbelmedicatie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $selectiekodeVoorDubbelmedicatie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcdddgegevensQuery The current query, for fluid interface
     */
    public function filterBySelectiekodeVoorDubbelmedicatie($selectiekodeVoorDubbelmedicatie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($selectiekodeVoorDubbelmedicatie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $selectiekodeVoorDubbelmedicatie)) {
                $selectiekodeVoorDubbelmedicatie = str_replace('*', '%', $selectiekodeVoorDubbelmedicatie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcdddgegevensPeer::SELECTIEKODE_VOOR_DUBBELMEDICATIE, $selectiekodeVoorDubbelmedicatie, $comparison);
    }

    /**
     * Filter the query on the aantal_dddclusters column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalDddclusters(1234); // WHERE aantal_dddclusters = 1234
     * $query->filterByAantalDddclusters(array(12, 34)); // WHERE aantal_dddclusters IN (12, 34)
     * $query->filterByAantalDddclusters(array('min' => 12)); // WHERE aantal_dddclusters >= 12
     * $query->filterByAantalDddclusters(array('max' => 12)); // WHERE aantal_dddclusters <= 12
     * </code>
     *
     * @param     mixed $aantalDddclusters The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcdddgegevensQuery The current query, for fluid interface
     */
    public function filterByAantalDddclusters($aantalDddclusters = null, $comparison = null)
    {
        if (is_array($aantalDddclusters)) {
            $useMinMax = false;
            if (isset($aantalDddclusters['min'])) {
                $this->addUsingAlias(GsAtcdddgegevensPeer::AANTAL_DDDCLUSTERS, $aantalDddclusters['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalDddclusters['max'])) {
                $this->addUsingAlias(GsAtcdddgegevensPeer::AANTAL_DDDCLUSTERS, $aantalDddclusters['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAtcdddgegevensPeer::AANTAL_DDDCLUSTERS, $aantalDddclusters, $comparison);
    }

    /**
     * Filter the query on the dddaantal column
     *
     * Example usage:
     * <code>
     * $query->filterByDddaantal(1234); // WHERE dddaantal = 1234
     * $query->filterByDddaantal(array(12, 34)); // WHERE dddaantal IN (12, 34)
     * $query->filterByDddaantal(array('min' => 12)); // WHERE dddaantal >= 12
     * $query->filterByDddaantal(array('max' => 12)); // WHERE dddaantal <= 12
     * </code>
     *
     * @param     mixed $dddaantal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcdddgegevensQuery The current query, for fluid interface
     */
    public function filterByDddaantal($dddaantal = null, $comparison = null)
    {
        if (is_array($dddaantal)) {
            $useMinMax = false;
            if (isset($dddaantal['min'])) {
                $this->addUsingAlias(GsAtcdddgegevensPeer::DDDAANTAL, $dddaantal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dddaantal['max'])) {
                $this->addUsingAlias(GsAtcdddgegevensPeer::DDDAANTAL, $dddaantal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAtcdddgegevensPeer::DDDAANTAL, $dddaantal, $comparison);
    }

    /**
     * Filter the query on the dddeenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByDddeenheid('fooValue');   // WHERE dddeenheid = 'fooValue'
     * $query->filterByDddeenheid('%fooValue%'); // WHERE dddeenheid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dddeenheid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcdddgegevensQuery The current query, for fluid interface
     */
    public function filterByDddeenheid($dddeenheid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dddeenheid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dddeenheid)) {
                $dddeenheid = str_replace('*', '%', $dddeenheid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcdddgegevensPeer::DDDEENHEID, $dddeenheid, $comparison);
    }

    /**
     * Filter the query on the dddtoedieningsweg_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByDddtoedieningswegKode(1234); // WHERE dddtoedieningsweg_kode = 1234
     * $query->filterByDddtoedieningswegKode(array(12, 34)); // WHERE dddtoedieningsweg_kode IN (12, 34)
     * $query->filterByDddtoedieningswegKode(array('min' => 12)); // WHERE dddtoedieningsweg_kode >= 12
     * $query->filterByDddtoedieningswegKode(array('max' => 12)); // WHERE dddtoedieningsweg_kode <= 12
     * </code>
     *
     * @param     mixed $dddtoedieningswegKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcdddgegevensQuery The current query, for fluid interface
     */
    public function filterByDddtoedieningswegKode($dddtoedieningswegKode = null, $comparison = null)
    {
        if (is_array($dddtoedieningswegKode)) {
            $useMinMax = false;
            if (isset($dddtoedieningswegKode['min'])) {
                $this->addUsingAlias(GsAtcdddgegevensPeer::DDDTOEDIENINGSWEG_KODE, $dddtoedieningswegKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dddtoedieningswegKode['max'])) {
                $this->addUsingAlias(GsAtcdddgegevensPeer::DDDTOEDIENINGSWEG_KODE, $dddtoedieningswegKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAtcdddgegevensPeer::DDDTOEDIENINGSWEG_KODE, $dddtoedieningswegKode, $comparison);
    }

    /**
     * Filter the query on the dddindicator column
     *
     * Example usage:
     * <code>
     * $query->filterByDddindicator('fooValue');   // WHERE dddindicator = 'fooValue'
     * $query->filterByDddindicator('%fooValue%'); // WHERE dddindicator LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dddindicator The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcdddgegevensQuery The current query, for fluid interface
     */
    public function filterByDddindicator($dddindicator = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dddindicator)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dddindicator)) {
                $dddindicator = str_replace('*', '%', $dddindicator);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtcdddgegevensPeer::DDDINDICATOR, $dddindicator, $comparison);
    }

    /**
     * Filter the query on the dddstatusaanduiding column
     *
     * Example usage:
     * <code>
     * $query->filterByDddstatusaanduiding(1234); // WHERE dddstatusaanduiding = 1234
     * $query->filterByDddstatusaanduiding(array(12, 34)); // WHERE dddstatusaanduiding IN (12, 34)
     * $query->filterByDddstatusaanduiding(array('min' => 12)); // WHERE dddstatusaanduiding >= 12
     * $query->filterByDddstatusaanduiding(array('max' => 12)); // WHERE dddstatusaanduiding <= 12
     * </code>
     *
     * @param     mixed $dddstatusaanduiding The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtcdddgegevensQuery The current query, for fluid interface
     */
    public function filterByDddstatusaanduiding($dddstatusaanduiding = null, $comparison = null)
    {
        if (is_array($dddstatusaanduiding)) {
            $useMinMax = false;
            if (isset($dddstatusaanduiding['min'])) {
                $this->addUsingAlias(GsAtcdddgegevensPeer::DDDSTATUSAANDUIDING, $dddstatusaanduiding['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dddstatusaanduiding['max'])) {
                $this->addUsingAlias(GsAtcdddgegevensPeer::DDDSTATUSAANDUIDING, $dddstatusaanduiding['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAtcdddgegevensPeer::DDDSTATUSAANDUIDING, $dddstatusaanduiding, $comparison);
    }

    /**
     * Filter the query by a related GsAtcCodes object
     *
     * @param   GsAtcCodes|PropelObjectCollection $gsAtcCodes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsAtcdddgegevensQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsAtcCodes($gsAtcCodes, $comparison = null)
    {
        if ($gsAtcCodes instanceof GsAtcCodes) {
            return $this
                ->addUsingAlias(GsAtcdddgegevensPeer::ATCCODE, $gsAtcCodes->getAtccode(), $comparison);
        } elseif ($gsAtcCodes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsAtcdddgegevensPeer::ATCCODE, $gsAtcCodes->toKeyValue('PrimaryKey', 'Atccode'), $comparison);
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
     * @return GsAtcdddgegevensQuery The current query, for fluid interface
     */
    public function joinGsAtcCodes($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useGsAtcCodesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsAtcCodes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsAtcCodes', '\PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsAtcdddgegevens $gsAtcdddgegevens Object to remove from the list of results
     *
     * @return GsAtcdddgegevensQuery The current query, for fluid interface
     */
    public function prune($gsAtcdddgegevens = null)
    {
        if ($gsAtcdddgegevens) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsAtcdddgegevensPeer::ATCCODE), $gsAtcdddgegevens->getAtccode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsAtcdddgegevensPeer::ATCVOLGNUMMER), $gsAtcdddgegevens->getAtcvolgnummer(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
