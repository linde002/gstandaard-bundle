<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_namen' table.
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
class GsNamenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsNamenTableMap';

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
        $this->setName('gs_namen');
        $this->setPhpName('GsNamen');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsNamen');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('naamnummer', 'Naamnummer', 'INTEGER', true, null, null);
        $this->addColumn('memokode', 'Memokode', 'VARCHAR', false, 255, null);
        $this->addColumn('etiketnaam', 'Etiketnaam', 'VARCHAR', false, 255, null);
        $this->addColumn('korte_handelsnaam', 'KorteHandelsnaam', 'VARCHAR', false, 255, null);
        $this->addColumn('naam_volledig', 'NaamVolledig', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsArtikelen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::ONE_TO_MANY, array('naamnummer' => 'artikelnaamnummer', ), null, null, 'GsArtikelens');
        $this->addRelation('GsGeneriekeProductenRelatedByNaamnummerVolledigeGpknaam', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeProducten', RelationMap::ONE_TO_MANY, array('naamnummer' => 'naamnummer_volledige_gpknaam', ), null, null, 'GsGeneriekeProductensRelatedByNaamnummerVolledigeGpknaam');
        $this->addRelation('GeneriekeProducten', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeProducten', RelationMap::ONE_TO_MANY, array('naamnummer' => 'naamnummer_gpkstofnaam', ), null, null, 'GeneriekeProductens');
        $this->addRelation('GsHandelsproducten', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten', RelationMap::ONE_TO_MANY, array('naamnummer' => 'handelsproduktnaamnummer', ), null, null, 'GsHandelsproductens');
        $this->addRelation('GsPrescriptieProduct', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPrescriptieProduct', RelationMap::ONE_TO_MANY, array('naamnummer' => 'naamnummer_prescriptie_product', ), null, null, 'GsPrescriptieProducts');
    } // buildRelations()

} // GsNamenTableMap
