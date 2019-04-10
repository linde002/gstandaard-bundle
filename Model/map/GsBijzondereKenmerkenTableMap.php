<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_bijzondere_kenmerken' table.
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
class GsBijzondereKenmerkenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsBijzondereKenmerkenTableMap';

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
        $this->setName('gs_bijzondere_kenmerken');
        $this->setPhpName('GsBijzondereKenmerken');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsBijzondereKenmerken');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addForeignPrimaryKey('prkcode', 'Prkcode', 'INTEGER' , 'gs_voorschrijfpr_geneesmiddel_identific', 'prkcode', true, null, null);
        $this->addForeignPrimaryKey('handelsproduktkode', 'Handelsproduktkode', 'INTEGER' , 'gs_handelsproducten', 'handelsproduktkode', true, null, null);
        $this->addForeignKey('thesnr_bijzondere_kenmerken', 'ThesnrBijzondereKenmerken', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignPrimaryKey('bijzondere_kenmerk', 'BijzondereKenmerk', 'INTEGER' , 'gs_thesauri_totaal', 'thesaurus_itemnummer', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('KenmerkOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesnr_bijzondere_kenmerken' => 'thesaurusnummer', 'bijzondere_kenmerk' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('GsHandelsproducten', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten', RelationMap::MANY_TO_ONE, array('handelsproduktkode' => 'handelsproduktkode', ), null, null);
        $this->addRelation('GsVoorschrijfprGeneesmiddelIdentific', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVoorschrijfprGeneesmiddelIdentific', RelationMap::MANY_TO_ONE, array('prkcode' => 'prkcode', ), null, null);
    } // buildRelations()

} // GsBijzondereKenmerkenTableMap
