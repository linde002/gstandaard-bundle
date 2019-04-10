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
use PharmaIntelligence\GstandaardBundle\Model\GsTeksten;
use PharmaIntelligence\GstandaardBundle\Model\GsTekstenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsTekstenQuery;

/**
 * @method GsTekstenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsTekstenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsTekstenQuery orderByTekstmodulethesaurus103($order = Criteria::ASC) Order by the tekstmodulethesaurus_103 column
 * @method GsTekstenQuery orderByTekstmodule($order = Criteria::ASC) Order by the tekstmodule column
 * @method GsTekstenQuery orderByTekstNivoKode($order = Criteria::ASC) Order by the tekst_nivo_kode column
 * @method GsTekstenQuery orderByTekstsoortthesaurus104($order = Criteria::ASC) Order by the tekstsoortthesaurus_104 column
 * @method GsTekstenQuery orderByTekstsoort($order = Criteria::ASC) Order by the tekstsoort column
 * @method GsTekstenQuery orderByTekstregelnummer($order = Criteria::ASC) Order by the tekstregelnummer column
 * @method GsTekstenQuery orderByTekst($order = Criteria::ASC) Order by the tekst column
 *
 * @method GsTekstenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsTekstenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsTekstenQuery groupByTekstmodulethesaurus103() Group by the tekstmodulethesaurus_103 column
 * @method GsTekstenQuery groupByTekstmodule() Group by the tekstmodule column
 * @method GsTekstenQuery groupByTekstNivoKode() Group by the tekst_nivo_kode column
 * @method GsTekstenQuery groupByTekstsoortthesaurus104() Group by the tekstsoortthesaurus_104 column
 * @method GsTekstenQuery groupByTekstsoort() Group by the tekstsoort column
 * @method GsTekstenQuery groupByTekstregelnummer() Group by the tekstregelnummer column
 * @method GsTekstenQuery groupByTekst() Group by the tekst column
 *
 * @method GsTekstenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsTekstenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsTekstenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsTeksten findOne(PropelPDO $con = null) Return the first GsTeksten matching the query
 * @method GsTeksten findOneOrCreate(PropelPDO $con = null) Return the first GsTeksten matching the query, or a new GsTeksten object populated from the query conditions when no match is found
 *
 * @method GsTeksten findOneByBestandnummer(int $bestandnummer) Return the first GsTeksten filtered by the bestandnummer column
 * @method GsTeksten findOneByMutatiekode(int $mutatiekode) Return the first GsTeksten filtered by the mutatiekode column
 * @method GsTeksten findOneByTekstmodulethesaurus103(int $tekstmodulethesaurus_103) Return the first GsTeksten filtered by the tekstmodulethesaurus_103 column
 * @method GsTeksten findOneByTekstmodule(int $tekstmodule) Return the first GsTeksten filtered by the tekstmodule column
 * @method GsTeksten findOneByTekstNivoKode(int $tekst_nivo_kode) Return the first GsTeksten filtered by the tekst_nivo_kode column
 * @method GsTeksten findOneByTekstsoortthesaurus104(int $tekstsoortthesaurus_104) Return the first GsTeksten filtered by the tekstsoortthesaurus_104 column
 * @method GsTeksten findOneByTekstsoort(int $tekstsoort) Return the first GsTeksten filtered by the tekstsoort column
 * @method GsTeksten findOneByTekstregelnummer(int $tekstregelnummer) Return the first GsTeksten filtered by the tekstregelnummer column
 * @method GsTeksten findOneByTekst(string $tekst) Return the first GsTeksten filtered by the tekst column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsTeksten objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsTeksten objects filtered by the mutatiekode column
 * @method array findByTekstmodulethesaurus103(int $tekstmodulethesaurus_103) Return GsTeksten objects filtered by the tekstmodulethesaurus_103 column
 * @method array findByTekstmodule(int $tekstmodule) Return GsTeksten objects filtered by the tekstmodule column
 * @method array findByTekstNivoKode(int $tekst_nivo_kode) Return GsTeksten objects filtered by the tekst_nivo_kode column
 * @method array findByTekstsoortthesaurus104(int $tekstsoortthesaurus_104) Return GsTeksten objects filtered by the tekstsoortthesaurus_104 column
 * @method array findByTekstsoort(int $tekstsoort) Return GsTeksten objects filtered by the tekstsoort column
 * @method array findByTekstregelnummer(int $tekstregelnummer) Return GsTeksten objects filtered by the tekstregelnummer column
 * @method array findByTekst(string $tekst) Return GsTeksten objects filtered by the tekst column
 */
abstract class BaseGsTekstenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsTekstenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsTeksten';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsTekstenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsTekstenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsTekstenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsTekstenQuery) {
            return $criteria;
        }
        $query = new GsTekstenQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56, 78), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$tekstmodule, $tekst_nivo_kode, $tekstsoort, $tekstregelnummer]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsTeksten|GsTeksten[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsTekstenPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsTekstenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsTeksten A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `tekstmodulethesaurus_103`, `tekstmodule`, `tekst_nivo_kode`, `tekstsoortthesaurus_104`, `tekstsoort`, `tekstregelnummer`, `tekst` FROM `gs_teksten` WHERE `tekstmodule` = :p0 AND `tekst_nivo_kode` = :p1 AND `tekstsoort` = :p2 AND `tekstregelnummer` = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsTeksten();
            $obj->hydrate($row);
            GsTekstenPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3])));
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
     * @return GsTeksten|GsTeksten[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsTeksten[]|mixed the list of results, formatted by the current formatter
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
     * @return GsTekstenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsTekstenPeer::TEKSTMODULE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsTekstenPeer::TEKST_NIVO_KODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsTekstenPeer::TEKSTSOORT, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(GsTekstenPeer::TEKSTREGELNUMMER, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsTekstenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsTekstenPeer::TEKSTMODULE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsTekstenPeer::TEKST_NIVO_KODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsTekstenPeer::TEKSTSOORT, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(GsTekstenPeer::TEKSTREGELNUMMER, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
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
     * @return GsTekstenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsTekstenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsTekstenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsTekstenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsTekstenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsTekstenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the tekstmodulethesaurus_103 column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstmodulethesaurus103(1234); // WHERE tekstmodulethesaurus_103 = 1234
     * $query->filterByTekstmodulethesaurus103(array(12, 34)); // WHERE tekstmodulethesaurus_103 IN (12, 34)
     * $query->filterByTekstmodulethesaurus103(array('min' => 12)); // WHERE tekstmodulethesaurus_103 >= 12
     * $query->filterByTekstmodulethesaurus103(array('max' => 12)); // WHERE tekstmodulethesaurus_103 <= 12
     * </code>
     *
     * @param     mixed $tekstmodulethesaurus103 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsTekstenQuery The current query, for fluid interface
     */
    public function filterByTekstmodulethesaurus103($tekstmodulethesaurus103 = null, $comparison = null)
    {
        if (is_array($tekstmodulethesaurus103)) {
            $useMinMax = false;
            if (isset($tekstmodulethesaurus103['min'])) {
                $this->addUsingAlias(GsTekstenPeer::TEKSTMODULETHESAURUS_103, $tekstmodulethesaurus103['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstmodulethesaurus103['max'])) {
                $this->addUsingAlias(GsTekstenPeer::TEKSTMODULETHESAURUS_103, $tekstmodulethesaurus103['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstenPeer::TEKSTMODULETHESAURUS_103, $tekstmodulethesaurus103, $comparison);
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
     * @return GsTekstenQuery The current query, for fluid interface
     */
    public function filterByTekstmodule($tekstmodule = null, $comparison = null)
    {
        if (is_array($tekstmodule)) {
            $useMinMax = false;
            if (isset($tekstmodule['min'])) {
                $this->addUsingAlias(GsTekstenPeer::TEKSTMODULE, $tekstmodule['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstmodule['max'])) {
                $this->addUsingAlias(GsTekstenPeer::TEKSTMODULE, $tekstmodule['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstenPeer::TEKSTMODULE, $tekstmodule, $comparison);
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
     * @return GsTekstenQuery The current query, for fluid interface
     */
    public function filterByTekstNivoKode($tekstNivoKode = null, $comparison = null)
    {
        if (is_array($tekstNivoKode)) {
            $useMinMax = false;
            if (isset($tekstNivoKode['min'])) {
                $this->addUsingAlias(GsTekstenPeer::TEKST_NIVO_KODE, $tekstNivoKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstNivoKode['max'])) {
                $this->addUsingAlias(GsTekstenPeer::TEKST_NIVO_KODE, $tekstNivoKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstenPeer::TEKST_NIVO_KODE, $tekstNivoKode, $comparison);
    }

    /**
     * Filter the query on the tekstsoortthesaurus_104 column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstsoortthesaurus104(1234); // WHERE tekstsoortthesaurus_104 = 1234
     * $query->filterByTekstsoortthesaurus104(array(12, 34)); // WHERE tekstsoortthesaurus_104 IN (12, 34)
     * $query->filterByTekstsoortthesaurus104(array('min' => 12)); // WHERE tekstsoortthesaurus_104 >= 12
     * $query->filterByTekstsoortthesaurus104(array('max' => 12)); // WHERE tekstsoortthesaurus_104 <= 12
     * </code>
     *
     * @param     mixed $tekstsoortthesaurus104 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsTekstenQuery The current query, for fluid interface
     */
    public function filterByTekstsoortthesaurus104($tekstsoortthesaurus104 = null, $comparison = null)
    {
        if (is_array($tekstsoortthesaurus104)) {
            $useMinMax = false;
            if (isset($tekstsoortthesaurus104['min'])) {
                $this->addUsingAlias(GsTekstenPeer::TEKSTSOORTTHESAURUS_104, $tekstsoortthesaurus104['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstsoortthesaurus104['max'])) {
                $this->addUsingAlias(GsTekstenPeer::TEKSTSOORTTHESAURUS_104, $tekstsoortthesaurus104['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstenPeer::TEKSTSOORTTHESAURUS_104, $tekstsoortthesaurus104, $comparison);
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
     * @return GsTekstenQuery The current query, for fluid interface
     */
    public function filterByTekstsoort($tekstsoort = null, $comparison = null)
    {
        if (is_array($tekstsoort)) {
            $useMinMax = false;
            if (isset($tekstsoort['min'])) {
                $this->addUsingAlias(GsTekstenPeer::TEKSTSOORT, $tekstsoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstsoort['max'])) {
                $this->addUsingAlias(GsTekstenPeer::TEKSTSOORT, $tekstsoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstenPeer::TEKSTSOORT, $tekstsoort, $comparison);
    }

    /**
     * Filter the query on the tekstregelnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstregelnummer(1234); // WHERE tekstregelnummer = 1234
     * $query->filterByTekstregelnummer(array(12, 34)); // WHERE tekstregelnummer IN (12, 34)
     * $query->filterByTekstregelnummer(array('min' => 12)); // WHERE tekstregelnummer >= 12
     * $query->filterByTekstregelnummer(array('max' => 12)); // WHERE tekstregelnummer <= 12
     * </code>
     *
     * @param     mixed $tekstregelnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsTekstenQuery The current query, for fluid interface
     */
    public function filterByTekstregelnummer($tekstregelnummer = null, $comparison = null)
    {
        if (is_array($tekstregelnummer)) {
            $useMinMax = false;
            if (isset($tekstregelnummer['min'])) {
                $this->addUsingAlias(GsTekstenPeer::TEKSTREGELNUMMER, $tekstregelnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstregelnummer['max'])) {
                $this->addUsingAlias(GsTekstenPeer::TEKSTREGELNUMMER, $tekstregelnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstenPeer::TEKSTREGELNUMMER, $tekstregelnummer, $comparison);
    }

    /**
     * Filter the query on the tekst column
     *
     * Example usage:
     * <code>
     * $query->filterByTekst('fooValue');   // WHERE tekst = 'fooValue'
     * $query->filterByTekst('%fooValue%'); // WHERE tekst LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tekst The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsTekstenQuery The current query, for fluid interface
     */
    public function filterByTekst($tekst = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tekst)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tekst)) {
                $tekst = str_replace('*', '%', $tekst);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsTekstenPeer::TEKST, $tekst, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsTeksten $gsTeksten Object to remove from the list of results
     *
     * @return GsTekstenQuery The current query, for fluid interface
     */
    public function prune($gsTeksten = null)
    {
        if ($gsTeksten) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsTekstenPeer::TEKSTMODULE), $gsTeksten->getTekstmodule(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsTekstenPeer::TEKST_NIVO_KODE), $gsTeksten->getTekstNivoKode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsTekstenPeer::TEKSTSOORT), $gsTeksten->getTekstsoort(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(GsTekstenPeer::TEKSTREGELNUMMER), $gsTeksten->getTekstregelnummer(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
