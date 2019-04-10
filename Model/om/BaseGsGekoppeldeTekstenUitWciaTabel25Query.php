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
use PharmaIntelligence\GstandaardBundle\Model\GsGekoppeldeTekstenUitWciaTabel25;
use PharmaIntelligence\GstandaardBundle\Model\GsGekoppeldeTekstenUitWciaTabel25Peer;
use PharmaIntelligence\GstandaardBundle\Model\GsGekoppeldeTekstenUitWciaTabel25Query;

/**
 * @method GsGekoppeldeTekstenUitWciaTabel25Query orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsGekoppeldeTekstenUitWciaTabel25Query orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsGekoppeldeTekstenUitWciaTabel25Query orderByHandelsproduktkode($order = Criteria::ASC) Order by the handelsproduktkode column
 * @method GsGekoppeldeTekstenUitWciaTabel25Query orderByPrkcode($order = Criteria::ASC) Order by the prkcode column
 * @method GsGekoppeldeTekstenUitWciaTabel25Query orderByUniekNummerAanvullendeTekst($order = Criteria::ASC) Order by the uniek_nummer_aanvullende_tekst column
 *
 * @method GsGekoppeldeTekstenUitWciaTabel25Query groupByBestandnummer() Group by the bestandnummer column
 * @method GsGekoppeldeTekstenUitWciaTabel25Query groupByMutatiekode() Group by the mutatiekode column
 * @method GsGekoppeldeTekstenUitWciaTabel25Query groupByHandelsproduktkode() Group by the handelsproduktkode column
 * @method GsGekoppeldeTekstenUitWciaTabel25Query groupByPrkcode() Group by the prkcode column
 * @method GsGekoppeldeTekstenUitWciaTabel25Query groupByUniekNummerAanvullendeTekst() Group by the uniek_nummer_aanvullende_tekst column
 *
 * @method GsGekoppeldeTekstenUitWciaTabel25Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsGekoppeldeTekstenUitWciaTabel25Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsGekoppeldeTekstenUitWciaTabel25Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsGekoppeldeTekstenUitWciaTabel25 findOne(PropelPDO $con = null) Return the first GsGekoppeldeTekstenUitWciaTabel25 matching the query
 * @method GsGekoppeldeTekstenUitWciaTabel25 findOneOrCreate(PropelPDO $con = null) Return the first GsGekoppeldeTekstenUitWciaTabel25 matching the query, or a new GsGekoppeldeTekstenUitWciaTabel25 object populated from the query conditions when no match is found
 *
 * @method GsGekoppeldeTekstenUitWciaTabel25 findOneByBestandnummer(int $bestandnummer) Return the first GsGekoppeldeTekstenUitWciaTabel25 filtered by the bestandnummer column
 * @method GsGekoppeldeTekstenUitWciaTabel25 findOneByMutatiekode(int $mutatiekode) Return the first GsGekoppeldeTekstenUitWciaTabel25 filtered by the mutatiekode column
 * @method GsGekoppeldeTekstenUitWciaTabel25 findOneByHandelsproduktkode(int $handelsproduktkode) Return the first GsGekoppeldeTekstenUitWciaTabel25 filtered by the handelsproduktkode column
 * @method GsGekoppeldeTekstenUitWciaTabel25 findOneByPrkcode(int $prkcode) Return the first GsGekoppeldeTekstenUitWciaTabel25 filtered by the prkcode column
 * @method GsGekoppeldeTekstenUitWciaTabel25 findOneByUniekNummerAanvullendeTekst(int $uniek_nummer_aanvullende_tekst) Return the first GsGekoppeldeTekstenUitWciaTabel25 filtered by the uniek_nummer_aanvullende_tekst column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsGekoppeldeTekstenUitWciaTabel25 objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsGekoppeldeTekstenUitWciaTabel25 objects filtered by the mutatiekode column
 * @method array findByHandelsproduktkode(int $handelsproduktkode) Return GsGekoppeldeTekstenUitWciaTabel25 objects filtered by the handelsproduktkode column
 * @method array findByPrkcode(int $prkcode) Return GsGekoppeldeTekstenUitWciaTabel25 objects filtered by the prkcode column
 * @method array findByUniekNummerAanvullendeTekst(int $uniek_nummer_aanvullende_tekst) Return GsGekoppeldeTekstenUitWciaTabel25 objects filtered by the uniek_nummer_aanvullende_tekst column
 */
abstract class BaseGsGekoppeldeTekstenUitWciaTabel25Query extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsGekoppeldeTekstenUitWciaTabel25Query object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGekoppeldeTekstenUitWciaTabel25';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsGekoppeldeTekstenUitWciaTabel25Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsGekoppeldeTekstenUitWciaTabel25Query|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsGekoppeldeTekstenUitWciaTabel25Query
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsGekoppeldeTekstenUitWciaTabel25Query) {
            return $criteria;
        }
        $query = new GsGekoppeldeTekstenUitWciaTabel25Query(null, null, $modelAlias);

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
                         A Primary key composition: [$handelsproduktkode, $prkcode, $uniek_nummer_aanvullende_tekst]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsGekoppeldeTekstenUitWciaTabel25|GsGekoppeldeTekstenUitWciaTabel25[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsGekoppeldeTekstenUitWciaTabel25Peer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsGekoppeldeTekstenUitWciaTabel25Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsGekoppeldeTekstenUitWciaTabel25 A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `handelsproduktkode`, `prkcode`, `uniek_nummer_aanvullende_tekst` FROM `gs_gekoppelde_teksten_uit_wcia_tabel_25` WHERE `handelsproduktkode` = :p0 AND `prkcode` = :p1 AND `uniek_nummer_aanvullende_tekst` = :p2';
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
            $obj = new GsGekoppeldeTekstenUitWciaTabel25();
            $obj->hydrate($row);
            GsGekoppeldeTekstenUitWciaTabel25Peer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return GsGekoppeldeTekstenUitWciaTabel25|GsGekoppeldeTekstenUitWciaTabel25[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsGekoppeldeTekstenUitWciaTabel25[]|mixed the list of results, formatted by the current formatter
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
     * @return GsGekoppeldeTekstenUitWciaTabel25Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsGekoppeldeTekstenUitWciaTabel25Peer::HANDELSPRODUKTKODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsGekoppeldeTekstenUitWciaTabel25Peer::PRKCODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsGekoppeldeTekstenUitWciaTabel25Peer::UNIEK_NUMMER_AANVULLENDE_TEKST, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsGekoppeldeTekstenUitWciaTabel25Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsGekoppeldeTekstenUitWciaTabel25Peer::HANDELSPRODUKTKODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsGekoppeldeTekstenUitWciaTabel25Peer::PRKCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsGekoppeldeTekstenUitWciaTabel25Peer::UNIEK_NUMMER_AANVULLENDE_TEKST, $key[2], Criteria::EQUAL);
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
     * @return GsGekoppeldeTekstenUitWciaTabel25Query The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsGekoppeldeTekstenUitWciaTabel25Peer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsGekoppeldeTekstenUitWciaTabel25Peer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGekoppeldeTekstenUitWciaTabel25Peer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsGekoppeldeTekstenUitWciaTabel25Query The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsGekoppeldeTekstenUitWciaTabel25Peer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsGekoppeldeTekstenUitWciaTabel25Peer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGekoppeldeTekstenUitWciaTabel25Peer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @return GsGekoppeldeTekstenUitWciaTabel25Query The current query, for fluid interface
     */
    public function filterByHandelsproduktkode($handelsproduktkode = null, $comparison = null)
    {
        if (is_array($handelsproduktkode)) {
            $useMinMax = false;
            if (isset($handelsproduktkode['min'])) {
                $this->addUsingAlias(GsGekoppeldeTekstenUitWciaTabel25Peer::HANDELSPRODUKTKODE, $handelsproduktkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($handelsproduktkode['max'])) {
                $this->addUsingAlias(GsGekoppeldeTekstenUitWciaTabel25Peer::HANDELSPRODUKTKODE, $handelsproduktkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGekoppeldeTekstenUitWciaTabel25Peer::HANDELSPRODUKTKODE, $handelsproduktkode, $comparison);
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
     * @return GsGekoppeldeTekstenUitWciaTabel25Query The current query, for fluid interface
     */
    public function filterByPrkcode($prkcode = null, $comparison = null)
    {
        if (is_array($prkcode)) {
            $useMinMax = false;
            if (isset($prkcode['min'])) {
                $this->addUsingAlias(GsGekoppeldeTekstenUitWciaTabel25Peer::PRKCODE, $prkcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prkcode['max'])) {
                $this->addUsingAlias(GsGekoppeldeTekstenUitWciaTabel25Peer::PRKCODE, $prkcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGekoppeldeTekstenUitWciaTabel25Peer::PRKCODE, $prkcode, $comparison);
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
     * @return GsGekoppeldeTekstenUitWciaTabel25Query The current query, for fluid interface
     */
    public function filterByUniekNummerAanvullendeTekst($uniekNummerAanvullendeTekst = null, $comparison = null)
    {
        if (is_array($uniekNummerAanvullendeTekst)) {
            $useMinMax = false;
            if (isset($uniekNummerAanvullendeTekst['min'])) {
                $this->addUsingAlias(GsGekoppeldeTekstenUitWciaTabel25Peer::UNIEK_NUMMER_AANVULLENDE_TEKST, $uniekNummerAanvullendeTekst['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uniekNummerAanvullendeTekst['max'])) {
                $this->addUsingAlias(GsGekoppeldeTekstenUitWciaTabel25Peer::UNIEK_NUMMER_AANVULLENDE_TEKST, $uniekNummerAanvullendeTekst['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGekoppeldeTekstenUitWciaTabel25Peer::UNIEK_NUMMER_AANVULLENDE_TEKST, $uniekNummerAanvullendeTekst, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsGekoppeldeTekstenUitWciaTabel25 $gsGekoppeldeTekstenUitWciaTabel25 Object to remove from the list of results
     *
     * @return GsGekoppeldeTekstenUitWciaTabel25Query The current query, for fluid interface
     */
    public function prune($gsGekoppeldeTekstenUitWciaTabel25 = null)
    {
        if ($gsGekoppeldeTekstenUitWciaTabel25) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsGekoppeldeTekstenUitWciaTabel25Peer::HANDELSPRODUKTKODE), $gsGekoppeldeTekstenUitWciaTabel25->getHandelsproduktkode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsGekoppeldeTekstenUitWciaTabel25Peer::PRKCODE), $gsGekoppeldeTekstenUitWciaTabel25->getPrkcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsGekoppeldeTekstenUitWciaTabel25Peer::UNIEK_NUMMER_AANVULLENDE_TEKST), $gsGekoppeldeTekstenUitWciaTabel25->getUniekNummerAanvullendeTekst(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
