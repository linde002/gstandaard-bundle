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
use PharmaIntelligence\GstandaardBundle\Model\GsDubbelmedicatieTeksten;
use PharmaIntelligence\GstandaardBundle\Model\GsDubbelmedicatieTekstenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsDubbelmedicatieTekstenQuery;

/**
 * @method GsDubbelmedicatieTekstenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsDubbelmedicatieTekstenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsDubbelmedicatieTekstenQuery orderByDubbelmedicatiecode($order = Criteria::ASC) Order by the dubbelmedicatiecode column
 * @method GsDubbelmedicatieTekstenQuery orderByTekstmodule($order = Criteria::ASC) Order by the tekstmodule column
 * @method GsDubbelmedicatieTekstenQuery orderByTekstsoort($order = Criteria::ASC) Order by the tekstsoort column
 * @method GsDubbelmedicatieTekstenQuery orderByTekstNivoKode($order = Criteria::ASC) Order by the tekst_nivo_kode column
 *
 * @method GsDubbelmedicatieTekstenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsDubbelmedicatieTekstenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsDubbelmedicatieTekstenQuery groupByDubbelmedicatiecode() Group by the dubbelmedicatiecode column
 * @method GsDubbelmedicatieTekstenQuery groupByTekstmodule() Group by the tekstmodule column
 * @method GsDubbelmedicatieTekstenQuery groupByTekstsoort() Group by the tekstsoort column
 * @method GsDubbelmedicatieTekstenQuery groupByTekstNivoKode() Group by the tekst_nivo_kode column
 *
 * @method GsDubbelmedicatieTekstenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsDubbelmedicatieTekstenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsDubbelmedicatieTekstenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsDubbelmedicatieTeksten findOne(PropelPDO $con = null) Return the first GsDubbelmedicatieTeksten matching the query
 * @method GsDubbelmedicatieTeksten findOneOrCreate(PropelPDO $con = null) Return the first GsDubbelmedicatieTeksten matching the query, or a new GsDubbelmedicatieTeksten object populated from the query conditions when no match is found
 *
 * @method GsDubbelmedicatieTeksten findOneByBestandnummer(int $bestandnummer) Return the first GsDubbelmedicatieTeksten filtered by the bestandnummer column
 * @method GsDubbelmedicatieTeksten findOneByMutatiekode(int $mutatiekode) Return the first GsDubbelmedicatieTeksten filtered by the mutatiekode column
 * @method GsDubbelmedicatieTeksten findOneByDubbelmedicatiecode(int $dubbelmedicatiecode) Return the first GsDubbelmedicatieTeksten filtered by the dubbelmedicatiecode column
 * @method GsDubbelmedicatieTeksten findOneByTekstmodule(int $tekstmodule) Return the first GsDubbelmedicatieTeksten filtered by the tekstmodule column
 * @method GsDubbelmedicatieTeksten findOneByTekstsoort(int $tekstsoort) Return the first GsDubbelmedicatieTeksten filtered by the tekstsoort column
 * @method GsDubbelmedicatieTeksten findOneByTekstNivoKode(int $tekst_nivo_kode) Return the first GsDubbelmedicatieTeksten filtered by the tekst_nivo_kode column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsDubbelmedicatieTeksten objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsDubbelmedicatieTeksten objects filtered by the mutatiekode column
 * @method array findByDubbelmedicatiecode(int $dubbelmedicatiecode) Return GsDubbelmedicatieTeksten objects filtered by the dubbelmedicatiecode column
 * @method array findByTekstmodule(int $tekstmodule) Return GsDubbelmedicatieTeksten objects filtered by the tekstmodule column
 * @method array findByTekstsoort(int $tekstsoort) Return GsDubbelmedicatieTeksten objects filtered by the tekstsoort column
 * @method array findByTekstNivoKode(int $tekst_nivo_kode) Return GsDubbelmedicatieTeksten objects filtered by the tekst_nivo_kode column
 */
