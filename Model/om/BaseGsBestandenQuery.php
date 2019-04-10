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
use PharmaIntelligence\GstandaardBundle\Model\GsBestanden;
use PharmaIntelligence\GstandaardBundle\Model\GsBestandenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsBestandenQuery;

/**
 * @method GsBestandenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsBestandenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsBestandenQuery orderByNaamVanHetBestand($order = Criteria::ASC) Order by the naam_van_het_bestand column
 * @method GsBestandenQuery orderByBestandomschrijving($order = Criteria::ASC) Order by the bestandomschrijving column
 * @method GsBestandenQuery orderByBestandscode($order = Criteria::ASC) Order by the bestandscode column
 * @method GsBestandenQuery orderByRecordlengte($order = Criteria::ASC) Order by the recordlengte column
 * @method GsBestandenQuery orderByIngangsdatum($order = Criteria::ASC) Order by the ingangsdatum column
 * @method GsBestandenQuery orderByEindedatumUitlevering($order = Criteria::ASC) Order by the eindedatum_uitlevering column
 * @method GsBestandenQuery orderByUitgavedatum($order = Criteria::ASC) Order by the uitgavedatum column
 * @method GsBestandenQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method GsBestandenQuery orderByAantalOngewijzigdeRecords($order = Criteria::ASC) Order by the aantal_ongewijzigde_records column
 * @method GsBestandenQuery orderByAantalVervallenRecords($order = Criteria::ASC) Order by the aantal_vervallen_records column
 * @method GsBestandenQuery orderByAantalGewijzigdeRecords($order = Criteria::ASC) Order by the aantal_gewijzigde_records column
 * @method GsBestandenQuery orderByAantalNieuweRecords($order = Criteria::ASC) Order by the aantal_nieuwe_records column
 * @method GsBestandenQuery orderByTotaalAantalRecords($order = Criteria::ASC) Order by the totaal_aantal_records column
 *
 * @method GsBestandenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsBestandenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsBestandenQuery groupByNaamVanHetBestand() Group by the naam_van_het_bestand column
 * @method GsBestandenQuery groupByBestandomschrijving() Group by the bestandomschrijving column
 * @method GsBestandenQuery groupByBestandscode() Group by the bestandscode column
 * @method GsBestandenQuery groupByRecordlengte() Group by the recordlengte column
 * @method GsBestandenQuery groupByIngangsdatum() Group by the ingangsdatum column
 * @method GsBestandenQuery groupByEindedatumUitlevering() Group by the eindedatum_uitlevering column
 * @method GsBestandenQuery groupByUitgavedatum() Group by the uitgavedatum column
 * @method GsBestandenQuery groupByStatus() Group by the status column
 * @method GsBestandenQuery groupByAantalOngewijzigdeRecords() Group by the aantal_ongewijzigde_records column
 * @method GsBestandenQuery groupByAantalVervallenRecords() Group by the aantal_vervallen_records column
 * @method GsBestandenQuery groupByAantalGewijzigdeRecords() Group by the aantal_gewijzigde_records column
 * @method GsBestandenQuery groupByAantalNieuweRecords() Group by the aantal_nieuwe_records column
 * @method GsBestandenQuery groupByTotaalAantalRecords() Group by the totaal_aantal_records column
 *
 * @method GsBestandenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsBestandenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsBestandenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsBestanden findOne(PropelPDO $con = null) Return the first GsBestanden matching the query
 * @method GsBestanden findOneOrCreate(PropelPDO $con = null) Return the first GsBestanden matching the query, or a new GsBestanden object populated from the query conditions when no match is found
 *
 * @method GsBestanden findOneByBestandnummer(int $bestandnummer) Return the first GsBestanden filtered by the bestandnummer column
 * @method GsBestanden findOneByMutatiekode(int $mutatiekode) Return the first GsBestanden filtered by the mutatiekode column
 * @method GsBestanden findOneByBestandomschrijving(string $bestandomschrijving) Return the first GsBestanden filtered by the bestandomschrijving column
 * @method GsBestanden findOneByBestandscode(int $bestandscode) Return the first GsBestanden filtered by the bestandscode column
 * @method GsBestanden findOneByRecordlengte(int $recordlengte) Return the first GsBestanden filtered by the recordlengte column
 * @method GsBestanden findOneByIngangsdatum(int $ingangsdatum) Return the first GsBestanden filtered by the ingangsdatum column
 * @method GsBestanden findOneByEindedatumUitlevering(int $eindedatum_uitlevering) Return the first GsBestanden filtered by the eindedatum_uitlevering column
 * @method GsBestanden findOneByUitgavedatum(int $uitgavedatum) Return the first GsBestanden filtered by the uitgavedatum column
 * @method GsBestanden findOneByStatus(string $status) Return the first GsBestanden filtered by the status column
 * @method GsBestanden findOneByAantalOngewijzigdeRecords(int $aantal_ongewijzigde_records) Return the first GsBestanden filtered by the aantal_ongewijzigde_records column
 * @method GsBestanden findOneByAantalVervallenRecords(int $aantal_vervallen_records) Return the first GsBestanden filtered by the aantal_vervallen_records column
 * @method GsBestanden findOneByAantalGewijzigdeRecords(int $aantal_gewijzigde_records) Return the first GsBestanden filtered by the aantal_gewijzigde_records column
 * @method GsBestanden findOneByAantalNieuweRecords(int $aantal_nieuwe_records) Return the first GsBestanden filtered by the aantal_nieuwe_records column
 * @method GsBestanden findOneByTotaalAantalRecords(int $totaal_aantal_records) Return the first GsBestanden filtered by the totaal_aantal_records column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsBestanden objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsBestanden objects filtered by the mutatiekode column
 * @method array findByNaamVanHetBestand(string $naam_van_het_bestand) Return GsBestanden objects filtered by the naam_van_het_bestand column
 * @method array findByBestandomschrijving(string $bestandomschrijving) Return GsBestanden objects filtered by the bestandomschrijving column
 * @method array findByBestandscode(int $bestandscode) Return GsBestanden objects filtered by the bestandscode column
 * @method array findByRecordlengte(int $recordlengte) Return GsBestanden objects filtered by the recordlengte column
 * @method array findByIngangsdatum(int $ingangsdatum) Return GsBestanden objects filtered by the ingangsdatum column
 * @method array findByEindedatumUitlevering(int $eindedatum_uitlevering) Return GsBestanden objects filtered by the eindedatum_uitlevering column
 * @method array findByUitgavedatum(int $uitgavedatum) Return GsBestanden objects filtered by the uitgavedatum column
 * @method array findByStatus(string $status) Return GsBestanden objects filtered by the status column
 * @method array findByAantalOngewijzigdeRecords(int $aantal_ongewijzigde_records) Return GsBestanden objects filtered by the aantal_ongewijzigde_records column
 * @method array findByAantalVervallenRecords(int $aantal_vervallen_records) Return GsBestanden objects filtered by the aantal_vervallen_records column
 * @method array findByAantalGewijzigdeRecords(int $aantal_gewijzigde_records) Return GsBestanden objects filtered by the aantal_gewijzigde_records column
 * @method array findByAantalNieuweRecords(int $aantal_nieuwe_records) Return GsBestanden objects filtered by the aantal_nieuwe_records column
 * @method array findByTotaalAantalRecords(int $totaal_aantal_records) Return GsBestanden objects filtered by the totaal_aantal_records column
 */
