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
use PharmaIntelligence\GstandaardBundle\Model\GsInformatoriumGroepen;
use PharmaIntelligence\GstandaardBundle\Model\GsInformatoriumGroepenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsInformatoriumGroepenQuery;

/**
 * @method GsInformatoriumGroepenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsInformatoriumGroepenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsInformatoriumGroepenQuery orderByGroepkode($order = Criteria::ASC) Order by the groepkode column
 * @method GsInformatoriumGroepenQuery orderByGroepnaam($order = Criteria::ASC) Order by the groepnaam column
 * @method GsInformatoriumGroepenQuery orderByGroepvolgordeKode($order = Criteria::ASC) Order by the groepvolgorde_kode column
 *
 * @method GsInformatoriumGroepenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsInformatoriumGroepenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsInformatoriumGroepenQuery groupByGroepkode() Group by the groepkode column
 * @method GsInformatoriumGroepenQuery groupByGroepnaam() Group by the groepnaam column
 * @method GsInformatoriumGroepenQuery groupByGroepvolgordeKode() Group by the groepvolgorde_kode column
 *
 * @method GsInformatoriumGroepenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsInformatoriumGroepenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsInformatoriumGroepenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsInformatoriumGroepen findOne(PropelPDO $con = null) Return the first GsInformatoriumGroepen matching the query
 * @method GsInformatoriumGroepen findOneOrCreate(PropelPDO $con = null) Return the first GsInformatoriumGroepen matching the query, or a new GsInformatoriumGroepen object populated from the query conditions when no match is found
 *
 * @method GsInformatoriumGroepen findOneByBestandnummer(int $bestandnummer) Return the first GsInformatoriumGroepen filtered by the bestandnummer column
 * @method GsInformatoriumGroepen findOneByMutatiekode(int $mutatiekode) Return the first GsInformatoriumGroepen filtered by the mutatiekode column
 * @method GsInformatoriumGroepen findOneByGroepnaam(string $groepnaam) Return the first GsInformatoriumGroepen filtered by the groepnaam column
 * @method GsInformatoriumGroepen findOneByGroepvolgordeKode(int $groepvolgorde_kode) Return the first GsInformatoriumGroepen filtered by the groepvolgorde_kode column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsInformatoriumGroepen objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsInformatoriumGroepen objects filtered by the mutatiekode column
 * @method array findByGroepkode(int $groepkode) Return GsInformatoriumGroepen objects filtered by the groepkode column
 * @method array findByGroepnaam(string $groepnaam) Return GsInformatoriumGroepen objects filtered by the groepnaam column
 * @method array findByGroepvolgordeKode(int $groepvolgorde_kode) Return GsInformatoriumGroepen objects filtered by the groepvolgorde_kode column
 */
abstract class BaseGsInformatoriumGroepenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsInformatoriumGroepenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsInformatoriumGroepen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsInformatoriumGroepenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsInformatoriumGroepenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsInformatoriumGroepenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsInformatoriumGroepenQuery) {
            return $criteria;
        }
        $query = new GsInformatoriumGroepenQuery(null, null, $modelAlias);

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
     * @return   GsInformatoriumGroepen|GsInformatoriumGroepen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsInformatoriumGroepenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsInformatoriumGroepenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsInformatoriumGroepen A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByGroepkode($key, $con = null)
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
     * @return                 GsInformatoriumGroepen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `groepkode`, `groepnaam`, `groepvolgorde_kode` FROM `gs_informatorium_groepen` WHERE `groepkode` = :p0';
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
            $obj = new GsInformatoriumGroepen();
            $obj->hydrate($row);
            GsInformatoriumGroepenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsInformatoriumGroepen|GsInformatoriumGroepen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsInformatoriumGroepen[]|mixed the list of results, formatted by the current formatter
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
     * @return GsInformatoriumGroepenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsInformatoriumGroepenPeer::GROEPKODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsInformatoriumGroepenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsInformatoriumGroepenPeer::GROEPKODE, $keys, Criteria::IN);
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
     * @return GsInformatoriumGroepenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsInformatoriumGroepenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsInformatoriumGroepenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInformatoriumGroepenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsInformatoriumGroepenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsInformatoriumGroepenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsInformatoriumGroepenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInformatoriumGroepenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the groepkode column
     *
     * Example usage:
     * <code>
     * $query->filterByGroepkode(1234); // WHERE groepkode = 1234
     * $query->filterByGroepkode(array(12, 34)); // WHERE groepkode IN (12, 34)
     * $query->filterByGroepkode(array('min' => 12)); // WHERE groepkode >= 12
     * $query->filterByGroepkode(array('max' => 12)); // WHERE groepkode <= 12
     * </code>
     *
     * @param     mixed $groepkode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInformatoriumGroepenQuery The current query, for fluid interface
     */
    public function filterByGroepkode($groepkode = null, $comparison = null)
    {
        if (is_array($groepkode)) {
            $useMinMax = false;
            if (isset($groepkode['min'])) {
                $this->addUsingAlias(GsInformatoriumGroepenPeer::GROEPKODE, $groepkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($groepkode['max'])) {
                $this->addUsingAlias(GsInformatoriumGroepenPeer::GROEPKODE, $groepkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInformatoriumGroepenPeer::GROEPKODE, $groepkode, $comparison);
    }

    /**
     * Filter the query on the groepnaam column
     *
     * Example usage:
     * <code>
     * $query->filterByGroepnaam('fooValue');   // WHERE groepnaam = 'fooValue'
     * $query->filterByGroepnaam('%fooValue%'); // WHERE groepnaam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $groepnaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInformatoriumGroepenQuery The current query, for fluid interface
     */
    public function filterByGroepnaam($groepnaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($groepnaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $groepnaam)) {
                $groepnaam = str_replace('*', '%', $groepnaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsInformatoriumGroepenPeer::GROEPNAAM, $groepnaam, $comparison);
    }

    /**
     * Filter the query on the groepvolgorde_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByGroepvolgordeKode(1234); // WHERE groepvolgorde_kode = 1234
     * $query->filterByGroepvolgordeKode(array(12, 34)); // WHERE groepvolgorde_kode IN (12, 34)
     * $query->filterByGroepvolgordeKode(array('min' => 12)); // WHERE groepvolgorde_kode >= 12
     * $query->filterByGroepvolgordeKode(array('max' => 12)); // WHERE groepvolgorde_kode <= 12
     * </code>
     *
     * @param     mixed $groepvolgordeKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInformatoriumGroepenQuery The current query, for fluid interface
     */
    public function filterByGroepvolgordeKode($groepvolgordeKode = null, $comparison = null)
    {
        if (is_array($groepvolgordeKode)) {
            $useMinMax = false;
            if (isset($groepvolgordeKode['min'])) {
                $this->addUsingAlias(GsInformatoriumGroepenPeer::GROEPVOLGORDE_KODE, $groepvolgordeKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($groepvolgordeKode['max'])) {
                $this->addUsingAlias(GsInformatoriumGroepenPeer::GROEPVOLGORDE_KODE, $groepvolgordeKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInformatoriumGroepenPeer::GROEPVOLGORDE_KODE, $groepvolgordeKode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsInformatoriumGroepen $gsInformatoriumGroepen Object to remove from the list of results
     *
     * @return GsInformatoriumGroepenQuery The current query, for fluid interface
     */
    public function prune($gsInformatoriumGroepen = null)
    {
        if ($gsInformatoriumGroepen) {
            $this->addUsingAlias(GsInformatoriumGroepenPeer::GROEPKODE, $gsInformatoriumGroepen->getGroepkode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
