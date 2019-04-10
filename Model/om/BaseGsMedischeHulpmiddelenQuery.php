<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \Criteria;
use \Exception;
use \ModelCriteria;
use \PDO;
use \Propel;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsMedischeHulpmiddelen;
use PharmaIntelligence\GstandaardBundle\Model\GsMedischeHulpmiddelenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsMedischeHulpmiddelenQuery;

/**
 * @method GsMedischeHulpmiddelenQuery orderByBestandnummer($order = Criteria::ASC) Order by the bestandnummer column
 * @method GsMedischeHulpmiddelenQuery orderByMutatiekode($order = Criteria::ASC) Order by the mutatiekode column
 * @method GsMedischeHulpmiddelenQuery orderByMedischHulpmiddelkode($order = Criteria::ASC) Order by the medisch_hulpmiddelkode column
 * @method GsMedischeHulpmiddelenQuery orderBySubstitutieKode($order = Criteria::ASC) Order by the substitutie_kode column
 * @method GsMedischeHulpmiddelenQuery orderByThnrSoortHulpmiddel($order = Criteria::ASC) Order by the thnr_soort_hulpmiddel column
 * @method GsMedischeHulpmiddelenQuery orderBySoortHulpmiddelkode($order = Criteria::ASC) Order by the soort_hulpmiddelkode column
 * @method GsMedischeHulpmiddelenQuery orderByGesteriliseerdJanee($order = Criteria::ASC) Order by the gesteriliseerd_janee column
 * @method GsMedischeHulpmiddelenQuery orderByThnrSterilisatiemethode($order = Criteria::ASC) Order by the thnr_sterilisatiemethode column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrSterilisatiemethode($order = Criteria::ASC) Order by the itemnr_sterilisatiemethode column
 * @method GsMedischeHulpmiddelenQuery orderByThnrSluiting($order = Criteria::ASC) Order by the thnr_sluiting column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrSluiting($order = Criteria::ASC) Order by the itemnr_sluiting column
 * @method GsMedischeHulpmiddelenQuery orderByAantalDelen($order = Criteria::ASC) Order by the aantal_delen column
 * @method GsMedischeHulpmiddelenQuery orderByAantalKanalen($order = Criteria::ASC) Order by the aantal_kanalen column
 * @method GsMedischeHulpmiddelenQuery orderByThnrBevestiging($order = Criteria::ASC) Order by the thnr_bevestiging column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrBevestiging($order = Criteria::ASC) Order by the itemnr_bevestiging column
 * @method GsMedischeHulpmiddelenQuery orderByBreedteHoeveelheid($order = Criteria::ASC) Order by the breedte_hoeveelheid column
 * @method GsMedischeHulpmiddelenQuery orderByThnrBreedteEenheid($order = Criteria::ASC) Order by the thnr_breedte_eenheid column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrBreedteEenheid($order = Criteria::ASC) Order by the itemnr_breedte_eenheid column
 * @method GsMedischeHulpmiddelenQuery orderByDrukklasse($order = Criteria::ASC) Order by the drukklasse column
 * @method GsMedischeHulpmiddelenQuery orderByDiameterHoeveelheid($order = Criteria::ASC) Order by the diameter_hoeveelheid column
 * @method GsMedischeHulpmiddelenQuery orderByThnrDiameterEenheid($order = Criteria::ASC) Order by the thnr_diameter_eenheid column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrDiameterEenheid($order = Criteria::ASC) Order by the itemnr_diameter_eenheid column
 * @method GsMedischeHulpmiddelenQuery orderByDichtOfOpenGeweven($order = Criteria::ASC) Order by the dicht_of_open_geweven column
 * @method GsMedischeHulpmiddelenQuery orderByThnrDoorlaatbaarheid($order = Criteria::ASC) Order by the thnr_doorlaatbaarheid column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrDoorlaatbaarheid($order = Criteria::ASC) Order by the itemnr_doorlaatbaarheid column
 * @method GsMedischeHulpmiddelenQuery orderByDraagbaarJanee($order = Criteria::ASC) Order by the draagbaar_janee column
 * @method GsMedischeHulpmiddelenQuery orderByThnrDraagplaats($order = Criteria::ASC) Order by the thnr_draagplaats column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrDraagplaats($order = Criteria::ASC) Order by the itemnr_draagplaats column
 * @method GsMedischeHulpmiddelenQuery orderByThnrExtraKenmerk($order = Criteria::ASC) Order by the thnr_extra_kenmerk column
 * @method GsMedischeHulpmiddelenQuery orderByItemNrExtraKenmerk($order = Criteria::ASC) Order by the item_nr_extra_kenmerk column
 * @method GsMedischeHulpmiddelenQuery orderByFilterJanee($order = Criteria::ASC) Order by the filter_janee column
 * @method GsMedischeHulpmiddelenQuery orderByFlensmaatHoeveelheid($order = Criteria::ASC) Order by the flensmaat_hoeveelheid column
 * @method GsMedischeHulpmiddelenQuery orderByThnrFlensmaatEenheid($order = Criteria::ASC) Order by the thnr_flensmaat_eenheid column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrFlensmaatEenheid($order = Criteria::ASC) Order by the itemnr_flensmaat_eenheid column
 * @method GsMedischeHulpmiddelenQuery orderByGeslacht($order = Criteria::ASC) Order by the geslacht column
 * @method GsMedischeHulpmiddelenQuery orderByGlijmiddelJanee($order = Criteria::ASC) Order by the glijmiddel_janee column
 * @method GsMedischeHulpmiddelenQuery orderByHergebruikMogelijkJanee($order = Criteria::ASC) Order by the hergebruik_mogelijk_janee column
 * @method GsMedischeHulpmiddelenQuery orderByThnrHulpmiddelpresentatie($order = Criteria::ASC) Order by the thnr_hulpmiddelpresentatie column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrHulpmiddelpresentatie($order = Criteria::ASC) Order by the itemnr_hulpmiddelpresentatie column
 * @method GsMedischeHulpmiddelenQuery orderByThnrKleeflaag($order = Criteria::ASC) Order by the thnr_kleeflaag column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrKleeflaag($order = Criteria::ASC) Order by the itemnr_kleeflaag column
 * @method GsMedischeHulpmiddelenQuery orderByKleurThesaurusnummer($order = Criteria::ASC) Order by the kleur_thesaurusnummer column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrKleur($order = Criteria::ASC) Order by the itemnr_kleur column
 * @method GsMedischeHulpmiddelenQuery orderByLengte1Hoeveelheid($order = Criteria::ASC) Order by the lengte_1_hoeveelheid column
 * @method GsMedischeHulpmiddelenQuery orderByThnrLengte1Eenheid($order = Criteria::ASC) Order by the thnr_lengte_1_eenheid column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrLengte1Eenheid($order = Criteria::ASC) Order by the itemnr_lengte_1_eenheid column
 * @method GsMedischeHulpmiddelenQuery orderByLengte2Hoeveelheid($order = Criteria::ASC) Order by the lengte_2_hoeveelheid column
 * @method GsMedischeHulpmiddelenQuery orderByThnrLengte2Eenheid($order = Criteria::ASC) Order by the thnr_lengte_2_eenheid column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrLengte2Eenheid($order = Criteria::ASC) Order by the itemnr_lengte_2_eenheid column
 * @method GsMedischeHulpmiddelenQuery orderByMaasgrootte($order = Criteria::ASC) Order by the maasgrootte column
 * @method GsMedischeHulpmiddelenQuery orderByThnrMaataanduiding($order = Criteria::ASC) Order by the thnr_maataanduiding column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrMaataanduiding($order = Criteria::ASC) Order by the itemnr_maataanduiding column
 * @method GsMedischeHulpmiddelenQuery orderByThnrMateriaal($order = Criteria::ASC) Order by the thnr_materiaal column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrMateriaal($order = Criteria::ASC) Order by the itemnr_materiaal column
 * @method GsMedischeHulpmiddelenQuery orderByNietAanDeWondHechtend($order = Criteria::ASC) Order by the niet_aan_de_wond_hechtend column
 * @method GsMedischeHulpmiddelenQuery orderByThnrPlaatsSluiting($order = Criteria::ASC) Order by the thnr_plaats_sluiting column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrPlaatsSluiting($order = Criteria::ASC) Order by the itemnr_plaats_sluiting column
 * @method GsMedischeHulpmiddelenQuery orderByRekpercentage($order = Criteria::ASC) Order by the rekpercentage column
 * @method GsMedischeHulpmiddelenQuery orderByRekrichting($order = Criteria::ASC) Order by the rekrichting column
 * @method GsMedischeHulpmiddelenQuery orderByThnrRekaanduiding($order = Criteria::ASC) Order by the thnr_rekaanduiding column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrRekaanduiding($order = Criteria::ASC) Order by the itemnr_rekaanduiding column
 * @method GsMedischeHulpmiddelenQuery orderByRontgencontrastdraadAanwezigJn($order = Criteria::ASC) Order by the rontgencontrastdraad_aanwezig_jn column
 * @method GsMedischeHulpmiddelenQuery orderByThnrHulpmiddelsysteem($order = Criteria::ASC) Order by the thnr_hulpmiddelsysteem column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrHulpmiddelsysteem($order = Criteria::ASC) Order by the itemnr_hulpmiddelsysteem column
 * @method GsMedischeHulpmiddelenQuery orderByTerugslagvoorzieningJanee($order = Criteria::ASC) Order by the terugslagvoorziening_janee column
 * @method GsMedischeHulpmiddelenQuery orderByToepassingAfnameverblijf($order = Criteria::ASC) Order by the toepassing_afnameverblijf column
 * @method GsMedischeHulpmiddelenQuery orderByTypePuntNelatontiemann($order = Criteria::ASC) Order by the type_punt_nelatontiemann column
 * @method GsMedischeHulpmiddelenQuery orderByVolumeHoeveelheid($order = Criteria::ASC) Order by the volume_hoeveelheid column
 * @method GsMedischeHulpmiddelenQuery orderByThnrVolumeEenheid($order = Criteria::ASC) Order by the thnr_volume_eenheid column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrVolumeEenheid($order = Criteria::ASC) Order by the itemnr_volume_eenheid column
 * @method GsMedischeHulpmiddelenQuery orderByThnrVorm($order = Criteria::ASC) Order by the thnr_vorm column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrVorm($order = Criteria::ASC) Order by the itemnr_vorm column
 * @method GsMedischeHulpmiddelenQuery orderByThnrVormVanDeOpening($order = Criteria::ASC) Order by the thnr_vorm_van_de_opening column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrVormVanDeOpening($order = Criteria::ASC) Order by the itemnr_vorm_van_de_opening column
 * @method GsMedischeHulpmiddelenQuery orderByThnrVormVanDePlaat($order = Criteria::ASC) Order by the thnr_vorm_van_de_plaat column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrVormVanDePlaat($order = Criteria::ASC) Order by the itemnr_vorm_van_de_plaat column
 * @method GsMedischeHulpmiddelenQuery orderByWaterbestendigJanee($order = Criteria::ASC) Order by the waterbestendig_janee column
 * @method GsMedischeHulpmiddelenQuery orderByWegspoelbaarJanee($order = Criteria::ASC) Order by the wegspoelbaar_janee column
 * @method GsMedischeHulpmiddelenQuery orderBySplitJanee($order = Criteria::ASC) Order by the split_janee column
 * @method GsMedischeHulpmiddelenQuery orderByCuffJanee($order = Criteria::ASC) Order by the cuff_janee column
 * @method GsMedischeHulpmiddelenQuery orderByEnkelOfDubbelzijdig($order = Criteria::ASC) Order by the enkel_of_dubbelzijdig column
 * @method GsMedischeHulpmiddelenQuery orderByThnrAbsorptievermogen($order = Criteria::ASC) Order by the thnr_absorptievermogen column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrAbsorptievermogen($order = Criteria::ASC) Order by the itemnr_absorptievermogen column
 * @method GsMedischeHulpmiddelenQuery orderBySoortIncontinentieUrinefaeces($order = Criteria::ASC) Order by the soort_incontinentie_urinefaeces column
 * @method GsMedischeHulpmiddelenQuery orderByThnrToebehoren($order = Criteria::ASC) Order by the thnr_toebehoren column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrToebehoren($order = Criteria::ASC) Order by the itemnr_toebehoren column
 * @method GsMedischeHulpmiddelenQuery orderByThnrFysischeToestand($order = Criteria::ASC) Order by the thnr_fysische_toestand column
 * @method GsMedischeHulpmiddelenQuery orderByItemnrFysischeToestand($order = Criteria::ASC) Order by the itemnr_fysische_toestand column
 * @method GsMedischeHulpmiddelenQuery orderByImpregneermiddelSamenstelling($order = Criteria::ASC) Order by the impregneermiddel_samenstelling column
 *
 * @method GsMedischeHulpmiddelenQuery groupByBestandnummer() Group by the bestandnummer column
 * @method GsMedischeHulpmiddelenQuery groupByMutatiekode() Group by the mutatiekode column
 * @method GsMedischeHulpmiddelenQuery groupByMedischHulpmiddelkode() Group by the medisch_hulpmiddelkode column
 * @method GsMedischeHulpmiddelenQuery groupBySubstitutieKode() Group by the substitutie_kode column
 * @method GsMedischeHulpmiddelenQuery groupByThnrSoortHulpmiddel() Group by the thnr_soort_hulpmiddel column
 * @method GsMedischeHulpmiddelenQuery groupBySoortHulpmiddelkode() Group by the soort_hulpmiddelkode column
 * @method GsMedischeHulpmiddelenQuery groupByGesteriliseerdJanee() Group by the gesteriliseerd_janee column
 * @method GsMedischeHulpmiddelenQuery groupByThnrSterilisatiemethode() Group by the thnr_sterilisatiemethode column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrSterilisatiemethode() Group by the itemnr_sterilisatiemethode column
 * @method GsMedischeHulpmiddelenQuery groupByThnrSluiting() Group by the thnr_sluiting column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrSluiting() Group by the itemnr_sluiting column
 * @method GsMedischeHulpmiddelenQuery groupByAantalDelen() Group by the aantal_delen column
 * @method GsMedischeHulpmiddelenQuery groupByAantalKanalen() Group by the aantal_kanalen column
 * @method GsMedischeHulpmiddelenQuery groupByThnrBevestiging() Group by the thnr_bevestiging column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrBevestiging() Group by the itemnr_bevestiging column
 * @method GsMedischeHulpmiddelenQuery groupByBreedteHoeveelheid() Group by the breedte_hoeveelheid column
 * @method GsMedischeHulpmiddelenQuery groupByThnrBreedteEenheid() Group by the thnr_breedte_eenheid column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrBreedteEenheid() Group by the itemnr_breedte_eenheid column
 * @method GsMedischeHulpmiddelenQuery groupByDrukklasse() Group by the drukklasse column
 * @method GsMedischeHulpmiddelenQuery groupByDiameterHoeveelheid() Group by the diameter_hoeveelheid column
 * @method GsMedischeHulpmiddelenQuery groupByThnrDiameterEenheid() Group by the thnr_diameter_eenheid column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrDiameterEenheid() Group by the itemnr_diameter_eenheid column
 * @method GsMedischeHulpmiddelenQuery groupByDichtOfOpenGeweven() Group by the dicht_of_open_geweven column
 * @method GsMedischeHulpmiddelenQuery groupByThnrDoorlaatbaarheid() Group by the thnr_doorlaatbaarheid column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrDoorlaatbaarheid() Group by the itemnr_doorlaatbaarheid column
 * @method GsMedischeHulpmiddelenQuery groupByDraagbaarJanee() Group by the draagbaar_janee column
 * @method GsMedischeHulpmiddelenQuery groupByThnrDraagplaats() Group by the thnr_draagplaats column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrDraagplaats() Group by the itemnr_draagplaats column
 * @method GsMedischeHulpmiddelenQuery groupByThnrExtraKenmerk() Group by the thnr_extra_kenmerk column
 * @method GsMedischeHulpmiddelenQuery groupByItemNrExtraKenmerk() Group by the item_nr_extra_kenmerk column
 * @method GsMedischeHulpmiddelenQuery groupByFilterJanee() Group by the filter_janee column
 * @method GsMedischeHulpmiddelenQuery groupByFlensmaatHoeveelheid() Group by the flensmaat_hoeveelheid column
 * @method GsMedischeHulpmiddelenQuery groupByThnrFlensmaatEenheid() Group by the thnr_flensmaat_eenheid column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrFlensmaatEenheid() Group by the itemnr_flensmaat_eenheid column
 * @method GsMedischeHulpmiddelenQuery groupByGeslacht() Group by the geslacht column
 * @method GsMedischeHulpmiddelenQuery groupByGlijmiddelJanee() Group by the glijmiddel_janee column
 * @method GsMedischeHulpmiddelenQuery groupByHergebruikMogelijkJanee() Group by the hergebruik_mogelijk_janee column
 * @method GsMedischeHulpmiddelenQuery groupByThnrHulpmiddelpresentatie() Group by the thnr_hulpmiddelpresentatie column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrHulpmiddelpresentatie() Group by the itemnr_hulpmiddelpresentatie column
 * @method GsMedischeHulpmiddelenQuery groupByThnrKleeflaag() Group by the thnr_kleeflaag column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrKleeflaag() Group by the itemnr_kleeflaag column
 * @method GsMedischeHulpmiddelenQuery groupByKleurThesaurusnummer() Group by the kleur_thesaurusnummer column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrKleur() Group by the itemnr_kleur column
 * @method GsMedischeHulpmiddelenQuery groupByLengte1Hoeveelheid() Group by the lengte_1_hoeveelheid column
 * @method GsMedischeHulpmiddelenQuery groupByThnrLengte1Eenheid() Group by the thnr_lengte_1_eenheid column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrLengte1Eenheid() Group by the itemnr_lengte_1_eenheid column
 * @method GsMedischeHulpmiddelenQuery groupByLengte2Hoeveelheid() Group by the lengte_2_hoeveelheid column
 * @method GsMedischeHulpmiddelenQuery groupByThnrLengte2Eenheid() Group by the thnr_lengte_2_eenheid column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrLengte2Eenheid() Group by the itemnr_lengte_2_eenheid column
 * @method GsMedischeHulpmiddelenQuery groupByMaasgrootte() Group by the maasgrootte column
 * @method GsMedischeHulpmiddelenQuery groupByThnrMaataanduiding() Group by the thnr_maataanduiding column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrMaataanduiding() Group by the itemnr_maataanduiding column
 * @method GsMedischeHulpmiddelenQuery groupByThnrMateriaal() Group by the thnr_materiaal column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrMateriaal() Group by the itemnr_materiaal column
 * @method GsMedischeHulpmiddelenQuery groupByNietAanDeWondHechtend() Group by the niet_aan_de_wond_hechtend column
 * @method GsMedischeHulpmiddelenQuery groupByThnrPlaatsSluiting() Group by the thnr_plaats_sluiting column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrPlaatsSluiting() Group by the itemnr_plaats_sluiting column
 * @method GsMedischeHulpmiddelenQuery groupByRekpercentage() Group by the rekpercentage column
 * @method GsMedischeHulpmiddelenQuery groupByRekrichting() Group by the rekrichting column
 * @method GsMedischeHulpmiddelenQuery groupByThnrRekaanduiding() Group by the thnr_rekaanduiding column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrRekaanduiding() Group by the itemnr_rekaanduiding column
 * @method GsMedischeHulpmiddelenQuery groupByRontgencontrastdraadAanwezigJn() Group by the rontgencontrastdraad_aanwezig_jn column
 * @method GsMedischeHulpmiddelenQuery groupByThnrHulpmiddelsysteem() Group by the thnr_hulpmiddelsysteem column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrHulpmiddelsysteem() Group by the itemnr_hulpmiddelsysteem column
 * @method GsMedischeHulpmiddelenQuery groupByTerugslagvoorzieningJanee() Group by the terugslagvoorziening_janee column
 * @method GsMedischeHulpmiddelenQuery groupByToepassingAfnameverblijf() Group by the toepassing_afnameverblijf column
 * @method GsMedischeHulpmiddelenQuery groupByTypePuntNelatontiemann() Group by the type_punt_nelatontiemann column
 * @method GsMedischeHulpmiddelenQuery groupByVolumeHoeveelheid() Group by the volume_hoeveelheid column
 * @method GsMedischeHulpmiddelenQuery groupByThnrVolumeEenheid() Group by the thnr_volume_eenheid column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrVolumeEenheid() Group by the itemnr_volume_eenheid column
 * @method GsMedischeHulpmiddelenQuery groupByThnrVorm() Group by the thnr_vorm column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrVorm() Group by the itemnr_vorm column
 * @method GsMedischeHulpmiddelenQuery groupByThnrVormVanDeOpening() Group by the thnr_vorm_van_de_opening column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrVormVanDeOpening() Group by the itemnr_vorm_van_de_opening column
 * @method GsMedischeHulpmiddelenQuery groupByThnrVormVanDePlaat() Group by the thnr_vorm_van_de_plaat column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrVormVanDePlaat() Group by the itemnr_vorm_van_de_plaat column
 * @method GsMedischeHulpmiddelenQuery groupByWaterbestendigJanee() Group by the waterbestendig_janee column
 * @method GsMedischeHulpmiddelenQuery groupByWegspoelbaarJanee() Group by the wegspoelbaar_janee column
 * @method GsMedischeHulpmiddelenQuery groupBySplitJanee() Group by the split_janee column
 * @method GsMedischeHulpmiddelenQuery groupByCuffJanee() Group by the cuff_janee column
 * @method GsMedischeHulpmiddelenQuery groupByEnkelOfDubbelzijdig() Group by the enkel_of_dubbelzijdig column
 * @method GsMedischeHulpmiddelenQuery groupByThnrAbsorptievermogen() Group by the thnr_absorptievermogen column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrAbsorptievermogen() Group by the itemnr_absorptievermogen column
 * @method GsMedischeHulpmiddelenQuery groupBySoortIncontinentieUrinefaeces() Group by the soort_incontinentie_urinefaeces column
 * @method GsMedischeHulpmiddelenQuery groupByThnrToebehoren() Group by the thnr_toebehoren column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrToebehoren() Group by the itemnr_toebehoren column
 * @method GsMedischeHulpmiddelenQuery groupByThnrFysischeToestand() Group by the thnr_fysische_toestand column
 * @method GsMedischeHulpmiddelenQuery groupByItemnrFysischeToestand() Group by the itemnr_fysische_toestand column
 * @method GsMedischeHulpmiddelenQuery groupByImpregneermiddelSamenstelling() Group by the impregneermiddel_samenstelling column
 *
 * @method GsMedischeHulpmiddelenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GsMedischeHulpmiddelenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GsMedischeHulpmiddelenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method GsMedischeHulpmiddelen findOne(PropelPDO $con = null) Return the first GsMedischeHulpmiddelen matching the query
 * @method GsMedischeHulpmiddelen findOneOrCreate(PropelPDO $con = null) Return the first GsMedischeHulpmiddelen matching the query, or a new GsMedischeHulpmiddelen object populated from the query conditions when no match is found
 *
 * @method GsMedischeHulpmiddelen findOneByBestandnummer(int $bestandnummer) Return the first GsMedischeHulpmiddelen filtered by the bestandnummer column
 * @method GsMedischeHulpmiddelen findOneByMutatiekode(int $mutatiekode) Return the first GsMedischeHulpmiddelen filtered by the mutatiekode column
 * @method GsMedischeHulpmiddelen findOneByMedischHulpmiddelkode(int $medisch_hulpmiddelkode) Return the first GsMedischeHulpmiddelen filtered by the medisch_hulpmiddelkode column
 * @method GsMedischeHulpmiddelen findOneBySubstitutieKode(int $substitutie_kode) Return the first GsMedischeHulpmiddelen filtered by the substitutie_kode column
 * @method GsMedischeHulpmiddelen findOneByThnrSoortHulpmiddel(int $thnr_soort_hulpmiddel) Return the first GsMedischeHulpmiddelen filtered by the thnr_soort_hulpmiddel column
 * @method GsMedischeHulpmiddelen findOneBySoortHulpmiddelkode(int $soort_hulpmiddelkode) Return the first GsMedischeHulpmiddelen filtered by the soort_hulpmiddelkode column
 * @method GsMedischeHulpmiddelen findOneByGesteriliseerdJanee(int $gesteriliseerd_janee) Return the first GsMedischeHulpmiddelen filtered by the gesteriliseerd_janee column
 * @method GsMedischeHulpmiddelen findOneByThnrSterilisatiemethode(int $thnr_sterilisatiemethode) Return the first GsMedischeHulpmiddelen filtered by the thnr_sterilisatiemethode column
 * @method GsMedischeHulpmiddelen findOneByItemnrSterilisatiemethode(int $itemnr_sterilisatiemethode) Return the first GsMedischeHulpmiddelen filtered by the itemnr_sterilisatiemethode column
 * @method GsMedischeHulpmiddelen findOneByThnrSluiting(int $thnr_sluiting) Return the first GsMedischeHulpmiddelen filtered by the thnr_sluiting column
 * @method GsMedischeHulpmiddelen findOneByItemnrSluiting(int $itemnr_sluiting) Return the first GsMedischeHulpmiddelen filtered by the itemnr_sluiting column
 * @method GsMedischeHulpmiddelen findOneByAantalDelen(int $aantal_delen) Return the first GsMedischeHulpmiddelen filtered by the aantal_delen column
 * @method GsMedischeHulpmiddelen findOneByAantalKanalen(int $aantal_kanalen) Return the first GsMedischeHulpmiddelen filtered by the aantal_kanalen column
 * @method GsMedischeHulpmiddelen findOneByThnrBevestiging(int $thnr_bevestiging) Return the first GsMedischeHulpmiddelen filtered by the thnr_bevestiging column
 * @method GsMedischeHulpmiddelen findOneByItemnrBevestiging(int $itemnr_bevestiging) Return the first GsMedischeHulpmiddelen filtered by the itemnr_bevestiging column
 * @method GsMedischeHulpmiddelen findOneByBreedteHoeveelheid(string $breedte_hoeveelheid) Return the first GsMedischeHulpmiddelen filtered by the breedte_hoeveelheid column
 * @method GsMedischeHulpmiddelen findOneByThnrBreedteEenheid(int $thnr_breedte_eenheid) Return the first GsMedischeHulpmiddelen filtered by the thnr_breedte_eenheid column
 * @method GsMedischeHulpmiddelen findOneByItemnrBreedteEenheid(int $itemnr_breedte_eenheid) Return the first GsMedischeHulpmiddelen filtered by the itemnr_breedte_eenheid column
 * @method GsMedischeHulpmiddelen findOneByDrukklasse(int $drukklasse) Return the first GsMedischeHulpmiddelen filtered by the drukklasse column
 * @method GsMedischeHulpmiddelen findOneByDiameterHoeveelheid(string $diameter_hoeveelheid) Return the first GsMedischeHulpmiddelen filtered by the diameter_hoeveelheid column
 * @method GsMedischeHulpmiddelen findOneByThnrDiameterEenheid(int $thnr_diameter_eenheid) Return the first GsMedischeHulpmiddelen filtered by the thnr_diameter_eenheid column
 * @method GsMedischeHulpmiddelen findOneByItemnrDiameterEenheid(int $itemnr_diameter_eenheid) Return the first GsMedischeHulpmiddelen filtered by the itemnr_diameter_eenheid column
 * @method GsMedischeHulpmiddelen findOneByDichtOfOpenGeweven(string $dicht_of_open_geweven) Return the first GsMedischeHulpmiddelen filtered by the dicht_of_open_geweven column
 * @method GsMedischeHulpmiddelen findOneByThnrDoorlaatbaarheid(int $thnr_doorlaatbaarheid) Return the first GsMedischeHulpmiddelen filtered by the thnr_doorlaatbaarheid column
 * @method GsMedischeHulpmiddelen findOneByItemnrDoorlaatbaarheid(int $itemnr_doorlaatbaarheid) Return the first GsMedischeHulpmiddelen filtered by the itemnr_doorlaatbaarheid column
 * @method GsMedischeHulpmiddelen findOneByDraagbaarJanee(int $draagbaar_janee) Return the first GsMedischeHulpmiddelen filtered by the draagbaar_janee column
 * @method GsMedischeHulpmiddelen findOneByThnrDraagplaats(int $thnr_draagplaats) Return the first GsMedischeHulpmiddelen filtered by the thnr_draagplaats column
 * @method GsMedischeHulpmiddelen findOneByItemnrDraagplaats(int $itemnr_draagplaats) Return the first GsMedischeHulpmiddelen filtered by the itemnr_draagplaats column
 * @method GsMedischeHulpmiddelen findOneByThnrExtraKenmerk(int $thnr_extra_kenmerk) Return the first GsMedischeHulpmiddelen filtered by the thnr_extra_kenmerk column
 * @method GsMedischeHulpmiddelen findOneByItemNrExtraKenmerk(int $item_nr_extra_kenmerk) Return the first GsMedischeHulpmiddelen filtered by the item_nr_extra_kenmerk column
 * @method GsMedischeHulpmiddelen findOneByFilterJanee(int $filter_janee) Return the first GsMedischeHulpmiddelen filtered by the filter_janee column
 * @method GsMedischeHulpmiddelen findOneByFlensmaatHoeveelheid(string $flensmaat_hoeveelheid) Return the first GsMedischeHulpmiddelen filtered by the flensmaat_hoeveelheid column
 * @method GsMedischeHulpmiddelen findOneByThnrFlensmaatEenheid(int $thnr_flensmaat_eenheid) Return the first GsMedischeHulpmiddelen filtered by the thnr_flensmaat_eenheid column
 * @method GsMedischeHulpmiddelen findOneByItemnrFlensmaatEenheid(int $itemnr_flensmaat_eenheid) Return the first GsMedischeHulpmiddelen filtered by the itemnr_flensmaat_eenheid column
 * @method GsMedischeHulpmiddelen findOneByGeslacht(string $geslacht) Return the first GsMedischeHulpmiddelen filtered by the geslacht column
 * @method GsMedischeHulpmiddelen findOneByGlijmiddelJanee(int $glijmiddel_janee) Return the first GsMedischeHulpmiddelen filtered by the glijmiddel_janee column
 * @method GsMedischeHulpmiddelen findOneByHergebruikMogelijkJanee(int $hergebruik_mogelijk_janee) Return the first GsMedischeHulpmiddelen filtered by the hergebruik_mogelijk_janee column
 * @method GsMedischeHulpmiddelen findOneByThnrHulpmiddelpresentatie(int $thnr_hulpmiddelpresentatie) Return the first GsMedischeHulpmiddelen filtered by the thnr_hulpmiddelpresentatie column
 * @method GsMedischeHulpmiddelen findOneByItemnrHulpmiddelpresentatie(int $itemnr_hulpmiddelpresentatie) Return the first GsMedischeHulpmiddelen filtered by the itemnr_hulpmiddelpresentatie column
 * @method GsMedischeHulpmiddelen findOneByThnrKleeflaag(int $thnr_kleeflaag) Return the first GsMedischeHulpmiddelen filtered by the thnr_kleeflaag column
 * @method GsMedischeHulpmiddelen findOneByItemnrKleeflaag(int $itemnr_kleeflaag) Return the first GsMedischeHulpmiddelen filtered by the itemnr_kleeflaag column
 * @method GsMedischeHulpmiddelen findOneByKleurThesaurusnummer(int $kleur_thesaurusnummer) Return the first GsMedischeHulpmiddelen filtered by the kleur_thesaurusnummer column
 * @method GsMedischeHulpmiddelen findOneByItemnrKleur(int $itemnr_kleur) Return the first GsMedischeHulpmiddelen filtered by the itemnr_kleur column
 * @method GsMedischeHulpmiddelen findOneByLengte1Hoeveelheid(string $lengte_1_hoeveelheid) Return the first GsMedischeHulpmiddelen filtered by the lengte_1_hoeveelheid column
 * @method GsMedischeHulpmiddelen findOneByThnrLengte1Eenheid(int $thnr_lengte_1_eenheid) Return the first GsMedischeHulpmiddelen filtered by the thnr_lengte_1_eenheid column
 * @method GsMedischeHulpmiddelen findOneByItemnrLengte1Eenheid(int $itemnr_lengte_1_eenheid) Return the first GsMedischeHulpmiddelen filtered by the itemnr_lengte_1_eenheid column
 * @method GsMedischeHulpmiddelen findOneByLengte2Hoeveelheid(string $lengte_2_hoeveelheid) Return the first GsMedischeHulpmiddelen filtered by the lengte_2_hoeveelheid column
 * @method GsMedischeHulpmiddelen findOneByThnrLengte2Eenheid(int $thnr_lengte_2_eenheid) Return the first GsMedischeHulpmiddelen filtered by the thnr_lengte_2_eenheid column
 * @method GsMedischeHulpmiddelen findOneByItemnrLengte2Eenheid(int $itemnr_lengte_2_eenheid) Return the first GsMedischeHulpmiddelen filtered by the itemnr_lengte_2_eenheid column
 * @method GsMedischeHulpmiddelen findOneByMaasgrootte(string $maasgrootte) Return the first GsMedischeHulpmiddelen filtered by the maasgrootte column
 * @method GsMedischeHulpmiddelen findOneByThnrMaataanduiding(int $thnr_maataanduiding) Return the first GsMedischeHulpmiddelen filtered by the thnr_maataanduiding column
 * @method GsMedischeHulpmiddelen findOneByItemnrMaataanduiding(int $itemnr_maataanduiding) Return the first GsMedischeHulpmiddelen filtered by the itemnr_maataanduiding column
 * @method GsMedischeHulpmiddelen findOneByThnrMateriaal(int $thnr_materiaal) Return the first GsMedischeHulpmiddelen filtered by the thnr_materiaal column
 * @method GsMedischeHulpmiddelen findOneByItemnrMateriaal(int $itemnr_materiaal) Return the first GsMedischeHulpmiddelen filtered by the itemnr_materiaal column
 * @method GsMedischeHulpmiddelen findOneByNietAanDeWondHechtend(string $niet_aan_de_wond_hechtend) Return the first GsMedischeHulpmiddelen filtered by the niet_aan_de_wond_hechtend column
 * @method GsMedischeHulpmiddelen findOneByThnrPlaatsSluiting(int $thnr_plaats_sluiting) Return the first GsMedischeHulpmiddelen filtered by the thnr_plaats_sluiting column
 * @method GsMedischeHulpmiddelen findOneByItemnrPlaatsSluiting(int $itemnr_plaats_sluiting) Return the first GsMedischeHulpmiddelen filtered by the itemnr_plaats_sluiting column
 * @method GsMedischeHulpmiddelen findOneByRekpercentage(int $rekpercentage) Return the first GsMedischeHulpmiddelen filtered by the rekpercentage column
 * @method GsMedischeHulpmiddelen findOneByRekrichting(string $rekrichting) Return the first GsMedischeHulpmiddelen filtered by the rekrichting column
 * @method GsMedischeHulpmiddelen findOneByThnrRekaanduiding(int $thnr_rekaanduiding) Return the first GsMedischeHulpmiddelen filtered by the thnr_rekaanduiding column
 * @method GsMedischeHulpmiddelen findOneByItemnrRekaanduiding(int $itemnr_rekaanduiding) Return the first GsMedischeHulpmiddelen filtered by the itemnr_rekaanduiding column
 * @method GsMedischeHulpmiddelen findOneByRontgencontrastdraadAanwezigJn(int $rontgencontrastdraad_aanwezig_jn) Return the first GsMedischeHulpmiddelen filtered by the rontgencontrastdraad_aanwezig_jn column
 * @method GsMedischeHulpmiddelen findOneByThnrHulpmiddelsysteem(int $thnr_hulpmiddelsysteem) Return the first GsMedischeHulpmiddelen filtered by the thnr_hulpmiddelsysteem column
 * @method GsMedischeHulpmiddelen findOneByItemnrHulpmiddelsysteem(int $itemnr_hulpmiddelsysteem) Return the first GsMedischeHulpmiddelen filtered by the itemnr_hulpmiddelsysteem column
 * @method GsMedischeHulpmiddelen findOneByTerugslagvoorzieningJanee(int $terugslagvoorziening_janee) Return the first GsMedischeHulpmiddelen filtered by the terugslagvoorziening_janee column
 * @method GsMedischeHulpmiddelen findOneByToepassingAfnameverblijf(string $toepassing_afnameverblijf) Return the first GsMedischeHulpmiddelen filtered by the toepassing_afnameverblijf column
 * @method GsMedischeHulpmiddelen findOneByTypePuntNelatontiemann(string $type_punt_nelatontiemann) Return the first GsMedischeHulpmiddelen filtered by the type_punt_nelatontiemann column
 * @method GsMedischeHulpmiddelen findOneByVolumeHoeveelheid(string $volume_hoeveelheid) Return the first GsMedischeHulpmiddelen filtered by the volume_hoeveelheid column
 * @method GsMedischeHulpmiddelen findOneByThnrVolumeEenheid(int $thnr_volume_eenheid) Return the first GsMedischeHulpmiddelen filtered by the thnr_volume_eenheid column
 * @method GsMedischeHulpmiddelen findOneByItemnrVolumeEenheid(int $itemnr_volume_eenheid) Return the first GsMedischeHulpmiddelen filtered by the itemnr_volume_eenheid column
 * @method GsMedischeHulpmiddelen findOneByThnrVorm(int $thnr_vorm) Return the first GsMedischeHulpmiddelen filtered by the thnr_vorm column
 * @method GsMedischeHulpmiddelen findOneByItemnrVorm(int $itemnr_vorm) Return the first GsMedischeHulpmiddelen filtered by the itemnr_vorm column
 * @method GsMedischeHulpmiddelen findOneByThnrVormVanDeOpening(int $thnr_vorm_van_de_opening) Return the first GsMedischeHulpmiddelen filtered by the thnr_vorm_van_de_opening column
 * @method GsMedischeHulpmiddelen findOneByItemnrVormVanDeOpening(int $itemnr_vorm_van_de_opening) Return the first GsMedischeHulpmiddelen filtered by the itemnr_vorm_van_de_opening column
 * @method GsMedischeHulpmiddelen findOneByThnrVormVanDePlaat(int $thnr_vorm_van_de_plaat) Return the first GsMedischeHulpmiddelen filtered by the thnr_vorm_van_de_plaat column
 * @method GsMedischeHulpmiddelen findOneByItemnrVormVanDePlaat(int $itemnr_vorm_van_de_plaat) Return the first GsMedischeHulpmiddelen filtered by the itemnr_vorm_van_de_plaat column
 * @method GsMedischeHulpmiddelen findOneByWaterbestendigJanee(int $waterbestendig_janee) Return the first GsMedischeHulpmiddelen filtered by the waterbestendig_janee column
 * @method GsMedischeHulpmiddelen findOneByWegspoelbaarJanee(int $wegspoelbaar_janee) Return the first GsMedischeHulpmiddelen filtered by the wegspoelbaar_janee column
 * @method GsMedischeHulpmiddelen findOneBySplitJanee(int $split_janee) Return the first GsMedischeHulpmiddelen filtered by the split_janee column
 * @method GsMedischeHulpmiddelen findOneByCuffJanee(int $cuff_janee) Return the first GsMedischeHulpmiddelen filtered by the cuff_janee column
 * @method GsMedischeHulpmiddelen findOneByEnkelOfDubbelzijdig(string $enkel_of_dubbelzijdig) Return the first GsMedischeHulpmiddelen filtered by the enkel_of_dubbelzijdig column
 * @method GsMedischeHulpmiddelen findOneByThnrAbsorptievermogen(int $thnr_absorptievermogen) Return the first GsMedischeHulpmiddelen filtered by the thnr_absorptievermogen column
 * @method GsMedischeHulpmiddelen findOneByItemnrAbsorptievermogen(int $itemnr_absorptievermogen) Return the first GsMedischeHulpmiddelen filtered by the itemnr_absorptievermogen column
 * @method GsMedischeHulpmiddelen findOneBySoortIncontinentieUrinefaeces(string $soort_incontinentie_urinefaeces) Return the first GsMedischeHulpmiddelen filtered by the soort_incontinentie_urinefaeces column
 * @method GsMedischeHulpmiddelen findOneByThnrToebehoren(int $thnr_toebehoren) Return the first GsMedischeHulpmiddelen filtered by the thnr_toebehoren column
 * @method GsMedischeHulpmiddelen findOneByItemnrToebehoren(int $itemnr_toebehoren) Return the first GsMedischeHulpmiddelen filtered by the itemnr_toebehoren column
 * @method GsMedischeHulpmiddelen findOneByThnrFysischeToestand(int $thnr_fysische_toestand) Return the first GsMedischeHulpmiddelen filtered by the thnr_fysische_toestand column
 * @method GsMedischeHulpmiddelen findOneByItemnrFysischeToestand(int $itemnr_fysische_toestand) Return the first GsMedischeHulpmiddelen filtered by the itemnr_fysische_toestand column
 * @method GsMedischeHulpmiddelen findOneByImpregneermiddelSamenstelling(int $impregneermiddel_samenstelling) Return the first GsMedischeHulpmiddelen filtered by the impregneermiddel_samenstelling column
 *
 * @method array findByBestandnummer(int $bestandnummer) Return GsMedischeHulpmiddelen objects filtered by the bestandnummer column
 * @method array findByMutatiekode(int $mutatiekode) Return GsMedischeHulpmiddelen objects filtered by the mutatiekode column
 * @method array findByMedischHulpmiddelkode(int $medisch_hulpmiddelkode) Return GsMedischeHulpmiddelen objects filtered by the medisch_hulpmiddelkode column
 * @method array findBySubstitutieKode(int $substitutie_kode) Return GsMedischeHulpmiddelen objects filtered by the substitutie_kode column
 * @method array findByThnrSoortHulpmiddel(int $thnr_soort_hulpmiddel) Return GsMedischeHulpmiddelen objects filtered by the thnr_soort_hulpmiddel column
 * @method array findBySoortHulpmiddelkode(int $soort_hulpmiddelkode) Return GsMedischeHulpmiddelen objects filtered by the soort_hulpmiddelkode column
 * @method array findByGesteriliseerdJanee(int $gesteriliseerd_janee) Return GsMedischeHulpmiddelen objects filtered by the gesteriliseerd_janee column
 * @method array findByThnrSterilisatiemethode(int $thnr_sterilisatiemethode) Return GsMedischeHulpmiddelen objects filtered by the thnr_sterilisatiemethode column
 * @method array findByItemnrSterilisatiemethode(int $itemnr_sterilisatiemethode) Return GsMedischeHulpmiddelen objects filtered by the itemnr_sterilisatiemethode column
 * @method array findByThnrSluiting(int $thnr_sluiting) Return GsMedischeHulpmiddelen objects filtered by the thnr_sluiting column
 * @method array findByItemnrSluiting(int $itemnr_sluiting) Return GsMedischeHulpmiddelen objects filtered by the itemnr_sluiting column
 * @method array findByAantalDelen(int $aantal_delen) Return GsMedischeHulpmiddelen objects filtered by the aantal_delen column
 * @method array findByAantalKanalen(int $aantal_kanalen) Return GsMedischeHulpmiddelen objects filtered by the aantal_kanalen column
 * @method array findByThnrBevestiging(int $thnr_bevestiging) Return GsMedischeHulpmiddelen objects filtered by the thnr_bevestiging column
 * @method array findByItemnrBevestiging(int $itemnr_bevestiging) Return GsMedischeHulpmiddelen objects filtered by the itemnr_bevestiging column
 * @method array findByBreedteHoeveelheid(string $breedte_hoeveelheid) Return GsMedischeHulpmiddelen objects filtered by the breedte_hoeveelheid column
 * @method array findByThnrBreedteEenheid(int $thnr_breedte_eenheid) Return GsMedischeHulpmiddelen objects filtered by the thnr_breedte_eenheid column
 * @method array findByItemnrBreedteEenheid(int $itemnr_breedte_eenheid) Return GsMedischeHulpmiddelen objects filtered by the itemnr_breedte_eenheid column
 * @method array findByDrukklasse(int $drukklasse) Return GsMedischeHulpmiddelen objects filtered by the drukklasse column
 * @method array findByDiameterHoeveelheid(string $diameter_hoeveelheid) Return GsMedischeHulpmiddelen objects filtered by the diameter_hoeveelheid column
 * @method array findByThnrDiameterEenheid(int $thnr_diameter_eenheid) Return GsMedischeHulpmiddelen objects filtered by the thnr_diameter_eenheid column
 * @method array findByItemnrDiameterEenheid(int $itemnr_diameter_eenheid) Return GsMedischeHulpmiddelen objects filtered by the itemnr_diameter_eenheid column
 * @method array findByDichtOfOpenGeweven(string $dicht_of_open_geweven) Return GsMedischeHulpmiddelen objects filtered by the dicht_of_open_geweven column
 * @method array findByThnrDoorlaatbaarheid(int $thnr_doorlaatbaarheid) Return GsMedischeHulpmiddelen objects filtered by the thnr_doorlaatbaarheid column
 * @method array findByItemnrDoorlaatbaarheid(int $itemnr_doorlaatbaarheid) Return GsMedischeHulpmiddelen objects filtered by the itemnr_doorlaatbaarheid column
 * @method array findByDraagbaarJanee(int $draagbaar_janee) Return GsMedischeHulpmiddelen objects filtered by the draagbaar_janee column
 * @method array findByThnrDraagplaats(int $thnr_draagplaats) Return GsMedischeHulpmiddelen objects filtered by the thnr_draagplaats column
 * @method array findByItemnrDraagplaats(int $itemnr_draagplaats) Return GsMedischeHulpmiddelen objects filtered by the itemnr_draagplaats column
 * @method array findByThnrExtraKenmerk(int $thnr_extra_kenmerk) Return GsMedischeHulpmiddelen objects filtered by the thnr_extra_kenmerk column
 * @method array findByItemNrExtraKenmerk(int $item_nr_extra_kenmerk) Return GsMedischeHulpmiddelen objects filtered by the item_nr_extra_kenmerk column
 * @method array findByFilterJanee(int $filter_janee) Return GsMedischeHulpmiddelen objects filtered by the filter_janee column
 * @method array findByFlensmaatHoeveelheid(string $flensmaat_hoeveelheid) Return GsMedischeHulpmiddelen objects filtered by the flensmaat_hoeveelheid column
 * @method array findByThnrFlensmaatEenheid(int $thnr_flensmaat_eenheid) Return GsMedischeHulpmiddelen objects filtered by the thnr_flensmaat_eenheid column
 * @method array findByItemnrFlensmaatEenheid(int $itemnr_flensmaat_eenheid) Return GsMedischeHulpmiddelen objects filtered by the itemnr_flensmaat_eenheid column
 * @method array findByGeslacht(string $geslacht) Return GsMedischeHulpmiddelen objects filtered by the geslacht column
 * @method array findByGlijmiddelJanee(int $glijmiddel_janee) Return GsMedischeHulpmiddelen objects filtered by the glijmiddel_janee column
 * @method array findByHergebruikMogelijkJanee(int $hergebruik_mogelijk_janee) Return GsMedischeHulpmiddelen objects filtered by the hergebruik_mogelijk_janee column
 * @method array findByThnrHulpmiddelpresentatie(int $thnr_hulpmiddelpresentatie) Return GsMedischeHulpmiddelen objects filtered by the thnr_hulpmiddelpresentatie column
 * @method array findByItemnrHulpmiddelpresentatie(int $itemnr_hulpmiddelpresentatie) Return GsMedischeHulpmiddelen objects filtered by the itemnr_hulpmiddelpresentatie column
 * @method array findByThnrKleeflaag(int $thnr_kleeflaag) Return GsMedischeHulpmiddelen objects filtered by the thnr_kleeflaag column
 * @method array findByItemnrKleeflaag(int $itemnr_kleeflaag) Return GsMedischeHulpmiddelen objects filtered by the itemnr_kleeflaag column
 * @method array findByKleurThesaurusnummer(int $kleur_thesaurusnummer) Return GsMedischeHulpmiddelen objects filtered by the kleur_thesaurusnummer column
 * @method array findByItemnrKleur(int $itemnr_kleur) Return GsMedischeHulpmiddelen objects filtered by the itemnr_kleur column
 * @method array findByLengte1Hoeveelheid(string $lengte_1_hoeveelheid) Return GsMedischeHulpmiddelen objects filtered by the lengte_1_hoeveelheid column
 * @method array findByThnrLengte1Eenheid(int $thnr_lengte_1_eenheid) Return GsMedischeHulpmiddelen objects filtered by the thnr_lengte_1_eenheid column
 * @method array findByItemnrLengte1Eenheid(int $itemnr_lengte_1_eenheid) Return GsMedischeHulpmiddelen objects filtered by the itemnr_lengte_1_eenheid column
 * @method array findByLengte2Hoeveelheid(string $lengte_2_hoeveelheid) Return GsMedischeHulpmiddelen objects filtered by the lengte_2_hoeveelheid column
 * @method array findByThnrLengte2Eenheid(int $thnr_lengte_2_eenheid) Return GsMedischeHulpmiddelen objects filtered by the thnr_lengte_2_eenheid column
 * @method array findByItemnrLengte2Eenheid(int $itemnr_lengte_2_eenheid) Return GsMedischeHulpmiddelen objects filtered by the itemnr_lengte_2_eenheid column
 * @method array findByMaasgrootte(string $maasgrootte) Return GsMedischeHulpmiddelen objects filtered by the maasgrootte column
 * @method array findByThnrMaataanduiding(int $thnr_maataanduiding) Return GsMedischeHulpmiddelen objects filtered by the thnr_maataanduiding column
 * @method array findByItemnrMaataanduiding(int $itemnr_maataanduiding) Return GsMedischeHulpmiddelen objects filtered by the itemnr_maataanduiding column
 * @method array findByThnrMateriaal(int $thnr_materiaal) Return GsMedischeHulpmiddelen objects filtered by the thnr_materiaal column
 * @method array findByItemnrMateriaal(int $itemnr_materiaal) Return GsMedischeHulpmiddelen objects filtered by the itemnr_materiaal column
 * @method array findByNietAanDeWondHechtend(string $niet_aan_de_wond_hechtend) Return GsMedischeHulpmiddelen objects filtered by the niet_aan_de_wond_hechtend column
 * @method array findByThnrPlaatsSluiting(int $thnr_plaats_sluiting) Return GsMedischeHulpmiddelen objects filtered by the thnr_plaats_sluiting column
 * @method array findByItemnrPlaatsSluiting(int $itemnr_plaats_sluiting) Return GsMedischeHulpmiddelen objects filtered by the itemnr_plaats_sluiting column
 * @method array findByRekpercentage(int $rekpercentage) Return GsMedischeHulpmiddelen objects filtered by the rekpercentage column
 * @method array findByRekrichting(string $rekrichting) Return GsMedischeHulpmiddelen objects filtered by the rekrichting column
 * @method array findByThnrRekaanduiding(int $thnr_rekaanduiding) Return GsMedischeHulpmiddelen objects filtered by the thnr_rekaanduiding column
 * @method array findByItemnrRekaanduiding(int $itemnr_rekaanduiding) Return GsMedischeHulpmiddelen objects filtered by the itemnr_rekaanduiding column
 * @method array findByRontgencontrastdraadAanwezigJn(int $rontgencontrastdraad_aanwezig_jn) Return GsMedischeHulpmiddelen objects filtered by the rontgencontrastdraad_aanwezig_jn column
 * @method array findByThnrHulpmiddelsysteem(int $thnr_hulpmiddelsysteem) Return GsMedischeHulpmiddelen objects filtered by the thnr_hulpmiddelsysteem column
 * @method array findByItemnrHulpmiddelsysteem(int $itemnr_hulpmiddelsysteem) Return GsMedischeHulpmiddelen objects filtered by the itemnr_hulpmiddelsysteem column
 * @method array findByTerugslagvoorzieningJanee(int $terugslagvoorziening_janee) Return GsMedischeHulpmiddelen objects filtered by the terugslagvoorziening_janee column
 * @method array findByToepassingAfnameverblijf(string $toepassing_afnameverblijf) Return GsMedischeHulpmiddelen objects filtered by the toepassing_afnameverblijf column
 * @method array findByTypePuntNelatontiemann(string $type_punt_nelatontiemann) Return GsMedischeHulpmiddelen objects filtered by the type_punt_nelatontiemann column
 * @method array findByVolumeHoeveelheid(string $volume_hoeveelheid) Return GsMedischeHulpmiddelen objects filtered by the volume_hoeveelheid column
 * @method array findByThnrVolumeEenheid(int $thnr_volume_eenheid) Return GsMedischeHulpmiddelen objects filtered by the thnr_volume_eenheid column
 * @method array findByItemnrVolumeEenheid(int $itemnr_volume_eenheid) Return GsMedischeHulpmiddelen objects filtered by the itemnr_volume_eenheid column
 * @method array findByThnrVorm(int $thnr_vorm) Return GsMedischeHulpmiddelen objects filtered by the thnr_vorm column
 * @method array findByItemnrVorm(int $itemnr_vorm) Return GsMedischeHulpmiddelen objects filtered by the itemnr_vorm column
 * @method array findByThnrVormVanDeOpening(int $thnr_vorm_van_de_opening) Return GsMedischeHulpmiddelen objects filtered by the thnr_vorm_van_de_opening column
 * @method array findByItemnrVormVanDeOpening(int $itemnr_vorm_van_de_opening) Return GsMedischeHulpmiddelen objects filtered by the itemnr_vorm_van_de_opening column
 * @method array findByThnrVormVanDePlaat(int $thnr_vorm_van_de_plaat) Return GsMedischeHulpmiddelen objects filtered by the thnr_vorm_van_de_plaat column
 * @method array findByItemnrVormVanDePlaat(int $itemnr_vorm_van_de_plaat) Return GsMedischeHulpmiddelen objects filtered by the itemnr_vorm_van_de_plaat column
 * @method array findByWaterbestendigJanee(int $waterbestendig_janee) Return GsMedischeHulpmiddelen objects filtered by the waterbestendig_janee column
 * @method array findByWegspoelbaarJanee(int $wegspoelbaar_janee) Return GsMedischeHulpmiddelen objects filtered by the wegspoelbaar_janee column
 * @method array findBySplitJanee(int $split_janee) Return GsMedischeHulpmiddelen objects filtered by the split_janee column
 * @method array findByCuffJanee(int $cuff_janee) Return GsMedischeHulpmiddelen objects filtered by the cuff_janee column
 * @method array findByEnkelOfDubbelzijdig(string $enkel_of_dubbelzijdig) Return GsMedischeHulpmiddelen objects filtered by the enkel_of_dubbelzijdig column
 * @method array findByThnrAbsorptievermogen(int $thnr_absorptievermogen) Return GsMedischeHulpmiddelen objects filtered by the thnr_absorptievermogen column
 * @method array findByItemnrAbsorptievermogen(int $itemnr_absorptievermogen) Return GsMedischeHulpmiddelen objects filtered by the itemnr_absorptievermogen column
 * @method array findBySoortIncontinentieUrinefaeces(string $soort_incontinentie_urinefaeces) Return GsMedischeHulpmiddelen objects filtered by the soort_incontinentie_urinefaeces column
 * @method array findByThnrToebehoren(int $thnr_toebehoren) Return GsMedischeHulpmiddelen objects filtered by the thnr_toebehoren column
 * @method array findByItemnrToebehoren(int $itemnr_toebehoren) Return GsMedischeHulpmiddelen objects filtered by the itemnr_toebehoren column
 * @method array findByThnrFysischeToestand(int $thnr_fysische_toestand) Return GsMedischeHulpmiddelen objects filtered by the thnr_fysische_toestand column
 * @method array findByItemnrFysischeToestand(int $itemnr_fysische_toestand) Return GsMedischeHulpmiddelen objects filtered by the itemnr_fysische_toestand column
 * @method array findByImpregneermiddelSamenstelling(int $impregneermiddel_samenstelling) Return GsMedischeHulpmiddelen objects filtered by the impregneermiddel_samenstelling column
 */
abstract class BaseGsMedischeHulpmiddelenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGsMedischeHulpmiddelenQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'default';
        }
        if (null === $modelName) {
            $modelName = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsMedischeHulpmiddelen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GsMedischeHulpmiddelenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GsMedischeHulpmiddelenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GsMedischeHulpmiddelenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GsMedischeHulpmiddelenQuery) {
            return $criteria;
        }
        $query = new GsMedischeHulpmiddelenQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$medisch_hulpmiddelkode, $soort_hulpmiddelkode]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   GsMedischeHulpmiddelen|GsMedischeHulpmiddelen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GsMedischeHulpmiddelenPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GsMedischeHulpmiddelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 GsMedischeHulpmiddelen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `bestandnummer`, `mutatiekode`, `medisch_hulpmiddelkode`, `substitutie_kode`, `thnr_soort_hulpmiddel`, `soort_hulpmiddelkode`, `gesteriliseerd_janee`, `thnr_sterilisatiemethode`, `itemnr_sterilisatiemethode`, `thnr_sluiting`, `itemnr_sluiting`, `aantal_delen`, `aantal_kanalen`, `thnr_bevestiging`, `itemnr_bevestiging`, `breedte_hoeveelheid`, `thnr_breedte_eenheid`, `itemnr_breedte_eenheid`, `drukklasse`, `diameter_hoeveelheid`, `thnr_diameter_eenheid`, `itemnr_diameter_eenheid`, `dicht_of_open_geweven`, `thnr_doorlaatbaarheid`, `itemnr_doorlaatbaarheid`, `draagbaar_janee`, `thnr_draagplaats`, `itemnr_draagplaats`, `thnr_extra_kenmerk`, `item_nr_extra_kenmerk`, `filter_janee`, `flensmaat_hoeveelheid`, `thnr_flensmaat_eenheid`, `itemnr_flensmaat_eenheid`, `geslacht`, `glijmiddel_janee`, `hergebruik_mogelijk_janee`, `thnr_hulpmiddelpresentatie`, `itemnr_hulpmiddelpresentatie`, `thnr_kleeflaag`, `itemnr_kleeflaag`, `kleur_thesaurusnummer`, `itemnr_kleur`, `lengte_1_hoeveelheid`, `thnr_lengte_1_eenheid`, `itemnr_lengte_1_eenheid`, `lengte_2_hoeveelheid`, `thnr_lengte_2_eenheid`, `itemnr_lengte_2_eenheid`, `maasgrootte`, `thnr_maataanduiding`, `itemnr_maataanduiding`, `thnr_materiaal`, `itemnr_materiaal`, `niet_aan_de_wond_hechtend`, `thnr_plaats_sluiting`, `itemnr_plaats_sluiting`, `rekpercentage`, `rekrichting`, `thnr_rekaanduiding`, `itemnr_rekaanduiding`, `rontgencontrastdraad_aanwezig_jn`, `thnr_hulpmiddelsysteem`, `itemnr_hulpmiddelsysteem`, `terugslagvoorziening_janee`, `toepassing_afnameverblijf`, `type_punt_nelatontiemann`, `volume_hoeveelheid`, `thnr_volume_eenheid`, `itemnr_volume_eenheid`, `thnr_vorm`, `itemnr_vorm`, `thnr_vorm_van_de_opening`, `itemnr_vorm_van_de_opening`, `thnr_vorm_van_de_plaat`, `itemnr_vorm_van_de_plaat`, `waterbestendig_janee`, `wegspoelbaar_janee`, `split_janee`, `cuff_janee`, `enkel_of_dubbelzijdig`, `thnr_absorptievermogen`, `itemnr_absorptievermogen`, `soort_incontinentie_urinefaeces`, `thnr_toebehoren`, `itemnr_toebehoren`, `thnr_fysische_toestand`, `itemnr_fysische_toestand`, `impregneermiddel_samenstelling` FROM `gs_medische_hulpmiddelen` WHERE `medisch_hulpmiddelkode` = :p0 AND `soort_hulpmiddelkode` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new GsMedischeHulpmiddelen();
            $obj->hydrate($row);
            GsMedischeHulpmiddelenPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return GsMedischeHulpmiddelen|GsMedischeHulpmiddelen[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|GsMedischeHulpmiddelen[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the bestandnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByBestandnummer(1234); // WHERE bestandnummer = 1234
     * $query->filterByBestandnummer(array(12, 34)); // WHERE bestandnummer IN (12, 34)
     * $query->filterByBestandnummer(array('min' => 12)); // WHERE bestandnummer >= 12
     * $query->filterByBestandnummer(array('max' => 12)); // WHERE bestandnummer <= 12
     * </code>
     *
     * @param     mixed $bestandnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByBestandnummer($bestandnummer = null, $comparison = null)
    {
        if (is_array($bestandnummer)) {
            $useMinMax = false;
            if (isset($bestandnummer['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::BESTANDNUMMER, $bestandnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestandnummer['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::BESTANDNUMMER, $bestandnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::BESTANDNUMMER, $bestandnummer, $comparison);
    }

    /**
     * Filter the query on the mutatiekode column
     *
     * Example usage:
     * <code>
     * $query->filterByMutatiekode(1234); // WHERE mutatiekode = 1234
     * $query->filterByMutatiekode(array(12, 34)); // WHERE mutatiekode IN (12, 34)
     * $query->filterByMutatiekode(array('min' => 12)); // WHERE mutatiekode >= 12
     * $query->filterByMutatiekode(array('max' => 12)); // WHERE mutatiekode <= 12
     * </code>
     *
     * @param     mixed $mutatiekode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByMutatiekode($mutatiekode = null, $comparison = null)
    {
        if (is_array($mutatiekode)) {
            $useMinMax = false;
            if (isset($mutatiekode['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::MUTATIEKODE, $mutatiekode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mutatiekode['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::MUTATIEKODE, $mutatiekode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::MUTATIEKODE, $mutatiekode, $comparison);
    }

    /**
     * Filter the query on the medisch_hulpmiddelkode column
     *
     * Example usage:
     * <code>
     * $query->filterByMedischHulpmiddelkode(1234); // WHERE medisch_hulpmiddelkode = 1234
     * $query->filterByMedischHulpmiddelkode(array(12, 34)); // WHERE medisch_hulpmiddelkode IN (12, 34)
     * $query->filterByMedischHulpmiddelkode(array('min' => 12)); // WHERE medisch_hulpmiddelkode >= 12
     * $query->filterByMedischHulpmiddelkode(array('max' => 12)); // WHERE medisch_hulpmiddelkode <= 12
     * </code>
     *
     * @param     mixed $medischHulpmiddelkode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByMedischHulpmiddelkode($medischHulpmiddelkode = null, $comparison = null)
    {
        if (is_array($medischHulpmiddelkode)) {
            $useMinMax = false;
            if (isset($medischHulpmiddelkode['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE, $medischHulpmiddelkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($medischHulpmiddelkode['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE, $medischHulpmiddelkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE, $medischHulpmiddelkode, $comparison);
    }

    /**
     * Filter the query on the substitutie_kode column
     *
     * Example usage:
     * <code>
     * $query->filterBySubstitutieKode(1234); // WHERE substitutie_kode = 1234
     * $query->filterBySubstitutieKode(array(12, 34)); // WHERE substitutie_kode IN (12, 34)
     * $query->filterBySubstitutieKode(array('min' => 12)); // WHERE substitutie_kode >= 12
     * $query->filterBySubstitutieKode(array('max' => 12)); // WHERE substitutie_kode <= 12
     * </code>
     *
     * @param     mixed $substitutieKode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterBySubstitutieKode($substitutieKode = null, $comparison = null)
    {
        if (is_array($substitutieKode)) {
            $useMinMax = false;
            if (isset($substitutieKode['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::SUBSTITUTIE_KODE, $substitutieKode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($substitutieKode['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::SUBSTITUTIE_KODE, $substitutieKode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::SUBSTITUTIE_KODE, $substitutieKode, $comparison);
    }

    /**
     * Filter the query on the thnr_soort_hulpmiddel column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrSoortHulpmiddel(1234); // WHERE thnr_soort_hulpmiddel = 1234
     * $query->filterByThnrSoortHulpmiddel(array(12, 34)); // WHERE thnr_soort_hulpmiddel IN (12, 34)
     * $query->filterByThnrSoortHulpmiddel(array('min' => 12)); // WHERE thnr_soort_hulpmiddel >= 12
     * $query->filterByThnrSoortHulpmiddel(array('max' => 12)); // WHERE thnr_soort_hulpmiddel <= 12
     * </code>
     *
     * @param     mixed $thnrSoortHulpmiddel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrSoortHulpmiddel($thnrSoortHulpmiddel = null, $comparison = null)
    {
        if (is_array($thnrSoortHulpmiddel)) {
            $useMinMax = false;
            if (isset($thnrSoortHulpmiddel['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_SOORT_HULPMIDDEL, $thnrSoortHulpmiddel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrSoortHulpmiddel['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_SOORT_HULPMIDDEL, $thnrSoortHulpmiddel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_SOORT_HULPMIDDEL, $thnrSoortHulpmiddel, $comparison);
    }

    /**
     * Filter the query on the soort_hulpmiddelkode column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortHulpmiddelkode(1234); // WHERE soort_hulpmiddelkode = 1234
     * $query->filterBySoortHulpmiddelkode(array(12, 34)); // WHERE soort_hulpmiddelkode IN (12, 34)
     * $query->filterBySoortHulpmiddelkode(array('min' => 12)); // WHERE soort_hulpmiddelkode >= 12
     * $query->filterBySoortHulpmiddelkode(array('max' => 12)); // WHERE soort_hulpmiddelkode <= 12
     * </code>
     *
     * @param     mixed $soortHulpmiddelkode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterBySoortHulpmiddelkode($soortHulpmiddelkode = null, $comparison = null)
    {
        if (is_array($soortHulpmiddelkode)) {
            $useMinMax = false;
            if (isset($soortHulpmiddelkode['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE, $soortHulpmiddelkode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($soortHulpmiddelkode['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE, $soortHulpmiddelkode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE, $soortHulpmiddelkode, $comparison);
    }

    /**
     * Filter the query on the gesteriliseerd_janee column
     *
     * Example usage:
     * <code>
     * $query->filterByGesteriliseerdJanee(1234); // WHERE gesteriliseerd_janee = 1234
     * $query->filterByGesteriliseerdJanee(array(12, 34)); // WHERE gesteriliseerd_janee IN (12, 34)
     * $query->filterByGesteriliseerdJanee(array('min' => 12)); // WHERE gesteriliseerd_janee >= 12
     * $query->filterByGesteriliseerdJanee(array('max' => 12)); // WHERE gesteriliseerd_janee <= 12
     * </code>
     *
     * @param     mixed $gesteriliseerdJanee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByGesteriliseerdJanee($gesteriliseerdJanee = null, $comparison = null)
    {
        if (is_array($gesteriliseerdJanee)) {
            $useMinMax = false;
            if (isset($gesteriliseerdJanee['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::GESTERILISEERD_JANEE, $gesteriliseerdJanee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gesteriliseerdJanee['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::GESTERILISEERD_JANEE, $gesteriliseerdJanee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::GESTERILISEERD_JANEE, $gesteriliseerdJanee, $comparison);
    }

    /**
     * Filter the query on the thnr_sterilisatiemethode column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrSterilisatiemethode(1234); // WHERE thnr_sterilisatiemethode = 1234
     * $query->filterByThnrSterilisatiemethode(array(12, 34)); // WHERE thnr_sterilisatiemethode IN (12, 34)
     * $query->filterByThnrSterilisatiemethode(array('min' => 12)); // WHERE thnr_sterilisatiemethode >= 12
     * $query->filterByThnrSterilisatiemethode(array('max' => 12)); // WHERE thnr_sterilisatiemethode <= 12
     * </code>
     *
     * @param     mixed $thnrSterilisatiemethode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrSterilisatiemethode($thnrSterilisatiemethode = null, $comparison = null)
    {
        if (is_array($thnrSterilisatiemethode)) {
            $useMinMax = false;
            if (isset($thnrSterilisatiemethode['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_STERILISATIEMETHODE, $thnrSterilisatiemethode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrSterilisatiemethode['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_STERILISATIEMETHODE, $thnrSterilisatiemethode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_STERILISATIEMETHODE, $thnrSterilisatiemethode, $comparison);
    }

    /**
     * Filter the query on the itemnr_sterilisatiemethode column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrSterilisatiemethode(1234); // WHERE itemnr_sterilisatiemethode = 1234
     * $query->filterByItemnrSterilisatiemethode(array(12, 34)); // WHERE itemnr_sterilisatiemethode IN (12, 34)
     * $query->filterByItemnrSterilisatiemethode(array('min' => 12)); // WHERE itemnr_sterilisatiemethode >= 12
     * $query->filterByItemnrSterilisatiemethode(array('max' => 12)); // WHERE itemnr_sterilisatiemethode <= 12
     * </code>
     *
     * @param     mixed $itemnrSterilisatiemethode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrSterilisatiemethode($itemnrSterilisatiemethode = null, $comparison = null)
    {
        if (is_array($itemnrSterilisatiemethode)) {
            $useMinMax = false;
            if (isset($itemnrSterilisatiemethode['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_STERILISATIEMETHODE, $itemnrSterilisatiemethode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrSterilisatiemethode['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_STERILISATIEMETHODE, $itemnrSterilisatiemethode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_STERILISATIEMETHODE, $itemnrSterilisatiemethode, $comparison);
    }

    /**
     * Filter the query on the thnr_sluiting column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrSluiting(1234); // WHERE thnr_sluiting = 1234
     * $query->filterByThnrSluiting(array(12, 34)); // WHERE thnr_sluiting IN (12, 34)
     * $query->filterByThnrSluiting(array('min' => 12)); // WHERE thnr_sluiting >= 12
     * $query->filterByThnrSluiting(array('max' => 12)); // WHERE thnr_sluiting <= 12
     * </code>
     *
     * @param     mixed $thnrSluiting The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrSluiting($thnrSluiting = null, $comparison = null)
    {
        if (is_array($thnrSluiting)) {
            $useMinMax = false;
            if (isset($thnrSluiting['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_SLUITING, $thnrSluiting['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrSluiting['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_SLUITING, $thnrSluiting['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_SLUITING, $thnrSluiting, $comparison);
    }

    /**
     * Filter the query on the itemnr_sluiting column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrSluiting(1234); // WHERE itemnr_sluiting = 1234
     * $query->filterByItemnrSluiting(array(12, 34)); // WHERE itemnr_sluiting IN (12, 34)
     * $query->filterByItemnrSluiting(array('min' => 12)); // WHERE itemnr_sluiting >= 12
     * $query->filterByItemnrSluiting(array('max' => 12)); // WHERE itemnr_sluiting <= 12
     * </code>
     *
     * @param     mixed $itemnrSluiting The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrSluiting($itemnrSluiting = null, $comparison = null)
    {
        if (is_array($itemnrSluiting)) {
            $useMinMax = false;
            if (isset($itemnrSluiting['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_SLUITING, $itemnrSluiting['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrSluiting['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_SLUITING, $itemnrSluiting['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_SLUITING, $itemnrSluiting, $comparison);
    }

    /**
     * Filter the query on the aantal_delen column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalDelen(1234); // WHERE aantal_delen = 1234
     * $query->filterByAantalDelen(array(12, 34)); // WHERE aantal_delen IN (12, 34)
     * $query->filterByAantalDelen(array('min' => 12)); // WHERE aantal_delen >= 12
     * $query->filterByAantalDelen(array('max' => 12)); // WHERE aantal_delen <= 12
     * </code>
     *
     * @param     mixed $aantalDelen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByAantalDelen($aantalDelen = null, $comparison = null)
    {
        if (is_array($aantalDelen)) {
            $useMinMax = false;
            if (isset($aantalDelen['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::AANTAL_DELEN, $aantalDelen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalDelen['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::AANTAL_DELEN, $aantalDelen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::AANTAL_DELEN, $aantalDelen, $comparison);
    }

    /**
     * Filter the query on the aantal_kanalen column
     *
     * Example usage:
     * <code>
     * $query->filterByAantalKanalen(1234); // WHERE aantal_kanalen = 1234
     * $query->filterByAantalKanalen(array(12, 34)); // WHERE aantal_kanalen IN (12, 34)
     * $query->filterByAantalKanalen(array('min' => 12)); // WHERE aantal_kanalen >= 12
     * $query->filterByAantalKanalen(array('max' => 12)); // WHERE aantal_kanalen <= 12
     * </code>
     *
     * @param     mixed $aantalKanalen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByAantalKanalen($aantalKanalen = null, $comparison = null)
    {
        if (is_array($aantalKanalen)) {
            $useMinMax = false;
            if (isset($aantalKanalen['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::AANTAL_KANALEN, $aantalKanalen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aantalKanalen['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::AANTAL_KANALEN, $aantalKanalen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::AANTAL_KANALEN, $aantalKanalen, $comparison);
    }

    /**
     * Filter the query on the thnr_bevestiging column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrBevestiging(1234); // WHERE thnr_bevestiging = 1234
     * $query->filterByThnrBevestiging(array(12, 34)); // WHERE thnr_bevestiging IN (12, 34)
     * $query->filterByThnrBevestiging(array('min' => 12)); // WHERE thnr_bevestiging >= 12
     * $query->filterByThnrBevestiging(array('max' => 12)); // WHERE thnr_bevestiging <= 12
     * </code>
     *
     * @param     mixed $thnrBevestiging The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrBevestiging($thnrBevestiging = null, $comparison = null)
    {
        if (is_array($thnrBevestiging)) {
            $useMinMax = false;
            if (isset($thnrBevestiging['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_BEVESTIGING, $thnrBevestiging['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrBevestiging['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_BEVESTIGING, $thnrBevestiging['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_BEVESTIGING, $thnrBevestiging, $comparison);
    }

    /**
     * Filter the query on the itemnr_bevestiging column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrBevestiging(1234); // WHERE itemnr_bevestiging = 1234
     * $query->filterByItemnrBevestiging(array(12, 34)); // WHERE itemnr_bevestiging IN (12, 34)
     * $query->filterByItemnrBevestiging(array('min' => 12)); // WHERE itemnr_bevestiging >= 12
     * $query->filterByItemnrBevestiging(array('max' => 12)); // WHERE itemnr_bevestiging <= 12
     * </code>
     *
     * @param     mixed $itemnrBevestiging The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrBevestiging($itemnrBevestiging = null, $comparison = null)
    {
        if (is_array($itemnrBevestiging)) {
            $useMinMax = false;
            if (isset($itemnrBevestiging['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_BEVESTIGING, $itemnrBevestiging['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrBevestiging['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_BEVESTIGING, $itemnrBevestiging['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_BEVESTIGING, $itemnrBevestiging, $comparison);
    }

    /**
     * Filter the query on the breedte_hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByBreedteHoeveelheid(1234); // WHERE breedte_hoeveelheid = 1234
     * $query->filterByBreedteHoeveelheid(array(12, 34)); // WHERE breedte_hoeveelheid IN (12, 34)
     * $query->filterByBreedteHoeveelheid(array('min' => 12)); // WHERE breedte_hoeveelheid >= 12
     * $query->filterByBreedteHoeveelheid(array('max' => 12)); // WHERE breedte_hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $breedteHoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByBreedteHoeveelheid($breedteHoeveelheid = null, $comparison = null)
    {
        if (is_array($breedteHoeveelheid)) {
            $useMinMax = false;
            if (isset($breedteHoeveelheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::BREEDTE_HOEVEELHEID, $breedteHoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($breedteHoeveelheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::BREEDTE_HOEVEELHEID, $breedteHoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::BREEDTE_HOEVEELHEID, $breedteHoeveelheid, $comparison);
    }

    /**
     * Filter the query on the thnr_breedte_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrBreedteEenheid(1234); // WHERE thnr_breedte_eenheid = 1234
     * $query->filterByThnrBreedteEenheid(array(12, 34)); // WHERE thnr_breedte_eenheid IN (12, 34)
     * $query->filterByThnrBreedteEenheid(array('min' => 12)); // WHERE thnr_breedte_eenheid >= 12
     * $query->filterByThnrBreedteEenheid(array('max' => 12)); // WHERE thnr_breedte_eenheid <= 12
     * </code>
     *
     * @param     mixed $thnrBreedteEenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrBreedteEenheid($thnrBreedteEenheid = null, $comparison = null)
    {
        if (is_array($thnrBreedteEenheid)) {
            $useMinMax = false;
            if (isset($thnrBreedteEenheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_BREEDTE_EENHEID, $thnrBreedteEenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrBreedteEenheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_BREEDTE_EENHEID, $thnrBreedteEenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_BREEDTE_EENHEID, $thnrBreedteEenheid, $comparison);
    }

    /**
     * Filter the query on the itemnr_breedte_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrBreedteEenheid(1234); // WHERE itemnr_breedte_eenheid = 1234
     * $query->filterByItemnrBreedteEenheid(array(12, 34)); // WHERE itemnr_breedte_eenheid IN (12, 34)
     * $query->filterByItemnrBreedteEenheid(array('min' => 12)); // WHERE itemnr_breedte_eenheid >= 12
     * $query->filterByItemnrBreedteEenheid(array('max' => 12)); // WHERE itemnr_breedte_eenheid <= 12
     * </code>
     *
     * @param     mixed $itemnrBreedteEenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrBreedteEenheid($itemnrBreedteEenheid = null, $comparison = null)
    {
        if (is_array($itemnrBreedteEenheid)) {
            $useMinMax = false;
            if (isset($itemnrBreedteEenheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_BREEDTE_EENHEID, $itemnrBreedteEenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrBreedteEenheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_BREEDTE_EENHEID, $itemnrBreedteEenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_BREEDTE_EENHEID, $itemnrBreedteEenheid, $comparison);
    }

    /**
     * Filter the query on the drukklasse column
     *
     * Example usage:
     * <code>
     * $query->filterByDrukklasse(1234); // WHERE drukklasse = 1234
     * $query->filterByDrukklasse(array(12, 34)); // WHERE drukklasse IN (12, 34)
     * $query->filterByDrukklasse(array('min' => 12)); // WHERE drukklasse >= 12
     * $query->filterByDrukklasse(array('max' => 12)); // WHERE drukklasse <= 12
     * </code>
     *
     * @param     mixed $drukklasse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByDrukklasse($drukklasse = null, $comparison = null)
    {
        if (is_array($drukklasse)) {
            $useMinMax = false;
            if (isset($drukklasse['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::DRUKKLASSE, $drukklasse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($drukklasse['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::DRUKKLASSE, $drukklasse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::DRUKKLASSE, $drukklasse, $comparison);
    }

    /**
     * Filter the query on the diameter_hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByDiameterHoeveelheid(1234); // WHERE diameter_hoeveelheid = 1234
     * $query->filterByDiameterHoeveelheid(array(12, 34)); // WHERE diameter_hoeveelheid IN (12, 34)
     * $query->filterByDiameterHoeveelheid(array('min' => 12)); // WHERE diameter_hoeveelheid >= 12
     * $query->filterByDiameterHoeveelheid(array('max' => 12)); // WHERE diameter_hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $diameterHoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByDiameterHoeveelheid($diameterHoeveelheid = null, $comparison = null)
    {
        if (is_array($diameterHoeveelheid)) {
            $useMinMax = false;
            if (isset($diameterHoeveelheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::DIAMETER_HOEVEELHEID, $diameterHoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diameterHoeveelheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::DIAMETER_HOEVEELHEID, $diameterHoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::DIAMETER_HOEVEELHEID, $diameterHoeveelheid, $comparison);
    }

    /**
     * Filter the query on the thnr_diameter_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrDiameterEenheid(1234); // WHERE thnr_diameter_eenheid = 1234
     * $query->filterByThnrDiameterEenheid(array(12, 34)); // WHERE thnr_diameter_eenheid IN (12, 34)
     * $query->filterByThnrDiameterEenheid(array('min' => 12)); // WHERE thnr_diameter_eenheid >= 12
     * $query->filterByThnrDiameterEenheid(array('max' => 12)); // WHERE thnr_diameter_eenheid <= 12
     * </code>
     *
     * @param     mixed $thnrDiameterEenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrDiameterEenheid($thnrDiameterEenheid = null, $comparison = null)
    {
        if (is_array($thnrDiameterEenheid)) {
            $useMinMax = false;
            if (isset($thnrDiameterEenheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_DIAMETER_EENHEID, $thnrDiameterEenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrDiameterEenheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_DIAMETER_EENHEID, $thnrDiameterEenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_DIAMETER_EENHEID, $thnrDiameterEenheid, $comparison);
    }

    /**
     * Filter the query on the itemnr_diameter_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrDiameterEenheid(1234); // WHERE itemnr_diameter_eenheid = 1234
     * $query->filterByItemnrDiameterEenheid(array(12, 34)); // WHERE itemnr_diameter_eenheid IN (12, 34)
     * $query->filterByItemnrDiameterEenheid(array('min' => 12)); // WHERE itemnr_diameter_eenheid >= 12
     * $query->filterByItemnrDiameterEenheid(array('max' => 12)); // WHERE itemnr_diameter_eenheid <= 12
     * </code>
     *
     * @param     mixed $itemnrDiameterEenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrDiameterEenheid($itemnrDiameterEenheid = null, $comparison = null)
    {
        if (is_array($itemnrDiameterEenheid)) {
            $useMinMax = false;
            if (isset($itemnrDiameterEenheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_DIAMETER_EENHEID, $itemnrDiameterEenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrDiameterEenheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_DIAMETER_EENHEID, $itemnrDiameterEenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_DIAMETER_EENHEID, $itemnrDiameterEenheid, $comparison);
    }

    /**
     * Filter the query on the dicht_of_open_geweven column
     *
     * Example usage:
     * <code>
     * $query->filterByDichtOfOpenGeweven('fooValue');   // WHERE dicht_of_open_geweven = 'fooValue'
     * $query->filterByDichtOfOpenGeweven('%fooValue%'); // WHERE dicht_of_open_geweven LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dichtOfOpenGeweven The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByDichtOfOpenGeweven($dichtOfOpenGeweven = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dichtOfOpenGeweven)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dichtOfOpenGeweven)) {
                $dichtOfOpenGeweven = str_replace('*', '%', $dichtOfOpenGeweven);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::DICHT_OF_OPEN_GEWEVEN, $dichtOfOpenGeweven, $comparison);
    }

    /**
     * Filter the query on the thnr_doorlaatbaarheid column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrDoorlaatbaarheid(1234); // WHERE thnr_doorlaatbaarheid = 1234
     * $query->filterByThnrDoorlaatbaarheid(array(12, 34)); // WHERE thnr_doorlaatbaarheid IN (12, 34)
     * $query->filterByThnrDoorlaatbaarheid(array('min' => 12)); // WHERE thnr_doorlaatbaarheid >= 12
     * $query->filterByThnrDoorlaatbaarheid(array('max' => 12)); // WHERE thnr_doorlaatbaarheid <= 12
     * </code>
     *
     * @param     mixed $thnrDoorlaatbaarheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrDoorlaatbaarheid($thnrDoorlaatbaarheid = null, $comparison = null)
    {
        if (is_array($thnrDoorlaatbaarheid)) {
            $useMinMax = false;
            if (isset($thnrDoorlaatbaarheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_DOORLAATBAARHEID, $thnrDoorlaatbaarheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrDoorlaatbaarheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_DOORLAATBAARHEID, $thnrDoorlaatbaarheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_DOORLAATBAARHEID, $thnrDoorlaatbaarheid, $comparison);
    }

    /**
     * Filter the query on the itemnr_doorlaatbaarheid column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrDoorlaatbaarheid(1234); // WHERE itemnr_doorlaatbaarheid = 1234
     * $query->filterByItemnrDoorlaatbaarheid(array(12, 34)); // WHERE itemnr_doorlaatbaarheid IN (12, 34)
     * $query->filterByItemnrDoorlaatbaarheid(array('min' => 12)); // WHERE itemnr_doorlaatbaarheid >= 12
     * $query->filterByItemnrDoorlaatbaarheid(array('max' => 12)); // WHERE itemnr_doorlaatbaarheid <= 12
     * </code>
     *
     * @param     mixed $itemnrDoorlaatbaarheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrDoorlaatbaarheid($itemnrDoorlaatbaarheid = null, $comparison = null)
    {
        if (is_array($itemnrDoorlaatbaarheid)) {
            $useMinMax = false;
            if (isset($itemnrDoorlaatbaarheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_DOORLAATBAARHEID, $itemnrDoorlaatbaarheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrDoorlaatbaarheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_DOORLAATBAARHEID, $itemnrDoorlaatbaarheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_DOORLAATBAARHEID, $itemnrDoorlaatbaarheid, $comparison);
    }

    /**
     * Filter the query on the draagbaar_janee column
     *
     * Example usage:
     * <code>
     * $query->filterByDraagbaarJanee(1234); // WHERE draagbaar_janee = 1234
     * $query->filterByDraagbaarJanee(array(12, 34)); // WHERE draagbaar_janee IN (12, 34)
     * $query->filterByDraagbaarJanee(array('min' => 12)); // WHERE draagbaar_janee >= 12
     * $query->filterByDraagbaarJanee(array('max' => 12)); // WHERE draagbaar_janee <= 12
     * </code>
     *
     * @param     mixed $draagbaarJanee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByDraagbaarJanee($draagbaarJanee = null, $comparison = null)
    {
        if (is_array($draagbaarJanee)) {
            $useMinMax = false;
            if (isset($draagbaarJanee['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::DRAAGBAAR_JANEE, $draagbaarJanee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($draagbaarJanee['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::DRAAGBAAR_JANEE, $draagbaarJanee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::DRAAGBAAR_JANEE, $draagbaarJanee, $comparison);
    }

    /**
     * Filter the query on the thnr_draagplaats column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrDraagplaats(1234); // WHERE thnr_draagplaats = 1234
     * $query->filterByThnrDraagplaats(array(12, 34)); // WHERE thnr_draagplaats IN (12, 34)
     * $query->filterByThnrDraagplaats(array('min' => 12)); // WHERE thnr_draagplaats >= 12
     * $query->filterByThnrDraagplaats(array('max' => 12)); // WHERE thnr_draagplaats <= 12
     * </code>
     *
     * @param     mixed $thnrDraagplaats The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrDraagplaats($thnrDraagplaats = null, $comparison = null)
    {
        if (is_array($thnrDraagplaats)) {
            $useMinMax = false;
            if (isset($thnrDraagplaats['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_DRAAGPLAATS, $thnrDraagplaats['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrDraagplaats['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_DRAAGPLAATS, $thnrDraagplaats['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_DRAAGPLAATS, $thnrDraagplaats, $comparison);
    }

    /**
     * Filter the query on the itemnr_draagplaats column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrDraagplaats(1234); // WHERE itemnr_draagplaats = 1234
     * $query->filterByItemnrDraagplaats(array(12, 34)); // WHERE itemnr_draagplaats IN (12, 34)
     * $query->filterByItemnrDraagplaats(array('min' => 12)); // WHERE itemnr_draagplaats >= 12
     * $query->filterByItemnrDraagplaats(array('max' => 12)); // WHERE itemnr_draagplaats <= 12
     * </code>
     *
     * @param     mixed $itemnrDraagplaats The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrDraagplaats($itemnrDraagplaats = null, $comparison = null)
    {
        if (is_array($itemnrDraagplaats)) {
            $useMinMax = false;
            if (isset($itemnrDraagplaats['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_DRAAGPLAATS, $itemnrDraagplaats['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrDraagplaats['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_DRAAGPLAATS, $itemnrDraagplaats['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_DRAAGPLAATS, $itemnrDraagplaats, $comparison);
    }

    /**
     * Filter the query on the thnr_extra_kenmerk column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrExtraKenmerk(1234); // WHERE thnr_extra_kenmerk = 1234
     * $query->filterByThnrExtraKenmerk(array(12, 34)); // WHERE thnr_extra_kenmerk IN (12, 34)
     * $query->filterByThnrExtraKenmerk(array('min' => 12)); // WHERE thnr_extra_kenmerk >= 12
     * $query->filterByThnrExtraKenmerk(array('max' => 12)); // WHERE thnr_extra_kenmerk <= 12
     * </code>
     *
     * @param     mixed $thnrExtraKenmerk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrExtraKenmerk($thnrExtraKenmerk = null, $comparison = null)
    {
        if (is_array($thnrExtraKenmerk)) {
            $useMinMax = false;
            if (isset($thnrExtraKenmerk['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_EXTRA_KENMERK, $thnrExtraKenmerk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrExtraKenmerk['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_EXTRA_KENMERK, $thnrExtraKenmerk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_EXTRA_KENMERK, $thnrExtraKenmerk, $comparison);
    }

    /**
     * Filter the query on the item_nr_extra_kenmerk column
     *
     * Example usage:
     * <code>
     * $query->filterByItemNrExtraKenmerk(1234); // WHERE item_nr_extra_kenmerk = 1234
     * $query->filterByItemNrExtraKenmerk(array(12, 34)); // WHERE item_nr_extra_kenmerk IN (12, 34)
     * $query->filterByItemNrExtraKenmerk(array('min' => 12)); // WHERE item_nr_extra_kenmerk >= 12
     * $query->filterByItemNrExtraKenmerk(array('max' => 12)); // WHERE item_nr_extra_kenmerk <= 12
     * </code>
     *
     * @param     mixed $itemNrExtraKenmerk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemNrExtraKenmerk($itemNrExtraKenmerk = null, $comparison = null)
    {
        if (is_array($itemNrExtraKenmerk)) {
            $useMinMax = false;
            if (isset($itemNrExtraKenmerk['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEM_NR_EXTRA_KENMERK, $itemNrExtraKenmerk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemNrExtraKenmerk['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEM_NR_EXTRA_KENMERK, $itemNrExtraKenmerk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEM_NR_EXTRA_KENMERK, $itemNrExtraKenmerk, $comparison);
    }

    /**
     * Filter the query on the filter_janee column
     *
     * Example usage:
     * <code>
     * $query->filterByFilterJanee(1234); // WHERE filter_janee = 1234
     * $query->filterByFilterJanee(array(12, 34)); // WHERE filter_janee IN (12, 34)
     * $query->filterByFilterJanee(array('min' => 12)); // WHERE filter_janee >= 12
     * $query->filterByFilterJanee(array('max' => 12)); // WHERE filter_janee <= 12
     * </code>
     *
     * @param     mixed $filterJanee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByFilterJanee($filterJanee = null, $comparison = null)
    {
        if (is_array($filterJanee)) {
            $useMinMax = false;
            if (isset($filterJanee['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::FILTER_JANEE, $filterJanee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($filterJanee['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::FILTER_JANEE, $filterJanee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::FILTER_JANEE, $filterJanee, $comparison);
    }

    /**
     * Filter the query on the flensmaat_hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByFlensmaatHoeveelheid(1234); // WHERE flensmaat_hoeveelheid = 1234
     * $query->filterByFlensmaatHoeveelheid(array(12, 34)); // WHERE flensmaat_hoeveelheid IN (12, 34)
     * $query->filterByFlensmaatHoeveelheid(array('min' => 12)); // WHERE flensmaat_hoeveelheid >= 12
     * $query->filterByFlensmaatHoeveelheid(array('max' => 12)); // WHERE flensmaat_hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $flensmaatHoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByFlensmaatHoeveelheid($flensmaatHoeveelheid = null, $comparison = null)
    {
        if (is_array($flensmaatHoeveelheid)) {
            $useMinMax = false;
            if (isset($flensmaatHoeveelheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::FLENSMAAT_HOEVEELHEID, $flensmaatHoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($flensmaatHoeveelheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::FLENSMAAT_HOEVEELHEID, $flensmaatHoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::FLENSMAAT_HOEVEELHEID, $flensmaatHoeveelheid, $comparison);
    }

    /**
     * Filter the query on the thnr_flensmaat_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrFlensmaatEenheid(1234); // WHERE thnr_flensmaat_eenheid = 1234
     * $query->filterByThnrFlensmaatEenheid(array(12, 34)); // WHERE thnr_flensmaat_eenheid IN (12, 34)
     * $query->filterByThnrFlensmaatEenheid(array('min' => 12)); // WHERE thnr_flensmaat_eenheid >= 12
     * $query->filterByThnrFlensmaatEenheid(array('max' => 12)); // WHERE thnr_flensmaat_eenheid <= 12
     * </code>
     *
     * @param     mixed $thnrFlensmaatEenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrFlensmaatEenheid($thnrFlensmaatEenheid = null, $comparison = null)
    {
        if (is_array($thnrFlensmaatEenheid)) {
            $useMinMax = false;
            if (isset($thnrFlensmaatEenheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_FLENSMAAT_EENHEID, $thnrFlensmaatEenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrFlensmaatEenheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_FLENSMAAT_EENHEID, $thnrFlensmaatEenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_FLENSMAAT_EENHEID, $thnrFlensmaatEenheid, $comparison);
    }

    /**
     * Filter the query on the itemnr_flensmaat_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrFlensmaatEenheid(1234); // WHERE itemnr_flensmaat_eenheid = 1234
     * $query->filterByItemnrFlensmaatEenheid(array(12, 34)); // WHERE itemnr_flensmaat_eenheid IN (12, 34)
     * $query->filterByItemnrFlensmaatEenheid(array('min' => 12)); // WHERE itemnr_flensmaat_eenheid >= 12
     * $query->filterByItemnrFlensmaatEenheid(array('max' => 12)); // WHERE itemnr_flensmaat_eenheid <= 12
     * </code>
     *
     * @param     mixed $itemnrFlensmaatEenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrFlensmaatEenheid($itemnrFlensmaatEenheid = null, $comparison = null)
    {
        if (is_array($itemnrFlensmaatEenheid)) {
            $useMinMax = false;
            if (isset($itemnrFlensmaatEenheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_FLENSMAAT_EENHEID, $itemnrFlensmaatEenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrFlensmaatEenheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_FLENSMAAT_EENHEID, $itemnrFlensmaatEenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_FLENSMAAT_EENHEID, $itemnrFlensmaatEenheid, $comparison);
    }

    /**
     * Filter the query on the geslacht column
     *
     * Example usage:
     * <code>
     * $query->filterByGeslacht('fooValue');   // WHERE geslacht = 'fooValue'
     * $query->filterByGeslacht('%fooValue%'); // WHERE geslacht LIKE '%fooValue%'
     * </code>
     *
     * @param     string $geslacht The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByGeslacht($geslacht = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($geslacht)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $geslacht)) {
                $geslacht = str_replace('*', '%', $geslacht);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::GESLACHT, $geslacht, $comparison);
    }

    /**
     * Filter the query on the glijmiddel_janee column
     *
     * Example usage:
     * <code>
     * $query->filterByGlijmiddelJanee(1234); // WHERE glijmiddel_janee = 1234
     * $query->filterByGlijmiddelJanee(array(12, 34)); // WHERE glijmiddel_janee IN (12, 34)
     * $query->filterByGlijmiddelJanee(array('min' => 12)); // WHERE glijmiddel_janee >= 12
     * $query->filterByGlijmiddelJanee(array('max' => 12)); // WHERE glijmiddel_janee <= 12
     * </code>
     *
     * @param     mixed $glijmiddelJanee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByGlijmiddelJanee($glijmiddelJanee = null, $comparison = null)
    {
        if (is_array($glijmiddelJanee)) {
            $useMinMax = false;
            if (isset($glijmiddelJanee['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::GLIJMIDDEL_JANEE, $glijmiddelJanee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($glijmiddelJanee['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::GLIJMIDDEL_JANEE, $glijmiddelJanee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::GLIJMIDDEL_JANEE, $glijmiddelJanee, $comparison);
    }

    /**
     * Filter the query on the hergebruik_mogelijk_janee column
     *
     * Example usage:
     * <code>
     * $query->filterByHergebruikMogelijkJanee(1234); // WHERE hergebruik_mogelijk_janee = 1234
     * $query->filterByHergebruikMogelijkJanee(array(12, 34)); // WHERE hergebruik_mogelijk_janee IN (12, 34)
     * $query->filterByHergebruikMogelijkJanee(array('min' => 12)); // WHERE hergebruik_mogelijk_janee >= 12
     * $query->filterByHergebruikMogelijkJanee(array('max' => 12)); // WHERE hergebruik_mogelijk_janee <= 12
     * </code>
     *
     * @param     mixed $hergebruikMogelijkJanee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByHergebruikMogelijkJanee($hergebruikMogelijkJanee = null, $comparison = null)
    {
        if (is_array($hergebruikMogelijkJanee)) {
            $useMinMax = false;
            if (isset($hergebruikMogelijkJanee['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::HERGEBRUIK_MOGELIJK_JANEE, $hergebruikMogelijkJanee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hergebruikMogelijkJanee['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::HERGEBRUIK_MOGELIJK_JANEE, $hergebruikMogelijkJanee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::HERGEBRUIK_MOGELIJK_JANEE, $hergebruikMogelijkJanee, $comparison);
    }

    /**
     * Filter the query on the thnr_hulpmiddelpresentatie column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrHulpmiddelpresentatie(1234); // WHERE thnr_hulpmiddelpresentatie = 1234
     * $query->filterByThnrHulpmiddelpresentatie(array(12, 34)); // WHERE thnr_hulpmiddelpresentatie IN (12, 34)
     * $query->filterByThnrHulpmiddelpresentatie(array('min' => 12)); // WHERE thnr_hulpmiddelpresentatie >= 12
     * $query->filterByThnrHulpmiddelpresentatie(array('max' => 12)); // WHERE thnr_hulpmiddelpresentatie <= 12
     * </code>
     *
     * @param     mixed $thnrHulpmiddelpresentatie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrHulpmiddelpresentatie($thnrHulpmiddelpresentatie = null, $comparison = null)
    {
        if (is_array($thnrHulpmiddelpresentatie)) {
            $useMinMax = false;
            if (isset($thnrHulpmiddelpresentatie['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELPRESENTATIE, $thnrHulpmiddelpresentatie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrHulpmiddelpresentatie['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELPRESENTATIE, $thnrHulpmiddelpresentatie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELPRESENTATIE, $thnrHulpmiddelpresentatie, $comparison);
    }

    /**
     * Filter the query on the itemnr_hulpmiddelpresentatie column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrHulpmiddelpresentatie(1234); // WHERE itemnr_hulpmiddelpresentatie = 1234
     * $query->filterByItemnrHulpmiddelpresentatie(array(12, 34)); // WHERE itemnr_hulpmiddelpresentatie IN (12, 34)
     * $query->filterByItemnrHulpmiddelpresentatie(array('min' => 12)); // WHERE itemnr_hulpmiddelpresentatie >= 12
     * $query->filterByItemnrHulpmiddelpresentatie(array('max' => 12)); // WHERE itemnr_hulpmiddelpresentatie <= 12
     * </code>
     *
     * @param     mixed $itemnrHulpmiddelpresentatie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrHulpmiddelpresentatie($itemnrHulpmiddelpresentatie = null, $comparison = null)
    {
        if (is_array($itemnrHulpmiddelpresentatie)) {
            $useMinMax = false;
            if (isset($itemnrHulpmiddelpresentatie['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELPRESENTATIE, $itemnrHulpmiddelpresentatie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrHulpmiddelpresentatie['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELPRESENTATIE, $itemnrHulpmiddelpresentatie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELPRESENTATIE, $itemnrHulpmiddelpresentatie, $comparison);
    }

    /**
     * Filter the query on the thnr_kleeflaag column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrKleeflaag(1234); // WHERE thnr_kleeflaag = 1234
     * $query->filterByThnrKleeflaag(array(12, 34)); // WHERE thnr_kleeflaag IN (12, 34)
     * $query->filterByThnrKleeflaag(array('min' => 12)); // WHERE thnr_kleeflaag >= 12
     * $query->filterByThnrKleeflaag(array('max' => 12)); // WHERE thnr_kleeflaag <= 12
     * </code>
     *
     * @param     mixed $thnrKleeflaag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrKleeflaag($thnrKleeflaag = null, $comparison = null)
    {
        if (is_array($thnrKleeflaag)) {
            $useMinMax = false;
            if (isset($thnrKleeflaag['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_KLEEFLAAG, $thnrKleeflaag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrKleeflaag['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_KLEEFLAAG, $thnrKleeflaag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_KLEEFLAAG, $thnrKleeflaag, $comparison);
    }

    /**
     * Filter the query on the itemnr_kleeflaag column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrKleeflaag(1234); // WHERE itemnr_kleeflaag = 1234
     * $query->filterByItemnrKleeflaag(array(12, 34)); // WHERE itemnr_kleeflaag IN (12, 34)
     * $query->filterByItemnrKleeflaag(array('min' => 12)); // WHERE itemnr_kleeflaag >= 12
     * $query->filterByItemnrKleeflaag(array('max' => 12)); // WHERE itemnr_kleeflaag <= 12
     * </code>
     *
     * @param     mixed $itemnrKleeflaag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrKleeflaag($itemnrKleeflaag = null, $comparison = null)
    {
        if (is_array($itemnrKleeflaag)) {
            $useMinMax = false;
            if (isset($itemnrKleeflaag['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_KLEEFLAAG, $itemnrKleeflaag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrKleeflaag['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_KLEEFLAAG, $itemnrKleeflaag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_KLEEFLAAG, $itemnrKleeflaag, $comparison);
    }

    /**
     * Filter the query on the kleur_thesaurusnummer column
     *
     * Example usage:
     * <code>
     * $query->filterByKleurThesaurusnummer(1234); // WHERE kleur_thesaurusnummer = 1234
     * $query->filterByKleurThesaurusnummer(array(12, 34)); // WHERE kleur_thesaurusnummer IN (12, 34)
     * $query->filterByKleurThesaurusnummer(array('min' => 12)); // WHERE kleur_thesaurusnummer >= 12
     * $query->filterByKleurThesaurusnummer(array('max' => 12)); // WHERE kleur_thesaurusnummer <= 12
     * </code>
     *
     * @param     mixed $kleurThesaurusnummer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByKleurThesaurusnummer($kleurThesaurusnummer = null, $comparison = null)
    {
        if (is_array($kleurThesaurusnummer)) {
            $useMinMax = false;
            if (isset($kleurThesaurusnummer['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::KLEUR_THESAURUSNUMMER, $kleurThesaurusnummer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($kleurThesaurusnummer['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::KLEUR_THESAURUSNUMMER, $kleurThesaurusnummer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::KLEUR_THESAURUSNUMMER, $kleurThesaurusnummer, $comparison);
    }

    /**
     * Filter the query on the itemnr_kleur column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrKleur(1234); // WHERE itemnr_kleur = 1234
     * $query->filterByItemnrKleur(array(12, 34)); // WHERE itemnr_kleur IN (12, 34)
     * $query->filterByItemnrKleur(array('min' => 12)); // WHERE itemnr_kleur >= 12
     * $query->filterByItemnrKleur(array('max' => 12)); // WHERE itemnr_kleur <= 12
     * </code>
     *
     * @param     mixed $itemnrKleur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrKleur($itemnrKleur = null, $comparison = null)
    {
        if (is_array($itemnrKleur)) {
            $useMinMax = false;
            if (isset($itemnrKleur['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_KLEUR, $itemnrKleur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrKleur['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_KLEUR, $itemnrKleur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_KLEUR, $itemnrKleur, $comparison);
    }

    /**
     * Filter the query on the lengte_1_hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByLengte1Hoeveelheid(1234); // WHERE lengte_1_hoeveelheid = 1234
     * $query->filterByLengte1Hoeveelheid(array(12, 34)); // WHERE lengte_1_hoeveelheid IN (12, 34)
     * $query->filterByLengte1Hoeveelheid(array('min' => 12)); // WHERE lengte_1_hoeveelheid >= 12
     * $query->filterByLengte1Hoeveelheid(array('max' => 12)); // WHERE lengte_1_hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $lengte1Hoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByLengte1Hoeveelheid($lengte1Hoeveelheid = null, $comparison = null)
    {
        if (is_array($lengte1Hoeveelheid)) {
            $useMinMax = false;
            if (isset($lengte1Hoeveelheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::LENGTE_1_HOEVEELHEID, $lengte1Hoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengte1Hoeveelheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::LENGTE_1_HOEVEELHEID, $lengte1Hoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::LENGTE_1_HOEVEELHEID, $lengte1Hoeveelheid, $comparison);
    }

    /**
     * Filter the query on the thnr_lengte_1_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrLengte1Eenheid(1234); // WHERE thnr_lengte_1_eenheid = 1234
     * $query->filterByThnrLengte1Eenheid(array(12, 34)); // WHERE thnr_lengte_1_eenheid IN (12, 34)
     * $query->filterByThnrLengte1Eenheid(array('min' => 12)); // WHERE thnr_lengte_1_eenheid >= 12
     * $query->filterByThnrLengte1Eenheid(array('max' => 12)); // WHERE thnr_lengte_1_eenheid <= 12
     * </code>
     *
     * @param     mixed $thnrLengte1Eenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrLengte1Eenheid($thnrLengte1Eenheid = null, $comparison = null)
    {
        if (is_array($thnrLengte1Eenheid)) {
            $useMinMax = false;
            if (isset($thnrLengte1Eenheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_LENGTE_1_EENHEID, $thnrLengte1Eenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrLengte1Eenheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_LENGTE_1_EENHEID, $thnrLengte1Eenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_LENGTE_1_EENHEID, $thnrLengte1Eenheid, $comparison);
    }

    /**
     * Filter the query on the itemnr_lengte_1_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrLengte1Eenheid(1234); // WHERE itemnr_lengte_1_eenheid = 1234
     * $query->filterByItemnrLengte1Eenheid(array(12, 34)); // WHERE itemnr_lengte_1_eenheid IN (12, 34)
     * $query->filterByItemnrLengte1Eenheid(array('min' => 12)); // WHERE itemnr_lengte_1_eenheid >= 12
     * $query->filterByItemnrLengte1Eenheid(array('max' => 12)); // WHERE itemnr_lengte_1_eenheid <= 12
     * </code>
     *
     * @param     mixed $itemnrLengte1Eenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrLengte1Eenheid($itemnrLengte1Eenheid = null, $comparison = null)
    {
        if (is_array($itemnrLengte1Eenheid)) {
            $useMinMax = false;
            if (isset($itemnrLengte1Eenheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_1_EENHEID, $itemnrLengte1Eenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrLengte1Eenheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_1_EENHEID, $itemnrLengte1Eenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_1_EENHEID, $itemnrLengte1Eenheid, $comparison);
    }

    /**
     * Filter the query on the lengte_2_hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByLengte2Hoeveelheid(1234); // WHERE lengte_2_hoeveelheid = 1234
     * $query->filterByLengte2Hoeveelheid(array(12, 34)); // WHERE lengte_2_hoeveelheid IN (12, 34)
     * $query->filterByLengte2Hoeveelheid(array('min' => 12)); // WHERE lengte_2_hoeveelheid >= 12
     * $query->filterByLengte2Hoeveelheid(array('max' => 12)); // WHERE lengte_2_hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $lengte2Hoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByLengte2Hoeveelheid($lengte2Hoeveelheid = null, $comparison = null)
    {
        if (is_array($lengte2Hoeveelheid)) {
            $useMinMax = false;
            if (isset($lengte2Hoeveelheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::LENGTE_2_HOEVEELHEID, $lengte2Hoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengte2Hoeveelheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::LENGTE_2_HOEVEELHEID, $lengte2Hoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::LENGTE_2_HOEVEELHEID, $lengte2Hoeveelheid, $comparison);
    }

    /**
     * Filter the query on the thnr_lengte_2_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrLengte2Eenheid(1234); // WHERE thnr_lengte_2_eenheid = 1234
     * $query->filterByThnrLengte2Eenheid(array(12, 34)); // WHERE thnr_lengte_2_eenheid IN (12, 34)
     * $query->filterByThnrLengte2Eenheid(array('min' => 12)); // WHERE thnr_lengte_2_eenheid >= 12
     * $query->filterByThnrLengte2Eenheid(array('max' => 12)); // WHERE thnr_lengte_2_eenheid <= 12
     * </code>
     *
     * @param     mixed $thnrLengte2Eenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrLengte2Eenheid($thnrLengte2Eenheid = null, $comparison = null)
    {
        if (is_array($thnrLengte2Eenheid)) {
            $useMinMax = false;
            if (isset($thnrLengte2Eenheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_LENGTE_2_EENHEID, $thnrLengte2Eenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrLengte2Eenheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_LENGTE_2_EENHEID, $thnrLengte2Eenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_LENGTE_2_EENHEID, $thnrLengte2Eenheid, $comparison);
    }

    /**
     * Filter the query on the itemnr_lengte_2_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrLengte2Eenheid(1234); // WHERE itemnr_lengte_2_eenheid = 1234
     * $query->filterByItemnrLengte2Eenheid(array(12, 34)); // WHERE itemnr_lengte_2_eenheid IN (12, 34)
     * $query->filterByItemnrLengte2Eenheid(array('min' => 12)); // WHERE itemnr_lengte_2_eenheid >= 12
     * $query->filterByItemnrLengte2Eenheid(array('max' => 12)); // WHERE itemnr_lengte_2_eenheid <= 12
     * </code>
     *
     * @param     mixed $itemnrLengte2Eenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrLengte2Eenheid($itemnrLengte2Eenheid = null, $comparison = null)
    {
        if (is_array($itemnrLengte2Eenheid)) {
            $useMinMax = false;
            if (isset($itemnrLengte2Eenheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_2_EENHEID, $itemnrLengte2Eenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrLengte2Eenheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_2_EENHEID, $itemnrLengte2Eenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_2_EENHEID, $itemnrLengte2Eenheid, $comparison);
    }

    /**
     * Filter the query on the maasgrootte column
     *
     * Example usage:
     * <code>
     * $query->filterByMaasgrootte('fooValue');   // WHERE maasgrootte = 'fooValue'
     * $query->filterByMaasgrootte('%fooValue%'); // WHERE maasgrootte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $maasgrootte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByMaasgrootte($maasgrootte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($maasgrootte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $maasgrootte)) {
                $maasgrootte = str_replace('*', '%', $maasgrootte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::MAASGROOTTE, $maasgrootte, $comparison);
    }

    /**
     * Filter the query on the thnr_maataanduiding column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrMaataanduiding(1234); // WHERE thnr_maataanduiding = 1234
     * $query->filterByThnrMaataanduiding(array(12, 34)); // WHERE thnr_maataanduiding IN (12, 34)
     * $query->filterByThnrMaataanduiding(array('min' => 12)); // WHERE thnr_maataanduiding >= 12
     * $query->filterByThnrMaataanduiding(array('max' => 12)); // WHERE thnr_maataanduiding <= 12
     * </code>
     *
     * @param     mixed $thnrMaataanduiding The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrMaataanduiding($thnrMaataanduiding = null, $comparison = null)
    {
        if (is_array($thnrMaataanduiding)) {
            $useMinMax = false;
            if (isset($thnrMaataanduiding['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_MAATAANDUIDING, $thnrMaataanduiding['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrMaataanduiding['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_MAATAANDUIDING, $thnrMaataanduiding['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_MAATAANDUIDING, $thnrMaataanduiding, $comparison);
    }

    /**
     * Filter the query on the itemnr_maataanduiding column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrMaataanduiding(1234); // WHERE itemnr_maataanduiding = 1234
     * $query->filterByItemnrMaataanduiding(array(12, 34)); // WHERE itemnr_maataanduiding IN (12, 34)
     * $query->filterByItemnrMaataanduiding(array('min' => 12)); // WHERE itemnr_maataanduiding >= 12
     * $query->filterByItemnrMaataanduiding(array('max' => 12)); // WHERE itemnr_maataanduiding <= 12
     * </code>
     *
     * @param     mixed $itemnrMaataanduiding The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrMaataanduiding($itemnrMaataanduiding = null, $comparison = null)
    {
        if (is_array($itemnrMaataanduiding)) {
            $useMinMax = false;
            if (isset($itemnrMaataanduiding['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_MAATAANDUIDING, $itemnrMaataanduiding['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrMaataanduiding['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_MAATAANDUIDING, $itemnrMaataanduiding['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_MAATAANDUIDING, $itemnrMaataanduiding, $comparison);
    }

    /**
     * Filter the query on the thnr_materiaal column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrMateriaal(1234); // WHERE thnr_materiaal = 1234
     * $query->filterByThnrMateriaal(array(12, 34)); // WHERE thnr_materiaal IN (12, 34)
     * $query->filterByThnrMateriaal(array('min' => 12)); // WHERE thnr_materiaal >= 12
     * $query->filterByThnrMateriaal(array('max' => 12)); // WHERE thnr_materiaal <= 12
     * </code>
     *
     * @param     mixed $thnrMateriaal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrMateriaal($thnrMateriaal = null, $comparison = null)
    {
        if (is_array($thnrMateriaal)) {
            $useMinMax = false;
            if (isset($thnrMateriaal['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_MATERIAAL, $thnrMateriaal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrMateriaal['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_MATERIAAL, $thnrMateriaal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_MATERIAAL, $thnrMateriaal, $comparison);
    }

    /**
     * Filter the query on the itemnr_materiaal column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrMateriaal(1234); // WHERE itemnr_materiaal = 1234
     * $query->filterByItemnrMateriaal(array(12, 34)); // WHERE itemnr_materiaal IN (12, 34)
     * $query->filterByItemnrMateriaal(array('min' => 12)); // WHERE itemnr_materiaal >= 12
     * $query->filterByItemnrMateriaal(array('max' => 12)); // WHERE itemnr_materiaal <= 12
     * </code>
     *
     * @param     mixed $itemnrMateriaal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrMateriaal($itemnrMateriaal = null, $comparison = null)
    {
        if (is_array($itemnrMateriaal)) {
            $useMinMax = false;
            if (isset($itemnrMateriaal['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_MATERIAAL, $itemnrMateriaal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrMateriaal['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_MATERIAAL, $itemnrMateriaal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_MATERIAAL, $itemnrMateriaal, $comparison);
    }

    /**
     * Filter the query on the niet_aan_de_wond_hechtend column
     *
     * Example usage:
     * <code>
     * $query->filterByNietAanDeWondHechtend('fooValue');   // WHERE niet_aan_de_wond_hechtend = 'fooValue'
     * $query->filterByNietAanDeWondHechtend('%fooValue%'); // WHERE niet_aan_de_wond_hechtend LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nietAanDeWondHechtend The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByNietAanDeWondHechtend($nietAanDeWondHechtend = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nietAanDeWondHechtend)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nietAanDeWondHechtend)) {
                $nietAanDeWondHechtend = str_replace('*', '%', $nietAanDeWondHechtend);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::NIET_AAN_DE_WOND_HECHTEND, $nietAanDeWondHechtend, $comparison);
    }

    /**
     * Filter the query on the thnr_plaats_sluiting column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrPlaatsSluiting(1234); // WHERE thnr_plaats_sluiting = 1234
     * $query->filterByThnrPlaatsSluiting(array(12, 34)); // WHERE thnr_plaats_sluiting IN (12, 34)
     * $query->filterByThnrPlaatsSluiting(array('min' => 12)); // WHERE thnr_plaats_sluiting >= 12
     * $query->filterByThnrPlaatsSluiting(array('max' => 12)); // WHERE thnr_plaats_sluiting <= 12
     * </code>
     *
     * @param     mixed $thnrPlaatsSluiting The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrPlaatsSluiting($thnrPlaatsSluiting = null, $comparison = null)
    {
        if (is_array($thnrPlaatsSluiting)) {
            $useMinMax = false;
            if (isset($thnrPlaatsSluiting['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_PLAATS_SLUITING, $thnrPlaatsSluiting['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrPlaatsSluiting['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_PLAATS_SLUITING, $thnrPlaatsSluiting['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_PLAATS_SLUITING, $thnrPlaatsSluiting, $comparison);
    }

    /**
     * Filter the query on the itemnr_plaats_sluiting column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrPlaatsSluiting(1234); // WHERE itemnr_plaats_sluiting = 1234
     * $query->filterByItemnrPlaatsSluiting(array(12, 34)); // WHERE itemnr_plaats_sluiting IN (12, 34)
     * $query->filterByItemnrPlaatsSluiting(array('min' => 12)); // WHERE itemnr_plaats_sluiting >= 12
     * $query->filterByItemnrPlaatsSluiting(array('max' => 12)); // WHERE itemnr_plaats_sluiting <= 12
     * </code>
     *
     * @param     mixed $itemnrPlaatsSluiting The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrPlaatsSluiting($itemnrPlaatsSluiting = null, $comparison = null)
    {
        if (is_array($itemnrPlaatsSluiting)) {
            $useMinMax = false;
            if (isset($itemnrPlaatsSluiting['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_PLAATS_SLUITING, $itemnrPlaatsSluiting['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrPlaatsSluiting['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_PLAATS_SLUITING, $itemnrPlaatsSluiting['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_PLAATS_SLUITING, $itemnrPlaatsSluiting, $comparison);
    }

    /**
     * Filter the query on the rekpercentage column
     *
     * Example usage:
     * <code>
     * $query->filterByRekpercentage(1234); // WHERE rekpercentage = 1234
     * $query->filterByRekpercentage(array(12, 34)); // WHERE rekpercentage IN (12, 34)
     * $query->filterByRekpercentage(array('min' => 12)); // WHERE rekpercentage >= 12
     * $query->filterByRekpercentage(array('max' => 12)); // WHERE rekpercentage <= 12
     * </code>
     *
     * @param     mixed $rekpercentage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByRekpercentage($rekpercentage = null, $comparison = null)
    {
        if (is_array($rekpercentage)) {
            $useMinMax = false;
            if (isset($rekpercentage['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::REKPERCENTAGE, $rekpercentage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rekpercentage['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::REKPERCENTAGE, $rekpercentage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::REKPERCENTAGE, $rekpercentage, $comparison);
    }

    /**
     * Filter the query on the rekrichting column
     *
     * Example usage:
     * <code>
     * $query->filterByRekrichting('fooValue');   // WHERE rekrichting = 'fooValue'
     * $query->filterByRekrichting('%fooValue%'); // WHERE rekrichting LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rekrichting The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByRekrichting($rekrichting = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rekrichting)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rekrichting)) {
                $rekrichting = str_replace('*', '%', $rekrichting);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::REKRICHTING, $rekrichting, $comparison);
    }

    /**
     * Filter the query on the thnr_rekaanduiding column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrRekaanduiding(1234); // WHERE thnr_rekaanduiding = 1234
     * $query->filterByThnrRekaanduiding(array(12, 34)); // WHERE thnr_rekaanduiding IN (12, 34)
     * $query->filterByThnrRekaanduiding(array('min' => 12)); // WHERE thnr_rekaanduiding >= 12
     * $query->filterByThnrRekaanduiding(array('max' => 12)); // WHERE thnr_rekaanduiding <= 12
     * </code>
     *
     * @param     mixed $thnrRekaanduiding The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrRekaanduiding($thnrRekaanduiding = null, $comparison = null)
    {
        if (is_array($thnrRekaanduiding)) {
            $useMinMax = false;
            if (isset($thnrRekaanduiding['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_REKAANDUIDING, $thnrRekaanduiding['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrRekaanduiding['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_REKAANDUIDING, $thnrRekaanduiding['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_REKAANDUIDING, $thnrRekaanduiding, $comparison);
    }

    /**
     * Filter the query on the itemnr_rekaanduiding column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrRekaanduiding(1234); // WHERE itemnr_rekaanduiding = 1234
     * $query->filterByItemnrRekaanduiding(array(12, 34)); // WHERE itemnr_rekaanduiding IN (12, 34)
     * $query->filterByItemnrRekaanduiding(array('min' => 12)); // WHERE itemnr_rekaanduiding >= 12
     * $query->filterByItemnrRekaanduiding(array('max' => 12)); // WHERE itemnr_rekaanduiding <= 12
     * </code>
     *
     * @param     mixed $itemnrRekaanduiding The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrRekaanduiding($itemnrRekaanduiding = null, $comparison = null)
    {
        if (is_array($itemnrRekaanduiding)) {
            $useMinMax = false;
            if (isset($itemnrRekaanduiding['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_REKAANDUIDING, $itemnrRekaanduiding['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrRekaanduiding['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_REKAANDUIDING, $itemnrRekaanduiding['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_REKAANDUIDING, $itemnrRekaanduiding, $comparison);
    }

    /**
     * Filter the query on the rontgencontrastdraad_aanwezig_jn column
     *
     * Example usage:
     * <code>
     * $query->filterByRontgencontrastdraadAanwezigJn(1234); // WHERE rontgencontrastdraad_aanwezig_jn = 1234
     * $query->filterByRontgencontrastdraadAanwezigJn(array(12, 34)); // WHERE rontgencontrastdraad_aanwezig_jn IN (12, 34)
     * $query->filterByRontgencontrastdraadAanwezigJn(array('min' => 12)); // WHERE rontgencontrastdraad_aanwezig_jn >= 12
     * $query->filterByRontgencontrastdraadAanwezigJn(array('max' => 12)); // WHERE rontgencontrastdraad_aanwezig_jn <= 12
     * </code>
     *
     * @param     mixed $rontgencontrastdraadAanwezigJn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByRontgencontrastdraadAanwezigJn($rontgencontrastdraadAanwezigJn = null, $comparison = null)
    {
        if (is_array($rontgencontrastdraadAanwezigJn)) {
            $useMinMax = false;
            if (isset($rontgencontrastdraadAanwezigJn['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::RONTGENCONTRASTDRAAD_AANWEZIG_JN, $rontgencontrastdraadAanwezigJn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rontgencontrastdraadAanwezigJn['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::RONTGENCONTRASTDRAAD_AANWEZIG_JN, $rontgencontrastdraadAanwezigJn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::RONTGENCONTRASTDRAAD_AANWEZIG_JN, $rontgencontrastdraadAanwezigJn, $comparison);
    }

    /**
     * Filter the query on the thnr_hulpmiddelsysteem column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrHulpmiddelsysteem(1234); // WHERE thnr_hulpmiddelsysteem = 1234
     * $query->filterByThnrHulpmiddelsysteem(array(12, 34)); // WHERE thnr_hulpmiddelsysteem IN (12, 34)
     * $query->filterByThnrHulpmiddelsysteem(array('min' => 12)); // WHERE thnr_hulpmiddelsysteem >= 12
     * $query->filterByThnrHulpmiddelsysteem(array('max' => 12)); // WHERE thnr_hulpmiddelsysteem <= 12
     * </code>
     *
     * @param     mixed $thnrHulpmiddelsysteem The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrHulpmiddelsysteem($thnrHulpmiddelsysteem = null, $comparison = null)
    {
        if (is_array($thnrHulpmiddelsysteem)) {
            $useMinMax = false;
            if (isset($thnrHulpmiddelsysteem['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELSYSTEEM, $thnrHulpmiddelsysteem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrHulpmiddelsysteem['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELSYSTEEM, $thnrHulpmiddelsysteem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELSYSTEEM, $thnrHulpmiddelsysteem, $comparison);
    }

    /**
     * Filter the query on the itemnr_hulpmiddelsysteem column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrHulpmiddelsysteem(1234); // WHERE itemnr_hulpmiddelsysteem = 1234
     * $query->filterByItemnrHulpmiddelsysteem(array(12, 34)); // WHERE itemnr_hulpmiddelsysteem IN (12, 34)
     * $query->filterByItemnrHulpmiddelsysteem(array('min' => 12)); // WHERE itemnr_hulpmiddelsysteem >= 12
     * $query->filterByItemnrHulpmiddelsysteem(array('max' => 12)); // WHERE itemnr_hulpmiddelsysteem <= 12
     * </code>
     *
     * @param     mixed $itemnrHulpmiddelsysteem The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrHulpmiddelsysteem($itemnrHulpmiddelsysteem = null, $comparison = null)
    {
        if (is_array($itemnrHulpmiddelsysteem)) {
            $useMinMax = false;
            if (isset($itemnrHulpmiddelsysteem['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELSYSTEEM, $itemnrHulpmiddelsysteem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrHulpmiddelsysteem['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELSYSTEEM, $itemnrHulpmiddelsysteem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELSYSTEEM, $itemnrHulpmiddelsysteem, $comparison);
    }

    /**
     * Filter the query on the terugslagvoorziening_janee column
     *
     * Example usage:
     * <code>
     * $query->filterByTerugslagvoorzieningJanee(1234); // WHERE terugslagvoorziening_janee = 1234
     * $query->filterByTerugslagvoorzieningJanee(array(12, 34)); // WHERE terugslagvoorziening_janee IN (12, 34)
     * $query->filterByTerugslagvoorzieningJanee(array('min' => 12)); // WHERE terugslagvoorziening_janee >= 12
     * $query->filterByTerugslagvoorzieningJanee(array('max' => 12)); // WHERE terugslagvoorziening_janee <= 12
     * </code>
     *
     * @param     mixed $terugslagvoorzieningJanee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByTerugslagvoorzieningJanee($terugslagvoorzieningJanee = null, $comparison = null)
    {
        if (is_array($terugslagvoorzieningJanee)) {
            $useMinMax = false;
            if (isset($terugslagvoorzieningJanee['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::TERUGSLAGVOORZIENING_JANEE, $terugslagvoorzieningJanee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($terugslagvoorzieningJanee['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::TERUGSLAGVOORZIENING_JANEE, $terugslagvoorzieningJanee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::TERUGSLAGVOORZIENING_JANEE, $terugslagvoorzieningJanee, $comparison);
    }

    /**
     * Filter the query on the toepassing_afnameverblijf column
     *
     * Example usage:
     * <code>
     * $query->filterByToepassingAfnameverblijf('fooValue');   // WHERE toepassing_afnameverblijf = 'fooValue'
     * $query->filterByToepassingAfnameverblijf('%fooValue%'); // WHERE toepassing_afnameverblijf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $toepassingAfnameverblijf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByToepassingAfnameverblijf($toepassingAfnameverblijf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($toepassingAfnameverblijf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $toepassingAfnameverblijf)) {
                $toepassingAfnameverblijf = str_replace('*', '%', $toepassingAfnameverblijf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::TOEPASSING_AFNAMEVERBLIJF, $toepassingAfnameverblijf, $comparison);
    }

    /**
     * Filter the query on the type_punt_nelatontiemann column
     *
     * Example usage:
     * <code>
     * $query->filterByTypePuntNelatontiemann('fooValue');   // WHERE type_punt_nelatontiemann = 'fooValue'
     * $query->filterByTypePuntNelatontiemann('%fooValue%'); // WHERE type_punt_nelatontiemann LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typePuntNelatontiemann The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByTypePuntNelatontiemann($typePuntNelatontiemann = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typePuntNelatontiemann)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typePuntNelatontiemann)) {
                $typePuntNelatontiemann = str_replace('*', '%', $typePuntNelatontiemann);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::TYPE_PUNT_NELATONTIEMANN, $typePuntNelatontiemann, $comparison);
    }

    /**
     * Filter the query on the volume_hoeveelheid column
     *
     * Example usage:
     * <code>
     * $query->filterByVolumeHoeveelheid(1234); // WHERE volume_hoeveelheid = 1234
     * $query->filterByVolumeHoeveelheid(array(12, 34)); // WHERE volume_hoeveelheid IN (12, 34)
     * $query->filterByVolumeHoeveelheid(array('min' => 12)); // WHERE volume_hoeveelheid >= 12
     * $query->filterByVolumeHoeveelheid(array('max' => 12)); // WHERE volume_hoeveelheid <= 12
     * </code>
     *
     * @param     mixed $volumeHoeveelheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByVolumeHoeveelheid($volumeHoeveelheid = null, $comparison = null)
    {
        if (is_array($volumeHoeveelheid)) {
            $useMinMax = false;
            if (isset($volumeHoeveelheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::VOLUME_HOEVEELHEID, $volumeHoeveelheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($volumeHoeveelheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::VOLUME_HOEVEELHEID, $volumeHoeveelheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::VOLUME_HOEVEELHEID, $volumeHoeveelheid, $comparison);
    }

    /**
     * Filter the query on the thnr_volume_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrVolumeEenheid(1234); // WHERE thnr_volume_eenheid = 1234
     * $query->filterByThnrVolumeEenheid(array(12, 34)); // WHERE thnr_volume_eenheid IN (12, 34)
     * $query->filterByThnrVolumeEenheid(array('min' => 12)); // WHERE thnr_volume_eenheid >= 12
     * $query->filterByThnrVolumeEenheid(array('max' => 12)); // WHERE thnr_volume_eenheid <= 12
     * </code>
     *
     * @param     mixed $thnrVolumeEenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrVolumeEenheid($thnrVolumeEenheid = null, $comparison = null)
    {
        if (is_array($thnrVolumeEenheid)) {
            $useMinMax = false;
            if (isset($thnrVolumeEenheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_VOLUME_EENHEID, $thnrVolumeEenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrVolumeEenheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_VOLUME_EENHEID, $thnrVolumeEenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_VOLUME_EENHEID, $thnrVolumeEenheid, $comparison);
    }

    /**
     * Filter the query on the itemnr_volume_eenheid column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrVolumeEenheid(1234); // WHERE itemnr_volume_eenheid = 1234
     * $query->filterByItemnrVolumeEenheid(array(12, 34)); // WHERE itemnr_volume_eenheid IN (12, 34)
     * $query->filterByItemnrVolumeEenheid(array('min' => 12)); // WHERE itemnr_volume_eenheid >= 12
     * $query->filterByItemnrVolumeEenheid(array('max' => 12)); // WHERE itemnr_volume_eenheid <= 12
     * </code>
     *
     * @param     mixed $itemnrVolumeEenheid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrVolumeEenheid($itemnrVolumeEenheid = null, $comparison = null)
    {
        if (is_array($itemnrVolumeEenheid)) {
            $useMinMax = false;
            if (isset($itemnrVolumeEenheid['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_VOLUME_EENHEID, $itemnrVolumeEenheid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrVolumeEenheid['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_VOLUME_EENHEID, $itemnrVolumeEenheid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_VOLUME_EENHEID, $itemnrVolumeEenheid, $comparison);
    }

    /**
     * Filter the query on the thnr_vorm column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrVorm(1234); // WHERE thnr_vorm = 1234
     * $query->filterByThnrVorm(array(12, 34)); // WHERE thnr_vorm IN (12, 34)
     * $query->filterByThnrVorm(array('min' => 12)); // WHERE thnr_vorm >= 12
     * $query->filterByThnrVorm(array('max' => 12)); // WHERE thnr_vorm <= 12
     * </code>
     *
     * @param     mixed $thnrVorm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrVorm($thnrVorm = null, $comparison = null)
    {
        if (is_array($thnrVorm)) {
            $useMinMax = false;
            if (isset($thnrVorm['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_VORM, $thnrVorm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrVorm['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_VORM, $thnrVorm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_VORM, $thnrVorm, $comparison);
    }

    /**
     * Filter the query on the itemnr_vorm column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrVorm(1234); // WHERE itemnr_vorm = 1234
     * $query->filterByItemnrVorm(array(12, 34)); // WHERE itemnr_vorm IN (12, 34)
     * $query->filterByItemnrVorm(array('min' => 12)); // WHERE itemnr_vorm >= 12
     * $query->filterByItemnrVorm(array('max' => 12)); // WHERE itemnr_vorm <= 12
     * </code>
     *
     * @param     mixed $itemnrVorm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrVorm($itemnrVorm = null, $comparison = null)
    {
        if (is_array($itemnrVorm)) {
            $useMinMax = false;
            if (isset($itemnrVorm['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_VORM, $itemnrVorm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrVorm['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_VORM, $itemnrVorm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_VORM, $itemnrVorm, $comparison);
    }

    /**
     * Filter the query on the thnr_vorm_van_de_opening column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrVormVanDeOpening(1234); // WHERE thnr_vorm_van_de_opening = 1234
     * $query->filterByThnrVormVanDeOpening(array(12, 34)); // WHERE thnr_vorm_van_de_opening IN (12, 34)
     * $query->filterByThnrVormVanDeOpening(array('min' => 12)); // WHERE thnr_vorm_van_de_opening >= 12
     * $query->filterByThnrVormVanDeOpening(array('max' => 12)); // WHERE thnr_vorm_van_de_opening <= 12
     * </code>
     *
     * @param     mixed $thnrVormVanDeOpening The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrVormVanDeOpening($thnrVormVanDeOpening = null, $comparison = null)
    {
        if (is_array($thnrVormVanDeOpening)) {
            $useMinMax = false;
            if (isset($thnrVormVanDeOpening['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_OPENING, $thnrVormVanDeOpening['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrVormVanDeOpening['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_OPENING, $thnrVormVanDeOpening['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_OPENING, $thnrVormVanDeOpening, $comparison);
    }

    /**
     * Filter the query on the itemnr_vorm_van_de_opening column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrVormVanDeOpening(1234); // WHERE itemnr_vorm_van_de_opening = 1234
     * $query->filterByItemnrVormVanDeOpening(array(12, 34)); // WHERE itemnr_vorm_van_de_opening IN (12, 34)
     * $query->filterByItemnrVormVanDeOpening(array('min' => 12)); // WHERE itemnr_vorm_van_de_opening >= 12
     * $query->filterByItemnrVormVanDeOpening(array('max' => 12)); // WHERE itemnr_vorm_van_de_opening <= 12
     * </code>
     *
     * @param     mixed $itemnrVormVanDeOpening The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrVormVanDeOpening($itemnrVormVanDeOpening = null, $comparison = null)
    {
        if (is_array($itemnrVormVanDeOpening)) {
            $useMinMax = false;
            if (isset($itemnrVormVanDeOpening['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_OPENING, $itemnrVormVanDeOpening['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrVormVanDeOpening['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_OPENING, $itemnrVormVanDeOpening['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_OPENING, $itemnrVormVanDeOpening, $comparison);
    }

    /**
     * Filter the query on the thnr_vorm_van_de_plaat column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrVormVanDePlaat(1234); // WHERE thnr_vorm_van_de_plaat = 1234
     * $query->filterByThnrVormVanDePlaat(array(12, 34)); // WHERE thnr_vorm_van_de_plaat IN (12, 34)
     * $query->filterByThnrVormVanDePlaat(array('min' => 12)); // WHERE thnr_vorm_van_de_plaat >= 12
     * $query->filterByThnrVormVanDePlaat(array('max' => 12)); // WHERE thnr_vorm_van_de_plaat <= 12
     * </code>
     *
     * @param     mixed $thnrVormVanDePlaat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrVormVanDePlaat($thnrVormVanDePlaat = null, $comparison = null)
    {
        if (is_array($thnrVormVanDePlaat)) {
            $useMinMax = false;
            if (isset($thnrVormVanDePlaat['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_PLAAT, $thnrVormVanDePlaat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrVormVanDePlaat['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_PLAAT, $thnrVormVanDePlaat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_PLAAT, $thnrVormVanDePlaat, $comparison);
    }

    /**
     * Filter the query on the itemnr_vorm_van_de_plaat column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrVormVanDePlaat(1234); // WHERE itemnr_vorm_van_de_plaat = 1234
     * $query->filterByItemnrVormVanDePlaat(array(12, 34)); // WHERE itemnr_vorm_van_de_plaat IN (12, 34)
     * $query->filterByItemnrVormVanDePlaat(array('min' => 12)); // WHERE itemnr_vorm_van_de_plaat >= 12
     * $query->filterByItemnrVormVanDePlaat(array('max' => 12)); // WHERE itemnr_vorm_van_de_plaat <= 12
     * </code>
     *
     * @param     mixed $itemnrVormVanDePlaat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrVormVanDePlaat($itemnrVormVanDePlaat = null, $comparison = null)
    {
        if (is_array($itemnrVormVanDePlaat)) {
            $useMinMax = false;
            if (isset($itemnrVormVanDePlaat['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_PLAAT, $itemnrVormVanDePlaat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrVormVanDePlaat['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_PLAAT, $itemnrVormVanDePlaat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_PLAAT, $itemnrVormVanDePlaat, $comparison);
    }

    /**
     * Filter the query on the waterbestendig_janee column
     *
     * Example usage:
     * <code>
     * $query->filterByWaterbestendigJanee(1234); // WHERE waterbestendig_janee = 1234
     * $query->filterByWaterbestendigJanee(array(12, 34)); // WHERE waterbestendig_janee IN (12, 34)
     * $query->filterByWaterbestendigJanee(array('min' => 12)); // WHERE waterbestendig_janee >= 12
     * $query->filterByWaterbestendigJanee(array('max' => 12)); // WHERE waterbestendig_janee <= 12
     * </code>
     *
     * @param     mixed $waterbestendigJanee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByWaterbestendigJanee($waterbestendigJanee = null, $comparison = null)
    {
        if (is_array($waterbestendigJanee)) {
            $useMinMax = false;
            if (isset($waterbestendigJanee['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::WATERBESTENDIG_JANEE, $waterbestendigJanee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($waterbestendigJanee['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::WATERBESTENDIG_JANEE, $waterbestendigJanee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::WATERBESTENDIG_JANEE, $waterbestendigJanee, $comparison);
    }

    /**
     * Filter the query on the wegspoelbaar_janee column
     *
     * Example usage:
     * <code>
     * $query->filterByWegspoelbaarJanee(1234); // WHERE wegspoelbaar_janee = 1234
     * $query->filterByWegspoelbaarJanee(array(12, 34)); // WHERE wegspoelbaar_janee IN (12, 34)
     * $query->filterByWegspoelbaarJanee(array('min' => 12)); // WHERE wegspoelbaar_janee >= 12
     * $query->filterByWegspoelbaarJanee(array('max' => 12)); // WHERE wegspoelbaar_janee <= 12
     * </code>
     *
     * @param     mixed $wegspoelbaarJanee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByWegspoelbaarJanee($wegspoelbaarJanee = null, $comparison = null)
    {
        if (is_array($wegspoelbaarJanee)) {
            $useMinMax = false;
            if (isset($wegspoelbaarJanee['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::WEGSPOELBAAR_JANEE, $wegspoelbaarJanee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wegspoelbaarJanee['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::WEGSPOELBAAR_JANEE, $wegspoelbaarJanee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::WEGSPOELBAAR_JANEE, $wegspoelbaarJanee, $comparison);
    }

    /**
     * Filter the query on the split_janee column
     *
     * Example usage:
     * <code>
     * $query->filterBySplitJanee(1234); // WHERE split_janee = 1234
     * $query->filterBySplitJanee(array(12, 34)); // WHERE split_janee IN (12, 34)
     * $query->filterBySplitJanee(array('min' => 12)); // WHERE split_janee >= 12
     * $query->filterBySplitJanee(array('max' => 12)); // WHERE split_janee <= 12
     * </code>
     *
     * @param     mixed $splitJanee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterBySplitJanee($splitJanee = null, $comparison = null)
    {
        if (is_array($splitJanee)) {
            $useMinMax = false;
            if (isset($splitJanee['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::SPLIT_JANEE, $splitJanee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($splitJanee['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::SPLIT_JANEE, $splitJanee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::SPLIT_JANEE, $splitJanee, $comparison);
    }

    /**
     * Filter the query on the cuff_janee column
     *
     * Example usage:
     * <code>
     * $query->filterByCuffJanee(1234); // WHERE cuff_janee = 1234
     * $query->filterByCuffJanee(array(12, 34)); // WHERE cuff_janee IN (12, 34)
     * $query->filterByCuffJanee(array('min' => 12)); // WHERE cuff_janee >= 12
     * $query->filterByCuffJanee(array('max' => 12)); // WHERE cuff_janee <= 12
     * </code>
     *
     * @param     mixed $cuffJanee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByCuffJanee($cuffJanee = null, $comparison = null)
    {
        if (is_array($cuffJanee)) {
            $useMinMax = false;
            if (isset($cuffJanee['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::CUFF_JANEE, $cuffJanee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cuffJanee['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::CUFF_JANEE, $cuffJanee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::CUFF_JANEE, $cuffJanee, $comparison);
    }

    /**
     * Filter the query on the enkel_of_dubbelzijdig column
     *
     * Example usage:
     * <code>
     * $query->filterByEnkelOfDubbelzijdig('fooValue');   // WHERE enkel_of_dubbelzijdig = 'fooValue'
     * $query->filterByEnkelOfDubbelzijdig('%fooValue%'); // WHERE enkel_of_dubbelzijdig LIKE '%fooValue%'
     * </code>
     *
     * @param     string $enkelOfDubbelzijdig The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByEnkelOfDubbelzijdig($enkelOfDubbelzijdig = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($enkelOfDubbelzijdig)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $enkelOfDubbelzijdig)) {
                $enkelOfDubbelzijdig = str_replace('*', '%', $enkelOfDubbelzijdig);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ENKEL_OF_DUBBELZIJDIG, $enkelOfDubbelzijdig, $comparison);
    }

    /**
     * Filter the query on the thnr_absorptievermogen column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrAbsorptievermogen(1234); // WHERE thnr_absorptievermogen = 1234
     * $query->filterByThnrAbsorptievermogen(array(12, 34)); // WHERE thnr_absorptievermogen IN (12, 34)
     * $query->filterByThnrAbsorptievermogen(array('min' => 12)); // WHERE thnr_absorptievermogen >= 12
     * $query->filterByThnrAbsorptievermogen(array('max' => 12)); // WHERE thnr_absorptievermogen <= 12
     * </code>
     *
     * @param     mixed $thnrAbsorptievermogen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrAbsorptievermogen($thnrAbsorptievermogen = null, $comparison = null)
    {
        if (is_array($thnrAbsorptievermogen)) {
            $useMinMax = false;
            if (isset($thnrAbsorptievermogen['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_ABSORPTIEVERMOGEN, $thnrAbsorptievermogen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrAbsorptievermogen['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_ABSORPTIEVERMOGEN, $thnrAbsorptievermogen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_ABSORPTIEVERMOGEN, $thnrAbsorptievermogen, $comparison);
    }

    /**
     * Filter the query on the itemnr_absorptievermogen column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrAbsorptievermogen(1234); // WHERE itemnr_absorptievermogen = 1234
     * $query->filterByItemnrAbsorptievermogen(array(12, 34)); // WHERE itemnr_absorptievermogen IN (12, 34)
     * $query->filterByItemnrAbsorptievermogen(array('min' => 12)); // WHERE itemnr_absorptievermogen >= 12
     * $query->filterByItemnrAbsorptievermogen(array('max' => 12)); // WHERE itemnr_absorptievermogen <= 12
     * </code>
     *
     * @param     mixed $itemnrAbsorptievermogen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrAbsorptievermogen($itemnrAbsorptievermogen = null, $comparison = null)
    {
        if (is_array($itemnrAbsorptievermogen)) {
            $useMinMax = false;
            if (isset($itemnrAbsorptievermogen['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_ABSORPTIEVERMOGEN, $itemnrAbsorptievermogen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrAbsorptievermogen['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_ABSORPTIEVERMOGEN, $itemnrAbsorptievermogen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_ABSORPTIEVERMOGEN, $itemnrAbsorptievermogen, $comparison);
    }

    /**
     * Filter the query on the soort_incontinentie_urinefaeces column
     *
     * Example usage:
     * <code>
     * $query->filterBySoortIncontinentieUrinefaeces('fooValue');   // WHERE soort_incontinentie_urinefaeces = 'fooValue'
     * $query->filterBySoortIncontinentieUrinefaeces('%fooValue%'); // WHERE soort_incontinentie_urinefaeces LIKE '%fooValue%'
     * </code>
     *
     * @param     string $soortIncontinentieUrinefaeces The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterBySoortIncontinentieUrinefaeces($soortIncontinentieUrinefaeces = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($soortIncontinentieUrinefaeces)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $soortIncontinentieUrinefaeces)) {
                $soortIncontinentieUrinefaeces = str_replace('*', '%', $soortIncontinentieUrinefaeces);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::SOORT_INCONTINENTIE_URINEFAECES, $soortIncontinentieUrinefaeces, $comparison);
    }

    /**
     * Filter the query on the thnr_toebehoren column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrToebehoren(1234); // WHERE thnr_toebehoren = 1234
     * $query->filterByThnrToebehoren(array(12, 34)); // WHERE thnr_toebehoren IN (12, 34)
     * $query->filterByThnrToebehoren(array('min' => 12)); // WHERE thnr_toebehoren >= 12
     * $query->filterByThnrToebehoren(array('max' => 12)); // WHERE thnr_toebehoren <= 12
     * </code>
     *
     * @param     mixed $thnrToebehoren The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrToebehoren($thnrToebehoren = null, $comparison = null)
    {
        if (is_array($thnrToebehoren)) {
            $useMinMax = false;
            if (isset($thnrToebehoren['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_TOEBEHOREN, $thnrToebehoren['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrToebehoren['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_TOEBEHOREN, $thnrToebehoren['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_TOEBEHOREN, $thnrToebehoren, $comparison);
    }

    /**
     * Filter the query on the itemnr_toebehoren column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrToebehoren(1234); // WHERE itemnr_toebehoren = 1234
     * $query->filterByItemnrToebehoren(array(12, 34)); // WHERE itemnr_toebehoren IN (12, 34)
     * $query->filterByItemnrToebehoren(array('min' => 12)); // WHERE itemnr_toebehoren >= 12
     * $query->filterByItemnrToebehoren(array('max' => 12)); // WHERE itemnr_toebehoren <= 12
     * </code>
     *
     * @param     mixed $itemnrToebehoren The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrToebehoren($itemnrToebehoren = null, $comparison = null)
    {
        if (is_array($itemnrToebehoren)) {
            $useMinMax = false;
            if (isset($itemnrToebehoren['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_TOEBEHOREN, $itemnrToebehoren['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrToebehoren['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_TOEBEHOREN, $itemnrToebehoren['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_TOEBEHOREN, $itemnrToebehoren, $comparison);
    }

    /**
     * Filter the query on the thnr_fysische_toestand column
     *
     * Example usage:
     * <code>
     * $query->filterByThnrFysischeToestand(1234); // WHERE thnr_fysische_toestand = 1234
     * $query->filterByThnrFysischeToestand(array(12, 34)); // WHERE thnr_fysische_toestand IN (12, 34)
     * $query->filterByThnrFysischeToestand(array('min' => 12)); // WHERE thnr_fysische_toestand >= 12
     * $query->filterByThnrFysischeToestand(array('max' => 12)); // WHERE thnr_fysische_toestand <= 12
     * </code>
     *
     * @param     mixed $thnrFysischeToestand The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByThnrFysischeToestand($thnrFysischeToestand = null, $comparison = null)
    {
        if (is_array($thnrFysischeToestand)) {
            $useMinMax = false;
            if (isset($thnrFysischeToestand['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_FYSISCHE_TOESTAND, $thnrFysischeToestand['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($thnrFysischeToestand['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_FYSISCHE_TOESTAND, $thnrFysischeToestand['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::THNR_FYSISCHE_TOESTAND, $thnrFysischeToestand, $comparison);
    }

    /**
     * Filter the query on the itemnr_fysische_toestand column
     *
     * Example usage:
     * <code>
     * $query->filterByItemnrFysischeToestand(1234); // WHERE itemnr_fysische_toestand = 1234
     * $query->filterByItemnrFysischeToestand(array(12, 34)); // WHERE itemnr_fysische_toestand IN (12, 34)
     * $query->filterByItemnrFysischeToestand(array('min' => 12)); // WHERE itemnr_fysische_toestand >= 12
     * $query->filterByItemnrFysischeToestand(array('max' => 12)); // WHERE itemnr_fysische_toestand <= 12
     * </code>
     *
     * @param     mixed $itemnrFysischeToestand The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByItemnrFysischeToestand($itemnrFysischeToestand = null, $comparison = null)
    {
        if (is_array($itemnrFysischeToestand)) {
            $useMinMax = false;
            if (isset($itemnrFysischeToestand['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_FYSISCHE_TOESTAND, $itemnrFysischeToestand['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemnrFysischeToestand['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_FYSISCHE_TOESTAND, $itemnrFysischeToestand['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::ITEMNR_FYSISCHE_TOESTAND, $itemnrFysischeToestand, $comparison);
    }

    /**
     * Filter the query on the impregneermiddel_samenstelling column
     *
     * Example usage:
     * <code>
     * $query->filterByImpregneermiddelSamenstelling(1234); // WHERE impregneermiddel_samenstelling = 1234
     * $query->filterByImpregneermiddelSamenstelling(array(12, 34)); // WHERE impregneermiddel_samenstelling IN (12, 34)
     * $query->filterByImpregneermiddelSamenstelling(array('min' => 12)); // WHERE impregneermiddel_samenstelling >= 12
     * $query->filterByImpregneermiddelSamenstelling(array('max' => 12)); // WHERE impregneermiddel_samenstelling <= 12
     * </code>
     *
     * @param     mixed $impregneermiddelSamenstelling The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function filterByImpregneermiddelSamenstelling($impregneermiddelSamenstelling = null, $comparison = null)
    {
        if (is_array($impregneermiddelSamenstelling)) {
            $useMinMax = false;
            if (isset($impregneermiddelSamenstelling['min'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::IMPREGNEERMIDDEL_SAMENSTELLING, $impregneermiddelSamenstelling['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($impregneermiddelSamenstelling['max'])) {
                $this->addUsingAlias(GsMedischeHulpmiddelenPeer::IMPREGNEERMIDDEL_SAMENSTELLING, $impregneermiddelSamenstelling['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GsMedischeHulpmiddelenPeer::IMPREGNEERMIDDEL_SAMENSTELLING, $impregneermiddelSamenstelling, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   GsMedischeHulpmiddelen $gsMedischeHulpmiddelen Object to remove from the list of results
     *
     * @return GsMedischeHulpmiddelenQuery The current query, for fluid interface
     */
    public function prune($gsMedischeHulpmiddelen = null)
    {
        if ($gsMedischeHulpmiddelen) {
            $this->addCond('pruneCond0', $this->getAliasedColName(GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE), $gsMedischeHulpmiddelen->getMedischHulpmiddelkode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE), $gsMedischeHulpmiddelen->getSoortHulpmiddelkode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
