<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_btabel' table.
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
class GsBtabelTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsBtabelTableMap';

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
        $this->setName('gs_btabel');
        $this->setPhpName('GsBtabel');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsBtabel');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('uniek_nummer_aanvullende_tekst', 'UniekNummerAanvullendeTekst', 'INTEGER', true, null, null);
        $this->addColumn('memocode_aanvullende_tekst', 'MemocodeAanvullendeTekst', 'VARCHAR', false, 255, null);
        $this->addColumn('omschrijving_aanvullende_tekst', 'OmschrijvingAanvullendeTekst', 'VARCHAR', false, 255, null);
        $this->addColumn('registratiedatum_gstandaard', 'RegistratiedatumGstandaard', 'VARCHAR', false, 255, null);
        $this->addColumn('versienummer_wcia_tabellen_eerste_opname', 'VersienummerWciaTabellenEersteOpname', 'INTEGER', false, null, null);
        $this->addColumn('versienummer_wcia_tabellen_laatste_wijziging', 'VersienummerWciaTabellenLaatsteWijziging', 'INTEGER', false, null, null);
        $this->addColumn('versienummer_wcia_tabellen_vervallen', 'VersienummerWciaTabellenVervallen', 'INTEGER', false, null, null);
        $this->addColumn('laagste_frequentie_dosering', 'LaagsteFrequentieDosering', 'DECIMAL', false, 12, null);
        $this->addColumn('hoogste_frequentie_dosering', 'HoogsteFrequentieDosering', 'DECIMAL', false, 12, null);
        $this->addColumn('laagste_keerdosering', 'LaagsteKeerdosering', 'DECIMAL', false, 12, null);
        $this->addColumn('hoogste_keerdosering', 'HoogsteKeerdosering', 'DECIMAL', false, 12, null);
        $this->addColumn('omrekenfactor_theoretische_duur', 'OmrekenfactorTheoretischeDuur', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsBtabelTableMap
