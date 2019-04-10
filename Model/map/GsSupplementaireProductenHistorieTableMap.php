<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_supplementaire_producten_historie' table.
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
class GsSupplementaireProductenHistorieTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsSupplementaireProductenHistorieTableMap';

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
        $this->setName('gs_supplementaire_producten_historie');
        $this->setPhpName('GsSupplementaireProductenHistorie');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsSupplementaireProductenHistorie');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('datum_product', 'DatumProduct', 'DATE', true, null, null);
        $this->addForeignPrimaryKey('zindex_nummer', 'ZindexNummer', 'INTEGER' , 'gs_artikelen', 'zinummer', true, null, null);
        $this->addColumn('nza_maximum_tarief_inc_btw_laag', 'NzaMaximumTariefIncBtwLaag', 'DECIMAL', false, 14, null);
        $this->addForeignKey('thesaurus_nummer_soort_supplementair_product', 'ThesaurusNummerSoortSupplementairProduct', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('soort_supplementair_product', 'SoortSupplementairProduct', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsArtikelen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::MANY_TO_ONE, array('zindex_nummer' => 'zinummer', ), null, null);
        $this->addRelation('GsThesauriTotaal', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesaurus_nummer_soort_supplementair_product' => 'thesaurusnummer', 'soort_supplementair_product' => 'thesaurus_itemnummer', ), null, null);
    } // buildRelations()

} // GsSupplementaireProductenHistorieTableMap
