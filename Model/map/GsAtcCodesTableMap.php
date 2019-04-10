<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_atc_codes' table.
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
class GsAtcCodesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsAtcCodesTableMap';

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
        $this->setName('gs_atc_codes');
        $this->setPhpName('GsAtcCodes');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsAtcCodes');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('atccode', 'Atccode', 'VARCHAR', true, 255, null);
        $this->addColumn('atcnederlandse_omschrijving', 'AtcnederlandseOmschrijving', 'VARCHAR', false, 255, null);
        $this->addColumn('atcengelse_omschrijving', 'AtcengelseOmschrijving', 'VARCHAR', false, 255, null);
        $this->addColumn('atcindicator', 'Atcindicator', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsArtikelEigenschappen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelEigenschappen', RelationMap::ONE_TO_MANY, array('atccode' => 'atc', ), null, null, 'GsArtikelEigenschappens');
        $this->addRelation('GsAtcCodesExtended', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAtcCodesExtended', RelationMap::ONE_TO_ONE, array('atccode' => 'atccode', ), null, null);
        $this->addRelation('GsAtcdddgegevens', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAtcdddgegevens', RelationMap::ONE_TO_MANY, array('atccode' => 'atccode', ), null, null, 'GsAtcdddgegevenss');
        $this->addRelation('GsDailyDefinedDose', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDailyDefinedDose', RelationMap::ONE_TO_MANY, array('atccode' => 'atccode', ), null, null, 'GsDailyDefinedDoses');
        $this->addRelation('GsGeneriekeProducten', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeProducten', RelationMap::ONE_TO_MANY, array('atccode' => 'atccode', ), null, null, 'GsGeneriekeProductens');
    } // buildRelations()

} // GsAtcCodesTableMap
