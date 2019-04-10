<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_logistieke_verpakkingsinformatie' table.
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
class GsLogistiekeVerpakkingsinformatieTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsLogistiekeVerpakkingsinformatieTableMap';

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
        $this->setName('gs_logistieke_verpakkingsinformatie');
        $this->setPhpName('GsLogistiekeVerpakkingsinformatie');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsLogistiekeVerpakkingsinformatie');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('gln', 'Gln', 'BIGINT', true, 13, null);
        $this->addPrimaryKey('gtin', 'Gtin', 'BIGINT', true, 14, null);
        $this->addForeignKey('zindex_nummer', 'ZindexNummer', 'INTEGER', 'gs_artikelen', 'zinummer', false, null, null);
        $this->addForeignKey('thesaurus_soorten_verpakkingen', 'ThesaurusSoortenVerpakkingen', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('thesaurusitem_soorten_verpakkingen', 'ThesaurusitemSoortenVerpakkingen', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addColumn('naam_op_verpakking', 'NaamOpVerpakking', 'VARCHAR', false, 255, null);
        $this->addColumn('onderscheidend_kenmerk', 'OnderscheidendKenmerk', 'VARCHAR', false, 255, null);
        $this->addColumn('startdatum_beschikbaarheid_verpakking', 'StartdatumBeschikbaarheidVerpakking', 'DATE', false, null, null);
        $this->addColumn('einddatum_beschikbaarheid_verpakking', 'EinddatumBeschikbaarheidVerpakking', 'DATE', false, null, null);
        $this->addPrimaryKey('gtin_van_het_verpakt_item', 'GtinVanHetVerpaktItem', 'BIGINT', true, 14, null);
        $this->addColumn('aantal_van_het_verpakt_item', 'AantalVanHetVerpaktItem', 'INTEGER', false, null, null);
        $this->addForeignKey('thesaurus_met_items_van_eenheden', 'ThesaurusMetItemsVanEenheden', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('thesaurus_met_items_van_eenheden', 'ThesaurusMetItemsVanEenheden', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('thesaurus_met_items_van_eenheden', 'ThesaurusMetItemsVanEenheden', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addColumn('hoogte_van_verpakking', 'HoogteVanVerpakking', 'DECIMAL', false, 12, null);
        $this->addForeignKey('thesaurusitem_van_eenheid_hoogte', 'ThesaurusitemVanEenheidHoogte', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addColumn('breedte_van_verpakking', 'BreedteVanVerpakking', 'DECIMAL', false, 12, null);
        $this->addForeignKey('thesaurusitem_van_eenheid_breedte', 'ThesaurusitemVanEenheidBreedte', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addColumn('diepte_van_verpakking', 'DiepteVanVerpakking', 'DECIMAL', false, 12, null);
        $this->addForeignKey('thesaurusitem_van_eenheid_diepte', 'ThesaurusitemVanEenheidDiepte', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SoortenVerpakkingOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesaurus_soorten_verpakkingen' => 'thesaurusnummer', 'thesaurusitem_soorten_verpakkingen' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('HoogteEenheidOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesaurus_met_items_van_eenheden' => 'thesaurusnummer', 'thesaurusitem_van_eenheid_hoogte' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('DiepteEenheidOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesaurus_met_items_van_eenheden' => 'thesaurusnummer', 'thesaurusitem_van_eenheid_diepte' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('BreedteEenheidOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesaurus_met_items_van_eenheden' => 'thesaurusnummer', 'thesaurusitem_van_eenheid_breedte' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('GsArtikelen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::MANY_TO_ONE, array('zindex_nummer' => 'zinummer', ), null, null);
    } // buildRelations()

} // GsLogistiekeVerpakkingsinformatieTableMap
