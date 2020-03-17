<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_artikelen' table.
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
class GsArtikelenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsArtikelenTableMap';

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
        $this->setName('gs_artikelen');
        $this->setPhpName('GsArtikelen');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelen');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addForeignPrimaryKey('zinummer', 'Zinummer', 'INTEGER' , 'gs_logistieke_informatie', 'zindex_nummer', true, null, null);
        $this->addForeignKey('handelsproduktkode', 'Handelsproduktkode', 'INTEGER', 'gs_handelsproducten', 'handelsproduktkode', false, null, null);
        $this->addForeignKey('artikelnaamnummer', 'Artikelnaamnummer', 'INTEGER', 'gs_namen', 'naamnummer', false, null, null);
        $this->addColumn('inkoophoeveelheid', 'Inkoophoeveelheid', 'DECIMAL', false, 8, null);
        $this->addColumn('aantal_hoofdverpakkingen', 'AantalHoofdverpakkingen', 'INTEGER', false, null, null);
        $this->addForeignKey('hoofdverpakking_omschrijving_thesnr', 'HoofdverpakkingOmschrijvingThesnr', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('hoofdverpakking_omschrijving_kode', 'HoofdverpakkingOmschrijvingKode', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addColumn('aantal_deelverpakkingen', 'AantalDeelverpakkingen', 'INTEGER', false, null, null);
        $this->addForeignKey('deelverpakking_omschrijving_thesnr', 'DeelverpakkingOmschrijvingThesnr', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('deelverpakking_omschrijving_kode', 'DeelverpakkingOmschrijvingKode', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addColumn('hoeveelheid_per_deelverpakking', 'HoeveelheidPerDeelverpakking', 'DECIMAL', false, 8, null);
        $this->addColumn('un_kode', 'UnKode', 'VARCHAR', false, 255, null);
        $this->addColumn('un_datum', 'UnDatum', 'DATE', false, null, null);
        $this->addColumn('kode_wet_op_de_geneesmiddelen', 'KodeWetOpDeGeneesmiddelen', 'VARCHAR', false, 255, null);
        $this->addColumn('kode_koelkast', 'KodeKoelkast', 'VARCHAR', false, 255, null);
        $this->addColumn('kode_kliniekverpakking', 'KodeKliniekverpakking', 'VARCHAR', false, 255, null);
        $this->addColumn('kode_vervaldatum', 'KodeVervaldatum', 'VARCHAR', false, 255, null);
        $this->addColumn('kode_easysteem', 'KodeEasysteem', 'VARCHAR', false, 255, null);
        $this->addColumn('rvgnummer_1', 'Rvgnummer1', 'INTEGER', false, null, null);
        $this->addColumn('rvgnummer_2', 'Rvgnummer2', 'VARCHAR', false, 255, null);
        $this->addColumn('rvgnummer_3', 'Rvgnummer3', 'INTEGER', false, null, null);
        $this->addColumn('datum_inschrijving_registratie', 'DatumInschrijvingRegistratie', 'DATE', false, null, null);
        $this->addColumn('aantal_ddds_per_verpakking', 'AantalDddsPerVerpakking', 'DECIMAL', false, null, null);
        $this->addColumn('fabrikant_artikelkodering', 'FabrikantArtikelkodering', 'VARCHAR', false, 255, null);
        $this->addForeignKey('registratiehouder_kode', 'RegistratiehouderKode', 'INTEGER', 'gs_naw_gegevens_gstandaard', 'naw_nummer', false, null, null);
        $this->addForeignKey('importeur_kode', 'ImporteurKode', 'INTEGER', 'gs_naw_gegevens_gstandaard', 'naw_nummer', false, null, null);
        $this->addForeignKey('leverancier_kode', 'LeverancierKode', 'INTEGER', 'gs_naw_gegevens_gstandaard', 'naw_nummer', false, null, null);
        $this->addForeignKey('land_van_herkomst_thesaurus_nummer', 'LandVanHerkomstThesaurusNummer', 'INTEGER', 'gs_thesauri_totaal', 'thesaurusnummer', false, null, null);
        $this->addForeignKey('land_van_herkomst_kode', 'LandVanHerkomstKode', 'INTEGER', 'gs_thesauri_totaal', 'thesaurus_itemnummer', false, null, null);
        $this->addColumn('datum_invoer_verpakking', 'DatumInvoerVerpakking', 'DATE', false, null, null);
        $this->addColumn('datum_afvoer_verpakking', 'DatumAfvoerVerpakking', 'DATE', false, null, null);
        $this->addColumn('produktkoppel_kode', 'ProduktkoppelKode', 'INTEGER', false, null, null);
        $this->addColumn('wtgkode', 'Wtgkode', 'INTEGER', false, null, null);
        $this->addColumn('btwkode_voor_declaratie', 'BtwkodeVoorDeclaratie', 'INTEGER', false, null, null);
        $this->addColumn('kode_inkoopkanaal', 'KodeInkoopkanaal', 'INTEGER', false, null, null);
        $this->addColumn('kode_referentieprodukt_per_cluster', 'KodeReferentieproduktPerCluster', 'INTEGER', false, null, null);
        $this->addColumn('verkoopprijs_exclusief_btw', 'VerkoopprijsExclusiefBtw', 'DECIMAL', false, 12, null);
        $this->addColumn('vergoedingsprijs', 'Vergoedingsprijs', 'DECIMAL', false, 8, null);
        $this->addColumn('referentieprijs', 'Referentieprijs', 'DECIMAL', false, 8, null);
        $this->addColumn('datum_schorsing', 'DatumSchorsing', 'DATE', false, null, null);
        $this->addColumn('datum_doorhaling', 'DatumDoorhaling', 'DATE', false, null, null);
        $this->addColumn('mutatie_datum', 'MutatieDatum', 'DATE', false, null, null);
        $this->addColumn('uitgavedatum', 'Uitgavedatum', 'DATE', false, null, null);
        $this->addColumn('gvs_cluster_kode', 'GvsClusterKode', 'VARCHAR', false, 255, null);
        $this->addColumn('gvs_vergoedingslimiet', 'GvsVergoedingslimiet', 'DECIMAL', false, 12, null);
        $this->addColumn('inkoopprijs', 'Inkoopprijs', 'DECIMAL', false, 8, null);
        $this->addColumn('europees_registratienummer', 'EuropeesRegistratienummer', 'VARCHAR', false, 255, null);
        $this->addColumn('kortingspercentage', 'Kortingspercentage', 'DECIMAL', false, 8, null);
        $this->addColumn('maximumprijs_vws', 'MaximumprijsVws', 'DECIMAL', false, 12, null);
        $this->addColumn('registratie_nummer_1', 'RegistratieNummer1', 'INTEGER', false, null, null);
        $this->addColumn('registratie_nummer_2', 'RegistratieNummer2', 'VARCHAR', false, 255, null);
        $this->addColumn('registratie_nummer_3', 'RegistratieNummer3', 'INTEGER', false, null, null);
        $this->addColumn('slug', 'Slug', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GsHandelsproducten', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten', RelationMap::MANY_TO_ONE, array('handelsproduktkode' => 'handelsproduktkode', ), null, null);
        $this->addRelation('GsNamen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsNamen', RelationMap::MANY_TO_ONE, array('artikelnaamnummer' => 'naamnummer', ), null, null);
        $this->addRelation('Leverancier', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsNawGegevensGstandaard', RelationMap::MANY_TO_ONE, array('leverancier_kode' => 'naw_nummer', ), null, null);
        $this->addRelation('Importeur', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsNawGegevensGstandaard', RelationMap::MANY_TO_ONE, array('importeur_kode' => 'naw_nummer', ), null, null);
        $this->addRelation('Registratiehouder', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsNawGegevensGstandaard', RelationMap::MANY_TO_ONE, array('registratiehouder_kode' => 'naw_nummer', ), null, null);
        $this->addRelation('LandOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('land_van_herkomst_thesaurus_nummer' => 'thesaurusnummer', 'land_van_herkomst_kode' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('HoofdverpakkingOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('hoofdverpakking_omschrijving_thesnr' => 'thesaurusnummer', 'hoofdverpakking_omschrijving_kode' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('DeelverpakkingOmschrijving', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaal', RelationMap::MANY_TO_ONE, array('deelverpakking_omschrijving_thesnr' => 'thesaurusnummer', 'deelverpakking_omschrijving_kode' => 'thesaurus_itemnummer', ), null, null);
        $this->addRelation('LogistiekeInformatie', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLogistiekeInformatie', RelationMap::MANY_TO_ONE, array('zinummer' => 'zindex_nummer', ), null, null);
        $this->addRelation('GsSupplementaireProductenHistorie', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsSupplementaireProductenHistorie', RelationMap::ONE_TO_MANY, array('zinummer' => 'zindex_nummer', ), null, null, 'GsSupplementaireProductenHistories');
        $this->addRelation('GsArtikelEigenschappen', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsArtikelEigenschappen', RelationMap::ONE_TO_ONE, array('zinummer' => 'zindex_nummer', ), null, null);
        $this->addRelation('GsRzvAanspraak', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRzvAanspraak', RelationMap::ONE_TO_ONE, array('zinummer' => 'zinummer', ), null, null);
        $this->addRelation('GsLogistiekeVerpakkingsinformatie', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLogistiekeVerpakkingsinformatie', RelationMap::ONE_TO_MANY, array('zinummer' => 'zindex_nummer', ), null, null, 'GsLogistiekeVerpakkingsinformaties');
        $this->addRelation('GsSupplementaireProductenMetNzaMaximumtarief', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsSupplementaireProductenMetNzaMaximumtarief', RelationMap::ONE_TO_ONE, array('zinummer' => 'zindex_nummer', ), null, null);
        $this->addRelation('GsIndicatiesBijSupplementaireProducten', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsIndicatiesBijSupplementaireProducten', RelationMap::ONE_TO_MANY, array('zinummer' => 'zindex_nummer', ), null, null, 'GsIndicatiesBijSupplementaireProductens');
        $this->addRelation('GsLeveranciersassortimenten', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLeveranciersassortimenten', RelationMap::ONE_TO_MANY, array('zinummer' => 'zinummer', ), null, null, 'GsLeveranciersassortimentens');
        $this->addRelation('GsLogistiekeInformatieRelatedByZindexNummer', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsLogistiekeInformatie', RelationMap::ONE_TO_MANY, array('zinummer' => 'zindex_nummer', ), null, null, 'GsLogistiekeInformatiesRelatedByZindexNummer');
        $this->addRelation('GsPreferentieBeleid', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsPreferentieBeleid', RelationMap::ONE_TO_MANY, array('zinummer' => 'zindex_nummer', ), null, null, 'GsPreferentieBeleids');
        $this->addRelation('GsRelatieTussenZinummerHibc', 'PharmaIntelligence\\GstandaardBundle\\Model\\GsRelatieTussenZinummerHibc', RelationMap::ONE_TO_ONE, array('zinummer' => 'zinummer', ), null, null);
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'sluggable' =>  array (
  'add_cleanup' => 'true',
  'slug_column' => 'slug',
  'slug_pattern' => '{Zinummer}-{GsNamen()->getNaamVolledig}',
  'replace_pattern' => '/\\W+/',
  'replacement' => '-',
  'separator' => '-',
  'permanent' => 'false',
  'scope_column' => '',
),
        );
    } // getBehaviors()

} // GsArtikelenTableMap
