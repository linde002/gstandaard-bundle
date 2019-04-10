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
use PharmaIntelligence\GstandaardBundle\Model\GsTekstblokkenHtml;
use PharmaIntelligence\GstandaardBundle\Model\GsTekstblokkenHtmlPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsTekstblokkenHtmlQuery;

/**
 * @method GsTekstblokkenHtmlQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsTekstblokkenHtmlQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsTekstblokkenHtmlQuery orderByThesaurusVerwijzingTekstmodule($order = Criteria::ASC) Order by the thesaurus_verwijzing_tekstmodule column
 * @method GsTekstblokkenHtmlQuery orderByTekstmodule($order = Criteria::ASC) Order by the tekstmodule column
 * @method GsTekstblokkenHtmlQuery orderByThesaurusVerwijzingTekstsoort($order = Criteria::ASC) Order by the thesaurus_verwijzing_tekstsoort column
 * @method GsTekstblokkenHtmlQuery orderByTekstsoort($order = Criteria::ASC) Order by the tekstsoort column
 * @method GsTekstblokkenHtmlQuery orderByTekstNivoKode($order = Criteria::ASC) Order by the tekst_nivo_kode column
 * @method GsTekstblokkenHtmlQuery orderByTekstbloknummer($order = Criteria::ASC) Order by the tekstbloknummer column
 * @method GsTekstblokkenHtmlQuery orderByTekstregelnummer($order = Criteria::ASC) Order by the tekstregelnummer column
 * @method GsTekstblokkenHtmlQuery orderByTekst($order = Criteria::ASC) Order by the tekst column
 *
 * @method GsTekstblokkenHtmlQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsTekstblokkenHtmlQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsTekstblokkenHtmlQuery groupByThesaurusVerwijzingTekstmodule() Group by the thesaurus_verwijzing_tekstmodule column
 * @method GsTekstblokkenHtmlQuery groupByTekstmodule() Group by the tekstmodule column
 * @method GsTekstblokkenHtmlQuery groupByThesaurusVerwijzingTekstsoort() Group by the thesaurus_verwijzing_tekstsoort column
 * @method GsTekstblokkenHtmlQuery groupByTekstsoort() Group by the tekstsoort column
 * @method GsTekstblokkenHtmlQuery groupByTekstNivoKode() Group by the tekst_nivo_kode column
 * @method GsTekstblokkenHtmlQuery groupByTekstbloknummer() Group by the tekstbloknummer column
 * @method GsTekstblokkenHtmlQuery groupByTekstregelnummer() Group by the tekstregelnummer column
 * @method GsTekstblokkenHtmlQuery groupByTekst() Group by the tekst column
 *
 * @method GsTekstblokkenHtmlQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsTekstblokkenHtmlQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsTekstblokkenHtmlQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsTekstblokkenHtml findOne(PropelPDO $con = null) Return the first GsTekstblokkenHtml matching the query
 * @method GsTekstblokkenHtml findOneOrCreate(PropelPDO $con = null) Return the first GsTekstblokkenHtml matching the query, or a new GsTekstblokkenHtml object populated from the query conditions when no match is found
 *
 * @method GsTekstblokkenHtml findOneByBestandnummer(int $bestandnummer) Return the first GsTekstblokkenHtml filtered by the bestandnummer column
 * @method GsTekstblokkenHtml findOneByMutatiekode(int $mutatiekode) Return the first GsTekstblokkenHtml filtered by the mutatiekode column
 * @method GsTekstblokkenHtml findOneByThesaurusVerwijzingTekstmodule(int $thesaurus_verwijzing_tekstmodule) Return the first GsTekstblokkenHtml filtered by the thesaurus_verwijzing_tekstmodule column
 * @method GsTekstblokkenHtml findOneByTekstmodule(int $tekstmodule) Return the first GsTekstblokkenHtml filtered by the tekstmodule column
 * @method GsTekstblokkenHtml findOneByThesaurusVerwijzingTekstsoort(int $thesaurus_verwijzing_tekstsoort) Return the first GsTekstblokkenHtml filtered by the thesaurus_verwijzing_tekstsoort column
 * @method GsTekstblokkenHtml findOneByTekstsoort(int $tekstsoort) Return the first GsTekstblokkenHtml filtered by the tekstsoort column
 * @method GsTekstblokkenHtml findOneByTekstNivoKode(int $tekst_nivo_kode) Return the first GsTekstblokkenHtml filtered by the tekst_nivo_kode column
 * @method GsTekstblokkenHtml findOneByTekstbloknummer(int $tekstbloknummer) Return the first GsTekstblokkenHtml filtered by the tekstbloknummer column
 * @method GsTekstblokkenHtml findOneByTekstregelnummer(int $tekstregelnummer) Return the first GsTekstblokkenHtml filtered by the tekstregelnummer column
 * @method GsTekstblokkenHtml findOneByTekst(string $tekst) Return the first GsTekstblokkenHtml filtered by the tekst column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsTekstblokkenHtml objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsTekstblokkenHtml objects filtered by the mutatiekode column
 * @method array findByThesaurusVerwijzingTekstmodule(int $thesaurus_verwijzing_tekstmodule) Return GsTekstblokkenHtml objects filtered by the thesaurus_verwijzing_tekstmodule column
 * @method array findByTekstmodule(int $tekstmodule) Return GsTekstblokkenHtml objects filtered by the tekstmodule column
 * @method array findByThesaurusVerwijzingTekstsoort(int $thesaurus_verwijzing_tekstsoort) Return GsTekstblokkenHtml objects filtered by the thesaurus_verwijzing_tekstsoort column
 * @method array findByTekstsoort(int $tekstsoort) Return GsTekstblokkenHtml objects filtered by the tekstsoort column
 * @method array findByTekstNivoKode(int $tekst_nivo_kode) Return GsTekstblokkenHtml objects filtered by the tekst_nivo_kode column
 * @method array findByTekstbloknummer(int $tekstbloknummer) Return GsTekstblokkenHtml objects filtered by the tekstbloknummer column
 * @method array findByTekstregelnummer(int $tekstregelnummer) Return GsTekstblokkenHtml objects filtered by the tekstregelnummer column
 * @method array findByTekst(string $tekst) Return GsTekstblokkenHtml objects filtered by the tekst column
 */
abstract class BaseGsTekstblokkenHtmlQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsTekstblokkenHtmlQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsTekstblokkenHtml';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsTekstblokkenHtmlQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsTekstblokkenHtmlQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsTekstblokkenHtmlQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsTekstblokkenHtmlQuery) {
            return $criteria;
        }
        $query = new GsTekstblokkenHtmlQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56, 78, 91), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$tekstmodule, $tekstsoort, $tekst_nivo_kode, $tekstbloknummer, $tekstregelnummer]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsTekstblokkenHtml|GsTekstblokkenHtml[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsTekstblokkenHtmlPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsTekstblokkenHtmlPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsTekstblokkenHtml A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `thesaurus_verwijzing_tekstmodule`, `tekstmodule`, `thesaurus_verwijzing_tekstsoort`, `tekstsoort`, `tekst_nivo_kode`, `tekstbloknummer`, `tekstregelnummer`, `tekst` FROM `gs_tekstblokken_html` WHERE `tekstmodule` = :p0 AND `tekstsoort` = :p1 AND `tekst_nivo_kode` = :p2 AND `tekstbloknummer` = :p3 AND `tekstregelnummer` = :p4';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsTekstblokkenHtml();
            $obj->hydrate($row);
            GsTekstblokkenHtmlPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4])));
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
     * @return GsTekstblokkenHtml|GsTekstblokkenHtml[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsTekstblokkenHtml[]|mixed the list of results, formatted by the current formatter
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
     * @return GsTekstblokkenHtmlQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKSTMODULE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKSTSOORT, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKST_NIVO_KODE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKSTBLOKNUMMER, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKSTREGELNUMMER, $key[4], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsTekstblokkenHtmlQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsTekstblokkenHtmlPeer::TEKSTMODULE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsTekstblokkenHtmlPeer::TEKSTSOORT, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsTekstblokkenHtmlPeer::TEKST_NIVO_KODE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(GsTekstblokkenHtmlPeer::TEKSTBLOKNUMMER, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(GsTekstblokkenHtmlPeer::TEKSTREGELNUMMER, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
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
     * @return GsTekstblokkenHtmlQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsTekstblokkenHtmlPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsTekstblokkenHtmlPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstblokkenHtmlPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsTekstblokkenHtmlQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsTekstblokkenHtmlPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsTekstblokkenHtmlPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstblokkenHtmlPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the thesaurus_verwijzing_tekstmodule column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusVerwijzingTekstmodule(1234); // WHERE thesaurus_verwijzing_tekstmodule = 1234
     * $query->filterByThesaurusVerwijzingTekstmodule(array(12, 34)); // WHERE thesaurus_verwijzing_tekstmodule IN (12, 34)
     * $query->filterByThesaurusVerwijzingTekstmodule(array('min' => 12)); // WHERE thesaurus_verwijzing_tekstmodule >= 12
     * $query->filterByThesaurusVerwijzingTekstmodule(array('max' => 12)); // WHERE thesaurus_verwijzing_tekstmodule <= 12
     * </code>
     *
     * @param     mixed $thesaurusVerwijzingTekstmodule The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsTekstblokkenHtmlQuery The current query, for fluid interface
     */
    public function filterByThesaurusVerwijzingTekstmodule($thesaurusVerwijzingTekstmodule = null, $comparison = null)
    {
        if (is_array($thesaurusVerwijzingTekstmodule)) {
            $useMinMax = false;
            if (isset($thesaurusVerwijzingTekstmodule['min'])) {
                $this->addUsingAlias(GsTekstblokkenHtmlPeer::THESAURUS_VERWIJZING_TEKSTMODULE, $thesaurusVerwijzingTekstmodule['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusVerwijzingTekstmodule['max'])) {
                $this->addUsingAlias(GsTekstblokkenHtmlPeer::THESAURUS_VERWIJZING_TEKSTMODULE, $thesaurusVerwijzingTekstmodule['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstblokkenHtmlPeer::THESAURUS_VERWIJZING_TEKSTMODULE, $thesaurusVerwijzingTekstmodule, $comparison);
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
     * @return GsTekstblokkenHtmlQuery The current query, for fluid interface
     */
    public function filterByTekstmodule($tekstmodule = null, $comparison = null)
    {
        if (is_array($tekstmodule)) {
            $useMinMax = false;
            if (isset($tekstmodule['min'])) {
                $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKSTMODULE, $tekstmodule['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstmodule['max'])) {
                $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKSTMODULE, $tekstmodule['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKSTMODULE, $tekstmodule, $comparison);
    }

    /**
     * Filter the query on the thesaurus_verwijzing_tekstsoort column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusVerwijzingTekstsoort(1234); // WHERE thesaurus_verwijzing_tekstsoort = 1234
     * $query->filterByThesaurusVerwijzingTekstsoort(array(12, 34)); // WHERE thesaurus_verwijzing_tekstsoort IN (12, 34)
     * $query->filterByThesaurusVerwijzingTekstsoort(array('min' => 12)); // WHERE thesaurus_verwijzing_tekstsoort >= 12
     * $query->filterByThesaurusVerwijzingTekstsoort(array('max' => 12)); // WHERE thesaurus_verwijzing_tekstsoort <= 12
     * </code>
     *
     * @param     mixed $thesaurusVerwijzingTekstsoort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsTekstblokkenHtmlQuery The current query, for fluid interface
     */
    public function filterByThesaurusVerwijzingTekstsoort($thesaurusVerwijzingTekstsoort = null, $comparison = null)
    {
        if (is_array($thesaurusVerwijzingTekstsoort)) {
            $useMinMax = false;
            if (isset($thesaurusVerwijzingTekstsoort['min'])) {
                $this->addUsingAlias(GsTekstblokkenHtmlPeer::THESAURUS_VERWIJZING_TEKSTSOORT, $thesaurusVerwijzingTekstsoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusVerwijzingTekstsoort['max'])) {
                $this->addUsingAlias(GsTekstblokkenHtmlPeer::THESAURUS_VERWIJZING_TEKSTSOORT, $thesaurusVerwijzingTekstsoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstblokkenHtmlPeer::THESAURUS_VERWIJZING_TEKSTSOORT, $thesaurusVerwijzingTekstsoort, $comparison);
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
     * @return GsTekstblokkenHtmlQuery The current query, for fluid interface
     */
    public function filterByTekstsoort($tekstsoort = null, $comparison = null)
    {
        if (is_array($tekstsoort)) {
            $useMinMax = false;
            if (isset($tekstsoort['min'])) {
                $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKSTSOORT, $tekstsoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstsoort['max'])) {
                $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKSTSOORT, $tekstsoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKSTSOORT, $tekstsoort, $comparison);
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
     * @return GsTekstblokkenHtmlQuery The current query, for fluid interface
     */
    public function filterByTekstNivoKode($tekstNivoKode = null, $comparison = null)
    {
        if (is_array($tekstNivoKode)) {
            $useMinMax = false;
            if (isset($tekstNivoKode['min'])) {
                $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKST_NIVO_KODE, $tekstNivoKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstNivoKode['max'])) {
                $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKST_NIVO_KODE, $tekstNivoKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKST_NIVO_KODE, $tekstNivoKode, $comparison);
    }

    /**
     * Filter the query on the tekstbloknummer column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstbloknummer(1234); // WHERE tekstbloknummer = 1234
     * $query->filterByTekstbloknummer(array(12, 34)); // WHERE tekstbloknummer IN (12, 34)
     * $query->filterByTekstbloknummer(array('min' => 12)); // WHERE tekstbloknummer >= 12
     * $query->filterByTekstbloknummer(array('max' => 12)); // WHERE tekstbloknummer <= 12
     * </code>
     *
     * @param     mixed $tekstbloknummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsTekstblokkenHtmlQuery The current query, for fluid interface
     */
    public function filterByTekstbloknummer($tekstbloknummer = null, $comparison = null)
    {
        if (is_array($tekstbloknummer)) {
            $useMinMax = false;
            if (isset($tekstbloknummer['min'])) {
                $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKSTBLOKNUMMER, $tekstbloknummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstbloknummer['max'])) {
                $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKSTBLOKNUMMER, $tekstbloknummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKSTBLOKNUMMER, $tekstbloknummer, $comparison);
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
     * @return GsTekstblokkenHtmlQuery The current query, for fluid interface
     */
    public function filterByTekstregelnummer($tekstregelnummer = null, $comparison = null)
    {
        if (is_array($tekstregelnummer)) {
            $useMinMax = false;
            if (isset($tekstregelnummer['min'])) {
                $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKSTREGELNUMMER, $tekstregelnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstregelnummer['max'])) {
                $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKSTREGELNUMMER, $tekstregelnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKSTREGELNUMMER, $tekstregelnummer, $comparison);
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
     * @return GsTekstblokkenHtmlQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GsTekstblokkenHtmlPeer::TEKST, $tekst, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsTekstblokkenHtml $gsTekstblokkenHtml Object to remove from the list of results
     *
     * @return GsTekstblokkenHtmlQuery The current query, for fluid interface
     */
    public function prune($gsTekstblokkenHtml = null)
    {
        if ($gsTekstblokkenHtml) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsTekstblokkenHtmlPeer::TEKSTMODULE), $gsTekstblokkenHtml->getTekstmodule(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsTekstblokkenHtmlPeer::TEKSTSOORT), $gsTekstblokkenHtml->getTekstsoort(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsTekstblokkenHtmlPeer::TEKST_NIVO_KODE), $gsTekstblokkenHtml->getTekstNivoKode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(GsTekstblokkenHtmlPeer::TEKSTBLOKNUMMER), $gsTekstblokkenHtml->getTekstbloknummer(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(GsTekstblokkenHtmlPeer::TEKSTREGELNUMMER), $gsTekstblokkenHtml->getTekstregelnummer(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
