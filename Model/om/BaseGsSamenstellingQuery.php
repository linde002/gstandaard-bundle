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
use PharmaIntelligence\GstandaardBundle\Model\GsSamenstelling;
use PharmaIntelligence\GstandaardBundle\Model\GsSamenstellingPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsSamenstellingQuery;

/**
 * @method GsSamenstellingQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsSamenstellingQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsSamenstellingQuery orderByThesaurusVerwijzingSoortCode($order = Criteria::ASC) Order by the thesaurus_verwijzing_soort_code column
 * @method GsSamenstellingQuery orderBySoortCode($order = Criteria::ASC) Order by the soort_code column
 * @method GsSamenstellingQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method GsSamenstellingQuery orderByGeneriekenaamkode($order = Criteria::ASC) Order by the generiekenaamkode column
 * @method GsSamenstellingQuery orderByHoeveelheidGeneriekNaam($order = Criteria::ASC) Order by the hoeveelheid_generiek_naam column
 * @method GsSamenstellingQuery orderByThesaurusverwijzigEenhHoeveelhGeneriekNaam($order = Criteria::ASC) Order by the thesaurusverwijzig_eenh_hoeveelh_generiek_naam column
 * @method GsSamenstellingQuery orderByEenheidHoeveelheidGeneriekeNaam($order = Criteria::ASC) Order by the eenheid_hoeveelheid_generieke_naam column
 * @method GsSamenstellingQuery orderByStamnaamcode($order = Criteria::ASC) Order by the stamnaamcode column
 * @method GsSamenstellingQuery orderByHoeveelheidStamnaam($order = Criteria::ASC) Order by the hoeveelheid_stamnaam column
 * @method GsSamenstellingQuery orderByThesaurusverwijzigEenhHoeveelhStamnaam($order = Criteria::ASC) Order by the thesaurusverwijzig_eenh_hoeveelh_stamnaam column
 * @method GsSamenstellingQuery orderByEenheidHoeveelheidStamnaam($order = Criteria::ASC) Order by the eenheid_hoeveelheid_stamnaam column
 * @method GsSamenstellingQuery orderBySterktesMogenWordenOpgeteldJn($order = Criteria::ASC) Order by the sterktes_mogen_worden_opgeteld_jn column
 *
 * @method GsSamenstellingQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsSamenstellingQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsSamenstellingQuery groupByThesaurusVerwijzingSoortCode() Group by the thesaurus_verwijzing_soort_code column
 * @method GsSamenstellingQuery groupBySoortCode() Group by the soort_code column
 * @method GsSamenstellingQuery groupByCode() Group by the code column
 * @method GsSamenstellingQuery groupByGeneriekenaamkode() Group by the generiekenaamkode column
 * @method GsSamenstellingQuery groupByHoeveelheidGeneriekNaam() Group by the hoeveelheid_generiek_naam column
 * @method GsSamenstellingQuery groupByThesaurusverwijzigEenhHoeveelhGeneriekNaam() Group by the thesaurusverwijzig_eenh_hoeveelh_generiek_naam column
 * @method GsSamenstellingQuery groupByEenheidHoeveelheidGeneriekeNaam() Group by the eenheid_hoeveelheid_generieke_naam column
 * @method GsSamenstellingQuery groupByStamnaamcode() Group by the stamnaamcode column
 * @method GsSamenstellingQuery groupByHoeveelheidStamnaam() Group by the hoeveelheid_stamnaam column
 * @method GsSamenstellingQuery groupByThesaurusverwijzigEenhHoeveelhStamnaam() Group by the thesaurusverwijzig_eenh_hoeveelh_stamnaam column
 * @method GsSamenstellingQuery groupByEenheidHoeveelheidStamnaam() Group by the eenheid_hoeveelheid_stamnaam column
 * @method GsSamenstellingQuery groupBySterktesMogenWordenOpgeteldJn() Group by the sterktes_mogen_worden_opgeteld_jn column
 *
 * @method GsSamenstellingQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsSamenstellingQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsSamenstellingQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsSamenstelling findOne(PropelPDO $con = null) Return the first GsSamenstelling matching the query
 * @method GsSamenstelling findOneOrCreate(PropelPDO $con = null) Return the first GsSamenstelling matching the query, or a new GsSamenstelling object populated from the query conditions when no match is found
 *
 * @method GsSamenstelling findOneByBestandnummer(int $bestandnummer) Return the first GsSamenstelling filtered by the bestandnummer column
 * @method GsSamenstelling findOneByMutatiekode(int $mutatiekode) Return the first GsSamenstelling filtered by the mutatiekode column
 * @method GsSamenstelling findOneByThesaurusVerwijzingSoortCode(int $thesaurus_verwijzing_soort_code) Return the first GsSamenstelling filtered by the thesaurus_verwijzing_soort_code column
 * @method GsSamenstelling findOneBySoortCode(int $soort_code) Return the first GsSamenstelling filtered by the soort_code column
 * @method GsSamenstelling findOneByCode(int $code) Return the first GsSamenstelling filtered by the code column
 * @method GsSamenstelling findOneByGeneriekenaamkode(int $generiekenaamkode) Return the first GsSamenstelling filtered by the generiekenaamkode column
 * @method GsSamenstelling findOneByHoeveelheidGeneriekNaam(string $hoeveelheid_generiek_naam) Return the first GsSamenstelling filtered by the hoeveelheid_generiek_naam column
 * @method GsSamenstelling findOneByThesaurusverwijzigEenhHoeveelhGeneriekNaam(int $thesaurusverwijzig_eenh_hoeveelh_generiek_naam) Return the first GsSamenstelling filtered by the thesaurusverwijzig_eenh_hoeveelh_generiek_naam column
 * @method GsSamenstelling findOneByEenheidHoeveelheidGeneriekeNaam(int $eenheid_hoeveelheid_generieke_naam) Return the first GsSamenstelling filtered by the eenheid_hoeveelheid_generieke_naam column
 * @method GsSamenstelling findOneByStamnaamcode(int $stamnaamcode) Return the first GsSamenstelling filtered by the stamnaamcode column
 * @method GsSamenstelling findOneByHoeveelheidStamnaam(string $hoeveelheid_stamnaam) Return the first GsSamenstelling filtered by the hoeveelheid_stamnaam column
 * @method GsSamenstelling findOneByThesaurusverwijzigEenhHoeveelhStamnaam(int $thesaurusverwijzig_eenh_hoeveelh_stamnaam) Return the first GsSamenstelling filtered by the thesaurusverwijzig_eenh_hoeveelh_stamnaam column
 * @method GsSamenstelling findOneByEenheidHoeveelheidStamnaam(int $eenheid_hoeveelheid_stamnaam) Return the first GsSamenstelling filtered by the eenheid_hoeveelheid_stamnaam column
 * @method GsSamenstelling findOneBySterktesMogenWordenOpgeteldJn(int $sterktes_mogen_worden_opgeteld_jn) Return the first GsSamenstelling filtered by the sterktes_mogen_worden_opgeteld_jn column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsSamenstelling objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsSamenstelling objects filtered by the mutatiekode column
 * @method array findByThesaurusVerwijzingSoortCode(int $thesaurus_verwijzing_soort_code) Return GsSamenstelling objects filtered by the thesaurus_verwijzing_soort_code column
 * @method array findBySoortCode(int $soort_code) Return GsSamenstelling objects filtered by the soort_code column
 * @method array findByCode(int $code) Return GsSamenstelling objects filtered by the code column
 * @method array findByGeneriekenaamkode(int $generiekenaamkode) Return GsSamenstelling objects filtered by the generiekenaamkode column
 * @method array findByHoeveelheidGeneriekNaam(string $hoeveelheid_generiek_naam) Return GsSamenstelling objects filtered by the hoeveelheid_generiek_naam column
 * @method array findByThesaurusverwijzigEenhHoeveelhGeneriekNaam(int $thesaurusverwijzig_eenh_hoeveelh_generiek_naam) Return GsSamenstelling objects filtered by the thesaurusverwijzig_eenh_hoeveelh_generiek_naam column
 * @method array findByEenheidHoeveelheidGeneriekeNaam(int $eenheid_hoeveelheid_generieke_naam) Return GsSamenstelling objects filtered by the eenheid_hoeveelheid_generieke_naam column
 * @method array findByStamnaamcode(int $stamnaamcode) Return GsSamenstelling objects filtered by the stamnaamcode column
 * @method array findByHoeveelheidStamnaam(string $hoeveelheid_stamnaam) Return GsSamenstelling objects filtered by the hoeveelheid_stamnaam column
 * @method array findByThesaurusverwijzigEenhHoeveelhStamnaam(int $thesaurusverwijzig_eenh_hoeveelh_stamnaam) Return GsSamenstelling objects filtered by the thesaurusverwijzig_eenh_hoeveelh_stamnaam column
 * @method array findByEenheidHoeveelheidStamnaam(int $eenheid_hoeveelheid_stamnaam) Return GsSamenstelling objects filtered by the eenheid_hoeveelheid_stamnaam column
 * @method array findBySterktesMogenWordenOpgeteldJn(int $sterktes_mogen_worden_opgeteld_jn) Return GsSamenstelling objects filtered by the sterktes_mogen_worden_opgeteld_jn column
 */
abstract class BaseGsSamenstellingQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsSamenstellingQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsSamenstelling';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsSamenstellingQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsSamenstellingQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsSamenstellingQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsSamenstellingQuery) {
            return $criteria;
        }
        $query = new GsSamenstellingQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56, 78, 91), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$soort_code, $code, $generiekenaamkode, $hoeveelheid_generiek_naam, $eenheid_hoeveelheid_generieke_naam]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsSamenstelling|GsSamenstelling[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsSamenstellingPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsSamenstellingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsSamenstelling A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `thesaurus_verwijzing_soort_code`, `soort_code`, `code`, `generiekenaamkode`, `hoeveelheid_generiek_naam`, `thesaurusverwijzig_eenh_hoeveelh_generiek_naam`, `eenheid_hoeveelheid_generieke_naam`, `stamnaamcode`, `hoeveelheid_stamnaam`, `thesaurusverwijzig_eenh_hoeveelh_stamnaam`, `eenheid_hoeveelheid_stamnaam`, `sterktes_mogen_worden_opgeteld_jn` FROM `gs_samenstelling` WHERE `soort_code` = :p0 AND `code` = :p1 AND `generiekenaamkode` = :p2 AND `hoeveelheid_generiek_naam` = :p3 AND `eenheid_hoeveelheid_generieke_naam` = :p4';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsSamenstelling();
            $obj->hydrate($row);
            GsSamenstellingPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4])));
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
     * @return GsSamenstelling|GsSamenstelling[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsSamenstelling[]|mixed the list of results, formatted by the current formatter
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
     * @return GsSamenstellingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsSamenstellingPeer::SOORT_CODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsSamenstellingPeer::CODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsSamenstellingPeer::GENERIEKENAAMKODE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(GsSamenstellingPeer::HOEVEELHEID_GENERIEK_NAAM, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(GsSamenstellingPeer::EENHEID_HOEVEELHEID_GENERIEKE_NAAM, $key[4], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsSamenstellingQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsSamenstellingPeer::SOORT_CODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsSamenstellingPeer::CODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsSamenstellingPeer::GENERIEKENAAMKODE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(GsSamenstellingPeer::HOEVEELHEID_GENERIEK_NAAM, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(GsSamenstellingPeer::EENHEID_HOEVEELHEID_GENERIEKE_NAAM, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
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
     * @return GsSamenstellingQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsSamenstellingPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsSamenstellingPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSamenstellingPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsSamenstellingQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsSamenstellingPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsSamenstellingPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSamenstellingPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the thesaurus_verwijzing_soort_code column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusVerwijzingSoortCode(1234); // WHERE thesaurus_verwijzing_soort_code = 1234
     * $query->filterByThesaurusVerwijzingSoortCode(array(12, 34)); // WHERE thesaurus_verwijzing_soort_code IN (12, 34)
     * $query->filterByThesaurusVerwijzingSoortCode(array('min' => 12)); // WHERE thesaurus_verwijzing_soort_code >= 12
     * $query->filterByThesaurusVerwijzingSoortCode(array('max' => 12)); // WHERE thesaurus_verwijzing_soort_code <= 12
     * </code>
     *
     * @param     mixed $thesaurusVerwijzingSoortCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsSamenstellingQuery The current query, for fluid interface
     */
    public function filterByThesaurusVerwijzingSoortCode($thesaurusVerwijzingSoortCode = null, $comparison = null)
    {
        if (is_array($thesaurusVerwijzingSoortCode)) {
            $useMinMax = false;
            if (isset($thesaurusVerwijzingSoortCode['min'])) {
                $this->addUsingAlias(GsSamenstellingPeer::THESAURUS_VERWIJZING_SOORT_CODE, $thesaurusVerwijzingSoortCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusVerwijzingSoortCode['max'])) {
                $this->addUsingAlias(GsSamenstellingPeer::THESAURUS_VERWIJZING_SOORT_CODE, $thesaurusVerwijzingSoortCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSamenstellingPeer::THESAURUS_VERWIJZING_SOORT_CODE, $thesaurusVerwijzingSoortCode, $comparison);
    }

    /**
     * Filter the query on the soort_code column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortCode(1234); // WHERE soort_code = 1234
     * $query->filterBySoortCode(array(12, 34)); // WHERE soort_code IN (12, 34)
     * $query->filterBySoortCode(array('min' => 12)); // WHERE soort_code >= 12
     * $query->filterBySoortCode(array('max' => 12)); // WHERE soort_code <= 12
     * </code>
     *
     * @param     mixed $soortCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsSamenstellingQuery The current query, for fluid interface
     */
    public function filterBySoortCode($soortCode = null, $comparison = null)
    {
        if (is_array($soortCode)) {
            $useMinMax = false;
            if (isset($soortCode['min'])) {
                $this->addUsingAlias(GsSamenstellingPeer::SOORT_CODE, $soortCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortCode['max'])) {
                $this->addUsingAlias(GsSamenstellingPeer::SOORT_CODE, $soortCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSamenstellingPeer::SOORT_CODE, $soortCode, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode(1234); // WHERE code = 1234
     * $query->filterByCode(array(12, 34)); // WHERE code IN (12, 34)
     * $query->filterByCode(array('min' => 12)); // WHERE code >= 12
     * $query->filterByCode(array('max' => 12)); // WHERE code <= 12
     * </code>
     *
     * @param     mixed $code The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsSamenstellingQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (is_array($code)) {
            $useMinMax = false;
            if (isset($code['min'])) {
                $this->addUsingAlias(GsSamenstellingPeer::CODE, $code['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($code['max'])) {
                $this->addUsingAlias(GsSamenstellingPeer::CODE, $code['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSamenstellingPeer::CODE, $code, $comparison);
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
     * @return GsSamenstellingQuery The current query, for fluid interface
     */
    public function filterByGeneriekenaamkode($generiekenaamkode = null, $comparison = null)
    {
        if (is_array($generiekenaamkode)) {
            $useMinMax = false;
            if (isset($generiekenaamkode['min'])) {
                $this->addUsingAlias(GsSamenstellingPeer::GENERIEKENAAMKODE, $generiekenaamkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($generiekenaamkode['max'])) {
                $this->addUsingAlias(GsSamenstellingPeer::GENERIEKENAAMKODE, $generiekenaamkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSamenstellingPeer::GENERIEKENAAMKODE, $generiekenaamkode, $comparison);
    }

    /**
     * Filter the query on the hoeveelheid_generiek_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByHoeveelheidGeneriekNaam(1234); // WHERE hoeveelheid_generiek_naam = 1234
     * $query->filterByHoeveelheidGeneriekNaam(array(12, 34)); // WHERE hoeveelheid_generiek_naam IN (12, 34)
     * $query->filterByHoeveelheidGeneriekNaam(array('min' => 12)); // WHERE hoeveelheid_generiek_naam >= 12
     * $query->filterByHoeveelheidGeneriekNaam(array('max' => 12)); // WHERE hoeveelheid_generiek_naam <= 12
     * </code>
     *
     * @param     mixed $hoeveelheidGeneriekNaam The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsSamenstellingQuery The current query, for fluid interface
     */
    public function filterByHoeveelheidGeneriekNaam($hoeveelheidGeneriekNaam = null, $comparison = null)
    {
        if (is_array($hoeveelheidGeneriekNaam)) {
            $useMinMax = false;
            if (isset($hoeveelheidGeneriekNaam['min'])) {
                $this->addUsingAlias(GsSamenstellingPeer::HOEVEELHEID_GENERIEK_NAAM, $hoeveelheidGeneriekNaam['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hoeveelheidGeneriekNaam['max'])) {
                $this->addUsingAlias(GsSamenstellingPeer::HOEVEELHEID_GENERIEK_NAAM, $hoeveelheidGeneriekNaam['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSamenstellingPeer::HOEVEELHEID_GENERIEK_NAAM, $hoeveelheidGeneriekNaam, $comparison);
    }

    /**
     * Filter the query on the thesaurusverwijzig_eenh_hoeveelh_generiek_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusverwijzigEenhHoeveelhGeneriekNaam(1234); // WHERE thesaurusverwijzig_eenh_hoeveelh_generiek_naam = 1234
     * $query->filterByThesaurusverwijzigEenhHoeveelhGeneriekNaam(array(12, 34)); // WHERE thesaurusverwijzig_eenh_hoeveelh_generiek_naam IN (12, 34)
     * $query->filterByThesaurusverwijzigEenhHoeveelhGeneriekNaam(array('min' => 12)); // WHERE thesaurusverwijzig_eenh_hoeveelh_generiek_naam >= 12
     * $query->filterByThesaurusverwijzigEenhHoeveelhGeneriekNaam(array('max' => 12)); // WHERE thesaurusverwijzig_eenh_hoeveelh_generiek_naam <= 12
     * </code>
     *
     * @param     mixed $thesaurusverwijzigEenhHoeveelhGeneriekNaam The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsSamenstellingQuery The current query, for fluid interface
     */
    public function filterByThesaurusverwijzigEenhHoeveelhGeneriekNaam($thesaurusverwijzigEenhHoeveelhGeneriekNaam = null, $comparison = null)
    {
        if (is_array($thesaurusverwijzigEenhHoeveelhGeneriekNaam)) {
            $useMinMax = false;
            if (isset($thesaurusverwijzigEenhHoeveelhGeneriekNaam['min'])) {
                $this->addUsingAlias(GsSamenstellingPeer::THESAURUSVERWIJZIG_EENH_HOEVEELH_GENERIEK_NAAM, $thesaurusverwijzigEenhHoeveelhGeneriekNaam['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusverwijzigEenhHoeveelhGeneriekNaam['max'])) {
                $this->addUsingAlias(GsSamenstellingPeer::THESAURUSVERWIJZIG_EENH_HOEVEELH_GENERIEK_NAAM, $thesaurusverwijzigEenhHoeveelhGeneriekNaam['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSamenstellingPeer::THESAURUSVERWIJZIG_EENH_HOEVEELH_GENERIEK_NAAM, $thesaurusverwijzigEenhHoeveelhGeneriekNaam, $comparison);
    }

    /**
     * Filter the query on the eenheid_hoeveelheid_generieke_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByEenheidHoeveelheidGeneriekeNaam(1234); // WHERE eenheid_hoeveelheid_generieke_naam = 1234
     * $query->filterByEenheidHoeveelheidGeneriekeNaam(array(12, 34)); // WHERE eenheid_hoeveelheid_generieke_naam IN (12, 34)
     * $query->filterByEenheidHoeveelheidGeneriekeNaam(array('min' => 12)); // WHERE eenheid_hoeveelheid_generieke_naam >= 12
     * $query->filterByEenheidHoeveelheidGeneriekeNaam(array('max' => 12)); // WHERE eenheid_hoeveelheid_generieke_naam <= 12
     * </code>
     *
     * @param     mixed $eenheidHoeveelheidGeneriekeNaam The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsSamenstellingQuery The current query, for fluid interface
     */
    public function filterByEenheidHoeveelheidGeneriekeNaam($eenheidHoeveelheidGeneriekeNaam = null, $comparison = null)
    {
        if (is_array($eenheidHoeveelheidGeneriekeNaam)) {
            $useMinMax = false;
            if (isset($eenheidHoeveelheidGeneriekeNaam['min'])) {
                $this->addUsingAlias(GsSamenstellingPeer::EENHEID_HOEVEELHEID_GENERIEKE_NAAM, $eenheidHoeveelheidGeneriekeNaam['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eenheidHoeveelheidGeneriekeNaam['max'])) {
                $this->addUsingAlias(GsSamenstellingPeer::EENHEID_HOEVEELHEID_GENERIEKE_NAAM, $eenheidHoeveelheidGeneriekeNaam['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSamenstellingPeer::EENHEID_HOEVEELHEID_GENERIEKE_NAAM, $eenheidHoeveelheidGeneriekeNaam, $comparison);
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
     * @return GsSamenstellingQuery The current query, for fluid interface
     */
    public function filterByStamnaamcode($stamnaamcode = null, $comparison = null)
    {
        if (is_array($stamnaamcode)) {
            $useMinMax = false;
            if (isset($stamnaamcode['min'])) {
                $this->addUsingAlias(GsSamenstellingPeer::STAMNAAMCODE, $stamnaamcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stamnaamcode['max'])) {
                $this->addUsingAlias(GsSamenstellingPeer::STAMNAAMCODE, $stamnaamcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSamenstellingPeer::STAMNAAMCODE, $stamnaamcode, $comparison);
    }

    /**
     * Filter the query on the hoeveelheid_stamnaam column
     *
     * Example usage:
     * <code>
     * $query->filterByHoeveelheidStamnaam(1234); // WHERE hoeveelheid_stamnaam = 1234
     * $query->filterByHoeveelheidStamnaam(array(12, 34)); // WHERE hoeveelheid_stamnaam IN (12, 34)
     * $query->filterByHoeveelheidStamnaam(array('min' => 12)); // WHERE hoeveelheid_stamnaam >= 12
     * $query->filterByHoeveelheidStamnaam(array('max' => 12)); // WHERE hoeveelheid_stamnaam <= 12
     * </code>
     *
     * @param     mixed $hoeveelheidStamnaam The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsSamenstellingQuery The current query, for fluid interface
     */
    public function filterByHoeveelheidStamnaam($hoeveelheidStamnaam = null, $comparison = null)
    {
        if (is_array($hoeveelheidStamnaam)) {
            $useMinMax = false;
            if (isset($hoeveelheidStamnaam['min'])) {
                $this->addUsingAlias(GsSamenstellingPeer::HOEVEELHEID_STAMNAAM, $hoeveelheidStamnaam['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hoeveelheidStamnaam['max'])) {
                $this->addUsingAlias(GsSamenstellingPeer::HOEVEELHEID_STAMNAAM, $hoeveelheidStamnaam['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSamenstellingPeer::HOEVEELHEID_STAMNAAM, $hoeveelheidStamnaam, $comparison);
    }

    /**
     * Filter the query on the thesaurusverwijzig_eenh_hoeveelh_stamnaam column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusverwijzigEenhHoeveelhStamnaam(1234); // WHERE thesaurusverwijzig_eenh_hoeveelh_stamnaam = 1234
     * $query->filterByThesaurusverwijzigEenhHoeveelhStamnaam(array(12, 34)); // WHERE thesaurusverwijzig_eenh_hoeveelh_stamnaam IN (12, 34)
     * $query->filterByThesaurusverwijzigEenhHoeveelhStamnaam(array('min' => 12)); // WHERE thesaurusverwijzig_eenh_hoeveelh_stamnaam >= 12
     * $query->filterByThesaurusverwijzigEenhHoeveelhStamnaam(array('max' => 12)); // WHERE thesaurusverwijzig_eenh_hoeveelh_stamnaam <= 12
     * </code>
     *
     * @param     mixed $thesaurusverwijzigEenhHoeveelhStamnaam The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsSamenstellingQuery The current query, for fluid interface
     */
    public function filterByThesaurusverwijzigEenhHoeveelhStamnaam($thesaurusverwijzigEenhHoeveelhStamnaam = null, $comparison = null)
    {
        if (is_array($thesaurusverwijzigEenhHoeveelhStamnaam)) {
            $useMinMax = false;
            if (isset($thesaurusverwijzigEenhHoeveelhStamnaam['min'])) {
                $this->addUsingAlias(GsSamenstellingPeer::THESAURUSVERWIJZIG_EENH_HOEVEELH_STAMNAAM, $thesaurusverwijzigEenhHoeveelhStamnaam['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusverwijzigEenhHoeveelhStamnaam['max'])) {
                $this->addUsingAlias(GsSamenstellingPeer::THESAURUSVERWIJZIG_EENH_HOEVEELH_STAMNAAM, $thesaurusverwijzigEenhHoeveelhStamnaam['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSamenstellingPeer::THESAURUSVERWIJZIG_EENH_HOEVEELH_STAMNAAM, $thesaurusverwijzigEenhHoeveelhStamnaam, $comparison);
    }

    /**
     * Filter the query on the eenheid_hoeveelheid_stamnaam column
     *
     * Example usage:
     * <code>
     * $query->filterByEenheidHoeveelheidStamnaam(1234); // WHERE eenheid_hoeveelheid_stamnaam = 1234
     * $query->filterByEenheidHoeveelheidStamnaam(array(12, 34)); // WHERE eenheid_hoeveelheid_stamnaam IN (12, 34)
     * $query->filterByEenheidHoeveelheidStamnaam(array('min' => 12)); // WHERE eenheid_hoeveelheid_stamnaam >= 12
     * $query->filterByEenheidHoeveelheidStamnaam(array('max' => 12)); // WHERE eenheid_hoeveelheid_stamnaam <= 12
     * </code>
     *
     * @param     mixed $eenheidHoeveelheidStamnaam The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsSamenstellingQuery The current query, for fluid interface
     */
    public function filterByEenheidHoeveelheidStamnaam($eenheidHoeveelheidStamnaam = null, $comparison = null)
    {
        if (is_array($eenheidHoeveelheidStamnaam)) {
            $useMinMax = false;
            if (isset($eenheidHoeveelheidStamnaam['min'])) {
                $this->addUsingAlias(GsSamenstellingPeer::EENHEID_HOEVEELHEID_STAMNAAM, $eenheidHoeveelheidStamnaam['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eenheidHoeveelheidStamnaam['max'])) {
                $this->addUsingAlias(GsSamenstellingPeer::EENHEID_HOEVEELHEID_STAMNAAM, $eenheidHoeveelheidStamnaam['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSamenstellingPeer::EENHEID_HOEVEELHEID_STAMNAAM, $eenheidHoeveelheidStamnaam, $comparison);
    }

    /**
     * Filter the query on the sterktes_mogen_worden_opgeteld_jn column
     *
     * Example usage:
     * <code>
     * $query->filterBySterktesMogenWordenOpgeteldJn(1234); // WHERE sterktes_mogen_worden_opgeteld_jn = 1234
     * $query->filterBySterktesMogenWordenOpgeteldJn(array(12, 34)); // WHERE sterktes_mogen_worden_opgeteld_jn IN (12, 34)
     * $query->filterBySterktesMogenWordenOpgeteldJn(array('min' => 12)); // WHERE sterktes_mogen_worden_opgeteld_jn >= 12
     * $query->filterBySterktesMogenWordenOpgeteldJn(array('max' => 12)); // WHERE sterktes_mogen_worden_opgeteld_jn <= 12
     * </code>
     *
     * @param     mixed $sterktesMogenWordenOpgeteldJn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsSamenstellingQuery The current query, for fluid interface
     */
    public function filterBySterktesMogenWordenOpgeteldJn($sterktesMogenWordenOpgeteldJn = null, $comparison = null)
    {
        if (is_array($sterktesMogenWordenOpgeteldJn)) {
            $useMinMax = false;
            if (isset($sterktesMogenWordenOpgeteldJn['min'])) {
                $this->addUsingAlias(GsSamenstellingPeer::STERKTES_MOGEN_WORDEN_OPGETELD_JN, $sterktesMogenWordenOpgeteldJn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sterktesMogenWordenOpgeteldJn['max'])) {
                $this->addUsingAlias(GsSamenstellingPeer::STERKTES_MOGEN_WORDEN_OPGETELD_JN, $sterktesMogenWordenOpgeteldJn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsSamenstellingPeer::STERKTES_MOGEN_WORDEN_OPGETELD_JN, $sterktesMogenWordenOpgeteldJn, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsSamenstelling $gsSamenstelling Object to remove from the list of results
     *
     * @return GsSamenstellingQuery The current query, for fluid interface
     */
    public function prune($gsSamenstelling = null)
    {
        if ($gsSamenstelling) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsSamenstellingPeer::SOORT_CODE), $gsSamenstelling->getSoortCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsSamenstellingPeer::CODE), $gsSamenstelling->getCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsSamenstellingPeer::GENERIEKENAAMKODE), $gsSamenstelling->getGeneriekenaamkode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(GsSamenstellingPeer::HOEVEELHEID_GENERIEK_NAAM), $gsSamenstelling->getHoeveelheidGeneriekNaam(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(GsSamenstellingPeer::EENHEID_HOEVEELHEID_GENERIEKE_NAAM), $gsSamenstelling->getEenheidHoeveelheidGeneriekeNaam(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
