<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BaseObject;
use \BasePeer;
use \Criteria;
use \Exception;
use \PDO;
use \Persistent;
use \Propel;
use \PropelException;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsMedischeHulpmiddelen;
use PharmaIntelligence\GstandaardBundle\Model\GsMedischeHulpmiddelenPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsMedischeHulpmiddelenQuery;

abstract class BaseGsMedischeHulpmiddelen extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsMedischeHulpmiddelenPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsMedischeHulpmiddelenPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the bestandnummer field.
     * @var        int
     */
    protected $bestandnummer;

    /**
     * The value for the mutatiekode field.
     * @var        int
     */
    protected $mutatiekode;

    /**
     * The value for the medisch_hulpmiddelkode field.
     * @var        int
     */
    protected $medisch_hulpmiddelkode;

    /**
     * The value for the substitutie_kode field.
     * @var        int
     */
    protected $substitutie_kode;

    /**
     * The value for the thnr_soort_hulpmiddel field.
     * @var        int
     */
    protected $thnr_soort_hulpmiddel;

    /**
     * The value for the soort_hulpmiddelkode field.
     * @var        int
     */
    protected $soort_hulpmiddelkode;

    /**
     * The value for the gesteriliseerd_janee field.
     * @var        int
     */
    protected $gesteriliseerd_janee;

    /**
     * The value for the thnr_sterilisatiemethode field.
     * @var        int
     */
    protected $thnr_sterilisatiemethode;

    /**
     * The value for the itemnr_sterilisatiemethode field.
     * @var        int
     */
    protected $itemnr_sterilisatiemethode;

    /**
     * The value for the thnr_sluiting field.
     * @var        int
     */
    protected $thnr_sluiting;

    /**
     * The value for the itemnr_sluiting field.
     * @var        int
     */
    protected $itemnr_sluiting;

    /**
     * The value for the aantal_delen field.
     * @var        int
     */
    protected $aantal_delen;

    /**
     * The value for the aantal_kanalen field.
     * @var        int
     */
    protected $aantal_kanalen;

    /**
     * The value for the thnr_bevestiging field.
     * @var        int
     */
    protected $thnr_bevestiging;

    /**
     * The value for the itemnr_bevestiging field.
     * @var        int
     */
    protected $itemnr_bevestiging;

    /**
     * The value for the breedte_hoeveelheid field.
     * @var        string
     */
    protected $breedte_hoeveelheid;

    /**
     * The value for the thnr_breedte_eenheid field.
     * @var        int
     */
    protected $thnr_breedte_eenheid;

    /**
     * The value for the itemnr_breedte_eenheid field.
     * @var        int
     */
    protected $itemnr_breedte_eenheid;

    /**
     * The value for the drukklasse field.
     * @var        int
     */
    protected $drukklasse;

    /**
     * The value for the diameter_hoeveelheid field.
     * @var        string
     */
    protected $diameter_hoeveelheid;

    /**
     * The value for the thnr_diameter_eenheid field.
     * @var        int
     */
    protected $thnr_diameter_eenheid;

    /**
     * The value for the itemnr_diameter_eenheid field.
     * @var        int
     */
    protected $itemnr_diameter_eenheid;

    /**
     * The value for the dicht_of_open_geweven field.
     * @var        string
     */
    protected $dicht_of_open_geweven;

    /**
     * The value for the thnr_doorlaatbaarheid field.
     * @var        int
     */
    protected $thnr_doorlaatbaarheid;

    /**
     * The value for the itemnr_doorlaatbaarheid field.
     * @var        int
     */
    protected $itemnr_doorlaatbaarheid;

    /**
     * The value for the draagbaar_janee field.
     * @var        int
     */
    protected $draagbaar_janee;

    /**
     * The value for the thnr_draagplaats field.
     * @var        int
     */
    protected $thnr_draagplaats;

    /**
     * The value for the itemnr_draagplaats field.
     * @var        int
     */
    protected $itemnr_draagplaats;

    /**
     * The value for the thnr_extra_kenmerk field.
     * @var        int
     */
    protected $thnr_extra_kenmerk;

    /**
     * The value for the item_nr_extra_kenmerk field.
     * @var        int
     */
    protected $item_nr_extra_kenmerk;

    /**
     * The value for the filter_janee field.
     * @var        int
     */
    protected $filter_janee;

    /**
     * The value for the flensmaat_hoeveelheid field.
     * @var        string
     */
    protected $flensmaat_hoeveelheid;

    /**
     * The value for the thnr_flensmaat_eenheid field.
     * @var        int
     */
    protected $thnr_flensmaat_eenheid;

    /**
     * The value for the itemnr_flensmaat_eenheid field.
     * @var        int
     */
    protected $itemnr_flensmaat_eenheid;

    /**
     * The value for the geslacht field.
     * @var        string
     */
    protected $geslacht;

    /**
     * The value for the glijmiddel_janee field.
     * @var        int
     */
    protected $glijmiddel_janee;

    /**
     * The value for the hergebruik_mogelijk_janee field.
     * @var        int
     */
    protected $hergebruik_mogelijk_janee;

    /**
     * The value for the thnr_hulpmiddelpresentatie field.
     * @var        int
     */
    protected $thnr_hulpmiddelpresentatie;

    /**
     * The value for the itemnr_hulpmiddelpresentatie field.
     * @var        int
     */
    protected $itemnr_hulpmiddelpresentatie;

    /**
     * The value for the thnr_kleeflaag field.
     * @var        int
     */
    protected $thnr_kleeflaag;

    /**
     * The value for the itemnr_kleeflaag field.
     * @var        int
     */
    protected $itemnr_kleeflaag;

    /**
     * The value for the kleur_thesaurusnummer field.
     * @var        int
     */
    protected $kleur_thesaurusnummer;

    /**
     * The value for the itemnr_kleur field.
     * @var        int
     */
    protected $itemnr_kleur;

    /**
     * The value for the lengte_1_hoeveelheid field.
     * @var        string
     */
    protected $lengte_1_hoeveelheid;

    /**
     * The value for the thnr_lengte_1_eenheid field.
     * @var        int
     */
    protected $thnr_lengte_1_eenheid;

    /**
     * The value for the itemnr_lengte_1_eenheid field.
     * @var        int
     */
    protected $itemnr_lengte_1_eenheid;

    /**
     * The value for the lengte_2_hoeveelheid field.
     * @var        string
     */
    protected $lengte_2_hoeveelheid;

    /**
     * The value for the thnr_lengte_2_eenheid field.
     * @var        int
     */
    protected $thnr_lengte_2_eenheid;

    /**
     * The value for the itemnr_lengte_2_eenheid field.
     * @var        int
     */
    protected $itemnr_lengte_2_eenheid;

    /**
     * The value for the maasgrootte field.
     * @var        string
     */
    protected $maasgrootte;

    /**
     * The value for the thnr_maataanduiding field.
     * @var        int
     */
    protected $thnr_maataanduiding;

    /**
     * The value for the itemnr_maataanduiding field.
     * @var        int
     */
    protected $itemnr_maataanduiding;

    /**
     * The value for the thnr_materiaal field.
     * @var        int
     */
    protected $thnr_materiaal;

    /**
     * The value for the itemnr_materiaal field.
     * @var        int
     */
    protected $itemnr_materiaal;

    /**
     * The value for the niet_aan_de_wond_hechtend field.
     * @var        string
     */
    protected $niet_aan_de_wond_hechtend;

    /**
     * The value for the thnr_plaats_sluiting field.
     * @var        int
     */
    protected $thnr_plaats_sluiting;

    /**
     * The value for the itemnr_plaats_sluiting field.
     * @var        int
     */
    protected $itemnr_plaats_sluiting;

    /**
     * The value for the rekpercentage field.
     * @var        int
     */
    protected $rekpercentage;

    /**
     * The value for the rekrichting field.
     * @var        string
     */
    protected $rekrichting;

    /**
     * The value for the thnr_rekaanduiding field.
     * @var        int
     */
    protected $thnr_rekaanduiding;

    /**
     * The value for the itemnr_rekaanduiding field.
     * @var        int
     */
    protected $itemnr_rekaanduiding;

    /**
     * The value for the rontgencontrastdraad_aanwezig_jn field.
     * @var        int
     */
    protected $rontgencontrastdraad_aanwezig_jn;

    /**
     * The value for the thnr_hulpmiddelsysteem field.
     * @var        int
     */
    protected $thnr_hulpmiddelsysteem;

    /**
     * The value for the itemnr_hulpmiddelsysteem field.
     * @var        int
     */
    protected $itemnr_hulpmiddelsysteem;

    /**
     * The value for the terugslagvoorziening_janee field.
     * @var        int
     */
    protected $terugslagvoorziening_janee;

    /**
     * The value for the toepassing_afnameverblijf field.
     * @var        string
     */
    protected $toepassing_afnameverblijf;

    /**
     * The value for the type_punt_nelatontiemann field.
     * @var        string
     */
    protected $type_punt_nelatontiemann;

    /**
     * The value for the volume_hoeveelheid field.
     * @var        string
     */
    protected $volume_hoeveelheid;

    /**
     * The value for the thnr_volume_eenheid field.
     * @var        int
     */
    protected $thnr_volume_eenheid;

    /**
     * The value for the itemnr_volume_eenheid field.
     * @var        int
     */
    protected $itemnr_volume_eenheid;

    /**
     * The value for the thnr_vorm field.
     * @var        int
     */
    protected $thnr_vorm;

    /**
     * The value for the itemnr_vorm field.
     * @var        int
     */
    protected $itemnr_vorm;

    /**
     * The value for the thnr_vorm_van_de_opening field.
     * @var        int
     */
    protected $thnr_vorm_van_de_opening;

    /**
     * The value for the itemnr_vorm_van_de_opening field.
     * @var        int
     */
    protected $itemnr_vorm_van_de_opening;

    /**
     * The value for the thnr_vorm_van_de_plaat field.
     * @var        int
     */
    protected $thnr_vorm_van_de_plaat;

    /**
     * The value for the itemnr_vorm_van_de_plaat field.
     * @var        int
     */
    protected $itemnr_vorm_van_de_plaat;

    /**
     * The value for the waterbestendig_janee field.
     * @var        int
     */
    protected $waterbestendig_janee;

    /**
     * The value for the wegspoelbaar_janee field.
     * @var        int
     */
    protected $wegspoelbaar_janee;

    /**
     * The value for the split_janee field.
     * @var        int
     */
    protected $split_janee;

    /**
     * The value for the cuff_janee field.
     * @var        int
     */
    protected $cuff_janee;

    /**
     * The value for the enkel_of_dubbelzijdig field.
     * @var        string
     */
    protected $enkel_of_dubbelzijdig;

    /**
     * The value for the thnr_absorptievermogen field.
     * @var        int
     */
    protected $thnr_absorptievermogen;

    /**
     * The value for the itemnr_absorptievermogen field.
     * @var        int
     */
    protected $itemnr_absorptievermogen;

    /**
     * The value for the soort_incontinentie_urinefaeces field.
     * @var        string
     */
    protected $soort_incontinentie_urinefaeces;

    /**
     * The value for the thnr_toebehoren field.
     * @var        int
     */
    protected $thnr_toebehoren;

    /**
     * The value for the itemnr_toebehoren field.
     * @var        int
     */
    protected $itemnr_toebehoren;

    /**
     * The value for the thnr_fysische_toestand field.
     * @var        int
     */
    protected $thnr_fysische_toestand;

    /**
     * The value for the itemnr_fysische_toestand field.
     * @var        int
     */
    protected $itemnr_fysische_toestand;

    /**
     * The value for the impregneermiddel_samenstelling field.
     * @var        int
     */
    protected $impregneermiddel_samenstelling;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Get the [bestandnummer] column value.
     *
     * @return int
     */
    public function getBestandnummer()
    {

        return $this->bestandnummer;
    }

    /**
     * Get the [mutatiekode] column value.
     *
     * @return int
     */
    public function getMutatiekode()
    {

        return $this->mutatiekode;
    }

    /**
     * Get the [medisch_hulpmiddelkode] column value.
     *
     * @return int
     */
    public function getMedischHulpmiddelkode()
    {

        return $this->medisch_hulpmiddelkode;
    }

    /**
     * Get the [substitutie_kode] column value.
     *
     * @return int
     */
    public function getSubstitutieKode()
    {

        return $this->substitutie_kode;
    }

    /**
     * Get the [thnr_soort_hulpmiddel] column value.
     *
     * @return int
     */
    public function getThnrSoortHulpmiddel()
    {

        return $this->thnr_soort_hulpmiddel;
    }

    /**
     * Get the [soort_hulpmiddelkode] column value.
     *
     * @return int
     */
    public function getSoortHulpmiddelkode()
    {

        return $this->soort_hulpmiddelkode;
    }

    /**
     * Get the [gesteriliseerd_janee] column value.
     *
     * @return int
     */
    public function getGesteriliseerdJanee()
    {

        return $this->gesteriliseerd_janee;
    }

    /**
     * Get the [thnr_sterilisatiemethode] column value.
     *
     * @return int
     */
    public function getThnrSterilisatiemethode()
    {

        return $this->thnr_sterilisatiemethode;
    }

    /**
     * Get the [itemnr_sterilisatiemethode] column value.
     *
     * @return int
     */
    public function getItemnrSterilisatiemethode()
    {

        return $this->itemnr_sterilisatiemethode;
    }

    /**
     * Get the [thnr_sluiting] column value.
     *
     * @return int
     */
    public function getThnrSluiting()
    {

        return $this->thnr_sluiting;
    }

    /**
     * Get the [itemnr_sluiting] column value.
     *
     * @return int
     */
    public function getItemnrSluiting()
    {

        return $this->itemnr_sluiting;
    }

    /**
     * Get the [aantal_delen] column value.
     *
     * @return int
     */
    public function getAantalDelen()
    {

        return $this->aantal_delen;
    }

    /**
     * Get the [aantal_kanalen] column value.
     *
     * @return int
     */
    public function getAantalKanalen()
    {

        return $this->aantal_kanalen;
    }

    /**
     * Get the [thnr_bevestiging] column value.
     *
     * @return int
     */
    public function getThnrBevestiging()
    {

        return $this->thnr_bevestiging;
    }

    /**
     * Get the [itemnr_bevestiging] column value.
     *
     * @return int
     */
    public function getItemnrBevestiging()
    {

        return $this->itemnr_bevestiging;
    }

    /**
     * Get the [breedte_hoeveelheid] column value.
     *
     * @return string
     */
    public function getBreedteHoeveelheid()
    {

        return $this->breedte_hoeveelheid;
    }

    /**
     * Get the [thnr_breedte_eenheid] column value.
     *
     * @return int
     */
    public function getThnrBreedteEenheid()
    {

        return $this->thnr_breedte_eenheid;
    }

    /**
     * Get the [itemnr_breedte_eenheid] column value.
     *
     * @return int
     */
    public function getItemnrBreedteEenheid()
    {

        return $this->itemnr_breedte_eenheid;
    }

    /**
     * Get the [drukklasse] column value.
     *
     * @return int
     */
    public function getDrukklasse()
    {

        return $this->drukklasse;
    }

    /**
     * Get the [diameter_hoeveelheid] column value.
     *
     * @return string
     */
    public function getDiameterHoeveelheid()
    {

        return $this->diameter_hoeveelheid;
    }

    /**
     * Get the [thnr_diameter_eenheid] column value.
     *
     * @return int
     */
    public function getThnrDiameterEenheid()
    {

        return $this->thnr_diameter_eenheid;
    }

    /**
     * Get the [itemnr_diameter_eenheid] column value.
     *
     * @return int
     */
    public function getItemnrDiameterEenheid()
    {

        return $this->itemnr_diameter_eenheid;
    }

    /**
     * Get the [dicht_of_open_geweven] column value.
     *
     * @return string
     */
    public function getDichtOfOpenGeweven()
    {

        return $this->dicht_of_open_geweven;
    }

    /**
     * Get the [thnr_doorlaatbaarheid] column value.
     *
     * @return int
     */
    public function getThnrDoorlaatbaarheid()
    {

        return $this->thnr_doorlaatbaarheid;
    }

    /**
     * Get the [itemnr_doorlaatbaarheid] column value.
     *
     * @return int
     */
    public function getItemnrDoorlaatbaarheid()
    {

        return $this->itemnr_doorlaatbaarheid;
    }

    /**
     * Get the [draagbaar_janee] column value.
     *
     * @return int
     */
    public function getDraagbaarJanee()
    {

        return $this->draagbaar_janee;
    }

    /**
     * Get the [thnr_draagplaats] column value.
     *
     * @return int
     */
    public function getThnrDraagplaats()
    {

        return $this->thnr_draagplaats;
    }

    /**
     * Get the [itemnr_draagplaats] column value.
     *
     * @return int
     */
    public function getItemnrDraagplaats()
    {

        return $this->itemnr_draagplaats;
    }

    /**
     * Get the [thnr_extra_kenmerk] column value.
     *
     * @return int
     */
    public function getThnrExtraKenmerk()
    {

        return $this->thnr_extra_kenmerk;
    }

    /**
     * Get the [item_nr_extra_kenmerk] column value.
     *
     * @return int
     */
    public function getItemNrExtraKenmerk()
    {

        return $this->item_nr_extra_kenmerk;
    }

    /**
     * Get the [filter_janee] column value.
     *
     * @return int
     */
    public function getFilterJanee()
    {

        return $this->filter_janee;
    }

    /**
     * Get the [flensmaat_hoeveelheid] column value.
     *
     * @return string
     */
    public function getFlensmaatHoeveelheid()
    {

        return $this->flensmaat_hoeveelheid;
    }

    /**
     * Get the [thnr_flensmaat_eenheid] column value.
     *
     * @return int
     */
    public function getThnrFlensmaatEenheid()
    {

        return $this->thnr_flensmaat_eenheid;
    }

    /**
     * Get the [itemnr_flensmaat_eenheid] column value.
     *
     * @return int
     */
    public function getItemnrFlensmaatEenheid()
    {

        return $this->itemnr_flensmaat_eenheid;
    }

    /**
     * Get the [geslacht] column value.
     *
     * @return string
     */
    public function getGeslacht()
    {

        return $this->geslacht;
    }

    /**
     * Get the [glijmiddel_janee] column value.
     *
     * @return int
     */
    public function getGlijmiddelJanee()
    {

        return $this->glijmiddel_janee;
    }

    /**
     * Get the [hergebruik_mogelijk_janee] column value.
     *
     * @return int
     */
    public function getHergebruikMogelijkJanee()
    {

        return $this->hergebruik_mogelijk_janee;
    }

    /**
     * Get the [thnr_hulpmiddelpresentatie] column value.
     *
     * @return int
     */
    public function getThnrHulpmiddelpresentatie()
    {

        return $this->thnr_hulpmiddelpresentatie;
    }

    /**
     * Get the [itemnr_hulpmiddelpresentatie] column value.
     *
     * @return int
     */
    public function getItemnrHulpmiddelpresentatie()
    {

        return $this->itemnr_hulpmiddelpresentatie;
    }

    /**
     * Get the [thnr_kleeflaag] column value.
     *
     * @return int
     */
    public function getThnrKleeflaag()
    {

        return $this->thnr_kleeflaag;
    }

    /**
     * Get the [itemnr_kleeflaag] column value.
     *
     * @return int
     */
    public function getItemnrKleeflaag()
    {

        return $this->itemnr_kleeflaag;
    }

    /**
     * Get the [kleur_thesaurusnummer] column value.
     *
     * @return int
     */
    public function getKleurThesaurusnummer()
    {

        return $this->kleur_thesaurusnummer;
    }

    /**
     * Get the [itemnr_kleur] column value.
     *
     * @return int
     */
    public function getItemnrKleur()
    {

        return $this->itemnr_kleur;
    }

    /**
     * Get the [lengte_1_hoeveelheid] column value.
     *
     * @return string
     */
    public function getLengte1Hoeveelheid()
    {

        return $this->lengte_1_hoeveelheid;
    }

    /**
     * Get the [thnr_lengte_1_eenheid] column value.
     *
     * @return int
     */
    public function getThnrLengte1Eenheid()
    {

        return $this->thnr_lengte_1_eenheid;
    }

    /**
     * Get the [itemnr_lengte_1_eenheid] column value.
     *
     * @return int
     */
    public function getItemnrLengte1Eenheid()
    {

        return $this->itemnr_lengte_1_eenheid;
    }

    /**
     * Get the [lengte_2_hoeveelheid] column value.
     *
     * @return string
     */
    public function getLengte2Hoeveelheid()
    {

        return $this->lengte_2_hoeveelheid;
    }

    /**
     * Get the [thnr_lengte_2_eenheid] column value.
     *
     * @return int
     */
    public function getThnrLengte2Eenheid()
    {

        return $this->thnr_lengte_2_eenheid;
    }

    /**
     * Get the [itemnr_lengte_2_eenheid] column value.
     *
     * @return int
     */
    public function getItemnrLengte2Eenheid()
    {

        return $this->itemnr_lengte_2_eenheid;
    }

    /**
     * Get the [maasgrootte] column value.
     *
     * @return string
     */
    public function getMaasgrootte()
    {

        return $this->maasgrootte;
    }

    /**
     * Get the [thnr_maataanduiding] column value.
     *
     * @return int
     */
    public function getThnrMaataanduiding()
    {

        return $this->thnr_maataanduiding;
    }

    /**
     * Get the [itemnr_maataanduiding] column value.
     *
     * @return int
     */
    public function getItemnrMaataanduiding()
    {

        return $this->itemnr_maataanduiding;
    }

    /**
     * Get the [thnr_materiaal] column value.
     *
     * @return int
     */
    public function getThnrMateriaal()
    {

        return $this->thnr_materiaal;
    }

    /**
     * Get the [itemnr_materiaal] column value.
     *
     * @return int
     */
    public function getItemnrMateriaal()
    {

        return $this->itemnr_materiaal;
    }

    /**
     * Get the [niet_aan_de_wond_hechtend] column value.
     *
     * @return string
     */
    public function getNietAanDeWondHechtend()
    {

        return $this->niet_aan_de_wond_hechtend;
    }

    /**
     * Get the [thnr_plaats_sluiting] column value.
     *
     * @return int
     */
    public function getThnrPlaatsSluiting()
    {

        return $this->thnr_plaats_sluiting;
    }

    /**
     * Get the [itemnr_plaats_sluiting] column value.
     *
     * @return int
     */
    public function getItemnrPlaatsSluiting()
    {

        return $this->itemnr_plaats_sluiting;
    }

    /**
     * Get the [rekpercentage] column value.
     *
     * @return int
     */
    public function getRekpercentage()
    {

        return $this->rekpercentage;
    }

    /**
     * Get the [rekrichting] column value.
     *
     * @return string
     */
    public function getRekrichting()
    {

        return $this->rekrichting;
    }

    /**
     * Get the [thnr_rekaanduiding] column value.
     *
     * @return int
     */
    public function getThnrRekaanduiding()
    {

        return $this->thnr_rekaanduiding;
    }

    /**
     * Get the [itemnr_rekaanduiding] column value.
     *
     * @return int
     */
    public function getItemnrRekaanduiding()
    {

        return $this->itemnr_rekaanduiding;
    }

    /**
     * Get the [rontgencontrastdraad_aanwezig_jn] column value.
     *
     * @return int
     */
    public function getRontgencontrastdraadAanwezigJn()
    {

        return $this->rontgencontrastdraad_aanwezig_jn;
    }

    /**
     * Get the [thnr_hulpmiddelsysteem] column value.
     *
     * @return int
     */
    public function getThnrHulpmiddelsysteem()
    {

        return $this->thnr_hulpmiddelsysteem;
    }

    /**
     * Get the [itemnr_hulpmiddelsysteem] column value.
     *
     * @return int
     */
    public function getItemnrHulpmiddelsysteem()
    {

        return $this->itemnr_hulpmiddelsysteem;
    }

    /**
     * Get the [terugslagvoorziening_janee] column value.
     *
     * @return int
     */
    public function getTerugslagvoorzieningJanee()
    {

        return $this->terugslagvoorziening_janee;
    }

    /**
     * Get the [toepassing_afnameverblijf] column value.
     *
     * @return string
     */
    public function getToepassingAfnameverblijf()
    {

        return $this->toepassing_afnameverblijf;
    }

    /**
     * Get the [type_punt_nelatontiemann] column value.
     *
     * @return string
     */
    public function getTypePuntNelatontiemann()
    {

        return $this->type_punt_nelatontiemann;
    }

    /**
     * Get the [volume_hoeveelheid] column value.
     *
     * @return string
     */
    public function getVolumeHoeveelheid()
    {

        return $this->volume_hoeveelheid;
    }

    /**
     * Get the [thnr_volume_eenheid] column value.
     *
     * @return int
     */
    public function getThnrVolumeEenheid()
    {

        return $this->thnr_volume_eenheid;
    }

    /**
     * Get the [itemnr_volume_eenheid] column value.
     *
     * @return int
     */
    public function getItemnrVolumeEenheid()
    {

        return $this->itemnr_volume_eenheid;
    }

    /**
     * Get the [thnr_vorm] column value.
     *
     * @return int
     */
    public function getThnrVorm()
    {

        return $this->thnr_vorm;
    }

    /**
     * Get the [itemnr_vorm] column value.
     *
     * @return int
     */
    public function getItemnrVorm()
    {

        return $this->itemnr_vorm;
    }

    /**
     * Get the [thnr_vorm_van_de_opening] column value.
     *
     * @return int
     */
    public function getThnrVormVanDeOpening()
    {

        return $this->thnr_vorm_van_de_opening;
    }

    /**
     * Get the [itemnr_vorm_van_de_opening] column value.
     *
     * @return int
     */
    public function getItemnrVormVanDeOpening()
    {

        return $this->itemnr_vorm_van_de_opening;
    }

    /**
     * Get the [thnr_vorm_van_de_plaat] column value.
     *
     * @return int
     */
    public function getThnrVormVanDePlaat()
    {

        return $this->thnr_vorm_van_de_plaat;
    }

    /**
     * Get the [itemnr_vorm_van_de_plaat] column value.
     *
     * @return int
     */
    public function getItemnrVormVanDePlaat()
    {

        return $this->itemnr_vorm_van_de_plaat;
    }

    /**
     * Get the [waterbestendig_janee] column value.
     *
     * @return int
     */
    public function getWaterbestendigJanee()
    {

        return $this->waterbestendig_janee;
    }

    /**
     * Get the [wegspoelbaar_janee] column value.
     *
     * @return int
     */
    public function getWegspoelbaarJanee()
    {

        return $this->wegspoelbaar_janee;
    }

    /**
     * Get the [split_janee] column value.
     *
     * @return int
     */
    public function getSplitJanee()
    {

        return $this->split_janee;
    }

    /**
     * Get the [cuff_janee] column value.
     *
     * @return int
     */
    public function getCuffJanee()
    {

        return $this->cuff_janee;
    }

    /**
     * Get the [enkel_of_dubbelzijdig] column value.
     *
     * @return string
     */
    public function getEnkelOfDubbelzijdig()
    {

        return $this->enkel_of_dubbelzijdig;
    }

    /**
     * Get the [thnr_absorptievermogen] column value.
     *
     * @return int
     */
    public function getThnrAbsorptievermogen()
    {

        return $this->thnr_absorptievermogen;
    }

    /**
     * Get the [itemnr_absorptievermogen] column value.
     *
     * @return int
     */
    public function getItemnrAbsorptievermogen()
    {

        return $this->itemnr_absorptievermogen;
    }

    /**
     * Get the [soort_incontinentie_urinefaeces] column value.
     *
     * @return string
     */
    public function getSoortIncontinentieUrinefaeces()
    {

        return $this->soort_incontinentie_urinefaeces;
    }

    /**
     * Get the [thnr_toebehoren] column value.
     *
     * @return int
     */
    public function getThnrToebehoren()
    {

        return $this->thnr_toebehoren;
    }

    /**
     * Get the [itemnr_toebehoren] column value.
     *
     * @return int
     */
    public function getItemnrToebehoren()
    {

        return $this->itemnr_toebehoren;
    }

    /**
     * Get the [thnr_fysische_toestand] column value.
     *
     * @return int
     */
    public function getThnrFysischeToestand()
    {

        return $this->thnr_fysische_toestand;
    }

    /**
     * Get the [itemnr_fysische_toestand] column value.
     *
     * @return int
     */
    public function getItemnrFysischeToestand()
    {

        return $this->itemnr_fysische_toestand;
    }

    /**
     * Get the [impregneermiddel_samenstelling] column value.
     *
     * @return int
     */
    public function getImpregneermiddelSamenstelling()
    {

        return $this->impregneermiddel_samenstelling;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [medisch_hulpmiddelkode] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setMedischHulpmiddelkode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->medisch_hulpmiddelkode !== $v) {
            $this->medisch_hulpmiddelkode = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE;
        }


        return $this;
    } // setMedischHulpmiddelkode()

    /**
     * Set the value of [substitutie_kode] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setSubstitutieKode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->substitutie_kode !== $v) {
            $this->substitutie_kode = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::SUBSTITUTIE_KODE;
        }


        return $this;
    } // setSubstitutieKode()

    /**
     * Set the value of [thnr_soort_hulpmiddel] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrSoortHulpmiddel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_soort_hulpmiddel !== $v) {
            $this->thnr_soort_hulpmiddel = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_SOORT_HULPMIDDEL;
        }


        return $this;
    } // setThnrSoortHulpmiddel()

    /**
     * Set the value of [soort_hulpmiddelkode] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setSoortHulpmiddelkode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->soort_hulpmiddelkode !== $v) {
            $this->soort_hulpmiddelkode = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE;
        }


        return $this;
    } // setSoortHulpmiddelkode()

    /**
     * Set the value of [gesteriliseerd_janee] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setGesteriliseerdJanee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gesteriliseerd_janee !== $v) {
            $this->gesteriliseerd_janee = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::GESTERILISEERD_JANEE;
        }


        return $this;
    } // setGesteriliseerdJanee()

    /**
     * Set the value of [thnr_sterilisatiemethode] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrSterilisatiemethode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_sterilisatiemethode !== $v) {
            $this->thnr_sterilisatiemethode = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_STERILISATIEMETHODE;
        }


        return $this;
    } // setThnrSterilisatiemethode()

    /**
     * Set the value of [itemnr_sterilisatiemethode] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrSterilisatiemethode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_sterilisatiemethode !== $v) {
            $this->itemnr_sterilisatiemethode = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_STERILISATIEMETHODE;
        }


        return $this;
    } // setItemnrSterilisatiemethode()

    /**
     * Set the value of [thnr_sluiting] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrSluiting($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_sluiting !== $v) {
            $this->thnr_sluiting = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_SLUITING;
        }


        return $this;
    } // setThnrSluiting()

    /**
     * Set the value of [itemnr_sluiting] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrSluiting($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_sluiting !== $v) {
            $this->itemnr_sluiting = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_SLUITING;
        }


        return $this;
    } // setItemnrSluiting()

    /**
     * Set the value of [aantal_delen] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setAantalDelen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aantal_delen !== $v) {
            $this->aantal_delen = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::AANTAL_DELEN;
        }


        return $this;
    } // setAantalDelen()

    /**
     * Set the value of [aantal_kanalen] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setAantalKanalen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->aantal_kanalen !== $v) {
            $this->aantal_kanalen = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::AANTAL_KANALEN;
        }


        return $this;
    } // setAantalKanalen()

    /**
     * Set the value of [thnr_bevestiging] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrBevestiging($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_bevestiging !== $v) {
            $this->thnr_bevestiging = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_BEVESTIGING;
        }


        return $this;
    } // setThnrBevestiging()

    /**
     * Set the value of [itemnr_bevestiging] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrBevestiging($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_bevestiging !== $v) {
            $this->itemnr_bevestiging = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_BEVESTIGING;
        }


        return $this;
    } // setItemnrBevestiging()

    /**
     * Set the value of [breedte_hoeveelheid] column.
     *
     * @param  string $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setBreedteHoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->breedte_hoeveelheid !== $v) {
            $this->breedte_hoeveelheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::BREEDTE_HOEVEELHEID;
        }


        return $this;
    } // setBreedteHoeveelheid()

    /**
     * Set the value of [thnr_breedte_eenheid] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrBreedteEenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_breedte_eenheid !== $v) {
            $this->thnr_breedte_eenheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_BREEDTE_EENHEID;
        }


        return $this;
    } // setThnrBreedteEenheid()

    /**
     * Set the value of [itemnr_breedte_eenheid] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrBreedteEenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_breedte_eenheid !== $v) {
            $this->itemnr_breedte_eenheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_BREEDTE_EENHEID;
        }


        return $this;
    } // setItemnrBreedteEenheid()

    /**
     * Set the value of [drukklasse] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setDrukklasse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->drukklasse !== $v) {
            $this->drukklasse = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::DRUKKLASSE;
        }


        return $this;
    } // setDrukklasse()

    /**
     * Set the value of [diameter_hoeveelheid] column.
     *
     * @param  string $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setDiameterHoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->diameter_hoeveelheid !== $v) {
            $this->diameter_hoeveelheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::DIAMETER_HOEVEELHEID;
        }


        return $this;
    } // setDiameterHoeveelheid()

    /**
     * Set the value of [thnr_diameter_eenheid] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrDiameterEenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_diameter_eenheid !== $v) {
            $this->thnr_diameter_eenheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_DIAMETER_EENHEID;
        }


        return $this;
    } // setThnrDiameterEenheid()

    /**
     * Set the value of [itemnr_diameter_eenheid] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrDiameterEenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_diameter_eenheid !== $v) {
            $this->itemnr_diameter_eenheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_DIAMETER_EENHEID;
        }


        return $this;
    } // setItemnrDiameterEenheid()

    /**
     * Set the value of [dicht_of_open_geweven] column.
     *
     * @param  string $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setDichtOfOpenGeweven($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dicht_of_open_geweven !== $v) {
            $this->dicht_of_open_geweven = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::DICHT_OF_OPEN_GEWEVEN;
        }


        return $this;
    } // setDichtOfOpenGeweven()

    /**
     * Set the value of [thnr_doorlaatbaarheid] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrDoorlaatbaarheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_doorlaatbaarheid !== $v) {
            $this->thnr_doorlaatbaarheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_DOORLAATBAARHEID;
        }


        return $this;
    } // setThnrDoorlaatbaarheid()

    /**
     * Set the value of [itemnr_doorlaatbaarheid] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrDoorlaatbaarheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_doorlaatbaarheid !== $v) {
            $this->itemnr_doorlaatbaarheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_DOORLAATBAARHEID;
        }


        return $this;
    } // setItemnrDoorlaatbaarheid()

    /**
     * Set the value of [draagbaar_janee] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setDraagbaarJanee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->draagbaar_janee !== $v) {
            $this->draagbaar_janee = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::DRAAGBAAR_JANEE;
        }


        return $this;
    } // setDraagbaarJanee()

    /**
     * Set the value of [thnr_draagplaats] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrDraagplaats($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_draagplaats !== $v) {
            $this->thnr_draagplaats = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_DRAAGPLAATS;
        }


        return $this;
    } // setThnrDraagplaats()

    /**
     * Set the value of [itemnr_draagplaats] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrDraagplaats($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_draagplaats !== $v) {
            $this->itemnr_draagplaats = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_DRAAGPLAATS;
        }


        return $this;
    } // setItemnrDraagplaats()

    /**
     * Set the value of [thnr_extra_kenmerk] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrExtraKenmerk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_extra_kenmerk !== $v) {
            $this->thnr_extra_kenmerk = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_EXTRA_KENMERK;
        }


        return $this;
    } // setThnrExtraKenmerk()

    /**
     * Set the value of [item_nr_extra_kenmerk] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemNrExtraKenmerk($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->item_nr_extra_kenmerk !== $v) {
            $this->item_nr_extra_kenmerk = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEM_NR_EXTRA_KENMERK;
        }


        return $this;
    } // setItemNrExtraKenmerk()

    /**
     * Set the value of [filter_janee] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setFilterJanee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->filter_janee !== $v) {
            $this->filter_janee = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::FILTER_JANEE;
        }


        return $this;
    } // setFilterJanee()

    /**
     * Set the value of [flensmaat_hoeveelheid] column.
     *
     * @param  string $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setFlensmaatHoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->flensmaat_hoeveelheid !== $v) {
            $this->flensmaat_hoeveelheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::FLENSMAAT_HOEVEELHEID;
        }


        return $this;
    } // setFlensmaatHoeveelheid()

    /**
     * Set the value of [thnr_flensmaat_eenheid] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrFlensmaatEenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_flensmaat_eenheid !== $v) {
            $this->thnr_flensmaat_eenheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_FLENSMAAT_EENHEID;
        }


        return $this;
    } // setThnrFlensmaatEenheid()

    /**
     * Set the value of [itemnr_flensmaat_eenheid] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrFlensmaatEenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_flensmaat_eenheid !== $v) {
            $this->itemnr_flensmaat_eenheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_FLENSMAAT_EENHEID;
        }


        return $this;
    } // setItemnrFlensmaatEenheid()

    /**
     * Set the value of [geslacht] column.
     *
     * @param  string $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setGeslacht($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->geslacht !== $v) {
            $this->geslacht = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::GESLACHT;
        }


        return $this;
    } // setGeslacht()

    /**
     * Set the value of [glijmiddel_janee] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setGlijmiddelJanee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->glijmiddel_janee !== $v) {
            $this->glijmiddel_janee = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::GLIJMIDDEL_JANEE;
        }


        return $this;
    } // setGlijmiddelJanee()

    /**
     * Set the value of [hergebruik_mogelijk_janee] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setHergebruikMogelijkJanee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->hergebruik_mogelijk_janee !== $v) {
            $this->hergebruik_mogelijk_janee = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::HERGEBRUIK_MOGELIJK_JANEE;
        }


        return $this;
    } // setHergebruikMogelijkJanee()

    /**
     * Set the value of [thnr_hulpmiddelpresentatie] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrHulpmiddelpresentatie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_hulpmiddelpresentatie !== $v) {
            $this->thnr_hulpmiddelpresentatie = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELPRESENTATIE;
        }


        return $this;
    } // setThnrHulpmiddelpresentatie()

    /**
     * Set the value of [itemnr_hulpmiddelpresentatie] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrHulpmiddelpresentatie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_hulpmiddelpresentatie !== $v) {
            $this->itemnr_hulpmiddelpresentatie = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELPRESENTATIE;
        }


        return $this;
    } // setItemnrHulpmiddelpresentatie()

    /**
     * Set the value of [thnr_kleeflaag] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrKleeflaag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_kleeflaag !== $v) {
            $this->thnr_kleeflaag = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_KLEEFLAAG;
        }


        return $this;
    } // setThnrKleeflaag()

    /**
     * Set the value of [itemnr_kleeflaag] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrKleeflaag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_kleeflaag !== $v) {
            $this->itemnr_kleeflaag = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_KLEEFLAAG;
        }


        return $this;
    } // setItemnrKleeflaag()

    /**
     * Set the value of [kleur_thesaurusnummer] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setKleurThesaurusnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->kleur_thesaurusnummer !== $v) {
            $this->kleur_thesaurusnummer = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::KLEUR_THESAURUSNUMMER;
        }


        return $this;
    } // setKleurThesaurusnummer()

    /**
     * Set the value of [itemnr_kleur] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrKleur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_kleur !== $v) {
            $this->itemnr_kleur = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_KLEUR;
        }


        return $this;
    } // setItemnrKleur()

    /**
     * Set the value of [lengte_1_hoeveelheid] column.
     *
     * @param  string $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setLengte1Hoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengte_1_hoeveelheid !== $v) {
            $this->lengte_1_hoeveelheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::LENGTE_1_HOEVEELHEID;
        }


        return $this;
    } // setLengte1Hoeveelheid()

    /**
     * Set the value of [thnr_lengte_1_eenheid] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrLengte1Eenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_lengte_1_eenheid !== $v) {
            $this->thnr_lengte_1_eenheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_LENGTE_1_EENHEID;
        }


        return $this;
    } // setThnrLengte1Eenheid()

    /**
     * Set the value of [itemnr_lengte_1_eenheid] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrLengte1Eenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_lengte_1_eenheid !== $v) {
            $this->itemnr_lengte_1_eenheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_1_EENHEID;
        }


        return $this;
    } // setItemnrLengte1Eenheid()

    /**
     * Set the value of [lengte_2_hoeveelheid] column.
     *
     * @param  string $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setLengte2Hoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lengte_2_hoeveelheid !== $v) {
            $this->lengte_2_hoeveelheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::LENGTE_2_HOEVEELHEID;
        }


        return $this;
    } // setLengte2Hoeveelheid()

    /**
     * Set the value of [thnr_lengte_2_eenheid] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrLengte2Eenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_lengte_2_eenheid !== $v) {
            $this->thnr_lengte_2_eenheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_LENGTE_2_EENHEID;
        }


        return $this;
    } // setThnrLengte2Eenheid()

    /**
     * Set the value of [itemnr_lengte_2_eenheid] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrLengte2Eenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_lengte_2_eenheid !== $v) {
            $this->itemnr_lengte_2_eenheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_2_EENHEID;
        }


        return $this;
    } // setItemnrLengte2Eenheid()

    /**
     * Set the value of [maasgrootte] column.
     *
     * @param  string $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setMaasgrootte($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->maasgrootte !== $v) {
            $this->maasgrootte = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::MAASGROOTTE;
        }


        return $this;
    } // setMaasgrootte()

    /**
     * Set the value of [thnr_maataanduiding] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrMaataanduiding($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_maataanduiding !== $v) {
            $this->thnr_maataanduiding = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_MAATAANDUIDING;
        }


        return $this;
    } // setThnrMaataanduiding()

    /**
     * Set the value of [itemnr_maataanduiding] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrMaataanduiding($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_maataanduiding !== $v) {
            $this->itemnr_maataanduiding = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_MAATAANDUIDING;
        }


        return $this;
    } // setItemnrMaataanduiding()

    /**
     * Set the value of [thnr_materiaal] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrMateriaal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_materiaal !== $v) {
            $this->thnr_materiaal = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_MATERIAAL;
        }


        return $this;
    } // setThnrMateriaal()

    /**
     * Set the value of [itemnr_materiaal] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrMateriaal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_materiaal !== $v) {
            $this->itemnr_materiaal = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_MATERIAAL;
        }


        return $this;
    } // setItemnrMateriaal()

    /**
     * Set the value of [niet_aan_de_wond_hechtend] column.
     *
     * @param  string $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setNietAanDeWondHechtend($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->niet_aan_de_wond_hechtend !== $v) {
            $this->niet_aan_de_wond_hechtend = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::NIET_AAN_DE_WOND_HECHTEND;
        }


        return $this;
    } // setNietAanDeWondHechtend()

    /**
     * Set the value of [thnr_plaats_sluiting] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrPlaatsSluiting($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_plaats_sluiting !== $v) {
            $this->thnr_plaats_sluiting = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_PLAATS_SLUITING;
        }


        return $this;
    } // setThnrPlaatsSluiting()

    /**
     * Set the value of [itemnr_plaats_sluiting] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrPlaatsSluiting($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_plaats_sluiting !== $v) {
            $this->itemnr_plaats_sluiting = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_PLAATS_SLUITING;
        }


        return $this;
    } // setItemnrPlaatsSluiting()

    /**
     * Set the value of [rekpercentage] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setRekpercentage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rekpercentage !== $v) {
            $this->rekpercentage = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::REKPERCENTAGE;
        }


        return $this;
    } // setRekpercentage()

    /**
     * Set the value of [rekrichting] column.
     *
     * @param  string $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setRekrichting($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->rekrichting !== $v) {
            $this->rekrichting = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::REKRICHTING;
        }


        return $this;
    } // setRekrichting()

    /**
     * Set the value of [thnr_rekaanduiding] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrRekaanduiding($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_rekaanduiding !== $v) {
            $this->thnr_rekaanduiding = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_REKAANDUIDING;
        }


        return $this;
    } // setThnrRekaanduiding()

    /**
     * Set the value of [itemnr_rekaanduiding] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrRekaanduiding($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_rekaanduiding !== $v) {
            $this->itemnr_rekaanduiding = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_REKAANDUIDING;
        }


        return $this;
    } // setItemnrRekaanduiding()

    /**
     * Set the value of [rontgencontrastdraad_aanwezig_jn] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setRontgencontrastdraadAanwezigJn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rontgencontrastdraad_aanwezig_jn !== $v) {
            $this->rontgencontrastdraad_aanwezig_jn = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::RONTGENCONTRASTDRAAD_AANWEZIG_JN;
        }


        return $this;
    } // setRontgencontrastdraadAanwezigJn()

    /**
     * Set the value of [thnr_hulpmiddelsysteem] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrHulpmiddelsysteem($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_hulpmiddelsysteem !== $v) {
            $this->thnr_hulpmiddelsysteem = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELSYSTEEM;
        }


        return $this;
    } // setThnrHulpmiddelsysteem()

    /**
     * Set the value of [itemnr_hulpmiddelsysteem] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrHulpmiddelsysteem($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_hulpmiddelsysteem !== $v) {
            $this->itemnr_hulpmiddelsysteem = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELSYSTEEM;
        }


        return $this;
    } // setItemnrHulpmiddelsysteem()

    /**
     * Set the value of [terugslagvoorziening_janee] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setTerugslagvoorzieningJanee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->terugslagvoorziening_janee !== $v) {
            $this->terugslagvoorziening_janee = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::TERUGSLAGVOORZIENING_JANEE;
        }


        return $this;
    } // setTerugslagvoorzieningJanee()

    /**
     * Set the value of [toepassing_afnameverblijf] column.
     *
     * @param  string $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setToepassingAfnameverblijf($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->toepassing_afnameverblijf !== $v) {
            $this->toepassing_afnameverblijf = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::TOEPASSING_AFNAMEVERBLIJF;
        }


        return $this;
    } // setToepassingAfnameverblijf()

    /**
     * Set the value of [type_punt_nelatontiemann] column.
     *
     * @param  string $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setTypePuntNelatontiemann($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->type_punt_nelatontiemann !== $v) {
            $this->type_punt_nelatontiemann = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::TYPE_PUNT_NELATONTIEMANN;
        }


        return $this;
    } // setTypePuntNelatontiemann()

    /**
     * Set the value of [volume_hoeveelheid] column.
     *
     * @param  string $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setVolumeHoeveelheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->volume_hoeveelheid !== $v) {
            $this->volume_hoeveelheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::VOLUME_HOEVEELHEID;
        }


        return $this;
    } // setVolumeHoeveelheid()

    /**
     * Set the value of [thnr_volume_eenheid] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrVolumeEenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_volume_eenheid !== $v) {
            $this->thnr_volume_eenheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_VOLUME_EENHEID;
        }


        return $this;
    } // setThnrVolumeEenheid()

    /**
     * Set the value of [itemnr_volume_eenheid] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrVolumeEenheid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_volume_eenheid !== $v) {
            $this->itemnr_volume_eenheid = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_VOLUME_EENHEID;
        }


        return $this;
    } // setItemnrVolumeEenheid()

    /**
     * Set the value of [thnr_vorm] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrVorm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_vorm !== $v) {
            $this->thnr_vorm = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_VORM;
        }


        return $this;
    } // setThnrVorm()

    /**
     * Set the value of [itemnr_vorm] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrVorm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_vorm !== $v) {
            $this->itemnr_vorm = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_VORM;
        }


        return $this;
    } // setItemnrVorm()

    /**
     * Set the value of [thnr_vorm_van_de_opening] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrVormVanDeOpening($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_vorm_van_de_opening !== $v) {
            $this->thnr_vorm_van_de_opening = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_OPENING;
        }


        return $this;
    } // setThnrVormVanDeOpening()

    /**
     * Set the value of [itemnr_vorm_van_de_opening] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrVormVanDeOpening($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_vorm_van_de_opening !== $v) {
            $this->itemnr_vorm_van_de_opening = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_OPENING;
        }


        return $this;
    } // setItemnrVormVanDeOpening()

    /**
     * Set the value of [thnr_vorm_van_de_plaat] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrVormVanDePlaat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_vorm_van_de_plaat !== $v) {
            $this->thnr_vorm_van_de_plaat = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_PLAAT;
        }


        return $this;
    } // setThnrVormVanDePlaat()

    /**
     * Set the value of [itemnr_vorm_van_de_plaat] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrVormVanDePlaat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_vorm_van_de_plaat !== $v) {
            $this->itemnr_vorm_van_de_plaat = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_PLAAT;
        }


        return $this;
    } // setItemnrVormVanDePlaat()

    /**
     * Set the value of [waterbestendig_janee] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setWaterbestendigJanee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->waterbestendig_janee !== $v) {
            $this->waterbestendig_janee = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::WATERBESTENDIG_JANEE;
        }


        return $this;
    } // setWaterbestendigJanee()

    /**
     * Set the value of [wegspoelbaar_janee] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setWegspoelbaarJanee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->wegspoelbaar_janee !== $v) {
            $this->wegspoelbaar_janee = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::WEGSPOELBAAR_JANEE;
        }


        return $this;
    } // setWegspoelbaarJanee()

    /**
     * Set the value of [split_janee] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setSplitJanee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->split_janee !== $v) {
            $this->split_janee = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::SPLIT_JANEE;
        }


        return $this;
    } // setSplitJanee()

    /**
     * Set the value of [cuff_janee] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setCuffJanee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cuff_janee !== $v) {
            $this->cuff_janee = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::CUFF_JANEE;
        }


        return $this;
    } // setCuffJanee()

    /**
     * Set the value of [enkel_of_dubbelzijdig] column.
     *
     * @param  string $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setEnkelOfDubbelzijdig($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->enkel_of_dubbelzijdig !== $v) {
            $this->enkel_of_dubbelzijdig = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ENKEL_OF_DUBBELZIJDIG;
        }


        return $this;
    } // setEnkelOfDubbelzijdig()

    /**
     * Set the value of [thnr_absorptievermogen] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrAbsorptievermogen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_absorptievermogen !== $v) {
            $this->thnr_absorptievermogen = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_ABSORPTIEVERMOGEN;
        }


        return $this;
    } // setThnrAbsorptievermogen()

    /**
     * Set the value of [itemnr_absorptievermogen] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrAbsorptievermogen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_absorptievermogen !== $v) {
            $this->itemnr_absorptievermogen = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_ABSORPTIEVERMOGEN;
        }


        return $this;
    } // setItemnrAbsorptievermogen()

    /**
     * Set the value of [soort_incontinentie_urinefaeces] column.
     *
     * @param  string $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setSoortIncontinentieUrinefaeces($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->soort_incontinentie_urinefaeces !== $v) {
            $this->soort_incontinentie_urinefaeces = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::SOORT_INCONTINENTIE_URINEFAECES;
        }


        return $this;
    } // setSoortIncontinentieUrinefaeces()

    /**
     * Set the value of [thnr_toebehoren] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrToebehoren($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_toebehoren !== $v) {
            $this->thnr_toebehoren = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_TOEBEHOREN;
        }


        return $this;
    } // setThnrToebehoren()

    /**
     * Set the value of [itemnr_toebehoren] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrToebehoren($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_toebehoren !== $v) {
            $this->itemnr_toebehoren = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_TOEBEHOREN;
        }


        return $this;
    } // setItemnrToebehoren()

    /**
     * Set the value of [thnr_fysische_toestand] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setThnrFysischeToestand($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thnr_fysische_toestand !== $v) {
            $this->thnr_fysische_toestand = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::THNR_FYSISCHE_TOESTAND;
        }


        return $this;
    } // setThnrFysischeToestand()

    /**
     * Set the value of [itemnr_fysische_toestand] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setItemnrFysischeToestand($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->itemnr_fysische_toestand !== $v) {
            $this->itemnr_fysische_toestand = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::ITEMNR_FYSISCHE_TOESTAND;
        }


        return $this;
    } // setItemnrFysischeToestand()

    /**
     * Set the value of [impregneermiddel_samenstelling] column.
     *
     * @param  int $v new value
     * @return GsMedischeHulpmiddelen The current object (for fluent API support)
     */
    public function setImpregneermiddelSamenstelling($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->impregneermiddel_samenstelling !== $v) {
            $this->impregneermiddel_samenstelling = $v;
            $this->modifiedColumns[] = GsMedischeHulpmiddelenPeer::IMPREGNEERMIDDEL_SAMENSTELLING;
        }


        return $this;
    } // setImpregneermiddelSamenstelling()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->bestandnummer = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->mutatiekode = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->medisch_hulpmiddelkode = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->substitutie_kode = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->thnr_soort_hulpmiddel = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->soort_hulpmiddelkode = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->gesteriliseerd_janee = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->thnr_sterilisatiemethode = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->itemnr_sterilisatiemethode = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->thnr_sluiting = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->itemnr_sluiting = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->aantal_delen = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->aantal_kanalen = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->thnr_bevestiging = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->itemnr_bevestiging = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->breedte_hoeveelheid = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->thnr_breedte_eenheid = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->itemnr_breedte_eenheid = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->drukklasse = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->diameter_hoeveelheid = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->thnr_diameter_eenheid = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->itemnr_diameter_eenheid = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->dicht_of_open_geweven = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->thnr_doorlaatbaarheid = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->itemnr_doorlaatbaarheid = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->draagbaar_janee = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->thnr_draagplaats = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->itemnr_draagplaats = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->thnr_extra_kenmerk = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->item_nr_extra_kenmerk = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->filter_janee = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->flensmaat_hoeveelheid = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->thnr_flensmaat_eenheid = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->itemnr_flensmaat_eenheid = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->geslacht = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->glijmiddel_janee = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->hergebruik_mogelijk_janee = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->thnr_hulpmiddelpresentatie = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->itemnr_hulpmiddelpresentatie = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->thnr_kleeflaag = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->itemnr_kleeflaag = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->kleur_thesaurusnummer = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->itemnr_kleur = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->lengte_1_hoeveelheid = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->thnr_lengte_1_eenheid = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->itemnr_lengte_1_eenheid = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->lengte_2_hoeveelheid = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->thnr_lengte_2_eenheid = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->itemnr_lengte_2_eenheid = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->maasgrootte = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->thnr_maataanduiding = ($row[$startcol + 50] !== null) ? (int) $row[$startcol + 50] : null;
            $this->itemnr_maataanduiding = ($row[$startcol + 51] !== null) ? (int) $row[$startcol + 51] : null;
            $this->thnr_materiaal = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->itemnr_materiaal = ($row[$startcol + 53] !== null) ? (int) $row[$startcol + 53] : null;
            $this->niet_aan_de_wond_hechtend = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->thnr_plaats_sluiting = ($row[$startcol + 55] !== null) ? (int) $row[$startcol + 55] : null;
            $this->itemnr_plaats_sluiting = ($row[$startcol + 56] !== null) ? (int) $row[$startcol + 56] : null;
            $this->rekpercentage = ($row[$startcol + 57] !== null) ? (int) $row[$startcol + 57] : null;
            $this->rekrichting = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->thnr_rekaanduiding = ($row[$startcol + 59] !== null) ? (int) $row[$startcol + 59] : null;
            $this->itemnr_rekaanduiding = ($row[$startcol + 60] !== null) ? (int) $row[$startcol + 60] : null;
            $this->rontgencontrastdraad_aanwezig_jn = ($row[$startcol + 61] !== null) ? (int) $row[$startcol + 61] : null;
            $this->thnr_hulpmiddelsysteem = ($row[$startcol + 62] !== null) ? (int) $row[$startcol + 62] : null;
            $this->itemnr_hulpmiddelsysteem = ($row[$startcol + 63] !== null) ? (int) $row[$startcol + 63] : null;
            $this->terugslagvoorziening_janee = ($row[$startcol + 64] !== null) ? (int) $row[$startcol + 64] : null;
            $this->toepassing_afnameverblijf = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->type_punt_nelatontiemann = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->volume_hoeveelheid = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->thnr_volume_eenheid = ($row[$startcol + 68] !== null) ? (int) $row[$startcol + 68] : null;
            $this->itemnr_volume_eenheid = ($row[$startcol + 69] !== null) ? (int) $row[$startcol + 69] : null;
            $this->thnr_vorm = ($row[$startcol + 70] !== null) ? (int) $row[$startcol + 70] : null;
            $this->itemnr_vorm = ($row[$startcol + 71] !== null) ? (int) $row[$startcol + 71] : null;
            $this->thnr_vorm_van_de_opening = ($row[$startcol + 72] !== null) ? (int) $row[$startcol + 72] : null;
            $this->itemnr_vorm_van_de_opening = ($row[$startcol + 73] !== null) ? (int) $row[$startcol + 73] : null;
            $this->thnr_vorm_van_de_plaat = ($row[$startcol + 74] !== null) ? (int) $row[$startcol + 74] : null;
            $this->itemnr_vorm_van_de_plaat = ($row[$startcol + 75] !== null) ? (int) $row[$startcol + 75] : null;
            $this->waterbestendig_janee = ($row[$startcol + 76] !== null) ? (int) $row[$startcol + 76] : null;
            $this->wegspoelbaar_janee = ($row[$startcol + 77] !== null) ? (int) $row[$startcol + 77] : null;
            $this->split_janee = ($row[$startcol + 78] !== null) ? (int) $row[$startcol + 78] : null;
            $this->cuff_janee = ($row[$startcol + 79] !== null) ? (int) $row[$startcol + 79] : null;
            $this->enkel_of_dubbelzijdig = ($row[$startcol + 80] !== null) ? (string) $row[$startcol + 80] : null;
            $this->thnr_absorptievermogen = ($row[$startcol + 81] !== null) ? (int) $row[$startcol + 81] : null;
            $this->itemnr_absorptievermogen = ($row[$startcol + 82] !== null) ? (int) $row[$startcol + 82] : null;
            $this->soort_incontinentie_urinefaeces = ($row[$startcol + 83] !== null) ? (string) $row[$startcol + 83] : null;
            $this->thnr_toebehoren = ($row[$startcol + 84] !== null) ? (int) $row[$startcol + 84] : null;
            $this->itemnr_toebehoren = ($row[$startcol + 85] !== null) ? (int) $row[$startcol + 85] : null;
            $this->thnr_fysische_toestand = ($row[$startcol + 86] !== null) ? (int) $row[$startcol + 86] : null;
            $this->itemnr_fysische_toestand = ($row[$startcol + 87] !== null) ? (int) $row[$startcol + 87] : null;
            $this->impregneermiddel_samenstelling = ($row[$startcol + 88] !== null) ? (int) $row[$startcol + 88] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 89; // 89 = GsMedischeHulpmiddelenPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsMedischeHulpmiddelen object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(GsMedischeHulpmiddelenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsMedischeHulpmiddelenPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(GsMedischeHulpmiddelenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsMedischeHulpmiddelenQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(GsMedischeHulpmiddelenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                GsMedischeHulpmiddelenPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE)) {
            $modifiedColumns[':p' . $index++]  = '`medisch_hulpmiddelkode`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::SUBSTITUTIE_KODE)) {
            $modifiedColumns[':p' . $index++]  = '`substitutie_kode`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_SOORT_HULPMIDDEL)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_soort_hulpmiddel`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE)) {
            $modifiedColumns[':p' . $index++]  = '`soort_hulpmiddelkode`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::GESTERILISEERD_JANEE)) {
            $modifiedColumns[':p' . $index++]  = '`gesteriliseerd_janee`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_STERILISATIEMETHODE)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_sterilisatiemethode`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_STERILISATIEMETHODE)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_sterilisatiemethode`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_SLUITING)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_sluiting`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_SLUITING)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_sluiting`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::AANTAL_DELEN)) {
            $modifiedColumns[':p' . $index++]  = '`aantal_delen`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::AANTAL_KANALEN)) {
            $modifiedColumns[':p' . $index++]  = '`aantal_kanalen`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_BEVESTIGING)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_bevestiging`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_BEVESTIGING)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_bevestiging`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::BREEDTE_HOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`breedte_hoeveelheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_BREEDTE_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_breedte_eenheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_BREEDTE_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_breedte_eenheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::DRUKKLASSE)) {
            $modifiedColumns[':p' . $index++]  = '`drukklasse`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::DIAMETER_HOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`diameter_hoeveelheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_DIAMETER_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_diameter_eenheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_DIAMETER_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_diameter_eenheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::DICHT_OF_OPEN_GEWEVEN)) {
            $modifiedColumns[':p' . $index++]  = '`dicht_of_open_geweven`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_DOORLAATBAARHEID)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_doorlaatbaarheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_DOORLAATBAARHEID)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_doorlaatbaarheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::DRAAGBAAR_JANEE)) {
            $modifiedColumns[':p' . $index++]  = '`draagbaar_janee`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_DRAAGPLAATS)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_draagplaats`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_DRAAGPLAATS)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_draagplaats`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_EXTRA_KENMERK)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_extra_kenmerk`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEM_NR_EXTRA_KENMERK)) {
            $modifiedColumns[':p' . $index++]  = '`item_nr_extra_kenmerk`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::FILTER_JANEE)) {
            $modifiedColumns[':p' . $index++]  = '`filter_janee`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::FLENSMAAT_HOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`flensmaat_hoeveelheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_FLENSMAAT_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_flensmaat_eenheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_FLENSMAAT_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_flensmaat_eenheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::GESLACHT)) {
            $modifiedColumns[':p' . $index++]  = '`geslacht`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::GLIJMIDDEL_JANEE)) {
            $modifiedColumns[':p' . $index++]  = '`glijmiddel_janee`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::HERGEBRUIK_MOGELIJK_JANEE)) {
            $modifiedColumns[':p' . $index++]  = '`hergebruik_mogelijk_janee`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELPRESENTATIE)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_hulpmiddelpresentatie`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELPRESENTATIE)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_hulpmiddelpresentatie`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_KLEEFLAAG)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_kleeflaag`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_KLEEFLAAG)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_kleeflaag`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::KLEUR_THESAURUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`kleur_thesaurusnummer`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_KLEUR)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_kleur`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::LENGTE_1_HOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`lengte_1_hoeveelheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_LENGTE_1_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_lengte_1_eenheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_1_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_lengte_1_eenheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::LENGTE_2_HOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`lengte_2_hoeveelheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_LENGTE_2_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_lengte_2_eenheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_2_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_lengte_2_eenheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::MAASGROOTTE)) {
            $modifiedColumns[':p' . $index++]  = '`maasgrootte`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_MAATAANDUIDING)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_maataanduiding`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_MAATAANDUIDING)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_maataanduiding`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_MATERIAAL)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_materiaal`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_MATERIAAL)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_materiaal`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::NIET_AAN_DE_WOND_HECHTEND)) {
            $modifiedColumns[':p' . $index++]  = '`niet_aan_de_wond_hechtend`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_PLAATS_SLUITING)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_plaats_sluiting`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_PLAATS_SLUITING)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_plaats_sluiting`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::REKPERCENTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`rekpercentage`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::REKRICHTING)) {
            $modifiedColumns[':p' . $index++]  = '`rekrichting`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_REKAANDUIDING)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_rekaanduiding`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_REKAANDUIDING)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_rekaanduiding`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::RONTGENCONTRASTDRAAD_AANWEZIG_JN)) {
            $modifiedColumns[':p' . $index++]  = '`rontgencontrastdraad_aanwezig_jn`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELSYSTEEM)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_hulpmiddelsysteem`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELSYSTEEM)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_hulpmiddelsysteem`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::TERUGSLAGVOORZIENING_JANEE)) {
            $modifiedColumns[':p' . $index++]  = '`terugslagvoorziening_janee`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::TOEPASSING_AFNAMEVERBLIJF)) {
            $modifiedColumns[':p' . $index++]  = '`toepassing_afnameverblijf`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::TYPE_PUNT_NELATONTIEMANN)) {
            $modifiedColumns[':p' . $index++]  = '`type_punt_nelatontiemann`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::VOLUME_HOEVEELHEID)) {
            $modifiedColumns[':p' . $index++]  = '`volume_hoeveelheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_VOLUME_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_volume_eenheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_VOLUME_EENHEID)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_volume_eenheid`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_VORM)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_vorm`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_VORM)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_vorm`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_OPENING)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_vorm_van_de_opening`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_OPENING)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_vorm_van_de_opening`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_PLAAT)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_vorm_van_de_plaat`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_PLAAT)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_vorm_van_de_plaat`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::WATERBESTENDIG_JANEE)) {
            $modifiedColumns[':p' . $index++]  = '`waterbestendig_janee`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::WEGSPOELBAAR_JANEE)) {
            $modifiedColumns[':p' . $index++]  = '`wegspoelbaar_janee`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::SPLIT_JANEE)) {
            $modifiedColumns[':p' . $index++]  = '`split_janee`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::CUFF_JANEE)) {
            $modifiedColumns[':p' . $index++]  = '`cuff_janee`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ENKEL_OF_DUBBELZIJDIG)) {
            $modifiedColumns[':p' . $index++]  = '`enkel_of_dubbelzijdig`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_ABSORPTIEVERMOGEN)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_absorptievermogen`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_ABSORPTIEVERMOGEN)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_absorptievermogen`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::SOORT_INCONTINENTIE_URINEFAECES)) {
            $modifiedColumns[':p' . $index++]  = '`soort_incontinentie_urinefaeces`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_TOEBEHOREN)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_toebehoren`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_TOEBEHOREN)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_toebehoren`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_FYSISCHE_TOESTAND)) {
            $modifiedColumns[':p' . $index++]  = '`thnr_fysische_toestand`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_FYSISCHE_TOESTAND)) {
            $modifiedColumns[':p' . $index++]  = '`itemnr_fysische_toestand`';
        }
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::IMPREGNEERMIDDEL_SAMENSTELLING)) {
            $modifiedColumns[':p' . $index++]  = '`impregneermiddel_samenstelling`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_medische_hulpmiddelen` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`bestandnummer`':
                        $stmt->bindValue($identifier, $this->bestandnummer, PDO::PARAM_INT);
                        break;
                    case '`mutatiekode`':
                        $stmt->bindValue($identifier, $this->mutatiekode, PDO::PARAM_INT);
                        break;
                    case '`medisch_hulpmiddelkode`':
                        $stmt->bindValue($identifier, $this->medisch_hulpmiddelkode, PDO::PARAM_INT);
                        break;
                    case '`substitutie_kode`':
                        $stmt->bindValue($identifier, $this->substitutie_kode, PDO::PARAM_INT);
                        break;
                    case '`thnr_soort_hulpmiddel`':
                        $stmt->bindValue($identifier, $this->thnr_soort_hulpmiddel, PDO::PARAM_INT);
                        break;
                    case '`soort_hulpmiddelkode`':
                        $stmt->bindValue($identifier, $this->soort_hulpmiddelkode, PDO::PARAM_INT);
                        break;
                    case '`gesteriliseerd_janee`':
                        $stmt->bindValue($identifier, $this->gesteriliseerd_janee, PDO::PARAM_INT);
                        break;
                    case '`thnr_sterilisatiemethode`':
                        $stmt->bindValue($identifier, $this->thnr_sterilisatiemethode, PDO::PARAM_INT);
                        break;
                    case '`itemnr_sterilisatiemethode`':
                        $stmt->bindValue($identifier, $this->itemnr_sterilisatiemethode, PDO::PARAM_INT);
                        break;
                    case '`thnr_sluiting`':
                        $stmt->bindValue($identifier, $this->thnr_sluiting, PDO::PARAM_INT);
                        break;
                    case '`itemnr_sluiting`':
                        $stmt->bindValue($identifier, $this->itemnr_sluiting, PDO::PARAM_INT);
                        break;
                    case '`aantal_delen`':
                        $stmt->bindValue($identifier, $this->aantal_delen, PDO::PARAM_INT);
                        break;
                    case '`aantal_kanalen`':
                        $stmt->bindValue($identifier, $this->aantal_kanalen, PDO::PARAM_INT);
                        break;
                    case '`thnr_bevestiging`':
                        $stmt->bindValue($identifier, $this->thnr_bevestiging, PDO::PARAM_INT);
                        break;
                    case '`itemnr_bevestiging`':
                        $stmt->bindValue($identifier, $this->itemnr_bevestiging, PDO::PARAM_INT);
                        break;
                    case '`breedte_hoeveelheid`':
                        $stmt->bindValue($identifier, $this->breedte_hoeveelheid, PDO::PARAM_STR);
                        break;
                    case '`thnr_breedte_eenheid`':
                        $stmt->bindValue($identifier, $this->thnr_breedte_eenheid, PDO::PARAM_INT);
                        break;
                    case '`itemnr_breedte_eenheid`':
                        $stmt->bindValue($identifier, $this->itemnr_breedte_eenheid, PDO::PARAM_INT);
                        break;
                    case '`drukklasse`':
                        $stmt->bindValue($identifier, $this->drukklasse, PDO::PARAM_INT);
                        break;
                    case '`diameter_hoeveelheid`':
                        $stmt->bindValue($identifier, $this->diameter_hoeveelheid, PDO::PARAM_STR);
                        break;
                    case '`thnr_diameter_eenheid`':
                        $stmt->bindValue($identifier, $this->thnr_diameter_eenheid, PDO::PARAM_INT);
                        break;
                    case '`itemnr_diameter_eenheid`':
                        $stmt->bindValue($identifier, $this->itemnr_diameter_eenheid, PDO::PARAM_INT);
                        break;
                    case '`dicht_of_open_geweven`':
                        $stmt->bindValue($identifier, $this->dicht_of_open_geweven, PDO::PARAM_STR);
                        break;
                    case '`thnr_doorlaatbaarheid`':
                        $stmt->bindValue($identifier, $this->thnr_doorlaatbaarheid, PDO::PARAM_INT);
                        break;
                    case '`itemnr_doorlaatbaarheid`':
                        $stmt->bindValue($identifier, $this->itemnr_doorlaatbaarheid, PDO::PARAM_INT);
                        break;
                    case '`draagbaar_janee`':
                        $stmt->bindValue($identifier, $this->draagbaar_janee, PDO::PARAM_INT);
                        break;
                    case '`thnr_draagplaats`':
                        $stmt->bindValue($identifier, $this->thnr_draagplaats, PDO::PARAM_INT);
                        break;
                    case '`itemnr_draagplaats`':
                        $stmt->bindValue($identifier, $this->itemnr_draagplaats, PDO::PARAM_INT);
                        break;
                    case '`thnr_extra_kenmerk`':
                        $stmt->bindValue($identifier, $this->thnr_extra_kenmerk, PDO::PARAM_INT);
                        break;
                    case '`item_nr_extra_kenmerk`':
                        $stmt->bindValue($identifier, $this->item_nr_extra_kenmerk, PDO::PARAM_INT);
                        break;
                    case '`filter_janee`':
                        $stmt->bindValue($identifier, $this->filter_janee, PDO::PARAM_INT);
                        break;
                    case '`flensmaat_hoeveelheid`':
                        $stmt->bindValue($identifier, $this->flensmaat_hoeveelheid, PDO::PARAM_STR);
                        break;
                    case '`thnr_flensmaat_eenheid`':
                        $stmt->bindValue($identifier, $this->thnr_flensmaat_eenheid, PDO::PARAM_INT);
                        break;
                    case '`itemnr_flensmaat_eenheid`':
                        $stmt->bindValue($identifier, $this->itemnr_flensmaat_eenheid, PDO::PARAM_INT);
                        break;
                    case '`geslacht`':
                        $stmt->bindValue($identifier, $this->geslacht, PDO::PARAM_STR);
                        break;
                    case '`glijmiddel_janee`':
                        $stmt->bindValue($identifier, $this->glijmiddel_janee, PDO::PARAM_INT);
                        break;
                    case '`hergebruik_mogelijk_janee`':
                        $stmt->bindValue($identifier, $this->hergebruik_mogelijk_janee, PDO::PARAM_INT);
                        break;
                    case '`thnr_hulpmiddelpresentatie`':
                        $stmt->bindValue($identifier, $this->thnr_hulpmiddelpresentatie, PDO::PARAM_INT);
                        break;
                    case '`itemnr_hulpmiddelpresentatie`':
                        $stmt->bindValue($identifier, $this->itemnr_hulpmiddelpresentatie, PDO::PARAM_INT);
                        break;
                    case '`thnr_kleeflaag`':
                        $stmt->bindValue($identifier, $this->thnr_kleeflaag, PDO::PARAM_INT);
                        break;
                    case '`itemnr_kleeflaag`':
                        $stmt->bindValue($identifier, $this->itemnr_kleeflaag, PDO::PARAM_INT);
                        break;
                    case '`kleur_thesaurusnummer`':
                        $stmt->bindValue($identifier, $this->kleur_thesaurusnummer, PDO::PARAM_INT);
                        break;
                    case '`itemnr_kleur`':
                        $stmt->bindValue($identifier, $this->itemnr_kleur, PDO::PARAM_INT);
                        break;
                    case '`lengte_1_hoeveelheid`':
                        $stmt->bindValue($identifier, $this->lengte_1_hoeveelheid, PDO::PARAM_STR);
                        break;
                    case '`thnr_lengte_1_eenheid`':
                        $stmt->bindValue($identifier, $this->thnr_lengte_1_eenheid, PDO::PARAM_INT);
                        break;
                    case '`itemnr_lengte_1_eenheid`':
                        $stmt->bindValue($identifier, $this->itemnr_lengte_1_eenheid, PDO::PARAM_INT);
                        break;
                    case '`lengte_2_hoeveelheid`':
                        $stmt->bindValue($identifier, $this->lengte_2_hoeveelheid, PDO::PARAM_STR);
                        break;
                    case '`thnr_lengte_2_eenheid`':
                        $stmt->bindValue($identifier, $this->thnr_lengte_2_eenheid, PDO::PARAM_INT);
                        break;
                    case '`itemnr_lengte_2_eenheid`':
                        $stmt->bindValue($identifier, $this->itemnr_lengte_2_eenheid, PDO::PARAM_INT);
                        break;
                    case '`maasgrootte`':
                        $stmt->bindValue($identifier, $this->maasgrootte, PDO::PARAM_STR);
                        break;
                    case '`thnr_maataanduiding`':
                        $stmt->bindValue($identifier, $this->thnr_maataanduiding, PDO::PARAM_INT);
                        break;
                    case '`itemnr_maataanduiding`':
                        $stmt->bindValue($identifier, $this->itemnr_maataanduiding, PDO::PARAM_INT);
                        break;
                    case '`thnr_materiaal`':
                        $stmt->bindValue($identifier, $this->thnr_materiaal, PDO::PARAM_INT);
                        break;
                    case '`itemnr_materiaal`':
                        $stmt->bindValue($identifier, $this->itemnr_materiaal, PDO::PARAM_INT);
                        break;
                    case '`niet_aan_de_wond_hechtend`':
                        $stmt->bindValue($identifier, $this->niet_aan_de_wond_hechtend, PDO::PARAM_STR);
                        break;
                    case '`thnr_plaats_sluiting`':
                        $stmt->bindValue($identifier, $this->thnr_plaats_sluiting, PDO::PARAM_INT);
                        break;
                    case '`itemnr_plaats_sluiting`':
                        $stmt->bindValue($identifier, $this->itemnr_plaats_sluiting, PDO::PARAM_INT);
                        break;
                    case '`rekpercentage`':
                        $stmt->bindValue($identifier, $this->rekpercentage, PDO::PARAM_INT);
                        break;
                    case '`rekrichting`':
                        $stmt->bindValue($identifier, $this->rekrichting, PDO::PARAM_STR);
                        break;
                    case '`thnr_rekaanduiding`':
                        $stmt->bindValue($identifier, $this->thnr_rekaanduiding, PDO::PARAM_INT);
                        break;
                    case '`itemnr_rekaanduiding`':
                        $stmt->bindValue($identifier, $this->itemnr_rekaanduiding, PDO::PARAM_INT);
                        break;
                    case '`rontgencontrastdraad_aanwezig_jn`':
                        $stmt->bindValue($identifier, $this->rontgencontrastdraad_aanwezig_jn, PDO::PARAM_INT);
                        break;
                    case '`thnr_hulpmiddelsysteem`':
                        $stmt->bindValue($identifier, $this->thnr_hulpmiddelsysteem, PDO::PARAM_INT);
                        break;
                    case '`itemnr_hulpmiddelsysteem`':
                        $stmt->bindValue($identifier, $this->itemnr_hulpmiddelsysteem, PDO::PARAM_INT);
                        break;
                    case '`terugslagvoorziening_janee`':
                        $stmt->bindValue($identifier, $this->terugslagvoorziening_janee, PDO::PARAM_INT);
                        break;
                    case '`toepassing_afnameverblijf`':
                        $stmt->bindValue($identifier, $this->toepassing_afnameverblijf, PDO::PARAM_STR);
                        break;
                    case '`type_punt_nelatontiemann`':
                        $stmt->bindValue($identifier, $this->type_punt_nelatontiemann, PDO::PARAM_STR);
                        break;
                    case '`volume_hoeveelheid`':
                        $stmt->bindValue($identifier, $this->volume_hoeveelheid, PDO::PARAM_STR);
                        break;
                    case '`thnr_volume_eenheid`':
                        $stmt->bindValue($identifier, $this->thnr_volume_eenheid, PDO::PARAM_INT);
                        break;
                    case '`itemnr_volume_eenheid`':
                        $stmt->bindValue($identifier, $this->itemnr_volume_eenheid, PDO::PARAM_INT);
                        break;
                    case '`thnr_vorm`':
                        $stmt->bindValue($identifier, $this->thnr_vorm, PDO::PARAM_INT);
                        break;
                    case '`itemnr_vorm`':
                        $stmt->bindValue($identifier, $this->itemnr_vorm, PDO::PARAM_INT);
                        break;
                    case '`thnr_vorm_van_de_opening`':
                        $stmt->bindValue($identifier, $this->thnr_vorm_van_de_opening, PDO::PARAM_INT);
                        break;
                    case '`itemnr_vorm_van_de_opening`':
                        $stmt->bindValue($identifier, $this->itemnr_vorm_van_de_opening, PDO::PARAM_INT);
                        break;
                    case '`thnr_vorm_van_de_plaat`':
                        $stmt->bindValue($identifier, $this->thnr_vorm_van_de_plaat, PDO::PARAM_INT);
                        break;
                    case '`itemnr_vorm_van_de_plaat`':
                        $stmt->bindValue($identifier, $this->itemnr_vorm_van_de_plaat, PDO::PARAM_INT);
                        break;
                    case '`waterbestendig_janee`':
                        $stmt->bindValue($identifier, $this->waterbestendig_janee, PDO::PARAM_INT);
                        break;
                    case '`wegspoelbaar_janee`':
                        $stmt->bindValue($identifier, $this->wegspoelbaar_janee, PDO::PARAM_INT);
                        break;
                    case '`split_janee`':
                        $stmt->bindValue($identifier, $this->split_janee, PDO::PARAM_INT);
                        break;
                    case '`cuff_janee`':
                        $stmt->bindValue($identifier, $this->cuff_janee, PDO::PARAM_INT);
                        break;
                    case '`enkel_of_dubbelzijdig`':
                        $stmt->bindValue($identifier, $this->enkel_of_dubbelzijdig, PDO::PARAM_STR);
                        break;
                    case '`thnr_absorptievermogen`':
                        $stmt->bindValue($identifier, $this->thnr_absorptievermogen, PDO::PARAM_INT);
                        break;
                    case '`itemnr_absorptievermogen`':
                        $stmt->bindValue($identifier, $this->itemnr_absorptievermogen, PDO::PARAM_INT);
                        break;
                    case '`soort_incontinentie_urinefaeces`':
                        $stmt->bindValue($identifier, $this->soort_incontinentie_urinefaeces, PDO::PARAM_STR);
                        break;
                    case '`thnr_toebehoren`':
                        $stmt->bindValue($identifier, $this->thnr_toebehoren, PDO::PARAM_INT);
                        break;
                    case '`itemnr_toebehoren`':
                        $stmt->bindValue($identifier, $this->itemnr_toebehoren, PDO::PARAM_INT);
                        break;
                    case '`thnr_fysische_toestand`':
                        $stmt->bindValue($identifier, $this->thnr_fysische_toestand, PDO::PARAM_INT);
                        break;
                    case '`itemnr_fysische_toestand`':
                        $stmt->bindValue($identifier, $this->itemnr_fysische_toestand, PDO::PARAM_INT);
                        break;
                    case '`impregneermiddel_samenstelling`':
                        $stmt->bindValue($identifier, $this->impregneermiddel_samenstelling, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = GsMedischeHulpmiddelenPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = GsMedischeHulpmiddelenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getBestandnummer();
                break;
            case 1:
                return $this->getMutatiekode();
                break;
            case 2:
                return $this->getMedischHulpmiddelkode();
                break;
            case 3:
                return $this->getSubstitutieKode();
                break;
            case 4:
                return $this->getThnrSoortHulpmiddel();
                break;
            case 5:
                return $this->getSoortHulpmiddelkode();
                break;
            case 6:
                return $this->getGesteriliseerdJanee();
                break;
            case 7:
                return $this->getThnrSterilisatiemethode();
                break;
            case 8:
                return $this->getItemnrSterilisatiemethode();
                break;
            case 9:
                return $this->getThnrSluiting();
                break;
            case 10:
                return $this->getItemnrSluiting();
                break;
            case 11:
                return $this->getAantalDelen();
                break;
            case 12:
                return $this->getAantalKanalen();
                break;
            case 13:
                return $this->getThnrBevestiging();
                break;
            case 14:
                return $this->getItemnrBevestiging();
                break;
            case 15:
                return $this->getBreedteHoeveelheid();
                break;
            case 16:
                return $this->getThnrBreedteEenheid();
                break;
            case 17:
                return $this->getItemnrBreedteEenheid();
                break;
            case 18:
                return $this->getDrukklasse();
                break;
            case 19:
                return $this->getDiameterHoeveelheid();
                break;
            case 20:
                return $this->getThnrDiameterEenheid();
                break;
            case 21:
                return $this->getItemnrDiameterEenheid();
                break;
            case 22:
                return $this->getDichtOfOpenGeweven();
                break;
            case 23:
                return $this->getThnrDoorlaatbaarheid();
                break;
            case 24:
                return $this->getItemnrDoorlaatbaarheid();
                break;
            case 25:
                return $this->getDraagbaarJanee();
                break;
            case 26:
                return $this->getThnrDraagplaats();
                break;
            case 27:
                return $this->getItemnrDraagplaats();
                break;
            case 28:
                return $this->getThnrExtraKenmerk();
                break;
            case 29:
                return $this->getItemNrExtraKenmerk();
                break;
            case 30:
                return $this->getFilterJanee();
                break;
            case 31:
                return $this->getFlensmaatHoeveelheid();
                break;
            case 32:
                return $this->getThnrFlensmaatEenheid();
                break;
            case 33:
                return $this->getItemnrFlensmaatEenheid();
                break;
            case 34:
                return $this->getGeslacht();
                break;
            case 35:
                return $this->getGlijmiddelJanee();
                break;
            case 36:
                return $this->getHergebruikMogelijkJanee();
                break;
            case 37:
                return $this->getThnrHulpmiddelpresentatie();
                break;
            case 38:
                return $this->getItemnrHulpmiddelpresentatie();
                break;
            case 39:
                return $this->getThnrKleeflaag();
                break;
            case 40:
                return $this->getItemnrKleeflaag();
                break;
            case 41:
                return $this->getKleurThesaurusnummer();
                break;
            case 42:
                return $this->getItemnrKleur();
                break;
            case 43:
                return $this->getLengte1Hoeveelheid();
                break;
            case 44:
                return $this->getThnrLengte1Eenheid();
                break;
            case 45:
                return $this->getItemnrLengte1Eenheid();
                break;
            case 46:
                return $this->getLengte2Hoeveelheid();
                break;
            case 47:
                return $this->getThnrLengte2Eenheid();
                break;
            case 48:
                return $this->getItemnrLengte2Eenheid();
                break;
            case 49:
                return $this->getMaasgrootte();
                break;
            case 50:
                return $this->getThnrMaataanduiding();
                break;
            case 51:
                return $this->getItemnrMaataanduiding();
                break;
            case 52:
                return $this->getThnrMateriaal();
                break;
            case 53:
                return $this->getItemnrMateriaal();
                break;
            case 54:
                return $this->getNietAanDeWondHechtend();
                break;
            case 55:
                return $this->getThnrPlaatsSluiting();
                break;
            case 56:
                return $this->getItemnrPlaatsSluiting();
                break;
            case 57:
                return $this->getRekpercentage();
                break;
            case 58:
                return $this->getRekrichting();
                break;
            case 59:
                return $this->getThnrRekaanduiding();
                break;
            case 60:
                return $this->getItemnrRekaanduiding();
                break;
            case 61:
                return $this->getRontgencontrastdraadAanwezigJn();
                break;
            case 62:
                return $this->getThnrHulpmiddelsysteem();
                break;
            case 63:
                return $this->getItemnrHulpmiddelsysteem();
                break;
            case 64:
                return $this->getTerugslagvoorzieningJanee();
                break;
            case 65:
                return $this->getToepassingAfnameverblijf();
                break;
            case 66:
                return $this->getTypePuntNelatontiemann();
                break;
            case 67:
                return $this->getVolumeHoeveelheid();
                break;
            case 68:
                return $this->getThnrVolumeEenheid();
                break;
            case 69:
                return $this->getItemnrVolumeEenheid();
                break;
            case 70:
                return $this->getThnrVorm();
                break;
            case 71:
                return $this->getItemnrVorm();
                break;
            case 72:
                return $this->getThnrVormVanDeOpening();
                break;
            case 73:
                return $this->getItemnrVormVanDeOpening();
                break;
            case 74:
                return $this->getThnrVormVanDePlaat();
                break;
            case 75:
                return $this->getItemnrVormVanDePlaat();
                break;
            case 76:
                return $this->getWaterbestendigJanee();
                break;
            case 77:
                return $this->getWegspoelbaarJanee();
                break;
            case 78:
                return $this->getSplitJanee();
                break;
            case 79:
                return $this->getCuffJanee();
                break;
            case 80:
                return $this->getEnkelOfDubbelzijdig();
                break;
            case 81:
                return $this->getThnrAbsorptievermogen();
                break;
            case 82:
                return $this->getItemnrAbsorptievermogen();
                break;
            case 83:
                return $this->getSoortIncontinentieUrinefaeces();
                break;
            case 84:
                return $this->getThnrToebehoren();
                break;
            case 85:
                return $this->getItemnrToebehoren();
                break;
            case 86:
                return $this->getThnrFysischeToestand();
                break;
            case 87:
                return $this->getItemnrFysischeToestand();
                break;
            case 88:
                return $this->getImpregneermiddelSamenstelling();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['GsMedischeHulpmiddelen'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsMedischeHulpmiddelen'][serialize($this->getPrimaryKey())] = true;
        $keys = GsMedischeHulpmiddelenPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getMedischHulpmiddelkode(),
            $keys[3] => $this->getSubstitutieKode(),
            $keys[4] => $this->getThnrSoortHulpmiddel(),
            $keys[5] => $this->getSoortHulpmiddelkode(),
            $keys[6] => $this->getGesteriliseerdJanee(),
            $keys[7] => $this->getThnrSterilisatiemethode(),
            $keys[8] => $this->getItemnrSterilisatiemethode(),
            $keys[9] => $this->getThnrSluiting(),
            $keys[10] => $this->getItemnrSluiting(),
            $keys[11] => $this->getAantalDelen(),
            $keys[12] => $this->getAantalKanalen(),
            $keys[13] => $this->getThnrBevestiging(),
            $keys[14] => $this->getItemnrBevestiging(),
            $keys[15] => $this->getBreedteHoeveelheid(),
            $keys[16] => $this->getThnrBreedteEenheid(),
            $keys[17] => $this->getItemnrBreedteEenheid(),
            $keys[18] => $this->getDrukklasse(),
            $keys[19] => $this->getDiameterHoeveelheid(),
            $keys[20] => $this->getThnrDiameterEenheid(),
            $keys[21] => $this->getItemnrDiameterEenheid(),
            $keys[22] => $this->getDichtOfOpenGeweven(),
            $keys[23] => $this->getThnrDoorlaatbaarheid(),
            $keys[24] => $this->getItemnrDoorlaatbaarheid(),
            $keys[25] => $this->getDraagbaarJanee(),
            $keys[26] => $this->getThnrDraagplaats(),
            $keys[27] => $this->getItemnrDraagplaats(),
            $keys[28] => $this->getThnrExtraKenmerk(),
            $keys[29] => $this->getItemNrExtraKenmerk(),
            $keys[30] => $this->getFilterJanee(),
            $keys[31] => $this->getFlensmaatHoeveelheid(),
            $keys[32] => $this->getThnrFlensmaatEenheid(),
            $keys[33] => $this->getItemnrFlensmaatEenheid(),
            $keys[34] => $this->getGeslacht(),
            $keys[35] => $this->getGlijmiddelJanee(),
            $keys[36] => $this->getHergebruikMogelijkJanee(),
            $keys[37] => $this->getThnrHulpmiddelpresentatie(),
            $keys[38] => $this->getItemnrHulpmiddelpresentatie(),
            $keys[39] => $this->getThnrKleeflaag(),
            $keys[40] => $this->getItemnrKleeflaag(),
            $keys[41] => $this->getKleurThesaurusnummer(),
            $keys[42] => $this->getItemnrKleur(),
            $keys[43] => $this->getLengte1Hoeveelheid(),
            $keys[44] => $this->getThnrLengte1Eenheid(),
            $keys[45] => $this->getItemnrLengte1Eenheid(),
            $keys[46] => $this->getLengte2Hoeveelheid(),
            $keys[47] => $this->getThnrLengte2Eenheid(),
            $keys[48] => $this->getItemnrLengte2Eenheid(),
            $keys[49] => $this->getMaasgrootte(),
            $keys[50] => $this->getThnrMaataanduiding(),
            $keys[51] => $this->getItemnrMaataanduiding(),
            $keys[52] => $this->getThnrMateriaal(),
            $keys[53] => $this->getItemnrMateriaal(),
            $keys[54] => $this->getNietAanDeWondHechtend(),
            $keys[55] => $this->getThnrPlaatsSluiting(),
            $keys[56] => $this->getItemnrPlaatsSluiting(),
            $keys[57] => $this->getRekpercentage(),
            $keys[58] => $this->getRekrichting(),
            $keys[59] => $this->getThnrRekaanduiding(),
            $keys[60] => $this->getItemnrRekaanduiding(),
            $keys[61] => $this->getRontgencontrastdraadAanwezigJn(),
            $keys[62] => $this->getThnrHulpmiddelsysteem(),
            $keys[63] => $this->getItemnrHulpmiddelsysteem(),
            $keys[64] => $this->getTerugslagvoorzieningJanee(),
            $keys[65] => $this->getToepassingAfnameverblijf(),
            $keys[66] => $this->getTypePuntNelatontiemann(),
            $keys[67] => $this->getVolumeHoeveelheid(),
            $keys[68] => $this->getThnrVolumeEenheid(),
            $keys[69] => $this->getItemnrVolumeEenheid(),
            $keys[70] => $this->getThnrVorm(),
            $keys[71] => $this->getItemnrVorm(),
            $keys[72] => $this->getThnrVormVanDeOpening(),
            $keys[73] => $this->getItemnrVormVanDeOpening(),
            $keys[74] => $this->getThnrVormVanDePlaat(),
            $keys[75] => $this->getItemnrVormVanDePlaat(),
            $keys[76] => $this->getWaterbestendigJanee(),
            $keys[77] => $this->getWegspoelbaarJanee(),
            $keys[78] => $this->getSplitJanee(),
            $keys[79] => $this->getCuffJanee(),
            $keys[80] => $this->getEnkelOfDubbelzijdig(),
            $keys[81] => $this->getThnrAbsorptievermogen(),
            $keys[82] => $this->getItemnrAbsorptievermogen(),
            $keys[83] => $this->getSoortIncontinentieUrinefaeces(),
            $keys[84] => $this->getThnrToebehoren(),
            $keys[85] => $this->getItemnrToebehoren(),
            $keys[86] => $this->getThnrFysischeToestand(),
            $keys[87] => $this->getItemnrFysischeToestand(),
            $keys[88] => $this->getImpregneermiddelSamenstelling(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }


        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = GsMedischeHulpmiddelenPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setBestandnummer($value);
                break;
            case 1:
                $this->setMutatiekode($value);
                break;
            case 2:
                $this->setMedischHulpmiddelkode($value);
                break;
            case 3:
                $this->setSubstitutieKode($value);
                break;
            case 4:
                $this->setThnrSoortHulpmiddel($value);
                break;
            case 5:
                $this->setSoortHulpmiddelkode($value);
                break;
            case 6:
                $this->setGesteriliseerdJanee($value);
                break;
            case 7:
                $this->setThnrSterilisatiemethode($value);
                break;
            case 8:
                $this->setItemnrSterilisatiemethode($value);
                break;
            case 9:
                $this->setThnrSluiting($value);
                break;
            case 10:
                $this->setItemnrSluiting($value);
                break;
            case 11:
                $this->setAantalDelen($value);
                break;
            case 12:
                $this->setAantalKanalen($value);
                break;
            case 13:
                $this->setThnrBevestiging($value);
                break;
            case 14:
                $this->setItemnrBevestiging($value);
                break;
            case 15:
                $this->setBreedteHoeveelheid($value);
                break;
            case 16:
                $this->setThnrBreedteEenheid($value);
                break;
            case 17:
                $this->setItemnrBreedteEenheid($value);
                break;
            case 18:
                $this->setDrukklasse($value);
                break;
            case 19:
                $this->setDiameterHoeveelheid($value);
                break;
            case 20:
                $this->setThnrDiameterEenheid($value);
                break;
            case 21:
                $this->setItemnrDiameterEenheid($value);
                break;
            case 22:
                $this->setDichtOfOpenGeweven($value);
                break;
            case 23:
                $this->setThnrDoorlaatbaarheid($value);
                break;
            case 24:
                $this->setItemnrDoorlaatbaarheid($value);
                break;
            case 25:
                $this->setDraagbaarJanee($value);
                break;
            case 26:
                $this->setThnrDraagplaats($value);
                break;
            case 27:
                $this->setItemnrDraagplaats($value);
                break;
            case 28:
                $this->setThnrExtraKenmerk($value);
                break;
            case 29:
                $this->setItemNrExtraKenmerk($value);
                break;
            case 30:
                $this->setFilterJanee($value);
                break;
            case 31:
                $this->setFlensmaatHoeveelheid($value);
                break;
            case 32:
                $this->setThnrFlensmaatEenheid($value);
                break;
            case 33:
                $this->setItemnrFlensmaatEenheid($value);
                break;
            case 34:
                $this->setGeslacht($value);
                break;
            case 35:
                $this->setGlijmiddelJanee($value);
                break;
            case 36:
                $this->setHergebruikMogelijkJanee($value);
                break;
            case 37:
                $this->setThnrHulpmiddelpresentatie($value);
                break;
            case 38:
                $this->setItemnrHulpmiddelpresentatie($value);
                break;
            case 39:
                $this->setThnrKleeflaag($value);
                break;
            case 40:
                $this->setItemnrKleeflaag($value);
                break;
            case 41:
                $this->setKleurThesaurusnummer($value);
                break;
            case 42:
                $this->setItemnrKleur($value);
                break;
            case 43:
                $this->setLengte1Hoeveelheid($value);
                break;
            case 44:
                $this->setThnrLengte1Eenheid($value);
                break;
            case 45:
                $this->setItemnrLengte1Eenheid($value);
                break;
            case 46:
                $this->setLengte2Hoeveelheid($value);
                break;
            case 47:
                $this->setThnrLengte2Eenheid($value);
                break;
            case 48:
                $this->setItemnrLengte2Eenheid($value);
                break;
            case 49:
                $this->setMaasgrootte($value);
                break;
            case 50:
                $this->setThnrMaataanduiding($value);
                break;
            case 51:
                $this->setItemnrMaataanduiding($value);
                break;
            case 52:
                $this->setThnrMateriaal($value);
                break;
            case 53:
                $this->setItemnrMateriaal($value);
                break;
            case 54:
                $this->setNietAanDeWondHechtend($value);
                break;
            case 55:
                $this->setThnrPlaatsSluiting($value);
                break;
            case 56:
                $this->setItemnrPlaatsSluiting($value);
                break;
            case 57:
                $this->setRekpercentage($value);
                break;
            case 58:
                $this->setRekrichting($value);
                break;
            case 59:
                $this->setThnrRekaanduiding($value);
                break;
            case 60:
                $this->setItemnrRekaanduiding($value);
                break;
            case 61:
                $this->setRontgencontrastdraadAanwezigJn($value);
                break;
            case 62:
                $this->setThnrHulpmiddelsysteem($value);
                break;
            case 63:
                $this->setItemnrHulpmiddelsysteem($value);
                break;
            case 64:
                $this->setTerugslagvoorzieningJanee($value);
                break;
            case 65:
                $this->setToepassingAfnameverblijf($value);
                break;
            case 66:
                $this->setTypePuntNelatontiemann($value);
                break;
            case 67:
                $this->setVolumeHoeveelheid($value);
                break;
            case 68:
                $this->setThnrVolumeEenheid($value);
                break;
            case 69:
                $this->setItemnrVolumeEenheid($value);
                break;
            case 70:
                $this->setThnrVorm($value);
                break;
            case 71:
                $this->setItemnrVorm($value);
                break;
            case 72:
                $this->setThnrVormVanDeOpening($value);
                break;
            case 73:
                $this->setItemnrVormVanDeOpening($value);
                break;
            case 74:
                $this->setThnrVormVanDePlaat($value);
                break;
            case 75:
                $this->setItemnrVormVanDePlaat($value);
                break;
            case 76:
                $this->setWaterbestendigJanee($value);
                break;
            case 77:
                $this->setWegspoelbaarJanee($value);
                break;
            case 78:
                $this->setSplitJanee($value);
                break;
            case 79:
                $this->setCuffJanee($value);
                break;
            case 80:
                $this->setEnkelOfDubbelzijdig($value);
                break;
            case 81:
                $this->setThnrAbsorptievermogen($value);
                break;
            case 82:
                $this->setItemnrAbsorptievermogen($value);
                break;
            case 83:
                $this->setSoortIncontinentieUrinefaeces($value);
                break;
            case 84:
                $this->setThnrToebehoren($value);
                break;
            case 85:
                $this->setItemnrToebehoren($value);
                break;
            case 86:
                $this->setThnrFysischeToestand($value);
                break;
            case 87:
                $this->setItemnrFysischeToestand($value);
                break;
            case 88:
                $this->setImpregneermiddelSamenstelling($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = GsMedischeHulpmiddelenPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setMedischHulpmiddelkode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSubstitutieKode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setThnrSoortHulpmiddel($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSoortHulpmiddelkode($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setGesteriliseerdJanee($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setThnrSterilisatiemethode($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setItemnrSterilisatiemethode($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setThnrSluiting($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setItemnrSluiting($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAantalDelen($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAantalKanalen($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setThnrBevestiging($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setItemnrBevestiging($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setBreedteHoeveelheid($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setThnrBreedteEenheid($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setItemnrBreedteEenheid($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDrukklasse($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDiameterHoeveelheid($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setThnrDiameterEenheid($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setItemnrDiameterEenheid($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDichtOfOpenGeweven($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setThnrDoorlaatbaarheid($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setItemnrDoorlaatbaarheid($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDraagbaarJanee($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setThnrDraagplaats($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setItemnrDraagplaats($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setThnrExtraKenmerk($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setItemNrExtraKenmerk($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setFilterJanee($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setFlensmaatHoeveelheid($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setThnrFlensmaatEenheid($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setItemnrFlensmaatEenheid($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setGeslacht($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setGlijmiddelJanee($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setHergebruikMogelijkJanee($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setThnrHulpmiddelpresentatie($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setItemnrHulpmiddelpresentatie($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setThnrKleeflaag($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setItemnrKleeflaag($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setKleurThesaurusnummer($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setItemnrKleur($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setLengte1Hoeveelheid($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setThnrLengte1Eenheid($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setItemnrLengte1Eenheid($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setLengte2Hoeveelheid($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setThnrLengte2Eenheid($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setItemnrLengte2Eenheid($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setMaasgrootte($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setThnrMaataanduiding($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setItemnrMaataanduiding($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setThnrMateriaal($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setItemnrMateriaal($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setNietAanDeWondHechtend($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setThnrPlaatsSluiting($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setItemnrPlaatsSluiting($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setRekpercentage($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setRekrichting($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setThnrRekaanduiding($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setItemnrRekaanduiding($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setRontgencontrastdraadAanwezigJn($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setThnrHulpmiddelsysteem($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setItemnrHulpmiddelsysteem($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setTerugslagvoorzieningJanee($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setToepassingAfnameverblijf($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setTypePuntNelatontiemann($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setVolumeHoeveelheid($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setThnrVolumeEenheid($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setItemnrVolumeEenheid($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setThnrVorm($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setItemnrVorm($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setThnrVormVanDeOpening($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setItemnrVormVanDeOpening($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setThnrVormVanDePlaat($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setItemnrVormVanDePlaat($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setWaterbestendigJanee($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setWegspoelbaarJanee($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setSplitJanee($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setCuffJanee($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setEnkelOfDubbelzijdig($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setThnrAbsorptievermogen($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setItemnrAbsorptievermogen($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setSoortIncontinentieUrinefaeces($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setThnrToebehoren($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setItemnrToebehoren($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setThnrFysischeToestand($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setItemnrFysischeToestand($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setImpregneermiddelSamenstelling($arr[$keys[88]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsMedischeHulpmiddelenPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::BESTANDNUMMER)) $criteria->add(GsMedischeHulpmiddelenPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::MUTATIEKODE)) $criteria->add(GsMedischeHulpmiddelenPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE)) $criteria->add(GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE, $this->medisch_hulpmiddelkode);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::SUBSTITUTIE_KODE)) $criteria->add(GsMedischeHulpmiddelenPeer::SUBSTITUTIE_KODE, $this->substitutie_kode);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_SOORT_HULPMIDDEL)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_SOORT_HULPMIDDEL, $this->thnr_soort_hulpmiddel);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE)) $criteria->add(GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE, $this->soort_hulpmiddelkode);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::GESTERILISEERD_JANEE)) $criteria->add(GsMedischeHulpmiddelenPeer::GESTERILISEERD_JANEE, $this->gesteriliseerd_janee);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_STERILISATIEMETHODE)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_STERILISATIEMETHODE, $this->thnr_sterilisatiemethode);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_STERILISATIEMETHODE)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_STERILISATIEMETHODE, $this->itemnr_sterilisatiemethode);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_SLUITING)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_SLUITING, $this->thnr_sluiting);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_SLUITING)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_SLUITING, $this->itemnr_sluiting);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::AANTAL_DELEN)) $criteria->add(GsMedischeHulpmiddelenPeer::AANTAL_DELEN, $this->aantal_delen);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::AANTAL_KANALEN)) $criteria->add(GsMedischeHulpmiddelenPeer::AANTAL_KANALEN, $this->aantal_kanalen);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_BEVESTIGING)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_BEVESTIGING, $this->thnr_bevestiging);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_BEVESTIGING)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_BEVESTIGING, $this->itemnr_bevestiging);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::BREEDTE_HOEVEELHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::BREEDTE_HOEVEELHEID, $this->breedte_hoeveelheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_BREEDTE_EENHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_BREEDTE_EENHEID, $this->thnr_breedte_eenheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_BREEDTE_EENHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_BREEDTE_EENHEID, $this->itemnr_breedte_eenheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::DRUKKLASSE)) $criteria->add(GsMedischeHulpmiddelenPeer::DRUKKLASSE, $this->drukklasse);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::DIAMETER_HOEVEELHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::DIAMETER_HOEVEELHEID, $this->diameter_hoeveelheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_DIAMETER_EENHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_DIAMETER_EENHEID, $this->thnr_diameter_eenheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_DIAMETER_EENHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_DIAMETER_EENHEID, $this->itemnr_diameter_eenheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::DICHT_OF_OPEN_GEWEVEN)) $criteria->add(GsMedischeHulpmiddelenPeer::DICHT_OF_OPEN_GEWEVEN, $this->dicht_of_open_geweven);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_DOORLAATBAARHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_DOORLAATBAARHEID, $this->thnr_doorlaatbaarheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_DOORLAATBAARHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_DOORLAATBAARHEID, $this->itemnr_doorlaatbaarheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::DRAAGBAAR_JANEE)) $criteria->add(GsMedischeHulpmiddelenPeer::DRAAGBAAR_JANEE, $this->draagbaar_janee);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_DRAAGPLAATS)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_DRAAGPLAATS, $this->thnr_draagplaats);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_DRAAGPLAATS)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_DRAAGPLAATS, $this->itemnr_draagplaats);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_EXTRA_KENMERK)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_EXTRA_KENMERK, $this->thnr_extra_kenmerk);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEM_NR_EXTRA_KENMERK)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEM_NR_EXTRA_KENMERK, $this->item_nr_extra_kenmerk);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::FILTER_JANEE)) $criteria->add(GsMedischeHulpmiddelenPeer::FILTER_JANEE, $this->filter_janee);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::FLENSMAAT_HOEVEELHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::FLENSMAAT_HOEVEELHEID, $this->flensmaat_hoeveelheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_FLENSMAAT_EENHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_FLENSMAAT_EENHEID, $this->thnr_flensmaat_eenheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_FLENSMAAT_EENHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_FLENSMAAT_EENHEID, $this->itemnr_flensmaat_eenheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::GESLACHT)) $criteria->add(GsMedischeHulpmiddelenPeer::GESLACHT, $this->geslacht);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::GLIJMIDDEL_JANEE)) $criteria->add(GsMedischeHulpmiddelenPeer::GLIJMIDDEL_JANEE, $this->glijmiddel_janee);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::HERGEBRUIK_MOGELIJK_JANEE)) $criteria->add(GsMedischeHulpmiddelenPeer::HERGEBRUIK_MOGELIJK_JANEE, $this->hergebruik_mogelijk_janee);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELPRESENTATIE)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELPRESENTATIE, $this->thnr_hulpmiddelpresentatie);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELPRESENTATIE)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELPRESENTATIE, $this->itemnr_hulpmiddelpresentatie);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_KLEEFLAAG)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_KLEEFLAAG, $this->thnr_kleeflaag);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_KLEEFLAAG)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_KLEEFLAAG, $this->itemnr_kleeflaag);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::KLEUR_THESAURUSNUMMER)) $criteria->add(GsMedischeHulpmiddelenPeer::KLEUR_THESAURUSNUMMER, $this->kleur_thesaurusnummer);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_KLEUR)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_KLEUR, $this->itemnr_kleur);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::LENGTE_1_HOEVEELHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::LENGTE_1_HOEVEELHEID, $this->lengte_1_hoeveelheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_LENGTE_1_EENHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_LENGTE_1_EENHEID, $this->thnr_lengte_1_eenheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_1_EENHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_1_EENHEID, $this->itemnr_lengte_1_eenheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::LENGTE_2_HOEVEELHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::LENGTE_2_HOEVEELHEID, $this->lengte_2_hoeveelheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_LENGTE_2_EENHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_LENGTE_2_EENHEID, $this->thnr_lengte_2_eenheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_2_EENHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_LENGTE_2_EENHEID, $this->itemnr_lengte_2_eenheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::MAASGROOTTE)) $criteria->add(GsMedischeHulpmiddelenPeer::MAASGROOTTE, $this->maasgrootte);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_MAATAANDUIDING)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_MAATAANDUIDING, $this->thnr_maataanduiding);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_MAATAANDUIDING)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_MAATAANDUIDING, $this->itemnr_maataanduiding);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_MATERIAAL)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_MATERIAAL, $this->thnr_materiaal);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_MATERIAAL)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_MATERIAAL, $this->itemnr_materiaal);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::NIET_AAN_DE_WOND_HECHTEND)) $criteria->add(GsMedischeHulpmiddelenPeer::NIET_AAN_DE_WOND_HECHTEND, $this->niet_aan_de_wond_hechtend);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_PLAATS_SLUITING)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_PLAATS_SLUITING, $this->thnr_plaats_sluiting);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_PLAATS_SLUITING)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_PLAATS_SLUITING, $this->itemnr_plaats_sluiting);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::REKPERCENTAGE)) $criteria->add(GsMedischeHulpmiddelenPeer::REKPERCENTAGE, $this->rekpercentage);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::REKRICHTING)) $criteria->add(GsMedischeHulpmiddelenPeer::REKRICHTING, $this->rekrichting);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_REKAANDUIDING)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_REKAANDUIDING, $this->thnr_rekaanduiding);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_REKAANDUIDING)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_REKAANDUIDING, $this->itemnr_rekaanduiding);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::RONTGENCONTRASTDRAAD_AANWEZIG_JN)) $criteria->add(GsMedischeHulpmiddelenPeer::RONTGENCONTRASTDRAAD_AANWEZIG_JN, $this->rontgencontrastdraad_aanwezig_jn);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELSYSTEEM)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_HULPMIDDELSYSTEEM, $this->thnr_hulpmiddelsysteem);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELSYSTEEM)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_HULPMIDDELSYSTEEM, $this->itemnr_hulpmiddelsysteem);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::TERUGSLAGVOORZIENING_JANEE)) $criteria->add(GsMedischeHulpmiddelenPeer::TERUGSLAGVOORZIENING_JANEE, $this->terugslagvoorziening_janee);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::TOEPASSING_AFNAMEVERBLIJF)) $criteria->add(GsMedischeHulpmiddelenPeer::TOEPASSING_AFNAMEVERBLIJF, $this->toepassing_afnameverblijf);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::TYPE_PUNT_NELATONTIEMANN)) $criteria->add(GsMedischeHulpmiddelenPeer::TYPE_PUNT_NELATONTIEMANN, $this->type_punt_nelatontiemann);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::VOLUME_HOEVEELHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::VOLUME_HOEVEELHEID, $this->volume_hoeveelheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_VOLUME_EENHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_VOLUME_EENHEID, $this->thnr_volume_eenheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_VOLUME_EENHEID)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_VOLUME_EENHEID, $this->itemnr_volume_eenheid);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_VORM)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_VORM, $this->thnr_vorm);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_VORM)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_VORM, $this->itemnr_vorm);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_OPENING)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_OPENING, $this->thnr_vorm_van_de_opening);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_OPENING)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_OPENING, $this->itemnr_vorm_van_de_opening);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_PLAAT)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_VORM_VAN_DE_PLAAT, $this->thnr_vorm_van_de_plaat);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_PLAAT)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_VORM_VAN_DE_PLAAT, $this->itemnr_vorm_van_de_plaat);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::WATERBESTENDIG_JANEE)) $criteria->add(GsMedischeHulpmiddelenPeer::WATERBESTENDIG_JANEE, $this->waterbestendig_janee);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::WEGSPOELBAAR_JANEE)) $criteria->add(GsMedischeHulpmiddelenPeer::WEGSPOELBAAR_JANEE, $this->wegspoelbaar_janee);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::SPLIT_JANEE)) $criteria->add(GsMedischeHulpmiddelenPeer::SPLIT_JANEE, $this->split_janee);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::CUFF_JANEE)) $criteria->add(GsMedischeHulpmiddelenPeer::CUFF_JANEE, $this->cuff_janee);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ENKEL_OF_DUBBELZIJDIG)) $criteria->add(GsMedischeHulpmiddelenPeer::ENKEL_OF_DUBBELZIJDIG, $this->enkel_of_dubbelzijdig);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_ABSORPTIEVERMOGEN)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_ABSORPTIEVERMOGEN, $this->thnr_absorptievermogen);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_ABSORPTIEVERMOGEN)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_ABSORPTIEVERMOGEN, $this->itemnr_absorptievermogen);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::SOORT_INCONTINENTIE_URINEFAECES)) $criteria->add(GsMedischeHulpmiddelenPeer::SOORT_INCONTINENTIE_URINEFAECES, $this->soort_incontinentie_urinefaeces);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_TOEBEHOREN)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_TOEBEHOREN, $this->thnr_toebehoren);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_TOEBEHOREN)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_TOEBEHOREN, $this->itemnr_toebehoren);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::THNR_FYSISCHE_TOESTAND)) $criteria->add(GsMedischeHulpmiddelenPeer::THNR_FYSISCHE_TOESTAND, $this->thnr_fysische_toestand);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::ITEMNR_FYSISCHE_TOESTAND)) $criteria->add(GsMedischeHulpmiddelenPeer::ITEMNR_FYSISCHE_TOESTAND, $this->itemnr_fysische_toestand);
        if ($this->isColumnModified(GsMedischeHulpmiddelenPeer::IMPREGNEERMIDDEL_SAMENSTELLING)) $criteria->add(GsMedischeHulpmiddelenPeer::IMPREGNEERMIDDEL_SAMENSTELLING, $this->impregneermiddel_samenstelling);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(GsMedischeHulpmiddelenPeer::DATABASE_NAME);
        $criteria->add(GsMedischeHulpmiddelenPeer::MEDISCH_HULPMIDDELKODE, $this->medisch_hulpmiddelkode);
        $criteria->add(GsMedischeHulpmiddelenPeer::SOORT_HULPMIDDELKODE, $this->soort_hulpmiddelkode);

        return $criteria;
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getMedischHulpmiddelkode();
        $pks[1] = $this->getSoortHulpmiddelkode();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setMedischHulpmiddelkode($keys[0]);
        $this->setSoortHulpmiddelkode($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getMedischHulpmiddelkode()) && (null === $this->getSoortHulpmiddelkode());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsMedischeHulpmiddelen (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setMedischHulpmiddelkode($this->getMedischHulpmiddelkode());
        $copyObj->setSubstitutieKode($this->getSubstitutieKode());
        $copyObj->setThnrSoortHulpmiddel($this->getThnrSoortHulpmiddel());
        $copyObj->setSoortHulpmiddelkode($this->getSoortHulpmiddelkode());
        $copyObj->setGesteriliseerdJanee($this->getGesteriliseerdJanee());
        $copyObj->setThnrSterilisatiemethode($this->getThnrSterilisatiemethode());
        $copyObj->setItemnrSterilisatiemethode($this->getItemnrSterilisatiemethode());
        $copyObj->setThnrSluiting($this->getThnrSluiting());
        $copyObj->setItemnrSluiting($this->getItemnrSluiting());
        $copyObj->setAantalDelen($this->getAantalDelen());
        $copyObj->setAantalKanalen($this->getAantalKanalen());
        $copyObj->setThnrBevestiging($this->getThnrBevestiging());
        $copyObj->setItemnrBevestiging($this->getItemnrBevestiging());
        $copyObj->setBreedteHoeveelheid($this->getBreedteHoeveelheid());
        $copyObj->setThnrBreedteEenheid($this->getThnrBreedteEenheid());
        $copyObj->setItemnrBreedteEenheid($this->getItemnrBreedteEenheid());
        $copyObj->setDrukklasse($this->getDrukklasse());
        $copyObj->setDiameterHoeveelheid($this->getDiameterHoeveelheid());
        $copyObj->setThnrDiameterEenheid($this->getThnrDiameterEenheid());
        $copyObj->setItemnrDiameterEenheid($this->getItemnrDiameterEenheid());
        $copyObj->setDichtOfOpenGeweven($this->getDichtOfOpenGeweven());
        $copyObj->setThnrDoorlaatbaarheid($this->getThnrDoorlaatbaarheid());
        $copyObj->setItemnrDoorlaatbaarheid($this->getItemnrDoorlaatbaarheid());
        $copyObj->setDraagbaarJanee($this->getDraagbaarJanee());
        $copyObj->setThnrDraagplaats($this->getThnrDraagplaats());
        $copyObj->setItemnrDraagplaats($this->getItemnrDraagplaats());
        $copyObj->setThnrExtraKenmerk($this->getThnrExtraKenmerk());
        $copyObj->setItemNrExtraKenmerk($this->getItemNrExtraKenmerk());
        $copyObj->setFilterJanee($this->getFilterJanee());
        $copyObj->setFlensmaatHoeveelheid($this->getFlensmaatHoeveelheid());
        $copyObj->setThnrFlensmaatEenheid($this->getThnrFlensmaatEenheid());
        $copyObj->setItemnrFlensmaatEenheid($this->getItemnrFlensmaatEenheid());
        $copyObj->setGeslacht($this->getGeslacht());
        $copyObj->setGlijmiddelJanee($this->getGlijmiddelJanee());
        $copyObj->setHergebruikMogelijkJanee($this->getHergebruikMogelijkJanee());
        $copyObj->setThnrHulpmiddelpresentatie($this->getThnrHulpmiddelpresentatie());
        $copyObj->setItemnrHulpmiddelpresentatie($this->getItemnrHulpmiddelpresentatie());
        $copyObj->setThnrKleeflaag($this->getThnrKleeflaag());
        $copyObj->setItemnrKleeflaag($this->getItemnrKleeflaag());
        $copyObj->setKleurThesaurusnummer($this->getKleurThesaurusnummer());
        $copyObj->setItemnrKleur($this->getItemnrKleur());
        $copyObj->setLengte1Hoeveelheid($this->getLengte1Hoeveelheid());
        $copyObj->setThnrLengte1Eenheid($this->getThnrLengte1Eenheid());
        $copyObj->setItemnrLengte1Eenheid($this->getItemnrLengte1Eenheid());
        $copyObj->setLengte2Hoeveelheid($this->getLengte2Hoeveelheid());
        $copyObj->setThnrLengte2Eenheid($this->getThnrLengte2Eenheid());
        $copyObj->setItemnrLengte2Eenheid($this->getItemnrLengte2Eenheid());
        $copyObj->setMaasgrootte($this->getMaasgrootte());
        $copyObj->setThnrMaataanduiding($this->getThnrMaataanduiding());
        $copyObj->setItemnrMaataanduiding($this->getItemnrMaataanduiding());
        $copyObj->setThnrMateriaal($this->getThnrMateriaal());
        $copyObj->setItemnrMateriaal($this->getItemnrMateriaal());
        $copyObj->setNietAanDeWondHechtend($this->getNietAanDeWondHechtend());
        $copyObj->setThnrPlaatsSluiting($this->getThnrPlaatsSluiting());
        $copyObj->setItemnrPlaatsSluiting($this->getItemnrPlaatsSluiting());
        $copyObj->setRekpercentage($this->getRekpercentage());
        $copyObj->setRekrichting($this->getRekrichting());
        $copyObj->setThnrRekaanduiding($this->getThnrRekaanduiding());
        $copyObj->setItemnrRekaanduiding($this->getItemnrRekaanduiding());
        $copyObj->setRontgencontrastdraadAanwezigJn($this->getRontgencontrastdraadAanwezigJn());
        $copyObj->setThnrHulpmiddelsysteem($this->getThnrHulpmiddelsysteem());
        $copyObj->setItemnrHulpmiddelsysteem($this->getItemnrHulpmiddelsysteem());
        $copyObj->setTerugslagvoorzieningJanee($this->getTerugslagvoorzieningJanee());
        $copyObj->setToepassingAfnameverblijf($this->getToepassingAfnameverblijf());
        $copyObj->setTypePuntNelatontiemann($this->getTypePuntNelatontiemann());
        $copyObj->setVolumeHoeveelheid($this->getVolumeHoeveelheid());
        $copyObj->setThnrVolumeEenheid($this->getThnrVolumeEenheid());
        $copyObj->setItemnrVolumeEenheid($this->getItemnrVolumeEenheid());
        $copyObj->setThnrVorm($this->getThnrVorm());
        $copyObj->setItemnrVorm($this->getItemnrVorm());
        $copyObj->setThnrVormVanDeOpening($this->getThnrVormVanDeOpening());
        $copyObj->setItemnrVormVanDeOpening($this->getItemnrVormVanDeOpening());
        $copyObj->setThnrVormVanDePlaat($this->getThnrVormVanDePlaat());
        $copyObj->setItemnrVormVanDePlaat($this->getItemnrVormVanDePlaat());
        $copyObj->setWaterbestendigJanee($this->getWaterbestendigJanee());
        $copyObj->setWegspoelbaarJanee($this->getWegspoelbaarJanee());
        $copyObj->setSplitJanee($this->getSplitJanee());
        $copyObj->setCuffJanee($this->getCuffJanee());
        $copyObj->setEnkelOfDubbelzijdig($this->getEnkelOfDubbelzijdig());
        $copyObj->setThnrAbsorptievermogen($this->getThnrAbsorptievermogen());
        $copyObj->setItemnrAbsorptievermogen($this->getItemnrAbsorptievermogen());
        $copyObj->setSoortIncontinentieUrinefaeces($this->getSoortIncontinentieUrinefaeces());
        $copyObj->setThnrToebehoren($this->getThnrToebehoren());
        $copyObj->setItemnrToebehoren($this->getItemnrToebehoren());
        $copyObj->setThnrFysischeToestand($this->getThnrFysischeToestand());
        $copyObj->setItemnrFysischeToestand($this->getItemnrFysischeToestand());
        $copyObj->setImpregneermiddelSamenstelling($this->getImpregneermiddelSamenstelling());
        if ($makeNew) {
            $copyObj->setNew(true);
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return GsMedischeHulpmiddelen Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return GsMedischeHulpmiddelenPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsMedischeHulpmiddelenPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->medisch_hulpmiddelkode = null;
        $this->substitutie_kode = null;
        $this->thnr_soort_hulpmiddel = null;
        $this->soort_hulpmiddelkode = null;
        $this->gesteriliseerd_janee = null;
        $this->thnr_sterilisatiemethode = null;
        $this->itemnr_sterilisatiemethode = null;
        $this->thnr_sluiting = null;
        $this->itemnr_sluiting = null;
        $this->aantal_delen = null;
        $this->aantal_kanalen = null;
        $this->thnr_bevestiging = null;
        $this->itemnr_bevestiging = null;
        $this->breedte_hoeveelheid = null;
        $this->thnr_breedte_eenheid = null;
        $this->itemnr_breedte_eenheid = null;
        $this->drukklasse = null;
        $this->diameter_hoeveelheid = null;
        $this->thnr_diameter_eenheid = null;
        $this->itemnr_diameter_eenheid = null;
        $this->dicht_of_open_geweven = null;
        $this->thnr_doorlaatbaarheid = null;
        $this->itemnr_doorlaatbaarheid = null;
        $this->draagbaar_janee = null;
        $this->thnr_draagplaats = null;
        $this->itemnr_draagplaats = null;
        $this->thnr_extra_kenmerk = null;
        $this->item_nr_extra_kenmerk = null;
        $this->filter_janee = null;
        $this->flensmaat_hoeveelheid = null;
        $this->thnr_flensmaat_eenheid = null;
        $this->itemnr_flensmaat_eenheid = null;
        $this->geslacht = null;
        $this->glijmiddel_janee = null;
        $this->hergebruik_mogelijk_janee = null;
        $this->thnr_hulpmiddelpresentatie = null;
        $this->itemnr_hulpmiddelpresentatie = null;
        $this->thnr_kleeflaag = null;
        $this->itemnr_kleeflaag = null;
        $this->kleur_thesaurusnummer = null;
        $this->itemnr_kleur = null;
        $this->lengte_1_hoeveelheid = null;
        $this->thnr_lengte_1_eenheid = null;
        $this->itemnr_lengte_1_eenheid = null;
        $this->lengte_2_hoeveelheid = null;
        $this->thnr_lengte_2_eenheid = null;
        $this->itemnr_lengte_2_eenheid = null;
        $this->maasgrootte = null;
        $this->thnr_maataanduiding = null;
        $this->itemnr_maataanduiding = null;
        $this->thnr_materiaal = null;
        $this->itemnr_materiaal = null;
        $this->niet_aan_de_wond_hechtend = null;
        $this->thnr_plaats_sluiting = null;
        $this->itemnr_plaats_sluiting = null;
        $this->rekpercentage = null;
        $this->rekrichting = null;
        $this->thnr_rekaanduiding = null;
        $this->itemnr_rekaanduiding = null;
        $this->rontgencontrastdraad_aanwezig_jn = null;
        $this->thnr_hulpmiddelsysteem = null;
        $this->itemnr_hulpmiddelsysteem = null;
        $this->terugslagvoorziening_janee = null;
        $this->toepassing_afnameverblijf = null;
        $this->type_punt_nelatontiemann = null;
        $this->volume_hoeveelheid = null;
        $this->thnr_volume_eenheid = null;
        $this->itemnr_volume_eenheid = null;
        $this->thnr_vorm = null;
        $this->itemnr_vorm = null;
        $this->thnr_vorm_van_de_opening = null;
        $this->itemnr_vorm_van_de_opening = null;
        $this->thnr_vorm_van_de_plaat = null;
        $this->itemnr_vorm_van_de_plaat = null;
        $this->waterbestendig_janee = null;
        $this->wegspoelbaar_janee = null;
        $this->split_janee = null;
        $this->cuff_janee = null;
        $this->enkel_of_dubbelzijdig = null;
        $this->thnr_absorptievermogen = null;
        $this->itemnr_absorptievermogen = null;
        $this->soort_incontinentie_urinefaeces = null;
        $this->thnr_toebehoren = null;
        $this->itemnr_toebehoren = null;
        $this->thnr_fysische_toestand = null;
        $this->itemnr_fysische_toestand = null;
        $this->impregneermiddel_samenstelling = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsMedischeHulpmiddelenPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
