<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_categorieen' table.
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
class GsCategorieenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsCategorieenTableMap';

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
        $this->setName('gs_categorieen');
        $this->setPhpName('GsCategorieen');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsCategorieen');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('dosiscategorienummer', 'Dosiscategorienummer', 'INTEGER', true, null, null);
        $this->addPrimaryKey('identificerend_recordnummer', 'IdentificerendRecordnummer', 'INTEGER', true, null, null);
        $this->addColumn('leeftijd_in_maanden_vanaf', 'LeeftijdInMaandenVanaf', 'DECIMAL', false, 6, null);
        $this->addColumn('leeftijd_in_maanden_tot', 'LeeftijdInMaandenTot', 'DECIMAL', false, 6, null);
        $this->addColumn('gewicht_in_kg_vanaf', 'GewichtInKgVanaf', 'DECIMAL', false, 6, null);
        $this->addColumn('gewicht_in_kg_tot', 'GewichtInKgTot', 'DECIMAL', false, 6, null);
        $this->addColumn('lichaamsoppervlakte_in_m2_vanaf', 'LichaamsoppervlakteInM2Vanaf', 'DECIMAL', false, 6, null);
        $this->addColumn('lichaamsoppervlakte_in_m2_tot', 'LichaamsoppervlakteInM2Tot', 'DECIMAL', false, 6, null);
        $this->addColumn('frequentie_aantal', 'FrequentieAantal', 'DECIMAL', false, 4, null);
        $this->addColumn('frequentie_tijdseenheid', 'FrequentieTijdseenheid', 'INTEGER', false, null, null);
        $this->addColumn('basisset_voor_denekamp_berekening', 'BasissetVoorDenekampBerekening', 'TINYINT', false, null, null);
        $this->addColumn('dosisnummer', 'Dosisnummer', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsCategorieenTableMap
