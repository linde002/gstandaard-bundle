<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_interacties_gegevens' table.
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
class GsInteractiesGegevensTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsInteractiesGegevensTableMap';

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
        $this->setName('gs_interacties_gegevens');
        $this->setPhpName('GsInteractiesGegevens');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsInteractiesGegevens');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('interactiewaarschuwing_code', 'InteractiewaarschuwingCode', 'INTEGER', true, null, null);
        $this->addColumn('datum_vastlegging', 'DatumVastlegging', 'INTEGER', false, null, null);
        $this->addColumn('datum_opname_in_gstandaard', 'DatumOpnameInGstandaard', 'INTEGER', false, null, null);
        $this->addColumn('datum_laaste_mutatie_in_gstandaard', 'DatumLaasteMutatieInGstandaard', 'INTEGER', false, null, null);
        $this->addColumn('code_onderbouwing_bewijslast_bij_interactie', 'CodeOnderbouwingBewijslastBijInteractie', 'VARCHAR', false, 255, null);
        $this->addColumn('code_ernst_van_potentieel_effect_bij_interactie', 'CodeErnstVanPotentieelEffectBijInteractie', 'VARCHAR', false, 255, null);
        $this->addColumn('omschrijving_interactiewaarschuwing', 'OmschrijvingInteractiewaarschuwing', 'VARCHAR', false, 255, null);
        $this->addColumn('interactiefolderthesaurus_128', 'Interactiefolderthesaurus128', 'INTEGER', false, null, null);
        $this->addColumn('folder', 'Folder', 'INTEGER', false, null, null);
        $this->addColumn('interactie', 'Interactie', 'TINYINT', false, null, null);
        $this->addColumn('vervolg_actie', 'VervolgActie', 'TINYINT', false, null, null);
        $this->addColumn('ia_te_volgen_door_monitoren', 'IaTeVolgenDoorMonitoren', 'TINYINT', false, null, null);
        $this->addColumn('ook_bij_staken_van_het_voorschrift', 'OokBijStakenVanHetVoorschrift', 'TINYINT', false, null, null);
        $this->addColumn('afhandeling_voorschrijver', 'AfhandelingVoorschrijver', 'TINYINT', false, null, null);
        $this->addColumn('afhandeling_balie_in_apotheek', 'AfhandelingBalieInApotheek', 'TINYINT', false, null, null);
        $this->addColumn('afhandeling_farmaceutisch_specialist', 'AfhandelingFarmaceutischSpecialist', 'TINYINT', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsInteractiesGegevensTableMap
