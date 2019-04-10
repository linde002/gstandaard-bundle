<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_verpakkingsthesaurus' table.
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
class GsVerpakkingsthesaurusTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsVerpakkingsthesaurusTableMap';

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
        $this->setName('gs_verpakkingsthesaurus');
        $this->setPhpName('GsVerpakkingsthesaurus');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsVerpakkingsthesaurus');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addColumn('identificatie_nummer', 'IdentificatieNummer', 'VARCHAR', false, 255, null);
        $this->addColumn('aantal_hoofdverpakkingen', 'AantalHoofdverpakkingen', 'INTEGER', false, null, null);
        $this->addColumn('hoofdverpakking_omschrijving_kode', 'HoofdverpakkingOmschrijvingKode', 'INTEGER', false, null, null);
        $this->addColumn('aantal_deelverpakkingen', 'AantalDeelverpakkingen', 'INTEGER', false, null, null);
        $this->addColumn('deelverpakking_omschrijving_kode', 'DeelverpakkingOmschrijvingKode', 'INTEGER', false, null, null);
        $this->addColumn('hoeveelheid_per_deelverpakking', 'HoeveelheidPerDeelverpakking', 'DECIMAL', false, 8, null);
        $this->addColumn('basiseenheid_verpakking', 'BasiseenheidVerpakking', 'VARCHAR', false, 255, null);
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsVerpakkingsthesaurusTableMap
