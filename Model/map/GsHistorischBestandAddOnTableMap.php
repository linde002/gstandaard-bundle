<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_historisch_bestand_add_on' table.
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
class GsHistorischBestandAddOnTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsHistorischBestandAddOnTableMap';

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
        $this->setName('gs_historisch_bestand_add_on');
        $this->setPhpName('GsHistorischBestandAddOn');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsHistorischBestandAddOn');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('zindex_nummer', 'ZindexNummer', 'INTEGER' , 'gs_artikelen', 'zinummer', true, null, null);
        $this->addForeignPrimaryKey('zindex_nummer', 'ZindexNummer', 'INTEGER' , 'gs_artikel_eigenschappen', 'zindex_nummer', true, null, null);
        $this->addColumn('artikel_omschrijving', 'ArtikelOmschrijving', 'VARCHAR', false, 255, null);
        $this->addColumn('inkoop_hoeveelheid', 'InkoopHoeveelheid', 'DECIMAL', false, 8, null);
        $this->addColumn('inkoop_eenheid', 'InkoopEenheid', 'CHAR', false, 2, null);
        $this->addColumn('maximum_prijs', 'MaximumPrijs', 'DECIMAL', false, 14, null);
        $this->addColumn('soort_product', 'SoortProduct', 'INTEGER', false, null, null);
        $this->addPrimaryKey('indicatie_id', 'IndicatieId', 'INTEGER', true, null, null);
        $this->addColumn('soort_indicatie', 'SoortIndicatie', 'INTEGER', false, null, null);
        $this->addColumn('duiding_id', 'DuidingId', 'INTEGER', false, null, null);
        $this->addColumn('aanspraak_status', 'AanspraakStatus', 'CHAR', false, 1, null);
        $this->addPrimaryKey('start_datum', 'StartDatum', 'DATE', true, null, null);
        $this->addColumn('eind_datum', 'EindDatum', 'DATE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsArtikelen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::MANY_TO_ONE, array('zindex_nummer' => 'zinummer', ), null, null);
        $this->addRelation('GsArtikelEigenschappen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelEigenschappen', RelationMap::MANY_TO_ONE, array('zindex_nummer' => 'zindex_nummer', ), null, null);
    } // buildRelations()

} // GsHistorischBestandAddOnTableMap
