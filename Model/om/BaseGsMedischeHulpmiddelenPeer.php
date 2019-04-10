<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsMedischeHulpmiddelen;
use PharmaIntelligence\GstandaardBundle\Model\GsMedischeHulpmiddelenPeer;
use PharmaIntelligence\GstandaardBundle\Model\map\GsMedischeHulpmiddelenTableMap;

abstract class BaseGsMedischeHulpmiddelenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'default';

    /** the table name for this class */
    const TABLE_NAME = 'gs_medische_hulpmiddelen';

    /** the related Propel class for this table */
    const OM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsMedischeHulpmiddelen';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PharmaIntelligence\\GstandaardBundle\\Model\\map\\GsMedischeHulpmiddelenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 89;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 89;

    /** the column name for the bestandnummer field */
    const BESTANDNUMMER = 'gs_medische_hulpmiddelen.bestandnummer';

    /** the column name for the mutatiekode field */
    const MUTATIEKODE = 'gs_medische_hulpmiddelen.mutatiekode';

    /** the column name for the medisch_hulpmiddelkode field */
    const MEDISCH_HULPMIDDELKODE = 'gs_medische_hulpmiddelen.medisch_hulpmiddelkode';

    /** the column name for the substitutie_kode field */
    const SUBSTITUTIE_KODE = 'gs_medische_hulpmiddelen.substitutie_kode';

    /** the column name for the thnr_soort_hulpmiddel field */
    const THNR_SOORT_HULPMIDDEL = 'gs_medische_hulpmiddelen.thnr_soort_hulpmiddel';

    /** the column name for the soort_hulpmiddelkode field */
    const SOORT_HULPMIDDELKODE = 'gs_medische_hulpmiddelen.soort_hulpmiddelkode';

    /** the column name for the gesteriliseerd_janee field */
    const GESTERILISEERD_JANEE = 'gs_medische_hulpmiddelen.gesteriliseerd_janee';

    /** the column name for the thnr_sterilisatiemethode field */
    const THNR_STERILISATIEMETHODE = 'gs_medische_hulpmiddelen.thnr_sterilisatiemethode';

    /** the column name for the itemnr_sterilisatiemethode field */
    const ITEMNR_STERILISATIEMETHODE = 'gs_medische_hulpmiddelen.itemnr_sterilisatiemethode';

    /** the column name for the thnr_sluiting field */
    const THNR_SLUITING = 'gs_medische_hulpmiddelen.thnr_sluiting';

    /** the column name for the itemnr_sluiting field */
    const ITEMNR_SLUITING = 'gs_medische_hulpmiddelen.itemnr_sluiting';

    /** the column name for the aantal_delen field */
    const AANTAL_DELEN = 'gs_medische_hulpmiddelen.aantal_delen';

    /** the column name for the aantal_kanalen field */
    const AANTAL_KANALEN = 'gs_medische_hulpmiddelen.aantal_kanalen';

    /** the column name for the thnr_bevestiging field */
    const THNR_BEVESTIGING = 'gs_medische_hulpmiddelen.thnr_bevestiging';

    /** the column name for the itemnr_bevestiging field */
    const ITEMNR_BEVESTIGING = 'gs_medische_hulpmiddelen.itemnr_bevestiging';

    /** the column name for the breedte_hoeveelheid field */
    const BREEDTE_HOEVEELHEID = 'gs_medische_hulpmiddelen.breedte_hoeveelheid';

    /** the column name for the thnr_breedte_eenheid field */
    const THNR_BREEDTE_EENHEID = 'gs_medische_hulpmiddelen.thnr_breedte_eenheid';

    /** the column name for the itemnr_breedte_eenheid field */
    const ITEMNR_BREEDTE_EENHEID = 'gs_medische_hulpmiddelen.itemnr_breedte_eenheid';

    /** the column name for the drukklasse field */
    const DRUKKLASSE = 'gs_medische_hulpmiddelen.drukklasse';

    /** the column name for the diameter_hoeveelheid field */
    const DIAMETER_HOEVEELHEID = 'gs_medische_hulpmiddelen.diameter_hoeveelheid';

    /** the column name for the thnr_diameter_eenheid field */
    const THNR_DIAMETER_EENHEID = 'gs_medische_hulpmiddelen.thnr_diameter_eenheid';

    /** the column name for the itemnr_diameter_eenheid field */
    const ITEMNR_DIAMETER_EENHEID = 'gs_medische_hulpmiddelen.itemnr_diameter_eenheid';

    /** the column name for the dicht_of_open_geweven field */
    const DICHT_OF_OPEN_GEWEVEN = 'gs_medische_hulpmiddelen.dicht_of_open_geweven';

    /** the column name for the thnr_doorlaatbaarheid field */
    const THNR_DOORLAATBAARHEID = 'gs_medische_hulpmiddelen.thnr_doorlaatbaarheid';

    /** the column name for the itemnr_doorlaatbaarheid field */
    const ITEMNR_DOORLAATBAARHEID = 'gs_medische_hulpmiddelen.itemnr_doorlaatbaarheid';

    /** the column name for the draagbaar_janee field */
    const DRAAGBAAR_JANEE = 'gs_medische_hulpmiddelen.draagbaar_janee';

    /** the column name for the thnr_draagplaats field */
    const THNR_DRAAGPLAATS = 'gs_medische_hulpmiddelen.thnr_draagplaats';

    /** the column name for the itemnr_draagplaats field */
    const ITEMNR_DRAAGPLAATS = 'gs_medische_hulpmiddelen.itemnr_draagplaats';

    /** the column name for the thnr_extra_kenmerk field */
    const THNR_EXTRA_KENMERK = 'gs_medische_hulpmiddelen.thnr_extra_kenmerk';

    /** the column name for the item_nr_extra_kenmerk field */
    const ITEM_NR_EXTRA_KENMERK = 'gs_medische_hulpmiddelen.item_nr_extra_kenmerk';

    /** the column name for the filter_janee field */
    const FILTER_JANEE = 'gs_medische_hulpmiddelen.filter_janee';

    /** the column name for the flensmaat_hoeveelheid field */
    const FLENSMAAT_HOEVEELHEID = 'gs_medische_hulpmiddelen.flensmaat_hoeveelheid';

    /** the column name for the thnr_flensmaat_eenheid field */
    const THNR_FLENSMAAT_EENHEID = 'gs_medische_hulpmiddelen.thnr_flensmaat_eenheid';

    /** the column name for the itemnr_flensmaat_eenheid field */
    const ITEMNR_FLENSMAAT_EENHEID = 'gs_medische_hulpmiddelen.itemnr_flensmaat_eenheid';

    /** the column name for the geslacht field */
    const GESLACHT = 'gs_medische_hulpmiddelen.geslacht';

    /** the column name for the glijmiddel_janee field */
    const GLIJMIDDEL_JANEE = 'gs_medische_hulpmiddelen.glijmiddel_janee';

    /** the column name for the hergebruik_mogelijk_janee field */
    const HERGEBRUIK_MOGELIJK_JANEE = 'gs_medische_hulpmiddelen.hergebruik_mogelijk_janee';

    /** the column name for the thnr_hulpmiddelpresentatie field */
    const THNR_HULPMIDDELPRESENTATIE = 'gs_medische_hulpmiddelen.thnr_hulpmiddelpresentatie';

    /** the column name for the itemnr_hulpmiddelpresentatie field */
    const ITEMNR_HULPMIDDELPRESENTATIE = 'gs_medische_hulpmiddelen.itemnr_hulpmiddelpresentatie';

    /** the column name for the thnr_kleeflaag field */
    const THNR_KLEEFLAAG = 'gs_medische_hulpmiddelen.thnr_kleeflaag';

    /** the column name for the itemnr_kleeflaag field */
    const ITEMNR_KLEEFLAAG = 'gs_medische_hulpmiddelen.itemnr_kleeflaag';

    /** the column name for the kleur_thesaurusnummer field */
    const KLEUR_THESAURUSNUMMER = 'gs_medische_hulpmiddelen.kleur_thesaurusnummer';

    /** the column name for the itemnr_kleur field */
    const ITEMNR_KLEUR = 'gs_medische_hulpmiddelen.itemnr_kleur';

    /** the column name for the lengte_1_hoeveelheid field */
    const LENGTE_1_HOEVEELHEID = 'gs_medische_hulpmiddelen.lengte_1_hoeveelheid';

    /** the column name for the thnr_lengte_1_eenheid field */
    const THNR_LENGTE_1_EENHEID = 'gs_medische_hulpmiddelen.thnr_lengte_1_eenheid';

    /** the column name for the itemnr_lengte_1_eenheid field */
    const ITEMNR_LENGTE_1_EENHEID = 'gs_medische_hulpmiddelen.itemnr_lengte_1_eenheid';

    /** the column name for the lengte_2_hoeveelheid field */
    const LENGTE_2_HOEVEELHEID = 'gs_medische_hulpmiddelen.lengte_2_hoeveelheid';

    /** the column name for the thnr_lengte_2_eenheid field */
    const THNR_LENGTE_2_EENHEID = 'gs_medische_hulpmiddelen.thnr_lengte_2_eenheid';

    /** the column name for the itemnr_lengte_2_eenheid field */
    const ITEMNR_LENGTE_2_EENHEID = 'gs_medische_hulpmiddelen.itemnr_lengte_2_eenheid';

    /** the column name for the maasgrootte field */
    const MAASGROOTTE = 'gs_medische_hulpmiddelen.maasgrootte';

    /** the column name for the thnr_maataanduiding field */
    const THNR_MAATAANDUIDING = 'gs_medische_hulpmiddelen.thnr_maataanduiding';

    /** the column name for the itemnr_maataanduiding field */
    const ITEMNR_MAATAANDUIDING = 'gs_medische_hulpmiddelen.itemnr_maataanduiding';

    /** the column name for the thnr_materiaal field */
    const THNR_MATERIAAL = 'gs_medische_hulpmiddelen.thnr_materiaal';

    /** the column name for the itemnr_materiaal field */
    const ITEMNR_MATERIAAL = 'gs_medische_hulpmiddelen.itemnr_materiaal';

    /** the column name for the niet_aan_de_wond_hechtend field */
    const NIET_AAN_DE_WOND_HECHTEND = 'gs_medische_hulpmiddelen.niet_aan_de_wond_hechtend';

    /** the column name for the thnr_plaats_sluiting field */
    const THNR_PLAATS_SLUITING = 'gs_medische_hulpmiddelen.thnr_plaats_sluiting';

    /** the column name for the itemnr_plaats_sluiting field */
    const ITEMNR_PLAATS_SLUITING = 'gs_medische_hulpmiddelen.itemnr_plaats_sluiting';

    /** the column name for the rekpercentage field */
    const REKPERCENTAGE = 'gs_medische_hulpmiddelen.rekpercentage';

    /** the column name for the rekrichting field */
    const REKRICHTING = 'gs_medische_hulpmiddelen.rekrichting';

    /** the column name for the thnr_rekaanduiding field */
    const THNR_REKAANDUIDING = 'gs_medische_hulpmiddelen.thnr_rekaanduiding';

    /** the column name for the itemnr_rekaanduiding field */
    const ITEMNR_REKAANDUIDING = 'gs_medische_hulpmiddelen.itemnr_rekaanduiding';

    /** the column name for the rontgencontrastdraad_aanwezig_jn field */
    const RONTGENCONTRASTDRAAD_AANWEZIG_JN = 'gs_medische_hulpmiddelen.rontgencontrastdraad_aanwezig_jn';

    /** the column name for the thnr_hulpmiddelsysteem field */
    const THNR_HULPMIDDELSYSTEEM = 'gs_medische_hulpmiddelen.thnr_hulpmiddelsysteem';

    /** the column name for the itemnr_hulpmiddelsysteem field */
    const ITEMNR_HULPMIDDELSYSTEEM = 'gs_medische_hulpmiddelen.itemnr_hulpmiddelsysteem';

    /** the column name for the terugslagvoorziening_janee field */
    const TERUGSLAGVOORZIENING_JANEE = 'gs_medische_hulpmiddelen.terugslagvoorziening_janee';

    /** the column name for the toepassing_afnameverblijf field */
    const TOEPASSING_AFNAMEVERBLIJF = 'gs_medische_hulpmiddelen.toepassing_afnameverblijf';

    /** the column name for the type_punt_nelatontiemann field */
    const TYPE_PUNT_NELATONTIEMANN = 'gs_medische_hulpmiddelen.type_punt_nelatontiemann';

    /** the column name for the volume_hoeveelheid field */
    const VOLUME_HOEVEELHEID = 'gs_medische_hulpmiddelen.volume_hoeveelheid';

    /** the column name for the thnr_volume_eenheid field */
    const THNR_VOLUME_EENHEID = 'gs_medische_hulpmiddelen.thnr_volume_eenheid';

    /** the column name for the itemnr_volume_eenheid field */
    const ITEMNR_VOLUME_EENHEID = 'gs_medische_hulpmiddelen.itemnr_volume_eenheid';

    /** the column name for the thnr_vorm field */
    const THNR_VORM = 'gs_medische_hulpmiddelen.thnr_vorm';

    /** the column name for the itemnr_vorm field */
    const ITEMNR_VORM = 'gs_medische_hulpmiddelen.itemnr_vorm';

    /** the column name for the thnr_vorm_van_de_opening field */
    const THNR_VORM_VAN_DE_OPENING = 'gs_medische_hulpmiddelen.thnr_vorm_van_de_opening';

    /** the column name for the itemnr_vorm_van_de_opening field */
    const ITEMNR_VORM_VAN_DE_OPENING = 'gs_medische_hulpmiddelen.itemnr_vorm_van_de_opening';

    /** the column name for the thnr_vorm_van_de_plaat field */
    const THNR_VORM_VAN_DE_PLAAT = 'gs_medische_hulpmiddelen.thnr_vorm_van_de_plaat';

    /** the column name for the itemnr_vorm_van_de_plaat field */
    const ITEMNR_VORM_VAN_DE_PLAAT = 'gs_medische_hulpmiddelen.itemnr_vorm_van_de_plaat';

    /** the column name for the waterbestendig_janee field */
    const WATERBESTENDIG_JANEE = 'gs_medische_hulpmiddelen.waterbestendig_janee';

    /** the column name for the wegspoelbaar_janee field */
    const WEGSPOELBAAR_JANEE = 'gs_medische_hulpmiddelen.wegspoelbaar_janee';

    /** the column name for the split_janee field */
    const SPLIT_JANEE = 'gs_medische_hulpmiddelen.split_janee';

    /** the column name for the cuff_janee field */
    const CUFF_JANEE = 'gs_medische_hulpmiddelen.cuff_janee';

    /** the column name for the enkel_of_dubbelzijdig field */
    const ENKEL_OF_DUBBELZIJDIG = 'gs_medische_hulpmiddelen.enkel_of_dubbelzijdig';

    /** the column name for the thnr_absorptievermogen field */
    const THNR_ABSORPTIEVERMOGEN = 'gs_medische_hulpmiddelen.thnr_absorptievermogen';

    /** the column name for the itemnr_absorptievermogen field */
    const ITEMNR_ABSORPTIEVERMOGEN = 'gs_medische_hulpmiddelen.itemnr_absorptievermogen';

    /** the column name for the soort_incontinentie_urinefaeces field */
    const SOORT_INCONTINENTIE_URINEFAECES = 'gs_medische_hulpmiddelen.soort_incontinentie_urinefaeces';

    /** the column name for the thnr_toebehoren field */
    const THNR_TOEBEHOREN = 'gs_medische_hulpmiddelen.thnr_toebehoren';

    /** the column name for the itemnr_toebehoren field */
    const ITEMNR_TOEBEHOREN = 'gs_medische_hulpmiddelen.itemnr_toebehoren';

    /** the column name for the thnr_fysische_toestand field */
    const THNR_FYSISCHE_TOESTAND = 'gs_medische_hulpmiddelen.thnr_fysische_toestand';

    /** the column name for the itemnr_fysische_toestand field */
    const ITEMNR_FYSISCHE_TOESTAND = 'gs_medische_hulpmiddelen.itemnr_fysische_toestand';

    /** the column name for the impregneermiddel_samenstelling field */
    const IMPREGNEERMIDDEL_SAMENSTELLING = 'gs_medische_hulpmiddelen.impregneermiddel_samenstelling';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GsMedischeHulpmiddelen objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GsMedischeHulpmiddelen[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GsMedischeHulpmiddelenPeer::$fieldNames[GsMedischeHulpmiddelenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer', 'Mutatiekode', 'MedischHulpmiddelkode', 'SubstitutieKode', 'ThnrSoortHulpmiddel', 'SoortHulpmiddelkode', 'GesteriliseerdJanee', 'ThnrSterilisatiemethode', 'ItemnrSterilisatiemethode', 'ThnrSluiting', 'ItemnrSluiting', 'AantalDelen', 'AantalKanalen', 'ThnrBevestiging', 'ItemnrBevestiging', 'BreedteHoeveelheid', 'ThnrBreedteEenheid', 'ItemnrBreedteEenheid', 'Drukklasse', 'DiameterHoeveelheid', 'ThnrDiameterEenheid', 'ItemnrDiameterEenheid', 'DichtOfOpenGeweven', 'ThnrDoorlaatbaarheid', 'ItemnrDoorlaatbaarheid', 'DraagbaarJanee', 'ThnrDraagplaats', 'ItemnrDraagplaats', 'ThnrExtraKenmerk', 'ItemNrExtraKenmerk', 'FilterJanee', 'FlensmaatHoeveelheid', 'ThnrFlensmaatEenheid', 'ItemnrFlensmaatEenheid', 'Geslacht', 'GlijmiddelJanee', 'HergebruikMogelijkJanee', 'ThnrHulpmiddelpresentatie', 'ItemnrHulpmiddelpresentatie', 'ThnrKleeflaag', 'ItemnrKleeflaag', 'KleurThesaurusnummer', 'ItemnrKleur', 'Lengte1Hoeveelheid', 'ThnrLengte1Eenheid', 'ItemnrLengte1Eenheid', 'Lengte2Hoeveelheid', 'ThnrLengte2Eenheid', 'ItemnrLengte2Eenheid', 'Maasgrootte', 'ThnrMaataanduiding', 'ItemnrMaataanduiding', 'ThnrMateriaal', 'ItemnrMateriaal', 'NietAanDeWondHechtend', 'ThnrPlaatsSluiting', 'ItemnrPlaatsSluiting', 'Rekpercentage', 'Rekrichting', 'ThnrRekaanduiding', 'ItemnrRekaanduiding', 'RontgencontrastdraadAanwezigJn', 'ThnrHulpmiddelsysteem', 'ItemnrHulpmiddelsysteem', 'TerugslagvoorzieningJanee', 'ToepassingAfnameverblijf', 'TypePuntNelatontiemann', 'VolumeHoeveelheid', 'ThnrVolumeEenheid', 'ItemnrVolumeEenheid', 'ThnrVorm', 'ItemnrVorm', 'ThnrVormVanDeOpening', 'ItemnrVormVanDeOpening', 'ThnrVormVanDePlaat', 'ItemnrVormVanDePlaat', 'WaterbestendigJanee', 'WegspoelbaarJanee', 'SplitJanee', 'CuffJanee', 'EnkelOfDubbelzijdig', 'ThnrAbsorptievermogen', 'ItemnrAbsorptievermogen', 'SoortIncontinentieUrinefaeces', 'ThnrToebehoren', 'ItemnrToebehoren', 'ThnrFysischeToestand', 'ItemnrFysischeToestand', 'ImpregneermiddelSamenstelling', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer', 'mutatiekode', 'medischHulpmiddelkode', 'substitutieKode', 'thnrSoortHulpmiddel', 'soortHulpmiddelkode', 'gesteriliseerdJanee', 'thnrSterilisatiemethode', 'itemnrSterilisatiemethode', 'thnrSluiting', 'itemnrSluiting', 'aantalDelen', 'aantalKanalen', 'thnrBevestiging', 'itemnrBevestiging', 'breedteHoeveelheid', 'thnrBreedteEenheid', 'itemnrBreedteEenheid', 'drukklasse', 'diameterHoeveelheid', 'thnrDiameterEenheid', 'itemnrDiameterEenheid', 'dichtOfOpenGeweven', 'thnrDoorlaatbaarheid', 'itemnrDoorlaatbaarheid', 'draagbaarJanee', 'thnrDraagplaats', 'itemnrDraagplaats', 'thnrExtraKenmerk', 'itemNrExtraKenmerk', 'filterJanee', 'flensmaatHoeveelheid', 'thnrFlensmaatEenheid', 'itemnrFlensmaatEenheid', 'geslacht', 'glijmiddelJanee', 'hergebruikMogelijkJanee', 'thnrHulpmiddelpresentatie', 'itemnrHulpmiddelpresentatie', 'thnrKleeflaag', 'itemnrKleeflaag', 'kleurThesaurusnummer', 'itemnrKleur', 'lengte1Hoeveelheid', 'thnrLengte1Eenheid', 'itemnrLengte1Eenheid', 'lengte2Hoeveelheid', 'thnrLengte2Eenheid', 'itemnrLengte2Eenheid', 'maasgrootte', 'thnrMaataanduiding', 'itemnrMaataanduiding', 'thnrMateriaal', 'itemnrMateriaal', 'nietAanDeWondHechtend', 'thnrPlaatsSluiting', 'itemnrPlaatsSluiting', 'rekpercentage', 'rekrichting', 'thnrRekaanduiding', 'itemnrRekaanduiding', 'rontgencontrastdraadAanwezigJn', 'thnrHulpmiddelsysteem', 'itemnrHulpmiddelsysteem', 'terugslagvoorzieningJanee', 'toepassingAfnameverblijf', 'typePuntNelatontiemann', 'volumeHoeveelheid', 'thnrVolumeEenheid', 'itemnrVolumeEenheid', 'thnrVorm', 'itemnrVorm', 'thnrVormVanDeOpening', 'itemnrVormVanDeOpening', 'thnrVormVanDePlaat', 'itemnrVormVanDePlaat', 'waterbestendigJanee', 'wegspoelbaarJanee', 'splitJanee', 'cuffJanee', 'enkelOfDubbelzijdig', 'thnrAbsorptievermogen', 'itemnrAbsorptievermogen', 'soortIncontinentieUrinefaeces', 'thnrToebehoren', 'itemnrToebehoren', 'thnrFysischeToestand', 'itemnrFysischeToestand', 'impregneermiddelSamenstelling', ),
        BasePeer::TYPE_COLNAME => array (GsMedischeHulpmiddelenPeer::BESTANDNUMMER, GsMedischeHulpmiddelenPeer::MUTATIEKODE, GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE, GsMedischeHulpmiddelenPeer::SUBSTITUTIE_KODE, GsMedischeHulpmiddelenPeer::THNR_SOORT_HULPMIDDEL, GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE, GsMedischeHulpmiddelenPeer::GESTERILISEERD_JANEE, GsMedischeHulpmiddelenPeer::THNR_STERILISATIEMETHODE, GsMedischeHulpmiddelenPeer::ITEMNR_STERILISATIEMETHODE, GsMedischeHulpmiddelenPeer::THNR_SLUITING, GsMedischeHulpmiddelenPeer::ITEMNR_SLUITING, GsMedischeHulpmiddelenPeer::AANTAL_DELEN, GsMedischeHulpmiddelenPeer::AANTAL_KANALEN, GsMedischeHulpmiddelenPeer::THNR_BEVESTIGING, GsMedischeHulpmiddelenPeer::ITEMNR_BEVESTIGING, GsMedischeHulpmiddelenPeer::BREEDTE_HOEVEELHEID, GsMedischeHulpmiddelenPeer::THNR_BREEDTE_EENHEID, GsMedischeHulpmiddelenPeer::ITEMNR_BREEDTE_EENHEID, GsMedischeHulpmiddelenPeer::DRUKKLASSE, GsMedischeHulpmiddelenPeer::DIAMETER_HOEVEELHEID, GsMedischeHulpmiddelenPeer::THNR_DIAMETER_EENHEID, GsMedischeHulpmiddelenPeer::ITEMNR_DIAMETER_EENHEID, GsMedischeHulpmiddelenPeer::DICHT_OF_OPEN_GEWEVEN, GsMedischeHulpmiddelenPeer::THNR_DOORLAATBAARHEID, GsMedischeHulpmiddelenPeer::ITEMNR_DOORLAATBAARHEID, GsMedischeHulpmiddelenPeer::DRAAGBAAR_JANEE, GsMedischeHulpmiddelenPeer::THNR_DRAAGPLAATS, GsMedischeHulpmiddelenPeer::ITEMNR_DRAAGPLAATS, GsMedischeHulpmiddelenPeer::THNR_EXTRA_KENMERK, GsMedischeHulpmiddelenPeer::ITEM_NR_EXTRA_KENMERK, GsMedischeHulpmiddelenPeer::FILTER_JANEE, GsMedischeHulpmiddelenPeer::FLENSMAAT_HOEVEELHEID, GsMedischeHulpmiddelenPeer::THNR_FLENSMAAT_EENHEID, GsMedischeHulpmiddelenPeer::ITEMNR_FLENSMAAT_EENHEID, GsMedischeHulpmiddelenPeer::GESLACHT, GsMedischeHulpmiddelenPeer::GLIJMIDDEL_JANEE, GsMedischeHulpmiddelenPeer::HERGEBRUIK_MOGELIJK_JANEE, GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELPRESENTATIE, GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELPRESENTATIE, GsMedischeHulpmiddelenPeer::THNR_KLEEFLAAG, GsMedischeHulpmiddelenPeer::ITEMNR_KLEEFLAAG, GsMedischeHulpmiddelenPeer::KLEUR_THESAURUSNUMMER, GsMedischeHulpmiddelenPeer::ITEMNR_KLEUR, GsMedischeHulpmiddelenPeer::LENGTE_1_HOEVEELHEID, GsMedischeHulpmiddelenPeer::THNR_LENGTE_1_EENHEID, GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_1_EENHEID, GsMedischeHulpmiddelenPeer::LENGTE_2_HOEVEELHEID, GsMedischeHulpmiddelenPeer::THNR_LENGTE_2_EENHEID, GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_2_EENHEID, GsMedischeHulpmiddelenPeer::MAASGROOTTE, GsMedischeHulpmiddelenPeer::THNR_MAATAANDUIDING, GsMedischeHulpmiddelenPeer::ITEMNR_MAATAANDUIDING, GsMedischeHulpmiddelenPeer::THNR_MATERIAAL, GsMedischeHulpmiddelenPeer::ITEMNR_MATERIAAL, GsMedischeHulpmiddelenPeer::NIET_AAN_DE_WOND_HECHTEND, GsMedischeHulpmiddelenPeer::THNR_PLAATS_SLUITING, GsMedischeHulpmiddelenPeer::ITEMNR_PLAATS_SLUITING, GsMedischeHulpmiddelenPeer::REKPERCENTAGE, GsMedischeHulpmiddelenPeer::REKRICHTING, GsMedischeHulpmiddelenPeer::THNR_REKAANDUIDING, GsMedischeHulpmiddelenPeer::ITEMNR_REKAANDUIDING, GsMedischeHulpmiddelenPeer::RONTGENCONTRASTDRAAD_AANWEZIG_JN, GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELSYSTEEM, GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELSYSTEEM, GsMedischeHulpmiddelenPeer::TERUGSLAGVOORZIENING_JANEE, GsMedischeHulpmiddelenPeer::TOEPASSING_AFNAMEVERBLIJF, GsMedischeHulpmiddelenPeer::TYPE_PUNT_NELATONTIEMANN, GsMedischeHulpmiddelenPeer::VOLUME_HOEVEELHEID, GsMedischeHulpmiddelenPeer::THNR_VOLUME_EENHEID, GsMedischeHulpmiddelenPeer::ITEMNR_VOLUME_EENHEID, GsMedischeHulpmiddelenPeer::THNR_VORM, GsMedischeHulpmiddelenPeer::ITEMNR_VORM, GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_OPENING, GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_OPENING, GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_PLAAT, GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_PLAAT, GsMedischeHulpmiddelenPeer::WATERBESTENDIG_JANEE, GsMedischeHulpmiddelenPeer::WEGSPOELBAAR_JANEE, GsMedischeHulpmiddelenPeer::SPLIT_JANEE, GsMedischeHulpmiddelenPeer::CUFF_JANEE, GsMedischeHulpmiddelenPeer::ENKEL_OF_DUBBELZIJDIG, GsMedischeHulpmiddelenPeer::THNR_ABSORPTIEVERMOGEN, GsMedischeHulpmiddelenPeer::ITEMNR_ABSORPTIEVERMOGEN, GsMedischeHulpmiddelenPeer::SOORT_INCONTINENTIE_URINEFAECES, GsMedischeHulpmiddelenPeer::THNR_TOEBEHOREN, GsMedischeHulpmiddelenPeer::ITEMNR_TOEBEHOREN, GsMedischeHulpmiddelenPeer::THNR_FYSISCHE_TOESTAND, GsMedischeHulpmiddelenPeer::ITEMNR_FYSISCHE_TOESTAND, GsMedischeHulpmiddelenPeer::IMPREGNEERMIDDEL_SAMENSTELLING, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER', 'MUTATIEKODE', 'MEDISCH_HULPMIDDELKODE', 'SUBSTITUTIE_KODE', 'THNR_SOORT_HULPMIDDEL', 'SOORT_HULPMIDDELKODE', 'GESTERILISEERD_JANEE', 'THNR_STERILISATIEMETHODE', 'ITEMNR_STERILISATIEMETHODE', 'THNR_SLUITING', 'ITEMNR_SLUITING', 'AANTAL_DELEN', 'AANTAL_KANALEN', 'THNR_BEVESTIGING', 'ITEMNR_BEVESTIGING', 'BREEDTE_HOEVEELHEID', 'THNR_BREEDTE_EENHEID', 'ITEMNR_BREEDTE_EENHEID', 'DRUKKLASSE', 'DIAMETER_HOEVEELHEID', 'THNR_DIAMETER_EENHEID', 'ITEMNR_DIAMETER_EENHEID', 'DICHT_OF_OPEN_GEWEVEN', 'THNR_DOORLAATBAARHEID', 'ITEMNR_DOORLAATBAARHEID', 'DRAAGBAAR_JANEE', 'THNR_DRAAGPLAATS', 'ITEMNR_DRAAGPLAATS', 'THNR_EXTRA_KENMERK', 'ITEM_NR_EXTRA_KENMERK', 'FILTER_JANEE', 'FLENSMAAT_HOEVEELHEID', 'THNR_FLENSMAAT_EENHEID', 'ITEMNR_FLENSMAAT_EENHEID', 'GESLACHT', 'GLIJMIDDEL_JANEE', 'HERGEBRUIK_MOGELIJK_JANEE', 'THNR_HULPMIDDELPRESENTATIE', 'ITEMNR_HULPMIDDELPRESENTATIE', 'THNR_KLEEFLAAG', 'ITEMNR_KLEEFLAAG', 'KLEUR_THESAURUSNUMMER', 'ITEMNR_KLEUR', 'LENGTE_1_HOEVEELHEID', 'THNR_LENGTE_1_EENHEID', 'ITEMNR_LENGTE_1_EENHEID', 'LENGTE_2_HOEVEELHEID', 'THNR_LENGTE_2_EENHEID', 'ITEMNR_LENGTE_2_EENHEID', 'MAASGROOTTE', 'THNR_MAATAANDUIDING', 'ITEMNR_MAATAANDUIDING', 'THNR_MATERIAAL', 'ITEMNR_MATERIAAL', 'NIET_AAN_DE_WOND_HECHTEND', 'THNR_PLAATS_SLUITING', 'ITEMNR_PLAATS_SLUITING', 'REKPERCENTAGE', 'REKRICHTING', 'THNR_REKAANDUIDING', 'ITEMNR_REKAANDUIDING', 'RONTGENCONTRASTDRAAD_AANWEZIG_JN', 'THNR_HULPMIDDELSYSTEEM', 'ITEMNR_HULPMIDDELSYSTEEM', 'TERUGSLAGVOORZIENING_JANEE', 'TOEPASSING_AFNAMEVERBLIJF', 'TYPE_PUNT_NELATONTIEMANN', 'VOLUME_HOEVEELHEID', 'THNR_VOLUME_EENHEID', 'ITEMNR_VOLUME_EENHEID', 'THNR_VORM', 'ITEMNR_VORM', 'THNR_VORM_VAN_DE_OPENING', 'ITEMNR_VORM_VAN_DE_OPENING', 'THNR_VORM_VAN_DE_PLAAT', 'ITEMNR_VORM_VAN_DE_PLAAT', 'WATERBESTENDIG_JANEE', 'WEGSPOELBAAR_JANEE', 'SPLIT_JANEE', 'CUFF_JANEE', 'ENKEL_OF_DUBBELZIJDIG', 'THNR_ABSORPTIEVERMOGEN', 'ITEMNR_ABSORPTIEVERMOGEN', 'SOORT_INCONTINENTIE_URINEFAECES', 'THNR_TOEBEHOREN', 'ITEMNR_TOEBEHOREN', 'THNR_FYSISCHE_TOESTAND', 'ITEMNR_FYSISCHE_TOESTAND', 'IMPREGNEERMIDDEL_SAMENSTELLING', ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer', 'mutatiekode', 'medisch_hulpmiddelkode', 'substitutie_kode', 'thnr_soort_hulpmiddel', 'soort_hulpmiddelkode', 'gesteriliseerd_janee', 'thnr_sterilisatiemethode', 'itemnr_sterilisatiemethode', 'thnr_sluiting', 'itemnr_sluiting', 'aantal_delen', 'aantal_kanalen', 'thnr_bevestiging', 'itemnr_bevestiging', 'breedte_hoeveelheid', 'thnr_breedte_eenheid', 'itemnr_breedte_eenheid', 'drukklasse', 'diameter_hoeveelheid', 'thnr_diameter_eenheid', 'itemnr_diameter_eenheid', 'dicht_of_open_geweven', 'thnr_doorlaatbaarheid', 'itemnr_doorlaatbaarheid', 'draagbaar_janee', 'thnr_draagplaats', 'itemnr_draagplaats', 'thnr_extra_kenmerk', 'item_nr_extra_kenmerk', 'filter_janee', 'flensmaat_hoeveelheid', 'thnr_flensmaat_eenheid', 'itemnr_flensmaat_eenheid', 'geslacht', 'glijmiddel_janee', 'hergebruik_mogelijk_janee', 'thnr_hulpmiddelpresentatie', 'itemnr_hulpmiddelpresentatie', 'thnr_kleeflaag', 'itemnr_kleeflaag', 'kleur_thesaurusnummer', 'itemnr_kleur', 'lengte_1_hoeveelheid', 'thnr_lengte_1_eenheid', 'itemnr_lengte_1_eenheid', 'lengte_2_hoeveelheid', 'thnr_lengte_2_eenheid', 'itemnr_lengte_2_eenheid', 'maasgrootte', 'thnr_maataanduiding', 'itemnr_maataanduiding', 'thnr_materiaal', 'itemnr_materiaal', 'niet_aan_de_wond_hechtend', 'thnr_plaats_sluiting', 'itemnr_plaats_sluiting', 'rekpercentage', 'rekrichting', 'thnr_rekaanduiding', 'itemnr_rekaanduiding', 'rontgencontrastdraad_aanwezig_jn', 'thnr_hulpmiddelsysteem', 'itemnr_hulpmiddelsysteem', 'terugslagvoorziening_janee', 'toepassing_afnameverblijf', 'type_punt_nelatontiemann', 'volume_hoeveelheid', 'thnr_volume_eenheid', 'itemnr_volume_eenheid', 'thnr_vorm', 'itemnr_vorm', 'thnr_vorm_van_de_opening', 'itemnr_vorm_van_de_opening', 'thnr_vorm_van_de_plaat', 'itemnr_vorm_van_de_plaat', 'waterbestendig_janee', 'wegspoelbaar_janee', 'split_janee', 'cuff_janee', 'enkel_of_dubbelzijdig', 'thnr_absorptievermogen', 'itemnr_absorptievermogen', 'soort_incontinentie_urinefaeces', 'thnr_toebehoren', 'itemnr_toebehoren', 'thnr_fysische_toestand', 'itemnr_fysische_toestand', 'impregneermiddel_samenstelling', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GsMedischeHulpmiddelenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Bestandnummer' => 0, 'Mutatiekode' => 1, 'MedischHulpmiddelkode' => 2, 'SubstitutieKode' => 3, 'ThnrSoortHulpmiddel' => 4, 'SoortHulpmiddelkode' => 5, 'GesteriliseerdJanee' => 6, 'ThnrSterilisatiemethode' => 7, 'ItemnrSterilisatiemethode' => 8, 'ThnrSluiting' => 9, 'ItemnrSluiting' => 10, 'AantalDelen' => 11, 'AantalKanalen' => 12, 'ThnrBevestiging' => 13, 'ItemnrBevestiging' => 14, 'BreedteHoeveelheid' => 15, 'ThnrBreedteEenheid' => 16, 'ItemnrBreedteEenheid' => 17, 'Drukklasse' => 18, 'DiameterHoeveelheid' => 19, 'ThnrDiameterEenheid' => 20, 'ItemnrDiameterEenheid' => 21, 'DichtOfOpenGeweven' => 22, 'ThnrDoorlaatbaarheid' => 23, 'ItemnrDoorlaatbaarheid' => 24, 'DraagbaarJanee' => 25, 'ThnrDraagplaats' => 26, 'ItemnrDraagplaats' => 27, 'ThnrExtraKenmerk' => 28, 'ItemNrExtraKenmerk' => 29, 'FilterJanee' => 30, 'FlensmaatHoeveelheid' => 31, 'ThnrFlensmaatEenheid' => 32, 'ItemnrFlensmaatEenheid' => 33, 'Geslacht' => 34, 'GlijmiddelJanee' => 35, 'HergebruikMogelijkJanee' => 36, 'ThnrHulpmiddelpresentatie' => 37, 'ItemnrHulpmiddelpresentatie' => 38, 'ThnrKleeflaag' => 39, 'ItemnrKleeflaag' => 40, 'KleurThesaurusnummer' => 41, 'ItemnrKleur' => 42, 'Lengte1Hoeveelheid' => 43, 'ThnrLengte1Eenheid' => 44, 'ItemnrLengte1Eenheid' => 45, 'Lengte2Hoeveelheid' => 46, 'ThnrLengte2Eenheid' => 47, 'ItemnrLengte2Eenheid' => 48, 'Maasgrootte' => 49, 'ThnrMaataanduiding' => 50, 'ItemnrMaataanduiding' => 51, 'ThnrMateriaal' => 52, 'ItemnrMateriaal' => 53, 'NietAanDeWondHechtend' => 54, 'ThnrPlaatsSluiting' => 55, 'ItemnrPlaatsSluiting' => 56, 'Rekpercentage' => 57, 'Rekrichting' => 58, 'ThnrRekaanduiding' => 59, 'ItemnrRekaanduiding' => 60, 'RontgencontrastdraadAanwezigJn' => 61, 'ThnrHulpmiddelsysteem' => 62, 'ItemnrHulpmiddelsysteem' => 63, 'TerugslagvoorzieningJanee' => 64, 'ToepassingAfnameverblijf' => 65, 'TypePuntNelatontiemann' => 66, 'VolumeHoeveelheid' => 67, 'ThnrVolumeEenheid' => 68, 'ItemnrVolumeEenheid' => 69, 'ThnrVorm' => 70, 'ItemnrVorm' => 71, 'ThnrVormVanDeOpening' => 72, 'ItemnrVormVanDeOpening' => 73, 'ThnrVormVanDePlaat' => 74, 'ItemnrVormVanDePlaat' => 75, 'WaterbestendigJanee' => 76, 'WegspoelbaarJanee' => 77, 'SplitJanee' => 78, 'CuffJanee' => 79, 'EnkelOfDubbelzijdig' => 80, 'ThnrAbsorptievermogen' => 81, 'ItemnrAbsorptievermogen' => 82, 'SoortIncontinentieUrinefaeces' => 83, 'ThnrToebehoren' => 84, 'ItemnrToebehoren' => 85, 'ThnrFysischeToestand' => 86, 'ItemnrFysischeToestand' => 87, 'ImpregneermiddelSamenstelling' => 88, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'medischHulpmiddelkode' => 2, 'substitutieKode' => 3, 'thnrSoortHulpmiddel' => 4, 'soortHulpmiddelkode' => 5, 'gesteriliseerdJanee' => 6, 'thnrSterilisatiemethode' => 7, 'itemnrSterilisatiemethode' => 8, 'thnrSluiting' => 9, 'itemnrSluiting' => 10, 'aantalDelen' => 11, 'aantalKanalen' => 12, 'thnrBevestiging' => 13, 'itemnrBevestiging' => 14, 'breedteHoeveelheid' => 15, 'thnrBreedteEenheid' => 16, 'itemnrBreedteEenheid' => 17, 'drukklasse' => 18, 'diameterHoeveelheid' => 19, 'thnrDiameterEenheid' => 20, 'itemnrDiameterEenheid' => 21, 'dichtOfOpenGeweven' => 22, 'thnrDoorlaatbaarheid' => 23, 'itemnrDoorlaatbaarheid' => 24, 'draagbaarJanee' => 25, 'thnrDraagplaats' => 26, 'itemnrDraagplaats' => 27, 'thnrExtraKenmerk' => 28, 'itemNrExtraKenmerk' => 29, 'filterJanee' => 30, 'flensmaatHoeveelheid' => 31, 'thnrFlensmaatEenheid' => 32, 'itemnrFlensmaatEenheid' => 33, 'geslacht' => 34, 'glijmiddelJanee' => 35, 'hergebruikMogelijkJanee' => 36, 'thnrHulpmiddelpresentatie' => 37, 'itemnrHulpmiddelpresentatie' => 38, 'thnrKleeflaag' => 39, 'itemnrKleeflaag' => 40, 'kleurThesaurusnummer' => 41, 'itemnrKleur' => 42, 'lengte1Hoeveelheid' => 43, 'thnrLengte1Eenheid' => 44, 'itemnrLengte1Eenheid' => 45, 'lengte2Hoeveelheid' => 46, 'thnrLengte2Eenheid' => 47, 'itemnrLengte2Eenheid' => 48, 'maasgrootte' => 49, 'thnrMaataanduiding' => 50, 'itemnrMaataanduiding' => 51, 'thnrMateriaal' => 52, 'itemnrMateriaal' => 53, 'nietAanDeWondHechtend' => 54, 'thnrPlaatsSluiting' => 55, 'itemnrPlaatsSluiting' => 56, 'rekpercentage' => 57, 'rekrichting' => 58, 'thnrRekaanduiding' => 59, 'itemnrRekaanduiding' => 60, 'rontgencontrastdraadAanwezigJn' => 61, 'thnrHulpmiddelsysteem' => 62, 'itemnrHulpmiddelsysteem' => 63, 'terugslagvoorzieningJanee' => 64, 'toepassingAfnameverblijf' => 65, 'typePuntNelatontiemann' => 66, 'volumeHoeveelheid' => 67, 'thnrVolumeEenheid' => 68, 'itemnrVolumeEenheid' => 69, 'thnrVorm' => 70, 'itemnrVorm' => 71, 'thnrVormVanDeOpening' => 72, 'itemnrVormVanDeOpening' => 73, 'thnrVormVanDePlaat' => 74, 'itemnrVormVanDePlaat' => 75, 'waterbestendigJanee' => 76, 'wegspoelbaarJanee' => 77, 'splitJanee' => 78, 'cuffJanee' => 79, 'enkelOfDubbelzijdig' => 80, 'thnrAbsorptievermogen' => 81, 'itemnrAbsorptievermogen' => 82, 'soortIncontinentieUrinefaeces' => 83, 'thnrToebehoren' => 84, 'itemnrToebehoren' => 85, 'thnrFysischeToestand' => 86, 'itemnrFysischeToestand' => 87, 'impregneermiddelSamenstelling' => 88, ),
        BasePeer::TYPE_COLNAME => array (GsMedischeHulpmiddelenPeer::BESTANDNUMMER => 0, GsMedischeHulpmiddelenPeer::MUTATIEKODE => 1, GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE => 2, GsMedischeHulpmiddelenPeer::SUBSTITUTIE_KODE => 3, GsMedischeHulpmiddelenPeer::THNR_SOORT_HULPMIDDEL => 4, GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE => 5, GsMedischeHulpmiddelenPeer::GESTERILISEERD_JANEE => 6, GsMedischeHulpmiddelenPeer::THNR_STERILISATIEMETHODE => 7, GsMedischeHulpmiddelenPeer::ITEMNR_STERILISATIEMETHODE => 8, GsMedischeHulpmiddelenPeer::THNR_SLUITING => 9, GsMedischeHulpmiddelenPeer::ITEMNR_SLUITING => 10, GsMedischeHulpmiddelenPeer::AANTAL_DELEN => 11, GsMedischeHulpmiddelenPeer::AANTAL_KANALEN => 12, GsMedischeHulpmiddelenPeer::THNR_BEVESTIGING => 13, GsMedischeHulpmiddelenPeer::ITEMNR_BEVESTIGING => 14, GsMedischeHulpmiddelenPeer::BREEDTE_HOEVEELHEID => 15, GsMedischeHulpmiddelenPeer::THNR_BREEDTE_EENHEID => 16, GsMedischeHulpmiddelenPeer::ITEMNR_BREEDTE_EENHEID => 17, GsMedischeHulpmiddelenPeer::DRUKKLASSE => 18, GsMedischeHulpmiddelenPeer::DIAMETER_HOEVEELHEID => 19, GsMedischeHulpmiddelenPeer::THNR_DIAMETER_EENHEID => 20, GsMedischeHulpmiddelenPeer::ITEMNR_DIAMETER_EENHEID => 21, GsMedischeHulpmiddelenPeer::DICHT_OF_OPEN_GEWEVEN => 22, GsMedischeHulpmiddelenPeer::THNR_DOORLAATBAARHEID => 23, GsMedischeHulpmiddelenPeer::ITEMNR_DOORLAATBAARHEID => 24, GsMedischeHulpmiddelenPeer::DRAAGBAAR_JANEE => 25, GsMedischeHulpmiddelenPeer::THNR_DRAAGPLAATS => 26, GsMedischeHulpmiddelenPeer::ITEMNR_DRAAGPLAATS => 27, GsMedischeHulpmiddelenPeer::THNR_EXTRA_KENMERK => 28, GsMedischeHulpmiddelenPeer::ITEM_NR_EXTRA_KENMERK => 29, GsMedischeHulpmiddelenPeer::FILTER_JANEE => 30, GsMedischeHulpmiddelenPeer::FLENSMAAT_HOEVEELHEID => 31, GsMedischeHulpmiddelenPeer::THNR_FLENSMAAT_EENHEID => 32, GsMedischeHulpmiddelenPeer::ITEMNR_FLENSMAAT_EENHEID => 33, GsMedischeHulpmiddelenPeer::GESLACHT => 34, GsMedischeHulpmiddelenPeer::GLIJMIDDEL_JANEE => 35, GsMedischeHulpmiddelenPeer::HERGEBRUIK_MOGELIJK_JANEE => 36, GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELPRESENTATIE => 37, GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELPRESENTATIE => 38, GsMedischeHulpmiddelenPeer::THNR_KLEEFLAAG => 39, GsMedischeHulpmiddelenPeer::ITEMNR_KLEEFLAAG => 40, GsMedischeHulpmiddelenPeer::KLEUR_THESAURUSNUMMER => 41, GsMedischeHulpmiddelenPeer::ITEMNR_KLEUR => 42, GsMedischeHulpmiddelenPeer::LENGTE_1_HOEVEELHEID => 43, GsMedischeHulpmiddelenPeer::THNR_LENGTE_1_EENHEID => 44, GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_1_EENHEID => 45, GsMedischeHulpmiddelenPeer::LENGTE_2_HOEVEELHEID => 46, GsMedischeHulpmiddelenPeer::THNR_LENGTE_2_EENHEID => 47, GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_2_EENHEID => 48, GsMedischeHulpmiddelenPeer::MAASGROOTTE => 49, GsMedischeHulpmiddelenPeer::THNR_MAATAANDUIDING => 50, GsMedischeHulpmiddelenPeer::ITEMNR_MAATAANDUIDING => 51, GsMedischeHulpmiddelenPeer::THNR_MATERIAAL => 52, GsMedischeHulpmiddelenPeer::ITEMNR_MATERIAAL => 53, GsMedischeHulpmiddelenPeer::NIET_AAN_DE_WOND_HECHTEND => 54, GsMedischeHulpmiddelenPeer::THNR_PLAATS_SLUITING => 55, GsMedischeHulpmiddelenPeer::ITEMNR_PLAATS_SLUITING => 56, GsMedischeHulpmiddelenPeer::REKPERCENTAGE => 57, GsMedischeHulpmiddelenPeer::REKRICHTING => 58, GsMedischeHulpmiddelenPeer::THNR_REKAANDUIDING => 59, GsMedischeHulpmiddelenPeer::ITEMNR_REKAANDUIDING => 60, GsMedischeHulpmiddelenPeer::RONTGENCONTRASTDRAAD_AANWEZIG_JN => 61, GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELSYSTEEM => 62, GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELSYSTEEM => 63, GsMedischeHulpmiddelenPeer::TERUGSLAGVOORZIENING_JANEE => 64, GsMedischeHulpmiddelenPeer::TOEPASSING_AFNAMEVERBLIJF => 65, GsMedischeHulpmiddelenPeer::TYPE_PUNT_NELATONTIEMANN => 66, GsMedischeHulpmiddelenPeer::VOLUME_HOEVEELHEID => 67, GsMedischeHulpmiddelenPeer::THNR_VOLUME_EENHEID => 68, GsMedischeHulpmiddelenPeer::ITEMNR_VOLUME_EENHEID => 69, GsMedischeHulpmiddelenPeer::THNR_VORM => 70, GsMedischeHulpmiddelenPeer::ITEMNR_VORM => 71, GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_OPENING => 72, GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_OPENING => 73, GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_PLAAT => 74, GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_PLAAT => 75, GsMedischeHulpmiddelenPeer::WATERBESTENDIG_JANEE => 76, GsMedischeHulpmiddelenPeer::WEGSPOELBAAR_JANEE => 77, GsMedischeHulpmiddelenPeer::SPLIT_JANEE => 78, GsMedischeHulpmiddelenPeer::CUFF_JANEE => 79, GsMedischeHulpmiddelenPeer::ENKEL_OF_DUBBELZIJDIG => 80, GsMedischeHulpmiddelenPeer::THNR_ABSORPTIEVERMOGEN => 81, GsMedischeHulpmiddelenPeer::ITEMNR_ABSORPTIEVERMOGEN => 82, GsMedischeHulpmiddelenPeer::SOORT_INCONTINENTIE_URINEFAECES => 83, GsMedischeHulpmiddelenPeer::THNR_TOEBEHOREN => 84, GsMedischeHulpmiddelenPeer::ITEMNR_TOEBEHOREN => 85, GsMedischeHulpmiddelenPeer::THNR_FYSISCHE_TOESTAND => 86, GsMedischeHulpmiddelenPeer::ITEMNR_FYSISCHE_TOESTAND => 87, GsMedischeHulpmiddelenPeer::IMPREGNEERMIDDEL_SAMENSTELLING => 88, ),
        BasePeer::TYPE_RAW_COLNAME => array ('BESTANDNUMMER' => 0, 'MUTATIEKODE' => 1, 'MEDISCH_HULPMIDDELKODE' => 2, 'SUBSTITUTIE_KODE' => 3, 'THNR_SOORT_HULPMIDDEL' => 4, 'SOORT_HULPMIDDELKODE' => 5, 'GESTERILISEERD_JANEE' => 6, 'THNR_STERILISATIEMETHODE' => 7, 'ITEMNR_STERILISATIEMETHODE' => 8, 'THNR_SLUITING' => 9, 'ITEMNR_SLUITING' => 10, 'AANTAL_DELEN' => 11, 'AANTAL_KANALEN' => 12, 'THNR_BEVESTIGING' => 13, 'ITEMNR_BEVESTIGING' => 14, 'BREEDTE_HOEVEELHEID' => 15, 'THNR_BREEDTE_EENHEID' => 16, 'ITEMNR_BREEDTE_EENHEID' => 17, 'DRUKKLASSE' => 18, 'DIAMETER_HOEVEELHEID' => 19, 'THNR_DIAMETER_EENHEID' => 20, 'ITEMNR_DIAMETER_EENHEID' => 21, 'DICHT_OF_OPEN_GEWEVEN' => 22, 'THNR_DOORLAATBAARHEID' => 23, 'ITEMNR_DOORLAATBAARHEID' => 24, 'DRAAGBAAR_JANEE' => 25, 'THNR_DRAAGPLAATS' => 26, 'ITEMNR_DRAAGPLAATS' => 27, 'THNR_EXTRA_KENMERK' => 28, 'ITEM_NR_EXTRA_KENMERK' => 29, 'FILTER_JANEE' => 30, 'FLENSMAAT_HOEVEELHEID' => 31, 'THNR_FLENSMAAT_EENHEID' => 32, 'ITEMNR_FLENSMAAT_EENHEID' => 33, 'GESLACHT' => 34, 'GLIJMIDDEL_JANEE' => 35, 'HERGEBRUIK_MOGELIJK_JANEE' => 36, 'THNR_HULPMIDDELPRESENTATIE' => 37, 'ITEMNR_HULPMIDDELPRESENTATIE' => 38, 'THNR_KLEEFLAAG' => 39, 'ITEMNR_KLEEFLAAG' => 40, 'KLEUR_THESAURUSNUMMER' => 41, 'ITEMNR_KLEUR' => 42, 'LENGTE_1_HOEVEELHEID' => 43, 'THNR_LENGTE_1_EENHEID' => 44, 'ITEMNR_LENGTE_1_EENHEID' => 45, 'LENGTE_2_HOEVEELHEID' => 46, 'THNR_LENGTE_2_EENHEID' => 47, 'ITEMNR_LENGTE_2_EENHEID' => 48, 'MAASGROOTTE' => 49, 'THNR_MAATAANDUIDING' => 50, 'ITEMNR_MAATAANDUIDING' => 51, 'THNR_MATERIAAL' => 52, 'ITEMNR_MATERIAAL' => 53, 'NIET_AAN_DE_WOND_HECHTEND' => 54, 'THNR_PLAATS_SLUITING' => 55, 'ITEMNR_PLAATS_SLUITING' => 56, 'REKPERCENTAGE' => 57, 'REKRICHTING' => 58, 'THNR_REKAANDUIDING' => 59, 'ITEMNR_REKAANDUIDING' => 60, 'RONTGENCONTRASTDRAAD_AANWEZIG_JN' => 61, 'THNR_HULPMIDDELSYSTEEM' => 62, 'ITEMNR_HULPMIDDELSYSTEEM' => 63, 'TERUGSLAGVOORZIENING_JANEE' => 64, 'TOEPASSING_AFNAMEVERBLIJF' => 65, 'TYPE_PUNT_NELATONTIEMANN' => 66, 'VOLUME_HOEVEELHEID' => 67, 'THNR_VOLUME_EENHEID' => 68, 'ITEMNR_VOLUME_EENHEID' => 69, 'THNR_VORM' => 70, 'ITEMNR_VORM' => 71, 'THNR_VORM_VAN_DE_OPENING' => 72, 'ITEMNR_VORM_VAN_DE_OPENING' => 73, 'THNR_VORM_VAN_DE_PLAAT' => 74, 'ITEMNR_VORM_VAN_DE_PLAAT' => 75, 'WATERBESTENDIG_JANEE' => 76, 'WEGSPOELBAAR_JANEE' => 77, 'SPLIT_JANEE' => 78, 'CUFF_JANEE' => 79, 'ENKEL_OF_DUBBELZIJDIG' => 80, 'THNR_ABSORPTIEVERMOGEN' => 81, 'ITEMNR_ABSORPTIEVERMOGEN' => 82, 'SOORT_INCONTINENTIE_URINEFAECES' => 83, 'THNR_TOEBEHOREN' => 84, 'ITEMNR_TOEBEHOREN' => 85, 'THNR_FYSISCHE_TOESTAND' => 86, 'ITEMNR_FYSISCHE_TOESTAND' => 87, 'IMPREGNEERMIDDEL_SAMENSTELLING' => 88, ),
        BasePeer::TYPE_FIELDNAME => array ('bestandnummer' => 0, 'mutatiekode' => 1, 'medisch_hulpmiddelkode' => 2, 'substitutie_kode' => 3, 'thnr_soort_hulpmiddel' => 4, 'soort_hulpmiddelkode' => 5, 'gesteriliseerd_janee' => 6, 'thnr_sterilisatiemethode' => 7, 'itemnr_sterilisatiemethode' => 8, 'thnr_sluiting' => 9, 'itemnr_sluiting' => 10, 'aantal_delen' => 11, 'aantal_kanalen' => 12, 'thnr_bevestiging' => 13, 'itemnr_bevestiging' => 14, 'breedte_hoeveelheid' => 15, 'thnr_breedte_eenheid' => 16, 'itemnr_breedte_eenheid' => 17, 'drukklasse' => 18, 'diameter_hoeveelheid' => 19, 'thnr_diameter_eenheid' => 20, 'itemnr_diameter_eenheid' => 21, 'dicht_of_open_geweven' => 22, 'thnr_doorlaatbaarheid' => 23, 'itemnr_doorlaatbaarheid' => 24, 'draagbaar_janee' => 25, 'thnr_draagplaats' => 26, 'itemnr_draagplaats' => 27, 'thnr_extra_kenmerk' => 28, 'item_nr_extra_kenmerk' => 29, 'filter_janee' => 30, 'flensmaat_hoeveelheid' => 31, 'thnr_flensmaat_eenheid' => 32, 'itemnr_flensmaat_eenheid' => 33, 'geslacht' => 34, 'glijmiddel_janee' => 35, 'hergebruik_mogelijk_janee' => 36, 'thnr_hulpmiddelpresentatie' => 37, 'itemnr_hulpmiddelpresentatie' => 38, 'thnr_kleeflaag' => 39, 'itemnr_kleeflaag' => 40, 'kleur_thesaurusnummer' => 41, 'itemnr_kleur' => 42, 'lengte_1_hoeveelheid' => 43, 'thnr_lengte_1_eenheid' => 44, 'itemnr_lengte_1_eenheid' => 45, 'lengte_2_hoeveelheid' => 46, 'thnr_lengte_2_eenheid' => 47, 'itemnr_lengte_2_eenheid' => 48, 'maasgrootte' => 49, 'thnr_maataanduiding' => 50, 'itemnr_maataanduiding' => 51, 'thnr_materiaal' => 52, 'itemnr_materiaal' => 53, 'niet_aan_de_wond_hechtend' => 54, 'thnr_plaats_sluiting' => 55, 'itemnr_plaats_sluiting' => 56, 'rekpercentage' => 57, 'rekrichting' => 58, 'thnr_rekaanduiding' => 59, 'itemnr_rekaanduiding' => 60, 'rontgencontrastdraad_aanwezig_jn' => 61, 'thnr_hulpmiddelsysteem' => 62, 'itemnr_hulpmiddelsysteem' => 63, 'terugslagvoorziening_janee' => 64, 'toepassing_afnameverblijf' => 65, 'type_punt_nelatontiemann' => 66, 'volume_hoeveelheid' => 67, 'thnr_volume_eenheid' => 68, 'itemnr_volume_eenheid' => 69, 'thnr_vorm' => 70, 'itemnr_vorm' => 71, 'thnr_vorm_van_de_opening' => 72, 'itemnr_vorm_van_de_opening' => 73, 'thnr_vorm_van_de_plaat' => 74, 'itemnr_vorm_van_de_plaat' => 75, 'waterbestendig_janee' => 76, 'wegspoelbaar_janee' => 77, 'split_janee' => 78, 'cuff_janee' => 79, 'enkel_of_dubbelzijdig' => 80, 'thnr_absorptievermogen' => 81, 'itemnr_absorptievermogen' => 82, 'soort_incontinentie_urinefaeces' => 83, 'thnr_toebehoren' => 84, 'itemnr_toebehoren' => 85, 'thnr_fysische_toestand' => 86, 'itemnr_fysische_toestand' => 87, 'impregneermiddel_samenstelling' => 88, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, )
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
        $toNames = GsMedischeHulpmiddelenPeer::getFieldNames($toType);
        $key = isset(GsMedischeHulpmiddelenPeer::$fieldKeys[$fromType][$name]) ? GsMedischeHulpmiddelenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GsMedischeHulpmiddelenPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GsMedischeHulpmiddelenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GsMedischeHulpmiddelenPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GsMedischeHulpmiddelenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GsMedischeHulpmiddelenPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::BESTANDNUMMER);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::MUTATIEKODE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::SUBSTITUTIE_KODE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_SOORT_HULPMIDDEL);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::GESTERILISEERD_JANEE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_STERILISATIEMETHODE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_STERILISATIEMETHODE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_SLUITING);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_SLUITING);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::AANTAL_DELEN);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::AANTAL_KANALEN);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_BEVESTIGING);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_BEVESTIGING);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::BREEDTE_HOEVEELHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_BREEDTE_EENHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_BREEDTE_EENHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::DRUKKLASSE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::DIAMETER_HOEVEELHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_DIAMETER_EENHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_DIAMETER_EENHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::DICHT_OF_OPEN_GEWEVEN);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_DOORLAATBAARHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_DOORLAATBAARHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::DRAAGBAAR_JANEE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_DRAAGPLAATS);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_DRAAGPLAATS);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_EXTRA_KENMERK);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEM_NR_EXTRA_KENMERK);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::FILTER_JANEE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::FLENSMAAT_HOEVEELHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_FLENSMAAT_EENHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_FLENSMAAT_EENHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::GESLACHT);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::GLIJMIDDEL_JANEE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::HERGEBRUIK_MOGELIJK_JANEE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELPRESENTATIE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELPRESENTATIE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_KLEEFLAAG);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_KLEEFLAAG);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::KLEUR_THESAURUSNUMMER);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_KLEUR);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::LENGTE_1_HOEVEELHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_LENGTE_1_EENHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_1_EENHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::LENGTE_2_HOEVEELHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_LENGTE_2_EENHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_2_EENHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::MAASGROOTTE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_MAATAANDUIDING);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_MAATAANDUIDING);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_MATERIAAL);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_MATERIAAL);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::NIET_AAN_DE_WOND_HECHTEND);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_PLAATS_SLUITING);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_PLAATS_SLUITING);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::REKPERCENTAGE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::REKRICHTING);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_REKAANDUIDING);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_REKAANDUIDING);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::RONTGENCONTRASTDRAAD_AANWEZIG_JN);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELSYSTEEM);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELSYSTEEM);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::TERUGSLAGVOORZIENING_JANEE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::TOEPASSING_AFNAMEVERBLIJF);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::TYPE_PUNT_NELATONTIEMANN);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::VOLUME_HOEVEELHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_VOLUME_EENHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_VOLUME_EENHEID);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_VORM);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_VORM);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_OPENING);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_OPENING);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_PLAAT);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_PLAAT);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::WATERBESTENDIG_JANEE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::WEGSPOELBAAR_JANEE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::SPLIT_JANEE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::CUFF_JANEE);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ENKEL_OF_DUBBELZIJDIG);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_ABSORPTIEVERMOGEN);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_ABSORPTIEVERMOGEN);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::SOORT_INCONTINENTIE_URINEFAECES);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_TOEBEHOREN);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_TOEBEHOREN);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::THNR_FYSISCHE_TOESTAND);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::ITEMNR_FYSISCHE_TOESTAND);
            $criteria->addSelectColumn(GsMedischeHulpmiddelenPeer::IMPREGNEERMIDDEL_SAMENSTELLING);
        } else {
            $criteria->addSelectColumn($alias . '.bestandnummer');
            $criteria->addSelectColumn($alias . '.mutatiekode');
            $criteria->addSelectColumn($alias . '.medisch_hulpmiddelkode');
            $criteria->addSelectColumn($alias . '.substitutie_kode');
            $criteria->addSelectColumn($alias . '.thnr_soort_hulpmiddel');
            $criteria->addSelectColumn($alias . '.soort_hulpmiddelkode');
            $criteria->addSelectColumn($alias . '.gesteriliseerd_janee');
            $criteria->addSelectColumn($alias . '.thnr_sterilisatiemethode');
            $criteria->addSelectColumn($alias . '.itemnr_sterilisatiemethode');
            $criteria->addSelectColumn($alias . '.thnr_sluiting');
            $criteria->addSelectColumn($alias . '.itemnr_sluiting');
            $criteria->addSelectColumn($alias . '.aantal_delen');
            $criteria->addSelectColumn($alias . '.aantal_kanalen');
            $criteria->addSelectColumn($alias . '.thnr_bevestiging');
            $criteria->addSelectColumn($alias . '.itemnr_bevestiging');
            $criteria->addSelectColumn($alias . '.breedte_hoeveelheid');
            $criteria->addSelectColumn($alias . '.thnr_breedte_eenheid');
            $criteria->addSelectColumn($alias . '.itemnr_breedte_eenheid');
            $criteria->addSelectColumn($alias . '.drukklasse');
            $criteria->addSelectColumn($alias . '.diameter_hoeveelheid');
            $criteria->addSelectColumn($alias . '.thnr_diameter_eenheid');
            $criteria->addSelectColumn($alias . '.itemnr_diameter_eenheid');
            $criteria->addSelectColumn($alias . '.dicht_of_open_geweven');
            $criteria->addSelectColumn($alias . '.thnr_doorlaatbaarheid');
            $criteria->addSelectColumn($alias . '.itemnr_doorlaatbaarheid');
            $criteria->addSelectColumn($alias . '.draagbaar_janee');
            $criteria->addSelectColumn($alias . '.thnr_draagplaats');
            $criteria->addSelectColumn($alias . '.itemnr_draagplaats');
            $criteria->addSelectColumn($alias . '.thnr_extra_kenmerk');
            $criteria->addSelectColumn($alias . '.item_nr_extra_kenmerk');
            $criteria->addSelectColumn($alias . '.filter_janee');
            $criteria->addSelectColumn($alias . '.flensmaat_hoeveelheid');
            $criteria->addSelectColumn($alias . '.thnr_flensmaat_eenheid');
            $criteria->addSelectColumn($alias . '.itemnr_flensmaat_eenheid');
            $criteria->addSelectColumn($alias . '.geslacht');
            $criteria->addSelectColumn($alias . '.glijmiddel_janee');
            $criteria->addSelectColumn($alias . '.hergebruik_mogelijk_janee');
            $criteria->addSelectColumn($alias . '.thnr_hulpmiddelpresentatie');
            $criteria->addSelectColumn($alias . '.itemnr_hulpmiddelpresentatie');
            $criteria->addSelectColumn($alias . '.thnr_kleeflaag');
            $criteria->addSelectColumn($alias . '.itemnr_kleeflaag');
            $criteria->addSelectColumn($alias . '.kleur_thesaurusnummer');
            $criteria->addSelectColumn($alias . '.itemnr_kleur');
            $criteria->addSelectColumn($alias . '.lengte_1_hoeveelheid');
            $criteria->addSelectColumn($alias . '.thnr_lengte_1_eenheid');
            $criteria->addSelectColumn($alias . '.itemnr_lengte_1_eenheid');
            $criteria->addSelectColumn($alias . '.lengte_2_hoeveelheid');
            $criteria->addSelectColumn($alias . '.thnr_lengte_2_eenheid');
            $criteria->addSelectColumn($alias . '.itemnr_lengte_2_eenheid');
            $criteria->addSelectColumn($alias . '.maasgrootte');
            $criteria->addSelectColumn($alias . '.thnr_maataanduiding');
            $criteria->addSelectColumn($alias . '.itemnr_maataanduiding');
            $criteria->addSelectColumn($alias . '.thnr_materiaal');
            $criteria->addSelectColumn($alias . '.itemnr_materiaal');
            $criteria->addSelectColumn($alias . '.niet_aan_de_wond_hechtend');
            $criteria->addSelectColumn($alias . '.thnr_plaats_sluiting');
            $criteria->addSelectColumn($alias . '.itemnr_plaats_sluiting');
            $criteria->addSelectColumn($alias . '.rekpercentage');
            $criteria->addSelectColumn($alias . '.rekrichting');
            $criteria->addSelectColumn($alias . '.thnr_rekaanduiding');
            $criteria->addSelectColumn($alias . '.itemnr_rekaanduiding');
            $criteria->addSelectColumn($alias . '.rontgencontrastdraad_aanwezig_jn');
            $criteria->addSelectColumn($alias . '.thnr_hulpmiddelsysteem');
            $criteria->addSelectColumn($alias . '.itemnr_hulpmiddelsysteem');
            $criteria->addSelectColumn($alias . '.terugslagvoorziening_janee');
            $criteria->addSelectColumn($alias . '.toepassing_afnameverblijf');
            $criteria->addSelectColumn($alias . '.type_punt_nelatontiemann');
            $criteria->addSelectColumn($alias . '.volume_hoeveelheid');
            $criteria->addSelectColumn($alias . '.thnr_volume_eenheid');
            $criteria->addSelectColumn($alias . '.itemnr_volume_eenheid');
            $criteria->addSelectColumn($alias . '.thnr_vorm');
            $criteria->addSelectColumn($alias . '.itemnr_vorm');
            $criteria->addSelectColumn($alias . '.thnr_vorm_van_de_opening');
            $criteria->addSelectColumn($alias . '.itemnr_vorm_van_de_opening');
            $criteria->addSelectColumn($alias . '.thnr_vorm_van_de_plaat');
            $criteria->addSelectColumn($alias . '.itemnr_vorm_van_de_plaat');
            $criteria->addSelectColumn($alias . '.waterbestendig_janee');
            $criteria->addSelectColumn($alias . '.wegspoelbaar_janee');
            $criteria->addSelectColumn($alias . '.split_janee');
            $criteria->addSelectColumn($alias . '.cuff_janee');
            $criteria->addSelectColumn($alias . '.enkel_of_dubbelzijdig');
            $criteria->addSelectColumn($alias . '.thnr_absorptievermogen');
            $criteria->addSelectColumn($alias . '.itemnr_absorptievermogen');
            $criteria->addSelectColumn($alias . '.soort_incontinentie_urinefaeces');
            $criteria->addSelectColumn($alias . '.thnr_toebehoren');
            $criteria->addSelectColumn($alias . '.itemnr_toebehoren');
            $criteria->addSelectColumn($alias . '.thnr_fysische_toestand');
            $criteria->addSelectColumn($alias . '.itemnr_fysische_toestand');
            $criteria->addSelectColumn($alias . '.impregneermiddel_samenstelling');
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
        $criteria->setPrimaryTableName(GsMedischeHulpmiddelenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GsMedischeHulpmiddelenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GsMedischeHulpmiddelenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GsMedischeHulpmiddelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GsMedischeHulpmiddelen
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GsMedischeHulpmiddelenPeer::doSelect($critcopy, $con);
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
        return GsMedischeHulpmiddelenPeer::populateObjects(GsMedischeHulpmiddelenPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GsMedischeHulpmiddelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GsMedischeHulpmiddelenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GsMedischeHulpmiddelenPeer::DATABASE_NAME);

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
     * @param GsMedischeHulpmiddelen $obj A GsMedischeHulpmiddelen object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getMedischHulpmiddelkode(), (string) $obj->getSoortHulpmiddelkode()));
            } // if key === null
            GsMedischeHulpmiddelenPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GsMedischeHulpmiddelen object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GsMedischeHulpmiddelen) {
                $key = serialize(array((string) $value->getMedischHulpmiddelkode(), (string) $value->getSoortHulpmiddelkode()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GsMedischeHulpmiddelen object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GsMedischeHulpmiddelenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GsMedischeHulpmiddelen Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GsMedischeHulpmiddelenPeer::$instances[$key])) {
                return GsMedischeHulpmiddelenPeer::$instances[$key];
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
        foreach (GsMedischeHulpmiddelenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GsMedischeHulpmiddelenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gs_medische_hulpmiddelen
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
        if ($row[$startcol + 2] === null && $row[$startcol + 5] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 5]));
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

        return array((int) $row[$startcol + 2], (int) $row[$startcol + 5]);
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
        $cls = GsMedischeHulpmiddelenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GsMedischeHulpmiddelenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GsMedischeHulpmiddelenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GsMedischeHulpmiddelenPeer::addInstanceToPool($obj, $key);
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
     * @return array (GsMedischeHulpmiddelen object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GsMedischeHulpmiddelenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GsMedischeHulpmiddelenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GsMedischeHulpmiddelenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GsMedischeHulpmiddelenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GsMedischeHulpmiddelenPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        return Propel::getDatabaseMap(GsMedischeHulpmiddelenPeer::DATABASE_NAME)->getTable(GsMedischeHulpmiddelenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGsMedischeHulpmiddelenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGsMedischeHulpmiddelenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PharmaIntelligence\GstandaardBundle\Model\map\GsMedischeHulpmiddelenTableMap());
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
        return GsMedischeHulpmiddelenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GsMedischeHulpmiddelen or Criteria object.
     *
     * @param      mixed $values Criteria or GsMedischeHulpmiddelen object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsMedischeHulpmiddelenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GsMedischeHulpmiddelen object
        }


        // Set the correct dbName
        $criteria->setDbName(GsMedischeHulpmiddelenPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GsMedischeHulpmiddelen or Criteria object.
     *
     * @param      mixed $values Criteria or GsMedischeHulpmiddelen object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsMedischeHulpmiddelenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GsMedischeHulpmiddelenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE);
            $value = $criteria->remove(GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE);
            if ($value) {
                $selectCriteria->add(GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsMedischeHulpmiddelenPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE);
            $value = $criteria->remove(GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE);
            if ($value) {
                $selectCriteria->add(GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GsMedischeHulpmiddelenPeer::TABLE_NAME);
            }

        } else { // $values is GsMedischeHulpmiddelen object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GsMedischeHulpmiddelenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gs_medische_hulpmiddelen table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GsMedischeHulpmiddelenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GsMedischeHulpmiddelenPeer::TABLE_NAME, $con, GsMedischeHulpmiddelenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GsMedischeHulpmiddelenPeer::clearInstancePool();
            GsMedischeHulpmiddelenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GsMedischeHulpmiddelen or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GsMedischeHulpmiddelen object or primary key or array of primary keys
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
            $con = Propel::getConnection(GsMedischeHulpmiddelenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GsMedischeHulpmiddelenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GsMedischeHulpmiddelen) { // it's a model object
            // invalidate the cache for this single object
            GsMedischeHulpmiddelenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GsMedischeHulpmiddelenPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GsMedischeHulpmiddelenPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GsMedischeHulpmiddelenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GsMedischeHulpmiddelenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GsMedischeHulpmiddelen object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GsMedischeHulpmiddelen $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GsMedischeHulpmiddelenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GsMedischeHulpmiddelenPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GsMedischeHulpmiddelenPeer::DATABASE_NAME, GsMedischeHulpmiddelenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $medisch_hulpmiddelkode
     * @param   int $soort_hulpmiddelkode
     * @param      PropelPDO $con
     * @return GsMedischeHulpmiddelen
     */
    public static function retrieveByPK($medisch_hulpmiddelkode, $soort_hulpmiddelkode, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $medisch_hulpmiddelkode, (string) $soort_hulpmiddelkode));
         if (null !== ($obj = GsMedischeHulpmiddelenPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GsMedischeHulpmiddelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GsMedischeHulpmiddelenPeer::DATABASE_NAME);
        $criteria->add(GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE, $medisch_hulpmiddelkode);
        $criteria->add(GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE, $soort_hulpmiddelkode);
        $v = GsMedischeHulpmiddelenPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGsMedischeHulpmiddelenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGsMedischeHulpmiddelenPeer::buildTableMap();

