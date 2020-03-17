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
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelEigenschappenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsAtcCodes;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProducten;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaard;
use PharmaIntelligence\GstandaardBundle\Model\GsRzvAanspraak;
use PharmaIntelligence\GstandaardBundle\Model\GsVoorschrijfprGeneesmiddelIdentific;

/**
 * @method GsArtikelEigenschappenQuery orderByZindexNummer($order = Criteria::ASC) Order by the zindex_nummer column
 * @method GsArtikelEigenschappenQuery orderByVerpakkingsHoeveelheid($order = Criteria::ASC) Order by the verpakkings_hoeveelheid column
 * @method GsArtikelEigenschappenQuery orderByVerpakkingsHoeveelheidOmschrijving($order = Criteria::ASC) Order by the verpakkings_hoeveelheid_omschrijving column
 * @method GsArtikelEigenschappenQuery orderByHoofdverpakkingOmschrijving($order = Criteria::ASC) Order by the hoofdverpakking_omschrijving column
 * @method GsArtikelEigenschappenQuery orderByDeelverpakkingOmschrijving($order = Criteria::ASC) Order by the deelverpakking_omschrijving column
 * @method GsArtikelEigenschappenQuery orderByBasiseenheidOmschrijving($order = Criteria::ASC) Order by the basiseenheid_omschrijving column
 * @method GsArtikelEigenschappenQuery orderByInkoophoeveelheidOmschrijving($order = Criteria::ASC) Order by the inkoophoeveelheid_omschrijving column
 * @method GsArtikelEigenschappenQuery orderByHpk($order = Criteria::ASC) Order by the hpk column
 * @method GsArtikelEigenschappenQuery orderByPrk($order = Criteria::ASC) Order by the prk column
 * @method GsArtikelEigenschappenQuery orderByGpk($order = Criteria::ASC) Order by the gpk column
 * @method GsArtikelEigenschappenQuery orderByAtc($order = Criteria::ASC) Order by the atc column
 * @method GsArtikelEigenschappenQuery orderByEtiketNaam($order = Criteria::ASC) Order by the etiket_naam column
 * @method GsArtikelEigenschappenQuery orderByMerkNaam($order = Criteria::ASC) Order by the merk_naam column
 * @method GsArtikelEigenschappenQuery orderByHpkNaam($order = Criteria::ASC) Order by the hpk_naam column
 * @method GsArtikelEigenschappenQuery orderByPrkNaam($order = Criteria::ASC) Order by the prk_naam column
 * @method GsArtikelEigenschappenQuery orderByGpkNaam($order = Criteria::ASC) Order by the gpk_naam column
 * @method GsArtikelEigenschappenQuery orderByStofNaam($order = Criteria::ASC) Order by the stof_naam column
 * @method GsArtikelEigenschappenQuery orderByAtcNaam($order = Criteria::ASC) Order by the atc_naam column
 * @method GsArtikelEigenschappenQuery orderByLeverancierNummer($order = Criteria::ASC) Order by the leverancier_nummer column
 * @method GsArtikelEigenschappenQuery orderByLeverancierNaam($order = Criteria::ASC) Order by the leverancier_naam column
 * @method GsArtikelEigenschappenQuery orderByIsZvz($order = Criteria::ASC) Order by the is_zvz column
 * @method GsArtikelEigenschappenQuery orderByIsDwg($order = Criteria::ASC) Order by the is_dwg column
 * @method GsArtikelEigenschappenQuery orderByArtikelnummerFabrikant($order = Criteria::ASC) Order by the artikelnummer_fabrikant column
 * @method GsArtikelEigenschappenQuery orderByToedieningsvorm($order = Criteria::ASC) Order by the toedieningsvorm column
 * @method GsArtikelEigenschappenQuery orderByToedieningsweg($order = Criteria::ASC) Order by the toedieningsweg column
 * @method GsArtikelEigenschappenQuery orderByFarmaceutischeVorm($order = Criteria::ASC) Order by the farmaceutische_vorm column
 * @method GsArtikelEigenschappenQuery orderByProductgroep($order = Criteria::ASC) Order by the productgroep column
 * @method GsArtikelEigenschappenQuery orderByPrimaireWerkzameStofNaam($order = Criteria::ASC) Order by the primaire_werkzame_stof_naam column
 * @method GsArtikelEigenschappenQuery orderByPrimaireWerkzameStofEenheid($order = Criteria::ASC) Order by the primaire_werkzame_stof_eenheid column
 * @method GsArtikelEigenschappenQuery orderByPrimaireWerkzameStofHoeveelheid($order = Criteria::ASC) Order by the primaire_werkzame_stof_hoeveelheid column
 * @method GsArtikelEigenschappenQuery orderByMeestRecenteAip($order = Criteria::ASC) Order by the meest_recente_aip column
 * @method GsArtikelEigenschappenQuery orderByEmballageNaam($order = Criteria::ASC) Order by the emballage_naam column
 *
 * @method GsArtikelEigenschappenQuery groupByZindexNummer() Group by the zindex_nummer column
 * @method GsArtikelEigenschappenQuery groupByVerpakkingsHoeveelheid() Group by the verpakkings_hoeveelheid column
 * @method GsArtikelEigenschappenQuery groupByVerpakkingsHoeveelheidOmschrijving() Group by the verpakkings_hoeveelheid_omschrijving column
 * @method GsArtikelEigenschappenQuery groupByHoofdverpakkingOmschrijving() Group by the hoofdverpakking_omschrijving column
 * @method GsArtikelEigenschappenQuery groupByDeelverpakkingOmschrijving() Group by the deelverpakking_omschrijving column
 * @method GsArtikelEigenschappenQuery groupByBasiseenheidOmschrijving() Group by the basiseenheid_omschrijving column
 * @method GsArtikelEigenschappenQuery groupByInkoophoeveelheidOmschrijving() Group by the inkoophoeveelheid_omschrijving column
 * @method GsArtikelEigenschappenQuery groupByHpk() Group by the hpk column
 * @method GsArtikelEigenschappenQuery groupByPrk() Group by the prk column
 * @method GsArtikelEigenschappenQuery groupByGpk() Group by the gpk column
 * @method GsArtikelEigenschappenQuery groupByAtc() Group by the atc column
 * @method GsArtikelEigenschappenQuery groupByEtiketNaam() Group by the etiket_naam column
 * @method GsArtikelEigenschappenQuery groupByMerkNaam() Group by the merk_naam column
 * @method GsArtikelEigenschappenQuery groupByHpkNaam() Group by the hpk_naam column
 * @method GsArtikelEigenschappenQuery groupByPrkNaam() Group by the prk_naam column
 * @method GsArtikelEigenschappenQuery groupByGpkNaam() Group by the gpk_naam column
 * @method GsArtikelEigenschappenQuery groupByStofNaam() Group by the stof_naam column
 * @method GsArtikelEigenschappenQuery groupByAtcNaam() Group by the atc_naam column
 * @method GsArtikelEigenschappenQuery groupByLeverancierNummer() Group by the leverancier_nummer column
 * @method GsArtikelEigenschappenQuery groupByLeverancierNaam() Group by the leverancier_naam column
 * @method GsArtikelEigenschappenQuery groupByIsZvz() Group by the is_zvz column
 * @method GsArtikelEigenschappenQuery groupByIsDwg() Group by the is_dwg column
 * @method GsArtikelEigenschappenQuery groupByArtikelnummerFabrikant() Group by the artikelnummer_fabrikant column
 * @method GsArtikelEigenschappenQuery groupByToedieningsvorm() Group by the toedieningsvorm column
 * @method GsArtikelEigenschappenQuery groupByToedieningsweg() Group by the toedieningsweg column
 * @method GsArtikelEigenschappenQuery groupByFarmaceutischeVorm() Group by the farmaceutische_vorm column
 * @method GsArtikelEigenschappenQuery groupByProductgroep() Group by the productgroep column
 * @method GsArtikelEigenschappenQuery groupByPrimaireWerkzameStofNaam() Group by the primaire_werkzame_stof_naam column
 * @method GsArtikelEigenschappenQuery groupByPrimaireWerkzameStofEenheid() Group by the primaire_werkzame_stof_eenheid column
 * @method GsArtikelEigenschappenQuery groupByPrimaireWerkzameStofHoeveelheid() Group by the primaire_werkzame_stof_hoeveelheid column
 * @method GsArtikelEigenschappenQuery groupByMeestRecenteAip() Group by the meest_recente_aip column
 * @method GsArtikelEigenschappenQuery groupByEmballageNaam() Group by the emballage_naam column
 *
 * @method GsArtikelEigenschappenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsArtikelEigenschappenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsArtikelEigenschappenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsArtikelEigenschappenQuery leftJoinGsArtikelen($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelen relation
 * @method GsArtikelEigenschappenQuery rightJoinGsArtikelen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelen relation
 * @method GsArtikelEigenschappenQuery innerJoinGsArtikelen($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelen relation
 *
 * @method GsArtikelEigenschappenQuery leftJoinGsHandelsproducten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsHandelsproducten relation
 * @method GsArtikelEigenschappenQuery rightJoinGsHandelsproducten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsHandelsproducten relation
 * @method GsArtikelEigenschappenQuery innerJoinGsHandelsproducten($relationAlias = null) Adds a INNER JOIN clause to the query using the GsHandelsproducten relation
 *
 * @method GsArtikelEigenschappenQuery leftJoinGsNawGegevensGstandaard($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsNawGegevensGstandaard relation
 * @method GsArtikelEigenschappenQuery rightJoinGsNawGegevensGstandaard($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsNawGegevensGstandaard relation
 * @method GsArtikelEigenschappenQuery innerJoinGsNawGegevensGstandaard($relationAlias = null) Adds a INNER JOIN clause to the query using the GsNawGegevensGstandaard relation
 *
 * @method GsArtikelEigenschappenQuery leftJoinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
 * @method GsArtikelEigenschappenQuery rightJoinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
 * @method GsArtikelEigenschappenQuery innerJoinGsVoorschrijfprGeneesmiddelIdentific($relationAlias = null) Adds a INNER JOIN clause to the query using the GsVoorschrijfprGeneesmiddelIdentific relation
 *
 * @method GsArtikelEigenschappenQuery leftJoinGsGeneriekeProducten($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsGeneriekeProducten relation
 * @method GsArtikelEigenschappenQuery rightJoinGsGeneriekeProducten($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsGeneriekeProducten relation
 * @method GsArtikelEigenschappenQuery innerJoinGsGeneriekeProducten($relationAlias = null) Adds a INNER JOIN clause to the query using the GsGeneriekeProducten relation
 *
 * @method GsArtikelEigenschappenQuery leftJoinGsAtcCodes($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsAtcCodes relation
 * @method GsArtikelEigenschappenQuery rightJoinGsAtcCodes($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsAtcCodes relation
 * @method GsArtikelEigenschappenQuery innerJoinGsAtcCodes($relationAlias = null) Adds a INNER JOIN clause to the query using the GsAtcCodes relation
 *
 * @method GsArtikelEigenschappenQuery leftJoinGsRzvAanspraak($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsRzvAanspraak relation
 * @method GsArtikelEigenschappenQuery rightJoinGsRzvAanspraak($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsRzvAanspraak relation
 * @method GsArtikelEigenschappenQuery innerJoinGsRzvAanspraak($relationAlias = null) Adds a INNER JOIN clause to the query using the GsRzvAanspraak relation
 *
 * @method GsArtikelEigenschappen findOne(PropelPDO $con = null) Return the first GsArtikelEigenschappen matching the query
 * @method GsArtikelEigenschappen findOneOrCreate(PropelPDO $con = null) Return the first GsArtikelEigenschappen matching the query, or a new GsArtikelEigenschappen object populated from the query conditions when no match is found
 *
 * @method GsArtikelEigenschappen findOneByVerpakkingsHoeveelheid(int $verpakkings_hoeveelheid) Return the first GsArtikelEigenschappen filtered by the verpakkings_hoeveelheid column
 * @method GsArtikelEigenschappen findOneByVerpakkingsHoeveelheidOmschrijving(string $verpakkings_hoeveelheid_omschrijving) Return the first GsArtikelEigenschappen filtered by the verpakkings_hoeveelheid_omschrijving column
 * @method GsArtikelEigenschappen findOneByHoofdverpakkingOmschrijving(string $hoofdverpakking_omschrijving) Return the first GsArtikelEigenschappen filtered by the hoofdverpakking_omschrijving column
 * @method GsArtikelEigenschappen findOneByDeelverpakkingOmschrijving(string $deelverpakking_omschrijving) Return the first GsArtikelEigenschappen filtered by the deelverpakking_omschrijving column
 * @method GsArtikelEigenschappen findOneByBasiseenheidOmschrijving(string $basiseenheid_omschrijving) Return the first GsArtikelEigenschappen filtered by the basiseenheid_omschrijving column
 * @method GsArtikelEigenschappen findOneByInkoophoeveelheidOmschrijving(string $inkoophoeveelheid_omschrijving) Return the first GsArtikelEigenschappen filtered by the inkoophoeveelheid_omschrijving column
 * @method GsArtikelEigenschappen findOneByHpk(int $hpk) Return the first GsArtikelEigenschappen filtered by the hpk column
 * @method GsArtikelEigenschappen findOneByPrk(int $prk) Return the first GsArtikelEigenschappen filtered by the prk column
 * @method GsArtikelEigenschappen findOneByGpk(int $gpk) Return the first GsArtikelEigenschappen filtered by the gpk column
 * @method GsArtikelEigenschappen findOneByAtc(string $atc) Return the first GsArtikelEigenschappen filtered by the atc column
 * @method GsArtikelEigenschappen findOneByEtiketNaam(string $etiket_naam) Return the first GsArtikelEigenschappen filtered by the etiket_naam column
 * @method GsArtikelEigenschappen findOneByMerkNaam(string $merk_naam) Return the first GsArtikelEigenschappen filtered by the merk_naam column
 * @method GsArtikelEigenschappen findOneByHpkNaam(string $hpk_naam) Return the first GsArtikelEigenschappen filtered by the hpk_naam column
 * @method GsArtikelEigenschappen findOneByPrkNaam(string $prk_naam) Return the first GsArtikelEigenschappen filtered by the prk_naam column
 * @method GsArtikelEigenschappen findOneByGpkNaam(string $gpk_naam) Return the first GsArtikelEigenschappen filtered by the gpk_naam column
 * @method GsArtikelEigenschappen findOneByStofNaam(string $stof_naam) Return the first GsArtikelEigenschappen filtered by the stof_naam column
 * @method GsArtikelEigenschappen findOneByAtcNaam(string $atc_naam) Return the first GsArtikelEigenschappen filtered by the atc_naam column
 * @method GsArtikelEigenschappen findOneByLeverancierNummer(int $leverancier_nummer) Return the first GsArtikelEigenschappen filtered by the leverancier_nummer column
 * @method GsArtikelEigenschappen findOneByLeverancierNaam(string $leverancier_naam) Return the first GsArtikelEigenschappen filtered by the leverancier_naam column
 * @method GsArtikelEigenschappen findOneByIsZvz(boolean $is_zvz) Return the first GsArtikelEigenschappen filtered by the is_zvz column
 * @method GsArtikelEigenschappen findOneByIsDwg(boolean $is_dwg) Return the first GsArtikelEigenschappen filtered by the is_dwg column
 * @method GsArtikelEigenschappen findOneByArtikelnummerFabrikant(string $artikelnummer_fabrikant) Return the first GsArtikelEigenschappen filtered by the artikelnummer_fabrikant column
 * @method GsArtikelEigenschappen findOneByToedieningsvorm(string $toedieningsvorm) Return the first GsArtikelEigenschappen filtered by the toedieningsvorm column
 * @method GsArtikelEigenschappen findOneByToedieningsweg(string $toedieningsweg) Return the first GsArtikelEigenschappen filtered by the toedieningsweg column
 * @method GsArtikelEigenschappen findOneByFarmaceutischeVorm(string $farmaceutische_vorm) Return the first GsArtikelEigenschappen filtered by the farmaceutische_vorm column
 * @method GsArtikelEigenschappen findOneByProductgroep(string $productgroep) Return the first GsArtikelEigenschappen filtered by the productgroep column
 * @method GsArtikelEigenschappen findOneByPrimaireWerkzameStofNaam(string $primaire_werkzame_stof_naam) Return the first GsArtikelEigenschappen filtered by the primaire_werkzame_stof_naam column
 * @method GsArtikelEigenschappen findOneByPrimaireWerkzameStofEenheid(string $primaire_werkzame_stof_eenheid) Return the first GsArtikelEigenschappen filtered by the primaire_werkzame_stof_eenheid column
 * @method GsArtikelEigenschappen findOneByPrimaireWerkzameStofHoeveelheid(string $primaire_werkzame_stof_hoeveelheid) Return the first GsArtikelEigenschappen filtered by the primaire_werkzame_stof_hoeveelheid column
 * @method GsArtikelEigenschappen findOneByMeestRecenteAip(string $meest_recente_aip) Return the first GsArtikelEigenschappen filtered by the meest_recente_aip column
 * @method GsArtikelEigenschappen findOneByEmballageNaam(string $emballage_naam) Return the first GsArtikelEigenschappen filtered by the emballage_naam column
 *
 * @method array findByZindexNummer(int $zindex_nummer) Return GsArtikelEigenschappen objects filtered by the zindex_nummer column
 * @method array findByVerpakkingsHoeveelheid(int $verpakkings_hoeveelheid) Return GsArtikelEigenschappen objects filtered by the verpakkings_hoeveelheid column
 * @method array findByVerpakkingsHoeveelheidOmschrijving(string $verpakkings_hoeveelheid_omschrijving) Return GsArtikelEigenschappen objects filtered by the verpakkings_hoeveelheid_omschrijving column
 * @method array findByHoofdverpakkingOmschrijving(string $hoofdverpakking_omschrijving) Return GsArtikelEigenschappen objects filtered by the hoofdverpakking_omschrijving column
 * @method array findByDeelverpakkingOmschrijving(string $deelverpakking_omschrijving) Return GsArtikelEigenschappen objects filtered by the deelverpakking_omschrijving column
 * @method array findByBasiseenheidOmschrijving(string $basiseenheid_omschrijving) Return GsArtikelEigenschappen objects filtered by the basiseenheid_omschrijving column
 * @method array findByInkoophoeveelheidOmschrijving(string $inkoophoeveelheid_omschrijving) Return GsArtikelEigenschappen objects filtered by the inkoophoeveelheid_omschrijving column
 * @method array findByHpk(int $hpk) Return GsArtikelEigenschappen objects filtered by the hpk column
 * @method array findByPrk(int $prk) Return GsArtikelEigenschappen objects filtered by the prk column
 * @method array findByGpk(int $gpk) Return GsArtikelEigenschappen objects filtered by the gpk column
 * @method array findByAtc(string $atc) Return GsArtikelEigenschappen objects filtered by the atc column
 * @method array findByEtiketNaam(string $etiket_naam) Return GsArtikelEigenschappen objects filtered by the etiket_naam column
 * @method array findByMerkNaam(string $merk_naam) Return GsArtikelEigenschappen objects filtered by the merk_naam column
 * @method array findByHpkNaam(string $hpk_naam) Return GsArtikelEigenschappen objects filtered by the hpk_naam column
 * @method array findByPrkNaam(string $prk_naam) Return GsArtikelEigenschappen objects filtered by the prk_naam column
 * @method array findByGpkNaam(string $gpk_naam) Return GsArtikelEigenschappen objects filtered by the gpk_naam column
 * @method array findByStofNaam(string $stof_naam) Return GsArtikelEigenschappen objects filtered by the stof_naam column
 * @method array findByAtcNaam(string $atc_naam) Return GsArtikelEigenschappen objects filtered by the atc_naam column
 * @method array findByLeverancierNummer(int $leverancier_nummer) Return GsArtikelEigenschappen objects filtered by the leverancier_nummer column
 * @method array findByLeverancierNaam(string $leverancier_naam) Return GsArtikelEigenschappen objects filtered by the leverancier_naam column
 * @method array findByIsZvz(boolean $is_zvz) Return GsArtikelEigenschappen objects filtered by the is_zvz column
 * @method array findByIsDwg(boolean $is_dwg) Return GsArtikelEigenschappen objects filtered by the is_dwg column
 * @method array findByArtikelnummerFabrikant(string $artikelnummer_fabrikant) Return GsArtikelEigenschappen objects filtered by the artikelnummer_fabrikant column
 * @method array findByToedieningsvorm(string $toedieningsvorm) Return GsArtikelEigenschappen objects filtered by the toedieningsvorm column
 * @method array findByToedieningsweg(string $toedieningsweg) Return GsArtikelEigenschappen objects filtered by the toedieningsweg column
 * @method array findByFarmaceutischeVorm(string $farmaceutische_vorm) Return GsArtikelEigenschappen objects filtered by the farmaceutische_vorm column
 * @method array findByProductgroep(string $productgroep) Return GsArtikelEigenschappen objects filtered by the productgroep column
 * @method array findByPrimaireWerkzameStofNaam(string $primaire_werkzame_stof_naam) Return GsArtikelEigenschappen objects filtered by the primaire_werkzame_stof_naam column
 * @method array findByPrimaireWerkzameStofEenheid(string $primaire_werkzame_stof_eenheid) Return GsArtikelEigenschappen objects filtered by the primaire_werkzame_stof_eenheid column
 * @method array findByPrimaireWerkzameStofHoeveelheid(string $primaire_werkzame_stof_hoeveelheid) Return GsArtikelEigenschappen objects filtered by the primaire_werkzame_stof_hoeveelheid column
 * @method array findByMeestRecenteAip(string $meest_recente_aip) Return GsArtikelEigenschappen objects filtered by the meest_recente_aip column
 * @method array findByEmballageNaam(string $emballage_naam) Return GsArtikelEigenschappen objects filtered by the emballage_naam column
 */
abstract class BaseGsArtikelEigenschappenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsArtikelEigenschappenQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelEigenschappen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsArtikelEigenschappenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsArtikelEigenschappenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsArtikelEigenschappenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsArtikelEigenschappenQuery) {
            return $criteria;
        }
        $query = new GsArtikelEigenschappenQuery(null, null, $modelAlias);

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
     * @return   GsArtikelEigenschappen|GsArtikelEigenschappen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsArtikelEigenschappenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsArtikelEigenschappenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsArtikelEigenschappen A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByZindexNummer($key, $con = null)
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
     * @return                 GsArtikelEigenschappen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `zindex_nummer`, `verpakkings_hoeveelheid`, `verpakkings_hoeveelheid_omschrijving`, `hoofdverpakking_omschrijving`, `deelverpakking_omschrijving`, `basiseenheid_omschrijving`, `inkoophoeveelheid_omschrijving`, `hpk`, `prk`, `gpk`, `atc`, `etiket_naam`, `merk_naam`, `hpk_naam`, `prk_naam`, `gpk_naam`, `stof_naam`, `atc_naam`, `leverancier_nummer`, `leverancier_naam`, `is_zvz`, `is_dwg`, `artikelnummer_fabrikant`, `toedieningsvorm`, `toedieningsweg`, `farmaceutische_vorm`, `productgroep`, `primaire_werkzame_stof_naam`, `primaire_werkzame_stof_eenheid`, `primaire_werkzame_stof_hoeveelheid`, `meest_recente_aip`, `emballage_naam` FROM `gs_artikel_eigenschappen` WHERE `zindex_nummer` = :p0';
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
            $obj = new GsArtikelEigenschappen();
            $obj->hydrate($row);
            GsArtikelEigenschappenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return GsArtikelEigenschappen|GsArtikelEigenschappen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsArtikelEigenschappen[]|mixed the list of results, formatted by the current formatter
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
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $keys, Criteria::IN);
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
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByZindexNummer($zindexNummer = null, $comparison = null)
    {
        if (is_array($zindexNummer)) {
            $useMinMax = false;
            if (isset($zindexNummer['min'])) {
                $this->addUsingAlias(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $zindexNummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zindexNummer['max'])) {
                $this->addUsingAlias(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $zindexNummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $zindexNummer, $comparison);
    }

    /**
     * Filter the query on the verpakkings_hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByVerpakkingsHoeveelheid(1234); // WHERE verpakkings_hoeveelheid = 1234
     * $query->filterByVerpakkingsHoeveelheid(array(12, 34)); // WHERE verpakkings_hoeveelheid IN (12, 34)
     * $query->filterByVerpakkingsHoeveelheid(array('min' => 12)); // WHERE verpakkings_hoeveelheid >= 12
     * $query->filterByVerpakkingsHoeveelheid(array('max' => 12)); // WHERE verpakkings_hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $verpakkingsHoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByVerpakkingsHoeveelheid($verpakkingsHoeveelheid = null, $comparison = null)
    {
        if (is_array($verpakkingsHoeveelheid)) {
            $useMinMax = false;
            if (isset($verpakkingsHoeveelheid['min'])) {
                $this->addUsingAlias(GsArtikelEigenschappenPeer::VERPAKKINGS_HOEVEELHEID, $verpakkingsHoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($verpakkingsHoeveelheid['max'])) {
                $this->addUsingAlias(GsArtikelEigenschappenPeer::VERPAKKINGS_HOEVEELHEID, $verpakkingsHoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::VERPAKKINGS_HOEVEELHEID, $verpakkingsHoeveelheid, $comparison);
    }

    /**
     * Filter the query on the verpakkings_hoeveelheid_omschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByVerpakkingsHoeveelheidOmschrijving('fooValue');   // WHERE verpakkings_hoeveelheid_omschrijving = 'fooValue'
     * $query->filterByVerpakkingsHoeveelheidOmschrijving('%fooValue%'); // WHERE verpakkings_hoeveelheid_omschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verpakkingsHoeveelheidOmschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByVerpakkingsHoeveelheidOmschrijving($verpakkingsHoeveelheidOmschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verpakkingsHoeveelheidOmschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $verpakkingsHoeveelheidOmschrijving)) {
                $verpakkingsHoeveelheidOmschrijving = str_replace('*', '%', $verpakkingsHoeveelheidOmschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::VERPAKKINGS_HOEVEELHEID_OMSCHRIJVING, $verpakkingsHoeveelheidOmschrijving, $comparison);
    }

    /**
     * Filter the query on the hoofdverpakking_omschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByHoofdverpakkingOmschrijving('fooValue');   // WHERE hoofdverpakking_omschrijving = 'fooValue'
     * $query->filterByHoofdverpakkingOmschrijving('%fooValue%'); // WHERE hoofdverpakking_omschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hoofdverpakkingOmschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByHoofdverpakkingOmschrijving($hoofdverpakkingOmschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hoofdverpakkingOmschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hoofdverpakkingOmschrijving)) {
                $hoofdverpakkingOmschrijving = str_replace('*', '%', $hoofdverpakkingOmschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::HOOFDVERPAKKING_OMSCHRIJVING, $hoofdverpakkingOmschrijving, $comparison);
    }

    /**
     * Filter the query on the deelverpakking_omschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByDeelverpakkingOmschrijving('fooValue');   // WHERE deelverpakking_omschrijving = 'fooValue'
     * $query->filterByDeelverpakkingOmschrijving('%fooValue%'); // WHERE deelverpakking_omschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $deelverpakkingOmschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByDeelverpakkingOmschrijving($deelverpakkingOmschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($deelverpakkingOmschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $deelverpakkingOmschrijving)) {
                $deelverpakkingOmschrijving = str_replace('*', '%', $deelverpakkingOmschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::DEELVERPAKKING_OMSCHRIJVING, $deelverpakkingOmschrijving, $comparison);
    }

    /**
     * Filter the query on the basiseenheid_omschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByBasiseenheidOmschrijving('fooValue');   // WHERE basiseenheid_omschrijving = 'fooValue'
     * $query->filterByBasiseenheidOmschrijving('%fooValue%'); // WHERE basiseenheid_omschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $basiseenheidOmschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByBasiseenheidOmschrijving($basiseenheidOmschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($basiseenheidOmschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $basiseenheidOmschrijving)) {
                $basiseenheidOmschrijving = str_replace('*', '%', $basiseenheidOmschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::BASISEENHEID_OMSCHRIJVING, $basiseenheidOmschrijving, $comparison);
    }

    /**
     * Filter the query on the inkoophoeveelheid_omschrijving column
     *
     * Example usage:
     * <code>
     * $query->filterByInkoophoeveelheidOmschrijving('fooValue');   // WHERE inkoophoeveelheid_omschrijving = 'fooValue'
     * $query->filterByInkoophoeveelheidOmschrijving('%fooValue%'); // WHERE inkoophoeveelheid_omschrijving LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inkoophoeveelheidOmschrijving The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByInkoophoeveelheidOmschrijving($inkoophoeveelheidOmschrijving = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inkoophoeveelheidOmschrijving)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $inkoophoeveelheidOmschrijving)) {
                $inkoophoeveelheidOmschrijving = str_replace('*', '%', $inkoophoeveelheidOmschrijving);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::INKOOPHOEVEELHEID_OMSCHRIJVING, $inkoophoeveelheidOmschrijving, $comparison);
    }

    /**
     * Filter the query on the hpk column
     *
     * Example usage:
     * <code>
     * $query->filterByHpk(1234); // WHERE hpk = 1234
     * $query->filterByHpk(array(12, 34)); // WHERE hpk IN (12, 34)
     * $query->filterByHpk(array('min' => 12)); // WHERE hpk >= 12
     * $query->filterByHpk(array('max' => 12)); // WHERE hpk <= 12
     * </code>
     *
     * @see       filterByGsHandelsproducten()
     *
     * @param     mixed $hpk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByHpk($hpk = null, $comparison = null)
    {
        if (is_array($hpk)) {
            $useMinMax = false;
            if (isset($hpk['min'])) {
                $this->addUsingAlias(GsArtikelEigenschappenPeer::HPK, $hpk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hpk['max'])) {
                $this->addUsingAlias(GsArtikelEigenschappenPeer::HPK, $hpk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::HPK, $hpk, $comparison);
    }

    /**
     * Filter the query on the prk column
     *
     * Example usage:
     * <code>
     * $query->filterByPrk(1234); // WHERE prk = 1234
     * $query->filterByPrk(array(12, 34)); // WHERE prk IN (12, 34)
     * $query->filterByPrk(array('min' => 12)); // WHERE prk >= 12
     * $query->filterByPrk(array('max' => 12)); // WHERE prk <= 12
     * </code>
     *
     * @see       filterByGsVoorschrijfprGeneesmiddelIdentific()
     *
     * @param     mixed $prk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByPrk($prk = null, $comparison = null)
    {
        if (is_array($prk)) {
            $useMinMax = false;
            if (isset($prk['min'])) {
                $this->addUsingAlias(GsArtikelEigenschappenPeer::PRK, $prk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prk['max'])) {
                $this->addUsingAlias(GsArtikelEigenschappenPeer::PRK, $prk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::PRK, $prk, $comparison);
    }

    /**
     * Filter the query on the gpk column
     *
     * Example usage:
     * <code>
     * $query->filterByGpk(1234); // WHERE gpk = 1234
     * $query->filterByGpk(array(12, 34)); // WHERE gpk IN (12, 34)
     * $query->filterByGpk(array('min' => 12)); // WHERE gpk >= 12
     * $query->filterByGpk(array('max' => 12)); // WHERE gpk <= 12
     * </code>
     *
     * @see       filterByGsGeneriekeProducten()
     *
     * @param     mixed $gpk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByGpk($gpk = null, $comparison = null)
    {
        if (is_array($gpk)) {
            $useMinMax = false;
            if (isset($gpk['min'])) {
                $this->addUsingAlias(GsArtikelEigenschappenPeer::GPK, $gpk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gpk['max'])) {
                $this->addUsingAlias(GsArtikelEigenschappenPeer::GPK, $gpk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::GPK, $gpk, $comparison);
    }

    /**
     * Filter the query on the atc column
     *
     * Example usage:
     * <code>
     * $query->filterByAtc('fooValue');   // WHERE atc = 'fooValue'
     * $query->filterByAtc('%fooValue%'); // WHERE atc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $atc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByAtc($atc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($atc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $atc)) {
                $atc = str_replace('*', '%', $atc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::ATC, $atc, $comparison);
    }

    /**
     * Filter the query on the etiket_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByEtiketNaam('fooValue');   // WHERE etiket_naam = 'fooValue'
     * $query->filterByEtiketNaam('%fooValue%'); // WHERE etiket_naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etiketNaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByEtiketNaam($etiketNaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etiketNaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etiketNaam)) {
                $etiketNaam = str_replace('*', '%', $etiketNaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::ETIKET_NAAM, $etiketNaam, $comparison);
    }

    /**
     * Filter the query on the merk_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByMerkNaam('fooValue');   // WHERE merk_naam = 'fooValue'
     * $query->filterByMerkNaam('%fooValue%'); // WHERE merk_naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $merkNaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByMerkNaam($merkNaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($merkNaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $merkNaam)) {
                $merkNaam = str_replace('*', '%', $merkNaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::MERK_NAAM, $merkNaam, $comparison);
    }

    /**
     * Filter the query on the hpk_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByHpkNaam('fooValue');   // WHERE hpk_naam = 'fooValue'
     * $query->filterByHpkNaam('%fooValue%'); // WHERE hpk_naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hpkNaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByHpkNaam($hpkNaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hpkNaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hpkNaam)) {
                $hpkNaam = str_replace('*', '%', $hpkNaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::HPK_NAAM, $hpkNaam, $comparison);
    }

    /**
     * Filter the query on the prk_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByPrkNaam('fooValue');   // WHERE prk_naam = 'fooValue'
     * $query->filterByPrkNaam('%fooValue%'); // WHERE prk_naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prkNaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByPrkNaam($prkNaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prkNaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prkNaam)) {
                $prkNaam = str_replace('*', '%', $prkNaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::PRK_NAAM, $prkNaam, $comparison);
    }

    /**
     * Filter the query on the gpk_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByGpkNaam('fooValue');   // WHERE gpk_naam = 'fooValue'
     * $query->filterByGpkNaam('%fooValue%'); // WHERE gpk_naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gpkNaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByGpkNaam($gpkNaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gpkNaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gpkNaam)) {
                $gpkNaam = str_replace('*', '%', $gpkNaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::GPK_NAAM, $gpkNaam, $comparison);
    }

    /**
     * Filter the query on the stof_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByStofNaam('fooValue');   // WHERE stof_naam = 'fooValue'
     * $query->filterByStofNaam('%fooValue%'); // WHERE stof_naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stofNaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByStofNaam($stofNaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stofNaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stofNaam)) {
                $stofNaam = str_replace('*', '%', $stofNaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::STOF_NAAM, $stofNaam, $comparison);
    }

    /**
     * Filter the query on the atc_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByAtcNaam('fooValue');   // WHERE atc_naam = 'fooValue'
     * $query->filterByAtcNaam('%fooValue%'); // WHERE atc_naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $atcNaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByAtcNaam($atcNaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($atcNaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $atcNaam)) {
                $atcNaam = str_replace('*', '%', $atcNaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::ATC_NAAM, $atcNaam, $comparison);
    }

    /**
     * Filter the query on the leverancier_nummer column
     *
     * Example usage:
     * <code>
     * $query->filterByLeverancierNummer(1234); // WHERE leverancier_nummer = 1234
     * $query->filterByLeverancierNummer(array(12, 34)); // WHERE leverancier_nummer IN (12, 34)
     * $query->filterByLeverancierNummer(array('min' => 12)); // WHERE leverancier_nummer >= 12
     * $query->filterByLeverancierNummer(array('max' => 12)); // WHERE leverancier_nummer <= 12
     * </code>
     *
     * @see       filterByGsNawGegevensGstandaard()
     *
     * @param     mixed $leverancierNummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByLeverancierNummer($leverancierNummer = null, $comparison = null)
    {
        if (is_array($leverancierNummer)) {
            $useMinMax = false;
            if (isset($leverancierNummer['min'])) {
                $this->addUsingAlias(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, $leverancierNummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($leverancierNummer['max'])) {
                $this->addUsingAlias(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, $leverancierNummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, $leverancierNummer, $comparison);
    }

    /**
     * Filter the query on the leverancier_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByLeverancierNaam('fooValue');   // WHERE leverancier_naam = 'fooValue'
     * $query->filterByLeverancierNaam('%fooValue%'); // WHERE leverancier_naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $leverancierNaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByLeverancierNaam($leverancierNaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($leverancierNaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $leverancierNaam)) {
                $leverancierNaam = str_replace('*', '%', $leverancierNaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::LEVERANCIER_NAAM, $leverancierNaam, $comparison);
    }

    /**
     * Filter the query on the is_zvz column
     *
     * Example usage:
     * <code>
     * $query->filterByIsZvz(true); // WHERE is_zvz = true
     * $query->filterByIsZvz('yes'); // WHERE is_zvz = true
     * </code>
     *
     * @param     boolean|string $isZvz The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByIsZvz($isZvz = null, $comparison = null)
    {
        if (is_string($isZvz)) {
            $isZvz = in_array(strtolower($isZvz), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::IS_ZVZ, $isZvz, $comparison);
    }

    /**
     * Filter the query on the is_dwg column
     *
     * Example usage:
     * <code>
     * $query->filterByIsDwg(true); // WHERE is_dwg = true
     * $query->filterByIsDwg('yes'); // WHERE is_dwg = true
     * </code>
     *
     * @param     boolean|string $isDwg The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByIsDwg($isDwg = null, $comparison = null)
    {
        if (is_string($isDwg)) {
            $isDwg = in_array(strtolower($isDwg), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::IS_DWG, $isDwg, $comparison);
    }

    /**
     * Filter the query on the artikelnummer_fabrikant column
     *
     * Example usage:
     * <code>
     * $query->filterByArtikelnummerFabrikant('fooValue');   // WHERE artikelnummer_fabrikant = 'fooValue'
     * $query->filterByArtikelnummerFabrikant('%fooValue%'); // WHERE artikelnummer_fabrikant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artikelnummerFabrikant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByArtikelnummerFabrikant($artikelnummerFabrikant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artikelnummerFabrikant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $artikelnummerFabrikant)) {
                $artikelnummerFabrikant = str_replace('*', '%', $artikelnummerFabrikant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::ARTIKELNUMMER_FABRIKANT, $artikelnummerFabrikant, $comparison);
    }

    /**
     * Filter the query on the toedieningsvorm column
     *
     * Example usage:
     * <code>
     * $query->filterByToedieningsvorm('fooValue');   // WHERE toedieningsvorm = 'fooValue'
     * $query->filterByToedieningsvorm('%fooValue%'); // WHERE toedieningsvorm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $toedieningsvorm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByToedieningsvorm($toedieningsvorm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($toedieningsvorm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $toedieningsvorm)) {
                $toedieningsvorm = str_replace('*', '%', $toedieningsvorm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::TOEDIENINGSVORM, $toedieningsvorm, $comparison);
    }

    /**
     * Filter the query on the toedieningsweg column
     *
     * Example usage:
     * <code>
     * $query->filterByToedieningsweg('fooValue');   // WHERE toedieningsweg = 'fooValue'
     * $query->filterByToedieningsweg('%fooValue%'); // WHERE toedieningsweg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $toedieningsweg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByToedieningsweg($toedieningsweg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($toedieningsweg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $toedieningsweg)) {
                $toedieningsweg = str_replace('*', '%', $toedieningsweg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::TOEDIENINGSWEG, $toedieningsweg, $comparison);
    }

    /**
     * Filter the query on the farmaceutische_vorm column
     *
     * Example usage:
     * <code>
     * $query->filterByFarmaceutischeVorm('fooValue');   // WHERE farmaceutische_vorm = 'fooValue'
     * $query->filterByFarmaceutischeVorm('%fooValue%'); // WHERE farmaceutische_vorm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $farmaceutischeVorm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByFarmaceutischeVorm($farmaceutischeVorm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($farmaceutischeVorm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $farmaceutischeVorm)) {
                $farmaceutischeVorm = str_replace('*', '%', $farmaceutischeVorm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::FARMACEUTISCHE_VORM, $farmaceutischeVorm, $comparison);
    }

    /**
     * Filter the query on the productgroep column
     *
     * Example usage:
     * <code>
     * $query->filterByProductgroep('fooValue');   // WHERE productgroep = 'fooValue'
     * $query->filterByProductgroep('%fooValue%'); // WHERE productgroep LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productgroep The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByProductgroep($productgroep = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productgroep)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productgroep)) {
                $productgroep = str_replace('*', '%', $productgroep);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::PRODUCTGROEP, $productgroep, $comparison);
    }

    /**
     * Filter the query on the primaire_werkzame_stof_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByPrimaireWerkzameStofNaam('fooValue');   // WHERE primaire_werkzame_stof_naam = 'fooValue'
     * $query->filterByPrimaireWerkzameStofNaam('%fooValue%'); // WHERE primaire_werkzame_stof_naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $primaireWerkzameStofNaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByPrimaireWerkzameStofNaam($primaireWerkzameStofNaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($primaireWerkzameStofNaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $primaireWerkzameStofNaam)) {
                $primaireWerkzameStofNaam = str_replace('*', '%', $primaireWerkzameStofNaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_NAAM, $primaireWerkzameStofNaam, $comparison);
    }

    /**
     * Filter the query on the primaire_werkzame_stof_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByPrimaireWerkzameStofEenheid('fooValue');   // WHERE primaire_werkzame_stof_eenheid = 'fooValue'
     * $query->filterByPrimaireWerkzameStofEenheid('%fooValue%'); // WHERE primaire_werkzame_stof_eenheid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $primaireWerkzameStofEenheid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByPrimaireWerkzameStofEenheid($primaireWerkzameStofEenheid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($primaireWerkzameStofEenheid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $primaireWerkzameStofEenheid)) {
                $primaireWerkzameStofEenheid = str_replace('*', '%', $primaireWerkzameStofEenheid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_EENHEID, $primaireWerkzameStofEenheid, $comparison);
    }

    /**
     * Filter the query on the primaire_werkzame_stof_hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByPrimaireWerkzameStofHoeveelheid(1234); // WHERE primaire_werkzame_stof_hoeveelheid = 1234
     * $query->filterByPrimaireWerkzameStofHoeveelheid(array(12, 34)); // WHERE primaire_werkzame_stof_hoeveelheid IN (12, 34)
     * $query->filterByPrimaireWerkzameStofHoeveelheid(array('min' => 12)); // WHERE primaire_werkzame_stof_hoeveelheid >= 12
     * $query->filterByPrimaireWerkzameStofHoeveelheid(array('max' => 12)); // WHERE primaire_werkzame_stof_hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $primaireWerkzameStofHoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByPrimaireWerkzameStofHoeveelheid($primaireWerkzameStofHoeveelheid = null, $comparison = null)
    {
        if (is_array($primaireWerkzameStofHoeveelheid)) {
            $useMinMax = false;
            if (isset($primaireWerkzameStofHoeveelheid['min'])) {
                $this->addUsingAlias(GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_HOEVEELHEID, $primaireWerkzameStofHoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($primaireWerkzameStofHoeveelheid['max'])) {
                $this->addUsingAlias(GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_HOEVEELHEID, $primaireWerkzameStofHoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::PRIMAIRE_WERKZAME_STOF_HOEVEELHEID, $primaireWerkzameStofHoeveelheid, $comparison);
    }

    /**
     * Filter the query on the meest_recente_aip column
     *
     * Example usage:
     * <code>
     * $query->filterByMeestRecenteAip(1234); // WHERE meest_recente_aip = 1234
     * $query->filterByMeestRecenteAip(array(12, 34)); // WHERE meest_recente_aip IN (12, 34)
     * $query->filterByMeestRecenteAip(array('min' => 12)); // WHERE meest_recente_aip >= 12
     * $query->filterByMeestRecenteAip(array('max' => 12)); // WHERE meest_recente_aip <= 12
     * </code>
     *
     * @param     mixed $meestRecenteAip The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByMeestRecenteAip($meestRecenteAip = null, $comparison = null)
    {
        if (is_array($meestRecenteAip)) {
            $useMinMax = false;
            if (isset($meestRecenteAip['min'])) {
                $this->addUsingAlias(GsArtikelEigenschappenPeer::MEEST_RECENTE_AIP, $meestRecenteAip['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($meestRecenteAip['max'])) {
                $this->addUsingAlias(GsArtikelEigenschappenPeer::MEEST_RECENTE_AIP, $meestRecenteAip['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::MEEST_RECENTE_AIP, $meestRecenteAip, $comparison);
    }

    /**
     * Filter the query on the emballage_naam column
     *
     * Example usage:
     * <code>
     * $query->filterByEmballageNaam('fooValue');   // WHERE emballage_naam = 'fooValue'
     * $query->filterByEmballageNaam('%fooValue%'); // WHERE emballage_naam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emballageNaam The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function filterByEmballageNaam($emballageNaam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emballageNaam)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emballageNaam)) {
                $emballageNaam = str_replace('*', '%', $emballageNaam);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsArtikelEigenschappenPeer::EMBALLAGE_NAAM, $emballageNaam, $comparison);
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelEigenschappenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelen($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $gsArtikelen->getZinummer(), $comparison);
        } elseif ($gsArtikelen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $gsArtikelen->toKeyValue('PrimaryKey', 'Zinummer'), $comparison);
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
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
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
     * Filter the query by a related GsHandelsproducten object
     *
     * @param   GsHandelsproducten|PropelObjectCollection $gsHandelsproducten The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelEigenschappenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsHandelsproducten($gsHandelsproducten, $comparison = null)
    {
        if ($gsHandelsproducten instanceof GsHandelsproducten) {
            return $this
                ->addUsingAlias(GsArtikelEigenschappenPeer::HPK, $gsHandelsproducten->getHandelsproduktkode(), $comparison);
        } elseif ($gsHandelsproducten instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsArtikelEigenschappenPeer::HPK, $gsHandelsproducten->toKeyValue('PrimaryKey', 'Handelsproduktkode'), $comparison);
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
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function joinGsHandelsproducten($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useGsHandelsproductenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsHandelsproducten($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsHandelsproducten', '\PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery');
    }

    /**
     * Filter the query by a related GsNawGegevensGstandaard object
     *
     * @param   GsNawGegevensGstandaard|PropelObjectCollection $gsNawGegevensGstandaard The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelEigenschappenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsNawGegevensGstandaard($gsNawGegevensGstandaard, $comparison = null)
    {
        if ($gsNawGegevensGstandaard instanceof GsNawGegevensGstandaard) {
            return $this
                ->addUsingAlias(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, $gsNawGegevensGstandaard->getNawNummer(), $comparison);
        } elseif ($gsNawGegevensGstandaard instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsArtikelEigenschappenPeer::LEVERANCIER_NUMMER, $gsNawGegevensGstandaard->toKeyValue('NawNummer', 'NawNummer'), $comparison);
        } else {
            throw new PropelException('filterByGsNawGegevensGstandaard() only accepts arguments of type GsNawGegevensGstandaard or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsNawGegevensGstandaard relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function joinGsNawGegevensGstandaard($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsNawGegevensGstandaard');

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
            $this->addJoinObject($join, 'GsNawGegevensGstandaard');
        }

        return $this;
    }

    /**
     * Use the GsNawGegevensGstandaard relation GsNawGegevensGstandaard object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery A secondary query class using the current class as primary query
     */
    public function useGsNawGegevensGstandaardQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsNawGegevensGstandaard($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsNawGegevensGstandaard', '\PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery');
    }

    /**
     * Filter the query by a related GsVoorschrijfprGeneesmiddelIdentific object
     *
     * @param   GsVoorschrijfprGeneesmiddelIdentific|PropelObjectCollection $gsVoorschrijfprGeneesmiddelIdentific The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelEigenschappenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsVoorschrijfprGeneesmiddelIdentific($gsVoorschrijfprGeneesmiddelIdentific, $comparison = null)
    {
        if ($gsVoorschrijfprGeneesmiddelIdentific instanceof GsVoorschrijfprGeneesmiddelIdentific) {
            return $this
                ->addUsingAlias(GsArtikelEigenschappenPeer::PRK, $gsVoorschrijfprGeneesmiddelIdentific->getPrkcode(), $comparison);
        } elseif ($gsVoorschrijfprGeneesmiddelIdentific instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsArtikelEigenschappenPeer::PRK, $gsVoorschrijfprGeneesmiddelIdentific->toKeyValue('PrimaryKey', 'Prkcode'), $comparison);
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
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
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
     * Filter the query by a related GsGeneriekeProducten object
     *
     * @param   GsGeneriekeProducten|PropelObjectCollection $gsGeneriekeProducten The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelEigenschappenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsGeneriekeProducten($gsGeneriekeProducten, $comparison = null)
    {
        if ($gsGeneriekeProducten instanceof GsGeneriekeProducten) {
            return $this
                ->addUsingAlias(GsArtikelEigenschappenPeer::GPK, $gsGeneriekeProducten->getGeneriekeproductcode(), $comparison);
        } elseif ($gsGeneriekeProducten instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsArtikelEigenschappenPeer::GPK, $gsGeneriekeProducten->toKeyValue('PrimaryKey', 'Generiekeproductcode'), $comparison);
        } else {
            throw new PropelException('filterByGsGeneriekeProducten() only accepts arguments of type GsGeneriekeProducten or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsGeneriekeProducten relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function joinGsGeneriekeProducten($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsGeneriekeProducten');

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
            $this->addJoinObject($join, 'GsGeneriekeProducten');
        }

        return $this;
    }

    /**
     * Use the GsGeneriekeProducten relation GsGeneriekeProducten object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery A secondary query class using the current class as primary query
     */
    public function useGsGeneriekeProductenQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsGeneriekeProducten($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsGeneriekeProducten', '\PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery');
    }

    /**
     * Filter the query by a related GsAtcCodes object
     *
     * @param   GsAtcCodes|PropelObjectCollection $gsAtcCodes The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelEigenschappenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsAtcCodes($gsAtcCodes, $comparison = null)
    {
        if ($gsAtcCodes instanceof GsAtcCodes) {
            return $this
                ->addUsingAlias(GsArtikelEigenschappenPeer::ATC, $gsAtcCodes->getAtccode(), $comparison);
        } elseif ($gsAtcCodes instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsArtikelEigenschappenPeer::ATC, $gsAtcCodes->toKeyValue('PrimaryKey', 'Atccode'), $comparison);
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
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
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
     * Filter the query by a related GsRzvAanspraak object
     *
     * @param   GsRzvAanspraak|PropelObjectCollection $gsRzvAanspraak  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsArtikelEigenschappenQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsRzvAanspraak($gsRzvAanspraak, $comparison = null)
    {
        if ($gsRzvAanspraak instanceof GsRzvAanspraak) {
            return $this
                ->addUsingAlias(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $gsRzvAanspraak->getZinummer(), $comparison);
        } elseif ($gsRzvAanspraak instanceof PropelObjectCollection) {
            return $this
                ->useGsRzvAanspraakQuery()
                ->filterByPrimaryKeys($gsRzvAanspraak->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsRzvAanspraak() only accepts arguments of type GsRzvAanspraak or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsRzvAanspraak relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function joinGsRzvAanspraak($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsRzvAanspraak');

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
            $this->addJoinObject($join, 'GsRzvAanspraak');
        }

        return $this;
    }

    /**
     * Use the GsRzvAanspraak relation GsRzvAanspraak object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsRzvAanspraakQuery A secondary query class using the current class as primary query
     */
    public function useGsRzvAanspraakQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsRzvAanspraak($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsRzvAanspraak', '\PharmaIntelligence\GstandaardBundle\Model\GsRzvAanspraakQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsArtikelEigenschappen $gsArtikelEigenschappen Object to remove from the list of results
     *
     * @return GsArtikelEigenschappenQuery The current query, for fluid interface
     */
    public function prune($gsArtikelEigenschappen = null)
    {
        if ($gsArtikelEigenschappen) {
            $this->addUsingAlias(GsArtikelEigenschappenPeer::ZINDEX_NUMMER, $gsArtikelEigenschappen->getZindexNummer(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
