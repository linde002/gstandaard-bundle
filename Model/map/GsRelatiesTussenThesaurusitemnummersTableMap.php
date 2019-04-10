<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_relaties_tussen_thesaurusitemnummers' table.
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
class GsRelatiesTussenThesaurusitemnummersTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsRelatiesTussenThesaurusitemnummersTableMap';

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
        $this->setName('gs_relaties_tussen_thesaurusitemnummers');
        $this->setPhpName('GsRelatiesTussenThesaurusitemnummers');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsRelatiesTussenThesaurusitemnummers');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('thesaurus_relatienummer', 'ThesaurusRelatienummer', 'INTEGER', true, null, null);
        $this->addPrimaryKey('thesaurusnummer_in', 'ThesaurusnummerIn', 'INTEGER', true, null, null);
        $this->addPrimaryKey('thesaurusnummer_uit', 'ThesaurusnummerUit', 'INTEGER', true, null, null);
        $this->addPrimaryKey('thesaurus_itemnummer_in', 'ThesaurusItemnummerIn', 'INTEGER', true, null, null);
        $this->addPrimaryKey('thesaurus_itemnummer_uit', 'ThesaurusItemnummerUit', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsRelatiesTussenThesaurusitemnummersTableMap
