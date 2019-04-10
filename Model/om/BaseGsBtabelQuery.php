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
use PharmaIntelligence\GstandaardBundle\Model\GsBtabel;
use PharmaIntelligence\GstandaardBundle\Model\GsBtabelPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsBtabelQuery;

/**
 * @method GsBtabelQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsBtabelQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsBtabelQuery orderByUniekNummerAanvullendeTekst($order = Criteria::ASC) Order by the uniek_nummer_aanvullende_tekst column
 * @method GsBtabelQuery orderByMemocodeAanvullendeTekst($order = Criteria::ASC) Order by the memocode_aanvullende_tekst column
 * @method GsBtabelQuery orderByOmschrijvingAanvullendeTekst($order = Criteria::ASC) Order by the omschrijving_aanvullende_tekst column
 * @method GsBtabelQuery orderByRegistratiedatumGstandaard($order = Criteria::ASC) Order by the registratiedatum_gstandaard column
 * @method GsBtabelQuery orderByVersienummerWciaTabellenEersteOpname($order = Criteria::ASC) Order by the versienummer_wcia_tabellen_eerste_opname column
 * @method GsBtabelQuery orderByVersienummerWciaTabellenLaatsteWijziging($order = Criteria::ASC) Order by the versienummer_wcia_tabellen_laatste_wijziging column
 * @method GsBtabelQuery orderByVersienummerWciaTabellenVervallen($order = Criteria::ASC) Order by the versienummer_wcia_tabellen_vervallen column
 * @method GsBtabelQuery orderByLaagsteFrequentieDosering($order = Criteria::ASC) Order by the laagste_frequentie_dosering column
 * @method GsBtabelQuery orderByHoogsteFrequentieDosering($order = Criteria::ASC) Order by the hoogste_frequentie_dosering column
 * @method GsBtabelQuery orderByLaagsteKeerdosering($order = Criteria::ASC) Order by the laagste_keerdosering column
 * @method GsBtabelQuery orderByHoogsteKeerdosering($order = Criteria::ASC) Order by the hoogste_keerdosering column
 * @method GsBtabelQuery orderByOmrekenfactorTheoretischeDuur($order = Criteria::ASC) Order by the omrekenfactor_theoretische_duur column
 *
 * @method GsBtabelQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsBtabelQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsBtabelQuery groupByUniekNummerAanvullendeTekst() Group by the uniek_nummer_aanvullende_tekst column
 * @method GsBtabelQuery groupByMemocodeAanvullendeTekst() Group by the memocode_aanvullende_tekst column
 * @method GsBtabelQuery groupByOmschrijvingAanvullendeTekst() Group by the omschrijving_aanvullende_tekst column
 * @method GsBtabelQuery groupByRegistratiedatumGstandaard() Group by the registratiedatum_gstandaard column
 * @method GsBtabelQuery groupByVersienummerWciaTabellenEersteOpname() Group by the versienummer_wcia_tabellen_eerste_opname column
 * @method GsBtabelQuery groupByVersienummerWciaTabellenLaatsteWijziging() Group by the versienummer_wcia_tabellen_laatste_wijziging column
 * @method GsBtabelQuery groupByVersienummerWciaTabellenVervallen() Group by the versienummer_wcia_tabellen_vervallen column
 * @method GsBtabelQuery groupByLaagsteFrequentieDosering() Group by the laagste_frequentie_dosering column
 * @method GsBtabelQuery groupByHoogsteFrequentieDosering() Group by the hoogste_frequentie_dosering column
 * @method GsBtabelQuery groupByLaagsteKeerdosering() Group by the laagste_keerdosering column
 * @method GsBtabelQuery groupByHoogsteKeerdosering() Group by the hoogste_keerdosering column
 * @method GsBtabelQuery groupByOmrekenfactorTheoretischeDuur() Group by the omrekenfactor_theoretische_duur column
 *
 * @method GsBtabelQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsBtabelQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsBtabelQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsBtabel findOne(PropelPDO $con = null) Return the first GsBtabel matching the query
 * @method GsBtabel findOneOrCreate(PropelPDO $con = null) Return the first GsBtabel matching the query, or a new GsBtabel object populated from the query conditions when no match is found
 *
 * @method GsBtabel findOneByBestandnummer(int $bestandnummer) Return the first GsBtabel filtered by the bestandnummer column
 * @method GsBtabel findOneByMutatiekode(int $mutatiekode) Return the first GsBtabel filtered by the mutatiekode column
 * @method GsBtabel findOneByMemocodeAanvullendeTekst(string $memocode_aanvullende_tekst) Return the first GsBtabel filtered by the memocode_aanvullende_tekst column
 * @method GsBtabel findOneByOmschrijvingAanvullendeTekst(string $omschrijving_aanvullende_tekst) Return the first GsBtabel filtered by the omschrijving_aanvullende_tekst column
 * @method GsBtabel findOneByRegistratiedatumGstandaard(string $registratiedatum_gstandaard) Return the first GsBtabel filtered by the registratiedatum_gstandaard column
 * @method GsBtabel findOneByVersienummerWciaTabellenEersteOpname(int $versienummer_wcia_tabellen_eerste_opname) Return the first GsBtabel filtered by the versienummer_wcia_tabellen_eerste_opname column
 * @method GsBtabel findOneByVersienummerWciaTabellenLaatsteWijziging(int $versienummer_wcia_tabellen_laatste_wijziging) Return the first GsBtabel filtered by the versienummer_wcia_tabellen_laatste_wijziging column
 * @method GsBtabel findOneByVersienummerWciaTabellenVervallen(int $versienummer_wcia_tabellen_vervallen) Return the first GsBtabel filtered by the versienummer_wcia_tabellen_vervallen column
 * @method GsBtabel findOneByLaagsteFrequentieDosering(string $laagste_frequentie_dosering) Return the first GsBtabel filtered by the laagste_frequentie_dosering column
 * @method GsBtabel findOneByHoogsteFrequentieDosering(string $hoogste_frequentie_dosering) Return the first GsBtabel filtered by the hoogste_frequentie_dosering column
 * @method GsBtabel findOneByLaagsteKeerdosering(string $laagste_keerdosering) Return the first GsBtabel filtered by the laagste_keerdosering column
 * @method GsBtabel findOneByHoogsteKeerdosering(string $hoogste_keerdosering) Return the first GsBtabel filtered by the hoogste_keerdosering column
 * @method GsBtabel findOneByOmrekenfactorTheoretischeDuur(int $omrekenfactor_theoretische_duur) Return the first GsBtabel filtered by the omrekenfactor_theoretische_duur column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsBtabel objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsBtabel objects filtered by the mutatiekode column
 * @method array findByUniekNummerAanvullendeTekst(int $uniek_nummer_aanvullende_tekst) Return GsBtabel objects filtered by the uniek_nummer_aanvullende_tekst column
 * @method array findByMemocodeAanvullendeTekst(string $memocode_aanvullende_tekst) Return GsBtabel objects filtered by the memocode_aanvullende_tekst column
 * @method array findByOmschrijvingAanvullendeTekst(string $omschrijving_aanvullende_tekst) Return GsBtabel objects filtered by the omschrijving_aanvullende_tekst column
 * @method array findByRegistratiedatumGstandaard(string $registratiedatum_gstandaard) Return GsBtabel objects filtered by the registratiedatum_gstandaard column
 * @method array findByVersienummerWciaTabellenEersteOpname(int $versienummer_wcia_tabellen_eerste_opname) Return GsBtabel objects filtered by the versienummer_wcia_tabellen_eerste_opname column
 * @method array findByVersienummerWciaTabellenLaatsteWijziging(int $versienummer_wcia_tabellen_laatste_wijziging) Return GsBtabel objects filtered by the versienummer_wcia_tabellen_laatste_wijziging column
 * @method array findByVersienummerWciaTabellenVervallen(int $versienummer_wcia_tabellen_vervallen) Return GsBtabel objects filtered by the versienummer_wcia_tabellen_vervallen column
 * @method array findByLaagsteFrequentieDosering(string $laagste_frequentie_dosering) Return GsBtabel objects filtered by the laagste_frequentie_dosering column
 * @method array findByHoogsteFrequentieDosering(string $hoogste_frequentie_dosering) Return GsBtabel objects filtered by the hoogste_frequentie_dosering column
 * @method array findByLaagsteKeerdosering(string $laagste_keerdosering) Return GsBtabel objects filtered by the laagste_keerdosering column
 * @method array findByHoogsteKeerdosering(string $hoogste_keerdosering) Return GsBtabel objects filtered by the hoogste_keerdosering column
 * @method array findByOmrekenfactorTheoretischeDuur(int $omrekenfactor_theoretische_duur) Return GsBtabel objects filtered by the omrekenfactor_theoretische_duur column
 */
abstract class BaseGsBtabelQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsBtabelQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsBtabel';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsBtabelQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsBtabelQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsBtabelQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsBtabelQuery) {
            return $criteria;
        }
        $query = new GsBtabelQuery(null, null, $modelAlias);

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
     * @return   GsBtabel|GsBtabel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsBtabelPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsBtabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsBtabel A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByUniekNummerAanvullendeTekst($key, $con = null)
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
     * @return                 GsBtabel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `uniek_nummer_aanvullende_tekst`, `memocode_aanvullende_tekst`, `omschrijving_aanvullende_tekst`, `registratiedatum_gstandaard`, `versienummer_wcia_tabellen_eerste_opname`, `versienummer_wcia_tabellen_laatste_wijziging`, `versienummer_wcia_tabellen_vervallen`, `laagste_frequentie_dosering`, `hoogste_frequentie_dosering`, `laagste_keerdosering`, `hoogste_keerdosering`, `omrekenfactor_theoretische_duur` FROM `gs_btabel` WHERE `uniek_nummer_aanvullende_tekst` = :p0';
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
            $obj = new GsBtabel();
            $obj->hydrate($row);
            GsBtabelPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsBtabel|GsBtabel[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsBtabel[]|mixed the list of results, formatted by the current formatter
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
     * @return GsBtabelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsBtabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsBtabelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsBtabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST, $keys, Criteria::IN);
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
     * @return GsBtabelQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsBtabelPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsBtabelPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBtabelPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsBtabelQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsBtabelPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsBtabelPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBtabelPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the uniek_nummer_aanvullende_tekst column
     *
     * Example usage:
     * <code>
     * $query->filterByUniekNummerAanvullendeTekst(1234); // WHERE uniek_nummer_aanvullende_tekst = 1234
     * $query->filterByUniekNummerAanvullendeTekst(array(12, 34)); // WHERE uniek_nummer_aanvullende_tekst IN (12, 34)
     * $query->filterByUniekNummerAanvullendeTekst(array('min' => 12)); // WHERE uniek_nummer_aanvullende_tekst >= 12
     * $query->filterByUniekNummerAanvullendeTekst(array('max' => 12)); // WHERE uniek_nummer_aanvullende_tekst <= 12
     * </code>
     *
     * @param     mixed $uniekNummerAanvullendeTekst The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBtabelQuery The current query, for fluid interface
     */
    public function filterByUniekNummerAanvullendeTekst($uniekNummerAanvullendeTekst = null, $comparison = null)
    {
        if (is_array($uniekNummerAanvullendeTekst)) {
            $useMinMax = false;
            if (isset($uniekNummerAanvullendeTekst['min'])) {
                $this->addUsingAlias(GsBtabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST, $uniekNummerAanvullendeTekst['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uniekNummerAanvullendeTekst['max'])) {
                $this->addUsingAlias(GsBtabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST, $uniekNummerAanvullendeTekst['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBtabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST, $uniekNummerAanvullendeTekst, $comparison);
    }

    /**
     * Filter the query on the memocode_aanvullende_tekst column
     *
     * Example usage:
     * <code>
     * $query->filterByMemocodeAanvullendeTekst('fooValue');   // WHERE memocode_aanvullende_tekst = 'fooValue'
     * $query->filterByMemocodeAanvullendeTekst('%fooValue%'); // WHERE memocode_aanvullende_tekst LIKE '%fooValue%'
     * </code>
     *
     * @param     string $memocodeAanvullendeTekst The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBtabelQuery The current query, for fluid interface
     */
    public function filterByMemocodeAanvullendeTekst($memocodeAanvullendeTekst = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($memocodeAanvullendeTekst)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $memocodeAanvullendeTekst)) {
                $memocodeAanvullendeTekst = str_replace('*', '%', $memocodeAanvullendeTekst);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsBtabelPeer::MEMOCODE_AANVULLENDE_TEKST, $memocodeAanvullendeTekst, $comparison);
    }

    /**
     * Filter the query on the omschrijving_aanvullende_tekst column
     *
     * Example usage:
     * <code>
     * $query->filterByOmschrijvingAanvullendeTekst('fooValue');   // WHERE omschrijving_aanvullende_tekst = 'fooValue'
     * $query->filterByOmschrijvingAanvullendeTekst('%fooValue%'); // WHERE omschrijving_aanvullende_tekst LIKE '%fooValue%'
     * </code>
     *
     * @param     string $omschrijvingAanvullendeTekst The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBtabelQuery The current query, for fluid interface
     */
    public function filterByOmschrijvingAanvullendeTekst($omschrijvingAanvullendeTekst = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($omschrijvingAanvullendeTekst)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $omschrijvingAanvullendeTekst)) {
                $omschrijvingAanvullendeTekst = str_replace('*', '%', $omschrijvingAanvullendeTekst);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsBtabelPeer::OMSCHRIJVING_AANVULLENDE_TEKST, $omschrijvingAanvullendeTekst, $comparison);
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
     * @return GsBtabelQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GsBtabelPeer::REGISTRATIEDATUM_GSTANDAARD, $registratiedatumGstandaard, $comparison);
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
     * @return GsBtabelQuery The current query, for fluid interface
     */
    public function filterByVersienummerWciaTabellenEersteOpname($versienummerWciaTabellenEersteOpname = null, $comparison = null)
    {
        if (is_array($versienummerWciaTabellenEersteOpname)) {
            $useMinMax = false;
            if (isset($versienummerWciaTabellenEersteOpname['min'])) {
                $this->addUsingAlias(GsBtabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME, $versienummerWciaTabellenEersteOpname['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($versienummerWciaTabellenEersteOpname['max'])) {
                $this->addUsingAlias(GsBtabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME, $versienummerWciaTabellenEersteOpname['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBtabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME, $versienummerWciaTabellenEersteOpname, $comparison);
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
     * @return GsBtabelQuery The current query, for fluid interface
     */
    public function filterByVersienummerWciaTabellenLaatsteWijziging($versienummerWciaTabellenLaatsteWijziging = null, $comparison = null)
    {
        if (is_array($versienummerWciaTabellenLaatsteWijziging)) {
            $useMinMax = false;
            if (isset($versienummerWciaTabellenLaatsteWijziging['min'])) {
                $this->addUsingAlias(GsBtabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING, $versienummerWciaTabellenLaatsteWijziging['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($versienummerWciaTabellenLaatsteWijziging['max'])) {
                $this->addUsingAlias(GsBtabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING, $versienummerWciaTabellenLaatsteWijziging['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBtabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING, $versienummerWciaTabellenLaatsteWijziging, $comparison);
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
     * @return GsBtabelQuery The current query, for fluid interface
     */
    public function filterByVersienummerWciaTabellenVervallen($versienummerWciaTabellenVervallen = null, $comparison = null)
    {
        if (is_array($versienummerWciaTabellenVervallen)) {
            $useMinMax = false;
            if (isset($versienummerWciaTabellenVervallen['min'])) {
                $this->addUsingAlias(GsBtabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN, $versienummerWciaTabellenVervallen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($versienummerWciaTabellenVervallen['max'])) {
                $this->addUsingAlias(GsBtabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN, $versienummerWciaTabellenVervallen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBtabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN, $versienummerWciaTabellenVervallen, $comparison);
    }

    /**
     * Filter the query on the laagste_frequentie_dosering column
     *
     * Example usage:
     * <code>
     * $query->filterByLaagsteFrequentieDosering(1234); // WHERE laagste_frequentie_dosering = 1234
     * $query->filterByLaagsteFrequentieDosering(array(12, 34)); // WHERE laagste_frequentie_dosering IN (12, 34)
     * $query->filterByLaagsteFrequentieDosering(array('min' => 12)); // WHERE laagste_frequentie_dosering >= 12
     * $query->filterByLaagsteFrequentieDosering(array('max' => 12)); // WHERE laagste_frequentie_dosering <= 12
     * </code>
     *
     * @param     mixed $laagsteFrequentieDosering The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBtabelQuery The current query, for fluid interface
     */
    public function filterByLaagsteFrequentieDosering($laagsteFrequentieDosering = null, $comparison = null)
    {
        if (is_array($laagsteFrequentieDosering)) {
            $useMinMax = false;
            if (isset($laagsteFrequentieDosering['min'])) {
                $this->addUsingAlias(GsBtabelPeer::LAAGSTE_FREQUENTIE_DOSERING, $laagsteFrequentieDosering['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($laagsteFrequentieDosering['max'])) {
                $this->addUsingAlias(GsBtabelPeer::LAAGSTE_FREQUENTIE_DOSERING, $laagsteFrequentieDosering['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBtabelPeer::LAAGSTE_FREQUENTIE_DOSERING, $laagsteFrequentieDosering, $comparison);
    }

    /**
     * Filter the query on the hoogste_frequentie_dosering column
     *
     * Example usage:
     * <code>
     * $query->filterByHoogsteFrequentieDosering(1234); // WHERE hoogste_frequentie_dosering = 1234
     * $query->filterByHoogsteFrequentieDosering(array(12, 34)); // WHERE hoogste_frequentie_dosering IN (12, 34)
     * $query->filterByHoogsteFrequentieDosering(array('min' => 12)); // WHERE hoogste_frequentie_dosering >= 12
     * $query->filterByHoogsteFrequentieDosering(array('max' => 12)); // WHERE hoogste_frequentie_dosering <= 12
     * </code>
     *
     * @param     mixed $hoogsteFrequentieDosering The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBtabelQuery The current query, for fluid interface
     */
    public function filterByHoogsteFrequentieDosering($hoogsteFrequentieDosering = null, $comparison = null)
    {
        if (is_array($hoogsteFrequentieDosering)) {
            $useMinMax = false;
            if (isset($hoogsteFrequentieDosering['min'])) {
                $this->addUsingAlias(GsBtabelPeer::HOOGSTE_FREQUENTIE_DOSERING, $hoogsteFrequentieDosering['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hoogsteFrequentieDosering['max'])) {
                $this->addUsingAlias(GsBtabelPeer::HOOGSTE_FREQUENTIE_DOSERING, $hoogsteFrequentieDosering['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBtabelPeer::HOOGSTE_FREQUENTIE_DOSERING, $hoogsteFrequentieDosering, $comparison);
    }

    /**
     * Filter the query on the laagste_keerdosering column
     *
     * Example usage:
     * <code>
     * $query->filterByLaagsteKeerdosering(1234); // WHERE laagste_keerdosering = 1234
     * $query->filterByLaagsteKeerdosering(array(12, 34)); // WHERE laagste_keerdosering IN (12, 34)
     * $query->filterByLaagsteKeerdosering(array('min' => 12)); // WHERE laagste_keerdosering >= 12
     * $query->filterByLaagsteKeerdosering(array('max' => 12)); // WHERE laagste_keerdosering <= 12
     * </code>
     *
     * @param     mixed $laagsteKeerdosering The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBtabelQuery The current query, for fluid interface
     */
    public function filterByLaagsteKeerdosering($laagsteKeerdosering = null, $comparison = null)
    {
        if (is_array($laagsteKeerdosering)) {
            $useMinMax = false;
            if (isset($laagsteKeerdosering['min'])) {
                $this->addUsingAlias(GsBtabelPeer::LAAGSTE_KEERDOSERING, $laagsteKeerdosering['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($laagsteKeerdosering['max'])) {
                $this->addUsingAlias(GsBtabelPeer::LAAGSTE_KEERDOSERING, $laagsteKeerdosering['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBtabelPeer::LAAGSTE_KEERDOSERING, $laagsteKeerdosering, $comparison);
    }

    /**
     * Filter the query on the hoogste_keerdosering column
     *
     * Example usage:
     * <code>
     * $query->filterByHoogsteKeerdosering(1234); // WHERE hoogste_keerdosering = 1234
     * $query->filterByHoogsteKeerdosering(array(12, 34)); // WHERE hoogste_keerdosering IN (12, 34)
     * $query->filterByHoogsteKeerdosering(array('min' => 12)); // WHERE hoogste_keerdosering >= 12
     * $query->filterByHoogsteKeerdosering(array('max' => 12)); // WHERE hoogste_keerdosering <= 12
     * </code>
     *
     * @param     mixed $hoogsteKeerdosering The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBtabelQuery The current query, for fluid interface
     */
    public function filterByHoogsteKeerdosering($hoogsteKeerdosering = null, $comparison = null)
    {
        if (is_array($hoogsteKeerdosering)) {
            $useMinMax = false;
            if (isset($hoogsteKeerdosering['min'])) {
                $this->addUsingAlias(GsBtabelPeer::HOOGSTE_KEERDOSERING, $hoogsteKeerdosering['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hoogsteKeerdosering['max'])) {
                $this->addUsingAlias(GsBtabelPeer::HOOGSTE_KEERDOSERING, $hoogsteKeerdosering['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBtabelPeer::HOOGSTE_KEERDOSERING, $hoogsteKeerdosering, $comparison);
    }

    /**
     * Filter the query on the omrekenfactor_theoretische_duur column
     *
     * Example usage:
     * <code>
     * $query->filterByOmrekenfactorTheoretischeDuur(1234); // WHERE omrekenfactor_theoretische_duur = 1234
     * $query->filterByOmrekenfactorTheoretischeDuur(array(12, 34)); // WHERE omrekenfactor_theoretische_duur IN (12, 34)
     * $query->filterByOmrekenfactorTheoretischeDuur(array('min' => 12)); // WHERE omrekenfactor_theoretische_duur >= 12
     * $query->filterByOmrekenfactorTheoretischeDuur(array('max' => 12)); // WHERE omrekenfactor_theoretische_duur <= 12
     * </code>
     *
     * @param     mixed $omrekenfactorTheoretischeDuur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBtabelQuery The current query, for fluid interface
     */
    public function filterByOmrekenfactorTheoretischeDuur($omrekenfactorTheoretischeDuur = null, $comparison = null)
    {
        if (is_array($omrekenfactorTheoretischeDuur)) {
            $useMinMax = false;
            if (isset($omrekenfactorTheoretischeDuur['min'])) {
                $this->addUsingAlias(GsBtabelPeer::OMREKENFACTOR_THEORETISCHE_DUUR, $omrekenfactorTheoretischeDuur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($omrekenfactorTheoretischeDuur['max'])) {
                $this->addUsingAlias(GsBtabelPeer::OMREKENFACTOR_THEORETISCHE_DUUR, $omrekenfactorTheoretischeDuur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBtabelPeer::OMREKENFACTOR_THEORETISCHE_DUUR, $omrekenfactorTheoretischeDuur, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsBtabel $gsBtabel Object to remove from the list of results
     *
     * @return GsBtabelQuery The current query, for fluid interface
     */
    public function prune($gsBtabel = null)
    {
        if ($gsBtabel) {
            $this->addUsingAlias(GsBtabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST, $gsBtabel->getUniekNummerAanvullendeTekst(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
