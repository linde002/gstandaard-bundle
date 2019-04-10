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
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsLeveranciersassortimenten;
use PharmaIntelligence\GstandaardBundle\Model\GsLeveranciersassortimentenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsLeveranciersassortimentenQuery;

/**
 * @method GsLeveranciersassortimentenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsLeveranciersassortimentenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsLeveranciersassortimentenQuery orderByAssortimentsnummer($order = Criteria::ASC) Order by the assortimentsnummer column
 * @method GsLeveranciersassortimentenQuery orderByZinummer($order = Criteria::ASC) Order by the zinummer column
 * @method GsLeveranciersassortimentenQuery orderByInternArtikelnummerAssorthouder($order = Criteria::ASC) Order by the intern_artikelnummer_assorthouder column
 * @method GsLeveranciersassortimentenQuery orderByFaktorVanHetArtikelnummer($order = Criteria::ASC) Order by the faktor_van_het_artikelnummer column
 * @method GsLeveranciersassortimentenQuery orderByOmschrijving($order = Criteria::ASC) Order by the omschrijving column
 * @method GsLeveranciersassortimentenQuery orderByAssortimentshouder($order = Criteria::ASC) Order by the assortimentshouder column
 * @method GsLeveranciersassortimentenQuery orderByDatumVanIngang($order = Criteria::ASC) Order by the datum_van_ingang column
 * @method GsLeveranciersassortimentenQuery orderByRetourtermijn($order = Criteria::ASC) Order by the retourtermijn column
 * @method GsLeveranciersassortimentenQuery orderByRetouraanduiding($order = Criteria::ASC) Order by the retouraanduiding column
 * @method GsLeveranciersassortimentenQuery orderByRetourpercentage($order = Criteria::ASC) Order by the retourpercentage column
 * @method GsLeveranciersassortimentenQuery orderByAssortimentsprijs($order = Criteria::ASC) Order by the assortimentsprijs column
 * @method GsLeveranciersassortimentenQuery orderByOpgegevenVerkoopprijs($order = Criteria::ASC) Order by the opgegeven_verkoopprijs column
 * @method GsLeveranciersassortimentenQuery orderByBtwkodeVanAssortimentshouder($order = Criteria::ASC) Order by the btwkode_van_assortimentshouder column
 * @method GsLeveranciersassortimentenQuery orderByHoeveelheid($order = Criteria::ASC) Order by the hoeveelheid column
 * @method GsLeveranciersassortimentenQuery orderByEenheid($order = Criteria::ASC) Order by the eenheid column
 * @method GsLeveranciersassortimentenQuery orderByEanBarcode($order = Criteria::ASC) Order by the ean_barcode column
 * @method GsLeveranciersassortimentenQuery orderByHibcBarcode($order = Criteria::ASC) Order by the hibc_barcode column
 * @method GsLeveranciersassortimentenQuery orderByMinikaartKode($order = Criteria::ASC) Order by the minikaart_kode column
 * @method GsLeveranciersassortimentenQuery orderByBestelmogelijkheid($order = Criteria::ASC) Order by the bestelmogelijkheid column
 *
 * @method GsLeveranciersassortimentenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsLeveranciersassortimentenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsLeveranciersassortimentenQuery groupByAssortimentsnummer() Group by the assortimentsnummer column
 * @method GsLeveranciersassortimentenQuery groupByZinummer() Group by the zinummer column
 * @method GsLeveranciersassortimentenQuery groupByInternArtikelnummerAssorthouder() Group by the intern_artikelnummer_assorthouder column
 * @method GsLeveranciersassortimentenQuery groupByFaktorVanHetArtikelnummer() Group by the faktor_van_het_artikelnummer column
 * @method GsLeveranciersassortimentenQuery groupByOmschrijving() Group by the omschrijving column
 * @method GsLeveranciersassortimentenQuery groupByAssortimentshouder() Group by the assortimentshouder column
 * @method GsLeveranciersassortimentenQuery groupByDatumVanIngang() Group by the datum_van_ingang column
 * @method GsLeveranciersassortimentenQuery groupByRetourtermijn() Group by the retourtermijn column
 * @method GsLeveranciersassortimentenQuery groupByRetouraanduiding() Group by the retouraanduiding column
 * @method GsLeveranciersassortimentenQuery groupByRetourpercentage() Group by the retourpercentage column
 * @method GsLeveranciersassortimentenQuery groupByAssortimentsprijs() Group by the assortimentsprijs column
 * @method GsLeveranciersassortimentenQuery groupByOpgegevenVerkoopprijs() Group by the opgegeven_verkoopprijs column
 * @method GsLeveranciersassortimentenQuery groupByBtwkodeVanAssortimentshouder() Group by the btwkode_van_assortimentshouder column
 * @method GsLeveranciersassortimentenQuery groupByHoeveelheid() Group by the hoeveelheid column
 * @method GsLeveranciersassortimentenQuery groupByEenheid() Group by the eenheid column
 * @method GsLeveranciersassortimentenQuery groupByEanBarcode() Group by the ean_barcode column
 * @method GsLeveranciersassortimentenQuery groupByHibcBarcode() Group by the hibc_barcode column
 * @method GsLeveranciersassortimentenQuery groupByMinikaartKode() Group by the minikaart_kode column
 * @method GsLeveranciersassortimentenQuery groupByBestelmogelijkheid() Group by the bestelmogelijkheid column
 *
 * @method GsLeveranciersassortimentenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsLeveranciersassortimentenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsLeveranciersassortimentenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsLeveranciersassortimentenQuery leftJoinGsArtikelen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelen relation
 * @method GsLeveranciersassortimentenQuery rightJoinGsArtikelen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelen relation
 * @method GsLeveranciersassortimentenQuery innerJoinGsArtikelen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelen relation
 *
 * @method GsLeveranciersassortimenten findOne(PropelPDO $con = null) Return the first GsLeveranciersassortimenten matching the query
 * @method GsLeveranciersassortimenten findOneOrCreate(PropelPDO $con = null) Return the first GsLeveranciersassortimenten matching the query, or a new GsLeveranciersassortimenten object populated from the query conditions when no match is found
 *
 * @method GsLeveranciersassortimenten findOneByBestandnummer(int $bestandnummer) Return the first GsLeveranciersassortimenten filtered by the bestandnummer column
 * @method GsLeveranciersassortimenten findOneByMutatiekode(int $mutatiekode) Return the first GsLeveranciersassortimenten filtered by the mutatiekode column
 * @method GsLeveranciersassortimenten findOneByZinummer(int $zinummer) Return the first GsLeveranciersassortimenten filtered by the zinummer column
 * @method GsLeveranciersassortimenten findOneByInternArtikelnummerAssorthouder(string $intern_artikelnummer_assorthouder) Return the first GsLeveranciersassortimenten filtered by the intern_artikelnummer_assorthouder column
 * @method GsLeveranciersassortimenten findOneByFaktorVanHetArtikelnummer(string $faktor_van_het_artikelnummer) Return the first GsLeveranciersassortimenten filtered by the faktor_van_het_artikelnummer column
 * @method GsLeveranciersassortimenten findOneByOmschrijving(string $omschrijving) Return the first GsLeveranciersassortimenten filtered by the omschrijving column
 * @method GsLeveranciersassortimenten findOneByAssortimentshouder(int $assortimentshouder) Return the first GsLeveranciersassortimenten filtered by the assortimentshouder column
 * @method GsLeveranciersassortimenten findOneByDatumVanIngang(string $datum_van_ingang) Return the first GsLeveranciersassortimenten filtered by the datum_van_ingang column
 * @method GsLeveranciersassortimenten findOneByRetourtermijn(int $retourtermijn) Return the first GsLeveranciersassortimenten filtered by the retourtermijn column
 * @method GsLeveranciersassortimenten findOneByRetouraanduiding(string $retouraanduiding) Return the first GsLeveranciersassortimenten filtered by the retouraanduiding column
 * @method GsLeveranciersassortimenten findOneByRetourpercentage(int $retourpercentage) Return the first GsLeveranciersassortimenten filtered by the retourpercentage column
 * @method GsLeveranciersassortimenten findOneByAssortimentsprijs(string $assortimentsprijs) Return the first GsLeveranciersassortimenten filtered by the assortimentsprijs column
 * @method GsLeveranciersassortimenten findOneByOpgegevenVerkoopprijs(string $opgegeven_verkoopprijs) Return the first GsLeveranciersassortimenten filtered by the opgegeven_verkoopprijs column
 * @method GsLeveranciersassortimenten findOneByBtwkodeVanAssortimentshouder(int $btwkode_van_assortimentshouder) Return the first GsLeveranciersassortimenten filtered by the btwkode_van_assortimentshouder column
 * @method GsLeveranciersassortimenten findOneByHoeveelheid(string $hoeveelheid) Return the first GsLeveranciersassortimenten filtered by the hoeveelheid column
 * @method GsLeveranciersassortimenten findOneByEenheid(string $eenheid) Return the first GsLeveranciersassortimenten filtered by the eenheid column
 * @method GsLeveranciersassortimenten findOneByEanBarcode(string $ean_barcode) Return the first GsLeveranciersassortimenten filtered by the ean_barcode column
 * @method GsLeveranciersassortimenten findOneByHibcBarcode(string $hibc_barcode) Return the first GsLeveranciersassortimenten filtered by the hibc_barcode column
 * @method GsLeveranciersassortimenten findOneByMinikaartKode(int $minikaart_kode) Return the first GsLeveranciersassortimenten filtered by the minikaart_kode column
 * @method GsLeveranciersassortimenten findOneByBestelmogelijkheid(string $bestelmogelijkheid) Return the first GsLeveranciersassortimenten filtered by the bestelmogelijkheid column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsLeveranciersassortimenten objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsLeveranciersassortimenten objects filtered by the mutatiekode column
 * @method array findByAssortimentsnummer(int $assortimentsnummer) Return GsLeveranciersassortimenten objects filtered by the assortimentsnummer column
 * @method array findByZinummer(int $zinummer) Return GsLeveranciersassortimenten objects filtered by the zinummer column
 * @method array findByInternArtikelnummerAssorthouder(string $intern_artikelnummer_assorthouder) Return GsLeveranciersassortimenten objects filtered by the intern_artikelnummer_assorthouder column
 * @method array findByFaktorVanHetArtikelnummer(string $faktor_van_het_artikelnummer) Return GsLeveranciersassortimenten objects filtered by the faktor_van_het_artikelnummer column
 * @method array findByOmschrijving(string $omschrijving) Return GsLeveranciersassortimenten objects filtered by the omschrijving column
 * @method array findByAssortimentshouder(int $assortimentshouder) Return GsLeveranciersassortimenten objects filtered by the assortimentshouder column
 * @method array findByDatumVanIngang(string $datum_van_ingang) Return GsLeveranciersassortimenten objects filtered by the datum_van_ingang column
 * @method array findByRetourtermijn(int $retourtermijn) Return GsLeveranciersassortimenten objects filtered by the retourtermijn column
 * @method array findByRetouraanduiding(string $retouraanduiding) Return GsLeveranciersassortimenten objects filtered by the retouraanduiding column
 * @method array findByRetourpercentage(int $retourpercentage) Return GsLeveranciersassortimenten objects filtered by the retourpercentage column
 * @method array findByAssortimentsprijs(string $assortimentsprijs) Return GsLeveranciersassortimenten objects filtered by the assortimentsprijs column
 * @method array findByOpgegevenVerkoopprijs(string $opgegeven_verkoopprijs) Return GsLeveranciersassortimenten objects filtered by the opgegeven_verkoopprijs column
 * @method array findByBtwkodeVanAssortimentshouder(int $btwkode_van_assortimentshouder) Return GsLeveranciersassortimenten objects filtered by the btwkode_van_assortimentshouder column
 * @method array findByHoeveelheid(string $hoeveelheid) Return GsLeveranciersassortimenten objects filtered by the hoeveelheid column
 * @method array findByEenheid(string $eenheid) Return GsLeveranciersassortimenten objects filtered by the eenheid column
 * @method array findByEanBarcode(string $ean_barcode) Return GsLeveranciersassortimenten objects filtered by the ean_barcode column
 * @method array findByHibcBarcode(string $hibc_barcode) Return GsLeveranciersassortimenten objects filtered by the hibc_barcode column
 * @method array findByMinikaartKode(int $minikaart_kode) Return GsLeveranciersassortimenten objects filtered by the minikaart_kode column
 * @method array findByBestelmogelijkheid(string $bestelmogelijkheid) Return GsLeveranciersassortimenten objects filtered by the bestelmogelijkheid column
 */
abstract class BaseGsLeveranciersassortimentenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsLeveranciersassortimentenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLeveranciersassortimenten';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsLeveranciersassortimentenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsLeveranciersassortimentenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsLeveranciersassortimentenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsLeveranciersassortimentenQuery) {
            return $criteria;
        }
        $query = new GsLeveranciersassortimentenQuery(null, null, $modelAlias);

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
     * @return   GsLeveranciersassortimenten|GsLeveranciersassortimenten[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsLeveranciersassortimentenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsLeveranciersassortimentenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsLeveranciersassortimenten A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByAssortimentsnummer($key, $con = null)
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
     * @return                 GsLeveranciersassortimenten A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `assortimentsnummer`, `zinummer`, `intern_artikelnummer_assorthouder`, `faktor_van_het_artikelnummer`, `omschrijving`, `assortimentshouder`, `datum_van_ingang`, `retourtermijn`, `retouraanduiding`, `retourpercentage`, `assortimentsprijs`, `opgegeven_verkoopprijs`, `btwkode_van_assortimentshouder`, `hoeveelheid`, `eenheid`, `ean_barcode`, `hibc_barcode`, `minikaart_kode`, `bestelmogelijkheid` FROM `gs_leveranciersassortimenten` WHERE `assortimentsnummer` = :p0';
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
            $obj = new GsLeveranciersassortimenten();
            $obj->hydrate($row);
            GsLeveranciersassortimentenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsLeveranciersassortimenten|GsLeveranciersassortimenten[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsLeveranciersassortimenten[]|mixed the list of results, formatted by the current formatter
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
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER, $keys, Criteria::IN);
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
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the assortimentsnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByAssortimentsnummer(1234); // WHERE assortimentsnummer = 1234
     * $query->filterByAssortimentsnummer(array(12, 34)); // WHERE assortimentsnummer IN (12, 34)
     * $query->filterByAssortimentsnummer(array('min' => 12)); // WHERE assortimentsnummer >= 12
     * $query->filterByAssortimentsnummer(array('max' => 12)); // WHERE assortimentsnummer <= 12
     * </code>
     *
     * @param     mixed $assortimentsnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByAssortimentsnummer($assortimentsnummer = null, $comparison = null)
    {
        if (is_array($assortimentsnummer)) {
            $useMinMax = false;
            if (isset($assortimentsnummer['min'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER, $assortimentsnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($assortimentsnummer['max'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER, $assortimentsnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER, $assortimentsnummer, $comparison);
    }

    /**
     * Filter the query on the zinummer column
     *
     * Example usage:
     * <code>
     * $query->filterByZinummer(1234); // WHERE zinummer = 1234
     * $query->filterByZinummer(array(12, 34)); // WHERE zinummer IN (12, 34)
     * $query->filterByZinummer(array('min' => 12)); // WHERE zinummer >= 12
     * $query->filterByZinummer(array('max' => 12)); // WHERE zinummer <= 12
     * </code>
     *
     * @see       filterByGsArtikelen()
     *
     * @param     mixed $zinummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByZinummer($zinummer = null, $comparison = null)
    {
        if (is_array($zinummer)) {
            $useMinMax = false;
            if (isset($zinummer['min'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::ZINUMMER, $zinummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zinummer['max'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::ZINUMMER, $zinummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::ZINUMMER, $zinummer, $comparison);
    }

    /**
     * Filter the query on the intern_artikelnummer_assorthouder column
     *
     * Example usage:
     * <code>
     * $query->filterByInternArtikelnummerAssorthouder('fooValue');   // WHERE intern_artikelnummer_assorthouder = 'fooValue'
     * $query->filterByInternArtikelnummerAssorthouder('%fooValue%'); // WHERE intern_artikelnummer_assorthouder LIKE '%fooValue%'
     * </code>
     *
     * @param     string $internArtikelnummerAssorthouder The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByInternArtikelnummerAssorthouder($internArtikelnummerAssorthouder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($internArtikelnummerAssorthouder)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $internArtikelnummerAssorthouder)) {
                $internArtikelnummerAssorthouder = str_replace('*', '%', $internArtikelnummerAssorthouder);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::INTERN_ARTIKELNUMMER_ASSORTHOUDER, $internArtikelnummerAssorthouder, $comparison);
    }

    /**
     * Filter the query on the faktor_van_het_artikelnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByFaktorVanHetArtikelnummer(1234); // WHERE faktor_van_het_artikelnummer = 1234
     * $query->filterByFaktorVanHetArtikelnummer(array(12, 34)); // WHERE faktor_van_het_artikelnummer IN (12, 34)
     * $query->filterByFaktorVanHetArtikelnummer(array('min' => 12)); // WHERE faktor_van_het_artikelnummer >= 12
     * $query->filterByFaktorVanHetArtikelnummer(array('max' => 12)); // WHERE faktor_van_het_artikelnummer <= 12
     * </code>
     *
     * @param     mixed $faktorVanHetArtikelnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByFaktorVanHetArtikelnummer($faktorVanHetArtikelnummer = null, $comparison = null)
    {
        if (is_array($faktorVanHetArtikelnummer)) {
            $useMinMax = false;
            if (isset($faktorVanHetArtikelnummer['min'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::FAKTOR_VAN_HET_ARTIKELNUMMER, $faktorVanHetArtikelnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($faktorVanHetArtikelnummer['max'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::FAKTOR_VAN_HET_ARTIKELNUMMER, $faktorVanHetArtikelnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::FAKTOR_VAN_HET_ARTIKELNUMMER, $faktorVanHetArtikelnummer, $comparison);
    }

    /**
     * Filter the query on the omschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByOmschrijving('fooValue');   // WHERE omschrijving = 'fooValue'
     * $query->filterByOmschrijving('%fooValue%'); // WHERE omschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $omschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByOmschrijving($omschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($omschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $omschrijving)) {
                $omschrijving = str_replace('*', '%', $omschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::OMSCHRIJVING, $omschrijving, $comparison);
    }

    /**
     * Filter the query on the assortimentshouder column
     *
     * Example usage:
     * <code>
     * $query->filterByAssortimentshouder(1234); // WHERE assortimentshouder = 1234
     * $query->filterByAssortimentshouder(array(12, 34)); // WHERE assortimentshouder IN (12, 34)
     * $query->filterByAssortimentshouder(array('min' => 12)); // WHERE assortimentshouder >= 12
     * $query->filterByAssortimentshouder(array('max' => 12)); // WHERE assortimentshouder <= 12
     * </code>
     *
     * @param     mixed $assortimentshouder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByAssortimentshouder($assortimentshouder = null, $comparison = null)
    {
        if (is_array($assortimentshouder)) {
            $useMinMax = false;
            if (isset($assortimentshouder['min'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::ASSORTIMENTSHOUDER, $assortimentshouder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($assortimentshouder['max'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::ASSORTIMENTSHOUDER, $assortimentshouder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::ASSORTIMENTSHOUDER, $assortimentshouder, $comparison);
    }

    /**
     * Filter the query on the datum_van_ingang column
     *
     * Example usage:
     * <code>
     * $query->filterByDatumVanIngang('2011-03-14'); // WHERE datum_van_ingang = '2011-03-14'
     * $query->filterByDatumVanIngang('now'); // WHERE datum_van_ingang = '2011-03-14'
     * $query->filterByDatumVanIngang(array('max' => 'yesterday')); // WHERE datum_van_ingang < '2011-03-13'
     * </code>
     *
     * @param     mixed $datumVanIngang The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByDatumVanIngang($datumVanIngang = null, $comparison = null)
    {
        if (is_array($datumVanIngang)) {
            $useMinMax = false;
            if (isset($datumVanIngang['min'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::DATUM_VAN_INGANG, $datumVanIngang['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumVanIngang['max'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::DATUM_VAN_INGANG, $datumVanIngang['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::DATUM_VAN_INGANG, $datumVanIngang, $comparison);
    }

    /**
     * Filter the query on the retourtermijn column
     *
     * Example usage:
     * <code>
     * $query->filterByRetourtermijn(1234); // WHERE retourtermijn = 1234
     * $query->filterByRetourtermijn(array(12, 34)); // WHERE retourtermijn IN (12, 34)
     * $query->filterByRetourtermijn(array('min' => 12)); // WHERE retourtermijn >= 12
     * $query->filterByRetourtermijn(array('max' => 12)); // WHERE retourtermijn <= 12
     * </code>
     *
     * @param     mixed $retourtermijn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByRetourtermijn($retourtermijn = null, $comparison = null)
    {
        if (is_array($retourtermijn)) {
            $useMinMax = false;
            if (isset($retourtermijn['min'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::RETOURTERMIJN, $retourtermijn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($retourtermijn['max'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::RETOURTERMIJN, $retourtermijn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::RETOURTERMIJN, $retourtermijn, $comparison);
    }

    /**
     * Filter the query on the retouraanduiding column
     *
     * Example usage:
     * <code>
     * $query->filterByRetouraanduiding('fooValue');   // WHERE retouraanduiding = 'fooValue'
     * $query->filterByRetouraanduiding('%fooValue%'); // WHERE retouraanduiding LIKE '%fooValue%'
     * </code>
     *
     * @param     string $retouraanduiding The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByRetouraanduiding($retouraanduiding = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($retouraanduiding)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $retouraanduiding)) {
                $retouraanduiding = str_replace('*', '%', $retouraanduiding);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::RETOURAANDUIDING, $retouraanduiding, $comparison);
    }

    /**
     * Filter the query on the retourpercentage column
     *
     * Example usage:
     * <code>
     * $query->filterByRetourpercentage(1234); // WHERE retourpercentage = 1234
     * $query->filterByRetourpercentage(array(12, 34)); // WHERE retourpercentage IN (12, 34)
     * $query->filterByRetourpercentage(array('min' => 12)); // WHERE retourpercentage >= 12
     * $query->filterByRetourpercentage(array('max' => 12)); // WHERE retourpercentage <= 12
     * </code>
     *
     * @param     mixed $retourpercentage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByRetourpercentage($retourpercentage = null, $comparison = null)
    {
        if (is_array($retourpercentage)) {
            $useMinMax = false;
            if (isset($retourpercentage['min'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::RETOURPERCENTAGE, $retourpercentage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($retourpercentage['max'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::RETOURPERCENTAGE, $retourpercentage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::RETOURPERCENTAGE, $retourpercentage, $comparison);
    }

    /**
     * Filter the query on the assortimentsprijs column
     *
     * Example usage:
     * <code>
     * $query->filterByAssortimentsprijs(1234); // WHERE assortimentsprijs = 1234
     * $query->filterByAssortimentsprijs(array(12, 34)); // WHERE assortimentsprijs IN (12, 34)
     * $query->filterByAssortimentsprijs(array('min' => 12)); // WHERE assortimentsprijs >= 12
     * $query->filterByAssortimentsprijs(array('max' => 12)); // WHERE assortimentsprijs <= 12
     * </code>
     *
     * @param     mixed $assortimentsprijs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByAssortimentsprijs($assortimentsprijs = null, $comparison = null)
    {
        if (is_array($assortimentsprijs)) {
            $useMinMax = false;
            if (isset($assortimentsprijs['min'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::ASSORTIMENTSPRIJS, $assortimentsprijs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($assortimentsprijs['max'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::ASSORTIMENTSPRIJS, $assortimentsprijs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::ASSORTIMENTSPRIJS, $assortimentsprijs, $comparison);
    }

    /**
     * Filter the query on the opgegeven_verkoopprijs column
     *
     * Example usage:
     * <code>
     * $query->filterByOpgegevenVerkoopprijs(1234); // WHERE opgegeven_verkoopprijs = 1234
     * $query->filterByOpgegevenVerkoopprijs(array(12, 34)); // WHERE opgegeven_verkoopprijs IN (12, 34)
     * $query->filterByOpgegevenVerkoopprijs(array('min' => 12)); // WHERE opgegeven_verkoopprijs >= 12
     * $query->filterByOpgegevenVerkoopprijs(array('max' => 12)); // WHERE opgegeven_verkoopprijs <= 12
     * </code>
     *
     * @param     mixed $opgegevenVerkoopprijs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByOpgegevenVerkoopprijs($opgegevenVerkoopprijs = null, $comparison = null)
    {
        if (is_array($opgegevenVerkoopprijs)) {
            $useMinMax = false;
            if (isset($opgegevenVerkoopprijs['min'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::OPGEGEVEN_VERKOOPPRIJS, $opgegevenVerkoopprijs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($opgegevenVerkoopprijs['max'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::OPGEGEVEN_VERKOOPPRIJS, $opgegevenVerkoopprijs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::OPGEGEVEN_VERKOOPPRIJS, $opgegevenVerkoopprijs, $comparison);
    }

    /**
     * Filter the query on the btwkode_van_assortimentshouder column
     *
     * Example usage:
     * <code>
     * $query->filterByBtwkodeVanAssortimentshouder(1234); // WHERE btwkode_van_assortimentshouder = 1234
     * $query->filterByBtwkodeVanAssortimentshouder(array(12, 34)); // WHERE btwkode_van_assortimentshouder IN (12, 34)
     * $query->filterByBtwkodeVanAssortimentshouder(array('min' => 12)); // WHERE btwkode_van_assortimentshouder >= 12
     * $query->filterByBtwkodeVanAssortimentshouder(array('max' => 12)); // WHERE btwkode_van_assortimentshouder <= 12
     * </code>
     *
     * @param     mixed $btwkodeVanAssortimentshouder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByBtwkodeVanAssortimentshouder($btwkodeVanAssortimentshouder = null, $comparison = null)
    {
        if (is_array($btwkodeVanAssortimentshouder)) {
            $useMinMax = false;
            if (isset($btwkodeVanAssortimentshouder['min'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::BTWKODE_VAN_ASSORTIMENTSHOUDER, $btwkodeVanAssortimentshouder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($btwkodeVanAssortimentshouder['max'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::BTWKODE_VAN_ASSORTIMENTSHOUDER, $btwkodeVanAssortimentshouder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::BTWKODE_VAN_ASSORTIMENTSHOUDER, $btwkodeVanAssortimentshouder, $comparison);
    }

    /**
     * Filter the query on the hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByHoeveelheid(1234); // WHERE hoeveelheid = 1234
     * $query->filterByHoeveelheid(array(12, 34)); // WHERE hoeveelheid IN (12, 34)
     * $query->filterByHoeveelheid(array('min' => 12)); // WHERE hoeveelheid >= 12
     * $query->filterByHoeveelheid(array('max' => 12)); // WHERE hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $hoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByHoeveelheid($hoeveelheid = null, $comparison = null)
    {
        if (is_array($hoeveelheid)) {
            $useMinMax = false;
            if (isset($hoeveelheid['min'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::HOEVEELHEID, $hoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hoeveelheid['max'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::HOEVEELHEID, $hoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::HOEVEELHEID, $hoeveelheid, $comparison);
    }

    /**
     * Filter the query on the eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByEenheid('fooValue');   // WHERE eenheid = 'fooValue'
     * $query->filterByEenheid('%fooValue%'); // WHERE eenheid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eenheid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByEenheid($eenheid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eenheid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eenheid)) {
                $eenheid = str_replace('*', '%', $eenheid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::EENHEID, $eenheid, $comparison);
    }

    /**
     * Filter the query on the ean_barcode column
     *
     * Example usage:
     * <code>
     * $query->filterByEanBarcode(1234); // WHERE ean_barcode = 1234
     * $query->filterByEanBarcode(array(12, 34)); // WHERE ean_barcode IN (12, 34)
     * $query->filterByEanBarcode(array('min' => 12)); // WHERE ean_barcode >= 12
     * $query->filterByEanBarcode(array('max' => 12)); // WHERE ean_barcode <= 12
     * </code>
     *
     * @param     mixed $eanBarcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByEanBarcode($eanBarcode = null, $comparison = null)
    {
        if (is_array($eanBarcode)) {
            $useMinMax = false;
            if (isset($eanBarcode['min'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::EAN_BARCODE, $eanBarcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eanBarcode['max'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::EAN_BARCODE, $eanBarcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::EAN_BARCODE, $eanBarcode, $comparison);
    }

    /**
     * Filter the query on the hibc_barcode column
     *
     * Example usage:
     * <code>
     * $query->filterByHibcBarcode('fooValue');   // WHERE hibc_barcode = 'fooValue'
     * $query->filterByHibcBarcode('%fooValue%'); // WHERE hibc_barcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hibcBarcode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByHibcBarcode($hibcBarcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hibcBarcode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hibcBarcode)) {
                $hibcBarcode = str_replace('*', '%', $hibcBarcode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::HIBC_BARCODE, $hibcBarcode, $comparison);
    }

    /**
     * Filter the query on the minikaart_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByMinikaartKode(1234); // WHERE minikaart_kode = 1234
     * $query->filterByMinikaartKode(array(12, 34)); // WHERE minikaart_kode IN (12, 34)
     * $query->filterByMinikaartKode(array('min' => 12)); // WHERE minikaart_kode >= 12
     * $query->filterByMinikaartKode(array('max' => 12)); // WHERE minikaart_kode <= 12
     * </code>
     *
     * @param     mixed $minikaartKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByMinikaartKode($minikaartKode = null, $comparison = null)
    {
        if (is_array($minikaartKode)) {
            $useMinMax = false;
            if (isset($minikaartKode['min'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::MINIKAART_KODE, $minikaartKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minikaartKode['max'])) {
                $this->addUsingAlias(GsLeveranciersassortimentenPeer::MINIKAART_KODE, $minikaartKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::MINIKAART_KODE, $minikaartKode, $comparison);
    }

    /**
     * Filter the query on the bestelmogelijkheid column
     *
     * Example usage:
     * <code>
     * $query->filterByBestelmogelijkheid('fooValue');   // WHERE bestelmogelijkheid = 'fooValue'
     * $query->filterByBestelmogelijkheid('%fooValue%'); // WHERE bestelmogelijkheid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bestelmogelijkheid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function filterByBestelmogelijkheid($bestelmogelijkheid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bestelmogelijkheid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bestelmogelijkheid)) {
                $bestelmogelijkheid = str_replace('*', '%', $bestelmogelijkheid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLeveranciersassortimentenPeer::BESTELMOGELIJKHEID, $bestelmogelijkheid, $comparison);
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsLeveranciersassortimentenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelen($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsLeveranciersassortimentenPeer::ZINUMMER, $gsArtikelen->getZinummer(), $comparison);
        } elseif ($gsArtikelen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsLeveranciersassortimentenPeer::ZINUMMER, $gsArtikelen->toKeyValue('PrimaryKey', 'Zinummer'), $comparison);
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
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function joinGsArtikelen($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useGsArtikelenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsArtikelen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelen', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsLeveranciersassortimenten $gsLeveranciersassortimenten Object to remove from the list of results
     *
     * @return GsLeveranciersassortimentenQuery The current query, for fluid interface
     */
    public function prune($gsLeveranciersassortimenten = null)
    {
        if ($gsLeveranciersassortimenten) {
            $this->addUsingAlias(GsLeveranciersassortimentenPeer::ASSORTIMENTSNUMMER, $gsLeveranciersassortimenten->getAssortimentsnummer(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
