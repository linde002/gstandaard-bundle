<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_thesauri_totaal' table.
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
class GsThesauriTotaalTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsThesauriTotaalTableMap';

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
        $this->setName('gs_thesauri_totaal');
        $this->setPhpName('GsThesauriTotaal');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('thesaurusnummer', 'Thesaurusnummer', 'INTEGER', true, null, null);
        $this->addPrimaryKey('thesaurus_itemnummer', 'ThesaurusItemnummer', 'INTEGER', true, null, null);
        $this->addColumn('memokode_item', 'MemokodeItem', 'VARCHAR', false, 255, null);
        $this->addColumn('naam_item_4_posities', 'NaamItem4Posities', 'VARCHAR', false, 255, null);
        $this->addColumn('naam_item_15_posities', 'NaamItem15Posities', 'VARCHAR', false, 255, null);
        $this->addColumn('naam_item_25_posities', 'NaamItem25Posities', 'VARCHAR', false, 255, null);
        $this->addColumn('naam_item_50_posities', 'NaamItem50Posities', 'VARCHAR', false, 255, null);
        $this->addColumn('aanvullende_kode_1', 'AanvullendeKode1', 'VARCHAR', false, 255, null);
        $this->addColumn('aanvullende_kode_2', 'AanvullendeKode2', 'VARCHAR', false, 255, null);
        $this->addColumn('aanvullende_kode_3', 'AanvullendeKode3', 'VARCHAR', false, 255, null);
        $this->addColumn('aanvullende_kode_4', 'AanvullendeKode4', 'VARCHAR', false, 255, null);
        $this->addColumn('aanvullende_kode_5', 'AanvullendeKode5', 'VARCHAR', false, 255, null);
        $this->addColumn('aanvullende_kode_6', 'AanvullendeKode6', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsSupplementaireProductenHistorie', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsSupplementaireProductenHistorie', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesaurus_nummer_soort_supplementair_product', 'thesaurus_itemnummer' => 'soort_supplementair_product', ), null, null, 'GsSupplementaireProductenHistories');
        $this->addRelation('GsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRzvAanspraak', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesaurus_rzv_verstrekking', 'thesaurus_itemnummer' => 'rzvverstrekking', ), null, null, 'GsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking');
        $this->addRelation('GsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRzvAanspraak', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesaurus_rzv_hulpmiddelen', 'thesaurus_itemnummer' => 'hulpmiddelen_zorg', ), null, null, 'GsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg');
        $this->addRelation('GsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRzvAanspraak', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'rzv_thesaurus_120', 'thesaurus_itemnummer' => 'rzvvoorwaarden_bijlage_2', ), null, null, 'GsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2');
        $this->addRelation('GsAanvullendeMedicatiebewakingsgegevens', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsAanvullendeMedicatiebewakingsgegevens', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesnr_bewakingssoort', 'thesaurus_itemnummer' => 'bewakingssoort', ), null, null, 'GsAanvullendeMedicatiebewakingsgegevenss');
        $this->addRelation('GsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLogistiekeVerpakkingsinformatie', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesaurus_soorten_verpakkingen', 'thesaurus_itemnummer' => 'thesaurusitem_soorten_verpakkingen', ), null, null, 'GsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen');
        $this->addRelation('GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLogistiekeVerpakkingsinformatie', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesaurus_met_items_van_eenheden', 'thesaurus_itemnummer' => 'thesaurusitem_van_eenheid_hoogte', ), null, null, 'GsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte');
        $this->addRelation('GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLogistiekeVerpakkingsinformatie', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesaurus_met_items_van_eenheden', 'thesaurus_itemnummer' => 'thesaurusitem_van_eenheid_diepte', ), null, null, 'GsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte');
        $this->addRelation('GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLogistiekeVerpakkingsinformatie', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesaurus_met_items_van_eenheden', 'thesaurus_itemnummer' => 'thesaurusitem_van_eenheid_breedte', ), null, null, 'GsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte');
        $this->addRelation('GsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'land_van_herkomst_thesaurus_nummer', 'thesaurus_itemnummer' => 'land_van_herkomst_kode', ), null, null, 'GsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode');
        $this->addRelation('GsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'hoofdverpakking_omschrijving_thesnr', 'thesaurus_itemnummer' => 'hoofdverpakking_omschrijving_kode', ), null, null, 'GsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode');
        $this->addRelation('GsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'deelverpakking_omschrijving_thesnr', 'thesaurus_itemnummer' => 'deelverpakking_omschrijving_kode', ), null, null, 'GsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode');
        $this->addRelation('GsBijzondereKenmerken', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsBijzondereKenmerken', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesnr_bijzondere_kenmerken', 'thesaurus_itemnummer' => 'bijzondere_kenmerk', ), null, null, 'GsBijzondereKenmerkens');
        $this->addRelation('GsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDailyDefinedDose', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'dddeenheid_thesaurusnummer', 'thesaurus_itemnummer' => 'dddeenheid', ), null, null, 'GsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid');
        $this->addRelation('GsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDailyDefinedDose', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'ddd_toedieningsweg_thesaurusnummer', 'thesaurus_itemnummer' => 'dddtoedieningsweg', ), null, null, 'GsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg');
        $this->addRelation('GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDeclaratietabelDureGeneesmiddelen', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesaurus_nummer_beleidsregel', 'thesaurus_itemnummer' => 'itemnummer_beleidsregel', ), null, null, 'GsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel');
        $this->addRelation('GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDeclaratietabelDureGeneesmiddelen', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesaurus_verwijzing_eenheid', 'thesaurus_itemnummer' => 'eenheid', ), null, null, 'GsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid');
        $this->addRelation('GsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeProducten', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'farmaceutische_vorm_thesaurusnummer', 'thesaurus_itemnummer' => 'farmaceutische_vorm_code', ), null, null, 'GsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode');
        $this->addRelation('GsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsGeneriekeProducten', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'toedieningsweg_thesaurusnummer', 'thesaurus_itemnummer' => 'toedieningsweg_code', ), null, null, 'GsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode');
        $this->addRelation('GsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'eenheid_inkoophoeveelheid_thesnr', 'thesaurus_itemnummer' => 'eenheid_inkoophoeveelheid', ), null, null, 'GsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid');
        $this->addRelation('GsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'basiseenheid_verpakking_thesnr', 'thesaurus_itemnummer' => 'basiseenheid_verpakking', ), null, null, 'GsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking');
        $this->addRelation('GsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'emballagemateriaal_thesaurusnummer', 'thesaurus_itemnummer' => 'emballagemateriaal_kode', ), null, null, 'GsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode');
        $this->addRelation('GsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'emballagesluiting_thesaurusnummer', 'thesaurus_itemnummer' => 'emballagesluiting_kode', ), null, null, 'GsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode');
        $this->addRelation('GsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'emballagedoseerinr_thesaurusnr', 'thesaurus_itemnummer' => 'emballagedoseerinrichting_kode', ), null, null, 'GsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode');
        $this->addRelation('GsHandelsproductenRelatedByKleurThesaurusnummerKleurKode', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'kleur_thesaurusnummer', 'thesaurus_itemnummer' => 'kleur_kode', ), null, null, 'GsHandelsproductensRelatedByKleurThesaurusnummerKleurKode');
        $this->addRelation('GsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'smaak_thesaurusnummer', 'thesaurus_itemnummer' => 'smaak_kode', ), null, null, 'GsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode');
        $this->addRelation('GsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'bereidingsvoorschr_thesaurusnummer', 'thesaurus_itemnummer' => 'bereidingsvoorschrift_kode', ), null, null, 'GsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode');
        $this->addRelation('GsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'produktgroep_thesaurusnummer', 'thesaurus_itemnummer' => 'produktgroep_kode', ), null, null, 'GsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode');
        $this->addRelation('GsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesaurus_rzv_verstrekking', 'thesaurus_itemnummer' => 'rzvverstrekking', ), null, null, 'GsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking');
        $this->addRelation('GsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'rzv_thesaurus_120', 'thesaurus_itemnummer' => 'rzvvoorwaarden_bijlage_2', ), null, null, 'GsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2');
        $this->addRelation('GsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsIngegevenSamenstellingen', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'eenh_hvh_werkzstof_thesaurus_1', 'thesaurus_itemnummer' => 'eenhhoeveelheid_werkzame_stof_kode', ), null, null, 'GsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode');
        $this->addRelation('GsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsIngegevenSamenstellingen', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'stamtoedieningsweg_thesaurus_58', 'thesaurus_itemnummer' => 'stamtoedieningsweg_code', ), null, null, 'GsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode');
        $this->addRelation('GsNawGegevensGstandaard', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsNawGegevensGstandaard', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesaurusnummer_soort_naw', 'thesaurus_itemnummer' => 'naw_soort', ), null, null, 'GsNawGegevensGstandaards');
        $this->addRelation('GsPreferentieBeleid', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPreferentieBeleid', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesaurusverwijzing_preferentie_status', 'thesaurus_itemnummer' => 'preferentie_status', ), null, null, 'GsPreferentieBeleids');
        $this->addRelation('GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPrijsTariefTabel', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesaurusverwijzing_soort_codering', 'thesaurus_itemnummer' => 'soort_codering', ), null, null, 'GsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering');
        $this->addRelation('GsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPrijsTariefTabel', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesaurusverwijzing_srt_tariefprijsbedrag', 'thesaurus_itemnummer' => 'soort_tariefprijsbedrag', ), null, null, 'GsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag');
        $this->addRelation('GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPrijsTariefTabel', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesaurusverwijzing_soort_bron', 'thesaurus_itemnummer' => 'soort_bron', ), null, null, 'GsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron');
        $this->addRelation('GsRelatieOngewensteGroepensnk', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRelatieOngewensteGroepensnk', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'ongewenste_groepen_thesaurus_122', 'thesaurus_itemnummer' => 'ongewenste_groepsnummer', ), null, null, 'GsRelatieOngewensteGroepensnks');
        $this->addRelation('GsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPrescriptieProduct', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesnr_reden_voorschrijven_hpk_niveau', 'thesaurus_itemnummer' => 'reden_voorschrijven_hpk_niveau', ), null, null, 'GsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau');
        $this->addRelation('GsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPrescriptieProduct', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesnr_emballagetype', 'thesaurus_itemnummer' => 'emballagetype', ), null, null, 'GsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype');
        $this->addRelation('GsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPrescriptieProduct', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesnr_basiseenheid_product', 'thesaurus_itemnummer' => 'basiseenheid_product', ), null, null, 'GsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct');
        $this->addRelation('GsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPrescriptieProduct', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesnr_hulpmiddel_aard', 'thesaurus_itemnummer' => 'hulpmiddel_aard', ), null, null, 'GsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard');
        $this->addRelation('GsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPrescriptieProduct', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesnr_reden_hulpstof_identificerend', 'thesaurus_itemnummer' => 'reden_hulpstof_identificerend', ), null, null, 'GsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend');
        $this->addRelation('GsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPrescriptieProduct', RelationMap::ONE_TO_MANY, array('thesaurusnummer' => 'thesnr_verwijzing_extra_kenmerk', 'thesaurus_itemnummer' => 'verwijzing_extra_kenmerk', ), null, null, 'GsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk');
    } // buildRelations()

} // GsThesauriTotaalTableMap
