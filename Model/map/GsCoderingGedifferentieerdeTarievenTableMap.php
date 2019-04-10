<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_codering_gedifferentieerde_tarieven' table.
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
class GsCoderingGedifferentieerdeTarievenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsCoderingGedifferentieerdeTarievenTableMap';

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
        $this->setName('gs_codering_gedifferentieerde_tarieven');
        $this->setPhpName('GsCoderingGedifferentieerdeTarieven');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsCoderingGedifferentieerdeTarieven');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('codering', 'Codering', 'INTEGER', true, null, null);
        $this->addColumn('volledige_omschrijving', 'VolledigeOmschrijving', 'VARCHAR', false, 255, null);
        $this->addColumn('verkorte_omschrijving', 'VerkorteOmschrijving', 'VARCHAR', false, 255, null);
        $this->addColumn('thesnr_soort_levering', 'ThesnrSoortLevering', 'INTEGER', false, null, null);
        $this->addColumn('soort_levering', 'SoortLevering', 'INTEGER', false, null, null);
        $this->addColumn('thesnr_uitgifte_soort', 'ThesnrUitgifteSoort', 'INTEGER', false, null, null);
        $this->addColumn('soort_uitgifte', 'SoortUitgifte', 'INTEGER', false, null, null);
        $this->addColumn('thesnr_soort_bereiding', 'ThesnrSoortBereiding', 'INTEGER', false, null, null);
        $this->addColumn('soort_bereiding', 'SoortBereiding', 'INTEGER', false, null, null);
        $this->addColumn('thesnr_aanbiedingsmoment', 'ThesnrAanbiedingsmoment', 'INTEGER', false, null, null);
        $this->addColumn('aanbiedingsmoment', 'Aanbiedingsmoment', 'INTEGER', false, null, null);
        $this->addColumn('wmg_tarief', 'WmgTarief', 'DECIMAL', false, 8, null);
        $this->addColumn('thesnr_toeslag_thuis', 'ThesnrToeslagThuis', 'INTEGER', false, null, null);
        $this->addColumn('toeslag_thuis', 'ToeslagThuis', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsCoderingGedifferentieerdeTarievenTableMap
