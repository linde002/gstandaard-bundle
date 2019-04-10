<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_interacties_omschrijving_codering_wfg' table.
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
class GsInteractiesOmschrijvingCoderingWfgTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsInteractiesOmschrijvingCoderingWfgTableMap';

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
        $this->setName('gs_interacties_omschrijving_codering_wfg');
        $this->setPhpName('GsInteractiesOmschrijvingCoderingWfg');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsInteractiesOmschrijvingCoderingWfg');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('soort_codering', 'SoortCodering', 'INTEGER', true, null, null);
        $this->addPrimaryKey('wfgcode', 'Wfgcode', 'VARCHAR', true, 255, null);
        $this->addPrimaryKey('regelnummer', 'Regelnummer', 'INTEGER', true, null, null);
        $this->addColumn('tekstuele_omschrijving', 'TekstueleOmschrijving', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsInteractiesOmschrijvingCoderingWfgTableMap
