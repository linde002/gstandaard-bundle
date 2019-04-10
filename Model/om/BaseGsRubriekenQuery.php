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
use PharmaIntelligence\GstandaardBundle\Model\GsRubrieken;
use PharmaIntelligence\GstandaardBundle\Model\GsRubriekenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsRubriekenQuery;

/**
 * @method GsRubriekenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsRubriekenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsRubriekenQuery orderByNaamVanHetBestand($order = Criteria::ASC) Order by the naam_van_het_bestand column
 * @method GsRubriekenQuery orderByVolgnummer($order = Criteria::ASC) Order by the volgnummer column
 * @method GsRubriekenQuery orderByNaamVanDeRubriek($order = Criteria::ASC) Order by the naam_van_de_rubriek column
 * @method GsRubriekenQuery orderByOmschrijvingVanDeRubriek($order = Criteria::ASC) Order by the omschrijving_van_de_rubriek column
 * @method GsRubriekenQuery orderByRubriekscode($order = Criteria::ASC) Order by the rubriekscode column
 * @method GsRubriekenQuery orderBySleutelkodeVanDeRubriek($order = Criteria::ASC) Order by the sleutelkode_van_de_rubriek column
 * @method GsRubriekenQuery orderByTypeVanDeRubriek($order = Criteria::ASC) Order by the type_van_de_rubriek column
 * @method GsRubriekenQuery orderByLengteVanDeRubriek($order = Criteria::ASC) Order by the lengte_van_de_rubriek column
 * @method GsRubriekenQuery orderByAantalDecimalen($order = Criteria::ASC) Order by the aantal_decimalen column
 * @method GsRubriekenQuery orderByOpmaak($order = Criteria::ASC) Order by the opmaak column
 *
 * @method GsRubriekenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsRubriekenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsRubriekenQuery groupByNaamVanHetBestand() Group by the naam_van_het_bestand column
 * @method GsRubriekenQuery groupByVolgnummer() Group by the volgnummer column
 * @method GsRubriekenQuery groupByNaamVanDeRubriek() Group by the naam_van_de_rubriek column
 * @method GsRubriekenQuery groupByOmschrijvingVanDeRubriek() Group by the omschrijving_van_de_rubriek column
 * @method GsRubriekenQuery groupByRubriekscode() Group by the rubriekscode column
 * @method GsRubriekenQuery groupBySleutelkodeVanDeRubriek() Group by the sleutelkode_van_de_rubriek column
 * @method GsRubriekenQuery groupByTypeVanDeRubriek() Group by the type_van_de_rubriek column
 * @method GsRubriekenQuery groupByLengteVanDeRubriek() Group by the lengte_van_de_rubriek column
 * @method GsRubriekenQuery groupByAantalDecimalen() Group by the aantal_decimalen column
 * @method GsRubriekenQuery groupByOpmaak() Group by the opmaak column
 *
 * @method GsRubriekenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsRubriekenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsRubriekenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsRubrieken findOne(PropelPDO $con = null) Return the first GsRubrieken matching the query
 * @method GsRubrieken findOneOrCreate(PropelPDO $con = null) Return the first GsRubrieken matching the query, or a new GsRubrieken object populated from the query conditions when no match is found
 *
 * @method GsRubrieken findOneByBestandnummer(int $bestandnummer) Return the first GsRubrieken filtered by the bestandnummer column
 * @method GsRubrieken findOneByMutatiekode(int $mutatiekode) Return the first GsRubrieken filtered by the mutatiekode column
 * @method GsRubrieken findOneByNaamVanHetBestand(string $naam_van_het_bestand) Return the first GsRubrieken filtered by the naam_van_het_bestand column
 * @method GsRubrieken findOneByVolgnummer(int $volgnummer) Return the first GsRubrieken filtered by the volgnummer column
 * @method GsRubrieken findOneByNaamVanDeRubriek(string $naam_van_de_rubriek) Return the first GsRubrieken filtered by the naam_van_de_rubriek column
 * @method GsRubrieken findOneByOmschrijvingVanDeRubriek(string $omschrijving_van_de_rubriek) Return the first GsRubrieken filtered by the omschrijving_van_de_rubriek column
 * @method GsRubrieken findOneByRubriekscode(int $rubriekscode) Return the first GsRubrieken filtered by the rubriekscode column
 * @method GsRubrieken findOneBySleutelkodeVanDeRubriek(string $sleutelkode_van_de_rubriek) Return the first GsRubrieken filtered by the sleutelkode_van_de_rubriek column
 * @method GsRubrieken findOneByTypeVanDeRubriek(string $type_van_de_rubriek) Return the first GsRubrieken filtered by the type_van_de_rubriek column
 * @method GsRubrieken findOneByLengteVanDeRubriek(int $lengte_van_de_rubriek) Return the first GsRubrieken filtered by the lengte_van_de_rubriek column
 * @method GsRubrieken findOneByAantalDecimalen(int $aantal_decimalen) Return the first GsRubrieken filtered by the aantal_decimalen column
 * @method GsRubrieken findOneByOpmaak(string $opmaak) Return the first GsRubrieken filtered by the opmaak column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsRubrieken objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsRubrieken objects filtered by the mutatiekode column
 * @method array findByNaamVanHetBestand(string $naam_van_het_bestand) Return GsRubrieken objects filtered by the naam_van_het_bestand column
 * @method array findByVolgnummer(int $volgnummer) Return GsRubrieken objects filtered by the volgnummer column
 * @method array findByNaamVanDeRubriek(string $naam_van_de_rubriek) Return GsRubrieken objects filtered by the naam_van_de_rubriek column
 * @method array findByOmschrijvingVanDeRubriek(string $omschrijving_van_de_rubriek) Return GsRubrieken objects filtered by the omschrijving_van_de_rubriek column
 * @method array findByRubriekscode(int $rubriekscode) Return GsRubrieken objects filtered by the rubriekscode column
 * @method array findBySleutelkodeVanDeRubriek(string $sleutelkode_van_de_rubriek) Return GsRubrieken objects filtered by the sleutelkode_van_de_rubriek column
 * @method array findByTypeVanDeRubriek(string $type_van_de_rubriek) Return GsRubrieken objects filtered by the type_van_de_rubriek column
 * @method array findByLengteVanDeRubriek(int $lengte_van_de_rubriek) Return GsRubrieken objects filtered by the lengte_van_de_rubriek column
 * @method array findByAantalDecimalen(int $aantal_decimalen) Return GsRubrieken objects filtered by the aantal_decimalen column
 * @method array findByOpmaak(string $opmaak) Return GsRubrieken objects filtered by the opmaak column
 */
abstract class BaseGsRubriekenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsRubriekenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRubrieken';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsRubriekenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsRubriekenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsRubriekenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsRubriekenQuery) {
            return $criteria;
        }
        $query = new GsRubriekenQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$naam_van_het_bestand, $volgnummer]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsRubrieken|GsRubrieken[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsRubriekenPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsRubriekenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsRubrieken A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `naam_van_het_bestand`, `volgnummer`, `naam_van_de_rubriek`, `omschrijving_van_de_rubriek`, `rubriekscode`, `sleutelkode_van_de_rubriek`, `type_van_de_rubriek`, `lengte_van_de_rubriek`, `aantal_decimalen`, `opmaak` FROM `gs_rubrieken` WHERE `naam_van_het_bestand` = :p0 AND `volgnummer` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsRubrieken();
            $obj->hydrate($row);
            GsRubriekenPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsRubrieken|GsRubrieken[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsRubrieken[]|mixed the list of results, formatted by the current formatter
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
     * @return GsRubriekenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsRubriekenPeer::NAAM_VAN_HET_BESTAND, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsRubriekenPeer::VOLGNUMMER, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsRubriekenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsRubriekenPeer::NAAM_VAN_HET_BESTAND, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsRubriekenPeer::VOLGNUMMER, $key[1], Criteria::EQUAL);
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
     * @return GsRubriekenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsRubriekenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsRubriekenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRubriekenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsRubriekenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsRubriekenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsRubriekenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRubriekenPeer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @return GsRubriekenQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GsRubriekenPeer::NAAM_VAN_HET_BESTAND, $naamVanHetBestand, $comparison);
    }

    /**
     * Filter the query on the volgnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByVolgnummer(1234); // WHERE volgnummer = 1234
     * $query->filterByVolgnummer(array(12, 34)); // WHERE volgnummer IN (12, 34)
     * $query->filterByVolgnummer(array('min' => 12)); // WHERE volgnummer >= 12
     * $query->filterByVolgnummer(array('max' => 12)); // WHERE volgnummer <= 12
     * </code>
     *
     * @param     mixed $volgnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRubriekenQuery The current query, for fluid interface
     */
    public function filterByVolgnummer($volgnummer = null, $comparison = null)
    {
        if (is_array($volgnummer)) {
            $useMinMax = false;
            if (isset($volgnummer['min'])) {
                $this->addUsingAlias(GsRubriekenPeer::VOLGNUMMER, $volgnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($volgnummer['max'])) {
                $this->addUsingAlias(GsRubriekenPeer::VOLGNUMMER, $volgnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRubriekenPeer::VOLGNUMMER, $volgnummer, $comparison);
    }

    /**
     * Filter the query on the naam_van_de_rubriek column
     *
     * Example usage:
     * <code>
     * $query->filterByNaamVanDeRubriek('fooValue');   // WHERE naam_van_de_rubriek = 'fooValue'
     * $query->filterByNaamVanDeRubriek('%fooValue%'); // WHERE naam_van_de_rubriek LIKE '%fooValue%'
     * </code>
     *
     * @param     string $naamVanDeRubriek The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRubriekenQuery The current query, for fluid interface
     */
    public function filterByNaamVanDeRubriek($naamVanDeRubriek = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($naamVanDeRubriek)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $naamVanDeRubriek)) {
                $naamVanDeRubriek = str_replace('*', '%', $naamVanDeRubriek);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsRubriekenPeer::NAAM_VAN_DE_RUBRIEK, $naamVanDeRubriek, $comparison);
    }

    /**
     * Filter the query on the omschrijving_van_de_rubriek column
     *
     * Example usage:
     * <code>
     * $query->filterByOmschrijvingVanDeRubriek('fooValue');   // WHERE omschrijving_van_de_rubriek = 'fooValue'
     * $query->filterByOmschrijvingVanDeRubriek('%fooValue%'); // WHERE omschrijving_van_de_rubriek LIKE '%fooValue%'
     * </code>
     *
     * @param     string $omschrijvingVanDeRubriek The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRubriekenQuery The current query, for fluid interface
     */
    public function filterByOmschrijvingVanDeRubriek($omschrijvingVanDeRubriek = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($omschrijvingVanDeRubriek)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $omschrijvingVanDeRubriek)) {
                $omschrijvingVanDeRubriek = str_replace('*', '%', $omschrijvingVanDeRubriek);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsRubriekenPeer::OMSCHRIJVING_VAN_DE_RUBRIEK, $omschrijvingVanDeRubriek, $comparison);
    }

    /**
     * Filter the query on the rubriekscode column
     *
     * Example usage:
     * <code>
     * $query->filterByRubriekscode(1234); // WHERE rubriekscode = 1234
     * $query->filterByRubriekscode(array(12, 34)); // WHERE rubriekscode IN (12, 34)
     * $query->filterByRubriekscode(array('min' => 12)); // WHERE rubriekscode >= 12
     * $query->filterByRubriekscode(array('max' => 12)); // WHERE rubriekscode <= 12
     * </code>
     *
     * @param     mixed $rubriekscode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRubriekenQuery The current query, for fluid interface
     */
    public function filterByRubriekscode($rubriekscode = null, $comparison = null)
    {
        if (is_array($rubriekscode)) {
            $useMinMax = false;
            if (isset($rubriekscode['min'])) {
                $this->addUsingAlias(GsRubriekenPeer::RUBRIEKSCODE, $rubriekscode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rubriekscode['max'])) {
                $this->addUsingAlias(GsRubriekenPeer::RUBRIEKSCODE, $rubriekscode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRubriekenPeer::RUBRIEKSCODE, $rubriekscode, $comparison);
    }

    /**
     * Filter the query on the sleutelkode_van_de_rubriek column
     *
     * Example usage:
     * <code>
     * $query->filterBySleutelkodeVanDeRubriek('fooValue');   // WHERE sleutelkode_van_de_rubriek = 'fooValue'
     * $query->filterBySleutelkodeVanDeRubriek('%fooValue%'); // WHERE sleutelkode_van_de_rubriek LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sleutelkodeVanDeRubriek The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRubriekenQuery The current query, for fluid interface
     */
    public function filterBySleutelkodeVanDeRubriek($sleutelkodeVanDeRubriek = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sleutelkodeVanDeRubriek)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sleutelkodeVanDeRubriek)) {
                $sleutelkodeVanDeRubriek = str_replace('*', '%', $sleutelkodeVanDeRubriek);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsRubriekenPeer::SLEUTELKODE_VAN_DE_RUBRIEK, $sleutelkodeVanDeRubriek, $comparison);
    }

    /**
     * Filter the query on the type_van_de_rubriek column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeVanDeRubriek('fooValue');   // WHERE type_van_de_rubriek = 'fooValue'
     * $query->filterByTypeVanDeRubriek('%fooValue%'); // WHERE type_van_de_rubriek LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeVanDeRubriek The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRubriekenQuery The current query, for fluid interface
     */
    public function filterByTypeVanDeRubriek($typeVanDeRubriek = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeVanDeRubriek)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeVanDeRubriek)) {
                $typeVanDeRubriek = str_replace('*', '%', $typeVanDeRubriek);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsRubriekenPeer::TYPE_VAN_DE_RUBRIEK, $typeVanDeRubriek, $comparison);
    }

    /**
     * Filter the query on the lengte_van_de_rubriek column
     *
     * Example usage:
     * <code>
     * $query->filterByLengteVanDeRubriek(1234); // WHERE lengte_van_de_rubriek = 1234
     * $query->filterByLengteVanDeRubriek(array(12, 34)); // WHERE lengte_van_de_rubriek IN (12, 34)
     * $query->filterByLengteVanDeRubriek(array('min' => 12)); // WHERE lengte_van_de_rubriek >= 12
     * $query->filterByLengteVanDeRubriek(array('max' => 12)); // WHERE lengte_van_de_rubriek <= 12
     * </code>
     *
     * @param     mixed $lengteVanDeRubriek The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRubriekenQuery The current query, for fluid interface
     */
    public function filterByLengteVanDeRubriek($lengteVanDeRubriek = null, $comparison = null)
    {
        if (is_array($lengteVanDeRubriek)) {
            $useMinMax = false;
            if (isset($lengteVanDeRubriek['min'])) {
                $this->addUsingAlias(GsRubriekenPeer::LENGTE_VAN_DE_RUBRIEK, $lengteVanDeRubriek['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengteVanDeRubriek['max'])) {
                $this->addUsingAlias(GsRubriekenPeer::LENGTE_VAN_DE_RUBRIEK, $lengteVanDeRubriek['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRubriekenPeer::LENGTE_VAN_DE_RUBRIEK, $lengteVanDeRubriek, $comparison);
    }

    /**
     * Filter the query on the aantal_decimalen column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalDecimalen(1234); // WHERE aantal_decimalen = 1234
     * $query->filterByAantalDecimalen(array(12, 34)); // WHERE aantal_decimalen IN (12, 34)
     * $query->filterByAantalDecimalen(array('min' => 12)); // WHERE aantal_decimalen >= 12
     * $query->filterByAantalDecimalen(array('max' => 12)); // WHERE aantal_decimalen <= 12
     * </code>
     *
     * @param     mixed $aantalDecimalen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRubriekenQuery The current query, for fluid interface
     */
    public function filterByAantalDecimalen($aantalDecimalen = null, $comparison = null)
    {
        if (is_array($aantalDecimalen)) {
            $useMinMax = false;
            if (isset($aantalDecimalen['min'])) {
                $this->addUsingAlias(GsRubriekenPeer::AANTAL_DECIMALEN, $aantalDecimalen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalDecimalen['max'])) {
                $this->addUsingAlias(GsRubriekenPeer::AANTAL_DECIMALEN, $aantalDecimalen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRubriekenPeer::AANTAL_DECIMALEN, $aantalDecimalen, $comparison);
    }

    /**
     * Filter the query on the opmaak column
     *
     * Example usage:
     * <code>
     * $query->filterByOpmaak('fooValue');   // WHERE opmaak = 'fooValue'
     * $query->filterByOpmaak('%fooValue%'); // WHERE opmaak LIKE '%fooValue%'
     * </code>
     *
     * @param     string $opmaak The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRubriekenQuery The current query, for fluid interface
     */
    public function filterByOpmaak($opmaak = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($opmaak)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $opmaak)) {
                $opmaak = str_replace('*', '%', $opmaak);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsRubriekenPeer::OPMAAK, $opmaak, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsRubrieken $gsRubrieken Object to remove from the list of results
     *
     * @return GsRubriekenQuery The current query, for fluid interface
     */
    public function prune($gsRubrieken = null)
    {
        if ($gsRubrieken) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsRubriekenPeer::NAAM_VAN_HET_BESTAND), $gsRubrieken->getNaamVanHetBestand(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsRubriekenPeer::VOLGNUMMER), $gsRubrieken->getVolgnummer(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
