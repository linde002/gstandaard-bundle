<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_afgeleide_indicatieaard' table.
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
class GsAfgeleideIndicatieaardTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsAfgeleideIndicatieaardTableMap';

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
        $this->setName('gs_afgeleide_indicatieaard');
        $this->setPhpName('GsAfgeleideIndicatieaard');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsAfgeleideIndicatieaard');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('atccode', 'Atccode', 'VARCHAR', true, 255, null);
        $this->addColumn('thesaurusverwijzing_indicatie', 'ThesaurusverwijzingIndicatie', 'INTEGER', false, null, null);
        $this->addPrimaryKey('indicatie_aard', 'IndicatieAard', 'INTEGER', true, null, null);
        $this->addColumn('thesaurusverwijzing_hardheid_afleiding', 'ThesaurusverwijzingHardheidAfleiding', 'INTEGER', false, null, null);
        $this->addColumn('hardheid_afleiding', 'HardheidAfleiding', 'INTEGER', false, null, null);
        $this->addColumn('thesaurusverwijzing_tekstmodule', 'ThesaurusverwijzingTekstmodule', 'INTEGER', false, null, null);
        $this->addColumn('tekstmodule', 'Tekstmodule', 'INTEGER', false, null, null);
        $this->addColumn('thesaurusverwijzing_tekstsoort', 'ThesaurusverwijzingTekstsoort', 'INTEGER', false, null, null);
        $this->addColumn('tekstsoort', 'Tekstsoort', 'INTEGER', false, null, null);
        $this->addColumn('tekst_nivo_kode', 'TekstNivoKode', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsAfgeleideIndicatieaardTableMap
