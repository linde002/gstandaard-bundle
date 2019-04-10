<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_samenstelling' table.
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
class GsSamenstellingTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsSamenstellingTableMap';

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
        $this->setName('gs_samenstelling');
        $this->setPhpName('GsSamenstelling');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsSamenstelling');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addColumn('thesaurus_verwijzing_soort_code', 'ThesaurusVerwijzingSoortCode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('soort_code', 'SoortCode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('code', 'Code', 'INTEGER', true, null, null);
        $this->addPrimaryKey('generiekenaamkode', 'Generiekenaamkode', 'INTEGER', true, null, null);
        $this->addPrimaryKey('hoeveelheid_generiek_naam', 'HoeveelheidGeneriekNaam', 'DECIMAL', true, 12, null);
        $this->addColumn('thesaurusverwijzig_eenh_hoeveelh_generiek_naam', 'ThesaurusverwijzigEenhHoeveelhGeneriekNaam', 'INTEGER', false, null, null);
        $this->addPrimaryKey('eenheid_hoeveelheid_generieke_naam', 'EenheidHoeveelheidGeneriekeNaam', 'INTEGER', true, null, null);
        $this->addColumn('stamnaamcode', 'Stamnaamcode', 'INTEGER', false, null, null);
        $this->addColumn('hoeveelheid_stamnaam', 'HoeveelheidStamnaam', 'DECIMAL', false, 12, null);
        $this->addColumn('thesaurusverwijzig_eenh_hoeveelh_stamnaam', 'ThesaurusverwijzigEenhHoeveelhStamnaam', 'INTEGER', false, null, null);
        $this->addColumn('eenheid_hoeveelheid_stamnaam', 'EenheidHoeveelheidStamnaam', 'INTEGER', false, null, null);
        $this->addColumn('sterktes_mogen_worden_opgeteld_jn', 'SterktesMogenWordenOpgeteldJn', 'TINYINT', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsSamenstellingTableMap
