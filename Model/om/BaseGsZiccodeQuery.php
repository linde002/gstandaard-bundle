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
use PharmaIntelligence\GstandaardBundle\Model\GsZiccode;
use PharmaIntelligence\GstandaardBundle\Model\GsZiccodePeer;
use PharmaIntelligence\GstandaardBundle\Model\GsZiccodeQuery;

/**
 * @method GsZiccodeQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsZiccodeQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsZiccodeQuery orderByInstellingscode($order = Criteria::ASC) Order by the instellingscode column
 * @method GsZiccodeQuery orderByNaamVanDeInstelling($order = Criteria::ASC) Order by the naam_van_de_instelling column
 * @method GsZiccodeQuery orderByStraatnaam($order = Criteria::ASC) Order by the straatnaam column
 * @method GsZiccodeQuery orderByHuisnummer($order = Criteria::ASC) Order by the huisnummer column
 * @method GsZiccodeQuery orderByHuisnummerToevoeging($order = Criteria::ASC) Order by the huisnummer_toevoeging column
 * @method GsZiccodeQuery orderByPostcode($order = Criteria::ASC) Order by the postcode column
 * @method GsZiccodeQuery orderByPlaats($order = Criteria::ASC) Order by the plaats column
 * @method GsZiccodeQuery orderByZoeksleutel($order = Criteria::ASC) Order by the zoeksleutel column
 * @method GsZiccodeQuery orderByAgbcodeVanDeInstelling($order = Criteria::ASC) Order by the agbcode_van_de_instelling column
 * @method GsZiccodeQuery orderByAgbcodeToevoegselLokaties($order = Criteria::ASC) Order by the agbcode_toevoegsel_lokaties column
 *
 * @method GsZiccodeQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsZiccodeQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsZiccodeQuery groupByInstellingscode() Group by the instellingscode column
 * @method GsZiccodeQuery groupByNaamVanDeInstelling() Group by the naam_van_de_instelling column
 * @method GsZiccodeQuery groupByStraatnaam() Group by the straatnaam column
 * @method GsZiccodeQuery groupByHuisnummer() Group by the huisnummer column
 * @method GsZiccodeQuery groupByHuisnummerToevoeging() Group by the huisnummer_toevoeging column
 * @method GsZiccodeQuery groupByPostcode() Group by the postcode column
 * @method GsZiccodeQuery groupByPlaats() Group by the plaats column
 * @method GsZiccodeQuery groupByZoeksleutel() Group by the zoeksleutel column
 * @method GsZiccodeQuery groupByAgbcodeVanDeInstelling() Group by the agbcode_van_de_instelling column
 * @method GsZiccodeQuery groupByAgbcodeToevoegselLokaties() Group by the agbcode_toevoegsel_lokaties column
 *
 * @method GsZiccodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsZiccodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsZiccodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsZiccode findOne(PropelPDO $con = null) Return the first GsZiccode matching the query
 * @method GsZiccode findOneOrCreate(PropelPDO $con = null) Return the first GsZiccode matching the query, or a new GsZiccode object populated from the query conditions when no match is found
 *
 * @method GsZiccode findOneByBestandnummer(int $bestandnummer) Return the first GsZiccode filtered by the bestandnummer column
 * @method GsZiccode findOneByMutatiekode(int $mutatiekode) Return the first GsZiccode filtered by the mutatiekode column
 * @method GsZiccode findOneByNaamVanDeInstelling(string $naam_van_de_instelling) Return the first GsZiccode filtered by the naam_van_de_instelling column
 * @method GsZiccode findOneByStraatnaam(string $straatnaam) Return the first GsZiccode filtered by the straatnaam column
 * @method GsZiccode findOneByHuisnummer(int $huisnummer) Return the first GsZiccode filtered by the huisnummer column
 * @method GsZiccode findOneByHuisnummerToevoeging(string $huisnummer_toevoeging) Return the first GsZiccode filtered by the huisnummer_toevoeging column
 * @method GsZiccode findOneByPostcode(string $postcode) Return the first GsZiccode filtered by the postcode column
 * @method GsZiccode findOneByPlaats(string $plaats) Return the first GsZiccode filtered by the plaats column
 * @method GsZiccode findOneByZoeksleutel(string $zoeksleutel) Return the first GsZiccode filtered by the zoeksleutel column
 * @method GsZiccode findOneByAgbcodeVanDeInstelling(int $agbcode_van_de_instelling) Return the first GsZiccode filtered by the agbcode_van_de_instelling column
 * @method GsZiccode findOneByAgbcodeToevoegselLokaties(string $agbcode_toevoegsel_lokaties) Return the first GsZiccode filtered by the agbcode_toevoegsel_lokaties column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsZiccode objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsZiccode objects filtered by the mutatiekode column
 * @method array findByInstellingscode(string $instellingscode) Return GsZiccode objects filtered by the instellingscode column
 * @method array findByNaamVanDeInstelling(string $naam_van_de_instelling) Return GsZiccode objects filtered by the naam_van_de_instelling column
 * @method array findByStraatnaam(string $straatnaam) Return GsZiccode objects filtered by the straatnaam column
 * @method array findByHuisnummer(int $huisnummer) Return GsZiccode objects filtered by the huisnummer column
 * @method array findByHuisnummerToevoeging(string $huisnummer_toevoeging) Return GsZiccode objects filtered by the huisnummer_toevoeging column
 * @method array findByPostcode(string $postcode) Return GsZiccode objects filtered by the postcode column
 * @method array findByPlaats(string $plaats) Return GsZiccode objects filtered by the plaats column
 * @method array findByZoeksleutel(string $zoeksleutel) Return GsZiccode objects filtered by the zoeksleutel column
 * @method array findByAgbcodeVanDeInstelling(int $agbcode_van_de_instelling) Return GsZiccode objects filtered by the agbcode_van_de_instelling column
 * @method array findByAgbcodeToevoegselLokaties(string $agbcode_toevoegsel_lokaties) Return GsZiccode objects filtered by the agbcode_toevoegsel_lokaties column
 */
