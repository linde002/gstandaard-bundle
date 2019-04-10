<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_doseringen_basisalgemeen' table.
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
class GsDoseringenBasisalgemeenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsDoseringenBasisalgemeenTableMap';

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
        $this->setName('gs_doseringen_basisalgemeen');
        $this->setPhpName('GsDoseringenBasisalgemeen');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsDoseringenBasisalgemeen');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('generiekeproductcode', 'Generiekeproductcode', 'INTEGER', true, null, null);
        $this->addColumn('vrijgave_door_het_winap', 'VrijgaveDoorHetWinap', 'TINYINT', false, null, null);
        $this->addColumn('min_leeftijd_in_maanden_voor_verstrekking', 'MinLeeftijdInMaandenVoorVerstrekking', 'INTEGER', false, null, null);
        $this->addColumn('thesaurus_geslachtscodering', 'ThesaurusGeslachtscodering', 'INTEGER', false, null, null);
        $this->addColumn('toegestaan_voor_geslacht', 'ToegestaanVoorGeslacht', 'INTEGER', false, null, null);
        $this->addColumn('percentage_kinderdosering', 'PercentageKinderdosering', 'INTEGER', false, null, null);
        $this->addColumn('kode_hoog_risico_overdosering', 'KodeHoogRisicoOverdosering', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsDoseringenBasisalgemeenTableMap
