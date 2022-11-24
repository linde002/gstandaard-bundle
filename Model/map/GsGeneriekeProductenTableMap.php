<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_generieke_producten' table.
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
class GsGeneriekeProductenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsGeneriekeProductenTableMap';

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
        $this->setName('gs_generieke_producten');
        $this->setPhpName('GsGeneriekeProducten');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeProducten');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('generiekeproductcode', 'Generiekeproductcode', 'INTEGER', true, null, null);
        $this->addColumn('gskcode', 'Gskcode', 'INTEGER', false, null, null);
        $this->addForeignKey('farmaceutische_vorm_thesaurusnummer', 'FarmaceutischeVormThesaurusnummer', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('farmaceutische_vorm_code', 'FarmaceutischeVormCode', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addForeignKey('toedieningsweg_thesaurusnummer', 'ToedieningswegThesaurusnummer', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('toedieningsweg_code', 'ToedieningswegCode', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addForeignKey('naamnummer_volledige_gpknaam', 'NaamnummerVolledigeGpknaam', 'INTEGER', 'gs_namen', 'naamnummer', false, null, null);
        $this->addForeignKey('naamnummer_gpkstofnaam', 'NaamnummerGpkstofnaam', 'INTEGER', 'gs_namen', 'naamnummer', false, null, null);
        $this->addColumn('ingegeven_sterkte_stofnamen', 'IngegevenSterkteStofnamen', 'VARCHAR', false, 255, null);
        $this->addColumn('min_leeftijd_als_contraindicatie', 'MinLeeftijdAlsContraindicatie', 'INTEGER', false, null, null);
        $this->addColumn('minleeftijd_als_ci_tekstnummer', 'MinleeftijdAlsCiTekstnummer', 'INTEGER', false, null, null);
        $this->addColumn('aantal_dagen_voorschrijfperiode', 'AantalDagenVoorschrijfperiode', 'INTEGER', false, null, null);
        $this->addColumn('tekstcode_voorschrijfperiode', 'TekstcodeVoorschrijfperiode', 'INTEGER', false, null, null);
        $this->addColumn('tnnr_waarschuwing_substitutie_voorschrijven_prk', 'TnnrWaarschuwingSubstitutieVoorschrijvenPrk', 'INTEGER', false, null, null);
        $this->addColumn('waarschuwing_substitutie_en_voorschrijven_prk', 'WaarschuwingSubstitutieEnVoorschrijvenPrk', 'INTEGER', false, null, null);
        $this->addColumn('superproduktkode', 'Superproduktkode', 'INTEGER', false, null, null);
        $this->addColumn('stamtoedieningsweg_thesaurus_58', 'StamtoedieningswegThesaurus58', 'INTEGER', false, null, null);
        $this->addColumn('stamtoedieningsweg_code', 'StamtoedieningswegCode', 'INTEGER', false, null, null);
        $this->addForeignKey('atccode', 'Atccode', 'VARCHAR', 'gs_atc_codes', 'atccode', false, 255, null);
        $this->addColumn('basiseenheid_product_thesaurusnr', 'BasiseenheidProductThesaurusnr', 'INTEGER', false, null, null);
        $this->addColumn('basiseenheid_product_kode', 'BasiseenheidProductKode', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsAtcCodes', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAtcCodes', RelationMap::MANY_TO_ONE, array('atccode' => 'atccode', ), null, null);
        $this->addRelation('GsNamenRelatedByNaamnummerVolledigeGpknaam', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsNamen', RelationMap::MANY_TO_ONE, array('naamnummer_volledige_gpknaam' => 'naamnummer', ), null, null);
        $this->addRelation('Stofnaam', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsNamen', RelationMap::MANY_TO_ONE, array('naamnummer_gpkstofnaam' => 'naamnummer', ), null, null);
        $this->addRelation('FarmaceutischeVormOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('farmaceutische_vorm_thesaurusnummer' => 'thesaurusnummer', 'farmaceutische_vorm_code' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('ToedieningswegOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('toedieningsweg_thesaurusnummer' => 'thesaurusnummer', 'toedieningsweg_code' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('GsArtikelEigenschappen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelEigenschappen', RelationMap::ONE_TO_MANY, array('generiekeproductcode' => 'gpk', ), null, null, 'GsArtikelEigenschappens');
        $this->addRelation('GsPrescriptieProduct', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPrescriptieProduct', RelationMap::ONE_TO_MANY, array('generiekeproductcode' => 'generiekeproductcode', ), null, null, 'GsPrescriptieProducts');
    } // buildRelations()

} // GsGeneriekeProductenTableMap
