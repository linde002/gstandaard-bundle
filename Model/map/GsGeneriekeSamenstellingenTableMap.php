<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_generieke_samenstellingen' table.
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
class GsGeneriekeSamenstellingenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsGeneriekeSamenstellingenTableMap';

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
        $this->setName('gs_generieke_samenstellingen');
        $this->setPhpName('GsGeneriekeSamenstellingen');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeSamenstellingen');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('aanduiding_werkzaamhulpstof', 'AanduidingWerkzaamhulpstof', 'VARCHAR', true, 255, null);
        $this->addPrimaryKey('gskcode', 'Gskcode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('volledige_generieke_naam_kode', 'VolledigeGeneriekeNaamKode', 'INTEGER', true, null, null);
        $this->addColumn('omgerekende_hoeveelheid', 'OmgerekendeHoeveelheid', 'DECIMAL', false, 12, null);
        $this->addColumn('eenh_omgerekende_hoeveelheid_kode', 'EenhOmgerekendeHoeveelheidKode', 'INTEGER', false, null, null);
        $this->addColumn('basiseenheid_product_kode', 'BasiseenheidProductKode', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsGeneriekeSamenstellingenTableMap
