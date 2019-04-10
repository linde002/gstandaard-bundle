<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_verrichtingen_tabel' table.
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
class GsVerrichtingenTabelTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsVerrichtingenTabelTableMap';

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
        $this->setName('gs_verrichtingen_tabel');
        $this->setPhpName('GsVerrichtingenTabel');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsVerrichtingenTabel');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('verrichtingsnummer', 'Verrichtingsnummer', 'INTEGER', true, null, null);
        $this->addColumn('thesaurusverwijzing_bron_verrichting', 'ThesaurusverwijzingBronVerrichting', 'INTEGER', false, null, null);
        $this->addPrimaryKey('bron_verrichting', 'BronVerrichting', 'INTEGER', true, null, null);
        $this->addColumn('verrichtingscode_gehanteerd_door_bron', 'VerrichtingscodeGehanteerdDoorBron', 'VARCHAR', false, 255, null);
        $this->addColumn('thesaurusverwijzing_verrichtingsoort', 'ThesaurusverwijzingVerrichtingsoort', 'INTEGER', false, null, null);
        $this->addColumn('verrichtingssoort_code', 'VerrichtingssoortCode', 'INTEGER', false, null, null);
        $this->addColumn('verrichtingsomschrijving', 'Verrichtingsomschrijving', 'VARCHAR', false, 255, null);
        $this->addColumn('memocode', 'Memocode', 'VARCHAR', false, 255, null);
        $this->addColumn('ingangsdatum', 'Ingangsdatum', 'INTEGER', false, null, null);
        $this->addColumn('vervaldatum', 'Vervaldatum', 'INTEGER', false, null, null);
        $this->addColumn('url_voor_beschrijving_van_toepassing_verrichting', 'UrlVoorBeschrijvingVanToepassingVerrichting', 'VARCHAR', false, 255, null);
        $this->addColumn('verrichtingsnummer_bovenliggend_niveau', 'VerrichtingsnummerBovenliggendNiveau', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsVerrichtingenTabelTableMap
