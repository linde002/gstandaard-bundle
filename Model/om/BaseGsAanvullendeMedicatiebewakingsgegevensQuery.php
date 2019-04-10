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
use PharmaIntelligence\GstandaardBundle\Model\GsAanvullendeMedicatiebewakingsgegevens;
use PharmaIntelligence\GstandaardBundle\Model\GsAanvullendeMedicatiebewakingsgegevensPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsAanvullendeMedicatiebewakingsgegevensQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;

/**
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery orderByThesnrBewakingssoort($order = Criteria::ASC) Order by the thesnr_bewakingssoort column
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery orderByBewakingssoort($order = Criteria::ASC) Order by the bewakingssoort column
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery orderByMedicatiebewakingIdentificerendeCode($order = Criteria::ASC) Order by the medicatiebewaking_identificerende_code column
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery orderByThesaurusverwijzingAanvullendeVoorwaarde($order = Criteria::ASC) Order by the thesaurusverwijzing_aanvullende_voorwaarde column
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery orderByMedicatiebewakingAanvullendeVoorwaarde($order = Criteria::ASC) Order by the medicatiebewaking_aanvullende_voorwaarde column
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery orderByCoderingWaarde1Alfanumeriek($order = Criteria::ASC) Order by the codering_waarde_1_alfanumeriek column
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery orderByCoderingWaarde2Numeriek($order = Criteria::ASC) Order by the codering_waarde_2_numeriek column
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery orderByCoderingWaarde3Numeriek($order = Criteria::ASC) Order by the codering_waarde_3_numeriek column
 *
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery groupByThesnrBewakingssoort() Group by the thesnr_bewakingssoort column
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery groupByBewakingssoort() Group by the bewakingssoort column
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery groupByMedicatiebewakingIdentificerendeCode() Group by the medicatiebewaking_identificerende_code column
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery groupByThesaurusverwijzingAanvullendeVoorwaarde() Group by the thesaurusverwijzing_aanvullende_voorwaarde column
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery groupByMedicatiebewakingAanvullendeVoorwaarde() Group by the medicatiebewaking_aanvullende_voorwaarde column
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery groupByCoderingWaarde1Alfanumeriek() Group by the codering_waarde_1_alfanumeriek column
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery groupByCoderingWaarde2Numeriek() Group by the codering_waarde_2_numeriek column
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery groupByCoderingWaarde3Numeriek() Group by the codering_waarde_3_numeriek column
 *
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery leftJoinBewakingssoortOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the BewakingssoortOmschrijving relation
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery rightJoinBewakingssoortOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BewakingssoortOmschrijving relation
 * @method GsAanvullendeMedicatiebewakingsgegevensQuery innerJoinBewakingssoortOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the BewakingssoortOmschrijving relation
 *
 * @method GsAanvullendeMedicatiebewakingsgegevens findOne(PropelPDO $con = null) Return the first GsAanvullendeMedicatiebewakingsgegevens matching the query
 * @method GsAanvullendeMedicatiebewakingsgegevens findOneOrCreate(PropelPDO $con = null) Return the first GsAanvullendeMedicatiebewakingsgegevens matching the query, or a new GsAanvullendeMedicatiebewakingsgegevens object populated from the query conditions when no match is found
 *
 * @method GsAanvullendeMedicatiebewakingsgegevens findOneByBestandnummer(int $bestandnummer) Return the first GsAanvullendeMedicatiebewakingsgegevens filtered by the bestandnummer column
 * @method GsAanvullendeMedicatiebewakingsgegevens findOneByMutatiekode(int $mutatiekode) Return the first GsAanvullendeMedicatiebewakingsgegevens filtered by the mutatiekode column
 * @method GsAanvullendeMedicatiebewakingsgegevens findOneByThesnrBewakingssoort(int $thesnr_bewakingssoort) Return the first GsAanvullendeMedicatiebewakingsgegevens filtered by the thesnr_bewakingssoort column
 * @method GsAanvullendeMedicatiebewakingsgegevens findOneByBewakingssoort(int $bewakingssoort) Return the first GsAanvullendeMedicatiebewakingsgegevens filtered by the bewakingssoort column
 * @method GsAanvullendeMedicatiebewakingsgegevens findOneByMedicatiebewakingIdentificerendeCode(int $medicatiebewaking_identificerende_code) Return the first GsAanvullendeMedicatiebewakingsgegevens filtered by the medicatiebewaking_identificerende_code column
 * @method GsAanvullendeMedicatiebewakingsgegevens findOneByThesaurusverwijzingAanvullendeVoorwaarde(int $thesaurusverwijzing_aanvullende_voorwaarde) Return the first GsAanvullendeMedicatiebewakingsgegevens filtered by the thesaurusverwijzing_aanvullende_voorwaarde column
 * @method GsAanvullendeMedicatiebewakingsgegevens findOneByMedicatiebewakingAanvullendeVoorwaarde(int $medicatiebewaking_aanvullende_voorwaarde) Return the first GsAanvullendeMedicatiebewakingsgegevens filtered by the medicatiebewaking_aanvullende_voorwaarde column
 * @method GsAanvullendeMedicatiebewakingsgegevens findOneByCoderingWaarde1Alfanumeriek(string $codering_waarde_1_alfanumeriek) Return the first GsAanvullendeMedicatiebewakingsgegevens filtered by the codering_waarde_1_alfanumeriek column
 * @method GsAanvullendeMedicatiebewakingsgegevens findOneByCoderingWaarde2Numeriek(int $codering_waarde_2_numeriek) Return the first GsAanvullendeMedicatiebewakingsgegevens filtered by the codering_waarde_2_numeriek column
 * @method GsAanvullendeMedicatiebewakingsgegevens findOneByCoderingWaarde3Numeriek(int $codering_waarde_3_numeriek) Return the first GsAanvullendeMedicatiebewakingsgegevens filtered by the codering_waarde_3_numeriek column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsAanvullendeMedicatiebewakingsgegevens objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsAanvullendeMedicatiebewakingsgegevens objects filtered by the mutatiekode column
 * @method array findByThesnrBewakingssoort(int $thesnr_bewakingssoort) Return GsAanvullendeMedicatiebewakingsgegevens objects filtered by the thesnr_bewakingssoort column
 * @method array findByBewakingssoort(int $bewakingssoort) Return GsAanvullendeMedicatiebewakingsgegevens objects filtered by the bewakingssoort column
 * @method array findByMedicatiebewakingIdentificerendeCode(int $medicatiebewaking_identificerende_code) Return GsAanvullendeMedicatiebewakingsgegevens objects filtered by the medicatiebewaking_identificerende_code column
 * @method array findByThesaurusverwijzingAanvullendeVoorwaarde(int $thesaurusverwijzing_aanvullende_voorwaarde) Return GsAanvullendeMedicatiebewakingsgegevens objects filtered by the thesaurusverwijzing_aanvullende_voorwaarde column
 * @method array findByMedicatiebewakingAanvullendeVoorwaarde(int $medicatiebewaking_aanvullende_voorwaarde) Return GsAanvullendeMedicatiebewakingsgegevens objects filtered by the medicatiebewaking_aanvullende_voorwaarde column
 * @method array findByCoderingWaarde1Alfanumeriek(string $codering_waarde_1_alfanumeriek) Return GsAanvullendeMedicatiebewakingsgegevens objects filtered by the codering_waarde_1_alfanumeriek column
 * @method array findByCoderingWaarde2Numeriek(int $codering_waarde_2_numeriek) Return GsAanvullendeMedicatiebewakingsgegevens objects filtered by the codering_waarde_2_numeriek column
 * @method array findByCoderingWaarde3Numeriek(int $codering_waarde_3_numeriek) Return GsAanvullendeMedicatiebewakingsgegevens objects filtered by the codering_waarde_3_numeriek column
 */
