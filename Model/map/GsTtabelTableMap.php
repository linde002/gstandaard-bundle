<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_ttabel' table.
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
class GsTtabelTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsTtabelTableMap';

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
        $this->setName('gs_ttabel');
        $this->setPhpName('GsTtabel');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsTtabel');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('uniek_nummer_per_tijdseenheid', 'UniekNummerPerTijdseenheid', 'INTEGER', true, null, null);
        $this->addColumn('memocode_tijdseenheid', 'MemocodeTijdseenheid', 'VARCHAR', false, 255, null);
        $this->addColumn('omschrijving_tijdseenheid', 'OmschrijvingTijdseenheid', 'VARCHAR', false, 255, null);
        $this->addColumn('registratiedatum_gstandaard', 'RegistratiedatumGstandaard', 'VARCHAR', false, 255, null);
        $this->addColumn('versienummer_wcia_tabellen_eerste_opname', 'VersienummerWciaTabellenEersteOpname', 'INTEGER', false, null, null);
        $this->addColumn('versienummer_wcia_tabellen_laatste_wijziging', 'VersienummerWciaTabellenLaatsteWijziging', 'INTEGER', false, null, null);
        $this->addColumn('versienummer_wcia_tabellen_vervallen', 'VersienummerWciaTabellenVervallen', 'INTEGER', false, null, null);
        $this->addColumn('omrekeningsfactor_naar_aantal_dagen', 'OmrekeningsfactorNaarAantalDagen', 'DECIMAL', false, 12, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsTtabelTableMap
