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
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesNietBijBepSpecialisme;
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesNietBijBepSpecialismePeer;
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesNietBijBepSpecialismeQuery;

/**
 * @method GsInteractiesNietBijBepSpecialismeQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsInteractiesNietBijBepSpecialismeQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsInteractiesNietBijBepSpecialismeQuery orderByInteractiewaarschuwingCode($order = Criteria::ASC) Order by the interactiewaarschuwing_code column
 * @method GsInteractiesNietBijBepSpecialismeQuery orderByThesaurusnrZorggroep1002($order = Criteria::ASC) Order by the thesaurusnr_zorggroep_1002 column
 * @method GsInteractiesNietBijBepSpecialismeQuery orderByZorggroepcodering($order = Criteria::ASC) Order by the zorggroepcodering column
 *
 * @method GsInteractiesNietBijBepSpecialismeQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsInteractiesNietBijBepSpecialismeQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsInteractiesNietBijBepSpecialismeQuery groupByInteractiewaarschuwingCode() Group by the interactiewaarschuwing_code column
 * @method GsInteractiesNietBijBepSpecialismeQuery groupByThesaurusnrZorggroep1002() Group by the thesaurusnr_zorggroep_1002 column
 * @method GsInteractiesNietBijBepSpecialismeQuery groupByZorggroepcodering() Group by the zorggroepcodering column
 *
 * @method GsInteractiesNietBijBepSpecialismeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsInteractiesNietBijBepSpecialismeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsInteractiesNietBijBepSpecialismeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsInteractiesNietBijBepSpecialisme findOne(PropelPDO $con = null) Return the first GsInteractiesNietBijBepSpecialisme matching the query
 * @method GsInteractiesNietBijBepSpecialisme findOneOrCreate(PropelPDO $con = null) Return the first GsInteractiesNietBijBepSpecialisme matching the query, or a new GsInteractiesNietBijBepSpecialisme object populated from the query conditions when no match is found
 *
 * @method GsInteractiesNietBijBepSpecialisme findOneByBestandnummer(int $bestandnummer) Return the first GsInteractiesNietBijBepSpecialisme filtered by the bestandnummer column
 * @method GsInteractiesNietBijBepSpecialisme findOneByMutatiekode(int $mutatiekode) Return the first GsInteractiesNietBijBepSpecialisme filtered by the mutatiekode column
 * @method GsInteractiesNietBijBepSpecialisme findOneByInteractiewaarschuwingCode(int $interactiewaarschuwing_code) Return the first GsInteractiesNietBijBepSpecialisme filtered by the interactiewaarschuwing_code column
 * @method GsInteractiesNietBijBepSpecialisme findOneByThesaurusnrZorggroep1002(int $thesaurusnr_zorggroep_1002) Return the first GsInteractiesNietBijBepSpecialisme filtered by the thesaurusnr_zorggroep_1002 column
 * @method GsInteractiesNietBijBepSpecialisme findOneByZorggroepcodering(int $zorggroepcodering) Return the first GsInteractiesNietBijBepSpecialisme filtered by the zorggroepcodering column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsInteractiesNietBijBepSpecialisme objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsInteractiesNietBijBepSpecialisme objects filtered by the mutatiekode column
 * @method array findByInteractiewaarschuwingCode(int $interactiewaarschuwing_code) Return GsInteractiesNietBijBepSpecialisme objects filtered by the interactiewaarschuwing_code column
 * @method array findByThesaurusnrZorggroep1002(int $thesaurusnr_zorggroep_1002) Return GsInteractiesNietBijBepSpecialisme objects filtered by the thesaurusnr_zorggroep_1002 column
 * @method array findByZorggroepcodering(int $zorggroepcodering) Return GsInteractiesNietBijBepSpecialisme objects filtered by the zorggroepcodering column
 */
