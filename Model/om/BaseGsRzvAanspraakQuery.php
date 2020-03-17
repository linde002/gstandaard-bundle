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
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsRzvAanspraak;
use PharmaIntelligence\GstandaardBundle\Model\GsRzvAanspraakPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsRzvAanspraakQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;

/**
 * @method GsRzvAanspraakQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsRzvAanspraakQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsRzvAanspraakQuery orderByZinummer($order = Criteria::ASC) Order by the zinummer column
 * @method GsRzvAanspraakQuery orderByThesaurusRzvVerstrekking($order = Criteria::ASC) Order by the thesaurus_rzv_verstrekking column
 * @method GsRzvAanspraakQuery orderByRzvverstrekking($order = Criteria::ASC) Order by the rzvverstrekking column
 * @method GsRzvAanspraakQuery orderByThesaurusRzvHulpmiddelen($order = Criteria::ASC) Order by the thesaurus_rzv_hulpmiddelen column
 * @method GsRzvAanspraakQuery orderByHulpmiddelenZorg($order = Criteria::ASC) Order by the hulpmiddelen_zorg column
 * @method GsRzvAanspraakQuery orderByRzvThesaurus120($order = Criteria::ASC) Order by the rzv_thesaurus_120 column
 * @method GsRzvAanspraakQuery orderByRzvvoorwaardenBijlage2($order = Criteria::ASC) Order by the rzvvoorwaarden_bijlage_2 column
 * @method GsRzvAanspraakQuery orderByTekstmodule($order = Criteria::ASC) Order by the tekstmodule column
 * @method GsRzvAanspraakQuery orderByTekstVerwijzing($order = Criteria::ASC) Order by the tekst_verwijzing column
 *
 * @method GsRzvAanspraakQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsRzvAanspraakQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsRzvAanspraakQuery groupByZinummer() Group by the zinummer column
 * @method GsRzvAanspraakQuery groupByThesaurusRzvVerstrekking() Group by the thesaurus_rzv_verstrekking column
 * @method GsRzvAanspraakQuery groupByRzvverstrekking() Group by the rzvverstrekking column
 * @method GsRzvAanspraakQuery groupByThesaurusRzvHulpmiddelen() Group by the thesaurus_rzv_hulpmiddelen column
 * @method GsRzvAanspraakQuery groupByHulpmiddelenZorg() Group by the hulpmiddelen_zorg column
 * @method GsRzvAanspraakQuery groupByRzvThesaurus120() Group by the rzv_thesaurus_120 column
 * @method GsRzvAanspraakQuery groupByRzvvoorwaardenBijlage2() Group by the rzvvoorwaarden_bijlage_2 column
 * @method GsRzvAanspraakQuery groupByTekstmodule() Group by the tekstmodule column
 * @method GsRzvAanspraakQuery groupByTekstVerwijzing() Group by the tekst_verwijzing column
 *
 * @method GsRzvAanspraakQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsRzvAanspraakQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsRzvAanspraakQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsRzvAanspraakQuery leftJoinGsArtikelen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelen relation
 * @method GsRzvAanspraakQuery rightJoinGsArtikelen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelen relation
 * @method GsRzvAanspraakQuery innerJoinGsArtikelen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelen relation
 *
 * @method GsRzvAanspraakQuery leftJoinGsArtikelEigenschappen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelEigenschappen relation
 * @method GsRzvAanspraakQuery rightJoinGsArtikelEigenschappen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelEigenschappen relation
 * @method GsRzvAanspraakQuery innerJoinGsArtikelEigenschappen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelEigenschappen relation
 *
 * @method GsRzvAanspraakQuery leftJoinRzvVerstrekkingOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the RzvVerstrekkingOmschrijving relation
 * @method GsRzvAanspraakQuery rightJoinRzvVerstrekkingOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RzvVerstrekkingOmschrijving relation
 * @method GsRzvAanspraakQuery innerJoinRzvVerstrekkingOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the RzvVerstrekkingOmschrijving relation
 *
 * @method GsRzvAanspraakQuery leftJoinRzvHulpmiddelenOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the RzvHulpmiddelenOmschrijving relation
 * @method GsRzvAanspraakQuery rightJoinRzvHulpmiddelenOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RzvHulpmiddelenOmschrijving relation
 * @method GsRzvAanspraakQuery innerJoinRzvHulpmiddelenOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the RzvHulpmiddelenOmschrijving relation
 *
 * @method GsRzvAanspraakQuery leftJoinRzvVoorwaardenOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the RzvVoorwaardenOmschrijving relation
 * @method GsRzvAanspraakQuery rightJoinRzvVoorwaardenOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RzvVoorwaardenOmschrijving relation
 * @method GsRzvAanspraakQuery innerJoinRzvVoorwaardenOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the RzvVoorwaardenOmschrijving relation
 *
 * @method GsRzvAanspraak findOne(PropelPDO $con = null) Return the first GsRzvAanspraak matching the query
 * @method GsRzvAanspraak findOneOrCreate(PropelPDO $con = null) Return the first GsRzvAanspraak matching the query, or a new GsRzvAanspraak object populated from the query conditions when no match is found
 *
 * @method GsRzvAanspraak findOneByBestandnummer(int $bestandnummer) Return the first GsRzvAanspraak filtered by the bestandnummer column
 * @method GsRzvAanspraak findOneByMutatiekode(int $mutatiekode) Return the first GsRzvAanspraak filtered by the mutatiekode column
 * @method GsRzvAanspraak findOneByThesaurusRzvVerstrekking(int $thesaurus_rzv_verstrekking) Return the first GsRzvAanspraak filtered by the thesaurus_rzv_verstrekking column
 * @method GsRzvAanspraak findOneByRzvverstrekking(int $rzvverstrekking) Return the first GsRzvAanspraak filtered by the rzvverstrekking column
 * @method GsRzvAanspraak findOneByThesaurusRzvHulpmiddelen(int $thesaurus_rzv_hulpmiddelen) Return the first GsRzvAanspraak filtered by the thesaurus_rzv_hulpmiddelen column
 * @method GsRzvAanspraak findOneByHulpmiddelenZorg(int $hulpmiddelen_zorg) Return the first GsRzvAanspraak filtered by the hulpmiddelen_zorg column
 * @method GsRzvAanspraak findOneByRzvThesaurus120(int $rzv_thesaurus_120) Return the first GsRzvAanspraak filtered by the rzv_thesaurus_120 column
 * @method GsRzvAanspraak findOneByRzvvoorwaardenBijlage2(int $rzvvoorwaarden_bijlage_2) Return the first GsRzvAanspraak filtered by the rzvvoorwaarden_bijlage_2 column
 * @method GsRzvAanspraak findOneByTekstmodule(int $tekstmodule) Return the first GsRzvAanspraak filtered by the tekstmodule column
 * @method GsRzvAanspraak findOneByTekstVerwijzing(int $tekst_verwijzing) Return the first GsRzvAanspraak filtered by the tekst_verwijzing column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsRzvAanspraak objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsRzvAanspraak objects filtered by the mutatiekode column
 * @method array findByZinummer(int $zinummer) Return GsRzvAanspraak objects filtered by the zinummer column
 * @method array findByThesaurusRzvVerstrekking(int $thesaurus_rzv_verstrekking) Return GsRzvAanspraak objects filtered by the thesaurus_rzv_verstrekking column
 * @method array findByRzvverstrekking(int $rzvverstrekking) Return GsRzvAanspraak objects filtered by the rzvverstrekking column
 * @method array findByThesaurusRzvHulpmiddelen(int $thesaurus_rzv_hulpmiddelen) Return GsRzvAanspraak objects filtered by the thesaurus_rzv_hulpmiddelen column
 * @method array findByHulpmiddelenZorg(int $hulpmiddelen_zorg) Return GsRzvAanspraak objects filtered by the hulpmiddelen_zorg column
 * @method array findByRzvThesaurus120(int $rzv_thesaurus_120) Return GsRzvAanspraak objects filtered by the rzv_thesaurus_120 column
 * @method array findByRzvvoorwaardenBijlage2(int $rzvvoorwaarden_bijlage_2) Return GsRzvAanspraak objects filtered by the rzvvoorwaarden_bijlage_2 column
 * @method array findByTekstmodule(int $tekstmodule) Return GsRzvAanspraak objects filtered by the tekstmodule column
 * @method array findByTekstVerwijzing(int $tekst_verwijzing) Return GsRzvAanspraak objects filtered by the tekst_verwijzing column
 */
abstract class BaseGsRzvAanspraakQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsRzvAanspraakQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRzvAanspraak';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsRzvAanspraakQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsRzvAanspraakQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsRzvAanspraakQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsRzvAanspraakQuery) {
            return $criteria;
        }
        $query = new GsRzvAanspraakQuery(null, null, $modelAlias);

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
     * @return   GsRzvAanspraak|GsRzvAanspraak[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsRzvAanspraakPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsRzvAanspraakPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsRzvAanspraak A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByZinummer($key, $con = null)
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
     * @return                 GsRzvAanspraak A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `zinummer`, `thesaurus_rzv_verstrekking`, `rzvverstrekking`, `thesaurus_rzv_hulpmiddelen`, `hulpmiddelen_zorg`, `rzv_thesaurus_120`, `rzvvoorwaarden_bijlage_2`, `tekstmodule`, `tekst_verwijzing` FROM `gs_rzv_aanspraak` WHERE `zinummer` = :p0';
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
            $obj = new GsRzvAanspraak();
            $obj->hydrate($row);
            GsRzvAanspraakPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsRzvAanspraak|GsRzvAanspraak[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsRzvAanspraak[]|mixed the list of results, formatted by the current formatter
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
     * @return GsRzvAanspraakQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsRzvAanspraakPeer::ZINUMMER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsRzvAanspraakQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsRzvAanspraakPeer::ZINUMMER, $keys, Criteria::IN);
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
     * @return GsRzvAanspraakQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRzvAanspraakPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsRzvAanspraakQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRzvAanspraakPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the zinummer column
     *
     * Example usage:
     * <code>
     * $query->filterByZinummer(1234); // WHERE zinummer = 1234
     * $query->filterByZinummer(array(12, 34)); // WHERE zinummer IN (12, 34)
     * $query->filterByZinummer(array('min' => 12)); // WHERE zinummer >= 12
     * $query->filterByZinummer(array('max' => 12)); // WHERE zinummer <= 12
     * </code>
     *
     * @see       filterByGsArtikelen()
     *
     * @see       filterByGsArtikelEigenschappen()
     *
     * @param     mixed $zinummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRzvAanspraakQuery The current query, for fluid interface
     */
    public function filterByZinummer($zinummer = null, $comparison = null)
    {
        if (is_array($zinummer)) {
            $useMinMax = false;
            if (isset($zinummer['min'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::ZINUMMER, $zinummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zinummer['max'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::ZINUMMER, $zinummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRzvAanspraakPeer::ZINUMMER, $zinummer, $comparison);
    }

    /**
     * Filter the query on the thesaurus_rzv_verstrekking column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusRzvVerstrekking(1234); // WHERE thesaurus_rzv_verstrekking = 1234
     * $query->filterByThesaurusRzvVerstrekking(array(12, 34)); // WHERE thesaurus_rzv_verstrekking IN (12, 34)
     * $query->filterByThesaurusRzvVerstrekking(array('min' => 12)); // WHERE thesaurus_rzv_verstrekking >= 12
     * $query->filterByThesaurusRzvVerstrekking(array('max' => 12)); // WHERE thesaurus_rzv_verstrekking <= 12
     * </code>
     *
     * @see       filterByRzvVerstrekkingOmschrijving()
     *
     * @param     mixed $thesaurusRzvVerstrekking The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRzvAanspraakQuery The current query, for fluid interface
     */
    public function filterByThesaurusRzvVerstrekking($thesaurusRzvVerstrekking = null, $comparison = null)
    {
        if (is_array($thesaurusRzvVerstrekking)) {
            $useMinMax = false;
            if (isset($thesaurusRzvVerstrekking['min'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::THESAURUS_RZV_VERSTREKKING, $thesaurusRzvVerstrekking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusRzvVerstrekking['max'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::THESAURUS_RZV_VERSTREKKING, $thesaurusRzvVerstrekking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRzvAanspraakPeer::THESAURUS_RZV_VERSTREKKING, $thesaurusRzvVerstrekking, $comparison);
    }

    /**
     * Filter the query on the rzvverstrekking column
     *
     * Example usage:
     * <code>
     * $query->filterByRzvverstrekking(1234); // WHERE rzvverstrekking = 1234
     * $query->filterByRzvverstrekking(array(12, 34)); // WHERE rzvverstrekking IN (12, 34)
     * $query->filterByRzvverstrekking(array('min' => 12)); // WHERE rzvverstrekking >= 12
     * $query->filterByRzvverstrekking(array('max' => 12)); // WHERE rzvverstrekking <= 12
     * </code>
     *
     * @see       filterByRzvVerstrekkingOmschrijving()
     *
     * @param     mixed $rzvverstrekking The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRzvAanspraakQuery The current query, for fluid interface
     */
    public function filterByRzvverstrekking($rzvverstrekking = null, $comparison = null)
    {
        if (is_array($rzvverstrekking)) {
            $useMinMax = false;
            if (isset($rzvverstrekking['min'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::RZVVERSTREKKING, $rzvverstrekking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rzvverstrekking['max'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::RZVVERSTREKKING, $rzvverstrekking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRzvAanspraakPeer::RZVVERSTREKKING, $rzvverstrekking, $comparison);
    }

    /**
     * Filter the query on the thesaurus_rzv_hulpmiddelen column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusRzvHulpmiddelen(1234); // WHERE thesaurus_rzv_hulpmiddelen = 1234
     * $query->filterByThesaurusRzvHulpmiddelen(array(12, 34)); // WHERE thesaurus_rzv_hulpmiddelen IN (12, 34)
     * $query->filterByThesaurusRzvHulpmiddelen(array('min' => 12)); // WHERE thesaurus_rzv_hulpmiddelen >= 12
     * $query->filterByThesaurusRzvHulpmiddelen(array('max' => 12)); // WHERE thesaurus_rzv_hulpmiddelen <= 12
     * </code>
     *
     * @see       filterByRzvHulpmiddelenOmschrijving()
     *
     * @param     mixed $thesaurusRzvHulpmiddelen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRzvAanspraakQuery The current query, for fluid interface
     */
    public function filterByThesaurusRzvHulpmiddelen($thesaurusRzvHulpmiddelen = null, $comparison = null)
    {
        if (is_array($thesaurusRzvHulpmiddelen)) {
            $useMinMax = false;
            if (isset($thesaurusRzvHulpmiddelen['min'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::THESAURUS_RZV_HULPMIDDELEN, $thesaurusRzvHulpmiddelen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusRzvHulpmiddelen['max'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::THESAURUS_RZV_HULPMIDDELEN, $thesaurusRzvHulpmiddelen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRzvAanspraakPeer::THESAURUS_RZV_HULPMIDDELEN, $thesaurusRzvHulpmiddelen, $comparison);
    }

    /**
     * Filter the query on the hulpmiddelen_zorg column
     *
     * Example usage:
     * <code>
     * $query->filterByHulpmiddelenZorg(1234); // WHERE hulpmiddelen_zorg = 1234
     * $query->filterByHulpmiddelenZorg(array(12, 34)); // WHERE hulpmiddelen_zorg IN (12, 34)
     * $query->filterByHulpmiddelenZorg(array('min' => 12)); // WHERE hulpmiddelen_zorg >= 12
     * $query->filterByHulpmiddelenZorg(array('max' => 12)); // WHERE hulpmiddelen_zorg <= 12
     * </code>
     *
     * @see       filterByRzvHulpmiddelenOmschrijving()
     *
     * @param     mixed $hulpmiddelenZorg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRzvAanspraakQuery The current query, for fluid interface
     */
    public function filterByHulpmiddelenZorg($hulpmiddelenZorg = null, $comparison = null)
    {
        if (is_array($hulpmiddelenZorg)) {
            $useMinMax = false;
            if (isset($hulpmiddelenZorg['min'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::HULPMIDDELEN_ZORG, $hulpmiddelenZorg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hulpmiddelenZorg['max'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::HULPMIDDELEN_ZORG, $hulpmiddelenZorg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRzvAanspraakPeer::HULPMIDDELEN_ZORG, $hulpmiddelenZorg, $comparison);
    }

    /**
     * Filter the query on the rzv_thesaurus_120 column
     *
     * Example usage:
     * <code>
     * $query->filterByRzvThesaurus120(1234); // WHERE rzv_thesaurus_120 = 1234
     * $query->filterByRzvThesaurus120(array(12, 34)); // WHERE rzv_thesaurus_120 IN (12, 34)
     * $query->filterByRzvThesaurus120(array('min' => 12)); // WHERE rzv_thesaurus_120 >= 12
     * $query->filterByRzvThesaurus120(array('max' => 12)); // WHERE rzv_thesaurus_120 <= 12
     * </code>
     *
     * @see       filterByRzvVoorwaardenOmschrijving()
     *
     * @param     mixed $rzvThesaurus120 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRzvAanspraakQuery The current query, for fluid interface
     */
    public function filterByRzvThesaurus120($rzvThesaurus120 = null, $comparison = null)
    {
        if (is_array($rzvThesaurus120)) {
            $useMinMax = false;
            if (isset($rzvThesaurus120['min'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::RZV_THESAURUS_120, $rzvThesaurus120['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rzvThesaurus120['max'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::RZV_THESAURUS_120, $rzvThesaurus120['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRzvAanspraakPeer::RZV_THESAURUS_120, $rzvThesaurus120, $comparison);
    }

    /**
     * Filter the query on the rzvvoorwaarden_bijlage_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRzvvoorwaardenBijlage2(1234); // WHERE rzvvoorwaarden_bijlage_2 = 1234
     * $query->filterByRzvvoorwaardenBijlage2(array(12, 34)); // WHERE rzvvoorwaarden_bijlage_2 IN (12, 34)
     * $query->filterByRzvvoorwaardenBijlage2(array('min' => 12)); // WHERE rzvvoorwaarden_bijlage_2 >= 12
     * $query->filterByRzvvoorwaardenBijlage2(array('max' => 12)); // WHERE rzvvoorwaarden_bijlage_2 <= 12
     * </code>
     *
     * @see       filterByRzvVoorwaardenOmschrijving()
     *
     * @param     mixed $rzvvoorwaardenBijlage2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRzvAanspraakQuery The current query, for fluid interface
     */
    public function filterByRzvvoorwaardenBijlage2($rzvvoorwaardenBijlage2 = null, $comparison = null)
    {
        if (is_array($rzvvoorwaardenBijlage2)) {
            $useMinMax = false;
            if (isset($rzvvoorwaardenBijlage2['min'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::RZVVOORWAARDEN_BIJLAGE_2, $rzvvoorwaardenBijlage2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rzvvoorwaardenBijlage2['max'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::RZVVOORWAARDEN_BIJLAGE_2, $rzvvoorwaardenBijlage2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRzvAanspraakPeer::RZVVOORWAARDEN_BIJLAGE_2, $rzvvoorwaardenBijlage2, $comparison);
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
     * @return GsRzvAanspraakQuery The current query, for fluid interface
     */
    public function filterByTekstmodule($tekstmodule = null, $comparison = null)
    {
        if (is_array($tekstmodule)) {
            $useMinMax = false;
            if (isset($tekstmodule['min'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::TEKSTMODULE, $tekstmodule['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstmodule['max'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::TEKSTMODULE, $tekstmodule['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRzvAanspraakPeer::TEKSTMODULE, $tekstmodule, $comparison);
    }

    /**
     * Filter the query on the tekst_verwijzing column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstVerwijzing(1234); // WHERE tekst_verwijzing = 1234
     * $query->filterByTekstVerwijzing(array(12, 34)); // WHERE tekst_verwijzing IN (12, 34)
     * $query->filterByTekstVerwijzing(array('min' => 12)); // WHERE tekst_verwijzing >= 12
     * $query->filterByTekstVerwijzing(array('max' => 12)); // WHERE tekst_verwijzing <= 12
     * </code>
     *
     * @param     mixed $tekstVerwijzing The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsRzvAanspraakQuery The current query, for fluid interface
     */
    public function filterByTekstVerwijzing($tekstVerwijzing = null, $comparison = null)
    {
        if (is_array($tekstVerwijzing)) {
            $useMinMax = false;
            if (isset($tekstVerwijzing['min'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::TEKST_VERWIJZING, $tekstVerwijzing['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstVerwijzing['max'])) {
                $this->addUsingAlias(GsRzvAanspraakPeer::TEKST_VERWIJZING, $tekstVerwijzing['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsRzvAanspraakPeer::TEKST_VERWIJZING, $tekstVerwijzing, $comparison);
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsRzvAanspraakQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelen($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsRzvAanspraakPeer::ZINUMMER, $gsArtikelen->getZinummer(), $comparison);
        } elseif ($gsArtikelen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsRzvAanspraakPeer::ZINUMMER, $gsArtikelen->toKeyValue('PrimaryKey', 'Zinummer'), $comparison);
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
     * @return GsRzvAanspraakQuery The current query, for fluid interface
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
     * Filter the query by a related GsArtikelEigenschappen object
     *
     * @param   GsArtikelEigenschappen|PropelObjectCollection $gsArtikelEigenschappen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsRzvAanspraakQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelEigenschappen($gsArtikelEigenschappen, $comparison = null)
    {
        if ($gsArtikelEigenschappen instanceof GsArtikelEigenschappen) {
            return $this
                ->addUsingAlias(GsRzvAanspraakPeer::ZINUMMER, $gsArtikelEigenschappen->getZindexNummer(), $comparison);
        } elseif ($gsArtikelEigenschappen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsRzvAanspraakPeer::ZINUMMER, $gsArtikelEigenschappen->toKeyValue('PrimaryKey', 'ZindexNummer'), $comparison);
        } else {
            throw new PropelException('filterByGsArtikelEigenschappen() only accepts arguments of type GsArtikelEigenschappen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsArtikelEigenschappen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsRzvAanspraakQuery The current query, for fluid interface
     */
    public function joinGsArtikelEigenschappen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsArtikelEigenschappen');

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
            $this->addJoinObject($join, 'GsArtikelEigenschappen');
        }

        return $this;
    }

    /**
     * Use the GsArtikelEigenschappen relation GsArtikelEigenschappen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery A secondary query class using the current class as primary query
     */
    public function useGsArtikelEigenschappenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsArtikelEigenschappen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelEigenschappen', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsRzvAanspraakQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRzvVerstrekkingOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsRzvAanspraakPeer::THESAURUS_RZV_VERSTREKKING, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsRzvAanspraakPeer::RZVVERSTREKKING, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByRzvVerstrekkingOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RzvVerstrekkingOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsRzvAanspraakQuery The current query, for fluid interface
     */
    public function joinRzvVerstrekkingOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RzvVerstrekkingOmschrijving');

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
            $this->addJoinObject($join, 'RzvVerstrekkingOmschrijving');
        }

        return $this;
    }

    /**
     * Use the RzvVerstrekkingOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useRzvVerstrekkingOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRzvVerstrekkingOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RzvVerstrekkingOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsRzvAanspraakQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRzvHulpmiddelenOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsRzvAanspraakPeer::THESAURUS_RZV_HULPMIDDELEN, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsRzvAanspraakPeer::HULPMIDDELEN_ZORG, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByRzvHulpmiddelenOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RzvHulpmiddelenOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsRzvAanspraakQuery The current query, for fluid interface
     */
    public function joinRzvHulpmiddelenOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RzvHulpmiddelenOmschrijving');

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
            $this->addJoinObject($join, 'RzvHulpmiddelenOmschrijving');
        }

        return $this;
    }

    /**
     * Use the RzvHulpmiddelenOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useRzvHulpmiddelenOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRzvHulpmiddelenOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RzvHulpmiddelenOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsRzvAanspraakQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRzvVoorwaardenOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsRzvAanspraakPeer::RZV_THESAURUS_120, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsRzvAanspraakPeer::RZVVOORWAARDEN_BIJLAGE_2, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByRzvVoorwaardenOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RzvVoorwaardenOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsRzvAanspraakQuery The current query, for fluid interface
     */
    public function joinRzvVoorwaardenOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RzvVoorwaardenOmschrijving');

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
            $this->addJoinObject($join, 'RzvVoorwaardenOmschrijving');
        }

        return $this;
    }

    /**
     * Use the RzvVoorwaardenOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useRzvVoorwaardenOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRzvVoorwaardenOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RzvVoorwaardenOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsRzvAanspraak $gsRzvAanspraak Object to remove from the list of results
     *
     * @return GsRzvAanspraakQuery The current query, for fluid interface
     */
    public function prune($gsRzvAanspraak = null)
    {
        if ($gsRzvAanspraak) {
            $this->addUsingAlias(GsRzvAanspraakPeer::ZINUMMER, $gsRzvAanspraak->getZinummer(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
