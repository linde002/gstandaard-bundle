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
use PharmaIntelligence\GstandaardBundle\Model\GsAtabel;
use PharmaIntelligence\GstandaardBundle\Model\GsAtabelPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsAtabelQuery;

/**
 * @method GsAtabelQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsAtabelQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsAtabelQuery orderByUnieknummerPerEenheidGebruiksadvies($order = Criteria::ASC) Order by the unieknummer_per_eenheid_gebruiksadvies column
 * @method GsAtabelQuery orderByMemocodeEenheidGebruiksadvies($order = Criteria::ASC) Order by the memocode_eenheid_gebruiksadvies column
 * @method GsAtabelQuery orderByOmschrijvingEenheidGebruiksadviesEnkelvoud($order = Criteria::ASC) Order by the omschrijving_eenheid_gebruiksadvies_enkelvoud column
 * @method GsAtabelQuery orderByOmschrijvingEenheidGebruiksadviesMeervoud($order = Criteria::ASC) Order by the omschrijving_eenheid_gebruiksadvies_meervoud column
 * @method GsAtabelQuery orderByRegistratiedatumGstandaard($order = Criteria::ASC) Order by the registratiedatum_gstandaard column
 * @method GsAtabelQuery orderByVersienummerWciaTabellenEersteOpname($order = Criteria::ASC) Order by the versienummer_wcia_tabellen_eerste_opname column
 * @method GsAtabelQuery orderByVersienummerWciaTabellenLaatsteWijziging($order = Criteria::ASC) Order by the versienummer_wcia_tabellen_laatste_wijziging column
 * @method GsAtabelQuery orderByVersienummerWciaTabellenVervallen($order = Criteria::ASC) Order by the versienummer_wcia_tabellen_vervallen column
 * @method GsAtabelQuery orderByBasiseenheidProductThesaurusnr($order = Criteria::ASC) Order by the basiseenheid_product_thesaurusnr column
 * @method GsAtabelQuery orderByHoeveelheidOvereenkomstigeEenheid($order = Criteria::ASC) Order by the hoeveelheid_overeenkomstige_eenheid column
 * @method GsAtabelQuery orderByBasiseenheidProductKode($order = Criteria::ASC) Order by the basiseenheid_product_kode column
 *
 * @method GsAtabelQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsAtabelQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsAtabelQuery groupByUnieknummerPerEenheidGebruiksadvies() Group by the unieknummer_per_eenheid_gebruiksadvies column
 * @method GsAtabelQuery groupByMemocodeEenheidGebruiksadvies() Group by the memocode_eenheid_gebruiksadvies column
 * @method GsAtabelQuery groupByOmschrijvingEenheidGebruiksadviesEnkelvoud() Group by the omschrijving_eenheid_gebruiksadvies_enkelvoud column
 * @method GsAtabelQuery groupByOmschrijvingEenheidGebruiksadviesMeervoud() Group by the omschrijving_eenheid_gebruiksadvies_meervoud column
 * @method GsAtabelQuery groupByRegistratiedatumGstandaard() Group by the registratiedatum_gstandaard column
 * @method GsAtabelQuery groupByVersienummerWciaTabellenEersteOpname() Group by the versienummer_wcia_tabellen_eerste_opname column
 * @method GsAtabelQuery groupByVersienummerWciaTabellenLaatsteWijziging() Group by the versienummer_wcia_tabellen_laatste_wijziging column
 * @method GsAtabelQuery groupByVersienummerWciaTabellenVervallen() Group by the versienummer_wcia_tabellen_vervallen column
 * @method GsAtabelQuery groupByBasiseenheidProductThesaurusnr() Group by the basiseenheid_product_thesaurusnr column
 * @method GsAtabelQuery groupByHoeveelheidOvereenkomstigeEenheid() Group by the hoeveelheid_overeenkomstige_eenheid column
 * @method GsAtabelQuery groupByBasiseenheidProductKode() Group by the basiseenheid_product_kode column
 *
 * @method GsAtabelQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsAtabelQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsAtabelQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsAtabel findOne(PropelPDO $con = null) Return the first GsAtabel matching the query
 * @method GsAtabel findOneOrCreate(PropelPDO $con = null) Return the first GsAtabel matching the query, or a new GsAtabel object populated from the query conditions when no match is found
 *
 * @method GsAtabel findOneByBestandnummer(int $bestandnummer) Return the first GsAtabel filtered by the bestandnummer column
 * @method GsAtabel findOneByMutatiekode(int $mutatiekode) Return the first GsAtabel filtered by the mutatiekode column
 * @method GsAtabel findOneByMemocodeEenheidGebruiksadvies(string $memocode_eenheid_gebruiksadvies) Return the first GsAtabel filtered by the memocode_eenheid_gebruiksadvies column
 * @method GsAtabel findOneByOmschrijvingEenheidGebruiksadviesEnkelvoud(string $omschrijving_eenheid_gebruiksadvies_enkelvoud) Return the first GsAtabel filtered by the omschrijving_eenheid_gebruiksadvies_enkelvoud column
 * @method GsAtabel findOneByOmschrijvingEenheidGebruiksadviesMeervoud(string $omschrijving_eenheid_gebruiksadvies_meervoud) Return the first GsAtabel filtered by the omschrijving_eenheid_gebruiksadvies_meervoud column
 * @method GsAtabel findOneByRegistratiedatumGstandaard(string $registratiedatum_gstandaard) Return the first GsAtabel filtered by the registratiedatum_gstandaard column
 * @method GsAtabel findOneByVersienummerWciaTabellenEersteOpname(int $versienummer_wcia_tabellen_eerste_opname) Return the first GsAtabel filtered by the versienummer_wcia_tabellen_eerste_opname column
 * @method GsAtabel findOneByVersienummerWciaTabellenLaatsteWijziging(int $versienummer_wcia_tabellen_laatste_wijziging) Return the first GsAtabel filtered by the versienummer_wcia_tabellen_laatste_wijziging column
 * @method GsAtabel findOneByVersienummerWciaTabellenVervallen(int $versienummer_wcia_tabellen_vervallen) Return the first GsAtabel filtered by the versienummer_wcia_tabellen_vervallen column
 * @method GsAtabel findOneByBasiseenheidProductThesaurusnr(int $basiseenheid_product_thesaurusnr) Return the first GsAtabel filtered by the basiseenheid_product_thesaurusnr column
 * @method GsAtabel findOneByHoeveelheidOvereenkomstigeEenheid(string $hoeveelheid_overeenkomstige_eenheid) Return the first GsAtabel filtered by the hoeveelheid_overeenkomstige_eenheid column
 * @method GsAtabel findOneByBasiseenheidProductKode(int $basiseenheid_product_kode) Return the first GsAtabel filtered by the basiseenheid_product_kode column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsAtabel objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsAtabel objects filtered by the mutatiekode column
 * @method array findByUnieknummerPerEenheidGebruiksadvies(int $unieknummer_per_eenheid_gebruiksadvies) Return GsAtabel objects filtered by the unieknummer_per_eenheid_gebruiksadvies column
 * @method array findByMemocodeEenheidGebruiksadvies(string $memocode_eenheid_gebruiksadvies) Return GsAtabel objects filtered by the memocode_eenheid_gebruiksadvies column
 * @method array findByOmschrijvingEenheidGebruiksadviesEnkelvoud(string $omschrijving_eenheid_gebruiksadvies_enkelvoud) Return GsAtabel objects filtered by the omschrijving_eenheid_gebruiksadvies_enkelvoud column
 * @method array findByOmschrijvingEenheidGebruiksadviesMeervoud(string $omschrijving_eenheid_gebruiksadvies_meervoud) Return GsAtabel objects filtered by the omschrijving_eenheid_gebruiksadvies_meervoud column
 * @method array findByRegistratiedatumGstandaard(string $registratiedatum_gstandaard) Return GsAtabel objects filtered by the registratiedatum_gstandaard column
 * @method array findByVersienummerWciaTabellenEersteOpname(int $versienummer_wcia_tabellen_eerste_opname) Return GsAtabel objects filtered by the versienummer_wcia_tabellen_eerste_opname column
 * @method array findByVersienummerWciaTabellenLaatsteWijziging(int $versienummer_wcia_tabellen_laatste_wijziging) Return GsAtabel objects filtered by the versienummer_wcia_tabellen_laatste_wijziging column
 * @method array findByVersienummerWciaTabellenVervallen(int $versienummer_wcia_tabellen_vervallen) Return GsAtabel objects filtered by the versienummer_wcia_tabellen_vervallen column
 * @method array findByBasiseenheidProductThesaurusnr(int $basiseenheid_product_thesaurusnr) Return GsAtabel objects filtered by the basiseenheid_product_thesaurusnr column
 * @method array findByHoeveelheidOvereenkomstigeEenheid(string $hoeveelheid_overeenkomstige_eenheid) Return GsAtabel objects filtered by the hoeveelheid_overeenkomstige_eenheid column
 * @method array findByBasiseenheidProductKode(int $basiseenheid_product_kode) Return GsAtabel objects filtered by the basiseenheid_product_kode column
 */
