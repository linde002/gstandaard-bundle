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
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeSamenstellingen;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeSamenstellingenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeSamenstellingenQuery;

/**
 * @method GsGeneriekeSamenstellingenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsGeneriekeSamenstellingenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsGeneriekeSamenstellingenQuery orderByAanduidingWerkzaamhulpstof($order = Criteria::ASC) Order by the aanduiding_werkzaamhulpstof column
 * @method GsGeneriekeSamenstellingenQuery orderByGskcode($order = Criteria::ASC) Order by the gskcode column
 * @method GsGeneriekeSamenstellingenQuery orderByVolledigeGeneriekeNaamKode($order = Criteria::ASC) Order by the volledige_generieke_naam_kode column
 * @method GsGeneriekeSamenstellingenQuery orderByOmgerekendeHoeveelheid($order = Criteria::ASC) Order by the omgerekende_hoeveelheid column
 * @method GsGeneriekeSamenstellingenQuery orderByEenhOmgerekendeHoeveelheidKode($order = Criteria::ASC) Order by the eenh_omgerekende_hoeveelheid_kode column
 * @method GsGeneriekeSamenstellingenQuery orderByBasiseenheidProductKode($order = Criteria::ASC) Order by the basiseenheid_product_kode column
 *
 * @method GsGeneriekeSamenstellingenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsGeneriekeSamenstellingenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsGeneriekeSamenstellingenQuery groupByAanduidingWerkzaamhulpstof() Group by the aanduiding_werkzaamhulpstof column
 * @method GsGeneriekeSamenstellingenQuery groupByGskcode() Group by the gskcode column
 * @method GsGeneriekeSamenstellingenQuery groupByVolledigeGeneriekeNaamKode() Group by the volledige_generieke_naam_kode column
 * @method GsGeneriekeSamenstellingenQuery groupByOmgerekendeHoeveelheid() Group by the omgerekende_hoeveelheid column
 * @method GsGeneriekeSamenstellingenQuery groupByEenhOmgerekendeHoeveelheidKode() Group by the eenh_omgerekende_hoeveelheid_kode column
 * @method GsGeneriekeSamenstellingenQuery groupByBasiseenheidProductKode() Group by the basiseenheid_product_kode column
 *
 * @method GsGeneriekeSamenstellingenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsGeneriekeSamenstellingenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsGeneriekeSamenstellingenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsGeneriekeSamenstellingen findOne(PropelPDO $con = null) Return the first GsGeneriekeSamenstellingen matching the query
 * @method GsGeneriekeSamenstellingen findOneOrCreate(PropelPDO $con = null) Return the first GsGeneriekeSamenstellingen matching the query, or a new GsGeneriekeSamenstellingen object populated from the query conditions when no match is found
 *
 * @method GsGeneriekeSamenstellingen findOneByBestandnummer(int $bestandnummer) Return the first GsGeneriekeSamenstellingen filtered by the bestandnummer column
 * @method GsGeneriekeSamenstellingen findOneByMutatiekode(int $mutatiekode) Return the first GsGeneriekeSamenstellingen filtered by the mutatiekode column
 * @method GsGeneriekeSamenstellingen findOneByAanduidingWerkzaamhulpstof(string $aanduiding_werkzaamhulpstof) Return the first GsGeneriekeSamenstellingen filtered by the aanduiding_werkzaamhulpstof column
 * @method GsGeneriekeSamenstellingen findOneByGskcode(int $gskcode) Return the first GsGeneriekeSamenstellingen filtered by the gskcode column
 * @method GsGeneriekeSamenstellingen findOneByVolledigeGeneriekeNaamKode(int $volledige_generieke_naam_kode) Return the first GsGeneriekeSamenstellingen filtered by the volledige_generieke_naam_kode column
 * @method GsGeneriekeSamenstellingen findOneByOmgerekendeHoeveelheid(string $omgerekende_hoeveelheid) Return the first GsGeneriekeSamenstellingen filtered by the omgerekende_hoeveelheid column
 * @method GsGeneriekeSamenstellingen findOneByEenhOmgerekendeHoeveelheidKode(int $eenh_omgerekende_hoeveelheid_kode) Return the first GsGeneriekeSamenstellingen filtered by the eenh_omgerekende_hoeveelheid_kode column
 * @method GsGeneriekeSamenstellingen findOneByBasiseenheidProductKode(int $basiseenheid_product_kode) Return the first GsGeneriekeSamenstellingen filtered by the basiseenheid_product_kode column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsGeneriekeSamenstellingen objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsGeneriekeSamenstellingen objects filtered by the mutatiekode column
 * @method array findByAanduidingWerkzaamhulpstof(string $aanduiding_werkzaamhulpstof) Return GsGeneriekeSamenstellingen objects filtered by the aanduiding_werkzaamhulpstof column
 * @method array findByGskcode(int $gskcode) Return GsGeneriekeSamenstellingen objects filtered by the gskcode column
 * @method array findByVolledigeGeneriekeNaamKode(int $volledige_generieke_naam_kode) Return GsGeneriekeSamenstellingen objects filtered by the volledige_generieke_naam_kode column
 * @method array findByOmgerekendeHoeveelheid(string $omgerekende_hoeveelheid) Return GsGeneriekeSamenstellingen objects filtered by the omgerekende_hoeveelheid column
 * @method array findByEenhOmgerekendeHoeveelheidKode(int $eenh_omgerekende_hoeveelheid_kode) Return GsGeneriekeSamenstellingen objects filtered by the eenh_omgerekende_hoeveelheid_kode column
 * @method array findByBasiseenheidProductKode(int $basiseenheid_product_kode) Return GsGeneriekeSamenstellingen objects filtered by the basiseenheid_product_kode column
 */
