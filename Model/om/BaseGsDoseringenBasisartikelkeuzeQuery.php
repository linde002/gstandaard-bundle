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
use PharmaIntelligence\GstandaardBundle\Model\GsDoseringenBasisartikelkeuze;
use PharmaIntelligence\GstandaardBundle\Model\GsDoseringenBasisartikelkeuzePeer;
use PharmaIntelligence\GstandaardBundle\Model\GsDoseringenBasisartikelkeuzeQuery;

/**
 * @method GsDoseringenBasisartikelkeuzeQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsDoseringenBasisartikelkeuzeQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsDoseringenBasisartikelkeuzeQuery orderByGeneriekeproductcode($order = Criteria::ASC) Order by the generiekeproductcode column
 * @method GsDoseringenBasisartikelkeuzeQuery orderByPrkcode($order = Criteria::ASC) Order by the prkcode column
 * @method GsDoseringenBasisartikelkeuzeQuery orderByHandelsproduktkode($order = Criteria::ASC) Order by the handelsproduktkode column
 * @method GsDoseringenBasisartikelkeuzeQuery orderByThesaurusSoortdoseringscode($order = Criteria::ASC) Order by the thesaurus_soortdoseringscode column
 * @method GsDoseringenBasisartikelkeuzeQuery orderBySoortdoseringscode($order = Criteria::ASC) Order by the soortdoseringscode column
 * @method GsDoseringenBasisartikelkeuzeQuery orderByDosisbasisnummer($order = Criteria::ASC) Order by the dosisbasisnummer column
 *
 * @method GsDoseringenBasisartikelkeuzeQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsDoseringenBasisartikelkeuzeQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsDoseringenBasisartikelkeuzeQuery groupByGeneriekeproductcode() Group by the generiekeproductcode column
 * @method GsDoseringenBasisartikelkeuzeQuery groupByPrkcode() Group by the prkcode column
 * @method GsDoseringenBasisartikelkeuzeQuery groupByHandelsproduktkode() Group by the handelsproduktkode column
 * @method GsDoseringenBasisartikelkeuzeQuery groupByThesaurusSoortdoseringscode() Group by the thesaurus_soortdoseringscode column
 * @method GsDoseringenBasisartikelkeuzeQuery groupBySoortdoseringscode() Group by the soortdoseringscode column
 * @method GsDoseringenBasisartikelkeuzeQuery groupByDosisbasisnummer() Group by the dosisbasisnummer column
 *
 * @method GsDoseringenBasisartikelkeuzeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsDoseringenBasisartikelkeuzeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsDoseringenBasisartikelkeuzeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsDoseringenBasisartikelkeuze findOne(PropelPDO $con = null) Return the first GsDoseringenBasisartikelkeuze matching the query
 * @method GsDoseringenBasisartikelkeuze findOneOrCreate(PropelPDO $con = null) Return the first GsDoseringenBasisartikelkeuze matching the query, or a new GsDoseringenBasisartikelkeuze object populated from the query conditions when no match is found
 *
 * @method GsDoseringenBasisartikelkeuze findOneByBestandnummer(int $bestandnummer) Return the first GsDoseringenBasisartikelkeuze filtered by the bestandnummer column
 * @method GsDoseringenBasisartikelkeuze findOneByMutatiekode(int $mutatiekode) Return the first GsDoseringenBasisartikelkeuze filtered by the mutatiekode column
 * @method GsDoseringenBasisartikelkeuze findOneByGeneriekeproductcode(int $generiekeproductcode) Return the first GsDoseringenBasisartikelkeuze filtered by the generiekeproductcode column
 * @method GsDoseringenBasisartikelkeuze findOneByPrkcode(int $prkcode) Return the first GsDoseringenBasisartikelkeuze filtered by the prkcode column
 * @method GsDoseringenBasisartikelkeuze findOneByHandelsproduktkode(int $handelsproduktkode) Return the first GsDoseringenBasisartikelkeuze filtered by the handelsproduktkode column
 * @method GsDoseringenBasisartikelkeuze findOneByThesaurusSoortdoseringscode(int $thesaurus_soortdoseringscode) Return the first GsDoseringenBasisartikelkeuze filtered by the thesaurus_soortdoseringscode column
 * @method GsDoseringenBasisartikelkeuze findOneBySoortdoseringscode(int $soortdoseringscode) Return the first GsDoseringenBasisartikelkeuze filtered by the soortdoseringscode column
 * @method GsDoseringenBasisartikelkeuze findOneByDosisbasisnummer(int $dosisbasisnummer) Return the first GsDoseringenBasisartikelkeuze filtered by the dosisbasisnummer column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsDoseringenBasisartikelkeuze objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsDoseringenBasisartikelkeuze objects filtered by the mutatiekode column
 * @method array findByGeneriekeproductcode(int $generiekeproductcode) Return GsDoseringenBasisartikelkeuze objects filtered by the generiekeproductcode column
 * @method array findByPrkcode(int $prkcode) Return GsDoseringenBasisartikelkeuze objects filtered by the prkcode column
 * @method array findByHandelsproduktkode(int $handelsproduktkode) Return GsDoseringenBasisartikelkeuze objects filtered by the handelsproduktkode column
 * @method array findByThesaurusSoortdoseringscode(int $thesaurus_soortdoseringscode) Return GsDoseringenBasisartikelkeuze objects filtered by the thesaurus_soortdoseringscode column
 * @method array findBySoortdoseringscode(int $soortdoseringscode) Return GsDoseringenBasisartikelkeuze objects filtered by the soortdoseringscode column
 * @method array findByDosisbasisnummer(int $dosisbasisnummer) Return GsDoseringenBasisartikelkeuze objects filtered by the dosisbasisnummer column
 */
abstract class BaseGsDoseringenBasisartikelkeuzeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsDoseringenBasisartikelkeuzeQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDoseringenBasisartikelkeuze';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsDoseringenBasisartikelkeuzeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsDoseringenBasisartikelkeuzeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsDoseringenBasisartikelkeuzeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsDoseringenBasisartikelkeuzeQuery) {
            return $criteria;
        }
        $query = new GsDoseringenBasisartikelkeuzeQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$generiekeproductcode, $prkcode, $handelsproduktkode, $soortdoseringscode]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsDoseringenBasisartikelkeuze|GsDoseringenBasisartikelkeuze[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsDoseringenBasisartikelkeuzePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsDoseringenBasisartikelkeuzePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsDoseringenBasisartikelkeuze A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `generiekeproductcode`, `prkcode`, `handelsproduktkode`, `thesaurus_soortdoseringscode`, `soortdoseringscode`, `dosisbasisnummer` FROM `gs_doseringen_basisartikelkeuze` WHERE `generiekeproductcode` = :p0 AND `prkcode` = :p1 AND `handelsproduktkode` = :p2 AND `soortdoseringscode` = :p3';
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
            $obj = new GsDoseringenBasisartikelkeuze();
            $obj->hydrate($row);
            GsDoseringenBasisartikelkeuzePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3])));
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
     * @return GsDoseringenBasisartikelkeuze|GsDoseringenBasisartikelkeuze[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsDoseringenBasisartikelkeuze[]|mixed the list of results, formatted by the current formatter
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
     * @return GsDoseringenBasisartikelkeuzeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::GENERIEKEPRODUCTCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::PRKCODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::HANDELSPRODUKTKODE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::SOORTDOSERINGSCODE, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsDoseringenBasisartikelkeuzeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsDoseringenBasisartikelkeuzePeer::GENERIEKEPRODUCTCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsDoseringenBasisartikelkeuzePeer::PRKCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsDoseringenBasisartikelkeuzePeer::HANDELSPRODUKTKODE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(GsDoseringenBasisartikelkeuzePeer::SOORTDOSERINGSCODE, $key[3], Criteria::EQUAL);
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
     * @return GsDoseringenBasisartikelkeuzeQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsDoseringenBasisartikelkeuzeQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the generiekeproductcode column
     *
     * Example usage:
     * <code>
     * $query->filterByGeneriekeproductcode(1234); // WHERE generiekeproductcode = 1234
     * $query->filterByGeneriekeproductcode(array(12, 34)); // WHERE generiekeproductcode IN (12, 34)
     * $query->filterByGeneriekeproductcode(array('min' => 12)); // WHERE generiekeproductcode >= 12
     * $query->filterByGeneriekeproductcode(array('max' => 12)); // WHERE generiekeproductcode <= 12
     * </code>
     *
     * @param     mixed $generiekeproductcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenBasisartikelkeuzeQuery The current query, for fluid interface
     */
    public function filterByGeneriekeproductcode($generiekeproductcode = null, $comparison = null)
    {
        if (is_array($generiekeproductcode)) {
            $useMinMax = false;
            if (isset($generiekeproductcode['min'])) {
                $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::GENERIEKEPRODUCTCODE, $generiekeproductcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($generiekeproductcode['max'])) {
                $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::GENERIEKEPRODUCTCODE, $generiekeproductcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::GENERIEKEPRODUCTCODE, $generiekeproductcode, $comparison);
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
     * @return GsDoseringenBasisartikelkeuzeQuery The current query, for fluid interface
     */
    public function filterByPrkcode($prkcode = null, $comparison = null)
    {
        if (is_array($prkcode)) {
            $useMinMax = false;
            if (isset($prkcode['min'])) {
                $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::PRKCODE, $prkcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prkcode['max'])) {
                $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::PRKCODE, $prkcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::PRKCODE, $prkcode, $comparison);
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
     * @return GsDoseringenBasisartikelkeuzeQuery The current query, for fluid interface
     */
    public function filterByHandelsproduktkode($handelsproduktkode = null, $comparison = null)
    {
        if (is_array($handelsproduktkode)) {
            $useMinMax = false;
            if (isset($handelsproduktkode['min'])) {
                $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::HANDELSPRODUKTKODE, $handelsproduktkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($handelsproduktkode['max'])) {
                $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::HANDELSPRODUKTKODE, $handelsproduktkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::HANDELSPRODUKTKODE, $handelsproduktkode, $comparison);
    }

    /**
     * Filter the query on the thesaurus_soortdoseringscode column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusSoortdoseringscode(1234); // WHERE thesaurus_soortdoseringscode = 1234
     * $query->filterByThesaurusSoortdoseringscode(array(12, 34)); // WHERE thesaurus_soortdoseringscode IN (12, 34)
     * $query->filterByThesaurusSoortdoseringscode(array('min' => 12)); // WHERE thesaurus_soortdoseringscode >= 12
     * $query->filterByThesaurusSoortdoseringscode(array('max' => 12)); // WHERE thesaurus_soortdoseringscode <= 12
     * </code>
     *
     * @param     mixed $thesaurusSoortdoseringscode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenBasisartikelkeuzeQuery The current query, for fluid interface
     */
    public function filterByThesaurusSoortdoseringscode($thesaurusSoortdoseringscode = null, $comparison = null)
    {
        if (is_array($thesaurusSoortdoseringscode)) {
            $useMinMax = false;
            if (isset($thesaurusSoortdoseringscode['min'])) {
                $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::THESAURUS_SOORTDOSERINGSCODE, $thesaurusSoortdoseringscode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusSoortdoseringscode['max'])) {
                $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::THESAURUS_SOORTDOSERINGSCODE, $thesaurusSoortdoseringscode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::THESAURUS_SOORTDOSERINGSCODE, $thesaurusSoortdoseringscode, $comparison);
    }

    /**
     * Filter the query on the soortdoseringscode column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortdoseringscode(1234); // WHERE soortdoseringscode = 1234
     * $query->filterBySoortdoseringscode(array(12, 34)); // WHERE soortdoseringscode IN (12, 34)
     * $query->filterBySoortdoseringscode(array('min' => 12)); // WHERE soortdoseringscode >= 12
     * $query->filterBySoortdoseringscode(array('max' => 12)); // WHERE soortdoseringscode <= 12
     * </code>
     *
     * @param     mixed $soortdoseringscode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenBasisartikelkeuzeQuery The current query, for fluid interface
     */
    public function filterBySoortdoseringscode($soortdoseringscode = null, $comparison = null)
    {
        if (is_array($soortdoseringscode)) {
            $useMinMax = false;
            if (isset($soortdoseringscode['min'])) {
                $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::SOORTDOSERINGSCODE, $soortdoseringscode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortdoseringscode['max'])) {
                $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::SOORTDOSERINGSCODE, $soortdoseringscode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::SOORTDOSERINGSCODE, $soortdoseringscode, $comparison);
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
     * @return GsDoseringenBasisartikelkeuzeQuery The current query, for fluid interface
     */
    public function filterByDosisbasisnummer($dosisbasisnummer = null, $comparison = null)
    {
        if (is_array($dosisbasisnummer)) {
            $useMinMax = false;
            if (isset($dosisbasisnummer['min'])) {
                $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::DOSISBASISNUMMER, $dosisbasisnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dosisbasisnummer['max'])) {
                $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::DOSISBASISNUMMER, $dosisbasisnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenBasisartikelkeuzePeer::DOSISBASISNUMMER, $dosisbasisnummer, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsDoseringenBasisartikelkeuze $gsDoseringenBasisartikelkeuze Object to remove from the list of results
     *
     * @return GsDoseringenBasisartikelkeuzeQuery The current query, for fluid interface
     */
    public function prune($gsDoseringenBasisartikelkeuze = null)
    {
        if ($gsDoseringenBasisartikelkeuze) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsDoseringenBasisartikelkeuzePeer::GENERIEKEPRODUCTCODE), $gsDoseringenBasisartikelkeuze->getGeneriekeproductcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsDoseringenBasisartikelkeuzePeer::PRKCODE), $gsDoseringenBasisartikelkeuze->getPrkcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsDoseringenBasisartikelkeuzePeer::HANDELSPRODUKTKODE), $gsDoseringenBasisartikelkeuze->getHandelsproduktkode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(GsDoseringenBasisartikelkeuzePeer::SOORTDOSERINGSCODE), $gsDoseringenBasisartikelkeuze->getSoortdoseringscode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
