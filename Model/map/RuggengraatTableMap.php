<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gstandaard_ruggengraat' table.
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
class RuggengraatTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.RuggengraatTableMap';

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
        $this->setName('gstandaard_ruggengraat');
        $this->setPhpName('Ruggengraat');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\Ruggengraat');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('zindex_nummer', 'ZindexNummer', 'INTEGER' , 'gs_artikelen', 'zinummer', true, null, null);
        $this->addForeignKey('hpk', 'Hpk', 'INTEGER', 'gs_handelsproducten', 'handelsproduktkode', false, null, null);
        $this->addForeignKey('prk', 'Prk', 'INTEGER', 'gs_voorschrijfpr_geneesmiddel_identific', 'prkcode', false, null, null);
        $this->addForeignKey('gpk', 'Gpk', 'INTEGER', 'gs_generieke_producten', 'generiekeproductcode', false, null, null);
        $this->addForeignKey('atc', 'Atc', 'VARCHAR', 'gs_atc_codes', 'atccode', false, 7, null);
        $this->addColumn('artikel_naam', 'ArtikelNaam', 'VARCHAR', false, 255, null);
        $this->addColumn('hpk_naam', 'HpkNaam', 'VARCHAR', false, 255, null);
        $this->addColumn('prk_naam', 'PrkNaam', 'VARCHAR', false, 255, null);
        $this->addColumn('gpk_naam', 'GpkNaam', 'VARCHAR', false, 255, null);
        $this->addColumn('atc_naam', 'AtcNaam', 'VARCHAR', false, 255, null);
        $this->addForeignKey('leverancier_nummer', 'LeverancierNummer', 'INTEGER', 'gs_naw_gegevens_gstandaard', 'naw_nummer', false, null, null);
        $this->addColumn('leverancier_naam', 'LeverancierNaam', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsArtikelen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::MANY_TO_ONE, array('zindex_nummer' => 'zinummer', ), null, null);
        $this->addRelation('GsHandelsproducten', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten', RelationMap::MANY_TO_ONE, array('hpk' => 'handelsproduktkode', ), null, null);
        $this->addRelation('GsNawGegevensGstandaard', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsNawGegevensGstandaard', RelationMap::MANY_TO_ONE, array('leverancier_nummer' => 'naw_nummer', ), null, null);
        $this->addRelation('GsVoorschrijfprGeneesmiddelIdentific', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVoorschrijfprGeneesmiddelIdentific', RelationMap::MANY_TO_ONE, array('prk' => 'prkcode', ), null, null);
        $this->addRelation('GsGeneriekeProducten', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeProducten', RelationMap::MANY_TO_ONE, array('gpk' => 'generiekeproductcode', ), null, null);
        $this->addRelation('GsAtcCodes', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAtcCodes', RelationMap::MANY_TO_ONE, array('atc' => 'atccode', ), null, null);
    } // buildRelations()

} // RuggengraatTableMap
