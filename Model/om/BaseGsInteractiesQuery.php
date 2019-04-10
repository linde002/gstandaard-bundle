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
use PharmaIntelligence\GstandaardBundle\Model\GsInteracties;
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesQuery;

/**
 * @method GsInteractiesQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsInteractiesQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsInteractiesQuery orderByInteractiewaarschuwingCode($order = Criteria::ASC) Order by the interactiewaarschuwing_code column
 * @method GsInteractiesQuery orderByDatumVastlegging($order = Criteria::ASC) Order by the datum_vastlegging column
 * @method GsInteractiesQuery orderByDatumOpnameInGstandaard($order = Criteria::ASC) Order by the datum_opname_in_gstandaard column
 * @method GsInteractiesQuery orderByDatumLaasteMutatieInGstandaard($order = Criteria::ASC) Order by the datum_laaste_mutatie_in_gstandaard column
 * @method GsInteractiesQuery orderByCodeOnderbouwingBewijslastBijInteractie($order = Criteria::ASC) Order by the code_onderbouwing_bewijslast_bij_interactie column
 * @method GsInteractiesQuery orderByCodeErnstVanPotentieelEffectBijInteractie($order = Criteria::ASC) Order by the code_ernst_van_potentieel_effect_bij_interactie column
 * @method GsInteractiesQuery orderByOmschrijvingInteractiewaarschuwing($order = Criteria::ASC) Order by the omschrijving_interactiewaarschuwing column
 * @method GsInteractiesQuery orderByInteractiefolderthesaurus128($order = Criteria::ASC) Order by the interactiefolderthesaurus_128 column
 * @method GsInteractiesQuery orderByFolder($order = Criteria::ASC) Order by the folder column
 * @method GsInteractiesQuery orderByInteractie($order = Criteria::ASC) Order by the interactie column
 * @method GsInteractiesQuery orderByVervolgActie($order = Criteria::ASC) Order by the vervolg_actie column
 * @method GsInteractiesQuery orderByIaTeVolgenDoorMonitoren($order = Criteria::ASC) Order by the ia_te_volgen_door_monitoren column
 * @method GsInteractiesQuery orderByOokBijStakenVanHetVoorschrift($order = Criteria::ASC) Order by the ook_bij_staken_van_het_voorschrift column
 * @method GsInteractiesQuery orderByAfhandelingVoorschrijver($order = Criteria::ASC) Order by the afhandeling_voorschrijver column
 * @method GsInteractiesQuery orderByAfhandelingBalieInApotheek($order = Criteria::ASC) Order by the afhandeling_balie_in_apotheek column
 * @method GsInteractiesQuery orderByAfhandelingFarmaceutischSpecialist($order = Criteria::ASC) Order by the afhandeling_farmaceutisch_specialist column
 *
 * @method GsInteractiesQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsInteractiesQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsInteractiesQuery groupByInteractiewaarschuwingCode() Group by the interactiewaarschuwing_code column
 * @method GsInteractiesQuery groupByDatumVastlegging() Group by the datum_vastlegging column
 * @method GsInteractiesQuery groupByDatumOpnameInGstandaard() Group by the datum_opname_in_gstandaard column
 * @method GsInteractiesQuery groupByDatumLaasteMutatieInGstandaard() Group by the datum_laaste_mutatie_in_gstandaard column
 * @method GsInteractiesQuery groupByCodeOnderbouwingBewijslastBijInteractie() Group by the code_onderbouwing_bewijslast_bij_interactie column
 * @method GsInteractiesQuery groupByCodeErnstVanPotentieelEffectBijInteractie() Group by the code_ernst_van_potentieel_effect_bij_interactie column
 * @method GsInteractiesQuery groupByOmschrijvingInteractiewaarschuwing() Group by the omschrijving_interactiewaarschuwing column
 * @method GsInteractiesQuery groupByInteractiefolderthesaurus128() Group by the interactiefolderthesaurus_128 column
 * @method GsInteractiesQuery groupByFolder() Group by the folder column
 * @method GsInteractiesQuery groupByInteractie() Group by the interactie column
 * @method GsInteractiesQuery groupByVervolgActie() Group by the vervolg_actie column
 * @method GsInteractiesQuery groupByIaTeVolgenDoorMonitoren() Group by the ia_te_volgen_door_monitoren column
 * @method GsInteractiesQuery groupByOokBijStakenVanHetVoorschrift() Group by the ook_bij_staken_van_het_voorschrift column
 * @method GsInteractiesQuery groupByAfhandelingVoorschrijver() Group by the afhandeling_voorschrijver column
 * @method GsInteractiesQuery groupByAfhandelingBalieInApotheek() Group by the afhandeling_balie_in_apotheek column
 * @method GsInteractiesQuery groupByAfhandelingFarmaceutischSpecialist() Group by the afhandeling_farmaceutisch_specialist column
 *
 * @method GsInteractiesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsInteractiesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsInteractiesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsInteracties findOne(PropelPDO $con = null) Return the first GsInteracties matching the query
 * @method GsInteracties findOneOrCreate(PropelPDO $con = null) Return the first GsInteracties matching the query, or a new GsInteracties object populated from the query conditions when no match is found
 *
 * @method GsInteracties findOneByBestandnummer(int $bestandnummer) Return the first GsInteracties filtered by the bestandnummer column
 * @method GsInteracties findOneByMutatiekode(int $mutatiekode) Return the first GsInteracties filtered by the mutatiekode column
 * @method GsInteracties findOneByDatumVastlegging(int $datum_vastlegging) Return the first GsInteracties filtered by the datum_vastlegging column
 * @method GsInteracties findOneByDatumOpnameInGstandaard(int $datum_opname_in_gstandaard) Return the first GsInteracties filtered by the datum_opname_in_gstandaard column
 * @method GsInteracties findOneByDatumLaasteMutatieInGstandaard(int $datum_laaste_mutatie_in_gstandaard) Return the first GsInteracties filtered by the datum_laaste_mutatie_in_gstandaard column
 * @method GsInteracties findOneByCodeOnderbouwingBewijslastBijInteractie(string $code_onderbouwing_bewijslast_bij_interactie) Return the first GsInteracties filtered by the code_onderbouwing_bewijslast_bij_interactie column
 * @method GsInteracties findOneByCodeErnstVanPotentieelEffectBijInteractie(string $code_ernst_van_potentieel_effect_bij_interactie) Return the first GsInteracties filtered by the code_ernst_van_potentieel_effect_bij_interactie column
 * @method GsInteracties findOneByOmschrijvingInteractiewaarschuwing(string $omschrijving_interactiewaarschuwing) Return the first GsInteracties filtered by the omschrijving_interactiewaarschuwing column
 * @method GsInteracties findOneByInteractiefolderthesaurus128(int $interactiefolderthesaurus_128) Return the first GsInteracties filtered by the interactiefolderthesaurus_128 column
 * @method GsInteracties findOneByFolder(int $folder) Return the first GsInteracties filtered by the folder column
 * @method GsInteracties findOneByInteractie(int $interactie) Return the first GsInteracties filtered by the interactie column
 * @method GsInteracties findOneByVervolgActie(int $vervolg_actie) Return the first GsInteracties filtered by the vervolg_actie column
 * @method GsInteracties findOneByIaTeVolgenDoorMonitoren(int $ia_te_volgen_door_monitoren) Return the first GsInteracties filtered by the ia_te_volgen_door_monitoren column
 * @method GsInteracties findOneByOokBijStakenVanHetVoorschrift(int $ook_bij_staken_van_het_voorschrift) Return the first GsInteracties filtered by the ook_bij_staken_van_het_voorschrift column
 * @method GsInteracties findOneByAfhandelingVoorschrijver(int $afhandeling_voorschrijver) Return the first GsInteracties filtered by the afhandeling_voorschrijver column
 * @method GsInteracties findOneByAfhandelingBalieInApotheek(int $afhandeling_balie_in_apotheek) Return the first GsInteracties filtered by the afhandeling_balie_in_apotheek column
 * @method GsInteracties findOneByAfhandelingFarmaceutischSpecialist(int $afhandeling_farmaceutisch_specialist) Return the first GsInteracties filtered by the afhandeling_farmaceutisch_specialist column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsInteracties objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsInteracties objects filtered by the mutatiekode column
 * @method array findByInteractiewaarschuwingCode(int $interactiewaarschuwing_code) Return GsInteracties objects filtered by the interactiewaarschuwing_code column
 * @method array findByDatumVastlegging(int $datum_vastlegging) Return GsInteracties objects filtered by the datum_vastlegging column
 * @method array findByDatumOpnameInGstandaard(int $datum_opname_in_gstandaard) Return GsInteracties objects filtered by the datum_opname_in_gstandaard column
 * @method array findByDatumLaasteMutatieInGstandaard(int $datum_laaste_mutatie_in_gstandaard) Return GsInteracties objects filtered by the datum_laaste_mutatie_in_gstandaard column
 * @method array findByCodeOnderbouwingBewijslastBijInteractie(string $code_onderbouwing_bewijslast_bij_interactie) Return GsInteracties objects filtered by the code_onderbouwing_bewijslast_bij_interactie column
 * @method array findByCodeErnstVanPotentieelEffectBijInteractie(string $code_ernst_van_potentieel_effect_bij_interactie) Return GsInteracties objects filtered by the code_ernst_van_potentieel_effect_bij_interactie column
 * @method array findByOmschrijvingInteractiewaarschuwing(string $omschrijving_interactiewaarschuwing) Return GsInteracties objects filtered by the omschrijving_interactiewaarschuwing column
 * @method array findByInteractiefolderthesaurus128(int $interactiefolderthesaurus_128) Return GsInteracties objects filtered by the interactiefolderthesaurus_128 column
 * @method array findByFolder(int $folder) Return GsInteracties objects filtered by the folder column
 * @method array findByInteractie(int $interactie) Return GsInteracties objects filtered by the interactie column
 * @method array findByVervolgActie(int $vervolg_actie) Return GsInteracties objects filtered by the vervolg_actie column
 * @method array findByIaTeVolgenDoorMonitoren(int $ia_te_volgen_door_monitoren) Return GsInteracties objects filtered by the ia_te_volgen_door_monitoren column
 * @method array findByOokBijStakenVanHetVoorschrift(int $ook_bij_staken_van_het_voorschrift) Return GsInteracties objects filtered by the ook_bij_staken_van_het_voorschrift column
 * @method array findByAfhandelingVoorschrijver(int $afhandeling_voorschrijver) Return GsInteracties objects filtered by the afhandeling_voorschrijver column
 * @method array findByAfhandelingBalieInApotheek(int $afhandeling_balie_in_apotheek) Return GsInteracties objects filtered by the afhandeling_balie_in_apotheek column
 * @method array findByAfhandelingFarmaceutischSpecialist(int $afhandeling_farmaceutisch_specialist) Return GsInteracties objects filtered by the afhandeling_farmaceutisch_specialist column
 */
