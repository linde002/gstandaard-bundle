<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_logistieke_informatie' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.src.PharmaIntelligence.GstandaardBundle.Model.map
 */
class GsLogistiekeInformatieTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsLogistiekeInformatieTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('gs_logistieke_informatie');
        $this->setPhpName('GsLogistiekeInformatie');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsLogistiekeInformatie');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('gtin', 'Gtin', 'BIGINT', true, 14, null);
        $this->addPrimaryKey('gtin_van_de_data_leverancier', 'GtinVanDeDataLeverancier', 'BIGINT', true, 14, null);
        $this->addColumn('omschrijving_gtin', 'OmschrijvingGtin', 'VARCHAR', false, 255, null);
        $this->addColumn('hoogte_hoeveelheid', 'HoogteHoeveelheid', 'DECIMAL', false, 12, null);
        $this->addColumn('hoogte_eenheid', 'HoogteEenheid', 'VARCHAR', false, 255, null);
        $this->addColumn('breedte_hoeveelheid', 'BreedteHoeveelheid', 'DECIMAL', false, 12, null);
        $this->addColumn('breedte_eenheid', 'BreedteEenheid', 'VARCHAR', false, 255, null);
        $this->addColumn('diepte_hoeveelheid', 'DiepteHoeveelheid', 'DECIMAL', false, 12, null);
        $this->addColumn('diepte_eenheid', 'DiepteEenheid', 'VARCHAR', false, 255, null);
        $this->addColumn('bruto_gewicht_hoeveelheid', 'BrutoGewichtHoeveelheid', 'DECIMAL', false, 12, null);
        $this->addColumn('bruto_gewicht_eenheid', 'BrutoGewichtEenheid', 'VARCHAR', false, 255, null);
        $this->addColumn('netto_gewicht_hoeveelheid', 'NettoGewichtHoeveelheid', 'DECIMAL', false, 12, null);
        $this->addColumn('netto_gewicht_eenheid', 'NettoGewichtEenheid', 'VARCHAR', false, 255, null);
        $this->addColumn('indicatie_basiseenheid', 'IndicatieBasiseenheid', 'TINYINT', false, null, null);
        $this->addColumn('indicatie_consumenteneenheid', 'IndicatieConsumenteneenheid', 'TINYINT', false, null, null);
        $this->addColumn('indicatie_besteleenheid', 'IndicatieBesteleenheid', 'TINYINT', false, null, null);
        $this->addColumn('indicatie_levereenheid', 'IndicatieLevereenheid', 'TINYINT', false, null, null);
        $this->addColumn('indicatie_factuureenheid', 'IndicatieFactuureenheid', 'TINYINT', false, null, null);
        $this->addColumn('startdatum_beschikbaarheid_verpakking', 'StartdatumBeschikbaarheidVerpakking', 'VARCHAR', false, 255, null);
        $this->addColumn('einddatum_beschikbaarheid_verpakking', 'EinddatumBeschikbaarheidVerpakking', 'VARCHAR', false, 255, null);
        $this->addColumn('stopdatum_verpakking', 'StopdatumVerpakking', 'VARCHAR', false, 255, null);
        $this->addPrimaryKey('child_gtin', 'ChildGtin', 'BIGINT', true, 14, null);
        $this->addColumn('child_gtin_hoeveelheid', 'ChildGtinHoeveelheid', 'INTEGER', false, null, null);
        $this->addColumn('product_type', 'ProductType', 'VARCHAR', false, 255, null);
        $this->addColumn('lijstprijs', 'Lijstprijs', 'DECIMAL', false, 12, null);
        $this->addColumn('retailprijs', 'Retailprijs', 'DECIMAL', false, 12, null);
        $this->addColumn('netto_inhoud_hoeveelheid', 'NettoInhoudHoeveelheid', 'DECIMAL', false, 12, null);
        $this->addColumn('netto_inhoud_eenheid', 'NettoInhoudEenheid', 'VARCHAR', false, 255, null);
        $this->addForeignKey('zindex_nummer', 'ZindexNummer', 'INTEGER', 'gs_artikelen', 'zinummer', false, null, null);
        $this->addColumn('hoeveelheid_verpakking', 'HoeveelheidVerpakking', 'DECIMAL', false, 8, null);
        $this->addColumn('memocode_eenheid_verpakking', 'MemocodeEenheidVerpakking', 'VARCHAR', false, 255, null);
        $this->addColumn('fabrikant_artikel_codering', 'FabrikantArtikelCodering', 'VARCHAR', false, 255, null);
        $this->addColumn('thesaurus_verwijzing_status', 'ThesaurusVerwijzingStatus', 'INTEGER', false, null, null);
        $this->addColumn('status', 'Status', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsArtikelenRelatedByZindexNummer', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::MANY_TO_ONE, array('zindex_nummer' => 'zinummer', ), null, null);
        $this->addRelation('GsArtikelenRelatedByZinummer', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::ONE_TO_ONE, array('zindex_nummer' => 'zinummer', ), null, null);
    } // buildRelations()

} // GsLogistiekeInformatieTableMap
