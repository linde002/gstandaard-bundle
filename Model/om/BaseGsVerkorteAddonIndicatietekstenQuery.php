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
use PharmaIntelligence\GstandaardBundle\Model\GsVerkorteAddonIndicatieteksten;
use PharmaIntelligence\GstandaardBundle\Model\GsVerkorteAddonIndicatietekstenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsVerkorteAddonIndicatietekstenQuery;

/**
 * @method GsVerkorteAddonIndicatietekstenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsVerkorteAddonIndicatietekstenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsVerkorteAddonIndicatietekstenQuery orderByIndicatieId($order = Criteria::ASC) Order by the indicatie_id column
 * @method GsVerkorteAddonIndicatietekstenQuery orderByVerkorteIndicatie($order = Criteria::ASC) Order by the verkorte_indicatie column
 * @method GsVerkorteAddonIndicatietekstenQuery orderByTekstmoduleIndicatie($order = Criteria::ASC) Order by the tekstmodule_indicatie column
 *
 * @method GsVerkorteAddonIndicatietekstenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsVerkorteAddonIndicatietekstenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsVerkorteAddonIndicatietekstenQuery groupByIndicatieId() Group by the indicatie_id column
 * @method GsVerkorteAddonIndicatietekstenQuery groupByVerkorteIndicatie() Group by the verkorte_indicatie column
 * @method GsVerkorteAddonIndicatietekstenQuery groupByTekstmoduleIndicatie() Group by the tekstmodule_indicatie column
 *
 * @method GsVerkorteAddonIndicatietekstenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsVerkorteAddonIndicatietekstenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsVerkorteAddonIndicatietekstenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsVerkorteAddonIndicatieteksten findOne(PropelPDO $con = null) Return the first GsVerkorteAddonIndicatieteksten matching the query
 * @method GsVerkorteAddonIndicatieteksten findOneOrCreate(PropelPDO $con = null) Return the first GsVerkorteAddonIndicatieteksten matching the query, or a new GsVerkorteAddonIndicatieteksten object populated from the query conditions when no match is found
 *
 * @method GsVerkorteAddonIndicatieteksten findOneByBestandnummer(int $bestandnummer) Return the first GsVerkorteAddonIndicatieteksten filtered by the bestandnummer column
 * @method GsVerkorteAddonIndicatieteksten findOneByMutatiekode(int $mutatiekode) Return the first GsVerkorteAddonIndicatieteksten filtered by the mutatiekode column
 * @method GsVerkorteAddonIndicatieteksten findOneByVerkorteIndicatie(string $verkorte_indicatie) Return the first GsVerkorteAddonIndicatieteksten filtered by the verkorte_indicatie column
 * @method GsVerkorteAddonIndicatieteksten findOneByTekstmoduleIndicatie(int $tekstmodule_indicatie) Return the first GsVerkorteAddonIndicatieteksten filtered by the tekstmodule_indicatie column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsVerkorteAddonIndicatieteksten objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsVerkorteAddonIndicatieteksten objects filtered by the mutatiekode column
 * @method array findByIndicatieId(int $indicatie_id) Return GsVerkorteAddonIndicatieteksten objects filtered by the indicatie_id column
 * @method array findByVerkorteIndicatie(string $verkorte_indicatie) Return GsVerkorteAddonIndicatieteksten objects filtered by the verkorte_indicatie column
 * @method array findByTekstmoduleIndicatie(int $tekstmodule_indicatie) Return GsVerkorteAddonIndicatieteksten objects filtered by the tekstmodule_indicatie column
 */
abstract class BaseGsVerkorteAddonIndicatietekstenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsVerkorteAddonIndicatietekstenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVerkorteAddonIndicatieteksten';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsVerkorteAddonIndicatietekstenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsVerkorteAddonIndicatietekstenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsVerkorteAddonIndicatietekstenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsVerkorteAddonIndicatietekstenQuery) {
            return $criteria;
        }
        $query = new GsVerkorteAddonIndicatietekstenQuery(null, null, $modelAlias);

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
     * @return   GsVerkorteAddonIndicatieteksten|GsVerkorteAddonIndicatieteksten[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsVerkorteAddonIndicatietekstenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsVerkorteAddonIndicatietekstenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsVerkorteAddonIndicatieteksten A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIndicatieId($key, $con = null)
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
     * @return                 GsVerkorteAddonIndicatieteksten A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `indicatie_id`, `verkorte_indicatie`, `tekstmodule_indicatie` FROM `gs_verkorte_addon_indicatieteksten` WHERE `indicatie_id` = :p0';
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
            $obj = new GsVerkorteAddonIndicatieteksten();
            $obj->hydrate($row);
            GsVerkorteAddonIndicatietekstenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsVerkorteAddonIndicatieteksten|GsVerkorteAddonIndicatieteksten[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsVerkorteAddonIndicatieteksten[]|mixed the list of results, formatted by the current formatter
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
     * @return GsVerkorteAddonIndicatietekstenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsVerkorteAddonIndicatietekstenPeer::INDICATIE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsVerkorteAddonIndicatietekstenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsVerkorteAddonIndicatietekstenPeer::INDICATIE_ID, $keys, Criteria::IN);
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
     * @return GsVerkorteAddonIndicatietekstenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsVerkorteAddonIndicatietekstenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsVerkorteAddonIndicatietekstenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerkorteAddonIndicatietekstenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsVerkorteAddonIndicatietekstenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsVerkorteAddonIndicatietekstenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsVerkorteAddonIndicatietekstenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerkorteAddonIndicatietekstenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the indicatie_id column
     *
     * Example usage:
     * <code>
     * $query->filterByIndicatieId(1234); // WHERE indicatie_id = 1234
     * $query->filterByIndicatieId(array(12, 34)); // WHERE indicatie_id IN (12, 34)
     * $query->filterByIndicatieId(array('min' => 12)); // WHERE indicatie_id >= 12
     * $query->filterByIndicatieId(array('max' => 12)); // WHERE indicatie_id <= 12
     * </code>
     *
     * @param     mixed $indicatieId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerkorteAddonIndicatietekstenQuery The current query, for fluid interface
     */
    public function filterByIndicatieId($indicatieId = null, $comparison = null)
    {
        if (is_array($indicatieId)) {
            $useMinMax = false;
            if (isset($indicatieId['min'])) {
                $this->addUsingAlias(GsVerkorteAddonIndicatietekstenPeer::INDICATIE_ID, $indicatieId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indicatieId['max'])) {
                $this->addUsingAlias(GsVerkorteAddonIndicatietekstenPeer::INDICATIE_ID, $indicatieId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerkorteAddonIndicatietekstenPeer::INDICATIE_ID, $indicatieId, $comparison);
    }

    /**
     * Filter the query on the verkorte_indicatie column
     *
     * Example usage:
     * <code>
     * $query->filterByVerkorteIndicatie('fooValue');   // WHERE verkorte_indicatie = 'fooValue'
     * $query->filterByVerkorteIndicatie('%fooValue%'); // WHERE verkorte_indicatie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verkorteIndicatie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerkorteAddonIndicatietekstenQuery The current query, for fluid interface
     */
    public function filterByVerkorteIndicatie($verkorteIndicatie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verkorteIndicatie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $verkorteIndicatie)) {
                $verkorteIndicatie = str_replace('*', '%', $verkorteIndicatie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsVerkorteAddonIndicatietekstenPeer::VERKORTE_INDICATIE, $verkorteIndicatie, $comparison);
    }

    /**
     * Filter the query on the tekstmodule_indicatie column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstmoduleIndicatie(1234); // WHERE tekstmodule_indicatie = 1234
     * $query->filterByTekstmoduleIndicatie(array(12, 34)); // WHERE tekstmodule_indicatie IN (12, 34)
     * $query->filterByTekstmoduleIndicatie(array('min' => 12)); // WHERE tekstmodule_indicatie >= 12
     * $query->filterByTekstmoduleIndicatie(array('max' => 12)); // WHERE tekstmodule_indicatie <= 12
     * </code>
     *
     * @param     mixed $tekstmoduleIndicatie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVerkorteAddonIndicatietekstenQuery The current query, for fluid interface
     */
    public function filterByTekstmoduleIndicatie($tekstmoduleIndicatie = null, $comparison = null)
    {
        if (is_array($tekstmoduleIndicatie)) {
            $useMinMax = false;
            if (isset($tekstmoduleIndicatie['min'])) {
                $this->addUsingAlias(GsVerkorteAddonIndicatietekstenPeer::TEKSTMODULE_INDICATIE, $tekstmoduleIndicatie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstmoduleIndicatie['max'])) {
                $this->addUsingAlias(GsVerkorteAddonIndicatietekstenPeer::TEKSTMODULE_INDICATIE, $tekstmoduleIndicatie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVerkorteAddonIndicatietekstenPeer::TEKSTMODULE_INDICATIE, $tekstmoduleIndicatie, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsVerkorteAddonIndicatieteksten $gsVerkorteAddonIndicatieteksten Object to remove from the list of results
     *
     * @return GsVerkorteAddonIndicatietekstenQuery The current query, for fluid interface
     */
    public function prune($gsVerkorteAddonIndicatieteksten = null)
    {
        if ($gsVerkorteAddonIndicatieteksten) {
            $this->addUsingAlias(GsVerkorteAddonIndicatietekstenPeer::INDICATIE_ID, $gsVerkorteAddonIndicatieteksten->getIndicatieId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
