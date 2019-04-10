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
use PharmaIntelligence\GstandaardBundle\Model\GsLokaleCodesZorgverzekeraarsZspcs;
use PharmaIntelligence\GstandaardBundle\Model\GsLokaleCodesZorgverzekeraarsZspcsPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsLokaleCodesZorgverzekeraarsZspcsQuery;

/**
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery orderByZorgverzekeraarSpecifiekePrestatieCode($order = Criteria::ASC) Order by the zorgverzekeraar_specifieke_prestatie_code column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery orderByUzoviCodeZorgverzekeraar($order = Criteria::ASC) Order by the uzovi_code_zorgverzekeraar column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery orderByArtikelOmschrijving($order = Criteria::ASC) Order by the artikel_omschrijving column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery orderByEtiketnaam($order = Criteria::ASC) Order by the etiketnaam column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery orderByMemocode($order = Criteria::ASC) Order by the memocode column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery orderByHoeveelheid($order = Criteria::ASC) Order by the hoeveelheid column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery orderByThesaurusverwijzingEenheid($order = Criteria::ASC) Order by the thesaurusverwijzing_eenheid column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery orderByEenheid($order = Criteria::ASC) Order by the eenheid column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery orderByDeclaratieprijs($order = Criteria::ASC) Order by the declaratieprijs column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery orderByWmg($order = Criteria::ASC) Order by the wmg column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery orderByUitsluitendVoorGecontracteerdeApotheken($order = Criteria::ASC) Order by the uitsluitend_voor_gecontracteerde_apotheken column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery orderByTariefsoortThesaurusVerwijzing($order = Criteria::ASC) Order by the tariefsoort_thesaurus_verwijzing column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery orderByTariefsoort($order = Criteria::ASC) Order by the tariefsoort column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery orderByBegindatum($order = Criteria::ASC) Order by the begindatum column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery orderByVervaldatum($order = Criteria::ASC) Order by the vervaldatum column
 *
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery groupByZorgverzekeraarSpecifiekePrestatieCode() Group by the zorgverzekeraar_specifieke_prestatie_code column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery groupByUzoviCodeZorgverzekeraar() Group by the uzovi_code_zorgverzekeraar column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery groupByArtikelOmschrijving() Group by the artikel_omschrijving column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery groupByEtiketnaam() Group by the etiketnaam column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery groupByMemocode() Group by the memocode column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery groupByHoeveelheid() Group by the hoeveelheid column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery groupByThesaurusverwijzingEenheid() Group by the thesaurusverwijzing_eenheid column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery groupByEenheid() Group by the eenheid column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery groupByDeclaratieprijs() Group by the declaratieprijs column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery groupByWmg() Group by the wmg column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery groupByUitsluitendVoorGecontracteerdeApotheken() Group by the uitsluitend_voor_gecontracteerde_apotheken column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery groupByTariefsoortThesaurusVerwijzing() Group by the tariefsoort_thesaurus_verwijzing column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery groupByTariefsoort() Group by the tariefsoort column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery groupByBegindatum() Group by the begindatum column
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery groupByVervaldatum() Group by the vervaldatum column
 *
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsLokaleCodesZorgverzekeraarsZspcsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsLokaleCodesZorgverzekeraarsZspcs findOne(PropelPDO $con = null) Return the first GsLokaleCodesZorgverzekeraarsZspcs matching the query
 * @method GsLokaleCodesZorgverzekeraarsZspcs findOneOrCreate(PropelPDO $con = null) Return the first GsLokaleCodesZorgverzekeraarsZspcs matching the query, or a new GsLokaleCodesZorgverzekeraarsZspcs object populated from the query conditions when no match is found
 *
 * @method GsLokaleCodesZorgverzekeraarsZspcs findOneByBestandnummer(int $bestandnummer) Return the first GsLokaleCodesZorgverzekeraarsZspcs filtered by the bestandnummer column
 * @method GsLokaleCodesZorgverzekeraarsZspcs findOneByMutatiekode(int $mutatiekode) Return the first GsLokaleCodesZorgverzekeraarsZspcs filtered by the mutatiekode column
 * @method GsLokaleCodesZorgverzekeraarsZspcs findOneByUzoviCodeZorgverzekeraar(string $uzovi_code_zorgverzekeraar) Return the first GsLokaleCodesZorgverzekeraarsZspcs filtered by the uzovi_code_zorgverzekeraar column
 * @method GsLokaleCodesZorgverzekeraarsZspcs findOneByArtikelOmschrijving(string $artikel_omschrijving) Return the first GsLokaleCodesZorgverzekeraarsZspcs filtered by the artikel_omschrijving column
 * @method GsLokaleCodesZorgverzekeraarsZspcs findOneByEtiketnaam(string $etiketnaam) Return the first GsLokaleCodesZorgverzekeraarsZspcs filtered by the etiketnaam column
 * @method GsLokaleCodesZorgverzekeraarsZspcs findOneByMemocode(string $memocode) Return the first GsLokaleCodesZorgverzekeraarsZspcs filtered by the memocode column
 * @method GsLokaleCodesZorgverzekeraarsZspcs findOneByHoeveelheid(string $hoeveelheid) Return the first GsLokaleCodesZorgverzekeraarsZspcs filtered by the hoeveelheid column
 * @method GsLokaleCodesZorgverzekeraarsZspcs findOneByThesaurusverwijzingEenheid(int $thesaurusverwijzing_eenheid) Return the first GsLokaleCodesZorgverzekeraarsZspcs filtered by the thesaurusverwijzing_eenheid column
 * @method GsLokaleCodesZorgverzekeraarsZspcs findOneByEenheid(int $eenheid) Return the first GsLokaleCodesZorgverzekeraarsZspcs filtered by the eenheid column
 * @method GsLokaleCodesZorgverzekeraarsZspcs findOneByDeclaratieprijs(string $declaratieprijs) Return the first GsLokaleCodesZorgverzekeraarsZspcs filtered by the declaratieprijs column
 * @method GsLokaleCodesZorgverzekeraarsZspcs findOneByWmg(int $wmg) Return the first GsLokaleCodesZorgverzekeraarsZspcs filtered by the wmg column
 * @method GsLokaleCodesZorgverzekeraarsZspcs findOneByUitsluitendVoorGecontracteerdeApotheken(int $uitsluitend_voor_gecontracteerde_apotheken) Return the first GsLokaleCodesZorgverzekeraarsZspcs filtered by the uitsluitend_voor_gecontracteerde_apotheken column
 * @method GsLokaleCodesZorgverzekeraarsZspcs findOneByTariefsoortThesaurusVerwijzing(int $tariefsoort_thesaurus_verwijzing) Return the first GsLokaleCodesZorgverzekeraarsZspcs filtered by the tariefsoort_thesaurus_verwijzing column
 * @method GsLokaleCodesZorgverzekeraarsZspcs findOneByTariefsoort(int $tariefsoort) Return the first GsLokaleCodesZorgverzekeraarsZspcs filtered by the tariefsoort column
 * @method GsLokaleCodesZorgverzekeraarsZspcs findOneByBegindatum(string $begindatum) Return the first GsLokaleCodesZorgverzekeraarsZspcs filtered by the begindatum column
 * @method GsLokaleCodesZorgverzekeraarsZspcs findOneByVervaldatum(string $vervaldatum) Return the first GsLokaleCodesZorgverzekeraarsZspcs filtered by the vervaldatum column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsLokaleCodesZorgverzekeraarsZspcs objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsLokaleCodesZorgverzekeraarsZspcs objects filtered by the mutatiekode column
 * @method array findByZorgverzekeraarSpecifiekePrestatieCode(string $zorgverzekeraar_specifieke_prestatie_code) Return GsLokaleCodesZorgverzekeraarsZspcs objects filtered by the zorgverzekeraar_specifieke_prestatie_code column
 * @method array findByUzoviCodeZorgverzekeraar(string $uzovi_code_zorgverzekeraar) Return GsLokaleCodesZorgverzekeraarsZspcs objects filtered by the uzovi_code_zorgverzekeraar column
 * @method array findByArtikelOmschrijving(string $artikel_omschrijving) Return GsLokaleCodesZorgverzekeraarsZspcs objects filtered by the artikel_omschrijving column
 * @method array findByEtiketnaam(string $etiketnaam) Return GsLokaleCodesZorgverzekeraarsZspcs objects filtered by the etiketnaam column
 * @method array findByMemocode(string $memocode) Return GsLokaleCodesZorgverzekeraarsZspcs objects filtered by the memocode column
 * @method array findByHoeveelheid(string $hoeveelheid) Return GsLokaleCodesZorgverzekeraarsZspcs objects filtered by the hoeveelheid column
 * @method array findByThesaurusverwijzingEenheid(int $thesaurusverwijzing_eenheid) Return GsLokaleCodesZorgverzekeraarsZspcs objects filtered by the thesaurusverwijzing_eenheid column
 * @method array findByEenheid(int $eenheid) Return GsLokaleCodesZorgverzekeraarsZspcs objects filtered by the eenheid column
 * @method array findByDeclaratieprijs(string $declaratieprijs) Return GsLokaleCodesZorgverzekeraarsZspcs objects filtered by the declaratieprijs column
 * @method array findByWmg(int $wmg) Return GsLokaleCodesZorgverzekeraarsZspcs objects filtered by the wmg column
 * @method array findByUitsluitendVoorGecontracteerdeApotheken(int $uitsluitend_voor_gecontracteerde_apotheken) Return GsLokaleCodesZorgverzekeraarsZspcs objects filtered by the uitsluitend_voor_gecontracteerde_apotheken column
 * @method array findByTariefsoortThesaurusVerwijzing(int $tariefsoort_thesaurus_verwijzing) Return GsLokaleCodesZorgverzekeraarsZspcs objects filtered by the tariefsoort_thesaurus_verwijzing column
 * @method array findByTariefsoort(int $tariefsoort) Return GsLokaleCodesZorgverzekeraarsZspcs objects filtered by the tariefsoort column
 * @method array findByBegindatum(string $begindatum) Return GsLokaleCodesZorgverzekeraarsZspcs objects filtered by the begindatum column
 * @method array findByVervaldatum(string $vervaldatum) Return GsLokaleCodesZorgverzekeraarsZspcs objects filtered by the vervaldatum column
 */
abstract class BaseGsLokaleCodesZorgverzekeraarsZspcsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsLokaleCodesZorgverzekeraarsZspcsQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLokaleCodesZorgverzekeraarsZspcs';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsLokaleCodesZorgverzekeraarsZspcsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsLokaleCodesZorgverzekeraarsZspcsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsLokaleCodesZorgverzekeraarsZspcsQuery) {
            return $criteria;
        }
        $query = new GsLokaleCodesZorgverzekeraarsZspcsQuery(null, null, $modelAlias);

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
     * @return   GsLokaleCodesZorgverzekeraarsZspcs|GsLokaleCodesZorgverzekeraarsZspcs[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsLokaleCodesZorgverzekeraarsZspcsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsLokaleCodesZorgverzekeraarsZspcsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsLokaleCodesZorgverzekeraarsZspcs A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByZorgverzekeraarSpecifiekePrestatieCode($key, $con = null)
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
     * @return                 GsLokaleCodesZorgverzekeraarsZspcs A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `zorgverzekeraar_specifieke_prestatie_code`, `uzovi_code_zorgverzekeraar`, `artikel_omschrijving`, `etiketnaam`, `memocode`, `hoeveelheid`, `thesaurusverwijzing_eenheid`, `eenheid`, `declaratieprijs`, `wmg`, `uitsluitend_voor_gecontracteerde_apotheken`, `tariefsoort_thesaurus_verwijzing`, `tariefsoort`, `begindatum`, `vervaldatum` FROM `gs_lokale_codes_zorgverzekeraars_zspcs` WHERE `zorgverzekeraar_specifieke_prestatie_code` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsLokaleCodesZorgverzekeraarsZspcs();
            $obj->hydrate($row);
            GsLokaleCodesZorgverzekeraarsZspcsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsLokaleCodesZorgverzekeraarsZspcs|GsLokaleCodesZorgverzekeraarsZspcs[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsLokaleCodesZorgverzekeraarsZspcs[]|mixed the list of results, formatted by the current formatter
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
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE, $keys, Criteria::IN);
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
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the zorgverzekeraar_specifieke_prestatie_code column
     *
     * Example usage:
     * <code>
     * $query->filterByZorgverzekeraarSpecifiekePrestatieCode(1234); // WHERE zorgverzekeraar_specifieke_prestatie_code = 1234
     * $query->filterByZorgverzekeraarSpecifiekePrestatieCode(array(12, 34)); // WHERE zorgverzekeraar_specifieke_prestatie_code IN (12, 34)
     * $query->filterByZorgverzekeraarSpecifiekePrestatieCode(array('min' => 12)); // WHERE zorgverzekeraar_specifieke_prestatie_code >= 12
     * $query->filterByZorgverzekeraarSpecifiekePrestatieCode(array('max' => 12)); // WHERE zorgverzekeraar_specifieke_prestatie_code <= 12
     * </code>
     *
     * @param     mixed $zorgverzekeraarSpecifiekePrestatieCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByZorgverzekeraarSpecifiekePrestatieCode($zorgverzekeraarSpecifiekePrestatieCode = null, $comparison = null)
    {
        if (is_array($zorgverzekeraarSpecifiekePrestatieCode)) {
            $useMinMax = false;
            if (isset($zorgverzekeraarSpecifiekePrestatieCode['min'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE, $zorgverzekeraarSpecifiekePrestatieCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zorgverzekeraarSpecifiekePrestatieCode['max'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE, $zorgverzekeraarSpecifiekePrestatieCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE, $zorgverzekeraarSpecifiekePrestatieCode, $comparison);
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
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByUzoviCodeZorgverzekeraar($uzoviCodeZorgverzekeraar = null, $comparison = null)
    {
        if (is_array($uzoviCodeZorgverzekeraar)) {
            $useMinMax = false;
            if (isset($uzoviCodeZorgverzekeraar['min'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::UZOVI_CODE_ZORGVERZEKERAAR, $uzoviCodeZorgverzekeraar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uzoviCodeZorgverzekeraar['max'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::UZOVI_CODE_ZORGVERZEKERAAR, $uzoviCodeZorgverzekeraar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::UZOVI_CODE_ZORGVERZEKERAAR, $uzoviCodeZorgverzekeraar, $comparison);
    }

    /**
     * Filter the query on the artikel_omschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByArtikelOmschrijving('fooValue');   // WHERE artikel_omschrijving = 'fooValue'
     * $query->filterByArtikelOmschrijving('%fooValue%'); // WHERE artikel_omschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artikelOmschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByArtikelOmschrijving($artikelOmschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artikelOmschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $artikelOmschrijving)) {
                $artikelOmschrijving = str_replace('*', '%', $artikelOmschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::ARTIKEL_OMSCHRIJVING, $artikelOmschrijving, $comparison);
    }

    /**
     * Filter the query on the etiketnaam column
     *
     * Example usage:
     * <code>
     * $query->filterByEtiketnaam('fooValue');   // WHERE etiketnaam = 'fooValue'
     * $query->filterByEtiketnaam('%fooValue%'); // WHERE etiketnaam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etiketnaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByEtiketnaam($etiketnaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etiketnaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etiketnaam)) {
                $etiketnaam = str_replace('*', '%', $etiketnaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::ETIKETNAAM, $etiketnaam, $comparison);
    }

    /**
     * Filter the query on the memocode column
     *
     * Example usage:
     * <code>
     * $query->filterByMemocode('fooValue');   // WHERE memocode = 'fooValue'
     * $query->filterByMemocode('%fooValue%'); // WHERE memocode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $memocode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByMemocode($memocode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($memocode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $memocode)) {
                $memocode = str_replace('*', '%', $memocode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::MEMOCODE, $memocode, $comparison);
    }

    /**
     * Filter the query on the hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByHoeveelheid(1234); // WHERE hoeveelheid = 1234
     * $query->filterByHoeveelheid(array(12, 34)); // WHERE hoeveelheid IN (12, 34)
     * $query->filterByHoeveelheid(array('min' => 12)); // WHERE hoeveelheid >= 12
     * $query->filterByHoeveelheid(array('max' => 12)); // WHERE hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $hoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByHoeveelheid($hoeveelheid = null, $comparison = null)
    {
        if (is_array($hoeveelheid)) {
            $useMinMax = false;
            if (isset($hoeveelheid['min'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::HOEVEELHEID, $hoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hoeveelheid['max'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::HOEVEELHEID, $hoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::HOEVEELHEID, $hoeveelheid, $comparison);
    }

    /**
     * Filter the query on the thesaurusverwijzing_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusverwijzingEenheid(1234); // WHERE thesaurusverwijzing_eenheid = 1234
     * $query->filterByThesaurusverwijzingEenheid(array(12, 34)); // WHERE thesaurusverwijzing_eenheid IN (12, 34)
     * $query->filterByThesaurusverwijzingEenheid(array('min' => 12)); // WHERE thesaurusverwijzing_eenheid >= 12
     * $query->filterByThesaurusverwijzingEenheid(array('max' => 12)); // WHERE thesaurusverwijzing_eenheid <= 12
     * </code>
     *
     * @param     mixed $thesaurusverwijzingEenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByThesaurusverwijzingEenheid($thesaurusverwijzingEenheid = null, $comparison = null)
    {
        if (is_array($thesaurusverwijzingEenheid)) {
            $useMinMax = false;
            if (isset($thesaurusverwijzingEenheid['min'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::THESAURUSVERWIJZING_EENHEID, $thesaurusverwijzingEenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusverwijzingEenheid['max'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::THESAURUSVERWIJZING_EENHEID, $thesaurusverwijzingEenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::THESAURUSVERWIJZING_EENHEID, $thesaurusverwijzingEenheid, $comparison);
    }

    /**
     * Filter the query on the eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByEenheid(1234); // WHERE eenheid = 1234
     * $query->filterByEenheid(array(12, 34)); // WHERE eenheid IN (12, 34)
     * $query->filterByEenheid(array('min' => 12)); // WHERE eenheid >= 12
     * $query->filterByEenheid(array('max' => 12)); // WHERE eenheid <= 12
     * </code>
     *
     * @param     mixed $eenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByEenheid($eenheid = null, $comparison = null)
    {
        if (is_array($eenheid)) {
            $useMinMax = false;
            if (isset($eenheid['min'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::EENHEID, $eenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eenheid['max'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::EENHEID, $eenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::EENHEID, $eenheid, $comparison);
    }

    /**
     * Filter the query on the declaratieprijs column
     *
     * Example usage:
     * <code>
     * $query->filterByDeclaratieprijs(1234); // WHERE declaratieprijs = 1234
     * $query->filterByDeclaratieprijs(array(12, 34)); // WHERE declaratieprijs IN (12, 34)
     * $query->filterByDeclaratieprijs(array('min' => 12)); // WHERE declaratieprijs >= 12
     * $query->filterByDeclaratieprijs(array('max' => 12)); // WHERE declaratieprijs <= 12
     * </code>
     *
     * @param     mixed $declaratieprijs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByDeclaratieprijs($declaratieprijs = null, $comparison = null)
    {
        if (is_array($declaratieprijs)) {
            $useMinMax = false;
            if (isset($declaratieprijs['min'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::DECLARATIEPRIJS, $declaratieprijs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($declaratieprijs['max'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::DECLARATIEPRIJS, $declaratieprijs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::DECLARATIEPRIJS, $declaratieprijs, $comparison);
    }

    /**
     * Filter the query on the wmg column
     *
     * Example usage:
     * <code>
     * $query->filterByWmg(1234); // WHERE wmg = 1234
     * $query->filterByWmg(array(12, 34)); // WHERE wmg IN (12, 34)
     * $query->filterByWmg(array('min' => 12)); // WHERE wmg >= 12
     * $query->filterByWmg(array('max' => 12)); // WHERE wmg <= 12
     * </code>
     *
     * @param     mixed $wmg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByWmg($wmg = null, $comparison = null)
    {
        if (is_array($wmg)) {
            $useMinMax = false;
            if (isset($wmg['min'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::WMG, $wmg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wmg['max'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::WMG, $wmg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::WMG, $wmg, $comparison);
    }

    /**
     * Filter the query on the uitsluitend_voor_gecontracteerde_apotheken column
     *
     * Example usage:
     * <code>
     * $query->filterByUitsluitendVoorGecontracteerdeApotheken(1234); // WHERE uitsluitend_voor_gecontracteerde_apotheken = 1234
     * $query->filterByUitsluitendVoorGecontracteerdeApotheken(array(12, 34)); // WHERE uitsluitend_voor_gecontracteerde_apotheken IN (12, 34)
     * $query->filterByUitsluitendVoorGecontracteerdeApotheken(array('min' => 12)); // WHERE uitsluitend_voor_gecontracteerde_apotheken >= 12
     * $query->filterByUitsluitendVoorGecontracteerdeApotheken(array('max' => 12)); // WHERE uitsluitend_voor_gecontracteerde_apotheken <= 12
     * </code>
     *
     * @param     mixed $uitsluitendVoorGecontracteerdeApotheken The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByUitsluitendVoorGecontracteerdeApotheken($uitsluitendVoorGecontracteerdeApotheken = null, $comparison = null)
    {
        if (is_array($uitsluitendVoorGecontracteerdeApotheken)) {
            $useMinMax = false;
            if (isset($uitsluitendVoorGecontracteerdeApotheken['min'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::UITSLUITEND_VOOR_GECONTRACTEERDE_APOTHEKEN, $uitsluitendVoorGecontracteerdeApotheken['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uitsluitendVoorGecontracteerdeApotheken['max'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::UITSLUITEND_VOOR_GECONTRACTEERDE_APOTHEKEN, $uitsluitendVoorGecontracteerdeApotheken['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::UITSLUITEND_VOOR_GECONTRACTEERDE_APOTHEKEN, $uitsluitendVoorGecontracteerdeApotheken, $comparison);
    }

    /**
     * Filter the query on the tariefsoort_thesaurus_verwijzing column
     *
     * Example usage:
     * <code>
     * $query->filterByTariefsoortThesaurusVerwijzing(1234); // WHERE tariefsoort_thesaurus_verwijzing = 1234
     * $query->filterByTariefsoortThesaurusVerwijzing(array(12, 34)); // WHERE tariefsoort_thesaurus_verwijzing IN (12, 34)
     * $query->filterByTariefsoortThesaurusVerwijzing(array('min' => 12)); // WHERE tariefsoort_thesaurus_verwijzing >= 12
     * $query->filterByTariefsoortThesaurusVerwijzing(array('max' => 12)); // WHERE tariefsoort_thesaurus_verwijzing <= 12
     * </code>
     *
     * @param     mixed $tariefsoortThesaurusVerwijzing The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByTariefsoortThesaurusVerwijzing($tariefsoortThesaurusVerwijzing = null, $comparison = null)
    {
        if (is_array($tariefsoortThesaurusVerwijzing)) {
            $useMinMax = false;
            if (isset($tariefsoortThesaurusVerwijzing['min'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT_THESAURUS_VERWIJZING, $tariefsoortThesaurusVerwijzing['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tariefsoortThesaurusVerwijzing['max'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT_THESAURUS_VERWIJZING, $tariefsoortThesaurusVerwijzing['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT_THESAURUS_VERWIJZING, $tariefsoortThesaurusVerwijzing, $comparison);
    }

    /**
     * Filter the query on the tariefsoort column
     *
     * Example usage:
     * <code>
     * $query->filterByTariefsoort(1234); // WHERE tariefsoort = 1234
     * $query->filterByTariefsoort(array(12, 34)); // WHERE tariefsoort IN (12, 34)
     * $query->filterByTariefsoort(array('min' => 12)); // WHERE tariefsoort >= 12
     * $query->filterByTariefsoort(array('max' => 12)); // WHERE tariefsoort <= 12
     * </code>
     *
     * @param     mixed $tariefsoort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByTariefsoort($tariefsoort = null, $comparison = null)
    {
        if (is_array($tariefsoort)) {
            $useMinMax = false;
            if (isset($tariefsoort['min'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT, $tariefsoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tariefsoort['max'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT, $tariefsoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::TARIEFSOORT, $tariefsoort, $comparison);
    }

    /**
     * Filter the query on the begindatum column
     *
     * Example usage:
     * <code>
     * $query->filterByBegindatum('2011-03-14'); // WHERE begindatum = '2011-03-14'
     * $query->filterByBegindatum('now'); // WHERE begindatum = '2011-03-14'
     * $query->filterByBegindatum(array('max' => 'yesterday')); // WHERE begindatum < '2011-03-13'
     * </code>
     *
     * @param     mixed $begindatum The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByBegindatum($begindatum = null, $comparison = null)
    {
        if (is_array($begindatum)) {
            $useMinMax = false;
            if (isset($begindatum['min'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::BEGINDATUM, $begindatum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($begindatum['max'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::BEGINDATUM, $begindatum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::BEGINDATUM, $begindatum, $comparison);
    }

    /**
     * Filter the query on the vervaldatum column
     *
     * Example usage:
     * <code>
     * $query->filterByVervaldatum('2011-03-14'); // WHERE vervaldatum = '2011-03-14'
     * $query->filterByVervaldatum('now'); // WHERE vervaldatum = '2011-03-14'
     * $query->filterByVervaldatum(array('max' => 'yesterday')); // WHERE vervaldatum < '2011-03-13'
     * </code>
     *
     * @param     mixed $vervaldatum The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function filterByVervaldatum($vervaldatum = null, $comparison = null)
    {
        if (is_array($vervaldatum)) {
            $useMinMax = false;
            if (isset($vervaldatum['min'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::VERVALDATUM, $vervaldatum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vervaldatum['max'])) {
                $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::VERVALDATUM, $vervaldatum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::VERVALDATUM, $vervaldatum, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsLokaleCodesZorgverzekeraarsZspcs $gsLokaleCodesZorgverzekeraarsZspcs Object to remove from the list of results
     *
     * @return GsLokaleCodesZorgverzekeraarsZspcsQuery The current query, for fluid interface
     */
    public function prune($gsLokaleCodesZorgverzekeraarsZspcs = null)
    {
        if ($gsLokaleCodesZorgverzekeraarsZspcs) {
            $this->addUsingAlias(GsLokaleCodesZorgverzekeraarsZspcsPeer::ZORGVERZEKERAAR_SPECIFIEKE_PRESTATIE_CODE, $gsLokaleCodesZorgverzekeraarsZspcs->getZorgverzekeraarSpecifiekePrestatieCode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
