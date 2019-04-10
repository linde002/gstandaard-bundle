<?php

namespace PharmaIntelligence\GstandaardBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gs_medische_hulpmiddelen' table.
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
class GsMedischeHulpmiddelenTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.PharmaIntelligence.GstandaardBundle.Model.map.GsMedischeHulpmiddelenTableMap';

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
        $this->setName('gs_medische_hulpmiddelen');
        $this->setPhpName('GsMedischeHulpmiddelen');
        $this->setClassname('PharmaIntelligence\\GstandaardBundle\\Model\\GsMedischeHulpmiddelen');
        $this->setPackage('src.PharmaIntelligence.GstandaardBundle.Model');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('bestandnummer', 'Bestandnummer', 'INTEGER', false, null, null);
        $this->addColumn('mutatiekode', 'Mutatiekode', 'INTEGER', false, null, null);
        $this->addPrimaryKey('medisch_hulpmiddelkode', 'MedischHulpmiddelkode', 'INTEGER', true, null, null);
        $this->addColumn('substitutie_kode', 'SubstitutieKode', 'INTEGER', false, null, null);
        $this->addColumn('thnr_soort_hulpmiddel', 'ThnrSoortHulpmiddel', 'INTEGER', false, null, null);
        $this->addPrimaryKey('soort_hulpmiddelkode', 'SoortHulpmiddelkode', 'INTEGER', true, null, null);
        $this->addColumn('gesteriliseerd_janee', 'GesteriliseerdJanee', 'TINYINT', false, null, null);
        $this->addColumn('thnr_sterilisatiemethode', 'ThnrSterilisatiemethode', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_sterilisatiemethode', 'ItemnrSterilisatiemethode', 'INTEGER', false, null, null);
        $this->addColumn('thnr_sluiting', 'ThnrSluiting', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_sluiting', 'ItemnrSluiting', 'INTEGER', false, null, null);
        $this->addColumn('aantal_delen', 'AantalDelen', 'INTEGER', false, null, null);
        $this->addColumn('aantal_kanalen', 'AantalKanalen', 'INTEGER', false, null, null);
        $this->addColumn('thnr_bevestiging', 'ThnrBevestiging', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_bevestiging', 'ItemnrBevestiging', 'INTEGER', false, null, null);
        $this->addColumn('breedte_hoeveelheid', 'BreedteHoeveelheid', 'DECIMAL', false, 8, null);
        $this->addColumn('thnr_breedte_eenheid', 'ThnrBreedteEenheid', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_breedte_eenheid', 'ItemnrBreedteEenheid', 'INTEGER', false, null, null);
        $this->addColumn('drukklasse', 'Drukklasse', 'INTEGER', false, null, null);
        $this->addColumn('diameter_hoeveelheid', 'DiameterHoeveelheid', 'DECIMAL', false, 8, null);
        $this->addColumn('thnr_diameter_eenheid', 'ThnrDiameterEenheid', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_diameter_eenheid', 'ItemnrDiameterEenheid', 'INTEGER', false, null, null);
        $this->addColumn('dicht_of_open_geweven', 'DichtOfOpenGeweven', 'VARCHAR', false, 255, null);
        $this->addColumn('thnr_doorlaatbaarheid', 'ThnrDoorlaatbaarheid', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_doorlaatbaarheid', 'ItemnrDoorlaatbaarheid', 'INTEGER', false, null, null);
        $this->addColumn('draagbaar_janee', 'DraagbaarJanee', 'TINYINT', false, null, null);
        $this->addColumn('thnr_draagplaats', 'ThnrDraagplaats', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_draagplaats', 'ItemnrDraagplaats', 'INTEGER', false, null, null);
        $this->addColumn('thnr_extra_kenmerk', 'ThnrExtraKenmerk', 'INTEGER', false, null, null);
        $this->addColumn('item_nr_extra_kenmerk', 'ItemNrExtraKenmerk', 'INTEGER', false, null, null);
        $this->addColumn('filter_janee', 'FilterJanee', 'TINYINT', false, null, null);
        $this->addColumn('flensmaat_hoeveelheid', 'FlensmaatHoeveelheid', 'DECIMAL', false, 8, null);
        $this->addColumn('thnr_flensmaat_eenheid', 'ThnrFlensmaatEenheid', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_flensmaat_eenheid', 'ItemnrFlensmaatEenheid', 'INTEGER', false, null, null);
        $this->addColumn('geslacht', 'Geslacht', 'VARCHAR', false, 255, null);
        $this->addColumn('glijmiddel_janee', 'GlijmiddelJanee', 'TINYINT', false, null, null);
        $this->addColumn('hergebruik_mogelijk_janee', 'HergebruikMogelijkJanee', 'TINYINT', false, null, null);
        $this->addColumn('thnr_hulpmiddelpresentatie', 'ThnrHulpmiddelpresentatie', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_hulpmiddelpresentatie', 'ItemnrHulpmiddelpresentatie', 'INTEGER', false, null, null);
        $this->addColumn('thnr_kleeflaag', 'ThnrKleeflaag', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_kleeflaag', 'ItemnrKleeflaag', 'INTEGER', false, null, null);
        $this->addColumn('kleur_thesaurusnummer', 'KleurThesaurusnummer', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_kleur', 'ItemnrKleur', 'INTEGER', false, null, null);
        $this->addColumn('lengte_1_hoeveelheid', 'Lengte1Hoeveelheid', 'DECIMAL', false, 8, null);
        $this->addColumn('thnr_lengte_1_eenheid', 'ThnrLengte1Eenheid', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_lengte_1_eenheid', 'ItemnrLengte1Eenheid', 'INTEGER', false, null, null);
        $this->addColumn('lengte_2_hoeveelheid', 'Lengte2Hoeveelheid', 'DECIMAL', false, 8, null);
        $this->addColumn('thnr_lengte_2_eenheid', 'ThnrLengte2Eenheid', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_lengte_2_eenheid', 'ItemnrLengte2Eenheid', 'INTEGER', false, null, null);
        $this->addColumn('maasgrootte', 'Maasgrootte', 'VARCHAR', false, 255, null);
        $this->addColumn('thnr_maataanduiding', 'ThnrMaataanduiding', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_maataanduiding', 'ItemnrMaataanduiding', 'INTEGER', false, null, null);
        $this->addColumn('thnr_materiaal', 'ThnrMateriaal', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_materiaal', 'ItemnrMateriaal', 'INTEGER', false, null, null);
        $this->addColumn('niet_aan_de_wond_hechtend', 'NietAanDeWondHechtend', 'VARCHAR', false, 255, null);
        $this->addColumn('thnr_plaats_sluiting', 'ThnrPlaatsSluiting', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_plaats_sluiting', 'ItemnrPlaatsSluiting', 'INTEGER', false, null, null);
        $this->addColumn('rekpercentage', 'Rekpercentage', 'INTEGER', false, null, null);
        $this->addColumn('rekrichting', 'Rekrichting', 'VARCHAR', false, 255, null);
        $this->addColumn('thnr_rekaanduiding', 'ThnrRekaanduiding', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_rekaanduiding', 'ItemnrRekaanduiding', 'INTEGER', false, null, null);
        $this->addColumn('rontgencontrastdraad_aanwezig_jn', 'RontgencontrastdraadAanwezigJn', 'TINYINT', false, null, null);
        $this->addColumn('thnr_hulpmiddelsysteem', 'ThnrHulpmiddelsysteem', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_hulpmiddelsysteem', 'ItemnrHulpmiddelsysteem', 'INTEGER', false, null, null);
        $this->addColumn('terugslagvoorziening_janee', 'TerugslagvoorzieningJanee', 'TINYINT', false, null, null);
        $this->addColumn('toepassing_afnameverblijf', 'ToepassingAfnameverblijf', 'VARCHAR', false, 255, null);
        $this->addColumn('type_punt_nelatontiemann', 'TypePuntNelatontiemann', 'VARCHAR', false, 255, null);
        $this->addColumn('volume_hoeveelheid', 'VolumeHoeveelheid', 'DECIMAL', false, 8, null);
        $this->addColumn('thnr_volume_eenheid', 'ThnrVolumeEenheid', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_volume_eenheid', 'ItemnrVolumeEenheid', 'INTEGER', false, null, null);
        $this->addColumn('thnr_vorm', 'ThnrVorm', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_vorm', 'ItemnrVorm', 'INTEGER', false, null, null);
        $this->addColumn('thnr_vorm_van_de_opening', 'ThnrVormVanDeOpening', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_vorm_van_de_opening', 'ItemnrVormVanDeOpening', 'INTEGER', false, null, null);
        $this->addColumn('thnr_vorm_van_de_plaat', 'ThnrVormVanDePlaat', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_vorm_van_de_plaat', 'ItemnrVormVanDePlaat', 'INTEGER', false, null, null);
        $this->addColumn('waterbestendig_janee', 'WaterbestendigJanee', 'TINYINT', false, null, null);
        $this->addColumn('wegspoelbaar_janee', 'WegspoelbaarJanee', 'TINYINT', false, null, null);
        $this->addColumn('split_janee', 'SplitJanee', 'TINYINT', false, null, null);
        $this->addColumn('cuff_janee', 'CuffJanee', 'TINYINT', false, null, null);
        $this->addColumn('enkel_of_dubbelzijdig', 'EnkelOfDubbelzijdig', 'VARCHAR', false, 255, null);
        $this->addColumn('thnr_absorptievermogen', 'ThnrAbsorptievermogen', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_absorptievermogen', 'ItemnrAbsorptievermogen', 'INTEGER', false, null, null);
        $this->addColumn('soort_incontinentie_urinefaeces', 'SoortIncontinentieUrinefaeces', 'VARCHAR', false, 255, null);
        $this->addColumn('thnr_toebehoren', 'ThnrToebehoren', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_toebehoren', 'ItemnrToebehoren', 'INTEGER', false, null, null);
        $this->addColumn('thnr_fysische_toestand', 'ThnrFysischeToestand', 'INTEGER', false, null, null);
        $this->addColumn('itemnr_fysische_toestand', 'ItemnrFysischeToestand', 'INTEGER', false, null, null);
        $this->addColumn('impregneermiddel_samenstelling', 'ImpregneermiddelSamenstelling', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GsMedischeHulpmiddelenTableMap
