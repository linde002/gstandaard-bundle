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
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodes;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProducten;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsNamen;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentific;

/**
 * @method GsGeneriekeProductenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsGeneriekeProductenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsGeneriekeProductenQuery orderByGeneriekeproductcode($order = Criteria::ASC) Order by the generiekeproductcode column
 * @method GsGeneriekeProductenQuery orderByGskcode($order = Criteria::ASC) Order by the gskcode column
 * @method GsGeneriekeProductenQuery orderByFarmaceutischeVormThesaurusnummer($order = Criteria::ASC) Order by the farmaceutische_vorm_thesaurusnummer column
 * @method GsGeneriekeProductenQuery orderByFarmaceutischeVormCode($order = Criteria::ASC) Order by the farmaceutische_vorm_code column
 * @method GsGeneriekeProductenQuery orderByToedieningswegThesaurusnummer($order = Criteria::ASC) Order by the toedieningsweg_thesaurusnummer column
 * @method GsGeneriekeProductenQuery orderByToedieningswegCode($order = Criteria::ASC) Order by the toedieningsweg_code column
 * @method GsGeneriekeProductenQuery orderByNaamnummerVolledigeGpknaam($order = Criteria::ASC) Order by the naamnummer_volledige_gpknaam column
 * @method GsGeneriekeProductenQuery orderByNaamnummerGpkstofnaam($order = Criteria::ASC) Order by the naamnummer_gpkstofnaam column
 * @method GsGeneriekeProductenQuery orderByIngegevenSterkteStofnamen($order = Criteria::ASC) Order by the ingegeven_sterkte_stofnamen column
 * @method GsGeneriekeProductenQuery orderByMinLeeftijdAlsContraindicatie($order = Criteria::ASC) Order by the min_leeftijd_als_contraindicatie column
 * @method GsGeneriekeProductenQuery orderByMinleeftijdAlsCiTekstnummer($order = Criteria::ASC) Order by the minleeftijd_als_ci_tekstnummer column
 * @method GsGeneriekeProductenQuery orderByAantalDagenVoorschrijfperiode($order = Criteria::ASC) Order by the aantal_dagen_voorschrijfperiode column
 * @method GsGeneriekeProductenQuery orderByTekstcodeVoorschrijfperiode($order = Criteria::ASC) Order by the tekstcode_voorschrijfperiode column
 * @method GsGeneriekeProductenQuery orderByTnnrWaarschuwingSubstitutieVoorschrijvenPrk($order = Criteria::ASC) Order by the tnnr_waarschuwing_substitutie_voorschrijven_prk column
 * @method GsGeneriekeProductenQuery orderByWaarschuwingSubstitutieEnVoorschrijvenPrk($order = Criteria::ASC) Order by the waarschuwing_substitutie_en_voorschrijven_prk column
 * @method GsGeneriekeProductenQuery orderBySuperproduktkode($order = Criteria::ASC) Order by the superproduktkode column
 * @method GsGeneriekeProductenQuery orderByStamtoedieningswegThesaurus58($order = Criteria::ASC) Order by the stamtoedieningsweg_thesaurus_58 column
 * @method GsGeneriekeProductenQuery orderByStamtoedieningswegCode($order = Criteria::ASC) Order by the stamtoedieningsweg_code column
 * @method GsGeneriekeProductenQuery orderByAtccode($order = Criteria::ASC) Order by the atccode column
 * @method GsGeneriekeProductenQuery orderByBasiseenheidProductThesaurusnr($order = Criteria::ASC) Order by the basiseenheid_product_thesaurusnr column
 * @method GsGeneriekeProductenQuery orderByBasiseenheidProductKode($order = Criteria::ASC) Order by the basiseenheid_product_kode column
 *
 * @method GsGeneriekeProductenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsGeneriekeProductenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsGeneriekeProductenQuery groupByGeneriekeproductcode() Group by the generiekeproductcode column
 * @method GsGeneriekeProductenQuery groupByGskcode() Group by the gskcode column
 * @method GsGeneriekeProductenQuery groupByFarmaceutischeVormThesaurusnummer() Group by the farmaceutische_vorm_thesaurusnummer column
 * @method GsGeneriekeProductenQuery groupByFarmaceutischeVormCode() Group by the farmaceutische_vorm_code column
 * @method GsGeneriekeProductenQuery groupByToedieningswegThesaurusnummer() Group by the toedieningsweg_thesaurusnummer column
 * @method GsGeneriekeProductenQuery groupByToedieningswegCode() Group by the toedieningsweg_code column
 * @method GsGeneriekeProductenQuery groupByNaamnummerVolledigeGpknaam() Group by the naamnummer_volledige_gpknaam column
 * @method GsGeneriekeProductenQuery groupByNaamnummerGpkstofnaam() Group by the naamnummer_gpkstofnaam column
 * @method GsGeneriekeProductenQuery groupByIngegevenSterkteStofnamen() Group by the ingegeven_sterkte_stofnamen column
 * @method GsGeneriekeProductenQuery groupByMinLeeftijdAlsContraindicatie() Group by the min_leeftijd_als_contraindicatie column
 * @method GsGeneriekeProductenQuery groupByMinleeftijdAlsCiTekstnummer() Group by the minleeftijd_als_ci_tekstnummer column
 * @method GsGeneriekeProductenQuery groupByAantalDagenVoorschrijfperiode() Group by the aantal_dagen_voorschrijfperiode column
 * @method GsGeneriekeProductenQuery groupByTekstcodeVoorschrijfperiode() Group by the tekstcode_voorschrijfperiode column
 * @method GsGeneriekeProductenQuery groupByTnnrWaarschuwingSubstitutieVoorschrijvenPrk() Group by the tnnr_waarschuwing_substitutie_voorschrijven_prk column
 * @method GsGeneriekeProductenQuery groupByWaarschuwingSubstitutieEnVoorschrijvenPrk() Group by the waarschuwing_substitutie_en_voorschrijven_prk column
 * @method GsGeneriekeProductenQuery groupBySuperproduktkode() Group by the superproduktkode column
 * @method GsGeneriekeProductenQuery groupByStamtoedieningswegThesaurus58() Group by the stamtoedieningsweg_thesaurus_58 column
 * @method GsGeneriekeProductenQuery groupByStamtoedieningswegCode() Group by the stamtoedieningsweg_code column
 * @method GsGeneriekeProductenQuery groupByAtccode() Group by the atccode column
 * @method GsGeneriekeProductenQuery groupByBasiseenheidProductThesaurusnr() Group by the basiseenheid_product_thesaurusnr column
 * @method GsGeneriekeProductenQuery groupByBasiseenheidProductKode() Group by the basiseenheid_product_kode column
 *
 * @method GsGeneriekeProductenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsGeneriekeProductenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsGeneriekeProductenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsGeneriekeProductenQuery leftJoinGsAtcCodes($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsAtcCodes relation
 * @method GsGeneriekeProductenQuery rightJoinGsAtcCodes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsAtcCodes relation
 * @method GsGeneriekeProductenQuery innerJoinGsAtcCodes($relationAlias = null) Adds a INNER JOIN clause to the query using the GsAtcCodes relation
 *
 * @method GsGeneriekeProductenQuery leftJoinGsNamenRelatedByNaamnummerVolledigeGpknaam($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsNamenRelatedByNaamnummerVolledigeGpknaam relation
 * @method GsGeneriekeProductenQuery rightJoinGsNamenRelatedByNaamnummerVolledigeGpknaam($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsNamenRelatedByNaamnummerVolledigeGpknaam relation
 * @method GsGeneriekeProductenQuery innerJoinGsNamenRelatedByNaamnummerVolledigeGpknaam($relationAlias = null) Adds a INNER JOIN clause to the query using the GsNamenRelatedByNaamnummerVolledigeGpknaam relation
 *
 * @method GsGeneriekeProductenQuery leftJoinStofnaam($relationAlias = null) Adds a LEFT JOIN clause to the query using the Stofnaam relation
 * @method GsGeneriekeProductenQuery rightJoinStofnaam($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Stofnaam relation
 * @method GsGeneriekeProductenQuery innerJoinStofnaam($relationAlias = null) Adds a INNER JOIN clause to the query using the Stofnaam relation
 *
 * @method GsGeneriekeProductenQuery leftJoinFarmaceutischeVormOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the FarmaceutischeVormOmschrijving relation
 * @method GsGeneriekeProductenQuery rightJoinFarmaceutischeVormOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FarmaceutischeVormOmschrijving relation
 * @method GsGeneriekeProductenQuery innerJoinFarmaceutischeVormOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the FarmaceutischeVormOmschrijving relation
 *
 * @method GsGeneriekeProductenQuery leftJoinToedieningswegOmschrijving($relationAlias = null) Adds a LEFT JOIN clause to the query using the ToedieningswegOmschrijving relation
 * @method GsGeneriekeProductenQuery rightJoinToedieningswegOmschrijving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ToedieningswegOmschrijving relation
 * @method GsGeneriekeProductenQuery innerJoinToedieningswegOmschrijving($relationAlias = null) Adds a INNER JOIN clause to the query using the ToedieningswegOmschrijving relation
 *
 * @method GsGeneriekeProductenQuery leftJoinGsArtikelEigenschappen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelEigenschappen relation
 * @method GsGeneriekeProductenQuery rightJoinGsArtikelEigenschappen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelEigenschappen relation
 * @method GsGeneriekeProductenQuery innerJoinGsArtikelEigenschappen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelEigenschappen relation
 *
 * @method GsGeneriekeProductenQuery leftJoinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
 * @method GsGeneriekeProductenQuery rightJoinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
 * @method GsGeneriekeProductenQuery innerJoinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null) Adds a INNER JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
 *
 * @method GsGeneriekeProducten findOne(PropelPDO $con = null) Return the first GsGeneriekeProducten matching the query
 * @method GsGeneriekeProducten findOneOrCreate(PropelPDO $con = null) Return the first GsGeneriekeProducten matching the query, or a new GsGeneriekeProducten object populated from the query conditions when no match is found
 *
 * @method GsGeneriekeProducten findOneByBestandnummer(int $bestandnummer) Return the first GsGeneriekeProducten filtered by the bestandnummer column
 * @method GsGeneriekeProducten findOneByMutatiekode(int $mutatiekode) Return the first GsGeneriekeProducten filtered by the mutatiekode column
 * @method GsGeneriekeProducten findOneByGskcode(int $gskcode) Return the first GsGeneriekeProducten filtered by the gskcode column
 * @method GsGeneriekeProducten findOneByFarmaceutischeVormThesaurusnummer(int $farmaceutische_vorm_thesaurusnummer) Return the first GsGeneriekeProducten filtered by the farmaceutische_vorm_thesaurusnummer column
 * @method GsGeneriekeProducten findOneByFarmaceutischeVormCode(int $farmaceutische_vorm_code) Return the first GsGeneriekeProducten filtered by the farmaceutische_vorm_code column
 * @method GsGeneriekeProducten findOneByToedieningswegThesaurusnummer(int $toedieningsweg_thesaurusnummer) Return the first GsGeneriekeProducten filtered by the toedieningsweg_thesaurusnummer column
 * @method GsGeneriekeProducten findOneByToedieningswegCode(int $toedieningsweg_code) Return the first GsGeneriekeProducten filtered by the toedieningsweg_code column
 * @method GsGeneriekeProducten findOneByNaamnummerVolledigeGpknaam(int $naamnummer_volledige_gpknaam) Return the first GsGeneriekeProducten filtered by the naamnummer_volledige_gpknaam column
 * @method GsGeneriekeProducten findOneByNaamnummerGpkstofnaam(int $naamnummer_gpkstofnaam) Return the first GsGeneriekeProducten filtered by the naamnummer_gpkstofnaam column
 * @method GsGeneriekeProducten findOneByIngegevenSterkteStofnamen(string $ingegeven_sterkte_stofnamen) Return the first GsGeneriekeProducten filtered by the ingegeven_sterkte_stofnamen column
 * @method GsGeneriekeProducten findOneByMinLeeftijdAlsContraindicatie(int $min_leeftijd_als_contraindicatie) Return the first GsGeneriekeProducten filtered by the min_leeftijd_als_contraindicatie column
 * @method GsGeneriekeProducten findOneByMinleeftijdAlsCiTekstnummer(int $minleeftijd_als_ci_tekstnummer) Return the first GsGeneriekeProducten filtered by the minleeftijd_als_ci_tekstnummer column
 * @method GsGeneriekeProducten findOneByAantalDagenVoorschrijfperiode(int $aantal_dagen_voorschrijfperiode) Return the first GsGeneriekeProducten filtered by the aantal_dagen_voorschrijfperiode column
 * @method GsGeneriekeProducten findOneByTekstcodeVoorschrijfperiode(int $tekstcode_voorschrijfperiode) Return the first GsGeneriekeProducten filtered by the tekstcode_voorschrijfperiode column
 * @method GsGeneriekeProducten findOneByTnnrWaarschuwingSubstitutieVoorschrijvenPrk(int $tnnr_waarschuwing_substitutie_voorschrijven_prk) Return the first GsGeneriekeProducten filtered by the tnnr_waarschuwing_substitutie_voorschrijven_prk column
 * @method GsGeneriekeProducten findOneByWaarschuwingSubstitutieEnVoorschrijvenPrk(int $waarschuwing_substitutie_en_voorschrijven_prk) Return the first GsGeneriekeProducten filtered by the waarschuwing_substitutie_en_voorschrijven_prk column
 * @method GsGeneriekeProducten findOneBySuperproduktkode(int $superproduktkode) Return the first GsGeneriekeProducten filtered by the superproduktkode column
 * @method GsGeneriekeProducten findOneByStamtoedieningswegThesaurus58(int $stamtoedieningsweg_thesaurus_58) Return the first GsGeneriekeProducten filtered by the stamtoedieningsweg_thesaurus_58 column
 * @method GsGeneriekeProducten findOneByStamtoedieningswegCode(int $stamtoedieningsweg_code) Return the first GsGeneriekeProducten filtered by the stamtoedieningsweg_code column
 * @method GsGeneriekeProducten findOneByAtccode(string $atccode) Return the first GsGeneriekeProducten filtered by the atccode column
 * @method GsGeneriekeProducten findOneByBasiseenheidProductThesaurusnr(int $basiseenheid_product_thesaurusnr) Return the first GsGeneriekeProducten filtered by the basiseenheid_product_thesaurusnr column
 * @method GsGeneriekeProducten findOneByBasiseenheidProductKode(int $basiseenheid_product_kode) Return the first GsGeneriekeProducten filtered by the basiseenheid_product_kode column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsGeneriekeProducten objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsGeneriekeProducten objects filtered by the mutatiekode column
 * @method array findByGeneriekeproductcode(int $generiekeproductcode) Return GsGeneriekeProducten objects filtered by the generiekeproductcode column
 * @method array findByGskcode(int $gskcode) Return GsGeneriekeProducten objects filtered by the gskcode column
 * @method array findByFarmaceutischeVormThesaurusnummer(int $farmaceutische_vorm_thesaurusnummer) Return GsGeneriekeProducten objects filtered by the farmaceutische_vorm_thesaurusnummer column
 * @method array findByFarmaceutischeVormCode(int $farmaceutische_vorm_code) Return GsGeneriekeProducten objects filtered by the farmaceutische_vorm_code column
 * @method array findByToedieningswegThesaurusnummer(int $toedieningsweg_thesaurusnummer) Return GsGeneriekeProducten objects filtered by the toedieningsweg_thesaurusnummer column
 * @method array findByToedieningswegCode(int $toedieningsweg_code) Return GsGeneriekeProducten objects filtered by the toedieningsweg_code column
 * @method array findByNaamnummerVolledigeGpknaam(int $naamnummer_volledige_gpknaam) Return GsGeneriekeProducten objects filtered by the naamnummer_volledige_gpknaam column
 * @method array findByNaamnummerGpkstofnaam(int $naamnummer_gpkstofnaam) Return GsGeneriekeProducten objects filtered by the naamnummer_gpkstofnaam column
 * @method array findByIngegevenSterkteStofnamen(string $ingegeven_sterkte_stofnamen) Return GsGeneriekeProducten objects filtered by the ingegeven_sterkte_stofnamen column
 * @method array findByMinLeeftijdAlsContraindicatie(int $min_leeftijd_als_contraindicatie) Return GsGeneriekeProducten objects filtered by the min_leeftijd_als_contraindicatie column
 * @method array findByMinleeftijdAlsCiTekstnummer(int $minleeftijd_als_ci_tekstnummer) Return GsGeneriekeProducten objects filtered by the minleeftijd_als_ci_tekstnummer column
 * @method array findByAantalDagenVoorschrijfperiode(int $aantal_dagen_voorschrijfperiode) Return GsGeneriekeProducten objects filtered by the aantal_dagen_voorschrijfperiode column
 * @method array findByTekstcodeVoorschrijfperiode(int $tekstcode_voorschrijfperiode) Return GsGeneriekeProducten objects filtered by the tekstcode_voorschrijfperiode column
 * @method array findByTnnrWaarschuwingSubstitutieVoorschrijvenPrk(int $tnnr_waarschuwing_substitutie_voorschrijven_prk) Return GsGeneriekeProducten objects filtered by the tnnr_waarschuwing_substitutie_voorschrijven_prk column
 * @method array findByWaarschuwingSubstitutieEnVoorschrijvenPrk(int $waarschuwing_substitutie_en_voorschrijven_prk) Return GsGeneriekeProducten objects filtered by the waarschuwing_substitutie_en_voorschrijven_prk column
 * @method array findBySuperproduktkode(int $superproduktkode) Return GsGeneriekeProducten objects filtered by the superproduktkode column
 * @method array findByStamtoedieningswegThesaurus58(int $stamtoedieningsweg_thesaurus_58) Return GsGeneriekeProducten objects filtered by the stamtoedieningsweg_thesaurus_58 column
 * @method array findByStamtoedieningswegCode(int $stamtoedieningsweg_code) Return GsGeneriekeProducten objects filtered by the stamtoedieningsweg_code column
 * @method array findByAtccode(string $atccode) Return GsGeneriekeProducten objects filtered by the atccode column
 * @method array findByBasiseenheidProductThesaurusnr(int $basiseenheid_product_thesaurusnr) Return GsGeneriekeProducten objects filtered by the basiseenheid_product_thesaurusnr column
 * @method array findByBasiseenheidProductKode(int $basiseenheid_product_kode) Return GsGeneriekeProducten objects filtered by the basiseenheid_product_kode column
 */
abstract class BaseGsGeneriekeProductenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsGeneriekeProductenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeProducten';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsGeneriekeProductenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsGeneriekeProductenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsGeneriekeProductenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsGeneriekeProductenQuery) {
            return $criteria;
        }
        $query = new GsGeneriekeProductenQuery(null, null, $modelAlias);

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
     * @return   GsGeneriekeProducten|GsGeneriekeProducten[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsGeneriekeProductenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsGeneriekeProductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsGeneriekeProducten A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByGeneriekeproductcode($key, $con = null)
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
     * @return                 GsGeneriekeProducten A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `generiekeproductcode`, `gskcode`, `farmaceutische_vorm_thesaurusnummer`, `farmaceutische_vorm_code`, `toedieningsweg_thesaurusnummer`, `toedieningsweg_code`, `naamnummer_volledige_gpknaam`, `naamnummer_gpkstofnaam`, `ingegeven_sterkte_stofnamen`, `min_leeftijd_als_contraindicatie`, `minleeftijd_als_ci_tekstnummer`, `aantal_dagen_voorschrijfperiode`, `tekstcode_voorschrijfperiode`, `tnnr_waarschuwing_substitutie_voorschrijven_prk`, `waarschuwing_substitutie_en_voorschrijven_prk`, `superproduktkode`, `stamtoedieningsweg_thesaurus_58`, `stamtoedieningsweg_code`, `atccode`, `basiseenheid_product_thesaurusnr`, `basiseenheid_product_kode` FROM `gs_generieke_producten` WHERE `generiekeproductcode` = :p0';
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
            $obj = new GsGeneriekeProducten();
            $obj->hydrate($row);
            GsGeneriekeProductenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsGeneriekeProducten|GsGeneriekeProducten[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsGeneriekeProducten[]|mixed the list of results, formatted by the current formatter
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
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $keys, Criteria::IN);
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
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the generiekeproductcode column
     *
     * Example usage:
     * <code>
     * $query->filterByGeneriekeproductcode(1234); // WHERE generiekeproductcode = 1234
     * $query->filterByGeneriekeproductcode(array(12, 34)); // WHERE generiekeproductcode IN (12, 34)
     * $query->filterByGeneriekeproductcode(array('min' => 12)); // WHERE generiekeproductcode >= 12
     * $query->filterByGeneriekeproductcode(array('max' => 12)); // WHERE generiekeproductcode <= 12
     * </code>
     *
     * @param     mixed $generiekeproductcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByGeneriekeproductcode($generiekeproductcode = null, $comparison = null)
    {
        if (is_array($generiekeproductcode)) {
            $useMinMax = false;
            if (isset($generiekeproductcode['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($generiekeproductcode['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $generiekeproductcode, $comparison);
    }

    /**
     * Filter the query on the gskcode column
     *
     * Example usage:
     * <code>
     * $query->filterByGskcode(1234); // WHERE gskcode = 1234
     * $query->filterByGskcode(array(12, 34)); // WHERE gskcode IN (12, 34)
     * $query->filterByGskcode(array('min' => 12)); // WHERE gskcode >= 12
     * $query->filterByGskcode(array('max' => 12)); // WHERE gskcode <= 12
     * </code>
     *
     * @param     mixed $gskcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByGskcode($gskcode = null, $comparison = null)
    {
        if (is_array($gskcode)) {
            $useMinMax = false;
            if (isset($gskcode['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::GSKCODE, $gskcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gskcode['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::GSKCODE, $gskcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::GSKCODE, $gskcode, $comparison);
    }

    /**
     * Filter the query on the farmaceutische_vorm_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByFarmaceutischeVormThesaurusnummer(1234); // WHERE farmaceutische_vorm_thesaurusnummer = 1234
     * $query->filterByFarmaceutischeVormThesaurusnummer(array(12, 34)); // WHERE farmaceutische_vorm_thesaurusnummer IN (12, 34)
     * $query->filterByFarmaceutischeVormThesaurusnummer(array('min' => 12)); // WHERE farmaceutische_vorm_thesaurusnummer >= 12
     * $query->filterByFarmaceutischeVormThesaurusnummer(array('max' => 12)); // WHERE farmaceutische_vorm_thesaurusnummer <= 12
     * </code>
     *
     * @see       filterByFarmaceutischeVormOmschrijving()
     *
     * @param     mixed $farmaceutischeVormThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByFarmaceutischeVormThesaurusnummer($farmaceutischeVormThesaurusnummer = null, $comparison = null)
    {
        if (is_array($farmaceutischeVormThesaurusnummer)) {
            $useMinMax = false;
            if (isset($farmaceutischeVormThesaurusnummer['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER, $farmaceutischeVormThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($farmaceutischeVormThesaurusnummer['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER, $farmaceutischeVormThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER, $farmaceutischeVormThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the farmaceutische_vorm_code column
     *
     * Example usage:
     * <code>
     * $query->filterByFarmaceutischeVormCode(1234); // WHERE farmaceutische_vorm_code = 1234
     * $query->filterByFarmaceutischeVormCode(array(12, 34)); // WHERE farmaceutische_vorm_code IN (12, 34)
     * $query->filterByFarmaceutischeVormCode(array('min' => 12)); // WHERE farmaceutische_vorm_code >= 12
     * $query->filterByFarmaceutischeVormCode(array('max' => 12)); // WHERE farmaceutische_vorm_code <= 12
     * </code>
     *
     * @see       filterByFarmaceutischeVormOmschrijving()
     *
     * @param     mixed $farmaceutischeVormCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByFarmaceutischeVormCode($farmaceutischeVormCode = null, $comparison = null)
    {
        if (is_array($farmaceutischeVormCode)) {
            $useMinMax = false;
            if (isset($farmaceutischeVormCode['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE, $farmaceutischeVormCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($farmaceutischeVormCode['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE, $farmaceutischeVormCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE, $farmaceutischeVormCode, $comparison);
    }

    /**
     * Filter the query on the toedieningsweg_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByToedieningswegThesaurusnummer(1234); // WHERE toedieningsweg_thesaurusnummer = 1234
     * $query->filterByToedieningswegThesaurusnummer(array(12, 34)); // WHERE toedieningsweg_thesaurusnummer IN (12, 34)
     * $query->filterByToedieningswegThesaurusnummer(array('min' => 12)); // WHERE toedieningsweg_thesaurusnummer >= 12
     * $query->filterByToedieningswegThesaurusnummer(array('max' => 12)); // WHERE toedieningsweg_thesaurusnummer <= 12
     * </code>
     *
     * @see       filterByToedieningswegOmschrijving()
     *
     * @param     mixed $toedieningswegThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByToedieningswegThesaurusnummer($toedieningswegThesaurusnummer = null, $comparison = null)
    {
        if (is_array($toedieningswegThesaurusnummer)) {
            $useMinMax = false;
            if (isset($toedieningswegThesaurusnummer['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER, $toedieningswegThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($toedieningswegThesaurusnummer['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER, $toedieningswegThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER, $toedieningswegThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the toedieningsweg_code column
     *
     * Example usage:
     * <code>
     * $query->filterByToedieningswegCode(1234); // WHERE toedieningsweg_code = 1234
     * $query->filterByToedieningswegCode(array(12, 34)); // WHERE toedieningsweg_code IN (12, 34)
     * $query->filterByToedieningswegCode(array('min' => 12)); // WHERE toedieningsweg_code >= 12
     * $query->filterByToedieningswegCode(array('max' => 12)); // WHERE toedieningsweg_code <= 12
     * </code>
     *
     * @see       filterByToedieningswegOmschrijving()
     *
     * @param     mixed $toedieningswegCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByToedieningswegCode($toedieningswegCode = null, $comparison = null)
    {
        if (is_array($toedieningswegCode)) {
            $useMinMax = false;
            if (isset($toedieningswegCode['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE, $toedieningswegCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($toedieningswegCode['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE, $toedieningswegCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE, $toedieningswegCode, $comparison);
    }

    /**
     * Filter the query on the naamnummer_volledige_gpknaam column
     *
     * Example usage:
     * <code>
     * $query->filterByNaamnummerVolledigeGpknaam(1234); // WHERE naamnummer_volledige_gpknaam = 1234
     * $query->filterByNaamnummerVolledigeGpknaam(array(12, 34)); // WHERE naamnummer_volledige_gpknaam IN (12, 34)
     * $query->filterByNaamnummerVolledigeGpknaam(array('min' => 12)); // WHERE naamnummer_volledige_gpknaam >= 12
     * $query->filterByNaamnummerVolledigeGpknaam(array('max' => 12)); // WHERE naamnummer_volledige_gpknaam <= 12
     * </code>
     *
     * @see       filterByGsNamenRelatedByNaamnummerVolledigeGpknaam()
     *
     * @param     mixed $naamnummerVolledigeGpknaam The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByNaamnummerVolledigeGpknaam($naamnummerVolledigeGpknaam = null, $comparison = null)
    {
        if (is_array($naamnummerVolledigeGpknaam)) {
            $useMinMax = false;
            if (isset($naamnummerVolledigeGpknaam['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM, $naamnummerVolledigeGpknaam['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($naamnummerVolledigeGpknaam['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM, $naamnummerVolledigeGpknaam['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM, $naamnummerVolledigeGpknaam, $comparison);
    }

    /**
     * Filter the query on the naamnummer_gpkstofnaam column
     *
     * Example usage:
     * <code>
     * $query->filterByNaamnummerGpkstofnaam(1234); // WHERE naamnummer_gpkstofnaam = 1234
     * $query->filterByNaamnummerGpkstofnaam(array(12, 34)); // WHERE naamnummer_gpkstofnaam IN (12, 34)
     * $query->filterByNaamnummerGpkstofnaam(array('min' => 12)); // WHERE naamnummer_gpkstofnaam >= 12
     * $query->filterByNaamnummerGpkstofnaam(array('max' => 12)); // WHERE naamnummer_gpkstofnaam <= 12
     * </code>
     *
     * @see       filterByStofnaam()
     *
     * @param     mixed $naamnummerGpkstofnaam The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByNaamnummerGpkstofnaam($naamnummerGpkstofnaam = null, $comparison = null)
    {
        if (is_array($naamnummerGpkstofnaam)) {
            $useMinMax = false;
            if (isset($naamnummerGpkstofnaam['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM, $naamnummerGpkstofnaam['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($naamnummerGpkstofnaam['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM, $naamnummerGpkstofnaam['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM, $naamnummerGpkstofnaam, $comparison);
    }

    /**
     * Filter the query on the ingegeven_sterkte_stofnamen column
     *
     * Example usage:
     * <code>
     * $query->filterByIngegevenSterkteStofnamen('fooValue');   // WHERE ingegeven_sterkte_stofnamen = 'fooValue'
     * $query->filterByIngegevenSterkteStofnamen('%fooValue%'); // WHERE ingegeven_sterkte_stofnamen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ingegevenSterkteStofnamen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByIngegevenSterkteStofnamen($ingegevenSterkteStofnamen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ingegevenSterkteStofnamen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ingegevenSterkteStofnamen)) {
                $ingegevenSterkteStofnamen = str_replace('*', '%', $ingegevenSterkteStofnamen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::INGEGEVEN_STERKTE_STOFNAMEN, $ingegevenSterkteStofnamen, $comparison);
    }

    /**
     * Filter the query on the min_leeftijd_als_contraindicatie column
     *
     * Example usage:
     * <code>
     * $query->filterByMinLeeftijdAlsContraindicatie(1234); // WHERE min_leeftijd_als_contraindicatie = 1234
     * $query->filterByMinLeeftijdAlsContraindicatie(array(12, 34)); // WHERE min_leeftijd_als_contraindicatie IN (12, 34)
     * $query->filterByMinLeeftijdAlsContraindicatie(array('min' => 12)); // WHERE min_leeftijd_als_contraindicatie >= 12
     * $query->filterByMinLeeftijdAlsContraindicatie(array('max' => 12)); // WHERE min_leeftijd_als_contraindicatie <= 12
     * </code>
     *
     * @param     mixed $minLeeftijdAlsContraindicatie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByMinLeeftijdAlsContraindicatie($minLeeftijdAlsContraindicatie = null, $comparison = null)
    {
        if (is_array($minLeeftijdAlsContraindicatie)) {
            $useMinMax = false;
            if (isset($minLeeftijdAlsContraindicatie['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::MIN_LEEFTIJD_ALS_CONTRAINDICATIE, $minLeeftijdAlsContraindicatie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minLeeftijdAlsContraindicatie['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::MIN_LEEFTIJD_ALS_CONTRAINDICATIE, $minLeeftijdAlsContraindicatie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::MIN_LEEFTIJD_ALS_CONTRAINDICATIE, $minLeeftijdAlsContraindicatie, $comparison);
    }

    /**
     * Filter the query on the minleeftijd_als_ci_tekstnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByMinleeftijdAlsCiTekstnummer(1234); // WHERE minleeftijd_als_ci_tekstnummer = 1234
     * $query->filterByMinleeftijdAlsCiTekstnummer(array(12, 34)); // WHERE minleeftijd_als_ci_tekstnummer IN (12, 34)
     * $query->filterByMinleeftijdAlsCiTekstnummer(array('min' => 12)); // WHERE minleeftijd_als_ci_tekstnummer >= 12
     * $query->filterByMinleeftijdAlsCiTekstnummer(array('max' => 12)); // WHERE minleeftijd_als_ci_tekstnummer <= 12
     * </code>
     *
     * @param     mixed $minleeftijdAlsCiTekstnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByMinleeftijdAlsCiTekstnummer($minleeftijdAlsCiTekstnummer = null, $comparison = null)
    {
        if (is_array($minleeftijdAlsCiTekstnummer)) {
            $useMinMax = false;
            if (isset($minleeftijdAlsCiTekstnummer['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::MINLEEFTIJD_ALS_CI_TEKSTNUMMER, $minleeftijdAlsCiTekstnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minleeftijdAlsCiTekstnummer['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::MINLEEFTIJD_ALS_CI_TEKSTNUMMER, $minleeftijdAlsCiTekstnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::MINLEEFTIJD_ALS_CI_TEKSTNUMMER, $minleeftijdAlsCiTekstnummer, $comparison);
    }

    /**
     * Filter the query on the aantal_dagen_voorschrijfperiode column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalDagenVoorschrijfperiode(1234); // WHERE aantal_dagen_voorschrijfperiode = 1234
     * $query->filterByAantalDagenVoorschrijfperiode(array(12, 34)); // WHERE aantal_dagen_voorschrijfperiode IN (12, 34)
     * $query->filterByAantalDagenVoorschrijfperiode(array('min' => 12)); // WHERE aantal_dagen_voorschrijfperiode >= 12
     * $query->filterByAantalDagenVoorschrijfperiode(array('max' => 12)); // WHERE aantal_dagen_voorschrijfperiode <= 12
     * </code>
     *
     * @param     mixed $aantalDagenVoorschrijfperiode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByAantalDagenVoorschrijfperiode($aantalDagenVoorschrijfperiode = null, $comparison = null)
    {
        if (is_array($aantalDagenVoorschrijfperiode)) {
            $useMinMax = false;
            if (isset($aantalDagenVoorschrijfperiode['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::AANTAL_DAGEN_VOORSCHRIJFPERIODE, $aantalDagenVoorschrijfperiode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalDagenVoorschrijfperiode['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::AANTAL_DAGEN_VOORSCHRIJFPERIODE, $aantalDagenVoorschrijfperiode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::AANTAL_DAGEN_VOORSCHRIJFPERIODE, $aantalDagenVoorschrijfperiode, $comparison);
    }

    /**
     * Filter the query on the tekstcode_voorschrijfperiode column
     *
     * Example usage:
     * <code>
     * $query->filterByTekstcodeVoorschrijfperiode(1234); // WHERE tekstcode_voorschrijfperiode = 1234
     * $query->filterByTekstcodeVoorschrijfperiode(array(12, 34)); // WHERE tekstcode_voorschrijfperiode IN (12, 34)
     * $query->filterByTekstcodeVoorschrijfperiode(array('min' => 12)); // WHERE tekstcode_voorschrijfperiode >= 12
     * $query->filterByTekstcodeVoorschrijfperiode(array('max' => 12)); // WHERE tekstcode_voorschrijfperiode <= 12
     * </code>
     *
     * @param     mixed $tekstcodeVoorschrijfperiode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByTekstcodeVoorschrijfperiode($tekstcodeVoorschrijfperiode = null, $comparison = null)
    {
        if (is_array($tekstcodeVoorschrijfperiode)) {
            $useMinMax = false;
            if (isset($tekstcodeVoorschrijfperiode['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::TEKSTCODE_VOORSCHRIJFPERIODE, $tekstcodeVoorschrijfperiode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tekstcodeVoorschrijfperiode['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::TEKSTCODE_VOORSCHRIJFPERIODE, $tekstcodeVoorschrijfperiode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::TEKSTCODE_VOORSCHRIJFPERIODE, $tekstcodeVoorschrijfperiode, $comparison);
    }

    /**
     * Filter the query on the tnnr_waarschuwing_substitutie_voorschrijven_prk column
     *
     * Example usage:
     * <code>
     * $query->filterByTnnrWaarschuwingSubstitutieVoorschrijvenPrk(1234); // WHERE tnnr_waarschuwing_substitutie_voorschrijven_prk = 1234
     * $query->filterByTnnrWaarschuwingSubstitutieVoorschrijvenPrk(array(12, 34)); // WHERE tnnr_waarschuwing_substitutie_voorschrijven_prk IN (12, 34)
     * $query->filterByTnnrWaarschuwingSubstitutieVoorschrijvenPrk(array('min' => 12)); // WHERE tnnr_waarschuwing_substitutie_voorschrijven_prk >= 12
     * $query->filterByTnnrWaarschuwingSubstitutieVoorschrijvenPrk(array('max' => 12)); // WHERE tnnr_waarschuwing_substitutie_voorschrijven_prk <= 12
     * </code>
     *
     * @param     mixed $tnnrWaarschuwingSubstitutieVoorschrijvenPrk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByTnnrWaarschuwingSubstitutieVoorschrijvenPrk($tnnrWaarschuwingSubstitutieVoorschrijvenPrk = null, $comparison = null)
    {
        if (is_array($tnnrWaarschuwingSubstitutieVoorschrijvenPrk)) {
            $useMinMax = false;
            if (isset($tnnrWaarschuwingSubstitutieVoorschrijvenPrk['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::TNNR_WAARSCHUWING_SUBSTITUTIE_VOORSCHRIJVEN_PRK, $tnnrWaarschuwingSubstitutieVoorschrijvenPrk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tnnrWaarschuwingSubstitutieVoorschrijvenPrk['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::TNNR_WAARSCHUWING_SUBSTITUTIE_VOORSCHRIJVEN_PRK, $tnnrWaarschuwingSubstitutieVoorschrijvenPrk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::TNNR_WAARSCHUWING_SUBSTITUTIE_VOORSCHRIJVEN_PRK, $tnnrWaarschuwingSubstitutieVoorschrijvenPrk, $comparison);
    }

    /**
     * Filter the query on the waarschuwing_substitutie_en_voorschrijven_prk column
     *
     * Example usage:
     * <code>
     * $query->filterByWaarschuwingSubstitutieEnVoorschrijvenPrk(1234); // WHERE waarschuwing_substitutie_en_voorschrijven_prk = 1234
     * $query->filterByWaarschuwingSubstitutieEnVoorschrijvenPrk(array(12, 34)); // WHERE waarschuwing_substitutie_en_voorschrijven_prk IN (12, 34)
     * $query->filterByWaarschuwingSubstitutieEnVoorschrijvenPrk(array('min' => 12)); // WHERE waarschuwing_substitutie_en_voorschrijven_prk >= 12
     * $query->filterByWaarschuwingSubstitutieEnVoorschrijvenPrk(array('max' => 12)); // WHERE waarschuwing_substitutie_en_voorschrijven_prk <= 12
     * </code>
     *
     * @param     mixed $waarschuwingSubstitutieEnVoorschrijvenPrk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByWaarschuwingSubstitutieEnVoorschrijvenPrk($waarschuwingSubstitutieEnVoorschrijvenPrk = null, $comparison = null)
    {
        if (is_array($waarschuwingSubstitutieEnVoorschrijvenPrk)) {
            $useMinMax = false;
            if (isset($waarschuwingSubstitutieEnVoorschrijvenPrk['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::WAARSCHUWING_SUBSTITUTIE_EN_VOORSCHRIJVEN_PRK, $waarschuwingSubstitutieEnVoorschrijvenPrk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($waarschuwingSubstitutieEnVoorschrijvenPrk['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::WAARSCHUWING_SUBSTITUTIE_EN_VOORSCHRIJVEN_PRK, $waarschuwingSubstitutieEnVoorschrijvenPrk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::WAARSCHUWING_SUBSTITUTIE_EN_VOORSCHRIJVEN_PRK, $waarschuwingSubstitutieEnVoorschrijvenPrk, $comparison);
    }

    /**
     * Filter the query on the superproduktkode column
     *
     * Example usage:
     * <code>
     * $query->filterBySuperproduktkode(1234); // WHERE superproduktkode = 1234
     * $query->filterBySuperproduktkode(array(12, 34)); // WHERE superproduktkode IN (12, 34)
     * $query->filterBySuperproduktkode(array('min' => 12)); // WHERE superproduktkode >= 12
     * $query->filterBySuperproduktkode(array('max' => 12)); // WHERE superproduktkode <= 12
     * </code>
     *
     * @param     mixed $superproduktkode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterBySuperproduktkode($superproduktkode = null, $comparison = null)
    {
        if (is_array($superproduktkode)) {
            $useMinMax = false;
            if (isset($superproduktkode['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::SUPERPRODUKTKODE, $superproduktkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($superproduktkode['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::SUPERPRODUKTKODE, $superproduktkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::SUPERPRODUKTKODE, $superproduktkode, $comparison);
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
     * @param     mixed $stamtoedieningswegThesaurus58 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByStamtoedieningswegThesaurus58($stamtoedieningswegThesaurus58 = null, $comparison = null)
    {
        if (is_array($stamtoedieningswegThesaurus58)) {
            $useMinMax = false;
            if (isset($stamtoedieningswegThesaurus58['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, $stamtoedieningswegThesaurus58['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stamtoedieningswegThesaurus58['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, $stamtoedieningswegThesaurus58['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_THESAURUS_58, $stamtoedieningswegThesaurus58, $comparison);
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
     * @param     mixed $stamtoedieningswegCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByStamtoedieningswegCode($stamtoedieningswegCode = null, $comparison = null)
    {
        if (is_array($stamtoedieningswegCode)) {
            $useMinMax = false;
            if (isset($stamtoedieningswegCode['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_CODE, $stamtoedieningswegCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stamtoedieningswegCode['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_CODE, $stamtoedieningswegCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::STAMTOEDIENINGSWEG_CODE, $stamtoedieningswegCode, $comparison);
    }

    /**
     * Filter the query on the atccode column
     *
     * Example usage:
     * <code>
     * $query->filterByAtccode('fooValue');   // WHERE atccode = 'fooValue'
     * $query->filterByAtccode('%fooValue%'); // WHERE atccode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $atccode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByAtccode($atccode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($atccode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $atccode)) {
                $atccode = str_replace('*', '%', $atccode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::ATCCODE, $atccode, $comparison);
    }

    /**
     * Filter the query on the basiseenheid_product_thesaurusnr column
     *
     * Example usage:
     * <code>
     * $query->filterByBasiseenheidProductThesaurusnr(1234); // WHERE basiseenheid_product_thesaurusnr = 1234
     * $query->filterByBasiseenheidProductThesaurusnr(array(12, 34)); // WHERE basiseenheid_product_thesaurusnr IN (12, 34)
     * $query->filterByBasiseenheidProductThesaurusnr(array('min' => 12)); // WHERE basiseenheid_product_thesaurusnr >= 12
     * $query->filterByBasiseenheidProductThesaurusnr(array('max' => 12)); // WHERE basiseenheid_product_thesaurusnr <= 12
     * </code>
     *
     * @param     mixed $basiseenheidProductThesaurusnr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByBasiseenheidProductThesaurusnr($basiseenheidProductThesaurusnr = null, $comparison = null)
    {
        if (is_array($basiseenheidProductThesaurusnr)) {
            $useMinMax = false;
            if (isset($basiseenheidProductThesaurusnr['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_THESAURUSNR, $basiseenheidProductThesaurusnr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($basiseenheidProductThesaurusnr['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_THESAURUSNR, $basiseenheidProductThesaurusnr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_THESAURUSNR, $basiseenheidProductThesaurusnr, $comparison);
    }

    /**
     * Filter the query on the basiseenheid_product_kode column
     *
     * Example usage:
     * <code>
     * $query->filterByBasiseenheidProductKode(1234); // WHERE basiseenheid_product_kode = 1234
     * $query->filterByBasiseenheidProductKode(array(12, 34)); // WHERE basiseenheid_product_kode IN (12, 34)
     * $query->filterByBasiseenheidProductKode(array('min' => 12)); // WHERE basiseenheid_product_kode >= 12
     * $query->filterByBasiseenheidProductKode(array('max' => 12)); // WHERE basiseenheid_product_kode <= 12
     * </code>
     *
     * @param     mixed $basiseenheidProductKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function filterByBasiseenheidProductKode($basiseenheidProductKode = null, $comparison = null)
    {
        if (is_array($basiseenheidProductKode)) {
            $useMinMax = false;
            if (isset($basiseenheidProductKode['min'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_KODE, $basiseenheidProductKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($basiseenheidProductKode['max'])) {
                $this->addUsingAlias(GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_KODE, $basiseenheidProductKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsGeneriekeProductenPeer::BASISEENHEID_PRODUCT_KODE, $basiseenheidProductKode, $comparison);
    }

    /**
     * Filter the query by a related GsAtcCodes object
     *
     * @param   GsAtcCodes|PropelObjectCollection $gsAtcCodes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsGeneriekeProductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsAtcCodes($gsAtcCodes, $comparison = null)
    {
        if ($gsAtcCodes instanceof GsAtcCodes) {
            return $this
                ->addUsingAlias(GsGeneriekeProductenPeer::ATCCODE, $gsAtcCodes->getAtccode(), $comparison);
        } elseif ($gsAtcCodes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsGeneriekeProductenPeer::ATCCODE, $gsAtcCodes->toKeyValue('PrimaryKey', 'Atccode'), $comparison);
        } else {
            throw new PropelException('filterByGsAtcCodes() only accepts arguments of type GsAtcCodes or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsAtcCodes relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function joinGsAtcCodes($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsAtcCodes');

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
            $this->addJoinObject($join, 'GsAtcCodes');
        }

        return $this;
    }

    /**
     * Use the GsAtcCodes relation GsAtcCodes object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesQuery A secondary query class using the current class as primary query
     */
    public function useGsAtcCodesQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsAtcCodes($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsAtcCodes', '\PharmaIntelligence\GstandaardBundle\Model\GsAtcCodesQuery');
    }

    /**
     * Filter the query by a related GsNamen object
     *
     * @param   GsNamen|PropelObjectCollection $gsNamen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsGeneriekeProductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsNamenRelatedByNaamnummerVolledigeGpknaam($gsNamen, $comparison = null)
    {
        if ($gsNamen instanceof GsNamen) {
            return $this
                ->addUsingAlias(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM, $gsNamen->getNaamnummer(), $comparison);
        } elseif ($gsNamen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsGeneriekeProductenPeer::NAAMNUMMER_VOLLEDIGE_GPKNAAM, $gsNamen->toKeyValue('PrimaryKey', 'Naamnummer'), $comparison);
        } else {
            throw new PropelException('filterByGsNamenRelatedByNaamnummerVolledigeGpknaam() only accepts arguments of type GsNamen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsNamenRelatedByNaamnummerVolledigeGpknaam relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function joinGsNamenRelatedByNaamnummerVolledigeGpknaam($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsNamenRelatedByNaamnummerVolledigeGpknaam');

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
            $this->addJoinObject($join, 'GsNamenRelatedByNaamnummerVolledigeGpknaam');
        }

        return $this;
    }

    /**
     * Use the GsNamenRelatedByNaamnummerVolledigeGpknaam relation GsNamen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsNamenQuery A secondary query class using the current class as primary query
     */
    public function useGsNamenRelatedByNaamnummerVolledigeGpknaamQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsNamenRelatedByNaamnummerVolledigeGpknaam($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsNamenRelatedByNaamnummerVolledigeGpknaam', '\PharmaIntelligence\GstandaardBundle\Model\GsNamenQuery');
    }

    /**
     * Filter the query by a related GsNamen object
     *
     * @param   GsNamen|PropelObjectCollection $gsNamen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsGeneriekeProductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByStofnaam($gsNamen, $comparison = null)
    {
        if ($gsNamen instanceof GsNamen) {
            return $this
                ->addUsingAlias(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM, $gsNamen->getNaamnummer(), $comparison);
        } elseif ($gsNamen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsGeneriekeProductenPeer::NAAMNUMMER_GPKSTOFNAAM, $gsNamen->toKeyValue('PrimaryKey', 'Naamnummer'), $comparison);
        } else {
            throw new PropelException('filterByStofnaam() only accepts arguments of type GsNamen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Stofnaam relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function joinStofnaam($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Stofnaam');

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
            $this->addJoinObject($join, 'Stofnaam');
        }

        return $this;
    }

    /**
     * Use the Stofnaam relation GsNamen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsNamenQuery A secondary query class using the current class as primary query
     */
    public function useStofnaamQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinStofnaam($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Stofnaam', '\PharmaIntelligence\GstandaardBundle\Model\GsNamenQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsGeneriekeProductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFarmaceutischeVormOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_THESAURUSNUMMER, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsGeneriekeProductenPeer::FARMACEUTISCHE_VORM_CODE, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByFarmaceutischeVormOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FarmaceutischeVormOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function joinFarmaceutischeVormOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FarmaceutischeVormOmschrijving');

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
            $this->addJoinObject($join, 'FarmaceutischeVormOmschrijving');
        }

        return $this;
    }

    /**
     * Use the FarmaceutischeVormOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useFarmaceutischeVormOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFarmaceutischeVormOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FarmaceutischeVormOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsThesauriTotaal object
     *
     * @param   GsThesauriTotaal $gsThesauriTotaal The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsGeneriekeProductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByToedieningswegOmschrijving($gsThesauriTotaal, $comparison = null)
    {
        if ($gsThesauriTotaal instanceof GsThesauriTotaal) {
            return $this
                ->addUsingAlias(GsGeneriekeProductenPeer::TOEDIENINGSWEG_THESAURUSNUMMER, $gsThesauriTotaal->getThesaurusnummer(), $comparison)
                ->addUsingAlias(GsGeneriekeProductenPeer::TOEDIENINGSWEG_CODE, $gsThesauriTotaal->getThesaurusItemnummer(), $comparison);
        } else {
            throw new PropelException('filterByToedieningswegOmschrijving() only accepts arguments of type GsThesauriTotaal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ToedieningswegOmschrijving relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function joinToedieningswegOmschrijving($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ToedieningswegOmschrijving');

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
            $this->addJoinObject($join, 'ToedieningswegOmschrijving');
        }

        return $this;
    }

    /**
     * Use the ToedieningswegOmschrijving relation GsThesauriTotaal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery A secondary query class using the current class as primary query
     */
    public function useToedieningswegOmschrijvingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinToedieningswegOmschrijving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ToedieningswegOmschrijving', '\PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery');
    }

    /**
     * Filter the query by a related GsArtikelEigenschappen object
     *
     * @param   GsArtikelEigenschappen|PropelObjectCollection $gsArtikelEigenschappen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsGeneriekeProductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelEigenschappen($gsArtikelEigenschappen, $comparison = null)
    {
        if ($gsArtikelEigenschappen instanceof GsArtikelEigenschappen) {
            return $this
                ->addUsingAlias(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $gsArtikelEigenschappen->getGpk(), $comparison);
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
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
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
     * Filter the query by a related GsVoorschrijfprGeneesmiddelIdentific object
     *
     * @param   GsVoorschrijfprGeneesmiddelIdentific|PropelObjectCollection $gsVoorschrijfprGeneesmiddelIdentific  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsGeneriekeProductenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsVoorschrijfprGeneesmiddelIdentific($gsVoorschrijfprGeneesmiddelIdentific, $comparison = null)
    {
        if ($gsVoorschrijfprGeneesmiddelIdentific instanceof GsVoorschrijfprGeneesmiddelIdentific) {
            return $this
                ->addUsingAlias(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $gsVoorschrijfprGeneesmiddelIdentific->getGeneriekeproductcode(), $comparison);
        } elseif ($gsVoorschrijfprGeneesmiddelIdentific instanceof PropelObjectCollection) {
            return $this
                ->useGsVoorschrijfprGeneesmiddelIdentificQuery()
                ->filterByPrimaryKeys($gsVoorschrijfprGeneesmiddelIdentific->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsVoorschrijfprGeneesmiddelIdentific() only accepts arguments of type GsVoorschrijfprGeneesmiddelIdentific or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function joinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsVoorschrijfprGeneesmiddelIdentific');

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
            $this->addJoinObject($join, 'GsVoorschrijfprGeneesmiddelIdentific');
        }

        return $this;
    }

    /**
     * Use the GsVoorschrijfprGeneesmiddelIdentific relation GsVoorschrijfprGeneesmiddelIdentific object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificQuery A secondary query class using the current class as primary query
     */
    public function useGsVoorschrijfprGeneesmiddelIdentificQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsVoorschrijfprGeneesmiddelIdentific($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsVoorschrijfprGeneesmiddelIdentific', '\PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentificQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsGeneriekeProducten $gsGeneriekeProducten Object to remove from the list of results
     *
     * @return GsGeneriekeProductenQuery The current query, for fluid interface
     */
    public function prune($gsGeneriekeProducten = null)
    {
        if ($gsGeneriekeProducten) {
            $this->addUsingAlias(GsGeneriekeProductenPeer::GENERIEKEPRODUCTCODE, $gsGeneriekeProducten->getGeneriekeproductcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
