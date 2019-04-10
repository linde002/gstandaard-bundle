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
use PharmaIntelligence\GstandaardBundle\Model\GsOngewensteGroepen;
use PharmaIntelligence\GstandaardBundle\Model\GsOngewensteGroepenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsOngewensteGroepenQuery;

/**
 * @method GsOngewensteGroepenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsOngewensteGroepenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsOngewensteGroepenQuery orderByPrkcode($order = Criteria::ASC) Order by the prkcode column
 * @method GsOngewensteGroepenQuery orderByHandelsproduktkode($order = Criteria::ASC) Order by the handelsproduktkode column
 * @method GsOngewensteGroepenQuery orderByThesnrOngewensteGroepen($order = Criteria::ASC) Order by the thesnr_ongewenste_groepen column
 * @method GsOngewensteGroepenQuery orderByNummerVanOngewensteGroep($order = Criteria::ASC) Order by the nummer_van_ongewenste_groep column
 *
 * @method GsOngewensteGroepenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsOngewensteGroepenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsOngewensteGroepenQuery groupByPrkcode() Group by the prkcode column
 * @method GsOngewensteGroepenQuery groupByHandelsproduktkode() Group by the handelsproduktkode column
 * @method GsOngewensteGroepenQuery groupByThesnrOngewensteGroepen() Group by the thesnr_ongewenste_groepen column
 * @method GsOngewensteGroepenQuery groupByNummerVanOngewensteGroep() Group by the nummer_van_ongewenste_groep column
 *
 * @method GsOngewensteGroepenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsOngewensteGroepenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsOngewensteGroepenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsOngewensteGroepen findOne(PropelPDO $con = null) Return the first GsOngewensteGroepen matching the query
 * @method GsOngewensteGroepen findOneOrCreate(PropelPDO $con = null) Return the first GsOngewensteGroepen matching the query, or a new GsOngewensteGroepen object populated from the query conditions when no match is found
 *
 * @method GsOngewensteGroepen findOneByBestandnummer(int $bestandnummer) Return the first GsOngewensteGroepen filtered by the bestandnummer column
 * @method GsOngewensteGroepen findOneByMutatiekode(int $mutatiekode) Return the first GsOngewensteGroepen filtered by the mutatiekode column
 * @method GsOngewensteGroepen findOneByPrkcode(int $prkcode) Return the first GsOngewensteGroepen filtered by the prkcode column
 * @method GsOngewensteGroepen findOneByHandelsproduktkode(int $handelsproduktkode) Return the first GsOngewensteGroepen filtered by the handelsproduktkode column
 * @method GsOngewensteGroepen findOneByThesnrOngewensteGroepen(int $thesnr_ongewenste_groepen) Return the first GsOngewensteGroepen filtered by the thesnr_ongewenste_groepen column
 * @method GsOngewensteGroepen findOneByNummerVanOngewensteGroep(int $nummer_van_ongewenste_groep) Return the first GsOngewensteGroepen filtered by the nummer_van_ongewenste_groep column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsOngewensteGroepen objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsOngewensteGroepen objects filtered by the mutatiekode column
 * @method array findByPrkcode(int $prkcode) Return GsOngewensteGroepen objects filtered by the prkcode column
 * @method array findByHandelsproduktkode(int $handelsproduktkode) Return GsOngewensteGroepen objects filtered by the handelsproduktkode column
 * @method array findByThesnrOngewensteGroepen(int $thesnr_ongewenste_groepen) Return GsOngewensteGroepen objects filtered by the thesnr_ongewenste_groepen column
 * @method array findByNummerVanOngewensteGroep(int $nummer_van_ongewenste_groep) Return GsOngewensteGroepen objects filtered by the nummer_van_ongewenste_groep column
 */
abstract class BaseGsOngewensteGroepenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsOngewensteGroepenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsOngewensteGroepen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsOngewensteGroepenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsOngewensteGroepenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsOngewensteGroepenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsOngewensteGroepenQuery) {
            return $criteria;
        }
        $query = new GsOngewensteGroepenQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$prkcode, $handelsproduktkode, $nummer_van_ongewenste_groep]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsOngewensteGroepen|GsOngewensteGroepen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsOngewensteGroepenPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsOngewensteGroepenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsOngewensteGroepen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `prkcode`, `handelsproduktkode`, `thesnr_ongewenste_groepen`, `nummer_van_ongewenste_groep` FROM `gs_ongewenste_groepen` WHERE `prkcode` = :p0 AND `handelsproduktkode` = :p1 AND `nummer_van_ongewenste_groep` = :p2';
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
            $obj = new GsOngewensteGroepen();
            $obj->hydrate($row);
            GsOngewensteGroepenPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return GsOngewensteGroepen|GsOngewensteGroepen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsOngewensteGroepen[]|mixed the list of results, formatted by the current formatter
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
     * @return GsOngewensteGroepenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsOngewensteGroepenPeer::PRKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsOngewensteGroepenPeer::HANDELSPRODUKTKODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsOngewensteGroepenPeer::NUMMER_VAN_ONGEWENSTE_GROEP, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsOngewensteGroepenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsOngewensteGroepenPeer::PRKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsOngewensteGroepenPeer::HANDELSPRODUKTKODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsOngewensteGroepenPeer::NUMMER_VAN_ONGEWENSTE_GROEP, $key[2], Criteria::EQUAL);
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
     * @return GsOngewensteGroepenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsOngewensteGroepenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsOngewensteGroepenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsOngewensteGroepenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsOngewensteGroepenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsOngewensteGroepenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsOngewensteGroepenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsOngewensteGroepenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the prkcode column
     *
     * Example usage:
     * <code>
     * $query->filterByPrkcode(1234); // WHERE prkcode = 1234
     * $query->filterByPrkcode(array(12, 34)); // WHERE prkcode IN (12, 34)
     * $query->filterByPrkcode(array('min' => 12)); // WHERE prkcode >= 12
     * $query->filterByPrkcode(array('max' => 12)); // WHERE prkcode <= 12
     * </code>
     *
     * @param     mixed $prkcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsOngewensteGroepenQuery The current query, for fluid interface
     */
    public function filterByPrkcode($prkcode = null, $comparison = null)
    {
        if (is_array($prkcode)) {
            $useMinMax = false;
            if (isset($prkcode['min'])) {
                $this->addUsingAlias(GsOngewensteGroepenPeer::PRKCODE, $prkcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prkcode['max'])) {
                $this->addUsingAlias(GsOngewensteGroepenPeer::PRKCODE, $prkcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsOngewensteGroepenPeer::PRKCODE, $prkcode, $comparison);
    }

    /**
     * Filter the query on the handelsproduktkode column
     *
     * Example usage:
     * <code>
     * $query->filterByHandelsproduktkode(1234); // WHERE handelsproduktkode = 1234
     * $query->filterByHandelsproduktkode(array(12, 34)); // WHERE handelsproduktkode IN (12, 34)
     * $query->filterByHandelsproduktkode(array('min' => 12)); // WHERE handelsproduktkode >= 12
     * $query->filterByHandelsproduktkode(array('max' => 12)); // WHERE handelsproduktkode <= 12
     * </code>
     *
     * @param     mixed $handelsproduktkode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsOngewensteGroepenQuery The current query, for fluid interface
     */
    public function filterByHandelsproduktkode($handelsproduktkode = null, $comparison = null)
    {
        if (is_array($handelsproduktkode)) {
            $useMinMax = false;
            if (isset($handelsproduktkode['min'])) {
                $this->addUsingAlias(GsOngewensteGroepenPeer::HANDELSPRODUKTKODE, $handelsproduktkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($handelsproduktkode['max'])) {
                $this->addUsingAlias(GsOngewensteGroepenPeer::HANDELSPRODUKTKODE, $handelsproduktkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsOngewensteGroepenPeer::HANDELSPRODUKTKODE, $handelsproduktkode, $comparison);
    }

    /**
     * Filter the query on the thesnr_ongewenste_groepen column
     *
     * Example usage:
     * <code>
     * $query->filterByThesnrOngewensteGroepen(1234); // WHERE thesnr_ongewenste_groepen = 1234
     * $query->filterByThesnrOngewensteGroepen(array(12, 34)); // WHERE thesnr_ongewenste_groepen IN (12, 34)
     * $query->filterByThesnrOngewensteGroepen(array('min' => 12)); // WHERE thesnr_ongewenste_groepen >= 12
     * $query->filterByThesnrOngewensteGroepen(array('max' => 12)); // WHERE thesnr_ongewenste_groepen <= 12
     * </code>
     *
     * @param     mixed $thesnrOngewensteGroepen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsOngewensteGroepenQuery The current query, for fluid interface
     */
    public function filterByThesnrOngewensteGroepen($thesnrOngewensteGroepen = null, $comparison = null)
    {
        if (is_array($thesnrOngewensteGroepen)) {
            $useMinMax = false;
            if (isset($thesnrOngewensteGroepen['min'])) {
                $this->addUsingAlias(GsOngewensteGroepenPeer::THESNR_ONGEWENSTE_GROEPEN, $thesnrOngewensteGroepen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesnrOngewensteGroepen['max'])) {
                $this->addUsingAlias(GsOngewensteGroepenPeer::THESNR_ONGEWENSTE_GROEPEN, $thesnrOngewensteGroepen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsOngewensteGroepenPeer::THESNR_ONGEWENSTE_GROEPEN, $thesnrOngewensteGroepen, $comparison);
    }

    /**
     * Filter the query on the nummer_van_ongewenste_groep column
     *
     * Example usage:
     * <code>
     * $query->filterByNummerVanOngewensteGroep(1234); // WHERE nummer_van_ongewenste_groep = 1234
     * $query->filterByNummerVanOngewensteGroep(array(12, 34)); // WHERE nummer_van_ongewenste_groep IN (12, 34)
     * $query->filterByNummerVanOngewensteGroep(array('min' => 12)); // WHERE nummer_van_ongewenste_groep >= 12
     * $query->filterByNummerVanOngewensteGroep(array('max' => 12)); // WHERE nummer_van_ongewenste_groep <= 12
     * </code>
     *
     * @param     mixed $nummerVanOngewensteGroep The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsOngewensteGroepenQuery The current query, for fluid interface
     */
    public function filterByNummerVanOngewensteGroep($nummerVanOngewensteGroep = null, $comparison = null)
    {
        if (is_array($nummerVanOngewensteGroep)) {
            $useMinMax = false;
            if (isset($nummerVanOngewensteGroep['min'])) {
                $this->addUsingAlias(GsOngewensteGroepenPeer::NUMMER_VAN_ONGEWENSTE_GROEP, $nummerVanOngewensteGroep['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nummerVanOngewensteGroep['max'])) {
                $this->addUsingAlias(GsOngewensteGroepenPeer::NUMMER_VAN_ONGEWENSTE_GROEP, $nummerVanOngewensteGroep['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsOngewensteGroepenPeer::NUMMER_VAN_ONGEWENSTE_GROEP, $nummerVanOngewensteGroep, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsOngewensteGroepen $gsOngewensteGroepen Object to remove from the list of results
     *
     * @return GsOngewensteGroepenQuery The current query, for fluid interface
     */
    public function prune($gsOngewensteGroepen = null)
    {
        if ($gsOngewensteGroepen) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsOngewensteGroepenPeer::PRKCODE), $gsOngewensteGroepen->getPrkcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsOngewensteGroepenPeer::HANDELSPRODUKTKODE), $gsOngewensteGroepen->getHandelsproduktkode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsOngewensteGroepenPeer::NUMMER_VAN_ONGEWENSTE_GROEP), $gsOngewensteGroepen->getNummerVanOngewensteGroep(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
