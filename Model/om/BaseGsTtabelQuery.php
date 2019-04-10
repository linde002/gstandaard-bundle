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
use PharmaIntelligence\GstandaardBundle\Model\GsTtabel;
use PharmaIntelligence\GstandaardBundle\Model\GsTtabelPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsTtabelQuery;

/**
 * @method GsTtabelQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsTtabelQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsTtabelQuery orderByUniekNummerPerTijdseenheid($order = Criteria::ASC) Order by the uniek_nummer_per_tijdseenheid column
 * @method GsTtabelQuery orderByMemocodeTijdseenheid($order = Criteria::ASC) Order by the memocode_tijdseenheid column
 * @method GsTtabelQuery orderByOmschrijvingTijdseenheid($order = Criteria::ASC) Order by the omschrijving_tijdseenheid column
 * @method GsTtabelQuery orderByRegistratiedatumGstandaard($order = Criteria::ASC) Order by the registratiedatum_gstandaard column
 * @method GsTtabelQuery orderByVersienummerWciaTabellenEersteOpname($order = Criteria::ASC) Order by the versienummer_wcia_tabellen_eerste_opname column
 * @method GsTtabelQuery orderByVersienummerWciaTabellenLaatsteWijziging($order = Criteria::ASC) Order by the versienummer_wcia_tabellen_laatste_wijziging column
 * @method GsTtabelQuery orderByVersienummerWciaTabellenVervallen($order = Criteria::ASC) Order by the versienummer_wcia_tabellen_vervallen column
 * @method GsTtabelQuery orderByOmrekeningsfactorNaarAantalDagen($order = Criteria::ASC) Order by the omrekeningsfactor_naar_aantal_dagen column
 *
 * @method GsTtabelQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsTtabelQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsTtabelQuery groupByUniekNummerPerTijdseenheid() Group by the uniek_nummer_per_tijdseenheid column
 * @method GsTtabelQuery groupByMemocodeTijdseenheid() Group by the memocode_tijdseenheid column
 * @method GsTtabelQuery groupByOmschrijvingTijdseenheid() Group by the omschrijving_tijdseenheid column
 * @method GsTtabelQuery groupByRegistratiedatumGstandaard() Group by the registratiedatum_gstandaard column
 * @method GsTtabelQuery groupByVersienummerWciaTabellenEersteOpname() Group by the versienummer_wcia_tabellen_eerste_opname column
 * @method GsTtabelQuery groupByVersienummerWciaTabellenLaatsteWijziging() Group by the versienummer_wcia_tabellen_laatste_wijziging column
 * @method GsTtabelQuery groupByVersienummerWciaTabellenVervallen() Group by the versienummer_wcia_tabellen_vervallen column
 * @method GsTtabelQuery groupByOmrekeningsfactorNaarAantalDagen() Group by the omrekeningsfactor_naar_aantal_dagen column
 *
 * @method GsTtabelQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsTtabelQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsTtabelQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsTtabel findOne(PropelPDO $con = null) Return the first GsTtabel matching the query
 * @method GsTtabel findOneOrCreate(PropelPDO $con = null) Return the first GsTtabel matching the query, or a new GsTtabel object populated from the query conditions when no match is found
 *
 * @method GsTtabel findOneByBestandnummer(int $bestandnummer) Return the first GsTtabel filtered by the bestandnummer column
 * @method GsTtabel findOneByMutatiekode(int $mutatiekode) Return the first GsTtabel filtered by the mutatiekode column
 * @method GsTtabel findOneByMemocodeTijdseenheid(string $memocode_tijdseenheid) Return the first GsTtabel filtered by the memocode_tijdseenheid column
 * @method GsTtabel findOneByOmschrijvingTijdseenheid(string $omschrijving_tijdseenheid) Return the first GsTtabel filtered by the omschrijving_tijdseenheid column
 * @method GsTtabel findOneByRegistratiedatumGstandaard(string $registratiedatum_gstandaard) Return the first GsTtabel filtered by the registratiedatum_gstandaard column
 * @method GsTtabel findOneByVersienummerWciaTabellenEersteOpname(int $versienummer_wcia_tabellen_eerste_opname) Return the first GsTtabel filtered by the versienummer_wcia_tabellen_eerste_opname column
 * @method GsTtabel findOneByVersienummerWciaTabellenLaatsteWijziging(int $versienummer_wcia_tabellen_laatste_wijziging) Return the first GsTtabel filtered by the versienummer_wcia_tabellen_laatste_wijziging column
 * @method GsTtabel findOneByVersienummerWciaTabellenVervallen(int $versienummer_wcia_tabellen_vervallen) Return the first GsTtabel filtered by the versienummer_wcia_tabellen_vervallen column
 * @method GsTtabel findOneByOmrekeningsfactorNaarAantalDagen(string $omrekeningsfactor_naar_aantal_dagen) Return the first GsTtabel filtered by the omrekeningsfactor_naar_aantal_dagen column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsTtabel objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsTtabel objects filtered by the mutatiekode column
 * @method array findByUniekNummerPerTijdseenheid(int $uniek_nummer_per_tijdseenheid) Return GsTtabel objects filtered by the uniek_nummer_per_tijdseenheid column
 * @method array findByMemocodeTijdseenheid(string $memocode_tijdseenheid) Return GsTtabel objects filtered by the memocode_tijdseenheid column
 * @method array findByOmschrijvingTijdseenheid(string $omschrijving_tijdseenheid) Return GsTtabel objects filtered by the omschrijving_tijdseenheid column
 * @method array findByRegistratiedatumGstandaard(string $registratiedatum_gstandaard) Return GsTtabel objects filtered by the registratiedatum_gstandaard column
 * @method array findByVersienummerWciaTabellenEersteOpname(int $versienummer_wcia_tabellen_eerste_opname) Return GsTtabel objects filtered by the versienummer_wcia_tabellen_eerste_opname column
 * @method array findByVersienummerWciaTabellenLaatsteWijziging(int $versienummer_wcia_tabellen_laatste_wijziging) Return GsTtabel objects filtered by the versienummer_wcia_tabellen_laatste_wijziging column
 * @method array findByVersienummerWciaTabellenVervallen(int $versienummer_wcia_tabellen_vervallen) Return GsTtabel objects filtered by the versienummer_wcia_tabellen_vervallen column
 * @method array findByOmrekeningsfactorNaarAantalDagen(string $omrekeningsfactor_naar_aantal_dagen) Return GsTtabel objects filtered by the omrekeningsfactor_naar_aantal_dagen column
 */
abstract class BaseGsTtabelQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsTtabelQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsTtabel';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsTtabelQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsTtabelQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsTtabelQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsTtabelQuery) {
            return $criteria;
        }
        $query = new GsTtabelQuery(null, null, $modelAlias);

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
     * @return   GsTtabel|GsTtabel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsTtabelPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsTtabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsTtabel A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByUniekNummerPerTijdseenheid($key, $con = null)
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
     * @return                 GsTtabel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `uniek_nummer_per_tijdseenheid`, `memocode_tijdseenheid`, `omschrijving_tijdseenheid`, `registratiedatum_gstandaard`, `versienummer_wcia_tabellen_eerste_opname`, `versienummer_wcia_tabellen_laatste_wijziging`, `versienummer_wcia_tabellen_vervallen`, `omrekeningsfactor_naar_aantal_dagen` FROM `gs_ttabel` WHERE `uniek_nummer_per_tijdseenheid` = :p0';
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
            $obj = new GsTtabel();
            $obj->hydrate($row);
            GsTtabelPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsTtabel|GsTtabel[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsTtabel[]|mixed the list of results, formatted by the current formatter
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
     * @return GsTtabelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsTtabelPeer::UNIEK_NUMMER_PER_TIJDSEENHEID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsTtabelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsTtabelPeer::UNIEK_NUMMER_PER_TIJDSEENHEID, $keys, Criteria::IN);
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
     * @return GsTtabelQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsTtabelPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsTtabelPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTtabelPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsTtabelQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsTtabelPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsTtabelPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTtabelPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the uniek_nummer_per_tijdseenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByUniekNummerPerTijdseenheid(1234); // WHERE uniek_nummer_per_tijdseenheid = 1234
     * $query->filterByUniekNummerPerTijdseenheid(array(12, 34)); // WHERE uniek_nummer_per_tijdseenheid IN (12, 34)
     * $query->filterByUniekNummerPerTijdseenheid(array('min' => 12)); // WHERE uniek_nummer_per_tijdseenheid >= 12
     * $query->filterByUniekNummerPerTijdseenheid(array('max' => 12)); // WHERE uniek_nummer_per_tijdseenheid <= 12
     * </code>
     *
     * @param     mixed $uniekNummerPerTijdseenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsTtabelQuery The current query, for fluid interface
     */
    public function filterByUniekNummerPerTijdseenheid($uniekNummerPerTijdseenheid = null, $comparison = null)
    {
        if (is_array($uniekNummerPerTijdseenheid)) {
            $useMinMax = false;
            if (isset($uniekNummerPerTijdseenheid['min'])) {
                $this->addUsingAlias(GsTtabelPeer::UNIEK_NUMMER_PER_TIJDSEENHEID, $uniekNummerPerTijdseenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uniekNummerPerTijdseenheid['max'])) {
                $this->addUsingAlias(GsTtabelPeer::UNIEK_NUMMER_PER_TIJDSEENHEID, $uniekNummerPerTijdseenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTtabelPeer::UNIEK_NUMMER_PER_TIJDSEENHEID, $uniekNummerPerTijdseenheid, $comparison);
    }

    /**
     * Filter the query on the memocode_tijdseenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByMemocodeTijdseenheid('fooValue');   // WHERE memocode_tijdseenheid = 'fooValue'
     * $query->filterByMemocodeTijdseenheid('%fooValue%'); // WHERE memocode_tijdseenheid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $memocodeTijdseenheid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsTtabelQuery The current query, for fluid interface
     */
    public function filterByMemocodeTijdseenheid($memocodeTijdseenheid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($memocodeTijdseenheid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $memocodeTijdseenheid)) {
                $memocodeTijdseenheid = str_replace('*', '%', $memocodeTijdseenheid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsTtabelPeer::MEMOCODE_TIJDSEENHEID, $memocodeTijdseenheid, $comparison);
    }

    /**
     * Filter the query on the omschrijving_tijdseenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByOmschrijvingTijdseenheid('fooValue');   // WHERE omschrijving_tijdseenheid = 'fooValue'
     * $query->filterByOmschrijvingTijdseenheid('%fooValue%'); // WHERE omschrijving_tijdseenheid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $omschrijvingTijdseenheid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsTtabelQuery The current query, for fluid interface
     */
    public function filterByOmschrijvingTijdseenheid($omschrijvingTijdseenheid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($omschrijvingTijdseenheid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $omschrijvingTijdseenheid)) {
                $omschrijvingTijdseenheid = str_replace('*', '%', $omschrijvingTijdseenheid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsTtabelPeer::OMSCHRIJVING_TIJDSEENHEID, $omschrijvingTijdseenheid, $comparison);
    }

    /**
     * Filter the query on the registratiedatum_gstandaard column
     *
     * Example usage:
     * <code>
     * $query->filterByRegistratiedatumGstandaard('fooValue');   // WHERE registratiedatum_gstandaard = 'fooValue'
     * $query->filterByRegistratiedatumGstandaard('%fooValue%'); // WHERE registratiedatum_gstandaard LIKE '%fooValue%'
     * </code>
     *
     * @param     string $registratiedatumGstandaard The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsTtabelQuery The current query, for fluid interface
     */
    public function filterByRegistratiedatumGstandaard($registratiedatumGstandaard = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($registratiedatumGstandaard)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $registratiedatumGstandaard)) {
                $registratiedatumGstandaard = str_replace('*', '%', $registratiedatumGstandaard);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsTtabelPeer::REGISTRATIEDATUM_GSTANDAARD, $registratiedatumGstandaard, $comparison);
    }

    /**
     * Filter the query on the versienummer_wcia_tabellen_eerste_opname column
     *
     * Example usage:
     * <code>
     * $query->filterByVersienummerWciaTabellenEersteOpname(1234); // WHERE versienummer_wcia_tabellen_eerste_opname = 1234
     * $query->filterByVersienummerWciaTabellenEersteOpname(array(12, 34)); // WHERE versienummer_wcia_tabellen_eerste_opname IN (12, 34)
     * $query->filterByVersienummerWciaTabellenEersteOpname(array('min' => 12)); // WHERE versienummer_wcia_tabellen_eerste_opname >= 12
     * $query->filterByVersienummerWciaTabellenEersteOpname(array('max' => 12)); // WHERE versienummer_wcia_tabellen_eerste_opname <= 12
     * </code>
     *
     * @param     mixed $versienummerWciaTabellenEersteOpname The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsTtabelQuery The current query, for fluid interface
     */
    public function filterByVersienummerWciaTabellenEersteOpname($versienummerWciaTabellenEersteOpname = null, $comparison = null)
    {
        if (is_array($versienummerWciaTabellenEersteOpname)) {
            $useMinMax = false;
            if (isset($versienummerWciaTabellenEersteOpname['min'])) {
                $this->addUsingAlias(GsTtabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME, $versienummerWciaTabellenEersteOpname['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($versienummerWciaTabellenEersteOpname['max'])) {
                $this->addUsingAlias(GsTtabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME, $versienummerWciaTabellenEersteOpname['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTtabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME, $versienummerWciaTabellenEersteOpname, $comparison);
    }

    /**
     * Filter the query on the versienummer_wcia_tabellen_laatste_wijziging column
     *
     * Example usage:
     * <code>
     * $query->filterByVersienummerWciaTabellenLaatsteWijziging(1234); // WHERE versienummer_wcia_tabellen_laatste_wijziging = 1234
     * $query->filterByVersienummerWciaTabellenLaatsteWijziging(array(12, 34)); // WHERE versienummer_wcia_tabellen_laatste_wijziging IN (12, 34)
     * $query->filterByVersienummerWciaTabellenLaatsteWijziging(array('min' => 12)); // WHERE versienummer_wcia_tabellen_laatste_wijziging >= 12
     * $query->filterByVersienummerWciaTabellenLaatsteWijziging(array('max' => 12)); // WHERE versienummer_wcia_tabellen_laatste_wijziging <= 12
     * </code>
     *
     * @param     mixed $versienummerWciaTabellenLaatsteWijziging The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsTtabelQuery The current query, for fluid interface
     */
    public function filterByVersienummerWciaTabellenLaatsteWijziging($versienummerWciaTabellenLaatsteWijziging = null, $comparison = null)
    {
        if (is_array($versienummerWciaTabellenLaatsteWijziging)) {
            $useMinMax = false;
            if (isset($versienummerWciaTabellenLaatsteWijziging['min'])) {
                $this->addUsingAlias(GsTtabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING, $versienummerWciaTabellenLaatsteWijziging['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($versienummerWciaTabellenLaatsteWijziging['max'])) {
                $this->addUsingAlias(GsTtabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING, $versienummerWciaTabellenLaatsteWijziging['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTtabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING, $versienummerWciaTabellenLaatsteWijziging, $comparison);
    }

    /**
     * Filter the query on the versienummer_wcia_tabellen_vervallen column
     *
     * Example usage:
     * <code>
     * $query->filterByVersienummerWciaTabellenVervallen(1234); // WHERE versienummer_wcia_tabellen_vervallen = 1234
     * $query->filterByVersienummerWciaTabellenVervallen(array(12, 34)); // WHERE versienummer_wcia_tabellen_vervallen IN (12, 34)
     * $query->filterByVersienummerWciaTabellenVervallen(array('min' => 12)); // WHERE versienummer_wcia_tabellen_vervallen >= 12
     * $query->filterByVersienummerWciaTabellenVervallen(array('max' => 12)); // WHERE versienummer_wcia_tabellen_vervallen <= 12
     * </code>
     *
     * @param     mixed $versienummerWciaTabellenVervallen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsTtabelQuery The current query, for fluid interface
     */
    public function filterByVersienummerWciaTabellenVervallen($versienummerWciaTabellenVervallen = null, $comparison = null)
    {
        if (is_array($versienummerWciaTabellenVervallen)) {
            $useMinMax = false;
            if (isset($versienummerWciaTabellenVervallen['min'])) {
                $this->addUsingAlias(GsTtabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN, $versienummerWciaTabellenVervallen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($versienummerWciaTabellenVervallen['max'])) {
                $this->addUsingAlias(GsTtabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN, $versienummerWciaTabellenVervallen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTtabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN, $versienummerWciaTabellenVervallen, $comparison);
    }

    /**
     * Filter the query on the omrekeningsfactor_naar_aantal_dagen column
     *
     * Example usage:
     * <code>
     * $query->filterByOmrekeningsfactorNaarAantalDagen(1234); // WHERE omrekeningsfactor_naar_aantal_dagen = 1234
     * $query->filterByOmrekeningsfactorNaarAantalDagen(array(12, 34)); // WHERE omrekeningsfactor_naar_aantal_dagen IN (12, 34)
     * $query->filterByOmrekeningsfactorNaarAantalDagen(array('min' => 12)); // WHERE omrekeningsfactor_naar_aantal_dagen >= 12
     * $query->filterByOmrekeningsfactorNaarAantalDagen(array('max' => 12)); // WHERE omrekeningsfactor_naar_aantal_dagen <= 12
     * </code>
     *
     * @param     mixed $omrekeningsfactorNaarAantalDagen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsTtabelQuery The current query, for fluid interface
     */
    public function filterByOmrekeningsfactorNaarAantalDagen($omrekeningsfactorNaarAantalDagen = null, $comparison = null)
    {
        if (is_array($omrekeningsfactorNaarAantalDagen)) {
            $useMinMax = false;
            if (isset($omrekeningsfactorNaarAantalDagen['min'])) {
                $this->addUsingAlias(GsTtabelPeer::OMREKENINGSFACTOR_NAAR_AANTAL_DAGEN, $omrekeningsfactorNaarAantalDagen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($omrekeningsfactorNaarAantalDagen['max'])) {
                $this->addUsingAlias(GsTtabelPeer::OMREKENINGSFACTOR_NAAR_AANTAL_DAGEN, $omrekeningsfactorNaarAantalDagen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTtabelPeer::OMREKENINGSFACTOR_NAAR_AANTAL_DAGEN, $omrekeningsfactorNaarAantalDagen, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsTtabel $gsTtabel Object to remove from the list of results
     *
     * @return GsTtabelQuery The current query, for fluid interface
     */
    public function prune($gsTtabel = null)
    {
        if ($gsTtabel) {
            $this->addUsingAlias(GsTtabelPeer::UNIEK_NUMMER_PER_TIJDSEENHEID, $gsTtabel->getUniekNummerPerTijdseenheid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
