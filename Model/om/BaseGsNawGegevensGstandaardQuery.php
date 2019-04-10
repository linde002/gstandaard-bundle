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
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaard;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;

/**
 * @method GsNawGegevensGstandaardQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsNawGegevensGstandaardQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsNawGegevensGstandaardQuery orderByThesaurusnummerSoortNaw($order = Criteria::ASC) Order by the thesaurusnummer_soort_naw column
 * @method GsNawGegevensGstandaardQuery orderByNawSoort($order = Criteria::ASC) Order by the naw_soort column
 * @method GsNawGegevensGstandaardQuery orderByNawNummer($order = Criteria::ASC) Order by the naw_nummer column
 * @method GsNawGegevensGstandaardQuery orderByMemocodeOnderneming3PositiesAlfanumeriek($order = Criteria::ASC) Order by the memocode_onderneming_3_posities_alfanumeriek column
 * @method GsNawGegevensGstandaardQuery orderByMemocodeOnderneming2PositiesNumeriek($order = Criteria::ASC) Order by the memocode_onderneming_2_posities_numeriek column
 * @method GsNawGegevensGstandaardQuery orderByNaam($order = Criteria::ASC) Order by the naam column
 * @method GsNawGegevensGstandaardQuery orderByAdres($order = Criteria::ASC) Order by the adres column
 * @method GsNawGegevensGstandaardQuery orderByPostcode($order = Criteria::ASC) Order by the postcode column
 * @method GsNawGegevensGstandaardQuery orderByWoonplaats($order = Criteria::ASC) Order by the woonplaats column
 * @method GsNawGegevensGstandaardQuery orderByLand($order = Criteria::ASC) Order by the land column
 * @method GsNawGegevensGstandaardQuery orderByPostbusnummer($order = Criteria::ASC) Order by the postbusnummer column
 * @method GsNawGegevensGstandaardQuery orderByPostcodePostbus($order = Criteria::ASC) Order by the postcode_postbus column
 * @method GsNawGegevensGstandaardQuery orderByTelefoonnummerOndernemer($order = Criteria::ASC) Order by the telefoonnummer_ondernemer column
 * @method GsNawGegevensGstandaardQuery orderByFaxnummer($order = Criteria::ASC) Order by the faxnummer column
 * @method GsNawGegevensGstandaardQuery orderByZoeknaam($order = Criteria::ASC) Order by the zoeknaam column
 * @method GsNawGegevensGstandaardQuery orderByLandMemocode($order = Criteria::ASC) Order by the land_memocode column
 * @method GsNawGegevensGstandaardQuery orderByLicNummer($order = Criteria::ASC) Order by the lic_nummer column
 * @method GsNawGegevensGstandaardQuery orderByGlnCode($order = Criteria::ASC) Order by the gln_code column
 * @method GsNawGegevensGstandaardQuery orderByUzoviCode($order = Criteria::ASC) Order by the uzovi_code column
 * @method GsNawGegevensGstandaardQuery orderByAgbCode($order = Criteria::ASC) Order by the agb_code column
 * @method GsNawGegevensGstandaardQuery orderByReservenummer1($order = Criteria::ASC) Order by the reservenummer_1 column
 * @method GsNawGegevensGstandaardQuery orderByReservenummer2($order = Criteria::ASC) Order by the reservenummer_2 column
 * @method GsNawGegevensGstandaardQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 *
 * @method GsNawGegevensGstandaardQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsNawGegevensGstandaardQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsNawGegevensGstandaardQuery groupByThesaurusnummerSoortNaw() Group by the thesaurusnummer_soort_naw column
 * @method GsNawGegevensGstandaardQuery groupByNawSoort() Group by the naw_soort column
 * @method GsNawGegevensGstandaardQuery groupByNawNummer() Group by the naw_nummer column
 * @method GsNawGegevensGstandaardQuery groupByMemocodeOnderneming3PositiesAlfanumeriek() Group by the memocode_onderneming_3_posities_alfanumeriek column
 * @method GsNawGegevensGstandaardQuery groupByMemocodeOnderneming2PositiesNumeriek() Group by the memocode_onderneming_2_posities_numeriek column
 * @method GsNawGegevensGstandaardQuery groupByNaam() Group by the naam column
 * @method GsNawGegevensGstandaardQuery groupByAdres() Group by the adres column
 * @method GsNawGegevensGstandaardQuery groupByPostcode() Group by the postcode column
 * @method GsNawGegevensGstandaardQuery groupByWoonplaats() Group by the woonplaats column
 * @method GsNawGegevensGstandaardQuery groupByLand() Group by the land column
 * @method GsNawGegevensGstandaardQuery groupByPostbusnummer() Group by the postbusnummer column
 * @method GsNawGegevensGstandaardQuery groupByPostcodePostbus() Group by the postcode_postbus column
 * @method GsNawGegevensGstandaardQuery groupByTelefoonnummerOndernemer() Group by the telefoonnummer_ondernemer column
 * @method GsNawGegevensGstandaardQuery groupByFaxnummer() Group by the faxnummer column
 * @method GsNawGegevensGstandaardQuery groupByZoeknaam() Group by the zoeknaam column
 * @method GsNawGegevensGstandaardQuery groupByLandMemocode() Group by the land_memocode column
 * @method GsNawGegevensGstandaardQuery groupByLicNummer() Group by the lic_nummer column
 * @method GsNawGegevensGstandaardQuery groupByGlnCode() Group by the gln_code column
 * @method GsNawGegevensGstandaardQuery groupByUzoviCode() Group by the uzovi_code column
 * @method GsNawGegevensGstandaardQuery groupByAgbCode() Group by the agb_code column
 * @method GsNawGegevensGstandaardQuery groupByReservenummer1() Group by the reservenummer_1 column
 * @method GsNawGegevensGstandaardQuery groupByReservenummer2() Group by the reservenummer_2 column
 * @method GsNawGegevensGstandaardQuery groupBySlug() Group by the slug column
 *
 * @method GsNawGegevensGstandaardQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsNawGegevensGstandaardQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsNawGegevensGstandaardQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsNawGegevensGstandaardQuery leftJoinSoortOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the SoortOmschrijving relation
 * @method GsNawGegevensGstandaardQuery rightJoinSoortOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SoortOmschrijving relation
 * @method GsNawGegevensGstandaardQuery innerJoinSoortOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the SoortOmschrijving relation
 *
 * @method GsNawGegevensGstandaardQuery leftJoinGsArtikelEigenschappen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelEigenschappen relation
 * @method GsNawGegevensGstandaardQuery rightJoinGsArtikelEigenschappen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelEigenschappen relation
 * @method GsNawGegevensGstandaardQuery innerJoinGsArtikelEigenschappen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelEigenschappen relation
 *
 * @method GsNawGegevensGstandaardQuery leftJoinGsArtikelenRelatedByLeverancierKode($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelenRelatedByLeverancierKode relation
 * @method GsNawGegevensGstandaardQuery rightJoinGsArtikelenRelatedByLeverancierKode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelenRelatedByLeverancierKode relation
 * @method GsNawGegevensGstandaardQuery innerJoinGsArtikelenRelatedByLeverancierKode($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelenRelatedByLeverancierKode relation
 *
 * @method GsNawGegevensGstandaardQuery leftJoinGsArtikelenRelatedByImporteurKode($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelenRelatedByImporteurKode relation
 * @method GsNawGegevensGstandaardQuery rightJoinGsArtikelenRelatedByImporteurKode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelenRelatedByImporteurKode relation
 * @method GsNawGegevensGstandaardQuery innerJoinGsArtikelenRelatedByImporteurKode($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelenRelatedByImporteurKode relation
 *
 * @method GsNawGegevensGstandaardQuery leftJoinGsArtikelenRelatedByRegistratiehouderKode($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelenRelatedByRegistratiehouderKode relation
 * @method GsNawGegevensGstandaardQuery rightJoinGsArtikelenRelatedByRegistratiehouderKode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelenRelatedByRegistratiehouderKode relation
 * @method GsNawGegevensGstandaardQuery innerJoinGsArtikelenRelatedByRegistratiehouderKode($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelenRelatedByRegistratiehouderKode relation
 *
 * @method GsNawGegevensGstandaard findOne(PropelPDO $con = null) Return the first GsNawGegevensGstandaard matching the query
 * @method GsNawGegevensGstandaard findOneOrCreate(PropelPDO $con = null) Return the first GsNawGegevensGstandaard matching the query, or a new GsNawGegevensGstandaard object populated from the query conditions when no match is found
 *
 * @method GsNawGegevensGstandaard findOneByBestandnummer(int $bestandnummer) Return the first GsNawGegevensGstandaard filtered by the bestandnummer column
 * @method GsNawGegevensGstandaard findOneByMutatiekode(int $mutatiekode) Return the first GsNawGegevensGstandaard filtered by the mutatiekode column
 * @method GsNawGegevensGstandaard findOneByThesaurusnummerSoortNaw(int $thesaurusnummer_soort_naw) Return the first GsNawGegevensGstandaard filtered by the thesaurusnummer_soort_naw column
 * @method GsNawGegevensGstandaard findOneByNawSoort(int $naw_soort) Return the first GsNawGegevensGstandaard filtered by the naw_soort column
 * @method GsNawGegevensGstandaard findOneByNawNummer(int $naw_nummer) Return the first GsNawGegevensGstandaard filtered by the naw_nummer column
 * @method GsNawGegevensGstandaard findOneByMemocodeOnderneming3PositiesAlfanumeriek(string $memocode_onderneming_3_posities_alfanumeriek) Return the first GsNawGegevensGstandaard filtered by the memocode_onderneming_3_posities_alfanumeriek column
 * @method GsNawGegevensGstandaard findOneByMemocodeOnderneming2PositiesNumeriek(int $memocode_onderneming_2_posities_numeriek) Return the first GsNawGegevensGstandaard filtered by the memocode_onderneming_2_posities_numeriek column
 * @method GsNawGegevensGstandaard findOneByNaam(string $naam) Return the first GsNawGegevensGstandaard filtered by the naam column
 * @method GsNawGegevensGstandaard findOneByAdres(string $adres) Return the first GsNawGegevensGstandaard filtered by the adres column
 * @method GsNawGegevensGstandaard findOneByPostcode(string $postcode) Return the first GsNawGegevensGstandaard filtered by the postcode column
 * @method GsNawGegevensGstandaard findOneByWoonplaats(string $woonplaats) Return the first GsNawGegevensGstandaard filtered by the woonplaats column
 * @method GsNawGegevensGstandaard findOneByLand(string $land) Return the first GsNawGegevensGstandaard filtered by the land column
 * @method GsNawGegevensGstandaard findOneByPostbusnummer(string $postbusnummer) Return the first GsNawGegevensGstandaard filtered by the postbusnummer column
 * @method GsNawGegevensGstandaard findOneByPostcodePostbus(string $postcode_postbus) Return the first GsNawGegevensGstandaard filtered by the postcode_postbus column
 * @method GsNawGegevensGstandaard findOneByTelefoonnummerOndernemer(string $telefoonnummer_ondernemer) Return the first GsNawGegevensGstandaard filtered by the telefoonnummer_ondernemer column
 * @method GsNawGegevensGstandaard findOneByFaxnummer(string $faxnummer) Return the first GsNawGegevensGstandaard filtered by the faxnummer column
 * @method GsNawGegevensGstandaard findOneByZoeknaam(string $zoeknaam) Return the first GsNawGegevensGstandaard filtered by the zoeknaam column
 * @method GsNawGegevensGstandaard findOneByLandMemocode(string $land_memocode) Return the first GsNawGegevensGstandaard filtered by the land_memocode column
 * @method GsNawGegevensGstandaard findOneByLicNummer(string $lic_nummer) Return the first GsNawGegevensGstandaard filtered by the lic_nummer column
 * @method GsNawGegevensGstandaard findOneByGlnCode(string $gln_code) Return the first GsNawGegevensGstandaard filtered by the gln_code column
 * @method GsNawGegevensGstandaard findOneByUzoviCode(int $uzovi_code) Return the first GsNawGegevensGstandaard filtered by the uzovi_code column
 * @method GsNawGegevensGstandaard findOneByAgbCode(int $agb_code) Return the first GsNawGegevensGstandaard filtered by the agb_code column
 * @method GsNawGegevensGstandaard findOneByReservenummer1(int $reservenummer_1) Return the first GsNawGegevensGstandaard filtered by the reservenummer_1 column
 * @method GsNawGegevensGstandaard findOneByReservenummer2(int $reservenummer_2) Return the first GsNawGegevensGstandaard filtered by the reservenummer_2 column
 * @method GsNawGegevensGstandaard findOneBySlug(string $slug) Return the first GsNawGegevensGstandaard filtered by the slug column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsNawGegevensGstandaard objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsNawGegevensGstandaard objects filtered by the mutatiekode column
 * @method array findByThesaurusnummerSoortNaw(int $thesaurusnummer_soort_naw) Return GsNawGegevensGstandaard objects filtered by the thesaurusnummer_soort_naw column
 * @method array findByNawSoort(int $naw_soort) Return GsNawGegevensGstandaard objects filtered by the naw_soort column
 * @method array findByNawNummer(int $naw_nummer) Return GsNawGegevensGstandaard objects filtered by the naw_nummer column
 * @method array findByMemocodeOnderneming3PositiesAlfanumeriek(string $memocode_onderneming_3_posities_alfanumeriek) Return GsNawGegevensGstandaard objects filtered by the memocode_onderneming_3_posities_alfanumeriek column
 * @method array findByMemocodeOnderneming2PositiesNumeriek(int $memocode_onderneming_2_posities_numeriek) Return GsNawGegevensGstandaard objects filtered by the memocode_onderneming_2_posities_numeriek column
 * @method array findByNaam(string $naam) Return GsNawGegevensGstandaard objects filtered by the naam column
 * @method array findByAdres(string $adres) Return GsNawGegevensGstandaard objects filtered by the adres column
 * @method array findByPostcode(string $postcode) Return GsNawGegevensGstandaard objects filtered by the postcode column
 * @method array findByWoonplaats(string $woonplaats) Return GsNawGegevensGstandaard objects filtered by the woonplaats column
 * @method array findByLand(string $land) Return GsNawGegevensGstandaard objects filtered by the land column
 * @method array findByPostbusnummer(string $postbusnummer) Return GsNawGegevensGstandaard objects filtered by the postbusnummer column
 * @method array findByPostcodePostbus(string $postcode_postbus) Return GsNawGegevensGstandaard objects filtered by the postcode_postbus column
 * @method array findByTelefoonnummerOndernemer(string $telefoonnummer_ondernemer) Return GsNawGegevensGstandaard objects filtered by the telefoonnummer_ondernemer column
 * @method array findByFaxnummer(string $faxnummer) Return GsNawGegevensGstandaard objects filtered by the faxnummer column
 * @method array findByZoeknaam(string $zoeknaam) Return GsNawGegevensGstandaard objects filtered by the zoeknaam column
 * @method array findByLandMemocode(string $land_memocode) Return GsNawGegevensGstandaard objects filtered by the land_memocode column
 * @method array findByLicNummer(string $lic_nummer) Return GsNawGegevensGstandaard objects filtered by the lic_nummer column
 * @method array findByGlnCode(string $gln_code) Return GsNawGegevensGstandaard objects filtered by the gln_code column
 * @method array findByUzoviCode(int $uzovi_code) Return GsNawGegevensGstandaard objects filtered by the uzovi_code column
 * @method array findByAgbCode(int $agb_code) Return GsNawGegevensGstandaard objects filtered by the agb_code column
 * @method array findByReservenummer1(int $reservenummer_1) Return GsNawGegevensGstandaard objects filtered by the reservenummer_1 column
 * @method array findByReservenummer2(int $reservenummer_2) Return GsNawGegevensGstandaard objects filtered by the reservenummer_2 column
 * @method array findBySlug(string $slug) Return GsNawGegevensGstandaard objects filtered by the slug column
 */
abstract class BaseGsNawGegevensGstandaardQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsNawGegevensGstandaardQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsNawGegevensGstandaard';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsNawGegevensGstandaardQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsNawGegevensGstandaardQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsNawGegevensGstandaardQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsNawGegevensGstandaardQuery) {
            return $criteria;
        }
        $query = new GsNawGegevensGstandaardQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$naw_soort, $naw_nummer]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsNawGegevensGstandaard|GsNawGegevensGstandaard[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsNawGegevensGstandaardPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsNawGegevensGstandaardPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsNawGegevensGstandaard A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `thesaurusnummer_soort_naw`, `naw_soort`, `naw_nummer`, `memocode_onderneming_3_posities_alfanumeriek`, `memocode_onderneming_2_posities_numeriek`, `naam`, `adres`, `postcode`, `woonplaats`, `land`, `postbusnummer`, `postcode_postbus`, `telefoonnummer_ondernemer`, `faxnummer`, `zoeknaam`, `land_memocode`, `lic_nummer`, `gln_code`, `uzovi_code`, `agb_code`, `reservenummer_1`, `reservenummer_2`, `slug` FROM `gs_naw_gegevens_gstandaard` WHERE `naw_soort` = :p0 AND `naw_nummer` = :p1';
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
            $obj = new GsNawGegevensGstandaard();
            $obj->hydrate($row);
            GsNawGegevensGstandaardPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return GsNawGegevensGstandaard|GsNawGegevensGstandaard[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsNawGegevensGstandaard[]|mixed the list of results, formatted by the current formatter
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
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsNawGegevensGstandaardPeer::NAW_SOORT, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsNawGegevensGstandaardPeer::NAW_NUMMER, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsNawGegevensGstandaardPeer::NAW_SOORT, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsNawGegevensGstandaardPeer::NAW_NUMMER, $key[1], Criteria::EQUAL);
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
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the thesaurusnummer_soort_naw column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusnummerSoortNaw(1234); // WHERE thesaurusnummer_soort_naw = 1234
     * $query->filterByThesaurusnummerSoortNaw(array(12, 34)); // WHERE thesaurusnummer_soort_naw IN (12, 34)
     * $query->filterByThesaurusnummerSoortNaw(array('min' => 12)); // WHERE thesaurusnummer_soort_naw >= 12
     * $query->filterByThesaurusnummerSoortNaw(array('max' => 12)); // WHERE thesaurusnummer_soort_naw <= 12
     * </code>
     *
     * @see       filterBySoortOmschrijving()
     *
     * @param     mixed $thesaurusnummerSoortNaw The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByThesaurusnummerSoortNaw($thesaurusnummerSoortNaw = null, $comparison = null)
    {
        if (is_array($thesaurusnummerSoortNaw)) {
            $useMinMax = false;
            if (isset($thesaurusnummerSoortNaw['min'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::THESAURUSNUMMER_SOORT_NAW, $thesaurusnummerSoortNaw['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusnummerSoortNaw['max'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::THESAURUSNUMMER_SOORT_NAW, $thesaurusnummerSoortNaw['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::THESAURUSNUMMER_SOORT_NAW, $thesaurusnummerSoortNaw, $comparison);
    }

    /**
     * Filter the query on the naw_soort column
     *
     * Example usage:
     * <code>
     * $query->filterByNawSoort(1234); // WHERE naw_soort = 1234
     * $query->filterByNawSoort(array(12, 34)); // WHERE naw_soort IN (12, 34)
     * $query->filterByNawSoort(array('min' => 12)); // WHERE naw_soort >= 12
     * $query->filterByNawSoort(array('max' => 12)); // WHERE naw_soort <= 12
     * </code>
     *
     * @see       filterBySoortOmschrijving()
     *
     * @param     mixed $nawSoort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByNawSoort($nawSoort = null, $comparison = null)
    {
        if (is_array($nawSoort)) {
            $useMinMax = false;
            if (isset($nawSoort['min'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::NAW_SOORT, $nawSoort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nawSoort['max'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::NAW_SOORT, $nawSoort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::NAW_SOORT, $nawSoort, $comparison);
    }

    /**
     * Filter the query on the naw_nummer column
     *
     * Example usage:
     * <code>
     * $query->filterByNawNummer(1234); // WHERE naw_nummer = 1234
     * $query->filterByNawNummer(array(12, 34)); // WHERE naw_nummer IN (12, 34)
     * $query->filterByNawNummer(array('min' => 12)); // WHERE naw_nummer >= 12
     * $query->filterByNawNummer(array('max' => 12)); // WHERE naw_nummer <= 12
     * </code>
     *
     * @param     mixed $nawNummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByNawNummer($nawNummer = null, $comparison = null)
    {
        if (is_array($nawNummer)) {
            $useMinMax = false;
            if (isset($nawNummer['min'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::NAW_NUMMER, $nawNummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nawNummer['max'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::NAW_NUMMER, $nawNummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::NAW_NUMMER, $nawNummer, $comparison);
    }

    /**
     * Filter the query on the memocode_onderneming_3_posities_alfanumeriek column
     *
     * Example usage:
     * <code>
     * $query->filterByMemocodeOnderneming3PositiesAlfanumeriek('fooValue');   // WHERE memocode_onderneming_3_posities_alfanumeriek = 'fooValue'
     * $query->filterByMemocodeOnderneming3PositiesAlfanumeriek('%fooValue%'); // WHERE memocode_onderneming_3_posities_alfanumeriek LIKE '%fooValue%'
     * </code>
     *
     * @param     string $memocodeOnderneming3PositiesAlfanumeriek The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByMemocodeOnderneming3PositiesAlfanumeriek($memocodeOnderneming3PositiesAlfanumeriek = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($memocodeOnderneming3PositiesAlfanumeriek)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $memocodeOnderneming3PositiesAlfanumeriek)) {
                $memocodeOnderneming3PositiesAlfanumeriek = str_replace('*', '%', $memocodeOnderneming3PositiesAlfanumeriek);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::MEMOCODE_ONDERNEMING_3_POSITIES_ALFANUMERIEK, $memocodeOnderneming3PositiesAlfanumeriek, $comparison);
    }

    /**
     * Filter the query on the memocode_onderneming_2_posities_numeriek column
     *
     * Example usage:
     * <code>
     * $query->filterByMemocodeOnderneming2PositiesNumeriek(1234); // WHERE memocode_onderneming_2_posities_numeriek = 1234
     * $query->filterByMemocodeOnderneming2PositiesNumeriek(array(12, 34)); // WHERE memocode_onderneming_2_posities_numeriek IN (12, 34)
     * $query->filterByMemocodeOnderneming2PositiesNumeriek(array('min' => 12)); // WHERE memocode_onderneming_2_posities_numeriek >= 12
     * $query->filterByMemocodeOnderneming2PositiesNumeriek(array('max' => 12)); // WHERE memocode_onderneming_2_posities_numeriek <= 12
     * </code>
     *
     * @param     mixed $memocodeOnderneming2PositiesNumeriek The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByMemocodeOnderneming2PositiesNumeriek($memocodeOnderneming2PositiesNumeriek = null, $comparison = null)
    {
        if (is_array($memocodeOnderneming2PositiesNumeriek)) {
            $useMinMax = false;
            if (isset($memocodeOnderneming2PositiesNumeriek['min'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::MEMOCODE_ONDERNEMING_2_POSITIES_NUMERIEK, $memocodeOnderneming2PositiesNumeriek['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($memocodeOnderneming2PositiesNumeriek['max'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::MEMOCODE_ONDERNEMING_2_POSITIES_NUMERIEK, $memocodeOnderneming2PositiesNumeriek['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::MEMOCODE_ONDERNEMING_2_POSITIES_NUMERIEK, $memocodeOnderneming2PositiesNumeriek, $comparison);
    }

    /**
     * Filter the query on the naam column
     *
     * Example usage:
     * <code>
     * $query->filterByNaam('fooValue');   // WHERE naam = 'fooValue'
     * $query->filterByNaam('%fooValue%'); // WHERE naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $naam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByNaam($naam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($naam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $naam)) {
                $naam = str_replace('*', '%', $naam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::NAAM, $naam, $comparison);
    }

    /**
     * Filter the query on the adres column
     *
     * Example usage:
     * <code>
     * $query->filterByAdres('fooValue');   // WHERE adres = 'fooValue'
     * $query->filterByAdres('%fooValue%'); // WHERE adres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByAdres($adres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adres)) {
                $adres = str_replace('*', '%', $adres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::ADRES, $adres, $comparison);
    }

    /**
     * Filter the query on the postcode column
     *
     * Example usage:
     * <code>
     * $query->filterByPostcode('fooValue');   // WHERE postcode = 'fooValue'
     * $query->filterByPostcode('%fooValue%'); // WHERE postcode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postcode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByPostcode($postcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postcode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postcode)) {
                $postcode = str_replace('*', '%', $postcode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::POSTCODE, $postcode, $comparison);
    }

    /**
     * Filter the query on the woonplaats column
     *
     * Example usage:
     * <code>
     * $query->filterByWoonplaats('fooValue');   // WHERE woonplaats = 'fooValue'
     * $query->filterByWoonplaats('%fooValue%'); // WHERE woonplaats LIKE '%fooValue%'
     * </code>
     *
     * @param     string $woonplaats The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByWoonplaats($woonplaats = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($woonplaats)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $woonplaats)) {
                $woonplaats = str_replace('*', '%', $woonplaats);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::WOONPLAATS, $woonplaats, $comparison);
    }

    /**
     * Filter the query on the land column
     *
     * Example usage:
     * <code>
     * $query->filterByLand('fooValue');   // WHERE land = 'fooValue'
     * $query->filterByLand('%fooValue%'); // WHERE land LIKE '%fooValue%'
     * </code>
     *
     * @param     string $land The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByLand($land = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($land)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $land)) {
                $land = str_replace('*', '%', $land);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::LAND, $land, $comparison);
    }

    /**
     * Filter the query on the postbusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByPostbusnummer('fooValue');   // WHERE postbusnummer = 'fooValue'
     * $query->filterByPostbusnummer('%fooValue%'); // WHERE postbusnummer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postbusnummer The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByPostbusnummer($postbusnummer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postbusnummer)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postbusnummer)) {
                $postbusnummer = str_replace('*', '%', $postbusnummer);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::POSTBUSNUMMER, $postbusnummer, $comparison);
    }

    /**
     * Filter the query on the postcode_postbus column
     *
     * Example usage:
     * <code>
     * $query->filterByPostcodePostbus('fooValue');   // WHERE postcode_postbus = 'fooValue'
     * $query->filterByPostcodePostbus('%fooValue%'); // WHERE postcode_postbus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postcodePostbus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByPostcodePostbus($postcodePostbus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postcodePostbus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postcodePostbus)) {
                $postcodePostbus = str_replace('*', '%', $postcodePostbus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::POSTCODE_POSTBUS, $postcodePostbus, $comparison);
    }

    /**
     * Filter the query on the telefoonnummer_ondernemer column
     *
     * Example usage:
     * <code>
     * $query->filterByTelefoonnummerOndernemer('fooValue');   // WHERE telefoonnummer_ondernemer = 'fooValue'
     * $query->filterByTelefoonnummerOndernemer('%fooValue%'); // WHERE telefoonnummer_ondernemer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telefoonnummerOndernemer The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByTelefoonnummerOndernemer($telefoonnummerOndernemer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telefoonnummerOndernemer)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telefoonnummerOndernemer)) {
                $telefoonnummerOndernemer = str_replace('*', '%', $telefoonnummerOndernemer);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::TELEFOONNUMMER_ONDERNEMER, $telefoonnummerOndernemer, $comparison);
    }

    /**
     * Filter the query on the faxnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByFaxnummer('fooValue');   // WHERE faxnummer = 'fooValue'
     * $query->filterByFaxnummer('%fooValue%'); // WHERE faxnummer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faxnummer The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByFaxnummer($faxnummer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faxnummer)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $faxnummer)) {
                $faxnummer = str_replace('*', '%', $faxnummer);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::FAXNUMMER, $faxnummer, $comparison);
    }

    /**
     * Filter the query on the zoeknaam column
     *
     * Example usage:
     * <code>
     * $query->filterByZoeknaam('fooValue');   // WHERE zoeknaam = 'fooValue'
     * $query->filterByZoeknaam('%fooValue%'); // WHERE zoeknaam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $zoeknaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByZoeknaam($zoeknaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($zoeknaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $zoeknaam)) {
                $zoeknaam = str_replace('*', '%', $zoeknaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::ZOEKNAAM, $zoeknaam, $comparison);
    }

    /**
     * Filter the query on the land_memocode column
     *
     * Example usage:
     * <code>
     * $query->filterByLandMemocode('fooValue');   // WHERE land_memocode = 'fooValue'
     * $query->filterByLandMemocode('%fooValue%'); // WHERE land_memocode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $landMemocode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByLandMemocode($landMemocode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($landMemocode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $landMemocode)) {
                $landMemocode = str_replace('*', '%', $landMemocode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::LAND_MEMOCODE, $landMemocode, $comparison);
    }

    /**
     * Filter the query on the lic_nummer column
     *
     * Example usage:
     * <code>
     * $query->filterByLicNummer('fooValue');   // WHERE lic_nummer = 'fooValue'
     * $query->filterByLicNummer('%fooValue%'); // WHERE lic_nummer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $licNummer The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByLicNummer($licNummer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($licNummer)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $licNummer)) {
                $licNummer = str_replace('*', '%', $licNummer);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::LIC_NUMMER, $licNummer, $comparison);
    }

    /**
     * Filter the query on the gln_code column
     *
     * Example usage:
     * <code>
     * $query->filterByGlnCode(1234); // WHERE gln_code = 1234
     * $query->filterByGlnCode(array(12, 34)); // WHERE gln_code IN (12, 34)
     * $query->filterByGlnCode(array('min' => 12)); // WHERE gln_code >= 12
     * $query->filterByGlnCode(array('max' => 12)); // WHERE gln_code <= 12
     * </code>
     *
     * @param     mixed $glnCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByGlnCode($glnCode = null, $comparison = null)
    {
        if (is_array($glnCode)) {
            $useMinMax = false;
            if (isset($glnCode['min'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::GLN_CODE, $glnCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($glnCode['max'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::GLN_CODE, $glnCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::GLN_CODE, $glnCode, $comparison);
    }

    /**
     * Filter the query on the uzovi_code column
     *
     * Example usage:
     * <code>
     * $query->filterByUzoviCode(1234); // WHERE uzovi_code = 1234
     * $query->filterByUzoviCode(array(12, 34)); // WHERE uzovi_code IN (12, 34)
     * $query->filterByUzoviCode(array('min' => 12)); // WHERE uzovi_code >= 12
     * $query->filterByUzoviCode(array('max' => 12)); // WHERE uzovi_code <= 12
     * </code>
     *
     * @param     mixed $uzoviCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByUzoviCode($uzoviCode = null, $comparison = null)
    {
        if (is_array($uzoviCode)) {
            $useMinMax = false;
            if (isset($uzoviCode['min'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::UZOVI_CODE, $uzoviCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uzoviCode['max'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::UZOVI_CODE, $uzoviCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::UZOVI_CODE, $uzoviCode, $comparison);
    }

    /**
     * Filter the query on the agb_code column
     *
     * Example usage:
     * <code>
     * $query->filterByAgbCode(1234); // WHERE agb_code = 1234
     * $query->filterByAgbCode(array(12, 34)); // WHERE agb_code IN (12, 34)
     * $query->filterByAgbCode(array('min' => 12)); // WHERE agb_code >= 12
     * $query->filterByAgbCode(array('max' => 12)); // WHERE agb_code <= 12
     * </code>
     *
     * @param     mixed $agbCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByAgbCode($agbCode = null, $comparison = null)
    {
        if (is_array($agbCode)) {
            $useMinMax = false;
            if (isset($agbCode['min'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::AGB_CODE, $agbCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agbCode['max'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::AGB_CODE, $agbCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::AGB_CODE, $agbCode, $comparison);
    }

    /**
     * Filter the query on the reservenummer_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByReservenummer1(1234); // WHERE reservenummer_1 = 1234
     * $query->filterByReservenummer1(array(12, 34)); // WHERE reservenummer_1 IN (12, 34)
     * $query->filterByReservenummer1(array('min' => 12)); // WHERE reservenummer_1 >= 12
     * $query->filterByReservenummer1(array('max' => 12)); // WHERE reservenummer_1 <= 12
     * </code>
     *
     * @param     mixed $reservenummer1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByReservenummer1($reservenummer1 = null, $comparison = null)
    {
        if (is_array($reservenummer1)) {
            $useMinMax = false;
            if (isset($reservenummer1['min'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::RESERVENUMMER_1, $reservenummer1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reservenummer1['max'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::RESERVENUMMER_1, $reservenummer1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::RESERVENUMMER_1, $reservenummer1, $comparison);
    }

    /**
     * Filter the query on the reservenummer_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByReservenummer2(1234); // WHERE reservenummer_2 = 1234
     * $query->filterByReservenummer2(array(12, 34)); // WHERE reservenummer_2 IN (12, 34)
     * $query->filterByReservenummer2(array('min' => 12)); // WHERE reservenummer_2 >= 12
     * $query->filterByReservenummer2(array('max' => 12)); // WHERE reservenummer_2 <= 12
     * </code>
     *
     * @param     mixed $reservenummer2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterByReservenummer2($reservenummer2 = null, $comparison = null)
    {
        if (is_array($reservenummer2)) {
            $useMinMax = false;
            if (isset($reservenummer2['min'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::RESERVENUMMER_2, $reservenummer2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reservenummer2['max'])) {
                $this->addUsingAlias(GsNawGegevensGstandaardPeer::RESERVENUMMER_2, $reservenummer2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::RESERVENUMMER_2, $reservenummer2, $comparison);
    }

    /**
     * Filter the query on the slug column
     *
     * Example usage:
     * <code>
     * $query->filterBySlug('fooValue');   // WHERE slug = 'fooValue'
     * $query->filterBySlug('%fooValue%'); // WHERE slug LIKE '%fooValue%'
     * </code>
     *
     * @param     string $slug The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function filterBySlug($slug = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($slug)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $slug)) {
                $slug = str_replace('*', '%', $slug);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsNawGegevensGstandaardPeer::SLUG, $slug, $comparison);
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsNawGegevensGstandaardQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySoortOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsNawGegevensGstandaardPeer::THESAURUSNUMMER_SOORT_NAW, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsNawGegevensGstandaardPeer::NAW_SOORT, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterBySoortOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoortOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function joinSoortOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SoortOmschrijving');

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
            $this->addJoinObject($join, 'SoortOmschrijving');
        }

        return $this;
    }

    /**
     * Use the SoortOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useSoortOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSoortOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SoortOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsArtikelEigenschappen object
     *
     * @param   GsArtikelEigenschappen|PropelObjectCollection $gsArtikelEigenschappen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsNawGegevensGstandaardQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelEigenschappen($gsArtikelEigenschappen, $comparison = null)
    {
        if ($gsArtikelEigenschappen instanceof GsArtikelEigenschappen) {
            return $this
                ->addUsingAlias(GsNawGegevensGstandaardPeer::NAW_NUMMER, $gsArtikelEigenschappen->getLeverancierNummer(), $comparison);
        } elseif ($gsArtikelEigenschappen instanceof PropelObjectCollection) {
            return $this
                ->useGsArtikelEigenschappenQuery()
                ->filterByPrimaryKeys($gsArtikelEigenschappen->getPrimaryKeys())
                ->endUse();
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
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function joinGsArtikelEigenschappen($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useGsArtikelEigenschappenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsArtikelEigenschappen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelEigenschappen', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery');
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsNawGegevensGstandaardQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelenRelatedByLeverancierKode($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsNawGegevensGstandaardPeer::NAW_NUMMER, $gsArtikelen->getLeverancierKode(), $comparison);
        } elseif ($gsArtikelen instanceof PropelObjectCollection) {
            return $this
                ->useGsArtikelenRelatedByLeverancierKodeQuery()
                ->filterByPrimaryKeys($gsArtikelen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsArtikelenRelatedByLeverancierKode() only accepts arguments of type GsArtikelen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsArtikelenRelatedByLeverancierKode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function joinGsArtikelenRelatedByLeverancierKode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsArtikelenRelatedByLeverancierKode');

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
            $this->addJoinObject($join, 'GsArtikelenRelatedByLeverancierKode');
        }

        return $this;
    }

    /**
     * Use the GsArtikelenRelatedByLeverancierKode relation GsArtikelen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery A secondary query class using the current class as primary query
     */
    public function useGsArtikelenRelatedByLeverancierKodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsArtikelenRelatedByLeverancierKode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelenRelatedByLeverancierKode', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery');
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsNawGegevensGstandaardQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelenRelatedByImporteurKode($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsNawGegevensGstandaardPeer::NAW_NUMMER, $gsArtikelen->getImporteurKode(), $comparison);
        } elseif ($gsArtikelen instanceof PropelObjectCollection) {
            return $this
                ->useGsArtikelenRelatedByImporteurKodeQuery()
                ->filterByPrimaryKeys($gsArtikelen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsArtikelenRelatedByImporteurKode() only accepts arguments of type GsArtikelen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsArtikelenRelatedByImporteurKode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function joinGsArtikelenRelatedByImporteurKode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsArtikelenRelatedByImporteurKode');

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
            $this->addJoinObject($join, 'GsArtikelenRelatedByImporteurKode');
        }

        return $this;
    }

    /**
     * Use the GsArtikelenRelatedByImporteurKode relation GsArtikelen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery A secondary query class using the current class as primary query
     */
    public function useGsArtikelenRelatedByImporteurKodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsArtikelenRelatedByImporteurKode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelenRelatedByImporteurKode', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery');
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsNawGegevensGstandaardQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelenRelatedByRegistratiehouderKode($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsNawGegevensGstandaardPeer::NAW_NUMMER, $gsArtikelen->getRegistratiehouderKode(), $comparison);
        } elseif ($gsArtikelen instanceof PropelObjectCollection) {
            return $this
                ->useGsArtikelenRelatedByRegistratiehouderKodeQuery()
                ->filterByPrimaryKeys($gsArtikelen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsArtikelenRelatedByRegistratiehouderKode() only accepts arguments of type GsArtikelen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsArtikelenRelatedByRegistratiehouderKode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function joinGsArtikelenRelatedByRegistratiehouderKode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsArtikelenRelatedByRegistratiehouderKode');

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
            $this->addJoinObject($join, 'GsArtikelenRelatedByRegistratiehouderKode');
        }

        return $this;
    }

    /**
     * Use the GsArtikelenRelatedByRegistratiehouderKode relation GsArtikelen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery A secondary query class using the current class as primary query
     */
    public function useGsArtikelenRelatedByRegistratiehouderKodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsArtikelenRelatedByRegistratiehouderKode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelenRelatedByRegistratiehouderKode', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsNawGegevensGstandaard $gsNawGegevensGstandaard Object to remove from the list of results
     *
     * @return GsNawGegevensGstandaardQuery The current query, for fluid interface
     */
    public function prune($gsNawGegevensGstandaard = null)
    {
        if ($gsNawGegevensGstandaard) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsNawGegevensGstandaardPeer::NAW_SOORT), $gsNawGegevensGstandaard->getNawSoort(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsNawGegevensGstandaardPeer::NAW_NUMMER), $gsNawGegevensGstandaard->getNawNummer(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
