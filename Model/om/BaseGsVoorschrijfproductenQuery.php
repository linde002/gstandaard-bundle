<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \Criteria;
use \Exception;
use \ModelCriteria;
use \ModelJoin;
use \PDO;
use \Propel;
use \PropelCollection;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsNamen;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentific;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfproductenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfproductenQuery;

/**
 * @method GsVoorschrijfproductenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsVoorschrijfproductenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsVoorschrijfproductenQuery orderByPrkcode($order = Criteria::ASC) Order by the prkcode column
 * @method GsVoorschrijfproductenQuery orderByNaamnummerPrescriptieProduct($order = Criteria::ASC) Order by the naamnummer_prescriptie_product column
 * @method GsVoorschrijfproductenQuery orderByVerwijzingNaarKenmerkenBestand($order = Criteria::ASC) Order by the verwijzing_naar_kenmerken_bestand column
 *
 * @method GsVoorschrijfproductenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsVoorschrijfproductenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsVoorschrijfproductenQuery groupByPrkcode() Group by the prkcode column
 * @method GsVoorschrijfproductenQuery groupByNaamnummerPrescriptieProduct() Group by the naamnummer_prescriptie_product column
 * @method GsVoorschrijfproductenQuery groupByVerwijzingNaarKenmerkenBestand() Group by the verwijzing_naar_kenmerken_bestand column
 *
 * @method GsVoorschrijfproductenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsVoorschrijfproductenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsVoorschrijfproductenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsVoorschrijfproductenQuery leftJoinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
 * @method GsVoorschrijfproductenQuery rightJoinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
 * @method GsVoorschrijfproductenQuery innerJoinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null) Adds a INNER JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
 *
 * @method GsVoorschrijfproductenQuery leftJoinGsNamen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsNamen relation
 * @method GsVoorschrijfproductenQuery rightJoinGsNamen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsNamen relation
 * @method GsVoorschrijfproductenQuery innerJoinGsNamen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsNamen relation
 *
 * @method GsVoorschrijfproducten findOne(PropelPDO $con = null) Return the first GsVoorschrijfproducten matching the query
 * @method GsVoorschrijfproducten findOneOrCreate(PropelPDO $con = null) Return the first GsVoorschrijfproducten matching the query, or a new GsVoorschrijfproducten object populated from the query conditions when no match is found
 *
 * @method GsVoorschrijfproducten findOneByBestandnummer(int $bestandnummer) Return the first GsVoorschrijfproducten filtered by the bestandnummer column
 * @method GsVoorschrijfproducten findOneByMutatiekode(int $mutatiekode) Return the first GsVoorschrijfproducten filtered by the mutatiekode column
 * @method GsVoorschrijfproducten findOneByNaamnummerPrescriptieProduct(int $naamnummer_prescriptie_product) Return the first GsVoorschrijfproducten filtered by the naamnummer_prescriptie_product column
 * @method GsVoorschrijfproducten findOneByVerwijzingNaarKenmerkenBestand(string $verwijzing_naar_kenmerken_bestand) Return the first GsVoorschrijfproducten filtered by the verwijzing_naar_kenmerken_bestand column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsVoorschrijfproducten objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsVoorschrijfproducten objects filtered by the mutatiekode column
 * @method array findByPrkcode(int $prkcode) Return GsVoorschrijfproducten objects filtered by the prkcode column
 * @method array findByNaamnummerPrescriptieProduct(int $naamnummer_prescriptie_product) Return GsVoorschrijfproducten objects filtered by the naamnummer_prescriptie_product column
 * @method array findByVerwijzingNaarKenmerkenBestand(string $verwijzing_naar_kenmerken_bestand) Return GsVoorschrijfproducten objects filtered by the verwijzing_naar_kenmerken_bestand column
 */
abstract class BaseGsVoorschrijfproductenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsVoorschrijfproductenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVoorschrijfproducten';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsVoorschrijfproductenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsVoorschrijfproductenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsVoorschrijfproductenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsVoorschrijfproductenQuery) {
            return $criteria;
        }
        $query = new GsVoorschrijfproductenQuery(null, null, $modelAlias);

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
     * @return   GsVoorschrijfproducten|GsVoorschrijfproducten[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsVoorschrijfproductenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsVoorschrijfproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsVoorschrijfproducten A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByPrkcode($key, $con = null)
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
     * @return                 GsVoorschrijfproducten A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `prkcode`, `naamnummer_prescriptie_product`, `verwijzing_naar_kenmerken_bestand` FROM `gs_voorschrijfproducten` WHERE `prkcode` = :p0';
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
            $obj = new GsVoorschrijfproducten();
            $obj->hydrate($row);
            GsVoorschrijfproductenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsVoorschrijfproducten|GsVoorschrijfproducten[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsVoorschrijfproducten[]|mixed the list of results, formatted by the current formatter
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
     * @return GsVoorschrijfproductenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsVoorschrijfproductenPeer::PRKCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsVoorschrijfproductenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsVoorschrijfproductenPeer::PRKCODE, $keys, Criteria::IN);
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
     * @return GsVoorschrijfproductenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsVoorschrijfproductenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsVoorschrijfproductenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfproductenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsVoorschrijfproductenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsVoorschrijfproductenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsVoorschrijfproductenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfproductenPeer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @see       filterByGsVoorschrijfprGeneesmiddelIdentific()
     *
     * @param     mixed $prkcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfproductenQuery The current query, for fluid interface
     */
    public function filterByPrkcode($prkcode = null, $comparison = null)
    {
        if (is_array($prkcode)) {
            $useMinMax = false;
            if (isset($prkcode['min'])) {
                $this->addUsingAlias(GsVoorschrijfproductenPeer::PRKCODE, $prkcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prkcode['max'])) {
                $this->addUsingAlias(GsVoorschrijfproductenPeer::PRKCODE, $prkcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfproductenPeer::PRKCODE, $prkcode, $comparison);
    }

    /**
     * Filter the query on the naamnummer_prescriptie_product column
     *
     * Example usage:
     * <code>
     * $query->filterByNaamnummerPrescriptieProduct(1234); // WHERE naamnummer_prescriptie_product = 1234
     * $query->filterByNaamnummerPrescriptieProduct(array(12, 34)); // WHERE naamnummer_prescriptie_product IN (12, 34)
     * $query->filterByNaamnummerPrescriptieProduct(array('min' => 12)); // WHERE naamnummer_prescriptie_product >= 12
     * $query->filterByNaamnummerPrescriptieProduct(array('max' => 12)); // WHERE naamnummer_prescriptie_product <= 12
     * </code>
     *
     * @see       filterByGsNamen()
     *
     * @param     mixed $naamnummerPrescriptieProduct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfproductenQuery The current query, for fluid interface
     */
    public function filterByNaamnummerPrescriptieProduct($naamnummerPrescriptieProduct = null, $comparison = null)
    {
        if (is_array($naamnummerPrescriptieProduct)) {
            $useMinMax = false;
            if (isset($naamnummerPrescriptieProduct['min'])) {
                $this->addUsingAlias(GsVoorschrijfproductenPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, $naamnummerPrescriptieProduct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($naamnummerPrescriptieProduct['max'])) {
                $this->addUsingAlias(GsVoorschrijfproductenPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, $naamnummerPrescriptieProduct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfproductenPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, $naamnummerPrescriptieProduct, $comparison);
    }

    /**
     * Filter the query on the verwijzing_naar_kenmerken_bestand column
     *
     * Example usage:
     * <code>
     * $query->filterByVerwijzingNaarKenmerkenBestand('fooValue');   // WHERE verwijzing_naar_kenmerken_bestand = 'fooValue'
     * $query->filterByVerwijzingNaarKenmerkenBestand('%fooValue%'); // WHERE verwijzing_naar_kenmerken_bestand LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verwijzingNaarKenmerkenBestand The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVoorschrijfproductenQuery The current query, for fluid interface
     */
    public function filterByVerwijzingNaarKenmerkenBestand($verwijzingNaarKenmerkenBestand = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verwijzingNaarKenmerkenBestand)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $verwijzingNaarKenmerkenBestand)) {
                $verwijzingNaarKenmerkenBestand = str_replace('*', '%', $verwijzingNaarKenmerkenBestand);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsVoorschrijfproductenPeer::VERWIJZING_NAAR_KENMERKEN_BESTAND, $verwijzingNaarKenmerkenBestand, $comparison);
    }

    /**
     * Filter the query by a related GsVoorschrijfprGeneesmiddelIdentific object
     *
     * @param   GsVoorschrijfprGeneesmiddelIdentific|PropelObjectCollection $gsVoorschrijfprGeneesmiddelIdentific The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsVoorschrijfproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsVoorschrijfprGeneesmiddelIdentific($gsVoorschrijfprGeneesmiddelIdentific, $comparison = null)
    {
        if ($gsVoorschrijfprGeneesmiddelIdentific instanceof GsVoorschrijfprGeneesmiddelIdentific) {
            return $this
                ->addUsingAlias(GsVoorschrijfproductenPeer::PRKCODE, $gsVoorschrijfprGeneesmiddelIdentific->getPrkcode(), $comparison);
        } elseif ($gsVoorschrijfprGeneesmiddelIdentific instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsVoorschrijfproductenPeer::PRKCODE, $gsVoorschrijfprGeneesmiddelIdentific->toKeyValue('PrimaryKey', 'Prkcode'), $comparison);
        } else {
            throw new PropelException('filterByGsVoorschrijfprGeneesmiddelIdentific() only accepts arguments of type GsVoorschrijfprGeneesmiddelIdentific or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsVoorschrijfproductenQuery The current query, for fluid interface
     */
    public function joinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsVoorschrijfprGeneesmiddelIdentific');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'GsVoorschrijfprGeneesmiddelIdentific');
        }

        return $this;
    }

    /**
     * Use the GsVoorschrijfprGeneesmiddelIdentific relation GsVoorschrijfprGeneesmiddelIdentific object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificQuery A secondary query class using the current class as primary query
     */
    public function useGsVoorschrijfprGeneesmiddelIdentificQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsVoorschrijfprGeneesmiddelIdentific($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsVoorschrijfprGeneesmiddelIdentific', '\PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificQuery');
    }

    /**
     * Filter the query by a related GsNamen object
     *
     * @param   GsNamen|PropelObjectCollection $gsNamen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsVoorschrijfproductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsNamen($gsNamen, $comparison = null)
    {
        if ($gsNamen instanceof GsNamen) {
            return $this
                ->addUsingAlias(GsVoorschrijfproductenPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, $gsNamen->getNaamnummer(), $comparison);
        } elseif ($gsNamen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsVoorschrijfproductenPeer::NAAMNUMMER_PRESCRIPTIE_PRODUCT, $gsNamen->toKeyValue('PrimaryKey', 'Naamnummer'), $comparison);
        } else {
            throw new PropelException('filterByGsNamen() only accepts arguments of type GsNamen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsNamen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsVoorschrijfproductenQuery The current query, for fluid interface
     */
    public function joinGsNamen($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsNamen');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'GsNamen');
        }

        return $this;
    }

    /**
     * Use the GsNamen relation GsNamen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsNamenQuery A secondary query class using the current class as primary query
     */
    public function useGsNamenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsNamen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsNamen', '\PharmaIntelligence\GstandaardBundle\Model\GsNamenQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsVoorschrijfproducten $gsVoorschrijfproducten Object to remove from the list of results
     *
     * @return GsVoorschrijfproductenQuery The current query, for fluid interface
     */
    public function prune($gsVoorschrijfproducten = null)
    {
        if ($gsVoorschrijfproducten) {
            $this->addUsingAlias(GsVoorschrijfproductenPeer::PRKCODE, $gsVoorschrijfproducten->getPrkcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
