<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_handelsproducten' table.
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
class GsHandelsproductenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsHandelsproductenTableMap';

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
        $this->setName('gs_handelsproducten');
        $this->setPhpName('GsHandelsproducten');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('handelsproduktkode', 'Handelsproduktkode', 'INTEGER', true, null, null);
        $this->addForeignKey('prkcode', 'Prkcode', 'INTEGER', 'gs_prescriptie_product', 'prkcode', false, null, null);
        $this->addColumn('medisch_hulpmiddelkode', 'MedischHulpmiddelkode', 'INTEGER', false, null, null);
        $this->addForeignKey('handelsproduktnaamnummer', 'Handelsproduktnaamnummer', 'INTEGER', 'gs_namen', 'naamnummer', false, null, null);
        $this->addColumn('merkstamnaam', 'Merkstamnaam', 'VARCHAR', false, 255, null);
        $this->addColumn('firmastamnaam', 'Firmastamnaam', 'VARCHAR', false, 255, null);
        $this->addForeignKey('produktgroep_thesaurusnummer', 'ProduktgroepThesaurusnummer', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('produktgroep_kode', 'ProduktgroepKode', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addColumn('soortelijk_gewicht', 'SoortelijkGewicht', 'DECIMAL', false, 7, null);
        $this->addColumn('aantal_ddds_per_basiseenh_produkt', 'AantalDddsPerBasiseenhProdukt', 'DECIMAL', false, 10, null);
        $this->addColumn('aantal_druppels_per_ml', 'AantalDruppelsPerMl', 'DECIMAL', false, 5, null);
        $this->addColumn('pifnummer_thesaurusnummer', 'PifnummerThesaurusnummer', 'INTEGER', false, null, null);
        $this->addColumn('pifnummer', 'Pifnummer', 'INTEGER', false, null, null);
        $this->addColumn('fabrikant_produktkodering', 'FabrikantProduktkodering', 'VARCHAR', false, 255, null);
        $this->addColumn('reden_niet_clusteren_thesaurusnr', 'RedenNietClusterenThesaurusnr', 'INTEGER', false, null, null);
        $this->addColumn('reden_niet_clusteren_kode', 'RedenNietClusterenKode', 'INTEGER', false, null, null);
        $this->addColumn('ftk_1', 'Ftk1', 'INTEGER', false, null, null);
        $this->addColumn('ftk_2', 'Ftk2', 'INTEGER', false, null, null);
        $this->addColumn('ftk_3', 'Ftk3', 'INTEGER', false, null, null);
        $this->addColumn('ftk_4', 'Ftk4', 'INTEGER', false, null, null);
        $this->addColumn('ftk_5', 'Ftk5', 'INTEGER', false, null, null);
        $this->addColumn('informatoriumproductcode', 'Informatoriumproductcode', 'INTEGER', false, null, null);
        $this->addColumn('kode_combinatiepreparaat', 'KodeCombinatiepreparaat', 'INTEGER', false, null, null);
        $this->addColumn('kode_vergift', 'KodeVergift', 'VARCHAR', false, 255, null);
        $this->addColumn('kode_rijvaardigheid', 'KodeRijvaardigheid', 'VARCHAR', false, 255, null);
        $this->addColumn('kode_brandgevaarlijk', 'KodeBrandgevaarlijk', 'VARCHAR', false, 255, null);
        $this->addColumn('gesteriliseerd_voor_geneesmiddelen', 'GesteriliseerdVoorGeneesmiddelen', 'VARCHAR', false, 255, null);
        $this->addColumn('hpkeenheid_thesaurusnummer', 'HpkeenheidThesaurusnummer', 'INTEGER', false, null, null);
        $this->addColumn('hpkeenheid_kode', 'HpkeenheidKode', 'INTEGER', false, null, null);
        $this->addColumn('oplosmiddel_hoeveelheid_1', 'OplosmiddelHoeveelheid1', 'DECIMAL', false, 4, null);
        $this->addColumn('oplosmiddel_aantal_1', 'OplosmiddelAantal1', 'INTEGER', false, null, null);
        $this->addColumn('oplosmiddel_hoeveelheid_2', 'OplosmiddelHoeveelheid2', 'DECIMAL', false, 4, null);
        $this->addColumn('oplosmiddel_aantal_2', 'OplosmiddelAantal2', 'INTEGER', false, null, null);
        $this->addColumn('farmaceutische_kwaliteit', 'FarmaceutischeKwaliteit', 'VARCHAR', false, 255, null);
        $this->addColumn('halffabrikaat_thesaurusnummer', 'HalffabrikaatThesaurusnummer', 'INTEGER', false, null, null);
        $this->addColumn('halffabrikaat_code', 'HalffabrikaatCode', 'INTEGER', false, null, null);
        $this->addColumn('deelbaarheid_aantal', 'DeelbaarheidAantal', 'INTEGER', false, null, null);
        $this->addForeignKey('emballagemateriaal_thesaurusnummer', 'EmballagemateriaalThesaurusnummer', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('emballagemateriaal_kode', 'EmballagemateriaalKode', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addForeignKey('emballagesluiting_thesaurusnummer', 'EmballagesluitingThesaurusnummer', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('emballagesluiting_kode', 'EmballagesluitingKode', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addForeignKey('emballagedoseerinr_thesaurusnr', 'EmballagedoseerinrThesaurusnr', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('emballagedoseerinrichting_kode', 'EmballagedoseerinrichtingKode', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addColumn('hulpstoffen_identificerend', 'HulpstoffenIdentificerend', 'VARCHAR', false, 255, null);
        $this->addForeignKey('kleur_thesaurusnummer', 'KleurThesaurusnummer', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('kleur_kode', 'KleurKode', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addForeignKey('smaak_thesaurusnummer', 'SmaakThesaurusnummer', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('smaak_kode', 'SmaakKode', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addForeignKey('bereidingsvoorschr_thesaurusnummer', 'BereidingsvoorschrThesaurusnummer', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('bereidingsvoorschrift_kode', 'BereidingsvoorschriftKode', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addColumn('fysische_eigenschap_thesaurusnummer', 'FysischeEigenschapThesaurusnummer', 'INTEGER', false, null, null);
        $this->addColumn('fysische_eigenschap_kode', 'FysischeEigenschapKode', 'INTEGER', false, null, null);
        $this->addColumn('grondstofvorm_thesaurusnummer', 'GrondstofvormThesaurusnummer', 'INTEGER', false, null, null);
        $this->addColumn('grondstofvorm_kode', 'GrondstofvormKode', 'INTEGER', false, null, null);
        $this->addColumn('los_verkrijgbaar', 'LosVerkrijgbaar', 'VARCHAR', false, 255, null);
        $this->addColumn('bioequivalente_groep', 'BioequivalenteGroep', 'INTEGER', false, null, null);
        $this->addColumn('kode_radioactieve_stof', 'KodeRadioactieveStof', 'VARCHAR', false, 255, null);
        $this->addColumn('soort_hulpmiddel', 'SoortHulpmiddel', 'INTEGER', false, null, null);
        $this->addForeignKey('rzv_thesaurus_120', 'RzvThesaurus120', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('rzvvoorwaarden_bijlage_2', 'RzvvoorwaardenBijlage2', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addColumn('tekstmodule', 'Tekstmodule', 'INTEGER', false, null, null);
        $this->addColumn('tekst_verwijzing', 'TekstVerwijzing', 'INTEGER', false, null, null);
        $this->addColumn('hulpmiddel_volgens_awbz', 'HulpmiddelVolgensAwbz', 'VARCHAR', false, 255, null);
        $this->addForeignKey('eenheid_inkoophoeveelheid_thesnr', 'EenheidInkoophoeveelheidThesnr', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('eenheid_inkoophoeveelheid', 'EenheidInkoophoeveelheid', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addForeignKey('basiseenheid_verpakking_thesnr', 'BasiseenheidVerpakkingThesnr', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('basiseenheid_verpakking', 'BasiseenheidVerpakking', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addColumn('richtlijn_gebruik_ondergrens', 'RichtlijnGebruikOndergrens', 'DECIMAL', false, 7, null);
        $this->addColumn('richtlijn_gebruik_bovengrens', 'RichtlijnGebruikBovengrens', 'DECIMAL', false, 7, null);
        $this->addForeignKey('thesaurus_rzv_verstrekking', 'ThesaurusRzvVerstrekking', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('rzvverstrekking', 'Rzvverstrekking', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addColumn('thesaurus_rzv_rationaliteit', 'ThesaurusRzvRationaliteit', 'INTEGER', false, null, null);
        $this->addColumn('beoordeling_rationaliteit', 'BeoordelingRationaliteit', 'INTEGER', false, null, null);
        $this->addColumn('thesaurus_rzv_beoordeling', 'ThesaurusRzvBeoordeling', 'INTEGER', false, null, null);
        $this->addColumn('achtergrond_rationaliteit', 'AchtergrondRationaliteit', 'INTEGER', false, null, null);
        $this->addColumn('thesaurus_rzv_hulpmiddelen', 'ThesaurusRzvHulpmiddelen', 'INTEGER', false, null, null);
        $this->addColumn('hulpmiddelen_zorg', 'HulpmiddelenZorg', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsPrescriptieProduct', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPrescriptieProduct', RelationMap::MANY_TO_ONE, array('prkcode' => 'prkcode', ), null, null);
        $this->addRelation('GsNamen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsNamen', RelationMap::MANY_TO_ONE, array('handelsproduktnaamnummer' => 'naamnummer', ), null, null);
        $this->addRelation('InkoophoeveelheidOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('eenheid_inkoophoeveelheid_thesnr' => 'thesaurusnummer', 'eenheid_inkoophoeveelheid' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('BasiseenheidOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('basiseenheid_verpakking_thesnr' => 'thesaurusnummer', 'basiseenheid_verpakking' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('EmballageMateriaalOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('emballagemateriaal_thesaurusnummer' => 'thesaurusnummer', 'emballagemateriaal_kode' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('EmballageSluitingOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('emballagesluiting_thesaurusnummer' => 'thesaurusnummer', 'emballagesluiting_kode' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('EmballageDoseerinrichtingOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('emballagedoseerinr_thesaurusnr' => 'thesaurusnummer', 'emballagedoseerinrichting_kode' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('KleurOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('kleur_thesaurusnummer' => 'thesaurusnummer', 'kleur_kode' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('SmaakOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('smaak_thesaurusnummer' => 'thesaurusnummer', 'smaak_kode' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('BereidingsvoorschrijftOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('bereidingsvoorschr_thesaurusnummer' => 'thesaurusnummer', 'bereidingsvoorschrift_kode' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('ProduktgroepOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('produktgroep_thesaurusnummer' => 'thesaurusnummer', 'produktgroep_kode' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('RzvVerstrekkingOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('thesaurus_rzv_verstrekking' => 'thesaurusnummer', 'rzvverstrekking' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('RzvBijlage2Omschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('rzv_thesaurus_120' => 'thesaurusnummer', 'rzvvoorwaarden_bijlage_2' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('GsArtikelEigenschappen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelEigenschappen', RelationMap::ONE_TO_MANY, array('handelsproduktkode' => 'hpk', ), null, null, 'GsArtikelEigenschappens');
        $this->addRelation('GsArtikelen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen', RelationMap::ONE_TO_MANY, array('handelsproduktkode' => 'handelsproduktkode', ), null, null, 'GsArtikelens');
        $this->addRelation('GsBijzondereKenmerken', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsBijzondereKenmerken', RelationMap::ONE_TO_MANY, array('handelsproduktkode' => 'handelsproduktkode', ), null, null, 'GsBijzondereKenmerkens');
        $this->addRelation('GsDeclaratietabelDureGeneesmiddelen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsDeclaratietabelDureGeneesmiddelen', RelationMap::ONE_TO_MANY, array('handelsproduktkode' => 'handelsproduktkode', ), null, null, 'GsDeclaratietabelDureGeneesmiddelens');
        $this->addRelation('GsIngegevenSamenstellingen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsIngegevenSamenstellingen', RelationMap::ONE_TO_MANY, array('handelsproduktkode' => 'handelsproduktkode', ), null, null, 'GsIngegevenSamenstellingens');
    } // buildRelations()

} // GsHandelsproductenTableMap
