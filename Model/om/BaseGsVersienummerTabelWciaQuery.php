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
use PharmaIntelligence\GstandaardBundle\Model\GsVersienummerTabelWcia;
use PharmaIntelligence\GstandaardBundle\Model\GsVersienummerTabelWciaPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsVersienummerTabelWciaQuery;

/**
 * @method GsVersienummerTabelWciaQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsVersienummerTabelWciaQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsVersienummerTabelWciaQuery orderByVersienummerVanDeWciaTabellen($order = Criteria::ASC) Order by the versienummer_van_de_wcia_tabellen column
 * @method GsVersienummerTabelWciaQuery orderByDatumOfficieleUitgifte($order = Criteria::ASC) Order by the datum_officiele_uitgifte column
 * @method GsVersienummerTabelWciaQuery orderByOmschrijvingVersienummer($order = Criteria::ASC) Order by the omschrijving_versienummer column
 *
 * @method GsVersienummerTabelWciaQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsVersienummerTabelWciaQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsVersienummerTabelWciaQuery groupByVersienummerVanDeWciaTabellen() Group by the versienummer_van_de_wcia_tabellen column
 * @method GsVersienummerTabelWciaQuery groupByDatumOfficieleUitgifte() Group by the datum_officiele_uitgifte column
 * @method GsVersienummerTabelWciaQuery groupByOmschrijvingVersienummer() Group by the omschrijving_versienummer column
 *
 * @method GsVersienummerTabelWciaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsVersienummerTabelWciaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsVersienummerTabelWciaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsVersienummerTabelWcia findOne(PropelPDO $con = null) Return the first GsVersienummerTabelWcia matching the query
 * @method GsVersienummerTabelWcia findOneOrCreate(PropelPDO $con = null) Return the first GsVersienummerTabelWcia matching the query, or a new GsVersienummerTabelWcia object populated from the query conditions when no match is found
 *
 * @method GsVersienummerTabelWcia findOneByBestandnummer(int $bestandnummer) Return the first GsVersienummerTabelWcia filtered by the bestandnummer column
 * @method GsVersienummerTabelWcia findOneByMutatiekode(int $mutatiekode) Return the first GsVersienummerTabelWcia filtered by the mutatiekode column
 * @method GsVersienummerTabelWcia findOneByDatumOfficieleUitgifte(string $datum_officiele_uitgifte) Return the first GsVersienummerTabelWcia filtered by the datum_officiele_uitgifte column
 * @method GsVersienummerTabelWcia findOneByOmschrijvingVersienummer(string $omschrijving_versienummer) Return the first GsVersienummerTabelWcia filtered by the omschrijving_versienummer column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsVersienummerTabelWcia objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsVersienummerTabelWcia objects filtered by the mutatiekode column
 * @method array findByVersienummerVanDeWciaTabellen(int $versienummer_van_de_wcia_tabellen) Return GsVersienummerTabelWcia objects filtered by the versienummer_van_de_wcia_tabellen column
 * @method array findByDatumOfficieleUitgifte(string $datum_officiele_uitgifte) Return GsVersienummerTabelWcia objects filtered by the datum_officiele_uitgifte column
 * @method array findByOmschrijvingVersienummer(string $omschrijving_versienummer) Return GsVersienummerTabelWcia objects filtered by the omschrijving_versienummer column
 */
abstract class BaseGsVersienummerTabelWciaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsVersienummerTabelWciaQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVersienummerTabelWcia';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsVersienummerTabelWciaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsVersienummerTabelWciaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsVersienummerTabelWciaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsVersienummerTabelWciaQuery) {
            return $criteria;
        }
        $query = new GsVersienummerTabelWciaQuery(null, null, $modelAlias);

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
     * @return   GsVersienummerTabelWcia|GsVersienummerTabelWcia[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsVersienummerTabelWciaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsVersienummerTabelWciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsVersienummerTabelWcia A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByVersienummerVanDeWciaTabellen($key, $con = null)
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
     * @return                 GsVersienummerTabelWcia A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `versienummer_van_de_wcia_tabellen`, `datum_officiele_uitgifte`, `omschrijving_versienummer` FROM `gs_versienummer_tabel_wcia` WHERE `versienummer_van_de_wcia_tabellen` = :p0';
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
            $obj = new GsVersienummerTabelWcia();
            $obj->hydrate($row);
            GsVersienummerTabelWciaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsVersienummerTabelWcia|GsVersienummerTabelWcia[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsVersienummerTabelWcia[]|mixed the list of results, formatted by the current formatter
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
     * @return GsVersienummerTabelWciaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsVersienummerTabelWciaPeer::VERSIENUMMER_VAN_DE_WCIA_TABELLEN, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsVersienummerTabelWciaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsVersienummerTabelWciaPeer::VERSIENUMMER_VAN_DE_WCIA_TABELLEN, $keys, Criteria::IN);
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
     * @return GsVersienummerTabelWciaQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsVersienummerTabelWciaPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsVersienummerTabelWciaPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVersienummerTabelWciaPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsVersienummerTabelWciaQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsVersienummerTabelWciaPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsVersienummerTabelWciaPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVersienummerTabelWciaPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the versienummer_van_de_wcia_tabellen column
     *
     * Example usage:
     * <code>
     * $query->filterByVersienummerVanDeWciaTabellen(1234); // WHERE versienummer_van_de_wcia_tabellen = 1234
     * $query->filterByVersienummerVanDeWciaTabellen(array(12, 34)); // WHERE versienummer_van_de_wcia_tabellen IN (12, 34)
     * $query->filterByVersienummerVanDeWciaTabellen(array('min' => 12)); // WHERE versienummer_van_de_wcia_tabellen >= 12
     * $query->filterByVersienummerVanDeWciaTabellen(array('max' => 12)); // WHERE versienummer_van_de_wcia_tabellen <= 12
     * </code>
     *
     * @param     mixed $versienummerVanDeWciaTabellen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVersienummerTabelWciaQuery The current query, for fluid interface
     */
    public function filterByVersienummerVanDeWciaTabellen($versienummerVanDeWciaTabellen = null, $comparison = null)
    {
        if (is_array($versienummerVanDeWciaTabellen)) {
            $useMinMax = false;
            if (isset($versienummerVanDeWciaTabellen['min'])) {
                $this->addUsingAlias(GsVersienummerTabelWciaPeer::VERSIENUMMER_VAN_DE_WCIA_TABELLEN, $versienummerVanDeWciaTabellen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($versienummerVanDeWciaTabellen['max'])) {
                $this->addUsingAlias(GsVersienummerTabelWciaPeer::VERSIENUMMER_VAN_DE_WCIA_TABELLEN, $versienummerVanDeWciaTabellen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVersienummerTabelWciaPeer::VERSIENUMMER_VAN_DE_WCIA_TABELLEN, $versienummerVanDeWciaTabellen, $comparison);
    }

    /**
     * Filter the query on the datum_officiele_uitgifte column
     *
     * Example usage:
     * <code>
     * $query->filterByDatumOfficieleUitgifte('2011-03-14'); // WHERE datum_officiele_uitgifte = '2011-03-14'
     * $query->filterByDatumOfficieleUitgifte('now'); // WHERE datum_officiele_uitgifte = '2011-03-14'
     * $query->filterByDatumOfficieleUitgifte(array('max' => 'yesterday')); // WHERE datum_officiele_uitgifte < '2011-03-13'
     * </code>
     *
     * @param     mixed $datumOfficieleUitgifte The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVersienummerTabelWciaQuery The current query, for fluid interface
     */
    public function filterByDatumOfficieleUitgifte($datumOfficieleUitgifte = null, $comparison = null)
    {
        if (is_array($datumOfficieleUitgifte)) {
            $useMinMax = false;
            if (isset($datumOfficieleUitgifte['min'])) {
                $this->addUsingAlias(GsVersienummerTabelWciaPeer::DATUM_OFFICIELE_UITGIFTE, $datumOfficieleUitgifte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumOfficieleUitgifte['max'])) {
                $this->addUsingAlias(GsVersienummerTabelWciaPeer::DATUM_OFFICIELE_UITGIFTE, $datumOfficieleUitgifte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsVersienummerTabelWciaPeer::DATUM_OFFICIELE_UITGIFTE, $datumOfficieleUitgifte, $comparison);
    }

    /**
     * Filter the query on the omschrijving_versienummer column
     *
     * Example usage:
     * <code>
     * $query->filterByOmschrijvingVersienummer('fooValue');   // WHERE omschrijving_versienummer = 'fooValue'
     * $query->filterByOmschrijvingVersienummer('%fooValue%'); // WHERE omschrijving_versienummer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $omschrijvingVersienummer The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsVersienummerTabelWciaQuery The current query, for fluid interface
     */
    public function filterByOmschrijvingVersienummer($omschrijvingVersienummer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($omschrijvingVersienummer)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $omschrijvingVersienummer)) {
                $omschrijvingVersienummer = str_replace('*', '%', $omschrijvingVersienummer);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsVersienummerTabelWciaPeer::OMSCHRIJVING_VERSIENUMMER, $omschrijvingVersienummer, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsVersienummerTabelWcia $gsVersienummerTabelWcia Object to remove from the list of results
     *
     * @return GsVersienummerTabelWciaQuery The current query, for fluid interface
     */
    public function prune($gsVersienummerTabelWcia = null)
    {
        if ($gsVersienummerTabelWcia) {
            $this->addUsingAlias(GsVersienummerTabelWciaPeer::VERSIENUMMER_VAN_DE_WCIA_TABELLEN, $gsVersienummerTabelWcia->getVersienummerVanDeWciaTabellen(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