abstract class BaseGsGeneriekeSamenstellingenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsGeneriekeSamenstellingenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeSamenstellingen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsGeneriekeSamenstellingenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsGeneriekeSamenstellingenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsGeneriekeSamenstellingenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsGeneriekeSamenstellingenQuery) {
            return $criteria;
        }
        $query = new GsGeneriekeSamenstellingenQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$aanduiding_werkzaamhulpstof, $gskcode, $volledige_generieke_naam_kode]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsGeneriekeSamenstellingen|GsGeneriekeSamenstellingen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsGeneriekeSamenstellingenPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsGeneriekeSamenstellingen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `aanduiding_werkzaamhulpstof`, `gskcode`, `volledige_generieke_naam_kode`, `omgerekende_hoeveelheid`, `eenh_omgerekende_hoeveelheid_kode`, `basiseenheid_product_kode` FROM `gs_generieke_samenstellingen` WHERE `aanduiding_werkzaamhulpstof` = :p0 AND `gskcode` = :p1 AND `volledige_generieke_naam_kode` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsGeneriekeSamenstellingen();
            $obj->hydrate($row);
            GsGeneriekeSamenstellingenPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return GsGeneriekeSamenstellingen|GsGeneriekeSamenstellingen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsGeneriekeSamenstellingen[]|mixed the list of results, formatted by the current formatter
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
     * @return GsGeneriekeSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::AANDUIDING_WERKZAAMHULPSTOF, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::GSKCODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsGeneriekeSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsGeneriekeSamenstellingenPeer::AANDUIDING_WERKZAAMHULPSTOF, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsGeneriekeSamenstellingenPeer::GSKCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsGeneriekeSamenstellingenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
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
     * @return GsGeneriekeSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsGeneriekeSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the aanduiding_werkzaamhulpstof column
     *
     * Example usage:
     * <code>
     * $query->filterByAanduidingWerkzaamhulpstof('fooValue');   // WHERE aanduiding_werkzaamhulpstof = 'fooValue'
     * $query->filterByAanduidingWerkzaamhulpstof('%fooValue%'); // WHERE aanduiding_werkzaamhulpstof LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aanduidingWerkzaamhulpstof The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByAanduidingWerkzaamhulpstof($aanduidingWerkzaamhulpstof = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aanduidingWerkzaamhulpstof)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aanduidingWerkzaamhulpstof)) {
                $aanduidingWerkzaamhulpstof = str_replace('*', '%', $aanduidingWerkzaamhulpstof);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::AANDUIDING_WERKZAAMHULPSTOF, $aanduidingWerkzaamhulpstof, $comparison);
    }

    /**
     * Filter the query on the gskcode column
     *
     * Example usage:
     * <code>
     * $query->filterByGskcode(1234); // WHERE gskcode = 1234
     * $query->filterByGskcode(array(12, 34)); // WHERE gskcode IN (12, 34)
     * $query->filterByGskcode(array('min' => 12)); // WHERE gskcode >= 12
     * $query->filterByGskcode(array('max' => 12)); // WHERE gskcode <= 12
     * </code>
     *
     * @param     mixed $gskcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByGskcode($gskcode = null, $comparison = null)
    {
        if (is_array($gskcode)) {
            $useMinMax = false;
            if (isset($gskcode['min'])) {
                $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::GSKCODE, $gskcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gskcode['max'])) {
                $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::GSKCODE, $gskcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::GSKCODE, $gskcode, $comparison);
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
     * @return GsGeneriekeSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByVolledigeGeneriekeNaamKode($volledigeGeneriekeNaamKode = null, $comparison = null)
    {
        if (is_array($volledigeGeneriekeNaamKode)) {
            $useMinMax = false;
            if (isset($volledigeGeneriekeNaamKode['min'])) {
                $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE, $volledigeGeneriekeNaamKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($volledigeGeneriekeNaamKode['max'])) {
                $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE, $volledigeGeneriekeNaamKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE, $volledigeGeneriekeNaamKode, $comparison);
    }

    /**
     * Filter the query on the omgerekende_hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByOmgerekendeHoeveelheid(1234); // WHERE omgerekende_hoeveelheid = 1234
     * $query->filterByOmgerekendeHoeveelheid(array(12, 34)); // WHERE omgerekende_hoeveelheid IN (12, 34)
     * $query->filterByOmgerekendeHoeveelheid(array('min' => 12)); // WHERE omgerekende_hoeveelheid >= 12
     * $query->filterByOmgerekendeHoeveelheid(array('max' => 12)); // WHERE omgerekende_hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $omgerekendeHoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByOmgerekendeHoeveelheid($omgerekendeHoeveelheid = null, $comparison = null)
    {
        if (is_array($omgerekendeHoeveelheid)) {
            $useMinMax = false;
            if (isset($omgerekendeHoeveelheid['min'])) {
                $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::OMGEREKENDE_HOEVEELHEID, $omgerekendeHoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($omgerekendeHoeveelheid['max'])) {
                $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::OMGEREKENDE_HOEVEELHEID, $omgerekendeHoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::OMGEREKENDE_HOEVEELHEID, $omgerekendeHoeveelheid, $comparison);
    }

    /**
     * Filter the query on the eenh_omgerekende_hoeveelheid_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByEenhOmgerekendeHoeveelheidKode(1234); // WHERE eenh_omgerekende_hoeveelheid_kode = 1234
     * $query->filterByEenhOmgerekendeHoeveelheidKode(array(12, 34)); // WHERE eenh_omgerekende_hoeveelheid_kode IN (12, 34)
     * $query->filterByEenhOmgerekendeHoeveelheidKode(array('min' => 12)); // WHERE eenh_omgerekende_hoeveelheid_kode >= 12
     * $query->filterByEenhOmgerekendeHoeveelheidKode(array('max' => 12)); // WHERE eenh_omgerekende_hoeveelheid_kode <= 12
     * </code>
     *
     * @param     mixed $eenhOmgerekendeHoeveelheidKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByEenhOmgerekendeHoeveelheidKode($eenhOmgerekendeHoeveelheidKode = null, $comparison = null)
    {
        if (is_array($eenhOmgerekendeHoeveelheidKode)) {
            $useMinMax = false;
            if (isset($eenhOmgerekendeHoeveelheidKode['min'])) {
                $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::EENH_OMGEREKENDE_HOEVEELHEID_KODE, $eenhOmgerekendeHoeveelheidKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eenhOmgerekendeHoeveelheidKode['max'])) {
                $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::EENH_OMGEREKENDE_HOEVEELHEID_KODE, $eenhOmgerekendeHoeveelheidKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::EENH_OMGEREKENDE_HOEVEELHEID_KODE, $eenhOmgerekendeHoeveelheidKode, $comparison);
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
     * @return GsGeneriekeSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByBasiseenheidProductKode($basiseenheidProductKode = null, $comparison = null)
    {
        if (is_array($basiseenheidProductKode)) {
            $useMinMax = false;
            if (isset($basiseenheidProductKode['min'])) {
                $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::BASISEENHEID_PRODUCT_KODE, $basiseenheidProductKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($basiseenheidProductKode['max'])) {
                $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::BASISEENHEID_PRODUCT_KODE, $basiseenheidProductKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeSamenstellingenPeer::BASISEENHEID_PRODUCT_KODE, $basiseenheidProductKode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsGeneriekeSamenstellingen $gsGeneriekeSamenstellingen Object to remove from the list of results
     *
     * @return GsGeneriekeSamenstellingenQuery The current query, for fluid interface
     */
    public function prune($gsGeneriekeSamenstellingen = null)
    {
        if ($gsGeneriekeSamenstellingen) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsGeneriekeSamenstellingenPeer::AANDUIDING_WERKZAAMHULPSTOF), $gsGeneriekeSamenstellingen->getAanduidingWerkzaamhulpstof(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsGeneriekeSamenstellingenPeer::GSKCODE), $gsGeneriekeSamenstellingen->getGskcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsGeneriekeSamenstellingenPeer::VOLLEDIGE_GENERIEKE_NAAM_KODE), $gsGeneriekeSamenstellingen->getVolledigeGeneriekeNaamKode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
