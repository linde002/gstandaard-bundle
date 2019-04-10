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
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsPreferentieBeleid;
use PharmaIntelligence\GstandaardBundle\Model\GsPreferentieBeleidPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsPreferentieBeleidQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;

/**
 * @method GsPreferentieBeleidQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsPreferentieBeleidQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsPreferentieBeleidQuery orderByZindexNummer($order = Criteria::ASC) Order by the zindex_nummer column
 * @method GsPreferentieBeleidQuery orderByUzoviCodeZorgverzekeraar($order = Criteria::ASC) Order by the uzovi_code_zorgverzekeraar column
 * @method GsPreferentieBeleidQuery orderByThesaurusverwijzingPreferentieStatus($order = Criteria::ASC) Order by the thesaurusverwijzing_preferentie_status column
 * @method GsPreferentieBeleidQuery orderByPreferentieStatus($order = Criteria::ASC) Order by the preferentie_status column
 * @method GsPreferentieBeleidQuery orderByStartdatumPreferentieStatus($order = Criteria::ASC) Order by the startdatum_preferentie_status column
 * @method GsPreferentieBeleidQuery orderByEinddatumPreferentieStatus($order = Criteria::ASC) Order by the einddatum_preferentie_status column
 * @method GsPreferentieBeleidQuery orderByPreferentieClusterCode($order = Criteria::ASC) Order by the preferentie_cluster_code column
 * @method GsPreferentieBeleidQuery orderByPrkcode($order = Criteria::ASC) Order by the prkcode column
 * @method GsPreferentieBeleidQuery orderByHandelsproduktkode($order = Criteria::ASC) Order by the handelsproduktkode column
 *
 * @method GsPreferentieBeleidQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsPreferentieBeleidQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsPreferentieBeleidQuery groupByZindexNummer() Group by the zindex_nummer column
 * @method GsPreferentieBeleidQuery groupByUzoviCodeZorgverzekeraar() Group by the uzovi_code_zorgverzekeraar column
 * @method GsPreferentieBeleidQuery groupByThesaurusverwijzingPreferentieStatus() Group by the thesaurusverwijzing_preferentie_status column
 * @method GsPreferentieBeleidQuery groupByPreferentieStatus() Group by the preferentie_status column
 * @method GsPreferentieBeleidQuery groupByStartdatumPreferentieStatus() Group by the startdatum_preferentie_status column
 * @method GsPreferentieBeleidQuery groupByEinddatumPreferentieStatus() Group by the einddatum_preferentie_status column
 * @method GsPreferentieBeleidQuery groupByPreferentieClusterCode() Group by the preferentie_cluster_code column
 * @method GsPreferentieBeleidQuery groupByPrkcode() Group by the prkcode column
 * @method GsPreferentieBeleidQuery groupByHandelsproduktkode() Group by the handelsproduktkode column
 *
 * @method GsPreferentieBeleidQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsPreferentieBeleidQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsPreferentieBeleidQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsPreferentieBeleidQuery leftJoinPreferentieStatusOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the PreferentieStatusOmschrijving relation
 * @method GsPreferentieBeleidQuery rightJoinPreferentieStatusOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PreferentieStatusOmschrijving relation
 * @method GsPreferentieBeleidQuery innerJoinPreferentieStatusOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the PreferentieStatusOmschrijving relation
 *
 * @method GsPreferentieBeleidQuery leftJoinGsArtikelen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelen relation
 * @method GsPreferentieBeleidQuery rightJoinGsArtikelen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelen relation
 * @method GsPreferentieBeleidQuery innerJoinGsArtikelen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelen relation
 *
 * @method GsPreferentieBeleid findOne(PropelPDO $con = null) Return the first GsPreferentieBeleid matching the query
 * @method GsPreferentieBeleid findOneOrCreate(PropelPDO $con = null) Return the first GsPreferentieBeleid matching the query, or a new GsPreferentieBeleid object populated from the query conditions when no match is found
 *
 * @method GsPreferentieBeleid findOneByBestandnummer(int $bestandnummer) Return the first GsPreferentieBeleid filtered by the bestandnummer column
 * @method GsPreferentieBeleid findOneByMutatiekode(int $mutatiekode) Return the first GsPreferentieBeleid filtered by the mutatiekode column
 * @method GsPreferentieBeleid findOneByZindexNummer(int $zindex_nummer) Return the first GsPreferentieBeleid filtered by the zindex_nummer column
 * @method GsPreferentieBeleid findOneByUzoviCodeZorgverzekeraar(int $uzovi_code_zorgverzekeraar) Return the first GsPreferentieBeleid filtered by the uzovi_code_zorgverzekeraar column
 * @method GsPreferentieBeleid findOneByThesaurusverwijzingPreferentieStatus(int $thesaurusverwijzing_preferentie_status) Return the first GsPreferentieBeleid filtered by the thesaurusverwijzing_preferentie_status column
 * @method GsPreferentieBeleid findOneByPreferentieStatus(int $preferentie_status) Return the first GsPreferentieBeleid filtered by the preferentie_status column
 * @method GsPreferentieBeleid findOneByStartdatumPreferentieStatus(string $startdatum_preferentie_status) Return the first GsPreferentieBeleid filtered by the startdatum_preferentie_status column
 * @method GsPreferentieBeleid findOneByEinddatumPreferentieStatus(string $einddatum_preferentie_status) Return the first GsPreferentieBeleid filtered by the einddatum_preferentie_status column
 * @method GsPreferentieBeleid findOneByPreferentieClusterCode(int $preferentie_cluster_code) Return the first GsPreferentieBeleid filtered by the preferentie_cluster_code column
 * @method GsPreferentieBeleid findOneByPrkcode(int $prkcode) Return the first GsPreferentieBeleid filtered by the prkcode column
 * @method GsPreferentieBeleid findOneByHandelsproduktkode(int $handelsproduktkode) Return the first GsPreferentieBeleid filtered by the handelsproduktkode column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsPreferentieBeleid objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsPreferentieBeleid objects filtered by the mutatiekode column
 * @method array findByZindexNummer(int $zindex_nummer) Return GsPreferentieBeleid objects filtered by the zindex_nummer column
 * @method array findByUzoviCodeZorgverzekeraar(int $uzovi_code_zorgverzekeraar) Return GsPreferentieBeleid objects filtered by the uzovi_code_zorgverzekeraar column
 * @method array findByThesaurusverwijzingPreferentieStatus(int $thesaurusverwijzing_preferentie_status) Return GsPreferentieBeleid objects filtered by the thesaurusverwijzing_preferentie_status column
 * @method array findByPreferentieStatus(int $preferentie_status) Return GsPreferentieBeleid objects filtered by the preferentie_status column
 * @method array findByStartdatumPreferentieStatus(string $startdatum_preferentie_status) Return GsPreferentieBeleid objects filtered by the startdatum_preferentie_status column
 * @method array findByEinddatumPreferentieStatus(string $einddatum_preferentie_status) Return GsPreferentieBeleid objects filtered by the einddatum_preferentie_status column
 * @method array findByPreferentieClusterCode(int $preferentie_cluster_code) Return GsPreferentieBeleid objects filtered by the preferentie_cluster_code column
 * @method array findByPrkcode(int $prkcode) Return GsPreferentieBeleid objects filtered by the prkcode column
 * @method array findByHandelsproduktkode(int $handelsproduktkode) Return GsPreferentieBeleid objects filtered by the handelsproduktkode column
 */
abstract class BaseGsPreferentieBeleidQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsPreferentieBeleidQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPreferentieBeleid';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsPreferentieBeleidQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsPreferentieBeleidQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsPreferentieBeleidQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsPreferentieBeleidQuery) {
            return $criteria;
        }
        $query = new GsPreferentieBeleidQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$zindex_nummer, $uzovi_code_zorgverzekeraar, $startdatum_preferentie_status, $einddatum_preferentie_status]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsPreferentieBeleid|GsPreferentieBeleid[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsPreferentieBeleidPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsPreferentieBeleidPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsPreferentieBeleid A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `zindex_nummer`, `uzovi_code_zorgverzekeraar`, `thesaurusverwijzing_preferentie_status`, `preferentie_status`, `startdatum_preferentie_status`, `einddatum_preferentie_status`, `preferentie_cluster_code`, `prkcode`, `handelsproduktkode` FROM `gs_preferentie_beleid` WHERE `zindex_nummer` = :p0 AND `uzovi_code_zorgverzekeraar` = :p1 AND `startdatum_preferentie_status` = :p2 AND `einddatum_preferentie_status` = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsPreferentieBeleid();
            $obj->hydrate($row);
            GsPreferentieBeleidPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3])));
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
     * @return GsPreferentieBeleid|GsPreferentieBeleid[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsPreferentieBeleid[]|mixed the list of results, formatted by the current formatter
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
     * @return GsPreferentieBeleidQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsPreferentieBeleidPeer::ZINDEX_NUMMER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsPreferentieBeleidQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsPreferentieBeleidPeer::ZINDEX_NUMMER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS, $key[3], Criteria::EQUAL);
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
     * @return GsPreferentieBeleidQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPreferentieBeleidPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsPreferentieBeleidQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPreferentieBeleidPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the zindex_nummer column
     *
     * Example usage:
     * <code>
     * $query->filterByZindexNummer(1234); // WHERE zindex_nummer = 1234
     * $query->filterByZindexNummer(array(12, 34)); // WHERE zindex_nummer IN (12, 34)
     * $query->filterByZindexNummer(array('min' => 12)); // WHERE zindex_nummer >= 12
     * $query->filterByZindexNummer(array('max' => 12)); // WHERE zindex_nummer <= 12
     * </code>
     *
     * @see       filterByGsArtikelen()
     *
     * @param     mixed $zindexNummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPreferentieBeleidQuery The current query, for fluid interface
     */
    public function filterByZindexNummer($zindexNummer = null, $comparison = null)
    {
        if (is_array($zindexNummer)) {
            $useMinMax = false;
            if (isset($zindexNummer['min'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::ZINDEX_NUMMER, $zindexNummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zindexNummer['max'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::ZINDEX_NUMMER, $zindexNummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPreferentieBeleidPeer::ZINDEX_NUMMER, $zindexNummer, $comparison);
    }

    /**
     * Filter the query on the uzovi_code_zorgverzekeraar column
     *
     * Example usage:
     * <code>
     * $query->filterByUzoviCodeZorgverzekeraar(1234); // WHERE uzovi_code_zorgverzekeraar = 1234
     * $query->filterByUzoviCodeZorgverzekeraar(array(12, 34)); // WHERE uzovi_code_zorgverzekeraar IN (12, 34)
     * $query->filterByUzoviCodeZorgverzekeraar(array('min' => 12)); // WHERE uzovi_code_zorgverzekeraar >= 12
     * $query->filterByUzoviCodeZorgverzekeraar(array('max' => 12)); // WHERE uzovi_code_zorgverzekeraar <= 12
     * </code>
     *
     * @param     mixed $uzoviCodeZorgverzekeraar The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPreferentieBeleidQuery The current query, for fluid interface
     */
    public function filterByUzoviCodeZorgverzekeraar($uzoviCodeZorgverzekeraar = null, $comparison = null)
    {
        if (is_array($uzoviCodeZorgverzekeraar)) {
            $useMinMax = false;
            if (isset($uzoviCodeZorgverzekeraar['min'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR, $uzoviCodeZorgverzekeraar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uzoviCodeZorgverzekeraar['max'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR, $uzoviCodeZorgverzekeraar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR, $uzoviCodeZorgverzekeraar, $comparison);
    }

    /**
     * Filter the query on the thesaurusverwijzing_preferentie_status column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusverwijzingPreferentieStatus(1234); // WHERE thesaurusverwijzing_preferentie_status = 1234
     * $query->filterByThesaurusverwijzingPreferentieStatus(array(12, 34)); // WHERE thesaurusverwijzing_preferentie_status IN (12, 34)
     * $query->filterByThesaurusverwijzingPreferentieStatus(array('min' => 12)); // WHERE thesaurusverwijzing_preferentie_status >= 12
     * $query->filterByThesaurusverwijzingPreferentieStatus(array('max' => 12)); // WHERE thesaurusverwijzing_preferentie_status <= 12
     * </code>
     *
     * @see       filterByPreferentieStatusOmschrijving()
     *
     * @param     mixed $thesaurusverwijzingPreferentieStatus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPreferentieBeleidQuery The current query, for fluid interface
     */
    public function filterByThesaurusverwijzingPreferentieStatus($thesaurusverwijzingPreferentieStatus = null, $comparison = null)
    {
        if (is_array($thesaurusverwijzingPreferentieStatus)) {
            $useMinMax = false;
            if (isset($thesaurusverwijzingPreferentieStatus['min'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::THESAURUSVERWIJZING_PREFERENTIE_STATUS, $thesaurusverwijzingPreferentieStatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusverwijzingPreferentieStatus['max'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::THESAURUSVERWIJZING_PREFERENTIE_STATUS, $thesaurusverwijzingPreferentieStatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPreferentieBeleidPeer::THESAURUSVERWIJZING_PREFERENTIE_STATUS, $thesaurusverwijzingPreferentieStatus, $comparison);
    }

    /**
     * Filter the query on the preferentie_status column
     *
     * Example usage:
     * <code>
     * $query->filterByPreferentieStatus(1234); // WHERE preferentie_status = 1234
     * $query->filterByPreferentieStatus(array(12, 34)); // WHERE preferentie_status IN (12, 34)
     * $query->filterByPreferentieStatus(array('min' => 12)); // WHERE preferentie_status >= 12
     * $query->filterByPreferentieStatus(array('max' => 12)); // WHERE preferentie_status <= 12
     * </code>
     *
     * @see       filterByPreferentieStatusOmschrijving()
     *
     * @param     mixed $preferentieStatus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPreferentieBeleidQuery The current query, for fluid interface
     */
    public function filterByPreferentieStatus($preferentieStatus = null, $comparison = null)
    {
        if (is_array($preferentieStatus)) {
            $useMinMax = false;
            if (isset($preferentieStatus['min'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::PREFERENTIE_STATUS, $preferentieStatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preferentieStatus['max'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::PREFERENTIE_STATUS, $preferentieStatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPreferentieBeleidPeer::PREFERENTIE_STATUS, $preferentieStatus, $comparison);
    }

    /**
     * Filter the query on the startdatum_preferentie_status column
     *
     * Example usage:
     * <code>
     * $query->filterByStartdatumPreferentieStatus('2011-03-14'); // WHERE startdatum_preferentie_status = '2011-03-14'
     * $query->filterByStartdatumPreferentieStatus('now'); // WHERE startdatum_preferentie_status = '2011-03-14'
     * $query->filterByStartdatumPreferentieStatus(array('max' => 'yesterday')); // WHERE startdatum_preferentie_status < '2011-03-13'
     * </code>
     *
     * @param     mixed $startdatumPreferentieStatus The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPreferentieBeleidQuery The current query, for fluid interface
     */
    public function filterByStartdatumPreferentieStatus($startdatumPreferentieStatus = null, $comparison = null)
    {
        if (is_array($startdatumPreferentieStatus)) {
            $useMinMax = false;
            if (isset($startdatumPreferentieStatus['min'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS, $startdatumPreferentieStatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($startdatumPreferentieStatus['max'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS, $startdatumPreferentieStatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS, $startdatumPreferentieStatus, $comparison);
    }

    /**
     * Filter the query on the einddatum_preferentie_status column
     *
     * Example usage:
     * <code>
     * $query->filterByEinddatumPreferentieStatus('2011-03-14'); // WHERE einddatum_preferentie_status = '2011-03-14'
     * $query->filterByEinddatumPreferentieStatus('now'); // WHERE einddatum_preferentie_status = '2011-03-14'
     * $query->filterByEinddatumPreferentieStatus(array('max' => 'yesterday')); // WHERE einddatum_preferentie_status < '2011-03-13'
     * </code>
     *
     * @param     mixed $einddatumPreferentieStatus The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPreferentieBeleidQuery The current query, for fluid interface
     */
    public function filterByEinddatumPreferentieStatus($einddatumPreferentieStatus = null, $comparison = null)
    {
        if (is_array($einddatumPreferentieStatus)) {
            $useMinMax = false;
            if (isset($einddatumPreferentieStatus['min'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS, $einddatumPreferentieStatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($einddatumPreferentieStatus['max'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS, $einddatumPreferentieStatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS, $einddatumPreferentieStatus, $comparison);
    }

    /**
     * Filter the query on the preferentie_cluster_code column
     *
     * Example usage:
     * <code>
     * $query->filterByPreferentieClusterCode(1234); // WHERE preferentie_cluster_code = 1234
     * $query->filterByPreferentieClusterCode(array(12, 34)); // WHERE preferentie_cluster_code IN (12, 34)
     * $query->filterByPreferentieClusterCode(array('min' => 12)); // WHERE preferentie_cluster_code >= 12
     * $query->filterByPreferentieClusterCode(array('max' => 12)); // WHERE preferentie_cluster_code <= 12
     * </code>
     *
     * @param     mixed $preferentieClusterCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPreferentieBeleidQuery The current query, for fluid interface
     */
    public function filterByPreferentieClusterCode($preferentieClusterCode = null, $comparison = null)
    {
        if (is_array($preferentieClusterCode)) {
            $useMinMax = false;
            if (isset($preferentieClusterCode['min'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::PREFERENTIE_CLUSTER_CODE, $preferentieClusterCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preferentieClusterCode['max'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::PREFERENTIE_CLUSTER_CODE, $preferentieClusterCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPreferentieBeleidPeer::PREFERENTIE_CLUSTER_CODE, $preferentieClusterCode, $comparison);
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
     * @return GsPreferentieBeleidQuery The current query, for fluid interface
     */
    public function filterByPrkcode($prkcode = null, $comparison = null)
    {
        if (is_array($prkcode)) {
            $useMinMax = false;
            if (isset($prkcode['min'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::PRKCODE, $prkcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prkcode['max'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::PRKCODE, $prkcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPreferentieBeleidPeer::PRKCODE, $prkcode, $comparison);
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
     * @return GsPreferentieBeleidQuery The current query, for fluid interface
     */
    public function filterByHandelsproduktkode($handelsproduktkode = null, $comparison = null)
    {
        if (is_array($handelsproduktkode)) {
            $useMinMax = false;
            if (isset($handelsproduktkode['min'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::HANDELSPRODUKTKODE, $handelsproduktkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($handelsproduktkode['max'])) {
                $this->addUsingAlias(GsPreferentieBeleidPeer::HANDELSPRODUKTKODE, $handelsproduktkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPreferentieBeleidPeer::HANDELSPRODUKTKODE, $handelsproduktkode, $comparison);
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsPreferentieBeleidQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPreferentieStatusOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsPreferentieBeleidPeer::THESAURUSVERWIJZING_PREFERENTIE_STATUS, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsPreferentieBeleidPeer::PREFERENTIE_STATUS, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByPreferentieStatusOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PreferentieStatusOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsPreferentieBeleidQuery The current query, for fluid interface
     */
    public function joinPreferentieStatusOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PreferentieStatusOmschrijving');

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
            $this->addJoinObject($join, 'PreferentieStatusOmschrijving');
        }

        return $this;
    }

    /**
     * Use the PreferentieStatusOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function usePreferentieStatusOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPreferentieStatusOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PreferentieStatusOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsPreferentieBeleidQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelen($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsPreferentieBeleidPeer::ZINDEX_NUMMER, $gsArtikelen->getZinummer(), $comparison);
        } elseif ($gsArtikelen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsPreferentieBeleidPeer::ZINDEX_NUMMER, $gsArtikelen->toKeyValue('PrimaryKey', 'Zinummer'), $comparison);
        } else {
            throw new PropelException('filterByGsArtikelen() only accepts arguments of type GsArtikelen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsArtikelen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsPreferentieBeleidQuery The current query, for fluid interface
     */
    public function joinGsArtikelen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsArtikelen');

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
            $this->addJoinObject($join, 'GsArtikelen');
        }

        return $this;
    }

    /**
     * Use the GsArtikelen relation GsArtikelen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery A secondary query class using the current class as primary query
     */
    public function useGsArtikelenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsArtikelen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelen', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsPreferentieBeleid $gsPreferentieBeleid Object to remove from the list of results
     *
     * @return GsPreferentieBeleidQuery The current query, for fluid interface
     */
    public function prune($gsPreferentieBeleid = null)
    {
        if ($gsPreferentieBeleid) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsPreferentieBeleidPeer::ZINDEX_NUMMER), $gsPreferentieBeleid->getZindexNummer(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsPreferentieBeleidPeer::UZOVI_CODE_ZORGVERZEKERAAR), $gsPreferentieBeleid->getUzoviCodeZorgverzekeraar(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsPreferentieBeleidPeer::STARTDATUM_PREFERENTIE_STATUS), $gsPreferentieBeleid->getStartdatumPreferentieStatus(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(GsPreferentieBeleidPeer::EINDDATUM_PREFERENTIE_STATUS), $gsPreferentieBeleid->getEinddatumPreferentieStatus(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
