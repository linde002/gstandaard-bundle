<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_prijs_tarief_tabel' table.
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
class GsPrijsTariefTabelTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsPrijsTariefTabelTableMap';

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
        $this->setName('gs_prijs_tarief_tabel');
        $this->setPhpName('GsPrijsTariefTabel');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsPrijsTariefTabel');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addForeignKey('thesaurusverwijzing_soort_codering', 'ThesaurusverwijzingSoortCodering', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignPrimaryKey('soort_codering', 'SoortCodering', 'INTEGER' , 'gs_thesauri_totaal', 'thesaurus_itemnummer', true, null, null);
        $this->addPrimaryKey('unieke_id_van_codering', 'UniekeIdVanCodering', 'VARCHAR', true, 255, null);
        $this->addForeignKey('thesaurusverwijzing_srt_tariefprijsbedrag', 'ThesaurusverwijzingSrtTariefprijsbedrag', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignPrimaryKey('soort_tariefprijsbedrag', 'SoortTariefprijsbedrag', 'INTEGER' , 'gs_thesauri_totaal', 'thesaurus_itemnummer', true, null, null);
        $this->addForeignKey('thesaurusverwijzing_soort_bron', 'ThesaurusverwijzingSoortBron', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignPrimaryKey('soort_bron', 'SoortBron', 'INTEGER' , 'gs_thesauri_totaal', 'thesaurus_itemnummer', true, null, null);
        $this->addPrimaryKey('unieke_id_van_bron', 'UniekeIdVanBron', 'VARCHAR', true, 255, null);
        $this->addPrimaryKey('aanvullende_contract_informatie', 'AanvullendeContractInformatie', 'VARCHAR', true, 255, null);
        $this->addColumn('tarief_prijs_bedrag', 'TariefPrijsBedrag', 'DECIMAL', false, 16, null);
        $this->addColumn('startdatum_van_tariefprijsbedrag', 'StartdatumVanTariefprijsbedrag', 'INTEGER', false, null, null);
        $this->addColumn('einddatum_van_tariefprijsbedrag', 'EinddatumVanTariefprijsbedrag', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SoortCoderingOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesaurusverwijzing_soort_codering' => 'thesaurusnummer', 'soort_codering' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('SoortTariefprijsbedragOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesaurusverwijzing_srt_tariefprijsbedrag' => 'thesaurusnummer', 'soort_tariefprijsbedrag' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('SoortBronOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesaurusverwijzing_soort_bron' => 'thesaurusnummer', 'soort_bron' => 'thesaurus_itemnummer', ), null, null);
    } // buildRelations()

} // GsPrijsTariefTabelTableMap
