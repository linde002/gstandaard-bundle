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
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesGegevens;
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesGegevensPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsInteractiesGegevensQuery;

/**
 * @method GsInteractiesGegevensQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsInteractiesGegevensQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsInteractiesGegevensQuery orderByInteractiewaarschuwingCode($order = Criteria::ASC) Order by the interactiewaarschuwing_code column
 * @method GsInteractiesGegevensQuery orderByDatumVastlegging($order = Criteria::ASC) Order by the datum_vastlegging column
 * @method GsInteractiesGegevensQuery orderByDatumOpnameInGstandaard($order = Criteria::ASC) Order by the datum_opname_in_gstandaard column
 * @method GsInteractiesGegevensQuery orderByDatumLaasteMutatieInGstandaard($order = Criteria::ASC) Order by the datum_laaste_mutatie_in_gstandaard column
 * @method GsInteractiesGegevensQuery orderByCodeOnderbouwingBewijslastBijInteractie($order = Criteria::ASC) Order by the code_onderbouwing_bewijslast_bij_interactie column
 * @method GsInteractiesGegevensQuery orderByCodeErnstVanPotentieelEffectBijInteractie($order = Criteria::ASC) Order by the code_ernst_van_potentieel_effect_bij_interactie column
 * @method GsInteractiesGegevensQuery orderByOmschrijvingInteractiewaarschuwing($order = Criteria::ASC) Order by the omschrijving_interactiewaarschuwing column
 * @method GsInteractiesGegevensQuery orderByInteractiefolderthesaurus128($order = Criteria::ASC) Order by the interactiefolderthesaurus_128 column
 * @method GsInteractiesGegevensQuery orderByFolder($order = Criteria::ASC) Order by the folder column
 * @method GsInteractiesGegevensQuery orderByInteractie($order = Criteria::ASC) Order by the interactie column
 * @method GsInteractiesGegevensQuery orderByVervolgActie($order = Criteria::ASC) Order by the vervolg_actie column
 * @method GsInteractiesGegevensQuery orderByIaTeVolgenDoorMonitoren($order = Criteria::ASC) Order by the ia_te_volgen_door_monitoren column
 * @method GsInteractiesGegevensQuery orderByOokBijStakenVanHetVoorschrift($order = Criteria::ASC) Order by the ook_bij_staken_van_het_voorschrift column
 * @method GsInteractiesGegevensQuery orderByAfhandelingVoorschrijver($order = Criteria::ASC) Order by the afhandeling_voorschrijver column
 * @method GsInteractiesGegevensQuery orderByAfhandelingBalieInApotheek($order = Criteria::ASC) Order by the afhandeling_balie_in_apotheek column
 * @method GsInteractiesGegevensQuery orderByAfhandelingFarmaceutischSpecialist($order = Criteria::ASC) Order by the afhandeling_farmaceutisch_specialist column
 *
 * @method GsInteractiesGegevensQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsInteractiesGegevensQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsInteractiesGegevensQuery groupByInteractiewaarschuwingCode() Group by the interactiewaarschuwing_code column
 * @method GsInteractiesGegevensQuery groupByDatumVastlegging() Group by the datum_vastlegging column
 * @method GsInteractiesGegevensQuery groupByDatumOpnameInGstandaard() Group by the datum_opname_in_gstandaard column
 * @method GsInteractiesGegevensQuery groupByDatumLaasteMutatieInGstandaard() Group by the datum_laaste_mutatie_in_gstandaard column
 * @method GsInteractiesGegevensQuery groupByCodeOnderbouwingBewijslastBijInteractie() Group by the code_onderbouwing_bewijslast_bij_interactie column
 * @method GsInteractiesGegevensQuery groupByCodeErnstVanPotentieelEffectBijInteractie() Group by the code_ernst_van_potentieel_effect_bij_interactie column
 * @method GsInteractiesGegevensQuery groupByOmschrijvingInteractiewaarschuwing() Group by the omschrijving_interactiewaarschuwing column
 * @method GsInteractiesGegevensQuery groupByInteractiefolderthesaurus128() Group by the interactiefolderthesaurus_128 column
 * @method GsInteractiesGegevensQuery groupByFolder() Group by the folder column
 * @method GsInteractiesGegevensQuery groupByInteractie() Group by the interactie column
 * @method GsInteractiesGegevensQuery groupByVervolgActie() Group by the vervolg_actie column
 * @method GsInteractiesGegevensQuery groupByIaTeVolgenDoorMonitoren() Group by the ia_te_volgen_door_monitoren column
 * @method GsInteractiesGegevensQuery groupByOokBijStakenVanHetVoorschrift() Group by the ook_bij_staken_van_het_voorschrift column
 * @method GsInteractiesGegevensQuery groupByAfhandelingVoorschrijver() Group by the afhandeling_voorschrijver column
 * @method GsInteractiesGegevensQuery groupByAfhandelingBalieInApotheek() Group by the afhandeling_balie_in_apotheek column
 * @method GsInteractiesGegevensQuery groupByAfhandelingFarmaceutischSpecialist() Group by the afhandeling_farmaceutisch_specialist column
 *
 * @method GsInteractiesGegevensQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsInteractiesGegevensQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsInteractiesGegevensQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsInteractiesGegevens findOne(PropelPDO $con = null) Return the first GsInteractiesGegevens matching the query
 * @method GsInteractiesGegevens findOneOrCreate(PropelPDO $con = null) Return the first GsInteractiesGegevens matching the query, or a new GsInteractiesGegevens object populated from the query conditions when no match is found
 *
 * @method GsInteractiesGegevens findOneByBestandnummer(int $bestandnummer) Return the first GsInteractiesGegevens filtered by the bestandnummer column
 * @method GsInteractiesGegevens findOneByMutatiekode(int $mutatiekode) Return the first GsInteractiesGegevens filtered by the mutatiekode column
 * @method GsInteractiesGegevens findOneByDatumVastlegging(int $datum_vastlegging) Return the first GsInteractiesGegevens filtered by the datum_vastlegging column
 * @method GsInteractiesGegevens findOneByDatumOpnameInGstandaard(int $datum_opname_in_gstandaard) Return the first GsInteractiesGegevens filtered by the datum_opname_in_gstandaard column
 * @method GsInteractiesGegevens findOneByDatumLaasteMutatieInGstandaard(int $datum_laaste_mutatie_in_gstandaard) Return the first GsInteractiesGegevens filtered by the datum_laaste_mutatie_in_gstandaard column
 * @method GsInteractiesGegevens findOneByCodeOnderbouwingBewijslastBijInteractie(string $code_onderbouwing_bewijslast_bij_interactie) Return the first GsInteractiesGegevens filtered by the code_onderbouwing_bewijslast_bij_interactie column
 * @method GsInteractiesGegevens findOneByCodeErnstVanPotentieelEffectBijInteractie(string $code_ernst_van_potentieel_effect_bij_interactie) Return the first GsInteractiesGegevens filtered by the code_ernst_van_potentieel_effect_bij_interactie column
 * @method GsInteractiesGegevens findOneByOmschrijvingInteractiewaarschuwing(string $omschrijving_interactiewaarschuwing) Return the first GsInteractiesGegevens filtered by the omschrijving_interactiewaarschuwing column
 * @method GsInteractiesGegevens findOneByInteractiefolderthesaurus128(int $interactiefolderthesaurus_128) Return the first GsInteractiesGegevens filtered by the interactiefolderthesaurus_128 column
 * @method GsInteractiesGegevens findOneByFolder(int $folder) Return the first GsInteractiesGegevens filtered by the folder column
 * @method GsInteractiesGegevens findOneByInteractie(int $interactie) Return the first GsInteractiesGegevens filtered by the interactie column
 * @method GsInteractiesGegevens findOneByVervolgActie(int $vervolg_actie) Return the first GsInteractiesGegevens filtered by the vervolg_actie column
 * @method GsInteractiesGegevens findOneByIaTeVolgenDoorMonitoren(int $ia_te_volgen_door_monitoren) Return the first GsInteractiesGegevens filtered by the ia_te_volgen_door_monitoren column
 * @method GsInteractiesGegevens findOneByOokBijStakenVanHetVoorschrift(int $ook_bij_staken_van_het_voorschrift) Return the first GsInteractiesGegevens filtered by the ook_bij_staken_van_het_voorschrift column
 * @method GsInteractiesGegevens findOneByAfhandelingVoorschrijver(int $afhandeling_voorschrijver) Return the first GsInteractiesGegevens filtered by the afhandeling_voorschrijver column
 * @method GsInteractiesGegevens findOneByAfhandelingBalieInApotheek(int $afhandeling_balie_in_apotheek) Return the first GsInteractiesGegevens filtered by the afhandeling_balie_in_apotheek column
 * @method GsInteractiesGegevens findOneByAfhandelingFarmaceutischSpecialist(int $afhandeling_farmaceutisch_specialist) Return the first GsInteractiesGegevens filtered by the afhandeling_farmaceutisch_specialist column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsInteractiesGegevens objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsInteractiesGegevens objects filtered by the mutatiekode column
 * @method array findByInteractiewaarschuwingCode(int $interactiewaarschuwing_code) Return GsInteractiesGegevens objects filtered by the interactiewaarschuwing_code column
 * @method array findByDatumVastlegging(int $datum_vastlegging) Return GsInteractiesGegevens objects filtered by the datum_vastlegging column
 * @method array findByDatumOpnameInGstandaard(int $datum_opname_in_gstandaard) Return GsInteractiesGegevens objects filtered by the datum_opname_in_gstandaard column
 * @method array findByDatumLaasteMutatieInGstandaard(int $datum_laaste_mutatie_in_gstandaard) Return GsInteractiesGegevens objects filtered by the datum_laaste_mutatie_in_gstandaard column
 * @method array findByCodeOnderbouwingBewijslastBijInteractie(string $code_onderbouwing_bewijslast_bij_interactie) Return GsInteractiesGegevens objects filtered by the code_onderbouwing_bewijslast_bij_interactie column
 * @method array findByCodeErnstVanPotentieelEffectBijInteractie(string $code_ernst_van_potentieel_effect_bij_interactie) Return GsInteractiesGegevens objects filtered by the code_ernst_van_potentieel_effect_bij_interactie column
 * @method array findByOmschrijvingInteractiewaarschuwing(string $omschrijving_interactiewaarschuwing) Return GsInteractiesGegevens objects filtered by the omschrijving_interactiewaarschuwing column
 * @method array findByInteractiefolderthesaurus128(int $interactiefolderthesaurus_128) Return GsInteractiesGegevens objects filtered by the interactiefolderthesaurus_128 column
 * @method array findByFolder(int $folder) Return GsInteractiesGegevens objects filtered by the folder column
 * @method array findByInteractie(int $interactie) Return GsInteractiesGegevens objects filtered by the interactie column
 * @method array findByVervolgActie(int $vervolg_actie) Return GsInteractiesGegevens objects filtered by the vervolg_actie column
 * @method array findByIaTeVolgenDoorMonitoren(int $ia_te_volgen_door_monitoren) Return GsInteractiesGegevens objects filtered by the ia_te_volgen_door_monitoren column
 * @method array findByOokBijStakenVanHetVoorschrift(int $ook_bij_staken_van_het_voorschrift) Return GsInteractiesGegevens objects filtered by the ook_bij_staken_van_het_voorschrift column
 * @method array findByAfhandelingVoorschrijver(int $afhandeling_voorschrijver) Return GsInteractiesGegevens objects filtered by the afhandeling_voorschrijver column
 * @method array findByAfhandelingBalieInApotheek(int $afhandeling_balie_in_apotheek) Return GsInteractiesGegevens objects filtered by the afhandeling_balie_in_apotheek column
 * @method array findByAfhandelingFarmaceutischSpecialist(int $afhandeling_farmaceutisch_specialist) Return GsInteractiesGegevens objects filtered by the afhandeling_farmaceutisch_specialist column
 */
abstract class BaseGsInteractiesGegevensQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsInteractiesGegevensQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsInteractiesGegevens';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsInteractiesGegevensQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsInteractiesGegevensQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsInteractiesGegevensQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsInteractiesGegevensQuery) {
            return $criteria;
        }
        $query = new GsInteractiesGegevensQuery(null, null, $modelAlias);

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
     * @return   GsInteractiesGegevens|GsInteractiesGegevens[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsInteractiesGegevensPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsInteractiesGegevensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsInteractiesGegevens A model object, or null if the key is not found
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
     * @return                 GsInteractiesGegevens A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `interactiewaarschuwing_code`, `datum_vastlegging`, `datum_opname_in_gstandaard`, `datum_laaste_mutatie_in_gstandaard`, `code_onderbouwing_bewijslast_bij_interactie`, `code_ernst_van_potentieel_effect_bij_interactie`, `omschrijving_interactiewaarschuwing`, `interactiefolderthesaurus_128`, `folder`, `interactie`, `vervolg_actie`, `ia_te_volgen_door_monitoren`, `ook_bij_staken_van_het_voorschrift`, `afhandeling_voorschrijver`, `afhandeling_balie_in_apotheek`, `afhandeling_farmaceutisch_specialist` FROM `gs_interacties_gegevens` WHERE `interactiewaarschuwing_code` = :p0';
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
            $obj = new GsInteractiesGegevens();
            $obj->hydrate($row);
            GsInteractiesGegevensPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsInteractiesGegevens|GsInteractiesGegevens[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsInteractiesGegevens[]|mixed the list of results, formatted by the current formatter
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE, $keys, Criteria::IN);
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesGegevensPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesGegevensPeer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
     */
    public function filterByInteractiewaarschuwingCode($interactiewaarschuwingCode = null, $comparison = null)
    {
        if (is_array($interactiewaarschuwingCode)) {
            $useMinMax = false;
            if (isset($interactiewaarschuwingCode['min'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE, $interactiewaarschuwingCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($interactiewaarschuwingCode['max'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE, $interactiewaarschuwingCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE, $interactiewaarschuwingCode, $comparison);
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
     */
    public function filterByDatumVastlegging($datumVastlegging = null, $comparison = null)
    {
        if (is_array($datumVastlegging)) {
            $useMinMax = false;
            if (isset($datumVastlegging['min'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::DATUM_VASTLEGGING, $datumVastlegging['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumVastlegging['max'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::DATUM_VASTLEGGING, $datumVastlegging['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesGegevensPeer::DATUM_VASTLEGGING, $datumVastlegging, $comparison);
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
     */
    public function filterByDatumOpnameInGstandaard($datumOpnameInGstandaard = null, $comparison = null)
    {
        if (is_array($datumOpnameInGstandaard)) {
            $useMinMax = false;
            if (isset($datumOpnameInGstandaard['min'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::DATUM_OPNAME_IN_GSTANDAARD, $datumOpnameInGstandaard['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumOpnameInGstandaard['max'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::DATUM_OPNAME_IN_GSTANDAARD, $datumOpnameInGstandaard['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesGegevensPeer::DATUM_OPNAME_IN_GSTANDAARD, $datumOpnameInGstandaard, $comparison);
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
     */
    public function filterByDatumLaasteMutatieInGstandaard($datumLaasteMutatieInGstandaard = null, $comparison = null)
    {
        if (is_array($datumLaasteMutatieInGstandaard)) {
            $useMinMax = false;
            if (isset($datumLaasteMutatieInGstandaard['min'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::DATUM_LAASTE_MUTATIE_IN_GSTANDAARD, $datumLaasteMutatieInGstandaard['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumLaasteMutatieInGstandaard['max'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::DATUM_LAASTE_MUTATIE_IN_GSTANDAARD, $datumLaasteMutatieInGstandaard['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesGegevensPeer::DATUM_LAASTE_MUTATIE_IN_GSTANDAARD, $datumLaasteMutatieInGstandaard, $comparison);
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GsInteractiesGegevensPeer::CODE_ONDERBOUWING_BEWIJSLAST_BIJ_INTERACTIE, $codeOnderbouwingBewijslastBijInteractie, $comparison);
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GsInteractiesGegevensPeer::CODE_ERNST_VAN_POTENTIEEL_EFFECT_BIJ_INTERACTIE, $codeErnstVanPotentieelEffectBijInteractie, $comparison);
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GsInteractiesGegevensPeer::OMSCHRIJVING_INTERACTIEWAARSCHUWING, $omschrijvingInteractiewaarschuwing, $comparison);
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
     */
    public function filterByInteractiefolderthesaurus128($interactiefolderthesaurus128 = null, $comparison = null)
    {
        if (is_array($interactiefolderthesaurus128)) {
            $useMinMax = false;
            if (isset($interactiefolderthesaurus128['min'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::INTERACTIEFOLDERTHESAURUS_128, $interactiefolderthesaurus128['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($interactiefolderthesaurus128['max'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::INTERACTIEFOLDERTHESAURUS_128, $interactiefolderthesaurus128['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesGegevensPeer::INTERACTIEFOLDERTHESAURUS_128, $interactiefolderthesaurus128, $comparison);
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
     */
    public function filterByFolder($folder = null, $comparison = null)
    {
        if (is_array($folder)) {
            $useMinMax = false;
            if (isset($folder['min'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::FOLDER, $folder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($folder['max'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::FOLDER, $folder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesGegevensPeer::FOLDER, $folder, $comparison);
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
     */
    public function filterByInteractie($interactie = null, $comparison = null)
    {
        if (is_array($interactie)) {
            $useMinMax = false;
            if (isset($interactie['min'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::INTERACTIE, $interactie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($interactie['max'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::INTERACTIE, $interactie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesGegevensPeer::INTERACTIE, $interactie, $comparison);
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
     */
    public function filterByVervolgActie($vervolgActie = null, $comparison = null)
    {
        if (is_array($vervolgActie)) {
            $useMinMax = false;
            if (isset($vervolgActie['min'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::VERVOLG_ACTIE, $vervolgActie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vervolgActie['max'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::VERVOLG_ACTIE, $vervolgActie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesGegevensPeer::VERVOLG_ACTIE, $vervolgActie, $comparison);
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
     */
    public function filterByIaTeVolgenDoorMonitoren($iaTeVolgenDoorMonitoren = null, $comparison = null)
    {
        if (is_array($iaTeVolgenDoorMonitoren)) {
            $useMinMax = false;
            if (isset($iaTeVolgenDoorMonitoren['min'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::IA_TE_VOLGEN_DOOR_MONITOREN, $iaTeVolgenDoorMonitoren['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iaTeVolgenDoorMonitoren['max'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::IA_TE_VOLGEN_DOOR_MONITOREN, $iaTeVolgenDoorMonitoren['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesGegevensPeer::IA_TE_VOLGEN_DOOR_MONITOREN, $iaTeVolgenDoorMonitoren, $comparison);
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
     */
    public function filterByOokBijStakenVanHetVoorschrift($ookBijStakenVanHetVoorschrift = null, $comparison = null)
    {
        if (is_array($ookBijStakenVanHetVoorschrift)) {
            $useMinMax = false;
            if (isset($ookBijStakenVanHetVoorschrift['min'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::OOK_BIJ_STAKEN_VAN_HET_VOORSCHRIFT, $ookBijStakenVanHetVoorschrift['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ookBijStakenVanHetVoorschrift['max'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::OOK_BIJ_STAKEN_VAN_HET_VOORSCHRIFT, $ookBijStakenVanHetVoorschrift['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesGegevensPeer::OOK_BIJ_STAKEN_VAN_HET_VOORSCHRIFT, $ookBijStakenVanHetVoorschrift, $comparison);
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
     */
    public function filterByAfhandelingVoorschrijver($afhandelingVoorschrijver = null, $comparison = null)
    {
        if (is_array($afhandelingVoorschrijver)) {
            $useMinMax = false;
            if (isset($afhandelingVoorschrijver['min'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::AFHANDELING_VOORSCHRIJVER, $afhandelingVoorschrijver['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($afhandelingVoorschrijver['max'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::AFHANDELING_VOORSCHRIJVER, $afhandelingVoorschrijver['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesGegevensPeer::AFHANDELING_VOORSCHRIJVER, $afhandelingVoorschrijver, $comparison);
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
     */
    public function filterByAfhandelingBalieInApotheek($afhandelingBalieInApotheek = null, $comparison = null)
    {
        if (is_array($afhandelingBalieInApotheek)) {
            $useMinMax = false;
            if (isset($afhandelingBalieInApotheek['min'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::AFHANDELING_BALIE_IN_APOTHEEK, $afhandelingBalieInApotheek['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($afhandelingBalieInApotheek['max'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::AFHANDELING_BALIE_IN_APOTHEEK, $afhandelingBalieInApotheek['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesGegevensPeer::AFHANDELING_BALIE_IN_APOTHEEK, $afhandelingBalieInApotheek, $comparison);
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
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
     */
    public function filterByAfhandelingFarmaceutischSpecialist($afhandelingFarmaceutischSpecialist = null, $comparison = null)
    {
        if (is_array($afhandelingFarmaceutischSpecialist)) {
            $useMinMax = false;
            if (isset($afhandelingFarmaceutischSpecialist['min'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::AFHANDELING_FARMACEUTISCH_SPECIALIST, $afhandelingFarmaceutischSpecialist['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($afhandelingFarmaceutischSpecialist['max'])) {
                $this->addUsingAlias(GsInteractiesGegevensPeer::AFHANDELING_FARMACEUTISCH_SPECIALIST, $afhandelingFarmaceutischSpecialist['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsInteractiesGegevensPeer::AFHANDELING_FARMACEUTISCH_SPECIALIST, $afhandelingFarmaceutischSpecialist, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsInteractiesGegevens $gsInteractiesGegevens Object to remove from the list of results
     *
     * @return GsInteractiesGegevensQuery The current query, for fluid interface
     */
    public function prune($gsInteractiesGegevens = null)
    {
        if ($gsInteractiesGegevens) {
            $this->addUsingAlias(GsInteractiesGegevensPeer::INTERACTIEWAARSCHUWING_CODE, $gsInteractiesGegevens->getInteractiewaarschuwingCode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