abstract class BaseGsZiccodeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsZiccodeQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsZiccode';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsZiccodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsZiccodeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsZiccodeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsZiccodeQuery) {
            return $criteria;
        }
        $query = new GsZiccodeQuery(null, null, $modelAlias);

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
     * @return   GsZiccode|GsZiccode[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsZiccodePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsZiccodePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsZiccode A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByInstellingscode($key, $con = null)
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
     * @return                 GsZiccode A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `instellingscode`, `naam_van_de_instelling`, `straatnaam`, `huisnummer`, `huisnummer_toevoeging`, `postcode`, `plaats`, `zoeksleutel`, `agbcode_van_de_instelling`, `agbcode_toevoegsel_lokaties` FROM `gs_ziccode` WHERE `instellingscode` = :p0';
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
            $obj = new GsZiccode();
            $obj->hydrate($row);
            GsZiccodePeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsZiccode|GsZiccode[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsZiccode[]|mixed the list of results, formatted by the current formatter
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
     * @return GsZiccodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsZiccodePeer::INSTELLINGSCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsZiccodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsZiccodePeer::INSTELLINGSCODE, $keys, Criteria::IN);
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
     * @return GsZiccodeQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsZiccodePeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsZiccodePeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsZiccodePeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsZiccodeQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsZiccodePeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsZiccodePeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsZiccodePeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the instellingscode column
     *
     * Example usage:
     * <code>
     * $query->filterByInstellingscode('fooValue');   // WHERE instellingscode = 'fooValue'
     * $query->filterByInstellingscode('%fooValue%'); // WHERE instellingscode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $instellingscode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsZiccodeQuery The current query, for fluid interface
     */
    public function filterByInstellingscode($instellingscode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($instellingscode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $instellingscode)) {
                $instellingscode = str_replace('*', '%', $instellingscode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsZiccodePeer::INSTELLINGSCODE, $instellingscode, $comparison);
    }

    /**
     * Filter the query on the naam_van_de_instelling column
     *
     * Example usage:
     * <code>
     * $query->filterByNaamVanDeInstelling('fooValue');   // WHERE naam_van_de_instelling = 'fooValue'
     * $query->filterByNaamVanDeInstelling('%fooValue%'); // WHERE naam_van_de_instelling LIKE '%fooValue%'
     * </code>
     *
     * @param     string $naamVanDeInstelling The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsZiccodeQuery The current query, for fluid interface
     */
    public function filterByNaamVanDeInstelling($naamVanDeInstelling = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($naamVanDeInstelling)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $naamVanDeInstelling)) {
                $naamVanDeInstelling = str_replace('*', '%', $naamVanDeInstelling);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsZiccodePeer::NAAM_VAN_DE_INSTELLING, $naamVanDeInstelling, $comparison);
    }

    /**
     * Filter the query on the straatnaam column
     *
     * Example usage:
     * <code>
     * $query->filterByStraatnaam('fooValue');   // WHERE straatnaam = 'fooValue'
     * $query->filterByStraatnaam('%fooValue%'); // WHERE straatnaam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $straatnaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsZiccodeQuery The current query, for fluid interface
     */
    public function filterByStraatnaam($straatnaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($straatnaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $straatnaam)) {
                $straatnaam = str_replace('*', '%', $straatnaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsZiccodePeer::STRAATNAAM, $straatnaam, $comparison);
    }

    /**
     * Filter the query on the huisnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByHuisnummer(1234); // WHERE huisnummer = 1234
     * $query->filterByHuisnummer(array(12, 34)); // WHERE huisnummer IN (12, 34)
     * $query->filterByHuisnummer(array('min' => 12)); // WHERE huisnummer >= 12
     * $query->filterByHuisnummer(array('max' => 12)); // WHERE huisnummer <= 12
     * </code>
     *
     * @param     mixed $huisnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsZiccodeQuery The current query, for fluid interface
     */
    public function filterByHuisnummer($huisnummer = null, $comparison = null)
    {
        if (is_array($huisnummer)) {
            $useMinMax = false;
            if (isset($huisnummer['min'])) {
                $this->addUsingAlias(GsZiccodePeer::HUISNUMMER, $huisnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($huisnummer['max'])) {
                $this->addUsingAlias(GsZiccodePeer::HUISNUMMER, $huisnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsZiccodePeer::HUISNUMMER, $huisnummer, $comparison);
    }

    /**
     * Filter the query on the huisnummer_toevoeging column
     *
     * Example usage:
     * <code>
     * $query->filterByHuisnummerToevoeging('fooValue');   // WHERE huisnummer_toevoeging = 'fooValue'
     * $query->filterByHuisnummerToevoeging('%fooValue%'); // WHERE huisnummer_toevoeging LIKE '%fooValue%'
     * </code>
     *
     * @param     string $huisnummerToevoeging The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsZiccodeQuery The current query, for fluid interface
     */
    public function filterByHuisnummerToevoeging($huisnummerToevoeging = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($huisnummerToevoeging)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $huisnummerToevoeging)) {
                $huisnummerToevoeging = str_replace('*', '%', $huisnummerToevoeging);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsZiccodePeer::HUISNUMMER_TOEVOEGING, $huisnummerToevoeging, $comparison);
    }

    /**
     * Filter the query on the postcode column
     *
     * Example usage:
     * <code>
     * $query->filterByPostcode('fooValue');   // WHERE postcode = 'fooValue'
     * $query->filterByPostcode('%fooValue%'); // WHERE postcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postcode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsZiccodeQuery The current query, for fluid interface
     */
    public function filterByPostcode($postcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postcode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postcode)) {
                $postcode = str_replace('*', '%', $postcode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsZiccodePeer::POSTCODE, $postcode, $comparison);
    }

    /**
     * Filter the query on the plaats column
     *
     * Example usage:
     * <code>
     * $query->filterByPlaats('fooValue');   // WHERE plaats = 'fooValue'
     * $query->filterByPlaats('%fooValue%'); // WHERE plaats LIKE '%fooValue%'
     * </code>
     *
     * @param     string $plaats The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsZiccodeQuery The current query, for fluid interface
     */
    public function filterByPlaats($plaats = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($plaats)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $plaats)) {
                $plaats = str_replace('*', '%', $plaats);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsZiccodePeer::PLAATS, $plaats, $comparison);
    }

    /**
     * Filter the query on the zoeksleutel column
     *
     * Example usage:
     * <code>
     * $query->filterByZoeksleutel('fooValue');   // WHERE zoeksleutel = 'fooValue'
     * $query->filterByZoeksleutel('%fooValue%'); // WHERE zoeksleutel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $zoeksleutel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsZiccodeQuery The current query, for fluid interface
     */
    public function filterByZoeksleutel($zoeksleutel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($zoeksleutel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $zoeksleutel)) {
                $zoeksleutel = str_replace('*', '%', $zoeksleutel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsZiccodePeer::ZOEKSLEUTEL, $zoeksleutel, $comparison);
    }

    /**
     * Filter the query on the agbcode_van_de_instelling column
     *
     * Example usage:
     * <code>
     * $query->filterByAgbcodeVanDeInstelling(1234); // WHERE agbcode_van_de_instelling = 1234
     * $query->filterByAgbcodeVanDeInstelling(array(12, 34)); // WHERE agbcode_van_de_instelling IN (12, 34)
     * $query->filterByAgbcodeVanDeInstelling(array('min' => 12)); // WHERE agbcode_van_de_instelling >= 12
     * $query->filterByAgbcodeVanDeInstelling(array('max' => 12)); // WHERE agbcode_van_de_instelling <= 12
     * </code>
     *
     * @param     mixed $agbcodeVanDeInstelling The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsZiccodeQuery The current query, for fluid interface
     */
    public function filterByAgbcodeVanDeInstelling($agbcodeVanDeInstelling = null, $comparison = null)
    {
        if (is_array($agbcodeVanDeInstelling)) {
            $useMinMax = false;
            if (isset($agbcodeVanDeInstelling['min'])) {
                $this->addUsingAlias(GsZiccodePeer::AGBCODE_VAN_DE_INSTELLING, $agbcodeVanDeInstelling['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agbcodeVanDeInstelling['max'])) {
                $this->addUsingAlias(GsZiccodePeer::AGBCODE_VAN_DE_INSTELLING, $agbcodeVanDeInstelling['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsZiccodePeer::AGBCODE_VAN_DE_INSTELLING, $agbcodeVanDeInstelling, $comparison);
    }

    /**
     * Filter the query on the agbcode_toevoegsel_lokaties column
     *
     * Example usage:
     * <code>
     * $query->filterByAgbcodeToevoegselLokaties('fooValue');   // WHERE agbcode_toevoegsel_lokaties = 'fooValue'
     * $query->filterByAgbcodeToevoegselLokaties('%fooValue%'); // WHERE agbcode_toevoegsel_lokaties LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agbcodeToevoegselLokaties The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsZiccodeQuery The current query, for fluid interface
     */
    public function filterByAgbcodeToevoegselLokaties($agbcodeToevoegselLokaties = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agbcodeToevoegselLokaties)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agbcodeToevoegselLokaties)) {
                $agbcodeToevoegselLokaties = str_replace('*', '%', $agbcodeToevoegselLokaties);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsZiccodePeer::AGBCODE_TOEVOEGSEL_LOKATIES, $agbcodeToevoegselLokaties, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsZiccode $gsZiccode Object to remove from the list of results
     *
     * @return GsZiccodeQuery The current query, for fluid interface
     */
    public function prune($gsZiccode = null)
    {
        if ($gsZiccode) {
            $this->addUsingAlias(GsZiccodePeer::INSTELLINGSCODE, $gsZiccode->getInstellingscode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
