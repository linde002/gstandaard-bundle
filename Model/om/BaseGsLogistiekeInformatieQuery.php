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
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeInformatie;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeInformatiePeer;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeInformatieQuery;

/**
 * @method GsLogistiekeInformatieQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsLogistiekeInformatieQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsLogistiekeInformatieQuery orderByGtin($order = Criteria::ASC) Order by the gtin column
 * @method GsLogistiekeInformatieQuery orderByGtinVanDeDataLeverancier($order = Criteria::ASC) Order by the gtin_van_de_data_leverancier column
 * @method GsLogistiekeInformatieQuery orderByOmschrijvingGtin($order = Criteria::ASC) Order by the omschrijving_gtin column
 * @method GsLogistiekeInformatieQuery orderByHoogteHoeveelheid($order = Criteria::ASC) Order by the hoogte_hoeveelheid column
 * @method GsLogistiekeInformatieQuery orderByHoogteEenheid($order = Criteria::ASC) Order by the hoogte_eenheid column
 * @method GsLogistiekeInformatieQuery orderByBreedteHoeveelheid($order = Criteria::ASC) Order by the breedte_hoeveelheid column
 * @method GsLogistiekeInformatieQuery orderByBreedteEenheid($order = Criteria::ASC) Order by the breedte_eenheid column
 * @method GsLogistiekeInformatieQuery orderByDiepteHoeveelheid($order = Criteria::ASC) Order by the diepte_hoeveelheid column
 * @method GsLogistiekeInformatieQuery orderByDiepteEenheid($order = Criteria::ASC) Order by the diepte_eenheid column
 * @method GsLogistiekeInformatieQuery orderByBrutoGewichtHoeveelheid($order = Criteria::ASC) Order by the bruto_gewicht_hoeveelheid column
 * @method GsLogistiekeInformatieQuery orderByBrutoGewichtEenheid($order = Criteria::ASC) Order by the bruto_gewicht_eenheid column
 * @method GsLogistiekeInformatieQuery orderByNettoGewichtHoeveelheid($order = Criteria::ASC) Order by the netto_gewicht_hoeveelheid column
 * @method GsLogistiekeInformatieQuery orderByNettoGewichtEenheid($order = Criteria::ASC) Order by the netto_gewicht_eenheid column
 * @method GsLogistiekeInformatieQuery orderByIndicatieBasiseenheid($order = Criteria::ASC) Order by the indicatie_basiseenheid column
 * @method GsLogistiekeInformatieQuery orderByIndicatieConsumenteneenheid($order = Criteria::ASC) Order by the indicatie_consumenteneenheid column
 * @method GsLogistiekeInformatieQuery orderByIndicatieBesteleenheid($order = Criteria::ASC) Order by the indicatie_besteleenheid column
 * @method GsLogistiekeInformatieQuery orderByIndicatieLevereenheid($order = Criteria::ASC) Order by the indicatie_levereenheid column
 * @method GsLogistiekeInformatieQuery orderByIndicatieFactuureenheid($order = Criteria::ASC) Order by the indicatie_factuureenheid column
 * @method GsLogistiekeInformatieQuery orderByStartdatumBeschikbaarheidVerpakking($order = Criteria::ASC) Order by the startdatum_beschikbaarheid_verpakking column
 * @method GsLogistiekeInformatieQuery orderByEinddatumBeschikbaarheidVerpakking($order = Criteria::ASC) Order by the einddatum_beschikbaarheid_verpakking column
 * @method GsLogistiekeInformatieQuery orderByStopdatumVerpakking($order = Criteria::ASC) Order by the stopdatum_verpakking column
 * @method GsLogistiekeInformatieQuery orderByChildGtin($order = Criteria::ASC) Order by the child_gtin column
 * @method GsLogistiekeInformatieQuery orderByChildGtinHoeveelheid($order = Criteria::ASC) Order by the child_gtin_hoeveelheid column
 * @method GsLogistiekeInformatieQuery orderByProductType($order = Criteria::ASC) Order by the product_type column
 * @method GsLogistiekeInformatieQuery orderByLijstprijs($order = Criteria::ASC) Order by the lijstprijs column
 * @method GsLogistiekeInformatieQuery orderByRetailprijs($order = Criteria::ASC) Order by the retailprijs column
 * @method GsLogistiekeInformatieQuery orderByNettoInhoudHoeveelheid($order = Criteria::ASC) Order by the netto_inhoud_hoeveelheid column
 * @method GsLogistiekeInformatieQuery orderByNettoInhoudEenheid($order = Criteria::ASC) Order by the netto_inhoud_eenheid column
 * @method GsLogistiekeInformatieQuery orderByZindexNummer($order = Criteria::ASC) Order by the zindex_nummer column
 * @method GsLogistiekeInformatieQuery orderByHoeveelheidVerpakking($order = Criteria::ASC) Order by the hoeveelheid_verpakking column
 * @method GsLogistiekeInformatieQuery orderByMemocodeEenheidVerpakking($order = Criteria::ASC) Order by the memocode_eenheid_verpakking column
 * @method GsLogistiekeInformatieQuery orderByFabrikantArtikelCodering($order = Criteria::ASC) Order by the fabrikant_artikel_codering column
 * @method GsLogistiekeInformatieQuery orderByThesaurusVerwijzingStatus($order = Criteria::ASC) Order by the thesaurus_verwijzing_status column
 * @method GsLogistiekeInformatieQuery orderByStatus($order = Criteria::ASC) Order by the status column
 *
 * @method GsLogistiekeInformatieQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsLogistiekeInformatieQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsLogistiekeInformatieQuery groupByGtin() Group by the gtin column
 * @method GsLogistiekeInformatieQuery groupByGtinVanDeDataLeverancier() Group by the gtin_van_de_data_leverancier column
 * @method GsLogistiekeInformatieQuery groupByOmschrijvingGtin() Group by the omschrijving_gtin column
 * @method GsLogistiekeInformatieQuery groupByHoogteHoeveelheid() Group by the hoogte_hoeveelheid column
 * @method GsLogistiekeInformatieQuery groupByHoogteEenheid() Group by the hoogte_eenheid column
 * @method GsLogistiekeInformatieQuery groupByBreedteHoeveelheid() Group by the breedte_hoeveelheid column
 * @method GsLogistiekeInformatieQuery groupByBreedteEenheid() Group by the breedte_eenheid column
 * @method GsLogistiekeInformatieQuery groupByDiepteHoeveelheid() Group by the diepte_hoeveelheid column
 * @method GsLogistiekeInformatieQuery groupByDiepteEenheid() Group by the diepte_eenheid column
 * @method GsLogistiekeInformatieQuery groupByBrutoGewichtHoeveelheid() Group by the bruto_gewicht_hoeveelheid column
 * @method GsLogistiekeInformatieQuery groupByBrutoGewichtEenheid() Group by the bruto_gewicht_eenheid column
 * @method GsLogistiekeInformatieQuery groupByNettoGewichtHoeveelheid() Group by the netto_gewicht_hoeveelheid column
 * @method GsLogistiekeInformatieQuery groupByNettoGewichtEenheid() Group by the netto_gewicht_eenheid column
 * @method GsLogistiekeInformatieQuery groupByIndicatieBasiseenheid() Group by the indicatie_basiseenheid column
 * @method GsLogistiekeInformatieQuery groupByIndicatieConsumenteneenheid() Group by the indicatie_consumenteneenheid column
 * @method GsLogistiekeInformatieQuery groupByIndicatieBesteleenheid() Group by the indicatie_besteleenheid column
 * @method GsLogistiekeInformatieQuery groupByIndicatieLevereenheid() Group by the indicatie_levereenheid column
 * @method GsLogistiekeInformatieQuery groupByIndicatieFactuureenheid() Group by the indicatie_factuureenheid column
 * @method GsLogistiekeInformatieQuery groupByStartdatumBeschikbaarheidVerpakking() Group by the startdatum_beschikbaarheid_verpakking column
 * @method GsLogistiekeInformatieQuery groupByEinddatumBeschikbaarheidVerpakking() Group by the einddatum_beschikbaarheid_verpakking column
 * @method GsLogistiekeInformatieQuery groupByStopdatumVerpakking() Group by the stopdatum_verpakking column
 * @method GsLogistiekeInformatieQuery groupByChildGtin() Group by the child_gtin column
 * @method GsLogistiekeInformatieQuery groupByChildGtinHoeveelheid() Group by the child_gtin_hoeveelheid column
 * @method GsLogistiekeInformatieQuery groupByProductType() Group by the product_type column
 * @method GsLogistiekeInformatieQuery groupByLijstprijs() Group by the lijstprijs column
 * @method GsLogistiekeInformatieQuery groupByRetailprijs() Group by the retailprijs column
 * @method GsLogistiekeInformatieQuery groupByNettoInhoudHoeveelheid() Group by the netto_inhoud_hoeveelheid column
 * @method GsLogistiekeInformatieQuery groupByNettoInhoudEenheid() Group by the netto_inhoud_eenheid column
 * @method GsLogistiekeInformatieQuery groupByZindexNummer() Group by the zindex_nummer column
 * @method GsLogistiekeInformatieQuery groupByHoeveelheidVerpakking() Group by the hoeveelheid_verpakking column
 * @method GsLogistiekeInformatieQuery groupByMemocodeEenheidVerpakking() Group by the memocode_eenheid_verpakking column
 * @method GsLogistiekeInformatieQuery groupByFabrikantArtikelCodering() Group by the fabrikant_artikel_codering column
 * @method GsLogistiekeInformatieQuery groupByThesaurusVerwijzingStatus() Group by the thesaurus_verwijzing_status column
 * @method GsLogistiekeInformatieQuery groupByStatus() Group by the status column
 *
 * @method GsLogistiekeInformatieQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsLogistiekeInformatieQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsLogistiekeInformatieQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsLogistiekeInformatieQuery leftJoinGsArtikelenRelatedByZindexNummer($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelenRelatedByZindexNummer relation
 * @method GsLogistiekeInformatieQuery rightJoinGsArtikelenRelatedByZindexNummer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelenRelatedByZindexNummer relation
 * @method GsLogistiekeInformatieQuery innerJoinGsArtikelenRelatedByZindexNummer($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelenRelatedByZindexNummer relation
 *
 * @method GsLogistiekeInformatieQuery leftJoinGsArtikelenRelatedByZinummer($relationAlias = null) Adds a LEFT JOIN clause to the query using the GsArtikelenRelatedByZinummer relation
 * @method GsLogistiekeInformatieQuery rightJoinGsArtikelenRelatedByZinummer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the GsArtikelenRelatedByZinummer relation
 * @method GsLogistiekeInformatieQuery innerJoinGsArtikelenRelatedByZinummer($relationAlias = null) Adds a INNER JOIN clause to the query using the GsArtikelenRelatedByZinummer relation
 *
 * @method GsLogistiekeInformatie findOne(PropelPDO $con = null) Return the first GsLogistiekeInformatie matching the query
 * @method GsLogistiekeInformatie findOneOrCreate(PropelPDO $con = null) Return the first GsLogistiekeInformatie matching the query, or a new GsLogistiekeInformatie object populated from the query conditions when no match is found
 *
 * @method GsLogistiekeInformatie findOneByBestandnummer(int $bestandnummer) Return the first GsLogistiekeInformatie filtered by the bestandnummer column
 * @method GsLogistiekeInformatie findOneByMutatiekode(int $mutatiekode) Return the first GsLogistiekeInformatie filtered by the mutatiekode column
 * @method GsLogistiekeInformatie findOneByGtin(string $gtin) Return the first GsLogistiekeInformatie filtered by the gtin column
 * @method GsLogistiekeInformatie findOneByGtinVanDeDataLeverancier(string $gtin_van_de_data_leverancier) Return the first GsLogistiekeInformatie filtered by the gtin_van_de_data_leverancier column
 * @method GsLogistiekeInformatie findOneByOmschrijvingGtin(string $omschrijving_gtin) Return the first GsLogistiekeInformatie filtered by the omschrijving_gtin column
 * @method GsLogistiekeInformatie findOneByHoogteHoeveelheid(string $hoogte_hoeveelheid) Return the first GsLogistiekeInformatie filtered by the hoogte_hoeveelheid column
 * @method GsLogistiekeInformatie findOneByHoogteEenheid(string $hoogte_eenheid) Return the first GsLogistiekeInformatie filtered by the hoogte_eenheid column
 * @method GsLogistiekeInformatie findOneByBreedteHoeveelheid(string $breedte_hoeveelheid) Return the first GsLogistiekeInformatie filtered by the breedte_hoeveelheid column
 * @method GsLogistiekeInformatie findOneByBreedteEenheid(string $breedte_eenheid) Return the first GsLogistiekeInformatie filtered by the breedte_eenheid column
 * @method GsLogistiekeInformatie findOneByDiepteHoeveelheid(string $diepte_hoeveelheid) Return the first GsLogistiekeInformatie filtered by the diepte_hoeveelheid column
 * @method GsLogistiekeInformatie findOneByDiepteEenheid(string $diepte_eenheid) Return the first GsLogistiekeInformatie filtered by the diepte_eenheid column
 * @method GsLogistiekeInformatie findOneByBrutoGewichtHoeveelheid(string $bruto_gewicht_hoeveelheid) Return the first GsLogistiekeInformatie filtered by the bruto_gewicht_hoeveelheid column
 * @method GsLogistiekeInformatie findOneByBrutoGewichtEenheid(string $bruto_gewicht_eenheid) Return the first GsLogistiekeInformatie filtered by the bruto_gewicht_eenheid column
 * @method GsLogistiekeInformatie findOneByNettoGewichtHoeveelheid(string $netto_gewicht_hoeveelheid) Return the first GsLogistiekeInformatie filtered by the netto_gewicht_hoeveelheid column
 * @method GsLogistiekeInformatie findOneByNettoGewichtEenheid(string $netto_gewicht_eenheid) Return the first GsLogistiekeInformatie filtered by the netto_gewicht_eenheid column
 * @method GsLogistiekeInformatie findOneByIndicatieBasiseenheid(int $indicatie_basiseenheid) Return the first GsLogistiekeInformatie filtered by the indicatie_basiseenheid column
 * @method GsLogistiekeInformatie findOneByIndicatieConsumenteneenheid(int $indicatie_consumenteneenheid) Return the first GsLogistiekeInformatie filtered by the indicatie_consumenteneenheid column
 * @method GsLogistiekeInformatie findOneByIndicatieBesteleenheid(int $indicatie_besteleenheid) Return the first GsLogistiekeInformatie filtered by the indicatie_besteleenheid column
 * @method GsLogistiekeInformatie findOneByIndicatieLevereenheid(int $indicatie_levereenheid) Return the first GsLogistiekeInformatie filtered by the indicatie_levereenheid column
 * @method GsLogistiekeInformatie findOneByIndicatieFactuureenheid(int $indicatie_factuureenheid) Return the first GsLogistiekeInformatie filtered by the indicatie_factuureenheid column
 * @method GsLogistiekeInformatie findOneByStartdatumBeschikbaarheidVerpakking(string $startdatum_beschikbaarheid_verpakking) Return the first GsLogistiekeInformatie filtered by the startdatum_beschikbaarheid_verpakking column
 * @method GsLogistiekeInformatie findOneByEinddatumBeschikbaarheidVerpakking(string $einddatum_beschikbaarheid_verpakking) Return the first GsLogistiekeInformatie filtered by the einddatum_beschikbaarheid_verpakking column
 * @method GsLogistiekeInformatie findOneByStopdatumVerpakking(string $stopdatum_verpakking) Return the first GsLogistiekeInformatie filtered by the stopdatum_verpakking column
 * @method GsLogistiekeInformatie findOneByChildGtin(string $child_gtin) Return the first GsLogistiekeInformatie filtered by the child_gtin column
 * @method GsLogistiekeInformatie findOneByChildGtinHoeveelheid(int $child_gtin_hoeveelheid) Return the first GsLogistiekeInformatie filtered by the child_gtin_hoeveelheid column
 * @method GsLogistiekeInformatie findOneByProductType(string $product_type) Return the first GsLogistiekeInformatie filtered by the product_type column
 * @method GsLogistiekeInformatie findOneByLijstprijs(string $lijstprijs) Return the first GsLogistiekeInformatie filtered by the lijstprijs column
 * @method GsLogistiekeInformatie findOneByRetailprijs(string $retailprijs) Return the first GsLogistiekeInformatie filtered by the retailprijs column
 * @method GsLogistiekeInformatie findOneByNettoInhoudHoeveelheid(string $netto_inhoud_hoeveelheid) Return the first GsLogistiekeInformatie filtered by the netto_inhoud_hoeveelheid column
 * @method GsLogistiekeInformatie findOneByNettoInhoudEenheid(string $netto_inhoud_eenheid) Return the first GsLogistiekeInformatie filtered by the netto_inhoud_eenheid column
 * @method GsLogistiekeInformatie findOneByZindexNummer(int $zindex_nummer) Return the first GsLogistiekeInformatie filtered by the zindex_nummer column
 * @method GsLogistiekeInformatie findOneByHoeveelheidVerpakking(string $hoeveelheid_verpakking) Return the first GsLogistiekeInformatie filtered by the hoeveelheid_verpakking column
 * @method GsLogistiekeInformatie findOneByMemocodeEenheidVerpakking(string $memocode_eenheid_verpakking) Return the first GsLogistiekeInformatie filtered by the memocode_eenheid_verpakking column
 * @method GsLogistiekeInformatie findOneByFabrikantArtikelCodering(string $fabrikant_artikel_codering) Return the first GsLogistiekeInformatie filtered by the fabrikant_artikel_codering column
 * @method GsLogistiekeInformatie findOneByThesaurusVerwijzingStatus(int $thesaurus_verwijzing_status) Return the first GsLogistiekeInformatie filtered by the thesaurus_verwijzing_status column
 * @method GsLogistiekeInformatie findOneByStatus(int $status) Return the first GsLogistiekeInformatie filtered by the status column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsLogistiekeInformatie objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsLogistiekeInformatie objects filtered by the mutatiekode column
 * @method array findByGtin(string $gtin) Return GsLogistiekeInformatie objects filtered by the gtin column
 * @method array findByGtinVanDeDataLeverancier(string $gtin_van_de_data_leverancier) Return GsLogistiekeInformatie objects filtered by the gtin_van_de_data_leverancier column
 * @method array findByOmschrijvingGtin(string $omschrijving_gtin) Return GsLogistiekeInformatie objects filtered by the omschrijving_gtin column
 * @method array findByHoogteHoeveelheid(string $hoogte_hoeveelheid) Return GsLogistiekeInformatie objects filtered by the hoogte_hoeveelheid column
 * @method array findByHoogteEenheid(string $hoogte_eenheid) Return GsLogistiekeInformatie objects filtered by the hoogte_eenheid column
 * @method array findByBreedteHoeveelheid(string $breedte_hoeveelheid) Return GsLogistiekeInformatie objects filtered by the breedte_hoeveelheid column
 * @method array findByBreedteEenheid(string $breedte_eenheid) Return GsLogistiekeInformatie objects filtered by the breedte_eenheid column
 * @method array findByDiepteHoeveelheid(string $diepte_hoeveelheid) Return GsLogistiekeInformatie objects filtered by the diepte_hoeveelheid column
 * @method array findByDiepteEenheid(string $diepte_eenheid) Return GsLogistiekeInformatie objects filtered by the diepte_eenheid column
 * @method array findByBrutoGewichtHoeveelheid(string $bruto_gewicht_hoeveelheid) Return GsLogistiekeInformatie objects filtered by the bruto_gewicht_hoeveelheid column
 * @method array findByBrutoGewichtEenheid(string $bruto_gewicht_eenheid) Return GsLogistiekeInformatie objects filtered by the bruto_gewicht_eenheid column
 * @method array findByNettoGewichtHoeveelheid(string $netto_gewicht_hoeveelheid) Return GsLogistiekeInformatie objects filtered by the netto_gewicht_hoeveelheid column
 * @method array findByNettoGewichtEenheid(string $netto_gewicht_eenheid) Return GsLogistiekeInformatie objects filtered by the netto_gewicht_eenheid column
 * @method array findByIndicatieBasiseenheid(int $indicatie_basiseenheid) Return GsLogistiekeInformatie objects filtered by the indicatie_basiseenheid column
 * @method array findByIndicatieConsumenteneenheid(int $indicatie_consumenteneenheid) Return GsLogistiekeInformatie objects filtered by the indicatie_consumenteneenheid column
 * @method array findByIndicatieBesteleenheid(int $indicatie_besteleenheid) Return GsLogistiekeInformatie objects filtered by the indicatie_besteleenheid column
 * @method array findByIndicatieLevereenheid(int $indicatie_levereenheid) Return GsLogistiekeInformatie objects filtered by the indicatie_levereenheid column
 * @method array findByIndicatieFactuureenheid(int $indicatie_factuureenheid) Return GsLogistiekeInformatie objects filtered by the indicatie_factuureenheid column
 * @method array findByStartdatumBeschikbaarheidVerpakking(string $startdatum_beschikbaarheid_verpakking) Return GsLogistiekeInformatie objects filtered by the startdatum_beschikbaarheid_verpakking column
 * @method array findByEinddatumBeschikbaarheidVerpakking(string $einddatum_beschikbaarheid_verpakking) Return GsLogistiekeInformatie objects filtered by the einddatum_beschikbaarheid_verpakking column
 * @method array findByStopdatumVerpakking(string $stopdatum_verpakking) Return GsLogistiekeInformatie objects filtered by the stopdatum_verpakking column
 * @method array findByChildGtin(string $child_gtin) Return GsLogistiekeInformatie objects filtered by the child_gtin column
 * @method array findByChildGtinHoeveelheid(int $child_gtin_hoeveelheid) Return GsLogistiekeInformatie objects filtered by the child_gtin_hoeveelheid column
 * @method array findByProductType(string $product_type) Return GsLogistiekeInformatie objects filtered by the product_type column
 * @method array findByLijstprijs(string $lijstprijs) Return GsLogistiekeInformatie objects filtered by the lijstprijs column
 * @method array findByRetailprijs(string $retailprijs) Return GsLogistiekeInformatie objects filtered by the retailprijs column
 * @method array findByNettoInhoudHoeveelheid(string $netto_inhoud_hoeveelheid) Return GsLogistiekeInformatie objects filtered by the netto_inhoud_hoeveelheid column
 * @method array findByNettoInhoudEenheid(string $netto_inhoud_eenheid) Return GsLogistiekeInformatie objects filtered by the netto_inhoud_eenheid column
 * @method array findByZindexNummer(int $zindex_nummer) Return GsLogistiekeInformatie objects filtered by the zindex_nummer column
 * @method array findByHoeveelheidVerpakking(string $hoeveelheid_verpakking) Return GsLogistiekeInformatie objects filtered by the hoeveelheid_verpakking column
 * @method array findByMemocodeEenheidVerpakking(string $memocode_eenheid_verpakking) Return GsLogistiekeInformatie objects filtered by the memocode_eenheid_verpakking column
 * @method array findByFabrikantArtikelCodering(string $fabrikant_artikel_codering) Return GsLogistiekeInformatie objects filtered by the fabrikant_artikel_codering column
 * @method array findByThesaurusVerwijzingStatus(int $thesaurus_verwijzing_status) Return GsLogistiekeInformatie objects filtered by the thesaurus_verwijzing_status column
 * @method array findByStatus(int $status) Return GsLogistiekeInformatie objects filtered by the status column
 */
abstract class BaseGsLogistiekeInformatieQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsLogistiekeInformatieQuery object.
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
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLogistiekeInformatie';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsLogistiekeInformatieQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsLogistiekeInformatieQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsLogistiekeInformatieQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsLogistiekeInformatieQuery) {
            return $criteria;
        }
        $query = new GsLogistiekeInformatieQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$gtin, $gtin_van_de_data_leverancier, $child_gtin]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsLogistiekeInformatie|GsLogistiekeInformatie[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsLogistiekeInformatiePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsLogistiekeInformatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 GsLogistiekeInformatie A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `gtin`, `gtin_van_de_data_leverancier`, `omschrijving_gtin`, `hoogte_hoeveelheid`, `hoogte_eenheid`, `breedte_hoeveelheid`, `breedte_eenheid`, `diepte_hoeveelheid`, `diepte_eenheid`, `bruto_gewicht_hoeveelheid`, `bruto_gewicht_eenheid`, `netto_gewicht_hoeveelheid`, `netto_gewicht_eenheid`, `indicatie_basiseenheid`, `indicatie_consumenteneenheid`, `indicatie_besteleenheid`, `indicatie_levereenheid`, `indicatie_factuureenheid`, `startdatum_beschikbaarheid_verpakking`, `einddatum_beschikbaarheid_verpakking`, `stopdatum_verpakking`, `child_gtin`, `child_gtin_hoeveelheid`, `product_type`, `lijstprijs`, `retailprijs`, `netto_inhoud_hoeveelheid`, `netto_inhoud_eenheid`, `zindex_nummer`, `hoeveelheid_verpakking`, `memocode_eenheid_verpakking`, `fabrikant_artikel_codering`, `thesaurus_verwijzing_status`, `status` FROM `gs_logistieke_informatie` WHERE `gtin` = :p0 AND `gtin_van_de_data_leverancier` = :p1 AND `child_gtin` = :p2';
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
            $obj = new GsLogistiekeInformatie();
            $obj->hydrate($row);
            GsLogistiekeInformatiePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return GsLogistiekeInformatie|GsLogistiekeInformatie[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|GsLogistiekeInformatie[]|mixed the list of results, formatted by the current formatter
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
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsLogistiekeInformatiePeer::GTIN, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(GsLogistiekeInformatiePeer::CHILD_GTIN, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsLogistiekeInformatiePeer::GTIN, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(GsLogistiekeInformatiePeer::CHILD_GTIN, $key[2], Criteria::EQUAL);
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
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::BESTANDNUMMER, $bestandnummer, $comparison);
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
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::MUTATIEKODE, $mutatiekode, $comparison);
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
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByGtin($gtin = null, $comparison = null)
    {
        if (is_array($gtin)) {
            $useMinMax = false;
            if (isset($gtin['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::GTIN, $gtin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gtin['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::GTIN, $gtin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::GTIN, $gtin, $comparison);
    }

    /**
     * Filter the query on the gtin_van_de_data_leverancier column
     *
     * Example usage:
     * <code>
     * $query->filterByGtinVanDeDataLeverancier(1234); // WHERE gtin_van_de_data_leverancier = 1234
     * $query->filterByGtinVanDeDataLeverancier(array(12, 34)); // WHERE gtin_van_de_data_leverancier IN (12, 34)
     * $query->filterByGtinVanDeDataLeverancier(array('min' => 12)); // WHERE gtin_van_de_data_leverancier >= 12
     * $query->filterByGtinVanDeDataLeverancier(array('max' => 12)); // WHERE gtin_van_de_data_leverancier <= 12
     * </code>
     *
     * @param     mixed $gtinVanDeDataLeverancier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByGtinVanDeDataLeverancier($gtinVanDeDataLeverancier = null, $comparison = null)
    {
        if (is_array($gtinVanDeDataLeverancier)) {
            $useMinMax = false;
            if (isset($gtinVanDeDataLeverancier['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER, $gtinVanDeDataLeverancier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gtinVanDeDataLeverancier['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER, $gtinVanDeDataLeverancier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER, $gtinVanDeDataLeverancier, $comparison);
    }

    /**
     * Filter the query on the omschrijving_gtin column
     *
     * Example usage:
     * <code>
     * $query->filterByOmschrijvingGtin('fooValue');   // WHERE omschrijving_gtin = 'fooValue'
     * $query->filterByOmschrijvingGtin('%fooValue%'); // WHERE omschrijving_gtin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $omschrijvingGtin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByOmschrijvingGtin($omschrijvingGtin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($omschrijvingGtin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $omschrijvingGtin)) {
                $omschrijvingGtin = str_replace('*', '%', $omschrijvingGtin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::OMSCHRIJVING_GTIN, $omschrijvingGtin, $comparison);
    }

    /**
     * Filter the query on the hoogte_hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByHoogteHoeveelheid(1234); // WHERE hoogte_hoeveelheid = 1234
     * $query->filterByHoogteHoeveelheid(array(12, 34)); // WHERE hoogte_hoeveelheid IN (12, 34)
     * $query->filterByHoogteHoeveelheid(array('min' => 12)); // WHERE hoogte_hoeveelheid >= 12
     * $query->filterByHoogteHoeveelheid(array('max' => 12)); // WHERE hoogte_hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $hoogteHoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByHoogteHoeveelheid($hoogteHoeveelheid = null, $comparison = null)
    {
        if (is_array($hoogteHoeveelheid)) {
            $useMinMax = false;
            if (isset($hoogteHoeveelheid['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::HOOGTE_HOEVEELHEID, $hoogteHoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hoogteHoeveelheid['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::HOOGTE_HOEVEELHEID, $hoogteHoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::HOOGTE_HOEVEELHEID, $hoogteHoeveelheid, $comparison);
    }

    /**
     * Filter the query on the hoogte_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByHoogteEenheid('fooValue');   // WHERE hoogte_eenheid = 'fooValue'
     * $query->filterByHoogteEenheid('%fooValue%'); // WHERE hoogte_eenheid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hoogteEenheid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByHoogteEenheid($hoogteEenheid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hoogteEenheid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hoogteEenheid)) {
                $hoogteEenheid = str_replace('*', '%', $hoogteEenheid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::HOOGTE_EENHEID, $hoogteEenheid, $comparison);
    }

    /**
     * Filter the query on the breedte_hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByBreedteHoeveelheid(1234); // WHERE breedte_hoeveelheid = 1234
     * $query->filterByBreedteHoeveelheid(array(12, 34)); // WHERE breedte_hoeveelheid IN (12, 34)
     * $query->filterByBreedteHoeveelheid(array('min' => 12)); // WHERE breedte_hoeveelheid >= 12
     * $query->filterByBreedteHoeveelheid(array('max' => 12)); // WHERE breedte_hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $breedteHoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByBreedteHoeveelheid($breedteHoeveelheid = null, $comparison = null)
    {
        if (is_array($breedteHoeveelheid)) {
            $useMinMax = false;
            if (isset($breedteHoeveelheid['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::BREEDTE_HOEVEELHEID, $breedteHoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($breedteHoeveelheid['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::BREEDTE_HOEVEELHEID, $breedteHoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::BREEDTE_HOEVEELHEID, $breedteHoeveelheid, $comparison);
    }

    /**
     * Filter the query on the breedte_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByBreedteEenheid('fooValue');   // WHERE breedte_eenheid = 'fooValue'
     * $query->filterByBreedteEenheid('%fooValue%'); // WHERE breedte_eenheid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $breedteEenheid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByBreedteEenheid($breedteEenheid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($breedteEenheid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $breedteEenheid)) {
                $breedteEenheid = str_replace('*', '%', $breedteEenheid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::BREEDTE_EENHEID, $breedteEenheid, $comparison);
    }

    /**
     * Filter the query on the diepte_hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByDiepteHoeveelheid(1234); // WHERE diepte_hoeveelheid = 1234
     * $query->filterByDiepteHoeveelheid(array(12, 34)); // WHERE diepte_hoeveelheid IN (12, 34)
     * $query->filterByDiepteHoeveelheid(array('min' => 12)); // WHERE diepte_hoeveelheid >= 12
     * $query->filterByDiepteHoeveelheid(array('max' => 12)); // WHERE diepte_hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $diepteHoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByDiepteHoeveelheid($diepteHoeveelheid = null, $comparison = null)
    {
        if (is_array($diepteHoeveelheid)) {
            $useMinMax = false;
            if (isset($diepteHoeveelheid['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::DIEPTE_HOEVEELHEID, $diepteHoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diepteHoeveelheid['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::DIEPTE_HOEVEELHEID, $diepteHoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::DIEPTE_HOEVEELHEID, $diepteHoeveelheid, $comparison);
    }

    /**
     * Filter the query on the diepte_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByDiepteEenheid('fooValue');   // WHERE diepte_eenheid = 'fooValue'
     * $query->filterByDiepteEenheid('%fooValue%'); // WHERE diepte_eenheid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diepteEenheid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByDiepteEenheid($diepteEenheid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diepteEenheid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $diepteEenheid)) {
                $diepteEenheid = str_replace('*', '%', $diepteEenheid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::DIEPTE_EENHEID, $diepteEenheid, $comparison);
    }

    /**
     * Filter the query on the bruto_gewicht_hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByBrutoGewichtHoeveelheid(1234); // WHERE bruto_gewicht_hoeveelheid = 1234
     * $query->filterByBrutoGewichtHoeveelheid(array(12, 34)); // WHERE bruto_gewicht_hoeveelheid IN (12, 34)
     * $query->filterByBrutoGewichtHoeveelheid(array('min' => 12)); // WHERE bruto_gewicht_hoeveelheid >= 12
     * $query->filterByBrutoGewichtHoeveelheid(array('max' => 12)); // WHERE bruto_gewicht_hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $brutoGewichtHoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByBrutoGewichtHoeveelheid($brutoGewichtHoeveelheid = null, $comparison = null)
    {
        if (is_array($brutoGewichtHoeveelheid)) {
            $useMinMax = false;
            if (isset($brutoGewichtHoeveelheid['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::BRUTO_GEWICHT_HOEVEELHEID, $brutoGewichtHoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($brutoGewichtHoeveelheid['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::BRUTO_GEWICHT_HOEVEELHEID, $brutoGewichtHoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::BRUTO_GEWICHT_HOEVEELHEID, $brutoGewichtHoeveelheid, $comparison);
    }

    /**
     * Filter the query on the bruto_gewicht_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByBrutoGewichtEenheid('fooValue');   // WHERE bruto_gewicht_eenheid = 'fooValue'
     * $query->filterByBrutoGewichtEenheid('%fooValue%'); // WHERE bruto_gewicht_eenheid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $brutoGewichtEenheid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByBrutoGewichtEenheid($brutoGewichtEenheid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($brutoGewichtEenheid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $brutoGewichtEenheid)) {
                $brutoGewichtEenheid = str_replace('*', '%', $brutoGewichtEenheid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::BRUTO_GEWICHT_EENHEID, $brutoGewichtEenheid, $comparison);
    }

    /**
     * Filter the query on the netto_gewicht_hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByNettoGewichtHoeveelheid(1234); // WHERE netto_gewicht_hoeveelheid = 1234
     * $query->filterByNettoGewichtHoeveelheid(array(12, 34)); // WHERE netto_gewicht_hoeveelheid IN (12, 34)
     * $query->filterByNettoGewichtHoeveelheid(array('min' => 12)); // WHERE netto_gewicht_hoeveelheid >= 12
     * $query->filterByNettoGewichtHoeveelheid(array('max' => 12)); // WHERE netto_gewicht_hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $nettoGewichtHoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByNettoGewichtHoeveelheid($nettoGewichtHoeveelheid = null, $comparison = null)
    {
        if (is_array($nettoGewichtHoeveelheid)) {
            $useMinMax = false;
            if (isset($nettoGewichtHoeveelheid['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::NETTO_GEWICHT_HOEVEELHEID, $nettoGewichtHoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nettoGewichtHoeveelheid['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::NETTO_GEWICHT_HOEVEELHEID, $nettoGewichtHoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::NETTO_GEWICHT_HOEVEELHEID, $nettoGewichtHoeveelheid, $comparison);
    }

    /**
     * Filter the query on the netto_gewicht_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByNettoGewichtEenheid('fooValue');   // WHERE netto_gewicht_eenheid = 'fooValue'
     * $query->filterByNettoGewichtEenheid('%fooValue%'); // WHERE netto_gewicht_eenheid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nettoGewichtEenheid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByNettoGewichtEenheid($nettoGewichtEenheid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nettoGewichtEenheid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nettoGewichtEenheid)) {
                $nettoGewichtEenheid = str_replace('*', '%', $nettoGewichtEenheid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::NETTO_GEWICHT_EENHEID, $nettoGewichtEenheid, $comparison);
    }

    /**
     * Filter the query on the indicatie_basiseenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByIndicatieBasiseenheid(1234); // WHERE indicatie_basiseenheid = 1234
     * $query->filterByIndicatieBasiseenheid(array(12, 34)); // WHERE indicatie_basiseenheid IN (12, 34)
     * $query->filterByIndicatieBasiseenheid(array('min' => 12)); // WHERE indicatie_basiseenheid >= 12
     * $query->filterByIndicatieBasiseenheid(array('max' => 12)); // WHERE indicatie_basiseenheid <= 12
     * </code>
     *
     * @param     mixed $indicatieBasiseenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByIndicatieBasiseenheid($indicatieBasiseenheid = null, $comparison = null)
    {
        if (is_array($indicatieBasiseenheid)) {
            $useMinMax = false;
            if (isset($indicatieBasiseenheid['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::INDICATIE_BASISEENHEID, $indicatieBasiseenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indicatieBasiseenheid['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::INDICATIE_BASISEENHEID, $indicatieBasiseenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::INDICATIE_BASISEENHEID, $indicatieBasiseenheid, $comparison);
    }

    /**
     * Filter the query on the indicatie_consumenteneenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByIndicatieConsumenteneenheid(1234); // WHERE indicatie_consumenteneenheid = 1234
     * $query->filterByIndicatieConsumenteneenheid(array(12, 34)); // WHERE indicatie_consumenteneenheid IN (12, 34)
     * $query->filterByIndicatieConsumenteneenheid(array('min' => 12)); // WHERE indicatie_consumenteneenheid >= 12
     * $query->filterByIndicatieConsumenteneenheid(array('max' => 12)); // WHERE indicatie_consumenteneenheid <= 12
     * </code>
     *
     * @param     mixed $indicatieConsumenteneenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByIndicatieConsumenteneenheid($indicatieConsumenteneenheid = null, $comparison = null)
    {
        if (is_array($indicatieConsumenteneenheid)) {
            $useMinMax = false;
            if (isset($indicatieConsumenteneenheid['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::INDICATIE_CONSUMENTENEENHEID, $indicatieConsumenteneenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indicatieConsumenteneenheid['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::INDICATIE_CONSUMENTENEENHEID, $indicatieConsumenteneenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::INDICATIE_CONSUMENTENEENHEID, $indicatieConsumenteneenheid, $comparison);
    }

    /**
     * Filter the query on the indicatie_besteleenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByIndicatieBesteleenheid(1234); // WHERE indicatie_besteleenheid = 1234
     * $query->filterByIndicatieBesteleenheid(array(12, 34)); // WHERE indicatie_besteleenheid IN (12, 34)
     * $query->filterByIndicatieBesteleenheid(array('min' => 12)); // WHERE indicatie_besteleenheid >= 12
     * $query->filterByIndicatieBesteleenheid(array('max' => 12)); // WHERE indicatie_besteleenheid <= 12
     * </code>
     *
     * @param     mixed $indicatieBesteleenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByIndicatieBesteleenheid($indicatieBesteleenheid = null, $comparison = null)
    {
        if (is_array($indicatieBesteleenheid)) {
            $useMinMax = false;
            if (isset($indicatieBesteleenheid['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::INDICATIE_BESTELEENHEID, $indicatieBesteleenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indicatieBesteleenheid['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::INDICATIE_BESTELEENHEID, $indicatieBesteleenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::INDICATIE_BESTELEENHEID, $indicatieBesteleenheid, $comparison);
    }

    /**
     * Filter the query on the indicatie_levereenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByIndicatieLevereenheid(1234); // WHERE indicatie_levereenheid = 1234
     * $query->filterByIndicatieLevereenheid(array(12, 34)); // WHERE indicatie_levereenheid IN (12, 34)
     * $query->filterByIndicatieLevereenheid(array('min' => 12)); // WHERE indicatie_levereenheid >= 12
     * $query->filterByIndicatieLevereenheid(array('max' => 12)); // WHERE indicatie_levereenheid <= 12
     * </code>
     *
     * @param     mixed $indicatieLevereenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByIndicatieLevereenheid($indicatieLevereenheid = null, $comparison = null)
    {
        if (is_array($indicatieLevereenheid)) {
            $useMinMax = false;
            if (isset($indicatieLevereenheid['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::INDICATIE_LEVEREENHEID, $indicatieLevereenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indicatieLevereenheid['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::INDICATIE_LEVEREENHEID, $indicatieLevereenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::INDICATIE_LEVEREENHEID, $indicatieLevereenheid, $comparison);
    }

    /**
     * Filter the query on the indicatie_factuureenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByIndicatieFactuureenheid(1234); // WHERE indicatie_factuureenheid = 1234
     * $query->filterByIndicatieFactuureenheid(array(12, 34)); // WHERE indicatie_factuureenheid IN (12, 34)
     * $query->filterByIndicatieFactuureenheid(array('min' => 12)); // WHERE indicatie_factuureenheid >= 12
     * $query->filterByIndicatieFactuureenheid(array('max' => 12)); // WHERE indicatie_factuureenheid <= 12
     * </code>
     *
     * @param     mixed $indicatieFactuureenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByIndicatieFactuureenheid($indicatieFactuureenheid = null, $comparison = null)
    {
        if (is_array($indicatieFactuureenheid)) {
            $useMinMax = false;
            if (isset($indicatieFactuureenheid['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::INDICATIE_FACTUUREENHEID, $indicatieFactuureenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indicatieFactuureenheid['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::INDICATIE_FACTUUREENHEID, $indicatieFactuureenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::INDICATIE_FACTUUREENHEID, $indicatieFactuureenheid, $comparison);
    }

    /**
     * Filter the query on the startdatum_beschikbaarheid_verpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByStartdatumBeschikbaarheidVerpakking('fooValue');   // WHERE startdatum_beschikbaarheid_verpakking = 'fooValue'
     * $query->filterByStartdatumBeschikbaarheidVerpakking('%fooValue%'); // WHERE startdatum_beschikbaarheid_verpakking LIKE '%fooValue%'
     * </code>
     *
     * @param     string $startdatumBeschikbaarheidVerpakking The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByStartdatumBeschikbaarheidVerpakking($startdatumBeschikbaarheidVerpakking = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($startdatumBeschikbaarheidVerpakking)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $startdatumBeschikbaarheidVerpakking)) {
                $startdatumBeschikbaarheidVerpakking = str_replace('*', '%', $startdatumBeschikbaarheidVerpakking);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::STARTDATUM_BESCHIKBAARHEID_VERPAKKING, $startdatumBeschikbaarheidVerpakking, $comparison);
    }

    /**
     * Filter the query on the einddatum_beschikbaarheid_verpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByEinddatumBeschikbaarheidVerpakking('fooValue');   // WHERE einddatum_beschikbaarheid_verpakking = 'fooValue'
     * $query->filterByEinddatumBeschikbaarheidVerpakking('%fooValue%'); // WHERE einddatum_beschikbaarheid_verpakking LIKE '%fooValue%'
     * </code>
     *
     * @param     string $einddatumBeschikbaarheidVerpakking The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByEinddatumBeschikbaarheidVerpakking($einddatumBeschikbaarheidVerpakking = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($einddatumBeschikbaarheidVerpakking)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $einddatumBeschikbaarheidVerpakking)) {
                $einddatumBeschikbaarheidVerpakking = str_replace('*', '%', $einddatumBeschikbaarheidVerpakking);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::EINDDATUM_BESCHIKBAARHEID_VERPAKKING, $einddatumBeschikbaarheidVerpakking, $comparison);
    }

    /**
     * Filter the query on the stopdatum_verpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByStopdatumVerpakking('fooValue');   // WHERE stopdatum_verpakking = 'fooValue'
     * $query->filterByStopdatumVerpakking('%fooValue%'); // WHERE stopdatum_verpakking LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stopdatumVerpakking The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByStopdatumVerpakking($stopdatumVerpakking = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stopdatumVerpakking)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stopdatumVerpakking)) {
                $stopdatumVerpakking = str_replace('*', '%', $stopdatumVerpakking);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::STOPDATUM_VERPAKKING, $stopdatumVerpakking, $comparison);
    }

    /**
     * Filter the query on the child_gtin column
     *
     * Example usage:
     * <code>
     * $query->filterByChildGtin(1234); // WHERE child_gtin = 1234
     * $query->filterByChildGtin(array(12, 34)); // WHERE child_gtin IN (12, 34)
     * $query->filterByChildGtin(array('min' => 12)); // WHERE child_gtin >= 12
     * $query->filterByChildGtin(array('max' => 12)); // WHERE child_gtin <= 12
     * </code>
     *
     * @param     mixed $childGtin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByChildGtin($childGtin = null, $comparison = null)
    {
        if (is_array($childGtin)) {
            $useMinMax = false;
            if (isset($childGtin['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::CHILD_GTIN, $childGtin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($childGtin['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::CHILD_GTIN, $childGtin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::CHILD_GTIN, $childGtin, $comparison);
    }

    /**
     * Filter the query on the child_gtin_hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByChildGtinHoeveelheid(1234); // WHERE child_gtin_hoeveelheid = 1234
     * $query->filterByChildGtinHoeveelheid(array(12, 34)); // WHERE child_gtin_hoeveelheid IN (12, 34)
     * $query->filterByChildGtinHoeveelheid(array('min' => 12)); // WHERE child_gtin_hoeveelheid >= 12
     * $query->filterByChildGtinHoeveelheid(array('max' => 12)); // WHERE child_gtin_hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $childGtinHoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByChildGtinHoeveelheid($childGtinHoeveelheid = null, $comparison = null)
    {
        if (is_array($childGtinHoeveelheid)) {
            $useMinMax = false;
            if (isset($childGtinHoeveelheid['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::CHILD_GTIN_HOEVEELHEID, $childGtinHoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($childGtinHoeveelheid['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::CHILD_GTIN_HOEVEELHEID, $childGtinHoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::CHILD_GTIN_HOEVEELHEID, $childGtinHoeveelheid, $comparison);
    }

    /**
     * Filter the query on the product_type column
     *
     * Example usage:
     * <code>
     * $query->filterByProductType('fooValue');   // WHERE product_type = 'fooValue'
     * $query->filterByProductType('%fooValue%'); // WHERE product_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByProductType($productType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productType)) {
                $productType = str_replace('*', '%', $productType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::PRODUCT_TYPE, $productType, $comparison);
    }

    /**
     * Filter the query on the lijstprijs column
     *
     * Example usage:
     * <code>
     * $query->filterByLijstprijs(1234); // WHERE lijstprijs = 1234
     * $query->filterByLijstprijs(array(12, 34)); // WHERE lijstprijs IN (12, 34)
     * $query->filterByLijstprijs(array('min' => 12)); // WHERE lijstprijs >= 12
     * $query->filterByLijstprijs(array('max' => 12)); // WHERE lijstprijs <= 12
     * </code>
     *
     * @param     mixed $lijstprijs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByLijstprijs($lijstprijs = null, $comparison = null)
    {
        if (is_array($lijstprijs)) {
            $useMinMax = false;
            if (isset($lijstprijs['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::LIJSTPRIJS, $lijstprijs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lijstprijs['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::LIJSTPRIJS, $lijstprijs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::LIJSTPRIJS, $lijstprijs, $comparison);
    }

    /**
     * Filter the query on the retailprijs column
     *
     * Example usage:
     * <code>
     * $query->filterByRetailprijs(1234); // WHERE retailprijs = 1234
     * $query->filterByRetailprijs(array(12, 34)); // WHERE retailprijs IN (12, 34)
     * $query->filterByRetailprijs(array('min' => 12)); // WHERE retailprijs >= 12
     * $query->filterByRetailprijs(array('max' => 12)); // WHERE retailprijs <= 12
     * </code>
     *
     * @param     mixed $retailprijs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByRetailprijs($retailprijs = null, $comparison = null)
    {
        if (is_array($retailprijs)) {
            $useMinMax = false;
            if (isset($retailprijs['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::RETAILPRIJS, $retailprijs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($retailprijs['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::RETAILPRIJS, $retailprijs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::RETAILPRIJS, $retailprijs, $comparison);
    }

    /**
     * Filter the query on the netto_inhoud_hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByNettoInhoudHoeveelheid(1234); // WHERE netto_inhoud_hoeveelheid = 1234
     * $query->filterByNettoInhoudHoeveelheid(array(12, 34)); // WHERE netto_inhoud_hoeveelheid IN (12, 34)
     * $query->filterByNettoInhoudHoeveelheid(array('min' => 12)); // WHERE netto_inhoud_hoeveelheid >= 12
     * $query->filterByNettoInhoudHoeveelheid(array('max' => 12)); // WHERE netto_inhoud_hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $nettoInhoudHoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByNettoInhoudHoeveelheid($nettoInhoudHoeveelheid = null, $comparison = null)
    {
        if (is_array($nettoInhoudHoeveelheid)) {
            $useMinMax = false;
            if (isset($nettoInhoudHoeveelheid['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::NETTO_INHOUD_HOEVEELHEID, $nettoInhoudHoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nettoInhoudHoeveelheid['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::NETTO_INHOUD_HOEVEELHEID, $nettoInhoudHoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::NETTO_INHOUD_HOEVEELHEID, $nettoInhoudHoeveelheid, $comparison);
    }

    /**
     * Filter the query on the netto_inhoud_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByNettoInhoudEenheid('fooValue');   // WHERE netto_inhoud_eenheid = 'fooValue'
     * $query->filterByNettoInhoudEenheid('%fooValue%'); // WHERE netto_inhoud_eenheid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nettoInhoudEenheid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByNettoInhoudEenheid($nettoInhoudEenheid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nettoInhoudEenheid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nettoInhoudEenheid)) {
                $nettoInhoudEenheid = str_replace('*', '%', $nettoInhoudEenheid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::NETTO_INHOUD_EENHEID, $nettoInhoudEenheid, $comparison);
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
     * @see       filterByGsArtikelenRelatedByZindexNummer()
     *
     * @param     mixed $zindexNummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByZindexNummer($zindexNummer = null, $comparison = null)
    {
        if (is_array($zindexNummer)) {
            $useMinMax = false;
            if (isset($zindexNummer['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $zindexNummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zindexNummer['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $zindexNummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $zindexNummer, $comparison);
    }

    /**
     * Filter the query on the hoeveelheid_verpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByHoeveelheidVerpakking(1234); // WHERE hoeveelheid_verpakking = 1234
     * $query->filterByHoeveelheidVerpakking(array(12, 34)); // WHERE hoeveelheid_verpakking IN (12, 34)
     * $query->filterByHoeveelheidVerpakking(array('min' => 12)); // WHERE hoeveelheid_verpakking >= 12
     * $query->filterByHoeveelheidVerpakking(array('max' => 12)); // WHERE hoeveelheid_verpakking <= 12
     * </code>
     *
     * @param     mixed $hoeveelheidVerpakking The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByHoeveelheidVerpakking($hoeveelheidVerpakking = null, $comparison = null)
    {
        if (is_array($hoeveelheidVerpakking)) {
            $useMinMax = false;
            if (isset($hoeveelheidVerpakking['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::HOEVEELHEID_VERPAKKING, $hoeveelheidVerpakking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hoeveelheidVerpakking['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::HOEVEELHEID_VERPAKKING, $hoeveelheidVerpakking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::HOEVEELHEID_VERPAKKING, $hoeveelheidVerpakking, $comparison);
    }

    /**
     * Filter the query on the memocode_eenheid_verpakking column
     *
     * Example usage:
     * <code>
     * $query->filterByMemocodeEenheidVerpakking('fooValue');   // WHERE memocode_eenheid_verpakking = 'fooValue'
     * $query->filterByMemocodeEenheidVerpakking('%fooValue%'); // WHERE memocode_eenheid_verpakking LIKE '%fooValue%'
     * </code>
     *
     * @param     string $memocodeEenheidVerpakking The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByMemocodeEenheidVerpakking($memocodeEenheidVerpakking = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($memocodeEenheidVerpakking)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $memocodeEenheidVerpakking)) {
                $memocodeEenheidVerpakking = str_replace('*', '%', $memocodeEenheidVerpakking);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::MEMOCODE_EENHEID_VERPAKKING, $memocodeEenheidVerpakking, $comparison);
    }

    /**
     * Filter the query on the fabrikant_artikel_codering column
     *
     * Example usage:
     * <code>
     * $query->filterByFabrikantArtikelCodering('fooValue');   // WHERE fabrikant_artikel_codering = 'fooValue'
     * $query->filterByFabrikantArtikelCodering('%fooValue%'); // WHERE fabrikant_artikel_codering LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fabrikantArtikelCodering The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByFabrikantArtikelCodering($fabrikantArtikelCodering = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fabrikantArtikelCodering)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fabrikantArtikelCodering)) {
                $fabrikantArtikelCodering = str_replace('*', '%', $fabrikantArtikelCodering);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::FABRIKANT_ARTIKEL_CODERING, $fabrikantArtikelCodering, $comparison);
    }

    /**
     * Filter the query on the thesaurus_verwijzing_status column
     *
     * Example usage:
     * <code>
     * $query->filterByThesaurusVerwijzingStatus(1234); // WHERE thesaurus_verwijzing_status = 1234
     * $query->filterByThesaurusVerwijzingStatus(array(12, 34)); // WHERE thesaurus_verwijzing_status IN (12, 34)
     * $query->filterByThesaurusVerwijzingStatus(array('min' => 12)); // WHERE thesaurus_verwijzing_status >= 12
     * $query->filterByThesaurusVerwijzingStatus(array('max' => 12)); // WHERE thesaurus_verwijzing_status <= 12
     * </code>
     *
     * @param     mixed $thesaurusVerwijzingStatus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByThesaurusVerwijzingStatus($thesaurusVerwijzingStatus = null, $comparison = null)
    {
        if (is_array($thesaurusVerwijzingStatus)) {
            $useMinMax = false;
            if (isset($thesaurusVerwijzingStatus['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::THESAURUS_VERWIJZING_STATUS, $thesaurusVerwijzingStatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thesaurusVerwijzingStatus['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::THESAURUS_VERWIJZING_STATUS, $thesaurusVerwijzingStatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::THESAURUS_VERWIJZING_STATUS, $thesaurusVerwijzingStatus, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus(1234); // WHERE status = 1234
     * $query->filterByStatus(array(12, 34)); // WHERE status IN (12, 34)
     * $query->filterByStatus(array('min' => 12)); // WHERE status >= 12
     * $query->filterByStatus(array('max' => 12)); // WHERE status <= 12
     * </code>
     *
     * @param     mixed $status The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (is_array($status)) {
            $useMinMax = false;
            if (isset($status['min'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::STATUS, $status['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($status['max'])) {
                $this->addUsingAlias(GsLogistiekeInformatiePeer::STATUS, $status['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsLogistiekeInformatiePeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsLogistiekeInformatieQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelenRelatedByZindexNummer($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $gsArtikelen->getZinummer(), $comparison);
        } elseif ($gsArtikelen instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $gsArtikelen->toKeyValue('PrimaryKey', 'Zinummer'), $comparison);
        } else {
            throw new PropelException('filterByGsArtikelenRelatedByZindexNummer() only accepts arguments of type GsArtikelen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsArtikelenRelatedByZindexNummer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function joinGsArtikelenRelatedByZindexNummer($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsArtikelenRelatedByZindexNummer');

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
            $this->addJoinObject($join, 'GsArtikelenRelatedByZindexNummer');
        }

        return $this;
    }

    /**
     * Use the GsArtikelenRelatedByZindexNummer relation GsArtikelen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery A secondary query class using the current class as primary query
     */
    public function useGsArtikelenRelatedByZindexNummerQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinGsArtikelenRelatedByZindexNummer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelenRelatedByZindexNummer', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery');
    }

    /**
     * Filter the query by a related GsArtikelen object
     *
     * @param   GsArtikelen|PropelObjectCollection $gsArtikelen  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 GsLogistiekeInformatieQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByGsArtikelenRelatedByZinummer($gsArtikelen, $comparison = null)
    {
        if ($gsArtikelen instanceof GsArtikelen) {
            return $this
                ->addUsingAlias(GsLogistiekeInformatiePeer::ZINDEX_NUMMER, $gsArtikelen->getZinummer(), $comparison);
        } elseif ($gsArtikelen instanceof PropelObjectCollection) {
            return $this
                ->useGsArtikelenRelatedByZinummerQuery()
                ->filterByPrimaryKeys($gsArtikelen->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByGsArtikelenRelatedByZinummer() only accepts arguments of type GsArtikelen or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the GsArtikelenRelatedByZinummer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function joinGsArtikelenRelatedByZinummer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('GsArtikelenRelatedByZinummer');

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
            $this->addJoinObject($join, 'GsArtikelenRelatedByZinummer');
        }

        return $this;
    }

    /**
     * Use the GsArtikelenRelatedByZinummer relation GsArtikelen object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery A secondary query class using the current class as primary query
     */
    public function useGsArtikelenRelatedByZinummerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinGsArtikelenRelatedByZinummer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'GsArtikelenRelatedByZinummer', '\PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   GsLogistiekeInformatie $gsLogistiekeInformatie Object to remove from the list of results
     *
     * @return GsLogistiekeInformatieQuery The current query, for fluid interface
     */
    public function prune($gsLogistiekeInformatie = null)
    {
        if ($gsLogistiekeInformatie) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsLogistiekeInformatiePeer::GTIN), $gsLogistiekeInformatie->getGtin(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsLogistiekeInformatiePeer::GTIN_VAN_DE_DATA_LEVERANCIER), $gsLogistiekeInformatie->getGtinVanDeDataLeverancier(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(GsLogistiekeInformatiePeer::CHILD_GTIN), $gsLogistiekeInformatie->getChildGtin(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
