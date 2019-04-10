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
use PharmaIntelligence\GstandaardBundle\Model\GsDoseringenUitzonderingenOpBasis;
use PharmaIntelligence\GstandaardBundle\Model\GsDoseringenUitzonderingenOpBasisPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsDoseringenUitzonderingenOpBasisQuery;

/**
 * @method GsDoseringenUitzonderingenOpBasisQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsDoseringenUitzonderingenOpBasisQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsDoseringenUitzonderingenOpBasisQuery orderByDosisbasisnummer($order = Criteria::ASC) Order by the dosisbasisnummer column
 * @method GsDoseringenUitzonderingenOpBasisQuery orderByIdentificerendVolgnummer($order = Criteria::ASC) Order by the identificerend_volgnummer column
 * @method GsDoseringenUitzonderingenOpBasisQuery orderByThesaurusZorggroepcodering($order = Criteria::ASC) Order by the thesaurus_zorggroepcodering column
 * @method GsDoseringenUitzonderingenOpBasisQuery orderByZorggroepcodering($order = Criteria::ASC) Order by the zorggroepcodering column
 * @method GsDoseringenUitzonderingenOpBasisQuery orderByIcpc1nummer($order = Criteria::ASC) Order by the icpc1nummer column
 * @method GsDoseringenUitzonderingenOpBasisQuery orderByThesaurusVerbijzondering($order = Criteria::ASC) Order by the thesaurus_verbijzondering column
 * @method GsDoseringenUitzonderingenOpBasisQuery orderByVerbijzondering($order = Criteria::ASC) Order by the verbijzondering column
 * @method GsDoseringenUitzonderingenOpBasisQuery orderByIcpc2nummer($order = Criteria::ASC) Order by the icpc2nummer column
 * @method GsDoseringenUitzonderingenOpBasisQuery orderByIcd10nummer($order = Criteria::ASC) Order by the icd10nummer column
 * @method GsDoseringenUitzonderingenOpBasisQuery orderByThesaurusAfwijkendeToedieningsweg($order = Criteria::ASC) Order by the thesaurus_afwijkende_toedieningsweg column
 * @method GsDoseringenUitzonderingenOpBasisQuery orderByToedieningswegCode($order = Criteria::ASC) Order by the toedieningsweg_code column
 * @method GsDoseringenUitzonderingenOpBasisQuery orderByDosiscategorienummer($order = Criteria::ASC) Order by the dosiscategorienummer column
 *
 * @method GsDoseringenUitzonderingenOpBasisQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsDoseringenUitzonderingenOpBasisQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsDoseringenUitzonderingenOpBasisQuery groupByDosisbasisnummer() Group by the dosisbasisnummer column
 * @method GsDoseringenUitzonderingenOpBasisQuery groupByIdentificerendVolgnummer() Group by the identificerend_volgnummer column
 * @method GsDoseringenUitzonderingenOpBasisQuery groupByThesaurusZorggroepcodering() Group by the thesaurus_zorggroepcodering column
 * @method GsDoseringenUitzonderingenOpBasisQuery groupByZorggroepcodering() Group by the zorggroepcodering column
 * @method GsDoseringenUitzonderingenOpBasisQuery groupByIcpc1nummer() Group by the icpc1nummer column
 * @method GsDoseringenUitzonderingenOpBasisQuery groupByThesaurusVerbijzondering() Group by the thesaurus_verbijzondering column
 * @method GsDoseringenUitzonderingenOpBasisQuery groupByVerbijzondering() Group by the verbijzondering column
 * @method GsDoseringenUitzonderingenOpBasisQuery groupByIcpc2nummer() Group by the icpc2nummer column
 * @method GsDoseringenUitzonderingenOpBasisQuery groupByIcd10nummer() Group by the icd10nummer column
 * @method GsDoseringenUitzonderingenOpBasisQuery groupByThesaurusAfwijkendeToedieningsweg() Group by the thesaurus_afwijkende_toedieningsweg column
 * @method GsDoseringenUitzonderingenOpBasisQuery groupByToedieningswegCode() Group by the toedieningsweg_code column
 * @method GsDoseringenUitzonderingenOpBasisQuery groupByDosiscategorienummer() Group by the dosiscategorienummer column
 *
 * @method GsDoseringenUitzonderingenOpBasisQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsDoseringenUitzonderingenOpBasisQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsDoseringenUitzonderingenOpBasisQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsDoseringenUitzonderingenOpBasis findOne(PropelPDO $con = null) Return the first GsDoseringenUitzonderingenOpBasis matching the query
 * @method GsDoseringenUitzonderingenOpBasis findOneOrCreate(PropelPDO $con = null) Return the first GsDoseringenUitzonderingenOpBasis matching the query, or a new GsDoseringenUitzonderingenOpBasis object populated from the query conditions when no match is found
 *
 * @method GsDoseringenUitzonderingenOpBasis findOneByBestandnummer(int $bestandnummer) Return the first GsDoseringenUitzonderingenOpBasis filtered by the bestandnummer column
 * @method GsDoseringenUitzonderingenOpBasis findOneByMutatiekode(int $mutatiekode) Return the first GsDoseringenUitzonderingenOpBasis filtered by the mutatiekode column
 * @method GsDoseringenUitzonderingenOpBasis findOneByDosisbasisnummer(int $dosisbasisnummer) Return the first GsDoseringenUitzonderingenOpBasis filtered by the dosisbasisnummer column
 * @method GsDoseringenUitzonderingenOpBasis findOneByIdentificerendVolgnummer(int $identificerend_volgnummer) Return the first GsDoseringenUitzonderingenOpBasis filtered by the identificerend_volgnummer column
 * @method GsDoseringenUitzonderingenOpBasis findOneByThesaurusZorggroepcodering(int $thesaurus_zorggroepcodering) Return the first GsDoseringenUitzonderingenOpBasis filtered by the thesaurus_zorggroepcodering column
 * @method GsDoseringenUitzonderingenOpBasis findOneByZorggroepcodering(int $zorggroepcodering) Return the first GsDoseringenUitzonderingenOpBasis filtered by the zorggroepcodering column
 * @method GsDoseringenUitzonderingenOpBasis findOneByIcpc1nummer(int $icpc1nummer) Return the first GsDoseringenUitzonderingenOpBasis filtered by the icpc1nummer column
 * @method GsDoseringenUitzonderingenOpBasis findOneByThesaurusVerbijzondering(int $thesaurus_verbijzondering) Return the first GsDoseringenUitzonderingenOpBasis filtered by the thesaurus_verbijzondering column
 * @method GsDoseringenUitzonderingenOpBasis findOneByVerbijzondering(int $verbijzondering) Return the first GsDoseringenUitzonderingenOpBasis filtered by the verbijzondering column
 * @method GsDoseringenUitzonderingenOpBasis findOneByIcpc2nummer(int $icpc2nummer) Return the first GsDoseringenUitzonderingenOpBasis filtered by the icpc2nummer column
 * @method GsDoseringenUitzonderingenOpBasis findOneByIcd10nummer(int $icd10nummer) Return the first GsDoseringenUitzonderingenOpBasis filtered by the icd10nummer column
 * @method GsDoseringenUitzonderingenOpBasis findOneByThesaurusAfwijkendeToedieningsweg(int $thesaurus_afwijkende_toedieningsweg) Return the first GsDoseringenUitzonderingenOpBasis filtered by the thesaurus_afwijkende_toedieningsweg column
 * @method GsDoseringenUitzonderingenOpBasis findOneByToedieningswegCode(int $toedieningsweg_code) Return the first GsDoseringenUitzonderingenOpBasis filtered by the toedieningsweg_code column
 * @method GsDoseringenUitzonderingenOpBasis findOneByDosiscategorienummer(int $dosiscategorienummer) Return the first GsDoseringenUitzonderingenOpBasis filtered by the dosiscategorienummer column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsDoseringenUitzonderingenOpBasis objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsDoseringenUitzonderingenOpBasis objects filtered by the mutatiekode column
 * @method array findByDosisbasisnummer(int $dosisbasisnummer) Return GsDoseringenUitzonderingenOpBasis objects filtered by the dosisbasisnummer column
 * @method array findByIdentificerendVolgnummer(int $identificerend_volgnummer) Return GsDoseringenUitzonderingenOpBasis objects filtered by the identificerend_volgnummer column
 * @method array findByThesaurusZorggroepcodering(int $thesaurus_zorggroepcodering) Return GsDoseringenUitzonderingenOpBasis objects filtered by the thesaurus_zorggroepcodering column
 * @method array findByZorggroepcodering(int $zorggroepcodering) Return GsDoseringenUitzonderingenOpBasis objects filtered by the zorggroepcodering column
 * @method array findByIcpc1nummer(int $icpc1nummer) Return GsDoseringenUitzonderingenOpBasis objects filtered by the icpc1nummer column
 * @method array findByThesaurusVerbijzondering(int $thesaurus_verbijzondering) Return GsDoseringenUitzonderingenOpBasis objects filtered by the thesaurus_verbijzondering column
 * @method array findByVerbijzondering(int $verbijzondering) Return GsDoseringenUitzonderingenOpBasis objects filtered by the verbijzondering column
 * @method array findByIcpc2nummer(int $icpc2nummer) Return GsDoseringenUitzonderingenOpBasis objects filtered by the icpc2nummer column
 * @method array findByIcd10nummer(int $icd10nummer) Return GsDoseringenUitzonderingenOpBasis objects filtered by the icd10nummer column
 * @method array findByThesaurusAfwijkendeToedieningsweg(int $thesaurus_afwijkende_toedieningsweg) Return GsDoseringenUitzonderingenOpBasis objects filtered by the thesaurus_afwijkende_toedieningsweg column
 * @method array findByToedieningswegCode(int $toedieningsweg_code) Return GsDoseringenUitzonderingenOpBasis objects filtered by the toedieningsweg_code column
 * @method array findByDosiscategorienummer(int $dosiscategorienummer) Return GsDoseringenUitzonderingenOpBasis objects filtered by the dosiscategorienummer column
 */
abstract class BaseGsDoseringenUitzonderingenOpBasisQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsDoseringenUitzonderingenOpBasisQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDoseringenUitzonderingenOpBasis';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsDoseringenUitzonderingenOpBasisQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsDoseringenUitzonderingenOpBasisQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsDoseringenUitzonderingenOpBasisQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsDoseringenUitzonderingenOpBasisQuery) {
            return $criteria;
        }
        $query = new GsDoseringenUitzonderingenOpBasisQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$dosisbasisnummer, $identificerend_volgnummer]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsDoseringenUitzonderingenOpBasis|GsDoseringenUitzonderingenOpBasis[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsDoseringenUitzonderingenOpBasisPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsDoseringenUitzonderingenOpBasisPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsDoseringenUitzonderingenOpBasis A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `dosisbasisnummer`, `identificerend_volgnummer`, `thesaurus_zorggroepcodering`, `zorggroepcodering`, `icpc1nummer`, `thesaurus_verbijzondering`, `verbijzondering`, `icpc2nummer`, `icd10nummer`, `thesaurus_afwijkende_toedieningsweg`, `toedieningsweg_code`, `dosiscategorienummer` FROM `gs_doseringen_uitzonderingen_op_basis` WHERE `dosisbasisnummer` = :p0 AND `identificerend_volgnummer` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsDoseringenUitzonderingenOpBasis();
            $obj->hydrate($row);
            GsDoseringenUitzonderingenOpBasisPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsDoseringenUitzonderingenOpBasis|GsDoseringenUitzonderingenOpBasis[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsDoseringenUitzonderingenOpBasis[]|mixed the list of results, formatted by the current formatter
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
     * @return GsDoseringenUitzonderingenOpBasisQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsDoseringenUitzonderingenOpBasisQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER, $key[1], Criteria::EQUAL);
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
     * @return GsDoseringenUitzonderingenOpBasisQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsDoseringenUitzonderingenOpBasisQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the dosisbasisnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByDosisbasisnummer(1234); // WHERE dosisbasisnummer = 1234
     * $query->filterByDosisbasisnummer(array(12, 34)); // WHERE dosisbasisnummer IN (12, 34)
     * $query->filterByDosisbasisnummer(array('min' => 12)); // WHERE dosisbasisnummer >= 12
     * $query->filterByDosisbasisnummer(array('max' => 12)); // WHERE dosisbasisnummer <= 12
     * </code>
     *
     * @param     mixed $dosisbasisnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenUitzonderingenOpBasisQuery The current query, for fluid interface
     */
    public function filterByDosisbasisnummer($dosisbasisnummer = null, $comparison = null)
    {
        if (is_array($dosisbasisnummer)) {
            $useMinMax = false;
            if (isset($dosisbasisnummer['min'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER, $dosisbasisnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dosisbasisnummer['max'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER, $dosisbasisnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER, $dosisbasisnummer, $comparison);
    }

    /**
     * Filter the query on the identificerend_volgnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentificerendVolgnummer(1234); // WHERE identificerend_volgnummer = 1234
     * $query->filterByIdentificerendVolgnummer(array(12, 34)); // WHERE identificerend_volgnummer IN (12, 34)
     * $query->filterByIdentificerendVolgnummer(array('min' => 12)); // WHERE identificerend_volgnummer >= 12
     * $query->filterByIdentificerendVolgnummer(array('max' => 12)); // WHERE identificerend_volgnummer <= 12
     * </code>
     *
     * @param     mixed $identificerendVolgnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenUitzonderingenOpBasisQuery The current query, for fluid interface
     */
    public function filterByIdentificerendVolgnummer($identificerendVolgnummer = null, $comparison = null)
    {
        if (is_array($identificerendVolgnummer)) {
            $useMinMax = false;
            if (isset($identificerendVolgnummer['min'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER, $identificerendVolgnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($identificerendVolgnummer['max'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER, $identificerendVolgnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER, $identificerendVolgnummer, $comparison);
    }

    /**
     * Filter the query on the thesaurus_zorggroepcodering column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusZorggroepcodering(1234); // WHERE thesaurus_zorggroepcodering = 1234
     * $query->filterByThesaurusZorggroepcodering(array(12, 34)); // WHERE thesaurus_zorggroepcodering IN (12, 34)
     * $query->filterByThesaurusZorggroepcodering(array('min' => 12)); // WHERE thesaurus_zorggroepcodering >= 12
     * $query->filterByThesaurusZorggroepcodering(array('max' => 12)); // WHERE thesaurus_zorggroepcodering <= 12
     * </code>
     *
     * @param     mixed $thesaurusZorggroepcodering The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenUitzonderingenOpBasisQuery The current query, for fluid interface
     */
    public function filterByThesaurusZorggroepcodering($thesaurusZorggroepcodering = null, $comparison = null)
    {
        if (is_array($thesaurusZorggroepcodering)) {
            $useMinMax = false;
            if (isset($thesaurusZorggroepcodering['min'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_ZORGGROEPCODERING, $thesaurusZorggroepcodering['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusZorggroepcodering['max'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_ZORGGROEPCODERING, $thesaurusZorggroepcodering['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_ZORGGROEPCODERING, $thesaurusZorggroepcodering, $comparison);
    }

    /**
     * Filter the query on the zorggroepcodering column
     *
     * Example usage:
     * <code>
     * $query->filterByZorggroepcodering(1234); // WHERE zorggroepcodering = 1234
     * $query->filterByZorggroepcodering(array(12, 34)); // WHERE zorggroepcodering IN (12, 34)
     * $query->filterByZorggroepcodering(array('min' => 12)); // WHERE zorggroepcodering >= 12
     * $query->filterByZorggroepcodering(array('max' => 12)); // WHERE zorggroepcodering <= 12
     * </code>
     *
     * @param     mixed $zorggroepcodering The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenUitzonderingenOpBasisQuery The current query, for fluid interface
     */
    public function filterByZorggroepcodering($zorggroepcodering = null, $comparison = null)
    {
        if (is_array($zorggroepcodering)) {
            $useMinMax = false;
            if (isset($zorggroepcodering['min'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::ZORGGROEPCODERING, $zorggroepcodering['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zorggroepcodering['max'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::ZORGGROEPCODERING, $zorggroepcodering['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::ZORGGROEPCODERING, $zorggroepcodering, $comparison);
    }

    /**
     * Filter the query on the icpc1nummer column
     *
     * Example usage:
     * <code>
     * $query->filterByIcpc1nummer(1234); // WHERE icpc1nummer = 1234
     * $query->filterByIcpc1nummer(array(12, 34)); // WHERE icpc1nummer IN (12, 34)
     * $query->filterByIcpc1nummer(array('min' => 12)); // WHERE icpc1nummer >= 12
     * $query->filterByIcpc1nummer(array('max' => 12)); // WHERE icpc1nummer <= 12
     * </code>
     *
     * @param     mixed $icpc1nummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenUitzonderingenOpBasisQuery The current query, for fluid interface
     */
    public function filterByIcpc1nummer($icpc1nummer = null, $comparison = null)
    {
        if (is_array($icpc1nummer)) {
            $useMinMax = false;
            if (isset($icpc1nummer['min'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::ICPC1NUMMER, $icpc1nummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($icpc1nummer['max'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::ICPC1NUMMER, $icpc1nummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::ICPC1NUMMER, $icpc1nummer, $comparison);
    }

    /**
     * Filter the query on the thesaurus_verbijzondering column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusVerbijzondering(1234); // WHERE thesaurus_verbijzondering = 1234
     * $query->filterByThesaurusVerbijzondering(array(12, 34)); // WHERE thesaurus_verbijzondering IN (12, 34)
     * $query->filterByThesaurusVerbijzondering(array('min' => 12)); // WHERE thesaurus_verbijzondering >= 12
     * $query->filterByThesaurusVerbijzondering(array('max' => 12)); // WHERE thesaurus_verbijzondering <= 12
     * </code>
     *
     * @param     mixed $thesaurusVerbijzondering The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenUitzonderingenOpBasisQuery The current query, for fluid interface
     */
    public function filterByThesaurusVerbijzondering($thesaurusVerbijzondering = null, $comparison = null)
    {
        if (is_array($thesaurusVerbijzondering)) {
            $useMinMax = false;
            if (isset($thesaurusVerbijzondering['min'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_VERBIJZONDERING, $thesaurusVerbijzondering['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusVerbijzondering['max'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_VERBIJZONDERING, $thesaurusVerbijzondering['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_VERBIJZONDERING, $thesaurusVerbijzondering, $comparison);
    }

    /**
     * Filter the query on the verbijzondering column
     *
     * Example usage:
     * <code>
     * $query->filterByVerbijzondering(1234); // WHERE verbijzondering = 1234
     * $query->filterByVerbijzondering(array(12, 34)); // WHERE verbijzondering IN (12, 34)
     * $query->filterByVerbijzondering(array('min' => 12)); // WHERE verbijzondering >= 12
     * $query->filterByVerbijzondering(array('max' => 12)); // WHERE verbijzondering <= 12
     * </code>
     *
     * @param     mixed $verbijzondering The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenUitzonderingenOpBasisQuery The current query, for fluid interface
     */
    public function filterByVerbijzondering($verbijzondering = null, $comparison = null)
    {
        if (is_array($verbijzondering)) {
            $useMinMax = false;
            if (isset($verbijzondering['min'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::VERBIJZONDERING, $verbijzondering['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($verbijzondering['max'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::VERBIJZONDERING, $verbijzondering['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::VERBIJZONDERING, $verbijzondering, $comparison);
    }

    /**
     * Filter the query on the icpc2nummer column
     *
     * Example usage:
     * <code>
     * $query->filterByIcpc2nummer(1234); // WHERE icpc2nummer = 1234
     * $query->filterByIcpc2nummer(array(12, 34)); // WHERE icpc2nummer IN (12, 34)
     * $query->filterByIcpc2nummer(array('min' => 12)); // WHERE icpc2nummer >= 12
     * $query->filterByIcpc2nummer(array('max' => 12)); // WHERE icpc2nummer <= 12
     * </code>
     *
     * @param     mixed $icpc2nummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenUitzonderingenOpBasisQuery The current query, for fluid interface
     */
    public function filterByIcpc2nummer($icpc2nummer = null, $comparison = null)
    {
        if (is_array($icpc2nummer)) {
            $useMinMax = false;
            if (isset($icpc2nummer['min'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::ICPC2NUMMER, $icpc2nummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($icpc2nummer['max'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::ICPC2NUMMER, $icpc2nummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::ICPC2NUMMER, $icpc2nummer, $comparison);
    }

    /**
     * Filter the query on the icd10nummer column
     *
     * Example usage:
     * <code>
     * $query->filterByIcd10nummer(1234); // WHERE icd10nummer = 1234
     * $query->filterByIcd10nummer(array(12, 34)); // WHERE icd10nummer IN (12, 34)
     * $query->filterByIcd10nummer(array('min' => 12)); // WHERE icd10nummer >= 12
     * $query->filterByIcd10nummer(array('max' => 12)); // WHERE icd10nummer <= 12
     * </code>
     *
     * @param     mixed $icd10nummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenUitzonderingenOpBasisQuery The current query, for fluid interface
     */
    public function filterByIcd10nummer($icd10nummer = null, $comparison = null)
    {
        if (is_array($icd10nummer)) {
            $useMinMax = false;
            if (isset($icd10nummer['min'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::ICD10NUMMER, $icd10nummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($icd10nummer['max'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::ICD10NUMMER, $icd10nummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::ICD10NUMMER, $icd10nummer, $comparison);
    }

    /**
     * Filter the query on the thesaurus_afwijkende_toedieningsweg column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusAfwijkendeToedieningsweg(1234); // WHERE thesaurus_afwijkende_toedieningsweg = 1234
     * $query->filterByThesaurusAfwijkendeToedieningsweg(array(12, 34)); // WHERE thesaurus_afwijkende_toedieningsweg IN (12, 34)
     * $query->filterByThesaurusAfwijkendeToedieningsweg(array('min' => 12)); // WHERE thesaurus_afwijkende_toedieningsweg >= 12
     * $query->filterByThesaurusAfwijkendeToedieningsweg(array('max' => 12)); // WHERE thesaurus_afwijkende_toedieningsweg <= 12
     * </code>
     *
     * @param     mixed $thesaurusAfwijkendeToedieningsweg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenUitzonderingenOpBasisQuery The current query, for fluid interface
     */
    public function filterByThesaurusAfwijkendeToedieningsweg($thesaurusAfwijkendeToedieningsweg = null, $comparison = null)
    {
        if (is_array($thesaurusAfwijkendeToedieningsweg)) {
            $useMinMax = false;
            if (isset($thesaurusAfwijkendeToedieningsweg['min'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_AFWIJKENDE_TOEDIENINGSWEG, $thesaurusAfwijkendeToedieningsweg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusAfwijkendeToedieningsweg['max'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_AFWIJKENDE_TOEDIENINGSWEG, $thesaurusAfwijkendeToedieningsweg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::THESAURUS_AFWIJKENDE_TOEDIENINGSWEG, $thesaurusAfwijkendeToedieningsweg, $comparison);
    }

    /**
     * Filter the query on the toedieningsweg_code column
     *
     * Example usage:
     * <code>
     * $query->filterByToedieningswegCode(1234); // WHERE toedieningsweg_code = 1234
     * $query->filterByToedieningswegCode(array(12, 34)); // WHERE toedieningsweg_code IN (12, 34)
     * $query->filterByToedieningswegCode(array('min' => 12)); // WHERE toedieningsweg_code >= 12
     * $query->filterByToedieningswegCode(array('max' => 12)); // WHERE toedieningsweg_code <= 12
     * </code>
     *
     * @param     mixed $toedieningswegCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenUitzonderingenOpBasisQuery The current query, for fluid interface
     */
    public function filterByToedieningswegCode($toedieningswegCode = null, $comparison = null)
    {
        if (is_array($toedieningswegCode)) {
            $useMinMax = false;
            if (isset($toedieningswegCode['min'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::TOEDIENINGSWEG_CODE, $toedieningswegCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($toedieningswegCode['max'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::TOEDIENINGSWEG_CODE, $toedieningswegCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::TOEDIENINGSWEG_CODE, $toedieningswegCode, $comparison);
    }

    /**
     * Filter the query on the dosiscategorienummer column
     *
     * Example usage:
     * <code>
     * $query->filterByDosiscategorienummer(1234); // WHERE dosiscategorienummer = 1234
     * $query->filterByDosiscategorienummer(array(12, 34)); // WHERE dosiscategorienummer IN (12, 34)
     * $query->filterByDosiscategorienummer(array('min' => 12)); // WHERE dosiscategorienummer >= 12
     * $query->filterByDosiscategorienummer(array('max' => 12)); // WHERE dosiscategorienummer <= 12
     * </code>
     *
     * @param     mixed $dosiscategorienummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenUitzonderingenOpBasisQuery The current query, for fluid interface
     */
    public function filterByDosiscategorienummer($dosiscategorienummer = null, $comparison = null)
    {
        if (is_array($dosiscategorienummer)) {
            $useMinMax = false;
            if (isset($dosiscategorienummer['min'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::DOSISCATEGORIENUMMER, $dosiscategorienummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dosiscategorienummer['max'])) {
                $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::DOSISCATEGORIENUMMER, $dosiscategorienummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenUitzonderingenOpBasisPeer::DOSISCATEGORIENUMMER, $dosiscategorienummer, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsDoseringenUitzonderingenOpBasis $gsDoseringenUitzonderingenOpBasis Object to remove from the list of results
     *
     * @return GsDoseringenUitzonderingenOpBasisQuery The current query, for fluid interface
     */
    public function prune($gsDoseringenUitzonderingenOpBasis = null)
    {
        if ($gsDoseringenUitzonderingenOpBasis) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsDoseringenUitzonderingenOpBasisPeer::DOSISBASISNUMMER), $gsDoseringenUitzonderingenOpBasis->getDosisbasisnummer(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsDoseringenUitzonderingenOpBasisPeer::IDENTIFICEREND_VOLGNUMMER), $gsDoseringenUitzonderingenOpBasis->getIdentificerendVolgnummer(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
