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
use PharmaIntelligence\GstandaardBundle\Model\GsMedicatieBewakingKoppelenMetZrs;
use PharmaIntelligence\GstandaardBundle\Model\GsMedicatieBewakingKoppelenMetZrsPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsMedicatieBewakingKoppelenMetZrsQuery;

/**
 * @method GsMedicatieBewakingKoppelenMetZrsQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery orderByThesaurusVerwijzingTekstmodule($order = Criteria::ASC) Order by the thesaurus_verwijzing_tekstmodule column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery orderByTekstmodule($order = Criteria::ASC) Order by the tekstmodule column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery orderByThesaurusVerwijzingTekstsoort($order = Criteria::ASC) Order by the thesaurus_verwijzing_tekstsoort column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery orderByTekstsoort($order = Criteria::ASC) Order by the tekstsoort column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery orderByTekstNivoKode($order = Criteria::ASC) Order by the tekst_nivo_kode column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery orderByTekstbloknummer($order = Criteria::ASC) Order by the tekstbloknummer column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery orderByAanleiding($order = Criteria::ASC) Order by the aanleiding column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery orderBySubaanleiding($order = Criteria::ASC) Order by the subaanleiding column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery orderByAnalyse($order = Criteria::ASC) Order by the analyse column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery orderBySubanalyse($order = Criteria::ASC) Order by the subanalyse column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery orderByActie($order = Criteria::ASC) Order by the actie column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery orderByActiegroep($order = Criteria::ASC) Order by the actiegroep column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery orderByActieregel($order = Criteria::ASC) Order by the actieregel column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery orderByVolgnummer($order = Criteria::ASC) Order by the volgnummer column
 *
 * @method GsMedicatieBewakingKoppelenMetZrsQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery groupByThesaurusVerwijzingTekstmodule() Group by the thesaurus_verwijzing_tekstmodule column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery groupByTekstmodule() Group by the tekstmodule column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery groupByThesaurusVerwijzingTekstsoort() Group by the thesaurus_verwijzing_tekstsoort column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery groupByTekstsoort() Group by the tekstsoort column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery groupByTekstNivoKode() Group by the tekst_nivo_kode column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery groupByTekstbloknummer() Group by the tekstbloknummer column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery groupByAanleiding() Group by the aanleiding column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery groupBySubaanleiding() Group by the subaanleiding column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery groupByAnalyse() Group by the analyse column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery groupBySubanalyse() Group by the subanalyse column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery groupByActie() Group by the actie column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery groupByActiegroep() Group by the actiegroep column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery groupByActieregel() Group by the actieregel column
 * @method GsMedicatieBewakingKoppelenMetZrsQuery groupByVolgnummer() Group by the volgnummer column
 *
 * @method GsMedicatieBewakingKoppelenMetZrsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsMedicatieBewakingKoppelenMetZrsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsMedicatieBewakingKoppelenMetZrsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsMedicatieBewakingKoppelenMetZrs findOne(PropelPDO $con = null) Return the first GsMedicatieBewakingKoppelenMetZrs matching the query
 * @method GsMedicatieBewakingKoppelenMetZrs findOneOrCreate(PropelPDO $con = null) Return the first GsMedicatieBewakingKoppelenMetZrs matching the query, or a new GsMedicatieBewakingKoppelenMetZrs object populated from the query conditions when no match is found
 *
 * @method GsMedicatieBewakingKoppelenMetZrs findOneByBestandnummer(int $bestandnummer) Return the first GsMedicatieBewakingKoppelenMetZrs filtered by the bestandnummer column
 * @method GsMedicatieBewakingKoppelenMetZrs findOneByMutatiekode(int $mutatiekode) Return the first GsMedicatieBewakingKoppelenMetZrs filtered by the mutatiekode column
 * @method GsMedicatieBewakingKoppelenMetZrs findOneByThesaurusVerwijzingTekstmodule(int $thesaurus_verwijzing_tekstmodule) Return the first GsMedicatieBewakingKoppelenMetZrs filtered by the thesaurus_verwijzing_tekstmodule column
 * @method GsMedicatieBewakingKoppelenMetZrs findOneByTekstmodule(int $tekstmodule) Return the first GsMedicatieBewakingKoppelenMetZrs filtered by the tekstmodule column
 * @method GsMedicatieBewakingKoppelenMetZrs findOneByThesaurusVerwijzingTekstsoort(int $thesaurus_verwijzing_tekstsoort) Return the first GsMedicatieBewakingKoppelenMetZrs filtered by the thesaurus_verwijzing_tekstsoort column
 * @method GsMedicatieBewakingKoppelenMetZrs findOneByTekstsoort(int $tekstsoort) Return the first GsMedicatieBewakingKoppelenMetZrs filtered by the tekstsoort column
 * @method GsMedicatieBewakingKoppelenMetZrs findOneByTekstNivoKode(int $tekst_nivo_kode) Return the first GsMedicatieBewakingKoppelenMetZrs filtered by the tekst_nivo_kode column
 * @method GsMedicatieBewakingKoppelenMetZrs findOneByTekstbloknummer(int $tekstbloknummer) Return the first GsMedicatieBewakingKoppelenMetZrs filtered by the tekstbloknummer column
 * @method GsMedicatieBewakingKoppelenMetZrs findOneByAanleiding(int $aanleiding) Return the first GsMedicatieBewakingKoppelenMetZrs filtered by the aanleiding column
 * @method GsMedicatieBewakingKoppelenMetZrs findOneBySubaanleiding(int $subaanleiding) Return the first GsMedicatieBewakingKoppelenMetZrs filtered by the subaanleiding column
 * @method GsMedicatieBewakingKoppelenMetZrs findOneByAnalyse(int $analyse) Return the first GsMedicatieBewakingKoppelenMetZrs filtered by the analyse column
 * @method GsMedicatieBewakingKoppelenMetZrs findOneBySubanalyse(int $subanalyse) Return the first GsMedicatieBewakingKoppelenMetZrs filtered by the subanalyse column
 * @method GsMedicatieBewakingKoppelenMetZrs findOneByActie(int $actie) Return the first GsMedicatieBewakingKoppelenMetZrs filtered by the actie column
 * @method GsMedicatieBewakingKoppelenMetZrs findOneByActiegroep(int $actiegroep) Return the first GsMedicatieBewakingKoppelenMetZrs filtered by the actiegroep column
 * @method GsMedicatieBewakingKoppelenMetZrs findOneByActieregel(int $actieregel) Return the first GsMedicatieBewakingKoppelenMetZrs filtered by the actieregel column
 * @method GsMedicatieBewakingKoppelenMetZrs findOneByVolgnummer(int $volgnummer) Return the first GsMedicatieBewakingKoppelenMetZrs filtered by the volgnummer column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsMedicatieBewakingKoppelenMetZrs objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsMedicatieBewakingKoppelenMetZrs objects filtered by the mutatiekode column
 * @method array findByThesaurusVerwijzingTekstmodule(int $thesaurus_verwijzing_tekstmodule) Return GsMedicatieBewakingKoppelenMetZrs objects filtered by the thesaurus_verwijzing_tekstmodule column
 * @method array findByTekstmodule(int $tekstmodule) Return GsMedicatieBewakingKoppelenMetZrs objects filtered by the tekstmodule column
 * @method array findByThesaurusVerwijzingTekstsoort(int $thesaurus_verwijzing_tekstsoort) Return GsMedicatieBewakingKoppelenMetZrs objects filtered by the thesaurus_verwijzing_tekstsoort column
 * @method array findByTekstsoort(int $tekstsoort) Return GsMedicatieBewakingKoppelenMetZrs objects filtered by the tekstsoort column
 * @method array findByTekstNivoKode(int $tekst_nivo_kode) Return GsMedicatieBewakingKoppelenMetZrs objects filtered by the tekst_nivo_kode column
 * @method array findByTekstbloknummer(int $tekstbloknummer) Return GsMedicatieBewakingKoppelenMetZrs objects filtered by the tekstbloknummer column
 * @method array findByAanleiding(int $aanleiding) Return GsMedicatieBewakingKoppelenMetZrs objects filtered by the aanleiding column
 * @method array findBySubaanleiding(int $subaanleiding) Return GsMedicatieBewakingKoppelenMetZrs objects filtered by the subaanleiding column
 * @method array findByAnalyse(int $analyse) Return GsMedicatieBewakingKoppelenMetZrs objects filtered by the analyse column
 * @method array findBySubanalyse(int $subanalyse) Return GsMedicatieBewakingKoppelenMetZrs objects filtered by the subanalyse column
 * @method array findByActie(int $actie) Return GsMedicatieBewakingKoppelenMetZrs objects filtered by the actie column
 * @method array findByActiegroep(int $actiegroep) Return GsMedicatieBewakingKoppelenMetZrs objects filtered by the actiegroep column
 * @method array findByActieregel(int $actieregel) Return GsMedicatieBewakingKoppelenMetZrs objects filtered by the actieregel column
 * @method array findByVolgnummer(int $volgnummer) Return GsMedicatieBewakingKoppelenMetZrs objects filtered by the volgnummer column
 */
abstract class BaseGsMedicatieBewakingKoppelenMetZrsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsMedicatieBewakingKoppelenMetZrsQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsMedicatieBewakingKoppelenMetZrs';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsMedicatieBewakingKoppelenMetZrsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsMedicatieBewakingKoppelenMetZrsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsMedicatieBewakingKoppelenMetZrsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsMedicatieBewakingKoppelenMetZrsQuery) {
            return $criteria;
        }
        $query = new GsMedicatieBewakingKoppelenMetZrsQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$tekstmodule, $tekstsoort, $tekst_nivo_kode, $tekstbloknummer, $volgnummer]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsMedicatieBewakingKoppelenMetZrs|GsMedicatieBewakingKoppelenMetZrs[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsMedicatieBewakingKoppelenMetZrsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsMedicatieBewakingKoppelenMetZrsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsMedicatieBewakingKoppelenMetZrs A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `thesaurus_verwijzing_tekstmodule`, `tekstmodule`, `thesaurus_verwijzing_tekstsoort`, `tekstsoort`, `tekst_nivo_kode`, `tekstbloknummer`, `aanleiding`, `subaanleiding`, `analyse`, `subanalyse`, `actie`, `actiegroep`, `actieregel`, `volgnummer` FROM `gs_medicatie_bewaking_koppelen_met_zrs` WHERE `tekstmodule` = :p0 AND `tekstsoort` = :p1 AND `tekst_nivo_kode` = :p2 AND `tekstbloknummer` = :p3 AND `volgnummer` = :p4';
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
            $obj = new GsMedicatieBewakingKoppelenMetZrs();
            $obj->hydrate($row);
            GsMedicatieBewakingKoppelenMetZrsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4])));
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
     * @return GsMedicatieBewakingKoppelenMetZrs|GsMedicatieBewakingKoppelenMetZrs[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsMedicatieBewakingKoppelenMetZrs[]|mixed the list of results, formatted by the current formatter
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
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::TEKSTMODULE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::TEKSTSOORT, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::TEKST_NIVO_KODE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::TEKSTBLOKNUMMER, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::VOLGNUMMER, $key[4], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsMedicatieBewakingKoppelenMetZrsPeer::TEKSTMODULE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsMedicatieBewakingKoppelenMetZrsPeer::TEKSTSOORT, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsMedicatieBewakingKoppelenMetZrsPeer::TEKST_NIVO_KODE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(GsMedicatieBewakingKoppelenMetZrsPeer::TEKSTBLOKNUMMER, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(GsMedicatieBewakingKoppelenMetZrsPeer::VOLGNUMMER, $key[4], Criteria::EQUAL);
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
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function filterByThesaurusVerwijzingTekstmodule($thesaurusVerwijzingTekstmodule = null, $comparison = null)
    {
        if (is_array($thesaurusVerwijzingTekstmodule)) {
            $useMinMax = false;
            if (isset($thesaurusVerwijzingTekstmodule['min'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::THESAURUS_VERWIJZING_TEKSTMODULE, $thesaurusVerwijzingTekstmodule['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusVerwijzingTekstmodule['max'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::THESAURUS_VERWIJZING_TEKSTMODULE, $thesaurusVerwijzingTekstmodule['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::THESAURUS_VERWIJZING_TEKSTMODULE, $thesaurusVerwijzingTekstmodule, $comparison);
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
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function filterByTekstmodule($tekstmodule = null, $comparison = null)
    {
        if (is_array($tekstmodule)) {
            $useMinMax = false;
            if (isset($tekstmodule['min'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::TEKSTMODULE, $tekstmodule['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstmodule['max'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::TEKSTMODULE, $tekstmodule['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::TEKSTMODULE, $tekstmodule, $comparison);
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
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function filterByThesaurusVerwijzingTekstsoort($thesaurusVerwijzingTekstsoort = null, $comparison = null)
    {
        if (is_array($thesaurusVerwijzingTekstsoort)) {
            $useMinMax = false;
            if (isset($thesaurusVerwijzingTekstsoort['min'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::THESAURUS_VERWIJZING_TEKSTSOORT, $thesaurusVerwijzingTekstsoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusVerwijzingTekstsoort['max'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::THESAURUS_VERWIJZING_TEKSTSOORT, $thesaurusVerwijzingTekstsoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::THESAURUS_VERWIJZING_TEKSTSOORT, $thesaurusVerwijzingTekstsoort, $comparison);
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
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function filterByTekstsoort($tekstsoort = null, $comparison = null)
    {
        if (is_array($tekstsoort)) {
            $useMinMax = false;
            if (isset($tekstsoort['min'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::TEKSTSOORT, $tekstsoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstsoort['max'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::TEKSTSOORT, $tekstsoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::TEKSTSOORT, $tekstsoort, $comparison);
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
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function filterByTekstNivoKode($tekstNivoKode = null, $comparison = null)
    {
        if (is_array($tekstNivoKode)) {
            $useMinMax = false;
            if (isset($tekstNivoKode['min'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::TEKST_NIVO_KODE, $tekstNivoKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstNivoKode['max'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::TEKST_NIVO_KODE, $tekstNivoKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::TEKST_NIVO_KODE, $tekstNivoKode, $comparison);
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
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function filterByTekstbloknummer($tekstbloknummer = null, $comparison = null)
    {
        if (is_array($tekstbloknummer)) {
            $useMinMax = false;
            if (isset($tekstbloknummer['min'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::TEKSTBLOKNUMMER, $tekstbloknummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstbloknummer['max'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::TEKSTBLOKNUMMER, $tekstbloknummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::TEKSTBLOKNUMMER, $tekstbloknummer, $comparison);
    }

    /**
     * Filter the query on the aanleiding column
     *
     * Example usage:
     * <code>
     * $query->filterByAanleiding(1234); // WHERE aanleiding = 1234
     * $query->filterByAanleiding(array(12, 34)); // WHERE aanleiding IN (12, 34)
     * $query->filterByAanleiding(array('min' => 12)); // WHERE aanleiding >= 12
     * $query->filterByAanleiding(array('max' => 12)); // WHERE aanleiding <= 12
     * </code>
     *
     * @param     mixed $aanleiding The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function filterByAanleiding($aanleiding = null, $comparison = null)
    {
        if (is_array($aanleiding)) {
            $useMinMax = false;
            if (isset($aanleiding['min'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::AANLEIDING, $aanleiding['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aanleiding['max'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::AANLEIDING, $aanleiding['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::AANLEIDING, $aanleiding, $comparison);
    }

    /**
     * Filter the query on the subaanleiding column
     *
     * Example usage:
     * <code>
     * $query->filterBySubaanleiding(1234); // WHERE subaanleiding = 1234
     * $query->filterBySubaanleiding(array(12, 34)); // WHERE subaanleiding IN (12, 34)
     * $query->filterBySubaanleiding(array('min' => 12)); // WHERE subaanleiding >= 12
     * $query->filterBySubaanleiding(array('max' => 12)); // WHERE subaanleiding <= 12
     * </code>
     *
     * @param     mixed $subaanleiding The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function filterBySubaanleiding($subaanleiding = null, $comparison = null)
    {
        if (is_array($subaanleiding)) {
            $useMinMax = false;
            if (isset($subaanleiding['min'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::SUBAANLEIDING, $subaanleiding['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subaanleiding['max'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::SUBAANLEIDING, $subaanleiding['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::SUBAANLEIDING, $subaanleiding, $comparison);
    }

    /**
     * Filter the query on the analyse column
     *
     * Example usage:
     * <code>
     * $query->filterByAnalyse(1234); // WHERE analyse = 1234
     * $query->filterByAnalyse(array(12, 34)); // WHERE analyse IN (12, 34)
     * $query->filterByAnalyse(array('min' => 12)); // WHERE analyse >= 12
     * $query->filterByAnalyse(array('max' => 12)); // WHERE analyse <= 12
     * </code>
     *
     * @param     mixed $analyse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function filterByAnalyse($analyse = null, $comparison = null)
    {
        if (is_array($analyse)) {
            $useMinMax = false;
            if (isset($analyse['min'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::ANALYSE, $analyse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($analyse['max'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::ANALYSE, $analyse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::ANALYSE, $analyse, $comparison);
    }

    /**
     * Filter the query on the subanalyse column
     *
     * Example usage:
     * <code>
     * $query->filterBySubanalyse(1234); // WHERE subanalyse = 1234
     * $query->filterBySubanalyse(array(12, 34)); // WHERE subanalyse IN (12, 34)
     * $query->filterBySubanalyse(array('min' => 12)); // WHERE subanalyse >= 12
     * $query->filterBySubanalyse(array('max' => 12)); // WHERE subanalyse <= 12
     * </code>
     *
     * @param     mixed $subanalyse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function filterBySubanalyse($subanalyse = null, $comparison = null)
    {
        if (is_array($subanalyse)) {
            $useMinMax = false;
            if (isset($subanalyse['min'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::SUBANALYSE, $subanalyse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subanalyse['max'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::SUBANALYSE, $subanalyse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::SUBANALYSE, $subanalyse, $comparison);
    }

    /**
     * Filter the query on the actie column
     *
     * Example usage:
     * <code>
     * $query->filterByActie(1234); // WHERE actie = 1234
     * $query->filterByActie(array(12, 34)); // WHERE actie IN (12, 34)
     * $query->filterByActie(array('min' => 12)); // WHERE actie >= 12
     * $query->filterByActie(array('max' => 12)); // WHERE actie <= 12
     * </code>
     *
     * @param     mixed $actie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function filterByActie($actie = null, $comparison = null)
    {
        if (is_array($actie)) {
            $useMinMax = false;
            if (isset($actie['min'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::ACTIE, $actie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actie['max'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::ACTIE, $actie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::ACTIE, $actie, $comparison);
    }

    /**
     * Filter the query on the actiegroep column
     *
     * Example usage:
     * <code>
     * $query->filterByActiegroep(1234); // WHERE actiegroep = 1234
     * $query->filterByActiegroep(array(12, 34)); // WHERE actiegroep IN (12, 34)
     * $query->filterByActiegroep(array('min' => 12)); // WHERE actiegroep >= 12
     * $query->filterByActiegroep(array('max' => 12)); // WHERE actiegroep <= 12
     * </code>
     *
     * @param     mixed $actiegroep The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function filterByActiegroep($actiegroep = null, $comparison = null)
    {
        if (is_array($actiegroep)) {
            $useMinMax = false;
            if (isset($actiegroep['min'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::ACTIEGROEP, $actiegroep['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actiegroep['max'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::ACTIEGROEP, $actiegroep['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::ACTIEGROEP, $actiegroep, $comparison);
    }

    /**
     * Filter the query on the actieregel column
     *
     * Example usage:
     * <code>
     * $query->filterByActieregel(1234); // WHERE actieregel = 1234
     * $query->filterByActieregel(array(12, 34)); // WHERE actieregel IN (12, 34)
     * $query->filterByActieregel(array('min' => 12)); // WHERE actieregel >= 12
     * $query->filterByActieregel(array('max' => 12)); // WHERE actieregel <= 12
     * </code>
     *
     * @param     mixed $actieregel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function filterByActieregel($actieregel = null, $comparison = null)
    {
        if (is_array($actieregel)) {
            $useMinMax = false;
            if (isset($actieregel['min'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::ACTIEREGEL, $actieregel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actieregel['max'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::ACTIEREGEL, $actieregel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::ACTIEREGEL, $actieregel, $comparison);
    }

    /**
     * Filter the query on the volgnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByVolgnummer(1234); // WHERE volgnummer = 1234
     * $query->filterByVolgnummer(array(12, 34)); // WHERE volgnummer IN (12, 34)
     * $query->filterByVolgnummer(array('min' => 12)); // WHERE volgnummer >= 12
     * $query->filterByVolgnummer(array('max' => 12)); // WHERE volgnummer <= 12
     * </code>
     *
     * @param     mixed $volgnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function filterByVolgnummer($volgnummer = null, $comparison = null)
    {
        if (is_array($volgnummer)) {
            $useMinMax = false;
            if (isset($volgnummer['min'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::VOLGNUMMER, $volgnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($volgnummer['max'])) {
                $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::VOLGNUMMER, $volgnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedicatieBewakingKoppelenMetZrsPeer::VOLGNUMMER, $volgnummer, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsMedicatieBewakingKoppelenMetZrs $gsMedicatieBewakingKoppelenMetZrs Object to remove from the list of results
     *
     * @return GsMedicatieBewakingKoppelenMetZrsQuery The current query, for fluid interface
     */
    public function prune($gsMedicatieBewakingKoppelenMetZrs = null)
    {
        if ($gsMedicatieBewakingKoppelenMetZrs) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsMedicatieBewakingKoppelenMetZrsPeer::TEKSTMODULE), $gsMedicatieBewakingKoppelenMetZrs->getTekstmodule(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsMedicatieBewakingKoppelenMetZrsPeer::TEKSTSOORT), $gsMedicatieBewakingKoppelenMetZrs->getTekstsoort(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsMedicatieBewakingKoppelenMetZrsPeer::TEKST_NIVO_KODE), $gsMedicatieBewakingKoppelenMetZrs->getTekstNivoKode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(GsMedicatieBewakingKoppelenMetZrsPeer::TEKSTBLOKNUMMER), $gsMedicatieBewakingKoppelenMetZrs->getTekstbloknummer(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(GsMedicatieBewakingKoppelenMetZrsPeer::VOLGNUMMER), $gsMedicatieBewakingKoppelenMetZrs->getVolgnummer(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
