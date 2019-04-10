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
use PharmaIntelligence\GstandaardBundle\Model\GsBpercategorieTabel;
use PharmaIntelligence\GstandaardBundle\Model\GsBpercategorieTabelPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsBpercategorieTabelQuery;

/**
 * @method GsBpercategorieTabelQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsBpercategorieTabelQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsBpercategorieTabelQuery orderByUniekNummerPerTekstcategorie($order = Criteria::ASC) Order by the uniek_nummer_per_tekstcategorie column
 * @method GsBpercategorieTabelQuery orderByUniekNummerAanvullendeTekst($order = Criteria::ASC) Order by the uniek_nummer_aanvullende_tekst column
 *
 * @method GsBpercategorieTabelQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsBpercategorieTabelQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsBpercategorieTabelQuery groupByUniekNummerPerTekstcategorie() Group by the uniek_nummer_per_tekstcategorie column
 * @method GsBpercategorieTabelQuery groupByUniekNummerAanvullendeTekst() Group by the uniek_nummer_aanvullende_tekst column
 *
 * @method GsBpercategorieTabelQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsBpercategorieTabelQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsBpercategorieTabelQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsBpercategorieTabel findOne(PropelPDO $con = null) Return the first GsBpercategorieTabel matching the query
 * @method GsBpercategorieTabel findOneOrCreate(PropelPDO $con = null) Return the first GsBpercategorieTabel matching the query, or a new GsBpercategorieTabel object populated from the query conditions when no match is found
 *
 * @method GsBpercategorieTabel findOneByBestandnummer(int $bestandnummer) Return the first GsBpercategorieTabel filtered by the bestandnummer column
 * @method GsBpercategorieTabel findOneByMutatiekode(int $mutatiekode) Return the first GsBpercategorieTabel filtered by the mutatiekode column
 * @method GsBpercategorieTabel findOneByUniekNummerPerTekstcategorie(int $uniek_nummer_per_tekstcategorie) Return the first GsBpercategorieTabel filtered by the uniek_nummer_per_tekstcategorie column
 * @method GsBpercategorieTabel findOneByUniekNummerAanvullendeTekst(int $uniek_nummer_aanvullende_tekst) Return the first GsBpercategorieTabel filtered by the uniek_nummer_aanvullende_tekst column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsBpercategorieTabel objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsBpercategorieTabel objects filtered by the mutatiekode column
 * @method array findByUniekNummerPerTekstcategorie(int $uniek_nummer_per_tekstcategorie) Return GsBpercategorieTabel objects filtered by the uniek_nummer_per_tekstcategorie column
 * @method array findByUniekNummerAanvullendeTekst(int $uniek_nummer_aanvullende_tekst) Return GsBpercategorieTabel objects filtered by the uniek_nummer_aanvullende_tekst column
 */
abstract class BaseGsBpercategorieTabelQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsBpercategorieTabelQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsBpercategorieTabel';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsBpercategorieTabelQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsBpercategorieTabelQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsBpercategorieTabelQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsBpercategorieTabelQuery) {
            return $criteria;
        }
        $query = new GsBpercategorieTabelQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$uniek_nummer_per_tekstcategorie, $uniek_nummer_aanvullende_tekst]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsBpercategorieTabel|GsBpercategorieTabel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsBpercategorieTabelPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsBpercategorieTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsBpercategorieTabel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `uniek_nummer_per_tekstcategorie`, `uniek_nummer_aanvullende_tekst` FROM `gs_bpercategorie_tabel` WHERE `uniek_nummer_per_tekstcategorie` = :p0 AND `uniek_nummer_aanvullende_tekst` = :p1';
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
            $obj = new GsBpercategorieTabel();
            $obj->hydrate($row);
            GsBpercategorieTabelPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsBpercategorieTabel|GsBpercategorieTabel[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsBpercategorieTabel[]|mixed the list of results, formatted by the current formatter
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
     * @return GsBpercategorieTabelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsBpercategorieTabelPeer::UNIEK_NUMMER_PER_TEKSTCATEGORIE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsBpercategorieTabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsBpercategorieTabelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsBpercategorieTabelPeer::UNIEK_NUMMER_PER_TEKSTCATEGORIE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsBpercategorieTabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST, $key[1], Criteria::EQUAL);
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
     * @return GsBpercategorieTabelQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsBpercategorieTabelPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsBpercategorieTabelPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBpercategorieTabelPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsBpercategorieTabelQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsBpercategorieTabelPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsBpercategorieTabelPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBpercategorieTabelPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the uniek_nummer_per_tekstcategorie column
     *
     * Example usage:
     * <code>
     * $query->filterByUniekNummerPerTekstcategorie(1234); // WHERE uniek_nummer_per_tekstcategorie = 1234
     * $query->filterByUniekNummerPerTekstcategorie(array(12, 34)); // WHERE uniek_nummer_per_tekstcategorie IN (12, 34)
     * $query->filterByUniekNummerPerTekstcategorie(array('min' => 12)); // WHERE uniek_nummer_per_tekstcategorie >= 12
     * $query->filterByUniekNummerPerTekstcategorie(array('max' => 12)); // WHERE uniek_nummer_per_tekstcategorie <= 12
     * </code>
     *
     * @param     mixed $uniekNummerPerTekstcategorie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBpercategorieTabelQuery The current query, for fluid interface
     */
    public function filterByUniekNummerPerTekstcategorie($uniekNummerPerTekstcategorie = null, $comparison = null)
    {
        if (is_array($uniekNummerPerTekstcategorie)) {
            $useMinMax = false;
            if (isset($uniekNummerPerTekstcategorie['min'])) {
                $this->addUsingAlias(GsBpercategorieTabelPeer::UNIEK_NUMMER_PER_TEKSTCATEGORIE, $uniekNummerPerTekstcategorie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uniekNummerPerTekstcategorie['max'])) {
                $this->addUsingAlias(GsBpercategorieTabelPeer::UNIEK_NUMMER_PER_TEKSTCATEGORIE, $uniekNummerPerTekstcategorie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBpercategorieTabelPeer::UNIEK_NUMMER_PER_TEKSTCATEGORIE, $uniekNummerPerTekstcategorie, $comparison);
    }

    /**
     * Filter the query on the uniek_nummer_aanvullende_tekst column
     *
     * Example usage:
     * <code>
     * $query->filterByUniekNummerAanvullendeTekst(1234); // WHERE uniek_nummer_aanvullende_tekst = 1234
     * $query->filterByUniekNummerAanvullendeTekst(array(12, 34)); // WHERE uniek_nummer_aanvullende_tekst IN (12, 34)
     * $query->filterByUniekNummerAanvullendeTekst(array('min' => 12)); // WHERE uniek_nummer_aanvullende_tekst >= 12
     * $query->filterByUniekNummerAanvullendeTekst(array('max' => 12)); // WHERE uniek_nummer_aanvullende_tekst <= 12
     * </code>
     *
     * @param     mixed $uniekNummerAanvullendeTekst The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBpercategorieTabelQuery The current query, for fluid interface
     */
    public function filterByUniekNummerAanvullendeTekst($uniekNummerAanvullendeTekst = null, $comparison = null)
    {
        if (is_array($uniekNummerAanvullendeTekst)) {
            $useMinMax = false;
            if (isset($uniekNummerAanvullendeTekst['min'])) {
                $this->addUsingAlias(GsBpercategorieTabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST, $uniekNummerAanvullendeTekst['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uniekNummerAanvullendeTekst['max'])) {
                $this->addUsingAlias(GsBpercategorieTabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST, $uniekNummerAanvullendeTekst['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBpercategorieTabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST, $uniekNummerAanvullendeTekst, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsBpercategorieTabel $gsBpercategorieTabel Object to remove from the list of results
     *
     * @return GsBpercategorieTabelQuery The current query, for fluid interface
     */
    public function prune($gsBpercategorieTabel = null)
    {
        if ($gsBpercategorieTabel) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsBpercategorieTabelPeer::UNIEK_NUMMER_PER_TEKSTCATEGORIE), $gsBpercategorieTabel->getUniekNummerPerTekstcategorie(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsBpercategorieTabelPeer::UNIEK_NUMMER_AANVULLENDE_TEKST), $gsBpercategorieTabel->getUniekNummerAanvullendeTekst(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