abstract class BaseGsInteractiesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsInteractiesQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsInteracties';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsInteractiesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsInteractiesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsInteractiesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsInteractiesQuery) {
            return $criteria;
        }
        $query = new GsInteractiesQuery(null, null, $modelAlias);

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
     * @return   GsInteracties|GsInteracties[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsInteractiesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsInteractiesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsInteracties A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByInteractiewaarschuwingCode($key, $con = null)
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
     * @return                 GsInteracties A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `interactiewaarschuwing_code`, `datum_vastlegging`, `datum_opname_in_gstandaard`, `datum_laaste_mutatie_in_gstandaard`, `code_onderbouwing_bewijslast_bij_interactie`, `code_ernst_van_potentieel_effect_bij_interactie`, `omschrijving_interactiewaarschuwing`, `interactiefolderthesaurus_128`, `folder`, `interactie`, `vervolg_actie`, `ia_te_volgen_door_monitoren`, `ook_bij_staken_van_het_voorschrift`, `afhandeling_voorschrijver`, `afhandeling_balie_in_apotheek`, `afhandeling_farmaceutisch_specialist` FROM `gs_interacties` WHERE `interactiewaarschuwing_code` = :p0';
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
            $obj = new GsInteracties();
            $obj->hydrate($row);
            GsInteractiesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsInteracties|GsInteracties[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsInteracties[]|mixed the list of results, formatted by the current formatter
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
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsInteractiesPeer::INTERACTIEWAARSCHUWING_CODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsInteractiesPeer::INTERACTIEWAARSCHUWING_CODE, $keys, Criteria::IN);
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
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsInteractiesPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsInteractiesPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsInteractiesPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsInteractiesPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the interactiewaarschuwing_code column
     *
     * Example usage:
     * <code>
     * $query->filterByInteractiewaarschuwingCode(1234); // WHERE interactiewaarschuwing_code = 1234
     * $query->filterByInteractiewaarschuwingCode(array(12, 34)); // WHERE interactiewaarschuwing_code IN (12, 34)
     * $query->filterByInteractiewaarschuwingCode(array('min' => 12)); // WHERE interactiewaarschuwing_code >= 12
     * $query->filterByInteractiewaarschuwingCode(array('max' => 12)); // WHERE interactiewaarschuwing_code <= 12
     * </code>
     *
     * @param     mixed $interactiewaarschuwingCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByInteractiewaarschuwingCode($interactiewaarschuwingCode = null, $comparison = null)
    {
        if (is_array($interactiewaarschuwingCode)) {
            $useMinMax = false;
            if (isset($interactiewaarschuwingCode['min'])) {
                $this->addUsingAlias(GsInteractiesPeer::INTERACTIEWAARSCHUWING_CODE, $interactiewaarschuwingCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($interactiewaarschuwingCode['max'])) {
                $this->addUsingAlias(GsInteractiesPeer::INTERACTIEWAARSCHUWING_CODE, $interactiewaarschuwingCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesPeer::INTERACTIEWAARSCHUWING_CODE, $interactiewaarschuwingCode, $comparison);
    }

    /**
     * Filter the query on the datum_vastlegging column
     *
     * Example usage:
     * <code>
     * $query->filterByDatumVastlegging(1234); // WHERE datum_vastlegging = 1234
     * $query->filterByDatumVastlegging(array(12, 34)); // WHERE datum_vastlegging IN (12, 34)
     * $query->filterByDatumVastlegging(array('min' => 12)); // WHERE datum_vastlegging >= 12
     * $query->filterByDatumVastlegging(array('max' => 12)); // WHERE datum_vastlegging <= 12
     * </code>
     *
     * @param     mixed $datumVastlegging The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByDatumVastlegging($datumVastlegging = null, $comparison = null)
    {
        if (is_array($datumVastlegging)) {
            $useMinMax = false;
            if (isset($datumVastlegging['min'])) {
                $this->addUsingAlias(GsInteractiesPeer::DATUM_VASTLEGGING, $datumVastlegging['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumVastlegging['max'])) {
                $this->addUsingAlias(GsInteractiesPeer::DATUM_VASTLEGGING, $datumVastlegging['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesPeer::DATUM_VASTLEGGING, $datumVastlegging, $comparison);
    }

    /**
     * Filter the query on the datum_opname_in_gstandaard column
     *
     * Example usage:
     * <code>
     * $query->filterByDatumOpnameInGstandaard(1234); // WHERE datum_opname_in_gstandaard = 1234
     * $query->filterByDatumOpnameInGstandaard(array(12, 34)); // WHERE datum_opname_in_gstandaard IN (12, 34)
     * $query->filterByDatumOpnameInGstandaard(array('min' => 12)); // WHERE datum_opname_in_gstandaard >= 12
     * $query->filterByDatumOpnameInGstandaard(array('max' => 12)); // WHERE datum_opname_in_gstandaard <= 12
     * </code>
     *
     * @param     mixed $datumOpnameInGstandaard The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByDatumOpnameInGstandaard($datumOpnameInGstandaard = null, $comparison = null)
    {
        if (is_array($datumOpnameInGstandaard)) {
            $useMinMax = false;
            if (isset($datumOpnameInGstandaard['min'])) {
                $this->addUsingAlias(GsInteractiesPeer::DATUM_OPNAME_IN_GSTANDAARD, $datumOpnameInGstandaard['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumOpnameInGstandaard['max'])) {
                $this->addUsingAlias(GsInteractiesPeer::DATUM_OPNAME_IN_GSTANDAARD, $datumOpnameInGstandaard['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesPeer::DATUM_OPNAME_IN_GSTANDAARD, $datumOpnameInGstandaard, $comparison);
    }

    /**
     * Filter the query on the datum_laaste_mutatie_in_gstandaard column
     *
     * Example usage:
     * <code>
     * $query->filterByDatumLaasteMutatieInGstandaard(1234); // WHERE datum_laaste_mutatie_in_gstandaard = 1234
     * $query->filterByDatumLaasteMutatieInGstandaard(array(12, 34)); // WHERE datum_laaste_mutatie_in_gstandaard IN (12, 34)
     * $query->filterByDatumLaasteMutatieInGstandaard(array('min' => 12)); // WHERE datum_laaste_mutatie_in_gstandaard >= 12
     * $query->filterByDatumLaasteMutatieInGstandaard(array('max' => 12)); // WHERE datum_laaste_mutatie_in_gstandaard <= 12
     * </code>
     *
     * @param     mixed $datumLaasteMutatieInGstandaard The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByDatumLaasteMutatieInGstandaard($datumLaasteMutatieInGstandaard = null, $comparison = null)
    {
        if (is_array($datumLaasteMutatieInGstandaard)) {
            $useMinMax = false;
            if (isset($datumLaasteMutatieInGstandaard['min'])) {
                $this->addUsingAlias(GsInteractiesPeer::DATUM_LAASTE_MUTATIE_IN_GSTANDAARD, $datumLaasteMutatieInGstandaard['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumLaasteMutatieInGstandaard['max'])) {
                $this->addUsingAlias(GsInteractiesPeer::DATUM_LAASTE_MUTATIE_IN_GSTANDAARD, $datumLaasteMutatieInGstandaard['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesPeer::DATUM_LAASTE_MUTATIE_IN_GSTANDAARD, $datumLaasteMutatieInGstandaard, $comparison);
    }

    /**
     * Filter the query on the code_onderbouwing_bewijslast_bij_interactie column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeOnderbouwingBewijslastBijInteractie('fooValue');   // WHERE code_onderbouwing_bewijslast_bij_interactie = 'fooValue'
     * $query->filterByCodeOnderbouwingBewijslastBijInteractie('%fooValue%'); // WHERE code_onderbouwing_bewijslast_bij_interactie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeOnderbouwingBewijslastBijInteractie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByCodeOnderbouwingBewijslastBijInteractie($codeOnderbouwingBewijslastBijInteractie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeOnderbouwingBewijslastBijInteractie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeOnderbouwingBewijslastBijInteractie)) {
                $codeOnderbouwingBewijslastBijInteractie = str_replace('*', '%', $codeOnderbouwingBewijslastBijInteractie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsInteractiesPeer::CODE_ONDERBOUWING_BEWIJSLAST_BIJ_INTERACTIE, $codeOnderbouwingBewijslastBijInteractie, $comparison);
    }

    /**
     * Filter the query on the code_ernst_van_potentieel_effect_bij_interactie column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeErnstVanPotentieelEffectBijInteractie('fooValue');   // WHERE code_ernst_van_potentieel_effect_bij_interactie = 'fooValue'
     * $query->filterByCodeErnstVanPotentieelEffectBijInteractie('%fooValue%'); // WHERE code_ernst_van_potentieel_effect_bij_interactie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeErnstVanPotentieelEffectBijInteractie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByCodeErnstVanPotentieelEffectBijInteractie($codeErnstVanPotentieelEffectBijInteractie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeErnstVanPotentieelEffectBijInteractie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeErnstVanPotentieelEffectBijInteractie)) {
                $codeErnstVanPotentieelEffectBijInteractie = str_replace('*', '%', $codeErnstVanPotentieelEffectBijInteractie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsInteractiesPeer::CODE_ERNST_VAN_POTENTIEEL_EFFECT_BIJ_INTERACTIE, $codeErnstVanPotentieelEffectBijInteractie, $comparison);
    }

    /**
     * Filter the query on the omschrijving_interactiewaarschuwing column
     *
     * Example usage:
     * <code>
     * $query->filterByOmschrijvingInteractiewaarschuwing('fooValue');   // WHERE omschrijving_interactiewaarschuwing = 'fooValue'
     * $query->filterByOmschrijvingInteractiewaarschuwing('%fooValue%'); // WHERE omschrijving_interactiewaarschuwing LIKE '%fooValue%'
     * </code>
     *
     * @param     string $omschrijvingInteractiewaarschuwing The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByOmschrijvingInteractiewaarschuwing($omschrijvingInteractiewaarschuwing = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($omschrijvingInteractiewaarschuwing)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $omschrijvingInteractiewaarschuwing)) {
                $omschrijvingInteractiewaarschuwing = str_replace('*', '%', $omschrijvingInteractiewaarschuwing);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsInteractiesPeer::OMSCHRIJVING_INTERACTIEWAARSCHUWING, $omschrijvingInteractiewaarschuwing, $comparison);
    }

    /**
     * Filter the query on the interactiefolderthesaurus_128 column
     *
     * Example usage:
     * <code>
     * $query->filterByInteractiefolderthesaurus128(1234); // WHERE interactiefolderthesaurus_128 = 1234
     * $query->filterByInteractiefolderthesaurus128(array(12, 34)); // WHERE interactiefolderthesaurus_128 IN (12, 34)
     * $query->filterByInteractiefolderthesaurus128(array('min' => 12)); // WHERE interactiefolderthesaurus_128 >= 12
     * $query->filterByInteractiefolderthesaurus128(array('max' => 12)); // WHERE interactiefolderthesaurus_128 <= 12
     * </code>
     *
     * @param     mixed $interactiefolderthesaurus128 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByInteractiefolderthesaurus128($interactiefolderthesaurus128 = null, $comparison = null)
    {
        if (is_array($interactiefolderthesaurus128)) {
            $useMinMax = false;
            if (isset($interactiefolderthesaurus128['min'])) {
                $this->addUsingAlias(GsInteractiesPeer::INTERACTIEFOLDERTHESAURUS_128, $interactiefolderthesaurus128['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($interactiefolderthesaurus128['max'])) {
                $this->addUsingAlias(GsInteractiesPeer::INTERACTIEFOLDERTHESAURUS_128, $interactiefolderthesaurus128['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesPeer::INTERACTIEFOLDERTHESAURUS_128, $interactiefolderthesaurus128, $comparison);
    }

    /**
     * Filter the query on the folder column
     *
     * Example usage:
     * <code>
     * $query->filterByFolder(1234); // WHERE folder = 1234
     * $query->filterByFolder(array(12, 34)); // WHERE folder IN (12, 34)
     * $query->filterByFolder(array('min' => 12)); // WHERE folder >= 12
     * $query->filterByFolder(array('max' => 12)); // WHERE folder <= 12
     * </code>
     *
     * @param     mixed $folder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByFolder($folder = null, $comparison = null)
    {
        if (is_array($folder)) {
            $useMinMax = false;
            if (isset($folder['min'])) {
                $this->addUsingAlias(GsInteractiesPeer::FOLDER, $folder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($folder['max'])) {
                $this->addUsingAlias(GsInteractiesPeer::FOLDER, $folder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesPeer::FOLDER, $folder, $comparison);
    }

    /**
     * Filter the query on the interactie column
     *
     * Example usage:
     * <code>
     * $query->filterByInteractie(1234); // WHERE interactie = 1234
     * $query->filterByInteractie(array(12, 34)); // WHERE interactie IN (12, 34)
     * $query->filterByInteractie(array('min' => 12)); // WHERE interactie >= 12
     * $query->filterByInteractie(array('max' => 12)); // WHERE interactie <= 12
     * </code>
     *
     * @param     mixed $interactie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByInteractie($interactie = null, $comparison = null)
    {
        if (is_array($interactie)) {
            $useMinMax = false;
            if (isset($interactie['min'])) {
                $this->addUsingAlias(GsInteractiesPeer::INTERACTIE, $interactie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($interactie['max'])) {
                $this->addUsingAlias(GsInteractiesPeer::INTERACTIE, $interactie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesPeer::INTERACTIE, $interactie, $comparison);
    }

    /**
     * Filter the query on the vervolg_actie column
     *
     * Example usage:
     * <code>
     * $query->filterByVervolgActie(1234); // WHERE vervolg_actie = 1234
     * $query->filterByVervolgActie(array(12, 34)); // WHERE vervolg_actie IN (12, 34)
     * $query->filterByVervolgActie(array('min' => 12)); // WHERE vervolg_actie >= 12
     * $query->filterByVervolgActie(array('max' => 12)); // WHERE vervolg_actie <= 12
     * </code>
     *
     * @param     mixed $vervolgActie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByVervolgActie($vervolgActie = null, $comparison = null)
    {
        if (is_array($vervolgActie)) {
            $useMinMax = false;
            if (isset($vervolgActie['min'])) {
                $this->addUsingAlias(GsInteractiesPeer::VERVOLG_ACTIE, $vervolgActie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vervolgActie['max'])) {
                $this->addUsingAlias(GsInteractiesPeer::VERVOLG_ACTIE, $vervolgActie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesPeer::VERVOLG_ACTIE, $vervolgActie, $comparison);
    }

    /**
     * Filter the query on the ia_te_volgen_door_monitoren column
     *
     * Example usage:
     * <code>
     * $query->filterByIaTeVolgenDoorMonitoren(1234); // WHERE ia_te_volgen_door_monitoren = 1234
     * $query->filterByIaTeVolgenDoorMonitoren(array(12, 34)); // WHERE ia_te_volgen_door_monitoren IN (12, 34)
     * $query->filterByIaTeVolgenDoorMonitoren(array('min' => 12)); // WHERE ia_te_volgen_door_monitoren >= 12
     * $query->filterByIaTeVolgenDoorMonitoren(array('max' => 12)); // WHERE ia_te_volgen_door_monitoren <= 12
     * </code>
     *
     * @param     mixed $iaTeVolgenDoorMonitoren The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByIaTeVolgenDoorMonitoren($iaTeVolgenDoorMonitoren = null, $comparison = null)
    {
        if (is_array($iaTeVolgenDoorMonitoren)) {
            $useMinMax = false;
            if (isset($iaTeVolgenDoorMonitoren['min'])) {
                $this->addUsingAlias(GsInteractiesPeer::IA_TE_VOLGEN_DOOR_MONITOREN, $iaTeVolgenDoorMonitoren['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iaTeVolgenDoorMonitoren['max'])) {
                $this->addUsingAlias(GsInteractiesPeer::IA_TE_VOLGEN_DOOR_MONITOREN, $iaTeVolgenDoorMonitoren['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesPeer::IA_TE_VOLGEN_DOOR_MONITOREN, $iaTeVolgenDoorMonitoren, $comparison);
    }

    /**
     * Filter the query on the ook_bij_staken_van_het_voorschrift column
     *
     * Example usage:
     * <code>
     * $query->filterByOokBijStakenVanHetVoorschrift(1234); // WHERE ook_bij_staken_van_het_voorschrift = 1234
     * $query->filterByOokBijStakenVanHetVoorschrift(array(12, 34)); // WHERE ook_bij_staken_van_het_voorschrift IN (12, 34)
     * $query->filterByOokBijStakenVanHetVoorschrift(array('min' => 12)); // WHERE ook_bij_staken_van_het_voorschrift >= 12
     * $query->filterByOokBijStakenVanHetVoorschrift(array('max' => 12)); // WHERE ook_bij_staken_van_het_voorschrift <= 12
     * </code>
     *
     * @param     mixed $ookBijStakenVanHetVoorschrift The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByOokBijStakenVanHetVoorschrift($ookBijStakenVanHetVoorschrift = null, $comparison = null)
    {
        if (is_array($ookBijStakenVanHetVoorschrift)) {
            $useMinMax = false;
            if (isset($ookBijStakenVanHetVoorschrift['min'])) {
                $this->addUsingAlias(GsInteractiesPeer::OOK_BIJ_STAKEN_VAN_HET_VOORSCHRIFT, $ookBijStakenVanHetVoorschrift['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ookBijStakenVanHetVoorschrift['max'])) {
                $this->addUsingAlias(GsInteractiesPeer::OOK_BIJ_STAKEN_VAN_HET_VOORSCHRIFT, $ookBijStakenVanHetVoorschrift['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesPeer::OOK_BIJ_STAKEN_VAN_HET_VOORSCHRIFT, $ookBijStakenVanHetVoorschrift, $comparison);
    }

    /**
     * Filter the query on the afhandeling_voorschrijver column
     *
     * Example usage:
     * <code>
     * $query->filterByAfhandelingVoorschrijver(1234); // WHERE afhandeling_voorschrijver = 1234
     * $query->filterByAfhandelingVoorschrijver(array(12, 34)); // WHERE afhandeling_voorschrijver IN (12, 34)
     * $query->filterByAfhandelingVoorschrijver(array('min' => 12)); // WHERE afhandeling_voorschrijver >= 12
     * $query->filterByAfhandelingVoorschrijver(array('max' => 12)); // WHERE afhandeling_voorschrijver <= 12
     * </code>
     *
     * @param     mixed $afhandelingVoorschrijver The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByAfhandelingVoorschrijver($afhandelingVoorschrijver = null, $comparison = null)
    {
        if (is_array($afhandelingVoorschrijver)) {
            $useMinMax = false;
            if (isset($afhandelingVoorschrijver['min'])) {
                $this->addUsingAlias(GsInteractiesPeer::AFHANDELING_VOORSCHRIJVER, $afhandelingVoorschrijver['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($afhandelingVoorschrijver['max'])) {
                $this->addUsingAlias(GsInteractiesPeer::AFHANDELING_VOORSCHRIJVER, $afhandelingVoorschrijver['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesPeer::AFHANDELING_VOORSCHRIJVER, $afhandelingVoorschrijver, $comparison);
    }

    /**
     * Filter the query on the afhandeling_balie_in_apotheek column
     *
     * Example usage:
     * <code>
     * $query->filterByAfhandelingBalieInApotheek(1234); // WHERE afhandeling_balie_in_apotheek = 1234
     * $query->filterByAfhandelingBalieInApotheek(array(12, 34)); // WHERE afhandeling_balie_in_apotheek IN (12, 34)
     * $query->filterByAfhandelingBalieInApotheek(array('min' => 12)); // WHERE afhandeling_balie_in_apotheek >= 12
     * $query->filterByAfhandelingBalieInApotheek(array('max' => 12)); // WHERE afhandeling_balie_in_apotheek <= 12
     * </code>
     *
     * @param     mixed $afhandelingBalieInApotheek The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByAfhandelingBalieInApotheek($afhandelingBalieInApotheek = null, $comparison = null)
    {
        if (is_array($afhandelingBalieInApotheek)) {
            $useMinMax = false;
            if (isset($afhandelingBalieInApotheek['min'])) {
                $this->addUsingAlias(GsInteractiesPeer::AFHANDELING_BALIE_IN_APOTHEEK, $afhandelingBalieInApotheek['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($afhandelingBalieInApotheek['max'])) {
                $this->addUsingAlias(GsInteractiesPeer::AFHANDELING_BALIE_IN_APOTHEEK, $afhandelingBalieInApotheek['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesPeer::AFHANDELING_BALIE_IN_APOTHEEK, $afhandelingBalieInApotheek, $comparison);
    }

    /**
     * Filter the query on the afhandeling_farmaceutisch_specialist column
     *
     * Example usage:
     * <code>
     * $query->filterByAfhandelingFarmaceutischSpecialist(1234); // WHERE afhandeling_farmaceutisch_specialist = 1234
     * $query->filterByAfhandelingFarmaceutischSpecialist(array(12, 34)); // WHERE afhandeling_farmaceutisch_specialist IN (12, 34)
     * $query->filterByAfhandelingFarmaceutischSpecialist(array('min' => 12)); // WHERE afhandeling_farmaceutisch_specialist >= 12
     * $query->filterByAfhandelingFarmaceutischSpecialist(array('max' => 12)); // WHERE afhandeling_farmaceutisch_specialist <= 12
     * </code>
     *
     * @param     mixed $afhandelingFarmaceutischSpecialist The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function filterByAfhandelingFarmaceutischSpecialist($afhandelingFarmaceutischSpecialist = null, $comparison = null)
    {
        if (is_array($afhandelingFarmaceutischSpecialist)) {
            $useMinMax = false;
            if (isset($afhandelingFarmaceutischSpecialist['min'])) {
                $this->addUsingAlias(GsInteractiesPeer::AFHANDELING_FARMACEUTISCH_SPECIALIST, $afhandelingFarmaceutischSpecialist['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($afhandelingFarmaceutischSpecialist['max'])) {
                $this->addUsingAlias(GsInteractiesPeer::AFHANDELING_FARMACEUTISCH_SPECIALIST, $afhandelingFarmaceutischSpecialist['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesPeer::AFHANDELING_FARMACEUTISCH_SPECIALIST, $afhandelingFarmaceutischSpecialist, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsInteracties $gsInteracties Object to remove from the list of results
     *
     * @return GsInteractiesQuery The current query, for fluid interface
     */
    public function prune($gsInteracties = null)
    {
        if ($gsInteracties) {
            $this->addUsingAlias(GsInteractiesPeer::INTERACTIEWAARSCHUWING_CODE, $gsInteracties->getInteractiewaarschuwingCode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
