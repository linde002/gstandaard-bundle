<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_preferentie_beleid' table.
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
class GsPreferentieBeleidTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsPreferentieBeleidTableMap';

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
        $this->setName('gs_preferentie_beleid');
        $this->setPhpName('GsPreferentieBeleid');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsPreferentieBeleid');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addForeignPrimaryKey('zindex_nummer', 'ZindexNummer', 'INTEGER' , 'gs_artikelen', 'zinummer', true, null, null);
        $this->addPrimaryKey('uzovi_code_zorgverzekeraar', 'UzoviCodeZorgverzekeraar', 'INTEGER', true, null, null);
        $this->addForeignKey('thesaurusverwijzing_preferentie_status', 'ThesaurusverwijzingPreferentieStatus', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('preferentie_status', 'PreferentieStatus', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addPrimaryKey('startdatum_preferentie_status', 'StartdatumPreferentieStatus', 'DATE', true, null, null);
        $this->addPrimaryKey('einddatum_preferentie_status', 'EinddatumPreferentieStatus', 'DATE', true, null, null);
        $this->addColumn('preferentie_cluster_code', 'PreferentieClusterCode', 'INTEGER', false, null, null);
        $this->addColumn('prkcode', 'Prkcode', 'INTEGER', false, null, null);
        $this->addColumn('handelsproduktkode', 'Handelsproduktkode', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('PreferentieStatusOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesaurusverwijzing_preferentie_status' => 'thesaurusnummer', 'preferentie_status' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('GsArtikelen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::MANY_TO_ONE, array('zindex_nummer' => 'zinummer', ), null, null);
    } // buildRelations()

} // GsPreferentieBeleidTableMap
