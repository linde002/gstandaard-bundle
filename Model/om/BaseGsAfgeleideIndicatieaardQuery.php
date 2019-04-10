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
use PharmaIntelligence\GstandaardBundle\Model\GsAfgeleideIndicatieaard;
use PharmaIntelligence\GstandaardBundle\Model\GsAfgeleideIndicatieaardPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsAfgeleideIndicatieaardQuery;

/**
 * @method GsAfgeleideIndicatieaardQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsAfgeleideIndicatieaardQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsAfgeleideIndicatieaardQuery orderByAtccode($order = Criteria::ASC) Order by the atccode column
 * @method GsAfgeleideIndicatieaardQuery orderByThesaurusverwijzingIndicatie($order = Criteria::ASC) Order by the thesaurusverwijzing_indicatie column
 * @method GsAfgeleideIndicatieaardQuery orderByIndicatieAard($order = Criteria::ASC) Order by the indicatie_aard column
 * @method GsAfgeleideIndicatieaardQuery orderByThesaurusverwijzingHardheidAfleiding($order = Criteria::ASC) Order by the thesaurusverwijzing_hardheid_afleiding column
 * @method GsAfgeleideIndicatieaardQuery orderByHardheidAfleiding($order = Criteria::ASC) Order by the hardheid_afleiding column
 * @method GsAfgeleideIndicatieaardQuery orderByThesaurusverwijzingTekstmodule($order = Criteria::ASC) Order by the thesaurusverwijzing_tekstmodule column
 * @method GsAfgeleideIndicatieaardQuery orderByTekstmodule($order = Criteria::ASC) Order by the tekstmodule column
 * @method GsAfgeleideIndicatieaardQuery orderByThesaurusverwijzingTekstsoort($order = Criteria::ASC) Order by the thesaurusverwijzing_tekstsoort column
 * @method GsAfgeleideIndicatieaardQuery orderByTekstsoort($order = Criteria::ASC) Order by the tekstsoort column
 * @method GsAfgeleideIndicatieaardQuery orderByTekstNivoKode($order = Criteria::ASC) Order by the tekst_nivo_kode column
 *
 * @method GsAfgeleideIndicatieaardQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsAfgeleideIndicatieaardQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsAfgeleideIndicatieaardQuery groupByAtccode() Group by the atccode column
 * @method GsAfgeleideIndicatieaardQuery groupByThesaurusverwijzingIndicatie() Group by the thesaurusverwijzing_indicatie column
 * @method GsAfgeleideIndicatieaardQuery groupByIndicatieAard() Group by the indicatie_aard column
 * @method GsAfgeleideIndicatieaardQuery groupByThesaurusverwijzingHardheidAfleiding() Group by the thesaurusverwijzing_hardheid_afleiding column
 * @method GsAfgeleideIndicatieaardQuery groupByHardheidAfleiding() Group by the hardheid_afleiding column
 * @method GsAfgeleideIndicatieaardQuery groupByThesaurusverwijzingTekstmodule() Group by the thesaurusverwijzing_tekstmodule column
 * @method GsAfgeleideIndicatieaardQuery groupByTekstmodule() Group by the tekstmodule column
 * @method GsAfgeleideIndicatieaardQuery groupByThesaurusverwijzingTekstsoort() Group by the thesaurusverwijzing_tekstsoort column
 * @method GsAfgeleideIndicatieaardQuery groupByTekstsoort() Group by the tekstsoort column
 * @method GsAfgeleideIndicatieaardQuery groupByTekstNivoKode() Group by the tekst_nivo_kode column
 *
 * @method GsAfgeleideIndicatieaardQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsAfgeleideIndicatieaardQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsAfgeleideIndicatieaardQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsAfgeleideIndicatieaard findOne(PropelPDO $con = null) Return the first GsAfgeleideIndicatieaard matching the query
 * @method GsAfgeleideIndicatieaard findOneOrCreate(PropelPDO $con = null) Return the first GsAfgeleideIndicatieaard matching the query, or a new GsAfgeleideIndicatieaard object populated from the query conditions when no match is found
 *
 * @method GsAfgeleideIndicatieaard findOneByBestandnummer(int $bestandnummer) Return the first GsAfgeleideIndicatieaard filtered by the bestandnummer column
 * @method GsAfgeleideIndicatieaard findOneByMutatiekode(int $mutatiekode) Return the first GsAfgeleideIndicatieaard filtered by the mutatiekode column
 * @method GsAfgeleideIndicatieaard findOneByAtccode(string $atccode) Return the first GsAfgeleideIndicatieaard filtered by the atccode column
 * @method GsAfgeleideIndicatieaard findOneByThesaurusverwijzingIndicatie(int $thesaurusverwijzing_indicatie) Return the first GsAfgeleideIndicatieaard filtered by the thesaurusverwijzing_indicatie column
 * @method GsAfgeleideIndicatieaard findOneByIndicatieAard(int $indicatie_aard) Return the first GsAfgeleideIndicatieaard filtered by the indicatie_aard column
 * @method GsAfgeleideIndicatieaard findOneByThesaurusverwijzingHardheidAfleiding(int $thesaurusverwijzing_hardheid_afleiding) Return the first GsAfgeleideIndicatieaard filtered by the thesaurusverwijzing_hardheid_afleiding column
 * @method GsAfgeleideIndicatieaard findOneByHardheidAfleiding(int $hardheid_afleiding) Return the first GsAfgeleideIndicatieaard filtered by the hardheid_afleiding column
 * @method GsAfgeleideIndicatieaard findOneByThesaurusverwijzingTekstmodule(int $thesaurusverwijzing_tekstmodule) Return the first GsAfgeleideIndicatieaard filtered by the thesaurusverwijzing_tekstmodule column
 * @method GsAfgeleideIndicatieaard findOneByTekstmodule(int $tekstmodule) Return the first GsAfgeleideIndicatieaard filtered by the tekstmodule column
 * @method GsAfgeleideIndicatieaard findOneByThesaurusverwijzingTekstsoort(int $thesaurusverwijzing_tekstsoort) Return the first GsAfgeleideIndicatieaard filtered by the thesaurusverwijzing_tekstsoort column
 * @method GsAfgeleideIndicatieaard findOneByTekstsoort(int $tekstsoort) Return the first GsAfgeleideIndicatieaard filtered by the tekstsoort column
 * @method GsAfgeleideIndicatieaard findOneByTekstNivoKode(int $tekst_nivo_kode) Return the first GsAfgeleideIndicatieaard filtered by the tekst_nivo_kode column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsAfgeleideIndicatieaard objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsAfgeleideIndicatieaard objects filtered by the mutatiekode column
 * @method array findByAtccode(string $atccode) Return GsAfgeleideIndicatieaard objects filtered by the atccode column
 * @method array findByThesaurusverwijzingIndicatie(int $thesaurusverwijzing_indicatie) Return GsAfgeleideIndicatieaard objects filtered by the thesaurusverwijzing_indicatie column
 * @method array findByIndicatieAard(int $indicatie_aard) Return GsAfgeleideIndicatieaard objects filtered by the indicatie_aard column
 * @method array findByThesaurusverwijzingHardheidAfleiding(int $thesaurusverwijzing_hardheid_afleiding) Return GsAfgeleideIndicatieaard objects filtered by the thesaurusverwijzing_hardheid_afleiding column
 * @method array findByHardheidAfleiding(int $hardheid_afleiding) Return GsAfgeleideIndicatieaard objects filtered by the hardheid_afleiding column
 * @method array findByThesaurusverwijzingTekstmodule(int $thesaurusverwijzing_tekstmodule) Return GsAfgeleideIndicatieaard objects filtered by the thesaurusverwijzing_tekstmodule column
 * @method array findByTekstmodule(int $tekstmodule) Return GsAfgeleideIndicatieaard objects filtered by the tekstmodule column
 * @method array findByThesaurusverwijzingTekstsoort(int $thesaurusverwijzing_tekstsoort) Return GsAfgeleideIndicatieaard objects filtered by the thesaurusverwijzing_tekstsoort column
 * @method array findByTekstsoort(int $tekstsoort) Return GsAfgeleideIndicatieaard objects filtered by the tekstsoort column
 * @method array findByTekstNivoKode(int $tekst_nivo_kode) Return GsAfgeleideIndicatieaard objects filtered by the tekst_nivo_kode column
 */
abstract class BaseGsAfgeleideIndicatieaardQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsAfgeleideIndicatieaardQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAfgeleideIndicatieaard';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsAfgeleideIndicatieaardQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsAfgeleideIndicatieaardQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsAfgeleideIndicatieaardQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsAfgeleideIndicatieaardQuery) {
            return $criteria;
        }
        $query = new GsAfgeleideIndicatieaardQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$atccode, $indicatie_aard]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsAfgeleideIndicatieaard|GsAfgeleideIndicatieaard[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsAfgeleideIndicatieaardPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsAfgeleideIndicatieaardPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsAfgeleideIndicatieaard A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `atccode`, `thesaurusverwijzing_indicatie`, `indicatie_aard`, `thesaurusverwijzing_hardheid_afleiding`, `hardheid_afleiding`, `thesaurusverwijzing_tekstmodule`, `tekstmodule`, `thesaurusverwijzing_tekstsoort`, `tekstsoort`, `tekst_nivo_kode` FROM `gs_afgeleide_indicatieaard` WHERE `atccode` = :p0 AND `indicatie_aard` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsAfgeleideIndicatieaard();
            $obj->hydrate($row);
            GsAfgeleideIndicatieaardPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsAfgeleideIndicatieaard|GsAfgeleideIndicatieaard[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsAfgeleideIndicatieaard[]|mixed the list of results, formatted by the current formatter
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
     * @return GsAfgeleideIndicatieaardQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::ATCCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::INDICATIE_AARD, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsAfgeleideIndicatieaardQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsAfgeleideIndicatieaardPeer::ATCCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsAfgeleideIndicatieaardPeer::INDICATIE_AARD, $key[1], Criteria::EQUAL);
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
     * @return GsAfgeleideIndicatieaardQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsAfgeleideIndicatieaardQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the atccode column
     *
     * Example usage:
     * <code>
     * $query->filterByAtccode('fooValue');   // WHERE atccode = 'fooValue'
     * $query->filterByAtccode('%fooValue%'); // WHERE atccode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $atccode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAfgeleideIndicatieaardQuery The current query, for fluid interface
     */
    public function filterByAtccode($atccode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($atccode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $atccode)) {
                $atccode = str_replace('*', '%', $atccode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::ATCCODE, $atccode, $comparison);
    }

    /**
     * Filter the query on the thesaurusverwijzing_indicatie column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusverwijzingIndicatie(1234); // WHERE thesaurusverwijzing_indicatie = 1234
     * $query->filterByThesaurusverwijzingIndicatie(array(12, 34)); // WHERE thesaurusverwijzing_indicatie IN (12, 34)
     * $query->filterByThesaurusverwijzingIndicatie(array('min' => 12)); // WHERE thesaurusverwijzing_indicatie >= 12
     * $query->filterByThesaurusverwijzingIndicatie(array('max' => 12)); // WHERE thesaurusverwijzing_indicatie <= 12
     * </code>
     *
     * @param     mixed $thesaurusverwijzingIndicatie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAfgeleideIndicatieaardQuery The current query, for fluid interface
     */
    public function filterByThesaurusverwijzingIndicatie($thesaurusverwijzingIndicatie = null, $comparison = null)
    {
        if (is_array($thesaurusverwijzingIndicatie)) {
            $useMinMax = false;
            if (isset($thesaurusverwijzingIndicatie['min'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_INDICATIE, $thesaurusverwijzingIndicatie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusverwijzingIndicatie['max'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_INDICATIE, $thesaurusverwijzingIndicatie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_INDICATIE, $thesaurusverwijzingIndicatie, $comparison);
    }

    /**
     * Filter the query on the indicatie_aard column
     *
     * Example usage:
     * <code>
     * $query->filterByIndicatieAard(1234); // WHERE indicatie_aard = 1234
     * $query->filterByIndicatieAard(array(12, 34)); // WHERE indicatie_aard IN (12, 34)
     * $query->filterByIndicatieAard(array('min' => 12)); // WHERE indicatie_aard >= 12
     * $query->filterByIndicatieAard(array('max' => 12)); // WHERE indicatie_aard <= 12
     * </code>
     *
     * @param     mixed $indicatieAard The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAfgeleideIndicatieaardQuery The current query, for fluid interface
     */
    public function filterByIndicatieAard($indicatieAard = null, $comparison = null)
    {
        if (is_array($indicatieAard)) {
            $useMinMax = false;
            if (isset($indicatieAard['min'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::INDICATIE_AARD, $indicatieAard['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indicatieAard['max'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::INDICATIE_AARD, $indicatieAard['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::INDICATIE_AARD, $indicatieAard, $comparison);
    }

    /**
     * Filter the query on the thesaurusverwijzing_hardheid_afleiding column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusverwijzingHardheidAfleiding(1234); // WHERE thesaurusverwijzing_hardheid_afleiding = 1234
     * $query->filterByThesaurusverwijzingHardheidAfleiding(array(12, 34)); // WHERE thesaurusverwijzing_hardheid_afleiding IN (12, 34)
     * $query->filterByThesaurusverwijzingHardheidAfleiding(array('min' => 12)); // WHERE thesaurusverwijzing_hardheid_afleiding >= 12
     * $query->filterByThesaurusverwijzingHardheidAfleiding(array('max' => 12)); // WHERE thesaurusverwijzing_hardheid_afleiding <= 12
     * </code>
     *
     * @param     mixed $thesaurusverwijzingHardheidAfleiding The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAfgeleideIndicatieaardQuery The current query, for fluid interface
     */
    public function filterByThesaurusverwijzingHardheidAfleiding($thesaurusverwijzingHardheidAfleiding = null, $comparison = null)
    {
        if (is_array($thesaurusverwijzingHardheidAfleiding)) {
            $useMinMax = false;
            if (isset($thesaurusverwijzingHardheidAfleiding['min'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_HARDHEID_AFLEIDING, $thesaurusverwijzingHardheidAfleiding['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusverwijzingHardheidAfleiding['max'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_HARDHEID_AFLEIDING, $thesaurusverwijzingHardheidAfleiding['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_HARDHEID_AFLEIDING, $thesaurusverwijzingHardheidAfleiding, $comparison);
    }

    /**
     * Filter the query on the hardheid_afleiding column
     *
     * Example usage:
     * <code>
     * $query->filterByHardheidAfleiding(1234); // WHERE hardheid_afleiding = 1234
     * $query->filterByHardheidAfleiding(array(12, 34)); // WHERE hardheid_afleiding IN (12, 34)
     * $query->filterByHardheidAfleiding(array('min' => 12)); // WHERE hardheid_afleiding >= 12
     * $query->filterByHardheidAfleiding(array('max' => 12)); // WHERE hardheid_afleiding <= 12
     * </code>
     *
     * @param     mixed $hardheidAfleiding The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAfgeleideIndicatieaardQuery The current query, for fluid interface
     */
    public function filterByHardheidAfleiding($hardheidAfleiding = null, $comparison = null)
    {
        if (is_array($hardheidAfleiding)) {
            $useMinMax = false;
            if (isset($hardheidAfleiding['min'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::HARDHEID_AFLEIDING, $hardheidAfleiding['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hardheidAfleiding['max'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::HARDHEID_AFLEIDING, $hardheidAfleiding['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::HARDHEID_AFLEIDING, $hardheidAfleiding, $comparison);
    }

    /**
     * Filter the query on the thesaurusverwijzing_tekstmodule column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusverwijzingTekstmodule(1234); // WHERE thesaurusverwijzing_tekstmodule = 1234
     * $query->filterByThesaurusverwijzingTekstmodule(array(12, 34)); // WHERE thesaurusverwijzing_tekstmodule IN (12, 34)
     * $query->filterByThesaurusverwijzingTekstmodule(array('min' => 12)); // WHERE thesaurusverwijzing_tekstmodule >= 12
     * $query->filterByThesaurusverwijzingTekstmodule(array('max' => 12)); // WHERE thesaurusverwijzing_tekstmodule <= 12
     * </code>
     *
     * @param     mixed $thesaurusverwijzingTekstmodule The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAfgeleideIndicatieaardQuery The current query, for fluid interface
     */
    public function filterByThesaurusverwijzingTekstmodule($thesaurusverwijzingTekstmodule = null, $comparison = null)
    {
        if (is_array($thesaurusverwijzingTekstmodule)) {
            $useMinMax = false;
            if (isset($thesaurusverwijzingTekstmodule['min'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_TEKSTMODULE, $thesaurusverwijzingTekstmodule['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusverwijzingTekstmodule['max'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_TEKSTMODULE, $thesaurusverwijzingTekstmodule['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_TEKSTMODULE, $thesaurusverwijzingTekstmodule, $comparison);
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
     * @return GsAfgeleideIndicatieaardQuery The current query, for fluid interface
     */
    public function filterByTekstmodule($tekstmodule = null, $comparison = null)
    {
        if (is_array($tekstmodule)) {
            $useMinMax = false;
            if (isset($tekstmodule['min'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::TEKSTMODULE, $tekstmodule['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstmodule['max'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::TEKSTMODULE, $tekstmodule['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::TEKSTMODULE, $tekstmodule, $comparison);
    }

    /**
     * Filter the query on the thesaurusverwijzing_tekstsoort column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusverwijzingTekstsoort(1234); // WHERE thesaurusverwijzing_tekstsoort = 1234
     * $query->filterByThesaurusverwijzingTekstsoort(array(12, 34)); // WHERE thesaurusverwijzing_tekstsoort IN (12, 34)
     * $query->filterByThesaurusverwijzingTekstsoort(array('min' => 12)); // WHERE thesaurusverwijzing_tekstsoort >= 12
     * $query->filterByThesaurusverwijzingTekstsoort(array('max' => 12)); // WHERE thesaurusverwijzing_tekstsoort <= 12
     * </code>
     *
     * @param     mixed $thesaurusverwijzingTekstsoort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAfgeleideIndicatieaardQuery The current query, for fluid interface
     */
    public function filterByThesaurusverwijzingTekstsoort($thesaurusverwijzingTekstsoort = null, $comparison = null)
    {
        if (is_array($thesaurusverwijzingTekstsoort)) {
            $useMinMax = false;
            if (isset($thesaurusverwijzingTekstsoort['min'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_TEKSTSOORT, $thesaurusverwijzingTekstsoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusverwijzingTekstsoort['max'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_TEKSTSOORT, $thesaurusverwijzingTekstsoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::THESAURUSVERWIJZING_TEKSTSOORT, $thesaurusverwijzingTekstsoort, $comparison);
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
     * @return GsAfgeleideIndicatieaardQuery The current query, for fluid interface
     */
    public function filterByTekstsoort($tekstsoort = null, $comparison = null)
    {
        if (is_array($tekstsoort)) {
            $useMinMax = false;
            if (isset($tekstsoort['min'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::TEKSTSOORT, $tekstsoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstsoort['max'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::TEKSTSOORT, $tekstsoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::TEKSTSOORT, $tekstsoort, $comparison);
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
     * @return GsAfgeleideIndicatieaardQuery The current query, for fluid interface
     */
    public function filterByTekstNivoKode($tekstNivoKode = null, $comparison = null)
    {
        if (is_array($tekstNivoKode)) {
            $useMinMax = false;
            if (isset($tekstNivoKode['min'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::TEKST_NIVO_KODE, $tekstNivoKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstNivoKode['max'])) {
                $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::TEKST_NIVO_KODE, $tekstNivoKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAfgeleideIndicatieaardPeer::TEKST_NIVO_KODE, $tekstNivoKode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsAfgeleideIndicatieaard $gsAfgeleideIndicatieaard Object to remove from the list of results
     *
     * @return GsAfgeleideIndicatieaardQuery The current query, for fluid interface
     */
    public function prune($gsAfgeleideIndicatieaard = null)
    {
        if ($gsAfgeleideIndicatieaard) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsAfgeleideIndicatieaardPeer::ATCCODE), $gsAfgeleideIndicatieaard->getAtccode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsAfgeleideIndicatieaardPeer::INDICATIE_AARD), $gsAfgeleideIndicatieaard->getIndicatieAard(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
