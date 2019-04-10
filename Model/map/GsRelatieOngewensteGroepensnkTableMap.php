<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_relatie_ongewenste_groepensnk' table.
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
class GsRelatieOngewensteGroepensnkTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsRelatieOngewensteGroepensnkTableMap';

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
        $this->setName('gs_relatie_ongewenste_groepensnk');
        $this->setPhpName('GsRelatieOngewensteGroepensnk');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsRelatieOngewensteGroepensnk');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('stamnaamcode', 'Stamnaamcode', 'INTEGER', true, null, null);
        $this->addForeignKey('ongewenste_groepen_thesaurus_122', 'OngewensteGroepenThesaurus122', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignPrimaryKey('ongewenste_groepsnummer', 'OngewensteGroepsnummer', 'INTEGER' , 'gs_thesauri_totaal', 'thesaurus_itemnummer', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('OngewensteGroepenOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('ongewenste_groepen_thesaurus_122' => 'thesaurusnummer', 'ongewenste_groepsnummer' => 'thesaurus_itemnummer', ), null, null);
    } // buildRelations()

} // GsRelatieOngewensteGroepensnkTableMap
