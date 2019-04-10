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
use PharmaIntelligence\GstandaardBundle\Model\GsCategorieen;
use PharmaIntelligence\GstandaardBundle\Model\GsCategorieenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsCategorieenQuery;

/**
 * @method GsCategorieenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsCategorieenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsCategorieenQuery orderByDosiscategorienummer($order = Criteria::ASC) Order by the dosiscategorienummer column
 * @method GsCategorieenQuery orderByIdentificerendRecordnummer($order = Criteria::ASC) Order by the identificerend_recordnummer column
 * @method GsCategorieenQuery orderByLeeftijdInMaandenVanaf($order = Criteria::ASC) Order by the leeftijd_in_maanden_vanaf column
 * @method GsCategorieenQuery orderByLeeftijdInMaandenTot($order = Criteria::ASC) Order by the leeftijd_in_maanden_tot column
 * @method GsCategorieenQuery orderByGewichtInKgVanaf($order = Criteria::ASC) Order by the gewicht_in_kg_vanaf column
 * @method GsCategorieenQuery orderByGewichtInKgTot($order = Criteria::ASC) Order by the gewicht_in_kg_tot column
 * @method GsCategorieenQuery orderByLichaamsoppervlakteInM2Vanaf($order = Criteria::ASC) Order by the lichaamsoppervlakte_in_m2_vanaf column
 * @method GsCategorieenQuery orderByLichaamsoppervlakteInM2Tot($order = Criteria::ASC) Order by the lichaamsoppervlakte_in_m2_tot column
 * @method GsCategorieenQuery orderByFrequentieAantal($order = Criteria::ASC) Order by the frequentie_aantal column
 * @method GsCategorieenQuery orderByFrequentieTijdseenheid($order = Criteria::ASC) Order by the frequentie_tijdseenheid column
 * @method GsCategorieenQuery orderByBasissetVoorDenekampBerekening($order = Criteria::ASC) Order by the basisset_voor_denekamp_berekening column
 * @method GsCategorieenQuery orderByDosisnummer($order = Criteria::ASC) Order by the dosisnummer column
 *
 * @method GsCategorieenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsCategorieenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsCategorieenQuery groupByDosiscategorienummer() Group by the dosiscategorienummer column
 * @method GsCategorieenQuery groupByIdentificerendRecordnummer() Group by the identificerend_recordnummer column
 * @method GsCategorieenQuery groupByLeeftijdInMaandenVanaf() Group by the leeftijd_in_maanden_vanaf column
 * @method GsCategorieenQuery groupByLeeftijdInMaandenTot() Group by the leeftijd_in_maanden_tot column
 * @method GsCategorieenQuery groupByGewichtInKgVanaf() Group by the gewicht_in_kg_vanaf column
 * @method GsCategorieenQuery groupByGewichtInKgTot() Group by the gewicht_in_kg_tot column
 * @method GsCategorieenQuery groupByLichaamsoppervlakteInM2Vanaf() Group by the lichaamsoppervlakte_in_m2_vanaf column
 * @method GsCategorieenQuery groupByLichaamsoppervlakteInM2Tot() Group by the lichaamsoppervlakte_in_m2_tot column
 * @method GsCategorieenQuery groupByFrequentieAantal() Group by the frequentie_aantal column
 * @method GsCategorieenQuery groupByFrequentieTijdseenheid() Group by the frequentie_tijdseenheid column
 * @method GsCategorieenQuery groupByBasissetVoorDenekampBerekening() Group by the basisset_voor_denekamp_berekening column
 * @method GsCategorieenQuery groupByDosisnummer() Group by the dosisnummer column
 *
 * @method GsCategorieenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsCategorieenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsCategorieenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsCategorieen findOne(PropelPDO $con = null) Return the first GsCategorieen matching the query
 * @method GsCategorieen findOneOrCreate(PropelPDO $con = null) Return the first GsCategorieen matching the query, or a new GsCategorieen object populated from the query conditions when no match is found
 *
 * @method GsCategorieen findOneByBestandnummer(int $bestandnummer) Return the first GsCategorieen filtered by the bestandnummer column
 * @method GsCategorieen findOneByMutatiekode(int $mutatiekode) Return the first GsCategorieen filtered by the mutatiekode column
 * @method GsCategorieen findOneByDosiscategorienummer(int $dosiscategorienummer) Return the first GsCategorieen filtered by the dosiscategorienummer column
 * @method GsCategorieen findOneByIdentificerendRecordnummer(int $identificerend_recordnummer) Return the first GsCategorieen filtered by the identificerend_recordnummer column
 * @method GsCategorieen findOneByLeeftijdInMaandenVanaf(string $leeftijd_in_maanden_vanaf) Return the first GsCategorieen filtered by the leeftijd_in_maanden_vanaf column
 * @method GsCategorieen findOneByLeeftijdInMaandenTot(string $leeftijd_in_maanden_tot) Return the first GsCategorieen filtered by the leeftijd_in_maanden_tot column
 * @method GsCategorieen findOneByGewichtInKgVanaf(string $gewicht_in_kg_vanaf) Return the first GsCategorieen filtered by the gewicht_in_kg_vanaf column
 * @method GsCategorieen findOneByGewichtInKgTot(string $gewicht_in_kg_tot) Return the first GsCategorieen filtered by the gewicht_in_kg_tot column
 * @method GsCategorieen findOneByLichaamsoppervlakteInM2Vanaf(string $lichaamsoppervlakte_in_m2_vanaf) Return the first GsCategorieen filtered by the lichaamsoppervlakte_in_m2_vanaf column
 * @method GsCategorieen findOneByLichaamsoppervlakteInM2Tot(string $lichaamsoppervlakte_in_m2_tot) Return the first GsCategorieen filtered by the lichaamsoppervlakte_in_m2_tot column
 * @method GsCategorieen findOneByFrequentieAantal(string $frequentie_aantal) Return the first GsCategorieen filtered by the frequentie_aantal column
 * @method GsCategorieen findOneByFrequentieTijdseenheid(int $frequentie_tijdseenheid) Return the first GsCategorieen filtered by the frequentie_tijdseenheid column
 * @method GsCategorieen findOneByBasissetVoorDenekampBerekening(int $basisset_voor_denekamp_berekening) Return the first GsCategorieen filtered by the basisset_voor_denekamp_berekening column
 * @method GsCategorieen findOneByDosisnummer(int $dosisnummer) Return the first GsCategorieen filtered by the dosisnummer column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsCategorieen objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsCategorieen objects filtered by the mutatiekode column
 * @method array findByDosiscategorienummer(int $dosiscategorienummer) Return GsCategorieen objects filtered by the dosiscategorienummer column
 * @method array findByIdentificerendRecordnummer(int $identificerend_recordnummer) Return GsCategorieen objects filtered by the identificerend_recordnummer column
 * @method array findByLeeftijdInMaandenVanaf(string $leeftijd_in_maanden_vanaf) Return GsCategorieen objects filtered by the leeftijd_in_maanden_vanaf column
 * @method array findByLeeftijdInMaandenTot(string $leeftijd_in_maanden_tot) Return GsCategorieen objects filtered by the leeftijd_in_maanden_tot column
 * @method array findByGewichtInKgVanaf(string $gewicht_in_kg_vanaf) Return GsCategorieen objects filtered by the gewicht_in_kg_vanaf column
 * @method array findByGewichtInKgTot(string $gewicht_in_kg_tot) Return GsCategorieen objects filtered by the gewicht_in_kg_tot column
 * @method array findByLichaamsoppervlakteInM2Vanaf(string $lichaamsoppervlakte_in_m2_vanaf) Return GsCategorieen objects filtered by the lichaamsoppervlakte_in_m2_vanaf column
 * @method array findByLichaamsoppervlakteInM2Tot(string $lichaamsoppervlakte_in_m2_tot) Return GsCategorieen objects filtered by the lichaamsoppervlakte_in_m2_tot column
 * @method array findByFrequentieAantal(string $frequentie_aantal) Return GsCategorieen objects filtered by the frequentie_aantal column
 * @method array findByFrequentieTijdseenheid(int $frequentie_tijdseenheid) Return GsCategorieen objects filtered by the frequentie_tijdseenheid column
 * @method array findByBasissetVoorDenekampBerekening(int $basisset_voor_denekamp_berekening) Return GsCategorieen objects filtered by the basisset_voor_denekamp_berekening column
 * @method array findByDosisnummer(int $dosisnummer) Return GsCategorieen objects filtered by the dosisnummer column
 */