abstract class BaseGsAanvullendeMedicatiebewakingsgegevensQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsAanvullendeMedicatiebewakingsgegevensQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAanvullendeMedicatiebewakingsgegevens';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsAanvullendeMedicatiebewakingsgegevensQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsAanvullendeMedicatiebewakingsgegevensQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsAanvullendeMedicatiebewakingsgegevensQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsAanvullendeMedicatiebewakingsgegevensQuery) {
            return $criteria;
        }
        $query = new GsAanvullendeMedicatiebewakingsgegevensQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$bewakingssoort, $medicatiebewaking_identificerende_code, $medicatiebewaking_aanvullende_voorwaarde, $codering_waarde_1_alfanumeriek, $codering_waarde_2_numeriek]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsAanvullendeMedicatiebewakingsgegevens|GsAanvullendeMedicatiebewakingsgegevens[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsAanvullendeMedicatiebewakingsgegevensPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsAanvullendeMedicatiebewakingsgegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsAanvullendeMedicatiebewakingsgegevens A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `thesnr_bewakingssoort`, `bewakingssoort`, `medicatiebewaking_identificerende_code`, `thesaurusverwijzing_aanvullende_voorwaarde`, `medicatiebewaking_aanvullende_voorwaarde`, `codering_waarde_1_alfanumeriek`, `codering_waarde_2_numeriek`, `codering_waarde_3_numeriek` FROM `gs_aanvullende_medicatiebewakingsgegevens` WHERE `bewakingssoort` = :p0 AND `medicatiebewaking_identificerende_code` = :p1 AND `medicatiebewaking_aanvullende_voorwaarde` = :p2 AND `codering_waarde_1_alfanumeriek` = :p3 AND `codering_waarde_2_numeriek` = :p4';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsAanvullendeMedicatiebewakingsgegevens();
            $obj->hydrate($row);
            GsAanvullendeMedicatiebewakingsgegevensPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4])));
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
     * @return GsAanvullendeMedicatiebewakingsgegevens|GsAanvullendeMedicatiebewakingsgegevens[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsAanvullendeMedicatiebewakingsgegevens[]|mixed the list of results, formatted by the current formatter
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
     * @return GsAanvullendeMedicatiebewakingsgegevensQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_1_ALFANUMERIEK, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK, $key[4], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsAanvullendeMedicatiebewakingsgegevensQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_1_ALFANUMERIEK, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK, $key[4], Criteria::EQUAL);
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
     * @return GsAanvullendeMedicatiebewakingsgegevensQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsAanvullendeMedicatiebewakingsgegevensQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the thesnr_bewakingssoort column
     *
     * Example usage:
     * <code>
     * $query->filterByThesnrBewakingssoort(1234); // WHERE thesnr_bewakingssoort = 1234
     * $query->filterByThesnrBewakingssoort(array(12, 34)); // WHERE thesnr_bewakingssoort IN (12, 34)
     * $query->filterByThesnrBewakingssoort(array('min' => 12)); // WHERE thesnr_bewakingssoort >= 12
     * $query->filterByThesnrBewakingssoort(array('max' => 12)); // WHERE thesnr_bewakingssoort <= 12
     * </code>
     *
     * @see       filterByBewakingssoortOmschrijving()
     *
     * @param     mixed $thesnrBewakingssoort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvullendeMedicatiebewakingsgegevensQuery The current query, for fluid interface
     */
    public function filterByThesnrBewakingssoort($thesnrBewakingssoort = null, $comparison = null)
    {
        if (is_array($thesnrBewakingssoort)) {
            $useMinMax = false;
            if (isset($thesnrBewakingssoort['min'])) {
                $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::THESNR_BEWAKINGSSOORT, $thesnrBewakingssoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesnrBewakingssoort['max'])) {
                $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::THESNR_BEWAKINGSSOORT, $thesnrBewakingssoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::THESNR_BEWAKINGSSOORT, $thesnrBewakingssoort, $comparison);
    }

    /**
     * Filter the query on the bewakingssoort column
     *
     * Example usage:
     * <code>
     * $query->filterByBewakingssoort(1234); // WHERE bewakingssoort = 1234
     * $query->filterByBewakingssoort(array(12, 34)); // WHERE bewakingssoort IN (12, 34)
     * $query->filterByBewakingssoort(array('min' => 12)); // WHERE bewakingssoort >= 12
     * $query->filterByBewakingssoort(array('max' => 12)); // WHERE bewakingssoort <= 12
     * </code>
     *
     * @see       filterByBewakingssoortOmschrijving()
     *
     * @param     mixed $bewakingssoort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvullendeMedicatiebewakingsgegevensQuery The current query, for fluid interface
     */
    public function filterByBewakingssoort($bewakingssoort = null, $comparison = null)
    {
        if (is_array($bewakingssoort)) {
            $useMinMax = false;
            if (isset($bewakingssoort['min'])) {
                $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT, $bewakingssoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bewakingssoort['max'])) {
                $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT, $bewakingssoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT, $bewakingssoort, $comparison);
    }

    /**
     * Filter the query on the medicatiebewaking_identificerende_code column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicatiebewakingIdentificerendeCode(1234); // WHERE medicatiebewaking_identificerende_code = 1234
     * $query->filterByMedicatiebewakingIdentificerendeCode(array(12, 34)); // WHERE medicatiebewaking_identificerende_code IN (12, 34)
     * $query->filterByMedicatiebewakingIdentificerendeCode(array('min' => 12)); // WHERE medicatiebewaking_identificerende_code >= 12
     * $query->filterByMedicatiebewakingIdentificerendeCode(array('max' => 12)); // WHERE medicatiebewaking_identificerende_code <= 12
     * </code>
     *
     * @param     mixed $medicatiebewakingIdentificerendeCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvullendeMedicatiebewakingsgegevensQuery The current query, for fluid interface
     */
    public function filterByMedicatiebewakingIdentificerendeCode($medicatiebewakingIdentificerendeCode = null, $comparison = null)
    {
        if (is_array($medicatiebewakingIdentificerendeCode)) {
            $useMinMax = false;
            if (isset($medicatiebewakingIdentificerendeCode['min'])) {
                $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, $medicatiebewakingIdentificerendeCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($medicatiebewakingIdentificerendeCode['max'])) {
                $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, $medicatiebewakingIdentificerendeCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE, $medicatiebewakingIdentificerendeCode, $comparison);
    }

    /**
     * Filter the query on the thesaurusverwijzing_aanvullende_voorwaarde column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusverwijzingAanvullendeVoorwaarde(1234); // WHERE thesaurusverwijzing_aanvullende_voorwaarde = 1234
     * $query->filterByThesaurusverwijzingAanvullendeVoorwaarde(array(12, 34)); // WHERE thesaurusverwijzing_aanvullende_voorwaarde IN (12, 34)
     * $query->filterByThesaurusverwijzingAanvullendeVoorwaarde(array('min' => 12)); // WHERE thesaurusverwijzing_aanvullende_voorwaarde >= 12
     * $query->filterByThesaurusverwijzingAanvullendeVoorwaarde(array('max' => 12)); // WHERE thesaurusverwijzing_aanvullende_voorwaarde <= 12
     * </code>
     *
     * @param     mixed $thesaurusverwijzingAanvullendeVoorwaarde The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvullendeMedicatiebewakingsgegevensQuery The current query, for fluid interface
     */
    public function filterByThesaurusverwijzingAanvullendeVoorwaarde($thesaurusverwijzingAanvullendeVoorwaarde = null, $comparison = null)
    {
        if (is_array($thesaurusverwijzingAanvullendeVoorwaarde)) {
            $useMinMax = false;
            if (isset($thesaurusverwijzingAanvullendeVoorwaarde['min'])) {
                $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE, $thesaurusverwijzingAanvullendeVoorwaarde['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusverwijzingAanvullendeVoorwaarde['max'])) {
                $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE, $thesaurusverwijzingAanvullendeVoorwaarde['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::THESAURUSVERWIJZING_AANVULLENDE_VOORWAARDE, $thesaurusverwijzingAanvullendeVoorwaarde, $comparison);
    }

    /**
     * Filter the query on the medicatiebewaking_aanvullende_voorwaarde column
     *
     * Example usage:
     * <code>
     * $query->filterByMedicatiebewakingAanvullendeVoorwaarde(1234); // WHERE medicatiebewaking_aanvullende_voorwaarde = 1234
     * $query->filterByMedicatiebewakingAanvullendeVoorwaarde(array(12, 34)); // WHERE medicatiebewaking_aanvullende_voorwaarde IN (12, 34)
     * $query->filterByMedicatiebewakingAanvullendeVoorwaarde(array('min' => 12)); // WHERE medicatiebewaking_aanvullende_voorwaarde >= 12
     * $query->filterByMedicatiebewakingAanvullendeVoorwaarde(array('max' => 12)); // WHERE medicatiebewaking_aanvullende_voorwaarde <= 12
     * </code>
     *
     * @param     mixed $medicatiebewakingAanvullendeVoorwaarde The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvullendeMedicatiebewakingsgegevensQuery The current query, for fluid interface
     */
    public function filterByMedicatiebewakingAanvullendeVoorwaarde($medicatiebewakingAanvullendeVoorwaarde = null, $comparison = null)
    {
        if (is_array($medicatiebewakingAanvullendeVoorwaarde)) {
            $useMinMax = false;
            if (isset($medicatiebewakingAanvullendeVoorwaarde['min'])) {
                $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, $medicatiebewakingAanvullendeVoorwaarde['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($medicatiebewakingAanvullendeVoorwaarde['max'])) {
                $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, $medicatiebewakingAanvullendeVoorwaarde['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE, $medicatiebewakingAanvullendeVoorwaarde, $comparison);
    }

    /**
     * Filter the query on the codering_waarde_1_alfanumeriek column
     *
     * Example usage:
     * <code>
     * $query->filterByCoderingWaarde1Alfanumeriek('fooValue');   // WHERE codering_waarde_1_alfanumeriek = 'fooValue'
     * $query->filterByCoderingWaarde1Alfanumeriek('%fooValue%'); // WHERE codering_waarde_1_alfanumeriek LIKE '%fooValue%'
     * </code>
     *
     * @param     string $coderingWaarde1Alfanumeriek The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvullendeMedicatiebewakingsgegevensQuery The current query, for fluid interface
     */
    public function filterByCoderingWaarde1Alfanumeriek($coderingWaarde1Alfanumeriek = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($coderingWaarde1Alfanumeriek)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $coderingWaarde1Alfanumeriek)) {
                $coderingWaarde1Alfanumeriek = str_replace('*', '%', $coderingWaarde1Alfanumeriek);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_1_ALFANUMERIEK, $coderingWaarde1Alfanumeriek, $comparison);
    }

    /**
     * Filter the query on the codering_waarde_2_numeriek column
     *
     * Example usage:
     * <code>
     * $query->filterByCoderingWaarde2Numeriek(1234); // WHERE codering_waarde_2_numeriek = 1234
     * $query->filterByCoderingWaarde2Numeriek(array(12, 34)); // WHERE codering_waarde_2_numeriek IN (12, 34)
     * $query->filterByCoderingWaarde2Numeriek(array('min' => 12)); // WHERE codering_waarde_2_numeriek >= 12
     * $query->filterByCoderingWaarde2Numeriek(array('max' => 12)); // WHERE codering_waarde_2_numeriek <= 12
     * </code>
     *
     * @param     mixed $coderingWaarde2Numeriek The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvullendeMedicatiebewakingsgegevensQuery The current query, for fluid interface
     */
    public function filterByCoderingWaarde2Numeriek($coderingWaarde2Numeriek = null, $comparison = null)
    {
        if (is_array($coderingWaarde2Numeriek)) {
            $useMinMax = false;
            if (isset($coderingWaarde2Numeriek['min'])) {
                $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK, $coderingWaarde2Numeriek['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coderingWaarde2Numeriek['max'])) {
                $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK, $coderingWaarde2Numeriek['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK, $coderingWaarde2Numeriek, $comparison);
    }

    /**
     * Filter the query on the codering_waarde_3_numeriek column
     *
     * Example usage:
     * <code>
     * $query->filterByCoderingWaarde3Numeriek(1234); // WHERE codering_waarde_3_numeriek = 1234
     * $query->filterByCoderingWaarde3Numeriek(array(12, 34)); // WHERE codering_waarde_3_numeriek IN (12, 34)
     * $query->filterByCoderingWaarde3Numeriek(array('min' => 12)); // WHERE codering_waarde_3_numeriek >= 12
     * $query->filterByCoderingWaarde3Numeriek(array('max' => 12)); // WHERE codering_waarde_3_numeriek <= 12
     * </code>
     *
     * @param     mixed $coderingWaarde3Numeriek The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsAanvullendeMedicatiebewakingsgegevensQuery The current query, for fluid interface
     */
    public function filterByCoderingWaarde3Numeriek($coderingWaarde3Numeriek = null, $comparison = null)
    {
        if (is_array($coderingWaarde3Numeriek)) {
            $useMinMax = false;
            if (isset($coderingWaarde3Numeriek['min'])) {
                $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_3_NUMERIEK, $coderingWaarde3Numeriek['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coderingWaarde3Numeriek['max'])) {
                $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_3_NUMERIEK, $coderingWaarde3Numeriek['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_3_NUMERIEK, $coderingWaarde3Numeriek, $comparison);
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsAanvullendeMedicatiebewakingsgegevensQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByBewakingssoortOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::THESNR_BEWAKINGSSOORT, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByBewakingssoortOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BewakingssoortOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsAanvullendeMedicatiebewakingsgegevensQuery The current query, for fluid interface
     */
    public function joinBewakingssoortOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BewakingssoortOmschrijving');

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
            $this->addJoinObject($join, 'BewakingssoortOmschrijving');
        }

        return $this;
    }

    /**
     * Use the BewakingssoortOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useBewakingssoortOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinBewakingssoortOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BewakingssoortOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsAanvullendeMedicatiebewakingsgegevens $gsAanvullendeMedicatiebewakingsgegevens Object to remove from the list of results
     *
     * @return GsAanvullendeMedicatiebewakingsgegevensQuery The current query, for fluid interface
     */
    public function prune($gsAanvullendeMedicatiebewakingsgegevens = null)
    {
        if ($gsAanvullendeMedicatiebewakingsgegevens) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsAanvullendeMedicatiebewakingsgegevensPeer::BEWAKINGSSOORT), $gsAanvullendeMedicatiebewakingsgegevens->getBewakingssoort(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_IDENTIFICERENDE_CODE), $gsAanvullendeMedicatiebewakingsgegevens->getMedicatiebewakingIdentificerendeCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsAanvullendeMedicatiebewakingsgegevensPeer::MEDICATIEBEWAKING_AANVULLENDE_VOORWAARDE), $gsAanvullendeMedicatiebewakingsgegevens->getMedicatiebewakingAanvullendeVoorwaarde(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_1_ALFANUMERIEK), $gsAanvullendeMedicatiebewakingsgegevens->getCoderingWaarde1Alfanumeriek(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(GsAanvullendeMedicatiebewakingsgegevensPeer::CODERING_WAARDE_2_NUMERIEK), $gsAanvullendeMedicatiebewakingsgegevens->getCoderingWaarde2Numeriek(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
