<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_declaratietabel_dure_geneesmiddelen' table.
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
class GsDeclaratietabelDureGeneesmiddelenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsDeclaratietabelDureGeneesmiddelenTableMap';

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
        $this->setName('gs_declaratietabel_dure_geneesmiddelen');
        $this->setPhpName('GsDeclaratietabelDureGeneesmiddelen');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsDeclaratietabelDureGeneesmiddelen');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addForeignPrimaryKey('handelsproduktkode', 'Handelsproduktkode', 'INTEGER' , 'gs_handelsproducten', 'handelsproduktkode', true, null, null);
        $this->addPrimaryKey('zorgactiviteit_code', 'ZorgactiviteitCode', 'INTEGER', true, null, null);
        $this->addColumn('omschrijving', 'Omschrijving', 'VARCHAR', false, 255, null);
        $this->addColumn('hoeveelheid_per_toedieningseenheid', 'HoeveelheidPerToedieningseenheid', 'DECIMAL', false, 8, null);
        $this->addForeignKey('thesaurus_verwijzing_eenheid', 'ThesaurusVerwijzingEenheid', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('eenheid', 'Eenheid', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addColumn('omrekenfactor_aantal_toedieningseenheden_per_hpk', 'OmrekenfactorAantalToedieningseenhedenPerHpk', 'DECIMAL', false, 14, null);
        $this->addColumn('tarief', 'Tarief', 'DECIMAL', false, 8, null);
        $this->addForeignKey('thesaurus_nummer_beleidsregel', 'ThesaurusNummerBeleidsregel', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('itemnummer_beleidsregel', 'ItemnummerBeleidsregel', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addColumn('zorgactiviteit_voldoet_aan_beleidsregel', 'ZorgactiviteitVoldoetAanBeleidsregel', 'TINYINT', false, null, null);
        $this->addColumn('startdatum', 'Startdatum', 'DATE', false, null, null);
        $this->addColumn('einddatum', 'Einddatum', 'DATE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsHandelsproducten', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten', RelationMap::MANY_TO_ONE, array('handelsproduktkode' => 'handelsproduktkode', ), null, null);
        $this->addRelation('BeleidsregelOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesaurus_nummer_beleidsregel' => 'thesaurusnummer', 'itemnummer_beleidsregel' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('ToedieningsEenheidOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesaurus_verwijzing_eenheid' => 'thesaurusnummer', 'eenheid' => 'thesaurus_itemnummer', ), null, null);
    } // buildRelations()

} // GsDeclaratietabelDureGeneesmiddelenTableMap
