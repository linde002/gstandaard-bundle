<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsNamenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProductPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsHandelsproductenTableMap;

abstract class BaseGsHandelsproductenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_handelsproducten';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsHandelsproducten';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsHandelsproductenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 79;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 79;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_handelsproducten.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_handelsproducten.mutatiekode';

    /** the column name for the handelsproduktkode field */
    const HANDELSPRODUKTKODE = 'gs_handelsproducten.handelsproduktkode';

    /** the column name for the prkcode field */
    const PRKCODE = 'gs_handelsproducten.prkcode';

    /** the column name for the medisch_hulpmiddelkode field */
    const MEDISCH_HULPMIDDELKODE = 'gs_handelsproducten.medisch_hulpmiddelkode';

    /** the column name for the handelsproduktnaamnummer field */
    const HANDELSPRODUKTNAAMNUMMER = 'gs_handelsproducten.handelsproduktnaamnummer';

    /** the column name for the merkstamnaam field */
    const MERKSTAMNAAM = 'gs_handelsproducten.merkstamnaam';

    /** the column name for the firmastamnaam field */
    const FIRMASTAMNAAM = 'gs_handelsproducten.firmastamnaam';

    /** the column name for the produktgroep_thesaurusnummer field */
    const PRODUKTGROEP_THESAURUSNUMMER = 'gs_handelsproducten.produktgroep_thesaurusnummer';

    /** the column name for the produktgroep_kode field */
    const PRODUKTGROEP_KODE = 'gs_handelsproducten.produktgroep_kode';

    /** the column name for the soortelijk_gewicht field */
    const SOORTELIJK_GEWICHT = 'gs_handelsproducten.soortelijk_gewicht';

    /** the column name for the aantal_ddds_per_basiseenh_produkt field */
    const AANTAL_DDDS_PER_BASISEENH_PRODUKT = 'gs_handelsproducten.aantal_ddds_per_basiseenh_produkt';

    /** the column name for the aantal_druppels_per_ml field */
    const AANTAL_DRUPPELS_PER_ML = 'gs_handelsproducten.aantal_druppels_per_ml';

    /** the column name for the pifnummer_thesaurusnummer field */
    const PIFNUMMER_THESAURUSNUMMER = 'gs_handelsproducten.pifnummer_thesaurusnummer';

    /** the column name for the pifnummer field */
    const PIFNUMMER = 'gs_handelsproducten.pifnummer';

    /** the column name for the fabrikant_produktkodering field */
    const FABRIKANT_PRODUKTKODERING = 'gs_handelsproducten.fabrikant_produktkodering';

    /** the column name for the reden_niet_clusteren_thesaurusnr field */
    const REDEN_NIET_CLUSTEREN_THESAURUSNR = 'gs_handelsproducten.reden_niet_clusteren_thesaurusnr';

    /** the column name for the reden_niet_clusteren_kode field */
    const REDEN_NIET_CLUSTEREN_KODE = 'gs_handelsproducten.reden_niet_clusteren_kode';

    /** the column name for the ftk_1 field */
    const FTK_1 = 'gs_handelsproducten.ftk_1';

    /** the column name for the ftk_2 field */
    const FTK_2 = 'gs_handelsproducten.ftk_2';

    /** the column name for the ftk_3 field */
    const FTK_3 = 'gs_handelsproducten.ftk_3';

    /** the column name for the ftk_4 field */
    const FTK_4 = 'gs_handelsproducten.ftk_4';

    /** the column name for the ftk_5 field */
    const FTK_5 = 'gs_handelsproducten.ftk_5';

    /** the column name for the informatoriumproductcode field */
    const INFORMATORIUMPRODUCTCODE = 'gs_handelsproducten.informatoriumproductcode';

    /** the column name for the kode_combinatiepreparaat field */
    const KODE_COMBINATIEPREPARAAT = 'gs_handelsproducten.kode_combinatiepreparaat';

    /** the column name for the kode_vergift field */
    const KODE_VERGIFT = 'gs_handelsproducten.kode_vergift';

    /** the column name for the kode_rijvaardigheid field */
    const KODE_RIJVAARDIGHEID = 'gs_handelsproducten.kode_rijvaardigheid';

    /** the column name for the kode_brandgevaarlijk field */
    const KODE_BRANDGEVAARLIJK = 'gs_handelsproducten.kode_brandgevaarlijk';

    /** the column name for the gesteriliseerd_voor_geneesmiddelen field */
    const GESTERILISEERD_VOOR_GENEESMIDDELEN = 'gs_handelsproducten.gesteriliseerd_voor_geneesmiddelen';

    /** the column name for the hpkeenheid_thesaurusnummer field */
    const HPKEENHEID_THESAURUSNUMMER = 'gs_handelsproducten.hpkeenheid_thesaurusnummer';

    /** the column name for the hpkeenheid_kode field */
    const HPKEENHEID_KODE = 'gs_handelsproducten.hpkeenheid_kode';

    /** the column name for the oplosmiddel_hoeveelheid_1 field */
    const OPLOSMIDDEL_HOEVEELHEID_1 = 'gs_handelsproducten.oplosmiddel_hoeveelheid_1';

    /** the column name for the oplosmiddel_aantal_1 field */
    const OPLOSMIDDEL_AANTAL_1 = 'gs_handelsproducten.oplosmiddel_aantal_1';

    /** the column name for the oplosmiddel_hoeveelheid_2 field */
    const OPLOSMIDDEL_HOEVEELHEID_2 = 'gs_handelsproducten.oplosmiddel_hoeveelheid_2';

    /** the column name for the oplosmiddel_aantal_2 field */
    const OPLOSMIDDEL_AANTAL_2 = 'gs_handelsproducten.oplosmiddel_aantal_2';

    /** the column name for the farmaceutische_kwaliteit field */
    const FARMACEUTISCHE_KWALITEIT = 'gs_handelsproducten.farmaceutische_kwaliteit';

    /** the column name for the halffabrikaat_thesaurusnummer field */
    const HALFFABRIKAAT_THESAURUSNUMMER = 'gs_handelsproducten.halffabrikaat_thesaurusnummer';

    /** the column name for the halffabrikaat_code field */
    const HALFFABRIKAAT_CODE = 'gs_handelsproducten.halffabrikaat_code';

    /** the column name for the deelbaarheid_aantal field */
    const DEELBAARHEID_AANTAL = 'gs_handelsproducten.deelbaarheid_aantal';

    /** the column name for the emballagemateriaal_thesaurusnummer field */
    const EMBALLAGEMATERIAAL_THESAURUSNUMMER = 'gs_handelsproducten.emballagemateriaal_thesaurusnummer';

    /** the column name for the emballagemateriaal_kode field */
    const EMBALLAGEMATERIAAL_KODE = 'gs_handelsproducten.emballagemateriaal_kode';

    /** the column name for the emballagesluiting_thesaurusnummer field */
    const EMBALLAGESLUITING_THESAURUSNUMMER = 'gs_handelsproducten.emballagesluiting_thesaurusnummer';

    /** the column name for the emballagesluiting_kode field */
    const EMBALLAGESLUITING_KODE = 'gs_handelsproducten.emballagesluiting_kode';

    /** the column name for the emballagedoseerinr_thesaurusnr field */
    const EMBALLAGEDOSEERINR_THESAURUSNR = 'gs_handelsproducten.emballagedoseerinr_thesaurusnr';

    /** the column name for the emballagedoseerinrichting_kode field */
    const EMBALLAGEDOSEERINRICHTING_KODE = 'gs_handelsproducten.emballagedoseerinrichting_kode';

    /** the column name for the hulpstoffen_identificerend field */
    const HULPSTOFFEN_IDENTIFICEREND = 'gs_handelsproducten.hulpstoffen_identificerend';

    /** the column name for the kleur_thesaurusnummer field */
    const KLEUR_THESAURUSNUMMER = 'gs_handelsproducten.kleur_thesaurusnummer';

    /** the column name for the kleur_kode field */
    const KLEUR_KODE = 'gs_handelsproducten.kleur_kode';

    /** the column name for the smaak_thesaurusnummer field */
    const SMAAK_THESAURUSNUMMER = 'gs_handelsproducten.smaak_thesaurusnummer';

    /** the column name for the smaak_kode field */
    const SMAAK_KODE = 'gs_handelsproducten.smaak_kode';

    /** the column name for the bereidingsvoorschr_thesaurusnummer field */
    const BEREIDINGSVOORSCHR_THESAURUSNUMMER = 'gs_handelsproducten.bereidingsvoorschr_thesaurusnummer';

    /** the column name for the bereidingsvoorschrift_kode field */
    const BEREIDINGSVOORSCHRIFT_KODE = 'gs_handelsproducten.bereidingsvoorschrift_kode';

    /** the column name for the fysische_eigenschap_thesaurusnummer field */
    const FYSISCHE_EIGENSCHAP_THESAURUSNUMMER = 'gs_handelsproducten.fysische_eigenschap_thesaurusnummer';

    /** the column name for the fysische_eigenschap_kode field */
    const FYSISCHE_EIGENSCHAP_KODE = 'gs_handelsproducten.fysische_eigenschap_kode';

    /** the column name for the grondstofvorm_thesaurusnummer field */
    const GRONDSTOFVORM_THESAURUSNUMMER = 'gs_handelsproducten.grondstofvorm_thesaurusnummer';

    /** the column name for the grondstofvorm_kode field */
    const GRONDSTOFVORM_KODE = 'gs_handelsproducten.grondstofvorm_kode';

    /** the column name for the los_verkrijgbaar field */
    const LOS_VERKRIJGBAAR = 'gs_handelsproducten.los_verkrijgbaar';

    /** the column name for the bioequivalente_groep field */
    const BIOEQUIVALENTE_GROEP = 'gs_handelsproducten.bioequivalente_groep';

    /** the column name for the kode_radioactieve_stof field */
    const KODE_RADIOACTIEVE_STOF = 'gs_handelsproducten.kode_radioactieve_stof';

    /** the column name for the soort_hulpmiddel field */
    const SOORT_HULPMIDDEL = 'gs_handelsproducten.soort_hulpmiddel';

    /** the column name for the rzv_thesaurus_120 field */
    const RZV_THESAURUS_120 = 'gs_handelsproducten.rzv_thesaurus_120';

    /** the column name for the rzvvoorwaarden_bijlage_2 field */
    const RZVVOORWAARDEN_BIJLAGE_2 = 'gs_handelsproducten.rzvvoorwaarden_bijlage_2';

    /** the column name for the tekstmodule field */
    const TEKSTMODULE = 'gs_handelsproducten.tekstmodule';

    /** the column name for the tekst_verwijzing field */
    const TEKST_VERWIJZING = 'gs_handelsproducten.tekst_verwijzing';

    /** the column name for the hulpmiddel_volgens_awbz field */
    const HULPMIDDEL_VOLGENS_AWBZ = 'gs_handelsproducten.hulpmiddel_volgens_awbz';

    /** the column name for the eenheid_inkoophoeveelheid_thesnr field */
    const EENHEID_INKOOPHOEVEELHEID_THESNR = 'gs_handelsproducten.eenheid_inkoophoeveelheid_thesnr';

    /** the column name for the eenheid_inkoophoeveelheid field */
    const EENHEID_INKOOPHOEVEELHEID = 'gs_handelsproducten.eenheid_inkoophoeveelheid';

    /** the column name for the basiseenheid_verpakking_thesnr field */
    const BASISEENHEID_VERPAKKING_THESNR = 'gs_handelsproducten.basiseenheid_verpakking_thesnr';

    /** the column name for the basiseenheid_verpakking field */
    const BASISEENHEID_VERPAKKING = 'gs_handelsproducten.basiseenheid_verpakking';

    /** the column name for the richtlijn_gebruik_ondergrens field */
    const RICHTLIJN_GEBRUIK_ONDERGRENS = 'gs_handelsproducten.richtlijn_gebruik_ondergrens';

    /** the column name for the richtlijn_gebruik_bovengrens field */
    const RICHTLIJN_GEBRUIK_BOVENGRENS = 'gs_handelsproducten.richtlijn_gebruik_bovengrens';

    /** the column name for the thesaurus_rzv_verstrekking field */
    const THESAURUS_RZV_VERSTREKKING = 'gs_handelsproducten.thesaurus_rzv_verstrekking';

    /** the column name for the rzvverstrekking field */
    const RZVVERSTREKKING = 'gs_handelsproducten.rzvverstrekking';

    /** the column name for the thesaurus_rzv_rationaliteit field */
    const THESAURUS_RZV_RATIONALITEIT = 'gs_handelsproducten.thesaurus_rzv_rationaliteit';

    /** the column name for the beoordeling_rationaliteit field */
    const BEOORDELING_RATIONALITEIT = 'gs_handelsproducten.beoordeling_rationaliteit';

    /** the column name for the thesaurus_rzv_beoordeling field */
    const THESAURUS_RZV_BEOORDELING = 'gs_handelsproducten.thesaurus_rzv_beoordeling';

    /** the column name for the achtergrond_rationaliteit field */
    const ACHTERGROND_RATIONALITEIT = 'gs_handelsproducten.achtergrond_rationaliteit';

    /** the column name for the thesaurus_rzv_hulpmiddelen field */
    const THESAURUS_RZV_HULPMIDDELEN = 'gs_handelsproducten.thesaurus_rzv_hulpmiddelen';

    /** the column name for the hulpmiddelen_zorg field */
    const HULPMIDDELEN_ZORG = 'gs_handelsproducten.hulpmiddelen_zorg';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsHandelsproducten objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsHandelsproducten[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsHandelsproductenPeer::$fieldNames[GsHandelsproductenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'Handelsproduktkode', 'Prkcode', 'MedischHulpmiddelkode', 'Handelsproduktnaamnummer', 'Merkstamnaam', 'Firmastamnaam', 'ProduktgroepThesaurusnummer', 'ProduktgroepKode', 'SoortelijkGewicht', 'AantalDddsPerBasiseenhProdukt', 'AantalDruppelsPerMl', 'PifnummerThesaurusnummer', 'Pifnummer', 'FabrikantProduktkodering', 'RedenNietClusterenThesaurusnr', 'RedenNietClusterenKode', 'Ftk1', 'Ftk2', 'Ftk3', 'Ftk4', 'Ftk5', 'Informatoriumproductcode', 'KodeCombinatiepreparaat', 'KodeVergift', 'KodeRijvaardigheid', 'KodeBrandgevaarlijk', 'GesteriliseerdVoorGeneesmiddelen', 'HpkeenheidThesaurusnummer', 'HpkeenheidKode', 'OplosmiddelHoeveelheid1', 'OplosmiddelAantal1', 'OplosmiddelHoeveelheid2', 'OplosmiddelAantal2', 'FarmaceutischeKwaliteit', 'HalffabrikaatThesaurusnummer', 'HalffabrikaatCode', 'DeelbaarheidAantal', 'EmballagemateriaalThesaurusnummer', 'EmballagemateriaalKode', 'EmballagesluitingThesaurusnummer', 'EmballagesluitingKode', 'EmballagedoseerinrThesaurusnr', 'EmballagedoseerinrichtingKode', 'HulpstoffenIdentificerend', 'KleurThesaurusnummer', 'KleurKode', 'SmaakThesaurusnummer', 'SmaakKode', 'BereidingsvoorschrThesaurusnummer', 'BereidingsvoorschriftKode', 'FysischeEigenschapThesaurusnummer', 'FysischeEigenschapKode', 'GrondstofvormThesaurusnummer', 'GrondstofvormKode', 'LosVerkrijgbaar', 'BioequivalenteGroep', 'KodeRadioactieveStof', 'SoortHulpmiddel', 'RzvThesaurus120', 'RzvvoorwaardenBijlage2', 'Tekstmodule', 'TekstVerwijzing', 'HulpmiddelVolgensAwbz', 'EenheidInkoophoeveelheidThesnr', 'EenheidInkoophoeveelheid', 'BasiseenheidVerpakkingThesnr', 'BasiseenheidVerpakking', 'RichtlijnGebruikOndergrens', 'RichtlijnGebruikBovengrens', 'ThesaurusRzvVerstrekking', 'Rzvverstrekking', 'ThesaurusRzvRationaliteit', 'BeoordelingRationaliteit', 'ThesaurusRzvBeoordeling', 'AchtergrondRationaliteit', 'ThesaurusRzvHulpmiddelen', 'HulpmiddelenZorg', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'handelsproduktkode', 'prkcode', 'medischHulpmiddelkode', 'handelsproduktnaamnummer', 'merkstamnaam', 'firmastamnaam', 'produktgroepThesaurusnummer', 'produktgroepKode', 'soortelijkGewicht', 'aantalDddsPerBasiseenhProdukt', 'aantalDruppelsPerMl', 'pifnummerThesaurusnummer', 'pifnummer', 'fabrikantProduktkodering', 'redenNietClusterenThesaurusnr', 'redenNietClusterenKode', 'ftk1', 'ftk2', 'ftk3', 'ftk4', 'ftk5', 'informatoriumproductcode', 'kodeCombinatiepreparaat', 'kodeVergift', 'kodeRijvaardigheid', 'kodeBrandgevaarlijk', 'gesteriliseerdVoorGeneesmiddelen', 'hpkeenheidThesaurusnummer', 'hpkeenheidKode', 'oplosmiddelHoeveelheid1', 'oplosmiddelAantal1', 'oplosmiddelHoeveelheid2', 'oplosmiddelAantal2', 'farmaceutischeKwaliteit', 'halffabrikaatThesaurusnummer', 'halffabrikaatCode', 'deelbaarheidAantal', 'emballagemateriaalThesaurusnummer', 'emballagemateriaalKode', 'emballagesluitingThesaurusnummer', 'emballagesluitingKode', 'emballagedoseerinrThesaurusnr', 'emballagedoseerinrichtingKode', 'hulpstoffenIdentificerend', 'kleurThesaurusnummer', 'kleurKode', 'smaakThesaurusnummer', 'smaakKode', 'bereidingsvoorschrThesaurusnummer', 'bereidingsvoorschriftKode', 'fysischeEigenschapThesaurusnummer', 'fysischeEigenschapKode', 'grondstofvormThesaurusnummer', 'grondstofvormKode', 'losVerkrijgbaar', 'bioequivalenteGroep', 'kodeRadioactieveStof', 'soortHulpmiddel', 'rzvThesaurus120', 'rzvvoorwaardenBijlage2', 'tekstmodule', 'tekstVerwijzing', 'hulpmiddelVolgensAwbz', 'eenheidInkoophoeveelheidThesnr', 'eenheidInkoophoeveelheid', 'basiseenheidVerpakkingThesnr', 'basiseenheidVerpakking', 'richtlijnGebruikOndergrens', 'richtlijnGebruikBovengrens', 'thesaurusRzvVerstrekking', 'rzvverstrekking', 'thesaurusRzvRationaliteit', 'beoordelingRationaliteit', 'thesaurusRzvBeoordeling', 'achtergrondRationaliteit', 'thesaurusRzvHulpmiddelen', 'hulpmiddelenZorg', ),
        BasePeer::TYPE_COLNAME => array (GsHandelsproductenPeer::BESTANDNUMMER, GsHandelsproductenPeer::MUTATIEKODE, GsHandelsproductenPeer::HANDELSPRODUKTKODE, GsHandelsproductenPeer::PRKCODE, GsHandelsproductenPeer::MEDISCH_HULPMIDDELKODE, GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsHandelsproductenPeer::MERKSTAMNAAM, GsHandelsproductenPeer::FIRMASTAMNAAM, GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER, GsHandelsproductenPeer::PRODUKTGROEP_KODE, GsHandelsproductenPeer::SOORTELIJK_GEWICHT, GsHandelsproductenPeer::AANTAL_DDDS_PER_BASISEENH_PRODUKT, GsHandelsproductenPeer::AANTAL_DRUPPELS_PER_ML, GsHandelsproductenPeer::PIFNUMMER_THESAURUSNUMMER, GsHandelsproductenPeer::PIFNUMMER, GsHandelsproductenPeer::FABRIKANT_PRODUKTKODERING, GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_THESAURUSNR, GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_KODE, GsHandelsproductenPeer::FTK_1, GsHandelsproductenPeer::FTK_2, GsHandelsproductenPeer::FTK_3, GsHandelsproductenPeer::FTK_4, GsHandelsproductenPeer::FTK_5, GsHandelsproductenPeer::INFORMATORIUMPRODUCTCODE, GsHandelsproductenPeer::KODE_COMBINATIEPREPARAAT, GsHandelsproductenPeer::KODE_VERGIFT, GsHandelsproductenPeer::KODE_RIJVAARDIGHEID, GsHandelsproductenPeer::KODE_BRANDGEVAARLIJK, GsHandelsproductenPeer::GESTERILISEERD_VOOR_GENEESMIDDELEN, GsHandelsproductenPeer::HPKEENHEID_THESAURUSNUMMER, GsHandelsproductenPeer::HPKEENHEID_KODE, GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_1, GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_1, GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_2, GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_2, GsHandelsproductenPeer::FARMACEUTISCHE_KWALITEIT, GsHandelsproductenPeer::HALFFABRIKAAT_THESAURUSNUMMER, GsHandelsproductenPeer::HALFFABRIKAAT_CODE, GsHandelsproductenPeer::DEELBAARHEID_AANTAL, GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER, GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE, GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER, GsHandelsproductenPeer::EMBALLAGESLUITING_KODE, GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR, GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE, GsHandelsproductenPeer::HULPSTOFFEN_IDENTIFICEREND, GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER, GsHandelsproductenPeer::KLEUR_KODE, GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER, GsHandelsproductenPeer::SMAAK_KODE, GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER, GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE, GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_THESAURUSNUMMER, GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_KODE, GsHandelsproductenPeer::GRONDSTOFVORM_THESAURUSNUMMER, GsHandelsproductenPeer::GRONDSTOFVORM_KODE, GsHandelsproductenPeer::LOS_VERKRIJGBAAR, GsHandelsproductenPeer::BIOEQUIVALENTE_GROEP, GsHandelsproductenPeer::KODE_RADIOACTIEVE_STOF, GsHandelsproductenPeer::SOORT_HULPMIDDEL, GsHandelsproductenPeer::RZV_THESAURUS_120, GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2, GsHandelsproductenPeer::TEKSTMODULE, GsHandelsproductenPeer::TEKST_VERWIJZING, GsHandelsproductenPeer::HULPMIDDEL_VOLGENS_AWBZ, GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR, GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID, GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR, GsHandelsproductenPeer::BASISEENHEID_VERPAKKING, GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_ONDERGRENS, GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_BOVENGRENS, GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING, GsHandelsproductenPeer::RZVVERSTREKKING, GsHandelsproductenPeer::THESAURUS_RZV_RATIONALITEIT, GsHandelsproductenPeer::BEOORDELING_RATIONALITEIT, GsHandelsproductenPeer::THESAURUS_RZV_BEOORDELING, GsHandelsproductenPeer::ACHTERGROND_RATIONALITEIT, GsHandelsproductenPeer::THESAURUS_RZV_HULPMIDDELEN, GsHandelsproductenPeer::HULPMIDDELEN_ZORG, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'HANDELSPRODUKTKODE', 'PRKCODE', 'MEDISCH_HULPMIDDELKODE', 'HANDELSPRODUKTNAAMNUMMER', 'MERKSTAMNAAM', 'FIRMASTAMNAAM', 'PRODUKTGROEP_THESAURUSNUMMER', 'PRODUKTGROEP_KODE', 'SOORTELIJK_GEWICHT', 'AANTAL_DDDS_PER_BASISEENH_PRODUKT', 'AANTAL_DRUPPELS_PER_ML', 'PIFNUMMER_THESAURUSNUMMER', 'PIFNUMMER', 'FABRIKANT_PRODUKTKODERING', 'REDEN_NIET_CLUSTEREN_THESAURUSNR', 'REDEN_NIET_CLUSTEREN_KODE', 'FTK_1', 'FTK_2', 'FTK_3', 'FTK_4', 'FTK_5', 'INFORMATORIUMPRODUCTCODE', 'KODE_COMBINATIEPREPARAAT', 'KODE_VERGIFT', 'KODE_RIJVAARDIGHEID', 'KODE_BRANDGEVAARLIJK', 'GESTERILISEERD_VOOR_GENEESMIDDELEN', 'HPKEENHEID_THESAURUSNUMMER', 'HPKEENHEID_KODE', 'OPLOSMIDDEL_HOEVEELHEID_1', 'OPLOSMIDDEL_AANTAL_1', 'OPLOSMIDDEL_HOEVEELHEID_2', 'OPLOSMIDDEL_AANTAL_2', 'FARMACEUTISCHE_KWALITEIT', 'HALFFABRIKAAT_THESAURUSNUMMER', 'HALFFABRIKAAT_CODE', 'DEELBAARHEID_AANTAL', 'EMBALLAGEMATERIAAL_THESAURUSNUMMER', 'EMBALLAGEMATERIAAL_KODE', 'EMBALLAGESLUITING_THESAURUSNUMMER', 'EMBALLAGESLUITING_KODE', 'EMBALLAGEDOSEERINR_THESAURUSNR', 'EMBALLAGEDOSEERINRICHTING_KODE', 'HULPSTOFFEN_IDENTIFICEREND', 'KLEUR_THESAURUSNUMMER', 'KLEUR_KODE', 'SMAAK_THESAURUSNUMMER', 'SMAAK_KODE', 'BEREIDINGSVOORSCHR_THESAURUSNUMMER', 'BEREIDINGSVOORSCHRIFT_KODE', 'FYSISCHE_EIGENSCHAP_THESAURUSNUMMER', 'FYSISCHE_EIGENSCHAP_KODE', 'GRONDSTOFVORM_THESAURUSNUMMER', 'GRONDSTOFVORM_KODE', 'LOS_VERKRIJGBAAR', 'BIOEQUIVALENTE_GROEP', 'KODE_RADIOACTIEVE_STOF', 'SOORT_HULPMIDDEL', 'RZV_THESAURUS_120', 'RZVVOORWAARDEN_BIJLAGE_2', 'TEKSTMODULE', 'TEKST_VERWIJZING', 'HULPMIDDEL_VOLGENS_AWBZ', 'EENHEID_INKOOPHOEVEELHEID_THESNR', 'EENHEID_INKOOPHOEVEELHEID', 'BASISEENHEID_VERPAKKING_THESNR', 'BASISEENHEID_VERPAKKING', 'RICHTLIJN_GEBRUIK_ONDERGRENS', 'RICHTLIJN_GEBRUIK_BOVENGRENS', 'THESAURUS_RZV_VERSTREKKING', 'RZVVERSTREKKING', 'THESAURUS_RZV_RATIONALITEIT', 'BEOORDELING_RATIONALITEIT', 'THESAURUS_RZV_BEOORDELING', 'ACHTERGROND_RATIONALITEIT', 'THESAURUS_RZV_HULPMIDDELEN', 'HULPMIDDELEN_ZORG', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'handelsproduktkode', 'prkcode', 'medisch_hulpmiddelkode', 'handelsproduktnaamnummer', 'merkstamnaam', 'firmastamnaam', 'produktgroep_thesaurusnummer', 'produktgroep_kode', 'soortelijk_gewicht', 'aantal_ddds_per_basiseenh_produkt', 'aantal_druppels_per_ml', 'pifnummer_thesaurusnummer', 'pifnummer', 'fabrikant_produktkodering', 'reden_niet_clusteren_thesaurusnr', 'reden_niet_clusteren_kode', 'ftk_1', 'ftk_2', 'ftk_3', 'ftk_4', 'ftk_5', 'informatoriumproductcode', 'kode_combinatiepreparaat', 'kode_vergift', 'kode_rijvaardigheid', 'kode_brandgevaarlijk', 'gesteriliseerd_voor_geneesmiddelen', 'hpkeenheid_thesaurusnummer', 'hpkeenheid_kode', 'oplosmiddel_hoeveelheid_1', 'oplosmiddel_aantal_1', 'oplosmiddel_hoeveelheid_2', 'oplosmiddel_aantal_2', 'farmaceutische_kwaliteit', 'halffabrikaat_thesaurusnummer', 'halffabrikaat_code', 'deelbaarheid_aantal', 'emballagemateriaal_thesaurusnummer', 'emballagemateriaal_kode', 'emballagesluiting_thesaurusnummer', 'emballagesluiting_kode', 'emballagedoseerinr_thesaurusnr', 'emballagedoseerinrichting_kode', 'hulpstoffen_identificerend', 'kleur_thesaurusnummer', 'kleur_kode', 'smaak_thesaurusnummer', 'smaak_kode', 'bereidingsvoorschr_thesaurusnummer', 'bereidingsvoorschrift_kode', 'fysische_eigenschap_thesaurusnummer', 'fysische_eigenschap_kode', 'grondstofvorm_thesaurusnummer', 'grondstofvorm_kode', 'los_verkrijgbaar', 'bioequivalente_groep', 'kode_radioactieve_stof', 'soort_hulpmiddel', 'rzv_thesaurus_120', 'rzvvoorwaarden_bijlage_2', 'tekstmodule', 'tekst_verwijzing', 'hulpmiddel_volgens_awbz', 'eenheid_inkoophoeveelheid_thesnr', 'eenheid_inkoophoeveelheid', 'basiseenheid_verpakking_thesnr', 'basiseenheid_verpakking', 'richtlijn_gebruik_ondergrens', 'richtlijn_gebruik_bovengrens', 'thesaurus_rzv_verstrekking', 'rzvverstrekking', 'thesaurus_rzv_rationaliteit', 'beoordeling_rationaliteit', 'thesaurus_rzv_beoordeling', 'achtergrond_rationaliteit', 'thesaurus_rzv_hulpmiddelen', 'hulpmiddelen_zorg', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsHandelsproductenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'Handelsproduktkode' => 2, 'Prkcode' => 3, 'MedischHulpmiddelkode' => 4, 'Handelsproduktnaamnummer' => 5, 'Merkstamnaam' => 6, 'Firmastamnaam' => 7, 'ProduktgroepThesaurusnummer' => 8, 'ProduktgroepKode' => 9, 'SoortelijkGewicht' => 10, 'AantalDddsPerBasiseenhProdukt' => 11, 'AantalDruppelsPerMl' => 12, 'PifnummerThesaurusnummer' => 13, 'Pifnummer' => 14, 'FabrikantProduktkodering' => 15, 'RedenNietClusterenThesaurusnr' => 16, 'RedenNietClusterenKode' => 17, 'Ftk1' => 18, 'Ftk2' => 19, 'Ftk3' => 20, 'Ftk4' => 21, 'Ftk5' => 22, 'Informatoriumproductcode' => 23, 'KodeCombinatiepreparaat' => 24, 'KodeVergift' => 25, 'KodeRijvaardigheid' => 26, 'KodeBrandgevaarlijk' => 27, 'GesteriliseerdVoorGeneesmiddelen' => 28, 'HpkeenheidThesaurusnummer' => 29, 'HpkeenheidKode' => 30, 'OplosmiddelHoeveelheid1' => 31, 'OplosmiddelAantal1' => 32, 'OplosmiddelHoeveelheid2' => 33, 'OplosmiddelAantal2' => 34, 'FarmaceutischeKwaliteit' => 35, 'HalffabrikaatThesaurusnummer' => 36, 'HalffabrikaatCode' => 37, 'DeelbaarheidAantal' => 38, 'EmballagemateriaalThesaurusnummer' => 39, 'EmballagemateriaalKode' => 40, 'EmballagesluitingThesaurusnummer' => 41, 'EmballagesluitingKode' => 42, 'EmballagedoseerinrThesaurusnr' => 43, 'EmballagedoseerinrichtingKode' => 44, 'HulpstoffenIdentificerend' => 45, 'KleurThesaurusnummer' => 46, 'KleurKode' => 47, 'SmaakThesaurusnummer' => 48, 'SmaakKode' => 49, 'BereidingsvoorschrThesaurusnummer' => 50, 'BereidingsvoorschriftKode' => 51, 'FysischeEigenschapThesaurusnummer' => 52, 'FysischeEigenschapKode' => 53, 'GrondstofvormThesaurusnummer' => 54, 'GrondstofvormKode' => 55, 'LosVerkrijgbaar' => 56, 'BioequivalenteGroep' => 57, 'KodeRadioactieveStof' => 58, 'SoortHulpmiddel' => 59, 'RzvThesaurus120' => 60, 'RzvvoorwaardenBijlage2' => 61, 'Tekstmodule' => 62, 'TekstVerwijzing' => 63, 'HulpmiddelVolgensAwbz' => 64, 'EenheidInkoophoeveelheidThesnr' => 65, 'EenheidInkoophoeveelheid' => 66, 'BasiseenheidVerpakkingThesnr' => 67, 'BasiseenheidVerpakking' => 68, 'RichtlijnGebruikOndergrens' => 69, 'RichtlijnGebruikBovengrens' => 70, 'ThesaurusRzvVerstrekking' => 71, 'Rzvverstrekking' => 72, 'ThesaurusRzvRationaliteit' => 73, 'BeoordelingRationaliteit' => 74, 'ThesaurusRzvBeoordeling' => 75, 'AchtergrondRationaliteit' => 76, 'ThesaurusRzvHulpmiddelen' => 77, 'HulpmiddelenZorg' => 78, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'handelsproduktkode' => 2, 'prkcode' => 3, 'medischHulpmiddelkode' => 4, 'handelsproduktnaamnummer' => 5, 'merkstamnaam' => 6, 'firmastamnaam' => 7, 'produktgroepThesaurusnummer' => 8, 'produktgroepKode' => 9, 'soortelijkGewicht' => 10, 'aantalDddsPerBasiseenhProdukt' => 11, 'aantalDruppelsPerMl' => 12, 'pifnummerThesaurusnummer' => 13, 'pifnummer' => 14, 'fabrikantProduktkodering' => 15, 'redenNietClusterenThesaurusnr' => 16, 'redenNietClusterenKode' => 17, 'ftk1' => 18, 'ftk2' => 19, 'ftk3' => 20, 'ftk4' => 21, 'ftk5' => 22, 'informatoriumproductcode' => 23, 'kodeCombinatiepreparaat' => 24, 'kodeVergift' => 25, 'kodeRijvaardigheid' => 26, 'kodeBrandgevaarlijk' => 27, 'gesteriliseerdVoorGeneesmiddelen' => 28, 'hpkeenheidThesaurusnummer' => 29, 'hpkeenheidKode' => 30, 'oplosmiddelHoeveelheid1' => 31, 'oplosmiddelAantal1' => 32, 'oplosmiddelHoeveelheid2' => 33, 'oplosmiddelAantal2' => 34, 'farmaceutischeKwaliteit' => 35, 'halffabrikaatThesaurusnummer' => 36, 'halffabrikaatCode' => 37, 'deelbaarheidAantal' => 38, 'emballagemateriaalThesaurusnummer' => 39, 'emballagemateriaalKode' => 40, 'emballagesluitingThesaurusnummer' => 41, 'emballagesluitingKode' => 42, 'emballagedoseerinrThesaurusnr' => 43, 'emballagedoseerinrichtingKode' => 44, 'hulpstoffenIdentificerend' => 45, 'kleurThesaurusnummer' => 46, 'kleurKode' => 47, 'smaakThesaurusnummer' => 48, 'smaakKode' => 49, 'bereidingsvoorschrThesaurusnummer' => 50, 'bereidingsvoorschriftKode' => 51, 'fysischeEigenschapThesaurusnummer' => 52, 'fysischeEigenschapKode' => 53, 'grondstofvormThesaurusnummer' => 54, 'grondstofvormKode' => 55, 'losVerkrijgbaar' => 56, 'bioequivalenteGroep' => 57, 'kodeRadioactieveStof' => 58, 'soortHulpmiddel' => 59, 'rzvThesaurus120' => 60, 'rzvvoorwaardenBijlage2' => 61, 'tekstmodule' => 62, 'tekstVerwijzing' => 63, 'hulpmiddelVolgensAwbz' => 64, 'eenheidInkoophoeveelheidThesnr' => 65, 'eenheidInkoophoeveelheid' => 66, 'basiseenheidVerpakkingThesnr' => 67, 'basiseenheidVerpakking' => 68, 'richtlijnGebruikOndergrens' => 69, 'richtlijnGebruikBovengrens' => 70, 'thesaurusRzvVerstrekking' => 71, 'rzvverstrekking' => 72, 'thesaurusRzvRationaliteit' => 73, 'beoordelingRationaliteit' => 74, 'thesaurusRzvBeoordeling' => 75, 'achtergrondRationaliteit' => 76, 'thesaurusRzvHulpmiddelen' => 77, 'hulpmiddelenZorg' => 78, ),
        BasePeer::TYPE_COLNAME => array (GsHandelsproductenPeer::BESTANDNUMMER => 0, GsHandelsproductenPeer::MUTATIEKODE => 1, GsHandelsproductenPeer::HANDELSPRODUKTKODE => 2, GsHandelsproductenPeer::PRKCODE => 3, GsHandelsproductenPeer::MEDISCH_HULPMIDDELKODE => 4, GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER => 5, GsHandelsproductenPeer::MERKSTAMNAAM => 6, GsHandelsproductenPeer::FIRMASTAMNAAM => 7, GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER => 8, GsHandelsproductenPeer::PRODUKTGROEP_KODE => 9, GsHandelsproductenPeer::SOORTELIJK_GEWICHT => 10, GsHandelsproductenPeer::AANTAL_DDDS_PER_BASISEENH_PRODUKT => 11, GsHandelsproductenPeer::AANTAL_DRUPPELS_PER_ML => 12, GsHandelsproductenPeer::PIFNUMMER_THESAURUSNUMMER => 13, GsHandelsproductenPeer::PIFNUMMER => 14, GsHandelsproductenPeer::FABRIKANT_PRODUKTKODERING => 15, GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_THESAURUSNR => 16, GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_KODE => 17, GsHandelsproductenPeer::FTK_1 => 18, GsHandelsproductenPeer::FTK_2 => 19, GsHandelsproductenPeer::FTK_3 => 20, GsHandelsproductenPeer::FTK_4 => 21, GsHandelsproductenPeer::FTK_5 => 22, GsHandelsproductenPeer::INFORMATORIUMPRODUCTCODE => 23, GsHandelsproductenPeer::KODE_COMBINATIEPREPARAAT => 24, GsHandelsproductenPeer::KODE_VERGIFT => 25, GsHandelsproductenPeer::KODE_RIJVAARDIGHEID => 26, GsHandelsproductenPeer::KODE_BRANDGEVAARLIJK => 27, GsHandelsproductenPeer::GESTERILISEERD_VOOR_GENEESMIDDELEN => 28, GsHandelsproductenPeer::HPKEENHEID_THESAURUSNUMMER => 29, GsHandelsproductenPeer::HPKEENHEID_KODE => 30, GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_1 => 31, GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_1 => 32, GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_2 => 33, GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_2 => 34, GsHandelsproductenPeer::FARMACEUTISCHE_KWALITEIT => 35, GsHandelsproductenPeer::HALFFABRIKAAT_THESAURUSNUMMER => 36, GsHandelsproductenPeer::HALFFABRIKAAT_CODE => 37, GsHandelsproductenPeer::DEELBAARHEID_AANTAL => 38, GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER => 39, GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE => 40, GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER => 41, GsHandelsproductenPeer::EMBALLAGESLUITING_KODE => 42, GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR => 43, GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE => 44, GsHandelsproductenPeer::HULPSTOFFEN_IDENTIFICEREND => 45, GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER => 46, GsHandelsproductenPeer::KLEUR_KODE => 47, GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER => 48, GsHandelsproductenPeer::SMAAK_KODE => 49, GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER => 50, GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE => 51, GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_THESAURUSNUMMER => 52, GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_KODE => 53, GsHandelsproductenPeer::GRONDSTOFVORM_THESAURUSNUMMER => 54, GsHandelsproductenPeer::GRONDSTOFVORM_KODE => 55, GsHandelsproductenPeer::LOS_VERKRIJGBAAR => 56, GsHandelsproductenPeer::BIOEQUIVALENTE_GROEP => 57, GsHandelsproductenPeer::KODE_RADIOACTIEVE_STOF => 58, GsHandelsproductenPeer::SOORT_HULPMIDDEL => 59, GsHandelsproductenPeer::RZV_THESAURUS_120 => 60, GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2 => 61, GsHandelsproductenPeer::TEKSTMODULE => 62, GsHandelsproductenPeer::TEKST_VERWIJZING => 63, GsHandelsproductenPeer::HULPMIDDEL_VOLGENS_AWBZ => 64, GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR => 65, GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID => 66, GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR => 67, GsHandelsproductenPeer::BASISEENHEID_VERPAKKING => 68, GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_ONDERGRENS => 69, GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_BOVENGRENS => 70, GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING => 71, GsHandelsproductenPeer::RZVVERSTREKKING => 72, GsHandelsproductenPeer::THESAURUS_RZV_RATIONALITEIT => 73, GsHandelsproductenPeer::BEOORDELING_RATIONALITEIT => 74, GsHandelsproductenPeer::THESAURUS_RZV_BEOORDELING => 75, GsHandelsproductenPeer::ACHTERGROND_RATIONALITEIT => 76, GsHandelsproductenPeer::THESAURUS_RZV_HULPMIDDELEN => 77, GsHandelsproductenPeer::HULPMIDDELEN_ZORG => 78, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'HANDELSPRODUKTKODE' => 2, 'PRKCODE' => 3, 'MEDISCH_HULPMIDDELKODE' => 4, 'HANDELSPRODUKTNAAMNUMMER' => 5, 'MERKSTAMNAAM' => 6, 'FIRMASTAMNAAM' => 7, 'PRODUKTGROEP_THESAURUSNUMMER' => 8, 'PRODUKTGROEP_KODE' => 9, 'SOORTELIJK_GEWICHT' => 10, 'AANTAL_DDDS_PER_BASISEENH_PRODUKT' => 11, 'AANTAL_DRUPPELS_PER_ML' => 12, 'PIFNUMMER_THESAURUSNUMMER' => 13, 'PIFNUMMER' => 14, 'FABRIKANT_PRODUKTKODERING' => 15, 'REDEN_NIET_CLUSTEREN_THESAURUSNR' => 16, 'REDEN_NIET_CLUSTEREN_KODE' => 17, 'FTK_1' => 18, 'FTK_2' => 19, 'FTK_3' => 20, 'FTK_4' => 21, 'FTK_5' => 22, 'INFORMATORIUMPRODUCTCODE' => 23, 'KODE_COMBINATIEPREPARAAT' => 24, 'KODE_VERGIFT' => 25, 'KODE_RIJVAARDIGHEID' => 26, 'KODE_BRANDGEVAARLIJK' => 27, 'GESTERILISEERD_VOOR_GENEESMIDDELEN' => 28, 'HPKEENHEID_THESAURUSNUMMER' => 29, 'HPKEENHEID_KODE' => 30, 'OPLOSMIDDEL_HOEVEELHEID_1' => 31, 'OPLOSMIDDEL_AANTAL_1' => 32, 'OPLOSMIDDEL_HOEVEELHEID_2' => 33, 'OPLOSMIDDEL_AANTAL_2' => 34, 'FARMACEUTISCHE_KWALITEIT' => 35, 'HALFFABRIKAAT_THESAURUSNUMMER' => 36, 'HALFFABRIKAAT_CODE' => 37, 'DEELBAARHEID_AANTAL' => 38, 'EMBALLAGEMATERIAAL_THESAURUSNUMMER' => 39, 'EMBALLAGEMATERIAAL_KODE' => 40, 'EMBALLAGESLUITING_THESAURUSNUMMER' => 41, 'EMBALLAGESLUITING_KODE' => 42, 'EMBALLAGEDOSEERINR_THESAURUSNR' => 43, 'EMBALLAGEDOSEERINRICHTING_KODE' => 44, 'HULPSTOFFEN_IDENTIFICEREND' => 45, 'KLEUR_THESAURUSNUMMER' => 46, 'KLEUR_KODE' => 47, 'SMAAK_THESAURUSNUMMER' => 48, 'SMAAK_KODE' => 49, 'BEREIDINGSVOORSCHR_THESAURUSNUMMER' => 50, 'BEREIDINGSVOORSCHRIFT_KODE' => 51, 'FYSISCHE_EIGENSCHAP_THESAURUSNUMMER' => 52, 'FYSISCHE_EIGENSCHAP_KODE' => 53, 'GRONDSTOFVORM_THESAURUSNUMMER' => 54, 'GRONDSTOFVORM_KODE' => 55, 'LOS_VERKRIJGBAAR' => 56, 'BIOEQUIVALENTE_GROEP' => 57, 'KODE_RADIOACTIEVE_STOF' => 58, 'SOORT_HULPMIDDEL' => 59, 'RZV_THESAURUS_120' => 60, 'RZVVOORWAARDEN_BIJLAGE_2' => 61, 'TEKSTMODULE' => 62, 'TEKST_VERWIJZING' => 63, 'HULPMIDDEL_VOLGENS_AWBZ' => 64, 'EENHEID_INKOOPHOEVEELHEID_THESNR' => 65, 'EENHEID_INKOOPHOEVEELHEID' => 66, 'BASISEENHEID_VERPAKKING_THESNR' => 67, 'BASISEENHEID_VERPAKKING' => 68, 'RICHTLIJN_GEBRUIK_ONDERGRENS' => 69, 'RICHTLIJN_GEBRUIK_BOVENGRENS' => 70, 'THESAURUS_RZV_VERSTREKKING' => 71, 'RZVVERSTREKKING' => 72, 'THESAURUS_RZV_RATIONALITEIT' => 73, 'BEOORDELING_RATIONALITEIT' => 74, 'THESAURUS_RZV_BEOORDELING' => 75, 'ACHTERGROND_RATIONALITEIT' => 76, 'THESAURUS_RZV_HULPMIDDELEN' => 77, 'HULPMIDDELEN_ZORG' => 78, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'handelsproduktkode' => 2, 'prkcode' => 3, 'medisch_hulpmiddelkode' => 4, 'handelsproduktnaamnummer' => 5, 'merkstamnaam' => 6, 'firmastamnaam' => 7, 'produktgroep_thesaurusnummer' => 8, 'produktgroep_kode' => 9, 'soortelijk_gewicht' => 10, 'aantal_ddds_per_basiseenh_produkt' => 11, 'aantal_druppels_per_ml' => 12, 'pifnummer_thesaurusnummer' => 13, 'pifnummer' => 14, 'fabrikant_produktkodering' => 15, 'reden_niet_clusteren_thesaurusnr' => 16, 'reden_niet_clusteren_kode' => 17, 'ftk_1' => 18, 'ftk_2' => 19, 'ftk_3' => 20, 'ftk_4' => 21, 'ftk_5' => 22, 'informatoriumproductcode' => 23, 'kode_combinatiepreparaat' => 24, 'kode_vergift' => 25, 'kode_rijvaardigheid' => 26, 'kode_brandgevaarlijk' => 27, 'gesteriliseerd_voor_geneesmiddelen' => 28, 'hpkeenheid_thesaurusnummer' => 29, 'hpkeenheid_kode' => 30, 'oplosmiddel_hoeveelheid_1' => 31, 'oplosmiddel_aantal_1' => 32, 'oplosmiddel_hoeveelheid_2' => 33, 'oplosmiddel_aantal_2' => 34, 'farmaceutische_kwaliteit' => 35, 'halffabrikaat_thesaurusnummer' => 36, 'halffabrikaat_code' => 37, 'deelbaarheid_aantal' => 38, 'emballagemateriaal_thesaurusnummer' => 39, 'emballagemateriaal_kode' => 40, 'emballagesluiting_thesaurusnummer' => 41, 'emballagesluiting_kode' => 42, 'emballagedoseerinr_thesaurusnr' => 43, 'emballagedoseerinrichting_kode' => 44, 'hulpstoffen_identificerend' => 45, 'kleur_thesaurusnummer' => 46, 'kleur_kode' => 47, 'smaak_thesaurusnummer' => 48, 'smaak_kode' => 49, 'bereidingsvoorschr_thesaurusnummer' => 50, 'bereidingsvoorschrift_kode' => 51, 'fysische_eigenschap_thesaurusnummer' => 52, 'fysische_eigenschap_kode' => 53, 'grondstofvorm_thesaurusnummer' => 54, 'grondstofvorm_kode' => 55, 'los_verkrijgbaar' => 56, 'bioequivalente_groep' => 57, 'kode_radioactieve_stof' => 58, 'soort_hulpmiddel' => 59, 'rzv_thesaurus_120' => 60, 'rzvvoorwaarden_bijlage_2' => 61, 'tekstmodule' => 62, 'tekst_verwijzing' => 63, 'hulpmiddel_volgens_awbz' => 64, 'eenheid_inkoophoeveelheid_thesnr' => 65, 'eenheid_inkoophoeveelheid' => 66, 'basiseenheid_verpakking_thesnr' => 67, 'basiseenheid_verpakking' => 68, 'richtlijn_gebruik_ondergrens' => 69, 'richtlijn_gebruik_bovengrens' => 70, 'thesaurus_rzv_verstrekking' => 71, 'rzvverstrekking' => 72, 'thesaurus_rzv_rationaliteit' => 73, 'beoordeling_rationaliteit' => 74, 'thesaurus_rzv_beoordeling' => 75, 'achtergrond_rationaliteit' => 76, 'thesaurus_rzv_hulpmiddelen' => 77, 'hulpmiddelen_zorg' => 78, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = GsHandelsproductenPeer::getFieldNames($toType);
        $key = isset(GsHandelsproductenPeer::$fieldKeys[$fromType][$name]) ? GsHandelsproductenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsHandelsproductenPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, GsHandelsproductenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsHandelsproductenPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. GsHandelsproductenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsHandelsproductenPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(GsHandelsproductenPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsHandelsproductenPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsHandelsproductenPeer::HANDELSPRODUKTKODE);
            $criteria->addSelectColumn(GsHandelsproductenPeer::PRKCODE);
            $criteria->addSelectColumn(GsHandelsproductenPeer::MEDISCH_HULPMIDDELKODE);
            $criteria->addSelectColumn(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER);
            $criteria->addSelectColumn(GsHandelsproductenPeer::MERKSTAMNAAM);
            $criteria->addSelectColumn(GsHandelsproductenPeer::FIRMASTAMNAAM);
            $criteria->addSelectColumn(GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER);
            $criteria->addSelectColumn(GsHandelsproductenPeer::PRODUKTGROEP_KODE);
            $criteria->addSelectColumn(GsHandelsproductenPeer::SOORTELIJK_GEWICHT);
            $criteria->addSelectColumn(GsHandelsproductenPeer::AANTAL_DDDS_PER_BASISEENH_PRODUKT);
            $criteria->addSelectColumn(GsHandelsproductenPeer::AANTAL_DRUPPELS_PER_ML);
            $criteria->addSelectColumn(GsHandelsproductenPeer::PIFNUMMER_THESAURUSNUMMER);
            $criteria->addSelectColumn(GsHandelsproductenPeer::PIFNUMMER);
            $criteria->addSelectColumn(GsHandelsproductenPeer::FABRIKANT_PRODUKTKODERING);
            $criteria->addSelectColumn(GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_THESAURUSNR);
            $criteria->addSelectColumn(GsHandelsproductenPeer::REDEN_NIET_CLUSTEREN_KODE);
            $criteria->addSelectColumn(GsHandelsproductenPeer::FTK_1);
            $criteria->addSelectColumn(GsHandelsproductenPeer::FTK_2);
            $criteria->addSelectColumn(GsHandelsproductenPeer::FTK_3);
            $criteria->addSelectColumn(GsHandelsproductenPeer::FTK_4);
            $criteria->addSelectColumn(GsHandelsproductenPeer::FTK_5);
            $criteria->addSelectColumn(GsHandelsproductenPeer::INFORMATORIUMPRODUCTCODE);
            $criteria->addSelectColumn(GsHandelsproductenPeer::KODE_COMBINATIEPREPARAAT);
            $criteria->addSelectColumn(GsHandelsproductenPeer::KODE_VERGIFT);
            $criteria->addSelectColumn(GsHandelsproductenPeer::KODE_RIJVAARDIGHEID);
            $criteria->addSelectColumn(GsHandelsproductenPeer::KODE_BRANDGEVAARLIJK);
            $criteria->addSelectColumn(GsHandelsproductenPeer::GESTERILISEERD_VOOR_GENEESMIDDELEN);
            $criteria->addSelectColumn(GsHandelsproductenPeer::HPKEENHEID_THESAURUSNUMMER);
            $criteria->addSelectColumn(GsHandelsproductenPeer::HPKEENHEID_KODE);
            $criteria->addSelectColumn(GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_1);
            $criteria->addSelectColumn(GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_1);
            $criteria->addSelectColumn(GsHandelsproductenPeer::OPLOSMIDDEL_HOEVEELHEID_2);
            $criteria->addSelectColumn(GsHandelsproductenPeer::OPLOSMIDDEL_AANTAL_2);
            $criteria->addSelectColumn(GsHandelsproductenPeer::FARMACEUTISCHE_KWALITEIT);
            $criteria->addSelectColumn(GsHandelsproductenPeer::HALFFABRIKAAT_THESAURUSNUMMER);
            $criteria->addSelectColumn(GsHandelsproductenPeer::HALFFABRIKAAT_CODE);
            $criteria->addSelectColumn(GsHandelsproductenPeer::DEELBAARHEID_AANTAL);
            $criteria->addSelectColumn(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER);
            $criteria->addSelectColumn(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE);
            $criteria->addSelectColumn(GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER);
            $criteria->addSelectColumn(GsHandelsproductenPeer::EMBALLAGESLUITING_KODE);
            $criteria->addSelectColumn(GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR);
            $criteria->addSelectColumn(GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE);
            $criteria->addSelectColumn(GsHandelsproductenPeer::HULPSTOFFEN_IDENTIFICEREND);
            $criteria->addSelectColumn(GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER);
            $criteria->addSelectColumn(GsHandelsproductenPeer::KLEUR_KODE);
            $criteria->addSelectColumn(GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER);
            $criteria->addSelectColumn(GsHandelsproductenPeer::SMAAK_KODE);
            $criteria->addSelectColumn(GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER);
            $criteria->addSelectColumn(GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE);
            $criteria->addSelectColumn(GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_THESAURUSNUMMER);
            $criteria->addSelectColumn(GsHandelsproductenPeer::FYSISCHE_EIGENSCHAP_KODE);
            $criteria->addSelectColumn(GsHandelsproductenPeer::GRONDSTOFVORM_THESAURUSNUMMER);
            $criteria->addSelectColumn(GsHandelsproductenPeer::GRONDSTOFVORM_KODE);
            $criteria->addSelectColumn(GsHandelsproductenPeer::LOS_VERKRIJGBAAR);
            $criteria->addSelectColumn(GsHandelsproductenPeer::BIOEQUIVALENTE_GROEP);
            $criteria->addSelectColumn(GsHandelsproductenPeer::KODE_RADIOACTIEVE_STOF);
            $criteria->addSelectColumn(GsHandelsproductenPeer::SOORT_HULPMIDDEL);
            $criteria->addSelectColumn(GsHandelsproductenPeer::RZV_THESAURUS_120);
            $criteria->addSelectColumn(GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2);
            $criteria->addSelectColumn(GsHandelsproductenPeer::TEKSTMODULE);
            $criteria->addSelectColumn(GsHandelsproductenPeer::TEKST_VERWIJZING);
            $criteria->addSelectColumn(GsHandelsproductenPeer::HULPMIDDEL_VOLGENS_AWBZ);
            $criteria->addSelectColumn(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR);
            $criteria->addSelectColumn(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID);
            $criteria->addSelectColumn(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR);
            $criteria->addSelectColumn(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING);
            $criteria->addSelectColumn(GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_ONDERGRENS);
            $criteria->addSelectColumn(GsHandelsproductenPeer::RICHTLIJN_GEBRUIK_BOVENGRENS);
            $criteria->addSelectColumn(GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING);
            $criteria->addSelectColumn(GsHandelsproductenPeer::RZVVERSTREKKING);
            $criteria->addSelectColumn(GsHandelsproductenPeer::THESAURUS_RZV_RATIONALITEIT);
            $criteria->addSelectColumn(GsHandelsproductenPeer::BEOORDELING_RATIONALITEIT);
            $criteria->addSelectColumn(GsHandelsproductenPeer::THESAURUS_RZV_BEOORDELING);
            $criteria->addSelectColumn(GsHandelsproductenPeer::ACHTERGROND_RATIONALITEIT);
            $criteria->addSelectColumn(GsHandelsproductenPeer::THESAURUS_RZV_HULPMIDDELEN);
            $criteria->addSelectColumn(GsHandelsproductenPeer::HULPMIDDELEN_ZORG);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.handelsproduktkode');
            $criteria->addSelectColumn($alias . '.prkcode');
            $criteria->addSelectColumn($alias . '.medisch_hulpmiddelkode');
            $criteria->addSelectColumn($alias . '.handelsproduktnaamnummer');
            $criteria->addSelectColumn($alias . '.merkstamnaam');
            $criteria->addSelectColumn($alias . '.firmastamnaam');
            $criteria->addSelectColumn($alias . '.produktgroep_thesaurusnummer');
            $criteria->addSelectColumn($alias . '.produktgroep_kode');
            $criteria->addSelectColumn($alias . '.soortelijk_gewicht');
            $criteria->addSelectColumn($alias . '.aantal_ddds_per_basiseenh_produkt');
            $criteria->addSelectColumn($alias . '.aantal_druppels_per_ml');
            $criteria->addSelectColumn($alias . '.pifnummer_thesaurusnummer');
            $criteria->addSelectColumn($alias . '.pifnummer');
            $criteria->addSelectColumn($alias . '.fabrikant_produktkodering');
            $criteria->addSelectColumn($alias . '.reden_niet_clusteren_thesaurusnr');
            $criteria->addSelectColumn($alias . '.reden_niet_clusteren_kode');
            $criteria->addSelectColumn($alias . '.ftk_1');
            $criteria->addSelectColumn($alias . '.ftk_2');
            $criteria->addSelectColumn($alias . '.ftk_3');
            $criteria->addSelectColumn($alias . '.ftk_4');
            $criteria->addSelectColumn($alias . '.ftk_5');
            $criteria->addSelectColumn($alias . '.informatoriumproductcode');
            $criteria->addSelectColumn($alias . '.kode_combinatiepreparaat');
            $criteria->addSelectColumn($alias . '.kode_vergift');
            $criteria->addSelectColumn($alias . '.kode_rijvaardigheid');
            $criteria->addSelectColumn($alias . '.kode_brandgevaarlijk');
            $criteria->addSelectColumn($alias . '.gesteriliseerd_voor_geneesmiddelen');
            $criteria->addSelectColumn($alias . '.hpkeenheid_thesaurusnummer');
            $criteria->addSelectColumn($alias . '.hpkeenheid_kode');
            $criteria->addSelectColumn($alias . '.oplosmiddel_hoeveelheid_1');
            $criteria->addSelectColumn($alias . '.oplosmiddel_aantal_1');
            $criteria->addSelectColumn($alias . '.oplosmiddel_hoeveelheid_2');
            $criteria->addSelectColumn($alias . '.oplosmiddel_aantal_2');
            $criteria->addSelectColumn($alias . '.farmaceutische_kwaliteit');
            $criteria->addSelectColumn($alias . '.halffabrikaat_thesaurusnummer');
            $criteria->addSelectColumn($alias . '.halffabrikaat_code');
            $criteria->addSelectColumn($alias . '.deelbaarheid_aantal');
            $criteria->addSelectColumn($alias . '.emballagemateriaal_thesaurusnummer');
            $criteria->addSelectColumn($alias . '.emballagemateriaal_kode');
            $criteria->addSelectColumn($alias . '.emballagesluiting_thesaurusnummer');
            $criteria->addSelectColumn($alias . '.emballagesluiting_kode');
            $criteria->addSelectColumn($alias . '.emballagedoseerinr_thesaurusnr');
            $criteria->addSelectColumn($alias . '.emballagedoseerinrichting_kode');
            $criteria->addSelectColumn($alias . '.hulpstoffen_identificerend');
            $criteria->addSelectColumn($alias . '.kleur_thesaurusnummer');
            $criteria->addSelectColumn($alias . '.kleur_kode');
            $criteria->addSelectColumn($alias . '.smaak_thesaurusnummer');
            $criteria->addSelectColumn($alias . '.smaak_kode');
            $criteria->addSelectColumn($alias . '.bereidingsvoorschr_thesaurusnummer');
            $criteria->addSelectColumn($alias . '.bereidingsvoorschrift_kode');
            $criteria->addSelectColumn($alias . '.fysische_eigenschap_thesaurusnummer');
            $criteria->addSelectColumn($alias . '.fysische_eigenschap_kode');
            $criteria->addSelectColumn($alias . '.grondstofvorm_thesaurusnummer');
            $criteria->addSelectColumn($alias . '.grondstofvorm_kode');
            $criteria->addSelectColumn($alias . '.los_verkrijgbaar');
            $criteria->addSelectColumn($alias . '.bioequivalente_groep');
            $criteria->addSelectColumn($alias . '.kode_radioactieve_stof');
            $criteria->addSelectColumn($alias . '.soort_hulpmiddel');
            $criteria->addSelectColumn($alias . '.rzv_thesaurus_120');
            $criteria->addSelectColumn($alias . '.rzvvoorwaarden_bijlage_2');
            $criteria->addSelectColumn($alias . '.tekstmodule');
            $criteria->addSelectColumn($alias . '.tekst_verwijzing');
            $criteria->addSelectColumn($alias . '.hulpmiddel_volgens_awbz');
            $criteria->addSelectColumn($alias . '.eenheid_inkoophoeveelheid_thesnr');
            $criteria->addSelectColumn($alias . '.eenheid_inkoophoeveelheid');
            $criteria->addSelectColumn($alias . '.basiseenheid_verpakking_thesnr');
            $criteria->addSelectColumn($alias . '.basiseenheid_verpakking');
            $criteria->addSelectColumn($alias . '.richtlijn_gebruik_ondergrens');
            $criteria->addSelectColumn($alias . '.richtlijn_gebruik_bovengrens');
            $criteria->addSelectColumn($alias . '.thesaurus_rzv_verstrekking');
            $criteria->addSelectColumn($alias . '.rzvverstrekking');
            $criteria->addSelectColumn($alias . '.thesaurus_rzv_rationaliteit');
            $criteria->addSelectColumn($alias . '.beoordeling_rationaliteit');
            $criteria->addSelectColumn($alias . '.thesaurus_rzv_beoordeling');
            $criteria->addSelectColumn($alias . '.achtergrond_rationaliteit');
            $criteria->addSelectColumn($alias . '.thesaurus_rzv_hulpmiddelen');
            $criteria->addSelectColumn($alias . '.hulpmiddelen_zorg');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return GsHandelsproducten
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsHandelsproductenPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return GsHandelsproductenPeer::populateObjects(GsHandelsproductenPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param GsHandelsproducten $obj A GsHandelsproducten object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getHandelsproduktkode();
            } // if key === null
            GsHandelsproductenPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A GsHandelsproducten object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsHandelsproducten) {
                $key = (string) $value->getHandelsproduktkode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsHandelsproducten object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsHandelsproductenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsHandelsproducten Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsHandelsproductenPeer::$instances[$key])) {
                return GsHandelsproductenPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (GsHandelsproductenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsHandelsproductenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_handelsproducten
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol + 2] === null) {
            return null;
        }

        return (string) $row[$startcol + 2];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol + 2];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = GsHandelsproductenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsHandelsproductenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsHandelsproductenPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (GsHandelsproducten object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsHandelsproductenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsHandelsproductenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsHandelsproductenPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsPrescriptieProduct table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsPrescriptieProduct(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsNamen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinGsNamen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related InkoophoeveelheidOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinInkoophoeveelheidOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related BasiseenheidOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinBasiseenheidOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related EmballageMateriaalOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEmballageMateriaalOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related EmballageSluitingOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEmballageSluitingOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGESLUITING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related EmballageDoseerinrichtingOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEmballageDoseerinrichtingOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related KleurOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinKleurOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::KLEUR_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related SmaakOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSmaakOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::SMAAK_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related BereidingsvoorschrijftOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinBereidingsvoorschrijftOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related ProduktgroepOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinProduktgroepOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::PRODUKTGROEP_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related RzvVerstrekkingOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRzvVerstrekkingOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::RZVVERSTREKKING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related RzvBijlage2Omschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRzvBijlage2Omschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::RZV_THESAURUS_120, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with their GsPrescriptieProduct objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsPrescriptieProduct(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;
        GsPrescriptieProductPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsPrescriptieProductPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsPrescriptieProductPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to $obj2 (GsPrescriptieProduct)
                $obj2->addGsHandelsproducten($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with their GsNamen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinGsNamen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;
        GsNamenPeer::addSelectColumns($criteria);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsNamenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsNamenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsNamenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to $obj2 (GsNamen)
                $obj2->addGsHandelsproducten($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinInkoophoeveelheidOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to $obj2 (GsThesauriTotaal)
                $obj2->addGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinBasiseenheidOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to $obj2 (GsThesauriTotaal)
                $obj2->addGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmballageMateriaalOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to $obj2 (GsThesauriTotaal)
                $obj2->addGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmballageSluitingOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGESLUITING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to $obj2 (GsThesauriTotaal)
                $obj2->addGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmballageDoseerinrichtingOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to $obj2 (GsThesauriTotaal)
                $obj2->addGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinKleurOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::KLEUR_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to $obj2 (GsThesauriTotaal)
                $obj2->addGsHandelsproductenRelatedByKleurThesaurusnummerKleurKode($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSmaakOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::SMAAK_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to $obj2 (GsThesauriTotaal)
                $obj2->addGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinBereidingsvoorschrijftOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to $obj2 (GsThesauriTotaal)
                $obj2->addGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProduktgroepOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::PRODUKTGROEP_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to $obj2 (GsThesauriTotaal)
                $obj2->addGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRzvVerstrekkingOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::RZVVERSTREKKING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to $obj2 (GsThesauriTotaal)
                $obj2->addGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with their GsThesauriTotaal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRzvBijlage2Omschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;
        GsThesauriTotaalPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::RZV_THESAURUS_120, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = GsThesauriTotaalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    GsThesauriTotaalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to $obj2 (GsThesauriTotaal)
                $obj2->addGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGESLUITING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::KLEUR_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::SMAAK_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::PRODUKTGROEP_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::RZVVERSTREKKING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::RZV_THESAURUS_120, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol2 = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol15 = $startcol14 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGESLUITING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::KLEUR_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::SMAAK_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::PRODUKTGROEP_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::RZVVERSTREKKING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::RZV_THESAURUS_120, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined GsPrescriptieProduct rows

            $key2 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = GsPrescriptieProductPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsPrescriptieProductPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj2 (GsPrescriptieProduct)
                $obj2->addGsHandelsproducten($obj1);
            } // if joined row not null

            // Add objects for joined GsNamen rows

            $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj3 (GsNamen)
                $obj3->addGsHandelsproducten($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key4 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = GsThesauriTotaalPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsThesauriTotaalPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key5 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = GsThesauriTotaalPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsThesauriTotaalPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj5 (GsThesauriTotaal)
                $obj5->addGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key6 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = GsThesauriTotaalPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsThesauriTotaalPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj6 (GsThesauriTotaal)
                $obj6->addGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key7 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol7);
            if ($key7 !== null) {
                $obj7 = GsThesauriTotaalPeer::getInstanceFromPool($key7);
                if (!$obj7) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    GsThesauriTotaalPeer::addInstanceToPool($obj7, $key7);
                } // if obj7 loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj7 (GsThesauriTotaal)
                $obj7->addGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key8 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol8);
            if ($key8 !== null) {
                $obj8 = GsThesauriTotaalPeer::getInstanceFromPool($key8);
                if (!$obj8) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    GsThesauriTotaalPeer::addInstanceToPool($obj8, $key8);
                } // if obj8 loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj8 (GsThesauriTotaal)
                $obj8->addGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key9 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol9);
            if ($key9 !== null) {
                $obj9 = GsThesauriTotaalPeer::getInstanceFromPool($key9);
                if (!$obj9) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    GsThesauriTotaalPeer::addInstanceToPool($obj9, $key9);
                } // if obj9 loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj9 (GsThesauriTotaal)
                $obj9->addGsHandelsproductenRelatedByKleurThesaurusnummerKleurKode($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key10 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol10);
            if ($key10 !== null) {
                $obj10 = GsThesauriTotaalPeer::getInstanceFromPool($key10);
                if (!$obj10) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    GsThesauriTotaalPeer::addInstanceToPool($obj10, $key10);
                } // if obj10 loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj10 (GsThesauriTotaal)
                $obj10->addGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key11 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol11);
            if ($key11 !== null) {
                $obj11 = GsThesauriTotaalPeer::getInstanceFromPool($key11);
                if (!$obj11) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    GsThesauriTotaalPeer::addInstanceToPool($obj11, $key11);
                } // if obj11 loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj11 (GsThesauriTotaal)
                $obj11->addGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key12 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol12);
            if ($key12 !== null) {
                $obj12 = GsThesauriTotaalPeer::getInstanceFromPool($key12);
                if (!$obj12) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    GsThesauriTotaalPeer::addInstanceToPool($obj12, $key12);
                } // if obj12 loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj12 (GsThesauriTotaal)
                $obj12->addGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key13 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol13);
            if ($key13 !== null) {
                $obj13 = GsThesauriTotaalPeer::getInstanceFromPool($key13);
                if (!$obj13) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    GsThesauriTotaalPeer::addInstanceToPool($obj13, $key13);
                } // if obj13 loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj13 (GsThesauriTotaal)
                $obj13->addGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking($obj1);
            } // if joined row not null

            // Add objects for joined GsThesauriTotaal rows

            $key14 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol14);
            if ($key14 !== null) {
                $obj14 = GsThesauriTotaalPeer::getInstanceFromPool($key14);
                if (!$obj14) {

                    $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj14 = new $cls();
                    $obj14->hydrate($row, $startcol14);
                    GsThesauriTotaalPeer::addInstanceToPool($obj14, $key14);
                } // if obj14 loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj14 (GsThesauriTotaal)
                $obj14->addGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsPrescriptieProduct table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsPrescriptieProduct(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGESLUITING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::KLEUR_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::SMAAK_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::PRODUKTGROEP_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::RZVVERSTREKKING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::RZV_THESAURUS_120, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related GsNamen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptGsNamen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGESLUITING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::KLEUR_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::SMAAK_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::PRODUKTGROEP_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::RZVVERSTREKKING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::RZV_THESAURUS_120, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related InkoophoeveelheidOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptInkoophoeveelheidOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related BasiseenheidOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptBasiseenheidOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related EmballageMateriaalOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEmballageMateriaalOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related EmballageSluitingOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEmballageSluitingOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related EmballageDoseerinrichtingOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEmballageDoseerinrichtingOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related KleurOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptKleurOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related SmaakOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptSmaakOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related BereidingsvoorschrijftOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptBereidingsvoorschrijftOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related ProduktgroepOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptProduktgroepOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related RzvVerstrekkingOmschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRzvVerstrekkingOmschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related RzvBijlage2Omschrijving table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRzvBijlage2Omschrijving(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsHandelsproductenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with all related objects except GsPrescriptieProduct.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsPrescriptieProduct(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol2 = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGESLUITING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::KLEUR_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::SMAAK_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::PRODUKTGROEP_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::RZVVERSTREKKING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::RZV_THESAURUS_120, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsNamen rows

                $key2 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsNamenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsNamenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj2 (GsNamen)
                $obj2->addGsHandelsproducten($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key3 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsThesauriTotaalPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsThesauriTotaalPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj3 (GsThesauriTotaal)
                $obj3->addGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key4 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsThesauriTotaalPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsThesauriTotaalPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key5 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsThesauriTotaalPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsThesauriTotaalPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj5 (GsThesauriTotaal)
                $obj5->addGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key6 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsThesauriTotaalPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsThesauriTotaalPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj6 (GsThesauriTotaal)
                $obj6->addGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key7 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = GsThesauriTotaalPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    GsThesauriTotaalPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj7 (GsThesauriTotaal)
                $obj7->addGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key8 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = GsThesauriTotaalPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    GsThesauriTotaalPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj8 (GsThesauriTotaal)
                $obj8->addGsHandelsproductenRelatedByKleurThesaurusnummerKleurKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key9 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = GsThesauriTotaalPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    GsThesauriTotaalPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj9 (GsThesauriTotaal)
                $obj9->addGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key10 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = GsThesauriTotaalPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    GsThesauriTotaalPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj10 (GsThesauriTotaal)
                $obj10->addGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key11 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = GsThesauriTotaalPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    GsThesauriTotaalPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj11 (GsThesauriTotaal)
                $obj11->addGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key12 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = GsThesauriTotaalPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    GsThesauriTotaalPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj12 (GsThesauriTotaal)
                $obj12->addGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key13 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = GsThesauriTotaalPeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    GsThesauriTotaalPeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj13 (GsThesauriTotaal)
                $obj13->addGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with all related objects except GsNamen.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptGsNamen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol2 = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol11 = $startcol10 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol12 = $startcol11 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol13 = $startcol12 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        GsThesauriTotaalPeer::addSelectColumns($criteria);
        $startcol14 = $startcol13 + GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EENHEID_INKOOPHOEVEELHEID, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING_THESNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::BASISEENHEID_VERPAKKING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGEMATERIAAL_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGESLUITING_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGESLUITING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::EMBALLAGEDOSEERINR_THESAURUSNR, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::EMBALLAGEDOSEERINRICHTING_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::KLEUR_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::KLEUR_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::SMAAK_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::SMAAK_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::BEREIDINGSVOORSCHR_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::BEREIDINGSVOORSCHRIFT_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::PRODUKTGROEP_THESAURUSNUMMER, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::PRODUKTGROEP_KODE, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::THESAURUS_RZV_VERSTREKKING, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::RZVVERSTREKKING, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);

        $criteria->addMultipleJoin(array(
        array(GsHandelsproductenPeer::RZV_THESAURUS_120, GsThesauriTotaalPeer::THESAURUSNUMMER),
        array(GsHandelsproductenPeer::RZVVOORWAARDEN_BIJLAGE_2, GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER),
      ), $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsPrescriptieProduct rows

                $key2 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsPrescriptieProductPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsPrescriptieProductPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj2 (GsPrescriptieProduct)
                $obj2->addGsHandelsproducten($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key3 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsThesauriTotaalPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsThesauriTotaalPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj3 (GsThesauriTotaal)
                $obj3->addGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key4 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = GsThesauriTotaalPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    GsThesauriTotaalPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj4 (GsThesauriTotaal)
                $obj4->addGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key5 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = GsThesauriTotaalPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    GsThesauriTotaalPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj5 (GsThesauriTotaal)
                $obj5->addGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key6 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = GsThesauriTotaalPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    GsThesauriTotaalPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj6 (GsThesauriTotaal)
                $obj6->addGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key7 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = GsThesauriTotaalPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    GsThesauriTotaalPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj7 (GsThesauriTotaal)
                $obj7->addGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key8 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = GsThesauriTotaalPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    GsThesauriTotaalPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj8 (GsThesauriTotaal)
                $obj8->addGsHandelsproductenRelatedByKleurThesaurusnummerKleurKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key9 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol9);
                if ($key9 !== null) {
                    $obj9 = GsThesauriTotaalPeer::getInstanceFromPool($key9);
                    if (!$obj9) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    GsThesauriTotaalPeer::addInstanceToPool($obj9, $key9);
                } // if $obj9 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj9 (GsThesauriTotaal)
                $obj9->addGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key10 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol10);
                if ($key10 !== null) {
                    $obj10 = GsThesauriTotaalPeer::getInstanceFromPool($key10);
                    if (!$obj10) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj10 = new $cls();
                    $obj10->hydrate($row, $startcol10);
                    GsThesauriTotaalPeer::addInstanceToPool($obj10, $key10);
                } // if $obj10 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj10 (GsThesauriTotaal)
                $obj10->addGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key11 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol11);
                if ($key11 !== null) {
                    $obj11 = GsThesauriTotaalPeer::getInstanceFromPool($key11);
                    if (!$obj11) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj11 = new $cls();
                    $obj11->hydrate($row, $startcol11);
                    GsThesauriTotaalPeer::addInstanceToPool($obj11, $key11);
                } // if $obj11 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj11 (GsThesauriTotaal)
                $obj11->addGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key12 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol12);
                if ($key12 !== null) {
                    $obj12 = GsThesauriTotaalPeer::getInstanceFromPool($key12);
                    if (!$obj12) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj12 = new $cls();
                    $obj12->hydrate($row, $startcol12);
                    GsThesauriTotaalPeer::addInstanceToPool($obj12, $key12);
                } // if $obj12 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj12 (GsThesauriTotaal)
                $obj12->addGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking($obj1);

            } // if joined row is not null

                // Add objects for joined GsThesauriTotaal rows

                $key13 = GsThesauriTotaalPeer::getPrimaryKeyHashFromRow($row, $startcol13);
                if ($key13 !== null) {
                    $obj13 = GsThesauriTotaalPeer::getInstanceFromPool($key13);
                    if (!$obj13) {

                        $cls = GsThesauriTotaalPeer::getOMClass();

                    $obj13 = new $cls();
                    $obj13->hydrate($row, $startcol13);
                    GsThesauriTotaalPeer::addInstanceToPool($obj13, $key13);
                } // if $obj13 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj13 (GsThesauriTotaal)
                $obj13->addGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with all related objects except InkoophoeveelheidOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptInkoophoeveelheidOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol2 = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsPrescriptieProduct rows

                $key2 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsPrescriptieProductPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsPrescriptieProductPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj2 (GsPrescriptieProduct)
                $obj2->addGsHandelsproducten($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj3 (GsNamen)
                $obj3->addGsHandelsproducten($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with all related objects except BasiseenheidOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptBasiseenheidOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol2 = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsPrescriptieProduct rows

                $key2 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsPrescriptieProductPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsPrescriptieProductPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj2 (GsPrescriptieProduct)
                $obj2->addGsHandelsproducten($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj3 (GsNamen)
                $obj3->addGsHandelsproducten($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with all related objects except EmballageMateriaalOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEmballageMateriaalOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol2 = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsPrescriptieProduct rows

                $key2 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsPrescriptieProductPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsPrescriptieProductPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj2 (GsPrescriptieProduct)
                $obj2->addGsHandelsproducten($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj3 (GsNamen)
                $obj3->addGsHandelsproducten($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with all related objects except EmballageSluitingOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEmballageSluitingOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol2 = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsPrescriptieProduct rows

                $key2 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsPrescriptieProductPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsPrescriptieProductPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj2 (GsPrescriptieProduct)
                $obj2->addGsHandelsproducten($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj3 (GsNamen)
                $obj3->addGsHandelsproducten($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with all related objects except EmballageDoseerinrichtingOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEmballageDoseerinrichtingOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol2 = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsPrescriptieProduct rows

                $key2 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsPrescriptieProductPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsPrescriptieProductPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj2 (GsPrescriptieProduct)
                $obj2->addGsHandelsproducten($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj3 (GsNamen)
                $obj3->addGsHandelsproducten($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with all related objects except KleurOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptKleurOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol2 = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsPrescriptieProduct rows

                $key2 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsPrescriptieProductPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsPrescriptieProductPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj2 (GsPrescriptieProduct)
                $obj2->addGsHandelsproducten($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj3 (GsNamen)
                $obj3->addGsHandelsproducten($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with all related objects except SmaakOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptSmaakOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol2 = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsPrescriptieProduct rows

                $key2 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsPrescriptieProductPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsPrescriptieProductPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj2 (GsPrescriptieProduct)
                $obj2->addGsHandelsproducten($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj3 (GsNamen)
                $obj3->addGsHandelsproducten($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with all related objects except BereidingsvoorschrijftOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptBereidingsvoorschrijftOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol2 = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsPrescriptieProduct rows

                $key2 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsPrescriptieProductPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsPrescriptieProductPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj2 (GsPrescriptieProduct)
                $obj2->addGsHandelsproducten($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj3 (GsNamen)
                $obj3->addGsHandelsproducten($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with all related objects except ProduktgroepOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptProduktgroepOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol2 = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsPrescriptieProduct rows

                $key2 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsPrescriptieProductPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsPrescriptieProductPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj2 (GsPrescriptieProduct)
                $obj2->addGsHandelsproducten($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj3 (GsNamen)
                $obj3->addGsHandelsproducten($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with all related objects except RzvVerstrekkingOmschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRzvVerstrekkingOmschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol2 = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsPrescriptieProduct rows

                $key2 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsPrescriptieProductPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsPrescriptieProductPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj2 (GsPrescriptieProduct)
                $obj2->addGsHandelsproducten($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj3 (GsNamen)
                $obj3->addGsHandelsproducten($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of GsHandelsproducten objects pre-filled with all related objects except RzvBijlage2Omschrijving.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of GsHandelsproducten objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRzvBijlage2Omschrijving(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);
        }

        GsHandelsproductenPeer::addSelectColumns($criteria);
        $startcol2 = GsHandelsproductenPeer::NUM_HYDRATE_COLUMNS;

        GsPrescriptieProductPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + GsPrescriptieProductPeer::NUM_HYDRATE_COLUMNS;

        GsNamenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + GsNamenPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(GsHandelsproductenPeer::PRKCODE, GsPrescriptieProductPeer::PRKCODE, $join_behavior);

        $criteria->addJoin(GsHandelsproductenPeer::HANDELSPRODUKTNAAMNUMMER, GsNamenPeer::NAAMNUMMER, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = GsHandelsproductenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = GsHandelsproductenPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = GsHandelsproductenPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                GsHandelsproductenPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined GsPrescriptieProduct rows

                $key2 = GsPrescriptieProductPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = GsPrescriptieProductPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = GsPrescriptieProductPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    GsPrescriptieProductPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj2 (GsPrescriptieProduct)
                $obj2->addGsHandelsproducten($obj1);

            } // if joined row is not null

                // Add objects for joined GsNamen rows

                $key3 = GsNamenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = GsNamenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = GsNamenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    GsNamenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (GsHandelsproducten) to the collection in $obj3 (GsNamen)
                $obj3->addGsHandelsproducten($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(GsHandelsproductenPeer::DATABASE_NAME)->getTable(GsHandelsproductenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsHandelsproductenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsHandelsproductenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsHandelsproductenTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return GsHandelsproductenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsHandelsproducten or Criteria object.
     *
     * @param      mixed $values Criteria or GsHandelsproducten object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsHandelsproducten object
        }


        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a GsHandelsproducten or Criteria object.
     *
     * @param      mixed $values Criteria or GsHandelsproducten object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsHandelsproductenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsHandelsproductenPeer::HANDELSPRODUKTKODE);
            $value = $criteria->remove(GsHandelsproductenPeer::HANDELSPRODUKTKODE);
            if ($value) {
                $selectCriteria->add(GsHandelsproductenPeer::HANDELSPRODUKTKODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsHandelsproductenPeer::TABLE_NAME);
            }

        } else { // $values is GsHandelsproducten object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_handelsproducten table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsHandelsproductenPeer::TABLE_NAME, $con, GsHandelsproductenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsHandelsproductenPeer::clearInstancePool();
            GsHandelsproductenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsHandelsproducten or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsHandelsproducten object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsHandelsproductenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsHandelsproducten) { // it's a model object
            // invalidate the cache for this single object
            GsHandelsproductenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsHandelsproductenPeer::DATABASE_NAME);
            $criteria->add(GsHandelsproductenPeer::HANDELSPRODUKTKODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GsHandelsproductenPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsHandelsproductenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsHandelsproductenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsHandelsproducten object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsHandelsproducten $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsHandelsproductenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsHandelsproductenPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(GsHandelsproductenPeer::DATABASE_NAME, GsHandelsproductenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GsHandelsproducten
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GsHandelsproductenPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GsHandelsproductenPeer::DATABASE_NAME);
        $criteria->add(GsHandelsproductenPeer::HANDELSPRODUKTKODE, $pk);

        $v = GsHandelsproductenPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GsHandelsproducten[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsHandelsproductenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GsHandelsproductenPeer::DATABASE_NAME);
            $criteria->add(GsHandelsproductenPeer::HANDELSPRODUKTKODE, $pks, Criteria::IN);
            $objs = GsHandelsproductenPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGsHandelsproductenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsHandelsproductenPeer::buildTableMap();