abstract class BaseGsCategorieenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsCategorieenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsCategorieen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsCategorieenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsCategorieenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsCategorieenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsCategorieenQuery) {
            return $criteria;
        }
        $query = new GsCategorieenQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$dosiscategorienummer, $identificerend_recordnummer]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsCategorieen|GsCategorieen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsCategorieenPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsCategorieenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsCategorieen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `dosiscategorienummer`, `identificerend_recordnummer`, `leeftijd_in_maanden_vanaf`, `leeftijd_in_maanden_tot`, `gewicht_in_kg_vanaf`, `gewicht_in_kg_tot`, `lichaamsoppervlakte_in_m2_vanaf`, `lichaamsoppervlakte_in_m2_tot`, `frequentie_aantal`, `frequentie_tijdseenheid`, `basisset_voor_denekamp_berekening`, `dosisnummer` FROM `gs_categorieen` WHERE `dosiscategorienummer` = :p0 AND `identificerend_recordnummer` = :p1';
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
            $obj = new GsCategorieen();
            $obj->hydrate($row);
            GsCategorieenPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsCategorieen|GsCategorieen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsCategorieen[]|mixed the list of results, formatted by the current formatter
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
     * @return GsCategorieenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsCategorieenPeer::DOSISCATEGORIENUMMER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsCategorieenPeer::IDENTIFICEREND_RECORDNUMMER, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsCategorieenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsCategorieenPeer::DOSISCATEGORIENUMMER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsCategorieenPeer::IDENTIFICEREND_RECORDNUMMER, $key[1], Criteria::EQUAL);
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
     * @return GsCategorieenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsCategorieenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsCategorieenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCategorieenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsCategorieenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsCategorieenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsCategorieenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCategorieenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the dosiscategorienummer column
     *
     * Example usage:
     * <code>
     * $query->filterByDosiscategorienummer(1234); // WHERE dosiscategorienummer = 1234
     * $query->filterByDosiscategorienummer(array(12, 34)); // WHERE dosiscategorienummer IN (12, 34)
     * $query->filterByDosiscategorienummer(array('min' => 12)); // WHERE dosiscategorienummer >= 12
     * $query->filterByDosiscategorienummer(array('max' => 12)); // WHERE dosiscategorienummer <= 12
     * </code>
     *
     * @param     mixed $dosiscategorienummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCategorieenQuery The current query, for fluid interface
     */
    public function filterByDosiscategorienummer($dosiscategorienummer = null, $comparison = null)
    {
        if (is_array($dosiscategorienummer)) {
            $useMinMax = false;
            if (isset($dosiscategorienummer['min'])) {
                $this->addUsingAlias(GsCategorieenPeer::DOSISCATEGORIENUMMER, $dosiscategorienummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dosiscategorienummer['max'])) {
                $this->addUsingAlias(GsCategorieenPeer::DOSISCATEGORIENUMMER, $dosiscategorienummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCategorieenPeer::DOSISCATEGORIENUMMER, $dosiscategorienummer, $comparison);
    }

    /**
     * Filter the query on the identificerend_recordnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentificerendRecordnummer(1234); // WHERE identificerend_recordnummer = 1234
     * $query->filterByIdentificerendRecordnummer(array(12, 34)); // WHERE identificerend_recordnummer IN (12, 34)
     * $query->filterByIdentificerendRecordnummer(array('min' => 12)); // WHERE identificerend_recordnummer >= 12
     * $query->filterByIdentificerendRecordnummer(array('max' => 12)); // WHERE identificerend_recordnummer <= 12
     * </code>
     *
     * @param     mixed $identificerendRecordnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCategorieenQuery The current query, for fluid interface
     */
    public function filterByIdentificerendRecordnummer($identificerendRecordnummer = null, $comparison = null)
    {
        if (is_array($identificerendRecordnummer)) {
            $useMinMax = false;
            if (isset($identificerendRecordnummer['min'])) {
                $this->addUsingAlias(GsCategorieenPeer::IDENTIFICEREND_RECORDNUMMER, $identificerendRecordnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($identificerendRecordnummer['max'])) {
                $this->addUsingAlias(GsCategorieenPeer::IDENTIFICEREND_RECORDNUMMER, $identificerendRecordnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCategorieenPeer::IDENTIFICEREND_RECORDNUMMER, $identificerendRecordnummer, $comparison);
    }

    /**
     * Filter the query on the leeftijd_in_maanden_vanaf column
     *
     * Example usage:
     * <code>
     * $query->filterByLeeftijdInMaandenVanaf(1234); // WHERE leeftijd_in_maanden_vanaf = 1234
     * $query->filterByLeeftijdInMaandenVanaf(array(12, 34)); // WHERE leeftijd_in_maanden_vanaf IN (12, 34)
     * $query->filterByLeeftijdInMaandenVanaf(array('min' => 12)); // WHERE leeftijd_in_maanden_vanaf >= 12
     * $query->filterByLeeftijdInMaandenVanaf(array('max' => 12)); // WHERE leeftijd_in_maanden_vanaf <= 12
     * </code>
     *
     * @param     mixed $leeftijdInMaandenVanaf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCategorieenQuery The current query, for fluid interface
     */
    public function filterByLeeftijdInMaandenVanaf($leeftijdInMaandenVanaf = null, $comparison = null)
    {
        if (is_array($leeftijdInMaandenVanaf)) {
            $useMinMax = false;
            if (isset($leeftijdInMaandenVanaf['min'])) {
                $this->addUsingAlias(GsCategorieenPeer::LEEFTIJD_IN_MAANDEN_VANAF, $leeftijdInMaandenVanaf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($leeftijdInMaandenVanaf['max'])) {
                $this->addUsingAlias(GsCategorieenPeer::LEEFTIJD_IN_MAANDEN_VANAF, $leeftijdInMaandenVanaf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCategorieenPeer::LEEFTIJD_IN_MAANDEN_VANAF, $leeftijdInMaandenVanaf, $comparison);
    }

    /**
     * Filter the query on the leeftijd_in_maanden_tot column
     *
     * Example usage:
     * <code>
     * $query->filterByLeeftijdInMaandenTot(1234); // WHERE leeftijd_in_maanden_tot = 1234
     * $query->filterByLeeftijdInMaandenTot(array(12, 34)); // WHERE leeftijd_in_maanden_tot IN (12, 34)
     * $query->filterByLeeftijdInMaandenTot(array('min' => 12)); // WHERE leeftijd_in_maanden_tot >= 12
     * $query->filterByLeeftijdInMaandenTot(array('max' => 12)); // WHERE leeftijd_in_maanden_tot <= 12
     * </code>
     *
     * @param     mixed $leeftijdInMaandenTot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCategorieenQuery The current query, for fluid interface
     */
    public function filterByLeeftijdInMaandenTot($leeftijdInMaandenTot = null, $comparison = null)
    {
        if (is_array($leeftijdInMaandenTot)) {
            $useMinMax = false;
            if (isset($leeftijdInMaandenTot['min'])) {
                $this->addUsingAlias(GsCategorieenPeer::LEEFTIJD_IN_MAANDEN_TOT, $leeftijdInMaandenTot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($leeftijdInMaandenTot['max'])) {
                $this->addUsingAlias(GsCategorieenPeer::LEEFTIJD_IN_MAANDEN_TOT, $leeftijdInMaandenTot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCategorieenPeer::LEEFTIJD_IN_MAANDEN_TOT, $leeftijdInMaandenTot, $comparison);
    }

    /**
     * Filter the query on the gewicht_in_kg_vanaf column
     *
     * Example usage:
     * <code>
     * $query->filterByGewichtInKgVanaf(1234); // WHERE gewicht_in_kg_vanaf = 1234
     * $query->filterByGewichtInKgVanaf(array(12, 34)); // WHERE gewicht_in_kg_vanaf IN (12, 34)
     * $query->filterByGewichtInKgVanaf(array('min' => 12)); // WHERE gewicht_in_kg_vanaf >= 12
     * $query->filterByGewichtInKgVanaf(array('max' => 12)); // WHERE gewicht_in_kg_vanaf <= 12
     * </code>
     *
     * @param     mixed $gewichtInKgVanaf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCategorieenQuery The current query, for fluid interface
     */
    public function filterByGewichtInKgVanaf($gewichtInKgVanaf = null, $comparison = null)
    {
        if (is_array($gewichtInKgVanaf)) {
            $useMinMax = false;
            if (isset($gewichtInKgVanaf['min'])) {
                $this->addUsingAlias(GsCategorieenPeer::GEWICHT_IN_KG_VANAF, $gewichtInKgVanaf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gewichtInKgVanaf['max'])) {
                $this->addUsingAlias(GsCategorieenPeer::GEWICHT_IN_KG_VANAF, $gewichtInKgVanaf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCategorieenPeer::GEWICHT_IN_KG_VANAF, $gewichtInKgVanaf, $comparison);
    }

    /**
     * Filter the query on the gewicht_in_kg_tot column
     *
     * Example usage:
     * <code>
     * $query->filterByGewichtInKgTot(1234); // WHERE gewicht_in_kg_tot = 1234
     * $query->filterByGewichtInKgTot(array(12, 34)); // WHERE gewicht_in_kg_tot IN (12, 34)
     * $query->filterByGewichtInKgTot(array('min' => 12)); // WHERE gewicht_in_kg_tot >= 12
     * $query->filterByGewichtInKgTot(array('max' => 12)); // WHERE gewicht_in_kg_tot <= 12
     * </code>
     *
     * @param     mixed $gewichtInKgTot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCategorieenQuery The current query, for fluid interface
     */
    public function filterByGewichtInKgTot($gewichtInKgTot = null, $comparison = null)
    {
        if (is_array($gewichtInKgTot)) {
            $useMinMax = false;
            if (isset($gewichtInKgTot['min'])) {
                $this->addUsingAlias(GsCategorieenPeer::GEWICHT_IN_KG_TOT, $gewichtInKgTot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gewichtInKgTot['max'])) {
                $this->addUsingAlias(GsCategorieenPeer::GEWICHT_IN_KG_TOT, $gewichtInKgTot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCategorieenPeer::GEWICHT_IN_KG_TOT, $gewichtInKgTot, $comparison);
    }

    /**
     * Filter the query on the lichaamsoppervlakte_in_m2_vanaf column
     *
     * Example usage:
     * <code>
     * $query->filterByLichaamsoppervlakteInM2Vanaf(1234); // WHERE lichaamsoppervlakte_in_m2_vanaf = 1234
     * $query->filterByLichaamsoppervlakteInM2Vanaf(array(12, 34)); // WHERE lichaamsoppervlakte_in_m2_vanaf IN (12, 34)
     * $query->filterByLichaamsoppervlakteInM2Vanaf(array('min' => 12)); // WHERE lichaamsoppervlakte_in_m2_vanaf >= 12
     * $query->filterByLichaamsoppervlakteInM2Vanaf(array('max' => 12)); // WHERE lichaamsoppervlakte_in_m2_vanaf <= 12
     * </code>
     *
     * @param     mixed $lichaamsoppervlakteInM2Vanaf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCategorieenQuery The current query, for fluid interface
     */
    public function filterByLichaamsoppervlakteInM2Vanaf($lichaamsoppervlakteInM2Vanaf = null, $comparison = null)
    {
        if (is_array($lichaamsoppervlakteInM2Vanaf)) {
            $useMinMax = false;
            if (isset($lichaamsoppervlakteInM2Vanaf['min'])) {
                $this->addUsingAlias(GsCategorieenPeer::LICHAAMSOPPERVLAKTE_IN_M2_VANAF, $lichaamsoppervlakteInM2Vanaf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lichaamsoppervlakteInM2Vanaf['max'])) {
                $this->addUsingAlias(GsCategorieenPeer::LICHAAMSOPPERVLAKTE_IN_M2_VANAF, $lichaamsoppervlakteInM2Vanaf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCategorieenPeer::LICHAAMSOPPERVLAKTE_IN_M2_VANAF, $lichaamsoppervlakteInM2Vanaf, $comparison);
    }

    /**
     * Filter the query on the lichaamsoppervlakte_in_m2_tot column
     *
     * Example usage:
     * <code>
     * $query->filterByLichaamsoppervlakteInM2Tot(1234); // WHERE lichaamsoppervlakte_in_m2_tot = 1234
     * $query->filterByLichaamsoppervlakteInM2Tot(array(12, 34)); // WHERE lichaamsoppervlakte_in_m2_tot IN (12, 34)
     * $query->filterByLichaamsoppervlakteInM2Tot(array('min' => 12)); // WHERE lichaamsoppervlakte_in_m2_tot >= 12
     * $query->filterByLichaamsoppervlakteInM2Tot(array('max' => 12)); // WHERE lichaamsoppervlakte_in_m2_tot <= 12
     * </code>
     *
     * @param     mixed $lichaamsoppervlakteInM2Tot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCategorieenQuery The current query, for fluid interface
     */
    public function filterByLichaamsoppervlakteInM2Tot($lichaamsoppervlakteInM2Tot = null, $comparison = null)
    {
        if (is_array($lichaamsoppervlakteInM2Tot)) {
            $useMinMax = false;
            if (isset($lichaamsoppervlakteInM2Tot['min'])) {
                $this->addUsingAlias(GsCategorieenPeer::LICHAAMSOPPERVLAKTE_IN_M2_TOT, $lichaamsoppervlakteInM2Tot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lichaamsoppervlakteInM2Tot['max'])) {
                $this->addUsingAlias(GsCategorieenPeer::LICHAAMSOPPERVLAKTE_IN_M2_TOT, $lichaamsoppervlakteInM2Tot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCategorieenPeer::LICHAAMSOPPERVLAKTE_IN_M2_TOT, $lichaamsoppervlakteInM2Tot, $comparison);
    }

    /**
     * Filter the query on the frequentie_aantal column
     *
     * Example usage:
     * <code>
     * $query->filterByFrequentieAantal(1234); // WHERE frequentie_aantal = 1234
     * $query->filterByFrequentieAantal(array(12, 34)); // WHERE frequentie_aantal IN (12, 34)
     * $query->filterByFrequentieAantal(array('min' => 12)); // WHERE frequentie_aantal >= 12
     * $query->filterByFrequentieAantal(array('max' => 12)); // WHERE frequentie_aantal <= 12
     * </code>
     *
     * @param     mixed $frequentieAantal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCategorieenQuery The current query, for fluid interface
     */
    public function filterByFrequentieAantal($frequentieAantal = null, $comparison = null)
    {
        if (is_array($frequentieAantal)) {
            $useMinMax = false;
            if (isset($frequentieAantal['min'])) {
                $this->addUsingAlias(GsCategorieenPeer::FREQUENTIE_AANTAL, $frequentieAantal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($frequentieAantal['max'])) {
                $this->addUsingAlias(GsCategorieenPeer::FREQUENTIE_AANTAL, $frequentieAantal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCategorieenPeer::FREQUENTIE_AANTAL, $frequentieAantal, $comparison);
    }

    /**
     * Filter the query on the frequentie_tijdseenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByFrequentieTijdseenheid(1234); // WHERE frequentie_tijdseenheid = 1234
     * $query->filterByFrequentieTijdseenheid(array(12, 34)); // WHERE frequentie_tijdseenheid IN (12, 34)
     * $query->filterByFrequentieTijdseenheid(array('min' => 12)); // WHERE frequentie_tijdseenheid >= 12
     * $query->filterByFrequentieTijdseenheid(array('max' => 12)); // WHERE frequentie_tijdseenheid <= 12
     * </code>
     *
     * @param     mixed $frequentieTijdseenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCategorieenQuery The current query, for fluid interface
     */
    public function filterByFrequentieTijdseenheid($frequentieTijdseenheid = null, $comparison = null)
    {
        if (is_array($frequentieTijdseenheid)) {
            $useMinMax = false;
            if (isset($frequentieTijdseenheid['min'])) {
                $this->addUsingAlias(GsCategorieenPeer::FREQUENTIE_TIJDSEENHEID, $frequentieTijdseenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($frequentieTijdseenheid['max'])) {
                $this->addUsingAlias(GsCategorieenPeer::FREQUENTIE_TIJDSEENHEID, $frequentieTijdseenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCategorieenPeer::FREQUENTIE_TIJDSEENHEID, $frequentieTijdseenheid, $comparison);
    }

    /**
     * Filter the query on the basisset_voor_denekamp_berekening column
     *
     * Example usage:
     * <code>
     * $query->filterByBasissetVoorDenekampBerekening(1234); // WHERE basisset_voor_denekamp_berekening = 1234
     * $query->filterByBasissetVoorDenekampBerekening(array(12, 34)); // WHERE basisset_voor_denekamp_berekening IN (12, 34)
     * $query->filterByBasissetVoorDenekampBerekening(array('min' => 12)); // WHERE basisset_voor_denekamp_berekening >= 12
     * $query->filterByBasissetVoorDenekampBerekening(array('max' => 12)); // WHERE basisset_voor_denekamp_berekening <= 12
     * </code>
     *
     * @param     mixed $basissetVoorDenekampBerekening The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCategorieenQuery The current query, for fluid interface
     */
    public function filterByBasissetVoorDenekampBerekening($basissetVoorDenekampBerekening = null, $comparison = null)
    {
        if (is_array($basissetVoorDenekampBerekening)) {
            $useMinMax = false;
            if (isset($basissetVoorDenekampBerekening['min'])) {
                $this->addUsingAlias(GsCategorieenPeer::BASISSET_VOOR_DENEKAMP_BEREKENING, $basissetVoorDenekampBerekening['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($basissetVoorDenekampBerekening['max'])) {
                $this->addUsingAlias(GsCategorieenPeer::BASISSET_VOOR_DENEKAMP_BEREKENING, $basissetVoorDenekampBerekening['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCategorieenPeer::BASISSET_VOOR_DENEKAMP_BEREKENING, $basissetVoorDenekampBerekening, $comparison);
    }

    /**
     * Filter the query on the dosisnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByDosisnummer(1234); // WHERE dosisnummer = 1234
     * $query->filterByDosisnummer(array(12, 34)); // WHERE dosisnummer IN (12, 34)
     * $query->filterByDosisnummer(array('min' => 12)); // WHERE dosisnummer >= 12
     * $query->filterByDosisnummer(array('max' => 12)); // WHERE dosisnummer <= 12
     * </code>
     *
     * @param     mixed $dosisnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCategorieenQuery The current query, for fluid interface
     */
    public function filterByDosisnummer($dosisnummer = null, $comparison = null)
    {
        if (is_array($dosisnummer)) {
            $useMinMax = false;
            if (isset($dosisnummer['min'])) {
                $this->addUsingAlias(GsCategorieenPeer::DOSISNUMMER, $dosisnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dosisnummer['max'])) {
                $this->addUsingAlias(GsCategorieenPeer::DOSISNUMMER, $dosisnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCategorieenPeer::DOSISNUMMER, $dosisnummer, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsCategorieen $gsCategorieen Object to remove from the list of results
     *
     * @return GsCategorieenQuery The current query, for fluid interface
     */
    public function prune($gsCategorieen = null)
    {
        if ($gsCategorieen) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsCategorieenPeer::DOSISCATEGORIENUMMER), $gsCategorieen->getDosiscategorienummer(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsCategorieenPeer::IDENTIFICEREND_RECORDNUMMER), $gsCategorieen->getIdentificerendRecordnummer(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