abstract class BaseGsBestandenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsBestandenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsBestanden';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsBestandenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsBestandenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsBestandenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsBestandenQuery) {
            return $criteria;
        }
        $query = new GsBestandenQuery(null, null, $modelAlias);

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
     * @return   GsBestanden|GsBestanden[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsBestandenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsBestandenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsBestanden A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByNaamVanHetBestand($key, $con = null)
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
     * @return                 GsBestanden A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `naam_van_het_bestand`, `bestandomschrijving`, `bestandscode`, `recordlengte`, `ingangsdatum`, `eindedatum_uitlevering`, `uitgavedatum`, `status`, `aantal_ongewijzigde_records`, `aantal_vervallen_records`, `aantal_gewijzigde_records`, `aantal_nieuwe_records`, `totaal_aantal_records` FROM `gs_bestanden` WHERE `naam_van_het_bestand` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsBestanden();
            $obj->hydrate($row);
            GsBestandenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsBestanden|GsBestanden[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsBestanden[]|mixed the list of results, formatted by the current formatter
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
     * @return GsBestandenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsBestandenPeer::NAAM_VAN_HET_BESTAND, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsBestandenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsBestandenPeer::NAAM_VAN_HET_BESTAND, $keys, Criteria::IN);
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
     * @return GsBestandenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsBestandenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsBestandenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBestandenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsBestandenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsBestandenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsBestandenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBestandenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the naam_van_het_bestand column
     *
     * Example usage:
     * <code>
     * $query->filterByNaamVanHetBestand('fooValue');   // WHERE naam_van_het_bestand = 'fooValue'
     * $query->filterByNaamVanHetBestand('%fooValue%'); // WHERE naam_van_het_bestand LIKE '%fooValue%'
     * </code>
     *
     * @param     string $naamVanHetBestand The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBestandenQuery The current query, for fluid interface
     */
    public function filterByNaamVanHetBestand($naamVanHetBestand = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($naamVanHetBestand)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $naamVanHetBestand)) {
                $naamVanHetBestand = str_replace('*', '%', $naamVanHetBestand);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsBestandenPeer::NAAM_VAN_HET_BESTAND, $naamVanHetBestand, $comparison);
    }

    /**
     * Filter the query on the bestandomschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByBestandomschrijving('fooValue');   // WHERE bestandomschrijving = 'fooValue'
     * $query->filterByBestandomschrijving('%fooValue%'); // WHERE bestandomschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bestandomschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBestandenQuery The current query, for fluid interface
     */
    public function filterByBestandomschrijving($bestandomschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bestandomschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bestandomschrijving)) {
                $bestandomschrijving = str_replace('*', '%', $bestandomschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsBestandenPeer::BESTANDOMSCHRIJVING, $bestandomschrijving, $comparison);
    }

    /**
     * Filter the query on the bestandscode column
     *
     * Example usage:
     * <code>
     * $query->filterByBestandscode(1234); // WHERE bestandscode = 1234
     * $query->filterByBestandscode(array(12, 34)); // WHERE bestandscode IN (12, 34)
     * $query->filterByBestandscode(array('min' => 12)); // WHERE bestandscode >= 12
     * $query->filterByBestandscode(array('max' => 12)); // WHERE bestandscode <= 12
     * </code>
     *
     * @param     mixed $bestandscode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBestandenQuery The current query, for fluid interface
     */
    public function filterByBestandscode($bestandscode = null, $comparison = null)
    {
        if (is_array($bestandscode)) {
            $useMinMax = false;
            if (isset($bestandscode['min'])) {
                $this->addUsingAlias(GsBestandenPeer::BESTANDSCODE, $bestandscode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandscode['max'])) {
                $this->addUsingAlias(GsBestandenPeer::BESTANDSCODE, $bestandscode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBestandenPeer::BESTANDSCODE, $bestandscode, $comparison);
    }

    /**
     * Filter the query on the recordlengte column
     *
     * Example usage:
     * <code>
     * $query->filterByRecordlengte(1234); // WHERE recordlengte = 1234
     * $query->filterByRecordlengte(array(12, 34)); // WHERE recordlengte IN (12, 34)
     * $query->filterByRecordlengte(array('min' => 12)); // WHERE recordlengte >= 12
     * $query->filterByRecordlengte(array('max' => 12)); // WHERE recordlengte <= 12
     * </code>
     *
     * @param     mixed $recordlengte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBestandenQuery The current query, for fluid interface
     */
    public function filterByRecordlengte($recordlengte = null, $comparison = null)
    {
        if (is_array($recordlengte)) {
            $useMinMax = false;
            if (isset($recordlengte['min'])) {
                $this->addUsingAlias(GsBestandenPeer::RECORDLENGTE, $recordlengte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recordlengte['max'])) {
                $this->addUsingAlias(GsBestandenPeer::RECORDLENGTE, $recordlengte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBestandenPeer::RECORDLENGTE, $recordlengte, $comparison);
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
     * @return GsBestandenQuery The current query, for fluid interface
     */
    public function filterByIngangsdatum($ingangsdatum = null, $comparison = null)
    {
        if (is_array($ingangsdatum)) {
            $useMinMax = false;
            if (isset($ingangsdatum['min'])) {
                $this->addUsingAlias(GsBestandenPeer::INGANGSDATUM, $ingangsdatum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ingangsdatum['max'])) {
                $this->addUsingAlias(GsBestandenPeer::INGANGSDATUM, $ingangsdatum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBestandenPeer::INGANGSDATUM, $ingangsdatum, $comparison);
    }

    /**
     * Filter the query on the eindedatum_uitlevering column
     *
     * Example usage:
     * <code>
     * $query->filterByEindedatumUitlevering(1234); // WHERE eindedatum_uitlevering = 1234
     * $query->filterByEindedatumUitlevering(array(12, 34)); // WHERE eindedatum_uitlevering IN (12, 34)
     * $query->filterByEindedatumUitlevering(array('min' => 12)); // WHERE eindedatum_uitlevering >= 12
     * $query->filterByEindedatumUitlevering(array('max' => 12)); // WHERE eindedatum_uitlevering <= 12
     * </code>
     *
     * @param     mixed $eindedatumUitlevering The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBestandenQuery The current query, for fluid interface
     */
    public function filterByEindedatumUitlevering($eindedatumUitlevering = null, $comparison = null)
    {
        if (is_array($eindedatumUitlevering)) {
            $useMinMax = false;
            if (isset($eindedatumUitlevering['min'])) {
                $this->addUsingAlias(GsBestandenPeer::EINDEDATUM_UITLEVERING, $eindedatumUitlevering['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eindedatumUitlevering['max'])) {
                $this->addUsingAlias(GsBestandenPeer::EINDEDATUM_UITLEVERING, $eindedatumUitlevering['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBestandenPeer::EINDEDATUM_UITLEVERING, $eindedatumUitlevering, $comparison);
    }

    /**
     * Filter the query on the uitgavedatum column
     *
     * Example usage:
     * <code>
     * $query->filterByUitgavedatum(1234); // WHERE uitgavedatum = 1234
     * $query->filterByUitgavedatum(array(12, 34)); // WHERE uitgavedatum IN (12, 34)
     * $query->filterByUitgavedatum(array('min' => 12)); // WHERE uitgavedatum >= 12
     * $query->filterByUitgavedatum(array('max' => 12)); // WHERE uitgavedatum <= 12
     * </code>
     *
     * @param     mixed $uitgavedatum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBestandenQuery The current query, for fluid interface
     */
    public function filterByUitgavedatum($uitgavedatum = null, $comparison = null)
    {
        if (is_array($uitgavedatum)) {
            $useMinMax = false;
            if (isset($uitgavedatum['min'])) {
                $this->addUsingAlias(GsBestandenPeer::UITGAVEDATUM, $uitgavedatum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uitgavedatum['max'])) {
                $this->addUsingAlias(GsBestandenPeer::UITGAVEDATUM, $uitgavedatum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBestandenPeer::UITGAVEDATUM, $uitgavedatum, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE status = 'fooValue'
     * $query->filterByStatus('%fooValue%'); // WHERE status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBestandenQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $status)) {
                $status = str_replace('*', '%', $status);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsBestandenPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the aantal_ongewijzigde_records column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalOngewijzigdeRecords(1234); // WHERE aantal_ongewijzigde_records = 1234
     * $query->filterByAantalOngewijzigdeRecords(array(12, 34)); // WHERE aantal_ongewijzigde_records IN (12, 34)
     * $query->filterByAantalOngewijzigdeRecords(array('min' => 12)); // WHERE aantal_ongewijzigde_records >= 12
     * $query->filterByAantalOngewijzigdeRecords(array('max' => 12)); // WHERE aantal_ongewijzigde_records <= 12
     * </code>
     *
     * @param     mixed $aantalOngewijzigdeRecords The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBestandenQuery The current query, for fluid interface
     */
    public function filterByAantalOngewijzigdeRecords($aantalOngewijzigdeRecords = null, $comparison = null)
    {
        if (is_array($aantalOngewijzigdeRecords)) {
            $useMinMax = false;
            if (isset($aantalOngewijzigdeRecords['min'])) {
                $this->addUsingAlias(GsBestandenPeer::AANTAL_ONGEWIJZIGDE_RECORDS, $aantalOngewijzigdeRecords['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalOngewijzigdeRecords['max'])) {
                $this->addUsingAlias(GsBestandenPeer::AANTAL_ONGEWIJZIGDE_RECORDS, $aantalOngewijzigdeRecords['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBestandenPeer::AANTAL_ONGEWIJZIGDE_RECORDS, $aantalOngewijzigdeRecords, $comparison);
    }

    /**
     * Filter the query on the aantal_vervallen_records column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalVervallenRecords(1234); // WHERE aantal_vervallen_records = 1234
     * $query->filterByAantalVervallenRecords(array(12, 34)); // WHERE aantal_vervallen_records IN (12, 34)
     * $query->filterByAantalVervallenRecords(array('min' => 12)); // WHERE aantal_vervallen_records >= 12
     * $query->filterByAantalVervallenRecords(array('max' => 12)); // WHERE aantal_vervallen_records <= 12
     * </code>
     *
     * @param     mixed $aantalVervallenRecords The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBestandenQuery The current query, for fluid interface
     */
    public function filterByAantalVervallenRecords($aantalVervallenRecords = null, $comparison = null)
    {
        if (is_array($aantalVervallenRecords)) {
            $useMinMax = false;
            if (isset($aantalVervallenRecords['min'])) {
                $this->addUsingAlias(GsBestandenPeer::AANTAL_VERVALLEN_RECORDS, $aantalVervallenRecords['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalVervallenRecords['max'])) {
                $this->addUsingAlias(GsBestandenPeer::AANTAL_VERVALLEN_RECORDS, $aantalVervallenRecords['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBestandenPeer::AANTAL_VERVALLEN_RECORDS, $aantalVervallenRecords, $comparison);
    }

    /**
     * Filter the query on the aantal_gewijzigde_records column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalGewijzigdeRecords(1234); // WHERE aantal_gewijzigde_records = 1234
     * $query->filterByAantalGewijzigdeRecords(array(12, 34)); // WHERE aantal_gewijzigde_records IN (12, 34)
     * $query->filterByAantalGewijzigdeRecords(array('min' => 12)); // WHERE aantal_gewijzigde_records >= 12
     * $query->filterByAantalGewijzigdeRecords(array('max' => 12)); // WHERE aantal_gewijzigde_records <= 12
     * </code>
     *
     * @param     mixed $aantalGewijzigdeRecords The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBestandenQuery The current query, for fluid interface
     */
    public function filterByAantalGewijzigdeRecords($aantalGewijzigdeRecords = null, $comparison = null)
    {
        if (is_array($aantalGewijzigdeRecords)) {
            $useMinMax = false;
            if (isset($aantalGewijzigdeRecords['min'])) {
                $this->addUsingAlias(GsBestandenPeer::AANTAL_GEWIJZIGDE_RECORDS, $aantalGewijzigdeRecords['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalGewijzigdeRecords['max'])) {
                $this->addUsingAlias(GsBestandenPeer::AANTAL_GEWIJZIGDE_RECORDS, $aantalGewijzigdeRecords['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBestandenPeer::AANTAL_GEWIJZIGDE_RECORDS, $aantalGewijzigdeRecords, $comparison);
    }

    /**
     * Filter the query on the aantal_nieuwe_records column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalNieuweRecords(1234); // WHERE aantal_nieuwe_records = 1234
     * $query->filterByAantalNieuweRecords(array(12, 34)); // WHERE aantal_nieuwe_records IN (12, 34)
     * $query->filterByAantalNieuweRecords(array('min' => 12)); // WHERE aantal_nieuwe_records >= 12
     * $query->filterByAantalNieuweRecords(array('max' => 12)); // WHERE aantal_nieuwe_records <= 12
     * </code>
     *
     * @param     mixed $aantalNieuweRecords The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBestandenQuery The current query, for fluid interface
     */
    public function filterByAantalNieuweRecords($aantalNieuweRecords = null, $comparison = null)
    {
        if (is_array($aantalNieuweRecords)) {
            $useMinMax = false;
            if (isset($aantalNieuweRecords['min'])) {
                $this->addUsingAlias(GsBestandenPeer::AANTAL_NIEUWE_RECORDS, $aantalNieuweRecords['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalNieuweRecords['max'])) {
                $this->addUsingAlias(GsBestandenPeer::AANTAL_NIEUWE_RECORDS, $aantalNieuweRecords['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBestandenPeer::AANTAL_NIEUWE_RECORDS, $aantalNieuweRecords, $comparison);
    }

    /**
     * Filter the query on the totaal_aantal_records column
     *
     * Example usage:
     * <code>
     * $query->filterByTotaalAantalRecords(1234); // WHERE totaal_aantal_records = 1234
     * $query->filterByTotaalAantalRecords(array(12, 34)); // WHERE totaal_aantal_records IN (12, 34)
     * $query->filterByTotaalAantalRecords(array('min' => 12)); // WHERE totaal_aantal_records >= 12
     * $query->filterByTotaalAantalRecords(array('max' => 12)); // WHERE totaal_aantal_records <= 12
     * </code>
     *
     * @param     mixed $totaalAantalRecords The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBestandenQuery The current query, for fluid interface
     */
    public function filterByTotaalAantalRecords($totaalAantalRecords = null, $comparison = null)
    {
        if (is_array($totaalAantalRecords)) {
            $useMinMax = false;
            if (isset($totaalAantalRecords['min'])) {
                $this->addUsingAlias(GsBestandenPeer::TOTAAL_AANTAL_RECORDS, $totaalAantalRecords['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totaalAantalRecords['max'])) {
                $this->addUsingAlias(GsBestandenPeer::TOTAAL_AANTAL_RECORDS, $totaalAantalRecords['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBestandenPeer::TOTAAL_AANTAL_RECORDS, $totaalAantalRecords, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsBestanden $gsBestanden Object to remove from the list of results
     *
     * @return GsBestandenQuery The current query, for fluid interface
     */
    public function prune($gsBestanden = null)
    {
        if ($gsBestanden) {
            $this->addUsingAlias(GsBestandenPeer::NAAM_VAN_HET_BESTAND, $gsBestanden->getNaamVanHetBestand(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