abstract class BaseGsDubbelmedicatieTekstenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsDubbelmedicatieTekstenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDubbelmedicatieTeksten';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsDubbelmedicatieTekstenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsDubbelmedicatieTekstenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsDubbelmedicatieTekstenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsDubbelmedicatieTekstenQuery) {
            return $criteria;
        }
        $query = new GsDubbelmedicatieTekstenQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$dubbelmedicatiecode, $tekstsoort, $tekst_nivo_kode]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsDubbelmedicatieTeksten|GsDubbelmedicatieTeksten[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsDubbelmedicatieTekstenPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsDubbelmedicatieTekstenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsDubbelmedicatieTeksten A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `dubbelmedicatiecode`, `tekstmodule`, `tekstsoort`, `tekst_nivo_kode` FROM `gs_dubbelmedicatie_teksten` WHERE `dubbelmedicatiecode` = :p0 AND `tekstsoort` = :p1 AND `tekst_nivo_kode` = :p2';
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
            $obj = new GsDubbelmedicatieTeksten();
            $obj->hydrate($row);
            GsDubbelmedicatieTekstenPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return GsDubbelmedicatieTeksten|GsDubbelmedicatieTeksten[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsDubbelmedicatieTeksten[]|mixed the list of results, formatted by the current formatter
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
     * @return GsDubbelmedicatieTekstenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::DUBBELMEDICATIECODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::TEKSTSOORT, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::TEKST_NIVO_KODE, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsDubbelmedicatieTekstenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsDubbelmedicatieTekstenPeer::DUBBELMEDICATIECODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsDubbelmedicatieTekstenPeer::TEKSTSOORT, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsDubbelmedicatieTekstenPeer::TEKST_NIVO_KODE, $key[2], Criteria::EQUAL);
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
     * @return GsDubbelmedicatieTekstenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsDubbelmedicatieTekstenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the dubbelmedicatiecode column
     *
     * Example usage:
     * <code>
     * $query->filterByDubbelmedicatiecode(1234); // WHERE dubbelmedicatiecode = 1234
     * $query->filterByDubbelmedicatiecode(array(12, 34)); // WHERE dubbelmedicatiecode IN (12, 34)
     * $query->filterByDubbelmedicatiecode(array('min' => 12)); // WHERE dubbelmedicatiecode >= 12
     * $query->filterByDubbelmedicatiecode(array('max' => 12)); // WHERE dubbelmedicatiecode <= 12
     * </code>
     *
     * @param     mixed $dubbelmedicatiecode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDubbelmedicatieTekstenQuery The current query, for fluid interface
     */
    public function filterByDubbelmedicatiecode($dubbelmedicatiecode = null, $comparison = null)
    {
        if (is_array($dubbelmedicatiecode)) {
            $useMinMax = false;
            if (isset($dubbelmedicatiecode['min'])) {
                $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::DUBBELMEDICATIECODE, $dubbelmedicatiecode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dubbelmedicatiecode['max'])) {
                $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::DUBBELMEDICATIECODE, $dubbelmedicatiecode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::DUBBELMEDICATIECODE, $dubbelmedicatiecode, $comparison);
    }

    /**
     * Filter the query on the tekstmodule column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstmodule(1234); // WHERE tekstmodule = 1234
     * $query->filterByTekstmodule(array(12, 34)); // WHERE tekstmodule IN (12, 34)
     * $query->filterByTekstmodule(array('min' => 12)); // WHERE tekstmodule >= 12
     * $query->filterByTekstmodule(array('max' => 12)); // WHERE tekstmodule <= 12
     * </code>
     *
     * @param     mixed $tekstmodule The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDubbelmedicatieTekstenQuery The current query, for fluid interface
     */
    public function filterByTekstmodule($tekstmodule = null, $comparison = null)
    {
        if (is_array($tekstmodule)) {
            $useMinMax = false;
            if (isset($tekstmodule['min'])) {
                $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::TEKSTMODULE, $tekstmodule['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstmodule['max'])) {
                $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::TEKSTMODULE, $tekstmodule['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::TEKSTMODULE, $tekstmodule, $comparison);
    }

    /**
     * Filter the query on the tekstsoort column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstsoort(1234); // WHERE tekstsoort = 1234
     * $query->filterByTekstsoort(array(12, 34)); // WHERE tekstsoort IN (12, 34)
     * $query->filterByTekstsoort(array('min' => 12)); // WHERE tekstsoort >= 12
     * $query->filterByTekstsoort(array('max' => 12)); // WHERE tekstsoort <= 12
     * </code>
     *
     * @param     mixed $tekstsoort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDubbelmedicatieTekstenQuery The current query, for fluid interface
     */
    public function filterByTekstsoort($tekstsoort = null, $comparison = null)
    {
        if (is_array($tekstsoort)) {
            $useMinMax = false;
            if (isset($tekstsoort['min'])) {
                $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::TEKSTSOORT, $tekstsoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstsoort['max'])) {
                $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::TEKSTSOORT, $tekstsoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::TEKSTSOORT, $tekstsoort, $comparison);
    }

    /**
     * Filter the query on the tekst_nivo_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstNivoKode(1234); // WHERE tekst_nivo_kode = 1234
     * $query->filterByTekstNivoKode(array(12, 34)); // WHERE tekst_nivo_kode IN (12, 34)
     * $query->filterByTekstNivoKode(array('min' => 12)); // WHERE tekst_nivo_kode >= 12
     * $query->filterByTekstNivoKode(array('max' => 12)); // WHERE tekst_nivo_kode <= 12
     * </code>
     *
     * @param     mixed $tekstNivoKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDubbelmedicatieTekstenQuery The current query, for fluid interface
     */
    public function filterByTekstNivoKode($tekstNivoKode = null, $comparison = null)
    {
        if (is_array($tekstNivoKode)) {
            $useMinMax = false;
            if (isset($tekstNivoKode['min'])) {
                $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::TEKST_NIVO_KODE, $tekstNivoKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstNivoKode['max'])) {
                $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::TEKST_NIVO_KODE, $tekstNivoKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDubbelmedicatieTekstenPeer::TEKST_NIVO_KODE, $tekstNivoKode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsDubbelmedicatieTeksten $gsDubbelmedicatieTeksten Object to remove from the list of results
     *
     * @return GsDubbelmedicatieTekstenQuery The current query, for fluid interface
     */
    public function prune($gsDubbelmedicatieTeksten = null)
    {
        if ($gsDubbelmedicatieTeksten) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsDubbelmedicatieTekstenPeer::DUBBELMEDICATIECODE), $gsDubbelmedicatieTeksten->getDubbelmedicatiecode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsDubbelmedicatieTekstenPeer::TEKSTSOORT), $gsDubbelmedicatieTeksten->getTekstsoort(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsDubbelmedicatieTekstenPeer::TEKST_NIVO_KODE), $gsDubbelmedicatieTeksten->getTekstNivoKode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
