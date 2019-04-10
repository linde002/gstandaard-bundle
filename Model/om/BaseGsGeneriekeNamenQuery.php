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
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeNamen;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeNamenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeNamenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingen;

/**
 * @method GsGeneriekeNamenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsGeneriekeNamenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsGeneriekeNamenQuery orderByGeneriekenaamkode($order = Criteria::ASC) Order by the generiekenaamkode column
 * @method GsGeneriekeNamenQuery orderByGeneriekeNaam($order = Criteria::ASC) Order by the generieke_naam column
 * @method GsGeneriekeNamenQuery orderByStamnaamcode($order = Criteria::ASC) Order by the stamnaamcode column
 * @method GsGeneriekeNamenQuery orderByVolledigeGeneriekeNaamKode($order = Criteria::ASC) Order by the volledige_generieke_naam_kode column
 * @method GsGeneriekeNamenQuery orderByKodeStamnaamToegestaan($order = Criteria::ASC) Order by the kode_stamnaam_toegestaan column
 * @method GsGeneriekeNamenQuery orderByKodeWerkzaamBestanddeelhulpstof($order = Criteria::ASC) Order by the kode_werkzaam_bestanddeelhulpstof column
 * @method GsGeneriekeNamenQuery orderByInformatoriumStofKode($order = Criteria::ASC) Order by the informatorium_stof_kode column
 * @method GsGeneriekeNamenQuery orderByCasNummer($order = Criteria::ASC) Order by the cas_nummer column
 * @method GsGeneriekeNamenQuery orderByBrutoFormule($order = Criteria::ASC) Order by the bruto_formule column
 * @method GsGeneriekeNamenQuery orderByMolekuulgewicht($order = Criteria::ASC) Order by the molekuulgewicht column
 * @method GsGeneriekeNamenQuery orderByMolekuulgewichtIndicator($order = Criteria::ASC) Order by the molekuulgewicht_indicator column
 * @method GsGeneriekeNamenQuery orderByMolekuulgewichtVoorSamenstelling($order = Criteria::ASC) Order by the molekuulgewicht_voor_samenstelling column
 * @method GsGeneriekeNamenQuery orderBySoortelijkGewicht($order = Criteria::ASC) Order by the soortelijk_gewicht column
 * @method GsGeneriekeNamenQuery orderByVoorkeurseenheid($order = Criteria::ASC) Order by the voorkeurseenheid column
 * @method GsGeneriekeNamenQuery orderByKodeRijvaardigheid($order = Criteria::ASC) Order by the kode_rijvaardigheid column
 * @method GsGeneriekeNamenQuery orderByKodeVergift($order = Criteria::ASC) Order by the kode_vergift column
 * @method GsGeneriekeNamenQuery orderByKodeOpiumwet($order = Criteria::ASC) Order by the kode_opiumwet column
 *
 * @method GsGeneriekeNamenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsGeneriekeNamenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsGeneriekeNamenQuery groupByGeneriekenaamkode() Group by the generiekenaamkode column
 * @method GsGeneriekeNamenQuery groupByGeneriekeNaam() Group by the generieke_naam column
 * @method GsGeneriekeNamenQuery groupByStamnaamcode() Group by the stamnaamcode column
 * @method GsGeneriekeNamenQuery groupByVolledigeGeneriekeNaamKode() Group by the volledige_generieke_naam_kode column
 * @method GsGeneriekeNamenQuery groupByKodeStamnaamToegestaan() Group by the kode_stamnaam_toegestaan column
 * @method GsGeneriekeNamenQuery groupByKodeWerkzaamBestanddeelhulpstof() Group by the kode_werkzaam_bestanddeelhulpstof column
 * @method GsGeneriekeNamenQuery groupByInformatoriumStofKode() Group by the informatorium_stof_kode column
 * @method GsGeneriekeNamenQuery groupByCasNummer() Group by the cas_nummer column
 * @method GsGeneriekeNamenQuery groupByBrutoFormule() Group by the bruto_formule column
 * @method GsGeneriekeNamenQuery groupByMolekuulgewicht() Group by the molekuulgewicht column
 * @method GsGeneriekeNamenQuery groupByMolekuulgewichtIndicator() Group by the molekuulgewicht_indicator column
 * @method GsGeneriekeNamenQuery groupByMolekuulgewichtVoorSamenstelling() Group by the molekuulgewicht_voor_samenstelling column
 * @method GsGeneriekeNamenQuery groupBySoortelijkGewicht() Group by the soortelijk_gewicht column
 * @method GsGeneriekeNamenQuery groupByVoorkeurseenheid() Group by the voorkeurseenheid column
 * @method GsGeneriekeNamenQuery groupByKodeRijvaardigheid() Group by the kode_rijvaardigheid column
 * @method GsGeneriekeNamenQuery groupByKodeVergift() Group by the kode_vergift column
 * @method GsGeneriekeNamenQuery groupByKodeOpiumwet() Group by the kode_opiumwet column
 *
 * @method GsGeneriekeNamenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsGeneriekeNamenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsGeneriekeNamenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsGeneriekeNamenQuery leftJoinGsIngegevenSamenstellingen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsIngegevenSamenstellingen relation
 * @method GsGeneriekeNamenQuery rightJoinGsIngegevenSamenstellingen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsIngegevenSamenstellingen relation
 * @method GsGeneriekeNamenQuery innerJoinGsIngegevenSamenstellingen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsIngegevenSamenstellingen relation
 *
 * @method GsGeneriekeNamen findOne(PropelPDO $con = null) Return the first GsGeneriekeNamen matching the query
 * @method GsGeneriekeNamen findOneOrCreate(PropelPDO $con = null) Return the first GsGeneriekeNamen matching the query, or a new GsGeneriekeNamen object populated from the query conditions when no match is found
 *
 * @method GsGeneriekeNamen findOneByBestandnummer(int $bestandnummer) Return the first GsGeneriekeNamen filtered by the bestandnummer column
 * @method GsGeneriekeNamen findOneByMutatiekode(int $mutatiekode) Return the first GsGeneriekeNamen filtered by the mutatiekode column
 * @method GsGeneriekeNamen findOneByGeneriekeNaam(string $generieke_naam) Return the first GsGeneriekeNamen filtered by the generieke_naam column
 * @method GsGeneriekeNamen findOneByStamnaamcode(int $stamnaamcode) Return the first GsGeneriekeNamen filtered by the stamnaamcode column
 * @method GsGeneriekeNamen findOneByVolledigeGeneriekeNaamKode(int $volledige_generieke_naam_kode) Return the first GsGeneriekeNamen filtered by the volledige_generieke_naam_kode column
 * @method GsGeneriekeNamen findOneByKodeStamnaamToegestaan(string $kode_stamnaam_toegestaan) Return the first GsGeneriekeNamen filtered by the kode_stamnaam_toegestaan column
 * @method GsGeneriekeNamen findOneByKodeWerkzaamBestanddeelhulpstof(string $kode_werkzaam_bestanddeelhulpstof) Return the first GsGeneriekeNamen filtered by the kode_werkzaam_bestanddeelhulpstof column
 * @method GsGeneriekeNamen findOneByInformatoriumStofKode(int $informatorium_stof_kode) Return the first GsGeneriekeNamen filtered by the informatorium_stof_kode column
 * @method GsGeneriekeNamen findOneByCasNummer(int $cas_nummer) Return the first GsGeneriekeNamen filtered by the cas_nummer column
 * @method GsGeneriekeNamen findOneByBrutoFormule(string $bruto_formule) Return the first GsGeneriekeNamen filtered by the bruto_formule column
 * @method GsGeneriekeNamen findOneByMolekuulgewicht(string $molekuulgewicht) Return the first GsGeneriekeNamen filtered by the molekuulgewicht column
 * @method GsGeneriekeNamen findOneByMolekuulgewichtIndicator(string $molekuulgewicht_indicator) Return the first GsGeneriekeNamen filtered by the molekuulgewicht_indicator column
 * @method GsGeneriekeNamen findOneByMolekuulgewichtVoorSamenstelling(string $molekuulgewicht_voor_samenstelling) Return the first GsGeneriekeNamen filtered by the molekuulgewicht_voor_samenstelling column
 * @method GsGeneriekeNamen findOneBySoortelijkGewicht(string $soortelijk_gewicht) Return the first GsGeneriekeNamen filtered by the soortelijk_gewicht column
 * @method GsGeneriekeNamen findOneByVoorkeurseenheid(string $voorkeurseenheid) Return the first GsGeneriekeNamen filtered by the voorkeurseenheid column
 * @method GsGeneriekeNamen findOneByKodeRijvaardigheid(string $kode_rijvaardigheid) Return the first GsGeneriekeNamen filtered by the kode_rijvaardigheid column
 * @method GsGeneriekeNamen findOneByKodeVergift(string $kode_vergift) Return the first GsGeneriekeNamen filtered by the kode_vergift column
 * @method GsGeneriekeNamen findOneByKodeOpiumwet(string $kode_opiumwet) Return the first GsGeneriekeNamen filtered by the kode_opiumwet column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsGeneriekeNamen objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsGeneriekeNamen objects filtered by the mutatiekode column
 * @method array findByGeneriekenaamkode(int $generiekenaamkode) Return GsGeneriekeNamen objects filtered by the generiekenaamkode column
 * @method array findByGeneriekeNaam(string $generieke_naam) Return GsGeneriekeNamen objects filtered by the generieke_naam column
 * @method array findByStamnaamcode(int $stamnaamcode) Return GsGeneriekeNamen objects filtered by the stamnaamcode column
 * @method array findByVolledigeGeneriekeNaamKode(int $volledige_generieke_naam_kode) Return GsGeneriekeNamen objects filtered by the volledige_generieke_naam_kode column
 * @method array findByKodeStamnaamToegestaan(string $kode_stamnaam_toegestaan) Return GsGeneriekeNamen objects filtered by the kode_stamnaam_toegestaan column
 * @method array findByKodeWerkzaamBestanddeelhulpstof(string $kode_werkzaam_bestanddeelhulpstof) Return GsGeneriekeNamen objects filtered by the kode_werkzaam_bestanddeelhulpstof column
 * @method array findByInformatoriumStofKode(int $informatorium_stof_kode) Return GsGeneriekeNamen objects filtered by the informatorium_stof_kode column
 * @method array findByCasNummer(int $cas_nummer) Return GsGeneriekeNamen objects filtered by the cas_nummer column
 * @method array findByBrutoFormule(string $bruto_formule) Return GsGeneriekeNamen objects filtered by the bruto_formule column
 * @method array findByMolekuulgewicht(string $molekuulgewicht) Return GsGeneriekeNamen objects filtered by the molekuulgewicht column
 * @method array findByMolekuulgewichtIndicator(string $molekuulgewicht_indicator) Return GsGeneriekeNamen objects filtered by the molekuulgewicht_indicator column
 * @method array findByMolekuulgewichtVoorSamenstelling(string $molekuulgewicht_voor_samenstelling) Return GsGeneriekeNamen objects filtered by the molekuulgewicht_voor_samenstelling column
 * @method array findBySoortelijkGewicht(string $soortelijk_gewicht) Return GsGeneriekeNamen objects filtered by the soortelijk_gewicht column
 * @method array findByVoorkeurseenheid(string $voorkeurseenheid) Return GsGeneriekeNamen objects filtered by the voorkeurseenheid column
 * @method array findByKodeRijvaardigheid(string $kode_rijvaardigheid) Return GsGeneriekeNamen objects filtered by the kode_rijvaardigheid column
 * @method array findByKodeVergift(string $kode_vergift) Return GsGeneriekeNamen objects filtered by the kode_vergift column
 * @method array findByKodeOpiumwet(string $kode_opiumwet) Return GsGeneriekeNamen objects filtered by the kode_opiumwet column
 */
abstract class BaseGsGeneriekeNamenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsGeneriekeNamenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeNamen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsGeneriekeNamenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsGeneriekeNamenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsGeneriekeNamenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsGeneriekeNamenQuery) {
            return $criteria;
        }
        $query = new GsGeneriekeNamenQuery(null, null, $modelAlias);

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
     * @return   GsGeneriekeNamen|GsGeneriekeNamen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsGeneriekeNamenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeNamenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsGeneriekeNamen A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByGeneriekenaamkode($key, $con = null)
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
     * @return                 GsGeneriekeNamen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `generiekenaamkode`, `generieke_naam`, `stamnaamcode`, `volledige_generieke_naam_kode`, `kode_stamnaam_toegestaan`, `kode_werkzaam_bestanddeelhulpstof`, `informatorium_stof_kode`, `cas_nummer`, `bruto_formule`, `molekuulgewicht`, `molekuulgewicht_indicator`, `molekuulgewicht_voor_samenstelling`, `soortelijk_gewicht`, `voorkeurseenheid`, `kode_rijvaardigheid`, `kode_vergift`, `kode_opiumwet` FROM `gs_generieke_namen` WHERE `generiekenaamkode` = :p0';
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
            $obj = new GsGeneriekeNamen();
            $obj->hydrate($row);
            GsGeneriekeNamenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsGeneriekeNamen|GsGeneriekeNamen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsGeneriekeNamen[]|mixed the list of results, formatted by the current formatter
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
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $keys, Criteria::IN);
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
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the generiekenaamkode column
     *
     * Example usage:
     * <code>
     * $query->filterByGeneriekenaamkode(1234); // WHERE generiekenaamkode = 1234
     * $query->filterByGeneriekenaamkode(array(12, 34)); // WHERE generiekenaamkode IN (12, 34)
     * $query->filterByGeneriekenaamkode(array('min' => 12)); // WHERE generiekenaamkode >= 12
     * $query->filterByGeneriekenaamkode(array('max' => 12)); // WHERE generiekenaamkode <= 12
     * </code>
     *
     * @param     mixed $generiekenaamkode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByGeneriekenaamkode($generiekenaamkode = null, $comparison = null)
    {
        if (is_array($generiekenaamkode)) {
            $useMinMax = false;
            if (isset($generiekenaamkode['min'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $generiekenaamkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($generiekenaamkode['max'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $generiekenaamkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $generiekenaamkode, $comparison);
    }

    /**
     * Filter the query on the generieke_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByGeneriekeNaam('fooValue');   // WHERE generieke_naam = 'fooValue'
     * $query->filterByGeneriekeNaam('%fooValue%'); // WHERE generieke_naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $generiekeNaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByGeneriekeNaam($generiekeNaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($generiekeNaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $generiekeNaam)) {
                $generiekeNaam = str_replace('*', '%', $generiekeNaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::GENERIEKE_NAAM, $generiekeNaam, $comparison);
    }

    /**
     * Filter the query on the stamnaamcode column
     *
     * Example usage:
     * <code>
     * $query->filterByStamnaamcode(1234); // WHERE stamnaamcode = 1234
     * $query->filterByStamnaamcode(array(12, 34)); // WHERE stamnaamcode IN (12, 34)
     * $query->filterByStamnaamcode(array('min' => 12)); // WHERE stamnaamcode >= 12
     * $query->filterByStamnaamcode(array('max' => 12)); // WHERE stamnaamcode <= 12
     * </code>
     *
     * @param     mixed $stamnaamcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByStamnaamcode($stamnaamcode = null, $comparison = null)
    {
        if (is_array($stamnaamcode)) {
            $useMinMax = false;
            if (isset($stamnaamcode['min'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::STAMNAAMCODE, $stamnaamcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stamnaamcode['max'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::STAMNAAMCODE, $stamnaamcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::STAMNAAMCODE, $stamnaamcode, $comparison);
    }

    /**
     * Filter the query on the volledige_generieke_naam_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByVolledigeGeneriekeNaamKode(1234); // WHERE volledige_generieke_naam_kode = 1234
     * $query->filterByVolledigeGeneriekeNaamKode(array(12, 34)); // WHERE volledige_generieke_naam_kode IN (12, 34)
     * $query->filterByVolledigeGeneriekeNaamKode(array('min' => 12)); // WHERE volledige_generieke_naam_kode >= 12
     * $query->filterByVolledigeGeneriekeNaamKode(array('max' => 12)); // WHERE volledige_generieke_naam_kode <= 12
     * </code>
     *
     * @param     mixed $volledigeGeneriekeNaamKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByVolledigeGeneriekeNaamKode($volledigeGeneriekeNaamKode = null, $comparison = null)
    {
        if (is_array($volledigeGeneriekeNaamKode)) {
            $useMinMax = false;
            if (isset($volledigeGeneriekeNaamKode['min'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE, $volledigeGeneriekeNaamKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($volledigeGeneriekeNaamKode['max'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE, $volledigeGeneriekeNaamKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE, $volledigeGeneriekeNaamKode, $comparison);
    }

    /**
     * Filter the query on the kode_stamnaam_toegestaan column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeStamnaamToegestaan('fooValue');   // WHERE kode_stamnaam_toegestaan = 'fooValue'
     * $query->filterByKodeStamnaamToegestaan('%fooValue%'); // WHERE kode_stamnaam_toegestaan LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kodeStamnaamToegestaan The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByKodeStamnaamToegestaan($kodeStamnaamToegestaan = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kodeStamnaamToegestaan)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kodeStamnaamToegestaan)) {
                $kodeStamnaamToegestaan = str_replace('*', '%', $kodeStamnaamToegestaan);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::KODE_STAMNAAM_TOEGESTAAN, $kodeStamnaamToegestaan, $comparison);
    }

    /**
     * Filter the query on the kode_werkzaam_bestanddeelhulpstof column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeWerkzaamBestanddeelhulpstof('fooValue');   // WHERE kode_werkzaam_bestanddeelhulpstof = 'fooValue'
     * $query->filterByKodeWerkzaamBestanddeelhulpstof('%fooValue%'); // WHERE kode_werkzaam_bestanddeelhulpstof LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kodeWerkzaamBestanddeelhulpstof The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByKodeWerkzaamBestanddeelhulpstof($kodeWerkzaamBestanddeelhulpstof = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kodeWerkzaamBestanddeelhulpstof)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kodeWerkzaamBestanddeelhulpstof)) {
                $kodeWerkzaamBestanddeelhulpstof = str_replace('*', '%', $kodeWerkzaamBestanddeelhulpstof);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::KODE_WERKZAAM_BESTANDDEELHULPSTOF, $kodeWerkzaamBestanddeelhulpstof, $comparison);
    }

    /**
     * Filter the query on the informatorium_stof_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByInformatoriumStofKode(1234); // WHERE informatorium_stof_kode = 1234
     * $query->filterByInformatoriumStofKode(array(12, 34)); // WHERE informatorium_stof_kode IN (12, 34)
     * $query->filterByInformatoriumStofKode(array('min' => 12)); // WHERE informatorium_stof_kode >= 12
     * $query->filterByInformatoriumStofKode(array('max' => 12)); // WHERE informatorium_stof_kode <= 12
     * </code>
     *
     * @param     mixed $informatoriumStofKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByInformatoriumStofKode($informatoriumStofKode = null, $comparison = null)
    {
        if (is_array($informatoriumStofKode)) {
            $useMinMax = false;
            if (isset($informatoriumStofKode['min'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::INFORMATORIUM_STOF_KODE, $informatoriumStofKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($informatoriumStofKode['max'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::INFORMATORIUM_STOF_KODE, $informatoriumStofKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::INFORMATORIUM_STOF_KODE, $informatoriumStofKode, $comparison);
    }

    /**
     * Filter the query on the cas_nummer column
     *
     * Example usage:
     * <code>
     * $query->filterByCasNummer(1234); // WHERE cas_nummer = 1234
     * $query->filterByCasNummer(array(12, 34)); // WHERE cas_nummer IN (12, 34)
     * $query->filterByCasNummer(array('min' => 12)); // WHERE cas_nummer >= 12
     * $query->filterByCasNummer(array('max' => 12)); // WHERE cas_nummer <= 12
     * </code>
     *
     * @param     mixed $casNummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByCasNummer($casNummer = null, $comparison = null)
    {
        if (is_array($casNummer)) {
            $useMinMax = false;
            if (isset($casNummer['min'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::CAS_NUMMER, $casNummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($casNummer['max'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::CAS_NUMMER, $casNummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::CAS_NUMMER, $casNummer, $comparison);
    }

    /**
     * Filter the query on the bruto_formule column
     *
     * Example usage:
     * <code>
     * $query->filterByBrutoFormule('fooValue');   // WHERE bruto_formule = 'fooValue'
     * $query->filterByBrutoFormule('%fooValue%'); // WHERE bruto_formule LIKE '%fooValue%'
     * </code>
     *
     * @param     string $brutoFormule The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByBrutoFormule($brutoFormule = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($brutoFormule)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $brutoFormule)) {
                $brutoFormule = str_replace('*', '%', $brutoFormule);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::BRUTO_FORMULE, $brutoFormule, $comparison);
    }

    /**
     * Filter the query on the molekuulgewicht column
     *
     * Example usage:
     * <code>
     * $query->filterByMolekuulgewicht(1234); // WHERE molekuulgewicht = 1234
     * $query->filterByMolekuulgewicht(array(12, 34)); // WHERE molekuulgewicht IN (12, 34)
     * $query->filterByMolekuulgewicht(array('min' => 12)); // WHERE molekuulgewicht >= 12
     * $query->filterByMolekuulgewicht(array('max' => 12)); // WHERE molekuulgewicht <= 12
     * </code>
     *
     * @param     mixed $molekuulgewicht The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByMolekuulgewicht($molekuulgewicht = null, $comparison = null)
    {
        if (is_array($molekuulgewicht)) {
            $useMinMax = false;
            if (isset($molekuulgewicht['min'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::MOLEKUULGEWICHT, $molekuulgewicht['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($molekuulgewicht['max'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::MOLEKUULGEWICHT, $molekuulgewicht['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::MOLEKUULGEWICHT, $molekuulgewicht, $comparison);
    }

    /**
     * Filter the query on the molekuulgewicht_indicator column
     *
     * Example usage:
     * <code>
     * $query->filterByMolekuulgewichtIndicator('fooValue');   // WHERE molekuulgewicht_indicator = 'fooValue'
     * $query->filterByMolekuulgewichtIndicator('%fooValue%'); // WHERE molekuulgewicht_indicator LIKE '%fooValue%'
     * </code>
     *
     * @param     string $molekuulgewichtIndicator The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByMolekuulgewichtIndicator($molekuulgewichtIndicator = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($molekuulgewichtIndicator)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $molekuulgewichtIndicator)) {
                $molekuulgewichtIndicator = str_replace('*', '%', $molekuulgewichtIndicator);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::MOLEKUULGEWICHT_INDICATOR, $molekuulgewichtIndicator, $comparison);
    }

    /**
     * Filter the query on the molekuulgewicht_voor_samenstelling column
     *
     * Example usage:
     * <code>
     * $query->filterByMolekuulgewichtVoorSamenstelling(1234); // WHERE molekuulgewicht_voor_samenstelling = 1234
     * $query->filterByMolekuulgewichtVoorSamenstelling(array(12, 34)); // WHERE molekuulgewicht_voor_samenstelling IN (12, 34)
     * $query->filterByMolekuulgewichtVoorSamenstelling(array('min' => 12)); // WHERE molekuulgewicht_voor_samenstelling >= 12
     * $query->filterByMolekuulgewichtVoorSamenstelling(array('max' => 12)); // WHERE molekuulgewicht_voor_samenstelling <= 12
     * </code>
     *
     * @param     mixed $molekuulgewichtVoorSamenstelling The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByMolekuulgewichtVoorSamenstelling($molekuulgewichtVoorSamenstelling = null, $comparison = null)
    {
        if (is_array($molekuulgewichtVoorSamenstelling)) {
            $useMinMax = false;
            if (isset($molekuulgewichtVoorSamenstelling['min'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::MOLEKUULGEWICHT_VOOR_SAMENSTELLING, $molekuulgewichtVoorSamenstelling['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($molekuulgewichtVoorSamenstelling['max'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::MOLEKUULGEWICHT_VOOR_SAMENSTELLING, $molekuulgewichtVoorSamenstelling['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::MOLEKUULGEWICHT_VOOR_SAMENSTELLING, $molekuulgewichtVoorSamenstelling, $comparison);
    }

    /**
     * Filter the query on the soortelijk_gewicht column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortelijkGewicht(1234); // WHERE soortelijk_gewicht = 1234
     * $query->filterBySoortelijkGewicht(array(12, 34)); // WHERE soortelijk_gewicht IN (12, 34)
     * $query->filterBySoortelijkGewicht(array('min' => 12)); // WHERE soortelijk_gewicht >= 12
     * $query->filterBySoortelijkGewicht(array('max' => 12)); // WHERE soortelijk_gewicht <= 12
     * </code>
     *
     * @param     mixed $soortelijkGewicht The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterBySoortelijkGewicht($soortelijkGewicht = null, $comparison = null)
    {
        if (is_array($soortelijkGewicht)) {
            $useMinMax = false;
            if (isset($soortelijkGewicht['min'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::SOORTELIJK_GEWICHT, $soortelijkGewicht['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortelijkGewicht['max'])) {
                $this->addUsingAlias(GsGeneriekeNamenPeer::SOORTELIJK_GEWICHT, $soortelijkGewicht['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::SOORTELIJK_GEWICHT, $soortelijkGewicht, $comparison);
    }

    /**
     * Filter the query on the voorkeurseenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByVoorkeurseenheid('fooValue');   // WHERE voorkeurseenheid = 'fooValue'
     * $query->filterByVoorkeurseenheid('%fooValue%'); // WHERE voorkeurseenheid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $voorkeurseenheid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByVoorkeurseenheid($voorkeurseenheid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($voorkeurseenheid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $voorkeurseenheid)) {
                $voorkeurseenheid = str_replace('*', '%', $voorkeurseenheid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::VOORKEURSEENHEID, $voorkeurseenheid, $comparison);
    }

    /**
     * Filter the query on the kode_rijvaardigheid column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeRijvaardigheid('fooValue');   // WHERE kode_rijvaardigheid = 'fooValue'
     * $query->filterByKodeRijvaardigheid('%fooValue%'); // WHERE kode_rijvaardigheid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kodeRijvaardigheid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByKodeRijvaardigheid($kodeRijvaardigheid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kodeRijvaardigheid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kodeRijvaardigheid)) {
                $kodeRijvaardigheid = str_replace('*', '%', $kodeRijvaardigheid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::KODE_RIJVAARDIGHEID, $kodeRijvaardigheid, $comparison);
    }

    /**
     * Filter the query on the kode_vergift column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeVergift('fooValue');   // WHERE kode_vergift = 'fooValue'
     * $query->filterByKodeVergift('%fooValue%'); // WHERE kode_vergift LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kodeVergift The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByKodeVergift($kodeVergift = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kodeVergift)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kodeVergift)) {
                $kodeVergift = str_replace('*', '%', $kodeVergift);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::KODE_VERGIFT, $kodeVergift, $comparison);
    }

    /**
     * Filter the query on the kode_opiumwet column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeOpiumwet('fooValue');   // WHERE kode_opiumwet = 'fooValue'
     * $query->filterByKodeOpiumwet('%fooValue%'); // WHERE kode_opiumwet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kodeOpiumwet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function filterByKodeOpiumwet($kodeOpiumwet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kodeOpiumwet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kodeOpiumwet)) {
                $kodeOpiumwet = str_replace('*', '%', $kodeOpiumwet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsGeneriekeNamenPeer::KODE_OPIUMWET, $kodeOpiumwet, $comparison);
    }

    /**
     * Filter the query by a related GsIngegevenSamenstellingen object
     *
     * @param   GsIngegevenSamenstellingen|PropelObjectCollection $gsIngegevenSamenstellingen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsGeneriekeNamenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsIngegevenSamenstellingen($gsIngegevenSamenstellingen, $comparison = null)
    {
        if ($gsIngegevenSamenstellingen instanceof GsIngegevenSamenstellingen) {
            return $this
                ->addUsingAlias(GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $gsIngegevenSamenstellingen->getGeneriekenaamkode(), $comparison);
        } elseif ($gsIngegevenSamenstellingen instanceof PropelObjectCollection) {
            return $this
                ->useGsIngegevenSamenstellingenQuery()
                ->filterByPrimaryKeys($gsIngegevenSamenstellingen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsIngegevenSamenstellingen() only accepts arguments of type GsIngegevenSamenstellingen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsIngegevenSamenstellingen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function joinGsIngegevenSamenstellingen($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsIngegevenSamenstellingen');

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
            $this->addJoinObject($join, 'GsIngegevenSamenstellingen');
        }

        return $this;
    }

    /**
     * Use the GsIngegevenSamenstellingen relation GsIngegevenSamenstellingen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingenQuery A secondary query class using the current class as primary query
     */
    public function useGsIngegevenSamenstellingenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsIngegevenSamenstellingen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsIngegevenSamenstellingen', '\PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingenQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsGeneriekeNamen $gsGeneriekeNamen Object to remove from the list of results
     *
     * @return GsGeneriekeNamenQuery The current query, for fluid interface
     */
    public function prune($gsGeneriekeNamen = null)
    {
        if ($gsGeneriekeNamen) {
            $this->addUsingAlias(GsGeneriekeNamenPeer::GENERIEKENAAMKODE, $gsGeneriekeNamen->getGeneriekenaamkode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
