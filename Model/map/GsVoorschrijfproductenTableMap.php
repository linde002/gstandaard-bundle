<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_voorschrijfproducten' table.
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
class GsVoorschrijfproductenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsVoorschrijfproductenTableMap';

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
        $this->setName('gs_voorschrijfproducten');
        $this->setPhpName('GsVoorschrijfproducten');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsVoorschrijfproducten');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addForeignPrimaryKey('prkcode', 'Prkcode', 'INTEGER' , 'gs_voorschrijfpr_geneesmiddel_identific', 'prkcode', true, null, null);
        $this->addForeignKey('naamnummer_prescriptie_product', 'NaamnummerPrescriptieProduct', 'INTEGER', 'gs_namen', 'naamnummer', false, null, null);
        $this->addColumn('verwijzing_naar_kenmerken_bestand', 'VerwijzingNaarKenmerkenBestand', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsVoorschrijfprGeneesmiddelIdentific', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVoorschrijfprGeneesmiddelIdentific', RelationMap::MANY_TO_ONE, array('prkcode' => 'prkcode', ), null, null);
        $this->addRelation('GsNamen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsNamen', RelationMap::MANY_TO_ONE, array('naamnummer_prescriptie_product' => 'naamnummer', ), null, null);
    } // buildRelations()

} // GsVoorschrijfproductenTableMap
