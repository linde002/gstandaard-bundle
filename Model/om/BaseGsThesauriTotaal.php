<?php

namespace PharmaIntelligence\GstandaardBundle\Model\om;

use \BaseObject;
use \BasePeer;
use \Criteria;
use \Exception;
use \PDO;
use \Persistent;
use \Propel;
use \PropelCollection;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use PharmaIntelligence\GstandaardBundle\Model\GsAanvullendeMedicatiebewakingsgegevens;
use PharmaIntelligence\GstandaardBundle\Model\GsAanvullendeMedicatiebewakingsgegevensQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelen;
use PharmaIntelligence\GstandaardBundle\Model\GsArtikelenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerken;
use PharmaIntelligence\GstandaardBundle\Model\GsBijzondereKenmerkenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDose;
use PharmaIntelligence\GstandaardBundle\Model\GsDailyDefinedDoseQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsDeclaratietabelDureGeneesmiddelen;
use PharmaIntelligence\GstandaardBundle\Model\GsDeclaratietabelDureGeneesmiddelenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProducten;
use PharmaIntelligence\GstandaardBundle\Model\GsGeneriekeProductenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproducten;
use PharmaIntelligence\GstandaardBundle\Model\GsHandelsproductenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingen;
use PharmaIntelligence\GstandaardBundle\Model\GsIngegevenSamenstellingenQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatie;
use PharmaIntelligence\GstandaardBundle\Model\GsLogistiekeVerpakkingsinformatieQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaard;
use PharmaIntelligence\GstandaardBundle\Model\GsNawGegevensGstandaardQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsPreferentieBeleid;
use PharmaIntelligence\GstandaardBundle\Model\GsPreferentieBeleidQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProduct;
use PharmaIntelligence\GstandaardBundle\Model\GsPrescriptieProductQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsPrijsTariefTabel;
use PharmaIntelligence\GstandaardBundle\Model\GsPrijsTariefTabelQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieOngewensteGroepensnk;
use PharmaIntelligence\GstandaardBundle\Model\GsRelatieOngewensteGroepensnkQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsRzvAanspraak;
use PharmaIntelligence\GstandaardBundle\Model\GsRzvAanspraakQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenHistorie;
use PharmaIntelligence\GstandaardBundle\Model\GsSupplementaireProductenHistorieQuery;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaal;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalPeer;
use PharmaIntelligence\GstandaardBundle\Model\GsThesauriTotaalQuery;

abstract class BaseGsThesauriTotaal extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PharmaIntelligence\\GstandaardBundle\\Model\\GsThesauriTotaalPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GsThesauriTotaalPeer
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
     * The value for the thesaurusnummer field.
     * @var        int
     */
    protected $thesaurusnummer;

    /**
     * The value for the thesaurus_itemnummer field.
     * @var        int
     */
    protected $thesaurus_itemnummer;

    /**
     * The value for the memokode_item field.
     * @var        string
     */
    protected $memokode_item;

    /**
     * The value for the naam_item_4_posities field.
     * @var        string
     */
    protected $naam_item_4_posities;

    /**
     * The value for the naam_item_15_posities field.
     * @var        string
     */
    protected $naam_item_15_posities;

    /**
     * The value for the naam_item_25_posities field.
     * @var        string
     */
    protected $naam_item_25_posities;

    /**
     * The value for the naam_item_50_posities field.
     * @var        string
     */
    protected $naam_item_50_posities;

    /**
     * The value for the aanvullende_kode_1 field.
     * @var        string
     */
    protected $aanvullende_kode_1;

    /**
     * The value for the aanvullende_kode_2 field.
     * @var        string
     */
    protected $aanvullende_kode_2;

    /**
     * The value for the aanvullende_kode_3 field.
     * @var        string
     */
    protected $aanvullende_kode_3;

    /**
     * The value for the aanvullende_kode_4 field.
     * @var        string
     */
    protected $aanvullende_kode_4;

    /**
     * The value for the aanvullende_kode_5 field.
     * @var        string
     */
    protected $aanvullende_kode_5;

    /**
     * The value for the aanvullende_kode_6 field.
     * @var        string
     */
    protected $aanvullende_kode_6;

    /**
     * @var        PropelObjectCollection|GsSupplementaireProductenHistorie[] Collection to store aggregation of GsSupplementaireProductenHistorie objects.
     */
    protected $collGsSupplementaireProductenHistories;
    protected $collGsSupplementaireProductenHistoriesPartial;

    /**
     * @var        PropelObjectCollection|GsRzvAanspraak[] Collection to store aggregation of GsRzvAanspraak objects.
     */
    protected $collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking;
    protected $collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial;

    /**
     * @var        PropelObjectCollection|GsRzvAanspraak[] Collection to store aggregation of GsRzvAanspraak objects.
     */
    protected $collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg;
    protected $collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgPartial;

    /**
     * @var        PropelObjectCollection|GsRzvAanspraak[] Collection to store aggregation of GsRzvAanspraak objects.
     */
    protected $collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2;
    protected $collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial;

    /**
     * @var        PropelObjectCollection|GsAanvullendeMedicatiebewakingsgegevens[] Collection to store aggregation of GsAanvullendeMedicatiebewakingsgegevens objects.
     */
    protected $collGsAanvullendeMedicatiebewakingsgegevenss;
    protected $collGsAanvullendeMedicatiebewakingsgegevenssPartial;

    /**
     * @var        PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[] Collection to store aggregation of GsLogistiekeVerpakkingsinformatie objects.
     */
    protected $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen;
    protected $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenPartial;

    /**
     * @var        PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[] Collection to store aggregation of GsLogistiekeVerpakkingsinformatie objects.
     */
    protected $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte;
    protected $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogtePartial;

    /**
     * @var        PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[] Collection to store aggregation of GsLogistiekeVerpakkingsinformatie objects.
     */
    protected $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte;
    protected $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDieptePartial;

    /**
     * @var        PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[] Collection to store aggregation of GsLogistiekeVerpakkingsinformatie objects.
     */
    protected $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte;
    protected $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedtePartial;

    /**
     * @var        PropelObjectCollection|GsArtikelen[] Collection to store aggregation of GsArtikelen objects.
     */
    protected $collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode;
    protected $collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodePartial;

    /**
     * @var        PropelObjectCollection|GsArtikelen[] Collection to store aggregation of GsArtikelen objects.
     */
    protected $collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode;
    protected $collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodePartial;

    /**
     * @var        PropelObjectCollection|GsArtikelen[] Collection to store aggregation of GsArtikelen objects.
     */
    protected $collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode;
    protected $collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodePartial;

    /**
     * @var        PropelObjectCollection|GsBijzondereKenmerken[] Collection to store aggregation of GsBijzondereKenmerken objects.
     */
    protected $collGsBijzondereKenmerkens;
    protected $collGsBijzondereKenmerkensPartial;

    /**
     * @var        PropelObjectCollection|GsDailyDefinedDose[] Collection to store aggregation of GsDailyDefinedDose objects.
     */
    protected $collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid;
    protected $collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidPartial;

    /**
     * @var        PropelObjectCollection|GsDailyDefinedDose[] Collection to store aggregation of GsDailyDefinedDose objects.
     */
    protected $collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg;
    protected $collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegPartial;

    /**
     * @var        PropelObjectCollection|GsDeclaratietabelDureGeneesmiddelen[] Collection to store aggregation of GsDeclaratietabelDureGeneesmiddelen objects.
     */
    protected $collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel;
    protected $collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelPartial;

    /**
     * @var        PropelObjectCollection|GsDeclaratietabelDureGeneesmiddelen[] Collection to store aggregation of GsDeclaratietabelDureGeneesmiddelen objects.
     */
    protected $collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid;
    protected $collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidPartial;

    /**
     * @var        PropelObjectCollection|GsGeneriekeProducten[] Collection to store aggregation of GsGeneriekeProducten objects.
     */
    protected $collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode;
    protected $collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodePartial;

    /**
     * @var        PropelObjectCollection|GsGeneriekeProducten[] Collection to store aggregation of GsGeneriekeProducten objects.
     */
    protected $collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode;
    protected $collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodePartial;

    /**
     * @var        PropelObjectCollection|GsHandelsproducten[] Collection to store aggregation of GsHandelsproducten objects.
     */
    protected $collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid;
    protected $collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidPartial;

    /**
     * @var        PropelObjectCollection|GsHandelsproducten[] Collection to store aggregation of GsHandelsproducten objects.
     */
    protected $collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking;
    protected $collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingPartial;

    /**
     * @var        PropelObjectCollection|GsHandelsproducten[] Collection to store aggregation of GsHandelsproducten objects.
     */
    protected $collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode;
    protected $collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodePartial;

    /**
     * @var        PropelObjectCollection|GsHandelsproducten[] Collection to store aggregation of GsHandelsproducten objects.
     */
    protected $collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode;
    protected $collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodePartial;

    /**
     * @var        PropelObjectCollection|GsHandelsproducten[] Collection to store aggregation of GsHandelsproducten objects.
     */
    protected $collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode;
    protected $collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodePartial;

    /**
     * @var        PropelObjectCollection|GsHandelsproducten[] Collection to store aggregation of GsHandelsproducten objects.
     */
    protected $collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode;
    protected $collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKodePartial;

    /**
     * @var        PropelObjectCollection|GsHandelsproducten[] Collection to store aggregation of GsHandelsproducten objects.
     */
    protected $collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode;
    protected $collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodePartial;

    /**
     * @var        PropelObjectCollection|GsHandelsproducten[] Collection to store aggregation of GsHandelsproducten objects.
     */
    protected $collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode;
    protected $collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodePartial;

    /**
     * @var        PropelObjectCollection|GsHandelsproducten[] Collection to store aggregation of GsHandelsproducten objects.
     */
    protected $collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode;
    protected $collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodePartial;

    /**
     * @var        PropelObjectCollection|GsHandelsproducten[] Collection to store aggregation of GsHandelsproducten objects.
     */
    protected $collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking;
    protected $collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial;

    /**
     * @var        PropelObjectCollection|GsHandelsproducten[] Collection to store aggregation of GsHandelsproducten objects.
     */
    protected $collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2;
    protected $collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial;

    /**
     * @var        PropelObjectCollection|GsIngegevenSamenstellingen[] Collection to store aggregation of GsIngegevenSamenstellingen objects.
     */
    protected $collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode;
    protected $collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodePartial;

    /**
     * @var        PropelObjectCollection|GsIngegevenSamenstellingen[] Collection to store aggregation of GsIngegevenSamenstellingen objects.
     */
    protected $collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode;
    protected $collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodePartial;

    /**
     * @var        PropelObjectCollection|GsNawGegevensGstandaard[] Collection to store aggregation of GsNawGegevensGstandaard objects.
     */
    protected $collGsNawGegevensGstandaards;
    protected $collGsNawGegevensGstandaardsPartial;

    /**
     * @var        PropelObjectCollection|GsPreferentieBeleid[] Collection to store aggregation of GsPreferentieBeleid objects.
     */
    protected $collGsPreferentieBeleids;
    protected $collGsPreferentieBeleidsPartial;

    /**
     * @var        PropelObjectCollection|GsPrijsTariefTabel[] Collection to store aggregation of GsPrijsTariefTabel objects.
     */
    protected $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering;
    protected $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingPartial;

    /**
     * @var        PropelObjectCollection|GsPrijsTariefTabel[] Collection to store aggregation of GsPrijsTariefTabel objects.
     */
    protected $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag;
    protected $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragPartial;

    /**
     * @var        PropelObjectCollection|GsPrijsTariefTabel[] Collection to store aggregation of GsPrijsTariefTabel objects.
     */
    protected $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron;
    protected $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronPartial;

    /**
     * @var        PropelObjectCollection|GsRelatieOngewensteGroepensnk[] Collection to store aggregation of GsRelatieOngewensteGroepensnk objects.
     */
    protected $collGsRelatieOngewensteGroepensnks;
    protected $collGsRelatieOngewensteGroepensnksPartial;

    /**
     * @var        PropelObjectCollection|GsPrescriptieProduct[] Collection to store aggregation of GsPrescriptieProduct objects.
     */
    protected $collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau;
    protected $collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauPartial;

    /**
     * @var        PropelObjectCollection|GsPrescriptieProduct[] Collection to store aggregation of GsPrescriptieProduct objects.
     */
    protected $collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype;
    protected $collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypePartial;

    /**
     * @var        PropelObjectCollection|GsPrescriptieProduct[] Collection to store aggregation of GsPrescriptieProduct objects.
     */
    protected $collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct;
    protected $collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductPartial;

    /**
     * @var        PropelObjectCollection|GsPrescriptieProduct[] Collection to store aggregation of GsPrescriptieProduct objects.
     */
    protected $collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard;
    protected $collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardPartial;

    /**
     * @var        PropelObjectCollection|GsPrescriptieProduct[] Collection to store aggregation of GsPrescriptieProduct objects.
     */
    protected $collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend;
    protected $collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendPartial;

    /**
     * @var        PropelObjectCollection|GsPrescriptieProduct[] Collection to store aggregation of GsPrescriptieProduct objects.
     */
    protected $collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk;
    protected $collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsSupplementaireProductenHistoriesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsAanvullendeMedicatiebewakingsgegevenssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsBijzondereKenmerkensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsNawGegevensGstandaardsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsPreferentieBeleidsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsRelatieOngewensteGroepensnksScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkScheduledForDeletion = null;

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
     * Get the [thesaurusnummer] column value.
     *
     * @return int
     */
    public function getThesaurusnummer()
    {

        return $this->thesaurusnummer;
    }

    /**
     * Get the [thesaurus_itemnummer] column value.
     *
     * @return int
     */
    public function getThesaurusItemnummer()
    {

        return $this->thesaurus_itemnummer;
    }

    /**
     * Get the [memokode_item] column value.
     *
     * @return string
     */
    public function getMemokodeItem()
    {

        return $this->memokode_item;
    }

    /**
     * Get the [naam_item_4_posities] column value.
     *
     * @return string
     */
    public function getNaamItem4Posities()
    {

        return $this->naam_item_4_posities;
    }

    /**
     * Get the [naam_item_15_posities] column value.
     *
     * @return string
     */
    public function getNaamItem15Posities()
    {

        return $this->naam_item_15_posities;
    }

    /**
     * Get the [naam_item_25_posities] column value.
     *
     * @return string
     */
    public function getNaamItem25Posities()
    {

        return $this->naam_item_25_posities;
    }

    /**
     * Get the [naam_item_50_posities] column value.
     *
     * @return string
     */
    public function getNaamItem50Posities()
    {

        return $this->naam_item_50_posities;
    }

    /**
     * Get the [aanvullende_kode_1] column value.
     *
     * @return string
     */
    public function getAanvullendeKode1()
    {

        return $this->aanvullende_kode_1;
    }

    /**
     * Get the [aanvullende_kode_2] column value.
     *
     * @return string
     */
    public function getAanvullendeKode2()
    {

        return $this->aanvullende_kode_2;
    }

    /**
     * Get the [aanvullende_kode_3] column value.
     *
     * @return string
     */
    public function getAanvullendeKode3()
    {

        return $this->aanvullende_kode_3;
    }

    /**
     * Get the [aanvullende_kode_4] column value.
     *
     * @return string
     */
    public function getAanvullendeKode4()
    {

        return $this->aanvullende_kode_4;
    }

    /**
     * Get the [aanvullende_kode_5] column value.
     *
     * @return string
     */
    public function getAanvullendeKode5()
    {

        return $this->aanvullende_kode_5;
    }

    /**
     * Get the [aanvullende_kode_6] column value.
     *
     * @return string
     */
    public function getAanvullendeKode6()
    {

        return $this->aanvullende_kode_6;
    }

    /**
     * Set the value of [bestandnummer] column.
     *
     * @param  int $v new value
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setBestandnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bestandnummer !== $v) {
            $this->bestandnummer = $v;
            $this->modifiedColumns[] = GsThesauriTotaalPeer::BESTANDNUMMER;
        }


        return $this;
    } // setBestandnummer()

    /**
     * Set the value of [mutatiekode] column.
     *
     * @param  int $v new value
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setMutatiekode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mutatiekode !== $v) {
            $this->mutatiekode = $v;
            $this->modifiedColumns[] = GsThesauriTotaalPeer::MUTATIEKODE;
        }


        return $this;
    } // setMutatiekode()

    /**
     * Set the value of [thesaurusnummer] column.
     *
     * @param  int $v new value
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setThesaurusnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurusnummer !== $v) {
            $this->thesaurusnummer = $v;
            $this->modifiedColumns[] = GsThesauriTotaalPeer::THESAURUSNUMMER;
        }


        return $this;
    } // setThesaurusnummer()

    /**
     * Set the value of [thesaurus_itemnummer] column.
     *
     * @param  int $v new value
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setThesaurusItemnummer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->thesaurus_itemnummer !== $v) {
            $this->thesaurus_itemnummer = $v;
            $this->modifiedColumns[] = GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER;
        }


        return $this;
    } // setThesaurusItemnummer()

    /**
     * Set the value of [memokode_item] column.
     *
     * @param  string $v new value
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setMemokodeItem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->memokode_item !== $v) {
            $this->memokode_item = $v;
            $this->modifiedColumns[] = GsThesauriTotaalPeer::MEMOKODE_ITEM;
        }


        return $this;
    } // setMemokodeItem()

    /**
     * Set the value of [naam_item_4_posities] column.
     *
     * @param  string $v new value
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setNaamItem4Posities($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->naam_item_4_posities !== $v) {
            $this->naam_item_4_posities = $v;
            $this->modifiedColumns[] = GsThesauriTotaalPeer::NAAM_ITEM_4_POSITIES;
        }


        return $this;
    } // setNaamItem4Posities()

    /**
     * Set the value of [naam_item_15_posities] column.
     *
     * @param  string $v new value
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setNaamItem15Posities($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->naam_item_15_posities !== $v) {
            $this->naam_item_15_posities = $v;
            $this->modifiedColumns[] = GsThesauriTotaalPeer::NAAM_ITEM_15_POSITIES;
        }


        return $this;
    } // setNaamItem15Posities()

    /**
     * Set the value of [naam_item_25_posities] column.
     *
     * @param  string $v new value
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setNaamItem25Posities($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->naam_item_25_posities !== $v) {
            $this->naam_item_25_posities = $v;
            $this->modifiedColumns[] = GsThesauriTotaalPeer::NAAM_ITEM_25_POSITIES;
        }


        return $this;
    } // setNaamItem25Posities()

    /**
     * Set the value of [naam_item_50_posities] column.
     *
     * @param  string $v new value
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setNaamItem50Posities($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->naam_item_50_posities !== $v) {
            $this->naam_item_50_posities = $v;
            $this->modifiedColumns[] = GsThesauriTotaalPeer::NAAM_ITEM_50_POSITIES;
        }


        return $this;
    } // setNaamItem50Posities()

    /**
     * Set the value of [aanvullende_kode_1] column.
     *
     * @param  string $v new value
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setAanvullendeKode1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aanvullende_kode_1 !== $v) {
            $this->aanvullende_kode_1 = $v;
            $this->modifiedColumns[] = GsThesauriTotaalPeer::AANVULLENDE_KODE_1;
        }


        return $this;
    } // setAanvullendeKode1()

    /**
     * Set the value of [aanvullende_kode_2] column.
     *
     * @param  string $v new value
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setAanvullendeKode2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aanvullende_kode_2 !== $v) {
            $this->aanvullende_kode_2 = $v;
            $this->modifiedColumns[] = GsThesauriTotaalPeer::AANVULLENDE_KODE_2;
        }


        return $this;
    } // setAanvullendeKode2()

    /**
     * Set the value of [aanvullende_kode_3] column.
     *
     * @param  string $v new value
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setAanvullendeKode3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aanvullende_kode_3 !== $v) {
            $this->aanvullende_kode_3 = $v;
            $this->modifiedColumns[] = GsThesauriTotaalPeer::AANVULLENDE_KODE_3;
        }


        return $this;
    } // setAanvullendeKode3()

    /**
     * Set the value of [aanvullende_kode_4] column.
     *
     * @param  string $v new value
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setAanvullendeKode4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aanvullende_kode_4 !== $v) {
            $this->aanvullende_kode_4 = $v;
            $this->modifiedColumns[] = GsThesauriTotaalPeer::AANVULLENDE_KODE_4;
        }


        return $this;
    } // setAanvullendeKode4()

    /**
     * Set the value of [aanvullende_kode_5] column.
     *
     * @param  string $v new value
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setAanvullendeKode5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aanvullende_kode_5 !== $v) {
            $this->aanvullende_kode_5 = $v;
            $this->modifiedColumns[] = GsThesauriTotaalPeer::AANVULLENDE_KODE_5;
        }


        return $this;
    } // setAanvullendeKode5()

    /**
     * Set the value of [aanvullende_kode_6] column.
     *
     * @param  string $v new value
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setAanvullendeKode6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aanvullende_kode_6 !== $v) {
            $this->aanvullende_kode_6 = $v;
            $this->modifiedColumns[] = GsThesauriTotaalPeer::AANVULLENDE_KODE_6;
        }


        return $this;
    } // setAanvullendeKode6()

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
            $this->thesaurusnummer = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->thesaurus_itemnummer = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->memokode_item = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->naam_item_4_posities = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->naam_item_15_posities = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->naam_item_25_posities = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->naam_item_50_posities = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->aanvullende_kode_1 = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->aanvullende_kode_2 = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->aanvullende_kode_3 = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->aanvullende_kode_4 = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->aanvullende_kode_5 = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->aanvullende_kode_6 = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = GsThesauriTotaalPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GsThesauriTotaal object", $e);
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
            $con = Propel::getConnection(GsThesauriTotaalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GsThesauriTotaalPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collGsSupplementaireProductenHistories = null;

            $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking = null;

            $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg = null;

            $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 = null;

            $this->collGsAanvullendeMedicatiebewakingsgegevenss = null;

            $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen = null;

            $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte = null;

            $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte = null;

            $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte = null;

            $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode = null;

            $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode = null;

            $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode = null;

            $this->collGsBijzondereKenmerkens = null;

            $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid = null;

            $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg = null;

            $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel = null;

            $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid = null;

            $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode = null;

            $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode = null;

            $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid = null;

            $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking = null;

            $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode = null;

            $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode = null;

            $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode = null;

            $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode = null;

            $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode = null;

            $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode = null;

            $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode = null;

            $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking = null;

            $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 = null;

            $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode = null;

            $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode = null;

            $this->collGsNawGegevensGstandaards = null;

            $this->collGsPreferentieBeleids = null;

            $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering = null;

            $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag = null;

            $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron = null;

            $this->collGsRelatieOngewensteGroepensnks = null;

            $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau = null;

            $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype = null;

            $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct = null;

            $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard = null;

            $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend = null;

            $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk = null;

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
            $con = Propel::getConnection(GsThesauriTotaalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GsThesauriTotaalQuery::create()
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
            $con = Propel::getConnection(GsThesauriTotaalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GsThesauriTotaalPeer::addInstanceToPool($this);
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

            if ($this->gsSupplementaireProductenHistoriesScheduledForDeletion !== null) {
                if (!$this->gsSupplementaireProductenHistoriesScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsSupplementaireProductenHistoriesScheduledForDeletion as $gsSupplementaireProductenHistorie) {
                        // need to save related object because we set the relation to null
                        $gsSupplementaireProductenHistorie->save($con);
                    }
                    $this->gsSupplementaireProductenHistoriesScheduledForDeletion = null;
                }
            }

            if ($this->collGsSupplementaireProductenHistories !== null) {
                foreach ($this->collGsSupplementaireProductenHistories as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion !== null) {
                if (!$this->gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion as $gsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking) {
                        // need to save related object because we set the relation to null
                        $gsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking->save($con);
                    }
                    $this->gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion = null;
                }
            }

            if ($this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking !== null) {
                foreach ($this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgScheduledForDeletion !== null) {
                if (!$this->gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgScheduledForDeletion as $gsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg) {
                        // need to save related object because we set the relation to null
                        $gsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg->save($con);
                    }
                    $this->gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgScheduledForDeletion = null;
                }
            }

            if ($this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg !== null) {
                foreach ($this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion !== null) {
                if (!$this->gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion as $gsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2) {
                        // need to save related object because we set the relation to null
                        $gsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->save($con);
                    }
                    $this->gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion = null;
                }
            }

            if ($this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 !== null) {
                foreach ($this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsAanvullendeMedicatiebewakingsgegevenssScheduledForDeletion !== null) {
                if (!$this->gsAanvullendeMedicatiebewakingsgegevenssScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsAanvullendeMedicatiebewakingsgegevenssScheduledForDeletion as $gsAanvullendeMedicatiebewakingsgegevens) {
                        // need to save related object because we set the relation to null
                        $gsAanvullendeMedicatiebewakingsgegevens->save($con);
                    }
                    $this->gsAanvullendeMedicatiebewakingsgegevenssScheduledForDeletion = null;
                }
            }

            if ($this->collGsAanvullendeMedicatiebewakingsgegevenss !== null) {
                foreach ($this->collGsAanvullendeMedicatiebewakingsgegevenss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenScheduledForDeletion !== null) {
                if (!$this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenScheduledForDeletion as $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen) {
                        // need to save related object because we set the relation to null
                        $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen->save($con);
                    }
                    $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenScheduledForDeletion = null;
                }
            }

            if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen !== null) {
                foreach ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteScheduledForDeletion !== null) {
                if (!$this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteScheduledForDeletion as $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte) {
                        // need to save related object because we set the relation to null
                        $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte->save($con);
                    }
                    $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteScheduledForDeletion = null;
                }
            }

            if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte !== null) {
                foreach ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteScheduledForDeletion !== null) {
                if (!$this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteScheduledForDeletion as $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte) {
                        // need to save related object because we set the relation to null
                        $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte->save($con);
                    }
                    $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteScheduledForDeletion = null;
                }
            }

            if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte !== null) {
                foreach ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteScheduledForDeletion !== null) {
                if (!$this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteScheduledForDeletion as $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte) {
                        // need to save related object because we set the relation to null
                        $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte->save($con);
                    }
                    $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteScheduledForDeletion = null;
                }
            }

            if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte !== null) {
                foreach ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeScheduledForDeletion !== null) {
                if (!$this->gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeScheduledForDeletion as $gsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode) {
                        // need to save related object because we set the relation to null
                        $gsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode->save($con);
                    }
                    $this->gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeScheduledForDeletion = null;
                }
            }

            if ($this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode !== null) {
                foreach ($this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeScheduledForDeletion !== null) {
                if (!$this->gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeScheduledForDeletion as $gsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode) {
                        // need to save related object because we set the relation to null
                        $gsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode->save($con);
                    }
                    $this->gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeScheduledForDeletion = null;
                }
            }

            if ($this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode !== null) {
                foreach ($this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeScheduledForDeletion !== null) {
                if (!$this->gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeScheduledForDeletion as $gsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode) {
                        // need to save related object because we set the relation to null
                        $gsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode->save($con);
                    }
                    $this->gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeScheduledForDeletion = null;
                }
            }

            if ($this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode !== null) {
                foreach ($this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsBijzondereKenmerkensScheduledForDeletion !== null) {
                if (!$this->gsBijzondereKenmerkensScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsBijzondereKenmerkensScheduledForDeletion as $gsBijzondereKenmerken) {
                        // need to save related object because we set the relation to null
                        $gsBijzondereKenmerken->save($con);
                    }
                    $this->gsBijzondereKenmerkensScheduledForDeletion = null;
                }
            }

            if ($this->collGsBijzondereKenmerkens !== null) {
                foreach ($this->collGsBijzondereKenmerkens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidScheduledForDeletion !== null) {
                if (!$this->gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidScheduledForDeletion as $gsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid) {
                        // need to save related object because we set the relation to null
                        $gsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid->save($con);
                    }
                    $this->gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidScheduledForDeletion = null;
                }
            }

            if ($this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid !== null) {
                foreach ($this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegScheduledForDeletion !== null) {
                if (!$this->gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegScheduledForDeletion as $gsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg) {
                        // need to save related object because we set the relation to null
                        $gsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg->save($con);
                    }
                    $this->gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegScheduledForDeletion = null;
                }
            }

            if ($this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg !== null) {
                foreach ($this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelScheduledForDeletion !== null) {
                if (!$this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelScheduledForDeletion as $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel) {
                        // need to save related object because we set the relation to null
                        $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel->save($con);
                    }
                    $this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelScheduledForDeletion = null;
                }
            }

            if ($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel !== null) {
                foreach ($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidScheduledForDeletion !== null) {
                if (!$this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidScheduledForDeletion as $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid) {
                        // need to save related object because we set the relation to null
                        $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid->save($con);
                    }
                    $this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidScheduledForDeletion = null;
                }
            }

            if ($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid !== null) {
                foreach ($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeScheduledForDeletion !== null) {
                if (!$this->gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeScheduledForDeletion as $gsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode) {
                        // need to save related object because we set the relation to null
                        $gsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode->save($con);
                    }
                    $this->gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeScheduledForDeletion = null;
                }
            }

            if ($this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode !== null) {
                foreach ($this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeScheduledForDeletion !== null) {
                if (!$this->gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeScheduledForDeletion as $gsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode) {
                        // need to save related object because we set the relation to null
                        $gsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode->save($con);
                    }
                    $this->gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeScheduledForDeletion = null;
                }
            }

            if ($this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode !== null) {
                foreach ($this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidScheduledForDeletion !== null) {
                if (!$this->gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidScheduledForDeletion as $gsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid) {
                        // need to save related object because we set the relation to null
                        $gsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid->save($con);
                    }
                    $this->gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidScheduledForDeletion = null;
                }
            }

            if ($this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid !== null) {
                foreach ($this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingScheduledForDeletion !== null) {
                if (!$this->gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingScheduledForDeletion as $gsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking) {
                        // need to save related object because we set the relation to null
                        $gsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking->save($con);
                    }
                    $this->gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingScheduledForDeletion = null;
                }
            }

            if ($this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking !== null) {
                foreach ($this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeScheduledForDeletion !== null) {
                if (!$this->gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeScheduledForDeletion as $gsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode) {
                        // need to save related object because we set the relation to null
                        $gsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode->save($con);
                    }
                    $this->gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeScheduledForDeletion = null;
                }
            }

            if ($this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode !== null) {
                foreach ($this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeScheduledForDeletion !== null) {
                if (!$this->gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeScheduledForDeletion as $gsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode) {
                        // need to save related object because we set the relation to null
                        $gsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode->save($con);
                    }
                    $this->gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeScheduledForDeletion = null;
                }
            }

            if ($this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode !== null) {
                foreach ($this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeScheduledForDeletion !== null) {
                if (!$this->gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeScheduledForDeletion as $gsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode) {
                        // need to save related object because we set the relation to null
                        $gsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode->save($con);
                    }
                    $this->gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeScheduledForDeletion = null;
                }
            }

            if ($this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode !== null) {
                foreach ($this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeScheduledForDeletion !== null) {
                if (!$this->gsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeScheduledForDeletion as $gsHandelsproductenRelatedByKleurThesaurusnummerKleurKode) {
                        // need to save related object because we set the relation to null
                        $gsHandelsproductenRelatedByKleurThesaurusnummerKleurKode->save($con);
                    }
                    $this->gsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeScheduledForDeletion = null;
                }
            }

            if ($this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode !== null) {
                foreach ($this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeScheduledForDeletion !== null) {
                if (!$this->gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeScheduledForDeletion as $gsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode) {
                        // need to save related object because we set the relation to null
                        $gsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode->save($con);
                    }
                    $this->gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeScheduledForDeletion = null;
                }
            }

            if ($this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode !== null) {
                foreach ($this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeScheduledForDeletion !== null) {
                if (!$this->gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeScheduledForDeletion as $gsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode) {
                        // need to save related object because we set the relation to null
                        $gsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode->save($con);
                    }
                    $this->gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeScheduledForDeletion = null;
                }
            }

            if ($this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode !== null) {
                foreach ($this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeScheduledForDeletion !== null) {
                if (!$this->gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeScheduledForDeletion as $gsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode) {
                        // need to save related object because we set the relation to null
                        $gsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode->save($con);
                    }
                    $this->gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeScheduledForDeletion = null;
                }
            }

            if ($this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode !== null) {
                foreach ($this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion !== null) {
                if (!$this->gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion as $gsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking) {
                        // need to save related object because we set the relation to null
                        $gsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking->save($con);
                    }
                    $this->gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion = null;
                }
            }

            if ($this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking !== null) {
                foreach ($this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion !== null) {
                if (!$this->gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion as $gsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2) {
                        // need to save related object because we set the relation to null
                        $gsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->save($con);
                    }
                    $this->gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion = null;
                }
            }

            if ($this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 !== null) {
                foreach ($this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeScheduledForDeletion !== null) {
                if (!$this->gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeScheduledForDeletion as $gsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode) {
                        // need to save related object because we set the relation to null
                        $gsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode->save($con);
                    }
                    $this->gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeScheduledForDeletion = null;
                }
            }

            if ($this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode !== null) {
                foreach ($this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeScheduledForDeletion !== null) {
                if (!$this->gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeScheduledForDeletion as $gsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode) {
                        // need to save related object because we set the relation to null
                        $gsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode->save($con);
                    }
                    $this->gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeScheduledForDeletion = null;
                }
            }

            if ($this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode !== null) {
                foreach ($this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsNawGegevensGstandaardsScheduledForDeletion !== null) {
                if (!$this->gsNawGegevensGstandaardsScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsNawGegevensGstandaardsScheduledForDeletion as $gsNawGegevensGstandaard) {
                        // need to save related object because we set the relation to null
                        $gsNawGegevensGstandaard->save($con);
                    }
                    $this->gsNawGegevensGstandaardsScheduledForDeletion = null;
                }
            }

            if ($this->collGsNawGegevensGstandaards !== null) {
                foreach ($this->collGsNawGegevensGstandaards as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsPreferentieBeleidsScheduledForDeletion !== null) {
                if (!$this->gsPreferentieBeleidsScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsPreferentieBeleidsScheduledForDeletion as $gsPreferentieBeleid) {
                        // need to save related object because we set the relation to null
                        $gsPreferentieBeleid->save($con);
                    }
                    $this->gsPreferentieBeleidsScheduledForDeletion = null;
                }
            }

            if ($this->collGsPreferentieBeleids !== null) {
                foreach ($this->collGsPreferentieBeleids as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingScheduledForDeletion !== null) {
                if (!$this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingScheduledForDeletion as $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering) {
                        // need to save related object because we set the relation to null
                        $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering->save($con);
                    }
                    $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingScheduledForDeletion = null;
                }
            }

            if ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering !== null) {
                foreach ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragScheduledForDeletion !== null) {
                if (!$this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragScheduledForDeletion as $gsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag) {
                        // need to save related object because we set the relation to null
                        $gsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag->save($con);
                    }
                    $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragScheduledForDeletion = null;
                }
            }

            if ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag !== null) {
                foreach ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronScheduledForDeletion !== null) {
                if (!$this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronScheduledForDeletion as $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron) {
                        // need to save related object because we set the relation to null
                        $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron->save($con);
                    }
                    $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronScheduledForDeletion = null;
                }
            }

            if ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron !== null) {
                foreach ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsRelatieOngewensteGroepensnksScheduledForDeletion !== null) {
                if (!$this->gsRelatieOngewensteGroepensnksScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsRelatieOngewensteGroepensnksScheduledForDeletion as $gsRelatieOngewensteGroepensnk) {
                        // need to save related object because we set the relation to null
                        $gsRelatieOngewensteGroepensnk->save($con);
                    }
                    $this->gsRelatieOngewensteGroepensnksScheduledForDeletion = null;
                }
            }

            if ($this->collGsRelatieOngewensteGroepensnks !== null) {
                foreach ($this->collGsRelatieOngewensteGroepensnks as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauScheduledForDeletion !== null) {
                if (!$this->gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauScheduledForDeletion as $gsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau) {
                        // need to save related object because we set the relation to null
                        $gsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau->save($con);
                    }
                    $this->gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauScheduledForDeletion = null;
                }
            }

            if ($this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau !== null) {
                foreach ($this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeScheduledForDeletion !== null) {
                if (!$this->gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeScheduledForDeletion as $gsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype) {
                        // need to save related object because we set the relation to null
                        $gsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype->save($con);
                    }
                    $this->gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeScheduledForDeletion = null;
                }
            }

            if ($this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype !== null) {
                foreach ($this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductScheduledForDeletion !== null) {
                if (!$this->gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductScheduledForDeletion as $gsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct) {
                        // need to save related object because we set the relation to null
                        $gsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct->save($con);
                    }
                    $this->gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductScheduledForDeletion = null;
                }
            }

            if ($this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct !== null) {
                foreach ($this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardScheduledForDeletion !== null) {
                if (!$this->gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardScheduledForDeletion as $gsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard) {
                        // need to save related object because we set the relation to null
                        $gsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard->save($con);
                    }
                    $this->gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardScheduledForDeletion = null;
                }
            }

            if ($this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard !== null) {
                foreach ($this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendScheduledForDeletion !== null) {
                if (!$this->gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendScheduledForDeletion as $gsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend) {
                        // need to save related object because we set the relation to null
                        $gsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend->save($con);
                    }
                    $this->gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendScheduledForDeletion = null;
                }
            }

            if ($this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend !== null) {
                foreach ($this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkScheduledForDeletion !== null) {
                if (!$this->gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkScheduledForDeletion->isEmpty()) {
                    foreach ($this->gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkScheduledForDeletion as $gsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk) {
                        // need to save related object because we set the relation to null
                        $gsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk->save($con);
                    }
                    $this->gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkScheduledForDeletion = null;
                }
            }

            if ($this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk !== null) {
                foreach ($this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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
        if ($this->isColumnModified(GsThesauriTotaalPeer::BESTANDNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`bestandnummer`';
        }
        if ($this->isColumnModified(GsThesauriTotaalPeer::MUTATIEKODE)) {
            $modifiedColumns[':p' . $index++]  = '`mutatiekode`';
        }
        if ($this->isColumnModified(GsThesauriTotaalPeer::THESAURUSNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurusnummer`';
        }
        if ($this->isColumnModified(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER)) {
            $modifiedColumns[':p' . $index++]  = '`thesaurus_itemnummer`';
        }
        if ($this->isColumnModified(GsThesauriTotaalPeer::MEMOKODE_ITEM)) {
            $modifiedColumns[':p' . $index++]  = '`memokode_item`';
        }
        if ($this->isColumnModified(GsThesauriTotaalPeer::NAAM_ITEM_4_POSITIES)) {
            $modifiedColumns[':p' . $index++]  = '`naam_item_4_posities`';
        }
        if ($this->isColumnModified(GsThesauriTotaalPeer::NAAM_ITEM_15_POSITIES)) {
            $modifiedColumns[':p' . $index++]  = '`naam_item_15_posities`';
        }
        if ($this->isColumnModified(GsThesauriTotaalPeer::NAAM_ITEM_25_POSITIES)) {
            $modifiedColumns[':p' . $index++]  = '`naam_item_25_posities`';
        }
        if ($this->isColumnModified(GsThesauriTotaalPeer::NAAM_ITEM_50_POSITIES)) {
            $modifiedColumns[':p' . $index++]  = '`naam_item_50_posities`';
        }
        if ($this->isColumnModified(GsThesauriTotaalPeer::AANVULLENDE_KODE_1)) {
            $modifiedColumns[':p' . $index++]  = '`aanvullende_kode_1`';
        }
        if ($this->isColumnModified(GsThesauriTotaalPeer::AANVULLENDE_KODE_2)) {
            $modifiedColumns[':p' . $index++]  = '`aanvullende_kode_2`';
        }
        if ($this->isColumnModified(GsThesauriTotaalPeer::AANVULLENDE_KODE_3)) {
            $modifiedColumns[':p' . $index++]  = '`aanvullende_kode_3`';
        }
        if ($this->isColumnModified(GsThesauriTotaalPeer::AANVULLENDE_KODE_4)) {
            $modifiedColumns[':p' . $index++]  = '`aanvullende_kode_4`';
        }
        if ($this->isColumnModified(GsThesauriTotaalPeer::AANVULLENDE_KODE_5)) {
            $modifiedColumns[':p' . $index++]  = '`aanvullende_kode_5`';
        }
        if ($this->isColumnModified(GsThesauriTotaalPeer::AANVULLENDE_KODE_6)) {
            $modifiedColumns[':p' . $index++]  = '`aanvullende_kode_6`';
        }

        $sql = sprintf(
            'INSERT INTO `gs_thesauri_totaal` (%s) VALUES (%s)',
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
                    case '`thesaurusnummer`':
                        $stmt->bindValue($identifier, $this->thesaurusnummer, PDO::PARAM_INT);
                        break;
                    case '`thesaurus_itemnummer`':
                        $stmt->bindValue($identifier, $this->thesaurus_itemnummer, PDO::PARAM_INT);
                        break;
                    case '`memokode_item`':
                        $stmt->bindValue($identifier, $this->memokode_item, PDO::PARAM_STR);
                        break;
                    case '`naam_item_4_posities`':
                        $stmt->bindValue($identifier, $this->naam_item_4_posities, PDO::PARAM_STR);
                        break;
                    case '`naam_item_15_posities`':
                        $stmt->bindValue($identifier, $this->naam_item_15_posities, PDO::PARAM_STR);
                        break;
                    case '`naam_item_25_posities`':
                        $stmt->bindValue($identifier, $this->naam_item_25_posities, PDO::PARAM_STR);
                        break;
                    case '`naam_item_50_posities`':
                        $stmt->bindValue($identifier, $this->naam_item_50_posities, PDO::PARAM_STR);
                        break;
                    case '`aanvullende_kode_1`':
                        $stmt->bindValue($identifier, $this->aanvullende_kode_1, PDO::PARAM_STR);
                        break;
                    case '`aanvullende_kode_2`':
                        $stmt->bindValue($identifier, $this->aanvullende_kode_2, PDO::PARAM_STR);
                        break;
                    case '`aanvullende_kode_3`':
                        $stmt->bindValue($identifier, $this->aanvullende_kode_3, PDO::PARAM_STR);
                        break;
                    case '`aanvullende_kode_4`':
                        $stmt->bindValue($identifier, $this->aanvullende_kode_4, PDO::PARAM_STR);
                        break;
                    case '`aanvullende_kode_5`':
                        $stmt->bindValue($identifier, $this->aanvullende_kode_5, PDO::PARAM_STR);
                        break;
                    case '`aanvullende_kode_6`':
                        $stmt->bindValue($identifier, $this->aanvullende_kode_6, PDO::PARAM_STR);
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


            if (($retval = GsThesauriTotaalPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collGsSupplementaireProductenHistories !== null) {
                    foreach ($this->collGsSupplementaireProductenHistories as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking !== null) {
                    foreach ($this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg !== null) {
                    foreach ($this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 !== null) {
                    foreach ($this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsAanvullendeMedicatiebewakingsgegevenss !== null) {
                    foreach ($this->collGsAanvullendeMedicatiebewakingsgegevenss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen !== null) {
                    foreach ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte !== null) {
                    foreach ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte !== null) {
                    foreach ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte !== null) {
                    foreach ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode !== null) {
                    foreach ($this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode !== null) {
                    foreach ($this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode !== null) {
                    foreach ($this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsBijzondereKenmerkens !== null) {
                    foreach ($this->collGsBijzondereKenmerkens as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid !== null) {
                    foreach ($this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg !== null) {
                    foreach ($this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel !== null) {
                    foreach ($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid !== null) {
                    foreach ($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode !== null) {
                    foreach ($this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode !== null) {
                    foreach ($this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid !== null) {
                    foreach ($this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking !== null) {
                    foreach ($this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode !== null) {
                    foreach ($this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode !== null) {
                    foreach ($this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode !== null) {
                    foreach ($this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode !== null) {
                    foreach ($this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode !== null) {
                    foreach ($this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode !== null) {
                    foreach ($this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode !== null) {
                    foreach ($this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking !== null) {
                    foreach ($this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 !== null) {
                    foreach ($this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode !== null) {
                    foreach ($this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode !== null) {
                    foreach ($this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsNawGegevensGstandaards !== null) {
                    foreach ($this->collGsNawGegevensGstandaards as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsPreferentieBeleids !== null) {
                    foreach ($this->collGsPreferentieBeleids as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering !== null) {
                    foreach ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag !== null) {
                    foreach ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron !== null) {
                    foreach ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsRelatieOngewensteGroepensnks !== null) {
                    foreach ($this->collGsRelatieOngewensteGroepensnks as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau !== null) {
                    foreach ($this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype !== null) {
                    foreach ($this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct !== null) {
                    foreach ($this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard !== null) {
                    foreach ($this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend !== null) {
                    foreach ($this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk !== null) {
                    foreach ($this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = GsThesauriTotaalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getThesaurusnummer();
                break;
            case 3:
                return $this->getThesaurusItemnummer();
                break;
            case 4:
                return $this->getMemokodeItem();
                break;
            case 5:
                return $this->getNaamItem4Posities();
                break;
            case 6:
                return $this->getNaamItem15Posities();
                break;
            case 7:
                return $this->getNaamItem25Posities();
                break;
            case 8:
                return $this->getNaamItem50Posities();
                break;
            case 9:
                return $this->getAanvullendeKode1();
                break;
            case 10:
                return $this->getAanvullendeKode2();
                break;
            case 11:
                return $this->getAanvullendeKode3();
                break;
            case 12:
                return $this->getAanvullendeKode4();
                break;
            case 13:
                return $this->getAanvullendeKode5();
                break;
            case 14:
                return $this->getAanvullendeKode6();
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
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['GsThesauriTotaal'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GsThesauriTotaal'][serialize($this->getPrimaryKey())] = true;
        $keys = GsThesauriTotaalPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getBestandnummer(),
            $keys[1] => $this->getMutatiekode(),
            $keys[2] => $this->getThesaurusnummer(),
            $keys[3] => $this->getThesaurusItemnummer(),
            $keys[4] => $this->getMemokodeItem(),
            $keys[5] => $this->getNaamItem4Posities(),
            $keys[6] => $this->getNaamItem15Posities(),
            $keys[7] => $this->getNaamItem25Posities(),
            $keys[8] => $this->getNaamItem50Posities(),
            $keys[9] => $this->getAanvullendeKode1(),
            $keys[10] => $this->getAanvullendeKode2(),
            $keys[11] => $this->getAanvullendeKode3(),
            $keys[12] => $this->getAanvullendeKode4(),
            $keys[13] => $this->getAanvullendeKode5(),
            $keys[14] => $this->getAanvullendeKode6(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collGsSupplementaireProductenHistories) {
                $result['GsSupplementaireProductenHistories'] = $this->collGsSupplementaireProductenHistories->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking) {
                $result['GsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking'] = $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg) {
                $result['GsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg'] = $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2) {
                $result['GsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2'] = $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsAanvullendeMedicatiebewakingsgegevenss) {
                $result['GsAanvullendeMedicatiebewakingsgegevenss'] = $this->collGsAanvullendeMedicatiebewakingsgegevenss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen) {
                $result['GsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen'] = $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte) {
                $result['GsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte'] = $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte) {
                $result['GsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte'] = $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte) {
                $result['GsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte'] = $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode) {
                $result['GsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode'] = $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode) {
                $result['GsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode'] = $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode) {
                $result['GsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode'] = $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsBijzondereKenmerkens) {
                $result['GsBijzondereKenmerkens'] = $this->collGsBijzondereKenmerkens->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid) {
                $result['GsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid'] = $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg) {
                $result['GsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg'] = $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel) {
                $result['GsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel'] = $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid) {
                $result['GsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid'] = $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode) {
                $result['GsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode'] = $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode) {
                $result['GsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode'] = $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid) {
                $result['GsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid'] = $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking) {
                $result['GsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking'] = $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode) {
                $result['GsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode'] = $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode) {
                $result['GsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode'] = $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode) {
                $result['GsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode'] = $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode) {
                $result['GsHandelsproductensRelatedByKleurThesaurusnummerKleurKode'] = $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode) {
                $result['GsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode'] = $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode) {
                $result['GsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode'] = $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode) {
                $result['GsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode'] = $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking) {
                $result['GsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking'] = $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2) {
                $result['GsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2'] = $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode) {
                $result['GsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode'] = $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode) {
                $result['GsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode'] = $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsNawGegevensGstandaards) {
                $result['GsNawGegevensGstandaards'] = $this->collGsNawGegevensGstandaards->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsPreferentieBeleids) {
                $result['GsPreferentieBeleids'] = $this->collGsPreferentieBeleids->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering) {
                $result['GsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering'] = $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag) {
                $result['GsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag'] = $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron) {
                $result['GsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron'] = $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsRelatieOngewensteGroepensnks) {
                $result['GsRelatieOngewensteGroepensnks'] = $this->collGsRelatieOngewensteGroepensnks->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau) {
                $result['GsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau'] = $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype) {
                $result['GsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype'] = $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct) {
                $result['GsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct'] = $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard) {
                $result['GsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard'] = $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend) {
                $result['GsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend'] = $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk) {
                $result['GsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk'] = $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
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
        $pos = GsThesauriTotaalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setThesaurusnummer($value);
                break;
            case 3:
                $this->setThesaurusItemnummer($value);
                break;
            case 4:
                $this->setMemokodeItem($value);
                break;
            case 5:
                $this->setNaamItem4Posities($value);
                break;
            case 6:
                $this->setNaamItem15Posities($value);
                break;
            case 7:
                $this->setNaamItem25Posities($value);
                break;
            case 8:
                $this->setNaamItem50Posities($value);
                break;
            case 9:
                $this->setAanvullendeKode1($value);
                break;
            case 10:
                $this->setAanvullendeKode2($value);
                break;
            case 11:
                $this->setAanvullendeKode3($value);
                break;
            case 12:
                $this->setAanvullendeKode4($value);
                break;
            case 13:
                $this->setAanvullendeKode5($value);
                break;
            case 14:
                $this->setAanvullendeKode6($value);
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
        $keys = GsThesauriTotaalPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setBestandnummer($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMutatiekode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setThesaurusnummer($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setThesaurusItemnummer($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMemokodeItem($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNaamItem4Posities($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setNaamItem15Posities($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNaamItem25Posities($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNaamItem50Posities($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAanvullendeKode1($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAanvullendeKode2($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAanvullendeKode3($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAanvullendeKode4($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAanvullendeKode5($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setAanvullendeKode6($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GsThesauriTotaalPeer::DATABASE_NAME);

        if ($this->isColumnModified(GsThesauriTotaalPeer::BESTANDNUMMER)) $criteria->add(GsThesauriTotaalPeer::BESTANDNUMMER, $this->bestandnummer);
        if ($this->isColumnModified(GsThesauriTotaalPeer::MUTATIEKODE)) $criteria->add(GsThesauriTotaalPeer::MUTATIEKODE, $this->mutatiekode);
        if ($this->isColumnModified(GsThesauriTotaalPeer::THESAURUSNUMMER)) $criteria->add(GsThesauriTotaalPeer::THESAURUSNUMMER, $this->thesaurusnummer);
        if ($this->isColumnModified(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER)) $criteria->add(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $this->thesaurus_itemnummer);
        if ($this->isColumnModified(GsThesauriTotaalPeer::MEMOKODE_ITEM)) $criteria->add(GsThesauriTotaalPeer::MEMOKODE_ITEM, $this->memokode_item);
        if ($this->isColumnModified(GsThesauriTotaalPeer::NAAM_ITEM_4_POSITIES)) $criteria->add(GsThesauriTotaalPeer::NAAM_ITEM_4_POSITIES, $this->naam_item_4_posities);
        if ($this->isColumnModified(GsThesauriTotaalPeer::NAAM_ITEM_15_POSITIES)) $criteria->add(GsThesauriTotaalPeer::NAAM_ITEM_15_POSITIES, $this->naam_item_15_posities);
        if ($this->isColumnModified(GsThesauriTotaalPeer::NAAM_ITEM_25_POSITIES)) $criteria->add(GsThesauriTotaalPeer::NAAM_ITEM_25_POSITIES, $this->naam_item_25_posities);
        if ($this->isColumnModified(GsThesauriTotaalPeer::NAAM_ITEM_50_POSITIES)) $criteria->add(GsThesauriTotaalPeer::NAAM_ITEM_50_POSITIES, $this->naam_item_50_posities);
        if ($this->isColumnModified(GsThesauriTotaalPeer::AANVULLENDE_KODE_1)) $criteria->add(GsThesauriTotaalPeer::AANVULLENDE_KODE_1, $this->aanvullende_kode_1);
        if ($this->isColumnModified(GsThesauriTotaalPeer::AANVULLENDE_KODE_2)) $criteria->add(GsThesauriTotaalPeer::AANVULLENDE_KODE_2, $this->aanvullende_kode_2);
        if ($this->isColumnModified(GsThesauriTotaalPeer::AANVULLENDE_KODE_3)) $criteria->add(GsThesauriTotaalPeer::AANVULLENDE_KODE_3, $this->aanvullende_kode_3);
        if ($this->isColumnModified(GsThesauriTotaalPeer::AANVULLENDE_KODE_4)) $criteria->add(GsThesauriTotaalPeer::AANVULLENDE_KODE_4, $this->aanvullende_kode_4);
        if ($this->isColumnModified(GsThesauriTotaalPeer::AANVULLENDE_KODE_5)) $criteria->add(GsThesauriTotaalPeer::AANVULLENDE_KODE_5, $this->aanvullende_kode_5);
        if ($this->isColumnModified(GsThesauriTotaalPeer::AANVULLENDE_KODE_6)) $criteria->add(GsThesauriTotaalPeer::AANVULLENDE_KODE_6, $this->aanvullende_kode_6);

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
        $criteria = new Criteria(GsThesauriTotaalPeer::DATABASE_NAME);
        $criteria->add(GsThesauriTotaalPeer::THESAURUSNUMMER, $this->thesaurusnummer);
        $criteria->add(GsThesauriTotaalPeer::THESAURUS_ITEMNUMMER, $this->thesaurus_itemnummer);

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
        $pks[0] = $this->getThesaurusnummer();
        $pks[1] = $this->getThesaurusItemnummer();

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
        $this->setThesaurusnummer($keys[0]);
        $this->setThesaurusItemnummer($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getThesaurusnummer()) && (null === $this->getThesaurusItemnummer());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GsThesauriTotaal (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setBestandnummer($this->getBestandnummer());
        $copyObj->setMutatiekode($this->getMutatiekode());
        $copyObj->setThesaurusnummer($this->getThesaurusnummer());
        $copyObj->setThesaurusItemnummer($this->getThesaurusItemnummer());
        $copyObj->setMemokodeItem($this->getMemokodeItem());
        $copyObj->setNaamItem4Posities($this->getNaamItem4Posities());
        $copyObj->setNaamItem15Posities($this->getNaamItem15Posities());
        $copyObj->setNaamItem25Posities($this->getNaamItem25Posities());
        $copyObj->setNaamItem50Posities($this->getNaamItem50Posities());
        $copyObj->setAanvullendeKode1($this->getAanvullendeKode1());
        $copyObj->setAanvullendeKode2($this->getAanvullendeKode2());
        $copyObj->setAanvullendeKode3($this->getAanvullendeKode3());
        $copyObj->setAanvullendeKode4($this->getAanvullendeKode4());
        $copyObj->setAanvullendeKode5($this->getAanvullendeKode5());
        $copyObj->setAanvullendeKode6($this->getAanvullendeKode6());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getGsSupplementaireProductenHistories() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsSupplementaireProductenHistorie($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsAanvullendeMedicatiebewakingsgegevenss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsAanvullendeMedicatiebewakingsgegevens($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsBijzondereKenmerkens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsBijzondereKenmerken($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsHandelsproductenRelatedByKleurThesaurusnummerKleurKode($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsNawGegevensGstandaards() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsNawGegevensGstandaard($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsPreferentieBeleids() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsPreferentieBeleid($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsRelatieOngewensteGroepensnks() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsRelatieOngewensteGroepensnk($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addGsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

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
     * @return GsThesauriTotaal Clone of current object.
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
     * @return GsThesauriTotaalPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GsThesauriTotaalPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('GsSupplementaireProductenHistorie' == $relationName) {
            $this->initGsSupplementaireProductenHistories();
        }
        if ('GsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking' == $relationName) {
            $this->initGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking();
        }
        if ('GsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg' == $relationName) {
            $this->initGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg();
        }
        if ('GsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2' == $relationName) {
            $this->initGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2();
        }
        if ('GsAanvullendeMedicatiebewakingsgegevens' == $relationName) {
            $this->initGsAanvullendeMedicatiebewakingsgegevenss();
        }
        if ('GsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen' == $relationName) {
            $this->initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen();
        }
        if ('GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte' == $relationName) {
            $this->initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte();
        }
        if ('GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte' == $relationName) {
            $this->initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte();
        }
        if ('GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte' == $relationName) {
            $this->initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte();
        }
        if ('GsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode' == $relationName) {
            $this->initGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode();
        }
        if ('GsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode' == $relationName) {
            $this->initGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode();
        }
        if ('GsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode' == $relationName) {
            $this->initGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode();
        }
        if ('GsBijzondereKenmerken' == $relationName) {
            $this->initGsBijzondereKenmerkens();
        }
        if ('GsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid' == $relationName) {
            $this->initGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid();
        }
        if ('GsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg' == $relationName) {
            $this->initGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg();
        }
        if ('GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel' == $relationName) {
            $this->initGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel();
        }
        if ('GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid' == $relationName) {
            $this->initGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid();
        }
        if ('GsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode' == $relationName) {
            $this->initGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode();
        }
        if ('GsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode' == $relationName) {
            $this->initGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode();
        }
        if ('GsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid' == $relationName) {
            $this->initGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid();
        }
        if ('GsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking' == $relationName) {
            $this->initGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking();
        }
        if ('GsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode' == $relationName) {
            $this->initGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode();
        }
        if ('GsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode' == $relationName) {
            $this->initGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode();
        }
        if ('GsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode' == $relationName) {
            $this->initGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode();
        }
        if ('GsHandelsproductenRelatedByKleurThesaurusnummerKleurKode' == $relationName) {
            $this->initGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode();
        }
        if ('GsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode' == $relationName) {
            $this->initGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode();
        }
        if ('GsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode' == $relationName) {
            $this->initGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode();
        }
        if ('GsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode' == $relationName) {
            $this->initGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode();
        }
        if ('GsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking' == $relationName) {
            $this->initGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking();
        }
        if ('GsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2' == $relationName) {
            $this->initGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2();
        }
        if ('GsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode' == $relationName) {
            $this->initGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode();
        }
        if ('GsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode' == $relationName) {
            $this->initGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode();
        }
        if ('GsNawGegevensGstandaard' == $relationName) {
            $this->initGsNawGegevensGstandaards();
        }
        if ('GsPreferentieBeleid' == $relationName) {
            $this->initGsPreferentieBeleids();
        }
        if ('GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering' == $relationName) {
            $this->initGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering();
        }
        if ('GsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag' == $relationName) {
            $this->initGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag();
        }
        if ('GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron' == $relationName) {
            $this->initGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron();
        }
        if ('GsRelatieOngewensteGroepensnk' == $relationName) {
            $this->initGsRelatieOngewensteGroepensnks();
        }
        if ('GsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau' == $relationName) {
            $this->initGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau();
        }
        if ('GsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype' == $relationName) {
            $this->initGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype();
        }
        if ('GsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct' == $relationName) {
            $this->initGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct();
        }
        if ('GsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard' == $relationName) {
            $this->initGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard();
        }
        if ('GsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend' == $relationName) {
            $this->initGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend();
        }
        if ('GsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk' == $relationName) {
            $this->initGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk();
        }
    }

    /**
     * Clears out the collGsSupplementaireProductenHistories collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsSupplementaireProductenHistories()
     */
    public function clearGsSupplementaireProductenHistories()
    {
        $this->collGsSupplementaireProductenHistories = null; // important to set this to null since that means it is uninitialized
        $this->collGsSupplementaireProductenHistoriesPartial = null;

        return $this;
    }

    /**
     * reset is the collGsSupplementaireProductenHistories collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsSupplementaireProductenHistories($v = true)
    {
        $this->collGsSupplementaireProductenHistoriesPartial = $v;
    }

    /**
     * Initializes the collGsSupplementaireProductenHistories collection.
     *
     * By default this just sets the collGsSupplementaireProductenHistories collection to an empty array (like clearcollGsSupplementaireProductenHistories());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsSupplementaireProductenHistories($overrideExisting = true)
    {
        if (null !== $this->collGsSupplementaireProductenHistories && !$overrideExisting) {
            return;
        }
        $this->collGsSupplementaireProductenHistories = new PropelObjectCollection();
        $this->collGsSupplementaireProductenHistories->setModel('GsSupplementaireProductenHistorie');
    }

    /**
     * Gets an array of GsSupplementaireProductenHistorie objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsSupplementaireProductenHistorie[] List of GsSupplementaireProductenHistorie objects
     * @throws PropelException
     */
    public function getGsSupplementaireProductenHistories($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsSupplementaireProductenHistoriesPartial && !$this->isNew();
        if (null === $this->collGsSupplementaireProductenHistories || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsSupplementaireProductenHistories) {
                // return empty collection
                $this->initGsSupplementaireProductenHistories();
            } else {
                $collGsSupplementaireProductenHistories = GsSupplementaireProductenHistorieQuery::create(null, $criteria)
                    ->filterByGsThesauriTotaal($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsSupplementaireProductenHistoriesPartial && count($collGsSupplementaireProductenHistories)) {
                      $this->initGsSupplementaireProductenHistories(false);

                      foreach ($collGsSupplementaireProductenHistories as $obj) {
                        if (false == $this->collGsSupplementaireProductenHistories->contains($obj)) {
                          $this->collGsSupplementaireProductenHistories->append($obj);
                        }
                      }

                      $this->collGsSupplementaireProductenHistoriesPartial = true;
                    }

                    $collGsSupplementaireProductenHistories->getInternalIterator()->rewind();

                    return $collGsSupplementaireProductenHistories;
                }

                if ($partial && $this->collGsSupplementaireProductenHistories) {
                    foreach ($this->collGsSupplementaireProductenHistories as $obj) {
                        if ($obj->isNew()) {
                            $collGsSupplementaireProductenHistories[] = $obj;
                        }
                    }
                }

                $this->collGsSupplementaireProductenHistories = $collGsSupplementaireProductenHistories;
                $this->collGsSupplementaireProductenHistoriesPartial = false;
            }
        }

        return $this->collGsSupplementaireProductenHistories;
    }

    /**
     * Sets a collection of GsSupplementaireProductenHistorie objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsSupplementaireProductenHistories A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsSupplementaireProductenHistories(PropelCollection $gsSupplementaireProductenHistories, PropelPDO $con = null)
    {
        $gsSupplementaireProductenHistoriesToDelete = $this->getGsSupplementaireProductenHistories(new Criteria(), $con)->diff($gsSupplementaireProductenHistories);


        $this->gsSupplementaireProductenHistoriesScheduledForDeletion = $gsSupplementaireProductenHistoriesToDelete;

        foreach ($gsSupplementaireProductenHistoriesToDelete as $gsSupplementaireProductenHistorieRemoved) {
            $gsSupplementaireProductenHistorieRemoved->setGsThesauriTotaal(null);
        }

        $this->collGsSupplementaireProductenHistories = null;
        foreach ($gsSupplementaireProductenHistories as $gsSupplementaireProductenHistorie) {
            $this->addGsSupplementaireProductenHistorie($gsSupplementaireProductenHistorie);
        }

        $this->collGsSupplementaireProductenHistories = $gsSupplementaireProductenHistories;
        $this->collGsSupplementaireProductenHistoriesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsSupplementaireProductenHistorie objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsSupplementaireProductenHistorie objects.
     * @throws PropelException
     */
    public function countGsSupplementaireProductenHistories(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsSupplementaireProductenHistoriesPartial && !$this->isNew();
        if (null === $this->collGsSupplementaireProductenHistories || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsSupplementaireProductenHistories) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsSupplementaireProductenHistories());
            }
            $query = GsSupplementaireProductenHistorieQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGsThesauriTotaal($this)
                ->count($con);
        }

        return count($this->collGsSupplementaireProductenHistories);
    }

    /**
     * Method called to associate a GsSupplementaireProductenHistorie object to this object
     * through the GsSupplementaireProductenHistorie foreign key attribute.
     *
     * @param    GsSupplementaireProductenHistorie $l GsSupplementaireProductenHistorie
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsSupplementaireProductenHistorie(GsSupplementaireProductenHistorie $l)
    {
        if ($this->collGsSupplementaireProductenHistories === null) {
            $this->initGsSupplementaireProductenHistories();
            $this->collGsSupplementaireProductenHistoriesPartial = true;
        }

        if (!in_array($l, $this->collGsSupplementaireProductenHistories->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsSupplementaireProductenHistorie($l);

            if ($this->gsSupplementaireProductenHistoriesScheduledForDeletion and $this->gsSupplementaireProductenHistoriesScheduledForDeletion->contains($l)) {
                $this->gsSupplementaireProductenHistoriesScheduledForDeletion->remove($this->gsSupplementaireProductenHistoriesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsSupplementaireProductenHistorie $gsSupplementaireProductenHistorie The gsSupplementaireProductenHistorie object to add.
     */
    protected function doAddGsSupplementaireProductenHistorie($gsSupplementaireProductenHistorie)
    {
        $this->collGsSupplementaireProductenHistories[]= $gsSupplementaireProductenHistorie;
        $gsSupplementaireProductenHistorie->setGsThesauriTotaal($this);
    }

    /**
     * @param	GsSupplementaireProductenHistorie $gsSupplementaireProductenHistorie The gsSupplementaireProductenHistorie object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsSupplementaireProductenHistorie($gsSupplementaireProductenHistorie)
    {
        if ($this->getGsSupplementaireProductenHistories()->contains($gsSupplementaireProductenHistorie)) {
            $this->collGsSupplementaireProductenHistories->remove($this->collGsSupplementaireProductenHistories->search($gsSupplementaireProductenHistorie));
            if (null === $this->gsSupplementaireProductenHistoriesScheduledForDeletion) {
                $this->gsSupplementaireProductenHistoriesScheduledForDeletion = clone $this->collGsSupplementaireProductenHistories;
                $this->gsSupplementaireProductenHistoriesScheduledForDeletion->clear();
            }
            $this->gsSupplementaireProductenHistoriesScheduledForDeletion[]= clone $gsSupplementaireProductenHistorie;
            $gsSupplementaireProductenHistorie->setGsThesauriTotaal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsSupplementaireProductenHistories from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsSupplementaireProductenHistorie[] List of GsSupplementaireProductenHistorie objects
     */
    public function getGsSupplementaireProductenHistoriesJoinGsArtikelen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsSupplementaireProductenHistorieQuery::create(null, $criteria);
        $query->joinWith('GsArtikelen', $join_behavior);

        return $this->getGsSupplementaireProductenHistories($query, $con);
    }

    /**
     * Clears out the collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking()
     */
    public function clearGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking()
    {
        $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking = null; // important to set this to null since that means it is uninitialized
        $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial = null;

        return $this;
    }

    /**
     * reset is the collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking($v = true)
    {
        $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial = $v;
    }

    /**
     * Initializes the collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking collection.
     *
     * By default this just sets the collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking collection to an empty array (like clearcollGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking($overrideExisting = true)
    {
        if (null !== $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking && !$overrideExisting) {
            return;
        }
        $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking = new PropelObjectCollection();
        $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking->setModel('GsRzvAanspraak');
    }

    /**
     * Gets an array of GsRzvAanspraak objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsRzvAanspraak[] List of GsRzvAanspraak objects
     * @throws PropelException
     */
    public function getGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial && !$this->isNew();
        if (null === $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking) {
                // return empty collection
                $this->initGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking();
            } else {
                $collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking = GsRzvAanspraakQuery::create(null, $criteria)
                    ->filterByRzvVerstrekkingOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial && count($collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking)) {
                      $this->initGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking(false);

                      foreach ($collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking as $obj) {
                        if (false == $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking->contains($obj)) {
                          $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking->append($obj);
                        }
                      }

                      $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial = true;
                    }

                    $collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking->getInternalIterator()->rewind();

                    return $collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking;
                }

                if ($partial && $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking) {
                    foreach ($this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking as $obj) {
                        if ($obj->isNew()) {
                            $collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking[] = $obj;
                        }
                    }
                }

                $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking = $collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking;
                $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial = false;
            }
        }

        return $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking;
    }

    /**
     * Sets a collection of GsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking(PropelCollection $gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking, PropelPDO $con = null)
    {
        $gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingToDelete = $this->getGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking(new Criteria(), $con)->diff($gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking);


        $this->gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion = $gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingToDelete;

        foreach ($gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingToDelete as $gsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekkingRemoved) {
            $gsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekkingRemoved->setRzvVerstrekkingOmschrijving(null);
        }

        $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking = null;
        foreach ($gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking as $gsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking) {
            $this->addGsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking($gsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking);
        }

        $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking = $gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking;
        $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsRzvAanspraak objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsRzvAanspraak objects.
     * @throws PropelException
     */
    public function countGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial && !$this->isNew();
        if (null === $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking());
            }
            $query = GsRzvAanspraakQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRzvVerstrekkingOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking);
    }

    /**
     * Method called to associate a GsRzvAanspraak object to this object
     * through the GsRzvAanspraak foreign key attribute.
     *
     * @param    GsRzvAanspraak $l GsRzvAanspraak
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking(GsRzvAanspraak $l)
    {
        if ($this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking === null) {
            $this->initGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking();
            $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial = true;
        }

        if (!in_array($l, $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking($l);

            if ($this->gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion and $this->gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion->contains($l)) {
                $this->gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion->remove($this->gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking $gsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking The gsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking object to add.
     */
    protected function doAddGsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking($gsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking)
    {
        $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking[]= $gsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking;
        $gsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking->setRzvVerstrekkingOmschrijving($this);
    }

    /**
     * @param	GsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking $gsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking The gsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking($gsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking)
    {
        if ($this->getGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking()->contains($gsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking)) {
            $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking->remove($this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking->search($gsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking));
            if (null === $this->gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion) {
                $this->gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion = clone $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking;
                $this->gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion->clear();
            }
            $this->gsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion[]= clone $gsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking;
            $gsRzvAanspraakRelatedByThesaurusRzvVerstrekkingRzvverstrekking->setRzvVerstrekkingOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsRzvAanspraak[] List of GsRzvAanspraak objects
     */
    public function getGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingJoinGsArtikelen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsRzvAanspraakQuery::create(null, $criteria);
        $query->joinWith('GsArtikelen', $join_behavior);

        return $this->getGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsRzvAanspraak[] List of GsRzvAanspraak objects
     */
    public function getGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekkingJoinGsArtikelEigenschappen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsRzvAanspraakQuery::create(null, $criteria);
        $query->joinWith('GsArtikelEigenschappen', $join_behavior);

        return $this->getGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking($query, $con);
    }

    /**
     * Clears out the collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg()
     */
    public function clearGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg()
    {
        $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg = null; // important to set this to null since that means it is uninitialized
        $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgPartial = null;

        return $this;
    }

    /**
     * reset is the collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg($v = true)
    {
        $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgPartial = $v;
    }

    /**
     * Initializes the collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg collection.
     *
     * By default this just sets the collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg collection to an empty array (like clearcollGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg($overrideExisting = true)
    {
        if (null !== $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg && !$overrideExisting) {
            return;
        }
        $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg = new PropelObjectCollection();
        $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg->setModel('GsRzvAanspraak');
    }

    /**
     * Gets an array of GsRzvAanspraak objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsRzvAanspraak[] List of GsRzvAanspraak objects
     * @throws PropelException
     */
    public function getGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgPartial && !$this->isNew();
        if (null === $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg) {
                // return empty collection
                $this->initGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg();
            } else {
                $collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg = GsRzvAanspraakQuery::create(null, $criteria)
                    ->filterByRzvHulpmiddelenOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgPartial && count($collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg)) {
                      $this->initGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg(false);

                      foreach ($collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg as $obj) {
                        if (false == $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg->contains($obj)) {
                          $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg->append($obj);
                        }
                      }

                      $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgPartial = true;
                    }

                    $collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg->getInternalIterator()->rewind();

                    return $collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg;
                }

                if ($partial && $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg) {
                    foreach ($this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg as $obj) {
                        if ($obj->isNew()) {
                            $collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg[] = $obj;
                        }
                    }
                }

                $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg = $collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg;
                $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgPartial = false;
            }
        }

        return $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg;
    }

    /**
     * Sets a collection of GsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg(PropelCollection $gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg, PropelPDO $con = null)
    {
        $gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgToDelete = $this->getGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg(new Criteria(), $con)->diff($gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg);


        $this->gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgScheduledForDeletion = $gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgToDelete;

        foreach ($gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgToDelete as $gsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgRemoved) {
            $gsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgRemoved->setRzvHulpmiddelenOmschrijving(null);
        }

        $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg = null;
        foreach ($gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg as $gsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg) {
            $this->addGsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg($gsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg);
        }

        $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg = $gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg;
        $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsRzvAanspraak objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsRzvAanspraak objects.
     * @throws PropelException
     */
    public function countGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgPartial && !$this->isNew();
        if (null === $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg());
            }
            $query = GsRzvAanspraakQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRzvHulpmiddelenOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg);
    }

    /**
     * Method called to associate a GsRzvAanspraak object to this object
     * through the GsRzvAanspraak foreign key attribute.
     *
     * @param    GsRzvAanspraak $l GsRzvAanspraak
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg(GsRzvAanspraak $l)
    {
        if ($this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg === null) {
            $this->initGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg();
            $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgPartial = true;
        }

        if (!in_array($l, $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg($l);

            if ($this->gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgScheduledForDeletion and $this->gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgScheduledForDeletion->contains($l)) {
                $this->gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgScheduledForDeletion->remove($this->gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg $gsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg The gsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg object to add.
     */
    protected function doAddGsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg($gsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg)
    {
        $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg[]= $gsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg;
        $gsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg->setRzvHulpmiddelenOmschrijving($this);
    }

    /**
     * @param	GsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg $gsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg The gsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg($gsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg)
    {
        if ($this->getGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg()->contains($gsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg)) {
            $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg->remove($this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg->search($gsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg));
            if (null === $this->gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgScheduledForDeletion) {
                $this->gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgScheduledForDeletion = clone $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg;
                $this->gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgScheduledForDeletion->clear();
            }
            $this->gsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgScheduledForDeletion[]= clone $gsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg;
            $gsRzvAanspraakRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg->setRzvHulpmiddelenOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsRzvAanspraak[] List of GsRzvAanspraak objects
     */
    public function getGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgJoinGsArtikelen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsRzvAanspraakQuery::create(null, $criteria);
        $query->joinWith('GsArtikelen', $join_behavior);

        return $this->getGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsRzvAanspraak[] List of GsRzvAanspraak objects
     */
    public function getGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorgJoinGsArtikelEigenschappen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsRzvAanspraakQuery::create(null, $criteria);
        $query->joinWith('GsArtikelEigenschappen', $join_behavior);

        return $this->getGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg($query, $con);
    }

    /**
     * Clears out the collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2()
     */
    public function clearGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2()
    {
        $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 = null; // important to set this to null since that means it is uninitialized
        $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial = null;

        return $this;
    }

    /**
     * reset is the collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($v = true)
    {
        $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial = $v;
    }

    /**
     * Initializes the collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 collection.
     *
     * By default this just sets the collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 collection to an empty array (like clearcollGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($overrideExisting = true)
    {
        if (null !== $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 && !$overrideExisting) {
            return;
        }
        $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 = new PropelObjectCollection();
        $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->setModel('GsRzvAanspraak');
    }

    /**
     * Gets an array of GsRzvAanspraak objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsRzvAanspraak[] List of GsRzvAanspraak objects
     * @throws PropelException
     */
    public function getGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial && !$this->isNew();
        if (null === $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2) {
                // return empty collection
                $this->initGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2();
            } else {
                $collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 = GsRzvAanspraakQuery::create(null, $criteria)
                    ->filterByRzvVoorwaardenOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial && count($collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2)) {
                      $this->initGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2(false);

                      foreach ($collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 as $obj) {
                        if (false == $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->contains($obj)) {
                          $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->append($obj);
                        }
                      }

                      $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial = true;
                    }

                    $collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->getInternalIterator()->rewind();

                    return $collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2;
                }

                if ($partial && $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2) {
                    foreach ($this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 as $obj) {
                        if ($obj->isNew()) {
                            $collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2[] = $obj;
                        }
                    }
                }

                $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 = $collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2;
                $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial = false;
            }
        }

        return $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2;
    }

    /**
     * Sets a collection of GsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2(PropelCollection $gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2, PropelPDO $con = null)
    {
        $gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ToDelete = $this->getGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2(new Criteria(), $con)->diff($gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2);


        $this->gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion = $gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ToDelete;

        foreach ($gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ToDelete as $gsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Removed) {
            $gsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Removed->setRzvVoorwaardenOmschrijving(null);
        }

        $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 = null;
        foreach ($gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 as $gsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2) {
            $this->addGsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($gsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2);
        }

        $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 = $gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2;
        $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial = false;

        return $this;
    }

    /**
     * Returns the number of related GsRzvAanspraak objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsRzvAanspraak objects.
     * @throws PropelException
     */
    public function countGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial && !$this->isNew();
        if (null === $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2());
            }
            $query = GsRzvAanspraakQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRzvVoorwaardenOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2);
    }

    /**
     * Method called to associate a GsRzvAanspraak object to this object
     * through the GsRzvAanspraak foreign key attribute.
     *
     * @param    GsRzvAanspraak $l GsRzvAanspraak
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2(GsRzvAanspraak $l)
    {
        if ($this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 === null) {
            $this->initGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2();
            $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial = true;
        }

        if (!in_array($l, $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($l);

            if ($this->gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion and $this->gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion->contains($l)) {
                $this->gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion->remove($this->gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 $gsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 The gsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 object to add.
     */
    protected function doAddGsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($gsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2)
    {
        $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2[]= $gsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2;
        $gsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->setRzvVoorwaardenOmschrijving($this);
    }

    /**
     * @param	GsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 $gsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 The gsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($gsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2)
    {
        if ($this->getGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2()->contains($gsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2)) {
            $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->remove($this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->search($gsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2));
            if (null === $this->gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion) {
                $this->gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion = clone $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2;
                $this->gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion->clear();
            }
            $this->gsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion[]= clone $gsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2;
            $gsRzvAanspraakRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->setRzvVoorwaardenOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsRzvAanspraak[] List of GsRzvAanspraak objects
     */
    public function getGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2JoinGsArtikelen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsRzvAanspraakQuery::create(null, $criteria);
        $query->joinWith('GsArtikelen', $join_behavior);

        return $this->getGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsRzvAanspraak[] List of GsRzvAanspraak objects
     */
    public function getGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2JoinGsArtikelEigenschappen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsRzvAanspraakQuery::create(null, $criteria);
        $query->joinWith('GsArtikelEigenschappen', $join_behavior);

        return $this->getGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($query, $con);
    }

    /**
     * Clears out the collGsAanvullendeMedicatiebewakingsgegevenss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsAanvullendeMedicatiebewakingsgegevenss()
     */
    public function clearGsAanvullendeMedicatiebewakingsgegevenss()
    {
        $this->collGsAanvullendeMedicatiebewakingsgegevenss = null; // important to set this to null since that means it is uninitialized
        $this->collGsAanvullendeMedicatiebewakingsgegevenssPartial = null;

        return $this;
    }

    /**
     * reset is the collGsAanvullendeMedicatiebewakingsgegevenss collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsAanvullendeMedicatiebewakingsgegevenss($v = true)
    {
        $this->collGsAanvullendeMedicatiebewakingsgegevenssPartial = $v;
    }

    /**
     * Initializes the collGsAanvullendeMedicatiebewakingsgegevenss collection.
     *
     * By default this just sets the collGsAanvullendeMedicatiebewakingsgegevenss collection to an empty array (like clearcollGsAanvullendeMedicatiebewakingsgegevenss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsAanvullendeMedicatiebewakingsgegevenss($overrideExisting = true)
    {
        if (null !== $this->collGsAanvullendeMedicatiebewakingsgegevenss && !$overrideExisting) {
            return;
        }
        $this->collGsAanvullendeMedicatiebewakingsgegevenss = new PropelObjectCollection();
        $this->collGsAanvullendeMedicatiebewakingsgegevenss->setModel('GsAanvullendeMedicatiebewakingsgegevens');
    }

    /**
     * Gets an array of GsAanvullendeMedicatiebewakingsgegevens objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsAanvullendeMedicatiebewakingsgegevens[] List of GsAanvullendeMedicatiebewakingsgegevens objects
     * @throws PropelException
     */
    public function getGsAanvullendeMedicatiebewakingsgegevenss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsAanvullendeMedicatiebewakingsgegevenssPartial && !$this->isNew();
        if (null === $this->collGsAanvullendeMedicatiebewakingsgegevenss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsAanvullendeMedicatiebewakingsgegevenss) {
                // return empty collection
                $this->initGsAanvullendeMedicatiebewakingsgegevenss();
            } else {
                $collGsAanvullendeMedicatiebewakingsgegevenss = GsAanvullendeMedicatiebewakingsgegevensQuery::create(null, $criteria)
                    ->filterByBewakingssoortOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsAanvullendeMedicatiebewakingsgegevenssPartial && count($collGsAanvullendeMedicatiebewakingsgegevenss)) {
                      $this->initGsAanvullendeMedicatiebewakingsgegevenss(false);

                      foreach ($collGsAanvullendeMedicatiebewakingsgegevenss as $obj) {
                        if (false == $this->collGsAanvullendeMedicatiebewakingsgegevenss->contains($obj)) {
                          $this->collGsAanvullendeMedicatiebewakingsgegevenss->append($obj);
                        }
                      }

                      $this->collGsAanvullendeMedicatiebewakingsgegevenssPartial = true;
                    }

                    $collGsAanvullendeMedicatiebewakingsgegevenss->getInternalIterator()->rewind();

                    return $collGsAanvullendeMedicatiebewakingsgegevenss;
                }

                if ($partial && $this->collGsAanvullendeMedicatiebewakingsgegevenss) {
                    foreach ($this->collGsAanvullendeMedicatiebewakingsgegevenss as $obj) {
                        if ($obj->isNew()) {
                            $collGsAanvullendeMedicatiebewakingsgegevenss[] = $obj;
                        }
                    }
                }

                $this->collGsAanvullendeMedicatiebewakingsgegevenss = $collGsAanvullendeMedicatiebewakingsgegevenss;
                $this->collGsAanvullendeMedicatiebewakingsgegevenssPartial = false;
            }
        }

        return $this->collGsAanvullendeMedicatiebewakingsgegevenss;
    }

    /**
     * Sets a collection of GsAanvullendeMedicatiebewakingsgegevens objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsAanvullendeMedicatiebewakingsgegevenss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsAanvullendeMedicatiebewakingsgegevenss(PropelCollection $gsAanvullendeMedicatiebewakingsgegevenss, PropelPDO $con = null)
    {
        $gsAanvullendeMedicatiebewakingsgegevenssToDelete = $this->getGsAanvullendeMedicatiebewakingsgegevenss(new Criteria(), $con)->diff($gsAanvullendeMedicatiebewakingsgegevenss);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsAanvullendeMedicatiebewakingsgegevenssScheduledForDeletion = clone $gsAanvullendeMedicatiebewakingsgegevenssToDelete;

        foreach ($gsAanvullendeMedicatiebewakingsgegevenssToDelete as $gsAanvullendeMedicatiebewakingsgegevensRemoved) {
            $gsAanvullendeMedicatiebewakingsgegevensRemoved->setBewakingssoortOmschrijving(null);
        }

        $this->collGsAanvullendeMedicatiebewakingsgegevenss = null;
        foreach ($gsAanvullendeMedicatiebewakingsgegevenss as $gsAanvullendeMedicatiebewakingsgegevens) {
            $this->addGsAanvullendeMedicatiebewakingsgegevens($gsAanvullendeMedicatiebewakingsgegevens);
        }

        $this->collGsAanvullendeMedicatiebewakingsgegevenss = $gsAanvullendeMedicatiebewakingsgegevenss;
        $this->collGsAanvullendeMedicatiebewakingsgegevenssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsAanvullendeMedicatiebewakingsgegevens objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsAanvullendeMedicatiebewakingsgegevens objects.
     * @throws PropelException
     */
    public function countGsAanvullendeMedicatiebewakingsgegevenss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsAanvullendeMedicatiebewakingsgegevenssPartial && !$this->isNew();
        if (null === $this->collGsAanvullendeMedicatiebewakingsgegevenss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsAanvullendeMedicatiebewakingsgegevenss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsAanvullendeMedicatiebewakingsgegevenss());
            }
            $query = GsAanvullendeMedicatiebewakingsgegevensQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByBewakingssoortOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsAanvullendeMedicatiebewakingsgegevenss);
    }

    /**
     * Method called to associate a GsAanvullendeMedicatiebewakingsgegevens object to this object
     * through the GsAanvullendeMedicatiebewakingsgegevens foreign key attribute.
     *
     * @param    GsAanvullendeMedicatiebewakingsgegevens $l GsAanvullendeMedicatiebewakingsgegevens
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsAanvullendeMedicatiebewakingsgegevens(GsAanvullendeMedicatiebewakingsgegevens $l)
    {
        if ($this->collGsAanvullendeMedicatiebewakingsgegevenss === null) {
            $this->initGsAanvullendeMedicatiebewakingsgegevenss();
            $this->collGsAanvullendeMedicatiebewakingsgegevenssPartial = true;
        }

        if (!in_array($l, $this->collGsAanvullendeMedicatiebewakingsgegevenss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsAanvullendeMedicatiebewakingsgegevens($l);

            if ($this->gsAanvullendeMedicatiebewakingsgegevenssScheduledForDeletion and $this->gsAanvullendeMedicatiebewakingsgegevenssScheduledForDeletion->contains($l)) {
                $this->gsAanvullendeMedicatiebewakingsgegevenssScheduledForDeletion->remove($this->gsAanvullendeMedicatiebewakingsgegevenssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsAanvullendeMedicatiebewakingsgegevens $gsAanvullendeMedicatiebewakingsgegevens The gsAanvullendeMedicatiebewakingsgegevens object to add.
     */
    protected function doAddGsAanvullendeMedicatiebewakingsgegevens($gsAanvullendeMedicatiebewakingsgegevens)
    {
        $this->collGsAanvullendeMedicatiebewakingsgegevenss[]= $gsAanvullendeMedicatiebewakingsgegevens;
        $gsAanvullendeMedicatiebewakingsgegevens->setBewakingssoortOmschrijving($this);
    }

    /**
     * @param	GsAanvullendeMedicatiebewakingsgegevens $gsAanvullendeMedicatiebewakingsgegevens The gsAanvullendeMedicatiebewakingsgegevens object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsAanvullendeMedicatiebewakingsgegevens($gsAanvullendeMedicatiebewakingsgegevens)
    {
        if ($this->getGsAanvullendeMedicatiebewakingsgegevenss()->contains($gsAanvullendeMedicatiebewakingsgegevens)) {
            $this->collGsAanvullendeMedicatiebewakingsgegevenss->remove($this->collGsAanvullendeMedicatiebewakingsgegevenss->search($gsAanvullendeMedicatiebewakingsgegevens));
            if (null === $this->gsAanvullendeMedicatiebewakingsgegevenssScheduledForDeletion) {
                $this->gsAanvullendeMedicatiebewakingsgegevenssScheduledForDeletion = clone $this->collGsAanvullendeMedicatiebewakingsgegevenss;
                $this->gsAanvullendeMedicatiebewakingsgegevenssScheduledForDeletion->clear();
            }
            $this->gsAanvullendeMedicatiebewakingsgegevenssScheduledForDeletion[]= clone $gsAanvullendeMedicatiebewakingsgegevens;
            $gsAanvullendeMedicatiebewakingsgegevens->setBewakingssoortOmschrijving(null);
        }

        return $this;
    }

    /**
     * Clears out the collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen()
     */
    public function clearGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen()
    {
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen = null; // important to set this to null since that means it is uninitialized
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenPartial = null;

        return $this;
    }

    /**
     * reset is the collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($v = true)
    {
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenPartial = $v;
    }

    /**
     * Initializes the collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen collection.
     *
     * By default this just sets the collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen collection to an empty array (like clearcollGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($overrideExisting = true)
    {
        if (null !== $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen && !$overrideExisting) {
            return;
        }
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen = new PropelObjectCollection();
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen->setModel('GsLogistiekeVerpakkingsinformatie');
    }

    /**
     * Gets an array of GsLogistiekeVerpakkingsinformatie objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[] List of GsLogistiekeVerpakkingsinformatie objects
     * @throws PropelException
     */
    public function getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenPartial && !$this->isNew();
        if (null === $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen) {
                // return empty collection
                $this->initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen();
            } else {
                $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen = GsLogistiekeVerpakkingsinformatieQuery::create(null, $criteria)
                    ->filterBySoortenVerpakkingOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenPartial && count($collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen)) {
                      $this->initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen(false);

                      foreach ($collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen as $obj) {
                        if (false == $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen->contains($obj)) {
                          $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen->append($obj);
                        }
                      }

                      $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenPartial = true;
                    }

                    $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen->getInternalIterator()->rewind();

                    return $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen;
                }

                if ($partial && $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen) {
                    foreach ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen as $obj) {
                        if ($obj->isNew()) {
                            $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen[] = $obj;
                        }
                    }
                }

                $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen = $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen;
                $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenPartial = false;
            }
        }

        return $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen;
    }

    /**
     * Sets a collection of GsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen(PropelCollection $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen, PropelPDO $con = null)
    {
        $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenToDelete = $this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen(new Criteria(), $con)->diff($gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen);


        $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenScheduledForDeletion = $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenToDelete;

        foreach ($gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenToDelete as $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenRemoved) {
            $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenRemoved->setSoortenVerpakkingOmschrijving(null);
        }

        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen = null;
        foreach ($gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen as $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen) {
            $this->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen);
        }

        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen = $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen;
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsLogistiekeVerpakkingsinformatie objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsLogistiekeVerpakkingsinformatie objects.
     * @throws PropelException
     */
    public function countGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenPartial && !$this->isNew();
        if (null === $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen());
            }
            $query = GsLogistiekeVerpakkingsinformatieQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySoortenVerpakkingOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen);
    }

    /**
     * Method called to associate a GsLogistiekeVerpakkingsinformatie object to this object
     * through the GsLogistiekeVerpakkingsinformatie foreign key attribute.
     *
     * @param    GsLogistiekeVerpakkingsinformatie $l GsLogistiekeVerpakkingsinformatie
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen(GsLogistiekeVerpakkingsinformatie $l)
    {
        if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen === null) {
            $this->initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen();
            $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenPartial = true;
        }

        if (!in_array($l, $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($l);

            if ($this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenScheduledForDeletion and $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenScheduledForDeletion->contains($l)) {
                $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenScheduledForDeletion->remove($this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen The gsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen object to add.
     */
    protected function doAddGsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen)
    {
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen[]= $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen;
        $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen->setSoortenVerpakkingOmschrijving($this);
    }

    /**
     * @param	GsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen The gsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen)
    {
        if ($this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen()->contains($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen)) {
            $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen->remove($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen->search($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen));
            if (null === $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenScheduledForDeletion) {
                $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenScheduledForDeletion = clone $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen;
                $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenScheduledForDeletion->clear();
            }
            $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenScheduledForDeletion[]= clone $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen;
            $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen->setSoortenVerpakkingOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[] List of GsLogistiekeVerpakkingsinformatie objects
     */
    public function getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingenJoinGsArtikelen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsLogistiekeVerpakkingsinformatieQuery::create(null, $criteria);
        $query->joinWith('GsArtikelen', $join_behavior);

        return $this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen($query, $con);
    }

    /**
     * Clears out the collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte()
     */
    public function clearGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte()
    {
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte = null; // important to set this to null since that means it is uninitialized
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogtePartial = null;

        return $this;
    }

    /**
     * reset is the collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($v = true)
    {
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogtePartial = $v;
    }

    /**
     * Initializes the collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte collection.
     *
     * By default this just sets the collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte collection to an empty array (like clearcollGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($overrideExisting = true)
    {
        if (null !== $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte && !$overrideExisting) {
            return;
        }
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte = new PropelObjectCollection();
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte->setModel('GsLogistiekeVerpakkingsinformatie');
    }

    /**
     * Gets an array of GsLogistiekeVerpakkingsinformatie objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[] List of GsLogistiekeVerpakkingsinformatie objects
     * @throws PropelException
     */
    public function getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogtePartial && !$this->isNew();
        if (null === $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte) {
                // return empty collection
                $this->initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte();
            } else {
                $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte = GsLogistiekeVerpakkingsinformatieQuery::create(null, $criteria)
                    ->filterByHoogteEenheidOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogtePartial && count($collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte)) {
                      $this->initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte(false);

                      foreach ($collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte as $obj) {
                        if (false == $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte->contains($obj)) {
                          $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte->append($obj);
                        }
                      }

                      $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogtePartial = true;
                    }

                    $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte->getInternalIterator()->rewind();

                    return $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte;
                }

                if ($partial && $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte) {
                    foreach ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte as $obj) {
                        if ($obj->isNew()) {
                            $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte[] = $obj;
                        }
                    }
                }

                $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte = $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte;
                $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogtePartial = false;
            }
        }

        return $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte;
    }

    /**
     * Sets a collection of GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte(PropelCollection $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte, PropelPDO $con = null)
    {
        $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteToDelete = $this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte(new Criteria(), $con)->diff($gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte);


        $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteScheduledForDeletion = $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteToDelete;

        foreach ($gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteToDelete as $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteRemoved) {
            $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteRemoved->setHoogteEenheidOmschrijving(null);
        }

        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte = null;
        foreach ($gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte as $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte) {
            $this->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte);
        }

        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte = $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte;
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogtePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsLogistiekeVerpakkingsinformatie objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsLogistiekeVerpakkingsinformatie objects.
     * @throws PropelException
     */
    public function countGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogtePartial && !$this->isNew();
        if (null === $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte());
            }
            $query = GsLogistiekeVerpakkingsinformatieQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByHoogteEenheidOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte);
    }

    /**
     * Method called to associate a GsLogistiekeVerpakkingsinformatie object to this object
     * through the GsLogistiekeVerpakkingsinformatie foreign key attribute.
     *
     * @param    GsLogistiekeVerpakkingsinformatie $l GsLogistiekeVerpakkingsinformatie
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte(GsLogistiekeVerpakkingsinformatie $l)
    {
        if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte === null) {
            $this->initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte();
            $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogtePartial = true;
        }

        if (!in_array($l, $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($l);

            if ($this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteScheduledForDeletion and $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteScheduledForDeletion->contains($l)) {
                $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteScheduledForDeletion->remove($this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte The gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte object to add.
     */
    protected function doAddGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte)
    {
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte[]= $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte;
        $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte->setHoogteEenheidOmschrijving($this);
    }

    /**
     * @param	GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte The gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte)
    {
        if ($this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte()->contains($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte)) {
            $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte->remove($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte->search($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte));
            if (null === $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteScheduledForDeletion) {
                $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteScheduledForDeletion = clone $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte;
                $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteScheduledForDeletion->clear();
            }
            $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteScheduledForDeletion[]= clone $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte;
            $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte->setHoogteEenheidOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[] List of GsLogistiekeVerpakkingsinformatie objects
     */
    public function getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogteJoinGsArtikelen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsLogistiekeVerpakkingsinformatieQuery::create(null, $criteria);
        $query->joinWith('GsArtikelen', $join_behavior);

        return $this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte($query, $con);
    }

    /**
     * Clears out the collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte()
     */
    public function clearGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte()
    {
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte = null; // important to set this to null since that means it is uninitialized
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDieptePartial = null;

        return $this;
    }

    /**
     * reset is the collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($v = true)
    {
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDieptePartial = $v;
    }

    /**
     * Initializes the collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte collection.
     *
     * By default this just sets the collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte collection to an empty array (like clearcollGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($overrideExisting = true)
    {
        if (null !== $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte && !$overrideExisting) {
            return;
        }
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte = new PropelObjectCollection();
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte->setModel('GsLogistiekeVerpakkingsinformatie');
    }

    /**
     * Gets an array of GsLogistiekeVerpakkingsinformatie objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[] List of GsLogistiekeVerpakkingsinformatie objects
     * @throws PropelException
     */
    public function getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDieptePartial && !$this->isNew();
        if (null === $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte) {
                // return empty collection
                $this->initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte();
            } else {
                $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte = GsLogistiekeVerpakkingsinformatieQuery::create(null, $criteria)
                    ->filterByDiepteEenheidOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDieptePartial && count($collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte)) {
                      $this->initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte(false);

                      foreach ($collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte as $obj) {
                        if (false == $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte->contains($obj)) {
                          $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte->append($obj);
                        }
                      }

                      $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDieptePartial = true;
                    }

                    $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte->getInternalIterator()->rewind();

                    return $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte;
                }

                if ($partial && $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte) {
                    foreach ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte as $obj) {
                        if ($obj->isNew()) {
                            $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte[] = $obj;
                        }
                    }
                }

                $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte = $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte;
                $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDieptePartial = false;
            }
        }

        return $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte;
    }

    /**
     * Sets a collection of GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte(PropelCollection $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte, PropelPDO $con = null)
    {
        $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteToDelete = $this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte(new Criteria(), $con)->diff($gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte);


        $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteScheduledForDeletion = $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteToDelete;

        foreach ($gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteToDelete as $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteRemoved) {
            $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteRemoved->setDiepteEenheidOmschrijving(null);
        }

        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte = null;
        foreach ($gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte as $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte) {
            $this->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte);
        }

        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte = $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte;
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDieptePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsLogistiekeVerpakkingsinformatie objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsLogistiekeVerpakkingsinformatie objects.
     * @throws PropelException
     */
    public function countGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDieptePartial && !$this->isNew();
        if (null === $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte());
            }
            $query = GsLogistiekeVerpakkingsinformatieQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByDiepteEenheidOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte);
    }

    /**
     * Method called to associate a GsLogistiekeVerpakkingsinformatie object to this object
     * through the GsLogistiekeVerpakkingsinformatie foreign key attribute.
     *
     * @param    GsLogistiekeVerpakkingsinformatie $l GsLogistiekeVerpakkingsinformatie
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte(GsLogistiekeVerpakkingsinformatie $l)
    {
        if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte === null) {
            $this->initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte();
            $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDieptePartial = true;
        }

        if (!in_array($l, $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($l);

            if ($this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteScheduledForDeletion and $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteScheduledForDeletion->contains($l)) {
                $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteScheduledForDeletion->remove($this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte The gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte object to add.
     */
    protected function doAddGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte)
    {
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte[]= $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte;
        $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte->setDiepteEenheidOmschrijving($this);
    }

    /**
     * @param	GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte The gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte)
    {
        if ($this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte()->contains($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte)) {
            $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte->remove($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte->search($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte));
            if (null === $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteScheduledForDeletion) {
                $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteScheduledForDeletion = clone $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte;
                $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteScheduledForDeletion->clear();
            }
            $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteScheduledForDeletion[]= clone $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte;
            $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte->setDiepteEenheidOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[] List of GsLogistiekeVerpakkingsinformatie objects
     */
    public function getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepteJoinGsArtikelen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsLogistiekeVerpakkingsinformatieQuery::create(null, $criteria);
        $query->joinWith('GsArtikelen', $join_behavior);

        return $this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte($query, $con);
    }

    /**
     * Clears out the collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte()
     */
    public function clearGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte()
    {
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte = null; // important to set this to null since that means it is uninitialized
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedtePartial = null;

        return $this;
    }

    /**
     * reset is the collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($v = true)
    {
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedtePartial = $v;
    }

    /**
     * Initializes the collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte collection.
     *
     * By default this just sets the collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte collection to an empty array (like clearcollGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($overrideExisting = true)
    {
        if (null !== $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte && !$overrideExisting) {
            return;
        }
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte = new PropelObjectCollection();
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte->setModel('GsLogistiekeVerpakkingsinformatie');
    }

    /**
     * Gets an array of GsLogistiekeVerpakkingsinformatie objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[] List of GsLogistiekeVerpakkingsinformatie objects
     * @throws PropelException
     */
    public function getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedtePartial && !$this->isNew();
        if (null === $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte) {
                // return empty collection
                $this->initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte();
            } else {
                $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte = GsLogistiekeVerpakkingsinformatieQuery::create(null, $criteria)
                    ->filterByBreedteEenheidOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedtePartial && count($collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte)) {
                      $this->initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte(false);

                      foreach ($collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte as $obj) {
                        if (false == $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte->contains($obj)) {
                          $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte->append($obj);
                        }
                      }

                      $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedtePartial = true;
                    }

                    $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte->getInternalIterator()->rewind();

                    return $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte;
                }

                if ($partial && $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte) {
                    foreach ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte as $obj) {
                        if ($obj->isNew()) {
                            $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte[] = $obj;
                        }
                    }
                }

                $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte = $collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte;
                $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedtePartial = false;
            }
        }

        return $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte;
    }

    /**
     * Sets a collection of GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte(PropelCollection $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte, PropelPDO $con = null)
    {
        $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteToDelete = $this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte(new Criteria(), $con)->diff($gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte);


        $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteScheduledForDeletion = $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteToDelete;

        foreach ($gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteToDelete as $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteRemoved) {
            $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteRemoved->setBreedteEenheidOmschrijving(null);
        }

        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte = null;
        foreach ($gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte as $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte) {
            $this->addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte);
        }

        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte = $gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte;
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedtePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsLogistiekeVerpakkingsinformatie objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsLogistiekeVerpakkingsinformatie objects.
     * @throws PropelException
     */
    public function countGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedtePartial && !$this->isNew();
        if (null === $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte());
            }
            $query = GsLogistiekeVerpakkingsinformatieQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByBreedteEenheidOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte);
    }

    /**
     * Method called to associate a GsLogistiekeVerpakkingsinformatie object to this object
     * through the GsLogistiekeVerpakkingsinformatie foreign key attribute.
     *
     * @param    GsLogistiekeVerpakkingsinformatie $l GsLogistiekeVerpakkingsinformatie
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte(GsLogistiekeVerpakkingsinformatie $l)
    {
        if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte === null) {
            $this->initGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte();
            $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedtePartial = true;
        }

        if (!in_array($l, $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($l);

            if ($this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteScheduledForDeletion and $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteScheduledForDeletion->contains($l)) {
                $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteScheduledForDeletion->remove($this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte The gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte object to add.
     */
    protected function doAddGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte)
    {
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte[]= $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte;
        $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte->setBreedteEenheidOmschrijving($this);
    }

    /**
     * @param	GsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte The gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte)
    {
        if ($this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte()->contains($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte)) {
            $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte->remove($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte->search($gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte));
            if (null === $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteScheduledForDeletion) {
                $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteScheduledForDeletion = clone $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte;
                $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteScheduledForDeletion->clear();
            }
            $this->gsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteScheduledForDeletion[]= clone $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte;
            $gsLogistiekeVerpakkingsinformatieRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte->setBreedteEenheidOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsLogistiekeVerpakkingsinformatie[] List of GsLogistiekeVerpakkingsinformatie objects
     */
    public function getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedteJoinGsArtikelen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsLogistiekeVerpakkingsinformatieQuery::create(null, $criteria);
        $query->joinWith('GsArtikelen', $join_behavior);

        return $this->getGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte($query, $con);
    }

    /**
     * Clears out the collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode()
     */
    public function clearGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode()
    {
        $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode = null; // important to set this to null since that means it is uninitialized
        $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodePartial = null;

        return $this;
    }

    /**
     * reset is the collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($v = true)
    {
        $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodePartial = $v;
    }

    /**
     * Initializes the collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode collection.
     *
     * By default this just sets the collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode collection to an empty array (like clearcollGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($overrideExisting = true)
    {
        if (null !== $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode && !$overrideExisting) {
            return;
        }
        $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode = new PropelObjectCollection();
        $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode->setModel('GsArtikelen');
    }

    /**
     * Gets an array of GsArtikelen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     * @throws PropelException
     */
    public function getGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodePartial && !$this->isNew();
        if (null === $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode) {
                // return empty collection
                $this->initGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode();
            } else {
                $collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode = GsArtikelenQuery::create(null, $criteria)
                    ->filterByLandOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodePartial && count($collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode)) {
                      $this->initGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode(false);

                      foreach ($collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode as $obj) {
                        if (false == $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode->contains($obj)) {
                          $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode->append($obj);
                        }
                      }

                      $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodePartial = true;
                    }

                    $collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode->getInternalIterator()->rewind();

                    return $collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode;
                }

                if ($partial && $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode) {
                    foreach ($this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode as $obj) {
                        if ($obj->isNew()) {
                            $collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode[] = $obj;
                        }
                    }
                }

                $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode = $collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode;
                $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodePartial = false;
            }
        }

        return $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode;
    }

    /**
     * Sets a collection of GsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode(PropelCollection $gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode, PropelPDO $con = null)
    {
        $gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeToDelete = $this->getGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode(new Criteria(), $con)->diff($gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode);


        $this->gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeScheduledForDeletion = $gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeToDelete;

        foreach ($gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeToDelete as $gsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeRemoved) {
            $gsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeRemoved->setLandOmschrijving(null);
        }

        $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode = null;
        foreach ($gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode as $gsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode) {
            $this->addGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($gsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode);
        }

        $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode = $gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode;
        $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsArtikelen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsArtikelen objects.
     * @throws PropelException
     */
    public function countGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodePartial && !$this->isNew();
        if (null === $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode());
            }
            $query = GsArtikelenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByLandOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode);
    }

    /**
     * Method called to associate a GsArtikelen object to this object
     * through the GsArtikelen foreign key attribute.
     *
     * @param    GsArtikelen $l GsArtikelen
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode(GsArtikelen $l)
    {
        if ($this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode === null) {
            $this->initGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode();
            $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodePartial = true;
        }

        if (!in_array($l, $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($l);

            if ($this->gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeScheduledForDeletion and $this->gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeScheduledForDeletion->contains($l)) {
                $this->gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeScheduledForDeletion->remove($this->gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode $gsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode The gsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode object to add.
     */
    protected function doAddGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($gsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode)
    {
        $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode[]= $gsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode;
        $gsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode->setLandOmschrijving($this);
    }

    /**
     * @param	GsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode $gsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode The gsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($gsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode)
    {
        if ($this->getGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode()->contains($gsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode)) {
            $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode->remove($this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode->search($gsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode));
            if (null === $this->gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeScheduledForDeletion) {
                $this->gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeScheduledForDeletion = clone $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode;
                $this->gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeScheduledForDeletion->clear();
            }
            $this->gsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeScheduledForDeletion[]= clone $gsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode;
            $gsArtikelenRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode->setLandOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeJoinGsHandelsproducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('GsHandelsproducten', $join_behavior);

        return $this->getGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeJoinLeverancier($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('Leverancier', $join_behavior);

        return $this->getGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeJoinImporteur($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('Importeur', $join_behavior);

        return $this->getGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeJoinRegistratiehouder($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('Registratiehouder', $join_behavior);

        return $this->getGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKodeJoinLogistiekeInformatie($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('LogistiekeInformatie', $join_behavior);

        return $this->getGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode($query, $con);
    }

    /**
     * Clears out the collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode()
     */
    public function clearGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode()
    {
        $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode = null; // important to set this to null since that means it is uninitialized
        $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodePartial = null;

        return $this;
    }

    /**
     * reset is the collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($v = true)
    {
        $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodePartial = $v;
    }

    /**
     * Initializes the collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode collection.
     *
     * By default this just sets the collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode collection to an empty array (like clearcollGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($overrideExisting = true)
    {
        if (null !== $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode && !$overrideExisting) {
            return;
        }
        $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode = new PropelObjectCollection();
        $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode->setModel('GsArtikelen');
    }

    /**
     * Gets an array of GsArtikelen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     * @throws PropelException
     */
    public function getGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodePartial && !$this->isNew();
        if (null === $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode) {
                // return empty collection
                $this->initGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode();
            } else {
                $collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode = GsArtikelenQuery::create(null, $criteria)
                    ->filterByHoofdverpakkingOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodePartial && count($collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode)) {
                      $this->initGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode(false);

                      foreach ($collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode as $obj) {
                        if (false == $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode->contains($obj)) {
                          $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode->append($obj);
                        }
                      }

                      $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodePartial = true;
                    }

                    $collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode->getInternalIterator()->rewind();

                    return $collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode;
                }

                if ($partial && $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode) {
                    foreach ($this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode as $obj) {
                        if ($obj->isNew()) {
                            $collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode[] = $obj;
                        }
                    }
                }

                $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode = $collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode;
                $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodePartial = false;
            }
        }

        return $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode;
    }

    /**
     * Sets a collection of GsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode(PropelCollection $gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode, PropelPDO $con = null)
    {
        $gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeToDelete = $this->getGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode(new Criteria(), $con)->diff($gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode);


        $this->gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeScheduledForDeletion = $gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeToDelete;

        foreach ($gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeToDelete as $gsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeRemoved) {
            $gsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeRemoved->setHoofdverpakkingOmschrijving(null);
        }

        $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode = null;
        foreach ($gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode as $gsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode) {
            $this->addGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($gsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode);
        }

        $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode = $gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode;
        $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsArtikelen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsArtikelen objects.
     * @throws PropelException
     */
    public function countGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodePartial && !$this->isNew();
        if (null === $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode());
            }
            $query = GsArtikelenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByHoofdverpakkingOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode);
    }

    /**
     * Method called to associate a GsArtikelen object to this object
     * through the GsArtikelen foreign key attribute.
     *
     * @param    GsArtikelen $l GsArtikelen
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode(GsArtikelen $l)
    {
        if ($this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode === null) {
            $this->initGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode();
            $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodePartial = true;
        }

        if (!in_array($l, $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($l);

            if ($this->gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeScheduledForDeletion and $this->gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeScheduledForDeletion->contains($l)) {
                $this->gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeScheduledForDeletion->remove($this->gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode $gsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode The gsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode object to add.
     */
    protected function doAddGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($gsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode)
    {
        $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode[]= $gsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode;
        $gsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode->setHoofdverpakkingOmschrijving($this);
    }

    /**
     * @param	GsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode $gsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode The gsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($gsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode)
    {
        if ($this->getGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode()->contains($gsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode)) {
            $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode->remove($this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode->search($gsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode));
            if (null === $this->gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeScheduledForDeletion) {
                $this->gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeScheduledForDeletion = clone $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode;
                $this->gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeScheduledForDeletion->clear();
            }
            $this->gsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeScheduledForDeletion[]= clone $gsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode;
            $gsArtikelenRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode->setHoofdverpakkingOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeJoinGsHandelsproducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('GsHandelsproducten', $join_behavior);

        return $this->getGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeJoinLeverancier($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('Leverancier', $join_behavior);

        return $this->getGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeJoinImporteur($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('Importeur', $join_behavior);

        return $this->getGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeJoinRegistratiehouder($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('Registratiehouder', $join_behavior);

        return $this->getGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKodeJoinLogistiekeInformatie($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('LogistiekeInformatie', $join_behavior);

        return $this->getGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode($query, $con);
    }

    /**
     * Clears out the collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode()
     */
    public function clearGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode()
    {
        $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode = null; // important to set this to null since that means it is uninitialized
        $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodePartial = null;

        return $this;
    }

    /**
     * reset is the collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($v = true)
    {
        $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodePartial = $v;
    }

    /**
     * Initializes the collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode collection.
     *
     * By default this just sets the collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode collection to an empty array (like clearcollGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($overrideExisting = true)
    {
        if (null !== $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode && !$overrideExisting) {
            return;
        }
        $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode = new PropelObjectCollection();
        $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode->setModel('GsArtikelen');
    }

    /**
     * Gets an array of GsArtikelen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     * @throws PropelException
     */
    public function getGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodePartial && !$this->isNew();
        if (null === $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode) {
                // return empty collection
                $this->initGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode();
            } else {
                $collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode = GsArtikelenQuery::create(null, $criteria)
                    ->filterByDeelverpakkingOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodePartial && count($collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode)) {
                      $this->initGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode(false);

                      foreach ($collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode as $obj) {
                        if (false == $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode->contains($obj)) {
                          $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode->append($obj);
                        }
                      }

                      $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodePartial = true;
                    }

                    $collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode->getInternalIterator()->rewind();

                    return $collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode;
                }

                if ($partial && $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode) {
                    foreach ($this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode as $obj) {
                        if ($obj->isNew()) {
                            $collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode[] = $obj;
                        }
                    }
                }

                $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode = $collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode;
                $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodePartial = false;
            }
        }

        return $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode;
    }

    /**
     * Sets a collection of GsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode(PropelCollection $gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode, PropelPDO $con = null)
    {
        $gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeToDelete = $this->getGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode(new Criteria(), $con)->diff($gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode);


        $this->gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeScheduledForDeletion = $gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeToDelete;

        foreach ($gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeToDelete as $gsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeRemoved) {
            $gsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeRemoved->setDeelverpakkingOmschrijving(null);
        }

        $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode = null;
        foreach ($gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode as $gsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode) {
            $this->addGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($gsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode);
        }

        $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode = $gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode;
        $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsArtikelen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsArtikelen objects.
     * @throws PropelException
     */
    public function countGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodePartial && !$this->isNew();
        if (null === $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode());
            }
            $query = GsArtikelenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByDeelverpakkingOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode);
    }

    /**
     * Method called to associate a GsArtikelen object to this object
     * through the GsArtikelen foreign key attribute.
     *
     * @param    GsArtikelen $l GsArtikelen
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode(GsArtikelen $l)
    {
        if ($this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode === null) {
            $this->initGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode();
            $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodePartial = true;
        }

        if (!in_array($l, $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($l);

            if ($this->gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeScheduledForDeletion and $this->gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeScheduledForDeletion->contains($l)) {
                $this->gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeScheduledForDeletion->remove($this->gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode $gsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode The gsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode object to add.
     */
    protected function doAddGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($gsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode)
    {
        $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode[]= $gsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode;
        $gsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode->setDeelverpakkingOmschrijving($this);
    }

    /**
     * @param	GsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode $gsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode The gsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($gsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode)
    {
        if ($this->getGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode()->contains($gsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode)) {
            $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode->remove($this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode->search($gsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode));
            if (null === $this->gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeScheduledForDeletion) {
                $this->gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeScheduledForDeletion = clone $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode;
                $this->gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeScheduledForDeletion->clear();
            }
            $this->gsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeScheduledForDeletion[]= clone $gsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode;
            $gsArtikelenRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode->setDeelverpakkingOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeJoinGsHandelsproducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('GsHandelsproducten', $join_behavior);

        return $this->getGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeJoinLeverancier($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('Leverancier', $join_behavior);

        return $this->getGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeJoinImporteur($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('Importeur', $join_behavior);

        return $this->getGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeJoinRegistratiehouder($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('Registratiehouder', $join_behavior);

        return $this->getGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsArtikelen[] List of GsArtikelen objects
     */
    public function getGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKodeJoinLogistiekeInformatie($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsArtikelenQuery::create(null, $criteria);
        $query->joinWith('LogistiekeInformatie', $join_behavior);

        return $this->getGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode($query, $con);
    }

    /**
     * Clears out the collGsBijzondereKenmerkens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsBijzondereKenmerkens()
     */
    public function clearGsBijzondereKenmerkens()
    {
        $this->collGsBijzondereKenmerkens = null; // important to set this to null since that means it is uninitialized
        $this->collGsBijzondereKenmerkensPartial = null;

        return $this;
    }

    /**
     * reset is the collGsBijzondereKenmerkens collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsBijzondereKenmerkens($v = true)
    {
        $this->collGsBijzondereKenmerkensPartial = $v;
    }

    /**
     * Initializes the collGsBijzondereKenmerkens collection.
     *
     * By default this just sets the collGsBijzondereKenmerkens collection to an empty array (like clearcollGsBijzondereKenmerkens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsBijzondereKenmerkens($overrideExisting = true)
    {
        if (null !== $this->collGsBijzondereKenmerkens && !$overrideExisting) {
            return;
        }
        $this->collGsBijzondereKenmerkens = new PropelObjectCollection();
        $this->collGsBijzondereKenmerkens->setModel('GsBijzondereKenmerken');
    }

    /**
     * Gets an array of GsBijzondereKenmerken objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsBijzondereKenmerken[] List of GsBijzondereKenmerken objects
     * @throws PropelException
     */
    public function getGsBijzondereKenmerkens($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsBijzondereKenmerkensPartial && !$this->isNew();
        if (null === $this->collGsBijzondereKenmerkens || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsBijzondereKenmerkens) {
                // return empty collection
                $this->initGsBijzondereKenmerkens();
            } else {
                $collGsBijzondereKenmerkens = GsBijzondereKenmerkenQuery::create(null, $criteria)
                    ->filterByKenmerkOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsBijzondereKenmerkensPartial && count($collGsBijzondereKenmerkens)) {
                      $this->initGsBijzondereKenmerkens(false);

                      foreach ($collGsBijzondereKenmerkens as $obj) {
                        if (false == $this->collGsBijzondereKenmerkens->contains($obj)) {
                          $this->collGsBijzondereKenmerkens->append($obj);
                        }
                      }

                      $this->collGsBijzondereKenmerkensPartial = true;
                    }

                    $collGsBijzondereKenmerkens->getInternalIterator()->rewind();

                    return $collGsBijzondereKenmerkens;
                }

                if ($partial && $this->collGsBijzondereKenmerkens) {
                    foreach ($this->collGsBijzondereKenmerkens as $obj) {
                        if ($obj->isNew()) {
                            $collGsBijzondereKenmerkens[] = $obj;
                        }
                    }
                }

                $this->collGsBijzondereKenmerkens = $collGsBijzondereKenmerkens;
                $this->collGsBijzondereKenmerkensPartial = false;
            }
        }

        return $this->collGsBijzondereKenmerkens;
    }

    /**
     * Sets a collection of GsBijzondereKenmerken objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsBijzondereKenmerkens A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsBijzondereKenmerkens(PropelCollection $gsBijzondereKenmerkens, PropelPDO $con = null)
    {
        $gsBijzondereKenmerkensToDelete = $this->getGsBijzondereKenmerkens(new Criteria(), $con)->diff($gsBijzondereKenmerkens);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsBijzondereKenmerkensScheduledForDeletion = clone $gsBijzondereKenmerkensToDelete;

        foreach ($gsBijzondereKenmerkensToDelete as $gsBijzondereKenmerkenRemoved) {
            $gsBijzondereKenmerkenRemoved->setKenmerkOmschrijving(null);
        }

        $this->collGsBijzondereKenmerkens = null;
        foreach ($gsBijzondereKenmerkens as $gsBijzondereKenmerken) {
            $this->addGsBijzondereKenmerken($gsBijzondereKenmerken);
        }

        $this->collGsBijzondereKenmerkens = $gsBijzondereKenmerkens;
        $this->collGsBijzondereKenmerkensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsBijzondereKenmerken objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsBijzondereKenmerken objects.
     * @throws PropelException
     */
    public function countGsBijzondereKenmerkens(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsBijzondereKenmerkensPartial && !$this->isNew();
        if (null === $this->collGsBijzondereKenmerkens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsBijzondereKenmerkens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsBijzondereKenmerkens());
            }
            $query = GsBijzondereKenmerkenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByKenmerkOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsBijzondereKenmerkens);
    }

    /**
     * Method called to associate a GsBijzondereKenmerken object to this object
     * through the GsBijzondereKenmerken foreign key attribute.
     *
     * @param    GsBijzondereKenmerken $l GsBijzondereKenmerken
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsBijzondereKenmerken(GsBijzondereKenmerken $l)
    {
        if ($this->collGsBijzondereKenmerkens === null) {
            $this->initGsBijzondereKenmerkens();
            $this->collGsBijzondereKenmerkensPartial = true;
        }

        if (!in_array($l, $this->collGsBijzondereKenmerkens->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsBijzondereKenmerken($l);

            if ($this->gsBijzondereKenmerkensScheduledForDeletion and $this->gsBijzondereKenmerkensScheduledForDeletion->contains($l)) {
                $this->gsBijzondereKenmerkensScheduledForDeletion->remove($this->gsBijzondereKenmerkensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsBijzondereKenmerken $gsBijzondereKenmerken The gsBijzondereKenmerken object to add.
     */
    protected function doAddGsBijzondereKenmerken($gsBijzondereKenmerken)
    {
        $this->collGsBijzondereKenmerkens[]= $gsBijzondereKenmerken;
        $gsBijzondereKenmerken->setKenmerkOmschrijving($this);
    }

    /**
     * @param	GsBijzondereKenmerken $gsBijzondereKenmerken The gsBijzondereKenmerken object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsBijzondereKenmerken($gsBijzondereKenmerken)
    {
        if ($this->getGsBijzondereKenmerkens()->contains($gsBijzondereKenmerken)) {
            $this->collGsBijzondereKenmerkens->remove($this->collGsBijzondereKenmerkens->search($gsBijzondereKenmerken));
            if (null === $this->gsBijzondereKenmerkensScheduledForDeletion) {
                $this->gsBijzondereKenmerkensScheduledForDeletion = clone $this->collGsBijzondereKenmerkens;
                $this->gsBijzondereKenmerkensScheduledForDeletion->clear();
            }
            $this->gsBijzondereKenmerkensScheduledForDeletion[]= clone $gsBijzondereKenmerken;
            $gsBijzondereKenmerken->setKenmerkOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsBijzondereKenmerkens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsBijzondereKenmerken[] List of GsBijzondereKenmerken objects
     */
    public function getGsBijzondereKenmerkensJoinGsHandelsproducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsBijzondereKenmerkenQuery::create(null, $criteria);
        $query->joinWith('GsHandelsproducten', $join_behavior);

        return $this->getGsBijzondereKenmerkens($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsBijzondereKenmerkens from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsBijzondereKenmerken[] List of GsBijzondereKenmerken objects
     */
    public function getGsBijzondereKenmerkensJoinGsVoorschrijfprGeneesmiddelIdentific($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsBijzondereKenmerkenQuery::create(null, $criteria);
        $query->joinWith('GsVoorschrijfprGeneesmiddelIdentific', $join_behavior);

        return $this->getGsBijzondereKenmerkens($query, $con);
    }

    /**
     * Clears out the collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid()
     */
    public function clearGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid()
    {
        $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid = null; // important to set this to null since that means it is uninitialized
        $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidPartial = null;

        return $this;
    }

    /**
     * reset is the collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid($v = true)
    {
        $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidPartial = $v;
    }

    /**
     * Initializes the collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid collection.
     *
     * By default this just sets the collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid collection to an empty array (like clearcollGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid($overrideExisting = true)
    {
        if (null !== $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid && !$overrideExisting) {
            return;
        }
        $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid = new PropelObjectCollection();
        $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid->setModel('GsDailyDefinedDose');
    }

    /**
     * Gets an array of GsDailyDefinedDose objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsDailyDefinedDose[] List of GsDailyDefinedDose objects
     * @throws PropelException
     */
    public function getGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidPartial && !$this->isNew();
        if (null === $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid) {
                // return empty collection
                $this->initGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid();
            } else {
                $collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid = GsDailyDefinedDoseQuery::create(null, $criteria)
                    ->filterByEenheidOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidPartial && count($collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid)) {
                      $this->initGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid(false);

                      foreach ($collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid as $obj) {
                        if (false == $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid->contains($obj)) {
                          $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid->append($obj);
                        }
                      }

                      $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidPartial = true;
                    }

                    $collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid->getInternalIterator()->rewind();

                    return $collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid;
                }

                if ($partial && $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid) {
                    foreach ($this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid as $obj) {
                        if ($obj->isNew()) {
                            $collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid[] = $obj;
                        }
                    }
                }

                $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid = $collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid;
                $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidPartial = false;
            }
        }

        return $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid;
    }

    /**
     * Sets a collection of GsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid(PropelCollection $gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid, PropelPDO $con = null)
    {
        $gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidToDelete = $this->getGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid(new Criteria(), $con)->diff($gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidScheduledForDeletion = clone $gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidToDelete;

        foreach ($gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidToDelete as $gsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheidRemoved) {
            $gsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheidRemoved->setEenheidOmschrijving(null);
        }

        $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid = null;
        foreach ($gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid as $gsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid) {
            $this->addGsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid($gsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid);
        }

        $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid = $gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid;
        $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsDailyDefinedDose objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsDailyDefinedDose objects.
     * @throws PropelException
     */
    public function countGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidPartial && !$this->isNew();
        if (null === $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid());
            }
            $query = GsDailyDefinedDoseQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEenheidOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid);
    }

    /**
     * Method called to associate a GsDailyDefinedDose object to this object
     * through the GsDailyDefinedDose foreign key attribute.
     *
     * @param    GsDailyDefinedDose $l GsDailyDefinedDose
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid(GsDailyDefinedDose $l)
    {
        if ($this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid === null) {
            $this->initGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid();
            $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidPartial = true;
        }

        if (!in_array($l, $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid($l);

            if ($this->gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidScheduledForDeletion and $this->gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidScheduledForDeletion->contains($l)) {
                $this->gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidScheduledForDeletion->remove($this->gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid $gsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid The gsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid object to add.
     */
    protected function doAddGsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid($gsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid)
    {
        $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid[]= $gsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid;
        $gsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid->setEenheidOmschrijving($this);
    }

    /**
     * @param	GsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid $gsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid The gsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid($gsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid)
    {
        if ($this->getGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid()->contains($gsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid)) {
            $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid->remove($this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid->search($gsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid));
            if (null === $this->gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidScheduledForDeletion) {
                $this->gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidScheduledForDeletion = clone $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid;
                $this->gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidScheduledForDeletion->clear();
            }
            $this->gsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidScheduledForDeletion[]= clone $gsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid;
            $gsDailyDefinedDoseRelatedByDddeenheidThesaurusnummerDddeenheid->setEenheidOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsDailyDefinedDose[] List of GsDailyDefinedDose objects
     */
    public function getGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheidJoinGsAtcCodes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsDailyDefinedDoseQuery::create(null, $criteria);
        $query->joinWith('GsAtcCodes', $join_behavior);

        return $this->getGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid($query, $con);
    }

    /**
     * Clears out the collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg()
     */
    public function clearGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg()
    {
        $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg = null; // important to set this to null since that means it is uninitialized
        $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegPartial = null;

        return $this;
    }

    /**
     * reset is the collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($v = true)
    {
        $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegPartial = $v;
    }

    /**
     * Initializes the collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg collection.
     *
     * By default this just sets the collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg collection to an empty array (like clearcollGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($overrideExisting = true)
    {
        if (null !== $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg && !$overrideExisting) {
            return;
        }
        $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg = new PropelObjectCollection();
        $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg->setModel('GsDailyDefinedDose');
    }

    /**
     * Gets an array of GsDailyDefinedDose objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsDailyDefinedDose[] List of GsDailyDefinedDose objects
     * @throws PropelException
     */
    public function getGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegPartial && !$this->isNew();
        if (null === $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg) {
                // return empty collection
                $this->initGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg();
            } else {
                $collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg = GsDailyDefinedDoseQuery::create(null, $criteria)
                    ->filterByToedieningswegOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegPartial && count($collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg)) {
                      $this->initGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg(false);

                      foreach ($collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg as $obj) {
                        if (false == $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg->contains($obj)) {
                          $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg->append($obj);
                        }
                      }

                      $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegPartial = true;
                    }

                    $collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg->getInternalIterator()->rewind();

                    return $collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg;
                }

                if ($partial && $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg) {
                    foreach ($this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg as $obj) {
                        if ($obj->isNew()) {
                            $collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg[] = $obj;
                        }
                    }
                }

                $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg = $collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg;
                $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegPartial = false;
            }
        }

        return $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg;
    }

    /**
     * Sets a collection of GsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg(PropelCollection $gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg, PropelPDO $con = null)
    {
        $gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegToDelete = $this->getGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg(new Criteria(), $con)->diff($gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegScheduledForDeletion = clone $gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegToDelete;

        foreach ($gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegToDelete as $gsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegRemoved) {
            $gsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegRemoved->setToedieningswegOmschrijving(null);
        }

        $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg = null;
        foreach ($gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg as $gsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg) {
            $this->addGsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($gsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg);
        }

        $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg = $gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg;
        $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsDailyDefinedDose objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsDailyDefinedDose objects.
     * @throws PropelException
     */
    public function countGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegPartial && !$this->isNew();
        if (null === $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg());
            }
            $query = GsDailyDefinedDoseQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByToedieningswegOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg);
    }

    /**
     * Method called to associate a GsDailyDefinedDose object to this object
     * through the GsDailyDefinedDose foreign key attribute.
     *
     * @param    GsDailyDefinedDose $l GsDailyDefinedDose
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg(GsDailyDefinedDose $l)
    {
        if ($this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg === null) {
            $this->initGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg();
            $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegPartial = true;
        }

        if (!in_array($l, $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($l);

            if ($this->gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegScheduledForDeletion and $this->gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegScheduledForDeletion->contains($l)) {
                $this->gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegScheduledForDeletion->remove($this->gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg $gsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg The gsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg object to add.
     */
    protected function doAddGsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($gsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg)
    {
        $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg[]= $gsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg;
        $gsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg->setToedieningswegOmschrijving($this);
    }

    /**
     * @param	GsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg $gsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg The gsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($gsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg)
    {
        if ($this->getGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg()->contains($gsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg)) {
            $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg->remove($this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg->search($gsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg));
            if (null === $this->gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegScheduledForDeletion) {
                $this->gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegScheduledForDeletion = clone $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg;
                $this->gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegScheduledForDeletion->clear();
            }
            $this->gsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegScheduledForDeletion[]= clone $gsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg;
            $gsDailyDefinedDoseRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg->setToedieningswegOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsDailyDefinedDose[] List of GsDailyDefinedDose objects
     */
    public function getGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningswegJoinGsAtcCodes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsDailyDefinedDoseQuery::create(null, $criteria);
        $query->joinWith('GsAtcCodes', $join_behavior);

        return $this->getGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg($query, $con);
    }

    /**
     * Clears out the collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel()
     */
    public function clearGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel()
    {
        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel = null; // important to set this to null since that means it is uninitialized
        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelPartial = null;

        return $this;
    }

    /**
     * reset is the collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel($v = true)
    {
        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelPartial = $v;
    }

    /**
     * Initializes the collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel collection.
     *
     * By default this just sets the collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel collection to an empty array (like clearcollGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel($overrideExisting = true)
    {
        if (null !== $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel && !$overrideExisting) {
            return;
        }
        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel = new PropelObjectCollection();
        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel->setModel('GsDeclaratietabelDureGeneesmiddelen');
    }

    /**
     * Gets an array of GsDeclaratietabelDureGeneesmiddelen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsDeclaratietabelDureGeneesmiddelen[] List of GsDeclaratietabelDureGeneesmiddelen objects
     * @throws PropelException
     */
    public function getGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelPartial && !$this->isNew();
        if (null === $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel) {
                // return empty collection
                $this->initGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel();
            } else {
                $collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel = GsDeclaratietabelDureGeneesmiddelenQuery::create(null, $criteria)
                    ->filterByBeleidsregelOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelPartial && count($collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel)) {
                      $this->initGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel(false);

                      foreach ($collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel as $obj) {
                        if (false == $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel->contains($obj)) {
                          $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel->append($obj);
                        }
                      }

                      $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelPartial = true;
                    }

                    $collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel->getInternalIterator()->rewind();

                    return $collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel;
                }

                if ($partial && $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel) {
                    foreach ($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel as $obj) {
                        if ($obj->isNew()) {
                            $collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel[] = $obj;
                        }
                    }
                }

                $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel = $collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel;
                $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelPartial = false;
            }
        }

        return $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel;
    }

    /**
     * Sets a collection of GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel(PropelCollection $gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel, PropelPDO $con = null)
    {
        $gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelToDelete = $this->getGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel(new Criteria(), $con)->diff($gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel);


        $this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelScheduledForDeletion = $gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelToDelete;

        foreach ($gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelToDelete as $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelRemoved) {
            $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelRemoved->setBeleidsregelOmschrijving(null);
        }

        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel = null;
        foreach ($gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel as $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel) {
            $this->addGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel($gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel);
        }

        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel = $gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel;
        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsDeclaratietabelDureGeneesmiddelen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsDeclaratietabelDureGeneesmiddelen objects.
     * @throws PropelException
     */
    public function countGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelPartial && !$this->isNew();
        if (null === $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel());
            }
            $query = GsDeclaratietabelDureGeneesmiddelenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByBeleidsregelOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel);
    }

    /**
     * Method called to associate a GsDeclaratietabelDureGeneesmiddelen object to this object
     * through the GsDeclaratietabelDureGeneesmiddelen foreign key attribute.
     *
     * @param    GsDeclaratietabelDureGeneesmiddelen $l GsDeclaratietabelDureGeneesmiddelen
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel(GsDeclaratietabelDureGeneesmiddelen $l)
    {
        if ($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel === null) {
            $this->initGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel();
            $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelPartial = true;
        }

        if (!in_array($l, $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel($l);

            if ($this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelScheduledForDeletion and $this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelScheduledForDeletion->contains($l)) {
                $this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelScheduledForDeletion->remove($this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel The gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel object to add.
     */
    protected function doAddGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel($gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel)
    {
        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel[]= $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel;
        $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel->setBeleidsregelOmschrijving($this);
    }

    /**
     * @param	GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel The gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel($gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel)
    {
        if ($this->getGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel()->contains($gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel)) {
            $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel->remove($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel->search($gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel));
            if (null === $this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelScheduledForDeletion) {
                $this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelScheduledForDeletion = clone $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel;
                $this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelScheduledForDeletion->clear();
            }
            $this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelScheduledForDeletion[]= clone $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel;
            $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel->setBeleidsregelOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsDeclaratietabelDureGeneesmiddelen[] List of GsDeclaratietabelDureGeneesmiddelen objects
     */
    public function getGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregelJoinGsHandelsproducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsDeclaratietabelDureGeneesmiddelenQuery::create(null, $criteria);
        $query->joinWith('GsHandelsproducten', $join_behavior);

        return $this->getGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel($query, $con);
    }

    /**
     * Clears out the collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid()
     */
    public function clearGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid()
    {
        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid = null; // important to set this to null since that means it is uninitialized
        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidPartial = null;

        return $this;
    }

    /**
     * reset is the collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid($v = true)
    {
        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidPartial = $v;
    }

    /**
     * Initializes the collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid collection.
     *
     * By default this just sets the collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid collection to an empty array (like clearcollGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid($overrideExisting = true)
    {
        if (null !== $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid && !$overrideExisting) {
            return;
        }
        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid = new PropelObjectCollection();
        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid->setModel('GsDeclaratietabelDureGeneesmiddelen');
    }

    /**
     * Gets an array of GsDeclaratietabelDureGeneesmiddelen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsDeclaratietabelDureGeneesmiddelen[] List of GsDeclaratietabelDureGeneesmiddelen objects
     * @throws PropelException
     */
    public function getGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidPartial && !$this->isNew();
        if (null === $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid) {
                // return empty collection
                $this->initGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid();
            } else {
                $collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid = GsDeclaratietabelDureGeneesmiddelenQuery::create(null, $criteria)
                    ->filterByToedieningsEenheidOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidPartial && count($collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid)) {
                      $this->initGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid(false);

                      foreach ($collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid as $obj) {
                        if (false == $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid->contains($obj)) {
                          $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid->append($obj);
                        }
                      }

                      $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidPartial = true;
                    }

                    $collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid->getInternalIterator()->rewind();

                    return $collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid;
                }

                if ($partial && $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid) {
                    foreach ($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid as $obj) {
                        if ($obj->isNew()) {
                            $collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid[] = $obj;
                        }
                    }
                }

                $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid = $collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid;
                $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidPartial = false;
            }
        }

        return $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid;
    }

    /**
     * Sets a collection of GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid(PropelCollection $gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid, PropelPDO $con = null)
    {
        $gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidToDelete = $this->getGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid(new Criteria(), $con)->diff($gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid);


        $this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidScheduledForDeletion = $gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidToDelete;

        foreach ($gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidToDelete as $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheidRemoved) {
            $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheidRemoved->setToedieningsEenheidOmschrijving(null);
        }

        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid = null;
        foreach ($gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid as $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid) {
            $this->addGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid($gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid);
        }

        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid = $gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid;
        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsDeclaratietabelDureGeneesmiddelen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsDeclaratietabelDureGeneesmiddelen objects.
     * @throws PropelException
     */
    public function countGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidPartial && !$this->isNew();
        if (null === $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid());
            }
            $query = GsDeclaratietabelDureGeneesmiddelenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByToedieningsEenheidOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid);
    }

    /**
     * Method called to associate a GsDeclaratietabelDureGeneesmiddelen object to this object
     * through the GsDeclaratietabelDureGeneesmiddelen foreign key attribute.
     *
     * @param    GsDeclaratietabelDureGeneesmiddelen $l GsDeclaratietabelDureGeneesmiddelen
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid(GsDeclaratietabelDureGeneesmiddelen $l)
    {
        if ($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid === null) {
            $this->initGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid();
            $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidPartial = true;
        }

        if (!in_array($l, $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid($l);

            if ($this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidScheduledForDeletion and $this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidScheduledForDeletion->contains($l)) {
                $this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidScheduledForDeletion->remove($this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid The gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid object to add.
     */
    protected function doAddGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid($gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid)
    {
        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid[]= $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid;
        $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid->setToedieningsEenheidOmschrijving($this);
    }

    /**
     * @param	GsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid The gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid($gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid)
    {
        if ($this->getGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid()->contains($gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid)) {
            $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid->remove($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid->search($gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid));
            if (null === $this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidScheduledForDeletion) {
                $this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidScheduledForDeletion = clone $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid;
                $this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidScheduledForDeletion->clear();
            }
            $this->gsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidScheduledForDeletion[]= clone $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid;
            $gsDeclaratietabelDureGeneesmiddelenRelatedByThesaurusVerwijzingEenheidEenheid->setToedieningsEenheidOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsDeclaratietabelDureGeneesmiddelen[] List of GsDeclaratietabelDureGeneesmiddelen objects
     */
    public function getGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheidJoinGsHandelsproducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsDeclaratietabelDureGeneesmiddelenQuery::create(null, $criteria);
        $query->joinWith('GsHandelsproducten', $join_behavior);

        return $this->getGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid($query, $con);
    }

    /**
     * Clears out the collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode()
     */
    public function clearGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode()
    {
        $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode = null; // important to set this to null since that means it is uninitialized
        $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodePartial = null;

        return $this;
    }

    /**
     * reset is the collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($v = true)
    {
        $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodePartial = $v;
    }

    /**
     * Initializes the collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode collection.
     *
     * By default this just sets the collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode collection to an empty array (like clearcollGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($overrideExisting = true)
    {
        if (null !== $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode && !$overrideExisting) {
            return;
        }
        $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode = new PropelObjectCollection();
        $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode->setModel('GsGeneriekeProducten');
    }

    /**
     * Gets an array of GsGeneriekeProducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     * @throws PropelException
     */
    public function getGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodePartial && !$this->isNew();
        if (null === $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode) {
                // return empty collection
                $this->initGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode();
            } else {
                $collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode = GsGeneriekeProductenQuery::create(null, $criteria)
                    ->filterByFarmaceutischeVormOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodePartial && count($collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode)) {
                      $this->initGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode(false);

                      foreach ($collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode as $obj) {
                        if (false == $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode->contains($obj)) {
                          $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode->append($obj);
                        }
                      }

                      $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodePartial = true;
                    }

                    $collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode->getInternalIterator()->rewind();

                    return $collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode;
                }

                if ($partial && $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode) {
                    foreach ($this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode as $obj) {
                        if ($obj->isNew()) {
                            $collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode[] = $obj;
                        }
                    }
                }

                $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode = $collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode;
                $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodePartial = false;
            }
        }

        return $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode;
    }

    /**
     * Sets a collection of GsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode(PropelCollection $gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode, PropelPDO $con = null)
    {
        $gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeToDelete = $this->getGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode(new Criteria(), $con)->diff($gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode);


        $this->gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeScheduledForDeletion = $gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeToDelete;

        foreach ($gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeToDelete as $gsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeRemoved) {
            $gsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeRemoved->setFarmaceutischeVormOmschrijving(null);
        }

        $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode = null;
        foreach ($gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode as $gsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode) {
            $this->addGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($gsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode);
        }

        $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode = $gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode;
        $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsGeneriekeProducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsGeneriekeProducten objects.
     * @throws PropelException
     */
    public function countGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodePartial && !$this->isNew();
        if (null === $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode());
            }
            $query = GsGeneriekeProductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByFarmaceutischeVormOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode);
    }

    /**
     * Method called to associate a GsGeneriekeProducten object to this object
     * through the GsGeneriekeProducten foreign key attribute.
     *
     * @param    GsGeneriekeProducten $l GsGeneriekeProducten
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode(GsGeneriekeProducten $l)
    {
        if ($this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode === null) {
            $this->initGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode();
            $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodePartial = true;
        }

        if (!in_array($l, $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($l);

            if ($this->gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeScheduledForDeletion and $this->gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeScheduledForDeletion->contains($l)) {
                $this->gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeScheduledForDeletion->remove($this->gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode $gsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode The gsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode object to add.
     */
    protected function doAddGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($gsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode)
    {
        $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode[]= $gsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode;
        $gsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode->setFarmaceutischeVormOmschrijving($this);
    }

    /**
     * @param	GsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode $gsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode The gsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($gsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode)
    {
        if ($this->getGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode()->contains($gsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode)) {
            $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode->remove($this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode->search($gsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode));
            if (null === $this->gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeScheduledForDeletion) {
                $this->gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeScheduledForDeletion = clone $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode;
                $this->gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeScheduledForDeletion->clear();
            }
            $this->gsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeScheduledForDeletion[]= clone $gsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode;
            $gsGeneriekeProductenRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode->setFarmaceutischeVormOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     */
    public function getGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeJoinGsAtcCodes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsGeneriekeProductenQuery::create(null, $criteria);
        $query->joinWith('GsAtcCodes', $join_behavior);

        return $this->getGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     */
    public function getGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeJoinGsNamenRelatedByNaamnummerVolledigeGpknaam($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsGeneriekeProductenQuery::create(null, $criteria);
        $query->joinWith('GsNamenRelatedByNaamnummerVolledigeGpknaam', $join_behavior);

        return $this->getGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     */
    public function getGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCodeJoinStofnaam($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsGeneriekeProductenQuery::create(null, $criteria);
        $query->joinWith('Stofnaam', $join_behavior);

        return $this->getGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode($query, $con);
    }

    /**
     * Clears out the collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode()
     */
    public function clearGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode()
    {
        $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode = null; // important to set this to null since that means it is uninitialized
        $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodePartial = null;

        return $this;
    }

    /**
     * reset is the collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode($v = true)
    {
        $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodePartial = $v;
    }

    /**
     * Initializes the collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode collection.
     *
     * By default this just sets the collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode collection to an empty array (like clearcollGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode($overrideExisting = true)
    {
        if (null !== $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode && !$overrideExisting) {
            return;
        }
        $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode = new PropelObjectCollection();
        $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode->setModel('GsGeneriekeProducten');
    }

    /**
     * Gets an array of GsGeneriekeProducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     * @throws PropelException
     */
    public function getGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodePartial && !$this->isNew();
        if (null === $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode) {
                // return empty collection
                $this->initGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode();
            } else {
                $collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode = GsGeneriekeProductenQuery::create(null, $criteria)
                    ->filterByToedieningswegOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodePartial && count($collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode)) {
                      $this->initGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode(false);

                      foreach ($collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode as $obj) {
                        if (false == $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode->contains($obj)) {
                          $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode->append($obj);
                        }
                      }

                      $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodePartial = true;
                    }

                    $collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode->getInternalIterator()->rewind();

                    return $collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode;
                }

                if ($partial && $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode) {
                    foreach ($this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode as $obj) {
                        if ($obj->isNew()) {
                            $collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode[] = $obj;
                        }
                    }
                }

                $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode = $collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode;
                $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodePartial = false;
            }
        }

        return $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode;
    }

    /**
     * Sets a collection of GsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode(PropelCollection $gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode, PropelPDO $con = null)
    {
        $gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeToDelete = $this->getGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode(new Criteria(), $con)->diff($gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode);


        $this->gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeScheduledForDeletion = $gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeToDelete;

        foreach ($gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeToDelete as $gsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCodeRemoved) {
            $gsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCodeRemoved->setToedieningswegOmschrijving(null);
        }

        $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode = null;
        foreach ($gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode as $gsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode) {
            $this->addGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode($gsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode);
        }

        $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode = $gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode;
        $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsGeneriekeProducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsGeneriekeProducten objects.
     * @throws PropelException
     */
    public function countGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodePartial && !$this->isNew();
        if (null === $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode());
            }
            $query = GsGeneriekeProductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByToedieningswegOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode);
    }

    /**
     * Method called to associate a GsGeneriekeProducten object to this object
     * through the GsGeneriekeProducten foreign key attribute.
     *
     * @param    GsGeneriekeProducten $l GsGeneriekeProducten
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode(GsGeneriekeProducten $l)
    {
        if ($this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode === null) {
            $this->initGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode();
            $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodePartial = true;
        }

        if (!in_array($l, $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode($l);

            if ($this->gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeScheduledForDeletion and $this->gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeScheduledForDeletion->contains($l)) {
                $this->gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeScheduledForDeletion->remove($this->gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode $gsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode The gsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode object to add.
     */
    protected function doAddGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode($gsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode)
    {
        $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode[]= $gsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode;
        $gsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode->setToedieningswegOmschrijving($this);
    }

    /**
     * @param	GsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode $gsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode The gsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode($gsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode)
    {
        if ($this->getGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode()->contains($gsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode)) {
            $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode->remove($this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode->search($gsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode));
            if (null === $this->gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeScheduledForDeletion) {
                $this->gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeScheduledForDeletion = clone $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode;
                $this->gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeScheduledForDeletion->clear();
            }
            $this->gsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeScheduledForDeletion[]= clone $gsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode;
            $gsGeneriekeProductenRelatedByToedieningswegThesaurusnummerToedieningswegCode->setToedieningswegOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     */
    public function getGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeJoinGsAtcCodes($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsGeneriekeProductenQuery::create(null, $criteria);
        $query->joinWith('GsAtcCodes', $join_behavior);

        return $this->getGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     */
    public function getGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeJoinGsNamenRelatedByNaamnummerVolledigeGpknaam($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsGeneriekeProductenQuery::create(null, $criteria);
        $query->joinWith('GsNamenRelatedByNaamnummerVolledigeGpknaam', $join_behavior);

        return $this->getGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsGeneriekeProducten[] List of GsGeneriekeProducten objects
     */
    public function getGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCodeJoinStofnaam($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsGeneriekeProductenQuery::create(null, $criteria);
        $query->joinWith('Stofnaam', $join_behavior);

        return $this->getGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode($query, $con);
    }

    /**
     * Clears out the collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid()
     */
    public function clearGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid()
    {
        $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid = null; // important to set this to null since that means it is uninitialized
        $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidPartial = null;

        return $this;
    }

    /**
     * reset is the collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($v = true)
    {
        $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidPartial = $v;
    }

    /**
     * Initializes the collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid collection.
     *
     * By default this just sets the collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid collection to an empty array (like clearcollGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($overrideExisting = true)
    {
        if (null !== $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid && !$overrideExisting) {
            return;
        }
        $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid = new PropelObjectCollection();
        $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid->setModel('GsHandelsproducten');
    }

    /**
     * Gets an array of GsHandelsproducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     * @throws PropelException
     */
    public function getGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidPartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid) {
                // return empty collection
                $this->initGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid();
            } else {
                $collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid = GsHandelsproductenQuery::create(null, $criteria)
                    ->filterByInkoophoeveelheidOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidPartial && count($collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid)) {
                      $this->initGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid(false);

                      foreach ($collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid as $obj) {
                        if (false == $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid->contains($obj)) {
                          $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid->append($obj);
                        }
                      }

                      $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidPartial = true;
                    }

                    $collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid->getInternalIterator()->rewind();

                    return $collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid;
                }

                if ($partial && $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid) {
                    foreach ($this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid as $obj) {
                        if ($obj->isNew()) {
                            $collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid[] = $obj;
                        }
                    }
                }

                $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid = $collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid;
                $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidPartial = false;
            }
        }

        return $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid;
    }

    /**
     * Sets a collection of GsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid(PropelCollection $gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid, PropelPDO $con = null)
    {
        $gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidToDelete = $this->getGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid(new Criteria(), $con)->diff($gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid);


        $this->gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidScheduledForDeletion = $gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidToDelete;

        foreach ($gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidToDelete as $gsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidRemoved) {
            $gsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidRemoved->setInkoophoeveelheidOmschrijving(null);
        }

        $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid = null;
        foreach ($gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid as $gsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid) {
            $this->addGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($gsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid);
        }

        $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid = $gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid;
        $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsHandelsproducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsHandelsproducten objects.
     * @throws PropelException
     */
    public function countGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidPartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid());
            }
            $query = GsHandelsproductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByInkoophoeveelheidOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid);
    }

    /**
     * Method called to associate a GsHandelsproducten object to this object
     * through the GsHandelsproducten foreign key attribute.
     *
     * @param    GsHandelsproducten $l GsHandelsproducten
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid(GsHandelsproducten $l)
    {
        if ($this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid === null) {
            $this->initGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid();
            $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidPartial = true;
        }

        if (!in_array($l, $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($l);

            if ($this->gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidScheduledForDeletion and $this->gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidScheduledForDeletion->contains($l)) {
                $this->gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidScheduledForDeletion->remove($this->gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid $gsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid The gsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid object to add.
     */
    protected function doAddGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($gsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid)
    {
        $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid[]= $gsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid;
        $gsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid->setInkoophoeveelheidOmschrijving($this);
    }

    /**
     * @param	GsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid $gsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid The gsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($gsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid)
    {
        if ($this->getGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid()->contains($gsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid)) {
            $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid->remove($this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid->search($gsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid));
            if (null === $this->gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidScheduledForDeletion) {
                $this->gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidScheduledForDeletion = clone $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid;
                $this->gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidScheduledForDeletion->clear();
            }
            $this->gsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidScheduledForDeletion[]= clone $gsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid;
            $gsHandelsproductenRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid->setInkoophoeveelheidOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidJoinGsVoorschrijfprGeneesmiddelIdentific($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsVoorschrijfprGeneesmiddelIdentific', $join_behavior);

        return $this->getGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheidJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid($query, $con);
    }

    /**
     * Clears out the collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking()
     */
    public function clearGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking()
    {
        $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking = null; // important to set this to null since that means it is uninitialized
        $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingPartial = null;

        return $this;
    }

    /**
     * reset is the collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($v = true)
    {
        $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingPartial = $v;
    }

    /**
     * Initializes the collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking collection.
     *
     * By default this just sets the collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking collection to an empty array (like clearcollGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($overrideExisting = true)
    {
        if (null !== $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking && !$overrideExisting) {
            return;
        }
        $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking = new PropelObjectCollection();
        $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking->setModel('GsHandelsproducten');
    }

    /**
     * Gets an array of GsHandelsproducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     * @throws PropelException
     */
    public function getGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingPartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking) {
                // return empty collection
                $this->initGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking();
            } else {
                $collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking = GsHandelsproductenQuery::create(null, $criteria)
                    ->filterByBasiseenheidOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingPartial && count($collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking)) {
                      $this->initGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking(false);

                      foreach ($collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking as $obj) {
                        if (false == $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking->contains($obj)) {
                          $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking->append($obj);
                        }
                      }

                      $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingPartial = true;
                    }

                    $collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking->getInternalIterator()->rewind();

                    return $collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking;
                }

                if ($partial && $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking) {
                    foreach ($this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking as $obj) {
                        if ($obj->isNew()) {
                            $collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking[] = $obj;
                        }
                    }
                }

                $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking = $collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking;
                $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingPartial = false;
            }
        }

        return $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking;
    }

    /**
     * Sets a collection of GsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking(PropelCollection $gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking, PropelPDO $con = null)
    {
        $gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingToDelete = $this->getGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking(new Criteria(), $con)->diff($gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking);


        $this->gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingScheduledForDeletion = $gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingToDelete;

        foreach ($gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingToDelete as $gsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingRemoved) {
            $gsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingRemoved->setBasiseenheidOmschrijving(null);
        }

        $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking = null;
        foreach ($gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking as $gsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking) {
            $this->addGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($gsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking);
        }

        $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking = $gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking;
        $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsHandelsproducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsHandelsproducten objects.
     * @throws PropelException
     */
    public function countGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingPartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking());
            }
            $query = GsHandelsproductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByBasiseenheidOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking);
    }

    /**
     * Method called to associate a GsHandelsproducten object to this object
     * through the GsHandelsproducten foreign key attribute.
     *
     * @param    GsHandelsproducten $l GsHandelsproducten
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking(GsHandelsproducten $l)
    {
        if ($this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking === null) {
            $this->initGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking();
            $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingPartial = true;
        }

        if (!in_array($l, $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($l);

            if ($this->gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingScheduledForDeletion and $this->gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingScheduledForDeletion->contains($l)) {
                $this->gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingScheduledForDeletion->remove($this->gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking $gsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking The gsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking object to add.
     */
    protected function doAddGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($gsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking)
    {
        $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking[]= $gsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking;
        $gsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking->setBasiseenheidOmschrijving($this);
    }

    /**
     * @param	GsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking $gsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking The gsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($gsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking)
    {
        if ($this->getGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking()->contains($gsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking)) {
            $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking->remove($this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking->search($gsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking));
            if (null === $this->gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingScheduledForDeletion) {
                $this->gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingScheduledForDeletion = clone $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking;
                $this->gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingScheduledForDeletion->clear();
            }
            $this->gsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingScheduledForDeletion[]= clone $gsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking;
            $gsHandelsproductenRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking->setBasiseenheidOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingJoinGsVoorschrijfprGeneesmiddelIdentific($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsVoorschrijfprGeneesmiddelIdentific', $join_behavior);

        return $this->getGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakkingJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking($query, $con);
    }

    /**
     * Clears out the collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode()
     */
    public function clearGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode()
    {
        $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode = null; // important to set this to null since that means it is uninitialized
        $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodePartial = null;

        return $this;
    }

    /**
     * reset is the collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($v = true)
    {
        $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodePartial = $v;
    }

    /**
     * Initializes the collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode collection.
     *
     * By default this just sets the collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode collection to an empty array (like clearcollGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($overrideExisting = true)
    {
        if (null !== $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode && !$overrideExisting) {
            return;
        }
        $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode = new PropelObjectCollection();
        $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode->setModel('GsHandelsproducten');
    }

    /**
     * Gets an array of GsHandelsproducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     * @throws PropelException
     */
    public function getGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodePartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode) {
                // return empty collection
                $this->initGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode();
            } else {
                $collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode = GsHandelsproductenQuery::create(null, $criteria)
                    ->filterByEmballageMateriaalOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodePartial && count($collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode)) {
                      $this->initGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode(false);

                      foreach ($collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode as $obj) {
                        if (false == $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode->contains($obj)) {
                          $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode->append($obj);
                        }
                      }

                      $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodePartial = true;
                    }

                    $collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode->getInternalIterator()->rewind();

                    return $collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode;
                }

                if ($partial && $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode) {
                    foreach ($this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode as $obj) {
                        if ($obj->isNew()) {
                            $collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode[] = $obj;
                        }
                    }
                }

                $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode = $collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode;
                $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodePartial = false;
            }
        }

        return $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode;
    }

    /**
     * Sets a collection of GsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode(PropelCollection $gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode, PropelPDO $con = null)
    {
        $gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeToDelete = $this->getGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode(new Criteria(), $con)->diff($gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode);


        $this->gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeScheduledForDeletion = $gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeToDelete;

        foreach ($gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeToDelete as $gsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeRemoved) {
            $gsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeRemoved->setEmballageMateriaalOmschrijving(null);
        }

        $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode = null;
        foreach ($gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode as $gsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode) {
            $this->addGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($gsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode);
        }

        $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode = $gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode;
        $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsHandelsproducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsHandelsproducten objects.
     * @throws PropelException
     */
    public function countGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodePartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode());
            }
            $query = GsHandelsproductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmballageMateriaalOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode);
    }

    /**
     * Method called to associate a GsHandelsproducten object to this object
     * through the GsHandelsproducten foreign key attribute.
     *
     * @param    GsHandelsproducten $l GsHandelsproducten
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode(GsHandelsproducten $l)
    {
        if ($this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode === null) {
            $this->initGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode();
            $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodePartial = true;
        }

        if (!in_array($l, $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($l);

            if ($this->gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeScheduledForDeletion and $this->gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeScheduledForDeletion->contains($l)) {
                $this->gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeScheduledForDeletion->remove($this->gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode $gsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode The gsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode object to add.
     */
    protected function doAddGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($gsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode)
    {
        $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode[]= $gsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode;
        $gsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode->setEmballageMateriaalOmschrijving($this);
    }

    /**
     * @param	GsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode $gsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode The gsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($gsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode)
    {
        if ($this->getGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode()->contains($gsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode)) {
            $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode->remove($this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode->search($gsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode));
            if (null === $this->gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeScheduledForDeletion) {
                $this->gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeScheduledForDeletion = clone $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode;
                $this->gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeScheduledForDeletion->clear();
            }
            $this->gsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeScheduledForDeletion[]= clone $gsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode;
            $gsHandelsproductenRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode->setEmballageMateriaalOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeJoinGsVoorschrijfprGeneesmiddelIdentific($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsVoorschrijfprGeneesmiddelIdentific', $join_behavior);

        return $this->getGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKodeJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode($query, $con);
    }

    /**
     * Clears out the collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode()
     */
    public function clearGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode()
    {
        $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode = null; // important to set this to null since that means it is uninitialized
        $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodePartial = null;

        return $this;
    }

    /**
     * reset is the collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($v = true)
    {
        $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodePartial = $v;
    }

    /**
     * Initializes the collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode collection.
     *
     * By default this just sets the collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode collection to an empty array (like clearcollGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($overrideExisting = true)
    {
        if (null !== $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode && !$overrideExisting) {
            return;
        }
        $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode = new PropelObjectCollection();
        $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode->setModel('GsHandelsproducten');
    }

    /**
     * Gets an array of GsHandelsproducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     * @throws PropelException
     */
    public function getGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodePartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode) {
                // return empty collection
                $this->initGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode();
            } else {
                $collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode = GsHandelsproductenQuery::create(null, $criteria)
                    ->filterByEmballageSluitingOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodePartial && count($collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode)) {
                      $this->initGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode(false);

                      foreach ($collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode as $obj) {
                        if (false == $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode->contains($obj)) {
                          $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode->append($obj);
                        }
                      }

                      $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodePartial = true;
                    }

                    $collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode->getInternalIterator()->rewind();

                    return $collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode;
                }

                if ($partial && $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode) {
                    foreach ($this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode as $obj) {
                        if ($obj->isNew()) {
                            $collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode[] = $obj;
                        }
                    }
                }

                $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode = $collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode;
                $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodePartial = false;
            }
        }

        return $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode;
    }

    /**
     * Sets a collection of GsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode(PropelCollection $gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode, PropelPDO $con = null)
    {
        $gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeToDelete = $this->getGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode(new Criteria(), $con)->diff($gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode);


        $this->gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeScheduledForDeletion = $gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeToDelete;

        foreach ($gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeToDelete as $gsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeRemoved) {
            $gsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeRemoved->setEmballageSluitingOmschrijving(null);
        }

        $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode = null;
        foreach ($gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode as $gsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode) {
            $this->addGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($gsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode);
        }

        $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode = $gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode;
        $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsHandelsproducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsHandelsproducten objects.
     * @throws PropelException
     */
    public function countGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodePartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode());
            }
            $query = GsHandelsproductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmballageSluitingOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode);
    }

    /**
     * Method called to associate a GsHandelsproducten object to this object
     * through the GsHandelsproducten foreign key attribute.
     *
     * @param    GsHandelsproducten $l GsHandelsproducten
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode(GsHandelsproducten $l)
    {
        if ($this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode === null) {
            $this->initGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode();
            $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodePartial = true;
        }

        if (!in_array($l, $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($l);

            if ($this->gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeScheduledForDeletion and $this->gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeScheduledForDeletion->contains($l)) {
                $this->gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeScheduledForDeletion->remove($this->gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode $gsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode The gsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode object to add.
     */
    protected function doAddGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($gsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode)
    {
        $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode[]= $gsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode;
        $gsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode->setEmballageSluitingOmschrijving($this);
    }

    /**
     * @param	GsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode $gsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode The gsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($gsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode)
    {
        if ($this->getGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode()->contains($gsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode)) {
            $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode->remove($this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode->search($gsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode));
            if (null === $this->gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeScheduledForDeletion) {
                $this->gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeScheduledForDeletion = clone $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode;
                $this->gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeScheduledForDeletion->clear();
            }
            $this->gsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeScheduledForDeletion[]= clone $gsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode;
            $gsHandelsproductenRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode->setEmballageSluitingOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeJoinGsVoorschrijfprGeneesmiddelIdentific($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsVoorschrijfprGeneesmiddelIdentific', $join_behavior);

        return $this->getGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKodeJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode($query, $con);
    }

    /**
     * Clears out the collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode()
     */
    public function clearGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode()
    {
        $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode = null; // important to set this to null since that means it is uninitialized
        $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodePartial = null;

        return $this;
    }

    /**
     * reset is the collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($v = true)
    {
        $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodePartial = $v;
    }

    /**
     * Initializes the collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode collection.
     *
     * By default this just sets the collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode collection to an empty array (like clearcollGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($overrideExisting = true)
    {
        if (null !== $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode && !$overrideExisting) {
            return;
        }
        $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode = new PropelObjectCollection();
        $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode->setModel('GsHandelsproducten');
    }

    /**
     * Gets an array of GsHandelsproducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     * @throws PropelException
     */
    public function getGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodePartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode) {
                // return empty collection
                $this->initGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode();
            } else {
                $collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode = GsHandelsproductenQuery::create(null, $criteria)
                    ->filterByEmballageDoseerinrichtingOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodePartial && count($collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode)) {
                      $this->initGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode(false);

                      foreach ($collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode as $obj) {
                        if (false == $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode->contains($obj)) {
                          $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode->append($obj);
                        }
                      }

                      $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodePartial = true;
                    }

                    $collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode->getInternalIterator()->rewind();

                    return $collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode;
                }

                if ($partial && $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode) {
                    foreach ($this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode as $obj) {
                        if ($obj->isNew()) {
                            $collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode[] = $obj;
                        }
                    }
                }

                $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode = $collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode;
                $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodePartial = false;
            }
        }

        return $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode;
    }

    /**
     * Sets a collection of GsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode(PropelCollection $gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode, PropelPDO $con = null)
    {
        $gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeToDelete = $this->getGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode(new Criteria(), $con)->diff($gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode);


        $this->gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeScheduledForDeletion = $gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeToDelete;

        foreach ($gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeToDelete as $gsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeRemoved) {
            $gsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeRemoved->setEmballageDoseerinrichtingOmschrijving(null);
        }

        $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode = null;
        foreach ($gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode as $gsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode) {
            $this->addGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($gsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode);
        }

        $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode = $gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode;
        $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsHandelsproducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsHandelsproducten objects.
     * @throws PropelException
     */
    public function countGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodePartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode());
            }
            $query = GsHandelsproductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmballageDoseerinrichtingOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode);
    }

    /**
     * Method called to associate a GsHandelsproducten object to this object
     * through the GsHandelsproducten foreign key attribute.
     *
     * @param    GsHandelsproducten $l GsHandelsproducten
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode(GsHandelsproducten $l)
    {
        if ($this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode === null) {
            $this->initGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode();
            $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodePartial = true;
        }

        if (!in_array($l, $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($l);

            if ($this->gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeScheduledForDeletion and $this->gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeScheduledForDeletion->contains($l)) {
                $this->gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeScheduledForDeletion->remove($this->gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode $gsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode The gsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode object to add.
     */
    protected function doAddGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($gsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode)
    {
        $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode[]= $gsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode;
        $gsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode->setEmballageDoseerinrichtingOmschrijving($this);
    }

    /**
     * @param	GsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode $gsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode The gsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($gsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode)
    {
        if ($this->getGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode()->contains($gsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode)) {
            $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode->remove($this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode->search($gsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode));
            if (null === $this->gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeScheduledForDeletion) {
                $this->gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeScheduledForDeletion = clone $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode;
                $this->gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeScheduledForDeletion->clear();
            }
            $this->gsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeScheduledForDeletion[]= clone $gsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode;
            $gsHandelsproductenRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode->setEmballageDoseerinrichtingOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeJoinGsVoorschrijfprGeneesmiddelIdentific($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsVoorschrijfprGeneesmiddelIdentific', $join_behavior);

        return $this->getGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKodeJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode($query, $con);
    }

    /**
     * Clears out the collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode()
     */
    public function clearGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode()
    {
        $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode = null; // important to set this to null since that means it is uninitialized
        $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKodePartial = null;

        return $this;
    }

    /**
     * reset is the collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode($v = true)
    {
        $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKodePartial = $v;
    }

    /**
     * Initializes the collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode collection.
     *
     * By default this just sets the collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode collection to an empty array (like clearcollGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode($overrideExisting = true)
    {
        if (null !== $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode && !$overrideExisting) {
            return;
        }
        $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode = new PropelObjectCollection();
        $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode->setModel('GsHandelsproducten');
    }

    /**
     * Gets an array of GsHandelsproducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     * @throws PropelException
     */
    public function getGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKodePartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode) {
                // return empty collection
                $this->initGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode();
            } else {
                $collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode = GsHandelsproductenQuery::create(null, $criteria)
                    ->filterByKleurOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKodePartial && count($collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode)) {
                      $this->initGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode(false);

                      foreach ($collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode as $obj) {
                        if (false == $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode->contains($obj)) {
                          $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode->append($obj);
                        }
                      }

                      $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKodePartial = true;
                    }

                    $collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode->getInternalIterator()->rewind();

                    return $collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode;
                }

                if ($partial && $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode) {
                    foreach ($this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode as $obj) {
                        if ($obj->isNew()) {
                            $collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode[] = $obj;
                        }
                    }
                }

                $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode = $collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode;
                $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKodePartial = false;
            }
        }

        return $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode;
    }

    /**
     * Sets a collection of GsHandelsproductenRelatedByKleurThesaurusnummerKleurKode objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsHandelsproductensRelatedByKleurThesaurusnummerKleurKode A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode(PropelCollection $gsHandelsproductensRelatedByKleurThesaurusnummerKleurKode, PropelPDO $con = null)
    {
        $gsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeToDelete = $this->getGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode(new Criteria(), $con)->diff($gsHandelsproductensRelatedByKleurThesaurusnummerKleurKode);


        $this->gsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeScheduledForDeletion = $gsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeToDelete;

        foreach ($gsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeToDelete as $gsHandelsproductenRelatedByKleurThesaurusnummerKleurKodeRemoved) {
            $gsHandelsproductenRelatedByKleurThesaurusnummerKleurKodeRemoved->setKleurOmschrijving(null);
        }

        $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode = null;
        foreach ($gsHandelsproductensRelatedByKleurThesaurusnummerKleurKode as $gsHandelsproductenRelatedByKleurThesaurusnummerKleurKode) {
            $this->addGsHandelsproductenRelatedByKleurThesaurusnummerKleurKode($gsHandelsproductenRelatedByKleurThesaurusnummerKleurKode);
        }

        $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode = $gsHandelsproductensRelatedByKleurThesaurusnummerKleurKode;
        $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKodePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsHandelsproducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsHandelsproducten objects.
     * @throws PropelException
     */
    public function countGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKodePartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode());
            }
            $query = GsHandelsproductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByKleurOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode);
    }

    /**
     * Method called to associate a GsHandelsproducten object to this object
     * through the GsHandelsproducten foreign key attribute.
     *
     * @param    GsHandelsproducten $l GsHandelsproducten
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsHandelsproductenRelatedByKleurThesaurusnummerKleurKode(GsHandelsproducten $l)
    {
        if ($this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode === null) {
            $this->initGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode();
            $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKodePartial = true;
        }

        if (!in_array($l, $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsHandelsproductenRelatedByKleurThesaurusnummerKleurKode($l);

            if ($this->gsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeScheduledForDeletion and $this->gsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeScheduledForDeletion->contains($l)) {
                $this->gsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeScheduledForDeletion->remove($this->gsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsHandelsproductenRelatedByKleurThesaurusnummerKleurKode $gsHandelsproductenRelatedByKleurThesaurusnummerKleurKode The gsHandelsproductenRelatedByKleurThesaurusnummerKleurKode object to add.
     */
    protected function doAddGsHandelsproductenRelatedByKleurThesaurusnummerKleurKode($gsHandelsproductenRelatedByKleurThesaurusnummerKleurKode)
    {
        $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode[]= $gsHandelsproductenRelatedByKleurThesaurusnummerKleurKode;
        $gsHandelsproductenRelatedByKleurThesaurusnummerKleurKode->setKleurOmschrijving($this);
    }

    /**
     * @param	GsHandelsproductenRelatedByKleurThesaurusnummerKleurKode $gsHandelsproductenRelatedByKleurThesaurusnummerKleurKode The gsHandelsproductenRelatedByKleurThesaurusnummerKleurKode object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsHandelsproductenRelatedByKleurThesaurusnummerKleurKode($gsHandelsproductenRelatedByKleurThesaurusnummerKleurKode)
    {
        if ($this->getGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode()->contains($gsHandelsproductenRelatedByKleurThesaurusnummerKleurKode)) {
            $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode->remove($this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode->search($gsHandelsproductenRelatedByKleurThesaurusnummerKleurKode));
            if (null === $this->gsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeScheduledForDeletion) {
                $this->gsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeScheduledForDeletion = clone $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode;
                $this->gsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeScheduledForDeletion->clear();
            }
            $this->gsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeScheduledForDeletion[]= clone $gsHandelsproductenRelatedByKleurThesaurusnummerKleurKode;
            $gsHandelsproductenRelatedByKleurThesaurusnummerKleurKode->setKleurOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByKleurThesaurusnummerKleurKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeJoinGsVoorschrijfprGeneesmiddelIdentific($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsVoorschrijfprGeneesmiddelIdentific', $join_behavior);

        return $this->getGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByKleurThesaurusnummerKleurKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByKleurThesaurusnummerKleurKodeJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode($query, $con);
    }

    /**
     * Clears out the collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode()
     */
    public function clearGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode()
    {
        $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode = null; // important to set this to null since that means it is uninitialized
        $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodePartial = null;

        return $this;
    }

    /**
     * reset is the collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode($v = true)
    {
        $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodePartial = $v;
    }

    /**
     * Initializes the collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode collection.
     *
     * By default this just sets the collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode collection to an empty array (like clearcollGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode($overrideExisting = true)
    {
        if (null !== $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode && !$overrideExisting) {
            return;
        }
        $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode = new PropelObjectCollection();
        $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode->setModel('GsHandelsproducten');
    }

    /**
     * Gets an array of GsHandelsproducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     * @throws PropelException
     */
    public function getGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodePartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode) {
                // return empty collection
                $this->initGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode();
            } else {
                $collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode = GsHandelsproductenQuery::create(null, $criteria)
                    ->filterBySmaakOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodePartial && count($collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode)) {
                      $this->initGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode(false);

                      foreach ($collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode as $obj) {
                        if (false == $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode->contains($obj)) {
                          $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode->append($obj);
                        }
                      }

                      $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodePartial = true;
                    }

                    $collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode->getInternalIterator()->rewind();

                    return $collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode;
                }

                if ($partial && $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode) {
                    foreach ($this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode as $obj) {
                        if ($obj->isNew()) {
                            $collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode[] = $obj;
                        }
                    }
                }

                $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode = $collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode;
                $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodePartial = false;
            }
        }

        return $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode;
    }

    /**
     * Sets a collection of GsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode(PropelCollection $gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode, PropelPDO $con = null)
    {
        $gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeToDelete = $this->getGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode(new Criteria(), $con)->diff($gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode);


        $this->gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeScheduledForDeletion = $gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeToDelete;

        foreach ($gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeToDelete as $gsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKodeRemoved) {
            $gsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKodeRemoved->setSmaakOmschrijving(null);
        }

        $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode = null;
        foreach ($gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode as $gsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode) {
            $this->addGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode($gsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode);
        }

        $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode = $gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode;
        $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsHandelsproducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsHandelsproducten objects.
     * @throws PropelException
     */
    public function countGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodePartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode());
            }
            $query = GsHandelsproductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySmaakOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode);
    }

    /**
     * Method called to associate a GsHandelsproducten object to this object
     * through the GsHandelsproducten foreign key attribute.
     *
     * @param    GsHandelsproducten $l GsHandelsproducten
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode(GsHandelsproducten $l)
    {
        if ($this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode === null) {
            $this->initGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode();
            $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodePartial = true;
        }

        if (!in_array($l, $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode($l);

            if ($this->gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeScheduledForDeletion and $this->gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeScheduledForDeletion->contains($l)) {
                $this->gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeScheduledForDeletion->remove($this->gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode $gsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode The gsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode object to add.
     */
    protected function doAddGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode($gsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode)
    {
        $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode[]= $gsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode;
        $gsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode->setSmaakOmschrijving($this);
    }

    /**
     * @param	GsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode $gsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode The gsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode($gsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode)
    {
        if ($this->getGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode()->contains($gsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode)) {
            $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode->remove($this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode->search($gsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode));
            if (null === $this->gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeScheduledForDeletion) {
                $this->gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeScheduledForDeletion = clone $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode;
                $this->gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeScheduledForDeletion->clear();
            }
            $this->gsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeScheduledForDeletion[]= clone $gsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode;
            $gsHandelsproductenRelatedBySmaakThesaurusnummerSmaakKode->setSmaakOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeJoinGsVoorschrijfprGeneesmiddelIdentific($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsVoorschrijfprGeneesmiddelIdentific', $join_behavior);

        return $this->getGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKodeJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode($query, $con);
    }

    /**
     * Clears out the collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode()
     */
    public function clearGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode()
    {
        $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode = null; // important to set this to null since that means it is uninitialized
        $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodePartial = null;

        return $this;
    }

    /**
     * reset is the collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($v = true)
    {
        $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodePartial = $v;
    }

    /**
     * Initializes the collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode collection.
     *
     * By default this just sets the collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode collection to an empty array (like clearcollGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($overrideExisting = true)
    {
        if (null !== $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode && !$overrideExisting) {
            return;
        }
        $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode = new PropelObjectCollection();
        $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode->setModel('GsHandelsproducten');
    }

    /**
     * Gets an array of GsHandelsproducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     * @throws PropelException
     */
    public function getGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodePartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode) {
                // return empty collection
                $this->initGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode();
            } else {
                $collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode = GsHandelsproductenQuery::create(null, $criteria)
                    ->filterByBereidingsvoorschrijftOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodePartial && count($collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode)) {
                      $this->initGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode(false);

                      foreach ($collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode as $obj) {
                        if (false == $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode->contains($obj)) {
                          $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode->append($obj);
                        }
                      }

                      $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodePartial = true;
                    }

                    $collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode->getInternalIterator()->rewind();

                    return $collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode;
                }

                if ($partial && $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode) {
                    foreach ($this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode as $obj) {
                        if ($obj->isNew()) {
                            $collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode[] = $obj;
                        }
                    }
                }

                $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode = $collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode;
                $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodePartial = false;
            }
        }

        return $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode;
    }

    /**
     * Sets a collection of GsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode(PropelCollection $gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode, PropelPDO $con = null)
    {
        $gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeToDelete = $this->getGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode(new Criteria(), $con)->diff($gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode);


        $this->gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeScheduledForDeletion = $gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeToDelete;

        foreach ($gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeToDelete as $gsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeRemoved) {
            $gsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeRemoved->setBereidingsvoorschrijftOmschrijving(null);
        }

        $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode = null;
        foreach ($gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode as $gsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode) {
            $this->addGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($gsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode);
        }

        $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode = $gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode;
        $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsHandelsproducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsHandelsproducten objects.
     * @throws PropelException
     */
    public function countGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodePartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode());
            }
            $query = GsHandelsproductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByBereidingsvoorschrijftOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode);
    }

    /**
     * Method called to associate a GsHandelsproducten object to this object
     * through the GsHandelsproducten foreign key attribute.
     *
     * @param    GsHandelsproducten $l GsHandelsproducten
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode(GsHandelsproducten $l)
    {
        if ($this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode === null) {
            $this->initGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode();
            $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodePartial = true;
        }

        if (!in_array($l, $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($l);

            if ($this->gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeScheduledForDeletion and $this->gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeScheduledForDeletion->contains($l)) {
                $this->gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeScheduledForDeletion->remove($this->gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode $gsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode The gsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode object to add.
     */
    protected function doAddGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($gsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode)
    {
        $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode[]= $gsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode;
        $gsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode->setBereidingsvoorschrijftOmschrijving($this);
    }

    /**
     * @param	GsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode $gsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode The gsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($gsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode)
    {
        if ($this->getGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode()->contains($gsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode)) {
            $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode->remove($this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode->search($gsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode));
            if (null === $this->gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeScheduledForDeletion) {
                $this->gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeScheduledForDeletion = clone $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode;
                $this->gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeScheduledForDeletion->clear();
            }
            $this->gsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeScheduledForDeletion[]= clone $gsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode;
            $gsHandelsproductenRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode->setBereidingsvoorschrijftOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeJoinGsVoorschrijfprGeneesmiddelIdentific($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsVoorschrijfprGeneesmiddelIdentific', $join_behavior);

        return $this->getGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKodeJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode($query, $con);
    }

    /**
     * Clears out the collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode()
     */
    public function clearGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode()
    {
        $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode = null; // important to set this to null since that means it is uninitialized
        $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodePartial = null;

        return $this;
    }

    /**
     * reset is the collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode($v = true)
    {
        $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodePartial = $v;
    }

    /**
     * Initializes the collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode collection.
     *
     * By default this just sets the collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode collection to an empty array (like clearcollGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode($overrideExisting = true)
    {
        if (null !== $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode && !$overrideExisting) {
            return;
        }
        $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode = new PropelObjectCollection();
        $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode->setModel('GsHandelsproducten');
    }

    /**
     * Gets an array of GsHandelsproducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     * @throws PropelException
     */
    public function getGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodePartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode) {
                // return empty collection
                $this->initGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode();
            } else {
                $collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode = GsHandelsproductenQuery::create(null, $criteria)
                    ->filterByProduktgroepOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodePartial && count($collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode)) {
                      $this->initGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode(false);

                      foreach ($collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode as $obj) {
                        if (false == $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode->contains($obj)) {
                          $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode->append($obj);
                        }
                      }

                      $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodePartial = true;
                    }

                    $collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode->getInternalIterator()->rewind();

                    return $collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode;
                }

                if ($partial && $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode) {
                    foreach ($this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode as $obj) {
                        if ($obj->isNew()) {
                            $collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode[] = $obj;
                        }
                    }
                }

                $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode = $collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode;
                $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodePartial = false;
            }
        }

        return $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode;
    }

    /**
     * Sets a collection of GsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode(PropelCollection $gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode, PropelPDO $con = null)
    {
        $gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeToDelete = $this->getGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode(new Criteria(), $con)->diff($gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode);


        $this->gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeScheduledForDeletion = $gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeToDelete;

        foreach ($gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeToDelete as $gsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKodeRemoved) {
            $gsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKodeRemoved->setProduktgroepOmschrijving(null);
        }

        $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode = null;
        foreach ($gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode as $gsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode) {
            $this->addGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode($gsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode);
        }

        $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode = $gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode;
        $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsHandelsproducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsHandelsproducten objects.
     * @throws PropelException
     */
    public function countGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodePartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode());
            }
            $query = GsHandelsproductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProduktgroepOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode);
    }

    /**
     * Method called to associate a GsHandelsproducten object to this object
     * through the GsHandelsproducten foreign key attribute.
     *
     * @param    GsHandelsproducten $l GsHandelsproducten
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode(GsHandelsproducten $l)
    {
        if ($this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode === null) {
            $this->initGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode();
            $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodePartial = true;
        }

        if (!in_array($l, $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode($l);

            if ($this->gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeScheduledForDeletion and $this->gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeScheduledForDeletion->contains($l)) {
                $this->gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeScheduledForDeletion->remove($this->gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode $gsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode The gsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode object to add.
     */
    protected function doAddGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode($gsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode)
    {
        $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode[]= $gsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode;
        $gsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode->setProduktgroepOmschrijving($this);
    }

    /**
     * @param	GsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode $gsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode The gsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode($gsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode)
    {
        if ($this->getGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode()->contains($gsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode)) {
            $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode->remove($this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode->search($gsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode));
            if (null === $this->gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeScheduledForDeletion) {
                $this->gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeScheduledForDeletion = clone $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode;
                $this->gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeScheduledForDeletion->clear();
            }
            $this->gsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeScheduledForDeletion[]= clone $gsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode;
            $gsHandelsproductenRelatedByProduktgroepThesaurusnummerProduktgroepKode->setProduktgroepOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeJoinGsVoorschrijfprGeneesmiddelIdentific($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsVoorschrijfprGeneesmiddelIdentific', $join_behavior);

        return $this->getGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKodeJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode($query, $con);
    }

    /**
     * Clears out the collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking()
     */
    public function clearGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking()
    {
        $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking = null; // important to set this to null since that means it is uninitialized
        $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial = null;

        return $this;
    }

    /**
     * reset is the collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking($v = true)
    {
        $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial = $v;
    }

    /**
     * Initializes the collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking collection.
     *
     * By default this just sets the collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking collection to an empty array (like clearcollGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking($overrideExisting = true)
    {
        if (null !== $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking && !$overrideExisting) {
            return;
        }
        $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking = new PropelObjectCollection();
        $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking->setModel('GsHandelsproducten');
    }

    /**
     * Gets an array of GsHandelsproducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     * @throws PropelException
     */
    public function getGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking) {
                // return empty collection
                $this->initGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking();
            } else {
                $collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking = GsHandelsproductenQuery::create(null, $criteria)
                    ->filterByRzvVerstrekkingOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial && count($collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking)) {
                      $this->initGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking(false);

                      foreach ($collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking as $obj) {
                        if (false == $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking->contains($obj)) {
                          $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking->append($obj);
                        }
                      }

                      $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial = true;
                    }

                    $collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking->getInternalIterator()->rewind();

                    return $collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking;
                }

                if ($partial && $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking) {
                    foreach ($this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking as $obj) {
                        if ($obj->isNew()) {
                            $collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking[] = $obj;
                        }
                    }
                }

                $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking = $collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking;
                $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial = false;
            }
        }

        return $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking;
    }

    /**
     * Sets a collection of GsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking(PropelCollection $gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking, PropelPDO $con = null)
    {
        $gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingToDelete = $this->getGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking(new Criteria(), $con)->diff($gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking);


        $this->gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion = $gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingToDelete;

        foreach ($gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingToDelete as $gsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekkingRemoved) {
            $gsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekkingRemoved->setRzvVerstrekkingOmschrijving(null);
        }

        $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking = null;
        foreach ($gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking as $gsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking) {
            $this->addGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking($gsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking);
        }

        $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking = $gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking;
        $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsHandelsproducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsHandelsproducten objects.
     * @throws PropelException
     */
    public function countGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking());
            }
            $query = GsHandelsproductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRzvVerstrekkingOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking);
    }

    /**
     * Method called to associate a GsHandelsproducten object to this object
     * through the GsHandelsproducten foreign key attribute.
     *
     * @param    GsHandelsproducten $l GsHandelsproducten
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking(GsHandelsproducten $l)
    {
        if ($this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking === null) {
            $this->initGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking();
            $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingPartial = true;
        }

        if (!in_array($l, $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking($l);

            if ($this->gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion and $this->gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion->contains($l)) {
                $this->gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion->remove($this->gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking $gsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking The gsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking object to add.
     */
    protected function doAddGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking($gsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking)
    {
        $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking[]= $gsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking;
        $gsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking->setRzvVerstrekkingOmschrijving($this);
    }

    /**
     * @param	GsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking $gsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking The gsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking($gsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking)
    {
        if ($this->getGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking()->contains($gsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking)) {
            $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking->remove($this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking->search($gsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking));
            if (null === $this->gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion) {
                $this->gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion = clone $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking;
                $this->gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion->clear();
            }
            $this->gsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingScheduledForDeletion[]= clone $gsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking;
            $gsHandelsproductenRelatedByThesaurusRzvVerstrekkingRzvverstrekking->setRzvVerstrekkingOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingJoinGsVoorschrijfprGeneesmiddelIdentific($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsVoorschrijfprGeneesmiddelIdentific', $join_behavior);

        return $this->getGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekkingJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking($query, $con);
    }

    /**
     * Clears out the collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2()
     */
    public function clearGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2()
    {
        $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 = null; // important to set this to null since that means it is uninitialized
        $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial = null;

        return $this;
    }

    /**
     * reset is the collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($v = true)
    {
        $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial = $v;
    }

    /**
     * Initializes the collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 collection.
     *
     * By default this just sets the collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 collection to an empty array (like clearcollGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($overrideExisting = true)
    {
        if (null !== $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 && !$overrideExisting) {
            return;
        }
        $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 = new PropelObjectCollection();
        $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->setModel('GsHandelsproducten');
    }

    /**
     * Gets an array of GsHandelsproducten objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     * @throws PropelException
     */
    public function getGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2) {
                // return empty collection
                $this->initGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2();
            } else {
                $collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 = GsHandelsproductenQuery::create(null, $criteria)
                    ->filterByRzvBijlage2Omschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial && count($collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2)) {
                      $this->initGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2(false);

                      foreach ($collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 as $obj) {
                        if (false == $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->contains($obj)) {
                          $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->append($obj);
                        }
                      }

                      $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial = true;
                    }

                    $collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->getInternalIterator()->rewind();

                    return $collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2;
                }

                if ($partial && $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2) {
                    foreach ($this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 as $obj) {
                        if ($obj->isNew()) {
                            $collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2[] = $obj;
                        }
                    }
                }

                $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 = $collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2;
                $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial = false;
            }
        }

        return $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2;
    }

    /**
     * Sets a collection of GsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2(PropelCollection $gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2, PropelPDO $con = null)
    {
        $gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ToDelete = $this->getGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2(new Criteria(), $con)->diff($gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2);


        $this->gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion = $gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ToDelete;

        foreach ($gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ToDelete as $gsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Removed) {
            $gsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Removed->setRzvBijlage2Omschrijving(null);
        }

        $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 = null;
        foreach ($gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 as $gsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2) {
            $this->addGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($gsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2);
        }

        $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 = $gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2;
        $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial = false;

        return $this;
    }

    /**
     * Returns the number of related GsHandelsproducten objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsHandelsproducten objects.
     * @throws PropelException
     */
    public function countGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial && !$this->isNew();
        if (null === $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2());
            }
            $query = GsHandelsproductenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRzvBijlage2Omschrijving($this)
                ->count($con);
        }

        return count($this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2);
    }

    /**
     * Method called to associate a GsHandelsproducten object to this object
     * through the GsHandelsproducten foreign key attribute.
     *
     * @param    GsHandelsproducten $l GsHandelsproducten
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2(GsHandelsproducten $l)
    {
        if ($this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 === null) {
            $this->initGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2();
            $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2Partial = true;
        }

        if (!in_array($l, $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($l);

            if ($this->gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion and $this->gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion->contains($l)) {
                $this->gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion->remove($this->gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 $gsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 The gsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 object to add.
     */
    protected function doAddGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($gsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2)
    {
        $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2[]= $gsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2;
        $gsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->setRzvBijlage2Omschrijving($this);
    }

    /**
     * @param	GsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 $gsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 The gsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($gsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2)
    {
        if ($this->getGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2()->contains($gsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2)) {
            $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->remove($this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->search($gsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2));
            if (null === $this->gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion) {
                $this->gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion = clone $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2;
                $this->gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion->clear();
            }
            $this->gsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2ScheduledForDeletion[]= clone $gsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2;
            $gsHandelsproductenRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->setRzvBijlage2Omschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2JoinGsVoorschrijfprGeneesmiddelIdentific($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsVoorschrijfprGeneesmiddelIdentific', $join_behavior);

        return $this->getGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsHandelsproducten[] List of GsHandelsproducten objects
     */
    public function getGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2JoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsHandelsproductenQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2($query, $con);
    }

    /**
     * Clears out the collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode()
     */
    public function clearGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode()
    {
        $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode = null; // important to set this to null since that means it is uninitialized
        $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodePartial = null;

        return $this;
    }

    /**
     * reset is the collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($v = true)
    {
        $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodePartial = $v;
    }

    /**
     * Initializes the collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode collection.
     *
     * By default this just sets the collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode collection to an empty array (like clearcollGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($overrideExisting = true)
    {
        if (null !== $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode && !$overrideExisting) {
            return;
        }
        $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode = new PropelObjectCollection();
        $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode->setModel('GsIngegevenSamenstellingen');
    }

    /**
     * Gets an array of GsIngegevenSamenstellingen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsIngegevenSamenstellingen[] List of GsIngegevenSamenstellingen objects
     * @throws PropelException
     */
    public function getGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodePartial && !$this->isNew();
        if (null === $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode) {
                // return empty collection
                $this->initGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode();
            } else {
                $collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode = GsIngegevenSamenstellingenQuery::create(null, $criteria)
                    ->filterByEenheidHoeveelheidOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodePartial && count($collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode)) {
                      $this->initGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode(false);

                      foreach ($collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode as $obj) {
                        if (false == $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode->contains($obj)) {
                          $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode->append($obj);
                        }
                      }

                      $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodePartial = true;
                    }

                    $collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode->getInternalIterator()->rewind();

                    return $collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode;
                }

                if ($partial && $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode) {
                    foreach ($this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode as $obj) {
                        if ($obj->isNew()) {
                            $collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode[] = $obj;
                        }
                    }
                }

                $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode = $collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode;
                $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodePartial = false;
            }
        }

        return $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode;
    }

    /**
     * Sets a collection of GsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode(PropelCollection $gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode, PropelPDO $con = null)
    {
        $gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeToDelete = $this->getGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode(new Criteria(), $con)->diff($gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode);


        $this->gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeScheduledForDeletion = $gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeToDelete;

        foreach ($gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeToDelete as $gsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeRemoved) {
            $gsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeRemoved->setEenheidHoeveelheidOmschrijving(null);
        }

        $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode = null;
        foreach ($gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode as $gsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode) {
            $this->addGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($gsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode);
        }

        $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode = $gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode;
        $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsIngegevenSamenstellingen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsIngegevenSamenstellingen objects.
     * @throws PropelException
     */
    public function countGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodePartial && !$this->isNew();
        if (null === $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode());
            }
            $query = GsIngegevenSamenstellingenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEenheidHoeveelheidOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode);
    }

    /**
     * Method called to associate a GsIngegevenSamenstellingen object to this object
     * through the GsIngegevenSamenstellingen foreign key attribute.
     *
     * @param    GsIngegevenSamenstellingen $l GsIngegevenSamenstellingen
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode(GsIngegevenSamenstellingen $l)
    {
        if ($this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode === null) {
            $this->initGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode();
            $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodePartial = true;
        }

        if (!in_array($l, $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($l);

            if ($this->gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeScheduledForDeletion and $this->gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeScheduledForDeletion->contains($l)) {
                $this->gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeScheduledForDeletion->remove($this->gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode $gsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode The gsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode object to add.
     */
    protected function doAddGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($gsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode)
    {
        $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode[]= $gsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode;
        $gsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode->setEenheidHoeveelheidOmschrijving($this);
    }

    /**
     * @param	GsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode $gsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode The gsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($gsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode)
    {
        if ($this->getGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode()->contains($gsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode)) {
            $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode->remove($this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode->search($gsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode));
            if (null === $this->gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeScheduledForDeletion) {
                $this->gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeScheduledForDeletion = clone $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode;
                $this->gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeScheduledForDeletion->clear();
            }
            $this->gsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeScheduledForDeletion[]= clone $gsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode;
            $gsIngegevenSamenstellingenRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode->setEenheidHoeveelheidOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsIngegevenSamenstellingen[] List of GsIngegevenSamenstellingen objects
     */
    public function getGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeJoinGsHandelsproducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsIngegevenSamenstellingenQuery::create(null, $criteria);
        $query->joinWith('GsHandelsproducten', $join_behavior);

        return $this->getGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsIngegevenSamenstellingen[] List of GsIngegevenSamenstellingen objects
     */
    public function getGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKodeJoinGsGeneriekeNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsIngegevenSamenstellingenQuery::create(null, $criteria);
        $query->joinWith('GsGeneriekeNamen', $join_behavior);

        return $this->getGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode($query, $con);
    }

    /**
     * Clears out the collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode()
     */
    public function clearGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode()
    {
        $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode = null; // important to set this to null since that means it is uninitialized
        $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodePartial = null;

        return $this;
    }

    /**
     * reset is the collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($v = true)
    {
        $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodePartial = $v;
    }

    /**
     * Initializes the collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode collection.
     *
     * By default this just sets the collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode collection to an empty array (like clearcollGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($overrideExisting = true)
    {
        if (null !== $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode && !$overrideExisting) {
            return;
        }
        $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode = new PropelObjectCollection();
        $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode->setModel('GsIngegevenSamenstellingen');
    }

    /**
     * Gets an array of GsIngegevenSamenstellingen objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsIngegevenSamenstellingen[] List of GsIngegevenSamenstellingen objects
     * @throws PropelException
     */
    public function getGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodePartial && !$this->isNew();
        if (null === $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode) {
                // return empty collection
                $this->initGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode();
            } else {
                $collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode = GsIngegevenSamenstellingenQuery::create(null, $criteria)
                    ->filterByStamtoedieningswegOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodePartial && count($collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode)) {
                      $this->initGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode(false);

                      foreach ($collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode as $obj) {
                        if (false == $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode->contains($obj)) {
                          $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode->append($obj);
                        }
                      }

                      $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodePartial = true;
                    }

                    $collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode->getInternalIterator()->rewind();

                    return $collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode;
                }

                if ($partial && $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode) {
                    foreach ($this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode as $obj) {
                        if ($obj->isNew()) {
                            $collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode[] = $obj;
                        }
                    }
                }

                $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode = $collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode;
                $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodePartial = false;
            }
        }

        return $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode;
    }

    /**
     * Sets a collection of GsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode(PropelCollection $gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode, PropelPDO $con = null)
    {
        $gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeToDelete = $this->getGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode(new Criteria(), $con)->diff($gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode);


        $this->gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeScheduledForDeletion = $gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeToDelete;

        foreach ($gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeToDelete as $gsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeRemoved) {
            $gsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeRemoved->setStamtoedieningswegOmschrijving(null);
        }

        $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode = null;
        foreach ($gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode as $gsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode) {
            $this->addGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($gsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode);
        }

        $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode = $gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode;
        $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsIngegevenSamenstellingen objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsIngegevenSamenstellingen objects.
     * @throws PropelException
     */
    public function countGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodePartial && !$this->isNew();
        if (null === $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode());
            }
            $query = GsIngegevenSamenstellingenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByStamtoedieningswegOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode);
    }

    /**
     * Method called to associate a GsIngegevenSamenstellingen object to this object
     * through the GsIngegevenSamenstellingen foreign key attribute.
     *
     * @param    GsIngegevenSamenstellingen $l GsIngegevenSamenstellingen
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode(GsIngegevenSamenstellingen $l)
    {
        if ($this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode === null) {
            $this->initGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode();
            $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodePartial = true;
        }

        if (!in_array($l, $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($l);

            if ($this->gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeScheduledForDeletion and $this->gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeScheduledForDeletion->contains($l)) {
                $this->gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeScheduledForDeletion->remove($this->gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode $gsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode The gsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode object to add.
     */
    protected function doAddGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($gsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode)
    {
        $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode[]= $gsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode;
        $gsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode->setStamtoedieningswegOmschrijving($this);
    }

    /**
     * @param	GsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode $gsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode The gsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($gsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode)
    {
        if ($this->getGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode()->contains($gsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode)) {
            $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode->remove($this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode->search($gsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode));
            if (null === $this->gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeScheduledForDeletion) {
                $this->gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeScheduledForDeletion = clone $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode;
                $this->gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeScheduledForDeletion->clear();
            }
            $this->gsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeScheduledForDeletion[]= clone $gsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode;
            $gsIngegevenSamenstellingenRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode->setStamtoedieningswegOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsIngegevenSamenstellingen[] List of GsIngegevenSamenstellingen objects
     */
    public function getGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeJoinGsHandelsproducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsIngegevenSamenstellingenQuery::create(null, $criteria);
        $query->joinWith('GsHandelsproducten', $join_behavior);

        return $this->getGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsIngegevenSamenstellingen[] List of GsIngegevenSamenstellingen objects
     */
    public function getGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCodeJoinGsGeneriekeNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsIngegevenSamenstellingenQuery::create(null, $criteria);
        $query->joinWith('GsGeneriekeNamen', $join_behavior);

        return $this->getGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode($query, $con);
    }

    /**
     * Clears out the collGsNawGegevensGstandaards collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsNawGegevensGstandaards()
     */
    public function clearGsNawGegevensGstandaards()
    {
        $this->collGsNawGegevensGstandaards = null; // important to set this to null since that means it is uninitialized
        $this->collGsNawGegevensGstandaardsPartial = null;

        return $this;
    }

    /**
     * reset is the collGsNawGegevensGstandaards collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsNawGegevensGstandaards($v = true)
    {
        $this->collGsNawGegevensGstandaardsPartial = $v;
    }

    /**
     * Initializes the collGsNawGegevensGstandaards collection.
     *
     * By default this just sets the collGsNawGegevensGstandaards collection to an empty array (like clearcollGsNawGegevensGstandaards());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsNawGegevensGstandaards($overrideExisting = true)
    {
        if (null !== $this->collGsNawGegevensGstandaards && !$overrideExisting) {
            return;
        }
        $this->collGsNawGegevensGstandaards = new PropelObjectCollection();
        $this->collGsNawGegevensGstandaards->setModel('GsNawGegevensGstandaard');
    }

    /**
     * Gets an array of GsNawGegevensGstandaard objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsNawGegevensGstandaard[] List of GsNawGegevensGstandaard objects
     * @throws PropelException
     */
    public function getGsNawGegevensGstandaards($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsNawGegevensGstandaardsPartial && !$this->isNew();
        if (null === $this->collGsNawGegevensGstandaards || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsNawGegevensGstandaards) {
                // return empty collection
                $this->initGsNawGegevensGstandaards();
            } else {
                $collGsNawGegevensGstandaards = GsNawGegevensGstandaardQuery::create(null, $criteria)
                    ->filterBySoortOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsNawGegevensGstandaardsPartial && count($collGsNawGegevensGstandaards)) {
                      $this->initGsNawGegevensGstandaards(false);

                      foreach ($collGsNawGegevensGstandaards as $obj) {
                        if (false == $this->collGsNawGegevensGstandaards->contains($obj)) {
                          $this->collGsNawGegevensGstandaards->append($obj);
                        }
                      }

                      $this->collGsNawGegevensGstandaardsPartial = true;
                    }

                    $collGsNawGegevensGstandaards->getInternalIterator()->rewind();

                    return $collGsNawGegevensGstandaards;
                }

                if ($partial && $this->collGsNawGegevensGstandaards) {
                    foreach ($this->collGsNawGegevensGstandaards as $obj) {
                        if ($obj->isNew()) {
                            $collGsNawGegevensGstandaards[] = $obj;
                        }
                    }
                }

                $this->collGsNawGegevensGstandaards = $collGsNawGegevensGstandaards;
                $this->collGsNawGegevensGstandaardsPartial = false;
            }
        }

        return $this->collGsNawGegevensGstandaards;
    }

    /**
     * Sets a collection of GsNawGegevensGstandaard objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsNawGegevensGstandaards A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsNawGegevensGstandaards(PropelCollection $gsNawGegevensGstandaards, PropelPDO $con = null)
    {
        $gsNawGegevensGstandaardsToDelete = $this->getGsNawGegevensGstandaards(new Criteria(), $con)->diff($gsNawGegevensGstandaards);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsNawGegevensGstandaardsScheduledForDeletion = clone $gsNawGegevensGstandaardsToDelete;

        foreach ($gsNawGegevensGstandaardsToDelete as $gsNawGegevensGstandaardRemoved) {
            $gsNawGegevensGstandaardRemoved->setSoortOmschrijving(null);
        }

        $this->collGsNawGegevensGstandaards = null;
        foreach ($gsNawGegevensGstandaards as $gsNawGegevensGstandaard) {
            $this->addGsNawGegevensGstandaard($gsNawGegevensGstandaard);
        }

        $this->collGsNawGegevensGstandaards = $gsNawGegevensGstandaards;
        $this->collGsNawGegevensGstandaardsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsNawGegevensGstandaard objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsNawGegevensGstandaard objects.
     * @throws PropelException
     */
    public function countGsNawGegevensGstandaards(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsNawGegevensGstandaardsPartial && !$this->isNew();
        if (null === $this->collGsNawGegevensGstandaards || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsNawGegevensGstandaards) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsNawGegevensGstandaards());
            }
            $query = GsNawGegevensGstandaardQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySoortOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsNawGegevensGstandaards);
    }

    /**
     * Method called to associate a GsNawGegevensGstandaard object to this object
     * through the GsNawGegevensGstandaard foreign key attribute.
     *
     * @param    GsNawGegevensGstandaard $l GsNawGegevensGstandaard
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsNawGegevensGstandaard(GsNawGegevensGstandaard $l)
    {
        if ($this->collGsNawGegevensGstandaards === null) {
            $this->initGsNawGegevensGstandaards();
            $this->collGsNawGegevensGstandaardsPartial = true;
        }

        if (!in_array($l, $this->collGsNawGegevensGstandaards->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsNawGegevensGstandaard($l);

            if ($this->gsNawGegevensGstandaardsScheduledForDeletion and $this->gsNawGegevensGstandaardsScheduledForDeletion->contains($l)) {
                $this->gsNawGegevensGstandaardsScheduledForDeletion->remove($this->gsNawGegevensGstandaardsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsNawGegevensGstandaard $gsNawGegevensGstandaard The gsNawGegevensGstandaard object to add.
     */
    protected function doAddGsNawGegevensGstandaard($gsNawGegevensGstandaard)
    {
        $this->collGsNawGegevensGstandaards[]= $gsNawGegevensGstandaard;
        $gsNawGegevensGstandaard->setSoortOmschrijving($this);
    }

    /**
     * @param	GsNawGegevensGstandaard $gsNawGegevensGstandaard The gsNawGegevensGstandaard object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsNawGegevensGstandaard($gsNawGegevensGstandaard)
    {
        if ($this->getGsNawGegevensGstandaards()->contains($gsNawGegevensGstandaard)) {
            $this->collGsNawGegevensGstandaards->remove($this->collGsNawGegevensGstandaards->search($gsNawGegevensGstandaard));
            if (null === $this->gsNawGegevensGstandaardsScheduledForDeletion) {
                $this->gsNawGegevensGstandaardsScheduledForDeletion = clone $this->collGsNawGegevensGstandaards;
                $this->gsNawGegevensGstandaardsScheduledForDeletion->clear();
            }
            $this->gsNawGegevensGstandaardsScheduledForDeletion[]= clone $gsNawGegevensGstandaard;
            $gsNawGegevensGstandaard->setSoortOmschrijving(null);
        }

        return $this;
    }

    /**
     * Clears out the collGsPreferentieBeleids collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsPreferentieBeleids()
     */
    public function clearGsPreferentieBeleids()
    {
        $this->collGsPreferentieBeleids = null; // important to set this to null since that means it is uninitialized
        $this->collGsPreferentieBeleidsPartial = null;

        return $this;
    }

    /**
     * reset is the collGsPreferentieBeleids collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsPreferentieBeleids($v = true)
    {
        $this->collGsPreferentieBeleidsPartial = $v;
    }

    /**
     * Initializes the collGsPreferentieBeleids collection.
     *
     * By default this just sets the collGsPreferentieBeleids collection to an empty array (like clearcollGsPreferentieBeleids());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsPreferentieBeleids($overrideExisting = true)
    {
        if (null !== $this->collGsPreferentieBeleids && !$overrideExisting) {
            return;
        }
        $this->collGsPreferentieBeleids = new PropelObjectCollection();
        $this->collGsPreferentieBeleids->setModel('GsPreferentieBeleid');
    }

    /**
     * Gets an array of GsPreferentieBeleid objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsPreferentieBeleid[] List of GsPreferentieBeleid objects
     * @throws PropelException
     */
    public function getGsPreferentieBeleids($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsPreferentieBeleidsPartial && !$this->isNew();
        if (null === $this->collGsPreferentieBeleids || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsPreferentieBeleids) {
                // return empty collection
                $this->initGsPreferentieBeleids();
            } else {
                $collGsPreferentieBeleids = GsPreferentieBeleidQuery::create(null, $criteria)
                    ->filterByPreferentieStatusOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsPreferentieBeleidsPartial && count($collGsPreferentieBeleids)) {
                      $this->initGsPreferentieBeleids(false);

                      foreach ($collGsPreferentieBeleids as $obj) {
                        if (false == $this->collGsPreferentieBeleids->contains($obj)) {
                          $this->collGsPreferentieBeleids->append($obj);
                        }
                      }

                      $this->collGsPreferentieBeleidsPartial = true;
                    }

                    $collGsPreferentieBeleids->getInternalIterator()->rewind();

                    return $collGsPreferentieBeleids;
                }

                if ($partial && $this->collGsPreferentieBeleids) {
                    foreach ($this->collGsPreferentieBeleids as $obj) {
                        if ($obj->isNew()) {
                            $collGsPreferentieBeleids[] = $obj;
                        }
                    }
                }

                $this->collGsPreferentieBeleids = $collGsPreferentieBeleids;
                $this->collGsPreferentieBeleidsPartial = false;
            }
        }

        return $this->collGsPreferentieBeleids;
    }

    /**
     * Sets a collection of GsPreferentieBeleid objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsPreferentieBeleids A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsPreferentieBeleids(PropelCollection $gsPreferentieBeleids, PropelPDO $con = null)
    {
        $gsPreferentieBeleidsToDelete = $this->getGsPreferentieBeleids(new Criteria(), $con)->diff($gsPreferentieBeleids);


        $this->gsPreferentieBeleidsScheduledForDeletion = $gsPreferentieBeleidsToDelete;

        foreach ($gsPreferentieBeleidsToDelete as $gsPreferentieBeleidRemoved) {
            $gsPreferentieBeleidRemoved->setPreferentieStatusOmschrijving(null);
        }

        $this->collGsPreferentieBeleids = null;
        foreach ($gsPreferentieBeleids as $gsPreferentieBeleid) {
            $this->addGsPreferentieBeleid($gsPreferentieBeleid);
        }

        $this->collGsPreferentieBeleids = $gsPreferentieBeleids;
        $this->collGsPreferentieBeleidsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsPreferentieBeleid objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsPreferentieBeleid objects.
     * @throws PropelException
     */
    public function countGsPreferentieBeleids(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsPreferentieBeleidsPartial && !$this->isNew();
        if (null === $this->collGsPreferentieBeleids || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsPreferentieBeleids) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsPreferentieBeleids());
            }
            $query = GsPreferentieBeleidQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPreferentieStatusOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsPreferentieBeleids);
    }

    /**
     * Method called to associate a GsPreferentieBeleid object to this object
     * through the GsPreferentieBeleid foreign key attribute.
     *
     * @param    GsPreferentieBeleid $l GsPreferentieBeleid
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsPreferentieBeleid(GsPreferentieBeleid $l)
    {
        if ($this->collGsPreferentieBeleids === null) {
            $this->initGsPreferentieBeleids();
            $this->collGsPreferentieBeleidsPartial = true;
        }

        if (!in_array($l, $this->collGsPreferentieBeleids->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsPreferentieBeleid($l);

            if ($this->gsPreferentieBeleidsScheduledForDeletion and $this->gsPreferentieBeleidsScheduledForDeletion->contains($l)) {
                $this->gsPreferentieBeleidsScheduledForDeletion->remove($this->gsPreferentieBeleidsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsPreferentieBeleid $gsPreferentieBeleid The gsPreferentieBeleid object to add.
     */
    protected function doAddGsPreferentieBeleid($gsPreferentieBeleid)
    {
        $this->collGsPreferentieBeleids[]= $gsPreferentieBeleid;
        $gsPreferentieBeleid->setPreferentieStatusOmschrijving($this);
    }

    /**
     * @param	GsPreferentieBeleid $gsPreferentieBeleid The gsPreferentieBeleid object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsPreferentieBeleid($gsPreferentieBeleid)
    {
        if ($this->getGsPreferentieBeleids()->contains($gsPreferentieBeleid)) {
            $this->collGsPreferentieBeleids->remove($this->collGsPreferentieBeleids->search($gsPreferentieBeleid));
            if (null === $this->gsPreferentieBeleidsScheduledForDeletion) {
                $this->gsPreferentieBeleidsScheduledForDeletion = clone $this->collGsPreferentieBeleids;
                $this->gsPreferentieBeleidsScheduledForDeletion->clear();
            }
            $this->gsPreferentieBeleidsScheduledForDeletion[]= clone $gsPreferentieBeleid;
            $gsPreferentieBeleid->setPreferentieStatusOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsPreferentieBeleids from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPreferentieBeleid[] List of GsPreferentieBeleid objects
     */
    public function getGsPreferentieBeleidsJoinGsArtikelen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPreferentieBeleidQuery::create(null, $criteria);
        $query->joinWith('GsArtikelen', $join_behavior);

        return $this->getGsPreferentieBeleids($query, $con);
    }

    /**
     * Clears out the collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering()
     */
    public function clearGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering()
    {
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering = null; // important to set this to null since that means it is uninitialized
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingPartial = null;

        return $this;
    }

    /**
     * reset is the collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering($v = true)
    {
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingPartial = $v;
    }

    /**
     * Initializes the collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering collection.
     *
     * By default this just sets the collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering collection to an empty array (like clearcollGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering($overrideExisting = true)
    {
        if (null !== $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering && !$overrideExisting) {
            return;
        }
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering = new PropelObjectCollection();
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering->setModel('GsPrijsTariefTabel');
    }

    /**
     * Gets an array of GsPrijsTariefTabel objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsPrijsTariefTabel[] List of GsPrijsTariefTabel objects
     * @throws PropelException
     */
    public function getGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingPartial && !$this->isNew();
        if (null === $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering) {
                // return empty collection
                $this->initGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering();
            } else {
                $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering = GsPrijsTariefTabelQuery::create(null, $criteria)
                    ->filterBySoortCoderingOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingPartial && count($collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering)) {
                      $this->initGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering(false);

                      foreach ($collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering as $obj) {
                        if (false == $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering->contains($obj)) {
                          $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering->append($obj);
                        }
                      }

                      $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingPartial = true;
                    }

                    $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering->getInternalIterator()->rewind();

                    return $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering;
                }

                if ($partial && $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering) {
                    foreach ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering as $obj) {
                        if ($obj->isNew()) {
                            $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering[] = $obj;
                        }
                    }
                }

                $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering = $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering;
                $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingPartial = false;
            }
        }

        return $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering;
    }

    /**
     * Sets a collection of GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering(PropelCollection $gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering, PropelPDO $con = null)
    {
        $gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingToDelete = $this->getGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering(new Criteria(), $con)->diff($gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingScheduledForDeletion = clone $gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingToDelete;

        foreach ($gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingToDelete as $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCoderingRemoved) {
            $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCoderingRemoved->setSoortCoderingOmschrijving(null);
        }

        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering = null;
        foreach ($gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering as $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering) {
            $this->addGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering($gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering);
        }

        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering = $gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering;
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsPrijsTariefTabel objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsPrijsTariefTabel objects.
     * @throws PropelException
     */
    public function countGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingPartial && !$this->isNew();
        if (null === $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering());
            }
            $query = GsPrijsTariefTabelQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySoortCoderingOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering);
    }

    /**
     * Method called to associate a GsPrijsTariefTabel object to this object
     * through the GsPrijsTariefTabel foreign key attribute.
     *
     * @param    GsPrijsTariefTabel $l GsPrijsTariefTabel
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering(GsPrijsTariefTabel $l)
    {
        if ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering === null) {
            $this->initGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering();
            $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingPartial = true;
        }

        if (!in_array($l, $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering($l);

            if ($this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingScheduledForDeletion and $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingScheduledForDeletion->contains($l)) {
                $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingScheduledForDeletion->remove($this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering The gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering object to add.
     */
    protected function doAddGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering($gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering)
    {
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering[]= $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering;
        $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering->setSoortCoderingOmschrijving($this);
    }

    /**
     * @param	GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering The gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering($gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering)
    {
        if ($this->getGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering()->contains($gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering)) {
            $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering->remove($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering->search($gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering));
            if (null === $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingScheduledForDeletion) {
                $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingScheduledForDeletion = clone $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering;
                $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingScheduledForDeletion->clear();
            }
            $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCoderingScheduledForDeletion[]= clone $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering;
            $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortCoderingSoortCodering->setSoortCoderingOmschrijving(null);
        }

        return $this;
    }

    /**
     * Clears out the collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag()
     */
    public function clearGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag()
    {
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag = null; // important to set this to null since that means it is uninitialized
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragPartial = null;

        return $this;
    }

    /**
     * reset is the collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag($v = true)
    {
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragPartial = $v;
    }

    /**
     * Initializes the collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag collection.
     *
     * By default this just sets the collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag collection to an empty array (like clearcollGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag($overrideExisting = true)
    {
        if (null !== $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag && !$overrideExisting) {
            return;
        }
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag = new PropelObjectCollection();
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag->setModel('GsPrijsTariefTabel');
    }

    /**
     * Gets an array of GsPrijsTariefTabel objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsPrijsTariefTabel[] List of GsPrijsTariefTabel objects
     * @throws PropelException
     */
    public function getGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragPartial && !$this->isNew();
        if (null === $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag) {
                // return empty collection
                $this->initGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag();
            } else {
                $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag = GsPrijsTariefTabelQuery::create(null, $criteria)
                    ->filterBySoortTariefprijsbedragOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragPartial && count($collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag)) {
                      $this->initGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag(false);

                      foreach ($collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag as $obj) {
                        if (false == $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag->contains($obj)) {
                          $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag->append($obj);
                        }
                      }

                      $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragPartial = true;
                    }

                    $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag->getInternalIterator()->rewind();

                    return $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag;
                }

                if ($partial && $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag) {
                    foreach ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag as $obj) {
                        if ($obj->isNew()) {
                            $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag[] = $obj;
                        }
                    }
                }

                $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag = $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag;
                $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragPartial = false;
            }
        }

        return $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag;
    }

    /**
     * Sets a collection of GsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag(PropelCollection $gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag, PropelPDO $con = null)
    {
        $gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragToDelete = $this->getGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag(new Criteria(), $con)->diff($gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragScheduledForDeletion = clone $gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragToDelete;

        foreach ($gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragToDelete as $gsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragRemoved) {
            $gsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragRemoved->setSoortTariefprijsbedragOmschrijving(null);
        }

        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag = null;
        foreach ($gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag as $gsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag) {
            $this->addGsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag($gsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag);
        }

        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag = $gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag;
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsPrijsTariefTabel objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsPrijsTariefTabel objects.
     * @throws PropelException
     */
    public function countGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragPartial && !$this->isNew();
        if (null === $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag());
            }
            $query = GsPrijsTariefTabelQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySoortTariefprijsbedragOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag);
    }

    /**
     * Method called to associate a GsPrijsTariefTabel object to this object
     * through the GsPrijsTariefTabel foreign key attribute.
     *
     * @param    GsPrijsTariefTabel $l GsPrijsTariefTabel
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag(GsPrijsTariefTabel $l)
    {
        if ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag === null) {
            $this->initGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag();
            $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragPartial = true;
        }

        if (!in_array($l, $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag($l);

            if ($this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragScheduledForDeletion and $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragScheduledForDeletion->contains($l)) {
                $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragScheduledForDeletion->remove($this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag $gsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag The gsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag object to add.
     */
    protected function doAddGsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag($gsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag)
    {
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag[]= $gsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag;
        $gsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag->setSoortTariefprijsbedragOmschrijving($this);
    }

    /**
     * @param	GsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag $gsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag The gsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag($gsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag)
    {
        if ($this->getGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag()->contains($gsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag)) {
            $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag->remove($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag->search($gsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag));
            if (null === $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragScheduledForDeletion) {
                $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragScheduledForDeletion = clone $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag;
                $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragScheduledForDeletion->clear();
            }
            $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedragScheduledForDeletion[]= clone $gsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag;
            $gsPrijsTariefTabelRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag->setSoortTariefprijsbedragOmschrijving(null);
        }

        return $this;
    }

    /**
     * Clears out the collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron()
     */
    public function clearGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron()
    {
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron = null; // important to set this to null since that means it is uninitialized
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronPartial = null;

        return $this;
    }

    /**
     * reset is the collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron($v = true)
    {
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronPartial = $v;
    }

    /**
     * Initializes the collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron collection.
     *
     * By default this just sets the collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron collection to an empty array (like clearcollGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron($overrideExisting = true)
    {
        if (null !== $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron && !$overrideExisting) {
            return;
        }
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron = new PropelObjectCollection();
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron->setModel('GsPrijsTariefTabel');
    }

    /**
     * Gets an array of GsPrijsTariefTabel objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsPrijsTariefTabel[] List of GsPrijsTariefTabel objects
     * @throws PropelException
     */
    public function getGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronPartial && !$this->isNew();
        if (null === $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron) {
                // return empty collection
                $this->initGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron();
            } else {
                $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron = GsPrijsTariefTabelQuery::create(null, $criteria)
                    ->filterBySoortBronOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronPartial && count($collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron)) {
                      $this->initGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron(false);

                      foreach ($collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron as $obj) {
                        if (false == $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron->contains($obj)) {
                          $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron->append($obj);
                        }
                      }

                      $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronPartial = true;
                    }

                    $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron->getInternalIterator()->rewind();

                    return $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron;
                }

                if ($partial && $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron) {
                    foreach ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron as $obj) {
                        if ($obj->isNew()) {
                            $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron[] = $obj;
                        }
                    }
                }

                $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron = $collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron;
                $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronPartial = false;
            }
        }

        return $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron;
    }

    /**
     * Sets a collection of GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron(PropelCollection $gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron, PropelPDO $con = null)
    {
        $gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronToDelete = $this->getGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron(new Criteria(), $con)->diff($gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronScheduledForDeletion = clone $gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronToDelete;

        foreach ($gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronToDelete as $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBronRemoved) {
            $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBronRemoved->setSoortBronOmschrijving(null);
        }

        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron = null;
        foreach ($gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron as $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron) {
            $this->addGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron($gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron);
        }

        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron = $gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron;
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsPrijsTariefTabel objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsPrijsTariefTabel objects.
     * @throws PropelException
     */
    public function countGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronPartial && !$this->isNew();
        if (null === $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron());
            }
            $query = GsPrijsTariefTabelQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySoortBronOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron);
    }

    /**
     * Method called to associate a GsPrijsTariefTabel object to this object
     * through the GsPrijsTariefTabel foreign key attribute.
     *
     * @param    GsPrijsTariefTabel $l GsPrijsTariefTabel
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron(GsPrijsTariefTabel $l)
    {
        if ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron === null) {
            $this->initGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron();
            $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronPartial = true;
        }

        if (!in_array($l, $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron($l);

            if ($this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronScheduledForDeletion and $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronScheduledForDeletion->contains($l)) {
                $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronScheduledForDeletion->remove($this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron The gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron object to add.
     */
    protected function doAddGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron($gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron)
    {
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron[]= $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron;
        $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron->setSoortBronOmschrijving($this);
    }

    /**
     * @param	GsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron The gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron($gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron)
    {
        if ($this->getGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron()->contains($gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron)) {
            $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron->remove($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron->search($gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron));
            if (null === $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronScheduledForDeletion) {
                $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronScheduledForDeletion = clone $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron;
                $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronScheduledForDeletion->clear();
            }
            $this->gsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBronScheduledForDeletion[]= clone $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron;
            $gsPrijsTariefTabelRelatedByThesaurusverwijzingSoortBronSoortBron->setSoortBronOmschrijving(null);
        }

        return $this;
    }

    /**
     * Clears out the collGsRelatieOngewensteGroepensnks collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsRelatieOngewensteGroepensnks()
     */
    public function clearGsRelatieOngewensteGroepensnks()
    {
        $this->collGsRelatieOngewensteGroepensnks = null; // important to set this to null since that means it is uninitialized
        $this->collGsRelatieOngewensteGroepensnksPartial = null;

        return $this;
    }

    /**
     * reset is the collGsRelatieOngewensteGroepensnks collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsRelatieOngewensteGroepensnks($v = true)
    {
        $this->collGsRelatieOngewensteGroepensnksPartial = $v;
    }

    /**
     * Initializes the collGsRelatieOngewensteGroepensnks collection.
     *
     * By default this just sets the collGsRelatieOngewensteGroepensnks collection to an empty array (like clearcollGsRelatieOngewensteGroepensnks());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsRelatieOngewensteGroepensnks($overrideExisting = true)
    {
        if (null !== $this->collGsRelatieOngewensteGroepensnks && !$overrideExisting) {
            return;
        }
        $this->collGsRelatieOngewensteGroepensnks = new PropelObjectCollection();
        $this->collGsRelatieOngewensteGroepensnks->setModel('GsRelatieOngewensteGroepensnk');
    }

    /**
     * Gets an array of GsRelatieOngewensteGroepensnk objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsRelatieOngewensteGroepensnk[] List of GsRelatieOngewensteGroepensnk objects
     * @throws PropelException
     */
    public function getGsRelatieOngewensteGroepensnks($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsRelatieOngewensteGroepensnksPartial && !$this->isNew();
        if (null === $this->collGsRelatieOngewensteGroepensnks || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsRelatieOngewensteGroepensnks) {
                // return empty collection
                $this->initGsRelatieOngewensteGroepensnks();
            } else {
                $collGsRelatieOngewensteGroepensnks = GsRelatieOngewensteGroepensnkQuery::create(null, $criteria)
                    ->filterByOngewensteGroepenOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsRelatieOngewensteGroepensnksPartial && count($collGsRelatieOngewensteGroepensnks)) {
                      $this->initGsRelatieOngewensteGroepensnks(false);

                      foreach ($collGsRelatieOngewensteGroepensnks as $obj) {
                        if (false == $this->collGsRelatieOngewensteGroepensnks->contains($obj)) {
                          $this->collGsRelatieOngewensteGroepensnks->append($obj);
                        }
                      }

                      $this->collGsRelatieOngewensteGroepensnksPartial = true;
                    }

                    $collGsRelatieOngewensteGroepensnks->getInternalIterator()->rewind();

                    return $collGsRelatieOngewensteGroepensnks;
                }

                if ($partial && $this->collGsRelatieOngewensteGroepensnks) {
                    foreach ($this->collGsRelatieOngewensteGroepensnks as $obj) {
                        if ($obj->isNew()) {
                            $collGsRelatieOngewensteGroepensnks[] = $obj;
                        }
                    }
                }

                $this->collGsRelatieOngewensteGroepensnks = $collGsRelatieOngewensteGroepensnks;
                $this->collGsRelatieOngewensteGroepensnksPartial = false;
            }
        }

        return $this->collGsRelatieOngewensteGroepensnks;
    }

    /**
     * Sets a collection of GsRelatieOngewensteGroepensnk objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsRelatieOngewensteGroepensnks A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsRelatieOngewensteGroepensnks(PropelCollection $gsRelatieOngewensteGroepensnks, PropelPDO $con = null)
    {
        $gsRelatieOngewensteGroepensnksToDelete = $this->getGsRelatieOngewensteGroepensnks(new Criteria(), $con)->diff($gsRelatieOngewensteGroepensnks);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->gsRelatieOngewensteGroepensnksScheduledForDeletion = clone $gsRelatieOngewensteGroepensnksToDelete;

        foreach ($gsRelatieOngewensteGroepensnksToDelete as $gsRelatieOngewensteGroepensnkRemoved) {
            $gsRelatieOngewensteGroepensnkRemoved->setOngewensteGroepenOmschrijving(null);
        }

        $this->collGsRelatieOngewensteGroepensnks = null;
        foreach ($gsRelatieOngewensteGroepensnks as $gsRelatieOngewensteGroepensnk) {
            $this->addGsRelatieOngewensteGroepensnk($gsRelatieOngewensteGroepensnk);
        }

        $this->collGsRelatieOngewensteGroepensnks = $gsRelatieOngewensteGroepensnks;
        $this->collGsRelatieOngewensteGroepensnksPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsRelatieOngewensteGroepensnk objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsRelatieOngewensteGroepensnk objects.
     * @throws PropelException
     */
    public function countGsRelatieOngewensteGroepensnks(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsRelatieOngewensteGroepensnksPartial && !$this->isNew();
        if (null === $this->collGsRelatieOngewensteGroepensnks || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsRelatieOngewensteGroepensnks) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsRelatieOngewensteGroepensnks());
            }
            $query = GsRelatieOngewensteGroepensnkQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOngewensteGroepenOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsRelatieOngewensteGroepensnks);
    }

    /**
     * Method called to associate a GsRelatieOngewensteGroepensnk object to this object
     * through the GsRelatieOngewensteGroepensnk foreign key attribute.
     *
     * @param    GsRelatieOngewensteGroepensnk $l GsRelatieOngewensteGroepensnk
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsRelatieOngewensteGroepensnk(GsRelatieOngewensteGroepensnk $l)
    {
        if ($this->collGsRelatieOngewensteGroepensnks === null) {
            $this->initGsRelatieOngewensteGroepensnks();
            $this->collGsRelatieOngewensteGroepensnksPartial = true;
        }

        if (!in_array($l, $this->collGsRelatieOngewensteGroepensnks->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsRelatieOngewensteGroepensnk($l);

            if ($this->gsRelatieOngewensteGroepensnksScheduledForDeletion and $this->gsRelatieOngewensteGroepensnksScheduledForDeletion->contains($l)) {
                $this->gsRelatieOngewensteGroepensnksScheduledForDeletion->remove($this->gsRelatieOngewensteGroepensnksScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsRelatieOngewensteGroepensnk $gsRelatieOngewensteGroepensnk The gsRelatieOngewensteGroepensnk object to add.
     */
    protected function doAddGsRelatieOngewensteGroepensnk($gsRelatieOngewensteGroepensnk)
    {
        $this->collGsRelatieOngewensteGroepensnks[]= $gsRelatieOngewensteGroepensnk;
        $gsRelatieOngewensteGroepensnk->setOngewensteGroepenOmschrijving($this);
    }

    /**
     * @param	GsRelatieOngewensteGroepensnk $gsRelatieOngewensteGroepensnk The gsRelatieOngewensteGroepensnk object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsRelatieOngewensteGroepensnk($gsRelatieOngewensteGroepensnk)
    {
        if ($this->getGsRelatieOngewensteGroepensnks()->contains($gsRelatieOngewensteGroepensnk)) {
            $this->collGsRelatieOngewensteGroepensnks->remove($this->collGsRelatieOngewensteGroepensnks->search($gsRelatieOngewensteGroepensnk));
            if (null === $this->gsRelatieOngewensteGroepensnksScheduledForDeletion) {
                $this->gsRelatieOngewensteGroepensnksScheduledForDeletion = clone $this->collGsRelatieOngewensteGroepensnks;
                $this->gsRelatieOngewensteGroepensnksScheduledForDeletion->clear();
            }
            $this->gsRelatieOngewensteGroepensnksScheduledForDeletion[]= clone $gsRelatieOngewensteGroepensnk;
            $gsRelatieOngewensteGroepensnk->setOngewensteGroepenOmschrijving(null);
        }

        return $this;
    }

    /**
     * Clears out the collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau()
     */
    public function clearGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau()
    {
        $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau = null; // important to set this to null since that means it is uninitialized
        $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauPartial = null;

        return $this;
    }

    /**
     * reset is the collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau($v = true)
    {
        $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauPartial = $v;
    }

    /**
     * Initializes the collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau collection.
     *
     * By default this just sets the collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau collection to an empty array (like clearcollGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau($overrideExisting = true)
    {
        if (null !== $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau && !$overrideExisting) {
            return;
        }
        $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau = new PropelObjectCollection();
        $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau->setModel('GsPrescriptieProduct');
    }

    /**
     * Gets an array of GsPrescriptieProduct objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     * @throws PropelException
     */
    public function getGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauPartial && !$this->isNew();
        if (null === $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau) {
                // return empty collection
                $this->initGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau();
            } else {
                $collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau = GsPrescriptieProductQuery::create(null, $criteria)
                    ->filterByRedenVoorschrijvenHpkNiveauOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauPartial && count($collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau)) {
                      $this->initGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau(false);

                      foreach ($collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau as $obj) {
                        if (false == $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau->contains($obj)) {
                          $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau->append($obj);
                        }
                      }

                      $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauPartial = true;
                    }

                    $collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau->getInternalIterator()->rewind();

                    return $collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau;
                }

                if ($partial && $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau) {
                    foreach ($this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau as $obj) {
                        if ($obj->isNew()) {
                            $collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau[] = $obj;
                        }
                    }
                }

                $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau = $collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau;
                $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauPartial = false;
            }
        }

        return $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau;
    }

    /**
     * Sets a collection of GsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau(PropelCollection $gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau, PropelPDO $con = null)
    {
        $gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauToDelete = $this->getGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau(new Criteria(), $con)->diff($gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau);


        $this->gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauScheduledForDeletion = $gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauToDelete;

        foreach ($gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauToDelete as $gsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauRemoved) {
            $gsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauRemoved->setRedenVoorschrijvenHpkNiveauOmschrijving(null);
        }

        $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau = null;
        foreach ($gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau as $gsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau) {
            $this->addGsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau($gsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau);
        }

        $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau = $gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau;
        $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsPrescriptieProduct objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsPrescriptieProduct objects.
     * @throws PropelException
     */
    public function countGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauPartial && !$this->isNew();
        if (null === $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau());
            }
            $query = GsPrescriptieProductQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRedenVoorschrijvenHpkNiveauOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau);
    }

    /**
     * Method called to associate a GsPrescriptieProduct object to this object
     * through the GsPrescriptieProduct foreign key attribute.
     *
     * @param    GsPrescriptieProduct $l GsPrescriptieProduct
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau(GsPrescriptieProduct $l)
    {
        if ($this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau === null) {
            $this->initGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau();
            $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauPartial = true;
        }

        if (!in_array($l, $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau($l);

            if ($this->gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauScheduledForDeletion and $this->gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauScheduledForDeletion->contains($l)) {
                $this->gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauScheduledForDeletion->remove($this->gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau $gsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau The gsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau object to add.
     */
    protected function doAddGsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau($gsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau)
    {
        $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau[]= $gsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau;
        $gsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau->setRedenVoorschrijvenHpkNiveauOmschrijving($this);
    }

    /**
     * @param	GsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau $gsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau The gsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau($gsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau)
    {
        if ($this->getGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau()->contains($gsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau)) {
            $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau->remove($this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau->search($gsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau));
            if (null === $this->gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauScheduledForDeletion) {
                $this->gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauScheduledForDeletion = clone $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau;
                $this->gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauScheduledForDeletion->clear();
            }
            $this->gsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauScheduledForDeletion[]= clone $gsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau;
            $gsPrescriptieProductRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau->setRedenVoorschrijvenHpkNiveauOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauJoinGsGeneriekeProducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('GsGeneriekeProducten', $join_behavior);

        return $this->getGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveauJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau($query, $con);
    }

    /**
     * Clears out the collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype()
     */
    public function clearGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype()
    {
        $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype = null; // important to set this to null since that means it is uninitialized
        $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypePartial = null;

        return $this;
    }

    /**
     * reset is the collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype($v = true)
    {
        $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypePartial = $v;
    }

    /**
     * Initializes the collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype collection.
     *
     * By default this just sets the collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype collection to an empty array (like clearcollGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype($overrideExisting = true)
    {
        if (null !== $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype && !$overrideExisting) {
            return;
        }
        $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype = new PropelObjectCollection();
        $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype->setModel('GsPrescriptieProduct');
    }

    /**
     * Gets an array of GsPrescriptieProduct objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     * @throws PropelException
     */
    public function getGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypePartial && !$this->isNew();
        if (null === $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype) {
                // return empty collection
                $this->initGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype();
            } else {
                $collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype = GsPrescriptieProductQuery::create(null, $criteria)
                    ->filterByEmballagetypeOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypePartial && count($collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype)) {
                      $this->initGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype(false);

                      foreach ($collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype as $obj) {
                        if (false == $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype->contains($obj)) {
                          $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype->append($obj);
                        }
                      }

                      $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypePartial = true;
                    }

                    $collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype->getInternalIterator()->rewind();

                    return $collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype;
                }

                if ($partial && $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype) {
                    foreach ($this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype as $obj) {
                        if ($obj->isNew()) {
                            $collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype[] = $obj;
                        }
                    }
                }

                $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype = $collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype;
                $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypePartial = false;
            }
        }

        return $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype;
    }

    /**
     * Sets a collection of GsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype(PropelCollection $gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype, PropelPDO $con = null)
    {
        $gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeToDelete = $this->getGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype(new Criteria(), $con)->diff($gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype);


        $this->gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeScheduledForDeletion = $gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeToDelete;

        foreach ($gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeToDelete as $gsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetypeRemoved) {
            $gsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetypeRemoved->setEmballagetypeOmschrijving(null);
        }

        $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype = null;
        foreach ($gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype as $gsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype) {
            $this->addGsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype($gsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype);
        }

        $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype = $gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype;
        $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypePartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsPrescriptieProduct objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsPrescriptieProduct objects.
     * @throws PropelException
     */
    public function countGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypePartial && !$this->isNew();
        if (null === $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype());
            }
            $query = GsPrescriptieProductQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmballagetypeOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype);
    }

    /**
     * Method called to associate a GsPrescriptieProduct object to this object
     * through the GsPrescriptieProduct foreign key attribute.
     *
     * @param    GsPrescriptieProduct $l GsPrescriptieProduct
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype(GsPrescriptieProduct $l)
    {
        if ($this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype === null) {
            $this->initGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype();
            $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypePartial = true;
        }

        if (!in_array($l, $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype($l);

            if ($this->gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeScheduledForDeletion and $this->gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeScheduledForDeletion->contains($l)) {
                $this->gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeScheduledForDeletion->remove($this->gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype $gsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype The gsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype object to add.
     */
    protected function doAddGsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype($gsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype)
    {
        $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype[]= $gsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype;
        $gsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype->setEmballagetypeOmschrijving($this);
    }

    /**
     * @param	GsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype $gsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype The gsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype($gsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype)
    {
        if ($this->getGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype()->contains($gsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype)) {
            $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype->remove($this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype->search($gsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype));
            if (null === $this->gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeScheduledForDeletion) {
                $this->gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeScheduledForDeletion = clone $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype;
                $this->gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeScheduledForDeletion->clear();
            }
            $this->gsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeScheduledForDeletion[]= clone $gsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype;
            $gsPrescriptieProductRelatedByThesnrEmballagetypeEmballagetype->setEmballagetypeOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeJoinGsGeneriekeProducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('GsGeneriekeProducten', $join_behavior);

        return $this->getGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetypeJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype($query, $con);
    }

    /**
     * Clears out the collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct()
     */
    public function clearGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct()
    {
        $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct = null; // important to set this to null since that means it is uninitialized
        $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductPartial = null;

        return $this;
    }

    /**
     * reset is the collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct($v = true)
    {
        $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductPartial = $v;
    }

    /**
     * Initializes the collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct collection.
     *
     * By default this just sets the collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct collection to an empty array (like clearcollGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct($overrideExisting = true)
    {
        if (null !== $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct && !$overrideExisting) {
            return;
        }
        $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct = new PropelObjectCollection();
        $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct->setModel('GsPrescriptieProduct');
    }

    /**
     * Gets an array of GsPrescriptieProduct objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     * @throws PropelException
     */
    public function getGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductPartial && !$this->isNew();
        if (null === $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct) {
                // return empty collection
                $this->initGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct();
            } else {
                $collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct = GsPrescriptieProductQuery::create(null, $criteria)
                    ->filterByBasiseenheidProductOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductPartial && count($collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct)) {
                      $this->initGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct(false);

                      foreach ($collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct as $obj) {
                        if (false == $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct->contains($obj)) {
                          $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct->append($obj);
                        }
                      }

                      $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductPartial = true;
                    }

                    $collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct->getInternalIterator()->rewind();

                    return $collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct;
                }

                if ($partial && $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct) {
                    foreach ($this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct as $obj) {
                        if ($obj->isNew()) {
                            $collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct[] = $obj;
                        }
                    }
                }

                $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct = $collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct;
                $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductPartial = false;
            }
        }

        return $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct;
    }

    /**
     * Sets a collection of GsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct(PropelCollection $gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct, PropelPDO $con = null)
    {
        $gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductToDelete = $this->getGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct(new Criteria(), $con)->diff($gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct);


        $this->gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductScheduledForDeletion = $gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductToDelete;

        foreach ($gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductToDelete as $gsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProductRemoved) {
            $gsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProductRemoved->setBasiseenheidProductOmschrijving(null);
        }

        $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct = null;
        foreach ($gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct as $gsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct) {
            $this->addGsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct($gsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct);
        }

        $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct = $gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct;
        $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsPrescriptieProduct objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsPrescriptieProduct objects.
     * @throws PropelException
     */
    public function countGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductPartial && !$this->isNew();
        if (null === $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct());
            }
            $query = GsPrescriptieProductQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByBasiseenheidProductOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct);
    }

    /**
     * Method called to associate a GsPrescriptieProduct object to this object
     * through the GsPrescriptieProduct foreign key attribute.
     *
     * @param    GsPrescriptieProduct $l GsPrescriptieProduct
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct(GsPrescriptieProduct $l)
    {
        if ($this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct === null) {
            $this->initGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct();
            $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductPartial = true;
        }

        if (!in_array($l, $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct($l);

            if ($this->gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductScheduledForDeletion and $this->gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductScheduledForDeletion->contains($l)) {
                $this->gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductScheduledForDeletion->remove($this->gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct $gsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct The gsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct object to add.
     */
    protected function doAddGsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct($gsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct)
    {
        $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct[]= $gsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct;
        $gsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct->setBasiseenheidProductOmschrijving($this);
    }

    /**
     * @param	GsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct $gsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct The gsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct($gsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct)
    {
        if ($this->getGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct()->contains($gsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct)) {
            $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct->remove($this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct->search($gsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct));
            if (null === $this->gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductScheduledForDeletion) {
                $this->gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductScheduledForDeletion = clone $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct;
                $this->gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductScheduledForDeletion->clear();
            }
            $this->gsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductScheduledForDeletion[]= clone $gsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct;
            $gsPrescriptieProductRelatedByThesnrBasiseenheidProductBasiseenheidProduct->setBasiseenheidProductOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductJoinGsGeneriekeProducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('GsGeneriekeProducten', $join_behavior);

        return $this->getGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProductJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct($query, $con);
    }

    /**
     * Clears out the collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard()
     */
    public function clearGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard()
    {
        $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard = null; // important to set this to null since that means it is uninitialized
        $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardPartial = null;

        return $this;
    }

    /**
     * reset is the collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard($v = true)
    {
        $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardPartial = $v;
    }

    /**
     * Initializes the collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard collection.
     *
     * By default this just sets the collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard collection to an empty array (like clearcollGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard($overrideExisting = true)
    {
        if (null !== $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard && !$overrideExisting) {
            return;
        }
        $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard = new PropelObjectCollection();
        $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard->setModel('GsPrescriptieProduct');
    }

    /**
     * Gets an array of GsPrescriptieProduct objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     * @throws PropelException
     */
    public function getGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardPartial && !$this->isNew();
        if (null === $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard) {
                // return empty collection
                $this->initGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard();
            } else {
                $collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard = GsPrescriptieProductQuery::create(null, $criteria)
                    ->filterByHulpmiddelAardOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardPartial && count($collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard)) {
                      $this->initGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard(false);

                      foreach ($collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard as $obj) {
                        if (false == $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard->contains($obj)) {
                          $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard->append($obj);
                        }
                      }

                      $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardPartial = true;
                    }

                    $collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard->getInternalIterator()->rewind();

                    return $collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard;
                }

                if ($partial && $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard) {
                    foreach ($this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard as $obj) {
                        if ($obj->isNew()) {
                            $collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard[] = $obj;
                        }
                    }
                }

                $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard = $collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard;
                $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardPartial = false;
            }
        }

        return $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard;
    }

    /**
     * Sets a collection of GsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard(PropelCollection $gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard, PropelPDO $con = null)
    {
        $gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardToDelete = $this->getGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard(new Criteria(), $con)->diff($gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard);


        $this->gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardScheduledForDeletion = $gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardToDelete;

        foreach ($gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardToDelete as $gsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAardRemoved) {
            $gsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAardRemoved->setHulpmiddelAardOmschrijving(null);
        }

        $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard = null;
        foreach ($gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard as $gsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard) {
            $this->addGsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard($gsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard);
        }

        $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard = $gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard;
        $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsPrescriptieProduct objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsPrescriptieProduct objects.
     * @throws PropelException
     */
    public function countGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardPartial && !$this->isNew();
        if (null === $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard());
            }
            $query = GsPrescriptieProductQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByHulpmiddelAardOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard);
    }

    /**
     * Method called to associate a GsPrescriptieProduct object to this object
     * through the GsPrescriptieProduct foreign key attribute.
     *
     * @param    GsPrescriptieProduct $l GsPrescriptieProduct
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard(GsPrescriptieProduct $l)
    {
        if ($this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard === null) {
            $this->initGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard();
            $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardPartial = true;
        }

        if (!in_array($l, $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard($l);

            if ($this->gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardScheduledForDeletion and $this->gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardScheduledForDeletion->contains($l)) {
                $this->gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardScheduledForDeletion->remove($this->gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard $gsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard The gsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard object to add.
     */
    protected function doAddGsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard($gsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard)
    {
        $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard[]= $gsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard;
        $gsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard->setHulpmiddelAardOmschrijving($this);
    }

    /**
     * @param	GsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard $gsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard The gsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard($gsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard)
    {
        if ($this->getGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard()->contains($gsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard)) {
            $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard->remove($this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard->search($gsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard));
            if (null === $this->gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardScheduledForDeletion) {
                $this->gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardScheduledForDeletion = clone $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard;
                $this->gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardScheduledForDeletion->clear();
            }
            $this->gsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardScheduledForDeletion[]= clone $gsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard;
            $gsPrescriptieProductRelatedByThesnrHulpmiddelAardHulpmiddelAard->setHulpmiddelAardOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardJoinGsGeneriekeProducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('GsGeneriekeProducten', $join_behavior);

        return $this->getGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAardJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard($query, $con);
    }

    /**
     * Clears out the collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend()
     */
    public function clearGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend()
    {
        $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend = null; // important to set this to null since that means it is uninitialized
        $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendPartial = null;

        return $this;
    }

    /**
     * reset is the collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend($v = true)
    {
        $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendPartial = $v;
    }

    /**
     * Initializes the collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend collection.
     *
     * By default this just sets the collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend collection to an empty array (like clearcollGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend($overrideExisting = true)
    {
        if (null !== $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend && !$overrideExisting) {
            return;
        }
        $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend = new PropelObjectCollection();
        $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend->setModel('GsPrescriptieProduct');
    }

    /**
     * Gets an array of GsPrescriptieProduct objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     * @throws PropelException
     */
    public function getGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendPartial && !$this->isNew();
        if (null === $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend) {
                // return empty collection
                $this->initGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend();
            } else {
                $collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend = GsPrescriptieProductQuery::create(null, $criteria)
                    ->filterByRedenHulpstofIdentificerendOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendPartial && count($collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend)) {
                      $this->initGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend(false);

                      foreach ($collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend as $obj) {
                        if (false == $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend->contains($obj)) {
                          $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend->append($obj);
                        }
                      }

                      $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendPartial = true;
                    }

                    $collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend->getInternalIterator()->rewind();

                    return $collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend;
                }

                if ($partial && $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend) {
                    foreach ($this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend as $obj) {
                        if ($obj->isNew()) {
                            $collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend[] = $obj;
                        }
                    }
                }

                $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend = $collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend;
                $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendPartial = false;
            }
        }

        return $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend;
    }

    /**
     * Sets a collection of GsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend(PropelCollection $gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend, PropelPDO $con = null)
    {
        $gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendToDelete = $this->getGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend(new Criteria(), $con)->diff($gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend);


        $this->gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendScheduledForDeletion = $gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendToDelete;

        foreach ($gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendToDelete as $gsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendRemoved) {
            $gsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendRemoved->setRedenHulpstofIdentificerendOmschrijving(null);
        }

        $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend = null;
        foreach ($gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend as $gsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend) {
            $this->addGsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend($gsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend);
        }

        $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend = $gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend;
        $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsPrescriptieProduct objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsPrescriptieProduct objects.
     * @throws PropelException
     */
    public function countGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendPartial && !$this->isNew();
        if (null === $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend());
            }
            $query = GsPrescriptieProductQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRedenHulpstofIdentificerendOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend);
    }

    /**
     * Method called to associate a GsPrescriptieProduct object to this object
     * through the GsPrescriptieProduct foreign key attribute.
     *
     * @param    GsPrescriptieProduct $l GsPrescriptieProduct
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend(GsPrescriptieProduct $l)
    {
        if ($this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend === null) {
            $this->initGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend();
            $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendPartial = true;
        }

        if (!in_array($l, $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend($l);

            if ($this->gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendScheduledForDeletion and $this->gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendScheduledForDeletion->contains($l)) {
                $this->gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendScheduledForDeletion->remove($this->gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend $gsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend The gsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend object to add.
     */
    protected function doAddGsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend($gsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend)
    {
        $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend[]= $gsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend;
        $gsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend->setRedenHulpstofIdentificerendOmschrijving($this);
    }

    /**
     * @param	GsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend $gsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend The gsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend($gsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend)
    {
        if ($this->getGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend()->contains($gsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend)) {
            $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend->remove($this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend->search($gsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend));
            if (null === $this->gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendScheduledForDeletion) {
                $this->gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendScheduledForDeletion = clone $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend;
                $this->gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendScheduledForDeletion->clear();
            }
            $this->gsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendScheduledForDeletion[]= clone $gsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend;
            $gsPrescriptieProductRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend->setRedenHulpstofIdentificerendOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendJoinGsGeneriekeProducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('GsGeneriekeProducten', $join_behavior);

        return $this->getGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerendJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend($query, $con);
    }

    /**
     * Clears out the collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GsThesauriTotaal The current object (for fluent API support)
     * @see        addGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk()
     */
    public function clearGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk()
    {
        $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk = null; // important to set this to null since that means it is uninitialized
        $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkPartial = null;

        return $this;
    }

    /**
     * reset is the collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk collection loaded partially
     *
     * @return void
     */
    public function resetPartialGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk($v = true)
    {
        $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkPartial = $v;
    }

    /**
     * Initializes the collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk collection.
     *
     * By default this just sets the collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk collection to an empty array (like clearcollGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk($overrideExisting = true)
    {
        if (null !== $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk && !$overrideExisting) {
            return;
        }
        $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk = new PropelObjectCollection();
        $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk->setModel('GsPrescriptieProduct');
    }

    /**
     * Gets an array of GsPrescriptieProduct objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GsThesauriTotaal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     * @throws PropelException
     */
    public function getGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkPartial && !$this->isNew();
        if (null === $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk) {
                // return empty collection
                $this->initGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk();
            } else {
                $collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk = GsPrescriptieProductQuery::create(null, $criteria)
                    ->filterByVerwijzingExtraKenmerkOmschrijving($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkPartial && count($collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk)) {
                      $this->initGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk(false);

                      foreach ($collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk as $obj) {
                        if (false == $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk->contains($obj)) {
                          $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk->append($obj);
                        }
                      }

                      $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkPartial = true;
                    }

                    $collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk->getInternalIterator()->rewind();

                    return $collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk;
                }

                if ($partial && $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk) {
                    foreach ($this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk as $obj) {
                        if ($obj->isNew()) {
                            $collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk[] = $obj;
                        }
                    }
                }

                $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk = $collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk;
                $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkPartial = false;
            }
        }

        return $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk;
    }

    /**
     * Sets a collection of GsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function setGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk(PropelCollection $gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk, PropelPDO $con = null)
    {
        $gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkToDelete = $this->getGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk(new Criteria(), $con)->diff($gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk);


        $this->gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkScheduledForDeletion = $gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkToDelete;

        foreach ($gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkToDelete as $gsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkRemoved) {
            $gsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkRemoved->setVerwijzingExtraKenmerkOmschrijving(null);
        }

        $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk = null;
        foreach ($gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk as $gsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk) {
            $this->addGsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk($gsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk);
        }

        $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk = $gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk;
        $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkPartial = false;

        return $this;
    }

    /**
     * Returns the number of related GsPrescriptieProduct objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related GsPrescriptieProduct objects.
     * @throws PropelException
     */
    public function countGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkPartial && !$this->isNew();
        if (null === $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk());
            }
            $query = GsPrescriptieProductQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByVerwijzingExtraKenmerkOmschrijving($this)
                ->count($con);
        }

        return count($this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk);
    }

    /**
     * Method called to associate a GsPrescriptieProduct object to this object
     * through the GsPrescriptieProduct foreign key attribute.
     *
     * @param    GsPrescriptieProduct $l GsPrescriptieProduct
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function addGsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk(GsPrescriptieProduct $l)
    {
        if ($this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk === null) {
            $this->initGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk();
            $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkPartial = true;
        }

        if (!in_array($l, $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddGsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk($l);

            if ($this->gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkScheduledForDeletion and $this->gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkScheduledForDeletion->contains($l)) {
                $this->gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkScheduledForDeletion->remove($this->gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	GsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk $gsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk The gsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk object to add.
     */
    protected function doAddGsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk($gsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk)
    {
        $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk[]= $gsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk;
        $gsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk->setVerwijzingExtraKenmerkOmschrijving($this);
    }

    /**
     * @param	GsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk $gsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk The gsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk object to remove.
     * @return GsThesauriTotaal The current object (for fluent API support)
     */
    public function removeGsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk($gsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk)
    {
        if ($this->getGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk()->contains($gsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk)) {
            $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk->remove($this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk->search($gsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk));
            if (null === $this->gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkScheduledForDeletion) {
                $this->gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkScheduledForDeletion = clone $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk;
                $this->gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkScheduledForDeletion->clear();
            }
            $this->gsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkScheduledForDeletion[]= clone $gsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk;
            $gsPrescriptieProductRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk->setVerwijzingExtraKenmerkOmschrijving(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkJoinGsGeneriekeProducten($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('GsGeneriekeProducten', $join_behavior);

        return $this->getGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GsThesauriTotaal is new, it will return
     * an empty collection; or if this GsThesauriTotaal has previously
     * been saved, it will retrieve related GsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GsThesauriTotaal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|GsPrescriptieProduct[] List of GsPrescriptieProduct objects
     */
    public function getGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerkJoinGsNamen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = GsPrescriptieProductQuery::create(null, $criteria);
        $query->joinWith('GsNamen', $join_behavior);

        return $this->getGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->bestandnummer = null;
        $this->mutatiekode = null;
        $this->thesaurusnummer = null;
        $this->thesaurus_itemnummer = null;
        $this->memokode_item = null;
        $this->naam_item_4_posities = null;
        $this->naam_item_15_posities = null;
        $this->naam_item_25_posities = null;
        $this->naam_item_50_posities = null;
        $this->aanvullende_kode_1 = null;
        $this->aanvullende_kode_2 = null;
        $this->aanvullende_kode_3 = null;
        $this->aanvullende_kode_4 = null;
        $this->aanvullende_kode_5 = null;
        $this->aanvullende_kode_6 = null;
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
            if ($this->collGsSupplementaireProductenHistories) {
                foreach ($this->collGsSupplementaireProductenHistories as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking) {
                foreach ($this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg) {
                foreach ($this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2) {
                foreach ($this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsAanvullendeMedicatiebewakingsgegevenss) {
                foreach ($this->collGsAanvullendeMedicatiebewakingsgegevenss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen) {
                foreach ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte) {
                foreach ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte) {
                foreach ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte) {
                foreach ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode) {
                foreach ($this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode) {
                foreach ($this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode) {
                foreach ($this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsBijzondereKenmerkens) {
                foreach ($this->collGsBijzondereKenmerkens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid) {
                foreach ($this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg) {
                foreach ($this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel) {
                foreach ($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid) {
                foreach ($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode) {
                foreach ($this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode) {
                foreach ($this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid) {
                foreach ($this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking) {
                foreach ($this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode) {
                foreach ($this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode) {
                foreach ($this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode) {
                foreach ($this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode) {
                foreach ($this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode) {
                foreach ($this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode) {
                foreach ($this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode) {
                foreach ($this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking) {
                foreach ($this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2) {
                foreach ($this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode) {
                foreach ($this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode) {
                foreach ($this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsNawGegevensGstandaards) {
                foreach ($this->collGsNawGegevensGstandaards as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsPreferentieBeleids) {
                foreach ($this->collGsPreferentieBeleids as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering) {
                foreach ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag) {
                foreach ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron) {
                foreach ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsRelatieOngewensteGroepensnks) {
                foreach ($this->collGsRelatieOngewensteGroepensnks as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau) {
                foreach ($this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype) {
                foreach ($this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct) {
                foreach ($this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard) {
                foreach ($this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend) {
                foreach ($this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk) {
                foreach ($this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collGsSupplementaireProductenHistories instanceof PropelCollection) {
            $this->collGsSupplementaireProductenHistories->clearIterator();
        }
        $this->collGsSupplementaireProductenHistories = null;
        if ($this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking instanceof PropelCollection) {
            $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking->clearIterator();
        }
        $this->collGsRzvAanspraaksRelatedByThesaurusRzvVerstrekkingRzvverstrekking = null;
        if ($this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg instanceof PropelCollection) {
            $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg->clearIterator();
        }
        $this->collGsRzvAanspraaksRelatedByThesaurusRzvHulpmiddelenHulpmiddelenZorg = null;
        if ($this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 instanceof PropelCollection) {
            $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->clearIterator();
        }
        $this->collGsRzvAanspraaksRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 = null;
        if ($this->collGsAanvullendeMedicatiebewakingsgegevenss instanceof PropelCollection) {
            $this->collGsAanvullendeMedicatiebewakingsgegevenss->clearIterator();
        }
        $this->collGsAanvullendeMedicatiebewakingsgegevenss = null;
        if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen instanceof PropelCollection) {
            $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen->clearIterator();
        }
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusSoortenVerpakkingenThesaurusitemSoortenVerpakkingen = null;
        if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte instanceof PropelCollection) {
            $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte->clearIterator();
        }
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidHoogte = null;
        if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte instanceof PropelCollection) {
            $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte->clearIterator();
        }
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidDiepte = null;
        if ($this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte instanceof PropelCollection) {
            $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte->clearIterator();
        }
        $this->collGsLogistiekeVerpakkingsinformatiesRelatedByThesaurusMetItemsVanEenhedenThesaurusitemVanEenheidBreedte = null;
        if ($this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode instanceof PropelCollection) {
            $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode->clearIterator();
        }
        $this->collGsArtikelensRelatedByLandVanHerkomstThesaurusNummerLandVanHerkomstKode = null;
        if ($this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode instanceof PropelCollection) {
            $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode->clearIterator();
        }
        $this->collGsArtikelensRelatedByHoofdverpakkingOmschrijvingThesnrHoofdverpakkingOmschrijvingKode = null;
        if ($this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode instanceof PropelCollection) {
            $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode->clearIterator();
        }
        $this->collGsArtikelensRelatedByDeelverpakkingOmschrijvingThesnrDeelverpakkingOmschrijvingKode = null;
        if ($this->collGsBijzondereKenmerkens instanceof PropelCollection) {
            $this->collGsBijzondereKenmerkens->clearIterator();
        }
        $this->collGsBijzondereKenmerkens = null;
        if ($this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid instanceof PropelCollection) {
            $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid->clearIterator();
        }
        $this->collGsDailyDefinedDosesRelatedByDddeenheidThesaurusnummerDddeenheid = null;
        if ($this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg instanceof PropelCollection) {
            $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg->clearIterator();
        }
        $this->collGsDailyDefinedDosesRelatedByDddToedieningswegThesaurusnummerDddtoedieningsweg = null;
        if ($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel instanceof PropelCollection) {
            $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel->clearIterator();
        }
        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusNummerBeleidsregelItemnummerBeleidsregel = null;
        if ($this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid instanceof PropelCollection) {
            $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid->clearIterator();
        }
        $this->collGsDeclaratietabelDureGeneesmiddelensRelatedByThesaurusVerwijzingEenheidEenheid = null;
        if ($this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode instanceof PropelCollection) {
            $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode->clearIterator();
        }
        $this->collGsGeneriekeProductensRelatedByFarmaceutischeVormThesaurusnummerFarmaceutischeVormCode = null;
        if ($this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode instanceof PropelCollection) {
            $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode->clearIterator();
        }
        $this->collGsGeneriekeProductensRelatedByToedieningswegThesaurusnummerToedieningswegCode = null;
        if ($this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid instanceof PropelCollection) {
            $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid->clearIterator();
        }
        $this->collGsHandelsproductensRelatedByEenheidInkoophoeveelheidThesnrEenheidInkoophoeveelheid = null;
        if ($this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking instanceof PropelCollection) {
            $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking->clearIterator();
        }
        $this->collGsHandelsproductensRelatedByBasiseenheidVerpakkingThesnrBasiseenheidVerpakking = null;
        if ($this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode instanceof PropelCollection) {
            $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode->clearIterator();
        }
        $this->collGsHandelsproductensRelatedByEmballagemateriaalThesaurusnummerEmballagemateriaalKode = null;
        if ($this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode instanceof PropelCollection) {
            $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode->clearIterator();
        }
        $this->collGsHandelsproductensRelatedByEmballagesluitingThesaurusnummerEmballagesluitingKode = null;
        if ($this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode instanceof PropelCollection) {
            $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode->clearIterator();
        }
        $this->collGsHandelsproductensRelatedByEmballagedoseerinrThesaurusnrEmballagedoseerinrichtingKode = null;
        if ($this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode instanceof PropelCollection) {
            $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode->clearIterator();
        }
        $this->collGsHandelsproductensRelatedByKleurThesaurusnummerKleurKode = null;
        if ($this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode instanceof PropelCollection) {
            $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode->clearIterator();
        }
        $this->collGsHandelsproductensRelatedBySmaakThesaurusnummerSmaakKode = null;
        if ($this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode instanceof PropelCollection) {
            $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode->clearIterator();
        }
        $this->collGsHandelsproductensRelatedByBereidingsvoorschrThesaurusnummerBereidingsvoorschriftKode = null;
        if ($this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode instanceof PropelCollection) {
            $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode->clearIterator();
        }
        $this->collGsHandelsproductensRelatedByProduktgroepThesaurusnummerProduktgroepKode = null;
        if ($this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking instanceof PropelCollection) {
            $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking->clearIterator();
        }
        $this->collGsHandelsproductensRelatedByThesaurusRzvVerstrekkingRzvverstrekking = null;
        if ($this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 instanceof PropelCollection) {
            $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2->clearIterator();
        }
        $this->collGsHandelsproductensRelatedByRzvThesaurus120RzvvoorwaardenBijlage2 = null;
        if ($this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode instanceof PropelCollection) {
            $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode->clearIterator();
        }
        $this->collGsIngegevenSamenstellingensRelatedByEenhHvhWerkzstofThesaurus1EenhhoeveelheidWerkzameStofKode = null;
        if ($this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode instanceof PropelCollection) {
            $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode->clearIterator();
        }
        $this->collGsIngegevenSamenstellingensRelatedByStamtoedieningswegThesaurus58StamtoedieningswegCode = null;
        if ($this->collGsNawGegevensGstandaards instanceof PropelCollection) {
            $this->collGsNawGegevensGstandaards->clearIterator();
        }
        $this->collGsNawGegevensGstandaards = null;
        if ($this->collGsPreferentieBeleids instanceof PropelCollection) {
            $this->collGsPreferentieBeleids->clearIterator();
        }
        $this->collGsPreferentieBeleids = null;
        if ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering instanceof PropelCollection) {
            $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering->clearIterator();
        }
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortCoderingSoortCodering = null;
        if ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag instanceof PropelCollection) {
            $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag->clearIterator();
        }
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSrtTariefprijsbedragSoortTariefprijsbedrag = null;
        if ($this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron instanceof PropelCollection) {
            $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron->clearIterator();
        }
        $this->collGsPrijsTariefTabelsRelatedByThesaurusverwijzingSoortBronSoortBron = null;
        if ($this->collGsRelatieOngewensteGroepensnks instanceof PropelCollection) {
            $this->collGsRelatieOngewensteGroepensnks->clearIterator();
        }
        $this->collGsRelatieOngewensteGroepensnks = null;
        if ($this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau instanceof PropelCollection) {
            $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau->clearIterator();
        }
        $this->collGsPrescriptieProductsRelatedByThesnrRedenVoorschrijvenHpkNiveauRedenVoorschrijvenHpkNiveau = null;
        if ($this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype instanceof PropelCollection) {
            $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype->clearIterator();
        }
        $this->collGsPrescriptieProductsRelatedByThesnrEmballagetypeEmballagetype = null;
        if ($this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct instanceof PropelCollection) {
            $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct->clearIterator();
        }
        $this->collGsPrescriptieProductsRelatedByThesnrBasiseenheidProductBasiseenheidProduct = null;
        if ($this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard instanceof PropelCollection) {
            $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard->clearIterator();
        }
        $this->collGsPrescriptieProductsRelatedByThesnrHulpmiddelAardHulpmiddelAard = null;
        if ($this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend instanceof PropelCollection) {
            $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend->clearIterator();
        }
        $this->collGsPrescriptieProductsRelatedByThesnrRedenHulpstofIdentificerendRedenHulpstofIdentificerend = null;
        if ($this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk instanceof PropelCollection) {
            $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk->clearIterator();
        }
        $this->collGsPrescriptieProductsRelatedByThesnrVerwijzingExtraKenmerkVerwijzingExtraKenmerk = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GsThesauriTotaalPeer::DEFAULT_STRING_FORMAT);
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
