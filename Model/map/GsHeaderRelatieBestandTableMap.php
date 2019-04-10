<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_header_relatie_bestand' table.
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
class GsHeaderRelatieBestandTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsHeaderRelatieBestandTableMap';

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
        $this->setName('gs_header_relatie_bestand');
        $this->setPhpName('GsHeaderRelatieBestand');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsHeaderRelatieBestand');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('relatie_soort_nummer', 'RelatieSoortNummer', 'INTEGER', true, null, null);
        $this->addColumn('relatieomschrijving', 'Relatieomschrijving', 'VARCHAR', false, 255, null);
        $this->addColumn('verwijzing_relatie_bestand_1', 'VerwijzingRelatieBestand1', 'VARCHAR', false, 255, null);
        $this->addColumn('verwijzing_relatie_thesauri_1', 'VerwijzingRelatieThesauri1', 'INTEGER', false, null, null);
        $this->addColumn('verwijzing_identificierende_rubriek_1', 'VerwijzingIdentificierendeRubriek1', 'VARCHAR', false, 255, null);
        $this->addColumn('verwijzing_relatie_bestand_2', 'VerwijzingRelatieBestand2', 'VARCHAR', false, 255, null);
        $this->addColumn('verwijzing_relatie_thesauri_2', 'VerwijzingRelatieThesauri2', 'INTEGER', false, null, null);
        $this->addColumn('verwijzing_identificierende_rubriek_2', 'VerwijzingIdentificierendeRubriek2', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsHeaderRelatieBestandTableMap
