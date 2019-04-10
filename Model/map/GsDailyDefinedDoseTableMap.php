<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_daily_defined_dose' table.
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
class GsDailyDefinedDoseTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsDailyDefinedDoseTableMap';

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
        $this->setName('gs_daily_defined_dose');
        $this->setPhpName('GsDailyDefinedDose');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsDailyDefinedDose');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addForeignPrimaryKey('atccode', 'Atccode', 'VARCHAR' , 'gs_atc_codes', 'atccode', true, 255, null);
        $this->addPrimaryKey('dddaantal', 'Dddaantal', 'DECIMAL', true, null, null);
        $this->addForeignKey('dddeenheid_thesaurusnummer', 'DddeenheidThesaurusnummer', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignPrimaryKey('dddeenheid', 'Dddeenheid', 'INTEGER' , 'gs_thesauri_totaal', 'thesaurus_itemnummer', true, null, null);
        $this->addForeignKey('ddd_toedieningsweg_thesaurusnummer', 'DddToedieningswegThesaurusnummer', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignPrimaryKey('dddtoedieningsweg', 'Dddtoedieningsweg', 'INTEGER' , 'gs_thesauri_totaal', 'thesaurus_itemnummer', true, null, null);
        $this->addColumn('ddd_statusaanduiding', 'DddStatusaanduiding', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsAtcCodes', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAtcCodes', RelationMap::MANY_TO_ONE, array('atccode' => 'atccode', ), null, null);
        $this->addRelation('EenheidOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('dddeenheid_thesaurusnummer' => 'thesaurusnummer', 'dddeenheid' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('ToedieningswegOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('ddd_toedieningsweg_thesaurusnummer' => 'thesaurusnummer', 'dddtoedieningsweg' => 'thesaurus_itemnummer', ), null, null);
    } // buildRelations()

} // GsDailyDefinedDoseTableMap
