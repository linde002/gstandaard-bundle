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
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatie;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatiePeer;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatieQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;

/**
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByGln($order = Criteria::ASC) Order by the gln column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByGtin($order = Criteria::ASC) Order by the gtin column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByZindexNummer($order = Criteria::ASC) Order by the zindex_nummer column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByThesaurusSoortenVerpakkingen($order = Criteria::ASC) Order by the thesaurus_soorten_verpakkingen column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByThesaurusitemSoortenVerpakkingen($order = Criteria::ASC) Order by the thesaurusitem_soorten_verpakkingen column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByNaamOpVerpakking($order = Criteria::ASC) Order by the naam_op_verpakking column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByOnderscheidendKenmerk($order = Criteria::ASC) Order by the onderscheidend_kenmerk column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByStartdatumBeschikbaarheidVerpakking($order = Criteria::ASC) Order by the startdatum_beschikbaarheid_verpakking column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByEinddatumBeschikbaarheidVerpakking($order = Criteria::ASC) Order by the einddatum_beschikbaarheid_verpakking column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByGtinVanHetVerpaktItem($order = Criteria::ASC) Order by the gtin_van_het_verpakt_item column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByAantalVanHetVerpaktItem($order = Criteria::ASC) Order by the aantal_van_het_verpakt_item column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByThesaurusMetItemsVanEenheden($order = Criteria::ASC) Order by the thesaurus_met_items_van_eenheden column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByHoogteVanVerpakking($order = Criteria::ASC) Order by the hoogte_van_verpakking column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByThesaurusitemVanEenheidHoogte($order = Criteria::ASC) Order by the thesaurusitem_van_eenheid_hoogte column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByBreedteVanVerpakking($order = Criteria::ASC) Order by the breedte_van_verpakking column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByThesaurusitemVanEenheidBreedte($order = Criteria::ASC) Order by the thesaurusitem_van_eenheid_breedte column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByDiepteVanVerpakking($order = Criteria::ASC) Order by the diepte_van_verpakking column
 * @method GsLogistiekeVerpakkingsinformatieQuery orderByThesaurusitemVanEenheidDiepte($order = Criteria::ASC) Order by the thesaurusitem_van_eenheid_diepte column
 *
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByGln() Group by the gln column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByGtin() Group by the gtin column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByZindexNummer() Group by the zindex_nummer column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByThesaurusSoortenVerpakkingen() Group by the thesaurus_soorten_verpakkingen column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByThesaurusitemSoortenVerpakkingen() Group by the thesaurusitem_soorten_verpakkingen column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByNaamOpVerpakking() Group by the naam_op_verpakking column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByOnderscheidendKenmerk() Group by the onderscheidend_kenmerk column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByStartdatumBeschikbaarheidVerpakking() Group by the startdatum_beschikbaarheid_verpakking column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByEinddatumBeschikbaarheidVerpakking() Group by the einddatum_beschikbaarheid_verpakking column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByGtinVanHetVerpaktItem() Group by the gtin_van_het_verpakt_item column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByAantalVanHetVerpaktItem() Group by the aantal_van_het_verpakt_item column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByThesaurusMetItemsVanEenheden() Group by the thesaurus_met_items_van_eenheden column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByHoogteVanVerpakking() Group by the hoogte_van_verpakking column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByThesaurusitemVanEenheidHoogte() Group by the thesaurusitem_van_eenheid_hoogte column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByBreedteVanVerpakking() Group by the breedte_van_verpakking column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByThesaurusitemVanEenheidBreedte() Group by the thesaurusitem_van_eenheid_breedte column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByDiepteVanVerpakking() Group by the diepte_van_verpakking column
 * @method GsLogistiekeVerpakkingsinformatieQuery groupByThesaurusitemVanEenheidDiepte() Group by the thesaurusitem_van_eenheid_diepte column
 *
 * @method GsLogistiekeVerpakkingsinformatieQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsLogistiekeVerpakkingsinformatieQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsLogistiekeVerpakkingsinformatieQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsLogistiekeVerpakkingsinformatieQuery leftJoinSoortenVerpakkingOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the SoortenVerpakkingOmschrijving relation
 * @method GsLogistiekeVerpakkingsinformatieQuery rightJoinSoortenVerpakkingOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SoortenVerpakkingOmschrijving relation
 * @method GsLogistiekeVerpakkingsinformatieQuery innerJoinSoortenVerpakkingOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the SoortenVerpakkingOmschrijving relation
 *
 * @method GsLogistiekeVerpakkingsinformatieQuery leftJoinHoogteEenheidOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the HoogteEenheidOmschrijving relation
 * @method GsLogistiekeVerpakkingsinformatieQuery rightJoinHoogteEenheidOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the HoogteEenheidOmschrijving relation
 * @method GsLogistiekeVerpakkingsinformatieQuery innerJoinHoogteEenheidOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the HoogteEenheidOmschrijving relation
 *
 * @method GsLogistiekeVerpakkingsinformatieQuery leftJoinDiepteEenheidOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the DiepteEenheidOmschrijving relation
 * @method GsLogistiekeVerpakkingsinformatieQuery rightJoinDiepteEenheidOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DiepteEenheidOmschrijving relation
 * @method GsLogistiekeVerpakkingsinformatieQuery innerJoinDiepteEenheidOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the DiepteEenheidOmschrijving relation
 *
 * @method GsLogistiekeVerpakkingsinformatieQuery leftJoinBreedteEenheidOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the BreedteEenheidOmschrijving relation
 * @method GsLogistiekeVerpakkingsinformatieQuery rightJoinBreedteEenheidOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BreedteEenheidOmschrijving relation
 * @method GsLogistiekeVerpakkingsinformatieQuery innerJoinBreedteEenheidOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the BreedteEenheidOmschrijving relation
 *
 * @method GsLogistiekeVerpakkingsinformatieQuery leftJoinGsArtikelen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelen relation
 * @method GsLogistiekeVerpakkingsinformatieQuery rightJoinGsArtikelen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelen relation
 * @method GsLogistiekeVerpakkingsinformatieQuery innerJoinGsArtikelen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelen relation
 *
 * @method GsLogistiekeVerpakkingsinformatie findOne(PropelPDO $con = null) Return the first GsLogistiekeVerpakkingsinformatie matching the query
 * @method GsLogistiekeVerpakkingsinformatie findOneOrCreate(PropelPDO $con = null) Return the first GsLogistiekeVerpakkingsinformatie matching the query, or a new GsLogistiekeVerpakkingsinformatie object populated from the query conditions when no match is found
 *
 * @method GsLogistiekeVerpakkingsinformatie findOneByBestandnummer(int $bestandnummer) Return the first GsLogistiekeVerpakkingsinformatie filtered by the bestandnummer column
 * @method GsLogistiekeVerpakkingsinformatie findOneByMutatiekode(int $mutatiekode) Return the first GsLogistiekeVerpakkingsinformatie filtered by the mutatiekode column
 * @method GsLogistiekeVerpakkingsinformatie findOneByGln(string $gln) Return the first GsLogistiekeVerpakkingsinformatie filtered by the gln column
 * @method GsLogistiekeVerpakkingsinformatie findOneByGtin(string $gtin) Return the first GsLogistiekeVerpakkingsinformatie filtered by the gtin column
 * @method GsLogistiekeVerpakkingsinformatie findOneByZindexNummer(int $zindex_nummer) Return the first GsLogistiekeVerpakkingsinformatie filtered by the zindex_nummer column
 * @method GsLogistiekeVerpakkingsinformatie findOneByThesaurusSoortenVerpakkingen(int $thesaurus_soorten_verpakkingen) Return the first GsLogistiekeVerpakkingsinformatie filtered by the thesaurus_soorten_verpakkingen column
 * @method GsLogistiekeVerpakkingsinformatie findOneByThesaurusitemSoortenVerpakkingen(int $thesaurusitem_soorten_verpakkingen) Return the first GsLogistiekeVerpakkingsinformatie filtered by the thesaurusitem_soorten_verpakkingen column
 * @method GsLogistiekeVerpakkingsinformatie findOneByNaamOpVerpakking(string $naam_op_verpakking) Return the first GsLogistiekeVerpakkingsinformatie filtered by the naam_op_verpakking column
 * @method GsLogistiekeVerpakkingsinformatie findOneByOnderscheidendKenmerk(string $onderscheidend_kenmerk) Return the first GsLogistiekeVerpakkingsinformatie filtered by the onderscheidend_kenmerk column
 * @method GsLogistiekeVerpakkingsinformatie findOneByStartdatumBeschikbaarheidVerpakking(string $startdatum_beschikbaarheid_verpakking) Return the first GsLogistiekeVerpakkingsinformatie filtered by the startdatum_beschikbaarheid_verpakking column
 * @method GsLogistiekeVerpakkingsinformatie findOneByEinddatumBeschikbaarheidVerpakking(string $einddatum_beschikbaarheid_verpakking) Return the first GsLogistiekeVerpakkingsinformatie filtered by the einddatum_beschikbaarheid_verpakking column
 * @method GsLogistiekeVerpakkingsinformatie findOneByGtinVanHetVerpaktItem(string $gtin_van_het_verpakt_item) Return the first GsLogistiekeVerpakkingsinformatie filtered by the gtin_van_het_verpakt_item column
 * @method GsLogistiekeVerpakkingsinformatie findOneByAantalVanHetVerpaktItem(int $aantal_van_het_verpakt_item) Return the first GsLogistiekeVerpakkingsinformatie filtered by the aantal_van_het_verpakt_item column
 * @method GsLogistiekeVerpakkingsinformatie findOneByThesaurusMetItemsVanEenheden(int $thesaurus_met_items_van_eenheden) Return the first GsLogistiekeVerpakkingsinformatie filtered by the thesaurus_met_items_van_eenheden column
 * @method GsLogistiekeVerpakkingsinformatie findOneByHoogteVanVerpakking(string $hoogte_van_verpakking) Return the first GsLogistiekeVerpakkingsinformatie filtered by the hoogte_van_verpakking column
 * @method GsLogistiekeVerpakkingsinformatie findOneByThesaurusitemVanEenheidHoogte(int $thesaurusitem_van_eenheid_hoogte) Return the first GsLogistiekeVerpakkingsinformatie filtered by the thesaurusitem_van_eenheid_hoogte column
 * @method GsLogistiekeVerpakkingsinformatie findOneByBreedteVanVerpakking(string $breedte_van_verpakking) Return the first GsLogistiekeVerpakkingsinformatie filtered by the breedte_van_verpakking column
 * @method GsLogistiekeVerpakkingsinformatie findOneByThesaurusitemVanEenheidBreedte(int $thesaurusitem_van_eenheid_breedte) Return the first GsLogistiekeVerpakkingsinformatie filtered by the thesaurusitem_van_eenheid_breedte column
 * @method GsLogistiekeVerpakkingsinformatie findOneByDiepteVanVerpakking(string $diepte_van_verpakking) Return the first GsLogistiekeVerpakkingsinformatie filtered by the diepte_van_verpakking column
 * @method GsLogistiekeVerpakkingsinformatie findOneByThesaurusitemVanEenheidDiepte(int $thesaurusitem_van_eenheid_diepte) Return the first GsLogistiekeVerpakkingsinformatie filtered by the thesaurusitem_van_eenheid_diepte column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsLogistiekeVerpakkingsinformatie objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsLogistiekeVerpakkingsinformatie objects filtered by the mutatiekode column
 * @method array findByGln(string $gln) Return GsLogistiekeVerpakkingsinformatie objects filtered by the gln column
 * @method array findByGtin(string $gtin) Return GsLogistiekeVerpakkingsinformatie objects filtered by the gtin column
 * @method array findByZindexNummer(int $zindex_nummer) Return GsLogistiekeVerpakkingsinformatie objects filtered by the zindex_nummer column
 * @method array findByThesaurusSoortenVerpakkingen(int $thesaurus_soorten_verpakkingen) Return GsLogistiekeVerpakkingsinformatie objects filtered by the thesaurus_soorten_verpakkingen column
 * @method array findByThesaurusitemSoortenVerpakkingen(int $thesaurusitem_soorten_verpakkingen) Return GsLogistiekeVerpakkingsinformatie objects filtered by the thesaurusitem_soorten_verpakkingen column
 * @method array findByNaamOpVerpakking(string $naam_op_verpakking) Return GsLogistiekeVerpakkingsinformatie objects filtered by the naam_op_verpakking column
 * @method array findByOnderscheidendKenmerk(string $onderscheidend_kenmerk) Return GsLogistiekeVerpakkingsinformatie objects filtered by the onderscheidend_kenmerk column
 * @method array findByStartdatumBeschikbaarheidVerpakking(string $startdatum_beschikbaarheid_verpakking) Return GsLogistiekeVerpakkingsinformatie objects filtered by the startdatum_beschikbaarheid_verpakking column
 * @method array findByEinddatumBeschikbaarheidVerpakking(string $einddatum_beschikbaarheid_verpakking) Return GsLogistiekeVerpakkingsinformatie objects filtered by the einddatum_beschikbaarheid_verpakking column
 * @method array findByGtinVanHetVerpaktItem(string $gtin_van_het_verpakt_item) Return GsLogistiekeVerpakkingsinformatie objects filtered by the gtin_van_het_verpakt_item column
 * @method array findByAantalVanHetVerpaktItem(int $aantal_van_het_verpakt_item) Return GsLogistiekeVerpakkingsinformatie objects filtered by the aantal_van_het_verpakt_item column
 * @method array findByThesaurusMetItemsVanEenheden(int $thesaurus_met_items_van_eenheden) Return GsLogistiekeVerpakkingsinformatie objects filtered by the thesaurus_met_items_van_eenheden column
 * @method array findByHoogteVanVerpakking(string $hoogte_van_verpakking) Return GsLogistiekeVerpakkingsinformatie objects filtered by the hoogte_van_verpakking column
 * @method array findByThesaurusitemVanEenheidHoogte(int $thesaurusitem_van_eenheid_hoogte) Return GsLogistiekeVerpakkingsinformatie objects filtered by the thesaurusitem_van_eenheid_hoogte column
 * @method array findByBreedteVanVerpakking(string $breedte_van_verpakking) Return GsLogistiekeVerpakkingsinformatie objects filtered by the breedte_van_verpakking column
 * @method array findByThesaurusitemVanEenheidBreedte(int $thesaurusitem_van_eenheid_breedte) Return GsLogistiekeVerpakkingsinformatie objects filtered by the thesaurusitem_van_eenheid_breedte column
 * @method array findByDiepteVanVerpakking(string $diepte_van_verpakking) Return GsLogistiekeVerpakkingsinformatie objects filtered by the diepte_van_verpakking column
 * @method array findByThesaurusitemVanEenheidDiepte(int $thesaurusitem_van_eenheid_diepte) Return GsLogistiekeVerpakkingsinformatie objects filtered by the thesaurusitem_van_eenheid_diepte column
 */
