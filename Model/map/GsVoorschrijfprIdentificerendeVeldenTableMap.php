<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_voorschrijfpr_identificerende_velden' table.
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
class GsVoorschrijfprIdentificerendeVeldenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsVoorschrijfprIdentificerendeVeldenTableMap';

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
        $this->setName('gs_voorschrijfpr_identificerende_velden');
        $this->setPhpName('GsVoorschrijfprIdentificerendeVelden');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsVoorschrijfprIdentificerendeVelden');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addForeignPrimaryKey('prkcode', 'Prkcode', 'INTEGER' , 'gs_voorschrijfpr_geneesmiddel_identific', 'prkcode', true, null, null);
        $this->addPrimaryKey('identificerend_kenmerk', 'IdentificerendKenmerk', 'VARCHAR', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsVoorschrijfprGeneesmiddelIdentific', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVoorschrijfprGeneesmiddelIdentific', RelationMap::MANY_TO_ONE, array('prkcode' => 'prkcode', ), null, null);
    } // buildRelations()

} // GsVoorschrijfprIdentificerendeVeldenTableMap
