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
use PharmaIntelligence\GstandaardBundle\Model\GsActiesBijInteracties;
use PharmaIntelligence\GstandaardBundle\Model\GsActiesBijInteractiesPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsActiesBijInteractiesQuery;

/**
 * @method GsActiesBijInteractiesQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsActiesBijInteractiesQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsActiesBijInteractiesQuery orderByInteractiewaarschuwingCode($order = Criteria::ASC) Order by the interactiewaarschuwing_code column
 * @method GsActiesBijInteractiesQuery orderByVolgnummerActie($order = Criteria::ASC) Order by the volgnummer_actie column
 * @method GsActiesBijInteractiesQuery orderByActiesBijInteractiesthes130($order = Criteria::ASC) Order by the acties_bij_interactiesthes_130 column
 * @method GsActiesBijInteractiesQuery orderByActieBijInteractie($order = Criteria::ASC) Order by the actie_bij_interactie column
 *
 * @method GsActiesBijInteractiesQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsActiesBijInteractiesQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsActiesBijInteractiesQuery groupByInteractiewaarschuwingCode() Group by the interactiewaarschuwing_code column
 * @method GsActiesBijInteractiesQuery groupByVolgnummerActie() Group by the volgnummer_actie column
 * @method GsActiesBijInteractiesQuery groupByActiesBijInteractiesthes130() Group by the acties_bij_interactiesthes_130 column
 * @method GsActiesBijInteractiesQuery groupByActieBijInteractie() Group by the actie_bij_interactie column
 *
 * @method GsActiesBijInteractiesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsActiesBijInteractiesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsActiesBijInteractiesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsActiesBijInteracties findOne(PropelPDO $con = null) Return the first GsActiesBijInteracties matching the query
 * @method GsActiesBijInteracties findOneOrCreate(PropelPDO $con = null) Return the first GsActiesBijInteracties matching the query, or a new GsActiesBijInteracties object populated from the query conditions when no match is found
 *
 * @method GsActiesBijInteracties findOneByBestandnummer(int $bestandnummer) Return the first GsActiesBijInteracties filtered by the bestandnummer column
 * @method GsActiesBijInteracties findOneByMutatiekode(int $mutatiekode) Return the first GsActiesBijInteracties filtered by the mutatiekode column
 * @method GsActiesBijInteracties findOneByInteractiewaarschuwingCode(int $interactiewaarschuwing_code) Return the first GsActiesBijInteracties filtered by the interactiewaarschuwing_code column
 * @method GsActiesBijInteracties findOneByVolgnummerActie(int $volgnummer_actie) Return the first GsActiesBijInteracties filtered by the volgnummer_actie column
 * @method GsActiesBijInteracties findOneByActiesBijInteractiesthes130(int $acties_bij_interactiesthes_130) Return the first GsActiesBijInteracties filtered by the acties_bij_interactiesthes_130 column
 * @method GsActiesBijInteracties findOneByActieBijInteractie(int $actie_bij_interactie) Return the first GsActiesBijInteracties filtered by the actie_bij_interactie column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsActiesBijInteracties objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsActiesBijInteracties objects filtered by the mutatiekode column
 * @method array findByInteractiewaarschuwingCode(int $interactiewaarschuwing_code) Return GsActiesBijInteracties objects filtered by the interactiewaarschuwing_code column
 * @method array findByVolgnummerActie(int $volgnummer_actie) Return GsActiesBijInteracties objects filtered by the volgnummer_actie column
 * @method array findByActiesBijInteractiesthes130(int $acties_bij_interactiesthes_130) Return GsActiesBijInteracties objects filtered by the acties_bij_interactiesthes_130 column
 * @method array findByActieBijInteractie(int $actie_bij_interactie) Return GsActiesBijInteracties objects filtered by the actie_bij_interactie column
 */
abstract class BaseGsActiesBijInteractiesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsActiesBijInteractiesQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsActiesBijInteracties';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsActiesBijInteractiesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsActiesBijInteractiesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsActiesBijInteractiesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsActiesBijInteractiesQuery) {
            return $criteria;
        }
        $query = new GsActiesBijInteractiesQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$interactiewaarschuwing_code, $volgnummer_actie]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsActiesBijInteracties|GsActiesBijInteracties[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsActiesBijInteractiesPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsActiesBijInteractiesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsActiesBijInteracties A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `interactiewaarschuwing_code`, `volgnummer_actie`, `acties_bij_interactiesthes_130`, `actie_bij_interactie` FROM `gs_acties_bij_interacties` WHERE `interactiewaarschuwing_code` = :p0 AND `volgnummer_actie` = :p1';
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
            $obj = new GsActiesBijInteracties();
            $obj->hydrate($row);
            GsActiesBijInteractiesPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsActiesBijInteracties|GsActiesBijInteracties[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsActiesBijInteracties[]|mixed the list of results, formatted by the current formatter
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
     * @return GsActiesBijInteractiesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsActiesBijInteractiesPeer::INTERACTIEWAARSCHUWING_CODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsActiesBijInteractiesPeer::VOLGNUMMER_ACTIE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsActiesBijInteractiesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsActiesBijInteractiesPeer::INTERACTIEWAARSCHUWING_CODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsActiesBijInteractiesPeer::VOLGNUMMER_ACTIE, $key[1], Criteria::EQUAL);
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
     * @return GsActiesBijInteractiesQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsActiesBijInteractiesPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsActiesBijInteractiesPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsActiesBijInteractiesPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsActiesBijInteractiesQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsActiesBijInteractiesPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsActiesBijInteractiesPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsActiesBijInteractiesPeer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @return GsActiesBijInteractiesQuery The current query, for fluid interface
     */
    public function filterByInteractiewaarschuwingCode($interactiewaarschuwingCode = null, $comparison = null)
    {
        if (is_array($interactiewaarschuwingCode)) {
            $useMinMax = false;
            if (isset($interactiewaarschuwingCode['min'])) {
                $this->addUsingAlias(GsActiesBijInteractiesPeer::INTERACTIEWAARSCHUWING_CODE, $interactiewaarschuwingCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($interactiewaarschuwingCode['max'])) {
                $this->addUsingAlias(GsActiesBijInteractiesPeer::INTERACTIEWAARSCHUWING_CODE, $interactiewaarschuwingCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsActiesBijInteractiesPeer::INTERACTIEWAARSCHUWING_CODE, $interactiewaarschuwingCode, $comparison);
    }

    /**
     * Filter the query on the volgnummer_actie column
     *
     * Example usage:
     * <code>
     * $query->filterByVolgnummerActie(1234); // WHERE volgnummer_actie = 1234
     * $query->filterByVolgnummerActie(array(12, 34)); // WHERE volgnummer_actie IN (12, 34)
     * $query->filterByVolgnummerActie(array('min' => 12)); // WHERE volgnummer_actie >= 12
     * $query->filterByVolgnummerActie(array('max' => 12)); // WHERE volgnummer_actie <= 12
     * </code>
     *
     * @param     mixed $volgnummerActie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsActiesBijInteractiesQuery The current query, for fluid interface
     */
    public function filterByVolgnummerActie($volgnummerActie = null, $comparison = null)
    {
        if (is_array($volgnummerActie)) {
            $useMinMax = false;
            if (isset($volgnummerActie['min'])) {
                $this->addUsingAlias(GsActiesBijInteractiesPeer::VOLGNUMMER_ACTIE, $volgnummerActie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($volgnummerActie['max'])) {
                $this->addUsingAlias(GsActiesBijInteractiesPeer::VOLGNUMMER_ACTIE, $volgnummerActie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsActiesBijInteractiesPeer::VOLGNUMMER_ACTIE, $volgnummerActie, $comparison);
    }

    /**
     * Filter the query on the acties_bij_interactiesthes_130 column
     *
     * Example usage:
     * <code>
     * $query->filterByActiesBijInteractiesthes130(1234); // WHERE acties_bij_interactiesthes_130 = 1234
     * $query->filterByActiesBijInteractiesthes130(array(12, 34)); // WHERE acties_bij_interactiesthes_130 IN (12, 34)
     * $query->filterByActiesBijInteractiesthes130(array('min' => 12)); // WHERE acties_bij_interactiesthes_130 >= 12
     * $query->filterByActiesBijInteractiesthes130(array('max' => 12)); // WHERE acties_bij_interactiesthes_130 <= 12
     * </code>
     *
     * @param     mixed $actiesBijInteractiesthes130 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsActiesBijInteractiesQuery The current query, for fluid interface
     */
    public function filterByActiesBijInteractiesthes130($actiesBijInteractiesthes130 = null, $comparison = null)
    {
        if (is_array($actiesBijInteractiesthes130)) {
            $useMinMax = false;
            if (isset($actiesBijInteractiesthes130['min'])) {
                $this->addUsingAlias(GsActiesBijInteractiesPeer::ACTIES_BIJ_INTERACTIESTHES_130, $actiesBijInteractiesthes130['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actiesBijInteractiesthes130['max'])) {
                $this->addUsingAlias(GsActiesBijInteractiesPeer::ACTIES_BIJ_INTERACTIESTHES_130, $actiesBijInteractiesthes130['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsActiesBijInteractiesPeer::ACTIES_BIJ_INTERACTIESTHES_130, $actiesBijInteractiesthes130, $comparison);
    }

    /**
     * Filter the query on the actie_bij_interactie column
     *
     * Example usage:
     * <code>
     * $query->filterByActieBijInteractie(1234); // WHERE actie_bij_interactie = 1234
     * $query->filterByActieBijInteractie(array(12, 34)); // WHERE actie_bij_interactie IN (12, 34)
     * $query->filterByActieBijInteractie(array('min' => 12)); // WHERE actie_bij_interactie >= 12
     * $query->filterByActieBijInteractie(array('max' => 12)); // WHERE actie_bij_interactie <= 12
     * </code>
     *
     * @param     mixed $actieBijInteractie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsActiesBijInteractiesQuery The current query, for fluid interface
     */
    public function filterByActieBijInteractie($actieBijInteractie = null, $comparison = null)
    {
        if (is_array($actieBijInteractie)) {
            $useMinMax = false;
            if (isset($actieBijInteractie['min'])) {
                $this->addUsingAlias(GsActiesBijInteractiesPeer::ACTIE_BIJ_INTERACTIE, $actieBijInteractie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actieBijInteractie['max'])) {
                $this->addUsingAlias(GsActiesBijInteractiesPeer::ACTIE_BIJ_INTERACTIE, $actieBijInteractie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsActiesBijInteractiesPeer::ACTIE_BIJ_INTERACTIE, $actieBijInteractie, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsActiesBijInteracties $gsActiesBijInteracties Object to remove from the list of results
     *
     * @return GsActiesBijInteractiesQuery The current query, for fluid interface
     */
    public function prune($gsActiesBijInteracties = null)
    {
        if ($gsActiesBijInteracties) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsActiesBijInteractiesPeer::INTERACTIEWAARSCHUWING_CODE), $gsActiesBijInteracties->getInteractiewaarschuwingCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsActiesBijInteractiesPeer::VOLGNUMMER_ACTIE), $gsActiesBijInteracties->getVolgnummerActie(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
