<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_voorschrijfpr_geneesmiddel_identific' table.
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
class GsVoorschrijfprGeneesmiddelIdentificTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsVoorschrijfprGeneesmiddelIdentificTableMap';

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
        $this->setName('gs_voorschrijfpr_geneesmiddel_identific');
        $this->setPhpName('GsVoorschrijfprGeneesmiddelIdentific');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsVoorschrijfprGeneesmiddelIdentific');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('prkcode', 'Prkcode', 'INTEGER', true, null, null);
        $this->addColumn('naamstoevoeging', 'Naamstoevoeging', 'VARCHAR', false, 255, null);
        $this->addForeignKey('generiekeproductcode', 'Generiekeproductcode', 'INTEGER', 'gs_generieke_producten', 'generiekeproductcode', false, null, null);
        $this->addColumn('emballagetype_kode', 'EmballagetypeKode', 'INTEGER', false, null, null);
        $this->addColumn('basiseenheid_product_kode', 'BasiseenheidProductKode', 'INTEGER', false, null, null);
        $this->addColumn('hpkgrootte_algemeen', 'HpkgrootteAlgemeen', 'DECIMAL', false, 7, null);
        $this->addColumn('hulpmiddel_aard_1_kode', 'HulpmiddelAard1Kode', 'INTEGER', false, null, null);
        $this->addColumn('hulpmiddel_hoeveelheid_1', 'HulpmiddelHoeveelheid1', 'INTEGER', false, null, null);
        $this->addColumn('hulpmiddel_aard_2_kode', 'HulpmiddelAard2Kode', 'INTEGER', false, null, null);
        $this->addColumn('hulpmiddel_hoeveelheid_2', 'HulpmiddelHoeveelheid2', 'INTEGER', false, null, null);
        $this->addColumn('kode_meervoudigprodukt', 'KodeMeervoudigprodukt', 'VARCHAR', false, 255, null);
        $this->addColumn('hpkgrootte_verbandlengte', 'HpkgrootteVerbandlengte', 'DECIMAL', false, 7, null);
        $this->addColumn('hpkgrootte_verbandbreedte', 'HpkgrootteVerbandbreedte', 'DECIMAL', false, 7, null);
        $this->addColumn('hpkgrootte_iud', 'HpkgrootteIud', 'VARCHAR', false, 255, null);
        $this->addColumn('reden_hulpstof_identificerend', 'RedenHulpstofIdentificerend', 'INTEGER', false, null, null);
        $this->addColumn('instant', 'Instant', 'VARCHAR', false, 255, null);
        $this->addColumn('extra_kenmerk_tbv_voorschrijven', 'ExtraKenmerkTbvVoorschrijven', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsGeneriekeProducten', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeProducten', RelationMap::MANY_TO_ONE, array('generiekeproductcode' => 'generiekeproductcode', ), null, null);
        $this->addRelation('GsArtikelEigenschappen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelEigenschappen', RelationMap::ONE_TO_MANY, array('prkcode' => 'prk', ), null, null, 'GsArtikelEigenschappens');
        $this->addRelation('GsBijzondereKenmerken', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsBijzondereKenmerken', RelationMap::ONE_TO_MANY, array('prkcode' => 'prkcode', ), null, null, 'GsBijzondereKenmerkens');
        $this->addRelation('GsHandelsproducten', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten', RelationMap::ONE_TO_MANY, array('prkcode' => 'prkcode', ), null, null, 'GsHandelsproductens');
        $this->addRelation('GsVoorschrijfprIdentificerendeVelden', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVoorschrijfprIdentificerendeVelden', RelationMap::ONE_TO_MANY, array('prkcode' => 'prkcode', ), null, null, 'GsVoorschrijfprIdentificerendeVeldens');
        $this->addRelation('GsVoorschrijfproducten', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsVoorschrijfproducten', RelationMap::ONE_TO_ONE, array('prkcode' => 'prkcode', ), null, null);
    } // buildRelations()

} // GsVoorschrijfprGeneesmiddelIdentificTableMap
