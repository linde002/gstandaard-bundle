<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_prescriptie_product' table.
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
class GsPrescriptieProductTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsPrescriptieProductTableMap';

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
        $this->setName('gs_prescriptie_product');
        $this->setPhpName('GsPrescriptieProduct');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsPrescriptieProduct');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('prkcode', 'Prkcode', 'INTEGER', true, null, null);
        $this->addForeignKey('naamnummer_prescriptie_product', 'NaamnummerPrescriptieProduct', 'INTEGER', 'gs_namen', 'naamnummer', false, null, null);
        $this->addForeignKey('generiekeproductcode', 'Generiekeproductcode', 'INTEGER', 'gs_generieke_producten', 'generiekeproductcode', false, null, null);
        $this->addForeignKey('thesnr_reden_voorschrijven_hpk_niveau', 'ThesnrRedenVoorschrijvenHpkNiveau', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('reden_voorschrijven_hpk_niveau', 'RedenVoorschrijvenHpkNiveau', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addForeignKey('thesnr_emballagetype', 'ThesnrEmballagetype', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('emballagetype', 'Emballagetype', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addForeignKey('thesnr_basiseenheid_product', 'ThesnrBasiseenheidProduct', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('basiseenheid_product', 'BasiseenheidProduct', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addColumn('productgrootte_algemeen', 'ProductgrootteAlgemeen', 'DECIMAL', false, 9, null);
        $this->addForeignKey('thesnr_hulpmiddel_aard', 'ThesnrHulpmiddelAard', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('hulpmiddel_aard', 'HulpmiddelAard', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addColumn('hulpmiddel_aard_hoeveelheid', 'HulpmiddelAardHoeveelheid', 'INTEGER', false, null, null);
        $this->addColumn('meervoudig_product_jn', 'MeervoudigProductJn', 'CHAR', false, 1, null);
        $this->addForeignKey('thesnr_reden_hulpstof_identificerend', 'ThesnrRedenHulpstofIdentificerend', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('reden_hulpstof_identificerend', 'RedenHulpstofIdentificerend', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addForeignKey('thesnr_verwijzing_extra_kenmerk', 'ThesnrVerwijzingExtraKenmerk', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('verwijzing_extra_kenmerk', 'VerwijzingExtraKenmerk', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsGeneriekeProducten', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeProducten', RelationMap::MANY_TO_ONE, array('generiekeproductcode' => 'generiekeproductcode', ), null, null);
        $this->addRelation('GsNamen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsNamen', RelationMap::MANY_TO_ONE, array('naamnummer_prescriptie_product' => 'naamnummer', ), null, null);
        $this->addRelation('RedenVoorschrijvenHpkNiveauOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesnr_reden_voorschrijven_hpk_niveau' => 'thesaurusnummer', 'reden_voorschrijven_hpk_niveau' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('EmballagetypeOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesnr_emballagetype' => 'thesaurusnummer', 'emballagetype' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('BasiseenheidProductOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesnr_basiseenheid_product' => 'thesaurusnummer', 'basiseenheid_product' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('HulpmiddelAardOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesnr_hulpmiddel_aard' => 'thesaurusnummer', 'hulpmiddel_aard' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('RedenHulpstofIdentificerendOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesnr_reden_hulpstof_identificerend' => 'thesaurusnummer', 'reden_hulpstof_identificerend' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('VerwijzingExtraKenmerkOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesnr_verwijzing_extra_kenmerk' => 'thesaurusnummer', 'verwijzing_extra_kenmerk' => 'thesaurus_itemnummer', ), null, null);
    } // buildRelations()

} // GsPrescriptieProductTableMap
