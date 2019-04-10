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
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeNamen;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingen;
use PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;

/**
 * @method GsIngegevenSamenstellingenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsIngegevenSamenstellingenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsIngegevenSamenstellingenQuery orderByHandelsproduktkode($order = Criteria::ASC) Order by the handelsproduktkode column
 * @method GsIngegevenSamenstellingenQuery orderByVolgnummer($order = Criteria::ASC) Order by the volgnummer column
 * @method GsIngegevenSamenstellingenQuery orderByAanduidingWerkzaamhulpstof($order = Criteria::ASC) Order by the aanduiding_werkzaamhulpstof column
 * @method GsIngegevenSamenstellingenQuery orderByGeneriekenaamkode($order = Criteria::ASC) Order by the generiekenaamkode column
 * @method GsIngegevenSamenstellingenQuery orderByHoeveelheidWerkzameStof($order = Criteria::ASC) Order by the hoeveelheid_werkzame_stof column
 * @method GsIngegevenSamenstellingenQuery orderByEenhHvhWerkzstofThesaurus1($order = Criteria::ASC) Order by the eenh_hvh_werkzstof_thesaurus_1 column
 * @method GsIngegevenSamenstellingenQuery orderByEenhhoeveelheidWerkzameStofKode($order = Criteria::ASC) Order by the eenhhoeveelheid_werkzame_stof_kode column
 * @method GsIngegevenSamenstellingenQuery orderByStamnaamcode($order = Criteria::ASC) Order by the stamnaamcode column
 * @method GsIngegevenSamenstellingenQuery orderByStamtoedieningswegThesaurus58($order = Criteria::ASC) Order by the stamtoedieningsweg_thesaurus_58 column
 * @method GsIngegevenSamenstellingenQuery orderByStamtoedieningswegCode($order = Criteria::ASC) Order by the stamtoedieningsweg_code column
 *
 * @method GsIngegevenSamenstellingenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsIngegevenSamenstellingenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsIngegevenSamenstellingenQuery groupByHandelsproduktkode() Group by the handelsproduktkode column
 * @method GsIngegevenSamenstellingenQuery groupByVolgnummer() Group by the volgnummer column
 * @method GsIngegevenSamenstellingenQuery groupByAanduidingWerkzaamhulpstof() Group by the aanduiding_werkzaamhulpstof column
 * @method GsIngegevenSamenstellingenQuery groupByGeneriekenaamkode() Group by the generiekenaamkode column
 * @method GsIngegevenSamenstellingenQuery groupByHoeveelheidWerkzameStof() Group by the hoeveelheid_werkzame_stof column
 * @method GsIngegevenSamenstellingenQuery groupByEenhHvhWerkzstofThesaurus1() Group by the eenh_hvh_werkzstof_thesaurus_1 column
 * @method GsIngegevenSamenstellingenQuery groupByEenhhoeveelheidWerkzameStofKode() Group by the eenhhoeveelheid_werkzame_stof_kode column
 * @method GsIngegevenSamenstellingenQuery groupByStamnaamcode() Group by the stamnaamcode column
 * @method GsIngegevenSamenstellingenQuery groupByStamtoedieningswegThesaurus58() Group by the stamtoedieningsweg_thesaurus_58 column
 * @method GsIngegevenSamenstellingenQuery groupByStamtoedieningswegCode() Group by the stamtoedieningsweg_code column
 *
 * @method GsIngegevenSamenstellingenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsIngegevenSamenstellingenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsIngegevenSamenstellingenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsIngegevenSamenstellingenQuery leftJoinGsHandelsproducten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproducten relation
 * @method GsIngegevenSamenstellingenQuery rightJoinGsHandelsproducten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproducten relation
 * @method GsIngegevenSamenstellingenQuery innerJoinGsHandelsproducten($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproducten relation
 *
 * @method GsIngegevenSamenstellingenQuery leftJoinGsGeneriekeNamen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsGeneriekeNamen relation
 * @method GsIngegevenSamenstellingenQuery rightJoinGsGeneriekeNamen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsGeneriekeNamen relation
 * @method GsIngegevenSamenstellingenQuery innerJoinGsGeneriekeNamen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsGeneriekeNamen relation
 *
 * @method GsIngegevenSamenstellingenQuery leftJoinEenheidHoeveelheidOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the EenheidHoeveelheidOmschrijving relation
 * @method GsIngegevenSamenstellingenQuery rightJoinEenheidHoeveelheidOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EenheidHoeveelheidOmschrijving relation
 * @method GsIngegevenSamenstellingenQuery innerJoinEenheidHoeveelheidOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the EenheidHoeveelheidOmschrijving relation
 *
 * @method GsIngegevenSamenstellingenQuery leftJoinStamtoedieningswegOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the StamtoedieningswegOmschrijving relation
 * @method GsIngegevenSamenstellingenQuery rightJoinStamtoedieningswegOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the StamtoedieningswegOmschrijving relation
 * @method GsIngegevenSamenstellingenQuery innerJoinStamtoedieningswegOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the StamtoedieningswegOmschrijving relation
 *
 * @method GsIngegevenSamenstellingen findOne(PropelPDO $con = null) Return the first GsIngegevenSamenstellingen matching the query
 * @method GsIngegevenSamenstellingen findOneOrCreate(PropelPDO $con = null) Return the first GsIngegevenSamenstellingen matching the query, or a new GsIngegevenSamenstellingen object populated from the query conditions when no match is found
 *
 * @method GsIngegevenSamenstellingen findOneByBestandnummer(int $bestandnummer) Return the first GsIngegevenSamenstellingen filtered by the bestandnummer column
 * @method GsIngegevenSamenstellingen findOneByMutatiekode(int $mutatiekode) Return the first GsIngegevenSamenstellingen filtered by the mutatiekode column
 * @method GsIngegevenSamenstellingen findOneByHandelsproduktkode(int $handelsproduktkode) Return the first GsIngegevenSamenstellingen filtered by the handelsproduktkode column
 * @method GsIngegevenSamenstellingen findOneByVolgnummer(int $volgnummer) Return the first GsIngegevenSamenstellingen filtered by the volgnummer column
 * @method GsIngegevenSamenstellingen findOneByAanduidingWerkzaamhulpstof(string $aanduiding_werkzaamhulpstof) Return the first GsIngegevenSamenstellingen filtered by the aanduiding_werkzaamhulpstof column
 * @method GsIngegevenSamenstellingen findOneByGeneriekenaamkode(int $generiekenaamkode) Return the first GsIngegevenSamenstellingen filtered by the generiekenaamkode column
 * @method GsIngegevenSamenstellingen findOneByHoeveelheidWerkzameStof(string $hoeveelheid_werkzame_stof) Return the first GsIngegevenSamenstellingen filtered by the hoeveelheid_werkzame_stof column
 * @method GsIngegevenSamenstellingen findOneByEenhHvhWerkzstofThesaurus1(int $eenh_hvh_werkzstof_thesaurus_1) Return the first GsIngegevenSamenstellingen filtered by the eenh_hvh_werkzstof_thesaurus_1 column
 * @method GsIngegevenSamenstellingen findOneByEenhhoeveelheidWerkzameStofKode(int $eenhhoeveelheid_werkzame_stof_kode) Return the first GsIngegevenSamenstellingen filtered by the eenhhoeveelheid_werkzame_stof_kode column
 * @method GsIngegevenSamenstellingen findOneByStamnaamcode(int $stamnaamcode) Return the first GsIngegevenSamenstellingen filtered by the stamnaamcode column
 * @method GsIngegevenSamenstellingen findOneByStamtoedieningswegThesaurus58(int $stamtoedieningsweg_thesaurus_58) Return the first GsIngegevenSamenstellingen filtered by the stamtoedieningsweg_thesaurus_58 column
 * @method GsIngegevenSamenstellingen findOneByStamtoedieningswegCode(int $stamtoedieningsweg_code) Return the first GsIngegevenSamenstellingen filtered by the stamtoedieningsweg_code column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsIngegevenSamenstellingen objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsIngegevenSamenstellingen objects filtered by the mutatiekode column
 * @method array findByHandelsproduktkode(int $handelsproduktkode) Return GsIngegevenSamenstellingen objects filtered by the handelsproduktkode column
 * @method array findByVolgnummer(int $volgnummer) Return GsIngegevenSamenstellingen objects filtered by the volgnummer column
 * @method array findByAanduidingWerkzaamhulpstof(string $aanduiding_werkzaamhulpstof) Return GsIngegevenSamenstellingen objects filtered by the aanduiding_werkzaamhulpstof column
 * @method array findByGeneriekenaamkode(int $generiekenaamkode) Return GsIngegevenSamenstellingen objects filtered by the generiekenaamkode column
 * @method array findByHoeveelheidWerkzameStof(string $hoeveelheid_werkzame_stof) Return GsIngegevenSamenstellingen objects filtered by the hoeveelheid_werkzame_stof column
 * @method array findByEenhHvhWerkzstofThesaurus1(int $eenh_hvh_werkzstof_thesaurus_1) Return GsIngegevenSamenstellingen objects filtered by the eenh_hvh_werkzstof_thesaurus_1 column
 * @method array findByEenhhoeveelheidWerkzameStofKode(int $eenhhoeveelheid_werkzame_stof_kode) Return GsIngegevenSamenstellingen objects filtered by the eenhhoeveelheid_werkzame_stof_kode column
 * @method array findByStamnaamcode(int $stamnaamcode) Return GsIngegevenSamenstellingen objects filtered by the stamnaamcode column
 * @method array findByStamtoedieningswegThesaurus58(int $stamtoedieningsweg_thesaurus_58) Return GsIngegevenSamenstellingen objects filtered by the stamtoedieningsweg_thesaurus_58 column
 * @method array findByStamtoedieningswegCode(int $stamtoedieningsweg_code) Return GsIngegevenSamenstellingen objects filtered by the stamtoedieningsweg_code column
 */
abstract class BaseGsIngegevenSamenstellingenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsIngegevenSamenstellingenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsIngegevenSamenstellingen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsIngegevenSamenstellingenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsIngegevenSamenstellingenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsIngegevenSamenstellingenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsIngegevenSamenstellingenQuery) {
            return $criteria;
        }
        $query = new GsIngegevenSamenstellingenQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$handelsproduktkode, $volgnummer]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsIngegevenSamenstellingen|GsIngegevenSamenstellingen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsIngegevenSamenstellingenPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsIngegevenSamenstellingenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsIngegevenSamenstellingen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `handelsproduktkode`, `volgnummer`, `aanduiding_werkzaamhulpstof`, `generiekenaamkode`, `hoeveelheid_werkzame_stof`, `eenh_hvh_werkzstof_thesaurus_1`, `eenhhoeveelheid_werkzame_stof_kode`, `stamnaamcode`, `stamtoedieningsweg_thesaurus_58`, `stamtoedieningsweg_code` FROM `gs_ingegeven_samenstellingen` WHERE `handelsproduktkode` = :p0 AND `volgnummer` = :p1';
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
            $obj = new GsIngegevenSamenstellingen();
            $obj->hydrate($row);
            GsIngegevenSamenstellingenPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsIngegevenSamenstellingen|GsIngegevenSamenstellingen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsIngegevenSamenstellingen[]|mixed the list of results, formatted by the current formatter
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
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsIngegevenSamenstellingenPeer::VOLGNUMMER, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsIngegevenSamenstellingenPeer::VOLGNUMMER, $key[1], Criteria::EQUAL);
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
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIngegevenSamenstellingenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIngegevenSamenstellingenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the handelsproduktkode column
     *
     * Example usage:
     * <code>
     * $query->filterByHandelsproduktkode(1234); // WHERE handelsproduktkode = 1234
     * $query->filterByHandelsproduktkode(array(12, 34)); // WHERE handelsproduktkode IN (12, 34)
     * $query->filterByHandelsproduktkode(array('min' => 12)); // WHERE handelsproduktkode >= 12
     * $query->filterByHandelsproduktkode(array('max' => 12)); // WHERE handelsproduktkode <= 12
     * </code>
     *
     * @see       filterByGsHandelsproducten()
     *
     * @param     mixed $handelsproduktkode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByHandelsproduktkode($handelsproduktkode = null, $comparison = null)
    {
        if (is_array($handelsproduktkode)) {
            $useMinMax = false;
            if (isset($handelsproduktkode['min'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, $handelsproduktkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($handelsproduktkode['max'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, $handelsproduktkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, $handelsproduktkode, $comparison);
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
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByVolgnummer($volgnummer = null, $comparison = null)
    {
        if (is_array($volgnummer)) {
            $useMinMax = false;
            if (isset($volgnummer['min'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::VOLGNUMMER, $volgnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($volgnummer['max'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::VOLGNUMMER, $volgnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIngegevenSamenstellingenPeer::VOLGNUMMER, $volgnummer, $comparison);
    }

    /**
     * Filter the query on the aanduiding_werkzaamhulpstof column
     *
     * Example usage:
     * <code>
     * $query->filterByAanduidingWerkzaamhulpstof('fooValue');   // WHERE aanduiding_werkzaamhulpstof = 'fooValue'
     * $query->filterByAanduidingWerkzaamhulpstof('%fooValue%'); // WHERE aanduiding_werkzaamhulpstof LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aanduidingWerkzaamhulpstof The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByAanduidingWerkzaamhulpstof($aanduidingWerkzaamhulpstof = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aanduidingWerkzaamhulpstof)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aanduidingWerkzaamhulpstof)) {
                $aanduidingWerkzaamhulpstof = str_replace('*', '%', $aanduidingWerkzaamhulpstof);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsIngegevenSamenstellingenPeer::AANDUIDING_WERKZAAMHULPSTOF, $aanduidingWerkzaamhulpstof, $comparison);
    }

    /**
     * Filter the query on the generiekenaamkode column
     *
     * Example usage:
     * <code>
     * $query->filterByGeneriekenaamkode(1234); // WHERE generiekenaamkode = 1234
     * $query->filterByGeneriekenaamkode(array(12, 34)); // WHERE generiekenaamkode IN (12, 34)
     * $query->filterByGeneriekenaamkode(array('min' => 12)); // WHERE generiekenaamkode >= 12
     * $query->filterByGeneriekenaamkode(array('max' => 12)); // WHERE generiekenaamkode <= 12
     * </code>
     *
     * @see       filterByGsGeneriekeNamen()
     *
     * @param     mixed $generiekenaamkode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByGeneriekenaamkode($generiekenaamkode = null, $comparison = null)
    {
        if (is_array($generiekenaamkode)) {
            $useMinMax = false;
            if (isset($generiekenaamkode['min'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE, $generiekenaamkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($generiekenaamkode['max'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE, $generiekenaamkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE, $generiekenaamkode, $comparison);
    }

    /**
     * Filter the query on the hoeveelheid_werkzame_stof column
     *
     * Example usage:
     * <code>
     * $query->filterByHoeveelheidWerkzameStof(1234); // WHERE hoeveelheid_werkzame_stof = 1234
     * $query->filterByHoeveelheidWerkzameStof(array(12, 34)); // WHERE hoeveelheid_werkzame_stof IN (12, 34)
     * $query->filterByHoeveelheidWerkzameStof(array('min' => 12)); // WHERE hoeveelheid_werkzame_stof >= 12
     * $query->filterByHoeveelheidWerkzameStof(array('max' => 12)); // WHERE hoeveelheid_werkzame_stof <= 12
     * </code>
     *
     * @param     mixed $hoeveelheidWerkzameStof The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByHoeveelheidWerkzameStof($hoeveelheidWerkzameStof = null, $comparison = null)
    {
        if (is_array($hoeveelheidWerkzameStof)) {
            $useMinMax = false;
            if (isset($hoeveelheidWerkzameStof['min'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::HOEVEELHEID_WERKZAME_STOF, $hoeveelheidWerkzameStof['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hoeveelheidWerkzameStof['max'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::HOEVEELHEID_WERKZAME_STOF, $hoeveelheidWerkzameStof['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIngegevenSamenstellingenPeer::HOEVEELHEID_WERKZAME_STOF, $hoeveelheidWerkzameStof, $comparison);
    }

    /**
     * Filter the query on the eenh_hvh_werkzstof_thesaurus_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByEenhHvhWerkzstofThesaurus1(1234); // WHERE eenh_hvh_werkzstof_thesaurus_1 = 1234
     * $query->filterByEenhHvhWerkzstofThesaurus1(array(12, 34)); // WHERE eenh_hvh_werkzstof_thesaurus_1 IN (12, 34)
     * $query->filterByEenhHvhWerkzstofThesaurus1(array('min' => 12)); // WHERE eenh_hvh_werkzstof_thesaurus_1 >= 12
     * $query->filterByEenhHvhWerkzstofThesaurus1(array('max' => 12)); // WHERE eenh_hvh_werkzstof_thesaurus_1 <= 12
     * </code>
     *
     * @see       filterByEenheidHoeveelheidOmschrijving()
     *
     * @param     mixed $eenhHvhWerkzstofThesaurus1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByEenhHvhWerkzstofThesaurus1($eenhHvhWerkzstofThesaurus1 = null, $comparison = null)
    {
        if (is_array($eenhHvhWerkzstofThesaurus1)) {
            $useMinMax = false;
            if (isset($eenhHvhWerkzstofThesaurus1['min'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1, $eenhHvhWerkzstofThesaurus1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eenhHvhWerkzstofThesaurus1['max'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1, $eenhHvhWerkzstofThesaurus1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1, $eenhHvhWerkzstofThesaurus1, $comparison);
    }

    /**
     * Filter the query on the eenhhoeveelheid_werkzame_stof_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByEenhhoeveelheidWerkzameStofKode(1234); // WHERE eenhhoeveelheid_werkzame_stof_kode = 1234
     * $query->filterByEenhhoeveelheidWerkzameStofKode(array(12, 34)); // WHERE eenhhoeveelheid_werkzame_stof_kode IN (12, 34)
     * $query->filterByEenhhoeveelheidWerkzameStofKode(array('min' => 12)); // WHERE eenhhoeveelheid_werkzame_stof_kode >= 12
     * $query->filterByEenhhoeveelheidWerkzameStofKode(array('max' => 12)); // WHERE eenhhoeveelheid_werkzame_stof_kode <= 12
     * </code>
     *
     * @see       filterByEenheidHoeveelheidOmschrijving()
     *
     * @param     mixed $eenhhoeveelheidWerkzameStofKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByEenhhoeveelheidWerkzameStofKode($eenhhoeveelheidWerkzameStofKode = null, $comparison = null)
    {
        if (is_array($eenhhoeveelheidWerkzameStofKode)) {
            $useMinMax = false;
            if (isset($eenhhoeveelheidWerkzameStofKode['min'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE, $eenhhoeveelheidWerkzameStofKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eenhhoeveelheidWerkzameStofKode['max'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE, $eenhhoeveelheidWerkzameStofKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE, $eenhhoeveelheidWerkzameStofKode, $comparison);
    }

    /**
     * Filter the query on the stamnaamcode column
     *
     * Example usage:
     * <code>
     * $query->filterByStamnaamcode(1234); // WHERE stamnaamcode = 1234
     * $query->filterByStamnaamcode(array(12, 34)); // WHERE stamnaamcode IN (12, 34)
     * $query->filterByStamnaamcode(array('min' => 12)); // WHERE stamnaamcode >= 12
     * $query->filterByStamnaamcode(array('max' => 12)); // WHERE stamnaamcode <= 12
     * </code>
     *
     * @param     mixed $stamnaamcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByStamnaamcode($stamnaamcode = null, $comparison = null)
    {
        if (is_array($stamnaamcode)) {
            $useMinMax = false;
            if (isset($stamnaamcode['min'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::STAMNAAMCODE, $stamnaamcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stamnaamcode['max'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::STAMNAAMCODE, $stamnaamcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIngegevenSamenstellingenPeer::STAMNAAMCODE, $stamnaamcode, $comparison);
    }

    /**
     * Filter the query on the stamtoedieningsweg_thesaurus_58 column
     *
     * Example usage:
     * <code>
     * $query->filterByStamtoedieningswegThesaurus58(1234); // WHERE stamtoedieningsweg_thesaurus_58 = 1234
     * $query->filterByStamtoedieningswegThesaurus58(array(12, 34)); // WHERE stamtoedieningsweg_thesaurus_58 IN (12, 34)
     * $query->filterByStamtoedieningswegThesaurus58(array('min' => 12)); // WHERE stamtoedieningsweg_thesaurus_58 >= 12
     * $query->filterByStamtoedieningswegThesaurus58(array('max' => 12)); // WHERE stamtoedieningsweg_thesaurus_58 <= 12
     * </code>
     *
     * @see       filterByStamtoedieningswegOmschrijving()
     *
     * @param     mixed $stamtoedieningswegThesaurus58 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByStamtoedieningswegThesaurus58($stamtoedieningswegThesaurus58 = null, $comparison = null)
    {
        if (is_array($stamtoedieningswegThesaurus58)) {
            $useMinMax = false;
            if (isset($stamtoedieningswegThesaurus58['min'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, $stamtoedieningswegThesaurus58['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stamtoedieningswegThesaurus58['max'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, $stamtoedieningswegThesaurus58['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, $stamtoedieningswegThesaurus58, $comparison);
    }

    /**
     * Filter the query on the stamtoedieningsweg_code column
     *
     * Example usage:
     * <code>
     * $query->filterByStamtoedieningswegCode(1234); // WHERE stamtoedieningsweg_code = 1234
     * $query->filterByStamtoedieningswegCode(array(12, 34)); // WHERE stamtoedieningsweg_code IN (12, 34)
     * $query->filterByStamtoedieningswegCode(array('min' => 12)); // WHERE stamtoedieningsweg_code >= 12
     * $query->filterByStamtoedieningswegCode(array('max' => 12)); // WHERE stamtoedieningsweg_code <= 12
     * </code>
     *
     * @see       filterByStamtoedieningswegOmschrijving()
     *
     * @param     mixed $stamtoedieningswegCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function filterByStamtoedieningswegCode($stamtoedieningswegCode = null, $comparison = null)
    {
        if (is_array($stamtoedieningswegCode)) {
            $useMinMax = false;
            if (isset($stamtoedieningswegCode['min'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE, $stamtoedieningswegCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stamtoedieningswegCode['max'])) {
                $this->addUsingAlias(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE, $stamtoedieningswegCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE, $stamtoedieningswegCode, $comparison);
    }

    /**
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsIngegevenSamenstellingenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproducten($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, $gsHandelsproducten->getHandelsproduktkode(), $comparison);
        } elseif ($gsHandelsproducten instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE, $gsHandelsproducten->toKeyValue('PrimaryKey', 'Handelsproduktkode'), $comparison);
        } else {
            throw new PropelException('filterByGsHandelsproducten() only accepts arguments of type GsHandelsproducten or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsHandelsproducten relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function joinGsHandelsproducten($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsHandelsproducten');

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
            $this->addJoinObject($join, 'GsHandelsproducten');
        }

        return $this;
    }

    /**
     * Use the GsHandelsproducten relation GsHandelsproducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery A secondary query class using the current class as primary query
     */
    public function useGsHandelsproductenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsHandelsproducten($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsHandelsproducten', '\PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery');
    }

    /**
     * Filter the query by a related GsGeneriekeNamen object
     *
     * @param   GsGeneriekeNamen|PropelObjectCollection $gsGeneriekeNamen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsIngegevenSamenstellingenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsGeneriekeNamen($gsGeneriekeNamen, $comparison = null)
    {
        if ($gsGeneriekeNamen instanceof GsGeneriekeNamen) {
            return $this
                ->addUsingAlias(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE, $gsGeneriekeNamen->getGeneriekenaamkode(), $comparison);
        } elseif ($gsGeneriekeNamen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsIngegevenSamenstellingenPeer::GENERIEKENAAMKODE, $gsGeneriekeNamen->toKeyValue('PrimaryKey', 'Generiekenaamkode'), $comparison);
        } else {
            throw new PropelException('filterByGsGeneriekeNamen() only accepts arguments of type GsGeneriekeNamen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsGeneriekeNamen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function joinGsGeneriekeNamen($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsGeneriekeNamen');

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
            $this->addJoinObject($join, 'GsGeneriekeNamen');
        }

        return $this;
    }

    /**
     * Use the GsGeneriekeNamen relation GsGeneriekeNamen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeNamenQuery A secondary query class using the current class as primary query
     */
    public function useGsGeneriekeNamenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsGeneriekeNamen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsGeneriekeNamen', '\PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeNamenQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsIngegevenSamenstellingenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEenheidHoeveelheidOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsIngegevenSamenstellingenPeer::EENH_HVH_WERKZSTOF_THESAURUS_1, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsIngegevenSamenstellingenPeer::EENHHOEVEELHEID_WERKZAME_STOF_KODE, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByEenheidHoeveelheidOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EenheidHoeveelheidOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function joinEenheidHoeveelheidOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EenheidHoeveelheidOmschrijving');

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
            $this->addJoinObject($join, 'EenheidHoeveelheidOmschrijving');
        }

        return $this;
    }

    /**
     * Use the EenheidHoeveelheidOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useEenheidHoeveelheidOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinEenheidHoeveelheidOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EenheidHoeveelheidOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsIngegevenSamenstellingenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByStamtoedieningswegOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsIngegevenSamenstellingenPeer::STAMTOEDIENINGSWEG_CODE, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByStamtoedieningswegOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the StamtoedieningswegOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function joinStamtoedieningswegOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('StamtoedieningswegOmschrijving');

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
            $this->addJoinObject($join, 'StamtoedieningswegOmschrijving');
        }

        return $this;
    }

    /**
     * Use the StamtoedieningswegOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useStamtoedieningswegOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinStamtoedieningswegOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'StamtoedieningswegOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsIngegevenSamenstellingen $gsIngegevenSamenstellingen Object to remove from the list of results
     *
     * @return GsIngegevenSamenstellingenQuery The current query, for fluid interface
     */
    public function prune($gsIngegevenSamenstellingen = null)
    {
        if ($gsIngegevenSamenstellingen) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsIngegevenSamenstellingenPeer::HANDELSPRODUKTKODE), $gsIngegevenSamenstellingen->getHandelsproduktkode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsIngegevenSamenstellingenPeer::VOLGNUMMER), $gsIngegevenSamenstellingen->getVolgnummer(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
