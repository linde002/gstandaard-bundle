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
use PharmaIntelligence\GstandaardBundle\Model\GsCodestelselZrs;
use PharmaIntelligence\GstandaardBundle\Model\GsCodestelselZrsPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsCodestelselZrsQuery;

/**
 * @method GsCodestelselZrsQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsCodestelselZrsQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsCodestelselZrsQuery orderBySoortCode($order = Criteria::ASC) Order by the soort_code column
 * @method GsCodestelselZrsQuery orderByZorgRegistratieNummer($order = Criteria::ASC) Order by the zorg_registratie_nummer column
 * @method GsCodestelselZrsQuery orderByMemocodeBijZrNummerUniekPerAaacod($order = Criteria::ASC) Order by the memocode_bij_zr_nummer_uniek_per_aaacod column
 * @method GsCodestelselZrsQuery orderByOmschrijvingZrnrIn70PositiesVoorKeuzemenus($order = Criteria::ASC) Order by the omschrijving_zrnr_in_70_posities_voor_keuzemenus column
 * @method GsCodestelselZrsQuery orderByOmschrijvingZrnrIn45PositiesVoorOpEtiket($order = Criteria::ASC) Order by the omschrijving_zrnr_in_45_posities_voor_op_etiket column
 * @method GsCodestelselZrsQuery orderByTekstmodulethesaurus103($order = Criteria::ASC) Order by the tekstmodulethesaurus_103 column
 * @method GsCodestelselZrsQuery orderByTekstmodule($order = Criteria::ASC) Order by the tekstmodule column
 * @method GsCodestelselZrsQuery orderByTekstsoortthesaurus104($order = Criteria::ASC) Order by the tekstsoortthesaurus_104 column
 * @method GsCodestelselZrsQuery orderByTekstsoort($order = Criteria::ASC) Order by the tekstsoort column
 * @method GsCodestelselZrsQuery orderByTekstNivoKode($order = Criteria::ASC) Order by the tekst_nivo_kode column
 * @method GsCodestelselZrsQuery orderByDatumVan1eOpname($order = Criteria::ASC) Order by the datum_van_1e_opname column
 * @method GsCodestelselZrsQuery orderByDatumVanLaatsteMutatie($order = Criteria::ASC) Order by the datum_van_laatste_mutatie column
 * @method GsCodestelselZrsQuery orderByDatumVanInactiefMaken($order = Criteria::ASC) Order by the datum_van_inactief_maken column
 * @method GsCodestelselZrsQuery orderByThesaurusnummer($order = Criteria::ASC) Order by the thesaurusnummer column
 * @method GsCodestelselZrsQuery orderByThesaurusItemnummer($order = Criteria::ASC) Order by the thesaurus_itemnummer column
 *
 * @method GsCodestelselZrsQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsCodestelselZrsQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsCodestelselZrsQuery groupBySoortCode() Group by the soort_code column
 * @method GsCodestelselZrsQuery groupByZorgRegistratieNummer() Group by the zorg_registratie_nummer column
 * @method GsCodestelselZrsQuery groupByMemocodeBijZrNummerUniekPerAaacod() Group by the memocode_bij_zr_nummer_uniek_per_aaacod column
 * @method GsCodestelselZrsQuery groupByOmschrijvingZrnrIn70PositiesVoorKeuzemenus() Group by the omschrijving_zrnr_in_70_posities_voor_keuzemenus column
 * @method GsCodestelselZrsQuery groupByOmschrijvingZrnrIn45PositiesVoorOpEtiket() Group by the omschrijving_zrnr_in_45_posities_voor_op_etiket column
 * @method GsCodestelselZrsQuery groupByTekstmodulethesaurus103() Group by the tekstmodulethesaurus_103 column
 * @method GsCodestelselZrsQuery groupByTekstmodule() Group by the tekstmodule column
 * @method GsCodestelselZrsQuery groupByTekstsoortthesaurus104() Group by the tekstsoortthesaurus_104 column
 * @method GsCodestelselZrsQuery groupByTekstsoort() Group by the tekstsoort column
 * @method GsCodestelselZrsQuery groupByTekstNivoKode() Group by the tekst_nivo_kode column
 * @method GsCodestelselZrsQuery groupByDatumVan1eOpname() Group by the datum_van_1e_opname column
 * @method GsCodestelselZrsQuery groupByDatumVanLaatsteMutatie() Group by the datum_van_laatste_mutatie column
 * @method GsCodestelselZrsQuery groupByDatumVanInactiefMaken() Group by the datum_van_inactief_maken column
 * @method GsCodestelselZrsQuery groupByThesaurusnummer() Group by the thesaurusnummer column
 * @method GsCodestelselZrsQuery groupByThesaurusItemnummer() Group by the thesaurus_itemnummer column
 *
 * @method GsCodestelselZrsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsCodestelselZrsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsCodestelselZrsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsCodestelselZrs findOne(PropelPDO $con = null) Return the first GsCodestelselZrs matching the query
 * @method GsCodestelselZrs findOneOrCreate(PropelPDO $con = null) Return the first GsCodestelselZrs matching the query, or a new GsCodestelselZrs object populated from the query conditions when no match is found
 *
 * @method GsCodestelselZrs findOneByBestandnummer(int $bestandnummer) Return the first GsCodestelselZrs filtered by the bestandnummer column
 * @method GsCodestelselZrs findOneByMutatiekode(int $mutatiekode) Return the first GsCodestelselZrs filtered by the mutatiekode column
 * @method GsCodestelselZrs findOneBySoortCode(int $soort_code) Return the first GsCodestelselZrs filtered by the soort_code column
 * @method GsCodestelselZrs findOneByZorgRegistratieNummer(int $zorg_registratie_nummer) Return the first GsCodestelselZrs filtered by the zorg_registratie_nummer column
 * @method GsCodestelselZrs findOneByMemocodeBijZrNummerUniekPerAaacod(string $memocode_bij_zr_nummer_uniek_per_aaacod) Return the first GsCodestelselZrs filtered by the memocode_bij_zr_nummer_uniek_per_aaacod column
 * @method GsCodestelselZrs findOneByOmschrijvingZrnrIn70PositiesVoorKeuzemenus(string $omschrijving_zrnr_in_70_posities_voor_keuzemenus) Return the first GsCodestelselZrs filtered by the omschrijving_zrnr_in_70_posities_voor_keuzemenus column
 * @method GsCodestelselZrs findOneByOmschrijvingZrnrIn45PositiesVoorOpEtiket(string $omschrijving_zrnr_in_45_posities_voor_op_etiket) Return the first GsCodestelselZrs filtered by the omschrijving_zrnr_in_45_posities_voor_op_etiket column
 * @method GsCodestelselZrs findOneByTekstmodulethesaurus103(int $tekstmodulethesaurus_103) Return the first GsCodestelselZrs filtered by the tekstmodulethesaurus_103 column
 * @method GsCodestelselZrs findOneByTekstmodule(int $tekstmodule) Return the first GsCodestelselZrs filtered by the tekstmodule column
 * @method GsCodestelselZrs findOneByTekstsoortthesaurus104(int $tekstsoortthesaurus_104) Return the first GsCodestelselZrs filtered by the tekstsoortthesaurus_104 column
 * @method GsCodestelselZrs findOneByTekstsoort(int $tekstsoort) Return the first GsCodestelselZrs filtered by the tekstsoort column
 * @method GsCodestelselZrs findOneByTekstNivoKode(int $tekst_nivo_kode) Return the first GsCodestelselZrs filtered by the tekst_nivo_kode column
 * @method GsCodestelselZrs findOneByDatumVan1eOpname(string $datum_van_1e_opname) Return the first GsCodestelselZrs filtered by the datum_van_1e_opname column
 * @method GsCodestelselZrs findOneByDatumVanLaatsteMutatie(string $datum_van_laatste_mutatie) Return the first GsCodestelselZrs filtered by the datum_van_laatste_mutatie column
 * @method GsCodestelselZrs findOneByDatumVanInactiefMaken(string $datum_van_inactief_maken) Return the first GsCodestelselZrs filtered by the datum_van_inactief_maken column
 * @method GsCodestelselZrs findOneByThesaurusnummer(int $thesaurusnummer) Return the first GsCodestelselZrs filtered by the thesaurusnummer column
 * @method GsCodestelselZrs findOneByThesaurusItemnummer(int $thesaurus_itemnummer) Return the first GsCodestelselZrs filtered by the thesaurus_itemnummer column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsCodestelselZrs objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsCodestelselZrs objects filtered by the mutatiekode column
 * @method array findBySoortCode(int $soort_code) Return GsCodestelselZrs objects filtered by the soort_code column
 * @method array findByZorgRegistratieNummer(int $zorg_registratie_nummer) Return GsCodestelselZrs objects filtered by the zorg_registratie_nummer column
 * @method array findByMemocodeBijZrNummerUniekPerAaacod(string $memocode_bij_zr_nummer_uniek_per_aaacod) Return GsCodestelselZrs objects filtered by the memocode_bij_zr_nummer_uniek_per_aaacod column
 * @method array findByOmschrijvingZrnrIn70PositiesVoorKeuzemenus(string $omschrijving_zrnr_in_70_posities_voor_keuzemenus) Return GsCodestelselZrs objects filtered by the omschrijving_zrnr_in_70_posities_voor_keuzemenus column
 * @method array findByOmschrijvingZrnrIn45PositiesVoorOpEtiket(string $omschrijving_zrnr_in_45_posities_voor_op_etiket) Return GsCodestelselZrs objects filtered by the omschrijving_zrnr_in_45_posities_voor_op_etiket column
 * @method array findByTekstmodulethesaurus103(int $tekstmodulethesaurus_103) Return GsCodestelselZrs objects filtered by the tekstmodulethesaurus_103 column
 * @method array findByTekstmodule(int $tekstmodule) Return GsCodestelselZrs objects filtered by the tekstmodule column
 * @method array findByTekstsoortthesaurus104(int $tekstsoortthesaurus_104) Return GsCodestelselZrs objects filtered by the tekstsoortthesaurus_104 column
 * @method array findByTekstsoort(int $tekstsoort) Return GsCodestelselZrs objects filtered by the tekstsoort column
 * @method array findByTekstNivoKode(int $tekst_nivo_kode) Return GsCodestelselZrs objects filtered by the tekst_nivo_kode column
 * @method array findByDatumVan1eOpname(string $datum_van_1e_opname) Return GsCodestelselZrs objects filtered by the datum_van_1e_opname column
 * @method array findByDatumVanLaatsteMutatie(string $datum_van_laatste_mutatie) Return GsCodestelselZrs objects filtered by the datum_van_laatste_mutatie column
 * @method array findByDatumVanInactiefMaken(string $datum_van_inactief_maken) Return GsCodestelselZrs objects filtered by the datum_van_inactief_maken column
 * @method array findByThesaurusnummer(int $thesaurusnummer) Return GsCodestelselZrs objects filtered by the thesaurusnummer column
 * @method array findByThesaurusItemnummer(int $thesaurus_itemnummer) Return GsCodestelselZrs objects filtered by the thesaurus_itemnummer column
 */
abstract class BaseGsCodestelselZrsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsCodestelselZrsQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsCodestelselZrs';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsCodestelselZrsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsCodestelselZrsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsCodestelselZrsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsCodestelselZrsQuery) {
            return $criteria;
        }
        $query = new GsCodestelselZrsQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$soort_code, $zorg_registratie_nummer]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsCodestelselZrs|GsCodestelselZrs[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsCodestelselZrsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsCodestelselZrsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsCodestelselZrs A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `soort_code`, `zorg_registratie_nummer`, `memocode_bij_zr_nummer_uniek_per_aaacod`, `omschrijving_zrnr_in_70_posities_voor_keuzemenus`, `omschrijving_zrnr_in_45_posities_voor_op_etiket`, `tekstmodulethesaurus_103`, `tekstmodule`, `tekstsoortthesaurus_104`, `tekstsoort`, `tekst_nivo_kode`, `datum_van_1e_opname`, `datum_van_laatste_mutatie`, `datum_van_inactief_maken`, `thesaurusnummer`, `thesaurus_itemnummer` FROM `gs_codestelsel_zrs` WHERE `soort_code` = :p0 AND `zorg_registratie_nummer` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsCodestelselZrs();
            $obj->hydrate($row);
            GsCodestelselZrsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsCodestelselZrs|GsCodestelselZrs[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsCodestelselZrs[]|mixed the list of results, formatted by the current formatter
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
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsCodestelselZrsPeer::SOORT_CODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsCodestelselZrsPeer::SOORT_CODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER, $key[1], Criteria::EQUAL);
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
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the soort_code column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortCode(1234); // WHERE soort_code = 1234
     * $query->filterBySoortCode(array(12, 34)); // WHERE soort_code IN (12, 34)
     * $query->filterBySoortCode(array('min' => 12)); // WHERE soort_code >= 12
     * $query->filterBySoortCode(array('max' => 12)); // WHERE soort_code <= 12
     * </code>
     *
     * @param     mixed $soortCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterBySoortCode($soortCode = null, $comparison = null)
    {
        if (is_array($soortCode)) {
            $useMinMax = false;
            if (isset($soortCode['min'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::SOORT_CODE, $soortCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortCode['max'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::SOORT_CODE, $soortCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsPeer::SOORT_CODE, $soortCode, $comparison);
    }

    /**
     * Filter the query on the zorg_registratie_nummer column
     *
     * Example usage:
     * <code>
     * $query->filterByZorgRegistratieNummer(1234); // WHERE zorg_registratie_nummer = 1234
     * $query->filterByZorgRegistratieNummer(array(12, 34)); // WHERE zorg_registratie_nummer IN (12, 34)
     * $query->filterByZorgRegistratieNummer(array('min' => 12)); // WHERE zorg_registratie_nummer >= 12
     * $query->filterByZorgRegistratieNummer(array('max' => 12)); // WHERE zorg_registratie_nummer <= 12
     * </code>
     *
     * @param     mixed $zorgRegistratieNummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterByZorgRegistratieNummer($zorgRegistratieNummer = null, $comparison = null)
    {
        if (is_array($zorgRegistratieNummer)) {
            $useMinMax = false;
            if (isset($zorgRegistratieNummer['min'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER, $zorgRegistratieNummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zorgRegistratieNummer['max'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER, $zorgRegistratieNummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER, $zorgRegistratieNummer, $comparison);
    }

    /**
     * Filter the query on the memocode_bij_zr_nummer_uniek_per_aaacod column
     *
     * Example usage:
     * <code>
     * $query->filterByMemocodeBijZrNummerUniekPerAaacod('fooValue');   // WHERE memocode_bij_zr_nummer_uniek_per_aaacod = 'fooValue'
     * $query->filterByMemocodeBijZrNummerUniekPerAaacod('%fooValue%'); // WHERE memocode_bij_zr_nummer_uniek_per_aaacod LIKE '%fooValue%'
     * </code>
     *
     * @param     string $memocodeBijZrNummerUniekPerAaacod The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterByMemocodeBijZrNummerUniekPerAaacod($memocodeBijZrNummerUniekPerAaacod = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($memocodeBijZrNummerUniekPerAaacod)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $memocodeBijZrNummerUniekPerAaacod)) {
                $memocodeBijZrNummerUniekPerAaacod = str_replace('*', '%', $memocodeBijZrNummerUniekPerAaacod);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsPeer::MEMOCODE_BIJ_ZR_NUMMER_UNIEK_PER_AAACOD, $memocodeBijZrNummerUniekPerAaacod, $comparison);
    }

    /**
     * Filter the query on the omschrijving_zrnr_in_70_posities_voor_keuzemenus column
     *
     * Example usage:
     * <code>
     * $query->filterByOmschrijvingZrnrIn70PositiesVoorKeuzemenus('fooValue');   // WHERE omschrijving_zrnr_in_70_posities_voor_keuzemenus = 'fooValue'
     * $query->filterByOmschrijvingZrnrIn70PositiesVoorKeuzemenus('%fooValue%'); // WHERE omschrijving_zrnr_in_70_posities_voor_keuzemenus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $omschrijvingZrnrIn70PositiesVoorKeuzemenus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterByOmschrijvingZrnrIn70PositiesVoorKeuzemenus($omschrijvingZrnrIn70PositiesVoorKeuzemenus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($omschrijvingZrnrIn70PositiesVoorKeuzemenus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $omschrijvingZrnrIn70PositiesVoorKeuzemenus)) {
                $omschrijvingZrnrIn70PositiesVoorKeuzemenus = str_replace('*', '%', $omschrijvingZrnrIn70PositiesVoorKeuzemenus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsPeer::OMSCHRIJVING_ZRNR_IN_70_POSITIES_VOOR_KEUZEMENUS, $omschrijvingZrnrIn70PositiesVoorKeuzemenus, $comparison);
    }

    /**
     * Filter the query on the omschrijving_zrnr_in_45_posities_voor_op_etiket column
     *
     * Example usage:
     * <code>
     * $query->filterByOmschrijvingZrnrIn45PositiesVoorOpEtiket('fooValue');   // WHERE omschrijving_zrnr_in_45_posities_voor_op_etiket = 'fooValue'
     * $query->filterByOmschrijvingZrnrIn45PositiesVoorOpEtiket('%fooValue%'); // WHERE omschrijving_zrnr_in_45_posities_voor_op_etiket LIKE '%fooValue%'
     * </code>
     *
     * @param     string $omschrijvingZrnrIn45PositiesVoorOpEtiket The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterByOmschrijvingZrnrIn45PositiesVoorOpEtiket($omschrijvingZrnrIn45PositiesVoorOpEtiket = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($omschrijvingZrnrIn45PositiesVoorOpEtiket)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $omschrijvingZrnrIn45PositiesVoorOpEtiket)) {
                $omschrijvingZrnrIn45PositiesVoorOpEtiket = str_replace('*', '%', $omschrijvingZrnrIn45PositiesVoorOpEtiket);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsPeer::OMSCHRIJVING_ZRNR_IN_45_POSITIES_VOOR_OP_ETIKET, $omschrijvingZrnrIn45PositiesVoorOpEtiket, $comparison);
    }

    /**
     * Filter the query on the tekstmodulethesaurus_103 column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstmodulethesaurus103(1234); // WHERE tekstmodulethesaurus_103 = 1234
     * $query->filterByTekstmodulethesaurus103(array(12, 34)); // WHERE tekstmodulethesaurus_103 IN (12, 34)
     * $query->filterByTekstmodulethesaurus103(array('min' => 12)); // WHERE tekstmodulethesaurus_103 >= 12
     * $query->filterByTekstmodulethesaurus103(array('max' => 12)); // WHERE tekstmodulethesaurus_103 <= 12
     * </code>
     *
     * @param     mixed $tekstmodulethesaurus103 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterByTekstmodulethesaurus103($tekstmodulethesaurus103 = null, $comparison = null)
    {
        if (is_array($tekstmodulethesaurus103)) {
            $useMinMax = false;
            if (isset($tekstmodulethesaurus103['min'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::TEKSTMODULETHESAURUS_103, $tekstmodulethesaurus103['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstmodulethesaurus103['max'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::TEKSTMODULETHESAURUS_103, $tekstmodulethesaurus103['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsPeer::TEKSTMODULETHESAURUS_103, $tekstmodulethesaurus103, $comparison);
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
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterByTekstmodule($tekstmodule = null, $comparison = null)
    {
        if (is_array($tekstmodule)) {
            $useMinMax = false;
            if (isset($tekstmodule['min'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::TEKSTMODULE, $tekstmodule['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstmodule['max'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::TEKSTMODULE, $tekstmodule['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsPeer::TEKSTMODULE, $tekstmodule, $comparison);
    }

    /**
     * Filter the query on the tekstsoortthesaurus_104 column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstsoortthesaurus104(1234); // WHERE tekstsoortthesaurus_104 = 1234
     * $query->filterByTekstsoortthesaurus104(array(12, 34)); // WHERE tekstsoortthesaurus_104 IN (12, 34)
     * $query->filterByTekstsoortthesaurus104(array('min' => 12)); // WHERE tekstsoortthesaurus_104 >= 12
     * $query->filterByTekstsoortthesaurus104(array('max' => 12)); // WHERE tekstsoortthesaurus_104 <= 12
     * </code>
     *
     * @param     mixed $tekstsoortthesaurus104 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterByTekstsoortthesaurus104($tekstsoortthesaurus104 = null, $comparison = null)
    {
        if (is_array($tekstsoortthesaurus104)) {
            $useMinMax = false;
            if (isset($tekstsoortthesaurus104['min'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::TEKSTSOORTTHESAURUS_104, $tekstsoortthesaurus104['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstsoortthesaurus104['max'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::TEKSTSOORTTHESAURUS_104, $tekstsoortthesaurus104['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsPeer::TEKSTSOORTTHESAURUS_104, $tekstsoortthesaurus104, $comparison);
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
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterByTekstsoort($tekstsoort = null, $comparison = null)
    {
        if (is_array($tekstsoort)) {
            $useMinMax = false;
            if (isset($tekstsoort['min'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::TEKSTSOORT, $tekstsoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstsoort['max'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::TEKSTSOORT, $tekstsoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsPeer::TEKSTSOORT, $tekstsoort, $comparison);
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
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterByTekstNivoKode($tekstNivoKode = null, $comparison = null)
    {
        if (is_array($tekstNivoKode)) {
            $useMinMax = false;
            if (isset($tekstNivoKode['min'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::TEKST_NIVO_KODE, $tekstNivoKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstNivoKode['max'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::TEKST_NIVO_KODE, $tekstNivoKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsPeer::TEKST_NIVO_KODE, $tekstNivoKode, $comparison);
    }

    /**
     * Filter the query on the datum_van_1e_opname column
     *
     * Example usage:
     * <code>
     * $query->filterByDatumVan1eOpname('2011-03-14'); // WHERE datum_van_1e_opname = '2011-03-14'
     * $query->filterByDatumVan1eOpname('now'); // WHERE datum_van_1e_opname = '2011-03-14'
     * $query->filterByDatumVan1eOpname(array('max' => 'yesterday')); // WHERE datum_van_1e_opname < '2011-03-13'
     * </code>
     *
     * @param     mixed $datumVan1eOpname The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterByDatumVan1eOpname($datumVan1eOpname = null, $comparison = null)
    {
        if (is_array($datumVan1eOpname)) {
            $useMinMax = false;
            if (isset($datumVan1eOpname['min'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::DATUM_VAN_1E_OPNAME, $datumVan1eOpname['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumVan1eOpname['max'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::DATUM_VAN_1E_OPNAME, $datumVan1eOpname['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsPeer::DATUM_VAN_1E_OPNAME, $datumVan1eOpname, $comparison);
    }

    /**
     * Filter the query on the datum_van_laatste_mutatie column
     *
     * Example usage:
     * <code>
     * $query->filterByDatumVanLaatsteMutatie('2011-03-14'); // WHERE datum_van_laatste_mutatie = '2011-03-14'
     * $query->filterByDatumVanLaatsteMutatie('now'); // WHERE datum_van_laatste_mutatie = '2011-03-14'
     * $query->filterByDatumVanLaatsteMutatie(array('max' => 'yesterday')); // WHERE datum_van_laatste_mutatie < '2011-03-13'
     * </code>
     *
     * @param     mixed $datumVanLaatsteMutatie The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterByDatumVanLaatsteMutatie($datumVanLaatsteMutatie = null, $comparison = null)
    {
        if (is_array($datumVanLaatsteMutatie)) {
            $useMinMax = false;
            if (isset($datumVanLaatsteMutatie['min'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::DATUM_VAN_LAATSTE_MUTATIE, $datumVanLaatsteMutatie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumVanLaatsteMutatie['max'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::DATUM_VAN_LAATSTE_MUTATIE, $datumVanLaatsteMutatie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsPeer::DATUM_VAN_LAATSTE_MUTATIE, $datumVanLaatsteMutatie, $comparison);
    }

    /**
     * Filter the query on the datum_van_inactief_maken column
     *
     * Example usage:
     * <code>
     * $query->filterByDatumVanInactiefMaken('2011-03-14'); // WHERE datum_van_inactief_maken = '2011-03-14'
     * $query->filterByDatumVanInactiefMaken('now'); // WHERE datum_van_inactief_maken = '2011-03-14'
     * $query->filterByDatumVanInactiefMaken(array('max' => 'yesterday')); // WHERE datum_van_inactief_maken < '2011-03-13'
     * </code>
     *
     * @param     mixed $datumVanInactiefMaken The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterByDatumVanInactiefMaken($datumVanInactiefMaken = null, $comparison = null)
    {
        if (is_array($datumVanInactiefMaken)) {
            $useMinMax = false;
            if (isset($datumVanInactiefMaken['min'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::DATUM_VAN_INACTIEF_MAKEN, $datumVanInactiefMaken['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumVanInactiefMaken['max'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::DATUM_VAN_INACTIEF_MAKEN, $datumVanInactiefMaken['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsPeer::DATUM_VAN_INACTIEF_MAKEN, $datumVanInactiefMaken, $comparison);
    }

    /**
     * Filter the query on the thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusnummer(1234); // WHERE thesaurusnummer = 1234
     * $query->filterByThesaurusnummer(array(12, 34)); // WHERE thesaurusnummer IN (12, 34)
     * $query->filterByThesaurusnummer(array('min' => 12)); // WHERE thesaurusnummer >= 12
     * $query->filterByThesaurusnummer(array('max' => 12)); // WHERE thesaurusnummer <= 12
     * </code>
     *
     * @param     mixed $thesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterByThesaurusnummer($thesaurusnummer = null, $comparison = null)
    {
        if (is_array($thesaurusnummer)) {
            $useMinMax = false;
            if (isset($thesaurusnummer['min'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::THESAURUSNUMMER, $thesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusnummer['max'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::THESAURUSNUMMER, $thesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsPeer::THESAURUSNUMMER, $thesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the thesaurus_itemnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusItemnummer(1234); // WHERE thesaurus_itemnummer = 1234
     * $query->filterByThesaurusItemnummer(array(12, 34)); // WHERE thesaurus_itemnummer IN (12, 34)
     * $query->filterByThesaurusItemnummer(array('min' => 12)); // WHERE thesaurus_itemnummer >= 12
     * $query->filterByThesaurusItemnummer(array('max' => 12)); // WHERE thesaurus_itemnummer <= 12
     * </code>
     *
     * @param     mixed $thesaurusItemnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function filterByThesaurusItemnummer($thesaurusItemnummer = null, $comparison = null)
    {
        if (is_array($thesaurusItemnummer)) {
            $useMinMax = false;
            if (isset($thesaurusItemnummer['min'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::THESAURUS_ITEMNUMMER, $thesaurusItemnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusItemnummer['max'])) {
                $this->addUsingAlias(GsCodestelselZrsPeer::THESAURUS_ITEMNUMMER, $thesaurusItemnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsCodestelselZrsPeer::THESAURUS_ITEMNUMMER, $thesaurusItemnummer, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsCodestelselZrs $gsCodestelselZrs Object to remove from the list of results
     *
     * @return GsCodestelselZrsQuery The current query, for fluid interface
     */
    public function prune($gsCodestelselZrs = null)
    {
        if ($gsCodestelselZrs) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsCodestelselZrsPeer::SOORT_CODE), $gsCodestelselZrs->getSoortCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsCodestelselZrsPeer::ZORG_REGISTRATIE_NUMMER), $gsCodestelselZrs->getZorgRegistratieNummer(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
