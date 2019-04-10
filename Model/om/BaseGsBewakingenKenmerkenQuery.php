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
use PharmaIntelligence\GstandaardBundle\Model\GsBewakingenKenmerken;
use PharmaIntelligence\GstandaardBundle\Model\GsBewakingenKenmerkenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsBewakingenKenmerkenQuery;

/**
 * @method GsBewakingenKenmerkenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsBewakingenKenmerkenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsBewakingenKenmerkenQuery orderByBewakingscodeCi($order = Criteria::ASC) Order by the bewakingscode_ci column
 * @method GsBewakingenKenmerkenQuery orderByOmschrijvingCibewaking($order = Criteria::ASC) Order by the omschrijving_cibewaking column
 * @method GsBewakingenKenmerkenQuery orderByThesnrBewakingssoort($order = Criteria::ASC) Order by the thesnr_bewakingssoort column
 * @method GsBewakingenKenmerkenQuery orderByBewakingssoort($order = Criteria::ASC) Order by the bewakingssoort column
 * @method GsBewakingenKenmerkenQuery orderByThesnrFolder($order = Criteria::ASC) Order by the thesnr_folder column
 * @method GsBewakingenKenmerkenQuery orderByFolder($order = Criteria::ASC) Order by the folder column
 * @method GsBewakingenKenmerkenQuery orderByVolgensDeskundigenJn($order = Criteria::ASC) Order by the volgens_deskundigen_jn column
 * @method GsBewakingenKenmerkenQuery orderByActieNodigJn($order = Criteria::ASC) Order by the actie_nodig_jn column
 * @method GsBewakingenKenmerkenQuery orderByDatumVastleggingWinap($order = Criteria::ASC) Order by the datum_vastlegging_winap column
 * @method GsBewakingenKenmerkenQuery orderByDatumOpvoerGstandaard($order = Criteria::ASC) Order by the datum_opvoer_gstandaard column
 * @method GsBewakingenKenmerkenQuery orderByDatumMutatieGstandaard($order = Criteria::ASC) Order by the datum_mutatie_gstandaard column
 * @method GsBewakingenKenmerkenQuery orderByCreatinineKlaring($order = Criteria::ASC) Order by the creatinine_klaring column
 * @method GsBewakingenKenmerkenQuery orderByBewakingTeVolgenDoorMonitoren($order = Criteria::ASC) Order by the bewaking_te_volgen_door_monitoren column
 *
 * @method GsBewakingenKenmerkenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsBewakingenKenmerkenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsBewakingenKenmerkenQuery groupByBewakingscodeCi() Group by the bewakingscode_ci column
 * @method GsBewakingenKenmerkenQuery groupByOmschrijvingCibewaking() Group by the omschrijving_cibewaking column
 * @method GsBewakingenKenmerkenQuery groupByThesnrBewakingssoort() Group by the thesnr_bewakingssoort column
 * @method GsBewakingenKenmerkenQuery groupByBewakingssoort() Group by the bewakingssoort column
 * @method GsBewakingenKenmerkenQuery groupByThesnrFolder() Group by the thesnr_folder column
 * @method GsBewakingenKenmerkenQuery groupByFolder() Group by the folder column
 * @method GsBewakingenKenmerkenQuery groupByVolgensDeskundigenJn() Group by the volgens_deskundigen_jn column
 * @method GsBewakingenKenmerkenQuery groupByActieNodigJn() Group by the actie_nodig_jn column
 * @method GsBewakingenKenmerkenQuery groupByDatumVastleggingWinap() Group by the datum_vastlegging_winap column
 * @method GsBewakingenKenmerkenQuery groupByDatumOpvoerGstandaard() Group by the datum_opvoer_gstandaard column
 * @method GsBewakingenKenmerkenQuery groupByDatumMutatieGstandaard() Group by the datum_mutatie_gstandaard column
 * @method GsBewakingenKenmerkenQuery groupByCreatinineKlaring() Group by the creatinine_klaring column
 * @method GsBewakingenKenmerkenQuery groupByBewakingTeVolgenDoorMonitoren() Group by the bewaking_te_volgen_door_monitoren column
 *
 * @method GsBewakingenKenmerkenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsBewakingenKenmerkenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsBewakingenKenmerkenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsBewakingenKenmerken findOne(PropelPDO $con = null) Return the first GsBewakingenKenmerken matching the query
 * @method GsBewakingenKenmerken findOneOrCreate(PropelPDO $con = null) Return the first GsBewakingenKenmerken matching the query, or a new GsBewakingenKenmerken object populated from the query conditions when no match is found
 *
 * @method GsBewakingenKenmerken findOneByBestandnummer(int $bestandnummer) Return the first GsBewakingenKenmerken filtered by the bestandnummer column
 * @method GsBewakingenKenmerken findOneByMutatiekode(int $mutatiekode) Return the first GsBewakingenKenmerken filtered by the mutatiekode column
 * @method GsBewakingenKenmerken findOneByOmschrijvingCibewaking(string $omschrijving_cibewaking) Return the first GsBewakingenKenmerken filtered by the omschrijving_cibewaking column
 * @method GsBewakingenKenmerken findOneByThesnrBewakingssoort(int $thesnr_bewakingssoort) Return the first GsBewakingenKenmerken filtered by the thesnr_bewakingssoort column
 * @method GsBewakingenKenmerken findOneByBewakingssoort(int $bewakingssoort) Return the first GsBewakingenKenmerken filtered by the bewakingssoort column
 * @method GsBewakingenKenmerken findOneByThesnrFolder(int $thesnr_folder) Return the first GsBewakingenKenmerken filtered by the thesnr_folder column
 * @method GsBewakingenKenmerken findOneByFolder(int $folder) Return the first GsBewakingenKenmerken filtered by the folder column
 * @method GsBewakingenKenmerken findOneByVolgensDeskundigenJn(int $volgens_deskundigen_jn) Return the first GsBewakingenKenmerken filtered by the volgens_deskundigen_jn column
 * @method GsBewakingenKenmerken findOneByActieNodigJn(int $actie_nodig_jn) Return the first GsBewakingenKenmerken filtered by the actie_nodig_jn column
 * @method GsBewakingenKenmerken findOneByDatumVastleggingWinap(int $datum_vastlegging_winap) Return the first GsBewakingenKenmerken filtered by the datum_vastlegging_winap column
 * @method GsBewakingenKenmerken findOneByDatumOpvoerGstandaard(int $datum_opvoer_gstandaard) Return the first GsBewakingenKenmerken filtered by the datum_opvoer_gstandaard column
 * @method GsBewakingenKenmerken findOneByDatumMutatieGstandaard(int $datum_mutatie_gstandaard) Return the first GsBewakingenKenmerken filtered by the datum_mutatie_gstandaard column
 * @method GsBewakingenKenmerken findOneByCreatinineKlaring(int $creatinine_klaring) Return the first GsBewakingenKenmerken filtered by the creatinine_klaring column
 * @method GsBewakingenKenmerken findOneByBewakingTeVolgenDoorMonitoren(int $bewaking_te_volgen_door_monitoren) Return the first GsBewakingenKenmerken filtered by the bewaking_te_volgen_door_monitoren column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsBewakingenKenmerken objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsBewakingenKenmerken objects filtered by the mutatiekode column
 * @method array findByBewakingscodeCi(int $bewakingscode_ci) Return GsBewakingenKenmerken objects filtered by the bewakingscode_ci column
 * @method array findByOmschrijvingCibewaking(string $omschrijving_cibewaking) Return GsBewakingenKenmerken objects filtered by the omschrijving_cibewaking column
 * @method array findByThesnrBewakingssoort(int $thesnr_bewakingssoort) Return GsBewakingenKenmerken objects filtered by the thesnr_bewakingssoort column
 * @method array findByBewakingssoort(int $bewakingssoort) Return GsBewakingenKenmerken objects filtered by the bewakingssoort column
 * @method array findByThesnrFolder(int $thesnr_folder) Return GsBewakingenKenmerken objects filtered by the thesnr_folder column
 * @method array findByFolder(int $folder) Return GsBewakingenKenmerken objects filtered by the folder column
 * @method array findByVolgensDeskundigenJn(int $volgens_deskundigen_jn) Return GsBewakingenKenmerken objects filtered by the volgens_deskundigen_jn column
 * @method array findByActieNodigJn(int $actie_nodig_jn) Return GsBewakingenKenmerken objects filtered by the actie_nodig_jn column
 * @method array findByDatumVastleggingWinap(int $datum_vastlegging_winap) Return GsBewakingenKenmerken objects filtered by the datum_vastlegging_winap column
 * @method array findByDatumOpvoerGstandaard(int $datum_opvoer_gstandaard) Return GsBewakingenKenmerken objects filtered by the datum_opvoer_gstandaard column
 * @method array findByDatumMutatieGstandaard(int $datum_mutatie_gstandaard) Return GsBewakingenKenmerken objects filtered by the datum_mutatie_gstandaard column
 * @method array findByCreatinineKlaring(int $creatinine_klaring) Return GsBewakingenKenmerken objects filtered by the creatinine_klaring column
 * @method array findByBewakingTeVolgenDoorMonitoren(int $bewaking_te_volgen_door_monitoren) Return GsBewakingenKenmerken objects filtered by the bewaking_te_volgen_door_monitoren column
 */
abstract class BaseGsBewakingenKenmerkenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsBewakingenKenmerkenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsBewakingenKenmerken';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsBewakingenKenmerkenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsBewakingenKenmerkenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsBewakingenKenmerkenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsBewakingenKenmerkenQuery) {
            return $criteria;
        }
        $query = new GsBewakingenKenmerkenQuery(null, null, $modelAlias);

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
     * @return   GsBewakingenKenmerken|GsBewakingenKenmerken[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsBewakingenKenmerkenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsBewakingenKenmerkenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsBewakingenKenmerken A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByBewakingscodeCi($key, $con = null)
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
     * @return                 GsBewakingenKenmerken A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `bewakingscode_ci`, `omschrijving_cibewaking`, `thesnr_bewakingssoort`, `bewakingssoort`, `thesnr_folder`, `folder`, `volgens_deskundigen_jn`, `actie_nodig_jn`, `datum_vastlegging_winap`, `datum_opvoer_gstandaard`, `datum_mutatie_gstandaard`, `creatinine_klaring`, `bewaking_te_volgen_door_monitoren` FROM `gs_bewakingen_kenmerken` WHERE `bewakingscode_ci` = :p0';
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
            $obj = new GsBewakingenKenmerken();
            $obj->hydrate($row);
            GsBewakingenKenmerkenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsBewakingenKenmerken|GsBewakingenKenmerken[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsBewakingenKenmerken[]|mixed the list of results, formatted by the current formatter
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
     * @return GsBewakingenKenmerkenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsBewakingenKenmerkenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI, $keys, Criteria::IN);
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
     * @return GsBewakingenKenmerkenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenKenmerkenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsBewakingenKenmerkenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenKenmerkenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the bewakingscode_ci column
     *
     * Example usage:
     * <code>
     * $query->filterByBewakingscodeCi(1234); // WHERE bewakingscode_ci = 1234
     * $query->filterByBewakingscodeCi(array(12, 34)); // WHERE bewakingscode_ci IN (12, 34)
     * $query->filterByBewakingscodeCi(array('min' => 12)); // WHERE bewakingscode_ci >= 12
     * $query->filterByBewakingscodeCi(array('max' => 12)); // WHERE bewakingscode_ci <= 12
     * </code>
     *
     * @param     mixed $bewakingscodeCi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBewakingenKenmerkenQuery The current query, for fluid interface
     */
    public function filterByBewakingscodeCi($bewakingscodeCi = null, $comparison = null)
    {
        if (is_array($bewakingscodeCi)) {
            $useMinMax = false;
            if (isset($bewakingscodeCi['min'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI, $bewakingscodeCi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bewakingscodeCi['max'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI, $bewakingscodeCi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI, $bewakingscodeCi, $comparison);
    }

    /**
     * Filter the query on the omschrijving_cibewaking column
     *
     * Example usage:
     * <code>
     * $query->filterByOmschrijvingCibewaking('fooValue');   // WHERE omschrijving_cibewaking = 'fooValue'
     * $query->filterByOmschrijvingCibewaking('%fooValue%'); // WHERE omschrijving_cibewaking LIKE '%fooValue%'
     * </code>
     *
     * @param     string $omschrijvingCibewaking The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBewakingenKenmerkenQuery The current query, for fluid interface
     */
    public function filterByOmschrijvingCibewaking($omschrijvingCibewaking = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($omschrijvingCibewaking)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $omschrijvingCibewaking)) {
                $omschrijvingCibewaking = str_replace('*', '%', $omschrijvingCibewaking);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsBewakingenKenmerkenPeer::OMSCHRIJVING_CIBEWAKING, $omschrijvingCibewaking, $comparison);
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
     * @param     mixed $thesnrBewakingssoort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBewakingenKenmerkenQuery The current query, for fluid interface
     */
    public function filterByThesnrBewakingssoort($thesnrBewakingssoort = null, $comparison = null)
    {
        if (is_array($thesnrBewakingssoort)) {
            $useMinMax = false;
            if (isset($thesnrBewakingssoort['min'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::THESNR_BEWAKINGSSOORT, $thesnrBewakingssoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesnrBewakingssoort['max'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::THESNR_BEWAKINGSSOORT, $thesnrBewakingssoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenKenmerkenPeer::THESNR_BEWAKINGSSOORT, $thesnrBewakingssoort, $comparison);
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
     * @param     mixed $bewakingssoort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBewakingenKenmerkenQuery The current query, for fluid interface
     */
    public function filterByBewakingssoort($bewakingssoort = null, $comparison = null)
    {
        if (is_array($bewakingssoort)) {
            $useMinMax = false;
            if (isset($bewakingssoort['min'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::BEWAKINGSSOORT, $bewakingssoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bewakingssoort['max'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::BEWAKINGSSOORT, $bewakingssoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenKenmerkenPeer::BEWAKINGSSOORT, $bewakingssoort, $comparison);
    }

    /**
     * Filter the query on the thesnr_folder column
     *
     * Example usage:
     * <code>
     * $query->filterByThesnrFolder(1234); // WHERE thesnr_folder = 1234
     * $query->filterByThesnrFolder(array(12, 34)); // WHERE thesnr_folder IN (12, 34)
     * $query->filterByThesnrFolder(array('min' => 12)); // WHERE thesnr_folder >= 12
     * $query->filterByThesnrFolder(array('max' => 12)); // WHERE thesnr_folder <= 12
     * </code>
     *
     * @param     mixed $thesnrFolder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBewakingenKenmerkenQuery The current query, for fluid interface
     */
    public function filterByThesnrFolder($thesnrFolder = null, $comparison = null)
    {
        if (is_array($thesnrFolder)) {
            $useMinMax = false;
            if (isset($thesnrFolder['min'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::THESNR_FOLDER, $thesnrFolder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesnrFolder['max'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::THESNR_FOLDER, $thesnrFolder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenKenmerkenPeer::THESNR_FOLDER, $thesnrFolder, $comparison);
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
     * @return GsBewakingenKenmerkenQuery The current query, for fluid interface
     */
    public function filterByFolder($folder = null, $comparison = null)
    {
        if (is_array($folder)) {
            $useMinMax = false;
            if (isset($folder['min'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::FOLDER, $folder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($folder['max'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::FOLDER, $folder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenKenmerkenPeer::FOLDER, $folder, $comparison);
    }

    /**
     * Filter the query on the volgens_deskundigen_jn column
     *
     * Example usage:
     * <code>
     * $query->filterByVolgensDeskundigenJn(1234); // WHERE volgens_deskundigen_jn = 1234
     * $query->filterByVolgensDeskundigenJn(array(12, 34)); // WHERE volgens_deskundigen_jn IN (12, 34)
     * $query->filterByVolgensDeskundigenJn(array('min' => 12)); // WHERE volgens_deskundigen_jn >= 12
     * $query->filterByVolgensDeskundigenJn(array('max' => 12)); // WHERE volgens_deskundigen_jn <= 12
     * </code>
     *
     * @param     mixed $volgensDeskundigenJn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBewakingenKenmerkenQuery The current query, for fluid interface
     */
    public function filterByVolgensDeskundigenJn($volgensDeskundigenJn = null, $comparison = null)
    {
        if (is_array($volgensDeskundigenJn)) {
            $useMinMax = false;
            if (isset($volgensDeskundigenJn['min'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::VOLGENS_DESKUNDIGEN_JN, $volgensDeskundigenJn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($volgensDeskundigenJn['max'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::VOLGENS_DESKUNDIGEN_JN, $volgensDeskundigenJn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenKenmerkenPeer::VOLGENS_DESKUNDIGEN_JN, $volgensDeskundigenJn, $comparison);
    }

    /**
     * Filter the query on the actie_nodig_jn column
     *
     * Example usage:
     * <code>
     * $query->filterByActieNodigJn(1234); // WHERE actie_nodig_jn = 1234
     * $query->filterByActieNodigJn(array(12, 34)); // WHERE actie_nodig_jn IN (12, 34)
     * $query->filterByActieNodigJn(array('min' => 12)); // WHERE actie_nodig_jn >= 12
     * $query->filterByActieNodigJn(array('max' => 12)); // WHERE actie_nodig_jn <= 12
     * </code>
     *
     * @param     mixed $actieNodigJn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBewakingenKenmerkenQuery The current query, for fluid interface
     */
    public function filterByActieNodigJn($actieNodigJn = null, $comparison = null)
    {
        if (is_array($actieNodigJn)) {
            $useMinMax = false;
            if (isset($actieNodigJn['min'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::ACTIE_NODIG_JN, $actieNodigJn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actieNodigJn['max'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::ACTIE_NODIG_JN, $actieNodigJn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenKenmerkenPeer::ACTIE_NODIG_JN, $actieNodigJn, $comparison);
    }

    /**
     * Filter the query on the datum_vastlegging_winap column
     *
     * Example usage:
     * <code>
     * $query->filterByDatumVastleggingWinap(1234); // WHERE datum_vastlegging_winap = 1234
     * $query->filterByDatumVastleggingWinap(array(12, 34)); // WHERE datum_vastlegging_winap IN (12, 34)
     * $query->filterByDatumVastleggingWinap(array('min' => 12)); // WHERE datum_vastlegging_winap >= 12
     * $query->filterByDatumVastleggingWinap(array('max' => 12)); // WHERE datum_vastlegging_winap <= 12
     * </code>
     *
     * @param     mixed $datumVastleggingWinap The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBewakingenKenmerkenQuery The current query, for fluid interface
     */
    public function filterByDatumVastleggingWinap($datumVastleggingWinap = null, $comparison = null)
    {
        if (is_array($datumVastleggingWinap)) {
            $useMinMax = false;
            if (isset($datumVastleggingWinap['min'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::DATUM_VASTLEGGING_WINAP, $datumVastleggingWinap['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumVastleggingWinap['max'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::DATUM_VASTLEGGING_WINAP, $datumVastleggingWinap['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenKenmerkenPeer::DATUM_VASTLEGGING_WINAP, $datumVastleggingWinap, $comparison);
    }

    /**
     * Filter the query on the datum_opvoer_gstandaard column
     *
     * Example usage:
     * <code>
     * $query->filterByDatumOpvoerGstandaard(1234); // WHERE datum_opvoer_gstandaard = 1234
     * $query->filterByDatumOpvoerGstandaard(array(12, 34)); // WHERE datum_opvoer_gstandaard IN (12, 34)
     * $query->filterByDatumOpvoerGstandaard(array('min' => 12)); // WHERE datum_opvoer_gstandaard >= 12
     * $query->filterByDatumOpvoerGstandaard(array('max' => 12)); // WHERE datum_opvoer_gstandaard <= 12
     * </code>
     *
     * @param     mixed $datumOpvoerGstandaard The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBewakingenKenmerkenQuery The current query, for fluid interface
     */
    public function filterByDatumOpvoerGstandaard($datumOpvoerGstandaard = null, $comparison = null)
    {
        if (is_array($datumOpvoerGstandaard)) {
            $useMinMax = false;
            if (isset($datumOpvoerGstandaard['min'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::DATUM_OPVOER_GSTANDAARD, $datumOpvoerGstandaard['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumOpvoerGstandaard['max'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::DATUM_OPVOER_GSTANDAARD, $datumOpvoerGstandaard['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenKenmerkenPeer::DATUM_OPVOER_GSTANDAARD, $datumOpvoerGstandaard, $comparison);
    }

    /**
     * Filter the query on the datum_mutatie_gstandaard column
     *
     * Example usage:
     * <code>
     * $query->filterByDatumMutatieGstandaard(1234); // WHERE datum_mutatie_gstandaard = 1234
     * $query->filterByDatumMutatieGstandaard(array(12, 34)); // WHERE datum_mutatie_gstandaard IN (12, 34)
     * $query->filterByDatumMutatieGstandaard(array('min' => 12)); // WHERE datum_mutatie_gstandaard >= 12
     * $query->filterByDatumMutatieGstandaard(array('max' => 12)); // WHERE datum_mutatie_gstandaard <= 12
     * </code>
     *
     * @param     mixed $datumMutatieGstandaard The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBewakingenKenmerkenQuery The current query, for fluid interface
     */
    public function filterByDatumMutatieGstandaard($datumMutatieGstandaard = null, $comparison = null)
    {
        if (is_array($datumMutatieGstandaard)) {
            $useMinMax = false;
            if (isset($datumMutatieGstandaard['min'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::DATUM_MUTATIE_GSTANDAARD, $datumMutatieGstandaard['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datumMutatieGstandaard['max'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::DATUM_MUTATIE_GSTANDAARD, $datumMutatieGstandaard['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenKenmerkenPeer::DATUM_MUTATIE_GSTANDAARD, $datumMutatieGstandaard, $comparison);
    }

    /**
     * Filter the query on the creatinine_klaring column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatinineKlaring(1234); // WHERE creatinine_klaring = 1234
     * $query->filterByCreatinineKlaring(array(12, 34)); // WHERE creatinine_klaring IN (12, 34)
     * $query->filterByCreatinineKlaring(array('min' => 12)); // WHERE creatinine_klaring >= 12
     * $query->filterByCreatinineKlaring(array('max' => 12)); // WHERE creatinine_klaring <= 12
     * </code>
     *
     * @param     mixed $creatinineKlaring The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBewakingenKenmerkenQuery The current query, for fluid interface
     */
    public function filterByCreatinineKlaring($creatinineKlaring = null, $comparison = null)
    {
        if (is_array($creatinineKlaring)) {
            $useMinMax = false;
            if (isset($creatinineKlaring['min'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::CREATININE_KLARING, $creatinineKlaring['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($creatinineKlaring['max'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::CREATININE_KLARING, $creatinineKlaring['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenKenmerkenPeer::CREATININE_KLARING, $creatinineKlaring, $comparison);
    }

    /**
     * Filter the query on the bewaking_te_volgen_door_monitoren column
     *
     * Example usage:
     * <code>
     * $query->filterByBewakingTeVolgenDoorMonitoren(1234); // WHERE bewaking_te_volgen_door_monitoren = 1234
     * $query->filterByBewakingTeVolgenDoorMonitoren(array(12, 34)); // WHERE bewaking_te_volgen_door_monitoren IN (12, 34)
     * $query->filterByBewakingTeVolgenDoorMonitoren(array('min' => 12)); // WHERE bewaking_te_volgen_door_monitoren >= 12
     * $query->filterByBewakingTeVolgenDoorMonitoren(array('max' => 12)); // WHERE bewaking_te_volgen_door_monitoren <= 12
     * </code>
     *
     * @param     mixed $bewakingTeVolgenDoorMonitoren The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsBewakingenKenmerkenQuery The current query, for fluid interface
     */
    public function filterByBewakingTeVolgenDoorMonitoren($bewakingTeVolgenDoorMonitoren = null, $comparison = null)
    {
        if (is_array($bewakingTeVolgenDoorMonitoren)) {
            $useMinMax = false;
            if (isset($bewakingTeVolgenDoorMonitoren['min'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::BEWAKING_TE_VOLGEN_DOOR_MONITOREN, $bewakingTeVolgenDoorMonitoren['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bewakingTeVolgenDoorMonitoren['max'])) {
                $this->addUsingAlias(GsBewakingenKenmerkenPeer::BEWAKING_TE_VOLGEN_DOOR_MONITOREN, $bewakingTeVolgenDoorMonitoren['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsBewakingenKenmerkenPeer::BEWAKING_TE_VOLGEN_DOOR_MONITOREN, $bewakingTeVolgenDoorMonitoren, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsBewakingenKenmerken $gsBewakingenKenmerken Object to remove from the list of results
     *
     * @return GsBewakingenKenmerkenQuery The current query, for fluid interface
     */
    public function prune($gsBewakingenKenmerken = null)
    {
        if ($gsBewakingenKenmerken) {
            $this->addUsingAlias(GsBewakingenKenmerkenPeer::BEWAKINGSCODE_CI, $gsBewakingenKenmerken->getBewakingscodeCi(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
