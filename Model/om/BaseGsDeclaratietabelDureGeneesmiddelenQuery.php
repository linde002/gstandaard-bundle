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
use PharmaIntelligence\GstandaardBundle\Model\GsDeclaratietabelDureGeneesmiddelen;
use PharmaIntelligence\GstandaardBundle\Model\GsDeclaratietabelDureGeneesmiddelenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsDeclaratietabelDureGeneesmiddelenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;

/**
 * @method GsDeclaratietabelDureGeneesmiddelenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery orderByHandelsproduktkode($order = Criteria::ASC) Order by the handelsproduktkode column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery orderByZorgactiviteitCode($order = Criteria::ASC) Order by the zorgactiviteit_code column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery orderByOmschrijving($order = Criteria::ASC) Order by the omschrijving column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery orderByHoeveelheidPerToedieningseenheid($order = Criteria::ASC) Order by the hoeveelheid_per_toedieningseenheid column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery orderByThesaurusVerwijzingEenheid($order = Criteria::ASC) Order by the thesaurus_verwijzing_eenheid column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery orderByEenheid($order = Criteria::ASC) Order by the eenheid column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery orderByOmrekenfactorAantalToedieningseenhedenPerHpk($order = Criteria::ASC) Order by the omrekenfactor_aantal_toedieningseenheden_per_hpk column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery orderByTarief($order = Criteria::ASC) Order by the tarief column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery orderByThesaurusNummerBeleidsregel($order = Criteria::ASC) Order by the thesaurus_nummer_beleidsregel column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery orderByItemnummerBeleidsregel($order = Criteria::ASC) Order by the itemnummer_beleidsregel column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery orderByZorgactiviteitVoldoetAanBeleidsregel($order = Criteria::ASC) Order by the zorgactiviteit_voldoet_aan_beleidsregel column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery orderByStartdatum($order = Criteria::ASC) Order by the startdatum column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery orderByEinddatum($order = Criteria::ASC) Order by the einddatum column
 *
 * @method GsDeclaratietabelDureGeneesmiddelenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery groupByHandelsproduktkode() Group by the handelsproduktkode column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery groupByZorgactiviteitCode() Group by the zorgactiviteit_code column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery groupByOmschrijving() Group by the omschrijving column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery groupByHoeveelheidPerToedieningseenheid() Group by the hoeveelheid_per_toedieningseenheid column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery groupByThesaurusVerwijzingEenheid() Group by the thesaurus_verwijzing_eenheid column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery groupByEenheid() Group by the eenheid column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery groupByOmrekenfactorAantalToedieningseenhedenPerHpk() Group by the omrekenfactor_aantal_toedieningseenheden_per_hpk column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery groupByTarief() Group by the tarief column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery groupByThesaurusNummerBeleidsregel() Group by the thesaurus_nummer_beleidsregel column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery groupByItemnummerBeleidsregel() Group by the itemnummer_beleidsregel column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery groupByZorgactiviteitVoldoetAanBeleidsregel() Group by the zorgactiviteit_voldoet_aan_beleidsregel column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery groupByStartdatum() Group by the startdatum column
 * @method GsDeclaratietabelDureGeneesmiddelenQuery groupByEinddatum() Group by the einddatum column
 *
 * @method GsDeclaratietabelDureGeneesmiddelenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsDeclaratietabelDureGeneesmiddelenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsDeclaratietabelDureGeneesmiddelenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsDeclaratietabelDureGeneesmiddelenQuery leftJoinGsHandelsproducten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproducten relation
 * @method GsDeclaratietabelDureGeneesmiddelenQuery rightJoinGsHandelsproducten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproducten relation
 * @method GsDeclaratietabelDureGeneesmiddelenQuery innerJoinGsHandelsproducten($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproducten relation
 *
 * @method GsDeclaratietabelDureGeneesmiddelenQuery leftJoinBeleidsregelOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the BeleidsregelOmschrijving relation
 * @method GsDeclaratietabelDureGeneesmiddelenQuery rightJoinBeleidsregelOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BeleidsregelOmschrijving relation
 * @method GsDeclaratietabelDureGeneesmiddelenQuery innerJoinBeleidsregelOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the BeleidsregelOmschrijving relation
 *
 * @method GsDeclaratietabelDureGeneesmiddelenQuery leftJoinToedieningsEenheidOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the ToedieningsEenheidOmschrijving relation
 * @method GsDeclaratietabelDureGeneesmiddelenQuery rightJoinToedieningsEenheidOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ToedieningsEenheidOmschrijving relation
 * @method GsDeclaratietabelDureGeneesmiddelenQuery innerJoinToedieningsEenheidOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the ToedieningsEenheidOmschrijving relation
 *
 * @method GsDeclaratietabelDureGeneesmiddelen findOne(PropelPDO $con = null) Return the first GsDeclaratietabelDureGeneesmiddelen matching the query
 * @method GsDeclaratietabelDureGeneesmiddelen findOneOrCreate(PropelPDO $con = null) Return the first GsDeclaratietabelDureGeneesmiddelen matching the query, or a new GsDeclaratietabelDureGeneesmiddelen object populated from the query conditions when no match is found
 *
 * @method GsDeclaratietabelDureGeneesmiddelen findOneByBestandnummer(int $bestandnummer) Return the first GsDeclaratietabelDureGeneesmiddelen filtered by the bestandnummer column
 * @method GsDeclaratietabelDureGeneesmiddelen findOneByMutatiekode(int $mutatiekode) Return the first GsDeclaratietabelDureGeneesmiddelen filtered by the mutatiekode column
 * @method GsDeclaratietabelDureGeneesmiddelen findOneByHandelsproduktkode(int $handelsproduktkode) Return the first GsDeclaratietabelDureGeneesmiddelen filtered by the handelsproduktkode column
 * @method GsDeclaratietabelDureGeneesmiddelen findOneByZorgactiviteitCode(int $zorgactiviteit_code) Return the first GsDeclaratietabelDureGeneesmiddelen filtered by the zorgactiviteit_code column
 * @method GsDeclaratietabelDureGeneesmiddelen findOneByOmschrijving(string $omschrijving) Return the first GsDeclaratietabelDureGeneesmiddelen filtered by the omschrijving column
 * @method GsDeclaratietabelDureGeneesmiddelen findOneByHoeveelheidPerToedieningseenheid(string $hoeveelheid_per_toedieningseenheid) Return the first GsDeclaratietabelDureGeneesmiddelen filtered by the hoeveelheid_per_toedieningseenheid column
 * @method GsDeclaratietabelDureGeneesmiddelen findOneByThesaurusVerwijzingEenheid(int $thesaurus_verwijzing_eenheid) Return the first GsDeclaratietabelDureGeneesmiddelen filtered by the thesaurus_verwijzing_eenheid column
 * @method GsDeclaratietabelDureGeneesmiddelen findOneByEenheid(int $eenheid) Return the first GsDeclaratietabelDureGeneesmiddelen filtered by the eenheid column
 * @method GsDeclaratietabelDureGeneesmiddelen findOneByOmrekenfactorAantalToedieningseenhedenPerHpk(string $omrekenfactor_aantal_toedieningseenheden_per_hpk) Return the first GsDeclaratietabelDureGeneesmiddelen filtered by the omrekenfactor_aantal_toedieningseenheden_per_hpk column
 * @method GsDeclaratietabelDureGeneesmiddelen findOneByTarief(string $tarief) Return the first GsDeclaratietabelDureGeneesmiddelen filtered by the tarief column
 * @method GsDeclaratietabelDureGeneesmiddelen findOneByThesaurusNummerBeleidsregel(int $thesaurus_nummer_beleidsregel) Return the first GsDeclaratietabelDureGeneesmiddelen filtered by the thesaurus_nummer_beleidsregel column
 * @method GsDeclaratietabelDureGeneesmiddelen findOneByItemnummerBeleidsregel(int $itemnummer_beleidsregel) Return the first GsDeclaratietabelDureGeneesmiddelen filtered by the itemnummer_beleidsregel column
 * @method GsDeclaratietabelDureGeneesmiddelen findOneByZorgactiviteitVoldoetAanBeleidsregel(int $zorgactiviteit_voldoet_aan_beleidsregel) Return the first GsDeclaratietabelDureGeneesmiddelen filtered by the zorgactiviteit_voldoet_aan_beleidsregel column
 * @method GsDeclaratietabelDureGeneesmiddelen findOneByStartdatum(string $startdatum) Return the first GsDeclaratietabelDureGeneesmiddelen filtered by the startdatum column
 * @method GsDeclaratietabelDureGeneesmiddelen findOneByEinddatum(string $einddatum) Return the first GsDeclaratietabelDureGeneesmiddelen filtered by the einddatum column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsDeclaratietabelDureGeneesmiddelen objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsDeclaratietabelDureGeneesmiddelen objects filtered by the mutatiekode column
 * @method array findByHandelsproduktkode(int $handelsproduktkode) Return GsDeclaratietabelDureGeneesmiddelen objects filtered by the handelsproduktkode column
 * @method array findByZorgactiviteitCode(int $zorgactiviteit_code) Return GsDeclaratietabelDureGeneesmiddelen objects filtered by the zorgactiviteit_code column
 * @method array findByOmschrijving(string $omschrijving) Return GsDeclaratietabelDureGeneesmiddelen objects filtered by the omschrijving column
 * @method array findByHoeveelheidPerToedieningseenheid(string $hoeveelheid_per_toedieningseenheid) Return GsDeclaratietabelDureGeneesmiddelen objects filtered by the hoeveelheid_per_toedieningseenheid column
 * @method array findByThesaurusVerwijzingEenheid(int $thesaurus_verwijzing_eenheid) Return GsDeclaratietabelDureGeneesmiddelen objects filtered by the thesaurus_verwijzing_eenheid column
 * @method array findByEenheid(int $eenheid) Return GsDeclaratietabelDureGeneesmiddelen objects filtered by the eenheid column
 * @method array findByOmrekenfactorAantalToedieningseenhedenPerHpk(string $omrekenfactor_aantal_toedieningseenheden_per_hpk) Return GsDeclaratietabelDureGeneesmiddelen objects filtered by the omrekenfactor_aantal_toedieningseenheden_per_hpk column
 * @method array findByTarief(string $tarief) Return GsDeclaratietabelDureGeneesmiddelen objects filtered by the tarief column
 * @method array findByThesaurusNummerBeleidsregel(int $thesaurus_nummer_beleidsregel) Return GsDeclaratietabelDureGeneesmiddelen objects filtered by the thesaurus_nummer_beleidsregel column
 * @method array findByItemnummerBeleidsregel(int $itemnummer_beleidsregel) Return GsDeclaratietabelDureGeneesmiddelen objects filtered by the itemnummer_beleidsregel column
 * @method array findByZorgactiviteitVoldoetAanBeleidsregel(int $zorgactiviteit_voldoet_aan_beleidsregel) Return GsDeclaratietabelDureGeneesmiddelen objects filtered by the zorgactiviteit_voldoet_aan_beleidsregel column
 * @method array findByStartdatum(string $startdatum) Return GsDeclaratietabelDureGeneesmiddelen objects filtered by the startdatum column
 * @method array findByEinddatum(string $einddatum) Return GsDeclaratietabelDureGeneesmiddelen objects filtered by the einddatum column
 */
abstract class BaseGsDeclaratietabelDureGeneesmiddelenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsDeclaratietabelDureGeneesmiddelenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDeclaratietabelDureGeneesmiddelen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsDeclaratietabelDureGeneesmiddelenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsDeclaratietabelDureGeneesmiddelenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsDeclaratietabelDureGeneesmiddelenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsDeclaratietabelDureGeneesmiddelenQuery) {
            return $criteria;
        }
        $query = new GsDeclaratietabelDureGeneesmiddelenQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$handelsproduktkode, $zorgactiviteit_code]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsDeclaratietabelDureGeneesmiddelen|GsDeclaratietabelDureGeneesmiddelen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsDeclaratietabelDureGeneesmiddelenPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsDeclaratietabelDureGeneesmiddelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsDeclaratietabelDureGeneesmiddelen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `handelsproduktkode`, `zorgactiviteit_code`, `omschrijving`, `hoeveelheid_per_toedieningseenheid`, `thesaurus_verwijzing_eenheid`, `eenheid`, `omrekenfactor_aantal_toedieningseenheden_per_hpk`, `tarief`, `thesaurus_nummer_beleidsregel`, `itemnummer_beleidsregel`, `zorgactiviteit_voldoet_aan_beleidsregel`, `startdatum`, `einddatum` FROM `gs_declaratietabel_dure_geneesmiddelen` WHERE `handelsproduktkode` = :p0 AND `zorgactiviteit_code` = :p1';
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
            $obj = new GsDeclaratietabelDureGeneesmiddelen();
            $obj->hydrate($row);
            GsDeclaratietabelDureGeneesmiddelenPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsDeclaratietabelDureGeneesmiddelen|GsDeclaratietabelDureGeneesmiddelen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsDeclaratietabelDureGeneesmiddelen[]|mixed the list of results, formatted by the current formatter
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
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::HANDELSPRODUKTKODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::ZORGACTIVITEIT_CODE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsDeclaratietabelDureGeneesmiddelenPeer::HANDELSPRODUKTKODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsDeclaratietabelDureGeneesmiddelenPeer::ZORGACTIVITEIT_CODE, $key[1], Criteria::EQUAL);
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
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function filterByHandelsproduktkode($handelsproduktkode = null, $comparison = null)
    {
        if (is_array($handelsproduktkode)) {
            $useMinMax = false;
            if (isset($handelsproduktkode['min'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::HANDELSPRODUKTKODE, $handelsproduktkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($handelsproduktkode['max'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::HANDELSPRODUKTKODE, $handelsproduktkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::HANDELSPRODUKTKODE, $handelsproduktkode, $comparison);
    }

    /**
     * Filter the query on the zorgactiviteit_code column
     *
     * Example usage:
     * <code>
     * $query->filterByZorgactiviteitCode(1234); // WHERE zorgactiviteit_code = 1234
     * $query->filterByZorgactiviteitCode(array(12, 34)); // WHERE zorgactiviteit_code IN (12, 34)
     * $query->filterByZorgactiviteitCode(array('min' => 12)); // WHERE zorgactiviteit_code >= 12
     * $query->filterByZorgactiviteitCode(array('max' => 12)); // WHERE zorgactiviteit_code <= 12
     * </code>
     *
     * @param     mixed $zorgactiviteitCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function filterByZorgactiviteitCode($zorgactiviteitCode = null, $comparison = null)
    {
        if (is_array($zorgactiviteitCode)) {
            $useMinMax = false;
            if (isset($zorgactiviteitCode['min'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::ZORGACTIVITEIT_CODE, $zorgactiviteitCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zorgactiviteitCode['max'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::ZORGACTIVITEIT_CODE, $zorgactiviteitCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::ZORGACTIVITEIT_CODE, $zorgactiviteitCode, $comparison);
    }

    /**
     * Filter the query on the omschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByOmschrijving('fooValue');   // WHERE omschrijving = 'fooValue'
     * $query->filterByOmschrijving('%fooValue%'); // WHERE omschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $omschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function filterByOmschrijving($omschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($omschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $omschrijving)) {
                $omschrijving = str_replace('*', '%', $omschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::OMSCHRIJVING, $omschrijving, $comparison);
    }

    /**
     * Filter the query on the hoeveelheid_per_toedieningseenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByHoeveelheidPerToedieningseenheid(1234); // WHERE hoeveelheid_per_toedieningseenheid = 1234
     * $query->filterByHoeveelheidPerToedieningseenheid(array(12, 34)); // WHERE hoeveelheid_per_toedieningseenheid IN (12, 34)
     * $query->filterByHoeveelheidPerToedieningseenheid(array('min' => 12)); // WHERE hoeveelheid_per_toedieningseenheid >= 12
     * $query->filterByHoeveelheidPerToedieningseenheid(array('max' => 12)); // WHERE hoeveelheid_per_toedieningseenheid <= 12
     * </code>
     *
     * @param     mixed $hoeveelheidPerToedieningseenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function filterByHoeveelheidPerToedieningseenheid($hoeveelheidPerToedieningseenheid = null, $comparison = null)
    {
        if (is_array($hoeveelheidPerToedieningseenheid)) {
            $useMinMax = false;
            if (isset($hoeveelheidPerToedieningseenheid['min'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::HOEVEELHEID_PER_TOEDIENINGSEENHEID, $hoeveelheidPerToedieningseenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hoeveelheidPerToedieningseenheid['max'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::HOEVEELHEID_PER_TOEDIENINGSEENHEID, $hoeveelheidPerToedieningseenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::HOEVEELHEID_PER_TOEDIENINGSEENHEID, $hoeveelheidPerToedieningseenheid, $comparison);
    }

    /**
     * Filter the query on the thesaurus_verwijzing_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusVerwijzingEenheid(1234); // WHERE thesaurus_verwijzing_eenheid = 1234
     * $query->filterByThesaurusVerwijzingEenheid(array(12, 34)); // WHERE thesaurus_verwijzing_eenheid IN (12, 34)
     * $query->filterByThesaurusVerwijzingEenheid(array('min' => 12)); // WHERE thesaurus_verwijzing_eenheid >= 12
     * $query->filterByThesaurusVerwijzingEenheid(array('max' => 12)); // WHERE thesaurus_verwijzing_eenheid <= 12
     * </code>
     *
     * @see       filterByToedieningsEenheidOmschrijving()
     *
     * @param     mixed $thesaurusVerwijzingEenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function filterByThesaurusVerwijzingEenheid($thesaurusVerwijzingEenheid = null, $comparison = null)
    {
        if (is_array($thesaurusVerwijzingEenheid)) {
            $useMinMax = false;
            if (isset($thesaurusVerwijzingEenheid['min'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::THESAURUS_VERWIJZING_EENHEID, $thesaurusVerwijzingEenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusVerwijzingEenheid['max'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::THESAURUS_VERWIJZING_EENHEID, $thesaurusVerwijzingEenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::THESAURUS_VERWIJZING_EENHEID, $thesaurusVerwijzingEenheid, $comparison);
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
     * @see       filterByToedieningsEenheidOmschrijving()
     *
     * @param     mixed $eenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function filterByEenheid($eenheid = null, $comparison = null)
    {
        if (is_array($eenheid)) {
            $useMinMax = false;
            if (isset($eenheid['min'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::EENHEID, $eenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eenheid['max'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::EENHEID, $eenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::EENHEID, $eenheid, $comparison);
    }

    /**
     * Filter the query on the omrekenfactor_aantal_toedieningseenheden_per_hpk column
     *
     * Example usage:
     * <code>
     * $query->filterByOmrekenfactorAantalToedieningseenhedenPerHpk(1234); // WHERE omrekenfactor_aantal_toedieningseenheden_per_hpk = 1234
     * $query->filterByOmrekenfactorAantalToedieningseenhedenPerHpk(array(12, 34)); // WHERE omrekenfactor_aantal_toedieningseenheden_per_hpk IN (12, 34)
     * $query->filterByOmrekenfactorAantalToedieningseenhedenPerHpk(array('min' => 12)); // WHERE omrekenfactor_aantal_toedieningseenheden_per_hpk >= 12
     * $query->filterByOmrekenfactorAantalToedieningseenhedenPerHpk(array('max' => 12)); // WHERE omrekenfactor_aantal_toedieningseenheden_per_hpk <= 12
     * </code>
     *
     * @param     mixed $omrekenfactorAantalToedieningseenhedenPerHpk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function filterByOmrekenfactorAantalToedieningseenhedenPerHpk($omrekenfactorAantalToedieningseenhedenPerHpk = null, $comparison = null)
    {
        if (is_array($omrekenfactorAantalToedieningseenhedenPerHpk)) {
            $useMinMax = false;
            if (isset($omrekenfactorAantalToedieningseenhedenPerHpk['min'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::OMREKENFACTOR_AANTAL_TOEDIENINGSEENHEDEN_PER_HPK, $omrekenfactorAantalToedieningseenhedenPerHpk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($omrekenfactorAantalToedieningseenhedenPerHpk['max'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::OMREKENFACTOR_AANTAL_TOEDIENINGSEENHEDEN_PER_HPK, $omrekenfactorAantalToedieningseenhedenPerHpk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::OMREKENFACTOR_AANTAL_TOEDIENINGSEENHEDEN_PER_HPK, $omrekenfactorAantalToedieningseenhedenPerHpk, $comparison);
    }

    /**
     * Filter the query on the tarief column
     *
     * Example usage:
     * <code>
     * $query->filterByTarief(1234); // WHERE tarief = 1234
     * $query->filterByTarief(array(12, 34)); // WHERE tarief IN (12, 34)
     * $query->filterByTarief(array('min' => 12)); // WHERE tarief >= 12
     * $query->filterByTarief(array('max' => 12)); // WHERE tarief <= 12
     * </code>
     *
     * @param     mixed $tarief The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function filterByTarief($tarief = null, $comparison = null)
    {
        if (is_array($tarief)) {
            $useMinMax = false;
            if (isset($tarief['min'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::TARIEF, $tarief['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tarief['max'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::TARIEF, $tarief['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::TARIEF, $tarief, $comparison);
    }

    /**
     * Filter the query on the thesaurus_nummer_beleidsregel column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusNummerBeleidsregel(1234); // WHERE thesaurus_nummer_beleidsregel = 1234
     * $query->filterByThesaurusNummerBeleidsregel(array(12, 34)); // WHERE thesaurus_nummer_beleidsregel IN (12, 34)
     * $query->filterByThesaurusNummerBeleidsregel(array('min' => 12)); // WHERE thesaurus_nummer_beleidsregel >= 12
     * $query->filterByThesaurusNummerBeleidsregel(array('max' => 12)); // WHERE thesaurus_nummer_beleidsregel <= 12
     * </code>
     *
     * @see       filterByBeleidsregelOmschrijving()
     *
     * @param     mixed $thesaurusNummerBeleidsregel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function filterByThesaurusNummerBeleidsregel($thesaurusNummerBeleidsregel = null, $comparison = null)
    {
        if (is_array($thesaurusNummerBeleidsregel)) {
            $useMinMax = false;
            if (isset($thesaurusNummerBeleidsregel['min'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::THESAURUS_NUMMER_BELEIDSREGEL, $thesaurusNummerBeleidsregel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusNummerBeleidsregel['max'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::THESAURUS_NUMMER_BELEIDSREGEL, $thesaurusNummerBeleidsregel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::THESAURUS_NUMMER_BELEIDSREGEL, $thesaurusNummerBeleidsregel, $comparison);
    }

    /**
     * Filter the query on the itemnummer_beleidsregel column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnummerBeleidsregel(1234); // WHERE itemnummer_beleidsregel = 1234
     * $query->filterByItemnummerBeleidsregel(array(12, 34)); // WHERE itemnummer_beleidsregel IN (12, 34)
     * $query->filterByItemnummerBeleidsregel(array('min' => 12)); // WHERE itemnummer_beleidsregel >= 12
     * $query->filterByItemnummerBeleidsregel(array('max' => 12)); // WHERE itemnummer_beleidsregel <= 12
     * </code>
     *
     * @see       filterByBeleidsregelOmschrijving()
     *
     * @param     mixed $itemnummerBeleidsregel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnummerBeleidsregel($itemnummerBeleidsregel = null, $comparison = null)
    {
        if (is_array($itemnummerBeleidsregel)) {
            $useMinMax = false;
            if (isset($itemnummerBeleidsregel['min'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::ITEMNUMMER_BELEIDSREGEL, $itemnummerBeleidsregel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnummerBeleidsregel['max'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::ITEMNUMMER_BELEIDSREGEL, $itemnummerBeleidsregel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::ITEMNUMMER_BELEIDSREGEL, $itemnummerBeleidsregel, $comparison);
    }

    /**
     * Filter the query on the zorgactiviteit_voldoet_aan_beleidsregel column
     *
     * Example usage:
     * <code>
     * $query->filterByZorgactiviteitVoldoetAanBeleidsregel(1234); // WHERE zorgactiviteit_voldoet_aan_beleidsregel = 1234
     * $query->filterByZorgactiviteitVoldoetAanBeleidsregel(array(12, 34)); // WHERE zorgactiviteit_voldoet_aan_beleidsregel IN (12, 34)
     * $query->filterByZorgactiviteitVoldoetAanBeleidsregel(array('min' => 12)); // WHERE zorgactiviteit_voldoet_aan_beleidsregel >= 12
     * $query->filterByZorgactiviteitVoldoetAanBeleidsregel(array('max' => 12)); // WHERE zorgactiviteit_voldoet_aan_beleidsregel <= 12
     * </code>
     *
     * @param     mixed $zorgactiviteitVoldoetAanBeleidsregel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function filterByZorgactiviteitVoldoetAanBeleidsregel($zorgactiviteitVoldoetAanBeleidsregel = null, $comparison = null)
    {
        if (is_array($zorgactiviteitVoldoetAanBeleidsregel)) {
            $useMinMax = false;
            if (isset($zorgactiviteitVoldoetAanBeleidsregel['min'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::ZORGACTIVITEIT_VOLDOET_AAN_BELEIDSREGEL, $zorgactiviteitVoldoetAanBeleidsregel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zorgactiviteitVoldoetAanBeleidsregel['max'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::ZORGACTIVITEIT_VOLDOET_AAN_BELEIDSREGEL, $zorgactiviteitVoldoetAanBeleidsregel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::ZORGACTIVITEIT_VOLDOET_AAN_BELEIDSREGEL, $zorgactiviteitVoldoetAanBeleidsregel, $comparison);
    }

    /**
     * Filter the query on the startdatum column
     *
     * Example usage:
     * <code>
     * $query->filterByStartdatum('2011-03-14'); // WHERE startdatum = '2011-03-14'
     * $query->filterByStartdatum('now'); // WHERE startdatum = '2011-03-14'
     * $query->filterByStartdatum(array('max' => 'yesterday')); // WHERE startdatum < '2011-03-13'
     * </code>
     *
     * @param     mixed $startdatum The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function filterByStartdatum($startdatum = null, $comparison = null)
    {
        if (is_array($startdatum)) {
            $useMinMax = false;
            if (isset($startdatum['min'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::STARTDATUM, $startdatum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($startdatum['max'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::STARTDATUM, $startdatum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::STARTDATUM, $startdatum, $comparison);
    }

    /**
     * Filter the query on the einddatum column
     *
     * Example usage:
     * <code>
     * $query->filterByEinddatum('2011-03-14'); // WHERE einddatum = '2011-03-14'
     * $query->filterByEinddatum('now'); // WHERE einddatum = '2011-03-14'
     * $query->filterByEinddatum(array('max' => 'yesterday')); // WHERE einddatum < '2011-03-13'
     * </code>
     *
     * @param     mixed $einddatum The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function filterByEinddatum($einddatum = null, $comparison = null)
    {
        if (is_array($einddatum)) {
            $useMinMax = false;
            if (isset($einddatum['min'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::EINDDATUM, $einddatum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($einddatum['max'])) {
                $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::EINDDATUM, $einddatum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::EINDDATUM, $einddatum, $comparison);
    }

    /**
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproducten($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::HANDELSPRODUKTKODE, $gsHandelsproducten->getHandelsproduktkode(), $comparison);
        } elseif ($gsHandelsproducten instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::HANDELSPRODUKTKODE, $gsHandelsproducten->toKeyValue('PrimaryKey', 'Handelsproduktkode'), $comparison);
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
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
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
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByBeleidsregelOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::THESAURUS_NUMMER_BELEIDSREGEL, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::ITEMNUMMER_BELEIDSREGEL, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByBeleidsregelOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BeleidsregelOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function joinBeleidsregelOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BeleidsregelOmschrijving');

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
            $this->addJoinObject($join, 'BeleidsregelOmschrijving');
        }

        return $this;
    }

    /**
     * Use the BeleidsregelOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useBeleidsregelOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinBeleidsregelOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BeleidsregelOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByToedieningsEenheidOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::THESAURUS_VERWIJZING_EENHEID, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsDeclaratietabelDureGeneesmiddelenPeer::EENHEID, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByToedieningsEenheidOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ToedieningsEenheidOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function joinToedieningsEenheidOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ToedieningsEenheidOmschrijving');

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
            $this->addJoinObject($join, 'ToedieningsEenheidOmschrijving');
        }

        return $this;
    }

    /**
     * Use the ToedieningsEenheidOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useToedieningsEenheidOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinToedieningsEenheidOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ToedieningsEenheidOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsDeclaratietabelDureGeneesmiddelen $gsDeclaratietabelDureGeneesmiddelen Object to remove from the list of results
     *
     * @return GsDeclaratietabelDureGeneesmiddelenQuery The current query, for fluid interface
     */
    public function prune($gsDeclaratietabelDureGeneesmiddelen = null)
    {
        if ($gsDeclaratietabelDureGeneesmiddelen) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsDeclaratietabelDureGeneesmiddelenPeer::HANDELSPRODUKTKODE), $gsDeclaratietabelDureGeneesmiddelen->getHandelsproduktkode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsDeclaratietabelDureGeneesmiddelenPeer::ZORGACTIVITEIT_CODE), $gsDeclaratietabelDureGeneesmiddelen->getZorgactiviteitCode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
