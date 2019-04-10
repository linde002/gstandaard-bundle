<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_rubrieken' table.
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
class GsRubriekenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsRubriekenTableMap';

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
        $this->setName('gs_rubrieken');
        $this->setPhpName('GsRubrieken');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsRubrieken');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('naam_van_het_bestand', 'NaamVanHetBestand', 'VARCHAR', true, 255, null);
        $this->addPrimaryKey('volgnummer', 'Volgnummer', 'INTEGER', true, null, null);
        $this->addColumn('naam_van_de_rubriek', 'NaamVanDeRubriek', 'VARCHAR', false, 255, null);
        $this->addColumn('omschrijving_van_de_rubriek', 'OmschrijvingVanDeRubriek', 'VARCHAR', false, 255, null);
        $this->addColumn('rubriekscode', 'Rubriekscode', 'INTEGER', false, null, null);
        $this->addColumn('sleutelkode_van_de_rubriek', 'SleutelkodeVanDeRubriek', 'VARCHAR', false, 255, null);
        $this->addColumn('type_van_de_rubriek', 'TypeVanDeRubriek', 'VARCHAR', false, 255, null);
        $this->addColumn('lengte_van_de_rubriek', 'LengteVanDeRubriek', 'INTEGER', false, null, null);
        $this->addColumn('aantal_decimalen', 'AantalDecimalen', 'INTEGER', false, null, null);
        $this->addColumn('opmaak', 'Opmaak', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsRubriekenTableMap
