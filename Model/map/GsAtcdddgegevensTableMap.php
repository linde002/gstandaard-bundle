<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_atcdddgegevens' table.
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
class GsAtcdddgegevensTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsAtcdddgegevensTableMap';

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
        $this->setName('gs_atcdddgegevens');
        $this->setPhpName('GsAtcdddgegevens');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsAtcdddgegevens');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addForeignPrimaryKey('atccode', 'Atccode', 'VARCHAR' , 'gs_atc_codes', 'atccode', true, 255, null);
        $this->addPrimaryKey('atcvolgnummer', 'Atcvolgnummer', 'INTEGER', true, null, null);
        $this->addColumn('atcnederlandse_omschrijving', 'AtcnederlandseOmschrijving', 'VARCHAR', false, 255, null);
        $this->addColumn('atcindicator', 'Atcindicator', 'VARCHAR', false, 255, null);
        $this->addColumn('selectiekode_voor_dubbelmedicatie', 'SelectiekodeVoorDubbelmedicatie', 'VARCHAR', false, 255, null);
        $this->addColumn('aantal_dddclusters', 'AantalDddclusters', 'INTEGER', false, null, null);
        $this->addColumn('dddaantal', 'Dddaantal', 'DECIMAL', false, null, null);
        $this->addColumn('dddeenheid', 'Dddeenheid', 'VARCHAR', false, 255, null);
        $this->addColumn('dddtoedieningsweg_kode', 'DddtoedieningswegKode', 'INTEGER', false, null, null);
        $this->addColumn('dddindicator', 'Dddindicator', 'VARCHAR', false, 255, null);
        $this->addColumn('dddstatusaanduiding', 'Dddstatusaanduiding', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsAtcCodes', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAtcCodes', RelationMap::MANY_TO_ONE, array('atccode' => 'atccode', ), null, null);
    } // buildRelations()

} // GsAtcdddgegevensTableMap
