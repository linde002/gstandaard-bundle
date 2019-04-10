<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_ziccode' table.
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
class GsZiccodeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsZiccodeTableMap';

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
        $this->setName('gs_ziccode');
        $this->setPhpName('GsZiccode');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsZiccode');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('instellingscode', 'Instellingscode', 'VARCHAR', true, 255, null);
        $this->addColumn('naam_van_de_instelling', 'NaamVanDeInstelling', 'VARCHAR', false, 255, null);
        $this->addColumn('straatnaam', 'Straatnaam', 'VARCHAR', false, 255, null);
        $this->addColumn('huisnummer', 'Huisnummer', 'INTEGER', false, null, null);
        $this->addColumn('huisnummer_toevoeging', 'HuisnummerToevoeging', 'VARCHAR', false, 255, null);
        $this->addColumn('postcode', 'Postcode', 'VARCHAR', false, 255, null);
        $this->addColumn('plaats', 'Plaats', 'VARCHAR', false, 255, null);
        $this->addColumn('zoeksleutel', 'Zoeksleutel', 'VARCHAR', false, 255, null);
        $this->addColumn('agbcode_van_de_instelling', 'AgbcodeVanDeInstelling', 'INTEGER', false, null, null);
        $this->addColumn('agbcode_toevoegsel_lokaties', 'AgbcodeToevoegselLokaties', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsZiccodeTableMap
