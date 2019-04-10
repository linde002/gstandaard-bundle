<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_aanvullende_medicatiebewakingsgegevens' table.
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
class GsAanvullendeMedicatiebewakingsgegevensTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsAanvullendeMedicatiebewakingsgegevensTableMap';

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
        $this->setName('gs_aanvullende_medicatiebewakingsgegevens');
        $this->setPhpName('GsAanvullendeMedicatiebewakingsgegevens');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsAanvullendeMedicatiebewakingsgegevens');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addForeignKey('thesnr_bewakingssoort', 'ThesnrBewakingssoort', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignPrimaryKey('bewakingssoort', 'Bewakingssoort', 'INTEGER' , 'gs_thesauri_totaal', 'thesaurus_itemnummer', true, null, null);
        $this->addPrimaryKey('medicatiebewaking_identificerende_code', 'MedicatiebewakingIdentificerendeCode', 'INTEGER', true, null, null);
        $this->addColumn('thesaurusverwijzing_aanvullende_voorwaarde', 'ThesaurusverwijzingAanvullendeVoorwaarde', 'INTEGER', false, null, null);
        $this->addPrimaryKey('medicatiebewaking_aanvullende_voorwaarde', 'MedicatiebewakingAanvullendeVoorwaarde', 'INTEGER', true, null, null);
        $this->addPrimaryKey('codering_waarde_1_alfanumeriek', 'CoderingWaarde1Alfanumeriek', 'VARCHAR', true, 255, null);
        $this->addPrimaryKey('codering_waarde_2_numeriek', 'CoderingWaarde2Numeriek', 'INTEGER', true, null, null);
        $this->addColumn('codering_waarde_3_numeriek', 'CoderingWaarde3Numeriek', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('BewakingssoortOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesnr_bewakingssoort' => 'thesaurusnummer', 'bewakingssoort' => 'thesaurus_itemnummer', ), null, null);
    } // buildRelations()

} // GsAanvullendeMedicatiebewakingsgegevensTableMap