abstract class BaseGsLogistiekeVerpakkingsinformatieQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsLogistiekeVerpakkingsinformatieQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLogistiekeVerpakkingsinformatie';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsLogistiekeVerpakkingsinformatieQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsLogistiekeVerpakkingsinformatieQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsLogistiekeVerpakkingsinformatieQuery) {
            return $criteria;
        }
        $query = new GsLogistiekeVerpakkingsinformatieQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$gln, $gtin, $gtin_van_het_verpakt_item]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsLogistiekeVerpakkingsinformatie|GsLogistiekeVerpakkingsinformatie[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsLogistiekeVerpakkingsinformatiePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeVerpakkingsinformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsLogistiekeVerpakkingsinformatie A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `gln`, `gtin`, `zindex_nummer`, `thesaurus_soorten_verpakkingen`, `thesaurusitem_soorten_verpakkingen`, `naam_op_verpakking`, `onderscheidend_kenmerk`, `startdatum_beschikbaarheid_verpakking`, `einddatum_beschikbaarheid_verpakking`, `gtin_van_het_verpakt_item`, `aantal_van_het_verpakt_item`, `thesaurus_met_items_van_eenheden`, `hoogte_van_verpakking`, `thesaurusitem_van_eenheid_hoogte`, `breedte_van_verpakking`, `thesaurusitem_van_eenheid_breedte`, `diepte_van_verpakking`, `thesaurusitem_van_eenheid_diepte` FROM `gs_logistieke_verpakkingsinformatie` WHERE `gln` = :p0 AND `gtin` = :p1 AND `gtin_van_het_verpakt_item` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsLogistiekeVerpakkingsinformatie();
            $obj->hydrate($row);
            GsLogistiekeVerpakkingsinformatiePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return GsLogistiekeVerpakkingsinformatie|GsLogistiekeVerpakkingsinformatie[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[]|mixed the list of results, formatted by the current formatter
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
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::GLN, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::GTIN, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsLogistiekeVerpakkingsinformatiePeer::GLN, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsLogistiekeVerpakkingsinformatiePeer::GTIN, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
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
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the gln column
     *
     * Example usage:
     * <code>
     * $query->filterByGln(1234); // WHERE gln = 1234
     * $query->filterByGln(array(12, 34)); // WHERE gln IN (12, 34)
     * $query->filterByGln(array('min' => 12)); // WHERE gln >= 12
     * $query->filterByGln(array('max' => 12)); // WHERE gln <= 12
     * </code>
     *
     * @param     mixed $gln The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByGln($gln = null, $comparison = null)
    {
        if (is_array($gln)) {
            $useMinMax = false;
            if (isset($gln['min'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::GLN, $gln['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gln['max'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::GLN, $gln['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::GLN, $gln, $comparison);
    }

    /**
     * Filter the query on the gtin column
     *
     * Example usage:
     * <code>
     * $query->filterByGtin(1234); // WHERE gtin = 1234
     * $query->filterByGtin(array(12, 34)); // WHERE gtin IN (12, 34)
     * $query->filterByGtin(array('min' => 12)); // WHERE gtin >= 12
     * $query->filterByGtin(array('max' => 12)); // WHERE gtin <= 12
     * </code>
     *
     * @param     mixed $gtin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByGtin($gtin = null, $comparison = null)
    {
        if (is_array($gtin)) {
            $useMinMax = false;
            if (isset($gtin['min'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::GTIN, $gtin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gtin['max'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::GTIN, $gtin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::GTIN, $gtin, $comparison);
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
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByZindexNummer($zindexNummer = null, $comparison = null)
    {
        if (is_array($zindexNummer)) {
            $useMinMax = false;
            if (isset($zindexNummer['min'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, $zindexNummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zindexNummer['max'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, $zindexNummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, $zindexNummer, $comparison);
    }

    /**
     * Filter the query on the thesaurus_soorten_verpakkingen column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusSoortenVerpakkingen(1234); // WHERE thesaurus_soorten_verpakkingen = 1234
     * $query->filterByThesaurusSoortenVerpakkingen(array(12, 34)); // WHERE thesaurus_soorten_verpakkingen IN (12, 34)
     * $query->filterByThesaurusSoortenVerpakkingen(array('min' => 12)); // WHERE thesaurus_soorten_verpakkingen >= 12
     * $query->filterByThesaurusSoortenVerpakkingen(array('max' => 12)); // WHERE thesaurus_soorten_verpakkingen <= 12
     * </code>
     *
     * @see       filterBySoortenVerpakkingOmschrijving()
     *
     * @param     mixed $thesaurusSoortenVerpakkingen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByThesaurusSoortenVerpakkingen($thesaurusSoortenVerpakkingen = null, $comparison = null)
    {
        if (is_array($thesaurusSoortenVerpakkingen)) {
            $useMinMax = false;
            if (isset($thesaurusSoortenVerpakkingen['min'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_SOORTEN_VERPAKKINGEN, $thesaurusSoortenVerpakkingen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusSoortenVerpakkingen['max'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_SOORTEN_VERPAKKINGEN, $thesaurusSoortenVerpakkingen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_SOORTEN_VERPAKKINGEN, $thesaurusSoortenVerpakkingen, $comparison);
    }

    /**
     * Filter the query on the thesaurusitem_soorten_verpakkingen column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusitemSoortenVerpakkingen(1234); // WHERE thesaurusitem_soorten_verpakkingen = 1234
     * $query->filterByThesaurusitemSoortenVerpakkingen(array(12, 34)); // WHERE thesaurusitem_soorten_verpakkingen IN (12, 34)
     * $query->filterByThesaurusitemSoortenVerpakkingen(array('min' => 12)); // WHERE thesaurusitem_soorten_verpakkingen >= 12
     * $query->filterByThesaurusitemSoortenVerpakkingen(array('max' => 12)); // WHERE thesaurusitem_soorten_verpakkingen <= 12
     * </code>
     *
     * @see       filterBySoortenVerpakkingOmschrijving()
     *
     * @param     mixed $thesaurusitemSoortenVerpakkingen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByThesaurusitemSoortenVerpakkingen($thesaurusitemSoortenVerpakkingen = null, $comparison = null)
    {
        if (is_array($thesaurusitemSoortenVerpakkingen)) {
            $useMinMax = false;
            if (isset($thesaurusitemSoortenVerpakkingen['min'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_SOORTEN_VERPAKKINGEN, $thesaurusitemSoortenVerpakkingen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusitemSoortenVerpakkingen['max'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_SOORTEN_VERPAKKINGEN, $thesaurusitemSoortenVerpakkingen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_SOORTEN_VERPAKKINGEN, $thesaurusitemSoortenVerpakkingen, $comparison);
    }

    /**
     * Filter the query on the naam_op_verpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByNaamOpVerpakking('fooValue');   // WHERE naam_op_verpakking = 'fooValue'
     * $query->filterByNaamOpVerpakking('%fooValue%'); // WHERE naam_op_verpakking LIKE '%fooValue%'
     * </code>
     *
     * @param     string $naamOpVerpakking The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByNaamOpVerpakking($naamOpVerpakking = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($naamOpVerpakking)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $naamOpVerpakking)) {
                $naamOpVerpakking = str_replace('*', '%', $naamOpVerpakking);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::NAAM_OP_VERPAKKING, $naamOpVerpakking, $comparison);
    }

    /**
     * Filter the query on the onderscheidend_kenmerk column
     *
     * Example usage:
     * <code>
     * $query->filterByOnderscheidendKenmerk('fooValue');   // WHERE onderscheidend_kenmerk = 'fooValue'
     * $query->filterByOnderscheidendKenmerk('%fooValue%'); // WHERE onderscheidend_kenmerk LIKE '%fooValue%'
     * </code>
     *
     * @param     string $onderscheidendKenmerk The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByOnderscheidendKenmerk($onderscheidendKenmerk = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($onderscheidendKenmerk)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $onderscheidendKenmerk)) {
                $onderscheidendKenmerk = str_replace('*', '%', $onderscheidendKenmerk);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::ONDERSCHEIDEND_KENMERK, $onderscheidendKenmerk, $comparison);
    }

    /**
     * Filter the query on the startdatum_beschikbaarheid_verpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByStartdatumBeschikbaarheidVerpakking('2011-03-14'); // WHERE startdatum_beschikbaarheid_verpakking = '2011-03-14'
     * $query->filterByStartdatumBeschikbaarheidVerpakking('now'); // WHERE startdatum_beschikbaarheid_verpakking = '2011-03-14'
     * $query->filterByStartdatumBeschikbaarheidVerpakking(array('max' => 'yesterday')); // WHERE startdatum_beschikbaarheid_verpakking < '2011-03-13'
     * </code>
     *
     * @param     mixed $startdatumBeschikbaarheidVerpakking The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByStartdatumBeschikbaarheidVerpakking($startdatumBeschikbaarheidVerpakking = null, $comparison = null)
    {
        if (is_array($startdatumBeschikbaarheidVerpakking)) {
            $useMinMax = false;
            if (isset($startdatumBeschikbaarheidVerpakking['min'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::STARTDATUM_BESCHIKBAARHEID_VERPAKKING, $startdatumBeschikbaarheidVerpakking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($startdatumBeschikbaarheidVerpakking['max'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::STARTDATUM_BESCHIKBAARHEID_VERPAKKING, $startdatumBeschikbaarheidVerpakking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::STARTDATUM_BESCHIKBAARHEID_VERPAKKING, $startdatumBeschikbaarheidVerpakking, $comparison);
    }

    /**
     * Filter the query on the einddatum_beschikbaarheid_verpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByEinddatumBeschikbaarheidVerpakking('2011-03-14'); // WHERE einddatum_beschikbaarheid_verpakking = '2011-03-14'
     * $query->filterByEinddatumBeschikbaarheidVerpakking('now'); // WHERE einddatum_beschikbaarheid_verpakking = '2011-03-14'
     * $query->filterByEinddatumBeschikbaarheidVerpakking(array('max' => 'yesterday')); // WHERE einddatum_beschikbaarheid_verpakking < '2011-03-13'
     * </code>
     *
     * @param     mixed $einddatumBeschikbaarheidVerpakking The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByEinddatumBeschikbaarheidVerpakking($einddatumBeschikbaarheidVerpakking = null, $comparison = null)
    {
        if (is_array($einddatumBeschikbaarheidVerpakking)) {
            $useMinMax = false;
            if (isset($einddatumBeschikbaarheidVerpakking['min'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::EINDDATUM_BESCHIKBAARHEID_VERPAKKING, $einddatumBeschikbaarheidVerpakking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($einddatumBeschikbaarheidVerpakking['max'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::EINDDATUM_BESCHIKBAARHEID_VERPAKKING, $einddatumBeschikbaarheidVerpakking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::EINDDATUM_BESCHIKBAARHEID_VERPAKKING, $einddatumBeschikbaarheidVerpakking, $comparison);
    }

    /**
     * Filter the query on the gtin_van_het_verpakt_item column
     *
     * Example usage:
     * <code>
     * $query->filterByGtinVanHetVerpaktItem(1234); // WHERE gtin_van_het_verpakt_item = 1234
     * $query->filterByGtinVanHetVerpaktItem(array(12, 34)); // WHERE gtin_van_het_verpakt_item IN (12, 34)
     * $query->filterByGtinVanHetVerpaktItem(array('min' => 12)); // WHERE gtin_van_het_verpakt_item >= 12
     * $query->filterByGtinVanHetVerpaktItem(array('max' => 12)); // WHERE gtin_van_het_verpakt_item <= 12
     * </code>
     *
     * @param     mixed $gtinVanHetVerpaktItem The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByGtinVanHetVerpaktItem($gtinVanHetVerpaktItem = null, $comparison = null)
    {
        if (is_array($gtinVanHetVerpaktItem)) {
            $useMinMax = false;
            if (isset($gtinVanHetVerpaktItem['min'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM, $gtinVanHetVerpaktItem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gtinVanHetVerpaktItem['max'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM, $gtinVanHetVerpaktItem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM, $gtinVanHetVerpaktItem, $comparison);
    }

    /**
     * Filter the query on the aantal_van_het_verpakt_item column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalVanHetVerpaktItem(1234); // WHERE aantal_van_het_verpakt_item = 1234
     * $query->filterByAantalVanHetVerpaktItem(array(12, 34)); // WHERE aantal_van_het_verpakt_item IN (12, 34)
     * $query->filterByAantalVanHetVerpaktItem(array('min' => 12)); // WHERE aantal_van_het_verpakt_item >= 12
     * $query->filterByAantalVanHetVerpaktItem(array('max' => 12)); // WHERE aantal_van_het_verpakt_item <= 12
     * </code>
     *
     * @param     mixed $aantalVanHetVerpaktItem The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByAantalVanHetVerpaktItem($aantalVanHetVerpaktItem = null, $comparison = null)
    {
        if (is_array($aantalVanHetVerpaktItem)) {
            $useMinMax = false;
            if (isset($aantalVanHetVerpaktItem['min'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::AANTAL_VAN_HET_VERPAKT_ITEM, $aantalVanHetVerpaktItem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalVanHetVerpaktItem['max'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::AANTAL_VAN_HET_VERPAKT_ITEM, $aantalVanHetVerpaktItem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::AANTAL_VAN_HET_VERPAKT_ITEM, $aantalVanHetVerpaktItem, $comparison);
    }

    /**
     * Filter the query on the thesaurus_met_items_van_eenheden column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusMetItemsVanEenheden(1234); // WHERE thesaurus_met_items_van_eenheden = 1234
     * $query->filterByThesaurusMetItemsVanEenheden(array(12, 34)); // WHERE thesaurus_met_items_van_eenheden IN (12, 34)
     * $query->filterByThesaurusMetItemsVanEenheden(array('min' => 12)); // WHERE thesaurus_met_items_van_eenheden >= 12
     * $query->filterByThesaurusMetItemsVanEenheden(array('max' => 12)); // WHERE thesaurus_met_items_van_eenheden <= 12
     * </code>
     *
     * @see       filterByHoogteEenheidOmschrijving()
     *
     * @see       filterByDiepteEenheidOmschrijving()
     *
     * @see       filterByBreedteEenheidOmschrijving()
     *
     * @param     mixed $thesaurusMetItemsVanEenheden The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByThesaurusMetItemsVanEenheden($thesaurusMetItemsVanEenheden = null, $comparison = null)
    {
        if (is_array($thesaurusMetItemsVanEenheden)) {
            $useMinMax = false;
            if (isset($thesaurusMetItemsVanEenheden['min'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, $thesaurusMetItemsVanEenheden['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusMetItemsVanEenheden['max'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, $thesaurusMetItemsVanEenheden['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, $thesaurusMetItemsVanEenheden, $comparison);
    }

    /**
     * Filter the query on the hoogte_van_verpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByHoogteVanVerpakking(1234); // WHERE hoogte_van_verpakking = 1234
     * $query->filterByHoogteVanVerpakking(array(12, 34)); // WHERE hoogte_van_verpakking IN (12, 34)
     * $query->filterByHoogteVanVerpakking(array('min' => 12)); // WHERE hoogte_van_verpakking >= 12
     * $query->filterByHoogteVanVerpakking(array('max' => 12)); // WHERE hoogte_van_verpakking <= 12
     * </code>
     *
     * @param     mixed $hoogteVanVerpakking The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByHoogteVanVerpakking($hoogteVanVerpakking = null, $comparison = null)
    {
        if (is_array($hoogteVanVerpakking)) {
            $useMinMax = false;
            if (isset($hoogteVanVerpakking['min'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::HOOGTE_VAN_VERPAKKING, $hoogteVanVerpakking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hoogteVanVerpakking['max'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::HOOGTE_VAN_VERPAKKING, $hoogteVanVerpakking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::HOOGTE_VAN_VERPAKKING, $hoogteVanVerpakking, $comparison);
    }

    /**
     * Filter the query on the thesaurusitem_van_eenheid_hoogte column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusitemVanEenheidHoogte(1234); // WHERE thesaurusitem_van_eenheid_hoogte = 1234
     * $query->filterByThesaurusitemVanEenheidHoogte(array(12, 34)); // WHERE thesaurusitem_van_eenheid_hoogte IN (12, 34)
     * $query->filterByThesaurusitemVanEenheidHoogte(array('min' => 12)); // WHERE thesaurusitem_van_eenheid_hoogte >= 12
     * $query->filterByThesaurusitemVanEenheidHoogte(array('max' => 12)); // WHERE thesaurusitem_van_eenheid_hoogte <= 12
     * </code>
     *
     * @see       filterByHoogteEenheidOmschrijving()
     *
     * @param     mixed $thesaurusitemVanEenheidHoogte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByThesaurusitemVanEenheidHoogte($thesaurusitemVanEenheidHoogte = null, $comparison = null)
    {
        if (is_array($thesaurusitemVanEenheidHoogte)) {
            $useMinMax = false;
            if (isset($thesaurusitemVanEenheidHoogte['min'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_HOOGTE, $thesaurusitemVanEenheidHoogte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusitemVanEenheidHoogte['max'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_HOOGTE, $thesaurusitemVanEenheidHoogte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_HOOGTE, $thesaurusitemVanEenheidHoogte, $comparison);
    }

    /**
     * Filter the query on the breedte_van_verpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByBreedteVanVerpakking(1234); // WHERE breedte_van_verpakking = 1234
     * $query->filterByBreedteVanVerpakking(array(12, 34)); // WHERE breedte_van_verpakking IN (12, 34)
     * $query->filterByBreedteVanVerpakking(array('min' => 12)); // WHERE breedte_van_verpakking >= 12
     * $query->filterByBreedteVanVerpakking(array('max' => 12)); // WHERE breedte_van_verpakking <= 12
     * </code>
     *
     * @param     mixed $breedteVanVerpakking The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByBreedteVanVerpakking($breedteVanVerpakking = null, $comparison = null)
    {
        if (is_array($breedteVanVerpakking)) {
            $useMinMax = false;
            if (isset($breedteVanVerpakking['min'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::BREEDTE_VAN_VERPAKKING, $breedteVanVerpakking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($breedteVanVerpakking['max'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::BREEDTE_VAN_VERPAKKING, $breedteVanVerpakking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::BREEDTE_VAN_VERPAKKING, $breedteVanVerpakking, $comparison);
    }

    /**
     * Filter the query on the thesaurusitem_van_eenheid_breedte column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusitemVanEenheidBreedte(1234); // WHERE thesaurusitem_van_eenheid_breedte = 1234
     * $query->filterByThesaurusitemVanEenheidBreedte(array(12, 34)); // WHERE thesaurusitem_van_eenheid_breedte IN (12, 34)
     * $query->filterByThesaurusitemVanEenheidBreedte(array('min' => 12)); // WHERE thesaurusitem_van_eenheid_breedte >= 12
     * $query->filterByThesaurusitemVanEenheidBreedte(array('max' => 12)); // WHERE thesaurusitem_van_eenheid_breedte <= 12
     * </code>
     *
     * @see       filterByBreedteEenheidOmschrijving()
     *
     * @param     mixed $thesaurusitemVanEenheidBreedte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByThesaurusitemVanEenheidBreedte($thesaurusitemVanEenheidBreedte = null, $comparison = null)
    {
        if (is_array($thesaurusitemVanEenheidBreedte)) {
            $useMinMax = false;
            if (isset($thesaurusitemVanEenheidBreedte['min'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_BREEDTE, $thesaurusitemVanEenheidBreedte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusitemVanEenheidBreedte['max'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_BREEDTE, $thesaurusitemVanEenheidBreedte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_BREEDTE, $thesaurusitemVanEenheidBreedte, $comparison);
    }

    /**
     * Filter the query on the diepte_van_verpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByDiepteVanVerpakking(1234); // WHERE diepte_van_verpakking = 1234
     * $query->filterByDiepteVanVerpakking(array(12, 34)); // WHERE diepte_van_verpakking IN (12, 34)
     * $query->filterByDiepteVanVerpakking(array('min' => 12)); // WHERE diepte_van_verpakking >= 12
     * $query->filterByDiepteVanVerpakking(array('max' => 12)); // WHERE diepte_van_verpakking <= 12
     * </code>
     *
     * @param     mixed $diepteVanVerpakking The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByDiepteVanVerpakking($diepteVanVerpakking = null, $comparison = null)
    {
        if (is_array($diepteVanVerpakking)) {
            $useMinMax = false;
            if (isset($diepteVanVerpakking['min'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::DIEPTE_VAN_VERPAKKING, $diepteVanVerpakking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diepteVanVerpakking['max'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::DIEPTE_VAN_VERPAKKING, $diepteVanVerpakking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::DIEPTE_VAN_VERPAKKING, $diepteVanVerpakking, $comparison);
    }

    /**
     * Filter the query on the thesaurusitem_van_eenheid_diepte column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusitemVanEenheidDiepte(1234); // WHERE thesaurusitem_van_eenheid_diepte = 1234
     * $query->filterByThesaurusitemVanEenheidDiepte(array(12, 34)); // WHERE thesaurusitem_van_eenheid_diepte IN (12, 34)
     * $query->filterByThesaurusitemVanEenheidDiepte(array('min' => 12)); // WHERE thesaurusitem_van_eenheid_diepte >= 12
     * $query->filterByThesaurusitemVanEenheidDiepte(array('max' => 12)); // WHERE thesaurusitem_van_eenheid_diepte <= 12
     * </code>
     *
     * @see       filterByDiepteEenheidOmschrijving()
     *
     * @param     mixed $thesaurusitemVanEenheidDiepte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function filterByThesaurusitemVanEenheidDiepte($thesaurusitemVanEenheidDiepte = null, $comparison = null)
    {
        if (is_array($thesaurusitemVanEenheidDiepte)) {
            $useMinMax = false;
            if (isset($thesaurusitemVanEenheidDiepte['min'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_DIEPTE, $thesaurusitemVanEenheidDiepte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusitemVanEenheidDiepte['max'])) {
                $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_DIEPTE, $thesaurusitemVanEenheidDiepte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_DIEPTE, $thesaurusitemVanEenheidDiepte, $comparison);
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySoortenVerpakkingOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_SOORTEN_VERPAKKINGEN, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_SOORTEN_VERPAKKINGEN, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterBySoortenVerpakkingOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoortenVerpakkingOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function joinSoortenVerpakkingOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SoortenVerpakkingOmschrijving');

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
            $this->addJoinObject($join, 'SoortenVerpakkingOmschrijving');
        }

        return $this;
    }

    /**
     * Use the SoortenVerpakkingOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useSoortenVerpakkingOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSoortenVerpakkingOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SoortenVerpakkingOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByHoogteEenheidOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_HOOGTE, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByHoogteEenheidOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the HoogteEenheidOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function joinHoogteEenheidOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('HoogteEenheidOmschrijving');

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
            $this->addJoinObject($join, 'HoogteEenheidOmschrijving');
        }

        return $this;
    }

    /**
     * Use the HoogteEenheidOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useHoogteEenheidOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinHoogteEenheidOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'HoogteEenheidOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDiepteEenheidOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_DIEPTE, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByDiepteEenheidOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DiepteEenheidOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function joinDiepteEenheidOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DiepteEenheidOmschrijving');

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
            $this->addJoinObject($join, 'DiepteEenheidOmschrijving');
        }

        return $this;
    }

    /**
     * Use the DiepteEenheidOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useDiepteEenheidOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinDiepteEenheidOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DiepteEenheidOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByBreedteEenheidOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUS_MET_ITEMS_VAN_EENHEDEN, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::THESAURUSITEM_VAN_EENHEID_BREEDTE, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByBreedteEenheidOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BreedteEenheidOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function joinBreedteEenheidOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BreedteEenheidOmschrijving');

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
            $this->addJoinObject($join, 'BreedteEenheidOmschrijving');
        }

        return $this;
    }

    /**
     * Use the BreedteEenheidOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useBreedteEenheidOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinBreedteEenheidOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BreedteEenheidOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelen($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, $gsArtikelen->getZinummer(), $comparison);
        } elseif ($gsArtikelen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsLogistiekeVerpakkingsinformatiePeer::ZINDEX_NUMMER, $gsArtikelen->toKeyValue('PrimaryKey', 'Zinummer'), $comparison);
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
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function joinGsArtikelen($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useGsArtikelenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsArtikelen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelen', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsLogistiekeVerpakkingsinformatie $gsLogistiekeVerpakkingsinformatie Object to remove from the list of results
     *
     * @return GsLogistiekeVerpakkingsinformatieQuery The current query, for fluid interface
     */
    public function prune($gsLogistiekeVerpakkingsinformatie = null)
    {
        if ($gsLogistiekeVerpakkingsinformatie) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsLogistiekeVerpakkingsinformatiePeer::GLN), $gsLogistiekeVerpakkingsinformatie->getGln(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsLogistiekeVerpakkingsinformatiePeer::GTIN), $gsLogistiekeVerpakkingsinformatie->getGtin(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsLogistiekeVerpakkingsinformatiePeer::GTIN_VAN_HET_VERPAKT_ITEM), $gsLogistiekeVerpakkingsinformatie->getGtinVanHetVerpaktItem(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
