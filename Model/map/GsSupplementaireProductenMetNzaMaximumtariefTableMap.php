<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_supplementaire_producten_met_nza_maximumtarief' table.
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
class GsSupplementaireProductenMetNzaMaximumtariefTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsSupplementaireProductenMetNzaMaximumtariefTableMap';

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
        $this->setName('gs_supplementaire_producten_met_nza_maximumtarief');
        $this->setPhpName('GsSupplementaireProductenMetNzaMaximumtarief');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsSupplementaireProductenMetNzaMaximumtarief');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addForeignPrimaryKey('zindex_nummer', 'ZindexNummer', 'INTEGER' , 'gs_artikelen', 'zinummer', true, null, null);
        $this->addColumn('nza_maximum_tarief_inc_btw_laag', 'NzaMaximumTariefIncBtwLaag', 'DECIMAL', false, 14, null);
        $this->addColumn('thesaurus_nummer_soort_supplementair_product', 'ThesaurusNummerSoortSupplementairProduct', 'INTEGER', false, null, null);
        $this->addColumn('soort_supplementair_product', 'SoortSupplementairProduct', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsArtikelen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::MANY_TO_ONE, array('zindex_nummer' => 'zinummer', ), null, null);
    } // buildRelations()

} // GsSupplementaireProductenMetNzaMaximumtariefTableMap
