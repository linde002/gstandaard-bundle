<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \Criteria;
use \Exception;
use \ModelCriteria;
use \ModelJoin;
use \PDO;
use \Propel;
use \PropelCollection;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsIndicatiesBijSupplementaireProducten;
use PharmaIntelligence\GstandaardBundle\Model\GsIndicatiesBijSupplementaireProductenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsIndicatiesBijSupplementaireProductenQuery;

/**
 * @method GsIndicatiesBijSupplementaireProductenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsIndicatiesBijSupplementaireProductenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsIndicatiesBijSupplementaireProductenQuery orderByZindexNummer($order = Criteria::ASC) Order by the zindex_nummer column
 * @method GsIndicatiesBijSupplementaireProductenQuery orderByIndicatieId($order = Criteria::ASC) Order by the indicatie_id column
 * @method GsIndicatiesBijSupplementaireProductenQuery orderByTekstmoduleIndicatieId($order = Criteria::ASC) Order by the tekstmodule_indicatie_id column
 * @method GsIndicatiesBijSupplementaireProductenQuery orderByThesaurusNummerSoortIndicatie($order = Criteria::ASC) Order by the thesaurus_nummer_soort_indicatie column
 * @method GsIndicatiesBijSupplementaireProductenQuery orderBySoortIndicatie($order = Criteria::ASC) Order by the soort_indicatie column
 * @method GsIndicatiesBijSupplementaireProductenQuery orderByDuidingId($order = Criteria::ASC) Order by the duiding_id column
 * @method GsIndicatiesBijSupplementaireProductenQuery orderByTekstmoduleDuidingId($order = Criteria::ASC) Order by the tekstmodule_duiding_id column
 * @method GsIndicatiesBijSupplementaireProductenQuery orderByAanspraakOpGeneesmiddelBijIndicatieVolgensZn($order = Criteria::ASC) Order by the aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn column
 *
 * @method GsIndicatiesBijSupplementaireProductenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsIndicatiesBijSupplementaireProductenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsIndicatiesBijSupplementaireProductenQuery groupByZindexNummer() Group by the zindex_nummer column
 * @method GsIndicatiesBijSupplementaireProductenQuery groupByIndicatieId() Group by the indicatie_id column
 * @method GsIndicatiesBijSupplementaireProductenQuery groupByTekstmoduleIndicatieId() Group by the tekstmodule_indicatie_id column
 * @method GsIndicatiesBijSupplementaireProductenQuery groupByThesaurusNummerSoortIndicatie() Group by the thesaurus_nummer_soort_indicatie column
 * @method GsIndicatiesBijSupplementaireProductenQuery groupBySoortIndicatie() Group by the soort_indicatie column
 * @method GsIndicatiesBijSupplementaireProductenQuery groupByDuidingId() Group by the duiding_id column
 * @method GsIndicatiesBijSupplementaireProductenQuery groupByTekstmoduleDuidingId() Group by the tekstmodule_duiding_id column
 * @method GsIndicatiesBijSupplementaireProductenQuery groupByAanspraakOpGeneesmiddelBijIndicatieVolgensZn() Group by the aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn column
 *
 * @method GsIndicatiesBijSupplementaireProductenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsIndicatiesBijSupplementaireProductenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsIndicatiesBijSupplementaireProductenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsIndicatiesBijSupplementaireProductenQuery leftJoinGsArtikelen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelen relation
 * @method GsIndicatiesBijSupplementaireProductenQuery rightJoinGsArtikelen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelen relation
 * @method GsIndicatiesBijSupplementaireProductenQuery innerJoinGsArtikelen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelen relation
 *
 * @method GsIndicatiesBijSupplementaireProducten findOne(PropelPDO $con = null) Return the first GsIndicatiesBijSupplementaireProducten matching the query
 * @method GsIndicatiesBijSupplementaireProducten findOneOrCreate(PropelPDO $con = null) Return the first GsIndicatiesBijSupplementaireProducten matching the query, or a new GsIndicatiesBijSupplementaireProducten object populated from the query conditions when no match is found
 *
 * @method GsIndicatiesBijSupplementaireProducten findOneByBestandnummer(int $bestandnummer) Return the first GsIndicatiesBijSupplementaireProducten filtered by the bestandnummer column
 * @method GsIndicatiesBijSupplementaireProducten findOneByMutatiekode(int $mutatiekode) Return the first GsIndicatiesBijSupplementaireProducten filtered by the mutatiekode column
 * @method GsIndicatiesBijSupplementaireProducten findOneByZindexNummer(int $zindex_nummer) Return the first GsIndicatiesBijSupplementaireProducten filtered by the zindex_nummer column
 * @method GsIndicatiesBijSupplementaireProducten findOneByIndicatieId(int $indicatie_id) Return the first GsIndicatiesBijSupplementaireProducten filtered by the indicatie_id column
 * @method GsIndicatiesBijSupplementaireProducten findOneByTekstmoduleIndicatieId(int $tekstmodule_indicatie_id) Return the first GsIndicatiesBijSupplementaireProducten filtered by the tekstmodule_indicatie_id column
 * @method GsIndicatiesBijSupplementaireProducten findOneByThesaurusNummerSoortIndicatie(int $thesaurus_nummer_soort_indicatie) Return the first GsIndicatiesBijSupplementaireProducten filtered by the thesaurus_nummer_soort_indicatie column
 * @method GsIndicatiesBijSupplementaireProducten findOneBySoortIndicatie(int $soort_indicatie) Return the first GsIndicatiesBijSupplementaireProducten filtered by the soort_indicatie column
 * @method GsIndicatiesBijSupplementaireProducten findOneByDuidingId(int $duiding_id) Return the first GsIndicatiesBijSupplementaireProducten filtered by the duiding_id column
 * @method GsIndicatiesBijSupplementaireProducten findOneByTekstmoduleDuidingId(int $tekstmodule_duiding_id) Return the first GsIndicatiesBijSupplementaireProducten filtered by the tekstmodule_duiding_id column
 * @method GsIndicatiesBijSupplementaireProducten findOneByAanspraakOpGeneesmiddelBijIndicatieVolgensZn(string $aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn) Return the first GsIndicatiesBijSupplementaireProducten filtered by the aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsIndicatiesBijSupplementaireProducten objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsIndicatiesBijSupplementaireProducten objects filtered by the mutatiekode column
 * @method array findByZindexNummer(int $zindex_nummer) Return GsIndicatiesBijSupplementaireProducten objects filtered by the zindex_nummer column
 * @method array findByIndicatieId(int $indicatie_id) Return GsIndicatiesBijSupplementaireProducten objects filtered by the indicatie_id column
 * @method array findByTekstmoduleIndicatieId(int $tekstmodule_indicatie_id) Return GsIndicatiesBijSupplementaireProducten objects filtered by the tekstmodule_indicatie_id column
 * @method array findByThesaurusNummerSoortIndicatie(int $thesaurus_nummer_soort_indicatie) Return GsIndicatiesBijSupplementaireProducten objects filtered by the thesaurus_nummer_soort_indicatie column
 * @method array findBySoortIndicatie(int $soort_indicatie) Return GsIndicatiesBijSupplementaireProducten objects filtered by the soort_indicatie column
 * @method array findByDuidingId(int $duiding_id) Return GsIndicatiesBijSupplementaireProducten objects filtered by the duiding_id column
 * @method array findByTekstmoduleDuidingId(int $tekstmodule_duiding_id) Return GsIndicatiesBijSupplementaireProducten objects filtered by the tekstmodule_duiding_id column
 * @method array findByAanspraakOpGeneesmiddelBijIndicatieVolgensZn(string $aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn) Return GsIndicatiesBijSupplementaireProducten objects filtered by the aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn column
 */
abstract class BaseGsIndicatiesBijSupplementaireProductenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsIndicatiesBijSupplementaireProductenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsIndicatiesBijSupplementaireProducten';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsIndicatiesBijSupplementaireProductenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsIndicatiesBijSupplementaireProductenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsIndicatiesBijSupplementaireProductenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsIndicatiesBijSupplementaireProductenQuery) {
            return $criteria;
        }
        $query = new GsIndicatiesBijSupplementaireProductenQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$zindex_nummer, $indicatie_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsIndicatiesBijSupplementaireProducten|GsIndicatiesBijSupplementaireProducten[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsIndicatiesBijSupplementaireProductenPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsIndicatiesBijSupplementaireProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsIndicatiesBijSupplementaireProducten A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `zindex_nummer`, `indicatie_id`, `tekstmodule_indicatie_id`, `thesaurus_nummer_soort_indicatie`, `soort_indicatie`, `duiding_id`, `tekstmodule_duiding_id`, `aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn` FROM `gs_indicaties_bij_supplementaire_producten` WHERE `zindex_nummer` = :p0 AND `indicatie_id` = :p1';
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
            $obj = new GsIndicatiesBijSupplementaireProducten();
            $obj->hydrate($row);
            GsIndicatiesBijSupplementaireProductenPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsIndicatiesBijSupplementaireProducten|GsIndicatiesBijSupplementaireProducten[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsIndicatiesBijSupplementaireProducten[]|mixed the list of results, formatted by the current formatter
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
     * @return GsIndicatiesBijSupplementaireProductenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsIndicatiesBijSupplementaireProductenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID, $key[1], Criteria::EQUAL);
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
     * @return GsIndicatiesBijSupplementaireProductenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsIndicatiesBijSupplementaireProductenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the zindex_nummer column
     *
     * Example usage:
     * <code>
     * $query->filterByZindexNummer(1234); // WHERE zindex_nummer = 1234
     * $query->filterByZindexNummer(array(12, 34)); // WHERE zindex_nummer IN (12, 34)
     * $query->filterByZindexNummer(array('min' => 12)); // WHERE zindex_nummer >= 12
     * $query->filterByZindexNummer(array('max' => 12)); // WHERE zindex_nummer <= 12
     * </code>
     *
     * @see       filterByGsArtikelen()
     *
     * @param     mixed $zindexNummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIndicatiesBijSupplementaireProductenQuery The current query, for fluid interface
     */
    public function filterByZindexNummer($zindexNummer = null, $comparison = null)
    {
        if (is_array($zindexNummer)) {
            $useMinMax = false;
            if (isset($zindexNummer['min'])) {
                $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER, $zindexNummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zindexNummer['max'])) {
                $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER, $zindexNummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER, $zindexNummer, $comparison);
    }

    /**
     * Filter the query on the indicatie_id column
     *
     * Example usage:
     * <code>
     * $query->filterByIndicatieId(1234); // WHERE indicatie_id = 1234
     * $query->filterByIndicatieId(array(12, 34)); // WHERE indicatie_id IN (12, 34)
     * $query->filterByIndicatieId(array('min' => 12)); // WHERE indicatie_id >= 12
     * $query->filterByIndicatieId(array('max' => 12)); // WHERE indicatie_id <= 12
     * </code>
     *
     * @param     mixed $indicatieId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIndicatiesBijSupplementaireProductenQuery The current query, for fluid interface
     */
    public function filterByIndicatieId($indicatieId = null, $comparison = null)
    {
        if (is_array($indicatieId)) {
            $useMinMax = false;
            if (isset($indicatieId['min'])) {
                $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID, $indicatieId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indicatieId['max'])) {
                $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID, $indicatieId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID, $indicatieId, $comparison);
    }

    /**
     * Filter the query on the tekstmodule_indicatie_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstmoduleIndicatieId(1234); // WHERE tekstmodule_indicatie_id = 1234
     * $query->filterByTekstmoduleIndicatieId(array(12, 34)); // WHERE tekstmodule_indicatie_id IN (12, 34)
     * $query->filterByTekstmoduleIndicatieId(array('min' => 12)); // WHERE tekstmodule_indicatie_id >= 12
     * $query->filterByTekstmoduleIndicatieId(array('max' => 12)); // WHERE tekstmodule_indicatie_id <= 12
     * </code>
     *
     * @param     mixed $tekstmoduleIndicatieId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIndicatiesBijSupplementaireProductenQuery The current query, for fluid interface
     */
    public function filterByTekstmoduleIndicatieId($tekstmoduleIndicatieId = null, $comparison = null)
    {
        if (is_array($tekstmoduleIndicatieId)) {
            $useMinMax = false;
            if (isset($tekstmoduleIndicatieId['min'])) {
                $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_INDICATIE_ID, $tekstmoduleIndicatieId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstmoduleIndicatieId['max'])) {
                $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_INDICATIE_ID, $tekstmoduleIndicatieId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_INDICATIE_ID, $tekstmoduleIndicatieId, $comparison);
    }

    /**
     * Filter the query on the thesaurus_nummer_soort_indicatie column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusNummerSoortIndicatie(1234); // WHERE thesaurus_nummer_soort_indicatie = 1234
     * $query->filterByThesaurusNummerSoortIndicatie(array(12, 34)); // WHERE thesaurus_nummer_soort_indicatie IN (12, 34)
     * $query->filterByThesaurusNummerSoortIndicatie(array('min' => 12)); // WHERE thesaurus_nummer_soort_indicatie >= 12
     * $query->filterByThesaurusNummerSoortIndicatie(array('max' => 12)); // WHERE thesaurus_nummer_soort_indicatie <= 12
     * </code>
     *
     * @param     mixed $thesaurusNummerSoortIndicatie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIndicatiesBijSupplementaireProductenQuery The current query, for fluid interface
     */
    public function filterByThesaurusNummerSoortIndicatie($thesaurusNummerSoortIndicatie = null, $comparison = null)
    {
        if (is_array($thesaurusNummerSoortIndicatie)) {
            $useMinMax = false;
            if (isset($thesaurusNummerSoortIndicatie['min'])) {
                $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::THESAURUS_NUMMER_SOORT_INDICATIE, $thesaurusNummerSoortIndicatie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusNummerSoortIndicatie['max'])) {
                $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::THESAURUS_NUMMER_SOORT_INDICATIE, $thesaurusNummerSoortIndicatie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::THESAURUS_NUMMER_SOORT_INDICATIE, $thesaurusNummerSoortIndicatie, $comparison);
    }

    /**
     * Filter the query on the soort_indicatie column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortIndicatie(1234); // WHERE soort_indicatie = 1234
     * $query->filterBySoortIndicatie(array(12, 34)); // WHERE soort_indicatie IN (12, 34)
     * $query->filterBySoortIndicatie(array('min' => 12)); // WHERE soort_indicatie >= 12
     * $query->filterBySoortIndicatie(array('max' => 12)); // WHERE soort_indicatie <= 12
     * </code>
     *
     * @param     mixed $soortIndicatie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIndicatiesBijSupplementaireProductenQuery The current query, for fluid interface
     */
    public function filterBySoortIndicatie($soortIndicatie = null, $comparison = null)
    {
        if (is_array($soortIndicatie)) {
            $useMinMax = false;
            if (isset($soortIndicatie['min'])) {
                $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::SOORT_INDICATIE, $soortIndicatie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortIndicatie['max'])) {
                $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::SOORT_INDICATIE, $soortIndicatie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::SOORT_INDICATIE, $soortIndicatie, $comparison);
    }

    /**
     * Filter the query on the duiding_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDuidingId(1234); // WHERE duiding_id = 1234
     * $query->filterByDuidingId(array(12, 34)); // WHERE duiding_id IN (12, 34)
     * $query->filterByDuidingId(array('min' => 12)); // WHERE duiding_id >= 12
     * $query->filterByDuidingId(array('max' => 12)); // WHERE duiding_id <= 12
     * </code>
     *
     * @param     mixed $duidingId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIndicatiesBijSupplementaireProductenQuery The current query, for fluid interface
     */
    public function filterByDuidingId($duidingId = null, $comparison = null)
    {
        if (is_array($duidingId)) {
            $useMinMax = false;
            if (isset($duidingId['min'])) {
                $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::DUIDING_ID, $duidingId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($duidingId['max'])) {
                $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::DUIDING_ID, $duidingId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::DUIDING_ID, $duidingId, $comparison);
    }

    /**
     * Filter the query on the tekstmodule_duiding_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstmoduleDuidingId(1234); // WHERE tekstmodule_duiding_id = 1234
     * $query->filterByTekstmoduleDuidingId(array(12, 34)); // WHERE tekstmodule_duiding_id IN (12, 34)
     * $query->filterByTekstmoduleDuidingId(array('min' => 12)); // WHERE tekstmodule_duiding_id >= 12
     * $query->filterByTekstmoduleDuidingId(array('max' => 12)); // WHERE tekstmodule_duiding_id <= 12
     * </code>
     *
     * @param     mixed $tekstmoduleDuidingId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIndicatiesBijSupplementaireProductenQuery The current query, for fluid interface
     */
    public function filterByTekstmoduleDuidingId($tekstmoduleDuidingId = null, $comparison = null)
    {
        if (is_array($tekstmoduleDuidingId)) {
            $useMinMax = false;
            if (isset($tekstmoduleDuidingId['min'])) {
                $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_DUIDING_ID, $tekstmoduleDuidingId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstmoduleDuidingId['max'])) {
                $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_DUIDING_ID, $tekstmoduleDuidingId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::TEKSTMODULE_DUIDING_ID, $tekstmoduleDuidingId, $comparison);
    }

    /**
     * Filter the query on the aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn column
     *
     * Example usage:
     * <code>
     * $query->filterByAanspraakOpGeneesmiddelBijIndicatieVolgensZn('fooValue');   // WHERE aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn = 'fooValue'
     * $query->filterByAanspraakOpGeneesmiddelBijIndicatieVolgensZn('%fooValue%'); // WHERE aanspraak_op_geneesmiddel_bij_indicatie_volgens_zn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aanspraakOpGeneesmiddelBijIndicatieVolgensZn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIndicatiesBijSupplementaireProductenQuery The current query, for fluid interface
     */
    public function filterByAanspraakOpGeneesmiddelBijIndicatieVolgensZn($aanspraakOpGeneesmiddelBijIndicatieVolgensZn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aanspraakOpGeneesmiddelBijIndicatieVolgensZn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aanspraakOpGeneesmiddelBijIndicatieVolgensZn)) {
                $aanspraakOpGeneesmiddelBijIndicatieVolgensZn = str_replace('*', '%', $aanspraakOpGeneesmiddelBijIndicatieVolgensZn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::AANSPRAAK_OP_GENEESMIDDEL_BIJ_INDICATIE_VOLGENS_ZN, $aanspraakOpGeneesmiddelBijIndicatieVolgensZn, $comparison);
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsIndicatiesBijSupplementaireProductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelen($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER, $gsArtikelen->getZinummer(), $comparison);
        } elseif ($gsArtikelen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER, $gsArtikelen->toKeyValue('PrimaryKey', 'Zinummer'), $comparison);
        } else {
            throw new PropelException('filterByGsArtikelen() only accepts arguments of type GsArtikelen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsArtikelen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsIndicatiesBijSupplementaireProductenQuery The current query, for fluid interface
     */
    public function joinGsArtikelen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsArtikelen');

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
            $this->addJoinObject($join, 'GsArtikelen');
        }

        return $this;
    }

    /**
     * Use the GsArtikelen relation GsArtikelen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery A secondary query class using the current class as primary query
     */
    public function useGsArtikelenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsArtikelen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelen', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsIndicatiesBijSupplementaireProducten $gsIndicatiesBijSupplementaireProducten Object to remove from the list of results
     *
     * @return GsIndicatiesBijSupplementaireProductenQuery The current query, for fluid interface
     */
    public function prune($gsIndicatiesBijSupplementaireProducten = null)
    {
        if ($gsIndicatiesBijSupplementaireProducten) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsIndicatiesBijSupplementaireProductenPeer::ZINDEX_NUMMER), $gsIndicatiesBijSupplementaireProducten->getZindexNummer(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsIndicatiesBijSupplementaireProductenPeer::INDICATIE_ID), $gsIndicatiesBijSupplementaireProducten->getIndicatieId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
