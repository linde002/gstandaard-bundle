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
use PharmaIntelligence\GstandaardBundle\Model\GsKoppelingZrsMetExterneCodes;
use PharmaIntelligence\GstandaardBundle\Model\GsKoppelingZrsMetExterneCodesPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsKoppelingZrsMetExterneCodesQuery;

/**
 * @method GsKoppelingZrsMetExterneCodesQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsKoppelingZrsMetExterneCodesQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsKoppelingZrsMetExterneCodesQuery orderByTypeExterneZrsCode($order = Criteria::ASC) Order by the type_externe_zrs_code column
 * @method GsKoppelingZrsMetExterneCodesQuery orderByExterneCodeVanHetTypeExttyp($order = Criteria::ASC) Order by the externe_code_van_het_type_exttyp column
 * @method GsKoppelingZrsMetExterneCodesQuery orderBySoortCode($order = Criteria::ASC) Order by the soort_code column
 * @method GsKoppelingZrsMetExterneCodesQuery orderByZorgRegistratieBinnenAaa($order = Criteria::ASC) Order by the zorg_registratie_binnen_aaa column
 * @method GsKoppelingZrsMetExterneCodesQuery orderByZorgRegistratieBinnenAaa1($order = Criteria::ASC) Order by the zorg_registratie_binnen_aaa1 column
 * @method GsKoppelingZrsMetExterneCodesQuery orderByZorgRegistratieNummerVanDeActieregel($order = Criteria::ASC) Order by the zorg_registratie_nummer_van_de_actieregel column
 *
 * @method GsKoppelingZrsMetExterneCodesQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsKoppelingZrsMetExterneCodesQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsKoppelingZrsMetExterneCodesQuery groupByTypeExterneZrsCode() Group by the type_externe_zrs_code column
 * @method GsKoppelingZrsMetExterneCodesQuery groupByExterneCodeVanHetTypeExttyp() Group by the externe_code_van_het_type_exttyp column
 * @method GsKoppelingZrsMetExterneCodesQuery groupBySoortCode() Group by the soort_code column
 * @method GsKoppelingZrsMetExterneCodesQuery groupByZorgRegistratieBinnenAaa() Group by the zorg_registratie_binnen_aaa column
 * @method GsKoppelingZrsMetExterneCodesQuery groupByZorgRegistratieBinnenAaa1() Group by the zorg_registratie_binnen_aaa1 column
 * @method GsKoppelingZrsMetExterneCodesQuery groupByZorgRegistratieNummerVanDeActieregel() Group by the zorg_registratie_nummer_van_de_actieregel column
 *
 * @method GsKoppelingZrsMetExterneCodesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsKoppelingZrsMetExterneCodesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsKoppelingZrsMetExterneCodesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsKoppelingZrsMetExterneCodes findOne(PropelPDO $con = null) Return the first GsKoppelingZrsMetExterneCodes matching the query
 * @method GsKoppelingZrsMetExterneCodes findOneOrCreate(PropelPDO $con = null) Return the first GsKoppelingZrsMetExterneCodes matching the query, or a new GsKoppelingZrsMetExterneCodes object populated from the query conditions when no match is found
 *
 * @method GsKoppelingZrsMetExterneCodes findOneByBestandnummer(int $bestandnummer) Return the first GsKoppelingZrsMetExterneCodes filtered by the bestandnummer column
 * @method GsKoppelingZrsMetExterneCodes findOneByMutatiekode(int $mutatiekode) Return the first GsKoppelingZrsMetExterneCodes filtered by the mutatiekode column
 * @method GsKoppelingZrsMetExterneCodes findOneByTypeExterneZrsCode(int $type_externe_zrs_code) Return the first GsKoppelingZrsMetExterneCodes filtered by the type_externe_zrs_code column
 * @method GsKoppelingZrsMetExterneCodes findOneByExterneCodeVanHetTypeExttyp(string $externe_code_van_het_type_exttyp) Return the first GsKoppelingZrsMetExterneCodes filtered by the externe_code_van_het_type_exttyp column
 * @method GsKoppelingZrsMetExterneCodes findOneBySoortCode(int $soort_code) Return the first GsKoppelingZrsMetExterneCodes filtered by the soort_code column
 * @method GsKoppelingZrsMetExterneCodes findOneByZorgRegistratieBinnenAaa(int $zorg_registratie_binnen_aaa) Return the first GsKoppelingZrsMetExterneCodes filtered by the zorg_registratie_binnen_aaa column
 * @method GsKoppelingZrsMetExterneCodes findOneByZorgRegistratieBinnenAaa1(int $zorg_registratie_binnen_aaa1) Return the first GsKoppelingZrsMetExterneCodes filtered by the zorg_registratie_binnen_aaa1 column
 * @method GsKoppelingZrsMetExterneCodes findOneByZorgRegistratieNummerVanDeActieregel(int $zorg_registratie_nummer_van_de_actieregel) Return the first GsKoppelingZrsMetExterneCodes filtered by the zorg_registratie_nummer_van_de_actieregel column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsKoppelingZrsMetExterneCodes objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsKoppelingZrsMetExterneCodes objects filtered by the mutatiekode column
 * @method array findByTypeExterneZrsCode(int $type_externe_zrs_code) Return GsKoppelingZrsMetExterneCodes objects filtered by the type_externe_zrs_code column
 * @method array findByExterneCodeVanHetTypeExttyp(string $externe_code_van_het_type_exttyp) Return GsKoppelingZrsMetExterneCodes objects filtered by the externe_code_van_het_type_exttyp column
 * @method array findBySoortCode(int $soort_code) Return GsKoppelingZrsMetExterneCodes objects filtered by the soort_code column
 * @method array findByZorgRegistratieBinnenAaa(int $zorg_registratie_binnen_aaa) Return GsKoppelingZrsMetExterneCodes objects filtered by the zorg_registratie_binnen_aaa column
 * @method array findByZorgRegistratieBinnenAaa1(int $zorg_registratie_binnen_aaa1) Return GsKoppelingZrsMetExterneCodes objects filtered by the zorg_registratie_binnen_aaa1 column
 * @method array findByZorgRegistratieNummerVanDeActieregel(int $zorg_registratie_nummer_van_de_actieregel) Return GsKoppelingZrsMetExterneCodes objects filtered by the zorg_registratie_nummer_van_de_actieregel column
 */
abstract class BaseGsKoppelingZrsMetExterneCodesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsKoppelingZrsMetExterneCodesQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsKoppelingZrsMetExterneCodes';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsKoppelingZrsMetExterneCodesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsKoppelingZrsMetExterneCodesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsKoppelingZrsMetExterneCodesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsKoppelingZrsMetExterneCodesQuery) {
            return $criteria;
        }
        $query = new GsKoppelingZrsMetExterneCodesQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$type_externe_zrs_code, $externe_code_van_het_type_exttyp, $soort_code, $zorg_registratie_binnen_aaa, $zorg_registratie_binnen_aaa1, $zorg_registratie_nummer_van_de_actieregel]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsKoppelingZrsMetExterneCodes|GsKoppelingZrsMetExterneCodes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsKoppelingZrsMetExterneCodesPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsKoppelingZrsMetExterneCodesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsKoppelingZrsMetExterneCodes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `type_externe_zrs_code`, `externe_code_van_het_type_exttyp`, `soort_code`, `zorg_registratie_binnen_aaa`, `zorg_registratie_binnen_aaa1`, `zorg_registratie_nummer_van_de_actieregel` FROM `gs_koppeling_zrs_met_externe_codes` WHERE `type_externe_zrs_code` = :p0 AND `externe_code_van_het_type_exttyp` = :p1 AND `soort_code` = :p2 AND `zorg_registratie_binnen_aaa` = :p3 AND `zorg_registratie_binnen_aaa1` = :p4 AND `zorg_registratie_nummer_van_de_actieregel` = :p5';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_INT);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsKoppelingZrsMetExterneCodes();
            $obj->hydrate($row);
            GsKoppelingZrsMetExterneCodesPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5])));
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
     * @return GsKoppelingZrsMetExterneCodes|GsKoppelingZrsMetExterneCodes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsKoppelingZrsMetExterneCodes[]|mixed the list of results, formatted by the current formatter
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
     * @return GsKoppelingZrsMetExterneCodesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::EXTERNE_CODE_VAN_HET_TYPE_EXTTYP, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $key[5], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsKoppelingZrsMetExterneCodesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsKoppelingZrsMetExterneCodesPeer::EXTERNE_CODE_VAN_HET_TYPE_EXTTYP, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
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
     * @return GsKoppelingZrsMetExterneCodesQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsKoppelingZrsMetExterneCodesQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the type_externe_zrs_code column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeExterneZrsCode(1234); // WHERE type_externe_zrs_code = 1234
     * $query->filterByTypeExterneZrsCode(array(12, 34)); // WHERE type_externe_zrs_code IN (12, 34)
     * $query->filterByTypeExterneZrsCode(array('min' => 12)); // WHERE type_externe_zrs_code >= 12
     * $query->filterByTypeExterneZrsCode(array('max' => 12)); // WHERE type_externe_zrs_code <= 12
     * </code>
     *
     * @param     mixed $typeExterneZrsCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsKoppelingZrsMetExterneCodesQuery The current query, for fluid interface
     */
    public function filterByTypeExterneZrsCode($typeExterneZrsCode = null, $comparison = null)
    {
        if (is_array($typeExterneZrsCode)) {
            $useMinMax = false;
            if (isset($typeExterneZrsCode['min'])) {
                $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE, $typeExterneZrsCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeExterneZrsCode['max'])) {
                $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE, $typeExterneZrsCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE, $typeExterneZrsCode, $comparison);
    }

    /**
     * Filter the query on the externe_code_van_het_type_exttyp column
     *
     * Example usage:
     * <code>
     * $query->filterByExterneCodeVanHetTypeExttyp('fooValue');   // WHERE externe_code_van_het_type_exttyp = 'fooValue'
     * $query->filterByExterneCodeVanHetTypeExttyp('%fooValue%'); // WHERE externe_code_van_het_type_exttyp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $externeCodeVanHetTypeExttyp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsKoppelingZrsMetExterneCodesQuery The current query, for fluid interface
     */
    public function filterByExterneCodeVanHetTypeExttyp($externeCodeVanHetTypeExttyp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($externeCodeVanHetTypeExttyp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $externeCodeVanHetTypeExttyp)) {
                $externeCodeVanHetTypeExttyp = str_replace('*', '%', $externeCodeVanHetTypeExttyp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::EXTERNE_CODE_VAN_HET_TYPE_EXTTYP, $externeCodeVanHetTypeExttyp, $comparison);
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
     * @return GsKoppelingZrsMetExterneCodesQuery The current query, for fluid interface
     */
    public function filterBySoortCode($soortCode = null, $comparison = null)
    {
        if (is_array($soortCode)) {
            $useMinMax = false;
            if (isset($soortCode['min'])) {
                $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE, $soortCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortCode['max'])) {
                $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE, $soortCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE, $soortCode, $comparison);
    }

    /**
     * Filter the query on the zorg_registratie_binnen_aaa column
     *
     * Example usage:
     * <code>
     * $query->filterByZorgRegistratieBinnenAaa(1234); // WHERE zorg_registratie_binnen_aaa = 1234
     * $query->filterByZorgRegistratieBinnenAaa(array(12, 34)); // WHERE zorg_registratie_binnen_aaa IN (12, 34)
     * $query->filterByZorgRegistratieBinnenAaa(array('min' => 12)); // WHERE zorg_registratie_binnen_aaa >= 12
     * $query->filterByZorgRegistratieBinnenAaa(array('max' => 12)); // WHERE zorg_registratie_binnen_aaa <= 12
     * </code>
     *
     * @param     mixed $zorgRegistratieBinnenAaa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsKoppelingZrsMetExterneCodesQuery The current query, for fluid interface
     */
    public function filterByZorgRegistratieBinnenAaa($zorgRegistratieBinnenAaa = null, $comparison = null)
    {
        if (is_array($zorgRegistratieBinnenAaa)) {
            $useMinMax = false;
            if (isset($zorgRegistratieBinnenAaa['min'])) {
                $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA, $zorgRegistratieBinnenAaa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zorgRegistratieBinnenAaa['max'])) {
                $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA, $zorgRegistratieBinnenAaa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA, $zorgRegistratieBinnenAaa, $comparison);
    }

    /**
     * Filter the query on the zorg_registratie_binnen_aaa1 column
     *
     * Example usage:
     * <code>
     * $query->filterByZorgRegistratieBinnenAaa1(1234); // WHERE zorg_registratie_binnen_aaa1 = 1234
     * $query->filterByZorgRegistratieBinnenAaa1(array(12, 34)); // WHERE zorg_registratie_binnen_aaa1 IN (12, 34)
     * $query->filterByZorgRegistratieBinnenAaa1(array('min' => 12)); // WHERE zorg_registratie_binnen_aaa1 >= 12
     * $query->filterByZorgRegistratieBinnenAaa1(array('max' => 12)); // WHERE zorg_registratie_binnen_aaa1 <= 12
     * </code>
     *
     * @param     mixed $zorgRegistratieBinnenAaa1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsKoppelingZrsMetExterneCodesQuery The current query, for fluid interface
     */
    public function filterByZorgRegistratieBinnenAaa1($zorgRegistratieBinnenAaa1 = null, $comparison = null)
    {
        if (is_array($zorgRegistratieBinnenAaa1)) {
            $useMinMax = false;
            if (isset($zorgRegistratieBinnenAaa1['min'])) {
                $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1, $zorgRegistratieBinnenAaa1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zorgRegistratieBinnenAaa1['max'])) {
                $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1, $zorgRegistratieBinnenAaa1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1, $zorgRegistratieBinnenAaa1, $comparison);
    }

    /**
     * Filter the query on the zorg_registratie_nummer_van_de_actieregel column
     *
     * Example usage:
     * <code>
     * $query->filterByZorgRegistratieNummerVanDeActieregel(1234); // WHERE zorg_registratie_nummer_van_de_actieregel = 1234
     * $query->filterByZorgRegistratieNummerVanDeActieregel(array(12, 34)); // WHERE zorg_registratie_nummer_van_de_actieregel IN (12, 34)
     * $query->filterByZorgRegistratieNummerVanDeActieregel(array('min' => 12)); // WHERE zorg_registratie_nummer_van_de_actieregel >= 12
     * $query->filterByZorgRegistratieNummerVanDeActieregel(array('max' => 12)); // WHERE zorg_registratie_nummer_van_de_actieregel <= 12
     * </code>
     *
     * @param     mixed $zorgRegistratieNummerVanDeActieregel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsKoppelingZrsMetExterneCodesQuery The current query, for fluid interface
     */
    public function filterByZorgRegistratieNummerVanDeActieregel($zorgRegistratieNummerVanDeActieregel = null, $comparison = null)
    {
        if (is_array($zorgRegistratieNummerVanDeActieregel)) {
            $useMinMax = false;
            if (isset($zorgRegistratieNummerVanDeActieregel['min'])) {
                $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $zorgRegistratieNummerVanDeActieregel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zorgRegistratieNummerVanDeActieregel['max'])) {
                $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $zorgRegistratieNummerVanDeActieregel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL, $zorgRegistratieNummerVanDeActieregel, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsKoppelingZrsMetExterneCodes $gsKoppelingZrsMetExterneCodes Object to remove from the list of results
     *
     * @return GsKoppelingZrsMetExterneCodesQuery The current query, for fluid interface
     */
    public function prune($gsKoppelingZrsMetExterneCodes = null)
    {
        if ($gsKoppelingZrsMetExterneCodes) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsKoppelingZrsMetExterneCodesPeer::TYPE_EXTERNE_ZRS_CODE), $gsKoppelingZrsMetExterneCodes->getTypeExterneZrsCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsKoppelingZrsMetExterneCodesPeer::EXTERNE_CODE_VAN_HET_TYPE_EXTTYP), $gsKoppelingZrsMetExterneCodes->getExterneCodeVanHetTypeExttyp(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsKoppelingZrsMetExterneCodesPeer::SOORT_CODE), $gsKoppelingZrsMetExterneCodes->getSoortCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA), $gsKoppelingZrsMetExterneCodes->getZorgRegistratieBinnenAaa(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_BINNEN_AAA1), $gsKoppelingZrsMetExterneCodes->getZorgRegistratieBinnenAaa1(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(GsKoppelingZrsMetExterneCodesPeer::ZORG_REGISTRATIE_NUMMER_VAN_DE_ACTIEREGEL), $gsKoppelingZrsMetExterneCodes->getZorgRegistratieNummerVanDeActieregel(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
