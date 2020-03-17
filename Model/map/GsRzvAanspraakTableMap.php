<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_rzv_aanspraak' table.
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
class GsRzvAanspraakTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsRzvAanspraakTableMap';

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
        $this->setName('gs_rzv_aanspraak');
        $this->setPhpName('GsRzvAanspraak');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsRzvAanspraak');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addForeignPrimaryKey('zinummer', 'Zinummer', 'INTEGER' , 'gs_artikelen', 'zinummer', true, null, null);
        $this->addForeignPrimaryKey('zinummer', 'Zinummer', 'INTEGER' , 'gs_artikel_eigenschappen', 'zindex_nummer', true, null, null);
        $this->addForeignKey('thesaurus_rzv_verstrekking', 'ThesaurusRzvVerstrekking', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('rzvverstrekking', 'Rzvverstrekking', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addForeignKey('thesaurus_rzv_hulpmiddelen', 'ThesaurusRzvHulpmiddelen', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('hulpmiddelen_zorg', 'HulpmiddelenZorg', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addForeignKey('rzv_thesaurus_120', 'RzvThesaurus120', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('rzvvoorwaarden_bijlage_2', 'RzvvoorwaardenBijlage2', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addColumn('tekstmodule', 'Tekstmodule', 'INTEGER', false, null, null);
        $this->addColumn('tekst_verwijzing', 'TekstVerwijzing', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsArtikelen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::MANY_TO_ONE, array('zinummer' => 'zinummer', ), null, null);
        $this->addRelation('GsArtikelEigenschappen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelEigenschappen', RelationMap::MANY_TO_ONE, array('zinummer' => 'zindex_nummer', ), null, null);
        $this->addRelation('RzvVerstrekkingOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesaurus_rzv_verstrekking' => 'thesaurusnummer', 'rzvverstrekking' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('RzvHulpmiddelenOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesaurus_rzv_hulpmiddelen' => 'thesaurusnummer', 'hulpmiddelen_zorg' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('RzvVoorwaardenOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('rzv_thesaurus_120' => 'thesaurusnummer', 'rzvvoorwaarden_bijlage_2' => 'thesaurus_itemnummer', ), null, null);
    } // buildRelations()

} // GsRzvAanspraakTableMap