abstract class BaseGsAtabelQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsAtabelQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAtabel';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsAtabelQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsAtabelQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsAtabelQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsAtabelQuery) {
            return $criteria;
        }
        $query = new GsAtabelQuery(null, null, $modelAlias);

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
     * @return   GsAtabel|GsAtabel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsAtabelPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsAtabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsAtabel A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByUnieknummerPerEenheidGebruiksadvies($key, $con = null)
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
     * @return                 GsAtabel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `unieknummer_per_eenheid_gebruiksadvies`, `memocode_eenheid_gebruiksadvies`, `omschrijving_eenheid_gebruiksadvies_enkelvoud`, `omschrijving_eenheid_gebruiksadvies_meervoud`, `registratiedatum_gstandaard`, `versienummer_wcia_tabellen_eerste_opname`, `versienummer_wcia_tabellen_laatste_wijziging`, `versienummer_wcia_tabellen_vervallen`, `basiseenheid_product_thesaurusnr`, `hoeveelheid_overeenkomstige_eenheid`, `basiseenheid_product_kode` FROM `gs_atabel` WHERE `unieknummer_per_eenheid_gebruiksadvies` = :p0';
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
            $obj = new GsAtabel();
            $obj->hydrate($row);
            GsAtabelPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsAtabel|GsAtabel[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsAtabel[]|mixed the list of results, formatted by the current formatter
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
     * @return GsAtabelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsAtabelPeer::UNIEKNUMMER_PER_EENHEID_GEBRUIKSADVIES, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsAtabelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsAtabelPeer::UNIEKNUMMER_PER_EENHEID_GEBRUIKSADVIES, $keys, Criteria::IN);
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
     * @return GsAtabelQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsAtabelPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsAtabelPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAtabelPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsAtabelQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsAtabelPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsAtabelPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAtabelPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the unieknummer_per_eenheid_gebruiksadvies column
     *
     * Example usage:
     * <code>
     * $query->filterByUnieknummerPerEenheidGebruiksadvies(1234); // WHERE unieknummer_per_eenheid_gebruiksadvies = 1234
     * $query->filterByUnieknummerPerEenheidGebruiksadvies(array(12, 34)); // WHERE unieknummer_per_eenheid_gebruiksadvies IN (12, 34)
     * $query->filterByUnieknummerPerEenheidGebruiksadvies(array('min' => 12)); // WHERE unieknummer_per_eenheid_gebruiksadvies >= 12
     * $query->filterByUnieknummerPerEenheidGebruiksadvies(array('max' => 12)); // WHERE unieknummer_per_eenheid_gebruiksadvies <= 12
     * </code>
     *
     * @param     mixed $unieknummerPerEenheidGebruiksadvies The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtabelQuery The current query, for fluid interface
     */
    public function filterByUnieknummerPerEenheidGebruiksadvies($unieknummerPerEenheidGebruiksadvies = null, $comparison = null)
    {
        if (is_array($unieknummerPerEenheidGebruiksadvies)) {
            $useMinMax = false;
            if (isset($unieknummerPerEenheidGebruiksadvies['min'])) {
                $this->addUsingAlias(GsAtabelPeer::UNIEKNUMMER_PER_EENHEID_GEBRUIKSADVIES, $unieknummerPerEenheidGebruiksadvies['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unieknummerPerEenheidGebruiksadvies['max'])) {
                $this->addUsingAlias(GsAtabelPeer::UNIEKNUMMER_PER_EENHEID_GEBRUIKSADVIES, $unieknummerPerEenheidGebruiksadvies['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAtabelPeer::UNIEKNUMMER_PER_EENHEID_GEBRUIKSADVIES, $unieknummerPerEenheidGebruiksadvies, $comparison);
    }

    /**
     * Filter the query on the memocode_eenheid_gebruiksadvies column
     *
     * Example usage:
     * <code>
     * $query->filterByMemocodeEenheidGebruiksadvies('fooValue');   // WHERE memocode_eenheid_gebruiksadvies = 'fooValue'
     * $query->filterByMemocodeEenheidGebruiksadvies('%fooValue%'); // WHERE memocode_eenheid_gebruiksadvies LIKE '%fooValue%'
     * </code>
     *
     * @param     string $memocodeEenheidGebruiksadvies The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtabelQuery The current query, for fluid interface
     */
    public function filterByMemocodeEenheidGebruiksadvies($memocodeEenheidGebruiksadvies = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($memocodeEenheidGebruiksadvies)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $memocodeEenheidGebruiksadvies)) {
                $memocodeEenheidGebruiksadvies = str_replace('*', '%', $memocodeEenheidGebruiksadvies);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtabelPeer::MEMOCODE_EENHEID_GEBRUIKSADVIES, $memocodeEenheidGebruiksadvies, $comparison);
    }

    /**
     * Filter the query on the omschrijving_eenheid_gebruiksadvies_enkelvoud column
     *
     * Example usage:
     * <code>
     * $query->filterByOmschrijvingEenheidGebruiksadviesEnkelvoud('fooValue');   // WHERE omschrijving_eenheid_gebruiksadvies_enkelvoud = 'fooValue'
     * $query->filterByOmschrijvingEenheidGebruiksadviesEnkelvoud('%fooValue%'); // WHERE omschrijving_eenheid_gebruiksadvies_enkelvoud LIKE '%fooValue%'
     * </code>
     *
     * @param     string $omschrijvingEenheidGebruiksadviesEnkelvoud The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtabelQuery The current query, for fluid interface
     */
    public function filterByOmschrijvingEenheidGebruiksadviesEnkelvoud($omschrijvingEenheidGebruiksadviesEnkelvoud = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($omschrijvingEenheidGebruiksadviesEnkelvoud)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $omschrijvingEenheidGebruiksadviesEnkelvoud)) {
                $omschrijvingEenheidGebruiksadviesEnkelvoud = str_replace('*', '%', $omschrijvingEenheidGebruiksadviesEnkelvoud);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtabelPeer::OMSCHRIJVING_EENHEID_GEBRUIKSADVIES_ENKELVOUD, $omschrijvingEenheidGebruiksadviesEnkelvoud, $comparison);
    }

    /**
     * Filter the query on the omschrijving_eenheid_gebruiksadvies_meervoud column
     *
     * Example usage:
     * <code>
     * $query->filterByOmschrijvingEenheidGebruiksadviesMeervoud('fooValue');   // WHERE omschrijving_eenheid_gebruiksadvies_meervoud = 'fooValue'
     * $query->filterByOmschrijvingEenheidGebruiksadviesMeervoud('%fooValue%'); // WHERE omschrijving_eenheid_gebruiksadvies_meervoud LIKE '%fooValue%'
     * </code>
     *
     * @param     string $omschrijvingEenheidGebruiksadviesMeervoud The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtabelQuery The current query, for fluid interface
     */
    public function filterByOmschrijvingEenheidGebruiksadviesMeervoud($omschrijvingEenheidGebruiksadviesMeervoud = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($omschrijvingEenheidGebruiksadviesMeervoud)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $omschrijvingEenheidGebruiksadviesMeervoud)) {
                $omschrijvingEenheidGebruiksadviesMeervoud = str_replace('*', '%', $omschrijvingEenheidGebruiksadviesMeervoud);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAtabelPeer::OMSCHRIJVING_EENHEID_GEBRUIKSADVIES_MEERVOUD, $omschrijvingEenheidGebruiksadviesMeervoud, $comparison);
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
     * @return GsAtabelQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GsAtabelPeer::REGISTRATIEDATUM_GSTANDAARD, $registratiedatumGstandaard, $comparison);
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
     * @return GsAtabelQuery The current query, for fluid interface
     */
    public function filterByVersienummerWciaTabellenEersteOpname($versienummerWciaTabellenEersteOpname = null, $comparison = null)
    {
        if (is_array($versienummerWciaTabellenEersteOpname)) {
            $useMinMax = false;
            if (isset($versienummerWciaTabellenEersteOpname['min'])) {
                $this->addUsingAlias(GsAtabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME, $versienummerWciaTabellenEersteOpname['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($versienummerWciaTabellenEersteOpname['max'])) {
                $this->addUsingAlias(GsAtabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME, $versienummerWciaTabellenEersteOpname['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAtabelPeer::VERSIENUMMER_WCIA_TABELLEN_EERSTE_OPNAME, $versienummerWciaTabellenEersteOpname, $comparison);
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
     * @return GsAtabelQuery The current query, for fluid interface
     */
    public function filterByVersienummerWciaTabellenLaatsteWijziging($versienummerWciaTabellenLaatsteWijziging = null, $comparison = null)
    {
        if (is_array($versienummerWciaTabellenLaatsteWijziging)) {
            $useMinMax = false;
            if (isset($versienummerWciaTabellenLaatsteWijziging['min'])) {
                $this->addUsingAlias(GsAtabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING, $versienummerWciaTabellenLaatsteWijziging['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($versienummerWciaTabellenLaatsteWijziging['max'])) {
                $this->addUsingAlias(GsAtabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING, $versienummerWciaTabellenLaatsteWijziging['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAtabelPeer::VERSIENUMMER_WCIA_TABELLEN_LAATSTE_WIJZIGING, $versienummerWciaTabellenLaatsteWijziging, $comparison);
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
     * @return GsAtabelQuery The current query, for fluid interface
     */
    public function filterByVersienummerWciaTabellenVervallen($versienummerWciaTabellenVervallen = null, $comparison = null)
    {
        if (is_array($versienummerWciaTabellenVervallen)) {
            $useMinMax = false;
            if (isset($versienummerWciaTabellenVervallen['min'])) {
                $this->addUsingAlias(GsAtabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN, $versienummerWciaTabellenVervallen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($versienummerWciaTabellenVervallen['max'])) {
                $this->addUsingAlias(GsAtabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN, $versienummerWciaTabellenVervallen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAtabelPeer::VERSIENUMMER_WCIA_TABELLEN_VERVALLEN, $versienummerWciaTabellenVervallen, $comparison);
    }

    /**
     * Filter the query on the basiseenheid_product_thesaurusnr column
     *
     * Example usage:
     * <code>
     * $query->filterByBasiseenheidProductThesaurusnr(1234); // WHERE basiseenheid_product_thesaurusnr = 1234
     * $query->filterByBasiseenheidProductThesaurusnr(array(12, 34)); // WHERE basiseenheid_product_thesaurusnr IN (12, 34)
     * $query->filterByBasiseenheidProductThesaurusnr(array('min' => 12)); // WHERE basiseenheid_product_thesaurusnr >= 12
     * $query->filterByBasiseenheidProductThesaurusnr(array('max' => 12)); // WHERE basiseenheid_product_thesaurusnr <= 12
     * </code>
     *
     * @param     mixed $basiseenheidProductThesaurusnr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtabelQuery The current query, for fluid interface
     */
    public function filterByBasiseenheidProductThesaurusnr($basiseenheidProductThesaurusnr = null, $comparison = null)
    {
        if (is_array($basiseenheidProductThesaurusnr)) {
            $useMinMax = false;
            if (isset($basiseenheidProductThesaurusnr['min'])) {
                $this->addUsingAlias(GsAtabelPeer::BASISEENHEID_PRODUCT_THESAURUSNR, $basiseenheidProductThesaurusnr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($basiseenheidProductThesaurusnr['max'])) {
                $this->addUsingAlias(GsAtabelPeer::BASISEENHEID_PRODUCT_THESAURUSNR, $basiseenheidProductThesaurusnr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAtabelPeer::BASISEENHEID_PRODUCT_THESAURUSNR, $basiseenheidProductThesaurusnr, $comparison);
    }

    /**
     * Filter the query on the hoeveelheid_overeenkomstige_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByHoeveelheidOvereenkomstigeEenheid(1234); // WHERE hoeveelheid_overeenkomstige_eenheid = 1234
     * $query->filterByHoeveelheidOvereenkomstigeEenheid(array(12, 34)); // WHERE hoeveelheid_overeenkomstige_eenheid IN (12, 34)
     * $query->filterByHoeveelheidOvereenkomstigeEenheid(array('min' => 12)); // WHERE hoeveelheid_overeenkomstige_eenheid >= 12
     * $query->filterByHoeveelheidOvereenkomstigeEenheid(array('max' => 12)); // WHERE hoeveelheid_overeenkomstige_eenheid <= 12
     * </code>
     *
     * @param     mixed $hoeveelheidOvereenkomstigeEenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtabelQuery The current query, for fluid interface
     */
    public function filterByHoeveelheidOvereenkomstigeEenheid($hoeveelheidOvereenkomstigeEenheid = null, $comparison = null)
    {
        if (is_array($hoeveelheidOvereenkomstigeEenheid)) {
            $useMinMax = false;
            if (isset($hoeveelheidOvereenkomstigeEenheid['min'])) {
                $this->addUsingAlias(GsAtabelPeer::HOEVEELHEID_OVEREENKOMSTIGE_EENHEID, $hoeveelheidOvereenkomstigeEenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hoeveelheidOvereenkomstigeEenheid['max'])) {
                $this->addUsingAlias(GsAtabelPeer::HOEVEELHEID_OVEREENKOMSTIGE_EENHEID, $hoeveelheidOvereenkomstigeEenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAtabelPeer::HOEVEELHEID_OVEREENKOMSTIGE_EENHEID, $hoeveelheidOvereenkomstigeEenheid, $comparison);
    }

    /**
     * Filter the query on the basiseenheid_product_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByBasiseenheidProductKode(1234); // WHERE basiseenheid_product_kode = 1234
     * $query->filterByBasiseenheidProductKode(array(12, 34)); // WHERE basiseenheid_product_kode IN (12, 34)
     * $query->filterByBasiseenheidProductKode(array('min' => 12)); // WHERE basiseenheid_product_kode >= 12
     * $query->filterByBasiseenheidProductKode(array('max' => 12)); // WHERE basiseenheid_product_kode <= 12
     * </code>
     *
     * @param     mixed $basiseenheidProductKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAtabelQuery The current query, for fluid interface
     */
    public function filterByBasiseenheidProductKode($basiseenheidProductKode = null, $comparison = null)
    {
        if (is_array($basiseenheidProductKode)) {
            $useMinMax = false;
            if (isset($basiseenheidProductKode['min'])) {
                $this->addUsingAlias(GsAtabelPeer::BASISEENHEID_PRODUCT_KODE, $basiseenheidProductKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($basiseenheidProductKode['max'])) {
                $this->addUsingAlias(GsAtabelPeer::BASISEENHEID_PRODUCT_KODE, $basiseenheidProductKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAtabelPeer::BASISEENHEID_PRODUCT_KODE, $basiseenheidProductKode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsAtabel $gsAtabel Object to remove from the list of results
     *
     * @return GsAtabelQuery The current query, for fluid interface
     */
    public function prune($gsAtabel = null)
    {
        if ($gsAtabel) {
            $this->addUsingAlias(GsAtabelPeer::UNIEKNUMMER_PER_EENHEID_GEBRUIKSADVIES, $gsAtabel->getUnieknummerPerEenheidGebruiksadvies(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
