<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_bestanden' table.
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
class GsBestandenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsBestandenTableMap';

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
        $this->setName('gs_bestanden');
        $this->setPhpName('GsBestanden');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsBestanden');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('naam_van_het_bestand', 'NaamVanHetBestand', 'VARCHAR', true, 255, null);
        $this->addColumn('bestandomschrijving', 'Bestandomschrijving', 'VARCHAR', false, 255, null);
        $this->addColumn('bestandscode', 'Bestandscode', 'INTEGER', false, null, null);
        $this->addColumn('recordlengte', 'Recordlengte', 'INTEGER', false, null, null);
        $this->addColumn('ingangsdatum', 'Ingangsdatum', 'INTEGER', false, null, null);
        $this->addColumn('eindedatum_uitlevering', 'EindedatumUitlevering', 'INTEGER', false, null, null);
        $this->addColumn('uitgavedatum', 'Uitgavedatum', 'INTEGER', false, null, null);
        $this->addColumn('status', 'Status', 'VARCHAR', false, 255, null);
        $this->addColumn('aantal_ongewijzigde_records', 'AantalOngewijzigdeRecords', 'INTEGER', false, null, null);
        $this->addColumn('aantal_vervallen_records', 'AantalVervallenRecords', 'INTEGER', false, null, null);
        $this->addColumn('aantal_gewijzigde_records', 'AantalGewijzigdeRecords', 'INTEGER', false, null, null);
        $this->addColumn('aantal_nieuwe_records', 'AantalNieuweRecords', 'INTEGER', false, null, null);
        $this->addColumn('totaal_aantal_records', 'TotaalAantalRecords', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsBestandenTableMap
