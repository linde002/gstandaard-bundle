<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_codestelsel_zrs_onderling_verband' table.
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
class GsCodestelselZrsOnderlingVerbandTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsCodestelselZrsOnderlingVerbandTableMap';

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
        $this->setName('gs_codestelsel_zrs_onderling_verband');
        $this->setPhpName('GsCodestelselZrsOnderlingVerband');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsCodestelselZrsOnderlingVerband');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('zorg_registratie_nummer_van_de_actie', 'ZorgRegistratieNummerVanDeActie', 'INTEGER', true, null, null);
        $this->addPrimaryKey('zorg_registratie_nummer_van_de_actiegroep', 'ZorgRegistratieNummerVanDeActiegroep', 'INTEGER', true, null, null);
        $this->addPrimaryKey('zorg_registratie_nummer_van_de_actieregel', 'ZorgRegistratieNummerVanDeActieregel', 'INTEGER', true, null, null);
        $this->addPrimaryKey('zorg_registratie_nummer_van_de_analyse', 'ZorgRegistratieNummerVanDeAnalyse', 'INTEGER', true, null, null);
        $this->addPrimaryKey('zorg_registratie_nummer_van_de_subanalyse', 'ZorgRegistratieNummerVanDeSubanalyse', 'INTEGER', true, null, null);
        $this->addPrimaryKey('zorg_registratie_nummer_van_de_aanleiding', 'ZorgRegistratieNummerVanDeAanleiding', 'INTEGER', true, null, null);
        $this->addPrimaryKey('zorg_registratie_nummer_van_de_subaanleiding', 'ZorgRegistratieNummerVanDeSubaanleiding', 'INTEGER', true, null, null);
        $this->addColumn('tekstmodulethesaurus_103', 'Tekstmodulethesaurus103', 'INTEGER', false, null, null);
        $this->addColumn('tekstmodule', 'Tekstmodule', 'INTEGER', false, null, null);
        $this->addColumn('tekstsoortthesaurus_104', 'Tekstsoortthesaurus104', 'INTEGER', false, null, null);
        $this->addColumn('tekstsoort', 'Tekstsoort', 'INTEGER', false, null, null);
        $this->addColumn('tekst_nivo_kode', 'TekstNivoKode', 'INTEGER', false, null, null);
        $this->addColumn('opnemen_als_favoriet_na_aanleiding_en_analyse', 'OpnemenAlsFavorietNaAanleidingEnAnalyse', 'VARCHAR', false, 255, null);
        $this->addColumn('opn_als_favoriet_na_aanleiding_analyse_en_actie', 'OpnAlsFavorietNaAanleidingAnalyseEnActie', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsCodestelselZrsOnderlingVerbandTableMap