abstract class BaseGsInteractiesNietBijBepSpecialismeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsInteractiesNietBijBepSpecialismeQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsInteractiesNietBijBepSpecialisme';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsInteractiesNietBijBepSpecialismeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsInteractiesNietBijBepSpecialismeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsInteractiesNietBijBepSpecialismeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsInteractiesNietBijBepSpecialismeQuery) {
            return $criteria;
        }
        $query = new GsInteractiesNietBijBepSpecialismeQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$interactiewaarschuwing_code, $thesaurusnr_zorggroep_1002, $zorggroepcodering]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsInteractiesNietBijBepSpecialisme|GsInteractiesNietBijBepSpecialisme[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsInteractiesNietBijBepSpecialismePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsInteractiesNietBijBepSpecialismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsInteractiesNietBijBepSpecialisme A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `interactiewaarschuwing_code`, `thesaurusnr_zorggroep_1002`, `zorggroepcodering` FROM `gs_interacties_niet_bij_bep_specialisme` WHERE `interactiewaarschuwing_code` = :p0 AND `thesaurusnr_zorggroep_1002` = :p1 AND `zorggroepcodering` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsInteractiesNietBijBepSpecialisme();
            $obj->hydrate($row);
            GsInteractiesNietBijBepSpecialismePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return GsInteractiesNietBijBepSpecialisme|GsInteractiesNietBijBepSpecialisme[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsInteractiesNietBijBepSpecialisme[]|mixed the list of results, formatted by the current formatter
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
     * @return GsInteractiesNietBijBepSpecialismeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsInteractiesNietBijBepSpecialismePeer::INTERACTIEWAARSCHUWING_CODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsInteractiesNietBijBepSpecialismePeer::THESAURUSNR_ZORGGROEP_1002, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsInteractiesNietBijBepSpecialismePeer::ZORGGROEPCODERING, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsInteractiesNietBijBepSpecialismeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsInteractiesNietBijBepSpecialismePeer::INTERACTIEWAARSCHUWING_CODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsInteractiesNietBijBepSpecialismePeer::THESAURUSNR_ZORGGROEP_1002, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsInteractiesNietBijBepSpecialismePeer::ZORGGROEPCODERING, $key[2], Criteria::EQUAL);
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
     * @return GsInteractiesNietBijBepSpecialismeQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsInteractiesNietBijBepSpecialismePeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsInteractiesNietBijBepSpecialismePeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesNietBijBepSpecialismePeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsInteractiesNietBijBepSpecialismeQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsInteractiesNietBijBepSpecialismePeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsInteractiesNietBijBepSpecialismePeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesNietBijBepSpecialismePeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the interactiewaarschuwing_code column
     *
     * Example usage:
     * <code>
     * $query->filterByInteractiewaarschuwingCode(1234); // WHERE interactiewaarschuwing_code = 1234
     * $query->filterByInteractiewaarschuwingCode(array(12, 34)); // WHERE interactiewaarschuwing_code IN (12, 34)
     * $query->filterByInteractiewaarschuwingCode(array('min' => 12)); // WHERE interactiewaarschuwing_code >= 12
     * $query->filterByInteractiewaarschuwingCode(array('max' => 12)); // WHERE interactiewaarschuwing_code <= 12
     * </code>
     *
     * @param     mixed $interactiewaarschuwingCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesNietBijBepSpecialismeQuery The current query, for fluid interface
     */
    public function filterByInteractiewaarschuwingCode($interactiewaarschuwingCode = null, $comparison = null)
    {
        if (is_array($interactiewaarschuwingCode)) {
            $useMinMax = false;
            if (isset($interactiewaarschuwingCode['min'])) {
                $this->addUsingAlias(GsInteractiesNietBijBepSpecialismePeer::INTERACTIEWAARSCHUWING_CODE, $interactiewaarschuwingCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($interactiewaarschuwingCode['max'])) {
                $this->addUsingAlias(GsInteractiesNietBijBepSpecialismePeer::INTERACTIEWAARSCHUWING_CODE, $interactiewaarschuwingCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesNietBijBepSpecialismePeer::INTERACTIEWAARSCHUWING_CODE, $interactiewaarschuwingCode, $comparison);
    }

    /**
     * Filter the query on the thesaurusnr_zorggroep_1002 column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusnrZorggroep1002(1234); // WHERE thesaurusnr_zorggroep_1002 = 1234
     * $query->filterByThesaurusnrZorggroep1002(array(12, 34)); // WHERE thesaurusnr_zorggroep_1002 IN (12, 34)
     * $query->filterByThesaurusnrZorggroep1002(array('min' => 12)); // WHERE thesaurusnr_zorggroep_1002 >= 12
     * $query->filterByThesaurusnrZorggroep1002(array('max' => 12)); // WHERE thesaurusnr_zorggroep_1002 <= 12
     * </code>
     *
     * @param     mixed $thesaurusnrZorggroep1002 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesNietBijBepSpecialismeQuery The current query, for fluid interface
     */
    public function filterByThesaurusnrZorggroep1002($thesaurusnrZorggroep1002 = null, $comparison = null)
    {
        if (is_array($thesaurusnrZorggroep1002)) {
            $useMinMax = false;
            if (isset($thesaurusnrZorggroep1002['min'])) {
                $this->addUsingAlias(GsInteractiesNietBijBepSpecialismePeer::THESAURUSNR_ZORGGROEP_1002, $thesaurusnrZorggroep1002['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusnrZorggroep1002['max'])) {
                $this->addUsingAlias(GsInteractiesNietBijBepSpecialismePeer::THESAURUSNR_ZORGGROEP_1002, $thesaurusnrZorggroep1002['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesNietBijBepSpecialismePeer::THESAURUSNR_ZORGGROEP_1002, $thesaurusnrZorggroep1002, $comparison);
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
     * @return GsInteractiesNietBijBepSpecialismeQuery The current query, for fluid interface
     */
    public function filterByZorggroepcodering($zorggroepcodering = null, $comparison = null)
    {
        if (is_array($zorggroepcodering)) {
            $useMinMax = false;
            if (isset($zorggroepcodering['min'])) {
                $this->addUsingAlias(GsInteractiesNietBijBepSpecialismePeer::ZORGGROEPCODERING, $zorggroepcodering['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zorggroepcodering['max'])) {
                $this->addUsingAlias(GsInteractiesNietBijBepSpecialismePeer::ZORGGROEPCODERING, $zorggroepcodering['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesNietBijBepSpecialismePeer::ZORGGROEPCODERING, $zorggroepcodering, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsInteractiesNietBijBepSpecialisme $gsInteractiesNietBijBepSpecialisme Object to remove from the list of results
     *
     * @return GsInteractiesNietBijBepSpecialismeQuery The current query, for fluid interface
     */
    public function prune($gsInteractiesNietBijBepSpecialisme = null)
    {
        if ($gsInteractiesNietBijBepSpecialisme) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsInteractiesNietBijBepSpecialismePeer::INTERACTIEWAARSCHUWING_CODE), $gsInteractiesNietBijBepSpecialisme->getInteractiewaarschuwingCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsInteractiesNietBijBepSpecialismePeer::THESAURUSNR_ZORGGROEP_1002), $gsInteractiesNietBijBepSpecialisme->getThesaurusnrZorggroep1002(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsInteractiesNietBijBepSpecialismePeer::ZORGGROEPCODERING), $gsInteractiesNietBijBepSpecialisme->getZorggroepcodering(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
