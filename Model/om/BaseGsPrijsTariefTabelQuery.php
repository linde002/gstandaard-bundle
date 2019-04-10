<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \Criteria;
use \Exception;
use \ModelCriteria;
use \ModelJoin;
use \PDO;
use \Propel;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsPrijsTariefTabel;
use PharmaIntelligence\GstandaardBundle\Model\GsPrijsTariefTabelPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsPrijsTariefTabelQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;

/**
 * @method GsPrijsTariefTabelQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsPrijsTariefTabelQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsPrijsTariefTabelQuery orderByThesaurusverwijzingSoortCodering($order = Criteria::ASC) Order by the thesaurusverwijzing_soort_codering column
 * @method GsPrijsTariefTabelQuery orderBySoortCodering($order = Criteria::ASC) Order by the soort_codering column
 * @method GsPrijsTariefTabelQuery orderByUniekeIdVanCodering($order = Criteria::ASC) Order by the unieke_id_van_codering column
 * @method GsPrijsTariefTabelQuery orderByThesaurusverwijzingSrtTariefprijsbedrag($order = Criteria::ASC) Order by the thesaurusverwijzing_srt_tariefprijsbedrag column
 * @method GsPrijsTariefTabelQuery orderBySoortTariefprijsbedrag($order = Criteria::ASC) Order by the soort_tariefprijsbedrag column
 * @method GsPrijsTariefTabelQuery orderByThesaurusverwijzingSoortBron($order = Criteria::ASC) Order by the thesaurusverwijzing_soort_bron column
 * @method GsPrijsTariefTabelQuery orderBySoortBron($order = Criteria::ASC) Order by the soort_bron column
 * @method GsPrijsTariefTabelQuery orderByUniekeIdVanBron($order = Criteria::ASC) Order by the unieke_id_van_bron column
 * @method GsPrijsTariefTabelQuery orderByAanvullendeContractInformatie($order = Criteria::ASC) Order by the aanvullende_contract_informatie column
 * @method GsPrijsTariefTabelQuery orderByTariefPrijsBedrag($order = Criteria::ASC) Order by the tarief_prijs_bedrag column
 * @method GsPrijsTariefTabelQuery orderByStartdatumVanTariefprijsbedrag($order = Criteria::ASC) Order by the startdatum_van_tariefprijsbedrag column
 * @method GsPrijsTariefTabelQuery orderByEinddatumVanTariefprijsbedrag($order = Criteria::ASC) Order by the einddatum_van_tariefprijsbedrag column
 *
 * @method GsPrijsTariefTabelQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsPrijsTariefTabelQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsPrijsTariefTabelQuery groupByThesaurusverwijzingSoortCodering() Group by the thesaurusverwijzing_soort_codering column
 * @method GsPrijsTariefTabelQuery groupBySoortCodering() Group by the soort_codering column
 * @method GsPrijsTariefTabelQuery groupByUniekeIdVanCodering() Group by the unieke_id_van_codering column
 * @method GsPrijsTariefTabelQuery groupByThesaurusverwijzingSrtTariefprijsbedrag() Group by the thesaurusverwijzing_srt_tariefprijsbedrag column
 * @method GsPrijsTariefTabelQuery groupBySoortTariefprijsbedrag() Group by the soort_tariefprijsbedrag column
 * @method GsPrijsTariefTabelQuery groupByThesaurusverwijzingSoortBron() Group by the thesaurusverwijzing_soort_bron column
 * @method GsPrijsTariefTabelQuery groupBySoortBron() Group by the soort_bron column
 * @method GsPrijsTariefTabelQuery groupByUniekeIdVanBron() Group by the unieke_id_van_bron column
 * @method GsPrijsTariefTabelQuery groupByAanvullendeContractInformatie() Group by the aanvullende_contract_informatie column
 * @method GsPrijsTariefTabelQuery groupByTariefPrijsBedrag() Group by the tarief_prijs_bedrag column
 * @method GsPrijsTariefTabelQuery groupByStartdatumVanTariefprijsbedrag() Group by the startdatum_van_tariefprijsbedrag column
 * @method GsPrijsTariefTabelQuery groupByEinddatumVanTariefprijsbedrag() Group by the einddatum_van_tariefprijsbedrag column
 *
 * @method GsPrijsTariefTabelQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsPrijsTariefTabelQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsPrijsTariefTabelQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsPrijsTariefTabelQuery leftJoinSoortCoderingOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the SoortCoderingOmschrijving relation
 * @method GsPrijsTariefTabelQuery rightJoinSoortCoderingOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SoortCoderingOmschrijving relation
 * @method GsPrijsTariefTabelQuery innerJoinSoortCoderingOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the SoortCoderingOmschrijving relation
 *
 * @method GsPrijsTariefTabelQuery leftJoinSoortTariefprijsbedragOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the SoortTariefprijsbedragOmschrijving relation
 * @method GsPrijsTariefTabelQuery rightJoinSoortTariefprijsbedragOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SoortTariefprijsbedragOmschrijving relation
 * @method GsPrijsTariefTabelQuery innerJoinSoortTariefprijsbedragOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the SoortTariefprijsbedragOmschrijving relation
 *
 * @method GsPrijsTariefTabelQuery leftJoinSoortBronOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the SoortBronOmschrijving relation
 * @method GsPrijsTariefTabelQuery rightJoinSoortBronOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SoortBronOmschrijving relation
 * @method GsPrijsTariefTabelQuery innerJoinSoortBronOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the SoortBronOmschrijving relation
 *
 * @method GsPrijsTariefTabel findOne(PropelPDO $con = null) Return the first GsPrijsTariefTabel matching the query
 * @method GsPrijsTariefTabel findOneOrCreate(PropelPDO $con = null) Return the first GsPrijsTariefTabel matching the query, or a new GsPrijsTariefTabel object populated from the query conditions when no match is found
 *
 * @method GsPrijsTariefTabel findOneByBestandnummer(int $bestandnummer) Return the first GsPrijsTariefTabel filtered by the bestandnummer column
 * @method GsPrijsTariefTabel findOneByMutatiekode(int $mutatiekode) Return the first GsPrijsTariefTabel filtered by the mutatiekode column
 * @method GsPrijsTariefTabel findOneByThesaurusverwijzingSoortCodering(int $thesaurusverwijzing_soort_codering) Return the first GsPrijsTariefTabel filtered by the thesaurusverwijzing_soort_codering column
 * @method GsPrijsTariefTabel findOneBySoortCodering(int $soort_codering) Return the first GsPrijsTariefTabel filtered by the soort_codering column
 * @method GsPrijsTariefTabel findOneByUniekeIdVanCodering(string $unieke_id_van_codering) Return the first GsPrijsTariefTabel filtered by the unieke_id_van_codering column
 * @method GsPrijsTariefTabel findOneByThesaurusverwijzingSrtTariefprijsbedrag(int $thesaurusverwijzing_srt_tariefprijsbedrag) Return the first GsPrijsTariefTabel filtered by the thesaurusverwijzing_srt_tariefprijsbedrag column
 * @method GsPrijsTariefTabel findOneBySoortTariefprijsbedrag(int $soort_tariefprijsbedrag) Return the first GsPrijsTariefTabel filtered by the soort_tariefprijsbedrag column
 * @method GsPrijsTariefTabel findOneByThesaurusverwijzingSoortBron(int $thesaurusverwijzing_soort_bron) Return the first GsPrijsTariefTabel filtered by the thesaurusverwijzing_soort_bron column
 * @method GsPrijsTariefTabel findOneBySoortBron(int $soort_bron) Return the first GsPrijsTariefTabel filtered by the soort_bron column
 * @method GsPrijsTariefTabel findOneByUniekeIdVanBron(string $unieke_id_van_bron) Return the first GsPrijsTariefTabel filtered by the unieke_id_van_bron column
 * @method GsPrijsTariefTabel findOneByAanvullendeContractInformatie(string $aanvullende_contract_informatie) Return the first GsPrijsTariefTabel filtered by the aanvullende_contract_informatie column
 * @method GsPrijsTariefTabel findOneByTariefPrijsBedrag(string $tarief_prijs_bedrag) Return the first GsPrijsTariefTabel filtered by the tarief_prijs_bedrag column
 * @method GsPrijsTariefTabel findOneByStartdatumVanTariefprijsbedrag(int $startdatum_van_tariefprijsbedrag) Return the first GsPrijsTariefTabel filtered by the startdatum_van_tariefprijsbedrag column
 * @method GsPrijsTariefTabel findOneByEinddatumVanTariefprijsbedrag(int $einddatum_van_tariefprijsbedrag) Return the first GsPrijsTariefTabel filtered by the einddatum_van_tariefprijsbedrag column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsPrijsTariefTabel objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsPrijsTariefTabel objects filtered by the mutatiekode column
 * @method array findByThesaurusverwijzingSoortCodering(int $thesaurusverwijzing_soort_codering) Return GsPrijsTariefTabel objects filtered by the thesaurusverwijzing_soort_codering column
 * @method array findBySoortCodering(int $soort_codering) Return GsPrijsTariefTabel objects filtered by the soort_codering column
 * @method array findByUniekeIdVanCodering(string $unieke_id_van_codering) Return GsPrijsTariefTabel objects filtered by the unieke_id_van_codering column
 * @method array findByThesaurusverwijzingSrtTariefprijsbedrag(int $thesaurusverwijzing_srt_tariefprijsbedrag) Return GsPrijsTariefTabel objects filtered by the thesaurusverwijzing_srt_tariefprijsbedrag column
 * @method array findBySoortTariefprijsbedrag(int $soort_tariefprijsbedrag) Return GsPrijsTariefTabel objects filtered by the soort_tariefprijsbedrag column
 * @method array findByThesaurusverwijzingSoortBron(int $thesaurusverwijzing_soort_bron) Return GsPrijsTariefTabel objects filtered by the thesaurusverwijzing_soort_bron column
 * @method array findBySoortBron(int $soort_bron) Return GsPrijsTariefTabel objects filtered by the soort_bron column
 * @method array findByUniekeIdVanBron(string $unieke_id_van_bron) Return GsPrijsTariefTabel objects filtered by the unieke_id_van_bron column
 * @method array findByAanvullendeContractInformatie(string $aanvullende_contract_informatie) Return GsPrijsTariefTabel objects filtered by the aanvullende_contract_informatie column
 * @method array findByTariefPrijsBedrag(string $tarief_prijs_bedrag) Return GsPrijsTariefTabel objects filtered by the tarief_prijs_bedrag column
 * @method array findByStartdatumVanTariefprijsbedrag(int $startdatum_van_tariefprijsbedrag) Return GsPrijsTariefTabel objects filtered by the startdatum_van_tariefprijsbedrag column
 * @method array findByEinddatumVanTariefprijsbedrag(int $einddatum_van_tariefprijsbedrag) Return GsPrijsTariefTabel objects filtered by the einddatum_van_tariefprijsbedrag column
 */
abstract class BaseGsPrijsTariefTabelQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsPrijsTariefTabelQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPrijsTariefTabel';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsPrijsTariefTabelQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsPrijsTariefTabelQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsPrijsTariefTabelQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsPrijsTariefTabelQuery) {
            return $criteria;
        }
        $query = new GsPrijsTariefTabelQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$soort_codering, $unieke_id_van_codering, $soort_tariefprijsbedrag, $soort_bron, $unieke_id_van_bron, $aanvullende_contract_informatie]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsPrijsTariefTabel|GsPrijsTariefTabel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsPrijsTariefTabelPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsPrijsTariefTabelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsPrijsTariefTabel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `thesaurusverwijzing_soort_codering`, `soort_codering`, `unieke_id_van_codering`, `thesaurusverwijzing_srt_tariefprijsbedrag`, `soort_tariefprijsbedrag`, `thesaurusverwijzing_soort_bron`, `soort_bron`, `unieke_id_van_bron`, `aanvullende_contract_informatie`, `tarief_prijs_bedrag`, `startdatum_van_tariefprijsbedrag`, `einddatum_van_tariefprijsbedrag` FROM `gs_prijs_tarief_tabel` WHERE `soort_codering` = :p0 AND `unieke_id_van_codering` = :p1 AND `soort_tariefprijsbedrag` = :p2 AND `soort_bron` = :p3 AND `unieke_id_van_bron` = :p4 AND `aanvullende_contract_informatie` = :p5';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsPrijsTariefTabel();
            $obj->hydrate($row);
            GsPrijsTariefTabelPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5])));
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
     * @return GsPrijsTariefTabel|GsPrijsTariefTabel[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsPrijsTariefTabel[]|mixed the list of results, formatted by the current formatter
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
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsPrijsTariefTabelPeer::SOORT_CODERING, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_CODERING, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(GsPrijsTariefTabelPeer::SOORT_BRON, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_BRON, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(GsPrijsTariefTabelPeer::AANVULLENDE_CONTRACT_INFORMATIE, $key[5], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsPrijsTariefTabelPeer::SOORT_CODERING, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_CODERING, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(GsPrijsTariefTabelPeer::SOORT_BRON, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_BRON, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(GsPrijsTariefTabelPeer::AANVULLENDE_CONTRACT_INFORMATIE, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
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
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrijsTariefTabelPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrijsTariefTabelPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the thesaurusverwijzing_soort_codering column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusverwijzingSoortCodering(1234); // WHERE thesaurusverwijzing_soort_codering = 1234
     * $query->filterByThesaurusverwijzingSoortCodering(array(12, 34)); // WHERE thesaurusverwijzing_soort_codering IN (12, 34)
     * $query->filterByThesaurusverwijzingSoortCodering(array('min' => 12)); // WHERE thesaurusverwijzing_soort_codering >= 12
     * $query->filterByThesaurusverwijzingSoortCodering(array('max' => 12)); // WHERE thesaurusverwijzing_soort_codering <= 12
     * </code>
     *
     * @see       filterBySoortCoderingOmschrijving()
     *
     * @param     mixed $thesaurusverwijzingSoortCodering The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function filterByThesaurusverwijzingSoortCodering($thesaurusverwijzingSoortCodering = null, $comparison = null)
    {
        if (is_array($thesaurusverwijzingSoortCodering)) {
            $useMinMax = false;
            if (isset($thesaurusverwijzingSoortCodering['min'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_CODERING, $thesaurusverwijzingSoortCodering['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusverwijzingSoortCodering['max'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_CODERING, $thesaurusverwijzingSoortCodering['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_CODERING, $thesaurusverwijzingSoortCodering, $comparison);
    }

    /**
     * Filter the query on the soort_codering column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortCodering(1234); // WHERE soort_codering = 1234
     * $query->filterBySoortCodering(array(12, 34)); // WHERE soort_codering IN (12, 34)
     * $query->filterBySoortCodering(array('min' => 12)); // WHERE soort_codering >= 12
     * $query->filterBySoortCodering(array('max' => 12)); // WHERE soort_codering <= 12
     * </code>
     *
     * @see       filterBySoortCoderingOmschrijving()
     *
     * @param     mixed $soortCodering The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function filterBySoortCodering($soortCodering = null, $comparison = null)
    {
        if (is_array($soortCodering)) {
            $useMinMax = false;
            if (isset($soortCodering['min'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::SOORT_CODERING, $soortCodering['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortCodering['max'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::SOORT_CODERING, $soortCodering['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrijsTariefTabelPeer::SOORT_CODERING, $soortCodering, $comparison);
    }

    /**
     * Filter the query on the unieke_id_van_codering column
     *
     * Example usage:
     * <code>
     * $query->filterByUniekeIdVanCodering('fooValue');   // WHERE unieke_id_van_codering = 'fooValue'
     * $query->filterByUniekeIdVanCodering('%fooValue%'); // WHERE unieke_id_van_codering LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uniekeIdVanCodering The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function filterByUniekeIdVanCodering($uniekeIdVanCodering = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uniekeIdVanCodering)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $uniekeIdVanCodering)) {
                $uniekeIdVanCodering = str_replace('*', '%', $uniekeIdVanCodering);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_CODERING, $uniekeIdVanCodering, $comparison);
    }

    /**
     * Filter the query on the thesaurusverwijzing_srt_tariefprijsbedrag column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusverwijzingSrtTariefprijsbedrag(1234); // WHERE thesaurusverwijzing_srt_tariefprijsbedrag = 1234
     * $query->filterByThesaurusverwijzingSrtTariefprijsbedrag(array(12, 34)); // WHERE thesaurusverwijzing_srt_tariefprijsbedrag IN (12, 34)
     * $query->filterByThesaurusverwijzingSrtTariefprijsbedrag(array('min' => 12)); // WHERE thesaurusverwijzing_srt_tariefprijsbedrag >= 12
     * $query->filterByThesaurusverwijzingSrtTariefprijsbedrag(array('max' => 12)); // WHERE thesaurusverwijzing_srt_tariefprijsbedrag <= 12
     * </code>
     *
     * @see       filterBySoortTariefprijsbedragOmschrijving()
     *
     * @param     mixed $thesaurusverwijzingSrtTariefprijsbedrag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function filterByThesaurusverwijzingSrtTariefprijsbedrag($thesaurusverwijzingSrtTariefprijsbedrag = null, $comparison = null)
    {
        if (is_array($thesaurusverwijzingSrtTariefprijsbedrag)) {
            $useMinMax = false;
            if (isset($thesaurusverwijzingSrtTariefprijsbedrag['min'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SRT_TARIEFPRIJSBEDRAG, $thesaurusverwijzingSrtTariefprijsbedrag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusverwijzingSrtTariefprijsbedrag['max'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SRT_TARIEFPRIJSBEDRAG, $thesaurusverwijzingSrtTariefprijsbedrag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SRT_TARIEFPRIJSBEDRAG, $thesaurusverwijzingSrtTariefprijsbedrag, $comparison);
    }

    /**
     * Filter the query on the soort_tariefprijsbedrag column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortTariefprijsbedrag(1234); // WHERE soort_tariefprijsbedrag = 1234
     * $query->filterBySoortTariefprijsbedrag(array(12, 34)); // WHERE soort_tariefprijsbedrag IN (12, 34)
     * $query->filterBySoortTariefprijsbedrag(array('min' => 12)); // WHERE soort_tariefprijsbedrag >= 12
     * $query->filterBySoortTariefprijsbedrag(array('max' => 12)); // WHERE soort_tariefprijsbedrag <= 12
     * </code>
     *
     * @see       filterBySoortTariefprijsbedragOmschrijving()
     *
     * @param     mixed $soortTariefprijsbedrag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function filterBySoortTariefprijsbedrag($soortTariefprijsbedrag = null, $comparison = null)
    {
        if (is_array($soortTariefprijsbedrag)) {
            $useMinMax = false;
            if (isset($soortTariefprijsbedrag['min'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG, $soortTariefprijsbedrag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortTariefprijsbedrag['max'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG, $soortTariefprijsbedrag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG, $soortTariefprijsbedrag, $comparison);
    }

    /**
     * Filter the query on the thesaurusverwijzing_soort_bron column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusverwijzingSoortBron(1234); // WHERE thesaurusverwijzing_soort_bron = 1234
     * $query->filterByThesaurusverwijzingSoortBron(array(12, 34)); // WHERE thesaurusverwijzing_soort_bron IN (12, 34)
     * $query->filterByThesaurusverwijzingSoortBron(array('min' => 12)); // WHERE thesaurusverwijzing_soort_bron >= 12
     * $query->filterByThesaurusverwijzingSoortBron(array('max' => 12)); // WHERE thesaurusverwijzing_soort_bron <= 12
     * </code>
     *
     * @see       filterBySoortBronOmschrijving()
     *
     * @param     mixed $thesaurusverwijzingSoortBron The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function filterByThesaurusverwijzingSoortBron($thesaurusverwijzingSoortBron = null, $comparison = null)
    {
        if (is_array($thesaurusverwijzingSoortBron)) {
            $useMinMax = false;
            if (isset($thesaurusverwijzingSoortBron['min'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_BRON, $thesaurusverwijzingSoortBron['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusverwijzingSoortBron['max'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_BRON, $thesaurusverwijzingSoortBron['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_BRON, $thesaurusverwijzingSoortBron, $comparison);
    }

    /**
     * Filter the query on the soort_bron column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortBron(1234); // WHERE soort_bron = 1234
     * $query->filterBySoortBron(array(12, 34)); // WHERE soort_bron IN (12, 34)
     * $query->filterBySoortBron(array('min' => 12)); // WHERE soort_bron >= 12
     * $query->filterBySoortBron(array('max' => 12)); // WHERE soort_bron <= 12
     * </code>
     *
     * @see       filterBySoortBronOmschrijving()
     *
     * @param     mixed $soortBron The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function filterBySoortBron($soortBron = null, $comparison = null)
    {
        if (is_array($soortBron)) {
            $useMinMax = false;
            if (isset($soortBron['min'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::SOORT_BRON, $soortBron['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortBron['max'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::SOORT_BRON, $soortBron['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrijsTariefTabelPeer::SOORT_BRON, $soortBron, $comparison);
    }

    /**
     * Filter the query on the unieke_id_van_bron column
     *
     * Example usage:
     * <code>
     * $query->filterByUniekeIdVanBron('fooValue');   // WHERE unieke_id_van_bron = 'fooValue'
     * $query->filterByUniekeIdVanBron('%fooValue%'); // WHERE unieke_id_van_bron LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uniekeIdVanBron The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function filterByUniekeIdVanBron($uniekeIdVanBron = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uniekeIdVanBron)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $uniekeIdVanBron)) {
                $uniekeIdVanBron = str_replace('*', '%', $uniekeIdVanBron);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_BRON, $uniekeIdVanBron, $comparison);
    }

    /**
     * Filter the query on the aanvullende_contract_informatie column
     *
     * Example usage:
     * <code>
     * $query->filterByAanvullendeContractInformatie('fooValue');   // WHERE aanvullende_contract_informatie = 'fooValue'
     * $query->filterByAanvullendeContractInformatie('%fooValue%'); // WHERE aanvullende_contract_informatie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aanvullendeContractInformatie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function filterByAanvullendeContractInformatie($aanvullendeContractInformatie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aanvullendeContractInformatie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aanvullendeContractInformatie)) {
                $aanvullendeContractInformatie = str_replace('*', '%', $aanvullendeContractInformatie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsPrijsTariefTabelPeer::AANVULLENDE_CONTRACT_INFORMATIE, $aanvullendeContractInformatie, $comparison);
    }

    /**
     * Filter the query on the tarief_prijs_bedrag column
     *
     * Example usage:
     * <code>
     * $query->filterByTariefPrijsBedrag(1234); // WHERE tarief_prijs_bedrag = 1234
     * $query->filterByTariefPrijsBedrag(array(12, 34)); // WHERE tarief_prijs_bedrag IN (12, 34)
     * $query->filterByTariefPrijsBedrag(array('min' => 12)); // WHERE tarief_prijs_bedrag >= 12
     * $query->filterByTariefPrijsBedrag(array('max' => 12)); // WHERE tarief_prijs_bedrag <= 12
     * </code>
     *
     * @param     mixed $tariefPrijsBedrag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function filterByTariefPrijsBedrag($tariefPrijsBedrag = null, $comparison = null)
    {
        if (is_array($tariefPrijsBedrag)) {
            $useMinMax = false;
            if (isset($tariefPrijsBedrag['min'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::TARIEF_PRIJS_BEDRAG, $tariefPrijsBedrag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tariefPrijsBedrag['max'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::TARIEF_PRIJS_BEDRAG, $tariefPrijsBedrag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrijsTariefTabelPeer::TARIEF_PRIJS_BEDRAG, $tariefPrijsBedrag, $comparison);
    }

    /**
     * Filter the query on the startdatum_van_tariefprijsbedrag column
     *
     * Example usage:
     * <code>
     * $query->filterByStartdatumVanTariefprijsbedrag(1234); // WHERE startdatum_van_tariefprijsbedrag = 1234
     * $query->filterByStartdatumVanTariefprijsbedrag(array(12, 34)); // WHERE startdatum_van_tariefprijsbedrag IN (12, 34)
     * $query->filterByStartdatumVanTariefprijsbedrag(array('min' => 12)); // WHERE startdatum_van_tariefprijsbedrag >= 12
     * $query->filterByStartdatumVanTariefprijsbedrag(array('max' => 12)); // WHERE startdatum_van_tariefprijsbedrag <= 12
     * </code>
     *
     * @param     mixed $startdatumVanTariefprijsbedrag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function filterByStartdatumVanTariefprijsbedrag($startdatumVanTariefprijsbedrag = null, $comparison = null)
    {
        if (is_array($startdatumVanTariefprijsbedrag)) {
            $useMinMax = false;
            if (isset($startdatumVanTariefprijsbedrag['min'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::STARTDATUM_VAN_TARIEFPRIJSBEDRAG, $startdatumVanTariefprijsbedrag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($startdatumVanTariefprijsbedrag['max'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::STARTDATUM_VAN_TARIEFPRIJSBEDRAG, $startdatumVanTariefprijsbedrag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrijsTariefTabelPeer::STARTDATUM_VAN_TARIEFPRIJSBEDRAG, $startdatumVanTariefprijsbedrag, $comparison);
    }

    /**
     * Filter the query on the einddatum_van_tariefprijsbedrag column
     *
     * Example usage:
     * <code>
     * $query->filterByEinddatumVanTariefprijsbedrag(1234); // WHERE einddatum_van_tariefprijsbedrag = 1234
     * $query->filterByEinddatumVanTariefprijsbedrag(array(12, 34)); // WHERE einddatum_van_tariefprijsbedrag IN (12, 34)
     * $query->filterByEinddatumVanTariefprijsbedrag(array('min' => 12)); // WHERE einddatum_van_tariefprijsbedrag >= 12
     * $query->filterByEinddatumVanTariefprijsbedrag(array('max' => 12)); // WHERE einddatum_van_tariefprijsbedrag <= 12
     * </code>
     *
     * @param     mixed $einddatumVanTariefprijsbedrag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function filterByEinddatumVanTariefprijsbedrag($einddatumVanTariefprijsbedrag = null, $comparison = null)
    {
        if (is_array($einddatumVanTariefprijsbedrag)) {
            $useMinMax = false;
            if (isset($einddatumVanTariefprijsbedrag['min'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::EINDDATUM_VAN_TARIEFPRIJSBEDRAG, $einddatumVanTariefprijsbedrag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($einddatumVanTariefprijsbedrag['max'])) {
                $this->addUsingAlias(GsPrijsTariefTabelPeer::EINDDATUM_VAN_TARIEFPRIJSBEDRAG, $einddatumVanTariefprijsbedrag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsPrijsTariefTabelPeer::EINDDATUM_VAN_TARIEFPRIJSBEDRAG, $einddatumVanTariefprijsbedrag, $comparison);
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsPrijsTariefTabelQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySoortCoderingOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_CODERING, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsPrijsTariefTabelPeer::SOORT_CODERING, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterBySoortCoderingOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoortCoderingOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function joinSoortCoderingOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SoortCoderingOmschrijving');

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
            $this->addJoinObject($join, 'SoortCoderingOmschrijving');
        }

        return $this;
    }

    /**
     * Use the SoortCoderingOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useSoortCoderingOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSoortCoderingOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SoortCoderingOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsPrijsTariefTabelQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySoortTariefprijsbedragOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SRT_TARIEFPRIJSBEDRAG, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterBySoortTariefprijsbedragOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoortTariefprijsbedragOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function joinSoortTariefprijsbedragOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SoortTariefprijsbedragOmschrijving');

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
            $this->addJoinObject($join, 'SoortTariefprijsbedragOmschrijving');
        }

        return $this;
    }

    /**
     * Use the SoortTariefprijsbedragOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useSoortTariefprijsbedragOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSoortTariefprijsbedragOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SoortTariefprijsbedragOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsPrijsTariefTabelQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySoortBronOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsPrijsTariefTabelPeer::THESAURUSVERWIJZING_SOORT_BRON, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsPrijsTariefTabelPeer::SOORT_BRON, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterBySoortBronOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoortBronOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function joinSoortBronOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SoortBronOmschrijving');

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
            $this->addJoinObject($join, 'SoortBronOmschrijving');
        }

        return $this;
    }

    /**
     * Use the SoortBronOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useSoortBronOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSoortBronOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SoortBronOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsPrijsTariefTabel $gsPrijsTariefTabel Object to remove from the list of results
     *
     * @return GsPrijsTariefTabelQuery The current query, for fluid interface
     */
    public function prune($gsPrijsTariefTabel = null)
    {
        if ($gsPrijsTariefTabel) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsPrijsTariefTabelPeer::SOORT_CODERING), $gsPrijsTariefTabel->getSoortCodering(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_CODERING), $gsPrijsTariefTabel->getUniekeIdVanCodering(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsPrijsTariefTabelPeer::SOORT_TARIEFPRIJSBEDRAG), $gsPrijsTariefTabel->getSoortTariefprijsbedrag(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(GsPrijsTariefTabelPeer::SOORT_BRON), $gsPrijsTariefTabel->getSoortBron(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(GsPrijsTariefTabelPeer::UNIEKE_ID_VAN_BRON), $gsPrijsTariefTabel->getUniekeIdVanBron(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(GsPrijsTariefTabelPeer::AANVULLENDE_CONTRACT_INFORMATIE), $gsPrijsTariefTabel->getAanvullendeContractInformatie(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
