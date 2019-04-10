<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_aanvvoorwaarden_medbew_en_tekstblok' table.
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
class GsAanvvoorwaardenMedbewEnTekstblokTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsAanvvoorwaardenMedbewEnTekstblokTableMap';

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
        $this->setName('gs_aanvvoorwaarden_medbew_en_tekstblok');
        $this->setPhpName('GsAanvvoorwaardenMedbewEnTekstblok');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsAanvvoorwaardenMedbewEnTekstblok');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addColumn('thesnr_bewakingssoort', 'ThesnrBewakingssoort', 'INTEGER', false, null, null);
        $this->addPrimaryKey('bewakingssoort', 'Bewakingssoort', 'INTEGER', true, null, null);
        $this->addPrimaryKey('medicatiebewaking_identificerende_code', 'MedicatiebewakingIdentificerendeCode', 'INTEGER', true, null, null);
        $this->addColumn('thesaurus_verwijzing_tekstmodule', 'ThesaurusVerwijzingTekstmodule', 'INTEGER', false, null, null);
        $this->addPrimaryKey('tekstmodule', 'Tekstmodule', 'INTEGER', true, null, null);
        $this->addColumn('thesaurus_verwijzing_tekstsoort', 'ThesaurusVerwijzingTekstsoort', 'INTEGER', false, null, null);
        $this->addPrimaryKey('tekstsoort', 'Tekstsoort', 'INTEGER', true, null, null);
        $this->addPrimaryKey('tekstbloknummer', 'Tekstbloknummer', 'INTEGER', true, null, null);
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
    } // buildRelations()

} // GsAanvvoorwaardenMedbewEnTekstblokTableMap
