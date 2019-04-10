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
use PharmaIntelligence\GstandaardBundle\Model\GsDoseringenBasisalgemeen;
use PharmaIntelligence\GstandaardBundle\Model\GsDoseringenBasisalgemeenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsDoseringenBasisalgemeenQuery;

/**
 * @method GsDoseringenBasisalgemeenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsDoseringenBasisalgemeenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsDoseringenBasisalgemeenQuery orderByGeneriekeproductcode($order = Criteria::ASC) Order by the generiekeproductcode column
 * @method GsDoseringenBasisalgemeenQuery orderByVrijgaveDoorHetWinap($order = Criteria::ASC) Order by the vrijgave_door_het_winap column
 * @method GsDoseringenBasisalgemeenQuery orderByMinLeeftijdInMaandenVoorVerstrekking($order = Criteria::ASC) Order by the min_leeftijd_in_maanden_voor_verstrekking column
 * @method GsDoseringenBasisalgemeenQuery orderByThesaurusGeslachtscodering($order = Criteria::ASC) Order by the thesaurus_geslachtscodering column
 * @method GsDoseringenBasisalgemeenQuery orderByToegestaanVoorGeslacht($order = Criteria::ASC) Order by the toegestaan_voor_geslacht column
 * @method GsDoseringenBasisalgemeenQuery orderByPercentageKinderdosering($order = Criteria::ASC) Order by the percentage_kinderdosering column
 * @method GsDoseringenBasisalgemeenQuery orderByKodeHoogRisicoOverdosering($order = Criteria::ASC) Order by the kode_hoog_risico_overdosering column
 *
 * @method GsDoseringenBasisalgemeenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsDoseringenBasisalgemeenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsDoseringenBasisalgemeenQuery groupByGeneriekeproductcode() Group by the generiekeproductcode column
 * @method GsDoseringenBasisalgemeenQuery groupByVrijgaveDoorHetWinap() Group by the vrijgave_door_het_winap column
 * @method GsDoseringenBasisalgemeenQuery groupByMinLeeftijdInMaandenVoorVerstrekking() Group by the min_leeftijd_in_maanden_voor_verstrekking column
 * @method GsDoseringenBasisalgemeenQuery groupByThesaurusGeslachtscodering() Group by the thesaurus_geslachtscodering column
 * @method GsDoseringenBasisalgemeenQuery groupByToegestaanVoorGeslacht() Group by the toegestaan_voor_geslacht column
 * @method GsDoseringenBasisalgemeenQuery groupByPercentageKinderdosering() Group by the percentage_kinderdosering column
 * @method GsDoseringenBasisalgemeenQuery groupByKodeHoogRisicoOverdosering() Group by the kode_hoog_risico_overdosering column
 *
 * @method GsDoseringenBasisalgemeenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsDoseringenBasisalgemeenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsDoseringenBasisalgemeenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsDoseringenBasisalgemeen findOne(PropelPDO $con = null) Return the first GsDoseringenBasisalgemeen matching the query
 * @method GsDoseringenBasisalgemeen findOneOrCreate(PropelPDO $con = null) Return the first GsDoseringenBasisalgemeen matching the query, or a new GsDoseringenBasisalgemeen object populated from the query conditions when no match is found
 *
 * @method GsDoseringenBasisalgemeen findOneByBestandnummer(int $bestandnummer) Return the first GsDoseringenBasisalgemeen filtered by the bestandnummer column
 * @method GsDoseringenBasisalgemeen findOneByMutatiekode(int $mutatiekode) Return the first GsDoseringenBasisalgemeen filtered by the mutatiekode column
 * @method GsDoseringenBasisalgemeen findOneByVrijgaveDoorHetWinap(int $vrijgave_door_het_winap) Return the first GsDoseringenBasisalgemeen filtered by the vrijgave_door_het_winap column
 * @method GsDoseringenBasisalgemeen findOneByMinLeeftijdInMaandenVoorVerstrekking(int $min_leeftijd_in_maanden_voor_verstrekking) Return the first GsDoseringenBasisalgemeen filtered by the min_leeftijd_in_maanden_voor_verstrekking column
 * @method GsDoseringenBasisalgemeen findOneByThesaurusGeslachtscodering(int $thesaurus_geslachtscodering) Return the first GsDoseringenBasisalgemeen filtered by the thesaurus_geslachtscodering column
 * @method GsDoseringenBasisalgemeen findOneByToegestaanVoorGeslacht(int $toegestaan_voor_geslacht) Return the first GsDoseringenBasisalgemeen filtered by the toegestaan_voor_geslacht column
 * @method GsDoseringenBasisalgemeen findOneByPercentageKinderdosering(int $percentage_kinderdosering) Return the first GsDoseringenBasisalgemeen filtered by the percentage_kinderdosering column
 * @method GsDoseringenBasisalgemeen findOneByKodeHoogRisicoOverdosering(string $kode_hoog_risico_overdosering) Return the first GsDoseringenBasisalgemeen filtered by the kode_hoog_risico_overdosering column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsDoseringenBasisalgemeen objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsDoseringenBasisalgemeen objects filtered by the mutatiekode column
 * @method array findByGeneriekeproductcode(int $generiekeproductcode) Return GsDoseringenBasisalgemeen objects filtered by the generiekeproductcode column
 * @method array findByVrijgaveDoorHetWinap(int $vrijgave_door_het_winap) Return GsDoseringenBasisalgemeen objects filtered by the vrijgave_door_het_winap column
 * @method array findByMinLeeftijdInMaandenVoorVerstrekking(int $min_leeftijd_in_maanden_voor_verstrekking) Return GsDoseringenBasisalgemeen objects filtered by the min_leeftijd_in_maanden_voor_verstrekking column
 * @method array findByThesaurusGeslachtscodering(int $thesaurus_geslachtscodering) Return GsDoseringenBasisalgemeen objects filtered by the thesaurus_geslachtscodering column
 * @method array findByToegestaanVoorGeslacht(int $toegestaan_voor_geslacht) Return GsDoseringenBasisalgemeen objects filtered by the toegestaan_voor_geslacht column
 * @method array findByPercentageKinderdosering(int $percentage_kinderdosering) Return GsDoseringenBasisalgemeen objects filtered by the percentage_kinderdosering column
 * @method array findByKodeHoogRisicoOverdosering(string $kode_hoog_risico_overdosering) Return GsDoseringenBasisalgemeen objects filtered by the kode_hoog_risico_overdosering column
 */
abstract class BaseGsDoseringenBasisalgemeenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsDoseringenBasisalgemeenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDoseringenBasisalgemeen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsDoseringenBasisalgemeenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsDoseringenBasisalgemeenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsDoseringenBasisalgemeenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsDoseringenBasisalgemeenQuery) {
            return $criteria;
        }
        $query = new GsDoseringenBasisalgemeenQuery(null, null, $modelAlias);

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
     * @return   GsDoseringenBasisalgemeen|GsDoseringenBasisalgemeen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsDoseringenBasisalgemeenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsDoseringenBasisalgemeenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsDoseringenBasisalgemeen A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByGeneriekeproductcode($key, $con = null)
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
     * @return                 GsDoseringenBasisalgemeen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `generiekeproductcode`, `vrijgave_door_het_winap`, `min_leeftijd_in_maanden_voor_verstrekking`, `thesaurus_geslachtscodering`, `toegestaan_voor_geslacht`, `percentage_kinderdosering`, `kode_hoog_risico_overdosering` FROM `gs_doseringen_basisalgemeen` WHERE `generiekeproductcode` = :p0';
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
            $obj = new GsDoseringenBasisalgemeen();
            $obj->hydrate($row);
            GsDoseringenBasisalgemeenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsDoseringenBasisalgemeen|GsDoseringenBasisalgemeen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsDoseringenBasisalgemeen[]|mixed the list of results, formatted by the current formatter
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
     * @return GsDoseringenBasisalgemeenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::GENERIEKEPRODUCTCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsDoseringenBasisalgemeenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::GENERIEKEPRODUCTCODE, $keys, Criteria::IN);
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
     * @return GsDoseringenBasisalgemeenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsDoseringenBasisalgemeenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @return GsDoseringenBasisalgemeenQuery The current query, for fluid interface
     */
    public function filterByGeneriekeproductcode($generiekeproductcode = null, $comparison = null)
    {
        if (is_array($generiekeproductcode)) {
            $useMinMax = false;
            if (isset($generiekeproductcode['min'])) {
                $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($generiekeproductcode['max'])) {
                $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode, $comparison);
    }

    /**
     * Filter the query on the vrijgave_door_het_winap column
     *
     * Example usage:
     * <code>
     * $query->filterByVrijgaveDoorHetWinap(1234); // WHERE vrijgave_door_het_winap = 1234
     * $query->filterByVrijgaveDoorHetWinap(array(12, 34)); // WHERE vrijgave_door_het_winap IN (12, 34)
     * $query->filterByVrijgaveDoorHetWinap(array('min' => 12)); // WHERE vrijgave_door_het_winap >= 12
     * $query->filterByVrijgaveDoorHetWinap(array('max' => 12)); // WHERE vrijgave_door_het_winap <= 12
     * </code>
     *
     * @param     mixed $vrijgaveDoorHetWinap The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenBasisalgemeenQuery The current query, for fluid interface
     */
    public function filterByVrijgaveDoorHetWinap($vrijgaveDoorHetWinap = null, $comparison = null)
    {
        if (is_array($vrijgaveDoorHetWinap)) {
            $useMinMax = false;
            if (isset($vrijgaveDoorHetWinap['min'])) {
                $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::VRIJGAVE_DOOR_HET_WINAP, $vrijgaveDoorHetWinap['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vrijgaveDoorHetWinap['max'])) {
                $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::VRIJGAVE_DOOR_HET_WINAP, $vrijgaveDoorHetWinap['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::VRIJGAVE_DOOR_HET_WINAP, $vrijgaveDoorHetWinap, $comparison);
    }

    /**
     * Filter the query on the min_leeftijd_in_maanden_voor_verstrekking column
     *
     * Example usage:
     * <code>
     * $query->filterByMinLeeftijdInMaandenVoorVerstrekking(1234); // WHERE min_leeftijd_in_maanden_voor_verstrekking = 1234
     * $query->filterByMinLeeftijdInMaandenVoorVerstrekking(array(12, 34)); // WHERE min_leeftijd_in_maanden_voor_verstrekking IN (12, 34)
     * $query->filterByMinLeeftijdInMaandenVoorVerstrekking(array('min' => 12)); // WHERE min_leeftijd_in_maanden_voor_verstrekking >= 12
     * $query->filterByMinLeeftijdInMaandenVoorVerstrekking(array('max' => 12)); // WHERE min_leeftijd_in_maanden_voor_verstrekking <= 12
     * </code>
     *
     * @param     mixed $minLeeftijdInMaandenVoorVerstrekking The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenBasisalgemeenQuery The current query, for fluid interface
     */
    public function filterByMinLeeftijdInMaandenVoorVerstrekking($minLeeftijdInMaandenVoorVerstrekking = null, $comparison = null)
    {
        if (is_array($minLeeftijdInMaandenVoorVerstrekking)) {
            $useMinMax = false;
            if (isset($minLeeftijdInMaandenVoorVerstrekking['min'])) {
                $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::MIN_LEEFTIJD_IN_MAANDEN_VOOR_VERSTREKKING, $minLeeftijdInMaandenVoorVerstrekking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minLeeftijdInMaandenVoorVerstrekking['max'])) {
                $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::MIN_LEEFTIJD_IN_MAANDEN_VOOR_VERSTREKKING, $minLeeftijdInMaandenVoorVerstrekking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::MIN_LEEFTIJD_IN_MAANDEN_VOOR_VERSTREKKING, $minLeeftijdInMaandenVoorVerstrekking, $comparison);
    }

    /**
     * Filter the query on the thesaurus_geslachtscodering column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusGeslachtscodering(1234); // WHERE thesaurus_geslachtscodering = 1234
     * $query->filterByThesaurusGeslachtscodering(array(12, 34)); // WHERE thesaurus_geslachtscodering IN (12, 34)
     * $query->filterByThesaurusGeslachtscodering(array('min' => 12)); // WHERE thesaurus_geslachtscodering >= 12
     * $query->filterByThesaurusGeslachtscodering(array('max' => 12)); // WHERE thesaurus_geslachtscodering <= 12
     * </code>
     *
     * @param     mixed $thesaurusGeslachtscodering The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenBasisalgemeenQuery The current query, for fluid interface
     */
    public function filterByThesaurusGeslachtscodering($thesaurusGeslachtscodering = null, $comparison = null)
    {
        if (is_array($thesaurusGeslachtscodering)) {
            $useMinMax = false;
            if (isset($thesaurusGeslachtscodering['min'])) {
                $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::THESAURUS_GESLACHTSCODERING, $thesaurusGeslachtscodering['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusGeslachtscodering['max'])) {
                $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::THESAURUS_GESLACHTSCODERING, $thesaurusGeslachtscodering['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::THESAURUS_GESLACHTSCODERING, $thesaurusGeslachtscodering, $comparison);
    }

    /**
     * Filter the query on the toegestaan_voor_geslacht column
     *
     * Example usage:
     * <code>
     * $query->filterByToegestaanVoorGeslacht(1234); // WHERE toegestaan_voor_geslacht = 1234
     * $query->filterByToegestaanVoorGeslacht(array(12, 34)); // WHERE toegestaan_voor_geslacht IN (12, 34)
     * $query->filterByToegestaanVoorGeslacht(array('min' => 12)); // WHERE toegestaan_voor_geslacht >= 12
     * $query->filterByToegestaanVoorGeslacht(array('max' => 12)); // WHERE toegestaan_voor_geslacht <= 12
     * </code>
     *
     * @param     mixed $toegestaanVoorGeslacht The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenBasisalgemeenQuery The current query, for fluid interface
     */
    public function filterByToegestaanVoorGeslacht($toegestaanVoorGeslacht = null, $comparison = null)
    {
        if (is_array($toegestaanVoorGeslacht)) {
            $useMinMax = false;
            if (isset($toegestaanVoorGeslacht['min'])) {
                $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::TOEGESTAAN_VOOR_GESLACHT, $toegestaanVoorGeslacht['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($toegestaanVoorGeslacht['max'])) {
                $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::TOEGESTAAN_VOOR_GESLACHT, $toegestaanVoorGeslacht['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::TOEGESTAAN_VOOR_GESLACHT, $toegestaanVoorGeslacht, $comparison);
    }

    /**
     * Filter the query on the percentage_kinderdosering column
     *
     * Example usage:
     * <code>
     * $query->filterByPercentageKinderdosering(1234); // WHERE percentage_kinderdosering = 1234
     * $query->filterByPercentageKinderdosering(array(12, 34)); // WHERE percentage_kinderdosering IN (12, 34)
     * $query->filterByPercentageKinderdosering(array('min' => 12)); // WHERE percentage_kinderdosering >= 12
     * $query->filterByPercentageKinderdosering(array('max' => 12)); // WHERE percentage_kinderdosering <= 12
     * </code>
     *
     * @param     mixed $percentageKinderdosering The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenBasisalgemeenQuery The current query, for fluid interface
     */
    public function filterByPercentageKinderdosering($percentageKinderdosering = null, $comparison = null)
    {
        if (is_array($percentageKinderdosering)) {
            $useMinMax = false;
            if (isset($percentageKinderdosering['min'])) {
                $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::PERCENTAGE_KINDERDOSERING, $percentageKinderdosering['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($percentageKinderdosering['max'])) {
                $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::PERCENTAGE_KINDERDOSERING, $percentageKinderdosering['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::PERCENTAGE_KINDERDOSERING, $percentageKinderdosering, $comparison);
    }

    /**
     * Filter the query on the kode_hoog_risico_overdosering column
     *
     * Example usage:
     * <code>
     * $query->filterByKodeHoogRisicoOverdosering('fooValue');   // WHERE kode_hoog_risico_overdosering = 'fooValue'
     * $query->filterByKodeHoogRisicoOverdosering('%fooValue%'); // WHERE kode_hoog_risico_overdosering LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kodeHoogRisicoOverdosering The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDoseringenBasisalgemeenQuery The current query, for fluid interface
     */
    public function filterByKodeHoogRisicoOverdosering($kodeHoogRisicoOverdosering = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kodeHoogRisicoOverdosering)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kodeHoogRisicoOverdosering)) {
                $kodeHoogRisicoOverdosering = str_replace('*', '%', $kodeHoogRisicoOverdosering);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::KODE_HOOG_RISICO_OVERDOSERING, $kodeHoogRisicoOverdosering, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsDoseringenBasisalgemeen $gsDoseringenBasisalgemeen Object to remove from the list of results
     *
     * @return GsDoseringenBasisalgemeenQuery The current query, for fluid interface
     */
    public function prune($gsDoseringenBasisalgemeen = null)
    {
        if ($gsDoseringenBasisalgemeen) {
            $this->addUsingAlias(GsDoseringenBasisalgemeenPeer::GENERIEKEPRODUCTCODE, $gsDoseringenBasisalgemeen->getGeneriekeproductcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
