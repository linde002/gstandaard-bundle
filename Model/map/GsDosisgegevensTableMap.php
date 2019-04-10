<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_dosisgegevens' table.
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
class GsDosisgegevensTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsDosisgegevensTableMap';

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
        $this->setName('gs_dosisgegevens');
        $this->setPhpName('GsDosisgegevens');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsDosisgegevens');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('dosisnummer', 'Dosisnummer', 'INTEGER', true, null, null);
        $this->addColumn('norm_minimum', 'NormMinimum', 'DECIMAL', false, 6, null);
        $this->addColumn('norm_maximum', 'NormMaximum', 'DECIMAL', false, 6, null);
        $this->addColumn('absoluut_minimum', 'AbsoluutMinimum', 'DECIMAL', false, 6, null);
        $this->addColumn('absoluut_maximum', 'AbsoluutMaximum', 'DECIMAL', false, 6, null);
        $this->addColumn('norm_minimum_per_kg', 'NormMinimumPerKg', 'DECIMAL', false, 6, null);
        $this->addColumn('norm_maximum_per_kg', 'NormMaximumPerKg', 'DECIMAL', false, 6, null);
        $this->addColumn('absoluut_minimum_per_kg', 'AbsoluutMinimumPerKg', 'DECIMAL', false, 6, null);
        $this->addColumn('absoluut_maximum_per_kg', 'AbsoluutMaximumPerKg', 'DECIMAL', false, 6, null);
        $this->addColumn('norm_minimum_per_m2', 'NormMinimumPerM2', 'DECIMAL', false, 6, null);
        $this->addColumn('norm_maximum_per_m2', 'NormMaximumPerM2', 'DECIMAL', false, 6, null);
        $this->addColumn('absoluut_minimum_per_m2', 'AbsoluutMinimumPerM2', 'DECIMAL', false, 6, null);
        $this->addColumn('absoluut_maximum_per_m2', 'AbsoluutMaximumPerM2', 'DECIMAL', false, 6, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsDosisgegevensTableMap
