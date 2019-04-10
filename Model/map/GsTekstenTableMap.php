<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_teksten' table.
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
class GsTekstenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsTekstenTableMap';

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
        $this->setName('gs_teksten');
        $this->setPhpName('GsTeksten');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsTeksten');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addColumn('tekstmodulethesaurus_103', 'Tekstmodulethesaurus103', 'INTEGER', false, null, null);
        $this->addPrimaryKey('tekstmodule', 'Tekstmodule', 'INTEGER', true, null, null);
        $this->addPrimaryKey('tekst_nivo_kode', 'TekstNivoKode', 'INTEGER', true, null, null);
        $this->addColumn('tekstsoortthesaurus_104', 'Tekstsoortthesaurus104', 'INTEGER', false, null, null);
        $this->addPrimaryKey('tekstsoort', 'Tekstsoort', 'INTEGER', true, null, null);
        $this->addPrimaryKey('tekstregelnummer', 'Tekstregelnummer', 'INTEGER', true, null, null);
        $this->addColumn('tekst', 'Tekst', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsTekstenTableMap
