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
use PharmaIntelligence\GstandaardBundle\Model\GsTekstcategorieTabel;
use PharmaIntelligence\GstandaardBundle\Model\GsTekstcategorieTabelPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsTekstcategorieTabelQuery;

/**
 * @method GsTekstcategorieTabelQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsTekstcategorieTabelQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsTekstcategorieTabelQuery orderByUniekNummerPerTekstcategorie($order = Criteria::ASC) Order by the uniek_nummer_per_tekstcategorie column
 * @method GsTekstcategorieTabelQuery orderByMemocodeTekstcategorie($order = Criteria::ASC) Order by the memocode_tekstcategorie column
 * @method GsTekstcategorieTabelQuery orderByOmschrijvingTekstcategorie($order = Criteria::ASC) Order by the omschrijving_tekstcategorie column
 * @method GsTekstcategorieTabelQuery orderByRegistratiedatumGstandaard($order = Criteria::ASC) Order by the registratiedatum_gstandaard column
 * @method GsTekstcategorieTabelQuery orderByVersienummerWciaTabellenEersteOpname($order = Criteria::ASC) Order by the versienummer_wcia_tabellen_eerste_opname column
 * @method GsTekstcategorieTabelQuery orderByVersienummerWciaTabellenLaatsteWijziging($order = Criteria::ASC) Order by the versienummer_wcia_tabellen_laatste_wijziging column
 * @method GsTekstcategorieTabelQuery orderByVersienummerWciaTabellenVervallen($order = Criteria::ASC) Order by the versienummer_wcia_tabellen_vervallen column
 *
 * @method GsTekstcategorieTabelQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsTekstcategorieTabelQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsTekstcategorieTabelQuery groupByUniekNummerPerTekstcategorie() Group by the uniek_nummer_per_tekstcategorie column
 * @method GsTekstcategorieTabelQuery groupByMemocodeTekstcategorie() Group by the memocode_tekstcategorie column
 * @method GsTekstcategorieTabelQuery groupByOmschrijvingTekstcategorie() Group by the omschrijving_tekstcategorie column
 * @method GsTekstcategorieTabelQuery groupByRegistratiedatumGstandaard() Group by the registratiedatum_gstandaard column
 * @method GsTekstcategorieTabelQuery groupByVersienummerWciaTabellenEersteOpname() Group by the versienummer_wcia_tabellen_eerste_opname column
 * @method GsTekstcategorieTabelQuery groupByVersienummerWciaTabellenLaatsteWijziging() Group by the versienummer_wcia_tabellen_laatste_wijziging column
 * @method GsTekstcategorieTabelQuery groupByVersienummerWciaTabellenVervallen() Group by the versienummer_wcia_tabellen_vervallen column
 *
 * @method GsTekstcategorieTabelQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsTekstcategorieTabelQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsTekstcategorieTabelQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsTekstcategorieTabel findOne(PropelPDO $con = null) Return the first GsTekstcategorieTabel matching the query
 * @method GsTekstcategorieTabel findOneOrCreate(PropelPDO $con = null) Return the first GsTekstcategorieTabel matching the query, or a new GsTekstcategorieTabel object populated from the query conditions when no match is found
 *
 * @method GsTekstcategorieTabel findOneByBestandnummer(int $bestandnummer) Return the first GsTekstcategorieTabel filtered by the bestandnummer column
 * @method GsTekstcategorieTabel findOneByMutatiekode(int $mutatiekode) Return the first GsTekstcategorieTabel filtered by the mutatiekode column
 * @method GsTekstcategorieTabel findOneByMemocodeTekstcategorie(string $memocode_tekstcategorie) Return the first GsTekstcategorieTabel filtered by the memocode_tekstcategorie column
 * @method GsTekstcategorieTabel findOneByOmschrijvingTekstcategorie(string $omschrijving_tekstcategorie) Return the first GsTekstcategorieTabel filtered by the omschrijving_tekstcategorie column
 * @method GsTekstcategorieTabel findOneByRegistratiedatumGstandaard(string $registratiedatum_gstandaard) Return the first GsTekstcategorieTabel filtered by the registratiedatum_gstandaard column
 * @method GsTekstcategorieTabel findOneByVersienummerWciaTabellenEersteOpname(int $versienummer_wcia_tabellen_eerste_opname) Return the first GsTekstcategorieTabel filtered by the versienummer_wcia_tabellen_eerste_opname column
 * @method GsTekstcategorieTabel findOneByVersienummerWciaTabellenLaatsteWijziging(int $versienummer_wcia_tabellen_laatste_wijziging) Return the first GsTekstcategorieTabel filtered by the versienummer_wcia_tabellen_laatste_wijziging column
 * @method GsTekstcategorieTabel findOneByVersienummerWciaTabellenVervallen(int $versienummer_wcia_tabellen_vervallen) Return the first GsTekstcategorieTabel filtered by the versienummer_wcia_tabellen_vervallen column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsTekstcategorieTabel objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsTekstcategorieTabel objects filtered by the mutatiekode column
 * @method array findByUniekNummerPerTekstcategorie(int $uniek_nummer_per_tekstcategorie) Return GsTekstcategorieTabel objects filtered by the uniek_nummer_per_tekstcategorie column
 * @method array findByMemocodeTekstcategorie(string $memocode_tekstcategorie) Return GsTekstcategorieTabel objects filtered by the memocode_tekstcategorie column
 * @method array findByOmschrijvingTekstcategorie(string $omschrijving_tekstcategorie) Return GsTekstcategorieTabel objects filtered by the omschrijving_tekstcategorie column
 * @method array findByRegistratiedatumGstandaard(string $registratiedatum_gstandaard) Return GsTekstcategorieTabel objects filtered by the registratiedatum_gstandaard column
 * @method array findByVersienummerWciaTabellenEersteOpname(int $versienummer_wcia_tabellen_eerste_opname) Return GsTekstcategorieTabel objects filtered by the versienummer_wcia_tabellen_eerste_opname column
 * @method array findByVersienummerWciaTabellenLaatsteWijziging(int $versienummer_wcia_tabellen_laatste_wijziging) Return GsTekstcategorieTabel objects filtered by the versienummer_wcia_tabellen_laatste_wijziging column
 * @method array findByVersienummerWciaTabellenVervallen(int $versienummer_wcia_tabellen_vervallen) Return GsTekstcategorieTabel objects filtered by the versienummer_wcia_tabellen_vervallen column
 */
abstract class BaseGsTekstcategorieTabelQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsTekstcategorieTabelQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsTekstcategorieTabel';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsTekstcategorieTabelQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsTekstcategorieTabelQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsTekstcategorieTabelQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsTekstcategorieTabelQuery) {
            return $criteria;
        }
        $query = new GsTekstcategorieTabelQuery(null, null, $modelAlias);

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
     * @return   GsTekstcategorieTabel|GsTekstcategorieTabel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsTekstcategorieTabelPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsTekstcategorieTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsTekstcategorieTabel A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByUniekNummerPerTekstcategorie($key, $con = null)
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
     * @return                 GsTekstcategorieTabel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `uniek_nummer_per_tekstcategorie`, `memocode_tekstcategorie`, `omschrijving_tekstcategorie`, `registratiedatum_gstandaard`, `versienummer_wcia_tabellen_eerste_opname`, `versienummer_wcia_tabellen_laatste_wijziging`, `versienummer_wcia_tabellen_vervallen` FROM `gs_tekstcategorie_tabel` WHERE `uniek_nummer_per_tekstcategorie` = :p0';
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
            $obj = new GsTekstcategorieTabel();
            $obj->hydrate($row);
            GsTekstcategorieTabelPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsTekstcategorieTabel|GsTekstcategorieTabel[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsTekstcategorieTabel[]|mixed the list of results, formatted by the current formatter
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
     * @return GsTekstcategorieTabelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsTekstcategorieTabelPeer::UNIEK_NUMMER_PER_TEKSTCATEGORIE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsTekstcategorieTabelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsTekstcategorieTabelPeer::UNIEK_NUMMER_PER_TEKSTCATEGORIE, $keys, Criteria::IN);
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
     * @return GsTekstcategorieTabelQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsTekstcategorieTabelPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsTekstcategorieTabelPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstcategorieTabelPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsTekstcategorieTabelQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsTekstcategorieTabelPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsTekstcategorieTabelPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstcategorieTabelPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the uniek_nummer_per_tekstcategorie column
     *
     * Example usage:
     * <code>
     * $query->filterByUniekNummerPerTekstcategorie(1234); // WHERE uniek_nummer_per_tekstcategorie = 1234
     * $query->filterByUniekNummerPerTekstcategorie(array(12, 34)); // WHERE uniek_nummer_per_tekstcategorie IN (12, 34)
     * $query->filterByUniekNummerPerTekstcategorie(array('min' => 12)); // WHERE uniek_nummer_per_tekstcategorie >= 12
     * $query->filterByUniekNummerPerTekstcategorie(array('max' => 12)); // WHERE uniek_nummer_per_tekstcategorie <= 12
     * </code>
     *
     * @param     mixed $uniekNummerPerTekstcategorie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsTekstcategorieTabelQuery The current query, for fluid interface
     */
    public function filterByUniekNummerPerTekstcategorie($uniekNummerPerTekstcategorie = null, $comparison = null)
    {
        if (is_array($uniekNummerPerTekstcategorie)) {
            $useMinMax = false;
            if (isset($uniekNummerPerTekstcategorie['min'])) {
                $this->addUsingAlias(GsTekstcategorieTabelPeer::UNIEK_NUMMER_PER_TEKSTCATEGORIE, $uniekNummerPerTekstcategorie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uniekNummerPerTekstcategorie['max'])) {
                $this->addUsingAlias(GsTekstcategorieTabelPeer::UNIEK_NUMMER_PER_TEKSTCATEGORIE, $uniekNummerPerTekstcategorie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstcategorieTabelPeer::UNIEK_NUMMER_PER_TEKSTCATEGORIE, $uniekNummerPerTekstcategorie, $comparison);
    }

    /**
     * Filter the query on the memocode_tekstcategorie column
     *
     * Example usage:
     * <code>
     * $query->filterByMemocodeTekstcategorie('fooValue');   // WHERE memocode_tekstcategorie = 'fooValue'
     * $query->filterByMemocodeTekstcategorie('%fooValue%'); // WHERE memocode_tekstcategorie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $memocodeTekstcategorie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsTekstcategorieTabelQuery The current query, for fluid interface
     */
    public function filterByMemocodeTekstcategorie($memocodeTekstcategorie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($memocodeTekstcategorie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $memocodeTekstcategorie)) {
                $memocodeTekstcategorie = str_replace('*', '%', $memocodeTekstcategorie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsTekstcategorieTabelPeer::MEMOCODE_TEKSTCATEGORIE, $memocodeTekstcategorie, $comparison);
    }

    /**
     * Filter the query on the omschrijving_tekstcategorie column
     *
     * Example usage:
     * <code>
     * $query->filterByOmschrijvingTekstcategorie('fooValue');   // WHERE omschrijving_tekstcategorie = 'fooValue'
     * $query->filterByOmschrijvingTekstcategorie('%fooValue%'); // WHERE omschrijving_tekstcategorie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $omschrijvingTekstcategorie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsTekstcategorieTabelQuery The current query, for fluid interface
     */
    public function filterByOmschrijvingTekstcategorie($omschrijvingTekstcategorie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($omschrijvingTekstcategorie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $omschrijvingTekstcategorie)) {
                $omschrijvingTekstcategorie = str_replace('*', '%', $omschrijvingTekstcategorie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsTekstcategorieTabelPeer::OMSCHRIJVING_TEKSTCATEGORIE, $omschrijvingTekstcategorie, $comparison);
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
     * @return GsTekstcategorieTabelQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GsTekstcategorieTabelPeer::REGISTRATIEDATUM_GSTANDAARD, $registratiedatumGstandaard, $comparison);
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
     * @return GsTekstcategorieTabelQuery The current query, for fluid interface
     */
    public function filterByVersienummerWciaTabellenEersteOpname($versienummerWciaTabellenEersteOpname = null, $comparison = null)
    {
        if (is_array($versienummerWciaTabellenEersteOpname)) {
            $useMinMax = false;
            if (isset($versienummerWciaTabellenEersteOpname['min'])) {
                $this->addUsingAlias(GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME, $versienummerWciaTabellenEersteOpname['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($versienummerWciaTabellenEersteOpname['max'])) {
                $this->addUsingAlias(GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME, $versienummerWciaTabellenEersteOpname['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME, $versienummerWciaTabellenEersteOpname, $comparison);
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
     * @return GsTekstcategorieTabelQuery The current query, for fluid interface
     */
    public function filterByVersienummerWciaTabellenLaatsteWijziging($versienummerWciaTabellenLaatsteWijziging = null, $comparison = null)
    {
        if (is_array($versienummerWciaTabellenLaatsteWijziging)) {
            $useMinMax = false;
            if (isset($versienummerWciaTabellenLaatsteWijziging['min'])) {
                $this->addUsingAlias(GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING, $versienummerWciaTabellenLaatsteWijziging['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($versienummerWciaTabellenLaatsteWijziging['max'])) {
                $this->addUsingAlias(GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING, $versienummerWciaTabellenLaatsteWijziging['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING, $versienummerWciaTabellenLaatsteWijziging, $comparison);
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
     * @return GsTekstcategorieTabelQuery The current query, for fluid interface
     */
    public function filterByVersienummerWciaTabellenVervallen($versienummerWciaTabellenVervallen = null, $comparison = null)
    {
        if (is_array($versienummerWciaTabellenVervallen)) {
            $useMinMax = false;
            if (isset($versienummerWciaTabellenVervallen['min'])) {
                $this->addUsingAlias(GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN, $versienummerWciaTabellenVervallen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($versienummerWciaTabellenVervallen['max'])) {
                $this->addUsingAlias(GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN, $versienummerWciaTabellenVervallen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstcategorieTabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN, $versienummerWciaTabellenVervallen, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsTekstcategorieTabel $gsTekstcategorieTabel Object to remove from the list of results
     *
     * @return GsTekstcategorieTabelQuery The current query, for fluid interface
     */
    public function prune($gsTekstcategorieTabel = null)
    {
        if ($gsTekstcategorieTabel) {
            $this->addUsingAlias(GsTekstcategorieTabelPeer::UNIEK_NUMMER_PER_TEKSTCATEGORIE, $gsTekstcategorieTabel->getUniekNummerPerTekstcategorie(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
